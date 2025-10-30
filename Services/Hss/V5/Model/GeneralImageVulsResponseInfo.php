<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GeneralImageVulsResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GeneralImageVulsResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vulName  **参数解释**： 漏洞名称 **取值范围**： 字符长度0-128位
    * vulId  **参数解释**： 漏洞ID **取值范围**： 字符长度0-128位
    * type  **参数解释**： 漏洞类型 **约束限制**: 不涉及 **取值范围**： - linux_vul：linux漏洞 - app_vul：应用漏洞 **默认取值**: 不涉及
    * imageType  **参数解释**： 镜像类型 **约束限制**: 不涉及 **取值范围**： - local：本地镜像 - registry：仓库镜像 - cicd：CI/CD镜像 - cluster：集群镜像 **默认取值**: 不涉及
    * labelList  **参数解释**： 漏洞标签列表 **取值范围**： 最小值0，最大值10
    * severityLevel  **参数解释**： 漏洞的风险程度 **约束限制**: 不涉及 **取值范围**： - Critical：严重 - High：高危 - Medium：中危 - Low：低危 **默认取值**: 不涉及
    * imageNum  **参数解释**： 受影响镜像总数 **取值范围**： 字符长度0-2147483547位
    * cveList  **参数解释**： CVE列表 **取值范围**： 最小值0，最大值10000
    * maxCvssScore  **参数解释**： 镜像最大CVSS分值 **取值范围**： 字符长度0-10位
    * scanTime  **参数解释**： 最近扫描时间，时间单位：毫秒（ms） **取值范围**： 字符长度0-4070880000000位
    * description  **参数解释**： 漏洞描述 **取值范围**： 字符长度0-128位
    * url  **参数解释**： 漏洞修复参考链接 **取值范围**： 字符长度0-128位
    * solutionDetail  **参数解释**： 修复建议 **取值范围**： 字符长度0-128位
    * clusterNum  **参数解释**： 受影响集群总数 **取值范围**： 字符长度0-2147483547位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vulName' => 'string',
            'vulId' => 'string',
            'type' => 'string',
            'imageType' => 'string',
            'labelList' => 'string[]',
            'severityLevel' => 'string',
            'imageNum' => 'int',
            'cveList' => '\HuaweiCloud\SDK\Hss\V5\Model\GeneralImageVulsResponseInfoCveList[]',
            'maxCvssScore' => 'float',
            'scanTime' => 'int',
            'description' => 'string',
            'url' => 'string',
            'solutionDetail' => 'string',
            'clusterNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vulName  **参数解释**： 漏洞名称 **取值范围**： 字符长度0-128位
    * vulId  **参数解释**： 漏洞ID **取值范围**： 字符长度0-128位
    * type  **参数解释**： 漏洞类型 **约束限制**: 不涉及 **取值范围**： - linux_vul：linux漏洞 - app_vul：应用漏洞 **默认取值**: 不涉及
    * imageType  **参数解释**： 镜像类型 **约束限制**: 不涉及 **取值范围**： - local：本地镜像 - registry：仓库镜像 - cicd：CI/CD镜像 - cluster：集群镜像 **默认取值**: 不涉及
    * labelList  **参数解释**： 漏洞标签列表 **取值范围**： 最小值0，最大值10
    * severityLevel  **参数解释**： 漏洞的风险程度 **约束限制**: 不涉及 **取值范围**： - Critical：严重 - High：高危 - Medium：中危 - Low：低危 **默认取值**: 不涉及
    * imageNum  **参数解释**： 受影响镜像总数 **取值范围**： 字符长度0-2147483547位
    * cveList  **参数解释**： CVE列表 **取值范围**： 最小值0，最大值10000
    * maxCvssScore  **参数解释**： 镜像最大CVSS分值 **取值范围**： 字符长度0-10位
    * scanTime  **参数解释**： 最近扫描时间，时间单位：毫秒（ms） **取值范围**： 字符长度0-4070880000000位
    * description  **参数解释**： 漏洞描述 **取值范围**： 字符长度0-128位
    * url  **参数解释**： 漏洞修复参考链接 **取值范围**： 字符长度0-128位
    * solutionDetail  **参数解释**： 修复建议 **取值范围**： 字符长度0-128位
    * clusterNum  **参数解释**： 受影响集群总数 **取值范围**： 字符长度0-2147483547位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vulName' => null,
        'vulId' => null,
        'type' => null,
        'imageType' => null,
        'labelList' => null,
        'severityLevel' => null,
        'imageNum' => 'int32',
        'cveList' => null,
        'maxCvssScore' => 'float',
        'scanTime' => 'int64',
        'description' => null,
        'url' => null,
        'solutionDetail' => null,
        'clusterNum' => 'int32'
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
    * vulName  **参数解释**： 漏洞名称 **取值范围**： 字符长度0-128位
    * vulId  **参数解释**： 漏洞ID **取值范围**： 字符长度0-128位
    * type  **参数解释**： 漏洞类型 **约束限制**: 不涉及 **取值范围**： - linux_vul：linux漏洞 - app_vul：应用漏洞 **默认取值**: 不涉及
    * imageType  **参数解释**： 镜像类型 **约束限制**: 不涉及 **取值范围**： - local：本地镜像 - registry：仓库镜像 - cicd：CI/CD镜像 - cluster：集群镜像 **默认取值**: 不涉及
    * labelList  **参数解释**： 漏洞标签列表 **取值范围**： 最小值0，最大值10
    * severityLevel  **参数解释**： 漏洞的风险程度 **约束限制**: 不涉及 **取值范围**： - Critical：严重 - High：高危 - Medium：中危 - Low：低危 **默认取值**: 不涉及
    * imageNum  **参数解释**： 受影响镜像总数 **取值范围**： 字符长度0-2147483547位
    * cveList  **参数解释**： CVE列表 **取值范围**： 最小值0，最大值10000
    * maxCvssScore  **参数解释**： 镜像最大CVSS分值 **取值范围**： 字符长度0-10位
    * scanTime  **参数解释**： 最近扫描时间，时间单位：毫秒（ms） **取值范围**： 字符长度0-4070880000000位
    * description  **参数解释**： 漏洞描述 **取值范围**： 字符长度0-128位
    * url  **参数解释**： 漏洞修复参考链接 **取值范围**： 字符长度0-128位
    * solutionDetail  **参数解释**： 修复建议 **取值范围**： 字符长度0-128位
    * clusterNum  **参数解释**： 受影响集群总数 **取值范围**： 字符长度0-2147483547位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vulName' => 'vul_name',
            'vulId' => 'vul_id',
            'type' => 'type',
            'imageType' => 'image_type',
            'labelList' => 'label_list',
            'severityLevel' => 'severity_level',
            'imageNum' => 'image_num',
            'cveList' => 'cve_list',
            'maxCvssScore' => 'max_cvss_score',
            'scanTime' => 'scan_time',
            'description' => 'description',
            'url' => 'url',
            'solutionDetail' => 'solution_detail',
            'clusterNum' => 'cluster_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vulName  **参数解释**： 漏洞名称 **取值范围**： 字符长度0-128位
    * vulId  **参数解释**： 漏洞ID **取值范围**： 字符长度0-128位
    * type  **参数解释**： 漏洞类型 **约束限制**: 不涉及 **取值范围**： - linux_vul：linux漏洞 - app_vul：应用漏洞 **默认取值**: 不涉及
    * imageType  **参数解释**： 镜像类型 **约束限制**: 不涉及 **取值范围**： - local：本地镜像 - registry：仓库镜像 - cicd：CI/CD镜像 - cluster：集群镜像 **默认取值**: 不涉及
    * labelList  **参数解释**： 漏洞标签列表 **取值范围**： 最小值0，最大值10
    * severityLevel  **参数解释**： 漏洞的风险程度 **约束限制**: 不涉及 **取值范围**： - Critical：严重 - High：高危 - Medium：中危 - Low：低危 **默认取值**: 不涉及
    * imageNum  **参数解释**： 受影响镜像总数 **取值范围**： 字符长度0-2147483547位
    * cveList  **参数解释**： CVE列表 **取值范围**： 最小值0，最大值10000
    * maxCvssScore  **参数解释**： 镜像最大CVSS分值 **取值范围**： 字符长度0-10位
    * scanTime  **参数解释**： 最近扫描时间，时间单位：毫秒（ms） **取值范围**： 字符长度0-4070880000000位
    * description  **参数解释**： 漏洞描述 **取值范围**： 字符长度0-128位
    * url  **参数解释**： 漏洞修复参考链接 **取值范围**： 字符长度0-128位
    * solutionDetail  **参数解释**： 修复建议 **取值范围**： 字符长度0-128位
    * clusterNum  **参数解释**： 受影响集群总数 **取值范围**： 字符长度0-2147483547位
    *
    * @var string[]
    */
    protected static $setters = [
            'vulName' => 'setVulName',
            'vulId' => 'setVulId',
            'type' => 'setType',
            'imageType' => 'setImageType',
            'labelList' => 'setLabelList',
            'severityLevel' => 'setSeverityLevel',
            'imageNum' => 'setImageNum',
            'cveList' => 'setCveList',
            'maxCvssScore' => 'setMaxCvssScore',
            'scanTime' => 'setScanTime',
            'description' => 'setDescription',
            'url' => 'setUrl',
            'solutionDetail' => 'setSolutionDetail',
            'clusterNum' => 'setClusterNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vulName  **参数解释**： 漏洞名称 **取值范围**： 字符长度0-128位
    * vulId  **参数解释**： 漏洞ID **取值范围**： 字符长度0-128位
    * type  **参数解释**： 漏洞类型 **约束限制**: 不涉及 **取值范围**： - linux_vul：linux漏洞 - app_vul：应用漏洞 **默认取值**: 不涉及
    * imageType  **参数解释**： 镜像类型 **约束限制**: 不涉及 **取值范围**： - local：本地镜像 - registry：仓库镜像 - cicd：CI/CD镜像 - cluster：集群镜像 **默认取值**: 不涉及
    * labelList  **参数解释**： 漏洞标签列表 **取值范围**： 最小值0，最大值10
    * severityLevel  **参数解释**： 漏洞的风险程度 **约束限制**: 不涉及 **取值范围**： - Critical：严重 - High：高危 - Medium：中危 - Low：低危 **默认取值**: 不涉及
    * imageNum  **参数解释**： 受影响镜像总数 **取值范围**： 字符长度0-2147483547位
    * cveList  **参数解释**： CVE列表 **取值范围**： 最小值0，最大值10000
    * maxCvssScore  **参数解释**： 镜像最大CVSS分值 **取值范围**： 字符长度0-10位
    * scanTime  **参数解释**： 最近扫描时间，时间单位：毫秒（ms） **取值范围**： 字符长度0-4070880000000位
    * description  **参数解释**： 漏洞描述 **取值范围**： 字符长度0-128位
    * url  **参数解释**： 漏洞修复参考链接 **取值范围**： 字符长度0-128位
    * solutionDetail  **参数解释**： 修复建议 **取值范围**： 字符长度0-128位
    * clusterNum  **参数解释**： 受影响集群总数 **取值范围**： 字符长度0-2147483547位
    *
    * @var string[]
    */
    protected static $getters = [
            'vulName' => 'getVulName',
            'vulId' => 'getVulId',
            'type' => 'getType',
            'imageType' => 'getImageType',
            'labelList' => 'getLabelList',
            'severityLevel' => 'getSeverityLevel',
            'imageNum' => 'getImageNum',
            'cveList' => 'getCveList',
            'maxCvssScore' => 'getMaxCvssScore',
            'scanTime' => 'getScanTime',
            'description' => 'getDescription',
            'url' => 'getUrl',
            'solutionDetail' => 'getSolutionDetail',
            'clusterNum' => 'getClusterNum'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['imageType'] = isset($data['imageType']) ? $data['imageType'] : null;
        $this->container['labelList'] = isset($data['labelList']) ? $data['labelList'] : null;
        $this->container['severityLevel'] = isset($data['severityLevel']) ? $data['severityLevel'] : null;
        $this->container['imageNum'] = isset($data['imageNum']) ? $data['imageNum'] : null;
        $this->container['cveList'] = isset($data['cveList']) ? $data['cveList'] : null;
        $this->container['maxCvssScore'] = isset($data['maxCvssScore']) ? $data['maxCvssScore'] : null;
        $this->container['scanTime'] = isset($data['scanTime']) ? $data['scanTime'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['solutionDetail'] = isset($data['solutionDetail']) ? $data['solutionDetail'] : null;
        $this->container['clusterNum'] = isset($data['clusterNum']) ? $data['clusterNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['vulName']) && (mb_strlen($this->container['vulName']) > 128)) {
                $invalidProperties[] = "invalid value for 'vulName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['vulName']) && (mb_strlen($this->container['vulName']) < 0)) {
                $invalidProperties[] = "invalid value for 'vulName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vulId']) && (mb_strlen($this->container['vulId']) > 128)) {
                $invalidProperties[] = "invalid value for 'vulId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['vulId']) && (mb_strlen($this->container['vulId']) < 0)) {
                $invalidProperties[] = "invalid value for 'vulId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['type']) && !preg_match("/^linux_vul|app_vul$/", $this->container['type'])) {
                $invalidProperties[] = "invalid value for 'type', must be conform to the pattern /^linux_vul|app_vul$/.";
            }
            if (!is_null($this->container['imageType']) && !preg_match("/^local|registry|cicd|cluster$/", $this->container['imageType'])) {
                $invalidProperties[] = "invalid value for 'imageType', must be conform to the pattern /^local|registry|cicd|cluster$/.";
            }
            if (!is_null($this->container['severityLevel']) && !preg_match("/^Critical|High|Medium|Low$/", $this->container['severityLevel'])) {
                $invalidProperties[] = "invalid value for 'severityLevel', must be conform to the pattern /^Critical|High|Medium|Low$/.";
            }
            if (!is_null($this->container['imageNum']) && ($this->container['imageNum'] > 2147483547)) {
                $invalidProperties[] = "invalid value for 'imageNum', must be smaller than or equal to 2147483547.";
            }
            if (!is_null($this->container['imageNum']) && ($this->container['imageNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'imageNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['maxCvssScore']) && ($this->container['maxCvssScore'] > 1E+1)) {
                $invalidProperties[] = "invalid value for 'maxCvssScore', must be smaller than or equal to 1E+1.";
            }
            if (!is_null($this->container['maxCvssScore']) && ($this->container['maxCvssScore'] < 0)) {
                $invalidProperties[] = "invalid value for 'maxCvssScore', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scanTime']) && ($this->container['scanTime'] > 4070880000000)) {
                $invalidProperties[] = "invalid value for 'scanTime', must be smaller than or equal to 4070880000000.";
            }
            if (!is_null($this->container['scanTime']) && ($this->container['scanTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'scanTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 128)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['url']) && (mb_strlen($this->container['url']) > 128)) {
                $invalidProperties[] = "invalid value for 'url', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['url']) && (mb_strlen($this->container['url']) < 0)) {
                $invalidProperties[] = "invalid value for 'url', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['solutionDetail']) && (mb_strlen($this->container['solutionDetail']) > 128)) {
                $invalidProperties[] = "invalid value for 'solutionDetail', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['solutionDetail']) && (mb_strlen($this->container['solutionDetail']) < 0)) {
                $invalidProperties[] = "invalid value for 'solutionDetail', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['clusterNum']) && ($this->container['clusterNum'] > 2147483547)) {
                $invalidProperties[] = "invalid value for 'clusterNum', must be smaller than or equal to 2147483547.";
            }
            if (!is_null($this->container['clusterNum']) && ($this->container['clusterNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'clusterNum', must be bigger than or equal to 0.";
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
    *  **参数解释**： 漏洞名称 **取值范围**： 字符长度0-128位
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
    * @param string|null $vulName **参数解释**： 漏洞名称 **取值范围**： 字符长度0-128位
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
    *  **参数解释**： 漏洞ID **取值范围**： 字符长度0-128位
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
    * @param string|null $vulId **参数解释**： 漏洞ID **取值范围**： 字符长度0-128位
    *
    * @return $this
    */
    public function setVulId($vulId)
    {
        $this->container['vulId'] = $vulId;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**： 漏洞类型 **约束限制**: 不涉及 **取值范围**： - linux_vul：linux漏洞 - app_vul：应用漏洞 **默认取值**: 不涉及
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
    * @param string|null $type **参数解释**： 漏洞类型 **约束限制**: 不涉及 **取值范围**： - linux_vul：linux漏洞 - app_vul：应用漏洞 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets imageType
    *  **参数解释**： 镜像类型 **约束限制**: 不涉及 **取值范围**： - local：本地镜像 - registry：仓库镜像 - cicd：CI/CD镜像 - cluster：集群镜像 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getImageType()
    {
        return $this->container['imageType'];
    }

    /**
    * Sets imageType
    *
    * @param string|null $imageType **参数解释**： 镜像类型 **约束限制**: 不涉及 **取值范围**： - local：本地镜像 - registry：仓库镜像 - cicd：CI/CD镜像 - cluster：集群镜像 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setImageType($imageType)
    {
        $this->container['imageType'] = $imageType;
        return $this;
    }

    /**
    * Gets labelList
    *  **参数解释**： 漏洞标签列表 **取值范围**： 最小值0，最大值10
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
    * @param string[]|null $labelList **参数解释**： 漏洞标签列表 **取值范围**： 最小值0，最大值10
    *
    * @return $this
    */
    public function setLabelList($labelList)
    {
        $this->container['labelList'] = $labelList;
        return $this;
    }

    /**
    * Gets severityLevel
    *  **参数解释**： 漏洞的风险程度 **约束限制**: 不涉及 **取值范围**： - Critical：严重 - High：高危 - Medium：中危 - Low：低危 **默认取值**: 不涉及
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
    * @param string|null $severityLevel **参数解释**： 漏洞的风险程度 **约束限制**: 不涉及 **取值范围**： - Critical：严重 - High：高危 - Medium：中危 - Low：低危 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setSeverityLevel($severityLevel)
    {
        $this->container['severityLevel'] = $severityLevel;
        return $this;
    }

    /**
    * Gets imageNum
    *  **参数解释**： 受影响镜像总数 **取值范围**： 字符长度0-2147483547位
    *
    * @return int|null
    */
    public function getImageNum()
    {
        return $this->container['imageNum'];
    }

    /**
    * Sets imageNum
    *
    * @param int|null $imageNum **参数解释**： 受影响镜像总数 **取值范围**： 字符长度0-2147483547位
    *
    * @return $this
    */
    public function setImageNum($imageNum)
    {
        $this->container['imageNum'] = $imageNum;
        return $this;
    }

    /**
    * Gets cveList
    *  **参数解释**： CVE列表 **取值范围**： 最小值0，最大值10000
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\GeneralImageVulsResponseInfoCveList[]|null
    */
    public function getCveList()
    {
        return $this->container['cveList'];
    }

    /**
    * Sets cveList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\GeneralImageVulsResponseInfoCveList[]|null $cveList **参数解释**： CVE列表 **取值范围**： 最小值0，最大值10000
    *
    * @return $this
    */
    public function setCveList($cveList)
    {
        $this->container['cveList'] = $cveList;
        return $this;
    }

    /**
    * Gets maxCvssScore
    *  **参数解释**： 镜像最大CVSS分值 **取值范围**： 字符长度0-10位
    *
    * @return float|null
    */
    public function getMaxCvssScore()
    {
        return $this->container['maxCvssScore'];
    }

    /**
    * Sets maxCvssScore
    *
    * @param float|null $maxCvssScore **参数解释**： 镜像最大CVSS分值 **取值范围**： 字符长度0-10位
    *
    * @return $this
    */
    public function setMaxCvssScore($maxCvssScore)
    {
        $this->container['maxCvssScore'] = $maxCvssScore;
        return $this;
    }

    /**
    * Gets scanTime
    *  **参数解释**： 最近扫描时间，时间单位：毫秒（ms） **取值范围**： 字符长度0-4070880000000位
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
    * @param int|null $scanTime **参数解释**： 最近扫描时间，时间单位：毫秒（ms） **取值范围**： 字符长度0-4070880000000位
    *
    * @return $this
    */
    public function setScanTime($scanTime)
    {
        $this->container['scanTime'] = $scanTime;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**： 漏洞描述 **取值范围**： 字符长度0-128位
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
    * @param string|null $description **参数解释**： 漏洞描述 **取值范围**： 字符长度0-128位
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets url
    *  **参数解释**： 漏洞修复参考链接 **取值范围**： 字符长度0-128位
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
    * @param string|null $url **参数解释**： 漏洞修复参考链接 **取值范围**： 字符长度0-128位
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets solutionDetail
    *  **参数解释**： 修复建议 **取值范围**： 字符长度0-128位
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
    * @param string|null $solutionDetail **参数解释**： 修复建议 **取值范围**： 字符长度0-128位
    *
    * @return $this
    */
    public function setSolutionDetail($solutionDetail)
    {
        $this->container['solutionDetail'] = $solutionDetail;
        return $this;
    }

    /**
    * Gets clusterNum
    *  **参数解释**： 受影响集群总数 **取值范围**： 字符长度0-2147483547位
    *
    * @return int|null
    */
    public function getClusterNum()
    {
        return $this->container['clusterNum'];
    }

    /**
    * Sets clusterNum
    *
    * @param int|null $clusterNum **参数解释**： 受影响集群总数 **取值范围**： 字符长度0-2147483547位
    *
    * @return $this
    */
    public function setClusterNum($clusterNum)
    {
        $this->container['clusterNum'] = $clusterNum;
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

