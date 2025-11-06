<?php

namespace HuaweiCloud\SDK\Ces\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateResourceGroupRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateResourceGroupRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * groupName  **参数解释** 资源分组的名称 **约束限制** 不涉及 **取值范围** 只能为字母、数字、汉字、-或_，长度为[1,128]个字符 **默认取值** 不涉及
    * resources  **参数解释** 手动创建时的资源详情。 **约束限制** 不超过1000个资源。
    * type  **参数解释** 资源分组添加资源方式 **约束限制** 不涉及 **取值范围** 取值只能为EPS（同步企业项目），TAG（标签动态匹配），不传为手动添加。 **默认取值** 不涉及
    * relationIds  **参数解释** 该资源分组内包含的资源来源的企业项目ID。 **约束限制** type为EPS时必传，不超过50个企业项目ID。
    * tags  **参数解释** 标签动态匹配时的关联标签。 **约束限制** type为TAG时必传，不超过50个标签。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'groupName' => 'string',
            'resources' => '\HuaweiCloud\SDK\Ces\V1\Model\CreateResourceGroup[]',
            'type' => 'string',
            'relationIds' => 'string[]',
            'tags' => '\HuaweiCloud\SDK\Ces\V1\Model\ResourceGroupTagRelation[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * groupName  **参数解释** 资源分组的名称 **约束限制** 不涉及 **取值范围** 只能为字母、数字、汉字、-或_，长度为[1,128]个字符 **默认取值** 不涉及
    * resources  **参数解释** 手动创建时的资源详情。 **约束限制** 不超过1000个资源。
    * type  **参数解释** 资源分组添加资源方式 **约束限制** 不涉及 **取值范围** 取值只能为EPS（同步企业项目），TAG（标签动态匹配），不传为手动添加。 **默认取值** 不涉及
    * relationIds  **参数解释** 该资源分组内包含的资源来源的企业项目ID。 **约束限制** type为EPS时必传，不超过50个企业项目ID。
    * tags  **参数解释** 标签动态匹配时的关联标签。 **约束限制** type为TAG时必传，不超过50个标签。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'groupName' => null,
        'resources' => null,
        'type' => null,
        'relationIds' => null,
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
    * groupName  **参数解释** 资源分组的名称 **约束限制** 不涉及 **取值范围** 只能为字母、数字、汉字、-或_，长度为[1,128]个字符 **默认取值** 不涉及
    * resources  **参数解释** 手动创建时的资源详情。 **约束限制** 不超过1000个资源。
    * type  **参数解释** 资源分组添加资源方式 **约束限制** 不涉及 **取值范围** 取值只能为EPS（同步企业项目），TAG（标签动态匹配），不传为手动添加。 **默认取值** 不涉及
    * relationIds  **参数解释** 该资源分组内包含的资源来源的企业项目ID。 **约束限制** type为EPS时必传，不超过50个企业项目ID。
    * tags  **参数解释** 标签动态匹配时的关联标签。 **约束限制** type为TAG时必传，不超过50个标签。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'groupName' => 'group_name',
            'resources' => 'resources',
            'type' => 'type',
            'relationIds' => 'relation_ids',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groupName  **参数解释** 资源分组的名称 **约束限制** 不涉及 **取值范围** 只能为字母、数字、汉字、-或_，长度为[1,128]个字符 **默认取值** 不涉及
    * resources  **参数解释** 手动创建时的资源详情。 **约束限制** 不超过1000个资源。
    * type  **参数解释** 资源分组添加资源方式 **约束限制** 不涉及 **取值范围** 取值只能为EPS（同步企业项目），TAG（标签动态匹配），不传为手动添加。 **默认取值** 不涉及
    * relationIds  **参数解释** 该资源分组内包含的资源来源的企业项目ID。 **约束限制** type为EPS时必传，不超过50个企业项目ID。
    * tags  **参数解释** 标签动态匹配时的关联标签。 **约束限制** type为TAG时必传，不超过50个标签。
    *
    * @var string[]
    */
    protected static $setters = [
            'groupName' => 'setGroupName',
            'resources' => 'setResources',
            'type' => 'setType',
            'relationIds' => 'setRelationIds',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * groupName  **参数解释** 资源分组的名称 **约束限制** 不涉及 **取值范围** 只能为字母、数字、汉字、-或_，长度为[1,128]个字符 **默认取值** 不涉及
    * resources  **参数解释** 手动创建时的资源详情。 **约束限制** 不超过1000个资源。
    * type  **参数解释** 资源分组添加资源方式 **约束限制** 不涉及 **取值范围** 取值只能为EPS（同步企业项目），TAG（标签动态匹配），不传为手动添加。 **默认取值** 不涉及
    * relationIds  **参数解释** 该资源分组内包含的资源来源的企业项目ID。 **约束限制** type为EPS时必传，不超过50个企业项目ID。
    * tags  **参数解释** 标签动态匹配时的关联标签。 **约束限制** type为TAG时必传，不超过50个标签。
    *
    * @var string[]
    */
    protected static $getters = [
            'groupName' => 'getGroupName',
            'resources' => 'getResources',
            'type' => 'getType',
            'relationIds' => 'getRelationIds',
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
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['resources'] = isset($data['resources']) ? $data['resources'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['relationIds'] = isset($data['relationIds']) ? $data['relationIds'] : null;
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
        if ($this->container['groupName'] === null) {
            $invalidProperties[] = "'groupName' can't be null";
        }
            if ((mb_strlen($this->container['groupName']) > 128)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['groupName']) < 1)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^([\\u4E00-\\u9FFF]|[a-z]|[A-Z]|[0-9]|_|-)+$/", $this->container['groupName'])) {
                $invalidProperties[] = "invalid value for 'groupName', must be conform to the pattern /^([\\u4E00-\\u9FFF]|[a-z]|[A-Z]|[0-9]|_|-)+$/.";
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
    *  **参数解释** 资源分组的名称 **约束限制** 不涉及 **取值范围** 只能为字母、数字、汉字、-或_，长度为[1,128]个字符 **默认取值** 不涉及
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
    * @param string $groupName **参数解释** 资源分组的名称 **约束限制** 不涉及 **取值范围** 只能为字母、数字、汉字、-或_，长度为[1,128]个字符 **默认取值** 不涉及
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets resources
    *  **参数解释** 手动创建时的资源详情。 **约束限制** 不超过1000个资源。
    *
    * @return \HuaweiCloud\SDK\Ces\V1\Model\CreateResourceGroup[]|null
    */
    public function getResources()
    {
        return $this->container['resources'];
    }

    /**
    * Sets resources
    *
    * @param \HuaweiCloud\SDK\Ces\V1\Model\CreateResourceGroup[]|null $resources **参数解释** 手动创建时的资源详情。 **约束限制** 不超过1000个资源。
    *
    * @return $this
    */
    public function setResources($resources)
    {
        $this->container['resources'] = $resources;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释** 资源分组添加资源方式 **约束限制** 不涉及 **取值范围** 取值只能为EPS（同步企业项目），TAG（标签动态匹配），不传为手动添加。 **默认取值** 不涉及
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
    * @param string|null $type **参数解释** 资源分组添加资源方式 **约束限制** 不涉及 **取值范围** 取值只能为EPS（同步企业项目），TAG（标签动态匹配），不传为手动添加。 **默认取值** 不涉及
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets relationIds
    *  **参数解释** 该资源分组内包含的资源来源的企业项目ID。 **约束限制** type为EPS时必传，不超过50个企业项目ID。
    *
    * @return string[]|null
    */
    public function getRelationIds()
    {
        return $this->container['relationIds'];
    }

    /**
    * Sets relationIds
    *
    * @param string[]|null $relationIds **参数解释** 该资源分组内包含的资源来源的企业项目ID。 **约束限制** type为EPS时必传，不超过50个企业项目ID。
    *
    * @return $this
    */
    public function setRelationIds($relationIds)
    {
        $this->container['relationIds'] = $relationIds;
        return $this;
    }

    /**
    * Gets tags
    *  **参数解释** 标签动态匹配时的关联标签。 **约束限制** type为TAG时必传，不超过50个标签。
    *
    * @return \HuaweiCloud\SDK\Ces\V1\Model\ResourceGroupTagRelation[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Ces\V1\Model\ResourceGroupTagRelation[]|null $tags **参数解释** 标签动态匹配时的关联标签。 **约束限制** type为TAG时必传，不超过50个标签。
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

