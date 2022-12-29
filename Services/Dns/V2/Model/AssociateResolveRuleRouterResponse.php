<?php

namespace HuaweiCloud\SDK\Dns\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AssociateResolveRuleRouterResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AssociateResolveRuleRouterResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * routerId  Router(VPC)的ID。
    * routerRegion  Router(VPC)所在的region。
    * status  资源状态。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'routerId' => 'string',
            'routerRegion' => 'string',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * routerId  Router(VPC)的ID。
    * routerRegion  Router(VPC)所在的region。
    * status  资源状态。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'routerId' => null,
        'routerRegion' => null,
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
    * routerId  Router(VPC)的ID。
    * routerRegion  Router(VPC)所在的region。
    * status  资源状态。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'routerId' => 'router_id',
            'routerRegion' => 'router_region',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * routerId  Router(VPC)的ID。
    * routerRegion  Router(VPC)所在的region。
    * status  资源状态。
    *
    * @var string[]
    */
    protected static $setters = [
            'routerId' => 'setRouterId',
            'routerRegion' => 'setRouterRegion',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * routerId  Router(VPC)的ID。
    * routerRegion  Router(VPC)所在的region。
    * status  资源状态。
    *
    * @var string[]
    */
    protected static $getters = [
            'routerId' => 'getRouterId',
            'routerRegion' => 'getRouterRegion',
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
        $this->container['routerId'] = isset($data['routerId']) ? $data['routerId'] : null;
        $this->container['routerRegion'] = isset($data['routerRegion']) ? $data['routerRegion'] : null;
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
    * Gets routerId
    *  Router(VPC)的ID。
    *
    * @return string|null
    */
    public function getRouterId()
    {
        return $this->container['routerId'];
    }

    /**
    * Sets routerId
    *
    * @param string|null $routerId Router(VPC)的ID。
    *
    * @return $this
    */
    public function setRouterId($routerId)
    {
        $this->container['routerId'] = $routerId;
        return $this;
    }

    /**
    * Gets routerRegion
    *  Router(VPC)所在的region。
    *
    * @return string|null
    */
    public function getRouterRegion()
    {
        return $this->container['routerRegion'];
    }

    /**
    * Sets routerRegion
    *
    * @param string|null $routerRegion Router(VPC)所在的region。
    *
    * @return $this
    */
    public function setRouterRegion($routerRegion)
    {
        $this->container['routerRegion'] = $routerRegion;
        return $this;
    }

    /**
    * Gets status
    *  资源状态。
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
    * @param string|null $status 资源状态。
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

