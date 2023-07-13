<?php

namespace HuaweiCloud\SDK\Ga\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AcceleratorDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AcceleratorDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  全球加速器ID。
    * name  全球加速器名称，取值范围：1~64个字符之间，只能由数字、字母、中划线和中文组成。
    * description  全球加速器描述信息，取值范围：0~255个字符之间，禁止输入字符：<>。
    * status  status
    * ipSets  全球加速器IP列表。
    * createdAt  创建时间。
    * updatedAt  更新时间。
    * domainId  租户ID。
    * enterpriseProjectId  租户的企业项目ID。
    * flavorId  规格ID。
    * frozenInfo  frozenInfo
    * tags  标签列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'description' => 'string',
            'status' => '\HuaweiCloud\SDK\Ga\V1\Model\ConfigStatus',
            'ipSets' => '\HuaweiCloud\SDK\Ga\V1\Model\AccelerateIp[]',
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime',
            'domainId' => 'string',
            'enterpriseProjectId' => 'string',
            'flavorId' => 'string',
            'frozenInfo' => '\HuaweiCloud\SDK\Ga\V1\Model\FrozenInfo',
            'tags' => '\HuaweiCloud\SDK\Ga\V1\Model\ResourceTag[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  全球加速器ID。
    * name  全球加速器名称，取值范围：1~64个字符之间，只能由数字、字母、中划线和中文组成。
    * description  全球加速器描述信息，取值范围：0~255个字符之间，禁止输入字符：<>。
    * status  status
    * ipSets  全球加速器IP列表。
    * createdAt  创建时间。
    * updatedAt  更新时间。
    * domainId  租户ID。
    * enterpriseProjectId  租户的企业项目ID。
    * flavorId  规格ID。
    * frozenInfo  frozenInfo
    * tags  标签列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'status' => null,
        'ipSets' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'domainId' => null,
        'enterpriseProjectId' => null,
        'flavorId' => null,
        'frozenInfo' => null,
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
    * id  全球加速器ID。
    * name  全球加速器名称，取值范围：1~64个字符之间，只能由数字、字母、中划线和中文组成。
    * description  全球加速器描述信息，取值范围：0~255个字符之间，禁止输入字符：<>。
    * status  status
    * ipSets  全球加速器IP列表。
    * createdAt  创建时间。
    * updatedAt  更新时间。
    * domainId  租户ID。
    * enterpriseProjectId  租户的企业项目ID。
    * flavorId  规格ID。
    * frozenInfo  frozenInfo
    * tags  标签列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'status' => 'status',
            'ipSets' => 'ip_sets',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'domainId' => 'domain_id',
            'enterpriseProjectId' => 'enterprise_project_id',
            'flavorId' => 'flavor_id',
            'frozenInfo' => 'frozen_info',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  全球加速器ID。
    * name  全球加速器名称，取值范围：1~64个字符之间，只能由数字、字母、中划线和中文组成。
    * description  全球加速器描述信息，取值范围：0~255个字符之间，禁止输入字符：<>。
    * status  status
    * ipSets  全球加速器IP列表。
    * createdAt  创建时间。
    * updatedAt  更新时间。
    * domainId  租户ID。
    * enterpriseProjectId  租户的企业项目ID。
    * flavorId  规格ID。
    * frozenInfo  frozenInfo
    * tags  标签列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'status' => 'setStatus',
            'ipSets' => 'setIpSets',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'domainId' => 'setDomainId',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'flavorId' => 'setFlavorId',
            'frozenInfo' => 'setFrozenInfo',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  全球加速器ID。
    * name  全球加速器名称，取值范围：1~64个字符之间，只能由数字、字母、中划线和中文组成。
    * description  全球加速器描述信息，取值范围：0~255个字符之间，禁止输入字符：<>。
    * status  status
    * ipSets  全球加速器IP列表。
    * createdAt  创建时间。
    * updatedAt  更新时间。
    * domainId  租户ID。
    * enterpriseProjectId  租户的企业项目ID。
    * flavorId  规格ID。
    * frozenInfo  frozenInfo
    * tags  标签列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'status' => 'getStatus',
            'ipSets' => 'getIpSets',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'domainId' => 'getDomainId',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'flavorId' => 'getFlavorId',
            'frozenInfo' => 'getFrozenInfo',
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['ipSets'] = isset($data['ipSets']) ? $data['ipSets'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['flavorId'] = isset($data['flavorId']) ? $data['flavorId'] : null;
        $this->container['frozenInfo'] = isset($data['frozenInfo']) ? $data['frozenInfo'] : null;
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
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && !preg_match("/^[一-龥A-Za-z0-9-]*$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[一-龥A-Za-z0-9-]*$/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['flavorId']) && !preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['flavorId'])) {
                $invalidProperties[] = "invalid value for 'flavorId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
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
    *  全球加速器ID。
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
    * @param string|null $id 全球加速器ID。
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
    *  全球加速器名称，取值范围：1~64个字符之间，只能由数字、字母、中划线和中文组成。
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
    * @param string|null $name 全球加速器名称，取值范围：1~64个字符之间，只能由数字、字母、中划线和中文组成。
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
    *  全球加速器描述信息，取值范围：0~255个字符之间，禁止输入字符：<>。
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
    * @param string|null $description 全球加速器描述信息，取值范围：0~255个字符之间，禁止输入字符：<>。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets status
    *  status
    *
    * @return \HuaweiCloud\SDK\Ga\V1\Model\ConfigStatus|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param \HuaweiCloud\SDK\Ga\V1\Model\ConfigStatus|null $status status
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets ipSets
    *  全球加速器IP列表。
    *
    * @return \HuaweiCloud\SDK\Ga\V1\Model\AccelerateIp[]|null
    */
    public function getIpSets()
    {
        return $this->container['ipSets'];
    }

    /**
    * Sets ipSets
    *
    * @param \HuaweiCloud\SDK\Ga\V1\Model\AccelerateIp[]|null $ipSets 全球加速器IP列表。
    *
    * @return $this
    */
    public function setIpSets($ipSets)
    {
        $this->container['ipSets'] = $ipSets;
        return $this;
    }

    /**
    * Gets createdAt
    *  创建时间。
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
    * @param \DateTime|null $createdAt 创建时间。
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
    *  更新时间。
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
    * @param \DateTime|null $updatedAt 更新时间。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets domainId
    *  租户ID。
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
    * @param string|null $domainId 租户ID。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  租户的企业项目ID。
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
    * @param string|null $enterpriseProjectId 租户的企业项目ID。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets flavorId
    *  规格ID。
    *
    * @return string|null
    */
    public function getFlavorId()
    {
        return $this->container['flavorId'];
    }

    /**
    * Sets flavorId
    *
    * @param string|null $flavorId 规格ID。
    *
    * @return $this
    */
    public function setFlavorId($flavorId)
    {
        $this->container['flavorId'] = $flavorId;
        return $this;
    }

    /**
    * Gets frozenInfo
    *  frozenInfo
    *
    * @return \HuaweiCloud\SDK\Ga\V1\Model\FrozenInfo|null
    */
    public function getFrozenInfo()
    {
        return $this->container['frozenInfo'];
    }

    /**
    * Sets frozenInfo
    *
    * @param \HuaweiCloud\SDK\Ga\V1\Model\FrozenInfo|null $frozenInfo frozenInfo
    *
    * @return $this
    */
    public function setFrozenInfo($frozenInfo)
    {
        $this->container['frozenInfo'] = $frozenInfo;
        return $this;
    }

    /**
    * Gets tags
    *  标签列表。
    *
    * @return \HuaweiCloud\SDK\Ga\V1\Model\ResourceTag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Ga\V1\Model\ResourceTag[]|null $tags 标签列表。
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

