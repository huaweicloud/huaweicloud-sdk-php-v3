<?php

namespace HuaweiCloud\SDK\Evs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AzInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AzInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * zoneName  可用分区的名字。
    * zoneState  zoneState
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'zoneName' => 'string',
            'zoneState' => '\HuaweiCloud\SDK\Evs\V2\Model\ZoneState'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * zoneName  可用分区的名字。
    * zoneState  zoneState
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'zoneName' => null,
        'zoneState' => null
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
    * zoneName  可用分区的名字。
    * zoneState  zoneState
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'zoneName' => 'zoneName',
            'zoneState' => 'zoneState'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * zoneName  可用分区的名字。
    * zoneState  zoneState
    *
    * @var string[]
    */
    protected static $setters = [
            'zoneName' => 'setZoneName',
            'zoneState' => 'setZoneState'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * zoneName  可用分区的名字。
    * zoneState  zoneState
    *
    * @var string[]
    */
    protected static $getters = [
            'zoneName' => 'getZoneName',
            'zoneState' => 'getZoneState'
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
        $this->container['zoneName'] = isset($data['zoneName']) ? $data['zoneName'] : null;
        $this->container['zoneState'] = isset($data['zoneState']) ? $data['zoneState'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['zoneName'] === null) {
            $invalidProperties[] = "'zoneName' can't be null";
        }
        if ($this->container['zoneState'] === null) {
            $invalidProperties[] = "'zoneState' can't be null";
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
    * Gets zoneName
    *  可用分区的名字。
    *
    * @return string
    */
    public function getZoneName()
    {
        return $this->container['zoneName'];
    }

    /**
    * Sets zoneName
    *
    * @param string $zoneName 可用分区的名字。
    *
    * @return $this
    */
    public function setZoneName($zoneName)
    {
        $this->container['zoneName'] = $zoneName;
        return $this;
    }

    /**
    * Gets zoneState
    *  zoneState
    *
    * @return \HuaweiCloud\SDK\Evs\V2\Model\ZoneState
    */
    public function getZoneState()
    {
        return $this->container['zoneState'];
    }

    /**
    * Sets zoneState
    *
    * @param \HuaweiCloud\SDK\Evs\V2\Model\ZoneState $zoneState zoneState
    *
    * @return $this
    */
    public function setZoneState($zoneState)
    {
        $this->container['zoneState'] = $zoneState;
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

