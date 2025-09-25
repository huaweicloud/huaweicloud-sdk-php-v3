<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResourceWaitEventTime implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResourceWaitEventTime';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * allTime  **参数解释**: 总耗时（单位：微秒）。 **取值范围**: 不涉及。
    * resourceWaitEventTimeDetails  resourceWaitEventTimeDetails
    * otherTime  **参数解释**: 资源类等待事件外耗时（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'allTime' => 'int',
            'resourceWaitEventTimeDetails' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\ResourceWaitEvenTimeDetails',
            'otherTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * allTime  **参数解释**: 总耗时（单位：微秒）。 **取值范围**: 不涉及。
    * resourceWaitEventTimeDetails  resourceWaitEventTimeDetails
    * otherTime  **参数解释**: 资源类等待事件外耗时（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'allTime' => 'int64',
        'resourceWaitEventTimeDetails' => null,
        'otherTime' => 'int64'
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
    * allTime  **参数解释**: 总耗时（单位：微秒）。 **取值范围**: 不涉及。
    * resourceWaitEventTimeDetails  resourceWaitEventTimeDetails
    * otherTime  **参数解释**: 资源类等待事件外耗时（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'allTime' => 'all_time',
            'resourceWaitEventTimeDetails' => 'resource_wait_event_time_details',
            'otherTime' => 'other_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * allTime  **参数解释**: 总耗时（单位：微秒）。 **取值范围**: 不涉及。
    * resourceWaitEventTimeDetails  resourceWaitEventTimeDetails
    * otherTime  **参数解释**: 资源类等待事件外耗时（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'allTime' => 'setAllTime',
            'resourceWaitEventTimeDetails' => 'setResourceWaitEventTimeDetails',
            'otherTime' => 'setOtherTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * allTime  **参数解释**: 总耗时（单位：微秒）。 **取值范围**: 不涉及。
    * resourceWaitEventTimeDetails  resourceWaitEventTimeDetails
    * otherTime  **参数解释**: 资源类等待事件外耗时（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'allTime' => 'getAllTime',
            'resourceWaitEventTimeDetails' => 'getResourceWaitEventTimeDetails',
            'otherTime' => 'getOtherTime'
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
        $this->container['allTime'] = isset($data['allTime']) ? $data['allTime'] : null;
        $this->container['resourceWaitEventTimeDetails'] = isset($data['resourceWaitEventTimeDetails']) ? $data['resourceWaitEventTimeDetails'] : null;
        $this->container['otherTime'] = isset($data['otherTime']) ? $data['otherTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['allTime'] === null) {
            $invalidProperties[] = "'allTime' can't be null";
        }
        if ($this->container['resourceWaitEventTimeDetails'] === null) {
            $invalidProperties[] = "'resourceWaitEventTimeDetails' can't be null";
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
    * Gets allTime
    *  **参数解释**: 总耗时（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @return int
    */
    public function getAllTime()
    {
        return $this->container['allTime'];
    }

    /**
    * Sets allTime
    *
    * @param int $allTime **参数解释**: 总耗时（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setAllTime($allTime)
    {
        $this->container['allTime'] = $allTime;
        return $this;
    }

    /**
    * Gets resourceWaitEventTimeDetails
    *  resourceWaitEventTimeDetails
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\ResourceWaitEvenTimeDetails
    */
    public function getResourceWaitEventTimeDetails()
    {
        return $this->container['resourceWaitEventTimeDetails'];
    }

    /**
    * Sets resourceWaitEventTimeDetails
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\ResourceWaitEvenTimeDetails $resourceWaitEventTimeDetails resourceWaitEventTimeDetails
    *
    * @return $this
    */
    public function setResourceWaitEventTimeDetails($resourceWaitEventTimeDetails)
    {
        $this->container['resourceWaitEventTimeDetails'] = $resourceWaitEventTimeDetails;
        return $this;
    }

    /**
    * Gets otherTime
    *  **参数解释**: 资源类等待事件外耗时（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getOtherTime()
    {
        return $this->container['otherTime'];
    }

    /**
    * Sets otherTime
    *
    * @param int|null $otherTime **参数解释**: 资源类等待事件外耗时（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setOtherTime($otherTime)
    {
        $this->container['otherTime'] = $otherTime;
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

