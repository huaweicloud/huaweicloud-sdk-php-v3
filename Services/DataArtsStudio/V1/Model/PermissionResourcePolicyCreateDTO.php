<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PermissionResourcePolicyCreateDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PermissionResourcePolicyCreateDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * policyName  策略名称：英文和汉字开头, 支持英文、汉字、数字、下划线, 2-64字符
    * resources  资源对象列表。资源对象包含 数据连接, 连接获取方法详见[查询数据连接列表](ListDataconnections.xml)
    * members  成员列表。 成员包含空间用户、空间用户组、空间用户角色。空间用户、用户组获取方法请参见[获取工作空间用户信息](ListWorkspaceusers.xml),空间角色获取方法参见[获取工作空间用户角色](ListWorkspaceRoles.xml)
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'policyName' => 'string',
            'resources' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ResourcePolicyItem[]',
            'members' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\MemberPolicyItem[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * policyName  策略名称：英文和汉字开头, 支持英文、汉字、数字、下划线, 2-64字符
    * resources  资源对象列表。资源对象包含 数据连接, 连接获取方法详见[查询数据连接列表](ListDataconnections.xml)
    * members  成员列表。 成员包含空间用户、空间用户组、空间用户角色。空间用户、用户组获取方法请参见[获取工作空间用户信息](ListWorkspaceusers.xml),空间角色获取方法参见[获取工作空间用户角色](ListWorkspaceRoles.xml)
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'policyName' => null,
        'resources' => null,
        'members' => null
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
    * policyName  策略名称：英文和汉字开头, 支持英文、汉字、数字、下划线, 2-64字符
    * resources  资源对象列表。资源对象包含 数据连接, 连接获取方法详见[查询数据连接列表](ListDataconnections.xml)
    * members  成员列表。 成员包含空间用户、空间用户组、空间用户角色。空间用户、用户组获取方法请参见[获取工作空间用户信息](ListWorkspaceusers.xml),空间角色获取方法参见[获取工作空间用户角色](ListWorkspaceRoles.xml)
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'policyName' => 'policy_name',
            'resources' => 'resources',
            'members' => 'members'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * policyName  策略名称：英文和汉字开头, 支持英文、汉字、数字、下划线, 2-64字符
    * resources  资源对象列表。资源对象包含 数据连接, 连接获取方法详见[查询数据连接列表](ListDataconnections.xml)
    * members  成员列表。 成员包含空间用户、空间用户组、空间用户角色。空间用户、用户组获取方法请参见[获取工作空间用户信息](ListWorkspaceusers.xml),空间角色获取方法参见[获取工作空间用户角色](ListWorkspaceRoles.xml)
    *
    * @var string[]
    */
    protected static $setters = [
            'policyName' => 'setPolicyName',
            'resources' => 'setResources',
            'members' => 'setMembers'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * policyName  策略名称：英文和汉字开头, 支持英文、汉字、数字、下划线, 2-64字符
    * resources  资源对象列表。资源对象包含 数据连接, 连接获取方法详见[查询数据连接列表](ListDataconnections.xml)
    * members  成员列表。 成员包含空间用户、空间用户组、空间用户角色。空间用户、用户组获取方法请参见[获取工作空间用户信息](ListWorkspaceusers.xml),空间角色获取方法参见[获取工作空间用户角色](ListWorkspaceRoles.xml)
    *
    * @var string[]
    */
    protected static $getters = [
            'policyName' => 'getPolicyName',
            'resources' => 'getResources',
            'members' => 'getMembers'
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
        $this->container['policyName'] = isset($data['policyName']) ? $data['policyName'] : null;
        $this->container['resources'] = isset($data['resources']) ? $data['resources'] : null;
        $this->container['members'] = isset($data['members']) ? $data['members'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['policyName'] === null) {
            $invalidProperties[] = "'policyName' can't be null";
        }
            if ((mb_strlen($this->container['policyName']) > 64)) {
                $invalidProperties[] = "invalid value for 'policyName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['policyName']) < 2)) {
                $invalidProperties[] = "invalid value for 'policyName', the character length must be bigger than or equal to 2.";
            }
        if ($this->container['resources'] === null) {
            $invalidProperties[] = "'resources' can't be null";
        }
        if ($this->container['members'] === null) {
            $invalidProperties[] = "'members' can't be null";
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
    * Gets policyName
    *  策略名称：英文和汉字开头, 支持英文、汉字、数字、下划线, 2-64字符
    *
    * @return string
    */
    public function getPolicyName()
    {
        return $this->container['policyName'];
    }

    /**
    * Sets policyName
    *
    * @param string $policyName 策略名称：英文和汉字开头, 支持英文、汉字、数字、下划线, 2-64字符
    *
    * @return $this
    */
    public function setPolicyName($policyName)
    {
        $this->container['policyName'] = $policyName;
        return $this;
    }

    /**
    * Gets resources
    *  资源对象列表。资源对象包含 数据连接, 连接获取方法详见[查询数据连接列表](ListDataconnections.xml)
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ResourcePolicyItem[]
    */
    public function getResources()
    {
        return $this->container['resources'];
    }

    /**
    * Sets resources
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ResourcePolicyItem[] $resources 资源对象列表。资源对象包含 数据连接, 连接获取方法详见[查询数据连接列表](ListDataconnections.xml)
    *
    * @return $this
    */
    public function setResources($resources)
    {
        $this->container['resources'] = $resources;
        return $this;
    }

    /**
    * Gets members
    *  成员列表。 成员包含空间用户、空间用户组、空间用户角色。空间用户、用户组获取方法请参见[获取工作空间用户信息](ListWorkspaceusers.xml),空间角色获取方法参见[获取工作空间用户角色](ListWorkspaceRoles.xml)
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\MemberPolicyItem[]
    */
    public function getMembers()
    {
        return $this->container['members'];
    }

    /**
    * Sets members
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\MemberPolicyItem[] $members 成员列表。 成员包含空间用户、空间用户组、空间用户角色。空间用户、用户组获取方法请参见[获取工作空间用户信息](ListWorkspaceusers.xml),空间角色获取方法参见[获取工作空间用户角色](ListWorkspaceRoles.xml)
    *
    * @return $this
    */
    public function setMembers($members)
    {
        $this->container['members'] = $members;
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

