<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ModifyJobReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ModifyJobReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  **参数解释**：  迁移任务ID，用于唯一标识一个数据复制任务，在修改任务时作为任务的识别凭证。  **约束限制**：  不涉及。  **取值范围**：  UUID格式字符串。  **默认取值**：  不涉及
    * description  **参数解释**：  任务描述，用于补充说明任务的用途或备注信息。  **约束限制**：  - 修改任务描述时必填。 - 长度为0-256个字符。 - 不能包含!<>&'\"特殊字符。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * name  **参数解释**：  任务名称，用于标识和区分不同的数据复制任务。  **约束限制**：  - 需要修改任务名称时填写。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * alarmNotify  alarmNotify
    * taskType  **参数解释**：  任务迁移模式，指定数据复制任务的执行方式。  **约束限制**：  - 目前仅支持MySQL到TaurusDB同步任务在配置中或者增量中时修改。  **取值范围**：  - FULL_TRANS：全量迁移，仅迁移历史数据 - FULL_INCR_TRANS：全量+增量迁移，先迁移历史数据再持续同步增量 - INCR_TRANS：增量迁移，仅同步数据变更  **默认取值**：  不涉及
    * sourceEndpoint  sourceEndpoint
    * targetEndpoint  targetEndpoint
    * nodeType  **参数解释**：  DRS任务实例规格编码，决定迁移实例的计算资源大小，测试连接之后修改调用时必填。  **约束限制**：  - 测试连接之后修改调用时必填。 - 具体某种场景支持的取值可以通过查询可用的Node规格获取。  **取值范围**：  - micro：极小规格 - small：小规格 - medium：中规格 - high：大规格 - xlarge：超大规格 - 2xlarge：极大规格  **默认取值**：  high
    * engineType  **参数解释**：  DRS任务引擎类型，测试连接之后修改调用时必填。  **约束限制**：  - 测试连接之后修改调用时必填。 - 详细取值可参考引擎类型说明。  **取值范围**：  - mysql：MySQL到MySQL迁移，MySQL到MySQL同步 - mongodb：MongoDB到DDS迁移与同步 - cloudDataGuard-mysql：MySQL到MySQL灾备 - gaussdbv5：GaussDB同步 - mysql-to-kafka：MySQL到Kafka同步 - taurus-to-kafka：TaurusDB到Kafka同步 - gaussdbv5ha-to-kafka：GaussDB集中式版到Kafka同步 - postgresql：PostgreSQL到PostgreSQL同步 - oracle-to-gaussdbv5：Oracle-GaussDB分布式版 - oracle-to-gaussdbv5ha：Oracle-GaussDB集中式版 - gaussdbv5-to-oracle：GaussDB分布式版-Oracle - gaussdbv5ha-to-oracle：GaussDB集中式版-Oracle - gaussdbv5-to-kafka：GaussDB分布式版-Kafka  **默认取值**：  不涉及
    * netType  **参数解释**：  任务使用的网络类型，测试连接之后调用必填。  **约束限制**：  - 测试连接之后调用必填。  **取值范围**：  - vpn：虚拟专用网络 - vpc：虚拟私有云 - eip：弹性公网IP  **默认取值**：  不涉及
    * storeDbInfo  **参数解释**：  是否保存数据库信息，测试连接之后调用必填。  **约束限制**：  - 测试连接之后调用必填。  **取值范围**：  - true：保存数据库信息 - false：不保存数据库信息  **默认取值**：  不涉及
    * isRecreate  **参数解释**：  是否为重建任务。  **约束限制**：  不涉及。  **取值范围**：  - true：重建任务 - false：非重建任务  **默认取值**：  不涉及
    * jobDirection  **参数解释**：  任务的迁移方向，测试连接之后调用必填。  **约束限制**：  - 测试连接之后调用必填。  **取值范围**：  - up：入云，灾备场景时对应本云为备 - down：出云，灾备场景时对应本云为主 - non-dbs：自建  **默认取值**：  不涉及
    * isTargetReadonly  **参数解释**：  指定目标数据库实例在迁移过程中是否限制为只读状态。  **约束限制**：  不涉及。  **取值范围**：  - true：目标实例限制为只读 - false：目标实例不限制为只读  **默认取值**：  不涉及
    * replaceDefiner  **参数解释**：  所有Definer是否迁移到该用户下，MySQL数据库支持该设置，测试连接之后修改调用时必填。  **约束限制**：  - 测试连接之后修改调用时必填。  **取值范围**：  - true：迁移后，所有源数据库对象的Definer都会迁移至该用户下，其他用户需要授权后才具有数据库对象权限 - false：迁移后，将保持源数据库对象Definer定义不变，选择此选项，需要配合下一步用户权限迁移功能，将源数据库的用户全部迁移，这样才能保持源数据库的权限体系完全不变  **默认取值**：  不涉及
    * tags  **参数解释**：  标签信息，用于给任务添加标识以便分类管理，详情请参见ResourceTag对象定义。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * dbUseType  **参数解释**：  迁移任务的业务场景类型。  **约束限制**：  不涉及。  **取值范围**：  - migration：实时迁移 - sync：实时同步 - cloudDataGuard：实时灾备  **默认取值**：  不涉及
    * productId  **参数解释**：  产品ID，用于标识包周期任务的产品信息。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'string',
            'description' => 'string',
            'name' => 'string',
            'alarmNotify' => '\HuaweiCloud\SDK\Drs\V3\Model\AlarmNotifyInfo',
            'taskType' => 'string',
            'sourceEndpoint' => '\HuaweiCloud\SDK\Drs\V3\Model\Endpoint',
            'targetEndpoint' => '\HuaweiCloud\SDK\Drs\V3\Model\Endpoint',
            'nodeType' => 'string',
            'engineType' => 'string',
            'netType' => 'string',
            'storeDbInfo' => 'bool',
            'isRecreate' => 'bool',
            'jobDirection' => 'string',
            'isTargetReadonly' => 'bool',
            'replaceDefiner' => 'bool',
            'tags' => '\HuaweiCloud\SDK\Drs\V3\Model\ResourceTag[]',
            'dbUseType' => 'string',
            'productId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  **参数解释**：  迁移任务ID，用于唯一标识一个数据复制任务，在修改任务时作为任务的识别凭证。  **约束限制**：  不涉及。  **取值范围**：  UUID格式字符串。  **默认取值**：  不涉及
    * description  **参数解释**：  任务描述，用于补充说明任务的用途或备注信息。  **约束限制**：  - 修改任务描述时必填。 - 长度为0-256个字符。 - 不能包含!<>&'\"特殊字符。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * name  **参数解释**：  任务名称，用于标识和区分不同的数据复制任务。  **约束限制**：  - 需要修改任务名称时填写。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * alarmNotify  alarmNotify
    * taskType  **参数解释**：  任务迁移模式，指定数据复制任务的执行方式。  **约束限制**：  - 目前仅支持MySQL到TaurusDB同步任务在配置中或者增量中时修改。  **取值范围**：  - FULL_TRANS：全量迁移，仅迁移历史数据 - FULL_INCR_TRANS：全量+增量迁移，先迁移历史数据再持续同步增量 - INCR_TRANS：增量迁移，仅同步数据变更  **默认取值**：  不涉及
    * sourceEndpoint  sourceEndpoint
    * targetEndpoint  targetEndpoint
    * nodeType  **参数解释**：  DRS任务实例规格编码，决定迁移实例的计算资源大小，测试连接之后修改调用时必填。  **约束限制**：  - 测试连接之后修改调用时必填。 - 具体某种场景支持的取值可以通过查询可用的Node规格获取。  **取值范围**：  - micro：极小规格 - small：小规格 - medium：中规格 - high：大规格 - xlarge：超大规格 - 2xlarge：极大规格  **默认取值**：  high
    * engineType  **参数解释**：  DRS任务引擎类型，测试连接之后修改调用时必填。  **约束限制**：  - 测试连接之后修改调用时必填。 - 详细取值可参考引擎类型说明。  **取值范围**：  - mysql：MySQL到MySQL迁移，MySQL到MySQL同步 - mongodb：MongoDB到DDS迁移与同步 - cloudDataGuard-mysql：MySQL到MySQL灾备 - gaussdbv5：GaussDB同步 - mysql-to-kafka：MySQL到Kafka同步 - taurus-to-kafka：TaurusDB到Kafka同步 - gaussdbv5ha-to-kafka：GaussDB集中式版到Kafka同步 - postgresql：PostgreSQL到PostgreSQL同步 - oracle-to-gaussdbv5：Oracle-GaussDB分布式版 - oracle-to-gaussdbv5ha：Oracle-GaussDB集中式版 - gaussdbv5-to-oracle：GaussDB分布式版-Oracle - gaussdbv5ha-to-oracle：GaussDB集中式版-Oracle - gaussdbv5-to-kafka：GaussDB分布式版-Kafka  **默认取值**：  不涉及
    * netType  **参数解释**：  任务使用的网络类型，测试连接之后调用必填。  **约束限制**：  - 测试连接之后调用必填。  **取值范围**：  - vpn：虚拟专用网络 - vpc：虚拟私有云 - eip：弹性公网IP  **默认取值**：  不涉及
    * storeDbInfo  **参数解释**：  是否保存数据库信息，测试连接之后调用必填。  **约束限制**：  - 测试连接之后调用必填。  **取值范围**：  - true：保存数据库信息 - false：不保存数据库信息  **默认取值**：  不涉及
    * isRecreate  **参数解释**：  是否为重建任务。  **约束限制**：  不涉及。  **取值范围**：  - true：重建任务 - false：非重建任务  **默认取值**：  不涉及
    * jobDirection  **参数解释**：  任务的迁移方向，测试连接之后调用必填。  **约束限制**：  - 测试连接之后调用必填。  **取值范围**：  - up：入云，灾备场景时对应本云为备 - down：出云，灾备场景时对应本云为主 - non-dbs：自建  **默认取值**：  不涉及
    * isTargetReadonly  **参数解释**：  指定目标数据库实例在迁移过程中是否限制为只读状态。  **约束限制**：  不涉及。  **取值范围**：  - true：目标实例限制为只读 - false：目标实例不限制为只读  **默认取值**：  不涉及
    * replaceDefiner  **参数解释**：  所有Definer是否迁移到该用户下，MySQL数据库支持该设置，测试连接之后修改调用时必填。  **约束限制**：  - 测试连接之后修改调用时必填。  **取值范围**：  - true：迁移后，所有源数据库对象的Definer都会迁移至该用户下，其他用户需要授权后才具有数据库对象权限 - false：迁移后，将保持源数据库对象Definer定义不变，选择此选项，需要配合下一步用户权限迁移功能，将源数据库的用户全部迁移，这样才能保持源数据库的权限体系完全不变  **默认取值**：  不涉及
    * tags  **参数解释**：  标签信息，用于给任务添加标识以便分类管理，详情请参见ResourceTag对象定义。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * dbUseType  **参数解释**：  迁移任务的业务场景类型。  **约束限制**：  不涉及。  **取值范围**：  - migration：实时迁移 - sync：实时同步 - cloudDataGuard：实时灾备  **默认取值**：  不涉及
    * productId  **参数解释**：  产品ID，用于标识包周期任务的产品信息。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => null,
        'description' => null,
        'name' => null,
        'alarmNotify' => null,
        'taskType' => null,
        'sourceEndpoint' => null,
        'targetEndpoint' => null,
        'nodeType' => null,
        'engineType' => null,
        'netType' => null,
        'storeDbInfo' => null,
        'isRecreate' => null,
        'jobDirection' => null,
        'isTargetReadonly' => null,
        'replaceDefiner' => null,
        'tags' => null,
        'dbUseType' => null,
        'productId' => null
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
    * jobId  **参数解释**：  迁移任务ID，用于唯一标识一个数据复制任务，在修改任务时作为任务的识别凭证。  **约束限制**：  不涉及。  **取值范围**：  UUID格式字符串。  **默认取值**：  不涉及
    * description  **参数解释**：  任务描述，用于补充说明任务的用途或备注信息。  **约束限制**：  - 修改任务描述时必填。 - 长度为0-256个字符。 - 不能包含!<>&'\"特殊字符。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * name  **参数解释**：  任务名称，用于标识和区分不同的数据复制任务。  **约束限制**：  - 需要修改任务名称时填写。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * alarmNotify  alarmNotify
    * taskType  **参数解释**：  任务迁移模式，指定数据复制任务的执行方式。  **约束限制**：  - 目前仅支持MySQL到TaurusDB同步任务在配置中或者增量中时修改。  **取值范围**：  - FULL_TRANS：全量迁移，仅迁移历史数据 - FULL_INCR_TRANS：全量+增量迁移，先迁移历史数据再持续同步增量 - INCR_TRANS：增量迁移，仅同步数据变更  **默认取值**：  不涉及
    * sourceEndpoint  sourceEndpoint
    * targetEndpoint  targetEndpoint
    * nodeType  **参数解释**：  DRS任务实例规格编码，决定迁移实例的计算资源大小，测试连接之后修改调用时必填。  **约束限制**：  - 测试连接之后修改调用时必填。 - 具体某种场景支持的取值可以通过查询可用的Node规格获取。  **取值范围**：  - micro：极小规格 - small：小规格 - medium：中规格 - high：大规格 - xlarge：超大规格 - 2xlarge：极大规格  **默认取值**：  high
    * engineType  **参数解释**：  DRS任务引擎类型，测试连接之后修改调用时必填。  **约束限制**：  - 测试连接之后修改调用时必填。 - 详细取值可参考引擎类型说明。  **取值范围**：  - mysql：MySQL到MySQL迁移，MySQL到MySQL同步 - mongodb：MongoDB到DDS迁移与同步 - cloudDataGuard-mysql：MySQL到MySQL灾备 - gaussdbv5：GaussDB同步 - mysql-to-kafka：MySQL到Kafka同步 - taurus-to-kafka：TaurusDB到Kafka同步 - gaussdbv5ha-to-kafka：GaussDB集中式版到Kafka同步 - postgresql：PostgreSQL到PostgreSQL同步 - oracle-to-gaussdbv5：Oracle-GaussDB分布式版 - oracle-to-gaussdbv5ha：Oracle-GaussDB集中式版 - gaussdbv5-to-oracle：GaussDB分布式版-Oracle - gaussdbv5ha-to-oracle：GaussDB集中式版-Oracle - gaussdbv5-to-kafka：GaussDB分布式版-Kafka  **默认取值**：  不涉及
    * netType  **参数解释**：  任务使用的网络类型，测试连接之后调用必填。  **约束限制**：  - 测试连接之后调用必填。  **取值范围**：  - vpn：虚拟专用网络 - vpc：虚拟私有云 - eip：弹性公网IP  **默认取值**：  不涉及
    * storeDbInfo  **参数解释**：  是否保存数据库信息，测试连接之后调用必填。  **约束限制**：  - 测试连接之后调用必填。  **取值范围**：  - true：保存数据库信息 - false：不保存数据库信息  **默认取值**：  不涉及
    * isRecreate  **参数解释**：  是否为重建任务。  **约束限制**：  不涉及。  **取值范围**：  - true：重建任务 - false：非重建任务  **默认取值**：  不涉及
    * jobDirection  **参数解释**：  任务的迁移方向，测试连接之后调用必填。  **约束限制**：  - 测试连接之后调用必填。  **取值范围**：  - up：入云，灾备场景时对应本云为备 - down：出云，灾备场景时对应本云为主 - non-dbs：自建  **默认取值**：  不涉及
    * isTargetReadonly  **参数解释**：  指定目标数据库实例在迁移过程中是否限制为只读状态。  **约束限制**：  不涉及。  **取值范围**：  - true：目标实例限制为只读 - false：目标实例不限制为只读  **默认取值**：  不涉及
    * replaceDefiner  **参数解释**：  所有Definer是否迁移到该用户下，MySQL数据库支持该设置，测试连接之后修改调用时必填。  **约束限制**：  - 测试连接之后修改调用时必填。  **取值范围**：  - true：迁移后，所有源数据库对象的Definer都会迁移至该用户下，其他用户需要授权后才具有数据库对象权限 - false：迁移后，将保持源数据库对象Definer定义不变，选择此选项，需要配合下一步用户权限迁移功能，将源数据库的用户全部迁移，这样才能保持源数据库的权限体系完全不变  **默认取值**：  不涉及
    * tags  **参数解释**：  标签信息，用于给任务添加标识以便分类管理，详情请参见ResourceTag对象定义。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * dbUseType  **参数解释**：  迁移任务的业务场景类型。  **约束限制**：  不涉及。  **取值范围**：  - migration：实时迁移 - sync：实时同步 - cloudDataGuard：实时灾备  **默认取值**：  不涉及
    * productId  **参数解释**：  产品ID，用于标识包周期任务的产品信息。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'description' => 'description',
            'name' => 'name',
            'alarmNotify' => 'alarm_notify',
            'taskType' => 'task_type',
            'sourceEndpoint' => 'source_endpoint',
            'targetEndpoint' => 'target_endpoint',
            'nodeType' => 'node_type',
            'engineType' => 'engine_type',
            'netType' => 'net_type',
            'storeDbInfo' => 'store_db_info',
            'isRecreate' => 'is_recreate',
            'jobDirection' => 'job_direction',
            'isTargetReadonly' => 'is_target_readonly',
            'replaceDefiner' => 'replace_definer',
            'tags' => 'tags',
            'dbUseType' => 'db_use_type',
            'productId' => 'product_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  **参数解释**：  迁移任务ID，用于唯一标识一个数据复制任务，在修改任务时作为任务的识别凭证。  **约束限制**：  不涉及。  **取值范围**：  UUID格式字符串。  **默认取值**：  不涉及
    * description  **参数解释**：  任务描述，用于补充说明任务的用途或备注信息。  **约束限制**：  - 修改任务描述时必填。 - 长度为0-256个字符。 - 不能包含!<>&'\"特殊字符。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * name  **参数解释**：  任务名称，用于标识和区分不同的数据复制任务。  **约束限制**：  - 需要修改任务名称时填写。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * alarmNotify  alarmNotify
    * taskType  **参数解释**：  任务迁移模式，指定数据复制任务的执行方式。  **约束限制**：  - 目前仅支持MySQL到TaurusDB同步任务在配置中或者增量中时修改。  **取值范围**：  - FULL_TRANS：全量迁移，仅迁移历史数据 - FULL_INCR_TRANS：全量+增量迁移，先迁移历史数据再持续同步增量 - INCR_TRANS：增量迁移，仅同步数据变更  **默认取值**：  不涉及
    * sourceEndpoint  sourceEndpoint
    * targetEndpoint  targetEndpoint
    * nodeType  **参数解释**：  DRS任务实例规格编码，决定迁移实例的计算资源大小，测试连接之后修改调用时必填。  **约束限制**：  - 测试连接之后修改调用时必填。 - 具体某种场景支持的取值可以通过查询可用的Node规格获取。  **取值范围**：  - micro：极小规格 - small：小规格 - medium：中规格 - high：大规格 - xlarge：超大规格 - 2xlarge：极大规格  **默认取值**：  high
    * engineType  **参数解释**：  DRS任务引擎类型，测试连接之后修改调用时必填。  **约束限制**：  - 测试连接之后修改调用时必填。 - 详细取值可参考引擎类型说明。  **取值范围**：  - mysql：MySQL到MySQL迁移，MySQL到MySQL同步 - mongodb：MongoDB到DDS迁移与同步 - cloudDataGuard-mysql：MySQL到MySQL灾备 - gaussdbv5：GaussDB同步 - mysql-to-kafka：MySQL到Kafka同步 - taurus-to-kafka：TaurusDB到Kafka同步 - gaussdbv5ha-to-kafka：GaussDB集中式版到Kafka同步 - postgresql：PostgreSQL到PostgreSQL同步 - oracle-to-gaussdbv5：Oracle-GaussDB分布式版 - oracle-to-gaussdbv5ha：Oracle-GaussDB集中式版 - gaussdbv5-to-oracle：GaussDB分布式版-Oracle - gaussdbv5ha-to-oracle：GaussDB集中式版-Oracle - gaussdbv5-to-kafka：GaussDB分布式版-Kafka  **默认取值**：  不涉及
    * netType  **参数解释**：  任务使用的网络类型，测试连接之后调用必填。  **约束限制**：  - 测试连接之后调用必填。  **取值范围**：  - vpn：虚拟专用网络 - vpc：虚拟私有云 - eip：弹性公网IP  **默认取值**：  不涉及
    * storeDbInfo  **参数解释**：  是否保存数据库信息，测试连接之后调用必填。  **约束限制**：  - 测试连接之后调用必填。  **取值范围**：  - true：保存数据库信息 - false：不保存数据库信息  **默认取值**：  不涉及
    * isRecreate  **参数解释**：  是否为重建任务。  **约束限制**：  不涉及。  **取值范围**：  - true：重建任务 - false：非重建任务  **默认取值**：  不涉及
    * jobDirection  **参数解释**：  任务的迁移方向，测试连接之后调用必填。  **约束限制**：  - 测试连接之后调用必填。  **取值范围**：  - up：入云，灾备场景时对应本云为备 - down：出云，灾备场景时对应本云为主 - non-dbs：自建  **默认取值**：  不涉及
    * isTargetReadonly  **参数解释**：  指定目标数据库实例在迁移过程中是否限制为只读状态。  **约束限制**：  不涉及。  **取值范围**：  - true：目标实例限制为只读 - false：目标实例不限制为只读  **默认取值**：  不涉及
    * replaceDefiner  **参数解释**：  所有Definer是否迁移到该用户下，MySQL数据库支持该设置，测试连接之后修改调用时必填。  **约束限制**：  - 测试连接之后修改调用时必填。  **取值范围**：  - true：迁移后，所有源数据库对象的Definer都会迁移至该用户下，其他用户需要授权后才具有数据库对象权限 - false：迁移后，将保持源数据库对象Definer定义不变，选择此选项，需要配合下一步用户权限迁移功能，将源数据库的用户全部迁移，这样才能保持源数据库的权限体系完全不变  **默认取值**：  不涉及
    * tags  **参数解释**：  标签信息，用于给任务添加标识以便分类管理，详情请参见ResourceTag对象定义。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * dbUseType  **参数解释**：  迁移任务的业务场景类型。  **约束限制**：  不涉及。  **取值范围**：  - migration：实时迁移 - sync：实时同步 - cloudDataGuard：实时灾备  **默认取值**：  不涉及
    * productId  **参数解释**：  产品ID，用于标识包周期任务的产品信息。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'description' => 'setDescription',
            'name' => 'setName',
            'alarmNotify' => 'setAlarmNotify',
            'taskType' => 'setTaskType',
            'sourceEndpoint' => 'setSourceEndpoint',
            'targetEndpoint' => 'setTargetEndpoint',
            'nodeType' => 'setNodeType',
            'engineType' => 'setEngineType',
            'netType' => 'setNetType',
            'storeDbInfo' => 'setStoreDbInfo',
            'isRecreate' => 'setIsRecreate',
            'jobDirection' => 'setJobDirection',
            'isTargetReadonly' => 'setIsTargetReadonly',
            'replaceDefiner' => 'setReplaceDefiner',
            'tags' => 'setTags',
            'dbUseType' => 'setDbUseType',
            'productId' => 'setProductId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  **参数解释**：  迁移任务ID，用于唯一标识一个数据复制任务，在修改任务时作为任务的识别凭证。  **约束限制**：  不涉及。  **取值范围**：  UUID格式字符串。  **默认取值**：  不涉及
    * description  **参数解释**：  任务描述，用于补充说明任务的用途或备注信息。  **约束限制**：  - 修改任务描述时必填。 - 长度为0-256个字符。 - 不能包含!<>&'\"特殊字符。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * name  **参数解释**：  任务名称，用于标识和区分不同的数据复制任务。  **约束限制**：  - 需要修改任务名称时填写。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * alarmNotify  alarmNotify
    * taskType  **参数解释**：  任务迁移模式，指定数据复制任务的执行方式。  **约束限制**：  - 目前仅支持MySQL到TaurusDB同步任务在配置中或者增量中时修改。  **取值范围**：  - FULL_TRANS：全量迁移，仅迁移历史数据 - FULL_INCR_TRANS：全量+增量迁移，先迁移历史数据再持续同步增量 - INCR_TRANS：增量迁移，仅同步数据变更  **默认取值**：  不涉及
    * sourceEndpoint  sourceEndpoint
    * targetEndpoint  targetEndpoint
    * nodeType  **参数解释**：  DRS任务实例规格编码，决定迁移实例的计算资源大小，测试连接之后修改调用时必填。  **约束限制**：  - 测试连接之后修改调用时必填。 - 具体某种场景支持的取值可以通过查询可用的Node规格获取。  **取值范围**：  - micro：极小规格 - small：小规格 - medium：中规格 - high：大规格 - xlarge：超大规格 - 2xlarge：极大规格  **默认取值**：  high
    * engineType  **参数解释**：  DRS任务引擎类型，测试连接之后修改调用时必填。  **约束限制**：  - 测试连接之后修改调用时必填。 - 详细取值可参考引擎类型说明。  **取值范围**：  - mysql：MySQL到MySQL迁移，MySQL到MySQL同步 - mongodb：MongoDB到DDS迁移与同步 - cloudDataGuard-mysql：MySQL到MySQL灾备 - gaussdbv5：GaussDB同步 - mysql-to-kafka：MySQL到Kafka同步 - taurus-to-kafka：TaurusDB到Kafka同步 - gaussdbv5ha-to-kafka：GaussDB集中式版到Kafka同步 - postgresql：PostgreSQL到PostgreSQL同步 - oracle-to-gaussdbv5：Oracle-GaussDB分布式版 - oracle-to-gaussdbv5ha：Oracle-GaussDB集中式版 - gaussdbv5-to-oracle：GaussDB分布式版-Oracle - gaussdbv5ha-to-oracle：GaussDB集中式版-Oracle - gaussdbv5-to-kafka：GaussDB分布式版-Kafka  **默认取值**：  不涉及
    * netType  **参数解释**：  任务使用的网络类型，测试连接之后调用必填。  **约束限制**：  - 测试连接之后调用必填。  **取值范围**：  - vpn：虚拟专用网络 - vpc：虚拟私有云 - eip：弹性公网IP  **默认取值**：  不涉及
    * storeDbInfo  **参数解释**：  是否保存数据库信息，测试连接之后调用必填。  **约束限制**：  - 测试连接之后调用必填。  **取值范围**：  - true：保存数据库信息 - false：不保存数据库信息  **默认取值**：  不涉及
    * isRecreate  **参数解释**：  是否为重建任务。  **约束限制**：  不涉及。  **取值范围**：  - true：重建任务 - false：非重建任务  **默认取值**：  不涉及
    * jobDirection  **参数解释**：  任务的迁移方向，测试连接之后调用必填。  **约束限制**：  - 测试连接之后调用必填。  **取值范围**：  - up：入云，灾备场景时对应本云为备 - down：出云，灾备场景时对应本云为主 - non-dbs：自建  **默认取值**：  不涉及
    * isTargetReadonly  **参数解释**：  指定目标数据库实例在迁移过程中是否限制为只读状态。  **约束限制**：  不涉及。  **取值范围**：  - true：目标实例限制为只读 - false：目标实例不限制为只读  **默认取值**：  不涉及
    * replaceDefiner  **参数解释**：  所有Definer是否迁移到该用户下，MySQL数据库支持该设置，测试连接之后修改调用时必填。  **约束限制**：  - 测试连接之后修改调用时必填。  **取值范围**：  - true：迁移后，所有源数据库对象的Definer都会迁移至该用户下，其他用户需要授权后才具有数据库对象权限 - false：迁移后，将保持源数据库对象Definer定义不变，选择此选项，需要配合下一步用户权限迁移功能，将源数据库的用户全部迁移，这样才能保持源数据库的权限体系完全不变  **默认取值**：  不涉及
    * tags  **参数解释**：  标签信息，用于给任务添加标识以便分类管理，详情请参见ResourceTag对象定义。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * dbUseType  **参数解释**：  迁移任务的业务场景类型。  **约束限制**：  不涉及。  **取值范围**：  - migration：实时迁移 - sync：实时同步 - cloudDataGuard：实时灾备  **默认取值**：  不涉及
    * productId  **参数解释**：  产品ID，用于标识包周期任务的产品信息。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'description' => 'getDescription',
            'name' => 'getName',
            'alarmNotify' => 'getAlarmNotify',
            'taskType' => 'getTaskType',
            'sourceEndpoint' => 'getSourceEndpoint',
            'targetEndpoint' => 'getTargetEndpoint',
            'nodeType' => 'getNodeType',
            'engineType' => 'getEngineType',
            'netType' => 'getNetType',
            'storeDbInfo' => 'getStoreDbInfo',
            'isRecreate' => 'getIsRecreate',
            'jobDirection' => 'getJobDirection',
            'isTargetReadonly' => 'getIsTargetReadonly',
            'replaceDefiner' => 'getReplaceDefiner',
            'tags' => 'getTags',
            'dbUseType' => 'getDbUseType',
            'productId' => 'getProductId'
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
    const TASK_TYPE_FULL_TRANS = 'FULL_TRANS';
    const TASK_TYPE_INCR_TRANS = 'INCR_TRANS';
    const TASK_TYPE_FULL_INCR_TRANS = 'FULL_INCR_TRANS';
    const NODE_TYPE_MICRO = 'micro';
    const NODE_TYPE_SMALL = 'small';
    const NODE_TYPE_MEDIUM = 'medium';
    const NODE_TYPE_HIGH = 'high';
    const NODE_TYPE_XLARGE = 'xlarge';
    const NODE_TYPE__2XLARGE = '2xlarge';
    const ENGINE_TYPE_MYSQL = 'mysql';
    const ENGINE_TYPE_MONGODB = 'mongodb';
    const ENGINE_TYPE_CLOUD_DATA_GUARD_MYSQL = 'cloudDataGuard-mysql';
    const ENGINE_TYPE_GAUSSDBV5 = 'gaussdbv5';
    const ENGINE_TYPE_POSTGRESQL = 'postgresql';
    const ENGINE_TYPE_MYSQL_TO_KAFKA = 'mysql-to-kafka';
    const ENGINE_TYPE_TAURUS_TO_KAFKA = 'taurus-to-kafka';
    const ENGINE_TYPE_GAUSSDBV5HA_TO_KAFKA = 'gaussdbv5ha-to-kafka';
    const NET_TYPE_VPC = 'vpc';
    const NET_TYPE_VPN = 'vpn';
    const NET_TYPE_EIP = 'eip';
    const JOB_DIRECTION_UP = 'up';
    const JOB_DIRECTION_DOWN = 'down';
    const JOB_DIRECTION_NON_DBS = 'non-dbs';
    const DB_USE_TYPE_MIGRATION = 'migration';
    const DB_USE_TYPE_SYNC = 'sync';
    const DB_USE_TYPE_CLOUD_DATA_GUARD = 'cloudDataGuard';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTaskTypeAllowableValues()
    {
        return [
            self::TASK_TYPE_FULL_TRANS,
            self::TASK_TYPE_INCR_TRANS,
            self::TASK_TYPE_FULL_INCR_TRANS,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getNodeTypeAllowableValues()
    {
        return [
            self::NODE_TYPE_MICRO,
            self::NODE_TYPE_SMALL,
            self::NODE_TYPE_MEDIUM,
            self::NODE_TYPE_HIGH,
            self::NODE_TYPE_XLARGE,
            self::NODE_TYPE__2XLARGE,
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
            self::ENGINE_TYPE_MYSQL,
            self::ENGINE_TYPE_MONGODB,
            self::ENGINE_TYPE_CLOUD_DATA_GUARD_MYSQL,
            self::ENGINE_TYPE_GAUSSDBV5,
            self::ENGINE_TYPE_POSTGRESQL,
            self::ENGINE_TYPE_MYSQL_TO_KAFKA,
            self::ENGINE_TYPE_TAURUS_TO_KAFKA,
            self::ENGINE_TYPE_GAUSSDBV5HA_TO_KAFKA,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getNetTypeAllowableValues()
    {
        return [
            self::NET_TYPE_VPC,
            self::NET_TYPE_VPN,
            self::NET_TYPE_EIP,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getJobDirectionAllowableValues()
    {
        return [
            self::JOB_DIRECTION_UP,
            self::JOB_DIRECTION_DOWN,
            self::JOB_DIRECTION_NON_DBS,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDbUseTypeAllowableValues()
    {
        return [
            self::DB_USE_TYPE_MIGRATION,
            self::DB_USE_TYPE_SYNC,
            self::DB_USE_TYPE_CLOUD_DATA_GUARD,
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['alarmNotify'] = isset($data['alarmNotify']) ? $data['alarmNotify'] : null;
        $this->container['taskType'] = isset($data['taskType']) ? $data['taskType'] : null;
        $this->container['sourceEndpoint'] = isset($data['sourceEndpoint']) ? $data['sourceEndpoint'] : null;
        $this->container['targetEndpoint'] = isset($data['targetEndpoint']) ? $data['targetEndpoint'] : null;
        $this->container['nodeType'] = isset($data['nodeType']) ? $data['nodeType'] : null;
        $this->container['engineType'] = isset($data['engineType']) ? $data['engineType'] : null;
        $this->container['netType'] = isset($data['netType']) ? $data['netType'] : null;
        $this->container['storeDbInfo'] = isset($data['storeDbInfo']) ? $data['storeDbInfo'] : null;
        $this->container['isRecreate'] = isset($data['isRecreate']) ? $data['isRecreate'] : null;
        $this->container['jobDirection'] = isset($data['jobDirection']) ? $data['jobDirection'] : null;
        $this->container['isTargetReadonly'] = isset($data['isTargetReadonly']) ? $data['isTargetReadonly'] : null;
        $this->container['replaceDefiner'] = isset($data['replaceDefiner']) ? $data['replaceDefiner'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['dbUseType'] = isset($data['dbUseType']) ? $data['dbUseType'] : null;
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
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
            if (!preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['jobId'])) {
                $invalidProperties[] = "invalid value for 'jobId', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 256)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && !preg_match("/^[^!<>=&\"\\\\']{0,256}$/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /^[^!<>=&\"\\\\']{0,256}$/.";
            }
            $allowedValues = $this->getTaskTypeAllowableValues();
                if (!is_null($this->container['taskType']) && !in_array($this->container['taskType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'taskType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getNodeTypeAllowableValues();
                if (!is_null($this->container['nodeType']) && !in_array($this->container['nodeType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'nodeType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getEngineTypeAllowableValues();
                if (!is_null($this->container['engineType']) && !in_array($this->container['engineType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'engineType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getNetTypeAllowableValues();
                if (!is_null($this->container['netType']) && !in_array($this->container['netType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'netType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getJobDirectionAllowableValues();
                if (!is_null($this->container['jobDirection']) && !in_array($this->container['jobDirection'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'jobDirection', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getDbUseTypeAllowableValues();
                if (!is_null($this->container['dbUseType']) && !in_array($this->container['dbUseType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'dbUseType', must be one of '%s'",
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
    *  **参数解释**：  迁移任务ID，用于唯一标识一个数据复制任务，在修改任务时作为任务的识别凭证。  **约束限制**：  不涉及。  **取值范围**：  UUID格式字符串。  **默认取值**：  不涉及
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
    * @param string $jobId **参数解释**：  迁移任务ID，用于唯一标识一个数据复制任务，在修改任务时作为任务的识别凭证。  **约束限制**：  不涉及。  **取值范围**：  UUID格式字符串。  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**：  任务描述，用于补充说明任务的用途或备注信息。  **约束限制**：  - 修改任务描述时必填。 - 长度为0-256个字符。 - 不能包含!<>&'\"特殊字符。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param string|null $description **参数解释**：  任务描述，用于补充说明任务的用途或备注信息。  **约束限制**：  - 修改任务描述时必填。 - 长度为0-256个字符。 - 不能包含!<>&'\"特殊字符。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**：  任务名称，用于标识和区分不同的数据复制任务。  **约束限制**：  - 需要修改任务名称时填写。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param string|null $name **参数解释**：  任务名称，用于标识和区分不同的数据复制任务。  **约束限制**：  - 需要修改任务名称时填写。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets alarmNotify
    *  alarmNotify
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\AlarmNotifyInfo|null
    */
    public function getAlarmNotify()
    {
        return $this->container['alarmNotify'];
    }

    /**
    * Sets alarmNotify
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\AlarmNotifyInfo|null $alarmNotify alarmNotify
    *
    * @return $this
    */
    public function setAlarmNotify($alarmNotify)
    {
        $this->container['alarmNotify'] = $alarmNotify;
        return $this;
    }

    /**
    * Gets taskType
    *  **参数解释**：  任务迁移模式，指定数据复制任务的执行方式。  **约束限制**：  - 目前仅支持MySQL到TaurusDB同步任务在配置中或者增量中时修改。  **取值范围**：  - FULL_TRANS：全量迁移，仅迁移历史数据 - FULL_INCR_TRANS：全量+增量迁移，先迁移历史数据再持续同步增量 - INCR_TRANS：增量迁移，仅同步数据变更  **默认取值**：  不涉及
    *
    * @return string|null
    */
    public function getTaskType()
    {
        return $this->container['taskType'];
    }

    /**
    * Sets taskType
    *
    * @param string|null $taskType **参数解释**：  任务迁移模式，指定数据复制任务的执行方式。  **约束限制**：  - 目前仅支持MySQL到TaurusDB同步任务在配置中或者增量中时修改。  **取值范围**：  - FULL_TRANS：全量迁移，仅迁移历史数据 - FULL_INCR_TRANS：全量+增量迁移，先迁移历史数据再持续同步增量 - INCR_TRANS：增量迁移，仅同步数据变更  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setTaskType($taskType)
    {
        $this->container['taskType'] = $taskType;
        return $this;
    }

    /**
    * Gets sourceEndpoint
    *  sourceEndpoint
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\Endpoint|null
    */
    public function getSourceEndpoint()
    {
        return $this->container['sourceEndpoint'];
    }

    /**
    * Sets sourceEndpoint
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\Endpoint|null $sourceEndpoint sourceEndpoint
    *
    * @return $this
    */
    public function setSourceEndpoint($sourceEndpoint)
    {
        $this->container['sourceEndpoint'] = $sourceEndpoint;
        return $this;
    }

    /**
    * Gets targetEndpoint
    *  targetEndpoint
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\Endpoint|null
    */
    public function getTargetEndpoint()
    {
        return $this->container['targetEndpoint'];
    }

    /**
    * Sets targetEndpoint
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\Endpoint|null $targetEndpoint targetEndpoint
    *
    * @return $this
    */
    public function setTargetEndpoint($targetEndpoint)
    {
        $this->container['targetEndpoint'] = $targetEndpoint;
        return $this;
    }

    /**
    * Gets nodeType
    *  **参数解释**：  DRS任务实例规格编码，决定迁移实例的计算资源大小，测试连接之后修改调用时必填。  **约束限制**：  - 测试连接之后修改调用时必填。 - 具体某种场景支持的取值可以通过查询可用的Node规格获取。  **取值范围**：  - micro：极小规格 - small：小规格 - medium：中规格 - high：大规格 - xlarge：超大规格 - 2xlarge：极大规格  **默认取值**：  high
    *
    * @return string|null
    */
    public function getNodeType()
    {
        return $this->container['nodeType'];
    }

    /**
    * Sets nodeType
    *
    * @param string|null $nodeType **参数解释**：  DRS任务实例规格编码，决定迁移实例的计算资源大小，测试连接之后修改调用时必填。  **约束限制**：  - 测试连接之后修改调用时必填。 - 具体某种场景支持的取值可以通过查询可用的Node规格获取。  **取值范围**：  - micro：极小规格 - small：小规格 - medium：中规格 - high：大规格 - xlarge：超大规格 - 2xlarge：极大规格  **默认取值**：  high
    *
    * @return $this
    */
    public function setNodeType($nodeType)
    {
        $this->container['nodeType'] = $nodeType;
        return $this;
    }

    /**
    * Gets engineType
    *  **参数解释**：  DRS任务引擎类型，测试连接之后修改调用时必填。  **约束限制**：  - 测试连接之后修改调用时必填。 - 详细取值可参考引擎类型说明。  **取值范围**：  - mysql：MySQL到MySQL迁移，MySQL到MySQL同步 - mongodb：MongoDB到DDS迁移与同步 - cloudDataGuard-mysql：MySQL到MySQL灾备 - gaussdbv5：GaussDB同步 - mysql-to-kafka：MySQL到Kafka同步 - taurus-to-kafka：TaurusDB到Kafka同步 - gaussdbv5ha-to-kafka：GaussDB集中式版到Kafka同步 - postgresql：PostgreSQL到PostgreSQL同步 - oracle-to-gaussdbv5：Oracle-GaussDB分布式版 - oracle-to-gaussdbv5ha：Oracle-GaussDB集中式版 - gaussdbv5-to-oracle：GaussDB分布式版-Oracle - gaussdbv5ha-to-oracle：GaussDB集中式版-Oracle - gaussdbv5-to-kafka：GaussDB分布式版-Kafka  **默认取值**：  不涉及
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
    * @param string|null $engineType **参数解释**：  DRS任务引擎类型，测试连接之后修改调用时必填。  **约束限制**：  - 测试连接之后修改调用时必填。 - 详细取值可参考引擎类型说明。  **取值范围**：  - mysql：MySQL到MySQL迁移，MySQL到MySQL同步 - mongodb：MongoDB到DDS迁移与同步 - cloudDataGuard-mysql：MySQL到MySQL灾备 - gaussdbv5：GaussDB同步 - mysql-to-kafka：MySQL到Kafka同步 - taurus-to-kafka：TaurusDB到Kafka同步 - gaussdbv5ha-to-kafka：GaussDB集中式版到Kafka同步 - postgresql：PostgreSQL到PostgreSQL同步 - oracle-to-gaussdbv5：Oracle-GaussDB分布式版 - oracle-to-gaussdbv5ha：Oracle-GaussDB集中式版 - gaussdbv5-to-oracle：GaussDB分布式版-Oracle - gaussdbv5ha-to-oracle：GaussDB集中式版-Oracle - gaussdbv5-to-kafka：GaussDB分布式版-Kafka  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setEngineType($engineType)
    {
        $this->container['engineType'] = $engineType;
        return $this;
    }

    /**
    * Gets netType
    *  **参数解释**：  任务使用的网络类型，测试连接之后调用必填。  **约束限制**：  - 测试连接之后调用必填。  **取值范围**：  - vpn：虚拟专用网络 - vpc：虚拟私有云 - eip：弹性公网IP  **默认取值**：  不涉及
    *
    * @return string|null
    */
    public function getNetType()
    {
        return $this->container['netType'];
    }

    /**
    * Sets netType
    *
    * @param string|null $netType **参数解释**：  任务使用的网络类型，测试连接之后调用必填。  **约束限制**：  - 测试连接之后调用必填。  **取值范围**：  - vpn：虚拟专用网络 - vpc：虚拟私有云 - eip：弹性公网IP  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setNetType($netType)
    {
        $this->container['netType'] = $netType;
        return $this;
    }

    /**
    * Gets storeDbInfo
    *  **参数解释**：  是否保存数据库信息，测试连接之后调用必填。  **约束限制**：  - 测试连接之后调用必填。  **取值范围**：  - true：保存数据库信息 - false：不保存数据库信息  **默认取值**：  不涉及
    *
    * @return bool|null
    */
    public function getStoreDbInfo()
    {
        return $this->container['storeDbInfo'];
    }

    /**
    * Sets storeDbInfo
    *
    * @param bool|null $storeDbInfo **参数解释**：  是否保存数据库信息，测试连接之后调用必填。  **约束限制**：  - 测试连接之后调用必填。  **取值范围**：  - true：保存数据库信息 - false：不保存数据库信息  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setStoreDbInfo($storeDbInfo)
    {
        $this->container['storeDbInfo'] = $storeDbInfo;
        return $this;
    }

    /**
    * Gets isRecreate
    *  **参数解释**：  是否为重建任务。  **约束限制**：  不涉及。  **取值范围**：  - true：重建任务 - false：非重建任务  **默认取值**：  不涉及
    *
    * @return bool|null
    */
    public function getIsRecreate()
    {
        return $this->container['isRecreate'];
    }

    /**
    * Sets isRecreate
    *
    * @param bool|null $isRecreate **参数解释**：  是否为重建任务。  **约束限制**：  不涉及。  **取值范围**：  - true：重建任务 - false：非重建任务  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setIsRecreate($isRecreate)
    {
        $this->container['isRecreate'] = $isRecreate;
        return $this;
    }

    /**
    * Gets jobDirection
    *  **参数解释**：  任务的迁移方向，测试连接之后调用必填。  **约束限制**：  - 测试连接之后调用必填。  **取值范围**：  - up：入云，灾备场景时对应本云为备 - down：出云，灾备场景时对应本云为主 - non-dbs：自建  **默认取值**：  不涉及
    *
    * @return string|null
    */
    public function getJobDirection()
    {
        return $this->container['jobDirection'];
    }

    /**
    * Sets jobDirection
    *
    * @param string|null $jobDirection **参数解释**：  任务的迁移方向，测试连接之后调用必填。  **约束限制**：  - 测试连接之后调用必填。  **取值范围**：  - up：入云，灾备场景时对应本云为备 - down：出云，灾备场景时对应本云为主 - non-dbs：自建  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setJobDirection($jobDirection)
    {
        $this->container['jobDirection'] = $jobDirection;
        return $this;
    }

    /**
    * Gets isTargetReadonly
    *  **参数解释**：  指定目标数据库实例在迁移过程中是否限制为只读状态。  **约束限制**：  不涉及。  **取值范围**：  - true：目标实例限制为只读 - false：目标实例不限制为只读  **默认取值**：  不涉及
    *
    * @return bool|null
    */
    public function getIsTargetReadonly()
    {
        return $this->container['isTargetReadonly'];
    }

    /**
    * Sets isTargetReadonly
    *
    * @param bool|null $isTargetReadonly **参数解释**：  指定目标数据库实例在迁移过程中是否限制为只读状态。  **约束限制**：  不涉及。  **取值范围**：  - true：目标实例限制为只读 - false：目标实例不限制为只读  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setIsTargetReadonly($isTargetReadonly)
    {
        $this->container['isTargetReadonly'] = $isTargetReadonly;
        return $this;
    }

    /**
    * Gets replaceDefiner
    *  **参数解释**：  所有Definer是否迁移到该用户下，MySQL数据库支持该设置，测试连接之后修改调用时必填。  **约束限制**：  - 测试连接之后修改调用时必填。  **取值范围**：  - true：迁移后，所有源数据库对象的Definer都会迁移至该用户下，其他用户需要授权后才具有数据库对象权限 - false：迁移后，将保持源数据库对象Definer定义不变，选择此选项，需要配合下一步用户权限迁移功能，将源数据库的用户全部迁移，这样才能保持源数据库的权限体系完全不变  **默认取值**：  不涉及
    *
    * @return bool|null
    */
    public function getReplaceDefiner()
    {
        return $this->container['replaceDefiner'];
    }

    /**
    * Sets replaceDefiner
    *
    * @param bool|null $replaceDefiner **参数解释**：  所有Definer是否迁移到该用户下，MySQL数据库支持该设置，测试连接之后修改调用时必填。  **约束限制**：  - 测试连接之后修改调用时必填。  **取值范围**：  - true：迁移后，所有源数据库对象的Definer都会迁移至该用户下，其他用户需要授权后才具有数据库对象权限 - false：迁移后，将保持源数据库对象Definer定义不变，选择此选项，需要配合下一步用户权限迁移功能，将源数据库的用户全部迁移，这样才能保持源数据库的权限体系完全不变  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setReplaceDefiner($replaceDefiner)
    {
        $this->container['replaceDefiner'] = $replaceDefiner;
        return $this;
    }

    /**
    * Gets tags
    *  **参数解释**：  标签信息，用于给任务添加标识以便分类管理，详情请参见ResourceTag对象定义。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\ResourceTag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\ResourceTag[]|null $tags **参数解释**：  标签信息，用于给任务添加标识以便分类管理，详情请参见ResourceTag对象定义。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets dbUseType
    *  **参数解释**：  迁移任务的业务场景类型。  **约束限制**：  不涉及。  **取值范围**：  - migration：实时迁移 - sync：实时同步 - cloudDataGuard：实时灾备  **默认取值**：  不涉及
    *
    * @return string|null
    */
    public function getDbUseType()
    {
        return $this->container['dbUseType'];
    }

    /**
    * Sets dbUseType
    *
    * @param string|null $dbUseType **参数解释**：  迁移任务的业务场景类型。  **约束限制**：  不涉及。  **取值范围**：  - migration：实时迁移 - sync：实时同步 - cloudDataGuard：实时灾备  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setDbUseType($dbUseType)
    {
        $this->container['dbUseType'] = $dbUseType;
        return $this;
    }

    /**
    * Gets productId
    *  **参数解释**：  产品ID，用于标识包周期任务的产品信息。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @return string|null
    */
    public function getProductId()
    {
        return $this->container['productId'];
    }

    /**
    * Sets productId
    *
    * @param string|null $productId **参数解释**：  产品ID，用于标识包周期任务的产品信息。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setProductId($productId)
    {
        $this->container['productId'] = $productId;
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

