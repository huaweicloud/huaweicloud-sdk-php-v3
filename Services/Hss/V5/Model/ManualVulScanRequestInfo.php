<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ManualVulScanRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ManualVulScanRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * manualScanType  操作类型,包含如下：   -linux_vul : linux漏洞   -windows_vul : windows漏洞   -web_cms : Web-CMS漏洞   -app_vul : 应用漏洞   -urgent_vul : 应急漏洞
    * batchFlag  是否是批量操作,为true时扫描所有支持的主机
    * rangeType  扫描主机的范围，包含如下：   -all_host : 扫描全部主机,此类型不需要填写agent_id_list   -specific_host : 扫描指定主机
    * agentIdList  主机列表
    * urgentVulIdList  扫描的应急漏洞id列表，若为空则扫描所有应急漏洞 包含如下： \"URGENT-CVE-2023-46604   Apache ActiveMQ远程代码执行漏洞\" \"URGENT-HSSVD-2020-1109  Elasticsearch 未授权访问漏洞\" \"URGENT-CVE-2022-26134   Atlassian Confluence OGNL 远程代码执行漏洞（CVE-2022-26134）\" \"URGENT-CVE-2023-22515   Atlassian Confluence Data Center and Server 权限提升漏洞(CVE-2023-22515)\" \"URGENT-CVE-2023-22518   Atlassian Confluence Data Center & Server 授权机制不恰当漏洞(CVE-2023-22518)\" \"URGENT-CVE-2023-28432   MinIO 信息泄露漏洞（CVE-2023-28432）\" \"URGENT-CVE-2023-37582   Apache RocketMQ 远程代码执行漏洞(CVE-2023-37582)\" \"URGENT-CVE-2023-33246   Apache RocketMQ 远程代码执行漏洞(CVE-2023-33246)\" \"URGENT-CNVD-2023-02709  禅道项目管理系统远程命令执行漏洞(CNVD-2023-02709)\" \"URGENT-CVE-2022-36804   Atlassian Bitbucket Server 和 Data Center 命令注入漏洞(CVE-2022-36804)\" \"URGENT-CVE-2022-22965   Spring Framework JDK >= 9 远程代码执行漏洞\" \"URGENT-CVE-2022-25845   fastjson <1.2.83 远程代码执行漏洞\" \"URGENT-CVE-2019-14439   Jackson-databind远程命令执行漏洞（CVE-2019-14439）\" \"URGENT-CVE-2020-13933   Apache Shiro身份验证绕过漏洞（CVE-2020-13933）\" \"URGENT-CVE-2020-26217   XStream < 1.4.14 远程代码执行漏洞（CVE-2020-26217）\" \"URGENT-CVE-2021-4034    Linux Polkit 权限提升漏洞预警（CVE-2021-4034）\" \"URGENT-CVE-2021-44228   Apache Log4j2 远程代码执行漏洞（CVE-2021-44228、CVE-2021-45046）\" \"URGENT-CVE-2022-0847    Dirty Pipe - Linux 内核本地提权漏洞（CVE-2022-0847）\"
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'manualScanType' => 'string[]',
            'batchFlag' => 'bool',
            'rangeType' => 'string',
            'agentIdList' => 'string[]',
            'urgentVulIdList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * manualScanType  操作类型,包含如下：   -linux_vul : linux漏洞   -windows_vul : windows漏洞   -web_cms : Web-CMS漏洞   -app_vul : 应用漏洞   -urgent_vul : 应急漏洞
    * batchFlag  是否是批量操作,为true时扫描所有支持的主机
    * rangeType  扫描主机的范围，包含如下：   -all_host : 扫描全部主机,此类型不需要填写agent_id_list   -specific_host : 扫描指定主机
    * agentIdList  主机列表
    * urgentVulIdList  扫描的应急漏洞id列表，若为空则扫描所有应急漏洞 包含如下： \"URGENT-CVE-2023-46604   Apache ActiveMQ远程代码执行漏洞\" \"URGENT-HSSVD-2020-1109  Elasticsearch 未授权访问漏洞\" \"URGENT-CVE-2022-26134   Atlassian Confluence OGNL 远程代码执行漏洞（CVE-2022-26134）\" \"URGENT-CVE-2023-22515   Atlassian Confluence Data Center and Server 权限提升漏洞(CVE-2023-22515)\" \"URGENT-CVE-2023-22518   Atlassian Confluence Data Center & Server 授权机制不恰当漏洞(CVE-2023-22518)\" \"URGENT-CVE-2023-28432   MinIO 信息泄露漏洞（CVE-2023-28432）\" \"URGENT-CVE-2023-37582   Apache RocketMQ 远程代码执行漏洞(CVE-2023-37582)\" \"URGENT-CVE-2023-33246   Apache RocketMQ 远程代码执行漏洞(CVE-2023-33246)\" \"URGENT-CNVD-2023-02709  禅道项目管理系统远程命令执行漏洞(CNVD-2023-02709)\" \"URGENT-CVE-2022-36804   Atlassian Bitbucket Server 和 Data Center 命令注入漏洞(CVE-2022-36804)\" \"URGENT-CVE-2022-22965   Spring Framework JDK >= 9 远程代码执行漏洞\" \"URGENT-CVE-2022-25845   fastjson <1.2.83 远程代码执行漏洞\" \"URGENT-CVE-2019-14439   Jackson-databind远程命令执行漏洞（CVE-2019-14439）\" \"URGENT-CVE-2020-13933   Apache Shiro身份验证绕过漏洞（CVE-2020-13933）\" \"URGENT-CVE-2020-26217   XStream < 1.4.14 远程代码执行漏洞（CVE-2020-26217）\" \"URGENT-CVE-2021-4034    Linux Polkit 权限提升漏洞预警（CVE-2021-4034）\" \"URGENT-CVE-2021-44228   Apache Log4j2 远程代码执行漏洞（CVE-2021-44228、CVE-2021-45046）\" \"URGENT-CVE-2022-0847    Dirty Pipe - Linux 内核本地提权漏洞（CVE-2022-0847）\"
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'manualScanType' => null,
        'batchFlag' => null,
        'rangeType' => null,
        'agentIdList' => null,
        'urgentVulIdList' => null
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
    * manualScanType  操作类型,包含如下：   -linux_vul : linux漏洞   -windows_vul : windows漏洞   -web_cms : Web-CMS漏洞   -app_vul : 应用漏洞   -urgent_vul : 应急漏洞
    * batchFlag  是否是批量操作,为true时扫描所有支持的主机
    * rangeType  扫描主机的范围，包含如下：   -all_host : 扫描全部主机,此类型不需要填写agent_id_list   -specific_host : 扫描指定主机
    * agentIdList  主机列表
    * urgentVulIdList  扫描的应急漏洞id列表，若为空则扫描所有应急漏洞 包含如下： \"URGENT-CVE-2023-46604   Apache ActiveMQ远程代码执行漏洞\" \"URGENT-HSSVD-2020-1109  Elasticsearch 未授权访问漏洞\" \"URGENT-CVE-2022-26134   Atlassian Confluence OGNL 远程代码执行漏洞（CVE-2022-26134）\" \"URGENT-CVE-2023-22515   Atlassian Confluence Data Center and Server 权限提升漏洞(CVE-2023-22515)\" \"URGENT-CVE-2023-22518   Atlassian Confluence Data Center & Server 授权机制不恰当漏洞(CVE-2023-22518)\" \"URGENT-CVE-2023-28432   MinIO 信息泄露漏洞（CVE-2023-28432）\" \"URGENT-CVE-2023-37582   Apache RocketMQ 远程代码执行漏洞(CVE-2023-37582)\" \"URGENT-CVE-2023-33246   Apache RocketMQ 远程代码执行漏洞(CVE-2023-33246)\" \"URGENT-CNVD-2023-02709  禅道项目管理系统远程命令执行漏洞(CNVD-2023-02709)\" \"URGENT-CVE-2022-36804   Atlassian Bitbucket Server 和 Data Center 命令注入漏洞(CVE-2022-36804)\" \"URGENT-CVE-2022-22965   Spring Framework JDK >= 9 远程代码执行漏洞\" \"URGENT-CVE-2022-25845   fastjson <1.2.83 远程代码执行漏洞\" \"URGENT-CVE-2019-14439   Jackson-databind远程命令执行漏洞（CVE-2019-14439）\" \"URGENT-CVE-2020-13933   Apache Shiro身份验证绕过漏洞（CVE-2020-13933）\" \"URGENT-CVE-2020-26217   XStream < 1.4.14 远程代码执行漏洞（CVE-2020-26217）\" \"URGENT-CVE-2021-4034    Linux Polkit 权限提升漏洞预警（CVE-2021-4034）\" \"URGENT-CVE-2021-44228   Apache Log4j2 远程代码执行漏洞（CVE-2021-44228、CVE-2021-45046）\" \"URGENT-CVE-2022-0847    Dirty Pipe - Linux 内核本地提权漏洞（CVE-2022-0847）\"
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'manualScanType' => 'manual_scan_type',
            'batchFlag' => 'batch_flag',
            'rangeType' => 'range_type',
            'agentIdList' => 'agent_id_list',
            'urgentVulIdList' => 'urgent_vul_id_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * manualScanType  操作类型,包含如下：   -linux_vul : linux漏洞   -windows_vul : windows漏洞   -web_cms : Web-CMS漏洞   -app_vul : 应用漏洞   -urgent_vul : 应急漏洞
    * batchFlag  是否是批量操作,为true时扫描所有支持的主机
    * rangeType  扫描主机的范围，包含如下：   -all_host : 扫描全部主机,此类型不需要填写agent_id_list   -specific_host : 扫描指定主机
    * agentIdList  主机列表
    * urgentVulIdList  扫描的应急漏洞id列表，若为空则扫描所有应急漏洞 包含如下： \"URGENT-CVE-2023-46604   Apache ActiveMQ远程代码执行漏洞\" \"URGENT-HSSVD-2020-1109  Elasticsearch 未授权访问漏洞\" \"URGENT-CVE-2022-26134   Atlassian Confluence OGNL 远程代码执行漏洞（CVE-2022-26134）\" \"URGENT-CVE-2023-22515   Atlassian Confluence Data Center and Server 权限提升漏洞(CVE-2023-22515)\" \"URGENT-CVE-2023-22518   Atlassian Confluence Data Center & Server 授权机制不恰当漏洞(CVE-2023-22518)\" \"URGENT-CVE-2023-28432   MinIO 信息泄露漏洞（CVE-2023-28432）\" \"URGENT-CVE-2023-37582   Apache RocketMQ 远程代码执行漏洞(CVE-2023-37582)\" \"URGENT-CVE-2023-33246   Apache RocketMQ 远程代码执行漏洞(CVE-2023-33246)\" \"URGENT-CNVD-2023-02709  禅道项目管理系统远程命令执行漏洞(CNVD-2023-02709)\" \"URGENT-CVE-2022-36804   Atlassian Bitbucket Server 和 Data Center 命令注入漏洞(CVE-2022-36804)\" \"URGENT-CVE-2022-22965   Spring Framework JDK >= 9 远程代码执行漏洞\" \"URGENT-CVE-2022-25845   fastjson <1.2.83 远程代码执行漏洞\" \"URGENT-CVE-2019-14439   Jackson-databind远程命令执行漏洞（CVE-2019-14439）\" \"URGENT-CVE-2020-13933   Apache Shiro身份验证绕过漏洞（CVE-2020-13933）\" \"URGENT-CVE-2020-26217   XStream < 1.4.14 远程代码执行漏洞（CVE-2020-26217）\" \"URGENT-CVE-2021-4034    Linux Polkit 权限提升漏洞预警（CVE-2021-4034）\" \"URGENT-CVE-2021-44228   Apache Log4j2 远程代码执行漏洞（CVE-2021-44228、CVE-2021-45046）\" \"URGENT-CVE-2022-0847    Dirty Pipe - Linux 内核本地提权漏洞（CVE-2022-0847）\"
    *
    * @var string[]
    */
    protected static $setters = [
            'manualScanType' => 'setManualScanType',
            'batchFlag' => 'setBatchFlag',
            'rangeType' => 'setRangeType',
            'agentIdList' => 'setAgentIdList',
            'urgentVulIdList' => 'setUrgentVulIdList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * manualScanType  操作类型,包含如下：   -linux_vul : linux漏洞   -windows_vul : windows漏洞   -web_cms : Web-CMS漏洞   -app_vul : 应用漏洞   -urgent_vul : 应急漏洞
    * batchFlag  是否是批量操作,为true时扫描所有支持的主机
    * rangeType  扫描主机的范围，包含如下：   -all_host : 扫描全部主机,此类型不需要填写agent_id_list   -specific_host : 扫描指定主机
    * agentIdList  主机列表
    * urgentVulIdList  扫描的应急漏洞id列表，若为空则扫描所有应急漏洞 包含如下： \"URGENT-CVE-2023-46604   Apache ActiveMQ远程代码执行漏洞\" \"URGENT-HSSVD-2020-1109  Elasticsearch 未授权访问漏洞\" \"URGENT-CVE-2022-26134   Atlassian Confluence OGNL 远程代码执行漏洞（CVE-2022-26134）\" \"URGENT-CVE-2023-22515   Atlassian Confluence Data Center and Server 权限提升漏洞(CVE-2023-22515)\" \"URGENT-CVE-2023-22518   Atlassian Confluence Data Center & Server 授权机制不恰当漏洞(CVE-2023-22518)\" \"URGENT-CVE-2023-28432   MinIO 信息泄露漏洞（CVE-2023-28432）\" \"URGENT-CVE-2023-37582   Apache RocketMQ 远程代码执行漏洞(CVE-2023-37582)\" \"URGENT-CVE-2023-33246   Apache RocketMQ 远程代码执行漏洞(CVE-2023-33246)\" \"URGENT-CNVD-2023-02709  禅道项目管理系统远程命令执行漏洞(CNVD-2023-02709)\" \"URGENT-CVE-2022-36804   Atlassian Bitbucket Server 和 Data Center 命令注入漏洞(CVE-2022-36804)\" \"URGENT-CVE-2022-22965   Spring Framework JDK >= 9 远程代码执行漏洞\" \"URGENT-CVE-2022-25845   fastjson <1.2.83 远程代码执行漏洞\" \"URGENT-CVE-2019-14439   Jackson-databind远程命令执行漏洞（CVE-2019-14439）\" \"URGENT-CVE-2020-13933   Apache Shiro身份验证绕过漏洞（CVE-2020-13933）\" \"URGENT-CVE-2020-26217   XStream < 1.4.14 远程代码执行漏洞（CVE-2020-26217）\" \"URGENT-CVE-2021-4034    Linux Polkit 权限提升漏洞预警（CVE-2021-4034）\" \"URGENT-CVE-2021-44228   Apache Log4j2 远程代码执行漏洞（CVE-2021-44228、CVE-2021-45046）\" \"URGENT-CVE-2022-0847    Dirty Pipe - Linux 内核本地提权漏洞（CVE-2022-0847）\"
    *
    * @var string[]
    */
    protected static $getters = [
            'manualScanType' => 'getManualScanType',
            'batchFlag' => 'getBatchFlag',
            'rangeType' => 'getRangeType',
            'agentIdList' => 'getAgentIdList',
            'urgentVulIdList' => 'getUrgentVulIdList'
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
    const MANUAL_SCAN_TYPE_LINUX_VUL = 'linux_vul';
    const MANUAL_SCAN_TYPE_WINDOWS_VUL = 'windows_vul';
    const MANUAL_SCAN_TYPE_WEB_CMS = 'web_cms';
    const MANUAL_SCAN_TYPE_APP_VUL = 'app_vul';
    const MANUAL_SCAN_TYPE_URGENT_VUL = 'urgent_vul';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getManualScanTypeAllowableValues()
    {
        return [
            self::MANUAL_SCAN_TYPE_LINUX_VUL,
            self::MANUAL_SCAN_TYPE_WINDOWS_VUL,
            self::MANUAL_SCAN_TYPE_WEB_CMS,
            self::MANUAL_SCAN_TYPE_APP_VUL,
            self::MANUAL_SCAN_TYPE_URGENT_VUL,
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
        $this->container['manualScanType'] = isset($data['manualScanType']) ? $data['manualScanType'] : null;
        $this->container['batchFlag'] = isset($data['batchFlag']) ? $data['batchFlag'] : null;
        $this->container['rangeType'] = isset($data['rangeType']) ? $data['rangeType'] : null;
        $this->container['agentIdList'] = isset($data['agentIdList']) ? $data['agentIdList'] : null;
        $this->container['urgentVulIdList'] = isset($data['urgentVulIdList']) ? $data['urgentVulIdList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['rangeType']) && (mb_strlen($this->container['rangeType']) > 32)) {
                $invalidProperties[] = "invalid value for 'rangeType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['rangeType']) && (mb_strlen($this->container['rangeType']) < 0)) {
                $invalidProperties[] = "invalid value for 'rangeType', the character length must be bigger than or equal to 0.";
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
    * Gets manualScanType
    *  操作类型,包含如下：   -linux_vul : linux漏洞   -windows_vul : windows漏洞   -web_cms : Web-CMS漏洞   -app_vul : 应用漏洞   -urgent_vul : 应急漏洞
    *
    * @return string[]|null
    */
    public function getManualScanType()
    {
        return $this->container['manualScanType'];
    }

    /**
    * Sets manualScanType
    *
    * @param string[]|null $manualScanType 操作类型,包含如下：   -linux_vul : linux漏洞   -windows_vul : windows漏洞   -web_cms : Web-CMS漏洞   -app_vul : 应用漏洞   -urgent_vul : 应急漏洞
    *
    * @return $this
    */
    public function setManualScanType($manualScanType)
    {
        $this->container['manualScanType'] = $manualScanType;
        return $this;
    }

    /**
    * Gets batchFlag
    *  是否是批量操作,为true时扫描所有支持的主机
    *
    * @return bool|null
    */
    public function getBatchFlag()
    {
        return $this->container['batchFlag'];
    }

    /**
    * Sets batchFlag
    *
    * @param bool|null $batchFlag 是否是批量操作,为true时扫描所有支持的主机
    *
    * @return $this
    */
    public function setBatchFlag($batchFlag)
    {
        $this->container['batchFlag'] = $batchFlag;
        return $this;
    }

    /**
    * Gets rangeType
    *  扫描主机的范围，包含如下：   -all_host : 扫描全部主机,此类型不需要填写agent_id_list   -specific_host : 扫描指定主机
    *
    * @return string|null
    */
    public function getRangeType()
    {
        return $this->container['rangeType'];
    }

    /**
    * Sets rangeType
    *
    * @param string|null $rangeType 扫描主机的范围，包含如下：   -all_host : 扫描全部主机,此类型不需要填写agent_id_list   -specific_host : 扫描指定主机
    *
    * @return $this
    */
    public function setRangeType($rangeType)
    {
        $this->container['rangeType'] = $rangeType;
        return $this;
    }

    /**
    * Gets agentIdList
    *  主机列表
    *
    * @return string[]|null
    */
    public function getAgentIdList()
    {
        return $this->container['agentIdList'];
    }

    /**
    * Sets agentIdList
    *
    * @param string[]|null $agentIdList 主机列表
    *
    * @return $this
    */
    public function setAgentIdList($agentIdList)
    {
        $this->container['agentIdList'] = $agentIdList;
        return $this;
    }

    /**
    * Gets urgentVulIdList
    *  扫描的应急漏洞id列表，若为空则扫描所有应急漏洞 包含如下： \"URGENT-CVE-2023-46604   Apache ActiveMQ远程代码执行漏洞\" \"URGENT-HSSVD-2020-1109  Elasticsearch 未授权访问漏洞\" \"URGENT-CVE-2022-26134   Atlassian Confluence OGNL 远程代码执行漏洞（CVE-2022-26134）\" \"URGENT-CVE-2023-22515   Atlassian Confluence Data Center and Server 权限提升漏洞(CVE-2023-22515)\" \"URGENT-CVE-2023-22518   Atlassian Confluence Data Center & Server 授权机制不恰当漏洞(CVE-2023-22518)\" \"URGENT-CVE-2023-28432   MinIO 信息泄露漏洞（CVE-2023-28432）\" \"URGENT-CVE-2023-37582   Apache RocketMQ 远程代码执行漏洞(CVE-2023-37582)\" \"URGENT-CVE-2023-33246   Apache RocketMQ 远程代码执行漏洞(CVE-2023-33246)\" \"URGENT-CNVD-2023-02709  禅道项目管理系统远程命令执行漏洞(CNVD-2023-02709)\" \"URGENT-CVE-2022-36804   Atlassian Bitbucket Server 和 Data Center 命令注入漏洞(CVE-2022-36804)\" \"URGENT-CVE-2022-22965   Spring Framework JDK >= 9 远程代码执行漏洞\" \"URGENT-CVE-2022-25845   fastjson <1.2.83 远程代码执行漏洞\" \"URGENT-CVE-2019-14439   Jackson-databind远程命令执行漏洞（CVE-2019-14439）\" \"URGENT-CVE-2020-13933   Apache Shiro身份验证绕过漏洞（CVE-2020-13933）\" \"URGENT-CVE-2020-26217   XStream < 1.4.14 远程代码执行漏洞（CVE-2020-26217）\" \"URGENT-CVE-2021-4034    Linux Polkit 权限提升漏洞预警（CVE-2021-4034）\" \"URGENT-CVE-2021-44228   Apache Log4j2 远程代码执行漏洞（CVE-2021-44228、CVE-2021-45046）\" \"URGENT-CVE-2022-0847    Dirty Pipe - Linux 内核本地提权漏洞（CVE-2022-0847）\"
    *
    * @return string[]|null
    */
    public function getUrgentVulIdList()
    {
        return $this->container['urgentVulIdList'];
    }

    /**
    * Sets urgentVulIdList
    *
    * @param string[]|null $urgentVulIdList 扫描的应急漏洞id列表，若为空则扫描所有应急漏洞 包含如下： \"URGENT-CVE-2023-46604   Apache ActiveMQ远程代码执行漏洞\" \"URGENT-HSSVD-2020-1109  Elasticsearch 未授权访问漏洞\" \"URGENT-CVE-2022-26134   Atlassian Confluence OGNL 远程代码执行漏洞（CVE-2022-26134）\" \"URGENT-CVE-2023-22515   Atlassian Confluence Data Center and Server 权限提升漏洞(CVE-2023-22515)\" \"URGENT-CVE-2023-22518   Atlassian Confluence Data Center & Server 授权机制不恰当漏洞(CVE-2023-22518)\" \"URGENT-CVE-2023-28432   MinIO 信息泄露漏洞（CVE-2023-28432）\" \"URGENT-CVE-2023-37582   Apache RocketMQ 远程代码执行漏洞(CVE-2023-37582)\" \"URGENT-CVE-2023-33246   Apache RocketMQ 远程代码执行漏洞(CVE-2023-33246)\" \"URGENT-CNVD-2023-02709  禅道项目管理系统远程命令执行漏洞(CNVD-2023-02709)\" \"URGENT-CVE-2022-36804   Atlassian Bitbucket Server 和 Data Center 命令注入漏洞(CVE-2022-36804)\" \"URGENT-CVE-2022-22965   Spring Framework JDK >= 9 远程代码执行漏洞\" \"URGENT-CVE-2022-25845   fastjson <1.2.83 远程代码执行漏洞\" \"URGENT-CVE-2019-14439   Jackson-databind远程命令执行漏洞（CVE-2019-14439）\" \"URGENT-CVE-2020-13933   Apache Shiro身份验证绕过漏洞（CVE-2020-13933）\" \"URGENT-CVE-2020-26217   XStream < 1.4.14 远程代码执行漏洞（CVE-2020-26217）\" \"URGENT-CVE-2021-4034    Linux Polkit 权限提升漏洞预警（CVE-2021-4034）\" \"URGENT-CVE-2021-44228   Apache Log4j2 远程代码执行漏洞（CVE-2021-44228、CVE-2021-45046）\" \"URGENT-CVE-2022-0847    Dirty Pipe - Linux 内核本地提权漏洞（CVE-2022-0847）\"
    *
    * @return $this
    */
    public function setUrgentVulIdList($urgentVulIdList)
    {
        $this->container['urgentVulIdList'] = $urgentVulIdList;
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

