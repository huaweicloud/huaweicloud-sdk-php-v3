<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AutoHandlerAlarmRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AutoHandlerAlarmRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskType  任务类型
    * associatedTaskId  关联任务ID（脚本ID/作业ID）
    * associatedTaskType  关联任务的类型
    * associatedTaskName  关联任务名称（脚本名称/作业名称）
    * associatedTaskEnterpriseProjectId  企业项目ID
    * runbookInstanceMode  作业实例模式
    * inputParam  执行参数，值为json串
    * targetInstances  目标实例信息
    * regionId  区域ID
    * subTaskInfo  subTaskInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskType' => 'string',
            'associatedTaskId' => 'string',
            'associatedTaskType' => 'string',
            'associatedTaskName' => 'string',
            'associatedTaskEnterpriseProjectId' => 'string',
            'runbookInstanceMode' => 'string',
            'inputParam' => 'map[string,string]',
            'targetInstances' => '\HuaweiCloud\SDK\Coc\V1\Model\AlarmScheduleInstance[]',
            'regionId' => 'string',
            'subTaskInfo' => '\HuaweiCloud\SDK\Coc\V1\Model\SubTaskInfoDTO'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskType  任务类型
    * associatedTaskId  关联任务ID（脚本ID/作业ID）
    * associatedTaskType  关联任务的类型
    * associatedTaskName  关联任务名称（脚本名称/作业名称）
    * associatedTaskEnterpriseProjectId  企业项目ID
    * runbookInstanceMode  作业实例模式
    * inputParam  执行参数，值为json串
    * targetInstances  目标实例信息
    * regionId  区域ID
    * subTaskInfo  subTaskInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskType' => null,
        'associatedTaskId' => null,
        'associatedTaskType' => null,
        'associatedTaskName' => null,
        'associatedTaskEnterpriseProjectId' => null,
        'runbookInstanceMode' => null,
        'inputParam' => null,
        'targetInstances' => null,
        'regionId' => null,
        'subTaskInfo' => null
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
    * taskType  任务类型
    * associatedTaskId  关联任务ID（脚本ID/作业ID）
    * associatedTaskType  关联任务的类型
    * associatedTaskName  关联任务名称（脚本名称/作业名称）
    * associatedTaskEnterpriseProjectId  企业项目ID
    * runbookInstanceMode  作业实例模式
    * inputParam  执行参数，值为json串
    * targetInstances  目标实例信息
    * regionId  区域ID
    * subTaskInfo  subTaskInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskType' => 'task_type',
            'associatedTaskId' => 'associated_task_id',
            'associatedTaskType' => 'associated_task_type',
            'associatedTaskName' => 'associated_task_name',
            'associatedTaskEnterpriseProjectId' => 'associated_task_enterprise_project_id',
            'runbookInstanceMode' => 'runbook_instance_mode',
            'inputParam' => 'input_param',
            'targetInstances' => 'target_instances',
            'regionId' => 'region_id',
            'subTaskInfo' => 'sub_task_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskType  任务类型
    * associatedTaskId  关联任务ID（脚本ID/作业ID）
    * associatedTaskType  关联任务的类型
    * associatedTaskName  关联任务名称（脚本名称/作业名称）
    * associatedTaskEnterpriseProjectId  企业项目ID
    * runbookInstanceMode  作业实例模式
    * inputParam  执行参数，值为json串
    * targetInstances  目标实例信息
    * regionId  区域ID
    * subTaskInfo  subTaskInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'taskType' => 'setTaskType',
            'associatedTaskId' => 'setAssociatedTaskId',
            'associatedTaskType' => 'setAssociatedTaskType',
            'associatedTaskName' => 'setAssociatedTaskName',
            'associatedTaskEnterpriseProjectId' => 'setAssociatedTaskEnterpriseProjectId',
            'runbookInstanceMode' => 'setRunbookInstanceMode',
            'inputParam' => 'setInputParam',
            'targetInstances' => 'setTargetInstances',
            'regionId' => 'setRegionId',
            'subTaskInfo' => 'setSubTaskInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskType  任务类型
    * associatedTaskId  关联任务ID（脚本ID/作业ID）
    * associatedTaskType  关联任务的类型
    * associatedTaskName  关联任务名称（脚本名称/作业名称）
    * associatedTaskEnterpriseProjectId  企业项目ID
    * runbookInstanceMode  作业实例模式
    * inputParam  执行参数，值为json串
    * targetInstances  目标实例信息
    * regionId  区域ID
    * subTaskInfo  subTaskInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'taskType' => 'getTaskType',
            'associatedTaskId' => 'getAssociatedTaskId',
            'associatedTaskType' => 'getAssociatedTaskType',
            'associatedTaskName' => 'getAssociatedTaskName',
            'associatedTaskEnterpriseProjectId' => 'getAssociatedTaskEnterpriseProjectId',
            'runbookInstanceMode' => 'getRunbookInstanceMode',
            'inputParam' => 'getInputParam',
            'targetInstances' => 'getTargetInstances',
            'regionId' => 'getRegionId',
            'subTaskInfo' => 'getSubTaskInfo'
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
        $this->container['taskType'] = isset($data['taskType']) ? $data['taskType'] : null;
        $this->container['associatedTaskId'] = isset($data['associatedTaskId']) ? $data['associatedTaskId'] : null;
        $this->container['associatedTaskType'] = isset($data['associatedTaskType']) ? $data['associatedTaskType'] : null;
        $this->container['associatedTaskName'] = isset($data['associatedTaskName']) ? $data['associatedTaskName'] : null;
        $this->container['associatedTaskEnterpriseProjectId'] = isset($data['associatedTaskEnterpriseProjectId']) ? $data['associatedTaskEnterpriseProjectId'] : null;
        $this->container['runbookInstanceMode'] = isset($data['runbookInstanceMode']) ? $data['runbookInstanceMode'] : null;
        $this->container['inputParam'] = isset($data['inputParam']) ? $data['inputParam'] : null;
        $this->container['targetInstances'] = isset($data['targetInstances']) ? $data['targetInstances'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['subTaskInfo'] = isset($data['subTaskInfo']) ? $data['subTaskInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['taskType'] === null) {
            $invalidProperties[] = "'taskType' can't be null";
        }
        if ($this->container['associatedTaskId'] === null) {
            $invalidProperties[] = "'associatedTaskId' can't be null";
        }
            if ((mb_strlen($this->container['associatedTaskId']) > 100)) {
                $invalidProperties[] = "invalid value for 'associatedTaskId', the character length must be smaller than or equal to 100.";
            }
            if ((mb_strlen($this->container['associatedTaskId']) < 3)) {
                $invalidProperties[] = "invalid value for 'associatedTaskId', the character length must be bigger than or equal to 3.";
            }
        if ($this->container['associatedTaskType'] === null) {
            $invalidProperties[] = "'associatedTaskType' can't be null";
        }
        if ($this->container['associatedTaskName'] === null) {
            $invalidProperties[] = "'associatedTaskName' can't be null";
        }
            if ((mb_strlen($this->container['associatedTaskName']) > 255)) {
                $invalidProperties[] = "invalid value for 'associatedTaskName', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['associatedTaskName']) < 0)) {
                $invalidProperties[] = "invalid value for 'associatedTaskName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['associatedTaskEnterpriseProjectId']) && (mb_strlen($this->container['associatedTaskEnterpriseProjectId']) > 1000)) {
                $invalidProperties[] = "invalid value for 'associatedTaskEnterpriseProjectId', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['associatedTaskEnterpriseProjectId']) && (mb_strlen($this->container['associatedTaskEnterpriseProjectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'associatedTaskEnterpriseProjectId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['inputParam'] === null) {
            $invalidProperties[] = "'inputParam' can't be null";
        }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) > 64)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) < 0)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be bigger than or equal to 0.";
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
    * Gets taskType
    *  任务类型
    *
    * @return string
    */
    public function getTaskType()
    {
        return $this->container['taskType'];
    }

    /**
    * Sets taskType
    *
    * @param string $taskType 任务类型
    *
    * @return $this
    */
    public function setTaskType($taskType)
    {
        $this->container['taskType'] = $taskType;
        return $this;
    }

    /**
    * Gets associatedTaskId
    *  关联任务ID（脚本ID/作业ID）
    *
    * @return string
    */
    public function getAssociatedTaskId()
    {
        return $this->container['associatedTaskId'];
    }

    /**
    * Sets associatedTaskId
    *
    * @param string $associatedTaskId 关联任务ID（脚本ID/作业ID）
    *
    * @return $this
    */
    public function setAssociatedTaskId($associatedTaskId)
    {
        $this->container['associatedTaskId'] = $associatedTaskId;
        return $this;
    }

    /**
    * Gets associatedTaskType
    *  关联任务的类型
    *
    * @return string
    */
    public function getAssociatedTaskType()
    {
        return $this->container['associatedTaskType'];
    }

    /**
    * Sets associatedTaskType
    *
    * @param string $associatedTaskType 关联任务的类型
    *
    * @return $this
    */
    public function setAssociatedTaskType($associatedTaskType)
    {
        $this->container['associatedTaskType'] = $associatedTaskType;
        return $this;
    }

    /**
    * Gets associatedTaskName
    *  关联任务名称（脚本名称/作业名称）
    *
    * @return string
    */
    public function getAssociatedTaskName()
    {
        return $this->container['associatedTaskName'];
    }

    /**
    * Sets associatedTaskName
    *
    * @param string $associatedTaskName 关联任务名称（脚本名称/作业名称）
    *
    * @return $this
    */
    public function setAssociatedTaskName($associatedTaskName)
    {
        $this->container['associatedTaskName'] = $associatedTaskName;
        return $this;
    }

    /**
    * Gets associatedTaskEnterpriseProjectId
    *  企业项目ID
    *
    * @return string|null
    */
    public function getAssociatedTaskEnterpriseProjectId()
    {
        return $this->container['associatedTaskEnterpriseProjectId'];
    }

    /**
    * Sets associatedTaskEnterpriseProjectId
    *
    * @param string|null $associatedTaskEnterpriseProjectId 企业项目ID
    *
    * @return $this
    */
    public function setAssociatedTaskEnterpriseProjectId($associatedTaskEnterpriseProjectId)
    {
        $this->container['associatedTaskEnterpriseProjectId'] = $associatedTaskEnterpriseProjectId;
        return $this;
    }

    /**
    * Gets runbookInstanceMode
    *  作业实例模式
    *
    * @return string|null
    */
    public function getRunbookInstanceMode()
    {
        return $this->container['runbookInstanceMode'];
    }

    /**
    * Sets runbookInstanceMode
    *
    * @param string|null $runbookInstanceMode 作业实例模式
    *
    * @return $this
    */
    public function setRunbookInstanceMode($runbookInstanceMode)
    {
        $this->container['runbookInstanceMode'] = $runbookInstanceMode;
        return $this;
    }

    /**
    * Gets inputParam
    *  执行参数，值为json串
    *
    * @return map[string,string]
    */
    public function getInputParam()
    {
        return $this->container['inputParam'];
    }

    /**
    * Sets inputParam
    *
    * @param map[string,string] $inputParam 执行参数，值为json串
    *
    * @return $this
    */
    public function setInputParam($inputParam)
    {
        $this->container['inputParam'] = $inputParam;
        return $this;
    }

    /**
    * Gets targetInstances
    *  目标实例信息
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\AlarmScheduleInstance[]|null
    */
    public function getTargetInstances()
    {
        return $this->container['targetInstances'];
    }

    /**
    * Sets targetInstances
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\AlarmScheduleInstance[]|null $targetInstances 目标实例信息
    *
    * @return $this
    */
    public function setTargetInstances($targetInstances)
    {
        $this->container['targetInstances'] = $targetInstances;
        return $this;
    }

    /**
    * Gets regionId
    *  区域ID
    *
    * @return string|null
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string|null $regionId 区域ID
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets subTaskInfo
    *  subTaskInfo
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\SubTaskInfoDTO|null
    */
    public function getSubTaskInfo()
    {
        return $this->container['subTaskInfo'];
    }

    /**
    * Sets subTaskInfo
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\SubTaskInfoDTO|null $subTaskInfo subTaskInfo
    *
    * @return $this
    */
    public function setSubTaskInfo($subTaskInfo)
    {
        $this->container['subTaskInfo'] = $subTaskInfo;
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

