<?php

namespace HuaweiCloud\SDK\Eg\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ConnectionInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ConnectionInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  事件源ID
    * name  目标连接名称，租户下唯一，由小写字母、数字、点、下划线和中划线组成，必须以字母或数字开头，不能为default
    * description  目标连接描述
    * status  目标连接状态
    * errorInfo  errorInfo
    * vpcId  待连接的VPC ID
    * subnetId  待连接的子网ID
    * agency  私网目标连接使用的用户委托名称
    * flavor  flavor
    * type  type
    * kafkaDetail  kafkaDetail
    * createdTime  创建UTC时间
    * updatedTime  更新UTC时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'description' => 'string',
            'status' => 'string',
            'errorInfo' => '\HuaweiCloud\SDK\Eg\V1\Model\ErrorInfo',
            'vpcId' => 'string',
            'subnetId' => 'string',
            'agency' => 'string',
            'flavor' => '\HuaweiCloud\SDK\Eg\V1\Model\ConnectionInfoFlavor',
            'type' => '\HuaweiCloud\SDK\Eg\V1\Model\ConnectionType',
            'kafkaDetail' => '\HuaweiCloud\SDK\Eg\V1\Model\KafkaConnectionDetail',
            'createdTime' => 'string',
            'updatedTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  事件源ID
    * name  目标连接名称，租户下唯一，由小写字母、数字、点、下划线和中划线组成，必须以字母或数字开头，不能为default
    * description  目标连接描述
    * status  目标连接状态
    * errorInfo  errorInfo
    * vpcId  待连接的VPC ID
    * subnetId  待连接的子网ID
    * agency  私网目标连接使用的用户委托名称
    * flavor  flavor
    * type  type
    * kafkaDetail  kafkaDetail
    * createdTime  创建UTC时间
    * updatedTime  更新UTC时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'status' => null,
        'errorInfo' => null,
        'vpcId' => null,
        'subnetId' => null,
        'agency' => null,
        'flavor' => null,
        'type' => null,
        'kafkaDetail' => null,
        'createdTime' => null,
        'updatedTime' => null
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
    * id  事件源ID
    * name  目标连接名称，租户下唯一，由小写字母、数字、点、下划线和中划线组成，必须以字母或数字开头，不能为default
    * description  目标连接描述
    * status  目标连接状态
    * errorInfo  errorInfo
    * vpcId  待连接的VPC ID
    * subnetId  待连接的子网ID
    * agency  私网目标连接使用的用户委托名称
    * flavor  flavor
    * type  type
    * kafkaDetail  kafkaDetail
    * createdTime  创建UTC时间
    * updatedTime  更新UTC时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'status' => 'status',
            'errorInfo' => 'error_info',
            'vpcId' => 'vpc_id',
            'subnetId' => 'subnet_id',
            'agency' => 'agency',
            'flavor' => 'flavor',
            'type' => 'type',
            'kafkaDetail' => 'kafka_detail',
            'createdTime' => 'created_time',
            'updatedTime' => 'updated_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  事件源ID
    * name  目标连接名称，租户下唯一，由小写字母、数字、点、下划线和中划线组成，必须以字母或数字开头，不能为default
    * description  目标连接描述
    * status  目标连接状态
    * errorInfo  errorInfo
    * vpcId  待连接的VPC ID
    * subnetId  待连接的子网ID
    * agency  私网目标连接使用的用户委托名称
    * flavor  flavor
    * type  type
    * kafkaDetail  kafkaDetail
    * createdTime  创建UTC时间
    * updatedTime  更新UTC时间
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'status' => 'setStatus',
            'errorInfo' => 'setErrorInfo',
            'vpcId' => 'setVpcId',
            'subnetId' => 'setSubnetId',
            'agency' => 'setAgency',
            'flavor' => 'setFlavor',
            'type' => 'setType',
            'kafkaDetail' => 'setKafkaDetail',
            'createdTime' => 'setCreatedTime',
            'updatedTime' => 'setUpdatedTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  事件源ID
    * name  目标连接名称，租户下唯一，由小写字母、数字、点、下划线和中划线组成，必须以字母或数字开头，不能为default
    * description  目标连接描述
    * status  目标连接状态
    * errorInfo  errorInfo
    * vpcId  待连接的VPC ID
    * subnetId  待连接的子网ID
    * agency  私网目标连接使用的用户委托名称
    * flavor  flavor
    * type  type
    * kafkaDetail  kafkaDetail
    * createdTime  创建UTC时间
    * updatedTime  更新UTC时间
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'status' => 'getStatus',
            'errorInfo' => 'getErrorInfo',
            'vpcId' => 'getVpcId',
            'subnetId' => 'getSubnetId',
            'agency' => 'getAgency',
            'flavor' => 'getFlavor',
            'type' => 'getType',
            'kafkaDetail' => 'getKafkaDetail',
            'createdTime' => 'getCreatedTime',
            'updatedTime' => 'getUpdatedTime'
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
    const STATUS_CREATING = 'CREATING';
    const STATUS_CREATED = 'CREATED';
    const STATUS_CREATE_FAILED = 'CREATE_FAILED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_CREATING,
            self::STATUS_CREATED,
            self::STATUS_CREATE_FAILED,
        ];
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['errorInfo'] = isset($data['errorInfo']) ? $data['errorInfo'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['agency'] = isset($data['agency']) ? $data['agency'] : null;
        $this->container['flavor'] = isset($data['flavor']) ? $data['flavor'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['kafkaDetail'] = isset($data['kafkaDetail']) ? $data['kafkaDetail'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
        $this->container['updatedTime'] = isset($data['updatedTime']) ? $data['updatedTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets id
    *  事件源ID
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
    * @param string|null $id 事件源ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  目标连接名称，租户下唯一，由小写字母、数字、点、下划线和中划线组成，必须以字母或数字开头，不能为default
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
    * @param string|null $name 目标连接名称，租户下唯一，由小写字母、数字、点、下划线和中划线组成，必须以字母或数字开头，不能为default
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
    * Gets status
    *  目标连接状态
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
    * @param string|null $status 目标连接状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets errorInfo
    *  errorInfo
    *
    * @return \HuaweiCloud\SDK\Eg\V1\Model\ErrorInfo|null
    */
    public function getErrorInfo()
    {
        return $this->container['errorInfo'];
    }

    /**
    * Sets errorInfo
    *
    * @param \HuaweiCloud\SDK\Eg\V1\Model\ErrorInfo|null $errorInfo errorInfo
    *
    * @return $this
    */
    public function setErrorInfo($errorInfo)
    {
        $this->container['errorInfo'] = $errorInfo;
        return $this;
    }

    /**
    * Gets vpcId
    *  待连接的VPC ID
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
    * @param string|null $vpcId 待连接的VPC ID
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
    * @return string|null
    */
    public function getSubnetId()
    {
        return $this->container['subnetId'];
    }

    /**
    * Sets subnetId
    *
    * @param string|null $subnetId 待连接的子网ID
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
        return $this;
    }

    /**
    * Gets agency
    *  私网目标连接使用的用户委托名称
    *
    * @return string|null
    */
    public function getAgency()
    {
        return $this->container['agency'];
    }

    /**
    * Sets agency
    *
    * @param string|null $agency 私网目标连接使用的用户委托名称
    *
    * @return $this
    */
    public function setAgency($agency)
    {
        $this->container['agency'] = $agency;
        return $this;
    }

    /**
    * Gets flavor
    *  flavor
    *
    * @return \HuaweiCloud\SDK\Eg\V1\Model\ConnectionInfoFlavor|null
    */
    public function getFlavor()
    {
        return $this->container['flavor'];
    }

    /**
    * Sets flavor
    *
    * @param \HuaweiCloud\SDK\Eg\V1\Model\ConnectionInfoFlavor|null $flavor flavor
    *
    * @return $this
    */
    public function setFlavor($flavor)
    {
        $this->container['flavor'] = $flavor;
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
    * Gets createdTime
    *  创建UTC时间
    *
    * @return string|null
    */
    public function getCreatedTime()
    {
        return $this->container['createdTime'];
    }

    /**
    * Sets createdTime
    *
    * @param string|null $createdTime 创建UTC时间
    *
    * @return $this
    */
    public function setCreatedTime($createdTime)
    {
        $this->container['createdTime'] = $createdTime;
        return $this;
    }

    /**
    * Gets updatedTime
    *  更新UTC时间
    *
    * @return string|null
    */
    public function getUpdatedTime()
    {
        return $this->container['updatedTime'];
    }

    /**
    * Sets updatedTime
    *
    * @param string|null $updatedTime 更新UTC时间
    *
    * @return $this
    */
    public function setUpdatedTime($updatedTime)
    {
        $this->container['updatedTime'] = $updatedTime;
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

