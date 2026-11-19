<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VulScanTaskStatisticsResponseInfoLastScanTask implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VulScanTaskStatisticsResponseInfo_last_scan_task';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**: 任务ID **取值范围**: 字符长度1-128位
    * scanType  **参数解释**: 扫描任务类型 **取值范围**: - manual：手动扫描 - automatic：自动扫描
    * status  **参数解释**: 任务状态 **取值范围**: - finished：已完成 - running：运行中 - failed：失败
    * startTime  **参数解释**: 任务开始时间，Unix时间戳格式，单位为毫秒 **取值范围**: 最小值0，最大值9223372036854775807
    * endTime  **参数解释**: 任务结束时间，Unix时间戳格式，单位为毫秒 **取值范围**: 最小值0，最大值9223372036854775807
    * scanVulTypes  **参数解释**: 扫描的漏洞类型列表 **取值范围**: 0-100个漏洞类型
    * scanningHostNum  **参数解释**: 扫描中的主机数，Serverless场景下为POD实例数 **取值范围**: 最小值0，最大值2147483647
    * successHostNum  **参数解释**: 扫描成功的主机数，Serverless场景下为POD实例数 **取值范围**: 最小值0，最大值2147483647
    * riskyHostNum  riskyHostNum
    * failedHostNum  **参数解释**: 扫描失败的主机数，Serverless场景下为POD实例数 **取值范围**: 最小值0，最大值2147483647
    * estimatedTime  **参数解释**: 预计还需要多长时间，单位为秒 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'scanType' => 'string',
            'status' => 'string',
            'startTime' => 'int',
            'endTime' => 'int',
            'scanVulTypes' => 'string[]',
            'scanningHostNum' => 'int',
            'successHostNum' => 'int',
            'riskyHostNum' => '\HuaweiCloud\SDK\Hss\V5\Model\VulScanTaskStatisticsResponseInfoLastScanTaskRiskyHostNum',
            'failedHostNum' => 'int',
            'estimatedTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**: 任务ID **取值范围**: 字符长度1-128位
    * scanType  **参数解释**: 扫描任务类型 **取值范围**: - manual：手动扫描 - automatic：自动扫描
    * status  **参数解释**: 任务状态 **取值范围**: - finished：已完成 - running：运行中 - failed：失败
    * startTime  **参数解释**: 任务开始时间，Unix时间戳格式，单位为毫秒 **取值范围**: 最小值0，最大值9223372036854775807
    * endTime  **参数解释**: 任务结束时间，Unix时间戳格式，单位为毫秒 **取值范围**: 最小值0，最大值9223372036854775807
    * scanVulTypes  **参数解释**: 扫描的漏洞类型列表 **取值范围**: 0-100个漏洞类型
    * scanningHostNum  **参数解释**: 扫描中的主机数，Serverless场景下为POD实例数 **取值范围**: 最小值0，最大值2147483647
    * successHostNum  **参数解释**: 扫描成功的主机数，Serverless场景下为POD实例数 **取值范围**: 最小值0，最大值2147483647
    * riskyHostNum  riskyHostNum
    * failedHostNum  **参数解释**: 扫描失败的主机数，Serverless场景下为POD实例数 **取值范围**: 最小值0，最大值2147483647
    * estimatedTime  **参数解释**: 预计还需要多长时间，单位为秒 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'scanType' => null,
        'status' => null,
        'startTime' => 'int64',
        'endTime' => 'int64',
        'scanVulTypes' => null,
        'scanningHostNum' => 'int32',
        'successHostNum' => 'int32',
        'riskyHostNum' => null,
        'failedHostNum' => 'int32',
        'estimatedTime' => 'int32'
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
    * id  **参数解释**: 任务ID **取值范围**: 字符长度1-128位
    * scanType  **参数解释**: 扫描任务类型 **取值范围**: - manual：手动扫描 - automatic：自动扫描
    * status  **参数解释**: 任务状态 **取值范围**: - finished：已完成 - running：运行中 - failed：失败
    * startTime  **参数解释**: 任务开始时间，Unix时间戳格式，单位为毫秒 **取值范围**: 最小值0，最大值9223372036854775807
    * endTime  **参数解释**: 任务结束时间，Unix时间戳格式，单位为毫秒 **取值范围**: 最小值0，最大值9223372036854775807
    * scanVulTypes  **参数解释**: 扫描的漏洞类型列表 **取值范围**: 0-100个漏洞类型
    * scanningHostNum  **参数解释**: 扫描中的主机数，Serverless场景下为POD实例数 **取值范围**: 最小值0，最大值2147483647
    * successHostNum  **参数解释**: 扫描成功的主机数，Serverless场景下为POD实例数 **取值范围**: 最小值0，最大值2147483647
    * riskyHostNum  riskyHostNum
    * failedHostNum  **参数解释**: 扫描失败的主机数，Serverless场景下为POD实例数 **取值范围**: 最小值0，最大值2147483647
    * estimatedTime  **参数解释**: 预计还需要多长时间，单位为秒 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'scanType' => 'scan_type',
            'status' => 'status',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'scanVulTypes' => 'scan_vul_types',
            'scanningHostNum' => 'scanning_host_num',
            'successHostNum' => 'success_host_num',
            'riskyHostNum' => 'risky_host_num',
            'failedHostNum' => 'failed_host_num',
            'estimatedTime' => 'estimated_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**: 任务ID **取值范围**: 字符长度1-128位
    * scanType  **参数解释**: 扫描任务类型 **取值范围**: - manual：手动扫描 - automatic：自动扫描
    * status  **参数解释**: 任务状态 **取值范围**: - finished：已完成 - running：运行中 - failed：失败
    * startTime  **参数解释**: 任务开始时间，Unix时间戳格式，单位为毫秒 **取值范围**: 最小值0，最大值9223372036854775807
    * endTime  **参数解释**: 任务结束时间，Unix时间戳格式，单位为毫秒 **取值范围**: 最小值0，最大值9223372036854775807
    * scanVulTypes  **参数解释**: 扫描的漏洞类型列表 **取值范围**: 0-100个漏洞类型
    * scanningHostNum  **参数解释**: 扫描中的主机数，Serverless场景下为POD实例数 **取值范围**: 最小值0，最大值2147483647
    * successHostNum  **参数解释**: 扫描成功的主机数，Serverless场景下为POD实例数 **取值范围**: 最小值0，最大值2147483647
    * riskyHostNum  riskyHostNum
    * failedHostNum  **参数解释**: 扫描失败的主机数，Serverless场景下为POD实例数 **取值范围**: 最小值0，最大值2147483647
    * estimatedTime  **参数解释**: 预计还需要多长时间，单位为秒 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'scanType' => 'setScanType',
            'status' => 'setStatus',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'scanVulTypes' => 'setScanVulTypes',
            'scanningHostNum' => 'setScanningHostNum',
            'successHostNum' => 'setSuccessHostNum',
            'riskyHostNum' => 'setRiskyHostNum',
            'failedHostNum' => 'setFailedHostNum',
            'estimatedTime' => 'setEstimatedTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**: 任务ID **取值范围**: 字符长度1-128位
    * scanType  **参数解释**: 扫描任务类型 **取值范围**: - manual：手动扫描 - automatic：自动扫描
    * status  **参数解释**: 任务状态 **取值范围**: - finished：已完成 - running：运行中 - failed：失败
    * startTime  **参数解释**: 任务开始时间，Unix时间戳格式，单位为毫秒 **取值范围**: 最小值0，最大值9223372036854775807
    * endTime  **参数解释**: 任务结束时间，Unix时间戳格式，单位为毫秒 **取值范围**: 最小值0，最大值9223372036854775807
    * scanVulTypes  **参数解释**: 扫描的漏洞类型列表 **取值范围**: 0-100个漏洞类型
    * scanningHostNum  **参数解释**: 扫描中的主机数，Serverless场景下为POD实例数 **取值范围**: 最小值0，最大值2147483647
    * successHostNum  **参数解释**: 扫描成功的主机数，Serverless场景下为POD实例数 **取值范围**: 最小值0，最大值2147483647
    * riskyHostNum  riskyHostNum
    * failedHostNum  **参数解释**: 扫描失败的主机数，Serverless场景下为POD实例数 **取值范围**: 最小值0，最大值2147483647
    * estimatedTime  **参数解释**: 预计还需要多长时间，单位为秒 **取值范围**: 最小值0，最大值2147483647
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'scanType' => 'getScanType',
            'status' => 'getStatus',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'scanVulTypes' => 'getScanVulTypes',
            'scanningHostNum' => 'getScanningHostNum',
            'successHostNum' => 'getSuccessHostNum',
            'riskyHostNum' => 'getRiskyHostNum',
            'failedHostNum' => 'getFailedHostNum',
            'estimatedTime' => 'getEstimatedTime'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['scanVulTypes'] = isset($data['scanVulTypes']) ? $data['scanVulTypes'] : null;
        $this->container['scanningHostNum'] = isset($data['scanningHostNum']) ? $data['scanningHostNum'] : null;
        $this->container['successHostNum'] = isset($data['successHostNum']) ? $data['successHostNum'] : null;
        $this->container['riskyHostNum'] = isset($data['riskyHostNum']) ? $data['riskyHostNum'] : null;
        $this->container['failedHostNum'] = isset($data['failedHostNum']) ? $data['failedHostNum'] : null;
        $this->container['estimatedTime'] = isset($data['estimatedTime']) ? $data['estimatedTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 128)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['scanType']) && (mb_strlen($this->container['scanType']) > 32)) {
                $invalidProperties[] = "invalid value for 'scanType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['scanType']) && (mb_strlen($this->container['scanType']) < 1)) {
                $invalidProperties[] = "invalid value for 'scanType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['scanType']) && !preg_match("/^(manual|automatic)$/", $this->container['scanType'])) {
                $invalidProperties[] = "invalid value for 'scanType', must be conform to the pattern /^(manual|automatic)$/.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 32)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 1)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['status']) && !preg_match("/^(finished|running|failed)$/", $this->container['status'])) {
                $invalidProperties[] = "invalid value for 'status', must be conform to the pattern /^(finished|running|failed)$/.";
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
    *  **参数解释**: 任务ID **取值范围**: 字符长度1-128位
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
    * @param string|null $id **参数解释**: 任务ID **取值范围**: 字符长度1-128位
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
    *  **参数解释**: 扫描任务类型 **取值范围**: - manual：手动扫描 - automatic：自动扫描
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
    * @param string|null $scanType **参数解释**: 扫描任务类型 **取值范围**: - manual：手动扫描 - automatic：自动扫描
    *
    * @return $this
    */
    public function setScanType($scanType)
    {
        $this->container['scanType'] = $scanType;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**: 任务状态 **取值范围**: - finished：已完成 - running：运行中 - failed：失败
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
    * @param string|null $status **参数解释**: 任务状态 **取值范围**: - finished：已完成 - running：运行中 - failed：失败
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets startTime
    *  **参数解释**: 任务开始时间，Unix时间戳格式，单位为毫秒 **取值范围**: 最小值0，最大值9223372036854775807
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
    * @param int|null $startTime **参数解释**: 任务开始时间，Unix时间戳格式，单位为毫秒 **取值范围**: 最小值0，最大值9223372036854775807
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
    *  **参数解释**: 任务结束时间，Unix时间戳格式，单位为毫秒 **取值范围**: 最小值0，最大值9223372036854775807
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
    * @param int|null $endTime **参数解释**: 任务结束时间，Unix时间戳格式，单位为毫秒 **取值范围**: 最小值0，最大值9223372036854775807
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
    *  **参数解释**: 扫描的漏洞类型列表 **取值范围**: 0-100个漏洞类型
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
    * @param string[]|null $scanVulTypes **参数解释**: 扫描的漏洞类型列表 **取值范围**: 0-100个漏洞类型
    *
    * @return $this
    */
    public function setScanVulTypes($scanVulTypes)
    {
        $this->container['scanVulTypes'] = $scanVulTypes;
        return $this;
    }

    /**
    * Gets scanningHostNum
    *  **参数解释**: 扫描中的主机数，Serverless场景下为POD实例数 **取值范围**: 最小值0，最大值2147483647
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
    * @param int|null $scanningHostNum **参数解释**: 扫描中的主机数，Serverless场景下为POD实例数 **取值范围**: 最小值0，最大值2147483647
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
    *  **参数解释**: 扫描成功的主机数，Serverless场景下为POD实例数 **取值范围**: 最小值0，最大值2147483647
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
    * @param int|null $successHostNum **参数解释**: 扫描成功的主机数，Serverless场景下为POD实例数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setSuccessHostNum($successHostNum)
    {
        $this->container['successHostNum'] = $successHostNum;
        return $this;
    }

    /**
    * Gets riskyHostNum
    *  riskyHostNum
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\VulScanTaskStatisticsResponseInfoLastScanTaskRiskyHostNum|null
    */
    public function getRiskyHostNum()
    {
        return $this->container['riskyHostNum'];
    }

    /**
    * Sets riskyHostNum
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\VulScanTaskStatisticsResponseInfoLastScanTaskRiskyHostNum|null $riskyHostNum riskyHostNum
    *
    * @return $this
    */
    public function setRiskyHostNum($riskyHostNum)
    {
        $this->container['riskyHostNum'] = $riskyHostNum;
        return $this;
    }

    /**
    * Gets failedHostNum
    *  **参数解释**: 扫描失败的主机数，Serverless场景下为POD实例数 **取值范围**: 最小值0，最大值2147483647
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
    * @param int|null $failedHostNum **参数解释**: 扫描失败的主机数，Serverless场景下为POD实例数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setFailedHostNum($failedHostNum)
    {
        $this->container['failedHostNum'] = $failedHostNum;
        return $this;
    }

    /**
    * Gets estimatedTime
    *  **参数解释**: 预计还需要多长时间，单位为秒 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getEstimatedTime()
    {
        return $this->container['estimatedTime'];
    }

    /**
    * Sets estimatedTime
    *
    * @param int|null $estimatedTime **参数解释**: 预计还需要多长时间，单位为秒 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setEstimatedTime($estimatedTime)
    {
        $this->container['estimatedTime'] = $estimatedTime;
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

