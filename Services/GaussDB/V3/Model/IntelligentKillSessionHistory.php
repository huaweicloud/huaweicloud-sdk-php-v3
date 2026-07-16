<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IntelligentKillSessionHistory implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IntelligentKillSessionHistory';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskId  **参数解释**：  智能Kill会话动作任务ID。  **取值范围**：  不涉及。
    * startTime  **参数解释**：  智能Kill会话动作起始时间。  **取值范围**：  开始执行智能Kill会话动作时刻的秒级时间戳。
    * endTime  **参数解释**：  智能Kill会话动作结束时间。  **取值范围**：  结束执行智能Kill会话动作时刻的秒级时间戳。
    * downloadLink  **参数解释**：  智能Kill会话历史记录下载链接。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskId' => 'string',
            'startTime' => 'int',
            'endTime' => 'int',
            'downloadLink' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskId  **参数解释**：  智能Kill会话动作任务ID。  **取值范围**：  不涉及。
    * startTime  **参数解释**：  智能Kill会话动作起始时间。  **取值范围**：  开始执行智能Kill会话动作时刻的秒级时间戳。
    * endTime  **参数解释**：  智能Kill会话动作结束时间。  **取值范围**：  结束执行智能Kill会话动作时刻的秒级时间戳。
    * downloadLink  **参数解释**：  智能Kill会话历史记录下载链接。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskId' => null,
        'startTime' => 'int64',
        'endTime' => 'int64',
        'downloadLink' => null
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
    * taskId  **参数解释**：  智能Kill会话动作任务ID。  **取值范围**：  不涉及。
    * startTime  **参数解释**：  智能Kill会话动作起始时间。  **取值范围**：  开始执行智能Kill会话动作时刻的秒级时间戳。
    * endTime  **参数解释**：  智能Kill会话动作结束时间。  **取值范围**：  结束执行智能Kill会话动作时刻的秒级时间戳。
    * downloadLink  **参数解释**：  智能Kill会话历史记录下载链接。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskId' => 'task_id',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'downloadLink' => 'download_link'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskId  **参数解释**：  智能Kill会话动作任务ID。  **取值范围**：  不涉及。
    * startTime  **参数解释**：  智能Kill会话动作起始时间。  **取值范围**：  开始执行智能Kill会话动作时刻的秒级时间戳。
    * endTime  **参数解释**：  智能Kill会话动作结束时间。  **取值范围**：  结束执行智能Kill会话动作时刻的秒级时间戳。
    * downloadLink  **参数解释**：  智能Kill会话历史记录下载链接。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'taskId' => 'setTaskId',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'downloadLink' => 'setDownloadLink'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskId  **参数解释**：  智能Kill会话动作任务ID。  **取值范围**：  不涉及。
    * startTime  **参数解释**：  智能Kill会话动作起始时间。  **取值范围**：  开始执行智能Kill会话动作时刻的秒级时间戳。
    * endTime  **参数解释**：  智能Kill会话动作结束时间。  **取值范围**：  结束执行智能Kill会话动作时刻的秒级时间戳。
    * downloadLink  **参数解释**：  智能Kill会话历史记录下载链接。  **取值范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'taskId' => 'getTaskId',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'downloadLink' => 'getDownloadLink'
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
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['downloadLink'] = isset($data['downloadLink']) ? $data['downloadLink'] : null;
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
    * Gets taskId
    *  **参数解释**：  智能Kill会话动作任务ID。  **取值范围**：  不涉及。
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
    * @param string|null $taskId **参数解释**：  智能Kill会话动作任务ID。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets startTime
    *  **参数解释**：  智能Kill会话动作起始时间。  **取值范围**：  开始执行智能Kill会话动作时刻的秒级时间戳。
    *
    * @return int|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int|null $startTime **参数解释**：  智能Kill会话动作起始时间。  **取值范围**：  开始执行智能Kill会话动作时刻的秒级时间戳。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  **参数解释**：  智能Kill会话动作结束时间。  **取值范围**：  结束执行智能Kill会话动作时刻的秒级时间戳。
    *
    * @return int|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int|null $endTime **参数解释**：  智能Kill会话动作结束时间。  **取值范围**：  结束执行智能Kill会话动作时刻的秒级时间戳。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets downloadLink
    *  **参数解释**：  智能Kill会话历史记录下载链接。  **取值范围**：  不涉及。
    *
    * @return string|null
    */
    public function getDownloadLink()
    {
        return $this->container['downloadLink'];
    }

    /**
    * Sets downloadLink
    *
    * @param string|null $downloadLink **参数解释**：  智能Kill会话历史记录下载链接。  **取值范围**：  不涉及。
    *
    * @return $this
    */
    public function setDownloadLink($downloadLink)
    {
        $this->container['downloadLink'] = $downloadLink;
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

