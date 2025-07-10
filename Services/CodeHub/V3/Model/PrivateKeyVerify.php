<?php

namespace HuaweiCloud\SDK\CodeHub\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PrivateKeyVerify implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PrivateKeyVerify';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * repositoryUuid  仓库UUID(由CreateRepository接口返回)
    * privateKey  私钥
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'repositoryUuid' => 'string',
            'privateKey' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * repositoryUuid  仓库UUID(由CreateRepository接口返回)
    * privateKey  私钥
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'repositoryUuid' => null,
        'privateKey' => null
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
    * repositoryUuid  仓库UUID(由CreateRepository接口返回)
    * privateKey  私钥
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'repositoryUuid' => 'repository_uuid',
            'privateKey' => 'private_key'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * repositoryUuid  仓库UUID(由CreateRepository接口返回)
    * privateKey  私钥
    *
    * @var string[]
    */
    protected static $setters = [
            'repositoryUuid' => 'setRepositoryUuid',
            'privateKey' => 'setPrivateKey'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * repositoryUuid  仓库UUID(由CreateRepository接口返回)
    * privateKey  私钥
    *
    * @var string[]
    */
    protected static $getters = [
            'repositoryUuid' => 'getRepositoryUuid',
            'privateKey' => 'getPrivateKey'
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
        $this->container['repositoryUuid'] = isset($data['repositoryUuid']) ? $data['repositoryUuid'] : null;
        $this->container['privateKey'] = isset($data['privateKey']) ? $data['privateKey'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['repositoryUuid'] === null) {
            $invalidProperties[] = "'repositoryUuid' can't be null";
        }
            if ((mb_strlen($this->container['repositoryUuid']) > 32)) {
                $invalidProperties[] = "invalid value for 'repositoryUuid', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['repositoryUuid']) < 32)) {
                $invalidProperties[] = "invalid value for 'repositoryUuid', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['privateKey'] === null) {
            $invalidProperties[] = "'privateKey' can't be null";
        }
            if ((mb_strlen($this->container['privateKey']) > 2048)) {
                $invalidProperties[] = "invalid value for 'privateKey', the character length must be smaller than or equal to 2048.";
            }
            if ((mb_strlen($this->container['privateKey']) < 0)) {
                $invalidProperties[] = "invalid value for 'privateKey', the character length must be bigger than or equal to 0.";
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
    * Gets repositoryUuid
    *  仓库UUID(由CreateRepository接口返回)
    *
    * @return string
    */
    public function getRepositoryUuid()
    {
        return $this->container['repositoryUuid'];
    }

    /**
    * Sets repositoryUuid
    *
    * @param string $repositoryUuid 仓库UUID(由CreateRepository接口返回)
    *
    * @return $this
    */
    public function setRepositoryUuid($repositoryUuid)
    {
        $this->container['repositoryUuid'] = $repositoryUuid;
        return $this;
    }

    /**
    * Gets privateKey
    *  私钥
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
    * @param string $privateKey 私钥
    *
    * @return $this
    */
    public function setPrivateKey($privateKey)
    {
        $this->container['privateKey'] = $privateKey;
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

