<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FlinkRuntimeConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FlinkRuntimeConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * version  Flink 版本。仅支持 Flink 1.15及以上版本。
    * restoreStrategy  restoreStrategy
    * resourceConfig  resourceConfig
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'version' => 'string',
            'restoreStrategy' => '\HuaweiCloud\SDK\Dli\V1\Model\FlinkRestoreStrategy',
            'resourceConfig' => '\HuaweiCloud\SDK\Dli\V1\Model\FlinkResourceConfig'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * version  Flink 版本。仅支持 Flink 1.15及以上版本。
    * restoreStrategy  restoreStrategy
    * resourceConfig  resourceConfig
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'version' => null,
        'restoreStrategy' => null,
        'resourceConfig' => null
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
    * version  Flink 版本。仅支持 Flink 1.15及以上版本。
    * restoreStrategy  restoreStrategy
    * resourceConfig  resourceConfig
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'version' => 'version',
            'restoreStrategy' => 'restore_strategy',
            'resourceConfig' => 'resource_config'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * version  Flink 版本。仅支持 Flink 1.15及以上版本。
    * restoreStrategy  restoreStrategy
    * resourceConfig  resourceConfig
    *
    * @var string[]
    */
    protected static $setters = [
            'version' => 'setVersion',
            'restoreStrategy' => 'setRestoreStrategy',
            'resourceConfig' => 'setResourceConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * version  Flink 版本。仅支持 Flink 1.15及以上版本。
    * restoreStrategy  restoreStrategy
    * resourceConfig  resourceConfig
    *
    * @var string[]
    */
    protected static $getters = [
            'version' => 'getVersion',
            'restoreStrategy' => 'getRestoreStrategy',
            'resourceConfig' => 'getResourceConfig'
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
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['restoreStrategy'] = isset($data['restoreStrategy']) ? $data['restoreStrategy'] : null;
        $this->container['resourceConfig'] = isset($data['resourceConfig']) ? $data['resourceConfig'] : null;
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
    * Gets version
    *  Flink 版本。仅支持 Flink 1.15及以上版本。
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version Flink 版本。仅支持 Flink 1.15及以上版本。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets restoreStrategy
    *  restoreStrategy
    *
    * @return \HuaweiCloud\SDK\Dli\V1\Model\FlinkRestoreStrategy|null
    */
    public function getRestoreStrategy()
    {
        return $this->container['restoreStrategy'];
    }

    /**
    * Sets restoreStrategy
    *
    * @param \HuaweiCloud\SDK\Dli\V1\Model\FlinkRestoreStrategy|null $restoreStrategy restoreStrategy
    *
    * @return $this
    */
    public function setRestoreStrategy($restoreStrategy)
    {
        $this->container['restoreStrategy'] = $restoreStrategy;
        return $this;
    }

    /**
    * Gets resourceConfig
    *  resourceConfig
    *
    * @return \HuaweiCloud\SDK\Dli\V1\Model\FlinkResourceConfig|null
    */
    public function getResourceConfig()
    {
        return $this->container['resourceConfig'];
    }

    /**
    * Sets resourceConfig
    *
    * @param \HuaweiCloud\SDK\Dli\V1\Model\FlinkResourceConfig|null $resourceConfig resourceConfig
    *
    * @return $this
    */
    public function setResourceConfig($resourceConfig)
    {
        $this->container['resourceConfig'] = $resourceConfig;
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

