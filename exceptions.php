<?php

class PaymentGatewayException extends Exception
{

}
class PaymentFailedExeption extends PaymentGatewayException
{
    protected $message = 'Payment failed';
}

class InvalidTokenExeption extends PaymentGatewayException
{
    protected $message = 'Invalid token';
}

class PaymentGateway
{
  public function charge($token, $amount)
  {
//    $payment = $this->service->charge($token, $amount);

      if(0)
      {
          throw new InvalidTokenExeption;
      }
      if(0) //if(!$payment->success())
      {
          throw new PaymentFailedExeption;
      }

  }
}

$gateway = new PaymentGateway();

try {
    $gateway->charge('123', 1000);
    echo "Peayment succeeded";
} catch (PaymentGatewayException $e) {
    die($e->getMessage());
} finally {
    die('Finaly');
}
//catch (InvalidTokenExeption $e) { PaymentGatewayException is a base class for both InvalidTokenExeption, PaymentFailedExeption.
//    die($e->getMessage());
//}
