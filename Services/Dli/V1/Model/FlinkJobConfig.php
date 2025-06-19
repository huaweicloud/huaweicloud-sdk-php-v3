<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FlinkJobConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FlinkJobConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * checkpointEnabled  参数解释:  是否开启作业自动快照功能 示例: false 约束限制:  无 取值范围: true,false 默认取值: false
    * checkpointMode  参数解释:  快照模式 示例: exactly_once 约束限制:  无 取值范围: exactly_once（数据只被消费一次） at_least_once（数据至少被消费一次） 默认取值: 无
    * checkpointInterval  参数解释:  快照时间间隔, 单位为秒 示例: 10 约束限制:  无 取值范围: 无 默认取值: 10
    * logEnabled  参数解释:  是否启用日志存储 示例: false 约束限制:  无 取值范围: true,false 默认取值: false
    * obsBucket  参数解释:  OBS桶名 示例: obs-demo 约束限制:  无 取值范围: 无 默认取值: 无
    * smnTopic  参数解释:  当作业异常时，向该SMN主题推送告警信息 示例: cs_job_exception 约束限制:  无 取值范围: 无 默认取值: 无
    * edgeGroupIds  参数解释:  边缘计算组ID列表 示例: 62de1e1c-066e-48a8-a79d-f461a31b2ee1,2eb00f85-99f2-4144-bcb7-d39ff47f9002 约束限制:  无 取值范围: 无 默认取值: 无
    * rootId  参数解释:  父作业ID 示例: 11 约束限制:  无 取值范围: 无 默认取值: 无
    * managerCuNumber  参数解释:  管理单元CU数 示例: 1 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * cuNumber  参数解释:  用户为作业选择的CU数量 示例: 2 约束限制:  无 取值范围: [2,400] 默认取值: 2
    * parallelNumber  参数解释:  用户设置的作业并行数， “show_detail”为“true”时独有 示例: 1 约束限制:  无 取值范围: [1,2000] 默认取值: 1
    * restartWhenException  参数解释:  是否开启异常重启功能 示例: false 约束限制:  无 取值范围: true,false 默认取值: 无
    * idleStateRetention  参数解释:  空闲状态过期周期 示例: 3600 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * udfJarUrl  参数解释:  用户已上传到DLI资源管理系统的资源包名，用户sql作业的udf jar通过该参数传入 示例: obs://cs-append/jar/udf/flink-1.13-demo-1.0-udf.jar obs://onlyci-7/flink/udx.jar 约束限制:  无 取值范围: 无 默认取值: 无
    * dirtyDataStrategy  参数解释:  作业脏数据策略 示例: 0 约束限制:  无 取值范围: 0（忽略） 1（抛出异常） 2:obsDir（保存，obsDir表示脏数据存储路径） 默认取值: 无
    * entrypoint  参数解释:  用户已上传到DLI资源管理系统的资源包名，用户自定义作业主类所在的jar包 示例: obs://test/demo/WindowJoin.jar 约束限制:  无 取值范围: 无 默认取值: 无
    * dependencyJars  参数解释:  用户已上传到DLI资源管理系统的资源包名，用户自定义作业的其他依赖包 示例: [\"zsdas/wordcount.jar\",\"ygj/flink-dis-to-kafka-v5.jar\"] 约束限制:  无 取值范围: 无 默认取值: 无
    * dependencyFiles  参数解释:  用户已上传到DLI资源管理系统的资源包名，用户自定义作业的依赖文件 示例: [\"zsdas/wordcount.jar\",\"ygj/flink-dis-to-kafka-v5.jar\"] 约束限制:  无 取值范围: 无 默认取值: 无
    * executorNumber  参数解释:  作业使用计算节点个数 示例: 0 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * executorCuNumber  参数解释:  计算节点cu数 示例: 0 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * resumeCheckpoint  参数解释:  异常自动重启时，是否从最新checkpoint恢复，默认false 示例: 0 约束限制:  无 取值范围: true,false 默认取值: false
    * runtimeConfig  参数解释: Flink作业运行时自定义优化参数 示例: [{\\\"key\\\":\\\"high-availability\\\",\\\"value\\\":\\\"org.apache.flink.kubernetes.highavailability.KubernetesHaServicesFactory\\\" },{ \\\"key\\\":\\\"kubernetes.jobmanager.replicas\\\",\\\"value\\\":\\\"2\\\" },{ \\\"key\\\":\\\"high-availability.storageDir\\\",\\\"value\\\":\\\"obs://fz-test/test\\\"}] 约束限制:  无 取值范围: 无 默认取值: 无
    * graphEditorEnabled  参数解释: 流图编辑开关 示例: false 约束限制:  无 取值范围: 无 默认取值: false
    * graphEditorData  参数解释: 流图编辑数据 约束限制:  无 取值范围: 无 默认取值: 无
    * resumeMaxNum  参数解释: 异常重试最大次数。-1代表无限 示例: -1 约束限制:  无 取值范围: 无 默认取值: 无
    * checkpointPath  参数解释: 检查点保存路径 示例: obs://cwk/checkpoint/ 约束限制:  无 取值范围: 无 默认取值: 无
    * configUrl  参数解释: 用户上传的config包OBS路径。 示例: obs://bucket-62099355b894428e8916573ae635f1f9/di-flink/lib/client.jks,obs://bucket-62099355b894428e8916573ae635f1f9/di-flink/lib/client.jks 约束限制:  无 取值范围: 无 默认取值: 无
    * tmCus  参数解释: 单TM所占CU数 示例: 1 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * tmSlotNum  参数解释: 单TM Slot数 示例: 1 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * image  参数解释: 自定义镜像。格式为：组织名/镜像名:镜像版本。当用户设置“feature”为“custom”时，该参数生效。用户可通过与“feature”参数配合使用，指定作业运行使用自定义的Flink镜像 示例: dli/spark:2.4.8 约束限制:  无 取值范围: 无 默认取值: 无
    * feature  参数解释: 自定义作业特性。表示用户作业使用的Flink镜像类型。basic：表示使用DLI提供的基础Flink镜像。custom：表示使用用户自定义的Flink镜像 示例: basic 约束限制:  无 取值范围: basic：表示使用DLI提供的基础Flink镜像 custom：表示使用用户自定义的Flink镜像 默认取值: 无
    * flinkVersion  参数解释: Flink版本。当用户设置“feature”为“basic”时，该参数生效。用户可通过与“feature”参数配合使用，指定作业运行使用的DLI基础Flink镜像的版本 示例: 1.17 约束限制:  无 取值范围: 无 默认取值: 无
    * operatorConfig  参数解释: 各算子并行度参数，以json的形式展示各算子id和并行度 示例: '{\"operator_list\":[{\"id\":\"0a448493b4782967b150582570326227\",\"parallelism\":1},{\"id\":\"6d2677a0ecc3fd8df0b72ec675edf8f4\",\"parallelism\":1},{\"id\":\"ea632d67b7d595e5b851708ae9ad79d6\",\"parallelism\":1},{\"id\":\"ddb598ad156ed281023ba4eebbe487e3\",\"parallelism\":1},{\"id\":\"bc764cd8ddf7a0cff126f51c16239658\",\"parallelism\":1}]}' 约束限制:  符合Json格式的字符串 取值范围: 无 默认取值: 无
    * staticEstimatorConfig  参数解释: 静态流图资源预估参数，以json的形式展示 示例: '{\"operator_list\":[{\"id\":\"0a448493b4782967b150582570326227\",\"parallelism\":1},{\"id\":\"6d2677a0ecc3fd8df0b72ec675edf8f4\",\"parallelism\":1},{\"id\":\"ea632d67b7d595e5b851708ae9ad79d6\",\"parallelism\":1},{\"id\":\"ddb598ad156ed281023ba4eebbe487e3\",\"parallelism\":1},{\"id\":\"bc764cd8ddf7a0cff126f51c16239658\",\"parallelism\":1}]}' 约束限制:  符合Json格式的字符串 取值范围: 无 默认取值: 无
    * realCuNumber  参数解释: 实际使用的CU数 示例: 0 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 0
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'checkpointEnabled' => 'bool',
            'checkpointMode' => 'string',
            'checkpointInterval' => 'int',
            'logEnabled' => 'bool',
            'obsBucket' => 'string',
            'smnTopic' => 'string',
            'edgeGroupIds' => 'string[]',
            'rootId' => 'int',
            'managerCuNumber' => 'int',
            'cuNumber' => 'int',
            'parallelNumber' => 'int',
            'restartWhenException' => 'bool',
            'idleStateRetention' => 'int',
            'udfJarUrl' => 'string',
            'dirtyDataStrategy' => 'string',
            'entrypoint' => 'string',
            'dependencyJars' => 'string[]',
            'dependencyFiles' => 'string[]',
            'executorNumber' => 'int',
            'executorCuNumber' => 'int',
            'resumeCheckpoint' => 'bool',
            'runtimeConfig' => 'string',
            'graphEditorEnabled' => 'bool',
            'graphEditorData' => 'string',
            'resumeMaxNum' => 'int',
            'checkpointPath' => 'string',
            'configUrl' => 'string',
            'tmCus' => 'int',
            'tmSlotNum' => 'int',
            'image' => 'string',
            'feature' => 'string',
            'flinkVersion' => 'string',
            'operatorConfig' => 'string',
            'staticEstimatorConfig' => 'string',
            'realCuNumber' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * checkpointEnabled  参数解释:  是否开启作业自动快照功能 示例: false 约束限制:  无 取值范围: true,false 默认取值: false
    * checkpointMode  参数解释:  快照模式 示例: exactly_once 约束限制:  无 取值范围: exactly_once（数据只被消费一次） at_least_once（数据至少被消费一次） 默认取值: 无
    * checkpointInterval  参数解释:  快照时间间隔, 单位为秒 示例: 10 约束限制:  无 取值范围: 无 默认取值: 10
    * logEnabled  参数解释:  是否启用日志存储 示例: false 约束限制:  无 取值范围: true,false 默认取值: false
    * obsBucket  参数解释:  OBS桶名 示例: obs-demo 约束限制:  无 取值范围: 无 默认取值: 无
    * smnTopic  参数解释:  当作业异常时，向该SMN主题推送告警信息 示例: cs_job_exception 约束限制:  无 取值范围: 无 默认取值: 无
    * edgeGroupIds  参数解释:  边缘计算组ID列表 示例: 62de1e1c-066e-48a8-a79d-f461a31b2ee1,2eb00f85-99f2-4144-bcb7-d39ff47f9002 约束限制:  无 取值范围: 无 默认取值: 无
    * rootId  参数解释:  父作业ID 示例: 11 约束限制:  无 取值范围: 无 默认取值: 无
    * managerCuNumber  参数解释:  管理单元CU数 示例: 1 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * cuNumber  参数解释:  用户为作业选择的CU数量 示例: 2 约束限制:  无 取值范围: [2,400] 默认取值: 2
    * parallelNumber  参数解释:  用户设置的作业并行数， “show_detail”为“true”时独有 示例: 1 约束限制:  无 取值范围: [1,2000] 默认取值: 1
    * restartWhenException  参数解释:  是否开启异常重启功能 示例: false 约束限制:  无 取值范围: true,false 默认取值: 无
    * idleStateRetention  参数解释:  空闲状态过期周期 示例: 3600 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * udfJarUrl  参数解释:  用户已上传到DLI资源管理系统的资源包名，用户sql作业的udf jar通过该参数传入 示例: obs://cs-append/jar/udf/flink-1.13-demo-1.0-udf.jar obs://onlyci-7/flink/udx.jar 约束限制:  无 取值范围: 无 默认取值: 无
    * dirtyDataStrategy  参数解释:  作业脏数据策略 示例: 0 约束限制:  无 取值范围: 0（忽略） 1（抛出异常） 2:obsDir（保存，obsDir表示脏数据存储路径） 默认取值: 无
    * entrypoint  参数解释:  用户已上传到DLI资源管理系统的资源包名，用户自定义作业主类所在的jar包 示例: obs://test/demo/WindowJoin.jar 约束限制:  无 取值范围: 无 默认取值: 无
    * dependencyJars  参数解释:  用户已上传到DLI资源管理系统的资源包名，用户自定义作业的其他依赖包 示例: [\"zsdas/wordcount.jar\",\"ygj/flink-dis-to-kafka-v5.jar\"] 约束限制:  无 取值范围: 无 默认取值: 无
    * dependencyFiles  参数解释:  用户已上传到DLI资源管理系统的资源包名，用户自定义作业的依赖文件 示例: [\"zsdas/wordcount.jar\",\"ygj/flink-dis-to-kafka-v5.jar\"] 约束限制:  无 取值范围: 无 默认取值: 无
    * executorNumber  参数解释:  作业使用计算节点个数 示例: 0 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * executorCuNumber  参数解释:  计算节点cu数 示例: 0 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * resumeCheckpoint  参数解释:  异常自动重启时，是否从最新checkpoint恢复，默认false 示例: 0 约束限制:  无 取值范围: true,false 默认取值: false
    * runtimeConfig  参数解释: Flink作业运行时自定义优化参数 示例: [{\\\"key\\\":\\\"high-availability\\\",\\\"value\\\":\\\"org.apache.flink.kubernetes.highavailability.KubernetesHaServicesFactory\\\" },{ \\\"key\\\":\\\"kubernetes.jobmanager.replicas\\\",\\\"value\\\":\\\"2\\\" },{ \\\"key\\\":\\\"high-availability.storageDir\\\",\\\"value\\\":\\\"obs://fz-test/test\\\"}] 约束限制:  无 取值范围: 无 默认取值: 无
    * graphEditorEnabled  参数解释: 流图编辑开关 示例: false 约束限制:  无 取值范围: 无 默认取值: false
    * graphEditorData  参数解释: 流图编辑数据 约束限制:  无 取值范围: 无 默认取值: 无
    * resumeMaxNum  参数解释: 异常重试最大次数。-1代表无限 示例: -1 约束限制:  无 取值范围: 无 默认取值: 无
    * checkpointPath  参数解释: 检查点保存路径 示例: obs://cwk/checkpoint/ 约束限制:  无 取值范围: 无 默认取值: 无
    * configUrl  参数解释: 用户上传的config包OBS路径。 示例: obs://bucket-62099355b894428e8916573ae635f1f9/di-flink/lib/client.jks,obs://bucket-62099355b894428e8916573ae635f1f9/di-flink/lib/client.jks 约束限制:  无 取值范围: 无 默认取值: 无
    * tmCus  参数解释: 单TM所占CU数 示例: 1 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * tmSlotNum  参数解释: 单TM Slot数 示例: 1 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * image  参数解释: 自定义镜像。格式为：组织名/镜像名:镜像版本。当用户设置“feature”为“custom”时，该参数生效。用户可通过与“feature”参数配合使用，指定作业运行使用自定义的Flink镜像 示例: dli/spark:2.4.8 约束限制:  无 取值范围: 无 默认取值: 无
    * feature  参数解释: 自定义作业特性。表示用户作业使用的Flink镜像类型。basic：表示使用DLI提供的基础Flink镜像。custom：表示使用用户自定义的Flink镜像 示例: basic 约束限制:  无 取值范围: basic：表示使用DLI提供的基础Flink镜像 custom：表示使用用户自定义的Flink镜像 默认取值: 无
    * flinkVersion  参数解释: Flink版本。当用户设置“feature”为“basic”时，该参数生效。用户可通过与“feature”参数配合使用，指定作业运行使用的DLI基础Flink镜像的版本 示例: 1.17 约束限制:  无 取值范围: 无 默认取值: 无
    * operatorConfig  参数解释: 各算子并行度参数，以json的形式展示各算子id和并行度 示例: '{\"operator_list\":[{\"id\":\"0a448493b4782967b150582570326227\",\"parallelism\":1},{\"id\":\"6d2677a0ecc3fd8df0b72ec675edf8f4\",\"parallelism\":1},{\"id\":\"ea632d67b7d595e5b851708ae9ad79d6\",\"parallelism\":1},{\"id\":\"ddb598ad156ed281023ba4eebbe487e3\",\"parallelism\":1},{\"id\":\"bc764cd8ddf7a0cff126f51c16239658\",\"parallelism\":1}]}' 约束限制:  符合Json格式的字符串 取值范围: 无 默认取值: 无
    * staticEstimatorConfig  参数解释: 静态流图资源预估参数，以json的形式展示 示例: '{\"operator_list\":[{\"id\":\"0a448493b4782967b150582570326227\",\"parallelism\":1},{\"id\":\"6d2677a0ecc3fd8df0b72ec675edf8f4\",\"parallelism\":1},{\"id\":\"ea632d67b7d595e5b851708ae9ad79d6\",\"parallelism\":1},{\"id\":\"ddb598ad156ed281023ba4eebbe487e3\",\"parallelism\":1},{\"id\":\"bc764cd8ddf7a0cff126f51c16239658\",\"parallelism\":1}]}' 约束限制:  符合Json格式的字符串 取值范围: 无 默认取值: 无
    * realCuNumber  参数解释: 实际使用的CU数 示例: 0 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 0
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'checkpointEnabled' => null,
        'checkpointMode' => null,
        'checkpointInterval' => 'int32',
        'logEnabled' => null,
        'obsBucket' => null,
        'smnTopic' => null,
        'edgeGroupIds' => null,
        'rootId' => 'int64',
        'managerCuNumber' => 'int32',
        'cuNumber' => 'int32',
        'parallelNumber' => 'int32',
        'restartWhenException' => null,
        'idleStateRetention' => 'int32',
        'udfJarUrl' => null,
        'dirtyDataStrategy' => null,
        'entrypoint' => null,
        'dependencyJars' => null,
        'dependencyFiles' => null,
        'executorNumber' => 'int32',
        'executorCuNumber' => 'int32',
        'resumeCheckpoint' => null,
        'runtimeConfig' => null,
        'graphEditorEnabled' => null,
        'graphEditorData' => null,
        'resumeMaxNum' => 'int64',
        'checkpointPath' => null,
        'configUrl' => null,
        'tmCus' => 'int32',
        'tmSlotNum' => 'int32',
        'image' => null,
        'feature' => null,
        'flinkVersion' => null,
        'operatorConfig' => null,
        'staticEstimatorConfig' => null,
        'realCuNumber' => 'int32'
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
    * checkpointEnabled  参数解释:  是否开启作业自动快照功能 示例: false 约束限制:  无 取值范围: true,false 默认取值: false
    * checkpointMode  参数解释:  快照模式 示例: exactly_once 约束限制:  无 取值范围: exactly_once（数据只被消费一次） at_least_once（数据至少被消费一次） 默认取值: 无
    * checkpointInterval  参数解释:  快照时间间隔, 单位为秒 示例: 10 约束限制:  无 取值范围: 无 默认取值: 10
    * logEnabled  参数解释:  是否启用日志存储 示例: false 约束限制:  无 取值范围: true,false 默认取值: false
    * obsBucket  参数解释:  OBS桶名 示例: obs-demo 约束限制:  无 取值范围: 无 默认取值: 无
    * smnTopic  参数解释:  当作业异常时，向该SMN主题推送告警信息 示例: cs_job_exception 约束限制:  无 取值范围: 无 默认取值: 无
    * edgeGroupIds  参数解释:  边缘计算组ID列表 示例: 62de1e1c-066e-48a8-a79d-f461a31b2ee1,2eb00f85-99f2-4144-bcb7-d39ff47f9002 约束限制:  无 取值范围: 无 默认取值: 无
    * rootId  参数解释:  父作业ID 示例: 11 约束限制:  无 取值范围: 无 默认取值: 无
    * managerCuNumber  参数解释:  管理单元CU数 示例: 1 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * cuNumber  参数解释:  用户为作业选择的CU数量 示例: 2 约束限制:  无 取值范围: [2,400] 默认取值: 2
    * parallelNumber  参数解释:  用户设置的作业并行数， “show_detail”为“true”时独有 示例: 1 约束限制:  无 取值范围: [1,2000] 默认取值: 1
    * restartWhenException  参数解释:  是否开启异常重启功能 示例: false 约束限制:  无 取值范围: true,false 默认取值: 无
    * idleStateRetention  参数解释:  空闲状态过期周期 示例: 3600 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * udfJarUrl  参数解释:  用户已上传到DLI资源管理系统的资源包名，用户sql作业的udf jar通过该参数传入 示例: obs://cs-append/jar/udf/flink-1.13-demo-1.0-udf.jar obs://onlyci-7/flink/udx.jar 约束限制:  无 取值范围: 无 默认取值: 无
    * dirtyDataStrategy  参数解释:  作业脏数据策略 示例: 0 约束限制:  无 取值范围: 0（忽略） 1（抛出异常） 2:obsDir（保存，obsDir表示脏数据存储路径） 默认取值: 无
    * entrypoint  参数解释:  用户已上传到DLI资源管理系统的资源包名，用户自定义作业主类所在的jar包 示例: obs://test/demo/WindowJoin.jar 约束限制:  无 取值范围: 无 默认取值: 无
    * dependencyJars  参数解释:  用户已上传到DLI资源管理系统的资源包名，用户自定义作业的其他依赖包 示例: [\"zsdas/wordcount.jar\",\"ygj/flink-dis-to-kafka-v5.jar\"] 约束限制:  无 取值范围: 无 默认取值: 无
    * dependencyFiles  参数解释:  用户已上传到DLI资源管理系统的资源包名，用户自定义作业的依赖文件 示例: [\"zsdas/wordcount.jar\",\"ygj/flink-dis-to-kafka-v5.jar\"] 约束限制:  无 取值范围: 无 默认取值: 无
    * executorNumber  参数解释:  作业使用计算节点个数 示例: 0 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * executorCuNumber  参数解释:  计算节点cu数 示例: 0 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * resumeCheckpoint  参数解释:  异常自动重启时，是否从最新checkpoint恢复，默认false 示例: 0 约束限制:  无 取值范围: true,false 默认取值: false
    * runtimeConfig  参数解释: Flink作业运行时自定义优化参数 示例: [{\\\"key\\\":\\\"high-availability\\\",\\\"value\\\":\\\"org.apache.flink.kubernetes.highavailability.KubernetesHaServicesFactory\\\" },{ \\\"key\\\":\\\"kubernetes.jobmanager.replicas\\\",\\\"value\\\":\\\"2\\\" },{ \\\"key\\\":\\\"high-availability.storageDir\\\",\\\"value\\\":\\\"obs://fz-test/test\\\"}] 约束限制:  无 取值范围: 无 默认取值: 无
    * graphEditorEnabled  参数解释: 流图编辑开关 示例: false 约束限制:  无 取值范围: 无 默认取值: false
    * graphEditorData  参数解释: 流图编辑数据 约束限制:  无 取值范围: 无 默认取值: 无
    * resumeMaxNum  参数解释: 异常重试最大次数。-1代表无限 示例: -1 约束限制:  无 取值范围: 无 默认取值: 无
    * checkpointPath  参数解释: 检查点保存路径 示例: obs://cwk/checkpoint/ 约束限制:  无 取值范围: 无 默认取值: 无
    * configUrl  参数解释: 用户上传的config包OBS路径。 示例: obs://bucket-62099355b894428e8916573ae635f1f9/di-flink/lib/client.jks,obs://bucket-62099355b894428e8916573ae635f1f9/di-flink/lib/client.jks 约束限制:  无 取值范围: 无 默认取值: 无
    * tmCus  参数解释: 单TM所占CU数 示例: 1 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * tmSlotNum  参数解释: 单TM Slot数 示例: 1 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * image  参数解释: 自定义镜像。格式为：组织名/镜像名:镜像版本。当用户设置“feature”为“custom”时，该参数生效。用户可通过与“feature”参数配合使用，指定作业运行使用自定义的Flink镜像 示例: dli/spark:2.4.8 约束限制:  无 取值范围: 无 默认取值: 无
    * feature  参数解释: 自定义作业特性。表示用户作业使用的Flink镜像类型。basic：表示使用DLI提供的基础Flink镜像。custom：表示使用用户自定义的Flink镜像 示例: basic 约束限制:  无 取值范围: basic：表示使用DLI提供的基础Flink镜像 custom：表示使用用户自定义的Flink镜像 默认取值: 无
    * flinkVersion  参数解释: Flink版本。当用户设置“feature”为“basic”时，该参数生效。用户可通过与“feature”参数配合使用，指定作业运行使用的DLI基础Flink镜像的版本 示例: 1.17 约束限制:  无 取值范围: 无 默认取值: 无
    * operatorConfig  参数解释: 各算子并行度参数，以json的形式展示各算子id和并行度 示例: '{\"operator_list\":[{\"id\":\"0a448493b4782967b150582570326227\",\"parallelism\":1},{\"id\":\"6d2677a0ecc3fd8df0b72ec675edf8f4\",\"parallelism\":1},{\"id\":\"ea632d67b7d595e5b851708ae9ad79d6\",\"parallelism\":1},{\"id\":\"ddb598ad156ed281023ba4eebbe487e3\",\"parallelism\":1},{\"id\":\"bc764cd8ddf7a0cff126f51c16239658\",\"parallelism\":1}]}' 约束限制:  符合Json格式的字符串 取值范围: 无 默认取值: 无
    * staticEstimatorConfig  参数解释: 静态流图资源预估参数，以json的形式展示 示例: '{\"operator_list\":[{\"id\":\"0a448493b4782967b150582570326227\",\"parallelism\":1},{\"id\":\"6d2677a0ecc3fd8df0b72ec675edf8f4\",\"parallelism\":1},{\"id\":\"ea632d67b7d595e5b851708ae9ad79d6\",\"parallelism\":1},{\"id\":\"ddb598ad156ed281023ba4eebbe487e3\",\"parallelism\":1},{\"id\":\"bc764cd8ddf7a0cff126f51c16239658\",\"parallelism\":1}]}' 约束限制:  符合Json格式的字符串 取值范围: 无 默认取值: 无
    * realCuNumber  参数解释: 实际使用的CU数 示例: 0 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 0
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'checkpointEnabled' => 'checkpoint_enabled',
            'checkpointMode' => 'checkpoint_mode',
            'checkpointInterval' => 'checkpoint_interval',
            'logEnabled' => 'log_enabled',
            'obsBucket' => 'obs_bucket',
            'smnTopic' => 'smn_topic',
            'edgeGroupIds' => 'edge_group_ids',
            'rootId' => 'root_id',
            'managerCuNumber' => 'manager_cu_number',
            'cuNumber' => 'cu_number',
            'parallelNumber' => 'parallel_number',
            'restartWhenException' => 'restart_when_exception',
            'idleStateRetention' => 'idle_state_retention',
            'udfJarUrl' => 'udf_jar_url',
            'dirtyDataStrategy' => 'dirty_data_strategy',
            'entrypoint' => 'entrypoint',
            'dependencyJars' => 'dependency_jars',
            'dependencyFiles' => 'dependency_files',
            'executorNumber' => 'executor_number',
            'executorCuNumber' => 'executor_cu_number',
            'resumeCheckpoint' => 'resume_checkpoint',
            'runtimeConfig' => 'runtime_config',
            'graphEditorEnabled' => 'graph_editor_enabled',
            'graphEditorData' => 'graph_editor_data',
            'resumeMaxNum' => 'resume_max_num',
            'checkpointPath' => 'checkpoint_path',
            'configUrl' => 'config_url',
            'tmCus' => 'tm_cus',
            'tmSlotNum' => 'tm_slot_num',
            'image' => 'image',
            'feature' => 'feature',
            'flinkVersion' => 'flink_version',
            'operatorConfig' => 'operator_config',
            'staticEstimatorConfig' => 'static_estimator_config',
            'realCuNumber' => 'real_cu_number'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * checkpointEnabled  参数解释:  是否开启作业自动快照功能 示例: false 约束限制:  无 取值范围: true,false 默认取值: false
    * checkpointMode  参数解释:  快照模式 示例: exactly_once 约束限制:  无 取值范围: exactly_once（数据只被消费一次） at_least_once（数据至少被消费一次） 默认取值: 无
    * checkpointInterval  参数解释:  快照时间间隔, 单位为秒 示例: 10 约束限制:  无 取值范围: 无 默认取值: 10
    * logEnabled  参数解释:  是否启用日志存储 示例: false 约束限制:  无 取值范围: true,false 默认取值: false
    * obsBucket  参数解释:  OBS桶名 示例: obs-demo 约束限制:  无 取值范围: 无 默认取值: 无
    * smnTopic  参数解释:  当作业异常时，向该SMN主题推送告警信息 示例: cs_job_exception 约束限制:  无 取值范围: 无 默认取值: 无
    * edgeGroupIds  参数解释:  边缘计算组ID列表 示例: 62de1e1c-066e-48a8-a79d-f461a31b2ee1,2eb00f85-99f2-4144-bcb7-d39ff47f9002 约束限制:  无 取值范围: 无 默认取值: 无
    * rootId  参数解释:  父作业ID 示例: 11 约束限制:  无 取值范围: 无 默认取值: 无
    * managerCuNumber  参数解释:  管理单元CU数 示例: 1 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * cuNumber  参数解释:  用户为作业选择的CU数量 示例: 2 约束限制:  无 取值范围: [2,400] 默认取值: 2
    * parallelNumber  参数解释:  用户设置的作业并行数， “show_detail”为“true”时独有 示例: 1 约束限制:  无 取值范围: [1,2000] 默认取值: 1
    * restartWhenException  参数解释:  是否开启异常重启功能 示例: false 约束限制:  无 取值范围: true,false 默认取值: 无
    * idleStateRetention  参数解释:  空闲状态过期周期 示例: 3600 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * udfJarUrl  参数解释:  用户已上传到DLI资源管理系统的资源包名，用户sql作业的udf jar通过该参数传入 示例: obs://cs-append/jar/udf/flink-1.13-demo-1.0-udf.jar obs://onlyci-7/flink/udx.jar 约束限制:  无 取值范围: 无 默认取值: 无
    * dirtyDataStrategy  参数解释:  作业脏数据策略 示例: 0 约束限制:  无 取值范围: 0（忽略） 1（抛出异常） 2:obsDir（保存，obsDir表示脏数据存储路径） 默认取值: 无
    * entrypoint  参数解释:  用户已上传到DLI资源管理系统的资源包名，用户自定义作业主类所在的jar包 示例: obs://test/demo/WindowJoin.jar 约束限制:  无 取值范围: 无 默认取值: 无
    * dependencyJars  参数解释:  用户已上传到DLI资源管理系统的资源包名，用户自定义作业的其他依赖包 示例: [\"zsdas/wordcount.jar\",\"ygj/flink-dis-to-kafka-v5.jar\"] 约束限制:  无 取值范围: 无 默认取值: 无
    * dependencyFiles  参数解释:  用户已上传到DLI资源管理系统的资源包名，用户自定义作业的依赖文件 示例: [\"zsdas/wordcount.jar\",\"ygj/flink-dis-to-kafka-v5.jar\"] 约束限制:  无 取值范围: 无 默认取值: 无
    * executorNumber  参数解释:  作业使用计算节点个数 示例: 0 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * executorCuNumber  参数解释:  计算节点cu数 示例: 0 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * resumeCheckpoint  参数解释:  异常自动重启时，是否从最新checkpoint恢复，默认false 示例: 0 约束限制:  无 取值范围: true,false 默认取值: false
    * runtimeConfig  参数解释: Flink作业运行时自定义优化参数 示例: [{\\\"key\\\":\\\"high-availability\\\",\\\"value\\\":\\\"org.apache.flink.kubernetes.highavailability.KubernetesHaServicesFactory\\\" },{ \\\"key\\\":\\\"kubernetes.jobmanager.replicas\\\",\\\"value\\\":\\\"2\\\" },{ \\\"key\\\":\\\"high-availability.storageDir\\\",\\\"value\\\":\\\"obs://fz-test/test\\\"}] 约束限制:  无 取值范围: 无 默认取值: 无
    * graphEditorEnabled  参数解释: 流图编辑开关 示例: false 约束限制:  无 取值范围: 无 默认取值: false
    * graphEditorData  参数解释: 流图编辑数据 约束限制:  无 取值范围: 无 默认取值: 无
    * resumeMaxNum  参数解释: 异常重试最大次数。-1代表无限 示例: -1 约束限制:  无 取值范围: 无 默认取值: 无
    * checkpointPath  参数解释: 检查点保存路径 示例: obs://cwk/checkpoint/ 约束限制:  无 取值范围: 无 默认取值: 无
    * configUrl  参数解释: 用户上传的config包OBS路径。 示例: obs://bucket-62099355b894428e8916573ae635f1f9/di-flink/lib/client.jks,obs://bucket-62099355b894428e8916573ae635f1f9/di-flink/lib/client.jks 约束限制:  无 取值范围: 无 默认取值: 无
    * tmCus  参数解释: 单TM所占CU数 示例: 1 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * tmSlotNum  参数解释: 单TM Slot数 示例: 1 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * image  参数解释: 自定义镜像。格式为：组织名/镜像名:镜像版本。当用户设置“feature”为“custom”时，该参数生效。用户可通过与“feature”参数配合使用，指定作业运行使用自定义的Flink镜像 示例: dli/spark:2.4.8 约束限制:  无 取值范围: 无 默认取值: 无
    * feature  参数解释: 自定义作业特性。表示用户作业使用的Flink镜像类型。basic：表示使用DLI提供的基础Flink镜像。custom：表示使用用户自定义的Flink镜像 示例: basic 约束限制:  无 取值范围: basic：表示使用DLI提供的基础Flink镜像 custom：表示使用用户自定义的Flink镜像 默认取值: 无
    * flinkVersion  参数解释: Flink版本。当用户设置“feature”为“basic”时，该参数生效。用户可通过与“feature”参数配合使用，指定作业运行使用的DLI基础Flink镜像的版本 示例: 1.17 约束限制:  无 取值范围: 无 默认取值: 无
    * operatorConfig  参数解释: 各算子并行度参数，以json的形式展示各算子id和并行度 示例: '{\"operator_list\":[{\"id\":\"0a448493b4782967b150582570326227\",\"parallelism\":1},{\"id\":\"6d2677a0ecc3fd8df0b72ec675edf8f4\",\"parallelism\":1},{\"id\":\"ea632d67b7d595e5b851708ae9ad79d6\",\"parallelism\":1},{\"id\":\"ddb598ad156ed281023ba4eebbe487e3\",\"parallelism\":1},{\"id\":\"bc764cd8ddf7a0cff126f51c16239658\",\"parallelism\":1}]}' 约束限制:  符合Json格式的字符串 取值范围: 无 默认取值: 无
    * staticEstimatorConfig  参数解释: 静态流图资源预估参数，以json的形式展示 示例: '{\"operator_list\":[{\"id\":\"0a448493b4782967b150582570326227\",\"parallelism\":1},{\"id\":\"6d2677a0ecc3fd8df0b72ec675edf8f4\",\"parallelism\":1},{\"id\":\"ea632d67b7d595e5b851708ae9ad79d6\",\"parallelism\":1},{\"id\":\"ddb598ad156ed281023ba4eebbe487e3\",\"parallelism\":1},{\"id\":\"bc764cd8ddf7a0cff126f51c16239658\",\"parallelism\":1}]}' 约束限制:  符合Json格式的字符串 取值范围: 无 默认取值: 无
    * realCuNumber  参数解释: 实际使用的CU数 示例: 0 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 0
    *
    * @var string[]
    */
    protected static $setters = [
            'checkpointEnabled' => 'setCheckpointEnabled',
            'checkpointMode' => 'setCheckpointMode',
            'checkpointInterval' => 'setCheckpointInterval',
            'logEnabled' => 'setLogEnabled',
            'obsBucket' => 'setObsBucket',
            'smnTopic' => 'setSmnTopic',
            'edgeGroupIds' => 'setEdgeGroupIds',
            'rootId' => 'setRootId',
            'managerCuNumber' => 'setManagerCuNumber',
            'cuNumber' => 'setCuNumber',
            'parallelNumber' => 'setParallelNumber',
            'restartWhenException' => 'setRestartWhenException',
            'idleStateRetention' => 'setIdleStateRetention',
            'udfJarUrl' => 'setUdfJarUrl',
            'dirtyDataStrategy' => 'setDirtyDataStrategy',
            'entrypoint' => 'setEntrypoint',
            'dependencyJars' => 'setDependencyJars',
            'dependencyFiles' => 'setDependencyFiles',
            'executorNumber' => 'setExecutorNumber',
            'executorCuNumber' => 'setExecutorCuNumber',
            'resumeCheckpoint' => 'setResumeCheckpoint',
            'runtimeConfig' => 'setRuntimeConfig',
            'graphEditorEnabled' => 'setGraphEditorEnabled',
            'graphEditorData' => 'setGraphEditorData',
            'resumeMaxNum' => 'setResumeMaxNum',
            'checkpointPath' => 'setCheckpointPath',
            'configUrl' => 'setConfigUrl',
            'tmCus' => 'setTmCus',
            'tmSlotNum' => 'setTmSlotNum',
            'image' => 'setImage',
            'feature' => 'setFeature',
            'flinkVersion' => 'setFlinkVersion',
            'operatorConfig' => 'setOperatorConfig',
            'staticEstimatorConfig' => 'setStaticEstimatorConfig',
            'realCuNumber' => 'setRealCuNumber'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * checkpointEnabled  参数解释:  是否开启作业自动快照功能 示例: false 约束限制:  无 取值范围: true,false 默认取值: false
    * checkpointMode  参数解释:  快照模式 示例: exactly_once 约束限制:  无 取值范围: exactly_once（数据只被消费一次） at_least_once（数据至少被消费一次） 默认取值: 无
    * checkpointInterval  参数解释:  快照时间间隔, 单位为秒 示例: 10 约束限制:  无 取值范围: 无 默认取值: 10
    * logEnabled  参数解释:  是否启用日志存储 示例: false 约束限制:  无 取值范围: true,false 默认取值: false
    * obsBucket  参数解释:  OBS桶名 示例: obs-demo 约束限制:  无 取值范围: 无 默认取值: 无
    * smnTopic  参数解释:  当作业异常时，向该SMN主题推送告警信息 示例: cs_job_exception 约束限制:  无 取值范围: 无 默认取值: 无
    * edgeGroupIds  参数解释:  边缘计算组ID列表 示例: 62de1e1c-066e-48a8-a79d-f461a31b2ee1,2eb00f85-99f2-4144-bcb7-d39ff47f9002 约束限制:  无 取值范围: 无 默认取值: 无
    * rootId  参数解释:  父作业ID 示例: 11 约束限制:  无 取值范围: 无 默认取值: 无
    * managerCuNumber  参数解释:  管理单元CU数 示例: 1 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * cuNumber  参数解释:  用户为作业选择的CU数量 示例: 2 约束限制:  无 取值范围: [2,400] 默认取值: 2
    * parallelNumber  参数解释:  用户设置的作业并行数， “show_detail”为“true”时独有 示例: 1 约束限制:  无 取值范围: [1,2000] 默认取值: 1
    * restartWhenException  参数解释:  是否开启异常重启功能 示例: false 约束限制:  无 取值范围: true,false 默认取值: 无
    * idleStateRetention  参数解释:  空闲状态过期周期 示例: 3600 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * udfJarUrl  参数解释:  用户已上传到DLI资源管理系统的资源包名，用户sql作业的udf jar通过该参数传入 示例: obs://cs-append/jar/udf/flink-1.13-demo-1.0-udf.jar obs://onlyci-7/flink/udx.jar 约束限制:  无 取值范围: 无 默认取值: 无
    * dirtyDataStrategy  参数解释:  作业脏数据策略 示例: 0 约束限制:  无 取值范围: 0（忽略） 1（抛出异常） 2:obsDir（保存，obsDir表示脏数据存储路径） 默认取值: 无
    * entrypoint  参数解释:  用户已上传到DLI资源管理系统的资源包名，用户自定义作业主类所在的jar包 示例: obs://test/demo/WindowJoin.jar 约束限制:  无 取值范围: 无 默认取值: 无
    * dependencyJars  参数解释:  用户已上传到DLI资源管理系统的资源包名，用户自定义作业的其他依赖包 示例: [\"zsdas/wordcount.jar\",\"ygj/flink-dis-to-kafka-v5.jar\"] 约束限制:  无 取值范围: 无 默认取值: 无
    * dependencyFiles  参数解释:  用户已上传到DLI资源管理系统的资源包名，用户自定义作业的依赖文件 示例: [\"zsdas/wordcount.jar\",\"ygj/flink-dis-to-kafka-v5.jar\"] 约束限制:  无 取值范围: 无 默认取值: 无
    * executorNumber  参数解释:  作业使用计算节点个数 示例: 0 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * executorCuNumber  参数解释:  计算节点cu数 示例: 0 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * resumeCheckpoint  参数解释:  异常自动重启时，是否从最新checkpoint恢复，默认false 示例: 0 约束限制:  无 取值范围: true,false 默认取值: false
    * runtimeConfig  参数解释: Flink作业运行时自定义优化参数 示例: [{\\\"key\\\":\\\"high-availability\\\",\\\"value\\\":\\\"org.apache.flink.kubernetes.highavailability.KubernetesHaServicesFactory\\\" },{ \\\"key\\\":\\\"kubernetes.jobmanager.replicas\\\",\\\"value\\\":\\\"2\\\" },{ \\\"key\\\":\\\"high-availability.storageDir\\\",\\\"value\\\":\\\"obs://fz-test/test\\\"}] 约束限制:  无 取值范围: 无 默认取值: 无
    * graphEditorEnabled  参数解释: 流图编辑开关 示例: false 约束限制:  无 取值范围: 无 默认取值: false
    * graphEditorData  参数解释: 流图编辑数据 约束限制:  无 取值范围: 无 默认取值: 无
    * resumeMaxNum  参数解释: 异常重试最大次数。-1代表无限 示例: -1 约束限制:  无 取值范围: 无 默认取值: 无
    * checkpointPath  参数解释: 检查点保存路径 示例: obs://cwk/checkpoint/ 约束限制:  无 取值范围: 无 默认取值: 无
    * configUrl  参数解释: 用户上传的config包OBS路径。 示例: obs://bucket-62099355b894428e8916573ae635f1f9/di-flink/lib/client.jks,obs://bucket-62099355b894428e8916573ae635f1f9/di-flink/lib/client.jks 约束限制:  无 取值范围: 无 默认取值: 无
    * tmCus  参数解释: 单TM所占CU数 示例: 1 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * tmSlotNum  参数解释: 单TM Slot数 示例: 1 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * image  参数解释: 自定义镜像。格式为：组织名/镜像名:镜像版本。当用户设置“feature”为“custom”时，该参数生效。用户可通过与“feature”参数配合使用，指定作业运行使用自定义的Flink镜像 示例: dli/spark:2.4.8 约束限制:  无 取值范围: 无 默认取值: 无
    * feature  参数解释: 自定义作业特性。表示用户作业使用的Flink镜像类型。basic：表示使用DLI提供的基础Flink镜像。custom：表示使用用户自定义的Flink镜像 示例: basic 约束限制:  无 取值范围: basic：表示使用DLI提供的基础Flink镜像 custom：表示使用用户自定义的Flink镜像 默认取值: 无
    * flinkVersion  参数解释: Flink版本。当用户设置“feature”为“basic”时，该参数生效。用户可通过与“feature”参数配合使用，指定作业运行使用的DLI基础Flink镜像的版本 示例: 1.17 约束限制:  无 取值范围: 无 默认取值: 无
    * operatorConfig  参数解释: 各算子并行度参数，以json的形式展示各算子id和并行度 示例: '{\"operator_list\":[{\"id\":\"0a448493b4782967b150582570326227\",\"parallelism\":1},{\"id\":\"6d2677a0ecc3fd8df0b72ec675edf8f4\",\"parallelism\":1},{\"id\":\"ea632d67b7d595e5b851708ae9ad79d6\",\"parallelism\":1},{\"id\":\"ddb598ad156ed281023ba4eebbe487e3\",\"parallelism\":1},{\"id\":\"bc764cd8ddf7a0cff126f51c16239658\",\"parallelism\":1}]}' 约束限制:  符合Json格式的字符串 取值范围: 无 默认取值: 无
    * staticEstimatorConfig  参数解释: 静态流图资源预估参数，以json的形式展示 示例: '{\"operator_list\":[{\"id\":\"0a448493b4782967b150582570326227\",\"parallelism\":1},{\"id\":\"6d2677a0ecc3fd8df0b72ec675edf8f4\",\"parallelism\":1},{\"id\":\"ea632d67b7d595e5b851708ae9ad79d6\",\"parallelism\":1},{\"id\":\"ddb598ad156ed281023ba4eebbe487e3\",\"parallelism\":1},{\"id\":\"bc764cd8ddf7a0cff126f51c16239658\",\"parallelism\":1}]}' 约束限制:  符合Json格式的字符串 取值范围: 无 默认取值: 无
    * realCuNumber  参数解释: 实际使用的CU数 示例: 0 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 0
    *
    * @var string[]
    */
    protected static $getters = [
            'checkpointEnabled' => 'getCheckpointEnabled',
            'checkpointMode' => 'getCheckpointMode',
            'checkpointInterval' => 'getCheckpointInterval',
            'logEnabled' => 'getLogEnabled',
            'obsBucket' => 'getObsBucket',
            'smnTopic' => 'getSmnTopic',
            'edgeGroupIds' => 'getEdgeGroupIds',
            'rootId' => 'getRootId',
            'managerCuNumber' => 'getManagerCuNumber',
            'cuNumber' => 'getCuNumber',
            'parallelNumber' => 'getParallelNumber',
            'restartWhenException' => 'getRestartWhenException',
            'idleStateRetention' => 'getIdleStateRetention',
            'udfJarUrl' => 'getUdfJarUrl',
            'dirtyDataStrategy' => 'getDirtyDataStrategy',
            'entrypoint' => 'getEntrypoint',
            'dependencyJars' => 'getDependencyJars',
            'dependencyFiles' => 'getDependencyFiles',
            'executorNumber' => 'getExecutorNumber',
            'executorCuNumber' => 'getExecutorCuNumber',
            'resumeCheckpoint' => 'getResumeCheckpoint',
            'runtimeConfig' => 'getRuntimeConfig',
            'graphEditorEnabled' => 'getGraphEditorEnabled',
            'graphEditorData' => 'getGraphEditorData',
            'resumeMaxNum' => 'getResumeMaxNum',
            'checkpointPath' => 'getCheckpointPath',
            'configUrl' => 'getConfigUrl',
            'tmCus' => 'getTmCus',
            'tmSlotNum' => 'getTmSlotNum',
            'image' => 'getImage',
            'feature' => 'getFeature',
            'flinkVersion' => 'getFlinkVersion',
            'operatorConfig' => 'getOperatorConfig',
            'staticEstimatorConfig' => 'getStaticEstimatorConfig',
            'realCuNumber' => 'getRealCuNumber'
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
    const CHECKPOINT_MODE_EXACTLY_ONCE = 'exactly_once';
    const CHECKPOINT_MODE_AT_LEAST_ONCE = 'at_least_once';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCheckpointModeAllowableValues()
    {
        return [
            self::CHECKPOINT_MODE_EXACTLY_ONCE,
            self::CHECKPOINT_MODE_AT_LEAST_ONCE,
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
        $this->container['checkpointEnabled'] = isset($data['checkpointEnabled']) ? $data['checkpointEnabled'] : null;
        $this->container['checkpointMode'] = isset($data['checkpointMode']) ? $data['checkpointMode'] : null;
        $this->container['checkpointInterval'] = isset($data['checkpointInterval']) ? $data['checkpointInterval'] : null;
        $this->container['logEnabled'] = isset($data['logEnabled']) ? $data['logEnabled'] : null;
        $this->container['obsBucket'] = isset($data['obsBucket']) ? $data['obsBucket'] : null;
        $this->container['smnTopic'] = isset($data['smnTopic']) ? $data['smnTopic'] : null;
        $this->container['edgeGroupIds'] = isset($data['edgeGroupIds']) ? $data['edgeGroupIds'] : null;
        $this->container['rootId'] = isset($data['rootId']) ? $data['rootId'] : null;
        $this->container['managerCuNumber'] = isset($data['managerCuNumber']) ? $data['managerCuNumber'] : null;
        $this->container['cuNumber'] = isset($data['cuNumber']) ? $data['cuNumber'] : null;
        $this->container['parallelNumber'] = isset($data['parallelNumber']) ? $data['parallelNumber'] : null;
        $this->container['restartWhenException'] = isset($data['restartWhenException']) ? $data['restartWhenException'] : null;
        $this->container['idleStateRetention'] = isset($data['idleStateRetention']) ? $data['idleStateRetention'] : null;
        $this->container['udfJarUrl'] = isset($data['udfJarUrl']) ? $data['udfJarUrl'] : null;
        $this->container['dirtyDataStrategy'] = isset($data['dirtyDataStrategy']) ? $data['dirtyDataStrategy'] : null;
        $this->container['entrypoint'] = isset($data['entrypoint']) ? $data['entrypoint'] : null;
        $this->container['dependencyJars'] = isset($data['dependencyJars']) ? $data['dependencyJars'] : null;
        $this->container['dependencyFiles'] = isset($data['dependencyFiles']) ? $data['dependencyFiles'] : null;
        $this->container['executorNumber'] = isset($data['executorNumber']) ? $data['executorNumber'] : null;
        $this->container['executorCuNumber'] = isset($data['executorCuNumber']) ? $data['executorCuNumber'] : null;
        $this->container['resumeCheckpoint'] = isset($data['resumeCheckpoint']) ? $data['resumeCheckpoint'] : null;
        $this->container['runtimeConfig'] = isset($data['runtimeConfig']) ? $data['runtimeConfig'] : null;
        $this->container['graphEditorEnabled'] = isset($data['graphEditorEnabled']) ? $data['graphEditorEnabled'] : null;
        $this->container['graphEditorData'] = isset($data['graphEditorData']) ? $data['graphEditorData'] : null;
        $this->container['resumeMaxNum'] = isset($data['resumeMaxNum']) ? $data['resumeMaxNum'] : null;
        $this->container['checkpointPath'] = isset($data['checkpointPath']) ? $data['checkpointPath'] : null;
        $this->container['configUrl'] = isset($data['configUrl']) ? $data['configUrl'] : null;
        $this->container['tmCus'] = isset($data['tmCus']) ? $data['tmCus'] : null;
        $this->container['tmSlotNum'] = isset($data['tmSlotNum']) ? $data['tmSlotNum'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['feature'] = isset($data['feature']) ? $data['feature'] : null;
        $this->container['flinkVersion'] = isset($data['flinkVersion']) ? $data['flinkVersion'] : null;
        $this->container['operatorConfig'] = isset($data['operatorConfig']) ? $data['operatorConfig'] : null;
        $this->container['staticEstimatorConfig'] = isset($data['staticEstimatorConfig']) ? $data['staticEstimatorConfig'] : null;
        $this->container['realCuNumber'] = isset($data['realCuNumber']) ? $data['realCuNumber'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getCheckpointModeAllowableValues();
                if (!is_null($this->container['checkpointMode']) && !in_array($this->container['checkpointMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'checkpointMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['cuNumber']) && ($this->container['cuNumber'] > 400)) {
                $invalidProperties[] = "invalid value for 'cuNumber', must be smaller than or equal to 400.";
            }
            if (!is_null($this->container['cuNumber']) && ($this->container['cuNumber'] < 2)) {
                $invalidProperties[] = "invalid value for 'cuNumber', must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['parallelNumber']) && ($this->container['parallelNumber'] > 2000)) {
                $invalidProperties[] = "invalid value for 'parallelNumber', must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['parallelNumber']) && ($this->container['parallelNumber'] < 1)) {
                $invalidProperties[] = "invalid value for 'parallelNumber', must be bigger than or equal to 1.";
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
    * Gets checkpointEnabled
    *  参数解释:  是否开启作业自动快照功能 示例: false 约束限制:  无 取值范围: true,false 默认取值: false
    *
    * @return bool|null
    */
    public function getCheckpointEnabled()
    {
        return $this->container['checkpointEnabled'];
    }

    /**
    * Sets checkpointEnabled
    *
    * @param bool|null $checkpointEnabled 参数解释:  是否开启作业自动快照功能 示例: false 约束限制:  无 取值范围: true,false 默认取值: false
    *
    * @return $this
    */
    public function setCheckpointEnabled($checkpointEnabled)
    {
        $this->container['checkpointEnabled'] = $checkpointEnabled;
        return $this;
    }

    /**
    * Gets checkpointMode
    *  参数解释:  快照模式 示例: exactly_once 约束限制:  无 取值范围: exactly_once（数据只被消费一次） at_least_once（数据至少被消费一次） 默认取值: 无
    *
    * @return string|null
    */
    public function getCheckpointMode()
    {
        return $this->container['checkpointMode'];
    }

    /**
    * Sets checkpointMode
    *
    * @param string|null $checkpointMode 参数解释:  快照模式 示例: exactly_once 约束限制:  无 取值范围: exactly_once（数据只被消费一次） at_least_once（数据至少被消费一次） 默认取值: 无
    *
    * @return $this
    */
    public function setCheckpointMode($checkpointMode)
    {
        $this->container['checkpointMode'] = $checkpointMode;
        return $this;
    }

    /**
    * Gets checkpointInterval
    *  参数解释:  快照时间间隔, 单位为秒 示例: 10 约束限制:  无 取值范围: 无 默认取值: 10
    *
    * @return int|null
    */
    public function getCheckpointInterval()
    {
        return $this->container['checkpointInterval'];
    }

    /**
    * Sets checkpointInterval
    *
    * @param int|null $checkpointInterval 参数解释:  快照时间间隔, 单位为秒 示例: 10 约束限制:  无 取值范围: 无 默认取值: 10
    *
    * @return $this
    */
    public function setCheckpointInterval($checkpointInterval)
    {
        $this->container['checkpointInterval'] = $checkpointInterval;
        return $this;
    }

    /**
    * Gets logEnabled
    *  参数解释:  是否启用日志存储 示例: false 约束限制:  无 取值范围: true,false 默认取值: false
    *
    * @return bool|null
    */
    public function getLogEnabled()
    {
        return $this->container['logEnabled'];
    }

    /**
    * Sets logEnabled
    *
    * @param bool|null $logEnabled 参数解释:  是否启用日志存储 示例: false 约束限制:  无 取值范围: true,false 默认取值: false
    *
    * @return $this
    */
    public function setLogEnabled($logEnabled)
    {
        $this->container['logEnabled'] = $logEnabled;
        return $this;
    }

    /**
    * Gets obsBucket
    *  参数解释:  OBS桶名 示例: obs-demo 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return string|null
    */
    public function getObsBucket()
    {
        return $this->container['obsBucket'];
    }

    /**
    * Sets obsBucket
    *
    * @param string|null $obsBucket 参数解释:  OBS桶名 示例: obs-demo 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setObsBucket($obsBucket)
    {
        $this->container['obsBucket'] = $obsBucket;
        return $this;
    }

    /**
    * Gets smnTopic
    *  参数解释:  当作业异常时，向该SMN主题推送告警信息 示例: cs_job_exception 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return string|null
    */
    public function getSmnTopic()
    {
        return $this->container['smnTopic'];
    }

    /**
    * Sets smnTopic
    *
    * @param string|null $smnTopic 参数解释:  当作业异常时，向该SMN主题推送告警信息 示例: cs_job_exception 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setSmnTopic($smnTopic)
    {
        $this->container['smnTopic'] = $smnTopic;
        return $this;
    }

    /**
    * Gets edgeGroupIds
    *  参数解释:  边缘计算组ID列表 示例: 62de1e1c-066e-48a8-a79d-f461a31b2ee1,2eb00f85-99f2-4144-bcb7-d39ff47f9002 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return string[]|null
    */
    public function getEdgeGroupIds()
    {
        return $this->container['edgeGroupIds'];
    }

    /**
    * Sets edgeGroupIds
    *
    * @param string[]|null $edgeGroupIds 参数解释:  边缘计算组ID列表 示例: 62de1e1c-066e-48a8-a79d-f461a31b2ee1,2eb00f85-99f2-4144-bcb7-d39ff47f9002 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setEdgeGroupIds($edgeGroupIds)
    {
        $this->container['edgeGroupIds'] = $edgeGroupIds;
        return $this;
    }

    /**
    * Gets rootId
    *  参数解释:  父作业ID 示例: 11 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return int|null
    */
    public function getRootId()
    {
        return $this->container['rootId'];
    }

    /**
    * Sets rootId
    *
    * @param int|null $rootId 参数解释:  父作业ID 示例: 11 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setRootId($rootId)
    {
        $this->container['rootId'] = $rootId;
        return $this;
    }

    /**
    * Gets managerCuNumber
    *  参数解释:  管理单元CU数 示例: 1 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    *
    * @return int|null
    */
    public function getManagerCuNumber()
    {
        return $this->container['managerCuNumber'];
    }

    /**
    * Sets managerCuNumber
    *
    * @param int|null $managerCuNumber 参数解释:  管理单元CU数 示例: 1 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    *
    * @return $this
    */
    public function setManagerCuNumber($managerCuNumber)
    {
        $this->container['managerCuNumber'] = $managerCuNumber;
        return $this;
    }

    /**
    * Gets cuNumber
    *  参数解释:  用户为作业选择的CU数量 示例: 2 约束限制:  无 取值范围: [2,400] 默认取值: 2
    *
    * @return int|null
    */
    public function getCuNumber()
    {
        return $this->container['cuNumber'];
    }

    /**
    * Sets cuNumber
    *
    * @param int|null $cuNumber 参数解释:  用户为作业选择的CU数量 示例: 2 约束限制:  无 取值范围: [2,400] 默认取值: 2
    *
    * @return $this
    */
    public function setCuNumber($cuNumber)
    {
        $this->container['cuNumber'] = $cuNumber;
        return $this;
    }

    /**
    * Gets parallelNumber
    *  参数解释:  用户设置的作业并行数， “show_detail”为“true”时独有 示例: 1 约束限制:  无 取值范围: [1,2000] 默认取值: 1
    *
    * @return int|null
    */
    public function getParallelNumber()
    {
        return $this->container['parallelNumber'];
    }

    /**
    * Sets parallelNumber
    *
    * @param int|null $parallelNumber 参数解释:  用户设置的作业并行数， “show_detail”为“true”时独有 示例: 1 约束限制:  无 取值范围: [1,2000] 默认取值: 1
    *
    * @return $this
    */
    public function setParallelNumber($parallelNumber)
    {
        $this->container['parallelNumber'] = $parallelNumber;
        return $this;
    }

    /**
    * Gets restartWhenException
    *  参数解释:  是否开启异常重启功能 示例: false 约束限制:  无 取值范围: true,false 默认取值: 无
    *
    * @return bool|null
    */
    public function getRestartWhenException()
    {
        return $this->container['restartWhenException'];
    }

    /**
    * Sets restartWhenException
    *
    * @param bool|null $restartWhenException 参数解释:  是否开启异常重启功能 示例: false 约束限制:  无 取值范围: true,false 默认取值: 无
    *
    * @return $this
    */
    public function setRestartWhenException($restartWhenException)
    {
        $this->container['restartWhenException'] = $restartWhenException;
        return $this;
    }

    /**
    * Gets idleStateRetention
    *  参数解释:  空闲状态过期周期 示例: 3600 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    *
    * @return int|null
    */
    public function getIdleStateRetention()
    {
        return $this->container['idleStateRetention'];
    }

    /**
    * Sets idleStateRetention
    *
    * @param int|null $idleStateRetention 参数解释:  空闲状态过期周期 示例: 3600 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    *
    * @return $this
    */
    public function setIdleStateRetention($idleStateRetention)
    {
        $this->container['idleStateRetention'] = $idleStateRetention;
        return $this;
    }

    /**
    * Gets udfJarUrl
    *  参数解释:  用户已上传到DLI资源管理系统的资源包名，用户sql作业的udf jar通过该参数传入 示例: obs://cs-append/jar/udf/flink-1.13-demo-1.0-udf.jar obs://onlyci-7/flink/udx.jar 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return string|null
    */
    public function getUdfJarUrl()
    {
        return $this->container['udfJarUrl'];
    }

    /**
    * Sets udfJarUrl
    *
    * @param string|null $udfJarUrl 参数解释:  用户已上传到DLI资源管理系统的资源包名，用户sql作业的udf jar通过该参数传入 示例: obs://cs-append/jar/udf/flink-1.13-demo-1.0-udf.jar obs://onlyci-7/flink/udx.jar 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setUdfJarUrl($udfJarUrl)
    {
        $this->container['udfJarUrl'] = $udfJarUrl;
        return $this;
    }

    /**
    * Gets dirtyDataStrategy
    *  参数解释:  作业脏数据策略 示例: 0 约束限制:  无 取值范围: 0（忽略） 1（抛出异常） 2:obsDir（保存，obsDir表示脏数据存储路径） 默认取值: 无
    *
    * @return string|null
    */
    public function getDirtyDataStrategy()
    {
        return $this->container['dirtyDataStrategy'];
    }

    /**
    * Sets dirtyDataStrategy
    *
    * @param string|null $dirtyDataStrategy 参数解释:  作业脏数据策略 示例: 0 约束限制:  无 取值范围: 0（忽略） 1（抛出异常） 2:obsDir（保存，obsDir表示脏数据存储路径） 默认取值: 无
    *
    * @return $this
    */
    public function setDirtyDataStrategy($dirtyDataStrategy)
    {
        $this->container['dirtyDataStrategy'] = $dirtyDataStrategy;
        return $this;
    }

    /**
    * Gets entrypoint
    *  参数解释:  用户已上传到DLI资源管理系统的资源包名，用户自定义作业主类所在的jar包 示例: obs://test/demo/WindowJoin.jar 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return string|null
    */
    public function getEntrypoint()
    {
        return $this->container['entrypoint'];
    }

    /**
    * Sets entrypoint
    *
    * @param string|null $entrypoint 参数解释:  用户已上传到DLI资源管理系统的资源包名，用户自定义作业主类所在的jar包 示例: obs://test/demo/WindowJoin.jar 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setEntrypoint($entrypoint)
    {
        $this->container['entrypoint'] = $entrypoint;
        return $this;
    }

    /**
    * Gets dependencyJars
    *  参数解释:  用户已上传到DLI资源管理系统的资源包名，用户自定义作业的其他依赖包 示例: [\"zsdas/wordcount.jar\",\"ygj/flink-dis-to-kafka-v5.jar\"] 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return string[]|null
    */
    public function getDependencyJars()
    {
        return $this->container['dependencyJars'];
    }

    /**
    * Sets dependencyJars
    *
    * @param string[]|null $dependencyJars 参数解释:  用户已上传到DLI资源管理系统的资源包名，用户自定义作业的其他依赖包 示例: [\"zsdas/wordcount.jar\",\"ygj/flink-dis-to-kafka-v5.jar\"] 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setDependencyJars($dependencyJars)
    {
        $this->container['dependencyJars'] = $dependencyJars;
        return $this;
    }

    /**
    * Gets dependencyFiles
    *  参数解释:  用户已上传到DLI资源管理系统的资源包名，用户自定义作业的依赖文件 示例: [\"zsdas/wordcount.jar\",\"ygj/flink-dis-to-kafka-v5.jar\"] 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return string[]|null
    */
    public function getDependencyFiles()
    {
        return $this->container['dependencyFiles'];
    }

    /**
    * Sets dependencyFiles
    *
    * @param string[]|null $dependencyFiles 参数解释:  用户已上传到DLI资源管理系统的资源包名，用户自定义作业的依赖文件 示例: [\"zsdas/wordcount.jar\",\"ygj/flink-dis-to-kafka-v5.jar\"] 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setDependencyFiles($dependencyFiles)
    {
        $this->container['dependencyFiles'] = $dependencyFiles;
        return $this;
    }

    /**
    * Gets executorNumber
    *  参数解释:  作业使用计算节点个数 示例: 0 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    *
    * @return int|null
    */
    public function getExecutorNumber()
    {
        return $this->container['executorNumber'];
    }

    /**
    * Sets executorNumber
    *
    * @param int|null $executorNumber 参数解释:  作业使用计算节点个数 示例: 0 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    *
    * @return $this
    */
    public function setExecutorNumber($executorNumber)
    {
        $this->container['executorNumber'] = $executorNumber;
        return $this;
    }

    /**
    * Gets executorCuNumber
    *  参数解释:  计算节点cu数 示例: 0 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    *
    * @return int|null
    */
    public function getExecutorCuNumber()
    {
        return $this->container['executorCuNumber'];
    }

    /**
    * Sets executorCuNumber
    *
    * @param int|null $executorCuNumber 参数解释:  计算节点cu数 示例: 0 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    *
    * @return $this
    */
    public function setExecutorCuNumber($executorCuNumber)
    {
        $this->container['executorCuNumber'] = $executorCuNumber;
        return $this;
    }

    /**
    * Gets resumeCheckpoint
    *  参数解释:  异常自动重启时，是否从最新checkpoint恢复，默认false 示例: 0 约束限制:  无 取值范围: true,false 默认取值: false
    *
    * @return bool|null
    */
    public function getResumeCheckpoint()
    {
        return $this->container['resumeCheckpoint'];
    }

    /**
    * Sets resumeCheckpoint
    *
    * @param bool|null $resumeCheckpoint 参数解释:  异常自动重启时，是否从最新checkpoint恢复，默认false 示例: 0 约束限制:  无 取值范围: true,false 默认取值: false
    *
    * @return $this
    */
    public function setResumeCheckpoint($resumeCheckpoint)
    {
        $this->container['resumeCheckpoint'] = $resumeCheckpoint;
        return $this;
    }

    /**
    * Gets runtimeConfig
    *  参数解释: Flink作业运行时自定义优化参数 示例: [{\\\"key\\\":\\\"high-availability\\\",\\\"value\\\":\\\"org.apache.flink.kubernetes.highavailability.KubernetesHaServicesFactory\\\" },{ \\\"key\\\":\\\"kubernetes.jobmanager.replicas\\\",\\\"value\\\":\\\"2\\\" },{ \\\"key\\\":\\\"high-availability.storageDir\\\",\\\"value\\\":\\\"obs://fz-test/test\\\"}] 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return string|null
    */
    public function getRuntimeConfig()
    {
        return $this->container['runtimeConfig'];
    }

    /**
    * Sets runtimeConfig
    *
    * @param string|null $runtimeConfig 参数解释: Flink作业运行时自定义优化参数 示例: [{\\\"key\\\":\\\"high-availability\\\",\\\"value\\\":\\\"org.apache.flink.kubernetes.highavailability.KubernetesHaServicesFactory\\\" },{ \\\"key\\\":\\\"kubernetes.jobmanager.replicas\\\",\\\"value\\\":\\\"2\\\" },{ \\\"key\\\":\\\"high-availability.storageDir\\\",\\\"value\\\":\\\"obs://fz-test/test\\\"}] 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setRuntimeConfig($runtimeConfig)
    {
        $this->container['runtimeConfig'] = $runtimeConfig;
        return $this;
    }

    /**
    * Gets graphEditorEnabled
    *  参数解释: 流图编辑开关 示例: false 约束限制:  无 取值范围: 无 默认取值: false
    *
    * @return bool|null
    */
    public function getGraphEditorEnabled()
    {
        return $this->container['graphEditorEnabled'];
    }

    /**
    * Sets graphEditorEnabled
    *
    * @param bool|null $graphEditorEnabled 参数解释: 流图编辑开关 示例: false 约束限制:  无 取值范围: 无 默认取值: false
    *
    * @return $this
    */
    public function setGraphEditorEnabled($graphEditorEnabled)
    {
        $this->container['graphEditorEnabled'] = $graphEditorEnabled;
        return $this;
    }

    /**
    * Gets graphEditorData
    *  参数解释: 流图编辑数据 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return string|null
    */
    public function getGraphEditorData()
    {
        return $this->container['graphEditorData'];
    }

    /**
    * Sets graphEditorData
    *
    * @param string|null $graphEditorData 参数解释: 流图编辑数据 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setGraphEditorData($graphEditorData)
    {
        $this->container['graphEditorData'] = $graphEditorData;
        return $this;
    }

    /**
    * Gets resumeMaxNum
    *  参数解释: 异常重试最大次数。-1代表无限 示例: -1 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return int|null
    */
    public function getResumeMaxNum()
    {
        return $this->container['resumeMaxNum'];
    }

    /**
    * Sets resumeMaxNum
    *
    * @param int|null $resumeMaxNum 参数解释: 异常重试最大次数。-1代表无限 示例: -1 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setResumeMaxNum($resumeMaxNum)
    {
        $this->container['resumeMaxNum'] = $resumeMaxNum;
        return $this;
    }

    /**
    * Gets checkpointPath
    *  参数解释: 检查点保存路径 示例: obs://cwk/checkpoint/ 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return string|null
    */
    public function getCheckpointPath()
    {
        return $this->container['checkpointPath'];
    }

    /**
    * Sets checkpointPath
    *
    * @param string|null $checkpointPath 参数解释: 检查点保存路径 示例: obs://cwk/checkpoint/ 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setCheckpointPath($checkpointPath)
    {
        $this->container['checkpointPath'] = $checkpointPath;
        return $this;
    }

    /**
    * Gets configUrl
    *  参数解释: 用户上传的config包OBS路径。 示例: obs://bucket-62099355b894428e8916573ae635f1f9/di-flink/lib/client.jks,obs://bucket-62099355b894428e8916573ae635f1f9/di-flink/lib/client.jks 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return string|null
    */
    public function getConfigUrl()
    {
        return $this->container['configUrl'];
    }

    /**
    * Sets configUrl
    *
    * @param string|null $configUrl 参数解释: 用户上传的config包OBS路径。 示例: obs://bucket-62099355b894428e8916573ae635f1f9/di-flink/lib/client.jks,obs://bucket-62099355b894428e8916573ae635f1f9/di-flink/lib/client.jks 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setConfigUrl($configUrl)
    {
        $this->container['configUrl'] = $configUrl;
        return $this;
    }

    /**
    * Gets tmCus
    *  参数解释: 单TM所占CU数 示例: 1 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    *
    * @return int|null
    */
    public function getTmCus()
    {
        return $this->container['tmCus'];
    }

    /**
    * Sets tmCus
    *
    * @param int|null $tmCus 参数解释: 单TM所占CU数 示例: 1 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    *
    * @return $this
    */
    public function setTmCus($tmCus)
    {
        $this->container['tmCus'] = $tmCus;
        return $this;
    }

    /**
    * Gets tmSlotNum
    *  参数解释: 单TM Slot数 示例: 1 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    *
    * @return int|null
    */
    public function getTmSlotNum()
    {
        return $this->container['tmSlotNum'];
    }

    /**
    * Sets tmSlotNum
    *
    * @param int|null $tmSlotNum 参数解释: 单TM Slot数 示例: 1 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    *
    * @return $this
    */
    public function setTmSlotNum($tmSlotNum)
    {
        $this->container['tmSlotNum'] = $tmSlotNum;
        return $this;
    }

    /**
    * Gets image
    *  参数解释: 自定义镜像。格式为：组织名/镜像名:镜像版本。当用户设置“feature”为“custom”时，该参数生效。用户可通过与“feature”参数配合使用，指定作业运行使用自定义的Flink镜像 示例: dli/spark:2.4.8 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return string|null
    */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
    * Sets image
    *
    * @param string|null $image 参数解释: 自定义镜像。格式为：组织名/镜像名:镜像版本。当用户设置“feature”为“custom”时，该参数生效。用户可通过与“feature”参数配合使用，指定作业运行使用自定义的Flink镜像 示例: dli/spark:2.4.8 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setImage($image)
    {
        $this->container['image'] = $image;
        return $this;
    }

    /**
    * Gets feature
    *  参数解释: 自定义作业特性。表示用户作业使用的Flink镜像类型。basic：表示使用DLI提供的基础Flink镜像。custom：表示使用用户自定义的Flink镜像 示例: basic 约束限制:  无 取值范围: basic：表示使用DLI提供的基础Flink镜像 custom：表示使用用户自定义的Flink镜像 默认取值: 无
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
    * @param string|null $feature 参数解释: 自定义作业特性。表示用户作业使用的Flink镜像类型。basic：表示使用DLI提供的基础Flink镜像。custom：表示使用用户自定义的Flink镜像 示例: basic 约束限制:  无 取值范围: basic：表示使用DLI提供的基础Flink镜像 custom：表示使用用户自定义的Flink镜像 默认取值: 无
    *
    * @return $this
    */
    public function setFeature($feature)
    {
        $this->container['feature'] = $feature;
        return $this;
    }

    /**
    * Gets flinkVersion
    *  参数解释: Flink版本。当用户设置“feature”为“basic”时，该参数生效。用户可通过与“feature”参数配合使用，指定作业运行使用的DLI基础Flink镜像的版本 示例: 1.17 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return string|null
    */
    public function getFlinkVersion()
    {
        return $this->container['flinkVersion'];
    }

    /**
    * Sets flinkVersion
    *
    * @param string|null $flinkVersion 参数解释: Flink版本。当用户设置“feature”为“basic”时，该参数生效。用户可通过与“feature”参数配合使用，指定作业运行使用的DLI基础Flink镜像的版本 示例: 1.17 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setFlinkVersion($flinkVersion)
    {
        $this->container['flinkVersion'] = $flinkVersion;
        return $this;
    }

    /**
    * Gets operatorConfig
    *  参数解释: 各算子并行度参数，以json的形式展示各算子id和并行度 示例: '{\"operator_list\":[{\"id\":\"0a448493b4782967b150582570326227\",\"parallelism\":1},{\"id\":\"6d2677a0ecc3fd8df0b72ec675edf8f4\",\"parallelism\":1},{\"id\":\"ea632d67b7d595e5b851708ae9ad79d6\",\"parallelism\":1},{\"id\":\"ddb598ad156ed281023ba4eebbe487e3\",\"parallelism\":1},{\"id\":\"bc764cd8ddf7a0cff126f51c16239658\",\"parallelism\":1}]}' 约束限制:  符合Json格式的字符串 取值范围: 无 默认取值: 无
    *
    * @return string|null
    */
    public function getOperatorConfig()
    {
        return $this->container['operatorConfig'];
    }

    /**
    * Sets operatorConfig
    *
    * @param string|null $operatorConfig 参数解释: 各算子并行度参数，以json的形式展示各算子id和并行度 示例: '{\"operator_list\":[{\"id\":\"0a448493b4782967b150582570326227\",\"parallelism\":1},{\"id\":\"6d2677a0ecc3fd8df0b72ec675edf8f4\",\"parallelism\":1},{\"id\":\"ea632d67b7d595e5b851708ae9ad79d6\",\"parallelism\":1},{\"id\":\"ddb598ad156ed281023ba4eebbe487e3\",\"parallelism\":1},{\"id\":\"bc764cd8ddf7a0cff126f51c16239658\",\"parallelism\":1}]}' 约束限制:  符合Json格式的字符串 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setOperatorConfig($operatorConfig)
    {
        $this->container['operatorConfig'] = $operatorConfig;
        return $this;
    }

    /**
    * Gets staticEstimatorConfig
    *  参数解释: 静态流图资源预估参数，以json的形式展示 示例: '{\"operator_list\":[{\"id\":\"0a448493b4782967b150582570326227\",\"parallelism\":1},{\"id\":\"6d2677a0ecc3fd8df0b72ec675edf8f4\",\"parallelism\":1},{\"id\":\"ea632d67b7d595e5b851708ae9ad79d6\",\"parallelism\":1},{\"id\":\"ddb598ad156ed281023ba4eebbe487e3\",\"parallelism\":1},{\"id\":\"bc764cd8ddf7a0cff126f51c16239658\",\"parallelism\":1}]}' 约束限制:  符合Json格式的字符串 取值范围: 无 默认取值: 无
    *
    * @return string|null
    */
    public function getStaticEstimatorConfig()
    {
        return $this->container['staticEstimatorConfig'];
    }

    /**
    * Sets staticEstimatorConfig
    *
    * @param string|null $staticEstimatorConfig 参数解释: 静态流图资源预估参数，以json的形式展示 示例: '{\"operator_list\":[{\"id\":\"0a448493b4782967b150582570326227\",\"parallelism\":1},{\"id\":\"6d2677a0ecc3fd8df0b72ec675edf8f4\",\"parallelism\":1},{\"id\":\"ea632d67b7d595e5b851708ae9ad79d6\",\"parallelism\":1},{\"id\":\"ddb598ad156ed281023ba4eebbe487e3\",\"parallelism\":1},{\"id\":\"bc764cd8ddf7a0cff126f51c16239658\",\"parallelism\":1}]}' 约束限制:  符合Json格式的字符串 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setStaticEstimatorConfig($staticEstimatorConfig)
    {
        $this->container['staticEstimatorConfig'] = $staticEstimatorConfig;
        return $this;
    }

    /**
    * Gets realCuNumber
    *  参数解释: 实际使用的CU数 示例: 0 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 0
    *
    * @return int|null
    */
    public function getRealCuNumber()
    {
        return $this->container['realCuNumber'];
    }

    /**
    * Sets realCuNumber
    *
    * @param int|null $realCuNumber 参数解释: 实际使用的CU数 示例: 0 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 0
    *
    * @return $this
    */
    public function setRealCuNumber($realCuNumber)
    {
        $this->container['realCuNumber'] = $realCuNumber;
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

