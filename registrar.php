<?php

require_once 'vendor/autoload.php';
require_once './registrarConversation.php';

use BotMan\BotMan\BotMan;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Drivers\DriverManager;
use BotMan\BotMan\Cache\DoctrineCache;
use Doctrine\Common\Cache\PhpFileCache;
use BotMan\BotMan\Messages\Attachments\Image;
use BotMan\BotMan\Messages\Attachments\File;
use BotMan\BotMan\Messages\Outgoing\OutgoingMessage;

DriverManager::loadDriver(\BotMan\Drivers\Web\WebDriver::class);

$cacheDriver = new PhpFileCache(__DIR__ . '/cache');

$botman = BotManFactory::create([], new DoctrineCache($cacheDriver));

$botman->hears('Hello', function($bot) {
    $bot->startConversation(new registrarConversation());
});

$botman->fallback(function($bot) {
    $bot->reply('Sorry, I did not understand these commands. Here is a list of commands I understand: ...');
});

$botman->hears('adding and dropping form', function (BotMan $bot) {
    // Create attachment
    $attachment = new Image('./form_sample.png');

    // Build message object
    $message = OutgoingMessage::create('This is the form you need')
                ->withAttachment($attachment);

    // Reply message object
    $bot->reply($message);
});

$botman->listen();
