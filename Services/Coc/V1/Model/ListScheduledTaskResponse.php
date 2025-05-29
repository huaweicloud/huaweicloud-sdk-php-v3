<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListScheduledTaskResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListScheduledTaskResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * count  定时运维总数量
    * nextMaker  下次起始点
    * scheduledTasks  定时运维列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'count' => 'int',
            'nextMaker' => 'string',
            'scheduledTasks' => '\HuaweiCloud\SDK\Coc\V1\Model\ScheduledTaskBasicInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * count  定时运维总数量
    * nextMaker  下次起始点
    * scheduledTasks  定时运维列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'count' => 'int64',
        'nextMaker' => null,
        'scheduledTasks' => null
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
    * count  定时运维总数量
    * nextMaker  下次起始点
    * scheduledTasks  定时运维列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'count' => 'count',
            'nextMaker' => 'next_maker',
            'scheduledTasks' => 'scheduled_tasks'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * count  定时运维总数量
    * nextMaker  下次起始点
    * scheduledTasks  定时运维列表
    *
    * @var string[]
    */
    protected static $setters = [
            'count' => 'setCount',
            'nextMaker' => 'setNextMaker',
            'scheduledTasks' => 'setScheduledTasks'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * count  定时运维总数量
    * nextMaker  下次起始点
    * scheduledTasks  定时运维列表
    *
    * @var string[]
    */
    protected static $getters = [
            'count' => 'getCount',
            'nextMaker' => 'getNextMaker',
            'scheduledTasks' => 'getScheduledTasks'
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
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['nextMaker'] = isset($data['nextMaker']) ? $data['nextMaker'] : null;
        $this->container['scheduledTasks'] = isset($data['scheduledTasks']) ? $data['scheduledTasks'] : null;
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
    * Gets count
    *  定时运维总数量
    *
    * @return int|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int|null $count 定时运维总数量
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets nextMaker
    *  下次起始点
    *
    * @return string|null
    */
    public function getNextMaker()
    {
        return $this->container['nextMaker'];
    }

    /**
    * Sets nextMaker
    *
    * @param string|null $nextMaker 下次起始点
    *
    * @return $this
    */
    public function setNextMaker($nextMaker)
    {
        $this->container['nextMaker'] = $nextMaker;
        return $this;
    }

    /**
    * Gets scheduledTasks
    *  定时运维列表
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\ScheduledTaskBasicInfo[]|null
    */
    public function getScheduledTasks()
    {
        return $this->container['scheduledTasks'];
    }

    /**
    * Sets scheduledTasks
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\ScheduledTaskBasicInfo[]|null $scheduledTasks 定时运维列表
    *
    * @return $this
    */
    public function setScheduledTasks($scheduledTasks)
    {
        $this->container['scheduledTasks'] = $scheduledTasks;
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

