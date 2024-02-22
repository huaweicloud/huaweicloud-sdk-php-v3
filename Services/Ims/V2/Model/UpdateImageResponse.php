<?php

namespace HuaweiCloud\SDK\Ims\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateImageResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateImageResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * backupId  备份ID。如果是备份创建的镜像，则填写为备份的ID，否则为空
    * dataOrigin  镜像来源。公共镜像为空
    * description  镜像描述信息。 支持字母、数字、中文等，不支持回车、<、 >，长度不能超过1024个字符。
    * imageSize  镜像文件的大小，单位为字节
    * imageSourceType  镜像后端存储类型，目前只支持uds
    * imagetype  镜像类型，目前支持以下类型： 公共镜像：gold 私有镜像：private 共享镜像：shared 市场镜像：market
    * isregistered  是否是注册过的镜像，取值为“true”或者“false”
    * originalimagename  父镜像ID。公共镜像或通过文件创建的私有镜像，取值为空
    * osBit  操作系统位数，一般取值为“32”或者“64”
    * osType  操作系统类型，目前取值Linux， Windows，Other
    * osVersion  操作系统具体版本
    * platform  镜像平台分类
    * productcode  市场镜像的产品ID
    * supportDiskintensive  镜像来源表示该镜像支持密集存储。如果镜像支持密集存储性能，则值为true，否则无需增加该属性。
    * supportHighperformance  表示该镜像支持高计算性能。如果镜像支持高计算性能，则值为true，否则无需增加该属性。
    * supportKvm  如果镜像支持KVM，取值为true，否则无需增加该属性。
    * supportKvmGpuType  表示该镜像是支持KVM虚拟化平台下的GPU类型，如果不支持KVM虚拟机下GPU类型，无需添加该属性。该属性与“__support_xen”和“__support_kvm”属性不共存。
    * supportKvmInfiniband  如果镜像支持KVM虚拟化下Infiniband网卡类型，取值为true。否则，无需添加该属性。该属性与“__support_xen”属性不共存。
    * supportLargememory  表示该镜像支持超大内存。如果镜像支持超大内存，取值为true，否则无需增加该属性。
    * supportXen  如果镜像支持XEN，取值为true，否则无需增加该属性。
    * supportXenGpuType  表示该镜像是支持XEN虚拟化平台下的GPU优化类型，如果不支持XEN虚拟化下GPU类型，无需添加该属性            。该属性与“__support_xen”和“__support_kvm”属性不共存。
    * supportXenHana  如果镜像支持XEN虚拟化下HANA类型，取值为true。否则，无需添加该属性。该属性与“__support_xen”             和“__support_kvm”属性不共存。
    * systemSupportMarket  表示当前镜像是否支持发布为市场镜像,true表示支持,false 表示不支持
    * checksum  目前暂时不使用
    * containerFormat  容器类型
    * createdAt  创建时间。格式为UTC时间
    * diskFormat  镜像的格式，目前支持vhd，zvhd、raw，qcow2。默认值是vhd
    * enterpriseProjectId  表示当前镜像所属的企业项目。取值为0或无该值，表示属于default企业项目，取值为UUID，表示属于该UUID对应的企业项目。
    * file  镜像文件下载和上传链接
    * id  镜像ID
    * minDisk  镜像运行需要的最小磁盘容量，单位为GB。取值为40～1024GB。
    * minRam  镜像运行需要的最小内存，单位为MB。参数取值依据弹性云服务器的规格限制，默认设置为0
    * name  镜像名称。 名称的首尾字母不能为空格。 名称的长度至为1～128位。 名称包含以下4种字符： 大写字母 小写字母 数字 特殊字符包含-、.、_、空格和中文。
    * owner  镜像属于哪个租户
    * protected  是否是受保护的，受保护的镜像不允许删除。取值为true或false
    * schema  镜像视图
    * self  镜像链接信息
    * size  目前暂时不使用
    * status  镜像状态。取值如下：queued：表示镜像元数据已经创建成功，等待 上传镜像文件。saving：表示镜像 正在上传文件到后端存储。deleted：表示镜像已经删除。killed：表示镜像上传错误。active：表示镜像可以正常使用
    * tags  镜像标签列表
    * updatedAt  更新时间。格式为UTC时间
    * virtualEnvType  镜像使用环境类型：FusionCompute，Ironic，DataImage。如果弹性云服务器镜像，则取值为FusionCompute，如果是数据卷镜像则取Dat            aImage，如果是裸金属服务器镜像，则取值是Ironic
    * virtualSize  目前暂时不使用
    * visibility  是否被其他租户可见，取值为private或public
    * supportFcInject  表示当前镜像支持CloudInit密码/密钥注入方式，建议设置为\"true\"或者\"false\"。 如果取值为\"true\"，表示该镜像不支持CloudInit注入密码/密钥，其他取值时表示支持CloudInit注入密钥/密码。
    * hwFirmwareType  云服务器的启动方式。目前支持： bios：表示bios引导启动。 uefi：表示uefi引导启动。
    * supportArm  是否是ARM架构类型的镜像，取值为“true”或者“false”。
    * maxRam  镜像支持的最大内存，单位为MB。取值可以参考云服务器规格限制，一般不设置。
    * systemCmkid  加密镜像所使用的密钥ID。
    * osFeatureList  镜像附加属性。该属性采用JSON格式来标识镜像支持的高级特性清单。
    * accountCode  收费镜像标识。
    * hwVifMultiqueueEnabled  镜像是否支持网卡多队列。取值为“true”或者“false”。
    * isOffshelved  表示当前市场镜像是否下架。true：已下架 false：未下架
    * lazyloading  镜像是否支持延迟加载。取值为“True”或“False”。
    * rootOrigin  表示当前镜像来源是从外部导入。取值：file。
    * sequenceNum  表示当前镜像对应云服务器的系统盘插槽位置。目前暂时不用
    * activeAt  镜像状态变为正常的时间。
    * supportAgentList  镜像是否支持企业主机安全或主机监控。 hss：企业主机安全 ces：主机监控
    * imageDisplayname  对外展示名称。
    * supportAmd  是否是AMD架构类型的镜像。取值为“true”或者“false”。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'backupId' => 'string',
            'dataOrigin' => 'string',
            'description' => 'string',
            'imageSize' => 'string',
            'imageSourceType' => 'string',
            'imagetype' => 'string',
            'isregistered' => 'string',
            'originalimagename' => 'string',
            'osBit' => 'string',
            'osType' => 'string',
            'osVersion' => 'string',
            'platform' => 'string',
            'productcode' => 'string',
            'supportDiskintensive' => 'string',
            'supportHighperformance' => 'string',
            'supportKvm' => 'string',
            'supportKvmGpuType' => 'string',
            'supportKvmInfiniband' => 'string',
            'supportLargememory' => 'string',
            'supportXen' => 'string',
            'supportXenGpuType' => 'string',
            'supportXenHana' => 'string',
            'systemSupportMarket' => 'bool',
            'checksum' => 'string',
            'containerFormat' => 'string',
            'createdAt' => 'string',
            'diskFormat' => 'string',
            'enterpriseProjectId' => 'string',
            'file' => 'string',
            'id' => 'string',
            'minDisk' => 'int',
            'minRam' => 'int',
            'name' => 'string',
            'owner' => 'string',
            'protected' => 'bool',
            'schema' => 'string',
            'self' => 'string',
            'size' => 'int',
            'status' => 'string',
            'tags' => 'string[]',
            'updatedAt' => 'string',
            'virtualEnvType' => 'string',
            'virtualSize' => 'int',
            'visibility' => 'string',
            'supportFcInject' => 'string',
            'hwFirmwareType' => 'string',
            'supportArm' => 'string',
            'maxRam' => 'string',
            'systemCmkid' => 'string',
            'osFeatureList' => 'string',
            'accountCode' => 'string',
            'hwVifMultiqueueEnabled' => 'string',
            'isOffshelved' => 'string',
            'lazyloading' => 'string',
            'rootOrigin' => 'string',
            'sequenceNum' => 'string',
            'activeAt' => 'string',
            'supportAgentList' => 'string',
            'imageDisplayname' => 'string',
            'supportAmd' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * backupId  备份ID。如果是备份创建的镜像，则填写为备份的ID，否则为空
    * dataOrigin  镜像来源。公共镜像为空
    * description  镜像描述信息。 支持字母、数字、中文等，不支持回车、<、 >，长度不能超过1024个字符。
    * imageSize  镜像文件的大小，单位为字节
    * imageSourceType  镜像后端存储类型，目前只支持uds
    * imagetype  镜像类型，目前支持以下类型： 公共镜像：gold 私有镜像：private 共享镜像：shared 市场镜像：market
    * isregistered  是否是注册过的镜像，取值为“true”或者“false”
    * originalimagename  父镜像ID。公共镜像或通过文件创建的私有镜像，取值为空
    * osBit  操作系统位数，一般取值为“32”或者“64”
    * osType  操作系统类型，目前取值Linux， Windows，Other
    * osVersion  操作系统具体版本
    * platform  镜像平台分类
    * productcode  市场镜像的产品ID
    * supportDiskintensive  镜像来源表示该镜像支持密集存储。如果镜像支持密集存储性能，则值为true，否则无需增加该属性。
    * supportHighperformance  表示该镜像支持高计算性能。如果镜像支持高计算性能，则值为true，否则无需增加该属性。
    * supportKvm  如果镜像支持KVM，取值为true，否则无需增加该属性。
    * supportKvmGpuType  表示该镜像是支持KVM虚拟化平台下的GPU类型，如果不支持KVM虚拟机下GPU类型，无需添加该属性。该属性与“__support_xen”和“__support_kvm”属性不共存。
    * supportKvmInfiniband  如果镜像支持KVM虚拟化下Infiniband网卡类型，取值为true。否则，无需添加该属性。该属性与“__support_xen”属性不共存。
    * supportLargememory  表示该镜像支持超大内存。如果镜像支持超大内存，取值为true，否则无需增加该属性。
    * supportXen  如果镜像支持XEN，取值为true，否则无需增加该属性。
    * supportXenGpuType  表示该镜像是支持XEN虚拟化平台下的GPU优化类型，如果不支持XEN虚拟化下GPU类型，无需添加该属性            。该属性与“__support_xen”和“__support_kvm”属性不共存。
    * supportXenHana  如果镜像支持XEN虚拟化下HANA类型，取值为true。否则，无需添加该属性。该属性与“__support_xen”             和“__support_kvm”属性不共存。
    * systemSupportMarket  表示当前镜像是否支持发布为市场镜像,true表示支持,false 表示不支持
    * checksum  目前暂时不使用
    * containerFormat  容器类型
    * createdAt  创建时间。格式为UTC时间
    * diskFormat  镜像的格式，目前支持vhd，zvhd、raw，qcow2。默认值是vhd
    * enterpriseProjectId  表示当前镜像所属的企业项目。取值为0或无该值，表示属于default企业项目，取值为UUID，表示属于该UUID对应的企业项目。
    * file  镜像文件下载和上传链接
    * id  镜像ID
    * minDisk  镜像运行需要的最小磁盘容量，单位为GB。取值为40～1024GB。
    * minRam  镜像运行需要的最小内存，单位为MB。参数取值依据弹性云服务器的规格限制，默认设置为0
    * name  镜像名称。 名称的首尾字母不能为空格。 名称的长度至为1～128位。 名称包含以下4种字符： 大写字母 小写字母 数字 特殊字符包含-、.、_、空格和中文。
    * owner  镜像属于哪个租户
    * protected  是否是受保护的，受保护的镜像不允许删除。取值为true或false
    * schema  镜像视图
    * self  镜像链接信息
    * size  目前暂时不使用
    * status  镜像状态。取值如下：queued：表示镜像元数据已经创建成功，等待 上传镜像文件。saving：表示镜像 正在上传文件到后端存储。deleted：表示镜像已经删除。killed：表示镜像上传错误。active：表示镜像可以正常使用
    * tags  镜像标签列表
    * updatedAt  更新时间。格式为UTC时间
    * virtualEnvType  镜像使用环境类型：FusionCompute，Ironic，DataImage。如果弹性云服务器镜像，则取值为FusionCompute，如果是数据卷镜像则取Dat            aImage，如果是裸金属服务器镜像，则取值是Ironic
    * virtualSize  目前暂时不使用
    * visibility  是否被其他租户可见，取值为private或public
    * supportFcInject  表示当前镜像支持CloudInit密码/密钥注入方式，建议设置为\"true\"或者\"false\"。 如果取值为\"true\"，表示该镜像不支持CloudInit注入密码/密钥，其他取值时表示支持CloudInit注入密钥/密码。
    * hwFirmwareType  云服务器的启动方式。目前支持： bios：表示bios引导启动。 uefi：表示uefi引导启动。
    * supportArm  是否是ARM架构类型的镜像，取值为“true”或者“false”。
    * maxRam  镜像支持的最大内存，单位为MB。取值可以参考云服务器规格限制，一般不设置。
    * systemCmkid  加密镜像所使用的密钥ID。
    * osFeatureList  镜像附加属性。该属性采用JSON格式来标识镜像支持的高级特性清单。
    * accountCode  收费镜像标识。
    * hwVifMultiqueueEnabled  镜像是否支持网卡多队列。取值为“true”或者“false”。
    * isOffshelved  表示当前市场镜像是否下架。true：已下架 false：未下架
    * lazyloading  镜像是否支持延迟加载。取值为“True”或“False”。
    * rootOrigin  表示当前镜像来源是从外部导入。取值：file。
    * sequenceNum  表示当前镜像对应云服务器的系统盘插槽位置。目前暂时不用
    * activeAt  镜像状态变为正常的时间。
    * supportAgentList  镜像是否支持企业主机安全或主机监控。 hss：企业主机安全 ces：主机监控
    * imageDisplayname  对外展示名称。
    * supportAmd  是否是AMD架构类型的镜像。取值为“true”或者“false”。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'backupId' => null,
        'dataOrigin' => null,
        'description' => null,
        'imageSize' => null,
        'imageSourceType' => null,
        'imagetype' => null,
        'isregistered' => null,
        'originalimagename' => null,
        'osBit' => null,
        'osType' => null,
        'osVersion' => null,
        'platform' => null,
        'productcode' => null,
        'supportDiskintensive' => null,
        'supportHighperformance' => null,
        'supportKvm' => null,
        'supportKvmGpuType' => null,
        'supportKvmInfiniband' => null,
        'supportLargememory' => null,
        'supportXen' => null,
        'supportXenGpuType' => null,
        'supportXenHana' => null,
        'systemSupportMarket' => null,
        'checksum' => null,
        'containerFormat' => null,
        'createdAt' => null,
        'diskFormat' => null,
        'enterpriseProjectId' => null,
        'file' => null,
        'id' => null,
        'minDisk' => 'int32',
        'minRam' => 'int32',
        'name' => null,
        'owner' => null,
        'protected' => null,
        'schema' => null,
        'self' => null,
        'size' => 'int32',
        'status' => null,
        'tags' => null,
        'updatedAt' => null,
        'virtualEnvType' => null,
        'virtualSize' => 'int32',
        'visibility' => null,
        'supportFcInject' => null,
        'hwFirmwareType' => null,
        'supportArm' => null,
        'maxRam' => null,
        'systemCmkid' => null,
        'osFeatureList' => null,
        'accountCode' => null,
        'hwVifMultiqueueEnabled' => null,
        'isOffshelved' => null,
        'lazyloading' => null,
        'rootOrigin' => null,
        'sequenceNum' => null,
        'activeAt' => null,
        'supportAgentList' => null,
        'imageDisplayname' => null,
        'supportAmd' => null
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
    * backupId  备份ID。如果是备份创建的镜像，则填写为备份的ID，否则为空
    * dataOrigin  镜像来源。公共镜像为空
    * description  镜像描述信息。 支持字母、数字、中文等，不支持回车、<、 >，长度不能超过1024个字符。
    * imageSize  镜像文件的大小，单位为字节
    * imageSourceType  镜像后端存储类型，目前只支持uds
    * imagetype  镜像类型，目前支持以下类型： 公共镜像：gold 私有镜像：private 共享镜像：shared 市场镜像：market
    * isregistered  是否是注册过的镜像，取值为“true”或者“false”
    * originalimagename  父镜像ID。公共镜像或通过文件创建的私有镜像，取值为空
    * osBit  操作系统位数，一般取值为“32”或者“64”
    * osType  操作系统类型，目前取值Linux， Windows，Other
    * osVersion  操作系统具体版本
    * platform  镜像平台分类
    * productcode  市场镜像的产品ID
    * supportDiskintensive  镜像来源表示该镜像支持密集存储。如果镜像支持密集存储性能，则值为true，否则无需增加该属性。
    * supportHighperformance  表示该镜像支持高计算性能。如果镜像支持高计算性能，则值为true，否则无需增加该属性。
    * supportKvm  如果镜像支持KVM，取值为true，否则无需增加该属性。
    * supportKvmGpuType  表示该镜像是支持KVM虚拟化平台下的GPU类型，如果不支持KVM虚拟机下GPU类型，无需添加该属性。该属性与“__support_xen”和“__support_kvm”属性不共存。
    * supportKvmInfiniband  如果镜像支持KVM虚拟化下Infiniband网卡类型，取值为true。否则，无需添加该属性。该属性与“__support_xen”属性不共存。
    * supportLargememory  表示该镜像支持超大内存。如果镜像支持超大内存，取值为true，否则无需增加该属性。
    * supportXen  如果镜像支持XEN，取值为true，否则无需增加该属性。
    * supportXenGpuType  表示该镜像是支持XEN虚拟化平台下的GPU优化类型，如果不支持XEN虚拟化下GPU类型，无需添加该属性            。该属性与“__support_xen”和“__support_kvm”属性不共存。
    * supportXenHana  如果镜像支持XEN虚拟化下HANA类型，取值为true。否则，无需添加该属性。该属性与“__support_xen”             和“__support_kvm”属性不共存。
    * systemSupportMarket  表示当前镜像是否支持发布为市场镜像,true表示支持,false 表示不支持
    * checksum  目前暂时不使用
    * containerFormat  容器类型
    * createdAt  创建时间。格式为UTC时间
    * diskFormat  镜像的格式，目前支持vhd，zvhd、raw，qcow2。默认值是vhd
    * enterpriseProjectId  表示当前镜像所属的企业项目。取值为0或无该值，表示属于default企业项目，取值为UUID，表示属于该UUID对应的企业项目。
    * file  镜像文件下载和上传链接
    * id  镜像ID
    * minDisk  镜像运行需要的最小磁盘容量，单位为GB。取值为40～1024GB。
    * minRam  镜像运行需要的最小内存，单位为MB。参数取值依据弹性云服务器的规格限制，默认设置为0
    * name  镜像名称。 名称的首尾字母不能为空格。 名称的长度至为1～128位。 名称包含以下4种字符： 大写字母 小写字母 数字 特殊字符包含-、.、_、空格和中文。
    * owner  镜像属于哪个租户
    * protected  是否是受保护的，受保护的镜像不允许删除。取值为true或false
    * schema  镜像视图
    * self  镜像链接信息
    * size  目前暂时不使用
    * status  镜像状态。取值如下：queued：表示镜像元数据已经创建成功，等待 上传镜像文件。saving：表示镜像 正在上传文件到后端存储。deleted：表示镜像已经删除。killed：表示镜像上传错误。active：表示镜像可以正常使用
    * tags  镜像标签列表
    * updatedAt  更新时间。格式为UTC时间
    * virtualEnvType  镜像使用环境类型：FusionCompute，Ironic，DataImage。如果弹性云服务器镜像，则取值为FusionCompute，如果是数据卷镜像则取Dat            aImage，如果是裸金属服务器镜像，则取值是Ironic
    * virtualSize  目前暂时不使用
    * visibility  是否被其他租户可见，取值为private或public
    * supportFcInject  表示当前镜像支持CloudInit密码/密钥注入方式，建议设置为\"true\"或者\"false\"。 如果取值为\"true\"，表示该镜像不支持CloudInit注入密码/密钥，其他取值时表示支持CloudInit注入密钥/密码。
    * hwFirmwareType  云服务器的启动方式。目前支持： bios：表示bios引导启动。 uefi：表示uefi引导启动。
    * supportArm  是否是ARM架构类型的镜像，取值为“true”或者“false”。
    * maxRam  镜像支持的最大内存，单位为MB。取值可以参考云服务器规格限制，一般不设置。
    * systemCmkid  加密镜像所使用的密钥ID。
    * osFeatureList  镜像附加属性。该属性采用JSON格式来标识镜像支持的高级特性清单。
    * accountCode  收费镜像标识。
    * hwVifMultiqueueEnabled  镜像是否支持网卡多队列。取值为“true”或者“false”。
    * isOffshelved  表示当前市场镜像是否下架。true：已下架 false：未下架
    * lazyloading  镜像是否支持延迟加载。取值为“True”或“False”。
    * rootOrigin  表示当前镜像来源是从外部导入。取值：file。
    * sequenceNum  表示当前镜像对应云服务器的系统盘插槽位置。目前暂时不用
    * activeAt  镜像状态变为正常的时间。
    * supportAgentList  镜像是否支持企业主机安全或主机监控。 hss：企业主机安全 ces：主机监控
    * imageDisplayname  对外展示名称。
    * supportAmd  是否是AMD架构类型的镜像。取值为“true”或者“false”。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'backupId' => '__backup_id',
            'dataOrigin' => '__data_origin',
            'description' => '__description',
            'imageSize' => '__image_size',
            'imageSourceType' => '__image_source_type',
            'imagetype' => '__imagetype',
            'isregistered' => '__isregistered',
            'originalimagename' => '__originalimagename',
            'osBit' => '__os_bit',
            'osType' => '__os_type',
            'osVersion' => '__os_version',
            'platform' => '__platform',
            'productcode' => '__productcode',
            'supportDiskintensive' => '__support_diskintensive',
            'supportHighperformance' => '__support_highperformance',
            'supportKvm' => '__support_kvm',
            'supportKvmGpuType' => '__support_kvm_gpu_type',
            'supportKvmInfiniband' => '__support_kvm_infiniband',
            'supportLargememory' => '__support_largememory',
            'supportXen' => '__support_xen',
            'supportXenGpuType' => '__support_xen_gpu_type',
            'supportXenHana' => '__support_xen_hana',
            'systemSupportMarket' => '__system_support_market',
            'checksum' => 'checksum',
            'containerFormat' => 'container_format',
            'createdAt' => 'created_at',
            'diskFormat' => 'disk_format',
            'enterpriseProjectId' => 'enterprise_project_id',
            'file' => 'file',
            'id' => 'id',
            'minDisk' => 'min_disk',
            'minRam' => 'min_ram',
            'name' => 'name',
            'owner' => 'owner',
            'protected' => 'protected',
            'schema' => 'schema',
            'self' => 'self',
            'size' => 'size',
            'status' => 'status',
            'tags' => 'tags',
            'updatedAt' => 'updated_at',
            'virtualEnvType' => 'virtual_env_type',
            'virtualSize' => 'virtual_size',
            'visibility' => 'visibility',
            'supportFcInject' => '__support_fc_inject',
            'hwFirmwareType' => 'hw_firmware_type',
            'supportArm' => '__support_arm',
            'maxRam' => 'max_ram',
            'systemCmkid' => '__system__cmkid',
            'osFeatureList' => '__os_feature_list',
            'accountCode' => '__account_code',
            'hwVifMultiqueueEnabled' => 'hw_vif_multiqueue_enabled',
            'isOffshelved' => '__is_offshelved',
            'lazyloading' => '__lazyloading',
            'rootOrigin' => '__root_origin',
            'sequenceNum' => '__sequence_num',
            'activeAt' => 'active_at',
            'supportAgentList' => '__support_agent_list',
            'imageDisplayname' => '__image_displayname',
            'supportAmd' => '__support_amd'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * backupId  备份ID。如果是备份创建的镜像，则填写为备份的ID，否则为空
    * dataOrigin  镜像来源。公共镜像为空
    * description  镜像描述信息。 支持字母、数字、中文等，不支持回车、<、 >，长度不能超过1024个字符。
    * imageSize  镜像文件的大小，单位为字节
    * imageSourceType  镜像后端存储类型，目前只支持uds
    * imagetype  镜像类型，目前支持以下类型： 公共镜像：gold 私有镜像：private 共享镜像：shared 市场镜像：market
    * isregistered  是否是注册过的镜像，取值为“true”或者“false”
    * originalimagename  父镜像ID。公共镜像或通过文件创建的私有镜像，取值为空
    * osBit  操作系统位数，一般取值为“32”或者“64”
    * osType  操作系统类型，目前取值Linux， Windows，Other
    * osVersion  操作系统具体版本
    * platform  镜像平台分类
    * productcode  市场镜像的产品ID
    * supportDiskintensive  镜像来源表示该镜像支持密集存储。如果镜像支持密集存储性能，则值为true，否则无需增加该属性。
    * supportHighperformance  表示该镜像支持高计算性能。如果镜像支持高计算性能，则值为true，否则无需增加该属性。
    * supportKvm  如果镜像支持KVM，取值为true，否则无需增加该属性。
    * supportKvmGpuType  表示该镜像是支持KVM虚拟化平台下的GPU类型，如果不支持KVM虚拟机下GPU类型，无需添加该属性。该属性与“__support_xen”和“__support_kvm”属性不共存。
    * supportKvmInfiniband  如果镜像支持KVM虚拟化下Infiniband网卡类型，取值为true。否则，无需添加该属性。该属性与“__support_xen”属性不共存。
    * supportLargememory  表示该镜像支持超大内存。如果镜像支持超大内存，取值为true，否则无需增加该属性。
    * supportXen  如果镜像支持XEN，取值为true，否则无需增加该属性。
    * supportXenGpuType  表示该镜像是支持XEN虚拟化平台下的GPU优化类型，如果不支持XEN虚拟化下GPU类型，无需添加该属性            。该属性与“__support_xen”和“__support_kvm”属性不共存。
    * supportXenHana  如果镜像支持XEN虚拟化下HANA类型，取值为true。否则，无需添加该属性。该属性与“__support_xen”             和“__support_kvm”属性不共存。
    * systemSupportMarket  表示当前镜像是否支持发布为市场镜像,true表示支持,false 表示不支持
    * checksum  目前暂时不使用
    * containerFormat  容器类型
    * createdAt  创建时间。格式为UTC时间
    * diskFormat  镜像的格式，目前支持vhd，zvhd、raw，qcow2。默认值是vhd
    * enterpriseProjectId  表示当前镜像所属的企业项目。取值为0或无该值，表示属于default企业项目，取值为UUID，表示属于该UUID对应的企业项目。
    * file  镜像文件下载和上传链接
    * id  镜像ID
    * minDisk  镜像运行需要的最小磁盘容量，单位为GB。取值为40～1024GB。
    * minRam  镜像运行需要的最小内存，单位为MB。参数取值依据弹性云服务器的规格限制，默认设置为0
    * name  镜像名称。 名称的首尾字母不能为空格。 名称的长度至为1～128位。 名称包含以下4种字符： 大写字母 小写字母 数字 特殊字符包含-、.、_、空格和中文。
    * owner  镜像属于哪个租户
    * protected  是否是受保护的，受保护的镜像不允许删除。取值为true或false
    * schema  镜像视图
    * self  镜像链接信息
    * size  目前暂时不使用
    * status  镜像状态。取值如下：queued：表示镜像元数据已经创建成功，等待 上传镜像文件。saving：表示镜像 正在上传文件到后端存储。deleted：表示镜像已经删除。killed：表示镜像上传错误。active：表示镜像可以正常使用
    * tags  镜像标签列表
    * updatedAt  更新时间。格式为UTC时间
    * virtualEnvType  镜像使用环境类型：FusionCompute，Ironic，DataImage。如果弹性云服务器镜像，则取值为FusionCompute，如果是数据卷镜像则取Dat            aImage，如果是裸金属服务器镜像，则取值是Ironic
    * virtualSize  目前暂时不使用
    * visibility  是否被其他租户可见，取值为private或public
    * supportFcInject  表示当前镜像支持CloudInit密码/密钥注入方式，建议设置为\"true\"或者\"false\"。 如果取值为\"true\"，表示该镜像不支持CloudInit注入密码/密钥，其他取值时表示支持CloudInit注入密钥/密码。
    * hwFirmwareType  云服务器的启动方式。目前支持： bios：表示bios引导启动。 uefi：表示uefi引导启动。
    * supportArm  是否是ARM架构类型的镜像，取值为“true”或者“false”。
    * maxRam  镜像支持的最大内存，单位为MB。取值可以参考云服务器规格限制，一般不设置。
    * systemCmkid  加密镜像所使用的密钥ID。
    * osFeatureList  镜像附加属性。该属性采用JSON格式来标识镜像支持的高级特性清单。
    * accountCode  收费镜像标识。
    * hwVifMultiqueueEnabled  镜像是否支持网卡多队列。取值为“true”或者“false”。
    * isOffshelved  表示当前市场镜像是否下架。true：已下架 false：未下架
    * lazyloading  镜像是否支持延迟加载。取值为“True”或“False”。
    * rootOrigin  表示当前镜像来源是从外部导入。取值：file。
    * sequenceNum  表示当前镜像对应云服务器的系统盘插槽位置。目前暂时不用
    * activeAt  镜像状态变为正常的时间。
    * supportAgentList  镜像是否支持企业主机安全或主机监控。 hss：企业主机安全 ces：主机监控
    * imageDisplayname  对外展示名称。
    * supportAmd  是否是AMD架构类型的镜像。取值为“true”或者“false”。
    *
    * @var string[]
    */
    protected static $setters = [
            'backupId' => 'setBackupId',
            'dataOrigin' => 'setDataOrigin',
            'description' => 'setDescription',
            'imageSize' => 'setImageSize',
            'imageSourceType' => 'setImageSourceType',
            'imagetype' => 'setImagetype',
            'isregistered' => 'setIsregistered',
            'originalimagename' => 'setOriginalimagename',
            'osBit' => 'setOsBit',
            'osType' => 'setOsType',
            'osVersion' => 'setOsVersion',
            'platform' => 'setPlatform',
            'productcode' => 'setProductcode',
            'supportDiskintensive' => 'setSupportDiskintensive',
            'supportHighperformance' => 'setSupportHighperformance',
            'supportKvm' => 'setSupportKvm',
            'supportKvmGpuType' => 'setSupportKvmGpuType',
            'supportKvmInfiniband' => 'setSupportKvmInfiniband',
            'supportLargememory' => 'setSupportLargememory',
            'supportXen' => 'setSupportXen',
            'supportXenGpuType' => 'setSupportXenGpuType',
            'supportXenHana' => 'setSupportXenHana',
            'systemSupportMarket' => 'setSystemSupportMarket',
            'checksum' => 'setChecksum',
            'containerFormat' => 'setContainerFormat',
            'createdAt' => 'setCreatedAt',
            'diskFormat' => 'setDiskFormat',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'file' => 'setFile',
            'id' => 'setId',
            'minDisk' => 'setMinDisk',
            'minRam' => 'setMinRam',
            'name' => 'setName',
            'owner' => 'setOwner',
            'protected' => 'setProtected',
            'schema' => 'setSchema',
            'self' => 'setSelf',
            'size' => 'setSize',
            'status' => 'setStatus',
            'tags' => 'setTags',
            'updatedAt' => 'setUpdatedAt',
            'virtualEnvType' => 'setVirtualEnvType',
            'virtualSize' => 'setVirtualSize',
            'visibility' => 'setVisibility',
            'supportFcInject' => 'setSupportFcInject',
            'hwFirmwareType' => 'setHwFirmwareType',
            'supportArm' => 'setSupportArm',
            'maxRam' => 'setMaxRam',
            'systemCmkid' => 'setSystemCmkid',
            'osFeatureList' => 'setOsFeatureList',
            'accountCode' => 'setAccountCode',
            'hwVifMultiqueueEnabled' => 'setHwVifMultiqueueEnabled',
            'isOffshelved' => 'setIsOffshelved',
            'lazyloading' => 'setLazyloading',
            'rootOrigin' => 'setRootOrigin',
            'sequenceNum' => 'setSequenceNum',
            'activeAt' => 'setActiveAt',
            'supportAgentList' => 'setSupportAgentList',
            'imageDisplayname' => 'setImageDisplayname',
            'supportAmd' => 'setSupportAmd'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * backupId  备份ID。如果是备份创建的镜像，则填写为备份的ID，否则为空
    * dataOrigin  镜像来源。公共镜像为空
    * description  镜像描述信息。 支持字母、数字、中文等，不支持回车、<、 >，长度不能超过1024个字符。
    * imageSize  镜像文件的大小，单位为字节
    * imageSourceType  镜像后端存储类型，目前只支持uds
    * imagetype  镜像类型，目前支持以下类型： 公共镜像：gold 私有镜像：private 共享镜像：shared 市场镜像：market
    * isregistered  是否是注册过的镜像，取值为“true”或者“false”
    * originalimagename  父镜像ID。公共镜像或通过文件创建的私有镜像，取值为空
    * osBit  操作系统位数，一般取值为“32”或者“64”
    * osType  操作系统类型，目前取值Linux， Windows，Other
    * osVersion  操作系统具体版本
    * platform  镜像平台分类
    * productcode  市场镜像的产品ID
    * supportDiskintensive  镜像来源表示该镜像支持密集存储。如果镜像支持密集存储性能，则值为true，否则无需增加该属性。
    * supportHighperformance  表示该镜像支持高计算性能。如果镜像支持高计算性能，则值为true，否则无需增加该属性。
    * supportKvm  如果镜像支持KVM，取值为true，否则无需增加该属性。
    * supportKvmGpuType  表示该镜像是支持KVM虚拟化平台下的GPU类型，如果不支持KVM虚拟机下GPU类型，无需添加该属性。该属性与“__support_xen”和“__support_kvm”属性不共存。
    * supportKvmInfiniband  如果镜像支持KVM虚拟化下Infiniband网卡类型，取值为true。否则，无需添加该属性。该属性与“__support_xen”属性不共存。
    * supportLargememory  表示该镜像支持超大内存。如果镜像支持超大内存，取值为true，否则无需增加该属性。
    * supportXen  如果镜像支持XEN，取值为true，否则无需增加该属性。
    * supportXenGpuType  表示该镜像是支持XEN虚拟化平台下的GPU优化类型，如果不支持XEN虚拟化下GPU类型，无需添加该属性            。该属性与“__support_xen”和“__support_kvm”属性不共存。
    * supportXenHana  如果镜像支持XEN虚拟化下HANA类型，取值为true。否则，无需添加该属性。该属性与“__support_xen”             和“__support_kvm”属性不共存。
    * systemSupportMarket  表示当前镜像是否支持发布为市场镜像,true表示支持,false 表示不支持
    * checksum  目前暂时不使用
    * containerFormat  容器类型
    * createdAt  创建时间。格式为UTC时间
    * diskFormat  镜像的格式，目前支持vhd，zvhd、raw，qcow2。默认值是vhd
    * enterpriseProjectId  表示当前镜像所属的企业项目。取值为0或无该值，表示属于default企业项目，取值为UUID，表示属于该UUID对应的企业项目。
    * file  镜像文件下载和上传链接
    * id  镜像ID
    * minDisk  镜像运行需要的最小磁盘容量，单位为GB。取值为40～1024GB。
    * minRam  镜像运行需要的最小内存，单位为MB。参数取值依据弹性云服务器的规格限制，默认设置为0
    * name  镜像名称。 名称的首尾字母不能为空格。 名称的长度至为1～128位。 名称包含以下4种字符： 大写字母 小写字母 数字 特殊字符包含-、.、_、空格和中文。
    * owner  镜像属于哪个租户
    * protected  是否是受保护的，受保护的镜像不允许删除。取值为true或false
    * schema  镜像视图
    * self  镜像链接信息
    * size  目前暂时不使用
    * status  镜像状态。取值如下：queued：表示镜像元数据已经创建成功，等待 上传镜像文件。saving：表示镜像 正在上传文件到后端存储。deleted：表示镜像已经删除。killed：表示镜像上传错误。active：表示镜像可以正常使用
    * tags  镜像标签列表
    * updatedAt  更新时间。格式为UTC时间
    * virtualEnvType  镜像使用环境类型：FusionCompute，Ironic，DataImage。如果弹性云服务器镜像，则取值为FusionCompute，如果是数据卷镜像则取Dat            aImage，如果是裸金属服务器镜像，则取值是Ironic
    * virtualSize  目前暂时不使用
    * visibility  是否被其他租户可见，取值为private或public
    * supportFcInject  表示当前镜像支持CloudInit密码/密钥注入方式，建议设置为\"true\"或者\"false\"。 如果取值为\"true\"，表示该镜像不支持CloudInit注入密码/密钥，其他取值时表示支持CloudInit注入密钥/密码。
    * hwFirmwareType  云服务器的启动方式。目前支持： bios：表示bios引导启动。 uefi：表示uefi引导启动。
    * supportArm  是否是ARM架构类型的镜像，取值为“true”或者“false”。
    * maxRam  镜像支持的最大内存，单位为MB。取值可以参考云服务器规格限制，一般不设置。
    * systemCmkid  加密镜像所使用的密钥ID。
    * osFeatureList  镜像附加属性。该属性采用JSON格式来标识镜像支持的高级特性清单。
    * accountCode  收费镜像标识。
    * hwVifMultiqueueEnabled  镜像是否支持网卡多队列。取值为“true”或者“false”。
    * isOffshelved  表示当前市场镜像是否下架。true：已下架 false：未下架
    * lazyloading  镜像是否支持延迟加载。取值为“True”或“False”。
    * rootOrigin  表示当前镜像来源是从外部导入。取值：file。
    * sequenceNum  表示当前镜像对应云服务器的系统盘插槽位置。目前暂时不用
    * activeAt  镜像状态变为正常的时间。
    * supportAgentList  镜像是否支持企业主机安全或主机监控。 hss：企业主机安全 ces：主机监控
    * imageDisplayname  对外展示名称。
    * supportAmd  是否是AMD架构类型的镜像。取值为“true”或者“false”。
    *
    * @var string[]
    */
    protected static $getters = [
            'backupId' => 'getBackupId',
            'dataOrigin' => 'getDataOrigin',
            'description' => 'getDescription',
            'imageSize' => 'getImageSize',
            'imageSourceType' => 'getImageSourceType',
            'imagetype' => 'getImagetype',
            'isregistered' => 'getIsregistered',
            'originalimagename' => 'getOriginalimagename',
            'osBit' => 'getOsBit',
            'osType' => 'getOsType',
            'osVersion' => 'getOsVersion',
            'platform' => 'getPlatform',
            'productcode' => 'getProductcode',
            'supportDiskintensive' => 'getSupportDiskintensive',
            'supportHighperformance' => 'getSupportHighperformance',
            'supportKvm' => 'getSupportKvm',
            'supportKvmGpuType' => 'getSupportKvmGpuType',
            'supportKvmInfiniband' => 'getSupportKvmInfiniband',
            'supportLargememory' => 'getSupportLargememory',
            'supportXen' => 'getSupportXen',
            'supportXenGpuType' => 'getSupportXenGpuType',
            'supportXenHana' => 'getSupportXenHana',
            'systemSupportMarket' => 'getSystemSupportMarket',
            'checksum' => 'getChecksum',
            'containerFormat' => 'getContainerFormat',
            'createdAt' => 'getCreatedAt',
            'diskFormat' => 'getDiskFormat',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'file' => 'getFile',
            'id' => 'getId',
            'minDisk' => 'getMinDisk',
            'minRam' => 'getMinRam',
            'name' => 'getName',
            'owner' => 'getOwner',
            'protected' => 'getProtected',
            'schema' => 'getSchema',
            'self' => 'getSelf',
            'size' => 'getSize',
            'status' => 'getStatus',
            'tags' => 'getTags',
            'updatedAt' => 'getUpdatedAt',
            'virtualEnvType' => 'getVirtualEnvType',
            'virtualSize' => 'getVirtualSize',
            'visibility' => 'getVisibility',
            'supportFcInject' => 'getSupportFcInject',
            'hwFirmwareType' => 'getHwFirmwareType',
            'supportArm' => 'getSupportArm',
            'maxRam' => 'getMaxRam',
            'systemCmkid' => 'getSystemCmkid',
            'osFeatureList' => 'getOsFeatureList',
            'accountCode' => 'getAccountCode',
            'hwVifMultiqueueEnabled' => 'getHwVifMultiqueueEnabled',
            'isOffshelved' => 'getIsOffshelved',
            'lazyloading' => 'getLazyloading',
            'rootOrigin' => 'getRootOrigin',
            'sequenceNum' => 'getSequenceNum',
            'activeAt' => 'getActiveAt',
            'supportAgentList' => 'getSupportAgentList',
            'imageDisplayname' => 'getImageDisplayname',
            'supportAmd' => 'getSupportAmd'
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
    const IMAGE_SOURCE_TYPE_UDS = 'uds';
    const IMAGE_SOURCE_TYPE_SWIFT = 'swift';
    const IMAGETYPE_GOLD = 'gold';
    const IMAGETYPE__PRIVATE = 'private';
    const IMAGETYPE_SHARED = 'shared';
    const ISREGISTERED_TRUE = 'true';
    const ISREGISTERED_FALSE = 'false';
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
    const STATUS_QUEUED = 'queued';
    const STATUS_SAVING = 'saving';
    const STATUS_DELETED = 'deleted';
    const STATUS_KILLED = 'killed';
    const STATUS_ACTIVE = 'active';
    const VIRTUAL_ENV_TYPE_FUSION_COMPUTE = 'FusionCompute';
    const VIRTUAL_ENV_TYPE_IRONIC = 'Ironic';
    const VIRTUAL_ENV_TYPE_DATA_IMAGE = 'DataImage';
    const VISIBILITY__PRIVATE = 'private';
    const VISIBILITY__PUBLIC = 'public';
    const SUPPORT_FC_INJECT_TRUE = 'true';
    const SUPPORT_FC_INJECT_FALSE = 'false';
    const HW_FIRMWARE_TYPE_BIOS = 'bios';
    const HW_FIRMWARE_TYPE_UEFI = 'uefi';
    const SUPPORT_ARM_TRUE = 'true';
    const SUPPORT_ARM_FALSE = 'false';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getImageSourceTypeAllowableValues()
    {
        return [
            self::IMAGE_SOURCE_TYPE_UDS,
            self::IMAGE_SOURCE_TYPE_SWIFT,
        ];
    }

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
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getIsregisteredAllowableValues()
    {
        return [
            self::ISREGISTERED_TRUE,
            self::ISREGISTERED_FALSE,
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
    public function getVirtualEnvTypeAllowableValues()
    {
        return [
            self::VIRTUAL_ENV_TYPE_FUSION_COMPUTE,
            self::VIRTUAL_ENV_TYPE_IRONIC,
            self::VIRTUAL_ENV_TYPE_DATA_IMAGE,
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
            self::VISIBILITY__PRIVATE,
            self::VISIBILITY__PUBLIC,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSupportFcInjectAllowableValues()
    {
        return [
            self::SUPPORT_FC_INJECT_TRUE,
            self::SUPPORT_FC_INJECT_FALSE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getHwFirmwareTypeAllowableValues()
    {
        return [
            self::HW_FIRMWARE_TYPE_BIOS,
            self::HW_FIRMWARE_TYPE_UEFI,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSupportArmAllowableValues()
    {
        return [
            self::SUPPORT_ARM_TRUE,
            self::SUPPORT_ARM_FALSE,
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
        $this->container['backupId'] = isset($data['backupId']) ? $data['backupId'] : null;
        $this->container['dataOrigin'] = isset($data['dataOrigin']) ? $data['dataOrigin'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['imageSize'] = isset($data['imageSize']) ? $data['imageSize'] : null;
        $this->container['imageSourceType'] = isset($data['imageSourceType']) ? $data['imageSourceType'] : null;
        $this->container['imagetype'] = isset($data['imagetype']) ? $data['imagetype'] : null;
        $this->container['isregistered'] = isset($data['isregistered']) ? $data['isregistered'] : null;
        $this->container['originalimagename'] = isset($data['originalimagename']) ? $data['originalimagename'] : null;
        $this->container['osBit'] = isset($data['osBit']) ? $data['osBit'] : null;
        $this->container['osType'] = isset($data['osType']) ? $data['osType'] : null;
        $this->container['osVersion'] = isset($data['osVersion']) ? $data['osVersion'] : null;
        $this->container['platform'] = isset($data['platform']) ? $data['platform'] : null;
        $this->container['productcode'] = isset($data['productcode']) ? $data['productcode'] : null;
        $this->container['supportDiskintensive'] = isset($data['supportDiskintensive']) ? $data['supportDiskintensive'] : null;
        $this->container['supportHighperformance'] = isset($data['supportHighperformance']) ? $data['supportHighperformance'] : null;
        $this->container['supportKvm'] = isset($data['supportKvm']) ? $data['supportKvm'] : null;
        $this->container['supportKvmGpuType'] = isset($data['supportKvmGpuType']) ? $data['supportKvmGpuType'] : null;
        $this->container['supportKvmInfiniband'] = isset($data['supportKvmInfiniband']) ? $data['supportKvmInfiniband'] : null;
        $this->container['supportLargememory'] = isset($data['supportLargememory']) ? $data['supportLargememory'] : null;
        $this->container['supportXen'] = isset($data['supportXen']) ? $data['supportXen'] : null;
        $this->container['supportXenGpuType'] = isset($data['supportXenGpuType']) ? $data['supportXenGpuType'] : null;
        $this->container['supportXenHana'] = isset($data['supportXenHana']) ? $data['supportXenHana'] : null;
        $this->container['systemSupportMarket'] = isset($data['systemSupportMarket']) ? $data['systemSupportMarket'] : null;
        $this->container['checksum'] = isset($data['checksum']) ? $data['checksum'] : null;
        $this->container['containerFormat'] = isset($data['containerFormat']) ? $data['containerFormat'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['diskFormat'] = isset($data['diskFormat']) ? $data['diskFormat'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['file'] = isset($data['file']) ? $data['file'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['minDisk'] = isset($data['minDisk']) ? $data['minDisk'] : null;
        $this->container['minRam'] = isset($data['minRam']) ? $data['minRam'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['protected'] = isset($data['protected']) ? $data['protected'] : null;
        $this->container['schema'] = isset($data['schema']) ? $data['schema'] : null;
        $this->container['self'] = isset($data['self']) ? $data['self'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['virtualEnvType'] = isset($data['virtualEnvType']) ? $data['virtualEnvType'] : null;
        $this->container['virtualSize'] = isset($data['virtualSize']) ? $data['virtualSize'] : null;
        $this->container['visibility'] = isset($data['visibility']) ? $data['visibility'] : null;
        $this->container['supportFcInject'] = isset($data['supportFcInject']) ? $data['supportFcInject'] : null;
        $this->container['hwFirmwareType'] = isset($data['hwFirmwareType']) ? $data['hwFirmwareType'] : null;
        $this->container['supportArm'] = isset($data['supportArm']) ? $data['supportArm'] : null;
        $this->container['maxRam'] = isset($data['maxRam']) ? $data['maxRam'] : null;
        $this->container['systemCmkid'] = isset($data['systemCmkid']) ? $data['systemCmkid'] : null;
        $this->container['osFeatureList'] = isset($data['osFeatureList']) ? $data['osFeatureList'] : null;
        $this->container['accountCode'] = isset($data['accountCode']) ? $data['accountCode'] : null;
        $this->container['hwVifMultiqueueEnabled'] = isset($data['hwVifMultiqueueEnabled']) ? $data['hwVifMultiqueueEnabled'] : null;
        $this->container['isOffshelved'] = isset($data['isOffshelved']) ? $data['isOffshelved'] : null;
        $this->container['lazyloading'] = isset($data['lazyloading']) ? $data['lazyloading'] : null;
        $this->container['rootOrigin'] = isset($data['rootOrigin']) ? $data['rootOrigin'] : null;
        $this->container['sequenceNum'] = isset($data['sequenceNum']) ? $data['sequenceNum'] : null;
        $this->container['activeAt'] = isset($data['activeAt']) ? $data['activeAt'] : null;
        $this->container['supportAgentList'] = isset($data['supportAgentList']) ? $data['supportAgentList'] : null;
        $this->container['imageDisplayname'] = isset($data['imageDisplayname']) ? $data['imageDisplayname'] : null;
        $this->container['supportAmd'] = isset($data['supportAmd']) ? $data['supportAmd'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getImageSourceTypeAllowableValues();
                if (!is_null($this->container['imageSourceType']) && !in_array($this->container['imageSourceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'imageSourceType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getImagetypeAllowableValues();
                if (!is_null($this->container['imagetype']) && !in_array($this->container['imagetype'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'imagetype', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getIsregisteredAllowableValues();
                if (!is_null($this->container['isregistered']) && !in_array($this->container['isregistered'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'isregistered', must be one of '%s'",
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

            if (!is_null($this->container['minDisk']) && ($this->container['minDisk'] > 1024)) {
                $invalidProperties[] = "invalid value for 'minDisk', must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['minDisk']) && ($this->container['minDisk'] < 40)) {
                $invalidProperties[] = "invalid value for 'minDisk', must be bigger than or equal to 40.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getVirtualEnvTypeAllowableValues();
                if (!is_null($this->container['virtualEnvType']) && !in_array($this->container['virtualEnvType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'virtualEnvType', must be one of '%s'",
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

            $allowedValues = $this->getSupportFcInjectAllowableValues();
                if (!is_null($this->container['supportFcInject']) && !in_array($this->container['supportFcInject'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'supportFcInject', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getHwFirmwareTypeAllowableValues();
                if (!is_null($this->container['hwFirmwareType']) && !in_array($this->container['hwFirmwareType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'hwFirmwareType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getSupportArmAllowableValues();
                if (!is_null($this->container['supportArm']) && !in_array($this->container['supportArm'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'supportArm', must be one of '%s'",
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
    * Gets backupId
    *  备份ID。如果是备份创建的镜像，则填写为备份的ID，否则为空
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
    * @param string|null $backupId 备份ID。如果是备份创建的镜像，则填写为备份的ID，否则为空
    *
    * @return $this
    */
    public function setBackupId($backupId)
    {
        $this->container['backupId'] = $backupId;
        return $this;
    }

    /**
    * Gets dataOrigin
    *  镜像来源。公共镜像为空
    *
    * @return string|null
    */
    public function getDataOrigin()
    {
        return $this->container['dataOrigin'];
    }

    /**
    * Sets dataOrigin
    *
    * @param string|null $dataOrigin 镜像来源。公共镜像为空
    *
    * @return $this
    */
    public function setDataOrigin($dataOrigin)
    {
        $this->container['dataOrigin'] = $dataOrigin;
        return $this;
    }

    /**
    * Gets description
    *  镜像描述信息。 支持字母、数字、中文等，不支持回车、<、 >，长度不能超过1024个字符。
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
    * @param string|null $description 镜像描述信息。 支持字母、数字、中文等，不支持回车、<、 >，长度不能超过1024个字符。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets imageSize
    *  镜像文件的大小，单位为字节
    *
    * @return string|null
    */
    public function getImageSize()
    {
        return $this->container['imageSize'];
    }

    /**
    * Sets imageSize
    *
    * @param string|null $imageSize 镜像文件的大小，单位为字节
    *
    * @return $this
    */
    public function setImageSize($imageSize)
    {
        $this->container['imageSize'] = $imageSize;
        return $this;
    }

    /**
    * Gets imageSourceType
    *  镜像后端存储类型，目前只支持uds
    *
    * @return string|null
    */
    public function getImageSourceType()
    {
        return $this->container['imageSourceType'];
    }

    /**
    * Sets imageSourceType
    *
    * @param string|null $imageSourceType 镜像后端存储类型，目前只支持uds
    *
    * @return $this
    */
    public function setImageSourceType($imageSourceType)
    {
        $this->container['imageSourceType'] = $imageSourceType;
        return $this;
    }

    /**
    * Gets imagetype
    *  镜像类型，目前支持以下类型： 公共镜像：gold 私有镜像：private 共享镜像：shared 市场镜像：market
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
    * @param string|null $imagetype 镜像类型，目前支持以下类型： 公共镜像：gold 私有镜像：private 共享镜像：shared 市场镜像：market
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
    *  是否是注册过的镜像，取值为“true”或者“false”
    *
    * @return string|null
    */
    public function getIsregistered()
    {
        return $this->container['isregistered'];
    }

    /**
    * Sets isregistered
    *
    * @param string|null $isregistered 是否是注册过的镜像，取值为“true”或者“false”
    *
    * @return $this
    */
    public function setIsregistered($isregistered)
    {
        $this->container['isregistered'] = $isregistered;
        return $this;
    }

    /**
    * Gets originalimagename
    *  父镜像ID。公共镜像或通过文件创建的私有镜像，取值为空
    *
    * @return string|null
    */
    public function getOriginalimagename()
    {
        return $this->container['originalimagename'];
    }

    /**
    * Sets originalimagename
    *
    * @param string|null $originalimagename 父镜像ID。公共镜像或通过文件创建的私有镜像，取值为空
    *
    * @return $this
    */
    public function setOriginalimagename($originalimagename)
    {
        $this->container['originalimagename'] = $originalimagename;
        return $this;
    }

    /**
    * Gets osBit
    *  操作系统位数，一般取值为“32”或者“64”
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
    * @param string|null $osBit 操作系统位数，一般取值为“32”或者“64”
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
    *  操作系统类型，目前取值Linux， Windows，Other
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
    * @param string|null $osType 操作系统类型，目前取值Linux， Windows，Other
    *
    * @return $this
    */
    public function setOsType($osType)
    {
        $this->container['osType'] = $osType;
        return $this;
    }

    /**
    * Gets osVersion
    *  操作系统具体版本
    *
    * @return string|null
    */
    public function getOsVersion()
    {
        return $this->container['osVersion'];
    }

    /**
    * Sets osVersion
    *
    * @param string|null $osVersion 操作系统具体版本
    *
    * @return $this
    */
    public function setOsVersion($osVersion)
    {
        $this->container['osVersion'] = $osVersion;
        return $this;
    }

    /**
    * Gets platform
    *  镜像平台分类
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
    * @param string|null $platform 镜像平台分类
    *
    * @return $this
    */
    public function setPlatform($platform)
    {
        $this->container['platform'] = $platform;
        return $this;
    }

    /**
    * Gets productcode
    *  市场镜像的产品ID
    *
    * @return string|null
    */
    public function getProductcode()
    {
        return $this->container['productcode'];
    }

    /**
    * Sets productcode
    *
    * @param string|null $productcode 市场镜像的产品ID
    *
    * @return $this
    */
    public function setProductcode($productcode)
    {
        $this->container['productcode'] = $productcode;
        return $this;
    }

    /**
    * Gets supportDiskintensive
    *  镜像来源表示该镜像支持密集存储。如果镜像支持密集存储性能，则值为true，否则无需增加该属性。
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
    * @param string|null $supportDiskintensive 镜像来源表示该镜像支持密集存储。如果镜像支持密集存储性能，则值为true，否则无需增加该属性。
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
    *  表示该镜像支持高计算性能。如果镜像支持高计算性能，则值为true，否则无需增加该属性。
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
    * @param string|null $supportHighperformance 表示该镜像支持高计算性能。如果镜像支持高计算性能，则值为true，否则无需增加该属性。
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
    *  如果镜像支持KVM，取值为true，否则无需增加该属性。
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
    * @param string|null $supportKvm 如果镜像支持KVM，取值为true，否则无需增加该属性。
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
    *  表示该镜像是支持KVM虚拟化平台下的GPU类型，如果不支持KVM虚拟机下GPU类型，无需添加该属性。该属性与“__support_xen”和“__support_kvm”属性不共存。
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
    * @param string|null $supportKvmGpuType 表示该镜像是支持KVM虚拟化平台下的GPU类型，如果不支持KVM虚拟机下GPU类型，无需添加该属性。该属性与“__support_xen”和“__support_kvm”属性不共存。
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
    *  表示该镜像支持超大内存。如果镜像支持超大内存，取值为true，否则无需增加该属性。
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
    * @param string|null $supportLargememory 表示该镜像支持超大内存。如果镜像支持超大内存，取值为true，否则无需增加该属性。
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
    *  如果镜像支持XEN，取值为true，否则无需增加该属性。
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
    * @param string|null $supportXen 如果镜像支持XEN，取值为true，否则无需增加该属性。
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
    *  表示该镜像是支持XEN虚拟化平台下的GPU优化类型，如果不支持XEN虚拟化下GPU类型，无需添加该属性            。该属性与“__support_xen”和“__support_kvm”属性不共存。
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
    * @param string|null $supportXenGpuType 表示该镜像是支持XEN虚拟化平台下的GPU优化类型，如果不支持XEN虚拟化下GPU类型，无需添加该属性            。该属性与“__support_xen”和“__support_kvm”属性不共存。
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
    *  如果镜像支持XEN虚拟化下HANA类型，取值为true。否则，无需添加该属性。该属性与“__support_xen”             和“__support_kvm”属性不共存。
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
    * @param string|null $supportXenHana 如果镜像支持XEN虚拟化下HANA类型，取值为true。否则，无需添加该属性。该属性与“__support_xen”             和“__support_kvm”属性不共存。
    *
    * @return $this
    */
    public function setSupportXenHana($supportXenHana)
    {
        $this->container['supportXenHana'] = $supportXenHana;
        return $this;
    }

    /**
    * Gets systemSupportMarket
    *  表示当前镜像是否支持发布为市场镜像,true表示支持,false 表示不支持
    *
    * @return bool|null
    */
    public function getSystemSupportMarket()
    {
        return $this->container['systemSupportMarket'];
    }

    /**
    * Sets systemSupportMarket
    *
    * @param bool|null $systemSupportMarket 表示当前镜像是否支持发布为市场镜像,true表示支持,false 表示不支持
    *
    * @return $this
    */
    public function setSystemSupportMarket($systemSupportMarket)
    {
        $this->container['systemSupportMarket'] = $systemSupportMarket;
        return $this;
    }

    /**
    * Gets checksum
    *  目前暂时不使用
    *
    * @return string|null
    */
    public function getChecksum()
    {
        return $this->container['checksum'];
    }

    /**
    * Sets checksum
    *
    * @param string|null $checksum 目前暂时不使用
    *
    * @return $this
    */
    public function setChecksum($checksum)
    {
        $this->container['checksum'] = $checksum;
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
    * Gets createdAt
    *  创建时间。格式为UTC时间
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
    * @param string|null $createdAt 创建时间。格式为UTC时间
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets diskFormat
    *  镜像的格式，目前支持vhd，zvhd、raw，qcow2。默认值是vhd
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
    * @param string|null $diskFormat 镜像的格式，目前支持vhd，zvhd、raw，qcow2。默认值是vhd
    *
    * @return $this
    */
    public function setDiskFormat($diskFormat)
    {
        $this->container['diskFormat'] = $diskFormat;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  表示当前镜像所属的企业项目。取值为0或无该值，表示属于default企业项目，取值为UUID，表示属于该UUID对应的企业项目。
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
    * @param string|null $enterpriseProjectId 表示当前镜像所属的企业项目。取值为0或无该值，表示属于default企业项目，取值为UUID，表示属于该UUID对应的企业项目。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets file
    *  镜像文件下载和上传链接
    *
    * @return string|null
    */
    public function getFile()
    {
        return $this->container['file'];
    }

    /**
    * Sets file
    *
    * @param string|null $file 镜像文件下载和上传链接
    *
    * @return $this
    */
    public function setFile($file)
    {
        $this->container['file'] = $file;
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
    * Gets minDisk
    *  镜像运行需要的最小磁盘容量，单位为GB。取值为40～1024GB。
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
    * @param int|null $minDisk 镜像运行需要的最小磁盘容量，单位为GB。取值为40～1024GB。
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
    *  镜像运行需要的最小内存，单位为MB。参数取值依据弹性云服务器的规格限制，默认设置为0
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
    * @param int|null $minRam 镜像运行需要的最小内存，单位为MB。参数取值依据弹性云服务器的规格限制，默认设置为0
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
    *  镜像名称。 名称的首尾字母不能为空格。 名称的长度至为1～128位。 名称包含以下4种字符： 大写字母 小写字母 数字 特殊字符包含-、.、_、空格和中文。
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
    * @param string|null $name 镜像名称。 名称的首尾字母不能为空格。 名称的长度至为1～128位。 名称包含以下4种字符： 大写字母 小写字母 数字 特殊字符包含-、.、_、空格和中文。
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
    *  是否是受保护的，受保护的镜像不允许删除。取值为true或false
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
    * @param bool|null $protected 是否是受保护的，受保护的镜像不允许删除。取值为true或false
    *
    * @return $this
    */
    public function setProtected($protected)
    {
        $this->container['protected'] = $protected;
        return $this;
    }

    /**
    * Gets schema
    *  镜像视图
    *
    * @return string|null
    */
    public function getSchema()
    {
        return $this->container['schema'];
    }

    /**
    * Sets schema
    *
    * @param string|null $schema 镜像视图
    *
    * @return $this
    */
    public function setSchema($schema)
    {
        $this->container['schema'] = $schema;
        return $this;
    }

    /**
    * Gets self
    *  镜像链接信息
    *
    * @return string|null
    */
    public function getSelf()
    {
        return $this->container['self'];
    }

    /**
    * Sets self
    *
    * @param string|null $self 镜像链接信息
    *
    * @return $this
    */
    public function setSelf($self)
    {
        $this->container['self'] = $self;
        return $this;
    }

    /**
    * Gets size
    *  目前暂时不使用
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
    * @param int|null $size 目前暂时不使用
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
    *  镜像状态。取值如下：queued：表示镜像元数据已经创建成功，等待 上传镜像文件。saving：表示镜像 正在上传文件到后端存储。deleted：表示镜像已经删除。killed：表示镜像上传错误。active：表示镜像可以正常使用
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
    * @param string|null $status 镜像状态。取值如下：queued：表示镜像元数据已经创建成功，等待 上传镜像文件。saving：表示镜像 正在上传文件到后端存储。deleted：表示镜像已经删除。killed：表示镜像上传错误。active：表示镜像可以正常使用
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets tags
    *  镜像标签列表
    *
    * @return string[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param string[]|null $tags 镜像标签列表
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets updatedAt
    *  更新时间。格式为UTC时间
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
    * @param string|null $updatedAt 更新时间。格式为UTC时间
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets virtualEnvType
    *  镜像使用环境类型：FusionCompute，Ironic，DataImage。如果弹性云服务器镜像，则取值为FusionCompute，如果是数据卷镜像则取Dat            aImage，如果是裸金属服务器镜像，则取值是Ironic
    *
    * @return string|null
    */
    public function getVirtualEnvType()
    {
        return $this->container['virtualEnvType'];
    }

    /**
    * Sets virtualEnvType
    *
    * @param string|null $virtualEnvType 镜像使用环境类型：FusionCompute，Ironic，DataImage。如果弹性云服务器镜像，则取值为FusionCompute，如果是数据卷镜像则取Dat            aImage，如果是裸金属服务器镜像，则取值是Ironic
    *
    * @return $this
    */
    public function setVirtualEnvType($virtualEnvType)
    {
        $this->container['virtualEnvType'] = $virtualEnvType;
        return $this;
    }

    /**
    * Gets virtualSize
    *  目前暂时不使用
    *
    * @return int|null
    */
    public function getVirtualSize()
    {
        return $this->container['virtualSize'];
    }

    /**
    * Sets virtualSize
    *
    * @param int|null $virtualSize 目前暂时不使用
    *
    * @return $this
    */
    public function setVirtualSize($virtualSize)
    {
        $this->container['virtualSize'] = $virtualSize;
        return $this;
    }

    /**
    * Gets visibility
    *  是否被其他租户可见，取值为private或public
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
    * @param string|null $visibility 是否被其他租户可见，取值为private或public
    *
    * @return $this
    */
    public function setVisibility($visibility)
    {
        $this->container['visibility'] = $visibility;
        return $this;
    }

    /**
    * Gets supportFcInject
    *  表示当前镜像支持CloudInit密码/密钥注入方式，建议设置为\"true\"或者\"false\"。 如果取值为\"true\"，表示该镜像不支持CloudInit注入密码/密钥，其他取值时表示支持CloudInit注入密钥/密码。
    *
    * @return string|null
    */
    public function getSupportFcInject()
    {
        return $this->container['supportFcInject'];
    }

    /**
    * Sets supportFcInject
    *
    * @param string|null $supportFcInject 表示当前镜像支持CloudInit密码/密钥注入方式，建议设置为\"true\"或者\"false\"。 如果取值为\"true\"，表示该镜像不支持CloudInit注入密码/密钥，其他取值时表示支持CloudInit注入密钥/密码。
    *
    * @return $this
    */
    public function setSupportFcInject($supportFcInject)
    {
        $this->container['supportFcInject'] = $supportFcInject;
        return $this;
    }

    /**
    * Gets hwFirmwareType
    *  云服务器的启动方式。目前支持： bios：表示bios引导启动。 uefi：表示uefi引导启动。
    *
    * @return string|null
    */
    public function getHwFirmwareType()
    {
        return $this->container['hwFirmwareType'];
    }

    /**
    * Sets hwFirmwareType
    *
    * @param string|null $hwFirmwareType 云服务器的启动方式。目前支持： bios：表示bios引导启动。 uefi：表示uefi引导启动。
    *
    * @return $this
    */
    public function setHwFirmwareType($hwFirmwareType)
    {
        $this->container['hwFirmwareType'] = $hwFirmwareType;
        return $this;
    }

    /**
    * Gets supportArm
    *  是否是ARM架构类型的镜像，取值为“true”或者“false”。
    *
    * @return string|null
    */
    public function getSupportArm()
    {
        return $this->container['supportArm'];
    }

    /**
    * Sets supportArm
    *
    * @param string|null $supportArm 是否是ARM架构类型的镜像，取值为“true”或者“false”。
    *
    * @return $this
    */
    public function setSupportArm($supportArm)
    {
        $this->container['supportArm'] = $supportArm;
        return $this;
    }

    /**
    * Gets maxRam
    *  镜像支持的最大内存，单位为MB。取值可以参考云服务器规格限制，一般不设置。
    *
    * @return string|null
    */
    public function getMaxRam()
    {
        return $this->container['maxRam'];
    }

    /**
    * Sets maxRam
    *
    * @param string|null $maxRam 镜像支持的最大内存，单位为MB。取值可以参考云服务器规格限制，一般不设置。
    *
    * @return $this
    */
    public function setMaxRam($maxRam)
    {
        $this->container['maxRam'] = $maxRam;
        return $this;
    }

    /**
    * Gets systemCmkid
    *  加密镜像所使用的密钥ID。
    *
    * @return string|null
    */
    public function getSystemCmkid()
    {
        return $this->container['systemCmkid'];
    }

    /**
    * Sets systemCmkid
    *
    * @param string|null $systemCmkid 加密镜像所使用的密钥ID。
    *
    * @return $this
    */
    public function setSystemCmkid($systemCmkid)
    {
        $this->container['systemCmkid'] = $systemCmkid;
        return $this;
    }

    /**
    * Gets osFeatureList
    *  镜像附加属性。该属性采用JSON格式来标识镜像支持的高级特性清单。
    *
    * @return string|null
    */
    public function getOsFeatureList()
    {
        return $this->container['osFeatureList'];
    }

    /**
    * Sets osFeatureList
    *
    * @param string|null $osFeatureList 镜像附加属性。该属性采用JSON格式来标识镜像支持的高级特性清单。
    *
    * @return $this
    */
    public function setOsFeatureList($osFeatureList)
    {
        $this->container['osFeatureList'] = $osFeatureList;
        return $this;
    }

    /**
    * Gets accountCode
    *  收费镜像标识。
    *
    * @return string|null
    */
    public function getAccountCode()
    {
        return $this->container['accountCode'];
    }

    /**
    * Sets accountCode
    *
    * @param string|null $accountCode 收费镜像标识。
    *
    * @return $this
    */
    public function setAccountCode($accountCode)
    {
        $this->container['accountCode'] = $accountCode;
        return $this;
    }

    /**
    * Gets hwVifMultiqueueEnabled
    *  镜像是否支持网卡多队列。取值为“true”或者“false”。
    *
    * @return string|null
    */
    public function getHwVifMultiqueueEnabled()
    {
        return $this->container['hwVifMultiqueueEnabled'];
    }

    /**
    * Sets hwVifMultiqueueEnabled
    *
    * @param string|null $hwVifMultiqueueEnabled 镜像是否支持网卡多队列。取值为“true”或者“false”。
    *
    * @return $this
    */
    public function setHwVifMultiqueueEnabled($hwVifMultiqueueEnabled)
    {
        $this->container['hwVifMultiqueueEnabled'] = $hwVifMultiqueueEnabled;
        return $this;
    }

    /**
    * Gets isOffshelved
    *  表示当前市场镜像是否下架。true：已下架 false：未下架
    *
    * @return string|null
    */
    public function getIsOffshelved()
    {
        return $this->container['isOffshelved'];
    }

    /**
    * Sets isOffshelved
    *
    * @param string|null $isOffshelved 表示当前市场镜像是否下架。true：已下架 false：未下架
    *
    * @return $this
    */
    public function setIsOffshelved($isOffshelved)
    {
        $this->container['isOffshelved'] = $isOffshelved;
        return $this;
    }

    /**
    * Gets lazyloading
    *  镜像是否支持延迟加载。取值为“True”或“False”。
    *
    * @return string|null
    */
    public function getLazyloading()
    {
        return $this->container['lazyloading'];
    }

    /**
    * Sets lazyloading
    *
    * @param string|null $lazyloading 镜像是否支持延迟加载。取值为“True”或“False”。
    *
    * @return $this
    */
    public function setLazyloading($lazyloading)
    {
        $this->container['lazyloading'] = $lazyloading;
        return $this;
    }

    /**
    * Gets rootOrigin
    *  表示当前镜像来源是从外部导入。取值：file。
    *
    * @return string|null
    */
    public function getRootOrigin()
    {
        return $this->container['rootOrigin'];
    }

    /**
    * Sets rootOrigin
    *
    * @param string|null $rootOrigin 表示当前镜像来源是从外部导入。取值：file。
    *
    * @return $this
    */
    public function setRootOrigin($rootOrigin)
    {
        $this->container['rootOrigin'] = $rootOrigin;
        return $this;
    }

    /**
    * Gets sequenceNum
    *  表示当前镜像对应云服务器的系统盘插槽位置。目前暂时不用
    *
    * @return string|null
    */
    public function getSequenceNum()
    {
        return $this->container['sequenceNum'];
    }

    /**
    * Sets sequenceNum
    *
    * @param string|null $sequenceNum 表示当前镜像对应云服务器的系统盘插槽位置。目前暂时不用
    *
    * @return $this
    */
    public function setSequenceNum($sequenceNum)
    {
        $this->container['sequenceNum'] = $sequenceNum;
        return $this;
    }

    /**
    * Gets activeAt
    *  镜像状态变为正常的时间。
    *
    * @return string|null
    */
    public function getActiveAt()
    {
        return $this->container['activeAt'];
    }

    /**
    * Sets activeAt
    *
    * @param string|null $activeAt 镜像状态变为正常的时间。
    *
    * @return $this
    */
    public function setActiveAt($activeAt)
    {
        $this->container['activeAt'] = $activeAt;
        return $this;
    }

    /**
    * Gets supportAgentList
    *  镜像是否支持企业主机安全或主机监控。 hss：企业主机安全 ces：主机监控
    *
    * @return string|null
    */
    public function getSupportAgentList()
    {
        return $this->container['supportAgentList'];
    }

    /**
    * Sets supportAgentList
    *
    * @param string|null $supportAgentList 镜像是否支持企业主机安全或主机监控。 hss：企业主机安全 ces：主机监控
    *
    * @return $this
    */
    public function setSupportAgentList($supportAgentList)
    {
        $this->container['supportAgentList'] = $supportAgentList;
        return $this;
    }

    /**
    * Gets imageDisplayname
    *  对外展示名称。
    *
    * @return string|null
    */
    public function getImageDisplayname()
    {
        return $this->container['imageDisplayname'];
    }

    /**
    * Sets imageDisplayname
    *
    * @param string|null $imageDisplayname 对外展示名称。
    *
    * @return $this
    */
    public function setImageDisplayname($imageDisplayname)
    {
        $this->container['imageDisplayname'] = $imageDisplayname;
        return $this;
    }

    /**
    * Gets supportAmd
    *  是否是AMD架构类型的镜像。取值为“true”或者“false”。
    *
    * @return string|null
    */
    public function getSupportAmd()
    {
        return $this->container['supportAmd'];
    }

    /**
    * Sets supportAmd
    *
    * @param string|null $supportAmd 是否是AMD架构类型的镜像。取值为“true”或者“false”。
    *
    * @return $this
    */
    public function setSupportAmd($supportAmd)
    {
        $this->container['supportAmd'] = $supportAmd;
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

