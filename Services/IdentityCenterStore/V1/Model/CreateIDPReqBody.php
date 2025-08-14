<?php

namespace HuaweiCloud\SDK\IdentityCenterStore\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateIDPReqBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateIDPReqBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * idpSamlMetadata  身份提供商SAML元数据，与身份提供商SAML配置二选一
    * idpCertificate  身份提供商证书，与身份提供商SAML配置联合使用
    * idpSamlConfig  身份提供商SAML配置信息，与身份提供商SAML元数据二选一
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'idpSamlMetadata' => 'string',
            'idpCertificate' => 'string',
            'idpSamlConfig' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * idpSamlMetadata  身份提供商SAML元数据，与身份提供商SAML配置二选一
    * idpCertificate  身份提供商证书，与身份提供商SAML配置联合使用
    * idpSamlConfig  身份提供商SAML配置信息，与身份提供商SAML元数据二选一
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'idpSamlMetadata' => null,
        'idpCertificate' => null,
        'idpSamlConfig' => null
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
    * idpSamlMetadata  身份提供商SAML元数据，与身份提供商SAML配置二选一
    * idpCertificate  身份提供商证书，与身份提供商SAML配置联合使用
    * idpSamlConfig  身份提供商SAML配置信息，与身份提供商SAML元数据二选一
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'idpSamlMetadata' => 'idp_saml_metadata',
            'idpCertificate' => 'idp_certificate',
            'idpSamlConfig' => 'idp_saml_config'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * idpSamlMetadata  身份提供商SAML元数据，与身份提供商SAML配置二选一
    * idpCertificate  身份提供商证书，与身份提供商SAML配置联合使用
    * idpSamlConfig  身份提供商SAML配置信息，与身份提供商SAML元数据二选一
    *
    * @var string[]
    */
    protected static $setters = [
            'idpSamlMetadata' => 'setIdpSamlMetadata',
            'idpCertificate' => 'setIdpCertificate',
            'idpSamlConfig' => 'setIdpSamlConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * idpSamlMetadata  身份提供商SAML元数据，与身份提供商SAML配置二选一
    * idpCertificate  身份提供商证书，与身份提供商SAML配置联合使用
    * idpSamlConfig  身份提供商SAML配置信息，与身份提供商SAML元数据二选一
    *
    * @var string[]
    */
    protected static $getters = [
            'idpSamlMetadata' => 'getIdpSamlMetadata',
            'idpCertificate' => 'getIdpCertificate',
            'idpSamlConfig' => 'getIdpSamlConfig'
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
        $this->container['idpSamlMetadata'] = isset($data['idpSamlMetadata']) ? $data['idpSamlMetadata'] : null;
        $this->container['idpCertificate'] = isset($data['idpCertificate']) ? $data['idpCertificate'] : null;
        $this->container['idpSamlConfig'] = isset($data['idpSamlConfig']) ? $data['idpSamlConfig'] : null;
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
    * Gets idpSamlMetadata
    *  身份提供商SAML元数据，与身份提供商SAML配置二选一
    *
    * @return string|null
    */
    public function getIdpSamlMetadata()
    {
        return $this->container['idpSamlMetadata'];
    }

    /**
    * Sets idpSamlMetadata
    *
    * @param string|null $idpSamlMetadata 身份提供商SAML元数据，与身份提供商SAML配置二选一
    *
    * @return $this
    */
    public function setIdpSamlMetadata($idpSamlMetadata)
    {
        $this->container['idpSamlMetadata'] = $idpSamlMetadata;
        return $this;
    }

    /**
    * Gets idpCertificate
    *  身份提供商证书，与身份提供商SAML配置联合使用
    *
    * @return string|null
    */
    public function getIdpCertificate()
    {
        return $this->container['idpCertificate'];
    }

    /**
    * Sets idpCertificate
    *
    * @param string|null $idpCertificate 身份提供商证书，与身份提供商SAML配置联合使用
    *
    * @return $this
    */
    public function setIdpCertificate($idpCertificate)
    {
        $this->container['idpCertificate'] = $idpCertificate;
        return $this;
    }

    /**
    * Gets idpSamlConfig
    *  身份提供商SAML配置信息，与身份提供商SAML元数据二选一
    *
    * @return object|null
    */
    public function getIdpSamlConfig()
    {
        return $this->container['idpSamlConfig'];
    }

    /**
    * Sets idpSamlConfig
    *
    * @param object|null $idpSamlConfig 身份提供商SAML配置信息，与身份提供商SAML元数据二选一
    *
    * @return $this
    */
    public function setIdpSamlConfig($idpSamlConfig)
    {
        $this->container['idpSamlConfig'] = $idpSamlConfig;
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

