<?php

namespace HuaweiCloud\SDK\Ccm\V1\Model;

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
    * privateKey  私钥内容。
    * certificate  证书内容。
    * certificateChain  证书链内容。
    * encCertificate  加密证书内容。
    * encPrivateKey  加密私钥内容。
    * encSm2EnvelopedKey  加密私钥的国密GMT0009标准规范SM2数字信封。
    * signedAndEnvelopedData  加密私钥的国密GMT0010标准规范签名数字信封。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'privateKey' => 'string',
            'certificate' => 'string',
            'certificateChain' => 'string',
            'encCertificate' => 'string',
            'encPrivateKey' => 'string',
            'encSm2EnvelopedKey' => 'string',
            'signedAndEnvelopedData' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * privateKey  私钥内容。
    * certificate  证书内容。
    * certificateChain  证书链内容。
    * encCertificate  加密证书内容。
    * encPrivateKey  加密私钥内容。
    * encSm2EnvelopedKey  加密私钥的国密GMT0009标准规范SM2数字信封。
    * signedAndEnvelopedData  加密私钥的国密GMT0010标准规范签名数字信封。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'privateKey' => null,
        'certificate' => null,
        'certificateChain' => null,
        'encCertificate' => null,
        'encPrivateKey' => null,
        'encSm2EnvelopedKey' => null,
        'signedAndEnvelopedData' => null
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
    * privateKey  私钥内容。
    * certificate  证书内容。
    * certificateChain  证书链内容。
    * encCertificate  加密证书内容。
    * encPrivateKey  加密私钥内容。
    * encSm2EnvelopedKey  加密私钥的国密GMT0009标准规范SM2数字信封。
    * signedAndEnvelopedData  加密私钥的国密GMT0010标准规范签名数字信封。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'privateKey' => 'private_key',
            'certificate' => 'certificate',
            'certificateChain' => 'certificate_chain',
            'encCertificate' => 'enc_certificate',
            'encPrivateKey' => 'enc_private_key',
            'encSm2EnvelopedKey' => 'enc_sm2_enveloped_key',
            'signedAndEnvelopedData' => 'signed_and_enveloped_data'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * privateKey  私钥内容。
    * certificate  证书内容。
    * certificateChain  证书链内容。
    * encCertificate  加密证书内容。
    * encPrivateKey  加密私钥内容。
    * encSm2EnvelopedKey  加密私钥的国密GMT0009标准规范SM2数字信封。
    * signedAndEnvelopedData  加密私钥的国密GMT0010标准规范签名数字信封。
    *
    * @var string[]
    */
    protected static $setters = [
            'privateKey' => 'setPrivateKey',
            'certificate' => 'setCertificate',
            'certificateChain' => 'setCertificateChain',
            'encCertificate' => 'setEncCertificate',
            'encPrivateKey' => 'setEncPrivateKey',
            'encSm2EnvelopedKey' => 'setEncSm2EnvelopedKey',
            'signedAndEnvelopedData' => 'setSignedAndEnvelopedData'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * privateKey  私钥内容。
    * certificate  证书内容。
    * certificateChain  证书链内容。
    * encCertificate  加密证书内容。
    * encPrivateKey  加密私钥内容。
    * encSm2EnvelopedKey  加密私钥的国密GMT0009标准规范SM2数字信封。
    * signedAndEnvelopedData  加密私钥的国密GMT0010标准规范签名数字信封。
    *
    * @var string[]
    */
    protected static $getters = [
            'privateKey' => 'getPrivateKey',
            'certificate' => 'getCertificate',
            'certificateChain' => 'getCertificateChain',
            'encCertificate' => 'getEncCertificate',
            'encPrivateKey' => 'getEncPrivateKey',
            'encSm2EnvelopedKey' => 'getEncSm2EnvelopedKey',
            'signedAndEnvelopedData' => 'getSignedAndEnvelopedData'
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
        $this->container['privateKey'] = isset($data['privateKey']) ? $data['privateKey'] : null;
        $this->container['certificate'] = isset($data['certificate']) ? $data['certificate'] : null;
        $this->container['certificateChain'] = isset($data['certificateChain']) ? $data['certificateChain'] : null;
        $this->container['encCertificate'] = isset($data['encCertificate']) ? $data['encCertificate'] : null;
        $this->container['encPrivateKey'] = isset($data['encPrivateKey']) ? $data['encPrivateKey'] : null;
        $this->container['encSm2EnvelopedKey'] = isset($data['encSm2EnvelopedKey']) ? $data['encSm2EnvelopedKey'] : null;
        $this->container['signedAndEnvelopedData'] = isset($data['signedAndEnvelopedData']) ? $data['signedAndEnvelopedData'] : null;
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
    * Gets privateKey
    *  私钥内容。
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
    * @param string|null $privateKey 私钥内容。
    *
    * @return $this
    */
    public function setPrivateKey($privateKey)
    {
        $this->container['privateKey'] = $privateKey;
        return $this;
    }

    /**
    * Gets certificate
    *  证书内容。
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
    * @param string|null $certificate 证书内容。
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
    *  证书链内容。
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
    * @param string|null $certificateChain 证书链内容。
    *
    * @return $this
    */
    public function setCertificateChain($certificateChain)
    {
        $this->container['certificateChain'] = $certificateChain;
        return $this;
    }

    /**
    * Gets encCertificate
    *  加密证书内容。
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
    * @param string|null $encCertificate 加密证书内容。
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
    *  加密私钥内容。
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
    * @param string|null $encPrivateKey 加密私钥内容。
    *
    * @return $this
    */
    public function setEncPrivateKey($encPrivateKey)
    {
        $this->container['encPrivateKey'] = $encPrivateKey;
        return $this;
    }

    /**
    * Gets encSm2EnvelopedKey
    *  加密私钥的国密GMT0009标准规范SM2数字信封。
    *
    * @return string|null
    */
    public function getEncSm2EnvelopedKey()
    {
        return $this->container['encSm2EnvelopedKey'];
    }

    /**
    * Sets encSm2EnvelopedKey
    *
    * @param string|null $encSm2EnvelopedKey 加密私钥的国密GMT0009标准规范SM2数字信封。
    *
    * @return $this
    */
    public function setEncSm2EnvelopedKey($encSm2EnvelopedKey)
    {
        $this->container['encSm2EnvelopedKey'] = $encSm2EnvelopedKey;
        return $this;
    }

    /**
    * Gets signedAndEnvelopedData
    *  加密私钥的国密GMT0010标准规范签名数字信封。
    *
    * @return string|null
    */
    public function getSignedAndEnvelopedData()
    {
        return $this->container['signedAndEnvelopedData'];
    }

    /**
    * Sets signedAndEnvelopedData
    *
    * @param string|null $signedAndEnvelopedData 加密私钥的国密GMT0010标准规范签名数字信封。
    *
    * @return $this
    */
    public function setSignedAndEnvelopedData($signedAndEnvelopedData)
    {
        $this->container['signedAndEnvelopedData'] = $signedAndEnvelopedData;
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

