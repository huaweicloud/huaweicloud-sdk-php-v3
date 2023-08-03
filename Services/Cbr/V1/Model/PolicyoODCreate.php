<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PolicyoODCreate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PolicyoODCreate';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dayBackups  保留日备个数，该备份不受保留最大备份数限制。取值为0到100。若选择该参数，则timezone 也必选。
    * destinationProjectId  复制的目标项目ID，仅在跨区域复制时才会使用并且必须指定。
    * destinationRegion  复制的目标区域，仅在跨区域复制时才会使用并且必须指定。长度限制：0- 255，只能由字母、数字、“_”、“-”组成
    * enableAcceleration  跨区域复制时，是否启用加速从而缩减复制的时间，如果不指定，默认不启用加速。
    * maxBackups  单个备份对象自动备份的最大备份数。取值为-1或0-99999。-1代表不按备份数清理。若该字段和retention_duration_days字段同时为空，备份会永久保留。
    * monthBackups  保留月备个数，该备份不受保留最大备份数限制。取值为0到100。若选择该参数，则timezone 也必选。
    * retentionDurationDays  备份保留时长，单位天。最长支持99999天。-1代表不按时间清理。若该字段和max_backups 参数同时为空，备份会永久保留。
    * timezone  用户所在时区,格式形如UTC+08:00, 若选择年备，月备，周备，日备中任一参数，则该参数不能为空。
    * weekBackups  保留周备个数，该备份不受保留最大备份数限制。取值为0到100。若选择该参数，则timezone 也必选。
    * yearBackups  保留年备个数，该备份不受保留最大备份数限制。取值为0到100。若选择该参数，则timezone 也必选。
    * fullBackupInterval  每间隔多少次执行一次全量备份，当取值为 -1 时，不执行全量备份。  最小值：-1  最大值：100
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dayBackups' => 'int',
            'destinationProjectId' => 'string',
            'destinationRegion' => 'string',
            'enableAcceleration' => 'bool',
            'maxBackups' => 'int',
            'monthBackups' => 'int',
            'retentionDurationDays' => 'int',
            'timezone' => 'string',
            'weekBackups' => 'int',
            'yearBackups' => 'int',
            'fullBackupInterval' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dayBackups  保留日备个数，该备份不受保留最大备份数限制。取值为0到100。若选择该参数，则timezone 也必选。
    * destinationProjectId  复制的目标项目ID，仅在跨区域复制时才会使用并且必须指定。
    * destinationRegion  复制的目标区域，仅在跨区域复制时才会使用并且必须指定。长度限制：0- 255，只能由字母、数字、“_”、“-”组成
    * enableAcceleration  跨区域复制时，是否启用加速从而缩减复制的时间，如果不指定，默认不启用加速。
    * maxBackups  单个备份对象自动备份的最大备份数。取值为-1或0-99999。-1代表不按备份数清理。若该字段和retention_duration_days字段同时为空，备份会永久保留。
    * monthBackups  保留月备个数，该备份不受保留最大备份数限制。取值为0到100。若选择该参数，则timezone 也必选。
    * retentionDurationDays  备份保留时长，单位天。最长支持99999天。-1代表不按时间清理。若该字段和max_backups 参数同时为空，备份会永久保留。
    * timezone  用户所在时区,格式形如UTC+08:00, 若选择年备，月备，周备，日备中任一参数，则该参数不能为空。
    * weekBackups  保留周备个数，该备份不受保留最大备份数限制。取值为0到100。若选择该参数，则timezone 也必选。
    * yearBackups  保留年备个数，该备份不受保留最大备份数限制。取值为0到100。若选择该参数，则timezone 也必选。
    * fullBackupInterval  每间隔多少次执行一次全量备份，当取值为 -1 时，不执行全量备份。  最小值：-1  最大值：100
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dayBackups' => 'int32',
        'destinationProjectId' => null,
        'destinationRegion' => null,
        'enableAcceleration' => null,
        'maxBackups' => 'int32',
        'monthBackups' => 'int32',
        'retentionDurationDays' => 'int32',
        'timezone' => null,
        'weekBackups' => 'int32',
        'yearBackups' => 'int32',
        'fullBackupInterval' => 'int32'
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
    * dayBackups  保留日备个数，该备份不受保留最大备份数限制。取值为0到100。若选择该参数，则timezone 也必选。
    * destinationProjectId  复制的目标项目ID，仅在跨区域复制时才会使用并且必须指定。
    * destinationRegion  复制的目标区域，仅在跨区域复制时才会使用并且必须指定。长度限制：0- 255，只能由字母、数字、“_”、“-”组成
    * enableAcceleration  跨区域复制时，是否启用加速从而缩减复制的时间，如果不指定，默认不启用加速。
    * maxBackups  单个备份对象自动备份的最大备份数。取值为-1或0-99999。-1代表不按备份数清理。若该字段和retention_duration_days字段同时为空，备份会永久保留。
    * monthBackups  保留月备个数，该备份不受保留最大备份数限制。取值为0到100。若选择该参数，则timezone 也必选。
    * retentionDurationDays  备份保留时长，单位天。最长支持99999天。-1代表不按时间清理。若该字段和max_backups 参数同时为空，备份会永久保留。
    * timezone  用户所在时区,格式形如UTC+08:00, 若选择年备，月备，周备，日备中任一参数，则该参数不能为空。
    * weekBackups  保留周备个数，该备份不受保留最大备份数限制。取值为0到100。若选择该参数，则timezone 也必选。
    * yearBackups  保留年备个数，该备份不受保留最大备份数限制。取值为0到100。若选择该参数，则timezone 也必选。
    * fullBackupInterval  每间隔多少次执行一次全量备份，当取值为 -1 时，不执行全量备份。  最小值：-1  最大值：100
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dayBackups' => 'day_backups',
            'destinationProjectId' => 'destination_project_id',
            'destinationRegion' => 'destination_region',
            'enableAcceleration' => 'enable_acceleration',
            'maxBackups' => 'max_backups',
            'monthBackups' => 'month_backups',
            'retentionDurationDays' => 'retention_duration_days',
            'timezone' => 'timezone',
            'weekBackups' => 'week_backups',
            'yearBackups' => 'year_backups',
            'fullBackupInterval' => 'full_backup_interval'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dayBackups  保留日备个数，该备份不受保留最大备份数限制。取值为0到100。若选择该参数，则timezone 也必选。
    * destinationProjectId  复制的目标项目ID，仅在跨区域复制时才会使用并且必须指定。
    * destinationRegion  复制的目标区域，仅在跨区域复制时才会使用并且必须指定。长度限制：0- 255，只能由字母、数字、“_”、“-”组成
    * enableAcceleration  跨区域复制时，是否启用加速从而缩减复制的时间，如果不指定，默认不启用加速。
    * maxBackups  单个备份对象自动备份的最大备份数。取值为-1或0-99999。-1代表不按备份数清理。若该字段和retention_duration_days字段同时为空，备份会永久保留。
    * monthBackups  保留月备个数，该备份不受保留最大备份数限制。取值为0到100。若选择该参数，则timezone 也必选。
    * retentionDurationDays  备份保留时长，单位天。最长支持99999天。-1代表不按时间清理。若该字段和max_backups 参数同时为空，备份会永久保留。
    * timezone  用户所在时区,格式形如UTC+08:00, 若选择年备，月备，周备，日备中任一参数，则该参数不能为空。
    * weekBackups  保留周备个数，该备份不受保留最大备份数限制。取值为0到100。若选择该参数，则timezone 也必选。
    * yearBackups  保留年备个数，该备份不受保留最大备份数限制。取值为0到100。若选择该参数，则timezone 也必选。
    * fullBackupInterval  每间隔多少次执行一次全量备份，当取值为 -1 时，不执行全量备份。  最小值：-1  最大值：100
    *
    * @var string[]
    */
    protected static $setters = [
            'dayBackups' => 'setDayBackups',
            'destinationProjectId' => 'setDestinationProjectId',
            'destinationRegion' => 'setDestinationRegion',
            'enableAcceleration' => 'setEnableAcceleration',
            'maxBackups' => 'setMaxBackups',
            'monthBackups' => 'setMonthBackups',
            'retentionDurationDays' => 'setRetentionDurationDays',
            'timezone' => 'setTimezone',
            'weekBackups' => 'setWeekBackups',
            'yearBackups' => 'setYearBackups',
            'fullBackupInterval' => 'setFullBackupInterval'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dayBackups  保留日备个数，该备份不受保留最大备份数限制。取值为0到100。若选择该参数，则timezone 也必选。
    * destinationProjectId  复制的目标项目ID，仅在跨区域复制时才会使用并且必须指定。
    * destinationRegion  复制的目标区域，仅在跨区域复制时才会使用并且必须指定。长度限制：0- 255，只能由字母、数字、“_”、“-”组成
    * enableAcceleration  跨区域复制时，是否启用加速从而缩减复制的时间，如果不指定，默认不启用加速。
    * maxBackups  单个备份对象自动备份的最大备份数。取值为-1或0-99999。-1代表不按备份数清理。若该字段和retention_duration_days字段同时为空，备份会永久保留。
    * monthBackups  保留月备个数，该备份不受保留最大备份数限制。取值为0到100。若选择该参数，则timezone 也必选。
    * retentionDurationDays  备份保留时长，单位天。最长支持99999天。-1代表不按时间清理。若该字段和max_backups 参数同时为空，备份会永久保留。
    * timezone  用户所在时区,格式形如UTC+08:00, 若选择年备，月备，周备，日备中任一参数，则该参数不能为空。
    * weekBackups  保留周备个数，该备份不受保留最大备份数限制。取值为0到100。若选择该参数，则timezone 也必选。
    * yearBackups  保留年备个数，该备份不受保留最大备份数限制。取值为0到100。若选择该参数，则timezone 也必选。
    * fullBackupInterval  每间隔多少次执行一次全量备份，当取值为 -1 时，不执行全量备份。  最小值：-1  最大值：100
    *
    * @var string[]
    */
    protected static $getters = [
            'dayBackups' => 'getDayBackups',
            'destinationProjectId' => 'getDestinationProjectId',
            'destinationRegion' => 'getDestinationRegion',
            'enableAcceleration' => 'getEnableAcceleration',
            'maxBackups' => 'getMaxBackups',
            'monthBackups' => 'getMonthBackups',
            'retentionDurationDays' => 'getRetentionDurationDays',
            'timezone' => 'getTimezone',
            'weekBackups' => 'getWeekBackups',
            'yearBackups' => 'getYearBackups',
            'fullBackupInterval' => 'getFullBackupInterval'
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
        $this->container['dayBackups'] = isset($data['dayBackups']) ? $data['dayBackups'] : null;
        $this->container['destinationProjectId'] = isset($data['destinationProjectId']) ? $data['destinationProjectId'] : null;
        $this->container['destinationRegion'] = isset($data['destinationRegion']) ? $data['destinationRegion'] : null;
        $this->container['enableAcceleration'] = isset($data['enableAcceleration']) ? $data['enableAcceleration'] : null;
        $this->container['maxBackups'] = isset($data['maxBackups']) ? $data['maxBackups'] : null;
        $this->container['monthBackups'] = isset($data['monthBackups']) ? $data['monthBackups'] : null;
        $this->container['retentionDurationDays'] = isset($data['retentionDurationDays']) ? $data['retentionDurationDays'] : null;
        $this->container['timezone'] = isset($data['timezone']) ? $data['timezone'] : null;
        $this->container['weekBackups'] = isset($data['weekBackups']) ? $data['weekBackups'] : null;
        $this->container['yearBackups'] = isset($data['yearBackups']) ? $data['yearBackups'] : null;
        $this->container['fullBackupInterval'] = isset($data['fullBackupInterval']) ? $data['fullBackupInterval'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['dayBackups']) && ($this->container['dayBackups'] > 100)) {
                $invalidProperties[] = "invalid value for 'dayBackups', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['dayBackups']) && ($this->container['dayBackups'] < 0)) {
                $invalidProperties[] = "invalid value for 'dayBackups', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['destinationRegion']) && !preg_match("/^[a-zA-Z0-9._\\-]*$/", $this->container['destinationRegion'])) {
                $invalidProperties[] = "invalid value for 'destinationRegion', must be conform to the pattern /^[a-zA-Z0-9._\\-]*$/.";
            }
            if (!is_null($this->container['maxBackups']) && ($this->container['maxBackups'] > 99999)) {
                $invalidProperties[] = "invalid value for 'maxBackups', must be smaller than or equal to 99999.";
            }
            if (!is_null($this->container['maxBackups']) && ($this->container['maxBackups'] < 1)) {
                $invalidProperties[] = "invalid value for 'maxBackups', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['monthBackups']) && ($this->container['monthBackups'] > 100)) {
                $invalidProperties[] = "invalid value for 'monthBackups', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['monthBackups']) && ($this->container['monthBackups'] < 0)) {
                $invalidProperties[] = "invalid value for 'monthBackups', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['retentionDurationDays']) && ($this->container['retentionDurationDays'] > 99999)) {
                $invalidProperties[] = "invalid value for 'retentionDurationDays', must be smaller than or equal to 99999.";
            }
            if (!is_null($this->container['retentionDurationDays']) && ($this->container['retentionDurationDays'] < 1)) {
                $invalidProperties[] = "invalid value for 'retentionDurationDays', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['timezone']) && !preg_match("/'UTC([+-]{1,1}[0-9]{2,2}[:]{1,1}[0-9]{2,2})'/", $this->container['timezone'])) {
                $invalidProperties[] = "invalid value for 'timezone', must be conform to the pattern /'UTC([+-]{1,1}[0-9]{2,2}[:]{1,1}[0-9]{2,2})'/.";
            }
            if (!is_null($this->container['yearBackups']) && ($this->container['yearBackups'] > 100)) {
                $invalidProperties[] = "invalid value for 'yearBackups', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['yearBackups']) && ($this->container['yearBackups'] < 0)) {
                $invalidProperties[] = "invalid value for 'yearBackups', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['fullBackupInterval']) && ($this->container['fullBackupInterval'] > 100)) {
                $invalidProperties[] = "invalid value for 'fullBackupInterval', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['fullBackupInterval']) && ($this->container['fullBackupInterval'] < -1)) {
                $invalidProperties[] = "invalid value for 'fullBackupInterval', must be bigger than or equal to -1.";
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
    * Gets dayBackups
    *  保留日备个数，该备份不受保留最大备份数限制。取值为0到100。若选择该参数，则timezone 也必选。
    *
    * @return int|null
    */
    public function getDayBackups()
    {
        return $this->container['dayBackups'];
    }

    /**
    * Sets dayBackups
    *
    * @param int|null $dayBackups 保留日备个数，该备份不受保留最大备份数限制。取值为0到100。若选择该参数，则timezone 也必选。
    *
    * @return $this
    */
    public function setDayBackups($dayBackups)
    {
        $this->container['dayBackups'] = $dayBackups;
        return $this;
    }

    /**
    * Gets destinationProjectId
    *  复制的目标项目ID，仅在跨区域复制时才会使用并且必须指定。
    *
    * @return string|null
    */
    public function getDestinationProjectId()
    {
        return $this->container['destinationProjectId'];
    }

    /**
    * Sets destinationProjectId
    *
    * @param string|null $destinationProjectId 复制的目标项目ID，仅在跨区域复制时才会使用并且必须指定。
    *
    * @return $this
    */
    public function setDestinationProjectId($destinationProjectId)
    {
        $this->container['destinationProjectId'] = $destinationProjectId;
        return $this;
    }

    /**
    * Gets destinationRegion
    *  复制的目标区域，仅在跨区域复制时才会使用并且必须指定。长度限制：0- 255，只能由字母、数字、“_”、“-”组成
    *
    * @return string|null
    */
    public function getDestinationRegion()
    {
        return $this->container['destinationRegion'];
    }

    /**
    * Sets destinationRegion
    *
    * @param string|null $destinationRegion 复制的目标区域，仅在跨区域复制时才会使用并且必须指定。长度限制：0- 255，只能由字母、数字、“_”、“-”组成
    *
    * @return $this
    */
    public function setDestinationRegion($destinationRegion)
    {
        $this->container['destinationRegion'] = $destinationRegion;
        return $this;
    }

    /**
    * Gets enableAcceleration
    *  跨区域复制时，是否启用加速从而缩减复制的时间，如果不指定，默认不启用加速。
    *
    * @return bool|null
    */
    public function getEnableAcceleration()
    {
        return $this->container['enableAcceleration'];
    }

    /**
    * Sets enableAcceleration
    *
    * @param bool|null $enableAcceleration 跨区域复制时，是否启用加速从而缩减复制的时间，如果不指定，默认不启用加速。
    *
    * @return $this
    */
    public function setEnableAcceleration($enableAcceleration)
    {
        $this->container['enableAcceleration'] = $enableAcceleration;
        return $this;
    }

    /**
    * Gets maxBackups
    *  单个备份对象自动备份的最大备份数。取值为-1或0-99999。-1代表不按备份数清理。若该字段和retention_duration_days字段同时为空，备份会永久保留。
    *
    * @return int|null
    */
    public function getMaxBackups()
    {
        return $this->container['maxBackups'];
    }

    /**
    * Sets maxBackups
    *
    * @param int|null $maxBackups 单个备份对象自动备份的最大备份数。取值为-1或0-99999。-1代表不按备份数清理。若该字段和retention_duration_days字段同时为空，备份会永久保留。
    *
    * @return $this
    */
    public function setMaxBackups($maxBackups)
    {
        $this->container['maxBackups'] = $maxBackups;
        return $this;
    }

    /**
    * Gets monthBackups
    *  保留月备个数，该备份不受保留最大备份数限制。取值为0到100。若选择该参数，则timezone 也必选。
    *
    * @return int|null
    */
    public function getMonthBackups()
    {
        return $this->container['monthBackups'];
    }

    /**
    * Sets monthBackups
    *
    * @param int|null $monthBackups 保留月备个数，该备份不受保留最大备份数限制。取值为0到100。若选择该参数，则timezone 也必选。
    *
    * @return $this
    */
    public function setMonthBackups($monthBackups)
    {
        $this->container['monthBackups'] = $monthBackups;
        return $this;
    }

    /**
    * Gets retentionDurationDays
    *  备份保留时长，单位天。最长支持99999天。-1代表不按时间清理。若该字段和max_backups 参数同时为空，备份会永久保留。
    *
    * @return int|null
    */
    public function getRetentionDurationDays()
    {
        return $this->container['retentionDurationDays'];
    }

    /**
    * Sets retentionDurationDays
    *
    * @param int|null $retentionDurationDays 备份保留时长，单位天。最长支持99999天。-1代表不按时间清理。若该字段和max_backups 参数同时为空，备份会永久保留。
    *
    * @return $this
    */
    public function setRetentionDurationDays($retentionDurationDays)
    {
        $this->container['retentionDurationDays'] = $retentionDurationDays;
        return $this;
    }

    /**
    * Gets timezone
    *  用户所在时区,格式形如UTC+08:00, 若选择年备，月备，周备，日备中任一参数，则该参数不能为空。
    *
    * @return string|null
    */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
    * Sets timezone
    *
    * @param string|null $timezone 用户所在时区,格式形如UTC+08:00, 若选择年备，月备，周备，日备中任一参数，则该参数不能为空。
    *
    * @return $this
    */
    public function setTimezone($timezone)
    {
        $this->container['timezone'] = $timezone;
        return $this;
    }

    /**
    * Gets weekBackups
    *  保留周备个数，该备份不受保留最大备份数限制。取值为0到100。若选择该参数，则timezone 也必选。
    *
    * @return int|null
    */
    public function getWeekBackups()
    {
        return $this->container['weekBackups'];
    }

    /**
    * Sets weekBackups
    *
    * @param int|null $weekBackups 保留周备个数，该备份不受保留最大备份数限制。取值为0到100。若选择该参数，则timezone 也必选。
    *
    * @return $this
    */
    public function setWeekBackups($weekBackups)
    {
        $this->container['weekBackups'] = $weekBackups;
        return $this;
    }

    /**
    * Gets yearBackups
    *  保留年备个数，该备份不受保留最大备份数限制。取值为0到100。若选择该参数，则timezone 也必选。
    *
    * @return int|null
    */
    public function getYearBackups()
    {
        return $this->container['yearBackups'];
    }

    /**
    * Sets yearBackups
    *
    * @param int|null $yearBackups 保留年备个数，该备份不受保留最大备份数限制。取值为0到100。若选择该参数，则timezone 也必选。
    *
    * @return $this
    */
    public function setYearBackups($yearBackups)
    {
        $this->container['yearBackups'] = $yearBackups;
        return $this;
    }

    /**
    * Gets fullBackupInterval
    *  每间隔多少次执行一次全量备份，当取值为 -1 时，不执行全量备份。  最小值：-1  最大值：100
    *
    * @return int|null
    */
    public function getFullBackupInterval()
    {
        return $this->container['fullBackupInterval'];
    }

    /**
    * Sets fullBackupInterval
    *
    * @param int|null $fullBackupInterval 每间隔多少次执行一次全量备份，当取值为 -1 时，不执行全量备份。  最小值：-1  最大值：100
    *
    * @return $this
    */
    public function setFullBackupInterval($fullBackupInterval)
    {
        $this->container['fullBackupInterval'] = $fullBackupInterval;
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

