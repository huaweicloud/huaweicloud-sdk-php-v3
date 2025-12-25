<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OneResourceGroupRespResourceStatistics implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OneResourceGroupResp_resource_statistics';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * unhealthy  **参数解释** 该资源分组中当前处在告警状态的资源个数。  **取值范围** 在[0,9999999]区间内。
    * total  **参数解释** 该资源分组中资源的总个数。  **取值范围** 在[0,9999999]区间内。
    * eventUnhealthy  **参数解释** 该资源分组中已触发的资源个数。  **取值范围** 在[0,9999999]区间内。
    * namespaces  **参数解释** 该资源分组中选择的资源类型个数，如资源分组添加了弹性云服务、弹性公网IP和带宽则值为2。 **取值范围** 在[0,9999999]区间内。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'unhealthy' => 'int',
            'total' => 'int',
            'eventUnhealthy' => 'int',
            'namespaces' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * unhealthy  **参数解释** 该资源分组中当前处在告警状态的资源个数。  **取值范围** 在[0,9999999]区间内。
    * total  **参数解释** 该资源分组中资源的总个数。  **取值范围** 在[0,9999999]区间内。
    * eventUnhealthy  **参数解释** 该资源分组中已触发的资源个数。  **取值范围** 在[0,9999999]区间内。
    * namespaces  **参数解释** 该资源分组中选择的资源类型个数，如资源分组添加了弹性云服务、弹性公网IP和带宽则值为2。 **取值范围** 在[0,9999999]区间内。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'unhealthy' => null,
        'total' => null,
        'eventUnhealthy' => null,
        'namespaces' => null
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
    * unhealthy  **参数解释** 该资源分组中当前处在告警状态的资源个数。  **取值范围** 在[0,9999999]区间内。
    * total  **参数解释** 该资源分组中资源的总个数。  **取值范围** 在[0,9999999]区间内。
    * eventUnhealthy  **参数解释** 该资源分组中已触发的资源个数。  **取值范围** 在[0,9999999]区间内。
    * namespaces  **参数解释** 该资源分组中选择的资源类型个数，如资源分组添加了弹性云服务、弹性公网IP和带宽则值为2。 **取值范围** 在[0,9999999]区间内。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'unhealthy' => 'unhealthy',
            'total' => 'total',
            'eventUnhealthy' => 'event_unhealthy',
            'namespaces' => 'namespaces'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * unhealthy  **参数解释** 该资源分组中当前处在告警状态的资源个数。  **取值范围** 在[0,9999999]区间内。
    * total  **参数解释** 该资源分组中资源的总个数。  **取值范围** 在[0,9999999]区间内。
    * eventUnhealthy  **参数解释** 该资源分组中已触发的资源个数。  **取值范围** 在[0,9999999]区间内。
    * namespaces  **参数解释** 该资源分组中选择的资源类型个数，如资源分组添加了弹性云服务、弹性公网IP和带宽则值为2。 **取值范围** 在[0,9999999]区间内。
    *
    * @var string[]
    */
    protected static $setters = [
            'unhealthy' => 'setUnhealthy',
            'total' => 'setTotal',
            'eventUnhealthy' => 'setEventUnhealthy',
            'namespaces' => 'setNamespaces'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * unhealthy  **参数解释** 该资源分组中当前处在告警状态的资源个数。  **取值范围** 在[0,9999999]区间内。
    * total  **参数解释** 该资源分组中资源的总个数。  **取值范围** 在[0,9999999]区间内。
    * eventUnhealthy  **参数解释** 该资源分组中已触发的资源个数。  **取值范围** 在[0,9999999]区间内。
    * namespaces  **参数解释** 该资源分组中选择的资源类型个数，如资源分组添加了弹性云服务、弹性公网IP和带宽则值为2。 **取值范围** 在[0,9999999]区间内。
    *
    * @var string[]
    */
    protected static $getters = [
            'unhealthy' => 'getUnhealthy',
            'total' => 'getTotal',
            'eventUnhealthy' => 'getEventUnhealthy',
            'namespaces' => 'getNamespaces'
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
        $this->container['unhealthy'] = isset($data['unhealthy']) ? $data['unhealthy'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['eventUnhealthy'] = isset($data['eventUnhealthy']) ? $data['eventUnhealthy'] : null;
        $this->container['namespaces'] = isset($data['namespaces']) ? $data['namespaces'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['unhealthy']) && ($this->container['unhealthy'] > 9999999)) {
                $invalidProperties[] = "invalid value for 'unhealthy', must be smaller than or equal to 9999999.";
            }
            if (!is_null($this->container['unhealthy']) && ($this->container['unhealthy'] < 0)) {
                $invalidProperties[] = "invalid value for 'unhealthy', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['total']) && ($this->container['total'] > 9999999)) {
                $invalidProperties[] = "invalid value for 'total', must be smaller than or equal to 9999999.";
            }
            if (!is_null($this->container['total']) && ($this->container['total'] < 0)) {
                $invalidProperties[] = "invalid value for 'total', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['eventUnhealthy']) && ($this->container['eventUnhealthy'] > 9999999)) {
                $invalidProperties[] = "invalid value for 'eventUnhealthy', must be smaller than or equal to 9999999.";
            }
            if (!is_null($this->container['eventUnhealthy']) && ($this->container['eventUnhealthy'] < 0)) {
                $invalidProperties[] = "invalid value for 'eventUnhealthy', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['namespaces']) && ($this->container['namespaces'] > 9999999)) {
                $invalidProperties[] = "invalid value for 'namespaces', must be smaller than or equal to 9999999.";
            }
            if (!is_null($this->container['namespaces']) && ($this->container['namespaces'] < 0)) {
                $invalidProperties[] = "invalid value for 'namespaces', must be bigger than or equal to 0.";
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
    * Gets unhealthy
    *  **参数解释** 该资源分组中当前处在告警状态的资源个数。  **取值范围** 在[0,9999999]区间内。
    *
    * @return int|null
    */
    public function getUnhealthy()
    {
        return $this->container['unhealthy'];
    }

    /**
    * Sets unhealthy
    *
    * @param int|null $unhealthy **参数解释** 该资源分组中当前处在告警状态的资源个数。  **取值范围** 在[0,9999999]区间内。
    *
    * @return $this
    */
    public function setUnhealthy($unhealthy)
    {
        $this->container['unhealthy'] = $unhealthy;
        return $this;
    }

    /**
    * Gets total
    *  **参数解释** 该资源分组中资源的总个数。  **取值范围** 在[0,9999999]区间内。
    *
    * @return int|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param int|null $total **参数解释** 该资源分组中资源的总个数。  **取值范围** 在[0,9999999]区间内。
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets eventUnhealthy
    *  **参数解释** 该资源分组中已触发的资源个数。  **取值范围** 在[0,9999999]区间内。
    *
    * @return int|null
    */
    public function getEventUnhealthy()
    {
        return $this->container['eventUnhealthy'];
    }

    /**
    * Sets eventUnhealthy
    *
    * @param int|null $eventUnhealthy **参数解释** 该资源分组中已触发的资源个数。  **取值范围** 在[0,9999999]区间内。
    *
    * @return $this
    */
    public function setEventUnhealthy($eventUnhealthy)
    {
        $this->container['eventUnhealthy'] = $eventUnhealthy;
        return $this;
    }

    /**
    * Gets namespaces
    *  **参数解释** 该资源分组中选择的资源类型个数，如资源分组添加了弹性云服务、弹性公网IP和带宽则值为2。 **取值范围** 在[0,9999999]区间内。
    *
    * @return int|null
    */
    public function getNamespaces()
    {
        return $this->container['namespaces'];
    }

    /**
    * Sets namespaces
    *
    * @param int|null $namespaces **参数解释** 该资源分组中选择的资源类型个数，如资源分组添加了弹性云服务、弹性公网IP和带宽则值为2。 **取值范围** 在[0,9999999]区间内。
    *
    * @return $this
    */
    public function setNamespaces($namespaces)
    {
        $this->container['namespaces'] = $namespaces;
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

