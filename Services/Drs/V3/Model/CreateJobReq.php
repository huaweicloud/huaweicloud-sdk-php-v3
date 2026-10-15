<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateJobReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateJobReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * bindEip  **参数解释**：  是否绑定EIP（弹性公网IP）。  **约束限制**：  网络类型为EIP时必填且为true。  **取值范围**：  - true：绑定EIP - false：不绑定EIP  **默认取值**：  不涉及
    * dbUseType  **参数解释**：  迁移任务的业务场景类型。  **约束限制**：  不涉及。  **取值范围**：  - migration：实时迁移 - sync：实时同步 - cloudDataGuard：实时灾备  **默认取值**：  不涉及
    * name  **参数解释**：  任务名称。  **约束限制**：  - 必须以字母开头，不区分大小写，可以包含字母、数字、中划线或下划线，不能包括其他特殊字符。  **取值范围**：  长度为4-50个字符。  **默认取值**：  不涉及
    * description  **参数解释**：  任务描述。  **约束限制**：  不能超过256位，且不能包含!<>&'\"特殊字符。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * engineType  **参数解释**：  DRS任务引擎类型。  **约束限制**：  不涉及。  **取值范围**：  - mysql：MySQL到MySQL迁移，MySQL到MySQL同步 - mongodb：MongoDB到DDS迁移与同步 - cloudDataGuard-mysql：MySQL到MySQL灾备 - gaussdbv5：GaussDB同步 - postgresql：PostgreSQL到PostgreSQL同步 - mysql-to-kafka：MySQL到Kafka同步 - taurus-to-kafka：TaurusDB到Kafka同步 - gaussdbv5ha-to-kafka：GaussDB集中式版到Kafka同步 - oracle-to-gaussdbv5：Oracle-GaussDB分布式版 - oracle-to-gaussdbv5ha：Oracle-GaussDB集中式版 - gaussdbv5-to-oracle：GaussDB分布式版-Oracle - gaussdbv5ha-to-oracle：GaussDB集中式版-Oracle - gaussdbv5-to-kafka：GaussDB分布式版-Kafka  详细取值可参考引擎类型说明。  **默认取值**：  不涉及
    * isTargetReadonly  **参数解释**：  指定目标实例是否限制为只读。  **约束限制**：  - MySQL迁移和灾备，且job_direction为up时设置有效。 - 灾备场景下，单主灾备且本云为备为必填且为true，不填默认设置为true。  **取值范围**：  - true：目标实例限制为只读 - false：目标实例不限制为只读  **默认取值**：  不涉及
    * jobDirection  **参数解释**：  任务的迁移方向。  **约束限制**：  不涉及。  **取值范围**：  - up：入云，灾备场景时对应本云为备 - down：出云，灾备场景时对应本云为主 - non-dbs：自建  **默认取值**：  不涉及
    * multiWrite  **参数解释**：  是否为双主灾备模式。  **约束限制**：  - db_use_type为cloudDataGuard时必填。 - db_use_type为其他类型时为非必选参数。  **取值范围**：  - true：双主灾备 - false：非双主灾备  **默认取值**：  false
    * netType  **参数解释**：  任务使用的网络类型。  **约束限制**：  灾备场景不支持选择VPC网络。  **取值范围**：  - vpn：虚拟专用网络 - vpc：虚拟私有云 - eip：弹性公网IP  **默认取值**：  不涉及
    * nodeNum  **参数解释**：  节点个数。MongoDB数据库时对应源端分片个数，源库为集群时必填。MySQL双主灾备时会默认设置为2。  **约束限制**：  不涉及。  **取值范围**：  1-32  **默认取值**：  不涉及
    * nodeType  **参数解释**：  DRS任务实例规格编码，决定迁移实例的计算资源大小。  **约束限制**：  不涉及。  **取值范围**：  - micro：极小规格 - small：小规格 - medium：中规格 - high：大规格 - xlarge：超大规格 - 2xlarge：极大规格  具体某种场景支持的取值可以通过查询可用的Node规格接口获取。  **默认取值**：  high
    * sourceEndpoint  sourceEndpoint
    * targetEndpoint  targetEndpoint
    * tags  **参数解释**：  标签信息列表，详情请参见ResourceTag对象定义。  **约束限制**：  最多添加20个标签。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * taskType  **参数解释**：  任务迁移模式，指定数据复制任务的执行方式。  **约束限制**：  单主灾备场景仅支持选择全量加增量（FULL_INCR_TRANS）。  **取值范围**：  - FULL_TRANS：全量迁移，仅迁移历史数据 - FULL_INCR_TRANS：全量+增量迁移，先迁移历史数据再持续同步增量 - INCR_TRANS：增量迁移，仅同步数据变更  **默认取值**：  FULL_INCR_TRANS
    * customizeSutnetId  **参数解释**：  DRS实例所在子网ID，对应目标库相同VPC下已创建的子网（subnet）的网络ID。  **约束限制**：  UUID格式。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * productId  **参数解释**：  产品ID，用于标识包年包月任务对应的产品。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * sysTags  **参数解释**：  企业项目标签列表，详情请参见ResourceTag对象定义。  **约束限制**：  - 不填默认为default。 - key值必须为_sys_enterprise_project_id，value为企业项目ID。 - 只能填一个企业项目。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * expiredDays  **参数解释**：  任务处于异常状态一段时间后自动结束的天数。  **约束限制**：  不涉及。  **取值范围**：  14-100  **默认取值**：  14
    * masterAz  **参数解释**：  主备任务主任务所在可用区编码，可以通过查询规格未售罄的可用区接口获取。  **约束限制**：  - master_az和slave_az同时填写时生效。 - 目前支持mysql，gaussdbv5ha-to-kafka。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * slaveAz  **参数解释**：  主备任务备任务所在可用区编码，可以通过查询规格未售罄的可用区接口获取。  **约束限制**：  - master_az和slave_az同时填写时生效。 - 目前支持mysql，gaussdbv5ha-to-kafka。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * chargingMode  **参数解释**：  任务的计费模式，指定数据复制任务的付费方式。  **约束限制**：  - db_use_type为migration时不支持包年包月。 - 支持的engine_type为：mysql，cloudDataGuard-mysql，postgresql，gaussdbv5ha-to-kafka。  **取值范围**：  - period：包年包月 - on_demand：按需计费  **默认取值**：  on_demand
    * periodOrder  periodOrder
    * publicIpList  **参数解释**：  指定公网IP的信息列表，详情请参见PublicIpConfig对象定义。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * isOpenFastClean  **参数解释**：  是否开启云数据库RDS for MySQL或MariaDB的Binlog快速清理。  **约束限制**：  不涉及。  **取值范围**：  - true：开启Binlog快速清理 - false：不开启Binlog快速清理  **默认取值**：  false
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bindEip' => 'bool',
            'dbUseType' => 'string',
            'name' => 'string',
            'description' => 'string',
            'engineType' => 'string',
            'isTargetReadonly' => 'bool',
            'jobDirection' => 'string',
            'multiWrite' => 'bool',
            'netType' => 'string',
            'nodeNum' => 'int',
            'nodeType' => 'string',
            'sourceEndpoint' => '\HuaweiCloud\SDK\Drs\V3\Model\Endpoint',
            'targetEndpoint' => '\HuaweiCloud\SDK\Drs\V3\Model\Endpoint',
            'tags' => '\HuaweiCloud\SDK\Drs\V3\Model\ResourceTag[]',
            'taskType' => 'string',
            'customizeSutnetId' => 'string',
            'productId' => 'string',
            'sysTags' => '\HuaweiCloud\SDK\Drs\V3\Model\ResourceTag[]',
            'expiredDays' => 'string',
            'masterAz' => 'string',
            'slaveAz' => 'string',
            'chargingMode' => 'string',
            'periodOrder' => '\HuaweiCloud\SDK\Drs\V3\Model\PeriodOrderInfo',
            'publicIpList' => '\HuaweiCloud\SDK\Drs\V3\Model\PublicIpConfig[]',
            'isOpenFastClean' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * bindEip  **参数解释**：  是否绑定EIP（弹性公网IP）。  **约束限制**：  网络类型为EIP时必填且为true。  **取值范围**：  - true：绑定EIP - false：不绑定EIP  **默认取值**：  不涉及
    * dbUseType  **参数解释**：  迁移任务的业务场景类型。  **约束限制**：  不涉及。  **取值范围**：  - migration：实时迁移 - sync：实时同步 - cloudDataGuard：实时灾备  **默认取值**：  不涉及
    * name  **参数解释**：  任务名称。  **约束限制**：  - 必须以字母开头，不区分大小写，可以包含字母、数字、中划线或下划线，不能包括其他特殊字符。  **取值范围**：  长度为4-50个字符。  **默认取值**：  不涉及
    * description  **参数解释**：  任务描述。  **约束限制**：  不能超过256位，且不能包含!<>&'\"特殊字符。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * engineType  **参数解释**：  DRS任务引擎类型。  **约束限制**：  不涉及。  **取值范围**：  - mysql：MySQL到MySQL迁移，MySQL到MySQL同步 - mongodb：MongoDB到DDS迁移与同步 - cloudDataGuard-mysql：MySQL到MySQL灾备 - gaussdbv5：GaussDB同步 - postgresql：PostgreSQL到PostgreSQL同步 - mysql-to-kafka：MySQL到Kafka同步 - taurus-to-kafka：TaurusDB到Kafka同步 - gaussdbv5ha-to-kafka：GaussDB集中式版到Kafka同步 - oracle-to-gaussdbv5：Oracle-GaussDB分布式版 - oracle-to-gaussdbv5ha：Oracle-GaussDB集中式版 - gaussdbv5-to-oracle：GaussDB分布式版-Oracle - gaussdbv5ha-to-oracle：GaussDB集中式版-Oracle - gaussdbv5-to-kafka：GaussDB分布式版-Kafka  详细取值可参考引擎类型说明。  **默认取值**：  不涉及
    * isTargetReadonly  **参数解释**：  指定目标实例是否限制为只读。  **约束限制**：  - MySQL迁移和灾备，且job_direction为up时设置有效。 - 灾备场景下，单主灾备且本云为备为必填且为true，不填默认设置为true。  **取值范围**：  - true：目标实例限制为只读 - false：目标实例不限制为只读  **默认取值**：  不涉及
    * jobDirection  **参数解释**：  任务的迁移方向。  **约束限制**：  不涉及。  **取值范围**：  - up：入云，灾备场景时对应本云为备 - down：出云，灾备场景时对应本云为主 - non-dbs：自建  **默认取值**：  不涉及
    * multiWrite  **参数解释**：  是否为双主灾备模式。  **约束限制**：  - db_use_type为cloudDataGuard时必填。 - db_use_type为其他类型时为非必选参数。  **取值范围**：  - true：双主灾备 - false：非双主灾备  **默认取值**：  false
    * netType  **参数解释**：  任务使用的网络类型。  **约束限制**：  灾备场景不支持选择VPC网络。  **取值范围**：  - vpn：虚拟专用网络 - vpc：虚拟私有云 - eip：弹性公网IP  **默认取值**：  不涉及
    * nodeNum  **参数解释**：  节点个数。MongoDB数据库时对应源端分片个数，源库为集群时必填。MySQL双主灾备时会默认设置为2。  **约束限制**：  不涉及。  **取值范围**：  1-32  **默认取值**：  不涉及
    * nodeType  **参数解释**：  DRS任务实例规格编码，决定迁移实例的计算资源大小。  **约束限制**：  不涉及。  **取值范围**：  - micro：极小规格 - small：小规格 - medium：中规格 - high：大规格 - xlarge：超大规格 - 2xlarge：极大规格  具体某种场景支持的取值可以通过查询可用的Node规格接口获取。  **默认取值**：  high
    * sourceEndpoint  sourceEndpoint
    * targetEndpoint  targetEndpoint
    * tags  **参数解释**：  标签信息列表，详情请参见ResourceTag对象定义。  **约束限制**：  最多添加20个标签。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * taskType  **参数解释**：  任务迁移模式，指定数据复制任务的执行方式。  **约束限制**：  单主灾备场景仅支持选择全量加增量（FULL_INCR_TRANS）。  **取值范围**：  - FULL_TRANS：全量迁移，仅迁移历史数据 - FULL_INCR_TRANS：全量+增量迁移，先迁移历史数据再持续同步增量 - INCR_TRANS：增量迁移，仅同步数据变更  **默认取值**：  FULL_INCR_TRANS
    * customizeSutnetId  **参数解释**：  DRS实例所在子网ID，对应目标库相同VPC下已创建的子网（subnet）的网络ID。  **约束限制**：  UUID格式。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * productId  **参数解释**：  产品ID，用于标识包年包月任务对应的产品。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * sysTags  **参数解释**：  企业项目标签列表，详情请参见ResourceTag对象定义。  **约束限制**：  - 不填默认为default。 - key值必须为_sys_enterprise_project_id，value为企业项目ID。 - 只能填一个企业项目。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * expiredDays  **参数解释**：  任务处于异常状态一段时间后自动结束的天数。  **约束限制**：  不涉及。  **取值范围**：  14-100  **默认取值**：  14
    * masterAz  **参数解释**：  主备任务主任务所在可用区编码，可以通过查询规格未售罄的可用区接口获取。  **约束限制**：  - master_az和slave_az同时填写时生效。 - 目前支持mysql，gaussdbv5ha-to-kafka。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * slaveAz  **参数解释**：  主备任务备任务所在可用区编码，可以通过查询规格未售罄的可用区接口获取。  **约束限制**：  - master_az和slave_az同时填写时生效。 - 目前支持mysql，gaussdbv5ha-to-kafka。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * chargingMode  **参数解释**：  任务的计费模式，指定数据复制任务的付费方式。  **约束限制**：  - db_use_type为migration时不支持包年包月。 - 支持的engine_type为：mysql，cloudDataGuard-mysql，postgresql，gaussdbv5ha-to-kafka。  **取值范围**：  - period：包年包月 - on_demand：按需计费  **默认取值**：  on_demand
    * periodOrder  periodOrder
    * publicIpList  **参数解释**：  指定公网IP的信息列表，详情请参见PublicIpConfig对象定义。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * isOpenFastClean  **参数解释**：  是否开启云数据库RDS for MySQL或MariaDB的Binlog快速清理。  **约束限制**：  不涉及。  **取值范围**：  - true：开启Binlog快速清理 - false：不开启Binlog快速清理  **默认取值**：  false
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bindEip' => null,
        'dbUseType' => null,
        'name' => null,
        'description' => null,
        'engineType' => null,
        'isTargetReadonly' => null,
        'jobDirection' => null,
        'multiWrite' => null,
        'netType' => null,
        'nodeNum' => 'int32',
        'nodeType' => null,
        'sourceEndpoint' => null,
        'targetEndpoint' => null,
        'tags' => null,
        'taskType' => null,
        'customizeSutnetId' => null,
        'productId' => null,
        'sysTags' => null,
        'expiredDays' => null,
        'masterAz' => null,
        'slaveAz' => null,
        'chargingMode' => null,
        'periodOrder' => null,
        'publicIpList' => null,
        'isOpenFastClean' => null
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
    * bindEip  **参数解释**：  是否绑定EIP（弹性公网IP）。  **约束限制**：  网络类型为EIP时必填且为true。  **取值范围**：  - true：绑定EIP - false：不绑定EIP  **默认取值**：  不涉及
    * dbUseType  **参数解释**：  迁移任务的业务场景类型。  **约束限制**：  不涉及。  **取值范围**：  - migration：实时迁移 - sync：实时同步 - cloudDataGuard：实时灾备  **默认取值**：  不涉及
    * name  **参数解释**：  任务名称。  **约束限制**：  - 必须以字母开头，不区分大小写，可以包含字母、数字、中划线或下划线，不能包括其他特殊字符。  **取值范围**：  长度为4-50个字符。  **默认取值**：  不涉及
    * description  **参数解释**：  任务描述。  **约束限制**：  不能超过256位，且不能包含!<>&'\"特殊字符。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * engineType  **参数解释**：  DRS任务引擎类型。  **约束限制**：  不涉及。  **取值范围**：  - mysql：MySQL到MySQL迁移，MySQL到MySQL同步 - mongodb：MongoDB到DDS迁移与同步 - cloudDataGuard-mysql：MySQL到MySQL灾备 - gaussdbv5：GaussDB同步 - postgresql：PostgreSQL到PostgreSQL同步 - mysql-to-kafka：MySQL到Kafka同步 - taurus-to-kafka：TaurusDB到Kafka同步 - gaussdbv5ha-to-kafka：GaussDB集中式版到Kafka同步 - oracle-to-gaussdbv5：Oracle-GaussDB分布式版 - oracle-to-gaussdbv5ha：Oracle-GaussDB集中式版 - gaussdbv5-to-oracle：GaussDB分布式版-Oracle - gaussdbv5ha-to-oracle：GaussDB集中式版-Oracle - gaussdbv5-to-kafka：GaussDB分布式版-Kafka  详细取值可参考引擎类型说明。  **默认取值**：  不涉及
    * isTargetReadonly  **参数解释**：  指定目标实例是否限制为只读。  **约束限制**：  - MySQL迁移和灾备，且job_direction为up时设置有效。 - 灾备场景下，单主灾备且本云为备为必填且为true，不填默认设置为true。  **取值范围**：  - true：目标实例限制为只读 - false：目标实例不限制为只读  **默认取值**：  不涉及
    * jobDirection  **参数解释**：  任务的迁移方向。  **约束限制**：  不涉及。  **取值范围**：  - up：入云，灾备场景时对应本云为备 - down：出云，灾备场景时对应本云为主 - non-dbs：自建  **默认取值**：  不涉及
    * multiWrite  **参数解释**：  是否为双主灾备模式。  **约束限制**：  - db_use_type为cloudDataGuard时必填。 - db_use_type为其他类型时为非必选参数。  **取值范围**：  - true：双主灾备 - false：非双主灾备  **默认取值**：  false
    * netType  **参数解释**：  任务使用的网络类型。  **约束限制**：  灾备场景不支持选择VPC网络。  **取值范围**：  - vpn：虚拟专用网络 - vpc：虚拟私有云 - eip：弹性公网IP  **默认取值**：  不涉及
    * nodeNum  **参数解释**：  节点个数。MongoDB数据库时对应源端分片个数，源库为集群时必填。MySQL双主灾备时会默认设置为2。  **约束限制**：  不涉及。  **取值范围**：  1-32  **默认取值**：  不涉及
    * nodeType  **参数解释**：  DRS任务实例规格编码，决定迁移实例的计算资源大小。  **约束限制**：  不涉及。  **取值范围**：  - micro：极小规格 - small：小规格 - medium：中规格 - high：大规格 - xlarge：超大规格 - 2xlarge：极大规格  具体某种场景支持的取值可以通过查询可用的Node规格接口获取。  **默认取值**：  high
    * sourceEndpoint  sourceEndpoint
    * targetEndpoint  targetEndpoint
    * tags  **参数解释**：  标签信息列表，详情请参见ResourceTag对象定义。  **约束限制**：  最多添加20个标签。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * taskType  **参数解释**：  任务迁移模式，指定数据复制任务的执行方式。  **约束限制**：  单主灾备场景仅支持选择全量加增量（FULL_INCR_TRANS）。  **取值范围**：  - FULL_TRANS：全量迁移，仅迁移历史数据 - FULL_INCR_TRANS：全量+增量迁移，先迁移历史数据再持续同步增量 - INCR_TRANS：增量迁移，仅同步数据变更  **默认取值**：  FULL_INCR_TRANS
    * customizeSutnetId  **参数解释**：  DRS实例所在子网ID，对应目标库相同VPC下已创建的子网（subnet）的网络ID。  **约束限制**：  UUID格式。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * productId  **参数解释**：  产品ID，用于标识包年包月任务对应的产品。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * sysTags  **参数解释**：  企业项目标签列表，详情请参见ResourceTag对象定义。  **约束限制**：  - 不填默认为default。 - key值必须为_sys_enterprise_project_id，value为企业项目ID。 - 只能填一个企业项目。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * expiredDays  **参数解释**：  任务处于异常状态一段时间后自动结束的天数。  **约束限制**：  不涉及。  **取值范围**：  14-100  **默认取值**：  14
    * masterAz  **参数解释**：  主备任务主任务所在可用区编码，可以通过查询规格未售罄的可用区接口获取。  **约束限制**：  - master_az和slave_az同时填写时生效。 - 目前支持mysql，gaussdbv5ha-to-kafka。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * slaveAz  **参数解释**：  主备任务备任务所在可用区编码，可以通过查询规格未售罄的可用区接口获取。  **约束限制**：  - master_az和slave_az同时填写时生效。 - 目前支持mysql，gaussdbv5ha-to-kafka。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * chargingMode  **参数解释**：  任务的计费模式，指定数据复制任务的付费方式。  **约束限制**：  - db_use_type为migration时不支持包年包月。 - 支持的engine_type为：mysql，cloudDataGuard-mysql，postgresql，gaussdbv5ha-to-kafka。  **取值范围**：  - period：包年包月 - on_demand：按需计费  **默认取值**：  on_demand
    * periodOrder  periodOrder
    * publicIpList  **参数解释**：  指定公网IP的信息列表，详情请参见PublicIpConfig对象定义。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * isOpenFastClean  **参数解释**：  是否开启云数据库RDS for MySQL或MariaDB的Binlog快速清理。  **约束限制**：  不涉及。  **取值范围**：  - true：开启Binlog快速清理 - false：不开启Binlog快速清理  **默认取值**：  false
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bindEip' => 'bind_eip',
            'dbUseType' => 'db_use_type',
            'name' => 'name',
            'description' => 'description',
            'engineType' => 'engine_type',
            'isTargetReadonly' => 'is_target_readonly',
            'jobDirection' => 'job_direction',
            'multiWrite' => 'multi_write',
            'netType' => 'net_type',
            'nodeNum' => 'node_num',
            'nodeType' => 'node_type',
            'sourceEndpoint' => 'source_endpoint',
            'targetEndpoint' => 'target_endpoint',
            'tags' => 'tags',
            'taskType' => 'task_type',
            'customizeSutnetId' => 'customize_sutnet_id',
            'productId' => 'product_id',
            'sysTags' => 'sys_tags',
            'expiredDays' => 'expired_days',
            'masterAz' => 'master_az',
            'slaveAz' => 'slave_az',
            'chargingMode' => 'charging_mode',
            'periodOrder' => 'period_order',
            'publicIpList' => 'public_ip_list',
            'isOpenFastClean' => 'is_open_fast_clean'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * bindEip  **参数解释**：  是否绑定EIP（弹性公网IP）。  **约束限制**：  网络类型为EIP时必填且为true。  **取值范围**：  - true：绑定EIP - false：不绑定EIP  **默认取值**：  不涉及
    * dbUseType  **参数解释**：  迁移任务的业务场景类型。  **约束限制**：  不涉及。  **取值范围**：  - migration：实时迁移 - sync：实时同步 - cloudDataGuard：实时灾备  **默认取值**：  不涉及
    * name  **参数解释**：  任务名称。  **约束限制**：  - 必须以字母开头，不区分大小写，可以包含字母、数字、中划线或下划线，不能包括其他特殊字符。  **取值范围**：  长度为4-50个字符。  **默认取值**：  不涉及
    * description  **参数解释**：  任务描述。  **约束限制**：  不能超过256位，且不能包含!<>&'\"特殊字符。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * engineType  **参数解释**：  DRS任务引擎类型。  **约束限制**：  不涉及。  **取值范围**：  - mysql：MySQL到MySQL迁移，MySQL到MySQL同步 - mongodb：MongoDB到DDS迁移与同步 - cloudDataGuard-mysql：MySQL到MySQL灾备 - gaussdbv5：GaussDB同步 - postgresql：PostgreSQL到PostgreSQL同步 - mysql-to-kafka：MySQL到Kafka同步 - taurus-to-kafka：TaurusDB到Kafka同步 - gaussdbv5ha-to-kafka：GaussDB集中式版到Kafka同步 - oracle-to-gaussdbv5：Oracle-GaussDB分布式版 - oracle-to-gaussdbv5ha：Oracle-GaussDB集中式版 - gaussdbv5-to-oracle：GaussDB分布式版-Oracle - gaussdbv5ha-to-oracle：GaussDB集中式版-Oracle - gaussdbv5-to-kafka：GaussDB分布式版-Kafka  详细取值可参考引擎类型说明。  **默认取值**：  不涉及
    * isTargetReadonly  **参数解释**：  指定目标实例是否限制为只读。  **约束限制**：  - MySQL迁移和灾备，且job_direction为up时设置有效。 - 灾备场景下，单主灾备且本云为备为必填且为true，不填默认设置为true。  **取值范围**：  - true：目标实例限制为只读 - false：目标实例不限制为只读  **默认取值**：  不涉及
    * jobDirection  **参数解释**：  任务的迁移方向。  **约束限制**：  不涉及。  **取值范围**：  - up：入云，灾备场景时对应本云为备 - down：出云，灾备场景时对应本云为主 - non-dbs：自建  **默认取值**：  不涉及
    * multiWrite  **参数解释**：  是否为双主灾备模式。  **约束限制**：  - db_use_type为cloudDataGuard时必填。 - db_use_type为其他类型时为非必选参数。  **取值范围**：  - true：双主灾备 - false：非双主灾备  **默认取值**：  false
    * netType  **参数解释**：  任务使用的网络类型。  **约束限制**：  灾备场景不支持选择VPC网络。  **取值范围**：  - vpn：虚拟专用网络 - vpc：虚拟私有云 - eip：弹性公网IP  **默认取值**：  不涉及
    * nodeNum  **参数解释**：  节点个数。MongoDB数据库时对应源端分片个数，源库为集群时必填。MySQL双主灾备时会默认设置为2。  **约束限制**：  不涉及。  **取值范围**：  1-32  **默认取值**：  不涉及
    * nodeType  **参数解释**：  DRS任务实例规格编码，决定迁移实例的计算资源大小。  **约束限制**：  不涉及。  **取值范围**：  - micro：极小规格 - small：小规格 - medium：中规格 - high：大规格 - xlarge：超大规格 - 2xlarge：极大规格  具体某种场景支持的取值可以通过查询可用的Node规格接口获取。  **默认取值**：  high
    * sourceEndpoint  sourceEndpoint
    * targetEndpoint  targetEndpoint
    * tags  **参数解释**：  标签信息列表，详情请参见ResourceTag对象定义。  **约束限制**：  最多添加20个标签。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * taskType  **参数解释**：  任务迁移模式，指定数据复制任务的执行方式。  **约束限制**：  单主灾备场景仅支持选择全量加增量（FULL_INCR_TRANS）。  **取值范围**：  - FULL_TRANS：全量迁移，仅迁移历史数据 - FULL_INCR_TRANS：全量+增量迁移，先迁移历史数据再持续同步增量 - INCR_TRANS：增量迁移，仅同步数据变更  **默认取值**：  FULL_INCR_TRANS
    * customizeSutnetId  **参数解释**：  DRS实例所在子网ID，对应目标库相同VPC下已创建的子网（subnet）的网络ID。  **约束限制**：  UUID格式。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * productId  **参数解释**：  产品ID，用于标识包年包月任务对应的产品。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * sysTags  **参数解释**：  企业项目标签列表，详情请参见ResourceTag对象定义。  **约束限制**：  - 不填默认为default。 - key值必须为_sys_enterprise_project_id，value为企业项目ID。 - 只能填一个企业项目。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * expiredDays  **参数解释**：  任务处于异常状态一段时间后自动结束的天数。  **约束限制**：  不涉及。  **取值范围**：  14-100  **默认取值**：  14
    * masterAz  **参数解释**：  主备任务主任务所在可用区编码，可以通过查询规格未售罄的可用区接口获取。  **约束限制**：  - master_az和slave_az同时填写时生效。 - 目前支持mysql，gaussdbv5ha-to-kafka。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * slaveAz  **参数解释**：  主备任务备任务所在可用区编码，可以通过查询规格未售罄的可用区接口获取。  **约束限制**：  - master_az和slave_az同时填写时生效。 - 目前支持mysql，gaussdbv5ha-to-kafka。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * chargingMode  **参数解释**：  任务的计费模式，指定数据复制任务的付费方式。  **约束限制**：  - db_use_type为migration时不支持包年包月。 - 支持的engine_type为：mysql，cloudDataGuard-mysql，postgresql，gaussdbv5ha-to-kafka。  **取值范围**：  - period：包年包月 - on_demand：按需计费  **默认取值**：  on_demand
    * periodOrder  periodOrder
    * publicIpList  **参数解释**：  指定公网IP的信息列表，详情请参见PublicIpConfig对象定义。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * isOpenFastClean  **参数解释**：  是否开启云数据库RDS for MySQL或MariaDB的Binlog快速清理。  **约束限制**：  不涉及。  **取值范围**：  - true：开启Binlog快速清理 - false：不开启Binlog快速清理  **默认取值**：  false
    *
    * @var string[]
    */
    protected static $setters = [
            'bindEip' => 'setBindEip',
            'dbUseType' => 'setDbUseType',
            'name' => 'setName',
            'description' => 'setDescription',
            'engineType' => 'setEngineType',
            'isTargetReadonly' => 'setIsTargetReadonly',
            'jobDirection' => 'setJobDirection',
            'multiWrite' => 'setMultiWrite',
            'netType' => 'setNetType',
            'nodeNum' => 'setNodeNum',
            'nodeType' => 'setNodeType',
            'sourceEndpoint' => 'setSourceEndpoint',
            'targetEndpoint' => 'setTargetEndpoint',
            'tags' => 'setTags',
            'taskType' => 'setTaskType',
            'customizeSutnetId' => 'setCustomizeSutnetId',
            'productId' => 'setProductId',
            'sysTags' => 'setSysTags',
            'expiredDays' => 'setExpiredDays',
            'masterAz' => 'setMasterAz',
            'slaveAz' => 'setSlaveAz',
            'chargingMode' => 'setChargingMode',
            'periodOrder' => 'setPeriodOrder',
            'publicIpList' => 'setPublicIpList',
            'isOpenFastClean' => 'setIsOpenFastClean'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * bindEip  **参数解释**：  是否绑定EIP（弹性公网IP）。  **约束限制**：  网络类型为EIP时必填且为true。  **取值范围**：  - true：绑定EIP - false：不绑定EIP  **默认取值**：  不涉及
    * dbUseType  **参数解释**：  迁移任务的业务场景类型。  **约束限制**：  不涉及。  **取值范围**：  - migration：实时迁移 - sync：实时同步 - cloudDataGuard：实时灾备  **默认取值**：  不涉及
    * name  **参数解释**：  任务名称。  **约束限制**：  - 必须以字母开头，不区分大小写，可以包含字母、数字、中划线或下划线，不能包括其他特殊字符。  **取值范围**：  长度为4-50个字符。  **默认取值**：  不涉及
    * description  **参数解释**：  任务描述。  **约束限制**：  不能超过256位，且不能包含!<>&'\"特殊字符。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * engineType  **参数解释**：  DRS任务引擎类型。  **约束限制**：  不涉及。  **取值范围**：  - mysql：MySQL到MySQL迁移，MySQL到MySQL同步 - mongodb：MongoDB到DDS迁移与同步 - cloudDataGuard-mysql：MySQL到MySQL灾备 - gaussdbv5：GaussDB同步 - postgresql：PostgreSQL到PostgreSQL同步 - mysql-to-kafka：MySQL到Kafka同步 - taurus-to-kafka：TaurusDB到Kafka同步 - gaussdbv5ha-to-kafka：GaussDB集中式版到Kafka同步 - oracle-to-gaussdbv5：Oracle-GaussDB分布式版 - oracle-to-gaussdbv5ha：Oracle-GaussDB集中式版 - gaussdbv5-to-oracle：GaussDB分布式版-Oracle - gaussdbv5ha-to-oracle：GaussDB集中式版-Oracle - gaussdbv5-to-kafka：GaussDB分布式版-Kafka  详细取值可参考引擎类型说明。  **默认取值**：  不涉及
    * isTargetReadonly  **参数解释**：  指定目标实例是否限制为只读。  **约束限制**：  - MySQL迁移和灾备，且job_direction为up时设置有效。 - 灾备场景下，单主灾备且本云为备为必填且为true，不填默认设置为true。  **取值范围**：  - true：目标实例限制为只读 - false：目标实例不限制为只读  **默认取值**：  不涉及
    * jobDirection  **参数解释**：  任务的迁移方向。  **约束限制**：  不涉及。  **取值范围**：  - up：入云，灾备场景时对应本云为备 - down：出云，灾备场景时对应本云为主 - non-dbs：自建  **默认取值**：  不涉及
    * multiWrite  **参数解释**：  是否为双主灾备模式。  **约束限制**：  - db_use_type为cloudDataGuard时必填。 - db_use_type为其他类型时为非必选参数。  **取值范围**：  - true：双主灾备 - false：非双主灾备  **默认取值**：  false
    * netType  **参数解释**：  任务使用的网络类型。  **约束限制**：  灾备场景不支持选择VPC网络。  **取值范围**：  - vpn：虚拟专用网络 - vpc：虚拟私有云 - eip：弹性公网IP  **默认取值**：  不涉及
    * nodeNum  **参数解释**：  节点个数。MongoDB数据库时对应源端分片个数，源库为集群时必填。MySQL双主灾备时会默认设置为2。  **约束限制**：  不涉及。  **取值范围**：  1-32  **默认取值**：  不涉及
    * nodeType  **参数解释**：  DRS任务实例规格编码，决定迁移实例的计算资源大小。  **约束限制**：  不涉及。  **取值范围**：  - micro：极小规格 - small：小规格 - medium：中规格 - high：大规格 - xlarge：超大规格 - 2xlarge：极大规格  具体某种场景支持的取值可以通过查询可用的Node规格接口获取。  **默认取值**：  high
    * sourceEndpoint  sourceEndpoint
    * targetEndpoint  targetEndpoint
    * tags  **参数解释**：  标签信息列表，详情请参见ResourceTag对象定义。  **约束限制**：  最多添加20个标签。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * taskType  **参数解释**：  任务迁移模式，指定数据复制任务的执行方式。  **约束限制**：  单主灾备场景仅支持选择全量加增量（FULL_INCR_TRANS）。  **取值范围**：  - FULL_TRANS：全量迁移，仅迁移历史数据 - FULL_INCR_TRANS：全量+增量迁移，先迁移历史数据再持续同步增量 - INCR_TRANS：增量迁移，仅同步数据变更  **默认取值**：  FULL_INCR_TRANS
    * customizeSutnetId  **参数解释**：  DRS实例所在子网ID，对应目标库相同VPC下已创建的子网（subnet）的网络ID。  **约束限制**：  UUID格式。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * productId  **参数解释**：  产品ID，用于标识包年包月任务对应的产品。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * sysTags  **参数解释**：  企业项目标签列表，详情请参见ResourceTag对象定义。  **约束限制**：  - 不填默认为default。 - key值必须为_sys_enterprise_project_id，value为企业项目ID。 - 只能填一个企业项目。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * expiredDays  **参数解释**：  任务处于异常状态一段时间后自动结束的天数。  **约束限制**：  不涉及。  **取值范围**：  14-100  **默认取值**：  14
    * masterAz  **参数解释**：  主备任务主任务所在可用区编码，可以通过查询规格未售罄的可用区接口获取。  **约束限制**：  - master_az和slave_az同时填写时生效。 - 目前支持mysql，gaussdbv5ha-to-kafka。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * slaveAz  **参数解释**：  主备任务备任务所在可用区编码，可以通过查询规格未售罄的可用区接口获取。  **约束限制**：  - master_az和slave_az同时填写时生效。 - 目前支持mysql，gaussdbv5ha-to-kafka。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * chargingMode  **参数解释**：  任务的计费模式，指定数据复制任务的付费方式。  **约束限制**：  - db_use_type为migration时不支持包年包月。 - 支持的engine_type为：mysql，cloudDataGuard-mysql，postgresql，gaussdbv5ha-to-kafka。  **取值范围**：  - period：包年包月 - on_demand：按需计费  **默认取值**：  on_demand
    * periodOrder  periodOrder
    * publicIpList  **参数解释**：  指定公网IP的信息列表，详情请参见PublicIpConfig对象定义。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * isOpenFastClean  **参数解释**：  是否开启云数据库RDS for MySQL或MariaDB的Binlog快速清理。  **约束限制**：  不涉及。  **取值范围**：  - true：开启Binlog快速清理 - false：不开启Binlog快速清理  **默认取值**：  false
    *
    * @var string[]
    */
    protected static $getters = [
            'bindEip' => 'getBindEip',
            'dbUseType' => 'getDbUseType',
            'name' => 'getName',
            'description' => 'getDescription',
            'engineType' => 'getEngineType',
            'isTargetReadonly' => 'getIsTargetReadonly',
            'jobDirection' => 'getJobDirection',
            'multiWrite' => 'getMultiWrite',
            'netType' => 'getNetType',
            'nodeNum' => 'getNodeNum',
            'nodeType' => 'getNodeType',
            'sourceEndpoint' => 'getSourceEndpoint',
            'targetEndpoint' => 'getTargetEndpoint',
            'tags' => 'getTags',
            'taskType' => 'getTaskType',
            'customizeSutnetId' => 'getCustomizeSutnetId',
            'productId' => 'getProductId',
            'sysTags' => 'getSysTags',
            'expiredDays' => 'getExpiredDays',
            'masterAz' => 'getMasterAz',
            'slaveAz' => 'getSlaveAz',
            'chargingMode' => 'getChargingMode',
            'periodOrder' => 'getPeriodOrder',
            'publicIpList' => 'getPublicIpList',
            'isOpenFastClean' => 'getIsOpenFastClean'
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
    const DB_USE_TYPE_MIGRATION = 'migration';
    const DB_USE_TYPE_SYNC = 'sync';
    const DB_USE_TYPE_CLOUD_DATA_GUARD = 'cloudDataGuard';
    const ENGINE_TYPE_MYSQL = 'mysql';
    const ENGINE_TYPE_MONGODB = 'mongodb';
    const ENGINE_TYPE_CLOUD_DATA_GUARD_MYSQL = 'cloudDataGuard-mysql';
    const ENGINE_TYPE_GAUSSDBV5 = 'gaussdbv5';
    const ENGINE_TYPE_POSTGRESQL = 'postgresql';
    const ENGINE_TYPE_MYSQL_TO_KAFKA = 'mysql-to-kafka';
    const ENGINE_TYPE_TAURUS_TO_KAFKA = 'taurus-to-kafka';
    const ENGINE_TYPE_GAUSSDBV5HA_TO_KAFKA = 'gaussdbv5ha-to-kafka';
    const JOB_DIRECTION_UP = 'up';
    const JOB_DIRECTION_DOWN = 'down';
    const JOB_DIRECTION_NON_DBS = 'non-dbs';
    const NET_TYPE_VPN = 'vpn';
    const NET_TYPE_VPC = 'vpc';
    const NET_TYPE_EIP = 'eip';
    const NODE_TYPE_MICRO = 'micro';
    const NODE_TYPE_SMALL = 'small';
    const NODE_TYPE_MEDIUM = 'medium';
    const NODE_TYPE_HIGH = 'high';
    const NODE_TYPE_XLARGE = 'xlarge';
    const NODE_TYPE__2XLARGE = '2xlarge';
    const TASK_TYPE_FULL_TRANS = 'FULL_TRANS';
    const TASK_TYPE_FULL_INCR_TRANS = 'FULL_INCR_TRANS';
    const TASK_TYPE_INCR_TRANS = 'INCR_TRANS';
    const CHARGING_MODE_PERIOD = 'period';
    const CHARGING_MODE_ON_DEMAND = 'on_demand';
    

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
    public function getNetTypeAllowableValues()
    {
        return [
            self::NET_TYPE_VPN,
            self::NET_TYPE_VPC,
            self::NET_TYPE_EIP,
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
    public function getTaskTypeAllowableValues()
    {
        return [
            self::TASK_TYPE_FULL_TRANS,
            self::TASK_TYPE_FULL_INCR_TRANS,
            self::TASK_TYPE_INCR_TRANS,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getChargingModeAllowableValues()
    {
        return [
            self::CHARGING_MODE_PERIOD,
            self::CHARGING_MODE_ON_DEMAND,
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
        $this->container['bindEip'] = isset($data['bindEip']) ? $data['bindEip'] : null;
        $this->container['dbUseType'] = isset($data['dbUseType']) ? $data['dbUseType'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['engineType'] = isset($data['engineType']) ? $data['engineType'] : null;
        $this->container['isTargetReadonly'] = isset($data['isTargetReadonly']) ? $data['isTargetReadonly'] : null;
        $this->container['jobDirection'] = isset($data['jobDirection']) ? $data['jobDirection'] : null;
        $this->container['multiWrite'] = isset($data['multiWrite']) ? $data['multiWrite'] : null;
        $this->container['netType'] = isset($data['netType']) ? $data['netType'] : null;
        $this->container['nodeNum'] = isset($data['nodeNum']) ? $data['nodeNum'] : null;
        $this->container['nodeType'] = isset($data['nodeType']) ? $data['nodeType'] : null;
        $this->container['sourceEndpoint'] = isset($data['sourceEndpoint']) ? $data['sourceEndpoint'] : null;
        $this->container['targetEndpoint'] = isset($data['targetEndpoint']) ? $data['targetEndpoint'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['taskType'] = isset($data['taskType']) ? $data['taskType'] : null;
        $this->container['customizeSutnetId'] = isset($data['customizeSutnetId']) ? $data['customizeSutnetId'] : null;
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
        $this->container['sysTags'] = isset($data['sysTags']) ? $data['sysTags'] : null;
        $this->container['expiredDays'] = isset($data['expiredDays']) ? $data['expiredDays'] : null;
        $this->container['masterAz'] = isset($data['masterAz']) ? $data['masterAz'] : null;
        $this->container['slaveAz'] = isset($data['slaveAz']) ? $data['slaveAz'] : null;
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
        $this->container['periodOrder'] = isset($data['periodOrder']) ? $data['periodOrder'] : null;
        $this->container['publicIpList'] = isset($data['publicIpList']) ? $data['publicIpList'] : null;
        $this->container['isOpenFastClean'] = isset($data['isOpenFastClean']) ? $data['isOpenFastClean'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['dbUseType'] === null) {
            $invalidProperties[] = "'dbUseType' can't be null";
        }
            $allowedValues = $this->getDbUseTypeAllowableValues();
                if (!is_null($this->container['dbUseType']) && !in_array($this->container['dbUseType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'dbUseType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 50)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 50.";
            }
            if ((mb_strlen($this->container['name']) < 4)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 4.";
            }
        if ($this->container['engineType'] === null) {
            $invalidProperties[] = "'engineType' can't be null";
        }
            $allowedValues = $this->getEngineTypeAllowableValues();
                if (!is_null($this->container['engineType']) && !in_array($this->container['engineType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'engineType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['jobDirection'] === null) {
            $invalidProperties[] = "'jobDirection' can't be null";
        }
            $allowedValues = $this->getJobDirectionAllowableValues();
                if (!is_null($this->container['jobDirection']) && !in_array($this->container['jobDirection'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'jobDirection', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['netType'] === null) {
            $invalidProperties[] = "'netType' can't be null";
        }
            $allowedValues = $this->getNetTypeAllowableValues();
                if (!is_null($this->container['netType']) && !in_array($this->container['netType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'netType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['nodeNum']) && ($this->container['nodeNum'] > 32)) {
                $invalidProperties[] = "invalid value for 'nodeNum', must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['nodeNum']) && ($this->container['nodeNum'] < 1)) {
                $invalidProperties[] = "invalid value for 'nodeNum', must be bigger than or equal to 1.";
            }
        if ($this->container['nodeType'] === null) {
            $invalidProperties[] = "'nodeType' can't be null";
        }
            $allowedValues = $this->getNodeTypeAllowableValues();
                if (!is_null($this->container['nodeType']) && !in_array($this->container['nodeType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'nodeType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['sourceEndpoint'] === null) {
            $invalidProperties[] = "'sourceEndpoint' can't be null";
        }
        if ($this->container['targetEndpoint'] === null) {
            $invalidProperties[] = "'targetEndpoint' can't be null";
        }
        if ($this->container['taskType'] === null) {
            $invalidProperties[] = "'taskType' can't be null";
        }
            $allowedValues = $this->getTaskTypeAllowableValues();
                if (!is_null($this->container['taskType']) && !in_array($this->container['taskType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'taskType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['customizeSutnetId'] === null) {
            $invalidProperties[] = "'customizeSutnetId' can't be null";
        }
            if (!preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['customizeSutnetId'])) {
                $invalidProperties[] = "invalid value for 'customizeSutnetId', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
            }
            $allowedValues = $this->getChargingModeAllowableValues();
                if (!is_null($this->container['chargingMode']) && !in_array($this->container['chargingMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'chargingMode', must be one of '%s'",
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
    * Gets bindEip
    *  **参数解释**：  是否绑定EIP（弹性公网IP）。  **约束限制**：  网络类型为EIP时必填且为true。  **取值范围**：  - true：绑定EIP - false：不绑定EIP  **默认取值**：  不涉及
    *
    * @return bool|null
    */
    public function getBindEip()
    {
        return $this->container['bindEip'];
    }

    /**
    * Sets bindEip
    *
    * @param bool|null $bindEip **参数解释**：  是否绑定EIP（弹性公网IP）。  **约束限制**：  网络类型为EIP时必填且为true。  **取值范围**：  - true：绑定EIP - false：不绑定EIP  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setBindEip($bindEip)
    {
        $this->container['bindEip'] = $bindEip;
        return $this;
    }

    /**
    * Gets dbUseType
    *  **参数解释**：  迁移任务的业务场景类型。  **约束限制**：  不涉及。  **取值范围**：  - migration：实时迁移 - sync：实时同步 - cloudDataGuard：实时灾备  **默认取值**：  不涉及
    *
    * @return string
    */
    public function getDbUseType()
    {
        return $this->container['dbUseType'];
    }

    /**
    * Sets dbUseType
    *
    * @param string $dbUseType **参数解释**：  迁移任务的业务场景类型。  **约束限制**：  不涉及。  **取值范围**：  - migration：实时迁移 - sync：实时同步 - cloudDataGuard：实时灾备  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setDbUseType($dbUseType)
    {
        $this->container['dbUseType'] = $dbUseType;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**：  任务名称。  **约束限制**：  - 必须以字母开头，不区分大小写，可以包含字母、数字、中划线或下划线，不能包括其他特殊字符。  **取值范围**：  长度为4-50个字符。  **默认取值**：  不涉及
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name **参数解释**：  任务名称。  **约束限制**：  - 必须以字母开头，不区分大小写，可以包含字母、数字、中划线或下划线，不能包括其他特殊字符。  **取值范围**：  长度为4-50个字符。  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**：  任务描述。  **约束限制**：  不能超过256位，且不能包含!<>&'\"特殊字符。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param string|null $description **参数解释**：  任务描述。  **约束限制**：  不能超过256位，且不能包含!<>&'\"特殊字符。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets engineType
    *  **参数解释**：  DRS任务引擎类型。  **约束限制**：  不涉及。  **取值范围**：  - mysql：MySQL到MySQL迁移，MySQL到MySQL同步 - mongodb：MongoDB到DDS迁移与同步 - cloudDataGuard-mysql：MySQL到MySQL灾备 - gaussdbv5：GaussDB同步 - postgresql：PostgreSQL到PostgreSQL同步 - mysql-to-kafka：MySQL到Kafka同步 - taurus-to-kafka：TaurusDB到Kafka同步 - gaussdbv5ha-to-kafka：GaussDB集中式版到Kafka同步 - oracle-to-gaussdbv5：Oracle-GaussDB分布式版 - oracle-to-gaussdbv5ha：Oracle-GaussDB集中式版 - gaussdbv5-to-oracle：GaussDB分布式版-Oracle - gaussdbv5ha-to-oracle：GaussDB集中式版-Oracle - gaussdbv5-to-kafka：GaussDB分布式版-Kafka  详细取值可参考引擎类型说明。  **默认取值**：  不涉及
    *
    * @return string
    */
    public function getEngineType()
    {
        return $this->container['engineType'];
    }

    /**
    * Sets engineType
    *
    * @param string $engineType **参数解释**：  DRS任务引擎类型。  **约束限制**：  不涉及。  **取值范围**：  - mysql：MySQL到MySQL迁移，MySQL到MySQL同步 - mongodb：MongoDB到DDS迁移与同步 - cloudDataGuard-mysql：MySQL到MySQL灾备 - gaussdbv5：GaussDB同步 - postgresql：PostgreSQL到PostgreSQL同步 - mysql-to-kafka：MySQL到Kafka同步 - taurus-to-kafka：TaurusDB到Kafka同步 - gaussdbv5ha-to-kafka：GaussDB集中式版到Kafka同步 - oracle-to-gaussdbv5：Oracle-GaussDB分布式版 - oracle-to-gaussdbv5ha：Oracle-GaussDB集中式版 - gaussdbv5-to-oracle：GaussDB分布式版-Oracle - gaussdbv5ha-to-oracle：GaussDB集中式版-Oracle - gaussdbv5-to-kafka：GaussDB分布式版-Kafka  详细取值可参考引擎类型说明。  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setEngineType($engineType)
    {
        $this->container['engineType'] = $engineType;
        return $this;
    }

    /**
    * Gets isTargetReadonly
    *  **参数解释**：  指定目标实例是否限制为只读。  **约束限制**：  - MySQL迁移和灾备，且job_direction为up时设置有效。 - 灾备场景下，单主灾备且本云为备为必填且为true，不填默认设置为true。  **取值范围**：  - true：目标实例限制为只读 - false：目标实例不限制为只读  **默认取值**：  不涉及
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
    * @param bool|null $isTargetReadonly **参数解释**：  指定目标实例是否限制为只读。  **约束限制**：  - MySQL迁移和灾备，且job_direction为up时设置有效。 - 灾备场景下，单主灾备且本云为备为必填且为true，不填默认设置为true。  **取值范围**：  - true：目标实例限制为只读 - false：目标实例不限制为只读  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setIsTargetReadonly($isTargetReadonly)
    {
        $this->container['isTargetReadonly'] = $isTargetReadonly;
        return $this;
    }

    /**
    * Gets jobDirection
    *  **参数解释**：  任务的迁移方向。  **约束限制**：  不涉及。  **取值范围**：  - up：入云，灾备场景时对应本云为备 - down：出云，灾备场景时对应本云为主 - non-dbs：自建  **默认取值**：  不涉及
    *
    * @return string
    */
    public function getJobDirection()
    {
        return $this->container['jobDirection'];
    }

    /**
    * Sets jobDirection
    *
    * @param string $jobDirection **参数解释**：  任务的迁移方向。  **约束限制**：  不涉及。  **取值范围**：  - up：入云，灾备场景时对应本云为备 - down：出云，灾备场景时对应本云为主 - non-dbs：自建  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setJobDirection($jobDirection)
    {
        $this->container['jobDirection'] = $jobDirection;
        return $this;
    }

    /**
    * Gets multiWrite
    *  **参数解释**：  是否为双主灾备模式。  **约束限制**：  - db_use_type为cloudDataGuard时必填。 - db_use_type为其他类型时为非必选参数。  **取值范围**：  - true：双主灾备 - false：非双主灾备  **默认取值**：  false
    *
    * @return bool|null
    */
    public function getMultiWrite()
    {
        return $this->container['multiWrite'];
    }

    /**
    * Sets multiWrite
    *
    * @param bool|null $multiWrite **参数解释**：  是否为双主灾备模式。  **约束限制**：  - db_use_type为cloudDataGuard时必填。 - db_use_type为其他类型时为非必选参数。  **取值范围**：  - true：双主灾备 - false：非双主灾备  **默认取值**：  false
    *
    * @return $this
    */
    public function setMultiWrite($multiWrite)
    {
        $this->container['multiWrite'] = $multiWrite;
        return $this;
    }

    /**
    * Gets netType
    *  **参数解释**：  任务使用的网络类型。  **约束限制**：  灾备场景不支持选择VPC网络。  **取值范围**：  - vpn：虚拟专用网络 - vpc：虚拟私有云 - eip：弹性公网IP  **默认取值**：  不涉及
    *
    * @return string
    */
    public function getNetType()
    {
        return $this->container['netType'];
    }

    /**
    * Sets netType
    *
    * @param string $netType **参数解释**：  任务使用的网络类型。  **约束限制**：  灾备场景不支持选择VPC网络。  **取值范围**：  - vpn：虚拟专用网络 - vpc：虚拟私有云 - eip：弹性公网IP  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setNetType($netType)
    {
        $this->container['netType'] = $netType;
        return $this;
    }

    /**
    * Gets nodeNum
    *  **参数解释**：  节点个数。MongoDB数据库时对应源端分片个数，源库为集群时必填。MySQL双主灾备时会默认设置为2。  **约束限制**：  不涉及。  **取值范围**：  1-32  **默认取值**：  不涉及
    *
    * @return int|null
    */
    public function getNodeNum()
    {
        return $this->container['nodeNum'];
    }

    /**
    * Sets nodeNum
    *
    * @param int|null $nodeNum **参数解释**：  节点个数。MongoDB数据库时对应源端分片个数，源库为集群时必填。MySQL双主灾备时会默认设置为2。  **约束限制**：  不涉及。  **取值范围**：  1-32  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setNodeNum($nodeNum)
    {
        $this->container['nodeNum'] = $nodeNum;
        return $this;
    }

    /**
    * Gets nodeType
    *  **参数解释**：  DRS任务实例规格编码，决定迁移实例的计算资源大小。  **约束限制**：  不涉及。  **取值范围**：  - micro：极小规格 - small：小规格 - medium：中规格 - high：大规格 - xlarge：超大规格 - 2xlarge：极大规格  具体某种场景支持的取值可以通过查询可用的Node规格接口获取。  **默认取值**：  high
    *
    * @return string
    */
    public function getNodeType()
    {
        return $this->container['nodeType'];
    }

    /**
    * Sets nodeType
    *
    * @param string $nodeType **参数解释**：  DRS任务实例规格编码，决定迁移实例的计算资源大小。  **约束限制**：  不涉及。  **取值范围**：  - micro：极小规格 - small：小规格 - medium：中规格 - high：大规格 - xlarge：超大规格 - 2xlarge：极大规格  具体某种场景支持的取值可以通过查询可用的Node规格接口获取。  **默认取值**：  high
    *
    * @return $this
    */
    public function setNodeType($nodeType)
    {
        $this->container['nodeType'] = $nodeType;
        return $this;
    }

    /**
    * Gets sourceEndpoint
    *  sourceEndpoint
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\Endpoint
    */
    public function getSourceEndpoint()
    {
        return $this->container['sourceEndpoint'];
    }

    /**
    * Sets sourceEndpoint
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\Endpoint $sourceEndpoint sourceEndpoint
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
    * @return \HuaweiCloud\SDK\Drs\V3\Model\Endpoint
    */
    public function getTargetEndpoint()
    {
        return $this->container['targetEndpoint'];
    }

    /**
    * Sets targetEndpoint
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\Endpoint $targetEndpoint targetEndpoint
    *
    * @return $this
    */
    public function setTargetEndpoint($targetEndpoint)
    {
        $this->container['targetEndpoint'] = $targetEndpoint;
        return $this;
    }

    /**
    * Gets tags
    *  **参数解释**：  标签信息列表，详情请参见ResourceTag对象定义。  **约束限制**：  最多添加20个标签。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param \HuaweiCloud\SDK\Drs\V3\Model\ResourceTag[]|null $tags **参数解释**：  标签信息列表，详情请参见ResourceTag对象定义。  **约束限制**：  最多添加20个标签。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets taskType
    *  **参数解释**：  任务迁移模式，指定数据复制任务的执行方式。  **约束限制**：  单主灾备场景仅支持选择全量加增量（FULL_INCR_TRANS）。  **取值范围**：  - FULL_TRANS：全量迁移，仅迁移历史数据 - FULL_INCR_TRANS：全量+增量迁移，先迁移历史数据再持续同步增量 - INCR_TRANS：增量迁移，仅同步数据变更  **默认取值**：  FULL_INCR_TRANS
    *
    * @return string
    */
    public function getTaskType()
    {
        return $this->container['taskType'];
    }

    /**
    * Sets taskType
    *
    * @param string $taskType **参数解释**：  任务迁移模式，指定数据复制任务的执行方式。  **约束限制**：  单主灾备场景仅支持选择全量加增量（FULL_INCR_TRANS）。  **取值范围**：  - FULL_TRANS：全量迁移，仅迁移历史数据 - FULL_INCR_TRANS：全量+增量迁移，先迁移历史数据再持续同步增量 - INCR_TRANS：增量迁移，仅同步数据变更  **默认取值**：  FULL_INCR_TRANS
    *
    * @return $this
    */
    public function setTaskType($taskType)
    {
        $this->container['taskType'] = $taskType;
        return $this;
    }

    /**
    * Gets customizeSutnetId
    *  **参数解释**：  DRS实例所在子网ID，对应目标库相同VPC下已创建的子网（subnet）的网络ID。  **约束限制**：  UUID格式。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @return string
    */
    public function getCustomizeSutnetId()
    {
        return $this->container['customizeSutnetId'];
    }

    /**
    * Sets customizeSutnetId
    *
    * @param string $customizeSutnetId **参数解释**：  DRS实例所在子网ID，对应目标库相同VPC下已创建的子网（subnet）的网络ID。  **约束限制**：  UUID格式。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setCustomizeSutnetId($customizeSutnetId)
    {
        $this->container['customizeSutnetId'] = $customizeSutnetId;
        return $this;
    }

    /**
    * Gets productId
    *  **参数解释**：  产品ID，用于标识包年包月任务对应的产品。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
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
    * @param string|null $productId **参数解释**：  产品ID，用于标识包年包月任务对应的产品。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setProductId($productId)
    {
        $this->container['productId'] = $productId;
        return $this;
    }

    /**
    * Gets sysTags
    *  **参数解释**：  企业项目标签列表，详情请参见ResourceTag对象定义。  **约束限制**：  - 不填默认为default。 - key值必须为_sys_enterprise_project_id，value为企业项目ID。 - 只能填一个企业项目。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\ResourceTag[]|null
    */
    public function getSysTags()
    {
        return $this->container['sysTags'];
    }

    /**
    * Sets sysTags
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\ResourceTag[]|null $sysTags **参数解释**：  企业项目标签列表，详情请参见ResourceTag对象定义。  **约束限制**：  - 不填默认为default。 - key值必须为_sys_enterprise_project_id，value为企业项目ID。 - 只能填一个企业项目。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setSysTags($sysTags)
    {
        $this->container['sysTags'] = $sysTags;
        return $this;
    }

    /**
    * Gets expiredDays
    *  **参数解释**：  任务处于异常状态一段时间后自动结束的天数。  **约束限制**：  不涉及。  **取值范围**：  14-100  **默认取值**：  14
    *
    * @return string|null
    */
    public function getExpiredDays()
    {
        return $this->container['expiredDays'];
    }

    /**
    * Sets expiredDays
    *
    * @param string|null $expiredDays **参数解释**：  任务处于异常状态一段时间后自动结束的天数。  **约束限制**：  不涉及。  **取值范围**：  14-100  **默认取值**：  14
    *
    * @return $this
    */
    public function setExpiredDays($expiredDays)
    {
        $this->container['expiredDays'] = $expiredDays;
        return $this;
    }

    /**
    * Gets masterAz
    *  **参数解释**：  主备任务主任务所在可用区编码，可以通过查询规格未售罄的可用区接口获取。  **约束限制**：  - master_az和slave_az同时填写时生效。 - 目前支持mysql，gaussdbv5ha-to-kafka。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @return string|null
    */
    public function getMasterAz()
    {
        return $this->container['masterAz'];
    }

    /**
    * Sets masterAz
    *
    * @param string|null $masterAz **参数解释**：  主备任务主任务所在可用区编码，可以通过查询规格未售罄的可用区接口获取。  **约束限制**：  - master_az和slave_az同时填写时生效。 - 目前支持mysql，gaussdbv5ha-to-kafka。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setMasterAz($masterAz)
    {
        $this->container['masterAz'] = $masterAz;
        return $this;
    }

    /**
    * Gets slaveAz
    *  **参数解释**：  主备任务备任务所在可用区编码，可以通过查询规格未售罄的可用区接口获取。  **约束限制**：  - master_az和slave_az同时填写时生效。 - 目前支持mysql，gaussdbv5ha-to-kafka。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @return string|null
    */
    public function getSlaveAz()
    {
        return $this->container['slaveAz'];
    }

    /**
    * Sets slaveAz
    *
    * @param string|null $slaveAz **参数解释**：  主备任务备任务所在可用区编码，可以通过查询规格未售罄的可用区接口获取。  **约束限制**：  - master_az和slave_az同时填写时生效。 - 目前支持mysql，gaussdbv5ha-to-kafka。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setSlaveAz($slaveAz)
    {
        $this->container['slaveAz'] = $slaveAz;
        return $this;
    }

    /**
    * Gets chargingMode
    *  **参数解释**：  任务的计费模式，指定数据复制任务的付费方式。  **约束限制**：  - db_use_type为migration时不支持包年包月。 - 支持的engine_type为：mysql，cloudDataGuard-mysql，postgresql，gaussdbv5ha-to-kafka。  **取值范围**：  - period：包年包月 - on_demand：按需计费  **默认取值**：  on_demand
    *
    * @return string|null
    */
    public function getChargingMode()
    {
        return $this->container['chargingMode'];
    }

    /**
    * Sets chargingMode
    *
    * @param string|null $chargingMode **参数解释**：  任务的计费模式，指定数据复制任务的付费方式。  **约束限制**：  - db_use_type为migration时不支持包年包月。 - 支持的engine_type为：mysql，cloudDataGuard-mysql，postgresql，gaussdbv5ha-to-kafka。  **取值范围**：  - period：包年包月 - on_demand：按需计费  **默认取值**：  on_demand
    *
    * @return $this
    */
    public function setChargingMode($chargingMode)
    {
        $this->container['chargingMode'] = $chargingMode;
        return $this;
    }

    /**
    * Gets periodOrder
    *  periodOrder
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\PeriodOrderInfo|null
    */
    public function getPeriodOrder()
    {
        return $this->container['periodOrder'];
    }

    /**
    * Sets periodOrder
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\PeriodOrderInfo|null $periodOrder periodOrder
    *
    * @return $this
    */
    public function setPeriodOrder($periodOrder)
    {
        $this->container['periodOrder'] = $periodOrder;
        return $this;
    }

    /**
    * Gets publicIpList
    *  **参数解释**：  指定公网IP的信息列表，详情请参见PublicIpConfig对象定义。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @return \HuaweiCloud\SDK\Drs\V3\Model\PublicIpConfig[]|null
    */
    public function getPublicIpList()
    {
        return $this->container['publicIpList'];
    }

    /**
    * Sets publicIpList
    *
    * @param \HuaweiCloud\SDK\Drs\V3\Model\PublicIpConfig[]|null $publicIpList **参数解释**：  指定公网IP的信息列表，详情请参见PublicIpConfig对象定义。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setPublicIpList($publicIpList)
    {
        $this->container['publicIpList'] = $publicIpList;
        return $this;
    }

    /**
    * Gets isOpenFastClean
    *  **参数解释**：  是否开启云数据库RDS for MySQL或MariaDB的Binlog快速清理。  **约束限制**：  不涉及。  **取值范围**：  - true：开启Binlog快速清理 - false：不开启Binlog快速清理  **默认取值**：  false
    *
    * @return bool|null
    */
    public function getIsOpenFastClean()
    {
        return $this->container['isOpenFastClean'];
    }

    /**
    * Sets isOpenFastClean
    *
    * @param bool|null $isOpenFastClean **参数解释**：  是否开启云数据库RDS for MySQL或MariaDB的Binlog快速清理。  **约束限制**：  不涉及。  **取值范围**：  - true：开启Binlog快速清理 - false：不开启Binlog快速清理  **默认取值**：  false
    *
    * @return $this
    */
    public function setIsOpenFastClean($isOpenFastClean)
    {
        $this->container['isOpenFastClean'] = $isOpenFastClean;
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

