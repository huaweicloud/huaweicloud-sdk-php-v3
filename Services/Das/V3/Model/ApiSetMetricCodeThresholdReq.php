<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApiSetMetricCodeThresholdReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApiSetMetricCodeThresholdReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * metricCode  指标码
    * datastoreType  数据库类型
    * newThreshold  新阈值
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'metricCode' => 'string',
            'datastoreType' => 'string',
            'newThreshold' => 'double'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * metricCode  指标码
    * datastoreType  数据库类型
    * newThreshold  新阈值
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'metricCode' => null,
        'datastoreType' => null,
        'newThreshold' => 'double'
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
    * metricCode  指标码
    * datastoreType  数据库类型
    * newThreshold  新阈值
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'metricCode' => 'metric_code',
            'datastoreType' => 'datastore_type',
            'newThreshold' => 'new_threshold'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * metricCode  指标码
    * datastoreType  数据库类型
    * newThreshold  新阈值
    *
    * @var string[]
    */
    protected static $setters = [
            'metricCode' => 'setMetricCode',
            'datastoreType' => 'setDatastoreType',
            'newThreshold' => 'setNewThreshold'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * metricCode  指标码
    * datastoreType  数据库类型
    * newThreshold  新阈值
    *
    * @var string[]
    */
    protected static $getters = [
            'metricCode' => 'getMetricCode',
            'datastoreType' => 'getDatastoreType',
            'newThreshold' => 'getNewThreshold'
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
        $this->container['metricCode'] = isset($data['metricCode']) ? $data['metricCode'] : null;
        $this->container['datastoreType'] = isset($data['datastoreType']) ? $data['datastoreType'] : null;
        $this->container['newThreshold'] = isset($data['newThreshold']) ? $data['newThreshold'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['metricCode'] === null) {
            $invalidProperties[] = "'metricCode' can't be null";
        }
        if ($this->container['datastoreType'] === null) {
            $invalidProperties[] = "'datastoreType' can't be null";
        }
        if ($this->container['newThreshold'] === null) {
            $invalidProperties[] = "'newThreshold' can't be null";
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
    * Gets metricCode
    *  指标码
    *
    * @return string
    */
    public function getMetricCode()
    {
        return $this->container['metricCode'];
    }

    /**
    * Sets metricCode
    *
    * @param string $metricCode 指标码
    *
    * @return $this
    */
    public function setMetricCode($metricCode)
    {
        $this->container['metricCode'] = $metricCode;
        return $this;
    }

    /**
    * Gets datastoreType
    *  数据库类型
    *
    * @return string
    */
    public function getDatastoreType()
    {
        return $this->container['datastoreType'];
    }

    /**
    * Sets datastoreType
    *
    * @param string $datastoreType 数据库类型
    *
    * @return $this
    */
    public function setDatastoreType($datastoreType)
    {
        $this->container['datastoreType'] = $datastoreType;
        return $this;
    }

    /**
    * Gets newThreshold
    *  新阈值
    *
    * @return double
    */
    public function getNewThreshold()
    {
        return $this->container['newThreshold'];
    }

    /**
    * Sets newThreshold
    *
    * @param double $newThreshold 新阈值
    *
    * @return $this
    */
    public function setNewThreshold($newThreshold)
    {
        $this->container['newThreshold'] = $newThreshold;
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

