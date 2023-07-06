<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryPreCheckResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryPreCheckResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * result  返回的预检查结果是否通过。
    * process  预检查进度百分比。
    * totalPassedRate  预检查通过百分比。
    * rdsInstanceId  数据库实例ID。
    * jobDirection  迁移方向。
    * precheckResults  预检查各项结果。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'result' => 'bool',
            'process' => 'string',
            'totalPassedRate' => 'string',
            'rdsInstanceId' => 'string',
            'jobDirection' => 'string',
            'precheckResults' => '\HuaweiCloud\SDK\Drs\V5\Model\PrecheckResult[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * result  返回的预检查结果是否通过。
    * process  预检查进度百分比。
    * totalPassedRate  预检查通过百分比。
    * rdsInstanceId  数据库实例ID。
    * jobDirection  迁移方向。
    * precheckResults  预检查各项结果。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'result' => null,
        'process' => null,
        'totalPassedRate' => null,
        'rdsInstanceId' => null,
        'jobDirection' => null,
        'precheckResults' => null
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
    * result  返回的预检查结果是否通过。
    * process  预检查进度百分比。
    * totalPassedRate  预检查通过百分比。
    * rdsInstanceId  数据库实例ID。
    * jobDirection  迁移方向。
    * precheckResults  预检查各项结果。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'result' => 'result',
            'process' => 'process',
            'totalPassedRate' => 'total_passed_rate',
            'rdsInstanceId' => 'rds_instance_id',
            'jobDirection' => 'job_direction',
            'precheckResults' => 'precheck_results'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * result  返回的预检查结果是否通过。
    * process  预检查进度百分比。
    * totalPassedRate  预检查通过百分比。
    * rdsInstanceId  数据库实例ID。
    * jobDirection  迁移方向。
    * precheckResults  预检查各项结果。
    *
    * @var string[]
    */
    protected static $setters = [
            'result' => 'setResult',
            'process' => 'setProcess',
            'totalPassedRate' => 'setTotalPassedRate',
            'rdsInstanceId' => 'setRdsInstanceId',
            'jobDirection' => 'setJobDirection',
            'precheckResults' => 'setPrecheckResults'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * result  返回的预检查结果是否通过。
    * process  预检查进度百分比。
    * totalPassedRate  预检查通过百分比。
    * rdsInstanceId  数据库实例ID。
    * jobDirection  迁移方向。
    * precheckResults  预检查各项结果。
    *
    * @var string[]
    */
    protected static $getters = [
            'result' => 'getResult',
            'process' => 'getProcess',
            'totalPassedRate' => 'getTotalPassedRate',
            'rdsInstanceId' => 'getRdsInstanceId',
            'jobDirection' => 'getJobDirection',
            'precheckResults' => 'getPrecheckResults'
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
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['process'] = isset($data['process']) ? $data['process'] : null;
        $this->container['totalPassedRate'] = isset($data['totalPassedRate']) ? $data['totalPassedRate'] : null;
        $this->container['rdsInstanceId'] = isset($data['rdsInstanceId']) ? $data['rdsInstanceId'] : null;
        $this->container['jobDirection'] = isset($data['jobDirection']) ? $data['jobDirection'] : null;
        $this->container['precheckResults'] = isset($data['precheckResults']) ? $data['precheckResults'] : null;
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
    * Gets result
    *  返回的预检查结果是否通过。
    *
    * @return bool|null
    */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
    * Sets result
    *
    * @param bool|null $result 返回的预检查结果是否通过。
    *
    * @return $this
    */
    public function setResult($result)
    {
        $this->container['result'] = $result;
        return $this;
    }

    /**
    * Gets process
    *  预检查进度百分比。
    *
    * @return string|null
    */
    public function getProcess()
    {
        return $this->container['process'];
    }

    /**
    * Sets process
    *
    * @param string|null $process 预检查进度百分比。
    *
    * @return $this
    */
    public function setProcess($process)
    {
        $this->container['process'] = $process;
        return $this;
    }

    /**
    * Gets totalPassedRate
    *  预检查通过百分比。
    *
    * @return string|null
    */
    public function getTotalPassedRate()
    {
        return $this->container['totalPassedRate'];
    }

    /**
    * Sets totalPassedRate
    *
    * @param string|null $totalPassedRate 预检查通过百分比。
    *
    * @return $this
    */
    public function setTotalPassedRate($totalPassedRate)
    {
        $this->container['totalPassedRate'] = $totalPassedRate;
        return $this;
    }

    /**
    * Gets rdsInstanceId
    *  数据库实例ID。
    *
    * @return string|null
    */
    public function getRdsInstanceId()
    {
        return $this->container['rdsInstanceId'];
    }

    /**
    * Sets rdsInstanceId
    *
    * @param string|null $rdsInstanceId 数据库实例ID。
    *
    * @return $this
    */
    public function setRdsInstanceId($rdsInstanceId)
    {
        $this->container['rdsInstanceId'] = $rdsInstanceId;
        return $this;
    }

    /**
    * Gets jobDirection
    *  迁移方向。
    *
    * @return string|null
    */
    public function getJobDirection()
    {
        return $this->container['jobDirection'];
    }

    /**
    * Sets jobDirection
    *
    * @param string|null $jobDirection 迁移方向。
    *
    * @return $this
    */
    public function setJobDirection($jobDirection)
    {
        $this->container['jobDirection'] = $jobDirection;
        return $this;
    }

    /**
    * Gets precheckResults
    *  预检查各项结果。
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\PrecheckResult[]|null
    */
    public function getPrecheckResults()
    {
        return $this->container['precheckResults'];
    }

    /**
    * Sets precheckResults
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\PrecheckResult[]|null $precheckResults 预检查各项结果。
    *
    * @return $this
    */
    public function setPrecheckResults($precheckResults)
    {
        $this->container['precheckResults'] = $precheckResults;
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

