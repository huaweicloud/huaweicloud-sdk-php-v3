<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SmnResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SmnResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sentTime  发送时间。
    * smnNotifiedHistory  发送的通知的消息内容。
    * smnRequestId  请求smn服务的请求id。
    * smnResponseBody  调用smn服务返回的信息。
    * smnResponseCode  调用smn服务返回的http状态码。
    * smnTopic  smn的主题。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sentTime' => 'int',
            'smnNotifiedHistory' => '\HuaweiCloud\SDK\Aom\V2\Model\SmnInfo[]',
            'smnRequestId' => 'string',
            'smnResponseBody' => 'string',
            'smnResponseCode' => 'string',
            'smnTopic' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sentTime  发送时间。
    * smnNotifiedHistory  发送的通知的消息内容。
    * smnRequestId  请求smn服务的请求id。
    * smnResponseBody  调用smn服务返回的信息。
    * smnResponseCode  调用smn服务返回的http状态码。
    * smnTopic  smn的主题。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sentTime' => 'int64',
        'smnNotifiedHistory' => null,
        'smnRequestId' => null,
        'smnResponseBody' => null,
        'smnResponseCode' => null,
        'smnTopic' => null
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
    * sentTime  发送时间。
    * smnNotifiedHistory  发送的通知的消息内容。
    * smnRequestId  请求smn服务的请求id。
    * smnResponseBody  调用smn服务返回的信息。
    * smnResponseCode  调用smn服务返回的http状态码。
    * smnTopic  smn的主题。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sentTime' => 'sent_time',
            'smnNotifiedHistory' => 'smn_notified_history',
            'smnRequestId' => 'smn_request_id',
            'smnResponseBody' => 'smn_response_body',
            'smnResponseCode' => 'smn_response_code',
            'smnTopic' => 'smn_topic'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sentTime  发送时间。
    * smnNotifiedHistory  发送的通知的消息内容。
    * smnRequestId  请求smn服务的请求id。
    * smnResponseBody  调用smn服务返回的信息。
    * smnResponseCode  调用smn服务返回的http状态码。
    * smnTopic  smn的主题。
    *
    * @var string[]
    */
    protected static $setters = [
            'sentTime' => 'setSentTime',
            'smnNotifiedHistory' => 'setSmnNotifiedHistory',
            'smnRequestId' => 'setSmnRequestId',
            'smnResponseBody' => 'setSmnResponseBody',
            'smnResponseCode' => 'setSmnResponseCode',
            'smnTopic' => 'setSmnTopic'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sentTime  发送时间。
    * smnNotifiedHistory  发送的通知的消息内容。
    * smnRequestId  请求smn服务的请求id。
    * smnResponseBody  调用smn服务返回的信息。
    * smnResponseCode  调用smn服务返回的http状态码。
    * smnTopic  smn的主题。
    *
    * @var string[]
    */
    protected static $getters = [
            'sentTime' => 'getSentTime',
            'smnNotifiedHistory' => 'getSmnNotifiedHistory',
            'smnRequestId' => 'getSmnRequestId',
            'smnResponseBody' => 'getSmnResponseBody',
            'smnResponseCode' => 'getSmnResponseCode',
            'smnTopic' => 'getSmnTopic'
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
        $this->container['sentTime'] = isset($data['sentTime']) ? $data['sentTime'] : null;
        $this->container['smnNotifiedHistory'] = isset($data['smnNotifiedHistory']) ? $data['smnNotifiedHistory'] : null;
        $this->container['smnRequestId'] = isset($data['smnRequestId']) ? $data['smnRequestId'] : null;
        $this->container['smnResponseBody'] = isset($data['smnResponseBody']) ? $data['smnResponseBody'] : null;
        $this->container['smnResponseCode'] = isset($data['smnResponseCode']) ? $data['smnResponseCode'] : null;
        $this->container['smnTopic'] = isset($data['smnTopic']) ? $data['smnTopic'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['sentTime']) && ($this->container['sentTime'] > 9999999999)) {
                $invalidProperties[] = "invalid value for 'sentTime', must be smaller than or equal to 9999999999.";
            }
            if (!is_null($this->container['sentTime']) && ($this->container['sentTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'sentTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['smnRequestId']) && (mb_strlen($this->container['smnRequestId']) > 32)) {
                $invalidProperties[] = "invalid value for 'smnRequestId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['smnRequestId']) && (mb_strlen($this->container['smnRequestId']) < 32)) {
                $invalidProperties[] = "invalid value for 'smnRequestId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['smnResponseBody']) && (mb_strlen($this->container['smnResponseBody']) > 1024)) {
                $invalidProperties[] = "invalid value for 'smnResponseBody', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['smnResponseBody']) && (mb_strlen($this->container['smnResponseBody']) < 0)) {
                $invalidProperties[] = "invalid value for 'smnResponseBody', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['smnResponseCode']) && (mb_strlen($this->container['smnResponseCode']) > 3)) {
                $invalidProperties[] = "invalid value for 'smnResponseCode', the character length must be smaller than or equal to 3.";
            }
            if (!is_null($this->container['smnResponseCode']) && (mb_strlen($this->container['smnResponseCode']) < 3)) {
                $invalidProperties[] = "invalid value for 'smnResponseCode', the character length must be bigger than or equal to 3.";
            }
            if (!is_null($this->container['smnTopic']) && (mb_strlen($this->container['smnTopic']) > 100)) {
                $invalidProperties[] = "invalid value for 'smnTopic', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['smnTopic']) && (mb_strlen($this->container['smnTopic']) < 1)) {
                $invalidProperties[] = "invalid value for 'smnTopic', the character length must be bigger than or equal to 1.";
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
    * Gets sentTime
    *  发送时间。
    *
    * @return int|null
    */
    public function getSentTime()
    {
        return $this->container['sentTime'];
    }

    /**
    * Sets sentTime
    *
    * @param int|null $sentTime 发送时间。
    *
    * @return $this
    */
    public function setSentTime($sentTime)
    {
        $this->container['sentTime'] = $sentTime;
        return $this;
    }

    /**
    * Gets smnNotifiedHistory
    *  发送的通知的消息内容。
    *
    * @return \HuaweiCloud\SDK\Aom\V2\Model\SmnInfo[]|null
    */
    public function getSmnNotifiedHistory()
    {
        return $this->container['smnNotifiedHistory'];
    }

    /**
    * Sets smnNotifiedHistory
    *
    * @param \HuaweiCloud\SDK\Aom\V2\Model\SmnInfo[]|null $smnNotifiedHistory 发送的通知的消息内容。
    *
    * @return $this
    */
    public function setSmnNotifiedHistory($smnNotifiedHistory)
    {
        $this->container['smnNotifiedHistory'] = $smnNotifiedHistory;
        return $this;
    }

    /**
    * Gets smnRequestId
    *  请求smn服务的请求id。
    *
    * @return string|null
    */
    public function getSmnRequestId()
    {
        return $this->container['smnRequestId'];
    }

    /**
    * Sets smnRequestId
    *
    * @param string|null $smnRequestId 请求smn服务的请求id。
    *
    * @return $this
    */
    public function setSmnRequestId($smnRequestId)
    {
        $this->container['smnRequestId'] = $smnRequestId;
        return $this;
    }

    /**
    * Gets smnResponseBody
    *  调用smn服务返回的信息。
    *
    * @return string|null
    */
    public function getSmnResponseBody()
    {
        return $this->container['smnResponseBody'];
    }

    /**
    * Sets smnResponseBody
    *
    * @param string|null $smnResponseBody 调用smn服务返回的信息。
    *
    * @return $this
    */
    public function setSmnResponseBody($smnResponseBody)
    {
        $this->container['smnResponseBody'] = $smnResponseBody;
        return $this;
    }

    /**
    * Gets smnResponseCode
    *  调用smn服务返回的http状态码。
    *
    * @return string|null
    */
    public function getSmnResponseCode()
    {
        return $this->container['smnResponseCode'];
    }

    /**
    * Sets smnResponseCode
    *
    * @param string|null $smnResponseCode 调用smn服务返回的http状态码。
    *
    * @return $this
    */
    public function setSmnResponseCode($smnResponseCode)
    {
        $this->container['smnResponseCode'] = $smnResponseCode;
        return $this;
    }

    /**
    * Gets smnTopic
    *  smn的主题。
    *
    * @return string|null
    */
    public function getSmnTopic()
    {
        return $this->container['smnTopic'];
    }

    /**
    * Sets smnTopic
    *
    * @param string|null $smnTopic smn的主题。
    *
    * @return $this
    */
    public function setSmnTopic($smnTopic)
    {
        $this->container['smnTopic'] = $smnTopic;
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

