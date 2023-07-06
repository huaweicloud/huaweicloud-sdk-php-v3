<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class JobProgressInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'JobProgressInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * progress  迁移对比百分比。
    * incrTransDelay  增量迁移时延（单位：s）。
    * incrTransDelayMillis  增量迁移时延（单位：ms）。
    * taskMode  迁移模式。
    * transferStatus  迁移状态。
    * processTime  迁移时间。
    * remainingTime  预计剩余时间。
    * progressMap  全量迁移进度详情。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'progress' => 'string',
            'incrTransDelay' => 'string',
            'incrTransDelayMillis' => 'string',
            'taskMode' => 'string',
            'transferStatus' => 'string',
            'processTime' => 'string',
            'remainingTime' => 'string',
            'progressMap' => 'map[string,\HuaweiCloud\SDK\Drs\V5\Model\ProgressCompleteInfo]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * progress  迁移对比百分比。
    * incrTransDelay  增量迁移时延（单位：s）。
    * incrTransDelayMillis  增量迁移时延（单位：ms）。
    * taskMode  迁移模式。
    * transferStatus  迁移状态。
    * processTime  迁移时间。
    * remainingTime  预计剩余时间。
    * progressMap  全量迁移进度详情。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'progress' => null,
        'incrTransDelay' => null,
        'incrTransDelayMillis' => null,
        'taskMode' => null,
        'transferStatus' => null,
        'processTime' => null,
        'remainingTime' => null,
        'progressMap' => null
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
    * progress  迁移对比百分比。
    * incrTransDelay  增量迁移时延（单位：s）。
    * incrTransDelayMillis  增量迁移时延（单位：ms）。
    * taskMode  迁移模式。
    * transferStatus  迁移状态。
    * processTime  迁移时间。
    * remainingTime  预计剩余时间。
    * progressMap  全量迁移进度详情。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'progress' => 'progress',
            'incrTransDelay' => 'incr_trans_delay',
            'incrTransDelayMillis' => 'incr_trans_delay_millis',
            'taskMode' => 'task_mode',
            'transferStatus' => 'transfer_status',
            'processTime' => 'process_time',
            'remainingTime' => 'remaining_time',
            'progressMap' => 'progress_map'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * progress  迁移对比百分比。
    * incrTransDelay  增量迁移时延（单位：s）。
    * incrTransDelayMillis  增量迁移时延（单位：ms）。
    * taskMode  迁移模式。
    * transferStatus  迁移状态。
    * processTime  迁移时间。
    * remainingTime  预计剩余时间。
    * progressMap  全量迁移进度详情。
    *
    * @var string[]
    */
    protected static $setters = [
            'progress' => 'setProgress',
            'incrTransDelay' => 'setIncrTransDelay',
            'incrTransDelayMillis' => 'setIncrTransDelayMillis',
            'taskMode' => 'setTaskMode',
            'transferStatus' => 'setTransferStatus',
            'processTime' => 'setProcessTime',
            'remainingTime' => 'setRemainingTime',
            'progressMap' => 'setProgressMap'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * progress  迁移对比百分比。
    * incrTransDelay  增量迁移时延（单位：s）。
    * incrTransDelayMillis  增量迁移时延（单位：ms）。
    * taskMode  迁移模式。
    * transferStatus  迁移状态。
    * processTime  迁移时间。
    * remainingTime  预计剩余时间。
    * progressMap  全量迁移进度详情。
    *
    * @var string[]
    */
    protected static $getters = [
            'progress' => 'getProgress',
            'incrTransDelay' => 'getIncrTransDelay',
            'incrTransDelayMillis' => 'getIncrTransDelayMillis',
            'taskMode' => 'getTaskMode',
            'transferStatus' => 'getTransferStatus',
            'processTime' => 'getProcessTime',
            'remainingTime' => 'getRemainingTime',
            'progressMap' => 'getProgressMap'
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
        $this->container['progress'] = isset($data['progress']) ? $data['progress'] : null;
        $this->container['incrTransDelay'] = isset($data['incrTransDelay']) ? $data['incrTransDelay'] : null;
        $this->container['incrTransDelayMillis'] = isset($data['incrTransDelayMillis']) ? $data['incrTransDelayMillis'] : null;
        $this->container['taskMode'] = isset($data['taskMode']) ? $data['taskMode'] : null;
        $this->container['transferStatus'] = isset($data['transferStatus']) ? $data['transferStatus'] : null;
        $this->container['processTime'] = isset($data['processTime']) ? $data['processTime'] : null;
        $this->container['remainingTime'] = isset($data['remainingTime']) ? $data['remainingTime'] : null;
        $this->container['progressMap'] = isset($data['progressMap']) ? $data['progressMap'] : null;
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
    * Gets progress
    *  迁移对比百分比。
    *
    * @return string|null
    */
    public function getProgress()
    {
        return $this->container['progress'];
    }

    /**
    * Sets progress
    *
    * @param string|null $progress 迁移对比百分比。
    *
    * @return $this
    */
    public function setProgress($progress)
    {
        $this->container['progress'] = $progress;
        return $this;
    }

    /**
    * Gets incrTransDelay
    *  增量迁移时延（单位：s）。
    *
    * @return string|null
    */
    public function getIncrTransDelay()
    {
        return $this->container['incrTransDelay'];
    }

    /**
    * Sets incrTransDelay
    *
    * @param string|null $incrTransDelay 增量迁移时延（单位：s）。
    *
    * @return $this
    */
    public function setIncrTransDelay($incrTransDelay)
    {
        $this->container['incrTransDelay'] = $incrTransDelay;
        return $this;
    }

    /**
    * Gets incrTransDelayMillis
    *  增量迁移时延（单位：ms）。
    *
    * @return string|null
    */
    public function getIncrTransDelayMillis()
    {
        return $this->container['incrTransDelayMillis'];
    }

    /**
    * Sets incrTransDelayMillis
    *
    * @param string|null $incrTransDelayMillis 增量迁移时延（单位：ms）。
    *
    * @return $this
    */
    public function setIncrTransDelayMillis($incrTransDelayMillis)
    {
        $this->container['incrTransDelayMillis'] = $incrTransDelayMillis;
        return $this;
    }

    /**
    * Gets taskMode
    *  迁移模式。
    *
    * @return string|null
    */
    public function getTaskMode()
    {
        return $this->container['taskMode'];
    }

    /**
    * Sets taskMode
    *
    * @param string|null $taskMode 迁移模式。
    *
    * @return $this
    */
    public function setTaskMode($taskMode)
    {
        $this->container['taskMode'] = $taskMode;
        return $this;
    }

    /**
    * Gets transferStatus
    *  迁移状态。
    *
    * @return string|null
    */
    public function getTransferStatus()
    {
        return $this->container['transferStatus'];
    }

    /**
    * Sets transferStatus
    *
    * @param string|null $transferStatus 迁移状态。
    *
    * @return $this
    */
    public function setTransferStatus($transferStatus)
    {
        $this->container['transferStatus'] = $transferStatus;
        return $this;
    }

    /**
    * Gets processTime
    *  迁移时间。
    *
    * @return string|null
    */
    public function getProcessTime()
    {
        return $this->container['processTime'];
    }

    /**
    * Sets processTime
    *
    * @param string|null $processTime 迁移时间。
    *
    * @return $this
    */
    public function setProcessTime($processTime)
    {
        $this->container['processTime'] = $processTime;
        return $this;
    }

    /**
    * Gets remainingTime
    *  预计剩余时间。
    *
    * @return string|null
    */
    public function getRemainingTime()
    {
        return $this->container['remainingTime'];
    }

    /**
    * Sets remainingTime
    *
    * @param string|null $remainingTime 预计剩余时间。
    *
    * @return $this
    */
    public function setRemainingTime($remainingTime)
    {
        $this->container['remainingTime'] = $remainingTime;
        return $this;
    }

    /**
    * Gets progressMap
    *  全量迁移进度详情。
    *
    * @return map[string,\HuaweiCloud\SDK\Drs\V5\Model\ProgressCompleteInfo]|null
    */
    public function getProgressMap()
    {
        return $this->container['progressMap'];
    }

    /**
    * Sets progressMap
    *
    * @param map[string,\HuaweiCloud\SDK\Drs\V5\Model\ProgressCompleteInfo]|null $progressMap 全量迁移进度详情。
    *
    * @return $this
    */
    public function setProgressMap($progressMap)
    {
        $this->container['progressMap'] = $progressMap;
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

