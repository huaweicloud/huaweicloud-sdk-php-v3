<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExtendProductIosEntity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExtendProductIosEntity';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ioSpec  **参数解释**： 存储IO规格。 **取值范围**： - dms.physical.storage.high.v2：高IO云硬盘。 - dms.physical.storage.ultra.v2：超高IO云硬盘。 - [dms.physical.storage.general：通用型SSD云硬盘。](tag:hws,hws_hk,dt,ax) - [dms.physical.storage.extreme：极速型SSD云硬盘。](tag:hws,hws_hk,dt,ax)
    * availableZones  有可用资源的可用区列表。
    * type  **参数解释**： IO类型。 **取值范围**： evs
    * unavailableZones  资源售罄的可用区列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ioSpec' => 'string',
            'availableZones' => 'string[]',
            'type' => 'string',
            'unavailableZones' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ioSpec  **参数解释**： 存储IO规格。 **取值范围**： - dms.physical.storage.high.v2：高IO云硬盘。 - dms.physical.storage.ultra.v2：超高IO云硬盘。 - [dms.physical.storage.general：通用型SSD云硬盘。](tag:hws,hws_hk,dt,ax) - [dms.physical.storage.extreme：极速型SSD云硬盘。](tag:hws,hws_hk,dt,ax)
    * availableZones  有可用资源的可用区列表。
    * type  **参数解释**： IO类型。 **取值范围**： evs
    * unavailableZones  资源售罄的可用区列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ioSpec' => null,
        'availableZones' => null,
        'type' => null,
        'unavailableZones' => null
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
    * ioSpec  **参数解释**： 存储IO规格。 **取值范围**： - dms.physical.storage.high.v2：高IO云硬盘。 - dms.physical.storage.ultra.v2：超高IO云硬盘。 - [dms.physical.storage.general：通用型SSD云硬盘。](tag:hws,hws_hk,dt,ax) - [dms.physical.storage.extreme：极速型SSD云硬盘。](tag:hws,hws_hk,dt,ax)
    * availableZones  有可用资源的可用区列表。
    * type  **参数解释**： IO类型。 **取值范围**： evs
    * unavailableZones  资源售罄的可用区列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ioSpec' => 'io_spec',
            'availableZones' => 'available_zones',
            'type' => 'type',
            'unavailableZones' => 'unavailable_zones'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ioSpec  **参数解释**： 存储IO规格。 **取值范围**： - dms.physical.storage.high.v2：高IO云硬盘。 - dms.physical.storage.ultra.v2：超高IO云硬盘。 - [dms.physical.storage.general：通用型SSD云硬盘。](tag:hws,hws_hk,dt,ax) - [dms.physical.storage.extreme：极速型SSD云硬盘。](tag:hws,hws_hk,dt,ax)
    * availableZones  有可用资源的可用区列表。
    * type  **参数解释**： IO类型。 **取值范围**： evs
    * unavailableZones  资源售罄的可用区列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'ioSpec' => 'setIoSpec',
            'availableZones' => 'setAvailableZones',
            'type' => 'setType',
            'unavailableZones' => 'setUnavailableZones'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ioSpec  **参数解释**： 存储IO规格。 **取值范围**： - dms.physical.storage.high.v2：高IO云硬盘。 - dms.physical.storage.ultra.v2：超高IO云硬盘。 - [dms.physical.storage.general：通用型SSD云硬盘。](tag:hws,hws_hk,dt,ax) - [dms.physical.storage.extreme：极速型SSD云硬盘。](tag:hws,hws_hk,dt,ax)
    * availableZones  有可用资源的可用区列表。
    * type  **参数解释**： IO类型。 **取值范围**： evs
    * unavailableZones  资源售罄的可用区列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'ioSpec' => 'getIoSpec',
            'availableZones' => 'getAvailableZones',
            'type' => 'getType',
            'unavailableZones' => 'getUnavailableZones'
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
        $this->container['ioSpec'] = isset($data['ioSpec']) ? $data['ioSpec'] : null;
        $this->container['availableZones'] = isset($data['availableZones']) ? $data['availableZones'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['unavailableZones'] = isset($data['unavailableZones']) ? $data['unavailableZones'] : null;
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
    * Gets ioSpec
    *  **参数解释**： 存储IO规格。 **取值范围**： - dms.physical.storage.high.v2：高IO云硬盘。 - dms.physical.storage.ultra.v2：超高IO云硬盘。 - [dms.physical.storage.general：通用型SSD云硬盘。](tag:hws,hws_hk,dt,ax) - [dms.physical.storage.extreme：极速型SSD云硬盘。](tag:hws,hws_hk,dt,ax)
    *
    * @return string|null
    */
    public function getIoSpec()
    {
        return $this->container['ioSpec'];
    }

    /**
    * Sets ioSpec
    *
    * @param string|null $ioSpec **参数解释**： 存储IO规格。 **取值范围**： - dms.physical.storage.high.v2：高IO云硬盘。 - dms.physical.storage.ultra.v2：超高IO云硬盘。 - [dms.physical.storage.general：通用型SSD云硬盘。](tag:hws,hws_hk,dt,ax) - [dms.physical.storage.extreme：极速型SSD云硬盘。](tag:hws,hws_hk,dt,ax)
    *
    * @return $this
    */
    public function setIoSpec($ioSpec)
    {
        $this->container['ioSpec'] = $ioSpec;
        return $this;
    }

    /**
    * Gets availableZones
    *  有可用资源的可用区列表。
    *
    * @return string[]|null
    */
    public function getAvailableZones()
    {
        return $this->container['availableZones'];
    }

    /**
    * Sets availableZones
    *
    * @param string[]|null $availableZones 有可用资源的可用区列表。
    *
    * @return $this
    */
    public function setAvailableZones($availableZones)
    {
        $this->container['availableZones'] = $availableZones;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**： IO类型。 **取值范围**： evs
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type **参数解释**： IO类型。 **取值范围**： evs
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets unavailableZones
    *  资源售罄的可用区列表。
    *
    * @return string[]|null
    */
    public function getUnavailableZones()
    {
        return $this->container['unavailableZones'];
    }

    /**
    * Sets unavailableZones
    *
    * @param string[]|null $unavailableZones 资源售罄的可用区列表。
    *
    * @return $this
    */
    public function setUnavailableZones($unavailableZones)
    {
        $this->container['unavailableZones'] = $unavailableZones;
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

