<?php

namespace HuaweiCloud\SDK\Aad\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CertInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CertInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * certName  证书名称
    * id  证书id
    * applyDomain  适用域名
    * expireTime  过期时间
    * expireStatus  过期状态
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'certName' => 'string',
            'id' => 'string',
            'applyDomain' => 'string',
            'expireTime' => 'int',
            'expireStatus' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * certName  证书名称
    * id  证书id
    * applyDomain  适用域名
    * expireTime  过期时间
    * expireStatus  过期状态
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'certName' => null,
        'id' => null,
        'applyDomain' => null,
        'expireTime' => 'int64',
        'expireStatus' => 'int32'
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
    * certName  证书名称
    * id  证书id
    * applyDomain  适用域名
    * expireTime  过期时间
    * expireStatus  过期状态
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'certName' => 'cert_name',
            'id' => 'id',
            'applyDomain' => 'apply_domain',
            'expireTime' => 'expire_time',
            'expireStatus' => 'expire_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * certName  证书名称
    * id  证书id
    * applyDomain  适用域名
    * expireTime  过期时间
    * expireStatus  过期状态
    *
    * @var string[]
    */
    protected static $setters = [
            'certName' => 'setCertName',
            'id' => 'setId',
            'applyDomain' => 'setApplyDomain',
            'expireTime' => 'setExpireTime',
            'expireStatus' => 'setExpireStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * certName  证书名称
    * id  证书id
    * applyDomain  适用域名
    * expireTime  过期时间
    * expireStatus  过期状态
    *
    * @var string[]
    */
    protected static $getters = [
            'certName' => 'getCertName',
            'id' => 'getId',
            'applyDomain' => 'getApplyDomain',
            'expireTime' => 'getExpireTime',
            'expireStatus' => 'getExpireStatus'
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
        $this->container['certName'] = isset($data['certName']) ? $data['certName'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['applyDomain'] = isset($data['applyDomain']) ? $data['applyDomain'] : null;
        $this->container['expireTime'] = isset($data['expireTime']) ? $data['expireTime'] : null;
        $this->container['expireStatus'] = isset($data['expireStatus']) ? $data['expireStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['certName'] === null) {
            $invalidProperties[] = "'certName' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['applyDomain'] === null) {
            $invalidProperties[] = "'applyDomain' can't be null";
        }
        if ($this->container['expireTime'] === null) {
            $invalidProperties[] = "'expireTime' can't be null";
        }
        if ($this->container['expireStatus'] === null) {
            $invalidProperties[] = "'expireStatus' can't be null";
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
    * Gets certName
    *  证书名称
    *
    * @return string
    */
    public function getCertName()
    {
        return $this->container['certName'];
    }

    /**
    * Sets certName
    *
    * @param string $certName 证书名称
    *
    * @return $this
    */
    public function setCertName($certName)
    {
        $this->container['certName'] = $certName;
        return $this;
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
    * Gets applyDomain
    *  适用域名
    *
    * @return string
    */
    public function getApplyDomain()
    {
        return $this->container['applyDomain'];
    }

    /**
    * Sets applyDomain
    *
    * @param string $applyDomain 适用域名
    *
    * @return $this
    */
    public function setApplyDomain($applyDomain)
    {
        $this->container['applyDomain'] = $applyDomain;
        return $this;
    }

    /**
    * Gets expireTime
    *  过期时间
    *
    * @return int
    */
    public function getExpireTime()
    {
        return $this->container['expireTime'];
    }

    /**
    * Sets expireTime
    *
    * @param int $expireTime 过期时间
    *
    * @return $this
    */
    public function setExpireTime($expireTime)
    {
        $this->container['expireTime'] = $expireTime;
        return $this;
    }

    /**
    * Gets expireStatus
    *  过期状态
    *
    * @return int
    */
    public function getExpireStatus()
    {
        return $this->container['expireStatus'];
    }

    /**
    * Sets expireStatus
    *
    * @param int $expireStatus 过期状态
    *
    * @return $this
    */
    public function setExpireStatus($expireStatus)
    {
        $this->container['expireStatus'] = $expireStatus;
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

