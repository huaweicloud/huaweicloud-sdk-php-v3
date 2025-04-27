<?php

namespace HuaweiCloud\SDK\Dns\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdatePublicZoneInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdatePublicZoneInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * description  域名的描述信息。长度不超过255个字符。
    * email  管理该域名的管理员邮箱，用于生成该域名的SOA记录。  如果为空，表示维持原值。  默认值为空。
    * ttl  用于填写默认生成的SOA记录中有效缓存时间，以秒为单位。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'description' => 'string',
            'email' => 'string',
            'ttl' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * description  域名的描述信息。长度不超过255个字符。
    * email  管理该域名的管理员邮箱，用于生成该域名的SOA记录。  如果为空，表示维持原值。  默认值为空。
    * ttl  用于填写默认生成的SOA记录中有效缓存时间，以秒为单位。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'description' => null,
        'email' => null,
        'ttl' => 'int32'
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
    * description  域名的描述信息。长度不超过255个字符。
    * email  管理该域名的管理员邮箱，用于生成该域名的SOA记录。  如果为空，表示维持原值。  默认值为空。
    * ttl  用于填写默认生成的SOA记录中有效缓存时间，以秒为单位。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'description' => 'description',
            'email' => 'email',
            'ttl' => 'ttl'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * description  域名的描述信息。长度不超过255个字符。
    * email  管理该域名的管理员邮箱，用于生成该域名的SOA记录。  如果为空，表示维持原值。  默认值为空。
    * ttl  用于填写默认生成的SOA记录中有效缓存时间，以秒为单位。
    *
    * @var string[]
    */
    protected static $setters = [
            'description' => 'setDescription',
            'email' => 'setEmail',
            'ttl' => 'setTtl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * description  域名的描述信息。长度不超过255个字符。
    * email  管理该域名的管理员邮箱，用于生成该域名的SOA记录。  如果为空，表示维持原值。  默认值为空。
    * ttl  用于填写默认生成的SOA记录中有效缓存时间，以秒为单位。
    *
    * @var string[]
    */
    protected static $getters = [
            'description' => 'getDescription',
            'email' => 'getEmail',
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
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
    * Gets description
    *  域名的描述信息。长度不超过255个字符。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 域名的描述信息。长度不超过255个字符。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets email
    *  管理该域名的管理员邮箱，用于生成该域名的SOA记录。  如果为空，表示维持原值。  默认值为空。
    *
    * @return string|null
    */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
    * Sets email
    *
    * @param string|null $email 管理该域名的管理员邮箱，用于生成该域名的SOA记录。  如果为空，表示维持原值。  默认值为空。
    *
    * @return $this
    */
    public function setEmail($email)
    {
        $this->container['email'] = $email;
        return $this;
    }

    /**
    * Gets ttl
    *  用于填写默认生成的SOA记录中有效缓存时间，以秒为单位。
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
    * @param int|null $ttl 用于填写默认生成的SOA记录中有效缓存时间，以秒为单位。
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

