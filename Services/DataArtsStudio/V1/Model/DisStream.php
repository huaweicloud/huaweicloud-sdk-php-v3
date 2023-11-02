<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DisStream implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DisStream';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * streamName  通道名称
    * streamGuid  通道GUID
    * streamQualifiedName  通道的唯一标识名称
    * partitionCount  分区数
    * appCount  dis的app数目
    * taskCount  转储任务数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'streamName' => 'string',
            'streamGuid' => 'string',
            'streamQualifiedName' => 'string',
            'partitionCount' => 'int',
            'appCount' => 'int',
            'taskCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * streamName  通道名称
    * streamGuid  通道GUID
    * streamQualifiedName  通道的唯一标识名称
    * partitionCount  分区数
    * appCount  dis的app数目
    * taskCount  转储任务数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'streamName' => null,
        'streamGuid' => null,
        'streamQualifiedName' => null,
        'partitionCount' => null,
        'appCount' => null,
        'taskCount' => null
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
    * streamName  通道名称
    * streamGuid  通道GUID
    * streamQualifiedName  通道的唯一标识名称
    * partitionCount  分区数
    * appCount  dis的app数目
    * taskCount  转储任务数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'streamName' => 'stream_name',
            'streamGuid' => 'stream_guid',
            'streamQualifiedName' => 'stream_qualified_name',
            'partitionCount' => 'partition_count',
            'appCount' => 'app_count',
            'taskCount' => 'task_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * streamName  通道名称
    * streamGuid  通道GUID
    * streamQualifiedName  通道的唯一标识名称
    * partitionCount  分区数
    * appCount  dis的app数目
    * taskCount  转储任务数
    *
    * @var string[]
    */
    protected static $setters = [
            'streamName' => 'setStreamName',
            'streamGuid' => 'setStreamGuid',
            'streamQualifiedName' => 'setStreamQualifiedName',
            'partitionCount' => 'setPartitionCount',
            'appCount' => 'setAppCount',
            'taskCount' => 'setTaskCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * streamName  通道名称
    * streamGuid  通道GUID
    * streamQualifiedName  通道的唯一标识名称
    * partitionCount  分区数
    * appCount  dis的app数目
    * taskCount  转储任务数
    *
    * @var string[]
    */
    protected static $getters = [
            'streamName' => 'getStreamName',
            'streamGuid' => 'getStreamGuid',
            'streamQualifiedName' => 'getStreamQualifiedName',
            'partitionCount' => 'getPartitionCount',
            'appCount' => 'getAppCount',
            'taskCount' => 'getTaskCount'
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
        $this->container['streamName'] = isset($data['streamName']) ? $data['streamName'] : null;
        $this->container['streamGuid'] = isset($data['streamGuid']) ? $data['streamGuid'] : null;
        $this->container['streamQualifiedName'] = isset($data['streamQualifiedName']) ? $data['streamQualifiedName'] : null;
        $this->container['partitionCount'] = isset($data['partitionCount']) ? $data['partitionCount'] : null;
        $this->container['appCount'] = isset($data['appCount']) ? $data['appCount'] : null;
        $this->container['taskCount'] = isset($data['taskCount']) ? $data['taskCount'] : null;
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
    * Gets streamName
    *  通道名称
    *
    * @return string|null
    */
    public function getStreamName()
    {
        return $this->container['streamName'];
    }

    /**
    * Sets streamName
    *
    * @param string|null $streamName 通道名称
    *
    * @return $this
    */
    public function setStreamName($streamName)
    {
        $this->container['streamName'] = $streamName;
        return $this;
    }

    /**
    * Gets streamGuid
    *  通道GUID
    *
    * @return string|null
    */
    public function getStreamGuid()
    {
        return $this->container['streamGuid'];
    }

    /**
    * Sets streamGuid
    *
    * @param string|null $streamGuid 通道GUID
    *
    * @return $this
    */
    public function setStreamGuid($streamGuid)
    {
        $this->container['streamGuid'] = $streamGuid;
        return $this;
    }

    /**
    * Gets streamQualifiedName
    *  通道的唯一标识名称
    *
    * @return string|null
    */
    public function getStreamQualifiedName()
    {
        return $this->container['streamQualifiedName'];
    }

    /**
    * Sets streamQualifiedName
    *
    * @param string|null $streamQualifiedName 通道的唯一标识名称
    *
    * @return $this
    */
    public function setStreamQualifiedName($streamQualifiedName)
    {
        $this->container['streamQualifiedName'] = $streamQualifiedName;
        return $this;
    }

    /**
    * Gets partitionCount
    *  分区数
    *
    * @return int|null
    */
    public function getPartitionCount()
    {
        return $this->container['partitionCount'];
    }

    /**
    * Sets partitionCount
    *
    * @param int|null $partitionCount 分区数
    *
    * @return $this
    */
    public function setPartitionCount($partitionCount)
    {
        $this->container['partitionCount'] = $partitionCount;
        return $this;
    }

    /**
    * Gets appCount
    *  dis的app数目
    *
    * @return int|null
    */
    public function getAppCount()
    {
        return $this->container['appCount'];
    }

    /**
    * Sets appCount
    *
    * @param int|null $appCount dis的app数目
    *
    * @return $this
    */
    public function setAppCount($appCount)
    {
        $this->container['appCount'] = $appCount;
        return $this;
    }

    /**
    * Gets taskCount
    *  转储任务数
    *
    * @return int|null
    */
    public function getTaskCount()
    {
        return $this->container['taskCount'];
    }

    /**
    * Sets taskCount
    *
    * @param int|null $taskCount 转储任务数
    *
    * @return $this
    */
    public function setTaskCount($taskCount)
    {
        $this->container['taskCount'] = $taskCount;
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

