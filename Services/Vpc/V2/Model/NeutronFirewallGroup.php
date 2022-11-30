<?php

namespace HuaweiCloud\SDK\Vpc\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NeutronFirewallGroup implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NeutronFirewallGroup';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  功能说明：网络ACL组的ID
    * name  功能说明：网络ACL组名称 取值范围：0-255个字符
    * description  功能说明：网络ACL组描述 取值范围：0-255个字符
    * adminStateUp  网络ACL防火墙是否受管理员控制。
    * egressFirewallPolicyId  功能说明：出方向网络ACL策略ID
    * ingressFirewallPolicyId  功能说明：入方向网络ACL策略ID
    * ports  取值范围：网络ACL组绑定的端口列表
    * public  功能说明：是否支持跨租户共享 取值范围：true/false
    * status  功能说明：网络ACL组状态
    * tenantId  功能说明：网络ACL组所属项目ID
    * projectId  功能说明：网络ACL组所属项目ID
    * createdAt  功能说明：资源创建时间，UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    * updatedAt  功能说明：资源更新时间，UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'description' => 'string',
            'adminStateUp' => 'bool',
            'egressFirewallPolicyId' => 'string',
            'ingressFirewallPolicyId' => 'string',
            'ports' => 'string[]',
            'public' => 'bool',
            'status' => 'string',
            'tenantId' => 'string',
            'projectId' => 'string',
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  功能说明：网络ACL组的ID
    * name  功能说明：网络ACL组名称 取值范围：0-255个字符
    * description  功能说明：网络ACL组描述 取值范围：0-255个字符
    * adminStateUp  网络ACL防火墙是否受管理员控制。
    * egressFirewallPolicyId  功能说明：出方向网络ACL策略ID
    * ingressFirewallPolicyId  功能说明：入方向网络ACL策略ID
    * ports  取值范围：网络ACL组绑定的端口列表
    * public  功能说明：是否支持跨租户共享 取值范围：true/false
    * status  功能说明：网络ACL组状态
    * tenantId  功能说明：网络ACL组所属项目ID
    * projectId  功能说明：网络ACL组所属项目ID
    * createdAt  功能说明：资源创建时间，UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    * updatedAt  功能说明：资源更新时间，UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'adminStateUp' => null,
        'egressFirewallPolicyId' => null,
        'ingressFirewallPolicyId' => null,
        'ports' => null,
        'public' => null,
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
    * id  功能说明：网络ACL组的ID
    * name  功能说明：网络ACL组名称 取值范围：0-255个字符
    * description  功能说明：网络ACL组描述 取值范围：0-255个字符
    * adminStateUp  网络ACL防火墙是否受管理员控制。
    * egressFirewallPolicyId  功能说明：出方向网络ACL策略ID
    * ingressFirewallPolicyId  功能说明：入方向网络ACL策略ID
    * ports  取值范围：网络ACL组绑定的端口列表
    * public  功能说明：是否支持跨租户共享 取值范围：true/false
    * status  功能说明：网络ACL组状态
    * tenantId  功能说明：网络ACL组所属项目ID
    * projectId  功能说明：网络ACL组所属项目ID
    * createdAt  功能说明：资源创建时间，UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    * updatedAt  功能说明：资源更新时间，UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'adminStateUp' => 'admin_state_up',
            'egressFirewallPolicyId' => 'egress_firewall_policy_id',
            'ingressFirewallPolicyId' => 'ingress_firewall_policy_id',
            'ports' => 'ports',
            'public' => 'public',
            'status' => 'status',
            'tenantId' => 'tenant_id',
            'projectId' => 'project_id',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  功能说明：网络ACL组的ID
    * name  功能说明：网络ACL组名称 取值范围：0-255个字符
    * description  功能说明：网络ACL组描述 取值范围：0-255个字符
    * adminStateUp  网络ACL防火墙是否受管理员控制。
    * egressFirewallPolicyId  功能说明：出方向网络ACL策略ID
    * ingressFirewallPolicyId  功能说明：入方向网络ACL策略ID
    * ports  取值范围：网络ACL组绑定的端口列表
    * public  功能说明：是否支持跨租户共享 取值范围：true/false
    * status  功能说明：网络ACL组状态
    * tenantId  功能说明：网络ACL组所属项目ID
    * projectId  功能说明：网络ACL组所属项目ID
    * createdAt  功能说明：资源创建时间，UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    * updatedAt  功能说明：资源更新时间，UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'adminStateUp' => 'setAdminStateUp',
            'egressFirewallPolicyId' => 'setEgressFirewallPolicyId',
            'ingressFirewallPolicyId' => 'setIngressFirewallPolicyId',
            'ports' => 'setPorts',
            'public' => 'setPublic',
            'status' => 'setStatus',
            'tenantId' => 'setTenantId',
            'projectId' => 'setProjectId',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  功能说明：网络ACL组的ID
    * name  功能说明：网络ACL组名称 取值范围：0-255个字符
    * description  功能说明：网络ACL组描述 取值范围：0-255个字符
    * adminStateUp  网络ACL防火墙是否受管理员控制。
    * egressFirewallPolicyId  功能说明：出方向网络ACL策略ID
    * ingressFirewallPolicyId  功能说明：入方向网络ACL策略ID
    * ports  取值范围：网络ACL组绑定的端口列表
    * public  功能说明：是否支持跨租户共享 取值范围：true/false
    * status  功能说明：网络ACL组状态
    * tenantId  功能说明：网络ACL组所属项目ID
    * projectId  功能说明：网络ACL组所属项目ID
    * createdAt  功能说明：资源创建时间，UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    * updatedAt  功能说明：资源更新时间，UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'adminStateUp' => 'getAdminStateUp',
            'egressFirewallPolicyId' => 'getEgressFirewallPolicyId',
            'ingressFirewallPolicyId' => 'getIngressFirewallPolicyId',
            'ports' => 'getPorts',
            'public' => 'getPublic',
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['egressFirewallPolicyId'] = isset($data['egressFirewallPolicyId']) ? $data['egressFirewallPolicyId'] : null;
        $this->container['ingressFirewallPolicyId'] = isset($data['ingressFirewallPolicyId']) ? $data['ingressFirewallPolicyId'] : null;
        $this->container['ports'] = isset($data['ports']) ? $data['ports'] : null;
        $this->container['public'] = isset($data['public']) ? $data['public'] : null;
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
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
            if (!preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
            if ((mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['adminStateUp'] === null) {
            $invalidProperties[] = "'adminStateUp' can't be null";
        }
        if ($this->container['egressFirewallPolicyId'] === null) {
            $invalidProperties[] = "'egressFirewallPolicyId' can't be null";
        }
            if (!preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['egressFirewallPolicyId'])) {
                $invalidProperties[] = "invalid value for 'egressFirewallPolicyId', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
            }
        if ($this->container['ingressFirewallPolicyId'] === null) {
            $invalidProperties[] = "'ingressFirewallPolicyId' can't be null";
        }
            if (!preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['ingressFirewallPolicyId'])) {
                $invalidProperties[] = "invalid value for 'ingressFirewallPolicyId', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
            }
        if ($this->container['ports'] === null) {
            $invalidProperties[] = "'ports' can't be null";
        }
        if ($this->container['public'] === null) {
            $invalidProperties[] = "'public' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['tenantId'] === null) {
            $invalidProperties[] = "'tenantId' can't be null";
        }
            if (!preg_match("/[0-9a-fA-F]{32}/", $this->container['tenantId'])) {
                $invalidProperties[] = "invalid value for 'tenantId', must be conform to the pattern /[0-9a-fA-F]{32}/.";
            }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if (!preg_match("/[0-9a-fA-F]{32}/", $this->container['projectId'])) {
                $invalidProperties[] = "invalid value for 'projectId', must be conform to the pattern /[0-9a-fA-F]{32}/.";
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
    * Gets id
    *  功能说明：网络ACL组的ID
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
    * @param string $id 功能说明：网络ACL组的ID
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
    *  功能说明：网络ACL组名称 取值范围：0-255个字符
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
    * @param string $name 功能说明：网络ACL组名称 取值范围：0-255个字符
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
    *  功能说明：网络ACL组描述 取值范围：0-255个字符
    *
    * @return string
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string $description 功能说明：网络ACL组描述 取值范围：0-255个字符
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets adminStateUp
    *  网络ACL防火墙是否受管理员控制。
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
    * @param bool $adminStateUp 网络ACL防火墙是否受管理员控制。
    *
    * @return $this
    */
    public function setAdminStateUp($adminStateUp)
    {
        $this->container['adminStateUp'] = $adminStateUp;
        return $this;
    }

    /**
    * Gets egressFirewallPolicyId
    *  功能说明：出方向网络ACL策略ID
    *
    * @return string
    */
    public function getEgressFirewallPolicyId()
    {
        return $this->container['egressFirewallPolicyId'];
    }

    /**
    * Sets egressFirewallPolicyId
    *
    * @param string $egressFirewallPolicyId 功能说明：出方向网络ACL策略ID
    *
    * @return $this
    */
    public function setEgressFirewallPolicyId($egressFirewallPolicyId)
    {
        $this->container['egressFirewallPolicyId'] = $egressFirewallPolicyId;
        return $this;
    }

    /**
    * Gets ingressFirewallPolicyId
    *  功能说明：入方向网络ACL策略ID
    *
    * @return string
    */
    public function getIngressFirewallPolicyId()
    {
        return $this->container['ingressFirewallPolicyId'];
    }

    /**
    * Sets ingressFirewallPolicyId
    *
    * @param string $ingressFirewallPolicyId 功能说明：入方向网络ACL策略ID
    *
    * @return $this
    */
    public function setIngressFirewallPolicyId($ingressFirewallPolicyId)
    {
        $this->container['ingressFirewallPolicyId'] = $ingressFirewallPolicyId;
        return $this;
    }

    /**
    * Gets ports
    *  取值范围：网络ACL组绑定的端口列表
    *
    * @return string[]
    */
    public function getPorts()
    {
        return $this->container['ports'];
    }

    /**
    * Sets ports
    *
    * @param string[] $ports 取值范围：网络ACL组绑定的端口列表
    *
    * @return $this
    */
    public function setPorts($ports)
    {
        $this->container['ports'] = $ports;
        return $this;
    }

    /**
    * Gets public
    *  功能说明：是否支持跨租户共享 取值范围：true/false
    *
    * @return bool
    */
    public function getPublic()
    {
        return $this->container['public'];
    }

    /**
    * Sets public
    *
    * @param bool $public 功能说明：是否支持跨租户共享 取值范围：true/false
    *
    * @return $this
    */
    public function setPublic($public)
    {
        $this->container['public'] = $public;
        return $this;
    }

    /**
    * Gets status
    *  功能说明：网络ACL组状态
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
    * @param string $status 功能说明：网络ACL组状态
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
    *  功能说明：网络ACL组所属项目ID
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
    * @param string $tenantId 功能说明：网络ACL组所属项目ID
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
    *  功能说明：网络ACL组所属项目ID
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
    * @param string $projectId 功能说明：网络ACL组所属项目ID
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
    *  功能说明：资源创建时间，UTC时间 格式：yyyy-MM-ddTHH:mm:ss
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
    * @param \DateTime $createdAt 功能说明：资源创建时间，UTC时间 格式：yyyy-MM-ddTHH:mm:ss
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
    *  功能说明：资源更新时间，UTC时间 格式：yyyy-MM-ddTHH:mm:ss
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
    * @param \DateTime $updatedAt 功能说明：资源更新时间，UTC时间 格式：yyyy-MM-ddTHH:mm:ss
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

