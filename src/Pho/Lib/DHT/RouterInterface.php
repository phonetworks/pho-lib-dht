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

/**
 * Router Interface
 * 
 * Must be constructed with a seed list.
 * 
 * @author Emre Sokullu <emre@phonetworks.org>
 */
interface RouterInterface
{

    /**
     * Returns the ID of the peer
     *
     * @return string
     */
    public function id(): string;

    /**
     * Pings the network about its existence
     * 
     * Must have a prior seeds list determined
     * in the constructor
     *
     * @param ?PeerInterface $self
     * 
     * @return void
     */
    public function bootstrap(?PeerInterface $self): void;

    /**
     * Finds a peer given its ID
     *
     * @param string $id
     * @return PeerInterface
     */
    public function findPeer(string $id): PeerInterface;


    /**
     * Finds a key given its key
     *
     * @param string $key
     * @return void
     */
    public function findValue(string $key)//: mixed
    ;

    /**
     * Undocumented function
     *
     * @param mixed $entity
     * @return void
     */
    public function touch(/*mixed*/ $entity): void;

    /**
     * Undocumented function
     *
     * @param mixed $entity
     * @return void
     */
    public function stale(/*mixed*/ $entity): void;

    
    /**
     * Returns the tree.
     * 
     * For debugging purposes.
     *
     * @return ?array null if it's in production
     */
    public function tree(): ?array;

}