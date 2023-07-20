<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StructFieldInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StructFieldInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isAnalysis  结构化方式
    * content  字段内容
    * fieldName  字段名称
    * type  字段数据类型,例：string，long，float
    * userDefinedName  自定义别名(json方式中按需添加)
    * index  序号
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isAnalysis' => 'bool',
            'content' => 'string',
            'fieldName' => 'string',
            'type' => 'string',
            'userDefinedName' => 'string',
            'index' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isAnalysis  结构化方式
    * content  字段内容
    * fieldName  字段名称
    * type  字段数据类型,例：string，long，float
    * userDefinedName  自定义别名(json方式中按需添加)
    * index  序号
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isAnalysis' => null,
        'content' => null,
        'fieldName' => null,
        'type' => null,
        'userDefinedName' => null,
        'index' => 'int32'
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
    * isAnalysis  结构化方式
    * content  字段内容
    * fieldName  字段名称
    * type  字段数据类型,例：string，long，float
    * userDefinedName  自定义别名(json方式中按需添加)
    * index  序号
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isAnalysis' => 'isAnalysis',
            'content' => 'content',
            'fieldName' => 'fieldName',
            'type' => 'type',
            'userDefinedName' => 'userDefinedName',
            'index' => 'index'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isAnalysis  结构化方式
    * content  字段内容
    * fieldName  字段名称
    * type  字段数据类型,例：string，long，float
    * userDefinedName  自定义别名(json方式中按需添加)
    * index  序号
    *
    * @var string[]
    */
    protected static $setters = [
            'isAnalysis' => 'setIsAnalysis',
            'content' => 'setContent',
            'fieldName' => 'setFieldName',
            'type' => 'setType',
            'userDefinedName' => 'setUserDefinedName',
            'index' => 'setIndex'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isAnalysis  结构化方式
    * content  字段内容
    * fieldName  字段名称
    * type  字段数据类型,例：string，long，float
    * userDefinedName  自定义别名(json方式中按需添加)
    * index  序号
    *
    * @var string[]
    */
    protected static $getters = [
            'isAnalysis' => 'getIsAnalysis',
            'content' => 'getContent',
            'fieldName' => 'getFieldName',
            'type' => 'getType',
            'userDefinedName' => 'getUserDefinedName',
            'index' => 'getIndex'
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
        $this->container['isAnalysis'] = isset($data['isAnalysis']) ? $data['isAnalysis'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['fieldName'] = isset($data['fieldName']) ? $data['fieldName'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['userDefinedName'] = isset($data['userDefinedName']) ? $data['userDefinedName'] : null;
        $this->container['index'] = isset($data['index']) ? $data['index'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['content']) && (mb_strlen($this->container['content']) > 10000)) {
                $invalidProperties[] = "invalid value for 'content', the character length must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['content']) && (mb_strlen($this->container['content']) < 0)) {
                $invalidProperties[] = "invalid value for 'content', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['fieldName']) && (mb_strlen($this->container['fieldName']) > 50)) {
                $invalidProperties[] = "invalid value for 'fieldName', the character length must be smaller than or equal to 50.";
            }
            if (!is_null($this->container['fieldName']) && (mb_strlen($this->container['fieldName']) < 0)) {
                $invalidProperties[] = "invalid value for 'fieldName', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            if ((mb_strlen($this->container['type']) > 10)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 10.";
            }
            if ((mb_strlen($this->container['type']) < 1)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['userDefinedName']) && (mb_strlen($this->container['userDefinedName']) > 64)) {
                $invalidProperties[] = "invalid value for 'userDefinedName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['userDefinedName']) && (mb_strlen($this->container['userDefinedName']) < 1)) {
                $invalidProperties[] = "invalid value for 'userDefinedName', the character length must be bigger than or equal to 1.";
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
    * Gets isAnalysis
    *  结构化方式
    *
    * @return bool|null
    */
    public function getIsAnalysis()
    {
        return $this->container['isAnalysis'];
    }

    /**
    * Sets isAnalysis
    *
    * @param bool|null $isAnalysis 结构化方式
    *
    * @return $this
    */
    public function setIsAnalysis($isAnalysis)
    {
        $this->container['isAnalysis'] = $isAnalysis;
        return $this;
    }

    /**
    * Gets content
    *  字段内容
    *
    * @return string|null
    */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
    * Sets content
    *
    * @param string|null $content 字段内容
    *
    * @return $this
    */
    public function setContent($content)
    {
        $this->container['content'] = $content;
        return $this;
    }

    /**
    * Gets fieldName
    *  字段名称
    *
    * @return string|null
    */
    public function getFieldName()
    {
        return $this->container['fieldName'];
    }

    /**
    * Sets fieldName
    *
    * @param string|null $fieldName 字段名称
    *
    * @return $this
    */
    public function setFieldName($fieldName)
    {
        $this->container['fieldName'] = $fieldName;
        return $this;
    }

    /**
    * Gets type
    *  字段数据类型,例：string，long，float
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
    * @param string $type 字段数据类型,例：string，long，float
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets userDefinedName
    *  自定义别名(json方式中按需添加)
    *
    * @return string|null
    */
    public function getUserDefinedName()
    {
        return $this->container['userDefinedName'];
    }

    /**
    * Sets userDefinedName
    *
    * @param string|null $userDefinedName 自定义别名(json方式中按需添加)
    *
    * @return $this
    */
    public function setUserDefinedName($userDefinedName)
    {
        $this->container['userDefinedName'] = $userDefinedName;
        return $this;
    }

    /**
    * Gets index
    *  序号
    *
    * @return int|null
    */
    public function getIndex()
    {
        return $this->container['index'];
    }

    /**
    * Sets index
    *
    * @param int|null $index 序号
    *
    * @return $this
    */
    public function setIndex($index)
    {
        $this->container['index'] = $index;
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

