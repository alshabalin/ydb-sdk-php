<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: kikimr/public/api/protos/ydb_issue_message.proto

namespace Ydb\Issue\IssueMessage;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Ydb.Issue.IssueMessage.Position</code>
 */
class Position extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 row = 1;</code>
     */
    protected $row = null;
    /**
     * Generated from protobuf field <code>uint32 column = 2;</code>
     */
    protected $column = null;
    /**
     * Generated from protobuf field <code>string file = 3;</code>
     */
    protected $file = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $row
     *     @type int $column
     *     @type string $file
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Kikimr\PBPublic\Api\Protos\YdbIssueMessage::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint32 row = 1;</code>
     * @return int
     */
    public function getRow()
    {
        return isset($this->row) ? $this->row : 0;
    }

    public function hasRow()
    {
        return isset($this->row);
    }

    public function clearRow()
    {
        unset($this->row);
    }

    /**
     * Generated from protobuf field <code>uint32 row = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setRow($var)
    {
        GPBUtil::checkUint32($var);
        $this->row = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 column = 2;</code>
     * @return int
     */
    public function getColumn()
    {
        return isset($this->column) ? $this->column : 0;
    }

    public function hasColumn()
    {
        return isset($this->column);
    }

    public function clearColumn()
    {
        unset($this->column);
    }

    /**
     * Generated from protobuf field <code>uint32 column = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setColumn($var)
    {
        GPBUtil::checkUint32($var);
        $this->column = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string file = 3;</code>
     * @return string
     */
    public function getFile()
    {
        return isset($this->file) ? $this->file : '';
    }

    public function hasFile()
    {
        return isset($this->file);
    }

    public function clearFile()
    {
        unset($this->file);
    }

    /**
     * Generated from protobuf field <code>string file = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setFile($var)
    {
        GPBUtil::checkString($var, True);
        $this->file = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Position::class, \Ydb\Issue\IssueMessage_Position::class);

