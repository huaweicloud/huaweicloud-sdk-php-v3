<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DisasterRelations implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DisasterRelations';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * disasterType  容灾类型。
    * name  容灾任务名称。
    * disasterRole  容灾角色。
    * created  创建时间，格式为“yyyy-mm-dd hh:mm:ss”。
    * updated  更新时间，格式为“yyyy-mm-dd hh:mm:ss”。
    * slaveRegionInstanceInfo  slaveRegionInstanceInfo
    * masterRegionInstanceInfo  masterRegionInstanceInfo
    * id  容灾记录id。
    * synchronizationId  容灾关系唯一id。
    * instanceId  当前region实例id。
    * instanceName  当前region实例名称。
    * instanceStatus  当前region实例状态。
    * status  容灾记录状态。
    * precheckFailedReason  预校验失败原因。
    * actions  实例当前操作action。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'disasterType' => 'string',
            'name' => 'string',
            'disasterRole' => 'string',
            'created' => 'string',
            'updated' => 'string',
            'slaveRegionInstanceInfo' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\RegionInstanceInfo',
            'masterRegionInstanceInfo' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\RegionInstanceInfo',
            'id' => 'string',
            'synchronizationId' => 'string',
            'instanceId' => 'string',
            'instanceName' => 'string',
            'instanceStatus' => 'string',
            'status' => 'string',
            'precheckFailedReason' => 'string',
            'actions' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * disasterType  容灾类型。
    * name  容灾任务名称。
    * disasterRole  容灾角色。
    * created  创建时间，格式为“yyyy-mm-dd hh:mm:ss”。
    * updated  更新时间，格式为“yyyy-mm-dd hh:mm:ss”。
    * slaveRegionInstanceInfo  slaveRegionInstanceInfo
    * masterRegionInstanceInfo  masterRegionInstanceInfo
    * id  容灾记录id。
    * synchronizationId  容灾关系唯一id。
    * instanceId  当前region实例id。
    * instanceName  当前region实例名称。
    * instanceStatus  当前region实例状态。
    * status  容灾记录状态。
    * precheckFailedReason  预校验失败原因。
    * actions  实例当前操作action。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'disasterType' => null,
        'name' => null,
        'disasterRole' => null,
        'created' => null,
        'updated' => null,
        'slaveRegionInstanceInfo' => null,
        'masterRegionInstanceInfo' => null,
        'id' => null,
        'synchronizationId' => null,
        'instanceId' => null,
        'instanceName' => null,
        'instanceStatus' => null,
        'status' => null,
        'precheckFailedReason' => null,
        'actions' => null
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
    * disasterType  容灾类型。
    * name  容灾任务名称。
    * disasterRole  容灾角色。
    * created  创建时间，格式为“yyyy-mm-dd hh:mm:ss”。
    * updated  更新时间，格式为“yyyy-mm-dd hh:mm:ss”。
    * slaveRegionInstanceInfo  slaveRegionInstanceInfo
    * masterRegionInstanceInfo  masterRegionInstanceInfo
    * id  容灾记录id。
    * synchronizationId  容灾关系唯一id。
    * instanceId  当前region实例id。
    * instanceName  当前region实例名称。
    * instanceStatus  当前region实例状态。
    * status  容灾记录状态。
    * precheckFailedReason  预校验失败原因。
    * actions  实例当前操作action。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'disasterType' => 'disaster_type',
            'name' => 'name',
            'disasterRole' => 'disaster_role',
            'created' => 'created',
            'updated' => 'updated',
            'slaveRegionInstanceInfo' => 'slave_region_instance_info',
            'masterRegionInstanceInfo' => 'master_region_instance_info',
            'id' => 'id',
            'synchronizationId' => 'synchronization_id',
            'instanceId' => 'instance_id',
            'instanceName' => 'instance_name',
            'instanceStatus' => 'instance_status',
            'status' => 'status',
            'precheckFailedReason' => 'precheck_failed_reason',
            'actions' => 'actions'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * disasterType  容灾类型。
    * name  容灾任务名称。
    * disasterRole  容灾角色。
    * created  创建时间，格式为“yyyy-mm-dd hh:mm:ss”。
    * updated  更新时间，格式为“yyyy-mm-dd hh:mm:ss”。
    * slaveRegionInstanceInfo  slaveRegionInstanceInfo
    * masterRegionInstanceInfo  masterRegionInstanceInfo
    * id  容灾记录id。
    * synchronizationId  容灾关系唯一id。
    * instanceId  当前region实例id。
    * instanceName  当前region实例名称。
    * instanceStatus  当前region实例状态。
    * status  容灾记录状态。
    * precheckFailedReason  预校验失败原因。
    * actions  实例当前操作action。
    *
    * @var string[]
    */
    protected static $setters = [
            'disasterType' => 'setDisasterType',
            'name' => 'setName',
            'disasterRole' => 'setDisasterRole',
            'created' => 'setCreated',
            'updated' => 'setUpdated',
            'slaveRegionInstanceInfo' => 'setSlaveRegionInstanceInfo',
            'masterRegionInstanceInfo' => 'setMasterRegionInstanceInfo',
            'id' => 'setId',
            'synchronizationId' => 'setSynchronizationId',
            'instanceId' => 'setInstanceId',
            'instanceName' => 'setInstanceName',
            'instanceStatus' => 'setInstanceStatus',
            'status' => 'setStatus',
            'precheckFailedReason' => 'setPrecheckFailedReason',
            'actions' => 'setActions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * disasterType  容灾类型。
    * name  容灾任务名称。
    * disasterRole  容灾角色。
    * created  创建时间，格式为“yyyy-mm-dd hh:mm:ss”。
    * updated  更新时间，格式为“yyyy-mm-dd hh:mm:ss”。
    * slaveRegionInstanceInfo  slaveRegionInstanceInfo
    * masterRegionInstanceInfo  masterRegionInstanceInfo
    * id  容灾记录id。
    * synchronizationId  容灾关系唯一id。
    * instanceId  当前region实例id。
    * instanceName  当前region实例名称。
    * instanceStatus  当前region实例状态。
    * status  容灾记录状态。
    * precheckFailedReason  预校验失败原因。
    * actions  实例当前操作action。
    *
    * @var string[]
    */
    protected static $getters = [
            'disasterType' => 'getDisasterType',
            'name' => 'getName',
            'disasterRole' => 'getDisasterRole',
            'created' => 'getCreated',
            'updated' => 'getUpdated',
            'slaveRegionInstanceInfo' => 'getSlaveRegionInstanceInfo',
            'masterRegionInstanceInfo' => 'getMasterRegionInstanceInfo',
            'id' => 'getId',
            'synchronizationId' => 'getSynchronizationId',
            'instanceId' => 'getInstanceId',
            'instanceName' => 'getInstanceName',
            'instanceStatus' => 'getInstanceStatus',
            'status' => 'getStatus',
            'precheckFailedReason' => 'getPrecheckFailedReason',
            'actions' => 'getActions'
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
    const DISASTER_ROLE_DISASTER = 'disaster';
    const DISASTER_ROLE_MASTER = 'master';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDisasterRoleAllowableValues()
    {
        return [
            self::DISASTER_ROLE_DISASTER,
            self::DISASTER_ROLE_MASTER,
        ];
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
        $this->container['disasterType'] = isset($data['disasterType']) ? $data['disasterType'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['disasterRole'] = isset($data['disasterRole']) ? $data['disasterRole'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['slaveRegionInstanceInfo'] = isset($data['slaveRegionInstanceInfo']) ? $data['slaveRegionInstanceInfo'] : null;
        $this->container['masterRegionInstanceInfo'] = isset($data['masterRegionInstanceInfo']) ? $data['masterRegionInstanceInfo'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['synchronizationId'] = isset($data['synchronizationId']) ? $data['synchronizationId'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['instanceStatus'] = isset($data['instanceStatus']) ? $data['instanceStatus'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['precheckFailedReason'] = isset($data['precheckFailedReason']) ? $data['precheckFailedReason'] : null;
        $this->container['actions'] = isset($data['actions']) ? $data['actions'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getDisasterRoleAllowableValues();
                if (!is_null($this->container['disasterRole']) && !in_array($this->container['disasterRole'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'disasterRole', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets disasterType
    *  容灾类型。
    *
    * @return string|null
    */
    public function getDisasterType()
    {
        return $this->container['disasterType'];
    }

    /**
    * Sets disasterType
    *
    * @param string|null $disasterType 容灾类型。
    *
    * @return $this
    */
    public function setDisasterType($disasterType)
    {
        $this->container['disasterType'] = $disasterType;
        return $this;
    }

    /**
    * Gets name
    *  容灾任务名称。
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
    * @param string|null $name 容灾任务名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets disasterRole
    *  容灾角色。
    *
    * @return string|null
    */
    public function getDisasterRole()
    {
        return $this->container['disasterRole'];
    }

    /**
    * Sets disasterRole
    *
    * @param string|null $disasterRole 容灾角色。
    *
    * @return $this
    */
    public function setDisasterRole($disasterRole)
    {
        $this->container['disasterRole'] = $disasterRole;
        return $this;
    }

    /**
    * Gets created
    *  创建时间，格式为“yyyy-mm-dd hh:mm:ss”。
    *
    * @return string|null
    */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
    * Sets created
    *
    * @param string|null $created 创建时间，格式为“yyyy-mm-dd hh:mm:ss”。
    *
    * @return $this
    */
    public function setCreated($created)
    {
        $this->container['created'] = $created;
        return $this;
    }

    /**
    * Gets updated
    *  更新时间，格式为“yyyy-mm-dd hh:mm:ss”。
    *
    * @return string|null
    */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
    * Sets updated
    *
    * @param string|null $updated 更新时间，格式为“yyyy-mm-dd hh:mm:ss”。
    *
    * @return $this
    */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;
        return $this;
    }

    /**
    * Gets slaveRegionInstanceInfo
    *  slaveRegionInstanceInfo
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\RegionInstanceInfo|null
    */
    public function getSlaveRegionInstanceInfo()
    {
        return $this->container['slaveRegionInstanceInfo'];
    }

    /**
    * Sets slaveRegionInstanceInfo
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\RegionInstanceInfo|null $slaveRegionInstanceInfo slaveRegionInstanceInfo
    *
    * @return $this
    */
    public function setSlaveRegionInstanceInfo($slaveRegionInstanceInfo)
    {
        $this->container['slaveRegionInstanceInfo'] = $slaveRegionInstanceInfo;
        return $this;
    }

    /**
    * Gets masterRegionInstanceInfo
    *  masterRegionInstanceInfo
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\RegionInstanceInfo|null
    */
    public function getMasterRegionInstanceInfo()
    {
        return $this->container['masterRegionInstanceInfo'];
    }

    /**
    * Sets masterRegionInstanceInfo
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\RegionInstanceInfo|null $masterRegionInstanceInfo masterRegionInstanceInfo
    *
    * @return $this
    */
    public function setMasterRegionInstanceInfo($masterRegionInstanceInfo)
    {
        $this->container['masterRegionInstanceInfo'] = $masterRegionInstanceInfo;
        return $this;
    }

    /**
    * Gets id
    *  容灾记录id。
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
    * @param string|null $id 容灾记录id。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets synchronizationId
    *  容灾关系唯一id。
    *
    * @return string|null
    */
    public function getSynchronizationId()
    {
        return $this->container['synchronizationId'];
    }

    /**
    * Sets synchronizationId
    *
    * @param string|null $synchronizationId 容灾关系唯一id。
    *
    * @return $this
    */
    public function setSynchronizationId($synchronizationId)
    {
        $this->container['synchronizationId'] = $synchronizationId;
        return $this;
    }

    /**
    * Gets instanceId
    *  当前region实例id。
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 当前region实例id。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets instanceName
    *  当前region实例名称。
    *
    * @return string|null
    */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
    * Sets instanceName
    *
    * @param string|null $instanceName 当前region实例名称。
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets instanceStatus
    *  当前region实例状态。
    *
    * @return string|null
    */
    public function getInstanceStatus()
    {
        return $this->container['instanceStatus'];
    }

    /**
    * Sets instanceStatus
    *
    * @param string|null $instanceStatus 当前region实例状态。
    *
    * @return $this
    */
    public function setInstanceStatus($instanceStatus)
    {
        $this->container['instanceStatus'] = $instanceStatus;
        return $this;
    }

    /**
    * Gets status
    *  容灾记录状态。
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
    * @param string|null $status 容灾记录状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets precheckFailedReason
    *  预校验失败原因。
    *
    * @return string|null
    */
    public function getPrecheckFailedReason()
    {
        return $this->container['precheckFailedReason'];
    }

    /**
    * Sets precheckFailedReason
    *
    * @param string|null $precheckFailedReason 预校验失败原因。
    *
    * @return $this
    */
    public function setPrecheckFailedReason($precheckFailedReason)
    {
        $this->container['precheckFailedReason'] = $precheckFailedReason;
        return $this;
    }

    /**
    * Gets actions
    *  实例当前操作action。
    *
    * @return string[]|null
    */
    public function getActions()
    {
        return $this->container['actions'];
    }

    /**
    * Sets actions
    *
    * @param string[]|null $actions 实例当前操作action。
    *
    * @return $this
    */
    public function setActions($actions)
    {
        $this->container['actions'] = $actions;
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

