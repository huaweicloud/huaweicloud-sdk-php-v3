<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AtlasImageItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AtlasImageItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * imageId  图片ID
    * name  图片名称
    * url  图片查看的预签名下载地址（GET）
    * createTime  图片创建时间（毫秒时间戳）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'imageId' => 'string',
            'name' => 'string',
            'url' => 'string',
            'createTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * imageId  图片ID
    * name  图片名称
    * url  图片查看的预签名下载地址（GET）
    * createTime  图片创建时间（毫秒时间戳）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'imageId' => null,
        'name' => null,
        'url' => null,
        'createTime' => 'int64'
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
    * imageId  图片ID
    * name  图片名称
    * url  图片查看的预签名下载地址（GET）
    * createTime  图片创建时间（毫秒时间戳）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'imageId' => 'image_id',
            'name' => 'name',
            'url' => 'url',
            'createTime' => 'create_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * imageId  图片ID
    * name  图片名称
    * url  图片查看的预签名下载地址（GET）
    * createTime  图片创建时间（毫秒时间戳）
    *
    * @var string[]
    */
    protected static $setters = [
            'imageId' => 'setImageId',
            'name' => 'setName',
            'url' => 'setUrl',
            'createTime' => 'setCreateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * imageId  图片ID
    * name  图片名称
    * url  图片查看的预签名下载地址（GET）
    * createTime  图片创建时间（毫秒时间戳）
    *
    * @var string[]
    */
    protected static $getters = [
            'imageId' => 'getImageId',
            'name' => 'getName',
            'url' => 'getUrl',
            'createTime' => 'getCreateTime'
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
        $this->container['imageId'] = isset($data['imageId']) ? $data['imageId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
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
    * Gets imageId
    *  图片ID
    *
    * @return string|null
    */
    public function getImageId()
    {
        return $this->container['imageId'];
    }

    /**
    * Sets imageId
    *
    * @param string|null $imageId 图片ID
    *
    * @return $this
    */
    public function setImageId($imageId)
    {
        $this->container['imageId'] = $imageId;
        return $this;
    }

    /**
    * Gets name
    *  图片名称
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
    * @param string|null $name 图片名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets url
    *  图片查看的预签名下载地址（GET）
    *
    * @return string|null
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string|null $url 图片查看的预签名下载地址（GET）
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets createTime
    *  图片创建时间（毫秒时间戳）
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 图片创建时间（毫秒时间戳）
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
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

