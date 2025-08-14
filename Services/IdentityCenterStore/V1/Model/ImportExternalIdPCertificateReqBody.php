<?php

namespace HuaweiCloud\SDK\IdentityCenterStore\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ImportExternalIdPCertificateReqBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ImportExternalIdPCertificateReqBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * x509CertificateInPem  PEM格式的身份提供商证书内容
    * certificateUse  身份提供商证书用途，目前仅支持签名
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'x509CertificateInPem' => 'string',
            'certificateUse' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * x509CertificateInPem  PEM格式的身份提供商证书内容
    * certificateUse  身份提供商证书用途，目前仅支持签名
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'x509CertificateInPem' => null,
        'certificateUse' => null
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
    * x509CertificateInPem  PEM格式的身份提供商证书内容
    * certificateUse  身份提供商证书用途，目前仅支持签名
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'x509CertificateInPem' => 'x509_certificate_in_pem',
            'certificateUse' => 'certificate_use'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * x509CertificateInPem  PEM格式的身份提供商证书内容
    * certificateUse  身份提供商证书用途，目前仅支持签名
    *
    * @var string[]
    */
    protected static $setters = [
            'x509CertificateInPem' => 'setX509CertificateInPem',
            'certificateUse' => 'setCertificateUse'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * x509CertificateInPem  PEM格式的身份提供商证书内容
    * certificateUse  身份提供商证书用途，目前仅支持签名
    *
    * @var string[]
    */
    protected static $getters = [
            'x509CertificateInPem' => 'getX509CertificateInPem',
            'certificateUse' => 'getCertificateUse'
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
    const CERTIFICATE_USE_SIGNING = 'SIGNING';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCertificateUseAllowableValues()
    {
        return [
            self::CERTIFICATE_USE_SIGNING,
        ];
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
        $this->container['x509CertificateInPem'] = isset($data['x509CertificateInPem']) ? $data['x509CertificateInPem'] : null;
        $this->container['certificateUse'] = isset($data['certificateUse']) ? $data['certificateUse'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['x509CertificateInPem'] === null) {
            $invalidProperties[] = "'x509CertificateInPem' can't be null";
        }
        if ($this->container['certificateUse'] === null) {
            $invalidProperties[] = "'certificateUse' can't be null";
        }
            $allowedValues = $this->getCertificateUseAllowableValues();
                if (!is_null($this->container['certificateUse']) && !in_array($this->container['certificateUse'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'certificateUse', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets x509CertificateInPem
    *  PEM格式的身份提供商证书内容
    *
    * @return string
    */
    public function getX509CertificateInPem()
    {
        return $this->container['x509CertificateInPem'];
    }

    /**
    * Sets x509CertificateInPem
    *
    * @param string $x509CertificateInPem PEM格式的身份提供商证书内容
    *
    * @return $this
    */
    public function setX509CertificateInPem($x509CertificateInPem)
    {
        $this->container['x509CertificateInPem'] = $x509CertificateInPem;
        return $this;
    }

    /**
    * Gets certificateUse
    *  身份提供商证书用途，目前仅支持签名
    *
    * @return string
    */
    public function getCertificateUse()
    {
        return $this->container['certificateUse'];
    }

    /**
    * Sets certificateUse
    *
    * @param string $certificateUse 身份提供商证书用途，目前仅支持签名
    *
    * @return $this
    */
    public function setCertificateUse($certificateUse)
    {
        $this->container['certificateUse'] = $certificateUse;
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

