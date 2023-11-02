<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApigChangeResourceReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApigChangeResourceReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * changeMode  规格变更类型：10：升配；30：降配；40：续费；60：扩容；70：切换操作系统
    * resourceId  资源id
    * resourceSpecCode  资源规格编码
    * productId  产品id
    * promotionInfo  促销信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'changeMode' => 'int',
            'resourceId' => 'string',
            'resourceSpecCode' => 'string',
            'productId' => 'string',
            'promotionInfo' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * changeMode  规格变更类型：10：升配；30：降配；40：续费；60：扩容；70：切换操作系统
    * resourceId  资源id
    * resourceSpecCode  资源规格编码
    * productId  产品id
    * promotionInfo  促销信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'changeMode' => null,
        'resourceId' => null,
        'resourceSpecCode' => null,
        'productId' => null,
        'promotionInfo' => null
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
    * changeMode  规格变更类型：10：升配；30：降配；40：续费；60：扩容；70：切换操作系统
    * resourceId  资源id
    * resourceSpecCode  资源规格编码
    * productId  产品id
    * promotionInfo  促销信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'changeMode' => 'change_mode',
            'resourceId' => 'resource_id',
            'resourceSpecCode' => 'resource_spec_code',
            'productId' => 'product_id',
            'promotionInfo' => 'promotion_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * changeMode  规格变更类型：10：升配；30：降配；40：续费；60：扩容；70：切换操作系统
    * resourceId  资源id
    * resourceSpecCode  资源规格编码
    * productId  产品id
    * promotionInfo  促销信息
    *
    * @var string[]
    */
    protected static $setters = [
            'changeMode' => 'setChangeMode',
            'resourceId' => 'setResourceId',
            'resourceSpecCode' => 'setResourceSpecCode',
            'productId' => 'setProductId',
            'promotionInfo' => 'setPromotionInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * changeMode  规格变更类型：10：升配；30：降配；40：续费；60：扩容；70：切换操作系统
    * resourceId  资源id
    * resourceSpecCode  资源规格编码
    * productId  产品id
    * promotionInfo  促销信息
    *
    * @var string[]
    */
    protected static $getters = [
            'changeMode' => 'getChangeMode',
            'resourceId' => 'getResourceId',
            'resourceSpecCode' => 'getResourceSpecCode',
            'productId' => 'getProductId',
            'promotionInfo' => 'getPromotionInfo'
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
        $this->container['changeMode'] = isset($data['changeMode']) ? $data['changeMode'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['resourceSpecCode'] = isset($data['resourceSpecCode']) ? $data['resourceSpecCode'] : null;
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
        $this->container['promotionInfo'] = isset($data['promotionInfo']) ? $data['promotionInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['changeMode'] === null) {
            $invalidProperties[] = "'changeMode' can't be null";
        }
            if (($this->container['changeMode'] > 70)) {
                $invalidProperties[] = "invalid value for 'changeMode', must be smaller than or equal to 70.";
            }
            if (($this->container['changeMode'] < 10)) {
                $invalidProperties[] = "invalid value for 'changeMode', must be bigger than or equal to 10.";
            }
        if ($this->container['resourceId'] === null) {
            $invalidProperties[] = "'resourceId' can't be null";
        }
            if (!preg_match("/^[a-zA-Z0-9]{1,1024}$/", $this->container['resourceId'])) {
                $invalidProperties[] = "invalid value for 'resourceId', must be conform to the pattern /^[a-zA-Z0-9]{1,1024}$/.";
            }
        if ($this->container['resourceSpecCode'] === null) {
            $invalidProperties[] = "'resourceSpecCode' can't be null";
        }
            if (!preg_match("/^[a-zA-Z0-9.]{1,1024}$/", $this->container['resourceSpecCode'])) {
                $invalidProperties[] = "invalid value for 'resourceSpecCode', must be conform to the pattern /^[a-zA-Z0-9.]{1,1024}$/.";
            }
            if (!is_null($this->container['productId']) && !preg_match("/^[a-zA-Z0-9]{1,1024}$/", $this->container['productId'])) {
                $invalidProperties[] = "invalid value for 'productId', must be conform to the pattern /^[a-zA-Z0-9]{1,1024}$/.";
            }
            if (!is_null($this->container['promotionInfo']) && (mb_strlen($this->container['promotionInfo']) > 1024)) {
                $invalidProperties[] = "invalid value for 'promotionInfo', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['promotionInfo']) && (mb_strlen($this->container['promotionInfo']) < 1)) {
                $invalidProperties[] = "invalid value for 'promotionInfo', the character length must be bigger than or equal to 1.";
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
    * Gets changeMode
    *  规格变更类型：10：升配；30：降配；40：续费；60：扩容；70：切换操作系统
    *
    * @return int
    */
    public function getChangeMode()
    {
        return $this->container['changeMode'];
    }

    /**
    * Sets changeMode
    *
    * @param int $changeMode 规格变更类型：10：升配；30：降配；40：续费；60：扩容；70：切换操作系统
    *
    * @return $this
    */
    public function setChangeMode($changeMode)
    {
        $this->container['changeMode'] = $changeMode;
        return $this;
    }

    /**
    * Gets resourceId
    *  资源id
    *
    * @return string
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string $resourceId 资源id
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets resourceSpecCode
    *  资源规格编码
    *
    * @return string
    */
    public function getResourceSpecCode()
    {
        return $this->container['resourceSpecCode'];
    }

    /**
    * Sets resourceSpecCode
    *
    * @param string $resourceSpecCode 资源规格编码
    *
    * @return $this
    */
    public function setResourceSpecCode($resourceSpecCode)
    {
        $this->container['resourceSpecCode'] = $resourceSpecCode;
        return $this;
    }

    /**
    * Gets productId
    *  产品id
    *
    * @return string|null
    */
    public function getProductId()
    {
        return $this->container['productId'];
    }

    /**
    * Sets productId
    *
    * @param string|null $productId 产品id
    *
    * @return $this
    */
    public function setProductId($productId)
    {
        $this->container['productId'] = $productId;
        return $this;
    }

    /**
    * Gets promotionInfo
    *  促销信息
    *
    * @return string|null
    */
    public function getPromotionInfo()
    {
        return $this->container['promotionInfo'];
    }

    /**
    * Sets promotionInfo
    *
    * @param string|null $promotionInfo 促销信息
    *
    * @return $this
    */
    public function setPromotionInfo($promotionInfo)
    {
        $this->container['promotionInfo'] = $promotionInfo;
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

