<?php

namespace HuaweiCloud\SDK\IdentityCenterStore\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExternalIdpConfigurationDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExternalIdpConfigurationDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * idpCertificateIds  身份提供商证书对应的全局唯一标识符列表
    * idpId  身份提供商对应的全局唯一标识符（ID）
    * idpSamlConfig  idpSamlConfig
    * isEnabled  是否启用身份提供商
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'idpCertificateIds' => '\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\IdpCertificateBody[]',
            'idpId' => 'string',
            'idpSamlConfig' => '\HuaweiCloud\SDK\IdentityCenterStore\V1\Model\IdpSAMLConfig',
            'isEnabled' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * idpCertificateIds  身份提供商证书对应的全局唯一标识符列表
    * idpId  身份提供商对应的全局唯一标识符（ID）
    * idpSamlConfig  idpSamlConfig
    * isEnabled  是否启用身份提供商
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'idpCertificateIds' => null,
        'idpId' => null,
        'idpSamlConfig' => null,
        'isEnabled' => null
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
    * idpCertificateIds  身份提供商证书对应的全局唯一标识符列表
    * idpId  身份提供商对应的全局唯一标识符（ID）
    * idpSamlConfig  idpSamlConfig
    * isEnabled  是否启用身份提供商
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'idpCertificateIds' => 'idp_certificate_ids',
            'idpId' => 'idp_id',
            'idpSamlConfig' => 'idp_saml_config',
            'isEnabled' => 'is_enabled'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * idpCertificateIds  身份提供商证书对应的全局唯一标识符列表
    * idpId  身份提供商对应的全局唯一标识符（ID）
    * idpSamlConfig  idpSamlConfig
    * isEnabled  是否启用身份提供商
    *
    * @var string[]
    */
    protected static $setters = [
            'idpCertificateIds' => 'setIdpCertificateIds',
            'idpId' => 'setIdpId',
            'idpSamlConfig' => 'setIdpSamlConfig',
            'isEnabled' => 'setIsEnabled'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * idpCertificateIds  身份提供商证书对应的全局唯一标识符列表
    * idpId  身份提供商对应的全局唯一标识符（ID）
    * idpSamlConfig  idpSamlConfig
    * isEnabled  是否启用身份提供商
    *
    * @var string[]
    */
    protected static $getters = [
            'idpCertificateIds' => 'getIdpCertificateIds',
            'idpId' => 'getIdpId',
            'idpSamlConfig' => 'getIdpSamlConfig',
            'isEnabled' => 'getIsEnabled'
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
        $this->container['idpCertificateIds'] = isset($data['idpCertificateIds']) ? $data['idpCertificateIds'] : null;
        $this->container['idpId'] = isset($data['idpId']) ? $data['idpId'] : null;
        $this->container['idpSamlConfig'] = isset($data['idpSamlConfig']) ? $data['idpSamlConfig'] : null;
        $this->container['isEnabled'] = isset($data['isEnabled']) ? $data['isEnabled'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['idpCertificateIds'] === null) {
            $invalidProperties[] = "'idpCertificateIds' can't be null";
        }
        if ($this->container['idpId'] === null) {
            $invalidProperties[] = "'idpId' can't be null";
        }
        if ($this->container['idpSamlConfig'] === null) {
            $invalidProperties[] = "'idpSamlConfig' can't be null";
        }
        if ($this->container['isEnabled'] === null) {
            $invalidProperties[] = "'isEnabled' can't be null";
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
    * Gets idpCertificateIds
    *  身份提供商证书对应的全局唯一标识符列表
    *
    * @return \HuaweiCloud\SDK\IdentityCenterStore\V1\Model\IdpCertificateBody[]
    */
    public function getIdpCertificateIds()
    {
        return $this->container['idpCertificateIds'];
    }

    /**
    * Sets idpCertificateIds
    *
    * @param \HuaweiCloud\SDK\IdentityCenterStore\V1\Model\IdpCertificateBody[] $idpCertificateIds 身份提供商证书对应的全局唯一标识符列表
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
    *  身份提供商对应的全局唯一标识符（ID）
    *
    * @return string
    */
    public function getIdpId()
    {
        return $this->container['idpId'];
    }

    /**
    * Sets idpId
    *
    * @param string $idpId 身份提供商对应的全局唯一标识符（ID）
    *
    * @return $this
    */
    public function setIdpId($idpId)
    {
        $this->container['idpId'] = $idpId;
        return $this;
    }

    /**
    * Gets idpSamlConfig
    *  idpSamlConfig
    *
    * @return \HuaweiCloud\SDK\IdentityCenterStore\V1\Model\IdpSAMLConfig
    */
    public function getIdpSamlConfig()
    {
        return $this->container['idpSamlConfig'];
    }

    /**
    * Sets idpSamlConfig
    *
    * @param \HuaweiCloud\SDK\IdentityCenterStore\V1\Model\IdpSAMLConfig $idpSamlConfig idpSamlConfig
    *
    * @return $this
    */
    public function setIdpSamlConfig($idpSamlConfig)
    {
        $this->container['idpSamlConfig'] = $idpSamlConfig;
        return $this;
    }

    /**
    * Gets isEnabled
    *  是否启用身份提供商
    *
    * @return bool
    */
    public function getIsEnabled()
    {
        return $this->container['isEnabled'];
    }

    /**
    * Sets isEnabled
    *
    * @param bool $isEnabled 是否启用身份提供商
    *
    * @return $this
    */
    public function setIsEnabled($isEnabled)
    {
        $this->container['isEnabled'] = $isEnabled;
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

