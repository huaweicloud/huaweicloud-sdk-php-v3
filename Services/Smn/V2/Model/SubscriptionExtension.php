<?php

namespace HuaweiCloud\SDK\Smn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SubscriptionExtension implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SubscriptionExtension';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clientId  这是应用ID字段。当protocol值为welink时，该字段为必填字段，从welink方获取。
    * clientSecret  该字段为应用secret字段。当protocol值为welink时，该字段为必填字段，从welink方获取。
    * keyword  该字段为关键字字段。当protocol值为feishu时，这里的keyword字段和sign_secret字段二者必选其一。当用户在飞书或钉钉自定义机器人端添加关键字校验的安全策略时，这里的关键字必须是飞书或钉钉自定义机器人中所填写的关键字之一。
    * signSecret  这是加签密钥字段。当protocol协议为feishu时，这个字段和keyword字段二者必选且只能选其一。密钥配置必须与客户在飞书或钉钉自定义机器人的密钥配置完全一致。例如，如果在飞书端配置了密钥并且没有配置关键字，则在此处填入从飞书获取的密钥字段，如果在飞书端没有配置密钥并且配置了关键字，则不填写该字段。
    * header  该字段为http header字段，用户可以在字段限制范围内自定义http header，header字段内容以KV对形式存在。当使用主题发送时，已确认的订阅发送消息会携带用户自定义的http header。 header应满足如下要求： key值限定为：包含英文字母([A-Za-z])、数字([0-9])、中划线(-)hyphens，中划线不得作为结尾，不得连续出现。 K/V不得超过10个 key需要以\"x-\"开头，不能以\"x-smn\"开头，正确示例：x-abc-cba, x-abc 所有K/V长度总和不得超过1024个字符 key不区分大小写 key值不可重复 value值限定为ASCII码，不支持中文或其他Unicode，支持空格
    * appKey  个人钉钉appKey字段，字符长度限制64个，仅支持字母、数字、中划线(-)、下划线(_)。当订阅协议为dingTalkBot时，该字段必选。
    * appSecret  个人钉钉appSecret字段，字符长度限制128个，仅支持字母、数字、中划线(-)、下划线(_)。当订阅协议为dingTalkBot时，该字段必选。
    * robotCode  个人钉钉robotCode字段，名称：机器人编码，字符长度限制64个，仅支持字母、数字、中划线(-)、下划线(_)，一般与appKey一致。当订阅协议为dingTalkBot时，该字段必选。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clientId' => 'string',
            'clientSecret' => 'string',
            'keyword' => 'string',
            'signSecret' => 'string',
            'header' => 'map[string,string]',
            'appKey' => 'string',
            'appSecret' => 'string',
            'robotCode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clientId  这是应用ID字段。当protocol值为welink时，该字段为必填字段，从welink方获取。
    * clientSecret  该字段为应用secret字段。当protocol值为welink时，该字段为必填字段，从welink方获取。
    * keyword  该字段为关键字字段。当protocol值为feishu时，这里的keyword字段和sign_secret字段二者必选其一。当用户在飞书或钉钉自定义机器人端添加关键字校验的安全策略时，这里的关键字必须是飞书或钉钉自定义机器人中所填写的关键字之一。
    * signSecret  这是加签密钥字段。当protocol协议为feishu时，这个字段和keyword字段二者必选且只能选其一。密钥配置必须与客户在飞书或钉钉自定义机器人的密钥配置完全一致。例如，如果在飞书端配置了密钥并且没有配置关键字，则在此处填入从飞书获取的密钥字段，如果在飞书端没有配置密钥并且配置了关键字，则不填写该字段。
    * header  该字段为http header字段，用户可以在字段限制范围内自定义http header，header字段内容以KV对形式存在。当使用主题发送时，已确认的订阅发送消息会携带用户自定义的http header。 header应满足如下要求： key值限定为：包含英文字母([A-Za-z])、数字([0-9])、中划线(-)hyphens，中划线不得作为结尾，不得连续出现。 K/V不得超过10个 key需要以\"x-\"开头，不能以\"x-smn\"开头，正确示例：x-abc-cba, x-abc 所有K/V长度总和不得超过1024个字符 key不区分大小写 key值不可重复 value值限定为ASCII码，不支持中文或其他Unicode，支持空格
    * appKey  个人钉钉appKey字段，字符长度限制64个，仅支持字母、数字、中划线(-)、下划线(_)。当订阅协议为dingTalkBot时，该字段必选。
    * appSecret  个人钉钉appSecret字段，字符长度限制128个，仅支持字母、数字、中划线(-)、下划线(_)。当订阅协议为dingTalkBot时，该字段必选。
    * robotCode  个人钉钉robotCode字段，名称：机器人编码，字符长度限制64个，仅支持字母、数字、中划线(-)、下划线(_)，一般与appKey一致。当订阅协议为dingTalkBot时，该字段必选。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clientId' => null,
        'clientSecret' => null,
        'keyword' => null,
        'signSecret' => null,
        'header' => null,
        'appKey' => null,
        'appSecret' => null,
        'robotCode' => null
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
    * clientId  这是应用ID字段。当protocol值为welink时，该字段为必填字段，从welink方获取。
    * clientSecret  该字段为应用secret字段。当protocol值为welink时，该字段为必填字段，从welink方获取。
    * keyword  该字段为关键字字段。当protocol值为feishu时，这里的keyword字段和sign_secret字段二者必选其一。当用户在飞书或钉钉自定义机器人端添加关键字校验的安全策略时，这里的关键字必须是飞书或钉钉自定义机器人中所填写的关键字之一。
    * signSecret  这是加签密钥字段。当protocol协议为feishu时，这个字段和keyword字段二者必选且只能选其一。密钥配置必须与客户在飞书或钉钉自定义机器人的密钥配置完全一致。例如，如果在飞书端配置了密钥并且没有配置关键字，则在此处填入从飞书获取的密钥字段，如果在飞书端没有配置密钥并且配置了关键字，则不填写该字段。
    * header  该字段为http header字段，用户可以在字段限制范围内自定义http header，header字段内容以KV对形式存在。当使用主题发送时，已确认的订阅发送消息会携带用户自定义的http header。 header应满足如下要求： key值限定为：包含英文字母([A-Za-z])、数字([0-9])、中划线(-)hyphens，中划线不得作为结尾，不得连续出现。 K/V不得超过10个 key需要以\"x-\"开头，不能以\"x-smn\"开头，正确示例：x-abc-cba, x-abc 所有K/V长度总和不得超过1024个字符 key不区分大小写 key值不可重复 value值限定为ASCII码，不支持中文或其他Unicode，支持空格
    * appKey  个人钉钉appKey字段，字符长度限制64个，仅支持字母、数字、中划线(-)、下划线(_)。当订阅协议为dingTalkBot时，该字段必选。
    * appSecret  个人钉钉appSecret字段，字符长度限制128个，仅支持字母、数字、中划线(-)、下划线(_)。当订阅协议为dingTalkBot时，该字段必选。
    * robotCode  个人钉钉robotCode字段，名称：机器人编码，字符长度限制64个，仅支持字母、数字、中划线(-)、下划线(_)，一般与appKey一致。当订阅协议为dingTalkBot时，该字段必选。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clientId' => 'client_id',
            'clientSecret' => 'client_secret',
            'keyword' => 'keyword',
            'signSecret' => 'sign_secret',
            'header' => 'header',
            'appKey' => 'app_key',
            'appSecret' => 'app_secret',
            'robotCode' => 'robot_code'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clientId  这是应用ID字段。当protocol值为welink时，该字段为必填字段，从welink方获取。
    * clientSecret  该字段为应用secret字段。当protocol值为welink时，该字段为必填字段，从welink方获取。
    * keyword  该字段为关键字字段。当protocol值为feishu时，这里的keyword字段和sign_secret字段二者必选其一。当用户在飞书或钉钉自定义机器人端添加关键字校验的安全策略时，这里的关键字必须是飞书或钉钉自定义机器人中所填写的关键字之一。
    * signSecret  这是加签密钥字段。当protocol协议为feishu时，这个字段和keyword字段二者必选且只能选其一。密钥配置必须与客户在飞书或钉钉自定义机器人的密钥配置完全一致。例如，如果在飞书端配置了密钥并且没有配置关键字，则在此处填入从飞书获取的密钥字段，如果在飞书端没有配置密钥并且配置了关键字，则不填写该字段。
    * header  该字段为http header字段，用户可以在字段限制范围内自定义http header，header字段内容以KV对形式存在。当使用主题发送时，已确认的订阅发送消息会携带用户自定义的http header。 header应满足如下要求： key值限定为：包含英文字母([A-Za-z])、数字([0-9])、中划线(-)hyphens，中划线不得作为结尾，不得连续出现。 K/V不得超过10个 key需要以\"x-\"开头，不能以\"x-smn\"开头，正确示例：x-abc-cba, x-abc 所有K/V长度总和不得超过1024个字符 key不区分大小写 key值不可重复 value值限定为ASCII码，不支持中文或其他Unicode，支持空格
    * appKey  个人钉钉appKey字段，字符长度限制64个，仅支持字母、数字、中划线(-)、下划线(_)。当订阅协议为dingTalkBot时，该字段必选。
    * appSecret  个人钉钉appSecret字段，字符长度限制128个，仅支持字母、数字、中划线(-)、下划线(_)。当订阅协议为dingTalkBot时，该字段必选。
    * robotCode  个人钉钉robotCode字段，名称：机器人编码，字符长度限制64个，仅支持字母、数字、中划线(-)、下划线(_)，一般与appKey一致。当订阅协议为dingTalkBot时，该字段必选。
    *
    * @var string[]
    */
    protected static $setters = [
            'clientId' => 'setClientId',
            'clientSecret' => 'setClientSecret',
            'keyword' => 'setKeyword',
            'signSecret' => 'setSignSecret',
            'header' => 'setHeader',
            'appKey' => 'setAppKey',
            'appSecret' => 'setAppSecret',
            'robotCode' => 'setRobotCode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clientId  这是应用ID字段。当protocol值为welink时，该字段为必填字段，从welink方获取。
    * clientSecret  该字段为应用secret字段。当protocol值为welink时，该字段为必填字段，从welink方获取。
    * keyword  该字段为关键字字段。当protocol值为feishu时，这里的keyword字段和sign_secret字段二者必选其一。当用户在飞书或钉钉自定义机器人端添加关键字校验的安全策略时，这里的关键字必须是飞书或钉钉自定义机器人中所填写的关键字之一。
    * signSecret  这是加签密钥字段。当protocol协议为feishu时，这个字段和keyword字段二者必选且只能选其一。密钥配置必须与客户在飞书或钉钉自定义机器人的密钥配置完全一致。例如，如果在飞书端配置了密钥并且没有配置关键字，则在此处填入从飞书获取的密钥字段，如果在飞书端没有配置密钥并且配置了关键字，则不填写该字段。
    * header  该字段为http header字段，用户可以在字段限制范围内自定义http header，header字段内容以KV对形式存在。当使用主题发送时，已确认的订阅发送消息会携带用户自定义的http header。 header应满足如下要求： key值限定为：包含英文字母([A-Za-z])、数字([0-9])、中划线(-)hyphens，中划线不得作为结尾，不得连续出现。 K/V不得超过10个 key需要以\"x-\"开头，不能以\"x-smn\"开头，正确示例：x-abc-cba, x-abc 所有K/V长度总和不得超过1024个字符 key不区分大小写 key值不可重复 value值限定为ASCII码，不支持中文或其他Unicode，支持空格
    * appKey  个人钉钉appKey字段，字符长度限制64个，仅支持字母、数字、中划线(-)、下划线(_)。当订阅协议为dingTalkBot时，该字段必选。
    * appSecret  个人钉钉appSecret字段，字符长度限制128个，仅支持字母、数字、中划线(-)、下划线(_)。当订阅协议为dingTalkBot时，该字段必选。
    * robotCode  个人钉钉robotCode字段，名称：机器人编码，字符长度限制64个，仅支持字母、数字、中划线(-)、下划线(_)，一般与appKey一致。当订阅协议为dingTalkBot时，该字段必选。
    *
    * @var string[]
    */
    protected static $getters = [
            'clientId' => 'getClientId',
            'clientSecret' => 'getClientSecret',
            'keyword' => 'getKeyword',
            'signSecret' => 'getSignSecret',
            'header' => 'getHeader',
            'appKey' => 'getAppKey',
            'appSecret' => 'getAppSecret',
            'robotCode' => 'getRobotCode'
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
        $this->container['clientId'] = isset($data['clientId']) ? $data['clientId'] : null;
        $this->container['clientSecret'] = isset($data['clientSecret']) ? $data['clientSecret'] : null;
        $this->container['keyword'] = isset($data['keyword']) ? $data['keyword'] : null;
        $this->container['signSecret'] = isset($data['signSecret']) ? $data['signSecret'] : null;
        $this->container['header'] = isset($data['header']) ? $data['header'] : null;
        $this->container['appKey'] = isset($data['appKey']) ? $data['appKey'] : null;
        $this->container['appSecret'] = isset($data['appSecret']) ? $data['appSecret'] : null;
        $this->container['robotCode'] = isset($data['robotCode']) ? $data['robotCode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['clientId']) && (mb_strlen($this->container['clientId']) > 64)) {
                $invalidProperties[] = "invalid value for 'clientId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['clientId']) && (mb_strlen($this->container['clientId']) < 1)) {
                $invalidProperties[] = "invalid value for 'clientId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['clientSecret']) && (mb_strlen($this->container['clientSecret']) > 64)) {
                $invalidProperties[] = "invalid value for 'clientSecret', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['clientSecret']) && (mb_strlen($this->container['clientSecret']) < 1)) {
                $invalidProperties[] = "invalid value for 'clientSecret', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['keyword']) && (mb_strlen($this->container['keyword']) > 20)) {
                $invalidProperties[] = "invalid value for 'keyword', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['keyword']) && (mb_strlen($this->container['keyword']) < 0)) {
                $invalidProperties[] = "invalid value for 'keyword', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['signSecret']) && (mb_strlen($this->container['signSecret']) > 256)) {
                $invalidProperties[] = "invalid value for 'signSecret', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['signSecret']) && (mb_strlen($this->container['signSecret']) < 0)) {
                $invalidProperties[] = "invalid value for 'signSecret', the character length must be bigger than or equal to 0.";
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
    * Gets clientId
    *  这是应用ID字段。当protocol值为welink时，该字段为必填字段，从welink方获取。
    *
    * @return string|null
    */
    public function getClientId()
    {
        return $this->container['clientId'];
    }

    /**
    * Sets clientId
    *
    * @param string|null $clientId 这是应用ID字段。当protocol值为welink时，该字段为必填字段，从welink方获取。
    *
    * @return $this
    */
    public function setClientId($clientId)
    {
        $this->container['clientId'] = $clientId;
        return $this;
    }

    /**
    * Gets clientSecret
    *  该字段为应用secret字段。当protocol值为welink时，该字段为必填字段，从welink方获取。
    *
    * @return string|null
    */
    public function getClientSecret()
    {
        return $this->container['clientSecret'];
    }

    /**
    * Sets clientSecret
    *
    * @param string|null $clientSecret 该字段为应用secret字段。当protocol值为welink时，该字段为必填字段，从welink方获取。
    *
    * @return $this
    */
    public function setClientSecret($clientSecret)
    {
        $this->container['clientSecret'] = $clientSecret;
        return $this;
    }

    /**
    * Gets keyword
    *  该字段为关键字字段。当protocol值为feishu时，这里的keyword字段和sign_secret字段二者必选其一。当用户在飞书或钉钉自定义机器人端添加关键字校验的安全策略时，这里的关键字必须是飞书或钉钉自定义机器人中所填写的关键字之一。
    *
    * @return string|null
    */
    public function getKeyword()
    {
        return $this->container['keyword'];
    }

    /**
    * Sets keyword
    *
    * @param string|null $keyword 该字段为关键字字段。当protocol值为feishu时，这里的keyword字段和sign_secret字段二者必选其一。当用户在飞书或钉钉自定义机器人端添加关键字校验的安全策略时，这里的关键字必须是飞书或钉钉自定义机器人中所填写的关键字之一。
    *
    * @return $this
    */
    public function setKeyword($keyword)
    {
        $this->container['keyword'] = $keyword;
        return $this;
    }

    /**
    * Gets signSecret
    *  这是加签密钥字段。当protocol协议为feishu时，这个字段和keyword字段二者必选且只能选其一。密钥配置必须与客户在飞书或钉钉自定义机器人的密钥配置完全一致。例如，如果在飞书端配置了密钥并且没有配置关键字，则在此处填入从飞书获取的密钥字段，如果在飞书端没有配置密钥并且配置了关键字，则不填写该字段。
    *
    * @return string|null
    */
    public function getSignSecret()
    {
        return $this->container['signSecret'];
    }

    /**
    * Sets signSecret
    *
    * @param string|null $signSecret 这是加签密钥字段。当protocol协议为feishu时，这个字段和keyword字段二者必选且只能选其一。密钥配置必须与客户在飞书或钉钉自定义机器人的密钥配置完全一致。例如，如果在飞书端配置了密钥并且没有配置关键字，则在此处填入从飞书获取的密钥字段，如果在飞书端没有配置密钥并且配置了关键字，则不填写该字段。
    *
    * @return $this
    */
    public function setSignSecret($signSecret)
    {
        $this->container['signSecret'] = $signSecret;
        return $this;
    }

    /**
    * Gets header
    *  该字段为http header字段，用户可以在字段限制范围内自定义http header，header字段内容以KV对形式存在。当使用主题发送时，已确认的订阅发送消息会携带用户自定义的http header。 header应满足如下要求： key值限定为：包含英文字母([A-Za-z])、数字([0-9])、中划线(-)hyphens，中划线不得作为结尾，不得连续出现。 K/V不得超过10个 key需要以\"x-\"开头，不能以\"x-smn\"开头，正确示例：x-abc-cba, x-abc 所有K/V长度总和不得超过1024个字符 key不区分大小写 key值不可重复 value值限定为ASCII码，不支持中文或其他Unicode，支持空格
    *
    * @return map[string,string]|null
    */
    public function getHeader()
    {
        return $this->container['header'];
    }

    /**
    * Sets header
    *
    * @param map[string,string]|null $header 该字段为http header字段，用户可以在字段限制范围内自定义http header，header字段内容以KV对形式存在。当使用主题发送时，已确认的订阅发送消息会携带用户自定义的http header。 header应满足如下要求： key值限定为：包含英文字母([A-Za-z])、数字([0-9])、中划线(-)hyphens，中划线不得作为结尾，不得连续出现。 K/V不得超过10个 key需要以\"x-\"开头，不能以\"x-smn\"开头，正确示例：x-abc-cba, x-abc 所有K/V长度总和不得超过1024个字符 key不区分大小写 key值不可重复 value值限定为ASCII码，不支持中文或其他Unicode，支持空格
    *
    * @return $this
    */
    public function setHeader($header)
    {
        $this->container['header'] = $header;
        return $this;
    }

    /**
    * Gets appKey
    *  个人钉钉appKey字段，字符长度限制64个，仅支持字母、数字、中划线(-)、下划线(_)。当订阅协议为dingTalkBot时，该字段必选。
    *
    * @return string|null
    */
    public function getAppKey()
    {
        return $this->container['appKey'];
    }

    /**
    * Sets appKey
    *
    * @param string|null $appKey 个人钉钉appKey字段，字符长度限制64个，仅支持字母、数字、中划线(-)、下划线(_)。当订阅协议为dingTalkBot时，该字段必选。
    *
    * @return $this
    */
    public function setAppKey($appKey)
    {
        $this->container['appKey'] = $appKey;
        return $this;
    }

    /**
    * Gets appSecret
    *  个人钉钉appSecret字段，字符长度限制128个，仅支持字母、数字、中划线(-)、下划线(_)。当订阅协议为dingTalkBot时，该字段必选。
    *
    * @return string|null
    */
    public function getAppSecret()
    {
        return $this->container['appSecret'];
    }

    /**
    * Sets appSecret
    *
    * @param string|null $appSecret 个人钉钉appSecret字段，字符长度限制128个，仅支持字母、数字、中划线(-)、下划线(_)。当订阅协议为dingTalkBot时，该字段必选。
    *
    * @return $this
    */
    public function setAppSecret($appSecret)
    {
        $this->container['appSecret'] = $appSecret;
        return $this;
    }

    /**
    * Gets robotCode
    *  个人钉钉robotCode字段，名称：机器人编码，字符长度限制64个，仅支持字母、数字、中划线(-)、下划线(_)，一般与appKey一致。当订阅协议为dingTalkBot时，该字段必选。
    *
    * @return string|null
    */
    public function getRobotCode()
    {
        return $this->container['robotCode'];
    }

    /**
    * Sets robotCode
    *
    * @param string|null $robotCode 个人钉钉robotCode字段，名称：机器人编码，字符长度限制64个，仅支持字母、数字、中划线(-)、下划线(_)，一般与appKey一致。当订阅协议为dingTalkBot时，该字段必选。
    *
    * @return $this
    */
    public function setRobotCode($robotCode)
    {
        $this->container['robotCode'] = $robotCode;
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

