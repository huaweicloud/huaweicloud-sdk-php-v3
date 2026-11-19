<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ImageVulInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ImageVulInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vulId  **参数解释**: 漏洞ID **取值范围**: 字符长度1-64位
    * vulName  **参数解释**: 漏洞名称 **取值范围**: 字符长度0-256位
    * repairNecessity  **参数解释**: 修复紧急度 **取值范围**: - immediate_repair：紧急修复 - delay_repair：延迟修复 - not_needed_repair：无需修复
    * description  **参数解释**: 漏洞描述 **取值范围**: 字符长度0-4096位
    * position  **参数解释**: 漏洞位置 **取值范围**: 字符长度0-512位
    * appName  **参数解释**: 软件名称 **取值范围**: 字符长度0-128位
    * appPath  **参数解释**: 软件路径 **取值范围**: 字符长度0-512位
    * version  **参数解释**: 软件版本 **取值范围**: 字符长度0-128位
    * solution  **参数解释**: 修复建议 **取值范围**: 字符长度0-4096位
    * url  **参数解释**: URL **取值范围**: 字符长度0-2048位
    * dataList  **参数解释**: CVE列表 **取值范围**: 取值0-100个CveInfo对象
    * status  **参数解释**: 漏洞状态 **取值范围**: 字符长度0-64位
    * severityLevel  **参数解释**: 危险程度 **取值范围**: - Low：低危 - Medium：中危 - High：高危 - Critical：危急
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vulId' => 'string',
            'vulName' => 'string',
            'repairNecessity' => 'string',
            'description' => 'string',
            'position' => 'string',
            'appName' => 'string',
            'appPath' => 'string',
            'version' => 'string',
            'solution' => 'string',
            'url' => 'string',
            'dataList' => '\HuaweiCloud\SDK\Hss\V5\Model\CveInfo[]',
            'status' => 'string',
            'severityLevel' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vulId  **参数解释**: 漏洞ID **取值范围**: 字符长度1-64位
    * vulName  **参数解释**: 漏洞名称 **取值范围**: 字符长度0-256位
    * repairNecessity  **参数解释**: 修复紧急度 **取值范围**: - immediate_repair：紧急修复 - delay_repair：延迟修复 - not_needed_repair：无需修复
    * description  **参数解释**: 漏洞描述 **取值范围**: 字符长度0-4096位
    * position  **参数解释**: 漏洞位置 **取值范围**: 字符长度0-512位
    * appName  **参数解释**: 软件名称 **取值范围**: 字符长度0-128位
    * appPath  **参数解释**: 软件路径 **取值范围**: 字符长度0-512位
    * version  **参数解释**: 软件版本 **取值范围**: 字符长度0-128位
    * solution  **参数解释**: 修复建议 **取值范围**: 字符长度0-4096位
    * url  **参数解释**: URL **取值范围**: 字符长度0-2048位
    * dataList  **参数解释**: CVE列表 **取值范围**: 取值0-100个CveInfo对象
    * status  **参数解释**: 漏洞状态 **取值范围**: 字符长度0-64位
    * severityLevel  **参数解释**: 危险程度 **取值范围**: - Low：低危 - Medium：中危 - High：高危 - Critical：危急
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vulId' => null,
        'vulName' => null,
        'repairNecessity' => null,
        'description' => null,
        'position' => null,
        'appName' => null,
        'appPath' => null,
        'version' => null,
        'solution' => null,
        'url' => null,
        'dataList' => null,
        'status' => null,
        'severityLevel' => null
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
    * vulId  **参数解释**: 漏洞ID **取值范围**: 字符长度1-64位
    * vulName  **参数解释**: 漏洞名称 **取值范围**: 字符长度0-256位
    * repairNecessity  **参数解释**: 修复紧急度 **取值范围**: - immediate_repair：紧急修复 - delay_repair：延迟修复 - not_needed_repair：无需修复
    * description  **参数解释**: 漏洞描述 **取值范围**: 字符长度0-4096位
    * position  **参数解释**: 漏洞位置 **取值范围**: 字符长度0-512位
    * appName  **参数解释**: 软件名称 **取值范围**: 字符长度0-128位
    * appPath  **参数解释**: 软件路径 **取值范围**: 字符长度0-512位
    * version  **参数解释**: 软件版本 **取值范围**: 字符长度0-128位
    * solution  **参数解释**: 修复建议 **取值范围**: 字符长度0-4096位
    * url  **参数解释**: URL **取值范围**: 字符长度0-2048位
    * dataList  **参数解释**: CVE列表 **取值范围**: 取值0-100个CveInfo对象
    * status  **参数解释**: 漏洞状态 **取值范围**: 字符长度0-64位
    * severityLevel  **参数解释**: 危险程度 **取值范围**: - Low：低危 - Medium：中危 - High：高危 - Critical：危急
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vulId' => 'vul_id',
            'vulName' => 'vul_name',
            'repairNecessity' => 'repair_necessity',
            'description' => 'description',
            'position' => 'position',
            'appName' => 'app_name',
            'appPath' => 'app_path',
            'version' => 'version',
            'solution' => 'solution',
            'url' => 'url',
            'dataList' => 'data_list',
            'status' => 'status',
            'severityLevel' => 'severity_level'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vulId  **参数解释**: 漏洞ID **取值范围**: 字符长度1-64位
    * vulName  **参数解释**: 漏洞名称 **取值范围**: 字符长度0-256位
    * repairNecessity  **参数解释**: 修复紧急度 **取值范围**: - immediate_repair：紧急修复 - delay_repair：延迟修复 - not_needed_repair：无需修复
    * description  **参数解释**: 漏洞描述 **取值范围**: 字符长度0-4096位
    * position  **参数解释**: 漏洞位置 **取值范围**: 字符长度0-512位
    * appName  **参数解释**: 软件名称 **取值范围**: 字符长度0-128位
    * appPath  **参数解释**: 软件路径 **取值范围**: 字符长度0-512位
    * version  **参数解释**: 软件版本 **取值范围**: 字符长度0-128位
    * solution  **参数解释**: 修复建议 **取值范围**: 字符长度0-4096位
    * url  **参数解释**: URL **取值范围**: 字符长度0-2048位
    * dataList  **参数解释**: CVE列表 **取值范围**: 取值0-100个CveInfo对象
    * status  **参数解释**: 漏洞状态 **取值范围**: 字符长度0-64位
    * severityLevel  **参数解释**: 危险程度 **取值范围**: - Low：低危 - Medium：中危 - High：高危 - Critical：危急
    *
    * @var string[]
    */
    protected static $setters = [
            'vulId' => 'setVulId',
            'vulName' => 'setVulName',
            'repairNecessity' => 'setRepairNecessity',
            'description' => 'setDescription',
            'position' => 'setPosition',
            'appName' => 'setAppName',
            'appPath' => 'setAppPath',
            'version' => 'setVersion',
            'solution' => 'setSolution',
            'url' => 'setUrl',
            'dataList' => 'setDataList',
            'status' => 'setStatus',
            'severityLevel' => 'setSeverityLevel'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vulId  **参数解释**: 漏洞ID **取值范围**: 字符长度1-64位
    * vulName  **参数解释**: 漏洞名称 **取值范围**: 字符长度0-256位
    * repairNecessity  **参数解释**: 修复紧急度 **取值范围**: - immediate_repair：紧急修复 - delay_repair：延迟修复 - not_needed_repair：无需修复
    * description  **参数解释**: 漏洞描述 **取值范围**: 字符长度0-4096位
    * position  **参数解释**: 漏洞位置 **取值范围**: 字符长度0-512位
    * appName  **参数解释**: 软件名称 **取值范围**: 字符长度0-128位
    * appPath  **参数解释**: 软件路径 **取值范围**: 字符长度0-512位
    * version  **参数解释**: 软件版本 **取值范围**: 字符长度0-128位
    * solution  **参数解释**: 修复建议 **取值范围**: 字符长度0-4096位
    * url  **参数解释**: URL **取值范围**: 字符长度0-2048位
    * dataList  **参数解释**: CVE列表 **取值范围**: 取值0-100个CveInfo对象
    * status  **参数解释**: 漏洞状态 **取值范围**: 字符长度0-64位
    * severityLevel  **参数解释**: 危险程度 **取值范围**: - Low：低危 - Medium：中危 - High：高危 - Critical：危急
    *
    * @var string[]
    */
    protected static $getters = [
            'vulId' => 'getVulId',
            'vulName' => 'getVulName',
            'repairNecessity' => 'getRepairNecessity',
            'description' => 'getDescription',
            'position' => 'getPosition',
            'appName' => 'getAppName',
            'appPath' => 'getAppPath',
            'version' => 'getVersion',
            'solution' => 'getSolution',
            'url' => 'getUrl',
            'dataList' => 'getDataList',
            'status' => 'getStatus',
            'severityLevel' => 'getSeverityLevel'
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
        $this->container['vulId'] = isset($data['vulId']) ? $data['vulId'] : null;
        $this->container['vulName'] = isset($data['vulName']) ? $data['vulName'] : null;
        $this->container['repairNecessity'] = isset($data['repairNecessity']) ? $data['repairNecessity'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['appName'] = isset($data['appName']) ? $data['appName'] : null;
        $this->container['appPath'] = isset($data['appPath']) ? $data['appPath'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['solution'] = isset($data['solution']) ? $data['solution'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['dataList'] = isset($data['dataList']) ? $data['dataList'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['severityLevel'] = isset($data['severityLevel']) ? $data['severityLevel'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['vulId']) && (mb_strlen($this->container['vulId']) > 64)) {
                $invalidProperties[] = "invalid value for 'vulId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['vulId']) && (mb_strlen($this->container['vulId']) < 1)) {
                $invalidProperties[] = "invalid value for 'vulId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['vulName']) && (mb_strlen($this->container['vulName']) > 256)) {
                $invalidProperties[] = "invalid value for 'vulName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['vulName']) && (mb_strlen($this->container['vulName']) < 0)) {
                $invalidProperties[] = "invalid value for 'vulName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 4096)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['position']) && (mb_strlen($this->container['position']) > 512)) {
                $invalidProperties[] = "invalid value for 'position', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['position']) && (mb_strlen($this->container['position']) < 0)) {
                $invalidProperties[] = "invalid value for 'position', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['appName']) && (mb_strlen($this->container['appName']) > 128)) {
                $invalidProperties[] = "invalid value for 'appName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['appName']) && (mb_strlen($this->container['appName']) < 0)) {
                $invalidProperties[] = "invalid value for 'appName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['appPath']) && (mb_strlen($this->container['appPath']) > 512)) {
                $invalidProperties[] = "invalid value for 'appPath', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['appPath']) && (mb_strlen($this->container['appPath']) < 0)) {
                $invalidProperties[] = "invalid value for 'appPath', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 128)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) < 0)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['solution']) && (mb_strlen($this->container['solution']) > 4096)) {
                $invalidProperties[] = "invalid value for 'solution', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['solution']) && (mb_strlen($this->container['solution']) < 0)) {
                $invalidProperties[] = "invalid value for 'solution', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['url']) && (mb_strlen($this->container['url']) > 2048)) {
                $invalidProperties[] = "invalid value for 'url', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['url']) && (mb_strlen($this->container['url']) < 0)) {
                $invalidProperties[] = "invalid value for 'url', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 64)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
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
    * Gets vulId
    *  **参数解释**: 漏洞ID **取值范围**: 字符长度1-64位
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
    * @param string|null $vulId **参数解释**: 漏洞ID **取值范围**: 字符长度1-64位
    *
    * @return $this
    */
    public function setVulId($vulId)
    {
        $this->container['vulId'] = $vulId;
        return $this;
    }

    /**
    * Gets vulName
    *  **参数解释**: 漏洞名称 **取值范围**: 字符长度0-256位
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
    * @param string|null $vulName **参数解释**: 漏洞名称 **取值范围**: 字符长度0-256位
    *
    * @return $this
    */
    public function setVulName($vulName)
    {
        $this->container['vulName'] = $vulName;
        return $this;
    }

    /**
    * Gets repairNecessity
    *  **参数解释**: 修复紧急度 **取值范围**: - immediate_repair：紧急修复 - delay_repair：延迟修复 - not_needed_repair：无需修复
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
    * @param string|null $repairNecessity **参数解释**: 修复紧急度 **取值范围**: - immediate_repair：紧急修复 - delay_repair：延迟修复 - not_needed_repair：无需修复
    *
    * @return $this
    */
    public function setRepairNecessity($repairNecessity)
    {
        $this->container['repairNecessity'] = $repairNecessity;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**: 漏洞描述 **取值范围**: 字符长度0-4096位
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
    * @param string|null $description **参数解释**: 漏洞描述 **取值范围**: 字符长度0-4096位
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets position
    *  **参数解释**: 漏洞位置 **取值范围**: 字符长度0-512位
    *
    * @return string|null
    */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
    * Sets position
    *
    * @param string|null $position **参数解释**: 漏洞位置 **取值范围**: 字符长度0-512位
    *
    * @return $this
    */
    public function setPosition($position)
    {
        $this->container['position'] = $position;
        return $this;
    }

    /**
    * Gets appName
    *  **参数解释**: 软件名称 **取值范围**: 字符长度0-128位
    *
    * @return string|null
    */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
    * Sets appName
    *
    * @param string|null $appName **参数解释**: 软件名称 **取值范围**: 字符长度0-128位
    *
    * @return $this
    */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;
        return $this;
    }

    /**
    * Gets appPath
    *  **参数解释**: 软件路径 **取值范围**: 字符长度0-512位
    *
    * @return string|null
    */
    public function getAppPath()
    {
        return $this->container['appPath'];
    }

    /**
    * Sets appPath
    *
    * @param string|null $appPath **参数解释**: 软件路径 **取值范围**: 字符长度0-512位
    *
    * @return $this
    */
    public function setAppPath($appPath)
    {
        $this->container['appPath'] = $appPath;
        return $this;
    }

    /**
    * Gets version
    *  **参数解释**: 软件版本 **取值范围**: 字符长度0-128位
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version **参数解释**: 软件版本 **取值范围**: 字符长度0-128位
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets solution
    *  **参数解释**: 修复建议 **取值范围**: 字符长度0-4096位
    *
    * @return string|null
    */
    public function getSolution()
    {
        return $this->container['solution'];
    }

    /**
    * Sets solution
    *
    * @param string|null $solution **参数解释**: 修复建议 **取值范围**: 字符长度0-4096位
    *
    * @return $this
    */
    public function setSolution($solution)
    {
        $this->container['solution'] = $solution;
        return $this;
    }

    /**
    * Gets url
    *  **参数解释**: URL **取值范围**: 字符长度0-2048位
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
    * @param string|null $url **参数解释**: URL **取值范围**: 字符长度0-2048位
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets dataList
    *  **参数解释**: CVE列表 **取值范围**: 取值0-100个CveInfo对象
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\CveInfo[]|null
    */
    public function getDataList()
    {
        return $this->container['dataList'];
    }

    /**
    * Sets dataList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\CveInfo[]|null $dataList **参数解释**: CVE列表 **取值范围**: 取值0-100个CveInfo对象
    *
    * @return $this
    */
    public function setDataList($dataList)
    {
        $this->container['dataList'] = $dataList;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**: 漏洞状态 **取值范围**: 字符长度0-64位
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
    * @param string|null $status **参数解释**: 漏洞状态 **取值范围**: 字符长度0-64位
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets severityLevel
    *  **参数解释**: 危险程度 **取值范围**: - Low：低危 - Medium：中危 - High：高危 - Critical：危急
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
    * @param string|null $severityLevel **参数解释**: 危险程度 **取值范围**: - Low：低危 - Medium：中危 - High：高危 - Critical：危急
    *
    * @return $this
    */
    public function setSeverityLevel($severityLevel)
    {
        $this->container['severityLevel'] = $severityLevel;
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

