<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpgradeMinorVersionRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpgradeMinorVersionRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * proxyMinorVersion  Proxy代理节点目标版本号，设置为latest时，即升级到最新版本。
    * engineMinorVersion  引擎目标小版本号，设置为latest时，即升级到最新版本。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'proxyMinorVersion' => 'string',
            'engineMinorVersion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * proxyMinorVersion  Proxy代理节点目标版本号，设置为latest时，即升级到最新版本。
    * engineMinorVersion  引擎目标小版本号，设置为latest时，即升级到最新版本。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'proxyMinorVersion' => null,
        'engineMinorVersion' => null
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
    * proxyMinorVersion  Proxy代理节点目标版本号，设置为latest时，即升级到最新版本。
    * engineMinorVersion  引擎目标小版本号，设置为latest时，即升级到最新版本。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'proxyMinorVersion' => 'proxy_minor_version',
            'engineMinorVersion' => 'engine_minor_version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * proxyMinorVersion  Proxy代理节点目标版本号，设置为latest时，即升级到最新版本。
    * engineMinorVersion  引擎目标小版本号，设置为latest时，即升级到最新版本。
    *
    * @var string[]
    */
    protected static $setters = [
            'proxyMinorVersion' => 'setProxyMinorVersion',
            'engineMinorVersion' => 'setEngineMinorVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * proxyMinorVersion  Proxy代理节点目标版本号，设置为latest时，即升级到最新版本。
    * engineMinorVersion  引擎目标小版本号，设置为latest时，即升级到最新版本。
    *
    * @var string[]
    */
    protected static $getters = [
            'proxyMinorVersion' => 'getProxyMinorVersion',
            'engineMinorVersion' => 'getEngineMinorVersion'
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
        $this->container['proxyMinorVersion'] = isset($data['proxyMinorVersion']) ? $data['proxyMinorVersion'] : null;
        $this->container['engineMinorVersion'] = isset($data['engineMinorVersion']) ? $data['engineMinorVersion'] : null;
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
    * Gets proxyMinorVersion
    *  Proxy代理节点目标版本号，设置为latest时，即升级到最新版本。
    *
    * @return string|null
    */
    public function getProxyMinorVersion()
    {
        return $this->container['proxyMinorVersion'];
    }

    /**
    * Sets proxyMinorVersion
    *
    * @param string|null $proxyMinorVersion Proxy代理节点目标版本号，设置为latest时，即升级到最新版本。
    *
    * @return $this
    */
    public function setProxyMinorVersion($proxyMinorVersion)
    {
        $this->container['proxyMinorVersion'] = $proxyMinorVersion;
        return $this;
    }

    /**
    * Gets engineMinorVersion
    *  引擎目标小版本号，设置为latest时，即升级到最新版本。
    *
    * @return string|null
    */
    public function getEngineMinorVersion()
    {
        return $this->container['engineMinorVersion'];
    }

    /**
    * Sets engineMinorVersion
    *
    * @param string|null $engineMinorVersion 引擎目标小版本号，设置为latest时，即升级到最新版本。
    *
    * @return $this
    */
    public function setEngineMinorVersion($engineMinorVersion)
    {
        $this->container['engineMinorVersion'] = $engineMinorVersion;
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

