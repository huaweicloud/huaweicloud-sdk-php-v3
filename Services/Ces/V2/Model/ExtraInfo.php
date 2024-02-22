<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExtraInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExtraInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * originMetricName  指标名称
    * metricPrefix  指标名称前缀
    * metricType  指标类型
    * customProcName  自定义进程名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'originMetricName' => 'string',
            'metricPrefix' => 'string',
            'metricType' => 'string',
            'customProcName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * originMetricName  指标名称
    * metricPrefix  指标名称前缀
    * metricType  指标类型
    * customProcName  自定义进程名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'originMetricName' => null,
        'metricPrefix' => null,
        'metricType' => null,
        'customProcName' => null
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
    * originMetricName  指标名称
    * metricPrefix  指标名称前缀
    * metricType  指标类型
    * customProcName  自定义进程名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'originMetricName' => 'origin_metric_name',
            'metricPrefix' => 'metric_prefix',
            'metricType' => 'metric_type',
            'customProcName' => 'custom_proc_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * originMetricName  指标名称
    * metricPrefix  指标名称前缀
    * metricType  指标类型
    * customProcName  自定义进程名称
    *
    * @var string[]
    */
    protected static $setters = [
            'originMetricName' => 'setOriginMetricName',
            'metricPrefix' => 'setMetricPrefix',
            'metricType' => 'setMetricType',
            'customProcName' => 'setCustomProcName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * originMetricName  指标名称
    * metricPrefix  指标名称前缀
    * metricType  指标类型
    * customProcName  自定义进程名称
    *
    * @var string[]
    */
    protected static $getters = [
            'originMetricName' => 'getOriginMetricName',
            'metricPrefix' => 'getMetricPrefix',
            'metricType' => 'getMetricType',
            'customProcName' => 'getCustomProcName'
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
        $this->container['originMetricName'] = isset($data['originMetricName']) ? $data['originMetricName'] : null;
        $this->container['metricPrefix'] = isset($data['metricPrefix']) ? $data['metricPrefix'] : null;
        $this->container['metricType'] = isset($data['metricType']) ? $data['metricType'] : null;
        $this->container['customProcName'] = isset($data['customProcName']) ? $data['customProcName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['originMetricName'] === null) {
            $invalidProperties[] = "'originMetricName' can't be null";
        }
            if ((mb_strlen($this->container['originMetricName']) > 4096)) {
                $invalidProperties[] = "invalid value for 'originMetricName', the character length must be smaller than or equal to 4096.";
            }
            if ((mb_strlen($this->container['originMetricName']) < 1)) {
                $invalidProperties[] = "invalid value for 'originMetricName', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^([a-z]|[A-Z]|[0-9]|_|-|~|\\.|\/|:)*$/", $this->container['originMetricName'])) {
                $invalidProperties[] = "invalid value for 'originMetricName', must be conform to the pattern /^([a-z]|[A-Z]|[0-9]|_|-|~|\\.|\/|:)*$/.";
            }
            if (!is_null($this->container['metricPrefix']) && (mb_strlen($this->container['metricPrefix']) > 4096)) {
                $invalidProperties[] = "invalid value for 'metricPrefix', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['metricPrefix']) && (mb_strlen($this->container['metricPrefix']) < 1)) {
                $invalidProperties[] = "invalid value for 'metricPrefix', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['metricPrefix']) && !preg_match("/^([a-z]|[A-Z]|[0-9]|_|-|~|\\.|\/|:)*$/", $this->container['metricPrefix'])) {
                $invalidProperties[] = "invalid value for 'metricPrefix', must be conform to the pattern /^([a-z]|[A-Z]|[0-9]|_|-|~|\\.|\/|:)*$/.";
            }
            if (!is_null($this->container['metricType']) && (mb_strlen($this->container['metricType']) > 32)) {
                $invalidProperties[] = "invalid value for 'metricType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['metricType']) && (mb_strlen($this->container['metricType']) < 1)) {
                $invalidProperties[] = "invalid value for 'metricType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['metricType']) && !preg_match("/^([a-z]|[A-Z]|[0-9]|_|-|~|\\.|\/|:)*$/", $this->container['metricType'])) {
                $invalidProperties[] = "invalid value for 'metricType', must be conform to the pattern /^([a-z]|[A-Z]|[0-9]|_|-|~|\\.|\/|:)*$/.";
            }
            if (!is_null($this->container['customProcName']) && (mb_strlen($this->container['customProcName']) > 250)) {
                $invalidProperties[] = "invalid value for 'customProcName', the character length must be smaller than or equal to 250.";
            }
            if (!is_null($this->container['customProcName']) && (mb_strlen($this->container['customProcName']) < 1)) {
                $invalidProperties[] = "invalid value for 'customProcName', the character length must be bigger than or equal to 1.";
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
    * Gets originMetricName
    *  指标名称
    *
    * @return string
    */
    public function getOriginMetricName()
    {
        return $this->container['originMetricName'];
    }

    /**
    * Sets originMetricName
    *
    * @param string $originMetricName 指标名称
    *
    * @return $this
    */
    public function setOriginMetricName($originMetricName)
    {
        $this->container['originMetricName'] = $originMetricName;
        return $this;
    }

    /**
    * Gets metricPrefix
    *  指标名称前缀
    *
    * @return string|null
    */
    public function getMetricPrefix()
    {
        return $this->container['metricPrefix'];
    }

    /**
    * Sets metricPrefix
    *
    * @param string|null $metricPrefix 指标名称前缀
    *
    * @return $this
    */
    public function setMetricPrefix($metricPrefix)
    {
        $this->container['metricPrefix'] = $metricPrefix;
        return $this;
    }

    /**
    * Gets metricType
    *  指标类型
    *
    * @return string|null
    */
    public function getMetricType()
    {
        return $this->container['metricType'];
    }

    /**
    * Sets metricType
    *
    * @param string|null $metricType 指标类型
    *
    * @return $this
    */
    public function setMetricType($metricType)
    {
        $this->container['metricType'] = $metricType;
        return $this;
    }

    /**
    * Gets customProcName
    *  自定义进程名称
    *
    * @return string|null
    */
    public function getCustomProcName()
    {
        return $this->container['customProcName'];
    }

    /**
    * Sets customProcName
    *
    * @param string|null $customProcName 自定义进程名称
    *
    * @return $this
    */
    public function setCustomProcName($customProcName)
    {
        $this->container['customProcName'] = $customProcName;
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

