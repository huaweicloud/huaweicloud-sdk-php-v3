<?php

namespace HuaweiCloud\SDK\Vpc\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NeutronRouter implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NeutronRouter';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * adminStateUp  功能说明：资源的管理状态。只支持true。 取值范围：true、false 约束：只支持true
    * externalGatewayInfo  externalGatewayInfo
    * id  路由器ID
    * name  功能说明：路由器的名称 取值范围：0-64个字符，仅支持数字、字母、中文、_(下划线)、-（中划线）、.（点）。 约束：如果name非空，则name不能重复。
    * routes  功能说明：路由信息，见Route对象
    * status  功能说明：路由器的状态 取值范围：ACTIVE， DOWN，ERROR
    * tenantId  项目ID
    * projectId  项目ID
    * createdAt  功能说明：资源创建UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    * updatedAt  功能说明：资源更新UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'adminStateUp' => 'bool',
            'externalGatewayInfo' => '\HuaweiCloud\SDK\Vpc\V2\Model\ExternalGatewayInfo',
            'id' => 'string',
            'name' => 'string',
            'routes' => '\HuaweiCloud\SDK\Vpc\V2\Model\Route[]',
            'status' => 'string',
            'tenantId' => 'string',
            'projectId' => 'string',
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * adminStateUp  功能说明：资源的管理状态。只支持true。 取值范围：true、false 约束：只支持true
    * externalGatewayInfo  externalGatewayInfo
    * id  路由器ID
    * name  功能说明：路由器的名称 取值范围：0-64个字符，仅支持数字、字母、中文、_(下划线)、-（中划线）、.（点）。 约束：如果name非空，则name不能重复。
    * routes  功能说明：路由信息，见Route对象
    * status  功能说明：路由器的状态 取值范围：ACTIVE， DOWN，ERROR
    * tenantId  项目ID
    * projectId  项目ID
    * createdAt  功能说明：资源创建UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    * updatedAt  功能说明：资源更新UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'adminStateUp' => null,
        'externalGatewayInfo' => null,
        'id' => null,
        'name' => null,
        'routes' => null,
        'status' => null,
        'tenantId' => null,
        'projectId' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time'
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
    * adminStateUp  功能说明：资源的管理状态。只支持true。 取值范围：true、false 约束：只支持true
    * externalGatewayInfo  externalGatewayInfo
    * id  路由器ID
    * name  功能说明：路由器的名称 取值范围：0-64个字符，仅支持数字、字母、中文、_(下划线)、-（中划线）、.（点）。 约束：如果name非空，则name不能重复。
    * routes  功能说明：路由信息，见Route对象
    * status  功能说明：路由器的状态 取值范围：ACTIVE， DOWN，ERROR
    * tenantId  项目ID
    * projectId  项目ID
    * createdAt  功能说明：资源创建UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    * updatedAt  功能说明：资源更新UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'adminStateUp' => 'admin_state_up',
            'externalGatewayInfo' => 'external_gateway_info',
            'id' => 'id',
            'name' => 'name',
            'routes' => 'routes',
            'status' => 'status',
            'tenantId' => 'tenant_id',
            'projectId' => 'project_id',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * adminStateUp  功能说明：资源的管理状态。只支持true。 取值范围：true、false 约束：只支持true
    * externalGatewayInfo  externalGatewayInfo
    * id  路由器ID
    * name  功能说明：路由器的名称 取值范围：0-64个字符，仅支持数字、字母、中文、_(下划线)、-（中划线）、.（点）。 约束：如果name非空，则name不能重复。
    * routes  功能说明：路由信息，见Route对象
    * status  功能说明：路由器的状态 取值范围：ACTIVE， DOWN，ERROR
    * tenantId  项目ID
    * projectId  项目ID
    * createdAt  功能说明：资源创建UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    * updatedAt  功能说明：资源更新UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    *
    * @var string[]
    */
    protected static $setters = [
            'adminStateUp' => 'setAdminStateUp',
            'externalGatewayInfo' => 'setExternalGatewayInfo',
            'id' => 'setId',
            'name' => 'setName',
            'routes' => 'setRoutes',
            'status' => 'setStatus',
            'tenantId' => 'setTenantId',
            'projectId' => 'setProjectId',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * adminStateUp  功能说明：资源的管理状态。只支持true。 取值范围：true、false 约束：只支持true
    * externalGatewayInfo  externalGatewayInfo
    * id  路由器ID
    * name  功能说明：路由器的名称 取值范围：0-64个字符，仅支持数字、字母、中文、_(下划线)、-（中划线）、.（点）。 约束：如果name非空，则name不能重复。
    * routes  功能说明：路由信息，见Route对象
    * status  功能说明：路由器的状态 取值范围：ACTIVE， DOWN，ERROR
    * tenantId  项目ID
    * projectId  项目ID
    * createdAt  功能说明：资源创建UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    * updatedAt  功能说明：资源更新UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    *
    * @var string[]
    */
    protected static $getters = [
            'adminStateUp' => 'getAdminStateUp',
            'externalGatewayInfo' => 'getExternalGatewayInfo',
            'id' => 'getId',
            'name' => 'getName',
            'routes' => 'getRoutes',
            'status' => 'getStatus',
            'tenantId' => 'getTenantId',
            'projectId' => 'getProjectId',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt'
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
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['externalGatewayInfo'] = isset($data['externalGatewayInfo']) ? $data['externalGatewayInfo'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['routes'] = isset($data['routes']) ? $data['routes'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['adminStateUp'] === null) {
            $invalidProperties[] = "'adminStateUp' can't be null";
        }
        if ($this->container['externalGatewayInfo'] === null) {
            $invalidProperties[] = "'externalGatewayInfo' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['routes'] === null) {
            $invalidProperties[] = "'routes' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['tenantId'] === null) {
            $invalidProperties[] = "'tenantId' can't be null";
        }
            if ((mb_strlen($this->container['tenantId']) > 255)) {
                $invalidProperties[] = "invalid value for 'tenantId', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['tenantId']) < 32)) {
                $invalidProperties[] = "invalid value for 'tenantId', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if ((mb_strlen($this->container['projectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 64.";
            }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
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
    * Gets adminStateUp
    *  功能说明：资源的管理状态。只支持true。 取值范围：true、false 约束：只支持true
    *
    * @return bool
    */
    public function getAdminStateUp()
    {
        return $this->container['adminStateUp'];
    }

    /**
    * Sets adminStateUp
    *
    * @param bool $adminStateUp 功能说明：资源的管理状态。只支持true。 取值范围：true、false 约束：只支持true
    *
    * @return $this
    */
    public function setAdminStateUp($adminStateUp)
    {
        $this->container['adminStateUp'] = $adminStateUp;
        return $this;
    }

    /**
    * Gets externalGatewayInfo
    *  externalGatewayInfo
    *
    * @return \HuaweiCloud\SDK\Vpc\V2\Model\ExternalGatewayInfo
    */
    public function getExternalGatewayInfo()
    {
        return $this->container['externalGatewayInfo'];
    }

    /**
    * Sets externalGatewayInfo
    *
    * @param \HuaweiCloud\SDK\Vpc\V2\Model\ExternalGatewayInfo $externalGatewayInfo externalGatewayInfo
    *
    * @return $this
    */
    public function setExternalGatewayInfo($externalGatewayInfo)
    {
        $this->container['externalGatewayInfo'] = $externalGatewayInfo;
        return $this;
    }

    /**
    * Gets id
    *  路由器ID
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
    * @param string $id 路由器ID
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
    *  功能说明：路由器的名称 取值范围：0-64个字符，仅支持数字、字母、中文、_(下划线)、-（中划线）、.（点）。 约束：如果name非空，则name不能重复。
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
    * @param string $name 功能说明：路由器的名称 取值范围：0-64个字符，仅支持数字、字母、中文、_(下划线)、-（中划线）、.（点）。 约束：如果name非空，则name不能重复。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets routes
    *  功能说明：路由信息，见Route对象
    *
    * @return \HuaweiCloud\SDK\Vpc\V2\Model\Route[]
    */
    public function getRoutes()
    {
        return $this->container['routes'];
    }

    /**
    * Sets routes
    *
    * @param \HuaweiCloud\SDK\Vpc\V2\Model\Route[] $routes 功能说明：路由信息，见Route对象
    *
    * @return $this
    */
    public function setRoutes($routes)
    {
        $this->container['routes'] = $routes;
        return $this;
    }

    /**
    * Gets status
    *  功能说明：路由器的状态 取值范围：ACTIVE， DOWN，ERROR
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 功能说明：路由器的状态 取值范围：ACTIVE， DOWN，ERROR
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets tenantId
    *  项目ID
    *
    * @return string
    */
    public function getTenantId()
    {
        return $this->container['tenantId'];
    }

    /**
    * Sets tenantId
    *
    * @param string $tenantId 项目ID
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID
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
    * @param string $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets createdAt
    *  功能说明：资源创建UTC时间 格式：yyyy-MM-ddTHH:mm:ss
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
    * @param \DateTime $createdAt 功能说明：资源创建UTC时间 格式：yyyy-MM-ddTHH:mm:ss
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
    *  功能说明：资源更新UTC时间 格式：yyyy-MM-ddTHH:mm:ss
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
    * @param \DateTime $updatedAt 功能说明：资源更新UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
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

