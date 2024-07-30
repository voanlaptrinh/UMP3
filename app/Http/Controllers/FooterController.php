<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function contactUs()
    {
        $this->supportedLanguages = array('en');
        return $this->renderView('footer.contact');
        // return view('footer.');
    }
    public function termService()
    {
        $this->supportedLanguages = array('en');
        return $this->renderView('footer.termService');
    }
    public function privatePolicy()
    {
        $this->supportedLanguages = array('en');
        return $this->renderView('footer.privatePolicy');
    }
}
