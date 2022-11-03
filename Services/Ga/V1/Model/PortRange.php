<?php

namespace HuaweiCloud\SDK\Ga\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PortRange implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PortRange';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fromPort  起始端口。
    * toPort  结束端口。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fromPort' => 'int',
            'toPort' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fromPort  起始端口。
    * toPort  结束端口。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fromPort' => 'int32',
        'toPort' => 'int32'
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
    * fromPort  起始端口。
    * toPort  结束端口。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fromPort' => 'from_port',
            'toPort' => 'to_port'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fromPort  起始端口。
    * toPort  结束端口。
    *
    * @var string[]
    */
    protected static $setters = [
            'fromPort' => 'setFromPort',
            'toPort' => 'setToPort'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fromPort  起始端口。
    * toPort  结束端口。
    *
    * @var string[]
    */
    protected static $getters = [
            'fromPort' => 'getFromPort',
            'toPort' => 'getToPort'
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
        $this->container['fromPort'] = isset($data['fromPort']) ? $data['fromPort'] : null;
        $this->container['toPort'] = isset($data['toPort']) ? $data['toPort'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['fromPort'] === null) {
            $invalidProperties[] = "'fromPort' can't be null";
        }
            if (($this->container['fromPort'] > 65535)) {
                $invalidProperties[] = "invalid value for 'fromPort', must be smaller than or equal to 65535.";
            }
            if (($this->container['fromPort'] < 1)) {
                $invalidProperties[] = "invalid value for 'fromPort', must be bigger than or equal to 1.";
            }
        if ($this->container['toPort'] === null) {
            $invalidProperties[] = "'toPort' can't be null";
        }
            if (($this->container['toPort'] > 65535)) {
                $invalidProperties[] = "invalid value for 'toPort', must be smaller than or equal to 65535.";
            }
            if (($this->container['toPort'] < 1)) {
                $invalidProperties[] = "invalid value for 'toPort', must be bigger than or equal to 1.";
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
    * Gets fromPort
    *  起始端口。
    *
    * @return int
    */
    public function getFromPort()
    {
        return $this->container['fromPort'];
    }

    /**
    * Sets fromPort
    *
    * @param int $fromPort 起始端口。
    *
    * @return $this
    */
    public function setFromPort($fromPort)
    {
        $this->container['fromPort'] = $fromPort;
        return $this;
    }

    /**
    * Gets toPort
    *  结束端口。
    *
    * @return int
    */
    public function getToPort()
    {
        return $this->container['toPort'];
    }

    /**
    * Sets toPort
    *
    * @param int $toPort 结束端口。
    *
    * @return $this
    */
    public function setToPort($toPort)
    {
        $this->container['toPort'] = $toPort;
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

