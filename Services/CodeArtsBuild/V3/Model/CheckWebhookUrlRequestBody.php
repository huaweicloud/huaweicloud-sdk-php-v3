<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CheckWebhookUrlRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CheckWebhookUrlRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  任务ID
    * noticeType  通知的类型,分为消息，邮件，钉钉，飞书和微信
    * webhookUrl  Webhook地址
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'string',
            'noticeType' => 'string',
            'webhookUrl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  任务ID
    * noticeType  通知的类型,分为消息，邮件，钉钉，飞书和微信
    * webhookUrl  Webhook地址
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => null,
        'noticeType' => null,
        'webhookUrl' => null
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
    * jobId  任务ID
    * noticeType  通知的类型,分为消息，邮件，钉钉，飞书和微信
    * webhookUrl  Webhook地址
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'noticeType' => 'notice_type',
            'webhookUrl' => 'webhook_url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  任务ID
    * noticeType  通知的类型,分为消息，邮件，钉钉，飞书和微信
    * webhookUrl  Webhook地址
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'noticeType' => 'setNoticeType',
            'webhookUrl' => 'setWebhookUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  任务ID
    * noticeType  通知的类型,分为消息，邮件，钉钉，飞书和微信
    * webhookUrl  Webhook地址
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'noticeType' => 'getNoticeType',
            'webhookUrl' => 'getWebhookUrl'
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
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['noticeType'] = isset($data['noticeType']) ? $data['noticeType'] : null;
        $this->container['webhookUrl'] = isset($data['webhookUrl']) ? $data['webhookUrl'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['jobId'] === null) {
            $invalidProperties[] = "'jobId' can't be null";
        }
        if ($this->container['noticeType'] === null) {
            $invalidProperties[] = "'noticeType' can't be null";
        }
        if ($this->container['webhookUrl'] === null) {
            $invalidProperties[] = "'webhookUrl' can't be null";
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
    * Gets jobId
    *  任务ID
    *
    * @return string
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string $jobId 任务ID
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets noticeType
    *  通知的类型,分为消息，邮件，钉钉，飞书和微信
    *
    * @return string
    */
    public function getNoticeType()
    {
        return $this->container['noticeType'];
    }

    /**
    * Sets noticeType
    *
    * @param string $noticeType 通知的类型,分为消息，邮件，钉钉，飞书和微信
    *
    * @return $this
    */
    public function setNoticeType($noticeType)
    {
        $this->container['noticeType'] = $noticeType;
        return $this;
    }

    /**
    * Gets webhookUrl
    *  Webhook地址
    *
    * @return string
    */
    public function getWebhookUrl()
    {
        return $this->container['webhookUrl'];
    }

    /**
    * Sets webhookUrl
    *
    * @param string $webhookUrl Webhook地址
    *
    * @return $this
    */
    public function setWebhookUrl($webhookUrl)
    {
        $this->container['webhookUrl'] = $webhookUrl;
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

