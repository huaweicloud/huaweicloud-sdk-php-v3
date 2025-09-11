<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DatabaseRiskStatisticsDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DatabaseRiskStatisticsDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dbId  数据库ID
    * dbIp  数据库IP
    * dbName  数据库名称
    * highRisk  高风险总量
    * instanceId  实例ID
    * instanceName  实例名称
    * lowRisk  低风险总量
    * mediumRisk  中风险总量
    * riskRule  风险规则统计
    * totalRisk  总风险数量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dbId' => 'string',
            'dbIp' => 'string',
            'dbName' => 'string',
            'highRisk' => 'int',
            'instanceId' => 'string',
            'instanceName' => 'string',
            'lowRisk' => 'int',
            'mediumRisk' => 'int',
            'riskRule' => '\HuaweiCloud\SDK\Dbss\V1\Model\RiskRuleStatistic[]',
            'totalRisk' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dbId  数据库ID
    * dbIp  数据库IP
    * dbName  数据库名称
    * highRisk  高风险总量
    * instanceId  实例ID
    * instanceName  实例名称
    * lowRisk  低风险总量
    * mediumRisk  中风险总量
    * riskRule  风险规则统计
    * totalRisk  总风险数量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dbId' => null,
        'dbIp' => null,
        'dbName' => null,
        'highRisk' => 'int64',
        'instanceId' => null,
        'instanceName' => null,
        'lowRisk' => 'int64',
        'mediumRisk' => 'int64',
        'riskRule' => null,
        'totalRisk' => 'int64'
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
    * dbId  数据库ID
    * dbIp  数据库IP
    * dbName  数据库名称
    * highRisk  高风险总量
    * instanceId  实例ID
    * instanceName  实例名称
    * lowRisk  低风险总量
    * mediumRisk  中风险总量
    * riskRule  风险规则统计
    * totalRisk  总风险数量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dbId' => 'db_id',
            'dbIp' => 'db_ip',
            'dbName' => 'db_name',
            'highRisk' => 'high_risk',
            'instanceId' => 'instance_id',
            'instanceName' => 'instance_name',
            'lowRisk' => 'low_risk',
            'mediumRisk' => 'medium_risk',
            'riskRule' => 'risk_rule',
            'totalRisk' => 'total_risk'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dbId  数据库ID
    * dbIp  数据库IP
    * dbName  数据库名称
    * highRisk  高风险总量
    * instanceId  实例ID
    * instanceName  实例名称
    * lowRisk  低风险总量
    * mediumRisk  中风险总量
    * riskRule  风险规则统计
    * totalRisk  总风险数量
    *
    * @var string[]
    */
    protected static $setters = [
            'dbId' => 'setDbId',
            'dbIp' => 'setDbIp',
            'dbName' => 'setDbName',
            'highRisk' => 'setHighRisk',
            'instanceId' => 'setInstanceId',
            'instanceName' => 'setInstanceName',
            'lowRisk' => 'setLowRisk',
            'mediumRisk' => 'setMediumRisk',
            'riskRule' => 'setRiskRule',
            'totalRisk' => 'setTotalRisk'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dbId  数据库ID
    * dbIp  数据库IP
    * dbName  数据库名称
    * highRisk  高风险总量
    * instanceId  实例ID
    * instanceName  实例名称
    * lowRisk  低风险总量
    * mediumRisk  中风险总量
    * riskRule  风险规则统计
    * totalRisk  总风险数量
    *
    * @var string[]
    */
    protected static $getters = [
            'dbId' => 'getDbId',
            'dbIp' => 'getDbIp',
            'dbName' => 'getDbName',
            'highRisk' => 'getHighRisk',
            'instanceId' => 'getInstanceId',
            'instanceName' => 'getInstanceName',
            'lowRisk' => 'getLowRisk',
            'mediumRisk' => 'getMediumRisk',
            'riskRule' => 'getRiskRule',
            'totalRisk' => 'getTotalRisk'
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
        $this->container['dbId'] = isset($data['dbId']) ? $data['dbId'] : null;
        $this->container['dbIp'] = isset($data['dbIp']) ? $data['dbIp'] : null;
        $this->container['dbName'] = isset($data['dbName']) ? $data['dbName'] : null;
        $this->container['highRisk'] = isset($data['highRisk']) ? $data['highRisk'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['lowRisk'] = isset($data['lowRisk']) ? $data['lowRisk'] : null;
        $this->container['mediumRisk'] = isset($data['mediumRisk']) ? $data['mediumRisk'] : null;
        $this->container['riskRule'] = isset($data['riskRule']) ? $data['riskRule'] : null;
        $this->container['totalRisk'] = isset($data['totalRisk']) ? $data['totalRisk'] : null;
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
    * Gets dbId
    *  数据库ID
    *
    * @return string|null
    */
    public function getDbId()
    {
        return $this->container['dbId'];
    }

    /**
    * Sets dbId
    *
    * @param string|null $dbId 数据库ID
    *
    * @return $this
    */
    public function setDbId($dbId)
    {
        $this->container['dbId'] = $dbId;
        return $this;
    }

    /**
    * Gets dbIp
    *  数据库IP
    *
    * @return string|null
    */
    public function getDbIp()
    {
        return $this->container['dbIp'];
    }

    /**
    * Sets dbIp
    *
    * @param string|null $dbIp 数据库IP
    *
    * @return $this
    */
    public function setDbIp($dbIp)
    {
        $this->container['dbIp'] = $dbIp;
        return $this;
    }

    /**
    * Gets dbName
    *  数据库名称
    *
    * @return string|null
    */
    public function getDbName()
    {
        return $this->container['dbName'];
    }

    /**
    * Sets dbName
    *
    * @param string|null $dbName 数据库名称
    *
    * @return $this
    */
    public function setDbName($dbName)
    {
        $this->container['dbName'] = $dbName;
        return $this;
    }

    /**
    * Gets highRisk
    *  高风险总量
    *
    * @return int|null
    */
    public function getHighRisk()
    {
        return $this->container['highRisk'];
    }

    /**
    * Sets highRisk
    *
    * @param int|null $highRisk 高风险总量
    *
    * @return $this
    */
    public function setHighRisk($highRisk)
    {
        $this->container['highRisk'] = $highRisk;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例ID
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 实例ID
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets instanceName
    *  实例名称
    *
    * @return string|null
    */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
    * Sets instanceName
    *
    * @param string|null $instanceName 实例名称
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets lowRisk
    *  低风险总量
    *
    * @return int|null
    */
    public function getLowRisk()
    {
        return $this->container['lowRisk'];
    }

    /**
    * Sets lowRisk
    *
    * @param int|null $lowRisk 低风险总量
    *
    * @return $this
    */
    public function setLowRisk($lowRisk)
    {
        $this->container['lowRisk'] = $lowRisk;
        return $this;
    }

    /**
    * Gets mediumRisk
    *  中风险总量
    *
    * @return int|null
    */
    public function getMediumRisk()
    {
        return $this->container['mediumRisk'];
    }

    /**
    * Sets mediumRisk
    *
    * @param int|null $mediumRisk 中风险总量
    *
    * @return $this
    */
    public function setMediumRisk($mediumRisk)
    {
        $this->container['mediumRisk'] = $mediumRisk;
        return $this;
    }

    /**
    * Gets riskRule
    *  风险规则统计
    *
    * @return \HuaweiCloud\SDK\Dbss\V1\Model\RiskRuleStatistic[]|null
    */
    public function getRiskRule()
    {
        return $this->container['riskRule'];
    }

    /**
    * Sets riskRule
    *
    * @param \HuaweiCloud\SDK\Dbss\V1\Model\RiskRuleStatistic[]|null $riskRule 风险规则统计
    *
    * @return $this
    */
    public function setRiskRule($riskRule)
    {
        $this->container['riskRule'] = $riskRule;
        return $this;
    }

    /**
    * Gets totalRisk
    *  总风险数量
    *
    * @return int|null
    */
    public function getTotalRisk()
    {
        return $this->container['totalRisk'];
    }

    /**
    * Sets totalRisk
    *
    * @param int|null $totalRisk 总风险数量
    *
    * @return $this
    */
    public function setTotalRisk($totalRisk)
    {
        $this->container['totalRisk'] = $totalRisk;
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

