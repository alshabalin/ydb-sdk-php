<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: kikimr/public/api/protos/ydb_table.proto

namespace Ydb\Table;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Ydb.Table.CopyTableItem</code>
 */
class CopyTableItem extends \Google\Protobuf\Internal\Message
{
    /**
     * Copy from path
     *
     * Generated from protobuf field <code>string source_path = 1;</code>
     */
    protected $source_path = '';
    /**
     * Copy to path
     *
     * Generated from protobuf field <code>string destination_path = 2;</code>
     */
    protected $destination_path = '';
    /**
     * Copy options
     *
     * Generated from protobuf field <code>bool omit_indexes = 3;</code>
     */
    protected $omit_indexes = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $source_path
     *           Copy from path
     *     @type string $destination_path
     *           Copy to path
     *     @type bool $omit_indexes
     *           Copy options
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Kikimr\PBPublic\Api\Protos\YdbTable::initOnce();
        parent::__construct($data);
    }

    /**
     * Copy from path
     *
     * Generated from protobuf field <code>string source_path = 1;</code>
     * @return string
     */
    public function getSourcePath()
    {
        return $this->source_path;
    }

    /**
     * Copy from path
     *
     * Generated from protobuf field <code>string source_path = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSourcePath($var)
    {
        GPBUtil::checkString($var, True);
        $this->source_path = $var;

        return $this;
    }

    /**
     * Copy to path
     *
     * Generated from protobuf field <code>string destination_path = 2;</code>
     * @return string
     */
    public function getDestinationPath()
    {
        return $this->destination_path;
    }

    /**
     * Copy to path
     *
     * Generated from protobuf field <code>string destination_path = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDestinationPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->destination_path = $var;

        return $this;
    }

    /**
     * Copy options
     *
     * Generated from protobuf field <code>bool omit_indexes = 3;</code>
     * @return bool
     */
    public function getOmitIndexes()
    {
        return $this->omit_indexes;
    }

    /**
     * Copy options
     *
     * Generated from protobuf field <code>bool omit_indexes = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setOmitIndexes($var)
    {
        GPBUtil::checkBool($var);
        $this->omit_indexes = $var;

        return $this;
    }

}

