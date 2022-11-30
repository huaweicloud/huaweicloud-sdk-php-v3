<?php

namespace HuaweiCloud\SDK\Ga\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowEndpointGroupRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowEndpointGroupRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * endpointGroupId  终端节点组ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'endpointGroupId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * endpointGroupId  终端节点组ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'endpointGroupId' => null
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
    * endpointGroupId  终端节点组ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'endpointGroupId' => 'endpoint_group_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * endpointGroupId  终端节点组ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'endpointGroupId' => 'setEndpointGroupId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * endpointGroupId  终端节点组ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'endpointGroupId' => 'getEndpointGroupId'
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
        $this->container['endpointGroupId'] = isset($data['endpointGroupId']) ? $data['endpointGroupId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['endpointGroupId'] === null) {
            $invalidProperties[] = "'endpointGroupId' can't be null";
        }
            if ((mb_strlen($this->container['endpointGroupId']) > 36)) {
                $invalidProperties[] = "invalid value for 'endpointGroupId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['endpointGroupId']) < 1)) {
                $invalidProperties[] = "invalid value for 'endpointGroupId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['endpointGroupId'])) {
                $invalidProperties[] = "invalid value for 'endpointGroupId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
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
    * Gets endpointGroupId
    *  终端节点组ID。
    *
    * @return string
    */
    public function getEndpointGroupId()
    {
        return $this->container['endpointGroupId'];
    }

    /**
    * Sets endpointGroupId
    *
    * @param string $endpointGroupId 终端节点组ID。
    *
    * @return $this
    */
    public function setEndpointGroupId($endpointGroupId)
    {
        $this->container['endpointGroupId'] = $endpointGroupId;
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

