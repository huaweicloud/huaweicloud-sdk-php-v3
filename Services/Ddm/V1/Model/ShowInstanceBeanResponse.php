<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowInstanceBeanResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowInstanceBeanResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  DDM实例ID。
    * status  DDM实例状态。
    * name  创建的实例名称。
    * created  创建时间，格式为yyyy-mm-dd Thh:mm:ssZ。  其中，T指定某个时间的开始；Z指示 UTC 时间。
    * updated  更新时间，格式与“created”完全相同。
    * availableZone  可用区名称
    * vpcId  虚拟私有云的ID。
    * subnetId  子网ID。
    * securityGroupId  安全组ID。
    * nodeCount  节点数量。
    * accessIp  DDM实例访问地址。
    * accessPort  DDM实例访问端口。
    * coreCount  cpu个数。
    * ramCapacity  内存大小，单位为G。
    * errorMsg  响应信息，若无异常信息则不返回该参数
    * nodeStatus  节点状态。
    * enterpriseProjectId  企业项目ID。
    * projectId  租户在某一region下的project ID。
    * engineVersion  引擎版本号（Core实例版本号）。
    * orderId  包周期的实例，有订单id。
    * enableSsl  是否开启SSL。
    * flavorRef  规格码。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'status' => 'string',
            'name' => 'string',
            'created' => 'string',
            'updated' => 'string',
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
            'enterpriseProjectId' => 'string',
            'projectId' => 'string',
            'engineVersion' => 'string',
            'orderId' => 'string',
            'enableSsl' => 'bool',
            'flavorRef' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  DDM实例ID。
    * status  DDM实例状态。
    * name  创建的实例名称。
    * created  创建时间，格式为yyyy-mm-dd Thh:mm:ssZ。  其中，T指定某个时间的开始；Z指示 UTC 时间。
    * updated  更新时间，格式与“created”完全相同。
    * availableZone  可用区名称
    * vpcId  虚拟私有云的ID。
    * subnetId  子网ID。
    * securityGroupId  安全组ID。
    * nodeCount  节点数量。
    * accessIp  DDM实例访问地址。
    * accessPort  DDM实例访问端口。
    * coreCount  cpu个数。
    * ramCapacity  内存大小，单位为G。
    * errorMsg  响应信息，若无异常信息则不返回该参数
    * nodeStatus  节点状态。
    * enterpriseProjectId  企业项目ID。
    * projectId  租户在某一region下的project ID。
    * engineVersion  引擎版本号（Core实例版本号）。
    * orderId  包周期的实例，有订单id。
    * enableSsl  是否开启SSL。
    * flavorRef  规格码。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'status' => null,
        'name' => null,
        'created' => null,
        'updated' => null,
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
        'enterpriseProjectId' => null,
        'projectId' => null,
        'engineVersion' => null,
        'orderId' => null,
        'enableSsl' => null,
        'flavorRef' => null
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
    * id  DDM实例ID。
    * status  DDM实例状态。
    * name  创建的实例名称。
    * created  创建时间，格式为yyyy-mm-dd Thh:mm:ssZ。  其中，T指定某个时间的开始；Z指示 UTC 时间。
    * updated  更新时间，格式与“created”完全相同。
    * availableZone  可用区名称
    * vpcId  虚拟私有云的ID。
    * subnetId  子网ID。
    * securityGroupId  安全组ID。
    * nodeCount  节点数量。
    * accessIp  DDM实例访问地址。
    * accessPort  DDM实例访问端口。
    * coreCount  cpu个数。
    * ramCapacity  内存大小，单位为G。
    * errorMsg  响应信息，若无异常信息则不返回该参数
    * nodeStatus  节点状态。
    * enterpriseProjectId  企业项目ID。
    * projectId  租户在某一region下的project ID。
    * engineVersion  引擎版本号（Core实例版本号）。
    * orderId  包周期的实例，有订单id。
    * enableSsl  是否开启SSL。
    * flavorRef  规格码。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'status' => 'status',
            'name' => 'name',
            'created' => 'created',
            'updated' => 'updated',
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
            'enterpriseProjectId' => 'enterprise_project_id',
            'projectId' => 'project_id',
            'engineVersion' => 'engine_version',
            'orderId' => 'order_id',
            'enableSsl' => 'enable_ssl',
            'flavorRef' => 'flavor_ref'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  DDM实例ID。
    * status  DDM实例状态。
    * name  创建的实例名称。
    * created  创建时间，格式为yyyy-mm-dd Thh:mm:ssZ。  其中，T指定某个时间的开始；Z指示 UTC 时间。
    * updated  更新时间，格式与“created”完全相同。
    * availableZone  可用区名称
    * vpcId  虚拟私有云的ID。
    * subnetId  子网ID。
    * securityGroupId  安全组ID。
    * nodeCount  节点数量。
    * accessIp  DDM实例访问地址。
    * accessPort  DDM实例访问端口。
    * coreCount  cpu个数。
    * ramCapacity  内存大小，单位为G。
    * errorMsg  响应信息，若无异常信息则不返回该参数
    * nodeStatus  节点状态。
    * enterpriseProjectId  企业项目ID。
    * projectId  租户在某一region下的project ID。
    * engineVersion  引擎版本号（Core实例版本号）。
    * orderId  包周期的实例，有订单id。
    * enableSsl  是否开启SSL。
    * flavorRef  规格码。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'status' => 'setStatus',
            'name' => 'setName',
            'created' => 'setCreated',
            'updated' => 'setUpdated',
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
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'projectId' => 'setProjectId',
            'engineVersion' => 'setEngineVersion',
            'orderId' => 'setOrderId',
            'enableSsl' => 'setEnableSsl',
            'flavorRef' => 'setFlavorRef'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  DDM实例ID。
    * status  DDM实例状态。
    * name  创建的实例名称。
    * created  创建时间，格式为yyyy-mm-dd Thh:mm:ssZ。  其中，T指定某个时间的开始；Z指示 UTC 时间。
    * updated  更新时间，格式与“created”完全相同。
    * availableZone  可用区名称
    * vpcId  虚拟私有云的ID。
    * subnetId  子网ID。
    * securityGroupId  安全组ID。
    * nodeCount  节点数量。
    * accessIp  DDM实例访问地址。
    * accessPort  DDM实例访问端口。
    * coreCount  cpu个数。
    * ramCapacity  内存大小，单位为G。
    * errorMsg  响应信息，若无异常信息则不返回该参数
    * nodeStatus  节点状态。
    * enterpriseProjectId  企业项目ID。
    * projectId  租户在某一region下的project ID。
    * engineVersion  引擎版本号（Core实例版本号）。
    * orderId  包周期的实例，有订单id。
    * enableSsl  是否开启SSL。
    * flavorRef  规格码。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'status' => 'getStatus',
            'name' => 'getName',
            'created' => 'getCreated',
            'updated' => 'getUpdated',
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
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'projectId' => 'getProjectId',
            'engineVersion' => 'getEngineVersion',
            'orderId' => 'getOrderId',
            'enableSsl' => 'getEnableSsl',
            'flavorRef' => 'getFlavorRef'
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
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
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
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['engineVersion'] = isset($data['engineVersion']) ? $data['engineVersion'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['enableSsl'] = isset($data['enableSsl']) ? $data['enableSsl'] : null;
        $this->container['flavorRef'] = isset($data['flavorRef']) ? $data['flavorRef'] : null;
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
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['created'] === null) {
            $invalidProperties[] = "'created' can't be null";
        }
        if ($this->container['updated'] === null) {
            $invalidProperties[] = "'updated' can't be null";
        }
        if ($this->container['availableZone'] === null) {
            $invalidProperties[] = "'availableZone' can't be null";
        }
        if ($this->container['vpcId'] === null) {
            $invalidProperties[] = "'vpcId' can't be null";
        }
        if ($this->container['subnetId'] === null) {
            $invalidProperties[] = "'subnetId' can't be null";
        }
        if ($this->container['securityGroupId'] === null) {
            $invalidProperties[] = "'securityGroupId' can't be null";
        }
        if ($this->container['nodeCount'] === null) {
            $invalidProperties[] = "'nodeCount' can't be null";
        }
        if ($this->container['accessIp'] === null) {
            $invalidProperties[] = "'accessIp' can't be null";
        }
        if ($this->container['accessPort'] === null) {
            $invalidProperties[] = "'accessPort' can't be null";
        }
        if ($this->container['coreCount'] === null) {
            $invalidProperties[] = "'coreCount' can't be null";
        }
        if ($this->container['ramCapacity'] === null) {
            $invalidProperties[] = "'ramCapacity' can't be null";
        }
        if ($this->container['nodeStatus'] === null) {
            $invalidProperties[] = "'nodeStatus' can't be null";
        }
        if ($this->container['enterpriseProjectId'] === null) {
            $invalidProperties[] = "'enterpriseProjectId' can't be null";
        }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
        if ($this->container['engineVersion'] === null) {
            $invalidProperties[] = "'engineVersion' can't be null";
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
    *  DDM实例ID。
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
    * @param string $id DDM实例ID。
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
    *  DDM实例状态。
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
    * @param string $status DDM实例状态。
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
    *  创建的实例名称。
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
    * @param string $name 创建的实例名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets created
    *  创建时间，格式为yyyy-mm-dd Thh:mm:ssZ。  其中，T指定某个时间的开始；Z指示 UTC 时间。
    *
    * @return string
    */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
    * Sets created
    *
    * @param string $created 创建时间，格式为yyyy-mm-dd Thh:mm:ssZ。  其中，T指定某个时间的开始；Z指示 UTC 时间。
    *
    * @return $this
    */
    public function setCreated($created)
    {
        $this->container['created'] = $created;
        return $this;
    }

    /**
    * Gets updated
    *  更新时间，格式与“created”完全相同。
    *
    * @return string
    */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
    * Sets updated
    *
    * @param string $updated 更新时间，格式与“created”完全相同。
    *
    * @return $this
    */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;
        return $this;
    }

    /**
    * Gets availableZone
    *  可用区名称
    *
    * @return string
    */
    public function getAvailableZone()
    {
        return $this->container['availableZone'];
    }

    /**
    * Sets availableZone
    *
    * @param string $availableZone 可用区名称
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
    *  虚拟私有云的ID。
    *
    * @return string
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string $vpcId 虚拟私有云的ID。
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
    *  子网ID。
    *
    * @return string
    */
    public function getSubnetId()
    {
        return $this->container['subnetId'];
    }

    /**
    * Sets subnetId
    *
    * @param string $subnetId 子网ID。
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
    *  安全组ID。
    *
    * @return string
    */
    public function getSecurityGroupId()
    {
        return $this->container['securityGroupId'];
    }

    /**
    * Sets securityGroupId
    *
    * @param string $securityGroupId 安全组ID。
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
    *  节点数量。
    *
    * @return int
    */
    public function getNodeCount()
    {
        return $this->container['nodeCount'];
    }

    /**
    * Sets nodeCount
    *
    * @param int $nodeCount 节点数量。
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
    *  DDM实例访问地址。
    *
    * @return string
    */
    public function getAccessIp()
    {
        return $this->container['accessIp'];
    }

    /**
    * Sets accessIp
    *
    * @param string $accessIp DDM实例访问地址。
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
    *  DDM实例访问端口。
    *
    * @return string
    */
    public function getAccessPort()
    {
        return $this->container['accessPort'];
    }

    /**
    * Sets accessPort
    *
    * @param string $accessPort DDM实例访问端口。
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
    *  cpu个数。
    *
    * @return string
    */
    public function getCoreCount()
    {
        return $this->container['coreCount'];
    }

    /**
    * Sets coreCount
    *
    * @param string $coreCount cpu个数。
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
    *  内存大小，单位为G。
    *
    * @return string
    */
    public function getRamCapacity()
    {
        return $this->container['ramCapacity'];
    }

    /**
    * Sets ramCapacity
    *
    * @param string $ramCapacity 内存大小，单位为G。
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
    *  响应信息，若无异常信息则不返回该参数
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
    * @param string|null $errorMsg 响应信息，若无异常信息则不返回该参数
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
    *  节点状态。
    *
    * @return string
    */
    public function getNodeStatus()
    {
        return $this->container['nodeStatus'];
    }

    /**
    * Sets nodeStatus
    *
    * @param string $nodeStatus 节点状态。
    *
    * @return $this
    */
    public function setNodeStatus($nodeStatus)
    {
        $this->container['nodeStatus'] = $nodeStatus;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID。
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
    * @param string $enterpriseProjectId 企业项目ID。
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
    *  租户在某一region下的project ID。
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
    * @param string $projectId 租户在某一region下的project ID。
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
    *  引擎版本号（Core实例版本号）。
    *
    * @return string
    */
    public function getEngineVersion()
    {
        return $this->container['engineVersion'];
    }

    /**
    * Sets engineVersion
    *
    * @param string $engineVersion 引擎版本号（Core实例版本号）。
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
    *  包周期的实例，有订单id。
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
    * @param string|null $orderId 包周期的实例，有订单id。
    *
    * @return $this
    */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;
        return $this;
    }

    /**
    * Gets enableSsl
    *  是否开启SSL。
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
    * @param bool|null $enableSsl 是否开启SSL。
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
    *  规格码。
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
    * @param string|null $flavorRef 规格码。
    *
    * @return $this
    */
    public function setFlavorRef($flavorRef)
    {
        $this->container['flavorRef'] = $flavorRef;
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

