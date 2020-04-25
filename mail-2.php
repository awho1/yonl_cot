<?php

    require_once 'vendor/autoload.php';
    // Create the Transport
    $transport = (new Swift_SmtpTransport('smtp.yandex.ru', 465, 'SSL'))
    ->setUsername('robot@yonl.ru')
    ->setPassword('v89Qr66EdK56')
    ;

    $region = trim($_POST['region']);
    $name = trim($_POST['contact-name']);
    $phone = trim($_POST['phone-number']);

    // Create the Mailer using your created Transport
    $mailer = new Swift_Mailer($transport);

    // Create a message
    $message = (new Swift_Message('Заявка на подключение СНТ'))
    ->setFrom(['robot@yonl.ru' => 'Робот "Ю Онлайн"'])
    ->setTo(['jura.abvgd@gmail.com' => 'A name'])
    ->setBody('<table style="background-color: #9bbb31; margin: 0 auto;width: 100%; max-width: 580px;height: 500px;padding: 32px 32px; background-image: url(https://i.ibb.co/xgGWgXp/robot.png);background-repeat: no-repeat;background-position: bottom;">
    <tr>
      <td style="height: 56px;">
        <img src="https://i.ibb.co/jT3KGjn/logo.png" alt="Logo" border="0">
      </td>
    </tr>
    <tr>
      <td style="height: 128px; ">   
        <h1 style="text-align: left; font-weight: normal; color: #fff; font-size: 36px; line-height: 48px; margin-top: 40px;">Заявка на подключение СНТ</h1></td>
    </tr>
      <tr>
      <td style="height: 202px; position: relative;">   
        <ul style="list-style: none; padding: 0; font-weight: normal; color: #fff; font-size: 24px;">
          <li style="margin-bottom: 32px; color: #fff;"><b>Название СНТ:</b> ' .$region.'</li>
          <li style="margin-bottom: 32px; color: #fff;"><b>Контактное лицо:</b> ' .$name.'</li>
          <li style="margin-bottom: 32px; color: #fff;"><b>Телефон:</b> <a href="tel:'.$phone.'" style=" font-weight: normal; color: #fff;">'.$phone.'</a></li>
        </ul>
        <div style="position: absolute; top: -10px; right: -8vw; ">
  </div>
    </tr>
        <tr style="position: relative;">
      <td style="height: 143px; position: relative;">   
        <a href="tel:'.$phone.'" style="padding: 12px 24px; background-color: #fff; color:#9bbb31; text-decoration: none;  font-weight: normal; border-radius: 3px; font-size: 20px; line-height: 24px;margin-top: -60px;">
  Позвонить</a>
    </tr>
  </table>','text/html')
    ;

    // Send the message
    $result = $mailer->send($message);
