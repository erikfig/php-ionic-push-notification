# PHP Push Notifications for Android

## Install

To install this package run:

	composer require webdevbr/php-ionic-push-notification:dev-master

Or add this line to `require` in the `composer.json`:

	"webdevbr/php-ionic-push-notification": "dev-master"

## Example

	$serverApiKey = 'serverApiKey';
	$client = new WebDevBr\Android\Clients\Guzzle;

	$push  = new WebDevBr\Android\PushNotifications($serverApiKey, $client);

	$to = 'registration_id'; // replate "registration_id" to code of the Android app
	$subject = 'Title';
	$message = 'Full message';

	$data = $push->send($to, $subject, $message);
	var_dump($data);

## Article

See [www.webdevbr.com.br/push-notification-no-android-enviando-notificacoes-do-seu-servidor](https://www.webdevbr.com.br/push-notification-no-android-enviando-notificacoes-do-seu-servidor).