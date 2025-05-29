<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InstanceCompliant implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InstanceCompliant';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * compliantSummary  compliantSummary
    * nonCompliantSummary  nonCompliantSummary
    * executionSummary  executionSummary
    * id  id
    * enterpriseProjectId  企业项目id
    * name  节点名称
    * instanceId  节点ID
    * nodeId  cce集群节点ID
    * ip  节点IP
    * eip  弹性公网ip
    * region  区域
    * group  分组
    * reportScene  报告场景(CCE,ECS)
    * cceInfoId  cce 集群信息id
    * status  合规性状态
    * baselineId  基线id
    * baselineName  基线名称
    * ruleType  基线规则类型
    * operatingSystem  操作系统
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'compliantSummary' => '\HuaweiCloud\SDK\Coc\V1\Model\CompliantSummary',
            'nonCompliantSummary' => '\HuaweiCloud\SDK\Coc\V1\Model\NonCompliantSummary',
            'executionSummary' => '\HuaweiCloud\SDK\Coc\V1\Model\ExecutionSummary',
            'id' => 'string',
            'enterpriseProjectId' => 'string',
            'name' => 'string',
            'instanceId' => 'string',
            'nodeId' => 'string',
            'ip' => 'string',
            'eip' => 'string',
            'region' => 'string',
            'group' => 'string',
            'reportScene' => 'string',
            'cceInfoId' => 'string',
            'status' => 'string',
            'baselineId' => 'string',
            'baselineName' => 'string',
            'ruleType' => 'string',
            'operatingSystem' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * compliantSummary  compliantSummary
    * nonCompliantSummary  nonCompliantSummary
    * executionSummary  executionSummary
    * id  id
    * enterpriseProjectId  企业项目id
    * name  节点名称
    * instanceId  节点ID
    * nodeId  cce集群节点ID
    * ip  节点IP
    * eip  弹性公网ip
    * region  区域
    * group  分组
    * reportScene  报告场景(CCE,ECS)
    * cceInfoId  cce 集群信息id
    * status  合规性状态
    * baselineId  基线id
    * baselineName  基线名称
    * ruleType  基线规则类型
    * operatingSystem  操作系统
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'compliantSummary' => null,
        'nonCompliantSummary' => null,
        'executionSummary' => null,
        'id' => null,
        'enterpriseProjectId' => null,
        'name' => null,
        'instanceId' => null,
        'nodeId' => null,
        'ip' => null,
        'eip' => null,
        'region' => null,
        'group' => null,
        'reportScene' => null,
        'cceInfoId' => null,
        'status' => null,
        'baselineId' => null,
        'baselineName' => null,
        'ruleType' => null,
        'operatingSystem' => null
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
    * compliantSummary  compliantSummary
    * nonCompliantSummary  nonCompliantSummary
    * executionSummary  executionSummary
    * id  id
    * enterpriseProjectId  企业项目id
    * name  节点名称
    * instanceId  节点ID
    * nodeId  cce集群节点ID
    * ip  节点IP
    * eip  弹性公网ip
    * region  区域
    * group  分组
    * reportScene  报告场景(CCE,ECS)
    * cceInfoId  cce 集群信息id
    * status  合规性状态
    * baselineId  基线id
    * baselineName  基线名称
    * ruleType  基线规则类型
    * operatingSystem  操作系统
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'compliantSummary' => 'compliant_summary',
            'nonCompliantSummary' => 'non_compliant_summary',
            'executionSummary' => 'execution_summary',
            'id' => 'id',
            'enterpriseProjectId' => 'enterprise_project_id',
            'name' => 'name',
            'instanceId' => 'instance_id',
            'nodeId' => 'node_id',
            'ip' => 'ip',
            'eip' => 'eip',
            'region' => 'region',
            'group' => 'group',
            'reportScene' => 'report_scene',
            'cceInfoId' => 'cce_info_id',
            'status' => 'status',
            'baselineId' => 'baseline_id',
            'baselineName' => 'baseline_name',
            'ruleType' => 'rule_type',
            'operatingSystem' => 'operating_system'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * compliantSummary  compliantSummary
    * nonCompliantSummary  nonCompliantSummary
    * executionSummary  executionSummary
    * id  id
    * enterpriseProjectId  企业项目id
    * name  节点名称
    * instanceId  节点ID
    * nodeId  cce集群节点ID
    * ip  节点IP
    * eip  弹性公网ip
    * region  区域
    * group  分组
    * reportScene  报告场景(CCE,ECS)
    * cceInfoId  cce 集群信息id
    * status  合规性状态
    * baselineId  基线id
    * baselineName  基线名称
    * ruleType  基线规则类型
    * operatingSystem  操作系统
    *
    * @var string[]
    */
    protected static $setters = [
            'compliantSummary' => 'setCompliantSummary',
            'nonCompliantSummary' => 'setNonCompliantSummary',
            'executionSummary' => 'setExecutionSummary',
            'id' => 'setId',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'name' => 'setName',
            'instanceId' => 'setInstanceId',
            'nodeId' => 'setNodeId',
            'ip' => 'setIp',
            'eip' => 'setEip',
            'region' => 'setRegion',
            'group' => 'setGroup',
            'reportScene' => 'setReportScene',
            'cceInfoId' => 'setCceInfoId',
            'status' => 'setStatus',
            'baselineId' => 'setBaselineId',
            'baselineName' => 'setBaselineName',
            'ruleType' => 'setRuleType',
            'operatingSystem' => 'setOperatingSystem'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * compliantSummary  compliantSummary
    * nonCompliantSummary  nonCompliantSummary
    * executionSummary  executionSummary
    * id  id
    * enterpriseProjectId  企业项目id
    * name  节点名称
    * instanceId  节点ID
    * nodeId  cce集群节点ID
    * ip  节点IP
    * eip  弹性公网ip
    * region  区域
    * group  分组
    * reportScene  报告场景(CCE,ECS)
    * cceInfoId  cce 集群信息id
    * status  合规性状态
    * baselineId  基线id
    * baselineName  基线名称
    * ruleType  基线规则类型
    * operatingSystem  操作系统
    *
    * @var string[]
    */
    protected static $getters = [
            'compliantSummary' => 'getCompliantSummary',
            'nonCompliantSummary' => 'getNonCompliantSummary',
            'executionSummary' => 'getExecutionSummary',
            'id' => 'getId',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'name' => 'getName',
            'instanceId' => 'getInstanceId',
            'nodeId' => 'getNodeId',
            'ip' => 'getIp',
            'eip' => 'getEip',
            'region' => 'getRegion',
            'group' => 'getGroup',
            'reportScene' => 'getReportScene',
            'cceInfoId' => 'getCceInfoId',
            'status' => 'getStatus',
            'baselineId' => 'getBaselineId',
            'baselineName' => 'getBaselineName',
            'ruleType' => 'getRuleType',
            'operatingSystem' => 'getOperatingSystem'
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
        $this->container['compliantSummary'] = isset($data['compliantSummary']) ? $data['compliantSummary'] : null;
        $this->container['nonCompliantSummary'] = isset($data['nonCompliantSummary']) ? $data['nonCompliantSummary'] : null;
        $this->container['executionSummary'] = isset($data['executionSummary']) ? $data['executionSummary'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['eip'] = isset($data['eip']) ? $data['eip'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['group'] = isset($data['group']) ? $data['group'] : null;
        $this->container['reportScene'] = isset($data['reportScene']) ? $data['reportScene'] : null;
        $this->container['cceInfoId'] = isset($data['cceInfoId']) ? $data['cceInfoId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['baselineId'] = isset($data['baselineId']) ? $data['baselineId'] : null;
        $this->container['baselineName'] = isset($data['baselineName']) ? $data['baselineName'] : null;
        $this->container['ruleType'] = isset($data['ruleType']) ? $data['ruleType'] : null;
        $this->container['operatingSystem'] = isset($data['operatingSystem']) ? $data['operatingSystem'] : null;
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
    * Gets compliantSummary
    *  compliantSummary
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\CompliantSummary|null
    */
    public function getCompliantSummary()
    {
        return $this->container['compliantSummary'];
    }

    /**
    * Sets compliantSummary
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\CompliantSummary|null $compliantSummary compliantSummary
    *
    * @return $this
    */
    public function setCompliantSummary($compliantSummary)
    {
        $this->container['compliantSummary'] = $compliantSummary;
        return $this;
    }

    /**
    * Gets nonCompliantSummary
    *  nonCompliantSummary
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\NonCompliantSummary|null
    */
    public function getNonCompliantSummary()
    {
        return $this->container['nonCompliantSummary'];
    }

    /**
    * Sets nonCompliantSummary
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\NonCompliantSummary|null $nonCompliantSummary nonCompliantSummary
    *
    * @return $this
    */
    public function setNonCompliantSummary($nonCompliantSummary)
    {
        $this->container['nonCompliantSummary'] = $nonCompliantSummary;
        return $this;
    }

    /**
    * Gets executionSummary
    *  executionSummary
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\ExecutionSummary|null
    */
    public function getExecutionSummary()
    {
        return $this->container['executionSummary'];
    }

    /**
    * Sets executionSummary
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\ExecutionSummary|null $executionSummary executionSummary
    *
    * @return $this
    */
    public function setExecutionSummary($executionSummary)
    {
        $this->container['executionSummary'] = $executionSummary;
        return $this;
    }

    /**
    * Gets id
    *  id
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
    * @param string|null $id id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目id
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
    * @param string|null $enterpriseProjectId 企业项目id
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets name
    *  节点名称
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
    * @param string|null $name 节点名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets instanceId
    *  节点ID
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
    * @param string|null $instanceId 节点ID
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets nodeId
    *  cce集群节点ID
    *
    * @return string|null
    */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
    * Sets nodeId
    *
    * @param string|null $nodeId cce集群节点ID
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets ip
    *  节点IP
    *
    * @return string|null
    */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
    * Sets ip
    *
    * @param string|null $ip 节点IP
    *
    * @return $this
    */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;
        return $this;
    }

    /**
    * Gets eip
    *  弹性公网ip
    *
    * @return string|null
    */
    public function getEip()
    {
        return $this->container['eip'];
    }

    /**
    * Sets eip
    *
    * @param string|null $eip 弹性公网ip
    *
    * @return $this
    */
    public function setEip($eip)
    {
        $this->container['eip'] = $eip;
        return $this;
    }

    /**
    * Gets region
    *  区域
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region 区域
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets group
    *  分组
    *
    * @return string|null
    */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
    * Sets group
    *
    * @param string|null $group 分组
    *
    * @return $this
    */
    public function setGroup($group)
    {
        $this->container['group'] = $group;
        return $this;
    }

    /**
    * Gets reportScene
    *  报告场景(CCE,ECS)
    *
    * @return string|null
    */
    public function getReportScene()
    {
        return $this->container['reportScene'];
    }

    /**
    * Sets reportScene
    *
    * @param string|null $reportScene 报告场景(CCE,ECS)
    *
    * @return $this
    */
    public function setReportScene($reportScene)
    {
        $this->container['reportScene'] = $reportScene;
        return $this;
    }

    /**
    * Gets cceInfoId
    *  cce 集群信息id
    *
    * @return string|null
    */
    public function getCceInfoId()
    {
        return $this->container['cceInfoId'];
    }

    /**
    * Sets cceInfoId
    *
    * @param string|null $cceInfoId cce 集群信息id
    *
    * @return $this
    */
    public function setCceInfoId($cceInfoId)
    {
        $this->container['cceInfoId'] = $cceInfoId;
        return $this;
    }

    /**
    * Gets status
    *  合规性状态
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
    * @param string|null $status 合规性状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets baselineId
    *  基线id
    *
    * @return string|null
    */
    public function getBaselineId()
    {
        return $this->container['baselineId'];
    }

    /**
    * Sets baselineId
    *
    * @param string|null $baselineId 基线id
    *
    * @return $this
    */
    public function setBaselineId($baselineId)
    {
        $this->container['baselineId'] = $baselineId;
        return $this;
    }

    /**
    * Gets baselineName
    *  基线名称
    *
    * @return string|null
    */
    public function getBaselineName()
    {
        return $this->container['baselineName'];
    }

    /**
    * Sets baselineName
    *
    * @param string|null $baselineName 基线名称
    *
    * @return $this
    */
    public function setBaselineName($baselineName)
    {
        $this->container['baselineName'] = $baselineName;
        return $this;
    }

    /**
    * Gets ruleType
    *  基线规则类型
    *
    * @return string|null
    */
    public function getRuleType()
    {
        return $this->container['ruleType'];
    }

    /**
    * Sets ruleType
    *
    * @param string|null $ruleType 基线规则类型
    *
    * @return $this
    */
    public function setRuleType($ruleType)
    {
        $this->container['ruleType'] = $ruleType;
        return $this;
    }

    /**
    * Gets operatingSystem
    *  操作系统
    *
    * @return string|null
    */
    public function getOperatingSystem()
    {
        return $this->container['operatingSystem'];
    }

    /**
    * Sets operatingSystem
    *
    * @param string|null $operatingSystem 操作系统
    *
    * @return $this
    */
    public function setOperatingSystem($operatingSystem)
    {
        $this->container['operatingSystem'] = $operatingSystem;
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

