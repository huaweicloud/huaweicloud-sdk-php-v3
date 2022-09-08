<?php

namespace HuaweiCloud\SDK\Er\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateStaticRouteRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateStaticRouteRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * routeTableId  路由表ID
    * routeId  路由ID
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'routeTableId' => 'string',
            'routeId' => 'string',
            'body' => '\HuaweiCloud\SDK\Er\V3\Model\UpdateRouteRequestBody'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * routeTableId  路由表ID
    * routeId  路由ID
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'routeTableId' => null,
        'routeId' => null,
        'body' => null
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
    * routeTableId  路由表ID
    * routeId  路由ID
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'routeTableId' => 'route_table_id',
            'routeId' => 'route_id',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * routeTableId  路由表ID
    * routeId  路由ID
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'routeTableId' => 'setRouteTableId',
            'routeId' => 'setRouteId',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * routeTableId  路由表ID
    * routeId  路由ID
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'routeTableId' => 'getRouteTableId',
            'routeId' => 'getRouteId',
            'body' => 'getBody'
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
        $this->container['routeTableId'] = isset($data['routeTableId']) ? $data['routeTableId'] : null;
        $this->container['routeId'] = isset($data['routeId']) ? $data['routeId'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['routeTableId'] === null) {
            $invalidProperties[] = "'routeTableId' can't be null";
        }
            if (!preg_match("/[0-9a-fA-F]{8}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{12}/", $this->container['routeTableId'])) {
                $invalidProperties[] = "invalid value for 'routeTableId', must be conform to the pattern /[0-9a-fA-F]{8}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{12}/.";
            }
        if ($this->container['routeId'] === null) {
            $invalidProperties[] = "'routeId' can't be null";
        }
            if (!preg_match("/[0-9a-fA-F]{8}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{12}/", $this->container['routeId'])) {
                $invalidProperties[] = "invalid value for 'routeId', must be conform to the pattern /[0-9a-fA-F]{8}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{4}\\-[0-9a-fA-F]{12}/.";
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
    * Gets routeTableId
    *  路由表ID
    *
    * @return string
    */
    public function getRouteTableId()
    {
        return $this->container['routeTableId'];
    }

    /**
    * Sets routeTableId
    *
    * @param string $routeTableId 路由表ID
    *
    * @return $this
    */
    public function setRouteTableId($routeTableId)
    {
        $this->container['routeTableId'] = $routeTableId;
        return $this;
    }

    /**
    * Gets routeId
    *  路由ID
    *
    * @return string
    */
    public function getRouteId()
    {
        return $this->container['routeId'];
    }

    /**
    * Sets routeId
    *
    * @param string $routeId 路由ID
    *
    * @return $this
    */
    public function setRouteId($routeId)
    {
        $this->container['routeId'] = $routeId;
        return $this;
    }

    /**
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\Er\V3\Model\UpdateRouteRequestBody|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\Er\V3\Model\UpdateRouteRequestBody|null $body body
    *
    * @return $this
    */
    public function setBody($body)
    {
        $this->container['body'] = $body;
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

