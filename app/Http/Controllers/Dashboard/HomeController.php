<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return view('dashboard.home');
    }

    /**
     * Upload images from summernote editor.
     *
     * @return string
     */
    public function upload()
    {
        /** @var Editor $editor */
        $editor = Editor::create([]);

        $editor->addOrUpdateMediaFromRequest('file');

        return $editor->getFirstMediaUrl();
    }
}
