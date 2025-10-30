<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UrgentVulInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UrgentVulInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vulName  **参数解释**： 漏洞名称 **取值范围**： 字符长度0-256位
    * vulId  **参数解释**： 漏洞ID **取值范围**： 字符长度0-64位
    * labelList  **参数解释**： 漏洞标签 **取值范围**: 最小值0，最大值2147483647
    * hostsNum  hostsNum
    * scanTime  **参数解释**： 最近扫描时间 **取值范围**： 字符长度0-9223372036854775807
    * publishTime  **参数解释**： 漏洞披露时间 **取值范围**： 字符长度0-9223372036854775807
    * solutionDetail  **参数解释**： 解决方案 **取值范围**： 字符长度0-65534位
    * description  **参数解释**： 漏洞描述 **取值范围**： 字符长度0-64位
    * scanStatus  **参数解释**： 漏洞扫描状态 **约束限制**: 不涉及 **取值范围**： - never_scan : 未扫描 - scanning : 扫描中 - finished : 扫描完成  **默认取值**: 不涉及
    * severityLevel  **参数解释**： 危险程度 **约束限制**: 不涉及 **取值范围**： - Critical：漏洞cvss评分大于等于9；对应控制台页面的高危 - High：漏洞cvss评分大于等于7，小于9；对应控制台页面的中危 - Medium：漏洞cvss评分大于等于4，小于7；对应控制台页面的中危 - Low：漏洞cvss评分小于4；对应控制台页面的低危  **默认取值**: 不涉及
    * scanningHostNum  **参数解释**： 处于扫描中状态的主机数量 **取值范围**： 字符长度0-2147483647
    * successHostNum  **参数解释**： 已扫描成功的主机数量 **取值范围**： 字符长度0-2147483647
    * failedHostNum  **参数解释**： 已扫描失败的主机数量 **取值范围**： 字符长度0-2147483647
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vulName' => 'string',
            'vulId' => 'string',
            'labelList' => 'string[]',
            'hostsNum' => '\HuaweiCloud\SDK\Hss\V5\Model\VulnerabilityHostNumberInfo',
            'scanTime' => 'int',
            'publishTime' => 'int',
            'solutionDetail' => 'string',
            'description' => 'string',
            'scanStatus' => 'string',
            'severityLevel' => 'string',
            'scanningHostNum' => 'int',
            'successHostNum' => 'int',
            'failedHostNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vulName  **参数解释**： 漏洞名称 **取值范围**： 字符长度0-256位
    * vulId  **参数解释**： 漏洞ID **取值范围**： 字符长度0-64位
    * labelList  **参数解释**： 漏洞标签 **取值范围**: 最小值0，最大值2147483647
    * hostsNum  hostsNum
    * scanTime  **参数解释**： 最近扫描时间 **取值范围**： 字符长度0-9223372036854775807
    * publishTime  **参数解释**： 漏洞披露时间 **取值范围**： 字符长度0-9223372036854775807
    * solutionDetail  **参数解释**： 解决方案 **取值范围**： 字符长度0-65534位
    * description  **参数解释**： 漏洞描述 **取值范围**： 字符长度0-64位
    * scanStatus  **参数解释**： 漏洞扫描状态 **约束限制**: 不涉及 **取值范围**： - never_scan : 未扫描 - scanning : 扫描中 - finished : 扫描完成  **默认取值**: 不涉及
    * severityLevel  **参数解释**： 危险程度 **约束限制**: 不涉及 **取值范围**： - Critical：漏洞cvss评分大于等于9；对应控制台页面的高危 - High：漏洞cvss评分大于等于7，小于9；对应控制台页面的中危 - Medium：漏洞cvss评分大于等于4，小于7；对应控制台页面的中危 - Low：漏洞cvss评分小于4；对应控制台页面的低危  **默认取值**: 不涉及
    * scanningHostNum  **参数解释**： 处于扫描中状态的主机数量 **取值范围**： 字符长度0-2147483647
    * successHostNum  **参数解释**： 已扫描成功的主机数量 **取值范围**： 字符长度0-2147483647
    * failedHostNum  **参数解释**： 已扫描失败的主机数量 **取值范围**： 字符长度0-2147483647
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vulName' => null,
        'vulId' => null,
        'labelList' => null,
        'hostsNum' => null,
        'scanTime' => 'int64',
        'publishTime' => 'int64',
        'solutionDetail' => null,
        'description' => null,
        'scanStatus' => null,
        'severityLevel' => null,
        'scanningHostNum' => 'int32',
        'successHostNum' => 'int32',
        'failedHostNum' => 'int32'
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
    * vulName  **参数解释**： 漏洞名称 **取值范围**： 字符长度0-256位
    * vulId  **参数解释**： 漏洞ID **取值范围**： 字符长度0-64位
    * labelList  **参数解释**： 漏洞标签 **取值范围**: 最小值0，最大值2147483647
    * hostsNum  hostsNum
    * scanTime  **参数解释**： 最近扫描时间 **取值范围**： 字符长度0-9223372036854775807
    * publishTime  **参数解释**： 漏洞披露时间 **取值范围**： 字符长度0-9223372036854775807
    * solutionDetail  **参数解释**： 解决方案 **取值范围**： 字符长度0-65534位
    * description  **参数解释**： 漏洞描述 **取值范围**： 字符长度0-64位
    * scanStatus  **参数解释**： 漏洞扫描状态 **约束限制**: 不涉及 **取值范围**： - never_scan : 未扫描 - scanning : 扫描中 - finished : 扫描完成  **默认取值**: 不涉及
    * severityLevel  **参数解释**： 危险程度 **约束限制**: 不涉及 **取值范围**： - Critical：漏洞cvss评分大于等于9；对应控制台页面的高危 - High：漏洞cvss评分大于等于7，小于9；对应控制台页面的中危 - Medium：漏洞cvss评分大于等于4，小于7；对应控制台页面的中危 - Low：漏洞cvss评分小于4；对应控制台页面的低危  **默认取值**: 不涉及
    * scanningHostNum  **参数解释**： 处于扫描中状态的主机数量 **取值范围**： 字符长度0-2147483647
    * successHostNum  **参数解释**： 已扫描成功的主机数量 **取值范围**： 字符长度0-2147483647
    * failedHostNum  **参数解释**： 已扫描失败的主机数量 **取值范围**： 字符长度0-2147483647
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vulName' => 'vul_name',
            'vulId' => 'vul_id',
            'labelList' => 'label_list',
            'hostsNum' => 'hosts_num',
            'scanTime' => 'scan_time',
            'publishTime' => 'publish_time',
            'solutionDetail' => 'solution_detail',
            'description' => 'description',
            'scanStatus' => 'scan_status',
            'severityLevel' => 'severity_level',
            'scanningHostNum' => 'scanning_host_num',
            'successHostNum' => 'success_host_num',
            'failedHostNum' => 'failed_host_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vulName  **参数解释**： 漏洞名称 **取值范围**： 字符长度0-256位
    * vulId  **参数解释**： 漏洞ID **取值范围**： 字符长度0-64位
    * labelList  **参数解释**： 漏洞标签 **取值范围**: 最小值0，最大值2147483647
    * hostsNum  hostsNum
    * scanTime  **参数解释**： 最近扫描时间 **取值范围**： 字符长度0-9223372036854775807
    * publishTime  **参数解释**： 漏洞披露时间 **取值范围**： 字符长度0-9223372036854775807
    * solutionDetail  **参数解释**： 解决方案 **取值范围**： 字符长度0-65534位
    * description  **参数解释**： 漏洞描述 **取值范围**： 字符长度0-64位
    * scanStatus  **参数解释**： 漏洞扫描状态 **约束限制**: 不涉及 **取值范围**： - never_scan : 未扫描 - scanning : 扫描中 - finished : 扫描完成  **默认取值**: 不涉及
    * severityLevel  **参数解释**： 危险程度 **约束限制**: 不涉及 **取值范围**： - Critical：漏洞cvss评分大于等于9；对应控制台页面的高危 - High：漏洞cvss评分大于等于7，小于9；对应控制台页面的中危 - Medium：漏洞cvss评分大于等于4，小于7；对应控制台页面的中危 - Low：漏洞cvss评分小于4；对应控制台页面的低危  **默认取值**: 不涉及
    * scanningHostNum  **参数解释**： 处于扫描中状态的主机数量 **取值范围**： 字符长度0-2147483647
    * successHostNum  **参数解释**： 已扫描成功的主机数量 **取值范围**： 字符长度0-2147483647
    * failedHostNum  **参数解释**： 已扫描失败的主机数量 **取值范围**： 字符长度0-2147483647
    *
    * @var string[]
    */
    protected static $setters = [
            'vulName' => 'setVulName',
            'vulId' => 'setVulId',
            'labelList' => 'setLabelList',
            'hostsNum' => 'setHostsNum',
            'scanTime' => 'setScanTime',
            'publishTime' => 'setPublishTime',
            'solutionDetail' => 'setSolutionDetail',
            'description' => 'setDescription',
            'scanStatus' => 'setScanStatus',
            'severityLevel' => 'setSeverityLevel',
            'scanningHostNum' => 'setScanningHostNum',
            'successHostNum' => 'setSuccessHostNum',
            'failedHostNum' => 'setFailedHostNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vulName  **参数解释**： 漏洞名称 **取值范围**： 字符长度0-256位
    * vulId  **参数解释**： 漏洞ID **取值范围**： 字符长度0-64位
    * labelList  **参数解释**： 漏洞标签 **取值范围**: 最小值0，最大值2147483647
    * hostsNum  hostsNum
    * scanTime  **参数解释**： 最近扫描时间 **取值范围**： 字符长度0-9223372036854775807
    * publishTime  **参数解释**： 漏洞披露时间 **取值范围**： 字符长度0-9223372036854775807
    * solutionDetail  **参数解释**： 解决方案 **取值范围**： 字符长度0-65534位
    * description  **参数解释**： 漏洞描述 **取值范围**： 字符长度0-64位
    * scanStatus  **参数解释**： 漏洞扫描状态 **约束限制**: 不涉及 **取值范围**： - never_scan : 未扫描 - scanning : 扫描中 - finished : 扫描完成  **默认取值**: 不涉及
    * severityLevel  **参数解释**： 危险程度 **约束限制**: 不涉及 **取值范围**： - Critical：漏洞cvss评分大于等于9；对应控制台页面的高危 - High：漏洞cvss评分大于等于7，小于9；对应控制台页面的中危 - Medium：漏洞cvss评分大于等于4，小于7；对应控制台页面的中危 - Low：漏洞cvss评分小于4；对应控制台页面的低危  **默认取值**: 不涉及
    * scanningHostNum  **参数解释**： 处于扫描中状态的主机数量 **取值范围**： 字符长度0-2147483647
    * successHostNum  **参数解释**： 已扫描成功的主机数量 **取值范围**： 字符长度0-2147483647
    * failedHostNum  **参数解释**： 已扫描失败的主机数量 **取值范围**： 字符长度0-2147483647
    *
    * @var string[]
    */
    protected static $getters = [
            'vulName' => 'getVulName',
            'vulId' => 'getVulId',
            'labelList' => 'getLabelList',
            'hostsNum' => 'getHostsNum',
            'scanTime' => 'getScanTime',
            'publishTime' => 'getPublishTime',
            'solutionDetail' => 'getSolutionDetail',
            'description' => 'getDescription',
            'scanStatus' => 'getScanStatus',
            'severityLevel' => 'getSeverityLevel',
            'scanningHostNum' => 'getScanningHostNum',
            'successHostNum' => 'getSuccessHostNum',
            'failedHostNum' => 'getFailedHostNum'
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
        $this->container['hostsNum'] = isset($data['hostsNum']) ? $data['hostsNum'] : null;
        $this->container['scanTime'] = isset($data['scanTime']) ? $data['scanTime'] : null;
        $this->container['publishTime'] = isset($data['publishTime']) ? $data['publishTime'] : null;
        $this->container['solutionDetail'] = isset($data['solutionDetail']) ? $data['solutionDetail'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['scanStatus'] = isset($data['scanStatus']) ? $data['scanStatus'] : null;
        $this->container['severityLevel'] = isset($data['severityLevel']) ? $data['severityLevel'] : null;
        $this->container['scanningHostNum'] = isset($data['scanningHostNum']) ? $data['scanningHostNum'] : null;
        $this->container['successHostNum'] = isset($data['successHostNum']) ? $data['successHostNum'] : null;
        $this->container['failedHostNum'] = isset($data['failedHostNum']) ? $data['failedHostNum'] : null;
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
            if (!is_null($this->container['scanTime']) && ($this->container['scanTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'scanTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['scanTime']) && ($this->container['scanTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'scanTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['publishTime']) && ($this->container['publishTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'publishTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['publishTime']) && ($this->container['publishTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'publishTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['solutionDetail']) && (mb_strlen($this->container['solutionDetail']) > 65534)) {
                $invalidProperties[] = "invalid value for 'solutionDetail', the character length must be smaller than or equal to 65534.";
            }
            if (!is_null($this->container['solutionDetail']) && (mb_strlen($this->container['solutionDetail']) < 0)) {
                $invalidProperties[] = "invalid value for 'solutionDetail', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 65534)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 65534.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scanStatus']) && (mb_strlen($this->container['scanStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'scanStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['scanStatus']) && (mb_strlen($this->container['scanStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'scanStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['scanStatus']) && !preg_match("/^never_scan|scanning|finished$/", $this->container['scanStatus'])) {
                $invalidProperties[] = "invalid value for 'scanStatus', must be conform to the pattern /^never_scan|scanning|finished$/.";
            }
            if (!is_null($this->container['severityLevel']) && (mb_strlen($this->container['severityLevel']) > 128)) {
                $invalidProperties[] = "invalid value for 'severityLevel', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['severityLevel']) && (mb_strlen($this->container['severityLevel']) < 1)) {
                $invalidProperties[] = "invalid value for 'severityLevel', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['severityLevel']) && !preg_match("/^Critical|High|Medium|Low$/", $this->container['severityLevel'])) {
                $invalidProperties[] = "invalid value for 'severityLevel', must be conform to the pattern /^Critical|High|Medium|Low$/.";
            }
            if (!is_null($this->container['scanningHostNum']) && ($this->container['scanningHostNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'scanningHostNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['scanningHostNum']) && ($this->container['scanningHostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'scanningHostNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['successHostNum']) && ($this->container['successHostNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'successHostNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['successHostNum']) && ($this->container['successHostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'successHostNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['failedHostNum']) && ($this->container['failedHostNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'failedHostNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['failedHostNum']) && ($this->container['failedHostNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'failedHostNum', must be bigger than or equal to 0.";
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
    *  **参数解释**： 漏洞名称 **取值范围**： 字符长度0-256位
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
    * @param string|null $vulName **参数解释**： 漏洞名称 **取值范围**： 字符长度0-256位
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
    *  **参数解释**： 漏洞ID **取值范围**： 字符长度0-64位
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
    * @param string|null $vulId **参数解释**： 漏洞ID **取值范围**： 字符长度0-64位
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
    *  **参数解释**： 漏洞标签 **取值范围**: 最小值0，最大值2147483647
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
    * @param string[]|null $labelList **参数解释**： 漏洞标签 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setLabelList($labelList)
    {
        $this->container['labelList'] = $labelList;
        return $this;
    }

    /**
    * Gets hostsNum
    *  hostsNum
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\VulnerabilityHostNumberInfo|null
    */
    public function getHostsNum()
    {
        return $this->container['hostsNum'];
    }

    /**
    * Sets hostsNum
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\VulnerabilityHostNumberInfo|null $hostsNum hostsNum
    *
    * @return $this
    */
    public function setHostsNum($hostsNum)
    {
        $this->container['hostsNum'] = $hostsNum;
        return $this;
    }

    /**
    * Gets scanTime
    *  **参数解释**： 最近扫描时间 **取值范围**： 字符长度0-9223372036854775807
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
    * @param int|null $scanTime **参数解释**： 最近扫描时间 **取值范围**： 字符长度0-9223372036854775807
    *
    * @return $this
    */
    public function setScanTime($scanTime)
    {
        $this->container['scanTime'] = $scanTime;
        return $this;
    }

    /**
    * Gets publishTime
    *  **参数解释**： 漏洞披露时间 **取值范围**： 字符长度0-9223372036854775807
    *
    * @return int|null
    */
    public function getPublishTime()
    {
        return $this->container['publishTime'];
    }

    /**
    * Sets publishTime
    *
    * @param int|null $publishTime **参数解释**： 漏洞披露时间 **取值范围**： 字符长度0-9223372036854775807
    *
    * @return $this
    */
    public function setPublishTime($publishTime)
    {
        $this->container['publishTime'] = $publishTime;
        return $this;
    }

    /**
    * Gets solutionDetail
    *  **参数解释**： 解决方案 **取值范围**： 字符长度0-65534位
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
    * @param string|null $solutionDetail **参数解释**： 解决方案 **取值范围**： 字符长度0-65534位
    *
    * @return $this
    */
    public function setSolutionDetail($solutionDetail)
    {
        $this->container['solutionDetail'] = $solutionDetail;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**： 漏洞描述 **取值范围**： 字符长度0-64位
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
    * @param string|null $description **参数解释**： 漏洞描述 **取值范围**： 字符长度0-64位
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets scanStatus
    *  **参数解释**： 漏洞扫描状态 **约束限制**: 不涉及 **取值范围**： - never_scan : 未扫描 - scanning : 扫描中 - finished : 扫描完成  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getScanStatus()
    {
        return $this->container['scanStatus'];
    }

    /**
    * Sets scanStatus
    *
    * @param string|null $scanStatus **参数解释**： 漏洞扫描状态 **约束限制**: 不涉及 **取值范围**： - never_scan : 未扫描 - scanning : 扫描中 - finished : 扫描完成  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setScanStatus($scanStatus)
    {
        $this->container['scanStatus'] = $scanStatus;
        return $this;
    }

    /**
    * Gets severityLevel
    *  **参数解释**： 危险程度 **约束限制**: 不涉及 **取值范围**： - Critical：漏洞cvss评分大于等于9；对应控制台页面的高危 - High：漏洞cvss评分大于等于7，小于9；对应控制台页面的中危 - Medium：漏洞cvss评分大于等于4，小于7；对应控制台页面的中危 - Low：漏洞cvss评分小于4；对应控制台页面的低危  **默认取值**: 不涉及
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
    * @param string|null $severityLevel **参数解释**： 危险程度 **约束限制**: 不涉及 **取值范围**： - Critical：漏洞cvss评分大于等于9；对应控制台页面的高危 - High：漏洞cvss评分大于等于7，小于9；对应控制台页面的中危 - Medium：漏洞cvss评分大于等于4，小于7；对应控制台页面的中危 - Low：漏洞cvss评分小于4；对应控制台页面的低危  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setSeverityLevel($severityLevel)
    {
        $this->container['severityLevel'] = $severityLevel;
        return $this;
    }

    /**
    * Gets scanningHostNum
    *  **参数解释**： 处于扫描中状态的主机数量 **取值范围**： 字符长度0-2147483647
    *
    * @return int|null
    */
    public function getScanningHostNum()
    {
        return $this->container['scanningHostNum'];
    }

    /**
    * Sets scanningHostNum
    *
    * @param int|null $scanningHostNum **参数解释**： 处于扫描中状态的主机数量 **取值范围**： 字符长度0-2147483647
    *
    * @return $this
    */
    public function setScanningHostNum($scanningHostNum)
    {
        $this->container['scanningHostNum'] = $scanningHostNum;
        return $this;
    }

    /**
    * Gets successHostNum
    *  **参数解释**： 已扫描成功的主机数量 **取值范围**： 字符长度0-2147483647
    *
    * @return int|null
    */
    public function getSuccessHostNum()
    {
        return $this->container['successHostNum'];
    }

    /**
    * Sets successHostNum
    *
    * @param int|null $successHostNum **参数解释**： 已扫描成功的主机数量 **取值范围**： 字符长度0-2147483647
    *
    * @return $this
    */
    public function setSuccessHostNum($successHostNum)
    {
        $this->container['successHostNum'] = $successHostNum;
        return $this;
    }

    /**
    * Gets failedHostNum
    *  **参数解释**： 已扫描失败的主机数量 **取值范围**： 字符长度0-2147483647
    *
    * @return int|null
    */
    public function getFailedHostNum()
    {
        return $this->container['failedHostNum'];
    }

    /**
    * Sets failedHostNum
    *
    * @param int|null $failedHostNum **参数解释**： 已扫描失败的主机数量 **取值范围**： 字符长度0-2147483647
    *
    * @return $this
    */
    public function setFailedHostNum($failedHostNum)
    {
        $this->container['failedHostNum'] = $failedHostNum;
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

