<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateWdrReportRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateWdrReportRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nodeId  实例节点ID，实例节点的唯一标识。仅支持GaussDB实例节点
    * startSnapshotId  WDR快照开始ID
    * endSnapshotId  WDR快照结束ID
    * timeZone  时区。格式：Asia/Shanghai
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nodeId' => 'string',
            'startSnapshotId' => 'int',
            'endSnapshotId' => 'int',
            'timeZone' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nodeId  实例节点ID，实例节点的唯一标识。仅支持GaussDB实例节点
    * startSnapshotId  WDR快照开始ID
    * endSnapshotId  WDR快照结束ID
    * timeZone  时区。格式：Asia/Shanghai
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nodeId' => null,
        'startSnapshotId' => 'int64',
        'endSnapshotId' => 'int64',
        'timeZone' => null
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
    * nodeId  实例节点ID，实例节点的唯一标识。仅支持GaussDB实例节点
    * startSnapshotId  WDR快照开始ID
    * endSnapshotId  WDR快照结束ID
    * timeZone  时区。格式：Asia/Shanghai
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nodeId' => 'node_id',
            'startSnapshotId' => 'start_snapshot_id',
            'endSnapshotId' => 'end_snapshot_id',
            'timeZone' => 'time_zone'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nodeId  实例节点ID，实例节点的唯一标识。仅支持GaussDB实例节点
    * startSnapshotId  WDR快照开始ID
    * endSnapshotId  WDR快照结束ID
    * timeZone  时区。格式：Asia/Shanghai
    *
    * @var string[]
    */
    protected static $setters = [
            'nodeId' => 'setNodeId',
            'startSnapshotId' => 'setStartSnapshotId',
            'endSnapshotId' => 'setEndSnapshotId',
            'timeZone' => 'setTimeZone'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nodeId  实例节点ID，实例节点的唯一标识。仅支持GaussDB实例节点
    * startSnapshotId  WDR快照开始ID
    * endSnapshotId  WDR快照结束ID
    * timeZone  时区。格式：Asia/Shanghai
    *
    * @var string[]
    */
    protected static $getters = [
            'nodeId' => 'getNodeId',
            'startSnapshotId' => 'getStartSnapshotId',
            'endSnapshotId' => 'getEndSnapshotId',
            'timeZone' => 'getTimeZone'
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
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['startSnapshotId'] = isset($data['startSnapshotId']) ? $data['startSnapshotId'] : null;
        $this->container['endSnapshotId'] = isset($data['endSnapshotId']) ? $data['endSnapshotId'] : null;
        $this->container['timeZone'] = isset($data['timeZone']) ? $data['timeZone'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['nodeId'] === null) {
            $invalidProperties[] = "'nodeId' can't be null";
        }
        if ($this->container['startSnapshotId'] === null) {
            $invalidProperties[] = "'startSnapshotId' can't be null";
        }
        if ($this->container['endSnapshotId'] === null) {
            $invalidProperties[] = "'endSnapshotId' can't be null";
        }
        if ($this->container['timeZone'] === null) {
            $invalidProperties[] = "'timeZone' can't be null";
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
    * Gets nodeId
    *  实例节点ID，实例节点的唯一标识。仅支持GaussDB实例节点
    *
    * @return string
    */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
    * Sets nodeId
    *
    * @param string $nodeId 实例节点ID，实例节点的唯一标识。仅支持GaussDB实例节点
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets startSnapshotId
    *  WDR快照开始ID
    *
    * @return int
    */
    public function getStartSnapshotId()
    {
        return $this->container['startSnapshotId'];
    }

    /**
    * Sets startSnapshotId
    *
    * @param int $startSnapshotId WDR快照开始ID
    *
    * @return $this
    */
    public function setStartSnapshotId($startSnapshotId)
    {
        $this->container['startSnapshotId'] = $startSnapshotId;
        return $this;
    }

    /**
    * Gets endSnapshotId
    *  WDR快照结束ID
    *
    * @return int
    */
    public function getEndSnapshotId()
    {
        return $this->container['endSnapshotId'];
    }

    /**
    * Sets endSnapshotId
    *
    * @param int $endSnapshotId WDR快照结束ID
    *
    * @return $this
    */
    public function setEndSnapshotId($endSnapshotId)
    {
        $this->container['endSnapshotId'] = $endSnapshotId;
        return $this;
    }

    /**
    * Gets timeZone
    *  时区。格式：Asia/Shanghai
    *
    * @return string
    */
    public function getTimeZone()
    {
        return $this->container['timeZone'];
    }

    /**
    * Sets timeZone
    *
    * @param string $timeZone 时区。格式：Asia/Shanghai
    *
    * @return $this
    */
    public function setTimeZone($timeZone)
    {
        $this->container['timeZone'] = $timeZone;
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

