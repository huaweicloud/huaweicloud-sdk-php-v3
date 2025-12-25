<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateVpcepServiceInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateVpcepServiceInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * subnetId  子网ID
    * type  type
    * vpcEndpointAddress  Vpc 端点地址
    * vpcEndpointId  Vpc 端点ID
    * vpcEndpointServiceId  Vpc端点服务ID
    * vpcId  UUID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'subnetId' => 'string',
            'type' => '\HuaweiCloud\SDK\SecMaster\V1\Model\VpcServiceType',
            'vpcEndpointAddress' => 'string',
            'vpcEndpointId' => 'string',
            'vpcEndpointServiceId' => 'string',
            'vpcId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * subnetId  子网ID
    * type  type
    * vpcEndpointAddress  Vpc 端点地址
    * vpcEndpointId  Vpc 端点ID
    * vpcEndpointServiceId  Vpc端点服务ID
    * vpcId  UUID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'subnetId' => null,
        'type' => null,
        'vpcEndpointAddress' => null,
        'vpcEndpointId' => null,
        'vpcEndpointServiceId' => null,
        'vpcId' => null
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
    * subnetId  子网ID
    * type  type
    * vpcEndpointAddress  Vpc 端点地址
    * vpcEndpointId  Vpc 端点ID
    * vpcEndpointServiceId  Vpc端点服务ID
    * vpcId  UUID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'subnetId' => 'subnet_id',
            'type' => 'type',
            'vpcEndpointAddress' => 'vpc_endpoint_address',
            'vpcEndpointId' => 'vpc_endpoint_id',
            'vpcEndpointServiceId' => 'vpc_endpoint_service_id',
            'vpcId' => 'vpc_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * subnetId  子网ID
    * type  type
    * vpcEndpointAddress  Vpc 端点地址
    * vpcEndpointId  Vpc 端点ID
    * vpcEndpointServiceId  Vpc端点服务ID
    * vpcId  UUID
    *
    * @var string[]
    */
    protected static $setters = [
            'subnetId' => 'setSubnetId',
            'type' => 'setType',
            'vpcEndpointAddress' => 'setVpcEndpointAddress',
            'vpcEndpointId' => 'setVpcEndpointId',
            'vpcEndpointServiceId' => 'setVpcEndpointServiceId',
            'vpcId' => 'setVpcId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * subnetId  子网ID
    * type  type
    * vpcEndpointAddress  Vpc 端点地址
    * vpcEndpointId  Vpc 端点ID
    * vpcEndpointServiceId  Vpc端点服务ID
    * vpcId  UUID
    *
    * @var string[]
    */
    protected static $getters = [
            'subnetId' => 'getSubnetId',
            'type' => 'getType',
            'vpcEndpointAddress' => 'getVpcEndpointAddress',
            'vpcEndpointId' => 'getVpcEndpointId',
            'vpcEndpointServiceId' => 'getVpcEndpointServiceId',
            'vpcId' => 'getVpcId'
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
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['vpcEndpointAddress'] = isset($data['vpcEndpointAddress']) ? $data['vpcEndpointAddress'] : null;
        $this->container['vpcEndpointId'] = isset($data['vpcEndpointId']) ? $data['vpcEndpointId'] : null;
        $this->container['vpcEndpointServiceId'] = isset($data['vpcEndpointServiceId']) ? $data['vpcEndpointServiceId'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['subnetId']) && (mb_strlen($this->container['subnetId']) > 63)) {
                $invalidProperties[] = "invalid value for 'subnetId', the character length must be smaller than or equal to 63.";
            }
            if (!is_null($this->container['subnetId']) && (mb_strlen($this->container['subnetId']) < 5)) {
                $invalidProperties[] = "invalid value for 'subnetId', the character length must be bigger than or equal to 5.";
            }
            if (!is_null($this->container['vpcEndpointAddress']) && (mb_strlen($this->container['vpcEndpointAddress']) > 63)) {
                $invalidProperties[] = "invalid value for 'vpcEndpointAddress', the character length must be smaller than or equal to 63.";
            }
            if (!is_null($this->container['vpcEndpointAddress']) && (mb_strlen($this->container['vpcEndpointAddress']) < 5)) {
                $invalidProperties[] = "invalid value for 'vpcEndpointAddress', the character length must be bigger than or equal to 5.";
            }
            if (!is_null($this->container['vpcEndpointId']) && (mb_strlen($this->container['vpcEndpointId']) > 63)) {
                $invalidProperties[] = "invalid value for 'vpcEndpointId', the character length must be smaller than or equal to 63.";
            }
            if (!is_null($this->container['vpcEndpointId']) && (mb_strlen($this->container['vpcEndpointId']) < 5)) {
                $invalidProperties[] = "invalid value for 'vpcEndpointId', the character length must be bigger than or equal to 5.";
            }
            if (!is_null($this->container['vpcEndpointServiceId']) && (mb_strlen($this->container['vpcEndpointServiceId']) > 63)) {
                $invalidProperties[] = "invalid value for 'vpcEndpointServiceId', the character length must be smaller than or equal to 63.";
            }
            if (!is_null($this->container['vpcEndpointServiceId']) && (mb_strlen($this->container['vpcEndpointServiceId']) < 5)) {
                $invalidProperties[] = "invalid value for 'vpcEndpointServiceId', the character length must be bigger than or equal to 5.";
            }
            if (!is_null($this->container['vpcId']) && (mb_strlen($this->container['vpcId']) > 36)) {
                $invalidProperties[] = "invalid value for 'vpcId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['vpcId']) && (mb_strlen($this->container['vpcId']) < 36)) {
                $invalidProperties[] = "invalid value for 'vpcId', the character length must be bigger than or equal to 36.";
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
    * Gets subnetId
    *  子网ID
    *
    * @return string|null
    */
    public function getSubnetId()
    {
        return $this->container['subnetId'];
    }

    /**
    * Sets subnetId
    *
    * @param string|null $subnetId 子网ID
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
        return $this;
    }

    /**
    * Gets type
    *  type
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\VpcServiceType|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\VpcServiceType|null $type type
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets vpcEndpointAddress
    *  Vpc 端点地址
    *
    * @return string|null
    */
    public function getVpcEndpointAddress()
    {
        return $this->container['vpcEndpointAddress'];
    }

    /**
    * Sets vpcEndpointAddress
    *
    * @param string|null $vpcEndpointAddress Vpc 端点地址
    *
    * @return $this
    */
    public function setVpcEndpointAddress($vpcEndpointAddress)
    {
        $this->container['vpcEndpointAddress'] = $vpcEndpointAddress;
        return $this;
    }

    /**
    * Gets vpcEndpointId
    *  Vpc 端点ID
    *
    * @return string|null
    */
    public function getVpcEndpointId()
    {
        return $this->container['vpcEndpointId'];
    }

    /**
    * Sets vpcEndpointId
    *
    * @param string|null $vpcEndpointId Vpc 端点ID
    *
    * @return $this
    */
    public function setVpcEndpointId($vpcEndpointId)
    {
        $this->container['vpcEndpointId'] = $vpcEndpointId;
        return $this;
    }

    /**
    * Gets vpcEndpointServiceId
    *  Vpc端点服务ID
    *
    * @return string|null
    */
    public function getVpcEndpointServiceId()
    {
        return $this->container['vpcEndpointServiceId'];
    }

    /**
    * Sets vpcEndpointServiceId
    *
    * @param string|null $vpcEndpointServiceId Vpc端点服务ID
    *
    * @return $this
    */
    public function setVpcEndpointServiceId($vpcEndpointServiceId)
    {
        $this->container['vpcEndpointServiceId'] = $vpcEndpointServiceId;
        return $this;
    }

    /**
    * Gets vpcId
    *  UUID
    *
    * @return string|null
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string|null $vpcId UUID
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
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

