<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PostPaidParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PostPaidParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * regionId  区域ID
    * domainId  domainId
    * tagList  计费标签
    * productList  商品列表
    * operateType  操作类型：create新购, addition增加配额
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'regionId' => 'string',
            'domainId' => 'string',
            'tagList' => '\HuaweiCloud\SDK\SecMaster\V2\Model\TagInfo[]',
            'productList' => '\HuaweiCloud\SDK\SecMaster\V2\Model\ProductPostPaid[]',
            'operateType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * regionId  区域ID
    * domainId  domainId
    * tagList  计费标签
    * productList  商品列表
    * operateType  操作类型：create新购, addition增加配额
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'regionId' => null,
        'domainId' => null,
        'tagList' => null,
        'productList' => null,
        'operateType' => null
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
    * regionId  区域ID
    * domainId  domainId
    * tagList  计费标签
    * productList  商品列表
    * operateType  操作类型：create新购, addition增加配额
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'regionId' => 'region_id',
            'domainId' => 'domain_id',
            'tagList' => 'tag_list',
            'productList' => 'product_list',
            'operateType' => 'operate_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * regionId  区域ID
    * domainId  domainId
    * tagList  计费标签
    * productList  商品列表
    * operateType  操作类型：create新购, addition增加配额
    *
    * @var string[]
    */
    protected static $setters = [
            'regionId' => 'setRegionId',
            'domainId' => 'setDomainId',
            'tagList' => 'setTagList',
            'productList' => 'setProductList',
            'operateType' => 'setOperateType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * regionId  区域ID
    * domainId  domainId
    * tagList  计费标签
    * productList  商品列表
    * operateType  操作类型：create新购, addition增加配额
    *
    * @var string[]
    */
    protected static $getters = [
            'regionId' => 'getRegionId',
            'domainId' => 'getDomainId',
            'tagList' => 'getTagList',
            'productList' => 'getProductList',
            'operateType' => 'getOperateType'
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
    const OPERATE_TYPE_CREATE = 'create';
    const OPERATE_TYPE_ADDITION = 'addition';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOperateTypeAllowableValues()
    {
        return [
            self::OPERATE_TYPE_CREATE,
            self::OPERATE_TYPE_ADDITION,
        ];
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
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['tagList'] = isset($data['tagList']) ? $data['tagList'] : null;
        $this->container['productList'] = isset($data['productList']) ? $data['productList'] : null;
        $this->container['operateType'] = isset($data['operateType']) ? $data['operateType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['regionId'] === null) {
            $invalidProperties[] = "'regionId' can't be null";
        }
            if ((mb_strlen($this->container['regionId']) > 64)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['regionId']) < 1)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['domainId'] === null) {
            $invalidProperties[] = "'domainId' can't be null";
        }
            if ((mb_strlen($this->container['domainId']) > 36)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['domainId']) < 32)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 32.";
            }
            $allowedValues = $this->getOperateTypeAllowableValues();
                if (!is_null($this->container['operateType']) && !in_array($this->container['operateType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'operateType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['operateType']) && (mb_strlen($this->container['operateType']) > 10)) {
                $invalidProperties[] = "invalid value for 'operateType', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['operateType']) && (mb_strlen($this->container['operateType']) < 6)) {
                $invalidProperties[] = "invalid value for 'operateType', the character length must be bigger than or equal to 6.";
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
    * Gets regionId
    *  区域ID
    *
    * @return string
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string $regionId 区域ID
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets domainId
    *  domainId
    *
    * @return string
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string $domainId domainId
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets tagList
    *  计费标签
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\TagInfo[]|null
    */
    public function getTagList()
    {
        return $this->container['tagList'];
    }

    /**
    * Sets tagList
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\TagInfo[]|null $tagList 计费标签
    *
    * @return $this
    */
    public function setTagList($tagList)
    {
        $this->container['tagList'] = $tagList;
        return $this;
    }

    /**
    * Gets productList
    *  商品列表
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\ProductPostPaid[]|null
    */
    public function getProductList()
    {
        return $this->container['productList'];
    }

    /**
    * Sets productList
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\ProductPostPaid[]|null $productList 商品列表
    *
    * @return $this
    */
    public function setProductList($productList)
    {
        $this->container['productList'] = $productList;
        return $this;
    }

    /**
    * Gets operateType
    *  操作类型：create新购, addition增加配额
    *
    * @return string|null
    */
    public function getOperateType()
    {
        return $this->container['operateType'];
    }

    /**
    * Sets operateType
    *
    * @param string|null $operateType 操作类型：create新购, addition增加配额
    *
    * @return $this
    */
    public function setOperateType($operateType)
    {
        $this->container['operateType'] = $operateType;
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

