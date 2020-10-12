<?php
function messageUpdate($socket, $io)
{
    $socket->on('message-updated', function ($data) use ($io) {
        $io->in($data['room'])->emit('new-message-updated', $data);
    });
}
