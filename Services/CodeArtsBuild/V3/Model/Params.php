<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Params implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Params';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  参数名
    * title  名称
    * type  类型
    * required  必填
    * constraints  简要构建信息列表
    * deletion  删除
    * defaults  默认
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'title' => 'string',
            'type' => 'string',
            'required' => 'bool',
            'constraints' => '\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\Constraints[]',
            'deletion' => 'bool',
            'defaults' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  参数名
    * title  名称
    * type  类型
    * required  必填
    * constraints  简要构建信息列表
    * deletion  删除
    * defaults  默认
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'title' => null,
        'type' => null,
        'required' => null,
        'constraints' => null,
        'deletion' => null,
        'defaults' => null
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
    * name  参数名
    * title  名称
    * type  类型
    * required  必填
    * constraints  简要构建信息列表
    * deletion  删除
    * defaults  默认
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'title' => 'title',
            'type' => 'type',
            'required' => 'required',
            'constraints' => 'constraints',
            'deletion' => 'deletion',
            'defaults' => 'defaults'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  参数名
    * title  名称
    * type  类型
    * required  必填
    * constraints  简要构建信息列表
    * deletion  删除
    * defaults  默认
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'title' => 'setTitle',
            'type' => 'setType',
            'required' => 'setRequired',
            'constraints' => 'setConstraints',
            'deletion' => 'setDeletion',
            'defaults' => 'setDefaults'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  参数名
    * title  名称
    * type  类型
    * required  必填
    * constraints  简要构建信息列表
    * deletion  删除
    * defaults  默认
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'title' => 'getTitle',
            'type' => 'getType',
            'required' => 'getRequired',
            'constraints' => 'getConstraints',
            'deletion' => 'getDeletion',
            'defaults' => 'getDefaults'
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
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['required'] = isset($data['required']) ? $data['required'] : null;
        $this->container['constraints'] = isset($data['constraints']) ? $data['constraints'] : null;
        $this->container['deletion'] = isset($data['deletion']) ? $data['deletion'] : null;
        $this->container['defaults'] = isset($data['defaults']) ? $data['defaults'] : null;
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
    * Gets name
    *  参数名
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 参数名
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets title
    *  名称
    *
    * @return string|null
    */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
    * Sets title
    *
    * @param string|null $title 名称
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets type
    *  类型
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets required
    *  必填
    *
    * @return bool|null
    */
    public function getRequired()
    {
        return $this->container['required'];
    }

    /**
    * Sets required
    *
    * @param bool|null $required 必填
    *
    * @return $this
    */
    public function setRequired($required)
    {
        $this->container['required'] = $required;
        return $this;
    }

    /**
    * Gets constraints
    *  简要构建信息列表
    *
    * @return \HuaweiCloud\SDK\CodeArtsBuild\V3\Model\Constraints[]|null
    */
    public function getConstraints()
    {
        return $this->container['constraints'];
    }

    /**
    * Sets constraints
    *
    * @param \HuaweiCloud\SDK\CodeArtsBuild\V3\Model\Constraints[]|null $constraints 简要构建信息列表
    *
    * @return $this
    */
    public function setConstraints($constraints)
    {
        $this->container['constraints'] = $constraints;
        return $this;
    }

    /**
    * Gets deletion
    *  删除
    *
    * @return bool|null
    */
    public function getDeletion()
    {
        return $this->container['deletion'];
    }

    /**
    * Sets deletion
    *
    * @param bool|null $deletion 删除
    *
    * @return $this
    */
    public function setDeletion($deletion)
    {
        $this->container['deletion'] = $deletion;
        return $this;
    }

    /**
    * Gets defaults
    *  默认
    *
    * @return bool|null
    */
    public function getDefaults()
    {
        return $this->container['defaults'];
    }

    /**
    * Sets defaults
    *
    * @param bool|null $defaults 默认
    *
    * @return $this
    */
    public function setDefaults($defaults)
    {
        $this->container['defaults'] = $defaults;
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

