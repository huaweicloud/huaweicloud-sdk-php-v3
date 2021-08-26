<?php

namespace HuaweiCloud\SDK\Evs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VolumeDetailForTag implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VolumeDetailForTag';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  云硬盘的ID。
    * links  云硬盘URI自描述信息。请参见 [links参数说明](https://support.huaweicloud.com/api-evs/evs_04_2006.html#evs_04_2006__evs_04_2010_li1077125119136)。
    * name  云硬盘名称。
    * status  云硬盘状态，请参见[云硬盘状态](https://support.huaweicloud.com/api-evs/evs_04_0040.html)。
    * attachments  云硬盘的挂载信息，请参见•[attachments参数说明](https://support.huaweicloud.com/api-evs/evs_04_2006.html#evs_04_2006__evs_04_2010_li12430153610291)。
    * availabilityZone  云硬盘所属的AZ信息。
    * osVolHostAttrhost  预留属性。
    * sourceVolid  源云硬盘ID，如果是从源云硬盘创建，则有值。  当前云硬盘服务不支持该字段。
    * snapshotId  快照ID，如果是从快照创建，则有值。
    * description  云硬盘描述。
    * createdAt  云硬盘创建时间。 时间格式：UTC YYYY-MM-DDTHH:MM:SS.XXXXXX
    * osVolTenantAttrtenantId  云硬盘所属的租户ID。租户ID就是项目ID。
    * volumeImageMetadata  云硬盘镜像的元数据。 > 说明： >  > 关于“volume_image_metadata”字段的详细说明，具体请参见：\"[查询镜像详情](https://support.huaweicloud.com/api-ims/ims_03_0703.html)\"。
    * volumeType  云硬盘类型。 目前支持“SSD”，“SAS”和“SATA”三种。 “SSD”为超高IO云硬盘 “SAS”为高IO云硬盘 “SATA”为普通IO云硬盘
    * size  云硬盘大小，单位为GB。
    * consistencygroupId  预留属性。
    * bootable  是否为启动云硬盘。 true：表示为启动云硬盘。 false：表示为非启动云硬盘。
    * metadata  metadata
    * updatedAt  云硬盘更新时间。 时间格式：UTC YYYY-MM-DDTHH:MM:SS.XXXXXX
    * encrypted  当前云硬盘服务不支持该字段。
    * replicationStatus  预留属性。
    * osVolumeReplicationextendedStatus  预留属性。
    * osVolMigStatusAttrmigstat  预留属性。
    * osVolMigStatusAttrnameId  预留属性。
    * shareable  是否为共享云硬盘。true为共享盘，false为普通云硬盘。 该字段已经废弃，请使用multiattach。
    * userId  预留属性。
    * serviceType  服务类型，结果为EVS、DSS、DESS。
    * multiattach  是否为共享云硬盘。
    * dedicatedStorageId  云硬盘所属的专属存储池ID。
    * dedicatedStorageName  云硬盘所属的专属存储池的名称。
    * tags  云硬盘的标签。 如果云硬盘有标签，则会有该字段，否则该字段为空。
    * wwn  云硬盘挂载时的唯一标识。
    * enterpriseProjectId  云硬盘上绑定的企业项目ID。 > 说明： >  > 关于企业项目ID的获取及企业项目特性的详细信息，请参见：\"[企业管理用户指南](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0123692049.html)\"。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'links' => '\HuaweiCloud\SDK\Evs\V2\Model\Link[]',
            'name' => 'string',
            'status' => 'string',
            'attachments' => '\HuaweiCloud\SDK\Evs\V2\Model\Attachment[]',
            'availabilityZone' => 'string',
            'osVolHostAttrhost' => 'string',
            'sourceVolid' => 'string',
            'snapshotId' => 'string',
            'description' => 'string',
            'createdAt' => 'string',
            'osVolTenantAttrtenantId' => 'string',
            'volumeImageMetadata' => 'map[string,object]',
            'volumeType' => 'string',
            'size' => 'int',
            'consistencygroupId' => 'string',
            'bootable' => 'string',
            'metadata' => '\HuaweiCloud\SDK\Evs\V2\Model\VolumeMetadata',
            'updatedAt' => 'string',
            'encrypted' => 'bool',
            'replicationStatus' => 'string',
            'osVolumeReplicationextendedStatus' => 'string',
            'osVolMigStatusAttrmigstat' => 'string',
            'osVolMigStatusAttrnameId' => 'string',
            'shareable' => 'bool',
            'userId' => 'string',
            'serviceType' => 'string',
            'multiattach' => 'bool',
            'dedicatedStorageId' => 'string',
            'dedicatedStorageName' => 'string',
            'tags' => 'map[string,string]',
            'wwn' => 'string',
            'enterpriseProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  云硬盘的ID。
    * links  云硬盘URI自描述信息。请参见 [links参数说明](https://support.huaweicloud.com/api-evs/evs_04_2006.html#evs_04_2006__evs_04_2010_li1077125119136)。
    * name  云硬盘名称。
    * status  云硬盘状态，请参见[云硬盘状态](https://support.huaweicloud.com/api-evs/evs_04_0040.html)。
    * attachments  云硬盘的挂载信息，请参见•[attachments参数说明](https://support.huaweicloud.com/api-evs/evs_04_2006.html#evs_04_2006__evs_04_2010_li12430153610291)。
    * availabilityZone  云硬盘所属的AZ信息。
    * osVolHostAttrhost  预留属性。
    * sourceVolid  源云硬盘ID，如果是从源云硬盘创建，则有值。  当前云硬盘服务不支持该字段。
    * snapshotId  快照ID，如果是从快照创建，则有值。
    * description  云硬盘描述。
    * createdAt  云硬盘创建时间。 时间格式：UTC YYYY-MM-DDTHH:MM:SS.XXXXXX
    * osVolTenantAttrtenantId  云硬盘所属的租户ID。租户ID就是项目ID。
    * volumeImageMetadata  云硬盘镜像的元数据。 > 说明： >  > 关于“volume_image_metadata”字段的详细说明，具体请参见：\"[查询镜像详情](https://support.huaweicloud.com/api-ims/ims_03_0703.html)\"。
    * volumeType  云硬盘类型。 目前支持“SSD”，“SAS”和“SATA”三种。 “SSD”为超高IO云硬盘 “SAS”为高IO云硬盘 “SATA”为普通IO云硬盘
    * size  云硬盘大小，单位为GB。
    * consistencygroupId  预留属性。
    * bootable  是否为启动云硬盘。 true：表示为启动云硬盘。 false：表示为非启动云硬盘。
    * metadata  metadata
    * updatedAt  云硬盘更新时间。 时间格式：UTC YYYY-MM-DDTHH:MM:SS.XXXXXX
    * encrypted  当前云硬盘服务不支持该字段。
    * replicationStatus  预留属性。
    * osVolumeReplicationextendedStatus  预留属性。
    * osVolMigStatusAttrmigstat  预留属性。
    * osVolMigStatusAttrnameId  预留属性。
    * shareable  是否为共享云硬盘。true为共享盘，false为普通云硬盘。 该字段已经废弃，请使用multiattach。
    * userId  预留属性。
    * serviceType  服务类型，结果为EVS、DSS、DESS。
    * multiattach  是否为共享云硬盘。
    * dedicatedStorageId  云硬盘所属的专属存储池ID。
    * dedicatedStorageName  云硬盘所属的专属存储池的名称。
    * tags  云硬盘的标签。 如果云硬盘有标签，则会有该字段，否则该字段为空。
    * wwn  云硬盘挂载时的唯一标识。
    * enterpriseProjectId  云硬盘上绑定的企业项目ID。 > 说明： >  > 关于企业项目ID的获取及企业项目特性的详细信息，请参见：\"[企业管理用户指南](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0123692049.html)\"。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'links' => null,
        'name' => null,
        'status' => null,
        'attachments' => null,
        'availabilityZone' => null,
        'osVolHostAttrhost' => null,
        'sourceVolid' => null,
        'snapshotId' => null,
        'description' => null,
        'createdAt' => null,
        'osVolTenantAttrtenantId' => null,
        'volumeImageMetadata' => null,
        'volumeType' => null,
        'size' => 'int32',
        'consistencygroupId' => null,
        'bootable' => null,
        'metadata' => null,
        'updatedAt' => null,
        'encrypted' => null,
        'replicationStatus' => null,
        'osVolumeReplicationextendedStatus' => null,
        'osVolMigStatusAttrmigstat' => null,
        'osVolMigStatusAttrnameId' => null,
        'shareable' => null,
        'userId' => null,
        'serviceType' => null,
        'multiattach' => null,
        'dedicatedStorageId' => null,
        'dedicatedStorageName' => null,
        'tags' => null,
        'wwn' => null,
        'enterpriseProjectId' => null
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
    * id  云硬盘的ID。
    * links  云硬盘URI自描述信息。请参见 [links参数说明](https://support.huaweicloud.com/api-evs/evs_04_2006.html#evs_04_2006__evs_04_2010_li1077125119136)。
    * name  云硬盘名称。
    * status  云硬盘状态，请参见[云硬盘状态](https://support.huaweicloud.com/api-evs/evs_04_0040.html)。
    * attachments  云硬盘的挂载信息，请参见•[attachments参数说明](https://support.huaweicloud.com/api-evs/evs_04_2006.html#evs_04_2006__evs_04_2010_li12430153610291)。
    * availabilityZone  云硬盘所属的AZ信息。
    * osVolHostAttrhost  预留属性。
    * sourceVolid  源云硬盘ID，如果是从源云硬盘创建，则有值。  当前云硬盘服务不支持该字段。
    * snapshotId  快照ID，如果是从快照创建，则有值。
    * description  云硬盘描述。
    * createdAt  云硬盘创建时间。 时间格式：UTC YYYY-MM-DDTHH:MM:SS.XXXXXX
    * osVolTenantAttrtenantId  云硬盘所属的租户ID。租户ID就是项目ID。
    * volumeImageMetadata  云硬盘镜像的元数据。 > 说明： >  > 关于“volume_image_metadata”字段的详细说明，具体请参见：\"[查询镜像详情](https://support.huaweicloud.com/api-ims/ims_03_0703.html)\"。
    * volumeType  云硬盘类型。 目前支持“SSD”，“SAS”和“SATA”三种。 “SSD”为超高IO云硬盘 “SAS”为高IO云硬盘 “SATA”为普通IO云硬盘
    * size  云硬盘大小，单位为GB。
    * consistencygroupId  预留属性。
    * bootable  是否为启动云硬盘。 true：表示为启动云硬盘。 false：表示为非启动云硬盘。
    * metadata  metadata
    * updatedAt  云硬盘更新时间。 时间格式：UTC YYYY-MM-DDTHH:MM:SS.XXXXXX
    * encrypted  当前云硬盘服务不支持该字段。
    * replicationStatus  预留属性。
    * osVolumeReplicationextendedStatus  预留属性。
    * osVolMigStatusAttrmigstat  预留属性。
    * osVolMigStatusAttrnameId  预留属性。
    * shareable  是否为共享云硬盘。true为共享盘，false为普通云硬盘。 该字段已经废弃，请使用multiattach。
    * userId  预留属性。
    * serviceType  服务类型，结果为EVS、DSS、DESS。
    * multiattach  是否为共享云硬盘。
    * dedicatedStorageId  云硬盘所属的专属存储池ID。
    * dedicatedStorageName  云硬盘所属的专属存储池的名称。
    * tags  云硬盘的标签。 如果云硬盘有标签，则会有该字段，否则该字段为空。
    * wwn  云硬盘挂载时的唯一标识。
    * enterpriseProjectId  云硬盘上绑定的企业项目ID。 > 说明： >  > 关于企业项目ID的获取及企业项目特性的详细信息，请参见：\"[企业管理用户指南](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0123692049.html)\"。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'links' => 'links',
            'name' => 'name',
            'status' => 'status',
            'attachments' => 'attachments',
            'availabilityZone' => 'availability_zone',
            'osVolHostAttrhost' => 'os-vol-host-attr:host',
            'sourceVolid' => 'source_volid',
            'snapshotId' => 'snapshot_id',
            'description' => 'description',
            'createdAt' => 'created_at',
            'osVolTenantAttrtenantId' => 'os-vol-tenant-attr:tenant_id',
            'volumeImageMetadata' => 'volume_image_metadata',
            'volumeType' => 'volume_type',
            'size' => 'size',
            'consistencygroupId' => 'consistencygroup_id',
            'bootable' => 'bootable',
            'metadata' => 'metadata',
            'updatedAt' => 'updated_at',
            'encrypted' => 'encrypted',
            'replicationStatus' => 'replication_status',
            'osVolumeReplicationextendedStatus' => 'os-volume-replication:extended_status',
            'osVolMigStatusAttrmigstat' => 'os-vol-mig-status-attr:migstat',
            'osVolMigStatusAttrnameId' => 'os-vol-mig-status-attr:name_id',
            'shareable' => 'shareable',
            'userId' => 'user_id',
            'serviceType' => 'service_type',
            'multiattach' => 'multiattach',
            'dedicatedStorageId' => 'dedicated_storage_id',
            'dedicatedStorageName' => 'dedicated_storage_name',
            'tags' => 'tags',
            'wwn' => 'wwn',
            'enterpriseProjectId' => 'enterprise_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  云硬盘的ID。
    * links  云硬盘URI自描述信息。请参见 [links参数说明](https://support.huaweicloud.com/api-evs/evs_04_2006.html#evs_04_2006__evs_04_2010_li1077125119136)。
    * name  云硬盘名称。
    * status  云硬盘状态，请参见[云硬盘状态](https://support.huaweicloud.com/api-evs/evs_04_0040.html)。
    * attachments  云硬盘的挂载信息，请参见•[attachments参数说明](https://support.huaweicloud.com/api-evs/evs_04_2006.html#evs_04_2006__evs_04_2010_li12430153610291)。
    * availabilityZone  云硬盘所属的AZ信息。
    * osVolHostAttrhost  预留属性。
    * sourceVolid  源云硬盘ID，如果是从源云硬盘创建，则有值。  当前云硬盘服务不支持该字段。
    * snapshotId  快照ID，如果是从快照创建，则有值。
    * description  云硬盘描述。
    * createdAt  云硬盘创建时间。 时间格式：UTC YYYY-MM-DDTHH:MM:SS.XXXXXX
    * osVolTenantAttrtenantId  云硬盘所属的租户ID。租户ID就是项目ID。
    * volumeImageMetadata  云硬盘镜像的元数据。 > 说明： >  > 关于“volume_image_metadata”字段的详细说明，具体请参见：\"[查询镜像详情](https://support.huaweicloud.com/api-ims/ims_03_0703.html)\"。
    * volumeType  云硬盘类型。 目前支持“SSD”，“SAS”和“SATA”三种。 “SSD”为超高IO云硬盘 “SAS”为高IO云硬盘 “SATA”为普通IO云硬盘
    * size  云硬盘大小，单位为GB。
    * consistencygroupId  预留属性。
    * bootable  是否为启动云硬盘。 true：表示为启动云硬盘。 false：表示为非启动云硬盘。
    * metadata  metadata
    * updatedAt  云硬盘更新时间。 时间格式：UTC YYYY-MM-DDTHH:MM:SS.XXXXXX
    * encrypted  当前云硬盘服务不支持该字段。
    * replicationStatus  预留属性。
    * osVolumeReplicationextendedStatus  预留属性。
    * osVolMigStatusAttrmigstat  预留属性。
    * osVolMigStatusAttrnameId  预留属性。
    * shareable  是否为共享云硬盘。true为共享盘，false为普通云硬盘。 该字段已经废弃，请使用multiattach。
    * userId  预留属性。
    * serviceType  服务类型，结果为EVS、DSS、DESS。
    * multiattach  是否为共享云硬盘。
    * dedicatedStorageId  云硬盘所属的专属存储池ID。
    * dedicatedStorageName  云硬盘所属的专属存储池的名称。
    * tags  云硬盘的标签。 如果云硬盘有标签，则会有该字段，否则该字段为空。
    * wwn  云硬盘挂载时的唯一标识。
    * enterpriseProjectId  云硬盘上绑定的企业项目ID。 > 说明： >  > 关于企业项目ID的获取及企业项目特性的详细信息，请参见：\"[企业管理用户指南](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0123692049.html)\"。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'links' => 'setLinks',
            'name' => 'setName',
            'status' => 'setStatus',
            'attachments' => 'setAttachments',
            'availabilityZone' => 'setAvailabilityZone',
            'osVolHostAttrhost' => 'setOsVolHostAttrhost',
            'sourceVolid' => 'setSourceVolid',
            'snapshotId' => 'setSnapshotId',
            'description' => 'setDescription',
            'createdAt' => 'setCreatedAt',
            'osVolTenantAttrtenantId' => 'setOsVolTenantAttrtenantId',
            'volumeImageMetadata' => 'setVolumeImageMetadata',
            'volumeType' => 'setVolumeType',
            'size' => 'setSize',
            'consistencygroupId' => 'setConsistencygroupId',
            'bootable' => 'setBootable',
            'metadata' => 'setMetadata',
            'updatedAt' => 'setUpdatedAt',
            'encrypted' => 'setEncrypted',
            'replicationStatus' => 'setReplicationStatus',
            'osVolumeReplicationextendedStatus' => 'setOsVolumeReplicationextendedStatus',
            'osVolMigStatusAttrmigstat' => 'setOsVolMigStatusAttrmigstat',
            'osVolMigStatusAttrnameId' => 'setOsVolMigStatusAttrnameId',
            'shareable' => 'setShareable',
            'userId' => 'setUserId',
            'serviceType' => 'setServiceType',
            'multiattach' => 'setMultiattach',
            'dedicatedStorageId' => 'setDedicatedStorageId',
            'dedicatedStorageName' => 'setDedicatedStorageName',
            'tags' => 'setTags',
            'wwn' => 'setWwn',
            'enterpriseProjectId' => 'setEnterpriseProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  云硬盘的ID。
    * links  云硬盘URI自描述信息。请参见 [links参数说明](https://support.huaweicloud.com/api-evs/evs_04_2006.html#evs_04_2006__evs_04_2010_li1077125119136)。
    * name  云硬盘名称。
    * status  云硬盘状态，请参见[云硬盘状态](https://support.huaweicloud.com/api-evs/evs_04_0040.html)。
    * attachments  云硬盘的挂载信息，请参见•[attachments参数说明](https://support.huaweicloud.com/api-evs/evs_04_2006.html#evs_04_2006__evs_04_2010_li12430153610291)。
    * availabilityZone  云硬盘所属的AZ信息。
    * osVolHostAttrhost  预留属性。
    * sourceVolid  源云硬盘ID，如果是从源云硬盘创建，则有值。  当前云硬盘服务不支持该字段。
    * snapshotId  快照ID，如果是从快照创建，则有值。
    * description  云硬盘描述。
    * createdAt  云硬盘创建时间。 时间格式：UTC YYYY-MM-DDTHH:MM:SS.XXXXXX
    * osVolTenantAttrtenantId  云硬盘所属的租户ID。租户ID就是项目ID。
    * volumeImageMetadata  云硬盘镜像的元数据。 > 说明： >  > 关于“volume_image_metadata”字段的详细说明，具体请参见：\"[查询镜像详情](https://support.huaweicloud.com/api-ims/ims_03_0703.html)\"。
    * volumeType  云硬盘类型。 目前支持“SSD”，“SAS”和“SATA”三种。 “SSD”为超高IO云硬盘 “SAS”为高IO云硬盘 “SATA”为普通IO云硬盘
    * size  云硬盘大小，单位为GB。
    * consistencygroupId  预留属性。
    * bootable  是否为启动云硬盘。 true：表示为启动云硬盘。 false：表示为非启动云硬盘。
    * metadata  metadata
    * updatedAt  云硬盘更新时间。 时间格式：UTC YYYY-MM-DDTHH:MM:SS.XXXXXX
    * encrypted  当前云硬盘服务不支持该字段。
    * replicationStatus  预留属性。
    * osVolumeReplicationextendedStatus  预留属性。
    * osVolMigStatusAttrmigstat  预留属性。
    * osVolMigStatusAttrnameId  预留属性。
    * shareable  是否为共享云硬盘。true为共享盘，false为普通云硬盘。 该字段已经废弃，请使用multiattach。
    * userId  预留属性。
    * serviceType  服务类型，结果为EVS、DSS、DESS。
    * multiattach  是否为共享云硬盘。
    * dedicatedStorageId  云硬盘所属的专属存储池ID。
    * dedicatedStorageName  云硬盘所属的专属存储池的名称。
    * tags  云硬盘的标签。 如果云硬盘有标签，则会有该字段，否则该字段为空。
    * wwn  云硬盘挂载时的唯一标识。
    * enterpriseProjectId  云硬盘上绑定的企业项目ID。 > 说明： >  > 关于企业项目ID的获取及企业项目特性的详细信息，请参见：\"[企业管理用户指南](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0123692049.html)\"。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'links' => 'getLinks',
            'name' => 'getName',
            'status' => 'getStatus',
            'attachments' => 'getAttachments',
            'availabilityZone' => 'getAvailabilityZone',
            'osVolHostAttrhost' => 'getOsVolHostAttrhost',
            'sourceVolid' => 'getSourceVolid',
            'snapshotId' => 'getSnapshotId',
            'description' => 'getDescription',
            'createdAt' => 'getCreatedAt',
            'osVolTenantAttrtenantId' => 'getOsVolTenantAttrtenantId',
            'volumeImageMetadata' => 'getVolumeImageMetadata',
            'volumeType' => 'getVolumeType',
            'size' => 'getSize',
            'consistencygroupId' => 'getConsistencygroupId',
            'bootable' => 'getBootable',
            'metadata' => 'getMetadata',
            'updatedAt' => 'getUpdatedAt',
            'encrypted' => 'getEncrypted',
            'replicationStatus' => 'getReplicationStatus',
            'osVolumeReplicationextendedStatus' => 'getOsVolumeReplicationextendedStatus',
            'osVolMigStatusAttrmigstat' => 'getOsVolMigStatusAttrmigstat',
            'osVolMigStatusAttrnameId' => 'getOsVolMigStatusAttrnameId',
            'shareable' => 'getShareable',
            'userId' => 'getUserId',
            'serviceType' => 'getServiceType',
            'multiattach' => 'getMultiattach',
            'dedicatedStorageId' => 'getDedicatedStorageId',
            'dedicatedStorageName' => 'getDedicatedStorageName',
            'tags' => 'getTags',
            'wwn' => 'getWwn',
            'enterpriseProjectId' => 'getEnterpriseProjectId'
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
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['attachments'] = isset($data['attachments']) ? $data['attachments'] : null;
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
        $this->container['osVolHostAttrhost'] = isset($data['osVolHostAttrhost']) ? $data['osVolHostAttrhost'] : null;
        $this->container['sourceVolid'] = isset($data['sourceVolid']) ? $data['sourceVolid'] : null;
        $this->container['snapshotId'] = isset($data['snapshotId']) ? $data['snapshotId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['osVolTenantAttrtenantId'] = isset($data['osVolTenantAttrtenantId']) ? $data['osVolTenantAttrtenantId'] : null;
        $this->container['volumeImageMetadata'] = isset($data['volumeImageMetadata']) ? $data['volumeImageMetadata'] : null;
        $this->container['volumeType'] = isset($data['volumeType']) ? $data['volumeType'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['consistencygroupId'] = isset($data['consistencygroupId']) ? $data['consistencygroupId'] : null;
        $this->container['bootable'] = isset($data['bootable']) ? $data['bootable'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['encrypted'] = isset($data['encrypted']) ? $data['encrypted'] : null;
        $this->container['replicationStatus'] = isset($data['replicationStatus']) ? $data['replicationStatus'] : null;
        $this->container['osVolumeReplicationextendedStatus'] = isset($data['osVolumeReplicationextendedStatus']) ? $data['osVolumeReplicationextendedStatus'] : null;
        $this->container['osVolMigStatusAttrmigstat'] = isset($data['osVolMigStatusAttrmigstat']) ? $data['osVolMigStatusAttrmigstat'] : null;
        $this->container['osVolMigStatusAttrnameId'] = isset($data['osVolMigStatusAttrnameId']) ? $data['osVolMigStatusAttrnameId'] : null;
        $this->container['shareable'] = isset($data['shareable']) ? $data['shareable'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['serviceType'] = isset($data['serviceType']) ? $data['serviceType'] : null;
        $this->container['multiattach'] = isset($data['multiattach']) ? $data['multiattach'] : null;
        $this->container['dedicatedStorageId'] = isset($data['dedicatedStorageId']) ? $data['dedicatedStorageId'] : null;
        $this->container['dedicatedStorageName'] = isset($data['dedicatedStorageName']) ? $data['dedicatedStorageName'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['wwn'] = isset($data['wwn']) ? $data['wwn'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
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
        if ($this->container['links'] === null) {
            $invalidProperties[] = "'links' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['attachments'] === null) {
            $invalidProperties[] = "'attachments' can't be null";
        }
        if ($this->container['availabilityZone'] === null) {
            $invalidProperties[] = "'availabilityZone' can't be null";
        }
        if ($this->container['osVolHostAttrhost'] === null) {
            $invalidProperties[] = "'osVolHostAttrhost' can't be null";
        }
        if ($this->container['snapshotId'] === null) {
            $invalidProperties[] = "'snapshotId' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['osVolTenantAttrtenantId'] === null) {
            $invalidProperties[] = "'osVolTenantAttrtenantId' can't be null";
        }
        if ($this->container['volumeImageMetadata'] === null) {
            $invalidProperties[] = "'volumeImageMetadata' can't be null";
        }
        if ($this->container['volumeType'] === null) {
            $invalidProperties[] = "'volumeType' can't be null";
        }
        if ($this->container['size'] === null) {
            $invalidProperties[] = "'size' can't be null";
        }
        if ($this->container['bootable'] === null) {
            $invalidProperties[] = "'bootable' can't be null";
        }
        if ($this->container['metadata'] === null) {
            $invalidProperties[] = "'metadata' can't be null";
        }
        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
        }
        if ($this->container['replicationStatus'] === null) {
            $invalidProperties[] = "'replicationStatus' can't be null";
        }
        if ($this->container['osVolumeReplicationextendedStatus'] === null) {
            $invalidProperties[] = "'osVolumeReplicationextendedStatus' can't be null";
        }
        if ($this->container['osVolMigStatusAttrmigstat'] === null) {
            $invalidProperties[] = "'osVolMigStatusAttrmigstat' can't be null";
        }
        if ($this->container['osVolMigStatusAttrnameId'] === null) {
            $invalidProperties[] = "'osVolMigStatusAttrnameId' can't be null";
        }
        if ($this->container['shareable'] === null) {
            $invalidProperties[] = "'shareable' can't be null";
        }
        if ($this->container['userId'] === null) {
            $invalidProperties[] = "'userId' can't be null";
        }
        if ($this->container['serviceType'] === null) {
            $invalidProperties[] = "'serviceType' can't be null";
        }
        if ($this->container['multiattach'] === null) {
            $invalidProperties[] = "'multiattach' can't be null";
        }
        if ($this->container['tags'] === null) {
            $invalidProperties[] = "'tags' can't be null";
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
    *  云硬盘的ID。
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
    * @param string $id 云硬盘的ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets links
    *  云硬盘URI自描述信息。请参见 [links参数说明](https://support.huaweicloud.com/api-evs/evs_04_2006.html#evs_04_2006__evs_04_2010_li1077125119136)。
    *
    * @return \HuaweiCloud\SDK\Evs\V2\Model\Link[]
    */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
    * Sets links
    *
    * @param \HuaweiCloud\SDK\Evs\V2\Model\Link[] $links 云硬盘URI自描述信息。请参见 [links参数说明](https://support.huaweicloud.com/api-evs/evs_04_2006.html#evs_04_2006__evs_04_2010_li1077125119136)。
    *
    * @return $this
    */
    public function setLinks($links)
    {
        $this->container['links'] = $links;
        return $this;
    }

    /**
    * Gets name
    *  云硬盘名称。
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
    * @param string $name 云硬盘名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets status
    *  云硬盘状态，请参见[云硬盘状态](https://support.huaweicloud.com/api-evs/evs_04_0040.html)。
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
    * @param string $status 云硬盘状态，请参见[云硬盘状态](https://support.huaweicloud.com/api-evs/evs_04_0040.html)。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets attachments
    *  云硬盘的挂载信息，请参见•[attachments参数说明](https://support.huaweicloud.com/api-evs/evs_04_2006.html#evs_04_2006__evs_04_2010_li12430153610291)。
    *
    * @return \HuaweiCloud\SDK\Evs\V2\Model\Attachment[]
    */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /**
    * Sets attachments
    *
    * @param \HuaweiCloud\SDK\Evs\V2\Model\Attachment[] $attachments 云硬盘的挂载信息，请参见•[attachments参数说明](https://support.huaweicloud.com/api-evs/evs_04_2006.html#evs_04_2006__evs_04_2010_li12430153610291)。
    *
    * @return $this
    */
    public function setAttachments($attachments)
    {
        $this->container['attachments'] = $attachments;
        return $this;
    }

    /**
    * Gets availabilityZone
    *  云硬盘所属的AZ信息。
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
    * @param string $availabilityZone 云硬盘所属的AZ信息。
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
        return $this;
    }

    /**
    * Gets osVolHostAttrhost
    *  预留属性。
    *
    * @return string
    */
    public function getOsVolHostAttrhost()
    {
        return $this->container['osVolHostAttrhost'];
    }

    /**
    * Sets osVolHostAttrhost
    *
    * @param string $osVolHostAttrhost 预留属性。
    *
    * @return $this
    */
    public function setOsVolHostAttrhost($osVolHostAttrhost)
    {
        $this->container['osVolHostAttrhost'] = $osVolHostAttrhost;
        return $this;
    }

    /**
    * Gets sourceVolid
    *  源云硬盘ID，如果是从源云硬盘创建，则有值。  当前云硬盘服务不支持该字段。
    *
    * @return string|null
    */
    public function getSourceVolid()
    {
        return $this->container['sourceVolid'];
    }

    /**
    * Sets sourceVolid
    *
    * @param string|null $sourceVolid 源云硬盘ID，如果是从源云硬盘创建，则有值。  当前云硬盘服务不支持该字段。
    *
    * @return $this
    */
    public function setSourceVolid($sourceVolid)
    {
        $this->container['sourceVolid'] = $sourceVolid;
        return $this;
    }

    /**
    * Gets snapshotId
    *  快照ID，如果是从快照创建，则有值。
    *
    * @return string
    */
    public function getSnapshotId()
    {
        return $this->container['snapshotId'];
    }

    /**
    * Sets snapshotId
    *
    * @param string $snapshotId 快照ID，如果是从快照创建，则有值。
    *
    * @return $this
    */
    public function setSnapshotId($snapshotId)
    {
        $this->container['snapshotId'] = $snapshotId;
        return $this;
    }

    /**
    * Gets description
    *  云硬盘描述。
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
    * @param string $description 云硬盘描述。
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
    *  云硬盘创建时间。 时间格式：UTC YYYY-MM-DDTHH:MM:SS.XXXXXX
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
    * @param string $createdAt 云硬盘创建时间。 时间格式：UTC YYYY-MM-DDTHH:MM:SS.XXXXXX
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets osVolTenantAttrtenantId
    *  云硬盘所属的租户ID。租户ID就是项目ID。
    *
    * @return string
    */
    public function getOsVolTenantAttrtenantId()
    {
        return $this->container['osVolTenantAttrtenantId'];
    }

    /**
    * Sets osVolTenantAttrtenantId
    *
    * @param string $osVolTenantAttrtenantId 云硬盘所属的租户ID。租户ID就是项目ID。
    *
    * @return $this
    */
    public function setOsVolTenantAttrtenantId($osVolTenantAttrtenantId)
    {
        $this->container['osVolTenantAttrtenantId'] = $osVolTenantAttrtenantId;
        return $this;
    }

    /**
    * Gets volumeImageMetadata
    *  云硬盘镜像的元数据。 > 说明： >  > 关于“volume_image_metadata”字段的详细说明，具体请参见：\"[查询镜像详情](https://support.huaweicloud.com/api-ims/ims_03_0703.html)\"。
    *
    * @return map[string,object]
    */
    public function getVolumeImageMetadata()
    {
        return $this->container['volumeImageMetadata'];
    }

    /**
    * Sets volumeImageMetadata
    *
    * @param map[string,object] $volumeImageMetadata 云硬盘镜像的元数据。 > 说明： >  > 关于“volume_image_metadata”字段的详细说明，具体请参见：\"[查询镜像详情](https://support.huaweicloud.com/api-ims/ims_03_0703.html)\"。
    *
    * @return $this
    */
    public function setVolumeImageMetadata($volumeImageMetadata)
    {
        $this->container['volumeImageMetadata'] = $volumeImageMetadata;
        return $this;
    }

    /**
    * Gets volumeType
    *  云硬盘类型。 目前支持“SSD”，“SAS”和“SATA”三种。 “SSD”为超高IO云硬盘 “SAS”为高IO云硬盘 “SATA”为普通IO云硬盘
    *
    * @return string
    */
    public function getVolumeType()
    {
        return $this->container['volumeType'];
    }

    /**
    * Sets volumeType
    *
    * @param string $volumeType 云硬盘类型。 目前支持“SSD”，“SAS”和“SATA”三种。 “SSD”为超高IO云硬盘 “SAS”为高IO云硬盘 “SATA”为普通IO云硬盘
    *
    * @return $this
    */
    public function setVolumeType($volumeType)
    {
        $this->container['volumeType'] = $volumeType;
        return $this;
    }

    /**
    * Gets size
    *  云硬盘大小，单位为GB。
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
    * @param int $size 云硬盘大小，单位为GB。
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets consistencygroupId
    *  预留属性。
    *
    * @return string|null
    */
    public function getConsistencygroupId()
    {
        return $this->container['consistencygroupId'];
    }

    /**
    * Sets consistencygroupId
    *
    * @param string|null $consistencygroupId 预留属性。
    *
    * @return $this
    */
    public function setConsistencygroupId($consistencygroupId)
    {
        $this->container['consistencygroupId'] = $consistencygroupId;
        return $this;
    }

    /**
    * Gets bootable
    *  是否为启动云硬盘。 true：表示为启动云硬盘。 false：表示为非启动云硬盘。
    *
    * @return string
    */
    public function getBootable()
    {
        return $this->container['bootable'];
    }

    /**
    * Sets bootable
    *
    * @param string $bootable 是否为启动云硬盘。 true：表示为启动云硬盘。 false：表示为非启动云硬盘。
    *
    * @return $this
    */
    public function setBootable($bootable)
    {
        $this->container['bootable'] = $bootable;
        return $this;
    }

    /**
    * Gets metadata
    *  metadata
    *
    * @return \HuaweiCloud\SDK\Evs\V2\Model\VolumeMetadata
    */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
    * Sets metadata
    *
    * @param \HuaweiCloud\SDK\Evs\V2\Model\VolumeMetadata $metadata metadata
    *
    * @return $this
    */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;
        return $this;
    }

    /**
    * Gets updatedAt
    *  云硬盘更新时间。 时间格式：UTC YYYY-MM-DDTHH:MM:SS.XXXXXX
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
    * @param string $updatedAt 云硬盘更新时间。 时间格式：UTC YYYY-MM-DDTHH:MM:SS.XXXXXX
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets encrypted
    *  当前云硬盘服务不支持该字段。
    *
    * @return bool|null
    */
    public function getEncrypted()
    {
        return $this->container['encrypted'];
    }

    /**
    * Sets encrypted
    *
    * @param bool|null $encrypted 当前云硬盘服务不支持该字段。
    *
    * @return $this
    */
    public function setEncrypted($encrypted)
    {
        $this->container['encrypted'] = $encrypted;
        return $this;
    }

    /**
    * Gets replicationStatus
    *  预留属性。
    *
    * @return string
    */
    public function getReplicationStatus()
    {
        return $this->container['replicationStatus'];
    }

    /**
    * Sets replicationStatus
    *
    * @param string $replicationStatus 预留属性。
    *
    * @return $this
    */
    public function setReplicationStatus($replicationStatus)
    {
        $this->container['replicationStatus'] = $replicationStatus;
        return $this;
    }

    /**
    * Gets osVolumeReplicationextendedStatus
    *  预留属性。
    *
    * @return string
    */
    public function getOsVolumeReplicationextendedStatus()
    {
        return $this->container['osVolumeReplicationextendedStatus'];
    }

    /**
    * Sets osVolumeReplicationextendedStatus
    *
    * @param string $osVolumeReplicationextendedStatus 预留属性。
    *
    * @return $this
    */
    public function setOsVolumeReplicationextendedStatus($osVolumeReplicationextendedStatus)
    {
        $this->container['osVolumeReplicationextendedStatus'] = $osVolumeReplicationextendedStatus;
        return $this;
    }

    /**
    * Gets osVolMigStatusAttrmigstat
    *  预留属性。
    *
    * @return string
    */
    public function getOsVolMigStatusAttrmigstat()
    {
        return $this->container['osVolMigStatusAttrmigstat'];
    }

    /**
    * Sets osVolMigStatusAttrmigstat
    *
    * @param string $osVolMigStatusAttrmigstat 预留属性。
    *
    * @return $this
    */
    public function setOsVolMigStatusAttrmigstat($osVolMigStatusAttrmigstat)
    {
        $this->container['osVolMigStatusAttrmigstat'] = $osVolMigStatusAttrmigstat;
        return $this;
    }

    /**
    * Gets osVolMigStatusAttrnameId
    *  预留属性。
    *
    * @return string
    */
    public function getOsVolMigStatusAttrnameId()
    {
        return $this->container['osVolMigStatusAttrnameId'];
    }

    /**
    * Sets osVolMigStatusAttrnameId
    *
    * @param string $osVolMigStatusAttrnameId 预留属性。
    *
    * @return $this
    */
    public function setOsVolMigStatusAttrnameId($osVolMigStatusAttrnameId)
    {
        $this->container['osVolMigStatusAttrnameId'] = $osVolMigStatusAttrnameId;
        return $this;
    }

    /**
    * Gets shareable
    *  是否为共享云硬盘。true为共享盘，false为普通云硬盘。 该字段已经废弃，请使用multiattach。
    *
    * @return bool
    */
    public function getShareable()
    {
        return $this->container['shareable'];
    }

    /**
    * Sets shareable
    *
    * @param bool $shareable 是否为共享云硬盘。true为共享盘，false为普通云硬盘。 该字段已经废弃，请使用multiattach。
    *
    * @return $this
    */
    public function setShareable($shareable)
    {
        $this->container['shareable'] = $shareable;
        return $this;
    }

    /**
    * Gets userId
    *  预留属性。
    *
    * @return string
    */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
    * Sets userId
    *
    * @param string $userId 预留属性。
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets serviceType
    *  服务类型，结果为EVS、DSS、DESS。
    *
    * @return string
    */
    public function getServiceType()
    {
        return $this->container['serviceType'];
    }

    /**
    * Sets serviceType
    *
    * @param string $serviceType 服务类型，结果为EVS、DSS、DESS。
    *
    * @return $this
    */
    public function setServiceType($serviceType)
    {
        $this->container['serviceType'] = $serviceType;
        return $this;
    }

    /**
    * Gets multiattach
    *  是否为共享云硬盘。
    *
    * @return bool
    */
    public function getMultiattach()
    {
        return $this->container['multiattach'];
    }

    /**
    * Sets multiattach
    *
    * @param bool $multiattach 是否为共享云硬盘。
    *
    * @return $this
    */
    public function setMultiattach($multiattach)
    {
        $this->container['multiattach'] = $multiattach;
        return $this;
    }

    /**
    * Gets dedicatedStorageId
    *  云硬盘所属的专属存储池ID。
    *
    * @return string|null
    */
    public function getDedicatedStorageId()
    {
        return $this->container['dedicatedStorageId'];
    }

    /**
    * Sets dedicatedStorageId
    *
    * @param string|null $dedicatedStorageId 云硬盘所属的专属存储池ID。
    *
    * @return $this
    */
    public function setDedicatedStorageId($dedicatedStorageId)
    {
        $this->container['dedicatedStorageId'] = $dedicatedStorageId;
        return $this;
    }

    /**
    * Gets dedicatedStorageName
    *  云硬盘所属的专属存储池的名称。
    *
    * @return string|null
    */
    public function getDedicatedStorageName()
    {
        return $this->container['dedicatedStorageName'];
    }

    /**
    * Sets dedicatedStorageName
    *
    * @param string|null $dedicatedStorageName 云硬盘所属的专属存储池的名称。
    *
    * @return $this
    */
    public function setDedicatedStorageName($dedicatedStorageName)
    {
        $this->container['dedicatedStorageName'] = $dedicatedStorageName;
        return $this;
    }

    /**
    * Gets tags
    *  云硬盘的标签。 如果云硬盘有标签，则会有该字段，否则该字段为空。
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
    * @param map[string,string] $tags 云硬盘的标签。 如果云硬盘有标签，则会有该字段，否则该字段为空。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets wwn
    *  云硬盘挂载时的唯一标识。
    *
    * @return string|null
    */
    public function getWwn()
    {
        return $this->container['wwn'];
    }

    /**
    * Sets wwn
    *
    * @param string|null $wwn 云硬盘挂载时的唯一标识。
    *
    * @return $this
    */
    public function setWwn($wwn)
    {
        $this->container['wwn'] = $wwn;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  云硬盘上绑定的企业项目ID。 > 说明： >  > 关于企业项目ID的获取及企业项目特性的详细信息，请参见：\"[企业管理用户指南](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0123692049.html)\"。
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 云硬盘上绑定的企业项目ID。 > 说明： >  > 关于企业项目ID的获取及企业项目特性的详细信息，请参见：\"[企业管理用户指南](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0123692049.html)\"。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
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

