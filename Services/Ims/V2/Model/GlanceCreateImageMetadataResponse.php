<?php

namespace HuaweiCloud\SDK\Ims\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GlanceCreateImageMetadataResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GlanceCreateImageMetadataResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * visibility  其他租户是否可见。取值为private。
    * name  镜像名称，如果未指定name的取值，则默认为空，但是使用该镜像创建虚拟机会失败。名称的长度为1～128位。
    * protected  镜像是否被保护，保护后的镜像不可删除。取值为false
    * containerFormat  容器格式。取值为bare。
    * diskFormat  镜像文件格式。目前支持vhd、zvhd、raw、qcow2。默认值是vhd。
    * tags  镜像标签列表。长度为1～255位。
    * minRam  镜像运行最小内存，单位为MB。取值参考ECS规格限制，一般设置为0。云服务器的规格限制，请参见规格清单。
    * minDisk  镜像运行需要的最小磁盘容量，单位为GB 。取值为40～1024GB。必须大于镜像系统盘容量，否则创建云主机云服务器可能失败。
    * status  镜像状态。取值如下：queued：表示镜像元数据已经创建成功，等待上传镜像文件。saving：表示镜像正在上传文件到后端存储。deleted：表示镜像已经删除。killed：表示镜像上传错误。active：表示镜像可以正常使用。
    * createdAt  创建时间。格式为UTC时间。
    * updatedAt  更新时间。格式为UTC时间。
    * self  本镜像链接。
    * id  镜像ID，用户调用创建镜像接口后，需保存该镜像的ID，用来调用上传镜像接口完成镜像上传。
    * file  上传下载镜像文件的地址链接。
    * schema  视图链接。
    * imageSourceType  镜像后端存储类型，目前支持uds。
    * imageSize  镜像大小。单位为字节。
    * isregistered  镜像是否注册。只有已注册的镜像才能在Portal界面上查询到。取值为true。
    * osVersion  镜像的操作系统具体版本。
    * osType  镜像的操作系统类型，取值由__os_version确定。支持Windows、Linux和other。
    * platform  表示镜像支持的操作系统平台。取值由__os_version确定
    * osBit  表示操作系统位数。取值由__os_version确定，取值为32或64。
    * imagetype  镜像类型。取值为private，表示私有镜像。
    * virtualEnvType  平台类型。镜像使用环境类型：FusionCompute、Ironic、DataImage。如果是云主机云服务器镜像，则取值为FusionCompute。如果是数据卷镜像则取值是DataImage。如果是物理机裸金属服务器镜像，则取值是Ironic。
    * owner  镜像所属项目ID。
    * virtualSize  镜像虚拟大小。单位为字节。
    * properties  镜像属性的集合，不表示具体的镜像属性
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'visibility' => 'string',
            'name' => 'string',
            'protected' => 'bool',
            'containerFormat' => 'string',
            'diskFormat' => 'string',
            'tags' => 'string[]',
            'minRam' => 'int',
            'minDisk' => 'int',
            'status' => 'string',
            'createdAt' => 'string',
            'updatedAt' => 'string',
            'self' => 'string',
            'id' => 'string',
            'file' => 'string',
            'schema' => 'string',
            'imageSourceType' => 'string',
            'imageSize' => 'string',
            'isregistered' => 'string',
            'osVersion' => 'string',
            'osType' => 'string',
            'platform' => 'string',
            'osBit' => 'string',
            'imagetype' => 'string',
            'virtualEnvType' => 'string',
            'owner' => 'string',
            'virtualSize' => 'int',
            'properties' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * visibility  其他租户是否可见。取值为private。
    * name  镜像名称，如果未指定name的取值，则默认为空，但是使用该镜像创建虚拟机会失败。名称的长度为1～128位。
    * protected  镜像是否被保护，保护后的镜像不可删除。取值为false
    * containerFormat  容器格式。取值为bare。
    * diskFormat  镜像文件格式。目前支持vhd、zvhd、raw、qcow2。默认值是vhd。
    * tags  镜像标签列表。长度为1～255位。
    * minRam  镜像运行最小内存，单位为MB。取值参考ECS规格限制，一般设置为0。云服务器的规格限制，请参见规格清单。
    * minDisk  镜像运行需要的最小磁盘容量，单位为GB 。取值为40～1024GB。必须大于镜像系统盘容量，否则创建云主机云服务器可能失败。
    * status  镜像状态。取值如下：queued：表示镜像元数据已经创建成功，等待上传镜像文件。saving：表示镜像正在上传文件到后端存储。deleted：表示镜像已经删除。killed：表示镜像上传错误。active：表示镜像可以正常使用。
    * createdAt  创建时间。格式为UTC时间。
    * updatedAt  更新时间。格式为UTC时间。
    * self  本镜像链接。
    * id  镜像ID，用户调用创建镜像接口后，需保存该镜像的ID，用来调用上传镜像接口完成镜像上传。
    * file  上传下载镜像文件的地址链接。
    * schema  视图链接。
    * imageSourceType  镜像后端存储类型，目前支持uds。
    * imageSize  镜像大小。单位为字节。
    * isregistered  镜像是否注册。只有已注册的镜像才能在Portal界面上查询到。取值为true。
    * osVersion  镜像的操作系统具体版本。
    * osType  镜像的操作系统类型，取值由__os_version确定。支持Windows、Linux和other。
    * platform  表示镜像支持的操作系统平台。取值由__os_version确定
    * osBit  表示操作系统位数。取值由__os_version确定，取值为32或64。
    * imagetype  镜像类型。取值为private，表示私有镜像。
    * virtualEnvType  平台类型。镜像使用环境类型：FusionCompute、Ironic、DataImage。如果是云主机云服务器镜像，则取值为FusionCompute。如果是数据卷镜像则取值是DataImage。如果是物理机裸金属服务器镜像，则取值是Ironic。
    * owner  镜像所属项目ID。
    * virtualSize  镜像虚拟大小。单位为字节。
    * properties  镜像属性的集合，不表示具体的镜像属性
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'visibility' => null,
        'name' => null,
        'protected' => null,
        'containerFormat' => null,
        'diskFormat' => null,
        'tags' => null,
        'minRam' => 'int32',
        'minDisk' => 'int32',
        'status' => null,
        'createdAt' => null,
        'updatedAt' => null,
        'self' => null,
        'id' => null,
        'file' => null,
        'schema' => null,
        'imageSourceType' => null,
        'imageSize' => null,
        'isregistered' => null,
        'osVersion' => null,
        'osType' => null,
        'platform' => null,
        'osBit' => null,
        'imagetype' => null,
        'virtualEnvType' => null,
        'owner' => null,
        'virtualSize' => 'int32',
        'properties' => null
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
    * visibility  其他租户是否可见。取值为private。
    * name  镜像名称，如果未指定name的取值，则默认为空，但是使用该镜像创建虚拟机会失败。名称的长度为1～128位。
    * protected  镜像是否被保护，保护后的镜像不可删除。取值为false
    * containerFormat  容器格式。取值为bare。
    * diskFormat  镜像文件格式。目前支持vhd、zvhd、raw、qcow2。默认值是vhd。
    * tags  镜像标签列表。长度为1～255位。
    * minRam  镜像运行最小内存，单位为MB。取值参考ECS规格限制，一般设置为0。云服务器的规格限制，请参见规格清单。
    * minDisk  镜像运行需要的最小磁盘容量，单位为GB 。取值为40～1024GB。必须大于镜像系统盘容量，否则创建云主机云服务器可能失败。
    * status  镜像状态。取值如下：queued：表示镜像元数据已经创建成功，等待上传镜像文件。saving：表示镜像正在上传文件到后端存储。deleted：表示镜像已经删除。killed：表示镜像上传错误。active：表示镜像可以正常使用。
    * createdAt  创建时间。格式为UTC时间。
    * updatedAt  更新时间。格式为UTC时间。
    * self  本镜像链接。
    * id  镜像ID，用户调用创建镜像接口后，需保存该镜像的ID，用来调用上传镜像接口完成镜像上传。
    * file  上传下载镜像文件的地址链接。
    * schema  视图链接。
    * imageSourceType  镜像后端存储类型，目前支持uds。
    * imageSize  镜像大小。单位为字节。
    * isregistered  镜像是否注册。只有已注册的镜像才能在Portal界面上查询到。取值为true。
    * osVersion  镜像的操作系统具体版本。
    * osType  镜像的操作系统类型，取值由__os_version确定。支持Windows、Linux和other。
    * platform  表示镜像支持的操作系统平台。取值由__os_version确定
    * osBit  表示操作系统位数。取值由__os_version确定，取值为32或64。
    * imagetype  镜像类型。取值为private，表示私有镜像。
    * virtualEnvType  平台类型。镜像使用环境类型：FusionCompute、Ironic、DataImage。如果是云主机云服务器镜像，则取值为FusionCompute。如果是数据卷镜像则取值是DataImage。如果是物理机裸金属服务器镜像，则取值是Ironic。
    * owner  镜像所属项目ID。
    * virtualSize  镜像虚拟大小。单位为字节。
    * properties  镜像属性的集合，不表示具体的镜像属性
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'visibility' => 'visibility',
            'name' => 'name',
            'protected' => 'protected',
            'containerFormat' => 'container_format',
            'diskFormat' => 'disk_format',
            'tags' => 'tags',
            'minRam' => 'min_ram',
            'minDisk' => 'min_disk',
            'status' => 'status',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'self' => 'self',
            'id' => 'id',
            'file' => 'file',
            'schema' => 'schema',
            'imageSourceType' => '__image_source_type',
            'imageSize' => '__image_size',
            'isregistered' => '__isregistered',
            'osVersion' => '__os_version',
            'osType' => '__os_type',
            'platform' => '__platform',
            'osBit' => '__os_bit',
            'imagetype' => '__imagetype',
            'virtualEnvType' => 'virtual_env_type',
            'owner' => 'owner',
            'virtualSize' => 'virtual_size',
            'properties' => 'properties'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * visibility  其他租户是否可见。取值为private。
    * name  镜像名称，如果未指定name的取值，则默认为空，但是使用该镜像创建虚拟机会失败。名称的长度为1～128位。
    * protected  镜像是否被保护，保护后的镜像不可删除。取值为false
    * containerFormat  容器格式。取值为bare。
    * diskFormat  镜像文件格式。目前支持vhd、zvhd、raw、qcow2。默认值是vhd。
    * tags  镜像标签列表。长度为1～255位。
    * minRam  镜像运行最小内存，单位为MB。取值参考ECS规格限制，一般设置为0。云服务器的规格限制，请参见规格清单。
    * minDisk  镜像运行需要的最小磁盘容量，单位为GB 。取值为40～1024GB。必须大于镜像系统盘容量，否则创建云主机云服务器可能失败。
    * status  镜像状态。取值如下：queued：表示镜像元数据已经创建成功，等待上传镜像文件。saving：表示镜像正在上传文件到后端存储。deleted：表示镜像已经删除。killed：表示镜像上传错误。active：表示镜像可以正常使用。
    * createdAt  创建时间。格式为UTC时间。
    * updatedAt  更新时间。格式为UTC时间。
    * self  本镜像链接。
    * id  镜像ID，用户调用创建镜像接口后，需保存该镜像的ID，用来调用上传镜像接口完成镜像上传。
    * file  上传下载镜像文件的地址链接。
    * schema  视图链接。
    * imageSourceType  镜像后端存储类型，目前支持uds。
    * imageSize  镜像大小。单位为字节。
    * isregistered  镜像是否注册。只有已注册的镜像才能在Portal界面上查询到。取值为true。
    * osVersion  镜像的操作系统具体版本。
    * osType  镜像的操作系统类型，取值由__os_version确定。支持Windows、Linux和other。
    * platform  表示镜像支持的操作系统平台。取值由__os_version确定
    * osBit  表示操作系统位数。取值由__os_version确定，取值为32或64。
    * imagetype  镜像类型。取值为private，表示私有镜像。
    * virtualEnvType  平台类型。镜像使用环境类型：FusionCompute、Ironic、DataImage。如果是云主机云服务器镜像，则取值为FusionCompute。如果是数据卷镜像则取值是DataImage。如果是物理机裸金属服务器镜像，则取值是Ironic。
    * owner  镜像所属项目ID。
    * virtualSize  镜像虚拟大小。单位为字节。
    * properties  镜像属性的集合，不表示具体的镜像属性
    *
    * @var string[]
    */
    protected static $setters = [
            'visibility' => 'setVisibility',
            'name' => 'setName',
            'protected' => 'setProtected',
            'containerFormat' => 'setContainerFormat',
            'diskFormat' => 'setDiskFormat',
            'tags' => 'setTags',
            'minRam' => 'setMinRam',
            'minDisk' => 'setMinDisk',
            'status' => 'setStatus',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'self' => 'setSelf',
            'id' => 'setId',
            'file' => 'setFile',
            'schema' => 'setSchema',
            'imageSourceType' => 'setImageSourceType',
            'imageSize' => 'setImageSize',
            'isregistered' => 'setIsregistered',
            'osVersion' => 'setOsVersion',
            'osType' => 'setOsType',
            'platform' => 'setPlatform',
            'osBit' => 'setOsBit',
            'imagetype' => 'setImagetype',
            'virtualEnvType' => 'setVirtualEnvType',
            'owner' => 'setOwner',
            'virtualSize' => 'setVirtualSize',
            'properties' => 'setProperties'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * visibility  其他租户是否可见。取值为private。
    * name  镜像名称，如果未指定name的取值，则默认为空，但是使用该镜像创建虚拟机会失败。名称的长度为1～128位。
    * protected  镜像是否被保护，保护后的镜像不可删除。取值为false
    * containerFormat  容器格式。取值为bare。
    * diskFormat  镜像文件格式。目前支持vhd、zvhd、raw、qcow2。默认值是vhd。
    * tags  镜像标签列表。长度为1～255位。
    * minRam  镜像运行最小内存，单位为MB。取值参考ECS规格限制，一般设置为0。云服务器的规格限制，请参见规格清单。
    * minDisk  镜像运行需要的最小磁盘容量，单位为GB 。取值为40～1024GB。必须大于镜像系统盘容量，否则创建云主机云服务器可能失败。
    * status  镜像状态。取值如下：queued：表示镜像元数据已经创建成功，等待上传镜像文件。saving：表示镜像正在上传文件到后端存储。deleted：表示镜像已经删除。killed：表示镜像上传错误。active：表示镜像可以正常使用。
    * createdAt  创建时间。格式为UTC时间。
    * updatedAt  更新时间。格式为UTC时间。
    * self  本镜像链接。
    * id  镜像ID，用户调用创建镜像接口后，需保存该镜像的ID，用来调用上传镜像接口完成镜像上传。
    * file  上传下载镜像文件的地址链接。
    * schema  视图链接。
    * imageSourceType  镜像后端存储类型，目前支持uds。
    * imageSize  镜像大小。单位为字节。
    * isregistered  镜像是否注册。只有已注册的镜像才能在Portal界面上查询到。取值为true。
    * osVersion  镜像的操作系统具体版本。
    * osType  镜像的操作系统类型，取值由__os_version确定。支持Windows、Linux和other。
    * platform  表示镜像支持的操作系统平台。取值由__os_version确定
    * osBit  表示操作系统位数。取值由__os_version确定，取值为32或64。
    * imagetype  镜像类型。取值为private，表示私有镜像。
    * virtualEnvType  平台类型。镜像使用环境类型：FusionCompute、Ironic、DataImage。如果是云主机云服务器镜像，则取值为FusionCompute。如果是数据卷镜像则取值是DataImage。如果是物理机裸金属服务器镜像，则取值是Ironic。
    * owner  镜像所属项目ID。
    * virtualSize  镜像虚拟大小。单位为字节。
    * properties  镜像属性的集合，不表示具体的镜像属性
    *
    * @var string[]
    */
    protected static $getters = [
            'visibility' => 'getVisibility',
            'name' => 'getName',
            'protected' => 'getProtected',
            'containerFormat' => 'getContainerFormat',
            'diskFormat' => 'getDiskFormat',
            'tags' => 'getTags',
            'minRam' => 'getMinRam',
            'minDisk' => 'getMinDisk',
            'status' => 'getStatus',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'self' => 'getSelf',
            'id' => 'getId',
            'file' => 'getFile',
            'schema' => 'getSchema',
            'imageSourceType' => 'getImageSourceType',
            'imageSize' => 'getImageSize',
            'isregistered' => 'getIsregistered',
            'osVersion' => 'getOsVersion',
            'osType' => 'getOsType',
            'platform' => 'getPlatform',
            'osBit' => 'getOsBit',
            'imagetype' => 'getImagetype',
            'virtualEnvType' => 'getVirtualEnvType',
            'owner' => 'getOwner',
            'virtualSize' => 'getVirtualSize',
            'properties' => 'getProperties'
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
    const DISK_FORMAT_VHD = 'vhd';
    const DISK_FORMAT_ZVHD = 'zvhd';
    const DISK_FORMAT_RAW = 'raw';
    const DISK_FORMAT_QCOW2 = 'qcow2';
    const STATUS_QUEUED = 'queued';
    const STATUS_SAVING = 'saving';
    const STATUS_DELETED = 'deleted';
    const STATUS_KILLED = 'killed';
    const STATUS_ACTIVE = 'active';
    const OS_TYPE_WINDOWS = 'Windows';
    const OS_TYPE_LINUX = 'Linux';
    const OS_TYPE_OTHER = 'other';
    const OS_BIT__32 = '32';
    const OS_BIT__64 = '64';
    const VIRTUAL_ENV_TYPE_FUSION_COMPUTE = 'FusionCompute';
    const VIRTUAL_ENV_TYPE_IRONIC = 'Ironic';
    const VIRTUAL_ENV_TYPE_DATA_IMAGE = 'DataImage';
    

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
    public function getOsTypeAllowableValues()
    {
        return [
            self::OS_TYPE_WINDOWS,
            self::OS_TYPE_LINUX,
            self::OS_TYPE_OTHER,
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
    public function getVirtualEnvTypeAllowableValues()
    {
        return [
            self::VIRTUAL_ENV_TYPE_FUSION_COMPUTE,
            self::VIRTUAL_ENV_TYPE_IRONIC,
            self::VIRTUAL_ENV_TYPE_DATA_IMAGE,
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
        $this->container['visibility'] = isset($data['visibility']) ? $data['visibility'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['protected'] = isset($data['protected']) ? $data['protected'] : null;
        $this->container['containerFormat'] = isset($data['containerFormat']) ? $data['containerFormat'] : null;
        $this->container['diskFormat'] = isset($data['diskFormat']) ? $data['diskFormat'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['minRam'] = isset($data['minRam']) ? $data['minRam'] : null;
        $this->container['minDisk'] = isset($data['minDisk']) ? $data['minDisk'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['self'] = isset($data['self']) ? $data['self'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['file'] = isset($data['file']) ? $data['file'] : null;
        $this->container['schema'] = isset($data['schema']) ? $data['schema'] : null;
        $this->container['imageSourceType'] = isset($data['imageSourceType']) ? $data['imageSourceType'] : null;
        $this->container['imageSize'] = isset($data['imageSize']) ? $data['imageSize'] : null;
        $this->container['isregistered'] = isset($data['isregistered']) ? $data['isregistered'] : null;
        $this->container['osVersion'] = isset($data['osVersion']) ? $data['osVersion'] : null;
        $this->container['osType'] = isset($data['osType']) ? $data['osType'] : null;
        $this->container['platform'] = isset($data['platform']) ? $data['platform'] : null;
        $this->container['osBit'] = isset($data['osBit']) ? $data['osBit'] : null;
        $this->container['imagetype'] = isset($data['imagetype']) ? $data['imagetype'] : null;
        $this->container['virtualEnvType'] = isset($data['virtualEnvType']) ? $data['virtualEnvType'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['virtualSize'] = isset($data['virtualSize']) ? $data['virtualSize'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
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
            if (!is_null($this->container['minDisk']) && ($this->container['minDisk'] < 40)) {
                $invalidProperties[] = "invalid value for 'minDisk', must be bigger than or equal to 40.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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

            $allowedValues = $this->getOsBitAllowableValues();
                if (!is_null($this->container['osBit']) && !in_array($this->container['osBit'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'osBit', must be one of '%s'",
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
    * Gets visibility
    *  其他租户是否可见。取值为private。
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
    * @param string|null $visibility 其他租户是否可见。取值为private。
    *
    * @return $this
    */
    public function setVisibility($visibility)
    {
        $this->container['visibility'] = $visibility;
        return $this;
    }

    /**
    * Gets name
    *  镜像名称，如果未指定name的取值，则默认为空，但是使用该镜像创建虚拟机会失败。名称的长度为1～128位。
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
    * @param string|null $name 镜像名称，如果未指定name的取值，则默认为空，但是使用该镜像创建虚拟机会失败。名称的长度为1～128位。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets protected
    *  镜像是否被保护，保护后的镜像不可删除。取值为false
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
    * @param bool|null $protected 镜像是否被保护，保护后的镜像不可删除。取值为false
    *
    * @return $this
    */
    public function setProtected($protected)
    {
        $this->container['protected'] = $protected;
        return $this;
    }

    /**
    * Gets containerFormat
    *  容器格式。取值为bare。
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
    * @param string|null $containerFormat 容器格式。取值为bare。
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
    *  镜像文件格式。目前支持vhd、zvhd、raw、qcow2。默认值是vhd。
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
    * @param string|null $diskFormat 镜像文件格式。目前支持vhd、zvhd、raw、qcow2。默认值是vhd。
    *
    * @return $this
    */
    public function setDiskFormat($diskFormat)
    {
        $this->container['diskFormat'] = $diskFormat;
        return $this;
    }

    /**
    * Gets tags
    *  镜像标签列表。长度为1～255位。
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
    * @param string[]|null $tags 镜像标签列表。长度为1～255位。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets minRam
    *  镜像运行最小内存，单位为MB。取值参考ECS规格限制，一般设置为0。云服务器的规格限制，请参见规格清单。
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
    * @param int|null $minRam 镜像运行最小内存，单位为MB。取值参考ECS规格限制，一般设置为0。云服务器的规格限制，请参见规格清单。
    *
    * @return $this
    */
    public function setMinRam($minRam)
    {
        $this->container['minRam'] = $minRam;
        return $this;
    }

    /**
    * Gets minDisk
    *  镜像运行需要的最小磁盘容量，单位为GB 。取值为40～1024GB。必须大于镜像系统盘容量，否则创建云主机云服务器可能失败。
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
    * @param int|null $minDisk 镜像运行需要的最小磁盘容量，单位为GB 。取值为40～1024GB。必须大于镜像系统盘容量，否则创建云主机云服务器可能失败。
    *
    * @return $this
    */
    public function setMinDisk($minDisk)
    {
        $this->container['minDisk'] = $minDisk;
        return $this;
    }

    /**
    * Gets status
    *  镜像状态。取值如下：queued：表示镜像元数据已经创建成功，等待上传镜像文件。saving：表示镜像正在上传文件到后端存储。deleted：表示镜像已经删除。killed：表示镜像上传错误。active：表示镜像可以正常使用。
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
    * @param string|null $status 镜像状态。取值如下：queued：表示镜像元数据已经创建成功，等待上传镜像文件。saving：表示镜像正在上传文件到后端存储。deleted：表示镜像已经删除。killed：表示镜像上传错误。active：表示镜像可以正常使用。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets createdAt
    *  创建时间。格式为UTC时间。
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
    * @param string|null $createdAt 创建时间。格式为UTC时间。
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
    *  更新时间。格式为UTC时间。
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
    * @param string|null $updatedAt 更新时间。格式为UTC时间。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets self
    *  本镜像链接。
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
    * @param string|null $self 本镜像链接。
    *
    * @return $this
    */
    public function setSelf($self)
    {
        $this->container['self'] = $self;
        return $this;
    }

    /**
    * Gets id
    *  镜像ID，用户调用创建镜像接口后，需保存该镜像的ID，用来调用上传镜像接口完成镜像上传。
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
    * @param string|null $id 镜像ID，用户调用创建镜像接口后，需保存该镜像的ID，用来调用上传镜像接口完成镜像上传。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets file
    *  上传下载镜像文件的地址链接。
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
    * @param string|null $file 上传下载镜像文件的地址链接。
    *
    * @return $this
    */
    public function setFile($file)
    {
        $this->container['file'] = $file;
        return $this;
    }

    /**
    * Gets schema
    *  视图链接。
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
    * @param string|null $schema 视图链接。
    *
    * @return $this
    */
    public function setSchema($schema)
    {
        $this->container['schema'] = $schema;
        return $this;
    }

    /**
    * Gets imageSourceType
    *  镜像后端存储类型，目前支持uds。
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
    * @param string|null $imageSourceType 镜像后端存储类型，目前支持uds。
    *
    * @return $this
    */
    public function setImageSourceType($imageSourceType)
    {
        $this->container['imageSourceType'] = $imageSourceType;
        return $this;
    }

    /**
    * Gets imageSize
    *  镜像大小。单位为字节。
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
    * @param string|null $imageSize 镜像大小。单位为字节。
    *
    * @return $this
    */
    public function setImageSize($imageSize)
    {
        $this->container['imageSize'] = $imageSize;
        return $this;
    }

    /**
    * Gets isregistered
    *  镜像是否注册。只有已注册的镜像才能在Portal界面上查询到。取值为true。
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
    * @param string|null $isregistered 镜像是否注册。只有已注册的镜像才能在Portal界面上查询到。取值为true。
    *
    * @return $this
    */
    public function setIsregistered($isregistered)
    {
        $this->container['isregistered'] = $isregistered;
        return $this;
    }

    /**
    * Gets osVersion
    *  镜像的操作系统具体版本。
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
    * @param string|null $osVersion 镜像的操作系统具体版本。
    *
    * @return $this
    */
    public function setOsVersion($osVersion)
    {
        $this->container['osVersion'] = $osVersion;
        return $this;
    }

    /**
    * Gets osType
    *  镜像的操作系统类型，取值由__os_version确定。支持Windows、Linux和other。
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
    * @param string|null $osType 镜像的操作系统类型，取值由__os_version确定。支持Windows、Linux和other。
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
    *  表示镜像支持的操作系统平台。取值由__os_version确定
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
    * @param string|null $platform 表示镜像支持的操作系统平台。取值由__os_version确定
    *
    * @return $this
    */
    public function setPlatform($platform)
    {
        $this->container['platform'] = $platform;
        return $this;
    }

    /**
    * Gets osBit
    *  表示操作系统位数。取值由__os_version确定，取值为32或64。
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
    * @param string|null $osBit 表示操作系统位数。取值由__os_version确定，取值为32或64。
    *
    * @return $this
    */
    public function setOsBit($osBit)
    {
        $this->container['osBit'] = $osBit;
        return $this;
    }

    /**
    * Gets imagetype
    *  镜像类型。取值为private，表示私有镜像。
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
    * @param string|null $imagetype 镜像类型。取值为private，表示私有镜像。
    *
    * @return $this
    */
    public function setImagetype($imagetype)
    {
        $this->container['imagetype'] = $imagetype;
        return $this;
    }

    /**
    * Gets virtualEnvType
    *  平台类型。镜像使用环境类型：FusionCompute、Ironic、DataImage。如果是云主机云服务器镜像，则取值为FusionCompute。如果是数据卷镜像则取值是DataImage。如果是物理机裸金属服务器镜像，则取值是Ironic。
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
    * @param string|null $virtualEnvType 平台类型。镜像使用环境类型：FusionCompute、Ironic、DataImage。如果是云主机云服务器镜像，则取值为FusionCompute。如果是数据卷镜像则取值是DataImage。如果是物理机裸金属服务器镜像，则取值是Ironic。
    *
    * @return $this
    */
    public function setVirtualEnvType($virtualEnvType)
    {
        $this->container['virtualEnvType'] = $virtualEnvType;
        return $this;
    }

    /**
    * Gets owner
    *  镜像所属项目ID。
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
    * @param string|null $owner 镜像所属项目ID。
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets virtualSize
    *  镜像虚拟大小。单位为字节。
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
    * @param int|null $virtualSize 镜像虚拟大小。单位为字节。
    *
    * @return $this
    */
    public function setVirtualSize($virtualSize)
    {
        $this->container['virtualSize'] = $virtualSize;
        return $this;
    }

    /**
    * Gets properties
    *  镜像属性的集合，不表示具体的镜像属性
    *
    * @return object|null
    */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
    * Sets properties
    *
    * @param object|null $properties 镜像属性的集合，不表示具体的镜像属性
    *
    * @return $this
    */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;
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

