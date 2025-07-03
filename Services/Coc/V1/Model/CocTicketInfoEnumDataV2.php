<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CocTicketInfoEnumDataV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CocTicketInfoEnumDataV2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * propId  字段KEY 标识哪个字段
    * bizId  枚举KEY
    * nameZh  中文名称
    * nameEn  英文名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'propId' => 'string',
            'bizId' => 'string',
            'nameZh' => 'string',
            'nameEn' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * propId  字段KEY 标识哪个字段
    * bizId  枚举KEY
    * nameZh  中文名称
    * nameEn  英文名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'propId' => null,
        'bizId' => null,
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
    * propId  字段KEY 标识哪个字段
    * bizId  枚举KEY
    * nameZh  中文名称
    * nameEn  英文名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'propId' => 'prop_id',
            'bizId' => 'biz_id',
            'nameZh' => 'name_zh',
            'nameEn' => 'name_en'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * propId  字段KEY 标识哪个字段
    * bizId  枚举KEY
    * nameZh  中文名称
    * nameEn  英文名称
    *
    * @var string[]
    */
    protected static $setters = [
            'propId' => 'setPropId',
            'bizId' => 'setBizId',
            'nameZh' => 'setNameZh',
            'nameEn' => 'setNameEn'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * propId  字段KEY 标识哪个字段
    * bizId  枚举KEY
    * nameZh  中文名称
    * nameEn  英文名称
    *
    * @var string[]
    */
    protected static $getters = [
            'propId' => 'getPropId',
            'bizId' => 'getBizId',
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
        $this->container['propId'] = isset($data['propId']) ? $data['propId'] : null;
        $this->container['bizId'] = isset($data['bizId']) ? $data['bizId'] : null;
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
            if (!is_null($this->container['propId']) && (mb_strlen($this->container['propId']) > 255)) {
                $invalidProperties[] = "invalid value for 'propId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['propId']) && (mb_strlen($this->container['propId']) < 0)) {
                $invalidProperties[] = "invalid value for 'propId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['bizId']) && (mb_strlen($this->container['bizId']) > 255)) {
                $invalidProperties[] = "invalid value for 'bizId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['bizId']) && (mb_strlen($this->container['bizId']) < 0)) {
                $invalidProperties[] = "invalid value for 'bizId', the character length must be bigger than or equal to 0.";
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
    * Gets propId
    *  字段KEY 标识哪个字段
    *
    * @return string|null
    */
    public function getPropId()
    {
        return $this->container['propId'];
    }

    /**
    * Sets propId
    *
    * @param string|null $propId 字段KEY 标识哪个字段
    *
    * @return $this
    */
    public function setPropId($propId)
    {
        $this->container['propId'] = $propId;
        return $this;
    }

    /**
    * Gets bizId
    *  枚举KEY
    *
    * @return string|null
    */
    public function getBizId()
    {
        return $this->container['bizId'];
    }

    /**
    * Sets bizId
    *
    * @param string|null $bizId 枚举KEY
    *
    * @return $this
    */
    public function setBizId($bizId)
    {
        $this->container['bizId'] = $bizId;
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

