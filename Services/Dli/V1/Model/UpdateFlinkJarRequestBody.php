<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateFlinkJarRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateFlinkJarRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  作业名称。长度限制：0-57个字符。
    * desc  作业描述。长度限制：0-2048个字符。
    * queueName  队列名称。长度限制：1-128个字符。
    * cuNumber  用户为作业选择的CU数量。默认值为2。
    * managerCuNumber  用户为作业选择的管理节点CU数量，对应为flink jobmanager数量。默认为1。
    * parallelNumber  用户为作业选择的并发量。默认为1。
    * logEnabled  是否开启作业日志。 开启：true； 关闭：false； 默认：false。
    * obsBucket  当log_enabled==true时，用户授权保存日志的OBS路。
    * smnTopic  当作业异常时，向该SMN主题推送告警信息。
    * mainClass  作业入口类。
    * entrypointArgs  作业入口类参数，多个参数之间空格分隔。
    * restartWhenException  是否开启异常重启功能，默认值为“false”。
    * entrypoint  用户已上传到DLI资源管理系统的资源包名，用户自定义作业主类所在的jar包。
    * dependencyJars  用户已上传到DLI资源管理系统的资源包名，用户自定义作业的其他依赖包。示例[Group/test.jar,myGroup/test1.jar]
    * dependencyFiles  用户已上传到DLI资源管理系统的资源包名，用户自定义作业的依赖文件。
    * tmCus  每个taskmanager的CU数，默认值为“1”。
    * tmSlotNum  每个taskmanager的slot数，默认值为“(parallel_number*tm_cus)/(cu_number-manager_cu_number)”。
    * feature  作业特性。表示用户作业使用的Flink镜像类型。basic：表示使用DLI提供的基础Flink镜像。custom：表示使用用户自定义的Flink镜像。
    * flinkVersion  Flink版本。当用户设置“feature”为“basic”时，该参数生效。用户可通过与“feature”参数配合使用，指定作业运行使用的DLI基础Flink镜像的版本。
    * image  自定义镜像。格式为：组织名/镜像名:镜像版本。当用户设置“feature”为“custom”时，该参数生效。用户可通过与“feature”参数配合使用，指定作业运行使用自定义的Flink镜像。关于如何使用自定义镜像，请参考《数据湖探索用户指南》。
    * resumeCheckpoint  异常重启是否从checkpoint恢复。
    * resumeMaxNum  异常重试最大次数，单位：次/小时。取值范围：-1或大于0。默认值为“-1”，表示无限次数。
    * checkpointPath  用户Jar中checkpoint的储存地址，不同作业路径需要保持不同。
    * runtimeConfig  Flink作业运行时自定义优化参数。
    * jobType  作业类型。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'desc' => 'string',
            'queueName' => 'string',
            'cuNumber' => 'int',
            'managerCuNumber' => 'int',
            'parallelNumber' => 'int',
            'logEnabled' => 'bool',
            'obsBucket' => 'string',
            'smnTopic' => 'string',
            'mainClass' => 'string',
            'entrypointArgs' => 'string',
            'restartWhenException' => 'bool',
            'entrypoint' => 'string',
            'dependencyJars' => 'string[]',
            'dependencyFiles' => 'string[]',
            'tmCus' => 'int',
            'tmSlotNum' => 'int',
            'feature' => 'string',
            'flinkVersion' => 'string',
            'image' => 'string',
            'resumeCheckpoint' => 'bool',
            'resumeMaxNum' => 'int',
            'checkpointPath' => 'string',
            'runtimeConfig' => 'string',
            'jobType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  作业名称。长度限制：0-57个字符。
    * desc  作业描述。长度限制：0-2048个字符。
    * queueName  队列名称。长度限制：1-128个字符。
    * cuNumber  用户为作业选择的CU数量。默认值为2。
    * managerCuNumber  用户为作业选择的管理节点CU数量，对应为flink jobmanager数量。默认为1。
    * parallelNumber  用户为作业选择的并发量。默认为1。
    * logEnabled  是否开启作业日志。 开启：true； 关闭：false； 默认：false。
    * obsBucket  当log_enabled==true时，用户授权保存日志的OBS路。
    * smnTopic  当作业异常时，向该SMN主题推送告警信息。
    * mainClass  作业入口类。
    * entrypointArgs  作业入口类参数，多个参数之间空格分隔。
    * restartWhenException  是否开启异常重启功能，默认值为“false”。
    * entrypoint  用户已上传到DLI资源管理系统的资源包名，用户自定义作业主类所在的jar包。
    * dependencyJars  用户已上传到DLI资源管理系统的资源包名，用户自定义作业的其他依赖包。示例[Group/test.jar,myGroup/test1.jar]
    * dependencyFiles  用户已上传到DLI资源管理系统的资源包名，用户自定义作业的依赖文件。
    * tmCus  每个taskmanager的CU数，默认值为“1”。
    * tmSlotNum  每个taskmanager的slot数，默认值为“(parallel_number*tm_cus)/(cu_number-manager_cu_number)”。
    * feature  作业特性。表示用户作业使用的Flink镜像类型。basic：表示使用DLI提供的基础Flink镜像。custom：表示使用用户自定义的Flink镜像。
    * flinkVersion  Flink版本。当用户设置“feature”为“basic”时，该参数生效。用户可通过与“feature”参数配合使用，指定作业运行使用的DLI基础Flink镜像的版本。
    * image  自定义镜像。格式为：组织名/镜像名:镜像版本。当用户设置“feature”为“custom”时，该参数生效。用户可通过与“feature”参数配合使用，指定作业运行使用自定义的Flink镜像。关于如何使用自定义镜像，请参考《数据湖探索用户指南》。
    * resumeCheckpoint  异常重启是否从checkpoint恢复。
    * resumeMaxNum  异常重试最大次数，单位：次/小时。取值范围：-1或大于0。默认值为“-1”，表示无限次数。
    * checkpointPath  用户Jar中checkpoint的储存地址，不同作业路径需要保持不同。
    * runtimeConfig  Flink作业运行时自定义优化参数。
    * jobType  作业类型。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'desc' => null,
        'queueName' => null,
        'cuNumber' => 'int32',
        'managerCuNumber' => 'int32',
        'parallelNumber' => 'int32',
        'logEnabled' => null,
        'obsBucket' => null,
        'smnTopic' => null,
        'mainClass' => null,
        'entrypointArgs' => null,
        'restartWhenException' => null,
        'entrypoint' => null,
        'dependencyJars' => null,
        'dependencyFiles' => null,
        'tmCus' => 'int32',
        'tmSlotNum' => 'int32',
        'feature' => null,
        'flinkVersion' => null,
        'image' => null,
        'resumeCheckpoint' => null,
        'resumeMaxNum' => 'int32',
        'checkpointPath' => null,
        'runtimeConfig' => null,
        'jobType' => null
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
    * name  作业名称。长度限制：0-57个字符。
    * desc  作业描述。长度限制：0-2048个字符。
    * queueName  队列名称。长度限制：1-128个字符。
    * cuNumber  用户为作业选择的CU数量。默认值为2。
    * managerCuNumber  用户为作业选择的管理节点CU数量，对应为flink jobmanager数量。默认为1。
    * parallelNumber  用户为作业选择的并发量。默认为1。
    * logEnabled  是否开启作业日志。 开启：true； 关闭：false； 默认：false。
    * obsBucket  当log_enabled==true时，用户授权保存日志的OBS路。
    * smnTopic  当作业异常时，向该SMN主题推送告警信息。
    * mainClass  作业入口类。
    * entrypointArgs  作业入口类参数，多个参数之间空格分隔。
    * restartWhenException  是否开启异常重启功能，默认值为“false”。
    * entrypoint  用户已上传到DLI资源管理系统的资源包名，用户自定义作业主类所在的jar包。
    * dependencyJars  用户已上传到DLI资源管理系统的资源包名，用户自定义作业的其他依赖包。示例[Group/test.jar,myGroup/test1.jar]
    * dependencyFiles  用户已上传到DLI资源管理系统的资源包名，用户自定义作业的依赖文件。
    * tmCus  每个taskmanager的CU数，默认值为“1”。
    * tmSlotNum  每个taskmanager的slot数，默认值为“(parallel_number*tm_cus)/(cu_number-manager_cu_number)”。
    * feature  作业特性。表示用户作业使用的Flink镜像类型。basic：表示使用DLI提供的基础Flink镜像。custom：表示使用用户自定义的Flink镜像。
    * flinkVersion  Flink版本。当用户设置“feature”为“basic”时，该参数生效。用户可通过与“feature”参数配合使用，指定作业运行使用的DLI基础Flink镜像的版本。
    * image  自定义镜像。格式为：组织名/镜像名:镜像版本。当用户设置“feature”为“custom”时，该参数生效。用户可通过与“feature”参数配合使用，指定作业运行使用自定义的Flink镜像。关于如何使用自定义镜像，请参考《数据湖探索用户指南》。
    * resumeCheckpoint  异常重启是否从checkpoint恢复。
    * resumeMaxNum  异常重试最大次数，单位：次/小时。取值范围：-1或大于0。默认值为“-1”，表示无限次数。
    * checkpointPath  用户Jar中checkpoint的储存地址，不同作业路径需要保持不同。
    * runtimeConfig  Flink作业运行时自定义优化参数。
    * jobType  作业类型。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'desc' => 'desc',
            'queueName' => 'queue_name',
            'cuNumber' => 'cu_number',
            'managerCuNumber' => 'manager_cu_number',
            'parallelNumber' => 'parallel_number',
            'logEnabled' => 'log_enabled',
            'obsBucket' => 'obs_bucket',
            'smnTopic' => 'smn_topic',
            'mainClass' => 'main_class',
            'entrypointArgs' => 'entrypoint_args',
            'restartWhenException' => 'restart_when_exception',
            'entrypoint' => 'entrypoint',
            'dependencyJars' => 'dependency_jars',
            'dependencyFiles' => 'dependency_files',
            'tmCus' => 'tm_cus',
            'tmSlotNum' => 'tm_slot_num',
            'feature' => 'feature',
            'flinkVersion' => 'flink_version',
            'image' => 'image',
            'resumeCheckpoint' => 'resume_checkpoint',
            'resumeMaxNum' => 'resume_max_num',
            'checkpointPath' => 'checkpoint_path',
            'runtimeConfig' => 'runtime_config',
            'jobType' => 'job_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  作业名称。长度限制：0-57个字符。
    * desc  作业描述。长度限制：0-2048个字符。
    * queueName  队列名称。长度限制：1-128个字符。
    * cuNumber  用户为作业选择的CU数量。默认值为2。
    * managerCuNumber  用户为作业选择的管理节点CU数量，对应为flink jobmanager数量。默认为1。
    * parallelNumber  用户为作业选择的并发量。默认为1。
    * logEnabled  是否开启作业日志。 开启：true； 关闭：false； 默认：false。
    * obsBucket  当log_enabled==true时，用户授权保存日志的OBS路。
    * smnTopic  当作业异常时，向该SMN主题推送告警信息。
    * mainClass  作业入口类。
    * entrypointArgs  作业入口类参数，多个参数之间空格分隔。
    * restartWhenException  是否开启异常重启功能，默认值为“false”。
    * entrypoint  用户已上传到DLI资源管理系统的资源包名，用户自定义作业主类所在的jar包。
    * dependencyJars  用户已上传到DLI资源管理系统的资源包名，用户自定义作业的其他依赖包。示例[Group/test.jar,myGroup/test1.jar]
    * dependencyFiles  用户已上传到DLI资源管理系统的资源包名，用户自定义作业的依赖文件。
    * tmCus  每个taskmanager的CU数，默认值为“1”。
    * tmSlotNum  每个taskmanager的slot数，默认值为“(parallel_number*tm_cus)/(cu_number-manager_cu_number)”。
    * feature  作业特性。表示用户作业使用的Flink镜像类型。basic：表示使用DLI提供的基础Flink镜像。custom：表示使用用户自定义的Flink镜像。
    * flinkVersion  Flink版本。当用户设置“feature”为“basic”时，该参数生效。用户可通过与“feature”参数配合使用，指定作业运行使用的DLI基础Flink镜像的版本。
    * image  自定义镜像。格式为：组织名/镜像名:镜像版本。当用户设置“feature”为“custom”时，该参数生效。用户可通过与“feature”参数配合使用，指定作业运行使用自定义的Flink镜像。关于如何使用自定义镜像，请参考《数据湖探索用户指南》。
    * resumeCheckpoint  异常重启是否从checkpoint恢复。
    * resumeMaxNum  异常重试最大次数，单位：次/小时。取值范围：-1或大于0。默认值为“-1”，表示无限次数。
    * checkpointPath  用户Jar中checkpoint的储存地址，不同作业路径需要保持不同。
    * runtimeConfig  Flink作业运行时自定义优化参数。
    * jobType  作业类型。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'desc' => 'setDesc',
            'queueName' => 'setQueueName',
            'cuNumber' => 'setCuNumber',
            'managerCuNumber' => 'setManagerCuNumber',
            'parallelNumber' => 'setParallelNumber',
            'logEnabled' => 'setLogEnabled',
            'obsBucket' => 'setObsBucket',
            'smnTopic' => 'setSmnTopic',
            'mainClass' => 'setMainClass',
            'entrypointArgs' => 'setEntrypointArgs',
            'restartWhenException' => 'setRestartWhenException',
            'entrypoint' => 'setEntrypoint',
            'dependencyJars' => 'setDependencyJars',
            'dependencyFiles' => 'setDependencyFiles',
            'tmCus' => 'setTmCus',
            'tmSlotNum' => 'setTmSlotNum',
            'feature' => 'setFeature',
            'flinkVersion' => 'setFlinkVersion',
            'image' => 'setImage',
            'resumeCheckpoint' => 'setResumeCheckpoint',
            'resumeMaxNum' => 'setResumeMaxNum',
            'checkpointPath' => 'setCheckpointPath',
            'runtimeConfig' => 'setRuntimeConfig',
            'jobType' => 'setJobType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  作业名称。长度限制：0-57个字符。
    * desc  作业描述。长度限制：0-2048个字符。
    * queueName  队列名称。长度限制：1-128个字符。
    * cuNumber  用户为作业选择的CU数量。默认值为2。
    * managerCuNumber  用户为作业选择的管理节点CU数量，对应为flink jobmanager数量。默认为1。
    * parallelNumber  用户为作业选择的并发量。默认为1。
    * logEnabled  是否开启作业日志。 开启：true； 关闭：false； 默认：false。
    * obsBucket  当log_enabled==true时，用户授权保存日志的OBS路。
    * smnTopic  当作业异常时，向该SMN主题推送告警信息。
    * mainClass  作业入口类。
    * entrypointArgs  作业入口类参数，多个参数之间空格分隔。
    * restartWhenException  是否开启异常重启功能，默认值为“false”。
    * entrypoint  用户已上传到DLI资源管理系统的资源包名，用户自定义作业主类所在的jar包。
    * dependencyJars  用户已上传到DLI资源管理系统的资源包名，用户自定义作业的其他依赖包。示例[Group/test.jar,myGroup/test1.jar]
    * dependencyFiles  用户已上传到DLI资源管理系统的资源包名，用户自定义作业的依赖文件。
    * tmCus  每个taskmanager的CU数，默认值为“1”。
    * tmSlotNum  每个taskmanager的slot数，默认值为“(parallel_number*tm_cus)/(cu_number-manager_cu_number)”。
    * feature  作业特性。表示用户作业使用的Flink镜像类型。basic：表示使用DLI提供的基础Flink镜像。custom：表示使用用户自定义的Flink镜像。
    * flinkVersion  Flink版本。当用户设置“feature”为“basic”时，该参数生效。用户可通过与“feature”参数配合使用，指定作业运行使用的DLI基础Flink镜像的版本。
    * image  自定义镜像。格式为：组织名/镜像名:镜像版本。当用户设置“feature”为“custom”时，该参数生效。用户可通过与“feature”参数配合使用，指定作业运行使用自定义的Flink镜像。关于如何使用自定义镜像，请参考《数据湖探索用户指南》。
    * resumeCheckpoint  异常重启是否从checkpoint恢复。
    * resumeMaxNum  异常重试最大次数，单位：次/小时。取值范围：-1或大于0。默认值为“-1”，表示无限次数。
    * checkpointPath  用户Jar中checkpoint的储存地址，不同作业路径需要保持不同。
    * runtimeConfig  Flink作业运行时自定义优化参数。
    * jobType  作业类型。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'desc' => 'getDesc',
            'queueName' => 'getQueueName',
            'cuNumber' => 'getCuNumber',
            'managerCuNumber' => 'getManagerCuNumber',
            'parallelNumber' => 'getParallelNumber',
            'logEnabled' => 'getLogEnabled',
            'obsBucket' => 'getObsBucket',
            'smnTopic' => 'getSmnTopic',
            'mainClass' => 'getMainClass',
            'entrypointArgs' => 'getEntrypointArgs',
            'restartWhenException' => 'getRestartWhenException',
            'entrypoint' => 'getEntrypoint',
            'dependencyJars' => 'getDependencyJars',
            'dependencyFiles' => 'getDependencyFiles',
            'tmCus' => 'getTmCus',
            'tmSlotNum' => 'getTmSlotNum',
            'feature' => 'getFeature',
            'flinkVersion' => 'getFlinkVersion',
            'image' => 'getImage',
            'resumeCheckpoint' => 'getResumeCheckpoint',
            'resumeMaxNum' => 'getResumeMaxNum',
            'checkpointPath' => 'getCheckpointPath',
            'runtimeConfig' => 'getRuntimeConfig',
            'jobType' => 'getJobType'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['desc'] = isset($data['desc']) ? $data['desc'] : null;
        $this->container['queueName'] = isset($data['queueName']) ? $data['queueName'] : null;
        $this->container['cuNumber'] = isset($data['cuNumber']) ? $data['cuNumber'] : null;
        $this->container['managerCuNumber'] = isset($data['managerCuNumber']) ? $data['managerCuNumber'] : null;
        $this->container['parallelNumber'] = isset($data['parallelNumber']) ? $data['parallelNumber'] : null;
        $this->container['logEnabled'] = isset($data['logEnabled']) ? $data['logEnabled'] : null;
        $this->container['obsBucket'] = isset($data['obsBucket']) ? $data['obsBucket'] : null;
        $this->container['smnTopic'] = isset($data['smnTopic']) ? $data['smnTopic'] : null;
        $this->container['mainClass'] = isset($data['mainClass']) ? $data['mainClass'] : null;
        $this->container['entrypointArgs'] = isset($data['entrypointArgs']) ? $data['entrypointArgs'] : null;
        $this->container['restartWhenException'] = isset($data['restartWhenException']) ? $data['restartWhenException'] : null;
        $this->container['entrypoint'] = isset($data['entrypoint']) ? $data['entrypoint'] : null;
        $this->container['dependencyJars'] = isset($data['dependencyJars']) ? $data['dependencyJars'] : null;
        $this->container['dependencyFiles'] = isset($data['dependencyFiles']) ? $data['dependencyFiles'] : null;
        $this->container['tmCus'] = isset($data['tmCus']) ? $data['tmCus'] : null;
        $this->container['tmSlotNum'] = isset($data['tmSlotNum']) ? $data['tmSlotNum'] : null;
        $this->container['feature'] = isset($data['feature']) ? $data['feature'] : null;
        $this->container['flinkVersion'] = isset($data['flinkVersion']) ? $data['flinkVersion'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['resumeCheckpoint'] = isset($data['resumeCheckpoint']) ? $data['resumeCheckpoint'] : null;
        $this->container['resumeMaxNum'] = isset($data['resumeMaxNum']) ? $data['resumeMaxNum'] : null;
        $this->container['checkpointPath'] = isset($data['checkpointPath']) ? $data['checkpointPath'] : null;
        $this->container['runtimeConfig'] = isset($data['runtimeConfig']) ? $data['runtimeConfig'] : null;
        $this->container['jobType'] = isset($data['jobType']) ? $data['jobType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 57)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 57.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['desc']) && (mb_strlen($this->container['desc']) > 2048)) {
                $invalidProperties[] = "invalid value for 'desc', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['desc']) && (mb_strlen($this->container['desc']) < 0)) {
                $invalidProperties[] = "invalid value for 'desc', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['queueName']) && (mb_strlen($this->container['queueName']) > 128)) {
                $invalidProperties[] = "invalid value for 'queueName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['queueName']) && (mb_strlen($this->container['queueName']) < 1)) {
                $invalidProperties[] = "invalid value for 'queueName', the character length must be bigger than or equal to 1.";
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
    * Gets name
    *  作业名称。长度限制：0-57个字符。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 作业名称。长度限制：0-57个字符。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets desc
    *  作业描述。长度限制：0-2048个字符。
    *
    * @return string|null
    */
    public function getDesc()
    {
        return $this->container['desc'];
    }

    /**
    * Sets desc
    *
    * @param string|null $desc 作业描述。长度限制：0-2048个字符。
    *
    * @return $this
    */
    public function setDesc($desc)
    {
        $this->container['desc'] = $desc;
        return $this;
    }

    /**
    * Gets queueName
    *  队列名称。长度限制：1-128个字符。
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
    * @param string|null $queueName 队列名称。长度限制：1-128个字符。
    *
    * @return $this
    */
    public function setQueueName($queueName)
    {
        $this->container['queueName'] = $queueName;
        return $this;
    }

    /**
    * Gets cuNumber
    *  用户为作业选择的CU数量。默认值为2。
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
    * @param int|null $cuNumber 用户为作业选择的CU数量。默认值为2。
    *
    * @return $this
    */
    public function setCuNumber($cuNumber)
    {
        $this->container['cuNumber'] = $cuNumber;
        return $this;
    }

    /**
    * Gets managerCuNumber
    *  用户为作业选择的管理节点CU数量，对应为flink jobmanager数量。默认为1。
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
    * @param int|null $managerCuNumber 用户为作业选择的管理节点CU数量，对应为flink jobmanager数量。默认为1。
    *
    * @return $this
    */
    public function setManagerCuNumber($managerCuNumber)
    {
        $this->container['managerCuNumber'] = $managerCuNumber;
        return $this;
    }

    /**
    * Gets parallelNumber
    *  用户为作业选择的并发量。默认为1。
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
    * @param int|null $parallelNumber 用户为作业选择的并发量。默认为1。
    *
    * @return $this
    */
    public function setParallelNumber($parallelNumber)
    {
        $this->container['parallelNumber'] = $parallelNumber;
        return $this;
    }

    /**
    * Gets logEnabled
    *  是否开启作业日志。 开启：true； 关闭：false； 默认：false。
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
    * @param bool|null $logEnabled 是否开启作业日志。 开启：true； 关闭：false； 默认：false。
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
    *  当log_enabled==true时，用户授权保存日志的OBS路。
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
    * @param string|null $obsBucket 当log_enabled==true时，用户授权保存日志的OBS路。
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
    *  当作业异常时，向该SMN主题推送告警信息。
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
    * @param string|null $smnTopic 当作业异常时，向该SMN主题推送告警信息。
    *
    * @return $this
    */
    public function setSmnTopic($smnTopic)
    {
        $this->container['smnTopic'] = $smnTopic;
        return $this;
    }

    /**
    * Gets mainClass
    *  作业入口类。
    *
    * @return string|null
    */
    public function getMainClass()
    {
        return $this->container['mainClass'];
    }

    /**
    * Sets mainClass
    *
    * @param string|null $mainClass 作业入口类。
    *
    * @return $this
    */
    public function setMainClass($mainClass)
    {
        $this->container['mainClass'] = $mainClass;
        return $this;
    }

    /**
    * Gets entrypointArgs
    *  作业入口类参数，多个参数之间空格分隔。
    *
    * @return string|null
    */
    public function getEntrypointArgs()
    {
        return $this->container['entrypointArgs'];
    }

    /**
    * Sets entrypointArgs
    *
    * @param string|null $entrypointArgs 作业入口类参数，多个参数之间空格分隔。
    *
    * @return $this
    */
    public function setEntrypointArgs($entrypointArgs)
    {
        $this->container['entrypointArgs'] = $entrypointArgs;
        return $this;
    }

    /**
    * Gets restartWhenException
    *  是否开启异常重启功能，默认值为“false”。
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
    * @param bool|null $restartWhenException 是否开启异常重启功能，默认值为“false”。
    *
    * @return $this
    */
    public function setRestartWhenException($restartWhenException)
    {
        $this->container['restartWhenException'] = $restartWhenException;
        return $this;
    }

    /**
    * Gets entrypoint
    *  用户已上传到DLI资源管理系统的资源包名，用户自定义作业主类所在的jar包。
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
    * @param string|null $entrypoint 用户已上传到DLI资源管理系统的资源包名，用户自定义作业主类所在的jar包。
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
    *  用户已上传到DLI资源管理系统的资源包名，用户自定义作业的其他依赖包。示例[Group/test.jar,myGroup/test1.jar]
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
    * @param string[]|null $dependencyJars 用户已上传到DLI资源管理系统的资源包名，用户自定义作业的其他依赖包。示例[Group/test.jar,myGroup/test1.jar]
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
    *  用户已上传到DLI资源管理系统的资源包名，用户自定义作业的依赖文件。
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
    * @param string[]|null $dependencyFiles 用户已上传到DLI资源管理系统的资源包名，用户自定义作业的依赖文件。
    *
    * @return $this
    */
    public function setDependencyFiles($dependencyFiles)
    {
        $this->container['dependencyFiles'] = $dependencyFiles;
        return $this;
    }

    /**
    * Gets tmCus
    *  每个taskmanager的CU数，默认值为“1”。
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
    * @param int|null $tmCus 每个taskmanager的CU数，默认值为“1”。
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
    *  每个taskmanager的slot数，默认值为“(parallel_number*tm_cus)/(cu_number-manager_cu_number)”。
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
    * @param int|null $tmSlotNum 每个taskmanager的slot数，默认值为“(parallel_number*tm_cus)/(cu_number-manager_cu_number)”。
    *
    * @return $this
    */
    public function setTmSlotNum($tmSlotNum)
    {
        $this->container['tmSlotNum'] = $tmSlotNum;
        return $this;
    }

    /**
    * Gets feature
    *  作业特性。表示用户作业使用的Flink镜像类型。basic：表示使用DLI提供的基础Flink镜像。custom：表示使用用户自定义的Flink镜像。
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
    * @param string|null $feature 作业特性。表示用户作业使用的Flink镜像类型。basic：表示使用DLI提供的基础Flink镜像。custom：表示使用用户自定义的Flink镜像。
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
    *  Flink版本。当用户设置“feature”为“basic”时，该参数生效。用户可通过与“feature”参数配合使用，指定作业运行使用的DLI基础Flink镜像的版本。
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
    * @param string|null $flinkVersion Flink版本。当用户设置“feature”为“basic”时，该参数生效。用户可通过与“feature”参数配合使用，指定作业运行使用的DLI基础Flink镜像的版本。
    *
    * @return $this
    */
    public function setFlinkVersion($flinkVersion)
    {
        $this->container['flinkVersion'] = $flinkVersion;
        return $this;
    }

    /**
    * Gets image
    *  自定义镜像。格式为：组织名/镜像名:镜像版本。当用户设置“feature”为“custom”时，该参数生效。用户可通过与“feature”参数配合使用，指定作业运行使用自定义的Flink镜像。关于如何使用自定义镜像，请参考《数据湖探索用户指南》。
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
    * @param string|null $image 自定义镜像。格式为：组织名/镜像名:镜像版本。当用户设置“feature”为“custom”时，该参数生效。用户可通过与“feature”参数配合使用，指定作业运行使用自定义的Flink镜像。关于如何使用自定义镜像，请参考《数据湖探索用户指南》。
    *
    * @return $this
    */
    public function setImage($image)
    {
        $this->container['image'] = $image;
        return $this;
    }

    /**
    * Gets resumeCheckpoint
    *  异常重启是否从checkpoint恢复。
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
    * @param bool|null $resumeCheckpoint 异常重启是否从checkpoint恢复。
    *
    * @return $this
    */
    public function setResumeCheckpoint($resumeCheckpoint)
    {
        $this->container['resumeCheckpoint'] = $resumeCheckpoint;
        return $this;
    }

    /**
    * Gets resumeMaxNum
    *  异常重试最大次数，单位：次/小时。取值范围：-1或大于0。默认值为“-1”，表示无限次数。
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
    * @param int|null $resumeMaxNum 异常重试最大次数，单位：次/小时。取值范围：-1或大于0。默认值为“-1”，表示无限次数。
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
    *  用户Jar中checkpoint的储存地址，不同作业路径需要保持不同。
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
    * @param string|null $checkpointPath 用户Jar中checkpoint的储存地址，不同作业路径需要保持不同。
    *
    * @return $this
    */
    public function setCheckpointPath($checkpointPath)
    {
        $this->container['checkpointPath'] = $checkpointPath;
        return $this;
    }

    /**
    * Gets runtimeConfig
    *  Flink作业运行时自定义优化参数。
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
    * @param string|null $runtimeConfig Flink作业运行时自定义优化参数。
    *
    * @return $this
    */
    public function setRuntimeConfig($runtimeConfig)
    {
        $this->container['runtimeConfig'] = $runtimeConfig;
        return $this;
    }

    /**
    * Gets jobType
    *  作业类型。
    *
    * @return string|null
    */
    public function getJobType()
    {
        return $this->container['jobType'];
    }

    /**
    * Sets jobType
    *
    * @param string|null $jobType 作业类型。
    *
    * @return $this
    */
    public function setJobType($jobType)
    {
        $this->container['jobType'] = $jobType;
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

