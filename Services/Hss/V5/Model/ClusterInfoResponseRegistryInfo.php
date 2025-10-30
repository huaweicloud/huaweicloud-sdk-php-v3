<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClusterInfoResponseRegistryInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClusterInfoResponse_registry_info';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * registryType  **参数解释** 镜像仓库类型 **取值范围** 字符长度1-256位
    * registryAddr  **参数解释** 镜像仓地址 **取值范围** 字符长度1-256位
    * registryUsername  **参数解释** 镜像仓用户名 **取值范围** 字符长度1-256位
    * namespace  **参数解释** 组织 **取值范围** 字符长度1-256位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'registryType' => 'string',
            'registryAddr' => 'string',
            'registryUsername' => 'string',
            'namespace' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * registryType  **参数解释** 镜像仓库类型 **取值范围** 字符长度1-256位
    * registryAddr  **参数解释** 镜像仓地址 **取值范围** 字符长度1-256位
    * registryUsername  **参数解释** 镜像仓用户名 **取值范围** 字符长度1-256位
    * namespace  **参数解释** 组织 **取值范围** 字符长度1-256位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'registryType' => null,
        'registryAddr' => null,
        'registryUsername' => null,
        'namespace' => null
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
    * registryType  **参数解释** 镜像仓库类型 **取值范围** 字符长度1-256位
    * registryAddr  **参数解释** 镜像仓地址 **取值范围** 字符长度1-256位
    * registryUsername  **参数解释** 镜像仓用户名 **取值范围** 字符长度1-256位
    * namespace  **参数解释** 组织 **取值范围** 字符长度1-256位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'registryType' => 'registry_type',
            'registryAddr' => 'registry_addr',
            'registryUsername' => 'registry_username',
            'namespace' => 'namespace'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * registryType  **参数解释** 镜像仓库类型 **取值范围** 字符长度1-256位
    * registryAddr  **参数解释** 镜像仓地址 **取值范围** 字符长度1-256位
    * registryUsername  **参数解释** 镜像仓用户名 **取值范围** 字符长度1-256位
    * namespace  **参数解释** 组织 **取值范围** 字符长度1-256位
    *
    * @var string[]
    */
    protected static $setters = [
            'registryType' => 'setRegistryType',
            'registryAddr' => 'setRegistryAddr',
            'registryUsername' => 'setRegistryUsername',
            'namespace' => 'setNamespace'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * registryType  **参数解释** 镜像仓库类型 **取值范围** 字符长度1-256位
    * registryAddr  **参数解释** 镜像仓地址 **取值范围** 字符长度1-256位
    * registryUsername  **参数解释** 镜像仓用户名 **取值范围** 字符长度1-256位
    * namespace  **参数解释** 组织 **取值范围** 字符长度1-256位
    *
    * @var string[]
    */
    protected static $getters = [
            'registryType' => 'getRegistryType',
            'registryAddr' => 'getRegistryAddr',
            'registryUsername' => 'getRegistryUsername',
            'namespace' => 'getNamespace'
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
        $this->container['registryType'] = isset($data['registryType']) ? $data['registryType'] : null;
        $this->container['registryAddr'] = isset($data['registryAddr']) ? $data['registryAddr'] : null;
        $this->container['registryUsername'] = isset($data['registryUsername']) ? $data['registryUsername'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['registryType']) && (mb_strlen($this->container['registryType']) > 256)) {
                $invalidProperties[] = "invalid value for 'registryType', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['registryType']) && (mb_strlen($this->container['registryType']) < 1)) {
                $invalidProperties[] = "invalid value for 'registryType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['registryType']) && !preg_match("/^.*$/", $this->container['registryType'])) {
                $invalidProperties[] = "invalid value for 'registryType', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['registryAddr']) && (mb_strlen($this->container['registryAddr']) > 256)) {
                $invalidProperties[] = "invalid value for 'registryAddr', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['registryAddr']) && (mb_strlen($this->container['registryAddr']) < 1)) {
                $invalidProperties[] = "invalid value for 'registryAddr', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['registryAddr']) && !preg_match("/^.*$/", $this->container['registryAddr'])) {
                $invalidProperties[] = "invalid value for 'registryAddr', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['registryUsername']) && (mb_strlen($this->container['registryUsername']) > 256)) {
                $invalidProperties[] = "invalid value for 'registryUsername', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['registryUsername']) && (mb_strlen($this->container['registryUsername']) < 1)) {
                $invalidProperties[] = "invalid value for 'registryUsername', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['registryUsername']) && !preg_match("/^.*$/", $this->container['registryUsername'])) {
                $invalidProperties[] = "invalid value for 'registryUsername', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) > 256)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) < 1)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['namespace']) && !preg_match("/^.*$/", $this->container['namespace'])) {
                $invalidProperties[] = "invalid value for 'namespace', must be conform to the pattern /^.*$/.";
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
    * Gets registryType
    *  **参数解释** 镜像仓库类型 **取值范围** 字符长度1-256位
    *
    * @return string|null
    */
    public function getRegistryType()
    {
        return $this->container['registryType'];
    }

    /**
    * Sets registryType
    *
    * @param string|null $registryType **参数解释** 镜像仓库类型 **取值范围** 字符长度1-256位
    *
    * @return $this
    */
    public function setRegistryType($registryType)
    {
        $this->container['registryType'] = $registryType;
        return $this;
    }

    /**
    * Gets registryAddr
    *  **参数解释** 镜像仓地址 **取值范围** 字符长度1-256位
    *
    * @return string|null
    */
    public function getRegistryAddr()
    {
        return $this->container['registryAddr'];
    }

    /**
    * Sets registryAddr
    *
    * @param string|null $registryAddr **参数解释** 镜像仓地址 **取值范围** 字符长度1-256位
    *
    * @return $this
    */
    public function setRegistryAddr($registryAddr)
    {
        $this->container['registryAddr'] = $registryAddr;
        return $this;
    }

    /**
    * Gets registryUsername
    *  **参数解释** 镜像仓用户名 **取值范围** 字符长度1-256位
    *
    * @return string|null
    */
    public function getRegistryUsername()
    {
        return $this->container['registryUsername'];
    }

    /**
    * Sets registryUsername
    *
    * @param string|null $registryUsername **参数解释** 镜像仓用户名 **取值范围** 字符长度1-256位
    *
    * @return $this
    */
    public function setRegistryUsername($registryUsername)
    {
        $this->container['registryUsername'] = $registryUsername;
        return $this;
    }

    /**
    * Gets namespace
    *  **参数解释** 组织 **取值范围** 字符长度1-256位
    *
    * @return string|null
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string|null $namespace **参数解释** 组织 **取值范围** 字符长度1-256位
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
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

