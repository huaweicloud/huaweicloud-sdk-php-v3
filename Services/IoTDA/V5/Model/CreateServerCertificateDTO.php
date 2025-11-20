<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateServerCertificateDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateServerCertificateDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * certificatePem  **参数说明**：证书内容，PEM格式
    * privateKey  **参数说明**：证书私钥
    * privateKeyPassword  **参数说明**：私钥密码
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'certificatePem' => 'string',
            'privateKey' => 'string',
            'privateKeyPassword' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * certificatePem  **参数说明**：证书内容，PEM格式
    * privateKey  **参数说明**：证书私钥
    * privateKeyPassword  **参数说明**：私钥密码
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'certificatePem' => null,
        'privateKey' => null,
        'privateKeyPassword' => null
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
    * certificatePem  **参数说明**：证书内容，PEM格式
    * privateKey  **参数说明**：证书私钥
    * privateKeyPassword  **参数说明**：私钥密码
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'certificatePem' => 'certificate_pem',
            'privateKey' => 'private_key',
            'privateKeyPassword' => 'private_key_password'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * certificatePem  **参数说明**：证书内容，PEM格式
    * privateKey  **参数说明**：证书私钥
    * privateKeyPassword  **参数说明**：私钥密码
    *
    * @var string[]
    */
    protected static $setters = [
            'certificatePem' => 'setCertificatePem',
            'privateKey' => 'setPrivateKey',
            'privateKeyPassword' => 'setPrivateKeyPassword'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * certificatePem  **参数说明**：证书内容，PEM格式
    * privateKey  **参数说明**：证书私钥
    * privateKeyPassword  **参数说明**：私钥密码
    *
    * @var string[]
    */
    protected static $getters = [
            'certificatePem' => 'getCertificatePem',
            'privateKey' => 'getPrivateKey',
            'privateKeyPassword' => 'getPrivateKeyPassword'
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
        $this->container['certificatePem'] = isset($data['certificatePem']) ? $data['certificatePem'] : null;
        $this->container['privateKey'] = isset($data['privateKey']) ? $data['privateKey'] : null;
        $this->container['privateKeyPassword'] = isset($data['privateKeyPassword']) ? $data['privateKeyPassword'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['certificatePem'] === null) {
            $invalidProperties[] = "'certificatePem' can't be null";
        }
            if ((mb_strlen($this->container['certificatePem']) > 65535)) {
                $invalidProperties[] = "invalid value for 'certificatePem', the character length must be smaller than or equal to 65535.";
            }
            if ((mb_strlen($this->container['certificatePem']) < 1)) {
                $invalidProperties[] = "invalid value for 'certificatePem', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['privateKey'] === null) {
            $invalidProperties[] = "'privateKey' can't be null";
        }
            if ((mb_strlen($this->container['privateKey']) > 10240)) {
                $invalidProperties[] = "invalid value for 'privateKey', the character length must be smaller than or equal to 10240.";
            }
            if ((mb_strlen($this->container['privateKey']) < 1)) {
                $invalidProperties[] = "invalid value for 'privateKey', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['privateKeyPassword']) && (mb_strlen($this->container['privateKeyPassword']) > 64)) {
                $invalidProperties[] = "invalid value for 'privateKeyPassword', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['privateKeyPassword']) && (mb_strlen($this->container['privateKeyPassword']) < 1)) {
                $invalidProperties[] = "invalid value for 'privateKeyPassword', the character length must be bigger than or equal to 1.";
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
    * Gets certificatePem
    *  **参数说明**：证书内容，PEM格式
    *
    * @return string
    */
    public function getCertificatePem()
    {
        return $this->container['certificatePem'];
    }

    /**
    * Sets certificatePem
    *
    * @param string $certificatePem **参数说明**：证书内容，PEM格式
    *
    * @return $this
    */
    public function setCertificatePem($certificatePem)
    {
        $this->container['certificatePem'] = $certificatePem;
        return $this;
    }

    /**
    * Gets privateKey
    *  **参数说明**：证书私钥
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
    * @param string $privateKey **参数说明**：证书私钥
    *
    * @return $this
    */
    public function setPrivateKey($privateKey)
    {
        $this->container['privateKey'] = $privateKey;
        return $this;
    }

    /**
    * Gets privateKeyPassword
    *  **参数说明**：私钥密码
    *
    * @return string|null
    */
    public function getPrivateKeyPassword()
    {
        return $this->container['privateKeyPassword'];
    }

    /**
    * Sets privateKeyPassword
    *
    * @param string|null $privateKeyPassword **参数说明**：私钥密码
    *
    * @return $this
    */
    public function setPrivateKeyPassword($privateKeyPassword)
    {
        $this->container['privateKeyPassword'] = $privateKeyPassword;
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

