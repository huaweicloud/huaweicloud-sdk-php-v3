<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ConnectionItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ConnectionItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  VPC终端节点ID
    * domainId  VPC终端节点所属的租户ID
    * projectId  VPC终端节点所属的项目ID
    * status  VPC终端节点的连接状态 取值范围: - pendingAcceptance:待接受 - creating:创建中 - accepted:已接受 - rejected:已拒绝 - failed:失败 - deleting:删除中
    * createdAt  VPC终端节点的创建时间。采用UTC时间格式，格式为：YYYY-MM-DDTHH:MM:SSZ
    * updatedAt  VPC终端节点的更新时间。采用UTC时间格式，格式为：YYYY-MM-DDTHH:MM:SSZ
    * protected  是否为保护内网访问连接；如果为true则不允许添加或者移除
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'domainId' => 'string',
            'projectId' => 'string',
            'status' => 'string',
            'createdAt' => 'string',
            'updatedAt' => 'string',
            'protected' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  VPC终端节点ID
    * domainId  VPC终端节点所属的租户ID
    * projectId  VPC终端节点所属的项目ID
    * status  VPC终端节点的连接状态 取值范围: - pendingAcceptance:待接受 - creating:创建中 - accepted:已接受 - rejected:已拒绝 - failed:失败 - deleting:删除中
    * createdAt  VPC终端节点的创建时间。采用UTC时间格式，格式为：YYYY-MM-DDTHH:MM:SSZ
    * updatedAt  VPC终端节点的更新时间。采用UTC时间格式，格式为：YYYY-MM-DDTHH:MM:SSZ
    * protected  是否为保护内网访问连接；如果为true则不允许添加或者移除
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'domainId' => null,
        'projectId' => null,
        'status' => null,
        'createdAt' => null,
        'updatedAt' => null,
        'protected' => null
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
    * id  VPC终端节点ID
    * domainId  VPC终端节点所属的租户ID
    * projectId  VPC终端节点所属的项目ID
    * status  VPC终端节点的连接状态 取值范围: - pendingAcceptance:待接受 - creating:创建中 - accepted:已接受 - rejected:已拒绝 - failed:失败 - deleting:删除中
    * createdAt  VPC终端节点的创建时间。采用UTC时间格式，格式为：YYYY-MM-DDTHH:MM:SSZ
    * updatedAt  VPC终端节点的更新时间。采用UTC时间格式，格式为：YYYY-MM-DDTHH:MM:SSZ
    * protected  是否为保护内网访问连接；如果为true则不允许添加或者移除
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'domainId' => 'domain_id',
            'projectId' => 'project_id',
            'status' => 'status',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'protected' => 'protected'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  VPC终端节点ID
    * domainId  VPC终端节点所属的租户ID
    * projectId  VPC终端节点所属的项目ID
    * status  VPC终端节点的连接状态 取值范围: - pendingAcceptance:待接受 - creating:创建中 - accepted:已接受 - rejected:已拒绝 - failed:失败 - deleting:删除中
    * createdAt  VPC终端节点的创建时间。采用UTC时间格式，格式为：YYYY-MM-DDTHH:MM:SSZ
    * updatedAt  VPC终端节点的更新时间。采用UTC时间格式，格式为：YYYY-MM-DDTHH:MM:SSZ
    * protected  是否为保护内网访问连接；如果为true则不允许添加或者移除
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'domainId' => 'setDomainId',
            'projectId' => 'setProjectId',
            'status' => 'setStatus',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'protected' => 'setProtected'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  VPC终端节点ID
    * domainId  VPC终端节点所属的租户ID
    * projectId  VPC终端节点所属的项目ID
    * status  VPC终端节点的连接状态 取值范围: - pendingAcceptance:待接受 - creating:创建中 - accepted:已接受 - rejected:已拒绝 - failed:失败 - deleting:删除中
    * createdAt  VPC终端节点的创建时间。采用UTC时间格式，格式为：YYYY-MM-DDTHH:MM:SSZ
    * updatedAt  VPC终端节点的更新时间。采用UTC时间格式，格式为：YYYY-MM-DDTHH:MM:SSZ
    * protected  是否为保护内网访问连接；如果为true则不允许添加或者移除
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'domainId' => 'getDomainId',
            'projectId' => 'getProjectId',
            'status' => 'getStatus',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'protected' => 'getProtected'
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
    const STATUS_PENDING_ACCEPTANCE = 'pendingAcceptance';
    const STATUS_CREATING = 'creating';
    const STATUS_ACCEPTED = 'accepted';
    const STATUS_REJECTED = 'rejected';
    const STATUS_FAILED = 'failed';
    const STATUS_DELETING = 'deleting';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_PENDING_ACCEPTANCE,
            self::STATUS_CREATING,
            self::STATUS_ACCEPTED,
            self::STATUS_REJECTED,
            self::STATUS_FAILED,
            self::STATUS_DELETING,
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
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['protected'] = isset($data['protected']) ? $data['protected'] : null;
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
    *  VPC终端节点ID
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
    * @param string|null $id VPC终端节点ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets domainId
    *  VPC终端节点所属的租户ID
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId VPC终端节点所属的租户ID
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets projectId
    *  VPC终端节点所属的项目ID
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
    * @param string|null $projectId VPC终端节点所属的项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets status
    *  VPC终端节点的连接状态 取值范围: - pendingAcceptance:待接受 - creating:创建中 - accepted:已接受 - rejected:已拒绝 - failed:失败 - deleting:删除中
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
    * @param string|null $status VPC终端节点的连接状态 取值范围: - pendingAcceptance:待接受 - creating:创建中 - accepted:已接受 - rejected:已拒绝 - failed:失败 - deleting:删除中
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets createdAt
    *  VPC终端节点的创建时间。采用UTC时间格式，格式为：YYYY-MM-DDTHH:MM:SSZ
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
    * @param string|null $createdAt VPC终端节点的创建时间。采用UTC时间格式，格式为：YYYY-MM-DDTHH:MM:SSZ
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
    *  VPC终端节点的更新时间。采用UTC时间格式，格式为：YYYY-MM-DDTHH:MM:SSZ
    *
    * @return string|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string|null $updatedAt VPC终端节点的更新时间。采用UTC时间格式，格式为：YYYY-MM-DDTHH:MM:SSZ
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets protected
    *  是否为保护内网访问连接；如果为true则不允许添加或者移除
    *
    * @return bool|null
    */
    public function getProtected()
    {
        return $this->container['protected'];
    }

    /**
    * Sets protected
    *
    * @param bool|null $protected 是否为保护内网访问连接；如果为true则不允许添加或者移除
    *
    * @return $this
    */
    public function setProtected($protected)
    {
        $this->container['protected'] = $protected;
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

