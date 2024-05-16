<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CertificatesGetBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CertificatesGetBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * certificateType  证书类型，server：国际证书；server_sm：国密证书。
    * certificateName  证书名字。
    * certificateValue  HTTPS协议使用的证书内容，PEM编码格式。
    * encCertificateValue  国密证书加密证书内容，PEM编码格式。
    * expireTime  证书过期时间。  > UTC时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'certificateType' => 'string',
            'certificateName' => 'string',
            'certificateValue' => 'string',
            'encCertificateValue' => 'string',
            'expireTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * certificateType  证书类型，server：国际证书；server_sm：国密证书。
    * certificateName  证书名字。
    * certificateValue  HTTPS协议使用的证书内容，PEM编码格式。
    * encCertificateValue  国密证书加密证书内容，PEM编码格式。
    * expireTime  证书过期时间。  > UTC时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'certificateType' => null,
        'certificateName' => null,
        'certificateValue' => null,
        'encCertificateValue' => null,
        'expireTime' => 'int64'
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
    * certificateType  证书类型，server：国际证书；server_sm：国密证书。
    * certificateName  证书名字。
    * certificateValue  HTTPS协议使用的证书内容，PEM编码格式。
    * encCertificateValue  国密证书加密证书内容，PEM编码格式。
    * expireTime  证书过期时间。  > UTC时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'certificateType' => 'certificate_type',
            'certificateName' => 'certificate_name',
            'certificateValue' => 'certificate_value',
            'encCertificateValue' => 'enc_certificate_value',
            'expireTime' => 'expire_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * certificateType  证书类型，server：国际证书；server_sm：国密证书。
    * certificateName  证书名字。
    * certificateValue  HTTPS协议使用的证书内容，PEM编码格式。
    * encCertificateValue  国密证书加密证书内容，PEM编码格式。
    * expireTime  证书过期时间。  > UTC时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'certificateType' => 'setCertificateType',
            'certificateName' => 'setCertificateName',
            'certificateValue' => 'setCertificateValue',
            'encCertificateValue' => 'setEncCertificateValue',
            'expireTime' => 'setExpireTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * certificateType  证书类型，server：国际证书；server_sm：国密证书。
    * certificateName  证书名字。
    * certificateValue  HTTPS协议使用的证书内容，PEM编码格式。
    * encCertificateValue  国密证书加密证书内容，PEM编码格式。
    * expireTime  证书过期时间。  > UTC时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'certificateType' => 'getCertificateType',
            'certificateName' => 'getCertificateName',
            'certificateValue' => 'getCertificateValue',
            'encCertificateValue' => 'getEncCertificateValue',
            'expireTime' => 'getExpireTime'
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
        $this->container['certificateType'] = isset($data['certificateType']) ? $data['certificateType'] : null;
        $this->container['certificateName'] = isset($data['certificateName']) ? $data['certificateName'] : null;
        $this->container['certificateValue'] = isset($data['certificateValue']) ? $data['certificateValue'] : null;
        $this->container['encCertificateValue'] = isset($data['encCertificateValue']) ? $data['encCertificateValue'] : null;
        $this->container['expireTime'] = isset($data['expireTime']) ? $data['expireTime'] : null;
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
    * Gets certificateType
    *  证书类型，server：国际证书；server_sm：国密证书。
    *
    * @return string|null
    */
    public function getCertificateType()
    {
        return $this->container['certificateType'];
    }

    /**
    * Sets certificateType
    *
    * @param string|null $certificateType 证书类型，server：国际证书；server_sm：国密证书。
    *
    * @return $this
    */
    public function setCertificateType($certificateType)
    {
        $this->container['certificateType'] = $certificateType;
        return $this;
    }

    /**
    * Gets certificateName
    *  证书名字。
    *
    * @return string|null
    */
    public function getCertificateName()
    {
        return $this->container['certificateName'];
    }

    /**
    * Sets certificateName
    *
    * @param string|null $certificateName 证书名字。
    *
    * @return $this
    */
    public function setCertificateName($certificateName)
    {
        $this->container['certificateName'] = $certificateName;
        return $this;
    }

    /**
    * Gets certificateValue
    *  HTTPS协议使用的证书内容，PEM编码格式。
    *
    * @return string|null
    */
    public function getCertificateValue()
    {
        return $this->container['certificateValue'];
    }

    /**
    * Sets certificateValue
    *
    * @param string|null $certificateValue HTTPS协议使用的证书内容，PEM编码格式。
    *
    * @return $this
    */
    public function setCertificateValue($certificateValue)
    {
        $this->container['certificateValue'] = $certificateValue;
        return $this;
    }

    /**
    * Gets encCertificateValue
    *  国密证书加密证书内容，PEM编码格式。
    *
    * @return string|null
    */
    public function getEncCertificateValue()
    {
        return $this->container['encCertificateValue'];
    }

    /**
    * Sets encCertificateValue
    *
    * @param string|null $encCertificateValue 国密证书加密证书内容，PEM编码格式。
    *
    * @return $this
    */
    public function setEncCertificateValue($encCertificateValue)
    {
        $this->container['encCertificateValue'] = $encCertificateValue;
        return $this;
    }

    /**
    * Gets expireTime
    *  证书过期时间。  > UTC时间。
    *
    * @return int|null
    */
    public function getExpireTime()
    {
        return $this->container['expireTime'];
    }

    /**
    * Sets expireTime
    *
    * @param int|null $expireTime 证书过期时间。  > UTC时间。
    *
    * @return $this
    */
    public function setExpireTime($expireTime)
    {
        $this->container['expireTime'] = $expireTime;
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

