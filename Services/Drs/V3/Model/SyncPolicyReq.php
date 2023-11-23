<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SyncPolicyReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SyncPolicyReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  任务ID。
    * conflictPolicy  冲突策略。 - ignore：忽略 - overwrite：覆盖 - stop：报错
    * filterDdlPolicy  过滤DDL策略。
    * ddlTrans  同步增量是否同步DDL。
    * indexTrans  同步增量是否同步索引。
    * topicPolicy  同步Topic策略，目标库为kafka时必填，取值： - 0：集中投递到一个Topic - 1：按库名-schema-表名自动生成Topic名字 - 2：按库名自动生成Topic名字 - 3：按库名-schema自动生成Topic名字
    * topic  Topic名称，topic_policy为0时必填，确保topic已存在。
    * partitionPolicy  同步到kafka partition策略，取值： - 0：按库名.schema.表名的hash值投递到不同Partition - 1：全部投递到Partition 0 - 2：按主键的hash值投递到不同Partition - 3：按库名.schema的hash值投递到不同Partition **当topic_policy取0时，可以取0,1,2,3；当topic_policy取1时，可以取1,2；当topic_policy取2时，可以取0,1,3；当topic_policy取3时，可以取0,1；**
    * kafkaDataFormat  投送到kafka的数据格式，不填默认为json：
    * topicNameFormat  Topic名字格式，topic_policy为1,2,3,时需要 - 当topic_policy取1时，Topic名字格式支持database、schema两个变量，其他字符当做常量。分别用$database$代替数据库名，$schema$代替模式名，不填默认为$database$-$schema$ - 当topic_policy取2时，Topic名字格式支持database一个变量，其他字符都当做常量，不填默认为$database$ - 当topic_policy取3时，Topic名字格式支持database、schema和tablename三个变量，其他字符当做常量。分别用$database$代替数据库名，$schema$代替模式名，$tablename$代替表名，不填默认为$database$-$schema$-$tablename$
    * partitionsNum  Partition个数，取值1-2147483647之间，topic_policy为1,2,3,时需要，不填默认为1
    * replicationFactor  副本个数，取值1-32767之间，topic_policy为1,2,3,时需要，不填默认为1
    * isFillMaterializedView  PostgreSQL同步全量阶段是否填充物化视图，不填默认为false
    * exportSnapshot  PostgreSQL同步全量阶段是否使用快照模式导出，不填默认为false
    * slotName  复制槽名称，gaussdbv5ha-to-kafka主备任务必填
    * fileAndPosition  - MySQL为源通过show master status命令获取源库位点，根据提示分别填写File:Position。例如：mysql-bin.000277:805 文件名只能为1-60个字符且不能包含< > & : \" \\' / \\\\\\\\ 特殊字符，文件编号只能为3-20个数字，binlog事件位置只能为1-20个数字，且总长度不能超过100个字符。格式为：文件名.文件编号:事件位点 - MongoDB为源的任务，任务的源库日志从位点开始获取（含当前启动位点），位点需设置在oplog范围以内。非集群通过db.getReplicationInfo()直接获得oplog范围，集群通过db.watch([], {startAtOperationTime: Timestamp(xx, xx)})命令，将启动位点填在xx处，校验位点是否在oplog范围以内。格式为：timestamp:incre。timestamp和incre均为范围在1~2,147,483,647之间的整数。
    * gtidSet  - MySQL为源的任务需要，通过show master status命令获取源库位点，根据提示填写Executed_Gtid_Set（如果源库为MySQL 5.5版本，则不支持使用同步任务）。  - 不能包含< > & \" \\' / \\\\\\\\ 特殊字符和中文。且不能超过2048个字符
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'string',
            'conflictPolicy' => 'string',
            'filterDdlPolicy' => 'string',
            'ddlTrans' => 'bool',
            'indexTrans' => 'bool',
            'topicPolicy' => 'string',
            'topic' => 'string',
            'partitionPolicy' => 'string',
            'kafkaDataFormat' => 'string',
            'topicNameFormat' => 'string',
            'partitionsNum' => 'string',
            'replicationFactor' => 'string',
            'isFillMaterializedView' => 'bool',
            'exportSnapshot' => 'bool',
            'slotName' => 'string',
            'fileAndPosition' => 'string',
            'gtidSet' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  任务ID。
    * conflictPolicy  冲突策略。 - ignore：忽略 - overwrite：覆盖 - stop：报错
    * filterDdlPolicy  过滤DDL策略。
    * ddlTrans  同步增量是否同步DDL。
    * indexTrans  同步增量是否同步索引。
    * topicPolicy  同步Topic策略，目标库为kafka时必填，取值： - 0：集中投递到一个Topic - 1：按库名-schema-表名自动生成Topic名字 - 2：按库名自动生成Topic名字 - 3：按库名-schema自动生成Topic名字
    * topic  Topic名称，topic_policy为0时必填，确保topic已存在。
    * partitionPolicy  同步到kafka partition策略，取值： - 0：按库名.schema.表名的hash值投递到不同Partition - 1：全部投递到Partition 0 - 2：按主键的hash值投递到不同Partition - 3：按库名.schema的hash值投递到不同Partition **当topic_policy取0时，可以取0,1,2,3；当topic_policy取1时，可以取1,2；当topic_policy取2时，可以取0,1,3；当topic_policy取3时，可以取0,1；**
    * kafkaDataFormat  投送到kafka的数据格式，不填默认为json：
    * topicNameFormat  Topic名字格式，topic_policy为1,2,3,时需要 - 当topic_policy取1时，Topic名字格式支持database、schema两个变量，其他字符当做常量。分别用$database$代替数据库名，$schema$代替模式名，不填默认为$database$-$schema$ - 当topic_policy取2时，Topic名字格式支持database一个变量，其他字符都当做常量，不填默认为$database$ - 当topic_policy取3时，Topic名字格式支持database、schema和tablename三个变量，其他字符当做常量。分别用$database$代替数据库名，$schema$代替模式名，$tablename$代替表名，不填默认为$database$-$schema$-$tablename$
    * partitionsNum  Partition个数，取值1-2147483647之间，topic_policy为1,2,3,时需要，不填默认为1
    * replicationFactor  副本个数，取值1-32767之间，topic_policy为1,2,3,时需要，不填默认为1
    * isFillMaterializedView  PostgreSQL同步全量阶段是否填充物化视图，不填默认为false
    * exportSnapshot  PostgreSQL同步全量阶段是否使用快照模式导出，不填默认为false
    * slotName  复制槽名称，gaussdbv5ha-to-kafka主备任务必填
    * fileAndPosition  - MySQL为源通过show master status命令获取源库位点，根据提示分别填写File:Position。例如：mysql-bin.000277:805 文件名只能为1-60个字符且不能包含< > & : \" \\' / \\\\\\\\ 特殊字符，文件编号只能为3-20个数字，binlog事件位置只能为1-20个数字，且总长度不能超过100个字符。格式为：文件名.文件编号:事件位点 - MongoDB为源的任务，任务的源库日志从位点开始获取（含当前启动位点），位点需设置在oplog范围以内。非集群通过db.getReplicationInfo()直接获得oplog范围，集群通过db.watch([], {startAtOperationTime: Timestamp(xx, xx)})命令，将启动位点填在xx处，校验位点是否在oplog范围以内。格式为：timestamp:incre。timestamp和incre均为范围在1~2,147,483,647之间的整数。
    * gtidSet  - MySQL为源的任务需要，通过show master status命令获取源库位点，根据提示填写Executed_Gtid_Set（如果源库为MySQL 5.5版本，则不支持使用同步任务）。  - 不能包含< > & \" \\' / \\\\\\\\ 特殊字符和中文。且不能超过2048个字符
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => null,
        'conflictPolicy' => null,
        'filterDdlPolicy' => null,
        'ddlTrans' => null,
        'indexTrans' => null,
        'topicPolicy' => null,
        'topic' => null,
        'partitionPolicy' => null,
        'kafkaDataFormat' => null,
        'topicNameFormat' => null,
        'partitionsNum' => null,
        'replicationFactor' => null,
        'isFillMaterializedView' => null,
        'exportSnapshot' => null,
        'slotName' => null,
        'fileAndPosition' => null,
        'gtidSet' => null
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
    * jobId  任务ID。
    * conflictPolicy  冲突策略。 - ignore：忽略 - overwrite：覆盖 - stop：报错
    * filterDdlPolicy  过滤DDL策略。
    * ddlTrans  同步增量是否同步DDL。
    * indexTrans  同步增量是否同步索引。
    * topicPolicy  同步Topic策略，目标库为kafka时必填，取值： - 0：集中投递到一个Topic - 1：按库名-schema-表名自动生成Topic名字 - 2：按库名自动生成Topic名字 - 3：按库名-schema自动生成Topic名字
    * topic  Topic名称，topic_policy为0时必填，确保topic已存在。
    * partitionPolicy  同步到kafka partition策略，取值： - 0：按库名.schema.表名的hash值投递到不同Partition - 1：全部投递到Partition 0 - 2：按主键的hash值投递到不同Partition - 3：按库名.schema的hash值投递到不同Partition **当topic_policy取0时，可以取0,1,2,3；当topic_policy取1时，可以取1,2；当topic_policy取2时，可以取0,1,3；当topic_policy取3时，可以取0,1；**
    * kafkaDataFormat  投送到kafka的数据格式，不填默认为json：
    * topicNameFormat  Topic名字格式，topic_policy为1,2,3,时需要 - 当topic_policy取1时，Topic名字格式支持database、schema两个变量，其他字符当做常量。分别用$database$代替数据库名，$schema$代替模式名，不填默认为$database$-$schema$ - 当topic_policy取2时，Topic名字格式支持database一个变量，其他字符都当做常量，不填默认为$database$ - 当topic_policy取3时，Topic名字格式支持database、schema和tablename三个变量，其他字符当做常量。分别用$database$代替数据库名，$schema$代替模式名，$tablename$代替表名，不填默认为$database$-$schema$-$tablename$
    * partitionsNum  Partition个数，取值1-2147483647之间，topic_policy为1,2,3,时需要，不填默认为1
    * replicationFactor  副本个数，取值1-32767之间，topic_policy为1,2,3,时需要，不填默认为1
    * isFillMaterializedView  PostgreSQL同步全量阶段是否填充物化视图，不填默认为false
    * exportSnapshot  PostgreSQL同步全量阶段是否使用快照模式导出，不填默认为false
    * slotName  复制槽名称，gaussdbv5ha-to-kafka主备任务必填
    * fileAndPosition  - MySQL为源通过show master status命令获取源库位点，根据提示分别填写File:Position。例如：mysql-bin.000277:805 文件名只能为1-60个字符且不能包含< > & : \" \\' / \\\\\\\\ 特殊字符，文件编号只能为3-20个数字，binlog事件位置只能为1-20个数字，且总长度不能超过100个字符。格式为：文件名.文件编号:事件位点 - MongoDB为源的任务，任务的源库日志从位点开始获取（含当前启动位点），位点需设置在oplog范围以内。非集群通过db.getReplicationInfo()直接获得oplog范围，集群通过db.watch([], {startAtOperationTime: Timestamp(xx, xx)})命令，将启动位点填在xx处，校验位点是否在oplog范围以内。格式为：timestamp:incre。timestamp和incre均为范围在1~2,147,483,647之间的整数。
    * gtidSet  - MySQL为源的任务需要，通过show master status命令获取源库位点，根据提示填写Executed_Gtid_Set（如果源库为MySQL 5.5版本，则不支持使用同步任务）。  - 不能包含< > & \" \\' / \\\\\\\\ 特殊字符和中文。且不能超过2048个字符
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'conflictPolicy' => 'conflict_policy',
            'filterDdlPolicy' => 'filter_ddl_policy',
            'ddlTrans' => 'ddl_trans',
            'indexTrans' => 'index_trans',
            'topicPolicy' => 'topic_policy',
            'topic' => 'topic',
            'partitionPolicy' => 'partition_policy',
            'kafkaDataFormat' => 'kafka_data_format',
            'topicNameFormat' => 'topic_name_format',
            'partitionsNum' => 'partitions_num',
            'replicationFactor' => 'replication_factor',
            'isFillMaterializedView' => 'is_fill_materialized_view',
            'exportSnapshot' => 'export_snapshot',
            'slotName' => 'slot_name',
            'fileAndPosition' => 'file_and_position',
            'gtidSet' => 'gtid_set'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  任务ID。
    * conflictPolicy  冲突策略。 - ignore：忽略 - overwrite：覆盖 - stop：报错
    * filterDdlPolicy  过滤DDL策略。
    * ddlTrans  同步增量是否同步DDL。
    * indexTrans  同步增量是否同步索引。
    * topicPolicy  同步Topic策略，目标库为kafka时必填，取值： - 0：集中投递到一个Topic - 1：按库名-schema-表名自动生成Topic名字 - 2：按库名自动生成Topic名字 - 3：按库名-schema自动生成Topic名字
    * topic  Topic名称，topic_policy为0时必填，确保topic已存在。
    * partitionPolicy  同步到kafka partition策略，取值： - 0：按库名.schema.表名的hash值投递到不同Partition - 1：全部投递到Partition 0 - 2：按主键的hash值投递到不同Partition - 3：按库名.schema的hash值投递到不同Partition **当topic_policy取0时，可以取0,1,2,3；当topic_policy取1时，可以取1,2；当topic_policy取2时，可以取0,1,3；当topic_policy取3时，可以取0,1；**
    * kafkaDataFormat  投送到kafka的数据格式，不填默认为json：
    * topicNameFormat  Topic名字格式，topic_policy为1,2,3,时需要 - 当topic_policy取1时，Topic名字格式支持database、schema两个变量，其他字符当做常量。分别用$database$代替数据库名，$schema$代替模式名，不填默认为$database$-$schema$ - 当topic_policy取2时，Topic名字格式支持database一个变量，其他字符都当做常量，不填默认为$database$ - 当topic_policy取3时，Topic名字格式支持database、schema和tablename三个变量，其他字符当做常量。分别用$database$代替数据库名，$schema$代替模式名，$tablename$代替表名，不填默认为$database$-$schema$-$tablename$
    * partitionsNum  Partition个数，取值1-2147483647之间，topic_policy为1,2,3,时需要，不填默认为1
    * replicationFactor  副本个数，取值1-32767之间，topic_policy为1,2,3,时需要，不填默认为1
    * isFillMaterializedView  PostgreSQL同步全量阶段是否填充物化视图，不填默认为false
    * exportSnapshot  PostgreSQL同步全量阶段是否使用快照模式导出，不填默认为false
    * slotName  复制槽名称，gaussdbv5ha-to-kafka主备任务必填
    * fileAndPosition  - MySQL为源通过show master status命令获取源库位点，根据提示分别填写File:Position。例如：mysql-bin.000277:805 文件名只能为1-60个字符且不能包含< > & : \" \\' / \\\\\\\\ 特殊字符，文件编号只能为3-20个数字，binlog事件位置只能为1-20个数字，且总长度不能超过100个字符。格式为：文件名.文件编号:事件位点 - MongoDB为源的任务，任务的源库日志从位点开始获取（含当前启动位点），位点需设置在oplog范围以内。非集群通过db.getReplicationInfo()直接获得oplog范围，集群通过db.watch([], {startAtOperationTime: Timestamp(xx, xx)})命令，将启动位点填在xx处，校验位点是否在oplog范围以内。格式为：timestamp:incre。timestamp和incre均为范围在1~2,147,483,647之间的整数。
    * gtidSet  - MySQL为源的任务需要，通过show master status命令获取源库位点，根据提示填写Executed_Gtid_Set（如果源库为MySQL 5.5版本，则不支持使用同步任务）。  - 不能包含< > & \" \\' / \\\\\\\\ 特殊字符和中文。且不能超过2048个字符
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'conflictPolicy' => 'setConflictPolicy',
            'filterDdlPolicy' => 'setFilterDdlPolicy',
            'ddlTrans' => 'setDdlTrans',
            'indexTrans' => 'setIndexTrans',
            'topicPolicy' => 'setTopicPolicy',
            'topic' => 'setTopic',
            'partitionPolicy' => 'setPartitionPolicy',
            'kafkaDataFormat' => 'setKafkaDataFormat',
            'topicNameFormat' => 'setTopicNameFormat',
            'partitionsNum' => 'setPartitionsNum',
            'replicationFactor' => 'setReplicationFactor',
            'isFillMaterializedView' => 'setIsFillMaterializedView',
            'exportSnapshot' => 'setExportSnapshot',
            'slotName' => 'setSlotName',
            'fileAndPosition' => 'setFileAndPosition',
            'gtidSet' => 'setGtidSet'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  任务ID。
    * conflictPolicy  冲突策略。 - ignore：忽略 - overwrite：覆盖 - stop：报错
    * filterDdlPolicy  过滤DDL策略。
    * ddlTrans  同步增量是否同步DDL。
    * indexTrans  同步增量是否同步索引。
    * topicPolicy  同步Topic策略，目标库为kafka时必填，取值： - 0：集中投递到一个Topic - 1：按库名-schema-表名自动生成Topic名字 - 2：按库名自动生成Topic名字 - 3：按库名-schema自动生成Topic名字
    * topic  Topic名称，topic_policy为0时必填，确保topic已存在。
    * partitionPolicy  同步到kafka partition策略，取值： - 0：按库名.schema.表名的hash值投递到不同Partition - 1：全部投递到Partition 0 - 2：按主键的hash值投递到不同Partition - 3：按库名.schema的hash值投递到不同Partition **当topic_policy取0时，可以取0,1,2,3；当topic_policy取1时，可以取1,2；当topic_policy取2时，可以取0,1,3；当topic_policy取3时，可以取0,1；**
    * kafkaDataFormat  投送到kafka的数据格式，不填默认为json：
    * topicNameFormat  Topic名字格式，topic_policy为1,2,3,时需要 - 当topic_policy取1时，Topic名字格式支持database、schema两个变量，其他字符当做常量。分别用$database$代替数据库名，$schema$代替模式名，不填默认为$database$-$schema$ - 当topic_policy取2时，Topic名字格式支持database一个变量，其他字符都当做常量，不填默认为$database$ - 当topic_policy取3时，Topic名字格式支持database、schema和tablename三个变量，其他字符当做常量。分别用$database$代替数据库名，$schema$代替模式名，$tablename$代替表名，不填默认为$database$-$schema$-$tablename$
    * partitionsNum  Partition个数，取值1-2147483647之间，topic_policy为1,2,3,时需要，不填默认为1
    * replicationFactor  副本个数，取值1-32767之间，topic_policy为1,2,3,时需要，不填默认为1
    * isFillMaterializedView  PostgreSQL同步全量阶段是否填充物化视图，不填默认为false
    * exportSnapshot  PostgreSQL同步全量阶段是否使用快照模式导出，不填默认为false
    * slotName  复制槽名称，gaussdbv5ha-to-kafka主备任务必填
    * fileAndPosition  - MySQL为源通过show master status命令获取源库位点，根据提示分别填写File:Position。例如：mysql-bin.000277:805 文件名只能为1-60个字符且不能包含< > & : \" \\' / \\\\\\\\ 特殊字符，文件编号只能为3-20个数字，binlog事件位置只能为1-20个数字，且总长度不能超过100个字符。格式为：文件名.文件编号:事件位点 - MongoDB为源的任务，任务的源库日志从位点开始获取（含当前启动位点），位点需设置在oplog范围以内。非集群通过db.getReplicationInfo()直接获得oplog范围，集群通过db.watch([], {startAtOperationTime: Timestamp(xx, xx)})命令，将启动位点填在xx处，校验位点是否在oplog范围以内。格式为：timestamp:incre。timestamp和incre均为范围在1~2,147,483,647之间的整数。
    * gtidSet  - MySQL为源的任务需要，通过show master status命令获取源库位点，根据提示填写Executed_Gtid_Set（如果源库为MySQL 5.5版本，则不支持使用同步任务）。  - 不能包含< > & \" \\' / \\\\\\\\ 特殊字符和中文。且不能超过2048个字符
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'conflictPolicy' => 'getConflictPolicy',
            'filterDdlPolicy' => 'getFilterDdlPolicy',
            'ddlTrans' => 'getDdlTrans',
            'indexTrans' => 'getIndexTrans',
            'topicPolicy' => 'getTopicPolicy',
            'topic' => 'getTopic',
            'partitionPolicy' => 'getPartitionPolicy',
            'kafkaDataFormat' => 'getKafkaDataFormat',
            'topicNameFormat' => 'getTopicNameFormat',
            'partitionsNum' => 'getPartitionsNum',
            'replicationFactor' => 'getReplicationFactor',
            'isFillMaterializedView' => 'getIsFillMaterializedView',
            'exportSnapshot' => 'getExportSnapshot',
            'slotName' => 'getSlotName',
            'fileAndPosition' => 'getFileAndPosition',
            'gtidSet' => 'getGtidSet'
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
    const CONFLICT_POLICY_IGNORE = 'ignore';
    const CONFLICT_POLICY_OVERWRITE = 'overwrite';
    const CONFLICT_POLICY_STOP = 'stop';
    const FILTER_DDL_POLICY_DROP_DATABASE = 'drop_database';
    const TOPIC_POLICY__0 = '0';
    const TOPIC_POLICY__1 = '1';
    const TOPIC_POLICY__2 = '2';
    const TOPIC_POLICY__3 = '3';
    const PARTITION_POLICY__0 = '0';
    const PARTITION_POLICY__1 = '1';
    const PARTITION_POLICY__2 = '2';
    const PARTITION_POLICY__3 = '3';
    const KAFKA_DATA_FORMAT_JSON = 'json';
    const KAFKA_DATA_FORMAT_AVRO = 'avro';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getConflictPolicyAllowableValues()
    {
        return [
            self::CONFLICT_POLICY_IGNORE,
            self::CONFLICT_POLICY_OVERWRITE,
            self::CONFLICT_POLICY_STOP,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getFilterDdlPolicyAllowableValues()
    {
        return [
            self::FILTER_DDL_POLICY_DROP_DATABASE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTopicPolicyAllowableValues()
    {
        return [
            self::TOPIC_POLICY__0,
            self::TOPIC_POLICY__1,
            self::TOPIC_POLICY__2,
            self::TOPIC_POLICY__3,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPartitionPolicyAllowableValues()
    {
        return [
            self::PARTITION_POLICY__0,
            self::PARTITION_POLICY__1,
            self::PARTITION_POLICY__2,
            self::PARTITION_POLICY__3,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getKafkaDataFormatAllowableValues()
    {
        return [
            self::KAFKA_DATA_FORMAT_JSON,
            self::KAFKA_DATA_FORMAT_AVRO,
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
        $this->container['conflictPolicy'] = isset($data['conflictPolicy']) ? $data['conflictPolicy'] : null;
        $this->container['filterDdlPolicy'] = isset($data['filterDdlPolicy']) ? $data['filterDdlPolicy'] : null;
        $this->container['ddlTrans'] = isset($data['ddlTrans']) ? $data['ddlTrans'] : null;
        $this->container['indexTrans'] = isset($data['indexTrans']) ? $data['indexTrans'] : null;
        $this->container['topicPolicy'] = isset($data['topicPolicy']) ? $data['topicPolicy'] : null;
        $this->container['topic'] = isset($data['topic']) ? $data['topic'] : null;
        $this->container['partitionPolicy'] = isset($data['partitionPolicy']) ? $data['partitionPolicy'] : null;
        $this->container['kafkaDataFormat'] = isset($data['kafkaDataFormat']) ? $data['kafkaDataFormat'] : null;
        $this->container['topicNameFormat'] = isset($data['topicNameFormat']) ? $data['topicNameFormat'] : null;
        $this->container['partitionsNum'] = isset($data['partitionsNum']) ? $data['partitionsNum'] : null;
        $this->container['replicationFactor'] = isset($data['replicationFactor']) ? $data['replicationFactor'] : null;
        $this->container['isFillMaterializedView'] = isset($data['isFillMaterializedView']) ? $data['isFillMaterializedView'] : null;
        $this->container['exportSnapshot'] = isset($data['exportSnapshot']) ? $data['exportSnapshot'] : null;
        $this->container['slotName'] = isset($data['slotName']) ? $data['slotName'] : null;
        $this->container['fileAndPosition'] = isset($data['fileAndPosition']) ? $data['fileAndPosition'] : null;
        $this->container['gtidSet'] = isset($data['gtidSet']) ? $data['gtidSet'] : null;
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
            $allowedValues = $this->getConflictPolicyAllowableValues();
                if (!is_null($this->container['conflictPolicy']) && !in_array($this->container['conflictPolicy'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'conflictPolicy', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getFilterDdlPolicyAllowableValues();
                if (!is_null($this->container['filterDdlPolicy']) && !in_array($this->container['filterDdlPolicy'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'filterDdlPolicy', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getTopicPolicyAllowableValues();
                if (!is_null($this->container['topicPolicy']) && !in_array($this->container['topicPolicy'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'topicPolicy', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getPartitionPolicyAllowableValues();
                if (!is_null($this->container['partitionPolicy']) && !in_array($this->container['partitionPolicy'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'partitionPolicy', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getKafkaDataFormatAllowableValues();
                if (!is_null($this->container['kafkaDataFormat']) && !in_array($this->container['kafkaDataFormat'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'kafkaDataFormat', must be one of '%s'",
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
    * Gets jobId
    *  任务ID。
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
    * @param string $jobId 任务ID。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets conflictPolicy
    *  冲突策略。 - ignore：忽略 - overwrite：覆盖 - stop：报错
    *
    * @return string|null
    */
    public function getConflictPolicy()
    {
        return $this->container['conflictPolicy'];
    }

    /**
    * Sets conflictPolicy
    *
    * @param string|null $conflictPolicy 冲突策略。 - ignore：忽略 - overwrite：覆盖 - stop：报错
    *
    * @return $this
    */
    public function setConflictPolicy($conflictPolicy)
    {
        $this->container['conflictPolicy'] = $conflictPolicy;
        return $this;
    }

    /**
    * Gets filterDdlPolicy
    *  过滤DDL策略。
    *
    * @return string|null
    */
    public function getFilterDdlPolicy()
    {
        return $this->container['filterDdlPolicy'];
    }

    /**
    * Sets filterDdlPolicy
    *
    * @param string|null $filterDdlPolicy 过滤DDL策略。
    *
    * @return $this
    */
    public function setFilterDdlPolicy($filterDdlPolicy)
    {
        $this->container['filterDdlPolicy'] = $filterDdlPolicy;
        return $this;
    }

    /**
    * Gets ddlTrans
    *  同步增量是否同步DDL。
    *
    * @return bool|null
    */
    public function getDdlTrans()
    {
        return $this->container['ddlTrans'];
    }

    /**
    * Sets ddlTrans
    *
    * @param bool|null $ddlTrans 同步增量是否同步DDL。
    *
    * @return $this
    */
    public function setDdlTrans($ddlTrans)
    {
        $this->container['ddlTrans'] = $ddlTrans;
        return $this;
    }

    /**
    * Gets indexTrans
    *  同步增量是否同步索引。
    *
    * @return bool|null
    */
    public function getIndexTrans()
    {
        return $this->container['indexTrans'];
    }

    /**
    * Sets indexTrans
    *
    * @param bool|null $indexTrans 同步增量是否同步索引。
    *
    * @return $this
    */
    public function setIndexTrans($indexTrans)
    {
        $this->container['indexTrans'] = $indexTrans;
        return $this;
    }

    /**
    * Gets topicPolicy
    *  同步Topic策略，目标库为kafka时必填，取值： - 0：集中投递到一个Topic - 1：按库名-schema-表名自动生成Topic名字 - 2：按库名自动生成Topic名字 - 3：按库名-schema自动生成Topic名字
    *
    * @return string|null
    */
    public function getTopicPolicy()
    {
        return $this->container['topicPolicy'];
    }

    /**
    * Sets topicPolicy
    *
    * @param string|null $topicPolicy 同步Topic策略，目标库为kafka时必填，取值： - 0：集中投递到一个Topic - 1：按库名-schema-表名自动生成Topic名字 - 2：按库名自动生成Topic名字 - 3：按库名-schema自动生成Topic名字
    *
    * @return $this
    */
    public function setTopicPolicy($topicPolicy)
    {
        $this->container['topicPolicy'] = $topicPolicy;
        return $this;
    }

    /**
    * Gets topic
    *  Topic名称，topic_policy为0时必填，确保topic已存在。
    *
    * @return string|null
    */
    public function getTopic()
    {
        return $this->container['topic'];
    }

    /**
    * Sets topic
    *
    * @param string|null $topic Topic名称，topic_policy为0时必填，确保topic已存在。
    *
    * @return $this
    */
    public function setTopic($topic)
    {
        $this->container['topic'] = $topic;
        return $this;
    }

    /**
    * Gets partitionPolicy
    *  同步到kafka partition策略，取值： - 0：按库名.schema.表名的hash值投递到不同Partition - 1：全部投递到Partition 0 - 2：按主键的hash值投递到不同Partition - 3：按库名.schema的hash值投递到不同Partition **当topic_policy取0时，可以取0,1,2,3；当topic_policy取1时，可以取1,2；当topic_policy取2时，可以取0,1,3；当topic_policy取3时，可以取0,1；**
    *
    * @return string|null
    */
    public function getPartitionPolicy()
    {
        return $this->container['partitionPolicy'];
    }

    /**
    * Sets partitionPolicy
    *
    * @param string|null $partitionPolicy 同步到kafka partition策略，取值： - 0：按库名.schema.表名的hash值投递到不同Partition - 1：全部投递到Partition 0 - 2：按主键的hash值投递到不同Partition - 3：按库名.schema的hash值投递到不同Partition **当topic_policy取0时，可以取0,1,2,3；当topic_policy取1时，可以取1,2；当topic_policy取2时，可以取0,1,3；当topic_policy取3时，可以取0,1；**
    *
    * @return $this
    */
    public function setPartitionPolicy($partitionPolicy)
    {
        $this->container['partitionPolicy'] = $partitionPolicy;
        return $this;
    }

    /**
    * Gets kafkaDataFormat
    *  投送到kafka的数据格式，不填默认为json：
    *
    * @return string|null
    */
    public function getKafkaDataFormat()
    {
        return $this->container['kafkaDataFormat'];
    }

    /**
    * Sets kafkaDataFormat
    *
    * @param string|null $kafkaDataFormat 投送到kafka的数据格式，不填默认为json：
    *
    * @return $this
    */
    public function setKafkaDataFormat($kafkaDataFormat)
    {
        $this->container['kafkaDataFormat'] = $kafkaDataFormat;
        return $this;
    }

    /**
    * Gets topicNameFormat
    *  Topic名字格式，topic_policy为1,2,3,时需要 - 当topic_policy取1时，Topic名字格式支持database、schema两个变量，其他字符当做常量。分别用$database$代替数据库名，$schema$代替模式名，不填默认为$database$-$schema$ - 当topic_policy取2时，Topic名字格式支持database一个变量，其他字符都当做常量，不填默认为$database$ - 当topic_policy取3时，Topic名字格式支持database、schema和tablename三个变量，其他字符当做常量。分别用$database$代替数据库名，$schema$代替模式名，$tablename$代替表名，不填默认为$database$-$schema$-$tablename$
    *
    * @return string|null
    */
    public function getTopicNameFormat()
    {
        return $this->container['topicNameFormat'];
    }

    /**
    * Sets topicNameFormat
    *
    * @param string|null $topicNameFormat Topic名字格式，topic_policy为1,2,3,时需要 - 当topic_policy取1时，Topic名字格式支持database、schema两个变量，其他字符当做常量。分别用$database$代替数据库名，$schema$代替模式名，不填默认为$database$-$schema$ - 当topic_policy取2时，Topic名字格式支持database一个变量，其他字符都当做常量，不填默认为$database$ - 当topic_policy取3时，Topic名字格式支持database、schema和tablename三个变量，其他字符当做常量。分别用$database$代替数据库名，$schema$代替模式名，$tablename$代替表名，不填默认为$database$-$schema$-$tablename$
    *
    * @return $this
    */
    public function setTopicNameFormat($topicNameFormat)
    {
        $this->container['topicNameFormat'] = $topicNameFormat;
        return $this;
    }

    /**
    * Gets partitionsNum
    *  Partition个数，取值1-2147483647之间，topic_policy为1,2,3,时需要，不填默认为1
    *
    * @return string|null
    */
    public function getPartitionsNum()
    {
        return $this->container['partitionsNum'];
    }

    /**
    * Sets partitionsNum
    *
    * @param string|null $partitionsNum Partition个数，取值1-2147483647之间，topic_policy为1,2,3,时需要，不填默认为1
    *
    * @return $this
    */
    public function setPartitionsNum($partitionsNum)
    {
        $this->container['partitionsNum'] = $partitionsNum;
        return $this;
    }

    /**
    * Gets replicationFactor
    *  副本个数，取值1-32767之间，topic_policy为1,2,3,时需要，不填默认为1
    *
    * @return string|null
    */
    public function getReplicationFactor()
    {
        return $this->container['replicationFactor'];
    }

    /**
    * Sets replicationFactor
    *
    * @param string|null $replicationFactor 副本个数，取值1-32767之间，topic_policy为1,2,3,时需要，不填默认为1
    *
    * @return $this
    */
    public function setReplicationFactor($replicationFactor)
    {
        $this->container['replicationFactor'] = $replicationFactor;
        return $this;
    }

    /**
    * Gets isFillMaterializedView
    *  PostgreSQL同步全量阶段是否填充物化视图，不填默认为false
    *
    * @return bool|null
    */
    public function getIsFillMaterializedView()
    {
        return $this->container['isFillMaterializedView'];
    }

    /**
    * Sets isFillMaterializedView
    *
    * @param bool|null $isFillMaterializedView PostgreSQL同步全量阶段是否填充物化视图，不填默认为false
    *
    * @return $this
    */
    public function setIsFillMaterializedView($isFillMaterializedView)
    {
        $this->container['isFillMaterializedView'] = $isFillMaterializedView;
        return $this;
    }

    /**
    * Gets exportSnapshot
    *  PostgreSQL同步全量阶段是否使用快照模式导出，不填默认为false
    *
    * @return bool|null
    */
    public function getExportSnapshot()
    {
        return $this->container['exportSnapshot'];
    }

    /**
    * Sets exportSnapshot
    *
    * @param bool|null $exportSnapshot PostgreSQL同步全量阶段是否使用快照模式导出，不填默认为false
    *
    * @return $this
    */
    public function setExportSnapshot($exportSnapshot)
    {
        $this->container['exportSnapshot'] = $exportSnapshot;
        return $this;
    }

    /**
    * Gets slotName
    *  复制槽名称，gaussdbv5ha-to-kafka主备任务必填
    *
    * @return string|null
    */
    public function getSlotName()
    {
        return $this->container['slotName'];
    }

    /**
    * Sets slotName
    *
    * @param string|null $slotName 复制槽名称，gaussdbv5ha-to-kafka主备任务必填
    *
    * @return $this
    */
    public function setSlotName($slotName)
    {
        $this->container['slotName'] = $slotName;
        return $this;
    }

    /**
    * Gets fileAndPosition
    *  - MySQL为源通过show master status命令获取源库位点，根据提示分别填写File:Position。例如：mysql-bin.000277:805 文件名只能为1-60个字符且不能包含< > & : \" \\' / \\\\\\\\ 特殊字符，文件编号只能为3-20个数字，binlog事件位置只能为1-20个数字，且总长度不能超过100个字符。格式为：文件名.文件编号:事件位点 - MongoDB为源的任务，任务的源库日志从位点开始获取（含当前启动位点），位点需设置在oplog范围以内。非集群通过db.getReplicationInfo()直接获得oplog范围，集群通过db.watch([], {startAtOperationTime: Timestamp(xx, xx)})命令，将启动位点填在xx处，校验位点是否在oplog范围以内。格式为：timestamp:incre。timestamp和incre均为范围在1~2,147,483,647之间的整数。
    *
    * @return string|null
    */
    public function getFileAndPosition()
    {
        return $this->container['fileAndPosition'];
    }

    /**
    * Sets fileAndPosition
    *
    * @param string|null $fileAndPosition - MySQL为源通过show master status命令获取源库位点，根据提示分别填写File:Position。例如：mysql-bin.000277:805 文件名只能为1-60个字符且不能包含< > & : \" \\' / \\\\\\\\ 特殊字符，文件编号只能为3-20个数字，binlog事件位置只能为1-20个数字，且总长度不能超过100个字符。格式为：文件名.文件编号:事件位点 - MongoDB为源的任务，任务的源库日志从位点开始获取（含当前启动位点），位点需设置在oplog范围以内。非集群通过db.getReplicationInfo()直接获得oplog范围，集群通过db.watch([], {startAtOperationTime: Timestamp(xx, xx)})命令，将启动位点填在xx处，校验位点是否在oplog范围以内。格式为：timestamp:incre。timestamp和incre均为范围在1~2,147,483,647之间的整数。
    *
    * @return $this
    */
    public function setFileAndPosition($fileAndPosition)
    {
        $this->container['fileAndPosition'] = $fileAndPosition;
        return $this;
    }

    /**
    * Gets gtidSet
    *  - MySQL为源的任务需要，通过show master status命令获取源库位点，根据提示填写Executed_Gtid_Set（如果源库为MySQL 5.5版本，则不支持使用同步任务）。  - 不能包含< > & \" \\' / \\\\\\\\ 特殊字符和中文。且不能超过2048个字符
    *
    * @return string|null
    */
    public function getGtidSet()
    {
        return $this->container['gtidSet'];
    }

    /**
    * Sets gtidSet
    *
    * @param string|null $gtidSet - MySQL为源的任务需要，通过show master status命令获取源库位点，根据提示填写Executed_Gtid_Set（如果源库为MySQL 5.5版本，则不支持使用同步任务）。  - 不能包含< > & \" \\' / \\\\\\\\ 特殊字符和中文。且不能超过2048个字符
    *
    * @return $this
    */
    public function setGtidSet($gtidSet)
    {
        $this->container['gtidSet'] = $gtidSet;
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

