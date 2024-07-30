<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\URL;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


    public $supportedLanguages = ['bn', 'de', 'es', 'en', 'fr', 'hi', 'id', 'it', 'ja', 'ko', 'ms', 'my', 'tl', 'pt', 'ru', 'ar', 'th', 'tr', 'vi', 'zh-cn', 'zh-tw'];
    static public $fullLanguages = [
        'en' => 'English', 'es' => 'Español', 'fr' => 'Français', 'de' => 'Deutsch', 'hi' => 'हिंदीहिंदी', 'id' => 'bahasa Indo', 'it' => 'Italiano', 'ja' => '日本語',
        'ko' => '한국인', 'ms' => 'Melayu', 'my' => 'မြန်မာ', 'tl' => 'Filipino', 'pt' => 'Português', 'ru' => 'Русский', 'ar' => 'عربي', 'th' => 'ภาษาไทย', 'tr' => 'Türkçe', 'vi' => 'Tiếng Việt',
        'zh-cn' => '中国', 'zh-tw' => '中華台北', 'bn' => 'বাংলা ভাষা',
    ];
    static public $rewrite_controllers = array(
        'home' => '/data/home.txt',
        'youtube' => '/data/youtube.txt',
        'youtubemp3' => '/data/youtubemp3.txt',
        'youtubemp4' => '/data/youtubemp4.txt',
        'tiktok' => '/data/tiktok.txt',
        'facebook' => '/data/facebook.txt',
        'instagram' => '/data/instagram.txt',
        'twitter' => '/data/twitter.txt',
        'sound' => '/data/sound.txt',
        'vimeo' => '/data/vimeo.txt',
        'linkedin' => '/data/linkedin.txt',
        '9gag' => '/data/9gag.txt',
        'reddit' => '/data/reddit.txt',
        'dailymotion' => '/data/dailymotion.txt',
        'pinterest' => '/data/pinterest.txt',
        'kwai' => '/data/kwai.txt',
        'likee' => '/data/likee.txt',
        'vk' => '/data/vk.txt',
        'bili' => '/data/bili.txt',
    );
    public $hl;
    public $rules;
    public $alternate;
    public $metaTile;
    public $metaDescription;

    function __construct()
    {
        $this->metaTile = __('main.title');
        $this->metaDescription = __('main.description');
        $this->setRules();
    }

    function renderView($view, $params = array())
    {
        $params['createUrl'] = [$this, 'createUrl'];
        return view($view, $params);
    }

    function setRules()
    {
        foreach (self::$rewrite_controllers as $controller => $rule_path) {
            $rule_path = public_path($rule_path);
            if (file_exists($rule_path)) {
                $lang_data  = file_get_contents($rule_path);
                $this->rules[$controller] = json_decode($lang_data, true);
            }
        }
    }

    function getRulesByController($control_name = '')
    {
        if (!$control_name) {
            $control_name = \Request::route()->getName();
        }
        return isset($this->rules[$control_name]) ? $this->rules[$control_name] : array();
    }

    function rewrite($lang_input, $control_name = '')
    {
        if (!$control_name) {
            $control_name = \Request::route()->getName();
        }

        return isset($this->rules[$control_name][$lang_input]) ? $this->rules[$control_name][$lang_input] : 'en';
    }

    public function checkSupportLanguage($hl_full)
    {
        $rules = $this->getRulesByController();

        $this->hl = substr($hl_full, 0, 2);
        if (str_contains($hl_full, 'zh')) {
            $this->hl = substr($hl_full, 0,  5);
        }

        if ($this->hl && (!isset(self::$fullLanguages[$this->hl]) || !isset($rules[$this->hl]) || !in_array($this->hl, $this->supportedLanguages))) {
            abort(404); // Chuyển hướng đến trang 404 nếu ngôn ngữ không được hỗ trợ
        }

        if (!$this->hl) {
            $this->hl = 'en';
        }

        //kiểm tra nếu lang trên url không khớp với rules thì redirect 301
        if (isset($rules[$this->hl]) && $hl_full != $rules[$this->hl]) {
            $correctUrl = $this->createUrl(\Request::route()->getName(), ['hl' => $this->hl]);
            header("Location: " . $correctUrl, true, 301);
            exit;
        }
    }
    function createUrl($route, $params = array())
    {
        if (isset(self::$rewrite_controllers[$route])) {
            if (isset($params['hl'])) {
                if (!isset($this->rules[$route][$params['hl']]))
                    $params['hl'] = 'en';
                $params['language'] = $this->rewrite($params['hl'], $route);
            }
            if (!isset($params['language']) && $this->hl) {
                $params['language'] = $this->rewrite($this->hl, $route);
            }
        }
        if (!isset(self::$rewrite_controllers[$route])) {
            unset($params['language']);
        }
        unset($params['hl']);

        return URL::route($route, $params);
    }
}
