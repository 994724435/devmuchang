<?php
return array(
	//'配置项'=>'配置值'
	'TMPL_PARSE_STRING' => array(
			'__CSS__' =>'/Public/Home/css/',
			'__IMAGES__' =>'/Public/Home/images/',
			'__JS__' =>'/Public/Home/js/',
			'__SOURCE__' => '/Public/Home/source/',
		    'MAIL_SMTP'                     =>TRUE,
		    'MAIL_HOST'                     =>'smtp.qiye.163.com',//邮件发送SMTP服务器
		    'MAIL_SMTPAUTH'                 =>TRUE,
		    'MAIL_USERNAME'                 =>'zgjztt@shgeenam.com',//SMTP服务器登陆用户名
		    'MAIL_PASSWORD'                 =>'456852',//SMTP服务器登陆密码
		    'MAIL_SECURE'                   =>'tls',
		    'MAIL_CHARSET'                  =>'utf-8',
		    'MAIL_ISHTML'                   =>TRUE,
		    'MAIL_FROMNAME'                 =>'zgjztt@shgeenam.com',
			'MAIL_SMTPAUTH'                 =>'lihailong',
			'APPID'              => 'wxd23854d562b8d4bc', // 微信支付APPID
			'MCHID'              => '1397852902', // 微信支付MCHID 商户收款账号
			'KEY'                => 'M4pzG4KBWpJQKRqA5xDdcnyMGFRS72n2', // 微信支付KEY
			'APPSECRET'          => 'b6b4c802ae60fbf06346a520e784b25b', // 公众帐号secert (公众号支付专用)
			'NOTIFY_URL'         => 'http://www.diaoch.cn/register/index.php/Home/Index/notify', // 接收支付状态的连接
		)
);