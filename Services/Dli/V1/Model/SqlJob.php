<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SqlJob implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SqlJob';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  参数解释:  作业ID 示例: 6d2146a0-c2d5-41bd-8ca0-ca9694ada992 约束限制:  无 取值范围: 无 默认取值: 无
    * jobType  参数解释:  指定查询的作业类型，包含DDL、DCL、IMPORT、EXPORT、QUERY、INSERT、DATA_MIGRATION、UPDATE、DELETE、RESTART_QUEUE、SCALE_QUEUE，若要查询所有类型的作业，则传入ALL。 示例: QUERY 约束限制:  无 取值范围: DDL、DCL、IMPORT、EXPORT、QUERY、INSERT、DATA_MIGRATION、UPDATE、DELETE、RESTART_QUEUE、SCALE_QUEUE、ALL 默认取值: 无
    * queueName  作业提交的对列 示例: ci_sql 约束限制:  无 取值范围: 无 默认取值: 无
    * owner  提交作业的用户 示例: tenant1 约束限制:  无 取值范围: 无 默认取值: 无
    * startTime  作业开始的时间。是单位为“毫秒”的时间戳 示例: 1502349803729 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * duration  作业运行时长，单位毫秒 示例: 30000 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * status  此作业的当前状态 示例: CANCELLED 约束限制:  无 取值范围: LAUNCHING（提交中） RUNNING（运行中） FINISHED（完成） FAILED（失败） CANCELLED（取消） 默认取值: 无
    * inputRowCount  Insert作业执行过程中扫描的记录条数 示例: 66 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * badRowCount  Insert作业执行过程中扫描到的错误记录数 示例: 666 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * inputSize  作业执行过程中扫描文件的大小 示例: 5 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * resultCount  当前作业返回的结果总条数或insert作业插入的总条数 示例: 55 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * databaseName  记录其操作的表所在的数据库名称。类型为Import和Export作业才有“database_name”属性 示例: db2 约束限制:  无 取值范围: 无 默认取值: 无
    * tableName  记录其操作的表名称。类型为Import和Export作业才有“table_name”属性 示例: t2 约束限制:  无 取值范围: 无 默认取值: 无
    * withColumnHeader  Import类型的作业，记录其导入的数据是否包括列名 示例: true 约束限制:  无 取值范围: true, false 默认取值: 无
    * detail  SQL查询的相关列信息的Json字符串 示例: {\\\"type\\\":\\\"struct\\\",\\\"fields\\\":[{\\\"name\\\":\\\"name\\\",\\\"type\\\":\\\"string\\\",\\\"nullable\\\":true,\\\"metadata\\\":{}},{\\\"name\\\":\\\"age\\\",\\\"type\\\":\\\"integer\\\",\\\"nullable\\\":true,\\\"metadata\\\":{}}]} 约束限制:  符合Json格式的字符串 取值范围: 无 默认取值: 无
    * engineType  引擎类型 示例: spark 约束限制:  无 取值范围: spark, hetuEngine 默认取值: 无
    * statement  作业执行的SQL语句 示例: select * from t_json_002 约束限制:  无 取值范围: 无 默认取值: 无
    * tags  作业标签
    * message  系统提示信息 示例: Navicat Data Modeler enables you to build high-quality conceptual, logical and physical data models for a wide variety of audiences. Navicat 15 has added support for the system-wide dark mode. Creativity is intelligence having fun. The On Startup feature allows you to control what tabs appear when you launch Navicat. In the Objects tab, you can use the List List, Detail Detail and ER Diagram ER Diagram buttons to change the object view. If your Internet Service Provider (ISP) does not provide direct access to its server, Secure Tunneling Protocol (SSH) / HTTP is another solution. A man’s best friends are his ten fingers. Export Wizard allows you to export data from tables, collections, views, or query results to any available formats. Navicat 15 has added support for the system-wide dark mode. Secure Sockets Layer(SSL) is a protocol for transmitting private documents via the Internet. A man’s best friends are his ten fingers. Navicat Monitor is a safe, simple and agentless remote server monitoring tool that is packed with powerful features to make your monitoring effective as possible. The past has no power over the present moment. Such sessions are also susceptible to session hijacking, where a malicious user takes over your session once you have authenticated. A man is not old until regrets take the place of dreams. Secure SHell (SSH) is a program to log in into another computer over a network, execute commands on a remote server, and move files from one machine to another. Secure SHell (SSH) is a program to log in into another computer over a network, execute commands on a remote server, and move files from one machine to another. Champions keep playing until they get it right. All journeys have secret destinations of which the traveler is unaware. Flexible settings enable you to set up a custom key for comparison and synchronization. Navicat authorizes you to make connection to remote servers running on different platforms (i.e. Windows, macOS, Linux and UNIX), and supports PAM and GSSAPI authentication. To successfully establish a new connection to local/remote server - no matter via SSL, SSH or HTTP, set the database login information in the General tab. It can also manage cloud databases such as Amazon Redshift, Amazon RDS, Alibaba Cloud. Features in Navicat are sophisticated enough to provide professional developers for all their specific needs, yet easy to learn for users who are new to database server. After logged in the Navicat Cloud feature, the Navigation pane will be divided into Navicat Cloud and My Connections sections. 约束限制:  无 取值范围: 无 默认取值: 无
    * endTime  作业结束的时间。是单位为“毫秒”的时间戳 示例: 1502349803729 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * cpuCost  作业的CPU累计使用量 示例: 15376 约束限制:  无 取值范围: 无 默认取值: 无
    * outputByte  作业的输出字节数 示例: 35 约束限制:  无 取值范围: 无 默认取值: 无
    * resultPath  作业结果的存储路径。
    * resultFormat  作业结果的存储格式，当前只支持csv
    * executionDetailsPath  作业执行计划的存储路径。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'string',
            'jobType' => 'string',
            'queueName' => 'string',
            'owner' => 'string',
            'startTime' => 'int',
            'duration' => 'int',
            'status' => 'string',
            'inputRowCount' => 'int',
            'badRowCount' => 'int',
            'inputSize' => 'int',
            'resultCount' => 'int',
            'databaseName' => 'string',
            'tableName' => 'string',
            'withColumnHeader' => 'bool',
            'detail' => 'string',
            'engineType' => 'string',
            'statement' => 'string',
            'tags' => '\HuaweiCloud\SDK\Dli\V1\Model\Tag[]',
            'message' => 'string',
            'endTime' => 'int',
            'cpuCost' => 'string',
            'outputByte' => 'string',
            'resultPath' => 'string',
            'resultFormat' => 'string',
            'executionDetailsPath' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  参数解释:  作业ID 示例: 6d2146a0-c2d5-41bd-8ca0-ca9694ada992 约束限制:  无 取值范围: 无 默认取值: 无
    * jobType  参数解释:  指定查询的作业类型，包含DDL、DCL、IMPORT、EXPORT、QUERY、INSERT、DATA_MIGRATION、UPDATE、DELETE、RESTART_QUEUE、SCALE_QUEUE，若要查询所有类型的作业，则传入ALL。 示例: QUERY 约束限制:  无 取值范围: DDL、DCL、IMPORT、EXPORT、QUERY、INSERT、DATA_MIGRATION、UPDATE、DELETE、RESTART_QUEUE、SCALE_QUEUE、ALL 默认取值: 无
    * queueName  作业提交的对列 示例: ci_sql 约束限制:  无 取值范围: 无 默认取值: 无
    * owner  提交作业的用户 示例: tenant1 约束限制:  无 取值范围: 无 默认取值: 无
    * startTime  作业开始的时间。是单位为“毫秒”的时间戳 示例: 1502349803729 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * duration  作业运行时长，单位毫秒 示例: 30000 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * status  此作业的当前状态 示例: CANCELLED 约束限制:  无 取值范围: LAUNCHING（提交中） RUNNING（运行中） FINISHED（完成） FAILED（失败） CANCELLED（取消） 默认取值: 无
    * inputRowCount  Insert作业执行过程中扫描的记录条数 示例: 66 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * badRowCount  Insert作业执行过程中扫描到的错误记录数 示例: 666 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * inputSize  作业执行过程中扫描文件的大小 示例: 5 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * resultCount  当前作业返回的结果总条数或insert作业插入的总条数 示例: 55 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * databaseName  记录其操作的表所在的数据库名称。类型为Import和Export作业才有“database_name”属性 示例: db2 约束限制:  无 取值范围: 无 默认取值: 无
    * tableName  记录其操作的表名称。类型为Import和Export作业才有“table_name”属性 示例: t2 约束限制:  无 取值范围: 无 默认取值: 无
    * withColumnHeader  Import类型的作业，记录其导入的数据是否包括列名 示例: true 约束限制:  无 取值范围: true, false 默认取值: 无
    * detail  SQL查询的相关列信息的Json字符串 示例: {\\\"type\\\":\\\"struct\\\",\\\"fields\\\":[{\\\"name\\\":\\\"name\\\",\\\"type\\\":\\\"string\\\",\\\"nullable\\\":true,\\\"metadata\\\":{}},{\\\"name\\\":\\\"age\\\",\\\"type\\\":\\\"integer\\\",\\\"nullable\\\":true,\\\"metadata\\\":{}}]} 约束限制:  符合Json格式的字符串 取值范围: 无 默认取值: 无
    * engineType  引擎类型 示例: spark 约束限制:  无 取值范围: spark, hetuEngine 默认取值: 无
    * statement  作业执行的SQL语句 示例: select * from t_json_002 约束限制:  无 取值范围: 无 默认取值: 无
    * tags  作业标签
    * message  系统提示信息 示例: Navicat Data Modeler enables you to build high-quality conceptual, logical and physical data models for a wide variety of audiences. Navicat 15 has added support for the system-wide dark mode. Creativity is intelligence having fun. The On Startup feature allows you to control what tabs appear when you launch Navicat. In the Objects tab, you can use the List List, Detail Detail and ER Diagram ER Diagram buttons to change the object view. If your Internet Service Provider (ISP) does not provide direct access to its server, Secure Tunneling Protocol (SSH) / HTTP is another solution. A man’s best friends are his ten fingers. Export Wizard allows you to export data from tables, collections, views, or query results to any available formats. Navicat 15 has added support for the system-wide dark mode. Secure Sockets Layer(SSL) is a protocol for transmitting private documents via the Internet. A man’s best friends are his ten fingers. Navicat Monitor is a safe, simple and agentless remote server monitoring tool that is packed with powerful features to make your monitoring effective as possible. The past has no power over the present moment. Such sessions are also susceptible to session hijacking, where a malicious user takes over your session once you have authenticated. A man is not old until regrets take the place of dreams. Secure SHell (SSH) is a program to log in into another computer over a network, execute commands on a remote server, and move files from one machine to another. Secure SHell (SSH) is a program to log in into another computer over a network, execute commands on a remote server, and move files from one machine to another. Champions keep playing until they get it right. All journeys have secret destinations of which the traveler is unaware. Flexible settings enable you to set up a custom key for comparison and synchronization. Navicat authorizes you to make connection to remote servers running on different platforms (i.e. Windows, macOS, Linux and UNIX), and supports PAM and GSSAPI authentication. To successfully establish a new connection to local/remote server - no matter via SSL, SSH or HTTP, set the database login information in the General tab. It can also manage cloud databases such as Amazon Redshift, Amazon RDS, Alibaba Cloud. Features in Navicat are sophisticated enough to provide professional developers for all their specific needs, yet easy to learn for users who are new to database server. After logged in the Navicat Cloud feature, the Navigation pane will be divided into Navicat Cloud and My Connections sections. 约束限制:  无 取值范围: 无 默认取值: 无
    * endTime  作业结束的时间。是单位为“毫秒”的时间戳 示例: 1502349803729 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * cpuCost  作业的CPU累计使用量 示例: 15376 约束限制:  无 取值范围: 无 默认取值: 无
    * outputByte  作业的输出字节数 示例: 35 约束限制:  无 取值范围: 无 默认取值: 无
    * resultPath  作业结果的存储路径。
    * resultFormat  作业结果的存储格式，当前只支持csv
    * executionDetailsPath  作业执行计划的存储路径。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => null,
        'jobType' => null,
        'queueName' => null,
        'owner' => null,
        'startTime' => 'int64',
        'duration' => 'int64',
        'status' => null,
        'inputRowCount' => 'int64',
        'badRowCount' => 'int64',
        'inputSize' => 'int64',
        'resultCount' => 'int64',
        'databaseName' => null,
        'tableName' => null,
        'withColumnHeader' => null,
        'detail' => null,
        'engineType' => null,
        'statement' => null,
        'tags' => null,
        'message' => null,
        'endTime' => 'int64',
        'cpuCost' => null,
        'outputByte' => null,
        'resultPath' => null,
        'resultFormat' => null,
        'executionDetailsPath' => null
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
    * jobId  参数解释:  作业ID 示例: 6d2146a0-c2d5-41bd-8ca0-ca9694ada992 约束限制:  无 取值范围: 无 默认取值: 无
    * jobType  参数解释:  指定查询的作业类型，包含DDL、DCL、IMPORT、EXPORT、QUERY、INSERT、DATA_MIGRATION、UPDATE、DELETE、RESTART_QUEUE、SCALE_QUEUE，若要查询所有类型的作业，则传入ALL。 示例: QUERY 约束限制:  无 取值范围: DDL、DCL、IMPORT、EXPORT、QUERY、INSERT、DATA_MIGRATION、UPDATE、DELETE、RESTART_QUEUE、SCALE_QUEUE、ALL 默认取值: 无
    * queueName  作业提交的对列 示例: ci_sql 约束限制:  无 取值范围: 无 默认取值: 无
    * owner  提交作业的用户 示例: tenant1 约束限制:  无 取值范围: 无 默认取值: 无
    * startTime  作业开始的时间。是单位为“毫秒”的时间戳 示例: 1502349803729 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * duration  作业运行时长，单位毫秒 示例: 30000 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * status  此作业的当前状态 示例: CANCELLED 约束限制:  无 取值范围: LAUNCHING（提交中） RUNNING（运行中） FINISHED（完成） FAILED（失败） CANCELLED（取消） 默认取值: 无
    * inputRowCount  Insert作业执行过程中扫描的记录条数 示例: 66 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * badRowCount  Insert作业执行过程中扫描到的错误记录数 示例: 666 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * inputSize  作业执行过程中扫描文件的大小 示例: 5 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * resultCount  当前作业返回的结果总条数或insert作业插入的总条数 示例: 55 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * databaseName  记录其操作的表所在的数据库名称。类型为Import和Export作业才有“database_name”属性 示例: db2 约束限制:  无 取值范围: 无 默认取值: 无
    * tableName  记录其操作的表名称。类型为Import和Export作业才有“table_name”属性 示例: t2 约束限制:  无 取值范围: 无 默认取值: 无
    * withColumnHeader  Import类型的作业，记录其导入的数据是否包括列名 示例: true 约束限制:  无 取值范围: true, false 默认取值: 无
    * detail  SQL查询的相关列信息的Json字符串 示例: {\\\"type\\\":\\\"struct\\\",\\\"fields\\\":[{\\\"name\\\":\\\"name\\\",\\\"type\\\":\\\"string\\\",\\\"nullable\\\":true,\\\"metadata\\\":{}},{\\\"name\\\":\\\"age\\\",\\\"type\\\":\\\"integer\\\",\\\"nullable\\\":true,\\\"metadata\\\":{}}]} 约束限制:  符合Json格式的字符串 取值范围: 无 默认取值: 无
    * engineType  引擎类型 示例: spark 约束限制:  无 取值范围: spark, hetuEngine 默认取值: 无
    * statement  作业执行的SQL语句 示例: select * from t_json_002 约束限制:  无 取值范围: 无 默认取值: 无
    * tags  作业标签
    * message  系统提示信息 示例: Navicat Data Modeler enables you to build high-quality conceptual, logical and physical data models for a wide variety of audiences. Navicat 15 has added support for the system-wide dark mode. Creativity is intelligence having fun. The On Startup feature allows you to control what tabs appear when you launch Navicat. In the Objects tab, you can use the List List, Detail Detail and ER Diagram ER Diagram buttons to change the object view. If your Internet Service Provider (ISP) does not provide direct access to its server, Secure Tunneling Protocol (SSH) / HTTP is another solution. A man’s best friends are his ten fingers. Export Wizard allows you to export data from tables, collections, views, or query results to any available formats. Navicat 15 has added support for the system-wide dark mode. Secure Sockets Layer(SSL) is a protocol for transmitting private documents via the Internet. A man’s best friends are his ten fingers. Navicat Monitor is a safe, simple and agentless remote server monitoring tool that is packed with powerful features to make your monitoring effective as possible. The past has no power over the present moment. Such sessions are also susceptible to session hijacking, where a malicious user takes over your session once you have authenticated. A man is not old until regrets take the place of dreams. Secure SHell (SSH) is a program to log in into another computer over a network, execute commands on a remote server, and move files from one machine to another. Secure SHell (SSH) is a program to log in into another computer over a network, execute commands on a remote server, and move files from one machine to another. Champions keep playing until they get it right. All journeys have secret destinations of which the traveler is unaware. Flexible settings enable you to set up a custom key for comparison and synchronization. Navicat authorizes you to make connection to remote servers running on different platforms (i.e. Windows, macOS, Linux and UNIX), and supports PAM and GSSAPI authentication. To successfully establish a new connection to local/remote server - no matter via SSL, SSH or HTTP, set the database login information in the General tab. It can also manage cloud databases such as Amazon Redshift, Amazon RDS, Alibaba Cloud. Features in Navicat are sophisticated enough to provide professional developers for all their specific needs, yet easy to learn for users who are new to database server. After logged in the Navicat Cloud feature, the Navigation pane will be divided into Navicat Cloud and My Connections sections. 约束限制:  无 取值范围: 无 默认取值: 无
    * endTime  作业结束的时间。是单位为“毫秒”的时间戳 示例: 1502349803729 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * cpuCost  作业的CPU累计使用量 示例: 15376 约束限制:  无 取值范围: 无 默认取值: 无
    * outputByte  作业的输出字节数 示例: 35 约束限制:  无 取值范围: 无 默认取值: 无
    * resultPath  作业结果的存储路径。
    * resultFormat  作业结果的存储格式，当前只支持csv
    * executionDetailsPath  作业执行计划的存储路径。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'jobType' => 'job_type',
            'queueName' => 'queue_name',
            'owner' => 'owner',
            'startTime' => 'start_time',
            'duration' => 'duration',
            'status' => 'status',
            'inputRowCount' => 'input_row_count',
            'badRowCount' => 'bad_row_count',
            'inputSize' => 'input_size',
            'resultCount' => 'result_count',
            'databaseName' => 'database_name',
            'tableName' => 'table_name',
            'withColumnHeader' => 'with_column_header',
            'detail' => 'detail',
            'engineType' => 'engine_type',
            'statement' => 'statement',
            'tags' => 'tags',
            'message' => 'message',
            'endTime' => 'end_time',
            'cpuCost' => 'cpu_cost',
            'outputByte' => 'output_byte',
            'resultPath' => 'result_path',
            'resultFormat' => 'result_format',
            'executionDetailsPath' => 'execution_details_path'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  参数解释:  作业ID 示例: 6d2146a0-c2d5-41bd-8ca0-ca9694ada992 约束限制:  无 取值范围: 无 默认取值: 无
    * jobType  参数解释:  指定查询的作业类型，包含DDL、DCL、IMPORT、EXPORT、QUERY、INSERT、DATA_MIGRATION、UPDATE、DELETE、RESTART_QUEUE、SCALE_QUEUE，若要查询所有类型的作业，则传入ALL。 示例: QUERY 约束限制:  无 取值范围: DDL、DCL、IMPORT、EXPORT、QUERY、INSERT、DATA_MIGRATION、UPDATE、DELETE、RESTART_QUEUE、SCALE_QUEUE、ALL 默认取值: 无
    * queueName  作业提交的对列 示例: ci_sql 约束限制:  无 取值范围: 无 默认取值: 无
    * owner  提交作业的用户 示例: tenant1 约束限制:  无 取值范围: 无 默认取值: 无
    * startTime  作业开始的时间。是单位为“毫秒”的时间戳 示例: 1502349803729 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * duration  作业运行时长，单位毫秒 示例: 30000 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * status  此作业的当前状态 示例: CANCELLED 约束限制:  无 取值范围: LAUNCHING（提交中） RUNNING（运行中） FINISHED（完成） FAILED（失败） CANCELLED（取消） 默认取值: 无
    * inputRowCount  Insert作业执行过程中扫描的记录条数 示例: 66 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * badRowCount  Insert作业执行过程中扫描到的错误记录数 示例: 666 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * inputSize  作业执行过程中扫描文件的大小 示例: 5 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * resultCount  当前作业返回的结果总条数或insert作业插入的总条数 示例: 55 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * databaseName  记录其操作的表所在的数据库名称。类型为Import和Export作业才有“database_name”属性 示例: db2 约束限制:  无 取值范围: 无 默认取值: 无
    * tableName  记录其操作的表名称。类型为Import和Export作业才有“table_name”属性 示例: t2 约束限制:  无 取值范围: 无 默认取值: 无
    * withColumnHeader  Import类型的作业，记录其导入的数据是否包括列名 示例: true 约束限制:  无 取值范围: true, false 默认取值: 无
    * detail  SQL查询的相关列信息的Json字符串 示例: {\\\"type\\\":\\\"struct\\\",\\\"fields\\\":[{\\\"name\\\":\\\"name\\\",\\\"type\\\":\\\"string\\\",\\\"nullable\\\":true,\\\"metadata\\\":{}},{\\\"name\\\":\\\"age\\\",\\\"type\\\":\\\"integer\\\",\\\"nullable\\\":true,\\\"metadata\\\":{}}]} 约束限制:  符合Json格式的字符串 取值范围: 无 默认取值: 无
    * engineType  引擎类型 示例: spark 约束限制:  无 取值范围: spark, hetuEngine 默认取值: 无
    * statement  作业执行的SQL语句 示例: select * from t_json_002 约束限制:  无 取值范围: 无 默认取值: 无
    * tags  作业标签
    * message  系统提示信息 示例: Navicat Data Modeler enables you to build high-quality conceptual, logical and physical data models for a wide variety of audiences. Navicat 15 has added support for the system-wide dark mode. Creativity is intelligence having fun. The On Startup feature allows you to control what tabs appear when you launch Navicat. In the Objects tab, you can use the List List, Detail Detail and ER Diagram ER Diagram buttons to change the object view. If your Internet Service Provider (ISP) does not provide direct access to its server, Secure Tunneling Protocol (SSH) / HTTP is another solution. A man’s best friends are his ten fingers. Export Wizard allows you to export data from tables, collections, views, or query results to any available formats. Navicat 15 has added support for the system-wide dark mode. Secure Sockets Layer(SSL) is a protocol for transmitting private documents via the Internet. A man’s best friends are his ten fingers. Navicat Monitor is a safe, simple and agentless remote server monitoring tool that is packed with powerful features to make your monitoring effective as possible. The past has no power over the present moment. Such sessions are also susceptible to session hijacking, where a malicious user takes over your session once you have authenticated. A man is not old until regrets take the place of dreams. Secure SHell (SSH) is a program to log in into another computer over a network, execute commands on a remote server, and move files from one machine to another. Secure SHell (SSH) is a program to log in into another computer over a network, execute commands on a remote server, and move files from one machine to another. Champions keep playing until they get it right. All journeys have secret destinations of which the traveler is unaware. Flexible settings enable you to set up a custom key for comparison and synchronization. Navicat authorizes you to make connection to remote servers running on different platforms (i.e. Windows, macOS, Linux and UNIX), and supports PAM and GSSAPI authentication. To successfully establish a new connection to local/remote server - no matter via SSL, SSH or HTTP, set the database login information in the General tab. It can also manage cloud databases such as Amazon Redshift, Amazon RDS, Alibaba Cloud. Features in Navicat are sophisticated enough to provide professional developers for all their specific needs, yet easy to learn for users who are new to database server. After logged in the Navicat Cloud feature, the Navigation pane will be divided into Navicat Cloud and My Connections sections. 约束限制:  无 取值范围: 无 默认取值: 无
    * endTime  作业结束的时间。是单位为“毫秒”的时间戳 示例: 1502349803729 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * cpuCost  作业的CPU累计使用量 示例: 15376 约束限制:  无 取值范围: 无 默认取值: 无
    * outputByte  作业的输出字节数 示例: 35 约束限制:  无 取值范围: 无 默认取值: 无
    * resultPath  作业结果的存储路径。
    * resultFormat  作业结果的存储格式，当前只支持csv
    * executionDetailsPath  作业执行计划的存储路径。
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'jobType' => 'setJobType',
            'queueName' => 'setQueueName',
            'owner' => 'setOwner',
            'startTime' => 'setStartTime',
            'duration' => 'setDuration',
            'status' => 'setStatus',
            'inputRowCount' => 'setInputRowCount',
            'badRowCount' => 'setBadRowCount',
            'inputSize' => 'setInputSize',
            'resultCount' => 'setResultCount',
            'databaseName' => 'setDatabaseName',
            'tableName' => 'setTableName',
            'withColumnHeader' => 'setWithColumnHeader',
            'detail' => 'setDetail',
            'engineType' => 'setEngineType',
            'statement' => 'setStatement',
            'tags' => 'setTags',
            'message' => 'setMessage',
            'endTime' => 'setEndTime',
            'cpuCost' => 'setCpuCost',
            'outputByte' => 'setOutputByte',
            'resultPath' => 'setResultPath',
            'resultFormat' => 'setResultFormat',
            'executionDetailsPath' => 'setExecutionDetailsPath'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  参数解释:  作业ID 示例: 6d2146a0-c2d5-41bd-8ca0-ca9694ada992 约束限制:  无 取值范围: 无 默认取值: 无
    * jobType  参数解释:  指定查询的作业类型，包含DDL、DCL、IMPORT、EXPORT、QUERY、INSERT、DATA_MIGRATION、UPDATE、DELETE、RESTART_QUEUE、SCALE_QUEUE，若要查询所有类型的作业，则传入ALL。 示例: QUERY 约束限制:  无 取值范围: DDL、DCL、IMPORT、EXPORT、QUERY、INSERT、DATA_MIGRATION、UPDATE、DELETE、RESTART_QUEUE、SCALE_QUEUE、ALL 默认取值: 无
    * queueName  作业提交的对列 示例: ci_sql 约束限制:  无 取值范围: 无 默认取值: 无
    * owner  提交作业的用户 示例: tenant1 约束限制:  无 取值范围: 无 默认取值: 无
    * startTime  作业开始的时间。是单位为“毫秒”的时间戳 示例: 1502349803729 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * duration  作业运行时长，单位毫秒 示例: 30000 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * status  此作业的当前状态 示例: CANCELLED 约束限制:  无 取值范围: LAUNCHING（提交中） RUNNING（运行中） FINISHED（完成） FAILED（失败） CANCELLED（取消） 默认取值: 无
    * inputRowCount  Insert作业执行过程中扫描的记录条数 示例: 66 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * badRowCount  Insert作业执行过程中扫描到的错误记录数 示例: 666 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * inputSize  作业执行过程中扫描文件的大小 示例: 5 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * resultCount  当前作业返回的结果总条数或insert作业插入的总条数 示例: 55 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * databaseName  记录其操作的表所在的数据库名称。类型为Import和Export作业才有“database_name”属性 示例: db2 约束限制:  无 取值范围: 无 默认取值: 无
    * tableName  记录其操作的表名称。类型为Import和Export作业才有“table_name”属性 示例: t2 约束限制:  无 取值范围: 无 默认取值: 无
    * withColumnHeader  Import类型的作业，记录其导入的数据是否包括列名 示例: true 约束限制:  无 取值范围: true, false 默认取值: 无
    * detail  SQL查询的相关列信息的Json字符串 示例: {\\\"type\\\":\\\"struct\\\",\\\"fields\\\":[{\\\"name\\\":\\\"name\\\",\\\"type\\\":\\\"string\\\",\\\"nullable\\\":true,\\\"metadata\\\":{}},{\\\"name\\\":\\\"age\\\",\\\"type\\\":\\\"integer\\\",\\\"nullable\\\":true,\\\"metadata\\\":{}}]} 约束限制:  符合Json格式的字符串 取值范围: 无 默认取值: 无
    * engineType  引擎类型 示例: spark 约束限制:  无 取值范围: spark, hetuEngine 默认取值: 无
    * statement  作业执行的SQL语句 示例: select * from t_json_002 约束限制:  无 取值范围: 无 默认取值: 无
    * tags  作业标签
    * message  系统提示信息 示例: Navicat Data Modeler enables you to build high-quality conceptual, logical and physical data models for a wide variety of audiences. Navicat 15 has added support for the system-wide dark mode. Creativity is intelligence having fun. The On Startup feature allows you to control what tabs appear when you launch Navicat. In the Objects tab, you can use the List List, Detail Detail and ER Diagram ER Diagram buttons to change the object view. If your Internet Service Provider (ISP) does not provide direct access to its server, Secure Tunneling Protocol (SSH) / HTTP is another solution. A man’s best friends are his ten fingers. Export Wizard allows you to export data from tables, collections, views, or query results to any available formats. Navicat 15 has added support for the system-wide dark mode. Secure Sockets Layer(SSL) is a protocol for transmitting private documents via the Internet. A man’s best friends are his ten fingers. Navicat Monitor is a safe, simple and agentless remote server monitoring tool that is packed with powerful features to make your monitoring effective as possible. The past has no power over the present moment. Such sessions are also susceptible to session hijacking, where a malicious user takes over your session once you have authenticated. A man is not old until regrets take the place of dreams. Secure SHell (SSH) is a program to log in into another computer over a network, execute commands on a remote server, and move files from one machine to another. Secure SHell (SSH) is a program to log in into another computer over a network, execute commands on a remote server, and move files from one machine to another. Champions keep playing until they get it right. All journeys have secret destinations of which the traveler is unaware. Flexible settings enable you to set up a custom key for comparison and synchronization. Navicat authorizes you to make connection to remote servers running on different platforms (i.e. Windows, macOS, Linux and UNIX), and supports PAM and GSSAPI authentication. To successfully establish a new connection to local/remote server - no matter via SSL, SSH or HTTP, set the database login information in the General tab. It can also manage cloud databases such as Amazon Redshift, Amazon RDS, Alibaba Cloud. Features in Navicat are sophisticated enough to provide professional developers for all their specific needs, yet easy to learn for users who are new to database server. After logged in the Navicat Cloud feature, the Navigation pane will be divided into Navicat Cloud and My Connections sections. 约束限制:  无 取值范围: 无 默认取值: 无
    * endTime  作业结束的时间。是单位为“毫秒”的时间戳 示例: 1502349803729 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    * cpuCost  作业的CPU累计使用量 示例: 15376 约束限制:  无 取值范围: 无 默认取值: 无
    * outputByte  作业的输出字节数 示例: 35 约束限制:  无 取值范围: 无 默认取值: 无
    * resultPath  作业结果的存储路径。
    * resultFormat  作业结果的存储格式，当前只支持csv
    * executionDetailsPath  作业执行计划的存储路径。
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'jobType' => 'getJobType',
            'queueName' => 'getQueueName',
            'owner' => 'getOwner',
            'startTime' => 'getStartTime',
            'duration' => 'getDuration',
            'status' => 'getStatus',
            'inputRowCount' => 'getInputRowCount',
            'badRowCount' => 'getBadRowCount',
            'inputSize' => 'getInputSize',
            'resultCount' => 'getResultCount',
            'databaseName' => 'getDatabaseName',
            'tableName' => 'getTableName',
            'withColumnHeader' => 'getWithColumnHeader',
            'detail' => 'getDetail',
            'engineType' => 'getEngineType',
            'statement' => 'getStatement',
            'tags' => 'getTags',
            'message' => 'getMessage',
            'endTime' => 'getEndTime',
            'cpuCost' => 'getCpuCost',
            'outputByte' => 'getOutputByte',
            'resultPath' => 'getResultPath',
            'resultFormat' => 'getResultFormat',
            'executionDetailsPath' => 'getExecutionDetailsPath'
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
    const STATUS_LAUNCHING = 'LAUNCHING';
    const STATUS_RUNNING = 'RUNNING';
    const STATUS_FINISHED = 'FINISHED';
    const STATUS_FAILED = 'FAILED';
    const STATUS_CANCELLED = 'CANCELLED';
    const ENGINE_TYPE_SPARK = 'spark';
    const ENGINE_TYPE_HETU_ENGINE = 'hetuEngine';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_LAUNCHING,
            self::STATUS_RUNNING,
            self::STATUS_FINISHED,
            self::STATUS_FAILED,
            self::STATUS_CANCELLED,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getEngineTypeAllowableValues()
    {
        return [
            self::ENGINE_TYPE_SPARK,
            self::ENGINE_TYPE_HETU_ENGINE,
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
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['jobType'] = isset($data['jobType']) ? $data['jobType'] : null;
        $this->container['queueName'] = isset($data['queueName']) ? $data['queueName'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['inputRowCount'] = isset($data['inputRowCount']) ? $data['inputRowCount'] : null;
        $this->container['badRowCount'] = isset($data['badRowCount']) ? $data['badRowCount'] : null;
        $this->container['inputSize'] = isset($data['inputSize']) ? $data['inputSize'] : null;
        $this->container['resultCount'] = isset($data['resultCount']) ? $data['resultCount'] : null;
        $this->container['databaseName'] = isset($data['databaseName']) ? $data['databaseName'] : null;
        $this->container['tableName'] = isset($data['tableName']) ? $data['tableName'] : null;
        $this->container['withColumnHeader'] = isset($data['withColumnHeader']) ? $data['withColumnHeader'] : null;
        $this->container['detail'] = isset($data['detail']) ? $data['detail'] : null;
        $this->container['engineType'] = isset($data['engineType']) ? $data['engineType'] : null;
        $this->container['statement'] = isset($data['statement']) ? $data['statement'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['cpuCost'] = isset($data['cpuCost']) ? $data['cpuCost'] : null;
        $this->container['outputByte'] = isset($data['outputByte']) ? $data['outputByte'] : null;
        $this->container['resultPath'] = isset($data['resultPath']) ? $data['resultPath'] : null;
        $this->container['resultFormat'] = isset($data['resultFormat']) ? $data['resultFormat'] : null;
        $this->container['executionDetailsPath'] = isset($data['executionDetailsPath']) ? $data['executionDetailsPath'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['jobId'] === null) {
            $invalidProperties[] = "'jobId' can't be null";
        }
        if ($this->container['jobType'] === null) {
            $invalidProperties[] = "'jobType' can't be null";
        }
        if ($this->container['queueName'] === null) {
            $invalidProperties[] = "'queueName' can't be null";
        }
        if ($this->container['owner'] === null) {
            $invalidProperties[] = "'owner' can't be null";
        }
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['inputSize'] === null) {
            $invalidProperties[] = "'inputSize' can't be null";
        }
        if ($this->container['resultCount'] === null) {
            $invalidProperties[] = "'resultCount' can't be null";
        }
        if ($this->container['detail'] === null) {
            $invalidProperties[] = "'detail' can't be null";
        }
            $allowedValues = $this->getEngineTypeAllowableValues();
                if (!is_null($this->container['engineType']) && !in_array($this->container['engineType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'engineType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['statement'] === null) {
            $invalidProperties[] = "'statement' can't be null";
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
    * Gets jobId
    *  参数解释:  作业ID 示例: 6d2146a0-c2d5-41bd-8ca0-ca9694ada992 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return string
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string $jobId 参数解释:  作业ID 示例: 6d2146a0-c2d5-41bd-8ca0-ca9694ada992 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets jobType
    *  参数解释:  指定查询的作业类型，包含DDL、DCL、IMPORT、EXPORT、QUERY、INSERT、DATA_MIGRATION、UPDATE、DELETE、RESTART_QUEUE、SCALE_QUEUE，若要查询所有类型的作业，则传入ALL。 示例: QUERY 约束限制:  无 取值范围: DDL、DCL、IMPORT、EXPORT、QUERY、INSERT、DATA_MIGRATION、UPDATE、DELETE、RESTART_QUEUE、SCALE_QUEUE、ALL 默认取值: 无
    *
    * @return string
    */
    public function getJobType()
    {
        return $this->container['jobType'];
    }

    /**
    * Sets jobType
    *
    * @param string $jobType 参数解释:  指定查询的作业类型，包含DDL、DCL、IMPORT、EXPORT、QUERY、INSERT、DATA_MIGRATION、UPDATE、DELETE、RESTART_QUEUE、SCALE_QUEUE，若要查询所有类型的作业，则传入ALL。 示例: QUERY 约束限制:  无 取值范围: DDL、DCL、IMPORT、EXPORT、QUERY、INSERT、DATA_MIGRATION、UPDATE、DELETE、RESTART_QUEUE、SCALE_QUEUE、ALL 默认取值: 无
    *
    * @return $this
    */
    public function setJobType($jobType)
    {
        $this->container['jobType'] = $jobType;
        return $this;
    }

    /**
    * Gets queueName
    *  作业提交的对列 示例: ci_sql 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return string
    */
    public function getQueueName()
    {
        return $this->container['queueName'];
    }

    /**
    * Sets queueName
    *
    * @param string $queueName 作业提交的对列 示例: ci_sql 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setQueueName($queueName)
    {
        $this->container['queueName'] = $queueName;
        return $this;
    }

    /**
    * Gets owner
    *  提交作业的用户 示例: tenant1 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return string
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param string $owner 提交作业的用户 示例: tenant1 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets startTime
    *  作业开始的时间。是单位为“毫秒”的时间戳 示例: 1502349803729 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    *
    * @return int
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int $startTime 作业开始的时间。是单位为“毫秒”的时间戳 示例: 1502349803729 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets duration
    *  作业运行时长，单位毫秒 示例: 30000 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    *
    * @return int|null
    */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
    * Sets duration
    *
    * @param int|null $duration 作业运行时长，单位毫秒 示例: 30000 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    *
    * @return $this
    */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;
        return $this;
    }

    /**
    * Gets status
    *  此作业的当前状态 示例: CANCELLED 约束限制:  无 取值范围: LAUNCHING（提交中） RUNNING（运行中） FINISHED（完成） FAILED（失败） CANCELLED（取消） 默认取值: 无
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 此作业的当前状态 示例: CANCELLED 约束限制:  无 取值范围: LAUNCHING（提交中） RUNNING（运行中） FINISHED（完成） FAILED（失败） CANCELLED（取消） 默认取值: 无
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets inputRowCount
    *  Insert作业执行过程中扫描的记录条数 示例: 66 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    *
    * @return int|null
    */
    public function getInputRowCount()
    {
        return $this->container['inputRowCount'];
    }

    /**
    * Sets inputRowCount
    *
    * @param int|null $inputRowCount Insert作业执行过程中扫描的记录条数 示例: 66 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    *
    * @return $this
    */
    public function setInputRowCount($inputRowCount)
    {
        $this->container['inputRowCount'] = $inputRowCount;
        return $this;
    }

    /**
    * Gets badRowCount
    *  Insert作业执行过程中扫描到的错误记录数 示例: 666 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    *
    * @return int|null
    */
    public function getBadRowCount()
    {
        return $this->container['badRowCount'];
    }

    /**
    * Sets badRowCount
    *
    * @param int|null $badRowCount Insert作业执行过程中扫描到的错误记录数 示例: 666 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    *
    * @return $this
    */
    public function setBadRowCount($badRowCount)
    {
        $this->container['badRowCount'] = $badRowCount;
        return $this;
    }

    /**
    * Gets inputSize
    *  作业执行过程中扫描文件的大小 示例: 5 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    *
    * @return int
    */
    public function getInputSize()
    {
        return $this->container['inputSize'];
    }

    /**
    * Sets inputSize
    *
    * @param int $inputSize 作业执行过程中扫描文件的大小 示例: 5 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    *
    * @return $this
    */
    public function setInputSize($inputSize)
    {
        $this->container['inputSize'] = $inputSize;
        return $this;
    }

    /**
    * Gets resultCount
    *  当前作业返回的结果总条数或insert作业插入的总条数 示例: 55 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    *
    * @return int
    */
    public function getResultCount()
    {
        return $this->container['resultCount'];
    }

    /**
    * Sets resultCount
    *
    * @param int $resultCount 当前作业返回的结果总条数或insert作业插入的总条数 示例: 55 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    *
    * @return $this
    */
    public function setResultCount($resultCount)
    {
        $this->container['resultCount'] = $resultCount;
        return $this;
    }

    /**
    * Gets databaseName
    *  记录其操作的表所在的数据库名称。类型为Import和Export作业才有“database_name”属性 示例: db2 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return string|null
    */
    public function getDatabaseName()
    {
        return $this->container['databaseName'];
    }

    /**
    * Sets databaseName
    *
    * @param string|null $databaseName 记录其操作的表所在的数据库名称。类型为Import和Export作业才有“database_name”属性 示例: db2 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setDatabaseName($databaseName)
    {
        $this->container['databaseName'] = $databaseName;
        return $this;
    }

    /**
    * Gets tableName
    *  记录其操作的表名称。类型为Import和Export作业才有“table_name”属性 示例: t2 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return string|null
    */
    public function getTableName()
    {
        return $this->container['tableName'];
    }

    /**
    * Sets tableName
    *
    * @param string|null $tableName 记录其操作的表名称。类型为Import和Export作业才有“table_name”属性 示例: t2 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setTableName($tableName)
    {
        $this->container['tableName'] = $tableName;
        return $this;
    }

    /**
    * Gets withColumnHeader
    *  Import类型的作业，记录其导入的数据是否包括列名 示例: true 约束限制:  无 取值范围: true, false 默认取值: 无
    *
    * @return bool|null
    */
    public function getWithColumnHeader()
    {
        return $this->container['withColumnHeader'];
    }

    /**
    * Sets withColumnHeader
    *
    * @param bool|null $withColumnHeader Import类型的作业，记录其导入的数据是否包括列名 示例: true 约束限制:  无 取值范围: true, false 默认取值: 无
    *
    * @return $this
    */
    public function setWithColumnHeader($withColumnHeader)
    {
        $this->container['withColumnHeader'] = $withColumnHeader;
        return $this;
    }

    /**
    * Gets detail
    *  SQL查询的相关列信息的Json字符串 示例: {\\\"type\\\":\\\"struct\\\",\\\"fields\\\":[{\\\"name\\\":\\\"name\\\",\\\"type\\\":\\\"string\\\",\\\"nullable\\\":true,\\\"metadata\\\":{}},{\\\"name\\\":\\\"age\\\",\\\"type\\\":\\\"integer\\\",\\\"nullable\\\":true,\\\"metadata\\\":{}}]} 约束限制:  符合Json格式的字符串 取值范围: 无 默认取值: 无
    *
    * @return string
    */
    public function getDetail()
    {
        return $this->container['detail'];
    }

    /**
    * Sets detail
    *
    * @param string $detail SQL查询的相关列信息的Json字符串 示例: {\\\"type\\\":\\\"struct\\\",\\\"fields\\\":[{\\\"name\\\":\\\"name\\\",\\\"type\\\":\\\"string\\\",\\\"nullable\\\":true,\\\"metadata\\\":{}},{\\\"name\\\":\\\"age\\\",\\\"type\\\":\\\"integer\\\",\\\"nullable\\\":true,\\\"metadata\\\":{}}]} 约束限制:  符合Json格式的字符串 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setDetail($detail)
    {
        $this->container['detail'] = $detail;
        return $this;
    }

    /**
    * Gets engineType
    *  引擎类型 示例: spark 约束限制:  无 取值范围: spark, hetuEngine 默认取值: 无
    *
    * @return string|null
    */
    public function getEngineType()
    {
        return $this->container['engineType'];
    }

    /**
    * Sets engineType
    *
    * @param string|null $engineType 引擎类型 示例: spark 约束限制:  无 取值范围: spark, hetuEngine 默认取值: 无
    *
    * @return $this
    */
    public function setEngineType($engineType)
    {
        $this->container['engineType'] = $engineType;
        return $this;
    }

    /**
    * Gets statement
    *  作业执行的SQL语句 示例: select * from t_json_002 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return string
    */
    public function getStatement()
    {
        return $this->container['statement'];
    }

    /**
    * Sets statement
    *
    * @param string $statement 作业执行的SQL语句 示例: select * from t_json_002 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setStatement($statement)
    {
        $this->container['statement'] = $statement;
        return $this;
    }

    /**
    * Gets tags
    *  作业标签
    *
    * @return \HuaweiCloud\SDK\Dli\V1\Model\Tag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Dli\V1\Model\Tag[]|null $tags 作业标签
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets message
    *  系统提示信息 示例: Navicat Data Modeler enables you to build high-quality conceptual, logical and physical data models for a wide variety of audiences. Navicat 15 has added support for the system-wide dark mode. Creativity is intelligence having fun. The On Startup feature allows you to control what tabs appear when you launch Navicat. In the Objects tab, you can use the List List, Detail Detail and ER Diagram ER Diagram buttons to change the object view. If your Internet Service Provider (ISP) does not provide direct access to its server, Secure Tunneling Protocol (SSH) / HTTP is another solution. A man’s best friends are his ten fingers. Export Wizard allows you to export data from tables, collections, views, or query results to any available formats. Navicat 15 has added support for the system-wide dark mode. Secure Sockets Layer(SSL) is a protocol for transmitting private documents via the Internet. A man’s best friends are his ten fingers. Navicat Monitor is a safe, simple and agentless remote server monitoring tool that is packed with powerful features to make your monitoring effective as possible. The past has no power over the present moment. Such sessions are also susceptible to session hijacking, where a malicious user takes over your session once you have authenticated. A man is not old until regrets take the place of dreams. Secure SHell (SSH) is a program to log in into another computer over a network, execute commands on a remote server, and move files from one machine to another. Secure SHell (SSH) is a program to log in into another computer over a network, execute commands on a remote server, and move files from one machine to another. Champions keep playing until they get it right. All journeys have secret destinations of which the traveler is unaware. Flexible settings enable you to set up a custom key for comparison and synchronization. Navicat authorizes you to make connection to remote servers running on different platforms (i.e. Windows, macOS, Linux and UNIX), and supports PAM and GSSAPI authentication. To successfully establish a new connection to local/remote server - no matter via SSL, SSH or HTTP, set the database login information in the General tab. It can also manage cloud databases such as Amazon Redshift, Amazon RDS, Alibaba Cloud. Features in Navicat are sophisticated enough to provide professional developers for all their specific needs, yet easy to learn for users who are new to database server. After logged in the Navicat Cloud feature, the Navigation pane will be divided into Navicat Cloud and My Connections sections. 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message 系统提示信息 示例: Navicat Data Modeler enables you to build high-quality conceptual, logical and physical data models for a wide variety of audiences. Navicat 15 has added support for the system-wide dark mode. Creativity is intelligence having fun. The On Startup feature allows you to control what tabs appear when you launch Navicat. In the Objects tab, you can use the List List, Detail Detail and ER Diagram ER Diagram buttons to change the object view. If your Internet Service Provider (ISP) does not provide direct access to its server, Secure Tunneling Protocol (SSH) / HTTP is another solution. A man’s best friends are his ten fingers. Export Wizard allows you to export data from tables, collections, views, or query results to any available formats. Navicat 15 has added support for the system-wide dark mode. Secure Sockets Layer(SSL) is a protocol for transmitting private documents via the Internet. A man’s best friends are his ten fingers. Navicat Monitor is a safe, simple and agentless remote server monitoring tool that is packed with powerful features to make your monitoring effective as possible. The past has no power over the present moment. Such sessions are also susceptible to session hijacking, where a malicious user takes over your session once you have authenticated. A man is not old until regrets take the place of dreams. Secure SHell (SSH) is a program to log in into another computer over a network, execute commands on a remote server, and move files from one machine to another. Secure SHell (SSH) is a program to log in into another computer over a network, execute commands on a remote server, and move files from one machine to another. Champions keep playing until they get it right. All journeys have secret destinations of which the traveler is unaware. Flexible settings enable you to set up a custom key for comparison and synchronization. Navicat authorizes you to make connection to remote servers running on different platforms (i.e. Windows, macOS, Linux and UNIX), and supports PAM and GSSAPI authentication. To successfully establish a new connection to local/remote server - no matter via SSL, SSH or HTTP, set the database login information in the General tab. It can also manage cloud databases such as Amazon Redshift, Amazon RDS, Alibaba Cloud. Features in Navicat are sophisticated enough to provide professional developers for all their specific needs, yet easy to learn for users who are new to database server. After logged in the Navicat Cloud feature, the Navigation pane will be divided into Navicat Cloud and My Connections sections. 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets endTime
    *  作业结束的时间。是单位为“毫秒”的时间戳 示例: 1502349803729 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    *
    * @return int|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int|null $endTime 作业结束的时间。是单位为“毫秒”的时间戳 示例: 1502349803729 约束限制:  无 取值范围: 大于等于0的整数 默认取值: 无
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets cpuCost
    *  作业的CPU累计使用量 示例: 15376 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return string|null
    */
    public function getCpuCost()
    {
        return $this->container['cpuCost'];
    }

    /**
    * Sets cpuCost
    *
    * @param string|null $cpuCost 作业的CPU累计使用量 示例: 15376 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setCpuCost($cpuCost)
    {
        $this->container['cpuCost'] = $cpuCost;
        return $this;
    }

    /**
    * Gets outputByte
    *  作业的输出字节数 示例: 35 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return string|null
    */
    public function getOutputByte()
    {
        return $this->container['outputByte'];
    }

    /**
    * Sets outputByte
    *
    * @param string|null $outputByte 作业的输出字节数 示例: 35 约束限制:  无 取值范围: 无 默认取值: 无
    *
    * @return $this
    */
    public function setOutputByte($outputByte)
    {
        $this->container['outputByte'] = $outputByte;
        return $this;
    }

    /**
    * Gets resultPath
    *  作业结果的存储路径。
    *
    * @return string|null
    */
    public function getResultPath()
    {
        return $this->container['resultPath'];
    }

    /**
    * Sets resultPath
    *
    * @param string|null $resultPath 作业结果的存储路径。
    *
    * @return $this
    */
    public function setResultPath($resultPath)
    {
        $this->container['resultPath'] = $resultPath;
        return $this;
    }

    /**
    * Gets resultFormat
    *  作业结果的存储格式，当前只支持csv
    *
    * @return string|null
    */
    public function getResultFormat()
    {
        return $this->container['resultFormat'];
    }

    /**
    * Sets resultFormat
    *
    * @param string|null $resultFormat 作业结果的存储格式，当前只支持csv
    *
    * @return $this
    */
    public function setResultFormat($resultFormat)
    {
        $this->container['resultFormat'] = $resultFormat;
        return $this;
    }

    /**
    * Gets executionDetailsPath
    *  作业执行计划的存储路径。
    *
    * @return string|null
    */
    public function getExecutionDetailsPath()
    {
        return $this->container['executionDetailsPath'];
    }

    /**
    * Sets executionDetailsPath
    *
    * @param string|null $executionDetailsPath 作业执行计划的存储路径。
    *
    * @return $this
    */
    public function setExecutionDetailsPath($executionDetailsPath)
    {
        $this->container['executionDetailsPath'] = $executionDetailsPath;
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

