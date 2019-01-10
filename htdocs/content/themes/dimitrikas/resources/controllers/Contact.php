<?php

namespace Theme\Controllers;

use Theme\Controllers\Page;
use Theme\Models\MailProvider;
use Themosis\Facades\Asset;
use Themosis\Facades\Input;
use Themosis\Facades\View;

class Contact extends Page
{
    public function index($post, $query) {
        Asset::add('contact_form', 'resources/views/contact/contact.js', ['jquery'], '1.0', true);
        return view('contact/page', ['post' => $post]);
    }

    public function process() {
        Asset::add('contact_form', 'resources/views/contact/contact.js', ['jquery'], '1.0', true);

        $data = Input::all();
        $validated_data = MailProvider::validate($data);

        if ($validated_data) {
            $mailSent = MailProvider::send($data);
            return view('contact/page', ['mailSent' => $mailSent]);
        }else {
            return view('contact/page', ['error' => 1, 'formData' => $data]);
        }
    }

    static function ajaxProcess() {
        check_ajax_referer('dk', 'security');
        $data = array();
        parse_str(wp_unslash($_POST['data']), $data);
        $validated_data = MailProvider::validate($data);
        if ($validated_data) {
            echo MailProvider::send($data);
        }else {
            echo false;
        }
        die();
    }
}
