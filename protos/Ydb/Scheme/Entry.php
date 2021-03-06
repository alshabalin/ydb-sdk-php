<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: kikimr/public/api/protos/ydb_scheme.proto

namespace Ydb\Scheme;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Ydb.Scheme.Entry</code>
 */
class Entry extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of scheme entry (dir2 of /dir1/dir2)
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * SID (Security ID) of user or group
     *
     * Generated from protobuf field <code>string owner = 2;</code>
     */
    protected $owner = '';
    /**
     * Generated from protobuf field <code>.Ydb.Scheme.Entry.Type type = 5;</code>
     */
    protected $type = 0;
    /**
     * Generated from protobuf field <code>repeated .Ydb.Scheme.Permissions effective_permissions = 6;</code>
     */
    private $effective_permissions;
    /**
     * Generated from protobuf field <code>repeated .Ydb.Scheme.Permissions permissions = 7;</code>
     */
    private $permissions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Name of scheme entry (dir2 of /dir1/dir2)
     *     @type string $owner
     *           SID (Security ID) of user or group
     *     @type int $type
     *     @type \Ydb\Scheme\Permissions[]|\Google\Protobuf\Internal\RepeatedField $effective_permissions
     *     @type \Ydb\Scheme\Permissions[]|\Google\Protobuf\Internal\RepeatedField $permissions
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Kikimr\PBPublic\Api\Protos\YdbScheme::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of scheme entry (dir2 of /dir1/dir2)
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Name of scheme entry (dir2 of /dir1/dir2)
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * SID (Security ID) of user or group
     *
     * Generated from protobuf field <code>string owner = 2;</code>
     * @return string
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * SID (Security ID) of user or group
     *
     * Generated from protobuf field <code>string owner = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setOwner($var)
    {
        GPBUtil::checkString($var, True);
        $this->owner = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Ydb.Scheme.Entry.Type type = 5;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.Ydb.Scheme.Entry.Type type = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Ydb\Scheme\Entry\Type::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Ydb.Scheme.Permissions effective_permissions = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEffectivePermissions()
    {
        return $this->effective_permissions;
    }

    /**
     * Generated from protobuf field <code>repeated .Ydb.Scheme.Permissions effective_permissions = 6;</code>
     * @param \Ydb\Scheme\Permissions[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEffectivePermissions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Ydb\Scheme\Permissions::class);
        $this->effective_permissions = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Ydb.Scheme.Permissions permissions = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPermissions()
    {
        return $this->permissions;
    }

    /**
     * Generated from protobuf field <code>repeated .Ydb.Scheme.Permissions permissions = 7;</code>
     * @param \Ydb\Scheme\Permissions[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPermissions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Ydb\Scheme\Permissions::class);
        $this->permissions = $arr;

        return $this;
    }

}

