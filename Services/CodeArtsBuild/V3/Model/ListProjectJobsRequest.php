<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListProjectJobsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListProjectJobsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  CodeArts项目ID，32位数字、小写字母组合。
    * pageIndex  **参数解释**： 分页页码， 表示从此页开始查询。 **约束限制**： 不涉及。 **取值范围**： 只能使用数字，大于等于0。
    * pageSize  **参数解释**： 每页显示的条目数量。 **约束限制**： 不涉及。 **取值范围**： 只能使用数字，小于等于100。
    * search  查询条件
    * sortField  排序的字段
    * sortOrder  排序顺序
    * creatorId  创建人ID
    * buildStatus  构建状态过滤条件
    * byGroup  是否分组
    * groupPathId  分组ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'pageIndex' => 'int',
            'pageSize' => 'int',
            'search' => 'string',
            'sortField' => 'string',
            'sortOrder' => 'string',
            'creatorId' => 'string',
            'buildStatus' => 'string',
            'byGroup' => 'bool',
            'groupPathId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  CodeArts项目ID，32位数字、小写字母组合。
    * pageIndex  **参数解释**： 分页页码， 表示从此页开始查询。 **约束限制**： 不涉及。 **取值范围**： 只能使用数字，大于等于0。
    * pageSize  **参数解释**： 每页显示的条目数量。 **约束限制**： 不涉及。 **取值范围**： 只能使用数字，小于等于100。
    * search  查询条件
    * sortField  排序的字段
    * sortOrder  排序顺序
    * creatorId  创建人ID
    * buildStatus  构建状态过滤条件
    * byGroup  是否分组
    * groupPathId  分组ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'pageIndex' => 'int32',
        'pageSize' => 'int32',
        'search' => null,
        'sortField' => null,
        'sortOrder' => null,
        'creatorId' => null,
        'buildStatus' => null,
        'byGroup' => null,
        'groupPathId' => null
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
    * projectId  CodeArts项目ID，32位数字、小写字母组合。
    * pageIndex  **参数解释**： 分页页码， 表示从此页开始查询。 **约束限制**： 不涉及。 **取值范围**： 只能使用数字，大于等于0。
    * pageSize  **参数解释**： 每页显示的条目数量。 **约束限制**： 不涉及。 **取值范围**： 只能使用数字，小于等于100。
    * search  查询条件
    * sortField  排序的字段
    * sortOrder  排序顺序
    * creatorId  创建人ID
    * buildStatus  构建状态过滤条件
    * byGroup  是否分组
    * groupPathId  分组ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'pageIndex' => 'page_index',
            'pageSize' => 'page_size',
            'search' => 'search',
            'sortField' => 'sort_field',
            'sortOrder' => 'sort_order',
            'creatorId' => 'creator_id',
            'buildStatus' => 'build_status',
            'byGroup' => 'by_group',
            'groupPathId' => 'group_path_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  CodeArts项目ID，32位数字、小写字母组合。
    * pageIndex  **参数解释**： 分页页码， 表示从此页开始查询。 **约束限制**： 不涉及。 **取值范围**： 只能使用数字，大于等于0。
    * pageSize  **参数解释**： 每页显示的条目数量。 **约束限制**： 不涉及。 **取值范围**： 只能使用数字，小于等于100。
    * search  查询条件
    * sortField  排序的字段
    * sortOrder  排序顺序
    * creatorId  创建人ID
    * buildStatus  构建状态过滤条件
    * byGroup  是否分组
    * groupPathId  分组ID
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'pageIndex' => 'setPageIndex',
            'pageSize' => 'setPageSize',
            'search' => 'setSearch',
            'sortField' => 'setSortField',
            'sortOrder' => 'setSortOrder',
            'creatorId' => 'setCreatorId',
            'buildStatus' => 'setBuildStatus',
            'byGroup' => 'setByGroup',
            'groupPathId' => 'setGroupPathId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  CodeArts项目ID，32位数字、小写字母组合。
    * pageIndex  **参数解释**： 分页页码， 表示从此页开始查询。 **约束限制**： 不涉及。 **取值范围**： 只能使用数字，大于等于0。
    * pageSize  **参数解释**： 每页显示的条目数量。 **约束限制**： 不涉及。 **取值范围**： 只能使用数字，小于等于100。
    * search  查询条件
    * sortField  排序的字段
    * sortOrder  排序顺序
    * creatorId  创建人ID
    * buildStatus  构建状态过滤条件
    * byGroup  是否分组
    * groupPathId  分组ID
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'pageIndex' => 'getPageIndex',
            'pageSize' => 'getPageSize',
            'search' => 'getSearch',
            'sortField' => 'getSortField',
            'sortOrder' => 'getSortOrder',
            'creatorId' => 'getCreatorId',
            'buildStatus' => 'getBuildStatus',
            'byGroup' => 'getByGroup',
            'groupPathId' => 'getGroupPathId'
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['pageIndex'] = isset($data['pageIndex']) ? $data['pageIndex'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['search'] = isset($data['search']) ? $data['search'] : null;
        $this->container['sortField'] = isset($data['sortField']) ? $data['sortField'] : null;
        $this->container['sortOrder'] = isset($data['sortOrder']) ? $data['sortOrder'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['buildStatus'] = isset($data['buildStatus']) ? $data['buildStatus'] : null;
        $this->container['byGroup'] = isset($data['byGroup']) ? $data['byGroup'] : null;
        $this->container['groupPathId'] = isset($data['groupPathId']) ? $data['groupPathId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if (!preg_match("/^[0-9a-z]{32}$/", $this->container['projectId'])) {
                $invalidProperties[] = "invalid value for 'projectId', must be conform to the pattern /^[0-9a-z]{32}$/.";
            }
        if ($this->container['pageIndex'] === null) {
            $invalidProperties[] = "'pageIndex' can't be null";
        }
            if (($this->container['pageIndex'] < 0)) {
                $invalidProperties[] = "invalid value for 'pageIndex', must be bigger than or equal to 0.";
            }
        if ($this->container['pageSize'] === null) {
            $invalidProperties[] = "'pageSize' can't be null";
        }
            if (($this->container['pageSize'] > 100)) {
                $invalidProperties[] = "invalid value for 'pageSize', must be smaller than or equal to 100.";
            }
            if (($this->container['pageSize'] < 0)) {
                $invalidProperties[] = "invalid value for 'pageSize', must be bigger than or equal to 0.";
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
    * Gets projectId
    *  CodeArts项目ID，32位数字、小写字母组合。
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
    * @param string $projectId CodeArts项目ID，32位数字、小写字母组合。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets pageIndex
    *  **参数解释**： 分页页码， 表示从此页开始查询。 **约束限制**： 不涉及。 **取值范围**： 只能使用数字，大于等于0。
    *
    * @return int
    */
    public function getPageIndex()
    {
        return $this->container['pageIndex'];
    }

    /**
    * Sets pageIndex
    *
    * @param int $pageIndex **参数解释**： 分页页码， 表示从此页开始查询。 **约束限制**： 不涉及。 **取值范围**： 只能使用数字，大于等于0。
    *
    * @return $this
    */
    public function setPageIndex($pageIndex)
    {
        $this->container['pageIndex'] = $pageIndex;
        return $this;
    }

    /**
    * Gets pageSize
    *  **参数解释**： 每页显示的条目数量。 **约束限制**： 不涉及。 **取值范围**： 只能使用数字，小于等于100。
    *
    * @return int
    */
    public function getPageSize()
    {
        return $this->container['pageSize'];
    }

    /**
    * Sets pageSize
    *
    * @param int $pageSize **参数解释**： 每页显示的条目数量。 **约束限制**： 不涉及。 **取值范围**： 只能使用数字，小于等于100。
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
        return $this;
    }

    /**
    * Gets search
    *  查询条件
    *
    * @return string|null
    */
    public function getSearch()
    {
        return $this->container['search'];
    }

    /**
    * Sets search
    *
    * @param string|null $search 查询条件
    *
    * @return $this
    */
    public function setSearch($search)
    {
        $this->container['search'] = $search;
        return $this;
    }

    /**
    * Gets sortField
    *  排序的字段
    *
    * @return string|null
    */
    public function getSortField()
    {
        return $this->container['sortField'];
    }

    /**
    * Sets sortField
    *
    * @param string|null $sortField 排序的字段
    *
    * @return $this
    */
    public function setSortField($sortField)
    {
        $this->container['sortField'] = $sortField;
        return $this;
    }

    /**
    * Gets sortOrder
    *  排序顺序
    *
    * @return string|null
    */
    public function getSortOrder()
    {
        return $this->container['sortOrder'];
    }

    /**
    * Sets sortOrder
    *
    * @param string|null $sortOrder 排序顺序
    *
    * @return $this
    */
    public function setSortOrder($sortOrder)
    {
        $this->container['sortOrder'] = $sortOrder;
        return $this;
    }

    /**
    * Gets creatorId
    *  创建人ID
    *
    * @return string|null
    */
    public function getCreatorId()
    {
        return $this->container['creatorId'];
    }

    /**
    * Sets creatorId
    *
    * @param string|null $creatorId 创建人ID
    *
    * @return $this
    */
    public function setCreatorId($creatorId)
    {
        $this->container['creatorId'] = $creatorId;
        return $this;
    }

    /**
    * Gets buildStatus
    *  构建状态过滤条件
    *
    * @return string|null
    */
    public function getBuildStatus()
    {
        return $this->container['buildStatus'];
    }

    /**
    * Sets buildStatus
    *
    * @param string|null $buildStatus 构建状态过滤条件
    *
    * @return $this
    */
    public function setBuildStatus($buildStatus)
    {
        $this->container['buildStatus'] = $buildStatus;
        return $this;
    }

    /**
    * Gets byGroup
    *  是否分组
    *
    * @return bool|null
    */
    public function getByGroup()
    {
        return $this->container['byGroup'];
    }

    /**
    * Sets byGroup
    *
    * @param bool|null $byGroup 是否分组
    *
    * @return $this
    */
    public function setByGroup($byGroup)
    {
        $this->container['byGroup'] = $byGroup;
        return $this;
    }

    /**
    * Gets groupPathId
    *  分组ID
    *
    * @return string|null
    */
    public function getGroupPathId()
    {
        return $this->container['groupPathId'];
    }

    /**
    * Sets groupPathId
    *
    * @param string|null $groupPathId 分组ID
    *
    * @return $this
    */
    public function setGroupPathId($groupPathId)
    {
        $this->container['groupPathId'] = $groupPathId;
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

