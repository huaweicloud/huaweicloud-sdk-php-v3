<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowMigrationLogResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowMigrationLogResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskLogs  **参数解释**：  分片变更任务日志的集合。  **参数范围**：  不涉及。
    * curPage  **参数解释**：  当前页。  **参数范围**：  不涉及。
    * perPage  **参数解释**：  每页条数。  **参数范围**：  不涉及。
    * total  **参数解释**：  总量。  **参数范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskLogs' => '\HuaweiCloud\SDK\Ddm\V1\Model\TaskLogsVO[]',
            'curPage' => 'int',
            'perPage' => 'int',
            'total' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskLogs  **参数解释**：  分片变更任务日志的集合。  **参数范围**：  不涉及。
    * curPage  **参数解释**：  当前页。  **参数范围**：  不涉及。
    * perPage  **参数解释**：  每页条数。  **参数范围**：  不涉及。
    * total  **参数解释**：  总量。  **参数范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskLogs' => null,
        'curPage' => null,
        'perPage' => null,
        'total' => null
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
    * taskLogs  **参数解释**：  分片变更任务日志的集合。  **参数范围**：  不涉及。
    * curPage  **参数解释**：  当前页。  **参数范围**：  不涉及。
    * perPage  **参数解释**：  每页条数。  **参数范围**：  不涉及。
    * total  **参数解释**：  总量。  **参数范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskLogs' => 'task_logs',
            'curPage' => 'cur_page',
            'perPage' => 'per_page',
            'total' => 'total'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskLogs  **参数解释**：  分片变更任务日志的集合。  **参数范围**：  不涉及。
    * curPage  **参数解释**：  当前页。  **参数范围**：  不涉及。
    * perPage  **参数解释**：  每页条数。  **参数范围**：  不涉及。
    * total  **参数解释**：  总量。  **参数范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'taskLogs' => 'setTaskLogs',
            'curPage' => 'setCurPage',
            'perPage' => 'setPerPage',
            'total' => 'setTotal'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskLogs  **参数解释**：  分片变更任务日志的集合。  **参数范围**：  不涉及。
    * curPage  **参数解释**：  当前页。  **参数范围**：  不涉及。
    * perPage  **参数解释**：  每页条数。  **参数范围**：  不涉及。
    * total  **参数解释**：  总量。  **参数范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'taskLogs' => 'getTaskLogs',
            'curPage' => 'getCurPage',
            'perPage' => 'getPerPage',
            'total' => 'getTotal'
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
        $this->container['taskLogs'] = isset($data['taskLogs']) ? $data['taskLogs'] : null;
        $this->container['curPage'] = isset($data['curPage']) ? $data['curPage'] : null;
        $this->container['perPage'] = isset($data['perPage']) ? $data['perPage'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['curPage']) && ($this->container['curPage'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'curPage', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['curPage']) && ($this->container['curPage'] < 0)) {
                $invalidProperties[] = "invalid value for 'curPage', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['perPage']) && ($this->container['perPage'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'perPage', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['perPage']) && ($this->container['perPage'] < 0)) {
                $invalidProperties[] = "invalid value for 'perPage', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['total']) && ($this->container['total'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'total', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['total']) && ($this->container['total'] < 0)) {
                $invalidProperties[] = "invalid value for 'total', must be bigger than or equal to 0.";
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
    * Gets taskLogs
    *  **参数解释**：  分片变更任务日志的集合。  **参数范围**：  不涉及。
    *
    * @return \HuaweiCloud\SDK\Ddm\V1\Model\TaskLogsVO[]|null
    */
    public function getTaskLogs()
    {
        return $this->container['taskLogs'];
    }

    /**
    * Sets taskLogs
    *
    * @param \HuaweiCloud\SDK\Ddm\V1\Model\TaskLogsVO[]|null $taskLogs **参数解释**：  分片变更任务日志的集合。  **参数范围**：  不涉及。
    *
    * @return $this
    */
    public function setTaskLogs($taskLogs)
    {
        $this->container['taskLogs'] = $taskLogs;
        return $this;
    }

    /**
    * Gets curPage
    *  **参数解释**：  当前页。  **参数范围**：  不涉及。
    *
    * @return int|null
    */
    public function getCurPage()
    {
        return $this->container['curPage'];
    }

    /**
    * Sets curPage
    *
    * @param int|null $curPage **参数解释**：  当前页。  **参数范围**：  不涉及。
    *
    * @return $this
    */
    public function setCurPage($curPage)
    {
        $this->container['curPage'] = $curPage;
        return $this;
    }

    /**
    * Gets perPage
    *  **参数解释**：  每页条数。  **参数范围**：  不涉及。
    *
    * @return int|null
    */
    public function getPerPage()
    {
        return $this->container['perPage'];
    }

    /**
    * Sets perPage
    *
    * @param int|null $perPage **参数解释**：  每页条数。  **参数范围**：  不涉及。
    *
    * @return $this
    */
    public function setPerPage($perPage)
    {
        $this->container['perPage'] = $perPage;
        return $this;
    }

    /**
    * Gets total
    *  **参数解释**：  总量。  **参数范围**：  不涉及。
    *
    * @return int|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param int|null $total **参数解释**：  总量。  **参数范围**：  不涉及。
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
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

