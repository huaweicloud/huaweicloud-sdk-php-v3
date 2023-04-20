<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ErrorCodeCache implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ErrorCodeCache';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * code  允许配置的错误码: 400, 403, 404, 405, 414, 500, 501, 502, 503, 504
    * ttl  错误码缓存时间，单位为秒，范围0-31,536,000(一年默认为365天)
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'code' => 'int',
            'ttl' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * code  允许配置的错误码: 400, 403, 404, 405, 414, 500, 501, 502, 503, 504
    * ttl  错误码缓存时间，单位为秒，范围0-31,536,000(一年默认为365天)
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'code' => null,
        'ttl' => null
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
    * code  允许配置的错误码: 400, 403, 404, 405, 414, 500, 501, 502, 503, 504
    * ttl  错误码缓存时间，单位为秒，范围0-31,536,000(一年默认为365天)
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'code' => 'code',
            'ttl' => 'ttl'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * code  允许配置的错误码: 400, 403, 404, 405, 414, 500, 501, 502, 503, 504
    * ttl  错误码缓存时间，单位为秒，范围0-31,536,000(一年默认为365天)
    *
    * @var string[]
    */
    protected static $setters = [
            'code' => 'setCode',
            'ttl' => 'setTtl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * code  允许配置的错误码: 400, 403, 404, 405, 414, 500, 501, 502, 503, 504
    * ttl  错误码缓存时间，单位为秒，范围0-31,536,000(一年默认为365天)
    *
    * @var string[]
    */
    protected static $getters = [
            'code' => 'getCode',
            'ttl' => 'getTtl'
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
    const CODE_400 = 400;
    const CODE_403 = 403;
    const CODE_404 = 404;
    const CODE_405 = 405;
    const CODE_414 = 414;
    const CODE_500 = 500;
    const CODE_501 = 501;
    const CODE_502 = 502;
    const CODE_503 = 503;
    const CODE_504 = 504;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCodeAllowableValues()
    {
        return [
            self::CODE_400,
            self::CODE_403,
            self::CODE_404,
            self::CODE_405,
            self::CODE_414,
            self::CODE_500,
            self::CODE_501,
            self::CODE_502,
            self::CODE_503,
            self::CODE_504,
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['ttl'] = isset($data['ttl']) ? $data['ttl'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getCodeAllowableValues();
                if (!is_null($this->container['code']) && !in_array($this->container['code'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'code', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['ttl']) && ($this->container['ttl'] > 31536000)) {
                $invalidProperties[] = "invalid value for 'ttl', must be smaller than or equal to 31536000.";
            }
            if (!is_null($this->container['ttl']) && ($this->container['ttl'] < 0)) {
                $invalidProperties[] = "invalid value for 'ttl', must be bigger than or equal to 0.";
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
    * Gets code
    *  允许配置的错误码: 400, 403, 404, 405, 414, 500, 501, 502, 503, 504
    *
    * @return int|null
    */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
    * Sets code
    *
    * @param int|null $code 允许配置的错误码: 400, 403, 404, 405, 414, 500, 501, 502, 503, 504
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
        return $this;
    }

    /**
    * Gets ttl
    *  错误码缓存时间，单位为秒，范围0-31,536,000(一年默认为365天)
    *
    * @return int|null
    */
    public function getTtl()
    {
        return $this->container['ttl'];
    }

    /**
    * Sets ttl
    *
    * @param int|null $ttl 错误码缓存时间，单位为秒，范围0-31,536,000(一年默认为365天)
    *
    * @return $this
    */
    public function setTtl($ttl)
    {
        $this->container['ttl'] = $ttl;
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

