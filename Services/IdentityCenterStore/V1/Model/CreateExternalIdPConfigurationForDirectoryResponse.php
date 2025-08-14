<?php

namespace HuaweiCloud\SDK\IdentityCenterStore\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateExternalIdPConfigurationForDirectoryResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateExternalIdPConfigurationForDirectoryResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hwsSpSamlConfig  hwsSpSamlConfig
    * idpCertificateId  身份提供商证书全局唯一标识符（ID)
    * idpCertificateIds  身份提供商证书全局唯一标识符列表
    * idpId  外部身份提供商的全局唯一标识符（ID）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hwsSpSamlConfig' => '\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\SPSAMLConfig',
            'idpCertificateId' => 'string',
            'idpCertificateIds' => 'string[]',
            'idpId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hwsSpSamlConfig  hwsSpSamlConfig
    * idpCertificateId  身份提供商证书全局唯一标识符（ID)
    * idpCertificateIds  身份提供商证书全局唯一标识符列表
    * idpId  外部身份提供商的全局唯一标识符（ID）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hwsSpSamlConfig' => null,
        'idpCertificateId' => null,
        'idpCertificateIds' => null,
        'idpId' => null
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
    * hwsSpSamlConfig  hwsSpSamlConfig
    * idpCertificateId  身份提供商证书全局唯一标识符（ID)
    * idpCertificateIds  身份提供商证书全局唯一标识符列表
    * idpId  外部身份提供商的全局唯一标识符（ID）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hwsSpSamlConfig' => 'hws_sp_saml_config',
            'idpCertificateId' => 'idp_certificate_id',
            'idpCertificateIds' => 'idp_certificate_ids',
            'idpId' => 'idp_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hwsSpSamlConfig  hwsSpSamlConfig
    * idpCertificateId  身份提供商证书全局唯一标识符（ID)
    * idpCertificateIds  身份提供商证书全局唯一标识符列表
    * idpId  外部身份提供商的全局唯一标识符（ID）
    *
    * @var string[]
    */
    protected static $setters = [
            'hwsSpSamlConfig' => 'setHwsSpSamlConfig',
            'idpCertificateId' => 'setIdpCertificateId',
            'idpCertificateIds' => 'setIdpCertificateIds',
            'idpId' => 'setIdpId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hwsSpSamlConfig  hwsSpSamlConfig
    * idpCertificateId  身份提供商证书全局唯一标识符（ID)
    * idpCertificateIds  身份提供商证书全局唯一标识符列表
    * idpId  外部身份提供商的全局唯一标识符（ID）
    *
    * @var string[]
    */
    protected static $getters = [
            'hwsSpSamlConfig' => 'getHwsSpSamlConfig',
            'idpCertificateId' => 'getIdpCertificateId',
            'idpCertificateIds' => 'getIdpCertificateIds',
            'idpId' => 'getIdpId'
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
        $this->container['hwsSpSamlConfig'] = isset($data['hwsSpSamlConfig']) ? $data['hwsSpSamlConfig'] : null;
        $this->container['idpCertificateId'] = isset($data['idpCertificateId']) ? $data['idpCertificateId'] : null;
        $this->container['idpCertificateIds'] = isset($data['idpCertificateIds']) ? $data['idpCertificateIds'] : null;
        $this->container['idpId'] = isset($data['idpId']) ? $data['idpId'] : null;
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
    * Gets hwsSpSamlConfig
    *  hwsSpSamlConfig
    *
    * @return \HuaweiCloud\SDK\IdentityCenterStore\V1\Model\SPSAMLConfig|null
    */
    public function getHwsSpSamlConfig()
    {
        return $this->container['hwsSpSamlConfig'];
    }

    /**
    * Sets hwsSpSamlConfig
    *
    * @param \HuaweiCloud\SDK\IdentityCenterStore\V1\Model\SPSAMLConfig|null $hwsSpSamlConfig hwsSpSamlConfig
    *
    * @return $this
    */
    public function setHwsSpSamlConfig($hwsSpSamlConfig)
    {
        $this->container['hwsSpSamlConfig'] = $hwsSpSamlConfig;
        return $this;
    }

    /**
    * Gets idpCertificateId
    *  身份提供商证书全局唯一标识符（ID)
    *
    * @return string|null
    */
    public function getIdpCertificateId()
    {
        return $this->container['idpCertificateId'];
    }

    /**
    * Sets idpCertificateId
    *
    * @param string|null $idpCertificateId 身份提供商证书全局唯一标识符（ID)
    *
    * @return $this
    */
    public function setIdpCertificateId($idpCertificateId)
    {
        $this->container['idpCertificateId'] = $idpCertificateId;
        return $this;
    }

    /**
    * Gets idpCertificateIds
    *  身份提供商证书全局唯一标识符列表
    *
    * @return string[]|null
    */
    public function getIdpCertificateIds()
    {
        return $this->container['idpCertificateIds'];
    }

    /**
    * Sets idpCertificateIds
    *
    * @param string[]|null $idpCertificateIds 身份提供商证书全局唯一标识符列表
    *
    * @return $this
    */
    public function setIdpCertificateIds($idpCertificateIds)
    {
        $this->container['idpCertificateIds'] = $idpCertificateIds;
        return $this;
    }

    /**
    * Gets idpId
    *  外部身份提供商的全局唯一标识符（ID）
    *
    * @return string|null
    */
    public function getIdpId()
    {
        return $this->container['idpId'];
    }

    /**
    * Sets idpId
    *
    * @param string|null $idpId 外部身份提供商的全局唯一标识符（ID）
    *
    * @return $this
    */
    public function setIdpId($idpId)
    {
        $this->container['idpId'] = $idpId;
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

