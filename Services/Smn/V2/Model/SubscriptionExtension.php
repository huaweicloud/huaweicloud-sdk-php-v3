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
    * clientId  该字段为welink订阅下的租户ID字段，由租户从welink方获取。当protocol值为welink时，该字段为必填字段。
    * clientSecret  该字段为welink订阅下的租户获取的client secret字段，由租户从welink方获取。当protocol值为welink时，该字段为必填字段。
    * keyword  该字段为关键字字段。当protocol协议为feishu时，这里的keyword字段和sign_secret字段二者必选其一。当用户在飞书或钉钉机器人端添加关键字校验的安全策略时，这里的关键字必须是飞书或钉钉端所填写的关键字之一。
    * signSecret  这是加签密钥字段。当protocol协议为feishu或dingding时，这个字段和keyword字段二者必选且只能选其一，密钥配置必须与客户在飞书或钉钉客户端的密钥配置完全一致。例如，如果在飞书端配置了密钥并且没有配置关键字，则在此处填入从飞书获取的密钥字段，如果在飞书端没有配置密钥并且配置了关键字，则不填写该字段。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clientId' => 'string',
            'clientSecret' => 'string',
            'keyword' => 'string',
            'signSecret' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clientId  该字段为welink订阅下的租户ID字段，由租户从welink方获取。当protocol值为welink时，该字段为必填字段。
    * clientSecret  该字段为welink订阅下的租户获取的client secret字段，由租户从welink方获取。当protocol值为welink时，该字段为必填字段。
    * keyword  该字段为关键字字段。当protocol协议为feishu时，这里的keyword字段和sign_secret字段二者必选其一。当用户在飞书或钉钉机器人端添加关键字校验的安全策略时，这里的关键字必须是飞书或钉钉端所填写的关键字之一。
    * signSecret  这是加签密钥字段。当protocol协议为feishu或dingding时，这个字段和keyword字段二者必选且只能选其一，密钥配置必须与客户在飞书或钉钉客户端的密钥配置完全一致。例如，如果在飞书端配置了密钥并且没有配置关键字，则在此处填入从飞书获取的密钥字段，如果在飞书端没有配置密钥并且配置了关键字，则不填写该字段。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clientId' => null,
        'clientSecret' => null,
        'keyword' => null,
        'signSecret' => null
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
    * clientId  该字段为welink订阅下的租户ID字段，由租户从welink方获取。当protocol值为welink时，该字段为必填字段。
    * clientSecret  该字段为welink订阅下的租户获取的client secret字段，由租户从welink方获取。当protocol值为welink时，该字段为必填字段。
    * keyword  该字段为关键字字段。当protocol协议为feishu时，这里的keyword字段和sign_secret字段二者必选其一。当用户在飞书或钉钉机器人端添加关键字校验的安全策略时，这里的关键字必须是飞书或钉钉端所填写的关键字之一。
    * signSecret  这是加签密钥字段。当protocol协议为feishu或dingding时，这个字段和keyword字段二者必选且只能选其一，密钥配置必须与客户在飞书或钉钉客户端的密钥配置完全一致。例如，如果在飞书端配置了密钥并且没有配置关键字，则在此处填入从飞书获取的密钥字段，如果在飞书端没有配置密钥并且配置了关键字，则不填写该字段。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clientId' => 'client_id',
            'clientSecret' => 'client_secret',
            'keyword' => 'keyword',
            'signSecret' => 'sign_secret'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clientId  该字段为welink订阅下的租户ID字段，由租户从welink方获取。当protocol值为welink时，该字段为必填字段。
    * clientSecret  该字段为welink订阅下的租户获取的client secret字段，由租户从welink方获取。当protocol值为welink时，该字段为必填字段。
    * keyword  该字段为关键字字段。当protocol协议为feishu时，这里的keyword字段和sign_secret字段二者必选其一。当用户在飞书或钉钉机器人端添加关键字校验的安全策略时，这里的关键字必须是飞书或钉钉端所填写的关键字之一。
    * signSecret  这是加签密钥字段。当protocol协议为feishu或dingding时，这个字段和keyword字段二者必选且只能选其一，密钥配置必须与客户在飞书或钉钉客户端的密钥配置完全一致。例如，如果在飞书端配置了密钥并且没有配置关键字，则在此处填入从飞书获取的密钥字段，如果在飞书端没有配置密钥并且配置了关键字，则不填写该字段。
    *
    * @var string[]
    */
    protected static $setters = [
            'clientId' => 'setClientId',
            'clientSecret' => 'setClientSecret',
            'keyword' => 'setKeyword',
            'signSecret' => 'setSignSecret'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clientId  该字段为welink订阅下的租户ID字段，由租户从welink方获取。当protocol值为welink时，该字段为必填字段。
    * clientSecret  该字段为welink订阅下的租户获取的client secret字段，由租户从welink方获取。当protocol值为welink时，该字段为必填字段。
    * keyword  该字段为关键字字段。当protocol协议为feishu时，这里的keyword字段和sign_secret字段二者必选其一。当用户在飞书或钉钉机器人端添加关键字校验的安全策略时，这里的关键字必须是飞书或钉钉端所填写的关键字之一。
    * signSecret  这是加签密钥字段。当protocol协议为feishu或dingding时，这个字段和keyword字段二者必选且只能选其一，密钥配置必须与客户在飞书或钉钉客户端的密钥配置完全一致。例如，如果在飞书端配置了密钥并且没有配置关键字，则在此处填入从飞书获取的密钥字段，如果在飞书端没有配置密钥并且配置了关键字，则不填写该字段。
    *
    * @var string[]
    */
    protected static $getters = [
            'clientId' => 'getClientId',
            'clientSecret' => 'getClientSecret',
            'keyword' => 'getKeyword',
            'signSecret' => 'getSignSecret'
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
    * Gets clientId
    *  该字段为welink订阅下的租户ID字段，由租户从welink方获取。当protocol值为welink时，该字段为必填字段。
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
    * @param string|null $clientId 该字段为welink订阅下的租户ID字段，由租户从welink方获取。当protocol值为welink时，该字段为必填字段。
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
    *  该字段为welink订阅下的租户获取的client secret字段，由租户从welink方获取。当protocol值为welink时，该字段为必填字段。
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
    * @param string|null $clientSecret 该字段为welink订阅下的租户获取的client secret字段，由租户从welink方获取。当protocol值为welink时，该字段为必填字段。
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
    *  该字段为关键字字段。当protocol协议为feishu时，这里的keyword字段和sign_secret字段二者必选其一。当用户在飞书或钉钉机器人端添加关键字校验的安全策略时，这里的关键字必须是飞书或钉钉端所填写的关键字之一。
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
    * @param string|null $keyword 该字段为关键字字段。当protocol协议为feishu时，这里的keyword字段和sign_secret字段二者必选其一。当用户在飞书或钉钉机器人端添加关键字校验的安全策略时，这里的关键字必须是飞书或钉钉端所填写的关键字之一。
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
    *  这是加签密钥字段。当protocol协议为feishu或dingding时，这个字段和keyword字段二者必选且只能选其一，密钥配置必须与客户在飞书或钉钉客户端的密钥配置完全一致。例如，如果在飞书端配置了密钥并且没有配置关键字，则在此处填入从飞书获取的密钥字段，如果在飞书端没有配置密钥并且配置了关键字，则不填写该字段。
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
    * @param string|null $signSecret 这是加签密钥字段。当protocol协议为feishu或dingding时，这个字段和keyword字段二者必选且只能选其一，密钥配置必须与客户在飞书或钉钉客户端的密钥配置完全一致。例如，如果在飞书端配置了密钥并且没有配置关键字，则在此处填入从飞书获取的密钥字段，如果在飞书端没有配置密钥并且配置了关键字，则不填写该字段。
    *
    * @return $this
    */
    public function setSignSecret($signSecret)
    {
        $this->container['signSecret'] = $signSecret;
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

