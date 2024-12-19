<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowInstanceVersionResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowInstanceVersionResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * engineMinorVersion  当前实例内核小版本信息。
    * latestEngineMinorVersion  DCS实例最新的内核小版本信息。
    * proxyMinorVersion  当前实例proxy代理节点版本信息。
    * latestProxyMinorVersion  DCS实例最新的proxy代理节点版本信息。
    * engineMinorVersionUpgradable  当前实例内核是否可以升级。
    * proxyMinorVersionUpgradable  当前实例proxy代理节点是否可以升级。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'engineMinorVersion' => 'string',
            'latestEngineMinorVersion' => 'string',
            'proxyMinorVersion' => 'string',
            'latestProxyMinorVersion' => 'string',
            'engineMinorVersionUpgradable' => 'bool',
            'proxyMinorVersionUpgradable' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * engineMinorVersion  当前实例内核小版本信息。
    * latestEngineMinorVersion  DCS实例最新的内核小版本信息。
    * proxyMinorVersion  当前实例proxy代理节点版本信息。
    * latestProxyMinorVersion  DCS实例最新的proxy代理节点版本信息。
    * engineMinorVersionUpgradable  当前实例内核是否可以升级。
    * proxyMinorVersionUpgradable  当前实例proxy代理节点是否可以升级。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'engineMinorVersion' => null,
        'latestEngineMinorVersion' => null,
        'proxyMinorVersion' => null,
        'latestProxyMinorVersion' => null,
        'engineMinorVersionUpgradable' => null,
        'proxyMinorVersionUpgradable' => null
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
    * engineMinorVersion  当前实例内核小版本信息。
    * latestEngineMinorVersion  DCS实例最新的内核小版本信息。
    * proxyMinorVersion  当前实例proxy代理节点版本信息。
    * latestProxyMinorVersion  DCS实例最新的proxy代理节点版本信息。
    * engineMinorVersionUpgradable  当前实例内核是否可以升级。
    * proxyMinorVersionUpgradable  当前实例proxy代理节点是否可以升级。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'engineMinorVersion' => 'engine_minor_version',
            'latestEngineMinorVersion' => 'latest_engine_minor_version',
            'proxyMinorVersion' => 'proxy_minor_version',
            'latestProxyMinorVersion' => 'latest_proxy_minor_version',
            'engineMinorVersionUpgradable' => 'engine_minor_version_upgradable',
            'proxyMinorVersionUpgradable' => 'proxy_minor_version_upgradable'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * engineMinorVersion  当前实例内核小版本信息。
    * latestEngineMinorVersion  DCS实例最新的内核小版本信息。
    * proxyMinorVersion  当前实例proxy代理节点版本信息。
    * latestProxyMinorVersion  DCS实例最新的proxy代理节点版本信息。
    * engineMinorVersionUpgradable  当前实例内核是否可以升级。
    * proxyMinorVersionUpgradable  当前实例proxy代理节点是否可以升级。
    *
    * @var string[]
    */
    protected static $setters = [
            'engineMinorVersion' => 'setEngineMinorVersion',
            'latestEngineMinorVersion' => 'setLatestEngineMinorVersion',
            'proxyMinorVersion' => 'setProxyMinorVersion',
            'latestProxyMinorVersion' => 'setLatestProxyMinorVersion',
            'engineMinorVersionUpgradable' => 'setEngineMinorVersionUpgradable',
            'proxyMinorVersionUpgradable' => 'setProxyMinorVersionUpgradable'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * engineMinorVersion  当前实例内核小版本信息。
    * latestEngineMinorVersion  DCS实例最新的内核小版本信息。
    * proxyMinorVersion  当前实例proxy代理节点版本信息。
    * latestProxyMinorVersion  DCS实例最新的proxy代理节点版本信息。
    * engineMinorVersionUpgradable  当前实例内核是否可以升级。
    * proxyMinorVersionUpgradable  当前实例proxy代理节点是否可以升级。
    *
    * @var string[]
    */
    protected static $getters = [
            'engineMinorVersion' => 'getEngineMinorVersion',
            'latestEngineMinorVersion' => 'getLatestEngineMinorVersion',
            'proxyMinorVersion' => 'getProxyMinorVersion',
            'latestProxyMinorVersion' => 'getLatestProxyMinorVersion',
            'engineMinorVersionUpgradable' => 'getEngineMinorVersionUpgradable',
            'proxyMinorVersionUpgradable' => 'getProxyMinorVersionUpgradable'
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
        $this->container['engineMinorVersion'] = isset($data['engineMinorVersion']) ? $data['engineMinorVersion'] : null;
        $this->container['latestEngineMinorVersion'] = isset($data['latestEngineMinorVersion']) ? $data['latestEngineMinorVersion'] : null;
        $this->container['proxyMinorVersion'] = isset($data['proxyMinorVersion']) ? $data['proxyMinorVersion'] : null;
        $this->container['latestProxyMinorVersion'] = isset($data['latestProxyMinorVersion']) ? $data['latestProxyMinorVersion'] : null;
        $this->container['engineMinorVersionUpgradable'] = isset($data['engineMinorVersionUpgradable']) ? $data['engineMinorVersionUpgradable'] : null;
        $this->container['proxyMinorVersionUpgradable'] = isset($data['proxyMinorVersionUpgradable']) ? $data['proxyMinorVersionUpgradable'] : null;
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
    * Gets engineMinorVersion
    *  当前实例内核小版本信息。
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
    * @param string|null $engineMinorVersion 当前实例内核小版本信息。
    *
    * @return $this
    */
    public function setEngineMinorVersion($engineMinorVersion)
    {
        $this->container['engineMinorVersion'] = $engineMinorVersion;
        return $this;
    }

    /**
    * Gets latestEngineMinorVersion
    *  DCS实例最新的内核小版本信息。
    *
    * @return string|null
    */
    public function getLatestEngineMinorVersion()
    {
        return $this->container['latestEngineMinorVersion'];
    }

    /**
    * Sets latestEngineMinorVersion
    *
    * @param string|null $latestEngineMinorVersion DCS实例最新的内核小版本信息。
    *
    * @return $this
    */
    public function setLatestEngineMinorVersion($latestEngineMinorVersion)
    {
        $this->container['latestEngineMinorVersion'] = $latestEngineMinorVersion;
        return $this;
    }

    /**
    * Gets proxyMinorVersion
    *  当前实例proxy代理节点版本信息。
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
    * @param string|null $proxyMinorVersion 当前实例proxy代理节点版本信息。
    *
    * @return $this
    */
    public function setProxyMinorVersion($proxyMinorVersion)
    {
        $this->container['proxyMinorVersion'] = $proxyMinorVersion;
        return $this;
    }

    /**
    * Gets latestProxyMinorVersion
    *  DCS实例最新的proxy代理节点版本信息。
    *
    * @return string|null
    */
    public function getLatestProxyMinorVersion()
    {
        return $this->container['latestProxyMinorVersion'];
    }

    /**
    * Sets latestProxyMinorVersion
    *
    * @param string|null $latestProxyMinorVersion DCS实例最新的proxy代理节点版本信息。
    *
    * @return $this
    */
    public function setLatestProxyMinorVersion($latestProxyMinorVersion)
    {
        $this->container['latestProxyMinorVersion'] = $latestProxyMinorVersion;
        return $this;
    }

    /**
    * Gets engineMinorVersionUpgradable
    *  当前实例内核是否可以升级。
    *
    * @return bool|null
    */
    public function getEngineMinorVersionUpgradable()
    {
        return $this->container['engineMinorVersionUpgradable'];
    }

    /**
    * Sets engineMinorVersionUpgradable
    *
    * @param bool|null $engineMinorVersionUpgradable 当前实例内核是否可以升级。
    *
    * @return $this
    */
    public function setEngineMinorVersionUpgradable($engineMinorVersionUpgradable)
    {
        $this->container['engineMinorVersionUpgradable'] = $engineMinorVersionUpgradable;
        return $this;
    }

    /**
    * Gets proxyMinorVersionUpgradable
    *  当前实例proxy代理节点是否可以升级。
    *
    * @return bool|null
    */
    public function getProxyMinorVersionUpgradable()
    {
        return $this->container['proxyMinorVersionUpgradable'];
    }

    /**
    * Sets proxyMinorVersionUpgradable
    *
    * @param bool|null $proxyMinorVersionUpgradable 当前实例proxy代理节点是否可以升级。
    *
    * @return $this
    */
    public function setProxyMinorVersionUpgradable($proxyMinorVersionUpgradable)
    {
        $this->container['proxyMinorVersionUpgradable'] = $proxyMinorVersionUpgradable;
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

