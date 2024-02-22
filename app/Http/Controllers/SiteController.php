<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pengaduan;
use App\Models\Tanggapan;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;

class SiteController extends Controller
{
    public function yourControllerMethod()
    {


        return view('index.blade.view',);
    }

    public function index()
    {
        $faqs = [
            ['question' => 'Apakah Aplikasi Pengaduan SMK Telkom Jakarta ini ?', 'answer' => 'Aplikasi ini dibuat untuk menampung pengaduan & aspirasi dari semua warga SMK Telkom Jakarta.'],
            ['question' => 'Apakah bentuk respon yang diberikan kepada pelapor atas pengaduan?', 'answer' => 'Respon akan diberikan dalam bentuk tanggapan dan konfirmasi dari petugas apakah laporan akan diterima atau ditolak.'],
            ['question' => 'Apakah saya bisa mengubah laporan yang sudah saya kirimkan ?', 'answer' => 'Tentu. Laporan dapat kamu ubah jika belum direspon atau masih dalam status "pending".'],
            ['question' => 'Berapa lama respon atas pengaduan yang disampaikan diberikan kepada pelapor?', 'answer' => 'Kecepatan respon tergantung pada banyaknya orang yang mengirim laporan. Tapi, jangan khawatir jika sudah direspon maka pemberitahuan akan kami kirimkan ke email kamu.'],
            ['question' => 'Apakah pengaduan yang saya berikan akan selalu mendapatkan respon?', 'answer' => 'Tentu saja. Pasti akan selalu mendapatkan respon.'],
        ];
        return view('frontend.index', compact('faqs'));
    }
    // input pengaduan
    public function create()
    {
        return view('frontend.input-pengaduan');
    }

    public function edit($id)
    {
        return view('frontend.ubah-pengaduan', [
            'pengaduan' => Pengaduan::findOrfail(Crypt::decrypt($id)),
            'jenis' => ['pengaduan', 'aspirasi']
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_pengaduan' => 'unique',
            'judul_laporan' => 'required',
            'nis' => 'required',
            'nama' => 'required',
            'email' => 'required',
            'no_telp' => 'required|min:11|max:13',
            'alamat' => 'required',
            'jenis_pengaduan' => 'required',
            'tanggal_laporan' => 'required',
            'laporan' => 'required',
        ]);
        if ($id) {
            $pengaduan = Pengaduan::findOrfail($id);
            if ($request->hasFile('berkas_pendukung')) {
                if (file_exists($pengaduan->berkas_pendukung)) {
                    unlink($pengaduan->berkas_pendukung);
                }
                $file = $request->file('berkas_pendukung');
                $berkas = $file->move('uploads/berkas_pendukung/', time() . '-' . Str::limit(Str::slug($request->judul_laporan), 50, '') . '-' . strtotime('now') . '.' . $file->getClientOriginalExtension());
            }
            $data = $pengaduan->update([
                'nis' => $request->nis,
                'judul_laporan' => $request->judul_laporan,
                'nama' => $request->nama,
                'email' => $request->email,
                'no_telp' => $request->no_telp,
                'alamat' => $request->alamat,
                'jenis_pengaduan' => $request->jenis_pengaduan,
                'tanggal_laporan' => $request->tanggal_laporan,
                'laporan' => $request->laporan,
                'berkas_pendukung' => !empty($berkas) ? $berkas : $pengaduan->berkas_pendukung,
            ]);
            Activity::create([
                'activity' => Auth::user()->name . ' mengubah Data Pengaduan ' . $pengaduan->kode_pengaduan,
            ]);
            return redirect()->route('pengaduan.check')->with('status', 'Data pengaduan berhasil di ubah');
        } else {
            return redirect()->route('pengaduan.check')->with('status', 'Data tidak ditemukan');
        }
    }
    // store
    public function store(Request $request)
    {
        // action to store data pengaduan into database
        $request->validate([
            'kode_pengaduan' => 'unique',
            'judul_laporan' => 'required',
            'nis' => 'required',
            'nama' => 'required',
            'email' => 'required',
            'no_telp' => 'required|min:11|max:13',
            'alamat' => 'required',
            'jenis_pengaduan' => 'required',
            'tanggal_laporan' => 'required',
            'laporan' => 'required',
        ]);
        if ($request->hasFile('berkas_pendukung')) {
            $file = $request->file('berkas_pendukung');
            $berkas = $file->move('uploads/berkas_pendukung/', time() . '-' . Str::limit(Str::slug($request->judul_laporan), 50, '') . '-' . strtotime('now') . '.' . $file->getClientOriginalExtension());
        }
        Pengaduan::create([
            'kode_pengaduan' => 'PGD' . mt_rand(10000, 99999) . mt_rand(100, 999),
            'nis' => $request->nis,
            'judul_laporan' => $request->judul_laporan,
            'nama' => $request->nama,
            'email' => $request->email,
            'no_telp' => $request->no_telp,
            'alamat' => $request->alamat,
            'jenis_pengaduan' => $request->jenis_pengaduan,
            'tanggal_laporan' => $request->tanggal_laporan,
            'laporan' => $request->laporan,
            'berkas_pendukung' => !empty($berkas) ? $berkas : '',
            'status' => 'pending',
        ]);

        Activity::create([
            'activity' => Auth::user()->name . ' mengirim ' . $request->jenis_pengaduan,
        ]);

        return redirect()->route('success');
    }
    public function handleDetail($id = false)
    {
        $dec = Crypt::Decrypt($id);
        return view('frontend.detail-pengaduan', [
            'groupItem' => Tanggapan::with(['user', 'pengaduan'])->where('pengaduan_id', $dec)->first()
        ]);
    }

    public function handleSearch(Request $request)
    {
        return view('frontend.cek-pengaduan', [
            'pengaduan' => Pengaduan::where('judul_laporan', 'like', '%' . $request->keyword . '%')->paginate(3)
        ]);
    }

    public function handleCheck(Request $request)
    {
        return view('frontend.cek-pengaduan', ['pengaduan' => Pengaduan::paginate(3)]);
    }
    // sukses page
    public function success()
    {
        return view('frontend.sukses');
    }

    public function destroy($id)
    {
        Pengaduan::destroy($id);
        Activity::create([
            'activity' => Auth::user()->name . ' menghapus pengaduan/aspirasi',
        ]);
        return redirect()->route('pengaduan.check')->with('status', 'Data pengaduan berhasil dihapus');
    }
}
