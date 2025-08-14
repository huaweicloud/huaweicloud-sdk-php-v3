<?php

namespace HuaweiCloud\SDK\IdentityCenterStore\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListExternalIdPCertificatesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListExternalIdPCertificatesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * idpCertificates  外部身份提供商证书列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'idpCertificates' => '\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\IdpCertificate[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * idpCertificates  外部身份提供商证书列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'idpCertificates' => null
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
    * idpCertificates  外部身份提供商证书列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'idpCertificates' => 'idp_certificates'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * idpCertificates  外部身份提供商证书列表
    *
    * @var string[]
    */
    protected static $setters = [
            'idpCertificates' => 'setIdpCertificates'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * idpCertificates  外部身份提供商证书列表
    *
    * @var string[]
    */
    protected static $getters = [
            'idpCertificates' => 'getIdpCertificates'
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
        $this->container['idpCertificates'] = isset($data['idpCertificates']) ? $data['idpCertificates'] : null;
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
    * Gets idpCertificates
    *  外部身份提供商证书列表
    *
    * @return \HuaweiCloud\SDK\IdentityCenterStore\V1\Model\IdpCertificate[]|null
    */
    public function getIdpCertificates()
    {
        return $this->container['idpCertificates'];
    }

    /**
    * Sets idpCertificates
    *
    * @param \HuaweiCloud\SDK\IdentityCenterStore\V1\Model\IdpCertificate[]|null $idpCertificates 外部身份提供商证书列表
    *
    * @return $this
    */
    public function setIdpCertificates($idpCertificates)
    {
        $this->container['idpCertificates'] = $idpCertificates;
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

