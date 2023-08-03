<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDomainHttpsCertResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDomainHttpsCertResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * certificateFormat  证书格式，默认为PEM，当前只支持PEM格式
    * certificate  证书内容
    * certificateKey  私钥内容
    * forceRedirect  是否开启重定向，默认false
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'certificateFormat' => 'string',
            'certificate' => 'string',
            'certificateKey' => 'string',
            'forceRedirect' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * certificateFormat  证书格式，默认为PEM，当前只支持PEM格式
    * certificate  证书内容
    * certificateKey  私钥内容
    * forceRedirect  是否开启重定向，默认false
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'certificateFormat' => null,
        'certificate' => null,
        'certificateKey' => null,
        'forceRedirect' => null
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
    * certificateFormat  证书格式，默认为PEM，当前只支持PEM格式
    * certificate  证书内容
    * certificateKey  私钥内容
    * forceRedirect  是否开启重定向，默认false
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'certificateFormat' => 'certificate_format',
            'certificate' => 'certificate',
            'certificateKey' => 'certificate_key',
            'forceRedirect' => 'force_redirect'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * certificateFormat  证书格式，默认为PEM，当前只支持PEM格式
    * certificate  证书内容
    * certificateKey  私钥内容
    * forceRedirect  是否开启重定向，默认false
    *
    * @var string[]
    */
    protected static $setters = [
            'certificateFormat' => 'setCertificateFormat',
            'certificate' => 'setCertificate',
            'certificateKey' => 'setCertificateKey',
            'forceRedirect' => 'setForceRedirect'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * certificateFormat  证书格式，默认为PEM，当前只支持PEM格式
    * certificate  证书内容
    * certificateKey  私钥内容
    * forceRedirect  是否开启重定向，默认false
    *
    * @var string[]
    */
    protected static $getters = [
            'certificateFormat' => 'getCertificateFormat',
            'certificate' => 'getCertificate',
            'certificateKey' => 'getCertificateKey',
            'forceRedirect' => 'getForceRedirect'
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
    const CERTIFICATE_FORMAT_PEM = 'PEM';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCertificateFormatAllowableValues()
    {
        return [
            self::CERTIFICATE_FORMAT_PEM,
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
        $this->container['certificateFormat'] = isset($data['certificateFormat']) ? $data['certificateFormat'] : null;
        $this->container['certificate'] = isset($data['certificate']) ? $data['certificate'] : null;
        $this->container['certificateKey'] = isset($data['certificateKey']) ? $data['certificateKey'] : null;
        $this->container['forceRedirect'] = isset($data['forceRedirect']) ? $data['forceRedirect'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getCertificateFormatAllowableValues();
                if (!is_null($this->container['certificateFormat']) && !in_array($this->container['certificateFormat'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'certificateFormat', must be one of '%s'",
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
    * Gets certificateFormat
    *  证书格式，默认为PEM，当前只支持PEM格式
    *
    * @return string|null
    */
    public function getCertificateFormat()
    {
        return $this->container['certificateFormat'];
    }

    /**
    * Sets certificateFormat
    *
    * @param string|null $certificateFormat 证书格式，默认为PEM，当前只支持PEM格式
    *
    * @return $this
    */
    public function setCertificateFormat($certificateFormat)
    {
        $this->container['certificateFormat'] = $certificateFormat;
        return $this;
    }

    /**
    * Gets certificate
    *  证书内容
    *
    * @return string|null
    */
    public function getCertificate()
    {
        return $this->container['certificate'];
    }

    /**
    * Sets certificate
    *
    * @param string|null $certificate 证书内容
    *
    * @return $this
    */
    public function setCertificate($certificate)
    {
        $this->container['certificate'] = $certificate;
        return $this;
    }

    /**
    * Gets certificateKey
    *  私钥内容
    *
    * @return string|null
    */
    public function getCertificateKey()
    {
        return $this->container['certificateKey'];
    }

    /**
    * Sets certificateKey
    *
    * @param string|null $certificateKey 私钥内容
    *
    * @return $this
    */
    public function setCertificateKey($certificateKey)
    {
        $this->container['certificateKey'] = $certificateKey;
        return $this;
    }

    /**
    * Gets forceRedirect
    *  是否开启重定向，默认false
    *
    * @return bool|null
    */
    public function getForceRedirect()
    {
        return $this->container['forceRedirect'];
    }

    /**
    * Sets forceRedirect
    *
    * @param bool|null $forceRedirect 是否开启重定向，默认false
    *
    * @return $this
    */
    public function setForceRedirect($forceRedirect)
    {
        $this->container['forceRedirect'] = $forceRedirect;
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

