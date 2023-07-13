<?php

namespace HuaweiCloud\SDK\Ims\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GlanceListImagesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GlanceListImagesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * imagetype  镜像类型，目前支持以下类型：公共镜像：gold私有镜像：private共享镜像：shared 市场镜像：market
    * isregistered  镜像是否是受保护，取值为true/false。一般查询公共镜像时候取值为true，查询私有镜像可以不指定。
    * osBit  操作系统位数，一般取值为32或者64
    * osType  镜像系统类型，取值为Linux，Windows，Other
    * platform  镜像平台分类，取值为Windows，Ubuntu，RedHat，SUSE，CentOS，Debian，OpenSUSE, Oracle Linux，Fedora，Other，CoreOS和EulerOS
    * supportDiskintensive  表示该镜像支持密集存储。如果镜像支持密集存储性能，则值为true，否则无需增加该属性
    * supportHighperformance  表示该镜像支持高计算性能。如果镜像支持高计算性能，则值为true，否则无需增加该属性
    * supportKvm  如果镜像支持KVM，取值为true，否则无需增加该属性
    * supportKvmGpuType  表示该镜像是支持KVM虚拟化平台下的GPU类型,如果不支持KVM虚拟机下GPU类型，无需添加该属性。该属性与“__support_xen”和“__support_kvm”属性不共存
    * supportKvmInfiniband  如果镜像支持KVM虚拟化下Infiniband网卡类型，取值为true。否则，无需添加该属性。该属性与“__support_xen”属性不共存。
    * supportLargememory  表示该镜像支持超大内存。如果镜像支持超大内存，取值为true，否则无需增加该属性
    * supportXen  如果镜像支持XEN，取值为true，否则无需增加该属性
    * supportXenGpuType  表示该镜像是支持XEN虚拟化平台下的GPU优化类型,如果不支持XEN虚拟化下GPU类型，无需添加该属性。该属性与“__support_xen”和“__support_kvm”属性不共存
    * supportXenHana  如果镜像支持XEN虚拟化下HANA类型，取值为true。否则，无需添加该属性。该属性与“__support_xen”和“__support_kvm”属性不共存
    * containerFormat  容器类型
    * diskFormat  镜像格式，目前支持vhd，zvhd、raw，qcow2。默认值是vhd
    * id  镜像ID
    * limit  用于分页，表示查询几条镜像记录，取值为整数，默认返回25条镜像记录
    * marker  用于分页，表示从哪个镜像开始查询，取值为镜像ID。
    * memberStatus  成员状态。目前取值有accepted、rejected、pending。accepted表示已经接受共享的镜像，rejected表示已经拒绝了其他用户共享的镜像，pending表示需要确认的其他用户的共享镜像。需要在查询时，设置“visibility”参数为“shared”
    * minDisk  镜像运行需要的最小磁盘，单位为GB 。取值为40～1024GB。取值为1～1024GB。取值为40～255GB
    * minRam  镜像运行需要的最小内存，单位为MB。参数取值依据弹性云服务器的规格限制，一般设置为0。
    * name  镜像名称
    * owner  镜像属于哪个租户
    * protected  镜像是否是受保护，查询公共镜像时候取值为True，查询私有镜像可以不指定。
    * sortDir  用于排序，表示升序还是降序，取值为asc和desc。与sort_key一起组合使用，默认为降序desc
    * sortKey  用于排序，表示按照哪个字段排序。取值为镜像属性name，container_format，disk_format，status，id，size字段，默认为创建时间。
    * status  镜像状态。取值如下：queued：表示镜像元数据已经创建成功，等待上传镜像文件。saving：表示镜像正在上传文件到后端存储。deleted：表示镜像已经删除。killed：表示镜像上传错误。active：表示镜像可以正常使用
    * tag  标签，用户为镜像增加自定义标签后可以通过该参数过滤查询
    * visibility  是否被其他租户可见，取值如下： public：公共镜像 private：私有镜像 shared：共享镜像
    * createdAt  镜像创建时间。支持按照时间点过滤查询，取值格式为“ 操作符:UTC时间”。 其中操作符支持如下几种： gt：大于 gte：大于等于 lt：小于 lte：小于等于 eq：等于 neq：不等于 时间格式支持：yyyy-MM-ddThh:mm:ssZ或者yyyy-MM-dd hh:mm:ss 例如，查询创建时间在2018-10-28 10:00:00之前的镜像，可以通过如下条件过滤： created_at=gt:2018-10-28T10:00:00Z
    * updatedAt  镜像修改时间。支持按照时间点过滤查询，取值格式为 “ 操作符:UTC时间”。 其中操作符支持如下几种： gt：大于 gte：大于等于 lt：小于 lte：小于等于 eq：等于 neq：不等于 时间格式支持：yyyy-MM-ddThh:mm:ssZ或者yyyy-MM-dd hh:mm:ss 例如，查询修改时间在2018-10-28 10:00:00之前的镜像，可以通过如下条件过滤： updated_at=gt:2018-10-28T10:00:00Z
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'imagetype' => 'string',
            'isregistered' => 'bool',
            'osBit' => 'string',
            'osType' => 'string',
            'platform' => 'string',
            'supportDiskintensive' => 'string',
            'supportHighperformance' => 'string',
            'supportKvm' => 'string',
            'supportKvmGpuType' => 'string',
            'supportKvmInfiniband' => 'string',
            'supportLargememory' => 'string',
            'supportXen' => 'string',
            'supportXenGpuType' => 'string',
            'supportXenHana' => 'string',
            'containerFormat' => 'string',
            'diskFormat' => 'string',
            'id' => 'string',
            'limit' => 'int',
            'marker' => 'string',
            'memberStatus' => 'string',
            'minDisk' => 'int',
            'minRam' => 'int',
            'name' => 'string',
            'owner' => 'string',
            'protected' => 'bool',
            'sortDir' => 'string',
            'sortKey' => 'string',
            'status' => 'string',
            'tag' => 'string',
            'visibility' => 'string',
            'createdAt' => 'string',
            'updatedAt' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * imagetype  镜像类型，目前支持以下类型：公共镜像：gold私有镜像：private共享镜像：shared 市场镜像：market
    * isregistered  镜像是否是受保护，取值为true/false。一般查询公共镜像时候取值为true，查询私有镜像可以不指定。
    * osBit  操作系统位数，一般取值为32或者64
    * osType  镜像系统类型，取值为Linux，Windows，Other
    * platform  镜像平台分类，取值为Windows，Ubuntu，RedHat，SUSE，CentOS，Debian，OpenSUSE, Oracle Linux，Fedora，Other，CoreOS和EulerOS
    * supportDiskintensive  表示该镜像支持密集存储。如果镜像支持密集存储性能，则值为true，否则无需增加该属性
    * supportHighperformance  表示该镜像支持高计算性能。如果镜像支持高计算性能，则值为true，否则无需增加该属性
    * supportKvm  如果镜像支持KVM，取值为true，否则无需增加该属性
    * supportKvmGpuType  表示该镜像是支持KVM虚拟化平台下的GPU类型,如果不支持KVM虚拟机下GPU类型，无需添加该属性。该属性与“__support_xen”和“__support_kvm”属性不共存
    * supportKvmInfiniband  如果镜像支持KVM虚拟化下Infiniband网卡类型，取值为true。否则，无需添加该属性。该属性与“__support_xen”属性不共存。
    * supportLargememory  表示该镜像支持超大内存。如果镜像支持超大内存，取值为true，否则无需增加该属性
    * supportXen  如果镜像支持XEN，取值为true，否则无需增加该属性
    * supportXenGpuType  表示该镜像是支持XEN虚拟化平台下的GPU优化类型,如果不支持XEN虚拟化下GPU类型，无需添加该属性。该属性与“__support_xen”和“__support_kvm”属性不共存
    * supportXenHana  如果镜像支持XEN虚拟化下HANA类型，取值为true。否则，无需添加该属性。该属性与“__support_xen”和“__support_kvm”属性不共存
    * containerFormat  容器类型
    * diskFormat  镜像格式，目前支持vhd，zvhd、raw，qcow2。默认值是vhd
    * id  镜像ID
    * limit  用于分页，表示查询几条镜像记录，取值为整数，默认返回25条镜像记录
    * marker  用于分页，表示从哪个镜像开始查询，取值为镜像ID。
    * memberStatus  成员状态。目前取值有accepted、rejected、pending。accepted表示已经接受共享的镜像，rejected表示已经拒绝了其他用户共享的镜像，pending表示需要确认的其他用户的共享镜像。需要在查询时，设置“visibility”参数为“shared”
    * minDisk  镜像运行需要的最小磁盘，单位为GB 。取值为40～1024GB。取值为1～1024GB。取值为40～255GB
    * minRam  镜像运行需要的最小内存，单位为MB。参数取值依据弹性云服务器的规格限制，一般设置为0。
    * name  镜像名称
    * owner  镜像属于哪个租户
    * protected  镜像是否是受保护，查询公共镜像时候取值为True，查询私有镜像可以不指定。
    * sortDir  用于排序，表示升序还是降序，取值为asc和desc。与sort_key一起组合使用，默认为降序desc
    * sortKey  用于排序，表示按照哪个字段排序。取值为镜像属性name，container_format，disk_format，status，id，size字段，默认为创建时间。
    * status  镜像状态。取值如下：queued：表示镜像元数据已经创建成功，等待上传镜像文件。saving：表示镜像正在上传文件到后端存储。deleted：表示镜像已经删除。killed：表示镜像上传错误。active：表示镜像可以正常使用
    * tag  标签，用户为镜像增加自定义标签后可以通过该参数过滤查询
    * visibility  是否被其他租户可见，取值如下： public：公共镜像 private：私有镜像 shared：共享镜像
    * createdAt  镜像创建时间。支持按照时间点过滤查询，取值格式为“ 操作符:UTC时间”。 其中操作符支持如下几种： gt：大于 gte：大于等于 lt：小于 lte：小于等于 eq：等于 neq：不等于 时间格式支持：yyyy-MM-ddThh:mm:ssZ或者yyyy-MM-dd hh:mm:ss 例如，查询创建时间在2018-10-28 10:00:00之前的镜像，可以通过如下条件过滤： created_at=gt:2018-10-28T10:00:00Z
    * updatedAt  镜像修改时间。支持按照时间点过滤查询，取值格式为 “ 操作符:UTC时间”。 其中操作符支持如下几种： gt：大于 gte：大于等于 lt：小于 lte：小于等于 eq：等于 neq：不等于 时间格式支持：yyyy-MM-ddThh:mm:ssZ或者yyyy-MM-dd hh:mm:ss 例如，查询修改时间在2018-10-28 10:00:00之前的镜像，可以通过如下条件过滤： updated_at=gt:2018-10-28T10:00:00Z
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'imagetype' => null,
        'isregistered' => null,
        'osBit' => null,
        'osType' => null,
        'platform' => null,
        'supportDiskintensive' => null,
        'supportHighperformance' => null,
        'supportKvm' => null,
        'supportKvmGpuType' => null,
        'supportKvmInfiniband' => null,
        'supportLargememory' => null,
        'supportXen' => null,
        'supportXenGpuType' => null,
        'supportXenHana' => null,
        'containerFormat' => null,
        'diskFormat' => null,
        'id' => null,
        'limit' => 'int32',
        'marker' => null,
        'memberStatus' => null,
        'minDisk' => 'int32',
        'minRam' => 'int32',
        'name' => null,
        'owner' => null,
        'protected' => null,
        'sortDir' => null,
        'sortKey' => null,
        'status' => null,
        'tag' => null,
        'visibility' => null,
        'createdAt' => null,
        'updatedAt' => null
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
    * imagetype  镜像类型，目前支持以下类型：公共镜像：gold私有镜像：private共享镜像：shared 市场镜像：market
    * isregistered  镜像是否是受保护，取值为true/false。一般查询公共镜像时候取值为true，查询私有镜像可以不指定。
    * osBit  操作系统位数，一般取值为32或者64
    * osType  镜像系统类型，取值为Linux，Windows，Other
    * platform  镜像平台分类，取值为Windows，Ubuntu，RedHat，SUSE，CentOS，Debian，OpenSUSE, Oracle Linux，Fedora，Other，CoreOS和EulerOS
    * supportDiskintensive  表示该镜像支持密集存储。如果镜像支持密集存储性能，则值为true，否则无需增加该属性
    * supportHighperformance  表示该镜像支持高计算性能。如果镜像支持高计算性能，则值为true，否则无需增加该属性
    * supportKvm  如果镜像支持KVM，取值为true，否则无需增加该属性
    * supportKvmGpuType  表示该镜像是支持KVM虚拟化平台下的GPU类型,如果不支持KVM虚拟机下GPU类型，无需添加该属性。该属性与“__support_xen”和“__support_kvm”属性不共存
    * supportKvmInfiniband  如果镜像支持KVM虚拟化下Infiniband网卡类型，取值为true。否则，无需添加该属性。该属性与“__support_xen”属性不共存。
    * supportLargememory  表示该镜像支持超大内存。如果镜像支持超大内存，取值为true，否则无需增加该属性
    * supportXen  如果镜像支持XEN，取值为true，否则无需增加该属性
    * supportXenGpuType  表示该镜像是支持XEN虚拟化平台下的GPU优化类型,如果不支持XEN虚拟化下GPU类型，无需添加该属性。该属性与“__support_xen”和“__support_kvm”属性不共存
    * supportXenHana  如果镜像支持XEN虚拟化下HANA类型，取值为true。否则，无需添加该属性。该属性与“__support_xen”和“__support_kvm”属性不共存
    * containerFormat  容器类型
    * diskFormat  镜像格式，目前支持vhd，zvhd、raw，qcow2。默认值是vhd
    * id  镜像ID
    * limit  用于分页，表示查询几条镜像记录，取值为整数，默认返回25条镜像记录
    * marker  用于分页，表示从哪个镜像开始查询，取值为镜像ID。
    * memberStatus  成员状态。目前取值有accepted、rejected、pending。accepted表示已经接受共享的镜像，rejected表示已经拒绝了其他用户共享的镜像，pending表示需要确认的其他用户的共享镜像。需要在查询时，设置“visibility”参数为“shared”
    * minDisk  镜像运行需要的最小磁盘，单位为GB 。取值为40～1024GB。取值为1～1024GB。取值为40～255GB
    * minRam  镜像运行需要的最小内存，单位为MB。参数取值依据弹性云服务器的规格限制，一般设置为0。
    * name  镜像名称
    * owner  镜像属于哪个租户
    * protected  镜像是否是受保护，查询公共镜像时候取值为True，查询私有镜像可以不指定。
    * sortDir  用于排序，表示升序还是降序，取值为asc和desc。与sort_key一起组合使用，默认为降序desc
    * sortKey  用于排序，表示按照哪个字段排序。取值为镜像属性name，container_format，disk_format，status，id，size字段，默认为创建时间。
    * status  镜像状态。取值如下：queued：表示镜像元数据已经创建成功，等待上传镜像文件。saving：表示镜像正在上传文件到后端存储。deleted：表示镜像已经删除。killed：表示镜像上传错误。active：表示镜像可以正常使用
    * tag  标签，用户为镜像增加自定义标签后可以通过该参数过滤查询
    * visibility  是否被其他租户可见，取值如下： public：公共镜像 private：私有镜像 shared：共享镜像
    * createdAt  镜像创建时间。支持按照时间点过滤查询，取值格式为“ 操作符:UTC时间”。 其中操作符支持如下几种： gt：大于 gte：大于等于 lt：小于 lte：小于等于 eq：等于 neq：不等于 时间格式支持：yyyy-MM-ddThh:mm:ssZ或者yyyy-MM-dd hh:mm:ss 例如，查询创建时间在2018-10-28 10:00:00之前的镜像，可以通过如下条件过滤： created_at=gt:2018-10-28T10:00:00Z
    * updatedAt  镜像修改时间。支持按照时间点过滤查询，取值格式为 “ 操作符:UTC时间”。 其中操作符支持如下几种： gt：大于 gte：大于等于 lt：小于 lte：小于等于 eq：等于 neq：不等于 时间格式支持：yyyy-MM-ddThh:mm:ssZ或者yyyy-MM-dd hh:mm:ss 例如，查询修改时间在2018-10-28 10:00:00之前的镜像，可以通过如下条件过滤： updated_at=gt:2018-10-28T10:00:00Z
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'imagetype' => '__imagetype',
            'isregistered' => '__isregistered',
            'osBit' => '__os_bit',
            'osType' => '__os_type',
            'platform' => '__platform',
            'supportDiskintensive' => '__support_diskintensive',
            'supportHighperformance' => '__support_highperformance',
            'supportKvm' => '__support_kvm',
            'supportKvmGpuType' => '__support_kvm_gpu_type',
            'supportKvmInfiniband' => '__support_kvm_infiniband',
            'supportLargememory' => '__support_largememory',
            'supportXen' => '__support_xen',
            'supportXenGpuType' => '__support_xen_gpu_type',
            'supportXenHana' => '__support_xen_hana',
            'containerFormat' => 'container_format',
            'diskFormat' => 'disk_format',
            'id' => 'id',
            'limit' => 'limit',
            'marker' => 'marker',
            'memberStatus' => 'member_status',
            'minDisk' => 'min_disk',
            'minRam' => 'min_ram',
            'name' => 'name',
            'owner' => 'owner',
            'protected' => 'protected',
            'sortDir' => 'sort_dir',
            'sortKey' => 'sort_key',
            'status' => 'status',
            'tag' => 'tag',
            'visibility' => 'visibility',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * imagetype  镜像类型，目前支持以下类型：公共镜像：gold私有镜像：private共享镜像：shared 市场镜像：market
    * isregistered  镜像是否是受保护，取值为true/false。一般查询公共镜像时候取值为true，查询私有镜像可以不指定。
    * osBit  操作系统位数，一般取值为32或者64
    * osType  镜像系统类型，取值为Linux，Windows，Other
    * platform  镜像平台分类，取值为Windows，Ubuntu，RedHat，SUSE，CentOS，Debian，OpenSUSE, Oracle Linux，Fedora，Other，CoreOS和EulerOS
    * supportDiskintensive  表示该镜像支持密集存储。如果镜像支持密集存储性能，则值为true，否则无需增加该属性
    * supportHighperformance  表示该镜像支持高计算性能。如果镜像支持高计算性能，则值为true，否则无需增加该属性
    * supportKvm  如果镜像支持KVM，取值为true，否则无需增加该属性
    * supportKvmGpuType  表示该镜像是支持KVM虚拟化平台下的GPU类型,如果不支持KVM虚拟机下GPU类型，无需添加该属性。该属性与“__support_xen”和“__support_kvm”属性不共存
    * supportKvmInfiniband  如果镜像支持KVM虚拟化下Infiniband网卡类型，取值为true。否则，无需添加该属性。该属性与“__support_xen”属性不共存。
    * supportLargememory  表示该镜像支持超大内存。如果镜像支持超大内存，取值为true，否则无需增加该属性
    * supportXen  如果镜像支持XEN，取值为true，否则无需增加该属性
    * supportXenGpuType  表示该镜像是支持XEN虚拟化平台下的GPU优化类型,如果不支持XEN虚拟化下GPU类型，无需添加该属性。该属性与“__support_xen”和“__support_kvm”属性不共存
    * supportXenHana  如果镜像支持XEN虚拟化下HANA类型，取值为true。否则，无需添加该属性。该属性与“__support_xen”和“__support_kvm”属性不共存
    * containerFormat  容器类型
    * diskFormat  镜像格式，目前支持vhd，zvhd、raw，qcow2。默认值是vhd
    * id  镜像ID
    * limit  用于分页，表示查询几条镜像记录，取值为整数，默认返回25条镜像记录
    * marker  用于分页，表示从哪个镜像开始查询，取值为镜像ID。
    * memberStatus  成员状态。目前取值有accepted、rejected、pending。accepted表示已经接受共享的镜像，rejected表示已经拒绝了其他用户共享的镜像，pending表示需要确认的其他用户的共享镜像。需要在查询时，设置“visibility”参数为“shared”
    * minDisk  镜像运行需要的最小磁盘，单位为GB 。取值为40～1024GB。取值为1～1024GB。取值为40～255GB
    * minRam  镜像运行需要的最小内存，单位为MB。参数取值依据弹性云服务器的规格限制，一般设置为0。
    * name  镜像名称
    * owner  镜像属于哪个租户
    * protected  镜像是否是受保护，查询公共镜像时候取值为True，查询私有镜像可以不指定。
    * sortDir  用于排序，表示升序还是降序，取值为asc和desc。与sort_key一起组合使用，默认为降序desc
    * sortKey  用于排序，表示按照哪个字段排序。取值为镜像属性name，container_format，disk_format，status，id，size字段，默认为创建时间。
    * status  镜像状态。取值如下：queued：表示镜像元数据已经创建成功，等待上传镜像文件。saving：表示镜像正在上传文件到后端存储。deleted：表示镜像已经删除。killed：表示镜像上传错误。active：表示镜像可以正常使用
    * tag  标签，用户为镜像增加自定义标签后可以通过该参数过滤查询
    * visibility  是否被其他租户可见，取值如下： public：公共镜像 private：私有镜像 shared：共享镜像
    * createdAt  镜像创建时间。支持按照时间点过滤查询，取值格式为“ 操作符:UTC时间”。 其中操作符支持如下几种： gt：大于 gte：大于等于 lt：小于 lte：小于等于 eq：等于 neq：不等于 时间格式支持：yyyy-MM-ddThh:mm:ssZ或者yyyy-MM-dd hh:mm:ss 例如，查询创建时间在2018-10-28 10:00:00之前的镜像，可以通过如下条件过滤： created_at=gt:2018-10-28T10:00:00Z
    * updatedAt  镜像修改时间。支持按照时间点过滤查询，取值格式为 “ 操作符:UTC时间”。 其中操作符支持如下几种： gt：大于 gte：大于等于 lt：小于 lte：小于等于 eq：等于 neq：不等于 时间格式支持：yyyy-MM-ddThh:mm:ssZ或者yyyy-MM-dd hh:mm:ss 例如，查询修改时间在2018-10-28 10:00:00之前的镜像，可以通过如下条件过滤： updated_at=gt:2018-10-28T10:00:00Z
    *
    * @var string[]
    */
    protected static $setters = [
            'imagetype' => 'setImagetype',
            'isregistered' => 'setIsregistered',
            'osBit' => 'setOsBit',
            'osType' => 'setOsType',
            'platform' => 'setPlatform',
            'supportDiskintensive' => 'setSupportDiskintensive',
            'supportHighperformance' => 'setSupportHighperformance',
            'supportKvm' => 'setSupportKvm',
            'supportKvmGpuType' => 'setSupportKvmGpuType',
            'supportKvmInfiniband' => 'setSupportKvmInfiniband',
            'supportLargememory' => 'setSupportLargememory',
            'supportXen' => 'setSupportXen',
            'supportXenGpuType' => 'setSupportXenGpuType',
            'supportXenHana' => 'setSupportXenHana',
            'containerFormat' => 'setContainerFormat',
            'diskFormat' => 'setDiskFormat',
            'id' => 'setId',
            'limit' => 'setLimit',
            'marker' => 'setMarker',
            'memberStatus' => 'setMemberStatus',
            'minDisk' => 'setMinDisk',
            'minRam' => 'setMinRam',
            'name' => 'setName',
            'owner' => 'setOwner',
            'protected' => 'setProtected',
            'sortDir' => 'setSortDir',
            'sortKey' => 'setSortKey',
            'status' => 'setStatus',
            'tag' => 'setTag',
            'visibility' => 'setVisibility',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * imagetype  镜像类型，目前支持以下类型：公共镜像：gold私有镜像：private共享镜像：shared 市场镜像：market
    * isregistered  镜像是否是受保护，取值为true/false。一般查询公共镜像时候取值为true，查询私有镜像可以不指定。
    * osBit  操作系统位数，一般取值为32或者64
    * osType  镜像系统类型，取值为Linux，Windows，Other
    * platform  镜像平台分类，取值为Windows，Ubuntu，RedHat，SUSE，CentOS，Debian，OpenSUSE, Oracle Linux，Fedora，Other，CoreOS和EulerOS
    * supportDiskintensive  表示该镜像支持密集存储。如果镜像支持密集存储性能，则值为true，否则无需增加该属性
    * supportHighperformance  表示该镜像支持高计算性能。如果镜像支持高计算性能，则值为true，否则无需增加该属性
    * supportKvm  如果镜像支持KVM，取值为true，否则无需增加该属性
    * supportKvmGpuType  表示该镜像是支持KVM虚拟化平台下的GPU类型,如果不支持KVM虚拟机下GPU类型，无需添加该属性。该属性与“__support_xen”和“__support_kvm”属性不共存
    * supportKvmInfiniband  如果镜像支持KVM虚拟化下Infiniband网卡类型，取值为true。否则，无需添加该属性。该属性与“__support_xen”属性不共存。
    * supportLargememory  表示该镜像支持超大内存。如果镜像支持超大内存，取值为true，否则无需增加该属性
    * supportXen  如果镜像支持XEN，取值为true，否则无需增加该属性
    * supportXenGpuType  表示该镜像是支持XEN虚拟化平台下的GPU优化类型,如果不支持XEN虚拟化下GPU类型，无需添加该属性。该属性与“__support_xen”和“__support_kvm”属性不共存
    * supportXenHana  如果镜像支持XEN虚拟化下HANA类型，取值为true。否则，无需添加该属性。该属性与“__support_xen”和“__support_kvm”属性不共存
    * containerFormat  容器类型
    * diskFormat  镜像格式，目前支持vhd，zvhd、raw，qcow2。默认值是vhd
    * id  镜像ID
    * limit  用于分页，表示查询几条镜像记录，取值为整数，默认返回25条镜像记录
    * marker  用于分页，表示从哪个镜像开始查询，取值为镜像ID。
    * memberStatus  成员状态。目前取值有accepted、rejected、pending。accepted表示已经接受共享的镜像，rejected表示已经拒绝了其他用户共享的镜像，pending表示需要确认的其他用户的共享镜像。需要在查询时，设置“visibility”参数为“shared”
    * minDisk  镜像运行需要的最小磁盘，单位为GB 。取值为40～1024GB。取值为1～1024GB。取值为40～255GB
    * minRam  镜像运行需要的最小内存，单位为MB。参数取值依据弹性云服务器的规格限制，一般设置为0。
    * name  镜像名称
    * owner  镜像属于哪个租户
    * protected  镜像是否是受保护，查询公共镜像时候取值为True，查询私有镜像可以不指定。
    * sortDir  用于排序，表示升序还是降序，取值为asc和desc。与sort_key一起组合使用，默认为降序desc
    * sortKey  用于排序，表示按照哪个字段排序。取值为镜像属性name，container_format，disk_format，status，id，size字段，默认为创建时间。
    * status  镜像状态。取值如下：queued：表示镜像元数据已经创建成功，等待上传镜像文件。saving：表示镜像正在上传文件到后端存储。deleted：表示镜像已经删除。killed：表示镜像上传错误。active：表示镜像可以正常使用
    * tag  标签，用户为镜像增加自定义标签后可以通过该参数过滤查询
    * visibility  是否被其他租户可见，取值如下： public：公共镜像 private：私有镜像 shared：共享镜像
    * createdAt  镜像创建时间。支持按照时间点过滤查询，取值格式为“ 操作符:UTC时间”。 其中操作符支持如下几种： gt：大于 gte：大于等于 lt：小于 lte：小于等于 eq：等于 neq：不等于 时间格式支持：yyyy-MM-ddThh:mm:ssZ或者yyyy-MM-dd hh:mm:ss 例如，查询创建时间在2018-10-28 10:00:00之前的镜像，可以通过如下条件过滤： created_at=gt:2018-10-28T10:00:00Z
    * updatedAt  镜像修改时间。支持按照时间点过滤查询，取值格式为 “ 操作符:UTC时间”。 其中操作符支持如下几种： gt：大于 gte：大于等于 lt：小于 lte：小于等于 eq：等于 neq：不等于 时间格式支持：yyyy-MM-ddThh:mm:ssZ或者yyyy-MM-dd hh:mm:ss 例如，查询修改时间在2018-10-28 10:00:00之前的镜像，可以通过如下条件过滤： updated_at=gt:2018-10-28T10:00:00Z
    *
    * @var string[]
    */
    protected static $getters = [
            'imagetype' => 'getImagetype',
            'isregistered' => 'getIsregistered',
            'osBit' => 'getOsBit',
            'osType' => 'getOsType',
            'platform' => 'getPlatform',
            'supportDiskintensive' => 'getSupportDiskintensive',
            'supportHighperformance' => 'getSupportHighperformance',
            'supportKvm' => 'getSupportKvm',
            'supportKvmGpuType' => 'getSupportKvmGpuType',
            'supportKvmInfiniband' => 'getSupportKvmInfiniband',
            'supportLargememory' => 'getSupportLargememory',
            'supportXen' => 'getSupportXen',
            'supportXenGpuType' => 'getSupportXenGpuType',
            'supportXenHana' => 'getSupportXenHana',
            'containerFormat' => 'getContainerFormat',
            'diskFormat' => 'getDiskFormat',
            'id' => 'getId',
            'limit' => 'getLimit',
            'marker' => 'getMarker',
            'memberStatus' => 'getMemberStatus',
            'minDisk' => 'getMinDisk',
            'minRam' => 'getMinRam',
            'name' => 'getName',
            'owner' => 'getOwner',
            'protected' => 'getProtected',
            'sortDir' => 'getSortDir',
            'sortKey' => 'getSortKey',
            'status' => 'getStatus',
            'tag' => 'getTag',
            'visibility' => 'getVisibility',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt'
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
    const IMAGETYPE_GOLD = 'gold';
    const IMAGETYPE__PRIVATE = 'private';
    const IMAGETYPE_SHARED = 'shared';
    const IMAGETYPE_MARKET = 'market';
    const OS_BIT__32 = '32';
    const OS_BIT__64 = '64';
    const OS_TYPE_LINUX = 'Linux';
    const OS_TYPE_WINDOWS = 'Windows';
    const OS_TYPE_OTHER = 'Other';
    const PLATFORM_WINDOWS = 'Windows';
    const PLATFORM_UBUNTU = 'Ubuntu';
    const PLATFORM_RED_HAT = 'RedHat';
    const PLATFORM_SUSE = 'SUSE';
    const PLATFORM_CENT_OS = 'CentOS';
    const PLATFORM_DEBIAN = 'Debian';
    const PLATFORM_OPEN_SUSE = 'OpenSUSE';
    const PLATFORM_ORACLE_LINUX = 'Oracle Linux';
    const PLATFORM_FEDORA = 'Fedora';
    const PLATFORM_OTHER = 'Other';
    const PLATFORM_CORE_OS = 'CoreOS';
    const PLATFORM_EULER_OS = 'EulerOS';
    const DISK_FORMAT_VHD = 'vhd';
    const DISK_FORMAT_ZVHD = 'zvhd';
    const DISK_FORMAT_RAW = 'raw';
    const DISK_FORMAT_QCOW2 = 'qcow2';
    const STATUS_QUEUED = 'queued';
    const STATUS_SAVING = 'saving';
    const STATUS_DELETED = 'deleted';
    const STATUS_KILLED = 'killed';
    const STATUS_ACTIVE = 'active';
    const VISIBILITY__PUBLIC = 'public';
    const VISIBILITY__PRIVATE = 'private';
    const VISIBILITY_SHARED = 'shared';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getImagetypeAllowableValues()
    {
        return [
            self::IMAGETYPE_GOLD,
            self::IMAGETYPE__PRIVATE,
            self::IMAGETYPE_SHARED,
            self::IMAGETYPE_MARKET,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOsBitAllowableValues()
    {
        return [
            self::OS_BIT__32,
            self::OS_BIT__64,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOsTypeAllowableValues()
    {
        return [
            self::OS_TYPE_LINUX,
            self::OS_TYPE_WINDOWS,
            self::OS_TYPE_OTHER,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPlatformAllowableValues()
    {
        return [
            self::PLATFORM_WINDOWS,
            self::PLATFORM_UBUNTU,
            self::PLATFORM_RED_HAT,
            self::PLATFORM_SUSE,
            self::PLATFORM_CENT_OS,
            self::PLATFORM_DEBIAN,
            self::PLATFORM_OPEN_SUSE,
            self::PLATFORM_ORACLE_LINUX,
            self::PLATFORM_FEDORA,
            self::PLATFORM_OTHER,
            self::PLATFORM_CORE_OS,
            self::PLATFORM_EULER_OS,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDiskFormatAllowableValues()
    {
        return [
            self::DISK_FORMAT_VHD,
            self::DISK_FORMAT_ZVHD,
            self::DISK_FORMAT_RAW,
            self::DISK_FORMAT_QCOW2,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_QUEUED,
            self::STATUS_SAVING,
            self::STATUS_DELETED,
            self::STATUS_KILLED,
            self::STATUS_ACTIVE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getVisibilityAllowableValues()
    {
        return [
            self::VISIBILITY__PUBLIC,
            self::VISIBILITY__PRIVATE,
            self::VISIBILITY_SHARED,
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
        $this->container['imagetype'] = isset($data['imagetype']) ? $data['imagetype'] : null;
        $this->container['isregistered'] = isset($data['isregistered']) ? $data['isregistered'] : true;
        $this->container['osBit'] = isset($data['osBit']) ? $data['osBit'] : null;
        $this->container['osType'] = isset($data['osType']) ? $data['osType'] : null;
        $this->container['platform'] = isset($data['platform']) ? $data['platform'] : null;
        $this->container['supportDiskintensive'] = isset($data['supportDiskintensive']) ? $data['supportDiskintensive'] : null;
        $this->container['supportHighperformance'] = isset($data['supportHighperformance']) ? $data['supportHighperformance'] : null;
        $this->container['supportKvm'] = isset($data['supportKvm']) ? $data['supportKvm'] : null;
        $this->container['supportKvmGpuType'] = isset($data['supportKvmGpuType']) ? $data['supportKvmGpuType'] : null;
        $this->container['supportKvmInfiniband'] = isset($data['supportKvmInfiniband']) ? $data['supportKvmInfiniband'] : null;
        $this->container['supportLargememory'] = isset($data['supportLargememory']) ? $data['supportLargememory'] : null;
        $this->container['supportXen'] = isset($data['supportXen']) ? $data['supportXen'] : null;
        $this->container['supportXenGpuType'] = isset($data['supportXenGpuType']) ? $data['supportXenGpuType'] : null;
        $this->container['supportXenHana'] = isset($data['supportXenHana']) ? $data['supportXenHana'] : null;
        $this->container['containerFormat'] = isset($data['containerFormat']) ? $data['containerFormat'] : 'bare';
        $this->container['diskFormat'] = isset($data['diskFormat']) ? $data['diskFormat'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : 25;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['memberStatus'] = isset($data['memberStatus']) ? $data['memberStatus'] : null;
        $this->container['minDisk'] = isset($data['minDisk']) ? $data['minDisk'] : null;
        $this->container['minRam'] = isset($data['minRam']) ? $data['minRam'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['protected'] = isset($data['protected']) ? $data['protected'] : null;
        $this->container['sortDir'] = isset($data['sortDir']) ? $data['sortDir'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['visibility'] = isset($data['visibility']) ? $data['visibility'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getImagetypeAllowableValues();
                if (!is_null($this->container['imagetype']) && !in_array($this->container['imagetype'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'imagetype', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getOsBitAllowableValues();
                if (!is_null($this->container['osBit']) && !in_array($this->container['osBit'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'osBit', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getOsTypeAllowableValues();
                if (!is_null($this->container['osType']) && !in_array($this->container['osType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'osType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getPlatformAllowableValues();
                if (!is_null($this->container['platform']) && !in_array($this->container['platform'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'platform', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getDiskFormatAllowableValues();
                if (!is_null($this->container['diskFormat']) && !in_array($this->container['diskFormat'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'diskFormat', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['minDisk']) && ($this->container['minDisk'] > 1024)) {
                $invalidProperties[] = "invalid value for 'minDisk', must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['minDisk']) && ($this->container['minDisk'] < 1)) {
                $invalidProperties[] = "invalid value for 'minDisk', must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getVisibilityAllowableValues();
                if (!is_null($this->container['visibility']) && !in_array($this->container['visibility'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'visibility', must be one of '%s'",
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
    * Gets imagetype
    *  镜像类型，目前支持以下类型：公共镜像：gold私有镜像：private共享镜像：shared 市场镜像：market
    *
    * @return string|null
    */
    public function getImagetype()
    {
        return $this->container['imagetype'];
    }

    /**
    * Sets imagetype
    *
    * @param string|null $imagetype 镜像类型，目前支持以下类型：公共镜像：gold私有镜像：private共享镜像：shared 市场镜像：market
    *
    * @return $this
    */
    public function setImagetype($imagetype)
    {
        $this->container['imagetype'] = $imagetype;
        return $this;
    }

    /**
    * Gets isregistered
    *  镜像是否是受保护，取值为true/false。一般查询公共镜像时候取值为true，查询私有镜像可以不指定。
    *
    * @return bool|null
    */
    public function getIsregistered()
    {
        return $this->container['isregistered'];
    }

    /**
    * Sets isregistered
    *
    * @param bool|null $isregistered 镜像是否是受保护，取值为true/false。一般查询公共镜像时候取值为true，查询私有镜像可以不指定。
    *
    * @return $this
    */
    public function setIsregistered($isregistered)
    {
        $this->container['isregistered'] = $isregistered;
        return $this;
    }

    /**
    * Gets osBit
    *  操作系统位数，一般取值为32或者64
    *
    * @return string|null
    */
    public function getOsBit()
    {
        return $this->container['osBit'];
    }

    /**
    * Sets osBit
    *
    * @param string|null $osBit 操作系统位数，一般取值为32或者64
    *
    * @return $this
    */
    public function setOsBit($osBit)
    {
        $this->container['osBit'] = $osBit;
        return $this;
    }

    /**
    * Gets osType
    *  镜像系统类型，取值为Linux，Windows，Other
    *
    * @return string|null
    */
    public function getOsType()
    {
        return $this->container['osType'];
    }

    /**
    * Sets osType
    *
    * @param string|null $osType 镜像系统类型，取值为Linux，Windows，Other
    *
    * @return $this
    */
    public function setOsType($osType)
    {
        $this->container['osType'] = $osType;
        return $this;
    }

    /**
    * Gets platform
    *  镜像平台分类，取值为Windows，Ubuntu，RedHat，SUSE，CentOS，Debian，OpenSUSE, Oracle Linux，Fedora，Other，CoreOS和EulerOS
    *
    * @return string|null
    */
    public function getPlatform()
    {
        return $this->container['platform'];
    }

    /**
    * Sets platform
    *
    * @param string|null $platform 镜像平台分类，取值为Windows，Ubuntu，RedHat，SUSE，CentOS，Debian，OpenSUSE, Oracle Linux，Fedora，Other，CoreOS和EulerOS
    *
    * @return $this
    */
    public function setPlatform($platform)
    {
        $this->container['platform'] = $platform;
        return $this;
    }

    /**
    * Gets supportDiskintensive
    *  表示该镜像支持密集存储。如果镜像支持密集存储性能，则值为true，否则无需增加该属性
    *
    * @return string|null
    */
    public function getSupportDiskintensive()
    {
        return $this->container['supportDiskintensive'];
    }

    /**
    * Sets supportDiskintensive
    *
    * @param string|null $supportDiskintensive 表示该镜像支持密集存储。如果镜像支持密集存储性能，则值为true，否则无需增加该属性
    *
    * @return $this
    */
    public function setSupportDiskintensive($supportDiskintensive)
    {
        $this->container['supportDiskintensive'] = $supportDiskintensive;
        return $this;
    }

    /**
    * Gets supportHighperformance
    *  表示该镜像支持高计算性能。如果镜像支持高计算性能，则值为true，否则无需增加该属性
    *
    * @return string|null
    */
    public function getSupportHighperformance()
    {
        return $this->container['supportHighperformance'];
    }

    /**
    * Sets supportHighperformance
    *
    * @param string|null $supportHighperformance 表示该镜像支持高计算性能。如果镜像支持高计算性能，则值为true，否则无需增加该属性
    *
    * @return $this
    */
    public function setSupportHighperformance($supportHighperformance)
    {
        $this->container['supportHighperformance'] = $supportHighperformance;
        return $this;
    }

    /**
    * Gets supportKvm
    *  如果镜像支持KVM，取值为true，否则无需增加该属性
    *
    * @return string|null
    */
    public function getSupportKvm()
    {
        return $this->container['supportKvm'];
    }

    /**
    * Sets supportKvm
    *
    * @param string|null $supportKvm 如果镜像支持KVM，取值为true，否则无需增加该属性
    *
    * @return $this
    */
    public function setSupportKvm($supportKvm)
    {
        $this->container['supportKvm'] = $supportKvm;
        return $this;
    }

    /**
    * Gets supportKvmGpuType
    *  表示该镜像是支持KVM虚拟化平台下的GPU类型,如果不支持KVM虚拟机下GPU类型，无需添加该属性。该属性与“__support_xen”和“__support_kvm”属性不共存
    *
    * @return string|null
    */
    public function getSupportKvmGpuType()
    {
        return $this->container['supportKvmGpuType'];
    }

    /**
    * Sets supportKvmGpuType
    *
    * @param string|null $supportKvmGpuType 表示该镜像是支持KVM虚拟化平台下的GPU类型,如果不支持KVM虚拟机下GPU类型，无需添加该属性。该属性与“__support_xen”和“__support_kvm”属性不共存
    *
    * @return $this
    */
    public function setSupportKvmGpuType($supportKvmGpuType)
    {
        $this->container['supportKvmGpuType'] = $supportKvmGpuType;
        return $this;
    }

    /**
    * Gets supportKvmInfiniband
    *  如果镜像支持KVM虚拟化下Infiniband网卡类型，取值为true。否则，无需添加该属性。该属性与“__support_xen”属性不共存。
    *
    * @return string|null
    */
    public function getSupportKvmInfiniband()
    {
        return $this->container['supportKvmInfiniband'];
    }

    /**
    * Sets supportKvmInfiniband
    *
    * @param string|null $supportKvmInfiniband 如果镜像支持KVM虚拟化下Infiniband网卡类型，取值为true。否则，无需添加该属性。该属性与“__support_xen”属性不共存。
    *
    * @return $this
    */
    public function setSupportKvmInfiniband($supportKvmInfiniband)
    {
        $this->container['supportKvmInfiniband'] = $supportKvmInfiniband;
        return $this;
    }

    /**
    * Gets supportLargememory
    *  表示该镜像支持超大内存。如果镜像支持超大内存，取值为true，否则无需增加该属性
    *
    * @return string|null
    */
    public function getSupportLargememory()
    {
        return $this->container['supportLargememory'];
    }

    /**
    * Sets supportLargememory
    *
    * @param string|null $supportLargememory 表示该镜像支持超大内存。如果镜像支持超大内存，取值为true，否则无需增加该属性
    *
    * @return $this
    */
    public function setSupportLargememory($supportLargememory)
    {
        $this->container['supportLargememory'] = $supportLargememory;
        return $this;
    }

    /**
    * Gets supportXen
    *  如果镜像支持XEN，取值为true，否则无需增加该属性
    *
    * @return string|null
    */
    public function getSupportXen()
    {
        return $this->container['supportXen'];
    }

    /**
    * Sets supportXen
    *
    * @param string|null $supportXen 如果镜像支持XEN，取值为true，否则无需增加该属性
    *
    * @return $this
    */
    public function setSupportXen($supportXen)
    {
        $this->container['supportXen'] = $supportXen;
        return $this;
    }

    /**
    * Gets supportXenGpuType
    *  表示该镜像是支持XEN虚拟化平台下的GPU优化类型,如果不支持XEN虚拟化下GPU类型，无需添加该属性。该属性与“__support_xen”和“__support_kvm”属性不共存
    *
    * @return string|null
    */
    public function getSupportXenGpuType()
    {
        return $this->container['supportXenGpuType'];
    }

    /**
    * Sets supportXenGpuType
    *
    * @param string|null $supportXenGpuType 表示该镜像是支持XEN虚拟化平台下的GPU优化类型,如果不支持XEN虚拟化下GPU类型，无需添加该属性。该属性与“__support_xen”和“__support_kvm”属性不共存
    *
    * @return $this
    */
    public function setSupportXenGpuType($supportXenGpuType)
    {
        $this->container['supportXenGpuType'] = $supportXenGpuType;
        return $this;
    }

    /**
    * Gets supportXenHana
    *  如果镜像支持XEN虚拟化下HANA类型，取值为true。否则，无需添加该属性。该属性与“__support_xen”和“__support_kvm”属性不共存
    *
    * @return string|null
    */
    public function getSupportXenHana()
    {
        return $this->container['supportXenHana'];
    }

    /**
    * Sets supportXenHana
    *
    * @param string|null $supportXenHana 如果镜像支持XEN虚拟化下HANA类型，取值为true。否则，无需添加该属性。该属性与“__support_xen”和“__support_kvm”属性不共存
    *
    * @return $this
    */
    public function setSupportXenHana($supportXenHana)
    {
        $this->container['supportXenHana'] = $supportXenHana;
        return $this;
    }

    /**
    * Gets containerFormat
    *  容器类型
    *
    * @return string|null
    */
    public function getContainerFormat()
    {
        return $this->container['containerFormat'];
    }

    /**
    * Sets containerFormat
    *
    * @param string|null $containerFormat 容器类型
    *
    * @return $this
    */
    public function setContainerFormat($containerFormat)
    {
        $this->container['containerFormat'] = $containerFormat;
        return $this;
    }

    /**
    * Gets diskFormat
    *  镜像格式，目前支持vhd，zvhd、raw，qcow2。默认值是vhd
    *
    * @return string|null
    */
    public function getDiskFormat()
    {
        return $this->container['diskFormat'];
    }

    /**
    * Sets diskFormat
    *
    * @param string|null $diskFormat 镜像格式，目前支持vhd，zvhd、raw，qcow2。默认值是vhd
    *
    * @return $this
    */
    public function setDiskFormat($diskFormat)
    {
        $this->container['diskFormat'] = $diskFormat;
        return $this;
    }

    /**
    * Gets id
    *  镜像ID
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
    * @param string|null $id 镜像ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets limit
    *  用于分页，表示查询几条镜像记录，取值为整数，默认返回25条镜像记录
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 用于分页，表示查询几条镜像记录，取值为整数，默认返回25条镜像记录
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets marker
    *  用于分页，表示从哪个镜像开始查询，取值为镜像ID。
    *
    * @return string|null
    */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
    * Sets marker
    *
    * @param string|null $marker 用于分页，表示从哪个镜像开始查询，取值为镜像ID。
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets memberStatus
    *  成员状态。目前取值有accepted、rejected、pending。accepted表示已经接受共享的镜像，rejected表示已经拒绝了其他用户共享的镜像，pending表示需要确认的其他用户的共享镜像。需要在查询时，设置“visibility”参数为“shared”
    *
    * @return string|null
    */
    public function getMemberStatus()
    {
        return $this->container['memberStatus'];
    }

    /**
    * Sets memberStatus
    *
    * @param string|null $memberStatus 成员状态。目前取值有accepted、rejected、pending。accepted表示已经接受共享的镜像，rejected表示已经拒绝了其他用户共享的镜像，pending表示需要确认的其他用户的共享镜像。需要在查询时，设置“visibility”参数为“shared”
    *
    * @return $this
    */
    public function setMemberStatus($memberStatus)
    {
        $this->container['memberStatus'] = $memberStatus;
        return $this;
    }

    /**
    * Gets minDisk
    *  镜像运行需要的最小磁盘，单位为GB 。取值为40～1024GB。取值为1～1024GB。取值为40～255GB
    *
    * @return int|null
    */
    public function getMinDisk()
    {
        return $this->container['minDisk'];
    }

    /**
    * Sets minDisk
    *
    * @param int|null $minDisk 镜像运行需要的最小磁盘，单位为GB 。取值为40～1024GB。取值为1～1024GB。取值为40～255GB
    *
    * @return $this
    */
    public function setMinDisk($minDisk)
    {
        $this->container['minDisk'] = $minDisk;
        return $this;
    }

    /**
    * Gets minRam
    *  镜像运行需要的最小内存，单位为MB。参数取值依据弹性云服务器的规格限制，一般设置为0。
    *
    * @return int|null
    */
    public function getMinRam()
    {
        return $this->container['minRam'];
    }

    /**
    * Sets minRam
    *
    * @param int|null $minRam 镜像运行需要的最小内存，单位为MB。参数取值依据弹性云服务器的规格限制，一般设置为0。
    *
    * @return $this
    */
    public function setMinRam($minRam)
    {
        $this->container['minRam'] = $minRam;
        return $this;
    }

    /**
    * Gets name
    *  镜像名称
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
    * @param string|null $name 镜像名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets owner
    *  镜像属于哪个租户
    *
    * @return string|null
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param string|null $owner 镜像属于哪个租户
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets protected
    *  镜像是否是受保护，查询公共镜像时候取值为True，查询私有镜像可以不指定。
    *
    * @return bool|null
    */
    public function getProtected()
    {
        return $this->container['protected'];
    }

    /**
    * Sets protected
    *
    * @param bool|null $protected 镜像是否是受保护，查询公共镜像时候取值为True，查询私有镜像可以不指定。
    *
    * @return $this
    */
    public function setProtected($protected)
    {
        $this->container['protected'] = $protected;
        return $this;
    }

    /**
    * Gets sortDir
    *  用于排序，表示升序还是降序，取值为asc和desc。与sort_key一起组合使用，默认为降序desc
    *
    * @return string|null
    */
    public function getSortDir()
    {
        return $this->container['sortDir'];
    }

    /**
    * Sets sortDir
    *
    * @param string|null $sortDir 用于排序，表示升序还是降序，取值为asc和desc。与sort_key一起组合使用，默认为降序desc
    *
    * @return $this
    */
    public function setSortDir($sortDir)
    {
        $this->container['sortDir'] = $sortDir;
        return $this;
    }

    /**
    * Gets sortKey
    *  用于排序，表示按照哪个字段排序。取值为镜像属性name，container_format，disk_format，status，id，size字段，默认为创建时间。
    *
    * @return string|null
    */
    public function getSortKey()
    {
        return $this->container['sortKey'];
    }

    /**
    * Sets sortKey
    *
    * @param string|null $sortKey 用于排序，表示按照哪个字段排序。取值为镜像属性name，container_format，disk_format，status，id，size字段，默认为创建时间。
    *
    * @return $this
    */
    public function setSortKey($sortKey)
    {
        $this->container['sortKey'] = $sortKey;
        return $this;
    }

    /**
    * Gets status
    *  镜像状态。取值如下：queued：表示镜像元数据已经创建成功，等待上传镜像文件。saving：表示镜像正在上传文件到后端存储。deleted：表示镜像已经删除。killed：表示镜像上传错误。active：表示镜像可以正常使用
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
    * @param string|null $status 镜像状态。取值如下：queued：表示镜像元数据已经创建成功，等待上传镜像文件。saving：表示镜像正在上传文件到后端存储。deleted：表示镜像已经删除。killed：表示镜像上传错误。active：表示镜像可以正常使用
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets tag
    *  标签，用户为镜像增加自定义标签后可以通过该参数过滤查询
    *
    * @return string|null
    */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
    * Sets tag
    *
    * @param string|null $tag 标签，用户为镜像增加自定义标签后可以通过该参数过滤查询
    *
    * @return $this
    */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;
        return $this;
    }

    /**
    * Gets visibility
    *  是否被其他租户可见，取值如下： public：公共镜像 private：私有镜像 shared：共享镜像
    *
    * @return string|null
    */
    public function getVisibility()
    {
        return $this->container['visibility'];
    }

    /**
    * Sets visibility
    *
    * @param string|null $visibility 是否被其他租户可见，取值如下： public：公共镜像 private：私有镜像 shared：共享镜像
    *
    * @return $this
    */
    public function setVisibility($visibility)
    {
        $this->container['visibility'] = $visibility;
        return $this;
    }

    /**
    * Gets createdAt
    *  镜像创建时间。支持按照时间点过滤查询，取值格式为“ 操作符:UTC时间”。 其中操作符支持如下几种： gt：大于 gte：大于等于 lt：小于 lte：小于等于 eq：等于 neq：不等于 时间格式支持：yyyy-MM-ddThh:mm:ssZ或者yyyy-MM-dd hh:mm:ss 例如，查询创建时间在2018-10-28 10:00:00之前的镜像，可以通过如下条件过滤： created_at=gt:2018-10-28T10:00:00Z
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
    * @param string|null $createdAt 镜像创建时间。支持按照时间点过滤查询，取值格式为“ 操作符:UTC时间”。 其中操作符支持如下几种： gt：大于 gte：大于等于 lt：小于 lte：小于等于 eq：等于 neq：不等于 时间格式支持：yyyy-MM-ddThh:mm:ssZ或者yyyy-MM-dd hh:mm:ss 例如，查询创建时间在2018-10-28 10:00:00之前的镜像，可以通过如下条件过滤： created_at=gt:2018-10-28T10:00:00Z
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
    *  镜像修改时间。支持按照时间点过滤查询，取值格式为 “ 操作符:UTC时间”。 其中操作符支持如下几种： gt：大于 gte：大于等于 lt：小于 lte：小于等于 eq：等于 neq：不等于 时间格式支持：yyyy-MM-ddThh:mm:ssZ或者yyyy-MM-dd hh:mm:ss 例如，查询修改时间在2018-10-28 10:00:00之前的镜像，可以通过如下条件过滤： updated_at=gt:2018-10-28T10:00:00Z
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
    * @param string|null $updatedAt 镜像修改时间。支持按照时间点过滤查询，取值格式为 “ 操作符:UTC时间”。 其中操作符支持如下几种： gt：大于 gte：大于等于 lt：小于 lte：小于等于 eq：等于 neq：不等于 时间格式支持：yyyy-MM-ddThh:mm:ssZ或者yyyy-MM-dd hh:mm:ss 例如，查询修改时间在2018-10-28 10:00:00之前的镜像，可以通过如下条件过滤： updated_at=gt:2018-10-28T10:00:00Z
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
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

