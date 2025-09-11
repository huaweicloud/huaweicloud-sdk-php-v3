<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowInstanceInternalEndpointResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowInstanceInternalEndpointResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  内网访问ID
    * vpcepEndpointId  VPC端点的ID
    * projectId  项目ID
    * projectName  项目名称
    * vpcId  VPC的ID
    * vpcName  VPC的名称
    * vpcCidr  VPC的CIDR范围
    * subnetId  子网的ID
    * subnetName  子网的名称
    * subnetCidr  子网的CIDR范围
    * endpointIp  端点的IP地址
    * description  访问控制的描述信息
    * status  访问控制的状态
    * statusText  访问控制的状态信息
    * createdAt  访问控制的创建时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'vpcepEndpointId' => 'string',
            'projectId' => 'string',
            'projectName' => 'string',
            'vpcId' => 'string',
            'vpcName' => 'string',
            'vpcCidr' => 'string',
            'subnetId' => 'string',
            'subnetName' => 'string',
            'subnetCidr' => 'string',
            'endpointIp' => 'string',
            'description' => 'string',
            'status' => 'string',
            'statusText' => 'string',
            'createdAt' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  内网访问ID
    * vpcepEndpointId  VPC端点的ID
    * projectId  项目ID
    * projectName  项目名称
    * vpcId  VPC的ID
    * vpcName  VPC的名称
    * vpcCidr  VPC的CIDR范围
    * subnetId  子网的ID
    * subnetName  子网的名称
    * subnetCidr  子网的CIDR范围
    * endpointIp  端点的IP地址
    * description  访问控制的描述信息
    * status  访问控制的状态
    * statusText  访问控制的状态信息
    * createdAt  访问控制的创建时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'vpcepEndpointId' => null,
        'projectId' => null,
        'projectName' => null,
        'vpcId' => null,
        'vpcName' => null,
        'vpcCidr' => null,
        'subnetId' => null,
        'subnetName' => null,
        'subnetCidr' => null,
        'endpointIp' => null,
        'description' => null,
        'status' => null,
        'statusText' => null,
        'createdAt' => null
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
    * id  内网访问ID
    * vpcepEndpointId  VPC端点的ID
    * projectId  项目ID
    * projectName  项目名称
    * vpcId  VPC的ID
    * vpcName  VPC的名称
    * vpcCidr  VPC的CIDR范围
    * subnetId  子网的ID
    * subnetName  子网的名称
    * subnetCidr  子网的CIDR范围
    * endpointIp  端点的IP地址
    * description  访问控制的描述信息
    * status  访问控制的状态
    * statusText  访问控制的状态信息
    * createdAt  访问控制的创建时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'vpcepEndpointId' => 'vpcep_endpoint_id',
            'projectId' => 'project_id',
            'projectName' => 'project_name',
            'vpcId' => 'vpc_id',
            'vpcName' => 'vpc_name',
            'vpcCidr' => 'vpc_cidr',
            'subnetId' => 'subnet_id',
            'subnetName' => 'subnet_name',
            'subnetCidr' => 'subnet_cidr',
            'endpointIp' => 'endpoint_ip',
            'description' => 'description',
            'status' => 'status',
            'statusText' => 'status_text',
            'createdAt' => 'created_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  内网访问ID
    * vpcepEndpointId  VPC端点的ID
    * projectId  项目ID
    * projectName  项目名称
    * vpcId  VPC的ID
    * vpcName  VPC的名称
    * vpcCidr  VPC的CIDR范围
    * subnetId  子网的ID
    * subnetName  子网的名称
    * subnetCidr  子网的CIDR范围
    * endpointIp  端点的IP地址
    * description  访问控制的描述信息
    * status  访问控制的状态
    * statusText  访问控制的状态信息
    * createdAt  访问控制的创建时间
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'vpcepEndpointId' => 'setVpcepEndpointId',
            'projectId' => 'setProjectId',
            'projectName' => 'setProjectName',
            'vpcId' => 'setVpcId',
            'vpcName' => 'setVpcName',
            'vpcCidr' => 'setVpcCidr',
            'subnetId' => 'setSubnetId',
            'subnetName' => 'setSubnetName',
            'subnetCidr' => 'setSubnetCidr',
            'endpointIp' => 'setEndpointIp',
            'description' => 'setDescription',
            'status' => 'setStatus',
            'statusText' => 'setStatusText',
            'createdAt' => 'setCreatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  内网访问ID
    * vpcepEndpointId  VPC端点的ID
    * projectId  项目ID
    * projectName  项目名称
    * vpcId  VPC的ID
    * vpcName  VPC的名称
    * vpcCidr  VPC的CIDR范围
    * subnetId  子网的ID
    * subnetName  子网的名称
    * subnetCidr  子网的CIDR范围
    * endpointIp  端点的IP地址
    * description  访问控制的描述信息
    * status  访问控制的状态
    * statusText  访问控制的状态信息
    * createdAt  访问控制的创建时间
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'vpcepEndpointId' => 'getVpcepEndpointId',
            'projectId' => 'getProjectId',
            'projectName' => 'getProjectName',
            'vpcId' => 'getVpcId',
            'vpcName' => 'getVpcName',
            'vpcCidr' => 'getVpcCidr',
            'subnetId' => 'getSubnetId',
            'subnetName' => 'getSubnetName',
            'subnetCidr' => 'getSubnetCidr',
            'endpointIp' => 'getEndpointIp',
            'description' => 'getDescription',
            'status' => 'getStatus',
            'statusText' => 'getStatusText',
            'createdAt' => 'getCreatedAt'
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
    const STATUS_CREATING = 'Creating';
    const STATUS_RUNNING = 'Running';
    const STATUS_CREATE_ERROR = 'CreateError';
    const STATUS_DELETING = 'Deleting';
    const STATUS_DELETE_ERROR = 'DeleteError';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_CREATING,
            self::STATUS_RUNNING,
            self::STATUS_CREATE_ERROR,
            self::STATUS_DELETING,
            self::STATUS_DELETE_ERROR,
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
        $this->container['vpcepEndpointId'] = isset($data['vpcepEndpointId']) ? $data['vpcepEndpointId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['projectName'] = isset($data['projectName']) ? $data['projectName'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['vpcName'] = isset($data['vpcName']) ? $data['vpcName'] : null;
        $this->container['vpcCidr'] = isset($data['vpcCidr']) ? $data['vpcCidr'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['subnetName'] = isset($data['subnetName']) ? $data['subnetName'] : null;
        $this->container['subnetCidr'] = isset($data['subnetCidr']) ? $data['subnetCidr'] : null;
        $this->container['endpointIp'] = isset($data['endpointIp']) ? $data['endpointIp'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['statusText'] = isset($data['statusText']) ? $data['statusText'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
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
    *  内网访问ID
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
    * @param string|null $id 内网访问ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets vpcepEndpointId
    *  VPC端点的ID
    *
    * @return string|null
    */
    public function getVpcepEndpointId()
    {
        return $this->container['vpcepEndpointId'];
    }

    /**
    * Sets vpcepEndpointId
    *
    * @param string|null $vpcepEndpointId VPC端点的ID
    *
    * @return $this
    */
    public function setVpcepEndpointId($vpcepEndpointId)
    {
        $this->container['vpcepEndpointId'] = $vpcepEndpointId;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets projectName
    *  项目名称
    *
    * @return string|null
    */
    public function getProjectName()
    {
        return $this->container['projectName'];
    }

    /**
    * Sets projectName
    *
    * @param string|null $projectName 项目名称
    *
    * @return $this
    */
    public function setProjectName($projectName)
    {
        $this->container['projectName'] = $projectName;
        return $this;
    }

    /**
    * Gets vpcId
    *  VPC的ID
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
    * @param string|null $vpcId VPC的ID
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets vpcName
    *  VPC的名称
    *
    * @return string|null
    */
    public function getVpcName()
    {
        return $this->container['vpcName'];
    }

    /**
    * Sets vpcName
    *
    * @param string|null $vpcName VPC的名称
    *
    * @return $this
    */
    public function setVpcName($vpcName)
    {
        $this->container['vpcName'] = $vpcName;
        return $this;
    }

    /**
    * Gets vpcCidr
    *  VPC的CIDR范围
    *
    * @return string|null
    */
    public function getVpcCidr()
    {
        return $this->container['vpcCidr'];
    }

    /**
    * Sets vpcCidr
    *
    * @param string|null $vpcCidr VPC的CIDR范围
    *
    * @return $this
    */
    public function setVpcCidr($vpcCidr)
    {
        $this->container['vpcCidr'] = $vpcCidr;
        return $this;
    }

    /**
    * Gets subnetId
    *  子网的ID
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
    * @param string|null $subnetId 子网的ID
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
        return $this;
    }

    /**
    * Gets subnetName
    *  子网的名称
    *
    * @return string|null
    */
    public function getSubnetName()
    {
        return $this->container['subnetName'];
    }

    /**
    * Sets subnetName
    *
    * @param string|null $subnetName 子网的名称
    *
    * @return $this
    */
    public function setSubnetName($subnetName)
    {
        $this->container['subnetName'] = $subnetName;
        return $this;
    }

    /**
    * Gets subnetCidr
    *  子网的CIDR范围
    *
    * @return string|null
    */
    public function getSubnetCidr()
    {
        return $this->container['subnetCidr'];
    }

    /**
    * Sets subnetCidr
    *
    * @param string|null $subnetCidr 子网的CIDR范围
    *
    * @return $this
    */
    public function setSubnetCidr($subnetCidr)
    {
        $this->container['subnetCidr'] = $subnetCidr;
        return $this;
    }

    /**
    * Gets endpointIp
    *  端点的IP地址
    *
    * @return string|null
    */
    public function getEndpointIp()
    {
        return $this->container['endpointIp'];
    }

    /**
    * Sets endpointIp
    *
    * @param string|null $endpointIp 端点的IP地址
    *
    * @return $this
    */
    public function setEndpointIp($endpointIp)
    {
        $this->container['endpointIp'] = $endpointIp;
        return $this;
    }

    /**
    * Gets description
    *  访问控制的描述信息
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
    * @param string|null $description 访问控制的描述信息
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
    *  访问控制的状态
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
    * @param string|null $status 访问控制的状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets statusText
    *  访问控制的状态信息
    *
    * @return string|null
    */
    public function getStatusText()
    {
        return $this->container['statusText'];
    }

    /**
    * Sets statusText
    *
    * @param string|null $statusText 访问控制的状态信息
    *
    * @return $this
    */
    public function setStatusText($statusText)
    {
        $this->container['statusText'] = $statusText;
        return $this;
    }

    /**
    * Gets createdAt
    *  访问控制的创建时间
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt 访问控制的创建时间
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
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

