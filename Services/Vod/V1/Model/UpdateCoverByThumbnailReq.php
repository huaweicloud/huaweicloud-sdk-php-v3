<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateCoverByThumbnailReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateCoverByThumbnailReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * thumbnailUrl  截图文件的URL。  需要根据媒资ID调用[查询媒资详细信息](https://support.huaweicloud.com/api-vod/vod_04_0202.html)接口获取媒资的截图文件URL。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'thumbnailUrl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * thumbnailUrl  截图文件的URL。  需要根据媒资ID调用[查询媒资详细信息](https://support.huaweicloud.com/api-vod/vod_04_0202.html)接口获取媒资的截图文件URL。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'thumbnailUrl' => null
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
    * thumbnailUrl  截图文件的URL。  需要根据媒资ID调用[查询媒资详细信息](https://support.huaweicloud.com/api-vod/vod_04_0202.html)接口获取媒资的截图文件URL。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'thumbnailUrl' => 'thumbnailUrl'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * thumbnailUrl  截图文件的URL。  需要根据媒资ID调用[查询媒资详细信息](https://support.huaweicloud.com/api-vod/vod_04_0202.html)接口获取媒资的截图文件URL。
    *
    * @var string[]
    */
    protected static $setters = [
            'thumbnailUrl' => 'setThumbnailUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * thumbnailUrl  截图文件的URL。  需要根据媒资ID调用[查询媒资详细信息](https://support.huaweicloud.com/api-vod/vod_04_0202.html)接口获取媒资的截图文件URL。
    *
    * @var string[]
    */
    protected static $getters = [
            'thumbnailUrl' => 'getThumbnailUrl'
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
        $this->container['thumbnailUrl'] = isset($data['thumbnailUrl']) ? $data['thumbnailUrl'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['thumbnailUrl'] === null) {
            $invalidProperties[] = "'thumbnailUrl' can't be null";
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
    * Gets thumbnailUrl
    *  截图文件的URL。  需要根据媒资ID调用[查询媒资详细信息](https://support.huaweicloud.com/api-vod/vod_04_0202.html)接口获取媒资的截图文件URL。
    *
    * @return string
    */
    public function getThumbnailUrl()
    {
        return $this->container['thumbnailUrl'];
    }

    /**
    * Sets thumbnailUrl
    *
    * @param string $thumbnailUrl 截图文件的URL。  需要根据媒资ID调用[查询媒资详细信息](https://support.huaweicloud.com/api-vod/vod_04_0202.html)接口获取媒资的截图文件URL。
    *
    * @return $this
    */
    public function setThumbnailUrl($thumbnailUrl)
    {
        $this->container['thumbnailUrl'] = $thumbnailUrl;
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

