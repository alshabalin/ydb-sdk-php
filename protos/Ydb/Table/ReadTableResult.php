<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: kikimr/public/api/protos/ydb_table.proto

namespace Ydb\Table;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Result of read table request
 *
 * Generated from protobuf message <code>Ydb.Table.ReadTableResult</code>
 */
class ReadTableResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Result set (same as result of sql request)
     *
     * Generated from protobuf field <code>.Ydb.ResultSet result_set = 1;</code>
     */
    protected $result_set = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Ydb\ResultSet $result_set
     *           Result set (same as result of sql request)
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Kikimr\PBPublic\Api\Protos\YdbTable::initOnce();
        parent::__construct($data);
    }

    /**
     * Result set (same as result of sql request)
     *
     * Generated from protobuf field <code>.Ydb.ResultSet result_set = 1;</code>
     * @return \Ydb\ResultSet
     */
    public function getResultSet()
    {
        return isset($this->result_set) ? $this->result_set : null;
    }

    public function hasResultSet()
    {
        return isset($this->result_set);
    }

    public function clearResultSet()
    {
        unset($this->result_set);
    }

    /**
     * Result set (same as result of sql request)
     *
     * Generated from protobuf field <code>.Ydb.ResultSet result_set = 1;</code>
     * @param \Ydb\ResultSet $var
     * @return $this
     */
    public function setResultSet($var)
    {
        GPBUtil::checkMessage($var, \Ydb\ResultSet::class);
        $this->result_set = $var;

        return $this;
    }

}

