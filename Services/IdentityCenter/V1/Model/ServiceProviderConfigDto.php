<?php

namespace HuaweiCloud\SDK\IdentityCenter\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ServiceProviderConfigDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ServiceProviderConfigDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * audience  SAML受众
    * requireRequestSignature  是否需要签名
    * consumers  SAML响应接收方
    * startUrl  应用程序启动Url
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'audience' => 'string',
            'requireRequestSignature' => 'bool',
            'consumers' => '\HuaweiCloud\SDK\IdentityCenter\V1\Model\ConsumersDto[]',
            'startUrl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * audience  SAML受众
    * requireRequestSignature  是否需要签名
    * consumers  SAML响应接收方
    * startUrl  应用程序启动Url
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'audience' => null,
        'requireRequestSignature' => null,
        'consumers' => null,
        'startUrl' => null
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
    * audience  SAML受众
    * requireRequestSignature  是否需要签名
    * consumers  SAML响应接收方
    * startUrl  应用程序启动Url
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'audience' => 'audience',
            'requireRequestSignature' => 'require_request_signature',
            'consumers' => 'consumers',
            'startUrl' => 'start_url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * audience  SAML受众
    * requireRequestSignature  是否需要签名
    * consumers  SAML响应接收方
    * startUrl  应用程序启动Url
    *
    * @var string[]
    */
    protected static $setters = [
            'audience' => 'setAudience',
            'requireRequestSignature' => 'setRequireRequestSignature',
            'consumers' => 'setConsumers',
            'startUrl' => 'setStartUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * audience  SAML受众
    * requireRequestSignature  是否需要签名
    * consumers  SAML响应接收方
    * startUrl  应用程序启动Url
    *
    * @var string[]
    */
    protected static $getters = [
            'audience' => 'getAudience',
            'requireRequestSignature' => 'getRequireRequestSignature',
            'consumers' => 'getConsumers',
            'startUrl' => 'getStartUrl'
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
        $this->container['audience'] = isset($data['audience']) ? $data['audience'] : null;
        $this->container['requireRequestSignature'] = isset($data['requireRequestSignature']) ? $data['requireRequestSignature'] : null;
        $this->container['consumers'] = isset($data['consumers']) ? $data['consumers'] : null;
        $this->container['startUrl'] = isset($data['startUrl']) ? $data['startUrl'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['audience'] === null) {
            $invalidProperties[] = "'audience' can't be null";
        }
            if ((mb_strlen($this->container['audience']) > 512)) {
                $invalidProperties[] = "invalid value for 'audience', the character length must be smaller than or equal to 512.";
            }
            if ((mb_strlen($this->container['audience']) < 1)) {
                $invalidProperties[] = "invalid value for 'audience', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/[-a-zA-Z0-9&$@#\/%?=~_'|!:,.;*+\\[\\]]+/", $this->container['audience'])) {
                $invalidProperties[] = "invalid value for 'audience', must be conform to the pattern /[-a-zA-Z0-9&$@#\/%?=~_'|!:,.;*+\\[\\]]+/.";
            }
        if ($this->container['consumers'] === null) {
            $invalidProperties[] = "'consumers' can't be null";
        }
            if (!is_null($this->container['startUrl']) && (mb_strlen($this->container['startUrl']) > 512)) {
                $invalidProperties[] = "invalid value for 'startUrl', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['startUrl']) && (mb_strlen($this->container['startUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'startUrl', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['startUrl']) && !preg_match("/^http(s)?:\/\/[-a-zA-Z0-9+&@#\/%?=~_|!:,.;]*[-a-zA-Z0-9+&bb@#\/%?=~_|]/", $this->container['startUrl'])) {
                $invalidProperties[] = "invalid value for 'startUrl', must be conform to the pattern /^http(s)?:\/\/[-a-zA-Z0-9+&@#\/%?=~_|!:,.;]*[-a-zA-Z0-9+&bb@#\/%?=~_|]/.";
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
    * Gets audience
    *  SAML受众
    *
    * @return string
    */
    public function getAudience()
    {
        return $this->container['audience'];
    }

    /**
    * Sets audience
    *
    * @param string $audience SAML受众
    *
    * @return $this
    */
    public function setAudience($audience)
    {
        $this->container['audience'] = $audience;
        return $this;
    }

    /**
    * Gets requireRequestSignature
    *  是否需要签名
    *
    * @return bool|null
    */
    public function getRequireRequestSignature()
    {
        return $this->container['requireRequestSignature'];
    }

    /**
    * Sets requireRequestSignature
    *
    * @param bool|null $requireRequestSignature 是否需要签名
    *
    * @return $this
    */
    public function setRequireRequestSignature($requireRequestSignature)
    {
        $this->container['requireRequestSignature'] = $requireRequestSignature;
        return $this;
    }

    /**
    * Gets consumers
    *  SAML响应接收方
    *
    * @return \HuaweiCloud\SDK\IdentityCenter\V1\Model\ConsumersDto[]
    */
    public function getConsumers()
    {
        return $this->container['consumers'];
    }

    /**
    * Sets consumers
    *
    * @param \HuaweiCloud\SDK\IdentityCenter\V1\Model\ConsumersDto[] $consumers SAML响应接收方
    *
    * @return $this
    */
    public function setConsumers($consumers)
    {
        $this->container['consumers'] = $consumers;
        return $this;
    }

    /**
    * Gets startUrl
    *  应用程序启动Url
    *
    * @return string|null
    */
    public function getStartUrl()
    {
        return $this->container['startUrl'];
    }

    /**
    * Sets startUrl
    *
    * @param string|null $startUrl 应用程序启动Url
    *
    * @return $this
    */
    public function setStartUrl($startUrl)
    {
        $this->container['startUrl'] = $startUrl;
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

