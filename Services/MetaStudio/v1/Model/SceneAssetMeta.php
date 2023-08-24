<?php

namespace HuaweiCloud\SDK\MetaStudio\v1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SceneAssetMeta implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SceneAssetMeta';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * components  可操作组件列表（如屏幕，灯光，摄像机）。
    * defaultConfigs  默认场景设置（机位，初始人位置）。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'components' => '\HuaweiCloud\SDK\MetaStudio\v1\Model\SceneComponentInfo[]',
            'defaultConfigs' => 'map[string,\HuaweiCloud\SDK\MetaStudio\v1\Model\SceneComponentInfo]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * components  可操作组件列表（如屏幕，灯光，摄像机）。
    * defaultConfigs  默认场景设置（机位，初始人位置）。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'components' => null,
        'defaultConfigs' => null
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
    * components  可操作组件列表（如屏幕，灯光，摄像机）。
    * defaultConfigs  默认场景设置（机位，初始人位置）。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'components' => 'components',
            'defaultConfigs' => 'default_configs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * components  可操作组件列表（如屏幕，灯光，摄像机）。
    * defaultConfigs  默认场景设置（机位，初始人位置）。
    *
    * @var string[]
    */
    protected static $setters = [
            'components' => 'setComponents',
            'defaultConfigs' => 'setDefaultConfigs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * components  可操作组件列表（如屏幕，灯光，摄像机）。
    * defaultConfigs  默认场景设置（机位，初始人位置）。
    *
    * @var string[]
    */
    protected static $getters = [
            'components' => 'getComponents',
            'defaultConfigs' => 'getDefaultConfigs'
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
        $this->container['components'] = isset($data['components']) ? $data['components'] : null;
        $this->container['defaultConfigs'] = isset($data['defaultConfigs']) ? $data['defaultConfigs'] : null;
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
    * Gets components
    *  可操作组件列表（如屏幕，灯光，摄像机）。
    *
    * @return \HuaweiCloud\SDK\MetaStudio\v1\Model\SceneComponentInfo[]|null
    */
    public function getComponents()
    {
        return $this->container['components'];
    }

    /**
    * Sets components
    *
    * @param \HuaweiCloud\SDK\MetaStudio\v1\Model\SceneComponentInfo[]|null $components 可操作组件列表（如屏幕，灯光，摄像机）。
    *
    * @return $this
    */
    public function setComponents($components)
    {
        $this->container['components'] = $components;
        return $this;
    }

    /**
    * Gets defaultConfigs
    *  默认场景设置（机位，初始人位置）。
    *
    * @return map[string,\HuaweiCloud\SDK\MetaStudio\v1\Model\SceneComponentInfo]|null
    */
    public function getDefaultConfigs()
    {
        return $this->container['defaultConfigs'];
    }

    /**
    * Sets defaultConfigs
    *
    * @param map[string,\HuaweiCloud\SDK\MetaStudio\v1\Model\SceneComponentInfo]|null $defaultConfigs 默认场景设置（机位，初始人位置）。
    *
    * @return $this
    */
    public function setDefaultConfigs($defaultConfigs)
    {
        $this->container['defaultConfigs'] = $defaultConfigs;
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

