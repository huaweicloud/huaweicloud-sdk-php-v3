<?php

namespace HuaweiCloud\SDK\Eg\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateEndpointResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateEndpointResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  访问端点ID
    * name  用户指定的访问端点名称
    * vpcId  访问端点所在的VPC的ID
    * subnetId  访问端点所在的子网的ID
    * domain  访问域名
    * description  描述
    * status  访问端点状态
    * errorInfo  errorInfo
    * type  访问端点类型
    * scalable  是否可更新
    * createdTime  创建UTC时间
    * updatedTime  更新UTC时间
    * endpoints  访问端点终端节点列表
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'vpcId' => 'string',
            'subnetId' => 'string',
            'domain' => 'string',
            'description' => 'string',
            'status' => 'string',
            'errorInfo' => '\HuaweiCloud\SDK\Eg\V1\Model\ErrorInfo',
            'type' => 'string',
            'scalable' => 'bool',
            'createdTime' => 'string',
            'updatedTime' => 'string',
            'endpoints' => '\HuaweiCloud\SDK\Eg\V1\Model\EndpointConnection[]',
            'xRequestId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  访问端点ID
    * name  用户指定的访问端点名称
    * vpcId  访问端点所在的VPC的ID
    * subnetId  访问端点所在的子网的ID
    * domain  访问域名
    * description  描述
    * status  访问端点状态
    * errorInfo  errorInfo
    * type  访问端点类型
    * scalable  是否可更新
    * createdTime  创建UTC时间
    * updatedTime  更新UTC时间
    * endpoints  访问端点终端节点列表
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'vpcId' => null,
        'subnetId' => null,
        'domain' => null,
        'description' => null,
        'status' => null,
        'errorInfo' => null,
        'type' => null,
        'scalable' => null,
        'createdTime' => null,
        'updatedTime' => null,
        'endpoints' => null,
        'xRequestId' => null
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
    * id  访问端点ID
    * name  用户指定的访问端点名称
    * vpcId  访问端点所在的VPC的ID
    * subnetId  访问端点所在的子网的ID
    * domain  访问域名
    * description  描述
    * status  访问端点状态
    * errorInfo  errorInfo
    * type  访问端点类型
    * scalable  是否可更新
    * createdTime  创建UTC时间
    * updatedTime  更新UTC时间
    * endpoints  访问端点终端节点列表
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'vpcId' => 'vpc_id',
            'subnetId' => 'subnet_id',
            'domain' => 'domain',
            'description' => 'description',
            'status' => 'status',
            'errorInfo' => 'error_info',
            'type' => 'type',
            'scalable' => 'scalable',
            'createdTime' => 'created_time',
            'updatedTime' => 'updated_time',
            'endpoints' => 'endpoints',
            'xRequestId' => 'X-Request-Id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  访问端点ID
    * name  用户指定的访问端点名称
    * vpcId  访问端点所在的VPC的ID
    * subnetId  访问端点所在的子网的ID
    * domain  访问域名
    * description  描述
    * status  访问端点状态
    * errorInfo  errorInfo
    * type  访问端点类型
    * scalable  是否可更新
    * createdTime  创建UTC时间
    * updatedTime  更新UTC时间
    * endpoints  访问端点终端节点列表
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'vpcId' => 'setVpcId',
            'subnetId' => 'setSubnetId',
            'domain' => 'setDomain',
            'description' => 'setDescription',
            'status' => 'setStatus',
            'errorInfo' => 'setErrorInfo',
            'type' => 'setType',
            'scalable' => 'setScalable',
            'createdTime' => 'setCreatedTime',
            'updatedTime' => 'setUpdatedTime',
            'endpoints' => 'setEndpoints',
            'xRequestId' => 'setXRequestId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  访问端点ID
    * name  用户指定的访问端点名称
    * vpcId  访问端点所在的VPC的ID
    * subnetId  访问端点所在的子网的ID
    * domain  访问域名
    * description  描述
    * status  访问端点状态
    * errorInfo  errorInfo
    * type  访问端点类型
    * scalable  是否可更新
    * createdTime  创建UTC时间
    * updatedTime  更新UTC时间
    * endpoints  访问端点终端节点列表
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'vpcId' => 'getVpcId',
            'subnetId' => 'getSubnetId',
            'domain' => 'getDomain',
            'description' => 'getDescription',
            'status' => 'getStatus',
            'errorInfo' => 'getErrorInfo',
            'type' => 'getType',
            'scalable' => 'getScalable',
            'createdTime' => 'getCreatedTime',
            'updatedTime' => 'getUpdatedTime',
            'endpoints' => 'getEndpoints',
            'xRequestId' => 'getXRequestId'
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
    const STATUS_CREATED = 'CREATED';
    const STATUS_CREATING = 'CREATING';
    const STATUS_CREATE_FAILED = 'CREATE_FAILED';
    const STATUS_DELETE_FAILED = 'DELETE_FAILED';
    const TYPE__PRIVATE = 'PRIVATE';
    const TYPE__PUBLIC = 'PUBLIC';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_CREATED,
            self::STATUS_CREATING,
            self::STATUS_CREATE_FAILED,
            self::STATUS_DELETE_FAILED,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE__PRIVATE,
            self::TYPE__PUBLIC,
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
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['errorInfo'] = isset($data['errorInfo']) ? $data['errorInfo'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['scalable'] = isset($data['scalable']) ? $data['scalable'] : null;
        $this->container['createdTime'] = isset($data['createdTime']) ? $data['createdTime'] : null;
        $this->container['updatedTime'] = isset($data['updatedTime']) ? $data['updatedTime'] : null;
        $this->container['endpoints'] = isset($data['endpoints']) ? $data['endpoints'] : null;
        $this->container['xRequestId'] = isset($data['xRequestId']) ? $data['xRequestId'] : null;
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

            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
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
    *  访问端点ID
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
    * @param string|null $id 访问端点ID
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
    *  用户指定的访问端点名称
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
    * @param string|null $name 用户指定的访问端点名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets vpcId
    *  访问端点所在的VPC的ID
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
    * @param string|null $vpcId 访问端点所在的VPC的ID
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
    *  访问端点所在的子网的ID
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
    * @param string|null $subnetId 访问端点所在的子网的ID
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
        return $this;
    }

    /**
    * Gets domain
    *  访问域名
    *
    * @return string|null
    */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
    * Sets domain
    *
    * @param string|null $domain 访问域名
    *
    * @return $this
    */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;
        return $this;
    }

    /**
    * Gets description
    *  描述
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
    * @param string|null $description 描述
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
    *  访问端点状态
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
    * @param string|null $status 访问端点状态
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
    * Gets type
    *  访问端点类型
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 访问端点类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets scalable
    *  是否可更新
    *
    * @return bool|null
    */
    public function getScalable()
    {
        return $this->container['scalable'];
    }

    /**
    * Sets scalable
    *
    * @param bool|null $scalable 是否可更新
    *
    * @return $this
    */
    public function setScalable($scalable)
    {
        $this->container['scalable'] = $scalable;
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
    * Gets endpoints
    *  访问端点终端节点列表
    *
    * @return \HuaweiCloud\SDK\Eg\V1\Model\EndpointConnection[]|null
    */
    public function getEndpoints()
    {
        return $this->container['endpoints'];
    }

    /**
    * Sets endpoints
    *
    * @param \HuaweiCloud\SDK\Eg\V1\Model\EndpointConnection[]|null $endpoints 访问端点终端节点列表
    *
    * @return $this
    */
    public function setEndpoints($endpoints)
    {
        $this->container['endpoints'] = $endpoints;
        return $this;
    }

    /**
    * Gets xRequestId
    *  xRequestId
    *
    * @return string|null
    */
    public function getXRequestId()
    {
        return $this->container['xRequestId'];
    }

    /**
    * Sets xRequestId
    *
    * @param string|null $xRequestId xRequestId
    *
    * @return $this
    */
    public function setXRequestId($xRequestId)
    {
        $this->container['xRequestId'] = $xRequestId;
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

