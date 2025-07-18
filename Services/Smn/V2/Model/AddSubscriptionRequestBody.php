<?php

namespace HuaweiCloud\SDK\Smn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddSubscriptionRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddSubscriptionRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * protocol  不同协议对应不同的endpoint（接受消息的接入点）。 目前支持的协议包括：  “email”：邮件传输协议，endpoint为邮箱地址。  “sms”：短信传输协议，endpoint为手机号码。  “functionstage”：FunctionGraph（函数）传输协议，endpoint为一个函数。  “functiongraph”：FunctionGraph（工作流）传输协议，endpoint为由一组函数编排成的工作流。  “http”、“https”：HTTP/HTTPS传输协议，endpoint为URL。  “callnotify”：语音通知传输协议，endpoint为手机号码。  “wechat”：微信群机器人传输协议。  “dingding”：钉钉群机器人传输协议。  “feishu”：飞书群机器人传输协议。  “welink”：welink群机器人传输协议。  “dingTalkBot”：个人钉钉传输协议。
    * endpoint  说明：  http协议，接入点必须以“http://”开头，且必须为公网的IPV4地址、IPV6地址或域名地址。不支持使用内网地址，包括但不限于IPv4私有地址、IPv6本地地址、回环地址等。需确保该地址可通过公网路由访问，避免因防火墙、NAT或DNS配置导致不可达。  https协议，接入点必须以“https://”开头，且必须为公网的IPV4地址、IPV6地址或域名地址。不支持使用内网地址，包括但不限于IPv4私有地址、IPv6本地地址、回环地址等。需确保该地址可通过公网路由访问，避免因防火墙、NAT或DNS配置导致不可达。  email协议，接入点必须是邮件地址。  sms协议，接入点必须是一个电话号码。  functionstage协议，接入点必须是一个函数。  functiongraph协议，接入点必须是一个函数工作流。  callnotify协议，接入点必须是一个电话号码。  dingding协议，接入点必须是一个钉钉自定义群机器人的地址，或添加了钉钉企业内部机器人的群组openConversationId。添加钉钉企业内部机器人对应的群组openConversationId时，该字段不能以“http://”或“https://”为开头。  wechat协议，接入点必须是一个微信群机器人的地址。  feishu协议，接入点必须是一个飞书群机器人的地址。  welink协议，接入点必须是一个welink的群号。  dingTalkBot协议，接入点必须是一个钉钉企业用户的userId。
    * remark  备注。最大支持128字节，约42个中文，必须是UTF-8编码的字符串，否则无法正常显示中文。
    * extension  extension
    * subscriptions  当需要批量创建订阅时，需要传入该字段。SMN支持一次最多创建50个订阅。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'protocol' => 'string',
            'endpoint' => 'string',
            'remark' => 'string',
            'extension' => '\HuaweiCloud\SDK\Smn\V2\Model\SubscriptionExtension',
            'subscriptions' => '\HuaweiCloud\SDK\Smn\V2\Model\BatchAddSubscriptionsRequestBody[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * protocol  不同协议对应不同的endpoint（接受消息的接入点）。 目前支持的协议包括：  “email”：邮件传输协议，endpoint为邮箱地址。  “sms”：短信传输协议，endpoint为手机号码。  “functionstage”：FunctionGraph（函数）传输协议，endpoint为一个函数。  “functiongraph”：FunctionGraph（工作流）传输协议，endpoint为由一组函数编排成的工作流。  “http”、“https”：HTTP/HTTPS传输协议，endpoint为URL。  “callnotify”：语音通知传输协议，endpoint为手机号码。  “wechat”：微信群机器人传输协议。  “dingding”：钉钉群机器人传输协议。  “feishu”：飞书群机器人传输协议。  “welink”：welink群机器人传输协议。  “dingTalkBot”：个人钉钉传输协议。
    * endpoint  说明：  http协议，接入点必须以“http://”开头，且必须为公网的IPV4地址、IPV6地址或域名地址。不支持使用内网地址，包括但不限于IPv4私有地址、IPv6本地地址、回环地址等。需确保该地址可通过公网路由访问，避免因防火墙、NAT或DNS配置导致不可达。  https协议，接入点必须以“https://”开头，且必须为公网的IPV4地址、IPV6地址或域名地址。不支持使用内网地址，包括但不限于IPv4私有地址、IPv6本地地址、回环地址等。需确保该地址可通过公网路由访问，避免因防火墙、NAT或DNS配置导致不可达。  email协议，接入点必须是邮件地址。  sms协议，接入点必须是一个电话号码。  functionstage协议，接入点必须是一个函数。  functiongraph协议，接入点必须是一个函数工作流。  callnotify协议，接入点必须是一个电话号码。  dingding协议，接入点必须是一个钉钉自定义群机器人的地址，或添加了钉钉企业内部机器人的群组openConversationId。添加钉钉企业内部机器人对应的群组openConversationId时，该字段不能以“http://”或“https://”为开头。  wechat协议，接入点必须是一个微信群机器人的地址。  feishu协议，接入点必须是一个飞书群机器人的地址。  welink协议，接入点必须是一个welink的群号。  dingTalkBot协议，接入点必须是一个钉钉企业用户的userId。
    * remark  备注。最大支持128字节，约42个中文，必须是UTF-8编码的字符串，否则无法正常显示中文。
    * extension  extension
    * subscriptions  当需要批量创建订阅时，需要传入该字段。SMN支持一次最多创建50个订阅。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'protocol' => null,
        'endpoint' => null,
        'remark' => null,
        'extension' => null,
        'subscriptions' => null
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
    * protocol  不同协议对应不同的endpoint（接受消息的接入点）。 目前支持的协议包括：  “email”：邮件传输协议，endpoint为邮箱地址。  “sms”：短信传输协议，endpoint为手机号码。  “functionstage”：FunctionGraph（函数）传输协议，endpoint为一个函数。  “functiongraph”：FunctionGraph（工作流）传输协议，endpoint为由一组函数编排成的工作流。  “http”、“https”：HTTP/HTTPS传输协议，endpoint为URL。  “callnotify”：语音通知传输协议，endpoint为手机号码。  “wechat”：微信群机器人传输协议。  “dingding”：钉钉群机器人传输协议。  “feishu”：飞书群机器人传输协议。  “welink”：welink群机器人传输协议。  “dingTalkBot”：个人钉钉传输协议。
    * endpoint  说明：  http协议，接入点必须以“http://”开头，且必须为公网的IPV4地址、IPV6地址或域名地址。不支持使用内网地址，包括但不限于IPv4私有地址、IPv6本地地址、回环地址等。需确保该地址可通过公网路由访问，避免因防火墙、NAT或DNS配置导致不可达。  https协议，接入点必须以“https://”开头，且必须为公网的IPV4地址、IPV6地址或域名地址。不支持使用内网地址，包括但不限于IPv4私有地址、IPv6本地地址、回环地址等。需确保该地址可通过公网路由访问，避免因防火墙、NAT或DNS配置导致不可达。  email协议，接入点必须是邮件地址。  sms协议，接入点必须是一个电话号码。  functionstage协议，接入点必须是一个函数。  functiongraph协议，接入点必须是一个函数工作流。  callnotify协议，接入点必须是一个电话号码。  dingding协议，接入点必须是一个钉钉自定义群机器人的地址，或添加了钉钉企业内部机器人的群组openConversationId。添加钉钉企业内部机器人对应的群组openConversationId时，该字段不能以“http://”或“https://”为开头。  wechat协议，接入点必须是一个微信群机器人的地址。  feishu协议，接入点必须是一个飞书群机器人的地址。  welink协议，接入点必须是一个welink的群号。  dingTalkBot协议，接入点必须是一个钉钉企业用户的userId。
    * remark  备注。最大支持128字节，约42个中文，必须是UTF-8编码的字符串，否则无法正常显示中文。
    * extension  extension
    * subscriptions  当需要批量创建订阅时，需要传入该字段。SMN支持一次最多创建50个订阅。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'protocol' => 'protocol',
            'endpoint' => 'endpoint',
            'remark' => 'remark',
            'extension' => 'extension',
            'subscriptions' => 'subscriptions'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * protocol  不同协议对应不同的endpoint（接受消息的接入点）。 目前支持的协议包括：  “email”：邮件传输协议，endpoint为邮箱地址。  “sms”：短信传输协议，endpoint为手机号码。  “functionstage”：FunctionGraph（函数）传输协议，endpoint为一个函数。  “functiongraph”：FunctionGraph（工作流）传输协议，endpoint为由一组函数编排成的工作流。  “http”、“https”：HTTP/HTTPS传输协议，endpoint为URL。  “callnotify”：语音通知传输协议，endpoint为手机号码。  “wechat”：微信群机器人传输协议。  “dingding”：钉钉群机器人传输协议。  “feishu”：飞书群机器人传输协议。  “welink”：welink群机器人传输协议。  “dingTalkBot”：个人钉钉传输协议。
    * endpoint  说明：  http协议，接入点必须以“http://”开头，且必须为公网的IPV4地址、IPV6地址或域名地址。不支持使用内网地址，包括但不限于IPv4私有地址、IPv6本地地址、回环地址等。需确保该地址可通过公网路由访问，避免因防火墙、NAT或DNS配置导致不可达。  https协议，接入点必须以“https://”开头，且必须为公网的IPV4地址、IPV6地址或域名地址。不支持使用内网地址，包括但不限于IPv4私有地址、IPv6本地地址、回环地址等。需确保该地址可通过公网路由访问，避免因防火墙、NAT或DNS配置导致不可达。  email协议，接入点必须是邮件地址。  sms协议，接入点必须是一个电话号码。  functionstage协议，接入点必须是一个函数。  functiongraph协议，接入点必须是一个函数工作流。  callnotify协议，接入点必须是一个电话号码。  dingding协议，接入点必须是一个钉钉自定义群机器人的地址，或添加了钉钉企业内部机器人的群组openConversationId。添加钉钉企业内部机器人对应的群组openConversationId时，该字段不能以“http://”或“https://”为开头。  wechat协议，接入点必须是一个微信群机器人的地址。  feishu协议，接入点必须是一个飞书群机器人的地址。  welink协议，接入点必须是一个welink的群号。  dingTalkBot协议，接入点必须是一个钉钉企业用户的userId。
    * remark  备注。最大支持128字节，约42个中文，必须是UTF-8编码的字符串，否则无法正常显示中文。
    * extension  extension
    * subscriptions  当需要批量创建订阅时，需要传入该字段。SMN支持一次最多创建50个订阅。
    *
    * @var string[]
    */
    protected static $setters = [
            'protocol' => 'setProtocol',
            'endpoint' => 'setEndpoint',
            'remark' => 'setRemark',
            'extension' => 'setExtension',
            'subscriptions' => 'setSubscriptions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * protocol  不同协议对应不同的endpoint（接受消息的接入点）。 目前支持的协议包括：  “email”：邮件传输协议，endpoint为邮箱地址。  “sms”：短信传输协议，endpoint为手机号码。  “functionstage”：FunctionGraph（函数）传输协议，endpoint为一个函数。  “functiongraph”：FunctionGraph（工作流）传输协议，endpoint为由一组函数编排成的工作流。  “http”、“https”：HTTP/HTTPS传输协议，endpoint为URL。  “callnotify”：语音通知传输协议，endpoint为手机号码。  “wechat”：微信群机器人传输协议。  “dingding”：钉钉群机器人传输协议。  “feishu”：飞书群机器人传输协议。  “welink”：welink群机器人传输协议。  “dingTalkBot”：个人钉钉传输协议。
    * endpoint  说明：  http协议，接入点必须以“http://”开头，且必须为公网的IPV4地址、IPV6地址或域名地址。不支持使用内网地址，包括但不限于IPv4私有地址、IPv6本地地址、回环地址等。需确保该地址可通过公网路由访问，避免因防火墙、NAT或DNS配置导致不可达。  https协议，接入点必须以“https://”开头，且必须为公网的IPV4地址、IPV6地址或域名地址。不支持使用内网地址，包括但不限于IPv4私有地址、IPv6本地地址、回环地址等。需确保该地址可通过公网路由访问，避免因防火墙、NAT或DNS配置导致不可达。  email协议，接入点必须是邮件地址。  sms协议，接入点必须是一个电话号码。  functionstage协议，接入点必须是一个函数。  functiongraph协议，接入点必须是一个函数工作流。  callnotify协议，接入点必须是一个电话号码。  dingding协议，接入点必须是一个钉钉自定义群机器人的地址，或添加了钉钉企业内部机器人的群组openConversationId。添加钉钉企业内部机器人对应的群组openConversationId时，该字段不能以“http://”或“https://”为开头。  wechat协议，接入点必须是一个微信群机器人的地址。  feishu协议，接入点必须是一个飞书群机器人的地址。  welink协议，接入点必须是一个welink的群号。  dingTalkBot协议，接入点必须是一个钉钉企业用户的userId。
    * remark  备注。最大支持128字节，约42个中文，必须是UTF-8编码的字符串，否则无法正常显示中文。
    * extension  extension
    * subscriptions  当需要批量创建订阅时，需要传入该字段。SMN支持一次最多创建50个订阅。
    *
    * @var string[]
    */
    protected static $getters = [
            'protocol' => 'getProtocol',
            'endpoint' => 'getEndpoint',
            'remark' => 'getRemark',
            'extension' => 'getExtension',
            'subscriptions' => 'getSubscriptions'
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
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['endpoint'] = isset($data['endpoint']) ? $data['endpoint'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
        $this->container['extension'] = isset($data['extension']) ? $data['extension'] : null;
        $this->container['subscriptions'] = isset($data['subscriptions']) ? $data['subscriptions'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['protocol'] === null) {
            $invalidProperties[] = "'protocol' can't be null";
        }
        if ($this->container['endpoint'] === null) {
            $invalidProperties[] = "'endpoint' can't be null";
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
    * Gets protocol
    *  不同协议对应不同的endpoint（接受消息的接入点）。 目前支持的协议包括：  “email”：邮件传输协议，endpoint为邮箱地址。  “sms”：短信传输协议，endpoint为手机号码。  “functionstage”：FunctionGraph（函数）传输协议，endpoint为一个函数。  “functiongraph”：FunctionGraph（工作流）传输协议，endpoint为由一组函数编排成的工作流。  “http”、“https”：HTTP/HTTPS传输协议，endpoint为URL。  “callnotify”：语音通知传输协议，endpoint为手机号码。  “wechat”：微信群机器人传输协议。  “dingding”：钉钉群机器人传输协议。  “feishu”：飞书群机器人传输协议。  “welink”：welink群机器人传输协议。  “dingTalkBot”：个人钉钉传输协议。
    *
    * @return string
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param string $protocol 不同协议对应不同的endpoint（接受消息的接入点）。 目前支持的协议包括：  “email”：邮件传输协议，endpoint为邮箱地址。  “sms”：短信传输协议，endpoint为手机号码。  “functionstage”：FunctionGraph（函数）传输协议，endpoint为一个函数。  “functiongraph”：FunctionGraph（工作流）传输协议，endpoint为由一组函数编排成的工作流。  “http”、“https”：HTTP/HTTPS传输协议，endpoint为URL。  “callnotify”：语音通知传输协议，endpoint为手机号码。  “wechat”：微信群机器人传输协议。  “dingding”：钉钉群机器人传输协议。  “feishu”：飞书群机器人传输协议。  “welink”：welink群机器人传输协议。  “dingTalkBot”：个人钉钉传输协议。
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets endpoint
    *  说明：  http协议，接入点必须以“http://”开头，且必须为公网的IPV4地址、IPV6地址或域名地址。不支持使用内网地址，包括但不限于IPv4私有地址、IPv6本地地址、回环地址等。需确保该地址可通过公网路由访问，避免因防火墙、NAT或DNS配置导致不可达。  https协议，接入点必须以“https://”开头，且必须为公网的IPV4地址、IPV6地址或域名地址。不支持使用内网地址，包括但不限于IPv4私有地址、IPv6本地地址、回环地址等。需确保该地址可通过公网路由访问，避免因防火墙、NAT或DNS配置导致不可达。  email协议，接入点必须是邮件地址。  sms协议，接入点必须是一个电话号码。  functionstage协议，接入点必须是一个函数。  functiongraph协议，接入点必须是一个函数工作流。  callnotify协议，接入点必须是一个电话号码。  dingding协议，接入点必须是一个钉钉自定义群机器人的地址，或添加了钉钉企业内部机器人的群组openConversationId。添加钉钉企业内部机器人对应的群组openConversationId时，该字段不能以“http://”或“https://”为开头。  wechat协议，接入点必须是一个微信群机器人的地址。  feishu协议，接入点必须是一个飞书群机器人的地址。  welink协议，接入点必须是一个welink的群号。  dingTalkBot协议，接入点必须是一个钉钉企业用户的userId。
    *
    * @return string
    */
    public function getEndpoint()
    {
        return $this->container['endpoint'];
    }

    /**
    * Sets endpoint
    *
    * @param string $endpoint 说明：  http协议，接入点必须以“http://”开头，且必须为公网的IPV4地址、IPV6地址或域名地址。不支持使用内网地址，包括但不限于IPv4私有地址、IPv6本地地址、回环地址等。需确保该地址可通过公网路由访问，避免因防火墙、NAT或DNS配置导致不可达。  https协议，接入点必须以“https://”开头，且必须为公网的IPV4地址、IPV6地址或域名地址。不支持使用内网地址，包括但不限于IPv4私有地址、IPv6本地地址、回环地址等。需确保该地址可通过公网路由访问，避免因防火墙、NAT或DNS配置导致不可达。  email协议，接入点必须是邮件地址。  sms协议，接入点必须是一个电话号码。  functionstage协议，接入点必须是一个函数。  functiongraph协议，接入点必须是一个函数工作流。  callnotify协议，接入点必须是一个电话号码。  dingding协议，接入点必须是一个钉钉自定义群机器人的地址，或添加了钉钉企业内部机器人的群组openConversationId。添加钉钉企业内部机器人对应的群组openConversationId时，该字段不能以“http://”或“https://”为开头。  wechat协议，接入点必须是一个微信群机器人的地址。  feishu协议，接入点必须是一个飞书群机器人的地址。  welink协议，接入点必须是一个welink的群号。  dingTalkBot协议，接入点必须是一个钉钉企业用户的userId。
    *
    * @return $this
    */
    public function setEndpoint($endpoint)
    {
        $this->container['endpoint'] = $endpoint;
        return $this;
    }

    /**
    * Gets remark
    *  备注。最大支持128字节，约42个中文，必须是UTF-8编码的字符串，否则无法正常显示中文。
    *
    * @return string|null
    */
    public function getRemark()
    {
        return $this->container['remark'];
    }

    /**
    * Sets remark
    *
    * @param string|null $remark 备注。最大支持128字节，约42个中文，必须是UTF-8编码的字符串，否则无法正常显示中文。
    *
    * @return $this
    */
    public function setRemark($remark)
    {
        $this->container['remark'] = $remark;
        return $this;
    }

    /**
    * Gets extension
    *  extension
    *
    * @return \HuaweiCloud\SDK\Smn\V2\Model\SubscriptionExtension|null
    */
    public function getExtension()
    {
        return $this->container['extension'];
    }

    /**
    * Sets extension
    *
    * @param \HuaweiCloud\SDK\Smn\V2\Model\SubscriptionExtension|null $extension extension
    *
    * @return $this
    */
    public function setExtension($extension)
    {
        $this->container['extension'] = $extension;
        return $this;
    }

    /**
    * Gets subscriptions
    *  当需要批量创建订阅时，需要传入该字段。SMN支持一次最多创建50个订阅。
    *
    * @return \HuaweiCloud\SDK\Smn\V2\Model\BatchAddSubscriptionsRequestBody[]|null
    */
    public function getSubscriptions()
    {
        return $this->container['subscriptions'];
    }

    /**
    * Sets subscriptions
    *
    * @param \HuaweiCloud\SDK\Smn\V2\Model\BatchAddSubscriptionsRequestBody[]|null $subscriptions 当需要批量创建订阅时，需要传入该字段。SMN支持一次最多创建50个订阅。
    *
    * @return $this
    */
    public function setSubscriptions($subscriptions)
    {
        $this->container['subscriptions'] = $subscriptions;
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

