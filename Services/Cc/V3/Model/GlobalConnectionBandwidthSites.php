<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GlobalConnectionBandwidthSites implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GlobalConnectionBandwidthSites';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  实例ID。
    * description  实例描述。不支持 <>。
    * createdAt  实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * updatedAt  实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * regionId  RegionID。
    * nameEn  功能说明：站点信息自定义的英文名称。 取值范围：1-255个字符
    * nameCn  功能说明：站点信息自定义的中文名称。 取值范围：1-64个字符。
    * siteCode  功能说明：站点编码，格式为<area_code>[-<subarea_code>[-<region_code>]]。 取值范围：1-64个字符。
    * siteType  功能说明：站点类型，必须跟站点编码对应，一段编码为大区，两段编码为区域，三段编码为城域。 取值范围： - Area: 大区站点 - SubArea: 区域站点 - Region: 城域站点
    * serviceList  功能说明：站点支持的服务列表，多个服务用\",\"分隔。 取值范围：0-255个字符
    * groupList  groupList
    * publicBorderGroup  功能说明：用于标记是中心还是边缘站点。中心：center 取值范围：0-255个字符。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'description' => 'string',
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime',
            'regionId' => 'string',
            'nameEn' => 'string',
            'nameCn' => 'string',
            'siteCode' => 'string',
            'siteType' => 'string',
            'serviceList' => 'string',
            'groupList' => '\HuaweiCloud\SDK\Cc\V3\Model\SiteGroupReferenceInfo[]',
            'publicBorderGroup' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  实例ID。
    * description  实例描述。不支持 <>。
    * createdAt  实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * updatedAt  实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * regionId  RegionID。
    * nameEn  功能说明：站点信息自定义的英文名称。 取值范围：1-255个字符
    * nameCn  功能说明：站点信息自定义的中文名称。 取值范围：1-64个字符。
    * siteCode  功能说明：站点编码，格式为<area_code>[-<subarea_code>[-<region_code>]]。 取值范围：1-64个字符。
    * siteType  功能说明：站点类型，必须跟站点编码对应，一段编码为大区，两段编码为区域，三段编码为城域。 取值范围： - Area: 大区站点 - SubArea: 区域站点 - Region: 城域站点
    * serviceList  功能说明：站点支持的服务列表，多个服务用\",\"分隔。 取值范围：0-255个字符
    * groupList  groupList
    * publicBorderGroup  功能说明：用于标记是中心还是边缘站点。中心：center 取值范围：0-255个字符。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'description' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'regionId' => null,
        'nameEn' => null,
        'nameCn' => null,
        'siteCode' => null,
        'siteType' => null,
        'serviceList' => null,
        'groupList' => null,
        'publicBorderGroup' => null
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
    * id  实例ID。
    * description  实例描述。不支持 <>。
    * createdAt  实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * updatedAt  实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * regionId  RegionID。
    * nameEn  功能说明：站点信息自定义的英文名称。 取值范围：1-255个字符
    * nameCn  功能说明：站点信息自定义的中文名称。 取值范围：1-64个字符。
    * siteCode  功能说明：站点编码，格式为<area_code>[-<subarea_code>[-<region_code>]]。 取值范围：1-64个字符。
    * siteType  功能说明：站点类型，必须跟站点编码对应，一段编码为大区，两段编码为区域，三段编码为城域。 取值范围： - Area: 大区站点 - SubArea: 区域站点 - Region: 城域站点
    * serviceList  功能说明：站点支持的服务列表，多个服务用\",\"分隔。 取值范围：0-255个字符
    * groupList  groupList
    * publicBorderGroup  功能说明：用于标记是中心还是边缘站点。中心：center 取值范围：0-255个字符。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'description' => 'description',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'regionId' => 'region_id',
            'nameEn' => 'name_en',
            'nameCn' => 'name_cn',
            'siteCode' => 'site_code',
            'siteType' => 'site_type',
            'serviceList' => 'service_list',
            'groupList' => 'group_list',
            'publicBorderGroup' => 'public_border_group'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  实例ID。
    * description  实例描述。不支持 <>。
    * createdAt  实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * updatedAt  实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * regionId  RegionID。
    * nameEn  功能说明：站点信息自定义的英文名称。 取值范围：1-255个字符
    * nameCn  功能说明：站点信息自定义的中文名称。 取值范围：1-64个字符。
    * siteCode  功能说明：站点编码，格式为<area_code>[-<subarea_code>[-<region_code>]]。 取值范围：1-64个字符。
    * siteType  功能说明：站点类型，必须跟站点编码对应，一段编码为大区，两段编码为区域，三段编码为城域。 取值范围： - Area: 大区站点 - SubArea: 区域站点 - Region: 城域站点
    * serviceList  功能说明：站点支持的服务列表，多个服务用\",\"分隔。 取值范围：0-255个字符
    * groupList  groupList
    * publicBorderGroup  功能说明：用于标记是中心还是边缘站点。中心：center 取值范围：0-255个字符。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'description' => 'setDescription',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'regionId' => 'setRegionId',
            'nameEn' => 'setNameEn',
            'nameCn' => 'setNameCn',
            'siteCode' => 'setSiteCode',
            'siteType' => 'setSiteType',
            'serviceList' => 'setServiceList',
            'groupList' => 'setGroupList',
            'publicBorderGroup' => 'setPublicBorderGroup'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  实例ID。
    * description  实例描述。不支持 <>。
    * createdAt  实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * updatedAt  实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    * regionId  RegionID。
    * nameEn  功能说明：站点信息自定义的英文名称。 取值范围：1-255个字符
    * nameCn  功能说明：站点信息自定义的中文名称。 取值范围：1-64个字符。
    * siteCode  功能说明：站点编码，格式为<area_code>[-<subarea_code>[-<region_code>]]。 取值范围：1-64个字符。
    * siteType  功能说明：站点类型，必须跟站点编码对应，一段编码为大区，两段编码为区域，三段编码为城域。 取值范围： - Area: 大区站点 - SubArea: 区域站点 - Region: 城域站点
    * serviceList  功能说明：站点支持的服务列表，多个服务用\",\"分隔。 取值范围：0-255个字符
    * groupList  groupList
    * publicBorderGroup  功能说明：用于标记是中心还是边缘站点。中心：center 取值范围：0-255个字符。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'description' => 'getDescription',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'regionId' => 'getRegionId',
            'nameEn' => 'getNameEn',
            'nameCn' => 'getNameCn',
            'siteCode' => 'getSiteCode',
            'siteType' => 'getSiteType',
            'serviceList' => 'getServiceList',
            'groupList' => 'getGroupList',
            'publicBorderGroup' => 'getPublicBorderGroup'
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
    const SITE_TYPE_AREA = 'Area';
    const SITE_TYPE_SUB_AREA = 'SubArea';
    const SITE_TYPE_REGION = 'Region';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSiteTypeAllowableValues()
    {
        return [
            self::SITE_TYPE_AREA,
            self::SITE_TYPE_SUB_AREA,
            self::SITE_TYPE_REGION,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['nameEn'] = isset($data['nameEn']) ? $data['nameEn'] : null;
        $this->container['nameCn'] = isset($data['nameCn']) ? $data['nameCn'] : null;
        $this->container['siteCode'] = isset($data['siteCode']) ? $data['siteCode'] : null;
        $this->container['siteType'] = isset($data['siteType']) ? $data['siteType'] : null;
        $this->container['serviceList'] = isset($data['serviceList']) ? $data['serviceList'] : null;
        $this->container['groupList'] = isset($data['groupList']) ? $data['groupList'] : null;
        $this->container['publicBorderGroup'] = isset($data['publicBorderGroup']) ? $data['publicBorderGroup'] : null;
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
            if ((mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['id']) < 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 36.";
            }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && !preg_match("/^[^<>]*$/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /^[^<>]*$/.";
            }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
        }
        if ($this->container['regionId'] === null) {
            $invalidProperties[] = "'regionId' can't be null";
        }
            if ((mb_strlen($this->container['regionId']) > 32)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['regionId']) < 1)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['nameEn']) && (mb_strlen($this->container['nameEn']) > 255)) {
                $invalidProperties[] = "invalid value for 'nameEn', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['nameEn']) && (mb_strlen($this->container['nameEn']) < 1)) {
                $invalidProperties[] = "invalid value for 'nameEn', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['nameEn']) && !preg_match("/^[^&lt;&gt;]*$/", $this->container['nameEn'])) {
                $invalidProperties[] = "invalid value for 'nameEn', must be conform to the pattern /^[^&lt;&gt;]*$/.";
            }
            if (!is_null($this->container['nameCn']) && (mb_strlen($this->container['nameCn']) > 64)) {
                $invalidProperties[] = "invalid value for 'nameCn', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['nameCn']) && (mb_strlen($this->container['nameCn']) < 1)) {
                $invalidProperties[] = "invalid value for 'nameCn', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['nameCn']) && !preg_match("/^[^&lt;&gt;]*$/", $this->container['nameCn'])) {
                $invalidProperties[] = "invalid value for 'nameCn', must be conform to the pattern /^[^&lt;&gt;]*$/.";
            }
            if (!is_null($this->container['siteCode']) && (mb_strlen($this->container['siteCode']) > 64)) {
                $invalidProperties[] = "invalid value for 'siteCode', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['siteCode']) && (mb_strlen($this->container['siteCode']) < 1)) {
                $invalidProperties[] = "invalid value for 'siteCode', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['siteCode']) && !preg_match("/^[0-9a-zA-Z_.]+(-[0-9a-zA-Z_.]+){0,2}$/", $this->container['siteCode'])) {
                $invalidProperties[] = "invalid value for 'siteCode', must be conform to the pattern /^[0-9a-zA-Z_.]+(-[0-9a-zA-Z_.]+){0,2}$/.";
            }
            $allowedValues = $this->getSiteTypeAllowableValues();
                if (!is_null($this->container['siteType']) && !in_array($this->container['siteType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'siteType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['siteType']) && (mb_strlen($this->container['siteType']) > 64)) {
                $invalidProperties[] = "invalid value for 'siteType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['siteType']) && (mb_strlen($this->container['siteType']) < 1)) {
                $invalidProperties[] = "invalid value for 'siteType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['serviceList']) && (mb_strlen($this->container['serviceList']) > 255)) {
                $invalidProperties[] = "invalid value for 'serviceList', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['serviceList']) && (mb_strlen($this->container['serviceList']) < 0)) {
                $invalidProperties[] = "invalid value for 'serviceList', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['serviceList']) && !preg_match("/^[0-9a-zA-Z_.]+(,[0-9a-zA-Z_.]+)*$/", $this->container['serviceList'])) {
                $invalidProperties[] = "invalid value for 'serviceList', must be conform to the pattern /^[0-9a-zA-Z_.]+(,[0-9a-zA-Z_.]+)*$/.";
            }
            if (!is_null($this->container['publicBorderGroup']) && (mb_strlen($this->container['publicBorderGroup']) > 255)) {
                $invalidProperties[] = "invalid value for 'publicBorderGroup', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['publicBorderGroup']) && (mb_strlen($this->container['publicBorderGroup']) < 0)) {
                $invalidProperties[] = "invalid value for 'publicBorderGroup', the character length must be bigger than or equal to 0.";
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
    *  实例ID。
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
    * @param string $id 实例ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets description
    *  实例描述。不支持 <>。
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
    * @param string|null $description 实例描述。不支持 <>。
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
    *  实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    *
    * @return \DateTime
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param \DateTime $createdAt 实例创建时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
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
    *  实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    *
    * @return \DateTime
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param \DateTime $updatedAt 实例更新时间。UTC时间格式，yyyy-MM-ddTHH:mm:ss。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets regionId
    *  RegionID。
    *
    * @return string
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string $regionId RegionID。
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets nameEn
    *  功能说明：站点信息自定义的英文名称。 取值范围：1-255个字符
    *
    * @return string|null
    */
    public function getNameEn()
    {
        return $this->container['nameEn'];
    }

    /**
    * Sets nameEn
    *
    * @param string|null $nameEn 功能说明：站点信息自定义的英文名称。 取值范围：1-255个字符
    *
    * @return $this
    */
    public function setNameEn($nameEn)
    {
        $this->container['nameEn'] = $nameEn;
        return $this;
    }

    /**
    * Gets nameCn
    *  功能说明：站点信息自定义的中文名称。 取值范围：1-64个字符。
    *
    * @return string|null
    */
    public function getNameCn()
    {
        return $this->container['nameCn'];
    }

    /**
    * Sets nameCn
    *
    * @param string|null $nameCn 功能说明：站点信息自定义的中文名称。 取值范围：1-64个字符。
    *
    * @return $this
    */
    public function setNameCn($nameCn)
    {
        $this->container['nameCn'] = $nameCn;
        return $this;
    }

    /**
    * Gets siteCode
    *  功能说明：站点编码，格式为<area_code>[-<subarea_code>[-<region_code>]]。 取值范围：1-64个字符。
    *
    * @return string|null
    */
    public function getSiteCode()
    {
        return $this->container['siteCode'];
    }

    /**
    * Sets siteCode
    *
    * @param string|null $siteCode 功能说明：站点编码，格式为<area_code>[-<subarea_code>[-<region_code>]]。 取值范围：1-64个字符。
    *
    * @return $this
    */
    public function setSiteCode($siteCode)
    {
        $this->container['siteCode'] = $siteCode;
        return $this;
    }

    /**
    * Gets siteType
    *  功能说明：站点类型，必须跟站点编码对应，一段编码为大区，两段编码为区域，三段编码为城域。 取值范围： - Area: 大区站点 - SubArea: 区域站点 - Region: 城域站点
    *
    * @return string|null
    */
    public function getSiteType()
    {
        return $this->container['siteType'];
    }

    /**
    * Sets siteType
    *
    * @param string|null $siteType 功能说明：站点类型，必须跟站点编码对应，一段编码为大区，两段编码为区域，三段编码为城域。 取值范围： - Area: 大区站点 - SubArea: 区域站点 - Region: 城域站点
    *
    * @return $this
    */
    public function setSiteType($siteType)
    {
        $this->container['siteType'] = $siteType;
        return $this;
    }

    /**
    * Gets serviceList
    *  功能说明：站点支持的服务列表，多个服务用\",\"分隔。 取值范围：0-255个字符
    *
    * @return string|null
    */
    public function getServiceList()
    {
        return $this->container['serviceList'];
    }

    /**
    * Sets serviceList
    *
    * @param string|null $serviceList 功能说明：站点支持的服务列表，多个服务用\",\"分隔。 取值范围：0-255个字符
    *
    * @return $this
    */
    public function setServiceList($serviceList)
    {
        $this->container['serviceList'] = $serviceList;
        return $this;
    }

    /**
    * Gets groupList
    *  groupList
    *
    * @return \HuaweiCloud\SDK\Cc\V3\Model\SiteGroupReferenceInfo[]|null
    */
    public function getGroupList()
    {
        return $this->container['groupList'];
    }

    /**
    * Sets groupList
    *
    * @param \HuaweiCloud\SDK\Cc\V3\Model\SiteGroupReferenceInfo[]|null $groupList groupList
    *
    * @return $this
    */
    public function setGroupList($groupList)
    {
        $this->container['groupList'] = $groupList;
        return $this;
    }

    /**
    * Gets publicBorderGroup
    *  功能说明：用于标记是中心还是边缘站点。中心：center 取值范围：0-255个字符。
    *
    * @return string|null
    */
    public function getPublicBorderGroup()
    {
        return $this->container['publicBorderGroup'];
    }

    /**
    * Sets publicBorderGroup
    *
    * @param string|null $publicBorderGroup 功能说明：用于标记是中心还是边缘站点。中心：center 取值范围：0-255个字符。
    *
    * @return $this
    */
    public function setPublicBorderGroup($publicBorderGroup)
    {
        $this->container['publicBorderGroup'] = $publicBorderGroup;
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

