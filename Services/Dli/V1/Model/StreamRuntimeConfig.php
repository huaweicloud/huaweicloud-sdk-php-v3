<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StreamRuntimeConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StreamRuntimeConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * stagingUri  临时文件存储 URI，作业运行时产生的临时文件存储的 OBS 路径。（当前不支持配置）
    * logging  logging
    * properties  properties
    * flinkRuntimeConfig  flinkRuntimeConfig
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'stagingUri' => 'string',
            'logging' => '\HuaweiCloud\SDK\Dli\V1\Model\StreamLoggingConfig',
            'properties' => '\HuaweiCloud\SDK\Dli\V1\Model\Properties',
            'flinkRuntimeConfig' => '\HuaweiCloud\SDK\Dli\V1\Model\FlinkRuntimeConfig'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * stagingUri  临时文件存储 URI，作业运行时产生的临时文件存储的 OBS 路径。（当前不支持配置）
    * logging  logging
    * properties  properties
    * flinkRuntimeConfig  flinkRuntimeConfig
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'stagingUri' => null,
        'logging' => null,
        'properties' => null,
        'flinkRuntimeConfig' => null
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
    * stagingUri  临时文件存储 URI，作业运行时产生的临时文件存储的 OBS 路径。（当前不支持配置）
    * logging  logging
    * properties  properties
    * flinkRuntimeConfig  flinkRuntimeConfig
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'stagingUri' => 'staging_uri',
            'logging' => 'logging',
            'properties' => 'properties',
            'flinkRuntimeConfig' => 'flink_runtime_config'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * stagingUri  临时文件存储 URI，作业运行时产生的临时文件存储的 OBS 路径。（当前不支持配置）
    * logging  logging
    * properties  properties
    * flinkRuntimeConfig  flinkRuntimeConfig
    *
    * @var string[]
    */
    protected static $setters = [
            'stagingUri' => 'setStagingUri',
            'logging' => 'setLogging',
            'properties' => 'setProperties',
            'flinkRuntimeConfig' => 'setFlinkRuntimeConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * stagingUri  临时文件存储 URI，作业运行时产生的临时文件存储的 OBS 路径。（当前不支持配置）
    * logging  logging
    * properties  properties
    * flinkRuntimeConfig  flinkRuntimeConfig
    *
    * @var string[]
    */
    protected static $getters = [
            'stagingUri' => 'getStagingUri',
            'logging' => 'getLogging',
            'properties' => 'getProperties',
            'flinkRuntimeConfig' => 'getFlinkRuntimeConfig'
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
        $this->container['stagingUri'] = isset($data['stagingUri']) ? $data['stagingUri'] : null;
        $this->container['logging'] = isset($data['logging']) ? $data['logging'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
        $this->container['flinkRuntimeConfig'] = isset($data['flinkRuntimeConfig']) ? $data['flinkRuntimeConfig'] : null;
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
    * Gets stagingUri
    *  临时文件存储 URI，作业运行时产生的临时文件存储的 OBS 路径。（当前不支持配置）
    *
    * @return string|null
    */
    public function getStagingUri()
    {
        return $this->container['stagingUri'];
    }

    /**
    * Sets stagingUri
    *
    * @param string|null $stagingUri 临时文件存储 URI，作业运行时产生的临时文件存储的 OBS 路径。（当前不支持配置）
    *
    * @return $this
    */
    public function setStagingUri($stagingUri)
    {
        $this->container['stagingUri'] = $stagingUri;
        return $this;
    }

    /**
    * Gets logging
    *  logging
    *
    * @return \HuaweiCloud\SDK\Dli\V1\Model\StreamLoggingConfig|null
    */
    public function getLogging()
    {
        return $this->container['logging'];
    }

    /**
    * Sets logging
    *
    * @param \HuaweiCloud\SDK\Dli\V1\Model\StreamLoggingConfig|null $logging logging
    *
    * @return $this
    */
    public function setLogging($logging)
    {
        $this->container['logging'] = $logging;
        return $this;
    }

    /**
    * Gets properties
    *  properties
    *
    * @return \HuaweiCloud\SDK\Dli\V1\Model\Properties|null
    */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
    * Sets properties
    *
    * @param \HuaweiCloud\SDK\Dli\V1\Model\Properties|null $properties properties
    *
    * @return $this
    */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;
        return $this;
    }

    /**
    * Gets flinkRuntimeConfig
    *  flinkRuntimeConfig
    *
    * @return \HuaweiCloud\SDK\Dli\V1\Model\FlinkRuntimeConfig|null
    */
    public function getFlinkRuntimeConfig()
    {
        return $this->container['flinkRuntimeConfig'];
    }

    /**
    * Sets flinkRuntimeConfig
    *
    * @param \HuaweiCloud\SDK\Dli\V1\Model\FlinkRuntimeConfig|null $flinkRuntimeConfig flinkRuntimeConfig
    *
    * @return $this
    */
    public function setFlinkRuntimeConfig($flinkRuntimeConfig)
    {
        $this->container['flinkRuntimeConfig'] = $flinkRuntimeConfig;
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

