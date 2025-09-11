<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Target implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Target';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  触发类型，可选http
    * address  触发地址，不可修改
    * authHeader  请求头，格式为key1:value1;key2:value2
    * skipCertVerify  是否跳过证书认证
    * addressType  触发地址类型，可选internal(内网)，internet(公网)。internal必须为内网ip形式。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'address' => 'string',
            'authHeader' => 'string',
            'skipCertVerify' => 'bool',
            'addressType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  触发类型，可选http
    * address  触发地址，不可修改
    * authHeader  请求头，格式为key1:value1;key2:value2
    * skipCertVerify  是否跳过证书认证
    * addressType  触发地址类型，可选internal(内网)，internet(公网)。internal必须为内网ip形式。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'address' => null,
        'authHeader' => null,
        'skipCertVerify' => null,
        'addressType' => null
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
    * type  触发类型，可选http
    * address  触发地址，不可修改
    * authHeader  请求头，格式为key1:value1;key2:value2
    * skipCertVerify  是否跳过证书认证
    * addressType  触发地址类型，可选internal(内网)，internet(公网)。internal必须为内网ip形式。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'address' => 'address',
            'authHeader' => 'auth_header',
            'skipCertVerify' => 'skip_cert_verify',
            'addressType' => 'address_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  触发类型，可选http
    * address  触发地址，不可修改
    * authHeader  请求头，格式为key1:value1;key2:value2
    * skipCertVerify  是否跳过证书认证
    * addressType  触发地址类型，可选internal(内网)，internet(公网)。internal必须为内网ip形式。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'address' => 'setAddress',
            'authHeader' => 'setAuthHeader',
            'skipCertVerify' => 'setSkipCertVerify',
            'addressType' => 'setAddressType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  触发类型，可选http
    * address  触发地址，不可修改
    * authHeader  请求头，格式为key1:value1;key2:value2
    * skipCertVerify  是否跳过证书认证
    * addressType  触发地址类型，可选internal(内网)，internet(公网)。internal必须为内网ip形式。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'address' => 'getAddress',
            'authHeader' => 'getAuthHeader',
            'skipCertVerify' => 'getSkipCertVerify',
            'addressType' => 'getAddressType'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['authHeader'] = isset($data['authHeader']) ? $data['authHeader'] : null;
        $this->container['skipCertVerify'] = isset($data['skipCertVerify']) ? $data['skipCertVerify'] : null;
        $this->container['addressType'] = isset($data['addressType']) ? $data['addressType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
        }
        if ($this->container['addressType'] === null) {
            $invalidProperties[] = "'addressType' can't be null";
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
    * Gets type
    *  触发类型，可选http
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 触发类型，可选http
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets address
    *  触发地址，不可修改
    *
    * @return string
    */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
    * Sets address
    *
    * @param string $address 触发地址，不可修改
    *
    * @return $this
    */
    public function setAddress($address)
    {
        $this->container['address'] = $address;
        return $this;
    }

    /**
    * Gets authHeader
    *  请求头，格式为key1:value1;key2:value2
    *
    * @return string|null
    */
    public function getAuthHeader()
    {
        return $this->container['authHeader'];
    }

    /**
    * Sets authHeader
    *
    * @param string|null $authHeader 请求头，格式为key1:value1;key2:value2
    *
    * @return $this
    */
    public function setAuthHeader($authHeader)
    {
        $this->container['authHeader'] = $authHeader;
        return $this;
    }

    /**
    * Gets skipCertVerify
    *  是否跳过证书认证
    *
    * @return bool|null
    */
    public function getSkipCertVerify()
    {
        return $this->container['skipCertVerify'];
    }

    /**
    * Sets skipCertVerify
    *
    * @param bool|null $skipCertVerify 是否跳过证书认证
    *
    * @return $this
    */
    public function setSkipCertVerify($skipCertVerify)
    {
        $this->container['skipCertVerify'] = $skipCertVerify;
        return $this;
    }

    /**
    * Gets addressType
    *  触发地址类型，可选internal(内网)，internet(公网)。internal必须为内网ip形式。
    *
    * @return string
    */
    public function getAddressType()
    {
        return $this->container['addressType'];
    }

    /**
    * Sets addressType
    *
    * @param string $addressType 触发地址类型，可选internal(内网)，internet(公网)。internal必须为内网ip形式。
    *
    * @return $this
    */
    public function setAddressType($addressType)
    {
        $this->container['addressType'] = $addressType;
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

