<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NodeDistributionOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NodeDistributionOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * num  **参数解释**: 对应可用区增加的只读节点数量。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * availabilityZone  **参数解释**: 可用分区。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * flavorRef  **参数解释**: 规格码。 **约束限制**: 不涉及。 **取值范围**: 非空。 **默认取值**: 不涉及。
    * configurationId  **参数解释**: 只读参数组ID **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'num' => 'int',
            'availabilityZone' => 'string',
            'flavorRef' => 'string',
            'configurationId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * num  **参数解释**: 对应可用区增加的只读节点数量。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * availabilityZone  **参数解释**: 可用分区。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * flavorRef  **参数解释**: 规格码。 **约束限制**: 不涉及。 **取值范围**: 非空。 **默认取值**: 不涉及。
    * configurationId  **参数解释**: 只读参数组ID **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'num' => null,
        'availabilityZone' => null,
        'flavorRef' => null,
        'configurationId' => null
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
    * num  **参数解释**: 对应可用区增加的只读节点数量。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * availabilityZone  **参数解释**: 可用分区。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * flavorRef  **参数解释**: 规格码。 **约束限制**: 不涉及。 **取值范围**: 非空。 **默认取值**: 不涉及。
    * configurationId  **参数解释**: 只读参数组ID **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'num' => 'num',
            'availabilityZone' => 'availability_zone',
            'flavorRef' => 'flavor_ref',
            'configurationId' => 'configuration_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * num  **参数解释**: 对应可用区增加的只读节点数量。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * availabilityZone  **参数解释**: 可用分区。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * flavorRef  **参数解释**: 规格码。 **约束限制**: 不涉及。 **取值范围**: 非空。 **默认取值**: 不涉及。
    * configurationId  **参数解释**: 只读参数组ID **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'num' => 'setNum',
            'availabilityZone' => 'setAvailabilityZone',
            'flavorRef' => 'setFlavorRef',
            'configurationId' => 'setConfigurationId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * num  **参数解释**: 对应可用区增加的只读节点数量。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * availabilityZone  **参数解释**: 可用分区。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * flavorRef  **参数解释**: 规格码。 **约束限制**: 不涉及。 **取值范围**: 非空。 **默认取值**: 不涉及。
    * configurationId  **参数解释**: 只读参数组ID **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'num' => 'getNum',
            'availabilityZone' => 'getAvailabilityZone',
            'flavorRef' => 'getFlavorRef',
            'configurationId' => 'getConfigurationId'
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
        $this->container['num'] = isset($data['num']) ? $data['num'] : null;
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
        $this->container['flavorRef'] = isset($data['flavorRef']) ? $data['flavorRef'] : null;
        $this->container['configurationId'] = isset($data['configurationId']) ? $data['configurationId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['num'] === null) {
            $invalidProperties[] = "'num' can't be null";
        }
        if ($this->container['availabilityZone'] === null) {
            $invalidProperties[] = "'availabilityZone' can't be null";
        }
        if ($this->container['flavorRef'] === null) {
            $invalidProperties[] = "'flavorRef' can't be null";
        }
        if ($this->container['configurationId'] === null) {
            $invalidProperties[] = "'configurationId' can't be null";
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
    * Gets num
    *  **参数解释**: 对应可用区增加的只读节点数量。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return int
    */
    public function getNum()
    {
        return $this->container['num'];
    }

    /**
    * Sets num
    *
    * @param int $num **参数解释**: 对应可用区增加的只读节点数量。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setNum($num)
    {
        $this->container['num'] = $num;
        return $this;
    }

    /**
    * Gets availabilityZone
    *  **参数解释**: 可用分区。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return string
    */
    public function getAvailabilityZone()
    {
        return $this->container['availabilityZone'];
    }

    /**
    * Sets availabilityZone
    *
    * @param string $availabilityZone **参数解释**: 可用分区。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
        return $this;
    }

    /**
    * Gets flavorRef
    *  **参数解释**: 规格码。 **约束限制**: 不涉及。 **取值范围**: 非空。 **默认取值**: 不涉及。
    *
    * @return string
    */
    public function getFlavorRef()
    {
        return $this->container['flavorRef'];
    }

    /**
    * Sets flavorRef
    *
    * @param string $flavorRef **参数解释**: 规格码。 **约束限制**: 不涉及。 **取值范围**: 非空。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setFlavorRef($flavorRef)
    {
        $this->container['flavorRef'] = $flavorRef;
        return $this;
    }

    /**
    * Gets configurationId
    *  **参数解释**: 只读参数组ID **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return string
    */
    public function getConfigurationId()
    {
        return $this->container['configurationId'];
    }

    /**
    * Sets configurationId
    *
    * @param string $configurationId **参数解释**: 只读参数组ID **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setConfigurationId($configurationId)
    {
        $this->container['configurationId'] = $configurationId;
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

