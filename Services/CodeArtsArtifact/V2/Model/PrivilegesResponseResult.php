<?php

namespace HuaweiCloud\SDK\CodeArtsArtifact\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PrivilegesResponseResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PrivilegesResponse_result';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * operations  **参数解释**:  操作列表。 **取值范围**: 英文字符串，使用英文逗号分隔。
    * operationsIndex  **参数解释**:  操作序列号。 **取值范围**: 数字。
    * roleId  **参数解释**:  角色id。 **取值范围**: 32位英文、数字随机字符串。
    * roleName  **参数解释**:  角色英文名称。 **取值范围**:   Project manager，Product manager，Test manager，Operation manager，System engineer，Committer，Developer，Testter，Participant，Viever及自定义角色。
    * roleChineseName  **参数解释**:  角色中文名称。 **取值范围**: 项目经理，产品经理，测试经理，运维经理，系统工程师，Committer，开发人员，测试人员，参与者，浏览者及自定义角色。
    * projectId  项目id。 **取值范围**: 32位英文、数字随机字符串。
    * areaServiceId  **参数解释**:  服务。 **取值范围**: 32位英文、数字随机字符串。
    * grantedObjectPath  **参数解释**:  授权对象路径。 **取值范围**: 英文、数字、斜线（/）、星号（*）字符串
    * grantedObjectTypeId  **参数解释**:  授权对象类型id。 **取值范围**: 32位英文、数字随机字符串。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'operations' => 'string',
            'operationsIndex' => 'int[]',
            'roleId' => 'string',
            'roleName' => 'string',
            'roleChineseName' => 'string',
            'projectId' => 'string',
            'areaServiceId' => 'string',
            'grantedObjectPath' => 'string',
            'grantedObjectTypeId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * operations  **参数解释**:  操作列表。 **取值范围**: 英文字符串，使用英文逗号分隔。
    * operationsIndex  **参数解释**:  操作序列号。 **取值范围**: 数字。
    * roleId  **参数解释**:  角色id。 **取值范围**: 32位英文、数字随机字符串。
    * roleName  **参数解释**:  角色英文名称。 **取值范围**:   Project manager，Product manager，Test manager，Operation manager，System engineer，Committer，Developer，Testter，Participant，Viever及自定义角色。
    * roleChineseName  **参数解释**:  角色中文名称。 **取值范围**: 项目经理，产品经理，测试经理，运维经理，系统工程师，Committer，开发人员，测试人员，参与者，浏览者及自定义角色。
    * projectId  项目id。 **取值范围**: 32位英文、数字随机字符串。
    * areaServiceId  **参数解释**:  服务。 **取值范围**: 32位英文、数字随机字符串。
    * grantedObjectPath  **参数解释**:  授权对象路径。 **取值范围**: 英文、数字、斜线（/）、星号（*）字符串
    * grantedObjectTypeId  **参数解释**:  授权对象类型id。 **取值范围**: 32位英文、数字随机字符串。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'operations' => null,
        'operationsIndex' => null,
        'roleId' => null,
        'roleName' => null,
        'roleChineseName' => null,
        'projectId' => null,
        'areaServiceId' => null,
        'grantedObjectPath' => null,
        'grantedObjectTypeId' => null
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
    * operations  **参数解释**:  操作列表。 **取值范围**: 英文字符串，使用英文逗号分隔。
    * operationsIndex  **参数解释**:  操作序列号。 **取值范围**: 数字。
    * roleId  **参数解释**:  角色id。 **取值范围**: 32位英文、数字随机字符串。
    * roleName  **参数解释**:  角色英文名称。 **取值范围**:   Project manager，Product manager，Test manager，Operation manager，System engineer，Committer，Developer，Testter，Participant，Viever及自定义角色。
    * roleChineseName  **参数解释**:  角色中文名称。 **取值范围**: 项目经理，产品经理，测试经理，运维经理，系统工程师，Committer，开发人员，测试人员，参与者，浏览者及自定义角色。
    * projectId  项目id。 **取值范围**: 32位英文、数字随机字符串。
    * areaServiceId  **参数解释**:  服务。 **取值范围**: 32位英文、数字随机字符串。
    * grantedObjectPath  **参数解释**:  授权对象路径。 **取值范围**: 英文、数字、斜线（/）、星号（*）字符串
    * grantedObjectTypeId  **参数解释**:  授权对象类型id。 **取值范围**: 32位英文、数字随机字符串。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'operations' => 'operations',
            'operationsIndex' => 'operationsIndex',
            'roleId' => 'role_id',
            'roleName' => 'role_name',
            'roleChineseName' => 'role_chinese_name',
            'projectId' => 'project_id',
            'areaServiceId' => 'area_service_id',
            'grantedObjectPath' => 'granted_object_path',
            'grantedObjectTypeId' => 'granted_object_type_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * operations  **参数解释**:  操作列表。 **取值范围**: 英文字符串，使用英文逗号分隔。
    * operationsIndex  **参数解释**:  操作序列号。 **取值范围**: 数字。
    * roleId  **参数解释**:  角色id。 **取值范围**: 32位英文、数字随机字符串。
    * roleName  **参数解释**:  角色英文名称。 **取值范围**:   Project manager，Product manager，Test manager，Operation manager，System engineer，Committer，Developer，Testter，Participant，Viever及自定义角色。
    * roleChineseName  **参数解释**:  角色中文名称。 **取值范围**: 项目经理，产品经理，测试经理，运维经理，系统工程师，Committer，开发人员，测试人员，参与者，浏览者及自定义角色。
    * projectId  项目id。 **取值范围**: 32位英文、数字随机字符串。
    * areaServiceId  **参数解释**:  服务。 **取值范围**: 32位英文、数字随机字符串。
    * grantedObjectPath  **参数解释**:  授权对象路径。 **取值范围**: 英文、数字、斜线（/）、星号（*）字符串
    * grantedObjectTypeId  **参数解释**:  授权对象类型id。 **取值范围**: 32位英文、数字随机字符串。
    *
    * @var string[]
    */
    protected static $setters = [
            'operations' => 'setOperations',
            'operationsIndex' => 'setOperationsIndex',
            'roleId' => 'setRoleId',
            'roleName' => 'setRoleName',
            'roleChineseName' => 'setRoleChineseName',
            'projectId' => 'setProjectId',
            'areaServiceId' => 'setAreaServiceId',
            'grantedObjectPath' => 'setGrantedObjectPath',
            'grantedObjectTypeId' => 'setGrantedObjectTypeId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * operations  **参数解释**:  操作列表。 **取值范围**: 英文字符串，使用英文逗号分隔。
    * operationsIndex  **参数解释**:  操作序列号。 **取值范围**: 数字。
    * roleId  **参数解释**:  角色id。 **取值范围**: 32位英文、数字随机字符串。
    * roleName  **参数解释**:  角色英文名称。 **取值范围**:   Project manager，Product manager，Test manager，Operation manager，System engineer，Committer，Developer，Testter，Participant，Viever及自定义角色。
    * roleChineseName  **参数解释**:  角色中文名称。 **取值范围**: 项目经理，产品经理，测试经理，运维经理，系统工程师，Committer，开发人员，测试人员，参与者，浏览者及自定义角色。
    * projectId  项目id。 **取值范围**: 32位英文、数字随机字符串。
    * areaServiceId  **参数解释**:  服务。 **取值范围**: 32位英文、数字随机字符串。
    * grantedObjectPath  **参数解释**:  授权对象路径。 **取值范围**: 英文、数字、斜线（/）、星号（*）字符串
    * grantedObjectTypeId  **参数解释**:  授权对象类型id。 **取值范围**: 32位英文、数字随机字符串。
    *
    * @var string[]
    */
    protected static $getters = [
            'operations' => 'getOperations',
            'operationsIndex' => 'getOperationsIndex',
            'roleId' => 'getRoleId',
            'roleName' => 'getRoleName',
            'roleChineseName' => 'getRoleChineseName',
            'projectId' => 'getProjectId',
            'areaServiceId' => 'getAreaServiceId',
            'grantedObjectPath' => 'getGrantedObjectPath',
            'grantedObjectTypeId' => 'getGrantedObjectTypeId'
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
        $this->container['operations'] = isset($data['operations']) ? $data['operations'] : null;
        $this->container['operationsIndex'] = isset($data['operationsIndex']) ? $data['operationsIndex'] : null;
        $this->container['roleId'] = isset($data['roleId']) ? $data['roleId'] : null;
        $this->container['roleName'] = isset($data['roleName']) ? $data['roleName'] : null;
        $this->container['roleChineseName'] = isset($data['roleChineseName']) ? $data['roleChineseName'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['areaServiceId'] = isset($data['areaServiceId']) ? $data['areaServiceId'] : null;
        $this->container['grantedObjectPath'] = isset($data['grantedObjectPath']) ? $data['grantedObjectPath'] : null;
        $this->container['grantedObjectTypeId'] = isset($data['grantedObjectTypeId']) ? $data['grantedObjectTypeId'] : null;
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
    * Gets operations
    *  **参数解释**:  操作列表。 **取值范围**: 英文字符串，使用英文逗号分隔。
    *
    * @return string|null
    */
    public function getOperations()
    {
        return $this->container['operations'];
    }

    /**
    * Sets operations
    *
    * @param string|null $operations **参数解释**:  操作列表。 **取值范围**: 英文字符串，使用英文逗号分隔。
    *
    * @return $this
    */
    public function setOperations($operations)
    {
        $this->container['operations'] = $operations;
        return $this;
    }

    /**
    * Gets operationsIndex
    *  **参数解释**:  操作序列号。 **取值范围**: 数字。
    *
    * @return int[]|null
    */
    public function getOperationsIndex()
    {
        return $this->container['operationsIndex'];
    }

    /**
    * Sets operationsIndex
    *
    * @param int[]|null $operationsIndex **参数解释**:  操作序列号。 **取值范围**: 数字。
    *
    * @return $this
    */
    public function setOperationsIndex($operationsIndex)
    {
        $this->container['operationsIndex'] = $operationsIndex;
        return $this;
    }

    /**
    * Gets roleId
    *  **参数解释**:  角色id。 **取值范围**: 32位英文、数字随机字符串。
    *
    * @return string|null
    */
    public function getRoleId()
    {
        return $this->container['roleId'];
    }

    /**
    * Sets roleId
    *
    * @param string|null $roleId **参数解释**:  角色id。 **取值范围**: 32位英文、数字随机字符串。
    *
    * @return $this
    */
    public function setRoleId($roleId)
    {
        $this->container['roleId'] = $roleId;
        return $this;
    }

    /**
    * Gets roleName
    *  **参数解释**:  角色英文名称。 **取值范围**:   Project manager，Product manager，Test manager，Operation manager，System engineer，Committer，Developer，Testter，Participant，Viever及自定义角色。
    *
    * @return string|null
    */
    public function getRoleName()
    {
        return $this->container['roleName'];
    }

    /**
    * Sets roleName
    *
    * @param string|null $roleName **参数解释**:  角色英文名称。 **取值范围**:   Project manager，Product manager，Test manager，Operation manager，System engineer，Committer，Developer，Testter，Participant，Viever及自定义角色。
    *
    * @return $this
    */
    public function setRoleName($roleName)
    {
        $this->container['roleName'] = $roleName;
        return $this;
    }

    /**
    * Gets roleChineseName
    *  **参数解释**:  角色中文名称。 **取值范围**: 项目经理，产品经理，测试经理，运维经理，系统工程师，Committer，开发人员，测试人员，参与者，浏览者及自定义角色。
    *
    * @return string|null
    */
    public function getRoleChineseName()
    {
        return $this->container['roleChineseName'];
    }

    /**
    * Sets roleChineseName
    *
    * @param string|null $roleChineseName **参数解释**:  角色中文名称。 **取值范围**: 项目经理，产品经理，测试经理，运维经理，系统工程师，Committer，开发人员，测试人员，参与者，浏览者及自定义角色。
    *
    * @return $this
    */
    public function setRoleChineseName($roleChineseName)
    {
        $this->container['roleChineseName'] = $roleChineseName;
        return $this;
    }

    /**
    * Gets projectId
    *  项目id。 **取值范围**: 32位英文、数字随机字符串。
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 项目id。 **取值范围**: 32位英文、数字随机字符串。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets areaServiceId
    *  **参数解释**:  服务。 **取值范围**: 32位英文、数字随机字符串。
    *
    * @return string|null
    */
    public function getAreaServiceId()
    {
        return $this->container['areaServiceId'];
    }

    /**
    * Sets areaServiceId
    *
    * @param string|null $areaServiceId **参数解释**:  服务。 **取值范围**: 32位英文、数字随机字符串。
    *
    * @return $this
    */
    public function setAreaServiceId($areaServiceId)
    {
        $this->container['areaServiceId'] = $areaServiceId;
        return $this;
    }

    /**
    * Gets grantedObjectPath
    *  **参数解释**:  授权对象路径。 **取值范围**: 英文、数字、斜线（/）、星号（*）字符串
    *
    * @return string|null
    */
    public function getGrantedObjectPath()
    {
        return $this->container['grantedObjectPath'];
    }

    /**
    * Sets grantedObjectPath
    *
    * @param string|null $grantedObjectPath **参数解释**:  授权对象路径。 **取值范围**: 英文、数字、斜线（/）、星号（*）字符串
    *
    * @return $this
    */
    public function setGrantedObjectPath($grantedObjectPath)
    {
        $this->container['grantedObjectPath'] = $grantedObjectPath;
        return $this;
    }

    /**
    * Gets grantedObjectTypeId
    *  **参数解释**:  授权对象类型id。 **取值范围**: 32位英文、数字随机字符串。
    *
    * @return string|null
    */
    public function getGrantedObjectTypeId()
    {
        return $this->container['grantedObjectTypeId'];
    }

    /**
    * Sets grantedObjectTypeId
    *
    * @param string|null $grantedObjectTypeId **参数解释**:  授权对象类型id。 **取值范围**: 32位英文、数字随机字符串。
    *
    * @return $this
    */
    public function setGrantedObjectTypeId($grantedObjectTypeId)
    {
        $this->container['grantedObjectTypeId'] = $grantedObjectTypeId;
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

