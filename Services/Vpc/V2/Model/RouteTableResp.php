<?php

namespace HuaweiCloud\SDK\Vpc\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RouteTableResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RouteTableResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  功能说明：路由表ID  取值范围：标准UUID
    * name  功能说明：路由表名称  取值范围：0-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * default  功能说明：是否为默认路由表  取值范围：true表示默认路由表；false表示自定义路由表
    * routes  功能说明：路由对象，参见route字段说明。  约束：每个路由表最大关联200条路由
    * subnets  功能说明：路由表所关联的子网  约束：只能关联路由表所属VPC下的子网
    * tenantId  项目ID
    * vpcId  路由表所在的虚拟私有云ID
    * description  功能说明：路由表描述信息  取值范围：0-255个字符，不能包含“<”和“>”
    * createdAt  功能说明：资源创建UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    * updatedAt  功能说明：资源更新UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'default' => 'bool',
            'routes' => '\HuaweiCloud\SDK\Vpc\V2\Model\RouteTableRoute[]',
            'subnets' => '\HuaweiCloud\SDK\Vpc\V2\Model\SubnetList[]',
            'tenantId' => 'string',
            'vpcId' => 'string',
            'description' => 'string',
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  功能说明：路由表ID  取值范围：标准UUID
    * name  功能说明：路由表名称  取值范围：0-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * default  功能说明：是否为默认路由表  取值范围：true表示默认路由表；false表示自定义路由表
    * routes  功能说明：路由对象，参见route字段说明。  约束：每个路由表最大关联200条路由
    * subnets  功能说明：路由表所关联的子网  约束：只能关联路由表所属VPC下的子网
    * tenantId  项目ID
    * vpcId  路由表所在的虚拟私有云ID
    * description  功能说明：路由表描述信息  取值范围：0-255个字符，不能包含“<”和“>”
    * createdAt  功能说明：资源创建UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    * updatedAt  功能说明：资源更新UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'default' => null,
        'routes' => null,
        'subnets' => null,
        'tenantId' => null,
        'vpcId' => null,
        'description' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time'
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
    * id  功能说明：路由表ID  取值范围：标准UUID
    * name  功能说明：路由表名称  取值范围：0-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * default  功能说明：是否为默认路由表  取值范围：true表示默认路由表；false表示自定义路由表
    * routes  功能说明：路由对象，参见route字段说明。  约束：每个路由表最大关联200条路由
    * subnets  功能说明：路由表所关联的子网  约束：只能关联路由表所属VPC下的子网
    * tenantId  项目ID
    * vpcId  路由表所在的虚拟私有云ID
    * description  功能说明：路由表描述信息  取值范围：0-255个字符，不能包含“<”和“>”
    * createdAt  功能说明：资源创建UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    * updatedAt  功能说明：资源更新UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'default' => 'default',
            'routes' => 'routes',
            'subnets' => 'subnets',
            'tenantId' => 'tenant_id',
            'vpcId' => 'vpc_id',
            'description' => 'description',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  功能说明：路由表ID  取值范围：标准UUID
    * name  功能说明：路由表名称  取值范围：0-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * default  功能说明：是否为默认路由表  取值范围：true表示默认路由表；false表示自定义路由表
    * routes  功能说明：路由对象，参见route字段说明。  约束：每个路由表最大关联200条路由
    * subnets  功能说明：路由表所关联的子网  约束：只能关联路由表所属VPC下的子网
    * tenantId  项目ID
    * vpcId  路由表所在的虚拟私有云ID
    * description  功能说明：路由表描述信息  取值范围：0-255个字符，不能包含“<”和“>”
    * createdAt  功能说明：资源创建UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    * updatedAt  功能说明：资源更新UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'default' => 'setDefault',
            'routes' => 'setRoutes',
            'subnets' => 'setSubnets',
            'tenantId' => 'setTenantId',
            'vpcId' => 'setVpcId',
            'description' => 'setDescription',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  功能说明：路由表ID  取值范围：标准UUID
    * name  功能说明：路由表名称  取值范围：0-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * default  功能说明：是否为默认路由表  取值范围：true表示默认路由表；false表示自定义路由表
    * routes  功能说明：路由对象，参见route字段说明。  约束：每个路由表最大关联200条路由
    * subnets  功能说明：路由表所关联的子网  约束：只能关联路由表所属VPC下的子网
    * tenantId  项目ID
    * vpcId  路由表所在的虚拟私有云ID
    * description  功能说明：路由表描述信息  取值范围：0-255个字符，不能包含“<”和“>”
    * createdAt  功能说明：资源创建UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    * updatedAt  功能说明：资源更新UTC时间 格式：yyyy-MM-ddTHH:mm:ss
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'default' => 'getDefault',
            'routes' => 'getRoutes',
            'subnets' => 'getSubnets',
            'tenantId' => 'getTenantId',
            'vpcId' => 'getVpcId',
            'description' => 'getDescription',
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
        $this->container['default'] = isset($data['default']) ? $data['default'] : null;
        $this->container['routes'] = isset($data['routes']) ? $data['routes'] : null;
        $this->container['subnets'] = isset($data['subnets']) ? $data['subnets'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
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
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
            if (!preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['default'] === null) {
            $invalidProperties[] = "'default' can't be null";
        }
        if ($this->container['routes'] === null) {
            $invalidProperties[] = "'routes' can't be null";
        }
        if ($this->container['subnets'] === null) {
            $invalidProperties[] = "'subnets' can't be null";
        }
        if ($this->container['tenantId'] === null) {
            $invalidProperties[] = "'tenantId' can't be null";
        }
            if (!preg_match("/[0-9a-fA-F]{32}/", $this->container['tenantId'])) {
                $invalidProperties[] = "invalid value for 'tenantId', must be conform to the pattern /[0-9a-fA-F]{32}/.";
            }
        if ($this->container['vpcId'] === null) {
            $invalidProperties[] = "'vpcId' can't be null";
        }
            if (!preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['vpcId'])) {
                $invalidProperties[] = "invalid value for 'vpcId', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
            }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
            if ((mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
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
    *  功能说明：路由表ID  取值范围：标准UUID
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
    * @param string $id 功能说明：路由表ID  取值范围：标准UUID
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
    *  功能说明：路由表名称  取值范围：0-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
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
    * @param string $name 功能说明：路由表名称  取值范围：0-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets default
    *  功能说明：是否为默认路由表  取值范围：true表示默认路由表；false表示自定义路由表
    *
    * @return bool
    */
    public function getDefault()
    {
        return $this->container['default'];
    }

    /**
    * Sets default
    *
    * @param bool $default 功能说明：是否为默认路由表  取值范围：true表示默认路由表；false表示自定义路由表
    *
    * @return $this
    */
    public function setDefault($default)
    {
        $this->container['default'] = $default;
        return $this;
    }

    /**
    * Gets routes
    *  功能说明：路由对象，参见route字段说明。  约束：每个路由表最大关联200条路由
    *
    * @return \HuaweiCloud\SDK\Vpc\V2\Model\RouteTableRoute[]
    */
    public function getRoutes()
    {
        return $this->container['routes'];
    }

    /**
    * Sets routes
    *
    * @param \HuaweiCloud\SDK\Vpc\V2\Model\RouteTableRoute[] $routes 功能说明：路由对象，参见route字段说明。  约束：每个路由表最大关联200条路由
    *
    * @return $this
    */
    public function setRoutes($routes)
    {
        $this->container['routes'] = $routes;
        return $this;
    }

    /**
    * Gets subnets
    *  功能说明：路由表所关联的子网  约束：只能关联路由表所属VPC下的子网
    *
    * @return \HuaweiCloud\SDK\Vpc\V2\Model\SubnetList[]
    */
    public function getSubnets()
    {
        return $this->container['subnets'];
    }

    /**
    * Sets subnets
    *
    * @param \HuaweiCloud\SDK\Vpc\V2\Model\SubnetList[] $subnets 功能说明：路由表所关联的子网  约束：只能关联路由表所属VPC下的子网
    *
    * @return $this
    */
    public function setSubnets($subnets)
    {
        $this->container['subnets'] = $subnets;
        return $this;
    }

    /**
    * Gets tenantId
    *  项目ID
    *
    * @return string
    */
    public function getTenantId()
    {
        return $this->container['tenantId'];
    }

    /**
    * Sets tenantId
    *
    * @param string $tenantId 项目ID
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets vpcId
    *  路由表所在的虚拟私有云ID
    *
    * @return string
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string $vpcId 路由表所在的虚拟私有云ID
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets description
    *  功能说明：路由表描述信息  取值范围：0-255个字符，不能包含“<”和“>”
    *
    * @return string
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string $description 功能说明：路由表描述信息  取值范围：0-255个字符，不能包含“<”和“>”
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
    *  功能说明：资源创建UTC时间 格式：yyyy-MM-ddTHH:mm:ss
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
    * @param \DateTime $createdAt 功能说明：资源创建UTC时间 格式：yyyy-MM-ddTHH:mm:ss
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
    *  功能说明：资源更新UTC时间 格式：yyyy-MM-ddTHH:mm:ss
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
    * @param \DateTime $updatedAt 功能说明：资源更新UTC时间 格式：yyyy-MM-ddTHH:mm:ss
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

