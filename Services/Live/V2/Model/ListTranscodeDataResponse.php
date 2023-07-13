<?php

namespace HuaweiCloud\SDK\Live\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListTranscodeDataResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListTranscodeDataResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * transcodeDataList  采样数据列表。
    * summaryList  指定时间区间内各转码规格转码时长总和。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'transcodeDataList' => '\HuaweiCloud\SDK\Live\V2\Model\TranscodeData[]',
            'summaryList' => '\HuaweiCloud\SDK\Live\V2\Model\TranscodeSummary[]',
            'xRequestId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * transcodeDataList  采样数据列表。
    * summaryList  指定时间区间内各转码规格转码时长总和。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'transcodeDataList' => null,
        'summaryList' => null,
        'xRequestId' => null
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
    * transcodeDataList  采样数据列表。
    * summaryList  指定时间区间内各转码规格转码时长总和。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'transcodeDataList' => 'transcode_data_list',
            'summaryList' => 'summary_list',
            'xRequestId' => 'X-Request-Id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * transcodeDataList  采样数据列表。
    * summaryList  指定时间区间内各转码规格转码时长总和。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $setters = [
            'transcodeDataList' => 'setTranscodeDataList',
            'summaryList' => 'setSummaryList',
            'xRequestId' => 'setXRequestId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * transcodeDataList  采样数据列表。
    * summaryList  指定时间区间内各转码规格转码时长总和。
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $getters = [
            'transcodeDataList' => 'getTranscodeDataList',
            'summaryList' => 'getSummaryList',
            'xRequestId' => 'getXRequestId'
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
        $this->container['transcodeDataList'] = isset($data['transcodeDataList']) ? $data['transcodeDataList'] : null;
        $this->container['summaryList'] = isset($data['summaryList']) ? $data['summaryList'] : null;
        $this->container['xRequestId'] = isset($data['xRequestId']) ? $data['xRequestId'] : null;
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
    * Gets transcodeDataList
    *  采样数据列表。
    *
    * @return \HuaweiCloud\SDK\Live\V2\Model\TranscodeData[]|null
    */
    public function getTranscodeDataList()
    {
        return $this->container['transcodeDataList'];
    }

    /**
    * Sets transcodeDataList
    *
    * @param \HuaweiCloud\SDK\Live\V2\Model\TranscodeData[]|null $transcodeDataList 采样数据列表。
    *
    * @return $this
    */
    public function setTranscodeDataList($transcodeDataList)
    {
        $this->container['transcodeDataList'] = $transcodeDataList;
        return $this;
    }

    /**
    * Gets summaryList
    *  指定时间区间内各转码规格转码时长总和。
    *
    * @return \HuaweiCloud\SDK\Live\V2\Model\TranscodeSummary[]|null
    */
    public function getSummaryList()
    {
        return $this->container['summaryList'];
    }

    /**
    * Sets summaryList
    *
    * @param \HuaweiCloud\SDK\Live\V2\Model\TranscodeSummary[]|null $summaryList 指定时间区间内各转码规格转码时长总和。
    *
    * @return $this
    */
    public function setSummaryList($summaryList)
    {
        $this->container['summaryList'] = $summaryList;
        return $this;
    }

    /**
    * Gets xRequestId
    *  xRequestId
    *
    * @return string|null
    */
    public function getXRequestId()
    {
        return $this->container['xRequestId'];
    }

    /**
    * Sets xRequestId
    *
    * @param string|null $xRequestId xRequestId
    *
    * @return $this
    */
    public function setXRequestId($xRequestId)
    {
        $this->container['xRequestId'] = $xRequestId;
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

