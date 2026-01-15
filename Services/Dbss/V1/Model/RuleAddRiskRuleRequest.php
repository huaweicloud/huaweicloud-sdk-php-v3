<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RuleAddRiskRuleRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RuleAddRiskRuleRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * action  操作类型，多个用英文','分隔
    * affectRows  影响行数
    * affectSymbol  影响行数操作符 - GREATER：大于 - EQUAL：等于 - LESS：小于 - GREATER_EQUAL：大于等于 - LESS_EQUAL：小于等于 - NO_MATCH：不等于
    * clientIps  客户端IP，多个用英文','分隔
    * dbIds  数据库ID，多个用英文','分隔
    * exceptionIps  例外IP，IP内不做匹配，多个用英文','分隔
    * executionSymbol  执行时长操作符 - GREATER：大于 - EQUAL：等于 - LESS：小于 - GREATER_EQUAL：大于等于 - LESS_EQUAL：小于等于 - NO_MATCH：不等于
    * executionTime  执行时长
    * ignoreCase  是否忽略大小写
    * riskLevel  风险等级   - LOW：低  - MEDIUM：中  - HIGH：高  - NO_RISK：无
    * ruleName  规则名称
    * schemas  操作对象
    * status  状态  - OFF：已关闭  - ON：已开启
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'action' => 'string',
            'affectRows' => 'int',
            'affectSymbol' => 'string',
            'clientIps' => 'string',
            'dbIds' => 'string',
            'exceptionIps' => 'string',
            'executionSymbol' => 'string',
            'executionTime' => 'int',
            'ignoreCase' => 'bool',
            'riskLevel' => 'string',
            'ruleName' => 'string',
            'schemas' => '\HuaweiCloud\SDK\Dbss\V1\Model\SchemaBean[]',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * action  操作类型，多个用英文','分隔
    * affectRows  影响行数
    * affectSymbol  影响行数操作符 - GREATER：大于 - EQUAL：等于 - LESS：小于 - GREATER_EQUAL：大于等于 - LESS_EQUAL：小于等于 - NO_MATCH：不等于
    * clientIps  客户端IP，多个用英文','分隔
    * dbIds  数据库ID，多个用英文','分隔
    * exceptionIps  例外IP，IP内不做匹配，多个用英文','分隔
    * executionSymbol  执行时长操作符 - GREATER：大于 - EQUAL：等于 - LESS：小于 - GREATER_EQUAL：大于等于 - LESS_EQUAL：小于等于 - NO_MATCH：不等于
    * executionTime  执行时长
    * ignoreCase  是否忽略大小写
    * riskLevel  风险等级   - LOW：低  - MEDIUM：中  - HIGH：高  - NO_RISK：无
    * ruleName  规则名称
    * schemas  操作对象
    * status  状态  - OFF：已关闭  - ON：已开启
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'action' => null,
        'affectRows' => 'int32',
        'affectSymbol' => null,
        'clientIps' => null,
        'dbIds' => null,
        'exceptionIps' => null,
        'executionSymbol' => null,
        'executionTime' => 'int64',
        'ignoreCase' => null,
        'riskLevel' => null,
        'ruleName' => null,
        'schemas' => null,
        'status' => null
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * action  操作类型，多个用英文','分隔
    * affectRows  影响行数
    * affectSymbol  影响行数操作符 - GREATER：大于 - EQUAL：等于 - LESS：小于 - GREATER_EQUAL：大于等于 - LESS_EQUAL：小于等于 - NO_MATCH：不等于
    * clientIps  客户端IP，多个用英文','分隔
    * dbIds  数据库ID，多个用英文','分隔
    * exceptionIps  例外IP，IP内不做匹配，多个用英文','分隔
    * executionSymbol  执行时长操作符 - GREATER：大于 - EQUAL：等于 - LESS：小于 - GREATER_EQUAL：大于等于 - LESS_EQUAL：小于等于 - NO_MATCH：不等于
    * executionTime  执行时长
    * ignoreCase  是否忽略大小写
    * riskLevel  风险等级   - LOW：低  - MEDIUM：中  - HIGH：高  - NO_RISK：无
    * ruleName  规则名称
    * schemas  操作对象
    * status  状态  - OFF：已关闭  - ON：已开启
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'action' => 'action',
            'affectRows' => 'affect_rows',
            'affectSymbol' => 'affect_symbol',
            'clientIps' => 'client_ips',
            'dbIds' => 'db_ids',
            'exceptionIps' => 'exception_ips',
            'executionSymbol' => 'execution_symbol',
            'executionTime' => 'execution_time',
            'ignoreCase' => 'ignore_case',
            'riskLevel' => 'risk_level',
            'ruleName' => 'rule_name',
            'schemas' => 'schemas',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * action  操作类型，多个用英文','分隔
    * affectRows  影响行数
    * affectSymbol  影响行数操作符 - GREATER：大于 - EQUAL：等于 - LESS：小于 - GREATER_EQUAL：大于等于 - LESS_EQUAL：小于等于 - NO_MATCH：不等于
    * clientIps  客户端IP，多个用英文','分隔
    * dbIds  数据库ID，多个用英文','分隔
    * exceptionIps  例外IP，IP内不做匹配，多个用英文','分隔
    * executionSymbol  执行时长操作符 - GREATER：大于 - EQUAL：等于 - LESS：小于 - GREATER_EQUAL：大于等于 - LESS_EQUAL：小于等于 - NO_MATCH：不等于
    * executionTime  执行时长
    * ignoreCase  是否忽略大小写
    * riskLevel  风险等级   - LOW：低  - MEDIUM：中  - HIGH：高  - NO_RISK：无
    * ruleName  规则名称
    * schemas  操作对象
    * status  状态  - OFF：已关闭  - ON：已开启
    *
    * @var string[]
    */
    protected static $setters = [
            'action' => 'setAction',
            'affectRows' => 'setAffectRows',
            'affectSymbol' => 'setAffectSymbol',
            'clientIps' => 'setClientIps',
            'dbIds' => 'setDbIds',
            'exceptionIps' => 'setExceptionIps',
            'executionSymbol' => 'setExecutionSymbol',
            'executionTime' => 'setExecutionTime',
            'ignoreCase' => 'setIgnoreCase',
            'riskLevel' => 'setRiskLevel',
            'ruleName' => 'setRuleName',
            'schemas' => 'setSchemas',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * action  操作类型，多个用英文','分隔
    * affectRows  影响行数
    * affectSymbol  影响行数操作符 - GREATER：大于 - EQUAL：等于 - LESS：小于 - GREATER_EQUAL：大于等于 - LESS_EQUAL：小于等于 - NO_MATCH：不等于
    * clientIps  客户端IP，多个用英文','分隔
    * dbIds  数据库ID，多个用英文','分隔
    * exceptionIps  例外IP，IP内不做匹配，多个用英文','分隔
    * executionSymbol  执行时长操作符 - GREATER：大于 - EQUAL：等于 - LESS：小于 - GREATER_EQUAL：大于等于 - LESS_EQUAL：小于等于 - NO_MATCH：不等于
    * executionTime  执行时长
    * ignoreCase  是否忽略大小写
    * riskLevel  风险等级   - LOW：低  - MEDIUM：中  - HIGH：高  - NO_RISK：无
    * ruleName  规则名称
    * schemas  操作对象
    * status  状态  - OFF：已关闭  - ON：已开启
    *
    * @var string[]
    */
    protected static $getters = [
            'action' => 'getAction',
            'affectRows' => 'getAffectRows',
            'affectSymbol' => 'getAffectSymbol',
            'clientIps' => 'getClientIps',
            'dbIds' => 'getDbIds',
            'exceptionIps' => 'getExceptionIps',
            'executionSymbol' => 'getExecutionSymbol',
            'executionTime' => 'getExecutionTime',
            'ignoreCase' => 'getIgnoreCase',
            'riskLevel' => 'getRiskLevel',
            'ruleName' => 'getRuleName',
            'schemas' => 'getSchemas',
            'status' => 'getStatus'
    ];

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    *
    * @return array
    */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @return array
    */
    public static function setters()
    {
        return self::$setters;
    }

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @return array
    */
    public static function getters()
    {
        return self::$getters;
    }

    /**
    * The original name of the model.
    *
    * @return string
    */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    


    /**
    * Associative array for storing property values
    *
    * @var mixed[]
    */
    protected $container = [];

    /**
    * Constructor
    *
    * @param mixed[] $data Associated array of property values
    *                      initializing the model
    */
    public function __construct(array $data = null)
    {
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['affectRows'] = isset($data['affectRows']) ? $data['affectRows'] : null;
        $this->container['affectSymbol'] = isset($data['affectSymbol']) ? $data['affectSymbol'] : null;
        $this->container['clientIps'] = isset($data['clientIps']) ? $data['clientIps'] : null;
        $this->container['dbIds'] = isset($data['dbIds']) ? $data['dbIds'] : null;
        $this->container['exceptionIps'] = isset($data['exceptionIps']) ? $data['exceptionIps'] : null;
        $this->container['executionSymbol'] = isset($data['executionSymbol']) ? $data['executionSymbol'] : null;
        $this->container['executionTime'] = isset($data['executionTime']) ? $data['executionTime'] : null;
        $this->container['ignoreCase'] = isset($data['ignoreCase']) ? $data['ignoreCase'] : null;
        $this->container['riskLevel'] = isset($data['riskLevel']) ? $data['riskLevel'] : null;
        $this->container['ruleName'] = isset($data['ruleName']) ? $data['ruleName'] : null;
        $this->container['schemas'] = isset($data['schemas']) ? $data['schemas'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['affectRows'] === null) {
            $invalidProperties[] = "'affectRows' can't be null";
        }
        if ($this->container['affectSymbol'] === null) {
            $invalidProperties[] = "'affectSymbol' can't be null";
        }
        if ($this->container['executionSymbol'] === null) {
            $invalidProperties[] = "'executionSymbol' can't be null";
        }
        if ($this->container['executionTime'] === null) {
            $invalidProperties[] = "'executionTime' can't be null";
        }
        if ($this->container['riskLevel'] === null) {
            $invalidProperties[] = "'riskLevel' can't be null";
        }
        if ($this->container['ruleName'] === null) {
            $invalidProperties[] = "'ruleName' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        return $invalidProperties;
    }

    /**
    * Validate all the properties in the model
    * return true if all passed
    *
    * @return bool True if all properties are valid
    */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets action
    *  操作类型，多个用英文','分隔
    *
    * @return string|null
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string|null $action 操作类型，多个用英文','分隔
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets affectRows
    *  影响行数
    *
    * @return int
    */
    public function getAffectRows()
    {
        return $this->container['affectRows'];
    }

    /**
    * Sets affectRows
    *
    * @param int $affectRows 影响行数
    *
    * @return $this
    */
    public function setAffectRows($affectRows)
    {
        $this->container['affectRows'] = $affectRows;
        return $this;
    }

    /**
    * Gets affectSymbol
    *  影响行数操作符 - GREATER：大于 - EQUAL：等于 - LESS：小于 - GREATER_EQUAL：大于等于 - LESS_EQUAL：小于等于 - NO_MATCH：不等于
    *
    * @return string
    */
    public function getAffectSymbol()
    {
        return $this->container['affectSymbol'];
    }

    /**
    * Sets affectSymbol
    *
    * @param string $affectSymbol 影响行数操作符 - GREATER：大于 - EQUAL：等于 - LESS：小于 - GREATER_EQUAL：大于等于 - LESS_EQUAL：小于等于 - NO_MATCH：不等于
    *
    * @return $this
    */
    public function setAffectSymbol($affectSymbol)
    {
        $this->container['affectSymbol'] = $affectSymbol;
        return $this;
    }

    /**
    * Gets clientIps
    *  客户端IP，多个用英文','分隔
    *
    * @return string|null
    */
    public function getClientIps()
    {
        return $this->container['clientIps'];
    }

    /**
    * Sets clientIps
    *
    * @param string|null $clientIps 客户端IP，多个用英文','分隔
    *
    * @return $this
    */
    public function setClientIps($clientIps)
    {
        $this->container['clientIps'] = $clientIps;
        return $this;
    }

    /**
    * Gets dbIds
    *  数据库ID，多个用英文','分隔
    *
    * @return string|null
    */
    public function getDbIds()
    {
        return $this->container['dbIds'];
    }

    /**
    * Sets dbIds
    *
    * @param string|null $dbIds 数据库ID，多个用英文','分隔
    *
    * @return $this
    */
    public function setDbIds($dbIds)
    {
        $this->container['dbIds'] = $dbIds;
        return $this;
    }

    /**
    * Gets exceptionIps
    *  例外IP，IP内不做匹配，多个用英文','分隔
    *
    * @return string|null
    */
    public function getExceptionIps()
    {
        return $this->container['exceptionIps'];
    }

    /**
    * Sets exceptionIps
    *
    * @param string|null $exceptionIps 例外IP，IP内不做匹配，多个用英文','分隔
    *
    * @return $this
    */
    public function setExceptionIps($exceptionIps)
    {
        $this->container['exceptionIps'] = $exceptionIps;
        return $this;
    }

    /**
    * Gets executionSymbol
    *  执行时长操作符 - GREATER：大于 - EQUAL：等于 - LESS：小于 - GREATER_EQUAL：大于等于 - LESS_EQUAL：小于等于 - NO_MATCH：不等于
    *
    * @return string
    */
    public function getExecutionSymbol()
    {
        return $this->container['executionSymbol'];
    }

    /**
    * Sets executionSymbol
    *
    * @param string $executionSymbol 执行时长操作符 - GREATER：大于 - EQUAL：等于 - LESS：小于 - GREATER_EQUAL：大于等于 - LESS_EQUAL：小于等于 - NO_MATCH：不等于
    *
    * @return $this
    */
    public function setExecutionSymbol($executionSymbol)
    {
        $this->container['executionSymbol'] = $executionSymbol;
        return $this;
    }

    /**
    * Gets executionTime
    *  执行时长
    *
    * @return int
    */
    public function getExecutionTime()
    {
        return $this->container['executionTime'];
    }

    /**
    * Sets executionTime
    *
    * @param int $executionTime 执行时长
    *
    * @return $this
    */
    public function setExecutionTime($executionTime)
    {
        $this->container['executionTime'] = $executionTime;
        return $this;
    }

    /**
    * Gets ignoreCase
    *  是否忽略大小写
    *
    * @return bool|null
    */
    public function getIgnoreCase()
    {
        return $this->container['ignoreCase'];
    }

    /**
    * Sets ignoreCase
    *
    * @param bool|null $ignoreCase 是否忽略大小写
    *
    * @return $this
    */
    public function setIgnoreCase($ignoreCase)
    {
        $this->container['ignoreCase'] = $ignoreCase;
        return $this;
    }

    /**
    * Gets riskLevel
    *  风险等级   - LOW：低  - MEDIUM：中  - HIGH：高  - NO_RISK：无
    *
    * @return string
    */
    public function getRiskLevel()
    {
        return $this->container['riskLevel'];
    }

    /**
    * Sets riskLevel
    *
    * @param string $riskLevel 风险等级   - LOW：低  - MEDIUM：中  - HIGH：高  - NO_RISK：无
    *
    * @return $this
    */
    public function setRiskLevel($riskLevel)
    {
        $this->container['riskLevel'] = $riskLevel;
        return $this;
    }

    /**
    * Gets ruleName
    *  规则名称
    *
    * @return string
    */
    public function getRuleName()
    {
        return $this->container['ruleName'];
    }

    /**
    * Sets ruleName
    *
    * @param string $ruleName 规则名称
    *
    * @return $this
    */
    public function setRuleName($ruleName)
    {
        $this->container['ruleName'] = $ruleName;
        return $this;
    }

    /**
    * Gets schemas
    *  操作对象
    *
    * @return \HuaweiCloud\SDK\Dbss\V1\Model\SchemaBean[]|null
    */
    public function getSchemas()
    {
        return $this->container['schemas'];
    }

    /**
    * Sets schemas
    *
    * @param \HuaweiCloud\SDK\Dbss\V1\Model\SchemaBean[]|null $schemas 操作对象
    *
    * @return $this
    */
    public function setSchemas($schemas)
    {
        $this->container['schemas'] = $schemas;
        return $this;
    }

    /**
    * Gets status
    *  状态  - OFF：已关闭  - ON：已开启
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 状态  - OFF：已关闭  - ON：已开启
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Returns true if offset exists. False otherwise.
    *
    * @param integer $offset Offset
    *
    * @return boolean
    */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
    * Gets offset.
    *
    * @param integer $offset Offset
    *
    * @return mixed
    */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
    * Sets value based on offset.
    *
    * @param integer $offset Offset
    * @param mixed   $value  Value to be set
    *
    * @return void
    */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
                $this->container[] = $value;
            } else {
                $this->container[$offset] = $value;
        }
    }

    /**
    * Unsets offset.
    *
    * @param integer $offset Offset
    *
    * @return void
    */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
    * Gets the string presentation of the object
    *
    * @return string
    */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

