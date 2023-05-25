<?php

namespace HuaweiCloud\SDK\Rms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ChannelConfigBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ChannelConfigBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * smn  smn
    * obs  obs
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'smn' => '\HuaweiCloud\SDK\Rms\V1\Model\TrackerSMNChannelConfigBody',
            'obs' => '\HuaweiCloud\SDK\Rms\V1\Model\TrackerOBSChannelConfigBody'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * smn  smn
    * obs  obs
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'smn' => null,
        'obs' => null
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
    * smn  smn
    * obs  obs
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'smn' => 'smn',
            'obs' => 'obs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * smn  smn
    * obs  obs
    *
    * @var string[]
    */
    protected static $setters = [
            'smn' => 'setSmn',
            'obs' => 'setObs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * smn  smn
    * obs  obs
    *
    * @var string[]
    */
    protected static $getters = [
            'smn' => 'getSmn',
            'obs' => 'getObs'
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
        $this->container['smn'] = isset($data['smn']) ? $data['smn'] : null;
        $this->container['obs'] = isset($data['obs']) ? $data['obs'] : null;
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
    * Gets smn
    *  smn
    *
    * @return \HuaweiCloud\SDK\Rms\V1\Model\TrackerSMNChannelConfigBody|null
    */
    public function getSmn()
    {
        return $this->container['smn'];
    }

    /**
    * Sets smn
    *
    * @param \HuaweiCloud\SDK\Rms\V1\Model\TrackerSMNChannelConfigBody|null $smn smn
    *
    * @return $this
    */
    public function setSmn($smn)
    {
        $this->container['smn'] = $smn;
        return $this;
    }

    /**
    * Gets obs
    *  obs
    *
    * @return \HuaweiCloud\SDK\Rms\V1\Model\TrackerOBSChannelConfigBody|null
    */
    public function getObs()
    {
        return $this->container['obs'];
    }

    /**
    * Sets obs
    *
    * @param \HuaweiCloud\SDK\Rms\V1\Model\TrackerOBSChannelConfigBody|null $obs obs
    *
    * @return $this
    */
    public function setObs($obs)
    {
        $this->container['obs'] = $obs;
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

