<?php

namespace HuaweiCloud\SDK\Dc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowVirtualGatewayRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowVirtualGatewayRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fields  显示字段列表
    * virtualGatewayId  虚拟网关ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fields' => 'string[]',
            'virtualGatewayId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fields  显示字段列表
    * virtualGatewayId  虚拟网关ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fields' => null,
        'virtualGatewayId' => null
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
    * fields  显示字段列表
    * virtualGatewayId  虚拟网关ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fields' => 'fields',
            'virtualGatewayId' => 'virtual_gateway_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fields  显示字段列表
    * virtualGatewayId  虚拟网关ID
    *
    * @var string[]
    */
    protected static $setters = [
            'fields' => 'setFields',
            'virtualGatewayId' => 'setVirtualGatewayId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fields  显示字段列表
    * virtualGatewayId  虚拟网关ID
    *
    * @var string[]
    */
    protected static $getters = [
            'fields' => 'getFields',
            'virtualGatewayId' => 'getVirtualGatewayId'
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
        $this->container['fields'] = isset($data['fields']) ? $data['fields'] : null;
        $this->container['virtualGatewayId'] = isset($data['virtualGatewayId']) ? $data['virtualGatewayId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['virtualGatewayId'] === null) {
            $invalidProperties[] = "'virtualGatewayId' can't be null";
        }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['virtualGatewayId'])) {
                $invalidProperties[] = "invalid value for 'virtualGatewayId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
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
    * Gets fields
    *  显示字段列表
    *
    * @return string[]|null
    */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
    * Sets fields
    *
    * @param string[]|null $fields 显示字段列表
    *
    * @return $this
    */
    public function setFields($fields)
    {
        $this->container['fields'] = $fields;
        return $this;
    }

    /**
    * Gets virtualGatewayId
    *  虚拟网关ID
    *
    * @return string
    */
    public function getVirtualGatewayId()
    {
        return $this->container['virtualGatewayId'];
    }

    /**
    * Sets virtualGatewayId
    *
    * @param string $virtualGatewayId 虚拟网关ID
    *
    * @return $this
    */
    public function setVirtualGatewayId($virtualGatewayId)
    {
        $this->container['virtualGatewayId'] = $virtualGatewayId;
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

