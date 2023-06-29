<?php

namespace HuaweiCloud\SDK\CodeArtsDeploy\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TasksSuccessRateQuery implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TasksSuccessRateQuery';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * startDate  部署应用开始时间范围的左边界（包含），格式yyyy-MM-dd
    * endDate  部署应用开始时间范围的右边界（包含），格式yyyy-MM-dd 。最大时间范围为1年。
    * taskIds  任务id列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'startDate' => 'string',
            'endDate' => 'string',
            'taskIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * startDate  部署应用开始时间范围的左边界（包含），格式yyyy-MM-dd
    * endDate  部署应用开始时间范围的右边界（包含），格式yyyy-MM-dd 。最大时间范围为1年。
    * taskIds  任务id列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'startDate' => null,
        'endDate' => null,
        'taskIds' => null
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
    * startDate  部署应用开始时间范围的左边界（包含），格式yyyy-MM-dd
    * endDate  部署应用开始时间范围的右边界（包含），格式yyyy-MM-dd 。最大时间范围为1年。
    * taskIds  任务id列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'startDate' => 'start_date',
            'endDate' => 'end_date',
            'taskIds' => 'task_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * startDate  部署应用开始时间范围的左边界（包含），格式yyyy-MM-dd
    * endDate  部署应用开始时间范围的右边界（包含），格式yyyy-MM-dd 。最大时间范围为1年。
    * taskIds  任务id列表
    *
    * @var string[]
    */
    protected static $setters = [
            'startDate' => 'setStartDate',
            'endDate' => 'setEndDate',
            'taskIds' => 'setTaskIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * startDate  部署应用开始时间范围的左边界（包含），格式yyyy-MM-dd
    * endDate  部署应用开始时间范围的右边界（包含），格式yyyy-MM-dd 。最大时间范围为1年。
    * taskIds  任务id列表
    *
    * @var string[]
    */
    protected static $getters = [
            'startDate' => 'getStartDate',
            'endDate' => 'getEndDate',
            'taskIds' => 'getTaskIds'
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
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['endDate'] = isset($data['endDate']) ? $data['endDate'] : null;
        $this->container['taskIds'] = isset($data['taskIds']) ? $data['taskIds'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['startDate'] === null) {
            $invalidProperties[] = "'startDate' can't be null";
        }
        if ($this->container['endDate'] === null) {
            $invalidProperties[] = "'endDate' can't be null";
        }
        if ($this->container['taskIds'] === null) {
            $invalidProperties[] = "'taskIds' can't be null";
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
    * Gets startDate
    *  部署应用开始时间范围的左边界（包含），格式yyyy-MM-dd
    *
    * @return string
    */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
    * Sets startDate
    *
    * @param string $startDate 部署应用开始时间范围的左边界（包含），格式yyyy-MM-dd
    *
    * @return $this
    */
    public function setStartDate($startDate)
    {
        $this->container['startDate'] = $startDate;
        return $this;
    }

    /**
    * Gets endDate
    *  部署应用开始时间范围的右边界（包含），格式yyyy-MM-dd 。最大时间范围为1年。
    *
    * @return string
    */
    public function getEndDate()
    {
        return $this->container['endDate'];
    }

    /**
    * Sets endDate
    *
    * @param string $endDate 部署应用开始时间范围的右边界（包含），格式yyyy-MM-dd 。最大时间范围为1年。
    *
    * @return $this
    */
    public function setEndDate($endDate)
    {
        $this->container['endDate'] = $endDate;
        return $this;
    }

    /**
    * Gets taskIds
    *  任务id列表
    *
    * @return string[]
    */
    public function getTaskIds()
    {
        return $this->container['taskIds'];
    }

    /**
    * Sets taskIds
    *
    * @param string[] $taskIds 任务id列表
    *
    * @return $this
    */
    public function setTaskIds($taskIds)
    {
        $this->container['taskIds'] = $taskIds;
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

