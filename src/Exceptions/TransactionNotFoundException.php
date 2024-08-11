<?php

namespace Dena\IranPayment\Exceptions;

use Throwable;

class TransactionNotFoundException extends IranPaymentException
{
    public function __construct(string $message = 'تراکنش مورد نظر یافت نشد.', int $code = 404, ?Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
