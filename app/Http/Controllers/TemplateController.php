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
        $templates = Template::all();
        return view('templates.index')->with('templates', $templates);
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
    
    public function showTemplateTwo(){
        return view('templates.agency.index');
    }
    
    public function showTemplateThree(){
        return view('templates.onePageWonder.index');
    }
}
