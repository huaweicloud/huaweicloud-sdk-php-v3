<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HwcVpc implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HwcVpc';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  VPC对应的唯一标识
    * name  VPC对应的名称
    * description  VPC的描述信息
    * protectedStatus  CFW开启或安全组规则配置状态：OPEN | CLOSE
    * cidr  VPC下可用子网的范围 取值范围： 10.0.0.0/8~10.255.255.240/28 172.16.0.0/12 ~ 172.31.255.240/28 192.168.0.0/16 ~ 192.168.255.240/28 不指定cidr时，默认值为“” 约束：必须是ipv4 cidr格式，例如:192.168.0.0/16
    * extendCidrs  VPC的扩展网段 约束：目前只支持ipv4
    * status  VPC对应的状态 取值范围： PENDING：创建中 ACTIVE：创建成功
    * projectId  VPC所属的项目ID
    * enterpriseProjectId  VPC所属的企业项目ID。 取值范围：最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。
    * createdAt  VPC创建时间 取值范围：UTC时间格式，yyyy-MM-ddTHH:mm:ss
    * updatedAt  VPC更新时间 取值范围：UTC时间格式，yyyy-MM-ddTHH:mm:ss
    * cloudResources  VPC关联资产类型和数量 取值范围：目前只返回VPC关联的routetable和virsubnet。virsubnet数量为ipv4和ipv6子网总数。
    * tags  VPC的标签信息，详情参见Tag对象 取值范围：0-10个标签键值对
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'description' => 'string',
            'protectedStatus' => 'string',
            'cidr' => 'string',
            'extendCidrs' => 'string[]',
            'status' => 'string',
            'projectId' => 'string',
            'enterpriseProjectId' => 'string',
            'createdAt' => 'string',
            'updatedAt' => 'string',
            'cloudResources' => '\HuaweiCloud\SDK\SecMaster\V1\Model\HwcVpcCloudResource[]',
            'tags' => '\HuaweiCloud\SDK\SecMaster\V1\Model\Tag[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  VPC对应的唯一标识
    * name  VPC对应的名称
    * description  VPC的描述信息
    * protectedStatus  CFW开启或安全组规则配置状态：OPEN | CLOSE
    * cidr  VPC下可用子网的范围 取值范围： 10.0.0.0/8~10.255.255.240/28 172.16.0.0/12 ~ 172.31.255.240/28 192.168.0.0/16 ~ 192.168.255.240/28 不指定cidr时，默认值为“” 约束：必须是ipv4 cidr格式，例如:192.168.0.0/16
    * extendCidrs  VPC的扩展网段 约束：目前只支持ipv4
    * status  VPC对应的状态 取值范围： PENDING：创建中 ACTIVE：创建成功
    * projectId  VPC所属的项目ID
    * enterpriseProjectId  VPC所属的企业项目ID。 取值范围：最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。
    * createdAt  VPC创建时间 取值范围：UTC时间格式，yyyy-MM-ddTHH:mm:ss
    * updatedAt  VPC更新时间 取值范围：UTC时间格式，yyyy-MM-ddTHH:mm:ss
    * cloudResources  VPC关联资产类型和数量 取值范围：目前只返回VPC关联的routetable和virsubnet。virsubnet数量为ipv4和ipv6子网总数。
    * tags  VPC的标签信息，详情参见Tag对象 取值范围：0-10个标签键值对
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'protectedStatus' => null,
        'cidr' => null,
        'extendCidrs' => null,
        'status' => null,
        'projectId' => null,
        'enterpriseProjectId' => null,
        'createdAt' => null,
        'updatedAt' => null,
        'cloudResources' => null,
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
    * id  VPC对应的唯一标识
    * name  VPC对应的名称
    * description  VPC的描述信息
    * protectedStatus  CFW开启或安全组规则配置状态：OPEN | CLOSE
    * cidr  VPC下可用子网的范围 取值范围： 10.0.0.0/8~10.255.255.240/28 172.16.0.0/12 ~ 172.31.255.240/28 192.168.0.0/16 ~ 192.168.255.240/28 不指定cidr时，默认值为“” 约束：必须是ipv4 cidr格式，例如:192.168.0.0/16
    * extendCidrs  VPC的扩展网段 约束：目前只支持ipv4
    * status  VPC对应的状态 取值范围： PENDING：创建中 ACTIVE：创建成功
    * projectId  VPC所属的项目ID
    * enterpriseProjectId  VPC所属的企业项目ID。 取值范围：最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。
    * createdAt  VPC创建时间 取值范围：UTC时间格式，yyyy-MM-ddTHH:mm:ss
    * updatedAt  VPC更新时间 取值范围：UTC时间格式，yyyy-MM-ddTHH:mm:ss
    * cloudResources  VPC关联资产类型和数量 取值范围：目前只返回VPC关联的routetable和virsubnet。virsubnet数量为ipv4和ipv6子网总数。
    * tags  VPC的标签信息，详情参见Tag对象 取值范围：0-10个标签键值对
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'protectedStatus' => 'protected_status',
            'cidr' => 'cidr',
            'extendCidrs' => 'extend_cidrs',
            'status' => 'status',
            'projectId' => 'project_id',
            'enterpriseProjectId' => 'enterprise_project_id',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'cloudResources' => 'cloud_resources',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  VPC对应的唯一标识
    * name  VPC对应的名称
    * description  VPC的描述信息
    * protectedStatus  CFW开启或安全组规则配置状态：OPEN | CLOSE
    * cidr  VPC下可用子网的范围 取值范围： 10.0.0.0/8~10.255.255.240/28 172.16.0.0/12 ~ 172.31.255.240/28 192.168.0.0/16 ~ 192.168.255.240/28 不指定cidr时，默认值为“” 约束：必须是ipv4 cidr格式，例如:192.168.0.0/16
    * extendCidrs  VPC的扩展网段 约束：目前只支持ipv4
    * status  VPC对应的状态 取值范围： PENDING：创建中 ACTIVE：创建成功
    * projectId  VPC所属的项目ID
    * enterpriseProjectId  VPC所属的企业项目ID。 取值范围：最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。
    * createdAt  VPC创建时间 取值范围：UTC时间格式，yyyy-MM-ddTHH:mm:ss
    * updatedAt  VPC更新时间 取值范围：UTC时间格式，yyyy-MM-ddTHH:mm:ss
    * cloudResources  VPC关联资产类型和数量 取值范围：目前只返回VPC关联的routetable和virsubnet。virsubnet数量为ipv4和ipv6子网总数。
    * tags  VPC的标签信息，详情参见Tag对象 取值范围：0-10个标签键值对
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'protectedStatus' => 'setProtectedStatus',
            'cidr' => 'setCidr',
            'extendCidrs' => 'setExtendCidrs',
            'status' => 'setStatus',
            'projectId' => 'setProjectId',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'cloudResources' => 'setCloudResources',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  VPC对应的唯一标识
    * name  VPC对应的名称
    * description  VPC的描述信息
    * protectedStatus  CFW开启或安全组规则配置状态：OPEN | CLOSE
    * cidr  VPC下可用子网的范围 取值范围： 10.0.0.0/8~10.255.255.240/28 172.16.0.0/12 ~ 172.31.255.240/28 192.168.0.0/16 ~ 192.168.255.240/28 不指定cidr时，默认值为“” 约束：必须是ipv4 cidr格式，例如:192.168.0.0/16
    * extendCidrs  VPC的扩展网段 约束：目前只支持ipv4
    * status  VPC对应的状态 取值范围： PENDING：创建中 ACTIVE：创建成功
    * projectId  VPC所属的项目ID
    * enterpriseProjectId  VPC所属的企业项目ID。 取值范围：最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。
    * createdAt  VPC创建时间 取值范围：UTC时间格式，yyyy-MM-ddTHH:mm:ss
    * updatedAt  VPC更新时间 取值范围：UTC时间格式，yyyy-MM-ddTHH:mm:ss
    * cloudResources  VPC关联资产类型和数量 取值范围：目前只返回VPC关联的routetable和virsubnet。virsubnet数量为ipv4和ipv6子网总数。
    * tags  VPC的标签信息，详情参见Tag对象 取值范围：0-10个标签键值对
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'protectedStatus' => 'getProtectedStatus',
            'cidr' => 'getCidr',
            'extendCidrs' => 'getExtendCidrs',
            'status' => 'getStatus',
            'projectId' => 'getProjectId',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'cloudResources' => 'getCloudResources',
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
        $this->container['protectedStatus'] = isset($data['protectedStatus']) ? $data['protectedStatus'] : null;
        $this->container['cidr'] = isset($data['cidr']) ? $data['cidr'] : null;
        $this->container['extendCidrs'] = isset($data['extendCidrs']) ? $data['extendCidrs'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['cloudResources'] = isset($data['cloudResources']) ? $data['cloudResources'] : null;
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
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
            if ((mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['id']) < 32)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['protectedStatus'] === null) {
            $invalidProperties[] = "'protectedStatus' can't be null";
        }
            if ((mb_strlen($this->container['protectedStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'protectedStatus', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['protectedStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'protectedStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cidr']) && (mb_strlen($this->container['cidr']) > 128)) {
                $invalidProperties[] = "invalid value for 'cidr', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['cidr']) && (mb_strlen($this->container['cidr']) < 0)) {
                $invalidProperties[] = "invalid value for 'cidr', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
            if ((mb_strlen($this->container['status']) > 32)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['status']) < 0)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if ((mb_strlen($this->container['projectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
            if ((mb_strlen($this->container['createdAt']) > 32)) {
                $invalidProperties[] = "invalid value for 'createdAt', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['createdAt']) < 0)) {
                $invalidProperties[] = "invalid value for 'createdAt', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
        }
            if ((mb_strlen($this->container['updatedAt']) > 32)) {
                $invalidProperties[] = "invalid value for 'updatedAt', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['updatedAt']) < 0)) {
                $invalidProperties[] = "invalid value for 'updatedAt', the character length must be bigger than or equal to 0.";
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
    *  VPC对应的唯一标识
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
    * @param string $id VPC对应的唯一标识
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
    *  VPC对应的名称
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
    * @param string $name VPC对应的名称
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
    *  VPC的描述信息
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
    * @param string|null $description VPC的描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets protectedStatus
    *  CFW开启或安全组规则配置状态：OPEN | CLOSE
    *
    * @return string
    */
    public function getProtectedStatus()
    {
        return $this->container['protectedStatus'];
    }

    /**
    * Sets protectedStatus
    *
    * @param string $protectedStatus CFW开启或安全组规则配置状态：OPEN | CLOSE
    *
    * @return $this
    */
    public function setProtectedStatus($protectedStatus)
    {
        $this->container['protectedStatus'] = $protectedStatus;
        return $this;
    }

    /**
    * Gets cidr
    *  VPC下可用子网的范围 取值范围： 10.0.0.0/8~10.255.255.240/28 172.16.0.0/12 ~ 172.31.255.240/28 192.168.0.0/16 ~ 192.168.255.240/28 不指定cidr时，默认值为“” 约束：必须是ipv4 cidr格式，例如:192.168.0.0/16
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
    * @param string|null $cidr VPC下可用子网的范围 取值范围： 10.0.0.0/8~10.255.255.240/28 172.16.0.0/12 ~ 172.31.255.240/28 192.168.0.0/16 ~ 192.168.255.240/28 不指定cidr时，默认值为“” 约束：必须是ipv4 cidr格式，例如:192.168.0.0/16
    *
    * @return $this
    */
    public function setCidr($cidr)
    {
        $this->container['cidr'] = $cidr;
        return $this;
    }

    /**
    * Gets extendCidrs
    *  VPC的扩展网段 约束：目前只支持ipv4
    *
    * @return string[]|null
    */
    public function getExtendCidrs()
    {
        return $this->container['extendCidrs'];
    }

    /**
    * Sets extendCidrs
    *
    * @param string[]|null $extendCidrs VPC的扩展网段 约束：目前只支持ipv4
    *
    * @return $this
    */
    public function setExtendCidrs($extendCidrs)
    {
        $this->container['extendCidrs'] = $extendCidrs;
        return $this;
    }

    /**
    * Gets status
    *  VPC对应的状态 取值范围： PENDING：创建中 ACTIVE：创建成功
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status VPC对应的状态 取值范围： PENDING：创建中 ACTIVE：创建成功
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets projectId
    *  VPC所属的项目ID
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId VPC所属的项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  VPC所属的企业项目ID。 取值范围：最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。
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
    * @param string|null $enterpriseProjectId VPC所属的企业项目ID。 取值范围：最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets createdAt
    *  VPC创建时间 取值范围：UTC时间格式，yyyy-MM-ddTHH:mm:ss
    *
    * @return string
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string $createdAt VPC创建时间 取值范围：UTC时间格式，yyyy-MM-ddTHH:mm:ss
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
    *  VPC更新时间 取值范围：UTC时间格式，yyyy-MM-ddTHH:mm:ss
    *
    * @return string
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string $updatedAt VPC更新时间 取值范围：UTC时间格式，yyyy-MM-ddTHH:mm:ss
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets cloudResources
    *  VPC关联资产类型和数量 取值范围：目前只返回VPC关联的routetable和virsubnet。virsubnet数量为ipv4和ipv6子网总数。
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\HwcVpcCloudResource[]|null
    */
    public function getCloudResources()
    {
        return $this->container['cloudResources'];
    }

    /**
    * Sets cloudResources
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\HwcVpcCloudResource[]|null $cloudResources VPC关联资产类型和数量 取值范围：目前只返回VPC关联的routetable和virsubnet。virsubnet数量为ipv4和ipv6子网总数。
    *
    * @return $this
    */
    public function setCloudResources($cloudResources)
    {
        $this->container['cloudResources'] = $cloudResources;
        return $this;
    }

    /**
    * Gets tags
    *  VPC的标签信息，详情参见Tag对象 取值范围：0-10个标签键值对
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\Tag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\Tag[]|null $tags VPC的标签信息，详情参见Tag对象 取值范围：0-10个标签键值对
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

