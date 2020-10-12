<?php
require_once './events/join.php';
require_once './events/leave.php';
require_once './events/sendMessage.php';
require_once './events/messagesStateUpdated.php';
require_once './events/messageUpdate.php';
require_once './events/roomState.php';
require_once './events/usersConnected.php';

function socketEvents($socket, $io)
{
    joinRoom($socket);
    leaveRoom($socket);
    usersConnected($socket);
    sendMessage($socket, $io);
    messagesStateUpdated($socket, $io);
    messageUpdate($socket, $io);
    roomState($socket, $io);
}
