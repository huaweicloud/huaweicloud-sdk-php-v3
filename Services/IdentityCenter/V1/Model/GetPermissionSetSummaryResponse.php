<?php

namespace HuaweiCloud\SDK\IdentityCenter\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GetPermissionSetSummaryResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GetPermissionSetSummaryResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * permissionSets  已创建的权限集数量
    * permissionSetsQuota  权限集配额
    * permissionPolicyCountQuota  允许权限集可绑定的策略配额
    * permissionPolicyQuota  允许权限集可绑定的身份策略配额
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'permissionSets' => 'int',
            'permissionSetsQuota' => 'int',
            'permissionPolicyCountQuota' => 'int',
            'permissionPolicyQuota' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * permissionSets  已创建的权限集数量
    * permissionSetsQuota  权限集配额
    * permissionPolicyCountQuota  允许权限集可绑定的策略配额
    * permissionPolicyQuota  允许权限集可绑定的身份策略配额
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'permissionSets' => 'int64',
        'permissionSetsQuota' => 'int64',
        'permissionPolicyCountQuota' => 'int64',
        'permissionPolicyQuota' => 'int64'
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
    * permissionSets  已创建的权限集数量
    * permissionSetsQuota  权限集配额
    * permissionPolicyCountQuota  允许权限集可绑定的策略配额
    * permissionPolicyQuota  允许权限集可绑定的身份策略配额
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'permissionSets' => 'permission_sets',
            'permissionSetsQuota' => 'permission_sets_quota',
            'permissionPolicyCountQuota' => 'permission_policy_count_quota',
            'permissionPolicyQuota' => 'permission_policy_quota'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * permissionSets  已创建的权限集数量
    * permissionSetsQuota  权限集配额
    * permissionPolicyCountQuota  允许权限集可绑定的策略配额
    * permissionPolicyQuota  允许权限集可绑定的身份策略配额
    *
    * @var string[]
    */
    protected static $setters = [
            'permissionSets' => 'setPermissionSets',
            'permissionSetsQuota' => 'setPermissionSetsQuota',
            'permissionPolicyCountQuota' => 'setPermissionPolicyCountQuota',
            'permissionPolicyQuota' => 'setPermissionPolicyQuota'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * permissionSets  已创建的权限集数量
    * permissionSetsQuota  权限集配额
    * permissionPolicyCountQuota  允许权限集可绑定的策略配额
    * permissionPolicyQuota  允许权限集可绑定的身份策略配额
    *
    * @var string[]
    */
    protected static $getters = [
            'permissionSets' => 'getPermissionSets',
            'permissionSetsQuota' => 'getPermissionSetsQuota',
            'permissionPolicyCountQuota' => 'getPermissionPolicyCountQuota',
            'permissionPolicyQuota' => 'getPermissionPolicyQuota'
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
        $this->container['permissionSets'] = isset($data['permissionSets']) ? $data['permissionSets'] : null;
        $this->container['permissionSetsQuota'] = isset($data['permissionSetsQuota']) ? $data['permissionSetsQuota'] : null;
        $this->container['permissionPolicyCountQuota'] = isset($data['permissionPolicyCountQuota']) ? $data['permissionPolicyCountQuota'] : null;
        $this->container['permissionPolicyQuota'] = isset($data['permissionPolicyQuota']) ? $data['permissionPolicyQuota'] : null;
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
    * Gets permissionSets
    *  已创建的权限集数量
    *
    * @return int|null
    */
    public function getPermissionSets()
    {
        return $this->container['permissionSets'];
    }

    /**
    * Sets permissionSets
    *
    * @param int|null $permissionSets 已创建的权限集数量
    *
    * @return $this
    */
    public function setPermissionSets($permissionSets)
    {
        $this->container['permissionSets'] = $permissionSets;
        return $this;
    }

    /**
    * Gets permissionSetsQuota
    *  权限集配额
    *
    * @return int|null
    */
    public function getPermissionSetsQuota()
    {
        return $this->container['permissionSetsQuota'];
    }

    /**
    * Sets permissionSetsQuota
    *
    * @param int|null $permissionSetsQuota 权限集配额
    *
    * @return $this
    */
    public function setPermissionSetsQuota($permissionSetsQuota)
    {
        $this->container['permissionSetsQuota'] = $permissionSetsQuota;
        return $this;
    }

    /**
    * Gets permissionPolicyCountQuota
    *  允许权限集可绑定的策略配额
    *
    * @return int|null
    */
    public function getPermissionPolicyCountQuota()
    {
        return $this->container['permissionPolicyCountQuota'];
    }

    /**
    * Sets permissionPolicyCountQuota
    *
    * @param int|null $permissionPolicyCountQuota 允许权限集可绑定的策略配额
    *
    * @return $this
    */
    public function setPermissionPolicyCountQuota($permissionPolicyCountQuota)
    {
        $this->container['permissionPolicyCountQuota'] = $permissionPolicyCountQuota;
        return $this;
    }

    /**
    * Gets permissionPolicyQuota
    *  允许权限集可绑定的身份策略配额
    *
    * @return int|null
    */
    public function getPermissionPolicyQuota()
    {
        return $this->container['permissionPolicyQuota'];
    }

    /**
    * Sets permissionPolicyQuota
    *
    * @param int|null $permissionPolicyQuota 允许权限集可绑定的身份策略配额
    *
    * @return $this
    */
    public function setPermissionPolicyQuota($permissionPolicyQuota)
    {
        $this->container['permissionPolicyQuota'] = $permissionPolicyQuota;
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

