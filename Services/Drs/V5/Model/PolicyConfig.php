<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PolicyConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PolicyConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * filterDdlPolicy  过滤DDL策略。取值： - drop_database  场景区别： - 实时迁移场景：MySQL迁移可填\"\"，表示不过滤DROP DATABASE。 - 实时同步场景：MySQL同步只能填\"drop_database\"。
    * conflictPolicy  增量阶段冲突策略。该冲突策略特指增量同步中的冲突处理策略,全量阶段的冲突默认忽略。取值： - ignore：忽略。当同步数据与目标库已有数据冲突时（主键/唯一键重复等），DRS将忽略源库的冲突数据，并保留目标库中的冲突数据，继续进行后续同步。  - stop：报错。当同步数据与目标库已有数据冲突时（主键/唯一键重复等），同步任务将失败并立即中止。可在同步日志中查看详细信息。  - overwrite：覆盖。当同步数据与目标库已有数据冲突时（主键/唯一键重复等），将覆盖原来的冲突数据。  场景区别： - 实时迁移场景：不支持。 - 实时同步场景：支持。
    * indexTrans  对象同步范围：是否同步普通索引。DRS将默认同步主键/唯一索引，普通索引是指除主键/唯一索引以外的其他类型索引。取值： - true：将会同步全部的索引。 - false：仅同步主键/唯一索引，普通索引不会同步。
    * ddlTrans  对象同步范围：同步增量阶段是否同步DDL。取值： - true：增量阶段同步DDL。 - false：增量阶段不同步DDL。
    * dataSyncTopologyType  数据同步拓扑。数据同步功能支持多种同步拓扑，您可以根据业务需求规划您的同步实例。参考链接。取值： - one2one：一对一。 - one2many：一对多。 - many2one：多对一。
    * supportDdlInfo  增量支持的DDL。取值： - \"CREATE_TABLE,ADD_COLUMN,MODIFY_COLUMN,CHANGE_COLUMN,DROP_INDEX,ADD_INDEX,CREATE_INDEX,RENAME_INDEX\"。 - 含义解释： - CREATE_TABLE：创建表。 - ADD_COLUMN：加列。 - MODIFY_COLUMN：改列属性。 - CHANGE_COLUMN：改列属性。 - DROP_INDEX：删除索引。 - ADD_INDEX：加索引。 - CREATE_INDEX：创建索引。 - RENAME_INDEX：重命名索引。 - 使用提示： 1.一对一，一对多场景，如果业务上认为源和目标应该使用保持严格一致，那么高危类DDL也应该勾选并同步。 2.一对一，一对多场景，如果业务上确定某个高危DDL不应该发生，则可以不勾选同步高危类DDL，这样DRS将拦截过滤这个DDL，从而起到保护目标数据的作用，但需要知晓过滤DDL的附带问题是可能导致同步失败，例如过滤删列动作。 3.多对一数据聚合场景，最佳实践是推荐只选择同步加列DDL，其他大部分DDL同步都因目标表修改而导致其他任务失败/数据不一致的情况发生，常见情况有：a、同步truncate导致目标数据全部被清空； b、同步创建索引导致目标表被锁定； c、同步rename导致其他任务找不到目标表而失败；d、同步改列导致其他任务因数据类型不兼容而失败；
    * syncTypePolicy  同步数据类型。取值：supportAllType（同步所有类型），tableData（同步数据），tableStructure（同步表结构），constraintData（索引同步）。 说明：除supportAllType以外，其他类型可组合填写，例如：\"tableData,tableStructure\" 。
    * incrementReadMode  oracle-gausssdb增量读取方式：logminer，xstream
    * dmlTypes  DML同步类型。
    * isCreateTableWithIndex  索引与表结构是否同时建立。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'filterDdlPolicy' => 'string',
            'conflictPolicy' => 'string',
            'indexTrans' => 'bool',
            'ddlTrans' => 'bool',
            'dataSyncTopologyType' => 'string',
            'supportDdlInfo' => 'string',
            'syncTypePolicy' => 'string',
            'incrementReadMode' => 'string',
            'dmlTypes' => 'string',
            'isCreateTableWithIndex' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * filterDdlPolicy  过滤DDL策略。取值： - drop_database  场景区别： - 实时迁移场景：MySQL迁移可填\"\"，表示不过滤DROP DATABASE。 - 实时同步场景：MySQL同步只能填\"drop_database\"。
    * conflictPolicy  增量阶段冲突策略。该冲突策略特指增量同步中的冲突处理策略,全量阶段的冲突默认忽略。取值： - ignore：忽略。当同步数据与目标库已有数据冲突时（主键/唯一键重复等），DRS将忽略源库的冲突数据，并保留目标库中的冲突数据，继续进行后续同步。  - stop：报错。当同步数据与目标库已有数据冲突时（主键/唯一键重复等），同步任务将失败并立即中止。可在同步日志中查看详细信息。  - overwrite：覆盖。当同步数据与目标库已有数据冲突时（主键/唯一键重复等），将覆盖原来的冲突数据。  场景区别： - 实时迁移场景：不支持。 - 实时同步场景：支持。
    * indexTrans  对象同步范围：是否同步普通索引。DRS将默认同步主键/唯一索引，普通索引是指除主键/唯一索引以外的其他类型索引。取值： - true：将会同步全部的索引。 - false：仅同步主键/唯一索引，普通索引不会同步。
    * ddlTrans  对象同步范围：同步增量阶段是否同步DDL。取值： - true：增量阶段同步DDL。 - false：增量阶段不同步DDL。
    * dataSyncTopologyType  数据同步拓扑。数据同步功能支持多种同步拓扑，您可以根据业务需求规划您的同步实例。参考链接。取值： - one2one：一对一。 - one2many：一对多。 - many2one：多对一。
    * supportDdlInfo  增量支持的DDL。取值： - \"CREATE_TABLE,ADD_COLUMN,MODIFY_COLUMN,CHANGE_COLUMN,DROP_INDEX,ADD_INDEX,CREATE_INDEX,RENAME_INDEX\"。 - 含义解释： - CREATE_TABLE：创建表。 - ADD_COLUMN：加列。 - MODIFY_COLUMN：改列属性。 - CHANGE_COLUMN：改列属性。 - DROP_INDEX：删除索引。 - ADD_INDEX：加索引。 - CREATE_INDEX：创建索引。 - RENAME_INDEX：重命名索引。 - 使用提示： 1.一对一，一对多场景，如果业务上认为源和目标应该使用保持严格一致，那么高危类DDL也应该勾选并同步。 2.一对一，一对多场景，如果业务上确定某个高危DDL不应该发生，则可以不勾选同步高危类DDL，这样DRS将拦截过滤这个DDL，从而起到保护目标数据的作用，但需要知晓过滤DDL的附带问题是可能导致同步失败，例如过滤删列动作。 3.多对一数据聚合场景，最佳实践是推荐只选择同步加列DDL，其他大部分DDL同步都因目标表修改而导致其他任务失败/数据不一致的情况发生，常见情况有：a、同步truncate导致目标数据全部被清空； b、同步创建索引导致目标表被锁定； c、同步rename导致其他任务找不到目标表而失败；d、同步改列导致其他任务因数据类型不兼容而失败；
    * syncTypePolicy  同步数据类型。取值：supportAllType（同步所有类型），tableData（同步数据），tableStructure（同步表结构），constraintData（索引同步）。 说明：除supportAllType以外，其他类型可组合填写，例如：\"tableData,tableStructure\" 。
    * incrementReadMode  oracle-gausssdb增量读取方式：logminer，xstream
    * dmlTypes  DML同步类型。
    * isCreateTableWithIndex  索引与表结构是否同时建立。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'filterDdlPolicy' => null,
        'conflictPolicy' => null,
        'indexTrans' => null,
        'ddlTrans' => null,
        'dataSyncTopologyType' => null,
        'supportDdlInfo' => null,
        'syncTypePolicy' => null,
        'incrementReadMode' => null,
        'dmlTypes' => null,
        'isCreateTableWithIndex' => null
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
    * filterDdlPolicy  过滤DDL策略。取值： - drop_database  场景区别： - 实时迁移场景：MySQL迁移可填\"\"，表示不过滤DROP DATABASE。 - 实时同步场景：MySQL同步只能填\"drop_database\"。
    * conflictPolicy  增量阶段冲突策略。该冲突策略特指增量同步中的冲突处理策略,全量阶段的冲突默认忽略。取值： - ignore：忽略。当同步数据与目标库已有数据冲突时（主键/唯一键重复等），DRS将忽略源库的冲突数据，并保留目标库中的冲突数据，继续进行后续同步。  - stop：报错。当同步数据与目标库已有数据冲突时（主键/唯一键重复等），同步任务将失败并立即中止。可在同步日志中查看详细信息。  - overwrite：覆盖。当同步数据与目标库已有数据冲突时（主键/唯一键重复等），将覆盖原来的冲突数据。  场景区别： - 实时迁移场景：不支持。 - 实时同步场景：支持。
    * indexTrans  对象同步范围：是否同步普通索引。DRS将默认同步主键/唯一索引，普通索引是指除主键/唯一索引以外的其他类型索引。取值： - true：将会同步全部的索引。 - false：仅同步主键/唯一索引，普通索引不会同步。
    * ddlTrans  对象同步范围：同步增量阶段是否同步DDL。取值： - true：增量阶段同步DDL。 - false：增量阶段不同步DDL。
    * dataSyncTopologyType  数据同步拓扑。数据同步功能支持多种同步拓扑，您可以根据业务需求规划您的同步实例。参考链接。取值： - one2one：一对一。 - one2many：一对多。 - many2one：多对一。
    * supportDdlInfo  增量支持的DDL。取值： - \"CREATE_TABLE,ADD_COLUMN,MODIFY_COLUMN,CHANGE_COLUMN,DROP_INDEX,ADD_INDEX,CREATE_INDEX,RENAME_INDEX\"。 - 含义解释： - CREATE_TABLE：创建表。 - ADD_COLUMN：加列。 - MODIFY_COLUMN：改列属性。 - CHANGE_COLUMN：改列属性。 - DROP_INDEX：删除索引。 - ADD_INDEX：加索引。 - CREATE_INDEX：创建索引。 - RENAME_INDEX：重命名索引。 - 使用提示： 1.一对一，一对多场景，如果业务上认为源和目标应该使用保持严格一致，那么高危类DDL也应该勾选并同步。 2.一对一，一对多场景，如果业务上确定某个高危DDL不应该发生，则可以不勾选同步高危类DDL，这样DRS将拦截过滤这个DDL，从而起到保护目标数据的作用，但需要知晓过滤DDL的附带问题是可能导致同步失败，例如过滤删列动作。 3.多对一数据聚合场景，最佳实践是推荐只选择同步加列DDL，其他大部分DDL同步都因目标表修改而导致其他任务失败/数据不一致的情况发生，常见情况有：a、同步truncate导致目标数据全部被清空； b、同步创建索引导致目标表被锁定； c、同步rename导致其他任务找不到目标表而失败；d、同步改列导致其他任务因数据类型不兼容而失败；
    * syncTypePolicy  同步数据类型。取值：supportAllType（同步所有类型），tableData（同步数据），tableStructure（同步表结构），constraintData（索引同步）。 说明：除supportAllType以外，其他类型可组合填写，例如：\"tableData,tableStructure\" 。
    * incrementReadMode  oracle-gausssdb增量读取方式：logminer，xstream
    * dmlTypes  DML同步类型。
    * isCreateTableWithIndex  索引与表结构是否同时建立。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'filterDdlPolicy' => 'filter_ddl_policy',
            'conflictPolicy' => 'conflict_policy',
            'indexTrans' => 'index_trans',
            'ddlTrans' => 'ddl_trans',
            'dataSyncTopologyType' => 'data_sync_topology_type',
            'supportDdlInfo' => 'support_ddl_info',
            'syncTypePolicy' => 'sync_type_policy',
            'incrementReadMode' => 'increment_read_mode',
            'dmlTypes' => 'dml_types',
            'isCreateTableWithIndex' => 'is_create_table_with_index'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * filterDdlPolicy  过滤DDL策略。取值： - drop_database  场景区别： - 实时迁移场景：MySQL迁移可填\"\"，表示不过滤DROP DATABASE。 - 实时同步场景：MySQL同步只能填\"drop_database\"。
    * conflictPolicy  增量阶段冲突策略。该冲突策略特指增量同步中的冲突处理策略,全量阶段的冲突默认忽略。取值： - ignore：忽略。当同步数据与目标库已有数据冲突时（主键/唯一键重复等），DRS将忽略源库的冲突数据，并保留目标库中的冲突数据，继续进行后续同步。  - stop：报错。当同步数据与目标库已有数据冲突时（主键/唯一键重复等），同步任务将失败并立即中止。可在同步日志中查看详细信息。  - overwrite：覆盖。当同步数据与目标库已有数据冲突时（主键/唯一键重复等），将覆盖原来的冲突数据。  场景区别： - 实时迁移场景：不支持。 - 实时同步场景：支持。
    * indexTrans  对象同步范围：是否同步普通索引。DRS将默认同步主键/唯一索引，普通索引是指除主键/唯一索引以外的其他类型索引。取值： - true：将会同步全部的索引。 - false：仅同步主键/唯一索引，普通索引不会同步。
    * ddlTrans  对象同步范围：同步增量阶段是否同步DDL。取值： - true：增量阶段同步DDL。 - false：增量阶段不同步DDL。
    * dataSyncTopologyType  数据同步拓扑。数据同步功能支持多种同步拓扑，您可以根据业务需求规划您的同步实例。参考链接。取值： - one2one：一对一。 - one2many：一对多。 - many2one：多对一。
    * supportDdlInfo  增量支持的DDL。取值： - \"CREATE_TABLE,ADD_COLUMN,MODIFY_COLUMN,CHANGE_COLUMN,DROP_INDEX,ADD_INDEX,CREATE_INDEX,RENAME_INDEX\"。 - 含义解释： - CREATE_TABLE：创建表。 - ADD_COLUMN：加列。 - MODIFY_COLUMN：改列属性。 - CHANGE_COLUMN：改列属性。 - DROP_INDEX：删除索引。 - ADD_INDEX：加索引。 - CREATE_INDEX：创建索引。 - RENAME_INDEX：重命名索引。 - 使用提示： 1.一对一，一对多场景，如果业务上认为源和目标应该使用保持严格一致，那么高危类DDL也应该勾选并同步。 2.一对一，一对多场景，如果业务上确定某个高危DDL不应该发生，则可以不勾选同步高危类DDL，这样DRS将拦截过滤这个DDL，从而起到保护目标数据的作用，但需要知晓过滤DDL的附带问题是可能导致同步失败，例如过滤删列动作。 3.多对一数据聚合场景，最佳实践是推荐只选择同步加列DDL，其他大部分DDL同步都因目标表修改而导致其他任务失败/数据不一致的情况发生，常见情况有：a、同步truncate导致目标数据全部被清空； b、同步创建索引导致目标表被锁定； c、同步rename导致其他任务找不到目标表而失败；d、同步改列导致其他任务因数据类型不兼容而失败；
    * syncTypePolicy  同步数据类型。取值：supportAllType（同步所有类型），tableData（同步数据），tableStructure（同步表结构），constraintData（索引同步）。 说明：除supportAllType以外，其他类型可组合填写，例如：\"tableData,tableStructure\" 。
    * incrementReadMode  oracle-gausssdb增量读取方式：logminer，xstream
    * dmlTypes  DML同步类型。
    * isCreateTableWithIndex  索引与表结构是否同时建立。
    *
    * @var string[]
    */
    protected static $setters = [
            'filterDdlPolicy' => 'setFilterDdlPolicy',
            'conflictPolicy' => 'setConflictPolicy',
            'indexTrans' => 'setIndexTrans',
            'ddlTrans' => 'setDdlTrans',
            'dataSyncTopologyType' => 'setDataSyncTopologyType',
            'supportDdlInfo' => 'setSupportDdlInfo',
            'syncTypePolicy' => 'setSyncTypePolicy',
            'incrementReadMode' => 'setIncrementReadMode',
            'dmlTypes' => 'setDmlTypes',
            'isCreateTableWithIndex' => 'setIsCreateTableWithIndex'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * filterDdlPolicy  过滤DDL策略。取值： - drop_database  场景区别： - 实时迁移场景：MySQL迁移可填\"\"，表示不过滤DROP DATABASE。 - 实时同步场景：MySQL同步只能填\"drop_database\"。
    * conflictPolicy  增量阶段冲突策略。该冲突策略特指增量同步中的冲突处理策略,全量阶段的冲突默认忽略。取值： - ignore：忽略。当同步数据与目标库已有数据冲突时（主键/唯一键重复等），DRS将忽略源库的冲突数据，并保留目标库中的冲突数据，继续进行后续同步。  - stop：报错。当同步数据与目标库已有数据冲突时（主键/唯一键重复等），同步任务将失败并立即中止。可在同步日志中查看详细信息。  - overwrite：覆盖。当同步数据与目标库已有数据冲突时（主键/唯一键重复等），将覆盖原来的冲突数据。  场景区别： - 实时迁移场景：不支持。 - 实时同步场景：支持。
    * indexTrans  对象同步范围：是否同步普通索引。DRS将默认同步主键/唯一索引，普通索引是指除主键/唯一索引以外的其他类型索引。取值： - true：将会同步全部的索引。 - false：仅同步主键/唯一索引，普通索引不会同步。
    * ddlTrans  对象同步范围：同步增量阶段是否同步DDL。取值： - true：增量阶段同步DDL。 - false：增量阶段不同步DDL。
    * dataSyncTopologyType  数据同步拓扑。数据同步功能支持多种同步拓扑，您可以根据业务需求规划您的同步实例。参考链接。取值： - one2one：一对一。 - one2many：一对多。 - many2one：多对一。
    * supportDdlInfo  增量支持的DDL。取值： - \"CREATE_TABLE,ADD_COLUMN,MODIFY_COLUMN,CHANGE_COLUMN,DROP_INDEX,ADD_INDEX,CREATE_INDEX,RENAME_INDEX\"。 - 含义解释： - CREATE_TABLE：创建表。 - ADD_COLUMN：加列。 - MODIFY_COLUMN：改列属性。 - CHANGE_COLUMN：改列属性。 - DROP_INDEX：删除索引。 - ADD_INDEX：加索引。 - CREATE_INDEX：创建索引。 - RENAME_INDEX：重命名索引。 - 使用提示： 1.一对一，一对多场景，如果业务上认为源和目标应该使用保持严格一致，那么高危类DDL也应该勾选并同步。 2.一对一，一对多场景，如果业务上确定某个高危DDL不应该发生，则可以不勾选同步高危类DDL，这样DRS将拦截过滤这个DDL，从而起到保护目标数据的作用，但需要知晓过滤DDL的附带问题是可能导致同步失败，例如过滤删列动作。 3.多对一数据聚合场景，最佳实践是推荐只选择同步加列DDL，其他大部分DDL同步都因目标表修改而导致其他任务失败/数据不一致的情况发生，常见情况有：a、同步truncate导致目标数据全部被清空； b、同步创建索引导致目标表被锁定； c、同步rename导致其他任务找不到目标表而失败；d、同步改列导致其他任务因数据类型不兼容而失败；
    * syncTypePolicy  同步数据类型。取值：supportAllType（同步所有类型），tableData（同步数据），tableStructure（同步表结构），constraintData（索引同步）。 说明：除supportAllType以外，其他类型可组合填写，例如：\"tableData,tableStructure\" 。
    * incrementReadMode  oracle-gausssdb增量读取方式：logminer，xstream
    * dmlTypes  DML同步类型。
    * isCreateTableWithIndex  索引与表结构是否同时建立。
    *
    * @var string[]
    */
    protected static $getters = [
            'filterDdlPolicy' => 'getFilterDdlPolicy',
            'conflictPolicy' => 'getConflictPolicy',
            'indexTrans' => 'getIndexTrans',
            'ddlTrans' => 'getDdlTrans',
            'dataSyncTopologyType' => 'getDataSyncTopologyType',
            'supportDdlInfo' => 'getSupportDdlInfo',
            'syncTypePolicy' => 'getSyncTypePolicy',
            'incrementReadMode' => 'getIncrementReadMode',
            'dmlTypes' => 'getDmlTypes',
            'isCreateTableWithIndex' => 'getIsCreateTableWithIndex'
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
    const FILTER_DDL_POLICY_DROP_DATABASE = 'drop_database';
    const CONFLICT_POLICY_IGNORE = 'ignore';
    const CONFLICT_POLICY_STOP = 'stop';
    const CONFLICT_POLICY_OVERWRITE = 'overwrite';
    const DATA_SYNC_TOPOLOGY_TYPE_ONE2ONE = 'one2one';
    const DATA_SYNC_TOPOLOGY_TYPE_ONE2MANY = 'one2many';
    const DATA_SYNC_TOPOLOGY_TYPE_MANY2ONE = 'many2one';
    const SUPPORT_DDL_INFO_CREATE_TABLE = 'CREATE_TABLE';
    const SUPPORT_DDL_INFO_ADD_COLUMN = 'ADD_COLUMN';
    const SUPPORT_DDL_INFO_MODIFY_COLUMN = 'MODIFY_COLUMN';
    const SUPPORT_DDL_INFO_CHANGE_COLUMN = 'CHANGE_COLUMN';
    const SUPPORT_DDL_INFO_DROP_INDEX = 'DROP_INDEX';
    const SUPPORT_DDL_INFO_ADD_INDEX = 'ADD_INDEX';
    const SUPPORT_DDL_INFO_CREATE_INDEX = 'CREATE_INDEX';
    const SUPPORT_DDL_INFO_RENAME_INDEX = 'RENAME_INDEX';
    

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
    public function getConflictPolicyAllowableValues()
    {
        return [
            self::CONFLICT_POLICY_IGNORE,
            self::CONFLICT_POLICY_STOP,
            self::CONFLICT_POLICY_OVERWRITE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDataSyncTopologyTypeAllowableValues()
    {
        return [
            self::DATA_SYNC_TOPOLOGY_TYPE_ONE2ONE,
            self::DATA_SYNC_TOPOLOGY_TYPE_ONE2MANY,
            self::DATA_SYNC_TOPOLOGY_TYPE_MANY2ONE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSupportDdlInfoAllowableValues()
    {
        return [
            self::SUPPORT_DDL_INFO_CREATE_TABLE,
            self::SUPPORT_DDL_INFO_ADD_COLUMN,
            self::SUPPORT_DDL_INFO_MODIFY_COLUMN,
            self::SUPPORT_DDL_INFO_CHANGE_COLUMN,
            self::SUPPORT_DDL_INFO_DROP_INDEX,
            self::SUPPORT_DDL_INFO_ADD_INDEX,
            self::SUPPORT_DDL_INFO_CREATE_INDEX,
            self::SUPPORT_DDL_INFO_RENAME_INDEX,
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
        $this->container['filterDdlPolicy'] = isset($data['filterDdlPolicy']) ? $data['filterDdlPolicy'] : null;
        $this->container['conflictPolicy'] = isset($data['conflictPolicy']) ? $data['conflictPolicy'] : null;
        $this->container['indexTrans'] = isset($data['indexTrans']) ? $data['indexTrans'] : null;
        $this->container['ddlTrans'] = isset($data['ddlTrans']) ? $data['ddlTrans'] : null;
        $this->container['dataSyncTopologyType'] = isset($data['dataSyncTopologyType']) ? $data['dataSyncTopologyType'] : null;
        $this->container['supportDdlInfo'] = isset($data['supportDdlInfo']) ? $data['supportDdlInfo'] : null;
        $this->container['syncTypePolicy'] = isset($data['syncTypePolicy']) ? $data['syncTypePolicy'] : null;
        $this->container['incrementReadMode'] = isset($data['incrementReadMode']) ? $data['incrementReadMode'] : null;
        $this->container['dmlTypes'] = isset($data['dmlTypes']) ? $data['dmlTypes'] : null;
        $this->container['isCreateTableWithIndex'] = isset($data['isCreateTableWithIndex']) ? $data['isCreateTableWithIndex'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getFilterDdlPolicyAllowableValues();
                if (!is_null($this->container['filterDdlPolicy']) && !in_array($this->container['filterDdlPolicy'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'filterDdlPolicy', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getConflictPolicyAllowableValues();
                if (!is_null($this->container['conflictPolicy']) && !in_array($this->container['conflictPolicy'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'conflictPolicy', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getDataSyncTopologyTypeAllowableValues();
                if (!is_null($this->container['dataSyncTopologyType']) && !in_array($this->container['dataSyncTopologyType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'dataSyncTopologyType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getSupportDdlInfoAllowableValues();
                if (!is_null($this->container['supportDdlInfo']) && !in_array($this->container['supportDdlInfo'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'supportDdlInfo', must be one of '%s'",
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
    * Gets filterDdlPolicy
    *  过滤DDL策略。取值： - drop_database  场景区别： - 实时迁移场景：MySQL迁移可填\"\"，表示不过滤DROP DATABASE。 - 实时同步场景：MySQL同步只能填\"drop_database\"。
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
    * @param string|null $filterDdlPolicy 过滤DDL策略。取值： - drop_database  场景区别： - 实时迁移场景：MySQL迁移可填\"\"，表示不过滤DROP DATABASE。 - 实时同步场景：MySQL同步只能填\"drop_database\"。
    *
    * @return $this
    */
    public function setFilterDdlPolicy($filterDdlPolicy)
    {
        $this->container['filterDdlPolicy'] = $filterDdlPolicy;
        return $this;
    }

    /**
    * Gets conflictPolicy
    *  增量阶段冲突策略。该冲突策略特指增量同步中的冲突处理策略,全量阶段的冲突默认忽略。取值： - ignore：忽略。当同步数据与目标库已有数据冲突时（主键/唯一键重复等），DRS将忽略源库的冲突数据，并保留目标库中的冲突数据，继续进行后续同步。  - stop：报错。当同步数据与目标库已有数据冲突时（主键/唯一键重复等），同步任务将失败并立即中止。可在同步日志中查看详细信息。  - overwrite：覆盖。当同步数据与目标库已有数据冲突时（主键/唯一键重复等），将覆盖原来的冲突数据。  场景区别： - 实时迁移场景：不支持。 - 实时同步场景：支持。
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
    * @param string|null $conflictPolicy 增量阶段冲突策略。该冲突策略特指增量同步中的冲突处理策略,全量阶段的冲突默认忽略。取值： - ignore：忽略。当同步数据与目标库已有数据冲突时（主键/唯一键重复等），DRS将忽略源库的冲突数据，并保留目标库中的冲突数据，继续进行后续同步。  - stop：报错。当同步数据与目标库已有数据冲突时（主键/唯一键重复等），同步任务将失败并立即中止。可在同步日志中查看详细信息。  - overwrite：覆盖。当同步数据与目标库已有数据冲突时（主键/唯一键重复等），将覆盖原来的冲突数据。  场景区别： - 实时迁移场景：不支持。 - 实时同步场景：支持。
    *
    * @return $this
    */
    public function setConflictPolicy($conflictPolicy)
    {
        $this->container['conflictPolicy'] = $conflictPolicy;
        return $this;
    }

    /**
    * Gets indexTrans
    *  对象同步范围：是否同步普通索引。DRS将默认同步主键/唯一索引，普通索引是指除主键/唯一索引以外的其他类型索引。取值： - true：将会同步全部的索引。 - false：仅同步主键/唯一索引，普通索引不会同步。
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
    * @param bool|null $indexTrans 对象同步范围：是否同步普通索引。DRS将默认同步主键/唯一索引，普通索引是指除主键/唯一索引以外的其他类型索引。取值： - true：将会同步全部的索引。 - false：仅同步主键/唯一索引，普通索引不会同步。
    *
    * @return $this
    */
    public function setIndexTrans($indexTrans)
    {
        $this->container['indexTrans'] = $indexTrans;
        return $this;
    }

    /**
    * Gets ddlTrans
    *  对象同步范围：同步增量阶段是否同步DDL。取值： - true：增量阶段同步DDL。 - false：增量阶段不同步DDL。
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
    * @param bool|null $ddlTrans 对象同步范围：同步增量阶段是否同步DDL。取值： - true：增量阶段同步DDL。 - false：增量阶段不同步DDL。
    *
    * @return $this
    */
    public function setDdlTrans($ddlTrans)
    {
        $this->container['ddlTrans'] = $ddlTrans;
        return $this;
    }

    /**
    * Gets dataSyncTopologyType
    *  数据同步拓扑。数据同步功能支持多种同步拓扑，您可以根据业务需求规划您的同步实例。参考链接。取值： - one2one：一对一。 - one2many：一对多。 - many2one：多对一。
    *
    * @return string|null
    */
    public function getDataSyncTopologyType()
    {
        return $this->container['dataSyncTopologyType'];
    }

    /**
    * Sets dataSyncTopologyType
    *
    * @param string|null $dataSyncTopologyType 数据同步拓扑。数据同步功能支持多种同步拓扑，您可以根据业务需求规划您的同步实例。参考链接。取值： - one2one：一对一。 - one2many：一对多。 - many2one：多对一。
    *
    * @return $this
    */
    public function setDataSyncTopologyType($dataSyncTopologyType)
    {
        $this->container['dataSyncTopologyType'] = $dataSyncTopologyType;
        return $this;
    }

    /**
    * Gets supportDdlInfo
    *  增量支持的DDL。取值： - \"CREATE_TABLE,ADD_COLUMN,MODIFY_COLUMN,CHANGE_COLUMN,DROP_INDEX,ADD_INDEX,CREATE_INDEX,RENAME_INDEX\"。 - 含义解释： - CREATE_TABLE：创建表。 - ADD_COLUMN：加列。 - MODIFY_COLUMN：改列属性。 - CHANGE_COLUMN：改列属性。 - DROP_INDEX：删除索引。 - ADD_INDEX：加索引。 - CREATE_INDEX：创建索引。 - RENAME_INDEX：重命名索引。 - 使用提示： 1.一对一，一对多场景，如果业务上认为源和目标应该使用保持严格一致，那么高危类DDL也应该勾选并同步。 2.一对一，一对多场景，如果业务上确定某个高危DDL不应该发生，则可以不勾选同步高危类DDL，这样DRS将拦截过滤这个DDL，从而起到保护目标数据的作用，但需要知晓过滤DDL的附带问题是可能导致同步失败，例如过滤删列动作。 3.多对一数据聚合场景，最佳实践是推荐只选择同步加列DDL，其他大部分DDL同步都因目标表修改而导致其他任务失败/数据不一致的情况发生，常见情况有：a、同步truncate导致目标数据全部被清空； b、同步创建索引导致目标表被锁定； c、同步rename导致其他任务找不到目标表而失败；d、同步改列导致其他任务因数据类型不兼容而失败；
    *
    * @return string|null
    */
    public function getSupportDdlInfo()
    {
        return $this->container['supportDdlInfo'];
    }

    /**
    * Sets supportDdlInfo
    *
    * @param string|null $supportDdlInfo 增量支持的DDL。取值： - \"CREATE_TABLE,ADD_COLUMN,MODIFY_COLUMN,CHANGE_COLUMN,DROP_INDEX,ADD_INDEX,CREATE_INDEX,RENAME_INDEX\"。 - 含义解释： - CREATE_TABLE：创建表。 - ADD_COLUMN：加列。 - MODIFY_COLUMN：改列属性。 - CHANGE_COLUMN：改列属性。 - DROP_INDEX：删除索引。 - ADD_INDEX：加索引。 - CREATE_INDEX：创建索引。 - RENAME_INDEX：重命名索引。 - 使用提示： 1.一对一，一对多场景，如果业务上认为源和目标应该使用保持严格一致，那么高危类DDL也应该勾选并同步。 2.一对一，一对多场景，如果业务上确定某个高危DDL不应该发生，则可以不勾选同步高危类DDL，这样DRS将拦截过滤这个DDL，从而起到保护目标数据的作用，但需要知晓过滤DDL的附带问题是可能导致同步失败，例如过滤删列动作。 3.多对一数据聚合场景，最佳实践是推荐只选择同步加列DDL，其他大部分DDL同步都因目标表修改而导致其他任务失败/数据不一致的情况发生，常见情况有：a、同步truncate导致目标数据全部被清空； b、同步创建索引导致目标表被锁定； c、同步rename导致其他任务找不到目标表而失败；d、同步改列导致其他任务因数据类型不兼容而失败；
    *
    * @return $this
    */
    public function setSupportDdlInfo($supportDdlInfo)
    {
        $this->container['supportDdlInfo'] = $supportDdlInfo;
        return $this;
    }

    /**
    * Gets syncTypePolicy
    *  同步数据类型。取值：supportAllType（同步所有类型），tableData（同步数据），tableStructure（同步表结构），constraintData（索引同步）。 说明：除supportAllType以外，其他类型可组合填写，例如：\"tableData,tableStructure\" 。
    *
    * @return string|null
    */
    public function getSyncTypePolicy()
    {
        return $this->container['syncTypePolicy'];
    }

    /**
    * Sets syncTypePolicy
    *
    * @param string|null $syncTypePolicy 同步数据类型。取值：supportAllType（同步所有类型），tableData（同步数据），tableStructure（同步表结构），constraintData（索引同步）。 说明：除supportAllType以外，其他类型可组合填写，例如：\"tableData,tableStructure\" 。
    *
    * @return $this
    */
    public function setSyncTypePolicy($syncTypePolicy)
    {
        $this->container['syncTypePolicy'] = $syncTypePolicy;
        return $this;
    }

    /**
    * Gets incrementReadMode
    *  oracle-gausssdb增量读取方式：logminer，xstream
    *
    * @return string|null
    */
    public function getIncrementReadMode()
    {
        return $this->container['incrementReadMode'];
    }

    /**
    * Sets incrementReadMode
    *
    * @param string|null $incrementReadMode oracle-gausssdb增量读取方式：logminer，xstream
    *
    * @return $this
    */
    public function setIncrementReadMode($incrementReadMode)
    {
        $this->container['incrementReadMode'] = $incrementReadMode;
        return $this;
    }

    /**
    * Gets dmlTypes
    *  DML同步类型。
    *
    * @return string|null
    */
    public function getDmlTypes()
    {
        return $this->container['dmlTypes'];
    }

    /**
    * Sets dmlTypes
    *
    * @param string|null $dmlTypes DML同步类型。
    *
    * @return $this
    */
    public function setDmlTypes($dmlTypes)
    {
        $this->container['dmlTypes'] = $dmlTypes;
        return $this;
    }

    /**
    * Gets isCreateTableWithIndex
    *  索引与表结构是否同时建立。
    *
    * @return bool|null
    */
    public function getIsCreateTableWithIndex()
    {
        return $this->container['isCreateTableWithIndex'];
    }

    /**
    * Sets isCreateTableWithIndex
    *
    * @param bool|null $isCreateTableWithIndex 索引与表结构是否同时建立。
    *
    * @return $this
    */
    public function setIsCreateTableWithIndex($isCreateTableWithIndex)
    {
        $this->container['isCreateTableWithIndex'] = $isCreateTableWithIndex;
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

