<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExtensionScaleGroupSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExtensionScaleGroupSpec';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * flavor  节点规格
    * az  节点可用区，未指定或者为空则以默认伸缩组中配置为准
    * capacityReservationSpecification  capacityReservationSpecification
    * autoscaling  autoscaling
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'flavor' => 'string',
            'az' => 'string',
            'capacityReservationSpecification' => '\HuaweiCloud\SDK\Cce\V3\Model\CapacityReservationSpecification',
            'autoscaling' => '\HuaweiCloud\SDK\Cce\V3\Model\ScaleGroupAutoscaling'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * flavor  节点规格
    * az  节点可用区，未指定或者为空则以默认伸缩组中配置为准
    * capacityReservationSpecification  capacityReservationSpecification
    * autoscaling  autoscaling
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'flavor' => null,
        'az' => null,
        'capacityReservationSpecification' => null,
        'autoscaling' => null
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
    * flavor  节点规格
    * az  节点可用区，未指定或者为空则以默认伸缩组中配置为准
    * capacityReservationSpecification  capacityReservationSpecification
    * autoscaling  autoscaling
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'flavor' => 'flavor',
            'az' => 'az',
            'capacityReservationSpecification' => 'capacityReservationSpecification',
            'autoscaling' => 'autoscaling'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * flavor  节点规格
    * az  节点可用区，未指定或者为空则以默认伸缩组中配置为准
    * capacityReservationSpecification  capacityReservationSpecification
    * autoscaling  autoscaling
    *
    * @var string[]
    */
    protected static $setters = [
            'flavor' => 'setFlavor',
            'az' => 'setAz',
            'capacityReservationSpecification' => 'setCapacityReservationSpecification',
            'autoscaling' => 'setAutoscaling'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * flavor  节点规格
    * az  节点可用区，未指定或者为空则以默认伸缩组中配置为准
    * capacityReservationSpecification  capacityReservationSpecification
    * autoscaling  autoscaling
    *
    * @var string[]
    */
    protected static $getters = [
            'flavor' => 'getFlavor',
            'az' => 'getAz',
            'capacityReservationSpecification' => 'getCapacityReservationSpecification',
            'autoscaling' => 'getAutoscaling'
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
        $this->container['flavor'] = isset($data['flavor']) ? $data['flavor'] : null;
        $this->container['az'] = isset($data['az']) ? $data['az'] : null;
        $this->container['capacityReservationSpecification'] = isset($data['capacityReservationSpecification']) ? $data['capacityReservationSpecification'] : null;
        $this->container['autoscaling'] = isset($data['autoscaling']) ? $data['autoscaling'] : null;
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
    * Gets flavor
    *  节点规格
    *
    * @return string|null
    */
    public function getFlavor()
    {
        return $this->container['flavor'];
    }

    /**
    * Sets flavor
    *
    * @param string|null $flavor 节点规格
    *
    * @return $this
    */
    public function setFlavor($flavor)
    {
        $this->container['flavor'] = $flavor;
        return $this;
    }

    /**
    * Gets az
    *  节点可用区，未指定或者为空则以默认伸缩组中配置为准
    *
    * @return string|null
    */
    public function getAz()
    {
        return $this->container['az'];
    }

    /**
    * Sets az
    *
    * @param string|null $az 节点可用区，未指定或者为空则以默认伸缩组中配置为准
    *
    * @return $this
    */
    public function setAz($az)
    {
        $this->container['az'] = $az;
        return $this;
    }

    /**
    * Gets capacityReservationSpecification
    *  capacityReservationSpecification
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\CapacityReservationSpecification|null
    */
    public function getCapacityReservationSpecification()
    {
        return $this->container['capacityReservationSpecification'];
    }

    /**
    * Sets capacityReservationSpecification
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\CapacityReservationSpecification|null $capacityReservationSpecification capacityReservationSpecification
    *
    * @return $this
    */
    public function setCapacityReservationSpecification($capacityReservationSpecification)
    {
        $this->container['capacityReservationSpecification'] = $capacityReservationSpecification;
        return $this;
    }

    /**
    * Gets autoscaling
    *  autoscaling
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\ScaleGroupAutoscaling|null
    */
    public function getAutoscaling()
    {
        return $this->container['autoscaling'];
    }

    /**
    * Sets autoscaling
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\ScaleGroupAutoscaling|null $autoscaling autoscaling
    *
    * @return $this
    */
    public function setAutoscaling($autoscaling)
    {
        $this->container['autoscaling'] = $autoscaling;
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

