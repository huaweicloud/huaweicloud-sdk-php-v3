<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BridgeResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BridgeResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * bridgeId  网桥ID
    * bridgeName  网桥名称。
    * status  网桥状态。 - ONLINE：网桥在线。 - OFFLINE：网桥离线。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bridgeId' => 'string',
            'bridgeName' => 'string',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * bridgeId  网桥ID
    * bridgeName  网桥名称。
    * status  网桥状态。 - ONLINE：网桥在线。 - OFFLINE：网桥离线。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bridgeId' => null,
        'bridgeName' => null,
        'status' => null
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
    * bridgeId  网桥ID
    * bridgeName  网桥名称。
    * status  网桥状态。 - ONLINE：网桥在线。 - OFFLINE：网桥离线。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bridgeId' => 'bridge_id',
            'bridgeName' => 'bridge_name',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * bridgeId  网桥ID
    * bridgeName  网桥名称。
    * status  网桥状态。 - ONLINE：网桥在线。 - OFFLINE：网桥离线。
    *
    * @var string[]
    */
    protected static $setters = [
            'bridgeId' => 'setBridgeId',
            'bridgeName' => 'setBridgeName',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * bridgeId  网桥ID
    * bridgeName  网桥名称。
    * status  网桥状态。 - ONLINE：网桥在线。 - OFFLINE：网桥离线。
    *
    * @var string[]
    */
    protected static $getters = [
            'bridgeId' => 'getBridgeId',
            'bridgeName' => 'getBridgeName',
            'status' => 'getStatus'
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
        $this->container['bridgeId'] = isset($data['bridgeId']) ? $data['bridgeId'] : null;
        $this->container['bridgeName'] = isset($data['bridgeName']) ? $data['bridgeName'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['status']) && !preg_match("/(ONLINE|OFFLINE)/", $this->container['status'])) {
                $invalidProperties[] = "invalid value for 'status', must be conform to the pattern /(ONLINE|OFFLINE)/.";
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
    * Gets bridgeId
    *  网桥ID
    *
    * @return string|null
    */
    public function getBridgeId()
    {
        return $this->container['bridgeId'];
    }

    /**
    * Sets bridgeId
    *
    * @param string|null $bridgeId 网桥ID
    *
    * @return $this
    */
    public function setBridgeId($bridgeId)
    {
        $this->container['bridgeId'] = $bridgeId;
        return $this;
    }

    /**
    * Gets bridgeName
    *  网桥名称。
    *
    * @return string|null
    */
    public function getBridgeName()
    {
        return $this->container['bridgeName'];
    }

    /**
    * Sets bridgeName
    *
    * @param string|null $bridgeName 网桥名称。
    *
    * @return $this
    */
    public function setBridgeName($bridgeName)
    {
        $this->container['bridgeName'] = $bridgeName;
        return $this;
    }

    /**
    * Gets status
    *  网桥状态。 - ONLINE：网桥在线。 - OFFLINE：网桥离线。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 网桥状态。 - ONLINE：网桥在线。 - OFFLINE：网桥离线。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

