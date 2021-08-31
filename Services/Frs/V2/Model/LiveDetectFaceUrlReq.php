<?php

namespace HuaweiCloud\SDK\Frs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LiveDetectFaceUrlReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LiveDetectFaceUrlReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * imageUrl  图片的URL路径，目前仅支持华为云上OBS的URL，且人脸识别服务有权限读取该OBS桶的数据。开通读取权限的操作请参见[申请服务](zh-cn_topic_0107696818.xml)。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'imageUrl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * imageUrl  图片的URL路径，目前仅支持华为云上OBS的URL，且人脸识别服务有权限读取该OBS桶的数据。开通读取权限的操作请参见[申请服务](zh-cn_topic_0107696818.xml)。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'imageUrl' => null
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
    * imageUrl  图片的URL路径，目前仅支持华为云上OBS的URL，且人脸识别服务有权限读取该OBS桶的数据。开通读取权限的操作请参见[申请服务](zh-cn_topic_0107696818.xml)。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'imageUrl' => 'image_url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * imageUrl  图片的URL路径，目前仅支持华为云上OBS的URL，且人脸识别服务有权限读取该OBS桶的数据。开通读取权限的操作请参见[申请服务](zh-cn_topic_0107696818.xml)。
    *
    * @var string[]
    */
    protected static $setters = [
            'imageUrl' => 'setImageUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * imageUrl  图片的URL路径，目前仅支持华为云上OBS的URL，且人脸识别服务有权限读取该OBS桶的数据。开通读取权限的操作请参见[申请服务](zh-cn_topic_0107696818.xml)。
    *
    * @var string[]
    */
    protected static $getters = [
            'imageUrl' => 'getImageUrl'
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
        $this->container['imageUrl'] = isset($data['imageUrl']) ? $data['imageUrl'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['imageUrl'] === null) {
            $invalidProperties[] = "'imageUrl' can't be null";
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
    * Gets imageUrl
    *  图片的URL路径，目前仅支持华为云上OBS的URL，且人脸识别服务有权限读取该OBS桶的数据。开通读取权限的操作请参见[申请服务](zh-cn_topic_0107696818.xml)。
    *
    * @return string
    */
    public function getImageUrl()
    {
        return $this->container['imageUrl'];
    }

    /**
    * Sets imageUrl
    *
    * @param string $imageUrl 图片的URL路径，目前仅支持华为云上OBS的URL，且人脸识别服务有权限读取该OBS桶的数据。开通读取权限的操作请参见[申请服务](zh-cn_topic_0107696818.xml)。
    *
    * @return $this
    */
    public function setImageUrl($imageUrl)
    {
        $this->container['imageUrl'] = $imageUrl;
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

