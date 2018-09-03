<?php
/**
 * This file is part of the prooph/event-store-client.
 * (c) 2018-2018 prooph software GmbH <contact@prooph.de>
 * (c) 2018-2018 Sascha-Oliver Prolic <saschaprolic@googlemail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Prooph\EventStoreClient;

class ClientConnectionEventArgs implements EventArgs
{
    /** @var EventStoreAsyncConnection */
    private $connection;
    /** @var EndPoint */
    private $remoteEndPoint;

    public function __construct(EventStoreAsyncConnection $connection, EndPoint $remoteEndPoint)
    {
        $this->connection = $connection;
        $this->remoteEndPoint = $remoteEndPoint;
    }

    public function connection(): EventStoreAsyncConnection
    {
        return $this->connection;
    }

    public function remoteEndPoint(): EndPoint
    {
        return $this->remoteEndPoint;
    }
}
