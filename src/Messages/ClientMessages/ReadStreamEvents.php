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
 * Generated from protobuf message <code>Prooph.EventStoreClient.Messages.ClientMessages.ReadStreamEvents</code>
 */
class ReadStreamEvents extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string event_stream_id = 1;</code>
     */
    protected $event_stream_id = '';
    /**
     * Generated from protobuf field <code>int64 from_event_number = 2;</code>
     */
    protected $from_event_number = 0;
    /**
     * Generated from protobuf field <code>int32 max_count = 3;</code>
     */
    protected $max_count = 0;
    /**
     * Generated from protobuf field <code>bool resolve_link_tos = 4;</code>
     */
    protected $resolve_link_tos = false;
    /**
     * Generated from protobuf field <code>bool require_master = 5;</code>
     */
    protected $require_master = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $event_stream_id
     *     @type int|string $from_event_number
     *     @type int $max_count
     *     @type bool $resolve_link_tos
     *     @type bool $require_master
     * }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\ClientMessageDtos::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string event_stream_id = 1;</code>
     * @return string
     */
    public function getEventStreamId()
    {
        return $this->event_stream_id;
    }

    /**
     * Generated from protobuf field <code>string event_stream_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setEventStreamId($var)
    {
        GPBUtil::checkString($var, true);
        $this->event_stream_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 from_event_number = 2;</code>
     * @return int|string
     */
    public function getFromEventNumber()
    {
        return $this->from_event_number;
    }

    /**
     * Generated from protobuf field <code>int64 from_event_number = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFromEventNumber($var)
    {
        GPBUtil::checkInt64($var);
        $this->from_event_number = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 max_count = 3;</code>
     * @return int
     */
    public function getMaxCount()
    {
        return $this->max_count;
    }

    /**
     * Generated from protobuf field <code>int32 max_count = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool resolve_link_tos = 4;</code>
     * @return bool
     */
    public function getResolveLinkTos()
    {
        return $this->resolve_link_tos;
    }

    /**
     * Generated from protobuf field <code>bool resolve_link_tos = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setResolveLinkTos($var)
    {
        GPBUtil::checkBool($var);
        $this->resolve_link_tos = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool require_master = 5;</code>
     * @return bool
     */
    public function getRequireMaster()
    {
        return $this->require_master;
    }

    /**
     * Generated from protobuf field <code>bool require_master = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setRequireMaster($var)
    {
        GPBUtil::checkBool($var);
        $this->require_master = $var;

        return $this;
    }
}
