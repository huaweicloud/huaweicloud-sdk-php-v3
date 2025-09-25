<?php

namespace HuaweiCloud\SDK\Css\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DiskEncryptionInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'diskEncryptionInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * systemEncrypted  是否开启磁盘加密。通过磁盘加密对集群节点的数据盘进行KMS加密，保障数据存储的安全性。
    * systemCmkid  磁盘密钥ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'systemEncrypted' => 'string',
            'systemCmkid' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * systemEncrypted  是否开启磁盘加密。通过磁盘加密对集群节点的数据盘进行KMS加密，保障数据存储的安全性。
    * systemCmkid  磁盘密钥ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'systemEncrypted' => null,
        'systemCmkid' => null
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
    * systemEncrypted  是否开启磁盘加密。通过磁盘加密对集群节点的数据盘进行KMS加密，保障数据存储的安全性。
    * systemCmkid  磁盘密钥ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'systemEncrypted' => 'systemEncrypted',
            'systemCmkid' => 'systemCmkid'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * systemEncrypted  是否开启磁盘加密。通过磁盘加密对集群节点的数据盘进行KMS加密，保障数据存储的安全性。
    * systemCmkid  磁盘密钥ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'systemEncrypted' => 'setSystemEncrypted',
            'systemCmkid' => 'setSystemCmkid'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * systemEncrypted  是否开启磁盘加密。通过磁盘加密对集群节点的数据盘进行KMS加密，保障数据存储的安全性。
    * systemCmkid  磁盘密钥ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'systemEncrypted' => 'getSystemEncrypted',
            'systemCmkid' => 'getSystemCmkid'
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
        $this->container['systemEncrypted'] = isset($data['systemEncrypted']) ? $data['systemEncrypted'] : null;
        $this->container['systemCmkid'] = isset($data['systemCmkid']) ? $data['systemCmkid'] : null;
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
    * Gets systemEncrypted
    *  是否开启磁盘加密。通过磁盘加密对集群节点的数据盘进行KMS加密，保障数据存储的安全性。
    *
    * @return string|null
    */
    public function getSystemEncrypted()
    {
        return $this->container['systemEncrypted'];
    }

    /**
    * Sets systemEncrypted
    *
    * @param string|null $systemEncrypted 是否开启磁盘加密。通过磁盘加密对集群节点的数据盘进行KMS加密，保障数据存储的安全性。
    *
    * @return $this
    */
    public function setSystemEncrypted($systemEncrypted)
    {
        $this->container['systemEncrypted'] = $systemEncrypted;
        return $this;
    }

    /**
    * Gets systemCmkid
    *  磁盘密钥ID。
    *
    * @return string|null
    */
    public function getSystemCmkid()
    {
        return $this->container['systemCmkid'];
    }

    /**
    * Sets systemCmkid
    *
    * @param string|null $systemCmkid 磁盘密钥ID。
    *
    * @return $this
    */
    public function setSystemCmkid($systemCmkid)
    {
        $this->container['systemCmkid'] = $systemCmkid;
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

