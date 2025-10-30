<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchExportBaselineTaskResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchExportBaselineTaskResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * recordTotalNum  **参数解释**: 导出记录总数 **取值范围**: 最小值0，最大值2147483647
    * taskId  **参数解释**: 导出任务ID **取值范围**: 字符长度1-256位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'recordTotalNum' => 'int',
            'taskId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * recordTotalNum  **参数解释**: 导出记录总数 **取值范围**: 最小值0，最大值2147483647
    * taskId  **参数解释**: 导出任务ID **取值范围**: 字符长度1-256位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'recordTotalNum' => 'int64',
        'taskId' => null
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
    * recordTotalNum  **参数解释**: 导出记录总数 **取值范围**: 最小值0，最大值2147483647
    * taskId  **参数解释**: 导出任务ID **取值范围**: 字符长度1-256位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'recordTotalNum' => 'record_total_num',
            'taskId' => 'task_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * recordTotalNum  **参数解释**: 导出记录总数 **取值范围**: 最小值0，最大值2147483647
    * taskId  **参数解释**: 导出任务ID **取值范围**: 字符长度1-256位
    *
    * @var string[]
    */
    protected static $setters = [
            'recordTotalNum' => 'setRecordTotalNum',
            'taskId' => 'setTaskId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * recordTotalNum  **参数解释**: 导出记录总数 **取值范围**: 最小值0，最大值2147483647
    * taskId  **参数解释**: 导出任务ID **取值范围**: 字符长度1-256位
    *
    * @var string[]
    */
    protected static $getters = [
            'recordTotalNum' => 'getRecordTotalNum',
            'taskId' => 'getTaskId'
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
        $this->container['recordTotalNum'] = isset($data['recordTotalNum']) ? $data['recordTotalNum'] : null;
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['recordTotalNum']) && ($this->container['recordTotalNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'recordTotalNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['recordTotalNum']) && ($this->container['recordTotalNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'recordTotalNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['taskId']) && (mb_strlen($this->container['taskId']) > 256)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['taskId']) && (mb_strlen($this->container['taskId']) < 1)) {
                $invalidProperties[] = "invalid value for 'taskId', the character length must be bigger than or equal to 1.";
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
    * Gets recordTotalNum
    *  **参数解释**: 导出记录总数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getRecordTotalNum()
    {
        return $this->container['recordTotalNum'];
    }

    /**
    * Sets recordTotalNum
    *
    * @param int|null $recordTotalNum **参数解释**: 导出记录总数 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setRecordTotalNum($recordTotalNum)
    {
        $this->container['recordTotalNum'] = $recordTotalNum;
        return $this;
    }

    /**
    * Gets taskId
    *  **参数解释**: 导出任务ID **取值范围**: 字符长度1-256位
    *
    * @return string|null
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param string|null $taskId **参数解释**: 导出任务ID **取值范围**: 字符长度1-256位
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
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

