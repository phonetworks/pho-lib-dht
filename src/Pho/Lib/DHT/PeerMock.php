<?php declare(strict_types = 1);

/*
 * This file is part of the Pho package.
 *
 * (c) Emre Sokullu <emre@phonetworks.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pho\Lib\DHT;

class PeerMock implements PeerInterface
{
    protected $node_id;
    protected $ip;
    protected $port;

    public function __construct()
    {
        $this->node_id = ID::generate();
    }

    public function id(): string
    {
        return $this->node_id;
    }
}