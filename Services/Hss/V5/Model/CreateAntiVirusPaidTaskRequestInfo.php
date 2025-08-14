<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateAntiVirusPaidTaskRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateAntiVirusPaidTaskRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskName  任务名称
    * scanType  任务类型，包含如下:   - quick ：快速扫描   - full : 全盘扫描   - custom : 自定义扫描
    * action  处置动作，包含如下:   - auto：自动处置   - manual：人工处置
    * hostIds  病毒查杀主机列表
    * fileTypes  文件类型集合型，包含如下:   - 0 ：全部   - 1 : 可执行   - 2 : 压缩   - 3 : 脚本   - 4 : 文档   - 5 : 图片   - 6 : 音视频
    * scanDir  扫描目录，多个用;分隔
    * ignoreDir  排除目录，多个用;分隔
    * taskId  任务ID 创建病毒扫描任务时,task_id是null.重新扫描时，task_id不是null,是当前任务的ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskName' => 'string',
            'scanType' => 'string',
            'action' => 'string',
            'hostIds' => 'string[]',
            'fileTypes' => 'int[]',
            'scanDir' => 'string',
            'ignoreDir' => 'string',
            'taskId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskName  任务名称
    * scanType  任务类型，包含如下:   - quick ：快速扫描   - full : 全盘扫描   - custom : 自定义扫描
    * action  处置动作，包含如下:   - auto：自动处置   - manual：人工处置
    * hostIds  病毒查杀主机列表
    * fileTypes  文件类型集合型，包含如下:   - 0 ：全部   - 1 : 可执行   - 2 : 压缩   - 3 : 脚本   - 4 : 文档   - 5 : 图片   - 6 : 音视频
    * scanDir  扫描目录，多个用;分隔
    * ignoreDir  排除目录，多个用;分隔
    * taskId  任务ID 创建病毒扫描任务时,task_id是null.重新扫描时，task_id不是null,是当前任务的ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskName' => null,
        'scanType' => null,
        'action' => null,
        'hostIds' => null,
        'fileTypes' => 'int32',
        'scanDir' => null,
        'ignoreDir' => null,
        'taskId' => null
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
    * scanType  任务类型，包含如下:   - quick ：快速扫描   - full : 全盘扫描   - custom : 自定义扫描
    * action  处置动作，包含如下:   - auto：自动处置   - manual：人工处置
    * hostIds  病毒查杀主机列表
    * fileTypes  文件类型集合型，包含如下:   - 0 ：全部   - 1 : 可执行   - 2 : 压缩   - 3 : 脚本   - 4 : 文档   - 5 : 图片   - 6 : 音视频
    * scanDir  扫描目录，多个用;分隔
    * ignoreDir  排除目录，多个用;分隔
    * taskId  任务ID 创建病毒扫描任务时,task_id是null.重新扫描时，task_id不是null,是当前任务的ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskName' => 'task_name',
            'scanType' => 'scan_type',
            'action' => 'action',
            'hostIds' => 'host_ids',
            'fileTypes' => 'file_types',
            'scanDir' => 'scan_dir',
            'ignoreDir' => 'ignore_dir',
            'taskId' => 'task_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskName  任务名称
    * scanType  任务类型，包含如下:   - quick ：快速扫描   - full : 全盘扫描   - custom : 自定义扫描
    * action  处置动作，包含如下:   - auto：自动处置   - manual：人工处置
    * hostIds  病毒查杀主机列表
    * fileTypes  文件类型集合型，包含如下:   - 0 ：全部   - 1 : 可执行   - 2 : 压缩   - 3 : 脚本   - 4 : 文档   - 5 : 图片   - 6 : 音视频
    * scanDir  扫描目录，多个用;分隔
    * ignoreDir  排除目录，多个用;分隔
    * taskId  任务ID 创建病毒扫描任务时,task_id是null.重新扫描时，task_id不是null,是当前任务的ID
    *
    * @var string[]
    */
    protected static $setters = [
            'taskName' => 'setTaskName',
            'scanType' => 'setScanType',
            'action' => 'setAction',
            'hostIds' => 'setHostIds',
            'fileTypes' => 'setFileTypes',
            'scanDir' => 'setScanDir',
            'ignoreDir' => 'setIgnoreDir',
            'taskId' => 'setTaskId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskName  任务名称
    * scanType  任务类型，包含如下:   - quick ：快速扫描   - full : 全盘扫描   - custom : 自定义扫描
    * action  处置动作，包含如下:   - auto：自动处置   - manual：人工处置
    * hostIds  病毒查杀主机列表
    * fileTypes  文件类型集合型，包含如下:   - 0 ：全部   - 1 : 可执行   - 2 : 压缩   - 3 : 脚本   - 4 : 文档   - 5 : 图片   - 6 : 音视频
    * scanDir  扫描目录，多个用;分隔
    * ignoreDir  排除目录，多个用;分隔
    * taskId  任务ID 创建病毒扫描任务时,task_id是null.重新扫描时，task_id不是null,是当前任务的ID
    *
    * @var string[]
    */
    protected static $getters = [
            'taskName' => 'getTaskName',
            'scanType' => 'getScanType',
            'action' => 'getAction',
            'hostIds' => 'getHostIds',
            'fileTypes' => 'getFileTypes',
            'scanDir' => 'getScanDir',
            'ignoreDir' => 'getIgnoreDir',
            'taskId' => 'getTaskId'
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
        $this->container['scanType'] = isset($data['scanType']) ? $data['scanType'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['hostIds'] = isset($data['hostIds']) ? $data['hostIds'] : null;
        $this->container['fileTypes'] = isset($data['fileTypes']) ? $data['fileTypes'] : null;
        $this->container['scanDir'] = isset($data['scanDir']) ? $data['scanDir'] : null;
        $this->container['ignoreDir'] = isset($data['ignoreDir']) ? $data['ignoreDir'] : null;
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
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
            if (!is_null($this->container['scanDir']) && !preg_match("/^.*$/", $this->container['scanDir'])) {
                $invalidProperties[] = "invalid value for 'scanDir', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['ignoreDir']) && !preg_match("/^.*$/", $this->container['ignoreDir'])) {
                $invalidProperties[] = "invalid value for 'ignoreDir', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['taskId']) && (mb_strlen($this->container['taskId']) > 64)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['taskId']) && (mb_strlen($this->container['taskId']) < 0)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['taskId']) && !preg_match("/^.*$/", $this->container['taskId'])) {
                $invalidProperties[] = "invalid value for 'taskId', must be conform to the pattern /^.*$/.";
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
    *  处置动作，包含如下:   - auto：自动处置   - manual：人工处置
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
    * @param string $action 处置动作，包含如下:   - auto：自动处置   - manual：人工处置
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
    *  病毒查杀主机列表
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
    * @param string[] $hostIds 病毒查杀主机列表
    *
    * @return $this
    */
    public function setHostIds($hostIds)
    {
        $this->container['hostIds'] = $hostIds;
        return $this;
    }

    /**
    * Gets fileTypes
    *  文件类型集合型，包含如下:   - 0 ：全部   - 1 : 可执行   - 2 : 压缩   - 3 : 脚本   - 4 : 文档   - 5 : 图片   - 6 : 音视频
    *
    * @return int[]|null
    */
    public function getFileTypes()
    {
        return $this->container['fileTypes'];
    }

    /**
    * Sets fileTypes
    *
    * @param int[]|null $fileTypes 文件类型集合型，包含如下:   - 0 ：全部   - 1 : 可执行   - 2 : 压缩   - 3 : 脚本   - 4 : 文档   - 5 : 图片   - 6 : 音视频
    *
    * @return $this
    */
    public function setFileTypes($fileTypes)
    {
        $this->container['fileTypes'] = $fileTypes;
        return $this;
    }

    /**
    * Gets scanDir
    *  扫描目录，多个用;分隔
    *
    * @return string|null
    */
    public function getScanDir()
    {
        return $this->container['scanDir'];
    }

    /**
    * Sets scanDir
    *
    * @param string|null $scanDir 扫描目录，多个用;分隔
    *
    * @return $this
    */
    public function setScanDir($scanDir)
    {
        $this->container['scanDir'] = $scanDir;
        return $this;
    }

    /**
    * Gets ignoreDir
    *  排除目录，多个用;分隔
    *
    * @return string|null
    */
    public function getIgnoreDir()
    {
        return $this->container['ignoreDir'];
    }

    /**
    * Sets ignoreDir
    *
    * @param string|null $ignoreDir 排除目录，多个用;分隔
    *
    * @return $this
    */
    public function setIgnoreDir($ignoreDir)
    {
        $this->container['ignoreDir'] = $ignoreDir;
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

