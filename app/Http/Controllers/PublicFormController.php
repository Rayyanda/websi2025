<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Forms;
use App\Models\FormSubmission;

class PublicFormController extends Controller
{
    //
    public function show($slug)
    {
        $form = Forms::where('slug', $slug)->firstOrFail();

        // Jika form ada password, tampilkan form password dulu
        if ($form->password && session("form_access_$slug") !== true) {
            return view('form.password', compact('form'));
        }

        $now = now();
        if ($form->start_date && $now->lt($form->start_date)) {
            abort(403, 'Form belum dibuka.');
        }

        if ($form->end_date && $now->gt($form->end_date)) {
            abort(403, 'Form sudah ditutup.');
        }

        // Jika tidak ada password, langsung tampilkan form
        return view('form.show', compact('form'));
    }

    public function checkPassword(Request $request, $slug)
    {
        $form = Forms::where('slug', $slug)->firstOrFail();

        if ($request->password === $form->password) {
            // Simpan session untuk form ini
            session(["form_access_$slug" => true]);
            return redirect()->route('form.show', $slug);
        }

        return back()->withErrors(['password' => 'Password salah.']);
    }

    public function submit(Request $request, $slug)
    {
        $form = Forms::where('slug', $slug)->firstOrFail();

        // Cek password (kalau ada)
        if ($form->password && !session("form_access_$slug")) {
            abort(403, 'Unauthorized');
        }

        $data = $request->except('_token');

        FormSubmission::create([
            'form_id' => $form->form_id,
            'data' => $data,
        ]);

        return redirect()->route('form.show', $slug)->with('success', 'Data berhasil disimpan!');
    }
}
