<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: kikimr/public/api/protos/ydb_coordination.proto

namespace Ydb\Coordination\SessionResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 **
 * Used for checking liveness of the connection
 *
 * Generated from protobuf message <code>Ydb.Coordination.SessionResponse.PingPong</code>
 */
class PingPong extends \Google\Protobuf\Internal\Message
{
    /**
     * Opaque number specified in the ping message is echoed in the pong message
     *
     * Generated from protobuf field <code>uint64 opaque = 1;</code>
     */
    protected $opaque = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $opaque
     *           Opaque number specified in the ping message is echoed in the pong message
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Kikimr\PBPublic\Api\Protos\YdbCoordination::initOnce();
        parent::__construct($data);
    }

    /**
     * Opaque number specified in the ping message is echoed in the pong message
     *
     * Generated from protobuf field <code>uint64 opaque = 1;</code>
     * @return int|string
     */
    public function getOpaque()
    {
        return $this->opaque;
    }

    /**
     * Opaque number specified in the ping message is echoed in the pong message
     *
     * Generated from protobuf field <code>uint64 opaque = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setOpaque($var)
    {
        GPBUtil::checkUint64($var);
        $this->opaque = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PingPong::class, \Ydb\Coordination\SessionResponse_PingPong::class);

