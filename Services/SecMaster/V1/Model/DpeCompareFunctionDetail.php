<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DpeCompareFunctionDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DpeCompareFunctionDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  名称
    * classify  NORMAL(通用方法), STRING(字符串方法), NUMBER(数字方法), DATE(时间方法)
    * description  描述
    * example  示例
    * comparefunc  比较方法Key
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'classify' => 'string',
            'description' => 'string',
            'example' => 'string',
            'comparefunc' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  名称
    * classify  NORMAL(通用方法), STRING(字符串方法), NUMBER(数字方法), DATE(时间方法)
    * description  描述
    * example  示例
    * comparefunc  比较方法Key
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'classify' => null,
        'description' => null,
        'example' => null,
        'comparefunc' => null
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
    * name  名称
    * classify  NORMAL(通用方法), STRING(字符串方法), NUMBER(数字方法), DATE(时间方法)
    * description  描述
    * example  示例
    * comparefunc  比较方法Key
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'classify' => 'classify',
            'description' => 'description',
            'example' => 'example',
            'comparefunc' => 'comparefunc'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  名称
    * classify  NORMAL(通用方法), STRING(字符串方法), NUMBER(数字方法), DATE(时间方法)
    * description  描述
    * example  示例
    * comparefunc  比较方法Key
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'classify' => 'setClassify',
            'description' => 'setDescription',
            'example' => 'setExample',
            'comparefunc' => 'setComparefunc'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  名称
    * classify  NORMAL(通用方法), STRING(字符串方法), NUMBER(数字方法), DATE(时间方法)
    * description  描述
    * example  示例
    * comparefunc  比较方法Key
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'classify' => 'getClassify',
            'description' => 'getDescription',
            'example' => 'getExample',
            'comparefunc' => 'getComparefunc'
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
        $this->container['classify'] = isset($data['classify']) ? $data['classify'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['example'] = isset($data['example']) ? $data['example'] : null;
        $this->container['comparefunc'] = isset($data['comparefunc']) ? $data['comparefunc'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['classify']) && (mb_strlen($this->container['classify']) > 64)) {
                $invalidProperties[] = "invalid value for 'classify', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['classify']) && (mb_strlen($this->container['classify']) < 1)) {
                $invalidProperties[] = "invalid value for 'classify', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 256)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['example']) && (mb_strlen($this->container['example']) > 256)) {
                $invalidProperties[] = "invalid value for 'example', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['example']) && (mb_strlen($this->container['example']) < 1)) {
                $invalidProperties[] = "invalid value for 'example', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['comparefunc']) && (mb_strlen($this->container['comparefunc']) > 256)) {
                $invalidProperties[] = "invalid value for 'comparefunc', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['comparefunc']) && (mb_strlen($this->container['comparefunc']) < 1)) {
                $invalidProperties[] = "invalid value for 'comparefunc', the character length must be bigger than or equal to 1.";
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
    *  名称
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
    * @param string|null $name 名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets classify
    *  NORMAL(通用方法), STRING(字符串方法), NUMBER(数字方法), DATE(时间方法)
    *
    * @return string|null
    */
    public function getClassify()
    {
        return $this->container['classify'];
    }

    /**
    * Sets classify
    *
    * @param string|null $classify NORMAL(通用方法), STRING(字符串方法), NUMBER(数字方法), DATE(时间方法)
    *
    * @return $this
    */
    public function setClassify($classify)
    {
        $this->container['classify'] = $classify;
        return $this;
    }

    /**
    * Gets description
    *  描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets example
    *  示例
    *
    * @return string|null
    */
    public function getExample()
    {
        return $this->container['example'];
    }

    /**
    * Sets example
    *
    * @param string|null $example 示例
    *
    * @return $this
    */
    public function setExample($example)
    {
        $this->container['example'] = $example;
        return $this;
    }

    /**
    * Gets comparefunc
    *  比较方法Key
    *
    * @return string|null
    */
    public function getComparefunc()
    {
        return $this->container['comparefunc'];
    }

    /**
    * Sets comparefunc
    *
    * @param string|null $comparefunc 比较方法Key
    *
    * @return $this
    */
    public function setComparefunc($comparefunc)
    {
        $this->container['comparefunc'] = $comparefunc;
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

