<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAccessControlLogsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAccessControlLogsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  租户项目id
    * fwInstanceId  防火墙实例id，创建云防火墙后用于标志防火墙由系统自动生成的标志id，可通过调用查询防火墙实例接口获得。具体可参考APIExlorer和帮助中心FAQ。
    * ruleId  规则ID
    * startTime  开始时间
    * endTime  结束时间
    * srcIp  源IP
    * srcPort  源端口
    * dstIp  目的IP
    * dstPort  目的端口
    * protocol  协议
    * app  应用协议
    * logId  文档ID,第一页为空，其他页不为空
    * nextDate  日期,第一页为空，其他页不为空
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    * limit  每页显示个数，范围为1-1024
    * logType  日志类型
    * enterpriseProjectId  企业项目id，用户支持企业项目后，由企业项目生成的id。
    * dstHost  目标主机
    * ruleName  规则名称
    * action  动作0：permit,1：deny
    * srcRegionName  源region名称
    * dstRegionName  目的region名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'fwInstanceId' => 'string',
            'ruleId' => 'string',
            'startTime' => 'int',
            'endTime' => 'int',
            'srcIp' => 'string',
            'srcPort' => 'int',
            'dstIp' => 'string',
            'dstPort' => 'int',
            'protocol' => 'string',
            'app' => 'string',
            'logId' => 'string',
            'nextDate' => 'int',
            'offset' => 'int',
            'limit' => 'int',
            'logType' => 'string',
            'enterpriseProjectId' => 'string',
            'dstHost' => 'string',
            'ruleName' => 'string',
            'action' => 'string',
            'srcRegionName' => 'string',
            'dstRegionName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  租户项目id
    * fwInstanceId  防火墙实例id，创建云防火墙后用于标志防火墙由系统自动生成的标志id，可通过调用查询防火墙实例接口获得。具体可参考APIExlorer和帮助中心FAQ。
    * ruleId  规则ID
    * startTime  开始时间
    * endTime  结束时间
    * srcIp  源IP
    * srcPort  源端口
    * dstIp  目的IP
    * dstPort  目的端口
    * protocol  协议
    * app  应用协议
    * logId  文档ID,第一页为空，其他页不为空
    * nextDate  日期,第一页为空，其他页不为空
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    * limit  每页显示个数，范围为1-1024
    * logType  日志类型
    * enterpriseProjectId  企业项目id，用户支持企业项目后，由企业项目生成的id。
    * dstHost  目标主机
    * ruleName  规则名称
    * action  动作0：permit,1：deny
    * srcRegionName  源region名称
    * dstRegionName  目的region名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'fwInstanceId' => null,
        'ruleId' => null,
        'startTime' => 'int64',
        'endTime' => 'int64',
        'srcIp' => null,
        'srcPort' => null,
        'dstIp' => null,
        'dstPort' => null,
        'protocol' => null,
        'app' => null,
        'logId' => null,
        'nextDate' => null,
        'offset' => null,
        'limit' => null,
        'logType' => null,
        'enterpriseProjectId' => null,
        'dstHost' => null,
        'ruleName' => null,
        'action' => null,
        'srcRegionName' => null,
        'dstRegionName' => null
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
    * projectId  租户项目id
    * fwInstanceId  防火墙实例id，创建云防火墙后用于标志防火墙由系统自动生成的标志id，可通过调用查询防火墙实例接口获得。具体可参考APIExlorer和帮助中心FAQ。
    * ruleId  规则ID
    * startTime  开始时间
    * endTime  结束时间
    * srcIp  源IP
    * srcPort  源端口
    * dstIp  目的IP
    * dstPort  目的端口
    * protocol  协议
    * app  应用协议
    * logId  文档ID,第一页为空，其他页不为空
    * nextDate  日期,第一页为空，其他页不为空
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    * limit  每页显示个数，范围为1-1024
    * logType  日志类型
    * enterpriseProjectId  企业项目id，用户支持企业项目后，由企业项目生成的id。
    * dstHost  目标主机
    * ruleName  规则名称
    * action  动作0：permit,1：deny
    * srcRegionName  源region名称
    * dstRegionName  目的region名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'fwInstanceId' => 'fw_instance_id',
            'ruleId' => 'rule_id',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'srcIp' => 'src_ip',
            'srcPort' => 'src_port',
            'dstIp' => 'dst_ip',
            'dstPort' => 'dst_port',
            'protocol' => 'protocol',
            'app' => 'app',
            'logId' => 'log_id',
            'nextDate' => 'next_date',
            'offset' => 'offset',
            'limit' => 'limit',
            'logType' => 'log_type',
            'enterpriseProjectId' => 'enterprise_project_id',
            'dstHost' => 'dst_host',
            'ruleName' => 'rule_name',
            'action' => 'action',
            'srcRegionName' => 'src_region_name',
            'dstRegionName' => 'dst_region_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  租户项目id
    * fwInstanceId  防火墙实例id，创建云防火墙后用于标志防火墙由系统自动生成的标志id，可通过调用查询防火墙实例接口获得。具体可参考APIExlorer和帮助中心FAQ。
    * ruleId  规则ID
    * startTime  开始时间
    * endTime  结束时间
    * srcIp  源IP
    * srcPort  源端口
    * dstIp  目的IP
    * dstPort  目的端口
    * protocol  协议
    * app  应用协议
    * logId  文档ID,第一页为空，其他页不为空
    * nextDate  日期,第一页为空，其他页不为空
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    * limit  每页显示个数，范围为1-1024
    * logType  日志类型
    * enterpriseProjectId  企业项目id，用户支持企业项目后，由企业项目生成的id。
    * dstHost  目标主机
    * ruleName  规则名称
    * action  动作0：permit,1：deny
    * srcRegionName  源region名称
    * dstRegionName  目的region名称
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'fwInstanceId' => 'setFwInstanceId',
            'ruleId' => 'setRuleId',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'srcIp' => 'setSrcIp',
            'srcPort' => 'setSrcPort',
            'dstIp' => 'setDstIp',
            'dstPort' => 'setDstPort',
            'protocol' => 'setProtocol',
            'app' => 'setApp',
            'logId' => 'setLogId',
            'nextDate' => 'setNextDate',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'logType' => 'setLogType',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'dstHost' => 'setDstHost',
            'ruleName' => 'setRuleName',
            'action' => 'setAction',
            'srcRegionName' => 'setSrcRegionName',
            'dstRegionName' => 'setDstRegionName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  租户项目id
    * fwInstanceId  防火墙实例id，创建云防火墙后用于标志防火墙由系统自动生成的标志id，可通过调用查询防火墙实例接口获得。具体可参考APIExlorer和帮助中心FAQ。
    * ruleId  规则ID
    * startTime  开始时间
    * endTime  结束时间
    * srcIp  源IP
    * srcPort  源端口
    * dstIp  目的IP
    * dstPort  目的端口
    * protocol  协议
    * app  应用协议
    * logId  文档ID,第一页为空，其他页不为空
    * nextDate  日期,第一页为空，其他页不为空
    * offset  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
    * limit  每页显示个数，范围为1-1024
    * logType  日志类型
    * enterpriseProjectId  企业项目id，用户支持企业项目后，由企业项目生成的id。
    * dstHost  目标主机
    * ruleName  规则名称
    * action  动作0：permit,1：deny
    * srcRegionName  源region名称
    * dstRegionName  目的region名称
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'fwInstanceId' => 'getFwInstanceId',
            'ruleId' => 'getRuleId',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'srcIp' => 'getSrcIp',
            'srcPort' => 'getSrcPort',
            'dstIp' => 'getDstIp',
            'dstPort' => 'getDstPort',
            'protocol' => 'getProtocol',
            'app' => 'getApp',
            'logId' => 'getLogId',
            'nextDate' => 'getNextDate',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'logType' => 'getLogType',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'dstHost' => 'getDstHost',
            'ruleName' => 'getRuleName',
            'action' => 'getAction',
            'srcRegionName' => 'getSrcRegionName',
            'dstRegionName' => 'getDstRegionName'
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
    const LOG_TYPE_INTERNET = 'internet';
    const LOG_TYPE_NAT = 'nat';
    const LOG_TYPE_VPC = 'vpc';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getLogTypeAllowableValues()
    {
        return [
            self::LOG_TYPE_INTERNET,
            self::LOG_TYPE_NAT,
            self::LOG_TYPE_VPC,
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['fwInstanceId'] = isset($data['fwInstanceId']) ? $data['fwInstanceId'] : null;
        $this->container['ruleId'] = isset($data['ruleId']) ? $data['ruleId'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['srcIp'] = isset($data['srcIp']) ? $data['srcIp'] : null;
        $this->container['srcPort'] = isset($data['srcPort']) ? $data['srcPort'] : null;
        $this->container['dstIp'] = isset($data['dstIp']) ? $data['dstIp'] : null;
        $this->container['dstPort'] = isset($data['dstPort']) ? $data['dstPort'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['app'] = isset($data['app']) ? $data['app'] : null;
        $this->container['logId'] = isset($data['logId']) ? $data['logId'] : null;
        $this->container['nextDate'] = isset($data['nextDate']) ? $data['nextDate'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['logType'] = isset($data['logType']) ? $data['logType'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['dstHost'] = isset($data['dstHost']) ? $data['dstHost'] : null;
        $this->container['ruleName'] = isset($data['ruleName']) ? $data['ruleName'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['srcRegionName'] = isset($data['srcRegionName']) ? $data['srcRegionName'] : null;
        $this->container['dstRegionName'] = isset($data['dstRegionName']) ? $data['dstRegionName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
        if ($this->container['fwInstanceId'] === null) {
            $invalidProperties[] = "'fwInstanceId' can't be null";
        }
            if (!preg_match("/^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/", $this->container['fwInstanceId'])) {
                $invalidProperties[] = "invalid value for 'fwInstanceId', must be conform to the pattern /^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/.";
            }
            if (!is_null($this->container['ruleId']) && !preg_match("/^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/", $this->container['ruleId'])) {
                $invalidProperties[] = "invalid value for 'ruleId', must be conform to the pattern /^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/.";
            }
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
        }
        if ($this->container['limit'] === null) {
            $invalidProperties[] = "'limit' can't be null";
        }
            $allowedValues = $this->getLogTypeAllowableValues();
                if (!is_null($this->container['logType']) && !in_array($this->container['logType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'logType', must be one of '%s'",
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
    * Gets projectId
    *  租户项目id
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
    * @param string $projectId 租户项目id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets fwInstanceId
    *  防火墙实例id，创建云防火墙后用于标志防火墙由系统自动生成的标志id，可通过调用查询防火墙实例接口获得。具体可参考APIExlorer和帮助中心FAQ。
    *
    * @return string
    */
    public function getFwInstanceId()
    {
        return $this->container['fwInstanceId'];
    }

    /**
    * Sets fwInstanceId
    *
    * @param string $fwInstanceId 防火墙实例id，创建云防火墙后用于标志防火墙由系统自动生成的标志id，可通过调用查询防火墙实例接口获得。具体可参考APIExlorer和帮助中心FAQ。
    *
    * @return $this
    */
    public function setFwInstanceId($fwInstanceId)
    {
        $this->container['fwInstanceId'] = $fwInstanceId;
        return $this;
    }

    /**
    * Gets ruleId
    *  规则ID
    *
    * @return string|null
    */
    public function getRuleId()
    {
        return $this->container['ruleId'];
    }

    /**
    * Sets ruleId
    *
    * @param string|null $ruleId 规则ID
    *
    * @return $this
    */
    public function setRuleId($ruleId)
    {
        $this->container['ruleId'] = $ruleId;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间
    *
    * @return int
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int $startTime 开始时间
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  结束时间
    *
    * @return int
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int $endTime 结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets srcIp
    *  源IP
    *
    * @return string|null
    */
    public function getSrcIp()
    {
        return $this->container['srcIp'];
    }

    /**
    * Sets srcIp
    *
    * @param string|null $srcIp 源IP
    *
    * @return $this
    */
    public function setSrcIp($srcIp)
    {
        $this->container['srcIp'] = $srcIp;
        return $this;
    }

    /**
    * Gets srcPort
    *  源端口
    *
    * @return int|null
    */
    public function getSrcPort()
    {
        return $this->container['srcPort'];
    }

    /**
    * Sets srcPort
    *
    * @param int|null $srcPort 源端口
    *
    * @return $this
    */
    public function setSrcPort($srcPort)
    {
        $this->container['srcPort'] = $srcPort;
        return $this;
    }

    /**
    * Gets dstIp
    *  目的IP
    *
    * @return string|null
    */
    public function getDstIp()
    {
        return $this->container['dstIp'];
    }

    /**
    * Sets dstIp
    *
    * @param string|null $dstIp 目的IP
    *
    * @return $this
    */
    public function setDstIp($dstIp)
    {
        $this->container['dstIp'] = $dstIp;
        return $this;
    }

    /**
    * Gets dstPort
    *  目的端口
    *
    * @return int|null
    */
    public function getDstPort()
    {
        return $this->container['dstPort'];
    }

    /**
    * Sets dstPort
    *
    * @param int|null $dstPort 目的端口
    *
    * @return $this
    */
    public function setDstPort($dstPort)
    {
        $this->container['dstPort'] = $dstPort;
        return $this;
    }

    /**
    * Gets protocol
    *  协议
    *
    * @return string|null
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param string|null $protocol 协议
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets app
    *  应用协议
    *
    * @return string|null
    */
    public function getApp()
    {
        return $this->container['app'];
    }

    /**
    * Sets app
    *
    * @param string|null $app 应用协议
    *
    * @return $this
    */
    public function setApp($app)
    {
        $this->container['app'] = $app;
        return $this;
    }

    /**
    * Gets logId
    *  文档ID,第一页为空，其他页不为空
    *
    * @return string|null
    */
    public function getLogId()
    {
        return $this->container['logId'];
    }

    /**
    * Sets logId
    *
    * @param string|null $logId 文档ID,第一页为空，其他页不为空
    *
    * @return $this
    */
    public function setLogId($logId)
    {
        $this->container['logId'] = $logId;
        return $this;
    }

    /**
    * Gets nextDate
    *  日期,第一页为空，其他页不为空
    *
    * @return int|null
    */
    public function getNextDate()
    {
        return $this->container['nextDate'];
    }

    /**
    * Sets nextDate
    *
    * @param int|null $nextDate 日期,第一页为空，其他页不为空
    *
    * @return $this
    */
    public function setNextDate($nextDate)
    {
        $this->container['nextDate'] = $nextDate;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
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
    * @param int|null $offset 偏移量：指定返回记录的开始位置，必须为数字，取值范围为大于或等于0，默认0
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
    *  每页显示个数，范围为1-1024
    *
    * @return int
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int $limit 每页显示个数，范围为1-1024
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets logType
    *  日志类型
    *
    * @return string|null
    */
    public function getLogType()
    {
        return $this->container['logType'];
    }

    /**
    * Sets logType
    *
    * @param string|null $logType 日志类型
    *
    * @return $this
    */
    public function setLogType($logType)
    {
        $this->container['logType'] = $logType;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目id，用户支持企业项目后，由企业项目生成的id。
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
    * @param string|null $enterpriseProjectId 企业项目id，用户支持企业项目后，由企业项目生成的id。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets dstHost
    *  目标主机
    *
    * @return string|null
    */
    public function getDstHost()
    {
        return $this->container['dstHost'];
    }

    /**
    * Sets dstHost
    *
    * @param string|null $dstHost 目标主机
    *
    * @return $this
    */
    public function setDstHost($dstHost)
    {
        $this->container['dstHost'] = $dstHost;
        return $this;
    }

    /**
    * Gets ruleName
    *  规则名称
    *
    * @return string|null
    */
    public function getRuleName()
    {
        return $this->container['ruleName'];
    }

    /**
    * Sets ruleName
    *
    * @param string|null $ruleName 规则名称
    *
    * @return $this
    */
    public function setRuleName($ruleName)
    {
        $this->container['ruleName'] = $ruleName;
        return $this;
    }

    /**
    * Gets action
    *  动作0：permit,1：deny
    *
    * @return string|null
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string|null $action 动作0：permit,1：deny
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets srcRegionName
    *  源region名称
    *
    * @return string|null
    */
    public function getSrcRegionName()
    {
        return $this->container['srcRegionName'];
    }

    /**
    * Sets srcRegionName
    *
    * @param string|null $srcRegionName 源region名称
    *
    * @return $this
    */
    public function setSrcRegionName($srcRegionName)
    {
        $this->container['srcRegionName'] = $srcRegionName;
        return $this;
    }

    /**
    * Gets dstRegionName
    *  目的region名称
    *
    * @return string|null
    */
    public function getDstRegionName()
    {
        return $this->container['dstRegionName'];
    }

    /**
    * Sets dstRegionName
    *
    * @param string|null $dstRegionName 目的region名称
    *
    * @return $this
    */
    public function setDstRegionName($dstRegionName)
    {
        $this->container['dstRegionName'] = $dstRegionName;
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

