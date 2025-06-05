<?php

namespace HuaweiCloud\SDK\Eg\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ConnectionCreateReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ConnectionCreateReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  目标连接名称，租户下唯一，由字母、数字、点、下划线和中划线组成，必须以字母或数字开头，不能为default
    * description  目标连接描述
    * vpcId  待连接的VPC ID
    * subnetId  待连接的子网ID
    * type  type
    * kafkaDetail  kafkaDetail
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'vpcId' => 'string',
            'subnetId' => 'string',
            'type' => '\HuaweiCloud\SDK\Eg\V1\Model\ConnectionType',
            'kafkaDetail' => '\HuaweiCloud\SDK\Eg\V1\Model\KafkaConnectionDetail'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  目标连接名称，租户下唯一，由字母、数字、点、下划线和中划线组成，必须以字母或数字开头，不能为default
    * description  目标连接描述
    * vpcId  待连接的VPC ID
    * subnetId  待连接的子网ID
    * type  type
    * kafkaDetail  kafkaDetail
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'vpcId' => null,
        'subnetId' => null,
        'type' => null,
        'kafkaDetail' => null
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
    * name  目标连接名称，租户下唯一，由字母、数字、点、下划线和中划线组成，必须以字母或数字开头，不能为default
    * description  目标连接描述
    * vpcId  待连接的VPC ID
    * subnetId  待连接的子网ID
    * type  type
    * kafkaDetail  kafkaDetail
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'vpcId' => 'vpc_id',
            'subnetId' => 'subnet_id',
            'type' => 'type',
            'kafkaDetail' => 'kafka_detail'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  目标连接名称，租户下唯一，由字母、数字、点、下划线和中划线组成，必须以字母或数字开头，不能为default
    * description  目标连接描述
    * vpcId  待连接的VPC ID
    * subnetId  待连接的子网ID
    * type  type
    * kafkaDetail  kafkaDetail
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'vpcId' => 'setVpcId',
            'subnetId' => 'setSubnetId',
            'type' => 'setType',
            'kafkaDetail' => 'setKafkaDetail'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  目标连接名称，租户下唯一，由字母、数字、点、下划线和中划线组成，必须以字母或数字开头，不能为default
    * description  目标连接描述
    * vpcId  待连接的VPC ID
    * subnetId  待连接的子网ID
    * type  type
    * kafkaDetail  kafkaDetail
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'vpcId' => 'getVpcId',
            'subnetId' => 'getSubnetId',
            'type' => 'getType',
            'kafkaDetail' => 'getKafkaDetail'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['kafkaDetail'] = isset($data['kafkaDetail']) ? $data['kafkaDetail'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
        if ($this->container['vpcId'] === null) {
            $invalidProperties[] = "'vpcId' can't be null";
        }
            if ((mb_strlen($this->container['vpcId']) > 128)) {
                $invalidProperties[] = "invalid value for 'vpcId', the character length must be smaller than or equal to 128.";
            }
        if ($this->container['subnetId'] === null) {
            $invalidProperties[] = "'subnetId' can't be null";
        }
            if ((mb_strlen($this->container['subnetId']) > 128)) {
                $invalidProperties[] = "invalid value for 'subnetId', the character length must be smaller than or equal to 128.";
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
    * Gets name
    *  目标连接名称，租户下唯一，由字母、数字、点、下划线和中划线组成，必须以字母或数字开头，不能为default
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 目标连接名称，租户下唯一，由字母、数字、点、下划线和中划线组成，必须以字母或数字开头，不能为default
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  目标连接描述
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
    * @param string|null $description 目标连接描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets vpcId
    *  待连接的VPC ID
    *
    * @return string
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string $vpcId 待连接的VPC ID
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets subnetId
    *  待连接的子网ID
    *
    * @return string
    */
    public function getSubnetId()
    {
        return $this->container['subnetId'];
    }

    /**
    * Sets subnetId
    *
    * @param string $subnetId 待连接的子网ID
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
    * @return \HuaweiCloud\SDK\Eg\V1\Model\ConnectionType|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param \HuaweiCloud\SDK\Eg\V1\Model\ConnectionType|null $type type
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets kafkaDetail
    *  kafkaDetail
    *
    * @return \HuaweiCloud\SDK\Eg\V1\Model\KafkaConnectionDetail|null
    */
    public function getKafkaDetail()
    {
        return $this->container['kafkaDetail'];
    }

    /**
    * Sets kafkaDetail
    *
    * @param \HuaweiCloud\SDK\Eg\V1\Model\KafkaConnectionDetail|null $kafkaDetail kafkaDetail
    *
    * @return $this
    */
    public function setKafkaDetail($kafkaDetail)
    {
        $this->container['kafkaDetail'] = $kafkaDetail;
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

