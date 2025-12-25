<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WebCmsVulDetailInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WebCmsVulDetailInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vulId  **参数解释**: 漏洞补丁编号 **取值范围**: 字符长度0-256
    * app  **参数解释**: 软件名称 **取值范围**: 字符长度0-32
    * nameZh  **参数解释**: 中文名称 **取值范围**: 字符长度0-128
    * nameEn  **参数解释**: 英文名称 **取值范围**: 字符长度0-128
    * publicTime  **参数解释**: 披露时间 **取值范围**: 最小值0，最大值2^63-1
    * vulLabelZh  **参数解释**: 漏洞标签中文名称（已废弃，后续删除） **取值范围**: 字符长度0-64
    * vulLabelEn  **参数解释**: 漏洞标签英文名称（已废弃，后续删除） **取值范围**: 字符长度0-64
    * repairNecessity  **参数解释**: 修复必要性 **取值范围**: - 1：高 - 2：中 - 3：低
    * severityLevel  **参数解释**: 修复必要性 **取值范围**: - Low：低危 - Medium：中危 - High：高危 - Critical：紧急
    * descriptionZh  **参数解释**: cve漏洞中文描述 **取值范围**: 字符长度0-1024
    * descriptionEn  **参数解释**: cve漏洞英文描述 **取值范围**: 字符长度0-1024
    * solutionZh  **参数解释**: cve漏洞中文修复建议 **取值范围**: 字符长度0-1024
    * solutionEn  **参数解释**: cve漏洞英文修复建议 **取值范围**: 字符长度0-1024
    * cveId  **参数解释**: 漏洞编号 **取值范围**: 字符长度0-255
    * cveScore  **参数解释**: cve分数 **取值范围**: 最小值0，最大值10
    * cnvdId  **参数解释**: cnvd编号 **取值范围**: 字符长度0-32
    * cnnvdId  **参数解释**: cnnvd编号 **取值范围**: 字符长度0-32
    * bugtraqId  **参数解释**: bugtraq编号 **取值范围**: 字符长度0-32
    * suffixPath  **参数解释**: 后缀路径 **取值范围**: 字符长度0-128
    * md5  **参数解释**: md5 **取值范围**: 字符长度0-32
    * createTime  **参数解释**: 创建时间 **取值范围**: 最小值0，最大值9223372036854775807
    * updateTime  **参数解释**: 更新时间 **取值范围**: 最小值0，最大值9223372036854775807
    * tagsZh  **参数解释**: 漏洞标签中文名称 **取值范围**: 字符长度0-64
    * tagsEn  **参数解释**: 漏洞标签英文名称 **取值范围**: 字符长度0-64
    * patchUrl  **参数解释**: 补丁地址 **取值范围**: 字符长度0-512
    * hostsNum  hostsNum
    * cveLevel  **参数解释**: cve危险程度 **取值范围**: - Low：低危 - Medium：中危 - High：高危
    * cvss  **参数解释**: 漏洞分值 **取值范围**: 最小值0，最大值10
    * cvssVersion  **参数解释**: cvss评分版本 **取值范围**: 字符长度0-32
    * description  **参数解释**: 漏洞描述 **取值范围**: 字符长度0-1024
    * cveName  **参数解释**: cve漏洞名称 **取值范围**: 字符长度0-512
    * cvssVector  **参数解释**: 攻击矢量 **取值范围**: 字符长度0-255
    * cveSolution  **参数解释**: cve修复建议 **取值范围**: 字符长度0-4096
    * cveAffect  **参数解释**: cve漏洞危害 **取值范围**: 字符长度0-128
    * cveAffectDescription  **参数解释**: cve漏洞危害的描述信息 **取值范围**: 字符长度0-4096
    * cveType  **参数解释**: cve漏洞类型 **取值范围**: 字符长度0-128
    * cveTypeDescription  **参数解释**: cve漏洞类型的描述信息 **取值范围**: 字符长度0-4096
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vulId' => 'string',
            'app' => 'string',
            'nameZh' => 'string',
            'nameEn' => 'string',
            'publicTime' => 'int',
            'vulLabelZh' => 'string',
            'vulLabelEn' => 'string',
            'repairNecessity' => 'int',
            'severityLevel' => 'string',
            'descriptionZh' => 'string',
            'descriptionEn' => 'string',
            'solutionZh' => 'string',
            'solutionEn' => 'string',
            'cveId' => 'string',
            'cveScore' => 'float',
            'cnvdId' => 'string',
            'cnnvdId' => 'string',
            'bugtraqId' => 'string',
            'suffixPath' => 'string',
            'md5' => 'string',
            'createTime' => 'int',
            'updateTime' => 'int',
            'tagsZh' => 'string',
            'tagsEn' => 'string',
            'patchUrl' => 'string',
            'hostsNum' => '\HuaweiCloud\SDK\Hss\V5\Model\VulnerabilityHostNumberInfo',
            'cveLevel' => 'string',
            'cvss' => 'float',
            'cvssVersion' => 'string',
            'description' => 'string',
            'cveName' => 'string',
            'cvssVector' => 'string',
            'cveSolution' => 'string',
            'cveAffect' => 'string',
            'cveAffectDescription' => 'string',
            'cveType' => 'string',
            'cveTypeDescription' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vulId  **参数解释**: 漏洞补丁编号 **取值范围**: 字符长度0-256
    * app  **参数解释**: 软件名称 **取值范围**: 字符长度0-32
    * nameZh  **参数解释**: 中文名称 **取值范围**: 字符长度0-128
    * nameEn  **参数解释**: 英文名称 **取值范围**: 字符长度0-128
    * publicTime  **参数解释**: 披露时间 **取值范围**: 最小值0，最大值2^63-1
    * vulLabelZh  **参数解释**: 漏洞标签中文名称（已废弃，后续删除） **取值范围**: 字符长度0-64
    * vulLabelEn  **参数解释**: 漏洞标签英文名称（已废弃，后续删除） **取值范围**: 字符长度0-64
    * repairNecessity  **参数解释**: 修复必要性 **取值范围**: - 1：高 - 2：中 - 3：低
    * severityLevel  **参数解释**: 修复必要性 **取值范围**: - Low：低危 - Medium：中危 - High：高危 - Critical：紧急
    * descriptionZh  **参数解释**: cve漏洞中文描述 **取值范围**: 字符长度0-1024
    * descriptionEn  **参数解释**: cve漏洞英文描述 **取值范围**: 字符长度0-1024
    * solutionZh  **参数解释**: cve漏洞中文修复建议 **取值范围**: 字符长度0-1024
    * solutionEn  **参数解释**: cve漏洞英文修复建议 **取值范围**: 字符长度0-1024
    * cveId  **参数解释**: 漏洞编号 **取值范围**: 字符长度0-255
    * cveScore  **参数解释**: cve分数 **取值范围**: 最小值0，最大值10
    * cnvdId  **参数解释**: cnvd编号 **取值范围**: 字符长度0-32
    * cnnvdId  **参数解释**: cnnvd编号 **取值范围**: 字符长度0-32
    * bugtraqId  **参数解释**: bugtraq编号 **取值范围**: 字符长度0-32
    * suffixPath  **参数解释**: 后缀路径 **取值范围**: 字符长度0-128
    * md5  **参数解释**: md5 **取值范围**: 字符长度0-32
    * createTime  **参数解释**: 创建时间 **取值范围**: 最小值0，最大值9223372036854775807
    * updateTime  **参数解释**: 更新时间 **取值范围**: 最小值0，最大值9223372036854775807
    * tagsZh  **参数解释**: 漏洞标签中文名称 **取值范围**: 字符长度0-64
    * tagsEn  **参数解释**: 漏洞标签英文名称 **取值范围**: 字符长度0-64
    * patchUrl  **参数解释**: 补丁地址 **取值范围**: 字符长度0-512
    * hostsNum  hostsNum
    * cveLevel  **参数解释**: cve危险程度 **取值范围**: - Low：低危 - Medium：中危 - High：高危
    * cvss  **参数解释**: 漏洞分值 **取值范围**: 最小值0，最大值10
    * cvssVersion  **参数解释**: cvss评分版本 **取值范围**: 字符长度0-32
    * description  **参数解释**: 漏洞描述 **取值范围**: 字符长度0-1024
    * cveName  **参数解释**: cve漏洞名称 **取值范围**: 字符长度0-512
    * cvssVector  **参数解释**: 攻击矢量 **取值范围**: 字符长度0-255
    * cveSolution  **参数解释**: cve修复建议 **取值范围**: 字符长度0-4096
    * cveAffect  **参数解释**: cve漏洞危害 **取值范围**: 字符长度0-128
    * cveAffectDescription  **参数解释**: cve漏洞危害的描述信息 **取值范围**: 字符长度0-4096
    * cveType  **参数解释**: cve漏洞类型 **取值范围**: 字符长度0-128
    * cveTypeDescription  **参数解释**: cve漏洞类型的描述信息 **取值范围**: 字符长度0-4096
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vulId' => null,
        'app' => null,
        'nameZh' => null,
        'nameEn' => null,
        'publicTime' => 'int64',
        'vulLabelZh' => null,
        'vulLabelEn' => null,
        'repairNecessity' => null,
        'severityLevel' => null,
        'descriptionZh' => null,
        'descriptionEn' => null,
        'solutionZh' => null,
        'solutionEn' => null,
        'cveId' => null,
        'cveScore' => 'float',
        'cnvdId' => null,
        'cnnvdId' => null,
        'bugtraqId' => null,
        'suffixPath' => null,
        'md5' => null,
        'createTime' => 'int64',
        'updateTime' => 'int64',
        'tagsZh' => null,
        'tagsEn' => null,
        'patchUrl' => null,
        'hostsNum' => null,
        'cveLevel' => null,
        'cvss' => 'float',
        'cvssVersion' => null,
        'description' => null,
        'cveName' => null,
        'cvssVector' => null,
        'cveSolution' => null,
        'cveAffect' => null,
        'cveAffectDescription' => null,
        'cveType' => null,
        'cveTypeDescription' => null
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
    * vulId  **参数解释**: 漏洞补丁编号 **取值范围**: 字符长度0-256
    * app  **参数解释**: 软件名称 **取值范围**: 字符长度0-32
    * nameZh  **参数解释**: 中文名称 **取值范围**: 字符长度0-128
    * nameEn  **参数解释**: 英文名称 **取值范围**: 字符长度0-128
    * publicTime  **参数解释**: 披露时间 **取值范围**: 最小值0，最大值2^63-1
    * vulLabelZh  **参数解释**: 漏洞标签中文名称（已废弃，后续删除） **取值范围**: 字符长度0-64
    * vulLabelEn  **参数解释**: 漏洞标签英文名称（已废弃，后续删除） **取值范围**: 字符长度0-64
    * repairNecessity  **参数解释**: 修复必要性 **取值范围**: - 1：高 - 2：中 - 3：低
    * severityLevel  **参数解释**: 修复必要性 **取值范围**: - Low：低危 - Medium：中危 - High：高危 - Critical：紧急
    * descriptionZh  **参数解释**: cve漏洞中文描述 **取值范围**: 字符长度0-1024
    * descriptionEn  **参数解释**: cve漏洞英文描述 **取值范围**: 字符长度0-1024
    * solutionZh  **参数解释**: cve漏洞中文修复建议 **取值范围**: 字符长度0-1024
    * solutionEn  **参数解释**: cve漏洞英文修复建议 **取值范围**: 字符长度0-1024
    * cveId  **参数解释**: 漏洞编号 **取值范围**: 字符长度0-255
    * cveScore  **参数解释**: cve分数 **取值范围**: 最小值0，最大值10
    * cnvdId  **参数解释**: cnvd编号 **取值范围**: 字符长度0-32
    * cnnvdId  **参数解释**: cnnvd编号 **取值范围**: 字符长度0-32
    * bugtraqId  **参数解释**: bugtraq编号 **取值范围**: 字符长度0-32
    * suffixPath  **参数解释**: 后缀路径 **取值范围**: 字符长度0-128
    * md5  **参数解释**: md5 **取值范围**: 字符长度0-32
    * createTime  **参数解释**: 创建时间 **取值范围**: 最小值0，最大值9223372036854775807
    * updateTime  **参数解释**: 更新时间 **取值范围**: 最小值0，最大值9223372036854775807
    * tagsZh  **参数解释**: 漏洞标签中文名称 **取值范围**: 字符长度0-64
    * tagsEn  **参数解释**: 漏洞标签英文名称 **取值范围**: 字符长度0-64
    * patchUrl  **参数解释**: 补丁地址 **取值范围**: 字符长度0-512
    * hostsNum  hostsNum
    * cveLevel  **参数解释**: cve危险程度 **取值范围**: - Low：低危 - Medium：中危 - High：高危
    * cvss  **参数解释**: 漏洞分值 **取值范围**: 最小值0，最大值10
    * cvssVersion  **参数解释**: cvss评分版本 **取值范围**: 字符长度0-32
    * description  **参数解释**: 漏洞描述 **取值范围**: 字符长度0-1024
    * cveName  **参数解释**: cve漏洞名称 **取值范围**: 字符长度0-512
    * cvssVector  **参数解释**: 攻击矢量 **取值范围**: 字符长度0-255
    * cveSolution  **参数解释**: cve修复建议 **取值范围**: 字符长度0-4096
    * cveAffect  **参数解释**: cve漏洞危害 **取值范围**: 字符长度0-128
    * cveAffectDescription  **参数解释**: cve漏洞危害的描述信息 **取值范围**: 字符长度0-4096
    * cveType  **参数解释**: cve漏洞类型 **取值范围**: 字符长度0-128
    * cveTypeDescription  **参数解释**: cve漏洞类型的描述信息 **取值范围**: 字符长度0-4096
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vulId' => 'vul_id',
            'app' => 'app',
            'nameZh' => 'name_zh',
            'nameEn' => 'name_en',
            'publicTime' => 'public_time',
            'vulLabelZh' => 'vulLabel_zh',
            'vulLabelEn' => 'vulLabel_en',
            'repairNecessity' => 'repair_necessity',
            'severityLevel' => 'severity_level',
            'descriptionZh' => 'description_zh',
            'descriptionEn' => 'description_en',
            'solutionZh' => 'solution_zh',
            'solutionEn' => 'solution_en',
            'cveId' => 'cve_id',
            'cveScore' => 'cve_score',
            'cnvdId' => 'cnvd_id',
            'cnnvdId' => 'cnnvd_id',
            'bugtraqId' => 'bugtraq_id',
            'suffixPath' => 'suffix_path',
            'md5' => 'md5',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'tagsZh' => 'tags_zh',
            'tagsEn' => 'tags_en',
            'patchUrl' => 'patch_url',
            'hostsNum' => 'hosts_num',
            'cveLevel' => 'cve_level',
            'cvss' => 'cvss',
            'cvssVersion' => 'cvss_version',
            'description' => 'description',
            'cveName' => 'cve_name',
            'cvssVector' => 'cvss_vector',
            'cveSolution' => 'cve_solution',
            'cveAffect' => 'cve_affect',
            'cveAffectDescription' => 'cve_affect_description',
            'cveType' => 'cve_type',
            'cveTypeDescription' => 'cve_type_description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vulId  **参数解释**: 漏洞补丁编号 **取值范围**: 字符长度0-256
    * app  **参数解释**: 软件名称 **取值范围**: 字符长度0-32
    * nameZh  **参数解释**: 中文名称 **取值范围**: 字符长度0-128
    * nameEn  **参数解释**: 英文名称 **取值范围**: 字符长度0-128
    * publicTime  **参数解释**: 披露时间 **取值范围**: 最小值0，最大值2^63-1
    * vulLabelZh  **参数解释**: 漏洞标签中文名称（已废弃，后续删除） **取值范围**: 字符长度0-64
    * vulLabelEn  **参数解释**: 漏洞标签英文名称（已废弃，后续删除） **取值范围**: 字符长度0-64
    * repairNecessity  **参数解释**: 修复必要性 **取值范围**: - 1：高 - 2：中 - 3：低
    * severityLevel  **参数解释**: 修复必要性 **取值范围**: - Low：低危 - Medium：中危 - High：高危 - Critical：紧急
    * descriptionZh  **参数解释**: cve漏洞中文描述 **取值范围**: 字符长度0-1024
    * descriptionEn  **参数解释**: cve漏洞英文描述 **取值范围**: 字符长度0-1024
    * solutionZh  **参数解释**: cve漏洞中文修复建议 **取值范围**: 字符长度0-1024
    * solutionEn  **参数解释**: cve漏洞英文修复建议 **取值范围**: 字符长度0-1024
    * cveId  **参数解释**: 漏洞编号 **取值范围**: 字符长度0-255
    * cveScore  **参数解释**: cve分数 **取值范围**: 最小值0，最大值10
    * cnvdId  **参数解释**: cnvd编号 **取值范围**: 字符长度0-32
    * cnnvdId  **参数解释**: cnnvd编号 **取值范围**: 字符长度0-32
    * bugtraqId  **参数解释**: bugtraq编号 **取值范围**: 字符长度0-32
    * suffixPath  **参数解释**: 后缀路径 **取值范围**: 字符长度0-128
    * md5  **参数解释**: md5 **取值范围**: 字符长度0-32
    * createTime  **参数解释**: 创建时间 **取值范围**: 最小值0，最大值9223372036854775807
    * updateTime  **参数解释**: 更新时间 **取值范围**: 最小值0，最大值9223372036854775807
    * tagsZh  **参数解释**: 漏洞标签中文名称 **取值范围**: 字符长度0-64
    * tagsEn  **参数解释**: 漏洞标签英文名称 **取值范围**: 字符长度0-64
    * patchUrl  **参数解释**: 补丁地址 **取值范围**: 字符长度0-512
    * hostsNum  hostsNum
    * cveLevel  **参数解释**: cve危险程度 **取值范围**: - Low：低危 - Medium：中危 - High：高危
    * cvss  **参数解释**: 漏洞分值 **取值范围**: 最小值0，最大值10
    * cvssVersion  **参数解释**: cvss评分版本 **取值范围**: 字符长度0-32
    * description  **参数解释**: 漏洞描述 **取值范围**: 字符长度0-1024
    * cveName  **参数解释**: cve漏洞名称 **取值范围**: 字符长度0-512
    * cvssVector  **参数解释**: 攻击矢量 **取值范围**: 字符长度0-255
    * cveSolution  **参数解释**: cve修复建议 **取值范围**: 字符长度0-4096
    * cveAffect  **参数解释**: cve漏洞危害 **取值范围**: 字符长度0-128
    * cveAffectDescription  **参数解释**: cve漏洞危害的描述信息 **取值范围**: 字符长度0-4096
    * cveType  **参数解释**: cve漏洞类型 **取值范围**: 字符长度0-128
    * cveTypeDescription  **参数解释**: cve漏洞类型的描述信息 **取值范围**: 字符长度0-4096
    *
    * @var string[]
    */
    protected static $setters = [
            'vulId' => 'setVulId',
            'app' => 'setApp',
            'nameZh' => 'setNameZh',
            'nameEn' => 'setNameEn',
            'publicTime' => 'setPublicTime',
            'vulLabelZh' => 'setVulLabelZh',
            'vulLabelEn' => 'setVulLabelEn',
            'repairNecessity' => 'setRepairNecessity',
            'severityLevel' => 'setSeverityLevel',
            'descriptionZh' => 'setDescriptionZh',
            'descriptionEn' => 'setDescriptionEn',
            'solutionZh' => 'setSolutionZh',
            'solutionEn' => 'setSolutionEn',
            'cveId' => 'setCveId',
            'cveScore' => 'setCveScore',
            'cnvdId' => 'setCnvdId',
            'cnnvdId' => 'setCnnvdId',
            'bugtraqId' => 'setBugtraqId',
            'suffixPath' => 'setSuffixPath',
            'md5' => 'setMd5',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'tagsZh' => 'setTagsZh',
            'tagsEn' => 'setTagsEn',
            'patchUrl' => 'setPatchUrl',
            'hostsNum' => 'setHostsNum',
            'cveLevel' => 'setCveLevel',
            'cvss' => 'setCvss',
            'cvssVersion' => 'setCvssVersion',
            'description' => 'setDescription',
            'cveName' => 'setCveName',
            'cvssVector' => 'setCvssVector',
            'cveSolution' => 'setCveSolution',
            'cveAffect' => 'setCveAffect',
            'cveAffectDescription' => 'setCveAffectDescription',
            'cveType' => 'setCveType',
            'cveTypeDescription' => 'setCveTypeDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vulId  **参数解释**: 漏洞补丁编号 **取值范围**: 字符长度0-256
    * app  **参数解释**: 软件名称 **取值范围**: 字符长度0-32
    * nameZh  **参数解释**: 中文名称 **取值范围**: 字符长度0-128
    * nameEn  **参数解释**: 英文名称 **取值范围**: 字符长度0-128
    * publicTime  **参数解释**: 披露时间 **取值范围**: 最小值0，最大值2^63-1
    * vulLabelZh  **参数解释**: 漏洞标签中文名称（已废弃，后续删除） **取值范围**: 字符长度0-64
    * vulLabelEn  **参数解释**: 漏洞标签英文名称（已废弃，后续删除） **取值范围**: 字符长度0-64
    * repairNecessity  **参数解释**: 修复必要性 **取值范围**: - 1：高 - 2：中 - 3：低
    * severityLevel  **参数解释**: 修复必要性 **取值范围**: - Low：低危 - Medium：中危 - High：高危 - Critical：紧急
    * descriptionZh  **参数解释**: cve漏洞中文描述 **取值范围**: 字符长度0-1024
    * descriptionEn  **参数解释**: cve漏洞英文描述 **取值范围**: 字符长度0-1024
    * solutionZh  **参数解释**: cve漏洞中文修复建议 **取值范围**: 字符长度0-1024
    * solutionEn  **参数解释**: cve漏洞英文修复建议 **取值范围**: 字符长度0-1024
    * cveId  **参数解释**: 漏洞编号 **取值范围**: 字符长度0-255
    * cveScore  **参数解释**: cve分数 **取值范围**: 最小值0，最大值10
    * cnvdId  **参数解释**: cnvd编号 **取值范围**: 字符长度0-32
    * cnnvdId  **参数解释**: cnnvd编号 **取值范围**: 字符长度0-32
    * bugtraqId  **参数解释**: bugtraq编号 **取值范围**: 字符长度0-32
    * suffixPath  **参数解释**: 后缀路径 **取值范围**: 字符长度0-128
    * md5  **参数解释**: md5 **取值范围**: 字符长度0-32
    * createTime  **参数解释**: 创建时间 **取值范围**: 最小值0，最大值9223372036854775807
    * updateTime  **参数解释**: 更新时间 **取值范围**: 最小值0，最大值9223372036854775807
    * tagsZh  **参数解释**: 漏洞标签中文名称 **取值范围**: 字符长度0-64
    * tagsEn  **参数解释**: 漏洞标签英文名称 **取值范围**: 字符长度0-64
    * patchUrl  **参数解释**: 补丁地址 **取值范围**: 字符长度0-512
    * hostsNum  hostsNum
    * cveLevel  **参数解释**: cve危险程度 **取值范围**: - Low：低危 - Medium：中危 - High：高危
    * cvss  **参数解释**: 漏洞分值 **取值范围**: 最小值0，最大值10
    * cvssVersion  **参数解释**: cvss评分版本 **取值范围**: 字符长度0-32
    * description  **参数解释**: 漏洞描述 **取值范围**: 字符长度0-1024
    * cveName  **参数解释**: cve漏洞名称 **取值范围**: 字符长度0-512
    * cvssVector  **参数解释**: 攻击矢量 **取值范围**: 字符长度0-255
    * cveSolution  **参数解释**: cve修复建议 **取值范围**: 字符长度0-4096
    * cveAffect  **参数解释**: cve漏洞危害 **取值范围**: 字符长度0-128
    * cveAffectDescription  **参数解释**: cve漏洞危害的描述信息 **取值范围**: 字符长度0-4096
    * cveType  **参数解释**: cve漏洞类型 **取值范围**: 字符长度0-128
    * cveTypeDescription  **参数解释**: cve漏洞类型的描述信息 **取值范围**: 字符长度0-4096
    *
    * @var string[]
    */
    protected static $getters = [
            'vulId' => 'getVulId',
            'app' => 'getApp',
            'nameZh' => 'getNameZh',
            'nameEn' => 'getNameEn',
            'publicTime' => 'getPublicTime',
            'vulLabelZh' => 'getVulLabelZh',
            'vulLabelEn' => 'getVulLabelEn',
            'repairNecessity' => 'getRepairNecessity',
            'severityLevel' => 'getSeverityLevel',
            'descriptionZh' => 'getDescriptionZh',
            'descriptionEn' => 'getDescriptionEn',
            'solutionZh' => 'getSolutionZh',
            'solutionEn' => 'getSolutionEn',
            'cveId' => 'getCveId',
            'cveScore' => 'getCveScore',
            'cnvdId' => 'getCnvdId',
            'cnnvdId' => 'getCnnvdId',
            'bugtraqId' => 'getBugtraqId',
            'suffixPath' => 'getSuffixPath',
            'md5' => 'getMd5',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'tagsZh' => 'getTagsZh',
            'tagsEn' => 'getTagsEn',
            'patchUrl' => 'getPatchUrl',
            'hostsNum' => 'getHostsNum',
            'cveLevel' => 'getCveLevel',
            'cvss' => 'getCvss',
            'cvssVersion' => 'getCvssVersion',
            'description' => 'getDescription',
            'cveName' => 'getCveName',
            'cvssVector' => 'getCvssVector',
            'cveSolution' => 'getCveSolution',
            'cveAffect' => 'getCveAffect',
            'cveAffectDescription' => 'getCveAffectDescription',
            'cveType' => 'getCveType',
            'cveTypeDescription' => 'getCveTypeDescription'
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
        $this->container['app'] = isset($data['app']) ? $data['app'] : null;
        $this->container['nameZh'] = isset($data['nameZh']) ? $data['nameZh'] : null;
        $this->container['nameEn'] = isset($data['nameEn']) ? $data['nameEn'] : null;
        $this->container['publicTime'] = isset($data['publicTime']) ? $data['publicTime'] : null;
        $this->container['vulLabelZh'] = isset($data['vulLabelZh']) ? $data['vulLabelZh'] : null;
        $this->container['vulLabelEn'] = isset($data['vulLabelEn']) ? $data['vulLabelEn'] : null;
        $this->container['repairNecessity'] = isset($data['repairNecessity']) ? $data['repairNecessity'] : null;
        $this->container['severityLevel'] = isset($data['severityLevel']) ? $data['severityLevel'] : null;
        $this->container['descriptionZh'] = isset($data['descriptionZh']) ? $data['descriptionZh'] : null;
        $this->container['descriptionEn'] = isset($data['descriptionEn']) ? $data['descriptionEn'] : null;
        $this->container['solutionZh'] = isset($data['solutionZh']) ? $data['solutionZh'] : null;
        $this->container['solutionEn'] = isset($data['solutionEn']) ? $data['solutionEn'] : null;
        $this->container['cveId'] = isset($data['cveId']) ? $data['cveId'] : null;
        $this->container['cveScore'] = isset($data['cveScore']) ? $data['cveScore'] : null;
        $this->container['cnvdId'] = isset($data['cnvdId']) ? $data['cnvdId'] : null;
        $this->container['cnnvdId'] = isset($data['cnnvdId']) ? $data['cnnvdId'] : null;
        $this->container['bugtraqId'] = isset($data['bugtraqId']) ? $data['bugtraqId'] : null;
        $this->container['suffixPath'] = isset($data['suffixPath']) ? $data['suffixPath'] : null;
        $this->container['md5'] = isset($data['md5']) ? $data['md5'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['tagsZh'] = isset($data['tagsZh']) ? $data['tagsZh'] : null;
        $this->container['tagsEn'] = isset($data['tagsEn']) ? $data['tagsEn'] : null;
        $this->container['patchUrl'] = isset($data['patchUrl']) ? $data['patchUrl'] : null;
        $this->container['hostsNum'] = isset($data['hostsNum']) ? $data['hostsNum'] : null;
        $this->container['cveLevel'] = isset($data['cveLevel']) ? $data['cveLevel'] : null;
        $this->container['cvss'] = isset($data['cvss']) ? $data['cvss'] : null;
        $this->container['cvssVersion'] = isset($data['cvssVersion']) ? $data['cvssVersion'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['cveName'] = isset($data['cveName']) ? $data['cveName'] : null;
        $this->container['cvssVector'] = isset($data['cvssVector']) ? $data['cvssVector'] : null;
        $this->container['cveSolution'] = isset($data['cveSolution']) ? $data['cveSolution'] : null;
        $this->container['cveAffect'] = isset($data['cveAffect']) ? $data['cveAffect'] : null;
        $this->container['cveAffectDescription'] = isset($data['cveAffectDescription']) ? $data['cveAffectDescription'] : null;
        $this->container['cveType'] = isset($data['cveType']) ? $data['cveType'] : null;
        $this->container['cveTypeDescription'] = isset($data['cveTypeDescription']) ? $data['cveTypeDescription'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['vulId']) && (mb_strlen($this->container['vulId']) > 256)) {
                $invalidProperties[] = "invalid value for 'vulId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['vulId']) && (mb_strlen($this->container['vulId']) < 0)) {
                $invalidProperties[] = "invalid value for 'vulId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['app']) && (mb_strlen($this->container['app']) > 32)) {
                $invalidProperties[] = "invalid value for 'app', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['app']) && (mb_strlen($this->container['app']) < 0)) {
                $invalidProperties[] = "invalid value for 'app', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['nameZh']) && (mb_strlen($this->container['nameZh']) > 128)) {
                $invalidProperties[] = "invalid value for 'nameZh', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['nameZh']) && (mb_strlen($this->container['nameZh']) < 0)) {
                $invalidProperties[] = "invalid value for 'nameZh', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['nameEn']) && (mb_strlen($this->container['nameEn']) > 128)) {
                $invalidProperties[] = "invalid value for 'nameEn', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['nameEn']) && (mb_strlen($this->container['nameEn']) < 0)) {
                $invalidProperties[] = "invalid value for 'nameEn', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vulLabelZh']) && (mb_strlen($this->container['vulLabelZh']) > 64)) {
                $invalidProperties[] = "invalid value for 'vulLabelZh', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['vulLabelZh']) && (mb_strlen($this->container['vulLabelZh']) < 0)) {
                $invalidProperties[] = "invalid value for 'vulLabelZh', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vulLabelEn']) && (mb_strlen($this->container['vulLabelEn']) > 64)) {
                $invalidProperties[] = "invalid value for 'vulLabelEn', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['vulLabelEn']) && (mb_strlen($this->container['vulLabelEn']) < 0)) {
                $invalidProperties[] = "invalid value for 'vulLabelEn', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['severityLevel']) && (mb_strlen($this->container['severityLevel']) > 64)) {
                $invalidProperties[] = "invalid value for 'severityLevel', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['severityLevel']) && (mb_strlen($this->container['severityLevel']) < 0)) {
                $invalidProperties[] = "invalid value for 'severityLevel', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['descriptionZh']) && (mb_strlen($this->container['descriptionZh']) > 1024)) {
                $invalidProperties[] = "invalid value for 'descriptionZh', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['descriptionZh']) && (mb_strlen($this->container['descriptionZh']) < 0)) {
                $invalidProperties[] = "invalid value for 'descriptionZh', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['descriptionEn']) && (mb_strlen($this->container['descriptionEn']) > 1024)) {
                $invalidProperties[] = "invalid value for 'descriptionEn', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['descriptionEn']) && (mb_strlen($this->container['descriptionEn']) < 0)) {
                $invalidProperties[] = "invalid value for 'descriptionEn', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['solutionZh']) && (mb_strlen($this->container['solutionZh']) > 1024)) {
                $invalidProperties[] = "invalid value for 'solutionZh', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['solutionZh']) && (mb_strlen($this->container['solutionZh']) < 0)) {
                $invalidProperties[] = "invalid value for 'solutionZh', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['solutionEn']) && (mb_strlen($this->container['solutionEn']) > 1024)) {
                $invalidProperties[] = "invalid value for 'solutionEn', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['solutionEn']) && (mb_strlen($this->container['solutionEn']) < 0)) {
                $invalidProperties[] = "invalid value for 'solutionEn', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cveId']) && (mb_strlen($this->container['cveId']) > 255)) {
                $invalidProperties[] = "invalid value for 'cveId', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['cveId']) && (mb_strlen($this->container['cveId']) < 0)) {
                $invalidProperties[] = "invalid value for 'cveId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cveScore']) && ($this->container['cveScore'] > 1E+1)) {
                $invalidProperties[] = "invalid value for 'cveScore', must be smaller than or equal to 1E+1.";
            }
            if (!is_null($this->container['cveScore']) && ($this->container['cveScore'] < 0)) {
                $invalidProperties[] = "invalid value for 'cveScore', must be bigger than or equal to 0.";
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
            if (!is_null($this->container['bugtraqId']) && (mb_strlen($this->container['bugtraqId']) > 32)) {
                $invalidProperties[] = "invalid value for 'bugtraqId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['bugtraqId']) && (mb_strlen($this->container['bugtraqId']) < 0)) {
                $invalidProperties[] = "invalid value for 'bugtraqId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['suffixPath']) && (mb_strlen($this->container['suffixPath']) > 128)) {
                $invalidProperties[] = "invalid value for 'suffixPath', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['suffixPath']) && (mb_strlen($this->container['suffixPath']) < 0)) {
                $invalidProperties[] = "invalid value for 'suffixPath', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['md5']) && (mb_strlen($this->container['md5']) > 32)) {
                $invalidProperties[] = "invalid value for 'md5', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['md5']) && (mb_strlen($this->container['md5']) < 0)) {
                $invalidProperties[] = "invalid value for 'md5', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['tagsZh']) && (mb_strlen($this->container['tagsZh']) > 64)) {
                $invalidProperties[] = "invalid value for 'tagsZh', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['tagsZh']) && (mb_strlen($this->container['tagsZh']) < 0)) {
                $invalidProperties[] = "invalid value for 'tagsZh', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['tagsEn']) && (mb_strlen($this->container['tagsEn']) > 64)) {
                $invalidProperties[] = "invalid value for 'tagsEn', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['tagsEn']) && (mb_strlen($this->container['tagsEn']) < 0)) {
                $invalidProperties[] = "invalid value for 'tagsEn', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['patchUrl']) && (mb_strlen($this->container['patchUrl']) > 512)) {
                $invalidProperties[] = "invalid value for 'patchUrl', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['patchUrl']) && (mb_strlen($this->container['patchUrl']) < 0)) {
                $invalidProperties[] = "invalid value for 'patchUrl', the character length must be bigger than or equal to 0.";
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
    *  **参数解释**: 漏洞补丁编号 **取值范围**: 字符长度0-256
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
    * @param string|null $vulId **参数解释**: 漏洞补丁编号 **取值范围**: 字符长度0-256
    *
    * @return $this
    */
    public function setVulId($vulId)
    {
        $this->container['vulId'] = $vulId;
        return $this;
    }

    /**
    * Gets app
    *  **参数解释**: 软件名称 **取值范围**: 字符长度0-32
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
    * @param string|null $app **参数解释**: 软件名称 **取值范围**: 字符长度0-32
    *
    * @return $this
    */
    public function setApp($app)
    {
        $this->container['app'] = $app;
        return $this;
    }

    /**
    * Gets nameZh
    *  **参数解释**: 中文名称 **取值范围**: 字符长度0-128
    *
    * @return string|null
    */
    public function getNameZh()
    {
        return $this->container['nameZh'];
    }

    /**
    * Sets nameZh
    *
    * @param string|null $nameZh **参数解释**: 中文名称 **取值范围**: 字符长度0-128
    *
    * @return $this
    */
    public function setNameZh($nameZh)
    {
        $this->container['nameZh'] = $nameZh;
        return $this;
    }

    /**
    * Gets nameEn
    *  **参数解释**: 英文名称 **取值范围**: 字符长度0-128
    *
    * @return string|null
    */
    public function getNameEn()
    {
        return $this->container['nameEn'];
    }

    /**
    * Sets nameEn
    *
    * @param string|null $nameEn **参数解释**: 英文名称 **取值范围**: 字符长度0-128
    *
    * @return $this
    */
    public function setNameEn($nameEn)
    {
        $this->container['nameEn'] = $nameEn;
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
    * Gets vulLabelZh
    *  **参数解释**: 漏洞标签中文名称（已废弃，后续删除） **取值范围**: 字符长度0-64
    *
    * @return string|null
    */
    public function getVulLabelZh()
    {
        return $this->container['vulLabelZh'];
    }

    /**
    * Sets vulLabelZh
    *
    * @param string|null $vulLabelZh **参数解释**: 漏洞标签中文名称（已废弃，后续删除） **取值范围**: 字符长度0-64
    *
    * @return $this
    */
    public function setVulLabelZh($vulLabelZh)
    {
        $this->container['vulLabelZh'] = $vulLabelZh;
        return $this;
    }

    /**
    * Gets vulLabelEn
    *  **参数解释**: 漏洞标签英文名称（已废弃，后续删除） **取值范围**: 字符长度0-64
    *
    * @return string|null
    */
    public function getVulLabelEn()
    {
        return $this->container['vulLabelEn'];
    }

    /**
    * Sets vulLabelEn
    *
    * @param string|null $vulLabelEn **参数解释**: 漏洞标签英文名称（已废弃，后续删除） **取值范围**: 字符长度0-64
    *
    * @return $this
    */
    public function setVulLabelEn($vulLabelEn)
    {
        $this->container['vulLabelEn'] = $vulLabelEn;
        return $this;
    }

    /**
    * Gets repairNecessity
    *  **参数解释**: 修复必要性 **取值范围**: - 1：高 - 2：中 - 3：低
    *
    * @return int|null
    */
    public function getRepairNecessity()
    {
        return $this->container['repairNecessity'];
    }

    /**
    * Sets repairNecessity
    *
    * @param int|null $repairNecessity **参数解释**: 修复必要性 **取值范围**: - 1：高 - 2：中 - 3：低
    *
    * @return $this
    */
    public function setRepairNecessity($repairNecessity)
    {
        $this->container['repairNecessity'] = $repairNecessity;
        return $this;
    }

    /**
    * Gets severityLevel
    *  **参数解释**: 修复必要性 **取值范围**: - Low：低危 - Medium：中危 - High：高危 - Critical：紧急
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
    * @param string|null $severityLevel **参数解释**: 修复必要性 **取值范围**: - Low：低危 - Medium：中危 - High：高危 - Critical：紧急
    *
    * @return $this
    */
    public function setSeverityLevel($severityLevel)
    {
        $this->container['severityLevel'] = $severityLevel;
        return $this;
    }

    /**
    * Gets descriptionZh
    *  **参数解释**: cve漏洞中文描述 **取值范围**: 字符长度0-1024
    *
    * @return string|null
    */
    public function getDescriptionZh()
    {
        return $this->container['descriptionZh'];
    }

    /**
    * Sets descriptionZh
    *
    * @param string|null $descriptionZh **参数解释**: cve漏洞中文描述 **取值范围**: 字符长度0-1024
    *
    * @return $this
    */
    public function setDescriptionZh($descriptionZh)
    {
        $this->container['descriptionZh'] = $descriptionZh;
        return $this;
    }

    /**
    * Gets descriptionEn
    *  **参数解释**: cve漏洞英文描述 **取值范围**: 字符长度0-1024
    *
    * @return string|null
    */
    public function getDescriptionEn()
    {
        return $this->container['descriptionEn'];
    }

    /**
    * Sets descriptionEn
    *
    * @param string|null $descriptionEn **参数解释**: cve漏洞英文描述 **取值范围**: 字符长度0-1024
    *
    * @return $this
    */
    public function setDescriptionEn($descriptionEn)
    {
        $this->container['descriptionEn'] = $descriptionEn;
        return $this;
    }

    /**
    * Gets solutionZh
    *  **参数解释**: cve漏洞中文修复建议 **取值范围**: 字符长度0-1024
    *
    * @return string|null
    */
    public function getSolutionZh()
    {
        return $this->container['solutionZh'];
    }

    /**
    * Sets solutionZh
    *
    * @param string|null $solutionZh **参数解释**: cve漏洞中文修复建议 **取值范围**: 字符长度0-1024
    *
    * @return $this
    */
    public function setSolutionZh($solutionZh)
    {
        $this->container['solutionZh'] = $solutionZh;
        return $this;
    }

    /**
    * Gets solutionEn
    *  **参数解释**: cve漏洞英文修复建议 **取值范围**: 字符长度0-1024
    *
    * @return string|null
    */
    public function getSolutionEn()
    {
        return $this->container['solutionEn'];
    }

    /**
    * Sets solutionEn
    *
    * @param string|null $solutionEn **参数解释**: cve漏洞英文修复建议 **取值范围**: 字符长度0-1024
    *
    * @return $this
    */
    public function setSolutionEn($solutionEn)
    {
        $this->container['solutionEn'] = $solutionEn;
        return $this;
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
    * Gets cveScore
    *  **参数解释**: cve分数 **取值范围**: 最小值0，最大值10
    *
    * @return float|null
    */
    public function getCveScore()
    {
        return $this->container['cveScore'];
    }

    /**
    * Sets cveScore
    *
    * @param float|null $cveScore **参数解释**: cve分数 **取值范围**: 最小值0，最大值10
    *
    * @return $this
    */
    public function setCveScore($cveScore)
    {
        $this->container['cveScore'] = $cveScore;
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
    * Gets bugtraqId
    *  **参数解释**: bugtraq编号 **取值范围**: 字符长度0-32
    *
    * @return string|null
    */
    public function getBugtraqId()
    {
        return $this->container['bugtraqId'];
    }

    /**
    * Sets bugtraqId
    *
    * @param string|null $bugtraqId **参数解释**: bugtraq编号 **取值范围**: 字符长度0-32
    *
    * @return $this
    */
    public function setBugtraqId($bugtraqId)
    {
        $this->container['bugtraqId'] = $bugtraqId;
        return $this;
    }

    /**
    * Gets suffixPath
    *  **参数解释**: 后缀路径 **取值范围**: 字符长度0-128
    *
    * @return string|null
    */
    public function getSuffixPath()
    {
        return $this->container['suffixPath'];
    }

    /**
    * Sets suffixPath
    *
    * @param string|null $suffixPath **参数解释**: 后缀路径 **取值范围**: 字符长度0-128
    *
    * @return $this
    */
    public function setSuffixPath($suffixPath)
    {
        $this->container['suffixPath'] = $suffixPath;
        return $this;
    }

    /**
    * Gets md5
    *  **参数解释**: md5 **取值范围**: 字符长度0-32
    *
    * @return string|null
    */
    public function getMd5()
    {
        return $this->container['md5'];
    }

    /**
    * Sets md5
    *
    * @param string|null $md5 **参数解释**: md5 **取值范围**: 字符长度0-32
    *
    * @return $this
    */
    public function setMd5($md5)
    {
        $this->container['md5'] = $md5;
        return $this;
    }

    /**
    * Gets createTime
    *  **参数解释**: 创建时间 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime **参数解释**: 创建时间 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  **参数解释**: 更新时间 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime **参数解释**: 更新时间 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets tagsZh
    *  **参数解释**: 漏洞标签中文名称 **取值范围**: 字符长度0-64
    *
    * @return string|null
    */
    public function getTagsZh()
    {
        return $this->container['tagsZh'];
    }

    /**
    * Sets tagsZh
    *
    * @param string|null $tagsZh **参数解释**: 漏洞标签中文名称 **取值范围**: 字符长度0-64
    *
    * @return $this
    */
    public function setTagsZh($tagsZh)
    {
        $this->container['tagsZh'] = $tagsZh;
        return $this;
    }

    /**
    * Gets tagsEn
    *  **参数解释**: 漏洞标签英文名称 **取值范围**: 字符长度0-64
    *
    * @return string|null
    */
    public function getTagsEn()
    {
        return $this->container['tagsEn'];
    }

    /**
    * Sets tagsEn
    *
    * @param string|null $tagsEn **参数解释**: 漏洞标签英文名称 **取值范围**: 字符长度0-64
    *
    * @return $this
    */
    public function setTagsEn($tagsEn)
    {
        $this->container['tagsEn'] = $tagsEn;
        return $this;
    }

    /**
    * Gets patchUrl
    *  **参数解释**: 补丁地址 **取值范围**: 字符长度0-512
    *
    * @return string|null
    */
    public function getPatchUrl()
    {
        return $this->container['patchUrl'];
    }

    /**
    * Sets patchUrl
    *
    * @param string|null $patchUrl **参数解释**: 补丁地址 **取值范围**: 字符长度0-512
    *
    * @return $this
    */
    public function setPatchUrl($patchUrl)
    {
        $this->container['patchUrl'] = $patchUrl;
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

