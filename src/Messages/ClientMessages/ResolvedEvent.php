<?php

/**
 * This file is part of `prooph/event-store-client`.
 * (c) 2018-2020 Alexander Miertsch <kontakt@codeliner.ws>
 * (c) 2018-2020 Sascha-Oliver Prolic <saschaprolic@googlemail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);
// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: ClientMessageDtos.proto

namespace Prooph\EventStoreClient\Messages\ClientMessages;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Prooph.EventStoreClient.Messages.ClientMessages.ResolvedEvent</code>
 */
class ResolvedEvent extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Prooph.EventStoreClient.Messages.ClientMessages.EventRecord event = 1;</code>
     */
    protected $event = null;
    /**
     * Generated from protobuf field <code>.Prooph.EventStoreClient.Messages.ClientMessages.EventRecord link = 2;</code>
     */
    protected $link = null;
    /**
     * Generated from protobuf field <code>int64 commit_position = 3;</code>
     */
    protected $commit_position = 0;
    /**
     * Generated from protobuf field <code>int64 prepare_position = 4;</code>
     */
    protected $prepare_position = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Prooph\EventStoreClient\Messages\ClientMessages\EventRecord $event
     *     @type \Prooph\EventStoreClient\Messages\ClientMessages\EventRecord $link
     *     @type int|string $commit_position
     *     @type int|string $prepare_position
     * }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\ClientMessageDtos::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Prooph.EventStoreClient.Messages.ClientMessages.EventRecord event = 1;</code>
     * @return \Prooph\EventStoreClient\Messages\ClientMessages\EventRecord
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Generated from protobuf field <code>.Prooph.EventStoreClient.Messages.ClientMessages.EventRecord event = 1;</code>
     * @param \Prooph\EventStoreClient\Messages\ClientMessages\EventRecord $var
     * @return $this
     */
    public function setEvent($var)
    {
        GPBUtil::checkMessage($var, \Prooph\EventStoreClient\Messages\ClientMessages\EventRecord::class);
        $this->event = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Prooph.EventStoreClient.Messages.ClientMessages.EventRecord link = 2;</code>
     * @return \Prooph\EventStoreClient\Messages\ClientMessages\EventRecord
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Generated from protobuf field <code>.Prooph.EventStoreClient.Messages.ClientMessages.EventRecord link = 2;</code>
     * @param \Prooph\EventStoreClient\Messages\ClientMessages\EventRecord $var
     * @return $this
     */
    public function setLink($var)
    {
        GPBUtil::checkMessage($var, \Prooph\EventStoreClient\Messages\ClientMessages\EventRecord::class);
        $this->link = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 commit_position = 3;</code>
     * @return int|string
     */
    public function getCommitPosition()
    {
        return $this->commit_position;
    }

    /**
     * Generated from protobuf field <code>int64 commit_position = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCommitPosition($var)
    {
        GPBUtil::checkInt64($var);
        $this->commit_position = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 prepare_position = 4;</code>
     * @return int|string
     */
    public function getPreparePosition()
    {
        return $this->prepare_position;
    }

    /**
     * Generated from protobuf field <code>int64 prepare_position = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPreparePosition($var)
    {
        GPBUtil::checkInt64($var);
        $this->prepare_position = $var;

        return $this;
    }
}
