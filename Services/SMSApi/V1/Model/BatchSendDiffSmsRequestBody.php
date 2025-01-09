<?php

namespace HuaweiCloud\SDK\SMSApi\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchSendDiffSmsRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchSendDiffSmsRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * from  短信发送方的号码
    * statusCallback  SP的回调地址，用于单条接收短信状态报告
    * smsContent  短信内容
    * extend  扩展参数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'from' => 'string',
            'statusCallback' => 'string',
            'smsContent' => '\HuaweiCloud\SDK\SMSApi\V1\Model\SmsContent[]',
            'extend' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * from  短信发送方的号码
    * statusCallback  SP的回调地址，用于单条接收短信状态报告
    * smsContent  短信内容
    * extend  扩展参数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'from' => null,
        'statusCallback' => null,
        'smsContent' => null,
        'extend' => null
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
    * from  短信发送方的号码
    * statusCallback  SP的回调地址，用于单条接收短信状态报告
    * smsContent  短信内容
    * extend  扩展参数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'from' => 'from',
            'statusCallback' => 'statusCallback',
            'smsContent' => 'smsContent',
            'extend' => 'extend'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * from  短信发送方的号码
    * statusCallback  SP的回调地址，用于单条接收短信状态报告
    * smsContent  短信内容
    * extend  扩展参数
    *
    * @var string[]
    */
    protected static $setters = [
            'from' => 'setFrom',
            'statusCallback' => 'setStatusCallback',
            'smsContent' => 'setSmsContent',
            'extend' => 'setExtend'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * from  短信发送方的号码
    * statusCallback  SP的回调地址，用于单条接收短信状态报告
    * smsContent  短信内容
    * extend  扩展参数
    *
    * @var string[]
    */
    protected static $getters = [
            'from' => 'getFrom',
            'statusCallback' => 'getStatusCallback',
            'smsContent' => 'getSmsContent',
            'extend' => 'getExtend'
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
        $this->container['from'] = isset($data['from']) ? $data['from'] : null;
        $this->container['statusCallback'] = isset($data['statusCallback']) ? $data['statusCallback'] : null;
        $this->container['smsContent'] = isset($data['smsContent']) ? $data['smsContent'] : null;
        $this->container['extend'] = isset($data['extend']) ? $data['extend'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['from']) && (mb_strlen($this->container['from']) > 21)) {
                $invalidProperties[] = "invalid value for 'from', the character length must be smaller than or equal to 21.";
            }
            if (!is_null($this->container['from']) && (mb_strlen($this->container['from']) < 1)) {
                $invalidProperties[] = "invalid value for 'from', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['statusCallback']) && (mb_strlen($this->container['statusCallback']) > 1024)) {
                $invalidProperties[] = "invalid value for 'statusCallback', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['statusCallback']) && (mb_strlen($this->container['statusCallback']) < 1)) {
                $invalidProperties[] = "invalid value for 'statusCallback', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['extend']) && (mb_strlen($this->container['extend']) > 128)) {
                $invalidProperties[] = "invalid value for 'extend', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['extend']) && (mb_strlen($this->container['extend']) < 1)) {
                $invalidProperties[] = "invalid value for 'extend', the character length must be bigger than or equal to 1.";
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
    * Gets from
    *  短信发送方的号码
    *
    * @return string|null
    */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
    * Sets from
    *
    * @param string|null $from 短信发送方的号码
    *
    * @return $this
    */
    public function setFrom($from)
    {
        $this->container['from'] = $from;
        return $this;
    }

    /**
    * Gets statusCallback
    *  SP的回调地址，用于单条接收短信状态报告
    *
    * @return string|null
    */
    public function getStatusCallback()
    {
        return $this->container['statusCallback'];
    }

    /**
    * Sets statusCallback
    *
    * @param string|null $statusCallback SP的回调地址，用于单条接收短信状态报告
    *
    * @return $this
    */
    public function setStatusCallback($statusCallback)
    {
        $this->container['statusCallback'] = $statusCallback;
        return $this;
    }

    /**
    * Gets smsContent
    *  短信内容
    *
    * @return \HuaweiCloud\SDK\SMSApi\V1\Model\SmsContent[]|null
    */
    public function getSmsContent()
    {
        return $this->container['smsContent'];
    }

    /**
    * Sets smsContent
    *
    * @param \HuaweiCloud\SDK\SMSApi\V1\Model\SmsContent[]|null $smsContent 短信内容
    *
    * @return $this
    */
    public function setSmsContent($smsContent)
    {
        $this->container['smsContent'] = $smsContent;
        return $this;
    }

    /**
    * Gets extend
    *  扩展参数
    *
    * @return string|null
    */
    public function getExtend()
    {
        return $this->container['extend'];
    }

    /**
    * Sets extend
    *
    * @param string|null $extend 扩展参数
    *
    * @return $this
    */
    public function setExtend($extend)
    {
        $this->container['extend'] = $extend;
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

