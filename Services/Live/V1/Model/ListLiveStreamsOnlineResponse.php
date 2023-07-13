<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListLiveStreamsOnlineResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListLiveStreamsOnlineResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * totalPage  总条页数
    * totalNum  总条目数
    * offset  偏移量
    * limit  每页条目数
    * requestId  请求唯一标识
    * streams  推流统计
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'totalPage' => 'int',
            'totalNum' => 'int',
            'offset' => 'int',
            'limit' => 'int',
            'requestId' => 'string',
            'streams' => '\HuaweiCloud\SDK\Live\V1\Model\OnlineInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * totalPage  总条页数
    * totalNum  总条目数
    * offset  偏移量
    * limit  每页条目数
    * requestId  请求唯一标识
    * streams  推流统计
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'totalPage' => 'int64',
        'totalNum' => 'int64',
        'offset' => 'int64',
        'limit' => 'int64',
        'requestId' => null,
        'streams' => null
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
    * totalPage  总条页数
    * totalNum  总条目数
    * offset  偏移量
    * limit  每页条目数
    * requestId  请求唯一标识
    * streams  推流统计
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'totalPage' => 'total_page',
            'totalNum' => 'total_num',
            'offset' => 'offset',
            'limit' => 'limit',
            'requestId' => 'request_id',
            'streams' => 'streams'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * totalPage  总条页数
    * totalNum  总条目数
    * offset  偏移量
    * limit  每页条目数
    * requestId  请求唯一标识
    * streams  推流统计
    *
    * @var string[]
    */
    protected static $setters = [
            'totalPage' => 'setTotalPage',
            'totalNum' => 'setTotalNum',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'requestId' => 'setRequestId',
            'streams' => 'setStreams'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * totalPage  总条页数
    * totalNum  总条目数
    * offset  偏移量
    * limit  每页条目数
    * requestId  请求唯一标识
    * streams  推流统计
    *
    * @var string[]
    */
    protected static $getters = [
            'totalPage' => 'getTotalPage',
            'totalNum' => 'getTotalNum',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'requestId' => 'getRequestId',
            'streams' => 'getStreams'
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
        $this->container['totalPage'] = isset($data['totalPage']) ? $data['totalPage'] : null;
        $this->container['totalNum'] = isset($data['totalNum']) ? $data['totalNum'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['requestId'] = isset($data['requestId']) ? $data['requestId'] : null;
        $this->container['streams'] = isset($data['streams']) ? $data['streams'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['requestId']) && (mb_strlen($this->container['requestId']) > 36)) {
                $invalidProperties[] = "invalid value for 'requestId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['requestId']) && (mb_strlen($this->container['requestId']) < 36)) {
                $invalidProperties[] = "invalid value for 'requestId', the character length must be bigger than or equal to 36.";
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
    * Gets totalPage
    *  总条页数
    *
    * @return int|null
    */
    public function getTotalPage()
    {
        return $this->container['totalPage'];
    }

    /**
    * Sets totalPage
    *
    * @param int|null $totalPage 总条页数
    *
    * @return $this
    */
    public function setTotalPage($totalPage)
    {
        $this->container['totalPage'] = $totalPage;
        return $this;
    }

    /**
    * Gets totalNum
    *  总条目数
    *
    * @return int|null
    */
    public function getTotalNum()
    {
        return $this->container['totalNum'];
    }

    /**
    * Sets totalNum
    *
    * @param int|null $totalNum 总条目数
    *
    * @return $this
    */
    public function setTotalNum($totalNum)
    {
        $this->container['totalNum'] = $totalNum;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 偏移量
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  每页条目数
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 每页条目数
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets requestId
    *  请求唯一标识
    *
    * @return string|null
    */
    public function getRequestId()
    {
        return $this->container['requestId'];
    }

    /**
    * Sets requestId
    *
    * @param string|null $requestId 请求唯一标识
    *
    * @return $this
    */
    public function setRequestId($requestId)
    {
        $this->container['requestId'] = $requestId;
        return $this;
    }

    /**
    * Gets streams
    *  推流统计
    *
    * @return \HuaweiCloud\SDK\Live\V1\Model\OnlineInfo[]|null
    */
    public function getStreams()
    {
        return $this->container['streams'];
    }

    /**
    * Sets streams
    *
    * @param \HuaweiCloud\SDK\Live\V1\Model\OnlineInfo[]|null $streams 推流统计
    *
    * @return $this
    */
    public function setStreams($streams)
    {
        $this->container['streams'] = $streams;
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

