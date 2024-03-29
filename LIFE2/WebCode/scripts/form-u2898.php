<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2014.3.2.295
*/

require_once('form_process.php');

$form = array(
	'subject' => '５上 フォーム の送信',
	'heading' => '新規フォームの送信',
	'success_redirect' => '../phone/531.html#untitled',
	'resources' => array(
		'checkbox_checked' => 'チェック済み',
		'checkbox_unchecked' => '未チェック',
		'submitted_from' => 'Web サイトから送信されたフォーム : %s',
		'submitted_by' => '訪問者の IP アドレス : %s',
		'too_many_submissions' => '最近、この IP からの送信回数が多すぎます',
		'failed_to_send_email' => '電子メールの送信に失敗しました',
		'invalid_reCAPTCHA_private_key' => '無効な reCAPTCHA プライベートキーです。',
		'invalid_field_type' => '不明なフィールドの種類「%s」です。',
		'unknown_method' => '不明なサーバー要求メソッド'
	),
	'email' => array(
		'from' => 'xxx@xxx.xxx',
		'to' => 'xxx@xxx.xxx'
	),
	'fields' => array(
		'custom_U2904' => array(
			'order' => 2,
			'type' => 'string',
			'label' => 'パスワード',
			'required' => true,
			'errors' => array(
				'required' => 'フィールド「パスワード」が必要です。'
			)
		),
		'Email' => array(
			'order' => 1,
			'type' => 'email',
			'label' => 'メールアドレス',
			'required' => true,
			'errors' => array(
				'required' => 'フィールド「メールアドレス」が必要です。',
				'format' => 'フィールド「メールアドレス」には無効な電子メールが含まれています。'
			)
		)
	)
);

process_form($form);
?>
