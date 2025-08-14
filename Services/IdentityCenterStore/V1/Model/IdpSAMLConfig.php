<?php

namespace HuaweiCloud\SDK\IdentityCenterStore\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IdpSAMLConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IdpSAMLConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * entityId  身份提供商发布者标识
    * loginUrl  身份提供商登录链接
    * wantRequestSigned  是否要求SAML请求签名验证
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'entityId' => 'string',
            'loginUrl' => 'string',
            'wantRequestSigned' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * entityId  身份提供商发布者标识
    * loginUrl  身份提供商登录链接
    * wantRequestSigned  是否要求SAML请求签名验证
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'entityId' => null,
        'loginUrl' => null,
        'wantRequestSigned' => null
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
    * entityId  身份提供商发布者标识
    * loginUrl  身份提供商登录链接
    * wantRequestSigned  是否要求SAML请求签名验证
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'entityId' => 'entity_id',
            'loginUrl' => 'login_url',
            'wantRequestSigned' => 'want_request_signed'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * entityId  身份提供商发布者标识
    * loginUrl  身份提供商登录链接
    * wantRequestSigned  是否要求SAML请求签名验证
    *
    * @var string[]
    */
    protected static $setters = [
            'entityId' => 'setEntityId',
            'loginUrl' => 'setLoginUrl',
            'wantRequestSigned' => 'setWantRequestSigned'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * entityId  身份提供商发布者标识
    * loginUrl  身份提供商登录链接
    * wantRequestSigned  是否要求SAML请求签名验证
    *
    * @var string[]
    */
    protected static $getters = [
            'entityId' => 'getEntityId',
            'loginUrl' => 'getLoginUrl',
            'wantRequestSigned' => 'getWantRequestSigned'
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
        $this->container['entityId'] = isset($data['entityId']) ? $data['entityId'] : null;
        $this->container['loginUrl'] = isset($data['loginUrl']) ? $data['loginUrl'] : null;
        $this->container['wantRequestSigned'] = isset($data['wantRequestSigned']) ? $data['wantRequestSigned'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['entityId'] === null) {
            $invalidProperties[] = "'entityId' can't be null";
        }
        if ($this->container['loginUrl'] === null) {
            $invalidProperties[] = "'loginUrl' can't be null";
        }
        if ($this->container['wantRequestSigned'] === null) {
            $invalidProperties[] = "'wantRequestSigned' can't be null";
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
    * Gets entityId
    *  身份提供商发布者标识
    *
    * @return string
    */
    public function getEntityId()
    {
        return $this->container['entityId'];
    }

    /**
    * Sets entityId
    *
    * @param string $entityId 身份提供商发布者标识
    *
    * @return $this
    */
    public function setEntityId($entityId)
    {
        $this->container['entityId'] = $entityId;
        return $this;
    }

    /**
    * Gets loginUrl
    *  身份提供商登录链接
    *
    * @return string
    */
    public function getLoginUrl()
    {
        return $this->container['loginUrl'];
    }

    /**
    * Sets loginUrl
    *
    * @param string $loginUrl 身份提供商登录链接
    *
    * @return $this
    */
    public function setLoginUrl($loginUrl)
    {
        $this->container['loginUrl'] = $loginUrl;
        return $this;
    }

    /**
    * Gets wantRequestSigned
    *  是否要求SAML请求签名验证
    *
    * @return bool
    */
    public function getWantRequestSigned()
    {
        return $this->container['wantRequestSigned'];
    }

    /**
    * Sets wantRequestSigned
    *
    * @param bool $wantRequestSigned 是否要求SAML请求签名验证
    *
    * @return $this
    */
    public function setWantRequestSigned($wantRequestSigned)
    {
        $this->container['wantRequestSigned'] = $wantRequestSigned;
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

