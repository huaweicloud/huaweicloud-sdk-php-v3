<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RecordCallbackConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RecordCallbackConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  配置id，由服务端返回。创建或修改的时候不携带
    * publishDomain  直播推流域名
    * app  app名称。如果匹配任意需填写为*。录制规则匹配的时候，优先精确app匹配，如果匹配不到，则匹配*
    * notifyCallbackUrl  录制回调通知url地址
    * notifyEventSubscription  订阅录制通知消息。消息类型。RECORD_NEW_FILE_START开始创建新的录制文件。RECORD_FILE_COMPLETE录制文件生成完成。RECORD_OVER录制结束。RECORD_FAILED表示录制失败。如果不填写,默认订阅RECORD_FILE_COMPLETE
    * onDemandCallbackUrl  按需录制回调url地址
    * createTime  创建时间，格式：yyyy-mm-ddThh:mm:ssZ，UTC时间。 在查询的时候返回
    * updateTime  修改时间，格式：yyyy-mm-ddThh:mm:ssZ，UTC时间。 在查询的时候返回
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'publishDomain' => 'string',
            'app' => 'string',
            'notifyCallbackUrl' => 'string',
            'notifyEventSubscription' => 'string[]',
            'onDemandCallbackUrl' => 'string',
            'createTime' => '\DateTime',
            'updateTime' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  配置id，由服务端返回。创建或修改的时候不携带
    * publishDomain  直播推流域名
    * app  app名称。如果匹配任意需填写为*。录制规则匹配的时候，优先精确app匹配，如果匹配不到，则匹配*
    * notifyCallbackUrl  录制回调通知url地址
    * notifyEventSubscription  订阅录制通知消息。消息类型。RECORD_NEW_FILE_START开始创建新的录制文件。RECORD_FILE_COMPLETE录制文件生成完成。RECORD_OVER录制结束。RECORD_FAILED表示录制失败。如果不填写,默认订阅RECORD_FILE_COMPLETE
    * onDemandCallbackUrl  按需录制回调url地址
    * createTime  创建时间，格式：yyyy-mm-ddThh:mm:ssZ，UTC时间。 在查询的时候返回
    * updateTime  修改时间，格式：yyyy-mm-ddThh:mm:ssZ，UTC时间。 在查询的时候返回
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'publishDomain' => null,
        'app' => null,
        'notifyCallbackUrl' => null,
        'notifyEventSubscription' => null,
        'onDemandCallbackUrl' => null,
        'createTime' => 'date',
        'updateTime' => 'date'
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
    * id  配置id，由服务端返回。创建或修改的时候不携带
    * publishDomain  直播推流域名
    * app  app名称。如果匹配任意需填写为*。录制规则匹配的时候，优先精确app匹配，如果匹配不到，则匹配*
    * notifyCallbackUrl  录制回调通知url地址
    * notifyEventSubscription  订阅录制通知消息。消息类型。RECORD_NEW_FILE_START开始创建新的录制文件。RECORD_FILE_COMPLETE录制文件生成完成。RECORD_OVER录制结束。RECORD_FAILED表示录制失败。如果不填写,默认订阅RECORD_FILE_COMPLETE
    * onDemandCallbackUrl  按需录制回调url地址
    * createTime  创建时间，格式：yyyy-mm-ddThh:mm:ssZ，UTC时间。 在查询的时候返回
    * updateTime  修改时间，格式：yyyy-mm-ddThh:mm:ssZ，UTC时间。 在查询的时候返回
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'publishDomain' => 'publish_domain',
            'app' => 'app',
            'notifyCallbackUrl' => 'notify_callback_url',
            'notifyEventSubscription' => 'notify_event_subscription',
            'onDemandCallbackUrl' => 'on_demand_callback_url',
            'createTime' => 'create_time',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  配置id，由服务端返回。创建或修改的时候不携带
    * publishDomain  直播推流域名
    * app  app名称。如果匹配任意需填写为*。录制规则匹配的时候，优先精确app匹配，如果匹配不到，则匹配*
    * notifyCallbackUrl  录制回调通知url地址
    * notifyEventSubscription  订阅录制通知消息。消息类型。RECORD_NEW_FILE_START开始创建新的录制文件。RECORD_FILE_COMPLETE录制文件生成完成。RECORD_OVER录制结束。RECORD_FAILED表示录制失败。如果不填写,默认订阅RECORD_FILE_COMPLETE
    * onDemandCallbackUrl  按需录制回调url地址
    * createTime  创建时间，格式：yyyy-mm-ddThh:mm:ssZ，UTC时间。 在查询的时候返回
    * updateTime  修改时间，格式：yyyy-mm-ddThh:mm:ssZ，UTC时间。 在查询的时候返回
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'publishDomain' => 'setPublishDomain',
            'app' => 'setApp',
            'notifyCallbackUrl' => 'setNotifyCallbackUrl',
            'notifyEventSubscription' => 'setNotifyEventSubscription',
            'onDemandCallbackUrl' => 'setOnDemandCallbackUrl',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  配置id，由服务端返回。创建或修改的时候不携带
    * publishDomain  直播推流域名
    * app  app名称。如果匹配任意需填写为*。录制规则匹配的时候，优先精确app匹配，如果匹配不到，则匹配*
    * notifyCallbackUrl  录制回调通知url地址
    * notifyEventSubscription  订阅录制通知消息。消息类型。RECORD_NEW_FILE_START开始创建新的录制文件。RECORD_FILE_COMPLETE录制文件生成完成。RECORD_OVER录制结束。RECORD_FAILED表示录制失败。如果不填写,默认订阅RECORD_FILE_COMPLETE
    * onDemandCallbackUrl  按需录制回调url地址
    * createTime  创建时间，格式：yyyy-mm-ddThh:mm:ssZ，UTC时间。 在查询的时候返回
    * updateTime  修改时间，格式：yyyy-mm-ddThh:mm:ssZ，UTC时间。 在查询的时候返回
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'publishDomain' => 'getPublishDomain',
            'app' => 'getApp',
            'notifyCallbackUrl' => 'getNotifyCallbackUrl',
            'notifyEventSubscription' => 'getNotifyEventSubscription',
            'onDemandCallbackUrl' => 'getOnDemandCallbackUrl',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['publishDomain'] = isset($data['publishDomain']) ? $data['publishDomain'] : null;
        $this->container['app'] = isset($data['app']) ? $data['app'] : null;
        $this->container['notifyCallbackUrl'] = isset($data['notifyCallbackUrl']) ? $data['notifyCallbackUrl'] : null;
        $this->container['notifyEventSubscription'] = isset($data['notifyEventSubscription']) ? $data['notifyEventSubscription'] : null;
        $this->container['onDemandCallbackUrl'] = isset($data['onDemandCallbackUrl']) ? $data['onDemandCallbackUrl'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 128)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
            }
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
            if (!is_null($this->container['onDemandCallbackUrl']) && (mb_strlen($this->container['onDemandCallbackUrl']) > 256)) {
                $invalidProperties[] = "invalid value for 'onDemandCallbackUrl', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['onDemandCallbackUrl']) && (mb_strlen($this->container['onDemandCallbackUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'onDemandCallbackUrl', the character length must be bigger than or equal to 1.";
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
    * Gets id
    *  配置id，由服务端返回。创建或修改的时候不携带
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 配置id，由服务端返回。创建或修改的时候不携带
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
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
    *  app名称。如果匹配任意需填写为*。录制规则匹配的时候，优先精确app匹配，如果匹配不到，则匹配*
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
    * @param string $app app名称。如果匹配任意需填写为*。录制规则匹配的时候，优先精确app匹配，如果匹配不到，则匹配*
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
    * Gets onDemandCallbackUrl
    *  按需录制回调url地址
    *
    * @return string|null
    */
    public function getOnDemandCallbackUrl()
    {
        return $this->container['onDemandCallbackUrl'];
    }

    /**
    * Sets onDemandCallbackUrl
    *
    * @param string|null $onDemandCallbackUrl 按需录制回调url地址
    *
    * @return $this
    */
    public function setOnDemandCallbackUrl($onDemandCallbackUrl)
    {
        $this->container['onDemandCallbackUrl'] = $onDemandCallbackUrl;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间，格式：yyyy-mm-ddThh:mm:ssZ，UTC时间。 在查询的时候返回
    *
    * @return \DateTime|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param \DateTime|null $createTime 创建时间，格式：yyyy-mm-ddThh:mm:ssZ，UTC时间。 在查询的时候返回
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  修改时间，格式：yyyy-mm-ddThh:mm:ssZ，UTC时间。 在查询的时候返回
    *
    * @return \DateTime|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param \DateTime|null $updateTime 修改时间，格式：yyyy-mm-ddThh:mm:ssZ，UTC时间。 在查询的时候返回
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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

