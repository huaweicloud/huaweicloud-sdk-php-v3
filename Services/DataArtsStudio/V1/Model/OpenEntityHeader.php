<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OpenEntityHeader implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OpenEntityHeader';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * attributes  属性
    * connection  数据连接
    * displayText  展示文档
    * guid  资产guid
    * typeName  类型名称
    * tags  标签列表
    * classificationNames  分类名称列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'attributes' => 'object',
            'connection' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\Connection[]',
            'displayText' => 'string',
            'guid' => 'string',
            'typeName' => 'string',
            'tags' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\TagHeader[]',
            'classificationNames' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * attributes  属性
    * connection  数据连接
    * displayText  展示文档
    * guid  资产guid
    * typeName  类型名称
    * tags  标签列表
    * classificationNames  分类名称列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'attributes' => null,
        'connection' => null,
        'displayText' => null,
        'guid' => null,
        'typeName' => null,
        'tags' => null,
        'classificationNames' => null
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
    * attributes  属性
    * connection  数据连接
    * displayText  展示文档
    * guid  资产guid
    * typeName  类型名称
    * tags  标签列表
    * classificationNames  分类名称列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'attributes' => 'attributes',
            'connection' => 'connection',
            'displayText' => 'display_text',
            'guid' => 'guid',
            'typeName' => 'type_name',
            'tags' => 'tags',
            'classificationNames' => 'classification_names'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * attributes  属性
    * connection  数据连接
    * displayText  展示文档
    * guid  资产guid
    * typeName  类型名称
    * tags  标签列表
    * classificationNames  分类名称列表
    *
    * @var string[]
    */
    protected static $setters = [
            'attributes' => 'setAttributes',
            'connection' => 'setConnection',
            'displayText' => 'setDisplayText',
            'guid' => 'setGuid',
            'typeName' => 'setTypeName',
            'tags' => 'setTags',
            'classificationNames' => 'setClassificationNames'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * attributes  属性
    * connection  数据连接
    * displayText  展示文档
    * guid  资产guid
    * typeName  类型名称
    * tags  标签列表
    * classificationNames  分类名称列表
    *
    * @var string[]
    */
    protected static $getters = [
            'attributes' => 'getAttributes',
            'connection' => 'getConnection',
            'displayText' => 'getDisplayText',
            'guid' => 'getGuid',
            'typeName' => 'getTypeName',
            'tags' => 'getTags',
            'classificationNames' => 'getClassificationNames'
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
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
        $this->container['connection'] = isset($data['connection']) ? $data['connection'] : null;
        $this->container['displayText'] = isset($data['displayText']) ? $data['displayText'] : null;
        $this->container['guid'] = isset($data['guid']) ? $data['guid'] : null;
        $this->container['typeName'] = isset($data['typeName']) ? $data['typeName'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['classificationNames'] = isset($data['classificationNames']) ? $data['classificationNames'] : null;
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
    * Gets attributes
    *  属性
    *
    * @return object|null
    */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
    * Sets attributes
    *
    * @param object|null $attributes 属性
    *
    * @return $this
    */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;
        return $this;
    }

    /**
    * Gets connection
    *  数据连接
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\Connection[]|null
    */
    public function getConnection()
    {
        return $this->container['connection'];
    }

    /**
    * Sets connection
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\Connection[]|null $connection 数据连接
    *
    * @return $this
    */
    public function setConnection($connection)
    {
        $this->container['connection'] = $connection;
        return $this;
    }

    /**
    * Gets displayText
    *  展示文档
    *
    * @return string|null
    */
    public function getDisplayText()
    {
        return $this->container['displayText'];
    }

    /**
    * Sets displayText
    *
    * @param string|null $displayText 展示文档
    *
    * @return $this
    */
    public function setDisplayText($displayText)
    {
        $this->container['displayText'] = $displayText;
        return $this;
    }

    /**
    * Gets guid
    *  资产guid
    *
    * @return string|null
    */
    public function getGuid()
    {
        return $this->container['guid'];
    }

    /**
    * Sets guid
    *
    * @param string|null $guid 资产guid
    *
    * @return $this
    */
    public function setGuid($guid)
    {
        $this->container['guid'] = $guid;
        return $this;
    }

    /**
    * Gets typeName
    *  类型名称
    *
    * @return string|null
    */
    public function getTypeName()
    {
        return $this->container['typeName'];
    }

    /**
    * Sets typeName
    *
    * @param string|null $typeName 类型名称
    *
    * @return $this
    */
    public function setTypeName($typeName)
    {
        $this->container['typeName'] = $typeName;
        return $this;
    }

    /**
    * Gets tags
    *  标签列表
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\TagHeader[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\TagHeader[]|null $tags 标签列表
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets classificationNames
    *  分类名称列表
    *
    * @return string[]|null
    */
    public function getClassificationNames()
    {
        return $this->container['classificationNames'];
    }

    /**
    * Sets classificationNames
    *
    * @param string[]|null $classificationNames 分类名称列表
    *
    * @return $this
    */
    public function setClassificationNames($classificationNames)
    {
        $this->container['classificationNames'] = $classificationNames;
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

