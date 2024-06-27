<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ChDatabaseReplicationInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ChDatabaseReplicationInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sourceDatabase  源数据库。
    * targetDatabase  目标数据库。
    * status  当前状态。 取值范围： - normal：正常 - abnormal：异常
    * stage  同步阶段。 取值范围： - wait：等待同步 - failed：同步失败 - incremental：增量同步 - full：全量同步 - other：其他
    * percentage  进度百分比。
    * catchupStage  追赶阶段。 取值范围： - wait：等待同步 - failed：同步失败 - incremental：增量同步 - full：全量同步 - other：其他
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sourceDatabase' => 'string',
            'targetDatabase' => 'string',
            'status' => 'string',
            'stage' => 'string',
            'percentage' => 'string',
            'catchupStage' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sourceDatabase  源数据库。
    * targetDatabase  目标数据库。
    * status  当前状态。 取值范围： - normal：正常 - abnormal：异常
    * stage  同步阶段。 取值范围： - wait：等待同步 - failed：同步失败 - incremental：增量同步 - full：全量同步 - other：其他
    * percentage  进度百分比。
    * catchupStage  追赶阶段。 取值范围： - wait：等待同步 - failed：同步失败 - incremental：增量同步 - full：全量同步 - other：其他
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sourceDatabase' => null,
        'targetDatabase' => null,
        'status' => null,
        'stage' => null,
        'percentage' => null,
        'catchupStage' => null
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
    * sourceDatabase  源数据库。
    * targetDatabase  目标数据库。
    * status  当前状态。 取值范围： - normal：正常 - abnormal：异常
    * stage  同步阶段。 取值范围： - wait：等待同步 - failed：同步失败 - incremental：增量同步 - full：全量同步 - other：其他
    * percentage  进度百分比。
    * catchupStage  追赶阶段。 取值范围： - wait：等待同步 - failed：同步失败 - incremental：增量同步 - full：全量同步 - other：其他
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sourceDatabase' => 'source_database',
            'targetDatabase' => 'target_database',
            'status' => 'status',
            'stage' => 'stage',
            'percentage' => 'percentage',
            'catchupStage' => 'catchup_stage'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sourceDatabase  源数据库。
    * targetDatabase  目标数据库。
    * status  当前状态。 取值范围： - normal：正常 - abnormal：异常
    * stage  同步阶段。 取值范围： - wait：等待同步 - failed：同步失败 - incremental：增量同步 - full：全量同步 - other：其他
    * percentage  进度百分比。
    * catchupStage  追赶阶段。 取值范围： - wait：等待同步 - failed：同步失败 - incremental：增量同步 - full：全量同步 - other：其他
    *
    * @var string[]
    */
    protected static $setters = [
            'sourceDatabase' => 'setSourceDatabase',
            'targetDatabase' => 'setTargetDatabase',
            'status' => 'setStatus',
            'stage' => 'setStage',
            'percentage' => 'setPercentage',
            'catchupStage' => 'setCatchupStage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sourceDatabase  源数据库。
    * targetDatabase  目标数据库。
    * status  当前状态。 取值范围： - normal：正常 - abnormal：异常
    * stage  同步阶段。 取值范围： - wait：等待同步 - failed：同步失败 - incremental：增量同步 - full：全量同步 - other：其他
    * percentage  进度百分比。
    * catchupStage  追赶阶段。 取值范围： - wait：等待同步 - failed：同步失败 - incremental：增量同步 - full：全量同步 - other：其他
    *
    * @var string[]
    */
    protected static $getters = [
            'sourceDatabase' => 'getSourceDatabase',
            'targetDatabase' => 'getTargetDatabase',
            'status' => 'getStatus',
            'stage' => 'getStage',
            'percentage' => 'getPercentage',
            'catchupStage' => 'getCatchupStage'
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
        $this->container['sourceDatabase'] = isset($data['sourceDatabase']) ? $data['sourceDatabase'] : null;
        $this->container['targetDatabase'] = isset($data['targetDatabase']) ? $data['targetDatabase'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['stage'] = isset($data['stage']) ? $data['stage'] : null;
        $this->container['percentage'] = isset($data['percentage']) ? $data['percentage'] : null;
        $this->container['catchupStage'] = isset($data['catchupStage']) ? $data['catchupStage'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['sourceDatabase'] === null) {
            $invalidProperties[] = "'sourceDatabase' can't be null";
        }
        if ($this->container['targetDatabase'] === null) {
            $invalidProperties[] = "'targetDatabase' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['stage'] === null) {
            $invalidProperties[] = "'stage' can't be null";
        }
        if ($this->container['percentage'] === null) {
            $invalidProperties[] = "'percentage' can't be null";
        }
        if ($this->container['catchupStage'] === null) {
            $invalidProperties[] = "'catchupStage' can't be null";
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
    *  源数据库。
    *
    * @return string
    */
    public function getSourceDatabase()
    {
        return $this->container['sourceDatabase'];
    }

    /**
    * Sets sourceDatabase
    *
    * @param string $sourceDatabase 源数据库。
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
    * @return string
    */
    public function getTargetDatabase()
    {
        return $this->container['targetDatabase'];
    }

    /**
    * Sets targetDatabase
    *
    * @param string $targetDatabase 目标数据库。
    *
    * @return $this
    */
    public function setTargetDatabase($targetDatabase)
    {
        $this->container['targetDatabase'] = $targetDatabase;
        return $this;
    }

    /**
    * Gets status
    *  当前状态。 取值范围： - normal：正常 - abnormal：异常
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 当前状态。 取值范围： - normal：正常 - abnormal：异常
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
    *  同步阶段。 取值范围： - wait：等待同步 - failed：同步失败 - incremental：增量同步 - full：全量同步 - other：其他
    *
    * @return string
    */
    public function getStage()
    {
        return $this->container['stage'];
    }

    /**
    * Sets stage
    *
    * @param string $stage 同步阶段。 取值范围： - wait：等待同步 - failed：同步失败 - incremental：增量同步 - full：全量同步 - other：其他
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
    * @return string
    */
    public function getPercentage()
    {
        return $this->container['percentage'];
    }

    /**
    * Sets percentage
    *
    * @param string $percentage 进度百分比。
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
    *  追赶阶段。 取值范围： - wait：等待同步 - failed：同步失败 - incremental：增量同步 - full：全量同步 - other：其他
    *
    * @return string
    */
    public function getCatchupStage()
    {
        return $this->container['catchupStage'];
    }

    /**
    * Sets catchupStage
    *
    * @param string $catchupStage 追赶阶段。 取值范围： - wait：等待同步 - failed：同步失败 - incremental：增量同步 - full：全量同步 - other：其他
    *
    * @return $this
    */
    public function setCatchupStage($catchupStage)
    {
        $this->container['catchupStage'] = $catchupStage;
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

