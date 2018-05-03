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
        //Create Single Page Template List
        $singlePageTemplates = Template::all()->where('templateType', 'Single Page Template');
        
        //Create Multi Page Template List
        $multiPageTemplates = Template::all()->where('templateType', 'Multi Page Template');

        //Create Multi Page Template List
        $webAppTemplates = Template::all()->where('templateType', 'Website Application Template');

        return view('templates.index')->with('singlePageTemplates', $singlePageTemplates)->with('multiPageTemplates', $multiPageTemplates)->with('webAppTemplates', $webAppTemplates);
    }

    /**
     * Display the specified template.
     *
     * @param  \App\Template  $template
     * @return \Illuminate\Http\Response
     */
    public function show(Template $template)
    {
        
        return view('templates.show')->with('template', $template);
    }

    /**
     * Display the template demo pages.
     *
     * @param  \App\Template  $template
     * @return \Illuminate\Http\Response
     */
    public function showDemo(Template $template)
    {//dd($template);
        $current = url()->current();
        $templates = $template;
        
        if($templates->id == 1) {
            return view('templates.SinglePage.template1.index');
        } else if($templates->id == 2) {
            return view('templates.SinglePage.template2.index');
        } else if ($template->id == 3) {
            return view('templates.SinglePage.template3.index');
        } else if($templates->id == 4) {    
            return view('templates.MultiPage.template1.index');
        } else if($templates->id == 5) {
            return view('templates.MultiPage.template2.index');
        } else if($templates->id == 6) {
            return view('templates.MultiPage.template3.index');
        } else {
            return 'No Template Found!';
        }
       
    }
}
