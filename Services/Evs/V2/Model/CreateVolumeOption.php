<?php

namespace HuaweiCloud\SDK\Evs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateVolumeOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateVolumeOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * availabilityZone  指定要创建云硬盘的可用区。 获取方法请参见\"[获取可用区](https://apiexplorer.developer.huaweicloud.com/apiexplorer/sdk?product=EVS&api=CinderListAvailabilityZones)\"。
    * backupId  备份ID，从备份创建云硬盘时为必选。
    * count  批量创云硬盘的个数。如果无该参数，表明只创建1个云硬盘，目前最多支持批量创建100个。 从备份创建云硬盘时，不支持批量创建，数量只能为“1”。  如果发送请求时，将参数值设置为小数，则默认取小数点前的整数。
    * description  云硬盘的描述。最大支持255个字节。
    * enterpriseProjectId  企业项目ID。创建云硬盘时，给云硬盘绑定企业项目ID。
    * imageRef  镜像ID，指定该参数表示创建云硬盘方式为从镜像创建云硬盘。
    * metadata  创建云硬盘的metadata信息     可选参数如下:    [\\_\\_system\\_\\_cmkid]   metadata中的加密cmkid字段，与\\_\\_system\\_\\_encrypted配合表示需要加密，cmkid长度固定为36个字节。 > 说明： >  > 请求获取密钥ID的方法请参考：\"[查询密钥列表](https://support.huaweicloud.com/api-dew/ListKeys.html)\"。   [\\_\\_system\\_\\_encrypted]   metadata中的表示加密功能的字段,0代表不加密,1代表加密。不指定该字段时,云硬盘的加密属性与数据源保持一致,如果不是从数据源创建的场景,则默认不加密。    [full_clone]   从快照创建云硬盘时，如需使用link克隆方式，请指定该字段的值为0。    [hw:passthrough]    * true表示云硬盘的设备类型为SCSI类型，即允许ECS操作系统直接访问底层存储介质。支持SCSI锁命令。   * false表示云硬盘的设备类型为VBD (虚拟块存储设备 , Virtual Block Device)类型，即为默认类型，VBD只能支持简单的SCSI读写命令。   * 该字段不存在时，云硬盘默认为VBD类型。    [create\\_for\\_volume\\_id]  * true表示接口响应中会通过volume_ids字段返回本次创建的云硬盘ID。 * false表示接口响应中不会返回本次创建的云硬盘ID。  该字段不存在时，默认为false。
    * multiattach  是否为共享云硬盘。true为共享盘，false为普通云硬盘。
    * name  云硬盘名称。 如果为创建单个云硬盘，name为云硬盘名称。最大支持255个字节。 创建的云硬盘数量（count字段对应的值）大于1时，为区分不同云硬盘，创建过程中系统会自动在名称后加“-0000”的类似标记。例如：volume-0001、volume-0002。最大支持250个字节。
    * size  云硬盘大小，单位为GB，其限制如下： 系统盘：1GB-1024GB 数据盘：10GB-32768GB 创建空白云硬盘和从 镜像/快照 创建云硬盘时，size为必选，且云硬盘大小不能小于 镜像/快照 大小。 从备份创建云硬盘时，size为可选，不指定size时，云硬盘大小和备份大小一致。
    * snapshotId  快照ID，指定该参数表示创建云硬盘方式为从快照创建云硬盘
    * volumeType  云硬盘类型。  目前支持\"SATA\"，\"SAS\"，\"GPSSD\"，\"SSD\"和\"ESSD\"五种。  - \"SATA\"为普通IO云硬盘(已售罄) - \"SAS\"为高IO云硬盘 - \"GPSSD\"为通用型SSD云硬盘 - \"SSD\"为超高IO云硬盘 - \"ESSD\"为极速IO云硬盘 当指定的云硬盘类型在avaliability_zone内不存在时，则创建云硬盘失败。  说明： 从快照创建云硬盘时，volume_type字段必须和快照源云硬盘保持一致。 了解不同磁盘类型的详细信息，请参见 [磁盘类型及性能介绍](https://support.huaweicloud.com/productdesc-evs/zh-cn_topic_0044524691.html)。 获取region可用的卷类型，请参见[查询云硬盘类型列表](https://apiexplorer.developer.huaweicloud.com/apiexplorer/doc?product=EVS&api=CinderListVolumeTypes)
    * tags  云硬盘标签信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'availabilityZone' => 'string',
            'backupId' => 'string',
            'count' => 'int',
            'description' => 'string',
            'enterpriseProjectId' => 'string',
            'imageRef' => 'string',
            'metadata' => 'map[string,string]',
            'multiattach' => 'bool',
            'name' => 'string',
            'size' => 'int',
            'snapshotId' => 'string',
            'volumeType' => 'string',
            'tags' => 'map[string,string]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * availabilityZone  指定要创建云硬盘的可用区。 获取方法请参见\"[获取可用区](https://apiexplorer.developer.huaweicloud.com/apiexplorer/sdk?product=EVS&api=CinderListAvailabilityZones)\"。
    * backupId  备份ID，从备份创建云硬盘时为必选。
    * count  批量创云硬盘的个数。如果无该参数，表明只创建1个云硬盘，目前最多支持批量创建100个。 从备份创建云硬盘时，不支持批量创建，数量只能为“1”。  如果发送请求时，将参数值设置为小数，则默认取小数点前的整数。
    * description  云硬盘的描述。最大支持255个字节。
    * enterpriseProjectId  企业项目ID。创建云硬盘时，给云硬盘绑定企业项目ID。
    * imageRef  镜像ID，指定该参数表示创建云硬盘方式为从镜像创建云硬盘。
    * metadata  创建云硬盘的metadata信息     可选参数如下:    [\\_\\_system\\_\\_cmkid]   metadata中的加密cmkid字段，与\\_\\_system\\_\\_encrypted配合表示需要加密，cmkid长度固定为36个字节。 > 说明： >  > 请求获取密钥ID的方法请参考：\"[查询密钥列表](https://support.huaweicloud.com/api-dew/ListKeys.html)\"。   [\\_\\_system\\_\\_encrypted]   metadata中的表示加密功能的字段,0代表不加密,1代表加密。不指定该字段时,云硬盘的加密属性与数据源保持一致,如果不是从数据源创建的场景,则默认不加密。    [full_clone]   从快照创建云硬盘时，如需使用link克隆方式，请指定该字段的值为0。    [hw:passthrough]    * true表示云硬盘的设备类型为SCSI类型，即允许ECS操作系统直接访问底层存储介质。支持SCSI锁命令。   * false表示云硬盘的设备类型为VBD (虚拟块存储设备 , Virtual Block Device)类型，即为默认类型，VBD只能支持简单的SCSI读写命令。   * 该字段不存在时，云硬盘默认为VBD类型。    [create\\_for\\_volume\\_id]  * true表示接口响应中会通过volume_ids字段返回本次创建的云硬盘ID。 * false表示接口响应中不会返回本次创建的云硬盘ID。  该字段不存在时，默认为false。
    * multiattach  是否为共享云硬盘。true为共享盘，false为普通云硬盘。
    * name  云硬盘名称。 如果为创建单个云硬盘，name为云硬盘名称。最大支持255个字节。 创建的云硬盘数量（count字段对应的值）大于1时，为区分不同云硬盘，创建过程中系统会自动在名称后加“-0000”的类似标记。例如：volume-0001、volume-0002。最大支持250个字节。
    * size  云硬盘大小，单位为GB，其限制如下： 系统盘：1GB-1024GB 数据盘：10GB-32768GB 创建空白云硬盘和从 镜像/快照 创建云硬盘时，size为必选，且云硬盘大小不能小于 镜像/快照 大小。 从备份创建云硬盘时，size为可选，不指定size时，云硬盘大小和备份大小一致。
    * snapshotId  快照ID，指定该参数表示创建云硬盘方式为从快照创建云硬盘
    * volumeType  云硬盘类型。  目前支持\"SATA\"，\"SAS\"，\"GPSSD\"，\"SSD\"和\"ESSD\"五种。  - \"SATA\"为普通IO云硬盘(已售罄) - \"SAS\"为高IO云硬盘 - \"GPSSD\"为通用型SSD云硬盘 - \"SSD\"为超高IO云硬盘 - \"ESSD\"为极速IO云硬盘 当指定的云硬盘类型在avaliability_zone内不存在时，则创建云硬盘失败。  说明： 从快照创建云硬盘时，volume_type字段必须和快照源云硬盘保持一致。 了解不同磁盘类型的详细信息，请参见 [磁盘类型及性能介绍](https://support.huaweicloud.com/productdesc-evs/zh-cn_topic_0044524691.html)。 获取region可用的卷类型，请参见[查询云硬盘类型列表](https://apiexplorer.developer.huaweicloud.com/apiexplorer/doc?product=EVS&api=CinderListVolumeTypes)
    * tags  云硬盘标签信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'availabilityZone' => null,
        'backupId' => null,
        'count' => 'int32',
        'description' => null,
        'enterpriseProjectId' => null,
        'imageRef' => null,
        'metadata' => null,
        'multiattach' => null,
        'name' => null,
        'size' => 'int32',
        'snapshotId' => null,
        'volumeType' => null,
        'tags' => null
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
    * availabilityZone  指定要创建云硬盘的可用区。 获取方法请参见\"[获取可用区](https://apiexplorer.developer.huaweicloud.com/apiexplorer/sdk?product=EVS&api=CinderListAvailabilityZones)\"。
    * backupId  备份ID，从备份创建云硬盘时为必选。
    * count  批量创云硬盘的个数。如果无该参数，表明只创建1个云硬盘，目前最多支持批量创建100个。 从备份创建云硬盘时，不支持批量创建，数量只能为“1”。  如果发送请求时，将参数值设置为小数，则默认取小数点前的整数。
    * description  云硬盘的描述。最大支持255个字节。
    * enterpriseProjectId  企业项目ID。创建云硬盘时，给云硬盘绑定企业项目ID。
    * imageRef  镜像ID，指定该参数表示创建云硬盘方式为从镜像创建云硬盘。
    * metadata  创建云硬盘的metadata信息     可选参数如下:    [\\_\\_system\\_\\_cmkid]   metadata中的加密cmkid字段，与\\_\\_system\\_\\_encrypted配合表示需要加密，cmkid长度固定为36个字节。 > 说明： >  > 请求获取密钥ID的方法请参考：\"[查询密钥列表](https://support.huaweicloud.com/api-dew/ListKeys.html)\"。   [\\_\\_system\\_\\_encrypted]   metadata中的表示加密功能的字段,0代表不加密,1代表加密。不指定该字段时,云硬盘的加密属性与数据源保持一致,如果不是从数据源创建的场景,则默认不加密。    [full_clone]   从快照创建云硬盘时，如需使用link克隆方式，请指定该字段的值为0。    [hw:passthrough]    * true表示云硬盘的设备类型为SCSI类型，即允许ECS操作系统直接访问底层存储介质。支持SCSI锁命令。   * false表示云硬盘的设备类型为VBD (虚拟块存储设备 , Virtual Block Device)类型，即为默认类型，VBD只能支持简单的SCSI读写命令。   * 该字段不存在时，云硬盘默认为VBD类型。    [create\\_for\\_volume\\_id]  * true表示接口响应中会通过volume_ids字段返回本次创建的云硬盘ID。 * false表示接口响应中不会返回本次创建的云硬盘ID。  该字段不存在时，默认为false。
    * multiattach  是否为共享云硬盘。true为共享盘，false为普通云硬盘。
    * name  云硬盘名称。 如果为创建单个云硬盘，name为云硬盘名称。最大支持255个字节。 创建的云硬盘数量（count字段对应的值）大于1时，为区分不同云硬盘，创建过程中系统会自动在名称后加“-0000”的类似标记。例如：volume-0001、volume-0002。最大支持250个字节。
    * size  云硬盘大小，单位为GB，其限制如下： 系统盘：1GB-1024GB 数据盘：10GB-32768GB 创建空白云硬盘和从 镜像/快照 创建云硬盘时，size为必选，且云硬盘大小不能小于 镜像/快照 大小。 从备份创建云硬盘时，size为可选，不指定size时，云硬盘大小和备份大小一致。
    * snapshotId  快照ID，指定该参数表示创建云硬盘方式为从快照创建云硬盘
    * volumeType  云硬盘类型。  目前支持\"SATA\"，\"SAS\"，\"GPSSD\"，\"SSD\"和\"ESSD\"五种。  - \"SATA\"为普通IO云硬盘(已售罄) - \"SAS\"为高IO云硬盘 - \"GPSSD\"为通用型SSD云硬盘 - \"SSD\"为超高IO云硬盘 - \"ESSD\"为极速IO云硬盘 当指定的云硬盘类型在avaliability_zone内不存在时，则创建云硬盘失败。  说明： 从快照创建云硬盘时，volume_type字段必须和快照源云硬盘保持一致。 了解不同磁盘类型的详细信息，请参见 [磁盘类型及性能介绍](https://support.huaweicloud.com/productdesc-evs/zh-cn_topic_0044524691.html)。 获取region可用的卷类型，请参见[查询云硬盘类型列表](https://apiexplorer.developer.huaweicloud.com/apiexplorer/doc?product=EVS&api=CinderListVolumeTypes)
    * tags  云硬盘标签信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'availabilityZone' => 'availability_zone',
            'backupId' => 'backup_id',
            'count' => 'count',
            'description' => 'description',
            'enterpriseProjectId' => 'enterprise_project_id',
            'imageRef' => 'imageRef',
            'metadata' => 'metadata',
            'multiattach' => 'multiattach',
            'name' => 'name',
            'size' => 'size',
            'snapshotId' => 'snapshot_id',
            'volumeType' => 'volume_type',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * availabilityZone  指定要创建云硬盘的可用区。 获取方法请参见\"[获取可用区](https://apiexplorer.developer.huaweicloud.com/apiexplorer/sdk?product=EVS&api=CinderListAvailabilityZones)\"。
    * backupId  备份ID，从备份创建云硬盘时为必选。
    * count  批量创云硬盘的个数。如果无该参数，表明只创建1个云硬盘，目前最多支持批量创建100个。 从备份创建云硬盘时，不支持批量创建，数量只能为“1”。  如果发送请求时，将参数值设置为小数，则默认取小数点前的整数。
    * description  云硬盘的描述。最大支持255个字节。
    * enterpriseProjectId  企业项目ID。创建云硬盘时，给云硬盘绑定企业项目ID。
    * imageRef  镜像ID，指定该参数表示创建云硬盘方式为从镜像创建云硬盘。
    * metadata  创建云硬盘的metadata信息     可选参数如下:    [\\_\\_system\\_\\_cmkid]   metadata中的加密cmkid字段，与\\_\\_system\\_\\_encrypted配合表示需要加密，cmkid长度固定为36个字节。 > 说明： >  > 请求获取密钥ID的方法请参考：\"[查询密钥列表](https://support.huaweicloud.com/api-dew/ListKeys.html)\"。   [\\_\\_system\\_\\_encrypted]   metadata中的表示加密功能的字段,0代表不加密,1代表加密。不指定该字段时,云硬盘的加密属性与数据源保持一致,如果不是从数据源创建的场景,则默认不加密。    [full_clone]   从快照创建云硬盘时，如需使用link克隆方式，请指定该字段的值为0。    [hw:passthrough]    * true表示云硬盘的设备类型为SCSI类型，即允许ECS操作系统直接访问底层存储介质。支持SCSI锁命令。   * false表示云硬盘的设备类型为VBD (虚拟块存储设备 , Virtual Block Device)类型，即为默认类型，VBD只能支持简单的SCSI读写命令。   * 该字段不存在时，云硬盘默认为VBD类型。    [create\\_for\\_volume\\_id]  * true表示接口响应中会通过volume_ids字段返回本次创建的云硬盘ID。 * false表示接口响应中不会返回本次创建的云硬盘ID。  该字段不存在时，默认为false。
    * multiattach  是否为共享云硬盘。true为共享盘，false为普通云硬盘。
    * name  云硬盘名称。 如果为创建单个云硬盘，name为云硬盘名称。最大支持255个字节。 创建的云硬盘数量（count字段对应的值）大于1时，为区分不同云硬盘，创建过程中系统会自动在名称后加“-0000”的类似标记。例如：volume-0001、volume-0002。最大支持250个字节。
    * size  云硬盘大小，单位为GB，其限制如下： 系统盘：1GB-1024GB 数据盘：10GB-32768GB 创建空白云硬盘和从 镜像/快照 创建云硬盘时，size为必选，且云硬盘大小不能小于 镜像/快照 大小。 从备份创建云硬盘时，size为可选，不指定size时，云硬盘大小和备份大小一致。
    * snapshotId  快照ID，指定该参数表示创建云硬盘方式为从快照创建云硬盘
    * volumeType  云硬盘类型。  目前支持\"SATA\"，\"SAS\"，\"GPSSD\"，\"SSD\"和\"ESSD\"五种。  - \"SATA\"为普通IO云硬盘(已售罄) - \"SAS\"为高IO云硬盘 - \"GPSSD\"为通用型SSD云硬盘 - \"SSD\"为超高IO云硬盘 - \"ESSD\"为极速IO云硬盘 当指定的云硬盘类型在avaliability_zone内不存在时，则创建云硬盘失败。  说明： 从快照创建云硬盘时，volume_type字段必须和快照源云硬盘保持一致。 了解不同磁盘类型的详细信息，请参见 [磁盘类型及性能介绍](https://support.huaweicloud.com/productdesc-evs/zh-cn_topic_0044524691.html)。 获取region可用的卷类型，请参见[查询云硬盘类型列表](https://apiexplorer.developer.huaweicloud.com/apiexplorer/doc?product=EVS&api=CinderListVolumeTypes)
    * tags  云硬盘标签信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'availabilityZone' => 'setAvailabilityZone',
            'backupId' => 'setBackupId',
            'count' => 'setCount',
            'description' => 'setDescription',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'imageRef' => 'setImageRef',
            'metadata' => 'setMetadata',
            'multiattach' => 'setMultiattach',
            'name' => 'setName',
            'size' => 'setSize',
            'snapshotId' => 'setSnapshotId',
            'volumeType' => 'setVolumeType',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * availabilityZone  指定要创建云硬盘的可用区。 获取方法请参见\"[获取可用区](https://apiexplorer.developer.huaweicloud.com/apiexplorer/sdk?product=EVS&api=CinderListAvailabilityZones)\"。
    * backupId  备份ID，从备份创建云硬盘时为必选。
    * count  批量创云硬盘的个数。如果无该参数，表明只创建1个云硬盘，目前最多支持批量创建100个。 从备份创建云硬盘时，不支持批量创建，数量只能为“1”。  如果发送请求时，将参数值设置为小数，则默认取小数点前的整数。
    * description  云硬盘的描述。最大支持255个字节。
    * enterpriseProjectId  企业项目ID。创建云硬盘时，给云硬盘绑定企业项目ID。
    * imageRef  镜像ID，指定该参数表示创建云硬盘方式为从镜像创建云硬盘。
    * metadata  创建云硬盘的metadata信息     可选参数如下:    [\\_\\_system\\_\\_cmkid]   metadata中的加密cmkid字段，与\\_\\_system\\_\\_encrypted配合表示需要加密，cmkid长度固定为36个字节。 > 说明： >  > 请求获取密钥ID的方法请参考：\"[查询密钥列表](https://support.huaweicloud.com/api-dew/ListKeys.html)\"。   [\\_\\_system\\_\\_encrypted]   metadata中的表示加密功能的字段,0代表不加密,1代表加密。不指定该字段时,云硬盘的加密属性与数据源保持一致,如果不是从数据源创建的场景,则默认不加密。    [full_clone]   从快照创建云硬盘时，如需使用link克隆方式，请指定该字段的值为0。    [hw:passthrough]    * true表示云硬盘的设备类型为SCSI类型，即允许ECS操作系统直接访问底层存储介质。支持SCSI锁命令。   * false表示云硬盘的设备类型为VBD (虚拟块存储设备 , Virtual Block Device)类型，即为默认类型，VBD只能支持简单的SCSI读写命令。   * 该字段不存在时，云硬盘默认为VBD类型。    [create\\_for\\_volume\\_id]  * true表示接口响应中会通过volume_ids字段返回本次创建的云硬盘ID。 * false表示接口响应中不会返回本次创建的云硬盘ID。  该字段不存在时，默认为false。
    * multiattach  是否为共享云硬盘。true为共享盘，false为普通云硬盘。
    * name  云硬盘名称。 如果为创建单个云硬盘，name为云硬盘名称。最大支持255个字节。 创建的云硬盘数量（count字段对应的值）大于1时，为区分不同云硬盘，创建过程中系统会自动在名称后加“-0000”的类似标记。例如：volume-0001、volume-0002。最大支持250个字节。
    * size  云硬盘大小，单位为GB，其限制如下： 系统盘：1GB-1024GB 数据盘：10GB-32768GB 创建空白云硬盘和从 镜像/快照 创建云硬盘时，size为必选，且云硬盘大小不能小于 镜像/快照 大小。 从备份创建云硬盘时，size为可选，不指定size时，云硬盘大小和备份大小一致。
    * snapshotId  快照ID，指定该参数表示创建云硬盘方式为从快照创建云硬盘
    * volumeType  云硬盘类型。  目前支持\"SATA\"，\"SAS\"，\"GPSSD\"，\"SSD\"和\"ESSD\"五种。  - \"SATA\"为普通IO云硬盘(已售罄) - \"SAS\"为高IO云硬盘 - \"GPSSD\"为通用型SSD云硬盘 - \"SSD\"为超高IO云硬盘 - \"ESSD\"为极速IO云硬盘 当指定的云硬盘类型在avaliability_zone内不存在时，则创建云硬盘失败。  说明： 从快照创建云硬盘时，volume_type字段必须和快照源云硬盘保持一致。 了解不同磁盘类型的详细信息，请参见 [磁盘类型及性能介绍](https://support.huaweicloud.com/productdesc-evs/zh-cn_topic_0044524691.html)。 获取region可用的卷类型，请参见[查询云硬盘类型列表](https://apiexplorer.developer.huaweicloud.com/apiexplorer/doc?product=EVS&api=CinderListVolumeTypes)
    * tags  云硬盘标签信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'availabilityZone' => 'getAvailabilityZone',
            'backupId' => 'getBackupId',
            'count' => 'getCount',
            'description' => 'getDescription',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'imageRef' => 'getImageRef',
            'metadata' => 'getMetadata',
            'multiattach' => 'getMultiattach',
            'name' => 'getName',
            'size' => 'getSize',
            'snapshotId' => 'getSnapshotId',
            'volumeType' => 'getVolumeType',
            'tags' => 'getTags'
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
    const VOLUME_TYPE_SSD = 'SSD';
    const VOLUME_TYPE_GPSSD = 'GPSSD';
    const VOLUME_TYPE_SAS = 'SAS';
    const VOLUME_TYPE_SATA = 'SATA';
    const VOLUME_TYPE_ESSD = 'ESSD';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getVolumeTypeAllowableValues()
    {
        return [
            self::VOLUME_TYPE_SSD,
            self::VOLUME_TYPE_GPSSD,
            self::VOLUME_TYPE_SAS,
            self::VOLUME_TYPE_SATA,
            self::VOLUME_TYPE_ESSD,
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
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
        $this->container['backupId'] = isset($data['backupId']) ? $data['backupId'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['imageRef'] = isset($data['imageRef']) ? $data['imageRef'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['multiattach'] = isset($data['multiattach']) ? $data['multiattach'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['snapshotId'] = isset($data['snapshotId']) ? $data['snapshotId'] : null;
        $this->container['volumeType'] = isset($data['volumeType']) ? $data['volumeType'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['availabilityZone'] === null) {
            $invalidProperties[] = "'availabilityZone' can't be null";
        }
        if ($this->container['size'] === null) {
            $invalidProperties[] = "'size' can't be null";
        }
        if ($this->container['volumeType'] === null) {
            $invalidProperties[] = "'volumeType' can't be null";
        }
            $allowedValues = $this->getVolumeTypeAllowableValues();
                if (!is_null($this->container['volumeType']) && !in_array($this->container['volumeType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'volumeType', must be one of '%s'",
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
    * Gets availabilityZone
    *  指定要创建云硬盘的可用区。 获取方法请参见\"[获取可用区](https://apiexplorer.developer.huaweicloud.com/apiexplorer/sdk?product=EVS&api=CinderListAvailabilityZones)\"。
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
    * @param string $availabilityZone 指定要创建云硬盘的可用区。 获取方法请参见\"[获取可用区](https://apiexplorer.developer.huaweicloud.com/apiexplorer/sdk?product=EVS&api=CinderListAvailabilityZones)\"。
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
        return $this;
    }

    /**
    * Gets backupId
    *  备份ID，从备份创建云硬盘时为必选。
    *
    * @return string|null
    */
    public function getBackupId()
    {
        return $this->container['backupId'];
    }

    /**
    * Sets backupId
    *
    * @param string|null $backupId 备份ID，从备份创建云硬盘时为必选。
    *
    * @return $this
    */
    public function setBackupId($backupId)
    {
        $this->container['backupId'] = $backupId;
        return $this;
    }

    /**
    * Gets count
    *  批量创云硬盘的个数。如果无该参数，表明只创建1个云硬盘，目前最多支持批量创建100个。 从备份创建云硬盘时，不支持批量创建，数量只能为“1”。  如果发送请求时，将参数值设置为小数，则默认取小数点前的整数。
    *
    * @return int|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int|null $count 批量创云硬盘的个数。如果无该参数，表明只创建1个云硬盘，目前最多支持批量创建100个。 从备份创建云硬盘时，不支持批量创建，数量只能为“1”。  如果发送请求时，将参数值设置为小数，则默认取小数点前的整数。
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets description
    *  云硬盘的描述。最大支持255个字节。
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
    * @param string|null $description 云硬盘的描述。最大支持255个字节。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID。创建云硬盘时，给云硬盘绑定企业项目ID。
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
    * @param string|null $enterpriseProjectId 企业项目ID。创建云硬盘时，给云硬盘绑定企业项目ID。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets imageRef
    *  镜像ID，指定该参数表示创建云硬盘方式为从镜像创建云硬盘。
    *
    * @return string|null
    */
    public function getImageRef()
    {
        return $this->container['imageRef'];
    }

    /**
    * Sets imageRef
    *
    * @param string|null $imageRef 镜像ID，指定该参数表示创建云硬盘方式为从镜像创建云硬盘。
    *
    * @return $this
    */
    public function setImageRef($imageRef)
    {
        $this->container['imageRef'] = $imageRef;
        return $this;
    }

    /**
    * Gets metadata
    *  创建云硬盘的metadata信息     可选参数如下:    [\\_\\_system\\_\\_cmkid]   metadata中的加密cmkid字段，与\\_\\_system\\_\\_encrypted配合表示需要加密，cmkid长度固定为36个字节。 > 说明： >  > 请求获取密钥ID的方法请参考：\"[查询密钥列表](https://support.huaweicloud.com/api-dew/ListKeys.html)\"。   [\\_\\_system\\_\\_encrypted]   metadata中的表示加密功能的字段,0代表不加密,1代表加密。不指定该字段时,云硬盘的加密属性与数据源保持一致,如果不是从数据源创建的场景,则默认不加密。    [full_clone]   从快照创建云硬盘时，如需使用link克隆方式，请指定该字段的值为0。    [hw:passthrough]    * true表示云硬盘的设备类型为SCSI类型，即允许ECS操作系统直接访问底层存储介质。支持SCSI锁命令。   * false表示云硬盘的设备类型为VBD (虚拟块存储设备 , Virtual Block Device)类型，即为默认类型，VBD只能支持简单的SCSI读写命令。   * 该字段不存在时，云硬盘默认为VBD类型。    [create\\_for\\_volume\\_id]  * true表示接口响应中会通过volume_ids字段返回本次创建的云硬盘ID。 * false表示接口响应中不会返回本次创建的云硬盘ID。  该字段不存在时，默认为false。
    *
    * @return map[string,string]|null
    */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
    * Sets metadata
    *
    * @param map[string,string]|null $metadata 创建云硬盘的metadata信息     可选参数如下:    [\\_\\_system\\_\\_cmkid]   metadata中的加密cmkid字段，与\\_\\_system\\_\\_encrypted配合表示需要加密，cmkid长度固定为36个字节。 > 说明： >  > 请求获取密钥ID的方法请参考：\"[查询密钥列表](https://support.huaweicloud.com/api-dew/ListKeys.html)\"。   [\\_\\_system\\_\\_encrypted]   metadata中的表示加密功能的字段,0代表不加密,1代表加密。不指定该字段时,云硬盘的加密属性与数据源保持一致,如果不是从数据源创建的场景,则默认不加密。    [full_clone]   从快照创建云硬盘时，如需使用link克隆方式，请指定该字段的值为0。    [hw:passthrough]    * true表示云硬盘的设备类型为SCSI类型，即允许ECS操作系统直接访问底层存储介质。支持SCSI锁命令。   * false表示云硬盘的设备类型为VBD (虚拟块存储设备 , Virtual Block Device)类型，即为默认类型，VBD只能支持简单的SCSI读写命令。   * 该字段不存在时，云硬盘默认为VBD类型。    [create\\_for\\_volume\\_id]  * true表示接口响应中会通过volume_ids字段返回本次创建的云硬盘ID。 * false表示接口响应中不会返回本次创建的云硬盘ID。  该字段不存在时，默认为false。
    *
    * @return $this
    */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;
        return $this;
    }

    /**
    * Gets multiattach
    *  是否为共享云硬盘。true为共享盘，false为普通云硬盘。
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
    * @param bool|null $multiattach 是否为共享云硬盘。true为共享盘，false为普通云硬盘。
    *
    * @return $this
    */
    public function setMultiattach($multiattach)
    {
        $this->container['multiattach'] = $multiattach;
        return $this;
    }

    /**
    * Gets name
    *  云硬盘名称。 如果为创建单个云硬盘，name为云硬盘名称。最大支持255个字节。 创建的云硬盘数量（count字段对应的值）大于1时，为区分不同云硬盘，创建过程中系统会自动在名称后加“-0000”的类似标记。例如：volume-0001、volume-0002。最大支持250个字节。
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
    * @param string|null $name 云硬盘名称。 如果为创建单个云硬盘，name为云硬盘名称。最大支持255个字节。 创建的云硬盘数量（count字段对应的值）大于1时，为区分不同云硬盘，创建过程中系统会自动在名称后加“-0000”的类似标记。例如：volume-0001、volume-0002。最大支持250个字节。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets size
    *  云硬盘大小，单位为GB，其限制如下： 系统盘：1GB-1024GB 数据盘：10GB-32768GB 创建空白云硬盘和从 镜像/快照 创建云硬盘时，size为必选，且云硬盘大小不能小于 镜像/快照 大小。 从备份创建云硬盘时，size为可选，不指定size时，云硬盘大小和备份大小一致。
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
    * @param int $size 云硬盘大小，单位为GB，其限制如下： 系统盘：1GB-1024GB 数据盘：10GB-32768GB 创建空白云硬盘和从 镜像/快照 创建云硬盘时，size为必选，且云硬盘大小不能小于 镜像/快照 大小。 从备份创建云硬盘时，size为可选，不指定size时，云硬盘大小和备份大小一致。
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets snapshotId
    *  快照ID，指定该参数表示创建云硬盘方式为从快照创建云硬盘
    *
    * @return string|null
    */
    public function getSnapshotId()
    {
        return $this->container['snapshotId'];
    }

    /**
    * Sets snapshotId
    *
    * @param string|null $snapshotId 快照ID，指定该参数表示创建云硬盘方式为从快照创建云硬盘
    *
    * @return $this
    */
    public function setSnapshotId($snapshotId)
    {
        $this->container['snapshotId'] = $snapshotId;
        return $this;
    }

    /**
    * Gets volumeType
    *  云硬盘类型。  目前支持\"SATA\"，\"SAS\"，\"GPSSD\"，\"SSD\"和\"ESSD\"五种。  - \"SATA\"为普通IO云硬盘(已售罄) - \"SAS\"为高IO云硬盘 - \"GPSSD\"为通用型SSD云硬盘 - \"SSD\"为超高IO云硬盘 - \"ESSD\"为极速IO云硬盘 当指定的云硬盘类型在avaliability_zone内不存在时，则创建云硬盘失败。  说明： 从快照创建云硬盘时，volume_type字段必须和快照源云硬盘保持一致。 了解不同磁盘类型的详细信息，请参见 [磁盘类型及性能介绍](https://support.huaweicloud.com/productdesc-evs/zh-cn_topic_0044524691.html)。 获取region可用的卷类型，请参见[查询云硬盘类型列表](https://apiexplorer.developer.huaweicloud.com/apiexplorer/doc?product=EVS&api=CinderListVolumeTypes)
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
    * @param string $volumeType 云硬盘类型。  目前支持\"SATA\"，\"SAS\"，\"GPSSD\"，\"SSD\"和\"ESSD\"五种。  - \"SATA\"为普通IO云硬盘(已售罄) - \"SAS\"为高IO云硬盘 - \"GPSSD\"为通用型SSD云硬盘 - \"SSD\"为超高IO云硬盘 - \"ESSD\"为极速IO云硬盘 当指定的云硬盘类型在avaliability_zone内不存在时，则创建云硬盘失败。  说明： 从快照创建云硬盘时，volume_type字段必须和快照源云硬盘保持一致。 了解不同磁盘类型的详细信息，请参见 [磁盘类型及性能介绍](https://support.huaweicloud.com/productdesc-evs/zh-cn_topic_0044524691.html)。 获取region可用的卷类型，请参见[查询云硬盘类型列表](https://apiexplorer.developer.huaweicloud.com/apiexplorer/doc?product=EVS&api=CinderListVolumeTypes)
    *
    * @return $this
    */
    public function setVolumeType($volumeType)
    {
        $this->container['volumeType'] = $volumeType;
        return $this;
    }

    /**
    * Gets tags
    *  云硬盘标签信息。
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
    * @param map[string,string]|null $tags 云硬盘标签信息。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
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

