<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Link;

class LinkController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function show(?Link $link)
    {
        return view('show', ['link' => $link]);
    }

    public function create(Request $request)
    {
        $data = $request->validate([
            'url' => 'required|url'
        ]);

        // dd($data); dd($data);

        $link = new Link;

        $link->url = $data['url'];
        $link->short_code = substr(sha1($data['url']), 0, 6);

        $link->save();

        // dd($link);

        return redirect()->route('links.show', ['link' => $link]);
    }

    public function code_redirect(string $code)
    {
        $link = Link::where('short_code', $code)->first();

        return redirect($link->url);
    }
}
