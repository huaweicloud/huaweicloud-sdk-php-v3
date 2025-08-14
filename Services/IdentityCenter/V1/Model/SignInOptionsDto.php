<?php

namespace HuaweiCloud\SDK\IdentityCenter\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SignInOptionsDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SignInOptionsDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * origin  IAM身份中心跳转应用程序的方式
    * applicationUrl  接受应用程序身份验证请求的Url
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'origin' => 'string',
            'applicationUrl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * origin  IAM身份中心跳转应用程序的方式
    * applicationUrl  接受应用程序身份验证请求的Url
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'origin' => null,
        'applicationUrl' => null
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
    * origin  IAM身份中心跳转应用程序的方式
    * applicationUrl  接受应用程序身份验证请求的Url
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'origin' => 'origin',
            'applicationUrl' => 'application_url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * origin  IAM身份中心跳转应用程序的方式
    * applicationUrl  接受应用程序身份验证请求的Url
    *
    * @var string[]
    */
    protected static $setters = [
            'origin' => 'setOrigin',
            'applicationUrl' => 'setApplicationUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * origin  IAM身份中心跳转应用程序的方式
    * applicationUrl  接受应用程序身份验证请求的Url
    *
    * @var string[]
    */
    protected static $getters = [
            'origin' => 'getOrigin',
            'applicationUrl' => 'getApplicationUrl'
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
    const ORIGIN_IDENTITY_CENTER = 'IDENTITY_CENTER';
    const ORIGIN_APPLICATION = 'APPLICATION';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOriginAllowableValues()
    {
        return [
            self::ORIGIN_IDENTITY_CENTER,
            self::ORIGIN_APPLICATION,
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
        $this->container['origin'] = isset($data['origin']) ? $data['origin'] : null;
        $this->container['applicationUrl'] = isset($data['applicationUrl']) ? $data['applicationUrl'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['origin'] === null) {
            $invalidProperties[] = "'origin' can't be null";
        }
            $allowedValues = $this->getOriginAllowableValues();
                if (!is_null($this->container['origin']) && !in_array($this->container['origin'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'origin', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['applicationUrl']) && (mb_strlen($this->container['applicationUrl']) > 512)) {
                $invalidProperties[] = "invalid value for 'applicationUrl', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['applicationUrl']) && (mb_strlen($this->container['applicationUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'applicationUrl', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['applicationUrl']) && !preg_match("/http(s)?:\/\/[-a-zA-Z0-9+&@#\/%?=~_|!:,.;]*[-a-zA-Z0-9+&bb@#\/%?=~_|]/", $this->container['applicationUrl'])) {
                $invalidProperties[] = "invalid value for 'applicationUrl', must be conform to the pattern /http(s)?:\/\/[-a-zA-Z0-9+&@#\/%?=~_|!:,.;]*[-a-zA-Z0-9+&bb@#\/%?=~_|]/.";
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
    * Gets origin
    *  IAM身份中心跳转应用程序的方式
    *
    * @return string
    */
    public function getOrigin()
    {
        return $this->container['origin'];
    }

    /**
    * Sets origin
    *
    * @param string $origin IAM身份中心跳转应用程序的方式
    *
    * @return $this
    */
    public function setOrigin($origin)
    {
        $this->container['origin'] = $origin;
        return $this;
    }

    /**
    * Gets applicationUrl
    *  接受应用程序身份验证请求的Url
    *
    * @return string|null
    */
    public function getApplicationUrl()
    {
        return $this->container['applicationUrl'];
    }

    /**
    * Sets applicationUrl
    *
    * @param string|null $applicationUrl 接受应用程序身份验证请求的Url
    *
    * @return $this
    */
    public function setApplicationUrl($applicationUrl)
    {
        $this->container['applicationUrl'] = $applicationUrl;
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

