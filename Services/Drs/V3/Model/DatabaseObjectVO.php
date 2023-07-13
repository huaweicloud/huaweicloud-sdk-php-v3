<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DatabaseObjectVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DatabaseObjectVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  数据库对象和数据库表名称，例如格式为hec-*-*-drs_test1。
    * select  是否选择高级配置，值为true。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'select' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  数据库对象和数据库表名称，例如格式为hec-*-*-drs_test1。
    * select  是否选择高级配置，值为true。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'select' => null
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
    * id  数据库对象和数据库表名称，例如格式为hec-*-*-drs_test1。
    * select  是否选择高级配置，值为true。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'select' => 'select'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  数据库对象和数据库表名称，例如格式为hec-*-*-drs_test1。
    * select  是否选择高级配置，值为true。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'select' => 'setSelect'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  数据库对象和数据库表名称，例如格式为hec-*-*-drs_test1。
    * select  是否选择高级配置，值为true。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'select' => 'getSelect'
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
        $this->container['select'] = isset($data['select']) ? $data['select'] : null;
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
    *  数据库对象和数据库表名称，例如格式为hec-*-*-drs_test1。
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
    * @param string|null $id 数据库对象和数据库表名称，例如格式为hec-*-*-drs_test1。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets select
    *  是否选择高级配置，值为true。
    *
    * @return string|null
    */
    public function getSelect()
    {
        return $this->container['select'];
    }

    /**
    * Sets select
    *
    * @param string|null $select 是否选择高级配置，值为true。
    *
    * @return $this
    */
    public function setSelect($select)
    {
        $this->container['select'] = $select;
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

