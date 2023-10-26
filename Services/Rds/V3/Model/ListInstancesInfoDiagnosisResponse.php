<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListInstancesInfoDiagnosisResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListInstancesInfoDiagnosisResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * diagnosis  诊断项
    * totalCount  实例数量
    * instances  实例信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'diagnosis' => 'string',
            'totalCount' => 'int',
            'instances' => '\HuaweiCloud\SDK\Rds\V3\Model\DiagnosisInstancesInfoResult[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * diagnosis  诊断项
    * totalCount  实例数量
    * instances  实例信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'diagnosis' => null,
        'totalCount' => null,
        'instances' => null
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
    * diagnosis  诊断项
    * totalCount  实例数量
    * instances  实例信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'diagnosis' => 'diagnosis',
            'totalCount' => 'total_count',
            'instances' => 'instances'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * diagnosis  诊断项
    * totalCount  实例数量
    * instances  实例信息
    *
    * @var string[]
    */
    protected static $setters = [
            'diagnosis' => 'setDiagnosis',
            'totalCount' => 'setTotalCount',
            'instances' => 'setInstances'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * diagnosis  诊断项
    * totalCount  实例数量
    * instances  实例信息
    *
    * @var string[]
    */
    protected static $getters = [
            'diagnosis' => 'getDiagnosis',
            'totalCount' => 'getTotalCount',
            'instances' => 'getInstances'
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
    const DIAGNOSIS_HIGH_PRESSURE = 'high_pressure';
    const DIAGNOSIS_LOCK_WAIT = 'lock_wait';
    const DIAGNOSIS_INSUFFICIENT_CAPACITY = 'insufficient_capacity';
    const DIAGNOSIS_SLOW_SQL_FREQUENCY = 'slow_sql_frequency';
    const DIAGNOSIS_DISK_PERFORMANCE_CAP = 'disk_performance_cap';
    const DIAGNOSIS_MEM_OVERRUN = 'mem_overrun';
    const DIAGNOSIS_AGE_EXCEED = 'age_exceed';
    const DIAGNOSIS_CONNECTIONS_EXCEED = 'connections_exceed';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDiagnosisAllowableValues()
    {
        return [
            self::DIAGNOSIS_HIGH_PRESSURE,
            self::DIAGNOSIS_LOCK_WAIT,
            self::DIAGNOSIS_INSUFFICIENT_CAPACITY,
            self::DIAGNOSIS_SLOW_SQL_FREQUENCY,
            self::DIAGNOSIS_DISK_PERFORMANCE_CAP,
            self::DIAGNOSIS_MEM_OVERRUN,
            self::DIAGNOSIS_AGE_EXCEED,
            self::DIAGNOSIS_CONNECTIONS_EXCEED,
        ];
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
        $this->container['diagnosis'] = isset($data['diagnosis']) ? $data['diagnosis'] : null;
        $this->container['totalCount'] = isset($data['totalCount']) ? $data['totalCount'] : null;
        $this->container['instances'] = isset($data['instances']) ? $data['instances'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getDiagnosisAllowableValues();
                if (!is_null($this->container['diagnosis']) && !in_array($this->container['diagnosis'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'diagnosis', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets diagnosis
    *  诊断项
    *
    * @return string|null
    */
    public function getDiagnosis()
    {
        return $this->container['diagnosis'];
    }

    /**
    * Sets diagnosis
    *
    * @param string|null $diagnosis 诊断项
    *
    * @return $this
    */
    public function setDiagnosis($diagnosis)
    {
        $this->container['diagnosis'] = $diagnosis;
        return $this;
    }

    /**
    * Gets totalCount
    *  实例数量
    *
    * @return int|null
    */
    public function getTotalCount()
    {
        return $this->container['totalCount'];
    }

    /**
    * Sets totalCount
    *
    * @param int|null $totalCount 实例数量
    *
    * @return $this
    */
    public function setTotalCount($totalCount)
    {
        $this->container['totalCount'] = $totalCount;
        return $this;
    }

    /**
    * Gets instances
    *  实例信息
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\DiagnosisInstancesInfoResult[]|null
    */
    public function getInstances()
    {
        return $this->container['instances'];
    }

    /**
    * Sets instances
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\DiagnosisInstancesInfoResult[]|null $instances 实例信息
    *
    * @return $this
    */
    public function setInstances($instances)
    {
        $this->container['instances'] = $instances;
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

