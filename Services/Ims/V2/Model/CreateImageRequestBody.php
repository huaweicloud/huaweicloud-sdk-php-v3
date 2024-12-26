<?php

namespace HuaweiCloud\SDK\Ims\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateImageRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateImageRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dataImages  需要转换的数据盘信息，其中，当使用云服务器上的数据盘进行私有数据盘镜像创建时，该字段必选。 如果不是用于制作数据盘镜像，该字段默认为空。
    * description  镜像描述信息。支持字母、数字、中文等，不支持回车、<、 >，长度不能超过1024个字符。默认为空。
    * enterpriseProjectId  表示当前镜像所属的企业项目。取值为0或无该值，表示属于default企业项目。取值为UUID，表示属于该UUID对应的企业项目。
    * imageTags  新规范的镜像标签列表。默认为空。tags和image_tags只能使用一个。
    * instanceId  需要转换的云服务器ID。使用instance_id字段，从云服务器制作私有镜像时，该字段填写云服务器ID。
    * name  镜像名称
    * tags  镜像标签列表。默认为空。tags和image_tags只能使用一个。
    * maxRam  表示镜像支持的最大内存，单位为MB。
    * minRam  表示镜像支持的最小内存，单位为MB，默认为0，表示不受限制。
    * osVersion  操作系统版本。 使用上传至OBS桶中的外部镜像文件制作镜像时生效。 当“is_quick_import”的值为“true”时，即使用镜像文件快速导入方式导入系统盘镜像，则该参数为必填参数。
    * imageUrl  OBS桶中外部镜像文件地址。 在使用OBS桶的外部镜像文件制作镜像时生效且为必选字段。格式为<OBS桶名>:<OBS镜像文件名称>。
    * minDisk  最小系统盘大小。 在使用OBS桶的外部镜像文件制作镜像时生效且为必选字段。取值为40～1024GB。
    * isConfig  是否自动配置。 取值为true或false。 如果需要后台自动配置，取值为true，否则为false。默认取值为false。
    * cmkId  创建加密镜像的用户主密钥，具体取值请参考《密钥管理服务用户指南》获取。
    * type  镜像的类型。 取值为ECS、BMS、FusionCompute、Ironic。默认使用“ECS”。 ECS/FusionCompute：表示是ECS服务器的镜像。 BMS/Ironic：表示是BMS服务器的镜像。
    * isQuickImport  是否使用镜像文件快速导入方式，导入系统盘镜像。 是，配置为true。 否，配置为false。 关于镜像文件快速导入的约束与限制请参见镜像文件快速导入。
    * architecture  镜像的架构类型。取值包括： x86 arm 默认使用“x86”。 当架构类型为arm时，镜像引导方式将自动转为UEFI的引导方式。
    * volumeId  数据盘的卷ID。当数据盘创建系统盘镜像时，该参数必选
    * hwFirmwareType  云主机云服务器的启动方式。目前支持： bios：表示bios引导启动。 uefi：表示uefi引导启动。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dataImages' => '\HuaweiCloud\SDK\Ims\V2\Model\CreateDataImage[]',
            'description' => 'string',
            'enterpriseProjectId' => 'string',
            'imageTags' => '\HuaweiCloud\SDK\Ims\V2\Model\TagKeyValue[]',
            'instanceId' => 'string',
            'name' => 'string',
            'tags' => 'string[]',
            'maxRam' => 'int',
            'minRam' => 'int',
            'osVersion' => 'string',
            'imageUrl' => 'string',
            'minDisk' => 'int',
            'isConfig' => 'bool',
            'cmkId' => 'string',
            'type' => 'string',
            'isQuickImport' => 'bool',
            'architecture' => 'string',
            'volumeId' => 'string',
            'hwFirmwareType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dataImages  需要转换的数据盘信息，其中，当使用云服务器上的数据盘进行私有数据盘镜像创建时，该字段必选。 如果不是用于制作数据盘镜像，该字段默认为空。
    * description  镜像描述信息。支持字母、数字、中文等，不支持回车、<、 >，长度不能超过1024个字符。默认为空。
    * enterpriseProjectId  表示当前镜像所属的企业项目。取值为0或无该值，表示属于default企业项目。取值为UUID，表示属于该UUID对应的企业项目。
    * imageTags  新规范的镜像标签列表。默认为空。tags和image_tags只能使用一个。
    * instanceId  需要转换的云服务器ID。使用instance_id字段，从云服务器制作私有镜像时，该字段填写云服务器ID。
    * name  镜像名称
    * tags  镜像标签列表。默认为空。tags和image_tags只能使用一个。
    * maxRam  表示镜像支持的最大内存，单位为MB。
    * minRam  表示镜像支持的最小内存，单位为MB，默认为0，表示不受限制。
    * osVersion  操作系统版本。 使用上传至OBS桶中的外部镜像文件制作镜像时生效。 当“is_quick_import”的值为“true”时，即使用镜像文件快速导入方式导入系统盘镜像，则该参数为必填参数。
    * imageUrl  OBS桶中外部镜像文件地址。 在使用OBS桶的外部镜像文件制作镜像时生效且为必选字段。格式为<OBS桶名>:<OBS镜像文件名称>。
    * minDisk  最小系统盘大小。 在使用OBS桶的外部镜像文件制作镜像时生效且为必选字段。取值为40～1024GB。
    * isConfig  是否自动配置。 取值为true或false。 如果需要后台自动配置，取值为true，否则为false。默认取值为false。
    * cmkId  创建加密镜像的用户主密钥，具体取值请参考《密钥管理服务用户指南》获取。
    * type  镜像的类型。 取值为ECS、BMS、FusionCompute、Ironic。默认使用“ECS”。 ECS/FusionCompute：表示是ECS服务器的镜像。 BMS/Ironic：表示是BMS服务器的镜像。
    * isQuickImport  是否使用镜像文件快速导入方式，导入系统盘镜像。 是，配置为true。 否，配置为false。 关于镜像文件快速导入的约束与限制请参见镜像文件快速导入。
    * architecture  镜像的架构类型。取值包括： x86 arm 默认使用“x86”。 当架构类型为arm时，镜像引导方式将自动转为UEFI的引导方式。
    * volumeId  数据盘的卷ID。当数据盘创建系统盘镜像时，该参数必选
    * hwFirmwareType  云主机云服务器的启动方式。目前支持： bios：表示bios引导启动。 uefi：表示uefi引导启动。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dataImages' => null,
        'description' => null,
        'enterpriseProjectId' => null,
        'imageTags' => null,
        'instanceId' => null,
        'name' => null,
        'tags' => null,
        'maxRam' => 'int32',
        'minRam' => 'int32',
        'osVersion' => null,
        'imageUrl' => null,
        'minDisk' => null,
        'isConfig' => null,
        'cmkId' => null,
        'type' => null,
        'isQuickImport' => null,
        'architecture' => null,
        'volumeId' => null,
        'hwFirmwareType' => null
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
    * dataImages  需要转换的数据盘信息，其中，当使用云服务器上的数据盘进行私有数据盘镜像创建时，该字段必选。 如果不是用于制作数据盘镜像，该字段默认为空。
    * description  镜像描述信息。支持字母、数字、中文等，不支持回车、<、 >，长度不能超过1024个字符。默认为空。
    * enterpriseProjectId  表示当前镜像所属的企业项目。取值为0或无该值，表示属于default企业项目。取值为UUID，表示属于该UUID对应的企业项目。
    * imageTags  新规范的镜像标签列表。默认为空。tags和image_tags只能使用一个。
    * instanceId  需要转换的云服务器ID。使用instance_id字段，从云服务器制作私有镜像时，该字段填写云服务器ID。
    * name  镜像名称
    * tags  镜像标签列表。默认为空。tags和image_tags只能使用一个。
    * maxRam  表示镜像支持的最大内存，单位为MB。
    * minRam  表示镜像支持的最小内存，单位为MB，默认为0，表示不受限制。
    * osVersion  操作系统版本。 使用上传至OBS桶中的外部镜像文件制作镜像时生效。 当“is_quick_import”的值为“true”时，即使用镜像文件快速导入方式导入系统盘镜像，则该参数为必填参数。
    * imageUrl  OBS桶中外部镜像文件地址。 在使用OBS桶的外部镜像文件制作镜像时生效且为必选字段。格式为<OBS桶名>:<OBS镜像文件名称>。
    * minDisk  最小系统盘大小。 在使用OBS桶的外部镜像文件制作镜像时生效且为必选字段。取值为40～1024GB。
    * isConfig  是否自动配置。 取值为true或false。 如果需要后台自动配置，取值为true，否则为false。默认取值为false。
    * cmkId  创建加密镜像的用户主密钥，具体取值请参考《密钥管理服务用户指南》获取。
    * type  镜像的类型。 取值为ECS、BMS、FusionCompute、Ironic。默认使用“ECS”。 ECS/FusionCompute：表示是ECS服务器的镜像。 BMS/Ironic：表示是BMS服务器的镜像。
    * isQuickImport  是否使用镜像文件快速导入方式，导入系统盘镜像。 是，配置为true。 否，配置为false。 关于镜像文件快速导入的约束与限制请参见镜像文件快速导入。
    * architecture  镜像的架构类型。取值包括： x86 arm 默认使用“x86”。 当架构类型为arm时，镜像引导方式将自动转为UEFI的引导方式。
    * volumeId  数据盘的卷ID。当数据盘创建系统盘镜像时，该参数必选
    * hwFirmwareType  云主机云服务器的启动方式。目前支持： bios：表示bios引导启动。 uefi：表示uefi引导启动。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dataImages' => 'data_images',
            'description' => 'description',
            'enterpriseProjectId' => 'enterprise_project_id',
            'imageTags' => 'image_tags',
            'instanceId' => 'instance_id',
            'name' => 'name',
            'tags' => 'tags',
            'maxRam' => 'max_ram',
            'minRam' => 'min_ram',
            'osVersion' => 'os_version',
            'imageUrl' => 'image_url',
            'minDisk' => 'min_disk',
            'isConfig' => 'is_config',
            'cmkId' => 'cmk_id',
            'type' => 'type',
            'isQuickImport' => 'is_quick_import',
            'architecture' => 'architecture',
            'volumeId' => 'volume_id',
            'hwFirmwareType' => 'hw_firmware_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dataImages  需要转换的数据盘信息，其中，当使用云服务器上的数据盘进行私有数据盘镜像创建时，该字段必选。 如果不是用于制作数据盘镜像，该字段默认为空。
    * description  镜像描述信息。支持字母、数字、中文等，不支持回车、<、 >，长度不能超过1024个字符。默认为空。
    * enterpriseProjectId  表示当前镜像所属的企业项目。取值为0或无该值，表示属于default企业项目。取值为UUID，表示属于该UUID对应的企业项目。
    * imageTags  新规范的镜像标签列表。默认为空。tags和image_tags只能使用一个。
    * instanceId  需要转换的云服务器ID。使用instance_id字段，从云服务器制作私有镜像时，该字段填写云服务器ID。
    * name  镜像名称
    * tags  镜像标签列表。默认为空。tags和image_tags只能使用一个。
    * maxRam  表示镜像支持的最大内存，单位为MB。
    * minRam  表示镜像支持的最小内存，单位为MB，默认为0，表示不受限制。
    * osVersion  操作系统版本。 使用上传至OBS桶中的外部镜像文件制作镜像时生效。 当“is_quick_import”的值为“true”时，即使用镜像文件快速导入方式导入系统盘镜像，则该参数为必填参数。
    * imageUrl  OBS桶中外部镜像文件地址。 在使用OBS桶的外部镜像文件制作镜像时生效且为必选字段。格式为<OBS桶名>:<OBS镜像文件名称>。
    * minDisk  最小系统盘大小。 在使用OBS桶的外部镜像文件制作镜像时生效且为必选字段。取值为40～1024GB。
    * isConfig  是否自动配置。 取值为true或false。 如果需要后台自动配置，取值为true，否则为false。默认取值为false。
    * cmkId  创建加密镜像的用户主密钥，具体取值请参考《密钥管理服务用户指南》获取。
    * type  镜像的类型。 取值为ECS、BMS、FusionCompute、Ironic。默认使用“ECS”。 ECS/FusionCompute：表示是ECS服务器的镜像。 BMS/Ironic：表示是BMS服务器的镜像。
    * isQuickImport  是否使用镜像文件快速导入方式，导入系统盘镜像。 是，配置为true。 否，配置为false。 关于镜像文件快速导入的约束与限制请参见镜像文件快速导入。
    * architecture  镜像的架构类型。取值包括： x86 arm 默认使用“x86”。 当架构类型为arm时，镜像引导方式将自动转为UEFI的引导方式。
    * volumeId  数据盘的卷ID。当数据盘创建系统盘镜像时，该参数必选
    * hwFirmwareType  云主机云服务器的启动方式。目前支持： bios：表示bios引导启动。 uefi：表示uefi引导启动。
    *
    * @var string[]
    */
    protected static $setters = [
            'dataImages' => 'setDataImages',
            'description' => 'setDescription',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'imageTags' => 'setImageTags',
            'instanceId' => 'setInstanceId',
            'name' => 'setName',
            'tags' => 'setTags',
            'maxRam' => 'setMaxRam',
            'minRam' => 'setMinRam',
            'osVersion' => 'setOsVersion',
            'imageUrl' => 'setImageUrl',
            'minDisk' => 'setMinDisk',
            'isConfig' => 'setIsConfig',
            'cmkId' => 'setCmkId',
            'type' => 'setType',
            'isQuickImport' => 'setIsQuickImport',
            'architecture' => 'setArchitecture',
            'volumeId' => 'setVolumeId',
            'hwFirmwareType' => 'setHwFirmwareType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dataImages  需要转换的数据盘信息，其中，当使用云服务器上的数据盘进行私有数据盘镜像创建时，该字段必选。 如果不是用于制作数据盘镜像，该字段默认为空。
    * description  镜像描述信息。支持字母、数字、中文等，不支持回车、<、 >，长度不能超过1024个字符。默认为空。
    * enterpriseProjectId  表示当前镜像所属的企业项目。取值为0或无该值，表示属于default企业项目。取值为UUID，表示属于该UUID对应的企业项目。
    * imageTags  新规范的镜像标签列表。默认为空。tags和image_tags只能使用一个。
    * instanceId  需要转换的云服务器ID。使用instance_id字段，从云服务器制作私有镜像时，该字段填写云服务器ID。
    * name  镜像名称
    * tags  镜像标签列表。默认为空。tags和image_tags只能使用一个。
    * maxRam  表示镜像支持的最大内存，单位为MB。
    * minRam  表示镜像支持的最小内存，单位为MB，默认为0，表示不受限制。
    * osVersion  操作系统版本。 使用上传至OBS桶中的外部镜像文件制作镜像时生效。 当“is_quick_import”的值为“true”时，即使用镜像文件快速导入方式导入系统盘镜像，则该参数为必填参数。
    * imageUrl  OBS桶中外部镜像文件地址。 在使用OBS桶的外部镜像文件制作镜像时生效且为必选字段。格式为<OBS桶名>:<OBS镜像文件名称>。
    * minDisk  最小系统盘大小。 在使用OBS桶的外部镜像文件制作镜像时生效且为必选字段。取值为40～1024GB。
    * isConfig  是否自动配置。 取值为true或false。 如果需要后台自动配置，取值为true，否则为false。默认取值为false。
    * cmkId  创建加密镜像的用户主密钥，具体取值请参考《密钥管理服务用户指南》获取。
    * type  镜像的类型。 取值为ECS、BMS、FusionCompute、Ironic。默认使用“ECS”。 ECS/FusionCompute：表示是ECS服务器的镜像。 BMS/Ironic：表示是BMS服务器的镜像。
    * isQuickImport  是否使用镜像文件快速导入方式，导入系统盘镜像。 是，配置为true。 否，配置为false。 关于镜像文件快速导入的约束与限制请参见镜像文件快速导入。
    * architecture  镜像的架构类型。取值包括： x86 arm 默认使用“x86”。 当架构类型为arm时，镜像引导方式将自动转为UEFI的引导方式。
    * volumeId  数据盘的卷ID。当数据盘创建系统盘镜像时，该参数必选
    * hwFirmwareType  云主机云服务器的启动方式。目前支持： bios：表示bios引导启动。 uefi：表示uefi引导启动。
    *
    * @var string[]
    */
    protected static $getters = [
            'dataImages' => 'getDataImages',
            'description' => 'getDescription',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'imageTags' => 'getImageTags',
            'instanceId' => 'getInstanceId',
            'name' => 'getName',
            'tags' => 'getTags',
            'maxRam' => 'getMaxRam',
            'minRam' => 'getMinRam',
            'osVersion' => 'getOsVersion',
            'imageUrl' => 'getImageUrl',
            'minDisk' => 'getMinDisk',
            'isConfig' => 'getIsConfig',
            'cmkId' => 'getCmkId',
            'type' => 'getType',
            'isQuickImport' => 'getIsQuickImport',
            'architecture' => 'getArchitecture',
            'volumeId' => 'getVolumeId',
            'hwFirmwareType' => 'getHwFirmwareType'
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
    const TYPE_ECS = 'ECS';
    const TYPE_BMS = 'BMS';
    const TYPE_FUSION_COMPUTE = 'FusionCompute';
    const TYPE_IRONIC = 'Ironic';
    const TYPE_ISO_IMAGE = 'IsoImage';
    const ARCHITECTURE_X86 = 'x86';
    const ARCHITECTURE_ARM = 'arm';
    const HW_FIRMWARE_TYPE_BIOS = 'bios';
    const HW_FIRMWARE_TYPE_UEFI = 'uefi';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_ECS,
            self::TYPE_BMS,
            self::TYPE_FUSION_COMPUTE,
            self::TYPE_IRONIC,
            self::TYPE_ISO_IMAGE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getArchitectureAllowableValues()
    {
        return [
            self::ARCHITECTURE_X86,
            self::ARCHITECTURE_ARM,
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
        $this->container['dataImages'] = isset($data['dataImages']) ? $data['dataImages'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['imageTags'] = isset($data['imageTags']) ? $data['imageTags'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['maxRam'] = isset($data['maxRam']) ? $data['maxRam'] : null;
        $this->container['minRam'] = isset($data['minRam']) ? $data['minRam'] : null;
        $this->container['osVersion'] = isset($data['osVersion']) ? $data['osVersion'] : null;
        $this->container['imageUrl'] = isset($data['imageUrl']) ? $data['imageUrl'] : null;
        $this->container['minDisk'] = isset($data['minDisk']) ? $data['minDisk'] : null;
        $this->container['isConfig'] = isset($data['isConfig']) ? $data['isConfig'] : null;
        $this->container['cmkId'] = isset($data['cmkId']) ? $data['cmkId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['isQuickImport'] = isset($data['isQuickImport']) ? $data['isQuickImport'] : null;
        $this->container['architecture'] = isset($data['architecture']) ? $data['architecture'] : null;
        $this->container['volumeId'] = isset($data['volumeId']) ? $data['volumeId'] : null;
        $this->container['hwFirmwareType'] = isset($data['hwFirmwareType']) ? $data['hwFirmwareType'] : null;
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
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getArchitectureAllowableValues();
                if (!is_null($this->container['architecture']) && !in_array($this->container['architecture'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'architecture', must be one of '%s'",
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
    * Gets dataImages
    *  需要转换的数据盘信息，其中，当使用云服务器上的数据盘进行私有数据盘镜像创建时，该字段必选。 如果不是用于制作数据盘镜像，该字段默认为空。
    *
    * @return \HuaweiCloud\SDK\Ims\V2\Model\CreateDataImage[]|null
    */
    public function getDataImages()
    {
        return $this->container['dataImages'];
    }

    /**
    * Sets dataImages
    *
    * @param \HuaweiCloud\SDK\Ims\V2\Model\CreateDataImage[]|null $dataImages 需要转换的数据盘信息，其中，当使用云服务器上的数据盘进行私有数据盘镜像创建时，该字段必选。 如果不是用于制作数据盘镜像，该字段默认为空。
    *
    * @return $this
    */
    public function setDataImages($dataImages)
    {
        $this->container['dataImages'] = $dataImages;
        return $this;
    }

    /**
    * Gets description
    *  镜像描述信息。支持字母、数字、中文等，不支持回车、<、 >，长度不能超过1024个字符。默认为空。
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
    * @param string|null $description 镜像描述信息。支持字母、数字、中文等，不支持回车、<、 >，长度不能超过1024个字符。默认为空。
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
    *  表示当前镜像所属的企业项目。取值为0或无该值，表示属于default企业项目。取值为UUID，表示属于该UUID对应的企业项目。
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
    * @param string|null $enterpriseProjectId 表示当前镜像所属的企业项目。取值为0或无该值，表示属于default企业项目。取值为UUID，表示属于该UUID对应的企业项目。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets imageTags
    *  新规范的镜像标签列表。默认为空。tags和image_tags只能使用一个。
    *
    * @return \HuaweiCloud\SDK\Ims\V2\Model\TagKeyValue[]|null
    */
    public function getImageTags()
    {
        return $this->container['imageTags'];
    }

    /**
    * Sets imageTags
    *
    * @param \HuaweiCloud\SDK\Ims\V2\Model\TagKeyValue[]|null $imageTags 新规范的镜像标签列表。默认为空。tags和image_tags只能使用一个。
    *
    * @return $this
    */
    public function setImageTags($imageTags)
    {
        $this->container['imageTags'] = $imageTags;
        return $this;
    }

    /**
    * Gets instanceId
    *  需要转换的云服务器ID。使用instance_id字段，从云服务器制作私有镜像时，该字段填写云服务器ID。
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId 需要转换的云服务器ID。使用instance_id字段，从云服务器制作私有镜像时，该字段填写云服务器ID。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets name
    *  镜像名称
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
    * @param string $name 镜像名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets tags
    *  镜像标签列表。默认为空。tags和image_tags只能使用一个。
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
    * @param string[]|null $tags 镜像标签列表。默认为空。tags和image_tags只能使用一个。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets maxRam
    *  表示镜像支持的最大内存，单位为MB。
    *
    * @return int|null
    */
    public function getMaxRam()
    {
        return $this->container['maxRam'];
    }

    /**
    * Sets maxRam
    *
    * @param int|null $maxRam 表示镜像支持的最大内存，单位为MB。
    *
    * @return $this
    */
    public function setMaxRam($maxRam)
    {
        $this->container['maxRam'] = $maxRam;
        return $this;
    }

    /**
    * Gets minRam
    *  表示镜像支持的最小内存，单位为MB，默认为0，表示不受限制。
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
    * @param int|null $minRam 表示镜像支持的最小内存，单位为MB，默认为0，表示不受限制。
    *
    * @return $this
    */
    public function setMinRam($minRam)
    {
        $this->container['minRam'] = $minRam;
        return $this;
    }

    /**
    * Gets osVersion
    *  操作系统版本。 使用上传至OBS桶中的外部镜像文件制作镜像时生效。 当“is_quick_import”的值为“true”时，即使用镜像文件快速导入方式导入系统盘镜像，则该参数为必填参数。
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
    * @param string|null $osVersion 操作系统版本。 使用上传至OBS桶中的外部镜像文件制作镜像时生效。 当“is_quick_import”的值为“true”时，即使用镜像文件快速导入方式导入系统盘镜像，则该参数为必填参数。
    *
    * @return $this
    */
    public function setOsVersion($osVersion)
    {
        $this->container['osVersion'] = $osVersion;
        return $this;
    }

    /**
    * Gets imageUrl
    *  OBS桶中外部镜像文件地址。 在使用OBS桶的外部镜像文件制作镜像时生效且为必选字段。格式为<OBS桶名>:<OBS镜像文件名称>。
    *
    * @return string|null
    */
    public function getImageUrl()
    {
        return $this->container['imageUrl'];
    }

    /**
    * Sets imageUrl
    *
    * @param string|null $imageUrl OBS桶中外部镜像文件地址。 在使用OBS桶的外部镜像文件制作镜像时生效且为必选字段。格式为<OBS桶名>:<OBS镜像文件名称>。
    *
    * @return $this
    */
    public function setImageUrl($imageUrl)
    {
        $this->container['imageUrl'] = $imageUrl;
        return $this;
    }

    /**
    * Gets minDisk
    *  最小系统盘大小。 在使用OBS桶的外部镜像文件制作镜像时生效且为必选字段。取值为40～1024GB。
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
    * @param int|null $minDisk 最小系统盘大小。 在使用OBS桶的外部镜像文件制作镜像时生效且为必选字段。取值为40～1024GB。
    *
    * @return $this
    */
    public function setMinDisk($minDisk)
    {
        $this->container['minDisk'] = $minDisk;
        return $this;
    }

    /**
    * Gets isConfig
    *  是否自动配置。 取值为true或false。 如果需要后台自动配置，取值为true，否则为false。默认取值为false。
    *
    * @return bool|null
    */
    public function getIsConfig()
    {
        return $this->container['isConfig'];
    }

    /**
    * Sets isConfig
    *
    * @param bool|null $isConfig 是否自动配置。 取值为true或false。 如果需要后台自动配置，取值为true，否则为false。默认取值为false。
    *
    * @return $this
    */
    public function setIsConfig($isConfig)
    {
        $this->container['isConfig'] = $isConfig;
        return $this;
    }

    /**
    * Gets cmkId
    *  创建加密镜像的用户主密钥，具体取值请参考《密钥管理服务用户指南》获取。
    *
    * @return string|null
    */
    public function getCmkId()
    {
        return $this->container['cmkId'];
    }

    /**
    * Sets cmkId
    *
    * @param string|null $cmkId 创建加密镜像的用户主密钥，具体取值请参考《密钥管理服务用户指南》获取。
    *
    * @return $this
    */
    public function setCmkId($cmkId)
    {
        $this->container['cmkId'] = $cmkId;
        return $this;
    }

    /**
    * Gets type
    *  镜像的类型。 取值为ECS、BMS、FusionCompute、Ironic。默认使用“ECS”。 ECS/FusionCompute：表示是ECS服务器的镜像。 BMS/Ironic：表示是BMS服务器的镜像。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 镜像的类型。 取值为ECS、BMS、FusionCompute、Ironic。默认使用“ECS”。 ECS/FusionCompute：表示是ECS服务器的镜像。 BMS/Ironic：表示是BMS服务器的镜像。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets isQuickImport
    *  是否使用镜像文件快速导入方式，导入系统盘镜像。 是，配置为true。 否，配置为false。 关于镜像文件快速导入的约束与限制请参见镜像文件快速导入。
    *
    * @return bool|null
    */
    public function getIsQuickImport()
    {
        return $this->container['isQuickImport'];
    }

    /**
    * Sets isQuickImport
    *
    * @param bool|null $isQuickImport 是否使用镜像文件快速导入方式，导入系统盘镜像。 是，配置为true。 否，配置为false。 关于镜像文件快速导入的约束与限制请参见镜像文件快速导入。
    *
    * @return $this
    */
    public function setIsQuickImport($isQuickImport)
    {
        $this->container['isQuickImport'] = $isQuickImport;
        return $this;
    }

    /**
    * Gets architecture
    *  镜像的架构类型。取值包括： x86 arm 默认使用“x86”。 当架构类型为arm时，镜像引导方式将自动转为UEFI的引导方式。
    *
    * @return string|null
    */
    public function getArchitecture()
    {
        return $this->container['architecture'];
    }

    /**
    * Sets architecture
    *
    * @param string|null $architecture 镜像的架构类型。取值包括： x86 arm 默认使用“x86”。 当架构类型为arm时，镜像引导方式将自动转为UEFI的引导方式。
    *
    * @return $this
    */
    public function setArchitecture($architecture)
    {
        $this->container['architecture'] = $architecture;
        return $this;
    }

    /**
    * Gets volumeId
    *  数据盘的卷ID。当数据盘创建系统盘镜像时，该参数必选
    *
    * @return string|null
    */
    public function getVolumeId()
    {
        return $this->container['volumeId'];
    }

    /**
    * Sets volumeId
    *
    * @param string|null $volumeId 数据盘的卷ID。当数据盘创建系统盘镜像时，该参数必选
    *
    * @return $this
    */
    public function setVolumeId($volumeId)
    {
        $this->container['volumeId'] = $volumeId;
        return $this;
    }

    /**
    * Gets hwFirmwareType
    *  云主机云服务器的启动方式。目前支持： bios：表示bios引导启动。 uefi：表示uefi引导启动。
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
    * @param string|null $hwFirmwareType 云主机云服务器的启动方式。目前支持： bios：表示bios引导启动。 uefi：表示uefi引导启动。
    *
    * @return $this
    */
    public function setHwFirmwareType($hwFirmwareType)
    {
        $this->container['hwFirmwareType'] = $hwFirmwareType;
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

