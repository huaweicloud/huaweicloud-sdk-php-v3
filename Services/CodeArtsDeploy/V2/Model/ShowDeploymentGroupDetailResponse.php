<?php

namespace HuaweiCloud\SDK\CodeArtsDeploy\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDeploymentGroupDetailResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDeploymentGroupDetailResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * groupId  主机集群id
    * createdTime  创建时间
    * updatedTime  修改时间
    * hostCount  集群内主机数量，一个主机集群内最多可添加200台主机
    * projectName  项目名称
    * name  主机集群名
    * regionName  局点信息
    * projectId  项目id
    * os  操作系统：windows|linux
    * autoConnectionTestSwitch  自动测试功能已下架，该字段已失效
    * slaveClusterId  slave集群id，默认为null时使用默认slave集群，用户自定义slave时为slave集群id
    * nickName  用户昵称
    * createdBy  createdBy
    * updatedBy  updatedBy
    * description  描述
    * permission  permission
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'groupId' => 'string',
            'createdTime' => 'string',
            'updatedTime' => 'string',
            'hostCount' => 'int',
            'projectName' => 'string',
            'name' => 'string',
            'regionName' => 'string',
            'projectId' => 'string',
            'os' => 'string',
            'autoConnectionTestSwitch' => 'int',
            'slaveClusterId' => 'string',
            'nickName' => 'string',
            'createdBy' => '\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\UserInfo',
            'updatedBy' => '\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\UserInfo',
            'description' => 'string',
            'permission' => '\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\PermissionGroupDetail'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * groupId  主机集群id
    * createdTime  创建时间
    * updatedTime  修改时间
    * hostCount  集群内主机数量，一个主机集群内最多可添加200台主机
    * projectName  项目名称
    * name  主机集群名
    * regionName  局点信息
    * projectId  项目id
    * os  操作系统：windows|linux
    * autoConnectionTestSwitch  自动测试功能已下架，该字段已失效
    * slaveClusterId  slave集群id，默认为null时使用默认slave集群，用户自定义slave时为slave集群id
    * nickName  用户昵称
    * createdBy  createdBy
    * updatedBy  updatedBy
    * description  描述
    * permission  permission
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'groupId' => null,
        'createdTime' => null,
        'updatedTime' => null,
        'hostCount' => 'int32',
        'projectName' => null,
        'name' => null,
        'regionName' => null,
        'projectId' => null,
        'os' => null,
        'autoConnectionTestSwitch' => null,
        'slaveClusterId' => null,
        'nickName' => null,
        'createdBy' => null,
        'updatedBy' => null,
        'description' => null,
        'permission' => null
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
    * groupId  主机集群id
    * createdTime  创建时间
    * updatedTime  修改时间
    * hostCount  集群内主机数量，一个主机集群内最多可添加200台主机
    * projectName  项目名称
    * name  主机集群名
    * regionName  局点信息
    * projectId  项目id
    * os  操作系统：windows|linux
    * autoConnectionTestSwitch  自动测试功能已下架，该字段已失效
    * slaveClusterId  slave集群id，默认为null时使用默认slave集群，用户自定义slave时为slave集群id
    * nickName  用户昵称
    * createdBy  createdBy
    * updatedBy  updatedBy
    * description  描述
    * permission  permission
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'groupId' => 'group_id',
            'createdTime' => 'created_time',
            'updatedTime' => 'updated_time',
            'hostCount' => 'host_count',
            'projectName' => 'project_name',
            'name' => 'name',
            'regionName' => 'region_name',
            'projectId' => 'project_id',
            'os' => 'os',
            'autoConnectionTestSwitch' => 'auto_connection_test_switch',
            'slaveClusterId' => 'slave_cluster_id',
            'nickName' => 'nick_name',
            'createdBy' => 'created_by',
            'updatedBy' => 'updated_by',
            'description' => 'description',
            'permission' => 'permission'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groupId  主机集群id
    * createdTime  创建时间
    * updatedTime  修改时间
    * hostCount  集群内主机数量，一个主机集群内最多可添加200台主机
    * projectName  项目名称
    * name  主机集群名
    * regionName  局点信息
    * projectId  项目id
    * os  操作系统：windows|linux
    * autoConnectionTestSwitch  自动测试功能已下架，该字段已失效
    * slaveClusterId  slave集群id，默认为null时使用默认slave集群，用户自定义slave时为slave集群id
    * nickName  用户昵称
    * createdBy  createdBy
    * updatedBy  updatedBy
    * description  描述
    * permission  permission
    *
    * @var string[]
    */
    protected static $setters = [
            'groupId' => 'setGroupId',
            'createdTime' => 'setCreatedTime',
            'updatedTime' => 'setUpdatedTime',
            'hostCount' => 'setHostCount',
            'projectName' => 'setProjectName',
            'name' => 'setName',
            'regionName' => 'setRegionName',
            'projectId' => 'setProjectId',
            'os' => 'setOs',
            'autoConnectionTestSwitch' => 'setAutoConnectionTestSwitch',
            'slaveClusterId' => 'setSlaveClusterId',
            'nickName' => 'setNickName',
            'createdBy' => 'setCreatedBy',
            'updatedBy' => 'setUpdatedBy',
            'description' => 'setDescription',
            'permission' => 'setPermission'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * groupId  主机集群id
    * createdTime  创建时间
    * updatedTime  修改时间
    * hostCount  集群内主机数量，一个主机集群内最多可添加200台主机
    * projectName  项目名称
    * name  主机集群名
    * regionName  局点信息
    * projectId  项目id
    * os  操作系统：windows|linux
    * autoConnectionTestSwitch  自动测试功能已下架，该字段已失效
    * slaveClusterId  slave集群id，默认为null时使用默认slave集群，用户自定义slave时为slave集群id
    * nickName  用户昵称
    * createdBy  createdBy
    * updatedBy  updatedBy
    * description  描述
    * permission  permission
    *
    * @var string[]
    */
    protected static $getters = [
            'groupId' => 'getGroupId',
            'createdTime' => 'getCreatedTime',
            'updatedTime' => 'getUpdatedTime',
            'hostCount' => 'getHostCount',
            'projectName' => 'getProjectName',
            'name' => 'getName',
            'regionName' => 'getRegionName',
            'projectId' => 'getProjectId',
            'os' => 'getOs',
            'autoConnectionTestSwitch' => 'getAutoConnectionTestSwitch',
            'slaveClusterId' => 'getSlaveClusterId',
            'nickName' => 'getNickName',
            'createdBy' => 'getCreatedBy',
            'updatedBy' => 'getUpdatedBy',
            'description' => 'getDescription',
            'permission' => 'getPermission'
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
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
        $this->container['updatedTime'] = isset($data['updatedTime']) ? $data['updatedTime'] : null;
        $this->container['hostCount'] = isset($data['hostCount']) ? $data['hostCount'] : null;
        $this->container['projectName'] = isset($data['projectName']) ? $data['projectName'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['regionName'] = isset($data['regionName']) ? $data['regionName'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['os'] = isset($data['os']) ? $data['os'] : null;
        $this->container['autoConnectionTestSwitch'] = isset($data['autoConnectionTestSwitch']) ? $data['autoConnectionTestSwitch'] : null;
        $this->container['slaveClusterId'] = isset($data['slaveClusterId']) ? $data['slaveClusterId'] : null;
        $this->container['nickName'] = isset($data['nickName']) ? $data['nickName'] : null;
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
        $this->container['updatedBy'] = isset($data['updatedBy']) ? $data['updatedBy'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['permission'] = isset($data['permission']) ? $data['permission'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) > 32)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) < 32)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['groupId']) && !preg_match("/^[0-9A-Za-z]{32}$/", $this->container['groupId'])) {
                $invalidProperties[] = "invalid value for 'groupId', must be conform to the pattern /^[0-9A-Za-z]{32}$/.";
            }
            if (!is_null($this->container['hostCount']) && ($this->container['hostCount'] > 200)) {
                $invalidProperties[] = "invalid value for 'hostCount', must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['hostCount']) && ($this->container['hostCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'hostCount', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['projectName']) && (mb_strlen($this->container['projectName']) > 128)) {
                $invalidProperties[] = "invalid value for 'projectName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['projectName']) && (mb_strlen($this->container['projectName']) < 3)) {
                $invalidProperties[] = "invalid value for 'projectName', the character length must be bigger than or equal to 3.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 500)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 500.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
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
    * Gets groupId
    *  主机集群id
    *
    * @return string|null
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string|null $groupId 主机集群id
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets createdTime
    *  创建时间
    *
    * @return string|null
    */
    public function getCreatedTime()
    {
        return $this->container['createdTime'];
    }

    /**
    * Sets createdTime
    *
    * @param string|null $createdTime 创建时间
    *
    * @return $this
    */
    public function setCreatedTime($createdTime)
    {
        $this->container['createdTime'] = $createdTime;
        return $this;
    }

    /**
    * Gets updatedTime
    *  修改时间
    *
    * @return string|null
    */
    public function getUpdatedTime()
    {
        return $this->container['updatedTime'];
    }

    /**
    * Sets updatedTime
    *
    * @param string|null $updatedTime 修改时间
    *
    * @return $this
    */
    public function setUpdatedTime($updatedTime)
    {
        $this->container['updatedTime'] = $updatedTime;
        return $this;
    }

    /**
    * Gets hostCount
    *  集群内主机数量，一个主机集群内最多可添加200台主机
    *
    * @return int|null
    */
    public function getHostCount()
    {
        return $this->container['hostCount'];
    }

    /**
    * Sets hostCount
    *
    * @param int|null $hostCount 集群内主机数量，一个主机集群内最多可添加200台主机
    *
    * @return $this
    */
    public function setHostCount($hostCount)
    {
        $this->container['hostCount'] = $hostCount;
        return $this;
    }

    /**
    * Gets projectName
    *  项目名称
    *
    * @return string|null
    */
    public function getProjectName()
    {
        return $this->container['projectName'];
    }

    /**
    * Sets projectName
    *
    * @param string|null $projectName 项目名称
    *
    * @return $this
    */
    public function setProjectName($projectName)
    {
        $this->container['projectName'] = $projectName;
        return $this;
    }

    /**
    * Gets name
    *  主机集群名
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
    * @param string|null $name 主机集群名
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets regionName
    *  局点信息
    *
    * @return string|null
    */
    public function getRegionName()
    {
        return $this->container['regionName'];
    }

    /**
    * Sets regionName
    *
    * @param string|null $regionName 局点信息
    *
    * @return $this
    */
    public function setRegionName($regionName)
    {
        $this->container['regionName'] = $regionName;
        return $this;
    }

    /**
    * Gets projectId
    *  项目id
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
    * @param string|null $projectId 项目id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets os
    *  操作系统：windows|linux
    *
    * @return string|null
    */
    public function getOs()
    {
        return $this->container['os'];
    }

    /**
    * Sets os
    *
    * @param string|null $os 操作系统：windows|linux
    *
    * @return $this
    */
    public function setOs($os)
    {
        $this->container['os'] = $os;
        return $this;
    }

    /**
    * Gets autoConnectionTestSwitch
    *  自动测试功能已下架，该字段已失效
    *
    * @return int|null
    */
    public function getAutoConnectionTestSwitch()
    {
        return $this->container['autoConnectionTestSwitch'];
    }

    /**
    * Sets autoConnectionTestSwitch
    *
    * @param int|null $autoConnectionTestSwitch 自动测试功能已下架，该字段已失效
    *
    * @return $this
    */
    public function setAutoConnectionTestSwitch($autoConnectionTestSwitch)
    {
        $this->container['autoConnectionTestSwitch'] = $autoConnectionTestSwitch;
        return $this;
    }

    /**
    * Gets slaveClusterId
    *  slave集群id，默认为null时使用默认slave集群，用户自定义slave时为slave集群id
    *
    * @return string|null
    */
    public function getSlaveClusterId()
    {
        return $this->container['slaveClusterId'];
    }

    /**
    * Sets slaveClusterId
    *
    * @param string|null $slaveClusterId slave集群id，默认为null时使用默认slave集群，用户自定义slave时为slave集群id
    *
    * @return $this
    */
    public function setSlaveClusterId($slaveClusterId)
    {
        $this->container['slaveClusterId'] = $slaveClusterId;
        return $this;
    }

    /**
    * Gets nickName
    *  用户昵称
    *
    * @return string|null
    */
    public function getNickName()
    {
        return $this->container['nickName'];
    }

    /**
    * Sets nickName
    *
    * @param string|null $nickName 用户昵称
    *
    * @return $this
    */
    public function setNickName($nickName)
    {
        $this->container['nickName'] = $nickName;
        return $this;
    }

    /**
    * Gets createdBy
    *  createdBy
    *
    * @return \HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\UserInfo|null
    */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
    * Sets createdBy
    *
    * @param \HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\UserInfo|null $createdBy createdBy
    *
    * @return $this
    */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;
        return $this;
    }

    /**
    * Gets updatedBy
    *  updatedBy
    *
    * @return \HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\UserInfo|null
    */
    public function getUpdatedBy()
    {
        return $this->container['updatedBy'];
    }

    /**
    * Sets updatedBy
    *
    * @param \HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\UserInfo|null $updatedBy updatedBy
    *
    * @return $this
    */
    public function setUpdatedBy($updatedBy)
    {
        $this->container['updatedBy'] = $updatedBy;
        return $this;
    }

    /**
    * Gets description
    *  描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets permission
    *  permission
    *
    * @return \HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\PermissionGroupDetail|null
    */
    public function getPermission()
    {
        return $this->container['permission'];
    }

    /**
    * Sets permission
    *
    * @param \HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\PermissionGroupDetail|null $permission permission
    *
    * @return $this
    */
    public function setPermission($permission)
    {
        $this->container['permission'] = $permission;
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

