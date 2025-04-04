<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RecordInfoReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RecordInfoReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * confUuid  会议uuid
    * segmentOffset  录制段落查询偏移量
    * segmentLimit  录制段落查询数量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'confUuid' => 'string',
            'segmentOffset' => 'int',
            'segmentLimit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * confUuid  会议uuid
    * segmentOffset  录制段落查询偏移量
    * segmentLimit  录制段落查询数量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'confUuid' => null,
        'segmentOffset' => null,
        'segmentLimit' => null
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
    * confUuid  会议uuid
    * segmentOffset  录制段落查询偏移量
    * segmentLimit  录制段落查询数量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'confUuid' => 'confUUID',
            'segmentOffset' => 'segmentOffset',
            'segmentLimit' => 'segmentLimit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * confUuid  会议uuid
    * segmentOffset  录制段落查询偏移量
    * segmentLimit  录制段落查询数量
    *
    * @var string[]
    */
    protected static $setters = [
            'confUuid' => 'setConfUuid',
            'segmentOffset' => 'setSegmentOffset',
            'segmentLimit' => 'setSegmentLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * confUuid  会议uuid
    * segmentOffset  录制段落查询偏移量
    * segmentLimit  录制段落查询数量
    *
    * @var string[]
    */
    protected static $getters = [
            'confUuid' => 'getConfUuid',
            'segmentOffset' => 'getSegmentOffset',
            'segmentLimit' => 'getSegmentLimit'
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
        $this->container['confUuid'] = isset($data['confUuid']) ? $data['confUuid'] : null;
        $this->container['segmentOffset'] = isset($data['segmentOffset']) ? $data['segmentOffset'] : null;
        $this->container['segmentLimit'] = isset($data['segmentLimit']) ? $data['segmentLimit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['confUuid'] === null) {
            $invalidProperties[] = "'confUuid' can't be null";
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
    * Gets confUuid
    *  会议uuid
    *
    * @return string
    */
    public function getConfUuid()
    {
        return $this->container['confUuid'];
    }

    /**
    * Sets confUuid
    *
    * @param string $confUuid 会议uuid
    *
    * @return $this
    */
    public function setConfUuid($confUuid)
    {
        $this->container['confUuid'] = $confUuid;
        return $this;
    }

    /**
    * Gets segmentOffset
    *  录制段落查询偏移量
    *
    * @return int|null
    */
    public function getSegmentOffset()
    {
        return $this->container['segmentOffset'];
    }

    /**
    * Sets segmentOffset
    *
    * @param int|null $segmentOffset 录制段落查询偏移量
    *
    * @return $this
    */
    public function setSegmentOffset($segmentOffset)
    {
        $this->container['segmentOffset'] = $segmentOffset;
        return $this;
    }

    /**
    * Gets segmentLimit
    *  录制段落查询数量
    *
    * @return int|null
    */
    public function getSegmentLimit()
    {
        return $this->container['segmentLimit'];
    }

    /**
    * Sets segmentLimit
    *
    * @param int|null $segmentLimit 录制段落查询数量
    *
    * @return $this
    */
    public function setSegmentLimit($segmentLimit)
    {
        $this->container['segmentLimit'] = $segmentLimit;
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

