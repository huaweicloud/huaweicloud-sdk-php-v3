<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateCustomPlatformAuthConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateCustomPlatformAuthConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * key  密钥Key。调用自定义直播平台时使用。 使用方式： 调用接口时，增加两个头域：x-hw-mss-time，x-hw-mss-secret * x-hw-mss-time：当前时间戳。Unix时间戳的十六进制结果。1分钟内有效。   示例： 66df9308（即2024.09.10 08:30:00） * x-hw-mss-secret：鉴权串。hmac_sha256(Key, URI（product_query_url,query参数按照Key的字典序排列）+ x-hw-mss-time)  示例： URL  https://api.example.com/v1/products?live_id=111&limit=10&offset=0   Key：GCTbw44s6MPLh4GqgDpnfuFHgy25Enly   hwTime：66df9308   x-hw-mss-secret=hmac_sha256(GCTbw44s6MPLh4GqgDpnfuFHgy25Enly,api.example.com/v1/products?limit=10&live_id=111&offset=066df9308)=5e7fe8869a12a87ea966d9edbc02e38cd4ce62c73b8b05c638f15835e78902d7   x-hw-mss-secret: 5e7fe8869a12a87ea966d9edbc02e38cd4ce62c73b8b05c638f15835e78902d7
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'key' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * key  密钥Key。调用自定义直播平台时使用。 使用方式： 调用接口时，增加两个头域：x-hw-mss-time，x-hw-mss-secret * x-hw-mss-time：当前时间戳。Unix时间戳的十六进制结果。1分钟内有效。   示例： 66df9308（即2024.09.10 08:30:00） * x-hw-mss-secret：鉴权串。hmac_sha256(Key, URI（product_query_url,query参数按照Key的字典序排列）+ x-hw-mss-time)  示例： URL  https://api.example.com/v1/products?live_id=111&limit=10&offset=0   Key：GCTbw44s6MPLh4GqgDpnfuFHgy25Enly   hwTime：66df9308   x-hw-mss-secret=hmac_sha256(GCTbw44s6MPLh4GqgDpnfuFHgy25Enly,api.example.com/v1/products?limit=10&live_id=111&offset=066df9308)=5e7fe8869a12a87ea966d9edbc02e38cd4ce62c73b8b05c638f15835e78902d7   x-hw-mss-secret: 5e7fe8869a12a87ea966d9edbc02e38cd4ce62c73b8b05c638f15835e78902d7
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'key' => null
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
    * key  密钥Key。调用自定义直播平台时使用。 使用方式： 调用接口时，增加两个头域：x-hw-mss-time，x-hw-mss-secret * x-hw-mss-time：当前时间戳。Unix时间戳的十六进制结果。1分钟内有效。   示例： 66df9308（即2024.09.10 08:30:00） * x-hw-mss-secret：鉴权串。hmac_sha256(Key, URI（product_query_url,query参数按照Key的字典序排列）+ x-hw-mss-time)  示例： URL  https://api.example.com/v1/products?live_id=111&limit=10&offset=0   Key：GCTbw44s6MPLh4GqgDpnfuFHgy25Enly   hwTime：66df9308   x-hw-mss-secret=hmac_sha256(GCTbw44s6MPLh4GqgDpnfuFHgy25Enly,api.example.com/v1/products?limit=10&live_id=111&offset=066df9308)=5e7fe8869a12a87ea966d9edbc02e38cd4ce62c73b8b05c638f15835e78902d7   x-hw-mss-secret: 5e7fe8869a12a87ea966d9edbc02e38cd4ce62c73b8b05c638f15835e78902d7
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'key' => 'key'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * key  密钥Key。调用自定义直播平台时使用。 使用方式： 调用接口时，增加两个头域：x-hw-mss-time，x-hw-mss-secret * x-hw-mss-time：当前时间戳。Unix时间戳的十六进制结果。1分钟内有效。   示例： 66df9308（即2024.09.10 08:30:00） * x-hw-mss-secret：鉴权串。hmac_sha256(Key, URI（product_query_url,query参数按照Key的字典序排列）+ x-hw-mss-time)  示例： URL  https://api.example.com/v1/products?live_id=111&limit=10&offset=0   Key：GCTbw44s6MPLh4GqgDpnfuFHgy25Enly   hwTime：66df9308   x-hw-mss-secret=hmac_sha256(GCTbw44s6MPLh4GqgDpnfuFHgy25Enly,api.example.com/v1/products?limit=10&live_id=111&offset=066df9308)=5e7fe8869a12a87ea966d9edbc02e38cd4ce62c73b8b05c638f15835e78902d7   x-hw-mss-secret: 5e7fe8869a12a87ea966d9edbc02e38cd4ce62c73b8b05c638f15835e78902d7
    *
    * @var string[]
    */
    protected static $setters = [
            'key' => 'setKey'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * key  密钥Key。调用自定义直播平台时使用。 使用方式： 调用接口时，增加两个头域：x-hw-mss-time，x-hw-mss-secret * x-hw-mss-time：当前时间戳。Unix时间戳的十六进制结果。1分钟内有效。   示例： 66df9308（即2024.09.10 08:30:00） * x-hw-mss-secret：鉴权串。hmac_sha256(Key, URI（product_query_url,query参数按照Key的字典序排列）+ x-hw-mss-time)  示例： URL  https://api.example.com/v1/products?live_id=111&limit=10&offset=0   Key：GCTbw44s6MPLh4GqgDpnfuFHgy25Enly   hwTime：66df9308   x-hw-mss-secret=hmac_sha256(GCTbw44s6MPLh4GqgDpnfuFHgy25Enly,api.example.com/v1/products?limit=10&live_id=111&offset=066df9308)=5e7fe8869a12a87ea966d9edbc02e38cd4ce62c73b8b05c638f15835e78902d7   x-hw-mss-secret: 5e7fe8869a12a87ea966d9edbc02e38cd4ce62c73b8b05c638f15835e78902d7
    *
    * @var string[]
    */
    protected static $getters = [
            'key' => 'getKey'
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
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets key
    *  密钥Key。调用自定义直播平台时使用。 使用方式： 调用接口时，增加两个头域：x-hw-mss-time，x-hw-mss-secret * x-hw-mss-time：当前时间戳。Unix时间戳的十六进制结果。1分钟内有效。   示例： 66df9308（即2024.09.10 08:30:00） * x-hw-mss-secret：鉴权串。hmac_sha256(Key, URI（product_query_url,query参数按照Key的字典序排列）+ x-hw-mss-time)  示例： URL  https://api.example.com/v1/products?live_id=111&limit=10&offset=0   Key：GCTbw44s6MPLh4GqgDpnfuFHgy25Enly   hwTime：66df9308   x-hw-mss-secret=hmac_sha256(GCTbw44s6MPLh4GqgDpnfuFHgy25Enly,api.example.com/v1/products?limit=10&live_id=111&offset=066df9308)=5e7fe8869a12a87ea966d9edbc02e38cd4ce62c73b8b05c638f15835e78902d7   x-hw-mss-secret: 5e7fe8869a12a87ea966d9edbc02e38cd4ce62c73b8b05c638f15835e78902d7
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
    * @param string|null $key 密钥Key。调用自定义直播平台时使用。 使用方式： 调用接口时，增加两个头域：x-hw-mss-time，x-hw-mss-secret * x-hw-mss-time：当前时间戳。Unix时间戳的十六进制结果。1分钟内有效。   示例： 66df9308（即2024.09.10 08:30:00） * x-hw-mss-secret：鉴权串。hmac_sha256(Key, URI（product_query_url,query参数按照Key的字典序排列）+ x-hw-mss-time)  示例： URL  https://api.example.com/v1/products?live_id=111&limit=10&offset=0   Key：GCTbw44s6MPLh4GqgDpnfuFHgy25Enly   hwTime：66df9308   x-hw-mss-secret=hmac_sha256(GCTbw44s6MPLh4GqgDpnfuFHgy25Enly,api.example.com/v1/products?limit=10&live_id=111&offset=066df9308)=5e7fe8869a12a87ea966d9edbc02e38cd4ce62c73b8b05c638f15835e78902d7   x-hw-mss-secret: 5e7fe8869a12a87ea966d9edbc02e38cd4ce62c73b8b05c638f15835e78902d7
    *
    * @return $this
    */
    public function setKey($key)
    {
        $this->container['key'] = $key;
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

