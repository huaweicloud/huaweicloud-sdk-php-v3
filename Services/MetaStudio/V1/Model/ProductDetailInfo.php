<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProductDetailInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProductDetailInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * productId  商品ID
    * name  商品名称
    * description  商品描述
    * tags  标签。单个标签16字节，多个用逗号分隔，最多50个。
    * cover  cover
    * textList  文本列表
    * assetList  素材资产列表
    * createTime  商品创建时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”。
    * updateTime  商品更新时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”。
    * state  商品状态枚举 * ACTIVED：已激活 * UNACTIVED：未激活 * BLOCK: 被冻结，商品不可用 * DELETED：已删除
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'productId' => 'string',
            'name' => 'string',
            'description' => 'string',
            'tags' => 'string[]',
            'cover' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\ProductCoverDetailInfo',
            'textList' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\ProductTextInfo[]',
            'assetList' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\ProductMediaDetailInfo[]',
            'createTime' => 'string',
            'updateTime' => 'string',
            'state' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * productId  商品ID
    * name  商品名称
    * description  商品描述
    * tags  标签。单个标签16字节，多个用逗号分隔，最多50个。
    * cover  cover
    * textList  文本列表
    * assetList  素材资产列表
    * createTime  商品创建时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”。
    * updateTime  商品更新时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”。
    * state  商品状态枚举 * ACTIVED：已激活 * UNACTIVED：未激活 * BLOCK: 被冻结，商品不可用 * DELETED：已删除
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'productId' => null,
        'name' => null,
        'description' => null,
        'tags' => null,
        'cover' => null,
        'textList' => null,
        'assetList' => null,
        'createTime' => null,
        'updateTime' => null,
        'state' => null
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
    * productId  商品ID
    * name  商品名称
    * description  商品描述
    * tags  标签。单个标签16字节，多个用逗号分隔，最多50个。
    * cover  cover
    * textList  文本列表
    * assetList  素材资产列表
    * createTime  商品创建时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”。
    * updateTime  商品更新时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”。
    * state  商品状态枚举 * ACTIVED：已激活 * UNACTIVED：未激活 * BLOCK: 被冻结，商品不可用 * DELETED：已删除
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'productId' => 'product_id',
            'name' => 'name',
            'description' => 'description',
            'tags' => 'tags',
            'cover' => 'cover',
            'textList' => 'text_list',
            'assetList' => 'asset_list',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'state' => 'state'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * productId  商品ID
    * name  商品名称
    * description  商品描述
    * tags  标签。单个标签16字节，多个用逗号分隔，最多50个。
    * cover  cover
    * textList  文本列表
    * assetList  素材资产列表
    * createTime  商品创建时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”。
    * updateTime  商品更新时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”。
    * state  商品状态枚举 * ACTIVED：已激活 * UNACTIVED：未激活 * BLOCK: 被冻结，商品不可用 * DELETED：已删除
    *
    * @var string[]
    */
    protected static $setters = [
            'productId' => 'setProductId',
            'name' => 'setName',
            'description' => 'setDescription',
            'tags' => 'setTags',
            'cover' => 'setCover',
            'textList' => 'setTextList',
            'assetList' => 'setAssetList',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'state' => 'setState'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * productId  商品ID
    * name  商品名称
    * description  商品描述
    * tags  标签。单个标签16字节，多个用逗号分隔，最多50个。
    * cover  cover
    * textList  文本列表
    * assetList  素材资产列表
    * createTime  商品创建时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”。
    * updateTime  商品更新时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”。
    * state  商品状态枚举 * ACTIVED：已激活 * UNACTIVED：未激活 * BLOCK: 被冻结，商品不可用 * DELETED：已删除
    *
    * @var string[]
    */
    protected static $getters = [
            'productId' => 'getProductId',
            'name' => 'getName',
            'description' => 'getDescription',
            'tags' => 'getTags',
            'cover' => 'getCover',
            'textList' => 'getTextList',
            'assetList' => 'getAssetList',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'state' => 'getState'
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
    const STATE_ACTIVED = 'ACTIVED';
    const STATE_UNACTIVED = 'UNACTIVED';
    const STATE_BLOCK = 'BLOCK';
    const STATE_DELETED = 'DELETED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_ACTIVED,
            self::STATE_UNACTIVED,
            self::STATE_BLOCK,
            self::STATE_DELETED,
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
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['cover'] = isset($data['cover']) ? $data['cover'] : null;
        $this->container['textList'] = isset($data['textList']) ? $data['textList'] : null;
        $this->container['assetList'] = isset($data['assetList']) ? $data['assetList'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['productId']) && (mb_strlen($this->container['productId']) > 64)) {
                $invalidProperties[] = "invalid value for 'productId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['productId']) && (mb_strlen($this->container['productId']) < 1)) {
                $invalidProperties[] = "invalid value for 'productId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 256)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 20)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 20.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) < 20)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be bigger than or equal to 20.";
            }
            $allowedValues = $this->getStateAllowableValues();
                if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets productId
    *  商品ID
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
    * @param string|null $productId 商品ID
    *
    * @return $this
    */
    public function setProductId($productId)
    {
        $this->container['productId'] = $productId;
        return $this;
    }

    /**
    * Gets name
    *  商品名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 商品名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  商品描述
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
    * @param string|null $description 商品描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets tags
    *  标签。单个标签16字节，多个用逗号分隔，最多50个。
    *
    * @return string[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param string[]|null $tags 标签。单个标签16字节，多个用逗号分隔，最多50个。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets cover
    *  cover
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\ProductCoverDetailInfo|null
    */
    public function getCover()
    {
        return $this->container['cover'];
    }

    /**
    * Sets cover
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\ProductCoverDetailInfo|null $cover cover
    *
    * @return $this
    */
    public function setCover($cover)
    {
        $this->container['cover'] = $cover;
        return $this;
    }

    /**
    * Gets textList
    *  文本列表
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\ProductTextInfo[]|null
    */
    public function getTextList()
    {
        return $this->container['textList'];
    }

    /**
    * Sets textList
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\ProductTextInfo[]|null $textList 文本列表
    *
    * @return $this
    */
    public function setTextList($textList)
    {
        $this->container['textList'] = $textList;
        return $this;
    }

    /**
    * Gets assetList
    *  素材资产列表
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\ProductMediaDetailInfo[]|null
    */
    public function getAssetList()
    {
        return $this->container['assetList'];
    }

    /**
    * Sets assetList
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\ProductMediaDetailInfo[]|null $assetList 素材资产列表
    *
    * @return $this
    */
    public function setAssetList($assetList)
    {
        $this->container['assetList'] = $assetList;
        return $this;
    }

    /**
    * Gets createTime
    *  商品创建时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”。
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 商品创建时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  商品更新时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”。
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime 商品更新时间，格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets state
    *  商品状态枚举 * ACTIVED：已激活 * UNACTIVED：未激活 * BLOCK: 被冻结，商品不可用 * DELETED：已删除
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state 商品状态枚举 * ACTIVED：已激活 * UNACTIVED：未激活 * BLOCK: 被冻结，商品不可用 * DELETED：已删除
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
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

