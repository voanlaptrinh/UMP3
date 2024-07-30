<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(Request $request, string $hl_full = '')
    {
        $this->checkSupportLanguage($hl_full);
        $controller = request()->route()->controller;
        $this->metaTile = __('home.title');
        $this->metaDescription = __('home.description');
        $this->alternate = '<link rel="alternate" hreflang="x-default" href="' .  $this->createUrl('home', array('hl' => 'en')) . '" />';
        foreach ($this->supportedLanguages as $language) {
            if ($language == $this->hl) continue;

            $this->alternate .= '<link rel="alternate" hreflang="' . $language . '" href="' .  $this->createUrl('home', array('hl' => $language)) . '" />';
        }

        return view('content', ['hl' => $controller->rules['home']]);
    }
}
