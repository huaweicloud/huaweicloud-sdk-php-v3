<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EndpointSslConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EndpointSslConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sslLink  是否SSL安全连接。如果数据库启用了SSL安全连接，参数值为true。
    * sslCertName  SSL证书名字。
    * sslCertKey  SSL证书内容，用base64加密。
    * sslCertCheckSum  SSL证书内容checksum值，后端校验，源库安全连接必选。
    * sslCertPassword  SSL证书密码，证书文件后缀为.p12时必填。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sslLink' => 'bool',
            'sslCertName' => 'string',
            'sslCertKey' => 'string',
            'sslCertCheckSum' => 'string',
            'sslCertPassword' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sslLink  是否SSL安全连接。如果数据库启用了SSL安全连接，参数值为true。
    * sslCertName  SSL证书名字。
    * sslCertKey  SSL证书内容，用base64加密。
    * sslCertCheckSum  SSL证书内容checksum值，后端校验，源库安全连接必选。
    * sslCertPassword  SSL证书密码，证书文件后缀为.p12时必填。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sslLink' => null,
        'sslCertName' => null,
        'sslCertKey' => null,
        'sslCertCheckSum' => null,
        'sslCertPassword' => null
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
    * sslLink  是否SSL安全连接。如果数据库启用了SSL安全连接，参数值为true。
    * sslCertName  SSL证书名字。
    * sslCertKey  SSL证书内容，用base64加密。
    * sslCertCheckSum  SSL证书内容checksum值，后端校验，源库安全连接必选。
    * sslCertPassword  SSL证书密码，证书文件后缀为.p12时必填。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sslLink' => 'ssl_link',
            'sslCertName' => 'ssl_cert_name',
            'sslCertKey' => 'ssl_cert_key',
            'sslCertCheckSum' => 'ssl_cert_check_sum',
            'sslCertPassword' => 'ssl_cert_password'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sslLink  是否SSL安全连接。如果数据库启用了SSL安全连接，参数值为true。
    * sslCertName  SSL证书名字。
    * sslCertKey  SSL证书内容，用base64加密。
    * sslCertCheckSum  SSL证书内容checksum值，后端校验，源库安全连接必选。
    * sslCertPassword  SSL证书密码，证书文件后缀为.p12时必填。
    *
    * @var string[]
    */
    protected static $setters = [
            'sslLink' => 'setSslLink',
            'sslCertName' => 'setSslCertName',
            'sslCertKey' => 'setSslCertKey',
            'sslCertCheckSum' => 'setSslCertCheckSum',
            'sslCertPassword' => 'setSslCertPassword'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sslLink  是否SSL安全连接。如果数据库启用了SSL安全连接，参数值为true。
    * sslCertName  SSL证书名字。
    * sslCertKey  SSL证书内容，用base64加密。
    * sslCertCheckSum  SSL证书内容checksum值，后端校验，源库安全连接必选。
    * sslCertPassword  SSL证书密码，证书文件后缀为.p12时必填。
    *
    * @var string[]
    */
    protected static $getters = [
            'sslLink' => 'getSslLink',
            'sslCertName' => 'getSslCertName',
            'sslCertKey' => 'getSslCertKey',
            'sslCertCheckSum' => 'getSslCertCheckSum',
            'sslCertPassword' => 'getSslCertPassword'
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
        $this->container['sslLink'] = isset($data['sslLink']) ? $data['sslLink'] : null;
        $this->container['sslCertName'] = isset($data['sslCertName']) ? $data['sslCertName'] : null;
        $this->container['sslCertKey'] = isset($data['sslCertKey']) ? $data['sslCertKey'] : null;
        $this->container['sslCertCheckSum'] = isset($data['sslCertCheckSum']) ? $data['sslCertCheckSum'] : null;
        $this->container['sslCertPassword'] = isset($data['sslCertPassword']) ? $data['sslCertPassword'] : null;
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
    * Gets sslLink
    *  是否SSL安全连接。如果数据库启用了SSL安全连接，参数值为true。
    *
    * @return bool|null
    */
    public function getSslLink()
    {
        return $this->container['sslLink'];
    }

    /**
    * Sets sslLink
    *
    * @param bool|null $sslLink 是否SSL安全连接。如果数据库启用了SSL安全连接，参数值为true。
    *
    * @return $this
    */
    public function setSslLink($sslLink)
    {
        $this->container['sslLink'] = $sslLink;
        return $this;
    }

    /**
    * Gets sslCertName
    *  SSL证书名字。
    *
    * @return string|null
    */
    public function getSslCertName()
    {
        return $this->container['sslCertName'];
    }

    /**
    * Sets sslCertName
    *
    * @param string|null $sslCertName SSL证书名字。
    *
    * @return $this
    */
    public function setSslCertName($sslCertName)
    {
        $this->container['sslCertName'] = $sslCertName;
        return $this;
    }

    /**
    * Gets sslCertKey
    *  SSL证书内容，用base64加密。
    *
    * @return string|null
    */
    public function getSslCertKey()
    {
        return $this->container['sslCertKey'];
    }

    /**
    * Sets sslCertKey
    *
    * @param string|null $sslCertKey SSL证书内容，用base64加密。
    *
    * @return $this
    */
    public function setSslCertKey($sslCertKey)
    {
        $this->container['sslCertKey'] = $sslCertKey;
        return $this;
    }

    /**
    * Gets sslCertCheckSum
    *  SSL证书内容checksum值，后端校验，源库安全连接必选。
    *
    * @return string|null
    */
    public function getSslCertCheckSum()
    {
        return $this->container['sslCertCheckSum'];
    }

    /**
    * Sets sslCertCheckSum
    *
    * @param string|null $sslCertCheckSum SSL证书内容checksum值，后端校验，源库安全连接必选。
    *
    * @return $this
    */
    public function setSslCertCheckSum($sslCertCheckSum)
    {
        $this->container['sslCertCheckSum'] = $sslCertCheckSum;
        return $this;
    }

    /**
    * Gets sslCertPassword
    *  SSL证书密码，证书文件后缀为.p12时必填。
    *
    * @return string|null
    */
    public function getSslCertPassword()
    {
        return $this->container['sslCertPassword'];
    }

    /**
    * Sets sslCertPassword
    *
    * @param string|null $sslCertPassword SSL证书密码，证书文件后缀为.p12时必填。
    *
    * @return $this
    */
    public function setSslCertPassword($sslCertPassword)
    {
        $this->container['sslCertPassword'] = $sslCertPassword;
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

