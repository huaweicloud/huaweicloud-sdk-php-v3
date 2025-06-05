<?php

namespace HuaweiCloud\SDK\Eg\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDetailOfEventSchemaVersionResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDetailOfEventSchemaVersionResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  事件模型版本ID
    * schemaId  事件模型ID
    * version  事件模型版本号
    * format  事件模型格式
    * createdTime  创建时间
    * updatedTime  更新时间
    * definition  事件模型内容定义
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'schemaId' => 'string',
            'version' => 'int',
            'format' => 'string',
            'createdTime' => 'string',
            'updatedTime' => 'string',
            'definition' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  事件模型版本ID
    * schemaId  事件模型ID
    * version  事件模型版本号
    * format  事件模型格式
    * createdTime  创建时间
    * updatedTime  更新时间
    * definition  事件模型内容定义
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'schemaId' => null,
        'version' => null,
        'format' => null,
        'createdTime' => null,
        'updatedTime' => null,
        'definition' => null
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
    * id  事件模型版本ID
    * schemaId  事件模型ID
    * version  事件模型版本号
    * format  事件模型格式
    * createdTime  创建时间
    * updatedTime  更新时间
    * definition  事件模型内容定义
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'schemaId' => 'schema_id',
            'version' => 'version',
            'format' => 'format',
            'createdTime' => 'created_time',
            'updatedTime' => 'updated_time',
            'definition' => 'definition'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  事件模型版本ID
    * schemaId  事件模型ID
    * version  事件模型版本号
    * format  事件模型格式
    * createdTime  创建时间
    * updatedTime  更新时间
    * definition  事件模型内容定义
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'schemaId' => 'setSchemaId',
            'version' => 'setVersion',
            'format' => 'setFormat',
            'createdTime' => 'setCreatedTime',
            'updatedTime' => 'setUpdatedTime',
            'definition' => 'setDefinition'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  事件模型版本ID
    * schemaId  事件模型ID
    * version  事件模型版本号
    * format  事件模型格式
    * createdTime  创建时间
    * updatedTime  更新时间
    * definition  事件模型内容定义
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'schemaId' => 'getSchemaId',
            'version' => 'getVersion',
            'format' => 'getFormat',
            'createdTime' => 'getCreatedTime',
            'updatedTime' => 'getUpdatedTime',
            'definition' => 'getDefinition'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['schemaId'] = isset($data['schemaId']) ? $data['schemaId'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
        $this->container['updatedTime'] = isset($data['updatedTime']) ? $data['updatedTime'] : null;
        $this->container['definition'] = isset($data['definition']) ? $data['definition'] : null;
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
    * Gets id
    *  事件模型版本ID
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 事件模型版本ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets schemaId
    *  事件模型ID
    *
    * @return string|null
    */
    public function getSchemaId()
    {
        return $this->container['schemaId'];
    }

    /**
    * Sets schemaId
    *
    * @param string|null $schemaId 事件模型ID
    *
    * @return $this
    */
    public function setSchemaId($schemaId)
    {
        $this->container['schemaId'] = $schemaId;
        return $this;
    }

    /**
    * Gets version
    *  事件模型版本号
    *
    * @return int|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param int|null $version 事件模型版本号
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets format
    *  事件模型格式
    *
    * @return string|null
    */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
    * Sets format
    *
    * @param string|null $format 事件模型格式
    *
    * @return $this
    */
    public function setFormat($format)
    {
        $this->container['format'] = $format;
        return $this;
    }

    /**
    * Gets createdTime
    *  创建时间
    *
    * @return string|null
    */
    public function getCreatedTime()
    {
        return $this->container['createdTime'];
    }

    /**
    * Sets createdTime
    *
    * @param string|null $createdTime 创建时间
    *
    * @return $this
    */
    public function setCreatedTime($createdTime)
    {
        $this->container['createdTime'] = $createdTime;
        return $this;
    }

    /**
    * Gets updatedTime
    *  更新时间
    *
    * @return string|null
    */
    public function getUpdatedTime()
    {
        return $this->container['updatedTime'];
    }

    /**
    * Sets updatedTime
    *
    * @param string|null $updatedTime 更新时间
    *
    * @return $this
    */
    public function setUpdatedTime($updatedTime)
    {
        $this->container['updatedTime'] = $updatedTime;
        return $this;
    }

    /**
    * Gets definition
    *  事件模型内容定义
    *
    * @return string|null
    */
    public function getDefinition()
    {
        return $this->container['definition'];
    }

    /**
    * Sets definition
    *
    * @param string|null $definition 事件模型内容定义
    *
    * @return $this
    */
    public function setDefinition($definition)
    {
        $this->container['definition'] = $definition;
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

