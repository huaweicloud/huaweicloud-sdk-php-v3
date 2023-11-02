<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowAuditRuleRiskResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowAuditRuleRiskResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ruleId  风险规则ID
    * ruleName  风险名称
    * status  风险规则状态 枚举值：  OFF  ON
    * action  操作集合, 中间逗号分隔 LOGIN CREATE_TABLE CREATE_TABLESPACE DROP_TABLE DROP_TABLESPACE DELETE INSERT INSERT_SELECT SELECT SELECT_FOR_UPDATE UPDATE CREATE_USER DROP_USER GRANT OPERATE ALL
    * schemas  Schema列表
    * rank  风险规则优先级
    * ignoreCase  是否忽略大小写
    * riskLevel  风险级别 枚举值：  LOW  MEDIUM  HIGH  NO_RISK
    * dbIds  数据库id，中间逗号分隔（单个id 小于256位）
    * executionSymbol  执行时长对执行时长阈值的关系 枚举值：  GREATER  EQUAL  LESS  GREATER_EQUAL  LESS_EQUAL  NO_MATCH
    * executionTime  设定的执行时长阈值
    * affectSymbol  影响行数对行数阈值的关系：  枚举值：  GREATER  EQUAL  LESS  GREATER_EQUAL  LESS_EQUAL  NO_MATCH
    * affectRows  设定的影响行数阈值
    * clientIps  客户端IP段: IP-IP格式，或IP/XX 格式。 各个IP段使用逗号连接
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ruleId' => 'string',
            'ruleName' => 'string',
            'status' => 'string',
            'action' => 'string',
            'schemas' => '\HuaweiCloud\SDK\Dbss\V1\Model\RuleRiskInfoBeanSchemas[]',
            'rank' => 'int',
            'ignoreCase' => 'bool',
            'riskLevel' => 'string',
            'dbIds' => 'string',
            'executionSymbol' => 'string',
            'executionTime' => 'int',
            'affectSymbol' => 'string',
            'affectRows' => 'int',
            'clientIps' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ruleId  风险规则ID
    * ruleName  风险名称
    * status  风险规则状态 枚举值：  OFF  ON
    * action  操作集合, 中间逗号分隔 LOGIN CREATE_TABLE CREATE_TABLESPACE DROP_TABLE DROP_TABLESPACE DELETE INSERT INSERT_SELECT SELECT SELECT_FOR_UPDATE UPDATE CREATE_USER DROP_USER GRANT OPERATE ALL
    * schemas  Schema列表
    * rank  风险规则优先级
    * ignoreCase  是否忽略大小写
    * riskLevel  风险级别 枚举值：  LOW  MEDIUM  HIGH  NO_RISK
    * dbIds  数据库id，中间逗号分隔（单个id 小于256位）
    * executionSymbol  执行时长对执行时长阈值的关系 枚举值：  GREATER  EQUAL  LESS  GREATER_EQUAL  LESS_EQUAL  NO_MATCH
    * executionTime  设定的执行时长阈值
    * affectSymbol  影响行数对行数阈值的关系：  枚举值：  GREATER  EQUAL  LESS  GREATER_EQUAL  LESS_EQUAL  NO_MATCH
    * affectRows  设定的影响行数阈值
    * clientIps  客户端IP段: IP-IP格式，或IP/XX 格式。 各个IP段使用逗号连接
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ruleId' => null,
        'ruleName' => null,
        'status' => null,
        'action' => null,
        'schemas' => null,
        'rank' => 'int32',
        'ignoreCase' => null,
        'riskLevel' => null,
        'dbIds' => null,
        'executionSymbol' => null,
        'executionTime' => 'int32',
        'affectSymbol' => null,
        'affectRows' => 'int32',
        'clientIps' => null
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
    * ruleId  风险规则ID
    * ruleName  风险名称
    * status  风险规则状态 枚举值：  OFF  ON
    * action  操作集合, 中间逗号分隔 LOGIN CREATE_TABLE CREATE_TABLESPACE DROP_TABLE DROP_TABLESPACE DELETE INSERT INSERT_SELECT SELECT SELECT_FOR_UPDATE UPDATE CREATE_USER DROP_USER GRANT OPERATE ALL
    * schemas  Schema列表
    * rank  风险规则优先级
    * ignoreCase  是否忽略大小写
    * riskLevel  风险级别 枚举值：  LOW  MEDIUM  HIGH  NO_RISK
    * dbIds  数据库id，中间逗号分隔（单个id 小于256位）
    * executionSymbol  执行时长对执行时长阈值的关系 枚举值：  GREATER  EQUAL  LESS  GREATER_EQUAL  LESS_EQUAL  NO_MATCH
    * executionTime  设定的执行时长阈值
    * affectSymbol  影响行数对行数阈值的关系：  枚举值：  GREATER  EQUAL  LESS  GREATER_EQUAL  LESS_EQUAL  NO_MATCH
    * affectRows  设定的影响行数阈值
    * clientIps  客户端IP段: IP-IP格式，或IP/XX 格式。 各个IP段使用逗号连接
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ruleId' => 'rule_id',
            'ruleName' => 'rule_name',
            'status' => 'status',
            'action' => 'action',
            'schemas' => 'schemas',
            'rank' => 'rank',
            'ignoreCase' => 'ignore_case',
            'riskLevel' => 'risk_level',
            'dbIds' => 'db_ids',
            'executionSymbol' => 'execution_symbol',
            'executionTime' => 'execution_time',
            'affectSymbol' => 'affect_symbol',
            'affectRows' => 'affect_rows',
            'clientIps' => 'client_ips'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ruleId  风险规则ID
    * ruleName  风险名称
    * status  风险规则状态 枚举值：  OFF  ON
    * action  操作集合, 中间逗号分隔 LOGIN CREATE_TABLE CREATE_TABLESPACE DROP_TABLE DROP_TABLESPACE DELETE INSERT INSERT_SELECT SELECT SELECT_FOR_UPDATE UPDATE CREATE_USER DROP_USER GRANT OPERATE ALL
    * schemas  Schema列表
    * rank  风险规则优先级
    * ignoreCase  是否忽略大小写
    * riskLevel  风险级别 枚举值：  LOW  MEDIUM  HIGH  NO_RISK
    * dbIds  数据库id，中间逗号分隔（单个id 小于256位）
    * executionSymbol  执行时长对执行时长阈值的关系 枚举值：  GREATER  EQUAL  LESS  GREATER_EQUAL  LESS_EQUAL  NO_MATCH
    * executionTime  设定的执行时长阈值
    * affectSymbol  影响行数对行数阈值的关系：  枚举值：  GREATER  EQUAL  LESS  GREATER_EQUAL  LESS_EQUAL  NO_MATCH
    * affectRows  设定的影响行数阈值
    * clientIps  客户端IP段: IP-IP格式，或IP/XX 格式。 各个IP段使用逗号连接
    *
    * @var string[]
    */
    protected static $setters = [
            'ruleId' => 'setRuleId',
            'ruleName' => 'setRuleName',
            'status' => 'setStatus',
            'action' => 'setAction',
            'schemas' => 'setSchemas',
            'rank' => 'setRank',
            'ignoreCase' => 'setIgnoreCase',
            'riskLevel' => 'setRiskLevel',
            'dbIds' => 'setDbIds',
            'executionSymbol' => 'setExecutionSymbol',
            'executionTime' => 'setExecutionTime',
            'affectSymbol' => 'setAffectSymbol',
            'affectRows' => 'setAffectRows',
            'clientIps' => 'setClientIps'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ruleId  风险规则ID
    * ruleName  风险名称
    * status  风险规则状态 枚举值：  OFF  ON
    * action  操作集合, 中间逗号分隔 LOGIN CREATE_TABLE CREATE_TABLESPACE DROP_TABLE DROP_TABLESPACE DELETE INSERT INSERT_SELECT SELECT SELECT_FOR_UPDATE UPDATE CREATE_USER DROP_USER GRANT OPERATE ALL
    * schemas  Schema列表
    * rank  风险规则优先级
    * ignoreCase  是否忽略大小写
    * riskLevel  风险级别 枚举值：  LOW  MEDIUM  HIGH  NO_RISK
    * dbIds  数据库id，中间逗号分隔（单个id 小于256位）
    * executionSymbol  执行时长对执行时长阈值的关系 枚举值：  GREATER  EQUAL  LESS  GREATER_EQUAL  LESS_EQUAL  NO_MATCH
    * executionTime  设定的执行时长阈值
    * affectSymbol  影响行数对行数阈值的关系：  枚举值：  GREATER  EQUAL  LESS  GREATER_EQUAL  LESS_EQUAL  NO_MATCH
    * affectRows  设定的影响行数阈值
    * clientIps  客户端IP段: IP-IP格式，或IP/XX 格式。 各个IP段使用逗号连接
    *
    * @var string[]
    */
    protected static $getters = [
            'ruleId' => 'getRuleId',
            'ruleName' => 'getRuleName',
            'status' => 'getStatus',
            'action' => 'getAction',
            'schemas' => 'getSchemas',
            'rank' => 'getRank',
            'ignoreCase' => 'getIgnoreCase',
            'riskLevel' => 'getRiskLevel',
            'dbIds' => 'getDbIds',
            'executionSymbol' => 'getExecutionSymbol',
            'executionTime' => 'getExecutionTime',
            'affectSymbol' => 'getAffectSymbol',
            'affectRows' => 'getAffectRows',
            'clientIps' => 'getClientIps'
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
        $this->container['ruleId'] = isset($data['ruleId']) ? $data['ruleId'] : null;
        $this->container['ruleName'] = isset($data['ruleName']) ? $data['ruleName'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['schemas'] = isset($data['schemas']) ? $data['schemas'] : null;
        $this->container['rank'] = isset($data['rank']) ? $data['rank'] : null;
        $this->container['ignoreCase'] = isset($data['ignoreCase']) ? $data['ignoreCase'] : null;
        $this->container['riskLevel'] = isset($data['riskLevel']) ? $data['riskLevel'] : null;
        $this->container['dbIds'] = isset($data['dbIds']) ? $data['dbIds'] : null;
        $this->container['executionSymbol'] = isset($data['executionSymbol']) ? $data['executionSymbol'] : null;
        $this->container['executionTime'] = isset($data['executionTime']) ? $data['executionTime'] : null;
        $this->container['affectSymbol'] = isset($data['affectSymbol']) ? $data['affectSymbol'] : null;
        $this->container['affectRows'] = isset($data['affectRows']) ? $data['affectRows'] : null;
        $this->container['clientIps'] = isset($data['clientIps']) ? $data['clientIps'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets ruleId
    *  风险规则ID
    *
    * @return string|null
    */
    public function getRuleId()
    {
        return $this->container['ruleId'];
    }

    /**
    * Sets ruleId
    *
    * @param string|null $ruleId 风险规则ID
    *
    * @return $this
    */
    public function setRuleId($ruleId)
    {
        $this->container['ruleId'] = $ruleId;
        return $this;
    }

    /**
    * Gets ruleName
    *  风险名称
    *
    * @return string|null
    */
    public function getRuleName()
    {
        return $this->container['ruleName'];
    }

    /**
    * Sets ruleName
    *
    * @param string|null $ruleName 风险名称
    *
    * @return $this
    */
    public function setRuleName($ruleName)
    {
        $this->container['ruleName'] = $ruleName;
        return $this;
    }

    /**
    * Gets status
    *  风险规则状态 枚举值：  OFF  ON
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 风险规则状态 枚举值：  OFF  ON
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets action
    *  操作集合, 中间逗号分隔 LOGIN CREATE_TABLE CREATE_TABLESPACE DROP_TABLE DROP_TABLESPACE DELETE INSERT INSERT_SELECT SELECT SELECT_FOR_UPDATE UPDATE CREATE_USER DROP_USER GRANT OPERATE ALL
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
    * @param string|null $action 操作集合, 中间逗号分隔 LOGIN CREATE_TABLE CREATE_TABLESPACE DROP_TABLE DROP_TABLESPACE DELETE INSERT INSERT_SELECT SELECT SELECT_FOR_UPDATE UPDATE CREATE_USER DROP_USER GRANT OPERATE ALL
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets schemas
    *  Schema列表
    *
    * @return \HuaweiCloud\SDK\Dbss\V1\Model\RuleRiskInfoBeanSchemas[]|null
    */
    public function getSchemas()
    {
        return $this->container['schemas'];
    }

    /**
    * Sets schemas
    *
    * @param \HuaweiCloud\SDK\Dbss\V1\Model\RuleRiskInfoBeanSchemas[]|null $schemas Schema列表
    *
    * @return $this
    */
    public function setSchemas($schemas)
    {
        $this->container['schemas'] = $schemas;
        return $this;
    }

    /**
    * Gets rank
    *  风险规则优先级
    *
    * @return int|null
    */
    public function getRank()
    {
        return $this->container['rank'];
    }

    /**
    * Sets rank
    *
    * @param int|null $rank 风险规则优先级
    *
    * @return $this
    */
    public function setRank($rank)
    {
        $this->container['rank'] = $rank;
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
    *  风险级别 枚举值：  LOW  MEDIUM  HIGH  NO_RISK
    *
    * @return string|null
    */
    public function getRiskLevel()
    {
        return $this->container['riskLevel'];
    }

    /**
    * Sets riskLevel
    *
    * @param string|null $riskLevel 风险级别 枚举值：  LOW  MEDIUM  HIGH  NO_RISK
    *
    * @return $this
    */
    public function setRiskLevel($riskLevel)
    {
        $this->container['riskLevel'] = $riskLevel;
        return $this;
    }

    /**
    * Gets dbIds
    *  数据库id，中间逗号分隔（单个id 小于256位）
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
    * @param string|null $dbIds 数据库id，中间逗号分隔（单个id 小于256位）
    *
    * @return $this
    */
    public function setDbIds($dbIds)
    {
        $this->container['dbIds'] = $dbIds;
        return $this;
    }

    /**
    * Gets executionSymbol
    *  执行时长对执行时长阈值的关系 枚举值：  GREATER  EQUAL  LESS  GREATER_EQUAL  LESS_EQUAL  NO_MATCH
    *
    * @return string|null
    */
    public function getExecutionSymbol()
    {
        return $this->container['executionSymbol'];
    }

    /**
    * Sets executionSymbol
    *
    * @param string|null $executionSymbol 执行时长对执行时长阈值的关系 枚举值：  GREATER  EQUAL  LESS  GREATER_EQUAL  LESS_EQUAL  NO_MATCH
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
    *  设定的执行时长阈值
    *
    * @return int|null
    */
    public function getExecutionTime()
    {
        return $this->container['executionTime'];
    }

    /**
    * Sets executionTime
    *
    * @param int|null $executionTime 设定的执行时长阈值
    *
    * @return $this
    */
    public function setExecutionTime($executionTime)
    {
        $this->container['executionTime'] = $executionTime;
        return $this;
    }

    /**
    * Gets affectSymbol
    *  影响行数对行数阈值的关系：  枚举值：  GREATER  EQUAL  LESS  GREATER_EQUAL  LESS_EQUAL  NO_MATCH
    *
    * @return string|null
    */
    public function getAffectSymbol()
    {
        return $this->container['affectSymbol'];
    }

    /**
    * Sets affectSymbol
    *
    * @param string|null $affectSymbol 影响行数对行数阈值的关系：  枚举值：  GREATER  EQUAL  LESS  GREATER_EQUAL  LESS_EQUAL  NO_MATCH
    *
    * @return $this
    */
    public function setAffectSymbol($affectSymbol)
    {
        $this->container['affectSymbol'] = $affectSymbol;
        return $this;
    }

    /**
    * Gets affectRows
    *  设定的影响行数阈值
    *
    * @return int|null
    */
    public function getAffectRows()
    {
        return $this->container['affectRows'];
    }

    /**
    * Sets affectRows
    *
    * @param int|null $affectRows 设定的影响行数阈值
    *
    * @return $this
    */
    public function setAffectRows($affectRows)
    {
        $this->container['affectRows'] = $affectRows;
        return $this;
    }

    /**
    * Gets clientIps
    *  客户端IP段: IP-IP格式，或IP/XX 格式。 各个IP段使用逗号连接
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
    * @param string|null $clientIps 客户端IP段: IP-IP格式，或IP/XX 格式。 各个IP段使用逗号连接
    *
    * @return $this
    */
    public function setClientIps($clientIps)
    {
        $this->container['clientIps'] = $clientIps;
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

