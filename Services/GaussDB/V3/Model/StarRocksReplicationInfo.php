<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StarRocksReplicationInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StarRocksReplicationInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sourceDatabase  TaurusDB数据库。
    * targetDatabase  目标数据库。
    * taskName  同步任务名。
    * status  当前状态。Yes:正常;No:异常。
    * stage  同步阶段。wait:等待同步;incremental:增量同步;full:全量同步;cancelled:删除;paused:暂停同步。
    * percentage  进度百分比。
    * catchupStage  追赶阶段。wait:等待同步;incremental:增量同步;full:全量同步;cancelled:删除;paused:暂停同步。
    * catchupPercentage  追赶进度百分比。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sourceDatabase' => 'string',
            'targetDatabase' => 'string',
            'taskName' => 'string',
            'status' => 'string',
            'stage' => 'string',
            'percentage' => 'string',
            'catchupStage' => 'string',
            'catchupPercentage' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sourceDatabase  TaurusDB数据库。
    * targetDatabase  目标数据库。
    * taskName  同步任务名。
    * status  当前状态。Yes:正常;No:异常。
    * stage  同步阶段。wait:等待同步;incremental:增量同步;full:全量同步;cancelled:删除;paused:暂停同步。
    * percentage  进度百分比。
    * catchupStage  追赶阶段。wait:等待同步;incremental:增量同步;full:全量同步;cancelled:删除;paused:暂停同步。
    * catchupPercentage  追赶进度百分比。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sourceDatabase' => null,
        'targetDatabase' => null,
        'taskName' => null,
        'status' => null,
        'stage' => null,
        'percentage' => null,
        'catchupStage' => null,
        'catchupPercentage' => null
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
    * sourceDatabase  TaurusDB数据库。
    * targetDatabase  目标数据库。
    * taskName  同步任务名。
    * status  当前状态。Yes:正常;No:异常。
    * stage  同步阶段。wait:等待同步;incremental:增量同步;full:全量同步;cancelled:删除;paused:暂停同步。
    * percentage  进度百分比。
    * catchupStage  追赶阶段。wait:等待同步;incremental:增量同步;full:全量同步;cancelled:删除;paused:暂停同步。
    * catchupPercentage  追赶进度百分比。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sourceDatabase' => 'source_database',
            'targetDatabase' => 'target_database',
            'taskName' => 'task_name',
            'status' => 'status',
            'stage' => 'stage',
            'percentage' => 'percentage',
            'catchupStage' => 'catchup_stage',
            'catchupPercentage' => 'catchup_percentage'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sourceDatabase  TaurusDB数据库。
    * targetDatabase  目标数据库。
    * taskName  同步任务名。
    * status  当前状态。Yes:正常;No:异常。
    * stage  同步阶段。wait:等待同步;incremental:增量同步;full:全量同步;cancelled:删除;paused:暂停同步。
    * percentage  进度百分比。
    * catchupStage  追赶阶段。wait:等待同步;incremental:增量同步;full:全量同步;cancelled:删除;paused:暂停同步。
    * catchupPercentage  追赶进度百分比。
    *
    * @var string[]
    */
    protected static $setters = [
            'sourceDatabase' => 'setSourceDatabase',
            'targetDatabase' => 'setTargetDatabase',
            'taskName' => 'setTaskName',
            'status' => 'setStatus',
            'stage' => 'setStage',
            'percentage' => 'setPercentage',
            'catchupStage' => 'setCatchupStage',
            'catchupPercentage' => 'setCatchupPercentage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sourceDatabase  TaurusDB数据库。
    * targetDatabase  目标数据库。
    * taskName  同步任务名。
    * status  当前状态。Yes:正常;No:异常。
    * stage  同步阶段。wait:等待同步;incremental:增量同步;full:全量同步;cancelled:删除;paused:暂停同步。
    * percentage  进度百分比。
    * catchupStage  追赶阶段。wait:等待同步;incremental:增量同步;full:全量同步;cancelled:删除;paused:暂停同步。
    * catchupPercentage  追赶进度百分比。
    *
    * @var string[]
    */
    protected static $getters = [
            'sourceDatabase' => 'getSourceDatabase',
            'targetDatabase' => 'getTargetDatabase',
            'taskName' => 'getTaskName',
            'status' => 'getStatus',
            'stage' => 'getStage',
            'percentage' => 'getPercentage',
            'catchupStage' => 'getCatchupStage',
            'catchupPercentage' => 'getCatchupPercentage'
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
    const STATUS_YES = 'Yes';
    const STATUS_NO = 'No';
    const STAGE_WAIT = 'wait';
    const STAGE_INCREMENTAL = 'incremental';
    const STAGE_FULL = 'full';
    const STAGE_CANCELLED = 'cancelled';
    const STAGE_PAUSED = 'paused';
    const CATCHUP_STAGE_WAIT = 'wait';
    const CATCHUP_STAGE_INCREMENTAL = 'incremental';
    const CATCHUP_STAGE_FULL = 'full';
    const CATCHUP_STAGE_CANCELLED = 'cancelled';
    const CATCHUP_STAGE_PAUSED = 'paused';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_YES,
            self::STATUS_NO,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStageAllowableValues()
    {
        return [
            self::STAGE_WAIT,
            self::STAGE_INCREMENTAL,
            self::STAGE_FULL,
            self::STAGE_CANCELLED,
            self::STAGE_PAUSED,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCatchupStageAllowableValues()
    {
        return [
            self::CATCHUP_STAGE_WAIT,
            self::CATCHUP_STAGE_INCREMENTAL,
            self::CATCHUP_STAGE_FULL,
            self::CATCHUP_STAGE_CANCELLED,
            self::CATCHUP_STAGE_PAUSED,
        ];
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
        $this->container['sourceDatabase'] = isset($data['sourceDatabase']) ? $data['sourceDatabase'] : null;
        $this->container['targetDatabase'] = isset($data['targetDatabase']) ? $data['targetDatabase'] : null;
        $this->container['taskName'] = isset($data['taskName']) ? $data['taskName'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['stage'] = isset($data['stage']) ? $data['stage'] : null;
        $this->container['percentage'] = isset($data['percentage']) ? $data['percentage'] : null;
        $this->container['catchupStage'] = isset($data['catchupStage']) ? $data['catchupStage'] : null;
        $this->container['catchupPercentage'] = isset($data['catchupPercentage']) ? $data['catchupPercentage'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['sourceDatabase']) && (mb_strlen($this->container['sourceDatabase']) > 1024)) {
                $invalidProperties[] = "invalid value for 'sourceDatabase', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['sourceDatabase']) && (mb_strlen($this->container['sourceDatabase']) < 2)) {
                $invalidProperties[] = "invalid value for 'sourceDatabase', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['targetDatabase']) && (mb_strlen($this->container['targetDatabase']) > 128)) {
                $invalidProperties[] = "invalid value for 'targetDatabase', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['targetDatabase']) && (mb_strlen($this->container['targetDatabase']) < 3)) {
                $invalidProperties[] = "invalid value for 'targetDatabase', the character length must be bigger than or equal to 3.";
            }
            if (!is_null($this->container['taskName']) && (mb_strlen($this->container['taskName']) > 128)) {
                $invalidProperties[] = "invalid value for 'taskName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['taskName']) && (mb_strlen($this->container['taskName']) < 3)) {
                $invalidProperties[] = "invalid value for 'taskName', the character length must be bigger than or equal to 3.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 5)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 5.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 2)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 2.";
            }
            $allowedValues = $this->getStageAllowableValues();
                if (!is_null($this->container['stage']) && !in_array($this->container['stage'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'stage', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['stage']) && (mb_strlen($this->container['stage']) > 64)) {
                $invalidProperties[] = "invalid value for 'stage', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['stage']) && (mb_strlen($this->container['stage']) < 3)) {
                $invalidProperties[] = "invalid value for 'stage', the character length must be bigger than or equal to 3.";
            }
            if (!is_null($this->container['percentage']) && (mb_strlen($this->container['percentage']) > 5)) {
                $invalidProperties[] = "invalid value for 'percentage', the character length must be smaller than or equal to 5.";
            }
            if (!is_null($this->container['percentage']) && (mb_strlen($this->container['percentage']) < 2)) {
                $invalidProperties[] = "invalid value for 'percentage', the character length must be bigger than or equal to 2.";
            }
            $allowedValues = $this->getCatchupStageAllowableValues();
                if (!is_null($this->container['catchupStage']) && !in_array($this->container['catchupStage'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'catchupStage', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['catchupStage']) && (mb_strlen($this->container['catchupStage']) > 64)) {
                $invalidProperties[] = "invalid value for 'catchupStage', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['catchupStage']) && (mb_strlen($this->container['catchupStage']) < 3)) {
                $invalidProperties[] = "invalid value for 'catchupStage', the character length must be bigger than or equal to 3.";
            }
            if (!is_null($this->container['catchupPercentage']) && (mb_strlen($this->container['catchupPercentage']) > 5)) {
                $invalidProperties[] = "invalid value for 'catchupPercentage', the character length must be smaller than or equal to 5.";
            }
            if (!is_null($this->container['catchupPercentage']) && (mb_strlen($this->container['catchupPercentage']) < 2)) {
                $invalidProperties[] = "invalid value for 'catchupPercentage', the character length must be bigger than or equal to 2.";
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
    * Gets sourceDatabase
    *  TaurusDB数据库。
    *
    * @return string|null
    */
    public function getSourceDatabase()
    {
        return $this->container['sourceDatabase'];
    }

    /**
    * Sets sourceDatabase
    *
    * @param string|null $sourceDatabase TaurusDB数据库。
    *
    * @return $this
    */
    public function setSourceDatabase($sourceDatabase)
    {
        $this->container['sourceDatabase'] = $sourceDatabase;
        return $this;
    }

    /**
    * Gets targetDatabase
    *  目标数据库。
    *
    * @return string|null
    */
    public function getTargetDatabase()
    {
        return $this->container['targetDatabase'];
    }

    /**
    * Sets targetDatabase
    *
    * @param string|null $targetDatabase 目标数据库。
    *
    * @return $this
    */
    public function setTargetDatabase($targetDatabase)
    {
        $this->container['targetDatabase'] = $targetDatabase;
        return $this;
    }

    /**
    * Gets taskName
    *  同步任务名。
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
    * @param string|null $taskName 同步任务名。
    *
    * @return $this
    */
    public function setTaskName($taskName)
    {
        $this->container['taskName'] = $taskName;
        return $this;
    }

    /**
    * Gets status
    *  当前状态。Yes:正常;No:异常。
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
    * @param string|null $status 当前状态。Yes:正常;No:异常。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets stage
    *  同步阶段。wait:等待同步;incremental:增量同步;full:全量同步;cancelled:删除;paused:暂停同步。
    *
    * @return string|null
    */
    public function getStage()
    {
        return $this->container['stage'];
    }

    /**
    * Sets stage
    *
    * @param string|null $stage 同步阶段。wait:等待同步;incremental:增量同步;full:全量同步;cancelled:删除;paused:暂停同步。
    *
    * @return $this
    */
    public function setStage($stage)
    {
        $this->container['stage'] = $stage;
        return $this;
    }

    /**
    * Gets percentage
    *  进度百分比。
    *
    * @return string|null
    */
    public function getPercentage()
    {
        return $this->container['percentage'];
    }

    /**
    * Sets percentage
    *
    * @param string|null $percentage 进度百分比。
    *
    * @return $this
    */
    public function setPercentage($percentage)
    {
        $this->container['percentage'] = $percentage;
        return $this;
    }

    /**
    * Gets catchupStage
    *  追赶阶段。wait:等待同步;incremental:增量同步;full:全量同步;cancelled:删除;paused:暂停同步。
    *
    * @return string|null
    */
    public function getCatchupStage()
    {
        return $this->container['catchupStage'];
    }

    /**
    * Sets catchupStage
    *
    * @param string|null $catchupStage 追赶阶段。wait:等待同步;incremental:增量同步;full:全量同步;cancelled:删除;paused:暂停同步。
    *
    * @return $this
    */
    public function setCatchupStage($catchupStage)
    {
        $this->container['catchupStage'] = $catchupStage;
        return $this;
    }

    /**
    * Gets catchupPercentage
    *  追赶进度百分比。
    *
    * @return string|null
    */
    public function getCatchupPercentage()
    {
        return $this->container['catchupPercentage'];
    }

    /**
    * Sets catchupPercentage
    *
    * @param string|null $catchupPercentage 追赶进度百分比。
    *
    * @return $this
    */
    public function setCatchupPercentage($catchupPercentage)
    {
        $this->container['catchupPercentage'] = $catchupPercentage;
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

