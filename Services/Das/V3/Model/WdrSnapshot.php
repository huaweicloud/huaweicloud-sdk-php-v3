<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WdrSnapshot implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WdrSnapshot';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * snapshotId  快照ID
    * startAt  开始时间（Unix timestamp），单位：毫秒
    * endAt  结束时间（Unix timestamp），单位：毫秒
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'snapshotId' => 'int',
            'startAt' => 'int',
            'endAt' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * snapshotId  快照ID
    * startAt  开始时间（Unix timestamp），单位：毫秒
    * endAt  结束时间（Unix timestamp），单位：毫秒
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'snapshotId' => 'int64',
        'startAt' => 'int64',
        'endAt' => 'int64'
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
    * snapshotId  快照ID
    * startAt  开始时间（Unix timestamp），单位：毫秒
    * endAt  结束时间（Unix timestamp），单位：毫秒
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'snapshotId' => 'snapshot_id',
            'startAt' => 'start_at',
            'endAt' => 'end_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * snapshotId  快照ID
    * startAt  开始时间（Unix timestamp），单位：毫秒
    * endAt  结束时间（Unix timestamp），单位：毫秒
    *
    * @var string[]
    */
    protected static $setters = [
            'snapshotId' => 'setSnapshotId',
            'startAt' => 'setStartAt',
            'endAt' => 'setEndAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * snapshotId  快照ID
    * startAt  开始时间（Unix timestamp），单位：毫秒
    * endAt  结束时间（Unix timestamp），单位：毫秒
    *
    * @var string[]
    */
    protected static $getters = [
            'snapshotId' => 'getSnapshotId',
            'startAt' => 'getStartAt',
            'endAt' => 'getEndAt'
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
        $this->container['snapshotId'] = isset($data['snapshotId']) ? $data['snapshotId'] : null;
        $this->container['startAt'] = isset($data['startAt']) ? $data['startAt'] : null;
        $this->container['endAt'] = isset($data['endAt']) ? $data['endAt'] : null;
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
    * Gets snapshotId
    *  快照ID
    *
    * @return int|null
    */
    public function getSnapshotId()
    {
        return $this->container['snapshotId'];
    }

    /**
    * Sets snapshotId
    *
    * @param int|null $snapshotId 快照ID
    *
    * @return $this
    */
    public function setSnapshotId($snapshotId)
    {
        $this->container['snapshotId'] = $snapshotId;
        return $this;
    }

    /**
    * Gets startAt
    *  开始时间（Unix timestamp），单位：毫秒
    *
    * @return int|null
    */
    public function getStartAt()
    {
        return $this->container['startAt'];
    }

    /**
    * Sets startAt
    *
    * @param int|null $startAt 开始时间（Unix timestamp），单位：毫秒
    *
    * @return $this
    */
    public function setStartAt($startAt)
    {
        $this->container['startAt'] = $startAt;
        return $this;
    }

    /**
    * Gets endAt
    *  结束时间（Unix timestamp），单位：毫秒
    *
    * @return int|null
    */
    public function getEndAt()
    {
        return $this->container['endAt'];
    }

    /**
    * Sets endAt
    *
    * @param int|null $endAt 结束时间（Unix timestamp），单位：毫秒
    *
    * @return $this
    */
    public function setEndAt($endAt)
    {
        $this->container['endAt'] = $endAt;
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

