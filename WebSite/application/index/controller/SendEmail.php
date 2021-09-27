<?php
namespace app\index\controller;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use think\Session;


class SendEmail
{
    public function sendCodeEmail($email)
    {
        // Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);
        $emailCode = "";
        for($i=0;$i<6;$i++){
            $emailCode .= rand(0, 9);
        }

        $date = date("Y年 m月 d日");

        Session::set('email_code', $emailCode);

        try {
            //Server settings
            $mail->setLanguage('ch', __DIR__.'/../language/');
            $mail->SMTPDebug = 0;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'smtp.mxhichina.com';                    // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'notice@wcz.one';                       // SMTP username
            $mail->Password   = '7076Zheshiwcz';                        // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 25;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

            //Recipients
            $mail->setFrom('notice@wcz.one', 'GrizzlyCraft');
            // $mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
            $mail->addAddress($email);               // Name is optional
            $mail->addReplyTo('notice@wcz.one');
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');

            // Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'GrizzlyCraft---邮箱验证码';
            $mail->Body    = <<<EOF
                <h5>亲爱的用户:</h5>
                <br>
                <p>您好, 你在GrizzlyCraft的注册验证码是:</p>
                <p>$emailCode</p>
                <small>(为了保障您帐号的安全性,请在1小时内完成验证)</small>
                <br>
                <br>
                <p>Antsis团队</p>
                <p>$date</p>
                <br>
            EOF;
            $mail->AltBody = '这是你的验证码: '. $emailCode;

            $mail->send();
            return 0;
        } catch (Exception $e) {
            return 1;
        }
    }
    
}
