<?php
require 'PHPMailer/class.phpmailer.php';
$mail             = new PHPMailer();
/*服务器相关信息*/
$mail->IsSMTP();                        //设置使用SMTP服务器发送
$mail->SMTPAuth   = true;               //开启SMTP认证
$mail->Host       = 'smtp.sina.com';   	    //设置 SMTP 服务器,自己注册邮箱服务器地址
$mail->Username   = 'q910198131@sina.com';  		//发信人的邮箱名称
$mail->Password   = 'qw8557890258';          //发信人的邮箱密码
/*内容信息*/
$mail->IsHTML(true); 			         //指定邮件格式为：html
$mail->CharSet    ="UTF-8";			     //编码
$mail->From       = 'q910198131@sina.com';	 		 //发件人完整的邮箱名称
$mail->FromName   = '格子';			 //发信人署名
$mail->Subject    = "验证码";  			 //信的标题
$mail->MsgHTML("你的验证码是1234");  				 //发信主体内容
/*发送邮件*/
$mail->AddAddress('910198131@qq.com');  			 //收件人地址
//使用send函数进行发送
if($mail->Send()) {
    return 'yes';
} else {
    return $mail->ErrorInfo;//如果发送失败，则返回错误提示
}

?>