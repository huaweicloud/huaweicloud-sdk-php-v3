<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GmCertificateInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GmCertificateInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * source  证书来源， 可选,  scm: 云证书管理服务，user：默认，用户自有
    * certName  SCM证书名， 可选
    * certId  SCM证书ID, 证书来源为scm时必选
    * signCertificate  国密签名证书内容
    * signCertificateKey  国密签名私钥内容
    * encCertificate  国密加密证书内容
    * encCertificateKey  国密加密私钥内容
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'source' => 'string',
            'certName' => 'string',
            'certId' => 'string',
            'signCertificate' => 'string',
            'signCertificateKey' => 'string',
            'encCertificate' => 'string',
            'encCertificateKey' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * source  证书来源， 可选,  scm: 云证书管理服务，user：默认，用户自有
    * certName  SCM证书名， 可选
    * certId  SCM证书ID, 证书来源为scm时必选
    * signCertificate  国密签名证书内容
    * signCertificateKey  国密签名私钥内容
    * encCertificate  国密加密证书内容
    * encCertificateKey  国密加密私钥内容
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'source' => null,
        'certName' => null,
        'certId' => null,
        'signCertificate' => null,
        'signCertificateKey' => null,
        'encCertificate' => null,
        'encCertificateKey' => null
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
    * source  证书来源， 可选,  scm: 云证书管理服务，user：默认，用户自有
    * certName  SCM证书名， 可选
    * certId  SCM证书ID, 证书来源为scm时必选
    * signCertificate  国密签名证书内容
    * signCertificateKey  国密签名私钥内容
    * encCertificate  国密加密证书内容
    * encCertificateKey  国密加密私钥内容
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'source' => 'source',
            'certName' => 'cert_name',
            'certId' => 'cert_id',
            'signCertificate' => 'sign_certificate',
            'signCertificateKey' => 'sign_certificate_key',
            'encCertificate' => 'enc_certificate',
            'encCertificateKey' => 'enc_certificate_key'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * source  证书来源， 可选,  scm: 云证书管理服务，user：默认，用户自有
    * certName  SCM证书名， 可选
    * certId  SCM证书ID, 证书来源为scm时必选
    * signCertificate  国密签名证书内容
    * signCertificateKey  国密签名私钥内容
    * encCertificate  国密加密证书内容
    * encCertificateKey  国密加密私钥内容
    *
    * @var string[]
    */
    protected static $setters = [
            'source' => 'setSource',
            'certName' => 'setCertName',
            'certId' => 'setCertId',
            'signCertificate' => 'setSignCertificate',
            'signCertificateKey' => 'setSignCertificateKey',
            'encCertificate' => 'setEncCertificate',
            'encCertificateKey' => 'setEncCertificateKey'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * source  证书来源， 可选,  scm: 云证书管理服务，user：默认，用户自有
    * certName  SCM证书名， 可选
    * certId  SCM证书ID, 证书来源为scm时必选
    * signCertificate  国密签名证书内容
    * signCertificateKey  国密签名私钥内容
    * encCertificate  国密加密证书内容
    * encCertificateKey  国密加密私钥内容
    *
    * @var string[]
    */
    protected static $getters = [
            'source' => 'getSource',
            'certName' => 'getCertName',
            'certId' => 'getCertId',
            'signCertificate' => 'getSignCertificate',
            'signCertificateKey' => 'getSignCertificateKey',
            'encCertificate' => 'getEncCertificate',
            'encCertificateKey' => 'getEncCertificateKey'
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
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['certName'] = isset($data['certName']) ? $data['certName'] : null;
        $this->container['certId'] = isset($data['certId']) ? $data['certId'] : null;
        $this->container['signCertificate'] = isset($data['signCertificate']) ? $data['signCertificate'] : null;
        $this->container['signCertificateKey'] = isset($data['signCertificateKey']) ? $data['signCertificateKey'] : null;
        $this->container['encCertificate'] = isset($data['encCertificate']) ? $data['encCertificate'] : null;
        $this->container['encCertificateKey'] = isset($data['encCertificateKey']) ? $data['encCertificateKey'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['source']) && (mb_strlen($this->container['source']) > 128)) {
                $invalidProperties[] = "invalid value for 'source', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['source']) && (mb_strlen($this->container['source']) < 0)) {
                $invalidProperties[] = "invalid value for 'source', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['certName']) && (mb_strlen($this->container['certName']) > 128)) {
                $invalidProperties[] = "invalid value for 'certName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['certName']) && (mb_strlen($this->container['certName']) < 0)) {
                $invalidProperties[] = "invalid value for 'certName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['certId']) && (mb_strlen($this->container['certId']) > 128)) {
                $invalidProperties[] = "invalid value for 'certId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['certId']) && (mb_strlen($this->container['certId']) < 0)) {
                $invalidProperties[] = "invalid value for 'certId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['signCertificate']) && (mb_strlen($this->container['signCertificate']) > 12288)) {
                $invalidProperties[] = "invalid value for 'signCertificate', the character length must be smaller than or equal to 12288.";
            }
            if (!is_null($this->container['signCertificate']) && (mb_strlen($this->container['signCertificate']) < 0)) {
                $invalidProperties[] = "invalid value for 'signCertificate', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['signCertificateKey']) && (mb_strlen($this->container['signCertificateKey']) > 8096)) {
                $invalidProperties[] = "invalid value for 'signCertificateKey', the character length must be smaller than or equal to 8096.";
            }
            if (!is_null($this->container['signCertificateKey']) && (mb_strlen($this->container['signCertificateKey']) < 0)) {
                $invalidProperties[] = "invalid value for 'signCertificateKey', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['encCertificate']) && (mb_strlen($this->container['encCertificate']) > 12288)) {
                $invalidProperties[] = "invalid value for 'encCertificate', the character length must be smaller than or equal to 12288.";
            }
            if (!is_null($this->container['encCertificate']) && (mb_strlen($this->container['encCertificate']) < 0)) {
                $invalidProperties[] = "invalid value for 'encCertificate', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['encCertificateKey']) && (mb_strlen($this->container['encCertificateKey']) > 8096)) {
                $invalidProperties[] = "invalid value for 'encCertificateKey', the character length must be smaller than or equal to 8096.";
            }
            if (!is_null($this->container['encCertificateKey']) && (mb_strlen($this->container['encCertificateKey']) < 0)) {
                $invalidProperties[] = "invalid value for 'encCertificateKey', the character length must be bigger than or equal to 0.";
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
    * Gets source
    *  证书来源， 可选,  scm: 云证书管理服务，user：默认，用户自有
    *
    * @return string|null
    */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
    * Sets source
    *
    * @param string|null $source 证书来源， 可选,  scm: 云证书管理服务，user：默认，用户自有
    *
    * @return $this
    */
    public function setSource($source)
    {
        $this->container['source'] = $source;
        return $this;
    }

    /**
    * Gets certName
    *  SCM证书名， 可选
    *
    * @return string|null
    */
    public function getCertName()
    {
        return $this->container['certName'];
    }

    /**
    * Sets certName
    *
    * @param string|null $certName SCM证书名， 可选
    *
    * @return $this
    */
    public function setCertName($certName)
    {
        $this->container['certName'] = $certName;
        return $this;
    }

    /**
    * Gets certId
    *  SCM证书ID, 证书来源为scm时必选
    *
    * @return string|null
    */
    public function getCertId()
    {
        return $this->container['certId'];
    }

    /**
    * Sets certId
    *
    * @param string|null $certId SCM证书ID, 证书来源为scm时必选
    *
    * @return $this
    */
    public function setCertId($certId)
    {
        $this->container['certId'] = $certId;
        return $this;
    }

    /**
    * Gets signCertificate
    *  国密签名证书内容
    *
    * @return string|null
    */
    public function getSignCertificate()
    {
        return $this->container['signCertificate'];
    }

    /**
    * Sets signCertificate
    *
    * @param string|null $signCertificate 国密签名证书内容
    *
    * @return $this
    */
    public function setSignCertificate($signCertificate)
    {
        $this->container['signCertificate'] = $signCertificate;
        return $this;
    }

    /**
    * Gets signCertificateKey
    *  国密签名私钥内容
    *
    * @return string|null
    */
    public function getSignCertificateKey()
    {
        return $this->container['signCertificateKey'];
    }

    /**
    * Sets signCertificateKey
    *
    * @param string|null $signCertificateKey 国密签名私钥内容
    *
    * @return $this
    */
    public function setSignCertificateKey($signCertificateKey)
    {
        $this->container['signCertificateKey'] = $signCertificateKey;
        return $this;
    }

    /**
    * Gets encCertificate
    *  国密加密证书内容
    *
    * @return string|null
    */
    public function getEncCertificate()
    {
        return $this->container['encCertificate'];
    }

    /**
    * Sets encCertificate
    *
    * @param string|null $encCertificate 国密加密证书内容
    *
    * @return $this
    */
    public function setEncCertificate($encCertificate)
    {
        $this->container['encCertificate'] = $encCertificate;
        return $this;
    }

    /**
    * Gets encCertificateKey
    *  国密加密私钥内容
    *
    * @return string|null
    */
    public function getEncCertificateKey()
    {
        return $this->container['encCertificateKey'];
    }

    /**
    * Sets encCertificateKey
    *
    * @param string|null $encCertificateKey 国密加密私钥内容
    *
    * @return $this
    */
    public function setEncCertificateKey($encCertificateKey)
    {
        $this->container['encCertificateKey'] = $encCertificateKey;
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

