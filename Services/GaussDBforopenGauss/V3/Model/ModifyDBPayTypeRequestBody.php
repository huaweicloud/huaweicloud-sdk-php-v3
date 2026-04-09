<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ModifyDBPayTypeRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ModifyDBPayTypeRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * entityIds  **参数解释**: 需要转成包周期计费模式的实例ID列表。 **约束限制**: 不涉及。
    * chargeInfo  chargeInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'entityIds' => 'string[]',
            'chargeInfo' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\PeriodChargeInfoOption'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * entityIds  **参数解释**: 需要转成包周期计费模式的实例ID列表。 **约束限制**: 不涉及。
    * chargeInfo  chargeInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'entityIds' => null,
        'chargeInfo' => null
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
    * entityIds  **参数解释**: 需要转成包周期计费模式的实例ID列表。 **约束限制**: 不涉及。
    * chargeInfo  chargeInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'entityIds' => 'entity_ids',
            'chargeInfo' => 'charge_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * entityIds  **参数解释**: 需要转成包周期计费模式的实例ID列表。 **约束限制**: 不涉及。
    * chargeInfo  chargeInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'entityIds' => 'setEntityIds',
            'chargeInfo' => 'setChargeInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * entityIds  **参数解释**: 需要转成包周期计费模式的实例ID列表。 **约束限制**: 不涉及。
    * chargeInfo  chargeInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'entityIds' => 'getEntityIds',
            'chargeInfo' => 'getChargeInfo'
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
        $this->container['entityIds'] = isset($data['entityIds']) ? $data['entityIds'] : null;
        $this->container['chargeInfo'] = isset($data['chargeInfo']) ? $data['chargeInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['entityIds'] === null) {
            $invalidProperties[] = "'entityIds' can't be null";
        }
        if ($this->container['chargeInfo'] === null) {
            $invalidProperties[] = "'chargeInfo' can't be null";
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
    * Gets entityIds
    *  **参数解释**: 需要转成包周期计费模式的实例ID列表。 **约束限制**: 不涉及。
    *
    * @return string[]
    */
    public function getEntityIds()
    {
        return $this->container['entityIds'];
    }

    /**
    * Sets entityIds
    *
    * @param string[] $entityIds **参数解释**: 需要转成包周期计费模式的实例ID列表。 **约束限制**: 不涉及。
    *
    * @return $this
    */
    public function setEntityIds($entityIds)
    {
        $this->container['entityIds'] = $entityIds;
        return $this;
    }

    /**
    * Gets chargeInfo
    *  chargeInfo
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\PeriodChargeInfoOption
    */
    public function getChargeInfo()
    {
        return $this->container['chargeInfo'];
    }

    /**
    * Sets chargeInfo
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\PeriodChargeInfoOption $chargeInfo chargeInfo
    *
    * @return $this
    */
    public function setChargeInfo($chargeInfo)
    {
        $this->container['chargeInfo'] = $chargeInfo;
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

