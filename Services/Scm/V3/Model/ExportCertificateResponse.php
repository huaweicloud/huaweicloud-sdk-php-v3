<?php

namespace HuaweiCloud\SDK\Scm\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExportCertificateResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExportCertificateResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * entireCertificate  证书及证书链。
    * certificate  证书内容，不包含证书链。
    * certificateChain  证书链。
    * privateKey  证书私钥。
    * encCertificate  国密证书返回，加密证书内容。
    * encPrivateKey  国密证书返回，加密证书私钥。 - 自己生成csr的方式：该字段是加密状态，需要解密。   解密思路如下:    1、从数字信封中获取“对称密钥密文”和“加密私钥密文”；   2、使用签名私钥解密“对称密钥密文”，得到“对称密钥明文”；   3、使用对称密钥解密“加密私钥密文”，得到“加密私钥明文”。 - 非自己生成csr的方式：该字段不需要解密。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'entireCertificate' => 'string',
            'certificate' => 'string',
            'certificateChain' => 'string',
            'privateKey' => 'string',
            'encCertificate' => 'string',
            'encPrivateKey' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * entireCertificate  证书及证书链。
    * certificate  证书内容，不包含证书链。
    * certificateChain  证书链。
    * privateKey  证书私钥。
    * encCertificate  国密证书返回，加密证书内容。
    * encPrivateKey  国密证书返回，加密证书私钥。 - 自己生成csr的方式：该字段是加密状态，需要解密。   解密思路如下:    1、从数字信封中获取“对称密钥密文”和“加密私钥密文”；   2、使用签名私钥解密“对称密钥密文”，得到“对称密钥明文”；   3、使用对称密钥解密“加密私钥密文”，得到“加密私钥明文”。 - 非自己生成csr的方式：该字段不需要解密。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'entireCertificate' => null,
        'certificate' => null,
        'certificateChain' => null,
        'privateKey' => null,
        'encCertificate' => null,
        'encPrivateKey' => null
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
    * entireCertificate  证书及证书链。
    * certificate  证书内容，不包含证书链。
    * certificateChain  证书链。
    * privateKey  证书私钥。
    * encCertificate  国密证书返回，加密证书内容。
    * encPrivateKey  国密证书返回，加密证书私钥。 - 自己生成csr的方式：该字段是加密状态，需要解密。   解密思路如下:    1、从数字信封中获取“对称密钥密文”和“加密私钥密文”；   2、使用签名私钥解密“对称密钥密文”，得到“对称密钥明文”；   3、使用对称密钥解密“加密私钥密文”，得到“加密私钥明文”。 - 非自己生成csr的方式：该字段不需要解密。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'entireCertificate' => 'entire_certificate',
            'certificate' => 'certificate',
            'certificateChain' => 'certificate_chain',
            'privateKey' => 'private_key',
            'encCertificate' => 'enc_certificate',
            'encPrivateKey' => 'enc_private_key'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * entireCertificate  证书及证书链。
    * certificate  证书内容，不包含证书链。
    * certificateChain  证书链。
    * privateKey  证书私钥。
    * encCertificate  国密证书返回，加密证书内容。
    * encPrivateKey  国密证书返回，加密证书私钥。 - 自己生成csr的方式：该字段是加密状态，需要解密。   解密思路如下:    1、从数字信封中获取“对称密钥密文”和“加密私钥密文”；   2、使用签名私钥解密“对称密钥密文”，得到“对称密钥明文”；   3、使用对称密钥解密“加密私钥密文”，得到“加密私钥明文”。 - 非自己生成csr的方式：该字段不需要解密。
    *
    * @var string[]
    */
    protected static $setters = [
            'entireCertificate' => 'setEntireCertificate',
            'certificate' => 'setCertificate',
            'certificateChain' => 'setCertificateChain',
            'privateKey' => 'setPrivateKey',
            'encCertificate' => 'setEncCertificate',
            'encPrivateKey' => 'setEncPrivateKey'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * entireCertificate  证书及证书链。
    * certificate  证书内容，不包含证书链。
    * certificateChain  证书链。
    * privateKey  证书私钥。
    * encCertificate  国密证书返回，加密证书内容。
    * encPrivateKey  国密证书返回，加密证书私钥。 - 自己生成csr的方式：该字段是加密状态，需要解密。   解密思路如下:    1、从数字信封中获取“对称密钥密文”和“加密私钥密文”；   2、使用签名私钥解密“对称密钥密文”，得到“对称密钥明文”；   3、使用对称密钥解密“加密私钥密文”，得到“加密私钥明文”。 - 非自己生成csr的方式：该字段不需要解密。
    *
    * @var string[]
    */
    protected static $getters = [
            'entireCertificate' => 'getEntireCertificate',
            'certificate' => 'getCertificate',
            'certificateChain' => 'getCertificateChain',
            'privateKey' => 'getPrivateKey',
            'encCertificate' => 'getEncCertificate',
            'encPrivateKey' => 'getEncPrivateKey'
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
        $this->container['entireCertificate'] = isset($data['entireCertificate']) ? $data['entireCertificate'] : null;
        $this->container['certificate'] = isset($data['certificate']) ? $data['certificate'] : null;
        $this->container['certificateChain'] = isset($data['certificateChain']) ? $data['certificateChain'] : null;
        $this->container['privateKey'] = isset($data['privateKey']) ? $data['privateKey'] : null;
        $this->container['encCertificate'] = isset($data['encCertificate']) ? $data['encCertificate'] : null;
        $this->container['encPrivateKey'] = isset($data['encPrivateKey']) ? $data['encPrivateKey'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['entireCertificate']) && (mb_strlen($this->container['entireCertificate']) > 12288)) {
                $invalidProperties[] = "invalid value for 'entireCertificate', the character length must be smaller than or equal to 12288.";
            }
            if (!is_null($this->container['entireCertificate']) && (mb_strlen($this->container['entireCertificate']) < 1)) {
                $invalidProperties[] = "invalid value for 'entireCertificate', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['certificate']) && (mb_strlen($this->container['certificate']) > 4096)) {
                $invalidProperties[] = "invalid value for 'certificate', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['certificate']) && (mb_strlen($this->container['certificate']) < 1)) {
                $invalidProperties[] = "invalid value for 'certificate', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['certificateChain']) && (mb_strlen($this->container['certificateChain']) > 8192)) {
                $invalidProperties[] = "invalid value for 'certificateChain', the character length must be smaller than or equal to 8192.";
            }
            if (!is_null($this->container['certificateChain']) && (mb_strlen($this->container['certificateChain']) < 1)) {
                $invalidProperties[] = "invalid value for 'certificateChain', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['privateKey']) && (mb_strlen($this->container['privateKey']) > 4096)) {
                $invalidProperties[] = "invalid value for 'privateKey', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['privateKey']) && (mb_strlen($this->container['privateKey']) < 1)) {
                $invalidProperties[] = "invalid value for 'privateKey', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['encCertificate']) && (mb_strlen($this->container['encCertificate']) > 4096)) {
                $invalidProperties[] = "invalid value for 'encCertificate', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['encCertificate']) && (mb_strlen($this->container['encCertificate']) < 1)) {
                $invalidProperties[] = "invalid value for 'encCertificate', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['encPrivateKey']) && (mb_strlen($this->container['encPrivateKey']) > 4096)) {
                $invalidProperties[] = "invalid value for 'encPrivateKey', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['encPrivateKey']) && (mb_strlen($this->container['encPrivateKey']) < 1)) {
                $invalidProperties[] = "invalid value for 'encPrivateKey', the character length must be bigger than or equal to 1.";
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
    * Gets entireCertificate
    *  证书及证书链。
    *
    * @return string|null
    */
    public function getEntireCertificate()
    {
        return $this->container['entireCertificate'];
    }

    /**
    * Sets entireCertificate
    *
    * @param string|null $entireCertificate 证书及证书链。
    *
    * @return $this
    */
    public function setEntireCertificate($entireCertificate)
    {
        $this->container['entireCertificate'] = $entireCertificate;
        return $this;
    }

    /**
    * Gets certificate
    *  证书内容，不包含证书链。
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
    * @param string|null $certificate 证书内容，不包含证书链。
    *
    * @return $this
    */
    public function setCertificate($certificate)
    {
        $this->container['certificate'] = $certificate;
        return $this;
    }

    /**
    * Gets certificateChain
    *  证书链。
    *
    * @return string|null
    */
    public function getCertificateChain()
    {
        return $this->container['certificateChain'];
    }

    /**
    * Sets certificateChain
    *
    * @param string|null $certificateChain 证书链。
    *
    * @return $this
    */
    public function setCertificateChain($certificateChain)
    {
        $this->container['certificateChain'] = $certificateChain;
        return $this;
    }

    /**
    * Gets privateKey
    *  证书私钥。
    *
    * @return string|null
    */
    public function getPrivateKey()
    {
        return $this->container['privateKey'];
    }

    /**
    * Sets privateKey
    *
    * @param string|null $privateKey 证书私钥。
    *
    * @return $this
    */
    public function setPrivateKey($privateKey)
    {
        $this->container['privateKey'] = $privateKey;
        return $this;
    }

    /**
    * Gets encCertificate
    *  国密证书返回，加密证书内容。
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
    * @param string|null $encCertificate 国密证书返回，加密证书内容。
    *
    * @return $this
    */
    public function setEncCertificate($encCertificate)
    {
        $this->container['encCertificate'] = $encCertificate;
        return $this;
    }

    /**
    * Gets encPrivateKey
    *  国密证书返回，加密证书私钥。 - 自己生成csr的方式：该字段是加密状态，需要解密。   解密思路如下:    1、从数字信封中获取“对称密钥密文”和“加密私钥密文”；   2、使用签名私钥解密“对称密钥密文”，得到“对称密钥明文”；   3、使用对称密钥解密“加密私钥密文”，得到“加密私钥明文”。 - 非自己生成csr的方式：该字段不需要解密。
    *
    * @return string|null
    */
    public function getEncPrivateKey()
    {
        return $this->container['encPrivateKey'];
    }

    /**
    * Sets encPrivateKey
    *
    * @param string|null $encPrivateKey 国密证书返回，加密证书私钥。 - 自己生成csr的方式：该字段是加密状态，需要解密。   解密思路如下:    1、从数字信封中获取“对称密钥密文”和“加密私钥密文”；   2、使用签名私钥解密“对称密钥密文”，得到“对称密钥明文”；   3、使用对称密钥解密“加密私钥密文”，得到“加密私钥明文”。 - 非自己生成csr的方式：该字段不需要解密。
    *
    * @return $this
    */
    public function setEncPrivateKey($encPrivateKey)
    {
        $this->container['encPrivateKey'] = $encPrivateKey;
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

