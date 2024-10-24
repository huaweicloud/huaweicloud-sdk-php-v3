<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DashPackageItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DashPackageItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * url  客户自定义的拉流地址，包括方法、域名、路径
    * streamSelection  从全量流中过滤出一个码率在[min, max]区间的流。如果不需要码率过滤可不选。
    * segmentDurationSeconds  频道输出分片的时长，为必选项  单位：秒。取值范围：1-10 > 修改分片时长会影响已录制内容的时移和回看服务，请谨慎修改！
    * playlistWindowSeconds  频道直播返回分片的窗口长度，为频道输出分片的时长乘以数量后得到的值。实际返回的分片数不小于3个。  单位：秒。取值范围：0 - 86400（24小时转化成秒后的取值）
    * encryption  encryption
    * ads  广告配置
    * extArgs  其他额外参数
    * requestArgs  requestArgs
    * adMarker  广告标识。  DASH取值：\"xml+bin\"。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'url' => 'string',
            'streamSelection' => '\HuaweiCloud\SDK\Live\V1\Model\StreamSelectionItem[]',
            'segmentDurationSeconds' => 'int',
            'playlistWindowSeconds' => 'int',
            'encryption' => '\HuaweiCloud\SDK\Live\V1\Model\Encryption',
            'ads' => 'object',
            'extArgs' => 'object',
            'requestArgs' => '\HuaweiCloud\SDK\Live\V1\Model\PackageRequestArgs',
            'adMarker' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * url  客户自定义的拉流地址，包括方法、域名、路径
    * streamSelection  从全量流中过滤出一个码率在[min, max]区间的流。如果不需要码率过滤可不选。
    * segmentDurationSeconds  频道输出分片的时长，为必选项  单位：秒。取值范围：1-10 > 修改分片时长会影响已录制内容的时移和回看服务，请谨慎修改！
    * playlistWindowSeconds  频道直播返回分片的窗口长度，为频道输出分片的时长乘以数量后得到的值。实际返回的分片数不小于3个。  单位：秒。取值范围：0 - 86400（24小时转化成秒后的取值）
    * encryption  encryption
    * ads  广告配置
    * extArgs  其他额外参数
    * requestArgs  requestArgs
    * adMarker  广告标识。  DASH取值：\"xml+bin\"。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'url' => null,
        'streamSelection' => null,
        'segmentDurationSeconds' => null,
        'playlistWindowSeconds' => null,
        'encryption' => null,
        'ads' => null,
        'extArgs' => null,
        'requestArgs' => null,
        'adMarker' => null
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
    * url  客户自定义的拉流地址，包括方法、域名、路径
    * streamSelection  从全量流中过滤出一个码率在[min, max]区间的流。如果不需要码率过滤可不选。
    * segmentDurationSeconds  频道输出分片的时长，为必选项  单位：秒。取值范围：1-10 > 修改分片时长会影响已录制内容的时移和回看服务，请谨慎修改！
    * playlistWindowSeconds  频道直播返回分片的窗口长度，为频道输出分片的时长乘以数量后得到的值。实际返回的分片数不小于3个。  单位：秒。取值范围：0 - 86400（24小时转化成秒后的取值）
    * encryption  encryption
    * ads  广告配置
    * extArgs  其他额外参数
    * requestArgs  requestArgs
    * adMarker  广告标识。  DASH取值：\"xml+bin\"。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'url' => 'url',
            'streamSelection' => 'stream_selection',
            'segmentDurationSeconds' => 'segment_duration_seconds',
            'playlistWindowSeconds' => 'playlist_window_seconds',
            'encryption' => 'encryption',
            'ads' => 'ads',
            'extArgs' => 'ext_args',
            'requestArgs' => 'request_args',
            'adMarker' => 'ad_marker'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * url  客户自定义的拉流地址，包括方法、域名、路径
    * streamSelection  从全量流中过滤出一个码率在[min, max]区间的流。如果不需要码率过滤可不选。
    * segmentDurationSeconds  频道输出分片的时长，为必选项  单位：秒。取值范围：1-10 > 修改分片时长会影响已录制内容的时移和回看服务，请谨慎修改！
    * playlistWindowSeconds  频道直播返回分片的窗口长度，为频道输出分片的时长乘以数量后得到的值。实际返回的分片数不小于3个。  单位：秒。取值范围：0 - 86400（24小时转化成秒后的取值）
    * encryption  encryption
    * ads  广告配置
    * extArgs  其他额外参数
    * requestArgs  requestArgs
    * adMarker  广告标识。  DASH取值：\"xml+bin\"。
    *
    * @var string[]
    */
    protected static $setters = [
            'url' => 'setUrl',
            'streamSelection' => 'setStreamSelection',
            'segmentDurationSeconds' => 'setSegmentDurationSeconds',
            'playlistWindowSeconds' => 'setPlaylistWindowSeconds',
            'encryption' => 'setEncryption',
            'ads' => 'setAds',
            'extArgs' => 'setExtArgs',
            'requestArgs' => 'setRequestArgs',
            'adMarker' => 'setAdMarker'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * url  客户自定义的拉流地址，包括方法、域名、路径
    * streamSelection  从全量流中过滤出一个码率在[min, max]区间的流。如果不需要码率过滤可不选。
    * segmentDurationSeconds  频道输出分片的时长，为必选项  单位：秒。取值范围：1-10 > 修改分片时长会影响已录制内容的时移和回看服务，请谨慎修改！
    * playlistWindowSeconds  频道直播返回分片的窗口长度，为频道输出分片的时长乘以数量后得到的值。实际返回的分片数不小于3个。  单位：秒。取值范围：0 - 86400（24小时转化成秒后的取值）
    * encryption  encryption
    * ads  广告配置
    * extArgs  其他额外参数
    * requestArgs  requestArgs
    * adMarker  广告标识。  DASH取值：\"xml+bin\"。
    *
    * @var string[]
    */
    protected static $getters = [
            'url' => 'getUrl',
            'streamSelection' => 'getStreamSelection',
            'segmentDurationSeconds' => 'getSegmentDurationSeconds',
            'playlistWindowSeconds' => 'getPlaylistWindowSeconds',
            'encryption' => 'getEncryption',
            'ads' => 'getAds',
            'extArgs' => 'getExtArgs',
            'requestArgs' => 'getRequestArgs',
            'adMarker' => 'getAdMarker'
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
    const AD_MARKER_XMLBIN = 'xml+bin';
    const AD_MARKER_XML = 'xml';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAdMarkerAllowableValues()
    {
        return [
            self::AD_MARKER_XMLBIN,
            self::AD_MARKER_XML,
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
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['streamSelection'] = isset($data['streamSelection']) ? $data['streamSelection'] : null;
        $this->container['segmentDurationSeconds'] = isset($data['segmentDurationSeconds']) ? $data['segmentDurationSeconds'] : null;
        $this->container['playlistWindowSeconds'] = isset($data['playlistWindowSeconds']) ? $data['playlistWindowSeconds'] : null;
        $this->container['encryption'] = isset($data['encryption']) ? $data['encryption'] : null;
        $this->container['ads'] = isset($data['ads']) ? $data['ads'] : null;
        $this->container['extArgs'] = isset($data['extArgs']) ? $data['extArgs'] : null;
        $this->container['requestArgs'] = isset($data['requestArgs']) ? $data['requestArgs'] : null;
        $this->container['adMarker'] = isset($data['adMarker']) ? $data['adMarker'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
            if ((mb_strlen($this->container['url']) > 1024)) {
                $invalidProperties[] = "invalid value for 'url', the character length must be smaller than or equal to 1024.";
            }
            if ((mb_strlen($this->container['url']) < 1)) {
                $invalidProperties[] = "invalid value for 'url', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['segmentDurationSeconds'] === null) {
            $invalidProperties[] = "'segmentDurationSeconds' can't be null";
        }
            if (($this->container['segmentDurationSeconds'] > 10)) {
                $invalidProperties[] = "invalid value for 'segmentDurationSeconds', must be smaller than or equal to 10.";
            }
            if (($this->container['segmentDurationSeconds'] < 1)) {
                $invalidProperties[] = "invalid value for 'segmentDurationSeconds', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['playlistWindowSeconds']) && ($this->container['playlistWindowSeconds'] > 86400)) {
                $invalidProperties[] = "invalid value for 'playlistWindowSeconds', must be smaller than or equal to 86400.";
            }
            if (!is_null($this->container['playlistWindowSeconds']) && ($this->container['playlistWindowSeconds'] < 0)) {
                $invalidProperties[] = "invalid value for 'playlistWindowSeconds', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getAdMarkerAllowableValues();
                if (!is_null($this->container['adMarker']) && !in_array($this->container['adMarker'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'adMarker', must be one of '%s'",
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
    * Gets url
    *  客户自定义的拉流地址，包括方法、域名、路径
    *
    * @return string
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string $url 客户自定义的拉流地址，包括方法、域名、路径
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets streamSelection
    *  从全量流中过滤出一个码率在[min, max]区间的流。如果不需要码率过滤可不选。
    *
    * @return \HuaweiCloud\SDK\Live\V1\Model\StreamSelectionItem[]|null
    */
    public function getStreamSelection()
    {
        return $this->container['streamSelection'];
    }

    /**
    * Sets streamSelection
    *
    * @param \HuaweiCloud\SDK\Live\V1\Model\StreamSelectionItem[]|null $streamSelection 从全量流中过滤出一个码率在[min, max]区间的流。如果不需要码率过滤可不选。
    *
    * @return $this
    */
    public function setStreamSelection($streamSelection)
    {
        $this->container['streamSelection'] = $streamSelection;
        return $this;
    }

    /**
    * Gets segmentDurationSeconds
    *  频道输出分片的时长，为必选项  单位：秒。取值范围：1-10 > 修改分片时长会影响已录制内容的时移和回看服务，请谨慎修改！
    *
    * @return int
    */
    public function getSegmentDurationSeconds()
    {
        return $this->container['segmentDurationSeconds'];
    }

    /**
    * Sets segmentDurationSeconds
    *
    * @param int $segmentDurationSeconds 频道输出分片的时长，为必选项  单位：秒。取值范围：1-10 > 修改分片时长会影响已录制内容的时移和回看服务，请谨慎修改！
    *
    * @return $this
    */
    public function setSegmentDurationSeconds($segmentDurationSeconds)
    {
        $this->container['segmentDurationSeconds'] = $segmentDurationSeconds;
        return $this;
    }

    /**
    * Gets playlistWindowSeconds
    *  频道直播返回分片的窗口长度，为频道输出分片的时长乘以数量后得到的值。实际返回的分片数不小于3个。  单位：秒。取值范围：0 - 86400（24小时转化成秒后的取值）
    *
    * @return int|null
    */
    public function getPlaylistWindowSeconds()
    {
        return $this->container['playlistWindowSeconds'];
    }

    /**
    * Sets playlistWindowSeconds
    *
    * @param int|null $playlistWindowSeconds 频道直播返回分片的窗口长度，为频道输出分片的时长乘以数量后得到的值。实际返回的分片数不小于3个。  单位：秒。取值范围：0 - 86400（24小时转化成秒后的取值）
    *
    * @return $this
    */
    public function setPlaylistWindowSeconds($playlistWindowSeconds)
    {
        $this->container['playlistWindowSeconds'] = $playlistWindowSeconds;
        return $this;
    }

    /**
    * Gets encryption
    *  encryption
    *
    * @return \HuaweiCloud\SDK\Live\V1\Model\Encryption|null
    */
    public function getEncryption()
    {
        return $this->container['encryption'];
    }

    /**
    * Sets encryption
    *
    * @param \HuaweiCloud\SDK\Live\V1\Model\Encryption|null $encryption encryption
    *
    * @return $this
    */
    public function setEncryption($encryption)
    {
        $this->container['encryption'] = $encryption;
        return $this;
    }

    /**
    * Gets ads
    *  广告配置
    *
    * @return object|null
    */
    public function getAds()
    {
        return $this->container['ads'];
    }

    /**
    * Sets ads
    *
    * @param object|null $ads 广告配置
    *
    * @return $this
    */
    public function setAds($ads)
    {
        $this->container['ads'] = $ads;
        return $this;
    }

    /**
    * Gets extArgs
    *  其他额外参数
    *
    * @return object|null
    */
    public function getExtArgs()
    {
        return $this->container['extArgs'];
    }

    /**
    * Sets extArgs
    *
    * @param object|null $extArgs 其他额外参数
    *
    * @return $this
    */
    public function setExtArgs($extArgs)
    {
        $this->container['extArgs'] = $extArgs;
        return $this;
    }

    /**
    * Gets requestArgs
    *  requestArgs
    *
    * @return \HuaweiCloud\SDK\Live\V1\Model\PackageRequestArgs|null
    */
    public function getRequestArgs()
    {
        return $this->container['requestArgs'];
    }

    /**
    * Sets requestArgs
    *
    * @param \HuaweiCloud\SDK\Live\V1\Model\PackageRequestArgs|null $requestArgs requestArgs
    *
    * @return $this
    */
    public function setRequestArgs($requestArgs)
    {
        $this->container['requestArgs'] = $requestArgs;
        return $this;
    }

    /**
    * Gets adMarker
    *  广告标识。  DASH取值：\"xml+bin\"。
    *
    * @return string|null
    */
    public function getAdMarker()
    {
        return $this->container['adMarker'];
    }

    /**
    * Sets adMarker
    *
    * @param string|null $adMarker 广告标识。  DASH取值：\"xml+bin\"。
    *
    * @return $this
    */
    public function setAdMarker($adMarker)
    {
        $this->container['adMarker'] = $adMarker;
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

