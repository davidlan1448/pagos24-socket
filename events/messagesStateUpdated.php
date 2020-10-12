<?php
function messagesStateUpdated($socket, $io)
{
    $socket->on('messages-state-updated', function ($data) use ($io) {
        $io->in($data['room'])->emit('new-messages-state-updated', $data['messagesUpdated']);
    });
}
