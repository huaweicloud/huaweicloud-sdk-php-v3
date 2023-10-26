<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PreheatingTaskRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PreheatingTaskRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * zhUrlEncode  是否对url中的中文字符进行编码后预热，false代表不开启，true代表开启，开启后仅预热转码后的URL。
    * urls  需要预热的URL必须带有“http://”或“https://”，多个URL用逗号分隔，目前不支持对目录的预热，单个url的长度限制为4096字符,单次最多输入1000个url。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'zhUrlEncode' => 'bool',
            'urls' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * zhUrlEncode  是否对url中的中文字符进行编码后预热，false代表不开启，true代表开启，开启后仅预热转码后的URL。
    * urls  需要预热的URL必须带有“http://”或“https://”，多个URL用逗号分隔，目前不支持对目录的预热，单个url的长度限制为4096字符,单次最多输入1000个url。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'zhUrlEncode' => null,
        'urls' => null
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
    * zhUrlEncode  是否对url中的中文字符进行编码后预热，false代表不开启，true代表开启，开启后仅预热转码后的URL。
    * urls  需要预热的URL必须带有“http://”或“https://”，多个URL用逗号分隔，目前不支持对目录的预热，单个url的长度限制为4096字符,单次最多输入1000个url。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'zhUrlEncode' => 'zh_url_encode',
            'urls' => 'urls'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * zhUrlEncode  是否对url中的中文字符进行编码后预热，false代表不开启，true代表开启，开启后仅预热转码后的URL。
    * urls  需要预热的URL必须带有“http://”或“https://”，多个URL用逗号分隔，目前不支持对目录的预热，单个url的长度限制为4096字符,单次最多输入1000个url。
    *
    * @var string[]
    */
    protected static $setters = [
            'zhUrlEncode' => 'setZhUrlEncode',
            'urls' => 'setUrls'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * zhUrlEncode  是否对url中的中文字符进行编码后预热，false代表不开启，true代表开启，开启后仅预热转码后的URL。
    * urls  需要预热的URL必须带有“http://”或“https://”，多个URL用逗号分隔，目前不支持对目录的预热，单个url的长度限制为4096字符,单次最多输入1000个url。
    *
    * @var string[]
    */
    protected static $getters = [
            'zhUrlEncode' => 'getZhUrlEncode',
            'urls' => 'getUrls'
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
        $this->container['zhUrlEncode'] = isset($data['zhUrlEncode']) ? $data['zhUrlEncode'] : null;
        $this->container['urls'] = isset($data['urls']) ? $data['urls'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['urls'] === null) {
            $invalidProperties[] = "'urls' can't be null";
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
    * Gets zhUrlEncode
    *  是否对url中的中文字符进行编码后预热，false代表不开启，true代表开启，开启后仅预热转码后的URL。
    *
    * @return bool|null
    */
    public function getZhUrlEncode()
    {
        return $this->container['zhUrlEncode'];
    }

    /**
    * Sets zhUrlEncode
    *
    * @param bool|null $zhUrlEncode 是否对url中的中文字符进行编码后预热，false代表不开启，true代表开启，开启后仅预热转码后的URL。
    *
    * @return $this
    */
    public function setZhUrlEncode($zhUrlEncode)
    {
        $this->container['zhUrlEncode'] = $zhUrlEncode;
        return $this;
    }

    /**
    * Gets urls
    *  需要预热的URL必须带有“http://”或“https://”，多个URL用逗号分隔，目前不支持对目录的预热，单个url的长度限制为4096字符,单次最多输入1000个url。
    *
    * @return string[]
    */
    public function getUrls()
    {
        return $this->container['urls'];
    }

    /**
    * Sets urls
    *
    * @param string[] $urls 需要预热的URL必须带有“http://”或“https://”，多个URL用逗号分隔，目前不支持对目录的预热，单个url的长度限制为4096字符,单次最多输入1000个url。
    *
    * @return $this
    */
    public function setUrls($urls)
    {
        $this->container['urls'] = $urls;
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

