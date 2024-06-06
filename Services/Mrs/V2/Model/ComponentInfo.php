<?php

namespace HuaweiCloud\SDK\Mrs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ComponentInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ComponentInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  组件ID。
    * name  组件名。
    * instanceGroupName  组件所在组名称。
    * runningStatus  运行状态。
    * haStatus  HA状态。
    * configStatus  配置状态。
    * roleName  角色。
    * roleShortName  角色缩写。
    * roleType  角色类型。
    * serviceName  服务名。
    * pairName  对名。
    * relationPairs  关联对。
    * supportDecom  是否支持Decom。
    * supportReinstall  是否支持重装。
    * supportCollectStackInfo  是否支持收集堆栈信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'instanceGroupName' => 'string',
            'runningStatus' => 'string',
            'haStatus' => 'string',
            'configStatus' => 'string',
            'roleName' => 'string',
            'roleShortName' => 'string',
            'roleType' => 'string',
            'serviceName' => 'string',
            'pairName' => 'string',
            'relationPairs' => 'string',
            'supportDecom' => 'string',
            'supportReinstall' => 'string',
            'supportCollectStackInfo' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  组件ID。
    * name  组件名。
    * instanceGroupName  组件所在组名称。
    * runningStatus  运行状态。
    * haStatus  HA状态。
    * configStatus  配置状态。
    * roleName  角色。
    * roleShortName  角色缩写。
    * roleType  角色类型。
    * serviceName  服务名。
    * pairName  对名。
    * relationPairs  关联对。
    * supportDecom  是否支持Decom。
    * supportReinstall  是否支持重装。
    * supportCollectStackInfo  是否支持收集堆栈信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'instanceGroupName' => null,
        'runningStatus' => null,
        'haStatus' => null,
        'configStatus' => null,
        'roleName' => null,
        'roleShortName' => null,
        'roleType' => null,
        'serviceName' => null,
        'pairName' => null,
        'relationPairs' => null,
        'supportDecom' => null,
        'supportReinstall' => null,
        'supportCollectStackInfo' => null
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
    * id  组件ID。
    * name  组件名。
    * instanceGroupName  组件所在组名称。
    * runningStatus  运行状态。
    * haStatus  HA状态。
    * configStatus  配置状态。
    * roleName  角色。
    * roleShortName  角色缩写。
    * roleType  角色类型。
    * serviceName  服务名。
    * pairName  对名。
    * relationPairs  关联对。
    * supportDecom  是否支持Decom。
    * supportReinstall  是否支持重装。
    * supportCollectStackInfo  是否支持收集堆栈信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'instanceGroupName' => 'instance_group_name',
            'runningStatus' => 'running_status',
            'haStatus' => 'ha_status',
            'configStatus' => 'config_status',
            'roleName' => 'role_name',
            'roleShortName' => 'role_short_name',
            'roleType' => 'role_type',
            'serviceName' => 'service_name',
            'pairName' => 'pair_name',
            'relationPairs' => 'relation_pairs',
            'supportDecom' => 'support_decom',
            'supportReinstall' => 'support_reinstall',
            'supportCollectStackInfo' => 'support_collect_stack_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  组件ID。
    * name  组件名。
    * instanceGroupName  组件所在组名称。
    * runningStatus  运行状态。
    * haStatus  HA状态。
    * configStatus  配置状态。
    * roleName  角色。
    * roleShortName  角色缩写。
    * roleType  角色类型。
    * serviceName  服务名。
    * pairName  对名。
    * relationPairs  关联对。
    * supportDecom  是否支持Decom。
    * supportReinstall  是否支持重装。
    * supportCollectStackInfo  是否支持收集堆栈信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'instanceGroupName' => 'setInstanceGroupName',
            'runningStatus' => 'setRunningStatus',
            'haStatus' => 'setHaStatus',
            'configStatus' => 'setConfigStatus',
            'roleName' => 'setRoleName',
            'roleShortName' => 'setRoleShortName',
            'roleType' => 'setRoleType',
            'serviceName' => 'setServiceName',
            'pairName' => 'setPairName',
            'relationPairs' => 'setRelationPairs',
            'supportDecom' => 'setSupportDecom',
            'supportReinstall' => 'setSupportReinstall',
            'supportCollectStackInfo' => 'setSupportCollectStackInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  组件ID。
    * name  组件名。
    * instanceGroupName  组件所在组名称。
    * runningStatus  运行状态。
    * haStatus  HA状态。
    * configStatus  配置状态。
    * roleName  角色。
    * roleShortName  角色缩写。
    * roleType  角色类型。
    * serviceName  服务名。
    * pairName  对名。
    * relationPairs  关联对。
    * supportDecom  是否支持Decom。
    * supportReinstall  是否支持重装。
    * supportCollectStackInfo  是否支持收集堆栈信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'instanceGroupName' => 'getInstanceGroupName',
            'runningStatus' => 'getRunningStatus',
            'haStatus' => 'getHaStatus',
            'configStatus' => 'getConfigStatus',
            'roleName' => 'getRoleName',
            'roleShortName' => 'getRoleShortName',
            'roleType' => 'getRoleType',
            'serviceName' => 'getServiceName',
            'pairName' => 'getPairName',
            'relationPairs' => 'getRelationPairs',
            'supportDecom' => 'getSupportDecom',
            'supportReinstall' => 'getSupportReinstall',
            'supportCollectStackInfo' => 'getSupportCollectStackInfo'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['instanceGroupName'] = isset($data['instanceGroupName']) ? $data['instanceGroupName'] : null;
        $this->container['runningStatus'] = isset($data['runningStatus']) ? $data['runningStatus'] : null;
        $this->container['haStatus'] = isset($data['haStatus']) ? $data['haStatus'] : null;
        $this->container['configStatus'] = isset($data['configStatus']) ? $data['configStatus'] : null;
        $this->container['roleName'] = isset($data['roleName']) ? $data['roleName'] : null;
        $this->container['roleShortName'] = isset($data['roleShortName']) ? $data['roleShortName'] : null;
        $this->container['roleType'] = isset($data['roleType']) ? $data['roleType'] : null;
        $this->container['serviceName'] = isset($data['serviceName']) ? $data['serviceName'] : null;
        $this->container['pairName'] = isset($data['pairName']) ? $data['pairName'] : null;
        $this->container['relationPairs'] = isset($data['relationPairs']) ? $data['relationPairs'] : null;
        $this->container['supportDecom'] = isset($data['supportDecom']) ? $data['supportDecom'] : null;
        $this->container['supportReinstall'] = isset($data['supportReinstall']) ? $data['supportReinstall'] : null;
        $this->container['supportCollectStackInfo'] = isset($data['supportCollectStackInfo']) ? $data['supportCollectStackInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['instanceGroupName']) && (mb_strlen($this->container['instanceGroupName']) < 1)) {
                $invalidProperties[] = "invalid value for 'instanceGroupName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['runningStatus']) && (mb_strlen($this->container['runningStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'runningStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['roleName']) && (mb_strlen($this->container['roleName']) < 1)) {
                $invalidProperties[] = "invalid value for 'roleName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['roleShortName']) && (mb_strlen($this->container['roleShortName']) < 1)) {
                $invalidProperties[] = "invalid value for 'roleShortName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['roleType']) && (mb_strlen($this->container['roleType']) < 1)) {
                $invalidProperties[] = "invalid value for 'roleType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['serviceName']) && (mb_strlen($this->container['serviceName']) < 1)) {
                $invalidProperties[] = "invalid value for 'serviceName', the character length must be bigger than or equal to 1.";
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
    * Gets id
    *  组件ID。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 组件ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  组件名。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 组件名。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets instanceGroupName
    *  组件所在组名称。
    *
    * @return string|null
    */
    public function getInstanceGroupName()
    {
        return $this->container['instanceGroupName'];
    }

    /**
    * Sets instanceGroupName
    *
    * @param string|null $instanceGroupName 组件所在组名称。
    *
    * @return $this
    */
    public function setInstanceGroupName($instanceGroupName)
    {
        $this->container['instanceGroupName'] = $instanceGroupName;
        return $this;
    }

    /**
    * Gets runningStatus
    *  运行状态。
    *
    * @return string|null
    */
    public function getRunningStatus()
    {
        return $this->container['runningStatus'];
    }

    /**
    * Sets runningStatus
    *
    * @param string|null $runningStatus 运行状态。
    *
    * @return $this
    */
    public function setRunningStatus($runningStatus)
    {
        $this->container['runningStatus'] = $runningStatus;
        return $this;
    }

    /**
    * Gets haStatus
    *  HA状态。
    *
    * @return string|null
    */
    public function getHaStatus()
    {
        return $this->container['haStatus'];
    }

    /**
    * Sets haStatus
    *
    * @param string|null $haStatus HA状态。
    *
    * @return $this
    */
    public function setHaStatus($haStatus)
    {
        $this->container['haStatus'] = $haStatus;
        return $this;
    }

    /**
    * Gets configStatus
    *  配置状态。
    *
    * @return string|null
    */
    public function getConfigStatus()
    {
        return $this->container['configStatus'];
    }

    /**
    * Sets configStatus
    *
    * @param string|null $configStatus 配置状态。
    *
    * @return $this
    */
    public function setConfigStatus($configStatus)
    {
        $this->container['configStatus'] = $configStatus;
        return $this;
    }

    /**
    * Gets roleName
    *  角色。
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
    * @param string|null $roleName 角色。
    *
    * @return $this
    */
    public function setRoleName($roleName)
    {
        $this->container['roleName'] = $roleName;
        return $this;
    }

    /**
    * Gets roleShortName
    *  角色缩写。
    *
    * @return string|null
    */
    public function getRoleShortName()
    {
        return $this->container['roleShortName'];
    }

    /**
    * Sets roleShortName
    *
    * @param string|null $roleShortName 角色缩写。
    *
    * @return $this
    */
    public function setRoleShortName($roleShortName)
    {
        $this->container['roleShortName'] = $roleShortName;
        return $this;
    }

    /**
    * Gets roleType
    *  角色类型。
    *
    * @return string|null
    */
    public function getRoleType()
    {
        return $this->container['roleType'];
    }

    /**
    * Sets roleType
    *
    * @param string|null $roleType 角色类型。
    *
    * @return $this
    */
    public function setRoleType($roleType)
    {
        $this->container['roleType'] = $roleType;
        return $this;
    }

    /**
    * Gets serviceName
    *  服务名。
    *
    * @return string|null
    */
    public function getServiceName()
    {
        return $this->container['serviceName'];
    }

    /**
    * Sets serviceName
    *
    * @param string|null $serviceName 服务名。
    *
    * @return $this
    */
    public function setServiceName($serviceName)
    {
        $this->container['serviceName'] = $serviceName;
        return $this;
    }

    /**
    * Gets pairName
    *  对名。
    *
    * @return string|null
    */
    public function getPairName()
    {
        return $this->container['pairName'];
    }

    /**
    * Sets pairName
    *
    * @param string|null $pairName 对名。
    *
    * @return $this
    */
    public function setPairName($pairName)
    {
        $this->container['pairName'] = $pairName;
        return $this;
    }

    /**
    * Gets relationPairs
    *  关联对。
    *
    * @return string|null
    */
    public function getRelationPairs()
    {
        return $this->container['relationPairs'];
    }

    /**
    * Sets relationPairs
    *
    * @param string|null $relationPairs 关联对。
    *
    * @return $this
    */
    public function setRelationPairs($relationPairs)
    {
        $this->container['relationPairs'] = $relationPairs;
        return $this;
    }

    /**
    * Gets supportDecom
    *  是否支持Decom。
    *
    * @return string|null
    */
    public function getSupportDecom()
    {
        return $this->container['supportDecom'];
    }

    /**
    * Sets supportDecom
    *
    * @param string|null $supportDecom 是否支持Decom。
    *
    * @return $this
    */
    public function setSupportDecom($supportDecom)
    {
        $this->container['supportDecom'] = $supportDecom;
        return $this;
    }

    /**
    * Gets supportReinstall
    *  是否支持重装。
    *
    * @return string|null
    */
    public function getSupportReinstall()
    {
        return $this->container['supportReinstall'];
    }

    /**
    * Sets supportReinstall
    *
    * @param string|null $supportReinstall 是否支持重装。
    *
    * @return $this
    */
    public function setSupportReinstall($supportReinstall)
    {
        $this->container['supportReinstall'] = $supportReinstall;
        return $this;
    }

    /**
    * Gets supportCollectStackInfo
    *  是否支持收集堆栈信息。
    *
    * @return string|null
    */
    public function getSupportCollectStackInfo()
    {
        return $this->container['supportCollectStackInfo'];
    }

    /**
    * Sets supportCollectStackInfo
    *
    * @param string|null $supportCollectStackInfo 是否支持收集堆栈信息。
    *
    * @return $this
    */
    public function setSupportCollectStackInfo($supportCollectStackInfo)
    {
        $this->container['supportCollectStackInfo'] = $supportCollectStackInfo;
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

