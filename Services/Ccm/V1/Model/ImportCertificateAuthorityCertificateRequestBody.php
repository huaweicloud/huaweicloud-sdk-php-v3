<?php

namespace HuaweiCloud\SDK\Ccm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ImportCertificateAuthorityCertificateRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ImportCertificateAuthorityCertificateRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * certificate  证书内容。
    * certificateChain  证书链内容。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'certificate' => 'string',
            'certificateChain' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * certificate  证书内容。
    * certificateChain  证书链内容。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'certificate' => null,
        'certificateChain' => null
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
    * certificate  证书内容。
    * certificateChain  证书链内容。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'certificate' => 'certificate',
            'certificateChain' => 'certificate_chain'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * certificate  证书内容。
    * certificateChain  证书链内容。
    *
    * @var string[]
    */
    protected static $setters = [
            'certificate' => 'setCertificate',
            'certificateChain' => 'setCertificateChain'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * certificate  证书内容。
    * certificateChain  证书链内容。
    *
    * @var string[]
    */
    protected static $getters = [
            'certificate' => 'getCertificate',
            'certificateChain' => 'getCertificateChain'
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
        $this->container['certificate'] = isset($data['certificate']) ? $data['certificate'] : null;
        $this->container['certificateChain'] = isset($data['certificateChain']) ? $data['certificateChain'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['certificate'] === null) {
            $invalidProperties[] = "'certificate' can't be null";
        }
            if ((mb_strlen($this->container['certificate']) > 32768)) {
                $invalidProperties[] = "invalid value for 'certificate', the character length must be smaller than or equal to 32768.";
            }
            if ((mb_strlen($this->container['certificate']) < 1)) {
                $invalidProperties[] = "invalid value for 'certificate', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['certificateChain']) && (mb_strlen($this->container['certificateChain']) > 2097152)) {
                $invalidProperties[] = "invalid value for 'certificateChain', the character length must be smaller than or equal to 2097152.";
            }
            if (!is_null($this->container['certificateChain']) && (mb_strlen($this->container['certificateChain']) < 0)) {
                $invalidProperties[] = "invalid value for 'certificateChain', the character length must be bigger than or equal to 0.";
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
    * Gets certificate
    *  证书内容。
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
    * @param string $certificate 证书内容。
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

