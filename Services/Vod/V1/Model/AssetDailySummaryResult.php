<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AssetDailySummaryResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AssetDailySummaryResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * date  播放日期，格式为：yyyyMMdd000000。
    * link  日播放统计数据文件的下载地址，有效期为12个小时。  文件内容格式：[域名]\\t[媒资ID]\\t[日期]\\t[播放流量]\\t[播放次数]  播放次数统计说明： - HLS文件：访问M3U8文件时会统计播放次数，访问TS文件时不会统计播放次数。 - 其它文件：如MP4文件，当播放请求带有range且range的start参数不等于0时，不统计播放次数。其它情况下，会统计播放次数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'date' => 'string',
            'link' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * date  播放日期，格式为：yyyyMMdd000000。
    * link  日播放统计数据文件的下载地址，有效期为12个小时。  文件内容格式：[域名]\\t[媒资ID]\\t[日期]\\t[播放流量]\\t[播放次数]  播放次数统计说明： - HLS文件：访问M3U8文件时会统计播放次数，访问TS文件时不会统计播放次数。 - 其它文件：如MP4文件，当播放请求带有range且range的start参数不等于0时，不统计播放次数。其它情况下，会统计播放次数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'date' => null,
        'link' => null
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
    * date  播放日期，格式为：yyyyMMdd000000。
    * link  日播放统计数据文件的下载地址，有效期为12个小时。  文件内容格式：[域名]\\t[媒资ID]\\t[日期]\\t[播放流量]\\t[播放次数]  播放次数统计说明： - HLS文件：访问M3U8文件时会统计播放次数，访问TS文件时不会统计播放次数。 - 其它文件：如MP4文件，当播放请求带有range且range的start参数不等于0时，不统计播放次数。其它情况下，会统计播放次数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'date' => 'date',
            'link' => 'link'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * date  播放日期，格式为：yyyyMMdd000000。
    * link  日播放统计数据文件的下载地址，有效期为12个小时。  文件内容格式：[域名]\\t[媒资ID]\\t[日期]\\t[播放流量]\\t[播放次数]  播放次数统计说明： - HLS文件：访问M3U8文件时会统计播放次数，访问TS文件时不会统计播放次数。 - 其它文件：如MP4文件，当播放请求带有range且range的start参数不等于0时，不统计播放次数。其它情况下，会统计播放次数。
    *
    * @var string[]
    */
    protected static $setters = [
            'date' => 'setDate',
            'link' => 'setLink'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * date  播放日期，格式为：yyyyMMdd000000。
    * link  日播放统计数据文件的下载地址，有效期为12个小时。  文件内容格式：[域名]\\t[媒资ID]\\t[日期]\\t[播放流量]\\t[播放次数]  播放次数统计说明： - HLS文件：访问M3U8文件时会统计播放次数，访问TS文件时不会统计播放次数。 - 其它文件：如MP4文件，当播放请求带有range且range的start参数不等于0时，不统计播放次数。其它情况下，会统计播放次数。
    *
    * @var string[]
    */
    protected static $getters = [
            'date' => 'getDate',
            'link' => 'getLink'
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
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['link'] = isset($data['link']) ? $data['link'] : null;
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
    * Gets date
    *  播放日期，格式为：yyyyMMdd000000。
    *
    * @return string|null
    */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
    * Sets date
    *
    * @param string|null $date 播放日期，格式为：yyyyMMdd000000。
    *
    * @return $this
    */
    public function setDate($date)
    {
        $this->container['date'] = $date;
        return $this;
    }

    /**
    * Gets link
    *  日播放统计数据文件的下载地址，有效期为12个小时。  文件内容格式：[域名]\\t[媒资ID]\\t[日期]\\t[播放流量]\\t[播放次数]  播放次数统计说明： - HLS文件：访问M3U8文件时会统计播放次数，访问TS文件时不会统计播放次数。 - 其它文件：如MP4文件，当播放请求带有range且range的start参数不等于0时，不统计播放次数。其它情况下，会统计播放次数。
    *
    * @return string|null
    */
    public function getLink()
    {
        return $this->container['link'];
    }

    /**
    * Sets link
    *
    * @param string|null $link 日播放统计数据文件的下载地址，有效期为12个小时。  文件内容格式：[域名]\\t[媒资ID]\\t[日期]\\t[播放流量]\\t[播放次数]  播放次数统计说明： - HLS文件：访问M3U8文件时会统计播放次数，访问TS文件时不会统计播放次数。 - 其它文件：如MP4文件，当播放请求带有range且range的start参数不等于0时，不统计播放次数。其它情况下，会统计播放次数。
    *
    * @return $this
    */
    public function setLink($link)
    {
        $this->container['link'] = $link;
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

