<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SkipPreCheckInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SkipPreCheckInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * skippedPrecheckList  跳过的预检查项。 dstDbDiskSize：目标端磁盘可用大小是否支持 MysqlForeignKeyReferentialActionCheck：源端存在不支持的外键引用操作 MysqlSourceMaxAllowedPacketActionChecker：源库的max_allowed_packet参数值过小，可能会导致数据迁移失败 checkJobDbObjectInfo：对象选择信息检查 checkRecycleBinConsistent：回收站一致性检查 dbClockConsistency：时钟一致性校验 dbGroupConcatMaxLenConsistency：数据库参数group_concat_max_len一致性检查 dbIsolationLevelConsistency：事务隔离级别一致性校验 dbParamConsistency：结构迁移参数一致性校验 dbServerUuidConsistency：SERVER_UUID的一致性检查 dbTimeZoneConsistency：TIME_ZONE的一致性检查 dstMaxAllowedPacketCheck：增加预校验项检查目标库的max_allowed_packet参数 gtidFormatCheck：mysql源预检查GTID格式校验 innodbStrictModeConsistency：数据库参数INNODB_STRICT_MODE的一致性检查 isUserRequireSslLink：用户是否需要SSL mappedNameCheck：目标库对象命名约束检查 mysqlBlockEncryptionModeInconsistency：源库与目标库的参数block_encryption_mode不一致 rdsCreateDefaultPrimaryKeyConsistency：主备库是否开启隐式主键检查 sourceCheckDynamicMasking：源库脱敏检查 sourceEncryptTableActionChecker：源库加密表检查 sqlModeConsistency：数据库参数SQL_MODE的一致性检查 sqlModeNoEngine：目标库SQL_MODE中NO_ENGINE值检查 srcBinlogFormatCheck：源数据库binlog格式检查 srcBinlogRowImageCheck：源数据库参数binlog_row_image检查 srcDbBinlogExpireLogsDays：源库ExpireLogsDays参数检查 srcDbBinlogIsOff：源数据库二进制日志是否开启 srcDbExistUnsupportEngineTable：源数据库是否存在使用不支持的存储引擎的表 srcDbIndexKeyLength：原库索引列长度检查 srcDbIsStandbyTaurus：源库为Taurus备库检查 srcDbNameContainsUnsupportedSymbols：源数据库的库名是否合法 srcDbServerIdCheck：源数据库参数server_id的检查 srcDstTableNameCaseSensitiveCheck：源数据库和目标数据库表名大小写敏感性检查 srcGtidStatusCheck：源数据库GTID状态检查 srcHasLargeColumnTypeCheck：同步对象中是否存在包含longtext,longblob类型字段的表 srcIdentifierWithBreakCheck：源端表结构是否存在换行 srcTableNameContainsNonAscii：源数据库中有包含非ASCII字符的表名 srcTriggerAndEventCheck：识别到源端是否存在触发器/事件 srclogSlaveUpdatesCheck：源数据库参数slave_updates_check检查 targetCheckDynamicMasking：目标库脱敏检查 targetGtidStatusCheck：目标数据库GTID状态检查 tenantDbActionCheck：多租特性检查 userSelectObjectsCheck：选择对象预检查 dstStatusCheck：目标库实例状态是否正常 dstDbPrivilegesIsEnough：目标数据库用户权限是否足够 dstDbVersionSupport：目标数据库版本是否支持 srcDbVersionSupport：源数据库版本是否支持 dstDbConnection：目标数据库连接是否成功 srcDbConnection：源数据库连接是否成功 checkEmptyDstDb：目标库空库检查 srcDbPrivilegesIsEnoughForIncre：增量迁移,源数据库用户权限是否足够 srcHasNoPkTableWhenTgtHasInvisiblePk：源迁移库无主键表检查 userPrivilegeIsEnoughForDefiner：definer迁移权限检查
    * skipReason  跳过预检查原因。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'skippedPrecheckList' => 'string[]',
            'skipReason' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * skippedPrecheckList  跳过的预检查项。 dstDbDiskSize：目标端磁盘可用大小是否支持 MysqlForeignKeyReferentialActionCheck：源端存在不支持的外键引用操作 MysqlSourceMaxAllowedPacketActionChecker：源库的max_allowed_packet参数值过小，可能会导致数据迁移失败 checkJobDbObjectInfo：对象选择信息检查 checkRecycleBinConsistent：回收站一致性检查 dbClockConsistency：时钟一致性校验 dbGroupConcatMaxLenConsistency：数据库参数group_concat_max_len一致性检查 dbIsolationLevelConsistency：事务隔离级别一致性校验 dbParamConsistency：结构迁移参数一致性校验 dbServerUuidConsistency：SERVER_UUID的一致性检查 dbTimeZoneConsistency：TIME_ZONE的一致性检查 dstMaxAllowedPacketCheck：增加预校验项检查目标库的max_allowed_packet参数 gtidFormatCheck：mysql源预检查GTID格式校验 innodbStrictModeConsistency：数据库参数INNODB_STRICT_MODE的一致性检查 isUserRequireSslLink：用户是否需要SSL mappedNameCheck：目标库对象命名约束检查 mysqlBlockEncryptionModeInconsistency：源库与目标库的参数block_encryption_mode不一致 rdsCreateDefaultPrimaryKeyConsistency：主备库是否开启隐式主键检查 sourceCheckDynamicMasking：源库脱敏检查 sourceEncryptTableActionChecker：源库加密表检查 sqlModeConsistency：数据库参数SQL_MODE的一致性检查 sqlModeNoEngine：目标库SQL_MODE中NO_ENGINE值检查 srcBinlogFormatCheck：源数据库binlog格式检查 srcBinlogRowImageCheck：源数据库参数binlog_row_image检查 srcDbBinlogExpireLogsDays：源库ExpireLogsDays参数检查 srcDbBinlogIsOff：源数据库二进制日志是否开启 srcDbExistUnsupportEngineTable：源数据库是否存在使用不支持的存储引擎的表 srcDbIndexKeyLength：原库索引列长度检查 srcDbIsStandbyTaurus：源库为Taurus备库检查 srcDbNameContainsUnsupportedSymbols：源数据库的库名是否合法 srcDbServerIdCheck：源数据库参数server_id的检查 srcDstTableNameCaseSensitiveCheck：源数据库和目标数据库表名大小写敏感性检查 srcGtidStatusCheck：源数据库GTID状态检查 srcHasLargeColumnTypeCheck：同步对象中是否存在包含longtext,longblob类型字段的表 srcIdentifierWithBreakCheck：源端表结构是否存在换行 srcTableNameContainsNonAscii：源数据库中有包含非ASCII字符的表名 srcTriggerAndEventCheck：识别到源端是否存在触发器/事件 srclogSlaveUpdatesCheck：源数据库参数slave_updates_check检查 targetCheckDynamicMasking：目标库脱敏检查 targetGtidStatusCheck：目标数据库GTID状态检查 tenantDbActionCheck：多租特性检查 userSelectObjectsCheck：选择对象预检查 dstStatusCheck：目标库实例状态是否正常 dstDbPrivilegesIsEnough：目标数据库用户权限是否足够 dstDbVersionSupport：目标数据库版本是否支持 srcDbVersionSupport：源数据库版本是否支持 dstDbConnection：目标数据库连接是否成功 srcDbConnection：源数据库连接是否成功 checkEmptyDstDb：目标库空库检查 srcDbPrivilegesIsEnoughForIncre：增量迁移,源数据库用户权限是否足够 srcHasNoPkTableWhenTgtHasInvisiblePk：源迁移库无主键表检查 userPrivilegeIsEnoughForDefiner：definer迁移权限检查
    * skipReason  跳过预检查原因。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'skippedPrecheckList' => null,
        'skipReason' => null
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
    * skippedPrecheckList  跳过的预检查项。 dstDbDiskSize：目标端磁盘可用大小是否支持 MysqlForeignKeyReferentialActionCheck：源端存在不支持的外键引用操作 MysqlSourceMaxAllowedPacketActionChecker：源库的max_allowed_packet参数值过小，可能会导致数据迁移失败 checkJobDbObjectInfo：对象选择信息检查 checkRecycleBinConsistent：回收站一致性检查 dbClockConsistency：时钟一致性校验 dbGroupConcatMaxLenConsistency：数据库参数group_concat_max_len一致性检查 dbIsolationLevelConsistency：事务隔离级别一致性校验 dbParamConsistency：结构迁移参数一致性校验 dbServerUuidConsistency：SERVER_UUID的一致性检查 dbTimeZoneConsistency：TIME_ZONE的一致性检查 dstMaxAllowedPacketCheck：增加预校验项检查目标库的max_allowed_packet参数 gtidFormatCheck：mysql源预检查GTID格式校验 innodbStrictModeConsistency：数据库参数INNODB_STRICT_MODE的一致性检查 isUserRequireSslLink：用户是否需要SSL mappedNameCheck：目标库对象命名约束检查 mysqlBlockEncryptionModeInconsistency：源库与目标库的参数block_encryption_mode不一致 rdsCreateDefaultPrimaryKeyConsistency：主备库是否开启隐式主键检查 sourceCheckDynamicMasking：源库脱敏检查 sourceEncryptTableActionChecker：源库加密表检查 sqlModeConsistency：数据库参数SQL_MODE的一致性检查 sqlModeNoEngine：目标库SQL_MODE中NO_ENGINE值检查 srcBinlogFormatCheck：源数据库binlog格式检查 srcBinlogRowImageCheck：源数据库参数binlog_row_image检查 srcDbBinlogExpireLogsDays：源库ExpireLogsDays参数检查 srcDbBinlogIsOff：源数据库二进制日志是否开启 srcDbExistUnsupportEngineTable：源数据库是否存在使用不支持的存储引擎的表 srcDbIndexKeyLength：原库索引列长度检查 srcDbIsStandbyTaurus：源库为Taurus备库检查 srcDbNameContainsUnsupportedSymbols：源数据库的库名是否合法 srcDbServerIdCheck：源数据库参数server_id的检查 srcDstTableNameCaseSensitiveCheck：源数据库和目标数据库表名大小写敏感性检查 srcGtidStatusCheck：源数据库GTID状态检查 srcHasLargeColumnTypeCheck：同步对象中是否存在包含longtext,longblob类型字段的表 srcIdentifierWithBreakCheck：源端表结构是否存在换行 srcTableNameContainsNonAscii：源数据库中有包含非ASCII字符的表名 srcTriggerAndEventCheck：识别到源端是否存在触发器/事件 srclogSlaveUpdatesCheck：源数据库参数slave_updates_check检查 targetCheckDynamicMasking：目标库脱敏检查 targetGtidStatusCheck：目标数据库GTID状态检查 tenantDbActionCheck：多租特性检查 userSelectObjectsCheck：选择对象预检查 dstStatusCheck：目标库实例状态是否正常 dstDbPrivilegesIsEnough：目标数据库用户权限是否足够 dstDbVersionSupport：目标数据库版本是否支持 srcDbVersionSupport：源数据库版本是否支持 dstDbConnection：目标数据库连接是否成功 srcDbConnection：源数据库连接是否成功 checkEmptyDstDb：目标库空库检查 srcDbPrivilegesIsEnoughForIncre：增量迁移,源数据库用户权限是否足够 srcHasNoPkTableWhenTgtHasInvisiblePk：源迁移库无主键表检查 userPrivilegeIsEnoughForDefiner：definer迁移权限检查
    * skipReason  跳过预检查原因。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'skippedPrecheckList' => 'skipped_precheck_list',
            'skipReason' => 'skip_reason'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * skippedPrecheckList  跳过的预检查项。 dstDbDiskSize：目标端磁盘可用大小是否支持 MysqlForeignKeyReferentialActionCheck：源端存在不支持的外键引用操作 MysqlSourceMaxAllowedPacketActionChecker：源库的max_allowed_packet参数值过小，可能会导致数据迁移失败 checkJobDbObjectInfo：对象选择信息检查 checkRecycleBinConsistent：回收站一致性检查 dbClockConsistency：时钟一致性校验 dbGroupConcatMaxLenConsistency：数据库参数group_concat_max_len一致性检查 dbIsolationLevelConsistency：事务隔离级别一致性校验 dbParamConsistency：结构迁移参数一致性校验 dbServerUuidConsistency：SERVER_UUID的一致性检查 dbTimeZoneConsistency：TIME_ZONE的一致性检查 dstMaxAllowedPacketCheck：增加预校验项检查目标库的max_allowed_packet参数 gtidFormatCheck：mysql源预检查GTID格式校验 innodbStrictModeConsistency：数据库参数INNODB_STRICT_MODE的一致性检查 isUserRequireSslLink：用户是否需要SSL mappedNameCheck：目标库对象命名约束检查 mysqlBlockEncryptionModeInconsistency：源库与目标库的参数block_encryption_mode不一致 rdsCreateDefaultPrimaryKeyConsistency：主备库是否开启隐式主键检查 sourceCheckDynamicMasking：源库脱敏检查 sourceEncryptTableActionChecker：源库加密表检查 sqlModeConsistency：数据库参数SQL_MODE的一致性检查 sqlModeNoEngine：目标库SQL_MODE中NO_ENGINE值检查 srcBinlogFormatCheck：源数据库binlog格式检查 srcBinlogRowImageCheck：源数据库参数binlog_row_image检查 srcDbBinlogExpireLogsDays：源库ExpireLogsDays参数检查 srcDbBinlogIsOff：源数据库二进制日志是否开启 srcDbExistUnsupportEngineTable：源数据库是否存在使用不支持的存储引擎的表 srcDbIndexKeyLength：原库索引列长度检查 srcDbIsStandbyTaurus：源库为Taurus备库检查 srcDbNameContainsUnsupportedSymbols：源数据库的库名是否合法 srcDbServerIdCheck：源数据库参数server_id的检查 srcDstTableNameCaseSensitiveCheck：源数据库和目标数据库表名大小写敏感性检查 srcGtidStatusCheck：源数据库GTID状态检查 srcHasLargeColumnTypeCheck：同步对象中是否存在包含longtext,longblob类型字段的表 srcIdentifierWithBreakCheck：源端表结构是否存在换行 srcTableNameContainsNonAscii：源数据库中有包含非ASCII字符的表名 srcTriggerAndEventCheck：识别到源端是否存在触发器/事件 srclogSlaveUpdatesCheck：源数据库参数slave_updates_check检查 targetCheckDynamicMasking：目标库脱敏检查 targetGtidStatusCheck：目标数据库GTID状态检查 tenantDbActionCheck：多租特性检查 userSelectObjectsCheck：选择对象预检查 dstStatusCheck：目标库实例状态是否正常 dstDbPrivilegesIsEnough：目标数据库用户权限是否足够 dstDbVersionSupport：目标数据库版本是否支持 srcDbVersionSupport：源数据库版本是否支持 dstDbConnection：目标数据库连接是否成功 srcDbConnection：源数据库连接是否成功 checkEmptyDstDb：目标库空库检查 srcDbPrivilegesIsEnoughForIncre：增量迁移,源数据库用户权限是否足够 srcHasNoPkTableWhenTgtHasInvisiblePk：源迁移库无主键表检查 userPrivilegeIsEnoughForDefiner：definer迁移权限检查
    * skipReason  跳过预检查原因。
    *
    * @var string[]
    */
    protected static $setters = [
            'skippedPrecheckList' => 'setSkippedPrecheckList',
            'skipReason' => 'setSkipReason'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * skippedPrecheckList  跳过的预检查项。 dstDbDiskSize：目标端磁盘可用大小是否支持 MysqlForeignKeyReferentialActionCheck：源端存在不支持的外键引用操作 MysqlSourceMaxAllowedPacketActionChecker：源库的max_allowed_packet参数值过小，可能会导致数据迁移失败 checkJobDbObjectInfo：对象选择信息检查 checkRecycleBinConsistent：回收站一致性检查 dbClockConsistency：时钟一致性校验 dbGroupConcatMaxLenConsistency：数据库参数group_concat_max_len一致性检查 dbIsolationLevelConsistency：事务隔离级别一致性校验 dbParamConsistency：结构迁移参数一致性校验 dbServerUuidConsistency：SERVER_UUID的一致性检查 dbTimeZoneConsistency：TIME_ZONE的一致性检查 dstMaxAllowedPacketCheck：增加预校验项检查目标库的max_allowed_packet参数 gtidFormatCheck：mysql源预检查GTID格式校验 innodbStrictModeConsistency：数据库参数INNODB_STRICT_MODE的一致性检查 isUserRequireSslLink：用户是否需要SSL mappedNameCheck：目标库对象命名约束检查 mysqlBlockEncryptionModeInconsistency：源库与目标库的参数block_encryption_mode不一致 rdsCreateDefaultPrimaryKeyConsistency：主备库是否开启隐式主键检查 sourceCheckDynamicMasking：源库脱敏检查 sourceEncryptTableActionChecker：源库加密表检查 sqlModeConsistency：数据库参数SQL_MODE的一致性检查 sqlModeNoEngine：目标库SQL_MODE中NO_ENGINE值检查 srcBinlogFormatCheck：源数据库binlog格式检查 srcBinlogRowImageCheck：源数据库参数binlog_row_image检查 srcDbBinlogExpireLogsDays：源库ExpireLogsDays参数检查 srcDbBinlogIsOff：源数据库二进制日志是否开启 srcDbExistUnsupportEngineTable：源数据库是否存在使用不支持的存储引擎的表 srcDbIndexKeyLength：原库索引列长度检查 srcDbIsStandbyTaurus：源库为Taurus备库检查 srcDbNameContainsUnsupportedSymbols：源数据库的库名是否合法 srcDbServerIdCheck：源数据库参数server_id的检查 srcDstTableNameCaseSensitiveCheck：源数据库和目标数据库表名大小写敏感性检查 srcGtidStatusCheck：源数据库GTID状态检查 srcHasLargeColumnTypeCheck：同步对象中是否存在包含longtext,longblob类型字段的表 srcIdentifierWithBreakCheck：源端表结构是否存在换行 srcTableNameContainsNonAscii：源数据库中有包含非ASCII字符的表名 srcTriggerAndEventCheck：识别到源端是否存在触发器/事件 srclogSlaveUpdatesCheck：源数据库参数slave_updates_check检查 targetCheckDynamicMasking：目标库脱敏检查 targetGtidStatusCheck：目标数据库GTID状态检查 tenantDbActionCheck：多租特性检查 userSelectObjectsCheck：选择对象预检查 dstStatusCheck：目标库实例状态是否正常 dstDbPrivilegesIsEnough：目标数据库用户权限是否足够 dstDbVersionSupport：目标数据库版本是否支持 srcDbVersionSupport：源数据库版本是否支持 dstDbConnection：目标数据库连接是否成功 srcDbConnection：源数据库连接是否成功 checkEmptyDstDb：目标库空库检查 srcDbPrivilegesIsEnoughForIncre：增量迁移,源数据库用户权限是否足够 srcHasNoPkTableWhenTgtHasInvisiblePk：源迁移库无主键表检查 userPrivilegeIsEnoughForDefiner：definer迁移权限检查
    * skipReason  跳过预检查原因。
    *
    * @var string[]
    */
    protected static $getters = [
            'skippedPrecheckList' => 'getSkippedPrecheckList',
            'skipReason' => 'getSkipReason'
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
        $this->container['skippedPrecheckList'] = isset($data['skippedPrecheckList']) ? $data['skippedPrecheckList'] : null;
        $this->container['skipReason'] = isset($data['skipReason']) ? $data['skipReason'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['skippedPrecheckList'] === null) {
            $invalidProperties[] = "'skippedPrecheckList' can't be null";
        }
        if ($this->container['skipReason'] === null) {
            $invalidProperties[] = "'skipReason' can't be null";
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
    * Gets skippedPrecheckList
    *  跳过的预检查项。 dstDbDiskSize：目标端磁盘可用大小是否支持 MysqlForeignKeyReferentialActionCheck：源端存在不支持的外键引用操作 MysqlSourceMaxAllowedPacketActionChecker：源库的max_allowed_packet参数值过小，可能会导致数据迁移失败 checkJobDbObjectInfo：对象选择信息检查 checkRecycleBinConsistent：回收站一致性检查 dbClockConsistency：时钟一致性校验 dbGroupConcatMaxLenConsistency：数据库参数group_concat_max_len一致性检查 dbIsolationLevelConsistency：事务隔离级别一致性校验 dbParamConsistency：结构迁移参数一致性校验 dbServerUuidConsistency：SERVER_UUID的一致性检查 dbTimeZoneConsistency：TIME_ZONE的一致性检查 dstMaxAllowedPacketCheck：增加预校验项检查目标库的max_allowed_packet参数 gtidFormatCheck：mysql源预检查GTID格式校验 innodbStrictModeConsistency：数据库参数INNODB_STRICT_MODE的一致性检查 isUserRequireSslLink：用户是否需要SSL mappedNameCheck：目标库对象命名约束检查 mysqlBlockEncryptionModeInconsistency：源库与目标库的参数block_encryption_mode不一致 rdsCreateDefaultPrimaryKeyConsistency：主备库是否开启隐式主键检查 sourceCheckDynamicMasking：源库脱敏检查 sourceEncryptTableActionChecker：源库加密表检查 sqlModeConsistency：数据库参数SQL_MODE的一致性检查 sqlModeNoEngine：目标库SQL_MODE中NO_ENGINE值检查 srcBinlogFormatCheck：源数据库binlog格式检查 srcBinlogRowImageCheck：源数据库参数binlog_row_image检查 srcDbBinlogExpireLogsDays：源库ExpireLogsDays参数检查 srcDbBinlogIsOff：源数据库二进制日志是否开启 srcDbExistUnsupportEngineTable：源数据库是否存在使用不支持的存储引擎的表 srcDbIndexKeyLength：原库索引列长度检查 srcDbIsStandbyTaurus：源库为Taurus备库检查 srcDbNameContainsUnsupportedSymbols：源数据库的库名是否合法 srcDbServerIdCheck：源数据库参数server_id的检查 srcDstTableNameCaseSensitiveCheck：源数据库和目标数据库表名大小写敏感性检查 srcGtidStatusCheck：源数据库GTID状态检查 srcHasLargeColumnTypeCheck：同步对象中是否存在包含longtext,longblob类型字段的表 srcIdentifierWithBreakCheck：源端表结构是否存在换行 srcTableNameContainsNonAscii：源数据库中有包含非ASCII字符的表名 srcTriggerAndEventCheck：识别到源端是否存在触发器/事件 srclogSlaveUpdatesCheck：源数据库参数slave_updates_check检查 targetCheckDynamicMasking：目标库脱敏检查 targetGtidStatusCheck：目标数据库GTID状态检查 tenantDbActionCheck：多租特性检查 userSelectObjectsCheck：选择对象预检查 dstStatusCheck：目标库实例状态是否正常 dstDbPrivilegesIsEnough：目标数据库用户权限是否足够 dstDbVersionSupport：目标数据库版本是否支持 srcDbVersionSupport：源数据库版本是否支持 dstDbConnection：目标数据库连接是否成功 srcDbConnection：源数据库连接是否成功 checkEmptyDstDb：目标库空库检查 srcDbPrivilegesIsEnoughForIncre：增量迁移,源数据库用户权限是否足够 srcHasNoPkTableWhenTgtHasInvisiblePk：源迁移库无主键表检查 userPrivilegeIsEnoughForDefiner：definer迁移权限检查
    *
    * @return string[]
    */
    public function getSkippedPrecheckList()
    {
        return $this->container['skippedPrecheckList'];
    }

    /**
    * Sets skippedPrecheckList
    *
    * @param string[] $skippedPrecheckList 跳过的预检查项。 dstDbDiskSize：目标端磁盘可用大小是否支持 MysqlForeignKeyReferentialActionCheck：源端存在不支持的外键引用操作 MysqlSourceMaxAllowedPacketActionChecker：源库的max_allowed_packet参数值过小，可能会导致数据迁移失败 checkJobDbObjectInfo：对象选择信息检查 checkRecycleBinConsistent：回收站一致性检查 dbClockConsistency：时钟一致性校验 dbGroupConcatMaxLenConsistency：数据库参数group_concat_max_len一致性检查 dbIsolationLevelConsistency：事务隔离级别一致性校验 dbParamConsistency：结构迁移参数一致性校验 dbServerUuidConsistency：SERVER_UUID的一致性检查 dbTimeZoneConsistency：TIME_ZONE的一致性检查 dstMaxAllowedPacketCheck：增加预校验项检查目标库的max_allowed_packet参数 gtidFormatCheck：mysql源预检查GTID格式校验 innodbStrictModeConsistency：数据库参数INNODB_STRICT_MODE的一致性检查 isUserRequireSslLink：用户是否需要SSL mappedNameCheck：目标库对象命名约束检查 mysqlBlockEncryptionModeInconsistency：源库与目标库的参数block_encryption_mode不一致 rdsCreateDefaultPrimaryKeyConsistency：主备库是否开启隐式主键检查 sourceCheckDynamicMasking：源库脱敏检查 sourceEncryptTableActionChecker：源库加密表检查 sqlModeConsistency：数据库参数SQL_MODE的一致性检查 sqlModeNoEngine：目标库SQL_MODE中NO_ENGINE值检查 srcBinlogFormatCheck：源数据库binlog格式检查 srcBinlogRowImageCheck：源数据库参数binlog_row_image检查 srcDbBinlogExpireLogsDays：源库ExpireLogsDays参数检查 srcDbBinlogIsOff：源数据库二进制日志是否开启 srcDbExistUnsupportEngineTable：源数据库是否存在使用不支持的存储引擎的表 srcDbIndexKeyLength：原库索引列长度检查 srcDbIsStandbyTaurus：源库为Taurus备库检查 srcDbNameContainsUnsupportedSymbols：源数据库的库名是否合法 srcDbServerIdCheck：源数据库参数server_id的检查 srcDstTableNameCaseSensitiveCheck：源数据库和目标数据库表名大小写敏感性检查 srcGtidStatusCheck：源数据库GTID状态检查 srcHasLargeColumnTypeCheck：同步对象中是否存在包含longtext,longblob类型字段的表 srcIdentifierWithBreakCheck：源端表结构是否存在换行 srcTableNameContainsNonAscii：源数据库中有包含非ASCII字符的表名 srcTriggerAndEventCheck：识别到源端是否存在触发器/事件 srclogSlaveUpdatesCheck：源数据库参数slave_updates_check检查 targetCheckDynamicMasking：目标库脱敏检查 targetGtidStatusCheck：目标数据库GTID状态检查 tenantDbActionCheck：多租特性检查 userSelectObjectsCheck：选择对象预检查 dstStatusCheck：目标库实例状态是否正常 dstDbPrivilegesIsEnough：目标数据库用户权限是否足够 dstDbVersionSupport：目标数据库版本是否支持 srcDbVersionSupport：源数据库版本是否支持 dstDbConnection：目标数据库连接是否成功 srcDbConnection：源数据库连接是否成功 checkEmptyDstDb：目标库空库检查 srcDbPrivilegesIsEnoughForIncre：增量迁移,源数据库用户权限是否足够 srcHasNoPkTableWhenTgtHasInvisiblePk：源迁移库无主键表检查 userPrivilegeIsEnoughForDefiner：definer迁移权限检查
    *
    * @return $this
    */
    public function setSkippedPrecheckList($skippedPrecheckList)
    {
        $this->container['skippedPrecheckList'] = $skippedPrecheckList;
        return $this;
    }

    /**
    * Gets skipReason
    *  跳过预检查原因。
    *
    * @return string
    */
    public function getSkipReason()
    {
        return $this->container['skipReason'];
    }

    /**
    * Sets skipReason
    *
    * @param string $skipReason 跳过预检查原因。
    *
    * @return $this
    */
    public function setSkipReason($skipReason)
    {
        $this->container['skipReason'] = $skipReason;
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

