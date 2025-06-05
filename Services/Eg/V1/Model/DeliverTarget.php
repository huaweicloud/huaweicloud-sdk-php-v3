<?php

namespace HuaweiCloud\SDK\Eg\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeliverTarget implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeliverTarget';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * deliverTargetId  投递目标ID，即事件目标ID
    * deliverTargetName  投递目标名称，及事件目标名称
    * deliverStatus  投递状态         SUCCESS Or  FAILED
    * deliverDetailList  考虑展示的个数    例如限制只展示最新三条
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'deliverTargetId' => 'string',
            'deliverTargetName' => 'string',
            'deliverStatus' => 'string',
            'deliverDetailList' => '\HuaweiCloud\SDK\Eg\V1\Model\DeliverDetail[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * deliverTargetId  投递目标ID，即事件目标ID
    * deliverTargetName  投递目标名称，及事件目标名称
    * deliverStatus  投递状态         SUCCESS Or  FAILED
    * deliverDetailList  考虑展示的个数    例如限制只展示最新三条
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'deliverTargetId' => null,
        'deliverTargetName' => null,
        'deliverStatus' => null,
        'deliverDetailList' => null
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
    * deliverTargetId  投递目标ID，即事件目标ID
    * deliverTargetName  投递目标名称，及事件目标名称
    * deliverStatus  投递状态         SUCCESS Or  FAILED
    * deliverDetailList  考虑展示的个数    例如限制只展示最新三条
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'deliverTargetId' => 'deliverTargetId',
            'deliverTargetName' => 'deliverTargetName',
            'deliverStatus' => 'deliverStatus',
            'deliverDetailList' => 'deliverDetailList'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * deliverTargetId  投递目标ID，即事件目标ID
    * deliverTargetName  投递目标名称，及事件目标名称
    * deliverStatus  投递状态         SUCCESS Or  FAILED
    * deliverDetailList  考虑展示的个数    例如限制只展示最新三条
    *
    * @var string[]
    */
    protected static $setters = [
            'deliverTargetId' => 'setDeliverTargetId',
            'deliverTargetName' => 'setDeliverTargetName',
            'deliverStatus' => 'setDeliverStatus',
            'deliverDetailList' => 'setDeliverDetailList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * deliverTargetId  投递目标ID，即事件目标ID
    * deliverTargetName  投递目标名称，及事件目标名称
    * deliverStatus  投递状态         SUCCESS Or  FAILED
    * deliverDetailList  考虑展示的个数    例如限制只展示最新三条
    *
    * @var string[]
    */
    protected static $getters = [
            'deliverTargetId' => 'getDeliverTargetId',
            'deliverTargetName' => 'getDeliverTargetName',
            'deliverStatus' => 'getDeliverStatus',
            'deliverDetailList' => 'getDeliverDetailList'
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
        $this->container['deliverTargetId'] = isset($data['deliverTargetId']) ? $data['deliverTargetId'] : null;
        $this->container['deliverTargetName'] = isset($data['deliverTargetName']) ? $data['deliverTargetName'] : null;
        $this->container['deliverStatus'] = isset($data['deliverStatus']) ? $data['deliverStatus'] : null;
        $this->container['deliverDetailList'] = isset($data['deliverDetailList']) ? $data['deliverDetailList'] : null;
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
    * Gets deliverTargetId
    *  投递目标ID，即事件目标ID
    *
    * @return string|null
    */
    public function getDeliverTargetId()
    {
        return $this->container['deliverTargetId'];
    }

    /**
    * Sets deliverTargetId
    *
    * @param string|null $deliverTargetId 投递目标ID，即事件目标ID
    *
    * @return $this
    */
    public function setDeliverTargetId($deliverTargetId)
    {
        $this->container['deliverTargetId'] = $deliverTargetId;
        return $this;
    }

    /**
    * Gets deliverTargetName
    *  投递目标名称，及事件目标名称
    *
    * @return string|null
    */
    public function getDeliverTargetName()
    {
        return $this->container['deliverTargetName'];
    }

    /**
    * Sets deliverTargetName
    *
    * @param string|null $deliverTargetName 投递目标名称，及事件目标名称
    *
    * @return $this
    */
    public function setDeliverTargetName($deliverTargetName)
    {
        $this->container['deliverTargetName'] = $deliverTargetName;
        return $this;
    }

    /**
    * Gets deliverStatus
    *  投递状态         SUCCESS Or  FAILED
    *
    * @return string|null
    */
    public function getDeliverStatus()
    {
        return $this->container['deliverStatus'];
    }

    /**
    * Sets deliverStatus
    *
    * @param string|null $deliverStatus 投递状态         SUCCESS Or  FAILED
    *
    * @return $this
    */
    public function setDeliverStatus($deliverStatus)
    {
        $this->container['deliverStatus'] = $deliverStatus;
        return $this;
    }

    /**
    * Gets deliverDetailList
    *  考虑展示的个数    例如限制只展示最新三条
    *
    * @return \HuaweiCloud\SDK\Eg\V1\Model\DeliverDetail[]|null
    */
    public function getDeliverDetailList()
    {
        return $this->container['deliverDetailList'];
    }

    /**
    * Sets deliverDetailList
    *
    * @param \HuaweiCloud\SDK\Eg\V1\Model\DeliverDetail[]|null $deliverDetailList 考虑展示的个数    例如限制只展示最新三条
    *
    * @return $this
    */
    public function setDeliverDetailList($deliverDetailList)
    {
        $this->container['deliverDetailList'] = $deliverDetailList;
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

