<?php

namespace HuaweiCloud\SDK\Cdn\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VideoSeek implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'videoSeek';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enableVideoSeek  视频拖拽开关， true：开启，false：关闭  > 当本字段设置为“false”时，查询域名配置接口将不会返回视频拖拽配置信息。
    * enableFlvByTimeSeek  flv时间拖拽开关， true：开启，false：关闭。
    * startParameter  自定义用户请求URL中视频播放的开始参数，支持使用数字0-9、字符a-z、A-Z，及\"_\"，长度≤64个字符。
    * endParameter  自定义用户请求URL中视频播放的结束参数，支持使用数字0-9、字符a-z、A-Z，及\"_\"，长度≤64个字符。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enableVideoSeek' => 'bool',
            'enableFlvByTimeSeek' => 'bool',
            'startParameter' => 'string',
            'endParameter' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enableVideoSeek  视频拖拽开关， true：开启，false：关闭  > 当本字段设置为“false”时，查询域名配置接口将不会返回视频拖拽配置信息。
    * enableFlvByTimeSeek  flv时间拖拽开关， true：开启，false：关闭。
    * startParameter  自定义用户请求URL中视频播放的开始参数，支持使用数字0-9、字符a-z、A-Z，及\"_\"，长度≤64个字符。
    * endParameter  自定义用户请求URL中视频播放的结束参数，支持使用数字0-9、字符a-z、A-Z，及\"_\"，长度≤64个字符。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enableVideoSeek' => null,
        'enableFlvByTimeSeek' => null,
        'startParameter' => null,
        'endParameter' => null
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
    * enableVideoSeek  视频拖拽开关， true：开启，false：关闭  > 当本字段设置为“false”时，查询域名配置接口将不会返回视频拖拽配置信息。
    * enableFlvByTimeSeek  flv时间拖拽开关， true：开启，false：关闭。
    * startParameter  自定义用户请求URL中视频播放的开始参数，支持使用数字0-9、字符a-z、A-Z，及\"_\"，长度≤64个字符。
    * endParameter  自定义用户请求URL中视频播放的结束参数，支持使用数字0-9、字符a-z、A-Z，及\"_\"，长度≤64个字符。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enableVideoSeek' => 'enable_video_seek',
            'enableFlvByTimeSeek' => 'enable_flv_by_time_seek',
            'startParameter' => 'start_parameter',
            'endParameter' => 'end_parameter'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enableVideoSeek  视频拖拽开关， true：开启，false：关闭  > 当本字段设置为“false”时，查询域名配置接口将不会返回视频拖拽配置信息。
    * enableFlvByTimeSeek  flv时间拖拽开关， true：开启，false：关闭。
    * startParameter  自定义用户请求URL中视频播放的开始参数，支持使用数字0-9、字符a-z、A-Z，及\"_\"，长度≤64个字符。
    * endParameter  自定义用户请求URL中视频播放的结束参数，支持使用数字0-9、字符a-z、A-Z，及\"_\"，长度≤64个字符。
    *
    * @var string[]
    */
    protected static $setters = [
            'enableVideoSeek' => 'setEnableVideoSeek',
            'enableFlvByTimeSeek' => 'setEnableFlvByTimeSeek',
            'startParameter' => 'setStartParameter',
            'endParameter' => 'setEndParameter'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enableVideoSeek  视频拖拽开关， true：开启，false：关闭  > 当本字段设置为“false”时，查询域名配置接口将不会返回视频拖拽配置信息。
    * enableFlvByTimeSeek  flv时间拖拽开关， true：开启，false：关闭。
    * startParameter  自定义用户请求URL中视频播放的开始参数，支持使用数字0-9、字符a-z、A-Z，及\"_\"，长度≤64个字符。
    * endParameter  自定义用户请求URL中视频播放的结束参数，支持使用数字0-9、字符a-z、A-Z，及\"_\"，长度≤64个字符。
    *
    * @var string[]
    */
    protected static $getters = [
            'enableVideoSeek' => 'getEnableVideoSeek',
            'enableFlvByTimeSeek' => 'getEnableFlvByTimeSeek',
            'startParameter' => 'getStartParameter',
            'endParameter' => 'getEndParameter'
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
        $this->container['enableVideoSeek'] = isset($data['enableVideoSeek']) ? $data['enableVideoSeek'] : null;
        $this->container['enableFlvByTimeSeek'] = isset($data['enableFlvByTimeSeek']) ? $data['enableFlvByTimeSeek'] : null;
        $this->container['startParameter'] = isset($data['startParameter']) ? $data['startParameter'] : null;
        $this->container['endParameter'] = isset($data['endParameter']) ? $data['endParameter'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['enableVideoSeek'] === null) {
            $invalidProperties[] = "'enableVideoSeek' can't be null";
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
    * Gets enableVideoSeek
    *  视频拖拽开关， true：开启，false：关闭  > 当本字段设置为“false”时，查询域名配置接口将不会返回视频拖拽配置信息。
    *
    * @return bool
    */
    public function getEnableVideoSeek()
    {
        return $this->container['enableVideoSeek'];
    }

    /**
    * Sets enableVideoSeek
    *
    * @param bool $enableVideoSeek 视频拖拽开关， true：开启，false：关闭  > 当本字段设置为“false”时，查询域名配置接口将不会返回视频拖拽配置信息。
    *
    * @return $this
    */
    public function setEnableVideoSeek($enableVideoSeek)
    {
        $this->container['enableVideoSeek'] = $enableVideoSeek;
        return $this;
    }

    /**
    * Gets enableFlvByTimeSeek
    *  flv时间拖拽开关， true：开启，false：关闭。
    *
    * @return bool|null
    */
    public function getEnableFlvByTimeSeek()
    {
        return $this->container['enableFlvByTimeSeek'];
    }

    /**
    * Sets enableFlvByTimeSeek
    *
    * @param bool|null $enableFlvByTimeSeek flv时间拖拽开关， true：开启，false：关闭。
    *
    * @return $this
    */
    public function setEnableFlvByTimeSeek($enableFlvByTimeSeek)
    {
        $this->container['enableFlvByTimeSeek'] = $enableFlvByTimeSeek;
        return $this;
    }

    /**
    * Gets startParameter
    *  自定义用户请求URL中视频播放的开始参数，支持使用数字0-9、字符a-z、A-Z，及\"_\"，长度≤64个字符。
    *
    * @return string|null
    */
    public function getStartParameter()
    {
        return $this->container['startParameter'];
    }

    /**
    * Sets startParameter
    *
    * @param string|null $startParameter 自定义用户请求URL中视频播放的开始参数，支持使用数字0-9、字符a-z、A-Z，及\"_\"，长度≤64个字符。
    *
    * @return $this
    */
    public function setStartParameter($startParameter)
    {
        $this->container['startParameter'] = $startParameter;
        return $this;
    }

    /**
    * Gets endParameter
    *  自定义用户请求URL中视频播放的结束参数，支持使用数字0-9、字符a-z、A-Z，及\"_\"，长度≤64个字符。
    *
    * @return string|null
    */
    public function getEndParameter()
    {
        return $this->container['endParameter'];
    }

    /**
    * Sets endParameter
    *
    * @param string|null $endParameter 自定义用户请求URL中视频播放的结束参数，支持使用数字0-9、字符a-z、A-Z，及\"_\"，长度≤64个字符。
    *
    * @return $this
    */
    public function setEndParameter($endParameter)
    {
        $this->container['endParameter'] = $endParameter;
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

