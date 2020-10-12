<?php
function roomState($socket, $io)
{
    $socket->on('room-state', function ($data) use ($io) {
        $io->in($data['room'])->emit('change-room-state', $data);
    });
}
