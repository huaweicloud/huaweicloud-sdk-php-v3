<?php

namespace HuaweiCloud\SDK\Smnglobal\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateSubscriptionUserRequestWelinkEndpointInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateSubscriptionUserRequestWelinkEndpointInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * endpoint  终端地址。必须是一个welink的群号。
    * clientId  welink协议订阅用户的client_id，从Welink方获取。
    * clientSecret  welink协议订阅用户的client_secret，从Welink方获取。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'endpoint' => 'string',
            'clientId' => 'string',
            'clientSecret' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * endpoint  终端地址。必须是一个welink的群号。
    * clientId  welink协议订阅用户的client_id，从Welink方获取。
    * clientSecret  welink协议订阅用户的client_secret，从Welink方获取。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'endpoint' => null,
        'clientId' => null,
        'clientSecret' => null
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
    * endpoint  终端地址。必须是一个welink的群号。
    * clientId  welink协议订阅用户的client_id，从Welink方获取。
    * clientSecret  welink协议订阅用户的client_secret，从Welink方获取。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'endpoint' => 'endpoint',
            'clientId' => 'client_id',
            'clientSecret' => 'client_secret'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * endpoint  终端地址。必须是一个welink的群号。
    * clientId  welink协议订阅用户的client_id，从Welink方获取。
    * clientSecret  welink协议订阅用户的client_secret，从Welink方获取。
    *
    * @var string[]
    */
    protected static $setters = [
            'endpoint' => 'setEndpoint',
            'clientId' => 'setClientId',
            'clientSecret' => 'setClientSecret'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * endpoint  终端地址。必须是一个welink的群号。
    * clientId  welink协议订阅用户的client_id，从Welink方获取。
    * clientSecret  welink协议订阅用户的client_secret，从Welink方获取。
    *
    * @var string[]
    */
    protected static $getters = [
            'endpoint' => 'getEndpoint',
            'clientId' => 'getClientId',
            'clientSecret' => 'getClientSecret'
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
        $this->container['endpoint'] = isset($data['endpoint']) ? $data['endpoint'] : null;
        $this->container['clientId'] = isset($data['clientId']) ? $data['clientId'] : null;
        $this->container['clientSecret'] = isset($data['clientSecret']) ? $data['clientSecret'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['endpoint'] === null) {
            $invalidProperties[] = "'endpoint' can't be null";
        }
        if ($this->container['clientId'] === null) {
            $invalidProperties[] = "'clientId' can't be null";
        }
            if ((mb_strlen($this->container['clientId']) > 64)) {
                $invalidProperties[] = "invalid value for 'clientId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['clientId']) < 0)) {
                $invalidProperties[] = "invalid value for 'clientId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['clientSecret'] === null) {
            $invalidProperties[] = "'clientSecret' can't be null";
        }
            if ((mb_strlen($this->container['clientSecret']) > 64)) {
                $invalidProperties[] = "invalid value for 'clientSecret', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['clientSecret']) < 0)) {
                $invalidProperties[] = "invalid value for 'clientSecret', the character length must be bigger than or equal to 0.";
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
    * Gets endpoint
    *  终端地址。必须是一个welink的群号。
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
    * @param string $endpoint 终端地址。必须是一个welink的群号。
    *
    * @return $this
    */
    public function setEndpoint($endpoint)
    {
        $this->container['endpoint'] = $endpoint;
        return $this;
    }

    /**
    * Gets clientId
    *  welink协议订阅用户的client_id，从Welink方获取。
    *
    * @return string
    */
    public function getClientId()
    {
        return $this->container['clientId'];
    }

    /**
    * Sets clientId
    *
    * @param string $clientId welink协议订阅用户的client_id，从Welink方获取。
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
    *  welink协议订阅用户的client_secret，从Welink方获取。
    *
    * @return string
    */
    public function getClientSecret()
    {
        return $this->container['clientSecret'];
    }

    /**
    * Sets clientSecret
    *
    * @param string $clientSecret welink协议订阅用户的client_secret，从Welink方获取。
    *
    * @return $this
    */
    public function setClientSecret($clientSecret)
    {
        $this->container['clientSecret'] = $clientSecret;
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

