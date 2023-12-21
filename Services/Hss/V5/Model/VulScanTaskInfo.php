<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VulScanTaskInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VulScanTaskInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  任务ID
    * scanType  扫描任务的类型，包含如下：   -manual : 手动扫描任务   -schedule : 定时扫描任务
    * startTime  扫描任务开始的时间
    * endTime  扫描任务结束的时间
    * scanVulTypes  该任务扫描的漏洞类型列表
    * status  扫描任务的执行状态，包含如下：   -running : 扫描中   -finished : 扫描完成
    * scanningHostNum  该任务处于扫描中状态的主机数量
    * successHostNum  该任务已扫描成功的主机数量
    * failedHostNum  该任务已扫描失败的主机数量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'scanType' => 'string',
            'startTime' => 'int',
            'endTime' => 'int',
            'scanVulTypes' => 'string[]',
            'status' => 'string',
            'scanningHostNum' => 'int',
            'successHostNum' => 'int',
            'failedHostNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  任务ID
    * scanType  扫描任务的类型，包含如下：   -manual : 手动扫描任务   -schedule : 定时扫描任务
    * startTime  扫描任务开始的时间
    * endTime  扫描任务结束的时间
    * scanVulTypes  该任务扫描的漏洞类型列表
    * status  扫描任务的执行状态，包含如下：   -running : 扫描中   -finished : 扫描完成
    * scanningHostNum  该任务处于扫描中状态的主机数量
    * successHostNum  该任务已扫描成功的主机数量
    * failedHostNum  该任务已扫描失败的主机数量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'scanType' => null,
        'startTime' => 'int64',
        'endTime' => 'int64',
        'scanVulTypes' => null,
        'status' => null,
        'scanningHostNum' => 'int32',
        'successHostNum' => 'int32',
        'failedHostNum' => 'int32'
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
    * id  任务ID
    * scanType  扫描任务的类型，包含如下：   -manual : 手动扫描任务   -schedule : 定时扫描任务
    * startTime  扫描任务开始的时间
    * endTime  扫描任务结束的时间
    * scanVulTypes  该任务扫描的漏洞类型列表
    * status  扫描任务的执行状态，包含如下：   -running : 扫描中   -finished : 扫描完成
    * scanningHostNum  该任务处于扫描中状态的主机数量
    * successHostNum  该任务已扫描成功的主机数量
    * failedHostNum  该任务已扫描失败的主机数量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'scanType' => 'scan_type',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'scanVulTypes' => 'scan_vul_types',
            'status' => 'status',
            'scanningHostNum' => 'scanning_host_num',
            'successHostNum' => 'success_host_num',
            'failedHostNum' => 'failed_host_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  任务ID
    * scanType  扫描任务的类型，包含如下：   -manual : 手动扫描任务   -schedule : 定时扫描任务
    * startTime  扫描任务开始的时间
    * endTime  扫描任务结束的时间
    * scanVulTypes  该任务扫描的漏洞类型列表
    * status  扫描任务的执行状态，包含如下：   -running : 扫描中   -finished : 扫描完成
    * scanningHostNum  该任务处于扫描中状态的主机数量
    * successHostNum  该任务已扫描成功的主机数量
    * failedHostNum  该任务已扫描失败的主机数量
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'scanType' => 'setScanType',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'scanVulTypes' => 'setScanVulTypes',
            'status' => 'setStatus',
            'scanningHostNum' => 'setScanningHostNum',
            'successHostNum' => 'setSuccessHostNum',
            'failedHostNum' => 'setFailedHostNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  任务ID
    * scanType  扫描任务的类型，包含如下：   -manual : 手动扫描任务   -schedule : 定时扫描任务
    * startTime  扫描任务开始的时间
    * endTime  扫描任务结束的时间
    * scanVulTypes  该任务扫描的漏洞类型列表
    * status  扫描任务的执行状态，包含如下：   -running : 扫描中   -finished : 扫描完成
    * scanningHostNum  该任务处于扫描中状态的主机数量
    * successHostNum  该任务已扫描成功的主机数量
    * failedHostNum  该任务已扫描失败的主机数量
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'scanType' => 'getScanType',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'scanVulTypes' => 'getScanVulTypes',
            'status' => 'getStatus',
            'scanningHostNum' => 'getScanningHostNum',
            'successHostNum' => 'getSuccessHostNum',
            'failedHostNum' => 'getFailedHostNum'
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
        $this->container['scanType'] = isset($data['scanType']) ? $data['scanType'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['scanVulTypes'] = isset($data['scanVulTypes']) ? $data['scanVulTypes'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['scanningHostNum'] = isset($data['scanningHostNum']) ? $data['scanningHostNum'] : null;
        $this->container['successHostNum'] = isset($data['successHostNum']) ? $data['successHostNum'] : null;
        $this->container['failedHostNum'] = isset($data['failedHostNum']) ? $data['failedHostNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 256)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['scanType']) && (mb_strlen($this->container['scanType']) > 128)) {
                $invalidProperties[] = "invalid value for 'scanType', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['scanType']) && (mb_strlen($this->container['scanType']) < 0)) {
                $invalidProperties[] = "invalid value for 'scanType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['startTime']) && ($this->container['startTime'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'startTime', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['startTime']) && ($this->container['startTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'startTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['endTime']) && ($this->container['endTime'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'endTime', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['endTime']) && ($this->container['endTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'endTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 32)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 1)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['scanningHostNum']) && ($this->container['scanningHostNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'scanningHostNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['scanningHostNum']) && ($this->container['scanningHostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'scanningHostNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['successHostNum']) && ($this->container['successHostNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'successHostNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['successHostNum']) && ($this->container['successHostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'successHostNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['failedHostNum']) && ($this->container['failedHostNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'failedHostNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['failedHostNum']) && ($this->container['failedHostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'failedHostNum', must be bigger than or equal to 0.";
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
    *  任务ID
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
    * @param string|null $id 任务ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets scanType
    *  扫描任务的类型，包含如下：   -manual : 手动扫描任务   -schedule : 定时扫描任务
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
    * @param string|null $scanType 扫描任务的类型，包含如下：   -manual : 手动扫描任务   -schedule : 定时扫描任务
    *
    * @return $this
    */
    public function setScanType($scanType)
    {
        $this->container['scanType'] = $scanType;
        return $this;
    }

    /**
    * Gets startTime
    *  扫描任务开始的时间
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
    * @param int|null $startTime 扫描任务开始的时间
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  扫描任务结束的时间
    *
    * @return int|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int|null $endTime 扫描任务结束的时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets scanVulTypes
    *  该任务扫描的漏洞类型列表
    *
    * @return string[]|null
    */
    public function getScanVulTypes()
    {
        return $this->container['scanVulTypes'];
    }

    /**
    * Sets scanVulTypes
    *
    * @param string[]|null $scanVulTypes 该任务扫描的漏洞类型列表
    *
    * @return $this
    */
    public function setScanVulTypes($scanVulTypes)
    {
        $this->container['scanVulTypes'] = $scanVulTypes;
        return $this;
    }

    /**
    * Gets status
    *  扫描任务的执行状态，包含如下：   -running : 扫描中   -finished : 扫描完成
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
    * @param string|null $status 扫描任务的执行状态，包含如下：   -running : 扫描中   -finished : 扫描完成
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets scanningHostNum
    *  该任务处于扫描中状态的主机数量
    *
    * @return int|null
    */
    public function getScanningHostNum()
    {
        return $this->container['scanningHostNum'];
    }

    /**
    * Sets scanningHostNum
    *
    * @param int|null $scanningHostNum 该任务处于扫描中状态的主机数量
    *
    * @return $this
    */
    public function setScanningHostNum($scanningHostNum)
    {
        $this->container['scanningHostNum'] = $scanningHostNum;
        return $this;
    }

    /**
    * Gets successHostNum
    *  该任务已扫描成功的主机数量
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
    * @param int|null $successHostNum 该任务已扫描成功的主机数量
    *
    * @return $this
    */
    public function setSuccessHostNum($successHostNum)
    {
        $this->container['successHostNum'] = $successHostNum;
        return $this;
    }

    /**
    * Gets failedHostNum
    *  该任务已扫描失败的主机数量
    *
    * @return int|null
    */
    public function getFailedHostNum()
    {
        return $this->container['failedHostNum'];
    }

    /**
    * Sets failedHostNum
    *
    * @param int|null $failedHostNum 该任务已扫描失败的主机数量
    *
    * @return $this
    */
    public function setFailedHostNum($failedHostNum)
    {
        $this->container['failedHostNum'] = $failedHostNum;
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

