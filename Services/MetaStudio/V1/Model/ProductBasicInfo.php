<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProductBasicInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProductBasicInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  商品名称
    * description  商品描述
    * tags  标签。单个标签16字节，多个用逗号分隔，最多50个。
    * cover  cover
    * textList  文本列表
    * assetList  资产列表,仅支持图片、视频、音频资产
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'tags' => 'string[]',
            'cover' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\ProductCoverInfo',
            'textList' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\ProductTextInfo[]',
            'assetList' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\ProductMediaInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  商品名称
    * description  商品描述
    * tags  标签。单个标签16字节，多个用逗号分隔，最多50个。
    * cover  cover
    * textList  文本列表
    * assetList  资产列表,仅支持图片、视频、音频资产
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'tags' => null,
        'cover' => null,
        'textList' => null,
        'assetList' => null
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
    * name  商品名称
    * description  商品描述
    * tags  标签。单个标签16字节，多个用逗号分隔，最多50个。
    * cover  cover
    * textList  文本列表
    * assetList  资产列表,仅支持图片、视频、音频资产
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'tags' => 'tags',
            'cover' => 'cover',
            'textList' => 'text_list',
            'assetList' => 'asset_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  商品名称
    * description  商品描述
    * tags  标签。单个标签16字节，多个用逗号分隔，最多50个。
    * cover  cover
    * textList  文本列表
    * assetList  资产列表,仅支持图片、视频、音频资产
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'tags' => 'setTags',
            'cover' => 'setCover',
            'textList' => 'setTextList',
            'assetList' => 'setAssetList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  商品名称
    * description  商品描述
    * tags  标签。单个标签16字节，多个用逗号分隔，最多50个。
    * cover  cover
    * textList  文本列表
    * assetList  资产列表,仅支持图片、视频、音频资产
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'tags' => 'getTags',
            'cover' => 'getCover',
            'textList' => 'getTextList',
            'assetList' => 'getAssetList'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['cover'] = isset($data['cover']) ? $data['cover'] : null;
        $this->container['textList'] = isset($data['textList']) ? $data['textList'] : null;
        $this->container['assetList'] = isset($data['assetList']) ? $data['assetList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 256)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
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
    * Gets name
    *  商品名称
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 商品名称
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
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\ProductCoverInfo|null
    */
    public function getCover()
    {
        return $this->container['cover'];
    }

    /**
    * Sets cover
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\ProductCoverInfo|null $cover cover
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
    *  资产列表,仅支持图片、视频、音频资产
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\ProductMediaInfo[]|null
    */
    public function getAssetList()
    {
        return $this->container['assetList'];
    }

    /**
    * Sets assetList
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\ProductMediaInfo[]|null $assetList 资产列表,仅支持图片、视频、音频资产
    *
    * @return $this
    */
    public function setAssetList($assetList)
    {
        $this->container['assetList'] = $assetList;
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

