<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SupabaseHaConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SupabaseHaConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * mode  mode
    * replicationMode  replicationMode
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'mode' => 'string',
            'replicationMode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * mode  mode
    * replicationMode  replicationMode
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'mode' => null,
        'replicationMode' => null
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
    * mode  mode
    * replicationMode  replicationMode
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'mode' => 'mode',
            'replicationMode' => 'replication_mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * mode  mode
    * replicationMode  replicationMode
    *
    * @var string[]
    */
    protected static $setters = [
            'mode' => 'setMode',
            'replicationMode' => 'setReplicationMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * mode  mode
    * replicationMode  replicationMode
    *
    * @var string[]
    */
    protected static $getters = [
            'mode' => 'getMode',
            'replicationMode' => 'getReplicationMode'
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
    const MODE_HA = 'Ha';
    const MODE_SINGLE = 'Single';
    const REPLICATION_MODE_ASYNC = 'async';
    const REPLICATION_MODE_SYNC = 'sync';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getModeAllowableValues()
    {
        return [
            self::MODE_HA,
            self::MODE_SINGLE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getReplicationModeAllowableValues()
    {
        return [
            self::REPLICATION_MODE_ASYNC,
            self::REPLICATION_MODE_SYNC,
        ];
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
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['replicationMode'] = isset($data['replicationMode']) ? $data['replicationMode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getModeAllowableValues();
                if (!is_null($this->container['mode']) && !in_array($this->container['mode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'mode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getReplicationModeAllowableValues();
                if (!is_null($this->container['replicationMode']) && !in_array($this->container['replicationMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'replicationMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets mode
    *  mode
    *
    * @return string|null
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param string|null $mode mode
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
        return $this;
    }

    /**
    * Gets replicationMode
    *  replicationMode
    *
    * @return string|null
    */
    public function getReplicationMode()
    {
        return $this->container['replicationMode'];
    }

    /**
    * Sets replicationMode
    *
    * @param string|null $replicationMode replicationMode
    *
    * @return $this
    */
    public function setReplicationMode($replicationMode)
    {
        $this->container['replicationMode'] = $replicationMode;
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

