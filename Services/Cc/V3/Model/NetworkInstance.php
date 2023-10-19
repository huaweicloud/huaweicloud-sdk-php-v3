<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NetworkInstance implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NetworkInstance';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  资源ID标识符。
    * name  实例名字。
    * description  实例描述。不支持 <>。
    * domainId  实例所属帐号ID。
    * createdAt  实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * updatedAt  实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * cloudConnectionId  资源ID标识符。
    * instanceId  资源ID标识符。
    * instanceDomainId  实例所属帐号ID。
    * regionId  RegionID。
    * projectId  实例所属项目ID。
    * status  网络实例的状态。 - ACTIVE：处理成功。 - PENDING：处理中。 - ERROR：处理失败。
    * type  网络实例的类型。 - vpc：虚拟私有云。 - vgw：虚拟网关。
    * cidrs  网络实例发布的网段路由列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'description' => 'string',
            'domainId' => 'string',
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime',
            'cloudConnectionId' => 'string',
            'instanceId' => 'string',
            'instanceDomainId' => 'string',
            'regionId' => 'string',
            'projectId' => 'string',
            'status' => 'string',
            'type' => 'string',
            'cidrs' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  资源ID标识符。
    * name  实例名字。
    * description  实例描述。不支持 <>。
    * domainId  实例所属帐号ID。
    * createdAt  实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * updatedAt  实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * cloudConnectionId  资源ID标识符。
    * instanceId  资源ID标识符。
    * instanceDomainId  实例所属帐号ID。
    * regionId  RegionID。
    * projectId  实例所属项目ID。
    * status  网络实例的状态。 - ACTIVE：处理成功。 - PENDING：处理中。 - ERROR：处理失败。
    * type  网络实例的类型。 - vpc：虚拟私有云。 - vgw：虚拟网关。
    * cidrs  网络实例发布的网段路由列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'domainId' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'cloudConnectionId' => null,
        'instanceId' => null,
        'instanceDomainId' => null,
        'regionId' => null,
        'projectId' => null,
        'status' => null,
        'type' => null,
        'cidrs' => null
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
    * id  资源ID标识符。
    * name  实例名字。
    * description  实例描述。不支持 <>。
    * domainId  实例所属帐号ID。
    * createdAt  实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * updatedAt  实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * cloudConnectionId  资源ID标识符。
    * instanceId  资源ID标识符。
    * instanceDomainId  实例所属帐号ID。
    * regionId  RegionID。
    * projectId  实例所属项目ID。
    * status  网络实例的状态。 - ACTIVE：处理成功。 - PENDING：处理中。 - ERROR：处理失败。
    * type  网络实例的类型。 - vpc：虚拟私有云。 - vgw：虚拟网关。
    * cidrs  网络实例发布的网段路由列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'domainId' => 'domain_id',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'cloudConnectionId' => 'cloud_connection_id',
            'instanceId' => 'instance_id',
            'instanceDomainId' => 'instance_domain_id',
            'regionId' => 'region_id',
            'projectId' => 'project_id',
            'status' => 'status',
            'type' => 'type',
            'cidrs' => 'cidrs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  资源ID标识符。
    * name  实例名字。
    * description  实例描述。不支持 <>。
    * domainId  实例所属帐号ID。
    * createdAt  实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * updatedAt  实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * cloudConnectionId  资源ID标识符。
    * instanceId  资源ID标识符。
    * instanceDomainId  实例所属帐号ID。
    * regionId  RegionID。
    * projectId  实例所属项目ID。
    * status  网络实例的状态。 - ACTIVE：处理成功。 - PENDING：处理中。 - ERROR：处理失败。
    * type  网络实例的类型。 - vpc：虚拟私有云。 - vgw：虚拟网关。
    * cidrs  网络实例发布的网段路由列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'domainId' => 'setDomainId',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'cloudConnectionId' => 'setCloudConnectionId',
            'instanceId' => 'setInstanceId',
            'instanceDomainId' => 'setInstanceDomainId',
            'regionId' => 'setRegionId',
            'projectId' => 'setProjectId',
            'status' => 'setStatus',
            'type' => 'setType',
            'cidrs' => 'setCidrs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  资源ID标识符。
    * name  实例名字。
    * description  实例描述。不支持 <>。
    * domainId  实例所属帐号ID。
    * createdAt  实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * updatedAt  实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * cloudConnectionId  资源ID标识符。
    * instanceId  资源ID标识符。
    * instanceDomainId  实例所属帐号ID。
    * regionId  RegionID。
    * projectId  实例所属项目ID。
    * status  网络实例的状态。 - ACTIVE：处理成功。 - PENDING：处理中。 - ERROR：处理失败。
    * type  网络实例的类型。 - vpc：虚拟私有云。 - vgw：虚拟网关。
    * cidrs  网络实例发布的网段路由列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'domainId' => 'getDomainId',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'cloudConnectionId' => 'getCloudConnectionId',
            'instanceId' => 'getInstanceId',
            'instanceDomainId' => 'getInstanceDomainId',
            'regionId' => 'getRegionId',
            'projectId' => 'getProjectId',
            'status' => 'getStatus',
            'type' => 'getType',
            'cidrs' => 'getCidrs'
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
    const TYPE_VPC = 'vpc';
    const TYPE_VGW = 'vgw';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACTIVE,
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
            self::TYPE_VPC,
            self::TYPE_VGW,
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
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['cloudConnectionId'] = isset($data['cloudConnectionId']) ? $data['cloudConnectionId'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['instanceDomainId'] = isset($data['instanceDomainId']) ? $data['instanceDomainId'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['cidrs'] = isset($data['cidrs']) ? $data['cidrs'] : null;
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
            if ((mb_strlen($this->container['id']) < 32)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 32.";
            }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}|[a-fA-F0-9]{32}/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}|[a-fA-F0-9]{32}/.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[\\u4e00-\\u9fa50-9a-zA-Z_.\\-]+$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[\\u4e00-\\u9fa50-9a-zA-Z_.\\-]+$/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && !preg_match("/^[^<>]*$/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /^[^<>]*$/.";
            }
        if ($this->container['domainId'] === null) {
            $invalidProperties[] = "'domainId' can't be null";
        }
            if ((mb_strlen($this->container['domainId']) > 32)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['domainId']) < 10)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 10.";
            }
            if (!preg_match("/[a-fA-F0-9]{10,32}/", $this->container['domainId'])) {
                $invalidProperties[] = "invalid value for 'domainId', must be conform to the pattern /[a-fA-F0-9]{10,32}/.";
            }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
        }
        if ($this->container['cloudConnectionId'] === null) {
            $invalidProperties[] = "'cloudConnectionId' can't be null";
        }
            if ((mb_strlen($this->container['cloudConnectionId']) > 36)) {
                $invalidProperties[] = "invalid value for 'cloudConnectionId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['cloudConnectionId']) < 32)) {
                $invalidProperties[] = "invalid value for 'cloudConnectionId', the character length must be bigger than or equal to 32.";
            }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}|[a-fA-F0-9]{32}/", $this->container['cloudConnectionId'])) {
                $invalidProperties[] = "invalid value for 'cloudConnectionId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}|[a-fA-F0-9]{32}/.";
            }
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
            if ((mb_strlen($this->container['instanceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['instanceId']) < 32)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 32.";
            }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}|[a-fA-F0-9]{32}/", $this->container['instanceId'])) {
                $invalidProperties[] = "invalid value for 'instanceId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}|[a-fA-F0-9]{32}/.";
            }
            if (!is_null($this->container['instanceDomainId']) && (mb_strlen($this->container['instanceDomainId']) > 32)) {
                $invalidProperties[] = "invalid value for 'instanceDomainId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['instanceDomainId']) && (mb_strlen($this->container['instanceDomainId']) < 10)) {
                $invalidProperties[] = "invalid value for 'instanceDomainId', the character length must be bigger than or equal to 10.";
            }
            if (!is_null($this->container['instanceDomainId']) && !preg_match("/[a-fA-F0-9]{10,32}/", $this->container['instanceDomainId'])) {
                $invalidProperties[] = "invalid value for 'instanceDomainId', must be conform to the pattern /[a-fA-F0-9]{10,32}/.";
            }
        if ($this->container['regionId'] === null) {
            $invalidProperties[] = "'regionId' can't be null";
        }
            if ((mb_strlen($this->container['regionId']) > 32)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['regionId']) < 1)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if ((mb_strlen($this->container['projectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
            if (!preg_match("/[a-fA-F0-9]{32}/", $this->container['projectId'])) {
                $invalidProperties[] = "invalid value for 'projectId', must be conform to the pattern /[a-fA-F0-9]{32}/.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 36)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 36)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 0)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 0.";
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
    *  资源ID标识符。
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
    * @param string $id 资源ID标识符。
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
    *  实例名字。
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
    * @param string $name 实例名字。
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
    *  实例描述。不支持 <>。
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
    * @param string|null $description 实例描述。不支持 <>。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets domainId
    *  实例所属帐号ID。
    *
    * @return string
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string $domainId 实例所属帐号ID。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets createdAt
    *  实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
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
    * @param \DateTime $createdAt 实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
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
    *  实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
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
    * @param \DateTime $updatedAt 实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets cloudConnectionId
    *  资源ID标识符。
    *
    * @return string
    */
    public function getCloudConnectionId()
    {
        return $this->container['cloudConnectionId'];
    }

    /**
    * Sets cloudConnectionId
    *
    * @param string $cloudConnectionId 资源ID标识符。
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
    *  资源ID标识符。
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId 资源ID标识符。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets instanceDomainId
    *  实例所属帐号ID。
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
    * @param string|null $instanceDomainId 实例所属帐号ID。
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
    *  RegionID。
    *
    * @return string
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string $regionId RegionID。
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
    *  实例所属项目ID。
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
    * @param string $projectId 实例所属项目ID。
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
    *  网络实例的状态。 - ACTIVE：处理成功。 - PENDING：处理中。 - ERROR：处理失败。
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
    * @param string|null $status 网络实例的状态。 - ACTIVE：处理成功。 - PENDING：处理中。 - ERROR：处理失败。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets type
    *  网络实例的类型。 - vpc：虚拟私有云。 - vgw：虚拟网关。
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
    * @param string|null $type 网络实例的类型。 - vpc：虚拟私有云。 - vgw：虚拟网关。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets cidrs
    *  网络实例发布的网段路由列表。
    *
    * @return string[]|null
    */
    public function getCidrs()
    {
        return $this->container['cidrs'];
    }

    /**
    * Sets cidrs
    *
    * @param string[]|null $cidrs 网络实例发布的网段路由列表。
    *
    * @return $this
    */
    public function setCidrs($cidrs)
    {
        $this->container['cidrs'] = $cidrs;
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

