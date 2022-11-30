<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RecordCallbackConfigRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RecordCallbackConfigRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * publishDomain  直播推流域名
    * app  app名称。如果需要匹配任意应用则需填写*。录制规则匹配的时候，优先精确app匹配，如果匹配不到，则匹配*
    * notifyCallbackUrl  录制回调通知url地址
    * notifyEventSubscription  订阅录制通知消息。消息类型。RECORD_NEW_FILE_START开始创建新的录制文件。RECORD_FILE_COMPLETE录制文件生成完成。RECORD_OVER录制结束。RECORD_FAILED表示录制失败。如果不填写,默认订阅RECORD_FILE_COMPLETE
    * signType  加密类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'publishDomain' => 'string',
            'app' => 'string',
            'notifyCallbackUrl' => 'string',
            'notifyEventSubscription' => 'string[]',
            'signType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * publishDomain  直播推流域名
    * app  app名称。如果需要匹配任意应用则需填写*。录制规则匹配的时候，优先精确app匹配，如果匹配不到，则匹配*
    * notifyCallbackUrl  录制回调通知url地址
    * notifyEventSubscription  订阅录制通知消息。消息类型。RECORD_NEW_FILE_START开始创建新的录制文件。RECORD_FILE_COMPLETE录制文件生成完成。RECORD_OVER录制结束。RECORD_FAILED表示录制失败。如果不填写,默认订阅RECORD_FILE_COMPLETE
    * signType  加密类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'publishDomain' => null,
        'app' => null,
        'notifyCallbackUrl' => null,
        'notifyEventSubscription' => null,
        'signType' => null
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
    * publishDomain  直播推流域名
    * app  app名称。如果需要匹配任意应用则需填写*。录制规则匹配的时候，优先精确app匹配，如果匹配不到，则匹配*
    * notifyCallbackUrl  录制回调通知url地址
    * notifyEventSubscription  订阅录制通知消息。消息类型。RECORD_NEW_FILE_START开始创建新的录制文件。RECORD_FILE_COMPLETE录制文件生成完成。RECORD_OVER录制结束。RECORD_FAILED表示录制失败。如果不填写,默认订阅RECORD_FILE_COMPLETE
    * signType  加密类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'publishDomain' => 'publish_domain',
            'app' => 'app',
            'notifyCallbackUrl' => 'notify_callback_url',
            'notifyEventSubscription' => 'notify_event_subscription',
            'signType' => 'sign_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * publishDomain  直播推流域名
    * app  app名称。如果需要匹配任意应用则需填写*。录制规则匹配的时候，优先精确app匹配，如果匹配不到，则匹配*
    * notifyCallbackUrl  录制回调通知url地址
    * notifyEventSubscription  订阅录制通知消息。消息类型。RECORD_NEW_FILE_START开始创建新的录制文件。RECORD_FILE_COMPLETE录制文件生成完成。RECORD_OVER录制结束。RECORD_FAILED表示录制失败。如果不填写,默认订阅RECORD_FILE_COMPLETE
    * signType  加密类型
    *
    * @var string[]
    */
    protected static $setters = [
            'publishDomain' => 'setPublishDomain',
            'app' => 'setApp',
            'notifyCallbackUrl' => 'setNotifyCallbackUrl',
            'notifyEventSubscription' => 'setNotifyEventSubscription',
            'signType' => 'setSignType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * publishDomain  直播推流域名
    * app  app名称。如果需要匹配任意应用则需填写*。录制规则匹配的时候，优先精确app匹配，如果匹配不到，则匹配*
    * notifyCallbackUrl  录制回调通知url地址
    * notifyEventSubscription  订阅录制通知消息。消息类型。RECORD_NEW_FILE_START开始创建新的录制文件。RECORD_FILE_COMPLETE录制文件生成完成。RECORD_OVER录制结束。RECORD_FAILED表示录制失败。如果不填写,默认订阅RECORD_FILE_COMPLETE
    * signType  加密类型
    *
    * @var string[]
    */
    protected static $getters = [
            'publishDomain' => 'getPublishDomain',
            'app' => 'getApp',
            'notifyCallbackUrl' => 'getNotifyCallbackUrl',
            'notifyEventSubscription' => 'getNotifyEventSubscription',
            'signType' => 'getSignType'
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
    const NOTIFY_EVENT_SUBSCRIPTION_RECORD_NEW_FILE_START = 'RECORD_NEW_FILE_START';
    const NOTIFY_EVENT_SUBSCRIPTION_RECORD_FILE_COMPLETE = 'RECORD_FILE_COMPLETE';
    const NOTIFY_EVENT_SUBSCRIPTION_RECORD_OVER = 'RECORD_OVER';
    const NOTIFY_EVENT_SUBSCRIPTION_RECORD_FAILED = 'RECORD_FAILED';
    const SIGN_TYPE_MD5 = 'MD5';
    const SIGN_TYPE_HMACSHA256 = 'HMACSHA256';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getNotifyEventSubscriptionAllowableValues()
    {
        return [
            self::NOTIFY_EVENT_SUBSCRIPTION_RECORD_NEW_FILE_START,
            self::NOTIFY_EVENT_SUBSCRIPTION_RECORD_FILE_COMPLETE,
            self::NOTIFY_EVENT_SUBSCRIPTION_RECORD_OVER,
            self::NOTIFY_EVENT_SUBSCRIPTION_RECORD_FAILED,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSignTypeAllowableValues()
    {
        return [
            self::SIGN_TYPE_MD5,
            self::SIGN_TYPE_HMACSHA256,
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
        $this->container['publishDomain'] = isset($data['publishDomain']) ? $data['publishDomain'] : null;
        $this->container['app'] = isset($data['app']) ? $data['app'] : null;
        $this->container['notifyCallbackUrl'] = isset($data['notifyCallbackUrl']) ? $data['notifyCallbackUrl'] : null;
        $this->container['notifyEventSubscription'] = isset($data['notifyEventSubscription']) ? $data['notifyEventSubscription'] : null;
        $this->container['signType'] = isset($data['signType']) ? $data['signType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['publishDomain'] === null) {
            $invalidProperties[] = "'publishDomain' can't be null";
        }
            if ((mb_strlen($this->container['publishDomain']) > 256)) {
                $invalidProperties[] = "invalid value for 'publishDomain', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['publishDomain']) < 1)) {
                $invalidProperties[] = "invalid value for 'publishDomain', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['app'] === null) {
            $invalidProperties[] = "'app' can't be null";
        }
            if ((mb_strlen($this->container['app']) > 128)) {
                $invalidProperties[] = "invalid value for 'app', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['app']) < 1)) {
                $invalidProperties[] = "invalid value for 'app', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['notifyCallbackUrl']) && (mb_strlen($this->container['notifyCallbackUrl']) > 1024)) {
                $invalidProperties[] = "invalid value for 'notifyCallbackUrl', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['notifyCallbackUrl']) && (mb_strlen($this->container['notifyCallbackUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'notifyCallbackUrl', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getSignTypeAllowableValues();
                if (!is_null($this->container['signType']) && !in_array($this->container['signType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'signType', must be one of '%s'",
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
    * Gets publishDomain
    *  直播推流域名
    *
    * @return string
    */
    public function getPublishDomain()
    {
        return $this->container['publishDomain'];
    }

    /**
    * Sets publishDomain
    *
    * @param string $publishDomain 直播推流域名
    *
    * @return $this
    */
    public function setPublishDomain($publishDomain)
    {
        $this->container['publishDomain'] = $publishDomain;
        return $this;
    }

    /**
    * Gets app
    *  app名称。如果需要匹配任意应用则需填写*。录制规则匹配的时候，优先精确app匹配，如果匹配不到，则匹配*
    *
    * @return string
    */
    public function getApp()
    {
        return $this->container['app'];
    }

    /**
    * Sets app
    *
    * @param string $app app名称。如果需要匹配任意应用则需填写*。录制规则匹配的时候，优先精确app匹配，如果匹配不到，则匹配*
    *
    * @return $this
    */
    public function setApp($app)
    {
        $this->container['app'] = $app;
        return $this;
    }

    /**
    * Gets notifyCallbackUrl
    *  录制回调通知url地址
    *
    * @return string|null
    */
    public function getNotifyCallbackUrl()
    {
        return $this->container['notifyCallbackUrl'];
    }

    /**
    * Sets notifyCallbackUrl
    *
    * @param string|null $notifyCallbackUrl 录制回调通知url地址
    *
    * @return $this
    */
    public function setNotifyCallbackUrl($notifyCallbackUrl)
    {
        $this->container['notifyCallbackUrl'] = $notifyCallbackUrl;
        return $this;
    }

    /**
    * Gets notifyEventSubscription
    *  订阅录制通知消息。消息类型。RECORD_NEW_FILE_START开始创建新的录制文件。RECORD_FILE_COMPLETE录制文件生成完成。RECORD_OVER录制结束。RECORD_FAILED表示录制失败。如果不填写,默认订阅RECORD_FILE_COMPLETE
    *
    * @return string[]|null
    */
    public function getNotifyEventSubscription()
    {
        return $this->container['notifyEventSubscription'];
    }

    /**
    * Sets notifyEventSubscription
    *
    * @param string[]|null $notifyEventSubscription 订阅录制通知消息。消息类型。RECORD_NEW_FILE_START开始创建新的录制文件。RECORD_FILE_COMPLETE录制文件生成完成。RECORD_OVER录制结束。RECORD_FAILED表示录制失败。如果不填写,默认订阅RECORD_FILE_COMPLETE
    *
    * @return $this
    */
    public function setNotifyEventSubscription($notifyEventSubscription)
    {
        $this->container['notifyEventSubscription'] = $notifyEventSubscription;
        return $this;
    }

    /**
    * Gets signType
    *  加密类型
    *
    * @return string|null
    */
    public function getSignType()
    {
        return $this->container['signType'];
    }

    /**
    * Sets signType
    *
    * @param string|null $signType 加密类型
    *
    * @return $this
    */
    public function setSignType($signType)
    {
        $this->container['signType'] = $signType;
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

