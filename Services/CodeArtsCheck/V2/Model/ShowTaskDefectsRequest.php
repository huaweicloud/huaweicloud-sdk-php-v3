<?php

namespace HuaweiCloud\SDK\CodeArtsCheck\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowTaskDefectsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowTaskDefectsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskId  任务ID
    * offset  分页索引，偏移量
    * limit  每页显示的数量,每页最多显示100条
    * statusIds  问题状态筛选
    * severity  严重级别，0致命，1严重，2一般，3提示
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskId' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'statusIds' => 'string',
            'severity' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskId  任务ID
    * offset  分页索引，偏移量
    * limit  每页显示的数量,每页最多显示100条
    * statusIds  问题状态筛选
    * severity  严重级别，0致命，1严重，2一般，3提示
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskId' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'statusIds' => null,
        'severity' => null
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
    * taskId  任务ID
    * offset  分页索引，偏移量
    * limit  每页显示的数量,每页最多显示100条
    * statusIds  问题状态筛选
    * severity  严重级别，0致命，1严重，2一般，3提示
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskId' => 'task_id',
            'offset' => 'offset',
            'limit' => 'limit',
            'statusIds' => 'status_ids',
            'severity' => 'severity'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskId  任务ID
    * offset  分页索引，偏移量
    * limit  每页显示的数量,每页最多显示100条
    * statusIds  问题状态筛选
    * severity  严重级别，0致命，1严重，2一般，3提示
    *
    * @var string[]
    */
    protected static $setters = [
            'taskId' => 'setTaskId',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'statusIds' => 'setStatusIds',
            'severity' => 'setSeverity'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskId  任务ID
    * offset  分页索引，偏移量
    * limit  每页显示的数量,每页最多显示100条
    * statusIds  问题状态筛选
    * severity  严重级别，0致命，1严重，2一般，3提示
    *
    * @var string[]
    */
    protected static $getters = [
            'taskId' => 'getTaskId',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'statusIds' => 'getStatusIds',
            'severity' => 'getSeverity'
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
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['statusIds'] = isset($data['statusIds']) ? $data['statusIds'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['taskId'] === null) {
            $invalidProperties[] = "'taskId' can't be null";
        }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
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
    * Gets taskId
    *  任务ID
    *
    * @return string
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param string $taskId 任务ID
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets offset
    *  分页索引，偏移量
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
    * @param int|null $offset 分页索引，偏移量
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  每页显示的数量,每页最多显示100条
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
    * @param int|null $limit 每页显示的数量,每页最多显示100条
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets statusIds
    *  问题状态筛选
    *
    * @return string|null
    */
    public function getStatusIds()
    {
        return $this->container['statusIds'];
    }

    /**
    * Sets statusIds
    *
    * @param string|null $statusIds 问题状态筛选
    *
    * @return $this
    */
    public function setStatusIds($statusIds)
    {
        $this->container['statusIds'] = $statusIds;
        return $this;
    }

    /**
    * Gets severity
    *  严重级别，0致命，1严重，2一般，3提示
    *
    * @return string|null
    */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
    * Sets severity
    *
    * @param string|null $severity 严重级别，0致命，1严重，2一般，3提示
    *
    * @return $this
    */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;
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

