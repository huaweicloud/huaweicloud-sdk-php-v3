<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowTaskListResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowTaskListResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * count  查询采集任务数量
    * totalRecords  同一projectId下已创建采集任务数量
    * maxRecords  同一projectId下允许创建采集任务数量
    * resources  采集任务列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'count' => 'int',
            'totalRecords' => 'int',
            'maxRecords' => 'int',
            'resources' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\MetadataCollectionTask[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * count  查询采集任务数量
    * totalRecords  同一projectId下已创建采集任务数量
    * maxRecords  同一projectId下允许创建采集任务数量
    * resources  采集任务列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'count' => null,
        'totalRecords' => null,
        'maxRecords' => null,
        'resources' => null
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
    * count  查询采集任务数量
    * totalRecords  同一projectId下已创建采集任务数量
    * maxRecords  同一projectId下允许创建采集任务数量
    * resources  采集任务列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'count' => 'count',
            'totalRecords' => 'total_records',
            'maxRecords' => 'max_records',
            'resources' => 'resources'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * count  查询采集任务数量
    * totalRecords  同一projectId下已创建采集任务数量
    * maxRecords  同一projectId下允许创建采集任务数量
    * resources  采集任务列表
    *
    * @var string[]
    */
    protected static $setters = [
            'count' => 'setCount',
            'totalRecords' => 'setTotalRecords',
            'maxRecords' => 'setMaxRecords',
            'resources' => 'setResources'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * count  查询采集任务数量
    * totalRecords  同一projectId下已创建采集任务数量
    * maxRecords  同一projectId下允许创建采集任务数量
    * resources  采集任务列表
    *
    * @var string[]
    */
    protected static $getters = [
            'count' => 'getCount',
            'totalRecords' => 'getTotalRecords',
            'maxRecords' => 'getMaxRecords',
            'resources' => 'getResources'
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
        $this->container['totalRecords'] = isset($data['totalRecords']) ? $data['totalRecords'] : null;
        $this->container['maxRecords'] = isset($data['maxRecords']) ? $data['maxRecords'] : null;
        $this->container['resources'] = isset($data['resources']) ? $data['resources'] : null;
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
    *  查询采集任务数量
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
    * @param int|null $count 查询采集任务数量
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets totalRecords
    *  同一projectId下已创建采集任务数量
    *
    * @return int|null
    */
    public function getTotalRecords()
    {
        return $this->container['totalRecords'];
    }

    /**
    * Sets totalRecords
    *
    * @param int|null $totalRecords 同一projectId下已创建采集任务数量
    *
    * @return $this
    */
    public function setTotalRecords($totalRecords)
    {
        $this->container['totalRecords'] = $totalRecords;
        return $this;
    }

    /**
    * Gets maxRecords
    *  同一projectId下允许创建采集任务数量
    *
    * @return int|null
    */
    public function getMaxRecords()
    {
        return $this->container['maxRecords'];
    }

    /**
    * Sets maxRecords
    *
    * @param int|null $maxRecords 同一projectId下允许创建采集任务数量
    *
    * @return $this
    */
    public function setMaxRecords($maxRecords)
    {
        $this->container['maxRecords'] = $maxRecords;
        return $this;
    }

    /**
    * Gets resources
    *  采集任务列表
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\MetadataCollectionTask[]|null
    */
    public function getResources()
    {
        return $this->container['resources'];
    }

    /**
    * Sets resources
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\MetadataCollectionTask[]|null $resources 采集任务列表
    *
    * @return $this
    */
    public function setResources($resources)
    {
        $this->container['resources'] = $resources;
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

