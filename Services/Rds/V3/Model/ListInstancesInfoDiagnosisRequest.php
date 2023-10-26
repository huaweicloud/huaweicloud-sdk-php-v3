<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListInstancesInfoDiagnosisRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListInstancesInfoDiagnosisRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * engine  引擎类型
    * diagnosis  诊断项
    * offset  offset
    * limit  limit
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'engine' => 'string',
            'diagnosis' => 'string',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * engine  引擎类型
    * diagnosis  诊断项
    * offset  offset
    * limit  limit
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'engine' => null,
        'diagnosis' => null,
        'offset' => null,
        'limit' => null
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
    * engine  引擎类型
    * diagnosis  诊断项
    * offset  offset
    * limit  limit
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'engine' => 'engine',
            'diagnosis' => 'diagnosis',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * engine  引擎类型
    * diagnosis  诊断项
    * offset  offset
    * limit  limit
    *
    * @var string[]
    */
    protected static $setters = [
            'engine' => 'setEngine',
            'diagnosis' => 'setDiagnosis',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * engine  引擎类型
    * diagnosis  诊断项
    * offset  offset
    * limit  limit
    *
    * @var string[]
    */
    protected static $getters = [
            'engine' => 'getEngine',
            'diagnosis' => 'getDiagnosis',
            'offset' => 'getOffset',
            'limit' => 'getLimit'
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
    const ENGINE_MYSQL = 'mysql';
    const ENGINE_POSTGRESQL = 'postgresql';
    const ENGINE_SQLSERVER = 'sqlserver';
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
    public function getEngineAllowableValues()
    {
        return [
            self::ENGINE_MYSQL,
            self::ENGINE_POSTGRESQL,
            self::ENGINE_SQLSERVER,
        ];
    }

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
        $this->container['engine'] = isset($data['engine']) ? $data['engine'] : null;
        $this->container['diagnosis'] = isset($data['diagnosis']) ? $data['diagnosis'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['engine'] === null) {
            $invalidProperties[] = "'engine' can't be null";
        }
            $allowedValues = $this->getEngineAllowableValues();
                if (!is_null($this->container['engine']) && !in_array($this->container['engine'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'engine', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['diagnosis'] === null) {
            $invalidProperties[] = "'diagnosis' can't be null";
        }
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
    * Gets engine
    *  引擎类型
    *
    * @return string
    */
    public function getEngine()
    {
        return $this->container['engine'];
    }

    /**
    * Sets engine
    *
    * @param string $engine 引擎类型
    *
    * @return $this
    */
    public function setEngine($engine)
    {
        $this->container['engine'] = $engine;
        return $this;
    }

    /**
    * Gets diagnosis
    *  诊断项
    *
    * @return string
    */
    public function getDiagnosis()
    {
        return $this->container['diagnosis'];
    }

    /**
    * Sets diagnosis
    *
    * @param string $diagnosis 诊断项
    *
    * @return $this
    */
    public function setDiagnosis($diagnosis)
    {
        $this->container['diagnosis'] = $diagnosis;
        return $this;
    }

    /**
    * Gets offset
    *  offset
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset offset
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  limit
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit limit
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
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

