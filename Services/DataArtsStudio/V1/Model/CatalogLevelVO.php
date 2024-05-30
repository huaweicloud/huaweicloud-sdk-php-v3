<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CatalogLevelVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CatalogLevelVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  编号，填写String类型替代Long类型。
    * level  层级。取值范围为1-7。
    * nameCh  中文名称。
    * nameEn  英文名称。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'level' => 'int',
            'nameCh' => 'string',
            'nameEn' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  编号，填写String类型替代Long类型。
    * level  层级。取值范围为1-7。
    * nameCh  中文名称。
    * nameEn  英文名称。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'level' => null,
        'nameCh' => null,
        'nameEn' => null
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
    * id  编号，填写String类型替代Long类型。
    * level  层级。取值范围为1-7。
    * nameCh  中文名称。
    * nameEn  英文名称。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'level' => 'level',
            'nameCh' => 'name_ch',
            'nameEn' => 'name_en'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  编号，填写String类型替代Long类型。
    * level  层级。取值范围为1-7。
    * nameCh  中文名称。
    * nameEn  英文名称。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'level' => 'setLevel',
            'nameCh' => 'setNameCh',
            'nameEn' => 'setNameEn'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  编号，填写String类型替代Long类型。
    * level  层级。取值范围为1-7。
    * nameCh  中文名称。
    * nameEn  英文名称。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'level' => 'getLevel',
            'nameCh' => 'getNameCh',
            'nameEn' => 'getNameEn'
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
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['nameCh'] = isset($data['nameCh']) ? $data['nameCh'] : null;
        $this->container['nameEn'] = isset($data['nameEn']) ? $data['nameEn'] : null;
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
    *  编号，填写String类型替代Long类型。
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
    * @param string|null $id 编号，填写String类型替代Long类型。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets level
    *  层级。取值范围为1-7。
    *
    * @return int|null
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param int|null $level 层级。取值范围为1-7。
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets nameCh
    *  中文名称。
    *
    * @return string|null
    */
    public function getNameCh()
    {
        return $this->container['nameCh'];
    }

    /**
    * Sets nameCh
    *
    * @param string|null $nameCh 中文名称。
    *
    * @return $this
    */
    public function setNameCh($nameCh)
    {
        $this->container['nameCh'] = $nameCh;
        return $this;
    }

    /**
    * Gets nameEn
    *  英文名称。
    *
    * @return string|null
    */
    public function getNameEn()
    {
        return $this->container['nameEn'];
    }

    /**
    * Sets nameEn
    *
    * @param string|null $nameEn 英文名称。
    *
    * @return $this
    */
    public function setNameEn($nameEn)
    {
        $this->container['nameEn'] = $nameEn;
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

