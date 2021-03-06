<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: kikimr/public/api/protos/ydb_scheme.proto

namespace Ydb\Scheme;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Ydb.Scheme.ListDirectoryResult</code>
 */
class ListDirectoryResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Ydb.Scheme.Entry self = 1;</code>
     */
    protected $self = null;
    /**
     * Generated from protobuf field <code>repeated .Ydb.Scheme.Entry children = 2;</code>
     */
    private $children;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Ydb\Scheme\Entry $self
     *     @type \Ydb\Scheme\Entry[]|\Google\Protobuf\Internal\RepeatedField $children
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Kikimr\PBPublic\Api\Protos\YdbScheme::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Ydb.Scheme.Entry self = 1;</code>
     * @return \Ydb\Scheme\Entry
     */
    public function getSelf()
    {
        return isset($this->self) ? $this->self : null;
    }

    public function hasSelf()
    {
        return isset($this->self);
    }

    public function clearSelf()
    {
        unset($this->self);
    }

    /**
     * Generated from protobuf field <code>.Ydb.Scheme.Entry self = 1;</code>
     * @param \Ydb\Scheme\Entry $var
     * @return $this
     */
    public function setSelf($var)
    {
        GPBUtil::checkMessage($var, \Ydb\Scheme\Entry::class);
        $this->self = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Ydb.Scheme.Entry children = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Generated from protobuf field <code>repeated .Ydb.Scheme.Entry children = 2;</code>
     * @param \Ydb\Scheme\Entry[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setChildren($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Ydb\Scheme\Entry::class);
        $this->children = $arr;

        return $this;
    }

}

