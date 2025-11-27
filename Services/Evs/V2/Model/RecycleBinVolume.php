<?php

namespace HuaweiCloud\SDK\Evs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RecycleBinVolume implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'recycleBinVolume';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释** 云硬盘ID。 **取值范围** 不涉及。
    * name  **参数解释** 云硬盘名称。 **取值范围** 不涉及。
    * description  **参数解释** 云硬盘描述。 **取值范围** 不涉及。
    * status  **参数解释** 云硬盘状态，具体请参见[云硬盘状态](evs_04_0040.xml)。 **取值范围** 不涉及。
    * attachments  **参数解释** 云硬盘的挂载信息。 **取值范围** 不涉及。
    * multiattach  **参数解释** 云硬盘是否共享。 **取值范围** - true：表示为共享云硬盘。 - false：表示为普通云硬盘。
    * size  **参数解释** 云硬盘大小，单位为GiB。 **取值范围** 不涉及。
    * metadata  **参数解释** 云硬盘的metadata信息 ，调用方可以添加或删除metadata信息。 **取值范围** 当前部分key在EVS服务中有业务场景含义，这部分key的描述如下： - __system__cmkid    metadata中的加密cmkid字段，与__system__encrypted配合表示需要加密，cmkid长度固定为36个字节。    请求获取密钥ID的方法请参考：\"[查询密钥列表](https://support.huaweicloud.com/api-dew/ListKeys.html)\"。      - __system__encrypted    metadata中的表示加密功能的字段，0代表不加密，1代表加密。    不指定该字段时，云硬盘的加密属性与数据源保持一致，如果不是从数据源创建的场景，则默认不加密。   - hw:passthrough    - true表示云硬盘的设备类型为SCSI类型，即允许ECS操作系统直接访问底层存储介质。支持SCSI锁命令。    - false表示云硬盘的设备类型为VBD (虚拟块存储设备 , Virtual Block Device)类型，即为默认类型，VBD只能支持简单的SCSI读写命令。    - 该字段不存在时，云硬盘默认为VBD类型。
    * bootable  **参数解释** 云硬盘是否为启动盘。 **取值范围** - true：表示为启动云硬盘。 - false：表示为非启动云硬盘。
    * tags  **参数解释** 云硬盘标签。 **取值范围** 不涉及。
    * availabilityZone  **参数解释** 云硬盘所属可用区。 **取值范围** 不涉及。
    * createdAt  **参数解释** 云硬盘创建时间。 **取值范围** 时间格式：UTC YYYY-MM-DDTHH:MM:SS.XXXXXX
    * serviceType  **参数解释** 云硬盘所属的服务类型。 **取值范围** - EVS：云硬盘。 - DSS：专属分布式存储服务。
    * updatedAt  **参数解释** 云硬盘信息被更新的时间。 **取值范围** 时间格式：UTC YYYY-MM-DDTHH:MM:SS.XXXXXX
    * volumeType  **参数解释** 云硬盘类型。 **取值范围** 目前支持\"SATA\"，\"SAS\"，\"GPSSD\"，\"SSD\"，\"ESSD\"，\"GPSSD2\"，\"ESSD2\"七种。   - \"SATA\"为普通IO云硬盘(已售罄) - \"SAS\"为高IO云硬盘 - \"GPSSD\"为通用型SSD云硬盘 - \"SSD\"为超高IO云硬盘 - \"ESSD\"为极速型SSD云硬盘 - \"GPSSD2\"为通用型SSD V2云硬盘 - \"ESSD2\"为极速型SSD V2云硬盘
    * enterpriseProjectId  **参数解释** 企业项目ID。 **取值范围** 不涉及。
    * planDeleteAt  **参数解释** 预计到期清理的时间。 **取值范围** 时间格式：UTC YYYY-MM-DDTHH:MM:SS.XXXXXX
    * preDeletedAt  **参数解释** 放入回收站的时间。 **取值范围** 时间格式：UTC YYYY-MM-DDTHH:MM:SS.XXXXXX
    * dedicatedStorageId  **参数解释** 云硬盘所属的专属存储池ID。 **取值范围** 不涉及。
    * dedicatedStorageName  **参数解释** 云硬盘所属的专属存储池的名称。 **取值范围** 不涉及。
    * volumeImageMetadata  **参数解释** 云硬盘镜像的元数据。 关于“volume_image_metadata”字段的详细说明，具体请参见：\"[查询镜像详情](https://support.huaweicloud.com/api-ims/ims_03_0703.html)\"。  **取值范围** 不涉及。
    * wwn  **参数解释** 云硬盘的唯一标识。 **取值范围** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'description' => 'string',
            'status' => 'string',
            'attachments' => '\HuaweiCloud\SDK\Evs\V2\Model\Attachment[]',
            'multiattach' => 'bool',
            'size' => 'int',
            'metadata' => 'map[string,object]',
            'bootable' => 'string',
            'tags' => 'map[string,string]',
            'availabilityZone' => 'string',
            'createdAt' => 'string',
            'serviceType' => 'string',
            'updatedAt' => 'string',
            'volumeType' => 'string',
            'enterpriseProjectId' => 'string',
            'planDeleteAt' => 'string',
            'preDeletedAt' => 'string',
            'dedicatedStorageId' => 'string',
            'dedicatedStorageName' => 'string',
            'volumeImageMetadata' => 'map[string,object]',
            'wwn' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释** 云硬盘ID。 **取值范围** 不涉及。
    * name  **参数解释** 云硬盘名称。 **取值范围** 不涉及。
    * description  **参数解释** 云硬盘描述。 **取值范围** 不涉及。
    * status  **参数解释** 云硬盘状态，具体请参见[云硬盘状态](evs_04_0040.xml)。 **取值范围** 不涉及。
    * attachments  **参数解释** 云硬盘的挂载信息。 **取值范围** 不涉及。
    * multiattach  **参数解释** 云硬盘是否共享。 **取值范围** - true：表示为共享云硬盘。 - false：表示为普通云硬盘。
    * size  **参数解释** 云硬盘大小，单位为GiB。 **取值范围** 不涉及。
    * metadata  **参数解释** 云硬盘的metadata信息 ，调用方可以添加或删除metadata信息。 **取值范围** 当前部分key在EVS服务中有业务场景含义，这部分key的描述如下： - __system__cmkid    metadata中的加密cmkid字段，与__system__encrypted配合表示需要加密，cmkid长度固定为36个字节。    请求获取密钥ID的方法请参考：\"[查询密钥列表](https://support.huaweicloud.com/api-dew/ListKeys.html)\"。      - __system__encrypted    metadata中的表示加密功能的字段，0代表不加密，1代表加密。    不指定该字段时，云硬盘的加密属性与数据源保持一致，如果不是从数据源创建的场景，则默认不加密。   - hw:passthrough    - true表示云硬盘的设备类型为SCSI类型，即允许ECS操作系统直接访问底层存储介质。支持SCSI锁命令。    - false表示云硬盘的设备类型为VBD (虚拟块存储设备 , Virtual Block Device)类型，即为默认类型，VBD只能支持简单的SCSI读写命令。    - 该字段不存在时，云硬盘默认为VBD类型。
    * bootable  **参数解释** 云硬盘是否为启动盘。 **取值范围** - true：表示为启动云硬盘。 - false：表示为非启动云硬盘。
    * tags  **参数解释** 云硬盘标签。 **取值范围** 不涉及。
    * availabilityZone  **参数解释** 云硬盘所属可用区。 **取值范围** 不涉及。
    * createdAt  **参数解释** 云硬盘创建时间。 **取值范围** 时间格式：UTC YYYY-MM-DDTHH:MM:SS.XXXXXX
    * serviceType  **参数解释** 云硬盘所属的服务类型。 **取值范围** - EVS：云硬盘。 - DSS：专属分布式存储服务。
    * updatedAt  **参数解释** 云硬盘信息被更新的时间。 **取值范围** 时间格式：UTC YYYY-MM-DDTHH:MM:SS.XXXXXX
    * volumeType  **参数解释** 云硬盘类型。 **取值范围** 目前支持\"SATA\"，\"SAS\"，\"GPSSD\"，\"SSD\"，\"ESSD\"，\"GPSSD2\"，\"ESSD2\"七种。   - \"SATA\"为普通IO云硬盘(已售罄) - \"SAS\"为高IO云硬盘 - \"GPSSD\"为通用型SSD云硬盘 - \"SSD\"为超高IO云硬盘 - \"ESSD\"为极速型SSD云硬盘 - \"GPSSD2\"为通用型SSD V2云硬盘 - \"ESSD2\"为极速型SSD V2云硬盘
    * enterpriseProjectId  **参数解释** 企业项目ID。 **取值范围** 不涉及。
    * planDeleteAt  **参数解释** 预计到期清理的时间。 **取值范围** 时间格式：UTC YYYY-MM-DDTHH:MM:SS.XXXXXX
    * preDeletedAt  **参数解释** 放入回收站的时间。 **取值范围** 时间格式：UTC YYYY-MM-DDTHH:MM:SS.XXXXXX
    * dedicatedStorageId  **参数解释** 云硬盘所属的专属存储池ID。 **取值范围** 不涉及。
    * dedicatedStorageName  **参数解释** 云硬盘所属的专属存储池的名称。 **取值范围** 不涉及。
    * volumeImageMetadata  **参数解释** 云硬盘镜像的元数据。 关于“volume_image_metadata”字段的详细说明，具体请参见：\"[查询镜像详情](https://support.huaweicloud.com/api-ims/ims_03_0703.html)\"。  **取值范围** 不涉及。
    * wwn  **参数解释** 云硬盘的唯一标识。 **取值范围** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'status' => null,
        'attachments' => null,
        'multiattach' => null,
        'size' => 'int32',
        'metadata' => null,
        'bootable' => null,
        'tags' => null,
        'availabilityZone' => null,
        'createdAt' => null,
        'serviceType' => null,
        'updatedAt' => null,
        'volumeType' => null,
        'enterpriseProjectId' => null,
        'planDeleteAt' => null,
        'preDeletedAt' => null,
        'dedicatedStorageId' => null,
        'dedicatedStorageName' => null,
        'volumeImageMetadata' => null,
        'wwn' => null
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
    * id  **参数解释** 云硬盘ID。 **取值范围** 不涉及。
    * name  **参数解释** 云硬盘名称。 **取值范围** 不涉及。
    * description  **参数解释** 云硬盘描述。 **取值范围** 不涉及。
    * status  **参数解释** 云硬盘状态，具体请参见[云硬盘状态](evs_04_0040.xml)。 **取值范围** 不涉及。
    * attachments  **参数解释** 云硬盘的挂载信息。 **取值范围** 不涉及。
    * multiattach  **参数解释** 云硬盘是否共享。 **取值范围** - true：表示为共享云硬盘。 - false：表示为普通云硬盘。
    * size  **参数解释** 云硬盘大小，单位为GiB。 **取值范围** 不涉及。
    * metadata  **参数解释** 云硬盘的metadata信息 ，调用方可以添加或删除metadata信息。 **取值范围** 当前部分key在EVS服务中有业务场景含义，这部分key的描述如下： - __system__cmkid    metadata中的加密cmkid字段，与__system__encrypted配合表示需要加密，cmkid长度固定为36个字节。    请求获取密钥ID的方法请参考：\"[查询密钥列表](https://support.huaweicloud.com/api-dew/ListKeys.html)\"。      - __system__encrypted    metadata中的表示加密功能的字段，0代表不加密，1代表加密。    不指定该字段时，云硬盘的加密属性与数据源保持一致，如果不是从数据源创建的场景，则默认不加密。   - hw:passthrough    - true表示云硬盘的设备类型为SCSI类型，即允许ECS操作系统直接访问底层存储介质。支持SCSI锁命令。    - false表示云硬盘的设备类型为VBD (虚拟块存储设备 , Virtual Block Device)类型，即为默认类型，VBD只能支持简单的SCSI读写命令。    - 该字段不存在时，云硬盘默认为VBD类型。
    * bootable  **参数解释** 云硬盘是否为启动盘。 **取值范围** - true：表示为启动云硬盘。 - false：表示为非启动云硬盘。
    * tags  **参数解释** 云硬盘标签。 **取值范围** 不涉及。
    * availabilityZone  **参数解释** 云硬盘所属可用区。 **取值范围** 不涉及。
    * createdAt  **参数解释** 云硬盘创建时间。 **取值范围** 时间格式：UTC YYYY-MM-DDTHH:MM:SS.XXXXXX
    * serviceType  **参数解释** 云硬盘所属的服务类型。 **取值范围** - EVS：云硬盘。 - DSS：专属分布式存储服务。
    * updatedAt  **参数解释** 云硬盘信息被更新的时间。 **取值范围** 时间格式：UTC YYYY-MM-DDTHH:MM:SS.XXXXXX
    * volumeType  **参数解释** 云硬盘类型。 **取值范围** 目前支持\"SATA\"，\"SAS\"，\"GPSSD\"，\"SSD\"，\"ESSD\"，\"GPSSD2\"，\"ESSD2\"七种。   - \"SATA\"为普通IO云硬盘(已售罄) - \"SAS\"为高IO云硬盘 - \"GPSSD\"为通用型SSD云硬盘 - \"SSD\"为超高IO云硬盘 - \"ESSD\"为极速型SSD云硬盘 - \"GPSSD2\"为通用型SSD V2云硬盘 - \"ESSD2\"为极速型SSD V2云硬盘
    * enterpriseProjectId  **参数解释** 企业项目ID。 **取值范围** 不涉及。
    * planDeleteAt  **参数解释** 预计到期清理的时间。 **取值范围** 时间格式：UTC YYYY-MM-DDTHH:MM:SS.XXXXXX
    * preDeletedAt  **参数解释** 放入回收站的时间。 **取值范围** 时间格式：UTC YYYY-MM-DDTHH:MM:SS.XXXXXX
    * dedicatedStorageId  **参数解释** 云硬盘所属的专属存储池ID。 **取值范围** 不涉及。
    * dedicatedStorageName  **参数解释** 云硬盘所属的专属存储池的名称。 **取值范围** 不涉及。
    * volumeImageMetadata  **参数解释** 云硬盘镜像的元数据。 关于“volume_image_metadata”字段的详细说明，具体请参见：\"[查询镜像详情](https://support.huaweicloud.com/api-ims/ims_03_0703.html)\"。  **取值范围** 不涉及。
    * wwn  **参数解释** 云硬盘的唯一标识。 **取值范围** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'status' => 'status',
            'attachments' => 'attachments',
            'multiattach' => 'multiattach',
            'size' => 'size',
            'metadata' => 'metadata',
            'bootable' => 'bootable',
            'tags' => 'tags',
            'availabilityZone' => 'availability_zone',
            'createdAt' => 'created_at',
            'serviceType' => 'service_type',
            'updatedAt' => 'updated_at',
            'volumeType' => 'volume_type',
            'enterpriseProjectId' => 'enterprise_project_id',
            'planDeleteAt' => 'plan_delete_at',
            'preDeletedAt' => 'pre_deleted_at',
            'dedicatedStorageId' => 'dedicated_storage_id',
            'dedicatedStorageName' => 'dedicated_storage_name',
            'volumeImageMetadata' => 'volume_image_metadata',
            'wwn' => 'wwn'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释** 云硬盘ID。 **取值范围** 不涉及。
    * name  **参数解释** 云硬盘名称。 **取值范围** 不涉及。
    * description  **参数解释** 云硬盘描述。 **取值范围** 不涉及。
    * status  **参数解释** 云硬盘状态，具体请参见[云硬盘状态](evs_04_0040.xml)。 **取值范围** 不涉及。
    * attachments  **参数解释** 云硬盘的挂载信息。 **取值范围** 不涉及。
    * multiattach  **参数解释** 云硬盘是否共享。 **取值范围** - true：表示为共享云硬盘。 - false：表示为普通云硬盘。
    * size  **参数解释** 云硬盘大小，单位为GiB。 **取值范围** 不涉及。
    * metadata  **参数解释** 云硬盘的metadata信息 ，调用方可以添加或删除metadata信息。 **取值范围** 当前部分key在EVS服务中有业务场景含义，这部分key的描述如下： - __system__cmkid    metadata中的加密cmkid字段，与__system__encrypted配合表示需要加密，cmkid长度固定为36个字节。    请求获取密钥ID的方法请参考：\"[查询密钥列表](https://support.huaweicloud.com/api-dew/ListKeys.html)\"。      - __system__encrypted    metadata中的表示加密功能的字段，0代表不加密，1代表加密。    不指定该字段时，云硬盘的加密属性与数据源保持一致，如果不是从数据源创建的场景，则默认不加密。   - hw:passthrough    - true表示云硬盘的设备类型为SCSI类型，即允许ECS操作系统直接访问底层存储介质。支持SCSI锁命令。    - false表示云硬盘的设备类型为VBD (虚拟块存储设备 , Virtual Block Device)类型，即为默认类型，VBD只能支持简单的SCSI读写命令。    - 该字段不存在时，云硬盘默认为VBD类型。
    * bootable  **参数解释** 云硬盘是否为启动盘。 **取值范围** - true：表示为启动云硬盘。 - false：表示为非启动云硬盘。
    * tags  **参数解释** 云硬盘标签。 **取值范围** 不涉及。
    * availabilityZone  **参数解释** 云硬盘所属可用区。 **取值范围** 不涉及。
    * createdAt  **参数解释** 云硬盘创建时间。 **取值范围** 时间格式：UTC YYYY-MM-DDTHH:MM:SS.XXXXXX
    * serviceType  **参数解释** 云硬盘所属的服务类型。 **取值范围** - EVS：云硬盘。 - DSS：专属分布式存储服务。
    * updatedAt  **参数解释** 云硬盘信息被更新的时间。 **取值范围** 时间格式：UTC YYYY-MM-DDTHH:MM:SS.XXXXXX
    * volumeType  **参数解释** 云硬盘类型。 **取值范围** 目前支持\"SATA\"，\"SAS\"，\"GPSSD\"，\"SSD\"，\"ESSD\"，\"GPSSD2\"，\"ESSD2\"七种。   - \"SATA\"为普通IO云硬盘(已售罄) - \"SAS\"为高IO云硬盘 - \"GPSSD\"为通用型SSD云硬盘 - \"SSD\"为超高IO云硬盘 - \"ESSD\"为极速型SSD云硬盘 - \"GPSSD2\"为通用型SSD V2云硬盘 - \"ESSD2\"为极速型SSD V2云硬盘
    * enterpriseProjectId  **参数解释** 企业项目ID。 **取值范围** 不涉及。
    * planDeleteAt  **参数解释** 预计到期清理的时间。 **取值范围** 时间格式：UTC YYYY-MM-DDTHH:MM:SS.XXXXXX
    * preDeletedAt  **参数解释** 放入回收站的时间。 **取值范围** 时间格式：UTC YYYY-MM-DDTHH:MM:SS.XXXXXX
    * dedicatedStorageId  **参数解释** 云硬盘所属的专属存储池ID。 **取值范围** 不涉及。
    * dedicatedStorageName  **参数解释** 云硬盘所属的专属存储池的名称。 **取值范围** 不涉及。
    * volumeImageMetadata  **参数解释** 云硬盘镜像的元数据。 关于“volume_image_metadata”字段的详细说明，具体请参见：\"[查询镜像详情](https://support.huaweicloud.com/api-ims/ims_03_0703.html)\"。  **取值范围** 不涉及。
    * wwn  **参数解释** 云硬盘的唯一标识。 **取值范围** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'status' => 'setStatus',
            'attachments' => 'setAttachments',
            'multiattach' => 'setMultiattach',
            'size' => 'setSize',
            'metadata' => 'setMetadata',
            'bootable' => 'setBootable',
            'tags' => 'setTags',
            'availabilityZone' => 'setAvailabilityZone',
            'createdAt' => 'setCreatedAt',
            'serviceType' => 'setServiceType',
            'updatedAt' => 'setUpdatedAt',
            'volumeType' => 'setVolumeType',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'planDeleteAt' => 'setPlanDeleteAt',
            'preDeletedAt' => 'setPreDeletedAt',
            'dedicatedStorageId' => 'setDedicatedStorageId',
            'dedicatedStorageName' => 'setDedicatedStorageName',
            'volumeImageMetadata' => 'setVolumeImageMetadata',
            'wwn' => 'setWwn'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释** 云硬盘ID。 **取值范围** 不涉及。
    * name  **参数解释** 云硬盘名称。 **取值范围** 不涉及。
    * description  **参数解释** 云硬盘描述。 **取值范围** 不涉及。
    * status  **参数解释** 云硬盘状态，具体请参见[云硬盘状态](evs_04_0040.xml)。 **取值范围** 不涉及。
    * attachments  **参数解释** 云硬盘的挂载信息。 **取值范围** 不涉及。
    * multiattach  **参数解释** 云硬盘是否共享。 **取值范围** - true：表示为共享云硬盘。 - false：表示为普通云硬盘。
    * size  **参数解释** 云硬盘大小，单位为GiB。 **取值范围** 不涉及。
    * metadata  **参数解释** 云硬盘的metadata信息 ，调用方可以添加或删除metadata信息。 **取值范围** 当前部分key在EVS服务中有业务场景含义，这部分key的描述如下： - __system__cmkid    metadata中的加密cmkid字段，与__system__encrypted配合表示需要加密，cmkid长度固定为36个字节。    请求获取密钥ID的方法请参考：\"[查询密钥列表](https://support.huaweicloud.com/api-dew/ListKeys.html)\"。      - __system__encrypted    metadata中的表示加密功能的字段，0代表不加密，1代表加密。    不指定该字段时，云硬盘的加密属性与数据源保持一致，如果不是从数据源创建的场景，则默认不加密。   - hw:passthrough    - true表示云硬盘的设备类型为SCSI类型，即允许ECS操作系统直接访问底层存储介质。支持SCSI锁命令。    - false表示云硬盘的设备类型为VBD (虚拟块存储设备 , Virtual Block Device)类型，即为默认类型，VBD只能支持简单的SCSI读写命令。    - 该字段不存在时，云硬盘默认为VBD类型。
    * bootable  **参数解释** 云硬盘是否为启动盘。 **取值范围** - true：表示为启动云硬盘。 - false：表示为非启动云硬盘。
    * tags  **参数解释** 云硬盘标签。 **取值范围** 不涉及。
    * availabilityZone  **参数解释** 云硬盘所属可用区。 **取值范围** 不涉及。
    * createdAt  **参数解释** 云硬盘创建时间。 **取值范围** 时间格式：UTC YYYY-MM-DDTHH:MM:SS.XXXXXX
    * serviceType  **参数解释** 云硬盘所属的服务类型。 **取值范围** - EVS：云硬盘。 - DSS：专属分布式存储服务。
    * updatedAt  **参数解释** 云硬盘信息被更新的时间。 **取值范围** 时间格式：UTC YYYY-MM-DDTHH:MM:SS.XXXXXX
    * volumeType  **参数解释** 云硬盘类型。 **取值范围** 目前支持\"SATA\"，\"SAS\"，\"GPSSD\"，\"SSD\"，\"ESSD\"，\"GPSSD2\"，\"ESSD2\"七种。   - \"SATA\"为普通IO云硬盘(已售罄) - \"SAS\"为高IO云硬盘 - \"GPSSD\"为通用型SSD云硬盘 - \"SSD\"为超高IO云硬盘 - \"ESSD\"为极速型SSD云硬盘 - \"GPSSD2\"为通用型SSD V2云硬盘 - \"ESSD2\"为极速型SSD V2云硬盘
    * enterpriseProjectId  **参数解释** 企业项目ID。 **取值范围** 不涉及。
    * planDeleteAt  **参数解释** 预计到期清理的时间。 **取值范围** 时间格式：UTC YYYY-MM-DDTHH:MM:SS.XXXXXX
    * preDeletedAt  **参数解释** 放入回收站的时间。 **取值范围** 时间格式：UTC YYYY-MM-DDTHH:MM:SS.XXXXXX
    * dedicatedStorageId  **参数解释** 云硬盘所属的专属存储池ID。 **取值范围** 不涉及。
    * dedicatedStorageName  **参数解释** 云硬盘所属的专属存储池的名称。 **取值范围** 不涉及。
    * volumeImageMetadata  **参数解释** 云硬盘镜像的元数据。 关于“volume_image_metadata”字段的详细说明，具体请参见：\"[查询镜像详情](https://support.huaweicloud.com/api-ims/ims_03_0703.html)\"。  **取值范围** 不涉及。
    * wwn  **参数解释** 云硬盘的唯一标识。 **取值范围** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'status' => 'getStatus',
            'attachments' => 'getAttachments',
            'multiattach' => 'getMultiattach',
            'size' => 'getSize',
            'metadata' => 'getMetadata',
            'bootable' => 'getBootable',
            'tags' => 'getTags',
            'availabilityZone' => 'getAvailabilityZone',
            'createdAt' => 'getCreatedAt',
            'serviceType' => 'getServiceType',
            'updatedAt' => 'getUpdatedAt',
            'volumeType' => 'getVolumeType',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'planDeleteAt' => 'getPlanDeleteAt',
            'preDeletedAt' => 'getPreDeletedAt',
            'dedicatedStorageId' => 'getDedicatedStorageId',
            'dedicatedStorageName' => 'getDedicatedStorageName',
            'volumeImageMetadata' => 'getVolumeImageMetadata',
            'wwn' => 'getWwn'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['attachments'] = isset($data['attachments']) ? $data['attachments'] : null;
        $this->container['multiattach'] = isset($data['multiattach']) ? $data['multiattach'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['bootable'] = isset($data['bootable']) ? $data['bootable'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['serviceType'] = isset($data['serviceType']) ? $data['serviceType'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['volumeType'] = isset($data['volumeType']) ? $data['volumeType'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['planDeleteAt'] = isset($data['planDeleteAt']) ? $data['planDeleteAt'] : null;
        $this->container['preDeletedAt'] = isset($data['preDeletedAt']) ? $data['preDeletedAt'] : null;
        $this->container['dedicatedStorageId'] = isset($data['dedicatedStorageId']) ? $data['dedicatedStorageId'] : null;
        $this->container['dedicatedStorageName'] = isset($data['dedicatedStorageName']) ? $data['dedicatedStorageName'] : null;
        $this->container['volumeImageMetadata'] = isset($data['volumeImageMetadata']) ? $data['volumeImageMetadata'] : null;
        $this->container['wwn'] = isset($data['wwn']) ? $data['wwn'] : null;
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
    * Gets id
    *  **参数解释** 云硬盘ID。 **取值范围** 不涉及。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id **参数解释** 云硬盘ID。 **取值范围** 不涉及。
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
    *  **参数解释** 云硬盘名称。 **取值范围** 不涉及。
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
    * @param string|null $name **参数解释** 云硬盘名称。 **取值范围** 不涉及。
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
    *  **参数解释** 云硬盘描述。 **取值范围** 不涉及。
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
    * @param string|null $description **参数解释** 云硬盘描述。 **取值范围** 不涉及。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释** 云硬盘状态，具体请参见[云硬盘状态](evs_04_0040.xml)。 **取值范围** 不涉及。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status **参数解释** 云硬盘状态，具体请参见[云硬盘状态](evs_04_0040.xml)。 **取值范围** 不涉及。
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
    *  **参数解释** 云硬盘的挂载信息。 **取值范围** 不涉及。
    *
    * @return \HuaweiCloud\SDK\Evs\V2\Model\Attachment[]|null
    */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /**
    * Sets attachments
    *
    * @param \HuaweiCloud\SDK\Evs\V2\Model\Attachment[]|null $attachments **参数解释** 云硬盘的挂载信息。 **取值范围** 不涉及。
    *
    * @return $this
    */
    public function setAttachments($attachments)
    {
        $this->container['attachments'] = $attachments;
        return $this;
    }

    /**
    * Gets multiattach
    *  **参数解释** 云硬盘是否共享。 **取值范围** - true：表示为共享云硬盘。 - false：表示为普通云硬盘。
    *
    * @return bool|null
    */
    public function getMultiattach()
    {
        return $this->container['multiattach'];
    }

    /**
    * Sets multiattach
    *
    * @param bool|null $multiattach **参数解释** 云硬盘是否共享。 **取值范围** - true：表示为共享云硬盘。 - false：表示为普通云硬盘。
    *
    * @return $this
    */
    public function setMultiattach($multiattach)
    {
        $this->container['multiattach'] = $multiattach;
        return $this;
    }

    /**
    * Gets size
    *  **参数解释** 云硬盘大小，单位为GiB。 **取值范围** 不涉及。
    *
    * @return int|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int|null $size **参数解释** 云硬盘大小，单位为GiB。 **取值范围** 不涉及。
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets metadata
    *  **参数解释** 云硬盘的metadata信息 ，调用方可以添加或删除metadata信息。 **取值范围** 当前部分key在EVS服务中有业务场景含义，这部分key的描述如下： - __system__cmkid    metadata中的加密cmkid字段，与__system__encrypted配合表示需要加密，cmkid长度固定为36个字节。    请求获取密钥ID的方法请参考：\"[查询密钥列表](https://support.huaweicloud.com/api-dew/ListKeys.html)\"。      - __system__encrypted    metadata中的表示加密功能的字段，0代表不加密，1代表加密。    不指定该字段时，云硬盘的加密属性与数据源保持一致，如果不是从数据源创建的场景，则默认不加密。   - hw:passthrough    - true表示云硬盘的设备类型为SCSI类型，即允许ECS操作系统直接访问底层存储介质。支持SCSI锁命令。    - false表示云硬盘的设备类型为VBD (虚拟块存储设备 , Virtual Block Device)类型，即为默认类型，VBD只能支持简单的SCSI读写命令。    - 该字段不存在时，云硬盘默认为VBD类型。
    *
    * @return map[string,object]|null
    */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
    * Sets metadata
    *
    * @param map[string,object]|null $metadata **参数解释** 云硬盘的metadata信息 ，调用方可以添加或删除metadata信息。 **取值范围** 当前部分key在EVS服务中有业务场景含义，这部分key的描述如下： - __system__cmkid    metadata中的加密cmkid字段，与__system__encrypted配合表示需要加密，cmkid长度固定为36个字节。    请求获取密钥ID的方法请参考：\"[查询密钥列表](https://support.huaweicloud.com/api-dew/ListKeys.html)\"。      - __system__encrypted    metadata中的表示加密功能的字段，0代表不加密，1代表加密。    不指定该字段时，云硬盘的加密属性与数据源保持一致，如果不是从数据源创建的场景，则默认不加密。   - hw:passthrough    - true表示云硬盘的设备类型为SCSI类型，即允许ECS操作系统直接访问底层存储介质。支持SCSI锁命令。    - false表示云硬盘的设备类型为VBD (虚拟块存储设备 , Virtual Block Device)类型，即为默认类型，VBD只能支持简单的SCSI读写命令。    - 该字段不存在时，云硬盘默认为VBD类型。
    *
    * @return $this
    */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;
        return $this;
    }

    /**
    * Gets bootable
    *  **参数解释** 云硬盘是否为启动盘。 **取值范围** - true：表示为启动云硬盘。 - false：表示为非启动云硬盘。
    *
    * @return string|null
    */
    public function getBootable()
    {
        return $this->container['bootable'];
    }

    /**
    * Sets bootable
    *
    * @param string|null $bootable **参数解释** 云硬盘是否为启动盘。 **取值范围** - true：表示为启动云硬盘。 - false：表示为非启动云硬盘。
    *
    * @return $this
    */
    public function setBootable($bootable)
    {
        $this->container['bootable'] = $bootable;
        return $this;
    }

    /**
    * Gets tags
    *  **参数解释** 云硬盘标签。 **取值范围** 不涉及。
    *
    * @return map[string,string]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param map[string,string]|null $tags **参数解释** 云硬盘标签。 **取值范围** 不涉及。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets availabilityZone
    *  **参数解释** 云硬盘所属可用区。 **取值范围** 不涉及。
    *
    * @return string|null
    */
    public function getAvailabilityZone()
    {
        return $this->container['availabilityZone'];
    }

    /**
    * Sets availabilityZone
    *
    * @param string|null $availabilityZone **参数解释** 云硬盘所属可用区。 **取值范围** 不涉及。
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
        return $this;
    }

    /**
    * Gets createdAt
    *  **参数解释** 云硬盘创建时间。 **取值范围** 时间格式：UTC YYYY-MM-DDTHH:MM:SS.XXXXXX
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt **参数解释** 云硬盘创建时间。 **取值范围** 时间格式：UTC YYYY-MM-DDTHH:MM:SS.XXXXXX
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets serviceType
    *  **参数解释** 云硬盘所属的服务类型。 **取值范围** - EVS：云硬盘。 - DSS：专属分布式存储服务。
    *
    * @return string|null
    */
    public function getServiceType()
    {
        return $this->container['serviceType'];
    }

    /**
    * Sets serviceType
    *
    * @param string|null $serviceType **参数解释** 云硬盘所属的服务类型。 **取值范围** - EVS：云硬盘。 - DSS：专属分布式存储服务。
    *
    * @return $this
    */
    public function setServiceType($serviceType)
    {
        $this->container['serviceType'] = $serviceType;
        return $this;
    }

    /**
    * Gets updatedAt
    *  **参数解释** 云硬盘信息被更新的时间。 **取值范围** 时间格式：UTC YYYY-MM-DDTHH:MM:SS.XXXXXX
    *
    * @return string|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string|null $updatedAt **参数解释** 云硬盘信息被更新的时间。 **取值范围** 时间格式：UTC YYYY-MM-DDTHH:MM:SS.XXXXXX
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets volumeType
    *  **参数解释** 云硬盘类型。 **取值范围** 目前支持\"SATA\"，\"SAS\"，\"GPSSD\"，\"SSD\"，\"ESSD\"，\"GPSSD2\"，\"ESSD2\"七种。   - \"SATA\"为普通IO云硬盘(已售罄) - \"SAS\"为高IO云硬盘 - \"GPSSD\"为通用型SSD云硬盘 - \"SSD\"为超高IO云硬盘 - \"ESSD\"为极速型SSD云硬盘 - \"GPSSD2\"为通用型SSD V2云硬盘 - \"ESSD2\"为极速型SSD V2云硬盘
    *
    * @return string|null
    */
    public function getVolumeType()
    {
        return $this->container['volumeType'];
    }

    /**
    * Sets volumeType
    *
    * @param string|null $volumeType **参数解释** 云硬盘类型。 **取值范围** 目前支持\"SATA\"，\"SAS\"，\"GPSSD\"，\"SSD\"，\"ESSD\"，\"GPSSD2\"，\"ESSD2\"七种。   - \"SATA\"为普通IO云硬盘(已售罄) - \"SAS\"为高IO云硬盘 - \"GPSSD\"为通用型SSD云硬盘 - \"SSD\"为超高IO云硬盘 - \"ESSD\"为极速型SSD云硬盘 - \"GPSSD2\"为通用型SSD V2云硬盘 - \"ESSD2\"为极速型SSD V2云硬盘
    *
    * @return $this
    */
    public function setVolumeType($volumeType)
    {
        $this->container['volumeType'] = $volumeType;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  **参数解释** 企业项目ID。 **取值范围** 不涉及。
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
    * @param string|null $enterpriseProjectId **参数解释** 企业项目ID。 **取值范围** 不涉及。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets planDeleteAt
    *  **参数解释** 预计到期清理的时间。 **取值范围** 时间格式：UTC YYYY-MM-DDTHH:MM:SS.XXXXXX
    *
    * @return string|null
    */
    public function getPlanDeleteAt()
    {
        return $this->container['planDeleteAt'];
    }

    /**
    * Sets planDeleteAt
    *
    * @param string|null $planDeleteAt **参数解释** 预计到期清理的时间。 **取值范围** 时间格式：UTC YYYY-MM-DDTHH:MM:SS.XXXXXX
    *
    * @return $this
    */
    public function setPlanDeleteAt($planDeleteAt)
    {
        $this->container['planDeleteAt'] = $planDeleteAt;
        return $this;
    }

    /**
    * Gets preDeletedAt
    *  **参数解释** 放入回收站的时间。 **取值范围** 时间格式：UTC YYYY-MM-DDTHH:MM:SS.XXXXXX
    *
    * @return string|null
    */
    public function getPreDeletedAt()
    {
        return $this->container['preDeletedAt'];
    }

    /**
    * Sets preDeletedAt
    *
    * @param string|null $preDeletedAt **参数解释** 放入回收站的时间。 **取值范围** 时间格式：UTC YYYY-MM-DDTHH:MM:SS.XXXXXX
    *
    * @return $this
    */
    public function setPreDeletedAt($preDeletedAt)
    {
        $this->container['preDeletedAt'] = $preDeletedAt;
        return $this;
    }

    /**
    * Gets dedicatedStorageId
    *  **参数解释** 云硬盘所属的专属存储池ID。 **取值范围** 不涉及。
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
    * @param string|null $dedicatedStorageId **参数解释** 云硬盘所属的专属存储池ID。 **取值范围** 不涉及。
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
    *  **参数解释** 云硬盘所属的专属存储池的名称。 **取值范围** 不涉及。
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
    * @param string|null $dedicatedStorageName **参数解释** 云硬盘所属的专属存储池的名称。 **取值范围** 不涉及。
    *
    * @return $this
    */
    public function setDedicatedStorageName($dedicatedStorageName)
    {
        $this->container['dedicatedStorageName'] = $dedicatedStorageName;
        return $this;
    }

    /**
    * Gets volumeImageMetadata
    *  **参数解释** 云硬盘镜像的元数据。 关于“volume_image_metadata”字段的详细说明，具体请参见：\"[查询镜像详情](https://support.huaweicloud.com/api-ims/ims_03_0703.html)\"。  **取值范围** 不涉及。
    *
    * @return map[string,object]|null
    */
    public function getVolumeImageMetadata()
    {
        return $this->container['volumeImageMetadata'];
    }

    /**
    * Sets volumeImageMetadata
    *
    * @param map[string,object]|null $volumeImageMetadata **参数解释** 云硬盘镜像的元数据。 关于“volume_image_metadata”字段的详细说明，具体请参见：\"[查询镜像详情](https://support.huaweicloud.com/api-ims/ims_03_0703.html)\"。  **取值范围** 不涉及。
    *
    * @return $this
    */
    public function setVolumeImageMetadata($volumeImageMetadata)
    {
        $this->container['volumeImageMetadata'] = $volumeImageMetadata;
        return $this;
    }

    /**
    * Gets wwn
    *  **参数解释** 云硬盘的唯一标识。 **取值范围** 不涉及。
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
    * @param string|null $wwn **参数解释** 云硬盘的唯一标识。 **取值范围** 不涉及。
    *
    * @return $this
    */
    public function setWwn($wwn)
    {
        $this->container['wwn'] = $wwn;
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

