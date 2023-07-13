<?php

namespace HuaweiCloud\SDK\Csms\v1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListResourceInstancesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListResourceInstancesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceInstances  定值为resource_instances。
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceInstances' => 'string',
            'body' => '\HuaweiCloud\SDK\Csms\v1\Model\ListResourceInstancesRequestBody'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceInstances  定值为resource_instances。
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceInstances' => null,
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
    * resourceInstances  定值为resource_instances。
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceInstances' => 'resource_instances',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceInstances  定值为resource_instances。
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceInstances' => 'setResourceInstances',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceInstances  定值为resource_instances。
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceInstances' => 'getResourceInstances',
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
        $this->container['resourceInstances'] = isset($data['resourceInstances']) ? $data['resourceInstances'] : null;
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
        if ($this->container['resourceInstances'] === null) {
            $invalidProperties[] = "'resourceInstances' can't be null";
        }
            if ((mb_strlen($this->container['resourceInstances']) > 18)) {
                $invalidProperties[] = "invalid value for 'resourceInstances', the character length must be smaller than or equal to 18.";
            }
            if ((mb_strlen($this->container['resourceInstances']) < 18)) {
                $invalidProperties[] = "invalid value for 'resourceInstances', the character length must be bigger than or equal to 18.";
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
    * Gets resourceInstances
    *  定值为resource_instances。
    *
    * @return string
    */
    public function getResourceInstances()
    {
        return $this->container['resourceInstances'];
    }

    /**
    * Sets resourceInstances
    *
    * @param string $resourceInstances 定值为resource_instances。
    *
    * @return $this
    */
    public function setResourceInstances($resourceInstances)
    {
        $this->container['resourceInstances'] = $resourceInstances;
        return $this;
    }

    /**
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\Csms\v1\Model\ListResourceInstancesRequestBody|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\Csms\v1\Model\ListResourceInstancesRequestBody|null $body body
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

