<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LiveEventCallBackConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LiveEventCallBackConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * liveEventTypeCallbackUrl  直播事件回调地址。https地址，需自带鉴权串。
    * authType  认证类型。 * NONE。URL中自带认证。 * MSS_A。HMACSHA256签名模式，在URL中追加参数:hwSecret,hwTime。取值方式：hwSecret=hmac_sha256(Key, URI（live_event_callback_url）+ hwTime)&hwTime=hex(timestamp)
    * key  密钥Key
    * callbackEventType  回调的直播事件类型列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'liveEventTypeCallbackUrl' => 'string',
            'authType' => 'string',
            'key' => 'string',
            'callbackEventType' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * liveEventTypeCallbackUrl  直播事件回调地址。https地址，需自带鉴权串。
    * authType  认证类型。 * NONE。URL中自带认证。 * MSS_A。HMACSHA256签名模式，在URL中追加参数:hwSecret,hwTime。取值方式：hwSecret=hmac_sha256(Key, URI（live_event_callback_url）+ hwTime)&hwTime=hex(timestamp)
    * key  密钥Key
    * callbackEventType  回调的直播事件类型列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'liveEventTypeCallbackUrl' => null,
        'authType' => null,
        'key' => null,
        'callbackEventType' => null
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
    * liveEventTypeCallbackUrl  直播事件回调地址。https地址，需自带鉴权串。
    * authType  认证类型。 * NONE。URL中自带认证。 * MSS_A。HMACSHA256签名模式，在URL中追加参数:hwSecret,hwTime。取值方式：hwSecret=hmac_sha256(Key, URI（live_event_callback_url）+ hwTime)&hwTime=hex(timestamp)
    * key  密钥Key
    * callbackEventType  回调的直播事件类型列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'liveEventTypeCallbackUrl' => 'live_event_type_callback_url',
            'authType' => 'auth_type',
            'key' => 'key',
            'callbackEventType' => 'callback_event_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * liveEventTypeCallbackUrl  直播事件回调地址。https地址，需自带鉴权串。
    * authType  认证类型。 * NONE。URL中自带认证。 * MSS_A。HMACSHA256签名模式，在URL中追加参数:hwSecret,hwTime。取值方式：hwSecret=hmac_sha256(Key, URI（live_event_callback_url）+ hwTime)&hwTime=hex(timestamp)
    * key  密钥Key
    * callbackEventType  回调的直播事件类型列表
    *
    * @var string[]
    */
    protected static $setters = [
            'liveEventTypeCallbackUrl' => 'setLiveEventTypeCallbackUrl',
            'authType' => 'setAuthType',
            'key' => 'setKey',
            'callbackEventType' => 'setCallbackEventType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * liveEventTypeCallbackUrl  直播事件回调地址。https地址，需自带鉴权串。
    * authType  认证类型。 * NONE。URL中自带认证。 * MSS_A。HMACSHA256签名模式，在URL中追加参数:hwSecret,hwTime。取值方式：hwSecret=hmac_sha256(Key, URI（live_event_callback_url）+ hwTime)&hwTime=hex(timestamp)
    * key  密钥Key
    * callbackEventType  回调的直播事件类型列表
    *
    * @var string[]
    */
    protected static $getters = [
            'liveEventTypeCallbackUrl' => 'getLiveEventTypeCallbackUrl',
            'authType' => 'getAuthType',
            'key' => 'getKey',
            'callbackEventType' => 'getCallbackEventType'
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
    const AUTH_TYPE_NONE = 'NONE';
    const AUTH_TYPE_MSS_A = 'MSS_A';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAuthTypeAllowableValues()
    {
        return [
            self::AUTH_TYPE_NONE,
            self::AUTH_TYPE_MSS_A,
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
        $this->container['liveEventTypeCallbackUrl'] = isset($data['liveEventTypeCallbackUrl']) ? $data['liveEventTypeCallbackUrl'] : null;
        $this->container['authType'] = isset($data['authType']) ? $data['authType'] : null;
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['callbackEventType'] = isset($data['callbackEventType']) ? $data['callbackEventType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['liveEventTypeCallbackUrl']) && (mb_strlen($this->container['liveEventTypeCallbackUrl']) > 2048)) {
                $invalidProperties[] = "invalid value for 'liveEventTypeCallbackUrl', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['liveEventTypeCallbackUrl']) && (mb_strlen($this->container['liveEventTypeCallbackUrl']) < 0)) {
                $invalidProperties[] = "invalid value for 'liveEventTypeCallbackUrl', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getAuthTypeAllowableValues();
                if (!is_null($this->container['authType']) && !in_array($this->container['authType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'authType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['authType']) && (mb_strlen($this->container['authType']) > 32)) {
                $invalidProperties[] = "invalid value for 'authType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['authType']) && (mb_strlen($this->container['authType']) < 0)) {
                $invalidProperties[] = "invalid value for 'authType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['key']) && (mb_strlen($this->container['key']) > 32)) {
                $invalidProperties[] = "invalid value for 'key', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['key']) && (mb_strlen($this->container['key']) < 0)) {
                $invalidProperties[] = "invalid value for 'key', the character length must be bigger than or equal to 0.";
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
    * Gets liveEventTypeCallbackUrl
    *  直播事件回调地址。https地址，需自带鉴权串。
    *
    * @return string|null
    */
    public function getLiveEventTypeCallbackUrl()
    {
        return $this->container['liveEventTypeCallbackUrl'];
    }

    /**
    * Sets liveEventTypeCallbackUrl
    *
    * @param string|null $liveEventTypeCallbackUrl 直播事件回调地址。https地址，需自带鉴权串。
    *
    * @return $this
    */
    public function setLiveEventTypeCallbackUrl($liveEventTypeCallbackUrl)
    {
        $this->container['liveEventTypeCallbackUrl'] = $liveEventTypeCallbackUrl;
        return $this;
    }

    /**
    * Gets authType
    *  认证类型。 * NONE。URL中自带认证。 * MSS_A。HMACSHA256签名模式，在URL中追加参数:hwSecret,hwTime。取值方式：hwSecret=hmac_sha256(Key, URI（live_event_callback_url）+ hwTime)&hwTime=hex(timestamp)
    *
    * @return string|null
    */
    public function getAuthType()
    {
        return $this->container['authType'];
    }

    /**
    * Sets authType
    *
    * @param string|null $authType 认证类型。 * NONE。URL中自带认证。 * MSS_A。HMACSHA256签名模式，在URL中追加参数:hwSecret,hwTime。取值方式：hwSecret=hmac_sha256(Key, URI（live_event_callback_url）+ hwTime)&hwTime=hex(timestamp)
    *
    * @return $this
    */
    public function setAuthType($authType)
    {
        $this->container['authType'] = $authType;
        return $this;
    }

    /**
    * Gets key
    *  密钥Key
    *
    * @return string|null
    */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
    * Sets key
    *
    * @param string|null $key 密钥Key
    *
    * @return $this
    */
    public function setKey($key)
    {
        $this->container['key'] = $key;
        return $this;
    }

    /**
    * Gets callbackEventType
    *  回调的直播事件类型列表
    *
    * @return string[]|null
    */
    public function getCallbackEventType()
    {
        return $this->container['callbackEventType'];
    }

    /**
    * Sets callbackEventType
    *
    * @param string[]|null $callbackEventType 回调的直播事件类型列表
    *
    * @return $this
    */
    public function setCallbackEventType($callbackEventType)
    {
        $this->container['callbackEventType'] = $callbackEventType;
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

