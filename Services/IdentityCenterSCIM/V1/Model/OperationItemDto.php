<?php

namespace HuaweiCloud\SDK\IdentityCenterSCIM\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OperationItemDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OperationItemDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * op  要执行的修改操作类型。 add：添加属性，replace：替换属性，remove：删除属性
    * path  要修改的属性路径
    * value  要修改的属性值。执行删除操作时不填写
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'op' => 'string',
            'path' => 'string',
            'value' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * op  要执行的修改操作类型。 add：添加属性，replace：替换属性，remove：删除属性
    * path  要修改的属性路径
    * value  要修改的属性值。执行删除操作时不填写
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'op' => null,
        'path' => null,
        'value' => null
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
    * op  要执行的修改操作类型。 add：添加属性，replace：替换属性，remove：删除属性
    * path  要修改的属性路径
    * value  要修改的属性值。执行删除操作时不填写
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'op' => 'op',
            'path' => 'path',
            'value' => 'value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * op  要执行的修改操作类型。 add：添加属性，replace：替换属性，remove：删除属性
    * path  要修改的属性路径
    * value  要修改的属性值。执行删除操作时不填写
    *
    * @var string[]
    */
    protected static $setters = [
            'op' => 'setOp',
            'path' => 'setPath',
            'value' => 'setValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * op  要执行的修改操作类型。 add：添加属性，replace：替换属性，remove：删除属性
    * path  要修改的属性路径
    * value  要修改的属性值。执行删除操作时不填写
    *
    * @var string[]
    */
    protected static $getters = [
            'op' => 'getOp',
            'path' => 'getPath',
            'value' => 'getValue'
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
        $this->container['op'] = isset($data['op']) ? $data['op'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['op'] === null) {
            $invalidProperties[] = "'op' can't be null";
        }
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
    * Gets op
    *  要执行的修改操作类型。 add：添加属性，replace：替换属性，remove：删除属性
    *
    * @return string
    */
    public function getOp()
    {
        return $this->container['op'];
    }

    /**
    * Sets op
    *
    * @param string $op 要执行的修改操作类型。 add：添加属性，replace：替换属性，remove：删除属性
    *
    * @return $this
    */
    public function setOp($op)
    {
        $this->container['op'] = $op;
        return $this;
    }

    /**
    * Gets path
    *  要修改的属性路径
    *
    * @return string|null
    */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
    * Sets path
    *
    * @param string|null $path 要修改的属性路径
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets value
    *  要修改的属性值。执行删除操作时不填写
    *
    * @return object|null
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param object|null $value 要修改的属性值。执行删除操作时不填写
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
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

