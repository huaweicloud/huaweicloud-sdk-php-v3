<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateCustomfieldV1Req implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateCustomfieldV1Req';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  字段名称
    * type  自定义字段类型 可选类型  textArea|select|radio|text|checkbox|date|time_date|number
    * options  字段选项
    * memo  描述
    * scrumType  工作项类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'type' => 'string',
            'options' => 'string',
            'memo' => 'string',
            'scrumType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  字段名称
    * type  自定义字段类型 可选类型  textArea|select|radio|text|checkbox|date|time_date|number
    * options  字段选项
    * memo  描述
    * scrumType  工作项类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'type' => null,
        'options' => null,
        'memo' => null,
        'scrumType' => null
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
    * name  字段名称
    * type  自定义字段类型 可选类型  textArea|select|radio|text|checkbox|date|time_date|number
    * options  字段选项
    * memo  描述
    * scrumType  工作项类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'type' => 'type',
            'options' => 'options',
            'memo' => 'memo',
            'scrumType' => 'scrum_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  字段名称
    * type  自定义字段类型 可选类型  textArea|select|radio|text|checkbox|date|time_date|number
    * options  字段选项
    * memo  描述
    * scrumType  工作项类型
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'type' => 'setType',
            'options' => 'setOptions',
            'memo' => 'setMemo',
            'scrumType' => 'setScrumType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  字段名称
    * type  自定义字段类型 可选类型  textArea|select|radio|text|checkbox|date|time_date|number
    * options  字段选项
    * memo  描述
    * scrumType  工作项类型
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'type' => 'getType',
            'options' => 'getOptions',
            'memo' => 'getMemo',
            'scrumType' => 'getScrumType'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
        $this->container['memo'] = isset($data['memo']) ? $data['memo'] : null;
        $this->container['scrumType'] = isset($data['scrumType']) ? $data['scrumType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['options'] === null) {
            $invalidProperties[] = "'options' can't be null";
        }
        if ($this->container['memo'] === null) {
            $invalidProperties[] = "'memo' can't be null";
        }
        if ($this->container['scrumType'] === null) {
            $invalidProperties[] = "'scrumType' can't be null";
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
    * Gets name
    *  字段名称
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 字段名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets type
    *  自定义字段类型 可选类型  textArea|select|radio|text|checkbox|date|time_date|number
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 自定义字段类型 可选类型  textArea|select|radio|text|checkbox|date|time_date|number
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets options
    *  字段选项
    *
    * @return string
    */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
    * Sets options
    *
    * @param string $options 字段选项
    *
    * @return $this
    */
    public function setOptions($options)
    {
        $this->container['options'] = $options;
        return $this;
    }

    /**
    * Gets memo
    *  描述
    *
    * @return string
    */
    public function getMemo()
    {
        return $this->container['memo'];
    }

    /**
    * Sets memo
    *
    * @param string $memo 描述
    *
    * @return $this
    */
    public function setMemo($memo)
    {
        $this->container['memo'] = $memo;
        return $this;
    }

    /**
    * Gets scrumType
    *  工作项类型
    *
    * @return string
    */
    public function getScrumType()
    {
        return $this->container['scrumType'];
    }

    /**
    * Sets scrumType
    *
    * @param string $scrumType 工作项类型
    *
    * @return $this
    */
    public function setScrumType($scrumType)
    {
        $this->container['scrumType'] = $scrumType;
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

