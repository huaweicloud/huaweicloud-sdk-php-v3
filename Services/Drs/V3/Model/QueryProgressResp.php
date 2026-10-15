<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryProgressResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryProgressResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  **参数解释**：  迁移任务ID，用于唯一标识一个数据复制任务，在查询、修改、删除等操作中作为任务的识别凭证。  **约束限制**：  不涉及。  **取值范围**：  UUID格式字符串。  **默认取值**：  不涉及
    * progress  **参数解释**：  迁移百分比，表示当前任务的数据迁移完成进度。  **约束限制**：  不涉及。  **取值范围**：  0-100。  **默认取值**：  不涉及
    * increTransDelay  **参数解释**：  增量迁移时延。当任务处于增量阶段时，该值表示源库与目标库之间的数据同步延迟。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * increTransDelayMillis  **参数解释**：  增量迁移时延，与incre_trans_delay含义相同，但以毫秒为单位提供更精确的时延信息。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * taskMode  **参数解释**：  任务迁移模式，指定数据复制任务的执行方式。  **约束限制**：  单主灾备场景仅支持选择FULL_INCR_TRANS（全量+增量）。  **取值范围**：  - FULL_TRANS：全量迁移，仅迁移历史数据，迁移完成后任务结束 - INCR_TRANS：增量迁移，仅同步新增数据变更，适用于持续同步场景 - FULL_INCR_TRANS：全量+增量迁移，先迁移历史数据再持续同步增量，适用于平滑切换场景  **默认取值**：  不涉及
    * transferStatus  **参数解释**：  任务当前传输状态，表示数据迁移任务所处的运行阶段，可用于判断任务是否正常推进。  **约束限制**：  不涉及。  **取值范围**：  - CREATING：创建中 - CREATE_FAILED：创建失败 - CONFIGURATION：配置中 - WAITING_FOR_START：等待启动中 - RELEASE_RESOURCE_COMPLETE：已结束 - DELETED：已删除 - INCRE_TRANSFER_STARTED：增量迁移中 - INCRE_TRANSFER_FAILED：增量迁移失败 - FULL_TRANSFER_STARTED：全量迁移中 - FULL_TRANSFER_COMPLETE：全量迁移完成 - PAUSING：暂停中 - FULL_TRANSFER_FAILED：全量迁移失败  **默认取值**：  不涉及
    * processTime  **参数解释**：  迁移时间，格式为毫秒级Unix时间戳，表示任务最近一次进度更新时间。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * remainingTime  **参数解释**：  预计剩余完成时间，单位为秒。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * progressMap  **参数解释**：  数据、结构、索引迁移进度信息体，详情请参见ProgressInfo定义。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * errorCode  **参数解释**：  错误码，当任务报错时返回的错误代码。  **约束限制**：  不涉及。  **取值范围**：  格式为DRS.XXXXXX。  **默认取值**：  不涉及
    * errorMsg  **参数解释**：  错误详细信息，当任务执行失败时返回的具体错误描述。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * applyRowsRate  **参数解释**：  增量迁移RPS。  **约束限制**：  值为-1时代表任务尚未进入到增量状态。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * applyBytesRate  **参数解释**：  增量迁移网络流量。  **约束限制**：  值为-1时代表任务尚未进入到增量状态。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'string',
            'progress' => 'string',
            'increTransDelay' => 'string',
            'increTransDelayMillis' => 'string',
            'taskMode' => 'string',
            'transferStatus' => 'string',
            'processTime' => 'string',
            'remainingTime' => 'string',
            'progressMap' => 'map[string,\HuaweiCloud\SDK\Drs\V3\Model\ProgressInfo]',
            'errorCode' => 'string',
            'errorMsg' => 'string',
            'applyRowsRate' => 'int',
            'applyBytesRate' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  **参数解释**：  迁移任务ID，用于唯一标识一个数据复制任务，在查询、修改、删除等操作中作为任务的识别凭证。  **约束限制**：  不涉及。  **取值范围**：  UUID格式字符串。  **默认取值**：  不涉及
    * progress  **参数解释**：  迁移百分比，表示当前任务的数据迁移完成进度。  **约束限制**：  不涉及。  **取值范围**：  0-100。  **默认取值**：  不涉及
    * increTransDelay  **参数解释**：  增量迁移时延。当任务处于增量阶段时，该值表示源库与目标库之间的数据同步延迟。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * increTransDelayMillis  **参数解释**：  增量迁移时延，与incre_trans_delay含义相同，但以毫秒为单位提供更精确的时延信息。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * taskMode  **参数解释**：  任务迁移模式，指定数据复制任务的执行方式。  **约束限制**：  单主灾备场景仅支持选择FULL_INCR_TRANS（全量+增量）。  **取值范围**：  - FULL_TRANS：全量迁移，仅迁移历史数据，迁移完成后任务结束 - INCR_TRANS：增量迁移，仅同步新增数据变更，适用于持续同步场景 - FULL_INCR_TRANS：全量+增量迁移，先迁移历史数据再持续同步增量，适用于平滑切换场景  **默认取值**：  不涉及
    * transferStatus  **参数解释**：  任务当前传输状态，表示数据迁移任务所处的运行阶段，可用于判断任务是否正常推进。  **约束限制**：  不涉及。  **取值范围**：  - CREATING：创建中 - CREATE_FAILED：创建失败 - CONFIGURATION：配置中 - WAITING_FOR_START：等待启动中 - RELEASE_RESOURCE_COMPLETE：已结束 - DELETED：已删除 - INCRE_TRANSFER_STARTED：增量迁移中 - INCRE_TRANSFER_FAILED：增量迁移失败 - FULL_TRANSFER_STARTED：全量迁移中 - FULL_TRANSFER_COMPLETE：全量迁移完成 - PAUSING：暂停中 - FULL_TRANSFER_FAILED：全量迁移失败  **默认取值**：  不涉及
    * processTime  **参数解释**：  迁移时间，格式为毫秒级Unix时间戳，表示任务最近一次进度更新时间。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * remainingTime  **参数解释**：  预计剩余完成时间，单位为秒。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * progressMap  **参数解释**：  数据、结构、索引迁移进度信息体，详情请参见ProgressInfo定义。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * errorCode  **参数解释**：  错误码，当任务报错时返回的错误代码。  **约束限制**：  不涉及。  **取值范围**：  格式为DRS.XXXXXX。  **默认取值**：  不涉及
    * errorMsg  **参数解释**：  错误详细信息，当任务执行失败时返回的具体错误描述。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * applyRowsRate  **参数解释**：  增量迁移RPS。  **约束限制**：  值为-1时代表任务尚未进入到增量状态。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * applyBytesRate  **参数解释**：  增量迁移网络流量。  **约束限制**：  值为-1时代表任务尚未进入到增量状态。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => null,
        'progress' => null,
        'increTransDelay' => null,
        'increTransDelayMillis' => null,
        'taskMode' => null,
        'transferStatus' => null,
        'processTime' => null,
        'remainingTime' => null,
        'progressMap' => null,
        'errorCode' => null,
        'errorMsg' => null,
        'applyRowsRate' => 'int64',
        'applyBytesRate' => 'int64'
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
    * jobId  **参数解释**：  迁移任务ID，用于唯一标识一个数据复制任务，在查询、修改、删除等操作中作为任务的识别凭证。  **约束限制**：  不涉及。  **取值范围**：  UUID格式字符串。  **默认取值**：  不涉及
    * progress  **参数解释**：  迁移百分比，表示当前任务的数据迁移完成进度。  **约束限制**：  不涉及。  **取值范围**：  0-100。  **默认取值**：  不涉及
    * increTransDelay  **参数解释**：  增量迁移时延。当任务处于增量阶段时，该值表示源库与目标库之间的数据同步延迟。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * increTransDelayMillis  **参数解释**：  增量迁移时延，与incre_trans_delay含义相同，但以毫秒为单位提供更精确的时延信息。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * taskMode  **参数解释**：  任务迁移模式，指定数据复制任务的执行方式。  **约束限制**：  单主灾备场景仅支持选择FULL_INCR_TRANS（全量+增量）。  **取值范围**：  - FULL_TRANS：全量迁移，仅迁移历史数据，迁移完成后任务结束 - INCR_TRANS：增量迁移，仅同步新增数据变更，适用于持续同步场景 - FULL_INCR_TRANS：全量+增量迁移，先迁移历史数据再持续同步增量，适用于平滑切换场景  **默认取值**：  不涉及
    * transferStatus  **参数解释**：  任务当前传输状态，表示数据迁移任务所处的运行阶段，可用于判断任务是否正常推进。  **约束限制**：  不涉及。  **取值范围**：  - CREATING：创建中 - CREATE_FAILED：创建失败 - CONFIGURATION：配置中 - WAITING_FOR_START：等待启动中 - RELEASE_RESOURCE_COMPLETE：已结束 - DELETED：已删除 - INCRE_TRANSFER_STARTED：增量迁移中 - INCRE_TRANSFER_FAILED：增量迁移失败 - FULL_TRANSFER_STARTED：全量迁移中 - FULL_TRANSFER_COMPLETE：全量迁移完成 - PAUSING：暂停中 - FULL_TRANSFER_FAILED：全量迁移失败  **默认取值**：  不涉及
    * processTime  **参数解释**：  迁移时间，格式为毫秒级Unix时间戳，表示任务最近一次进度更新时间。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * remainingTime  **参数解释**：  预计剩余完成时间，单位为秒。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * progressMap  **参数解释**：  数据、结构、索引迁移进度信息体，详情请参见ProgressInfo定义。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * errorCode  **参数解释**：  错误码，当任务报错时返回的错误代码。  **约束限制**：  不涉及。  **取值范围**：  格式为DRS.XXXXXX。  **默认取值**：  不涉及
    * errorMsg  **参数解释**：  错误详细信息，当任务执行失败时返回的具体错误描述。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * applyRowsRate  **参数解释**：  增量迁移RPS。  **约束限制**：  值为-1时代表任务尚未进入到增量状态。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * applyBytesRate  **参数解释**：  增量迁移网络流量。  **约束限制**：  值为-1时代表任务尚未进入到增量状态。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'progress' => 'progress',
            'increTransDelay' => 'incre_trans_delay',
            'increTransDelayMillis' => 'incre_trans_delay_millis',
            'taskMode' => 'task_mode',
            'transferStatus' => 'transfer_status',
            'processTime' => 'process_time',
            'remainingTime' => 'remaining_time',
            'progressMap' => 'progress_map',
            'errorCode' => 'error_code',
            'errorMsg' => 'error_msg',
            'applyRowsRate' => 'apply_rows_rate',
            'applyBytesRate' => 'apply_bytes_rate'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  **参数解释**：  迁移任务ID，用于唯一标识一个数据复制任务，在查询、修改、删除等操作中作为任务的识别凭证。  **约束限制**：  不涉及。  **取值范围**：  UUID格式字符串。  **默认取值**：  不涉及
    * progress  **参数解释**：  迁移百分比，表示当前任务的数据迁移完成进度。  **约束限制**：  不涉及。  **取值范围**：  0-100。  **默认取值**：  不涉及
    * increTransDelay  **参数解释**：  增量迁移时延。当任务处于增量阶段时，该值表示源库与目标库之间的数据同步延迟。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * increTransDelayMillis  **参数解释**：  增量迁移时延，与incre_trans_delay含义相同，但以毫秒为单位提供更精确的时延信息。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * taskMode  **参数解释**：  任务迁移模式，指定数据复制任务的执行方式。  **约束限制**：  单主灾备场景仅支持选择FULL_INCR_TRANS（全量+增量）。  **取值范围**：  - FULL_TRANS：全量迁移，仅迁移历史数据，迁移完成后任务结束 - INCR_TRANS：增量迁移，仅同步新增数据变更，适用于持续同步场景 - FULL_INCR_TRANS：全量+增量迁移，先迁移历史数据再持续同步增量，适用于平滑切换场景  **默认取值**：  不涉及
    * transferStatus  **参数解释**：  任务当前传输状态，表示数据迁移任务所处的运行阶段，可用于判断任务是否正常推进。  **约束限制**：  不涉及。  **取值范围**：  - CREATING：创建中 - CREATE_FAILED：创建失败 - CONFIGURATION：配置中 - WAITING_FOR_START：等待启动中 - RELEASE_RESOURCE_COMPLETE：已结束 - DELETED：已删除 - INCRE_TRANSFER_STARTED：增量迁移中 - INCRE_TRANSFER_FAILED：增量迁移失败 - FULL_TRANSFER_STARTED：全量迁移中 - FULL_TRANSFER_COMPLETE：全量迁移完成 - PAUSING：暂停中 - FULL_TRANSFER_FAILED：全量迁移失败  **默认取值**：  不涉及
    * processTime  **参数解释**：  迁移时间，格式为毫秒级Unix时间戳，表示任务最近一次进度更新时间。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * remainingTime  **参数解释**：  预计剩余完成时间，单位为秒。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * progressMap  **参数解释**：  数据、结构、索引迁移进度信息体，详情请参见ProgressInfo定义。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * errorCode  **参数解释**：  错误码，当任务报错时返回的错误代码。  **约束限制**：  不涉及。  **取值范围**：  格式为DRS.XXXXXX。  **默认取值**：  不涉及
    * errorMsg  **参数解释**：  错误详细信息，当任务执行失败时返回的具体错误描述。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * applyRowsRate  **参数解释**：  增量迁移RPS。  **约束限制**：  值为-1时代表任务尚未进入到增量状态。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * applyBytesRate  **参数解释**：  增量迁移网络流量。  **约束限制**：  值为-1时代表任务尚未进入到增量状态。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'progress' => 'setProgress',
            'increTransDelay' => 'setIncreTransDelay',
            'increTransDelayMillis' => 'setIncreTransDelayMillis',
            'taskMode' => 'setTaskMode',
            'transferStatus' => 'setTransferStatus',
            'processTime' => 'setProcessTime',
            'remainingTime' => 'setRemainingTime',
            'progressMap' => 'setProgressMap',
            'errorCode' => 'setErrorCode',
            'errorMsg' => 'setErrorMsg',
            'applyRowsRate' => 'setApplyRowsRate',
            'applyBytesRate' => 'setApplyBytesRate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  **参数解释**：  迁移任务ID，用于唯一标识一个数据复制任务，在查询、修改、删除等操作中作为任务的识别凭证。  **约束限制**：  不涉及。  **取值范围**：  UUID格式字符串。  **默认取值**：  不涉及
    * progress  **参数解释**：  迁移百分比，表示当前任务的数据迁移完成进度。  **约束限制**：  不涉及。  **取值范围**：  0-100。  **默认取值**：  不涉及
    * increTransDelay  **参数解释**：  增量迁移时延。当任务处于增量阶段时，该值表示源库与目标库之间的数据同步延迟。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * increTransDelayMillis  **参数解释**：  增量迁移时延，与incre_trans_delay含义相同，但以毫秒为单位提供更精确的时延信息。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * taskMode  **参数解释**：  任务迁移模式，指定数据复制任务的执行方式。  **约束限制**：  单主灾备场景仅支持选择FULL_INCR_TRANS（全量+增量）。  **取值范围**：  - FULL_TRANS：全量迁移，仅迁移历史数据，迁移完成后任务结束 - INCR_TRANS：增量迁移，仅同步新增数据变更，适用于持续同步场景 - FULL_INCR_TRANS：全量+增量迁移，先迁移历史数据再持续同步增量，适用于平滑切换场景  **默认取值**：  不涉及
    * transferStatus  **参数解释**：  任务当前传输状态，表示数据迁移任务所处的运行阶段，可用于判断任务是否正常推进。  **约束限制**：  不涉及。  **取值范围**：  - CREATING：创建中 - CREATE_FAILED：创建失败 - CONFIGURATION：配置中 - WAITING_FOR_START：等待启动中 - RELEASE_RESOURCE_COMPLETE：已结束 - DELETED：已删除 - INCRE_TRANSFER_STARTED：增量迁移中 - INCRE_TRANSFER_FAILED：增量迁移失败 - FULL_TRANSFER_STARTED：全量迁移中 - FULL_TRANSFER_COMPLETE：全量迁移完成 - PAUSING：暂停中 - FULL_TRANSFER_FAILED：全量迁移失败  **默认取值**：  不涉及
    * processTime  **参数解释**：  迁移时间，格式为毫秒级Unix时间戳，表示任务最近一次进度更新时间。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * remainingTime  **参数解释**：  预计剩余完成时间，单位为秒。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * progressMap  **参数解释**：  数据、结构、索引迁移进度信息体，详情请参见ProgressInfo定义。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * errorCode  **参数解释**：  错误码，当任务报错时返回的错误代码。  **约束限制**：  不涉及。  **取值范围**：  格式为DRS.XXXXXX。  **默认取值**：  不涉及
    * errorMsg  **参数解释**：  错误详细信息，当任务执行失败时返回的具体错误描述。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * applyRowsRate  **参数解释**：  增量迁移RPS。  **约束限制**：  值为-1时代表任务尚未进入到增量状态。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * applyBytesRate  **参数解释**：  增量迁移网络流量。  **约束限制**：  值为-1时代表任务尚未进入到增量状态。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'progress' => 'getProgress',
            'increTransDelay' => 'getIncreTransDelay',
            'increTransDelayMillis' => 'getIncreTransDelayMillis',
            'taskMode' => 'getTaskMode',
            'transferStatus' => 'getTransferStatus',
            'processTime' => 'getProcessTime',
            'remainingTime' => 'getRemainingTime',
            'progressMap' => 'getProgressMap',
            'errorCode' => 'getErrorCode',
            'errorMsg' => 'getErrorMsg',
            'applyRowsRate' => 'getApplyRowsRate',
            'applyBytesRate' => 'getApplyBytesRate'
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
    const TASK_MODE_FULL_TRANS = 'FULL_TRANS';
    const TASK_MODE_FULL_INCR_TRANS = 'FULL_INCR_TRANS';
    const TASK_MODE_INCR_TRANS = 'INCR_TRANS';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTaskModeAllowableValues()
    {
        return [
            self::TASK_MODE_FULL_TRANS,
            self::TASK_MODE_FULL_INCR_TRANS,
            self::TASK_MODE_INCR_TRANS,
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
        $this->container['progress'] = isset($data['progress']) ? $data['progress'] : null;
        $this->container['increTransDelay'] = isset($data['increTransDelay']) ? $data['increTransDelay'] : null;
        $this->container['increTransDelayMillis'] = isset($data['increTransDelayMillis']) ? $data['increTransDelayMillis'] : null;
        $this->container['taskMode'] = isset($data['taskMode']) ? $data['taskMode'] : null;
        $this->container['transferStatus'] = isset($data['transferStatus']) ? $data['transferStatus'] : null;
        $this->container['processTime'] = isset($data['processTime']) ? $data['processTime'] : null;
        $this->container['remainingTime'] = isset($data['remainingTime']) ? $data['remainingTime'] : null;
        $this->container['progressMap'] = isset($data['progressMap']) ? $data['progressMap'] : null;
        $this->container['errorCode'] = isset($data['errorCode']) ? $data['errorCode'] : null;
        $this->container['errorMsg'] = isset($data['errorMsg']) ? $data['errorMsg'] : null;
        $this->container['applyRowsRate'] = isset($data['applyRowsRate']) ? $data['applyRowsRate'] : null;
        $this->container['applyBytesRate'] = isset($data['applyBytesRate']) ? $data['applyBytesRate'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getTaskModeAllowableValues();
                if (!is_null($this->container['taskMode']) && !in_array($this->container['taskMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'taskMode', must be one of '%s'",
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
    *  **参数解释**：  迁移任务ID，用于唯一标识一个数据复制任务，在查询、修改、删除等操作中作为任务的识别凭证。  **约束限制**：  不涉及。  **取值范围**：  UUID格式字符串。  **默认取值**：  不涉及
    *
    * @return string|null
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string|null $jobId **参数解释**：  迁移任务ID，用于唯一标识一个数据复制任务，在查询、修改、删除等操作中作为任务的识别凭证。  **约束限制**：  不涉及。  **取值范围**：  UUID格式字符串。  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets progress
    *  **参数解释**：  迁移百分比，表示当前任务的数据迁移完成进度。  **约束限制**：  不涉及。  **取值范围**：  0-100。  **默认取值**：  不涉及
    *
    * @return string|null
    */
    public function getProgress()
    {
        return $this->container['progress'];
    }

    /**
    * Sets progress
    *
    * @param string|null $progress **参数解释**：  迁移百分比，表示当前任务的数据迁移完成进度。  **约束限制**：  不涉及。  **取值范围**：  0-100。  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setProgress($progress)
    {
        $this->container['progress'] = $progress;
        return $this;
    }

    /**
    * Gets increTransDelay
    *  **参数解释**：  增量迁移时延。当任务处于增量阶段时，该值表示源库与目标库之间的数据同步延迟。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @return string|null
    */
    public function getIncreTransDelay()
    {
        return $this->container['increTransDelay'];
    }

    /**
    * Sets increTransDelay
    *
    * @param string|null $increTransDelay **参数解释**：  增量迁移时延。当任务处于增量阶段时，该值表示源库与目标库之间的数据同步延迟。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setIncreTransDelay($increTransDelay)
    {
        $this->container['increTransDelay'] = $increTransDelay;
        return $this;
    }

    /**
    * Gets increTransDelayMillis
    *  **参数解释**：  增量迁移时延，与incre_trans_delay含义相同，但以毫秒为单位提供更精确的时延信息。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @return string|null
    */
    public function getIncreTransDelayMillis()
    {
        return $this->container['increTransDelayMillis'];
    }

    /**
    * Sets increTransDelayMillis
    *
    * @param string|null $increTransDelayMillis **参数解释**：  增量迁移时延，与incre_trans_delay含义相同，但以毫秒为单位提供更精确的时延信息。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setIncreTransDelayMillis($increTransDelayMillis)
    {
        $this->container['increTransDelayMillis'] = $increTransDelayMillis;
        return $this;
    }

    /**
    * Gets taskMode
    *  **参数解释**：  任务迁移模式，指定数据复制任务的执行方式。  **约束限制**：  单主灾备场景仅支持选择FULL_INCR_TRANS（全量+增量）。  **取值范围**：  - FULL_TRANS：全量迁移，仅迁移历史数据，迁移完成后任务结束 - INCR_TRANS：增量迁移，仅同步新增数据变更，适用于持续同步场景 - FULL_INCR_TRANS：全量+增量迁移，先迁移历史数据再持续同步增量，适用于平滑切换场景  **默认取值**：  不涉及
    *
    * @return string|null
    */
    public function getTaskMode()
    {
        return $this->container['taskMode'];
    }

    /**
    * Sets taskMode
    *
    * @param string|null $taskMode **参数解释**：  任务迁移模式，指定数据复制任务的执行方式。  **约束限制**：  单主灾备场景仅支持选择FULL_INCR_TRANS（全量+增量）。  **取值范围**：  - FULL_TRANS：全量迁移，仅迁移历史数据，迁移完成后任务结束 - INCR_TRANS：增量迁移，仅同步新增数据变更，适用于持续同步场景 - FULL_INCR_TRANS：全量+增量迁移，先迁移历史数据再持续同步增量，适用于平滑切换场景  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setTaskMode($taskMode)
    {
        $this->container['taskMode'] = $taskMode;
        return $this;
    }

    /**
    * Gets transferStatus
    *  **参数解释**：  任务当前传输状态，表示数据迁移任务所处的运行阶段，可用于判断任务是否正常推进。  **约束限制**：  不涉及。  **取值范围**：  - CREATING：创建中 - CREATE_FAILED：创建失败 - CONFIGURATION：配置中 - WAITING_FOR_START：等待启动中 - RELEASE_RESOURCE_COMPLETE：已结束 - DELETED：已删除 - INCRE_TRANSFER_STARTED：增量迁移中 - INCRE_TRANSFER_FAILED：增量迁移失败 - FULL_TRANSFER_STARTED：全量迁移中 - FULL_TRANSFER_COMPLETE：全量迁移完成 - PAUSING：暂停中 - FULL_TRANSFER_FAILED：全量迁移失败  **默认取值**：  不涉及
    *
    * @return string|null
    */
    public function getTransferStatus()
    {
        return $this->container['transferStatus'];
    }

    /**
    * Sets transferStatus
    *
    * @param string|null $transferStatus **参数解释**：  任务当前传输状态，表示数据迁移任务所处的运行阶段，可用于判断任务是否正常推进。  **约束限制**：  不涉及。  **取值范围**：  - CREATING：创建中 - CREATE_FAILED：创建失败 - CONFIGURATION：配置中 - WAITING_FOR_START：等待启动中 - RELEASE_RESOURCE_COMPLETE：已结束 - DELETED：已删除 - INCRE_TRANSFER_STARTED：增量迁移中 - INCRE_TRANSFER_FAILED：增量迁移失败 - FULL_TRANSFER_STARTED：全量迁移中 - FULL_TRANSFER_COMPLETE：全量迁移完成 - PAUSING：暂停中 - FULL_TRANSFER_FAILED：全量迁移失败  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setTransferStatus($transferStatus)
    {
        $this->container['transferStatus'] = $transferStatus;
        return $this;
    }

    /**
    * Gets processTime
    *  **参数解释**：  迁移时间，格式为毫秒级Unix时间戳，表示任务最近一次进度更新时间。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @return string|null
    */
    public function getProcessTime()
    {
        return $this->container['processTime'];
    }

    /**
    * Sets processTime
    *
    * @param string|null $processTime **参数解释**：  迁移时间，格式为毫秒级Unix时间戳，表示任务最近一次进度更新时间。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setProcessTime($processTime)
    {
        $this->container['processTime'] = $processTime;
        return $this;
    }

    /**
    * Gets remainingTime
    *  **参数解释**：  预计剩余完成时间，单位为秒。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @return string|null
    */
    public function getRemainingTime()
    {
        return $this->container['remainingTime'];
    }

    /**
    * Sets remainingTime
    *
    * @param string|null $remainingTime **参数解释**：  预计剩余完成时间，单位为秒。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setRemainingTime($remainingTime)
    {
        $this->container['remainingTime'] = $remainingTime;
        return $this;
    }

    /**
    * Gets progressMap
    *  **参数解释**：  数据、结构、索引迁移进度信息体，详情请参见ProgressInfo定义。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @return map[string,\HuaweiCloud\SDK\Drs\V3\Model\ProgressInfo]|null
    */
    public function getProgressMap()
    {
        return $this->container['progressMap'];
    }

    /**
    * Sets progressMap
    *
    * @param map[string,\HuaweiCloud\SDK\Drs\V3\Model\ProgressInfo]|null $progressMap **参数解释**：  数据、结构、索引迁移进度信息体，详情请参见ProgressInfo定义。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setProgressMap($progressMap)
    {
        $this->container['progressMap'] = $progressMap;
        return $this;
    }

    /**
    * Gets errorCode
    *  **参数解释**：  错误码，当任务报错时返回的错误代码。  **约束限制**：  不涉及。  **取值范围**：  格式为DRS.XXXXXX。  **默认取值**：  不涉及
    *
    * @return string|null
    */
    public function getErrorCode()
    {
        return $this->container['errorCode'];
    }

    /**
    * Sets errorCode
    *
    * @param string|null $errorCode **参数解释**：  错误码，当任务报错时返回的错误代码。  **约束限制**：  不涉及。  **取值范围**：  格式为DRS.XXXXXX。  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setErrorCode($errorCode)
    {
        $this->container['errorCode'] = $errorCode;
        return $this;
    }

    /**
    * Gets errorMsg
    *  **参数解释**：  错误详细信息，当任务执行失败时返回的具体错误描述。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @return string|null
    */
    public function getErrorMsg()
    {
        return $this->container['errorMsg'];
    }

    /**
    * Sets errorMsg
    *
    * @param string|null $errorMsg **参数解释**：  错误详细信息，当任务执行失败时返回的具体错误描述。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setErrorMsg($errorMsg)
    {
        $this->container['errorMsg'] = $errorMsg;
        return $this;
    }

    /**
    * Gets applyRowsRate
    *  **参数解释**：  增量迁移RPS。  **约束限制**：  值为-1时代表任务尚未进入到增量状态。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @return int|null
    */
    public function getApplyRowsRate()
    {
        return $this->container['applyRowsRate'];
    }

    /**
    * Sets applyRowsRate
    *
    * @param int|null $applyRowsRate **参数解释**：  增量迁移RPS。  **约束限制**：  值为-1时代表任务尚未进入到增量状态。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setApplyRowsRate($applyRowsRate)
    {
        $this->container['applyRowsRate'] = $applyRowsRate;
        return $this;
    }

    /**
    * Gets applyBytesRate
    *  **参数解释**：  增量迁移网络流量。  **约束限制**：  值为-1时代表任务尚未进入到增量状态。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return int|null
    */
    public function getApplyBytesRate()
    {
        return $this->container['applyBytesRate'];
    }

    /**
    * Sets applyBytesRate
    *
    * @param int|null $applyBytesRate **参数解释**：  增量迁移网络流量。  **约束限制**：  值为-1时代表任务尚未进入到增量状态。  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setApplyBytesRate($applyBytesRate)
    {
        $this->container['applyBytesRate'] = $applyBytesRate;
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

