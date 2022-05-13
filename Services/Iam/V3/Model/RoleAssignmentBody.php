<?php

namespace HuaweiCloud\SDK\Iam\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RoleAssignmentBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RoleAssignmentBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * user  user
    * role  role
    * group  group
    * agency  agency
    * scope  scope
    * isInherited  是否基于所有项目授权。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'user' => '\HuaweiCloud\SDK\Iam\V3\Model\RoleUserAssignmentId',
            'role' => '\HuaweiCloud\SDK\Iam\V3\Model\RoleAssignmentId',
            'group' => '\HuaweiCloud\SDK\Iam\V3\Model\RoleGroupAssignmentId',
            'agency' => '\HuaweiCloud\SDK\Iam\V3\Model\RoleAgencyAssignmentId',
            'scope' => '\HuaweiCloud\SDK\Iam\V3\Model\RoleAssignmentScope',
            'isInherited' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * user  user
    * role  role
    * group  group
    * agency  agency
    * scope  scope
    * isInherited  是否基于所有项目授权。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'user' => null,
        'role' => null,
        'group' => null,
        'agency' => null,
        'scope' => null,
        'isInherited' => null
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
    * user  user
    * role  role
    * group  group
    * agency  agency
    * scope  scope
    * isInherited  是否基于所有项目授权。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'user' => 'user',
            'role' => 'role',
            'group' => 'group',
            'agency' => 'agency',
            'scope' => 'scope',
            'isInherited' => 'is_inherited'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * user  user
    * role  role
    * group  group
    * agency  agency
    * scope  scope
    * isInherited  是否基于所有项目授权。
    *
    * @var string[]
    */
    protected static $setters = [
            'user' => 'setUser',
            'role' => 'setRole',
            'group' => 'setGroup',
            'agency' => 'setAgency',
            'scope' => 'setScope',
            'isInherited' => 'setIsInherited'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * user  user
    * role  role
    * group  group
    * agency  agency
    * scope  scope
    * isInherited  是否基于所有项目授权。
    *
    * @var string[]
    */
    protected static $getters = [
            'user' => 'getUser',
            'role' => 'getRole',
            'group' => 'getGroup',
            'agency' => 'getAgency',
            'scope' => 'getScope',
            'isInherited' => 'getIsInherited'
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
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
        $this->container['group'] = isset($data['group']) ? $data['group'] : null;
        $this->container['agency'] = isset($data['agency']) ? $data['agency'] : null;
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
        $this->container['isInherited'] = isset($data['isInherited']) ? $data['isInherited'] : null;
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
    * Gets user
    *  user
    *
    * @return \HuaweiCloud\SDK\Iam\V3\Model\RoleUserAssignmentId|null
    */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
    * Sets user
    *
    * @param \HuaweiCloud\SDK\Iam\V3\Model\RoleUserAssignmentId|null $user user
    *
    * @return $this
    */
    public function setUser($user)
    {
        $this->container['user'] = $user;
        return $this;
    }

    /**
    * Gets role
    *  role
    *
    * @return \HuaweiCloud\SDK\Iam\V3\Model\RoleAssignmentId|null
    */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
    * Sets role
    *
    * @param \HuaweiCloud\SDK\Iam\V3\Model\RoleAssignmentId|null $role role
    *
    * @return $this
    */
    public function setRole($role)
    {
        $this->container['role'] = $role;
        return $this;
    }

    /**
    * Gets group
    *  group
    *
    * @return \HuaweiCloud\SDK\Iam\V3\Model\RoleGroupAssignmentId|null
    */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
    * Sets group
    *
    * @param \HuaweiCloud\SDK\Iam\V3\Model\RoleGroupAssignmentId|null $group group
    *
    * @return $this
    */
    public function setGroup($group)
    {
        $this->container['group'] = $group;
        return $this;
    }

    /**
    * Gets agency
    *  agency
    *
    * @return \HuaweiCloud\SDK\Iam\V3\Model\RoleAgencyAssignmentId|null
    */
    public function getAgency()
    {
        return $this->container['agency'];
    }

    /**
    * Sets agency
    *
    * @param \HuaweiCloud\SDK\Iam\V3\Model\RoleAgencyAssignmentId|null $agency agency
    *
    * @return $this
    */
    public function setAgency($agency)
    {
        $this->container['agency'] = $agency;
        return $this;
    }

    /**
    * Gets scope
    *  scope
    *
    * @return \HuaweiCloud\SDK\Iam\V3\Model\RoleAssignmentScope|null
    */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
    * Sets scope
    *
    * @param \HuaweiCloud\SDK\Iam\V3\Model\RoleAssignmentScope|null $scope scope
    *
    * @return $this
    */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;
        return $this;
    }

    /**
    * Gets isInherited
    *  是否基于所有项目授权。
    *
    * @return bool|null
    */
    public function getIsInherited()
    {
        return $this->container['isInherited'];
    }

    /**
    * Sets isInherited
    *
    * @param bool|null $isInherited 是否基于所有项目授权。
    *
    * @return $this
    */
    public function setIsInherited($isInherited)
    {
        $this->container['isInherited'] = $isInherited;
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

