<?php

namespace HuaweiCloud\SDK\Vpc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListFirewallDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListFirewallDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  功能说明：ACL唯一标识 取值范围：合法UUID的字符串
    * name  功能说明：ACL名称 取值范围：0-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * description  功能说明：ACL描述信息 取值范围：0-255个字符 约束：不能包含“<”和“>”。
    * projectId  功能说明：资源所属项目ID
    * createdAt  功能说明：ACL创建时间 取值范围：UTC时间格式：yyyy-MM-ddTHH:mm:ss；系统自动生成
    * updatedAt  功能描述：ACL最近一次更新资源的时间 取值范围：UTC时间格式：yyyy-MM-ddTHH:mm:ss；系统自动生成
    * adminStateUp  功能说明：ACL是否开启 取值范围：true表示ACL开启；false表示ACL关闭
    * status  功能说明：网络ACL的状态
    * enterpriseProjectId  功能说明：ACL企业项目ID。 取值范围：最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。
    * tags  功能描述：ACL资源标签
    * associations  功能说明：ACL绑定的子网列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'description' => 'string',
            'projectId' => 'string',
            'createdAt' => 'string',
            'updatedAt' => 'string',
            'adminStateUp' => 'bool',
            'status' => 'string',
            'enterpriseProjectId' => 'string',
            'tags' => '\HuaweiCloud\SDK\Vpc\V3\Model\ResourceTag[]',
            'associations' => '\HuaweiCloud\SDK\Vpc\V3\Model\FirewallAssociation[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  功能说明：ACL唯一标识 取值范围：合法UUID的字符串
    * name  功能说明：ACL名称 取值范围：0-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * description  功能说明：ACL描述信息 取值范围：0-255个字符 约束：不能包含“<”和“>”。
    * projectId  功能说明：资源所属项目ID
    * createdAt  功能说明：ACL创建时间 取值范围：UTC时间格式：yyyy-MM-ddTHH:mm:ss；系统自动生成
    * updatedAt  功能描述：ACL最近一次更新资源的时间 取值范围：UTC时间格式：yyyy-MM-ddTHH:mm:ss；系统自动生成
    * adminStateUp  功能说明：ACL是否开启 取值范围：true表示ACL开启；false表示ACL关闭
    * status  功能说明：网络ACL的状态
    * enterpriseProjectId  功能说明：ACL企业项目ID。 取值范围：最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。
    * tags  功能描述：ACL资源标签
    * associations  功能说明：ACL绑定的子网列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'projectId' => null,
        'createdAt' => null,
        'updatedAt' => null,
        'adminStateUp' => null,
        'status' => null,
        'enterpriseProjectId' => null,
        'tags' => null,
        'associations' => null
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
    * id  功能说明：ACL唯一标识 取值范围：合法UUID的字符串
    * name  功能说明：ACL名称 取值范围：0-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * description  功能说明：ACL描述信息 取值范围：0-255个字符 约束：不能包含“<”和“>”。
    * projectId  功能说明：资源所属项目ID
    * createdAt  功能说明：ACL创建时间 取值范围：UTC时间格式：yyyy-MM-ddTHH:mm:ss；系统自动生成
    * updatedAt  功能描述：ACL最近一次更新资源的时间 取值范围：UTC时间格式：yyyy-MM-ddTHH:mm:ss；系统自动生成
    * adminStateUp  功能说明：ACL是否开启 取值范围：true表示ACL开启；false表示ACL关闭
    * status  功能说明：网络ACL的状态
    * enterpriseProjectId  功能说明：ACL企业项目ID。 取值范围：最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。
    * tags  功能描述：ACL资源标签
    * associations  功能说明：ACL绑定的子网列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'projectId' => 'project_id',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'adminStateUp' => 'admin_state_up',
            'status' => 'status',
            'enterpriseProjectId' => 'enterprise_project_id',
            'tags' => 'tags',
            'associations' => 'associations'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  功能说明：ACL唯一标识 取值范围：合法UUID的字符串
    * name  功能说明：ACL名称 取值范围：0-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * description  功能说明：ACL描述信息 取值范围：0-255个字符 约束：不能包含“<”和“>”。
    * projectId  功能说明：资源所属项目ID
    * createdAt  功能说明：ACL创建时间 取值范围：UTC时间格式：yyyy-MM-ddTHH:mm:ss；系统自动生成
    * updatedAt  功能描述：ACL最近一次更新资源的时间 取值范围：UTC时间格式：yyyy-MM-ddTHH:mm:ss；系统自动生成
    * adminStateUp  功能说明：ACL是否开启 取值范围：true表示ACL开启；false表示ACL关闭
    * status  功能说明：网络ACL的状态
    * enterpriseProjectId  功能说明：ACL企业项目ID。 取值范围：最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。
    * tags  功能描述：ACL资源标签
    * associations  功能说明：ACL绑定的子网列表
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'projectId' => 'setProjectId',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'adminStateUp' => 'setAdminStateUp',
            'status' => 'setStatus',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'tags' => 'setTags',
            'associations' => 'setAssociations'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  功能说明：ACL唯一标识 取值范围：合法UUID的字符串
    * name  功能说明：ACL名称 取值范围：0-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * description  功能说明：ACL描述信息 取值范围：0-255个字符 约束：不能包含“<”和“>”。
    * projectId  功能说明：资源所属项目ID
    * createdAt  功能说明：ACL创建时间 取值范围：UTC时间格式：yyyy-MM-ddTHH:mm:ss；系统自动生成
    * updatedAt  功能描述：ACL最近一次更新资源的时间 取值范围：UTC时间格式：yyyy-MM-ddTHH:mm:ss；系统自动生成
    * adminStateUp  功能说明：ACL是否开启 取值范围：true表示ACL开启；false表示ACL关闭
    * status  功能说明：网络ACL的状态
    * enterpriseProjectId  功能说明：ACL企业项目ID。 取值范围：最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。
    * tags  功能描述：ACL资源标签
    * associations  功能说明：ACL绑定的子网列表
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'projectId' => 'getProjectId',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'adminStateUp' => 'getAdminStateUp',
            'status' => 'getStatus',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'tags' => 'getTags',
            'associations' => 'getAssociations'
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['associations'] = isset($data['associations']) ? $data['associations'] : null;
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
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
        }
        if ($this->container['adminStateUp'] === null) {
            $invalidProperties[] = "'adminStateUp' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['enterpriseProjectId'] === null) {
            $invalidProperties[] = "'enterpriseProjectId' can't be null";
        }
        if ($this->container['tags'] === null) {
            $invalidProperties[] = "'tags' can't be null";
        }
        if ($this->container['associations'] === null) {
            $invalidProperties[] = "'associations' can't be null";
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
    *  功能说明：ACL唯一标识 取值范围：合法UUID的字符串
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
    * @param string $id 功能说明：ACL唯一标识 取值范围：合法UUID的字符串
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
    *  功能说明：ACL名称 取值范围：0-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
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
    * @param string $name 功能说明：ACL名称 取值范围：0-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
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
    *  功能说明：ACL描述信息 取值范围：0-255个字符 约束：不能包含“<”和“>”。
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
    * @param string $description 功能说明：ACL描述信息 取值范围：0-255个字符 约束：不能包含“<”和“>”。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets projectId
    *  功能说明：资源所属项目ID
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
    * @param string $projectId 功能说明：资源所属项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets createdAt
    *  功能说明：ACL创建时间 取值范围：UTC时间格式：yyyy-MM-ddTHH:mm:ss；系统自动生成
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
    * @param string $createdAt 功能说明：ACL创建时间 取值范围：UTC时间格式：yyyy-MM-ddTHH:mm:ss；系统自动生成
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
    *  功能描述：ACL最近一次更新资源的时间 取值范围：UTC时间格式：yyyy-MM-ddTHH:mm:ss；系统自动生成
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
    * @param string $updatedAt 功能描述：ACL最近一次更新资源的时间 取值范围：UTC时间格式：yyyy-MM-ddTHH:mm:ss；系统自动生成
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets adminStateUp
    *  功能说明：ACL是否开启 取值范围：true表示ACL开启；false表示ACL关闭
    *
    * @return bool
    */
    public function getAdminStateUp()
    {
        return $this->container['adminStateUp'];
    }

    /**
    * Sets adminStateUp
    *
    * @param bool $adminStateUp 功能说明：ACL是否开启 取值范围：true表示ACL开启；false表示ACL关闭
    *
    * @return $this
    */
    public function setAdminStateUp($adminStateUp)
    {
        $this->container['adminStateUp'] = $adminStateUp;
        return $this;
    }

    /**
    * Gets status
    *  功能说明：网络ACL的状态
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
    * @param string $status 功能说明：网络ACL的状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  功能说明：ACL企业项目ID。 取值范围：最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。
    *
    * @return string
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string $enterpriseProjectId 功能说明：ACL企业项目ID。 取值范围：最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets tags
    *  功能描述：ACL资源标签
    *
    * @return \HuaweiCloud\SDK\Vpc\V3\Model\ResourceTag[]
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Vpc\V3\Model\ResourceTag[] $tags 功能描述：ACL资源标签
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets associations
    *  功能说明：ACL绑定的子网列表
    *
    * @return \HuaweiCloud\SDK\Vpc\V3\Model\FirewallAssociation[]
    */
    public function getAssociations()
    {
        return $this->container['associations'];
    }

    /**
    * Sets associations
    *
    * @param \HuaweiCloud\SDK\Vpc\V3\Model\FirewallAssociation[] $associations 功能说明：ACL绑定的子网列表
    *
    * @return $this
    */
    public function setAssociations($associations)
    {
        $this->container['associations'] = $associations;
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

