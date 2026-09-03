<?php

namespace HuaweiCloud\SDK\Smnglobal\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSubscriptionUserResponseCallnotifyEndpointInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSubscriptionUserResponseCallnotifyEndpointInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * endpoint  终端地址。
    * verificationCodeEnabled  是否启用验证码发送确认短信，默认为false。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'endpoint' => 'string',
            'verificationCodeEnabled' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * endpoint  终端地址。
    * verificationCodeEnabled  是否启用验证码发送确认短信，默认为false。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'endpoint' => null,
        'verificationCodeEnabled' => null
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
    * endpoint  终端地址。
    * verificationCodeEnabled  是否启用验证码发送确认短信，默认为false。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'endpoint' => 'endpoint',
            'verificationCodeEnabled' => 'verification_code_enabled'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * endpoint  终端地址。
    * verificationCodeEnabled  是否启用验证码发送确认短信，默认为false。
    *
    * @var string[]
    */
    protected static $setters = [
            'endpoint' => 'setEndpoint',
            'verificationCodeEnabled' => 'setVerificationCodeEnabled'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * endpoint  终端地址。
    * verificationCodeEnabled  是否启用验证码发送确认短信，默认为false。
    *
    * @var string[]
    */
    protected static $getters = [
            'endpoint' => 'getEndpoint',
            'verificationCodeEnabled' => 'getVerificationCodeEnabled'
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
        $this->container['verificationCodeEnabled'] = isset($data['verificationCodeEnabled']) ? $data['verificationCodeEnabled'] : null;
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
    *  终端地址。
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
    * @param string $endpoint 终端地址。
    *
    * @return $this
    */
    public function setEndpoint($endpoint)
    {
        $this->container['endpoint'] = $endpoint;
        return $this;
    }

    /**
    * Gets verificationCodeEnabled
    *  是否启用验证码发送确认短信，默认为false。
    *
    * @return bool|null
    */
    public function getVerificationCodeEnabled()
    {
        return $this->container['verificationCodeEnabled'];
    }

    /**
    * Sets verificationCodeEnabled
    *
    * @param bool|null $verificationCodeEnabled 是否启用验证码发送确认短信，默认为false。
    *
    * @return $this
    */
    public function setVerificationCodeEnabled($verificationCodeEnabled)
    {
        $this->container['verificationCodeEnabled'] = $verificationCodeEnabled;
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

