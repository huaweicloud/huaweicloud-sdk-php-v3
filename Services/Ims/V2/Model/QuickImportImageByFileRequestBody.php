<?php

namespace HuaweiCloud\SDK\Ims\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QuickImportImageByFileRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QuickImportImageByFileRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  镜像名称
    * description  镜像描述信息。_description参数说明请参考镜像属性。支持字母、数字、中文等，不支持回车、<、 >，长度不能超过1024个字符。默认为空。
    * osVersion  操作系统版本。使用上传至OBS桶中的外部镜像文件制作镜像时生效
    * imageUrl  OBS桶中外部镜像文件地址。在使用OBS桶的外部镜像文件制作镜像时生效且为必选字段。格式为<OBS桶名>:<OBS镜像文件名称>。注意：此处的OBS桶和镜像文件的存储类别必须是OBS标准存储。
    * minDisk  最小系统盘大小。在使用OBS桶的外部镜像文件制作镜像时生效且为必选字段。取值为1至1024GB。
    * tags  镜像标签列表。默认为空。 tags和image_tags只能使用一个。
    * type  制作的镜像类型。系统盘镜像为ECS/BMS，数据盘镜像为DataImage. 制作数据盘镜像时该参数必选.
    * enterpriseProjectId  表示当前镜像所属的企业项目。 取值为0或无该值，表示属于default企业项目。 取值为UUID，表示属于该UUID对应的企业项目。 关于企业项目ID的获取及企业项目特性的详细信息，请参考《企业管理用户指南》。
    * architecture  镜像的架构类型。取值包括： x86 arm 默认使用“x86”。
    * osType  操作系统版本。 创建数据盘镜像时该参数必填，取值为Linux或Windows。
    * imageTags  新规范的镜像标签列表。默认为空。 tags和image_tags只能使用一个。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'osVersion' => 'string',
            'imageUrl' => 'string',
            'minDisk' => 'int',
            'tags' => 'string[]',
            'type' => 'string',
            'enterpriseProjectId' => 'string',
            'architecture' => 'string',
            'osType' => 'string',
            'imageTags' => '\HuaweiCloud\SDK\Ims\V2\Model\ResourceTag[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  镜像名称
    * description  镜像描述信息。_description参数说明请参考镜像属性。支持字母、数字、中文等，不支持回车、<、 >，长度不能超过1024个字符。默认为空。
    * osVersion  操作系统版本。使用上传至OBS桶中的外部镜像文件制作镜像时生效
    * imageUrl  OBS桶中外部镜像文件地址。在使用OBS桶的外部镜像文件制作镜像时生效且为必选字段。格式为<OBS桶名>:<OBS镜像文件名称>。注意：此处的OBS桶和镜像文件的存储类别必须是OBS标准存储。
    * minDisk  最小系统盘大小。在使用OBS桶的外部镜像文件制作镜像时生效且为必选字段。取值为1至1024GB。
    * tags  镜像标签列表。默认为空。 tags和image_tags只能使用一个。
    * type  制作的镜像类型。系统盘镜像为ECS/BMS，数据盘镜像为DataImage. 制作数据盘镜像时该参数必选.
    * enterpriseProjectId  表示当前镜像所属的企业项目。 取值为0或无该值，表示属于default企业项目。 取值为UUID，表示属于该UUID对应的企业项目。 关于企业项目ID的获取及企业项目特性的详细信息，请参考《企业管理用户指南》。
    * architecture  镜像的架构类型。取值包括： x86 arm 默认使用“x86”。
    * osType  操作系统版本。 创建数据盘镜像时该参数必填，取值为Linux或Windows。
    * imageTags  新规范的镜像标签列表。默认为空。 tags和image_tags只能使用一个。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'osVersion' => null,
        'imageUrl' => null,
        'minDisk' => 'int32',
        'tags' => null,
        'type' => null,
        'enterpriseProjectId' => null,
        'architecture' => null,
        'osType' => null,
        'imageTags' => null
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
    * name  镜像名称
    * description  镜像描述信息。_description参数说明请参考镜像属性。支持字母、数字、中文等，不支持回车、<、 >，长度不能超过1024个字符。默认为空。
    * osVersion  操作系统版本。使用上传至OBS桶中的外部镜像文件制作镜像时生效
    * imageUrl  OBS桶中外部镜像文件地址。在使用OBS桶的外部镜像文件制作镜像时生效且为必选字段。格式为<OBS桶名>:<OBS镜像文件名称>。注意：此处的OBS桶和镜像文件的存储类别必须是OBS标准存储。
    * minDisk  最小系统盘大小。在使用OBS桶的外部镜像文件制作镜像时生效且为必选字段。取值为1至1024GB。
    * tags  镜像标签列表。默认为空。 tags和image_tags只能使用一个。
    * type  制作的镜像类型。系统盘镜像为ECS/BMS，数据盘镜像为DataImage. 制作数据盘镜像时该参数必选.
    * enterpriseProjectId  表示当前镜像所属的企业项目。 取值为0或无该值，表示属于default企业项目。 取值为UUID，表示属于该UUID对应的企业项目。 关于企业项目ID的获取及企业项目特性的详细信息，请参考《企业管理用户指南》。
    * architecture  镜像的架构类型。取值包括： x86 arm 默认使用“x86”。
    * osType  操作系统版本。 创建数据盘镜像时该参数必填，取值为Linux或Windows。
    * imageTags  新规范的镜像标签列表。默认为空。 tags和image_tags只能使用一个。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'osVersion' => 'os_version',
            'imageUrl' => 'image_url',
            'minDisk' => 'min_disk',
            'tags' => 'tags',
            'type' => 'type',
            'enterpriseProjectId' => 'enterprise_project_id',
            'architecture' => 'architecture',
            'osType' => 'os_type',
            'imageTags' => 'image_tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  镜像名称
    * description  镜像描述信息。_description参数说明请参考镜像属性。支持字母、数字、中文等，不支持回车、<、 >，长度不能超过1024个字符。默认为空。
    * osVersion  操作系统版本。使用上传至OBS桶中的外部镜像文件制作镜像时生效
    * imageUrl  OBS桶中外部镜像文件地址。在使用OBS桶的外部镜像文件制作镜像时生效且为必选字段。格式为<OBS桶名>:<OBS镜像文件名称>。注意：此处的OBS桶和镜像文件的存储类别必须是OBS标准存储。
    * minDisk  最小系统盘大小。在使用OBS桶的外部镜像文件制作镜像时生效且为必选字段。取值为1至1024GB。
    * tags  镜像标签列表。默认为空。 tags和image_tags只能使用一个。
    * type  制作的镜像类型。系统盘镜像为ECS/BMS，数据盘镜像为DataImage. 制作数据盘镜像时该参数必选.
    * enterpriseProjectId  表示当前镜像所属的企业项目。 取值为0或无该值，表示属于default企业项目。 取值为UUID，表示属于该UUID对应的企业项目。 关于企业项目ID的获取及企业项目特性的详细信息，请参考《企业管理用户指南》。
    * architecture  镜像的架构类型。取值包括： x86 arm 默认使用“x86”。
    * osType  操作系统版本。 创建数据盘镜像时该参数必填，取值为Linux或Windows。
    * imageTags  新规范的镜像标签列表。默认为空。 tags和image_tags只能使用一个。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'osVersion' => 'setOsVersion',
            'imageUrl' => 'setImageUrl',
            'minDisk' => 'setMinDisk',
            'tags' => 'setTags',
            'type' => 'setType',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'architecture' => 'setArchitecture',
            'osType' => 'setOsType',
            'imageTags' => 'setImageTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  镜像名称
    * description  镜像描述信息。_description参数说明请参考镜像属性。支持字母、数字、中文等，不支持回车、<、 >，长度不能超过1024个字符。默认为空。
    * osVersion  操作系统版本。使用上传至OBS桶中的外部镜像文件制作镜像时生效
    * imageUrl  OBS桶中外部镜像文件地址。在使用OBS桶的外部镜像文件制作镜像时生效且为必选字段。格式为<OBS桶名>:<OBS镜像文件名称>。注意：此处的OBS桶和镜像文件的存储类别必须是OBS标准存储。
    * minDisk  最小系统盘大小。在使用OBS桶的外部镜像文件制作镜像时生效且为必选字段。取值为1至1024GB。
    * tags  镜像标签列表。默认为空。 tags和image_tags只能使用一个。
    * type  制作的镜像类型。系统盘镜像为ECS/BMS，数据盘镜像为DataImage. 制作数据盘镜像时该参数必选.
    * enterpriseProjectId  表示当前镜像所属的企业项目。 取值为0或无该值，表示属于default企业项目。 取值为UUID，表示属于该UUID对应的企业项目。 关于企业项目ID的获取及企业项目特性的详细信息，请参考《企业管理用户指南》。
    * architecture  镜像的架构类型。取值包括： x86 arm 默认使用“x86”。
    * osType  操作系统版本。 创建数据盘镜像时该参数必填，取值为Linux或Windows。
    * imageTags  新规范的镜像标签列表。默认为空。 tags和image_tags只能使用一个。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'osVersion' => 'getOsVersion',
            'imageUrl' => 'getImageUrl',
            'minDisk' => 'getMinDisk',
            'tags' => 'getTags',
            'type' => 'getType',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'architecture' => 'getArchitecture',
            'osType' => 'getOsType',
            'imageTags' => 'getImageTags'
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
    const TYPE_DATA_IMAGE = 'DataImage';
    const ARCHITECTURE_X86 = 'x86';
    const ARCHITECTURE_ARM = 'arm';
    const OS_TYPE_LINUX = 'Linux';
    const OS_TYPE_WINDOWS = 'Windows';
    

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
            self::TYPE_DATA_IMAGE,
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
    public function getOsTypeAllowableValues()
    {
        return [
            self::OS_TYPE_LINUX,
            self::OS_TYPE_WINDOWS,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['osVersion'] = isset($data['osVersion']) ? $data['osVersion'] : null;
        $this->container['imageUrl'] = isset($data['imageUrl']) ? $data['imageUrl'] : null;
        $this->container['minDisk'] = isset($data['minDisk']) ? $data['minDisk'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : 'ECS';
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : '0';
        $this->container['architecture'] = isset($data['architecture']) ? $data['architecture'] : 'x86';
        $this->container['osType'] = isset($data['osType']) ? $data['osType'] : null;
        $this->container['imageTags'] = isset($data['imageTags']) ? $data['imageTags'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['osVersion'] === null) {
            $invalidProperties[] = "'osVersion' can't be null";
        }
        if ($this->container['imageUrl'] === null) {
            $invalidProperties[] = "'imageUrl' can't be null";
        }
        if ($this->container['minDisk'] === null) {
            $invalidProperties[] = "'minDisk' can't be null";
        }
            if (($this->container['minDisk'] > 1024)) {
                $invalidProperties[] = "invalid value for 'minDisk', must be smaller than or equal to 1024.";
            }
            if (($this->container['minDisk'] < 1)) {
                $invalidProperties[] = "invalid value for 'minDisk', must be bigger than or equal to 1.";
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

            $allowedValues = $this->getOsTypeAllowableValues();
                if (!is_null($this->container['osType']) && !in_array($this->container['osType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'osType', must be one of '%s'",
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
    * Gets description
    *  镜像描述信息。_description参数说明请参考镜像属性。支持字母、数字、中文等，不支持回车、<、 >，长度不能超过1024个字符。默认为空。
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
    * @param string|null $description 镜像描述信息。_description参数说明请参考镜像属性。支持字母、数字、中文等，不支持回车、<、 >，长度不能超过1024个字符。默认为空。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets osVersion
    *  操作系统版本。使用上传至OBS桶中的外部镜像文件制作镜像时生效
    *
    * @return string
    */
    public function getOsVersion()
    {
        return $this->container['osVersion'];
    }

    /**
    * Sets osVersion
    *
    * @param string $osVersion 操作系统版本。使用上传至OBS桶中的外部镜像文件制作镜像时生效
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
    *  OBS桶中外部镜像文件地址。在使用OBS桶的外部镜像文件制作镜像时生效且为必选字段。格式为<OBS桶名>:<OBS镜像文件名称>。注意：此处的OBS桶和镜像文件的存储类别必须是OBS标准存储。
    *
    * @return string
    */
    public function getImageUrl()
    {
        return $this->container['imageUrl'];
    }

    /**
    * Sets imageUrl
    *
    * @param string $imageUrl OBS桶中外部镜像文件地址。在使用OBS桶的外部镜像文件制作镜像时生效且为必选字段。格式为<OBS桶名>:<OBS镜像文件名称>。注意：此处的OBS桶和镜像文件的存储类别必须是OBS标准存储。
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
    *  最小系统盘大小。在使用OBS桶的外部镜像文件制作镜像时生效且为必选字段。取值为1至1024GB。
    *
    * @return int
    */
    public function getMinDisk()
    {
        return $this->container['minDisk'];
    }

    /**
    * Sets minDisk
    *
    * @param int $minDisk 最小系统盘大小。在使用OBS桶的外部镜像文件制作镜像时生效且为必选字段。取值为1至1024GB。
    *
    * @return $this
    */
    public function setMinDisk($minDisk)
    {
        $this->container['minDisk'] = $minDisk;
        return $this;
    }

    /**
    * Gets tags
    *  镜像标签列表。默认为空。 tags和image_tags只能使用一个。
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
    * @param string[]|null $tags 镜像标签列表。默认为空。 tags和image_tags只能使用一个。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets type
    *  制作的镜像类型。系统盘镜像为ECS/BMS，数据盘镜像为DataImage. 制作数据盘镜像时该参数必选.
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
    * @param string|null $type 制作的镜像类型。系统盘镜像为ECS/BMS，数据盘镜像为DataImage. 制作数据盘镜像时该参数必选.
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  表示当前镜像所属的企业项目。 取值为0或无该值，表示属于default企业项目。 取值为UUID，表示属于该UUID对应的企业项目。 关于企业项目ID的获取及企业项目特性的详细信息，请参考《企业管理用户指南》。
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
    * @param string|null $enterpriseProjectId 表示当前镜像所属的企业项目。 取值为0或无该值，表示属于default企业项目。 取值为UUID，表示属于该UUID对应的企业项目。 关于企业项目ID的获取及企业项目特性的详细信息，请参考《企业管理用户指南》。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets architecture
    *  镜像的架构类型。取值包括： x86 arm 默认使用“x86”。
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
    * @param string|null $architecture 镜像的架构类型。取值包括： x86 arm 默认使用“x86”。
    *
    * @return $this
    */
    public function setArchitecture($architecture)
    {
        $this->container['architecture'] = $architecture;
        return $this;
    }

    /**
    * Gets osType
    *  操作系统版本。 创建数据盘镜像时该参数必填，取值为Linux或Windows。
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
    * @param string|null $osType 操作系统版本。 创建数据盘镜像时该参数必填，取值为Linux或Windows。
    *
    * @return $this
    */
    public function setOsType($osType)
    {
        $this->container['osType'] = $osType;
        return $this;
    }

    /**
    * Gets imageTags
    *  新规范的镜像标签列表。默认为空。 tags和image_tags只能使用一个。
    *
    * @return \HuaweiCloud\SDK\Ims\V2\Model\ResourceTag[]|null
    */
    public function getImageTags()
    {
        return $this->container['imageTags'];
    }

    /**
    * Sets imageTags
    *
    * @param \HuaweiCloud\SDK\Ims\V2\Model\ResourceTag[]|null $imageTags 新规范的镜像标签列表。默认为空。 tags和image_tags只能使用一个。
    *
    * @return $this
    */
    public function setImageTags($imageTags)
    {
        $this->container['imageTags'] = $imageTags;
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

