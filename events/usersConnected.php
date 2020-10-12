<?php
function usersConnected($socket)
{
    $socket->on('users-connected', function ($data) use ($socket) {
        $socket->broadcast->to($data['room'])->emit('user-connected-in-room', array(
            'user' => $data['userId'],
            'message' => "this user is connected"
        ));
    });
}
