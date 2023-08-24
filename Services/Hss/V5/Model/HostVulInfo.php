<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HostVulInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HostVulInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vulName  漏洞名称
    * vulId  漏洞ID
    * labelList  漏洞标签列表
    * repairNecessity  修复紧急度，包括如下：   - immediate_repair : 尽快修复   - delay_repair : 延后修复   - not_needed_repair : 暂可不修复
    * scanTime  最近扫描时间
    * type  漏洞类型，包含如下：   -linux_vul : linux漏洞   -windows_vul : windows漏洞   -web_cms : Web-CMS漏洞   -app_vul : 应用漏洞
    * appList  服务器上受该漏洞影响的软件列表
    * severityLevel  危险程度   - Critical : 致命   - High : 高危   - Medium : 中危   - Low : 低危
    * solutionDetail  解决方案
    * url  URL链接
    * description  漏洞描述
    * repairCmd  修复命令行
    * status  漏洞状态   - vul_status_unfix : 未处理   - vul_status_ignored : 已忽略   - vul_status_verified : 验证中   - vul_status_fixing : 修复中   - vul_status_fixed : 修复成功   - vul_status_reboot : 修复成功待重启   - vul_status_failed : 修复失败   - vul_status_fix_after_reboot : 请重启主机再次修复
    * repairSuccessNum  HSS全网修复该漏洞的次数
    * cveList  CVE列表
    * isAffectBusiness  是否影响业务
    * firstScanTime  首次扫描时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vulName' => 'string',
            'vulId' => 'string',
            'labelList' => 'string[]',
            'repairNecessity' => 'string',
            'scanTime' => 'int',
            'type' => 'string',
            'appList' => '\HuaweiCloud\SDK\Hss\V5\Model\HostVulInfoAppList[]',
            'severityLevel' => 'string',
            'solutionDetail' => 'string',
            'url' => 'string',
            'description' => 'string',
            'repairCmd' => 'string',
            'status' => 'string',
            'repairSuccessNum' => 'int',
            'cveList' => '\HuaweiCloud\SDK\Hss\V5\Model\HostVulInfoCveList[]',
            'isAffectBusiness' => 'bool',
            'firstScanTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vulName  漏洞名称
    * vulId  漏洞ID
    * labelList  漏洞标签列表
    * repairNecessity  修复紧急度，包括如下：   - immediate_repair : 尽快修复   - delay_repair : 延后修复   - not_needed_repair : 暂可不修复
    * scanTime  最近扫描时间
    * type  漏洞类型，包含如下：   -linux_vul : linux漏洞   -windows_vul : windows漏洞   -web_cms : Web-CMS漏洞   -app_vul : 应用漏洞
    * appList  服务器上受该漏洞影响的软件列表
    * severityLevel  危险程度   - Critical : 致命   - High : 高危   - Medium : 中危   - Low : 低危
    * solutionDetail  解决方案
    * url  URL链接
    * description  漏洞描述
    * repairCmd  修复命令行
    * status  漏洞状态   - vul_status_unfix : 未处理   - vul_status_ignored : 已忽略   - vul_status_verified : 验证中   - vul_status_fixing : 修复中   - vul_status_fixed : 修复成功   - vul_status_reboot : 修复成功待重启   - vul_status_failed : 修复失败   - vul_status_fix_after_reboot : 请重启主机再次修复
    * repairSuccessNum  HSS全网修复该漏洞的次数
    * cveList  CVE列表
    * isAffectBusiness  是否影响业务
    * firstScanTime  首次扫描时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vulName' => null,
        'vulId' => null,
        'labelList' => null,
        'repairNecessity' => null,
        'scanTime' => 'int64',
        'type' => null,
        'appList' => null,
        'severityLevel' => null,
        'solutionDetail' => null,
        'url' => null,
        'description' => null,
        'repairCmd' => null,
        'status' => null,
        'repairSuccessNum' => 'int32',
        'cveList' => null,
        'isAffectBusiness' => null,
        'firstScanTime' => 'int64'
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
    * vulName  漏洞名称
    * vulId  漏洞ID
    * labelList  漏洞标签列表
    * repairNecessity  修复紧急度，包括如下：   - immediate_repair : 尽快修复   - delay_repair : 延后修复   - not_needed_repair : 暂可不修复
    * scanTime  最近扫描时间
    * type  漏洞类型，包含如下：   -linux_vul : linux漏洞   -windows_vul : windows漏洞   -web_cms : Web-CMS漏洞   -app_vul : 应用漏洞
    * appList  服务器上受该漏洞影响的软件列表
    * severityLevel  危险程度   - Critical : 致命   - High : 高危   - Medium : 中危   - Low : 低危
    * solutionDetail  解决方案
    * url  URL链接
    * description  漏洞描述
    * repairCmd  修复命令行
    * status  漏洞状态   - vul_status_unfix : 未处理   - vul_status_ignored : 已忽略   - vul_status_verified : 验证中   - vul_status_fixing : 修复中   - vul_status_fixed : 修复成功   - vul_status_reboot : 修复成功待重启   - vul_status_failed : 修复失败   - vul_status_fix_after_reboot : 请重启主机再次修复
    * repairSuccessNum  HSS全网修复该漏洞的次数
    * cveList  CVE列表
    * isAffectBusiness  是否影响业务
    * firstScanTime  首次扫描时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vulName' => 'vul_name',
            'vulId' => 'vul_id',
            'labelList' => 'label_list',
            'repairNecessity' => 'repair_necessity',
            'scanTime' => 'scan_time',
            'type' => 'type',
            'appList' => 'app_list',
            'severityLevel' => 'severity_level',
            'solutionDetail' => 'solution_detail',
            'url' => 'url',
            'description' => 'description',
            'repairCmd' => 'repair_cmd',
            'status' => 'status',
            'repairSuccessNum' => 'repair_success_num',
            'cveList' => 'cve_list',
            'isAffectBusiness' => 'is_affect_business',
            'firstScanTime' => 'first_scan_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vulName  漏洞名称
    * vulId  漏洞ID
    * labelList  漏洞标签列表
    * repairNecessity  修复紧急度，包括如下：   - immediate_repair : 尽快修复   - delay_repair : 延后修复   - not_needed_repair : 暂可不修复
    * scanTime  最近扫描时间
    * type  漏洞类型，包含如下：   -linux_vul : linux漏洞   -windows_vul : windows漏洞   -web_cms : Web-CMS漏洞   -app_vul : 应用漏洞
    * appList  服务器上受该漏洞影响的软件列表
    * severityLevel  危险程度   - Critical : 致命   - High : 高危   - Medium : 中危   - Low : 低危
    * solutionDetail  解决方案
    * url  URL链接
    * description  漏洞描述
    * repairCmd  修复命令行
    * status  漏洞状态   - vul_status_unfix : 未处理   - vul_status_ignored : 已忽略   - vul_status_verified : 验证中   - vul_status_fixing : 修复中   - vul_status_fixed : 修复成功   - vul_status_reboot : 修复成功待重启   - vul_status_failed : 修复失败   - vul_status_fix_after_reboot : 请重启主机再次修复
    * repairSuccessNum  HSS全网修复该漏洞的次数
    * cveList  CVE列表
    * isAffectBusiness  是否影响业务
    * firstScanTime  首次扫描时间
    *
    * @var string[]
    */
    protected static $setters = [
            'vulName' => 'setVulName',
            'vulId' => 'setVulId',
            'labelList' => 'setLabelList',
            'repairNecessity' => 'setRepairNecessity',
            'scanTime' => 'setScanTime',
            'type' => 'setType',
            'appList' => 'setAppList',
            'severityLevel' => 'setSeverityLevel',
            'solutionDetail' => 'setSolutionDetail',
            'url' => 'setUrl',
            'description' => 'setDescription',
            'repairCmd' => 'setRepairCmd',
            'status' => 'setStatus',
            'repairSuccessNum' => 'setRepairSuccessNum',
            'cveList' => 'setCveList',
            'isAffectBusiness' => 'setIsAffectBusiness',
            'firstScanTime' => 'setFirstScanTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vulName  漏洞名称
    * vulId  漏洞ID
    * labelList  漏洞标签列表
    * repairNecessity  修复紧急度，包括如下：   - immediate_repair : 尽快修复   - delay_repair : 延后修复   - not_needed_repair : 暂可不修复
    * scanTime  最近扫描时间
    * type  漏洞类型，包含如下：   -linux_vul : linux漏洞   -windows_vul : windows漏洞   -web_cms : Web-CMS漏洞   -app_vul : 应用漏洞
    * appList  服务器上受该漏洞影响的软件列表
    * severityLevel  危险程度   - Critical : 致命   - High : 高危   - Medium : 中危   - Low : 低危
    * solutionDetail  解决方案
    * url  URL链接
    * description  漏洞描述
    * repairCmd  修复命令行
    * status  漏洞状态   - vul_status_unfix : 未处理   - vul_status_ignored : 已忽略   - vul_status_verified : 验证中   - vul_status_fixing : 修复中   - vul_status_fixed : 修复成功   - vul_status_reboot : 修复成功待重启   - vul_status_failed : 修复失败   - vul_status_fix_after_reboot : 请重启主机再次修复
    * repairSuccessNum  HSS全网修复该漏洞的次数
    * cveList  CVE列表
    * isAffectBusiness  是否影响业务
    * firstScanTime  首次扫描时间
    *
    * @var string[]
    */
    protected static $getters = [
            'vulName' => 'getVulName',
            'vulId' => 'getVulId',
            'labelList' => 'getLabelList',
            'repairNecessity' => 'getRepairNecessity',
            'scanTime' => 'getScanTime',
            'type' => 'getType',
            'appList' => 'getAppList',
            'severityLevel' => 'getSeverityLevel',
            'solutionDetail' => 'getSolutionDetail',
            'url' => 'getUrl',
            'description' => 'getDescription',
            'repairCmd' => 'getRepairCmd',
            'status' => 'getStatus',
            'repairSuccessNum' => 'getRepairSuccessNum',
            'cveList' => 'getCveList',
            'isAffectBusiness' => 'getIsAffectBusiness',
            'firstScanTime' => 'getFirstScanTime'
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
        $this->container['vulName'] = isset($data['vulName']) ? $data['vulName'] : null;
        $this->container['vulId'] = isset($data['vulId']) ? $data['vulId'] : null;
        $this->container['labelList'] = isset($data['labelList']) ? $data['labelList'] : null;
        $this->container['repairNecessity'] = isset($data['repairNecessity']) ? $data['repairNecessity'] : null;
        $this->container['scanTime'] = isset($data['scanTime']) ? $data['scanTime'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['appList'] = isset($data['appList']) ? $data['appList'] : null;
        $this->container['severityLevel'] = isset($data['severityLevel']) ? $data['severityLevel'] : null;
        $this->container['solutionDetail'] = isset($data['solutionDetail']) ? $data['solutionDetail'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['repairCmd'] = isset($data['repairCmd']) ? $data['repairCmd'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['repairSuccessNum'] = isset($data['repairSuccessNum']) ? $data['repairSuccessNum'] : null;
        $this->container['cveList'] = isset($data['cveList']) ? $data['cveList'] : null;
        $this->container['isAffectBusiness'] = isset($data['isAffectBusiness']) ? $data['isAffectBusiness'] : null;
        $this->container['firstScanTime'] = isset($data['firstScanTime']) ? $data['firstScanTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['vulName']) && (mb_strlen($this->container['vulName']) > 256)) {
                $invalidProperties[] = "invalid value for 'vulName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['vulName']) && (mb_strlen($this->container['vulName']) < 0)) {
                $invalidProperties[] = "invalid value for 'vulName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vulId']) && (mb_strlen($this->container['vulId']) > 64)) {
                $invalidProperties[] = "invalid value for 'vulId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['vulId']) && (mb_strlen($this->container['vulId']) < 0)) {
                $invalidProperties[] = "invalid value for 'vulId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['repairNecessity']) && (mb_strlen($this->container['repairNecessity']) > 64)) {
                $invalidProperties[] = "invalid value for 'repairNecessity', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['repairNecessity']) && (mb_strlen($this->container['repairNecessity']) < 0)) {
                $invalidProperties[] = "invalid value for 'repairNecessity', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scanTime']) && ($this->container['scanTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'scanTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['scanTime']) && ($this->container['scanTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'scanTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 128)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 0)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['severityLevel']) && (mb_strlen($this->container['severityLevel']) > 128)) {
                $invalidProperties[] = "invalid value for 'severityLevel', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['severityLevel']) && (mb_strlen($this->container['severityLevel']) < 1)) {
                $invalidProperties[] = "invalid value for 'severityLevel', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['solutionDetail']) && (mb_strlen($this->container['solutionDetail']) > 65534)) {
                $invalidProperties[] = "invalid value for 'solutionDetail', the character length must be smaller than or equal to 65534.";
            }
            if (!is_null($this->container['solutionDetail']) && (mb_strlen($this->container['solutionDetail']) < 0)) {
                $invalidProperties[] = "invalid value for 'solutionDetail', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['url']) && (mb_strlen($this->container['url']) > 2083)) {
                $invalidProperties[] = "invalid value for 'url', the character length must be smaller than or equal to 2083.";
            }
            if (!is_null($this->container['url']) && (mb_strlen($this->container['url']) < 0)) {
                $invalidProperties[] = "invalid value for 'url', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 65534)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 65534.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['repairCmd']) && (mb_strlen($this->container['repairCmd']) > 256)) {
                $invalidProperties[] = "invalid value for 'repairCmd', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['repairCmd']) && (mb_strlen($this->container['repairCmd']) < 1)) {
                $invalidProperties[] = "invalid value for 'repairCmd', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 128)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 1)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['repairSuccessNum']) && ($this->container['repairSuccessNum'] > 1000000)) {
                $invalidProperties[] = "invalid value for 'repairSuccessNum', must be smaller than or equal to 1000000.";
            }
            if (!is_null($this->container['repairSuccessNum']) && ($this->container['repairSuccessNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'repairSuccessNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['firstScanTime']) && ($this->container['firstScanTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'firstScanTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['firstScanTime']) && ($this->container['firstScanTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'firstScanTime', must be bigger than or equal to 0.";
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
    * Gets vulName
    *  漏洞名称
    *
    * @return string|null
    */
    public function getVulName()
    {
        return $this->container['vulName'];
    }

    /**
    * Sets vulName
    *
    * @param string|null $vulName 漏洞名称
    *
    * @return $this
    */
    public function setVulName($vulName)
    {
        $this->container['vulName'] = $vulName;
        return $this;
    }

    /**
    * Gets vulId
    *  漏洞ID
    *
    * @return string|null
    */
    public function getVulId()
    {
        return $this->container['vulId'];
    }

    /**
    * Sets vulId
    *
    * @param string|null $vulId 漏洞ID
    *
    * @return $this
    */
    public function setVulId($vulId)
    {
        $this->container['vulId'] = $vulId;
        return $this;
    }

    /**
    * Gets labelList
    *  漏洞标签列表
    *
    * @return string[]|null
    */
    public function getLabelList()
    {
        return $this->container['labelList'];
    }

    /**
    * Sets labelList
    *
    * @param string[]|null $labelList 漏洞标签列表
    *
    * @return $this
    */
    public function setLabelList($labelList)
    {
        $this->container['labelList'] = $labelList;
        return $this;
    }

    /**
    * Gets repairNecessity
    *  修复紧急度，包括如下：   - immediate_repair : 尽快修复   - delay_repair : 延后修复   - not_needed_repair : 暂可不修复
    *
    * @return string|null
    */
    public function getRepairNecessity()
    {
        return $this->container['repairNecessity'];
    }

    /**
    * Sets repairNecessity
    *
    * @param string|null $repairNecessity 修复紧急度，包括如下：   - immediate_repair : 尽快修复   - delay_repair : 延后修复   - not_needed_repair : 暂可不修复
    *
    * @return $this
    */
    public function setRepairNecessity($repairNecessity)
    {
        $this->container['repairNecessity'] = $repairNecessity;
        return $this;
    }

    /**
    * Gets scanTime
    *  最近扫描时间
    *
    * @return int|null
    */
    public function getScanTime()
    {
        return $this->container['scanTime'];
    }

    /**
    * Sets scanTime
    *
    * @param int|null $scanTime 最近扫描时间
    *
    * @return $this
    */
    public function setScanTime($scanTime)
    {
        $this->container['scanTime'] = $scanTime;
        return $this;
    }

    /**
    * Gets type
    *  漏洞类型，包含如下：   -linux_vul : linux漏洞   -windows_vul : windows漏洞   -web_cms : Web-CMS漏洞   -app_vul : 应用漏洞
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
    * @param string|null $type 漏洞类型，包含如下：   -linux_vul : linux漏洞   -windows_vul : windows漏洞   -web_cms : Web-CMS漏洞   -app_vul : 应用漏洞
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets appList
    *  服务器上受该漏洞影响的软件列表
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\HostVulInfoAppList[]|null
    */
    public function getAppList()
    {
        return $this->container['appList'];
    }

    /**
    * Sets appList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\HostVulInfoAppList[]|null $appList 服务器上受该漏洞影响的软件列表
    *
    * @return $this
    */
    public function setAppList($appList)
    {
        $this->container['appList'] = $appList;
        return $this;
    }

    /**
    * Gets severityLevel
    *  危险程度   - Critical : 致命   - High : 高危   - Medium : 中危   - Low : 低危
    *
    * @return string|null
    */
    public function getSeverityLevel()
    {
        return $this->container['severityLevel'];
    }

    /**
    * Sets severityLevel
    *
    * @param string|null $severityLevel 危险程度   - Critical : 致命   - High : 高危   - Medium : 中危   - Low : 低危
    *
    * @return $this
    */
    public function setSeverityLevel($severityLevel)
    {
        $this->container['severityLevel'] = $severityLevel;
        return $this;
    }

    /**
    * Gets solutionDetail
    *  解决方案
    *
    * @return string|null
    */
    public function getSolutionDetail()
    {
        return $this->container['solutionDetail'];
    }

    /**
    * Sets solutionDetail
    *
    * @param string|null $solutionDetail 解决方案
    *
    * @return $this
    */
    public function setSolutionDetail($solutionDetail)
    {
        $this->container['solutionDetail'] = $solutionDetail;
        return $this;
    }

    /**
    * Gets url
    *  URL链接
    *
    * @return string|null
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string|null $url URL链接
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets description
    *  漏洞描述
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
    * @param string|null $description 漏洞描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets repairCmd
    *  修复命令行
    *
    * @return string|null
    */
    public function getRepairCmd()
    {
        return $this->container['repairCmd'];
    }

    /**
    * Sets repairCmd
    *
    * @param string|null $repairCmd 修复命令行
    *
    * @return $this
    */
    public function setRepairCmd($repairCmd)
    {
        $this->container['repairCmd'] = $repairCmd;
        return $this;
    }

    /**
    * Gets status
    *  漏洞状态   - vul_status_unfix : 未处理   - vul_status_ignored : 已忽略   - vul_status_verified : 验证中   - vul_status_fixing : 修复中   - vul_status_fixed : 修复成功   - vul_status_reboot : 修复成功待重启   - vul_status_failed : 修复失败   - vul_status_fix_after_reboot : 请重启主机再次修复
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
    * @param string|null $status 漏洞状态   - vul_status_unfix : 未处理   - vul_status_ignored : 已忽略   - vul_status_verified : 验证中   - vul_status_fixing : 修复中   - vul_status_fixed : 修复成功   - vul_status_reboot : 修复成功待重启   - vul_status_failed : 修复失败   - vul_status_fix_after_reboot : 请重启主机再次修复
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets repairSuccessNum
    *  HSS全网修复该漏洞的次数
    *
    * @return int|null
    */
    public function getRepairSuccessNum()
    {
        return $this->container['repairSuccessNum'];
    }

    /**
    * Sets repairSuccessNum
    *
    * @param int|null $repairSuccessNum HSS全网修复该漏洞的次数
    *
    * @return $this
    */
    public function setRepairSuccessNum($repairSuccessNum)
    {
        $this->container['repairSuccessNum'] = $repairSuccessNum;
        return $this;
    }

    /**
    * Gets cveList
    *  CVE列表
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\HostVulInfoCveList[]|null
    */
    public function getCveList()
    {
        return $this->container['cveList'];
    }

    /**
    * Sets cveList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\HostVulInfoCveList[]|null $cveList CVE列表
    *
    * @return $this
    */
    public function setCveList($cveList)
    {
        $this->container['cveList'] = $cveList;
        return $this;
    }

    /**
    * Gets isAffectBusiness
    *  是否影响业务
    *
    * @return bool|null
    */
    public function getIsAffectBusiness()
    {
        return $this->container['isAffectBusiness'];
    }

    /**
    * Sets isAffectBusiness
    *
    * @param bool|null $isAffectBusiness 是否影响业务
    *
    * @return $this
    */
    public function setIsAffectBusiness($isAffectBusiness)
    {
        $this->container['isAffectBusiness'] = $isAffectBusiness;
        return $this;
    }

    /**
    * Gets firstScanTime
    *  首次扫描时间
    *
    * @return int|null
    */
    public function getFirstScanTime()
    {
        return $this->container['firstScanTime'];
    }

    /**
    * Sets firstScanTime
    *
    * @param int|null $firstScanTime 首次扫描时间
    *
    * @return $this
    */
    public function setFirstScanTime($firstScanTime)
    {
        $this->container['firstScanTime'] = $firstScanTime;
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

