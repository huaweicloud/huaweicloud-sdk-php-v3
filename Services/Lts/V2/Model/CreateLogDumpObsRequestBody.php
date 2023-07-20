<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateLogDumpObsRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateLogDumpObsRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * logGroupId  日志组id。
    * logStreamIds  日志流id列表, 可以指定一个或多个日志流进行obs周期性转储
    * obsBucketName  obs 桶名称。
    * type  周期性转储, 必须填 cycle。
    * storageFormat  转储格式 RAW/JSON， 默认为 RAW。
    * switchOn  是否开启转储 true/false, 默认为 true
    * prefixName  转储至OBS桶中的日志文件前缀。
    * dirPrefixName  自定义文件夹路径。
    * period  转储周期的长度， 与 period_unit 拼接后必须在该列表中 [\"2min\",\"5min\",\"30min\",\"1hour\",\"3hour\",\"6hour\",\"12hour\"]。
    * periodUnit  转储周期的单位， 与 period 拼接后必须在该列表中 [\"2min\",\"5min\",\"30min\",\"1hour\",\"3hour\",\"6hour\",\"12hour\"]。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'logGroupId' => 'string',
            'logStreamIds' => 'string[]',
            'obsBucketName' => 'string',
            'type' => 'string',
            'storageFormat' => 'string',
            'switchOn' => 'bool',
            'prefixName' => 'string',
            'dirPrefixName' => 'string',
            'period' => 'int',
            'periodUnit' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * logGroupId  日志组id。
    * logStreamIds  日志流id列表, 可以指定一个或多个日志流进行obs周期性转储
    * obsBucketName  obs 桶名称。
    * type  周期性转储, 必须填 cycle。
    * storageFormat  转储格式 RAW/JSON， 默认为 RAW。
    * switchOn  是否开启转储 true/false, 默认为 true
    * prefixName  转储至OBS桶中的日志文件前缀。
    * dirPrefixName  自定义文件夹路径。
    * period  转储周期的长度， 与 period_unit 拼接后必须在该列表中 [\"2min\",\"5min\",\"30min\",\"1hour\",\"3hour\",\"6hour\",\"12hour\"]。
    * periodUnit  转储周期的单位， 与 period 拼接后必须在该列表中 [\"2min\",\"5min\",\"30min\",\"1hour\",\"3hour\",\"6hour\",\"12hour\"]。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'logGroupId' => null,
        'logStreamIds' => null,
        'obsBucketName' => null,
        'type' => null,
        'storageFormat' => null,
        'switchOn' => null,
        'prefixName' => null,
        'dirPrefixName' => null,
        'period' => 'int32',
        'periodUnit' => null
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
    * logGroupId  日志组id。
    * logStreamIds  日志流id列表, 可以指定一个或多个日志流进行obs周期性转储
    * obsBucketName  obs 桶名称。
    * type  周期性转储, 必须填 cycle。
    * storageFormat  转储格式 RAW/JSON， 默认为 RAW。
    * switchOn  是否开启转储 true/false, 默认为 true
    * prefixName  转储至OBS桶中的日志文件前缀。
    * dirPrefixName  自定义文件夹路径。
    * period  转储周期的长度， 与 period_unit 拼接后必须在该列表中 [\"2min\",\"5min\",\"30min\",\"1hour\",\"3hour\",\"6hour\",\"12hour\"]。
    * periodUnit  转储周期的单位， 与 period 拼接后必须在该列表中 [\"2min\",\"5min\",\"30min\",\"1hour\",\"3hour\",\"6hour\",\"12hour\"]。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'logGroupId' => 'log_group_id',
            'logStreamIds' => 'log_stream_ids',
            'obsBucketName' => 'obs_bucket_name',
            'type' => 'type',
            'storageFormat' => 'storage_format',
            'switchOn' => 'switch_on',
            'prefixName' => 'prefix_name',
            'dirPrefixName' => 'dir_prefix_name',
            'period' => 'period',
            'periodUnit' => 'period_unit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * logGroupId  日志组id。
    * logStreamIds  日志流id列表, 可以指定一个或多个日志流进行obs周期性转储
    * obsBucketName  obs 桶名称。
    * type  周期性转储, 必须填 cycle。
    * storageFormat  转储格式 RAW/JSON， 默认为 RAW。
    * switchOn  是否开启转储 true/false, 默认为 true
    * prefixName  转储至OBS桶中的日志文件前缀。
    * dirPrefixName  自定义文件夹路径。
    * period  转储周期的长度， 与 period_unit 拼接后必须在该列表中 [\"2min\",\"5min\",\"30min\",\"1hour\",\"3hour\",\"6hour\",\"12hour\"]。
    * periodUnit  转储周期的单位， 与 period 拼接后必须在该列表中 [\"2min\",\"5min\",\"30min\",\"1hour\",\"3hour\",\"6hour\",\"12hour\"]。
    *
    * @var string[]
    */
    protected static $setters = [
            'logGroupId' => 'setLogGroupId',
            'logStreamIds' => 'setLogStreamIds',
            'obsBucketName' => 'setObsBucketName',
            'type' => 'setType',
            'storageFormat' => 'setStorageFormat',
            'switchOn' => 'setSwitchOn',
            'prefixName' => 'setPrefixName',
            'dirPrefixName' => 'setDirPrefixName',
            'period' => 'setPeriod',
            'periodUnit' => 'setPeriodUnit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * logGroupId  日志组id。
    * logStreamIds  日志流id列表, 可以指定一个或多个日志流进行obs周期性转储
    * obsBucketName  obs 桶名称。
    * type  周期性转储, 必须填 cycle。
    * storageFormat  转储格式 RAW/JSON， 默认为 RAW。
    * switchOn  是否开启转储 true/false, 默认为 true
    * prefixName  转储至OBS桶中的日志文件前缀。
    * dirPrefixName  自定义文件夹路径。
    * period  转储周期的长度， 与 period_unit 拼接后必须在该列表中 [\"2min\",\"5min\",\"30min\",\"1hour\",\"3hour\",\"6hour\",\"12hour\"]。
    * periodUnit  转储周期的单位， 与 period 拼接后必须在该列表中 [\"2min\",\"5min\",\"30min\",\"1hour\",\"3hour\",\"6hour\",\"12hour\"]。
    *
    * @var string[]
    */
    protected static $getters = [
            'logGroupId' => 'getLogGroupId',
            'logStreamIds' => 'getLogStreamIds',
            'obsBucketName' => 'getObsBucketName',
            'type' => 'getType',
            'storageFormat' => 'getStorageFormat',
            'switchOn' => 'getSwitchOn',
            'prefixName' => 'getPrefixName',
            'dirPrefixName' => 'getDirPrefixName',
            'period' => 'getPeriod',
            'periodUnit' => 'getPeriodUnit'
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
        $this->container['logGroupId'] = isset($data['logGroupId']) ? $data['logGroupId'] : null;
        $this->container['logStreamIds'] = isset($data['logStreamIds']) ? $data['logStreamIds'] : null;
        $this->container['obsBucketName'] = isset($data['obsBucketName']) ? $data['obsBucketName'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['storageFormat'] = isset($data['storageFormat']) ? $data['storageFormat'] : null;
        $this->container['switchOn'] = isset($data['switchOn']) ? $data['switchOn'] : null;
        $this->container['prefixName'] = isset($data['prefixName']) ? $data['prefixName'] : null;
        $this->container['dirPrefixName'] = isset($data['dirPrefixName']) ? $data['dirPrefixName'] : null;
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
        $this->container['periodUnit'] = isset($data['periodUnit']) ? $data['periodUnit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['logGroupId'] === null) {
            $invalidProperties[] = "'logGroupId' can't be null";
        }
            if ((mb_strlen($this->container['logGroupId']) > 36)) {
                $invalidProperties[] = "invalid value for 'logGroupId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['logGroupId']) < 36)) {
                $invalidProperties[] = "invalid value for 'logGroupId', the character length must be bigger than or equal to 36.";
            }
        if ($this->container['logStreamIds'] === null) {
            $invalidProperties[] = "'logStreamIds' can't be null";
        }
        if ($this->container['obsBucketName'] === null) {
            $invalidProperties[] = "'obsBucketName' can't be null";
        }
            if ((mb_strlen($this->container['obsBucketName']) > 100)) {
                $invalidProperties[] = "invalid value for 'obsBucketName', the character length must be smaller than or equal to 100.";
            }
            if ((mb_strlen($this->container['obsBucketName']) < 1)) {
                $invalidProperties[] = "invalid value for 'obsBucketName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            if ((mb_strlen($this->container['type']) > 8)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 8.";
            }
            if ((mb_strlen($this->container['type']) < 5)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 5.";
            }
        if ($this->container['storageFormat'] === null) {
            $invalidProperties[] = "'storageFormat' can't be null";
        }
            if ((mb_strlen($this->container['storageFormat']) > 4)) {
                $invalidProperties[] = "invalid value for 'storageFormat', the character length must be smaller than or equal to 4.";
            }
            if ((mb_strlen($this->container['storageFormat']) < 3)) {
                $invalidProperties[] = "invalid value for 'storageFormat', the character length must be bigger than or equal to 3.";
            }
            if (!is_null($this->container['prefixName']) && (mb_strlen($this->container['prefixName']) > 100)) {
                $invalidProperties[] = "invalid value for 'prefixName', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['prefixName']) && (mb_strlen($this->container['prefixName']) < 0)) {
                $invalidProperties[] = "invalid value for 'prefixName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['dirPrefixName']) && (mb_strlen($this->container['dirPrefixName']) > 100)) {
                $invalidProperties[] = "invalid value for 'dirPrefixName', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['dirPrefixName']) && (mb_strlen($this->container['dirPrefixName']) < 0)) {
                $invalidProperties[] = "invalid value for 'dirPrefixName', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['period'] === null) {
            $invalidProperties[] = "'period' can't be null";
        }
            if (($this->container['period'] > 30)) {
                $invalidProperties[] = "invalid value for 'period', must be smaller than or equal to 30.";
            }
            if (($this->container['period'] < 1)) {
                $invalidProperties[] = "invalid value for 'period', must be bigger than or equal to 1.";
            }
        if ($this->container['periodUnit'] === null) {
            $invalidProperties[] = "'periodUnit' can't be null";
        }
            if ((mb_strlen($this->container['periodUnit']) > 4)) {
                $invalidProperties[] = "invalid value for 'periodUnit', the character length must be smaller than or equal to 4.";
            }
            if ((mb_strlen($this->container['periodUnit']) < 3)) {
                $invalidProperties[] = "invalid value for 'periodUnit', the character length must be bigger than or equal to 3.";
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
    * Gets logGroupId
    *  日志组id。
    *
    * @return string
    */
    public function getLogGroupId()
    {
        return $this->container['logGroupId'];
    }

    /**
    * Sets logGroupId
    *
    * @param string $logGroupId 日志组id。
    *
    * @return $this
    */
    public function setLogGroupId($logGroupId)
    {
        $this->container['logGroupId'] = $logGroupId;
        return $this;
    }

    /**
    * Gets logStreamIds
    *  日志流id列表, 可以指定一个或多个日志流进行obs周期性转储
    *
    * @return string[]
    */
    public function getLogStreamIds()
    {
        return $this->container['logStreamIds'];
    }

    /**
    * Sets logStreamIds
    *
    * @param string[] $logStreamIds 日志流id列表, 可以指定一个或多个日志流进行obs周期性转储
    *
    * @return $this
    */
    public function setLogStreamIds($logStreamIds)
    {
        $this->container['logStreamIds'] = $logStreamIds;
        return $this;
    }

    /**
    * Gets obsBucketName
    *  obs 桶名称。
    *
    * @return string
    */
    public function getObsBucketName()
    {
        return $this->container['obsBucketName'];
    }

    /**
    * Sets obsBucketName
    *
    * @param string $obsBucketName obs 桶名称。
    *
    * @return $this
    */
    public function setObsBucketName($obsBucketName)
    {
        $this->container['obsBucketName'] = $obsBucketName;
        return $this;
    }

    /**
    * Gets type
    *  周期性转储, 必须填 cycle。
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 周期性转储, 必须填 cycle。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets storageFormat
    *  转储格式 RAW/JSON， 默认为 RAW。
    *
    * @return string
    */
    public function getStorageFormat()
    {
        return $this->container['storageFormat'];
    }

    /**
    * Sets storageFormat
    *
    * @param string $storageFormat 转储格式 RAW/JSON， 默认为 RAW。
    *
    * @return $this
    */
    public function setStorageFormat($storageFormat)
    {
        $this->container['storageFormat'] = $storageFormat;
        return $this;
    }

    /**
    * Gets switchOn
    *  是否开启转储 true/false, 默认为 true
    *
    * @return bool|null
    */
    public function getSwitchOn()
    {
        return $this->container['switchOn'];
    }

    /**
    * Sets switchOn
    *
    * @param bool|null $switchOn 是否开启转储 true/false, 默认为 true
    *
    * @return $this
    */
    public function setSwitchOn($switchOn)
    {
        $this->container['switchOn'] = $switchOn;
        return $this;
    }

    /**
    * Gets prefixName
    *  转储至OBS桶中的日志文件前缀。
    *
    * @return string|null
    */
    public function getPrefixName()
    {
        return $this->container['prefixName'];
    }

    /**
    * Sets prefixName
    *
    * @param string|null $prefixName 转储至OBS桶中的日志文件前缀。
    *
    * @return $this
    */
    public function setPrefixName($prefixName)
    {
        $this->container['prefixName'] = $prefixName;
        return $this;
    }

    /**
    * Gets dirPrefixName
    *  自定义文件夹路径。
    *
    * @return string|null
    */
    public function getDirPrefixName()
    {
        return $this->container['dirPrefixName'];
    }

    /**
    * Sets dirPrefixName
    *
    * @param string|null $dirPrefixName 自定义文件夹路径。
    *
    * @return $this
    */
    public function setDirPrefixName($dirPrefixName)
    {
        $this->container['dirPrefixName'] = $dirPrefixName;
        return $this;
    }

    /**
    * Gets period
    *  转储周期的长度， 与 period_unit 拼接后必须在该列表中 [\"2min\",\"5min\",\"30min\",\"1hour\",\"3hour\",\"6hour\",\"12hour\"]。
    *
    * @return int
    */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
    * Sets period
    *
    * @param int $period 转储周期的长度， 与 period_unit 拼接后必须在该列表中 [\"2min\",\"5min\",\"30min\",\"1hour\",\"3hour\",\"6hour\",\"12hour\"]。
    *
    * @return $this
    */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;
        return $this;
    }

    /**
    * Gets periodUnit
    *  转储周期的单位， 与 period 拼接后必须在该列表中 [\"2min\",\"5min\",\"30min\",\"1hour\",\"3hour\",\"6hour\",\"12hour\"]。
    *
    * @return string
    */
    public function getPeriodUnit()
    {
        return $this->container['periodUnit'];
    }

    /**
    * Sets periodUnit
    *
    * @param string $periodUnit 转储周期的单位， 与 period 拼接后必须在该列表中 [\"2min\",\"5min\",\"30min\",\"1hour\",\"3hour\",\"6hour\",\"12hour\"]。
    *
    * @return $this
    */
    public function setPeriodUnit($periodUnit)
    {
        $this->container['periodUnit'] = $periodUnit;
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

