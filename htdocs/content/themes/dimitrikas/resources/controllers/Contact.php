<?php

namespace Theme\Controllers;

use Theme\Models\MailProvider;
use Themosis\Route\BaseController;
use Themosis\Facades\Asset;
use Themosis\Facades\Input;
use Themosis\Facades\Ajax;
use Themosis\Facades\View;
use Themosis\Page\Option;

class Contact extends BaseController
{
    public function __construct()
    {
        $this->register();
    }

    public function register() {
        Asset::add('contact_form', 'resources/views/contact.js', ['jquery'], '1.0', true);
    }

    public function index() {
        return view('contact');
    }

    public function process() {
        $data = Input::all();
        print_r($data);exit;
        $validated_data = MailProvider::validate($data);

        if ($validated_data) {
            $mailSent = MailProvider::send($data);
            return view('contact', ['mailSent' => $mailSent]);
        }else {
            return view('contact', ['error' => 1, 'formData' => $data]);
        }
    }

    static function ajaxProcess() {
        check_ajax_referer('dk', 'security');
        $data = array();
        parse_str($_POST['data'], $data);
        $validated_data = MailProvider::validate($data);
        if ($validated_data) {
            echo MailProvider::send($data);
        }else {
            echo false;
        }
        die();
    }
}
