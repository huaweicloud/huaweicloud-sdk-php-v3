<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Property implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Property';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  属性名称。 1.SQL类 HiveSQL、SparkSQL、DWSSQL、DLISQL、RDSSQL：   取值如下：     scriptName，脚本名称     database，数据库名称     connectionName，连接名称     scriptArgs，脚本参数，key、value形式，多个参数间用\\n分隔，例如key1=value1\\nkey2=value2 2.Host类 Shell Python   取值如下：     scriptName，脚本名称     connectionName，连接名称     arguments，脚本参数，key、value形式，多个参数间用\\n分隔，例如key1=value1\\nkey2=value2 3.CDMJob   取值如下：     clusterName，集群名称     jobName，作业名称 4.DISTransferTask   取值如下：     streamName，DIS通道名称     destinationType，转储目标     duplicatePolicy，转储任务重名处理策略     configuration，转储配置 5.OBSManager   取值如下：     action，动作类型     path，OBS路径 6.RESTAPI   取值如下：     url，URL地址     method，HTTP方法     headers, HTTP消息头，每个消息头的格式为<消息头名称>=<值>，多个消息头之间使用换行符分割。     body, 消息体 7.SMN   取值如下：     topic，SMN主题URN     subject，消息标题，给邮箱订阅者发送邮件时作为邮件主题。     messageType, 消息类型     message, 发送的消息。 8.MRSSpark、MapReduce   取值如下：     clusterName，集群名称     jobName，作业名称     resourcePath，自定义Jar包OBS资源路径     parameters，  Jar包自定义参数；对于开发的自定义Jar包，可以在此处对参数进行输入替换     input，输入路径     output，输出路径     programParameter，运行程序参数；允许多个key:value，多个参数要用竖线隔开。 9.DLISpark   取值如下：     clusterName，集群名称     jobName，作业名称     resourceType，DLI作业运行资源类型     sparkConfig，Spark作业运行参数     jobClass，主类名称。当应用程序类型为“.jar”时，主类名称不能为空。     jarArgs，主类入口参数     resourcePath，JAR包资源路径 10.MRSFlink   取值如下：     clusterName，集群名称     jobName，作业名称     flinkJobType，flink作业类型；FLink SQL作业或Flink JAR作业。     flinkJobProcessType，flink作业处理模式；批处理模式或流处理模式。     scriptName，脚本名称；Flink SQL关联的SQL脚本。     resourcePath，JAR包资源路径     input，输入路径     output，输出路径     programParameter，运行程序参数；允许多个key:value，多个参数要用竖线隔开。 11.MRS HetuEngine   取值如下：     clusterName，集群名称     jobName，作业名称     statementOrScript，脚本类型；SQL语句或关联SQL脚本     statement，自定义的SQL内容。     scriptName，选择关联的SQL脚本。     Data Warehouse，指定HetuEngine服务所需数据连接。     Schema，使用HetuEngine服务所要访问的数据源schema名称。     Database，使用HetuEngine服务所要访问的数据源database名称。     Queue，使用HetuEngine服务所需资源队列名称。
    * value  属性值
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'value' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  属性名称。 1.SQL类 HiveSQL、SparkSQL、DWSSQL、DLISQL、RDSSQL：   取值如下：     scriptName，脚本名称     database，数据库名称     connectionName，连接名称     scriptArgs，脚本参数，key、value形式，多个参数间用\\n分隔，例如key1=value1\\nkey2=value2 2.Host类 Shell Python   取值如下：     scriptName，脚本名称     connectionName，连接名称     arguments，脚本参数，key、value形式，多个参数间用\\n分隔，例如key1=value1\\nkey2=value2 3.CDMJob   取值如下：     clusterName，集群名称     jobName，作业名称 4.DISTransferTask   取值如下：     streamName，DIS通道名称     destinationType，转储目标     duplicatePolicy，转储任务重名处理策略     configuration，转储配置 5.OBSManager   取值如下：     action，动作类型     path，OBS路径 6.RESTAPI   取值如下：     url，URL地址     method，HTTP方法     headers, HTTP消息头，每个消息头的格式为<消息头名称>=<值>，多个消息头之间使用换行符分割。     body, 消息体 7.SMN   取值如下：     topic，SMN主题URN     subject，消息标题，给邮箱订阅者发送邮件时作为邮件主题。     messageType, 消息类型     message, 发送的消息。 8.MRSSpark、MapReduce   取值如下：     clusterName，集群名称     jobName，作业名称     resourcePath，自定义Jar包OBS资源路径     parameters，  Jar包自定义参数；对于开发的自定义Jar包，可以在此处对参数进行输入替换     input，输入路径     output，输出路径     programParameter，运行程序参数；允许多个key:value，多个参数要用竖线隔开。 9.DLISpark   取值如下：     clusterName，集群名称     jobName，作业名称     resourceType，DLI作业运行资源类型     sparkConfig，Spark作业运行参数     jobClass，主类名称。当应用程序类型为“.jar”时，主类名称不能为空。     jarArgs，主类入口参数     resourcePath，JAR包资源路径 10.MRSFlink   取值如下：     clusterName，集群名称     jobName，作业名称     flinkJobType，flink作业类型；FLink SQL作业或Flink JAR作业。     flinkJobProcessType，flink作业处理模式；批处理模式或流处理模式。     scriptName，脚本名称；Flink SQL关联的SQL脚本。     resourcePath，JAR包资源路径     input，输入路径     output，输出路径     programParameter，运行程序参数；允许多个key:value，多个参数要用竖线隔开。 11.MRS HetuEngine   取值如下：     clusterName，集群名称     jobName，作业名称     statementOrScript，脚本类型；SQL语句或关联SQL脚本     statement，自定义的SQL内容。     scriptName，选择关联的SQL脚本。     Data Warehouse，指定HetuEngine服务所需数据连接。     Schema，使用HetuEngine服务所要访问的数据源schema名称。     Database，使用HetuEngine服务所要访问的数据源database名称。     Queue，使用HetuEngine服务所需资源队列名称。
    * value  属性值
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'value' => null
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
    * name  属性名称。 1.SQL类 HiveSQL、SparkSQL、DWSSQL、DLISQL、RDSSQL：   取值如下：     scriptName，脚本名称     database，数据库名称     connectionName，连接名称     scriptArgs，脚本参数，key、value形式，多个参数间用\\n分隔，例如key1=value1\\nkey2=value2 2.Host类 Shell Python   取值如下：     scriptName，脚本名称     connectionName，连接名称     arguments，脚本参数，key、value形式，多个参数间用\\n分隔，例如key1=value1\\nkey2=value2 3.CDMJob   取值如下：     clusterName，集群名称     jobName，作业名称 4.DISTransferTask   取值如下：     streamName，DIS通道名称     destinationType，转储目标     duplicatePolicy，转储任务重名处理策略     configuration，转储配置 5.OBSManager   取值如下：     action，动作类型     path，OBS路径 6.RESTAPI   取值如下：     url，URL地址     method，HTTP方法     headers, HTTP消息头，每个消息头的格式为<消息头名称>=<值>，多个消息头之间使用换行符分割。     body, 消息体 7.SMN   取值如下：     topic，SMN主题URN     subject，消息标题，给邮箱订阅者发送邮件时作为邮件主题。     messageType, 消息类型     message, 发送的消息。 8.MRSSpark、MapReduce   取值如下：     clusterName，集群名称     jobName，作业名称     resourcePath，自定义Jar包OBS资源路径     parameters，  Jar包自定义参数；对于开发的自定义Jar包，可以在此处对参数进行输入替换     input，输入路径     output，输出路径     programParameter，运行程序参数；允许多个key:value，多个参数要用竖线隔开。 9.DLISpark   取值如下：     clusterName，集群名称     jobName，作业名称     resourceType，DLI作业运行资源类型     sparkConfig，Spark作业运行参数     jobClass，主类名称。当应用程序类型为“.jar”时，主类名称不能为空。     jarArgs，主类入口参数     resourcePath，JAR包资源路径 10.MRSFlink   取值如下：     clusterName，集群名称     jobName，作业名称     flinkJobType，flink作业类型；FLink SQL作业或Flink JAR作业。     flinkJobProcessType，flink作业处理模式；批处理模式或流处理模式。     scriptName，脚本名称；Flink SQL关联的SQL脚本。     resourcePath，JAR包资源路径     input，输入路径     output，输出路径     programParameter，运行程序参数；允许多个key:value，多个参数要用竖线隔开。 11.MRS HetuEngine   取值如下：     clusterName，集群名称     jobName，作业名称     statementOrScript，脚本类型；SQL语句或关联SQL脚本     statement，自定义的SQL内容。     scriptName，选择关联的SQL脚本。     Data Warehouse，指定HetuEngine服务所需数据连接。     Schema，使用HetuEngine服务所要访问的数据源schema名称。     Database，使用HetuEngine服务所要访问的数据源database名称。     Queue，使用HetuEngine服务所需资源队列名称。
    * value  属性值
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'value' => 'value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  属性名称。 1.SQL类 HiveSQL、SparkSQL、DWSSQL、DLISQL、RDSSQL：   取值如下：     scriptName，脚本名称     database，数据库名称     connectionName，连接名称     scriptArgs，脚本参数，key、value形式，多个参数间用\\n分隔，例如key1=value1\\nkey2=value2 2.Host类 Shell Python   取值如下：     scriptName，脚本名称     connectionName，连接名称     arguments，脚本参数，key、value形式，多个参数间用\\n分隔，例如key1=value1\\nkey2=value2 3.CDMJob   取值如下：     clusterName，集群名称     jobName，作业名称 4.DISTransferTask   取值如下：     streamName，DIS通道名称     destinationType，转储目标     duplicatePolicy，转储任务重名处理策略     configuration，转储配置 5.OBSManager   取值如下：     action，动作类型     path，OBS路径 6.RESTAPI   取值如下：     url，URL地址     method，HTTP方法     headers, HTTP消息头，每个消息头的格式为<消息头名称>=<值>，多个消息头之间使用换行符分割。     body, 消息体 7.SMN   取值如下：     topic，SMN主题URN     subject，消息标题，给邮箱订阅者发送邮件时作为邮件主题。     messageType, 消息类型     message, 发送的消息。 8.MRSSpark、MapReduce   取值如下：     clusterName，集群名称     jobName，作业名称     resourcePath，自定义Jar包OBS资源路径     parameters，  Jar包自定义参数；对于开发的自定义Jar包，可以在此处对参数进行输入替换     input，输入路径     output，输出路径     programParameter，运行程序参数；允许多个key:value，多个参数要用竖线隔开。 9.DLISpark   取值如下：     clusterName，集群名称     jobName，作业名称     resourceType，DLI作业运行资源类型     sparkConfig，Spark作业运行参数     jobClass，主类名称。当应用程序类型为“.jar”时，主类名称不能为空。     jarArgs，主类入口参数     resourcePath，JAR包资源路径 10.MRSFlink   取值如下：     clusterName，集群名称     jobName，作业名称     flinkJobType，flink作业类型；FLink SQL作业或Flink JAR作业。     flinkJobProcessType，flink作业处理模式；批处理模式或流处理模式。     scriptName，脚本名称；Flink SQL关联的SQL脚本。     resourcePath，JAR包资源路径     input，输入路径     output，输出路径     programParameter，运行程序参数；允许多个key:value，多个参数要用竖线隔开。 11.MRS HetuEngine   取值如下：     clusterName，集群名称     jobName，作业名称     statementOrScript，脚本类型；SQL语句或关联SQL脚本     statement，自定义的SQL内容。     scriptName，选择关联的SQL脚本。     Data Warehouse，指定HetuEngine服务所需数据连接。     Schema，使用HetuEngine服务所要访问的数据源schema名称。     Database，使用HetuEngine服务所要访问的数据源database名称。     Queue，使用HetuEngine服务所需资源队列名称。
    * value  属性值
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'value' => 'setValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  属性名称。 1.SQL类 HiveSQL、SparkSQL、DWSSQL、DLISQL、RDSSQL：   取值如下：     scriptName，脚本名称     database，数据库名称     connectionName，连接名称     scriptArgs，脚本参数，key、value形式，多个参数间用\\n分隔，例如key1=value1\\nkey2=value2 2.Host类 Shell Python   取值如下：     scriptName，脚本名称     connectionName，连接名称     arguments，脚本参数，key、value形式，多个参数间用\\n分隔，例如key1=value1\\nkey2=value2 3.CDMJob   取值如下：     clusterName，集群名称     jobName，作业名称 4.DISTransferTask   取值如下：     streamName，DIS通道名称     destinationType，转储目标     duplicatePolicy，转储任务重名处理策略     configuration，转储配置 5.OBSManager   取值如下：     action，动作类型     path，OBS路径 6.RESTAPI   取值如下：     url，URL地址     method，HTTP方法     headers, HTTP消息头，每个消息头的格式为<消息头名称>=<值>，多个消息头之间使用换行符分割。     body, 消息体 7.SMN   取值如下：     topic，SMN主题URN     subject，消息标题，给邮箱订阅者发送邮件时作为邮件主题。     messageType, 消息类型     message, 发送的消息。 8.MRSSpark、MapReduce   取值如下：     clusterName，集群名称     jobName，作业名称     resourcePath，自定义Jar包OBS资源路径     parameters，  Jar包自定义参数；对于开发的自定义Jar包，可以在此处对参数进行输入替换     input，输入路径     output，输出路径     programParameter，运行程序参数；允许多个key:value，多个参数要用竖线隔开。 9.DLISpark   取值如下：     clusterName，集群名称     jobName，作业名称     resourceType，DLI作业运行资源类型     sparkConfig，Spark作业运行参数     jobClass，主类名称。当应用程序类型为“.jar”时，主类名称不能为空。     jarArgs，主类入口参数     resourcePath，JAR包资源路径 10.MRSFlink   取值如下：     clusterName，集群名称     jobName，作业名称     flinkJobType，flink作业类型；FLink SQL作业或Flink JAR作业。     flinkJobProcessType，flink作业处理模式；批处理模式或流处理模式。     scriptName，脚本名称；Flink SQL关联的SQL脚本。     resourcePath，JAR包资源路径     input，输入路径     output，输出路径     programParameter，运行程序参数；允许多个key:value，多个参数要用竖线隔开。 11.MRS HetuEngine   取值如下：     clusterName，集群名称     jobName，作业名称     statementOrScript，脚本类型；SQL语句或关联SQL脚本     statement，自定义的SQL内容。     scriptName，选择关联的SQL脚本。     Data Warehouse，指定HetuEngine服务所需数据连接。     Schema，使用HetuEngine服务所要访问的数据源schema名称。     Database，使用HetuEngine服务所要访问的数据源database名称。     Queue，使用HetuEngine服务所需资源队列名称。
    * value  属性值
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'value' => 'getValue'
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
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    *  属性名称。 1.SQL类 HiveSQL、SparkSQL、DWSSQL、DLISQL、RDSSQL：   取值如下：     scriptName，脚本名称     database，数据库名称     connectionName，连接名称     scriptArgs，脚本参数，key、value形式，多个参数间用\\n分隔，例如key1=value1\\nkey2=value2 2.Host类 Shell Python   取值如下：     scriptName，脚本名称     connectionName，连接名称     arguments，脚本参数，key、value形式，多个参数间用\\n分隔，例如key1=value1\\nkey2=value2 3.CDMJob   取值如下：     clusterName，集群名称     jobName，作业名称 4.DISTransferTask   取值如下：     streamName，DIS通道名称     destinationType，转储目标     duplicatePolicy，转储任务重名处理策略     configuration，转储配置 5.OBSManager   取值如下：     action，动作类型     path，OBS路径 6.RESTAPI   取值如下：     url，URL地址     method，HTTP方法     headers, HTTP消息头，每个消息头的格式为<消息头名称>=<值>，多个消息头之间使用换行符分割。     body, 消息体 7.SMN   取值如下：     topic，SMN主题URN     subject，消息标题，给邮箱订阅者发送邮件时作为邮件主题。     messageType, 消息类型     message, 发送的消息。 8.MRSSpark、MapReduce   取值如下：     clusterName，集群名称     jobName，作业名称     resourcePath，自定义Jar包OBS资源路径     parameters，  Jar包自定义参数；对于开发的自定义Jar包，可以在此处对参数进行输入替换     input，输入路径     output，输出路径     programParameter，运行程序参数；允许多个key:value，多个参数要用竖线隔开。 9.DLISpark   取值如下：     clusterName，集群名称     jobName，作业名称     resourceType，DLI作业运行资源类型     sparkConfig，Spark作业运行参数     jobClass，主类名称。当应用程序类型为“.jar”时，主类名称不能为空。     jarArgs，主类入口参数     resourcePath，JAR包资源路径 10.MRSFlink   取值如下：     clusterName，集群名称     jobName，作业名称     flinkJobType，flink作业类型；FLink SQL作业或Flink JAR作业。     flinkJobProcessType，flink作业处理模式；批处理模式或流处理模式。     scriptName，脚本名称；Flink SQL关联的SQL脚本。     resourcePath，JAR包资源路径     input，输入路径     output，输出路径     programParameter，运行程序参数；允许多个key:value，多个参数要用竖线隔开。 11.MRS HetuEngine   取值如下：     clusterName，集群名称     jobName，作业名称     statementOrScript，脚本类型；SQL语句或关联SQL脚本     statement，自定义的SQL内容。     scriptName，选择关联的SQL脚本。     Data Warehouse，指定HetuEngine服务所需数据连接。     Schema，使用HetuEngine服务所要访问的数据源schema名称。     Database，使用HetuEngine服务所要访问的数据源database名称。     Queue，使用HetuEngine服务所需资源队列名称。
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
    * @param string|null $name 属性名称。 1.SQL类 HiveSQL、SparkSQL、DWSSQL、DLISQL、RDSSQL：   取值如下：     scriptName，脚本名称     database，数据库名称     connectionName，连接名称     scriptArgs，脚本参数，key、value形式，多个参数间用\\n分隔，例如key1=value1\\nkey2=value2 2.Host类 Shell Python   取值如下：     scriptName，脚本名称     connectionName，连接名称     arguments，脚本参数，key、value形式，多个参数间用\\n分隔，例如key1=value1\\nkey2=value2 3.CDMJob   取值如下：     clusterName，集群名称     jobName，作业名称 4.DISTransferTask   取值如下：     streamName，DIS通道名称     destinationType，转储目标     duplicatePolicy，转储任务重名处理策略     configuration，转储配置 5.OBSManager   取值如下：     action，动作类型     path，OBS路径 6.RESTAPI   取值如下：     url，URL地址     method，HTTP方法     headers, HTTP消息头，每个消息头的格式为<消息头名称>=<值>，多个消息头之间使用换行符分割。     body, 消息体 7.SMN   取值如下：     topic，SMN主题URN     subject，消息标题，给邮箱订阅者发送邮件时作为邮件主题。     messageType, 消息类型     message, 发送的消息。 8.MRSSpark、MapReduce   取值如下：     clusterName，集群名称     jobName，作业名称     resourcePath，自定义Jar包OBS资源路径     parameters，  Jar包自定义参数；对于开发的自定义Jar包，可以在此处对参数进行输入替换     input，输入路径     output，输出路径     programParameter，运行程序参数；允许多个key:value，多个参数要用竖线隔开。 9.DLISpark   取值如下：     clusterName，集群名称     jobName，作业名称     resourceType，DLI作业运行资源类型     sparkConfig，Spark作业运行参数     jobClass，主类名称。当应用程序类型为“.jar”时，主类名称不能为空。     jarArgs，主类入口参数     resourcePath，JAR包资源路径 10.MRSFlink   取值如下：     clusterName，集群名称     jobName，作业名称     flinkJobType，flink作业类型；FLink SQL作业或Flink JAR作业。     flinkJobProcessType，flink作业处理模式；批处理模式或流处理模式。     scriptName，脚本名称；Flink SQL关联的SQL脚本。     resourcePath，JAR包资源路径     input，输入路径     output，输出路径     programParameter，运行程序参数；允许多个key:value，多个参数要用竖线隔开。 11.MRS HetuEngine   取值如下：     clusterName，集群名称     jobName，作业名称     statementOrScript，脚本类型；SQL语句或关联SQL脚本     statement，自定义的SQL内容。     scriptName，选择关联的SQL脚本。     Data Warehouse，指定HetuEngine服务所需数据连接。     Schema，使用HetuEngine服务所要访问的数据源schema名称。     Database，使用HetuEngine服务所要访问的数据源database名称。     Queue，使用HetuEngine服务所需资源队列名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets value
    *  属性值
    *
    * @return string|null
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param string|null $value 属性值
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
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

