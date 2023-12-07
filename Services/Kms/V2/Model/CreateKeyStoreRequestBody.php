<?php

namespace HuaweiCloud\SDK\Kms\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateKeyStoreRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateKeyStoreRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * keystoreAlias  专属密钥库别名，取值范围为1到255个字符，满足正则匹配“^[a-zA-Z0-9:/_-]{1,255}$”，且不与已有的专属密钥库别名重名。
    * hsmClusterId  DHSM集群Id，要求集群当前未创建专属密钥库。
    * hsmCaCert  DHSM集群的CA证书
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'keystoreAlias' => 'string',
            'hsmClusterId' => 'string',
            'hsmCaCert' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * keystoreAlias  专属密钥库别名，取值范围为1到255个字符，满足正则匹配“^[a-zA-Z0-9:/_-]{1,255}$”，且不与已有的专属密钥库别名重名。
    * hsmClusterId  DHSM集群Id，要求集群当前未创建专属密钥库。
    * hsmCaCert  DHSM集群的CA证书
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'keystoreAlias' => null,
        'hsmClusterId' => null,
        'hsmCaCert' => null
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
    * keystoreAlias  专属密钥库别名，取值范围为1到255个字符，满足正则匹配“^[a-zA-Z0-9:/_-]{1,255}$”，且不与已有的专属密钥库别名重名。
    * hsmClusterId  DHSM集群Id，要求集群当前未创建专属密钥库。
    * hsmCaCert  DHSM集群的CA证书
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'keystoreAlias' => 'keystore_alias',
            'hsmClusterId' => 'hsm_cluster_id',
            'hsmCaCert' => 'hsm_ca_cert'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * keystoreAlias  专属密钥库别名，取值范围为1到255个字符，满足正则匹配“^[a-zA-Z0-9:/_-]{1,255}$”，且不与已有的专属密钥库别名重名。
    * hsmClusterId  DHSM集群Id，要求集群当前未创建专属密钥库。
    * hsmCaCert  DHSM集群的CA证书
    *
    * @var string[]
    */
    protected static $setters = [
            'keystoreAlias' => 'setKeystoreAlias',
            'hsmClusterId' => 'setHsmClusterId',
            'hsmCaCert' => 'setHsmCaCert'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * keystoreAlias  专属密钥库别名，取值范围为1到255个字符，满足正则匹配“^[a-zA-Z0-9:/_-]{1,255}$”，且不与已有的专属密钥库别名重名。
    * hsmClusterId  DHSM集群Id，要求集群当前未创建专属密钥库。
    * hsmCaCert  DHSM集群的CA证书
    *
    * @var string[]
    */
    protected static $getters = [
            'keystoreAlias' => 'getKeystoreAlias',
            'hsmClusterId' => 'getHsmClusterId',
            'hsmCaCert' => 'getHsmCaCert'
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
        $this->container['keystoreAlias'] = isset($data['keystoreAlias']) ? $data['keystoreAlias'] : null;
        $this->container['hsmClusterId'] = isset($data['hsmClusterId']) ? $data['hsmClusterId'] : null;
        $this->container['hsmCaCert'] = isset($data['hsmCaCert']) ? $data['hsmCaCert'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['keystoreAlias'] === null) {
            $invalidProperties[] = "'keystoreAlias' can't be null";
        }
            if ((mb_strlen($this->container['keystoreAlias']) > 255)) {
                $invalidProperties[] = "invalid value for 'keystoreAlias', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['keystoreAlias']) < 1)) {
                $invalidProperties[] = "invalid value for 'keystoreAlias', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[a-zA-Z0-9:\/_-]{1,255}$/", $this->container['keystoreAlias'])) {
                $invalidProperties[] = "invalid value for 'keystoreAlias', must be conform to the pattern /^[a-zA-Z0-9:\/_-]{1,255}$/.";
            }
        if ($this->container['hsmClusterId'] === null) {
            $invalidProperties[] = "'hsmClusterId' can't be null";
        }
        if ($this->container['hsmCaCert'] === null) {
            $invalidProperties[] = "'hsmCaCert' can't be null";
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
    * Gets keystoreAlias
    *  专属密钥库别名，取值范围为1到255个字符，满足正则匹配“^[a-zA-Z0-9:/_-]{1,255}$”，且不与已有的专属密钥库别名重名。
    *
    * @return string
    */
    public function getKeystoreAlias()
    {
        return $this->container['keystoreAlias'];
    }

    /**
    * Sets keystoreAlias
    *
    * @param string $keystoreAlias 专属密钥库别名，取值范围为1到255个字符，满足正则匹配“^[a-zA-Z0-9:/_-]{1,255}$”，且不与已有的专属密钥库别名重名。
    *
    * @return $this
    */
    public function setKeystoreAlias($keystoreAlias)
    {
        $this->container['keystoreAlias'] = $keystoreAlias;
        return $this;
    }

    /**
    * Gets hsmClusterId
    *  DHSM集群Id，要求集群当前未创建专属密钥库。
    *
    * @return string
    */
    public function getHsmClusterId()
    {
        return $this->container['hsmClusterId'];
    }

    /**
    * Sets hsmClusterId
    *
    * @param string $hsmClusterId DHSM集群Id，要求集群当前未创建专属密钥库。
    *
    * @return $this
    */
    public function setHsmClusterId($hsmClusterId)
    {
        $this->container['hsmClusterId'] = $hsmClusterId;
        return $this;
    }

    /**
    * Gets hsmCaCert
    *  DHSM集群的CA证书
    *
    * @return string
    */
    public function getHsmCaCert()
    {
        return $this->container['hsmCaCert'];
    }

    /**
    * Sets hsmCaCert
    *
    * @param string $hsmCaCert DHSM集群的CA证书
    *
    * @return $this
    */
    public function setHsmCaCert($hsmCaCert)
    {
        $this->container['hsmCaCert'] = $hsmCaCert;
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

