<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AntiVirusTaskResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AntiVirusTaskResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskId  任务ID
    * taskName  任务名称
    * scanType  任务类型，包含如下:   - quick ：快速扫描   - full : 全盘扫描   - custom : 自定义扫描
    * startType  启动类型，包含如下:   - now : 立即启动   - later : 稍后启动   - period : 周期启动
    * action  处置动作，包含如下:   - auto：自动处置   - manual：人工处置
    * startTime  启动时间，毫秒
    * taskStatus  任务状态，包含如下2种   - scanning ：扫描中   - finish ：扫描完成
    * hostNum  关联服务器数
    * successHostNum  扫描成功服务器数
    * failHostNum  扫描失败服务器数
    * cancelHostNum  已取消服务器数
    * hostInfoList  主机信息
    * rescan  是否需要重新扫描
    * whetherPaidTask  此次扫描任务是否付费
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskId' => 'string',
            'taskName' => 'string',
            'scanType' => 'string',
            'startType' => 'string',
            'action' => 'string',
            'startTime' => 'int',
            'taskStatus' => 'string',
            'hostNum' => 'int',
            'successHostNum' => 'int',
            'failHostNum' => 'int',
            'cancelHostNum' => 'int',
            'hostInfoList' => '\HuaweiCloud\SDK\Hss\V5\Model\AntiVirusTaskHostResponseInfo[]',
            'rescan' => 'bool',
            'whetherPaidTask' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskId  任务ID
    * taskName  任务名称
    * scanType  任务类型，包含如下:   - quick ：快速扫描   - full : 全盘扫描   - custom : 自定义扫描
    * startType  启动类型，包含如下:   - now : 立即启动   - later : 稍后启动   - period : 周期启动
    * action  处置动作，包含如下:   - auto：自动处置   - manual：人工处置
    * startTime  启动时间，毫秒
    * taskStatus  任务状态，包含如下2种   - scanning ：扫描中   - finish ：扫描完成
    * hostNum  关联服务器数
    * successHostNum  扫描成功服务器数
    * failHostNum  扫描失败服务器数
    * cancelHostNum  已取消服务器数
    * hostInfoList  主机信息
    * rescan  是否需要重新扫描
    * whetherPaidTask  此次扫描任务是否付费
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskId' => null,
        'taskName' => null,
        'scanType' => null,
        'startType' => null,
        'action' => null,
        'startTime' => 'int64',
        'taskStatus' => null,
        'hostNum' => 'int32',
        'successHostNum' => 'int32',
        'failHostNum' => 'int32',
        'cancelHostNum' => 'int32',
        'hostInfoList' => null,
        'rescan' => null,
        'whetherPaidTask' => null
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
    * taskId  任务ID
    * taskName  任务名称
    * scanType  任务类型，包含如下:   - quick ：快速扫描   - full : 全盘扫描   - custom : 自定义扫描
    * startType  启动类型，包含如下:   - now : 立即启动   - later : 稍后启动   - period : 周期启动
    * action  处置动作，包含如下:   - auto：自动处置   - manual：人工处置
    * startTime  启动时间，毫秒
    * taskStatus  任务状态，包含如下2种   - scanning ：扫描中   - finish ：扫描完成
    * hostNum  关联服务器数
    * successHostNum  扫描成功服务器数
    * failHostNum  扫描失败服务器数
    * cancelHostNum  已取消服务器数
    * hostInfoList  主机信息
    * rescan  是否需要重新扫描
    * whetherPaidTask  此次扫描任务是否付费
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskId' => 'task_id',
            'taskName' => 'task_name',
            'scanType' => 'scan_type',
            'startType' => 'start_type',
            'action' => 'action',
            'startTime' => 'start_time',
            'taskStatus' => 'task_status',
            'hostNum' => 'host_num',
            'successHostNum' => 'success_host_num',
            'failHostNum' => 'fail_host_num',
            'cancelHostNum' => 'cancel_host_num',
            'hostInfoList' => 'host_info_list',
            'rescan' => 'rescan',
            'whetherPaidTask' => 'whether_paid_task'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskId  任务ID
    * taskName  任务名称
    * scanType  任务类型，包含如下:   - quick ：快速扫描   - full : 全盘扫描   - custom : 自定义扫描
    * startType  启动类型，包含如下:   - now : 立即启动   - later : 稍后启动   - period : 周期启动
    * action  处置动作，包含如下:   - auto：自动处置   - manual：人工处置
    * startTime  启动时间，毫秒
    * taskStatus  任务状态，包含如下2种   - scanning ：扫描中   - finish ：扫描完成
    * hostNum  关联服务器数
    * successHostNum  扫描成功服务器数
    * failHostNum  扫描失败服务器数
    * cancelHostNum  已取消服务器数
    * hostInfoList  主机信息
    * rescan  是否需要重新扫描
    * whetherPaidTask  此次扫描任务是否付费
    *
    * @var string[]
    */
    protected static $setters = [
            'taskId' => 'setTaskId',
            'taskName' => 'setTaskName',
            'scanType' => 'setScanType',
            'startType' => 'setStartType',
            'action' => 'setAction',
            'startTime' => 'setStartTime',
            'taskStatus' => 'setTaskStatus',
            'hostNum' => 'setHostNum',
            'successHostNum' => 'setSuccessHostNum',
            'failHostNum' => 'setFailHostNum',
            'cancelHostNum' => 'setCancelHostNum',
            'hostInfoList' => 'setHostInfoList',
            'rescan' => 'setRescan',
            'whetherPaidTask' => 'setWhetherPaidTask'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskId  任务ID
    * taskName  任务名称
    * scanType  任务类型，包含如下:   - quick ：快速扫描   - full : 全盘扫描   - custom : 自定义扫描
    * startType  启动类型，包含如下:   - now : 立即启动   - later : 稍后启动   - period : 周期启动
    * action  处置动作，包含如下:   - auto：自动处置   - manual：人工处置
    * startTime  启动时间，毫秒
    * taskStatus  任务状态，包含如下2种   - scanning ：扫描中   - finish ：扫描完成
    * hostNum  关联服务器数
    * successHostNum  扫描成功服务器数
    * failHostNum  扫描失败服务器数
    * cancelHostNum  已取消服务器数
    * hostInfoList  主机信息
    * rescan  是否需要重新扫描
    * whetherPaidTask  此次扫描任务是否付费
    *
    * @var string[]
    */
    protected static $getters = [
            'taskId' => 'getTaskId',
            'taskName' => 'getTaskName',
            'scanType' => 'getScanType',
            'startType' => 'getStartType',
            'action' => 'getAction',
            'startTime' => 'getStartTime',
            'taskStatus' => 'getTaskStatus',
            'hostNum' => 'getHostNum',
            'successHostNum' => 'getSuccessHostNum',
            'failHostNum' => 'getFailHostNum',
            'cancelHostNum' => 'getCancelHostNum',
            'hostInfoList' => 'getHostInfoList',
            'rescan' => 'getRescan',
            'whetherPaidTask' => 'getWhetherPaidTask'
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
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['taskName'] = isset($data['taskName']) ? $data['taskName'] : null;
        $this->container['scanType'] = isset($data['scanType']) ? $data['scanType'] : null;
        $this->container['startType'] = isset($data['startType']) ? $data['startType'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['taskStatus'] = isset($data['taskStatus']) ? $data['taskStatus'] : null;
        $this->container['hostNum'] = isset($data['hostNum']) ? $data['hostNum'] : null;
        $this->container['successHostNum'] = isset($data['successHostNum']) ? $data['successHostNum'] : null;
        $this->container['failHostNum'] = isset($data['failHostNum']) ? $data['failHostNum'] : null;
        $this->container['cancelHostNum'] = isset($data['cancelHostNum']) ? $data['cancelHostNum'] : null;
        $this->container['hostInfoList'] = isset($data['hostInfoList']) ? $data['hostInfoList'] : null;
        $this->container['rescan'] = isset($data['rescan']) ? $data['rescan'] : null;
        $this->container['whetherPaidTask'] = isset($data['whetherPaidTask']) ? $data['whetherPaidTask'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['taskId']) && !preg_match("/^.*$/", $this->container['taskId'])) {
                $invalidProperties[] = "invalid value for 'taskId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['taskName']) && (mb_strlen($this->container['taskName']) < 1)) {
                $invalidProperties[] = "invalid value for 'taskName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['taskName']) && !preg_match("/^.*$/", $this->container['taskName'])) {
                $invalidProperties[] = "invalid value for 'taskName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['scanType']) && (mb_strlen($this->container['scanType']) > 10)) {
                $invalidProperties[] = "invalid value for 'scanType', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['scanType']) && (mb_strlen($this->container['scanType']) < 1)) {
                $invalidProperties[] = "invalid value for 'scanType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['startType']) && !preg_match("/^now|later|period$/", $this->container['startType'])) {
                $invalidProperties[] = "invalid value for 'startType', must be conform to the pattern /^now|later|period$/.";
            }
            if (!is_null($this->container['action']) && (mb_strlen($this->container['action']) > 10)) {
                $invalidProperties[] = "invalid value for 'action', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['action']) && (mb_strlen($this->container['action']) < 1)) {
                $invalidProperties[] = "invalid value for 'action', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['startTime']) && ($this->container['startTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'startTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['startTime']) && ($this->container['startTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'startTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostNum']) && ($this->container['hostNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'hostNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['hostNum']) && ($this->container['hostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'hostNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['successHostNum']) && ($this->container['successHostNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'successHostNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['successHostNum']) && ($this->container['successHostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'successHostNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['failHostNum']) && ($this->container['failHostNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'failHostNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['failHostNum']) && ($this->container['failHostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'failHostNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cancelHostNum']) && ($this->container['cancelHostNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'cancelHostNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['cancelHostNum']) && ($this->container['cancelHostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'cancelHostNum', must be bigger than or equal to 0.";
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
    * Gets taskId
    *  任务ID
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
    * @param string|null $taskId 任务ID
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets taskName
    *  任务名称
    *
    * @return string|null
    */
    public function getTaskName()
    {
        return $this->container['taskName'];
    }

    /**
    * Sets taskName
    *
    * @param string|null $taskName 任务名称
    *
    * @return $this
    */
    public function setTaskName($taskName)
    {
        $this->container['taskName'] = $taskName;
        return $this;
    }

    /**
    * Gets scanType
    *  任务类型，包含如下:   - quick ：快速扫描   - full : 全盘扫描   - custom : 自定义扫描
    *
    * @return string|null
    */
    public function getScanType()
    {
        return $this->container['scanType'];
    }

    /**
    * Sets scanType
    *
    * @param string|null $scanType 任务类型，包含如下:   - quick ：快速扫描   - full : 全盘扫描   - custom : 自定义扫描
    *
    * @return $this
    */
    public function setScanType($scanType)
    {
        $this->container['scanType'] = $scanType;
        return $this;
    }

    /**
    * Gets startType
    *  启动类型，包含如下:   - now : 立即启动   - later : 稍后启动   - period : 周期启动
    *
    * @return string|null
    */
    public function getStartType()
    {
        return $this->container['startType'];
    }

    /**
    * Sets startType
    *
    * @param string|null $startType 启动类型，包含如下:   - now : 立即启动   - later : 稍后启动   - period : 周期启动
    *
    * @return $this
    */
    public function setStartType($startType)
    {
        $this->container['startType'] = $startType;
        return $this;
    }

    /**
    * Gets action
    *  处置动作，包含如下:   - auto：自动处置   - manual：人工处置
    *
    * @return string|null
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string|null $action 处置动作，包含如下:   - auto：自动处置   - manual：人工处置
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets startTime
    *  启动时间，毫秒
    *
    * @return int|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int|null $startTime 启动时间，毫秒
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets taskStatus
    *  任务状态，包含如下2种   - scanning ：扫描中   - finish ：扫描完成
    *
    * @return string|null
    */
    public function getTaskStatus()
    {
        return $this->container['taskStatus'];
    }

    /**
    * Sets taskStatus
    *
    * @param string|null $taskStatus 任务状态，包含如下2种   - scanning ：扫描中   - finish ：扫描完成
    *
    * @return $this
    */
    public function setTaskStatus($taskStatus)
    {
        $this->container['taskStatus'] = $taskStatus;
        return $this;
    }

    /**
    * Gets hostNum
    *  关联服务器数
    *
    * @return int|null
    */
    public function getHostNum()
    {
        return $this->container['hostNum'];
    }

    /**
    * Sets hostNum
    *
    * @param int|null $hostNum 关联服务器数
    *
    * @return $this
    */
    public function setHostNum($hostNum)
    {
        $this->container['hostNum'] = $hostNum;
        return $this;
    }

    /**
    * Gets successHostNum
    *  扫描成功服务器数
    *
    * @return int|null
    */
    public function getSuccessHostNum()
    {
        return $this->container['successHostNum'];
    }

    /**
    * Sets successHostNum
    *
    * @param int|null $successHostNum 扫描成功服务器数
    *
    * @return $this
    */
    public function setSuccessHostNum($successHostNum)
    {
        $this->container['successHostNum'] = $successHostNum;
        return $this;
    }

    /**
    * Gets failHostNum
    *  扫描失败服务器数
    *
    * @return int|null
    */
    public function getFailHostNum()
    {
        return $this->container['failHostNum'];
    }

    /**
    * Sets failHostNum
    *
    * @param int|null $failHostNum 扫描失败服务器数
    *
    * @return $this
    */
    public function setFailHostNum($failHostNum)
    {
        $this->container['failHostNum'] = $failHostNum;
        return $this;
    }

    /**
    * Gets cancelHostNum
    *  已取消服务器数
    *
    * @return int|null
    */
    public function getCancelHostNum()
    {
        return $this->container['cancelHostNum'];
    }

    /**
    * Sets cancelHostNum
    *
    * @param int|null $cancelHostNum 已取消服务器数
    *
    * @return $this
    */
    public function setCancelHostNum($cancelHostNum)
    {
        $this->container['cancelHostNum'] = $cancelHostNum;
        return $this;
    }

    /**
    * Gets hostInfoList
    *  主机信息
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\AntiVirusTaskHostResponseInfo[]|null
    */
    public function getHostInfoList()
    {
        return $this->container['hostInfoList'];
    }

    /**
    * Sets hostInfoList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\AntiVirusTaskHostResponseInfo[]|null $hostInfoList 主机信息
    *
    * @return $this
    */
    public function setHostInfoList($hostInfoList)
    {
        $this->container['hostInfoList'] = $hostInfoList;
        return $this;
    }

    /**
    * Gets rescan
    *  是否需要重新扫描
    *
    * @return bool|null
    */
    public function getRescan()
    {
        return $this->container['rescan'];
    }

    /**
    * Sets rescan
    *
    * @param bool|null $rescan 是否需要重新扫描
    *
    * @return $this
    */
    public function setRescan($rescan)
    {
        $this->container['rescan'] = $rescan;
        return $this;
    }

    /**
    * Gets whetherPaidTask
    *  此次扫描任务是否付费
    *
    * @return bool|null
    */
    public function getWhetherPaidTask()
    {
        return $this->container['whetherPaidTask'];
    }

    /**
    * Sets whetherPaidTask
    *
    * @param bool|null $whetherPaidTask 此次扫描任务是否付费
    *
    * @return $this
    */
    public function setWhetherPaidTask($whetherPaidTask)
    {
        $this->container['whetherPaidTask'] = $whetherPaidTask;
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

