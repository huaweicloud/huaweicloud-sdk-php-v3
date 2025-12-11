<?php

namespace HuaweiCloud\SDK\Iam\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AllowVpcEndpointsOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AllowVpcEndpointsOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * description  描述信息。
    * vpcEndpointId  VPC端点，例如：8di3jdu38d7jhfa7df68adyfiadfia6d。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'description' => 'string',
            'vpcEndpointId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * description  描述信息。
    * vpcEndpointId  VPC端点，例如：8di3jdu38d7jhfa7df68adyfiadfia6d。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'description' => null,
        'vpcEndpointId' => null
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
    * description  描述信息。
    * vpcEndpointId  VPC端点，例如：8di3jdu38d7jhfa7df68adyfiadfia6d。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'description' => 'description',
            'vpcEndpointId' => 'vpc_endpoint_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * description  描述信息。
    * vpcEndpointId  VPC端点，例如：8di3jdu38d7jhfa7df68adyfiadfia6d。
    *
    * @var string[]
    */
    protected static $setters = [
            'description' => 'setDescription',
            'vpcEndpointId' => 'setVpcEndpointId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * description  描述信息。
    * vpcEndpointId  VPC端点，例如：8di3jdu38d7jhfa7df68adyfiadfia6d。
    *
    * @var string[]
    */
    protected static $getters = [
            'description' => 'getDescription',
            'vpcEndpointId' => 'getVpcEndpointId'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['vpcEndpointId'] = isset($data['vpcEndpointId']) ? $data['vpcEndpointId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['vpcEndpointId'] === null) {
            $invalidProperties[] = "'vpcEndpointId' can't be null";
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
    * Gets description
    *  描述信息。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 描述信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets vpcEndpointId
    *  VPC端点，例如：8di3jdu38d7jhfa7df68adyfiadfia6d。
    *
    * @return string
    */
    public function getVpcEndpointId()
    {
        return $this->container['vpcEndpointId'];
    }

    /**
    * Sets vpcEndpointId
    *
    * @param string $vpcEndpointId VPC端点，例如：8di3jdu38d7jhfa7df68adyfiadfia6d。
    *
    * @return $this
    */
    public function setVpcEndpointId($vpcEndpointId)
    {
        $this->container['vpcEndpointId'] = $vpcEndpointId;
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

