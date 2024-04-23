<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\sendEmail;
use Illuminate\Support\Facades\Storage;


class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('front.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('feedback.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input jika diperlukan
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'feedback_type' => 'required|string',
            'comments' => 'required|string',
            'titik' => 'required|string',
            'desa' => 'required|string',
            'kecamatan' => 'required|string',
            'kota' => 'required|string',
            'provinsi' => 'required|string',
            'nomor_hp' => 'required|string',
            'nik' => 'required|string',
            'foto' => 'required|image', // Validasi foto selfie
            'foto_tiang' => 'required|image', // Validasi foto selfie
        ]);
    
        // Mengunggah file foto selfie
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $fotoName = time() . '_' . $foto->getClientOriginalName();
            $foto->storeAs('public/foto', $fotoName);
            $validatedData['foto'] = $fotoName;
        }
    
        $data_email = [
            'subject' => $validatedData['subject'] . ' - ' . $validatedData['name'] . '(' . $validatedData['email'] . ')',
            'name' => $validatedData['name'],
            'sender_name' => $validatedData['email'],
            'email' => $validatedData['email'],
            'feedback_type' => $validatedData['feedback_type'],
            'comments' => $validatedData['comments'],
            'titik' => $validatedData['titik'],
            'desa' => $validatedData['desa'],
            'kecamatan' => $validatedData['kecamatan'],
            'kota' => $validatedData['kota'],
            'provinsi' => $validatedData['provinsi'],
            'nomor_hp' => $validatedData['nomor_hp'],
            'nik' => $validatedData['nik'],
            'foto' => $validatedData['foto'],
            'foto_tiang' => $validatedData['foto_tiang'],
        ];

        // Simpan file ke folder public/images dengan nama asli
        $fileName = $request->file('foto')->getClientOriginalName();
        $request->file('foto')->move(public_path('foto'), $fileName);

        // Buat URL untuk gambar yang disimpan di folder public
        $imageUrl = asset('foto/' . $fileName);

        // Sertakan URL gambar dalam array data email
        $validatedData['foto'] = $imageUrl;

        // Simpan file ke folder public/images dengan nama asli
        $fileName_tiang = $request->file('foto_tiang')->getClientOriginalName();
        $request->file('foto_tiang')->move(public_path('foto'), $fileName_tiang);

        // Buat URL untuk gambar yang disimpan di folder public
        $imageUrl_tiang = asset('foto/' . $fileName_tiang);

        // Sertakan URL gambar dalam array data email
        $validatedData['foto_tiang'] = $imageUrl_tiang;

    
        // Buat feedback baru
        if ($validatedData) {
            Feedback::create($validatedData);
    
            Mail::to("joshstorage123@gmail.com")->send(new sendEmail($data_email));
    
            // Redirect ke halaman yang sesuai setelah menyimpan feedback
            return redirect()->route('feedback.index')->with('success', 'Feedback has been submitted!');
        } else {
            return redirect()->route('feedback.index')->with('error', 'Failed!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Feedback $feedback)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Feedback $feedback)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Feedback $feedback)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Feedback $feedback)
    {
        $feedback->delete();

        return back()->with('success', 'Feedback has been deleted!');
    }
}
