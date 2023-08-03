<?php

namespace HuaweiCloud\SDK\Ims\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListTagsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListTagsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * limit  用于分页，表示查询几条记录，取值为整数，默认为所有。
    * page  页码，表示需要查询第几页的数据。默认值为1。
    * imagetype  镜像类型，目前支持以下类型：公共镜像：gold私有镜像：private共享镜像：shared 市场镜像：market
    * id  镜像ID。
    * status  镜像状态。取值如下： queued：表示镜像元数据已经创建成功，等待上传镜像文件。 saving：表示镜像正在上传文件到后端存储。 deleted：表示镜像已经删除。 killed：表示镜像上传错误。 active：表示镜像可以正常使用。
    * name  镜像名称。
    * minDisk  镜像运行需要的最小磁盘，单位为GB 。
    * platform  镜像平台分类。
    * osType  镜像系统类型，取值如下：Linux,Windows,Other
    * memberStatus  成员状态。目前取值有accepted、rejected、pending。
    * virtualEnvType  镜像使用环境类型：FusionCompute、Ironic、DataImage。
    * enterpriseProjectId  表示查询某个企业项目下的镜像。
    * architecture  镜像架构类型。取值包括：x86，arm
    * createdAt  镜像创建时间。支持按照时间点过滤查询，取值格式为“操作符:UTC时间”。 其中操作符支持如下几种： gt：大于 gte：大于等于 lt：小于 lte：小于等于 eq：等于 neq：不等于 时间格式支持：yyyy-MM-ddThh:mm:ssZ或者yyyy-MM-dd hh:mm:ss 例如，查询创建时间在2018-10-28 10:00:00之前的镜像，可以通过如下条件过滤： created_at=gt:2018-10-28T10:00:00Z
    * updatedAt  镜像修改时间。支持按照时间点过滤查询，取值格式为“ 操作符:UTC时间”。 其中操作符支持如下几种： gt：大于 gte：大于等于 lt：小于 lte：小于等于 eq：等于 neq：不等于 时间格式支持：yyyy-MM-ddThh:mm:ssZ或者yyyy-MM-dd hh:mm:ss 例如，查询修改时间在2018-10-28 10:00:00之前的镜像，可以通过如下条件过滤： updated_at=gt:2018-10-28T10:00:00Z
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'limit' => 'int',
            'page' => 'int',
            'imagetype' => 'string',
            'id' => 'string',
            'status' => 'string',
            'name' => 'string',
            'minDisk' => 'int',
            'platform' => 'string',
            'osType' => 'string',
            'memberStatus' => 'string',
            'virtualEnvType' => 'string',
            'enterpriseProjectId' => 'string',
            'architecture' => 'string',
            'createdAt' => 'string',
            'updatedAt' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * limit  用于分页，表示查询几条记录，取值为整数，默认为所有。
    * page  页码，表示需要查询第几页的数据。默认值为1。
    * imagetype  镜像类型，目前支持以下类型：公共镜像：gold私有镜像：private共享镜像：shared 市场镜像：market
    * id  镜像ID。
    * status  镜像状态。取值如下： queued：表示镜像元数据已经创建成功，等待上传镜像文件。 saving：表示镜像正在上传文件到后端存储。 deleted：表示镜像已经删除。 killed：表示镜像上传错误。 active：表示镜像可以正常使用。
    * name  镜像名称。
    * minDisk  镜像运行需要的最小磁盘，单位为GB 。
    * platform  镜像平台分类。
    * osType  镜像系统类型，取值如下：Linux,Windows,Other
    * memberStatus  成员状态。目前取值有accepted、rejected、pending。
    * virtualEnvType  镜像使用环境类型：FusionCompute、Ironic、DataImage。
    * enterpriseProjectId  表示查询某个企业项目下的镜像。
    * architecture  镜像架构类型。取值包括：x86，arm
    * createdAt  镜像创建时间。支持按照时间点过滤查询，取值格式为“操作符:UTC时间”。 其中操作符支持如下几种： gt：大于 gte：大于等于 lt：小于 lte：小于等于 eq：等于 neq：不等于 时间格式支持：yyyy-MM-ddThh:mm:ssZ或者yyyy-MM-dd hh:mm:ss 例如，查询创建时间在2018-10-28 10:00:00之前的镜像，可以通过如下条件过滤： created_at=gt:2018-10-28T10:00:00Z
    * updatedAt  镜像修改时间。支持按照时间点过滤查询，取值格式为“ 操作符:UTC时间”。 其中操作符支持如下几种： gt：大于 gte：大于等于 lt：小于 lte：小于等于 eq：等于 neq：不等于 时间格式支持：yyyy-MM-ddThh:mm:ssZ或者yyyy-MM-dd hh:mm:ss 例如，查询修改时间在2018-10-28 10:00:00之前的镜像，可以通过如下条件过滤： updated_at=gt:2018-10-28T10:00:00Z
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'limit' => 'int32',
        'page' => 'int32',
        'imagetype' => null,
        'id' => null,
        'status' => null,
        'name' => null,
        'minDisk' => 'int32',
        'platform' => null,
        'osType' => null,
        'memberStatus' => null,
        'virtualEnvType' => null,
        'enterpriseProjectId' => null,
        'architecture' => null,
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
    * limit  用于分页，表示查询几条记录，取值为整数，默认为所有。
    * page  页码，表示需要查询第几页的数据。默认值为1。
    * imagetype  镜像类型，目前支持以下类型：公共镜像：gold私有镜像：private共享镜像：shared 市场镜像：market
    * id  镜像ID。
    * status  镜像状态。取值如下： queued：表示镜像元数据已经创建成功，等待上传镜像文件。 saving：表示镜像正在上传文件到后端存储。 deleted：表示镜像已经删除。 killed：表示镜像上传错误。 active：表示镜像可以正常使用。
    * name  镜像名称。
    * minDisk  镜像运行需要的最小磁盘，单位为GB 。
    * platform  镜像平台分类。
    * osType  镜像系统类型，取值如下：Linux,Windows,Other
    * memberStatus  成员状态。目前取值有accepted、rejected、pending。
    * virtualEnvType  镜像使用环境类型：FusionCompute、Ironic、DataImage。
    * enterpriseProjectId  表示查询某个企业项目下的镜像。
    * architecture  镜像架构类型。取值包括：x86，arm
    * createdAt  镜像创建时间。支持按照时间点过滤查询，取值格式为“操作符:UTC时间”。 其中操作符支持如下几种： gt：大于 gte：大于等于 lt：小于 lte：小于等于 eq：等于 neq：不等于 时间格式支持：yyyy-MM-ddThh:mm:ssZ或者yyyy-MM-dd hh:mm:ss 例如，查询创建时间在2018-10-28 10:00:00之前的镜像，可以通过如下条件过滤： created_at=gt:2018-10-28T10:00:00Z
    * updatedAt  镜像修改时间。支持按照时间点过滤查询，取值格式为“ 操作符:UTC时间”。 其中操作符支持如下几种： gt：大于 gte：大于等于 lt：小于 lte：小于等于 eq：等于 neq：不等于 时间格式支持：yyyy-MM-ddThh:mm:ssZ或者yyyy-MM-dd hh:mm:ss 例如，查询修改时间在2018-10-28 10:00:00之前的镜像，可以通过如下条件过滤： updated_at=gt:2018-10-28T10:00:00Z
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'limit' => 'limit',
            'page' => 'page',
            'imagetype' => '__imagetype',
            'id' => 'id',
            'status' => 'status',
            'name' => 'name',
            'minDisk' => 'min_disk',
            'platform' => '__platform',
            'osType' => '__os_type',
            'memberStatus' => 'member_status',
            'virtualEnvType' => 'virtual_env_type',
            'enterpriseProjectId' => 'enterprise_project_id',
            'architecture' => 'architecture',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * limit  用于分页，表示查询几条记录，取值为整数，默认为所有。
    * page  页码，表示需要查询第几页的数据。默认值为1。
    * imagetype  镜像类型，目前支持以下类型：公共镜像：gold私有镜像：private共享镜像：shared 市场镜像：market
    * id  镜像ID。
    * status  镜像状态。取值如下： queued：表示镜像元数据已经创建成功，等待上传镜像文件。 saving：表示镜像正在上传文件到后端存储。 deleted：表示镜像已经删除。 killed：表示镜像上传错误。 active：表示镜像可以正常使用。
    * name  镜像名称。
    * minDisk  镜像运行需要的最小磁盘，单位为GB 。
    * platform  镜像平台分类。
    * osType  镜像系统类型，取值如下：Linux,Windows,Other
    * memberStatus  成员状态。目前取值有accepted、rejected、pending。
    * virtualEnvType  镜像使用环境类型：FusionCompute、Ironic、DataImage。
    * enterpriseProjectId  表示查询某个企业项目下的镜像。
    * architecture  镜像架构类型。取值包括：x86，arm
    * createdAt  镜像创建时间。支持按照时间点过滤查询，取值格式为“操作符:UTC时间”。 其中操作符支持如下几种： gt：大于 gte：大于等于 lt：小于 lte：小于等于 eq：等于 neq：不等于 时间格式支持：yyyy-MM-ddThh:mm:ssZ或者yyyy-MM-dd hh:mm:ss 例如，查询创建时间在2018-10-28 10:00:00之前的镜像，可以通过如下条件过滤： created_at=gt:2018-10-28T10:00:00Z
    * updatedAt  镜像修改时间。支持按照时间点过滤查询，取值格式为“ 操作符:UTC时间”。 其中操作符支持如下几种： gt：大于 gte：大于等于 lt：小于 lte：小于等于 eq：等于 neq：不等于 时间格式支持：yyyy-MM-ddThh:mm:ssZ或者yyyy-MM-dd hh:mm:ss 例如，查询修改时间在2018-10-28 10:00:00之前的镜像，可以通过如下条件过滤： updated_at=gt:2018-10-28T10:00:00Z
    *
    * @var string[]
    */
    protected static $setters = [
            'limit' => 'setLimit',
            'page' => 'setPage',
            'imagetype' => 'setImagetype',
            'id' => 'setId',
            'status' => 'setStatus',
            'name' => 'setName',
            'minDisk' => 'setMinDisk',
            'platform' => 'setPlatform',
            'osType' => 'setOsType',
            'memberStatus' => 'setMemberStatus',
            'virtualEnvType' => 'setVirtualEnvType',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'architecture' => 'setArchitecture',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * limit  用于分页，表示查询几条记录，取值为整数，默认为所有。
    * page  页码，表示需要查询第几页的数据。默认值为1。
    * imagetype  镜像类型，目前支持以下类型：公共镜像：gold私有镜像：private共享镜像：shared 市场镜像：market
    * id  镜像ID。
    * status  镜像状态。取值如下： queued：表示镜像元数据已经创建成功，等待上传镜像文件。 saving：表示镜像正在上传文件到后端存储。 deleted：表示镜像已经删除。 killed：表示镜像上传错误。 active：表示镜像可以正常使用。
    * name  镜像名称。
    * minDisk  镜像运行需要的最小磁盘，单位为GB 。
    * platform  镜像平台分类。
    * osType  镜像系统类型，取值如下：Linux,Windows,Other
    * memberStatus  成员状态。目前取值有accepted、rejected、pending。
    * virtualEnvType  镜像使用环境类型：FusionCompute、Ironic、DataImage。
    * enterpriseProjectId  表示查询某个企业项目下的镜像。
    * architecture  镜像架构类型。取值包括：x86，arm
    * createdAt  镜像创建时间。支持按照时间点过滤查询，取值格式为“操作符:UTC时间”。 其中操作符支持如下几种： gt：大于 gte：大于等于 lt：小于 lte：小于等于 eq：等于 neq：不等于 时间格式支持：yyyy-MM-ddThh:mm:ssZ或者yyyy-MM-dd hh:mm:ss 例如，查询创建时间在2018-10-28 10:00:00之前的镜像，可以通过如下条件过滤： created_at=gt:2018-10-28T10:00:00Z
    * updatedAt  镜像修改时间。支持按照时间点过滤查询，取值格式为“ 操作符:UTC时间”。 其中操作符支持如下几种： gt：大于 gte：大于等于 lt：小于 lte：小于等于 eq：等于 neq：不等于 时间格式支持：yyyy-MM-ddThh:mm:ssZ或者yyyy-MM-dd hh:mm:ss 例如，查询修改时间在2018-10-28 10:00:00之前的镜像，可以通过如下条件过滤： updated_at=gt:2018-10-28T10:00:00Z
    *
    * @var string[]
    */
    protected static $getters = [
            'limit' => 'getLimit',
            'page' => 'getPage',
            'imagetype' => 'getImagetype',
            'id' => 'getId',
            'status' => 'getStatus',
            'name' => 'getName',
            'minDisk' => 'getMinDisk',
            'platform' => 'getPlatform',
            'osType' => 'getOsType',
            'memberStatus' => 'getMemberStatus',
            'virtualEnvType' => 'getVirtualEnvType',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'architecture' => 'getArchitecture',
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
    const STATUS_QUEUED = 'queued';
    const STATUS_SAVING = 'saving';
    const STATUS_DELETED = 'deleted';
    const STATUS_KILLED = 'killed';
    const STATUS_ACTIVE = 'active';
    const OS_TYPE_LINUX = 'Linux';
    const OS_TYPE_WINDOWS = 'Windows';
    const OS_TYPE_OTHER = 'Other';
    const MEMBER_STATUS_ACCEPTED = 'accepted';
    const MEMBER_STATUS_REJECTED = 'rejected';
    const MEMBER_STATUS_PENDING = 'pending';
    const VIRTUAL_ENV_TYPE_FUSION_COMPUTE = 'FusionCompute';
    const VIRTUAL_ENV_TYPE_IRONIC = 'Ironic';
    const VIRTUAL_ENV_TYPE_DATA_IMAGE = 'DataImage';
    const ARCHITECTURE_X86 = 'x86';
    const ARCHITECTURE_ARM = 'arm';
    

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
    public function getMemberStatusAllowableValues()
    {
        return [
            self::MEMBER_STATUS_ACCEPTED,
            self::MEMBER_STATUS_REJECTED,
            self::MEMBER_STATUS_PENDING,
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
    public function getArchitectureAllowableValues()
    {
        return [
            self::ARCHITECTURE_X86,
            self::ARCHITECTURE_ARM,
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
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['page'] = isset($data['page']) ? $data['page'] : null;
        $this->container['imagetype'] = isset($data['imagetype']) ? $data['imagetype'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['minDisk'] = isset($data['minDisk']) ? $data['minDisk'] : null;
        $this->container['platform'] = isset($data['platform']) ? $data['platform'] : null;
        $this->container['osType'] = isset($data['osType']) ? $data['osType'] : null;
        $this->container['memberStatus'] = isset($data['memberStatus']) ? $data['memberStatus'] : null;
        $this->container['virtualEnvType'] = isset($data['virtualEnvType']) ? $data['virtualEnvType'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['architecture'] = isset($data['architecture']) ? $data['architecture'] : null;
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

            $allowedValues = $this->getMemberStatusAllowableValues();
                if (!is_null($this->container['memberStatus']) && !in_array($this->container['memberStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'memberStatus', must be one of '%s'",
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

            $allowedValues = $this->getArchitectureAllowableValues();
                if (!is_null($this->container['architecture']) && !in_array($this->container['architecture'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'architecture', must be one of '%s'",
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
    * Gets limit
    *  用于分页，表示查询几条记录，取值为整数，默认为所有。
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
    * @param int|null $limit 用于分页，表示查询几条记录，取值为整数，默认为所有。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets page
    *  页码，表示需要查询第几页的数据。默认值为1。
    *
    * @return int|null
    */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
    * Sets page
    *
    * @param int|null $page 页码，表示需要查询第几页的数据。默认值为1。
    *
    * @return $this
    */
    public function setPage($page)
    {
        $this->container['page'] = $page;
        return $this;
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
    * Gets id
    *  镜像ID。
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
    * @param string|null $id 镜像ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets status
    *  镜像状态。取值如下： queued：表示镜像元数据已经创建成功，等待上传镜像文件。 saving：表示镜像正在上传文件到后端存储。 deleted：表示镜像已经删除。 killed：表示镜像上传错误。 active：表示镜像可以正常使用。
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
    * @param string|null $status 镜像状态。取值如下： queued：表示镜像元数据已经创建成功，等待上传镜像文件。 saving：表示镜像正在上传文件到后端存储。 deleted：表示镜像已经删除。 killed：表示镜像上传错误。 active：表示镜像可以正常使用。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets name
    *  镜像名称。
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
    * @param string|null $name 镜像名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets minDisk
    *  镜像运行需要的最小磁盘，单位为GB 。
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
    * @param int|null $minDisk 镜像运行需要的最小磁盘，单位为GB 。
    *
    * @return $this
    */
    public function setMinDisk($minDisk)
    {
        $this->container['minDisk'] = $minDisk;
        return $this;
    }

    /**
    * Gets platform
    *  镜像平台分类。
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
    * @param string|null $platform 镜像平台分类。
    *
    * @return $this
    */
    public function setPlatform($platform)
    {
        $this->container['platform'] = $platform;
        return $this;
    }

    /**
    * Gets osType
    *  镜像系统类型，取值如下：Linux,Windows,Other
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
    * @param string|null $osType 镜像系统类型，取值如下：Linux,Windows,Other
    *
    * @return $this
    */
    public function setOsType($osType)
    {
        $this->container['osType'] = $osType;
        return $this;
    }

    /**
    * Gets memberStatus
    *  成员状态。目前取值有accepted、rejected、pending。
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
    * @param string|null $memberStatus 成员状态。目前取值有accepted、rejected、pending。
    *
    * @return $this
    */
    public function setMemberStatus($memberStatus)
    {
        $this->container['memberStatus'] = $memberStatus;
        return $this;
    }

    /**
    * Gets virtualEnvType
    *  镜像使用环境类型：FusionCompute、Ironic、DataImage。
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
    * @param string|null $virtualEnvType 镜像使用环境类型：FusionCompute、Ironic、DataImage。
    *
    * @return $this
    */
    public function setVirtualEnvType($virtualEnvType)
    {
        $this->container['virtualEnvType'] = $virtualEnvType;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  表示查询某个企业项目下的镜像。
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
    * @param string|null $enterpriseProjectId 表示查询某个企业项目下的镜像。
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
    *  镜像架构类型。取值包括：x86，arm
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
    * @param string|null $architecture 镜像架构类型。取值包括：x86，arm
    *
    * @return $this
    */
    public function setArchitecture($architecture)
    {
        $this->container['architecture'] = $architecture;
        return $this;
    }

    /**
    * Gets createdAt
    *  镜像创建时间。支持按照时间点过滤查询，取值格式为“操作符:UTC时间”。 其中操作符支持如下几种： gt：大于 gte：大于等于 lt：小于 lte：小于等于 eq：等于 neq：不等于 时间格式支持：yyyy-MM-ddThh:mm:ssZ或者yyyy-MM-dd hh:mm:ss 例如，查询创建时间在2018-10-28 10:00:00之前的镜像，可以通过如下条件过滤： created_at=gt:2018-10-28T10:00:00Z
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
    * @param string|null $createdAt 镜像创建时间。支持按照时间点过滤查询，取值格式为“操作符:UTC时间”。 其中操作符支持如下几种： gt：大于 gte：大于等于 lt：小于 lte：小于等于 eq：等于 neq：不等于 时间格式支持：yyyy-MM-ddThh:mm:ssZ或者yyyy-MM-dd hh:mm:ss 例如，查询创建时间在2018-10-28 10:00:00之前的镜像，可以通过如下条件过滤： created_at=gt:2018-10-28T10:00:00Z
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
    *  镜像修改时间。支持按照时间点过滤查询，取值格式为“ 操作符:UTC时间”。 其中操作符支持如下几种： gt：大于 gte：大于等于 lt：小于 lte：小于等于 eq：等于 neq：不等于 时间格式支持：yyyy-MM-ddThh:mm:ssZ或者yyyy-MM-dd hh:mm:ss 例如，查询修改时间在2018-10-28 10:00:00之前的镜像，可以通过如下条件过滤： updated_at=gt:2018-10-28T10:00:00Z
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
    * @param string|null $updatedAt 镜像修改时间。支持按照时间点过滤查询，取值格式为“ 操作符:UTC时间”。 其中操作符支持如下几种： gt：大于 gte：大于等于 lt：小于 lte：小于等于 eq：等于 neq：不等于 时间格式支持：yyyy-MM-ddThh:mm:ssZ或者yyyy-MM-dd hh:mm:ss 例如，查询修改时间在2018-10-28 10:00:00之前的镜像，可以通过如下条件过滤： updated_at=gt:2018-10-28T10:00:00Z
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

