# Myanmar Payment Integration Package

## Installation
```bash

composer require hak/gateway-myanmar

```

### Usage 

```php

use Illuminate\Http\Request;
use Hak\GatewayMyanmar\Facades\Gateway;

public function store(Request $request)
{
    // Request for paymentToken and Redirect Url
    $token = Gateway::initialize([
        'amount' => $request->amount,
        'invoice_no' => time(), 
        'description' => $request->description,
        'name' => auth()->user()->name,
        'email' => auth()->user()->email
    ]);

    return $token; // that will return array of webPaymentUrl, paymentToken, respCode, respDesc 

    // Request for paymentInquiry
    $inquiry = Gateway::complete([
        'invoice_no' => 1684666236,
    ]);

    return $inquiry; // that will return as an array of payment inquiry data
}

```

### Testing

```bash

./vendor/bin/pest

```