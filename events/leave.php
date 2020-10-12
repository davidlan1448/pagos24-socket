<?php
function leaveRoom($socket)
{
    $socket->on('leave', function ($data) use ($socket) {
        $socket->broadcast->to($data['room'])->emit('left room', array(
            'user' => $data['user'],
            'message' => "has leaved this room."
        ));

        $socket->leave($data['room']);
    });
}
