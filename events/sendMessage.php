<?php
function sendMessage($socket, $io)
{
    $socket->on('message', function ($data) use ($io) {
        $io->in($data['room'])->emit('new message', $data);
    });
}
