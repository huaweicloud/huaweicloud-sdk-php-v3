<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LinuxVulDetailInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LinuxVulDetailInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cveId  **参数解释**: 漏洞编号 **取值范围**: 字符长度0-255
    * cveName  **参数解释**: cve漏洞名称 **取值范围**: 字符长度0-512
    * cvssVector  **参数解释**: 攻击矢量 **取值范围**: 字符长度0-255
    * cveSolution  **参数解释**: cve修复建议 **取值范围**: 字符长度0-4096
    * cveAffect  **参数解释**: cve漏洞危害 **取值范围**: 字符长度0-128
    * cveAffectDescription  **参数解释**: cve漏洞危害的描述信息 **取值范围**: 字符长度0-4096
    * cveType  **参数解释**: cve漏洞类型 **取值范围**: 字符长度0-128
    * cveTypeDescription  **参数解释**: cve漏洞类型的描述信息 **取值范围**: 字符长度0-4096
    * cveLevel  **参数解释**: cve危险程度 **取值范围**: - Low：低危 - Medium：中危 - High：高危
    * cvss  **参数解释**: 漏洞分值 **取值范围**: 最小值0，最大值10
    * cvssVersion  **参数解释**: cvss评分版本 **取值范围**: 字符长度0-32
    * description  **参数解释**: 漏洞描述 **取值范围**: 字符长度0-1024
    * publicTime  **参数解释**: 披露时间 **取值范围**: 最小值0，最大值2^63-1
    * cnvdId  **参数解释**: cnvd编号 **取值范围**: 字符长度0-32
    * cnnvdId  **参数解释**: cnnvd编号 **取值范围**: 字符长度0-32
    * hostsNum  hostsNum
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cveId' => 'string',
            'cveName' => 'string',
            'cvssVector' => 'string',
            'cveSolution' => 'string',
            'cveAffect' => 'string',
            'cveAffectDescription' => 'string',
            'cveType' => 'string',
            'cveTypeDescription' => 'string',
            'cveLevel' => 'string',
            'cvss' => 'float',
            'cvssVersion' => 'string',
            'description' => 'string',
            'publicTime' => 'int',
            'cnvdId' => 'string',
            'cnnvdId' => 'string',
            'hostsNum' => '\HuaweiCloud\SDK\Hss\V5\Model\VulnerabilityHostNumberInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cveId  **参数解释**: 漏洞编号 **取值范围**: 字符长度0-255
    * cveName  **参数解释**: cve漏洞名称 **取值范围**: 字符长度0-512
    * cvssVector  **参数解释**: 攻击矢量 **取值范围**: 字符长度0-255
    * cveSolution  **参数解释**: cve修复建议 **取值范围**: 字符长度0-4096
    * cveAffect  **参数解释**: cve漏洞危害 **取值范围**: 字符长度0-128
    * cveAffectDescription  **参数解释**: cve漏洞危害的描述信息 **取值范围**: 字符长度0-4096
    * cveType  **参数解释**: cve漏洞类型 **取值范围**: 字符长度0-128
    * cveTypeDescription  **参数解释**: cve漏洞类型的描述信息 **取值范围**: 字符长度0-4096
    * cveLevel  **参数解释**: cve危险程度 **取值范围**: - Low：低危 - Medium：中危 - High：高危
    * cvss  **参数解释**: 漏洞分值 **取值范围**: 最小值0，最大值10
    * cvssVersion  **参数解释**: cvss评分版本 **取值范围**: 字符长度0-32
    * description  **参数解释**: 漏洞描述 **取值范围**: 字符长度0-1024
    * publicTime  **参数解释**: 披露时间 **取值范围**: 最小值0，最大值2^63-1
    * cnvdId  **参数解释**: cnvd编号 **取值范围**: 字符长度0-32
    * cnnvdId  **参数解释**: cnnvd编号 **取值范围**: 字符长度0-32
    * hostsNum  hostsNum
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cveId' => null,
        'cveName' => null,
        'cvssVector' => null,
        'cveSolution' => null,
        'cveAffect' => null,
        'cveAffectDescription' => null,
        'cveType' => null,
        'cveTypeDescription' => null,
        'cveLevel' => null,
        'cvss' => 'float',
        'cvssVersion' => null,
        'description' => null,
        'publicTime' => 'int64',
        'cnvdId' => null,
        'cnnvdId' => null,
        'hostsNum' => null
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
    * cveId  **参数解释**: 漏洞编号 **取值范围**: 字符长度0-255
    * cveName  **参数解释**: cve漏洞名称 **取值范围**: 字符长度0-512
    * cvssVector  **参数解释**: 攻击矢量 **取值范围**: 字符长度0-255
    * cveSolution  **参数解释**: cve修复建议 **取值范围**: 字符长度0-4096
    * cveAffect  **参数解释**: cve漏洞危害 **取值范围**: 字符长度0-128
    * cveAffectDescription  **参数解释**: cve漏洞危害的描述信息 **取值范围**: 字符长度0-4096
    * cveType  **参数解释**: cve漏洞类型 **取值范围**: 字符长度0-128
    * cveTypeDescription  **参数解释**: cve漏洞类型的描述信息 **取值范围**: 字符长度0-4096
    * cveLevel  **参数解释**: cve危险程度 **取值范围**: - Low：低危 - Medium：中危 - High：高危
    * cvss  **参数解释**: 漏洞分值 **取值范围**: 最小值0，最大值10
    * cvssVersion  **参数解释**: cvss评分版本 **取值范围**: 字符长度0-32
    * description  **参数解释**: 漏洞描述 **取值范围**: 字符长度0-1024
    * publicTime  **参数解释**: 披露时间 **取值范围**: 最小值0，最大值2^63-1
    * cnvdId  **参数解释**: cnvd编号 **取值范围**: 字符长度0-32
    * cnnvdId  **参数解释**: cnnvd编号 **取值范围**: 字符长度0-32
    * hostsNum  hostsNum
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cveId' => 'cve_id',
            'cveName' => 'cve_name',
            'cvssVector' => 'cvss_vector',
            'cveSolution' => 'cve_solution',
            'cveAffect' => 'cve_affect',
            'cveAffectDescription' => 'cve_affect_description',
            'cveType' => 'cve_type',
            'cveTypeDescription' => 'cve_type_description',
            'cveLevel' => 'cve_level',
            'cvss' => 'cvss',
            'cvssVersion' => 'cvss_version',
            'description' => 'description',
            'publicTime' => 'public_time',
            'cnvdId' => 'cnvd_id',
            'cnnvdId' => 'cnnvd_id',
            'hostsNum' => 'hosts_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cveId  **参数解释**: 漏洞编号 **取值范围**: 字符长度0-255
    * cveName  **参数解释**: cve漏洞名称 **取值范围**: 字符长度0-512
    * cvssVector  **参数解释**: 攻击矢量 **取值范围**: 字符长度0-255
    * cveSolution  **参数解释**: cve修复建议 **取值范围**: 字符长度0-4096
    * cveAffect  **参数解释**: cve漏洞危害 **取值范围**: 字符长度0-128
    * cveAffectDescription  **参数解释**: cve漏洞危害的描述信息 **取值范围**: 字符长度0-4096
    * cveType  **参数解释**: cve漏洞类型 **取值范围**: 字符长度0-128
    * cveTypeDescription  **参数解释**: cve漏洞类型的描述信息 **取值范围**: 字符长度0-4096
    * cveLevel  **参数解释**: cve危险程度 **取值范围**: - Low：低危 - Medium：中危 - High：高危
    * cvss  **参数解释**: 漏洞分值 **取值范围**: 最小值0，最大值10
    * cvssVersion  **参数解释**: cvss评分版本 **取值范围**: 字符长度0-32
    * description  **参数解释**: 漏洞描述 **取值范围**: 字符长度0-1024
    * publicTime  **参数解释**: 披露时间 **取值范围**: 最小值0，最大值2^63-1
    * cnvdId  **参数解释**: cnvd编号 **取值范围**: 字符长度0-32
    * cnnvdId  **参数解释**: cnnvd编号 **取值范围**: 字符长度0-32
    * hostsNum  hostsNum
    *
    * @var string[]
    */
    protected static $setters = [
            'cveId' => 'setCveId',
            'cveName' => 'setCveName',
            'cvssVector' => 'setCvssVector',
            'cveSolution' => 'setCveSolution',
            'cveAffect' => 'setCveAffect',
            'cveAffectDescription' => 'setCveAffectDescription',
            'cveType' => 'setCveType',
            'cveTypeDescription' => 'setCveTypeDescription',
            'cveLevel' => 'setCveLevel',
            'cvss' => 'setCvss',
            'cvssVersion' => 'setCvssVersion',
            'description' => 'setDescription',
            'publicTime' => 'setPublicTime',
            'cnvdId' => 'setCnvdId',
            'cnnvdId' => 'setCnnvdId',
            'hostsNum' => 'setHostsNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cveId  **参数解释**: 漏洞编号 **取值范围**: 字符长度0-255
    * cveName  **参数解释**: cve漏洞名称 **取值范围**: 字符长度0-512
    * cvssVector  **参数解释**: 攻击矢量 **取值范围**: 字符长度0-255
    * cveSolution  **参数解释**: cve修复建议 **取值范围**: 字符长度0-4096
    * cveAffect  **参数解释**: cve漏洞危害 **取值范围**: 字符长度0-128
    * cveAffectDescription  **参数解释**: cve漏洞危害的描述信息 **取值范围**: 字符长度0-4096
    * cveType  **参数解释**: cve漏洞类型 **取值范围**: 字符长度0-128
    * cveTypeDescription  **参数解释**: cve漏洞类型的描述信息 **取值范围**: 字符长度0-4096
    * cveLevel  **参数解释**: cve危险程度 **取值范围**: - Low：低危 - Medium：中危 - High：高危
    * cvss  **参数解释**: 漏洞分值 **取值范围**: 最小值0，最大值10
    * cvssVersion  **参数解释**: cvss评分版本 **取值范围**: 字符长度0-32
    * description  **参数解释**: 漏洞描述 **取值范围**: 字符长度0-1024
    * publicTime  **参数解释**: 披露时间 **取值范围**: 最小值0，最大值2^63-1
    * cnvdId  **参数解释**: cnvd编号 **取值范围**: 字符长度0-32
    * cnnvdId  **参数解释**: cnnvd编号 **取值范围**: 字符长度0-32
    * hostsNum  hostsNum
    *
    * @var string[]
    */
    protected static $getters = [
            'cveId' => 'getCveId',
            'cveName' => 'getCveName',
            'cvssVector' => 'getCvssVector',
            'cveSolution' => 'getCveSolution',
            'cveAffect' => 'getCveAffect',
            'cveAffectDescription' => 'getCveAffectDescription',
            'cveType' => 'getCveType',
            'cveTypeDescription' => 'getCveTypeDescription',
            'cveLevel' => 'getCveLevel',
            'cvss' => 'getCvss',
            'cvssVersion' => 'getCvssVersion',
            'description' => 'getDescription',
            'publicTime' => 'getPublicTime',
            'cnvdId' => 'getCnvdId',
            'cnnvdId' => 'getCnnvdId',
            'hostsNum' => 'getHostsNum'
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
        $this->container['cveId'] = isset($data['cveId']) ? $data['cveId'] : null;
        $this->container['cveName'] = isset($data['cveName']) ? $data['cveName'] : null;
        $this->container['cvssVector'] = isset($data['cvssVector']) ? $data['cvssVector'] : null;
        $this->container['cveSolution'] = isset($data['cveSolution']) ? $data['cveSolution'] : null;
        $this->container['cveAffect'] = isset($data['cveAffect']) ? $data['cveAffect'] : null;
        $this->container['cveAffectDescription'] = isset($data['cveAffectDescription']) ? $data['cveAffectDescription'] : null;
        $this->container['cveType'] = isset($data['cveType']) ? $data['cveType'] : null;
        $this->container['cveTypeDescription'] = isset($data['cveTypeDescription']) ? $data['cveTypeDescription'] : null;
        $this->container['cveLevel'] = isset($data['cveLevel']) ? $data['cveLevel'] : null;
        $this->container['cvss'] = isset($data['cvss']) ? $data['cvss'] : null;
        $this->container['cvssVersion'] = isset($data['cvssVersion']) ? $data['cvssVersion'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['publicTime'] = isset($data['publicTime']) ? $data['publicTime'] : null;
        $this->container['cnvdId'] = isset($data['cnvdId']) ? $data['cnvdId'] : null;
        $this->container['cnnvdId'] = isset($data['cnnvdId']) ? $data['cnnvdId'] : null;
        $this->container['hostsNum'] = isset($data['hostsNum']) ? $data['hostsNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['cveId']) && (mb_strlen($this->container['cveId']) > 255)) {
                $invalidProperties[] = "invalid value for 'cveId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['cveId']) && (mb_strlen($this->container['cveId']) < 0)) {
                $invalidProperties[] = "invalid value for 'cveId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cveName']) && (mb_strlen($this->container['cveName']) > 512)) {
                $invalidProperties[] = "invalid value for 'cveName', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['cveName']) && (mb_strlen($this->container['cveName']) < 0)) {
                $invalidProperties[] = "invalid value for 'cveName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cvssVector']) && (mb_strlen($this->container['cvssVector']) > 255)) {
                $invalidProperties[] = "invalid value for 'cvssVector', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['cvssVector']) && (mb_strlen($this->container['cvssVector']) < 0)) {
                $invalidProperties[] = "invalid value for 'cvssVector', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cveSolution']) && (mb_strlen($this->container['cveSolution']) > 4096)) {
                $invalidProperties[] = "invalid value for 'cveSolution', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['cveSolution']) && (mb_strlen($this->container['cveSolution']) < 0)) {
                $invalidProperties[] = "invalid value for 'cveSolution', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cveAffect']) && (mb_strlen($this->container['cveAffect']) > 128)) {
                $invalidProperties[] = "invalid value for 'cveAffect', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['cveAffect']) && (mb_strlen($this->container['cveAffect']) < 0)) {
                $invalidProperties[] = "invalid value for 'cveAffect', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cveAffectDescription']) && (mb_strlen($this->container['cveAffectDescription']) > 4096)) {
                $invalidProperties[] = "invalid value for 'cveAffectDescription', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['cveAffectDescription']) && (mb_strlen($this->container['cveAffectDescription']) < 0)) {
                $invalidProperties[] = "invalid value for 'cveAffectDescription', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cveType']) && (mb_strlen($this->container['cveType']) > 128)) {
                $invalidProperties[] = "invalid value for 'cveType', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['cveType']) && (mb_strlen($this->container['cveType']) < 0)) {
                $invalidProperties[] = "invalid value for 'cveType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cveTypeDescription']) && (mb_strlen($this->container['cveTypeDescription']) > 4096)) {
                $invalidProperties[] = "invalid value for 'cveTypeDescription', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['cveTypeDescription']) && (mb_strlen($this->container['cveTypeDescription']) < 0)) {
                $invalidProperties[] = "invalid value for 'cveTypeDescription', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cvss']) && ($this->container['cvss'] > 1E+1)) {
                $invalidProperties[] = "invalid value for 'cvss', must be smaller than or equal to 1E+1.";
            }
            if (!is_null($this->container['cvss']) && ($this->container['cvss'] < 0)) {
                $invalidProperties[] = "invalid value for 'cvss', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cvssVersion']) && (mb_strlen($this->container['cvssVersion']) > 32)) {
                $invalidProperties[] = "invalid value for 'cvssVersion', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['cvssVersion']) && (mb_strlen($this->container['cvssVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'cvssVersion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cnvdId']) && (mb_strlen($this->container['cnvdId']) > 32)) {
                $invalidProperties[] = "invalid value for 'cnvdId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['cnvdId']) && (mb_strlen($this->container['cnvdId']) < 0)) {
                $invalidProperties[] = "invalid value for 'cnvdId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cnnvdId']) && (mb_strlen($this->container['cnnvdId']) > 32)) {
                $invalidProperties[] = "invalid value for 'cnnvdId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['cnnvdId']) && (mb_strlen($this->container['cnnvdId']) < 0)) {
                $invalidProperties[] = "invalid value for 'cnnvdId', the character length must be bigger than or equal to 0.";
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
    * Gets cveId
    *  **参数解释**: 漏洞编号 **取值范围**: 字符长度0-255
    *
    * @return string|null
    */
    public function getCveId()
    {
        return $this->container['cveId'];
    }

    /**
    * Sets cveId
    *
    * @param string|null $cveId **参数解释**: 漏洞编号 **取值范围**: 字符长度0-255
    *
    * @return $this
    */
    public function setCveId($cveId)
    {
        $this->container['cveId'] = $cveId;
        return $this;
    }

    /**
    * Gets cveName
    *  **参数解释**: cve漏洞名称 **取值范围**: 字符长度0-512
    *
    * @return string|null
    */
    public function getCveName()
    {
        return $this->container['cveName'];
    }

    /**
    * Sets cveName
    *
    * @param string|null $cveName **参数解释**: cve漏洞名称 **取值范围**: 字符长度0-512
    *
    * @return $this
    */
    public function setCveName($cveName)
    {
        $this->container['cveName'] = $cveName;
        return $this;
    }

    /**
    * Gets cvssVector
    *  **参数解释**: 攻击矢量 **取值范围**: 字符长度0-255
    *
    * @return string|null
    */
    public function getCvssVector()
    {
        return $this->container['cvssVector'];
    }

    /**
    * Sets cvssVector
    *
    * @param string|null $cvssVector **参数解释**: 攻击矢量 **取值范围**: 字符长度0-255
    *
    * @return $this
    */
    public function setCvssVector($cvssVector)
    {
        $this->container['cvssVector'] = $cvssVector;
        return $this;
    }

    /**
    * Gets cveSolution
    *  **参数解释**: cve修复建议 **取值范围**: 字符长度0-4096
    *
    * @return string|null
    */
    public function getCveSolution()
    {
        return $this->container['cveSolution'];
    }

    /**
    * Sets cveSolution
    *
    * @param string|null $cveSolution **参数解释**: cve修复建议 **取值范围**: 字符长度0-4096
    *
    * @return $this
    */
    public function setCveSolution($cveSolution)
    {
        $this->container['cveSolution'] = $cveSolution;
        return $this;
    }

    /**
    * Gets cveAffect
    *  **参数解释**: cve漏洞危害 **取值范围**: 字符长度0-128
    *
    * @return string|null
    */
    public function getCveAffect()
    {
        return $this->container['cveAffect'];
    }

    /**
    * Sets cveAffect
    *
    * @param string|null $cveAffect **参数解释**: cve漏洞危害 **取值范围**: 字符长度0-128
    *
    * @return $this
    */
    public function setCveAffect($cveAffect)
    {
        $this->container['cveAffect'] = $cveAffect;
        return $this;
    }

    /**
    * Gets cveAffectDescription
    *  **参数解释**: cve漏洞危害的描述信息 **取值范围**: 字符长度0-4096
    *
    * @return string|null
    */
    public function getCveAffectDescription()
    {
        return $this->container['cveAffectDescription'];
    }

    /**
    * Sets cveAffectDescription
    *
    * @param string|null $cveAffectDescription **参数解释**: cve漏洞危害的描述信息 **取值范围**: 字符长度0-4096
    *
    * @return $this
    */
    public function setCveAffectDescription($cveAffectDescription)
    {
        $this->container['cveAffectDescription'] = $cveAffectDescription;
        return $this;
    }

    /**
    * Gets cveType
    *  **参数解释**: cve漏洞类型 **取值范围**: 字符长度0-128
    *
    * @return string|null
    */
    public function getCveType()
    {
        return $this->container['cveType'];
    }

    /**
    * Sets cveType
    *
    * @param string|null $cveType **参数解释**: cve漏洞类型 **取值范围**: 字符长度0-128
    *
    * @return $this
    */
    public function setCveType($cveType)
    {
        $this->container['cveType'] = $cveType;
        return $this;
    }

    /**
    * Gets cveTypeDescription
    *  **参数解释**: cve漏洞类型的描述信息 **取值范围**: 字符长度0-4096
    *
    * @return string|null
    */
    public function getCveTypeDescription()
    {
        return $this->container['cveTypeDescription'];
    }

    /**
    * Sets cveTypeDescription
    *
    * @param string|null $cveTypeDescription **参数解释**: cve漏洞类型的描述信息 **取值范围**: 字符长度0-4096
    *
    * @return $this
    */
    public function setCveTypeDescription($cveTypeDescription)
    {
        $this->container['cveTypeDescription'] = $cveTypeDescription;
        return $this;
    }

    /**
    * Gets cveLevel
    *  **参数解释**: cve危险程度 **取值范围**: - Low：低危 - Medium：中危 - High：高危
    *
    * @return string|null
    */
    public function getCveLevel()
    {
        return $this->container['cveLevel'];
    }

    /**
    * Sets cveLevel
    *
    * @param string|null $cveLevel **参数解释**: cve危险程度 **取值范围**: - Low：低危 - Medium：中危 - High：高危
    *
    * @return $this
    */
    public function setCveLevel($cveLevel)
    {
        $this->container['cveLevel'] = $cveLevel;
        return $this;
    }

    /**
    * Gets cvss
    *  **参数解释**: 漏洞分值 **取值范围**: 最小值0，最大值10
    *
    * @return float|null
    */
    public function getCvss()
    {
        return $this->container['cvss'];
    }

    /**
    * Sets cvss
    *
    * @param float|null $cvss **参数解释**: 漏洞分值 **取值范围**: 最小值0，最大值10
    *
    * @return $this
    */
    public function setCvss($cvss)
    {
        $this->container['cvss'] = $cvss;
        return $this;
    }

    /**
    * Gets cvssVersion
    *  **参数解释**: cvss评分版本 **取值范围**: 字符长度0-32
    *
    * @return string|null
    */
    public function getCvssVersion()
    {
        return $this->container['cvssVersion'];
    }

    /**
    * Sets cvssVersion
    *
    * @param string|null $cvssVersion **参数解释**: cvss评分版本 **取值范围**: 字符长度0-32
    *
    * @return $this
    */
    public function setCvssVersion($cvssVersion)
    {
        $this->container['cvssVersion'] = $cvssVersion;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**: 漏洞描述 **取值范围**: 字符长度0-1024
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
    * @param string|null $description **参数解释**: 漏洞描述 **取值范围**: 字符长度0-1024
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets publicTime
    *  **参数解释**: 披露时间 **取值范围**: 最小值0，最大值2^63-1
    *
    * @return int|null
    */
    public function getPublicTime()
    {
        return $this->container['publicTime'];
    }

    /**
    * Sets publicTime
    *
    * @param int|null $publicTime **参数解释**: 披露时间 **取值范围**: 最小值0，最大值2^63-1
    *
    * @return $this
    */
    public function setPublicTime($publicTime)
    {
        $this->container['publicTime'] = $publicTime;
        return $this;
    }

    /**
    * Gets cnvdId
    *  **参数解释**: cnvd编号 **取值范围**: 字符长度0-32
    *
    * @return string|null
    */
    public function getCnvdId()
    {
        return $this->container['cnvdId'];
    }

    /**
    * Sets cnvdId
    *
    * @param string|null $cnvdId **参数解释**: cnvd编号 **取值范围**: 字符长度0-32
    *
    * @return $this
    */
    public function setCnvdId($cnvdId)
    {
        $this->container['cnvdId'] = $cnvdId;
        return $this;
    }

    /**
    * Gets cnnvdId
    *  **参数解释**: cnnvd编号 **取值范围**: 字符长度0-32
    *
    * @return string|null
    */
    public function getCnnvdId()
    {
        return $this->container['cnnvdId'];
    }

    /**
    * Sets cnnvdId
    *
    * @param string|null $cnnvdId **参数解释**: cnnvd编号 **取值范围**: 字符长度0-32
    *
    * @return $this
    */
    public function setCnnvdId($cnnvdId)
    {
        $this->container['cnnvdId'] = $cnnvdId;
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

