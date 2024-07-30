<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request, $language = 'en')
    {
        $videoUrl = $request->input('query');

        if (empty($videoUrl)) {
            return response()->json(['error' => 'Please enter a TikTok video URL'], 400);
        }
        $clientIP = urlencode($this->getRealIpAddr());
        $clientAgent = urlencode($request->header('User-Agent'));
        $clientGeo = urlencode(isset($_SERVER["HTTP_CF_IPCOUNTRY"])?strtoupper($_SERVER["HTTP_CF_IPCOUNTRY"]):'');
        $apiUrl = "https://api.ssvid.net/api/aDetail/index?url={$videoUrl}&client_geo={$clientGeo}&client_ip={$clientIP}&client_agent={$clientAgent}&t=" . time();

        try {
            $response = \Http::get($apiUrl);

            if ($response->successful()) {
                return $response->json();
            } else {
                return response()->json(['error' => 'Failed to fetch video details'], 500);
            }
        } catch (\Illuminate\Http\Client\RequestException $e) {
            if ($e->getCode() === 419) {
                $csrfToken = \Session::token();
                return response()->json(['error' => 'CSRF token mismatch', 'csrf_token' => $csrfToken], 419);
            } else {
                return response()->json(['error' => 'An error occurred'], 500);
            }
        }
    }

    public function searchTitle(Request $request, $language = 'en')
    {
        $videoUrl = urlencode($request->input('query'));

        if (empty($videoUrl)) {
            return response()->json(['error' => 'Please enter a link video '], 400);
        }
;
        $apiUrl = "https://api.ssvid.net/api/aDetail/search?q={$videoUrl}";
  
        try {
            $response = \Http::get($apiUrl);

            if ($response->successful()) {
                return $response->json();
            } else {
                return response()->json(['error' => 'Failed to fetch video details'], 500);
            }
        } catch (\Illuminate\Http\Client\RequestException $e) {
            if ($e->getCode() === 419) {
                $csrfToken = \Session::token();
                return response()->json(['error' => 'CSRF token mismatch', 'csrf_token' => $csrfToken], 419);
            } else {
                return response()->json(['error' => 'An error occurred'], 500);
            }
        }
    }
    private function getRealIpAddr()
    {
        $ip = '';

        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_CF_CONNECTING_IP'])) {
            $ip = $_SERVER['HTTP_CF_CONNECTING_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }

        if (strpos($ip, ',') !== false) {
            $ip = explode(',', $ip);
            $ip = $ip[0];
        }

        return $ip;
    }



    public function searchConvert(Request $request)
    {

        $vid = urlencode($request->input('vid'));
        $key = urlencode($request->input('key'));
        $site = urlencode(request()->url());
        $clientIP = urlencode($this->getRealIpAddr());
        $clientAgent = urlencode($request->header('User-Agent'));
        $clientGeo = urlencode(isset($_SERVER["HTTP_CF_IPCOUNTRY"])?strtoupper($_SERVER["HTTP_CF_IPCOUNTRY"]):'');
        $apiUrl = "https://api.ssvid.net/api/aDetail/convert?vid={$vid}&key={$key}&site={$site}&client_geo={$clientGeo}&client_ip={$clientIP}&client_agent={$clientAgent}&t=" . time();
        try {
            $response = \Http::get($apiUrl);
            if ($response->successful()) {
                return $response->json();
            } else {
                return response()->json(['error' => 'Failed to fetch video details'], 500);
            }
        } catch (\Illuminate\Http\Client\RequestException $e) {
            if ($e->getCode() === 419) {
                $csrfToken = \Session::token();
                return response()->json(['error' => 'CSRF token mismatch', 'csrf_token' => $csrfToken], 419);
            } else {
                return response()->json(['error' => 'An error occurred'], 500);
            }
        }
    }
    public function searchCheckTask(Request $request)
    {

        $vid = $request->input('vid');
        $b_id = urlencode($request->input('b_id'));
        $site = request()->url();
        $clientIP = urlencode($this->getRealIpAddr());
        $clientAgent = urlencode($request->header('User-Agent'));
        $clientGeo = urlencode(isset($_SERVER["HTTP_CF_IPCOUNTRY"])?strtoupper($_SERVER["HTTP_CF_IPCOUNTRY"]):'');
        $apiUrl = "https://api.ssvid.net/api/aDetail/checkTask?vid={$vid}&b_id={$b_id}&site={$site}&client_geo={$clientGeo}&client_ip={$clientIP}&client_agent={$clientAgent}&t=" . time();
        
        $response = \Http::get($apiUrl);
         if ($response->successful()) {
             return $response->json();
        } else {
            return response()->json(['error' => 'Failed to fetch video details'], 500);
        }

    }

}
