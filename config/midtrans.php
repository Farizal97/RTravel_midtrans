<?php

return[
    'serverKey' =>env('MIDTRANS_SERVER_KEY',null),
    'IsProduction' =>env('MIDTRANS_IS_PRODUCTION',false),
    'Issanitized' =>env('MIDTRANS_IS_SANITIZED',true),
    'Is3ds' =>env('MIDTRANS_IS_3DS',true),
];