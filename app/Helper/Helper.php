<?php


namespace App\Helper;


use Illuminate\Support\Facades\Mail;
use Mailjet\LaravelMailjet\Facades\Mailjet;
use Mailjet\Resources;

class Helper
{

    public static function send_contact($data)
    {
        //logger(env('MAIL_FROM_ADDRESS'));
        $data_ = array('email' => $data['email'],
            'name' => $data['name'],'subject' => 'contact form','data' => $data['message']);
        Mail::send(['html' => 'mails.contact'], $data_, function ($message)
        use ($data) {
            $message->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
            $message->to($data['email'], $data['name'])->subject("Contact form");
                  });

    }
    public static function mailajet($data){
        $mj = Mailjet::getClient();

        $body = [
            'FromEmail' => 'contact@guens-education.com',
            'FromName' => env('MAIL_FROM_NAME'),
            'Subject' => "contact form",
            'MJ-TemplateID' => 6207309,
            'MJ-TemplateLanguage' => true,
            'Vars' => json_decode(json_encode($data), true),
            'Recipients' => [['Email' => $data['email'],'infos@guens-education.com']]
        ];

        $response = $mj->post(Resources::$Email, ['body' => $body]);

        if($response->success()){
          return 1;
    } else {
        return 0;
    }
    }
}
