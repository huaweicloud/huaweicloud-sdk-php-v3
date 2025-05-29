<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TicketInfoEnumData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TicketInfoEnumData';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * filedKey  字段KEY 标识哪个字段
    * enumKey  枚举KEY
    * nameZh  中文名称
    * nameEn  英文名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'filedKey' => 'string',
            'enumKey' => 'string',
            'nameZh' => 'string',
            'nameEn' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * filedKey  字段KEY 标识哪个字段
    * enumKey  枚举KEY
    * nameZh  中文名称
    * nameEn  英文名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'filedKey' => null,
        'enumKey' => null,
        'nameZh' => null,
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
    * filedKey  字段KEY 标识哪个字段
    * enumKey  枚举KEY
    * nameZh  中文名称
    * nameEn  英文名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'filedKey' => 'filed_key',
            'enumKey' => 'enum_key',
            'nameZh' => 'name_zh',
            'nameEn' => 'name_en'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * filedKey  字段KEY 标识哪个字段
    * enumKey  枚举KEY
    * nameZh  中文名称
    * nameEn  英文名称
    *
    * @var string[]
    */
    protected static $setters = [
            'filedKey' => 'setFiledKey',
            'enumKey' => 'setEnumKey',
            'nameZh' => 'setNameZh',
            'nameEn' => 'setNameEn'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * filedKey  字段KEY 标识哪个字段
    * enumKey  枚举KEY
    * nameZh  中文名称
    * nameEn  英文名称
    *
    * @var string[]
    */
    protected static $getters = [
            'filedKey' => 'getFiledKey',
            'enumKey' => 'getEnumKey',
            'nameZh' => 'getNameZh',
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
        $this->container['filedKey'] = isset($data['filedKey']) ? $data['filedKey'] : null;
        $this->container['enumKey'] = isset($data['enumKey']) ? $data['enumKey'] : null;
        $this->container['nameZh'] = isset($data['nameZh']) ? $data['nameZh'] : null;
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
        if ($this->container['filedKey'] === null) {
            $invalidProperties[] = "'filedKey' can't be null";
        }
            if ((mb_strlen($this->container['filedKey']) > 255)) {
                $invalidProperties[] = "invalid value for 'filedKey', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['filedKey']) < 0)) {
                $invalidProperties[] = "invalid value for 'filedKey', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['enumKey'] === null) {
            $invalidProperties[] = "'enumKey' can't be null";
        }
            if ((mb_strlen($this->container['enumKey']) > 255)) {
                $invalidProperties[] = "invalid value for 'enumKey', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['enumKey']) < 0)) {
                $invalidProperties[] = "invalid value for 'enumKey', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['nameZh'] === null) {
            $invalidProperties[] = "'nameZh' can't be null";
        }
            if ((mb_strlen($this->container['nameZh']) > 255)) {
                $invalidProperties[] = "invalid value for 'nameZh', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['nameZh']) < 0)) {
                $invalidProperties[] = "invalid value for 'nameZh', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['nameEn'] === null) {
            $invalidProperties[] = "'nameEn' can't be null";
        }
            if ((mb_strlen($this->container['nameEn']) > 255)) {
                $invalidProperties[] = "invalid value for 'nameEn', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['nameEn']) < 0)) {
                $invalidProperties[] = "invalid value for 'nameEn', the character length must be bigger than or equal to 0.";
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
    * Gets filedKey
    *  字段KEY 标识哪个字段
    *
    * @return string
    */
    public function getFiledKey()
    {
        return $this->container['filedKey'];
    }

    /**
    * Sets filedKey
    *
    * @param string $filedKey 字段KEY 标识哪个字段
    *
    * @return $this
    */
    public function setFiledKey($filedKey)
    {
        $this->container['filedKey'] = $filedKey;
        return $this;
    }

    /**
    * Gets enumKey
    *  枚举KEY
    *
    * @return string
    */
    public function getEnumKey()
    {
        return $this->container['enumKey'];
    }

    /**
    * Sets enumKey
    *
    * @param string $enumKey 枚举KEY
    *
    * @return $this
    */
    public function setEnumKey($enumKey)
    {
        $this->container['enumKey'] = $enumKey;
        return $this;
    }

    /**
    * Gets nameZh
    *  中文名称
    *
    * @return string
    */
    public function getNameZh()
    {
        return $this->container['nameZh'];
    }

    /**
    * Sets nameZh
    *
    * @param string $nameZh 中文名称
    *
    * @return $this
    */
    public function setNameZh($nameZh)
    {
        $this->container['nameZh'] = $nameZh;
        return $this;
    }

    /**
    * Gets nameEn
    *  英文名称
    *
    * @return string
    */
    public function getNameEn()
    {
        return $this->container['nameEn'];
    }

    /**
    * Sets nameEn
    *
    * @param string $nameEn 英文名称
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

