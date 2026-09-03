<?php

namespace HuaweiCloud\SDK\Smnglobal\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateSubscriptionUserRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateSubscriptionUserRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  订阅用户名称。
    * group  订阅用户分组。每个订阅分组只能包含中英文、数字([0-9])、下划线(_)，下划线不能出现在开始或结尾，下划线不能连续出现，长度为1到32个字符。
    * http  http
    * https  https
    * sms  sms
    * email  email
    * callnotify  callnotify
    * wechat  wechat
    * dingding  dingding
    * feishu  feishu
    * welink  welink
    * dingTalkBot  dingTalkBot
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'group' => 'string[]',
            'http' => '\HuaweiCloud\SDK\Smnglobal\V2\Model\CreateSubscriptionUserRequestHttpEndpointInfo',
            'https' => '\HuaweiCloud\SDK\Smnglobal\V2\Model\CreateSubscriptionUserRequestHttpsEndpointInfo',
            'sms' => '\HuaweiCloud\SDK\Smnglobal\V2\Model\CreateSubscriptionUserRequestSmsEndpointInfo',
            'email' => '\HuaweiCloud\SDK\Smnglobal\V2\Model\CreateSubscriptionUserRequestEmailEndpointInfo',
            'callnotify' => '\HuaweiCloud\SDK\Smnglobal\V2\Model\CreateSubscriptionUserRequestCallnotifyEndpointInfo',
            'wechat' => '\HuaweiCloud\SDK\Smnglobal\V2\Model\CreateSubscriptionUserRequestWechatEndpointInfo',
            'dingding' => '\HuaweiCloud\SDK\Smnglobal\V2\Model\CreateSubscriptionUserRequestDingdingEndpointInfo',
            'feishu' => '\HuaweiCloud\SDK\Smnglobal\V2\Model\CreateSubscriptionUserRequestFeishuEndpointInfo',
            'welink' => '\HuaweiCloud\SDK\Smnglobal\V2\Model\CreateSubscriptionUserRequestWelinkEndpointInfo',
            'dingTalkBot' => '\HuaweiCloud\SDK\Smnglobal\V2\Model\CreateSubscriptionUserRequestDingTalkBotEndpointInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  订阅用户名称。
    * group  订阅用户分组。每个订阅分组只能包含中英文、数字([0-9])、下划线(_)，下划线不能出现在开始或结尾，下划线不能连续出现，长度为1到32个字符。
    * http  http
    * https  https
    * sms  sms
    * email  email
    * callnotify  callnotify
    * wechat  wechat
    * dingding  dingding
    * feishu  feishu
    * welink  welink
    * dingTalkBot  dingTalkBot
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'group' => null,
        'http' => null,
        'https' => null,
        'sms' => null,
        'email' => null,
        'callnotify' => null,
        'wechat' => null,
        'dingding' => null,
        'feishu' => null,
        'welink' => null,
        'dingTalkBot' => null
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
    * name  订阅用户名称。
    * group  订阅用户分组。每个订阅分组只能包含中英文、数字([0-9])、下划线(_)，下划线不能出现在开始或结尾，下划线不能连续出现，长度为1到32个字符。
    * http  http
    * https  https
    * sms  sms
    * email  email
    * callnotify  callnotify
    * wechat  wechat
    * dingding  dingding
    * feishu  feishu
    * welink  welink
    * dingTalkBot  dingTalkBot
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'group' => 'group',
            'http' => 'http',
            'https' => 'https',
            'sms' => 'sms',
            'email' => 'email',
            'callnotify' => 'callnotify',
            'wechat' => 'wechat',
            'dingding' => 'dingding',
            'feishu' => 'feishu',
            'welink' => 'welink',
            'dingTalkBot' => 'ding_talk_bot'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  订阅用户名称。
    * group  订阅用户分组。每个订阅分组只能包含中英文、数字([0-9])、下划线(_)，下划线不能出现在开始或结尾，下划线不能连续出现，长度为1到32个字符。
    * http  http
    * https  https
    * sms  sms
    * email  email
    * callnotify  callnotify
    * wechat  wechat
    * dingding  dingding
    * feishu  feishu
    * welink  welink
    * dingTalkBot  dingTalkBot
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'group' => 'setGroup',
            'http' => 'setHttp',
            'https' => 'setHttps',
            'sms' => 'setSms',
            'email' => 'setEmail',
            'callnotify' => 'setCallnotify',
            'wechat' => 'setWechat',
            'dingding' => 'setDingding',
            'feishu' => 'setFeishu',
            'welink' => 'setWelink',
            'dingTalkBot' => 'setDingTalkBot'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  订阅用户名称。
    * group  订阅用户分组。每个订阅分组只能包含中英文、数字([0-9])、下划线(_)，下划线不能出现在开始或结尾，下划线不能连续出现，长度为1到32个字符。
    * http  http
    * https  https
    * sms  sms
    * email  email
    * callnotify  callnotify
    * wechat  wechat
    * dingding  dingding
    * feishu  feishu
    * welink  welink
    * dingTalkBot  dingTalkBot
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'group' => 'getGroup',
            'http' => 'getHttp',
            'https' => 'getHttps',
            'sms' => 'getSms',
            'email' => 'getEmail',
            'callnotify' => 'getCallnotify',
            'wechat' => 'getWechat',
            'dingding' => 'getDingding',
            'feishu' => 'getFeishu',
            'welink' => 'getWelink',
            'dingTalkBot' => 'getDingTalkBot'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['group'] = isset($data['group']) ? $data['group'] : null;
        $this->container['http'] = isset($data['http']) ? $data['http'] : null;
        $this->container['https'] = isset($data['https']) ? $data['https'] : null;
        $this->container['sms'] = isset($data['sms']) ? $data['sms'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['callnotify'] = isset($data['callnotify']) ? $data['callnotify'] : null;
        $this->container['wechat'] = isset($data['wechat']) ? $data['wechat'] : null;
        $this->container['dingding'] = isset($data['dingding']) ? $data['dingding'] : null;
        $this->container['feishu'] = isset($data['feishu']) ? $data['feishu'] : null;
        $this->container['welink'] = isset($data['welink']) ? $data['welink'] : null;
        $this->container['dingTalkBot'] = isset($data['dingTalkBot']) ? $data['dingTalkBot'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[^+]+$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[^+]+$/.";
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
    * Gets name
    *  订阅用户名称。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 订阅用户名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets group
    *  订阅用户分组。每个订阅分组只能包含中英文、数字([0-9])、下划线(_)，下划线不能出现在开始或结尾，下划线不能连续出现，长度为1到32个字符。
    *
    * @return string[]|null
    */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
    * Sets group
    *
    * @param string[]|null $group 订阅用户分组。每个订阅分组只能包含中英文、数字([0-9])、下划线(_)，下划线不能出现在开始或结尾，下划线不能连续出现，长度为1到32个字符。
    *
    * @return $this
    */
    public function setGroup($group)
    {
        $this->container['group'] = $group;
        return $this;
    }

    /**
    * Gets http
    *  http
    *
    * @return \HuaweiCloud\SDK\Smnglobal\V2\Model\CreateSubscriptionUserRequestHttpEndpointInfo|null
    */
    public function getHttp()
    {
        return $this->container['http'];
    }

    /**
    * Sets http
    *
    * @param \HuaweiCloud\SDK\Smnglobal\V2\Model\CreateSubscriptionUserRequestHttpEndpointInfo|null $http http
    *
    * @return $this
    */
    public function setHttp($http)
    {
        $this->container['http'] = $http;
        return $this;
    }

    /**
    * Gets https
    *  https
    *
    * @return \HuaweiCloud\SDK\Smnglobal\V2\Model\CreateSubscriptionUserRequestHttpsEndpointInfo|null
    */
    public function getHttps()
    {
        return $this->container['https'];
    }

    /**
    * Sets https
    *
    * @param \HuaweiCloud\SDK\Smnglobal\V2\Model\CreateSubscriptionUserRequestHttpsEndpointInfo|null $https https
    *
    * @return $this
    */
    public function setHttps($https)
    {
        $this->container['https'] = $https;
        return $this;
    }

    /**
    * Gets sms
    *  sms
    *
    * @return \HuaweiCloud\SDK\Smnglobal\V2\Model\CreateSubscriptionUserRequestSmsEndpointInfo|null
    */
    public function getSms()
    {
        return $this->container['sms'];
    }

    /**
    * Sets sms
    *
    * @param \HuaweiCloud\SDK\Smnglobal\V2\Model\CreateSubscriptionUserRequestSmsEndpointInfo|null $sms sms
    *
    * @return $this
    */
    public function setSms($sms)
    {
        $this->container['sms'] = $sms;
        return $this;
    }

    /**
    * Gets email
    *  email
    *
    * @return \HuaweiCloud\SDK\Smnglobal\V2\Model\CreateSubscriptionUserRequestEmailEndpointInfo|null
    */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
    * Sets email
    *
    * @param \HuaweiCloud\SDK\Smnglobal\V2\Model\CreateSubscriptionUserRequestEmailEndpointInfo|null $email email
    *
    * @return $this
    */
    public function setEmail($email)
    {
        $this->container['email'] = $email;
        return $this;
    }

    /**
    * Gets callnotify
    *  callnotify
    *
    * @return \HuaweiCloud\SDK\Smnglobal\V2\Model\CreateSubscriptionUserRequestCallnotifyEndpointInfo|null
    */
    public function getCallnotify()
    {
        return $this->container['callnotify'];
    }

    /**
    * Sets callnotify
    *
    * @param \HuaweiCloud\SDK\Smnglobal\V2\Model\CreateSubscriptionUserRequestCallnotifyEndpointInfo|null $callnotify callnotify
    *
    * @return $this
    */
    public function setCallnotify($callnotify)
    {
        $this->container['callnotify'] = $callnotify;
        return $this;
    }

    /**
    * Gets wechat
    *  wechat
    *
    * @return \HuaweiCloud\SDK\Smnglobal\V2\Model\CreateSubscriptionUserRequestWechatEndpointInfo|null
    */
    public function getWechat()
    {
        return $this->container['wechat'];
    }

    /**
    * Sets wechat
    *
    * @param \HuaweiCloud\SDK\Smnglobal\V2\Model\CreateSubscriptionUserRequestWechatEndpointInfo|null $wechat wechat
    *
    * @return $this
    */
    public function setWechat($wechat)
    {
        $this->container['wechat'] = $wechat;
        return $this;
    }

    /**
    * Gets dingding
    *  dingding
    *
    * @return \HuaweiCloud\SDK\Smnglobal\V2\Model\CreateSubscriptionUserRequestDingdingEndpointInfo|null
    */
    public function getDingding()
    {
        return $this->container['dingding'];
    }

    /**
    * Sets dingding
    *
    * @param \HuaweiCloud\SDK\Smnglobal\V2\Model\CreateSubscriptionUserRequestDingdingEndpointInfo|null $dingding dingding
    *
    * @return $this
    */
    public function setDingding($dingding)
    {
        $this->container['dingding'] = $dingding;
        return $this;
    }

    /**
    * Gets feishu
    *  feishu
    *
    * @return \HuaweiCloud\SDK\Smnglobal\V2\Model\CreateSubscriptionUserRequestFeishuEndpointInfo|null
    */
    public function getFeishu()
    {
        return $this->container['feishu'];
    }

    /**
    * Sets feishu
    *
    * @param \HuaweiCloud\SDK\Smnglobal\V2\Model\CreateSubscriptionUserRequestFeishuEndpointInfo|null $feishu feishu
    *
    * @return $this
    */
    public function setFeishu($feishu)
    {
        $this->container['feishu'] = $feishu;
        return $this;
    }

    /**
    * Gets welink
    *  welink
    *
    * @return \HuaweiCloud\SDK\Smnglobal\V2\Model\CreateSubscriptionUserRequestWelinkEndpointInfo|null
    */
    public function getWelink()
    {
        return $this->container['welink'];
    }

    /**
    * Sets welink
    *
    * @param \HuaweiCloud\SDK\Smnglobal\V2\Model\CreateSubscriptionUserRequestWelinkEndpointInfo|null $welink welink
    *
    * @return $this
    */
    public function setWelink($welink)
    {
        $this->container['welink'] = $welink;
        return $this;
    }

    /**
    * Gets dingTalkBot
    *  dingTalkBot
    *
    * @return \HuaweiCloud\SDK\Smnglobal\V2\Model\CreateSubscriptionUserRequestDingTalkBotEndpointInfo|null
    */
    public function getDingTalkBot()
    {
        return $this->container['dingTalkBot'];
    }

    /**
    * Sets dingTalkBot
    *
    * @param \HuaweiCloud\SDK\Smnglobal\V2\Model\CreateSubscriptionUserRequestDingTalkBotEndpointInfo|null $dingTalkBot dingTalkBot
    *
    * @return $this
    */
    public function setDingTalkBot($dingTalkBot)
    {
        $this->container['dingTalkBot'] = $dingTalkBot;
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

