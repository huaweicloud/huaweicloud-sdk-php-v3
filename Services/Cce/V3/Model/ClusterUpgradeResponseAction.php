<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClusterUpgradeResponseAction implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClusterUpgradeResponseAction';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * version  当前集群版本
    * targetVersion  目标集群版本，例如\"v1.23\"
    * targetPlatformVersion  目标集群的平台版本号，表示集群版本(version)下的内部版本，不支持用户指定。
    * strategy  strategy
    * config  升级过程中指定的集群配置
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'version' => 'string',
            'targetVersion' => 'string',
            'targetPlatformVersion' => 'string',
            'strategy' => '\HuaweiCloud\SDK\Cce\V3\Model\UpgradeStrategy',
            'config' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * version  当前集群版本
    * targetVersion  目标集群版本，例如\"v1.23\"
    * targetPlatformVersion  目标集群的平台版本号，表示集群版本(version)下的内部版本，不支持用户指定。
    * strategy  strategy
    * config  升级过程中指定的集群配置
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'version' => null,
        'targetVersion' => null,
        'targetPlatformVersion' => null,
        'strategy' => null,
        'config' => null
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
    * version  当前集群版本
    * targetVersion  目标集群版本，例如\"v1.23\"
    * targetPlatformVersion  目标集群的平台版本号，表示集群版本(version)下的内部版本，不支持用户指定。
    * strategy  strategy
    * config  升级过程中指定的集群配置
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'version' => 'version',
            'targetVersion' => 'targetVersion',
            'targetPlatformVersion' => 'targetPlatformVersion',
            'strategy' => 'strategy',
            'config' => 'config'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * version  当前集群版本
    * targetVersion  目标集群版本，例如\"v1.23\"
    * targetPlatformVersion  目标集群的平台版本号，表示集群版本(version)下的内部版本，不支持用户指定。
    * strategy  strategy
    * config  升级过程中指定的集群配置
    *
    * @var string[]
    */
    protected static $setters = [
            'version' => 'setVersion',
            'targetVersion' => 'setTargetVersion',
            'targetPlatformVersion' => 'setTargetPlatformVersion',
            'strategy' => 'setStrategy',
            'config' => 'setConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * version  当前集群版本
    * targetVersion  目标集群版本，例如\"v1.23\"
    * targetPlatformVersion  目标集群的平台版本号，表示集群版本(version)下的内部版本，不支持用户指定。
    * strategy  strategy
    * config  升级过程中指定的集群配置
    *
    * @var string[]
    */
    protected static $getters = [
            'version' => 'getVersion',
            'targetVersion' => 'getTargetVersion',
            'targetPlatformVersion' => 'getTargetPlatformVersion',
            'strategy' => 'getStrategy',
            'config' => 'getConfig'
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
        $this->container['targetVersion'] = isset($data['targetVersion']) ? $data['targetVersion'] : null;
        $this->container['targetPlatformVersion'] = isset($data['targetPlatformVersion']) ? $data['targetPlatformVersion'] : null;
        $this->container['strategy'] = isset($data['strategy']) ? $data['strategy'] : null;
        $this->container['config'] = isset($data['config']) ? $data['config'] : null;
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
    *  当前集群版本
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
    * @param string|null $version 当前集群版本
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets targetVersion
    *  目标集群版本，例如\"v1.23\"
    *
    * @return string|null
    */
    public function getTargetVersion()
    {
        return $this->container['targetVersion'];
    }

    /**
    * Sets targetVersion
    *
    * @param string|null $targetVersion 目标集群版本，例如\"v1.23\"
    *
    * @return $this
    */
    public function setTargetVersion($targetVersion)
    {
        $this->container['targetVersion'] = $targetVersion;
        return $this;
    }

    /**
    * Gets targetPlatformVersion
    *  目标集群的平台版本号，表示集群版本(version)下的内部版本，不支持用户指定。
    *
    * @return string|null
    */
    public function getTargetPlatformVersion()
    {
        return $this->container['targetPlatformVersion'];
    }

    /**
    * Sets targetPlatformVersion
    *
    * @param string|null $targetPlatformVersion 目标集群的平台版本号，表示集群版本(version)下的内部版本，不支持用户指定。
    *
    * @return $this
    */
    public function setTargetPlatformVersion($targetPlatformVersion)
    {
        $this->container['targetPlatformVersion'] = $targetPlatformVersion;
        return $this;
    }

    /**
    * Gets strategy
    *  strategy
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\UpgradeStrategy|null
    */
    public function getStrategy()
    {
        return $this->container['strategy'];
    }

    /**
    * Sets strategy
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\UpgradeStrategy|null $strategy strategy
    *
    * @return $this
    */
    public function setStrategy($strategy)
    {
        $this->container['strategy'] = $strategy;
        return $this;
    }

    /**
    * Gets config
    *  升级过程中指定的集群配置
    *
    * @return object|null
    */
    public function getConfig()
    {
        return $this->container['config'];
    }

    /**
    * Sets config
    *
    * @param object|null $config 升级过程中指定的集群配置
    *
    * @return $this
    */
    public function setConfig($config)
    {
        $this->container['config'] = $config;
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

