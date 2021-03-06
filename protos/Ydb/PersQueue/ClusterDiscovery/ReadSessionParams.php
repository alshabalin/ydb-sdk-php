<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: kikimr/public/api/protos/ydb_persqueue_cluster_discovery.proto

namespace Ydb\PersQueue\ClusterDiscovery;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Ydb.PersQueue.ClusterDiscovery.ReadSessionParams</code>
 */
class ReadSessionParams extends \Google\Protobuf\Internal\Message
{
    /**
     * Path to the topic to read from.
     *
     * Generated from protobuf field <code>string topic = 1;</code>
     */
    protected $topic = '';
    protected $read_rule;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $topic
     *           Path to the topic to read from.
     *     @type string $mirror_to_cluster
     *     @type \Google\Protobuf\GPBEmpty $all_original
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Kikimr\PBPublic\Api\Protos\YdbPersqueueClusterDiscovery::initOnce();
        parent::__construct($data);
    }

    /**
     * Path to the topic to read from.
     *
     * Generated from protobuf field <code>string topic = 1;</code>
     * @return string
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * Path to the topic to read from.
     *
     * Generated from protobuf field <code>string topic = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTopic($var)
    {
        GPBUtil::checkString($var, True);
        $this->topic = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string mirror_to_cluster = 2;</code>
     * @return string
     */
    public function getMirrorToCluster()
    {
        return $this->readOneof(2);
    }

    public function hasMirrorToCluster()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>string mirror_to_cluster = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setMirrorToCluster($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Empty all_original = 3;</code>
     * @return \Google\Protobuf\GPBEmpty
     */
    public function getAllOriginal()
    {
        return $this->readOneof(3);
    }

    public function hasAllOriginal()
    {
        return $this->hasOneof(3);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Empty all_original = 3;</code>
     * @param \Google\Protobuf\GPBEmpty $var
     * @return $this
     */
    public function setAllOriginal($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\GPBEmpty::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getReadRule()
    {
        return $this->whichOneof("read_rule");
    }

}

