<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowAuditStatisticsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowAuditStatisticsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dbRiskStatistics  数据库风险统计
    * highRiskTotal  高风险总量
    * lowRiskTotal  低风险总量
    * mediumRiskTotal  中风险总量
    * projectId  项目ID
    * ruleRiskStatistics  风险规则统计
    * unsupportedAuditInfos  unsupportedAuditInfos
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dbRiskStatistics' => '\HuaweiCloud\SDK\Dbss\V1\Model\DatabaseRiskStatisticsDto[]',
            'highRiskTotal' => 'int',
            'lowRiskTotal' => 'int',
            'mediumRiskTotal' => 'int',
            'projectId' => 'string',
            'ruleRiskStatistics' => '\HuaweiCloud\SDK\Dbss\V1\Model\RuleRiskStatisticsDto[]',
            'unsupportedAuditInfos' => '\HuaweiCloud\SDK\Dbss\V1\Model\UnsupportedAuditInfoResponse',
            'updateTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dbRiskStatistics  数据库风险统计
    * highRiskTotal  高风险总量
    * lowRiskTotal  低风险总量
    * mediumRiskTotal  中风险总量
    * projectId  项目ID
    * ruleRiskStatistics  风险规则统计
    * unsupportedAuditInfos  unsupportedAuditInfos
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dbRiskStatistics' => null,
        'highRiskTotal' => 'int64',
        'lowRiskTotal' => 'int64',
        'mediumRiskTotal' => 'int64',
        'projectId' => null,
        'ruleRiskStatistics' => null,
        'unsupportedAuditInfos' => null,
        'updateTime' => 'int64'
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
    * dbRiskStatistics  数据库风险统计
    * highRiskTotal  高风险总量
    * lowRiskTotal  低风险总量
    * mediumRiskTotal  中风险总量
    * projectId  项目ID
    * ruleRiskStatistics  风险规则统计
    * unsupportedAuditInfos  unsupportedAuditInfos
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dbRiskStatistics' => 'db_risk_statistics',
            'highRiskTotal' => 'high_risk_total',
            'lowRiskTotal' => 'low_risk_total',
            'mediumRiskTotal' => 'medium_risk_total',
            'projectId' => 'project_id',
            'ruleRiskStatistics' => 'rule_risk_statistics',
            'unsupportedAuditInfos' => 'unsupported_audit_infos',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dbRiskStatistics  数据库风险统计
    * highRiskTotal  高风险总量
    * lowRiskTotal  低风险总量
    * mediumRiskTotal  中风险总量
    * projectId  项目ID
    * ruleRiskStatistics  风险规则统计
    * unsupportedAuditInfos  unsupportedAuditInfos
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $setters = [
            'dbRiskStatistics' => 'setDbRiskStatistics',
            'highRiskTotal' => 'setHighRiskTotal',
            'lowRiskTotal' => 'setLowRiskTotal',
            'mediumRiskTotal' => 'setMediumRiskTotal',
            'projectId' => 'setProjectId',
            'ruleRiskStatistics' => 'setRuleRiskStatistics',
            'unsupportedAuditInfos' => 'setUnsupportedAuditInfos',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dbRiskStatistics  数据库风险统计
    * highRiskTotal  高风险总量
    * lowRiskTotal  低风险总量
    * mediumRiskTotal  中风险总量
    * projectId  项目ID
    * ruleRiskStatistics  风险规则统计
    * unsupportedAuditInfos  unsupportedAuditInfos
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $getters = [
            'dbRiskStatistics' => 'getDbRiskStatistics',
            'highRiskTotal' => 'getHighRiskTotal',
            'lowRiskTotal' => 'getLowRiskTotal',
            'mediumRiskTotal' => 'getMediumRiskTotal',
            'projectId' => 'getProjectId',
            'ruleRiskStatistics' => 'getRuleRiskStatistics',
            'unsupportedAuditInfos' => 'getUnsupportedAuditInfos',
            'updateTime' => 'getUpdateTime'
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
        $this->container['dbRiskStatistics'] = isset($data['dbRiskStatistics']) ? $data['dbRiskStatistics'] : null;
        $this->container['highRiskTotal'] = isset($data['highRiskTotal']) ? $data['highRiskTotal'] : null;
        $this->container['lowRiskTotal'] = isset($data['lowRiskTotal']) ? $data['lowRiskTotal'] : null;
        $this->container['mediumRiskTotal'] = isset($data['mediumRiskTotal']) ? $data['mediumRiskTotal'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['ruleRiskStatistics'] = isset($data['ruleRiskStatistics']) ? $data['ruleRiskStatistics'] : null;
        $this->container['unsupportedAuditInfos'] = isset($data['unsupportedAuditInfos']) ? $data['unsupportedAuditInfos'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
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
    * Gets dbRiskStatistics
    *  数据库风险统计
    *
    * @return \HuaweiCloud\SDK\Dbss\V1\Model\DatabaseRiskStatisticsDto[]|null
    */
    public function getDbRiskStatistics()
    {
        return $this->container['dbRiskStatistics'];
    }

    /**
    * Sets dbRiskStatistics
    *
    * @param \HuaweiCloud\SDK\Dbss\V1\Model\DatabaseRiskStatisticsDto[]|null $dbRiskStatistics 数据库风险统计
    *
    * @return $this
    */
    public function setDbRiskStatistics($dbRiskStatistics)
    {
        $this->container['dbRiskStatistics'] = $dbRiskStatistics;
        return $this;
    }

    /**
    * Gets highRiskTotal
    *  高风险总量
    *
    * @return int|null
    */
    public function getHighRiskTotal()
    {
        return $this->container['highRiskTotal'];
    }

    /**
    * Sets highRiskTotal
    *
    * @param int|null $highRiskTotal 高风险总量
    *
    * @return $this
    */
    public function setHighRiskTotal($highRiskTotal)
    {
        $this->container['highRiskTotal'] = $highRiskTotal;
        return $this;
    }

    /**
    * Gets lowRiskTotal
    *  低风险总量
    *
    * @return int|null
    */
    public function getLowRiskTotal()
    {
        return $this->container['lowRiskTotal'];
    }

    /**
    * Sets lowRiskTotal
    *
    * @param int|null $lowRiskTotal 低风险总量
    *
    * @return $this
    */
    public function setLowRiskTotal($lowRiskTotal)
    {
        $this->container['lowRiskTotal'] = $lowRiskTotal;
        return $this;
    }

    /**
    * Gets mediumRiskTotal
    *  中风险总量
    *
    * @return int|null
    */
    public function getMediumRiskTotal()
    {
        return $this->container['mediumRiskTotal'];
    }

    /**
    * Sets mediumRiskTotal
    *
    * @param int|null $mediumRiskTotal 中风险总量
    *
    * @return $this
    */
    public function setMediumRiskTotal($mediumRiskTotal)
    {
        $this->container['mediumRiskTotal'] = $mediumRiskTotal;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets ruleRiskStatistics
    *  风险规则统计
    *
    * @return \HuaweiCloud\SDK\Dbss\V1\Model\RuleRiskStatisticsDto[]|null
    */
    public function getRuleRiskStatistics()
    {
        return $this->container['ruleRiskStatistics'];
    }

    /**
    * Sets ruleRiskStatistics
    *
    * @param \HuaweiCloud\SDK\Dbss\V1\Model\RuleRiskStatisticsDto[]|null $ruleRiskStatistics 风险规则统计
    *
    * @return $this
    */
    public function setRuleRiskStatistics($ruleRiskStatistics)
    {
        $this->container['ruleRiskStatistics'] = $ruleRiskStatistics;
        return $this;
    }

    /**
    * Gets unsupportedAuditInfos
    *  unsupportedAuditInfos
    *
    * @return \HuaweiCloud\SDK\Dbss\V1\Model\UnsupportedAuditInfoResponse|null
    */
    public function getUnsupportedAuditInfos()
    {
        return $this->container['unsupportedAuditInfos'];
    }

    /**
    * Sets unsupportedAuditInfos
    *
    * @param \HuaweiCloud\SDK\Dbss\V1\Model\UnsupportedAuditInfoResponse|null $unsupportedAuditInfos unsupportedAuditInfos
    *
    * @return $this
    */
    public function setUnsupportedAuditInfos($unsupportedAuditInfos)
    {
        $this->container['unsupportedAuditInfos'] = $unsupportedAuditInfos;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime 更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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

