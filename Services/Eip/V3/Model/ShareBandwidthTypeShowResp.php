<?php

namespace HuaweiCloud\SDK\Eip\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShareBandwidthTypeShowResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShareBandwidthTypeShowResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  支持带宽类型的id
    * bandwidthType  带宽类型
    * publicBorderGroup  中心站点or边缘站点，默认展示
    * createdAt  创建时间
    * updatedAt  更新时间
    * nameEn  带宽类型的英文表述
    * nameZh  带宽类型的中文表述
    * description  带宽类型描述信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'bandwidthType' => 'string',
            'publicBorderGroup' => 'string',
            'createdAt' => 'string',
            'updatedAt' => 'string',
            'nameEn' => 'string',
            'nameZh' => 'string',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  支持带宽类型的id
    * bandwidthType  带宽类型
    * publicBorderGroup  中心站点or边缘站点，默认展示
    * createdAt  创建时间
    * updatedAt  更新时间
    * nameEn  带宽类型的英文表述
    * nameZh  带宽类型的中文表述
    * description  带宽类型描述信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'bandwidthType' => null,
        'publicBorderGroup' => null,
        'createdAt' => null,
        'updatedAt' => null,
        'nameEn' => null,
        'nameZh' => null,
        'description' => null
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
    * id  支持带宽类型的id
    * bandwidthType  带宽类型
    * publicBorderGroup  中心站点or边缘站点，默认展示
    * createdAt  创建时间
    * updatedAt  更新时间
    * nameEn  带宽类型的英文表述
    * nameZh  带宽类型的中文表述
    * description  带宽类型描述信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'bandwidthType' => 'bandwidth_type',
            'publicBorderGroup' => 'public_border_group',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'nameEn' => 'name_en',
            'nameZh' => 'name_zh',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  支持带宽类型的id
    * bandwidthType  带宽类型
    * publicBorderGroup  中心站点or边缘站点，默认展示
    * createdAt  创建时间
    * updatedAt  更新时间
    * nameEn  带宽类型的英文表述
    * nameZh  带宽类型的中文表述
    * description  带宽类型描述信息
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'bandwidthType' => 'setBandwidthType',
            'publicBorderGroup' => 'setPublicBorderGroup',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'nameEn' => 'setNameEn',
            'nameZh' => 'setNameZh',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  支持带宽类型的id
    * bandwidthType  带宽类型
    * publicBorderGroup  中心站点or边缘站点，默认展示
    * createdAt  创建时间
    * updatedAt  更新时间
    * nameEn  带宽类型的英文表述
    * nameZh  带宽类型的中文表述
    * description  带宽类型描述信息
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'bandwidthType' => 'getBandwidthType',
            'publicBorderGroup' => 'getPublicBorderGroup',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'nameEn' => 'getNameEn',
            'nameZh' => 'getNameZh',
            'description' => 'getDescription'
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
        $this->container['bandwidthType'] = isset($data['bandwidthType']) ? $data['bandwidthType'] : null;
        $this->container['publicBorderGroup'] = isset($data['publicBorderGroup']) ? $data['publicBorderGroup'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['nameEn'] = isset($data['nameEn']) ? $data['nameEn'] : null;
        $this->container['nameZh'] = isset($data['nameZh']) ? $data['nameZh'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['bandwidthType']) && (mb_strlen($this->container['bandwidthType']) > 36)) {
                $invalidProperties[] = "invalid value for 'bandwidthType', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['bandwidthType']) && (mb_strlen($this->container['bandwidthType']) < 0)) {
                $invalidProperties[] = "invalid value for 'bandwidthType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['publicBorderGroup']) && (mb_strlen($this->container['publicBorderGroup']) > 64)) {
                $invalidProperties[] = "invalid value for 'publicBorderGroup', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['publicBorderGroup']) && (mb_strlen($this->container['publicBorderGroup']) < 0)) {
                $invalidProperties[] = "invalid value for 'publicBorderGroup', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createdAt']) && (mb_strlen($this->container['createdAt']) > 64)) {
                $invalidProperties[] = "invalid value for 'createdAt', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['createdAt']) && (mb_strlen($this->container['createdAt']) < 0)) {
                $invalidProperties[] = "invalid value for 'createdAt', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updatedAt']) && (mb_strlen($this->container['updatedAt']) > 64)) {
                $invalidProperties[] = "invalid value for 'updatedAt', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['updatedAt']) && (mb_strlen($this->container['updatedAt']) < 0)) {
                $invalidProperties[] = "invalid value for 'updatedAt', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['nameEn']) && (mb_strlen($this->container['nameEn']) > 256)) {
                $invalidProperties[] = "invalid value for 'nameEn', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['nameEn']) && (mb_strlen($this->container['nameEn']) < 0)) {
                $invalidProperties[] = "invalid value for 'nameEn', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['nameZh']) && (mb_strlen($this->container['nameZh']) > 256)) {
                $invalidProperties[] = "invalid value for 'nameZh', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['nameZh']) && (mb_strlen($this->container['nameZh']) < 0)) {
                $invalidProperties[] = "invalid value for 'nameZh', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
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
    * Gets id
    *  支持带宽类型的id
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
    * @param string|null $id 支持带宽类型的id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets bandwidthType
    *  带宽类型
    *
    * @return string|null
    */
    public function getBandwidthType()
    {
        return $this->container['bandwidthType'];
    }

    /**
    * Sets bandwidthType
    *
    * @param string|null $bandwidthType 带宽类型
    *
    * @return $this
    */
    public function setBandwidthType($bandwidthType)
    {
        $this->container['bandwidthType'] = $bandwidthType;
        return $this;
    }

    /**
    * Gets publicBorderGroup
    *  中心站点or边缘站点，默认展示
    *
    * @return string|null
    */
    public function getPublicBorderGroup()
    {
        return $this->container['publicBorderGroup'];
    }

    /**
    * Sets publicBorderGroup
    *
    * @param string|null $publicBorderGroup 中心站点or边缘站点，默认展示
    *
    * @return $this
    */
    public function setPublicBorderGroup($publicBorderGroup)
    {
        $this->container['publicBorderGroup'] = $publicBorderGroup;
        return $this;
    }

    /**
    * Gets createdAt
    *  创建时间
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt 创建时间
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  更新时间
    *
    * @return string|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string|null $updatedAt 更新时间
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets nameEn
    *  带宽类型的英文表述
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
    * @param string|null $nameEn 带宽类型的英文表述
    *
    * @return $this
    */
    public function setNameEn($nameEn)
    {
        $this->container['nameEn'] = $nameEn;
        return $this;
    }

    /**
    * Gets nameZh
    *  带宽类型的中文表述
    *
    * @return string|null
    */
    public function getNameZh()
    {
        return $this->container['nameZh'];
    }

    /**
    * Sets nameZh
    *
    * @param string|null $nameZh 带宽类型的中文表述
    *
    * @return $this
    */
    public function setNameZh($nameZh)
    {
        $this->container['nameZh'] = $nameZh;
        return $this;
    }

    /**
    * Gets description
    *  带宽类型描述信息
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
    * @param string|null $description 带宽类型描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

