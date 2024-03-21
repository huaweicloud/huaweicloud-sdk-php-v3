<?php

namespace HuaweiCloud\SDK\Geip\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowGlobalEipSegment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowGlobalEipSegment';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  全域弹性公网IP段的ID
    * name  - 功能说明：全域弹性公网IP段名称 - 取值范围：1-64，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * description  - 功能说明：用户自定义的资源描述 - 约束：   - 值的长度最大512字符，由数字、字母、中文、_(下划线)、-（中划线）、.（点）组成。
    * domainId  - 租户账号ID，获取租户账号ID请参见[租户账号ID](https://support.huaweicloud.com/api-iam/iam_17_0002.html)
    * accessSite  接入点信息
    * geipPoolName  全域弹性公网IP池子名称
    * isp  全域弹性公网IP所属线路
    * ipVersion  - 功能说明：全域弹性公网IP段的版本 - 取值范围：4、6
    * cidr  全域公网IP段的cidr
    * cidrV6  指定cidr-v6创建
    * freezen  是否冻结
    * freezenInfo  冻结原因
    * status  状态
    * createdAt  创建时间
    * updatedAt  更新时间
    * internetBandwidth  internetBandwidth
    * associateInstance  associateInstance
    * isPrePaid  是否包周期
    * tags  全域弹性公网IP段标签
    * sysTags  系统标签
    * enterpriseProjectId  - 企业项目ID。最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。 - 创建全域弹性公网IP时，给全域弹性公网IP绑定企业项目ID。 - 不指定该参数时，默认值是 0 - 关于企业项目ID的获取及企业项目特性的详细信息，请参见[《企业管理用户指南》](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0126101490.html)。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'description' => 'string',
            'domainId' => 'string',
            'accessSite' => 'string',
            'geipPoolName' => 'string',
            'isp' => 'string',
            'ipVersion' => 'int',
            'cidr' => 'string',
            'cidrV6' => 'string',
            'freezen' => 'bool',
            'freezenInfo' => 'string',
            'status' => 'string',
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime',
            'internetBandwidth' => '\HuaweiCloud\SDK\Geip\V3\Model\InternetBandwidthInfo',
            'associateInstance' => '\HuaweiCloud\SDK\Geip\V3\Model\InstanceInfo',
            'isPrePaid' => 'bool',
            'tags' => '\HuaweiCloud\SDK\Geip\V3\Model\Tag[]',
            'sysTags' => '\HuaweiCloud\SDK\Geip\V3\Model\Tag[]',
            'enterpriseProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  全域弹性公网IP段的ID
    * name  - 功能说明：全域弹性公网IP段名称 - 取值范围：1-64，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * description  - 功能说明：用户自定义的资源描述 - 约束：   - 值的长度最大512字符，由数字、字母、中文、_(下划线)、-（中划线）、.（点）组成。
    * domainId  - 租户账号ID，获取租户账号ID请参见[租户账号ID](https://support.huaweicloud.com/api-iam/iam_17_0002.html)
    * accessSite  接入点信息
    * geipPoolName  全域弹性公网IP池子名称
    * isp  全域弹性公网IP所属线路
    * ipVersion  - 功能说明：全域弹性公网IP段的版本 - 取值范围：4、6
    * cidr  全域公网IP段的cidr
    * cidrV6  指定cidr-v6创建
    * freezen  是否冻结
    * freezenInfo  冻结原因
    * status  状态
    * createdAt  创建时间
    * updatedAt  更新时间
    * internetBandwidth  internetBandwidth
    * associateInstance  associateInstance
    * isPrePaid  是否包周期
    * tags  全域弹性公网IP段标签
    * sysTags  系统标签
    * enterpriseProjectId  - 企业项目ID。最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。 - 创建全域弹性公网IP时，给全域弹性公网IP绑定企业项目ID。 - 不指定该参数时，默认值是 0 - 关于企业项目ID的获取及企业项目特性的详细信息，请参见[《企业管理用户指南》](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0126101490.html)。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'domainId' => null,
        'accessSite' => null,
        'geipPoolName' => null,
        'isp' => null,
        'ipVersion' => 'int32',
        'cidr' => null,
        'cidrV6' => null,
        'freezen' => null,
        'freezenInfo' => null,
        'status' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'internetBandwidth' => null,
        'associateInstance' => null,
        'isPrePaid' => null,
        'tags' => null,
        'sysTags' => null,
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
    * id  全域弹性公网IP段的ID
    * name  - 功能说明：全域弹性公网IP段名称 - 取值范围：1-64，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * description  - 功能说明：用户自定义的资源描述 - 约束：   - 值的长度最大512字符，由数字、字母、中文、_(下划线)、-（中划线）、.（点）组成。
    * domainId  - 租户账号ID，获取租户账号ID请参见[租户账号ID](https://support.huaweicloud.com/api-iam/iam_17_0002.html)
    * accessSite  接入点信息
    * geipPoolName  全域弹性公网IP池子名称
    * isp  全域弹性公网IP所属线路
    * ipVersion  - 功能说明：全域弹性公网IP段的版本 - 取值范围：4、6
    * cidr  全域公网IP段的cidr
    * cidrV6  指定cidr-v6创建
    * freezen  是否冻结
    * freezenInfo  冻结原因
    * status  状态
    * createdAt  创建时间
    * updatedAt  更新时间
    * internetBandwidth  internetBandwidth
    * associateInstance  associateInstance
    * isPrePaid  是否包周期
    * tags  全域弹性公网IP段标签
    * sysTags  系统标签
    * enterpriseProjectId  - 企业项目ID。最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。 - 创建全域弹性公网IP时，给全域弹性公网IP绑定企业项目ID。 - 不指定该参数时，默认值是 0 - 关于企业项目ID的获取及企业项目特性的详细信息，请参见[《企业管理用户指南》](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0126101490.html)。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'domainId' => 'domain_id',
            'accessSite' => 'access_site',
            'geipPoolName' => 'geip_pool_name',
            'isp' => 'isp',
            'ipVersion' => 'ip_version',
            'cidr' => 'cidr',
            'cidrV6' => 'cidr_v6',
            'freezen' => 'freezen',
            'freezenInfo' => 'freezen_info',
            'status' => 'status',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'internetBandwidth' => 'internet_bandwidth',
            'associateInstance' => 'associate_instance',
            'isPrePaid' => 'is_pre_paid',
            'tags' => 'tags',
            'sysTags' => 'sys_tags',
            'enterpriseProjectId' => 'enterprise_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  全域弹性公网IP段的ID
    * name  - 功能说明：全域弹性公网IP段名称 - 取值范围：1-64，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * description  - 功能说明：用户自定义的资源描述 - 约束：   - 值的长度最大512字符，由数字、字母、中文、_(下划线)、-（中划线）、.（点）组成。
    * domainId  - 租户账号ID，获取租户账号ID请参见[租户账号ID](https://support.huaweicloud.com/api-iam/iam_17_0002.html)
    * accessSite  接入点信息
    * geipPoolName  全域弹性公网IP池子名称
    * isp  全域弹性公网IP所属线路
    * ipVersion  - 功能说明：全域弹性公网IP段的版本 - 取值范围：4、6
    * cidr  全域公网IP段的cidr
    * cidrV6  指定cidr-v6创建
    * freezen  是否冻结
    * freezenInfo  冻结原因
    * status  状态
    * createdAt  创建时间
    * updatedAt  更新时间
    * internetBandwidth  internetBandwidth
    * associateInstance  associateInstance
    * isPrePaid  是否包周期
    * tags  全域弹性公网IP段标签
    * sysTags  系统标签
    * enterpriseProjectId  - 企业项目ID。最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。 - 创建全域弹性公网IP时，给全域弹性公网IP绑定企业项目ID。 - 不指定该参数时，默认值是 0 - 关于企业项目ID的获取及企业项目特性的详细信息，请参见[《企业管理用户指南》](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0126101490.html)。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'domainId' => 'setDomainId',
            'accessSite' => 'setAccessSite',
            'geipPoolName' => 'setGeipPoolName',
            'isp' => 'setIsp',
            'ipVersion' => 'setIpVersion',
            'cidr' => 'setCidr',
            'cidrV6' => 'setCidrV6',
            'freezen' => 'setFreezen',
            'freezenInfo' => 'setFreezenInfo',
            'status' => 'setStatus',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'internetBandwidth' => 'setInternetBandwidth',
            'associateInstance' => 'setAssociateInstance',
            'isPrePaid' => 'setIsPrePaid',
            'tags' => 'setTags',
            'sysTags' => 'setSysTags',
            'enterpriseProjectId' => 'setEnterpriseProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  全域弹性公网IP段的ID
    * name  - 功能说明：全域弹性公网IP段名称 - 取值范围：1-64，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * description  - 功能说明：用户自定义的资源描述 - 约束：   - 值的长度最大512字符，由数字、字母、中文、_(下划线)、-（中划线）、.（点）组成。
    * domainId  - 租户账号ID，获取租户账号ID请参见[租户账号ID](https://support.huaweicloud.com/api-iam/iam_17_0002.html)
    * accessSite  接入点信息
    * geipPoolName  全域弹性公网IP池子名称
    * isp  全域弹性公网IP所属线路
    * ipVersion  - 功能说明：全域弹性公网IP段的版本 - 取值范围：4、6
    * cidr  全域公网IP段的cidr
    * cidrV6  指定cidr-v6创建
    * freezen  是否冻结
    * freezenInfo  冻结原因
    * status  状态
    * createdAt  创建时间
    * updatedAt  更新时间
    * internetBandwidth  internetBandwidth
    * associateInstance  associateInstance
    * isPrePaid  是否包周期
    * tags  全域弹性公网IP段标签
    * sysTags  系统标签
    * enterpriseProjectId  - 企业项目ID。最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。 - 创建全域弹性公网IP时，给全域弹性公网IP绑定企业项目ID。 - 不指定该参数时，默认值是 0 - 关于企业项目ID的获取及企业项目特性的详细信息，请参见[《企业管理用户指南》](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0126101490.html)。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'domainId' => 'getDomainId',
            'accessSite' => 'getAccessSite',
            'geipPoolName' => 'getGeipPoolName',
            'isp' => 'getIsp',
            'ipVersion' => 'getIpVersion',
            'cidr' => 'getCidr',
            'cidrV6' => 'getCidrV6',
            'freezen' => 'getFreezen',
            'freezenInfo' => 'getFreezenInfo',
            'status' => 'getStatus',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'internetBandwidth' => 'getInternetBandwidth',
            'associateInstance' => 'getAssociateInstance',
            'isPrePaid' => 'getIsPrePaid',
            'tags' => 'getTags',
            'sysTags' => 'getSysTags',
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
    const IP_VERSION_4 = 4;
    const IP_VERSION_6 = 6;
    const STATUS_PENDING_CREATE = 'PENDING_CREATE';
    const STATUS_IDLE = 'IDLE';
    const STATUS_INUSE = 'INUSE';
    const STATUS_PENDING_UPDATE = 'PENDING_UPDATE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getIpVersionAllowableValues()
    {
        return [
            self::IP_VERSION_4,
            self::IP_VERSION_6,
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
            self::STATUS_PENDING_CREATE,
            self::STATUS_IDLE,
            self::STATUS_INUSE,
            self::STATUS_PENDING_UPDATE,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['accessSite'] = isset($data['accessSite']) ? $data['accessSite'] : null;
        $this->container['geipPoolName'] = isset($data['geipPoolName']) ? $data['geipPoolName'] : null;
        $this->container['isp'] = isset($data['isp']) ? $data['isp'] : null;
        $this->container['ipVersion'] = isset($data['ipVersion']) ? $data['ipVersion'] : null;
        $this->container['cidr'] = isset($data['cidr']) ? $data['cidr'] : null;
        $this->container['cidrV6'] = isset($data['cidrV6']) ? $data['cidrV6'] : null;
        $this->container['freezen'] = isset($data['freezen']) ? $data['freezen'] : null;
        $this->container['freezenInfo'] = isset($data['freezenInfo']) ? $data['freezenInfo'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['internetBandwidth'] = isset($data['internetBandwidth']) ? $data['internetBandwidth'] : null;
        $this->container['associateInstance'] = isset($data['associateInstance']) ? $data['associateInstance'] : null;
        $this->container['isPrePaid'] = isset($data['isPrePaid']) ? $data['isPrePaid'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['sysTags'] = isset($data['sysTags']) ? $data['sysTags'] : null;
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
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 512)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getIpVersionAllowableValues();
                if (!is_null($this->container['ipVersion']) && !in_array($this->container['ipVersion'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'ipVersion', must be one of '%s'",
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

            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 1.";
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
    *  全域弹性公网IP段的ID
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
    * @param string|null $id 全域弹性公网IP段的ID
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
    *  - 功能说明：全域弹性公网IP段名称 - 取值范围：1-64，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
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
    * @param string|null $name - 功能说明：全域弹性公网IP段名称 - 取值范围：1-64，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
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
    *  - 功能说明：用户自定义的资源描述 - 约束：   - 值的长度最大512字符，由数字、字母、中文、_(下划线)、-（中划线）、.（点）组成。
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
    * @param string|null $description - 功能说明：用户自定义的资源描述 - 约束：   - 值的长度最大512字符，由数字、字母、中文、_(下划线)、-（中划线）、.（点）组成。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets domainId
    *  - 租户账号ID，获取租户账号ID请参见[租户账号ID](https://support.huaweicloud.com/api-iam/iam_17_0002.html)
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId - 租户账号ID，获取租户账号ID请参见[租户账号ID](https://support.huaweicloud.com/api-iam/iam_17_0002.html)
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets accessSite
    *  接入点信息
    *
    * @return string|null
    */
    public function getAccessSite()
    {
        return $this->container['accessSite'];
    }

    /**
    * Sets accessSite
    *
    * @param string|null $accessSite 接入点信息
    *
    * @return $this
    */
    public function setAccessSite($accessSite)
    {
        $this->container['accessSite'] = $accessSite;
        return $this;
    }

    /**
    * Gets geipPoolName
    *  全域弹性公网IP池子名称
    *
    * @return string|null
    */
    public function getGeipPoolName()
    {
        return $this->container['geipPoolName'];
    }

    /**
    * Sets geipPoolName
    *
    * @param string|null $geipPoolName 全域弹性公网IP池子名称
    *
    * @return $this
    */
    public function setGeipPoolName($geipPoolName)
    {
        $this->container['geipPoolName'] = $geipPoolName;
        return $this;
    }

    /**
    * Gets isp
    *  全域弹性公网IP所属线路
    *
    * @return string|null
    */
    public function getIsp()
    {
        return $this->container['isp'];
    }

    /**
    * Sets isp
    *
    * @param string|null $isp 全域弹性公网IP所属线路
    *
    * @return $this
    */
    public function setIsp($isp)
    {
        $this->container['isp'] = $isp;
        return $this;
    }

    /**
    * Gets ipVersion
    *  - 功能说明：全域弹性公网IP段的版本 - 取值范围：4、6
    *
    * @return int|null
    */
    public function getIpVersion()
    {
        return $this->container['ipVersion'];
    }

    /**
    * Sets ipVersion
    *
    * @param int|null $ipVersion - 功能说明：全域弹性公网IP段的版本 - 取值范围：4、6
    *
    * @return $this
    */
    public function setIpVersion($ipVersion)
    {
        $this->container['ipVersion'] = $ipVersion;
        return $this;
    }

    /**
    * Gets cidr
    *  全域公网IP段的cidr
    *
    * @return string|null
    */
    public function getCidr()
    {
        return $this->container['cidr'];
    }

    /**
    * Sets cidr
    *
    * @param string|null $cidr 全域公网IP段的cidr
    *
    * @return $this
    */
    public function setCidr($cidr)
    {
        $this->container['cidr'] = $cidr;
        return $this;
    }

    /**
    * Gets cidrV6
    *  指定cidr-v6创建
    *
    * @return string|null
    */
    public function getCidrV6()
    {
        return $this->container['cidrV6'];
    }

    /**
    * Sets cidrV6
    *
    * @param string|null $cidrV6 指定cidr-v6创建
    *
    * @return $this
    */
    public function setCidrV6($cidrV6)
    {
        $this->container['cidrV6'] = $cidrV6;
        return $this;
    }

    /**
    * Gets freezen
    *  是否冻结
    *
    * @return bool|null
    */
    public function getFreezen()
    {
        return $this->container['freezen'];
    }

    /**
    * Sets freezen
    *
    * @param bool|null $freezen 是否冻结
    *
    * @return $this
    */
    public function setFreezen($freezen)
    {
        $this->container['freezen'] = $freezen;
        return $this;
    }

    /**
    * Gets freezenInfo
    *  冻结原因
    *
    * @return string|null
    */
    public function getFreezenInfo()
    {
        return $this->container['freezenInfo'];
    }

    /**
    * Sets freezenInfo
    *
    * @param string|null $freezenInfo 冻结原因
    *
    * @return $this
    */
    public function setFreezenInfo($freezenInfo)
    {
        $this->container['freezenInfo'] = $freezenInfo;
        return $this;
    }

    /**
    * Gets status
    *  状态
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
    * @param string|null $status 状态
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
    *  创建时间
    *
    * @return \DateTime|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param \DateTime|null $createdAt 创建时间
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
    *  更新时间
    *
    * @return \DateTime|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param \DateTime|null $updatedAt 更新时间
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets internetBandwidth
    *  internetBandwidth
    *
    * @return \HuaweiCloud\SDK\Geip\V3\Model\InternetBandwidthInfo|null
    */
    public function getInternetBandwidth()
    {
        return $this->container['internetBandwidth'];
    }

    /**
    * Sets internetBandwidth
    *
    * @param \HuaweiCloud\SDK\Geip\V3\Model\InternetBandwidthInfo|null $internetBandwidth internetBandwidth
    *
    * @return $this
    */
    public function setInternetBandwidth($internetBandwidth)
    {
        $this->container['internetBandwidth'] = $internetBandwidth;
        return $this;
    }

    /**
    * Gets associateInstance
    *  associateInstance
    *
    * @return \HuaweiCloud\SDK\Geip\V3\Model\InstanceInfo|null
    */
    public function getAssociateInstance()
    {
        return $this->container['associateInstance'];
    }

    /**
    * Sets associateInstance
    *
    * @param \HuaweiCloud\SDK\Geip\V3\Model\InstanceInfo|null $associateInstance associateInstance
    *
    * @return $this
    */
    public function setAssociateInstance($associateInstance)
    {
        $this->container['associateInstance'] = $associateInstance;
        return $this;
    }

    /**
    * Gets isPrePaid
    *  是否包周期
    *
    * @return bool|null
    */
    public function getIsPrePaid()
    {
        return $this->container['isPrePaid'];
    }

    /**
    * Sets isPrePaid
    *
    * @param bool|null $isPrePaid 是否包周期
    *
    * @return $this
    */
    public function setIsPrePaid($isPrePaid)
    {
        $this->container['isPrePaid'] = $isPrePaid;
        return $this;
    }

    /**
    * Gets tags
    *  全域弹性公网IP段标签
    *
    * @return \HuaweiCloud\SDK\Geip\V3\Model\Tag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Geip\V3\Model\Tag[]|null $tags 全域弹性公网IP段标签
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets sysTags
    *  系统标签
    *
    * @return \HuaweiCloud\SDK\Geip\V3\Model\Tag[]|null
    */
    public function getSysTags()
    {
        return $this->container['sysTags'];
    }

    /**
    * Sets sysTags
    *
    * @param \HuaweiCloud\SDK\Geip\V3\Model\Tag[]|null $sysTags 系统标签
    *
    * @return $this
    */
    public function setSysTags($sysTags)
    {
        $this->container['sysTags'] = $sysTags;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  - 企业项目ID。最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。 - 创建全域弹性公网IP时，给全域弹性公网IP绑定企业项目ID。 - 不指定该参数时，默认值是 0 - 关于企业项目ID的获取及企业项目特性的详细信息，请参见[《企业管理用户指南》](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0126101490.html)。
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
    * @param string|null $enterpriseProjectId - 企业项目ID。最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。 - 创建全域弹性公网IP时，给全域弹性公网IP绑定企业项目ID。 - 不指定该参数时，默认值是 0 - 关于企业项目ID的获取及企业项目特性的详细信息，请参见[《企业管理用户指南》](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0126101490.html)。
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

