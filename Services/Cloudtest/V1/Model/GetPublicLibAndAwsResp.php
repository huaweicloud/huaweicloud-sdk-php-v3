<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GetPublicLibAndAwsResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GetPublicLibAndAwsResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * awTag  公共关键字分组信息
    * documentLink  公共关键字帮助文档链接
    * isFavorite  保留字段
    * publicAwDescription  公共关键字描述
    * publicAwId  公共关键字唯一ID
    * publicAwLibId  公共关键库唯一ID
    * publicAwLibName  公共关键字库名称
    * publicAwMark  保留字段
    * publicAwName  公共关键字名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'awTag' => 'string',
            'documentLink' => 'string',
            'isFavorite' => 'int',
            'publicAwDescription' => 'string',
            'publicAwId' => 'string',
            'publicAwLibId' => 'string',
            'publicAwLibName' => 'string',
            'publicAwMark' => 'int',
            'publicAwName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * awTag  公共关键字分组信息
    * documentLink  公共关键字帮助文档链接
    * isFavorite  保留字段
    * publicAwDescription  公共关键字描述
    * publicAwId  公共关键字唯一ID
    * publicAwLibId  公共关键库唯一ID
    * publicAwLibName  公共关键字库名称
    * publicAwMark  保留字段
    * publicAwName  公共关键字名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'awTag' => null,
        'documentLink' => null,
        'isFavorite' => 'int32',
        'publicAwDescription' => null,
        'publicAwId' => null,
        'publicAwLibId' => null,
        'publicAwLibName' => null,
        'publicAwMark' => 'int32',
        'publicAwName' => null
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
    * awTag  公共关键字分组信息
    * documentLink  公共关键字帮助文档链接
    * isFavorite  保留字段
    * publicAwDescription  公共关键字描述
    * publicAwId  公共关键字唯一ID
    * publicAwLibId  公共关键库唯一ID
    * publicAwLibName  公共关键字库名称
    * publicAwMark  保留字段
    * publicAwName  公共关键字名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'awTag' => 'aw_tag',
            'documentLink' => 'document_link',
            'isFavorite' => 'is_favorite',
            'publicAwDescription' => 'public_aw_description',
            'publicAwId' => 'public_aw_id',
            'publicAwLibId' => 'public_aw_lib_id',
            'publicAwLibName' => 'public_aw_lib_name',
            'publicAwMark' => 'public_aw_mark',
            'publicAwName' => 'public_aw_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * awTag  公共关键字分组信息
    * documentLink  公共关键字帮助文档链接
    * isFavorite  保留字段
    * publicAwDescription  公共关键字描述
    * publicAwId  公共关键字唯一ID
    * publicAwLibId  公共关键库唯一ID
    * publicAwLibName  公共关键字库名称
    * publicAwMark  保留字段
    * publicAwName  公共关键字名称
    *
    * @var string[]
    */
    protected static $setters = [
            'awTag' => 'setAwTag',
            'documentLink' => 'setDocumentLink',
            'isFavorite' => 'setIsFavorite',
            'publicAwDescription' => 'setPublicAwDescription',
            'publicAwId' => 'setPublicAwId',
            'publicAwLibId' => 'setPublicAwLibId',
            'publicAwLibName' => 'setPublicAwLibName',
            'publicAwMark' => 'setPublicAwMark',
            'publicAwName' => 'setPublicAwName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * awTag  公共关键字分组信息
    * documentLink  公共关键字帮助文档链接
    * isFavorite  保留字段
    * publicAwDescription  公共关键字描述
    * publicAwId  公共关键字唯一ID
    * publicAwLibId  公共关键库唯一ID
    * publicAwLibName  公共关键字库名称
    * publicAwMark  保留字段
    * publicAwName  公共关键字名称
    *
    * @var string[]
    */
    protected static $getters = [
            'awTag' => 'getAwTag',
            'documentLink' => 'getDocumentLink',
            'isFavorite' => 'getIsFavorite',
            'publicAwDescription' => 'getPublicAwDescription',
            'publicAwId' => 'getPublicAwId',
            'publicAwLibId' => 'getPublicAwLibId',
            'publicAwLibName' => 'getPublicAwLibName',
            'publicAwMark' => 'getPublicAwMark',
            'publicAwName' => 'getPublicAwName'
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
        $this->container['awTag'] = isset($data['awTag']) ? $data['awTag'] : null;
        $this->container['documentLink'] = isset($data['documentLink']) ? $data['documentLink'] : null;
        $this->container['isFavorite'] = isset($data['isFavorite']) ? $data['isFavorite'] : null;
        $this->container['publicAwDescription'] = isset($data['publicAwDescription']) ? $data['publicAwDescription'] : null;
        $this->container['publicAwId'] = isset($data['publicAwId']) ? $data['publicAwId'] : null;
        $this->container['publicAwLibId'] = isset($data['publicAwLibId']) ? $data['publicAwLibId'] : null;
        $this->container['publicAwLibName'] = isset($data['publicAwLibName']) ? $data['publicAwLibName'] : null;
        $this->container['publicAwMark'] = isset($data['publicAwMark']) ? $data['publicAwMark'] : null;
        $this->container['publicAwName'] = isset($data['publicAwName']) ? $data['publicAwName'] : null;
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
    * Gets awTag
    *  公共关键字分组信息
    *
    * @return string|null
    */
    public function getAwTag()
    {
        return $this->container['awTag'];
    }

    /**
    * Sets awTag
    *
    * @param string|null $awTag 公共关键字分组信息
    *
    * @return $this
    */
    public function setAwTag($awTag)
    {
        $this->container['awTag'] = $awTag;
        return $this;
    }

    /**
    * Gets documentLink
    *  公共关键字帮助文档链接
    *
    * @return string|null
    */
    public function getDocumentLink()
    {
        return $this->container['documentLink'];
    }

    /**
    * Sets documentLink
    *
    * @param string|null $documentLink 公共关键字帮助文档链接
    *
    * @return $this
    */
    public function setDocumentLink($documentLink)
    {
        $this->container['documentLink'] = $documentLink;
        return $this;
    }

    /**
    * Gets isFavorite
    *  保留字段
    *
    * @return int|null
    */
    public function getIsFavorite()
    {
        return $this->container['isFavorite'];
    }

    /**
    * Sets isFavorite
    *
    * @param int|null $isFavorite 保留字段
    *
    * @return $this
    */
    public function setIsFavorite($isFavorite)
    {
        $this->container['isFavorite'] = $isFavorite;
        return $this;
    }

    /**
    * Gets publicAwDescription
    *  公共关键字描述
    *
    * @return string|null
    */
    public function getPublicAwDescription()
    {
        return $this->container['publicAwDescription'];
    }

    /**
    * Sets publicAwDescription
    *
    * @param string|null $publicAwDescription 公共关键字描述
    *
    * @return $this
    */
    public function setPublicAwDescription($publicAwDescription)
    {
        $this->container['publicAwDescription'] = $publicAwDescription;
        return $this;
    }

    /**
    * Gets publicAwId
    *  公共关键字唯一ID
    *
    * @return string|null
    */
    public function getPublicAwId()
    {
        return $this->container['publicAwId'];
    }

    /**
    * Sets publicAwId
    *
    * @param string|null $publicAwId 公共关键字唯一ID
    *
    * @return $this
    */
    public function setPublicAwId($publicAwId)
    {
        $this->container['publicAwId'] = $publicAwId;
        return $this;
    }

    /**
    * Gets publicAwLibId
    *  公共关键库唯一ID
    *
    * @return string|null
    */
    public function getPublicAwLibId()
    {
        return $this->container['publicAwLibId'];
    }

    /**
    * Sets publicAwLibId
    *
    * @param string|null $publicAwLibId 公共关键库唯一ID
    *
    * @return $this
    */
    public function setPublicAwLibId($publicAwLibId)
    {
        $this->container['publicAwLibId'] = $publicAwLibId;
        return $this;
    }

    /**
    * Gets publicAwLibName
    *  公共关键字库名称
    *
    * @return string|null
    */
    public function getPublicAwLibName()
    {
        return $this->container['publicAwLibName'];
    }

    /**
    * Sets publicAwLibName
    *
    * @param string|null $publicAwLibName 公共关键字库名称
    *
    * @return $this
    */
    public function setPublicAwLibName($publicAwLibName)
    {
        $this->container['publicAwLibName'] = $publicAwLibName;
        return $this;
    }

    /**
    * Gets publicAwMark
    *  保留字段
    *
    * @return int|null
    */
    public function getPublicAwMark()
    {
        return $this->container['publicAwMark'];
    }

    /**
    * Sets publicAwMark
    *
    * @param int|null $publicAwMark 保留字段
    *
    * @return $this
    */
    public function setPublicAwMark($publicAwMark)
    {
        $this->container['publicAwMark'] = $publicAwMark;
        return $this;
    }

    /**
    * Gets publicAwName
    *  公共关键字名称
    *
    * @return string|null
    */
    public function getPublicAwName()
    {
        return $this->container['publicAwName'];
    }

    /**
    * Sets publicAwName
    *
    * @param string|null $publicAwName 公共关键字名称
    *
    * @return $this
    */
    public function setPublicAwName($publicAwName)
    {
        $this->container['publicAwName'] = $publicAwName;
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

