<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DisasterRecovery implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DisasterRecovery';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  ID
    * status  状态
    * name  名称
    * drType  容灾类型
    * primaryClusterId  主集群ID
    * primaryClusterName  主集群名称
    * standbyClusterId  备集群ID
    * standbyClusterName  备集群名称
    * primaryClusterRole  主集群角色
    * standbyClusterRole  备集群角色
    * primaryClusterStatus  主集群状态
    * standbyClusterStatus  备集群状态
    * primaryClusterRegion  主集群region
    * standbyClusterRegion  备集群region
    * primaryClusterProjectId  主集群project_id
    * standbyClusterProjectId  备集群project_id
    * lastDisasterTime  最近同步时间
    * startTime  启动时间
    * createTime  创建时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'status' => 'string',
            'name' => 'string',
            'drType' => 'string',
            'primaryClusterId' => 'string',
            'primaryClusterName' => 'string',
            'standbyClusterId' => 'string',
            'standbyClusterName' => 'string',
            'primaryClusterRole' => 'string',
            'standbyClusterRole' => 'string',
            'primaryClusterStatus' => 'string',
            'standbyClusterStatus' => 'string',
            'primaryClusterRegion' => 'string',
            'standbyClusterRegion' => 'string',
            'primaryClusterProjectId' => 'string',
            'standbyClusterProjectId' => 'string',
            'lastDisasterTime' => 'string',
            'startTime' => 'string',
            'createTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  ID
    * status  状态
    * name  名称
    * drType  容灾类型
    * primaryClusterId  主集群ID
    * primaryClusterName  主集群名称
    * standbyClusterId  备集群ID
    * standbyClusterName  备集群名称
    * primaryClusterRole  主集群角色
    * standbyClusterRole  备集群角色
    * primaryClusterStatus  主集群状态
    * standbyClusterStatus  备集群状态
    * primaryClusterRegion  主集群region
    * standbyClusterRegion  备集群region
    * primaryClusterProjectId  主集群project_id
    * standbyClusterProjectId  备集群project_id
    * lastDisasterTime  最近同步时间
    * startTime  启动时间
    * createTime  创建时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'status' => null,
        'name' => null,
        'drType' => null,
        'primaryClusterId' => null,
        'primaryClusterName' => null,
        'standbyClusterId' => null,
        'standbyClusterName' => null,
        'primaryClusterRole' => null,
        'standbyClusterRole' => null,
        'primaryClusterStatus' => null,
        'standbyClusterStatus' => null,
        'primaryClusterRegion' => null,
        'standbyClusterRegion' => null,
        'primaryClusterProjectId' => null,
        'standbyClusterProjectId' => null,
        'lastDisasterTime' => null,
        'startTime' => null,
        'createTime' => null
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
    * id  ID
    * status  状态
    * name  名称
    * drType  容灾类型
    * primaryClusterId  主集群ID
    * primaryClusterName  主集群名称
    * standbyClusterId  备集群ID
    * standbyClusterName  备集群名称
    * primaryClusterRole  主集群角色
    * standbyClusterRole  备集群角色
    * primaryClusterStatus  主集群状态
    * standbyClusterStatus  备集群状态
    * primaryClusterRegion  主集群region
    * standbyClusterRegion  备集群region
    * primaryClusterProjectId  主集群project_id
    * standbyClusterProjectId  备集群project_id
    * lastDisasterTime  最近同步时间
    * startTime  启动时间
    * createTime  创建时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'status' => 'status',
            'name' => 'name',
            'drType' => 'dr_type',
            'primaryClusterId' => 'primary_cluster_id',
            'primaryClusterName' => 'primary_cluster_name',
            'standbyClusterId' => 'standby_cluster_id',
            'standbyClusterName' => 'standby_cluster_name',
            'primaryClusterRole' => 'primary_cluster_role',
            'standbyClusterRole' => 'standby_cluster_role',
            'primaryClusterStatus' => 'primary_cluster_status',
            'standbyClusterStatus' => 'standby_cluster_status',
            'primaryClusterRegion' => 'primary_cluster_region',
            'standbyClusterRegion' => 'standby_cluster_region',
            'primaryClusterProjectId' => 'primary_cluster_project_id',
            'standbyClusterProjectId' => 'standby_cluster_project_id',
            'lastDisasterTime' => 'last_disaster_time',
            'startTime' => 'start_time',
            'createTime' => 'create_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  ID
    * status  状态
    * name  名称
    * drType  容灾类型
    * primaryClusterId  主集群ID
    * primaryClusterName  主集群名称
    * standbyClusterId  备集群ID
    * standbyClusterName  备集群名称
    * primaryClusterRole  主集群角色
    * standbyClusterRole  备集群角色
    * primaryClusterStatus  主集群状态
    * standbyClusterStatus  备集群状态
    * primaryClusterRegion  主集群region
    * standbyClusterRegion  备集群region
    * primaryClusterProjectId  主集群project_id
    * standbyClusterProjectId  备集群project_id
    * lastDisasterTime  最近同步时间
    * startTime  启动时间
    * createTime  创建时间
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'status' => 'setStatus',
            'name' => 'setName',
            'drType' => 'setDrType',
            'primaryClusterId' => 'setPrimaryClusterId',
            'primaryClusterName' => 'setPrimaryClusterName',
            'standbyClusterId' => 'setStandbyClusterId',
            'standbyClusterName' => 'setStandbyClusterName',
            'primaryClusterRole' => 'setPrimaryClusterRole',
            'standbyClusterRole' => 'setStandbyClusterRole',
            'primaryClusterStatus' => 'setPrimaryClusterStatus',
            'standbyClusterStatus' => 'setStandbyClusterStatus',
            'primaryClusterRegion' => 'setPrimaryClusterRegion',
            'standbyClusterRegion' => 'setStandbyClusterRegion',
            'primaryClusterProjectId' => 'setPrimaryClusterProjectId',
            'standbyClusterProjectId' => 'setStandbyClusterProjectId',
            'lastDisasterTime' => 'setLastDisasterTime',
            'startTime' => 'setStartTime',
            'createTime' => 'setCreateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  ID
    * status  状态
    * name  名称
    * drType  容灾类型
    * primaryClusterId  主集群ID
    * primaryClusterName  主集群名称
    * standbyClusterId  备集群ID
    * standbyClusterName  备集群名称
    * primaryClusterRole  主集群角色
    * standbyClusterRole  备集群角色
    * primaryClusterStatus  主集群状态
    * standbyClusterStatus  备集群状态
    * primaryClusterRegion  主集群region
    * standbyClusterRegion  备集群region
    * primaryClusterProjectId  主集群project_id
    * standbyClusterProjectId  备集群project_id
    * lastDisasterTime  最近同步时间
    * startTime  启动时间
    * createTime  创建时间
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'status' => 'getStatus',
            'name' => 'getName',
            'drType' => 'getDrType',
            'primaryClusterId' => 'getPrimaryClusterId',
            'primaryClusterName' => 'getPrimaryClusterName',
            'standbyClusterId' => 'getStandbyClusterId',
            'standbyClusterName' => 'getStandbyClusterName',
            'primaryClusterRole' => 'getPrimaryClusterRole',
            'standbyClusterRole' => 'getStandbyClusterRole',
            'primaryClusterStatus' => 'getPrimaryClusterStatus',
            'standbyClusterStatus' => 'getStandbyClusterStatus',
            'primaryClusterRegion' => 'getPrimaryClusterRegion',
            'standbyClusterRegion' => 'getStandbyClusterRegion',
            'primaryClusterProjectId' => 'getPrimaryClusterProjectId',
            'standbyClusterProjectId' => 'getStandbyClusterProjectId',
            'lastDisasterTime' => 'getLastDisasterTime',
            'startTime' => 'getStartTime',
            'createTime' => 'getCreateTime'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['drType'] = isset($data['drType']) ? $data['drType'] : null;
        $this->container['primaryClusterId'] = isset($data['primaryClusterId']) ? $data['primaryClusterId'] : null;
        $this->container['primaryClusterName'] = isset($data['primaryClusterName']) ? $data['primaryClusterName'] : null;
        $this->container['standbyClusterId'] = isset($data['standbyClusterId']) ? $data['standbyClusterId'] : null;
        $this->container['standbyClusterName'] = isset($data['standbyClusterName']) ? $data['standbyClusterName'] : null;
        $this->container['primaryClusterRole'] = isset($data['primaryClusterRole']) ? $data['primaryClusterRole'] : null;
        $this->container['standbyClusterRole'] = isset($data['standbyClusterRole']) ? $data['standbyClusterRole'] : null;
        $this->container['primaryClusterStatus'] = isset($data['primaryClusterStatus']) ? $data['primaryClusterStatus'] : null;
        $this->container['standbyClusterStatus'] = isset($data['standbyClusterStatus']) ? $data['standbyClusterStatus'] : null;
        $this->container['primaryClusterRegion'] = isset($data['primaryClusterRegion']) ? $data['primaryClusterRegion'] : null;
        $this->container['standbyClusterRegion'] = isset($data['standbyClusterRegion']) ? $data['standbyClusterRegion'] : null;
        $this->container['primaryClusterProjectId'] = isset($data['primaryClusterProjectId']) ? $data['primaryClusterProjectId'] : null;
        $this->container['standbyClusterProjectId'] = isset($data['standbyClusterProjectId']) ? $data['standbyClusterProjectId'] : null;
        $this->container['lastDisasterTime'] = isset($data['lastDisasterTime']) ? $data['lastDisasterTime'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
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
    * Gets id
    *  ID
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
    * @param string|null $id ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets status
    *  状态
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets name
    *  名称
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
    * @param string|null $name 名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets drType
    *  容灾类型
    *
    * @return string|null
    */
    public function getDrType()
    {
        return $this->container['drType'];
    }

    /**
    * Sets drType
    *
    * @param string|null $drType 容灾类型
    *
    * @return $this
    */
    public function setDrType($drType)
    {
        $this->container['drType'] = $drType;
        return $this;
    }

    /**
    * Gets primaryClusterId
    *  主集群ID
    *
    * @return string|null
    */
    public function getPrimaryClusterId()
    {
        return $this->container['primaryClusterId'];
    }

    /**
    * Sets primaryClusterId
    *
    * @param string|null $primaryClusterId 主集群ID
    *
    * @return $this
    */
    public function setPrimaryClusterId($primaryClusterId)
    {
        $this->container['primaryClusterId'] = $primaryClusterId;
        return $this;
    }

    /**
    * Gets primaryClusterName
    *  主集群名称
    *
    * @return string|null
    */
    public function getPrimaryClusterName()
    {
        return $this->container['primaryClusterName'];
    }

    /**
    * Sets primaryClusterName
    *
    * @param string|null $primaryClusterName 主集群名称
    *
    * @return $this
    */
    public function setPrimaryClusterName($primaryClusterName)
    {
        $this->container['primaryClusterName'] = $primaryClusterName;
        return $this;
    }

    /**
    * Gets standbyClusterId
    *  备集群ID
    *
    * @return string|null
    */
    public function getStandbyClusterId()
    {
        return $this->container['standbyClusterId'];
    }

    /**
    * Sets standbyClusterId
    *
    * @param string|null $standbyClusterId 备集群ID
    *
    * @return $this
    */
    public function setStandbyClusterId($standbyClusterId)
    {
        $this->container['standbyClusterId'] = $standbyClusterId;
        return $this;
    }

    /**
    * Gets standbyClusterName
    *  备集群名称
    *
    * @return string|null
    */
    public function getStandbyClusterName()
    {
        return $this->container['standbyClusterName'];
    }

    /**
    * Sets standbyClusterName
    *
    * @param string|null $standbyClusterName 备集群名称
    *
    * @return $this
    */
    public function setStandbyClusterName($standbyClusterName)
    {
        $this->container['standbyClusterName'] = $standbyClusterName;
        return $this;
    }

    /**
    * Gets primaryClusterRole
    *  主集群角色
    *
    * @return string|null
    */
    public function getPrimaryClusterRole()
    {
        return $this->container['primaryClusterRole'];
    }

    /**
    * Sets primaryClusterRole
    *
    * @param string|null $primaryClusterRole 主集群角色
    *
    * @return $this
    */
    public function setPrimaryClusterRole($primaryClusterRole)
    {
        $this->container['primaryClusterRole'] = $primaryClusterRole;
        return $this;
    }

    /**
    * Gets standbyClusterRole
    *  备集群角色
    *
    * @return string|null
    */
    public function getStandbyClusterRole()
    {
        return $this->container['standbyClusterRole'];
    }

    /**
    * Sets standbyClusterRole
    *
    * @param string|null $standbyClusterRole 备集群角色
    *
    * @return $this
    */
    public function setStandbyClusterRole($standbyClusterRole)
    {
        $this->container['standbyClusterRole'] = $standbyClusterRole;
        return $this;
    }

    /**
    * Gets primaryClusterStatus
    *  主集群状态
    *
    * @return string|null
    */
    public function getPrimaryClusterStatus()
    {
        return $this->container['primaryClusterStatus'];
    }

    /**
    * Sets primaryClusterStatus
    *
    * @param string|null $primaryClusterStatus 主集群状态
    *
    * @return $this
    */
    public function setPrimaryClusterStatus($primaryClusterStatus)
    {
        $this->container['primaryClusterStatus'] = $primaryClusterStatus;
        return $this;
    }

    /**
    * Gets standbyClusterStatus
    *  备集群状态
    *
    * @return string|null
    */
    public function getStandbyClusterStatus()
    {
        return $this->container['standbyClusterStatus'];
    }

    /**
    * Sets standbyClusterStatus
    *
    * @param string|null $standbyClusterStatus 备集群状态
    *
    * @return $this
    */
    public function setStandbyClusterStatus($standbyClusterStatus)
    {
        $this->container['standbyClusterStatus'] = $standbyClusterStatus;
        return $this;
    }

    /**
    * Gets primaryClusterRegion
    *  主集群region
    *
    * @return string|null
    */
    public function getPrimaryClusterRegion()
    {
        return $this->container['primaryClusterRegion'];
    }

    /**
    * Sets primaryClusterRegion
    *
    * @param string|null $primaryClusterRegion 主集群region
    *
    * @return $this
    */
    public function setPrimaryClusterRegion($primaryClusterRegion)
    {
        $this->container['primaryClusterRegion'] = $primaryClusterRegion;
        return $this;
    }

    /**
    * Gets standbyClusterRegion
    *  备集群region
    *
    * @return string|null
    */
    public function getStandbyClusterRegion()
    {
        return $this->container['standbyClusterRegion'];
    }

    /**
    * Sets standbyClusterRegion
    *
    * @param string|null $standbyClusterRegion 备集群region
    *
    * @return $this
    */
    public function setStandbyClusterRegion($standbyClusterRegion)
    {
        $this->container['standbyClusterRegion'] = $standbyClusterRegion;
        return $this;
    }

    /**
    * Gets primaryClusterProjectId
    *  主集群project_id
    *
    * @return string|null
    */
    public function getPrimaryClusterProjectId()
    {
        return $this->container['primaryClusterProjectId'];
    }

    /**
    * Sets primaryClusterProjectId
    *
    * @param string|null $primaryClusterProjectId 主集群project_id
    *
    * @return $this
    */
    public function setPrimaryClusterProjectId($primaryClusterProjectId)
    {
        $this->container['primaryClusterProjectId'] = $primaryClusterProjectId;
        return $this;
    }

    /**
    * Gets standbyClusterProjectId
    *  备集群project_id
    *
    * @return string|null
    */
    public function getStandbyClusterProjectId()
    {
        return $this->container['standbyClusterProjectId'];
    }

    /**
    * Sets standbyClusterProjectId
    *
    * @param string|null $standbyClusterProjectId 备集群project_id
    *
    * @return $this
    */
    public function setStandbyClusterProjectId($standbyClusterProjectId)
    {
        $this->container['standbyClusterProjectId'] = $standbyClusterProjectId;
        return $this;
    }

    /**
    * Gets lastDisasterTime
    *  最近同步时间
    *
    * @return string|null
    */
    public function getLastDisasterTime()
    {
        return $this->container['lastDisasterTime'];
    }

    /**
    * Sets lastDisasterTime
    *
    * @param string|null $lastDisasterTime 最近同步时间
    *
    * @return $this
    */
    public function setLastDisasterTime($lastDisasterTime)
    {
        $this->container['lastDisasterTime'] = $lastDisasterTime;
        return $this;
    }

    /**
    * Gets startTime
    *  启动时间
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime 启动时间
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
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

