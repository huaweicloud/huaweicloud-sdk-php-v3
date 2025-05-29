<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListInstanceCompliantRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListInstanceCompliantRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseProjectId  企业项目id
    * name  名称
    * instanceId  ECS实例id
    * ip  内网ip
    * eip  弹性公网ip
    * operatingSystem  操作系统 - HuaweiCloudEulerOS - CentOS - EulerOS
    * region  区域
    * group  分组
    * compliantStatus  合规性状态 - non_compliant：不合规 - compliant：合规
    * orderId  工单id
    * offset  偏移量
    * limit  每页数量
    * sortDir  排序 - asc：升序 - desc：降序
    * sortKey  排序字段 - report_time：报告时间
    * reportScene  报告场景 - CCE  - ECS
    * cceInfoId  cce 集群信息id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseProjectId' => 'string',
            'name' => 'string',
            'instanceId' => 'string',
            'ip' => 'string',
            'eip' => 'string',
            'operatingSystem' => 'string',
            'region' => 'string',
            'group' => 'string',
            'compliantStatus' => 'string',
            'orderId' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'sortDir' => 'string',
            'sortKey' => 'string',
            'reportScene' => 'string',
            'cceInfoId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseProjectId  企业项目id
    * name  名称
    * instanceId  ECS实例id
    * ip  内网ip
    * eip  弹性公网ip
    * operatingSystem  操作系统 - HuaweiCloudEulerOS - CentOS - EulerOS
    * region  区域
    * group  分组
    * compliantStatus  合规性状态 - non_compliant：不合规 - compliant：合规
    * orderId  工单id
    * offset  偏移量
    * limit  每页数量
    * sortDir  排序 - asc：升序 - desc：降序
    * sortKey  排序字段 - report_time：报告时间
    * reportScene  报告场景 - CCE  - ECS
    * cceInfoId  cce 集群信息id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseProjectId' => null,
        'name' => null,
        'instanceId' => null,
        'ip' => null,
        'eip' => null,
        'operatingSystem' => null,
        'region' => null,
        'group' => null,
        'compliantStatus' => null,
        'orderId' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'sortDir' => null,
        'sortKey' => null,
        'reportScene' => null,
        'cceInfoId' => null
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
    * enterpriseProjectId  企业项目id
    * name  名称
    * instanceId  ECS实例id
    * ip  内网ip
    * eip  弹性公网ip
    * operatingSystem  操作系统 - HuaweiCloudEulerOS - CentOS - EulerOS
    * region  区域
    * group  分组
    * compliantStatus  合规性状态 - non_compliant：不合规 - compliant：合规
    * orderId  工单id
    * offset  偏移量
    * limit  每页数量
    * sortDir  排序 - asc：升序 - desc：降序
    * sortKey  排序字段 - report_time：报告时间
    * reportScene  报告场景 - CCE  - ECS
    * cceInfoId  cce 集群信息id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseProjectId' => 'enterprise_project_id',
            'name' => 'name',
            'instanceId' => 'instance_id',
            'ip' => 'ip',
            'eip' => 'eip',
            'operatingSystem' => 'operating_system',
            'region' => 'region',
            'group' => 'group',
            'compliantStatus' => 'compliant_status',
            'orderId' => 'order_id',
            'offset' => 'offset',
            'limit' => 'limit',
            'sortDir' => 'sort_dir',
            'sortKey' => 'sort_key',
            'reportScene' => 'report_scene',
            'cceInfoId' => 'cce_info_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseProjectId  企业项目id
    * name  名称
    * instanceId  ECS实例id
    * ip  内网ip
    * eip  弹性公网ip
    * operatingSystem  操作系统 - HuaweiCloudEulerOS - CentOS - EulerOS
    * region  区域
    * group  分组
    * compliantStatus  合规性状态 - non_compliant：不合规 - compliant：合规
    * orderId  工单id
    * offset  偏移量
    * limit  每页数量
    * sortDir  排序 - asc：升序 - desc：降序
    * sortKey  排序字段 - report_time：报告时间
    * reportScene  报告场景 - CCE  - ECS
    * cceInfoId  cce 集群信息id
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'name' => 'setName',
            'instanceId' => 'setInstanceId',
            'ip' => 'setIp',
            'eip' => 'setEip',
            'operatingSystem' => 'setOperatingSystem',
            'region' => 'setRegion',
            'group' => 'setGroup',
            'compliantStatus' => 'setCompliantStatus',
            'orderId' => 'setOrderId',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'sortDir' => 'setSortDir',
            'sortKey' => 'setSortKey',
            'reportScene' => 'setReportScene',
            'cceInfoId' => 'setCceInfoId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseProjectId  企业项目id
    * name  名称
    * instanceId  ECS实例id
    * ip  内网ip
    * eip  弹性公网ip
    * operatingSystem  操作系统 - HuaweiCloudEulerOS - CentOS - EulerOS
    * region  区域
    * group  分组
    * compliantStatus  合规性状态 - non_compliant：不合规 - compliant：合规
    * orderId  工单id
    * offset  偏移量
    * limit  每页数量
    * sortDir  排序 - asc：升序 - desc：降序
    * sortKey  排序字段 - report_time：报告时间
    * reportScene  报告场景 - CCE  - ECS
    * cceInfoId  cce 集群信息id
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'name' => 'getName',
            'instanceId' => 'getInstanceId',
            'ip' => 'getIp',
            'eip' => 'getEip',
            'operatingSystem' => 'getOperatingSystem',
            'region' => 'getRegion',
            'group' => 'getGroup',
            'compliantStatus' => 'getCompliantStatus',
            'orderId' => 'getOrderId',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'sortDir' => 'getSortDir',
            'sortKey' => 'getSortKey',
            'reportScene' => 'getReportScene',
            'cceInfoId' => 'getCceInfoId'
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
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['eip'] = isset($data['eip']) ? $data['eip'] : null;
        $this->container['operatingSystem'] = isset($data['operatingSystem']) ? $data['operatingSystem'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['group'] = isset($data['group']) ? $data['group'] : null;
        $this->container['compliantStatus'] = isset($data['compliantStatus']) ? $data['compliantStatus'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['sortDir'] = isset($data['sortDir']) ? $data['sortDir'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
        $this->container['reportScene'] = isset($data['reportScene']) ? $data['reportScene'] : null;
        $this->container['cceInfoId'] = isset($data['cceInfoId']) ? $data['cceInfoId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 1000000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 1000000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 1)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
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
    *  名称
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
    * @param string|null $name 名称
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
    *  ECS实例id
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
    * @param string|null $instanceId ECS实例id
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets ip
    *  内网ip
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
    * @param string|null $ip 内网ip
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
    * Gets operatingSystem
    *  操作系统 - HuaweiCloudEulerOS - CentOS - EulerOS
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
    * @param string|null $operatingSystem 操作系统 - HuaweiCloudEulerOS - CentOS - EulerOS
    *
    * @return $this
    */
    public function setOperatingSystem($operatingSystem)
    {
        $this->container['operatingSystem'] = $operatingSystem;
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
    * Gets compliantStatus
    *  合规性状态 - non_compliant：不合规 - compliant：合规
    *
    * @return string|null
    */
    public function getCompliantStatus()
    {
        return $this->container['compliantStatus'];
    }

    /**
    * Sets compliantStatus
    *
    * @param string|null $compliantStatus 合规性状态 - non_compliant：不合规 - compliant：合规
    *
    * @return $this
    */
    public function setCompliantStatus($compliantStatus)
    {
        $this->container['compliantStatus'] = $compliantStatus;
        return $this;
    }

    /**
    * Gets orderId
    *  工单id
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
    * @param string|null $orderId 工单id
    *
    * @return $this
    */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 偏移量
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  每页数量
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 每页数量
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets sortDir
    *  排序 - asc：升序 - desc：降序
    *
    * @return string|null
    */
    public function getSortDir()
    {
        return $this->container['sortDir'];
    }

    /**
    * Sets sortDir
    *
    * @param string|null $sortDir 排序 - asc：升序 - desc：降序
    *
    * @return $this
    */
    public function setSortDir($sortDir)
    {
        $this->container['sortDir'] = $sortDir;
        return $this;
    }

    /**
    * Gets sortKey
    *  排序字段 - report_time：报告时间
    *
    * @return string|null
    */
    public function getSortKey()
    {
        return $this->container['sortKey'];
    }

    /**
    * Sets sortKey
    *
    * @param string|null $sortKey 排序字段 - report_time：报告时间
    *
    * @return $this
    */
    public function setSortKey($sortKey)
    {
        $this->container['sortKey'] = $sortKey;
        return $this;
    }

    /**
    * Gets reportScene
    *  报告场景 - CCE  - ECS
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
    * @param string|null $reportScene 报告场景 - CCE  - ECS
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

