<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ElbResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ElbResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * publicIp  公网ip
    * privateIp  内网ip
    * privateEndpoint  Elb终端地址
    * name  Elb名称
    * id  Elb的ID
    * vpcId  Elb所属VPC的ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'publicIp' => 'string',
            'privateIp' => 'string',
            'privateEndpoint' => 'string',
            'name' => 'string',
            'id' => 'string',
            'vpcId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * publicIp  公网ip
    * privateIp  内网ip
    * privateEndpoint  Elb终端地址
    * name  Elb名称
    * id  Elb的ID
    * vpcId  Elb所属VPC的ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'publicIp' => null,
        'privateIp' => null,
        'privateEndpoint' => null,
        'name' => null,
        'id' => null,
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
    * publicIp  公网ip
    * privateIp  内网ip
    * privateEndpoint  Elb终端地址
    * name  Elb名称
    * id  Elb的ID
    * vpcId  Elb所属VPC的ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'publicIp' => 'public_ip',
            'privateIp' => 'private_ip',
            'privateEndpoint' => 'private_endpoint',
            'name' => 'name',
            'id' => 'id',
            'vpcId' => 'vpc_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * publicIp  公网ip
    * privateIp  内网ip
    * privateEndpoint  Elb终端地址
    * name  Elb名称
    * id  Elb的ID
    * vpcId  Elb所属VPC的ID
    *
    * @var string[]
    */
    protected static $setters = [
            'publicIp' => 'setPublicIp',
            'privateIp' => 'setPrivateIp',
            'privateEndpoint' => 'setPrivateEndpoint',
            'name' => 'setName',
            'id' => 'setId',
            'vpcId' => 'setVpcId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * publicIp  公网ip
    * privateIp  内网ip
    * privateEndpoint  Elb终端地址
    * name  Elb名称
    * id  Elb的ID
    * vpcId  Elb所属VPC的ID
    *
    * @var string[]
    */
    protected static $getters = [
            'publicIp' => 'getPublicIp',
            'privateIp' => 'getPrivateIp',
            'privateEndpoint' => 'getPrivateEndpoint',
            'name' => 'getName',
            'id' => 'getId',
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
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['privateEndpoint'] = isset($data['privateEndpoint']) ? $data['privateEndpoint'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
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
    * Gets publicIp
    *  公网ip
    *
    * @return string|null
    */
    public function getPublicIp()
    {
        return $this->container['publicIp'];
    }

    /**
    * Sets publicIp
    *
    * @param string|null $publicIp 公网ip
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets privateIp
    *  内网ip
    *
    * @return string|null
    */
    public function getPrivateIp()
    {
        return $this->container['privateIp'];
    }

    /**
    * Sets privateIp
    *
    * @param string|null $privateIp 内网ip
    *
    * @return $this
    */
    public function setPrivateIp($privateIp)
    {
        $this->container['privateIp'] = $privateIp;
        return $this;
    }

    /**
    * Gets privateEndpoint
    *  Elb终端地址
    *
    * @return string|null
    */
    public function getPrivateEndpoint()
    {
        return $this->container['privateEndpoint'];
    }

    /**
    * Sets privateEndpoint
    *
    * @param string|null $privateEndpoint Elb终端地址
    *
    * @return $this
    */
    public function setPrivateEndpoint($privateEndpoint)
    {
        $this->container['privateEndpoint'] = $privateEndpoint;
        return $this;
    }

    /**
    * Gets name
    *  Elb名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name Elb名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets id
    *  Elb的ID
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id Elb的ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets vpcId
    *  Elb所属VPC的ID
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
    * @param string|null $vpcId Elb所属VPC的ID
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

