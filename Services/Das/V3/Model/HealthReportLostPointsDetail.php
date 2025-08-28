<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HealthReportLostPointsDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HealthReportLostPointsDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * metric  扣分项。
    * lostPoints  所扣分数。
    * riskLevel  事件等级。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'metric' => 'string',
            'lostPoints' => 'double',
            'riskLevel' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * metric  扣分项。
    * lostPoints  所扣分数。
    * riskLevel  事件等级。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'metric' => null,
        'lostPoints' => 'double',
        'riskLevel' => null
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
    * metric  扣分项。
    * lostPoints  所扣分数。
    * riskLevel  事件等级。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'metric' => 'metric',
            'lostPoints' => 'lost_points',
            'riskLevel' => 'risk_level'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * metric  扣分项。
    * lostPoints  所扣分数。
    * riskLevel  事件等级。
    *
    * @var string[]
    */
    protected static $setters = [
            'metric' => 'setMetric',
            'lostPoints' => 'setLostPoints',
            'riskLevel' => 'setRiskLevel'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * metric  扣分项。
    * lostPoints  所扣分数。
    * riskLevel  事件等级。
    *
    * @var string[]
    */
    protected static $getters = [
            'metric' => 'getMetric',
            'lostPoints' => 'getLostPoints',
            'riskLevel' => 'getRiskLevel'
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
        $this->container['metric'] = isset($data['metric']) ? $data['metric'] : null;
        $this->container['lostPoints'] = isset($data['lostPoints']) ? $data['lostPoints'] : null;
        $this->container['riskLevel'] = isset($data['riskLevel']) ? $data['riskLevel'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['metric'] === null) {
            $invalidProperties[] = "'metric' can't be null";
        }
        if ($this->container['lostPoints'] === null) {
            $invalidProperties[] = "'lostPoints' can't be null";
        }
        if ($this->container['riskLevel'] === null) {
            $invalidProperties[] = "'riskLevel' can't be null";
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
    * Gets metric
    *  扣分项。
    *
    * @return string
    */
    public function getMetric()
    {
        return $this->container['metric'];
    }

    /**
    * Sets metric
    *
    * @param string $metric 扣分项。
    *
    * @return $this
    */
    public function setMetric($metric)
    {
        $this->container['metric'] = $metric;
        return $this;
    }

    /**
    * Gets lostPoints
    *  所扣分数。
    *
    * @return double
    */
    public function getLostPoints()
    {
        return $this->container['lostPoints'];
    }

    /**
    * Sets lostPoints
    *
    * @param double $lostPoints 所扣分数。
    *
    * @return $this
    */
    public function setLostPoints($lostPoints)
    {
        $this->container['lostPoints'] = $lostPoints;
        return $this;
    }

    /**
    * Gets riskLevel
    *  事件等级。
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
    * @param string $riskLevel 事件等级。
    *
    * @return $this
    */
    public function setRiskLevel($riskLevel)
    {
        $this->container['riskLevel'] = $riskLevel;
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

