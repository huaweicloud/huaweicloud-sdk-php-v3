<?php

namespace HuaweiCloud\SDK\Vpn\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateVpnGatewayCertificateRequestBodyContent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateVpnGatewayCertificateRequestBodyContent';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  VPN网关证书名称
    * certificate  证书内容，国密证书时为签名证书内容
    * privateKey  证书私钥，国密证书时为签名证书私钥
    * certificateChain  VPN网关CA证书内容
    * encCertificate  国密证书的加密证书内容
    * encPrivateKey  国密证书的加密证书私钥
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'certificate' => 'string',
            'privateKey' => 'string',
            'certificateChain' => 'string',
            'encCertificate' => 'string',
            'encPrivateKey' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  VPN网关证书名称
    * certificate  证书内容，国密证书时为签名证书内容
    * privateKey  证书私钥，国密证书时为签名证书私钥
    * certificateChain  VPN网关CA证书内容
    * encCertificate  国密证书的加密证书内容
    * encPrivateKey  国密证书的加密证书私钥
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'certificate' => null,
        'privateKey' => null,
        'certificateChain' => null,
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
    * name  VPN网关证书名称
    * certificate  证书内容，国密证书时为签名证书内容
    * privateKey  证书私钥，国密证书时为签名证书私钥
    * certificateChain  VPN网关CA证书内容
    * encCertificate  国密证书的加密证书内容
    * encPrivateKey  国密证书的加密证书私钥
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'certificate' => 'certificate',
            'privateKey' => 'private_key',
            'certificateChain' => 'certificate_chain',
            'encCertificate' => 'enc_certificate',
            'encPrivateKey' => 'enc_private_key'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  VPN网关证书名称
    * certificate  证书内容，国密证书时为签名证书内容
    * privateKey  证书私钥，国密证书时为签名证书私钥
    * certificateChain  VPN网关CA证书内容
    * encCertificate  国密证书的加密证书内容
    * encPrivateKey  国密证书的加密证书私钥
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'certificate' => 'setCertificate',
            'privateKey' => 'setPrivateKey',
            'certificateChain' => 'setCertificateChain',
            'encCertificate' => 'setEncCertificate',
            'encPrivateKey' => 'setEncPrivateKey'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  VPN网关证书名称
    * certificate  证书内容，国密证书时为签名证书内容
    * privateKey  证书私钥，国密证书时为签名证书私钥
    * certificateChain  VPN网关CA证书内容
    * encCertificate  国密证书的加密证书内容
    * encPrivateKey  国密证书的加密证书私钥
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'certificate' => 'getCertificate',
            'privateKey' => 'getPrivateKey',
            'certificateChain' => 'getCertificateChain',
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['certificate'] = isset($data['certificate']) ? $data['certificate'] : null;
        $this->container['privateKey'] = isset($data['privateKey']) ? $data['privateKey'] : null;
        $this->container['certificateChain'] = isset($data['certificateChain']) ? $data['certificateChain'] : null;
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
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 63)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 63.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 3)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 3.";
            }
            if (!is_null($this->container['name']) && !preg_match("/^[一-龥\\.A-Za-z0-9_-]{3,63}/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[一-龥\\.A-Za-z0-9_-]{3,63}/.";
            }
        if ($this->container['certificate'] === null) {
            $invalidProperties[] = "'certificate' can't be null";
        }
            if ((mb_strlen($this->container['certificate']) > 4096)) {
                $invalidProperties[] = "invalid value for 'certificate', the character length must be smaller than or equal to 4096.";
            }
            if ((mb_strlen($this->container['certificate']) < 1)) {
                $invalidProperties[] = "invalid value for 'certificate', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['privateKey'] === null) {
            $invalidProperties[] = "'privateKey' can't be null";
        }
            if ((mb_strlen($this->container['privateKey']) > 4096)) {
                $invalidProperties[] = "invalid value for 'privateKey', the character length must be smaller than or equal to 4096.";
            }
            if ((mb_strlen($this->container['privateKey']) < 1)) {
                $invalidProperties[] = "invalid value for 'privateKey', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['certificateChain'] === null) {
            $invalidProperties[] = "'certificateChain' can't be null";
        }
            if ((mb_strlen($this->container['certificateChain']) > 8192)) {
                $invalidProperties[] = "invalid value for 'certificateChain', the character length must be smaller than or equal to 8192.";
            }
            if ((mb_strlen($this->container['certificateChain']) < 1)) {
                $invalidProperties[] = "invalid value for 'certificateChain', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['encCertificate'] === null) {
            $invalidProperties[] = "'encCertificate' can't be null";
        }
            if ((mb_strlen($this->container['encCertificate']) > 4096)) {
                $invalidProperties[] = "invalid value for 'encCertificate', the character length must be smaller than or equal to 4096.";
            }
            if ((mb_strlen($this->container['encCertificate']) < 1)) {
                $invalidProperties[] = "invalid value for 'encCertificate', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['encPrivateKey'] === null) {
            $invalidProperties[] = "'encPrivateKey' can't be null";
        }
            if ((mb_strlen($this->container['encPrivateKey']) > 4096)) {
                $invalidProperties[] = "invalid value for 'encPrivateKey', the character length must be smaller than or equal to 4096.";
            }
            if ((mb_strlen($this->container['encPrivateKey']) < 1)) {
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
    * Gets name
    *  VPN网关证书名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name VPN网关证书名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets certificate
    *  证书内容，国密证书时为签名证书内容
    *
    * @return string
    */
    public function getCertificate()
    {
        return $this->container['certificate'];
    }

    /**
    * Sets certificate
    *
    * @param string $certificate 证书内容，国密证书时为签名证书内容
    *
    * @return $this
    */
    public function setCertificate($certificate)
    {
        $this->container['certificate'] = $certificate;
        return $this;
    }

    /**
    * Gets privateKey
    *  证书私钥，国密证书时为签名证书私钥
    *
    * @return string
    */
    public function getPrivateKey()
    {
        return $this->container['privateKey'];
    }

    /**
    * Sets privateKey
    *
    * @param string $privateKey 证书私钥，国密证书时为签名证书私钥
    *
    * @return $this
    */
    public function setPrivateKey($privateKey)
    {
        $this->container['privateKey'] = $privateKey;
        return $this;
    }

    /**
    * Gets certificateChain
    *  VPN网关CA证书内容
    *
    * @return string
    */
    public function getCertificateChain()
    {
        return $this->container['certificateChain'];
    }

    /**
    * Sets certificateChain
    *
    * @param string $certificateChain VPN网关CA证书内容
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
    *  国密证书的加密证书内容
    *
    * @return string
    */
    public function getEncCertificate()
    {
        return $this->container['encCertificate'];
    }

    /**
    * Sets encCertificate
    *
    * @param string $encCertificate 国密证书的加密证书内容
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
    *  国密证书的加密证书私钥
    *
    * @return string
    */
    public function getEncPrivateKey()
    {
        return $this->container['encPrivateKey'];
    }

    /**
    * Sets encPrivateKey
    *
    * @param string $encPrivateKey 国密证书的加密证书私钥
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

