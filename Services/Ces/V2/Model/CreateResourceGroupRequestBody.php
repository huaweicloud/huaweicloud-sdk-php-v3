<?php

namespace HuaweiCloud\SDK\Ces\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateResourceGroupRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateResourceGroupRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * groupName  资源分组的名称，只能为字母、数字、汉字、-、_，最大长度为128
    * enterpriseProjectId  资源分组归属企业项目ID
    * type  资源分组添加资源方式，取值只能为EPS（同步企业项目）,TAG（标签动态匹配）,不传为手动添加
    * tags  标签动态匹配时的关联标签,type为TAG时必传
    * associationEpIds  该资源分组内包含的资源来源的企业项目ID，type为EPS时必传
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'groupName' => 'string',
            'enterpriseProjectId' => 'string',
            'type' => 'string',
            'tags' => '\HuaweiCloud\SDK\Ces\V2\Model\ResourceGroupTagRelation[]',
            'associationEpIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * groupName  资源分组的名称，只能为字母、数字、汉字、-、_，最大长度为128
    * enterpriseProjectId  资源分组归属企业项目ID
    * type  资源分组添加资源方式，取值只能为EPS（同步企业项目）,TAG（标签动态匹配）,不传为手动添加
    * tags  标签动态匹配时的关联标签,type为TAG时必传
    * associationEpIds  该资源分组内包含的资源来源的企业项目ID，type为EPS时必传
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'groupName' => null,
        'enterpriseProjectId' => null,
        'type' => null,
        'tags' => null,
        'associationEpIds' => null
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
    * groupName  资源分组的名称，只能为字母、数字、汉字、-、_，最大长度为128
    * enterpriseProjectId  资源分组归属企业项目ID
    * type  资源分组添加资源方式，取值只能为EPS（同步企业项目）,TAG（标签动态匹配）,不传为手动添加
    * tags  标签动态匹配时的关联标签,type为TAG时必传
    * associationEpIds  该资源分组内包含的资源来源的企业项目ID，type为EPS时必传
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'groupName' => 'group_name',
            'enterpriseProjectId' => 'enterprise_project_id',
            'type' => 'type',
            'tags' => 'tags',
            'associationEpIds' => 'association_ep_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groupName  资源分组的名称，只能为字母、数字、汉字、-、_，最大长度为128
    * enterpriseProjectId  资源分组归属企业项目ID
    * type  资源分组添加资源方式，取值只能为EPS（同步企业项目）,TAG（标签动态匹配）,不传为手动添加
    * tags  标签动态匹配时的关联标签,type为TAG时必传
    * associationEpIds  该资源分组内包含的资源来源的企业项目ID，type为EPS时必传
    *
    * @var string[]
    */
    protected static $setters = [
            'groupName' => 'setGroupName',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'type' => 'setType',
            'tags' => 'setTags',
            'associationEpIds' => 'setAssociationEpIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * groupName  资源分组的名称，只能为字母、数字、汉字、-、_，最大长度为128
    * enterpriseProjectId  资源分组归属企业项目ID
    * type  资源分组添加资源方式，取值只能为EPS（同步企业项目）,TAG（标签动态匹配）,不传为手动添加
    * tags  标签动态匹配时的关联标签,type为TAG时必传
    * associationEpIds  该资源分组内包含的资源来源的企业项目ID，type为EPS时必传
    *
    * @var string[]
    */
    protected static $getters = [
            'groupName' => 'getGroupName',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'type' => 'getType',
            'tags' => 'getTags',
            'associationEpIds' => 'getAssociationEpIds'
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
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['associationEpIds'] = isset($data['associationEpIds']) ? $data['associationEpIds'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['groupName'] === null) {
            $invalidProperties[] = "'groupName' can't be null";
        }
            if ((mb_strlen($this->container['groupName']) > 128)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['groupName']) < 1)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^([一-鿿]|[a-z]|[A-Z]|[0-9]|_|-)+$/", $this->container['groupName'])) {
                $invalidProperties[] = "invalid value for 'groupName', must be conform to the pattern /^([一-鿿]|[a-z]|[A-Z]|[0-9]|_|-)+$/.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && !preg_match("/^((([a-z]|[0-9]){8}-([a-z]|[0-9]){4}-([a-z]|[0-9]){4}-([a-z]|[0-9]){4}-([a-z]|[0-9]){12})|0)$/", $this->container['enterpriseProjectId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', must be conform to the pattern /^((([a-z]|[0-9]){8}-([a-z]|[0-9]){4}-([a-z]|[0-9]){4}-([a-z]|[0-9]){4}-([a-z]|[0-9]){12})|0)$/.";
            }
            if (!is_null($this->container['type']) && !preg_match("/^(EPS|TAG)$/", $this->container['type'])) {
                $invalidProperties[] = "invalid value for 'type', must be conform to the pattern /^(EPS|TAG)$/.";
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
    * Gets groupName
    *  资源分组的名称，只能为字母、数字、汉字、-、_，最大长度为128
    *
    * @return string
    */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
    * Sets groupName
    *
    * @param string $groupName 资源分组的名称，只能为字母、数字、汉字、-、_，最大长度为128
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  资源分组归属企业项目ID
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
    * @param string|null $enterpriseProjectId 资源分组归属企业项目ID
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets type
    *  资源分组添加资源方式，取值只能为EPS（同步企业项目）,TAG（标签动态匹配）,不传为手动添加
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
    * @param string|null $type 资源分组添加资源方式，取值只能为EPS（同步企业项目）,TAG（标签动态匹配）,不传为手动添加
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets tags
    *  标签动态匹配时的关联标签,type为TAG时必传
    *
    * @return \HuaweiCloud\SDK\Ces\V2\Model\ResourceGroupTagRelation[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Ces\V2\Model\ResourceGroupTagRelation[]|null $tags 标签动态匹配时的关联标签,type为TAG时必传
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets associationEpIds
    *  该资源分组内包含的资源来源的企业项目ID，type为EPS时必传
    *
    * @return string[]|null
    */
    public function getAssociationEpIds()
    {
        return $this->container['associationEpIds'];
    }

    /**
    * Sets associationEpIds
    *
    * @param string[]|null $associationEpIds 该资源分组内包含的资源来源的企业项目ID，type为EPS时必传
    *
    * @return $this
    */
    public function setAssociationEpIds($associationEpIds)
    {
        $this->container['associationEpIds'] = $associationEpIds;
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

