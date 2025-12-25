<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAlertRuleMetricsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAlertRuleMetricsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cuUsage  cuUsage
    * alertSeverities  alertSeverities
    * metricsStatus  metricsStatus
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cuUsage' => '\HuaweiCloud\SDK\SecMaster\V2\Model\CuUsage',
            'alertSeverities' => '\HuaweiCloud\SDK\SecMaster\V2\Model\AlertSeverities',
            'metricsStatus' => '\HuaweiCloud\SDK\SecMaster\V2\Model\MetricsStatus'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cuUsage  cuUsage
    * alertSeverities  alertSeverities
    * metricsStatus  metricsStatus
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cuUsage' => null,
        'alertSeverities' => null,
        'metricsStatus' => null
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
    * cuUsage  cuUsage
    * alertSeverities  alertSeverities
    * metricsStatus  metricsStatus
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cuUsage' => 'cu_usage',
            'alertSeverities' => 'alert_severities',
            'metricsStatus' => 'metrics_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cuUsage  cuUsage
    * alertSeverities  alertSeverities
    * metricsStatus  metricsStatus
    *
    * @var string[]
    */
    protected static $setters = [
            'cuUsage' => 'setCuUsage',
            'alertSeverities' => 'setAlertSeverities',
            'metricsStatus' => 'setMetricsStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cuUsage  cuUsage
    * alertSeverities  alertSeverities
    * metricsStatus  metricsStatus
    *
    * @var string[]
    */
    protected static $getters = [
            'cuUsage' => 'getCuUsage',
            'alertSeverities' => 'getAlertSeverities',
            'metricsStatus' => 'getMetricsStatus'
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
        $this->container['cuUsage'] = isset($data['cuUsage']) ? $data['cuUsage'] : null;
        $this->container['alertSeverities'] = isset($data['alertSeverities']) ? $data['alertSeverities'] : null;
        $this->container['metricsStatus'] = isset($data['metricsStatus']) ? $data['metricsStatus'] : null;
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
    * Gets cuUsage
    *  cuUsage
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\CuUsage|null
    */
    public function getCuUsage()
    {
        return $this->container['cuUsage'];
    }

    /**
    * Sets cuUsage
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\CuUsage|null $cuUsage cuUsage
    *
    * @return $this
    */
    public function setCuUsage($cuUsage)
    {
        $this->container['cuUsage'] = $cuUsage;
        return $this;
    }

    /**
    * Gets alertSeverities
    *  alertSeverities
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\AlertSeverities|null
    */
    public function getAlertSeverities()
    {
        return $this->container['alertSeverities'];
    }

    /**
    * Sets alertSeverities
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\AlertSeverities|null $alertSeverities alertSeverities
    *
    * @return $this
    */
    public function setAlertSeverities($alertSeverities)
    {
        $this->container['alertSeverities'] = $alertSeverities;
        return $this;
    }

    /**
    * Gets metricsStatus
    *  metricsStatus
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\MetricsStatus|null
    */
    public function getMetricsStatus()
    {
        return $this->container['metricsStatus'];
    }

    /**
    * Sets metricsStatus
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\MetricsStatus|null $metricsStatus metricsStatus
    *
    * @return $this
    */
    public function setMetricsStatus($metricsStatus)
    {
        $this->container['metricsStatus'] = $metricsStatus;
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

