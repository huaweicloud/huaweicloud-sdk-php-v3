<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListFactoryTaskOverviewResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListFactoryTaskOverviewResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * failCount  失败的实例数量
    * forceSuccessCount  强制成功的实例数量
    * freezeCount  冻结的实例数量
    * ignoreSuccessCount  忽略失败的实例数量
    * manualStopCount  取消的实例数量
    * pauseCount  暂时的实例数量
    * runningCount  运行中的实例数量
    * runningExceptionCount  异常的实例数量
    * skipCount  跳过的实例数量
    * successCount  运行成功的实例数量
    * totalCount  实例总数
    * waitingConfirmCount  待确认执行的实例数量
    * waitingCount  等待运行的实例数量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'failCount' => 'int',
            'forceSuccessCount' => 'int',
            'freezeCount' => 'int',
            'ignoreSuccessCount' => 'int',
            'manualStopCount' => 'int',
            'pauseCount' => 'int',
            'runningCount' => 'int',
            'runningExceptionCount' => 'int',
            'skipCount' => 'int',
            'successCount' => 'int',
            'totalCount' => 'int',
            'waitingConfirmCount' => 'int',
            'waitingCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * failCount  失败的实例数量
    * forceSuccessCount  强制成功的实例数量
    * freezeCount  冻结的实例数量
    * ignoreSuccessCount  忽略失败的实例数量
    * manualStopCount  取消的实例数量
    * pauseCount  暂时的实例数量
    * runningCount  运行中的实例数量
    * runningExceptionCount  异常的实例数量
    * skipCount  跳过的实例数量
    * successCount  运行成功的实例数量
    * totalCount  实例总数
    * waitingConfirmCount  待确认执行的实例数量
    * waitingCount  等待运行的实例数量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'failCount' => 'int32',
        'forceSuccessCount' => 'int32',
        'freezeCount' => 'int32',
        'ignoreSuccessCount' => 'int32',
        'manualStopCount' => 'int32',
        'pauseCount' => 'int32',
        'runningCount' => 'int32',
        'runningExceptionCount' => 'int32',
        'skipCount' => 'int32',
        'successCount' => 'int32',
        'totalCount' => 'int32',
        'waitingConfirmCount' => 'int32',
        'waitingCount' => 'int32'
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
    * failCount  失败的实例数量
    * forceSuccessCount  强制成功的实例数量
    * freezeCount  冻结的实例数量
    * ignoreSuccessCount  忽略失败的实例数量
    * manualStopCount  取消的实例数量
    * pauseCount  暂时的实例数量
    * runningCount  运行中的实例数量
    * runningExceptionCount  异常的实例数量
    * skipCount  跳过的实例数量
    * successCount  运行成功的实例数量
    * totalCount  实例总数
    * waitingConfirmCount  待确认执行的实例数量
    * waitingCount  等待运行的实例数量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'failCount' => 'fail_count',
            'forceSuccessCount' => 'force_success_count',
            'freezeCount' => 'freeze_count',
            'ignoreSuccessCount' => 'ignore_success_count',
            'manualStopCount' => 'manual_stop_count',
            'pauseCount' => 'pause_count',
            'runningCount' => 'running_count',
            'runningExceptionCount' => 'running_exception_count',
            'skipCount' => 'skip_count',
            'successCount' => 'success_count',
            'totalCount' => 'total_count',
            'waitingConfirmCount' => 'waiting_confirm_count',
            'waitingCount' => 'waiting_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * failCount  失败的实例数量
    * forceSuccessCount  强制成功的实例数量
    * freezeCount  冻结的实例数量
    * ignoreSuccessCount  忽略失败的实例数量
    * manualStopCount  取消的实例数量
    * pauseCount  暂时的实例数量
    * runningCount  运行中的实例数量
    * runningExceptionCount  异常的实例数量
    * skipCount  跳过的实例数量
    * successCount  运行成功的实例数量
    * totalCount  实例总数
    * waitingConfirmCount  待确认执行的实例数量
    * waitingCount  等待运行的实例数量
    *
    * @var string[]
    */
    protected static $setters = [
            'failCount' => 'setFailCount',
            'forceSuccessCount' => 'setForceSuccessCount',
            'freezeCount' => 'setFreezeCount',
            'ignoreSuccessCount' => 'setIgnoreSuccessCount',
            'manualStopCount' => 'setManualStopCount',
            'pauseCount' => 'setPauseCount',
            'runningCount' => 'setRunningCount',
            'runningExceptionCount' => 'setRunningExceptionCount',
            'skipCount' => 'setSkipCount',
            'successCount' => 'setSuccessCount',
            'totalCount' => 'setTotalCount',
            'waitingConfirmCount' => 'setWaitingConfirmCount',
            'waitingCount' => 'setWaitingCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * failCount  失败的实例数量
    * forceSuccessCount  强制成功的实例数量
    * freezeCount  冻结的实例数量
    * ignoreSuccessCount  忽略失败的实例数量
    * manualStopCount  取消的实例数量
    * pauseCount  暂时的实例数量
    * runningCount  运行中的实例数量
    * runningExceptionCount  异常的实例数量
    * skipCount  跳过的实例数量
    * successCount  运行成功的实例数量
    * totalCount  实例总数
    * waitingConfirmCount  待确认执行的实例数量
    * waitingCount  等待运行的实例数量
    *
    * @var string[]
    */
    protected static $getters = [
            'failCount' => 'getFailCount',
            'forceSuccessCount' => 'getForceSuccessCount',
            'freezeCount' => 'getFreezeCount',
            'ignoreSuccessCount' => 'getIgnoreSuccessCount',
            'manualStopCount' => 'getManualStopCount',
            'pauseCount' => 'getPauseCount',
            'runningCount' => 'getRunningCount',
            'runningExceptionCount' => 'getRunningExceptionCount',
            'skipCount' => 'getSkipCount',
            'successCount' => 'getSuccessCount',
            'totalCount' => 'getTotalCount',
            'waitingConfirmCount' => 'getWaitingConfirmCount',
            'waitingCount' => 'getWaitingCount'
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
        $this->container['failCount'] = isset($data['failCount']) ? $data['failCount'] : null;
        $this->container['forceSuccessCount'] = isset($data['forceSuccessCount']) ? $data['forceSuccessCount'] : null;
        $this->container['freezeCount'] = isset($data['freezeCount']) ? $data['freezeCount'] : null;
        $this->container['ignoreSuccessCount'] = isset($data['ignoreSuccessCount']) ? $data['ignoreSuccessCount'] : null;
        $this->container['manualStopCount'] = isset($data['manualStopCount']) ? $data['manualStopCount'] : null;
        $this->container['pauseCount'] = isset($data['pauseCount']) ? $data['pauseCount'] : null;
        $this->container['runningCount'] = isset($data['runningCount']) ? $data['runningCount'] : null;
        $this->container['runningExceptionCount'] = isset($data['runningExceptionCount']) ? $data['runningExceptionCount'] : null;
        $this->container['skipCount'] = isset($data['skipCount']) ? $data['skipCount'] : null;
        $this->container['successCount'] = isset($data['successCount']) ? $data['successCount'] : null;
        $this->container['totalCount'] = isset($data['totalCount']) ? $data['totalCount'] : null;
        $this->container['waitingConfirmCount'] = isset($data['waitingConfirmCount']) ? $data['waitingConfirmCount'] : null;
        $this->container['waitingCount'] = isset($data['waitingCount']) ? $data['waitingCount'] : null;
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
    * Gets failCount
    *  失败的实例数量
    *
    * @return int|null
    */
    public function getFailCount()
    {
        return $this->container['failCount'];
    }

    /**
    * Sets failCount
    *
    * @param int|null $failCount 失败的实例数量
    *
    * @return $this
    */
    public function setFailCount($failCount)
    {
        $this->container['failCount'] = $failCount;
        return $this;
    }

    /**
    * Gets forceSuccessCount
    *  强制成功的实例数量
    *
    * @return int|null
    */
    public function getForceSuccessCount()
    {
        return $this->container['forceSuccessCount'];
    }

    /**
    * Sets forceSuccessCount
    *
    * @param int|null $forceSuccessCount 强制成功的实例数量
    *
    * @return $this
    */
    public function setForceSuccessCount($forceSuccessCount)
    {
        $this->container['forceSuccessCount'] = $forceSuccessCount;
        return $this;
    }

    /**
    * Gets freezeCount
    *  冻结的实例数量
    *
    * @return int|null
    */
    public function getFreezeCount()
    {
        return $this->container['freezeCount'];
    }

    /**
    * Sets freezeCount
    *
    * @param int|null $freezeCount 冻结的实例数量
    *
    * @return $this
    */
    public function setFreezeCount($freezeCount)
    {
        $this->container['freezeCount'] = $freezeCount;
        return $this;
    }

    /**
    * Gets ignoreSuccessCount
    *  忽略失败的实例数量
    *
    * @return int|null
    */
    public function getIgnoreSuccessCount()
    {
        return $this->container['ignoreSuccessCount'];
    }

    /**
    * Sets ignoreSuccessCount
    *
    * @param int|null $ignoreSuccessCount 忽略失败的实例数量
    *
    * @return $this
    */
    public function setIgnoreSuccessCount($ignoreSuccessCount)
    {
        $this->container['ignoreSuccessCount'] = $ignoreSuccessCount;
        return $this;
    }

    /**
    * Gets manualStopCount
    *  取消的实例数量
    *
    * @return int|null
    */
    public function getManualStopCount()
    {
        return $this->container['manualStopCount'];
    }

    /**
    * Sets manualStopCount
    *
    * @param int|null $manualStopCount 取消的实例数量
    *
    * @return $this
    */
    public function setManualStopCount($manualStopCount)
    {
        $this->container['manualStopCount'] = $manualStopCount;
        return $this;
    }

    /**
    * Gets pauseCount
    *  暂时的实例数量
    *
    * @return int|null
    */
    public function getPauseCount()
    {
        return $this->container['pauseCount'];
    }

    /**
    * Sets pauseCount
    *
    * @param int|null $pauseCount 暂时的实例数量
    *
    * @return $this
    */
    public function setPauseCount($pauseCount)
    {
        $this->container['pauseCount'] = $pauseCount;
        return $this;
    }

    /**
    * Gets runningCount
    *  运行中的实例数量
    *
    * @return int|null
    */
    public function getRunningCount()
    {
        return $this->container['runningCount'];
    }

    /**
    * Sets runningCount
    *
    * @param int|null $runningCount 运行中的实例数量
    *
    * @return $this
    */
    public function setRunningCount($runningCount)
    {
        $this->container['runningCount'] = $runningCount;
        return $this;
    }

    /**
    * Gets runningExceptionCount
    *  异常的实例数量
    *
    * @return int|null
    */
    public function getRunningExceptionCount()
    {
        return $this->container['runningExceptionCount'];
    }

    /**
    * Sets runningExceptionCount
    *
    * @param int|null $runningExceptionCount 异常的实例数量
    *
    * @return $this
    */
    public function setRunningExceptionCount($runningExceptionCount)
    {
        $this->container['runningExceptionCount'] = $runningExceptionCount;
        return $this;
    }

    /**
    * Gets skipCount
    *  跳过的实例数量
    *
    * @return int|null
    */
    public function getSkipCount()
    {
        return $this->container['skipCount'];
    }

    /**
    * Sets skipCount
    *
    * @param int|null $skipCount 跳过的实例数量
    *
    * @return $this
    */
    public function setSkipCount($skipCount)
    {
        $this->container['skipCount'] = $skipCount;
        return $this;
    }

    /**
    * Gets successCount
    *  运行成功的实例数量
    *
    * @return int|null
    */
    public function getSuccessCount()
    {
        return $this->container['successCount'];
    }

    /**
    * Sets successCount
    *
    * @param int|null $successCount 运行成功的实例数量
    *
    * @return $this
    */
    public function setSuccessCount($successCount)
    {
        $this->container['successCount'] = $successCount;
        return $this;
    }

    /**
    * Gets totalCount
    *  实例总数
    *
    * @return int|null
    */
    public function getTotalCount()
    {
        return $this->container['totalCount'];
    }

    /**
    * Sets totalCount
    *
    * @param int|null $totalCount 实例总数
    *
    * @return $this
    */
    public function setTotalCount($totalCount)
    {
        $this->container['totalCount'] = $totalCount;
        return $this;
    }

    /**
    * Gets waitingConfirmCount
    *  待确认执行的实例数量
    *
    * @return int|null
    */
    public function getWaitingConfirmCount()
    {
        return $this->container['waitingConfirmCount'];
    }

    /**
    * Sets waitingConfirmCount
    *
    * @param int|null $waitingConfirmCount 待确认执行的实例数量
    *
    * @return $this
    */
    public function setWaitingConfirmCount($waitingConfirmCount)
    {
        $this->container['waitingConfirmCount'] = $waitingConfirmCount;
        return $this;
    }

    /**
    * Gets waitingCount
    *  等待运行的实例数量
    *
    * @return int|null
    */
    public function getWaitingCount()
    {
        return $this->container['waitingCount'];
    }

    /**
    * Sets waitingCount
    *
    * @param int|null $waitingCount 等待运行的实例数量
    *
    * @return $this
    */
    public function setWaitingCount($waitingCount)
    {
        $this->container['waitingCount'] = $waitingCount;
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

