<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IsapJobModeSettingVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IsapJobModeSettingVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * batchOvertimeInterval  整型间隔时长
    * batchOvertimeUnit  batchOvertimeUnit
    * batchFrequencyInterval  整型间隔时长
    * batchFrequencyUnit  batchFrequencyUnit
    * streamingStateTtlInterval  整型间隔时长
    * streamingStateTtlUnit  streamingStateTtlUnit
    * streamingCheckpointTtlInterval  整型间隔时长
    * streamingCheckpointTtlUnit  streamingCheckpointTtlUnit
    * streamingStartupMode  streamingStartupMode
    * batchOvertimeStrategyInterval  整型间隔时长
    * batchOvertimeStrategyUnit  batchOvertimeStrategyUnit
    * searchDelayInterval  整型间隔时长
    * searchDelayUnit  searchDelayUnit
    * searchFrequencyInterval  整型间隔时长
    * searchFrequencyUnit  searchFrequencyUnit
    * searchOvertimeInterval  整型间隔时长
    * searchOvertimeUnit  searchOvertimeUnit
    * searchPeriodInterval  整型间隔时长
    * searchPeriodUnit  searchPeriodUnit
    * searchTableId  UUID
    * searchTableName  表名称
    * fieldNotNullPolicy  fieldNotNullPolicy
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'batchOvertimeInterval' => 'int',
            'batchOvertimeUnit' => '\HuaweiCloud\SDK\SecMaster\V2\Model\IsapTimeUnit',
            'batchFrequencyInterval' => 'int',
            'batchFrequencyUnit' => '\HuaweiCloud\SDK\SecMaster\V2\Model\IsapTimeUnit',
            'streamingStateTtlInterval' => 'int',
            'streamingStateTtlUnit' => '\HuaweiCloud\SDK\SecMaster\V2\Model\IsapTimeUnit',
            'streamingCheckpointTtlInterval' => 'int',
            'streamingCheckpointTtlUnit' => '\HuaweiCloud\SDK\SecMaster\V2\Model\IsapTimeUnit',
            'streamingStartupMode' => '\HuaweiCloud\SDK\SecMaster\V2\Model\IsapJobStartupModeEnum',
            'batchOvertimeStrategyInterval' => 'int',
            'batchOvertimeStrategyUnit' => '\HuaweiCloud\SDK\SecMaster\V2\Model\IsapTimeUnit',
            'searchDelayInterval' => 'int',
            'searchDelayUnit' => '\HuaweiCloud\SDK\SecMaster\V2\Model\IsapTimeUnit',
            'searchFrequencyInterval' => 'int',
            'searchFrequencyUnit' => '\HuaweiCloud\SDK\SecMaster\V2\Model\IsapTimeUnit',
            'searchOvertimeInterval' => 'int',
            'searchOvertimeUnit' => '\HuaweiCloud\SDK\SecMaster\V2\Model\IsapTimeUnit',
            'searchPeriodInterval' => 'int',
            'searchPeriodUnit' => '\HuaweiCloud\SDK\SecMaster\V2\Model\IsapTimeUnit',
            'searchTableId' => 'string',
            'searchTableName' => 'string',
            'fieldNotNullPolicy' => '\HuaweiCloud\SDK\SecMaster\V2\Model\IsapJobFieldNotNullPolicy'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * batchOvertimeInterval  整型间隔时长
    * batchOvertimeUnit  batchOvertimeUnit
    * batchFrequencyInterval  整型间隔时长
    * batchFrequencyUnit  batchFrequencyUnit
    * streamingStateTtlInterval  整型间隔时长
    * streamingStateTtlUnit  streamingStateTtlUnit
    * streamingCheckpointTtlInterval  整型间隔时长
    * streamingCheckpointTtlUnit  streamingCheckpointTtlUnit
    * streamingStartupMode  streamingStartupMode
    * batchOvertimeStrategyInterval  整型间隔时长
    * batchOvertimeStrategyUnit  batchOvertimeStrategyUnit
    * searchDelayInterval  整型间隔时长
    * searchDelayUnit  searchDelayUnit
    * searchFrequencyInterval  整型间隔时长
    * searchFrequencyUnit  searchFrequencyUnit
    * searchOvertimeInterval  整型间隔时长
    * searchOvertimeUnit  searchOvertimeUnit
    * searchPeriodInterval  整型间隔时长
    * searchPeriodUnit  searchPeriodUnit
    * searchTableId  UUID
    * searchTableName  表名称
    * fieldNotNullPolicy  fieldNotNullPolicy
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'batchOvertimeInterval' => 'int32',
        'batchOvertimeUnit' => null,
        'batchFrequencyInterval' => 'int32',
        'batchFrequencyUnit' => null,
        'streamingStateTtlInterval' => 'int32',
        'streamingStateTtlUnit' => null,
        'streamingCheckpointTtlInterval' => 'int32',
        'streamingCheckpointTtlUnit' => null,
        'streamingStartupMode' => null,
        'batchOvertimeStrategyInterval' => 'int32',
        'batchOvertimeStrategyUnit' => null,
        'searchDelayInterval' => 'int32',
        'searchDelayUnit' => null,
        'searchFrequencyInterval' => 'int32',
        'searchFrequencyUnit' => null,
        'searchOvertimeInterval' => 'int32',
        'searchOvertimeUnit' => null,
        'searchPeriodInterval' => 'int32',
        'searchPeriodUnit' => null,
        'searchTableId' => null,
        'searchTableName' => null,
        'fieldNotNullPolicy' => null
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
    * batchOvertimeInterval  整型间隔时长
    * batchOvertimeUnit  batchOvertimeUnit
    * batchFrequencyInterval  整型间隔时长
    * batchFrequencyUnit  batchFrequencyUnit
    * streamingStateTtlInterval  整型间隔时长
    * streamingStateTtlUnit  streamingStateTtlUnit
    * streamingCheckpointTtlInterval  整型间隔时长
    * streamingCheckpointTtlUnit  streamingCheckpointTtlUnit
    * streamingStartupMode  streamingStartupMode
    * batchOvertimeStrategyInterval  整型间隔时长
    * batchOvertimeStrategyUnit  batchOvertimeStrategyUnit
    * searchDelayInterval  整型间隔时长
    * searchDelayUnit  searchDelayUnit
    * searchFrequencyInterval  整型间隔时长
    * searchFrequencyUnit  searchFrequencyUnit
    * searchOvertimeInterval  整型间隔时长
    * searchOvertimeUnit  searchOvertimeUnit
    * searchPeriodInterval  整型间隔时长
    * searchPeriodUnit  searchPeriodUnit
    * searchTableId  UUID
    * searchTableName  表名称
    * fieldNotNullPolicy  fieldNotNullPolicy
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'batchOvertimeInterval' => 'batch_overtime_interval',
            'batchOvertimeUnit' => 'batch_overtime_unit',
            'batchFrequencyInterval' => 'batch_frequency_interval',
            'batchFrequencyUnit' => 'batch_frequency_unit',
            'streamingStateTtlInterval' => 'streaming_state_ttl_interval',
            'streamingStateTtlUnit' => 'streaming_state_ttl_unit',
            'streamingCheckpointTtlInterval' => 'streaming_checkpoint_ttl_interval',
            'streamingCheckpointTtlUnit' => 'streaming_checkpoint_ttl_unit',
            'streamingStartupMode' => 'streaming_startup_mode',
            'batchOvertimeStrategyInterval' => 'batch_overtime_strategy_interval',
            'batchOvertimeStrategyUnit' => 'batch_overtime_strategy_unit',
            'searchDelayInterval' => 'search_delay_interval',
            'searchDelayUnit' => 'search_delay_unit',
            'searchFrequencyInterval' => 'search_frequency_interval',
            'searchFrequencyUnit' => 'search_frequency_unit',
            'searchOvertimeInterval' => 'search_overtime_interval',
            'searchOvertimeUnit' => 'search_overtime_unit',
            'searchPeriodInterval' => 'search_period_interval',
            'searchPeriodUnit' => 'search_period_unit',
            'searchTableId' => 'search_table_id',
            'searchTableName' => 'search_table_name',
            'fieldNotNullPolicy' => 'field_not_null_policy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * batchOvertimeInterval  整型间隔时长
    * batchOvertimeUnit  batchOvertimeUnit
    * batchFrequencyInterval  整型间隔时长
    * batchFrequencyUnit  batchFrequencyUnit
    * streamingStateTtlInterval  整型间隔时长
    * streamingStateTtlUnit  streamingStateTtlUnit
    * streamingCheckpointTtlInterval  整型间隔时长
    * streamingCheckpointTtlUnit  streamingCheckpointTtlUnit
    * streamingStartupMode  streamingStartupMode
    * batchOvertimeStrategyInterval  整型间隔时长
    * batchOvertimeStrategyUnit  batchOvertimeStrategyUnit
    * searchDelayInterval  整型间隔时长
    * searchDelayUnit  searchDelayUnit
    * searchFrequencyInterval  整型间隔时长
    * searchFrequencyUnit  searchFrequencyUnit
    * searchOvertimeInterval  整型间隔时长
    * searchOvertimeUnit  searchOvertimeUnit
    * searchPeriodInterval  整型间隔时长
    * searchPeriodUnit  searchPeriodUnit
    * searchTableId  UUID
    * searchTableName  表名称
    * fieldNotNullPolicy  fieldNotNullPolicy
    *
    * @var string[]
    */
    protected static $setters = [
            'batchOvertimeInterval' => 'setBatchOvertimeInterval',
            'batchOvertimeUnit' => 'setBatchOvertimeUnit',
            'batchFrequencyInterval' => 'setBatchFrequencyInterval',
            'batchFrequencyUnit' => 'setBatchFrequencyUnit',
            'streamingStateTtlInterval' => 'setStreamingStateTtlInterval',
            'streamingStateTtlUnit' => 'setStreamingStateTtlUnit',
            'streamingCheckpointTtlInterval' => 'setStreamingCheckpointTtlInterval',
            'streamingCheckpointTtlUnit' => 'setStreamingCheckpointTtlUnit',
            'streamingStartupMode' => 'setStreamingStartupMode',
            'batchOvertimeStrategyInterval' => 'setBatchOvertimeStrategyInterval',
            'batchOvertimeStrategyUnit' => 'setBatchOvertimeStrategyUnit',
            'searchDelayInterval' => 'setSearchDelayInterval',
            'searchDelayUnit' => 'setSearchDelayUnit',
            'searchFrequencyInterval' => 'setSearchFrequencyInterval',
            'searchFrequencyUnit' => 'setSearchFrequencyUnit',
            'searchOvertimeInterval' => 'setSearchOvertimeInterval',
            'searchOvertimeUnit' => 'setSearchOvertimeUnit',
            'searchPeriodInterval' => 'setSearchPeriodInterval',
            'searchPeriodUnit' => 'setSearchPeriodUnit',
            'searchTableId' => 'setSearchTableId',
            'searchTableName' => 'setSearchTableName',
            'fieldNotNullPolicy' => 'setFieldNotNullPolicy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * batchOvertimeInterval  整型间隔时长
    * batchOvertimeUnit  batchOvertimeUnit
    * batchFrequencyInterval  整型间隔时长
    * batchFrequencyUnit  batchFrequencyUnit
    * streamingStateTtlInterval  整型间隔时长
    * streamingStateTtlUnit  streamingStateTtlUnit
    * streamingCheckpointTtlInterval  整型间隔时长
    * streamingCheckpointTtlUnit  streamingCheckpointTtlUnit
    * streamingStartupMode  streamingStartupMode
    * batchOvertimeStrategyInterval  整型间隔时长
    * batchOvertimeStrategyUnit  batchOvertimeStrategyUnit
    * searchDelayInterval  整型间隔时长
    * searchDelayUnit  searchDelayUnit
    * searchFrequencyInterval  整型间隔时长
    * searchFrequencyUnit  searchFrequencyUnit
    * searchOvertimeInterval  整型间隔时长
    * searchOvertimeUnit  searchOvertimeUnit
    * searchPeriodInterval  整型间隔时长
    * searchPeriodUnit  searchPeriodUnit
    * searchTableId  UUID
    * searchTableName  表名称
    * fieldNotNullPolicy  fieldNotNullPolicy
    *
    * @var string[]
    */
    protected static $getters = [
            'batchOvertimeInterval' => 'getBatchOvertimeInterval',
            'batchOvertimeUnit' => 'getBatchOvertimeUnit',
            'batchFrequencyInterval' => 'getBatchFrequencyInterval',
            'batchFrequencyUnit' => 'getBatchFrequencyUnit',
            'streamingStateTtlInterval' => 'getStreamingStateTtlInterval',
            'streamingStateTtlUnit' => 'getStreamingStateTtlUnit',
            'streamingCheckpointTtlInterval' => 'getStreamingCheckpointTtlInterval',
            'streamingCheckpointTtlUnit' => 'getStreamingCheckpointTtlUnit',
            'streamingStartupMode' => 'getStreamingStartupMode',
            'batchOvertimeStrategyInterval' => 'getBatchOvertimeStrategyInterval',
            'batchOvertimeStrategyUnit' => 'getBatchOvertimeStrategyUnit',
            'searchDelayInterval' => 'getSearchDelayInterval',
            'searchDelayUnit' => 'getSearchDelayUnit',
            'searchFrequencyInterval' => 'getSearchFrequencyInterval',
            'searchFrequencyUnit' => 'getSearchFrequencyUnit',
            'searchOvertimeInterval' => 'getSearchOvertimeInterval',
            'searchOvertimeUnit' => 'getSearchOvertimeUnit',
            'searchPeriodInterval' => 'getSearchPeriodInterval',
            'searchPeriodUnit' => 'getSearchPeriodUnit',
            'searchTableId' => 'getSearchTableId',
            'searchTableName' => 'getSearchTableName',
            'fieldNotNullPolicy' => 'getFieldNotNullPolicy'
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
        $this->container['batchOvertimeInterval'] = isset($data['batchOvertimeInterval']) ? $data['batchOvertimeInterval'] : null;
        $this->container['batchOvertimeUnit'] = isset($data['batchOvertimeUnit']) ? $data['batchOvertimeUnit'] : null;
        $this->container['batchFrequencyInterval'] = isset($data['batchFrequencyInterval']) ? $data['batchFrequencyInterval'] : null;
        $this->container['batchFrequencyUnit'] = isset($data['batchFrequencyUnit']) ? $data['batchFrequencyUnit'] : null;
        $this->container['streamingStateTtlInterval'] = isset($data['streamingStateTtlInterval']) ? $data['streamingStateTtlInterval'] : null;
        $this->container['streamingStateTtlUnit'] = isset($data['streamingStateTtlUnit']) ? $data['streamingStateTtlUnit'] : null;
        $this->container['streamingCheckpointTtlInterval'] = isset($data['streamingCheckpointTtlInterval']) ? $data['streamingCheckpointTtlInterval'] : null;
        $this->container['streamingCheckpointTtlUnit'] = isset($data['streamingCheckpointTtlUnit']) ? $data['streamingCheckpointTtlUnit'] : null;
        $this->container['streamingStartupMode'] = isset($data['streamingStartupMode']) ? $data['streamingStartupMode'] : null;
        $this->container['batchOvertimeStrategyInterval'] = isset($data['batchOvertimeStrategyInterval']) ? $data['batchOvertimeStrategyInterval'] : null;
        $this->container['batchOvertimeStrategyUnit'] = isset($data['batchOvertimeStrategyUnit']) ? $data['batchOvertimeStrategyUnit'] : null;
        $this->container['searchDelayInterval'] = isset($data['searchDelayInterval']) ? $data['searchDelayInterval'] : null;
        $this->container['searchDelayUnit'] = isset($data['searchDelayUnit']) ? $data['searchDelayUnit'] : null;
        $this->container['searchFrequencyInterval'] = isset($data['searchFrequencyInterval']) ? $data['searchFrequencyInterval'] : null;
        $this->container['searchFrequencyUnit'] = isset($data['searchFrequencyUnit']) ? $data['searchFrequencyUnit'] : null;
        $this->container['searchOvertimeInterval'] = isset($data['searchOvertimeInterval']) ? $data['searchOvertimeInterval'] : null;
        $this->container['searchOvertimeUnit'] = isset($data['searchOvertimeUnit']) ? $data['searchOvertimeUnit'] : null;
        $this->container['searchPeriodInterval'] = isset($data['searchPeriodInterval']) ? $data['searchPeriodInterval'] : null;
        $this->container['searchPeriodUnit'] = isset($data['searchPeriodUnit']) ? $data['searchPeriodUnit'] : null;
        $this->container['searchTableId'] = isset($data['searchTableId']) ? $data['searchTableId'] : null;
        $this->container['searchTableName'] = isset($data['searchTableName']) ? $data['searchTableName'] : null;
        $this->container['fieldNotNullPolicy'] = isset($data['fieldNotNullPolicy']) ? $data['fieldNotNullPolicy'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['batchOvertimeInterval']) && ($this->container['batchOvertimeInterval'] > 2147483630)) {
                $invalidProperties[] = "invalid value for 'batchOvertimeInterval', must be smaller than or equal to 2147483630.";
            }
            if (!is_null($this->container['batchOvertimeInterval']) && ($this->container['batchOvertimeInterval'] < 0)) {
                $invalidProperties[] = "invalid value for 'batchOvertimeInterval', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['batchFrequencyInterval']) && ($this->container['batchFrequencyInterval'] > 2147483630)) {
                $invalidProperties[] = "invalid value for 'batchFrequencyInterval', must be smaller than or equal to 2147483630.";
            }
            if (!is_null($this->container['batchFrequencyInterval']) && ($this->container['batchFrequencyInterval'] < 0)) {
                $invalidProperties[] = "invalid value for 'batchFrequencyInterval', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['streamingStateTtlInterval']) && ($this->container['streamingStateTtlInterval'] > 2147483630)) {
                $invalidProperties[] = "invalid value for 'streamingStateTtlInterval', must be smaller than or equal to 2147483630.";
            }
            if (!is_null($this->container['streamingStateTtlInterval']) && ($this->container['streamingStateTtlInterval'] < 0)) {
                $invalidProperties[] = "invalid value for 'streamingStateTtlInterval', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['streamingCheckpointTtlInterval']) && ($this->container['streamingCheckpointTtlInterval'] > 2147483630)) {
                $invalidProperties[] = "invalid value for 'streamingCheckpointTtlInterval', must be smaller than or equal to 2147483630.";
            }
            if (!is_null($this->container['streamingCheckpointTtlInterval']) && ($this->container['streamingCheckpointTtlInterval'] < 0)) {
                $invalidProperties[] = "invalid value for 'streamingCheckpointTtlInterval', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['batchOvertimeStrategyInterval']) && ($this->container['batchOvertimeStrategyInterval'] > 2147483630)) {
                $invalidProperties[] = "invalid value for 'batchOvertimeStrategyInterval', must be smaller than or equal to 2147483630.";
            }
            if (!is_null($this->container['batchOvertimeStrategyInterval']) && ($this->container['batchOvertimeStrategyInterval'] < 0)) {
                $invalidProperties[] = "invalid value for 'batchOvertimeStrategyInterval', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['searchDelayInterval']) && ($this->container['searchDelayInterval'] > 2147483630)) {
                $invalidProperties[] = "invalid value for 'searchDelayInterval', must be smaller than or equal to 2147483630.";
            }
            if (!is_null($this->container['searchDelayInterval']) && ($this->container['searchDelayInterval'] < 0)) {
                $invalidProperties[] = "invalid value for 'searchDelayInterval', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['searchFrequencyInterval']) && ($this->container['searchFrequencyInterval'] > 2147483630)) {
                $invalidProperties[] = "invalid value for 'searchFrequencyInterval', must be smaller than or equal to 2147483630.";
            }
            if (!is_null($this->container['searchFrequencyInterval']) && ($this->container['searchFrequencyInterval'] < 0)) {
                $invalidProperties[] = "invalid value for 'searchFrequencyInterval', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['searchOvertimeInterval']) && ($this->container['searchOvertimeInterval'] > 2147483630)) {
                $invalidProperties[] = "invalid value for 'searchOvertimeInterval', must be smaller than or equal to 2147483630.";
            }
            if (!is_null($this->container['searchOvertimeInterval']) && ($this->container['searchOvertimeInterval'] < 0)) {
                $invalidProperties[] = "invalid value for 'searchOvertimeInterval', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['searchPeriodInterval']) && ($this->container['searchPeriodInterval'] > 2147483630)) {
                $invalidProperties[] = "invalid value for 'searchPeriodInterval', must be smaller than or equal to 2147483630.";
            }
            if (!is_null($this->container['searchPeriodInterval']) && ($this->container['searchPeriodInterval'] < 0)) {
                $invalidProperties[] = "invalid value for 'searchPeriodInterval', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['searchTableId']) && (mb_strlen($this->container['searchTableId']) > 36)) {
                $invalidProperties[] = "invalid value for 'searchTableId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['searchTableId']) && (mb_strlen($this->container['searchTableId']) < 36)) {
                $invalidProperties[] = "invalid value for 'searchTableId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['searchTableName']) && (mb_strlen($this->container['searchTableName']) > 64)) {
                $invalidProperties[] = "invalid value for 'searchTableName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['searchTableName']) && (mb_strlen($this->container['searchTableName']) < 1)) {
                $invalidProperties[] = "invalid value for 'searchTableName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['searchTableName']) && !preg_match("/^(?!_)[a-zA-Z][a-zA-Z0-9_]*(?<!_)$/", $this->container['searchTableName'])) {
                $invalidProperties[] = "invalid value for 'searchTableName', must be conform to the pattern /^(?!_)[a-zA-Z][a-zA-Z0-9_]*(?<!_)$/.";
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
    * Gets batchOvertimeInterval
    *  整型间隔时长
    *
    * @return int|null
    */
    public function getBatchOvertimeInterval()
    {
        return $this->container['batchOvertimeInterval'];
    }

    /**
    * Sets batchOvertimeInterval
    *
    * @param int|null $batchOvertimeInterval 整型间隔时长
    *
    * @return $this
    */
    public function setBatchOvertimeInterval($batchOvertimeInterval)
    {
        $this->container['batchOvertimeInterval'] = $batchOvertimeInterval;
        return $this;
    }

    /**
    * Gets batchOvertimeUnit
    *  batchOvertimeUnit
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\IsapTimeUnit|null
    */
    public function getBatchOvertimeUnit()
    {
        return $this->container['batchOvertimeUnit'];
    }

    /**
    * Sets batchOvertimeUnit
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\IsapTimeUnit|null $batchOvertimeUnit batchOvertimeUnit
    *
    * @return $this
    */
    public function setBatchOvertimeUnit($batchOvertimeUnit)
    {
        $this->container['batchOvertimeUnit'] = $batchOvertimeUnit;
        return $this;
    }

    /**
    * Gets batchFrequencyInterval
    *  整型间隔时长
    *
    * @return int|null
    */
    public function getBatchFrequencyInterval()
    {
        return $this->container['batchFrequencyInterval'];
    }

    /**
    * Sets batchFrequencyInterval
    *
    * @param int|null $batchFrequencyInterval 整型间隔时长
    *
    * @return $this
    */
    public function setBatchFrequencyInterval($batchFrequencyInterval)
    {
        $this->container['batchFrequencyInterval'] = $batchFrequencyInterval;
        return $this;
    }

    /**
    * Gets batchFrequencyUnit
    *  batchFrequencyUnit
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\IsapTimeUnit|null
    */
    public function getBatchFrequencyUnit()
    {
        return $this->container['batchFrequencyUnit'];
    }

    /**
    * Sets batchFrequencyUnit
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\IsapTimeUnit|null $batchFrequencyUnit batchFrequencyUnit
    *
    * @return $this
    */
    public function setBatchFrequencyUnit($batchFrequencyUnit)
    {
        $this->container['batchFrequencyUnit'] = $batchFrequencyUnit;
        return $this;
    }

    /**
    * Gets streamingStateTtlInterval
    *  整型间隔时长
    *
    * @return int|null
    */
    public function getStreamingStateTtlInterval()
    {
        return $this->container['streamingStateTtlInterval'];
    }

    /**
    * Sets streamingStateTtlInterval
    *
    * @param int|null $streamingStateTtlInterval 整型间隔时长
    *
    * @return $this
    */
    public function setStreamingStateTtlInterval($streamingStateTtlInterval)
    {
        $this->container['streamingStateTtlInterval'] = $streamingStateTtlInterval;
        return $this;
    }

    /**
    * Gets streamingStateTtlUnit
    *  streamingStateTtlUnit
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\IsapTimeUnit|null
    */
    public function getStreamingStateTtlUnit()
    {
        return $this->container['streamingStateTtlUnit'];
    }

    /**
    * Sets streamingStateTtlUnit
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\IsapTimeUnit|null $streamingStateTtlUnit streamingStateTtlUnit
    *
    * @return $this
    */
    public function setStreamingStateTtlUnit($streamingStateTtlUnit)
    {
        $this->container['streamingStateTtlUnit'] = $streamingStateTtlUnit;
        return $this;
    }

    /**
    * Gets streamingCheckpointTtlInterval
    *  整型间隔时长
    *
    * @return int|null
    */
    public function getStreamingCheckpointTtlInterval()
    {
        return $this->container['streamingCheckpointTtlInterval'];
    }

    /**
    * Sets streamingCheckpointTtlInterval
    *
    * @param int|null $streamingCheckpointTtlInterval 整型间隔时长
    *
    * @return $this
    */
    public function setStreamingCheckpointTtlInterval($streamingCheckpointTtlInterval)
    {
        $this->container['streamingCheckpointTtlInterval'] = $streamingCheckpointTtlInterval;
        return $this;
    }

    /**
    * Gets streamingCheckpointTtlUnit
    *  streamingCheckpointTtlUnit
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\IsapTimeUnit|null
    */
    public function getStreamingCheckpointTtlUnit()
    {
        return $this->container['streamingCheckpointTtlUnit'];
    }

    /**
    * Sets streamingCheckpointTtlUnit
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\IsapTimeUnit|null $streamingCheckpointTtlUnit streamingCheckpointTtlUnit
    *
    * @return $this
    */
    public function setStreamingCheckpointTtlUnit($streamingCheckpointTtlUnit)
    {
        $this->container['streamingCheckpointTtlUnit'] = $streamingCheckpointTtlUnit;
        return $this;
    }

    /**
    * Gets streamingStartupMode
    *  streamingStartupMode
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\IsapJobStartupModeEnum|null
    */
    public function getStreamingStartupMode()
    {
        return $this->container['streamingStartupMode'];
    }

    /**
    * Sets streamingStartupMode
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\IsapJobStartupModeEnum|null $streamingStartupMode streamingStartupMode
    *
    * @return $this
    */
    public function setStreamingStartupMode($streamingStartupMode)
    {
        $this->container['streamingStartupMode'] = $streamingStartupMode;
        return $this;
    }

    /**
    * Gets batchOvertimeStrategyInterval
    *  整型间隔时长
    *
    * @return int|null
    */
    public function getBatchOvertimeStrategyInterval()
    {
        return $this->container['batchOvertimeStrategyInterval'];
    }

    /**
    * Sets batchOvertimeStrategyInterval
    *
    * @param int|null $batchOvertimeStrategyInterval 整型间隔时长
    *
    * @return $this
    */
    public function setBatchOvertimeStrategyInterval($batchOvertimeStrategyInterval)
    {
        $this->container['batchOvertimeStrategyInterval'] = $batchOvertimeStrategyInterval;
        return $this;
    }

    /**
    * Gets batchOvertimeStrategyUnit
    *  batchOvertimeStrategyUnit
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\IsapTimeUnit|null
    */
    public function getBatchOvertimeStrategyUnit()
    {
        return $this->container['batchOvertimeStrategyUnit'];
    }

    /**
    * Sets batchOvertimeStrategyUnit
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\IsapTimeUnit|null $batchOvertimeStrategyUnit batchOvertimeStrategyUnit
    *
    * @return $this
    */
    public function setBatchOvertimeStrategyUnit($batchOvertimeStrategyUnit)
    {
        $this->container['batchOvertimeStrategyUnit'] = $batchOvertimeStrategyUnit;
        return $this;
    }

    /**
    * Gets searchDelayInterval
    *  整型间隔时长
    *
    * @return int|null
    */
    public function getSearchDelayInterval()
    {
        return $this->container['searchDelayInterval'];
    }

    /**
    * Sets searchDelayInterval
    *
    * @param int|null $searchDelayInterval 整型间隔时长
    *
    * @return $this
    */
    public function setSearchDelayInterval($searchDelayInterval)
    {
        $this->container['searchDelayInterval'] = $searchDelayInterval;
        return $this;
    }

    /**
    * Gets searchDelayUnit
    *  searchDelayUnit
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\IsapTimeUnit|null
    */
    public function getSearchDelayUnit()
    {
        return $this->container['searchDelayUnit'];
    }

    /**
    * Sets searchDelayUnit
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\IsapTimeUnit|null $searchDelayUnit searchDelayUnit
    *
    * @return $this
    */
    public function setSearchDelayUnit($searchDelayUnit)
    {
        $this->container['searchDelayUnit'] = $searchDelayUnit;
        return $this;
    }

    /**
    * Gets searchFrequencyInterval
    *  整型间隔时长
    *
    * @return int|null
    */
    public function getSearchFrequencyInterval()
    {
        return $this->container['searchFrequencyInterval'];
    }

    /**
    * Sets searchFrequencyInterval
    *
    * @param int|null $searchFrequencyInterval 整型间隔时长
    *
    * @return $this
    */
    public function setSearchFrequencyInterval($searchFrequencyInterval)
    {
        $this->container['searchFrequencyInterval'] = $searchFrequencyInterval;
        return $this;
    }

    /**
    * Gets searchFrequencyUnit
    *  searchFrequencyUnit
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\IsapTimeUnit|null
    */
    public function getSearchFrequencyUnit()
    {
        return $this->container['searchFrequencyUnit'];
    }

    /**
    * Sets searchFrequencyUnit
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\IsapTimeUnit|null $searchFrequencyUnit searchFrequencyUnit
    *
    * @return $this
    */
    public function setSearchFrequencyUnit($searchFrequencyUnit)
    {
        $this->container['searchFrequencyUnit'] = $searchFrequencyUnit;
        return $this;
    }

    /**
    * Gets searchOvertimeInterval
    *  整型间隔时长
    *
    * @return int|null
    */
    public function getSearchOvertimeInterval()
    {
        return $this->container['searchOvertimeInterval'];
    }

    /**
    * Sets searchOvertimeInterval
    *
    * @param int|null $searchOvertimeInterval 整型间隔时长
    *
    * @return $this
    */
    public function setSearchOvertimeInterval($searchOvertimeInterval)
    {
        $this->container['searchOvertimeInterval'] = $searchOvertimeInterval;
        return $this;
    }

    /**
    * Gets searchOvertimeUnit
    *  searchOvertimeUnit
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\IsapTimeUnit|null
    */
    public function getSearchOvertimeUnit()
    {
        return $this->container['searchOvertimeUnit'];
    }

    /**
    * Sets searchOvertimeUnit
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\IsapTimeUnit|null $searchOvertimeUnit searchOvertimeUnit
    *
    * @return $this
    */
    public function setSearchOvertimeUnit($searchOvertimeUnit)
    {
        $this->container['searchOvertimeUnit'] = $searchOvertimeUnit;
        return $this;
    }

    /**
    * Gets searchPeriodInterval
    *  整型间隔时长
    *
    * @return int|null
    */
    public function getSearchPeriodInterval()
    {
        return $this->container['searchPeriodInterval'];
    }

    /**
    * Sets searchPeriodInterval
    *
    * @param int|null $searchPeriodInterval 整型间隔时长
    *
    * @return $this
    */
    public function setSearchPeriodInterval($searchPeriodInterval)
    {
        $this->container['searchPeriodInterval'] = $searchPeriodInterval;
        return $this;
    }

    /**
    * Gets searchPeriodUnit
    *  searchPeriodUnit
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\IsapTimeUnit|null
    */
    public function getSearchPeriodUnit()
    {
        return $this->container['searchPeriodUnit'];
    }

    /**
    * Sets searchPeriodUnit
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\IsapTimeUnit|null $searchPeriodUnit searchPeriodUnit
    *
    * @return $this
    */
    public function setSearchPeriodUnit($searchPeriodUnit)
    {
        $this->container['searchPeriodUnit'] = $searchPeriodUnit;
        return $this;
    }

    /**
    * Gets searchTableId
    *  UUID
    *
    * @return string|null
    */
    public function getSearchTableId()
    {
        return $this->container['searchTableId'];
    }

    /**
    * Sets searchTableId
    *
    * @param string|null $searchTableId UUID
    *
    * @return $this
    */
    public function setSearchTableId($searchTableId)
    {
        $this->container['searchTableId'] = $searchTableId;
        return $this;
    }

    /**
    * Gets searchTableName
    *  表名称
    *
    * @return string|null
    */
    public function getSearchTableName()
    {
        return $this->container['searchTableName'];
    }

    /**
    * Sets searchTableName
    *
    * @param string|null $searchTableName 表名称
    *
    * @return $this
    */
    public function setSearchTableName($searchTableName)
    {
        $this->container['searchTableName'] = $searchTableName;
        return $this;
    }

    /**
    * Gets fieldNotNullPolicy
    *  fieldNotNullPolicy
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\IsapJobFieldNotNullPolicy|null
    */
    public function getFieldNotNullPolicy()
    {
        return $this->container['fieldNotNullPolicy'];
    }

    /**
    * Sets fieldNotNullPolicy
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\IsapJobFieldNotNullPolicy|null $fieldNotNullPolicy fieldNotNullPolicy
    *
    * @return $this
    */
    public function setFieldNotNullPolicy($fieldNotNullPolicy)
    {
        $this->container['fieldNotNullPolicy'] = $fieldNotNullPolicy;
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

