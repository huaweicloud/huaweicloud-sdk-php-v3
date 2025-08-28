<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowInstanceResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowInstanceResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  DDM实例ID。
    * status  DDM实例状态。
    * name  DDM实例名称。
    * created  DDM实例创建时间。
    * updated  DDM实例最后更新时间。
    * availableZone  DDM实例可用区名称。
    * vpcId  虚拟私有云的ID。
    * subnetId  子网ID。
    * securityGroupId  安全组ID。
    * nodeCount  节点数量。
    * accessIp  DDM实例访问地址。
    * accessPort  DDM实例访问端口。
    * nodeStatus  节点状态。
    * coreCount  cpu个数。
    * ramCapacity  内存大小，单位为G。
    * errorMsg  响应信息，若无异常信息则不返回该参数。
    * projectId  项目ID。
    * orderId  订单ID。包周期实例的订单ID，按需实例为空。
    * enterpriseProjectId  企业项目ID。
    * engineVersion  引擎版本号（Core实例版本号）。
    * nodes  节点信息。
    * adminUserName  管理员账号用户名。 - 长度为1-32个字符。 - 必须以字母开头。 - 可以包含字母，数字、下划线，不能包含其它特殊字符。
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
            'nodeStatus' => 'string',
            'coreCount' => 'string',
            'ramCapacity' => 'string',
            'errorMsg' => 'string',
            'projectId' => 'string',
            'orderId' => 'string',
            'enterpriseProjectId' => 'string',
            'engineVersion' => 'string',
            'nodes' => '\HuaweiCloud\SDK\Ddm\V1\Model\GetDetailfNodesInfo[]',
            'adminUserName' => 'string',
            'enableSsl' => 'bool',
            'flavorRef' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  DDM实例ID。
    * status  DDM实例状态。
    * name  DDM实例名称。
    * created  DDM实例创建时间。
    * updated  DDM实例最后更新时间。
    * availableZone  DDM实例可用区名称。
    * vpcId  虚拟私有云的ID。
    * subnetId  子网ID。
    * securityGroupId  安全组ID。
    * nodeCount  节点数量。
    * accessIp  DDM实例访问地址。
    * accessPort  DDM实例访问端口。
    * nodeStatus  节点状态。
    * coreCount  cpu个数。
    * ramCapacity  内存大小，单位为G。
    * errorMsg  响应信息，若无异常信息则不返回该参数。
    * projectId  项目ID。
    * orderId  订单ID。包周期实例的订单ID，按需实例为空。
    * enterpriseProjectId  企业项目ID。
    * engineVersion  引擎版本号（Core实例版本号）。
    * nodes  节点信息。
    * adminUserName  管理员账号用户名。 - 长度为1-32个字符。 - 必须以字母开头。 - 可以包含字母，数字、下划线，不能包含其它特殊字符。
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
        'nodeStatus' => null,
        'coreCount' => null,
        'ramCapacity' => null,
        'errorMsg' => null,
        'projectId' => null,
        'orderId' => null,
        'enterpriseProjectId' => null,
        'engineVersion' => null,
        'nodes' => null,
        'adminUserName' => null,
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
    * name  DDM实例名称。
    * created  DDM实例创建时间。
    * updated  DDM实例最后更新时间。
    * availableZone  DDM实例可用区名称。
    * vpcId  虚拟私有云的ID。
    * subnetId  子网ID。
    * securityGroupId  安全组ID。
    * nodeCount  节点数量。
    * accessIp  DDM实例访问地址。
    * accessPort  DDM实例访问端口。
    * nodeStatus  节点状态。
    * coreCount  cpu个数。
    * ramCapacity  内存大小，单位为G。
    * errorMsg  响应信息，若无异常信息则不返回该参数。
    * projectId  项目ID。
    * orderId  订单ID。包周期实例的订单ID，按需实例为空。
    * enterpriseProjectId  企业项目ID。
    * engineVersion  引擎版本号（Core实例版本号）。
    * nodes  节点信息。
    * adminUserName  管理员账号用户名。 - 长度为1-32个字符。 - 必须以字母开头。 - 可以包含字母，数字、下划线，不能包含其它特殊字符。
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
            'nodeStatus' => 'node_status',
            'coreCount' => 'core_count',
            'ramCapacity' => 'ram_capacity',
            'errorMsg' => 'error_msg',
            'projectId' => 'project_id',
            'orderId' => 'order_id',
            'enterpriseProjectId' => 'enterprise_project_id',
            'engineVersion' => 'engine_version',
            'nodes' => 'nodes',
            'adminUserName' => 'admin_user_name',
            'enableSsl' => 'enable_ssl',
            'flavorRef' => 'flavor_ref'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  DDM实例ID。
    * status  DDM实例状态。
    * name  DDM实例名称。
    * created  DDM实例创建时间。
    * updated  DDM实例最后更新时间。
    * availableZone  DDM实例可用区名称。
    * vpcId  虚拟私有云的ID。
    * subnetId  子网ID。
    * securityGroupId  安全组ID。
    * nodeCount  节点数量。
    * accessIp  DDM实例访问地址。
    * accessPort  DDM实例访问端口。
    * nodeStatus  节点状态。
    * coreCount  cpu个数。
    * ramCapacity  内存大小，单位为G。
    * errorMsg  响应信息，若无异常信息则不返回该参数。
    * projectId  项目ID。
    * orderId  订单ID。包周期实例的订单ID，按需实例为空。
    * enterpriseProjectId  企业项目ID。
    * engineVersion  引擎版本号（Core实例版本号）。
    * nodes  节点信息。
    * adminUserName  管理员账号用户名。 - 长度为1-32个字符。 - 必须以字母开头。 - 可以包含字母，数字、下划线，不能包含其它特殊字符。
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
            'nodeStatus' => 'setNodeStatus',
            'coreCount' => 'setCoreCount',
            'ramCapacity' => 'setRamCapacity',
            'errorMsg' => 'setErrorMsg',
            'projectId' => 'setProjectId',
            'orderId' => 'setOrderId',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'engineVersion' => 'setEngineVersion',
            'nodes' => 'setNodes',
            'adminUserName' => 'setAdminUserName',
            'enableSsl' => 'setEnableSsl',
            'flavorRef' => 'setFlavorRef'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  DDM实例ID。
    * status  DDM实例状态。
    * name  DDM实例名称。
    * created  DDM实例创建时间。
    * updated  DDM实例最后更新时间。
    * availableZone  DDM实例可用区名称。
    * vpcId  虚拟私有云的ID。
    * subnetId  子网ID。
    * securityGroupId  安全组ID。
    * nodeCount  节点数量。
    * accessIp  DDM实例访问地址。
    * accessPort  DDM实例访问端口。
    * nodeStatus  节点状态。
    * coreCount  cpu个数。
    * ramCapacity  内存大小，单位为G。
    * errorMsg  响应信息，若无异常信息则不返回该参数。
    * projectId  项目ID。
    * orderId  订单ID。包周期实例的订单ID，按需实例为空。
    * enterpriseProjectId  企业项目ID。
    * engineVersion  引擎版本号（Core实例版本号）。
    * nodes  节点信息。
    * adminUserName  管理员账号用户名。 - 长度为1-32个字符。 - 必须以字母开头。 - 可以包含字母，数字、下划线，不能包含其它特殊字符。
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
            'nodeStatus' => 'getNodeStatus',
            'coreCount' => 'getCoreCount',
            'ramCapacity' => 'getRamCapacity',
            'errorMsg' => 'getErrorMsg',
            'projectId' => 'getProjectId',
            'orderId' => 'getOrderId',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'engineVersion' => 'getEngineVersion',
            'nodes' => 'getNodes',
            'adminUserName' => 'getAdminUserName',
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
        $this->container['nodeStatus'] = isset($data['nodeStatus']) ? $data['nodeStatus'] : null;
        $this->container['coreCount'] = isset($data['coreCount']) ? $data['coreCount'] : null;
        $this->container['ramCapacity'] = isset($data['ramCapacity']) ? $data['ramCapacity'] : null;
        $this->container['errorMsg'] = isset($data['errorMsg']) ? $data['errorMsg'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['engineVersion'] = isset($data['engineVersion']) ? $data['engineVersion'] : null;
        $this->container['nodes'] = isset($data['nodes']) ? $data['nodes'] : null;
        $this->container['adminUserName'] = isset($data['adminUserName']) ? $data['adminUserName'] : null;
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
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id DDM实例ID。
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
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status DDM实例状态。
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
    *  DDM实例名称。
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
    * @param string|null $name DDM实例名称。
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
    *  DDM实例创建时间。
    *
    * @return string|null
    */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
    * Sets created
    *
    * @param string|null $created DDM实例创建时间。
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
    *  DDM实例最后更新时间。
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
    * @param string|null $updated DDM实例最后更新时间。
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
    *  DDM实例可用区名称。
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
    * @param string|null $availableZone DDM实例可用区名称。
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
    * @return string|null
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string|null $vpcId 虚拟私有云的ID。
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
    * @return string|null
    */
    public function getSubnetId()
    {
        return $this->container['subnetId'];
    }

    /**
    * Sets subnetId
    *
    * @param string|null $subnetId 子网ID。
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
    * @return string|null
    */
    public function getSecurityGroupId()
    {
        return $this->container['securityGroupId'];
    }

    /**
    * Sets securityGroupId
    *
    * @param string|null $securityGroupId 安全组ID。
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
    * @return int|null
    */
    public function getNodeCount()
    {
        return $this->container['nodeCount'];
    }

    /**
    * Sets nodeCount
    *
    * @param int|null $nodeCount 节点数量。
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
    * @return string|null
    */
    public function getAccessIp()
    {
        return $this->container['accessIp'];
    }

    /**
    * Sets accessIp
    *
    * @param string|null $accessIp DDM实例访问地址。
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
    * @return string|null
    */
    public function getAccessPort()
    {
        return $this->container['accessPort'];
    }

    /**
    * Sets accessPort
    *
    * @param string|null $accessPort DDM实例访问端口。
    *
    * @return $this
    */
    public function setAccessPort($accessPort)
    {
        $this->container['accessPort'] = $accessPort;
        return $this;
    }

    /**
    * Gets nodeStatus
    *  节点状态。
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
    * @param string|null $nodeStatus 节点状态。
    *
    * @return $this
    */
    public function setNodeStatus($nodeStatus)
    {
        $this->container['nodeStatus'] = $nodeStatus;
        return $this;
    }

    /**
    * Gets coreCount
    *  cpu个数。
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
    * @param string|null $coreCount cpu个数。
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
    * @return string|null
    */
    public function getRamCapacity()
    {
        return $this->container['ramCapacity'];
    }

    /**
    * Sets ramCapacity
    *
    * @param string|null $ramCapacity 内存大小，单位为G。
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
    *  响应信息，若无异常信息则不返回该参数。
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
    * @param string|null $errorMsg 响应信息，若无异常信息则不返回该参数。
    *
    * @return $this
    */
    public function setErrorMsg($errorMsg)
    {
        $this->container['errorMsg'] = $errorMsg;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID。
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
    * @param string|null $projectId 项目ID。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets orderId
    *  订单ID。包周期实例的订单ID，按需实例为空。
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
    * @param string|null $orderId 订单ID。包周期实例的订单ID，按需实例为空。
    *
    * @return $this
    */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID。
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
    * @param string|null $enterpriseProjectId 企业项目ID。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets engineVersion
    *  引擎版本号（Core实例版本号）。
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
    * @param string|null $engineVersion 引擎版本号（Core实例版本号）。
    *
    * @return $this
    */
    public function setEngineVersion($engineVersion)
    {
        $this->container['engineVersion'] = $engineVersion;
        return $this;
    }

    /**
    * Gets nodes
    *  节点信息。
    *
    * @return \HuaweiCloud\SDK\Ddm\V1\Model\GetDetailfNodesInfo[]|null
    */
    public function getNodes()
    {
        return $this->container['nodes'];
    }

    /**
    * Sets nodes
    *
    * @param \HuaweiCloud\SDK\Ddm\V1\Model\GetDetailfNodesInfo[]|null $nodes 节点信息。
    *
    * @return $this
    */
    public function setNodes($nodes)
    {
        $this->container['nodes'] = $nodes;
        return $this;
    }

    /**
    * Gets adminUserName
    *  管理员账号用户名。 - 长度为1-32个字符。 - 必须以字母开头。 - 可以包含字母，数字、下划线，不能包含其它特殊字符。
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
    * @param string|null $adminUserName 管理员账号用户名。 - 长度为1-32个字符。 - 必须以字母开头。 - 可以包含字母，数字、下划线，不能包含其它特殊字符。
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

