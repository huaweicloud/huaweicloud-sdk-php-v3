<?php

namespace HuaweiCloud\SDK\CloudRTC\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AppCallbackUrl implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AppCallbackUrl';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * url  回调通知url地址，url必须以http://或https://开头，需要支持POST调用。
    * authKey  回调秘钥，主要用于鉴权。如果不设置或者为空，则回调不会增加鉴权头域字段。
    * notifyEventSubscription  订阅云端录制通知消息。  取值如下：  - RECORD_NEW_FILE_START：开始创建新的录制文件。  - RECORD_FILE_COMPLETE：录制文件生成完成。
    * updateTime  更新时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'url' => 'string',
            'authKey' => 'string',
            'notifyEventSubscription' => 'string[]',
            'updateTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * url  回调通知url地址，url必须以http://或https://开头，需要支持POST调用。
    * authKey  回调秘钥，主要用于鉴权。如果不设置或者为空，则回调不会增加鉴权头域字段。
    * notifyEventSubscription  订阅云端录制通知消息。  取值如下：  - RECORD_NEW_FILE_START：开始创建新的录制文件。  - RECORD_FILE_COMPLETE：录制文件生成完成。
    * updateTime  更新时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'url' => null,
        'authKey' => null,
        'notifyEventSubscription' => null,
        'updateTime' => null
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
    * url  回调通知url地址，url必须以http://或https://开头，需要支持POST调用。
    * authKey  回调秘钥，主要用于鉴权。如果不设置或者为空，则回调不会增加鉴权头域字段。
    * notifyEventSubscription  订阅云端录制通知消息。  取值如下：  - RECORD_NEW_FILE_START：开始创建新的录制文件。  - RECORD_FILE_COMPLETE：录制文件生成完成。
    * updateTime  更新时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'url' => 'url',
            'authKey' => 'auth_key',
            'notifyEventSubscription' => 'notify_event_subscription',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * url  回调通知url地址，url必须以http://或https://开头，需要支持POST调用。
    * authKey  回调秘钥，主要用于鉴权。如果不设置或者为空，则回调不会增加鉴权头域字段。
    * notifyEventSubscription  订阅云端录制通知消息。  取值如下：  - RECORD_NEW_FILE_START：开始创建新的录制文件。  - RECORD_FILE_COMPLETE：录制文件生成完成。
    * updateTime  更新时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC。
    *
    * @var string[]
    */
    protected static $setters = [
            'url' => 'setUrl',
            'authKey' => 'setAuthKey',
            'notifyEventSubscription' => 'setNotifyEventSubscription',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * url  回调通知url地址，url必须以http://或https://开头，需要支持POST调用。
    * authKey  回调秘钥，主要用于鉴权。如果不设置或者为空，则回调不会增加鉴权头域字段。
    * notifyEventSubscription  订阅云端录制通知消息。  取值如下：  - RECORD_NEW_FILE_START：开始创建新的录制文件。  - RECORD_FILE_COMPLETE：录制文件生成完成。
    * updateTime  更新时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC。
    *
    * @var string[]
    */
    protected static $getters = [
            'url' => 'getUrl',
            'authKey' => 'getAuthKey',
            'notifyEventSubscription' => 'getNotifyEventSubscription',
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
        $this->container['url'] = isset($data['url']) ? $data['url'] : '';
        $this->container['authKey'] = isset($data['authKey']) ? $data['authKey'] : '';
        $this->container['notifyEventSubscription'] = isset($data['notifyEventSubscription']) ? $data['notifyEventSubscription'] : null;
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
            if (!is_null($this->container['url']) && (mb_strlen($this->container['url']) > 1024)) {
                $invalidProperties[] = "invalid value for 'url', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['url']) && (mb_strlen($this->container['url']) < 0)) {
                $invalidProperties[] = "invalid value for 'url', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['authKey']) && (mb_strlen($this->container['authKey']) > 64)) {
                $invalidProperties[] = "invalid value for 'authKey', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['authKey']) && (mb_strlen($this->container['authKey']) < 0)) {
                $invalidProperties[] = "invalid value for 'authKey', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) > 64)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be bigger than or equal to 0.";
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
    *  回调通知url地址，url必须以http://或https://开头，需要支持POST调用。
    *
    * @return string|null
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string|null $url 回调通知url地址，url必须以http://或https://开头，需要支持POST调用。
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets authKey
    *  回调秘钥，主要用于鉴权。如果不设置或者为空，则回调不会增加鉴权头域字段。
    *
    * @return string|null
    */
    public function getAuthKey()
    {
        return $this->container['authKey'];
    }

    /**
    * Sets authKey
    *
    * @param string|null $authKey 回调秘钥，主要用于鉴权。如果不设置或者为空，则回调不会增加鉴权头域字段。
    *
    * @return $this
    */
    public function setAuthKey($authKey)
    {
        $this->container['authKey'] = $authKey;
        return $this;
    }

    /**
    * Gets notifyEventSubscription
    *  订阅云端录制通知消息。  取值如下：  - RECORD_NEW_FILE_START：开始创建新的录制文件。  - RECORD_FILE_COMPLETE：录制文件生成完成。
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
    * @param string[]|null $notifyEventSubscription 订阅云端录制通知消息。  取值如下：  - RECORD_NEW_FILE_START：开始创建新的录制文件。  - RECORD_FILE_COMPLETE：录制文件生成完成。
    *
    * @return $this
    */
    public function setNotifyEventSubscription($notifyEventSubscription)
    {
        $this->container['notifyEventSubscription'] = $notifyEventSubscription;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC。
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime 更新时间，形如“2006-01-02T15:04:05.075Z”，时区为：UTC。
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

