<?php

namespace Hak\GatewayMyanmar;

use Hak\GatewayMyanmar\Requests\GatewayRequest;

class Gateway extends GatewayRequest
{

    public function initialize(array $parameters = [])
    {
        $data = self::paymentToken([
            'amount' => self::getAmount($parameters['amount']),
            'description' => $parameters['description'],
            'invoiceNo' => self::getInvoice($parameters['invoice_no']),
            'name' => $parameters['name'],
            'email' => $parameters['email']   
        ]);

        return $data;
    }

    public function complete(array $parameters = [])
    {
         $data = self::paymentInquiry([
            'invoiceNo' => self::getInvoice($parameters['invoice_no'])
         ]);

         return $data;
    }
}