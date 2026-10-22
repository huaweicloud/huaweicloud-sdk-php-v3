<?php

namespace HuaweiCloud\SDK\Evs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SnapshotDetailV5 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SnapshotDetailV5';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释** 云硬盘快照ID。 **取值范围** 不涉及。
    * name  **参数解释** 云硬盘快照名称。 名称以autobk_snapshot_为前缀的快照是创建云硬盘备份时系统自动创建的，请不要进行“删除云硬盘快照”和“回滚快照到云硬盘”操作。 **取值范围** 不涉及。
    * description  **参数解释** 云硬盘快照描述信息。 **取值范围** 不涉及。
    * createdAt  **参数解释** 云硬盘快照创建时间。 时间格式：UTC YYYY-MM-DDTHH:MM:SS.XXXXXX **取值范围** 不涉及。
    * updatedAt  **参数解释** 云硬盘快照更新时间。 **取值范围** 不涉及。
    * volumeId  **参数解释** 快照所属的云硬盘ID。 **取值范围** 不涉及。
    * size  **参数解释** 云硬盘快照大小，单位为GiB。 **取值范围** 不涉及。
    * status  **参数解释** 云硬盘快照的状态。 **取值范围** 具体请参见[云硬盘快照状态](evs_04_0041.xml)。
    * projectId  **参数解释** 项目ID。 **取值范围** 不涉及。
    * enterpriseProjectId  **参数解释** 快照所属的企业项目ID。 **取值范围** 不涉及。
    * encrypted  **参数解释** 是否为加密快照。 **取值范围** 不涉及。
    * cmkId  **参数解释** 快照所属的云硬盘ID的密钥ID。 **取值范围** 不涉及。
    * category  **参数解释** 快照类型。 **取值范围** 枚举值：standard/flash。
    * availabilityZone  **参数解释** 快照所属AZ。 **取值范围** 不涉及。
    * tags  **参数解释** 快照所属标签。 标签的key：String类型，最大长度36个字符。 由英文字母、数字、下划线、中划线、UNICODE字符（\\u4E00-\\u9FFF）组成。  标签的value：String类型，最大长度43个字符，可以为空字符串。 由英文字母、数字、下划线、点、中划线、UNICODE字符（\\u4E00-\\u9FFF）组成。 **取值范围** 不涉及。
    * instantAccess  **参数解释** 是否开启了快照极速可用功能。 **取值范围** true：开启。仅SSD系列云盘支持开启该功能。 false：关闭。即快照为未开启快照极速可用功能的存量快照。
    * retentionAt  **参数解释** 快照保留的时间。 **取值范围** 不涉及。
    * instantAccessRetentionAt  **参数解释** 设置快照极速可用功能的保留时间，保留时间到期后自动关闭快照极速可用功能。 **取值范围** 默认与参数retention_at的值一致。
    * incremental  **参数解释** 是否增量快照。 **取值范围** true，false。
    * snapshotType  **参数解释** 快照创建来源。 **取值范围** auto：自动创建快照。 user：手动创建快照。 copy：复制快照。
    * progress  **参数解释** 快照创建进度，单位为百分比。 **取值范围** 不涉及。
    * encryptAlgorithm  **参数解释** 加密快照的加密算法。 **取值范围** 不涉及。
    * snapshotChains  **参数解释** 快照所属的快照链信息。 **取值范围** 不涉及。
    * snapshotGroupId  **参数解释** 快照所属的一致性快照组id。 **取值范围** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'description' => 'string',
            'createdAt' => 'string',
            'updatedAt' => 'string',
            'volumeId' => 'string',
            'size' => 'int',
            'status' => 'string',
            'projectId' => 'string',
            'enterpriseProjectId' => 'string',
            'encrypted' => 'bool',
            'cmkId' => 'string',
            'category' => 'string',
            'availabilityZone' => 'string',
            'tags' => 'map[string,string]',
            'instantAccess' => 'bool',
            'retentionAt' => 'string',
            'instantAccessRetentionAt' => 'string',
            'incremental' => 'bool',
            'snapshotType' => 'string',
            'progress' => 'string',
            'encryptAlgorithm' => 'string',
            'snapshotChains' => '\HuaweiCloud\SDK\Evs\V2\Model\SnapshotChains[]',
            'snapshotGroupId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释** 云硬盘快照ID。 **取值范围** 不涉及。
    * name  **参数解释** 云硬盘快照名称。 名称以autobk_snapshot_为前缀的快照是创建云硬盘备份时系统自动创建的，请不要进行“删除云硬盘快照”和“回滚快照到云硬盘”操作。 **取值范围** 不涉及。
    * description  **参数解释** 云硬盘快照描述信息。 **取值范围** 不涉及。
    * createdAt  **参数解释** 云硬盘快照创建时间。 时间格式：UTC YYYY-MM-DDTHH:MM:SS.XXXXXX **取值范围** 不涉及。
    * updatedAt  **参数解释** 云硬盘快照更新时间。 **取值范围** 不涉及。
    * volumeId  **参数解释** 快照所属的云硬盘ID。 **取值范围** 不涉及。
    * size  **参数解释** 云硬盘快照大小，单位为GiB。 **取值范围** 不涉及。
    * status  **参数解释** 云硬盘快照的状态。 **取值范围** 具体请参见[云硬盘快照状态](evs_04_0041.xml)。
    * projectId  **参数解释** 项目ID。 **取值范围** 不涉及。
    * enterpriseProjectId  **参数解释** 快照所属的企业项目ID。 **取值范围** 不涉及。
    * encrypted  **参数解释** 是否为加密快照。 **取值范围** 不涉及。
    * cmkId  **参数解释** 快照所属的云硬盘ID的密钥ID。 **取值范围** 不涉及。
    * category  **参数解释** 快照类型。 **取值范围** 枚举值：standard/flash。
    * availabilityZone  **参数解释** 快照所属AZ。 **取值范围** 不涉及。
    * tags  **参数解释** 快照所属标签。 标签的key：String类型，最大长度36个字符。 由英文字母、数字、下划线、中划线、UNICODE字符（\\u4E00-\\u9FFF）组成。  标签的value：String类型，最大长度43个字符，可以为空字符串。 由英文字母、数字、下划线、点、中划线、UNICODE字符（\\u4E00-\\u9FFF）组成。 **取值范围** 不涉及。
    * instantAccess  **参数解释** 是否开启了快照极速可用功能。 **取值范围** true：开启。仅SSD系列云盘支持开启该功能。 false：关闭。即快照为未开启快照极速可用功能的存量快照。
    * retentionAt  **参数解释** 快照保留的时间。 **取值范围** 不涉及。
    * instantAccessRetentionAt  **参数解释** 设置快照极速可用功能的保留时间，保留时间到期后自动关闭快照极速可用功能。 **取值范围** 默认与参数retention_at的值一致。
    * incremental  **参数解释** 是否增量快照。 **取值范围** true，false。
    * snapshotType  **参数解释** 快照创建来源。 **取值范围** auto：自动创建快照。 user：手动创建快照。 copy：复制快照。
    * progress  **参数解释** 快照创建进度，单位为百分比。 **取值范围** 不涉及。
    * encryptAlgorithm  **参数解释** 加密快照的加密算法。 **取值范围** 不涉及。
    * snapshotChains  **参数解释** 快照所属的快照链信息。 **取值范围** 不涉及。
    * snapshotGroupId  **参数解释** 快照所属的一致性快照组id。 **取值范围** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'createdAt' => null,
        'updatedAt' => null,
        'volumeId' => null,
        'size' => 'int32',
        'status' => null,
        'projectId' => null,
        'enterpriseProjectId' => null,
        'encrypted' => null,
        'cmkId' => null,
        'category' => null,
        'availabilityZone' => null,
        'tags' => null,
        'instantAccess' => null,
        'retentionAt' => null,
        'instantAccessRetentionAt' => null,
        'incremental' => null,
        'snapshotType' => null,
        'progress' => null,
        'encryptAlgorithm' => null,
        'snapshotChains' => null,
        'snapshotGroupId' => null
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
    * id  **参数解释** 云硬盘快照ID。 **取值范围** 不涉及。
    * name  **参数解释** 云硬盘快照名称。 名称以autobk_snapshot_为前缀的快照是创建云硬盘备份时系统自动创建的，请不要进行“删除云硬盘快照”和“回滚快照到云硬盘”操作。 **取值范围** 不涉及。
    * description  **参数解释** 云硬盘快照描述信息。 **取值范围** 不涉及。
    * createdAt  **参数解释** 云硬盘快照创建时间。 时间格式：UTC YYYY-MM-DDTHH:MM:SS.XXXXXX **取值范围** 不涉及。
    * updatedAt  **参数解释** 云硬盘快照更新时间。 **取值范围** 不涉及。
    * volumeId  **参数解释** 快照所属的云硬盘ID。 **取值范围** 不涉及。
    * size  **参数解释** 云硬盘快照大小，单位为GiB。 **取值范围** 不涉及。
    * status  **参数解释** 云硬盘快照的状态。 **取值范围** 具体请参见[云硬盘快照状态](evs_04_0041.xml)。
    * projectId  **参数解释** 项目ID。 **取值范围** 不涉及。
    * enterpriseProjectId  **参数解释** 快照所属的企业项目ID。 **取值范围** 不涉及。
    * encrypted  **参数解释** 是否为加密快照。 **取值范围** 不涉及。
    * cmkId  **参数解释** 快照所属的云硬盘ID的密钥ID。 **取值范围** 不涉及。
    * category  **参数解释** 快照类型。 **取值范围** 枚举值：standard/flash。
    * availabilityZone  **参数解释** 快照所属AZ。 **取值范围** 不涉及。
    * tags  **参数解释** 快照所属标签。 标签的key：String类型，最大长度36个字符。 由英文字母、数字、下划线、中划线、UNICODE字符（\\u4E00-\\u9FFF）组成。  标签的value：String类型，最大长度43个字符，可以为空字符串。 由英文字母、数字、下划线、点、中划线、UNICODE字符（\\u4E00-\\u9FFF）组成。 **取值范围** 不涉及。
    * instantAccess  **参数解释** 是否开启了快照极速可用功能。 **取值范围** true：开启。仅SSD系列云盘支持开启该功能。 false：关闭。即快照为未开启快照极速可用功能的存量快照。
    * retentionAt  **参数解释** 快照保留的时间。 **取值范围** 不涉及。
    * instantAccessRetentionAt  **参数解释** 设置快照极速可用功能的保留时间，保留时间到期后自动关闭快照极速可用功能。 **取值范围** 默认与参数retention_at的值一致。
    * incremental  **参数解释** 是否增量快照。 **取值范围** true，false。
    * snapshotType  **参数解释** 快照创建来源。 **取值范围** auto：自动创建快照。 user：手动创建快照。 copy：复制快照。
    * progress  **参数解释** 快照创建进度，单位为百分比。 **取值范围** 不涉及。
    * encryptAlgorithm  **参数解释** 加密快照的加密算法。 **取值范围** 不涉及。
    * snapshotChains  **参数解释** 快照所属的快照链信息。 **取值范围** 不涉及。
    * snapshotGroupId  **参数解释** 快照所属的一致性快照组id。 **取值范围** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'volumeId' => 'volume_id',
            'size' => 'size',
            'status' => 'status',
            'projectId' => 'project_id',
            'enterpriseProjectId' => 'enterprise_project_id',
            'encrypted' => 'encrypted',
            'cmkId' => 'cmk_id',
            'category' => 'category',
            'availabilityZone' => 'availability_zone',
            'tags' => 'tags',
            'instantAccess' => 'instant_access',
            'retentionAt' => 'retention_at',
            'instantAccessRetentionAt' => 'instant_access_retention_at',
            'incremental' => 'incremental',
            'snapshotType' => 'snapshot_type',
            'progress' => 'progress',
            'encryptAlgorithm' => 'encrypt_algorithm',
            'snapshotChains' => 'snapshot_chains',
            'snapshotGroupId' => 'snapshot_group_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释** 云硬盘快照ID。 **取值范围** 不涉及。
    * name  **参数解释** 云硬盘快照名称。 名称以autobk_snapshot_为前缀的快照是创建云硬盘备份时系统自动创建的，请不要进行“删除云硬盘快照”和“回滚快照到云硬盘”操作。 **取值范围** 不涉及。
    * description  **参数解释** 云硬盘快照描述信息。 **取值范围** 不涉及。
    * createdAt  **参数解释** 云硬盘快照创建时间。 时间格式：UTC YYYY-MM-DDTHH:MM:SS.XXXXXX **取值范围** 不涉及。
    * updatedAt  **参数解释** 云硬盘快照更新时间。 **取值范围** 不涉及。
    * volumeId  **参数解释** 快照所属的云硬盘ID。 **取值范围** 不涉及。
    * size  **参数解释** 云硬盘快照大小，单位为GiB。 **取值范围** 不涉及。
    * status  **参数解释** 云硬盘快照的状态。 **取值范围** 具体请参见[云硬盘快照状态](evs_04_0041.xml)。
    * projectId  **参数解释** 项目ID。 **取值范围** 不涉及。
    * enterpriseProjectId  **参数解释** 快照所属的企业项目ID。 **取值范围** 不涉及。
    * encrypted  **参数解释** 是否为加密快照。 **取值范围** 不涉及。
    * cmkId  **参数解释** 快照所属的云硬盘ID的密钥ID。 **取值范围** 不涉及。
    * category  **参数解释** 快照类型。 **取值范围** 枚举值：standard/flash。
    * availabilityZone  **参数解释** 快照所属AZ。 **取值范围** 不涉及。
    * tags  **参数解释** 快照所属标签。 标签的key：String类型，最大长度36个字符。 由英文字母、数字、下划线、中划线、UNICODE字符（\\u4E00-\\u9FFF）组成。  标签的value：String类型，最大长度43个字符，可以为空字符串。 由英文字母、数字、下划线、点、中划线、UNICODE字符（\\u4E00-\\u9FFF）组成。 **取值范围** 不涉及。
    * instantAccess  **参数解释** 是否开启了快照极速可用功能。 **取值范围** true：开启。仅SSD系列云盘支持开启该功能。 false：关闭。即快照为未开启快照极速可用功能的存量快照。
    * retentionAt  **参数解释** 快照保留的时间。 **取值范围** 不涉及。
    * instantAccessRetentionAt  **参数解释** 设置快照极速可用功能的保留时间，保留时间到期后自动关闭快照极速可用功能。 **取值范围** 默认与参数retention_at的值一致。
    * incremental  **参数解释** 是否增量快照。 **取值范围** true，false。
    * snapshotType  **参数解释** 快照创建来源。 **取值范围** auto：自动创建快照。 user：手动创建快照。 copy：复制快照。
    * progress  **参数解释** 快照创建进度，单位为百分比。 **取值范围** 不涉及。
    * encryptAlgorithm  **参数解释** 加密快照的加密算法。 **取值范围** 不涉及。
    * snapshotChains  **参数解释** 快照所属的快照链信息。 **取值范围** 不涉及。
    * snapshotGroupId  **参数解释** 快照所属的一致性快照组id。 **取值范围** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'volumeId' => 'setVolumeId',
            'size' => 'setSize',
            'status' => 'setStatus',
            'projectId' => 'setProjectId',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'encrypted' => 'setEncrypted',
            'cmkId' => 'setCmkId',
            'category' => 'setCategory',
            'availabilityZone' => 'setAvailabilityZone',
            'tags' => 'setTags',
            'instantAccess' => 'setInstantAccess',
            'retentionAt' => 'setRetentionAt',
            'instantAccessRetentionAt' => 'setInstantAccessRetentionAt',
            'incremental' => 'setIncremental',
            'snapshotType' => 'setSnapshotType',
            'progress' => 'setProgress',
            'encryptAlgorithm' => 'setEncryptAlgorithm',
            'snapshotChains' => 'setSnapshotChains',
            'snapshotGroupId' => 'setSnapshotGroupId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释** 云硬盘快照ID。 **取值范围** 不涉及。
    * name  **参数解释** 云硬盘快照名称。 名称以autobk_snapshot_为前缀的快照是创建云硬盘备份时系统自动创建的，请不要进行“删除云硬盘快照”和“回滚快照到云硬盘”操作。 **取值范围** 不涉及。
    * description  **参数解释** 云硬盘快照描述信息。 **取值范围** 不涉及。
    * createdAt  **参数解释** 云硬盘快照创建时间。 时间格式：UTC YYYY-MM-DDTHH:MM:SS.XXXXXX **取值范围** 不涉及。
    * updatedAt  **参数解释** 云硬盘快照更新时间。 **取值范围** 不涉及。
    * volumeId  **参数解释** 快照所属的云硬盘ID。 **取值范围** 不涉及。
    * size  **参数解释** 云硬盘快照大小，单位为GiB。 **取值范围** 不涉及。
    * status  **参数解释** 云硬盘快照的状态。 **取值范围** 具体请参见[云硬盘快照状态](evs_04_0041.xml)。
    * projectId  **参数解释** 项目ID。 **取值范围** 不涉及。
    * enterpriseProjectId  **参数解释** 快照所属的企业项目ID。 **取值范围** 不涉及。
    * encrypted  **参数解释** 是否为加密快照。 **取值范围** 不涉及。
    * cmkId  **参数解释** 快照所属的云硬盘ID的密钥ID。 **取值范围** 不涉及。
    * category  **参数解释** 快照类型。 **取值范围** 枚举值：standard/flash。
    * availabilityZone  **参数解释** 快照所属AZ。 **取值范围** 不涉及。
    * tags  **参数解释** 快照所属标签。 标签的key：String类型，最大长度36个字符。 由英文字母、数字、下划线、中划线、UNICODE字符（\\u4E00-\\u9FFF）组成。  标签的value：String类型，最大长度43个字符，可以为空字符串。 由英文字母、数字、下划线、点、中划线、UNICODE字符（\\u4E00-\\u9FFF）组成。 **取值范围** 不涉及。
    * instantAccess  **参数解释** 是否开启了快照极速可用功能。 **取值范围** true：开启。仅SSD系列云盘支持开启该功能。 false：关闭。即快照为未开启快照极速可用功能的存量快照。
    * retentionAt  **参数解释** 快照保留的时间。 **取值范围** 不涉及。
    * instantAccessRetentionAt  **参数解释** 设置快照极速可用功能的保留时间，保留时间到期后自动关闭快照极速可用功能。 **取值范围** 默认与参数retention_at的值一致。
    * incremental  **参数解释** 是否增量快照。 **取值范围** true，false。
    * snapshotType  **参数解释** 快照创建来源。 **取值范围** auto：自动创建快照。 user：手动创建快照。 copy：复制快照。
    * progress  **参数解释** 快照创建进度，单位为百分比。 **取值范围** 不涉及。
    * encryptAlgorithm  **参数解释** 加密快照的加密算法。 **取值范围** 不涉及。
    * snapshotChains  **参数解释** 快照所属的快照链信息。 **取值范围** 不涉及。
    * snapshotGroupId  **参数解释** 快照所属的一致性快照组id。 **取值范围** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'volumeId' => 'getVolumeId',
            'size' => 'getSize',
            'status' => 'getStatus',
            'projectId' => 'getProjectId',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'encrypted' => 'getEncrypted',
            'cmkId' => 'getCmkId',
            'category' => 'getCategory',
            'availabilityZone' => 'getAvailabilityZone',
            'tags' => 'getTags',
            'instantAccess' => 'getInstantAccess',
            'retentionAt' => 'getRetentionAt',
            'instantAccessRetentionAt' => 'getInstantAccessRetentionAt',
            'incremental' => 'getIncremental',
            'snapshotType' => 'getSnapshotType',
            'progress' => 'getProgress',
            'encryptAlgorithm' => 'getEncryptAlgorithm',
            'snapshotChains' => 'getSnapshotChains',
            'snapshotGroupId' => 'getSnapshotGroupId'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['volumeId'] = isset($data['volumeId']) ? $data['volumeId'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['encrypted'] = isset($data['encrypted']) ? $data['encrypted'] : null;
        $this->container['cmkId'] = isset($data['cmkId']) ? $data['cmkId'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['instantAccess'] = isset($data['instantAccess']) ? $data['instantAccess'] : null;
        $this->container['retentionAt'] = isset($data['retentionAt']) ? $data['retentionAt'] : null;
        $this->container['instantAccessRetentionAt'] = isset($data['instantAccessRetentionAt']) ? $data['instantAccessRetentionAt'] : null;
        $this->container['incremental'] = isset($data['incremental']) ? $data['incremental'] : null;
        $this->container['snapshotType'] = isset($data['snapshotType']) ? $data['snapshotType'] : null;
        $this->container['progress'] = isset($data['progress']) ? $data['progress'] : null;
        $this->container['encryptAlgorithm'] = isset($data['encryptAlgorithm']) ? $data['encryptAlgorithm'] : null;
        $this->container['snapshotChains'] = isset($data['snapshotChains']) ? $data['snapshotChains'] : null;
        $this->container['snapshotGroupId'] = isset($data['snapshotGroupId']) ? $data['snapshotGroupId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
        }
        if ($this->container['volumeId'] === null) {
            $invalidProperties[] = "'volumeId' can't be null";
        }
        if ($this->container['size'] === null) {
            $invalidProperties[] = "'size' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
        if ($this->container['enterpriseProjectId'] === null) {
            $invalidProperties[] = "'enterpriseProjectId' can't be null";
        }
        if ($this->container['encrypted'] === null) {
            $invalidProperties[] = "'encrypted' can't be null";
        }
        if ($this->container['cmkId'] === null) {
            $invalidProperties[] = "'cmkId' can't be null";
        }
        if ($this->container['category'] === null) {
            $invalidProperties[] = "'category' can't be null";
        }
        if ($this->container['availabilityZone'] === null) {
            $invalidProperties[] = "'availabilityZone' can't be null";
        }
        if ($this->container['tags'] === null) {
            $invalidProperties[] = "'tags' can't be null";
        }
        if ($this->container['instantAccess'] === null) {
            $invalidProperties[] = "'instantAccess' can't be null";
        }
        if ($this->container['retentionAt'] === null) {
            $invalidProperties[] = "'retentionAt' can't be null";
        }
        if ($this->container['instantAccessRetentionAt'] === null) {
            $invalidProperties[] = "'instantAccessRetentionAt' can't be null";
        }
        if ($this->container['incremental'] === null) {
            $invalidProperties[] = "'incremental' can't be null";
        }
        if ($this->container['snapshotType'] === null) {
            $invalidProperties[] = "'snapshotType' can't be null";
        }
        if ($this->container['progress'] === null) {
            $invalidProperties[] = "'progress' can't be null";
        }
        if ($this->container['encryptAlgorithm'] === null) {
            $invalidProperties[] = "'encryptAlgorithm' can't be null";
        }
        if ($this->container['snapshotChains'] === null) {
            $invalidProperties[] = "'snapshotChains' can't be null";
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
    * Gets id
    *  **参数解释** 云硬盘快照ID。 **取值范围** 不涉及。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id **参数解释** 云硬盘快照ID。 **取值范围** 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释** 云硬盘快照名称。 名称以autobk_snapshot_为前缀的快照是创建云硬盘备份时系统自动创建的，请不要进行“删除云硬盘快照”和“回滚快照到云硬盘”操作。 **取值范围** 不涉及。
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
    * @param string $name **参数解释** 云硬盘快照名称。 名称以autobk_snapshot_为前缀的快照是创建云硬盘备份时系统自动创建的，请不要进行“删除云硬盘快照”和“回滚快照到云硬盘”操作。 **取值范围** 不涉及。
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
    *  **参数解释** 云硬盘快照描述信息。 **取值范围** 不涉及。
    *
    * @return string
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string $description **参数解释** 云硬盘快照描述信息。 **取值范围** 不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets createdAt
    *  **参数解释** 云硬盘快照创建时间。 时间格式：UTC YYYY-MM-DDTHH:MM:SS.XXXXXX **取值范围** 不涉及。
    *
    * @return string
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string $createdAt **参数解释** 云硬盘快照创建时间。 时间格式：UTC YYYY-MM-DDTHH:MM:SS.XXXXXX **取值范围** 不涉及。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  **参数解释** 云硬盘快照更新时间。 **取值范围** 不涉及。
    *
    * @return string
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string $updatedAt **参数解释** 云硬盘快照更新时间。 **取值范围** 不涉及。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets volumeId
    *  **参数解释** 快照所属的云硬盘ID。 **取值范围** 不涉及。
    *
    * @return string
    */
    public function getVolumeId()
    {
        return $this->container['volumeId'];
    }

    /**
    * Sets volumeId
    *
    * @param string $volumeId **参数解释** 快照所属的云硬盘ID。 **取值范围** 不涉及。
    *
    * @return $this
    */
    public function setVolumeId($volumeId)
    {
        $this->container['volumeId'] = $volumeId;
        return $this;
    }

    /**
    * Gets size
    *  **参数解释** 云硬盘快照大小，单位为GiB。 **取值范围** 不涉及。
    *
    * @return int
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int $size **参数解释** 云硬盘快照大小，单位为GiB。 **取值范围** 不涉及。
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释** 云硬盘快照的状态。 **取值范围** 具体请参见[云硬盘快照状态](evs_04_0041.xml)。
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
    * @param string $status **参数解释** 云硬盘快照的状态。 **取值范围** 具体请参见[云硬盘快照状态](evs_04_0041.xml)。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets projectId
    *  **参数解释** 项目ID。 **取值范围** 不涉及。
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId **参数解释** 项目ID。 **取值范围** 不涉及。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  **参数解释** 快照所属的企业项目ID。 **取值范围** 不涉及。
    *
    * @return string
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string $enterpriseProjectId **参数解释** 快照所属的企业项目ID。 **取值范围** 不涉及。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets encrypted
    *  **参数解释** 是否为加密快照。 **取值范围** 不涉及。
    *
    * @return bool
    */
    public function getEncrypted()
    {
        return $this->container['encrypted'];
    }

    /**
    * Sets encrypted
    *
    * @param bool $encrypted **参数解释** 是否为加密快照。 **取值范围** 不涉及。
    *
    * @return $this
    */
    public function setEncrypted($encrypted)
    {
        $this->container['encrypted'] = $encrypted;
        return $this;
    }

    /**
    * Gets cmkId
    *  **参数解释** 快照所属的云硬盘ID的密钥ID。 **取值范围** 不涉及。
    *
    * @return string
    */
    public function getCmkId()
    {
        return $this->container['cmkId'];
    }

    /**
    * Sets cmkId
    *
    * @param string $cmkId **参数解释** 快照所属的云硬盘ID的密钥ID。 **取值范围** 不涉及。
    *
    * @return $this
    */
    public function setCmkId($cmkId)
    {
        $this->container['cmkId'] = $cmkId;
        return $this;
    }

    /**
    * Gets category
    *  **参数解释** 快照类型。 **取值范围** 枚举值：standard/flash。
    *
    * @return string
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string $category **参数解释** 快照类型。 **取值范围** 枚举值：standard/flash。
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets availabilityZone
    *  **参数解释** 快照所属AZ。 **取值范围** 不涉及。
    *
    * @return string
    */
    public function getAvailabilityZone()
    {
        return $this->container['availabilityZone'];
    }

    /**
    * Sets availabilityZone
    *
    * @param string $availabilityZone **参数解释** 快照所属AZ。 **取值范围** 不涉及。
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
        return $this;
    }

    /**
    * Gets tags
    *  **参数解释** 快照所属标签。 标签的key：String类型，最大长度36个字符。 由英文字母、数字、下划线、中划线、UNICODE字符（\\u4E00-\\u9FFF）组成。  标签的value：String类型，最大长度43个字符，可以为空字符串。 由英文字母、数字、下划线、点、中划线、UNICODE字符（\\u4E00-\\u9FFF）组成。 **取值范围** 不涉及。
    *
    * @return map[string,string]
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param map[string,string] $tags **参数解释** 快照所属标签。 标签的key：String类型，最大长度36个字符。 由英文字母、数字、下划线、中划线、UNICODE字符（\\u4E00-\\u9FFF）组成。  标签的value：String类型，最大长度43个字符，可以为空字符串。 由英文字母、数字、下划线、点、中划线、UNICODE字符（\\u4E00-\\u9FFF）组成。 **取值范围** 不涉及。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets instantAccess
    *  **参数解释** 是否开启了快照极速可用功能。 **取值范围** true：开启。仅SSD系列云盘支持开启该功能。 false：关闭。即快照为未开启快照极速可用功能的存量快照。
    *
    * @return bool
    */
    public function getInstantAccess()
    {
        return $this->container['instantAccess'];
    }

    /**
    * Sets instantAccess
    *
    * @param bool $instantAccess **参数解释** 是否开启了快照极速可用功能。 **取值范围** true：开启。仅SSD系列云盘支持开启该功能。 false：关闭。即快照为未开启快照极速可用功能的存量快照。
    *
    * @return $this
    */
    public function setInstantAccess($instantAccess)
    {
        $this->container['instantAccess'] = $instantAccess;
        return $this;
    }

    /**
    * Gets retentionAt
    *  **参数解释** 快照保留的时间。 **取值范围** 不涉及。
    *
    * @return string
    */
    public function getRetentionAt()
    {
        return $this->container['retentionAt'];
    }

    /**
    * Sets retentionAt
    *
    * @param string $retentionAt **参数解释** 快照保留的时间。 **取值范围** 不涉及。
    *
    * @return $this
    */
    public function setRetentionAt($retentionAt)
    {
        $this->container['retentionAt'] = $retentionAt;
        return $this;
    }

    /**
    * Gets instantAccessRetentionAt
    *  **参数解释** 设置快照极速可用功能的保留时间，保留时间到期后自动关闭快照极速可用功能。 **取值范围** 默认与参数retention_at的值一致。
    *
    * @return string
    */
    public function getInstantAccessRetentionAt()
    {
        return $this->container['instantAccessRetentionAt'];
    }

    /**
    * Sets instantAccessRetentionAt
    *
    * @param string $instantAccessRetentionAt **参数解释** 设置快照极速可用功能的保留时间，保留时间到期后自动关闭快照极速可用功能。 **取值范围** 默认与参数retention_at的值一致。
    *
    * @return $this
    */
    public function setInstantAccessRetentionAt($instantAccessRetentionAt)
    {
        $this->container['instantAccessRetentionAt'] = $instantAccessRetentionAt;
        return $this;
    }

    /**
    * Gets incremental
    *  **参数解释** 是否增量快照。 **取值范围** true，false。
    *
    * @return bool
    */
    public function getIncremental()
    {
        return $this->container['incremental'];
    }

    /**
    * Sets incremental
    *
    * @param bool $incremental **参数解释** 是否增量快照。 **取值范围** true，false。
    *
    * @return $this
    */
    public function setIncremental($incremental)
    {
        $this->container['incremental'] = $incremental;
        return $this;
    }

    /**
    * Gets snapshotType
    *  **参数解释** 快照创建来源。 **取值范围** auto：自动创建快照。 user：手动创建快照。 copy：复制快照。
    *
    * @return string
    */
    public function getSnapshotType()
    {
        return $this->container['snapshotType'];
    }

    /**
    * Sets snapshotType
    *
    * @param string $snapshotType **参数解释** 快照创建来源。 **取值范围** auto：自动创建快照。 user：手动创建快照。 copy：复制快照。
    *
    * @return $this
    */
    public function setSnapshotType($snapshotType)
    {
        $this->container['snapshotType'] = $snapshotType;
        return $this;
    }

    /**
    * Gets progress
    *  **参数解释** 快照创建进度，单位为百分比。 **取值范围** 不涉及。
    *
    * @return string
    */
    public function getProgress()
    {
        return $this->container['progress'];
    }

    /**
    * Sets progress
    *
    * @param string $progress **参数解释** 快照创建进度，单位为百分比。 **取值范围** 不涉及。
    *
    * @return $this
    */
    public function setProgress($progress)
    {
        $this->container['progress'] = $progress;
        return $this;
    }

    /**
    * Gets encryptAlgorithm
    *  **参数解释** 加密快照的加密算法。 **取值范围** 不涉及。
    *
    * @return string
    */
    public function getEncryptAlgorithm()
    {
        return $this->container['encryptAlgorithm'];
    }

    /**
    * Sets encryptAlgorithm
    *
    * @param string $encryptAlgorithm **参数解释** 加密快照的加密算法。 **取值范围** 不涉及。
    *
    * @return $this
    */
    public function setEncryptAlgorithm($encryptAlgorithm)
    {
        $this->container['encryptAlgorithm'] = $encryptAlgorithm;
        return $this;
    }

    /**
    * Gets snapshotChains
    *  **参数解释** 快照所属的快照链信息。 **取值范围** 不涉及。
    *
    * @return \HuaweiCloud\SDK\Evs\V2\Model\SnapshotChains[]
    */
    public function getSnapshotChains()
    {
        return $this->container['snapshotChains'];
    }

    /**
    * Sets snapshotChains
    *
    * @param \HuaweiCloud\SDK\Evs\V2\Model\SnapshotChains[] $snapshotChains **参数解释** 快照所属的快照链信息。 **取值范围** 不涉及。
    *
    * @return $this
    */
    public function setSnapshotChains($snapshotChains)
    {
        $this->container['snapshotChains'] = $snapshotChains;
        return $this;
    }

    /**
    * Gets snapshotGroupId
    *  **参数解释** 快照所属的一致性快照组id。 **取值范围** 不涉及。
    *
    * @return string|null
    */
    public function getSnapshotGroupId()
    {
        return $this->container['snapshotGroupId'];
    }

    /**
    * Sets snapshotGroupId
    *
    * @param string|null $snapshotGroupId **参数解释** 快照所属的一致性快照组id。 **取值范围** 不涉及。
    *
    * @return $this
    */
    public function setSnapshotGroupId($snapshotGroupId)
    {
        $this->container['snapshotGroupId'] = $snapshotGroupId;
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

