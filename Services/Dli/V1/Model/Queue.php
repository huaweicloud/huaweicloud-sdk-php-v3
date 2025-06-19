<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Queue implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Queue';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * queueId  参数解释: 队列ID 示例: 10 约束限制:  无 取值范围: 无 默认取值: 无
    * queueName  参数解释: 队列名称 示例: datasource_connection 约束限制:  无 取值范围: 无 默认取值: 无
    * description  参数解释: 队列描述信息 示例: des 约束限制:  无 取值范围: 无 默认取值: 无
    * owner  参数解释: 创建队列的用户 示例: ei_dlics_c00228924 约束限制:  无 取值范围: 无 默认取值: 无
    * createTime  参数解释: 创建队列的时间。是单位为“毫秒”的时间戳 示例: 1553168198000 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * queueType  参数解释: 队列的类型 示例: sql 约束限制:  无 取值范围: sql, general, all 默认取值: all
    * cuCount  参数解释: 与该队列绑定的计算单元数，即当前队列的CU数 示例: 16 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * chargingMode  参数解释: 队列的收费模式。 “1”表示按照CU时收费。 “2”表示按照包年包月收费。 示例: 16 约束限制:  无 取值范围: 1, 2 默认取值: 无
    * resourceId  参数解释: 队列的资源ID 示例: 26afb850-d3c9-42c1-81c0-583d1163e80f 约束限制:  无 取值范围: 无 默认取值: 无
    * enterpriseProjectId  参数解释: 企业项目ID。0”表示default，即默认的企业项目。说明：开通了企业管理服务的用户可设置该参数绑定指定的项目。 示例: 0 约束限制:  无 取值范围: 无 默认取值: 无
    * cidrInVpc  参数解释: 队列的虚拟私有云（VPC）的网段。建议使用网段：10.0.0.0/8~28，172.16.0.0/12~28，192.168.0.0/16~28 示例: 10.0.0.0/8 约束限制:  符合网段格式的字符串 取值范围: 无 默认取值: 无
    * cidrInMgntsubnet  参数解释: 管理子网的网段 示例: 10.23.128.0/24 约束限制:  符合网段格式的字符串 取值范围: 无 默认取值: 无
    * cidrInSubnet  参数解释: 子网网段 示例: 10.23.128.0/24 约束限制:  符合网段格式的字符串 取值范围: 无 默认取值: 无
    * resourceMode  参数解释: 队列类型。0：共享队列,1：专属队列 示例: 0 约束限制:  无 取值范围: 0,1 默认取值: 无
    * platform  参数解释: 队列计算资源的cpu架构 示例: 0 约束限制:  符合cpu架构格式的字符串 取值范围: 无 默认取值: 无
    * isRestarting  参数解释: 是否在重启状态。默认值为“false” 示例: false 约束限制:  无 取值范围: true,false 默认取值: false
    * labels  参数解释: 队列的标签信息，目前只支持设置跨az配置，multi_az=2 示例: {\\\"multi_az\\\":\\\"2\\\"} 约束限制:  符合Json格式的字符串 取值范围: 无 默认取值: 无
    * feature  参数解释: 队列特性 示例: basic 约束限制:  无 取值范围: basic（基础型） ai（AI增强型，仅SQL的x86_64专属队列支持选择） 默认取值: basic
    * resourceType  参数解释: 队列所属资源类型 示例: vm 约束限制:  无 取值范围: vm container 默认取值: 无
    * cuSpec  参数解释: 队列的规格大小。对于包周期队列，表示包周期部分的CU值；对于按需队列，表示用户购买队列时的初始值 示例: 0 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * cuScaleOutLimit  参数解释: 当前队列弹性扩缩容的CU值上限 示例: 0 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * cuScaleInLimit  参数解释: 当前队列弹性扩缩容的CU值下限 示例: 0 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * elasticResourcePoolName  参数解释: 弹性资源池名称 示例: dli_pool_0509 约束限制:  无 取值范围: 无 默认取值: 无
    * supportSparkVersions  参数解释: 队列支持的Spark版本 示例: [2.4.5] 约束限制:  无 取值范围: 无 默认取值: 无
    * defaultSparkVersion  参数解释: 队列默认的Spark版本 示例: 2.4.5 约束限制:  无 取值范围: 无 默认取值: 无
    * supportHetuEngineVersions  参数解释: 队列支持的HetuEngine版本 示例: [2.1.0] 约束限制:  无 取值范围: 无 默认取值: 无
    * defaultHetuEngineVersion  参数解释: 队列默认的HetuEngine版本 示例: 2.1.0 约束限制:  无 取值范围: 无 默认取值: 无
    * supportFlinkSqlVersions  参数解释: 队列支持的Flink SQL版本 示例: [1.17] 约束限制:  无 取值范围: 无 默认取值: 无
    * defaultFlinkSqlVersion  参数解释: 队列默认的Flink SQL版本 示例: 1.17 约束限制:  无 取值范围: 无 默认取值: 无
    * supportFlinkJarVersions  参数解释: 队列支持的Flink JAR版本 示例: [1.17] 约束限制:  无 取值范围: 无 默认取值: 无
    * defaultFlinkJarVersion  参数解释: 队列默认的Flink JAR版本 示例: 1.17 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'queueId' => 'int',
            'queueName' => 'string',
            'description' => 'string',
            'owner' => 'string',
            'createTime' => 'int',
            'queueType' => 'string',
            'cuCount' => 'int',
            'chargingMode' => 'int',
            'resourceId' => 'string',
            'enterpriseProjectId' => 'string',
            'cidrInVpc' => 'string',
            'cidrInMgntsubnet' => 'string',
            'cidrInSubnet' => 'string',
            'resourceMode' => 'int',
            'platform' => 'string',
            'isRestarting' => 'bool',
            'labels' => 'string',
            'feature' => 'string',
            'resourceType' => 'string',
            'cuSpec' => 'int',
            'cuScaleOutLimit' => 'int',
            'cuScaleInLimit' => 'int',
            'elasticResourcePoolName' => 'string',
            'supportSparkVersions' => 'string[]',
            'defaultSparkVersion' => 'string',
            'supportHetuEngineVersions' => 'string[]',
            'defaultHetuEngineVersion' => 'string',
            'supportFlinkSqlVersions' => 'string[]',
            'defaultFlinkSqlVersion' => 'string',
            'supportFlinkJarVersions' => 'string[]',
            'defaultFlinkJarVersion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * queueId  参数解释: 队列ID 示例: 10 约束限制:  无 取值范围: 无 默认取值: 无
    * queueName  参数解释: 队列名称 示例: datasource_connection 约束限制:  无 取值范围: 无 默认取值: 无
    * description  参数解释: 队列描述信息 示例: des 约束限制:  无 取值范围: 无 默认取值: 无
    * owner  参数解释: 创建队列的用户 示例: ei_dlics_c00228924 约束限制:  无 取值范围: 无 默认取值: 无
    * createTime  参数解释: 创建队列的时间。是单位为“毫秒”的时间戳 示例: 1553168198000 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * queueType  参数解释: 队列的类型 示例: sql 约束限制:  无 取值范围: sql, general, all 默认取值: all
    * cuCount  参数解释: 与该队列绑定的计算单元数，即当前队列的CU数 示例: 16 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * chargingMode  参数解释: 队列的收费模式。 “1”表示按照CU时收费。 “2”表示按照包年包月收费。 示例: 16 约束限制:  无 取值范围: 1, 2 默认取值: 无
    * resourceId  参数解释: 队列的资源ID 示例: 26afb850-d3c9-42c1-81c0-583d1163e80f 约束限制:  无 取值范围: 无 默认取值: 无
    * enterpriseProjectId  参数解释: 企业项目ID。0”表示default，即默认的企业项目。说明：开通了企业管理服务的用户可设置该参数绑定指定的项目。 示例: 0 约束限制:  无 取值范围: 无 默认取值: 无
    * cidrInVpc  参数解释: 队列的虚拟私有云（VPC）的网段。建议使用网段：10.0.0.0/8~28，172.16.0.0/12~28，192.168.0.0/16~28 示例: 10.0.0.0/8 约束限制:  符合网段格式的字符串 取值范围: 无 默认取值: 无
    * cidrInMgntsubnet  参数解释: 管理子网的网段 示例: 10.23.128.0/24 约束限制:  符合网段格式的字符串 取值范围: 无 默认取值: 无
    * cidrInSubnet  参数解释: 子网网段 示例: 10.23.128.0/24 约束限制:  符合网段格式的字符串 取值范围: 无 默认取值: 无
    * resourceMode  参数解释: 队列类型。0：共享队列,1：专属队列 示例: 0 约束限制:  无 取值范围: 0,1 默认取值: 无
    * platform  参数解释: 队列计算资源的cpu架构 示例: 0 约束限制:  符合cpu架构格式的字符串 取值范围: 无 默认取值: 无
    * isRestarting  参数解释: 是否在重启状态。默认值为“false” 示例: false 约束限制:  无 取值范围: true,false 默认取值: false
    * labels  参数解释: 队列的标签信息，目前只支持设置跨az配置，multi_az=2 示例: {\\\"multi_az\\\":\\\"2\\\"} 约束限制:  符合Json格式的字符串 取值范围: 无 默认取值: 无
    * feature  参数解释: 队列特性 示例: basic 约束限制:  无 取值范围: basic（基础型） ai（AI增强型，仅SQL的x86_64专属队列支持选择） 默认取值: basic
    * resourceType  参数解释: 队列所属资源类型 示例: vm 约束限制:  无 取值范围: vm container 默认取值: 无
    * cuSpec  参数解释: 队列的规格大小。对于包周期队列，表示包周期部分的CU值；对于按需队列，表示用户购买队列时的初始值 示例: 0 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * cuScaleOutLimit  参数解释: 当前队列弹性扩缩容的CU值上限 示例: 0 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * cuScaleInLimit  参数解释: 当前队列弹性扩缩容的CU值下限 示例: 0 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * elasticResourcePoolName  参数解释: 弹性资源池名称 示例: dli_pool_0509 约束限制:  无 取值范围: 无 默认取值: 无
    * supportSparkVersions  参数解释: 队列支持的Spark版本 示例: [2.4.5] 约束限制:  无 取值范围: 无 默认取值: 无
    * defaultSparkVersion  参数解释: 队列默认的Spark版本 示例: 2.4.5 约束限制:  无 取值范围: 无 默认取值: 无
    * supportHetuEngineVersions  参数解释: 队列支持的HetuEngine版本 示例: [2.1.0] 约束限制:  无 取值范围: 无 默认取值: 无
    * defaultHetuEngineVersion  参数解释: 队列默认的HetuEngine版本 示例: 2.1.0 约束限制:  无 取值范围: 无 默认取值: 无
    * supportFlinkSqlVersions  参数解释: 队列支持的Flink SQL版本 示例: [1.17] 约束限制:  无 取值范围: 无 默认取值: 无
    * defaultFlinkSqlVersion  参数解释: 队列默认的Flink SQL版本 示例: 1.17 约束限制:  无 取值范围: 无 默认取值: 无
    * supportFlinkJarVersions  参数解释: 队列支持的Flink JAR版本 示例: [1.17] 约束限制:  无 取值范围: 无 默认取值: 无
    * defaultFlinkJarVersion  参数解释: 队列默认的Flink JAR版本 示例: 1.17 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'queueId' => 'int64',
        'queueName' => null,
        'description' => null,
        'owner' => null,
        'createTime' => 'int64',
        'queueType' => null,
        'cuCount' => 'int32',
        'chargingMode' => 'int32',
        'resourceId' => null,
        'enterpriseProjectId' => null,
        'cidrInVpc' => null,
        'cidrInMgntsubnet' => null,
        'cidrInSubnet' => null,
        'resourceMode' => 'int32',
        'platform' => null,
        'isRestarting' => null,
        'labels' => null,
        'feature' => null,
        'resourceType' => null,
        'cuSpec' => 'int32',
        'cuScaleOutLimit' => 'int32',
        'cuScaleInLimit' => 'int32',
        'elasticResourcePoolName' => null,
        'supportSparkVersions' => null,
        'defaultSparkVersion' => null,
        'supportHetuEngineVersions' => null,
        'defaultHetuEngineVersion' => null,
        'supportFlinkSqlVersions' => null,
        'defaultFlinkSqlVersion' => null,
        'supportFlinkJarVersions' => null,
        'defaultFlinkJarVersion' => null
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
    * queueId  参数解释: 队列ID 示例: 10 约束限制:  无 取值范围: 无 默认取值: 无
    * queueName  参数解释: 队列名称 示例: datasource_connection 约束限制:  无 取值范围: 无 默认取值: 无
    * description  参数解释: 队列描述信息 示例: des 约束限制:  无 取值范围: 无 默认取值: 无
    * owner  参数解释: 创建队列的用户 示例: ei_dlics_c00228924 约束限制:  无 取值范围: 无 默认取值: 无
    * createTime  参数解释: 创建队列的时间。是单位为“毫秒”的时间戳 示例: 1553168198000 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * queueType  参数解释: 队列的类型 示例: sql 约束限制:  无 取值范围: sql, general, all 默认取值: all
    * cuCount  参数解释: 与该队列绑定的计算单元数，即当前队列的CU数 示例: 16 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * chargingMode  参数解释: 队列的收费模式。 “1”表示按照CU时收费。 “2”表示按照包年包月收费。 示例: 16 约束限制:  无 取值范围: 1, 2 默认取值: 无
    * resourceId  参数解释: 队列的资源ID 示例: 26afb850-d3c9-42c1-81c0-583d1163e80f 约束限制:  无 取值范围: 无 默认取值: 无
    * enterpriseProjectId  参数解释: 企业项目ID。0”表示default，即默认的企业项目。说明：开通了企业管理服务的用户可设置该参数绑定指定的项目。 示例: 0 约束限制:  无 取值范围: 无 默认取值: 无
    * cidrInVpc  参数解释: 队列的虚拟私有云（VPC）的网段。建议使用网段：10.0.0.0/8~28，172.16.0.0/12~28，192.168.0.0/16~28 示例: 10.0.0.0/8 约束限制:  符合网段格式的字符串 取值范围: 无 默认取值: 无
    * cidrInMgntsubnet  参数解释: 管理子网的网段 示例: 10.23.128.0/24 约束限制:  符合网段格式的字符串 取值范围: 无 默认取值: 无
    * cidrInSubnet  参数解释: 子网网段 示例: 10.23.128.0/24 约束限制:  符合网段格式的字符串 取值范围: 无 默认取值: 无
    * resourceMode  参数解释: 队列类型。0：共享队列,1：专属队列 示例: 0 约束限制:  无 取值范围: 0,1 默认取值: 无
    * platform  参数解释: 队列计算资源的cpu架构 示例: 0 约束限制:  符合cpu架构格式的字符串 取值范围: 无 默认取值: 无
    * isRestarting  参数解释: 是否在重启状态。默认值为“false” 示例: false 约束限制:  无 取值范围: true,false 默认取值: false
    * labels  参数解释: 队列的标签信息，目前只支持设置跨az配置，multi_az=2 示例: {\\\"multi_az\\\":\\\"2\\\"} 约束限制:  符合Json格式的字符串 取值范围: 无 默认取值: 无
    * feature  参数解释: 队列特性 示例: basic 约束限制:  无 取值范围: basic（基础型） ai（AI增强型，仅SQL的x86_64专属队列支持选择） 默认取值: basic
    * resourceType  参数解释: 队列所属资源类型 示例: vm 约束限制:  无 取值范围: vm container 默认取值: 无
    * cuSpec  参数解释: 队列的规格大小。对于包周期队列，表示包周期部分的CU值；对于按需队列，表示用户购买队列时的初始值 示例: 0 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * cuScaleOutLimit  参数解释: 当前队列弹性扩缩容的CU值上限 示例: 0 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * cuScaleInLimit  参数解释: 当前队列弹性扩缩容的CU值下限 示例: 0 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * elasticResourcePoolName  参数解释: 弹性资源池名称 示例: dli_pool_0509 约束限制:  无 取值范围: 无 默认取值: 无
    * supportSparkVersions  参数解释: 队列支持的Spark版本 示例: [2.4.5] 约束限制:  无 取值范围: 无 默认取值: 无
    * defaultSparkVersion  参数解释: 队列默认的Spark版本 示例: 2.4.5 约束限制:  无 取值范围: 无 默认取值: 无
    * supportHetuEngineVersions  参数解释: 队列支持的HetuEngine版本 示例: [2.1.0] 约束限制:  无 取值范围: 无 默认取值: 无
    * defaultHetuEngineVersion  参数解释: 队列默认的HetuEngine版本 示例: 2.1.0 约束限制:  无 取值范围: 无 默认取值: 无
    * supportFlinkSqlVersions  参数解释: 队列支持的Flink SQL版本 示例: [1.17] 约束限制:  无 取值范围: 无 默认取值: 无
    * defaultFlinkSqlVersion  参数解释: 队列默认的Flink SQL版本 示例: 1.17 约束限制:  无 取值范围: 无 默认取值: 无
    * supportFlinkJarVersions  参数解释: 队列支持的Flink JAR版本 示例: [1.17] 约束限制:  无 取值范围: 无 默认取值: 无
    * defaultFlinkJarVersion  参数解释: 队列默认的Flink JAR版本 示例: 1.17 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'queueId' => 'queue_id',
            'queueName' => 'queue_name',
            'description' => 'description',
            'owner' => 'owner',
            'createTime' => 'create_time',
            'queueType' => 'queue_type',
            'cuCount' => 'cu_count',
            'chargingMode' => 'charging_mode',
            'resourceId' => 'resource_id',
            'enterpriseProjectId' => 'enterprise_project_id',
            'cidrInVpc' => 'cidr_in_vpc',
            'cidrInMgntsubnet' => 'cidr_in_mgntsubnet',
            'cidrInSubnet' => 'cidr_in_subnet',
            'resourceMode' => 'resource_mode',
            'platform' => 'platform',
            'isRestarting' => 'is_restarting',
            'labels' => 'labels',
            'feature' => 'feature',
            'resourceType' => 'resource_type',
            'cuSpec' => 'cu_spec',
            'cuScaleOutLimit' => 'cu_scale_out_limit',
            'cuScaleInLimit' => 'cu_scale_in_limit',
            'elasticResourcePoolName' => 'elastic_resource_pool_name',
            'supportSparkVersions' => 'support_spark_versions',
            'defaultSparkVersion' => 'default_spark_version',
            'supportHetuEngineVersions' => 'support_hetu_engine_versions',
            'defaultHetuEngineVersion' => 'default_hetu_engine_version',
            'supportFlinkSqlVersions' => 'support_flink_sql_versions',
            'defaultFlinkSqlVersion' => 'default_flink_sql_version',
            'supportFlinkJarVersions' => 'support_flink_jar_versions',
            'defaultFlinkJarVersion' => 'default_flink_jar_version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * queueId  参数解释: 队列ID 示例: 10 约束限制:  无 取值范围: 无 默认取值: 无
    * queueName  参数解释: 队列名称 示例: datasource_connection 约束限制:  无 取值范围: 无 默认取值: 无
    * description  参数解释: 队列描述信息 示例: des 约束限制:  无 取值范围: 无 默认取值: 无
    * owner  参数解释: 创建队列的用户 示例: ei_dlics_c00228924 约束限制:  无 取值范围: 无 默认取值: 无
    * createTime  参数解释: 创建队列的时间。是单位为“毫秒”的时间戳 示例: 1553168198000 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * queueType  参数解释: 队列的类型 示例: sql 约束限制:  无 取值范围: sql, general, all 默认取值: all
    * cuCount  参数解释: 与该队列绑定的计算单元数，即当前队列的CU数 示例: 16 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * chargingMode  参数解释: 队列的收费模式。 “1”表示按照CU时收费。 “2”表示按照包年包月收费。 示例: 16 约束限制:  无 取值范围: 1, 2 默认取值: 无
    * resourceId  参数解释: 队列的资源ID 示例: 26afb850-d3c9-42c1-81c0-583d1163e80f 约束限制:  无 取值范围: 无 默认取值: 无
    * enterpriseProjectId  参数解释: 企业项目ID。0”表示default，即默认的企业项目。说明：开通了企业管理服务的用户可设置该参数绑定指定的项目。 示例: 0 约束限制:  无 取值范围: 无 默认取值: 无
    * cidrInVpc  参数解释: 队列的虚拟私有云（VPC）的网段。建议使用网段：10.0.0.0/8~28，172.16.0.0/12~28，192.168.0.0/16~28 示例: 10.0.0.0/8 约束限制:  符合网段格式的字符串 取值范围: 无 默认取值: 无
    * cidrInMgntsubnet  参数解释: 管理子网的网段 示例: 10.23.128.0/24 约束限制:  符合网段格式的字符串 取值范围: 无 默认取值: 无
    * cidrInSubnet  参数解释: 子网网段 示例: 10.23.128.0/24 约束限制:  符合网段格式的字符串 取值范围: 无 默认取值: 无
    * resourceMode  参数解释: 队列类型。0：共享队列,1：专属队列 示例: 0 约束限制:  无 取值范围: 0,1 默认取值: 无
    * platform  参数解释: 队列计算资源的cpu架构 示例: 0 约束限制:  符合cpu架构格式的字符串 取值范围: 无 默认取值: 无
    * isRestarting  参数解释: 是否在重启状态。默认值为“false” 示例: false 约束限制:  无 取值范围: true,false 默认取值: false
    * labels  参数解释: 队列的标签信息，目前只支持设置跨az配置，multi_az=2 示例: {\\\"multi_az\\\":\\\"2\\\"} 约束限制:  符合Json格式的字符串 取值范围: 无 默认取值: 无
    * feature  参数解释: 队列特性 示例: basic 约束限制:  无 取值范围: basic（基础型） ai（AI增强型，仅SQL的x86_64专属队列支持选择） 默认取值: basic
    * resourceType  参数解释: 队列所属资源类型 示例: vm 约束限制:  无 取值范围: vm container 默认取值: 无
    * cuSpec  参数解释: 队列的规格大小。对于包周期队列，表示包周期部分的CU值；对于按需队列，表示用户购买队列时的初始值 示例: 0 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * cuScaleOutLimit  参数解释: 当前队列弹性扩缩容的CU值上限 示例: 0 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * cuScaleInLimit  参数解释: 当前队列弹性扩缩容的CU值下限 示例: 0 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * elasticResourcePoolName  参数解释: 弹性资源池名称 示例: dli_pool_0509 约束限制:  无 取值范围: 无 默认取值: 无
    * supportSparkVersions  参数解释: 队列支持的Spark版本 示例: [2.4.5] 约束限制:  无 取值范围: 无 默认取值: 无
    * defaultSparkVersion  参数解释: 队列默认的Spark版本 示例: 2.4.5 约束限制:  无 取值范围: 无 默认取值: 无
    * supportHetuEngineVersions  参数解释: 队列支持的HetuEngine版本 示例: [2.1.0] 约束限制:  无 取值范围: 无 默认取值: 无
    * defaultHetuEngineVersion  参数解释: 队列默认的HetuEngine版本 示例: 2.1.0 约束限制:  无 取值范围: 无 默认取值: 无
    * supportFlinkSqlVersions  参数解释: 队列支持的Flink SQL版本 示例: [1.17] 约束限制:  无 取值范围: 无 默认取值: 无
    * defaultFlinkSqlVersion  参数解释: 队列默认的Flink SQL版本 示例: 1.17 约束限制:  无 取值范围: 无 默认取值: 无
    * supportFlinkJarVersions  参数解释: 队列支持的Flink JAR版本 示例: [1.17] 约束限制:  无 取值范围: 无 默认取值: 无
    * defaultFlinkJarVersion  参数解释: 队列默认的Flink JAR版本 示例: 1.17 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @var string[]
    */
    protected static $setters = [
            'queueId' => 'setQueueId',
            'queueName' => 'setQueueName',
            'description' => 'setDescription',
            'owner' => 'setOwner',
            'createTime' => 'setCreateTime',
            'queueType' => 'setQueueType',
            'cuCount' => 'setCuCount',
            'chargingMode' => 'setChargingMode',
            'resourceId' => 'setResourceId',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'cidrInVpc' => 'setCidrInVpc',
            'cidrInMgntsubnet' => 'setCidrInMgntsubnet',
            'cidrInSubnet' => 'setCidrInSubnet',
            'resourceMode' => 'setResourceMode',
            'platform' => 'setPlatform',
            'isRestarting' => 'setIsRestarting',
            'labels' => 'setLabels',
            'feature' => 'setFeature',
            'resourceType' => 'setResourceType',
            'cuSpec' => 'setCuSpec',
            'cuScaleOutLimit' => 'setCuScaleOutLimit',
            'cuScaleInLimit' => 'setCuScaleInLimit',
            'elasticResourcePoolName' => 'setElasticResourcePoolName',
            'supportSparkVersions' => 'setSupportSparkVersions',
            'defaultSparkVersion' => 'setDefaultSparkVersion',
            'supportHetuEngineVersions' => 'setSupportHetuEngineVersions',
            'defaultHetuEngineVersion' => 'setDefaultHetuEngineVersion',
            'supportFlinkSqlVersions' => 'setSupportFlinkSqlVersions',
            'defaultFlinkSqlVersion' => 'setDefaultFlinkSqlVersion',
            'supportFlinkJarVersions' => 'setSupportFlinkJarVersions',
            'defaultFlinkJarVersion' => 'setDefaultFlinkJarVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * queueId  参数解释: 队列ID 示例: 10 约束限制:  无 取值范围: 无 默认取值: 无
    * queueName  参数解释: 队列名称 示例: datasource_connection 约束限制:  无 取值范围: 无 默认取值: 无
    * description  参数解释: 队列描述信息 示例: des 约束限制:  无 取值范围: 无 默认取值: 无
    * owner  参数解释: 创建队列的用户 示例: ei_dlics_c00228924 约束限制:  无 取值范围: 无 默认取值: 无
    * createTime  参数解释: 创建队列的时间。是单位为“毫秒”的时间戳 示例: 1553168198000 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * queueType  参数解释: 队列的类型 示例: sql 约束限制:  无 取值范围: sql, general, all 默认取值: all
    * cuCount  参数解释: 与该队列绑定的计算单元数，即当前队列的CU数 示例: 16 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * chargingMode  参数解释: 队列的收费模式。 “1”表示按照CU时收费。 “2”表示按照包年包月收费。 示例: 16 约束限制:  无 取值范围: 1, 2 默认取值: 无
    * resourceId  参数解释: 队列的资源ID 示例: 26afb850-d3c9-42c1-81c0-583d1163e80f 约束限制:  无 取值范围: 无 默认取值: 无
    * enterpriseProjectId  参数解释: 企业项目ID。0”表示default，即默认的企业项目。说明：开通了企业管理服务的用户可设置该参数绑定指定的项目。 示例: 0 约束限制:  无 取值范围: 无 默认取值: 无
    * cidrInVpc  参数解释: 队列的虚拟私有云（VPC）的网段。建议使用网段：10.0.0.0/8~28，172.16.0.0/12~28，192.168.0.0/16~28 示例: 10.0.0.0/8 约束限制:  符合网段格式的字符串 取值范围: 无 默认取值: 无
    * cidrInMgntsubnet  参数解释: 管理子网的网段 示例: 10.23.128.0/24 约束限制:  符合网段格式的字符串 取值范围: 无 默认取值: 无
    * cidrInSubnet  参数解释: 子网网段 示例: 10.23.128.0/24 约束限制:  符合网段格式的字符串 取值范围: 无 默认取值: 无
    * resourceMode  参数解释: 队列类型。0：共享队列,1：专属队列 示例: 0 约束限制:  无 取值范围: 0,1 默认取值: 无
    * platform  参数解释: 队列计算资源的cpu架构 示例: 0 约束限制:  符合cpu架构格式的字符串 取值范围: 无 默认取值: 无
    * isRestarting  参数解释: 是否在重启状态。默认值为“false” 示例: false 约束限制:  无 取值范围: true,false 默认取值: false
    * labels  参数解释: 队列的标签信息，目前只支持设置跨az配置，multi_az=2 示例: {\\\"multi_az\\\":\\\"2\\\"} 约束限制:  符合Json格式的字符串 取值范围: 无 默认取值: 无
    * feature  参数解释: 队列特性 示例: basic 约束限制:  无 取值范围: basic（基础型） ai（AI增强型，仅SQL的x86_64专属队列支持选择） 默认取值: basic
    * resourceType  参数解释: 队列所属资源类型 示例: vm 约束限制:  无 取值范围: vm container 默认取值: 无
    * cuSpec  参数解释: 队列的规格大小。对于包周期队列，表示包周期部分的CU值；对于按需队列，表示用户购买队列时的初始值 示例: 0 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * cuScaleOutLimit  参数解释: 当前队列弹性扩缩容的CU值上限 示例: 0 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * cuScaleInLimit  参数解释: 当前队列弹性扩缩容的CU值下限 示例: 0 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * elasticResourcePoolName  参数解释: 弹性资源池名称 示例: dli_pool_0509 约束限制:  无 取值范围: 无 默认取值: 无
    * supportSparkVersions  参数解释: 队列支持的Spark版本 示例: [2.4.5] 约束限制:  无 取值范围: 无 默认取值: 无
    * defaultSparkVersion  参数解释: 队列默认的Spark版本 示例: 2.4.5 约束限制:  无 取值范围: 无 默认取值: 无
    * supportHetuEngineVersions  参数解释: 队列支持的HetuEngine版本 示例: [2.1.0] 约束限制:  无 取值范围: 无 默认取值: 无
    * defaultHetuEngineVersion  参数解释: 队列默认的HetuEngine版本 示例: 2.1.0 约束限制:  无 取值范围: 无 默认取值: 无
    * supportFlinkSqlVersions  参数解释: 队列支持的Flink SQL版本 示例: [1.17] 约束限制:  无 取值范围: 无 默认取值: 无
    * defaultFlinkSqlVersion  参数解释: 队列默认的Flink SQL版本 示例: 1.17 约束限制:  无 取值范围: 无 默认取值: 无
    * supportFlinkJarVersions  参数解释: 队列支持的Flink JAR版本 示例: [1.17] 约束限制:  无 取值范围: 无 默认取值: 无
    * defaultFlinkJarVersion  参数解释: 队列默认的Flink JAR版本 示例: 1.17 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @var string[]
    */
    protected static $getters = [
            'queueId' => 'getQueueId',
            'queueName' => 'getQueueName',
            'description' => 'getDescription',
            'owner' => 'getOwner',
            'createTime' => 'getCreateTime',
            'queueType' => 'getQueueType',
            'cuCount' => 'getCuCount',
            'chargingMode' => 'getChargingMode',
            'resourceId' => 'getResourceId',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'cidrInVpc' => 'getCidrInVpc',
            'cidrInMgntsubnet' => 'getCidrInMgntsubnet',
            'cidrInSubnet' => 'getCidrInSubnet',
            'resourceMode' => 'getResourceMode',
            'platform' => 'getPlatform',
            'isRestarting' => 'getIsRestarting',
            'labels' => 'getLabels',
            'feature' => 'getFeature',
            'resourceType' => 'getResourceType',
            'cuSpec' => 'getCuSpec',
            'cuScaleOutLimit' => 'getCuScaleOutLimit',
            'cuScaleInLimit' => 'getCuScaleInLimit',
            'elasticResourcePoolName' => 'getElasticResourcePoolName',
            'supportSparkVersions' => 'getSupportSparkVersions',
            'defaultSparkVersion' => 'getDefaultSparkVersion',
            'supportHetuEngineVersions' => 'getSupportHetuEngineVersions',
            'defaultHetuEngineVersion' => 'getDefaultHetuEngineVersion',
            'supportFlinkSqlVersions' => 'getSupportFlinkSqlVersions',
            'defaultFlinkSqlVersion' => 'getDefaultFlinkSqlVersion',
            'supportFlinkJarVersions' => 'getSupportFlinkJarVersions',
            'defaultFlinkJarVersion' => 'getDefaultFlinkJarVersion'
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
    const QUEUE_TYPE_SQL = 'sql';
    const QUEUE_TYPE_GENERAL = 'general';
    const QUEUE_TYPE_ALL = 'all';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getQueueTypeAllowableValues()
    {
        return [
            self::QUEUE_TYPE_SQL,
            self::QUEUE_TYPE_GENERAL,
            self::QUEUE_TYPE_ALL,
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
        $this->container['queueId'] = isset($data['queueId']) ? $data['queueId'] : null;
        $this->container['queueName'] = isset($data['queueName']) ? $data['queueName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['queueType'] = isset($data['queueType']) ? $data['queueType'] : null;
        $this->container['cuCount'] = isset($data['cuCount']) ? $data['cuCount'] : null;
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['cidrInVpc'] = isset($data['cidrInVpc']) ? $data['cidrInVpc'] : null;
        $this->container['cidrInMgntsubnet'] = isset($data['cidrInMgntsubnet']) ? $data['cidrInMgntsubnet'] : null;
        $this->container['cidrInSubnet'] = isset($data['cidrInSubnet']) ? $data['cidrInSubnet'] : null;
        $this->container['resourceMode'] = isset($data['resourceMode']) ? $data['resourceMode'] : null;
        $this->container['platform'] = isset($data['platform']) ? $data['platform'] : null;
        $this->container['isRestarting'] = isset($data['isRestarting']) ? $data['isRestarting'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['feature'] = isset($data['feature']) ? $data['feature'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['cuSpec'] = isset($data['cuSpec']) ? $data['cuSpec'] : null;
        $this->container['cuScaleOutLimit'] = isset($data['cuScaleOutLimit']) ? $data['cuScaleOutLimit'] : null;
        $this->container['cuScaleInLimit'] = isset($data['cuScaleInLimit']) ? $data['cuScaleInLimit'] : null;
        $this->container['elasticResourcePoolName'] = isset($data['elasticResourcePoolName']) ? $data['elasticResourcePoolName'] : null;
        $this->container['supportSparkVersions'] = isset($data['supportSparkVersions']) ? $data['supportSparkVersions'] : null;
        $this->container['defaultSparkVersion'] = isset($data['defaultSparkVersion']) ? $data['defaultSparkVersion'] : null;
        $this->container['supportHetuEngineVersions'] = isset($data['supportHetuEngineVersions']) ? $data['supportHetuEngineVersions'] : null;
        $this->container['defaultHetuEngineVersion'] = isset($data['defaultHetuEngineVersion']) ? $data['defaultHetuEngineVersion'] : null;
        $this->container['supportFlinkSqlVersions'] = isset($data['supportFlinkSqlVersions']) ? $data['supportFlinkSqlVersions'] : null;
        $this->container['defaultFlinkSqlVersion'] = isset($data['defaultFlinkSqlVersion']) ? $data['defaultFlinkSqlVersion'] : null;
        $this->container['supportFlinkJarVersions'] = isset($data['supportFlinkJarVersions']) ? $data['supportFlinkJarVersions'] : null;
        $this->container['defaultFlinkJarVersion'] = isset($data['defaultFlinkJarVersion']) ? $data['defaultFlinkJarVersion'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getQueueTypeAllowableValues();
                if (!is_null($this->container['queueType']) && !in_array($this->container['queueType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'queueType', must be one of '%s'",
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
    * Gets queueId
    *  参数解释: 队列ID 示例: 10 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return int|null
    */
    public function getQueueId()
    {
        return $this->container['queueId'];
    }

    /**
    * Sets queueId
    *
    * @param int|null $queueId 参数解释: 队列ID 示例: 10 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setQueueId($queueId)
    {
        $this->container['queueId'] = $queueId;
        return $this;
    }

    /**
    * Gets queueName
    *  参数解释: 队列名称 示例: datasource_connection 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return string|null
    */
    public function getQueueName()
    {
        return $this->container['queueName'];
    }

    /**
    * Sets queueName
    *
    * @param string|null $queueName 参数解释: 队列名称 示例: datasource_connection 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setQueueName($queueName)
    {
        $this->container['queueName'] = $queueName;
        return $this;
    }

    /**
    * Gets description
    *  参数解释: 队列描述信息 示例: des 约束限制:  无 取值范围: 无 默认取值: 无
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
    * @param string|null $description 参数解释: 队列描述信息 示例: des 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets owner
    *  参数解释: 创建队列的用户 示例: ei_dlics_c00228924 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return string|null
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param string|null $owner 参数解释: 创建队列的用户 示例: ei_dlics_c00228924 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets createTime
    *  参数解释: 创建队列的时间。是单位为“毫秒”的时间戳 示例: 1553168198000 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
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
    * @param int|null $createTime 参数解释: 创建队列的时间。是单位为“毫秒”的时间戳 示例: 1553168198000 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets queueType
    *  参数解释: 队列的类型 示例: sql 约束限制:  无 取值范围: sql, general, all 默认取值: all
    *
    * @return string|null
    */
    public function getQueueType()
    {
        return $this->container['queueType'];
    }

    /**
    * Sets queueType
    *
    * @param string|null $queueType 参数解释: 队列的类型 示例: sql 约束限制:  无 取值范围: sql, general, all 默认取值: all
    *
    * @return $this
    */
    public function setQueueType($queueType)
    {
        $this->container['queueType'] = $queueType;
        return $this;
    }

    /**
    * Gets cuCount
    *  参数解释: 与该队列绑定的计算单元数，即当前队列的CU数 示例: 16 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    *
    * @return int|null
    */
    public function getCuCount()
    {
        return $this->container['cuCount'];
    }

    /**
    * Sets cuCount
    *
    * @param int|null $cuCount 参数解释: 与该队列绑定的计算单元数，即当前队列的CU数 示例: 16 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    *
    * @return $this
    */
    public function setCuCount($cuCount)
    {
        $this->container['cuCount'] = $cuCount;
        return $this;
    }

    /**
    * Gets chargingMode
    *  参数解释: 队列的收费模式。 “1”表示按照CU时收费。 “2”表示按照包年包月收费。 示例: 16 约束限制:  无 取值范围: 1, 2 默认取值: 无
    *
    * @return int|null
    */
    public function getChargingMode()
    {
        return $this->container['chargingMode'];
    }

    /**
    * Sets chargingMode
    *
    * @param int|null $chargingMode 参数解释: 队列的收费模式。 “1”表示按照CU时收费。 “2”表示按照包年包月收费。 示例: 16 约束限制:  无 取值范围: 1, 2 默认取值: 无
    *
    * @return $this
    */
    public function setChargingMode($chargingMode)
    {
        $this->container['chargingMode'] = $chargingMode;
        return $this;
    }

    /**
    * Gets resourceId
    *  参数解释: 队列的资源ID 示例: 26afb850-d3c9-42c1-81c0-583d1163e80f 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return string|null
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string|null $resourceId 参数解释: 队列的资源ID 示例: 26afb850-d3c9-42c1-81c0-583d1163e80f 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  参数解释: 企业项目ID。0”表示default，即默认的企业项目。说明：开通了企业管理服务的用户可设置该参数绑定指定的项目。 示例: 0 约束限制:  无 取值范围: 无 默认取值: 无
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
    * @param string|null $enterpriseProjectId 参数解释: 企业项目ID。0”表示default，即默认的企业项目。说明：开通了企业管理服务的用户可设置该参数绑定指定的项目。 示例: 0 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets cidrInVpc
    *  参数解释: 队列的虚拟私有云（VPC）的网段。建议使用网段：10.0.0.0/8~28，172.16.0.0/12~28，192.168.0.0/16~28 示例: 10.0.0.0/8 约束限制:  符合网段格式的字符串 取值范围: 无 默认取值: 无
    *
    * @return string|null
    */
    public function getCidrInVpc()
    {
        return $this->container['cidrInVpc'];
    }

    /**
    * Sets cidrInVpc
    *
    * @param string|null $cidrInVpc 参数解释: 队列的虚拟私有云（VPC）的网段。建议使用网段：10.0.0.0/8~28，172.16.0.0/12~28，192.168.0.0/16~28 示例: 10.0.0.0/8 约束限制:  符合网段格式的字符串 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setCidrInVpc($cidrInVpc)
    {
        $this->container['cidrInVpc'] = $cidrInVpc;
        return $this;
    }

    /**
    * Gets cidrInMgntsubnet
    *  参数解释: 管理子网的网段 示例: 10.23.128.0/24 约束限制:  符合网段格式的字符串 取值范围: 无 默认取值: 无
    *
    * @return string|null
    */
    public function getCidrInMgntsubnet()
    {
        return $this->container['cidrInMgntsubnet'];
    }

    /**
    * Sets cidrInMgntsubnet
    *
    * @param string|null $cidrInMgntsubnet 参数解释: 管理子网的网段 示例: 10.23.128.0/24 约束限制:  符合网段格式的字符串 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setCidrInMgntsubnet($cidrInMgntsubnet)
    {
        $this->container['cidrInMgntsubnet'] = $cidrInMgntsubnet;
        return $this;
    }

    /**
    * Gets cidrInSubnet
    *  参数解释: 子网网段 示例: 10.23.128.0/24 约束限制:  符合网段格式的字符串 取值范围: 无 默认取值: 无
    *
    * @return string|null
    */
    public function getCidrInSubnet()
    {
        return $this->container['cidrInSubnet'];
    }

    /**
    * Sets cidrInSubnet
    *
    * @param string|null $cidrInSubnet 参数解释: 子网网段 示例: 10.23.128.0/24 约束限制:  符合网段格式的字符串 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setCidrInSubnet($cidrInSubnet)
    {
        $this->container['cidrInSubnet'] = $cidrInSubnet;
        return $this;
    }

    /**
    * Gets resourceMode
    *  参数解释: 队列类型。0：共享队列,1：专属队列 示例: 0 约束限制:  无 取值范围: 0,1 默认取值: 无
    *
    * @return int|null
    */
    public function getResourceMode()
    {
        return $this->container['resourceMode'];
    }

    /**
    * Sets resourceMode
    *
    * @param int|null $resourceMode 参数解释: 队列类型。0：共享队列,1：专属队列 示例: 0 约束限制:  无 取值范围: 0,1 默认取值: 无
    *
    * @return $this
    */
    public function setResourceMode($resourceMode)
    {
        $this->container['resourceMode'] = $resourceMode;
        return $this;
    }

    /**
    * Gets platform
    *  参数解释: 队列计算资源的cpu架构 示例: 0 约束限制:  符合cpu架构格式的字符串 取值范围: 无 默认取值: 无
    *
    * @return string|null
    */
    public function getPlatform()
    {
        return $this->container['platform'];
    }

    /**
    * Sets platform
    *
    * @param string|null $platform 参数解释: 队列计算资源的cpu架构 示例: 0 约束限制:  符合cpu架构格式的字符串 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setPlatform($platform)
    {
        $this->container['platform'] = $platform;
        return $this;
    }

    /**
    * Gets isRestarting
    *  参数解释: 是否在重启状态。默认值为“false” 示例: false 约束限制:  无 取值范围: true,false 默认取值: false
    *
    * @return bool|null
    */
    public function getIsRestarting()
    {
        return $this->container['isRestarting'];
    }

    /**
    * Sets isRestarting
    *
    * @param bool|null $isRestarting 参数解释: 是否在重启状态。默认值为“false” 示例: false 约束限制:  无 取值范围: true,false 默认取值: false
    *
    * @return $this
    */
    public function setIsRestarting($isRestarting)
    {
        $this->container['isRestarting'] = $isRestarting;
        return $this;
    }

    /**
    * Gets labels
    *  参数解释: 队列的标签信息，目前只支持设置跨az配置，multi_az=2 示例: {\\\"multi_az\\\":\\\"2\\\"} 约束限制:  符合Json格式的字符串 取值范围: 无 默认取值: 无
    *
    * @return string|null
    */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
    * Sets labels
    *
    * @param string|null $labels 参数解释: 队列的标签信息，目前只支持设置跨az配置，multi_az=2 示例: {\\\"multi_az\\\":\\\"2\\\"} 约束限制:  符合Json格式的字符串 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;
        return $this;
    }

    /**
    * Gets feature
    *  参数解释: 队列特性 示例: basic 约束限制:  无 取值范围: basic（基础型） ai（AI增强型，仅SQL的x86_64专属队列支持选择） 默认取值: basic
    *
    * @return string|null
    */
    public function getFeature()
    {
        return $this->container['feature'];
    }

    /**
    * Sets feature
    *
    * @param string|null $feature 参数解释: 队列特性 示例: basic 约束限制:  无 取值范围: basic（基础型） ai（AI增强型，仅SQL的x86_64专属队列支持选择） 默认取值: basic
    *
    * @return $this
    */
    public function setFeature($feature)
    {
        $this->container['feature'] = $feature;
        return $this;
    }

    /**
    * Gets resourceType
    *  参数解释: 队列所属资源类型 示例: vm 约束限制:  无 取值范围: vm container 默认取值: 无
    *
    * @return string|null
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string|null $resourceType 参数解释: 队列所属资源类型 示例: vm 约束限制:  无 取值范围: vm container 默认取值: 无
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets cuSpec
    *  参数解释: 队列的规格大小。对于包周期队列，表示包周期部分的CU值；对于按需队列，表示用户购买队列时的初始值 示例: 0 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    *
    * @return int|null
    */
    public function getCuSpec()
    {
        return $this->container['cuSpec'];
    }

    /**
    * Sets cuSpec
    *
    * @param int|null $cuSpec 参数解释: 队列的规格大小。对于包周期队列，表示包周期部分的CU值；对于按需队列，表示用户购买队列时的初始值 示例: 0 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    *
    * @return $this
    */
    public function setCuSpec($cuSpec)
    {
        $this->container['cuSpec'] = $cuSpec;
        return $this;
    }

    /**
    * Gets cuScaleOutLimit
    *  参数解释: 当前队列弹性扩缩容的CU值上限 示例: 0 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    *
    * @return int|null
    */
    public function getCuScaleOutLimit()
    {
        return $this->container['cuScaleOutLimit'];
    }

    /**
    * Sets cuScaleOutLimit
    *
    * @param int|null $cuScaleOutLimit 参数解释: 当前队列弹性扩缩容的CU值上限 示例: 0 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    *
    * @return $this
    */
    public function setCuScaleOutLimit($cuScaleOutLimit)
    {
        $this->container['cuScaleOutLimit'] = $cuScaleOutLimit;
        return $this;
    }

    /**
    * Gets cuScaleInLimit
    *  参数解释: 当前队列弹性扩缩容的CU值下限 示例: 0 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    *
    * @return int|null
    */
    public function getCuScaleInLimit()
    {
        return $this->container['cuScaleInLimit'];
    }

    /**
    * Sets cuScaleInLimit
    *
    * @param int|null $cuScaleInLimit 参数解释: 当前队列弹性扩缩容的CU值下限 示例: 0 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    *
    * @return $this
    */
    public function setCuScaleInLimit($cuScaleInLimit)
    {
        $this->container['cuScaleInLimit'] = $cuScaleInLimit;
        return $this;
    }

    /**
    * Gets elasticResourcePoolName
    *  参数解释: 弹性资源池名称 示例: dli_pool_0509 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return string|null
    */
    public function getElasticResourcePoolName()
    {
        return $this->container['elasticResourcePoolName'];
    }

    /**
    * Sets elasticResourcePoolName
    *
    * @param string|null $elasticResourcePoolName 参数解释: 弹性资源池名称 示例: dli_pool_0509 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setElasticResourcePoolName($elasticResourcePoolName)
    {
        $this->container['elasticResourcePoolName'] = $elasticResourcePoolName;
        return $this;
    }

    /**
    * Gets supportSparkVersions
    *  参数解释: 队列支持的Spark版本 示例: [2.4.5] 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return string[]|null
    */
    public function getSupportSparkVersions()
    {
        return $this->container['supportSparkVersions'];
    }

    /**
    * Sets supportSparkVersions
    *
    * @param string[]|null $supportSparkVersions 参数解释: 队列支持的Spark版本 示例: [2.4.5] 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setSupportSparkVersions($supportSparkVersions)
    {
        $this->container['supportSparkVersions'] = $supportSparkVersions;
        return $this;
    }

    /**
    * Gets defaultSparkVersion
    *  参数解释: 队列默认的Spark版本 示例: 2.4.5 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return string|null
    */
    public function getDefaultSparkVersion()
    {
        return $this->container['defaultSparkVersion'];
    }

    /**
    * Sets defaultSparkVersion
    *
    * @param string|null $defaultSparkVersion 参数解释: 队列默认的Spark版本 示例: 2.4.5 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setDefaultSparkVersion($defaultSparkVersion)
    {
        $this->container['defaultSparkVersion'] = $defaultSparkVersion;
        return $this;
    }

    /**
    * Gets supportHetuEngineVersions
    *  参数解释: 队列支持的HetuEngine版本 示例: [2.1.0] 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return string[]|null
    */
    public function getSupportHetuEngineVersions()
    {
        return $this->container['supportHetuEngineVersions'];
    }

    /**
    * Sets supportHetuEngineVersions
    *
    * @param string[]|null $supportHetuEngineVersions 参数解释: 队列支持的HetuEngine版本 示例: [2.1.0] 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setSupportHetuEngineVersions($supportHetuEngineVersions)
    {
        $this->container['supportHetuEngineVersions'] = $supportHetuEngineVersions;
        return $this;
    }

    /**
    * Gets defaultHetuEngineVersion
    *  参数解释: 队列默认的HetuEngine版本 示例: 2.1.0 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return string|null
    */
    public function getDefaultHetuEngineVersion()
    {
        return $this->container['defaultHetuEngineVersion'];
    }

    /**
    * Sets defaultHetuEngineVersion
    *
    * @param string|null $defaultHetuEngineVersion 参数解释: 队列默认的HetuEngine版本 示例: 2.1.0 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setDefaultHetuEngineVersion($defaultHetuEngineVersion)
    {
        $this->container['defaultHetuEngineVersion'] = $defaultHetuEngineVersion;
        return $this;
    }

    /**
    * Gets supportFlinkSqlVersions
    *  参数解释: 队列支持的Flink SQL版本 示例: [1.17] 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return string[]|null
    */
    public function getSupportFlinkSqlVersions()
    {
        return $this->container['supportFlinkSqlVersions'];
    }

    /**
    * Sets supportFlinkSqlVersions
    *
    * @param string[]|null $supportFlinkSqlVersions 参数解释: 队列支持的Flink SQL版本 示例: [1.17] 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setSupportFlinkSqlVersions($supportFlinkSqlVersions)
    {
        $this->container['supportFlinkSqlVersions'] = $supportFlinkSqlVersions;
        return $this;
    }

    /**
    * Gets defaultFlinkSqlVersion
    *  参数解释: 队列默认的Flink SQL版本 示例: 1.17 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return string|null
    */
    public function getDefaultFlinkSqlVersion()
    {
        return $this->container['defaultFlinkSqlVersion'];
    }

    /**
    * Sets defaultFlinkSqlVersion
    *
    * @param string|null $defaultFlinkSqlVersion 参数解释: 队列默认的Flink SQL版本 示例: 1.17 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setDefaultFlinkSqlVersion($defaultFlinkSqlVersion)
    {
        $this->container['defaultFlinkSqlVersion'] = $defaultFlinkSqlVersion;
        return $this;
    }

    /**
    * Gets supportFlinkJarVersions
    *  参数解释: 队列支持的Flink JAR版本 示例: [1.17] 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return string[]|null
    */
    public function getSupportFlinkJarVersions()
    {
        return $this->container['supportFlinkJarVersions'];
    }

    /**
    * Sets supportFlinkJarVersions
    *
    * @param string[]|null $supportFlinkJarVersions 参数解释: 队列支持的Flink JAR版本 示例: [1.17] 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setSupportFlinkJarVersions($supportFlinkJarVersions)
    {
        $this->container['supportFlinkJarVersions'] = $supportFlinkJarVersions;
        return $this;
    }

    /**
    * Gets defaultFlinkJarVersion
    *  参数解释: 队列默认的Flink JAR版本 示例: 1.17 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return string|null
    */
    public function getDefaultFlinkJarVersion()
    {
        return $this->container['defaultFlinkJarVersion'];
    }

    /**
    * Sets defaultFlinkJarVersion
    *
    * @param string|null $defaultFlinkJarVersion 参数解释: 队列默认的Flink JAR版本 示例: 1.17 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setDefaultFlinkJarVersion($defaultFlinkJarVersion)
    {
        $this->container['defaultFlinkJarVersion'] = $defaultFlinkJarVersion;
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

