<?php

namespace HuaweiCloud\SDK\CloudRTC\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MP4RecordConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MP4RecordConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * recordCycle  周期录制时长。  取值范围：[60，10800]。  单位：秒。
    * recordPrefix  录制文件含路径和文件名的前缀。  默认{app_id}/{record_format}/{stream}\\_{file_start_time}/{stream}\\_{file_start_time}  可自定义以下特殊变量： - {app_id}：应用id - {record_format}：录制格式 - {stream}：流名 - {file_start_time}：文件生成时间
    * recordMaxDurationToMergeFile  录制MP4拼接时长，如果流中断超过该时间，则生成新文件。  取值范围：[0，300]，缺省为0。  单位：秒。  如果为0表示流中断就生成新文件。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'recordCycle' => 'int',
            'recordPrefix' => 'string',
            'recordMaxDurationToMergeFile' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * recordCycle  周期录制时长。  取值范围：[60，10800]。  单位：秒。
    * recordPrefix  录制文件含路径和文件名的前缀。  默认{app_id}/{record_format}/{stream}\\_{file_start_time}/{stream}\\_{file_start_time}  可自定义以下特殊变量： - {app_id}：应用id - {record_format}：录制格式 - {stream}：流名 - {file_start_time}：文件生成时间
    * recordMaxDurationToMergeFile  录制MP4拼接时长，如果流中断超过该时间，则生成新文件。  取值范围：[0，300]，缺省为0。  单位：秒。  如果为0表示流中断就生成新文件。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'recordCycle' => null,
        'recordPrefix' => null,
        'recordMaxDurationToMergeFile' => null
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
    * recordCycle  周期录制时长。  取值范围：[60，10800]。  单位：秒。
    * recordPrefix  录制文件含路径和文件名的前缀。  默认{app_id}/{record_format}/{stream}\\_{file_start_time}/{stream}\\_{file_start_time}  可自定义以下特殊变量： - {app_id}：应用id - {record_format}：录制格式 - {stream}：流名 - {file_start_time}：文件生成时间
    * recordMaxDurationToMergeFile  录制MP4拼接时长，如果流中断超过该时间，则生成新文件。  取值范围：[0，300]，缺省为0。  单位：秒。  如果为0表示流中断就生成新文件。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'recordCycle' => 'record_cycle',
            'recordPrefix' => 'record_prefix',
            'recordMaxDurationToMergeFile' => 'record_max_duration_to_merge_file'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * recordCycle  周期录制时长。  取值范围：[60，10800]。  单位：秒。
    * recordPrefix  录制文件含路径和文件名的前缀。  默认{app_id}/{record_format}/{stream}\\_{file_start_time}/{stream}\\_{file_start_time}  可自定义以下特殊变量： - {app_id}：应用id - {record_format}：录制格式 - {stream}：流名 - {file_start_time}：文件生成时间
    * recordMaxDurationToMergeFile  录制MP4拼接时长，如果流中断超过该时间，则生成新文件。  取值范围：[0，300]，缺省为0。  单位：秒。  如果为0表示流中断就生成新文件。
    *
    * @var string[]
    */
    protected static $setters = [
            'recordCycle' => 'setRecordCycle',
            'recordPrefix' => 'setRecordPrefix',
            'recordMaxDurationToMergeFile' => 'setRecordMaxDurationToMergeFile'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * recordCycle  周期录制时长。  取值范围：[60，10800]。  单位：秒。
    * recordPrefix  录制文件含路径和文件名的前缀。  默认{app_id}/{record_format}/{stream}\\_{file_start_time}/{stream}\\_{file_start_time}  可自定义以下特殊变量： - {app_id}：应用id - {record_format}：录制格式 - {stream}：流名 - {file_start_time}：文件生成时间
    * recordMaxDurationToMergeFile  录制MP4拼接时长，如果流中断超过该时间，则生成新文件。  取值范围：[0，300]，缺省为0。  单位：秒。  如果为0表示流中断就生成新文件。
    *
    * @var string[]
    */
    protected static $getters = [
            'recordCycle' => 'getRecordCycle',
            'recordPrefix' => 'getRecordPrefix',
            'recordMaxDurationToMergeFile' => 'getRecordMaxDurationToMergeFile'
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
        $this->container['recordCycle'] = isset($data['recordCycle']) ? $data['recordCycle'] : null;
        $this->container['recordPrefix'] = isset($data['recordPrefix']) ? $data['recordPrefix'] : '{app_id}/{record_format}/{stream}_{file_start_time}/{stream}_{file_start_time}';
        $this->container['recordMaxDurationToMergeFile'] = isset($data['recordMaxDurationToMergeFile']) ? $data['recordMaxDurationToMergeFile'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['recordCycle'] === null) {
            $invalidProperties[] = "'recordCycle' can't be null";
        }
            if (($this->container['recordCycle'] > 10800)) {
                $invalidProperties[] = "invalid value for 'recordCycle', must be smaller than or equal to 10800.";
            }
            if (($this->container['recordCycle'] < 60)) {
                $invalidProperties[] = "invalid value for 'recordCycle', must be bigger than or equal to 60.";
            }
            if (!is_null($this->container['recordPrefix']) && (mb_strlen($this->container['recordPrefix']) > 512)) {
                $invalidProperties[] = "invalid value for 'recordPrefix', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['recordPrefix']) && (mb_strlen($this->container['recordPrefix']) < 1)) {
                $invalidProperties[] = "invalid value for 'recordPrefix', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['recordMaxDurationToMergeFile']) && ($this->container['recordMaxDurationToMergeFile'] > 300)) {
                $invalidProperties[] = "invalid value for 'recordMaxDurationToMergeFile', must be smaller than or equal to 300.";
            }
            if (!is_null($this->container['recordMaxDurationToMergeFile']) && ($this->container['recordMaxDurationToMergeFile'] < 0)) {
                $invalidProperties[] = "invalid value for 'recordMaxDurationToMergeFile', must be bigger than or equal to 0.";
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
    * Gets recordCycle
    *  周期录制时长。  取值范围：[60，10800]。  单位：秒。
    *
    * @return int
    */
    public function getRecordCycle()
    {
        return $this->container['recordCycle'];
    }

    /**
    * Sets recordCycle
    *
    * @param int $recordCycle 周期录制时长。  取值范围：[60，10800]。  单位：秒。
    *
    * @return $this
    */
    public function setRecordCycle($recordCycle)
    {
        $this->container['recordCycle'] = $recordCycle;
        return $this;
    }

    /**
    * Gets recordPrefix
    *  录制文件含路径和文件名的前缀。  默认{app_id}/{record_format}/{stream}\\_{file_start_time}/{stream}\\_{file_start_time}  可自定义以下特殊变量： - {app_id}：应用id - {record_format}：录制格式 - {stream}：流名 - {file_start_time}：文件生成时间
    *
    * @return string|null
    */
    public function getRecordPrefix()
    {
        return $this->container['recordPrefix'];
    }

    /**
    * Sets recordPrefix
    *
    * @param string|null $recordPrefix 录制文件含路径和文件名的前缀。  默认{app_id}/{record_format}/{stream}\\_{file_start_time}/{stream}\\_{file_start_time}  可自定义以下特殊变量： - {app_id}：应用id - {record_format}：录制格式 - {stream}：流名 - {file_start_time}：文件生成时间
    *
    * @return $this
    */
    public function setRecordPrefix($recordPrefix)
    {
        $this->container['recordPrefix'] = $recordPrefix;
        return $this;
    }

    /**
    * Gets recordMaxDurationToMergeFile
    *  录制MP4拼接时长，如果流中断超过该时间，则生成新文件。  取值范围：[0，300]，缺省为0。  单位：秒。  如果为0表示流中断就生成新文件。
    *
    * @return int|null
    */
    public function getRecordMaxDurationToMergeFile()
    {
        return $this->container['recordMaxDurationToMergeFile'];
    }

    /**
    * Sets recordMaxDurationToMergeFile
    *
    * @param int|null $recordMaxDurationToMergeFile 录制MP4拼接时长，如果流中断超过该时间，则生成新文件。  取值范围：[0，300]，缺省为0。  单位：秒。  如果为0表示流中断就生成新文件。
    *
    * @return $this
    */
    public function setRecordMaxDurationToMergeFile($recordMaxDurationToMergeFile)
    {
        $this->container['recordMaxDurationToMergeFile'] = $recordMaxDurationToMergeFile;
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

