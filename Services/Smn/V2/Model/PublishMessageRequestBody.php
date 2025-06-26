<?php

namespace HuaweiCloud\SDK\Smn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PublishMessageRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PublishMessageRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * subject  消息标题，给邮箱订阅者发送邮件时作为邮件主题，长度不能超过512个字节。
    * message  发送的消息。消息体必须是UTF-8编码的字符串，大小至多256KB。如果订阅者是手机号码，短信长度限制为490字，超出则可能被运营商拦截。短信内容不能包含“[]”或者“【】”符号。 说明： 三种消息发送方式：message、message_structure、message_template_name  至少设置其中一个，如果同时设置，生效的优先级为 message_structure > message_template_name > message。
    * messageStructure  Json格式的字符串。支持“email”、“sms”、“http”、“https”、“functiongraph”、“functionstage”、“dingding”、“wechat”、“feishu”、“welink”、“dingTalkBot”。必须设置默认的消息“default”，当匹配不到消息协议时，按“default”中的内容发送。  - 其中，钉钉、微信、飞书、welink、dingTalkBot协议类型的消息需指定msgType字段；钉钉，微信和飞书机器人协议支持msgType为text（纯文本）和markdown（MD）格式消息，welink机器人类型暂仅支持msgType为text的纯文本消息。   - 企业微信机器人对消息长度的限制请参考[官方文档](https://developer.work.weixin.qq.com/document/path/91770)。  - 钉钉机器人协议支持通过at字段实现@群组成员。当您需要@群成员时，可以在isAtAll字段中传入布尔值，表示是否需要@群组内所有人。您可以在atMobiles字段中传入需要@的人的手机号列表，或在atUserIds字段中传入需要@的钉钉userID列表。当您使用atMobiles字段或atUserIds字段时，需要在消息内容中同时传入@对应手机号或userID的信息。展示效果请参考钉钉[官方文档](https://open.dingtalk.com/document/orgapp/custom-robots-send-group-messages)。钉钉群机器人消息限制在20000bytes以内，详情请参考[钉钉官方文档](https://open.dingtalk.com/document/orgapp/custom-robot-access)描述。  - 飞书机器人协议的markdown消息支持通过传入color字段设置标题的底色。能够支持的color字段可参考飞书[官方文档](https://open.feishu.cn/document/common-capabilities/message-card/message-cards-content/card-header)。飞书群机器人消息限制在30KB以内，详情请参考[飞书官方文档](https://feishu.apifox.cn/doc-1944903)描述。   - 个人钉钉消息对长度的限制请参考[官方文档](https://open.dingtalk.com/document/orgapp/the-robot-sends-a-group-message)。  说明： 三种消息发送方式：message、message_structure、message_template_name  至少设置其中一个，如果同时设置，生效的优先级为 message_structure > message_template_name > message。
    * messageTemplateName  消息模板名称，可通过[查询消息模板列表](ListMessageTemplates.xml)获取名称。  说明： 三种消息发送方式：message、message_structure、message_template_name  至少设置其中一个，如果同时设置，生效的优先级为 message_structure > message_template_name > message。
    * tags  tag以及替换tag的参数组成的字典。消息模板中的标签对应的值。使用消息模板方式的消息发布必须携带该参数。字典中的key为消息模板中的参数名称，不超过21个字符。字典中的value为消息模板中的参数被替换后的值，不超过1KB。
    * timeToLive  指消息在SMN系统内部的最长存留时间。超过该存留时间，系统将不再发送该消息。单位是s，变量默认值是3600s，即一小时。值为正整数且小于等于3600*24。
    * messageAttributes  消息属性列表
    * locale  语言，发送出去的消息中SMN附加系统内容的语言，若没传入，使用账号的语言。取值范围是该局点支持的语言，比如：zh-cn,en-us等
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'subject' => 'string',
            'message' => 'string',
            'messageStructure' => 'string',
            'messageTemplateName' => 'string',
            'tags' => 'map[string,string]',
            'timeToLive' => 'string',
            'messageAttributes' => '\HuaweiCloud\SDK\Smn\V2\Model\MessageAttribute[]',
            'locale' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * subject  消息标题，给邮箱订阅者发送邮件时作为邮件主题，长度不能超过512个字节。
    * message  发送的消息。消息体必须是UTF-8编码的字符串，大小至多256KB。如果订阅者是手机号码，短信长度限制为490字，超出则可能被运营商拦截。短信内容不能包含“[]”或者“【】”符号。 说明： 三种消息发送方式：message、message_structure、message_template_name  至少设置其中一个，如果同时设置，生效的优先级为 message_structure > message_template_name > message。
    * messageStructure  Json格式的字符串。支持“email”、“sms”、“http”、“https”、“functiongraph”、“functionstage”、“dingding”、“wechat”、“feishu”、“welink”、“dingTalkBot”。必须设置默认的消息“default”，当匹配不到消息协议时，按“default”中的内容发送。  - 其中，钉钉、微信、飞书、welink、dingTalkBot协议类型的消息需指定msgType字段；钉钉，微信和飞书机器人协议支持msgType为text（纯文本）和markdown（MD）格式消息，welink机器人类型暂仅支持msgType为text的纯文本消息。   - 企业微信机器人对消息长度的限制请参考[官方文档](https://developer.work.weixin.qq.com/document/path/91770)。  - 钉钉机器人协议支持通过at字段实现@群组成员。当您需要@群成员时，可以在isAtAll字段中传入布尔值，表示是否需要@群组内所有人。您可以在atMobiles字段中传入需要@的人的手机号列表，或在atUserIds字段中传入需要@的钉钉userID列表。当您使用atMobiles字段或atUserIds字段时，需要在消息内容中同时传入@对应手机号或userID的信息。展示效果请参考钉钉[官方文档](https://open.dingtalk.com/document/orgapp/custom-robots-send-group-messages)。钉钉群机器人消息限制在20000bytes以内，详情请参考[钉钉官方文档](https://open.dingtalk.com/document/orgapp/custom-robot-access)描述。  - 飞书机器人协议的markdown消息支持通过传入color字段设置标题的底色。能够支持的color字段可参考飞书[官方文档](https://open.feishu.cn/document/common-capabilities/message-card/message-cards-content/card-header)。飞书群机器人消息限制在30KB以内，详情请参考[飞书官方文档](https://feishu.apifox.cn/doc-1944903)描述。   - 个人钉钉消息对长度的限制请参考[官方文档](https://open.dingtalk.com/document/orgapp/the-robot-sends-a-group-message)。  说明： 三种消息发送方式：message、message_structure、message_template_name  至少设置其中一个，如果同时设置，生效的优先级为 message_structure > message_template_name > message。
    * messageTemplateName  消息模板名称，可通过[查询消息模板列表](ListMessageTemplates.xml)获取名称。  说明： 三种消息发送方式：message、message_structure、message_template_name  至少设置其中一个，如果同时设置，生效的优先级为 message_structure > message_template_name > message。
    * tags  tag以及替换tag的参数组成的字典。消息模板中的标签对应的值。使用消息模板方式的消息发布必须携带该参数。字典中的key为消息模板中的参数名称，不超过21个字符。字典中的value为消息模板中的参数被替换后的值，不超过1KB。
    * timeToLive  指消息在SMN系统内部的最长存留时间。超过该存留时间，系统将不再发送该消息。单位是s，变量默认值是3600s，即一小时。值为正整数且小于等于3600*24。
    * messageAttributes  消息属性列表
    * locale  语言，发送出去的消息中SMN附加系统内容的语言，若没传入，使用账号的语言。取值范围是该局点支持的语言，比如：zh-cn,en-us等
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'subject' => null,
        'message' => null,
        'messageStructure' => null,
        'messageTemplateName' => null,
        'tags' => null,
        'timeToLive' => null,
        'messageAttributes' => null,
        'locale' => null
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
    * subject  消息标题，给邮箱订阅者发送邮件时作为邮件主题，长度不能超过512个字节。
    * message  发送的消息。消息体必须是UTF-8编码的字符串，大小至多256KB。如果订阅者是手机号码，短信长度限制为490字，超出则可能被运营商拦截。短信内容不能包含“[]”或者“【】”符号。 说明： 三种消息发送方式：message、message_structure、message_template_name  至少设置其中一个，如果同时设置，生效的优先级为 message_structure > message_template_name > message。
    * messageStructure  Json格式的字符串。支持“email”、“sms”、“http”、“https”、“functiongraph”、“functionstage”、“dingding”、“wechat”、“feishu”、“welink”、“dingTalkBot”。必须设置默认的消息“default”，当匹配不到消息协议时，按“default”中的内容发送。  - 其中，钉钉、微信、飞书、welink、dingTalkBot协议类型的消息需指定msgType字段；钉钉，微信和飞书机器人协议支持msgType为text（纯文本）和markdown（MD）格式消息，welink机器人类型暂仅支持msgType为text的纯文本消息。   - 企业微信机器人对消息长度的限制请参考[官方文档](https://developer.work.weixin.qq.com/document/path/91770)。  - 钉钉机器人协议支持通过at字段实现@群组成员。当您需要@群成员时，可以在isAtAll字段中传入布尔值，表示是否需要@群组内所有人。您可以在atMobiles字段中传入需要@的人的手机号列表，或在atUserIds字段中传入需要@的钉钉userID列表。当您使用atMobiles字段或atUserIds字段时，需要在消息内容中同时传入@对应手机号或userID的信息。展示效果请参考钉钉[官方文档](https://open.dingtalk.com/document/orgapp/custom-robots-send-group-messages)。钉钉群机器人消息限制在20000bytes以内，详情请参考[钉钉官方文档](https://open.dingtalk.com/document/orgapp/custom-robot-access)描述。  - 飞书机器人协议的markdown消息支持通过传入color字段设置标题的底色。能够支持的color字段可参考飞书[官方文档](https://open.feishu.cn/document/common-capabilities/message-card/message-cards-content/card-header)。飞书群机器人消息限制在30KB以内，详情请参考[飞书官方文档](https://feishu.apifox.cn/doc-1944903)描述。   - 个人钉钉消息对长度的限制请参考[官方文档](https://open.dingtalk.com/document/orgapp/the-robot-sends-a-group-message)。  说明： 三种消息发送方式：message、message_structure、message_template_name  至少设置其中一个，如果同时设置，生效的优先级为 message_structure > message_template_name > message。
    * messageTemplateName  消息模板名称，可通过[查询消息模板列表](ListMessageTemplates.xml)获取名称。  说明： 三种消息发送方式：message、message_structure、message_template_name  至少设置其中一个，如果同时设置，生效的优先级为 message_structure > message_template_name > message。
    * tags  tag以及替换tag的参数组成的字典。消息模板中的标签对应的值。使用消息模板方式的消息发布必须携带该参数。字典中的key为消息模板中的参数名称，不超过21个字符。字典中的value为消息模板中的参数被替换后的值，不超过1KB。
    * timeToLive  指消息在SMN系统内部的最长存留时间。超过该存留时间，系统将不再发送该消息。单位是s，变量默认值是3600s，即一小时。值为正整数且小于等于3600*24。
    * messageAttributes  消息属性列表
    * locale  语言，发送出去的消息中SMN附加系统内容的语言，若没传入，使用账号的语言。取值范围是该局点支持的语言，比如：zh-cn,en-us等
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'subject' => 'subject',
            'message' => 'message',
            'messageStructure' => 'message_structure',
            'messageTemplateName' => 'message_template_name',
            'tags' => 'tags',
            'timeToLive' => 'time_to_live',
            'messageAttributes' => 'message_attributes',
            'locale' => 'locale'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * subject  消息标题，给邮箱订阅者发送邮件时作为邮件主题，长度不能超过512个字节。
    * message  发送的消息。消息体必须是UTF-8编码的字符串，大小至多256KB。如果订阅者是手机号码，短信长度限制为490字，超出则可能被运营商拦截。短信内容不能包含“[]”或者“【】”符号。 说明： 三种消息发送方式：message、message_structure、message_template_name  至少设置其中一个，如果同时设置，生效的优先级为 message_structure > message_template_name > message。
    * messageStructure  Json格式的字符串。支持“email”、“sms”、“http”、“https”、“functiongraph”、“functionstage”、“dingding”、“wechat”、“feishu”、“welink”、“dingTalkBot”。必须设置默认的消息“default”，当匹配不到消息协议时，按“default”中的内容发送。  - 其中，钉钉、微信、飞书、welink、dingTalkBot协议类型的消息需指定msgType字段；钉钉，微信和飞书机器人协议支持msgType为text（纯文本）和markdown（MD）格式消息，welink机器人类型暂仅支持msgType为text的纯文本消息。   - 企业微信机器人对消息长度的限制请参考[官方文档](https://developer.work.weixin.qq.com/document/path/91770)。  - 钉钉机器人协议支持通过at字段实现@群组成员。当您需要@群成员时，可以在isAtAll字段中传入布尔值，表示是否需要@群组内所有人。您可以在atMobiles字段中传入需要@的人的手机号列表，或在atUserIds字段中传入需要@的钉钉userID列表。当您使用atMobiles字段或atUserIds字段时，需要在消息内容中同时传入@对应手机号或userID的信息。展示效果请参考钉钉[官方文档](https://open.dingtalk.com/document/orgapp/custom-robots-send-group-messages)。钉钉群机器人消息限制在20000bytes以内，详情请参考[钉钉官方文档](https://open.dingtalk.com/document/orgapp/custom-robot-access)描述。  - 飞书机器人协议的markdown消息支持通过传入color字段设置标题的底色。能够支持的color字段可参考飞书[官方文档](https://open.feishu.cn/document/common-capabilities/message-card/message-cards-content/card-header)。飞书群机器人消息限制在30KB以内，详情请参考[飞书官方文档](https://feishu.apifox.cn/doc-1944903)描述。   - 个人钉钉消息对长度的限制请参考[官方文档](https://open.dingtalk.com/document/orgapp/the-robot-sends-a-group-message)。  说明： 三种消息发送方式：message、message_structure、message_template_name  至少设置其中一个，如果同时设置，生效的优先级为 message_structure > message_template_name > message。
    * messageTemplateName  消息模板名称，可通过[查询消息模板列表](ListMessageTemplates.xml)获取名称。  说明： 三种消息发送方式：message、message_structure、message_template_name  至少设置其中一个，如果同时设置，生效的优先级为 message_structure > message_template_name > message。
    * tags  tag以及替换tag的参数组成的字典。消息模板中的标签对应的值。使用消息模板方式的消息发布必须携带该参数。字典中的key为消息模板中的参数名称，不超过21个字符。字典中的value为消息模板中的参数被替换后的值，不超过1KB。
    * timeToLive  指消息在SMN系统内部的最长存留时间。超过该存留时间，系统将不再发送该消息。单位是s，变量默认值是3600s，即一小时。值为正整数且小于等于3600*24。
    * messageAttributes  消息属性列表
    * locale  语言，发送出去的消息中SMN附加系统内容的语言，若没传入，使用账号的语言。取值范围是该局点支持的语言，比如：zh-cn,en-us等
    *
    * @var string[]
    */
    protected static $setters = [
            'subject' => 'setSubject',
            'message' => 'setMessage',
            'messageStructure' => 'setMessageStructure',
            'messageTemplateName' => 'setMessageTemplateName',
            'tags' => 'setTags',
            'timeToLive' => 'setTimeToLive',
            'messageAttributes' => 'setMessageAttributes',
            'locale' => 'setLocale'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * subject  消息标题，给邮箱订阅者发送邮件时作为邮件主题，长度不能超过512个字节。
    * message  发送的消息。消息体必须是UTF-8编码的字符串，大小至多256KB。如果订阅者是手机号码，短信长度限制为490字，超出则可能被运营商拦截。短信内容不能包含“[]”或者“【】”符号。 说明： 三种消息发送方式：message、message_structure、message_template_name  至少设置其中一个，如果同时设置，生效的优先级为 message_structure > message_template_name > message。
    * messageStructure  Json格式的字符串。支持“email”、“sms”、“http”、“https”、“functiongraph”、“functionstage”、“dingding”、“wechat”、“feishu”、“welink”、“dingTalkBot”。必须设置默认的消息“default”，当匹配不到消息协议时，按“default”中的内容发送。  - 其中，钉钉、微信、飞书、welink、dingTalkBot协议类型的消息需指定msgType字段；钉钉，微信和飞书机器人协议支持msgType为text（纯文本）和markdown（MD）格式消息，welink机器人类型暂仅支持msgType为text的纯文本消息。   - 企业微信机器人对消息长度的限制请参考[官方文档](https://developer.work.weixin.qq.com/document/path/91770)。  - 钉钉机器人协议支持通过at字段实现@群组成员。当您需要@群成员时，可以在isAtAll字段中传入布尔值，表示是否需要@群组内所有人。您可以在atMobiles字段中传入需要@的人的手机号列表，或在atUserIds字段中传入需要@的钉钉userID列表。当您使用atMobiles字段或atUserIds字段时，需要在消息内容中同时传入@对应手机号或userID的信息。展示效果请参考钉钉[官方文档](https://open.dingtalk.com/document/orgapp/custom-robots-send-group-messages)。钉钉群机器人消息限制在20000bytes以内，详情请参考[钉钉官方文档](https://open.dingtalk.com/document/orgapp/custom-robot-access)描述。  - 飞书机器人协议的markdown消息支持通过传入color字段设置标题的底色。能够支持的color字段可参考飞书[官方文档](https://open.feishu.cn/document/common-capabilities/message-card/message-cards-content/card-header)。飞书群机器人消息限制在30KB以内，详情请参考[飞书官方文档](https://feishu.apifox.cn/doc-1944903)描述。   - 个人钉钉消息对长度的限制请参考[官方文档](https://open.dingtalk.com/document/orgapp/the-robot-sends-a-group-message)。  说明： 三种消息发送方式：message、message_structure、message_template_name  至少设置其中一个，如果同时设置，生效的优先级为 message_structure > message_template_name > message。
    * messageTemplateName  消息模板名称，可通过[查询消息模板列表](ListMessageTemplates.xml)获取名称。  说明： 三种消息发送方式：message、message_structure、message_template_name  至少设置其中一个，如果同时设置，生效的优先级为 message_structure > message_template_name > message。
    * tags  tag以及替换tag的参数组成的字典。消息模板中的标签对应的值。使用消息模板方式的消息发布必须携带该参数。字典中的key为消息模板中的参数名称，不超过21个字符。字典中的value为消息模板中的参数被替换后的值，不超过1KB。
    * timeToLive  指消息在SMN系统内部的最长存留时间。超过该存留时间，系统将不再发送该消息。单位是s，变量默认值是3600s，即一小时。值为正整数且小于等于3600*24。
    * messageAttributes  消息属性列表
    * locale  语言，发送出去的消息中SMN附加系统内容的语言，若没传入，使用账号的语言。取值范围是该局点支持的语言，比如：zh-cn,en-us等
    *
    * @var string[]
    */
    protected static $getters = [
            'subject' => 'getSubject',
            'message' => 'getMessage',
            'messageStructure' => 'getMessageStructure',
            'messageTemplateName' => 'getMessageTemplateName',
            'tags' => 'getTags',
            'timeToLive' => 'getTimeToLive',
            'messageAttributes' => 'getMessageAttributes',
            'locale' => 'getLocale'
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
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['messageStructure'] = isset($data['messageStructure']) ? $data['messageStructure'] : null;
        $this->container['messageTemplateName'] = isset($data['messageTemplateName']) ? $data['messageTemplateName'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['timeToLive'] = isset($data['timeToLive']) ? $data['timeToLive'] : null;
        $this->container['messageAttributes'] = isset($data['messageAttributes']) ? $data['messageAttributes'] : null;
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
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
    * Gets subject
    *  消息标题，给邮箱订阅者发送邮件时作为邮件主题，长度不能超过512个字节。
    *
    * @return string|null
    */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
    * Sets subject
    *
    * @param string|null $subject 消息标题，给邮箱订阅者发送邮件时作为邮件主题，长度不能超过512个字节。
    *
    * @return $this
    */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;
        return $this;
    }

    /**
    * Gets message
    *  发送的消息。消息体必须是UTF-8编码的字符串，大小至多256KB。如果订阅者是手机号码，短信长度限制为490字，超出则可能被运营商拦截。短信内容不能包含“[]”或者“【】”符号。 说明： 三种消息发送方式：message、message_structure、message_template_name  至少设置其中一个，如果同时设置，生效的优先级为 message_structure > message_template_name > message。
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message 发送的消息。消息体必须是UTF-8编码的字符串，大小至多256KB。如果订阅者是手机号码，短信长度限制为490字，超出则可能被运营商拦截。短信内容不能包含“[]”或者“【】”符号。 说明： 三种消息发送方式：message、message_structure、message_template_name  至少设置其中一个，如果同时设置，生效的优先级为 message_structure > message_template_name > message。
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets messageStructure
    *  Json格式的字符串。支持“email”、“sms”、“http”、“https”、“functiongraph”、“functionstage”、“dingding”、“wechat”、“feishu”、“welink”、“dingTalkBot”。必须设置默认的消息“default”，当匹配不到消息协议时，按“default”中的内容发送。  - 其中，钉钉、微信、飞书、welink、dingTalkBot协议类型的消息需指定msgType字段；钉钉，微信和飞书机器人协议支持msgType为text（纯文本）和markdown（MD）格式消息，welink机器人类型暂仅支持msgType为text的纯文本消息。   - 企业微信机器人对消息长度的限制请参考[官方文档](https://developer.work.weixin.qq.com/document/path/91770)。  - 钉钉机器人协议支持通过at字段实现@群组成员。当您需要@群成员时，可以在isAtAll字段中传入布尔值，表示是否需要@群组内所有人。您可以在atMobiles字段中传入需要@的人的手机号列表，或在atUserIds字段中传入需要@的钉钉userID列表。当您使用atMobiles字段或atUserIds字段时，需要在消息内容中同时传入@对应手机号或userID的信息。展示效果请参考钉钉[官方文档](https://open.dingtalk.com/document/orgapp/custom-robots-send-group-messages)。钉钉群机器人消息限制在20000bytes以内，详情请参考[钉钉官方文档](https://open.dingtalk.com/document/orgapp/custom-robot-access)描述。  - 飞书机器人协议的markdown消息支持通过传入color字段设置标题的底色。能够支持的color字段可参考飞书[官方文档](https://open.feishu.cn/document/common-capabilities/message-card/message-cards-content/card-header)。飞书群机器人消息限制在30KB以内，详情请参考[飞书官方文档](https://feishu.apifox.cn/doc-1944903)描述。   - 个人钉钉消息对长度的限制请参考[官方文档](https://open.dingtalk.com/document/orgapp/the-robot-sends-a-group-message)。  说明： 三种消息发送方式：message、message_structure、message_template_name  至少设置其中一个，如果同时设置，生效的优先级为 message_structure > message_template_name > message。
    *
    * @return string|null
    */
    public function getMessageStructure()
    {
        return $this->container['messageStructure'];
    }

    /**
    * Sets messageStructure
    *
    * @param string|null $messageStructure Json格式的字符串。支持“email”、“sms”、“http”、“https”、“functiongraph”、“functionstage”、“dingding”、“wechat”、“feishu”、“welink”、“dingTalkBot”。必须设置默认的消息“default”，当匹配不到消息协议时，按“default”中的内容发送。  - 其中，钉钉、微信、飞书、welink、dingTalkBot协议类型的消息需指定msgType字段；钉钉，微信和飞书机器人协议支持msgType为text（纯文本）和markdown（MD）格式消息，welink机器人类型暂仅支持msgType为text的纯文本消息。   - 企业微信机器人对消息长度的限制请参考[官方文档](https://developer.work.weixin.qq.com/document/path/91770)。  - 钉钉机器人协议支持通过at字段实现@群组成员。当您需要@群成员时，可以在isAtAll字段中传入布尔值，表示是否需要@群组内所有人。您可以在atMobiles字段中传入需要@的人的手机号列表，或在atUserIds字段中传入需要@的钉钉userID列表。当您使用atMobiles字段或atUserIds字段时，需要在消息内容中同时传入@对应手机号或userID的信息。展示效果请参考钉钉[官方文档](https://open.dingtalk.com/document/orgapp/custom-robots-send-group-messages)。钉钉群机器人消息限制在20000bytes以内，详情请参考[钉钉官方文档](https://open.dingtalk.com/document/orgapp/custom-robot-access)描述。  - 飞书机器人协议的markdown消息支持通过传入color字段设置标题的底色。能够支持的color字段可参考飞书[官方文档](https://open.feishu.cn/document/common-capabilities/message-card/message-cards-content/card-header)。飞书群机器人消息限制在30KB以内，详情请参考[飞书官方文档](https://feishu.apifox.cn/doc-1944903)描述。   - 个人钉钉消息对长度的限制请参考[官方文档](https://open.dingtalk.com/document/orgapp/the-robot-sends-a-group-message)。  说明： 三种消息发送方式：message、message_structure、message_template_name  至少设置其中一个，如果同时设置，生效的优先级为 message_structure > message_template_name > message。
    *
    * @return $this
    */
    public function setMessageStructure($messageStructure)
    {
        $this->container['messageStructure'] = $messageStructure;
        return $this;
    }

    /**
    * Gets messageTemplateName
    *  消息模板名称，可通过[查询消息模板列表](ListMessageTemplates.xml)获取名称。  说明： 三种消息发送方式：message、message_structure、message_template_name  至少设置其中一个，如果同时设置，生效的优先级为 message_structure > message_template_name > message。
    *
    * @return string|null
    */
    public function getMessageTemplateName()
    {
        return $this->container['messageTemplateName'];
    }

    /**
    * Sets messageTemplateName
    *
    * @param string|null $messageTemplateName 消息模板名称，可通过[查询消息模板列表](ListMessageTemplates.xml)获取名称。  说明： 三种消息发送方式：message、message_structure、message_template_name  至少设置其中一个，如果同时设置，生效的优先级为 message_structure > message_template_name > message。
    *
    * @return $this
    */
    public function setMessageTemplateName($messageTemplateName)
    {
        $this->container['messageTemplateName'] = $messageTemplateName;
        return $this;
    }

    /**
    * Gets tags
    *  tag以及替换tag的参数组成的字典。消息模板中的标签对应的值。使用消息模板方式的消息发布必须携带该参数。字典中的key为消息模板中的参数名称，不超过21个字符。字典中的value为消息模板中的参数被替换后的值，不超过1KB。
    *
    * @return map[string,string]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param map[string,string]|null $tags tag以及替换tag的参数组成的字典。消息模板中的标签对应的值。使用消息模板方式的消息发布必须携带该参数。字典中的key为消息模板中的参数名称，不超过21个字符。字典中的value为消息模板中的参数被替换后的值，不超过1KB。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets timeToLive
    *  指消息在SMN系统内部的最长存留时间。超过该存留时间，系统将不再发送该消息。单位是s，变量默认值是3600s，即一小时。值为正整数且小于等于3600*24。
    *
    * @return string|null
    */
    public function getTimeToLive()
    {
        return $this->container['timeToLive'];
    }

    /**
    * Sets timeToLive
    *
    * @param string|null $timeToLive 指消息在SMN系统内部的最长存留时间。超过该存留时间，系统将不再发送该消息。单位是s，变量默认值是3600s，即一小时。值为正整数且小于等于3600*24。
    *
    * @return $this
    */
    public function setTimeToLive($timeToLive)
    {
        $this->container['timeToLive'] = $timeToLive;
        return $this;
    }

    /**
    * Gets messageAttributes
    *  消息属性列表
    *
    * @return \HuaweiCloud\SDK\Smn\V2\Model\MessageAttribute[]|null
    */
    public function getMessageAttributes()
    {
        return $this->container['messageAttributes'];
    }

    /**
    * Sets messageAttributes
    *
    * @param \HuaweiCloud\SDK\Smn\V2\Model\MessageAttribute[]|null $messageAttributes 消息属性列表
    *
    * @return $this
    */
    public function setMessageAttributes($messageAttributes)
    {
        $this->container['messageAttributes'] = $messageAttributes;
        return $this;
    }

    /**
    * Gets locale
    *  语言，发送出去的消息中SMN附加系统内容的语言，若没传入，使用账号的语言。取值范围是该局点支持的语言，比如：zh-cn,en-us等
    *
    * @return string|null
    */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
    * Sets locale
    *
    * @param string|null $locale 语言，发送出去的消息中SMN附加系统内容的语言，若没传入，使用账号的语言。取值范围是该局点支持的语言，比如：zh-cn,en-us等
    *
    * @return $this
    */
    public function setLocale($locale)
    {
        $this->container['locale'] = $locale;
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

