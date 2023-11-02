<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WorkloadPlanInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WorkloadPlanInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  计划状态。
    * projectId  项目ID。
    * clusterId  集群ID。
    * planId  计划ID。
    * planName  计划名称。
    * currentStage  当前计划阶段。
    * logicalClusterName  逻辑集群名称。
    * stageList  计划阶段列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string',
            'projectId' => 'string',
            'clusterId' => 'string',
            'planId' => 'string',
            'planName' => 'string',
            'currentStage' => 'string',
            'logicalClusterName' => 'string',
            'stageList' => '\HuaweiCloud\SDK\Dws\V2\Model\PlanStage[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  计划状态。
    * projectId  项目ID。
    * clusterId  集群ID。
    * planId  计划ID。
    * planName  计划名称。
    * currentStage  当前计划阶段。
    * logicalClusterName  逻辑集群名称。
    * stageList  计划阶段列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'projectId' => null,
        'clusterId' => null,
        'planId' => null,
        'planName' => null,
        'currentStage' => null,
        'logicalClusterName' => null,
        'stageList' => null
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
    * status  计划状态。
    * projectId  项目ID。
    * clusterId  集群ID。
    * planId  计划ID。
    * planName  计划名称。
    * currentStage  当前计划阶段。
    * logicalClusterName  逻辑集群名称。
    * stageList  计划阶段列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'projectId' => 'project_id',
            'clusterId' => 'cluster_id',
            'planId' => 'plan_id',
            'planName' => 'plan_name',
            'currentStage' => 'current_stage',
            'logicalClusterName' => 'logical_cluster_name',
            'stageList' => 'stage_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  计划状态。
    * projectId  项目ID。
    * clusterId  集群ID。
    * planId  计划ID。
    * planName  计划名称。
    * currentStage  当前计划阶段。
    * logicalClusterName  逻辑集群名称。
    * stageList  计划阶段列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'projectId' => 'setProjectId',
            'clusterId' => 'setClusterId',
            'planId' => 'setPlanId',
            'planName' => 'setPlanName',
            'currentStage' => 'setCurrentStage',
            'logicalClusterName' => 'setLogicalClusterName',
            'stageList' => 'setStageList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  计划状态。
    * projectId  项目ID。
    * clusterId  集群ID。
    * planId  计划ID。
    * planName  计划名称。
    * currentStage  当前计划阶段。
    * logicalClusterName  逻辑集群名称。
    * stageList  计划阶段列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'projectId' => 'getProjectId',
            'clusterId' => 'getClusterId',
            'planId' => 'getPlanId',
            'planName' => 'getPlanName',
            'currentStage' => 'getCurrentStage',
            'logicalClusterName' => 'getLogicalClusterName',
            'stageList' => 'getStageList'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['planId'] = isset($data['planId']) ? $data['planId'] : null;
        $this->container['planName'] = isset($data['planName']) ? $data['planName'] : null;
        $this->container['currentStage'] = isset($data['currentStage']) ? $data['currentStage'] : null;
        $this->container['logicalClusterName'] = isset($data['logicalClusterName']) ? $data['logicalClusterName'] : null;
        $this->container['stageList'] = isset($data['stageList']) ? $data['stageList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
        if ($this->container['clusterId'] === null) {
            $invalidProperties[] = "'clusterId' can't be null";
        }
        if ($this->container['planId'] === null) {
            $invalidProperties[] = "'planId' can't be null";
        }
        if ($this->container['planName'] === null) {
            $invalidProperties[] = "'planName' can't be null";
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
    * Gets status
    *  计划状态。
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
    * @param string|null $status 计划状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID。
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 项目ID。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets clusterId
    *  集群ID。
    *
    * @return string
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string $clusterId 集群ID。
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets planId
    *  计划ID。
    *
    * @return string
    */
    public function getPlanId()
    {
        return $this->container['planId'];
    }

    /**
    * Sets planId
    *
    * @param string $planId 计划ID。
    *
    * @return $this
    */
    public function setPlanId($planId)
    {
        $this->container['planId'] = $planId;
        return $this;
    }

    /**
    * Gets planName
    *  计划名称。
    *
    * @return string
    */
    public function getPlanName()
    {
        return $this->container['planName'];
    }

    /**
    * Sets planName
    *
    * @param string $planName 计划名称。
    *
    * @return $this
    */
    public function setPlanName($planName)
    {
        $this->container['planName'] = $planName;
        return $this;
    }

    /**
    * Gets currentStage
    *  当前计划阶段。
    *
    * @return string|null
    */
    public function getCurrentStage()
    {
        return $this->container['currentStage'];
    }

    /**
    * Sets currentStage
    *
    * @param string|null $currentStage 当前计划阶段。
    *
    * @return $this
    */
    public function setCurrentStage($currentStage)
    {
        $this->container['currentStage'] = $currentStage;
        return $this;
    }

    /**
    * Gets logicalClusterName
    *  逻辑集群名称。
    *
    * @return string|null
    */
    public function getLogicalClusterName()
    {
        return $this->container['logicalClusterName'];
    }

    /**
    * Sets logicalClusterName
    *
    * @param string|null $logicalClusterName 逻辑集群名称。
    *
    * @return $this
    */
    public function setLogicalClusterName($logicalClusterName)
    {
        $this->container['logicalClusterName'] = $logicalClusterName;
        return $this;
    }

    /**
    * Gets stageList
    *  计划阶段列表。
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\PlanStage[]|null
    */
    public function getStageList()
    {
        return $this->container['stageList'];
    }

    /**
    * Sets stageList
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\PlanStage[]|null $stageList 计划阶段列表。
    *
    * @return $this
    */
    public function setStageList($stageList)
    {
        $this->container['stageList'] = $stageList;
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

