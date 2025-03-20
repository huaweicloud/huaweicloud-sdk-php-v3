<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PersonnelResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PersonnelResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isRootUser  该用户是否是根用户
    * dingtalkWebhook  钉钉回调
    * email  邮箱
    * id  用户id
    * mobile  手机
    * name  用户名
    * wecomWebhook  企业微信回调
    * description  描述
    * dingtalkPrivateKey  钉钉秘钥
    * msgSubscriptionStatus  短信订阅状态
    * weichatSubscriptionStatus  企业微信订阅状态
    * dingTalkSubscriptionStatus  钉钉订阅状态
    * emailSubscriptionStatus  邮箱订阅
    * callNotifySubscriptionStatus  语音订阅状态
    * sourceType  账号来源类型
    * sourceStatus  账号状态
    * larkWebhook  飞书回调
    * larkSubscriptionStatus  飞书订阅状态
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isRootUser' => 'bool',
            'dingtalkWebhook' => 'string',
            'email' => 'string',
            'id' => 'string',
            'mobile' => 'string',
            'name' => 'string',
            'wecomWebhook' => 'string',
            'description' => 'string',
            'dingtalkPrivateKey' => 'string',
            'msgSubscriptionStatus' => 'int',
            'weichatSubscriptionStatus' => 'int',
            'dingTalkSubscriptionStatus' => 'int',
            'emailSubscriptionStatus' => 'int',
            'callNotifySubscriptionStatus' => 'int',
            'sourceType' => 'string',
            'sourceStatus' => 'string',
            'larkWebhook' => 'string',
            'larkSubscriptionStatus' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isRootUser  该用户是否是根用户
    * dingtalkWebhook  钉钉回调
    * email  邮箱
    * id  用户id
    * mobile  手机
    * name  用户名
    * wecomWebhook  企业微信回调
    * description  描述
    * dingtalkPrivateKey  钉钉秘钥
    * msgSubscriptionStatus  短信订阅状态
    * weichatSubscriptionStatus  企业微信订阅状态
    * dingTalkSubscriptionStatus  钉钉订阅状态
    * emailSubscriptionStatus  邮箱订阅
    * callNotifySubscriptionStatus  语音订阅状态
    * sourceType  账号来源类型
    * sourceStatus  账号状态
    * larkWebhook  飞书回调
    * larkSubscriptionStatus  飞书订阅状态
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isRootUser' => null,
        'dingtalkWebhook' => null,
        'email' => null,
        'id' => null,
        'mobile' => null,
        'name' => null,
        'wecomWebhook' => null,
        'description' => null,
        'dingtalkPrivateKey' => null,
        'msgSubscriptionStatus' => null,
        'weichatSubscriptionStatus' => null,
        'dingTalkSubscriptionStatus' => null,
        'emailSubscriptionStatus' => null,
        'callNotifySubscriptionStatus' => null,
        'sourceType' => null,
        'sourceStatus' => null,
        'larkWebhook' => null,
        'larkSubscriptionStatus' => null
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
    * isRootUser  该用户是否是根用户
    * dingtalkWebhook  钉钉回调
    * email  邮箱
    * id  用户id
    * mobile  手机
    * name  用户名
    * wecomWebhook  企业微信回调
    * description  描述
    * dingtalkPrivateKey  钉钉秘钥
    * msgSubscriptionStatus  短信订阅状态
    * weichatSubscriptionStatus  企业微信订阅状态
    * dingTalkSubscriptionStatus  钉钉订阅状态
    * emailSubscriptionStatus  邮箱订阅
    * callNotifySubscriptionStatus  语音订阅状态
    * sourceType  账号来源类型
    * sourceStatus  账号状态
    * larkWebhook  飞书回调
    * larkSubscriptionStatus  飞书订阅状态
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isRootUser' => 'is_root_user',
            'dingtalkWebhook' => 'dingtalk_webhook',
            'email' => 'email',
            'id' => 'id',
            'mobile' => 'mobile',
            'name' => 'name',
            'wecomWebhook' => 'wecom_webhook',
            'description' => 'description',
            'dingtalkPrivateKey' => 'dingtalk_private_key',
            'msgSubscriptionStatus' => 'msg_subscription_status',
            'weichatSubscriptionStatus' => 'weichat_subscription_status',
            'dingTalkSubscriptionStatus' => 'ding_talk_subscription_status',
            'emailSubscriptionStatus' => 'email_subscription_status',
            'callNotifySubscriptionStatus' => 'call_notify_subscription_status',
            'sourceType' => 'source_type',
            'sourceStatus' => 'source_status',
            'larkWebhook' => 'lark_webhook',
            'larkSubscriptionStatus' => 'lark_subscription_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isRootUser  该用户是否是根用户
    * dingtalkWebhook  钉钉回调
    * email  邮箱
    * id  用户id
    * mobile  手机
    * name  用户名
    * wecomWebhook  企业微信回调
    * description  描述
    * dingtalkPrivateKey  钉钉秘钥
    * msgSubscriptionStatus  短信订阅状态
    * weichatSubscriptionStatus  企业微信订阅状态
    * dingTalkSubscriptionStatus  钉钉订阅状态
    * emailSubscriptionStatus  邮箱订阅
    * callNotifySubscriptionStatus  语音订阅状态
    * sourceType  账号来源类型
    * sourceStatus  账号状态
    * larkWebhook  飞书回调
    * larkSubscriptionStatus  飞书订阅状态
    *
    * @var string[]
    */
    protected static $setters = [
            'isRootUser' => 'setIsRootUser',
            'dingtalkWebhook' => 'setDingtalkWebhook',
            'email' => 'setEmail',
            'id' => 'setId',
            'mobile' => 'setMobile',
            'name' => 'setName',
            'wecomWebhook' => 'setWecomWebhook',
            'description' => 'setDescription',
            'dingtalkPrivateKey' => 'setDingtalkPrivateKey',
            'msgSubscriptionStatus' => 'setMsgSubscriptionStatus',
            'weichatSubscriptionStatus' => 'setWeichatSubscriptionStatus',
            'dingTalkSubscriptionStatus' => 'setDingTalkSubscriptionStatus',
            'emailSubscriptionStatus' => 'setEmailSubscriptionStatus',
            'callNotifySubscriptionStatus' => 'setCallNotifySubscriptionStatus',
            'sourceType' => 'setSourceType',
            'sourceStatus' => 'setSourceStatus',
            'larkWebhook' => 'setLarkWebhook',
            'larkSubscriptionStatus' => 'setLarkSubscriptionStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isRootUser  该用户是否是根用户
    * dingtalkWebhook  钉钉回调
    * email  邮箱
    * id  用户id
    * mobile  手机
    * name  用户名
    * wecomWebhook  企业微信回调
    * description  描述
    * dingtalkPrivateKey  钉钉秘钥
    * msgSubscriptionStatus  短信订阅状态
    * weichatSubscriptionStatus  企业微信订阅状态
    * dingTalkSubscriptionStatus  钉钉订阅状态
    * emailSubscriptionStatus  邮箱订阅
    * callNotifySubscriptionStatus  语音订阅状态
    * sourceType  账号来源类型
    * sourceStatus  账号状态
    * larkWebhook  飞书回调
    * larkSubscriptionStatus  飞书订阅状态
    *
    * @var string[]
    */
    protected static $getters = [
            'isRootUser' => 'getIsRootUser',
            'dingtalkWebhook' => 'getDingtalkWebhook',
            'email' => 'getEmail',
            'id' => 'getId',
            'mobile' => 'getMobile',
            'name' => 'getName',
            'wecomWebhook' => 'getWecomWebhook',
            'description' => 'getDescription',
            'dingtalkPrivateKey' => 'getDingtalkPrivateKey',
            'msgSubscriptionStatus' => 'getMsgSubscriptionStatus',
            'weichatSubscriptionStatus' => 'getWeichatSubscriptionStatus',
            'dingTalkSubscriptionStatus' => 'getDingTalkSubscriptionStatus',
            'emailSubscriptionStatus' => 'getEmailSubscriptionStatus',
            'callNotifySubscriptionStatus' => 'getCallNotifySubscriptionStatus',
            'sourceType' => 'getSourceType',
            'sourceStatus' => 'getSourceStatus',
            'larkWebhook' => 'getLarkWebhook',
            'larkSubscriptionStatus' => 'getLarkSubscriptionStatus'
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
        $this->container['isRootUser'] = isset($data['isRootUser']) ? $data['isRootUser'] : null;
        $this->container['dingtalkWebhook'] = isset($data['dingtalkWebhook']) ? $data['dingtalkWebhook'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['mobile'] = isset($data['mobile']) ? $data['mobile'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['wecomWebhook'] = isset($data['wecomWebhook']) ? $data['wecomWebhook'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['dingtalkPrivateKey'] = isset($data['dingtalkPrivateKey']) ? $data['dingtalkPrivateKey'] : null;
        $this->container['msgSubscriptionStatus'] = isset($data['msgSubscriptionStatus']) ? $data['msgSubscriptionStatus'] : null;
        $this->container['weichatSubscriptionStatus'] = isset($data['weichatSubscriptionStatus']) ? $data['weichatSubscriptionStatus'] : null;
        $this->container['dingTalkSubscriptionStatus'] = isset($data['dingTalkSubscriptionStatus']) ? $data['dingTalkSubscriptionStatus'] : null;
        $this->container['emailSubscriptionStatus'] = isset($data['emailSubscriptionStatus']) ? $data['emailSubscriptionStatus'] : null;
        $this->container['callNotifySubscriptionStatus'] = isset($data['callNotifySubscriptionStatus']) ? $data['callNotifySubscriptionStatus'] : null;
        $this->container['sourceType'] = isset($data['sourceType']) ? $data['sourceType'] : null;
        $this->container['sourceStatus'] = isset($data['sourceStatus']) ? $data['sourceStatus'] : null;
        $this->container['larkWebhook'] = isset($data['larkWebhook']) ? $data['larkWebhook'] : null;
        $this->container['larkSubscriptionStatus'] = isset($data['larkSubscriptionStatus']) ? $data['larkSubscriptionStatus'] : null;
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
    * Gets isRootUser
    *  该用户是否是根用户
    *
    * @return bool|null
    */
    public function getIsRootUser()
    {
        return $this->container['isRootUser'];
    }

    /**
    * Sets isRootUser
    *
    * @param bool|null $isRootUser 该用户是否是根用户
    *
    * @return $this
    */
    public function setIsRootUser($isRootUser)
    {
        $this->container['isRootUser'] = $isRootUser;
        return $this;
    }

    /**
    * Gets dingtalkWebhook
    *  钉钉回调
    *
    * @return string|null
    */
    public function getDingtalkWebhook()
    {
        return $this->container['dingtalkWebhook'];
    }

    /**
    * Sets dingtalkWebhook
    *
    * @param string|null $dingtalkWebhook 钉钉回调
    *
    * @return $this
    */
    public function setDingtalkWebhook($dingtalkWebhook)
    {
        $this->container['dingtalkWebhook'] = $dingtalkWebhook;
        return $this;
    }

    /**
    * Gets email
    *  邮箱
    *
    * @return string|null
    */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
    * Sets email
    *
    * @param string|null $email 邮箱
    *
    * @return $this
    */
    public function setEmail($email)
    {
        $this->container['email'] = $email;
        return $this;
    }

    /**
    * Gets id
    *  用户id
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
    * @param string|null $id 用户id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets mobile
    *  手机
    *
    * @return string|null
    */
    public function getMobile()
    {
        return $this->container['mobile'];
    }

    /**
    * Sets mobile
    *
    * @param string|null $mobile 手机
    *
    * @return $this
    */
    public function setMobile($mobile)
    {
        $this->container['mobile'] = $mobile;
        return $this;
    }

    /**
    * Gets name
    *  用户名
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 用户名
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets wecomWebhook
    *  企业微信回调
    *
    * @return string|null
    */
    public function getWecomWebhook()
    {
        return $this->container['wecomWebhook'];
    }

    /**
    * Sets wecomWebhook
    *
    * @param string|null $wecomWebhook 企业微信回调
    *
    * @return $this
    */
    public function setWecomWebhook($wecomWebhook)
    {
        $this->container['wecomWebhook'] = $wecomWebhook;
        return $this;
    }

    /**
    * Gets description
    *  描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets dingtalkPrivateKey
    *  钉钉秘钥
    *
    * @return string|null
    */
    public function getDingtalkPrivateKey()
    {
        return $this->container['dingtalkPrivateKey'];
    }

    /**
    * Sets dingtalkPrivateKey
    *
    * @param string|null $dingtalkPrivateKey 钉钉秘钥
    *
    * @return $this
    */
    public function setDingtalkPrivateKey($dingtalkPrivateKey)
    {
        $this->container['dingtalkPrivateKey'] = $dingtalkPrivateKey;
        return $this;
    }

    /**
    * Gets msgSubscriptionStatus
    *  短信订阅状态
    *
    * @return int|null
    */
    public function getMsgSubscriptionStatus()
    {
        return $this->container['msgSubscriptionStatus'];
    }

    /**
    * Sets msgSubscriptionStatus
    *
    * @param int|null $msgSubscriptionStatus 短信订阅状态
    *
    * @return $this
    */
    public function setMsgSubscriptionStatus($msgSubscriptionStatus)
    {
        $this->container['msgSubscriptionStatus'] = $msgSubscriptionStatus;
        return $this;
    }

    /**
    * Gets weichatSubscriptionStatus
    *  企业微信订阅状态
    *
    * @return int|null
    */
    public function getWeichatSubscriptionStatus()
    {
        return $this->container['weichatSubscriptionStatus'];
    }

    /**
    * Sets weichatSubscriptionStatus
    *
    * @param int|null $weichatSubscriptionStatus 企业微信订阅状态
    *
    * @return $this
    */
    public function setWeichatSubscriptionStatus($weichatSubscriptionStatus)
    {
        $this->container['weichatSubscriptionStatus'] = $weichatSubscriptionStatus;
        return $this;
    }

    /**
    * Gets dingTalkSubscriptionStatus
    *  钉钉订阅状态
    *
    * @return int|null
    */
    public function getDingTalkSubscriptionStatus()
    {
        return $this->container['dingTalkSubscriptionStatus'];
    }

    /**
    * Sets dingTalkSubscriptionStatus
    *
    * @param int|null $dingTalkSubscriptionStatus 钉钉订阅状态
    *
    * @return $this
    */
    public function setDingTalkSubscriptionStatus($dingTalkSubscriptionStatus)
    {
        $this->container['dingTalkSubscriptionStatus'] = $dingTalkSubscriptionStatus;
        return $this;
    }

    /**
    * Gets emailSubscriptionStatus
    *  邮箱订阅
    *
    * @return int|null
    */
    public function getEmailSubscriptionStatus()
    {
        return $this->container['emailSubscriptionStatus'];
    }

    /**
    * Sets emailSubscriptionStatus
    *
    * @param int|null $emailSubscriptionStatus 邮箱订阅
    *
    * @return $this
    */
    public function setEmailSubscriptionStatus($emailSubscriptionStatus)
    {
        $this->container['emailSubscriptionStatus'] = $emailSubscriptionStatus;
        return $this;
    }

    /**
    * Gets callNotifySubscriptionStatus
    *  语音订阅状态
    *
    * @return int|null
    */
    public function getCallNotifySubscriptionStatus()
    {
        return $this->container['callNotifySubscriptionStatus'];
    }

    /**
    * Sets callNotifySubscriptionStatus
    *
    * @param int|null $callNotifySubscriptionStatus 语音订阅状态
    *
    * @return $this
    */
    public function setCallNotifySubscriptionStatus($callNotifySubscriptionStatus)
    {
        $this->container['callNotifySubscriptionStatus'] = $callNotifySubscriptionStatus;
        return $this;
    }

    /**
    * Gets sourceType
    *  账号来源类型
    *
    * @return string|null
    */
    public function getSourceType()
    {
        return $this->container['sourceType'];
    }

    /**
    * Sets sourceType
    *
    * @param string|null $sourceType 账号来源类型
    *
    * @return $this
    */
    public function setSourceType($sourceType)
    {
        $this->container['sourceType'] = $sourceType;
        return $this;
    }

    /**
    * Gets sourceStatus
    *  账号状态
    *
    * @return string|null
    */
    public function getSourceStatus()
    {
        return $this->container['sourceStatus'];
    }

    /**
    * Sets sourceStatus
    *
    * @param string|null $sourceStatus 账号状态
    *
    * @return $this
    */
    public function setSourceStatus($sourceStatus)
    {
        $this->container['sourceStatus'] = $sourceStatus;
        return $this;
    }

    /**
    * Gets larkWebhook
    *  飞书回调
    *
    * @return string|null
    */
    public function getLarkWebhook()
    {
        return $this->container['larkWebhook'];
    }

    /**
    * Sets larkWebhook
    *
    * @param string|null $larkWebhook 飞书回调
    *
    * @return $this
    */
    public function setLarkWebhook($larkWebhook)
    {
        $this->container['larkWebhook'] = $larkWebhook;
        return $this;
    }

    /**
    * Gets larkSubscriptionStatus
    *  飞书订阅状态
    *
    * @return int|null
    */
    public function getLarkSubscriptionStatus()
    {
        return $this->container['larkSubscriptionStatus'];
    }

    /**
    * Sets larkSubscriptionStatus
    *
    * @param int|null $larkSubscriptionStatus 飞书订阅状态
    *
    * @return $this
    */
    public function setLarkSubscriptionStatus($larkSubscriptionStatus)
    {
        $this->container['larkSubscriptionStatus'] = $larkSubscriptionStatus;
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

