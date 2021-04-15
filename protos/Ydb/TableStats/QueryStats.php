<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: kikimr/public/api/protos/ydb_query_stats.proto

namespace Ydb\TableStats;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Ydb.TableStats.QueryStats</code>
 */
class QueryStats extends \Google\Protobuf\Internal\Message
{
    /**
     * A query might have one or more execution phases
     *
     * Generated from protobuf field <code>repeated .Ydb.TableStats.QueryPhaseStats query_phases = 1;</code>
     */
    private $query_phases;
    /**
     * Generated from protobuf field <code>.Ydb.TableStats.CompilationStats compilation = 2;</code>
     */
    protected $compilation = null;
    /**
     * Generated from protobuf field <code>uint64 process_cpu_time_us = 3;</code>
     */
    protected $process_cpu_time_us = 0;
    /**
     * Generated from protobuf field <code>string query_plan = 4;</code>
     */
    protected $query_plan = '';
    /**
     * Generated from protobuf field <code>string query_ast = 5;</code>
     */
    protected $query_ast = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Ydb\TableStats\QueryPhaseStats[]|\Google\Protobuf\Internal\RepeatedField $query_phases
     *           A query might have one or more execution phases
     *     @type \Ydb\TableStats\CompilationStats $compilation
     *     @type int|string $process_cpu_time_us
     *     @type string $query_plan
     *     @type string $query_ast
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Kikimr\PBPublic\Api\Protos\YdbQueryStats::initOnce();
        parent::__construct($data);
    }

    /**
     * A query might have one or more execution phases
     *
     * Generated from protobuf field <code>repeated .Ydb.TableStats.QueryPhaseStats query_phases = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getQueryPhases()
    {
        return $this->query_phases;
    }

    /**
     * A query might have one or more execution phases
     *
     * Generated from protobuf field <code>repeated .Ydb.TableStats.QueryPhaseStats query_phases = 1;</code>
     * @param \Ydb\TableStats\QueryPhaseStats[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setQueryPhases($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Ydb\TableStats\QueryPhaseStats::class);
        $this->query_phases = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Ydb.TableStats.CompilationStats compilation = 2;</code>
     * @return \Ydb\TableStats\CompilationStats
     */
    public function getCompilation()
    {
        return isset($this->compilation) ? $this->compilation : null;
    }

    public function hasCompilation()
    {
        return isset($this->compilation);
    }

    public function clearCompilation()
    {
        unset($this->compilation);
    }

    /**
     * Generated from protobuf field <code>.Ydb.TableStats.CompilationStats compilation = 2;</code>
     * @param \Ydb\TableStats\CompilationStats $var
     * @return $this
     */
    public function setCompilation($var)
    {
        GPBUtil::checkMessage($var, \Ydb\TableStats\CompilationStats::class);
        $this->compilation = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 process_cpu_time_us = 3;</code>
     * @return int|string
     */
    public function getProcessCpuTimeUs()
    {
        return $this->process_cpu_time_us;
    }

    /**
     * Generated from protobuf field <code>uint64 process_cpu_time_us = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setProcessCpuTimeUs($var)
    {
        GPBUtil::checkUint64($var);
        $this->process_cpu_time_us = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string query_plan = 4;</code>
     * @return string
     */
    public function getQueryPlan()
    {
        return $this->query_plan;
    }

    /**
     * Generated from protobuf field <code>string query_plan = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setQueryPlan($var)
    {
        GPBUtil::checkString($var, True);
        $this->query_plan = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string query_ast = 5;</code>
     * @return string
     */
    public function getQueryAst()
    {
        return $this->query_ast;
    }

    /**
     * Generated from protobuf field <code>string query_ast = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setQueryAst($var)
    {
        GPBUtil::checkString($var, True);
        $this->query_ast = $var;

        return $this;
    }

}

