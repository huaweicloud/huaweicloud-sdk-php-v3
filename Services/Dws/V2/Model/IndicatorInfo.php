<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IndicatorInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IndicatorInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * indicatorName  监控指标名称。
    * pluginName  采集模块名称。
    * defaultCollectRate  默认采集频率。
    * supportDatastoreVersion  支持的集群版本。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'indicatorName' => 'string',
            'pluginName' => 'string',
            'defaultCollectRate' => 'string',
            'supportDatastoreVersion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * indicatorName  监控指标名称。
    * pluginName  采集模块名称。
    * defaultCollectRate  默认采集频率。
    * supportDatastoreVersion  支持的集群版本。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'indicatorName' => null,
        'pluginName' => null,
        'defaultCollectRate' => null,
        'supportDatastoreVersion' => null
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
    * indicatorName  监控指标名称。
    * pluginName  采集模块名称。
    * defaultCollectRate  默认采集频率。
    * supportDatastoreVersion  支持的集群版本。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'indicatorName' => 'indicator_name',
            'pluginName' => 'plugin_name',
            'defaultCollectRate' => 'default_collect_rate',
            'supportDatastoreVersion' => 'support_datastore_version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * indicatorName  监控指标名称。
    * pluginName  采集模块名称。
    * defaultCollectRate  默认采集频率。
    * supportDatastoreVersion  支持的集群版本。
    *
    * @var string[]
    */
    protected static $setters = [
            'indicatorName' => 'setIndicatorName',
            'pluginName' => 'setPluginName',
            'defaultCollectRate' => 'setDefaultCollectRate',
            'supportDatastoreVersion' => 'setSupportDatastoreVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * indicatorName  监控指标名称。
    * pluginName  采集模块名称。
    * defaultCollectRate  默认采集频率。
    * supportDatastoreVersion  支持的集群版本。
    *
    * @var string[]
    */
    protected static $getters = [
            'indicatorName' => 'getIndicatorName',
            'pluginName' => 'getPluginName',
            'defaultCollectRate' => 'getDefaultCollectRate',
            'supportDatastoreVersion' => 'getSupportDatastoreVersion'
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
        $this->container['indicatorName'] = isset($data['indicatorName']) ? $data['indicatorName'] : null;
        $this->container['pluginName'] = isset($data['pluginName']) ? $data['pluginName'] : null;
        $this->container['defaultCollectRate'] = isset($data['defaultCollectRate']) ? $data['defaultCollectRate'] : null;
        $this->container['supportDatastoreVersion'] = isset($data['supportDatastoreVersion']) ? $data['supportDatastoreVersion'] : null;
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
    * Gets indicatorName
    *  监控指标名称。
    *
    * @return string|null
    */
    public function getIndicatorName()
    {
        return $this->container['indicatorName'];
    }

    /**
    * Sets indicatorName
    *
    * @param string|null $indicatorName 监控指标名称。
    *
    * @return $this
    */
    public function setIndicatorName($indicatorName)
    {
        $this->container['indicatorName'] = $indicatorName;
        return $this;
    }

    /**
    * Gets pluginName
    *  采集模块名称。
    *
    * @return string|null
    */
    public function getPluginName()
    {
        return $this->container['pluginName'];
    }

    /**
    * Sets pluginName
    *
    * @param string|null $pluginName 采集模块名称。
    *
    * @return $this
    */
    public function setPluginName($pluginName)
    {
        $this->container['pluginName'] = $pluginName;
        return $this;
    }

    /**
    * Gets defaultCollectRate
    *  默认采集频率。
    *
    * @return string|null
    */
    public function getDefaultCollectRate()
    {
        return $this->container['defaultCollectRate'];
    }

    /**
    * Sets defaultCollectRate
    *
    * @param string|null $defaultCollectRate 默认采集频率。
    *
    * @return $this
    */
    public function setDefaultCollectRate($defaultCollectRate)
    {
        $this->container['defaultCollectRate'] = $defaultCollectRate;
        return $this;
    }

    /**
    * Gets supportDatastoreVersion
    *  支持的集群版本。
    *
    * @return string|null
    */
    public function getSupportDatastoreVersion()
    {
        return $this->container['supportDatastoreVersion'];
    }

    /**
    * Sets supportDatastoreVersion
    *
    * @param string|null $supportDatastoreVersion 支持的集群版本。
    *
    * @return $this
    */
    public function setSupportDatastoreVersion($supportDatastoreVersion)
    {
        $this->container['supportDatastoreVersion'] = $supportDatastoreVersion;
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

