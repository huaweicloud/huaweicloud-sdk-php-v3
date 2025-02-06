<?php

namespace HuaweiCloud\SDK\IdentityCenter\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InstanceMetadataEntryDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InstanceMetadataEntryDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * identityStoreId  关联到IAM身份中心实例的身份源的全局唯一标识符（ID）
    * instanceId  IAM身份中心实例的全局唯一标识符（ID）
    * alias  用户为身份源标识符定义的别名
    * instanceUrn  实例的统一资源名称（URN）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'identityStoreId' => 'string',
            'instanceId' => 'string',
            'alias' => 'string',
            'instanceUrn' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * identityStoreId  关联到IAM身份中心实例的身份源的全局唯一标识符（ID）
    * instanceId  IAM身份中心实例的全局唯一标识符（ID）
    * alias  用户为身份源标识符定义的别名
    * instanceUrn  实例的统一资源名称（URN）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'identityStoreId' => null,
        'instanceId' => null,
        'alias' => null,
        'instanceUrn' => null
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
    * identityStoreId  关联到IAM身份中心实例的身份源的全局唯一标识符（ID）
    * instanceId  IAM身份中心实例的全局唯一标识符（ID）
    * alias  用户为身份源标识符定义的别名
    * instanceUrn  实例的统一资源名称（URN）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'identityStoreId' => 'identity_store_id',
            'instanceId' => 'instance_id',
            'alias' => 'alias',
            'instanceUrn' => 'instance_urn'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * identityStoreId  关联到IAM身份中心实例的身份源的全局唯一标识符（ID）
    * instanceId  IAM身份中心实例的全局唯一标识符（ID）
    * alias  用户为身份源标识符定义的别名
    * instanceUrn  实例的统一资源名称（URN）
    *
    * @var string[]
    */
    protected static $setters = [
            'identityStoreId' => 'setIdentityStoreId',
            'instanceId' => 'setInstanceId',
            'alias' => 'setAlias',
            'instanceUrn' => 'setInstanceUrn'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * identityStoreId  关联到IAM身份中心实例的身份源的全局唯一标识符（ID）
    * instanceId  IAM身份中心实例的全局唯一标识符（ID）
    * alias  用户为身份源标识符定义的别名
    * instanceUrn  实例的统一资源名称（URN）
    *
    * @var string[]
    */
    protected static $getters = [
            'identityStoreId' => 'getIdentityStoreId',
            'instanceId' => 'getInstanceId',
            'alias' => 'getAlias',
            'instanceUrn' => 'getInstanceUrn'
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
        $this->container['identityStoreId'] = isset($data['identityStoreId']) ? $data['identityStoreId'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['alias'] = isset($data['alias']) ? $data['alias'] : null;
        $this->container['instanceUrn'] = isset($data['instanceUrn']) ? $data['instanceUrn'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['identityStoreId'] === null) {
            $invalidProperties[] = "'identityStoreId' can't be null";
        }
            if ((mb_strlen($this->container['identityStoreId']) > 64)) {
                $invalidProperties[] = "invalid value for 'identityStoreId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['identityStoreId']) < 1)) {
                $invalidProperties[] = "invalid value for 'identityStoreId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^d-[a-zA-Z0-9-]{10}$/", $this->container['identityStoreId'])) {
                $invalidProperties[] = "invalid value for 'identityStoreId', must be conform to the pattern /^d-[a-zA-Z0-9-]{10}$/.";
            }
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
            if ((mb_strlen($this->container['instanceId']) > 20)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 20.";
            }
            if ((mb_strlen($this->container['instanceId']) < 20)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 20.";
            }
            if (!preg_match("/^ins-[a-zA-Z0-9-.]{16}$/", $this->container['instanceId'])) {
                $invalidProperties[] = "invalid value for 'instanceId', must be conform to the pattern /^ins-[a-zA-Z0-9-.]{16}$/.";
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
    * Gets identityStoreId
    *  关联到IAM身份中心实例的身份源的全局唯一标识符（ID）
    *
    * @return string
    */
    public function getIdentityStoreId()
    {
        return $this->container['identityStoreId'];
    }

    /**
    * Sets identityStoreId
    *
    * @param string $identityStoreId 关联到IAM身份中心实例的身份源的全局唯一标识符（ID）
    *
    * @return $this
    */
    public function setIdentityStoreId($identityStoreId)
    {
        $this->container['identityStoreId'] = $identityStoreId;
        return $this;
    }

    /**
    * Gets instanceId
    *  IAM身份中心实例的全局唯一标识符（ID）
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId IAM身份中心实例的全局唯一标识符（ID）
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets alias
    *  用户为身份源标识符定义的别名
    *
    * @return string|null
    */
    public function getAlias()
    {
        return $this->container['alias'];
    }

    /**
    * Sets alias
    *
    * @param string|null $alias 用户为身份源标识符定义的别名
    *
    * @return $this
    */
    public function setAlias($alias)
    {
        $this->container['alias'] = $alias;
        return $this;
    }

    /**
    * Gets instanceUrn
    *  实例的统一资源名称（URN）
    *
    * @return string|null
    */
    public function getInstanceUrn()
    {
        return $this->container['instanceUrn'];
    }

    /**
    * Sets instanceUrn
    *
    * @param string|null $instanceUrn 实例的统一资源名称（URN）
    *
    * @return $this
    */
    public function setInstanceUrn($instanceUrn)
    {
        $this->container['instanceUrn'] = $instanceUrn;
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

