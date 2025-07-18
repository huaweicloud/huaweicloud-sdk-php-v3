<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateSparkJobRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateSparkJobRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * file  参数解释:   用户已上传到DLI资源管理系统的类型为jar的资源包名 示例: batchTest/spark-examples_2.11-2.1.0.luxor.jar 约束限制:  无 取值范围: 无 默认取值: 无
    * className  参数解释:   批处理作业的Java/Spark主类 示例: org.apache.spark.examples.SparkPi 约束限制:  无 取值范围: 无 默认取值: 无
    * clusterName  参数解释:   用于指定队列，填写已创建DLI的队列名 示例: test 约束限制:  无 取值范围: 无 默认取值: 无
    * args  参数解释:   传入主类的参数 示例: -o result.txt 约束限制:  无 取值范围: 无 默认取值: 无
    * scType  参数解释:   计算资源类型，目前可接受参数A, B, C。如果不指定，则按最小类型创建。 示例: A 约束限制:  无 取值范围: A：物理资源：8核32G内存，driverCores：2；executorCores：1；driverMemory：7G；executorMemory：4G；numExecutor：6。 B：16核64G内存,2,2,7G,8G,7。 C：32核128G内存,4,2,15G,8G,14。 默认取值: 无
    * jars  参数解释:   用户已上传到DLI资源管理系统的类型为jar的程序包名。也支持指定OBS路径，例如：obs://桶名/包名 示例: obs://cwk/jars/com/example/demo 约束限制:  无 取值范围: 无 默认取值: 无
    * pyFiles  参数解释:   用户已上传到DLI资源管理系统的类型为pyFile的资源包名。也支持指定OBS路径，例如：obs://桶名/包名 示例: obs://cwk/py/com/example/demo 约束限制:  无 取值范围: 无 默认取值: 无
    * files  参数解释:   用户已上传到DLI资源管理系统的类型为file的资源包名 示例: [\"count.txt\"] 约束限制:  无 取值范围: 无 默认取值: 无
    * modules  参数解释:   依赖的系统资源模块名，具体模块名可通过查询所有资源包接口查看。 DLI系统提供了用于执行跨源作业的依赖模块，各个不同的服务对应的模块列表如下： CloudTable/MRS HBase: sys.datasource.hbase CloudTable/MRS OpenTSDB: sys.datasource.opentsdb RDS MySQL: sys.datasource.rds RDS PostGre: 不需要选 DWS: 不需要选 CSS: sys.datasource.css 示例: [\"sys.datasource.hbase\",\"sys.datasource.rds\"] 约束限制:  无 取值范围: 无 默认取值: 无
    * resources  JSON对象列表，填写用户已上传到队列的类型为JSON的资源包名和类型。
    * groups  JSON对象列表，填写用户组类型资源，格式详见请求示例。resources中的name未进行type校验，只要此分组中存在这个名字的包即可。
    * conf  参数解释:   batch配置项 约束限制:  无 取值范围: 无 默认取值: 无
    * name  参数解释:   创建时用户指定的批处理名称 示例: TestDemo4 约束限制:  不超过128个字符的字符串 取值范围: 无 默认取值: 无
    * driverMemory  参数解释:   Spark应用的Driver内存, 参数配置例如2G,2048M。该配置项会替换“sc_type”中对应的默认参数，使用时必需带单位，否则会启动失败 示例: 2G 约束限制:  无 取值范围: 无 默认取值: 无
    * driverCores  参数解释:   Spark应用Driver的CPU核数。该配置项会替换sc_type中对应的默认参数 示例: 8 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * executorMemory  参数解释:   Spark应用的Executor内存, 参数配置例如2G,2048M。该配置项会替换“sc_type”中对应的默认参数，使用时必需带单位，否则会启动失败。 示例: 2G 约束限制:  无 取值范围: 无 默认取值: 无
    * executorCores  参数解释:   Spark应用每个Executor的CPU核数。该配置项会替换sc_type中对应的默认参数 示例: 8 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * numExecutors  参数解释:   Spark应用Executor的个数。该配置项会替换sc_type中对应的默认参数 示例: 6 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * feature  参数解释:   作业特性，作业运行在vm队列上支持basic，在container队列上支持basic、ai、custom，其中填写custom时需要同时填写image参数 示例: basic 约束限制:  无 取值范围: basic（基础型） ai（AI增强型） custom（自定义型） 默认取值: 无
    * sparkVersion  参数解释:   作业使用spark组件的版本号，在feature为“basic”或“ai”时填写，若不填写，则使用默认的spark组件版本号2.3.2 示例: 2.3.2 约束限制:  无 取值范围: 无 默认取值: 无
    * queue  参数解释:   用于指定队列，填写已创建DLI的队列名 示例: gen_native 约束限制:  无 取值范围: 无 默认取值: 无
    * autoRecovery  参数解释:   是否开启重试功能，如果开启，可在Spark作业异常失败后自动重试 示例: false 约束限制:  无 取值范围: true,false 默认取值: false
    * maxRetryTimes  参数解释:   最大重试次数 示例: 100 约束限制:  无 取值范围: 大于等于0的整数 默认取值: false
    * image  参数解释:   自定义镜像。格式为：组织名/镜像名:镜像版本。当用户设置“feature”为“custom”时，该参数生效。用户可通过与“feature”参数配合使用，指定作业运行使用自定义的Spark镜像。关于如何使用自定义镜像，请参考《数据湖探索用户指南》 示例: ceshi/spark_general-x86_64:3.3.1-2.3.7.1720240718867424736954752.tensorflow  约束限制:  无 取值范围: 无 默认取值: 无
    * executionAgencyUrn  参数解释:   授权给DLI的委托名。Spark3.3.1版本时支持配置该参数。 示例: agency 约束限制:  无 取值范围: 无 默认取值: 无
    * obsBucket  参数解释:   保存Spark作业的obs桶，需要保存作业时配置该参数 示例: rain3 约束限制:  无 取值范围: 无 默认取值: 无
    * catalogName  访问元数据时，需要将该参数配置为dli。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'file' => 'string',
            'className' => 'string',
            'clusterName' => 'string',
            'args' => 'string[]',
            'scType' => 'string',
            'jars' => 'string[]',
            'pyFiles' => 'string[]',
            'files' => 'string[]',
            'modules' => 'string[]',
            'resources' => '\HuaweiCloud\SDK\Dli\V1\Model\JobResource[]',
            'groups' => '\HuaweiCloud\SDK\Dli\V1\Model\JobResourcesGroup[]',
            'conf' => 'map[string,object]',
            'name' => 'string',
            'driverMemory' => 'string',
            'driverCores' => 'int',
            'executorMemory' => 'string',
            'executorCores' => 'int',
            'numExecutors' => 'int',
            'feature' => 'string',
            'sparkVersion' => 'string',
            'queue' => 'string',
            'autoRecovery' => 'bool',
            'maxRetryTimes' => 'int',
            'image' => 'string',
            'executionAgencyUrn' => 'string',
            'obsBucket' => 'string',
            'catalogName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * file  参数解释:   用户已上传到DLI资源管理系统的类型为jar的资源包名 示例: batchTest/spark-examples_2.11-2.1.0.luxor.jar 约束限制:  无 取值范围: 无 默认取值: 无
    * className  参数解释:   批处理作业的Java/Spark主类 示例: org.apache.spark.examples.SparkPi 约束限制:  无 取值范围: 无 默认取值: 无
    * clusterName  参数解释:   用于指定队列，填写已创建DLI的队列名 示例: test 约束限制:  无 取值范围: 无 默认取值: 无
    * args  参数解释:   传入主类的参数 示例: -o result.txt 约束限制:  无 取值范围: 无 默认取值: 无
    * scType  参数解释:   计算资源类型，目前可接受参数A, B, C。如果不指定，则按最小类型创建。 示例: A 约束限制:  无 取值范围: A：物理资源：8核32G内存，driverCores：2；executorCores：1；driverMemory：7G；executorMemory：4G；numExecutor：6。 B：16核64G内存,2,2,7G,8G,7。 C：32核128G内存,4,2,15G,8G,14。 默认取值: 无
    * jars  参数解释:   用户已上传到DLI资源管理系统的类型为jar的程序包名。也支持指定OBS路径，例如：obs://桶名/包名 示例: obs://cwk/jars/com/example/demo 约束限制:  无 取值范围: 无 默认取值: 无
    * pyFiles  参数解释:   用户已上传到DLI资源管理系统的类型为pyFile的资源包名。也支持指定OBS路径，例如：obs://桶名/包名 示例: obs://cwk/py/com/example/demo 约束限制:  无 取值范围: 无 默认取值: 无
    * files  参数解释:   用户已上传到DLI资源管理系统的类型为file的资源包名 示例: [\"count.txt\"] 约束限制:  无 取值范围: 无 默认取值: 无
    * modules  参数解释:   依赖的系统资源模块名，具体模块名可通过查询所有资源包接口查看。 DLI系统提供了用于执行跨源作业的依赖模块，各个不同的服务对应的模块列表如下： CloudTable/MRS HBase: sys.datasource.hbase CloudTable/MRS OpenTSDB: sys.datasource.opentsdb RDS MySQL: sys.datasource.rds RDS PostGre: 不需要选 DWS: 不需要选 CSS: sys.datasource.css 示例: [\"sys.datasource.hbase\",\"sys.datasource.rds\"] 约束限制:  无 取值范围: 无 默认取值: 无
    * resources  JSON对象列表，填写用户已上传到队列的类型为JSON的资源包名和类型。
    * groups  JSON对象列表，填写用户组类型资源，格式详见请求示例。resources中的name未进行type校验，只要此分组中存在这个名字的包即可。
    * conf  参数解释:   batch配置项 约束限制:  无 取值范围: 无 默认取值: 无
    * name  参数解释:   创建时用户指定的批处理名称 示例: TestDemo4 约束限制:  不超过128个字符的字符串 取值范围: 无 默认取值: 无
    * driverMemory  参数解释:   Spark应用的Driver内存, 参数配置例如2G,2048M。该配置项会替换“sc_type”中对应的默认参数，使用时必需带单位，否则会启动失败 示例: 2G 约束限制:  无 取值范围: 无 默认取值: 无
    * driverCores  参数解释:   Spark应用Driver的CPU核数。该配置项会替换sc_type中对应的默认参数 示例: 8 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * executorMemory  参数解释:   Spark应用的Executor内存, 参数配置例如2G,2048M。该配置项会替换“sc_type”中对应的默认参数，使用时必需带单位，否则会启动失败。 示例: 2G 约束限制:  无 取值范围: 无 默认取值: 无
    * executorCores  参数解释:   Spark应用每个Executor的CPU核数。该配置项会替换sc_type中对应的默认参数 示例: 8 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * numExecutors  参数解释:   Spark应用Executor的个数。该配置项会替换sc_type中对应的默认参数 示例: 6 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * feature  参数解释:   作业特性，作业运行在vm队列上支持basic，在container队列上支持basic、ai、custom，其中填写custom时需要同时填写image参数 示例: basic 约束限制:  无 取值范围: basic（基础型） ai（AI增强型） custom（自定义型） 默认取值: 无
    * sparkVersion  参数解释:   作业使用spark组件的版本号，在feature为“basic”或“ai”时填写，若不填写，则使用默认的spark组件版本号2.3.2 示例: 2.3.2 约束限制:  无 取值范围: 无 默认取值: 无
    * queue  参数解释:   用于指定队列，填写已创建DLI的队列名 示例: gen_native 约束限制:  无 取值范围: 无 默认取值: 无
    * autoRecovery  参数解释:   是否开启重试功能，如果开启，可在Spark作业异常失败后自动重试 示例: false 约束限制:  无 取值范围: true,false 默认取值: false
    * maxRetryTimes  参数解释:   最大重试次数 示例: 100 约束限制:  无 取值范围: 大于等于0的整数 默认取值: false
    * image  参数解释:   自定义镜像。格式为：组织名/镜像名:镜像版本。当用户设置“feature”为“custom”时，该参数生效。用户可通过与“feature”参数配合使用，指定作业运行使用自定义的Spark镜像。关于如何使用自定义镜像，请参考《数据湖探索用户指南》 示例: ceshi/spark_general-x86_64:3.3.1-2.3.7.1720240718867424736954752.tensorflow  约束限制:  无 取值范围: 无 默认取值: 无
    * executionAgencyUrn  参数解释:   授权给DLI的委托名。Spark3.3.1版本时支持配置该参数。 示例: agency 约束限制:  无 取值范围: 无 默认取值: 无
    * obsBucket  参数解释:   保存Spark作业的obs桶，需要保存作业时配置该参数 示例: rain3 约束限制:  无 取值范围: 无 默认取值: 无
    * catalogName  访问元数据时，需要将该参数配置为dli。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'file' => null,
        'className' => null,
        'clusterName' => null,
        'args' => null,
        'scType' => null,
        'jars' => null,
        'pyFiles' => null,
        'files' => null,
        'modules' => null,
        'resources' => null,
        'groups' => null,
        'conf' => null,
        'name' => null,
        'driverMemory' => null,
        'driverCores' => 'int32',
        'executorMemory' => null,
        'executorCores' => 'int32',
        'numExecutors' => 'int32',
        'feature' => null,
        'sparkVersion' => null,
        'queue' => null,
        'autoRecovery' => null,
        'maxRetryTimes' => 'int32',
        'image' => null,
        'executionAgencyUrn' => null,
        'obsBucket' => null,
        'catalogName' => null
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
    * file  参数解释:   用户已上传到DLI资源管理系统的类型为jar的资源包名 示例: batchTest/spark-examples_2.11-2.1.0.luxor.jar 约束限制:  无 取值范围: 无 默认取值: 无
    * className  参数解释:   批处理作业的Java/Spark主类 示例: org.apache.spark.examples.SparkPi 约束限制:  无 取值范围: 无 默认取值: 无
    * clusterName  参数解释:   用于指定队列，填写已创建DLI的队列名 示例: test 约束限制:  无 取值范围: 无 默认取值: 无
    * args  参数解释:   传入主类的参数 示例: -o result.txt 约束限制:  无 取值范围: 无 默认取值: 无
    * scType  参数解释:   计算资源类型，目前可接受参数A, B, C。如果不指定，则按最小类型创建。 示例: A 约束限制:  无 取值范围: A：物理资源：8核32G内存，driverCores：2；executorCores：1；driverMemory：7G；executorMemory：4G；numExecutor：6。 B：16核64G内存,2,2,7G,8G,7。 C：32核128G内存,4,2,15G,8G,14。 默认取值: 无
    * jars  参数解释:   用户已上传到DLI资源管理系统的类型为jar的程序包名。也支持指定OBS路径，例如：obs://桶名/包名 示例: obs://cwk/jars/com/example/demo 约束限制:  无 取值范围: 无 默认取值: 无
    * pyFiles  参数解释:   用户已上传到DLI资源管理系统的类型为pyFile的资源包名。也支持指定OBS路径，例如：obs://桶名/包名 示例: obs://cwk/py/com/example/demo 约束限制:  无 取值范围: 无 默认取值: 无
    * files  参数解释:   用户已上传到DLI资源管理系统的类型为file的资源包名 示例: [\"count.txt\"] 约束限制:  无 取值范围: 无 默认取值: 无
    * modules  参数解释:   依赖的系统资源模块名，具体模块名可通过查询所有资源包接口查看。 DLI系统提供了用于执行跨源作业的依赖模块，各个不同的服务对应的模块列表如下： CloudTable/MRS HBase: sys.datasource.hbase CloudTable/MRS OpenTSDB: sys.datasource.opentsdb RDS MySQL: sys.datasource.rds RDS PostGre: 不需要选 DWS: 不需要选 CSS: sys.datasource.css 示例: [\"sys.datasource.hbase\",\"sys.datasource.rds\"] 约束限制:  无 取值范围: 无 默认取值: 无
    * resources  JSON对象列表，填写用户已上传到队列的类型为JSON的资源包名和类型。
    * groups  JSON对象列表，填写用户组类型资源，格式详见请求示例。resources中的name未进行type校验，只要此分组中存在这个名字的包即可。
    * conf  参数解释:   batch配置项 约束限制:  无 取值范围: 无 默认取值: 无
    * name  参数解释:   创建时用户指定的批处理名称 示例: TestDemo4 约束限制:  不超过128个字符的字符串 取值范围: 无 默认取值: 无
    * driverMemory  参数解释:   Spark应用的Driver内存, 参数配置例如2G,2048M。该配置项会替换“sc_type”中对应的默认参数，使用时必需带单位，否则会启动失败 示例: 2G 约束限制:  无 取值范围: 无 默认取值: 无
    * driverCores  参数解释:   Spark应用Driver的CPU核数。该配置项会替换sc_type中对应的默认参数 示例: 8 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * executorMemory  参数解释:   Spark应用的Executor内存, 参数配置例如2G,2048M。该配置项会替换“sc_type”中对应的默认参数，使用时必需带单位，否则会启动失败。 示例: 2G 约束限制:  无 取值范围: 无 默认取值: 无
    * executorCores  参数解释:   Spark应用每个Executor的CPU核数。该配置项会替换sc_type中对应的默认参数 示例: 8 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * numExecutors  参数解释:   Spark应用Executor的个数。该配置项会替换sc_type中对应的默认参数 示例: 6 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * feature  参数解释:   作业特性，作业运行在vm队列上支持basic，在container队列上支持basic、ai、custom，其中填写custom时需要同时填写image参数 示例: basic 约束限制:  无 取值范围: basic（基础型） ai（AI增强型） custom（自定义型） 默认取值: 无
    * sparkVersion  参数解释:   作业使用spark组件的版本号，在feature为“basic”或“ai”时填写，若不填写，则使用默认的spark组件版本号2.3.2 示例: 2.3.2 约束限制:  无 取值范围: 无 默认取值: 无
    * queue  参数解释:   用于指定队列，填写已创建DLI的队列名 示例: gen_native 约束限制:  无 取值范围: 无 默认取值: 无
    * autoRecovery  参数解释:   是否开启重试功能，如果开启，可在Spark作业异常失败后自动重试 示例: false 约束限制:  无 取值范围: true,false 默认取值: false
    * maxRetryTimes  参数解释:   最大重试次数 示例: 100 约束限制:  无 取值范围: 大于等于0的整数 默认取值: false
    * image  参数解释:   自定义镜像。格式为：组织名/镜像名:镜像版本。当用户设置“feature”为“custom”时，该参数生效。用户可通过与“feature”参数配合使用，指定作业运行使用自定义的Spark镜像。关于如何使用自定义镜像，请参考《数据湖探索用户指南》 示例: ceshi/spark_general-x86_64:3.3.1-2.3.7.1720240718867424736954752.tensorflow  约束限制:  无 取值范围: 无 默认取值: 无
    * executionAgencyUrn  参数解释:   授权给DLI的委托名。Spark3.3.1版本时支持配置该参数。 示例: agency 约束限制:  无 取值范围: 无 默认取值: 无
    * obsBucket  参数解释:   保存Spark作业的obs桶，需要保存作业时配置该参数 示例: rain3 约束限制:  无 取值范围: 无 默认取值: 无
    * catalogName  访问元数据时，需要将该参数配置为dli。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'file' => 'file',
            'className' => 'className',
            'clusterName' => 'cluster_name',
            'args' => 'args',
            'scType' => 'sc_type',
            'jars' => 'jars',
            'pyFiles' => 'pyFiles',
            'files' => 'files',
            'modules' => 'modules',
            'resources' => 'resources',
            'groups' => 'groups',
            'conf' => 'conf',
            'name' => 'name',
            'driverMemory' => 'driverMemory',
            'driverCores' => 'driverCores',
            'executorMemory' => 'executorMemory',
            'executorCores' => 'executorCores',
            'numExecutors' => 'numExecutors',
            'feature' => 'feature',
            'sparkVersion' => 'spark_version',
            'queue' => 'queue',
            'autoRecovery' => 'auto_recovery',
            'maxRetryTimes' => 'max_retry_times',
            'image' => 'image',
            'executionAgencyUrn' => 'execution_agency_urn',
            'obsBucket' => 'obs_bucket',
            'catalogName' => 'catalog_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * file  参数解释:   用户已上传到DLI资源管理系统的类型为jar的资源包名 示例: batchTest/spark-examples_2.11-2.1.0.luxor.jar 约束限制:  无 取值范围: 无 默认取值: 无
    * className  参数解释:   批处理作业的Java/Spark主类 示例: org.apache.spark.examples.SparkPi 约束限制:  无 取值范围: 无 默认取值: 无
    * clusterName  参数解释:   用于指定队列，填写已创建DLI的队列名 示例: test 约束限制:  无 取值范围: 无 默认取值: 无
    * args  参数解释:   传入主类的参数 示例: -o result.txt 约束限制:  无 取值范围: 无 默认取值: 无
    * scType  参数解释:   计算资源类型，目前可接受参数A, B, C。如果不指定，则按最小类型创建。 示例: A 约束限制:  无 取值范围: A：物理资源：8核32G内存，driverCores：2；executorCores：1；driverMemory：7G；executorMemory：4G；numExecutor：6。 B：16核64G内存,2,2,7G,8G,7。 C：32核128G内存,4,2,15G,8G,14。 默认取值: 无
    * jars  参数解释:   用户已上传到DLI资源管理系统的类型为jar的程序包名。也支持指定OBS路径，例如：obs://桶名/包名 示例: obs://cwk/jars/com/example/demo 约束限制:  无 取值范围: 无 默认取值: 无
    * pyFiles  参数解释:   用户已上传到DLI资源管理系统的类型为pyFile的资源包名。也支持指定OBS路径，例如：obs://桶名/包名 示例: obs://cwk/py/com/example/demo 约束限制:  无 取值范围: 无 默认取值: 无
    * files  参数解释:   用户已上传到DLI资源管理系统的类型为file的资源包名 示例: [\"count.txt\"] 约束限制:  无 取值范围: 无 默认取值: 无
    * modules  参数解释:   依赖的系统资源模块名，具体模块名可通过查询所有资源包接口查看。 DLI系统提供了用于执行跨源作业的依赖模块，各个不同的服务对应的模块列表如下： CloudTable/MRS HBase: sys.datasource.hbase CloudTable/MRS OpenTSDB: sys.datasource.opentsdb RDS MySQL: sys.datasource.rds RDS PostGre: 不需要选 DWS: 不需要选 CSS: sys.datasource.css 示例: [\"sys.datasource.hbase\",\"sys.datasource.rds\"] 约束限制:  无 取值范围: 无 默认取值: 无
    * resources  JSON对象列表，填写用户已上传到队列的类型为JSON的资源包名和类型。
    * groups  JSON对象列表，填写用户组类型资源，格式详见请求示例。resources中的name未进行type校验，只要此分组中存在这个名字的包即可。
    * conf  参数解释:   batch配置项 约束限制:  无 取值范围: 无 默认取值: 无
    * name  参数解释:   创建时用户指定的批处理名称 示例: TestDemo4 约束限制:  不超过128个字符的字符串 取值范围: 无 默认取值: 无
    * driverMemory  参数解释:   Spark应用的Driver内存, 参数配置例如2G,2048M。该配置项会替换“sc_type”中对应的默认参数，使用时必需带单位，否则会启动失败 示例: 2G 约束限制:  无 取值范围: 无 默认取值: 无
    * driverCores  参数解释:   Spark应用Driver的CPU核数。该配置项会替换sc_type中对应的默认参数 示例: 8 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * executorMemory  参数解释:   Spark应用的Executor内存, 参数配置例如2G,2048M。该配置项会替换“sc_type”中对应的默认参数，使用时必需带单位，否则会启动失败。 示例: 2G 约束限制:  无 取值范围: 无 默认取值: 无
    * executorCores  参数解释:   Spark应用每个Executor的CPU核数。该配置项会替换sc_type中对应的默认参数 示例: 8 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * numExecutors  参数解释:   Spark应用Executor的个数。该配置项会替换sc_type中对应的默认参数 示例: 6 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * feature  参数解释:   作业特性，作业运行在vm队列上支持basic，在container队列上支持basic、ai、custom，其中填写custom时需要同时填写image参数 示例: basic 约束限制:  无 取值范围: basic（基础型） ai（AI增强型） custom（自定义型） 默认取值: 无
    * sparkVersion  参数解释:   作业使用spark组件的版本号，在feature为“basic”或“ai”时填写，若不填写，则使用默认的spark组件版本号2.3.2 示例: 2.3.2 约束限制:  无 取值范围: 无 默认取值: 无
    * queue  参数解释:   用于指定队列，填写已创建DLI的队列名 示例: gen_native 约束限制:  无 取值范围: 无 默认取值: 无
    * autoRecovery  参数解释:   是否开启重试功能，如果开启，可在Spark作业异常失败后自动重试 示例: false 约束限制:  无 取值范围: true,false 默认取值: false
    * maxRetryTimes  参数解释:   最大重试次数 示例: 100 约束限制:  无 取值范围: 大于等于0的整数 默认取值: false
    * image  参数解释:   自定义镜像。格式为：组织名/镜像名:镜像版本。当用户设置“feature”为“custom”时，该参数生效。用户可通过与“feature”参数配合使用，指定作业运行使用自定义的Spark镜像。关于如何使用自定义镜像，请参考《数据湖探索用户指南》 示例: ceshi/spark_general-x86_64:3.3.1-2.3.7.1720240718867424736954752.tensorflow  约束限制:  无 取值范围: 无 默认取值: 无
    * executionAgencyUrn  参数解释:   授权给DLI的委托名。Spark3.3.1版本时支持配置该参数。 示例: agency 约束限制:  无 取值范围: 无 默认取值: 无
    * obsBucket  参数解释:   保存Spark作业的obs桶，需要保存作业时配置该参数 示例: rain3 约束限制:  无 取值范围: 无 默认取值: 无
    * catalogName  访问元数据时，需要将该参数配置为dli。
    *
    * @var string[]
    */
    protected static $setters = [
            'file' => 'setFile',
            'className' => 'setClassName',
            'clusterName' => 'setClusterName',
            'args' => 'setArgs',
            'scType' => 'setScType',
            'jars' => 'setJars',
            'pyFiles' => 'setPyFiles',
            'files' => 'setFiles',
            'modules' => 'setModules',
            'resources' => 'setResources',
            'groups' => 'setGroups',
            'conf' => 'setConf',
            'name' => 'setName',
            'driverMemory' => 'setDriverMemory',
            'driverCores' => 'setDriverCores',
            'executorMemory' => 'setExecutorMemory',
            'executorCores' => 'setExecutorCores',
            'numExecutors' => 'setNumExecutors',
            'feature' => 'setFeature',
            'sparkVersion' => 'setSparkVersion',
            'queue' => 'setQueue',
            'autoRecovery' => 'setAutoRecovery',
            'maxRetryTimes' => 'setMaxRetryTimes',
            'image' => 'setImage',
            'executionAgencyUrn' => 'setExecutionAgencyUrn',
            'obsBucket' => 'setObsBucket',
            'catalogName' => 'setCatalogName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * file  参数解释:   用户已上传到DLI资源管理系统的类型为jar的资源包名 示例: batchTest/spark-examples_2.11-2.1.0.luxor.jar 约束限制:  无 取值范围: 无 默认取值: 无
    * className  参数解释:   批处理作业的Java/Spark主类 示例: org.apache.spark.examples.SparkPi 约束限制:  无 取值范围: 无 默认取值: 无
    * clusterName  参数解释:   用于指定队列，填写已创建DLI的队列名 示例: test 约束限制:  无 取值范围: 无 默认取值: 无
    * args  参数解释:   传入主类的参数 示例: -o result.txt 约束限制:  无 取值范围: 无 默认取值: 无
    * scType  参数解释:   计算资源类型，目前可接受参数A, B, C。如果不指定，则按最小类型创建。 示例: A 约束限制:  无 取值范围: A：物理资源：8核32G内存，driverCores：2；executorCores：1；driverMemory：7G；executorMemory：4G；numExecutor：6。 B：16核64G内存,2,2,7G,8G,7。 C：32核128G内存,4,2,15G,8G,14。 默认取值: 无
    * jars  参数解释:   用户已上传到DLI资源管理系统的类型为jar的程序包名。也支持指定OBS路径，例如：obs://桶名/包名 示例: obs://cwk/jars/com/example/demo 约束限制:  无 取值范围: 无 默认取值: 无
    * pyFiles  参数解释:   用户已上传到DLI资源管理系统的类型为pyFile的资源包名。也支持指定OBS路径，例如：obs://桶名/包名 示例: obs://cwk/py/com/example/demo 约束限制:  无 取值范围: 无 默认取值: 无
    * files  参数解释:   用户已上传到DLI资源管理系统的类型为file的资源包名 示例: [\"count.txt\"] 约束限制:  无 取值范围: 无 默认取值: 无
    * modules  参数解释:   依赖的系统资源模块名，具体模块名可通过查询所有资源包接口查看。 DLI系统提供了用于执行跨源作业的依赖模块，各个不同的服务对应的模块列表如下： CloudTable/MRS HBase: sys.datasource.hbase CloudTable/MRS OpenTSDB: sys.datasource.opentsdb RDS MySQL: sys.datasource.rds RDS PostGre: 不需要选 DWS: 不需要选 CSS: sys.datasource.css 示例: [\"sys.datasource.hbase\",\"sys.datasource.rds\"] 约束限制:  无 取值范围: 无 默认取值: 无
    * resources  JSON对象列表，填写用户已上传到队列的类型为JSON的资源包名和类型。
    * groups  JSON对象列表，填写用户组类型资源，格式详见请求示例。resources中的name未进行type校验，只要此分组中存在这个名字的包即可。
    * conf  参数解释:   batch配置项 约束限制:  无 取值范围: 无 默认取值: 无
    * name  参数解释:   创建时用户指定的批处理名称 示例: TestDemo4 约束限制:  不超过128个字符的字符串 取值范围: 无 默认取值: 无
    * driverMemory  参数解释:   Spark应用的Driver内存, 参数配置例如2G,2048M。该配置项会替换“sc_type”中对应的默认参数，使用时必需带单位，否则会启动失败 示例: 2G 约束限制:  无 取值范围: 无 默认取值: 无
    * driverCores  参数解释:   Spark应用Driver的CPU核数。该配置项会替换sc_type中对应的默认参数 示例: 8 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * executorMemory  参数解释:   Spark应用的Executor内存, 参数配置例如2G,2048M。该配置项会替换“sc_type”中对应的默认参数，使用时必需带单位，否则会启动失败。 示例: 2G 约束限制:  无 取值范围: 无 默认取值: 无
    * executorCores  参数解释:   Spark应用每个Executor的CPU核数。该配置项会替换sc_type中对应的默认参数 示例: 8 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * numExecutors  参数解释:   Spark应用Executor的个数。该配置项会替换sc_type中对应的默认参数 示例: 6 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * feature  参数解释:   作业特性，作业运行在vm队列上支持basic，在container队列上支持basic、ai、custom，其中填写custom时需要同时填写image参数 示例: basic 约束限制:  无 取值范围: basic（基础型） ai（AI增强型） custom（自定义型） 默认取值: 无
    * sparkVersion  参数解释:   作业使用spark组件的版本号，在feature为“basic”或“ai”时填写，若不填写，则使用默认的spark组件版本号2.3.2 示例: 2.3.2 约束限制:  无 取值范围: 无 默认取值: 无
    * queue  参数解释:   用于指定队列，填写已创建DLI的队列名 示例: gen_native 约束限制:  无 取值范围: 无 默认取值: 无
    * autoRecovery  参数解释:   是否开启重试功能，如果开启，可在Spark作业异常失败后自动重试 示例: false 约束限制:  无 取值范围: true,false 默认取值: false
    * maxRetryTimes  参数解释:   最大重试次数 示例: 100 约束限制:  无 取值范围: 大于等于0的整数 默认取值: false
    * image  参数解释:   自定义镜像。格式为：组织名/镜像名:镜像版本。当用户设置“feature”为“custom”时，该参数生效。用户可通过与“feature”参数配合使用，指定作业运行使用自定义的Spark镜像。关于如何使用自定义镜像，请参考《数据湖探索用户指南》 示例: ceshi/spark_general-x86_64:3.3.1-2.3.7.1720240718867424736954752.tensorflow  约束限制:  无 取值范围: 无 默认取值: 无
    * executionAgencyUrn  参数解释:   授权给DLI的委托名。Spark3.3.1版本时支持配置该参数。 示例: agency 约束限制:  无 取值范围: 无 默认取值: 无
    * obsBucket  参数解释:   保存Spark作业的obs桶，需要保存作业时配置该参数 示例: rain3 约束限制:  无 取值范围: 无 默认取值: 无
    * catalogName  访问元数据时，需要将该参数配置为dli。
    *
    * @var string[]
    */
    protected static $getters = [
            'file' => 'getFile',
            'className' => 'getClassName',
            'clusterName' => 'getClusterName',
            'args' => 'getArgs',
            'scType' => 'getScType',
            'jars' => 'getJars',
            'pyFiles' => 'getPyFiles',
            'files' => 'getFiles',
            'modules' => 'getModules',
            'resources' => 'getResources',
            'groups' => 'getGroups',
            'conf' => 'getConf',
            'name' => 'getName',
            'driverMemory' => 'getDriverMemory',
            'driverCores' => 'getDriverCores',
            'executorMemory' => 'getExecutorMemory',
            'executorCores' => 'getExecutorCores',
            'numExecutors' => 'getNumExecutors',
            'feature' => 'getFeature',
            'sparkVersion' => 'getSparkVersion',
            'queue' => 'getQueue',
            'autoRecovery' => 'getAutoRecovery',
            'maxRetryTimes' => 'getMaxRetryTimes',
            'image' => 'getImage',
            'executionAgencyUrn' => 'getExecutionAgencyUrn',
            'obsBucket' => 'getObsBucket',
            'catalogName' => 'getCatalogName'
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
    const FEATURE_BASIC = 'basic';
    const FEATURE_AI = 'ai';
    const FEATURE_CUSTOM = 'custom';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getFeatureAllowableValues()
    {
        return [
            self::FEATURE_BASIC,
            self::FEATURE_AI,
            self::FEATURE_CUSTOM,
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
        $this->container['file'] = isset($data['file']) ? $data['file'] : null;
        $this->container['className'] = isset($data['className']) ? $data['className'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['args'] = isset($data['args']) ? $data['args'] : null;
        $this->container['scType'] = isset($data['scType']) ? $data['scType'] : null;
        $this->container['jars'] = isset($data['jars']) ? $data['jars'] : null;
        $this->container['pyFiles'] = isset($data['pyFiles']) ? $data['pyFiles'] : null;
        $this->container['files'] = isset($data['files']) ? $data['files'] : null;
        $this->container['modules'] = isset($data['modules']) ? $data['modules'] : null;
        $this->container['resources'] = isset($data['resources']) ? $data['resources'] : null;
        $this->container['groups'] = isset($data['groups']) ? $data['groups'] : null;
        $this->container['conf'] = isset($data['conf']) ? $data['conf'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['driverMemory'] = isset($data['driverMemory']) ? $data['driverMemory'] : null;
        $this->container['driverCores'] = isset($data['driverCores']) ? $data['driverCores'] : null;
        $this->container['executorMemory'] = isset($data['executorMemory']) ? $data['executorMemory'] : null;
        $this->container['executorCores'] = isset($data['executorCores']) ? $data['executorCores'] : null;
        $this->container['numExecutors'] = isset($data['numExecutors']) ? $data['numExecutors'] : null;
        $this->container['feature'] = isset($data['feature']) ? $data['feature'] : null;
        $this->container['sparkVersion'] = isset($data['sparkVersion']) ? $data['sparkVersion'] : null;
        $this->container['queue'] = isset($data['queue']) ? $data['queue'] : null;
        $this->container['autoRecovery'] = isset($data['autoRecovery']) ? $data['autoRecovery'] : null;
        $this->container['maxRetryTimes'] = isset($data['maxRetryTimes']) ? $data['maxRetryTimes'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['executionAgencyUrn'] = isset($data['executionAgencyUrn']) ? $data['executionAgencyUrn'] : null;
        $this->container['obsBucket'] = isset($data['obsBucket']) ? $data['obsBucket'] : null;
        $this->container['catalogName'] = isset($data['catalogName']) ? $data['catalogName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['file'] === null) {
            $invalidProperties[] = "'file' can't be null";
        }
        if ($this->container['className'] === null) {
            $invalidProperties[] = "'className' can't be null";
        }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            $allowedValues = $this->getFeatureAllowableValues();
                if (!is_null($this->container['feature']) && !in_array($this->container['feature'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'feature', must be one of '%s'",
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
    * Gets file
    *  参数解释:   用户已上传到DLI资源管理系统的类型为jar的资源包名 示例: batchTest/spark-examples_2.11-2.1.0.luxor.jar 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return string
    */
    public function getFile()
    {
        return $this->container['file'];
    }

    /**
    * Sets file
    *
    * @param string $file 参数解释:   用户已上传到DLI资源管理系统的类型为jar的资源包名 示例: batchTest/spark-examples_2.11-2.1.0.luxor.jar 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setFile($file)
    {
        $this->container['file'] = $file;
        return $this;
    }

    /**
    * Gets className
    *  参数解释:   批处理作业的Java/Spark主类 示例: org.apache.spark.examples.SparkPi 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return string
    */
    public function getClassName()
    {
        return $this->container['className'];
    }

    /**
    * Sets className
    *
    * @param string $className 参数解释:   批处理作业的Java/Spark主类 示例: org.apache.spark.examples.SparkPi 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setClassName($className)
    {
        $this->container['className'] = $className;
        return $this;
    }

    /**
    * Gets clusterName
    *  参数解释:   用于指定队列，填写已创建DLI的队列名 示例: test 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return string|null
    */
    public function getClusterName()
    {
        return $this->container['clusterName'];
    }

    /**
    * Sets clusterName
    *
    * @param string|null $clusterName 参数解释:   用于指定队列，填写已创建DLI的队列名 示例: test 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setClusterName($clusterName)
    {
        $this->container['clusterName'] = $clusterName;
        return $this;
    }

    /**
    * Gets args
    *  参数解释:   传入主类的参数 示例: -o result.txt 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return string[]|null
    */
    public function getArgs()
    {
        return $this->container['args'];
    }

    /**
    * Sets args
    *
    * @param string[]|null $args 参数解释:   传入主类的参数 示例: -o result.txt 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setArgs($args)
    {
        $this->container['args'] = $args;
        return $this;
    }

    /**
    * Gets scType
    *  参数解释:   计算资源类型，目前可接受参数A, B, C。如果不指定，则按最小类型创建。 示例: A 约束限制:  无 取值范围: A：物理资源：8核32G内存，driverCores：2；executorCores：1；driverMemory：7G；executorMemory：4G；numExecutor：6。 B：16核64G内存,2,2,7G,8G,7。 C：32核128G内存,4,2,15G,8G,14。 默认取值: 无
    *
    * @return string|null
    */
    public function getScType()
    {
        return $this->container['scType'];
    }

    /**
    * Sets scType
    *
    * @param string|null $scType 参数解释:   计算资源类型，目前可接受参数A, B, C。如果不指定，则按最小类型创建。 示例: A 约束限制:  无 取值范围: A：物理资源：8核32G内存，driverCores：2；executorCores：1；driverMemory：7G；executorMemory：4G；numExecutor：6。 B：16核64G内存,2,2,7G,8G,7。 C：32核128G内存,4,2,15G,8G,14。 默认取值: 无
    *
    * @return $this
    */
    public function setScType($scType)
    {
        $this->container['scType'] = $scType;
        return $this;
    }

    /**
    * Gets jars
    *  参数解释:   用户已上传到DLI资源管理系统的类型为jar的程序包名。也支持指定OBS路径，例如：obs://桶名/包名 示例: obs://cwk/jars/com/example/demo 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return string[]|null
    */
    public function getJars()
    {
        return $this->container['jars'];
    }

    /**
    * Sets jars
    *
    * @param string[]|null $jars 参数解释:   用户已上传到DLI资源管理系统的类型为jar的程序包名。也支持指定OBS路径，例如：obs://桶名/包名 示例: obs://cwk/jars/com/example/demo 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setJars($jars)
    {
        $this->container['jars'] = $jars;
        return $this;
    }

    /**
    * Gets pyFiles
    *  参数解释:   用户已上传到DLI资源管理系统的类型为pyFile的资源包名。也支持指定OBS路径，例如：obs://桶名/包名 示例: obs://cwk/py/com/example/demo 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return string[]|null
    */
    public function getPyFiles()
    {
        return $this->container['pyFiles'];
    }

    /**
    * Sets pyFiles
    *
    * @param string[]|null $pyFiles 参数解释:   用户已上传到DLI资源管理系统的类型为pyFile的资源包名。也支持指定OBS路径，例如：obs://桶名/包名 示例: obs://cwk/py/com/example/demo 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setPyFiles($pyFiles)
    {
        $this->container['pyFiles'] = $pyFiles;
        return $this;
    }

    /**
    * Gets files
    *  参数解释:   用户已上传到DLI资源管理系统的类型为file的资源包名 示例: [\"count.txt\"] 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return string[]|null
    */
    public function getFiles()
    {
        return $this->container['files'];
    }

    /**
    * Sets files
    *
    * @param string[]|null $files 参数解释:   用户已上传到DLI资源管理系统的类型为file的资源包名 示例: [\"count.txt\"] 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setFiles($files)
    {
        $this->container['files'] = $files;
        return $this;
    }

    /**
    * Gets modules
    *  参数解释:   依赖的系统资源模块名，具体模块名可通过查询所有资源包接口查看。 DLI系统提供了用于执行跨源作业的依赖模块，各个不同的服务对应的模块列表如下： CloudTable/MRS HBase: sys.datasource.hbase CloudTable/MRS OpenTSDB: sys.datasource.opentsdb RDS MySQL: sys.datasource.rds RDS PostGre: 不需要选 DWS: 不需要选 CSS: sys.datasource.css 示例: [\"sys.datasource.hbase\",\"sys.datasource.rds\"] 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return string[]|null
    */
    public function getModules()
    {
        return $this->container['modules'];
    }

    /**
    * Sets modules
    *
    * @param string[]|null $modules 参数解释:   依赖的系统资源模块名，具体模块名可通过查询所有资源包接口查看。 DLI系统提供了用于执行跨源作业的依赖模块，各个不同的服务对应的模块列表如下： CloudTable/MRS HBase: sys.datasource.hbase CloudTable/MRS OpenTSDB: sys.datasource.opentsdb RDS MySQL: sys.datasource.rds RDS PostGre: 不需要选 DWS: 不需要选 CSS: sys.datasource.css 示例: [\"sys.datasource.hbase\",\"sys.datasource.rds\"] 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setModules($modules)
    {
        $this->container['modules'] = $modules;
        return $this;
    }

    /**
    * Gets resources
    *  JSON对象列表，填写用户已上传到队列的类型为JSON的资源包名和类型。
    *
    * @return \HuaweiCloud\SDK\Dli\V1\Model\JobResource[]|null
    */
    public function getResources()
    {
        return $this->container['resources'];
    }

    /**
    * Sets resources
    *
    * @param \HuaweiCloud\SDK\Dli\V1\Model\JobResource[]|null $resources JSON对象列表，填写用户已上传到队列的类型为JSON的资源包名和类型。
    *
    * @return $this
    */
    public function setResources($resources)
    {
        $this->container['resources'] = $resources;
        return $this;
    }

    /**
    * Gets groups
    *  JSON对象列表，填写用户组类型资源，格式详见请求示例。resources中的name未进行type校验，只要此分组中存在这个名字的包即可。
    *
    * @return \HuaweiCloud\SDK\Dli\V1\Model\JobResourcesGroup[]|null
    */
    public function getGroups()
    {
        return $this->container['groups'];
    }

    /**
    * Sets groups
    *
    * @param \HuaweiCloud\SDK\Dli\V1\Model\JobResourcesGroup[]|null $groups JSON对象列表，填写用户组类型资源，格式详见请求示例。resources中的name未进行type校验，只要此分组中存在这个名字的包即可。
    *
    * @return $this
    */
    public function setGroups($groups)
    {
        $this->container['groups'] = $groups;
        return $this;
    }

    /**
    * Gets conf
    *  参数解释:   batch配置项 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return map[string,object]|null
    */
    public function getConf()
    {
        return $this->container['conf'];
    }

    /**
    * Sets conf
    *
    * @param map[string,object]|null $conf 参数解释:   batch配置项 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setConf($conf)
    {
        $this->container['conf'] = $conf;
        return $this;
    }

    /**
    * Gets name
    *  参数解释:   创建时用户指定的批处理名称 示例: TestDemo4 约束限制:  不超过128个字符的字符串 取值范围: 无 默认取值: 无
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
    * @param string|null $name 参数解释:   创建时用户指定的批处理名称 示例: TestDemo4 约束限制:  不超过128个字符的字符串 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets driverMemory
    *  参数解释:   Spark应用的Driver内存, 参数配置例如2G,2048M。该配置项会替换“sc_type”中对应的默认参数，使用时必需带单位，否则会启动失败 示例: 2G 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return string|null
    */
    public function getDriverMemory()
    {
        return $this->container['driverMemory'];
    }

    /**
    * Sets driverMemory
    *
    * @param string|null $driverMemory 参数解释:   Spark应用的Driver内存, 参数配置例如2G,2048M。该配置项会替换“sc_type”中对应的默认参数，使用时必需带单位，否则会启动失败 示例: 2G 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setDriverMemory($driverMemory)
    {
        $this->container['driverMemory'] = $driverMemory;
        return $this;
    }

    /**
    * Gets driverCores
    *  参数解释:   Spark应用Driver的CPU核数。该配置项会替换sc_type中对应的默认参数 示例: 8 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    *
    * @return int|null
    */
    public function getDriverCores()
    {
        return $this->container['driverCores'];
    }

    /**
    * Sets driverCores
    *
    * @param int|null $driverCores 参数解释:   Spark应用Driver的CPU核数。该配置项会替换sc_type中对应的默认参数 示例: 8 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    *
    * @return $this
    */
    public function setDriverCores($driverCores)
    {
        $this->container['driverCores'] = $driverCores;
        return $this;
    }

    /**
    * Gets executorMemory
    *  参数解释:   Spark应用的Executor内存, 参数配置例如2G,2048M。该配置项会替换“sc_type”中对应的默认参数，使用时必需带单位，否则会启动失败。 示例: 2G 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return string|null
    */
    public function getExecutorMemory()
    {
        return $this->container['executorMemory'];
    }

    /**
    * Sets executorMemory
    *
    * @param string|null $executorMemory 参数解释:   Spark应用的Executor内存, 参数配置例如2G,2048M。该配置项会替换“sc_type”中对应的默认参数，使用时必需带单位，否则会启动失败。 示例: 2G 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setExecutorMemory($executorMemory)
    {
        $this->container['executorMemory'] = $executorMemory;
        return $this;
    }

    /**
    * Gets executorCores
    *  参数解释:   Spark应用每个Executor的CPU核数。该配置项会替换sc_type中对应的默认参数 示例: 8 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    *
    * @return int|null
    */
    public function getExecutorCores()
    {
        return $this->container['executorCores'];
    }

    /**
    * Sets executorCores
    *
    * @param int|null $executorCores 参数解释:   Spark应用每个Executor的CPU核数。该配置项会替换sc_type中对应的默认参数 示例: 8 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    *
    * @return $this
    */
    public function setExecutorCores($executorCores)
    {
        $this->container['executorCores'] = $executorCores;
        return $this;
    }

    /**
    * Gets numExecutors
    *  参数解释:   Spark应用Executor的个数。该配置项会替换sc_type中对应的默认参数 示例: 6 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    *
    * @return int|null
    */
    public function getNumExecutors()
    {
        return $this->container['numExecutors'];
    }

    /**
    * Sets numExecutors
    *
    * @param int|null $numExecutors 参数解释:   Spark应用Executor的个数。该配置项会替换sc_type中对应的默认参数 示例: 6 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    *
    * @return $this
    */
    public function setNumExecutors($numExecutors)
    {
        $this->container['numExecutors'] = $numExecutors;
        return $this;
    }

    /**
    * Gets feature
    *  参数解释:   作业特性，作业运行在vm队列上支持basic，在container队列上支持basic、ai、custom，其中填写custom时需要同时填写image参数 示例: basic 约束限制:  无 取值范围: basic（基础型） ai（AI增强型） custom（自定义型） 默认取值: 无
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
    * @param string|null $feature 参数解释:   作业特性，作业运行在vm队列上支持basic，在container队列上支持basic、ai、custom，其中填写custom时需要同时填写image参数 示例: basic 约束限制:  无 取值范围: basic（基础型） ai（AI增强型） custom（自定义型） 默认取值: 无
    *
    * @return $this
    */
    public function setFeature($feature)
    {
        $this->container['feature'] = $feature;
        return $this;
    }

    /**
    * Gets sparkVersion
    *  参数解释:   作业使用spark组件的版本号，在feature为“basic”或“ai”时填写，若不填写，则使用默认的spark组件版本号2.3.2 示例: 2.3.2 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return string|null
    */
    public function getSparkVersion()
    {
        return $this->container['sparkVersion'];
    }

    /**
    * Sets sparkVersion
    *
    * @param string|null $sparkVersion 参数解释:   作业使用spark组件的版本号，在feature为“basic”或“ai”时填写，若不填写，则使用默认的spark组件版本号2.3.2 示例: 2.3.2 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setSparkVersion($sparkVersion)
    {
        $this->container['sparkVersion'] = $sparkVersion;
        return $this;
    }

    /**
    * Gets queue
    *  参数解释:   用于指定队列，填写已创建DLI的队列名 示例: gen_native 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return string|null
    */
    public function getQueue()
    {
        return $this->container['queue'];
    }

    /**
    * Sets queue
    *
    * @param string|null $queue 参数解释:   用于指定队列，填写已创建DLI的队列名 示例: gen_native 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setQueue($queue)
    {
        $this->container['queue'] = $queue;
        return $this;
    }

    /**
    * Gets autoRecovery
    *  参数解释:   是否开启重试功能，如果开启，可在Spark作业异常失败后自动重试 示例: false 约束限制:  无 取值范围: true,false 默认取值: false
    *
    * @return bool|null
    */
    public function getAutoRecovery()
    {
        return $this->container['autoRecovery'];
    }

    /**
    * Sets autoRecovery
    *
    * @param bool|null $autoRecovery 参数解释:   是否开启重试功能，如果开启，可在Spark作业异常失败后自动重试 示例: false 约束限制:  无 取值范围: true,false 默认取值: false
    *
    * @return $this
    */
    public function setAutoRecovery($autoRecovery)
    {
        $this->container['autoRecovery'] = $autoRecovery;
        return $this;
    }

    /**
    * Gets maxRetryTimes
    *  参数解释:   最大重试次数 示例: 100 约束限制:  无 取值范围: 大于等于0的整数 默认取值: false
    *
    * @return int|null
    */
    public function getMaxRetryTimes()
    {
        return $this->container['maxRetryTimes'];
    }

    /**
    * Sets maxRetryTimes
    *
    * @param int|null $maxRetryTimes 参数解释:   最大重试次数 示例: 100 约束限制:  无 取值范围: 大于等于0的整数 默认取值: false
    *
    * @return $this
    */
    public function setMaxRetryTimes($maxRetryTimes)
    {
        $this->container['maxRetryTimes'] = $maxRetryTimes;
        return $this;
    }

    /**
    * Gets image
    *  参数解释:   自定义镜像。格式为：组织名/镜像名:镜像版本。当用户设置“feature”为“custom”时，该参数生效。用户可通过与“feature”参数配合使用，指定作业运行使用自定义的Spark镜像。关于如何使用自定义镜像，请参考《数据湖探索用户指南》 示例: ceshi/spark_general-x86_64:3.3.1-2.3.7.1720240718867424736954752.tensorflow  约束限制:  无 取值范围: 无 默认取值: 无
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
    * @param string|null $image 参数解释:   自定义镜像。格式为：组织名/镜像名:镜像版本。当用户设置“feature”为“custom”时，该参数生效。用户可通过与“feature”参数配合使用，指定作业运行使用自定义的Spark镜像。关于如何使用自定义镜像，请参考《数据湖探索用户指南》 示例: ceshi/spark_general-x86_64:3.3.1-2.3.7.1720240718867424736954752.tensorflow  约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setImage($image)
    {
        $this->container['image'] = $image;
        return $this;
    }

    /**
    * Gets executionAgencyUrn
    *  参数解释:   授权给DLI的委托名。Spark3.3.1版本时支持配置该参数。 示例: agency 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return string|null
    */
    public function getExecutionAgencyUrn()
    {
        return $this->container['executionAgencyUrn'];
    }

    /**
    * Sets executionAgencyUrn
    *
    * @param string|null $executionAgencyUrn 参数解释:   授权给DLI的委托名。Spark3.3.1版本时支持配置该参数。 示例: agency 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setExecutionAgencyUrn($executionAgencyUrn)
    {
        $this->container['executionAgencyUrn'] = $executionAgencyUrn;
        return $this;
    }

    /**
    * Gets obsBucket
    *  参数解释:   保存Spark作业的obs桶，需要保存作业时配置该参数 示例: rain3 约束限制:  无 取值范围: 无 默认取值: 无
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
    * @param string|null $obsBucket 参数解释:   保存Spark作业的obs桶，需要保存作业时配置该参数 示例: rain3 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setObsBucket($obsBucket)
    {
        $this->container['obsBucket'] = $obsBucket;
        return $this;
    }

    /**
    * Gets catalogName
    *  访问元数据时，需要将该参数配置为dli。
    *
    * @return string|null
    */
    public function getCatalogName()
    {
        return $this->container['catalogName'];
    }

    /**
    * Sets catalogName
    *
    * @param string|null $catalogName 访问元数据时，需要将该参数配置为dli。
    *
    * @return $this
    */
    public function setCatalogName($catalogName)
    {
        $this->container['catalogName'] = $catalogName;
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

