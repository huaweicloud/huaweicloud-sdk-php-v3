<?php

namespace HuaweiCloud\SDK\Vpn\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteP2cVgwConnectionRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteP2cVgwConnectionRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * p2cVgwId  P2C VPN网关实例ID
    * connectionId  连接ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'p2cVgwId' => 'string',
            'connectionId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * p2cVgwId  P2C VPN网关实例ID
    * connectionId  连接ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'p2cVgwId' => null,
        'connectionId' => null
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
    * p2cVgwId  P2C VPN网关实例ID
    * connectionId  连接ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'p2cVgwId' => 'p2c_vgw_id',
            'connectionId' => 'connection_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * p2cVgwId  P2C VPN网关实例ID
    * connectionId  连接ID
    *
    * @var string[]
    */
    protected static $setters = [
            'p2cVgwId' => 'setP2cVgwId',
            'connectionId' => 'setConnectionId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * p2cVgwId  P2C VPN网关实例ID
    * connectionId  连接ID
    *
    * @var string[]
    */
    protected static $getters = [
            'p2cVgwId' => 'getP2cVgwId',
            'connectionId' => 'getConnectionId'
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
        $this->container['p2cVgwId'] = isset($data['p2cVgwId']) ? $data['p2cVgwId'] : null;
        $this->container['connectionId'] = isset($data['connectionId']) ? $data['connectionId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['p2cVgwId'] === null) {
            $invalidProperties[] = "'p2cVgwId' can't be null";
        }
        if ($this->container['connectionId'] === null) {
            $invalidProperties[] = "'connectionId' can't be null";
        }
            if ((mb_strlen($this->container['connectionId']) > 36)) {
                $invalidProperties[] = "invalid value for 'connectionId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['connectionId']) < 36)) {
                $invalidProperties[] = "invalid value for 'connectionId', the character length must be bigger than or equal to 36.";
            }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['connectionId'])) {
                $invalidProperties[] = "invalid value for 'connectionId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
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
    * Gets p2cVgwId
    *  P2C VPN网关实例ID
    *
    * @return string
    */
    public function getP2cVgwId()
    {
        return $this->container['p2cVgwId'];
    }

    /**
    * Sets p2cVgwId
    *
    * @param string $p2cVgwId P2C VPN网关实例ID
    *
    * @return $this
    */
    public function setP2cVgwId($p2cVgwId)
    {
        $this->container['p2cVgwId'] = $p2cVgwId;
        return $this;
    }

    /**
    * Gets connectionId
    *  连接ID
    *
    * @return string
    */
    public function getConnectionId()
    {
        return $this->container['connectionId'];
    }

    /**
    * Sets connectionId
    *
    * @param string $connectionId 连接ID
    *
    * @return $this
    */
    public function setConnectionId($connectionId)
    {
        $this->container['connectionId'] = $connectionId;
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

