<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CheckDomainVerificationInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CheckDomainVerificationInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domain  直播域名
    * verifyType  验证方式，DNS：DNS解析验证；FILE：文件验证
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domain' => 'string',
            'verifyType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domain  直播域名
    * verifyType  验证方式，DNS：DNS解析验证；FILE：文件验证
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domain' => null,
        'verifyType' => null
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
    * domain  直播域名
    * verifyType  验证方式，DNS：DNS解析验证；FILE：文件验证
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domain' => 'domain',
            'verifyType' => 'verify_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domain  直播域名
    * verifyType  验证方式，DNS：DNS解析验证；FILE：文件验证
    *
    * @var string[]
    */
    protected static $setters = [
            'domain' => 'setDomain',
            'verifyType' => 'setVerifyType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domain  直播域名
    * verifyType  验证方式，DNS：DNS解析验证；FILE：文件验证
    *
    * @var string[]
    */
    protected static $getters = [
            'domain' => 'getDomain',
            'verifyType' => 'getVerifyType'
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
    const VERIFY_TYPE_DNS = 'DNS';
    const VERIFY_TYPE_FILE = 'FILE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getVerifyTypeAllowableValues()
    {
        return [
            self::VERIFY_TYPE_DNS,
            self::VERIFY_TYPE_FILE,
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
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['verifyType'] = isset($data['verifyType']) ? $data['verifyType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['domain'] === null) {
            $invalidProperties[] = "'domain' can't be null";
        }
            if ((mb_strlen($this->container['domain']) > 255)) {
                $invalidProperties[] = "invalid value for 'domain', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['domain']) < 1)) {
                $invalidProperties[] = "invalid value for 'domain', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['verifyType'] === null) {
            $invalidProperties[] = "'verifyType' can't be null";
        }
            $allowedValues = $this->getVerifyTypeAllowableValues();
                if (!is_null($this->container['verifyType']) && !in_array($this->container['verifyType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'verifyType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['verifyType']) > 64)) {
                $invalidProperties[] = "invalid value for 'verifyType', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['verifyType']) < 1)) {
                $invalidProperties[] = "invalid value for 'verifyType', the character length must be bigger than or equal to 1.";
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
    * Gets domain
    *  直播域名
    *
    * @return string
    */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
    * Sets domain
    *
    * @param string $domain 直播域名
    *
    * @return $this
    */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;
        return $this;
    }

    /**
    * Gets verifyType
    *  验证方式，DNS：DNS解析验证；FILE：文件验证
    *
    * @return string
    */
    public function getVerifyType()
    {
        return $this->container['verifyType'];
    }

    /**
    * Sets verifyType
    *
    * @param string $verifyType 验证方式，DNS：DNS解析验证；FILE：文件验证
    *
    * @return $this
    */
    public function setVerifyType($verifyType)
    {
        $this->container['verifyType'] = $verifyType;
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

