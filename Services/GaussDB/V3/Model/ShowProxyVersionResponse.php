<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowProxyVersionResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowProxyVersionResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * currentVersion  当前代理版本
    * latestVersion  最新代理版本
    * canUpgrade  是否能升级
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'currentVersion' => 'string',
            'latestVersion' => 'string',
            'canUpgrade' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * currentVersion  当前代理版本
    * latestVersion  最新代理版本
    * canUpgrade  是否能升级
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'currentVersion' => null,
        'latestVersion' => null,
        'canUpgrade' => null
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
    * currentVersion  当前代理版本
    * latestVersion  最新代理版本
    * canUpgrade  是否能升级
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'currentVersion' => 'current_version',
            'latestVersion' => 'latest_version',
            'canUpgrade' => 'can_upgrade'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * currentVersion  当前代理版本
    * latestVersion  最新代理版本
    * canUpgrade  是否能升级
    *
    * @var string[]
    */
    protected static $setters = [
            'currentVersion' => 'setCurrentVersion',
            'latestVersion' => 'setLatestVersion',
            'canUpgrade' => 'setCanUpgrade'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * currentVersion  当前代理版本
    * latestVersion  最新代理版本
    * canUpgrade  是否能升级
    *
    * @var string[]
    */
    protected static $getters = [
            'currentVersion' => 'getCurrentVersion',
            'latestVersion' => 'getLatestVersion',
            'canUpgrade' => 'getCanUpgrade'
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
        $this->container['currentVersion'] = isset($data['currentVersion']) ? $data['currentVersion'] : null;
        $this->container['latestVersion'] = isset($data['latestVersion']) ? $data['latestVersion'] : null;
        $this->container['canUpgrade'] = isset($data['canUpgrade']) ? $data['canUpgrade'] : null;
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
    * Gets currentVersion
    *  当前代理版本
    *
    * @return string|null
    */
    public function getCurrentVersion()
    {
        return $this->container['currentVersion'];
    }

    /**
    * Sets currentVersion
    *
    * @param string|null $currentVersion 当前代理版本
    *
    * @return $this
    */
    public function setCurrentVersion($currentVersion)
    {
        $this->container['currentVersion'] = $currentVersion;
        return $this;
    }

    /**
    * Gets latestVersion
    *  最新代理版本
    *
    * @return string|null
    */
    public function getLatestVersion()
    {
        return $this->container['latestVersion'];
    }

    /**
    * Sets latestVersion
    *
    * @param string|null $latestVersion 最新代理版本
    *
    * @return $this
    */
    public function setLatestVersion($latestVersion)
    {
        $this->container['latestVersion'] = $latestVersion;
        return $this;
    }

    /**
    * Gets canUpgrade
    *  是否能升级
    *
    * @return bool|null
    */
    public function getCanUpgrade()
    {
        return $this->container['canUpgrade'];
    }

    /**
    * Sets canUpgrade
    *
    * @param bool|null $canUpgrade 是否能升级
    *
    * @return $this
    */
    public function setCanUpgrade($canUpgrade)
    {
        $this->container['canUpgrade'] = $canUpgrade;
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

