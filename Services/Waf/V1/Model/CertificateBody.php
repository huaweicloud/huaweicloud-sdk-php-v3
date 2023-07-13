<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CertificateBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CertificateBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  证书id
    * name  证书名
    * expireTime  证书过期时间戳
    * expStatus  证书过期状态，0-未过期，1-已过期，2-即将过期（一个月内即将过期）
    * timestamp  证书上传时间戳
    * bindHost  证书关联的域名信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'expireTime' => 'int',
            'expStatus' => 'int',
            'timestamp' => 'int',
            'bindHost' => '\HuaweiCloud\SDK\Waf\V1\Model\BindHost[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  证书id
    * name  证书名
    * expireTime  证书过期时间戳
    * expStatus  证书过期状态，0-未过期，1-已过期，2-即将过期（一个月内即将过期）
    * timestamp  证书上传时间戳
    * bindHost  证书关联的域名信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'expireTime' => 'int64',
        'expStatus' => null,
        'timestamp' => 'int64',
        'bindHost' => null
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
    * id  证书id
    * name  证书名
    * expireTime  证书过期时间戳
    * expStatus  证书过期状态，0-未过期，1-已过期，2-即将过期（一个月内即将过期）
    * timestamp  证书上传时间戳
    * bindHost  证书关联的域名信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'expireTime' => 'expire_time',
            'expStatus' => 'exp_status',
            'timestamp' => 'timestamp',
            'bindHost' => 'bind_host'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  证书id
    * name  证书名
    * expireTime  证书过期时间戳
    * expStatus  证书过期状态，0-未过期，1-已过期，2-即将过期（一个月内即将过期）
    * timestamp  证书上传时间戳
    * bindHost  证书关联的域名信息
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'expireTime' => 'setExpireTime',
            'expStatus' => 'setExpStatus',
            'timestamp' => 'setTimestamp',
            'bindHost' => 'setBindHost'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  证书id
    * name  证书名
    * expireTime  证书过期时间戳
    * expStatus  证书过期状态，0-未过期，1-已过期，2-即将过期（一个月内即将过期）
    * timestamp  证书上传时间戳
    * bindHost  证书关联的域名信息
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'expireTime' => 'getExpireTime',
            'expStatus' => 'getExpStatus',
            'timestamp' => 'getTimestamp',
            'bindHost' => 'getBindHost'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['expireTime'] = isset($data['expireTime']) ? $data['expireTime'] : null;
        $this->container['expStatus'] = isset($data['expStatus']) ? $data['expStatus'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['bindHost'] = isset($data['bindHost']) ? $data['bindHost'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['timestamp'] === null) {
            $invalidProperties[] = "'timestamp' can't be null";
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
    * Gets id
    *  证书id
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 证书id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  证书名
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 证书名
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets expireTime
    *  证书过期时间戳
    *
    * @return int|null
    */
    public function getExpireTime()
    {
        return $this->container['expireTime'];
    }

    /**
    * Sets expireTime
    *
    * @param int|null $expireTime 证书过期时间戳
    *
    * @return $this
    */
    public function setExpireTime($expireTime)
    {
        $this->container['expireTime'] = $expireTime;
        return $this;
    }

    /**
    * Gets expStatus
    *  证书过期状态，0-未过期，1-已过期，2-即将过期（一个月内即将过期）
    *
    * @return int|null
    */
    public function getExpStatus()
    {
        return $this->container['expStatus'];
    }

    /**
    * Sets expStatus
    *
    * @param int|null $expStatus 证书过期状态，0-未过期，1-已过期，2-即将过期（一个月内即将过期）
    *
    * @return $this
    */
    public function setExpStatus($expStatus)
    {
        $this->container['expStatus'] = $expStatus;
        return $this;
    }

    /**
    * Gets timestamp
    *  证书上传时间戳
    *
    * @return int
    */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
    * Sets timestamp
    *
    * @param int $timestamp 证书上传时间戳
    *
    * @return $this
    */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;
        return $this;
    }

    /**
    * Gets bindHost
    *  证书关联的域名信息
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\BindHost[]|null
    */
    public function getBindHost()
    {
        return $this->container['bindHost'];
    }

    /**
    * Sets bindHost
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\BindHost[]|null $bindHost 证书关联的域名信息
    *
    * @return $this
    */
    public function setBindHost($bindHost)
    {
        $this->container['bindHost'] = $bindHost;
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

