<?php

namespace HuaweiCloud\SDK\Vpcep\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddEndpointServiceServerResourceRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddEndpointServiceServerResourceRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * serverResources  后端elb实例ID和elb所在的az信息列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'serverResources' => '\HuaweiCloud\SDK\Vpcep\V1\Model\ServerResource[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * serverResources  后端elb实例ID和elb所在的az信息列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'serverResources' => null
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
    * serverResources  后端elb实例ID和elb所在的az信息列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'serverResources' => 'server_resources'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * serverResources  后端elb实例ID和elb所在的az信息列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'serverResources' => 'setServerResources'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * serverResources  后端elb实例ID和elb所在的az信息列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'serverResources' => 'getServerResources'
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
        $this->container['serverResources'] = isset($data['serverResources']) ? $data['serverResources'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['serverResources'] === null) {
            $invalidProperties[] = "'serverResources' can't be null";
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
    * Gets serverResources
    *  后端elb实例ID和elb所在的az信息列表。
    *
    * @return \HuaweiCloud\SDK\Vpcep\V1\Model\ServerResource[]
    */
    public function getServerResources()
    {
        return $this->container['serverResources'];
    }

    /**
    * Sets serverResources
    *
    * @param \HuaweiCloud\SDK\Vpcep\V1\Model\ServerResource[] $serverResources 后端elb实例ID和elb所在的az信息列表。
    *
    * @return $this
    */
    public function setServerResources($serverResources)
    {
        $this->container['serverResources'] = $serverResources;
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

