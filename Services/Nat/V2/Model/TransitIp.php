<?php

namespace HuaweiCloud\SDK\Nat\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TransitIp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TransitIp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  中转IP的ID。
    * projectId  项目的ID。
    * networkInterfaceId  中转IP的网络接口ID。
    * ipAddress  中转IP的地址。
    * createdAt  中转IP的创建时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ
    * updatedAt  中转IP的更新时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ
    * virsubnetId  当前租户子网的ID。取值约束：与transit_subnet_id参数二选一。默认空字符串。
    * tags  标签列表。
    * gatewayId  中转IP绑定的私网NAT网关实例的ID。
    * enterpriseProjectId  企业项目ID。创建中转IP时，关联的企业项目ID。
    * status  私网NAT中转IP的状态。 取值为： \"ACTIVE\"：正常运行 \"FROZEN\"：冻结 \"INACTIVE\"：不可用
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'projectId' => 'string',
            'networkInterfaceId' => 'string',
            'ipAddress' => 'string',
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime',
            'virsubnetId' => 'string',
            'tags' => '\HuaweiCloud\SDK\Nat\V2\Model\Tag[]',
            'gatewayId' => 'string',
            'enterpriseProjectId' => 'string',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  中转IP的ID。
    * projectId  项目的ID。
    * networkInterfaceId  中转IP的网络接口ID。
    * ipAddress  中转IP的地址。
    * createdAt  中转IP的创建时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ
    * updatedAt  中转IP的更新时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ
    * virsubnetId  当前租户子网的ID。取值约束：与transit_subnet_id参数二选一。默认空字符串。
    * tags  标签列表。
    * gatewayId  中转IP绑定的私网NAT网关实例的ID。
    * enterpriseProjectId  企业项目ID。创建中转IP时，关联的企业项目ID。
    * status  私网NAT中转IP的状态。 取值为： \"ACTIVE\"：正常运行 \"FROZEN\"：冻结 \"INACTIVE\"：不可用
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'projectId' => null,
        'networkInterfaceId' => null,
        'ipAddress' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'virsubnetId' => null,
        'tags' => null,
        'gatewayId' => null,
        'enterpriseProjectId' => null,
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
    * id  中转IP的ID。
    * projectId  项目的ID。
    * networkInterfaceId  中转IP的网络接口ID。
    * ipAddress  中转IP的地址。
    * createdAt  中转IP的创建时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ
    * updatedAt  中转IP的更新时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ
    * virsubnetId  当前租户子网的ID。取值约束：与transit_subnet_id参数二选一。默认空字符串。
    * tags  标签列表。
    * gatewayId  中转IP绑定的私网NAT网关实例的ID。
    * enterpriseProjectId  企业项目ID。创建中转IP时，关联的企业项目ID。
    * status  私网NAT中转IP的状态。 取值为： \"ACTIVE\"：正常运行 \"FROZEN\"：冻结 \"INACTIVE\"：不可用
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'projectId' => 'project_id',
            'networkInterfaceId' => 'network_interface_id',
            'ipAddress' => 'ip_address',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'virsubnetId' => 'virsubnet_id',
            'tags' => 'tags',
            'gatewayId' => 'gateway_id',
            'enterpriseProjectId' => 'enterprise_project_id',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  中转IP的ID。
    * projectId  项目的ID。
    * networkInterfaceId  中转IP的网络接口ID。
    * ipAddress  中转IP的地址。
    * createdAt  中转IP的创建时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ
    * updatedAt  中转IP的更新时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ
    * virsubnetId  当前租户子网的ID。取值约束：与transit_subnet_id参数二选一。默认空字符串。
    * tags  标签列表。
    * gatewayId  中转IP绑定的私网NAT网关实例的ID。
    * enterpriseProjectId  企业项目ID。创建中转IP时，关联的企业项目ID。
    * status  私网NAT中转IP的状态。 取值为： \"ACTIVE\"：正常运行 \"FROZEN\"：冻结 \"INACTIVE\"：不可用
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'projectId' => 'setProjectId',
            'networkInterfaceId' => 'setNetworkInterfaceId',
            'ipAddress' => 'setIpAddress',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'virsubnetId' => 'setVirsubnetId',
            'tags' => 'setTags',
            'gatewayId' => 'setGatewayId',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  中转IP的ID。
    * projectId  项目的ID。
    * networkInterfaceId  中转IP的网络接口ID。
    * ipAddress  中转IP的地址。
    * createdAt  中转IP的创建时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ
    * updatedAt  中转IP的更新时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ
    * virsubnetId  当前租户子网的ID。取值约束：与transit_subnet_id参数二选一。默认空字符串。
    * tags  标签列表。
    * gatewayId  中转IP绑定的私网NAT网关实例的ID。
    * enterpriseProjectId  企业项目ID。创建中转IP时，关联的企业项目ID。
    * status  私网NAT中转IP的状态。 取值为： \"ACTIVE\"：正常运行 \"FROZEN\"：冻结 \"INACTIVE\"：不可用
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'projectId' => 'getProjectId',
            'networkInterfaceId' => 'getNetworkInterfaceId',
            'ipAddress' => 'getIpAddress',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'virsubnetId' => 'getVirsubnetId',
            'tags' => 'getTags',
            'gatewayId' => 'getGatewayId',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
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
    const STATUS_ACTIVE = 'ACTIVE';
    const STATUS_FROZEN = 'FROZEN';
    const STATUS_INACTIVE = 'INACTIVE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACTIVE,
            self::STATUS_FROZEN,
            self::STATUS_INACTIVE,
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['networkInterfaceId'] = isset($data['networkInterfaceId']) ? $data['networkInterfaceId'] : null;
        $this->container['ipAddress'] = isset($data['ipAddress']) ? $data['ipAddress'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['virsubnetId'] = isset($data['virsubnetId']) ? $data['virsubnetId'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['gatewayId'] = isset($data['gatewayId']) ? $data['gatewayId'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
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
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
            if ((mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['id']) < 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 36.";
            }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if ((mb_strlen($this->container['projectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['projectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['networkInterfaceId'] === null) {
            $invalidProperties[] = "'networkInterfaceId' can't be null";
        }
            if ((mb_strlen($this->container['networkInterfaceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'networkInterfaceId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['networkInterfaceId']) < 36)) {
                $invalidProperties[] = "invalid value for 'networkInterfaceId', the character length must be bigger than or equal to 36.";
            }
        if ($this->container['ipAddress'] === null) {
            $invalidProperties[] = "'ipAddress' can't be null";
        }
            if ((mb_strlen($this->container['ipAddress']) > 35)) {
                $invalidProperties[] = "invalid value for 'ipAddress', the character length must be smaller than or equal to 35.";
            }
            if ((mb_strlen($this->container['ipAddress']) < 7)) {
                $invalidProperties[] = "invalid value for 'ipAddress', the character length must be bigger than or equal to 7.";
            }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
        }
            if (!is_null($this->container['virsubnetId']) && (mb_strlen($this->container['virsubnetId']) > 36)) {
                $invalidProperties[] = "invalid value for 'virsubnetId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['virsubnetId']) && (mb_strlen($this->container['virsubnetId']) < 0)) {
                $invalidProperties[] = "invalid value for 'virsubnetId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['gatewayId'] === null) {
            $invalidProperties[] = "'gatewayId' can't be null";
        }
            if ((mb_strlen($this->container['gatewayId']) > 36)) {
                $invalidProperties[] = "invalid value for 'gatewayId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['gatewayId']) < 36)) {
                $invalidProperties[] = "invalid value for 'gatewayId', the character length must be bigger than or equal to 36.";
            }
        if ($this->container['enterpriseProjectId'] === null) {
            $invalidProperties[] = "'enterpriseProjectId' can't be null";
        }
            if ((mb_strlen($this->container['enterpriseProjectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['enterpriseProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 1.";
            }
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
    *  中转IP的ID。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 中转IP的ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets projectId
    *  项目的ID。
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 项目的ID。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets networkInterfaceId
    *  中转IP的网络接口ID。
    *
    * @return string
    */
    public function getNetworkInterfaceId()
    {
        return $this->container['networkInterfaceId'];
    }

    /**
    * Sets networkInterfaceId
    *
    * @param string $networkInterfaceId 中转IP的网络接口ID。
    *
    * @return $this
    */
    public function setNetworkInterfaceId($networkInterfaceId)
    {
        $this->container['networkInterfaceId'] = $networkInterfaceId;
        return $this;
    }

    /**
    * Gets ipAddress
    *  中转IP的地址。
    *
    * @return string
    */
    public function getIpAddress()
    {
        return $this->container['ipAddress'];
    }

    /**
    * Sets ipAddress
    *
    * @param string $ipAddress 中转IP的地址。
    *
    * @return $this
    */
    public function setIpAddress($ipAddress)
    {
        $this->container['ipAddress'] = $ipAddress;
        return $this;
    }

    /**
    * Gets createdAt
    *  中转IP的创建时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ
    *
    * @return \DateTime
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param \DateTime $createdAt 中转IP的创建时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  中转IP的更新时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ
    *
    * @return \DateTime
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param \DateTime $updatedAt 中转IP的更新时间，遵循UTC时间，格式是yyyy-mm-ddThh:mm:ssZ
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets virsubnetId
    *  当前租户子网的ID。取值约束：与transit_subnet_id参数二选一。默认空字符串。
    *
    * @return string|null
    */
    public function getVirsubnetId()
    {
        return $this->container['virsubnetId'];
    }

    /**
    * Sets virsubnetId
    *
    * @param string|null $virsubnetId 当前租户子网的ID。取值约束：与transit_subnet_id参数二选一。默认空字符串。
    *
    * @return $this
    */
    public function setVirsubnetId($virsubnetId)
    {
        $this->container['virsubnetId'] = $virsubnetId;
        return $this;
    }

    /**
    * Gets tags
    *  标签列表。
    *
    * @return \HuaweiCloud\SDK\Nat\V2\Model\Tag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Nat\V2\Model\Tag[]|null $tags 标签列表。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets gatewayId
    *  中转IP绑定的私网NAT网关实例的ID。
    *
    * @return string
    */
    public function getGatewayId()
    {
        return $this->container['gatewayId'];
    }

    /**
    * Sets gatewayId
    *
    * @param string $gatewayId 中转IP绑定的私网NAT网关实例的ID。
    *
    * @return $this
    */
    public function setGatewayId($gatewayId)
    {
        $this->container['gatewayId'] = $gatewayId;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID。创建中转IP时，关联的企业项目ID。
    *
    * @return string
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string $enterpriseProjectId 企业项目ID。创建中转IP时，关联的企业项目ID。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets status
    *  私网NAT中转IP的状态。 取值为： \"ACTIVE\"：正常运行 \"FROZEN\"：冻结 \"INACTIVE\"：不可用
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
    * @param string|null $status 私网NAT中转IP的状态。 取值为： \"ACTIVE\"：正常运行 \"FROZEN\"：冻结 \"INACTIVE\"：不可用
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

