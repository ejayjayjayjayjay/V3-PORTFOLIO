<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function downloadCV()
    {
        $path = public_path('/resume.pdf'); // Update the path to your CV file

        if (file_exists($path)) {
            return response()->download($path, 'resume.pdf', ['Content-Type' => 'application/pdf']);
        } else {
            return redirect()->back()->with('error', 'CV file not found.');
        }
    }
}
