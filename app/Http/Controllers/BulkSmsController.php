<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;
use Twilio\Jwt\ClientToken;
use Validator;

class BulkSmsController extends Controller
{
    public function sendSms( Request $request )
    {

       $input = $request->get('qr_code'); 
       // Your Account SID and Auth Token from twilio.com/console
       $sid    = config('app.twilio')['TWILIO_ACCOUNT_SID'];
       $token  = config('app.twilio')['TWILIO_AUTH_TOKEN'];
       $client = new Client( $sid, $token );
       $confirmation = $request->get('confirmation');

       $validator = Validator::make($request->all(), [
        'name' => 'required',   
        'phone' => 'required', 
       ]);

       if ($confirmation == 'yes') {
        
        $name = $request->input( 'name' );  
        $numbers_in_arrays = explode( ',' , $request->input( 'phone' ) );
        $phone_number = preg_replace('/^62|^0/','+62', $numbers_in_arrays);

        $message = 'Halo ' . $name . '. Terima kasih telah melakukan RSVP Pernikahan Cynthia & Rizal. Link QR Code Anda adalah ' . $input ;
        $count = 0;

           foreach( $phone_number as $number )
           {
               $count++;

               $client->messages->create(
                   $number,
                   [
                       'from' => '+15597852032',
                       'body' => $message,
                   ]
               );
           }

           echo("berhasil");
              
       } else {
           echo("gagal");
       }
       
   }
   
   public function sendSmsPengajian( Request $request )
    {

       $input = $request->get('qr_code'); 
       // Your Account SID and Auth Token from twilio.com/console
       $sid    = config('app.twilio')['TWILIO_ACCOUNT_SID'];
       $token  = config('app.twilio')['TWILIO_AUTH_TOKEN'];
       $client = new Client( $sid, $token );
       $confirmation = $request->get('confirmation');

       $validator = Validator::make($request->all(), [
        'name' => 'required',   
        'phone' => 'required', 
       ]);

       if ($confirmation == 'yes') {
        
        $name = $request->input( 'name' );  
        $numbers_in_arrays = explode( ',' , $request->input( 'phone' ) );
        $phone_number = preg_replace('/^62|^0/','+62', $numbers_in_arrays);

        $message = 'Halo ' . $name . '. Terima kasih telah melakukan RSVP Pengajian Pernikahan Cynthia & Rizal. Link QR Code Anda adalah ' . $input ;
        $count = 0;

           foreach( $phone_number as $number )
           {
               $count++;

               $client->messages->create(
                   $number,
                   [
                       'from' => '+15597852032',
                       'body' => $message,
                   ]
               );
           }

           echo("berhasil");
              
       } else {
           echo("gagal");
       }
       
   } 
   
}
