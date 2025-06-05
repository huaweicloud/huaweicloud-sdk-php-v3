<?php

namespace HuaweiCloud\SDK\Eg\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CheckPutEventsResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CheckPutEventsResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * channelId  事件通道id
    * sourceName  事件源名称
    * checkResult  发送事件是否成功检查结果
    * checkDetail  发送事件是否成功检查明细
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'channelId' => 'string',
            'sourceName' => 'string',
            'checkResult' => 'bool',
            'checkDetail' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * channelId  事件通道id
    * sourceName  事件源名称
    * checkResult  发送事件是否成功检查结果
    * checkDetail  发送事件是否成功检查明细
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'channelId' => null,
        'sourceName' => null,
        'checkResult' => null,
        'checkDetail' => null
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
    * channelId  事件通道id
    * sourceName  事件源名称
    * checkResult  发送事件是否成功检查结果
    * checkDetail  发送事件是否成功检查明细
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'channelId' => 'channel_id',
            'sourceName' => 'source_name',
            'checkResult' => 'check_result',
            'checkDetail' => 'check_detail'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * channelId  事件通道id
    * sourceName  事件源名称
    * checkResult  发送事件是否成功检查结果
    * checkDetail  发送事件是否成功检查明细
    *
    * @var string[]
    */
    protected static $setters = [
            'channelId' => 'setChannelId',
            'sourceName' => 'setSourceName',
            'checkResult' => 'setCheckResult',
            'checkDetail' => 'setCheckDetail'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * channelId  事件通道id
    * sourceName  事件源名称
    * checkResult  发送事件是否成功检查结果
    * checkDetail  发送事件是否成功检查明细
    *
    * @var string[]
    */
    protected static $getters = [
            'channelId' => 'getChannelId',
            'sourceName' => 'getSourceName',
            'checkResult' => 'getCheckResult',
            'checkDetail' => 'getCheckDetail'
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
        $this->container['channelId'] = isset($data['channelId']) ? $data['channelId'] : null;
        $this->container['sourceName'] = isset($data['sourceName']) ? $data['sourceName'] : null;
        $this->container['checkResult'] = isset($data['checkResult']) ? $data['checkResult'] : null;
        $this->container['checkDetail'] = isset($data['checkDetail']) ? $data['checkDetail'] : null;
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
    * Gets channelId
    *  事件通道id
    *
    * @return string|null
    */
    public function getChannelId()
    {
        return $this->container['channelId'];
    }

    /**
    * Sets channelId
    *
    * @param string|null $channelId 事件通道id
    *
    * @return $this
    */
    public function setChannelId($channelId)
    {
        $this->container['channelId'] = $channelId;
        return $this;
    }

    /**
    * Gets sourceName
    *  事件源名称
    *
    * @return string|null
    */
    public function getSourceName()
    {
        return $this->container['sourceName'];
    }

    /**
    * Sets sourceName
    *
    * @param string|null $sourceName 事件源名称
    *
    * @return $this
    */
    public function setSourceName($sourceName)
    {
        $this->container['sourceName'] = $sourceName;
        return $this;
    }

    /**
    * Gets checkResult
    *  发送事件是否成功检查结果
    *
    * @return bool|null
    */
    public function getCheckResult()
    {
        return $this->container['checkResult'];
    }

    /**
    * Sets checkResult
    *
    * @param bool|null $checkResult 发送事件是否成功检查结果
    *
    * @return $this
    */
    public function setCheckResult($checkResult)
    {
        $this->container['checkResult'] = $checkResult;
        return $this;
    }

    /**
    * Gets checkDetail
    *  发送事件是否成功检查明细
    *
    * @return string|null
    */
    public function getCheckDetail()
    {
        return $this->container['checkDetail'];
    }

    /**
    * Sets checkDetail
    *
    * @param string|null $checkDetail 发送事件是否成功检查明细
    *
    * @return $this
    */
    public function setCheckDetail($checkDetail)
    {
        $this->container['checkDetail'] = $checkDetail;
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

