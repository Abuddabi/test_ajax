<?php
include('helper.php');

class SubscribeController
{
    public function subscribe($request) {
 
      // $validation = $request->validate([
      //   'name' => 'required',
      //   'email' => 'required',
      //   'phone' => 'required',
      //   'msg' => 'required'
      // ]);
 
      $name = $request['name'];
      $email = $request['email'];
      $msg = $request['msg'];
      $phone = $request['phone'];

      $errors = [];
      if (!trim($name)) $errors[]  = "Введите имя";
      if (!trim($email)) $errors[] = "Введите email";
      if (!trim($msg)) $errors[]   = "Введите сообщение";
      if (!trim($phone)) $errors[] = "Введите телефон";

      if (!empty($errors)) {
        $errors += ['status' => 'error'];
        $response = $errors;
      }
      else {
        //здесь код отправки сообщения
        $send_result = true; //результат отправки собщения

        if ($send_result) $response = ['status' => 'success'];
      }

      $response = json_encode($response);
      echo $response;
 
      // Mail::to('Admin@gmail.com')->send(new SubscribeEmail($name, $email, $msg, $phone));
    }
}

$sc = new SubscribeController();
$sc->subscribe($_REQUEST);