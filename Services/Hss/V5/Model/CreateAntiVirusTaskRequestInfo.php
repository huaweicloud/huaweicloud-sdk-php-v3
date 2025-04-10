<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateAntiVirusTaskRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateAntiVirusTaskRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskName  任务名称
    * taskId  任务ID 创建病毒扫描任务时,task_id是null.重新扫描时，task_id不是null,是当前任务的ID
    * scanType  任务类型，包含如下:   - quick ：快速扫描   - full : 全盘扫描   - custom : 自定义扫描
    * action  处置动作，包含如下:   - auto ：自动处置   - manual : 人工处置
    * hostIds  策略管理主机列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskName' => 'string',
            'taskId' => 'string',
            'scanType' => 'string',
            'action' => 'string',
            'hostIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskName  任务名称
    * taskId  任务ID 创建病毒扫描任务时,task_id是null.重新扫描时，task_id不是null,是当前任务的ID
    * scanType  任务类型，包含如下:   - quick ：快速扫描   - full : 全盘扫描   - custom : 自定义扫描
    * action  处置动作，包含如下:   - auto ：自动处置   - manual : 人工处置
    * hostIds  策略管理主机列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskName' => null,
        'taskId' => null,
        'scanType' => null,
        'action' => null,
        'hostIds' => null
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
    * taskName  任务名称
    * taskId  任务ID 创建病毒扫描任务时,task_id是null.重新扫描时，task_id不是null,是当前任务的ID
    * scanType  任务类型，包含如下:   - quick ：快速扫描   - full : 全盘扫描   - custom : 自定义扫描
    * action  处置动作，包含如下:   - auto ：自动处置   - manual : 人工处置
    * hostIds  策略管理主机列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskName' => 'task_name',
            'taskId' => 'task_id',
            'scanType' => 'scan_type',
            'action' => 'action',
            'hostIds' => 'host_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskName  任务名称
    * taskId  任务ID 创建病毒扫描任务时,task_id是null.重新扫描时，task_id不是null,是当前任务的ID
    * scanType  任务类型，包含如下:   - quick ：快速扫描   - full : 全盘扫描   - custom : 自定义扫描
    * action  处置动作，包含如下:   - auto ：自动处置   - manual : 人工处置
    * hostIds  策略管理主机列表
    *
    * @var string[]
    */
    protected static $setters = [
            'taskName' => 'setTaskName',
            'taskId' => 'setTaskId',
            'scanType' => 'setScanType',
            'action' => 'setAction',
            'hostIds' => 'setHostIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskName  任务名称
    * taskId  任务ID 创建病毒扫描任务时,task_id是null.重新扫描时，task_id不是null,是当前任务的ID
    * scanType  任务类型，包含如下:   - quick ：快速扫描   - full : 全盘扫描   - custom : 自定义扫描
    * action  处置动作，包含如下:   - auto ：自动处置   - manual : 人工处置
    * hostIds  策略管理主机列表
    *
    * @var string[]
    */
    protected static $getters = [
            'taskName' => 'getTaskName',
            'taskId' => 'getTaskId',
            'scanType' => 'getScanType',
            'action' => 'getAction',
            'hostIds' => 'getHostIds'
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
        $this->container['taskName'] = isset($data['taskName']) ? $data['taskName'] : null;
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['scanType'] = isset($data['scanType']) ? $data['scanType'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['hostIds'] = isset($data['hostIds']) ? $data['hostIds'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['taskName'] === null) {
            $invalidProperties[] = "'taskName' can't be null";
        }
            if ((mb_strlen($this->container['taskName']) < 1)) {
                $invalidProperties[] = "invalid value for 'taskName', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^.*$/", $this->container['taskName'])) {
                $invalidProperties[] = "invalid value for 'taskName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['taskId']) && !preg_match("/^.*$/", $this->container['taskId'])) {
                $invalidProperties[] = "invalid value for 'taskId', must be conform to the pattern /^.*$/.";
            }
        if ($this->container['scanType'] === null) {
            $invalidProperties[] = "'scanType' can't be null";
        }
            if ((mb_strlen($this->container['scanType']) > 10)) {
                $invalidProperties[] = "invalid value for 'scanType', the character length must be smaller than or equal to 10.";
            }
            if ((mb_strlen($this->container['scanType']) < 1)) {
                $invalidProperties[] = "invalid value for 'scanType', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
        }
            if ((mb_strlen($this->container['action']) > 10)) {
                $invalidProperties[] = "invalid value for 'action', the character length must be smaller than or equal to 10.";
            }
            if ((mb_strlen($this->container['action']) < 1)) {
                $invalidProperties[] = "invalid value for 'action', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['hostIds'] === null) {
            $invalidProperties[] = "'hostIds' can't be null";
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
    * Gets taskName
    *  任务名称
    *
    * @return string
    */
    public function getTaskName()
    {
        return $this->container['taskName'];
    }

    /**
    * Sets taskName
    *
    * @param string $taskName 任务名称
    *
    * @return $this
    */
    public function setTaskName($taskName)
    {
        $this->container['taskName'] = $taskName;
        return $this;
    }

    /**
    * Gets taskId
    *  任务ID 创建病毒扫描任务时,task_id是null.重新扫描时，task_id不是null,是当前任务的ID
    *
    * @return string|null
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param string|null $taskId 任务ID 创建病毒扫描任务时,task_id是null.重新扫描时，task_id不是null,是当前任务的ID
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets scanType
    *  任务类型，包含如下:   - quick ：快速扫描   - full : 全盘扫描   - custom : 自定义扫描
    *
    * @return string
    */
    public function getScanType()
    {
        return $this->container['scanType'];
    }

    /**
    * Sets scanType
    *
    * @param string $scanType 任务类型，包含如下:   - quick ：快速扫描   - full : 全盘扫描   - custom : 自定义扫描
    *
    * @return $this
    */
    public function setScanType($scanType)
    {
        $this->container['scanType'] = $scanType;
        return $this;
    }

    /**
    * Gets action
    *  处置动作，包含如下:   - auto ：自动处置   - manual : 人工处置
    *
    * @return string
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string $action 处置动作，包含如下:   - auto ：自动处置   - manual : 人工处置
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets hostIds
    *  策略管理主机列表
    *
    * @return string[]
    */
    public function getHostIds()
    {
        return $this->container['hostIds'];
    }

    /**
    * Sets hostIds
    *
    * @param string[] $hostIds 策略管理主机列表
    *
    * @return $this
    */
    public function setHostIds($hostIds)
    {
        $this->container['hostIds'] = $hostIds;
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

