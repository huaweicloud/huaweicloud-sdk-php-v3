<?php

namespace HuaweiCloud\SDK\Cse\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowPluginsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowPluginsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * gatewayId  网关实例id
    * accept  该字段内容填为 \"application/json\"
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'gatewayId' => 'string',
            'accept' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * gatewayId  网关实例id
    * accept  该字段内容填为 \"application/json\"
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'gatewayId' => null,
        'accept' => null
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
    * gatewayId  网关实例id
    * accept  该字段内容填为 \"application/json\"
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'gatewayId' => 'gateway_id',
            'accept' => 'Accept'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * gatewayId  网关实例id
    * accept  该字段内容填为 \"application/json\"
    *
    * @var string[]
    */
    protected static $setters = [
            'gatewayId' => 'setGatewayId',
            'accept' => 'setAccept'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * gatewayId  网关实例id
    * accept  该字段内容填为 \"application/json\"
    *
    * @var string[]
    */
    protected static $getters = [
            'gatewayId' => 'getGatewayId',
            'accept' => 'getAccept'
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
        $this->container['gatewayId'] = isset($data['gatewayId']) ? $data['gatewayId'] : null;
        $this->container['accept'] = isset($data['accept']) ? $data['accept'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['gatewayId'] === null) {
            $invalidProperties[] = "'gatewayId' can't be null";
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
    * Gets gatewayId
    *  网关实例id
    *
    * @return string
    */
    public function getGatewayId()
    {
        return $this->container['gatewayId'];
    }

    /**
    * Sets gatewayId
    *
    * @param string $gatewayId 网关实例id
    *
    * @return $this
    */
    public function setGatewayId($gatewayId)
    {
        $this->container['gatewayId'] = $gatewayId;
        return $this;
    }

    /**
    * Gets accept
    *  该字段内容填为 \"application/json\"
    *
    * @return string|null
    */
    public function getAccept()
    {
        return $this->container['accept'];
    }

    /**
    * Sets accept
    *
    * @param string|null $accept 该字段内容填为 \"application/json\"
    *
    * @return $this
    */
    public function setAccept($accept)
    {
        $this->container['accept'] = $accept;
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

