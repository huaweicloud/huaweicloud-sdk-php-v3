<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowReplayProgressResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowReplayProgressResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * progress  回放进度的百分数
    * parseCount  需要解析的总数
    * replayCount  回放的总数
    * taskMode  迁移模式
    * processTime  迁移时间
    * transferStatus  迁移状态
    * maxTime  回放最大时间
    * minTime  回放最小时间
    * nowTime  回放当前时间
    * minExportTime  回放报告最小时间
    * maxExportTime  回放报告最大时间
    * replaySqlNowList  正在回放的sql列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'progress' => 'int',
            'parseCount' => 'int',
            'replayCount' => 'int',
            'taskMode' => 'string',
            'processTime' => 'int',
            'transferStatus' => 'string',
            'maxTime' => 'int',
            'minTime' => 'int',
            'nowTime' => 'int',
            'minExportTime' => 'int',
            'maxExportTime' => 'int',
            'replaySqlNowList' => '\HuaweiCloud\SDK\Drs\V5\Model\ReplaySqlNowInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * progress  回放进度的百分数
    * parseCount  需要解析的总数
    * replayCount  回放的总数
    * taskMode  迁移模式
    * processTime  迁移时间
    * transferStatus  迁移状态
    * maxTime  回放最大时间
    * minTime  回放最小时间
    * nowTime  回放当前时间
    * minExportTime  回放报告最小时间
    * maxExportTime  回放报告最大时间
    * replaySqlNowList  正在回放的sql列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'progress' => 'int64',
        'parseCount' => 'int64',
        'replayCount' => 'int64',
        'taskMode' => null,
        'processTime' => 'int64',
        'transferStatus' => null,
        'maxTime' => 'int64',
        'minTime' => 'int64',
        'nowTime' => 'int64',
        'minExportTime' => 'int64',
        'maxExportTime' => 'int64',
        'replaySqlNowList' => null
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
    * progress  回放进度的百分数
    * parseCount  需要解析的总数
    * replayCount  回放的总数
    * taskMode  迁移模式
    * processTime  迁移时间
    * transferStatus  迁移状态
    * maxTime  回放最大时间
    * minTime  回放最小时间
    * nowTime  回放当前时间
    * minExportTime  回放报告最小时间
    * maxExportTime  回放报告最大时间
    * replaySqlNowList  正在回放的sql列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'progress' => 'progress',
            'parseCount' => 'parse_count',
            'replayCount' => 'replay_count',
            'taskMode' => 'task_mode',
            'processTime' => 'process_time',
            'transferStatus' => 'transfer_status',
            'maxTime' => 'max_time',
            'minTime' => 'min_time',
            'nowTime' => 'now_time',
            'minExportTime' => 'min_export_time',
            'maxExportTime' => 'max_export_time',
            'replaySqlNowList' => 'replay_sql_now_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * progress  回放进度的百分数
    * parseCount  需要解析的总数
    * replayCount  回放的总数
    * taskMode  迁移模式
    * processTime  迁移时间
    * transferStatus  迁移状态
    * maxTime  回放最大时间
    * minTime  回放最小时间
    * nowTime  回放当前时间
    * minExportTime  回放报告最小时间
    * maxExportTime  回放报告最大时间
    * replaySqlNowList  正在回放的sql列表
    *
    * @var string[]
    */
    protected static $setters = [
            'progress' => 'setProgress',
            'parseCount' => 'setParseCount',
            'replayCount' => 'setReplayCount',
            'taskMode' => 'setTaskMode',
            'processTime' => 'setProcessTime',
            'transferStatus' => 'setTransferStatus',
            'maxTime' => 'setMaxTime',
            'minTime' => 'setMinTime',
            'nowTime' => 'setNowTime',
            'minExportTime' => 'setMinExportTime',
            'maxExportTime' => 'setMaxExportTime',
            'replaySqlNowList' => 'setReplaySqlNowList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * progress  回放进度的百分数
    * parseCount  需要解析的总数
    * replayCount  回放的总数
    * taskMode  迁移模式
    * processTime  迁移时间
    * transferStatus  迁移状态
    * maxTime  回放最大时间
    * minTime  回放最小时间
    * nowTime  回放当前时间
    * minExportTime  回放报告最小时间
    * maxExportTime  回放报告最大时间
    * replaySqlNowList  正在回放的sql列表
    *
    * @var string[]
    */
    protected static $getters = [
            'progress' => 'getProgress',
            'parseCount' => 'getParseCount',
            'replayCount' => 'getReplayCount',
            'taskMode' => 'getTaskMode',
            'processTime' => 'getProcessTime',
            'transferStatus' => 'getTransferStatus',
            'maxTime' => 'getMaxTime',
            'minTime' => 'getMinTime',
            'nowTime' => 'getNowTime',
            'minExportTime' => 'getMinExportTime',
            'maxExportTime' => 'getMaxExportTime',
            'replaySqlNowList' => 'getReplaySqlNowList'
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
        $this->container['parseCount'] = isset($data['parseCount']) ? $data['parseCount'] : null;
        $this->container['replayCount'] = isset($data['replayCount']) ? $data['replayCount'] : null;
        $this->container['taskMode'] = isset($data['taskMode']) ? $data['taskMode'] : null;
        $this->container['processTime'] = isset($data['processTime']) ? $data['processTime'] : null;
        $this->container['transferStatus'] = isset($data['transferStatus']) ? $data['transferStatus'] : null;
        $this->container['maxTime'] = isset($data['maxTime']) ? $data['maxTime'] : null;
        $this->container['minTime'] = isset($data['minTime']) ? $data['minTime'] : null;
        $this->container['nowTime'] = isset($data['nowTime']) ? $data['nowTime'] : null;
        $this->container['minExportTime'] = isset($data['minExportTime']) ? $data['minExportTime'] : null;
        $this->container['maxExportTime'] = isset($data['maxExportTime']) ? $data['maxExportTime'] : null;
        $this->container['replaySqlNowList'] = isset($data['replaySqlNowList']) ? $data['replaySqlNowList'] : null;
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
    *  回放进度的百分数
    *
    * @return int|null
    */
    public function getProgress()
    {
        return $this->container['progress'];
    }

    /**
    * Sets progress
    *
    * @param int|null $progress 回放进度的百分数
    *
    * @return $this
    */
    public function setProgress($progress)
    {
        $this->container['progress'] = $progress;
        return $this;
    }

    /**
    * Gets parseCount
    *  需要解析的总数
    *
    * @return int|null
    */
    public function getParseCount()
    {
        return $this->container['parseCount'];
    }

    /**
    * Sets parseCount
    *
    * @param int|null $parseCount 需要解析的总数
    *
    * @return $this
    */
    public function setParseCount($parseCount)
    {
        $this->container['parseCount'] = $parseCount;
        return $this;
    }

    /**
    * Gets replayCount
    *  回放的总数
    *
    * @return int|null
    */
    public function getReplayCount()
    {
        return $this->container['replayCount'];
    }

    /**
    * Sets replayCount
    *
    * @param int|null $replayCount 回放的总数
    *
    * @return $this
    */
    public function setReplayCount($replayCount)
    {
        $this->container['replayCount'] = $replayCount;
        return $this;
    }

    /**
    * Gets taskMode
    *  迁移模式
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
    * @param string|null $taskMode 迁移模式
    *
    * @return $this
    */
    public function setTaskMode($taskMode)
    {
        $this->container['taskMode'] = $taskMode;
        return $this;
    }

    /**
    * Gets processTime
    *  迁移时间
    *
    * @return int|null
    */
    public function getProcessTime()
    {
        return $this->container['processTime'];
    }

    /**
    * Sets processTime
    *
    * @param int|null $processTime 迁移时间
    *
    * @return $this
    */
    public function setProcessTime($processTime)
    {
        $this->container['processTime'] = $processTime;
        return $this;
    }

    /**
    * Gets transferStatus
    *  迁移状态
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
    * @param string|null $transferStatus 迁移状态
    *
    * @return $this
    */
    public function setTransferStatus($transferStatus)
    {
        $this->container['transferStatus'] = $transferStatus;
        return $this;
    }

    /**
    * Gets maxTime
    *  回放最大时间
    *
    * @return int|null
    */
    public function getMaxTime()
    {
        return $this->container['maxTime'];
    }

    /**
    * Sets maxTime
    *
    * @param int|null $maxTime 回放最大时间
    *
    * @return $this
    */
    public function setMaxTime($maxTime)
    {
        $this->container['maxTime'] = $maxTime;
        return $this;
    }

    /**
    * Gets minTime
    *  回放最小时间
    *
    * @return int|null
    */
    public function getMinTime()
    {
        return $this->container['minTime'];
    }

    /**
    * Sets minTime
    *
    * @param int|null $minTime 回放最小时间
    *
    * @return $this
    */
    public function setMinTime($minTime)
    {
        $this->container['minTime'] = $minTime;
        return $this;
    }

    /**
    * Gets nowTime
    *  回放当前时间
    *
    * @return int|null
    */
    public function getNowTime()
    {
        return $this->container['nowTime'];
    }

    /**
    * Sets nowTime
    *
    * @param int|null $nowTime 回放当前时间
    *
    * @return $this
    */
    public function setNowTime($nowTime)
    {
        $this->container['nowTime'] = $nowTime;
        return $this;
    }

    /**
    * Gets minExportTime
    *  回放报告最小时间
    *
    * @return int|null
    */
    public function getMinExportTime()
    {
        return $this->container['minExportTime'];
    }

    /**
    * Sets minExportTime
    *
    * @param int|null $minExportTime 回放报告最小时间
    *
    * @return $this
    */
    public function setMinExportTime($minExportTime)
    {
        $this->container['minExportTime'] = $minExportTime;
        return $this;
    }

    /**
    * Gets maxExportTime
    *  回放报告最大时间
    *
    * @return int|null
    */
    public function getMaxExportTime()
    {
        return $this->container['maxExportTime'];
    }

    /**
    * Sets maxExportTime
    *
    * @param int|null $maxExportTime 回放报告最大时间
    *
    * @return $this
    */
    public function setMaxExportTime($maxExportTime)
    {
        $this->container['maxExportTime'] = $maxExportTime;
        return $this;
    }

    /**
    * Gets replaySqlNowList
    *  正在回放的sql列表
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\ReplaySqlNowInfo[]|null
    */
    public function getReplaySqlNowList()
    {
        return $this->container['replaySqlNowList'];
    }

    /**
    * Sets replaySqlNowList
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\ReplaySqlNowInfo[]|null $replaySqlNowList 正在回放的sql列表
    *
    * @return $this
    */
    public function setReplaySqlNowList($replaySqlNowList)
    {
        $this->container['replaySqlNowList'] = $replaySqlNowList;
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

