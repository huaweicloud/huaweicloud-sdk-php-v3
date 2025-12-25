<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListImageRiskConfigsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListImageRiskConfigsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * imageType  **参数解释** 用于筛选指定类型的镜像安全配置检测结果，不同类型对应不同镜像存储位置 **约束限制** 取值必须在指定范围内，否则返回空结果 **取值范围** - private_image： 私有镜像仓库 - shared_image： 共享镜像仓库 - local_image： 本地镜像 - instance_image： 企业镜像 - registry： 仓库镜像 - local： 本地镜像，用于查询全局数据 **默认取值** 无
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * namespace  **参数解释** 镜像仓库的组织（命名空间）名称，用于筛选指定组织下的镜像检测结果，仅私有/共享镜像仓库有效 **约束限制** 仅当image_type为private_image或shared_image时有效，其他类型传参无效 **取值范围** 符合镜像仓库组织命名规范的字符串 **默认取值** 无
    * imageName  **参数解释** 镜像的名称，用于精准筛选指定名称的镜像安全配置检测结果 **约束限制** 支持模糊匹配（如传入'euler'可匹配所有名称含'euler'的镜像） **取值范围** 符合镜像名称命名规范的字符串 **默认取值** 无
    * imageVersion  **参数解释** 镜像的版本标识，用于筛选指定版本的镜像安全配置检测结果，与image_name配合使用 **约束限制** 仅当指定image_name时传参有效，否则筛选条件不生效 **取值范围** 符合镜像版本命名规范的字符串、默认取值：无
    * imageId  **参数解释** 镜像的唯一标识，用于精准筛选指定镜像的安全配置检测结果，优先级高于image_name+image_version **约束限制** 传入后将忽略image_name和image_version参数，直接按ID筛选 **默认取值** 无
    * checkName  **参数解释** 安全配置检测的基线名称，用于筛选指定基线的检测结果（如'CentOS 7'、'EulerOS'等） **约束限制** 仅支持功能介绍中列出的系统基线（CentOS 7、Debian 10、EulerOS、Ubuntu16） **取值范围** 支持的基线名称列表详见功能介绍 **默认取值** 无
    * severity  **参数解释** 镜像安全配置检测结果的风险等级，用于筛选指定风险等级的检测记录 **约束限制** 取值必须在指定范围内，否则返回空结果 **取值范围** - Security：安全 - Low：低危 - Medium：中危 - High：高危 **默认取值** 无
    * standard  **参数解释** 安全配置检测遵循的标准，用于筛选符合指定标准的检测结果 **约束限制** 取值必须在指定范围内，否则返回空结果 **取值范围** - cn_standard：等保合规标准 - hw_standard：云安全实践标准 **默认取值** 无
    * instanceId  **参数解释** 华为云SWR（软件仓库）企业版实例的唯一标识，用于筛选指定企业仓库实例下的镜像检测结果 **约束限制** 仅当image_type为private_image且使用SWR企业版时有效，共享版/本地镜像传参无效 **取值范围** SWR企业版实例ID **默认取值** 无
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseProjectId' => 'string',
            'imageType' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'namespace' => 'string',
            'imageName' => 'string',
            'imageVersion' => 'string',
            'imageId' => 'string',
            'checkName' => 'string',
            'severity' => 'string',
            'standard' => 'string',
            'instanceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * imageType  **参数解释** 用于筛选指定类型的镜像安全配置检测结果，不同类型对应不同镜像存储位置 **约束限制** 取值必须在指定范围内，否则返回空结果 **取值范围** - private_image： 私有镜像仓库 - shared_image： 共享镜像仓库 - local_image： 本地镜像 - instance_image： 企业镜像 - registry： 仓库镜像 - local： 本地镜像，用于查询全局数据 **默认取值** 无
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * namespace  **参数解释** 镜像仓库的组织（命名空间）名称，用于筛选指定组织下的镜像检测结果，仅私有/共享镜像仓库有效 **约束限制** 仅当image_type为private_image或shared_image时有效，其他类型传参无效 **取值范围** 符合镜像仓库组织命名规范的字符串 **默认取值** 无
    * imageName  **参数解释** 镜像的名称，用于精准筛选指定名称的镜像安全配置检测结果 **约束限制** 支持模糊匹配（如传入'euler'可匹配所有名称含'euler'的镜像） **取值范围** 符合镜像名称命名规范的字符串 **默认取值** 无
    * imageVersion  **参数解释** 镜像的版本标识，用于筛选指定版本的镜像安全配置检测结果，与image_name配合使用 **约束限制** 仅当指定image_name时传参有效，否则筛选条件不生效 **取值范围** 符合镜像版本命名规范的字符串、默认取值：无
    * imageId  **参数解释** 镜像的唯一标识，用于精准筛选指定镜像的安全配置检测结果，优先级高于image_name+image_version **约束限制** 传入后将忽略image_name和image_version参数，直接按ID筛选 **默认取值** 无
    * checkName  **参数解释** 安全配置检测的基线名称，用于筛选指定基线的检测结果（如'CentOS 7'、'EulerOS'等） **约束限制** 仅支持功能介绍中列出的系统基线（CentOS 7、Debian 10、EulerOS、Ubuntu16） **取值范围** 支持的基线名称列表详见功能介绍 **默认取值** 无
    * severity  **参数解释** 镜像安全配置检测结果的风险等级，用于筛选指定风险等级的检测记录 **约束限制** 取值必须在指定范围内，否则返回空结果 **取值范围** - Security：安全 - Low：低危 - Medium：中危 - High：高危 **默认取值** 无
    * standard  **参数解释** 安全配置检测遵循的标准，用于筛选符合指定标准的检测结果 **约束限制** 取值必须在指定范围内，否则返回空结果 **取值范围** - cn_standard：等保合规标准 - hw_standard：云安全实践标准 **默认取值** 无
    * instanceId  **参数解释** 华为云SWR（软件仓库）企业版实例的唯一标识，用于筛选指定企业仓库实例下的镜像检测结果 **约束限制** 仅当image_type为private_image且使用SWR企业版时有效，共享版/本地镜像传参无效 **取值范围** SWR企业版实例ID **默认取值** 无
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseProjectId' => null,
        'imageType' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'namespace' => null,
        'imageName' => null,
        'imageVersion' => null,
        'imageId' => null,
        'checkName' => null,
        'severity' => null,
        'standard' => null,
        'instanceId' => null
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
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * imageType  **参数解释** 用于筛选指定类型的镜像安全配置检测结果，不同类型对应不同镜像存储位置 **约束限制** 取值必须在指定范围内，否则返回空结果 **取值范围** - private_image： 私有镜像仓库 - shared_image： 共享镜像仓库 - local_image： 本地镜像 - instance_image： 企业镜像 - registry： 仓库镜像 - local： 本地镜像，用于查询全局数据 **默认取值** 无
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * namespace  **参数解释** 镜像仓库的组织（命名空间）名称，用于筛选指定组织下的镜像检测结果，仅私有/共享镜像仓库有效 **约束限制** 仅当image_type为private_image或shared_image时有效，其他类型传参无效 **取值范围** 符合镜像仓库组织命名规范的字符串 **默认取值** 无
    * imageName  **参数解释** 镜像的名称，用于精准筛选指定名称的镜像安全配置检测结果 **约束限制** 支持模糊匹配（如传入'euler'可匹配所有名称含'euler'的镜像） **取值范围** 符合镜像名称命名规范的字符串 **默认取值** 无
    * imageVersion  **参数解释** 镜像的版本标识，用于筛选指定版本的镜像安全配置检测结果，与image_name配合使用 **约束限制** 仅当指定image_name时传参有效，否则筛选条件不生效 **取值范围** 符合镜像版本命名规范的字符串、默认取值：无
    * imageId  **参数解释** 镜像的唯一标识，用于精准筛选指定镜像的安全配置检测结果，优先级高于image_name+image_version **约束限制** 传入后将忽略image_name和image_version参数，直接按ID筛选 **默认取值** 无
    * checkName  **参数解释** 安全配置检测的基线名称，用于筛选指定基线的检测结果（如'CentOS 7'、'EulerOS'等） **约束限制** 仅支持功能介绍中列出的系统基线（CentOS 7、Debian 10、EulerOS、Ubuntu16） **取值范围** 支持的基线名称列表详见功能介绍 **默认取值** 无
    * severity  **参数解释** 镜像安全配置检测结果的风险等级，用于筛选指定风险等级的检测记录 **约束限制** 取值必须在指定范围内，否则返回空结果 **取值范围** - Security：安全 - Low：低危 - Medium：中危 - High：高危 **默认取值** 无
    * standard  **参数解释** 安全配置检测遵循的标准，用于筛选符合指定标准的检测结果 **约束限制** 取值必须在指定范围内，否则返回空结果 **取值范围** - cn_standard：等保合规标准 - hw_standard：云安全实践标准 **默认取值** 无
    * instanceId  **参数解释** 华为云SWR（软件仓库）企业版实例的唯一标识，用于筛选指定企业仓库实例下的镜像检测结果 **约束限制** 仅当image_type为private_image且使用SWR企业版时有效，共享版/本地镜像传参无效 **取值范围** SWR企业版实例ID **默认取值** 无
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseProjectId' => 'enterprise_project_id',
            'imageType' => 'image_type',
            'offset' => 'offset',
            'limit' => 'limit',
            'namespace' => 'namespace',
            'imageName' => 'image_name',
            'imageVersion' => 'image_version',
            'imageId' => 'image_id',
            'checkName' => 'check_name',
            'severity' => 'severity',
            'standard' => 'standard',
            'instanceId' => 'instance_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * imageType  **参数解释** 用于筛选指定类型的镜像安全配置检测结果，不同类型对应不同镜像存储位置 **约束限制** 取值必须在指定范围内，否则返回空结果 **取值范围** - private_image： 私有镜像仓库 - shared_image： 共享镜像仓库 - local_image： 本地镜像 - instance_image： 企业镜像 - registry： 仓库镜像 - local： 本地镜像，用于查询全局数据 **默认取值** 无
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * namespace  **参数解释** 镜像仓库的组织（命名空间）名称，用于筛选指定组织下的镜像检测结果，仅私有/共享镜像仓库有效 **约束限制** 仅当image_type为private_image或shared_image时有效，其他类型传参无效 **取值范围** 符合镜像仓库组织命名规范的字符串 **默认取值** 无
    * imageName  **参数解释** 镜像的名称，用于精准筛选指定名称的镜像安全配置检测结果 **约束限制** 支持模糊匹配（如传入'euler'可匹配所有名称含'euler'的镜像） **取值范围** 符合镜像名称命名规范的字符串 **默认取值** 无
    * imageVersion  **参数解释** 镜像的版本标识，用于筛选指定版本的镜像安全配置检测结果，与image_name配合使用 **约束限制** 仅当指定image_name时传参有效，否则筛选条件不生效 **取值范围** 符合镜像版本命名规范的字符串、默认取值：无
    * imageId  **参数解释** 镜像的唯一标识，用于精准筛选指定镜像的安全配置检测结果，优先级高于image_name+image_version **约束限制** 传入后将忽略image_name和image_version参数，直接按ID筛选 **默认取值** 无
    * checkName  **参数解释** 安全配置检测的基线名称，用于筛选指定基线的检测结果（如'CentOS 7'、'EulerOS'等） **约束限制** 仅支持功能介绍中列出的系统基线（CentOS 7、Debian 10、EulerOS、Ubuntu16） **取值范围** 支持的基线名称列表详见功能介绍 **默认取值** 无
    * severity  **参数解释** 镜像安全配置检测结果的风险等级，用于筛选指定风险等级的检测记录 **约束限制** 取值必须在指定范围内，否则返回空结果 **取值范围** - Security：安全 - Low：低危 - Medium：中危 - High：高危 **默认取值** 无
    * standard  **参数解释** 安全配置检测遵循的标准，用于筛选符合指定标准的检测结果 **约束限制** 取值必须在指定范围内，否则返回空结果 **取值范围** - cn_standard：等保合规标准 - hw_standard：云安全实践标准 **默认取值** 无
    * instanceId  **参数解释** 华为云SWR（软件仓库）企业版实例的唯一标识，用于筛选指定企业仓库实例下的镜像检测结果 **约束限制** 仅当image_type为private_image且使用SWR企业版时有效，共享版/本地镜像传参无效 **取值范围** SWR企业版实例ID **默认取值** 无
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'imageType' => 'setImageType',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'namespace' => 'setNamespace',
            'imageName' => 'setImageName',
            'imageVersion' => 'setImageVersion',
            'imageId' => 'setImageId',
            'checkName' => 'setCheckName',
            'severity' => 'setSeverity',
            'standard' => 'setStandard',
            'instanceId' => 'setInstanceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * imageType  **参数解释** 用于筛选指定类型的镜像安全配置检测结果，不同类型对应不同镜像存储位置 **约束限制** 取值必须在指定范围内，否则返回空结果 **取值范围** - private_image： 私有镜像仓库 - shared_image： 共享镜像仓库 - local_image： 本地镜像 - instance_image： 企业镜像 - registry： 仓库镜像 - local： 本地镜像，用于查询全局数据 **默认取值** 无
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * namespace  **参数解释** 镜像仓库的组织（命名空间）名称，用于筛选指定组织下的镜像检测结果，仅私有/共享镜像仓库有效 **约束限制** 仅当image_type为private_image或shared_image时有效，其他类型传参无效 **取值范围** 符合镜像仓库组织命名规范的字符串 **默认取值** 无
    * imageName  **参数解释** 镜像的名称，用于精准筛选指定名称的镜像安全配置检测结果 **约束限制** 支持模糊匹配（如传入'euler'可匹配所有名称含'euler'的镜像） **取值范围** 符合镜像名称命名规范的字符串 **默认取值** 无
    * imageVersion  **参数解释** 镜像的版本标识，用于筛选指定版本的镜像安全配置检测结果，与image_name配合使用 **约束限制** 仅当指定image_name时传参有效，否则筛选条件不生效 **取值范围** 符合镜像版本命名规范的字符串、默认取值：无
    * imageId  **参数解释** 镜像的唯一标识，用于精准筛选指定镜像的安全配置检测结果，优先级高于image_name+image_version **约束限制** 传入后将忽略image_name和image_version参数，直接按ID筛选 **默认取值** 无
    * checkName  **参数解释** 安全配置检测的基线名称，用于筛选指定基线的检测结果（如'CentOS 7'、'EulerOS'等） **约束限制** 仅支持功能介绍中列出的系统基线（CentOS 7、Debian 10、EulerOS、Ubuntu16） **取值范围** 支持的基线名称列表详见功能介绍 **默认取值** 无
    * severity  **参数解释** 镜像安全配置检测结果的风险等级，用于筛选指定风险等级的检测记录 **约束限制** 取值必须在指定范围内，否则返回空结果 **取值范围** - Security：安全 - Low：低危 - Medium：中危 - High：高危 **默认取值** 无
    * standard  **参数解释** 安全配置检测遵循的标准，用于筛选符合指定标准的检测结果 **约束限制** 取值必须在指定范围内，否则返回空结果 **取值范围** - cn_standard：等保合规标准 - hw_standard：云安全实践标准 **默认取值** 无
    * instanceId  **参数解释** 华为云SWR（软件仓库）企业版实例的唯一标识，用于筛选指定企业仓库实例下的镜像检测结果 **约束限制** 仅当image_type为private_image且使用SWR企业版时有效，共享版/本地镜像传参无效 **取值范围** SWR企业版实例ID **默认取值** 无
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'imageType' => 'getImageType',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'namespace' => 'getNamespace',
            'imageName' => 'getImageName',
            'imageVersion' => 'getImageVersion',
            'imageId' => 'getImageId',
            'checkName' => 'getCheckName',
            'severity' => 'getSeverity',
            'standard' => 'getStandard',
            'instanceId' => 'getInstanceId'
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
        $this->container['imageType'] = isset($data['imageType']) ? $data['imageType'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['namespace'] = isset($data['namespace']) ? $data['namespace'] : null;
        $this->container['imageName'] = isset($data['imageName']) ? $data['imageName'] : null;
        $this->container['imageVersion'] = isset($data['imageVersion']) ? $data['imageVersion'] : null;
        $this->container['imageId'] = isset($data['imageId']) ? $data['imageId'] : null;
        $this->container['checkName'] = isset($data['checkName']) ? $data['checkName'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['standard'] = isset($data['standard']) ? $data['standard'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 256)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && !preg_match("/^.*$/", $this->container['enterpriseProjectId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', must be conform to the pattern /^.*$/.";
            }
        if ($this->container['imageType'] === null) {
            $invalidProperties[] = "'imageType' can't be null";
        }
            if ((mb_strlen($this->container['imageType']) > 32)) {
                $invalidProperties[] = "invalid value for 'imageType', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['imageType']) < 1)) {
                $invalidProperties[] = "invalid value for 'imageType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 2000000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 2000000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 200)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 10)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 10.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) > 64)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['namespace']) && (mb_strlen($this->container['namespace']) < 0)) {
                $invalidProperties[] = "invalid value for 'namespace', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) > 128)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageVersion']) && (mb_strlen($this->container['imageVersion']) > 64)) {
                $invalidProperties[] = "invalid value for 'imageVersion', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['imageVersion']) && (mb_strlen($this->container['imageVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageVersion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageId']) && (mb_strlen($this->container['imageId']) > 128)) {
                $invalidProperties[] = "invalid value for 'imageId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['imageId']) && (mb_strlen($this->container['imageId']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['checkName']) && (mb_strlen($this->container['checkName']) > 256)) {
                $invalidProperties[] = "invalid value for 'checkName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['checkName']) && (mb_strlen($this->container['checkName']) < 0)) {
                $invalidProperties[] = "invalid value for 'checkName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['severity']) && (mb_strlen($this->container['severity']) > 32)) {
                $invalidProperties[] = "invalid value for 'severity', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['severity']) && (mb_strlen($this->container['severity']) < 0)) {
                $invalidProperties[] = "invalid value for 'severity', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['standard']) && (mb_strlen($this->container['standard']) > 256)) {
                $invalidProperties[] = "invalid value for 'standard', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['standard']) && (mb_strlen($this->container['standard']) < 0)) {
                $invalidProperties[] = "invalid value for 'standard', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) > 128)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 0.";
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
    *  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
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
    * @param string|null $enterpriseProjectId **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets imageType
    *  **参数解释** 用于筛选指定类型的镜像安全配置检测结果，不同类型对应不同镜像存储位置 **约束限制** 取值必须在指定范围内，否则返回空结果 **取值范围** - private_image： 私有镜像仓库 - shared_image： 共享镜像仓库 - local_image： 本地镜像 - instance_image： 企业镜像 - registry： 仓库镜像 - local： 本地镜像，用于查询全局数据 **默认取值** 无
    *
    * @return string
    */
    public function getImageType()
    {
        return $this->container['imageType'];
    }

    /**
    * Sets imageType
    *
    * @param string $imageType **参数解释** 用于筛选指定类型的镜像安全配置检测结果，不同类型对应不同镜像存储位置 **约束限制** 取值必须在指定范围内，否则返回空结果 **取值范围** - private_image： 私有镜像仓库 - shared_image： 共享镜像仓库 - local_image： 本地镜像 - instance_image： 企业镜像 - registry： 仓库镜像 - local： 本地镜像，用于查询全局数据 **默认取值** 无
    *
    * @return $this
    */
    public function setImageType($imageType)
    {
        $this->container['imageType'] = $imageType;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
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
    * @param int|null $offset **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
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
    *  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
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
    * @param int|null $limit **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets namespace
    *  **参数解释** 镜像仓库的组织（命名空间）名称，用于筛选指定组织下的镜像检测结果，仅私有/共享镜像仓库有效 **约束限制** 仅当image_type为private_image或shared_image时有效，其他类型传参无效 **取值范围** 符合镜像仓库组织命名规范的字符串 **默认取值** 无
    *
    * @return string|null
    */
    public function getNamespace()
    {
        return $this->container['namespace'];
    }

    /**
    * Sets namespace
    *
    * @param string|null $namespace **参数解释** 镜像仓库的组织（命名空间）名称，用于筛选指定组织下的镜像检测结果，仅私有/共享镜像仓库有效 **约束限制** 仅当image_type为private_image或shared_image时有效，其他类型传参无效 **取值范围** 符合镜像仓库组织命名规范的字符串 **默认取值** 无
    *
    * @return $this
    */
    public function setNamespace($namespace)
    {
        $this->container['namespace'] = $namespace;
        return $this;
    }

    /**
    * Gets imageName
    *  **参数解释** 镜像的名称，用于精准筛选指定名称的镜像安全配置检测结果 **约束限制** 支持模糊匹配（如传入'euler'可匹配所有名称含'euler'的镜像） **取值范围** 符合镜像名称命名规范的字符串 **默认取值** 无
    *
    * @return string|null
    */
    public function getImageName()
    {
        return $this->container['imageName'];
    }

    /**
    * Sets imageName
    *
    * @param string|null $imageName **参数解释** 镜像的名称，用于精准筛选指定名称的镜像安全配置检测结果 **约束限制** 支持模糊匹配（如传入'euler'可匹配所有名称含'euler'的镜像） **取值范围** 符合镜像名称命名规范的字符串 **默认取值** 无
    *
    * @return $this
    */
    public function setImageName($imageName)
    {
        $this->container['imageName'] = $imageName;
        return $this;
    }

    /**
    * Gets imageVersion
    *  **参数解释** 镜像的版本标识，用于筛选指定版本的镜像安全配置检测结果，与image_name配合使用 **约束限制** 仅当指定image_name时传参有效，否则筛选条件不生效 **取值范围** 符合镜像版本命名规范的字符串、默认取值：无
    *
    * @return string|null
    */
    public function getImageVersion()
    {
        return $this->container['imageVersion'];
    }

    /**
    * Sets imageVersion
    *
    * @param string|null $imageVersion **参数解释** 镜像的版本标识，用于筛选指定版本的镜像安全配置检测结果，与image_name配合使用 **约束限制** 仅当指定image_name时传参有效，否则筛选条件不生效 **取值范围** 符合镜像版本命名规范的字符串、默认取值：无
    *
    * @return $this
    */
    public function setImageVersion($imageVersion)
    {
        $this->container['imageVersion'] = $imageVersion;
        return $this;
    }

    /**
    * Gets imageId
    *  **参数解释** 镜像的唯一标识，用于精准筛选指定镜像的安全配置检测结果，优先级高于image_name+image_version **约束限制** 传入后将忽略image_name和image_version参数，直接按ID筛选 **默认取值** 无
    *
    * @return string|null
    */
    public function getImageId()
    {
        return $this->container['imageId'];
    }

    /**
    * Sets imageId
    *
    * @param string|null $imageId **参数解释** 镜像的唯一标识，用于精准筛选指定镜像的安全配置检测结果，优先级高于image_name+image_version **约束限制** 传入后将忽略image_name和image_version参数，直接按ID筛选 **默认取值** 无
    *
    * @return $this
    */
    public function setImageId($imageId)
    {
        $this->container['imageId'] = $imageId;
        return $this;
    }

    /**
    * Gets checkName
    *  **参数解释** 安全配置检测的基线名称，用于筛选指定基线的检测结果（如'CentOS 7'、'EulerOS'等） **约束限制** 仅支持功能介绍中列出的系统基线（CentOS 7、Debian 10、EulerOS、Ubuntu16） **取值范围** 支持的基线名称列表详见功能介绍 **默认取值** 无
    *
    * @return string|null
    */
    public function getCheckName()
    {
        return $this->container['checkName'];
    }

    /**
    * Sets checkName
    *
    * @param string|null $checkName **参数解释** 安全配置检测的基线名称，用于筛选指定基线的检测结果（如'CentOS 7'、'EulerOS'等） **约束限制** 仅支持功能介绍中列出的系统基线（CentOS 7、Debian 10、EulerOS、Ubuntu16） **取值范围** 支持的基线名称列表详见功能介绍 **默认取值** 无
    *
    * @return $this
    */
    public function setCheckName($checkName)
    {
        $this->container['checkName'] = $checkName;
        return $this;
    }

    /**
    * Gets severity
    *  **参数解释** 镜像安全配置检测结果的风险等级，用于筛选指定风险等级的检测记录 **约束限制** 取值必须在指定范围内，否则返回空结果 **取值范围** - Security：安全 - Low：低危 - Medium：中危 - High：高危 **默认取值** 无
    *
    * @return string|null
    */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
    * Sets severity
    *
    * @param string|null $severity **参数解释** 镜像安全配置检测结果的风险等级，用于筛选指定风险等级的检测记录 **约束限制** 取值必须在指定范围内，否则返回空结果 **取值范围** - Security：安全 - Low：低危 - Medium：中危 - High：高危 **默认取值** 无
    *
    * @return $this
    */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;
        return $this;
    }

    /**
    * Gets standard
    *  **参数解释** 安全配置检测遵循的标准，用于筛选符合指定标准的检测结果 **约束限制** 取值必须在指定范围内，否则返回空结果 **取值范围** - cn_standard：等保合规标准 - hw_standard：云安全实践标准 **默认取值** 无
    *
    * @return string|null
    */
    public function getStandard()
    {
        return $this->container['standard'];
    }

    /**
    * Sets standard
    *
    * @param string|null $standard **参数解释** 安全配置检测遵循的标准，用于筛选符合指定标准的检测结果 **约束限制** 取值必须在指定范围内，否则返回空结果 **取值范围** - cn_standard：等保合规标准 - hw_standard：云安全实践标准 **默认取值** 无
    *
    * @return $this
    */
    public function setStandard($standard)
    {
        $this->container['standard'] = $standard;
        return $this;
    }

    /**
    * Gets instanceId
    *  **参数解释** 华为云SWR（软件仓库）企业版实例的唯一标识，用于筛选指定企业仓库实例下的镜像检测结果 **约束限制** 仅当image_type为private_image且使用SWR企业版时有效，共享版/本地镜像传参无效 **取值范围** SWR企业版实例ID **默认取值** 无
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
    * @param string|null $instanceId **参数解释** 华为云SWR（软件仓库）企业版实例的唯一标识，用于筛选指定企业仓库实例下的镜像检测结果 **约束限制** 仅当image_type为private_image且使用SWR企业版时有效，共享版/本地镜像传参无效 **取值范围** SWR企业版实例ID **默认取值** 无
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
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

