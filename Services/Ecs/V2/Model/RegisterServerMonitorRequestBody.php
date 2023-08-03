<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RegisterServerMonitorRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RegisterServerMonitorRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * monitorMetrics  注册云服务器监控。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'monitorMetrics' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * monitorMetrics  注册云服务器监控。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'monitorMetrics' => null
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
    * monitorMetrics  注册云服务器监控。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'monitorMetrics' => 'monitorMetrics'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * monitorMetrics  注册云服务器监控。
    *
    * @var string[]
    */
    protected static $setters = [
            'monitorMetrics' => 'setMonitorMetrics'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * monitorMetrics  注册云服务器监控。
    *
    * @var string[]
    */
    protected static $getters = [
            'monitorMetrics' => 'getMonitorMetrics'
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
    const MONITOR_METRICS_EMPTY = '';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getMonitorMetricsAllowableValues()
    {
        return [
            self::MONITOR_METRICS_EMPTY,
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
        $this->container['monitorMetrics'] = isset($data['monitorMetrics']) ? $data['monitorMetrics'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['monitorMetrics'] === null) {
            $invalidProperties[] = "'monitorMetrics' can't be null";
        }
            $allowedValues = $this->getMonitorMetricsAllowableValues();
                if (!is_null($this->container['monitorMetrics']) && !in_array($this->container['monitorMetrics'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'monitorMetrics', must be one of '%s'",
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
    * Gets monitorMetrics
    *  注册云服务器监控。
    *
    * @return string
    */
    public function getMonitorMetrics()
    {
        return $this->container['monitorMetrics'];
    }

    /**
    * Sets monitorMetrics
    *
    * @param string $monitorMetrics 注册云服务器监控。
    *
    * @return $this
    */
    public function setMonitorMetrics($monitorMetrics)
    {
        $this->container['monitorMetrics'] = $monitorMetrics;
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

