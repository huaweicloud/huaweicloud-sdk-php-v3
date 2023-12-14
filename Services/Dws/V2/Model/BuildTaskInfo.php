<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BuildTaskInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BuildTaskInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * buildMode  任务模式
    * startTime  任务开始时间
    * endTime  任务结束时间
    * categoryId  策略ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'buildMode' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'categoryId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * buildMode  任务模式
    * startTime  任务开始时间
    * endTime  任务结束时间
    * categoryId  策略ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'buildMode' => null,
        'startTime' => null,
        'endTime' => null,
        'categoryId' => null
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
    * buildMode  任务模式
    * startTime  任务开始时间
    * endTime  任务结束时间
    * categoryId  策略ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'buildMode' => 'build_mode',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'categoryId' => 'category_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * buildMode  任务模式
    * startTime  任务开始时间
    * endTime  任务结束时间
    * categoryId  策略ID
    *
    * @var string[]
    */
    protected static $setters = [
            'buildMode' => 'setBuildMode',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'categoryId' => 'setCategoryId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * buildMode  任务模式
    * startTime  任务开始时间
    * endTime  任务结束时间
    * categoryId  策略ID
    *
    * @var string[]
    */
    protected static $getters = [
            'buildMode' => 'getBuildMode',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'categoryId' => 'getCategoryId'
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
        $this->container['buildMode'] = isset($data['buildMode']) ? $data['buildMode'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['categoryId'] = isset($data['categoryId']) ? $data['categoryId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['buildMode'] === null) {
            $invalidProperties[] = "'buildMode' can't be null";
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
    * Gets buildMode
    *  任务模式
    *
    * @return string
    */
    public function getBuildMode()
    {
        return $this->container['buildMode'];
    }

    /**
    * Sets buildMode
    *
    * @param string $buildMode 任务模式
    *
    * @return $this
    */
    public function setBuildMode($buildMode)
    {
        $this->container['buildMode'] = $buildMode;
        return $this;
    }

    /**
    * Gets startTime
    *  任务开始时间
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime 任务开始时间
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
    *  任务结束时间
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime 任务结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets categoryId
    *  策略ID
    *
    * @return string|null
    */
    public function getCategoryId()
    {
        return $this->container['categoryId'];
    }

    /**
    * Sets categoryId
    *
    * @param string|null $categoryId 策略ID
    *
    * @return $this
    */
    public function setCategoryId($categoryId)
    {
        $this->container['categoryId'] = $categoryId;
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

