<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CustomerInstanceVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CustomerInstanceVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**：  实例ID。  **参数范围**：  不涉及。
    * status  **参数解释**：  实例状态。  **参数范围**：  不涉及。
    * name  **参数解释**：  实例名称。  **参数范围**：  不涉及。
    * updated  **参数解释**：  更新时间。  **参数范围**：  不涉及。
    * description  **参数解释**：  描述。  **参数范围**：  不涉及。
    * availableZone  **参数解释**：  可用区。  **参数范围**：  不涉及。
    * vpcId  **参数解释**：  虚拟私有云ID。  **参数范围**：  不涉及。
    * subnetId  **参数解释**：  子网ID。  **参数范围**：  不涉及。
    * securityGroupId  **参数解释**：  安全组ID。  **参数范围**：  不涉及。
    * nodeCount  **参数解释**：  节点数量。  **参数范围**：  不涉及。
    * accessIp  **参数解释**：  访问IP。  **参数范围**：  不涉及。
    * accessPort  **参数解释**：  访问端口。  **参数范围**：  不涉及。
    * coreCount  **参数解释**：  核数。  **参数范围**：  不涉及。
    * ramCapacity  **参数解释**：  内存大小。  **参数范围**：  不涉及。
    * errorMsg  **参数解释**：  错误信息。  **参数范围**：  不涉及。
    * nodeStatus  **参数解释**：  节点状态。  **参数范围**：  不涉及。
    * maintenanceTime  **参数解释**：  维护时间。  **参数范围**：  不涉及。
    * enterpriseProjectId  **参数解释**：  企业项目ID。  **参数范围**：  不涉及。
    * projectId  **参数解释**：  项目ID。  **参数范围**：  不涉及。
    * engineVersion  **参数解释**：  引擎版本。  **参数范围**：  不涉及。
    * orderId  **参数解释**：  订单ID。  **参数范围**：  不涉及。
    * adminUserName  **参数解释**：  管理员账号。  **参数范围**：  不涉及。
    * enableSsl  **参数解释**：  是否支持ssl。  **参数范围**：  不涉及。
    * flavorRef  **参数解释**：  规格码。  **参数范围**：  不涉及。
    * tags  **参数解释**：  标签的集合。  **参数范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'status' => 'string',
            'name' => 'string',
            'updated' => 'string',
            'description' => 'string',
            'availableZone' => 'string',
            'vpcId' => 'string',
            'subnetId' => 'string',
            'securityGroupId' => 'string',
            'nodeCount' => 'int',
            'accessIp' => 'string',
            'accessPort' => 'string',
            'coreCount' => 'string',
            'ramCapacity' => 'string',
            'errorMsg' => 'string',
            'nodeStatus' => 'string',
            'maintenanceTime' => 'string',
            'enterpriseProjectId' => 'string',
            'projectId' => 'string',
            'engineVersion' => 'string',
            'orderId' => 'string',
            'adminUserName' => 'string',
            'enableSsl' => 'bool',
            'flavorRef' => 'string',
            'tags' => '\HuaweiCloud\SDK\Ddm\V1\Model\Tags[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**：  实例ID。  **参数范围**：  不涉及。
    * status  **参数解释**：  实例状态。  **参数范围**：  不涉及。
    * name  **参数解释**：  实例名称。  **参数范围**：  不涉及。
    * updated  **参数解释**：  更新时间。  **参数范围**：  不涉及。
    * description  **参数解释**：  描述。  **参数范围**：  不涉及。
    * availableZone  **参数解释**：  可用区。  **参数范围**：  不涉及。
    * vpcId  **参数解释**：  虚拟私有云ID。  **参数范围**：  不涉及。
    * subnetId  **参数解释**：  子网ID。  **参数范围**：  不涉及。
    * securityGroupId  **参数解释**：  安全组ID。  **参数范围**：  不涉及。
    * nodeCount  **参数解释**：  节点数量。  **参数范围**：  不涉及。
    * accessIp  **参数解释**：  访问IP。  **参数范围**：  不涉及。
    * accessPort  **参数解释**：  访问端口。  **参数范围**：  不涉及。
    * coreCount  **参数解释**：  核数。  **参数范围**：  不涉及。
    * ramCapacity  **参数解释**：  内存大小。  **参数范围**：  不涉及。
    * errorMsg  **参数解释**：  错误信息。  **参数范围**：  不涉及。
    * nodeStatus  **参数解释**：  节点状态。  **参数范围**：  不涉及。
    * maintenanceTime  **参数解释**：  维护时间。  **参数范围**：  不涉及。
    * enterpriseProjectId  **参数解释**：  企业项目ID。  **参数范围**：  不涉及。
    * projectId  **参数解释**：  项目ID。  **参数范围**：  不涉及。
    * engineVersion  **参数解释**：  引擎版本。  **参数范围**：  不涉及。
    * orderId  **参数解释**：  订单ID。  **参数范围**：  不涉及。
    * adminUserName  **参数解释**：  管理员账号。  **参数范围**：  不涉及。
    * enableSsl  **参数解释**：  是否支持ssl。  **参数范围**：  不涉及。
    * flavorRef  **参数解释**：  规格码。  **参数范围**：  不涉及。
    * tags  **参数解释**：  标签的集合。  **参数范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'status' => null,
        'name' => null,
        'updated' => null,
        'description' => null,
        'availableZone' => null,
        'vpcId' => null,
        'subnetId' => null,
        'securityGroupId' => null,
        'nodeCount' => null,
        'accessIp' => null,
        'accessPort' => null,
        'coreCount' => null,
        'ramCapacity' => null,
        'errorMsg' => null,
        'nodeStatus' => null,
        'maintenanceTime' => null,
        'enterpriseProjectId' => null,
        'projectId' => null,
        'engineVersion' => null,
        'orderId' => null,
        'adminUserName' => null,
        'enableSsl' => null,
        'flavorRef' => null,
        'tags' => null
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
    * id  **参数解释**：  实例ID。  **参数范围**：  不涉及。
    * status  **参数解释**：  实例状态。  **参数范围**：  不涉及。
    * name  **参数解释**：  实例名称。  **参数范围**：  不涉及。
    * updated  **参数解释**：  更新时间。  **参数范围**：  不涉及。
    * description  **参数解释**：  描述。  **参数范围**：  不涉及。
    * availableZone  **参数解释**：  可用区。  **参数范围**：  不涉及。
    * vpcId  **参数解释**：  虚拟私有云ID。  **参数范围**：  不涉及。
    * subnetId  **参数解释**：  子网ID。  **参数范围**：  不涉及。
    * securityGroupId  **参数解释**：  安全组ID。  **参数范围**：  不涉及。
    * nodeCount  **参数解释**：  节点数量。  **参数范围**：  不涉及。
    * accessIp  **参数解释**：  访问IP。  **参数范围**：  不涉及。
    * accessPort  **参数解释**：  访问端口。  **参数范围**：  不涉及。
    * coreCount  **参数解释**：  核数。  **参数范围**：  不涉及。
    * ramCapacity  **参数解释**：  内存大小。  **参数范围**：  不涉及。
    * errorMsg  **参数解释**：  错误信息。  **参数范围**：  不涉及。
    * nodeStatus  **参数解释**：  节点状态。  **参数范围**：  不涉及。
    * maintenanceTime  **参数解释**：  维护时间。  **参数范围**：  不涉及。
    * enterpriseProjectId  **参数解释**：  企业项目ID。  **参数范围**：  不涉及。
    * projectId  **参数解释**：  项目ID。  **参数范围**：  不涉及。
    * engineVersion  **参数解释**：  引擎版本。  **参数范围**：  不涉及。
    * orderId  **参数解释**：  订单ID。  **参数范围**：  不涉及。
    * adminUserName  **参数解释**：  管理员账号。  **参数范围**：  不涉及。
    * enableSsl  **参数解释**：  是否支持ssl。  **参数范围**：  不涉及。
    * flavorRef  **参数解释**：  规格码。  **参数范围**：  不涉及。
    * tags  **参数解释**：  标签的集合。  **参数范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'status' => 'status',
            'name' => 'name',
            'updated' => 'updated',
            'description' => 'description',
            'availableZone' => 'available_zone',
            'vpcId' => 'vpc_id',
            'subnetId' => 'subnet_id',
            'securityGroupId' => 'security_group_id',
            'nodeCount' => 'node_count',
            'accessIp' => 'access_ip',
            'accessPort' => 'access_port',
            'coreCount' => 'core_count',
            'ramCapacity' => 'ram_capacity',
            'errorMsg' => 'error_msg',
            'nodeStatus' => 'node_status',
            'maintenanceTime' => 'maintenance_time',
            'enterpriseProjectId' => 'enterprise_project_id',
            'projectId' => 'project_id',
            'engineVersion' => 'engine_version',
            'orderId' => 'order_id',
            'adminUserName' => 'admin_user_name',
            'enableSsl' => 'enable_ssl',
            'flavorRef' => 'flavor_ref',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**：  实例ID。  **参数范围**：  不涉及。
    * status  **参数解释**：  实例状态。  **参数范围**：  不涉及。
    * name  **参数解释**：  实例名称。  **参数范围**：  不涉及。
    * updated  **参数解释**：  更新时间。  **参数范围**：  不涉及。
    * description  **参数解释**：  描述。  **参数范围**：  不涉及。
    * availableZone  **参数解释**：  可用区。  **参数范围**：  不涉及。
    * vpcId  **参数解释**：  虚拟私有云ID。  **参数范围**：  不涉及。
    * subnetId  **参数解释**：  子网ID。  **参数范围**：  不涉及。
    * securityGroupId  **参数解释**：  安全组ID。  **参数范围**：  不涉及。
    * nodeCount  **参数解释**：  节点数量。  **参数范围**：  不涉及。
    * accessIp  **参数解释**：  访问IP。  **参数范围**：  不涉及。
    * accessPort  **参数解释**：  访问端口。  **参数范围**：  不涉及。
    * coreCount  **参数解释**：  核数。  **参数范围**：  不涉及。
    * ramCapacity  **参数解释**：  内存大小。  **参数范围**：  不涉及。
    * errorMsg  **参数解释**：  错误信息。  **参数范围**：  不涉及。
    * nodeStatus  **参数解释**：  节点状态。  **参数范围**：  不涉及。
    * maintenanceTime  **参数解释**：  维护时间。  **参数范围**：  不涉及。
    * enterpriseProjectId  **参数解释**：  企业项目ID。  **参数范围**：  不涉及。
    * projectId  **参数解释**：  项目ID。  **参数范围**：  不涉及。
    * engineVersion  **参数解释**：  引擎版本。  **参数范围**：  不涉及。
    * orderId  **参数解释**：  订单ID。  **参数范围**：  不涉及。
    * adminUserName  **参数解释**：  管理员账号。  **参数范围**：  不涉及。
    * enableSsl  **参数解释**：  是否支持ssl。  **参数范围**：  不涉及。
    * flavorRef  **参数解释**：  规格码。  **参数范围**：  不涉及。
    * tags  **参数解释**：  标签的集合。  **参数范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'status' => 'setStatus',
            'name' => 'setName',
            'updated' => 'setUpdated',
            'description' => 'setDescription',
            'availableZone' => 'setAvailableZone',
            'vpcId' => 'setVpcId',
            'subnetId' => 'setSubnetId',
            'securityGroupId' => 'setSecurityGroupId',
            'nodeCount' => 'setNodeCount',
            'accessIp' => 'setAccessIp',
            'accessPort' => 'setAccessPort',
            'coreCount' => 'setCoreCount',
            'ramCapacity' => 'setRamCapacity',
            'errorMsg' => 'setErrorMsg',
            'nodeStatus' => 'setNodeStatus',
            'maintenanceTime' => 'setMaintenanceTime',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'projectId' => 'setProjectId',
            'engineVersion' => 'setEngineVersion',
            'orderId' => 'setOrderId',
            'adminUserName' => 'setAdminUserName',
            'enableSsl' => 'setEnableSsl',
            'flavorRef' => 'setFlavorRef',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**：  实例ID。  **参数范围**：  不涉及。
    * status  **参数解释**：  实例状态。  **参数范围**：  不涉及。
    * name  **参数解释**：  实例名称。  **参数范围**：  不涉及。
    * updated  **参数解释**：  更新时间。  **参数范围**：  不涉及。
    * description  **参数解释**：  描述。  **参数范围**：  不涉及。
    * availableZone  **参数解释**：  可用区。  **参数范围**：  不涉及。
    * vpcId  **参数解释**：  虚拟私有云ID。  **参数范围**：  不涉及。
    * subnetId  **参数解释**：  子网ID。  **参数范围**：  不涉及。
    * securityGroupId  **参数解释**：  安全组ID。  **参数范围**：  不涉及。
    * nodeCount  **参数解释**：  节点数量。  **参数范围**：  不涉及。
    * accessIp  **参数解释**：  访问IP。  **参数范围**：  不涉及。
    * accessPort  **参数解释**：  访问端口。  **参数范围**：  不涉及。
    * coreCount  **参数解释**：  核数。  **参数范围**：  不涉及。
    * ramCapacity  **参数解释**：  内存大小。  **参数范围**：  不涉及。
    * errorMsg  **参数解释**：  错误信息。  **参数范围**：  不涉及。
    * nodeStatus  **参数解释**：  节点状态。  **参数范围**：  不涉及。
    * maintenanceTime  **参数解释**：  维护时间。  **参数范围**：  不涉及。
    * enterpriseProjectId  **参数解释**：  企业项目ID。  **参数范围**：  不涉及。
    * projectId  **参数解释**：  项目ID。  **参数范围**：  不涉及。
    * engineVersion  **参数解释**：  引擎版本。  **参数范围**：  不涉及。
    * orderId  **参数解释**：  订单ID。  **参数范围**：  不涉及。
    * adminUserName  **参数解释**：  管理员账号。  **参数范围**：  不涉及。
    * enableSsl  **参数解释**：  是否支持ssl。  **参数范围**：  不涉及。
    * flavorRef  **参数解释**：  规格码。  **参数范围**：  不涉及。
    * tags  **参数解释**：  标签的集合。  **参数范围**：  不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'status' => 'getStatus',
            'name' => 'getName',
            'updated' => 'getUpdated',
            'description' => 'getDescription',
            'availableZone' => 'getAvailableZone',
            'vpcId' => 'getVpcId',
            'subnetId' => 'getSubnetId',
            'securityGroupId' => 'getSecurityGroupId',
            'nodeCount' => 'getNodeCount',
            'accessIp' => 'getAccessIp',
            'accessPort' => 'getAccessPort',
            'coreCount' => 'getCoreCount',
            'ramCapacity' => 'getRamCapacity',
            'errorMsg' => 'getErrorMsg',
            'nodeStatus' => 'getNodeStatus',
            'maintenanceTime' => 'getMaintenanceTime',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'projectId' => 'getProjectId',
            'engineVersion' => 'getEngineVersion',
            'orderId' => 'getOrderId',
            'adminUserName' => 'getAdminUserName',
            'enableSsl' => 'getEnableSsl',
            'flavorRef' => 'getFlavorRef',
            'tags' => 'getTags'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['availableZone'] = isset($data['availableZone']) ? $data['availableZone'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['securityGroupId'] = isset($data['securityGroupId']) ? $data['securityGroupId'] : null;
        $this->container['nodeCount'] = isset($data['nodeCount']) ? $data['nodeCount'] : null;
        $this->container['accessIp'] = isset($data['accessIp']) ? $data['accessIp'] : null;
        $this->container['accessPort'] = isset($data['accessPort']) ? $data['accessPort'] : null;
        $this->container['coreCount'] = isset($data['coreCount']) ? $data['coreCount'] : null;
        $this->container['ramCapacity'] = isset($data['ramCapacity']) ? $data['ramCapacity'] : null;
        $this->container['errorMsg'] = isset($data['errorMsg']) ? $data['errorMsg'] : null;
        $this->container['nodeStatus'] = isset($data['nodeStatus']) ? $data['nodeStatus'] : null;
        $this->container['maintenanceTime'] = isset($data['maintenanceTime']) ? $data['maintenanceTime'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['engineVersion'] = isset($data['engineVersion']) ? $data['engineVersion'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['adminUserName'] = isset($data['adminUserName']) ? $data['adminUserName'] : null;
        $this->container['enableSsl'] = isset($data['enableSsl']) ? $data['enableSsl'] : null;
        $this->container['flavorRef'] = isset($data['flavorRef']) ? $data['flavorRef'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updated']) && (mb_strlen($this->container['updated']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'updated', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['updated']) && (mb_strlen($this->container['updated']) < 0)) {
                $invalidProperties[] = "invalid value for 'updated', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['availableZone']) && (mb_strlen($this->container['availableZone']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'availableZone', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['availableZone']) && (mb_strlen($this->container['availableZone']) < 0)) {
                $invalidProperties[] = "invalid value for 'availableZone', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vpcId']) && (mb_strlen($this->container['vpcId']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'vpcId', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['vpcId']) && (mb_strlen($this->container['vpcId']) < 0)) {
                $invalidProperties[] = "invalid value for 'vpcId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['subnetId']) && (mb_strlen($this->container['subnetId']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'subnetId', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['subnetId']) && (mb_strlen($this->container['subnetId']) < 0)) {
                $invalidProperties[] = "invalid value for 'subnetId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['securityGroupId']) && (mb_strlen($this->container['securityGroupId']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'securityGroupId', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['securityGroupId']) && (mb_strlen($this->container['securityGroupId']) < 0)) {
                $invalidProperties[] = "invalid value for 'securityGroupId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['nodeCount']) && ($this->container['nodeCount'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'nodeCount', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['nodeCount']) && ($this->container['nodeCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'nodeCount', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['accessIp']) && (mb_strlen($this->container['accessIp']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'accessIp', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['accessIp']) && (mb_strlen($this->container['accessIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'accessIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['accessPort']) && (mb_strlen($this->container['accessPort']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'accessPort', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['accessPort']) && (mb_strlen($this->container['accessPort']) < 0)) {
                $invalidProperties[] = "invalid value for 'accessPort', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['coreCount']) && (mb_strlen($this->container['coreCount']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'coreCount', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['coreCount']) && (mb_strlen($this->container['coreCount']) < 0)) {
                $invalidProperties[] = "invalid value for 'coreCount', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ramCapacity']) && (mb_strlen($this->container['ramCapacity']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'ramCapacity', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['ramCapacity']) && (mb_strlen($this->container['ramCapacity']) < 0)) {
                $invalidProperties[] = "invalid value for 'ramCapacity', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['errorMsg']) && (mb_strlen($this->container['errorMsg']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'errorMsg', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['errorMsg']) && (mb_strlen($this->container['errorMsg']) < 0)) {
                $invalidProperties[] = "invalid value for 'errorMsg', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['nodeStatus']) && (mb_strlen($this->container['nodeStatus']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'nodeStatus', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['nodeStatus']) && (mb_strlen($this->container['nodeStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'nodeStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['maintenanceTime']) && (mb_strlen($this->container['maintenanceTime']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'maintenanceTime', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['maintenanceTime']) && (mb_strlen($this->container['maintenanceTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'maintenanceTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['engineVersion']) && (mb_strlen($this->container['engineVersion']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'engineVersion', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['engineVersion']) && (mb_strlen($this->container['engineVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'engineVersion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['orderId']) && (mb_strlen($this->container['orderId']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'orderId', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['orderId']) && (mb_strlen($this->container['orderId']) < 0)) {
                $invalidProperties[] = "invalid value for 'orderId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['adminUserName']) && (mb_strlen($this->container['adminUserName']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'adminUserName', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['adminUserName']) && (mb_strlen($this->container['adminUserName']) < 0)) {
                $invalidProperties[] = "invalid value for 'adminUserName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['flavorRef']) && (mb_strlen($this->container['flavorRef']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'flavorRef', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['flavorRef']) && (mb_strlen($this->container['flavorRef']) < 0)) {
                $invalidProperties[] = "invalid value for 'flavorRef', the character length must be bigger than or equal to 0.";
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
    *  **参数解释**：  实例ID。  **参数范围**：  不涉及。
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
    * @param string|null $id **参数解释**：  实例ID。  **参数范围**：  不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**：  实例状态。  **参数范围**：  不涉及。
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
    * @param string|null $status **参数解释**：  实例状态。  **参数范围**：  不涉及。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**：  实例名称。  **参数范围**：  不涉及。
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
    * @param string|null $name **参数解释**：  实例名称。  **参数范围**：  不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets updated
    *  **参数解释**：  更新时间。  **参数范围**：  不涉及。
    *
    * @return string|null
    */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
    * Sets updated
    *
    * @param string|null $updated **参数解释**：  更新时间。  **参数范围**：  不涉及。
    *
    * @return $this
    */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**：  描述。  **参数范围**：  不涉及。
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
    * @param string|null $description **参数解释**：  描述。  **参数范围**：  不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets availableZone
    *  **参数解释**：  可用区。  **参数范围**：  不涉及。
    *
    * @return string|null
    */
    public function getAvailableZone()
    {
        return $this->container['availableZone'];
    }

    /**
    * Sets availableZone
    *
    * @param string|null $availableZone **参数解释**：  可用区。  **参数范围**：  不涉及。
    *
    * @return $this
    */
    public function setAvailableZone($availableZone)
    {
        $this->container['availableZone'] = $availableZone;
        return $this;
    }

    /**
    * Gets vpcId
    *  **参数解释**：  虚拟私有云ID。  **参数范围**：  不涉及。
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
    * @param string|null $vpcId **参数解释**：  虚拟私有云ID。  **参数范围**：  不涉及。
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
    *  **参数解释**：  子网ID。  **参数范围**：  不涉及。
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
    * @param string|null $subnetId **参数解释**：  子网ID。  **参数范围**：  不涉及。
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
        return $this;
    }

    /**
    * Gets securityGroupId
    *  **参数解释**：  安全组ID。  **参数范围**：  不涉及。
    *
    * @return string|null
    */
    public function getSecurityGroupId()
    {
        return $this->container['securityGroupId'];
    }

    /**
    * Sets securityGroupId
    *
    * @param string|null $securityGroupId **参数解释**：  安全组ID。  **参数范围**：  不涉及。
    *
    * @return $this
    */
    public function setSecurityGroupId($securityGroupId)
    {
        $this->container['securityGroupId'] = $securityGroupId;
        return $this;
    }

    /**
    * Gets nodeCount
    *  **参数解释**：  节点数量。  **参数范围**：  不涉及。
    *
    * @return int|null
    */
    public function getNodeCount()
    {
        return $this->container['nodeCount'];
    }

    /**
    * Sets nodeCount
    *
    * @param int|null $nodeCount **参数解释**：  节点数量。  **参数范围**：  不涉及。
    *
    * @return $this
    */
    public function setNodeCount($nodeCount)
    {
        $this->container['nodeCount'] = $nodeCount;
        return $this;
    }

    /**
    * Gets accessIp
    *  **参数解释**：  访问IP。  **参数范围**：  不涉及。
    *
    * @return string|null
    */
    public function getAccessIp()
    {
        return $this->container['accessIp'];
    }

    /**
    * Sets accessIp
    *
    * @param string|null $accessIp **参数解释**：  访问IP。  **参数范围**：  不涉及。
    *
    * @return $this
    */
    public function setAccessIp($accessIp)
    {
        $this->container['accessIp'] = $accessIp;
        return $this;
    }

    /**
    * Gets accessPort
    *  **参数解释**：  访问端口。  **参数范围**：  不涉及。
    *
    * @return string|null
    */
    public function getAccessPort()
    {
        return $this->container['accessPort'];
    }

    /**
    * Sets accessPort
    *
    * @param string|null $accessPort **参数解释**：  访问端口。  **参数范围**：  不涉及。
    *
    * @return $this
    */
    public function setAccessPort($accessPort)
    {
        $this->container['accessPort'] = $accessPort;
        return $this;
    }

    /**
    * Gets coreCount
    *  **参数解释**：  核数。  **参数范围**：  不涉及。
    *
    * @return string|null
    */
    public function getCoreCount()
    {
        return $this->container['coreCount'];
    }

    /**
    * Sets coreCount
    *
    * @param string|null $coreCount **参数解释**：  核数。  **参数范围**：  不涉及。
    *
    * @return $this
    */
    public function setCoreCount($coreCount)
    {
        $this->container['coreCount'] = $coreCount;
        return $this;
    }

    /**
    * Gets ramCapacity
    *  **参数解释**：  内存大小。  **参数范围**：  不涉及。
    *
    * @return string|null
    */
    public function getRamCapacity()
    {
        return $this->container['ramCapacity'];
    }

    /**
    * Sets ramCapacity
    *
    * @param string|null $ramCapacity **参数解释**：  内存大小。  **参数范围**：  不涉及。
    *
    * @return $this
    */
    public function setRamCapacity($ramCapacity)
    {
        $this->container['ramCapacity'] = $ramCapacity;
        return $this;
    }

    /**
    * Gets errorMsg
    *  **参数解释**：  错误信息。  **参数范围**：  不涉及。
    *
    * @return string|null
    */
    public function getErrorMsg()
    {
        return $this->container['errorMsg'];
    }

    /**
    * Sets errorMsg
    *
    * @param string|null $errorMsg **参数解释**：  错误信息。  **参数范围**：  不涉及。
    *
    * @return $this
    */
    public function setErrorMsg($errorMsg)
    {
        $this->container['errorMsg'] = $errorMsg;
        return $this;
    }

    /**
    * Gets nodeStatus
    *  **参数解释**：  节点状态。  **参数范围**：  不涉及。
    *
    * @return string|null
    */
    public function getNodeStatus()
    {
        return $this->container['nodeStatus'];
    }

    /**
    * Sets nodeStatus
    *
    * @param string|null $nodeStatus **参数解释**：  节点状态。  **参数范围**：  不涉及。
    *
    * @return $this
    */
    public function setNodeStatus($nodeStatus)
    {
        $this->container['nodeStatus'] = $nodeStatus;
        return $this;
    }

    /**
    * Gets maintenanceTime
    *  **参数解释**：  维护时间。  **参数范围**：  不涉及。
    *
    * @return string|null
    */
    public function getMaintenanceTime()
    {
        return $this->container['maintenanceTime'];
    }

    /**
    * Sets maintenanceTime
    *
    * @param string|null $maintenanceTime **参数解释**：  维护时间。  **参数范围**：  不涉及。
    *
    * @return $this
    */
    public function setMaintenanceTime($maintenanceTime)
    {
        $this->container['maintenanceTime'] = $maintenanceTime;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  **参数解释**：  企业项目ID。  **参数范围**：  不涉及。
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId **参数解释**：  企业项目ID。  **参数范围**：  不涉及。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets projectId
    *  **参数解释**：  项目ID。  **参数范围**：  不涉及。
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
    * @param string|null $projectId **参数解释**：  项目ID。  **参数范围**：  不涉及。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets engineVersion
    *  **参数解释**：  引擎版本。  **参数范围**：  不涉及。
    *
    * @return string|null
    */
    public function getEngineVersion()
    {
        return $this->container['engineVersion'];
    }

    /**
    * Sets engineVersion
    *
    * @param string|null $engineVersion **参数解释**：  引擎版本。  **参数范围**：  不涉及。
    *
    * @return $this
    */
    public function setEngineVersion($engineVersion)
    {
        $this->container['engineVersion'] = $engineVersion;
        return $this;
    }

    /**
    * Gets orderId
    *  **参数解释**：  订单ID。  **参数范围**：  不涉及。
    *
    * @return string|null
    */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
    * Sets orderId
    *
    * @param string|null $orderId **参数解释**：  订单ID。  **参数范围**：  不涉及。
    *
    * @return $this
    */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;
        return $this;
    }

    /**
    * Gets adminUserName
    *  **参数解释**：  管理员账号。  **参数范围**：  不涉及。
    *
    * @return string|null
    */
    public function getAdminUserName()
    {
        return $this->container['adminUserName'];
    }

    /**
    * Sets adminUserName
    *
    * @param string|null $adminUserName **参数解释**：  管理员账号。  **参数范围**：  不涉及。
    *
    * @return $this
    */
    public function setAdminUserName($adminUserName)
    {
        $this->container['adminUserName'] = $adminUserName;
        return $this;
    }

    /**
    * Gets enableSsl
    *  **参数解释**：  是否支持ssl。  **参数范围**：  不涉及。
    *
    * @return bool|null
    */
    public function getEnableSsl()
    {
        return $this->container['enableSsl'];
    }

    /**
    * Sets enableSsl
    *
    * @param bool|null $enableSsl **参数解释**：  是否支持ssl。  **参数范围**：  不涉及。
    *
    * @return $this
    */
    public function setEnableSsl($enableSsl)
    {
        $this->container['enableSsl'] = $enableSsl;
        return $this;
    }

    /**
    * Gets flavorRef
    *  **参数解释**：  规格码。  **参数范围**：  不涉及。
    *
    * @return string|null
    */
    public function getFlavorRef()
    {
        return $this->container['flavorRef'];
    }

    /**
    * Sets flavorRef
    *
    * @param string|null $flavorRef **参数解释**：  规格码。  **参数范围**：  不涉及。
    *
    * @return $this
    */
    public function setFlavorRef($flavorRef)
    {
        $this->container['flavorRef'] = $flavorRef;
        return $this;
    }

    /**
    * Gets tags
    *  **参数解释**：  标签的集合。  **参数范围**：  不涉及。
    *
    * @return \HuaweiCloud\SDK\Ddm\V1\Model\Tags[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Ddm\V1\Model\Tags[]|null $tags **参数解释**：  标签的集合。  **参数范围**：  不涉及。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
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

