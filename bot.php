<?php

// Include Telegram Bot library
include("telegram-bot-1.5.0.php");

$bot_token = "1723005657:AAGW7XKDv5UBwjFab7pyYqLHgq1zku6oWqY";     // replace with your bot's API token
$bot_username = "Mute_new_members_bot";

// Create Bot object
$bot = new Bot($bot_token, $bot_username);

// Read raw data from the request body
$php_input = file_get_contents("php://input");

// Load update from data
$update = $bot->load_update($php_input);

// Bot logic: to respond 'Hi!' when user sends 'Hello' to the bot
if ($update->message) {
    if ($update->message->text == "Hello") {
        $bot->send_message($update->message->chat->id, "Hi!");
    }
}


if ($update->message) {
        $bot->send_message($update->message->chat->id, "Hi!");
    }


?>