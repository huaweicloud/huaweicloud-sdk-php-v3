<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResizeInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResizeInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * targetNodeNum  **参数解释**： 扩容后的节点数量。 **取值范围**： 不涉及。
    * originNodeNum  **参数解释**： 扩容前的节点数量。 **取值范围**： 不涉及。
    * resizeStatus  **参数解释**： 扩容状态。 **取值范围**： - GROWING：扩容中 - RESIZE_FAILURE：扩容失败。
    * startTime  **参数解释**： 扩容开始时间，格式为ISO8601：YYYY-MM-DDThh:mm:ss **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'targetNodeNum' => 'int',
            'originNodeNum' => 'int',
            'resizeStatus' => 'string',
            'startTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * targetNodeNum  **参数解释**： 扩容后的节点数量。 **取值范围**： 不涉及。
    * originNodeNum  **参数解释**： 扩容前的节点数量。 **取值范围**： 不涉及。
    * resizeStatus  **参数解释**： 扩容状态。 **取值范围**： - GROWING：扩容中 - RESIZE_FAILURE：扩容失败。
    * startTime  **参数解释**： 扩容开始时间，格式为ISO8601：YYYY-MM-DDThh:mm:ss **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'targetNodeNum' => 'int32',
        'originNodeNum' => 'int32',
        'resizeStatus' => null,
        'startTime' => null
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
    * targetNodeNum  **参数解释**： 扩容后的节点数量。 **取值范围**： 不涉及。
    * originNodeNum  **参数解释**： 扩容前的节点数量。 **取值范围**： 不涉及。
    * resizeStatus  **参数解释**： 扩容状态。 **取值范围**： - GROWING：扩容中 - RESIZE_FAILURE：扩容失败。
    * startTime  **参数解释**： 扩容开始时间，格式为ISO8601：YYYY-MM-DDThh:mm:ss **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'targetNodeNum' => 'target_node_num',
            'originNodeNum' => 'origin_node_num',
            'resizeStatus' => 'resize_status',
            'startTime' => 'start_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * targetNodeNum  **参数解释**： 扩容后的节点数量。 **取值范围**： 不涉及。
    * originNodeNum  **参数解释**： 扩容前的节点数量。 **取值范围**： 不涉及。
    * resizeStatus  **参数解释**： 扩容状态。 **取值范围**： - GROWING：扩容中 - RESIZE_FAILURE：扩容失败。
    * startTime  **参数解释**： 扩容开始时间，格式为ISO8601：YYYY-MM-DDThh:mm:ss **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'targetNodeNum' => 'setTargetNodeNum',
            'originNodeNum' => 'setOriginNodeNum',
            'resizeStatus' => 'setResizeStatus',
            'startTime' => 'setStartTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * targetNodeNum  **参数解释**： 扩容后的节点数量。 **取值范围**： 不涉及。
    * originNodeNum  **参数解释**： 扩容前的节点数量。 **取值范围**： 不涉及。
    * resizeStatus  **参数解释**： 扩容状态。 **取值范围**： - GROWING：扩容中 - RESIZE_FAILURE：扩容失败。
    * startTime  **参数解释**： 扩容开始时间，格式为ISO8601：YYYY-MM-DDThh:mm:ss **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'targetNodeNum' => 'getTargetNodeNum',
            'originNodeNum' => 'getOriginNodeNum',
            'resizeStatus' => 'getResizeStatus',
            'startTime' => 'getStartTime'
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
        $this->container['targetNodeNum'] = isset($data['targetNodeNum']) ? $data['targetNodeNum'] : null;
        $this->container['originNodeNum'] = isset($data['originNodeNum']) ? $data['originNodeNum'] : null;
        $this->container['resizeStatus'] = isset($data['resizeStatus']) ? $data['resizeStatus'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
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
    * Gets targetNodeNum
    *  **参数解释**： 扩容后的节点数量。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getTargetNodeNum()
    {
        return $this->container['targetNodeNum'];
    }

    /**
    * Sets targetNodeNum
    *
    * @param int|null $targetNodeNum **参数解释**： 扩容后的节点数量。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setTargetNodeNum($targetNodeNum)
    {
        $this->container['targetNodeNum'] = $targetNodeNum;
        return $this;
    }

    /**
    * Gets originNodeNum
    *  **参数解释**： 扩容前的节点数量。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getOriginNodeNum()
    {
        return $this->container['originNodeNum'];
    }

    /**
    * Sets originNodeNum
    *
    * @param int|null $originNodeNum **参数解释**： 扩容前的节点数量。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setOriginNodeNum($originNodeNum)
    {
        $this->container['originNodeNum'] = $originNodeNum;
        return $this;
    }

    /**
    * Gets resizeStatus
    *  **参数解释**： 扩容状态。 **取值范围**： - GROWING：扩容中 - RESIZE_FAILURE：扩容失败。
    *
    * @return string|null
    */
    public function getResizeStatus()
    {
        return $this->container['resizeStatus'];
    }

    /**
    * Sets resizeStatus
    *
    * @param string|null $resizeStatus **参数解释**： 扩容状态。 **取值范围**： - GROWING：扩容中 - RESIZE_FAILURE：扩容失败。
    *
    * @return $this
    */
    public function setResizeStatus($resizeStatus)
    {
        $this->container['resizeStatus'] = $resizeStatus;
        return $this;
    }

    /**
    * Gets startTime
    *  **参数解释**： 扩容开始时间，格式为ISO8601：YYYY-MM-DDThh:mm:ss **取值范围**： 不涉及。
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
    * @param string|null $startTime **参数解释**： 扩容开始时间，格式为ISO8601：YYYY-MM-DDThh:mm:ss **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
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

