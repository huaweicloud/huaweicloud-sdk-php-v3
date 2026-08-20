<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListExportTasksRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListExportTasksRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * limit  **参数解释：** 每页显示的条目数量 **约束限制：** 不涉及 **取值范围：** 0-100 **默认取值：** 10
    * offset  **参数解释：** 偏移量 > 表示从此偏移量开始查询  **约束限制：** 不涉及 **取值范围：** offset大于等于0 **默认取值：** 0
    * taskId  **参数解释：** 任务id **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * taskName  **参数解释：** 任务名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'limit' => 'int',
            'offset' => 'int',
            'taskId' => 'string',
            'taskName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * limit  **参数解释：** 每页显示的条目数量 **约束限制：** 不涉及 **取值范围：** 0-100 **默认取值：** 10
    * offset  **参数解释：** 偏移量 > 表示从此偏移量开始查询  **约束限制：** 不涉及 **取值范围：** offset大于等于0 **默认取值：** 0
    * taskId  **参数解释：** 任务id **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * taskName  **参数解释：** 任务名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'limit' => 'int32',
        'offset' => null,
        'taskId' => null,
        'taskName' => null
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
    * limit  **参数解释：** 每页显示的条目数量 **约束限制：** 不涉及 **取值范围：** 0-100 **默认取值：** 10
    * offset  **参数解释：** 偏移量 > 表示从此偏移量开始查询  **约束限制：** 不涉及 **取值范围：** offset大于等于0 **默认取值：** 0
    * taskId  **参数解释：** 任务id **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * taskName  **参数解释：** 任务名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'limit' => 'limit',
            'offset' => 'offset',
            'taskId' => 'task_id',
            'taskName' => 'task_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * limit  **参数解释：** 每页显示的条目数量 **约束限制：** 不涉及 **取值范围：** 0-100 **默认取值：** 10
    * offset  **参数解释：** 偏移量 > 表示从此偏移量开始查询  **约束限制：** 不涉及 **取值范围：** offset大于等于0 **默认取值：** 0
    * taskId  **参数解释：** 任务id **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * taskName  **参数解释：** 任务名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'taskId' => 'setTaskId',
            'taskName' => 'setTaskName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * limit  **参数解释：** 每页显示的条目数量 **约束限制：** 不涉及 **取值范围：** 0-100 **默认取值：** 10
    * offset  **参数解释：** 偏移量 > 表示从此偏移量开始查询  **约束限制：** 不涉及 **取值范围：** offset大于等于0 **默认取值：** 0
    * taskId  **参数解释：** 任务id **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * taskName  **参数解释：** 任务名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'taskId' => 'getTaskId',
            'taskName' => 'getTaskName'
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
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['taskName'] = isset($data['taskName']) ? $data['taskName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
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
    * Gets limit
    *  **参数解释：** 每页显示的条目数量 **约束限制：** 不涉及 **取值范围：** 0-100 **默认取值：** 10
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit **参数解释：** 每页显示的条目数量 **约束限制：** 不涉及 **取值范围：** 0-100 **默认取值：** 10
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释：** 偏移量 > 表示从此偏移量开始查询  **约束限制：** 不涉及 **取值范围：** offset大于等于0 **默认取值：** 0
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset **参数解释：** 偏移量 > 表示从此偏移量开始查询  **约束限制：** 不涉及 **取值范围：** offset大于等于0 **默认取值：** 0
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets taskId
    *  **参数解释：** 任务id **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    * @param string|null $taskId **参数解释：** 任务id **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets taskName
    *  **参数解释：** 任务名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    * @param string|null $taskName **参数解释：** 任务名称 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setTaskName($taskName)
    {
        $this->container['taskName'] = $taskName;
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

