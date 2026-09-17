<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WorkItemFlowFieldValueVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WorkItemFlowFieldValueVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * refProp  引用属性名
    * settingValObject  配置值对象列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'refProp' => 'string',
            'settingValObject' => 'map[string,object][]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * refProp  引用属性名
    * settingValObject  配置值对象列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'refProp' => null,
        'settingValObject' => null
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
    * refProp  引用属性名
    * settingValObject  配置值对象列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'refProp' => 'ref_prop',
            'settingValObject' => 'setting_val_object'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * refProp  引用属性名
    * settingValObject  配置值对象列表
    *
    * @var string[]
    */
    protected static $setters = [
            'refProp' => 'setRefProp',
            'settingValObject' => 'setSettingValObject'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * refProp  引用属性名
    * settingValObject  配置值对象列表
    *
    * @var string[]
    */
    protected static $getters = [
            'refProp' => 'getRefProp',
            'settingValObject' => 'getSettingValObject'
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
        $this->container['refProp'] = isset($data['refProp']) ? $data['refProp'] : null;
        $this->container['settingValObject'] = isset($data['settingValObject']) ? $data['settingValObject'] : null;
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
    * Gets refProp
    *  引用属性名
    *
    * @return string|null
    */
    public function getRefProp()
    {
        return $this->container['refProp'];
    }

    /**
    * Sets refProp
    *
    * @param string|null $refProp 引用属性名
    *
    * @return $this
    */
    public function setRefProp($refProp)
    {
        $this->container['refProp'] = $refProp;
        return $this;
    }

    /**
    * Gets settingValObject
    *  配置值对象列表
    *
    * @return map[string,object][]|null
    */
    public function getSettingValObject()
    {
        return $this->container['settingValObject'];
    }

    /**
    * Sets settingValObject
    *
    * @param map[string,object][]|null $settingValObject 配置值对象列表
    *
    * @return $this
    */
    public function setSettingValObject($settingValObject)
    {
        $this->container['settingValObject'] = $settingValObject;
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

