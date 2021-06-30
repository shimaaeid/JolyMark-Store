<?php

namespace App\Http\Controllers;

use App\Http\Services\FatoraServices;
use Illuminate\Http\Request;

class FatooraController extends Controller
{
    private $fatoraServices;
    public function __construct(FatoraServices $fatoraServices)
    {
        $this->fatoraServices = $fatoraServices;
        
    }
    public function payOrder(){

         $data = [
            //Fill required data
            'NotificationOption' => 'Lnk', //'SMS', 'EML', or 'ALL'
            'InvoiceValue'       => '50',
            'CustomerName'       => 'fname lname',
            'DisplayCurrencyIso' => 'KWD',
            'CustomerEmail'      => 'shimaa@gmail.com',
            'CallBackUrl'        => 'https://google.com',
            'ErrorUrl'           => 'https://youtube.com', //or 'https://example.com/error.php'
            'Language'           => 'en', //or 'ar'
             //Fill optional data
        
        ];

       return  $this->fatoraServices->sendPayment($data);

    }
}
