<?php

use Workerman\Worker;
use PHPSocketIO\SocketIO;

require_once __DIR__ . '/vendor/autoload.php';
require_once './socketEvents.php';

/* Listen port 3000 for socket.io client */
$io = new SocketIO(3000);
$io->on('connection', function ($socket) use ($io) {
    print(" - connection - \n");

    socketEvents($socket, $io);
});

Worker::runAll();
