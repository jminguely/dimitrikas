<?php

namespace Theme\Models;

use Themosis\Facades\Input;
use Themosis\Facades\Validator;
use Themosis\Page\Option;

class MailProvider
{
    /**
     * Process the contact form
     *
     * @return array
     */
    static function send($data)
    {
        $headers = "From: hello@dimitrikas.ch \r\n";
        $headers .= "Reply-to: " .$data['email']. "\r\n";
        $sentState =  wp_mail( Option::get('primary', 'email_address'), 'Message depuis votre site: ', $data['message'], $headers );
        return $sentState;
    }

    static function validate($data) {
        $data = Validator::multiple($data, [
            'email'      => ['email'],
            'message'    => ['textarea']
        ]);

        if(!$data['email'] || !$data['message']){
            return false;
        }
        return $data;
    }
}
