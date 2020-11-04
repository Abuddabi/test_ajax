<?php
ini_set('display_errors', '1');
error_reporting(E_ALL);

function out($arg, $method = 1)
{
  echo "<pre>";
  if ($method === 1) var_dump($arg);
  else print_r($arg);
  exit;
}

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

      $response = '{';
      if (!empty($errors)) {
        $errors += ['status' => 'error'];
        $response2 = json_encode($errors);


        $response .= '"status":"error"';
        foreach ($errors as $errors_item) {
          $response .= ','.$errors_item;
        }
      }
      $response .= '}';

      echo $response2;
 
      // Mail::to('Admin@gmail.com')->send(new SubscribeEmail($name, $email, $msg, $phone));
    }
}

$sc = new SubscribeController();
$sc->subscribe($_REQUEST);