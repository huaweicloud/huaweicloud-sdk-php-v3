<?php

namespace HuaweiCloud\SDK\Sms\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowCertKeyResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowCertKeyResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cert  源端证书
    * privateKey  源端私钥
    * ca  ca证书
    * targetMgmtCert  目的端管理层证书
    * targetMgmtPrivateKey  目的端管理层私钥
    * targetDataCert  目的端数据层证书
    * targetDataPrivateKey  目的端数据层私钥
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cert' => 'string',
            'privateKey' => 'string',
            'ca' => 'string',
            'targetMgmtCert' => 'string',
            'targetMgmtPrivateKey' => 'string',
            'targetDataCert' => 'string',
            'targetDataPrivateKey' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cert  源端证书
    * privateKey  源端私钥
    * ca  ca证书
    * targetMgmtCert  目的端管理层证书
    * targetMgmtPrivateKey  目的端管理层私钥
    * targetDataCert  目的端数据层证书
    * targetDataPrivateKey  目的端数据层私钥
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cert' => null,
        'privateKey' => null,
        'ca' => null,
        'targetMgmtCert' => null,
        'targetMgmtPrivateKey' => null,
        'targetDataCert' => null,
        'targetDataPrivateKey' => null
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
    * cert  源端证书
    * privateKey  源端私钥
    * ca  ca证书
    * targetMgmtCert  目的端管理层证书
    * targetMgmtPrivateKey  目的端管理层私钥
    * targetDataCert  目的端数据层证书
    * targetDataPrivateKey  目的端数据层私钥
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cert' => 'cert',
            'privateKey' => 'private_key',
            'ca' => 'ca',
            'targetMgmtCert' => 'target_mgmt_cert',
            'targetMgmtPrivateKey' => 'target_mgmt_private_key',
            'targetDataCert' => 'target_data_cert',
            'targetDataPrivateKey' => 'target_data_private_key'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cert  源端证书
    * privateKey  源端私钥
    * ca  ca证书
    * targetMgmtCert  目的端管理层证书
    * targetMgmtPrivateKey  目的端管理层私钥
    * targetDataCert  目的端数据层证书
    * targetDataPrivateKey  目的端数据层私钥
    *
    * @var string[]
    */
    protected static $setters = [
            'cert' => 'setCert',
            'privateKey' => 'setPrivateKey',
            'ca' => 'setCa',
            'targetMgmtCert' => 'setTargetMgmtCert',
            'targetMgmtPrivateKey' => 'setTargetMgmtPrivateKey',
            'targetDataCert' => 'setTargetDataCert',
            'targetDataPrivateKey' => 'setTargetDataPrivateKey'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cert  源端证书
    * privateKey  源端私钥
    * ca  ca证书
    * targetMgmtCert  目的端管理层证书
    * targetMgmtPrivateKey  目的端管理层私钥
    * targetDataCert  目的端数据层证书
    * targetDataPrivateKey  目的端数据层私钥
    *
    * @var string[]
    */
    protected static $getters = [
            'cert' => 'getCert',
            'privateKey' => 'getPrivateKey',
            'ca' => 'getCa',
            'targetMgmtCert' => 'getTargetMgmtCert',
            'targetMgmtPrivateKey' => 'getTargetMgmtPrivateKey',
            'targetDataCert' => 'getTargetDataCert',
            'targetDataPrivateKey' => 'getTargetDataPrivateKey'
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
        $this->container['cert'] = isset($data['cert']) ? $data['cert'] : null;
        $this->container['privateKey'] = isset($data['privateKey']) ? $data['privateKey'] : null;
        $this->container['ca'] = isset($data['ca']) ? $data['ca'] : null;
        $this->container['targetMgmtCert'] = isset($data['targetMgmtCert']) ? $data['targetMgmtCert'] : null;
        $this->container['targetMgmtPrivateKey'] = isset($data['targetMgmtPrivateKey']) ? $data['targetMgmtPrivateKey'] : null;
        $this->container['targetDataCert'] = isset($data['targetDataCert']) ? $data['targetDataCert'] : null;
        $this->container['targetDataPrivateKey'] = isset($data['targetDataPrivateKey']) ? $data['targetDataPrivateKey'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['cert']) && (mb_strlen($this->container['cert']) > 1048576)) {
                $invalidProperties[] = "invalid value for 'cert', the character length must be smaller than or equal to 1048576.";
            }
            if (!is_null($this->container['cert']) && (mb_strlen($this->container['cert']) < 1)) {
                $invalidProperties[] = "invalid value for 'cert', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['privateKey']) && (mb_strlen($this->container['privateKey']) > 1048576)) {
                $invalidProperties[] = "invalid value for 'privateKey', the character length must be smaller than or equal to 1048576.";
            }
            if (!is_null($this->container['privateKey']) && (mb_strlen($this->container['privateKey']) < 1)) {
                $invalidProperties[] = "invalid value for 'privateKey', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['ca']) && (mb_strlen($this->container['ca']) > 1048576)) {
                $invalidProperties[] = "invalid value for 'ca', the character length must be smaller than or equal to 1048576.";
            }
            if (!is_null($this->container['ca']) && (mb_strlen($this->container['ca']) < 1)) {
                $invalidProperties[] = "invalid value for 'ca', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['targetMgmtCert']) && (mb_strlen($this->container['targetMgmtCert']) > 1048576)) {
                $invalidProperties[] = "invalid value for 'targetMgmtCert', the character length must be smaller than or equal to 1048576.";
            }
            if (!is_null($this->container['targetMgmtCert']) && (mb_strlen($this->container['targetMgmtCert']) < 1)) {
                $invalidProperties[] = "invalid value for 'targetMgmtCert', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['targetMgmtPrivateKey']) && (mb_strlen($this->container['targetMgmtPrivateKey']) > 1048576)) {
                $invalidProperties[] = "invalid value for 'targetMgmtPrivateKey', the character length must be smaller than or equal to 1048576.";
            }
            if (!is_null($this->container['targetMgmtPrivateKey']) && (mb_strlen($this->container['targetMgmtPrivateKey']) < 1)) {
                $invalidProperties[] = "invalid value for 'targetMgmtPrivateKey', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['targetDataCert']) && (mb_strlen($this->container['targetDataCert']) > 1048576)) {
                $invalidProperties[] = "invalid value for 'targetDataCert', the character length must be smaller than or equal to 1048576.";
            }
            if (!is_null($this->container['targetDataCert']) && (mb_strlen($this->container['targetDataCert']) < 1)) {
                $invalidProperties[] = "invalid value for 'targetDataCert', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['targetDataPrivateKey']) && (mb_strlen($this->container['targetDataPrivateKey']) > 1048576)) {
                $invalidProperties[] = "invalid value for 'targetDataPrivateKey', the character length must be smaller than or equal to 1048576.";
            }
            if (!is_null($this->container['targetDataPrivateKey']) && (mb_strlen($this->container['targetDataPrivateKey']) < 1)) {
                $invalidProperties[] = "invalid value for 'targetDataPrivateKey', the character length must be bigger than or equal to 1.";
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
    * Gets cert
    *  源端证书
    *
    * @return string|null
    */
    public function getCert()
    {
        return $this->container['cert'];
    }

    /**
    * Sets cert
    *
    * @param string|null $cert 源端证书
    *
    * @return $this
    */
    public function setCert($cert)
    {
        $this->container['cert'] = $cert;
        return $this;
    }

    /**
    * Gets privateKey
    *  源端私钥
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
    * @param string|null $privateKey 源端私钥
    *
    * @return $this
    */
    public function setPrivateKey($privateKey)
    {
        $this->container['privateKey'] = $privateKey;
        return $this;
    }

    /**
    * Gets ca
    *  ca证书
    *
    * @return string|null
    */
    public function getCa()
    {
        return $this->container['ca'];
    }

    /**
    * Sets ca
    *
    * @param string|null $ca ca证书
    *
    * @return $this
    */
    public function setCa($ca)
    {
        $this->container['ca'] = $ca;
        return $this;
    }

    /**
    * Gets targetMgmtCert
    *  目的端管理层证书
    *
    * @return string|null
    */
    public function getTargetMgmtCert()
    {
        return $this->container['targetMgmtCert'];
    }

    /**
    * Sets targetMgmtCert
    *
    * @param string|null $targetMgmtCert 目的端管理层证书
    *
    * @return $this
    */
    public function setTargetMgmtCert($targetMgmtCert)
    {
        $this->container['targetMgmtCert'] = $targetMgmtCert;
        return $this;
    }

    /**
    * Gets targetMgmtPrivateKey
    *  目的端管理层私钥
    *
    * @return string|null
    */
    public function getTargetMgmtPrivateKey()
    {
        return $this->container['targetMgmtPrivateKey'];
    }

    /**
    * Sets targetMgmtPrivateKey
    *
    * @param string|null $targetMgmtPrivateKey 目的端管理层私钥
    *
    * @return $this
    */
    public function setTargetMgmtPrivateKey($targetMgmtPrivateKey)
    {
        $this->container['targetMgmtPrivateKey'] = $targetMgmtPrivateKey;
        return $this;
    }

    /**
    * Gets targetDataCert
    *  目的端数据层证书
    *
    * @return string|null
    */
    public function getTargetDataCert()
    {
        return $this->container['targetDataCert'];
    }

    /**
    * Sets targetDataCert
    *
    * @param string|null $targetDataCert 目的端数据层证书
    *
    * @return $this
    */
    public function setTargetDataCert($targetDataCert)
    {
        $this->container['targetDataCert'] = $targetDataCert;
        return $this;
    }

    /**
    * Gets targetDataPrivateKey
    *  目的端数据层私钥
    *
    * @return string|null
    */
    public function getTargetDataPrivateKey()
    {
        return $this->container['targetDataPrivateKey'];
    }

    /**
    * Sets targetDataPrivateKey
    *
    * @param string|null $targetDataPrivateKey 目的端数据层私钥
    *
    * @return $this
    */
    public function setTargetDataPrivateKey($targetDataPrivateKey)
    {
        $this->container['targetDataPrivateKey'] = $targetDataPrivateKey;
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

