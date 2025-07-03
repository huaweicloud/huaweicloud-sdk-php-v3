<?php

namespace HuaweiCloud\SDK\IdentityCenterOIDC\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StartDeviceAuthorizationReqBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StartDeviceAuthorizationReqBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clientId  在IAM身份中心注册的客户端的唯一标识符
    * clientSecret  为客户端生成的秘密字符串。客户端将使用此字符串在后续调用中获得服务的身份验证
    * startUrl  访问门户的URL
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clientId' => 'string',
            'clientSecret' => 'string',
            'startUrl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clientId  在IAM身份中心注册的客户端的唯一标识符
    * clientSecret  为客户端生成的秘密字符串。客户端将使用此字符串在后续调用中获得服务的身份验证
    * startUrl  访问门户的URL
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clientId' => null,
        'clientSecret' => null,
        'startUrl' => null
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
    * clientId  在IAM身份中心注册的客户端的唯一标识符
    * clientSecret  为客户端生成的秘密字符串。客户端将使用此字符串在后续调用中获得服务的身份验证
    * startUrl  访问门户的URL
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clientId' => 'client_id',
            'clientSecret' => 'client_secret',
            'startUrl' => 'start_url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clientId  在IAM身份中心注册的客户端的唯一标识符
    * clientSecret  为客户端生成的秘密字符串。客户端将使用此字符串在后续调用中获得服务的身份验证
    * startUrl  访问门户的URL
    *
    * @var string[]
    */
    protected static $setters = [
            'clientId' => 'setClientId',
            'clientSecret' => 'setClientSecret',
            'startUrl' => 'setStartUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clientId  在IAM身份中心注册的客户端的唯一标识符
    * clientSecret  为客户端生成的秘密字符串。客户端将使用此字符串在后续调用中获得服务的身份验证
    * startUrl  访问门户的URL
    *
    * @var string[]
    */
    protected static $getters = [
            'clientId' => 'getClientId',
            'clientSecret' => 'getClientSecret',
            'startUrl' => 'getStartUrl'
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
        $this->container['clientId'] = isset($data['clientId']) ? $data['clientId'] : null;
        $this->container['clientSecret'] = isset($data['clientSecret']) ? $data['clientSecret'] : null;
        $this->container['startUrl'] = isset($data['startUrl']) ? $data['startUrl'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['clientId'] === null) {
            $invalidProperties[] = "'clientId' can't be null";
        }
            if (!preg_match("/^[a-zA-Z0-9_\\-\\.]{1,10240}$/", $this->container['clientId'])) {
                $invalidProperties[] = "invalid value for 'clientId', must be conform to the pattern /^[a-zA-Z0-9_\\-\\.]{1,10240}$/.";
            }
        if ($this->container['clientSecret'] === null) {
            $invalidProperties[] = "'clientSecret' can't be null";
        }
            if (!preg_match("/^[a-zA-Z0-9_\\-\\.]{1,10240}$/", $this->container['clientSecret'])) {
                $invalidProperties[] = "invalid value for 'clientSecret', must be conform to the pattern /^[a-zA-Z0-9_\\-\\.]{1,10240}$/.";
            }
        if ($this->container['startUrl'] === null) {
            $invalidProperties[] = "'startUrl' can't be null";
        }
            if (!preg_match("/^[a-zA-z]+:\/\/[^\\s]*$/", $this->container['startUrl'])) {
                $invalidProperties[] = "invalid value for 'startUrl', must be conform to the pattern /^[a-zA-z]+:\/\/[^\\s]*$/.";
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
    * Gets clientId
    *  在IAM身份中心注册的客户端的唯一标识符
    *
    * @return string
    */
    public function getClientId()
    {
        return $this->container['clientId'];
    }

    /**
    * Sets clientId
    *
    * @param string $clientId 在IAM身份中心注册的客户端的唯一标识符
    *
    * @return $this
    */
    public function setClientId($clientId)
    {
        $this->container['clientId'] = $clientId;
        return $this;
    }

    /**
    * Gets clientSecret
    *  为客户端生成的秘密字符串。客户端将使用此字符串在后续调用中获得服务的身份验证
    *
    * @return string
    */
    public function getClientSecret()
    {
        return $this->container['clientSecret'];
    }

    /**
    * Sets clientSecret
    *
    * @param string $clientSecret 为客户端生成的秘密字符串。客户端将使用此字符串在后续调用中获得服务的身份验证
    *
    * @return $this
    */
    public function setClientSecret($clientSecret)
    {
        $this->container['clientSecret'] = $clientSecret;
        return $this;
    }

    /**
    * Gets startUrl
    *  访问门户的URL
    *
    * @return string
    */
    public function getStartUrl()
    {
        return $this->container['startUrl'];
    }

    /**
    * Sets startUrl
    *
    * @param string $startUrl 访问门户的URL
    *
    * @return $this
    */
    public function setStartUrl($startUrl)
    {
        $this->container['startUrl'] = $startUrl;
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

