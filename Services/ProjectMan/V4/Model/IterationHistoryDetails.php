<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IterationHistoryDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IterationHistory_details';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * operateFieldName  变更的字段
    * newValue  操作后的值
    * oldValue  操作前的值
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'operateFieldName' => 'string',
            'newValue' => 'string',
            'oldValue' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * operateFieldName  变更的字段
    * newValue  操作后的值
    * oldValue  操作前的值
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'operateFieldName' => null,
        'newValue' => null,
        'oldValue' => null
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
    * operateFieldName  变更的字段
    * newValue  操作后的值
    * oldValue  操作前的值
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'operateFieldName' => 'operate_field_name',
            'newValue' => 'new_value',
            'oldValue' => 'old_value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * operateFieldName  变更的字段
    * newValue  操作后的值
    * oldValue  操作前的值
    *
    * @var string[]
    */
    protected static $setters = [
            'operateFieldName' => 'setOperateFieldName',
            'newValue' => 'setNewValue',
            'oldValue' => 'setOldValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * operateFieldName  变更的字段
    * newValue  操作后的值
    * oldValue  操作前的值
    *
    * @var string[]
    */
    protected static $getters = [
            'operateFieldName' => 'getOperateFieldName',
            'newValue' => 'getNewValue',
            'oldValue' => 'getOldValue'
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
        $this->container['operateFieldName'] = isset($data['operateFieldName']) ? $data['operateFieldName'] : null;
        $this->container['newValue'] = isset($data['newValue']) ? $data['newValue'] : null;
        $this->container['oldValue'] = isset($data['oldValue']) ? $data['oldValue'] : null;
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
    * Gets operateFieldName
    *  变更的字段
    *
    * @return string|null
    */
    public function getOperateFieldName()
    {
        return $this->container['operateFieldName'];
    }

    /**
    * Sets operateFieldName
    *
    * @param string|null $operateFieldName 变更的字段
    *
    * @return $this
    */
    public function setOperateFieldName($operateFieldName)
    {
        $this->container['operateFieldName'] = $operateFieldName;
        return $this;
    }

    /**
    * Gets newValue
    *  操作后的值
    *
    * @return string|null
    */
    public function getNewValue()
    {
        return $this->container['newValue'];
    }

    /**
    * Sets newValue
    *
    * @param string|null $newValue 操作后的值
    *
    * @return $this
    */
    public function setNewValue($newValue)
    {
        $this->container['newValue'] = $newValue;
        return $this;
    }

    /**
    * Gets oldValue
    *  操作前的值
    *
    * @return string|null
    */
    public function getOldValue()
    {
        return $this->container['oldValue'];
    }

    /**
    * Sets oldValue
    *
    * @param string|null $oldValue 操作前的值
    *
    * @return $this
    */
    public function setOldValue($oldValue)
    {
        $this->container['oldValue'] = $oldValue;
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

