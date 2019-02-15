<?php

/**
 * This file is part of graze/telnet-client.
 *
 * Copyright (c) 2018 Nature Delivered Ltd. <https://www.graze.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @license https://github.com/graze/telnet-client/blob/master/LICENSE
 * @link https://github.com/graze/telnet-client
 */

namespace Graze\TelnetClient;

use Graze\TelnetClient\Exception\TelnetExceptionInterface;
use Graze\TelnetClient\TelnetResponseInterface;
use Socket\Raw\Socket;

interface TelnetClientInterface
{
    /**
     * @param string $dsn
     * @param float|null $timeout
     * @throws TelnetExceptionInterface
     */
    public function connect($dsn, $timeout = null);

    /**
     * @param Socket $socket
     */
    public function setSocket(Socket $socket);

    /**
     * @return Socket
     */
    public function getSocket();

    /**
     * @param string $command
     * @param string $expected
     * @param string $expectedError
     * @return TelnetResponseInterface
     */
    public function execute($command, $expected = null, $expectedError = null);
}
