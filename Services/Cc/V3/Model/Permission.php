<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Permission implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Permission';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  授权的ID。
    * name  授权的名称。
    * description  授权的描述信息。
    * status  授权的状态。
    * createdAt  授权的时间。
    * domainId  被授权者的账户ID。
    * cloudConnectionId  被授权云连接实例ID。
    * instanceId  授权实例的ID。
    * instanceType  授权实例的类型。
    * instanceDomainId  被授权网络实例所属的账户ID。
    * regionId  授权实例所属Region。
    * projectId  授权实例所属项目ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'description' => 'string',
            'status' => 'string',
            'createdAt' => '\DateTime',
            'domainId' => 'string',
            'cloudConnectionId' => 'string',
            'instanceId' => 'string',
            'instanceType' => 'string',
            'instanceDomainId' => 'string',
            'regionId' => 'string',
            'projectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  授权的ID。
    * name  授权的名称。
    * description  授权的描述信息。
    * status  授权的状态。
    * createdAt  授权的时间。
    * domainId  被授权者的账户ID。
    * cloudConnectionId  被授权云连接实例ID。
    * instanceId  授权实例的ID。
    * instanceType  授权实例的类型。
    * instanceDomainId  被授权网络实例所属的账户ID。
    * regionId  授权实例所属Region。
    * projectId  授权实例所属项目ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'status' => null,
        'createdAt' => 'date-time',
        'domainId' => null,
        'cloudConnectionId' => null,
        'instanceId' => null,
        'instanceType' => null,
        'instanceDomainId' => null,
        'regionId' => null,
        'projectId' => null
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
    * id  授权的ID。
    * name  授权的名称。
    * description  授权的描述信息。
    * status  授权的状态。
    * createdAt  授权的时间。
    * domainId  被授权者的账户ID。
    * cloudConnectionId  被授权云连接实例ID。
    * instanceId  授权实例的ID。
    * instanceType  授权实例的类型。
    * instanceDomainId  被授权网络实例所属的账户ID。
    * regionId  授权实例所属Region。
    * projectId  授权实例所属项目ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'status' => 'status',
            'createdAt' => 'created_at',
            'domainId' => 'domain_id',
            'cloudConnectionId' => 'cloud_connection_id',
            'instanceId' => 'instance_id',
            'instanceType' => 'instance_type',
            'instanceDomainId' => 'instance_domain_id',
            'regionId' => 'region_id',
            'projectId' => 'project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  授权的ID。
    * name  授权的名称。
    * description  授权的描述信息。
    * status  授权的状态。
    * createdAt  授权的时间。
    * domainId  被授权者的账户ID。
    * cloudConnectionId  被授权云连接实例ID。
    * instanceId  授权实例的ID。
    * instanceType  授权实例的类型。
    * instanceDomainId  被授权网络实例所属的账户ID。
    * regionId  授权实例所属Region。
    * projectId  授权实例所属项目ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'status' => 'setStatus',
            'createdAt' => 'setCreatedAt',
            'domainId' => 'setDomainId',
            'cloudConnectionId' => 'setCloudConnectionId',
            'instanceId' => 'setInstanceId',
            'instanceType' => 'setInstanceType',
            'instanceDomainId' => 'setInstanceDomainId',
            'regionId' => 'setRegionId',
            'projectId' => 'setProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  授权的ID。
    * name  授权的名称。
    * description  授权的描述信息。
    * status  授权的状态。
    * createdAt  授权的时间。
    * domainId  被授权者的账户ID。
    * cloudConnectionId  被授权云连接实例ID。
    * instanceId  授权实例的ID。
    * instanceType  授权实例的类型。
    * instanceDomainId  被授权网络实例所属的账户ID。
    * regionId  授权实例所属Region。
    * projectId  授权实例所属项目ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'status' => 'getStatus',
            'createdAt' => 'getCreatedAt',
            'domainId' => 'getDomainId',
            'cloudConnectionId' => 'getCloudConnectionId',
            'instanceId' => 'getInstanceId',
            'instanceType' => 'getInstanceType',
            'instanceDomainId' => 'getInstanceDomainId',
            'regionId' => 'getRegionId',
            'projectId' => 'getProjectId'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['cloudConnectionId'] = isset($data['cloudConnectionId']) ? $data['cloudConnectionId'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['instanceType'] = isset($data['instanceType']) ? $data['instanceType'] : null;
        $this->container['instanceDomainId'] = isset($data['instanceDomainId']) ? $data['instanceDomainId'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 255)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) > 36)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['domainId']) && (mb_strlen($this->container['domainId']) < 0)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cloudConnectionId']) && (mb_strlen($this->container['cloudConnectionId']) > 36)) {
                $invalidProperties[] = "invalid value for 'cloudConnectionId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['cloudConnectionId']) && (mb_strlen($this->container['cloudConnectionId']) < 0)) {
                $invalidProperties[] = "invalid value for 'cloudConnectionId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['instanceType']) && (mb_strlen($this->container['instanceType']) > 255)) {
                $invalidProperties[] = "invalid value for 'instanceType', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['instanceType']) && (mb_strlen($this->container['instanceType']) < 0)) {
                $invalidProperties[] = "invalid value for 'instanceType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['instanceDomainId']) && (mb_strlen($this->container['instanceDomainId']) > 36)) {
                $invalidProperties[] = "invalid value for 'instanceDomainId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['instanceDomainId']) && (mb_strlen($this->container['instanceDomainId']) < 0)) {
                $invalidProperties[] = "invalid value for 'instanceDomainId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) > 255)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) < 0)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 0.";
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
    *  授权的ID。
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
    * @param string|null $id 授权的ID。
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
    *  授权的名称。
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
    * @param string|null $name 授权的名称。
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
    *  授权的描述信息。
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
    * @param string|null $description 授权的描述信息。
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
    *  授权的状态。
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
    * @param string|null $status 授权的状态。
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
    *  授权的时间。
    *
    * @return \DateTime|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param \DateTime|null $createdAt 授权的时间。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets domainId
    *  被授权者的账户ID。
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
    * @param string|null $domainId 被授权者的账户ID。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets cloudConnectionId
    *  被授权云连接实例ID。
    *
    * @return string|null
    */
    public function getCloudConnectionId()
    {
        return $this->container['cloudConnectionId'];
    }

    /**
    * Sets cloudConnectionId
    *
    * @param string|null $cloudConnectionId 被授权云连接实例ID。
    *
    * @return $this
    */
    public function setCloudConnectionId($cloudConnectionId)
    {
        $this->container['cloudConnectionId'] = $cloudConnectionId;
        return $this;
    }

    /**
    * Gets instanceId
    *  授权实例的ID。
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 授权实例的ID。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets instanceType
    *  授权实例的类型。
    *
    * @return string|null
    */
    public function getInstanceType()
    {
        return $this->container['instanceType'];
    }

    /**
    * Sets instanceType
    *
    * @param string|null $instanceType 授权实例的类型。
    *
    * @return $this
    */
    public function setInstanceType($instanceType)
    {
        $this->container['instanceType'] = $instanceType;
        return $this;
    }

    /**
    * Gets instanceDomainId
    *  被授权网络实例所属的账户ID。
    *
    * @return string|null
    */
    public function getInstanceDomainId()
    {
        return $this->container['instanceDomainId'];
    }

    /**
    * Sets instanceDomainId
    *
    * @param string|null $instanceDomainId 被授权网络实例所属的账户ID。
    *
    * @return $this
    */
    public function setInstanceDomainId($instanceDomainId)
    {
        $this->container['instanceDomainId'] = $instanceDomainId;
        return $this;
    }

    /**
    * Gets regionId
    *  授权实例所属Region。
    *
    * @return string|null
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string|null $regionId 授权实例所属Region。
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets projectId
    *  授权实例所属项目ID。
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
    * @param string|null $projectId 授权实例所属项目ID。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
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

