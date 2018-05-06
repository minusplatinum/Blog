<?php

namespace App\Http\Controllers;

use App\Template;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
class TemplateController extends Controller
{
    /**
     * Display a the template index.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('templates.index');
    }

    /**
     * Display the specified template.
     *
     * @param  \App\Template  $template
     * @return \Illuminate\Http\Response
     */
    public function show(Template $template)
    {
        
        return view('templates.show');
    }

    public function showTemplateOne(){
        return view('templates.creative.index');
    }
}
