<?php
function joinRoom($socket)
{
    $socket->on('join', function ($data) use ($socket) {
        $socket->join($data['room']);

        $socket->broadcast->to($data['room'])->emit('new-user-joined', array(
            'user' => $data['userId'],
            'message' => "has joined this room."
        ));
    });
}
