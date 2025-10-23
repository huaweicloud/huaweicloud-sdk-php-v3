<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListTenantRepositoriesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListTenantRepositoriesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * repositoryName  **参数解释：** 仓库名称。 **取值范围：** 字符串长度不少于1，不超过128。
    * memberNumber  **参数解释：** 成员数量。
    * status  **参数解释：** 仓库状态。 **取值范围：** - 0，正常。 - 3，冻结。 - 4，关闭。 - 5，清理中。 - 7，删除中。
    * owner  **参数解释：** 仓库所有者。 **取值范围：** 字符串长度不少于1，不超过128。
    * createdAfter  **参数解释：** 筛选在该时间之后创建的仓库。
    * createdBefore  **参数解释：** 筛选在该时间之前创建的仓库。
    * sort  **参数解释：** 结果集排序方式。 **约束限制：** 与sort_field搭配使用。  **取值范围：** - asc，正序返回。 - desc，倒序返回。
    * sortField  **参数解释：** 用作排序的字段。 - owner，仓库所有者。 - capacity，使用空间。 - status，状态。 - create_time，创建时间。 - member_number，成员数量。 - repository_name，仓库名称。
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'repositoryName' => 'string',
            'memberNumber' => 'int',
            'status' => 'int',
            'owner' => 'string',
            'createdAfter' => '\DateTime',
            'createdBefore' => '\DateTime',
            'sort' => 'string',
            'sortField' => 'string',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * repositoryName  **参数解释：** 仓库名称。 **取值范围：** 字符串长度不少于1，不超过128。
    * memberNumber  **参数解释：** 成员数量。
    * status  **参数解释：** 仓库状态。 **取值范围：** - 0，正常。 - 3，冻结。 - 4，关闭。 - 5，清理中。 - 7，删除中。
    * owner  **参数解释：** 仓库所有者。 **取值范围：** 字符串长度不少于1，不超过128。
    * createdAfter  **参数解释：** 筛选在该时间之后创建的仓库。
    * createdBefore  **参数解释：** 筛选在该时间之前创建的仓库。
    * sort  **参数解释：** 结果集排序方式。 **约束限制：** 与sort_field搭配使用。  **取值范围：** - asc，正序返回。 - desc，倒序返回。
    * sortField  **参数解释：** 用作排序的字段。 - owner，仓库所有者。 - capacity，使用空间。 - status，状态。 - create_time，创建时间。 - member_number，成员数量。 - repository_name，仓库名称。
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'repositoryName' => null,
        'memberNumber' => 'int32',
        'status' => null,
        'owner' => null,
        'createdAfter' => 'date-time',
        'createdBefore' => 'date-time',
        'sort' => null,
        'sortField' => null,
        'offset' => 'int32',
        'limit' => 'int32'
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
    * repositoryName  **参数解释：** 仓库名称。 **取值范围：** 字符串长度不少于1，不超过128。
    * memberNumber  **参数解释：** 成员数量。
    * status  **参数解释：** 仓库状态。 **取值范围：** - 0，正常。 - 3，冻结。 - 4，关闭。 - 5，清理中。 - 7，删除中。
    * owner  **参数解释：** 仓库所有者。 **取值范围：** 字符串长度不少于1，不超过128。
    * createdAfter  **参数解释：** 筛选在该时间之后创建的仓库。
    * createdBefore  **参数解释：** 筛选在该时间之前创建的仓库。
    * sort  **参数解释：** 结果集排序方式。 **约束限制：** 与sort_field搭配使用。  **取值范围：** - asc，正序返回。 - desc，倒序返回。
    * sortField  **参数解释：** 用作排序的字段。 - owner，仓库所有者。 - capacity，使用空间。 - status，状态。 - create_time，创建时间。 - member_number，成员数量。 - repository_name，仓库名称。
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'repositoryName' => 'repository_name',
            'memberNumber' => 'member_number',
            'status' => 'status',
            'owner' => 'owner',
            'createdAfter' => 'created_after',
            'createdBefore' => 'created_before',
            'sort' => 'sort',
            'sortField' => 'sort_field',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * repositoryName  **参数解释：** 仓库名称。 **取值范围：** 字符串长度不少于1，不超过128。
    * memberNumber  **参数解释：** 成员数量。
    * status  **参数解释：** 仓库状态。 **取值范围：** - 0，正常。 - 3，冻结。 - 4，关闭。 - 5，清理中。 - 7，删除中。
    * owner  **参数解释：** 仓库所有者。 **取值范围：** 字符串长度不少于1，不超过128。
    * createdAfter  **参数解释：** 筛选在该时间之后创建的仓库。
    * createdBefore  **参数解释：** 筛选在该时间之前创建的仓库。
    * sort  **参数解释：** 结果集排序方式。 **约束限制：** 与sort_field搭配使用。  **取值范围：** - asc，正序返回。 - desc，倒序返回。
    * sortField  **参数解释：** 用作排序的字段。 - owner，仓库所有者。 - capacity，使用空间。 - status，状态。 - create_time，创建时间。 - member_number，成员数量。 - repository_name，仓库名称。
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    *
    * @var string[]
    */
    protected static $setters = [
            'repositoryName' => 'setRepositoryName',
            'memberNumber' => 'setMemberNumber',
            'status' => 'setStatus',
            'owner' => 'setOwner',
            'createdAfter' => 'setCreatedAfter',
            'createdBefore' => 'setCreatedBefore',
            'sort' => 'setSort',
            'sortField' => 'setSortField',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * repositoryName  **参数解释：** 仓库名称。 **取值范围：** 字符串长度不少于1，不超过128。
    * memberNumber  **参数解释：** 成员数量。
    * status  **参数解释：** 仓库状态。 **取值范围：** - 0，正常。 - 3，冻结。 - 4，关闭。 - 5，清理中。 - 7，删除中。
    * owner  **参数解释：** 仓库所有者。 **取值范围：** 字符串长度不少于1，不超过128。
    * createdAfter  **参数解释：** 筛选在该时间之后创建的仓库。
    * createdBefore  **参数解释：** 筛选在该时间之前创建的仓库。
    * sort  **参数解释：** 结果集排序方式。 **约束限制：** 与sort_field搭配使用。  **取值范围：** - asc，正序返回。 - desc，倒序返回。
    * sortField  **参数解释：** 用作排序的字段。 - owner，仓库所有者。 - capacity，使用空间。 - status，状态。 - create_time，创建时间。 - member_number，成员数量。 - repository_name，仓库名称。
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    *
    * @var string[]
    */
    protected static $getters = [
            'repositoryName' => 'getRepositoryName',
            'memberNumber' => 'getMemberNumber',
            'status' => 'getStatus',
            'owner' => 'getOwner',
            'createdAfter' => 'getCreatedAfter',
            'createdBefore' => 'getCreatedBefore',
            'sort' => 'getSort',
            'sortField' => 'getSortField',
            'offset' => 'getOffset',
            'limit' => 'getLimit'
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
    const STATUS_0 = 0;
    const STATUS_3 = 3;
    const STATUS_4 = 4;
    const STATUS_5 = 5;
    const STATUS_7 = 7;
    const SORT_ASC = 'asc';
    const SORT_DESC = 'desc';
    const SORT_FIELD_OWNER = 'owner';
    const SORT_FIELD_CAPACITY = 'capacity';
    const SORT_FIELD_STATUS = 'status';
    const SORT_FIELD_CREATE_TIME = 'create_time';
    const SORT_FIELD_MEMBER_NUMBER = 'member_number';
    const SORT_FIELD_REPOSITORY_NAME = 'repository_name';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_0,
            self::STATUS_3,
            self::STATUS_4,
            self::STATUS_5,
            self::STATUS_7,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSortAllowableValues()
    {
        return [
            self::SORT_ASC,
            self::SORT_DESC,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSortFieldAllowableValues()
    {
        return [
            self::SORT_FIELD_OWNER,
            self::SORT_FIELD_CAPACITY,
            self::SORT_FIELD_STATUS,
            self::SORT_FIELD_CREATE_TIME,
            self::SORT_FIELD_MEMBER_NUMBER,
            self::SORT_FIELD_REPOSITORY_NAME,
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
        $this->container['repositoryName'] = isset($data['repositoryName']) ? $data['repositoryName'] : null;
        $this->container['memberNumber'] = isset($data['memberNumber']) ? $data['memberNumber'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['createdAfter'] = isset($data['createdAfter']) ? $data['createdAfter'] : null;
        $this->container['createdBefore'] = isset($data['createdBefore']) ? $data['createdBefore'] : null;
        $this->container['sort'] = isset($data['sort']) ? $data['sort'] : null;
        $this->container['sortField'] = isset($data['sortField']) ? $data['sortField'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['repositoryName']) && (mb_strlen($this->container['repositoryName']) > 128)) {
                $invalidProperties[] = "invalid value for 'repositoryName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['repositoryName']) && (mb_strlen($this->container['repositoryName']) < 1)) {
                $invalidProperties[] = "invalid value for 'repositoryName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['memberNumber']) && ($this->container['memberNumber'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'memberNumber', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['memberNumber']) && ($this->container['memberNumber'] < 1)) {
                $invalidProperties[] = "invalid value for 'memberNumber', must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['owner']) && (mb_strlen($this->container['owner']) > 128)) {
                $invalidProperties[] = "invalid value for 'owner', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['owner']) && (mb_strlen($this->container['owner']) < 1)) {
                $invalidProperties[] = "invalid value for 'owner', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getSortAllowableValues();
                if (!is_null($this->container['sort']) && !in_array($this->container['sort'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sort', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getSortFieldAllowableValues();
                if (!is_null($this->container['sortField']) && !in_array($this->container['sortField'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'sortField', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['offset']) && ($this->container['offset'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
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
    * Gets repositoryName
    *  **参数解释：** 仓库名称。 **取值范围：** 字符串长度不少于1，不超过128。
    *
    * @return string|null
    */
    public function getRepositoryName()
    {
        return $this->container['repositoryName'];
    }

    /**
    * Sets repositoryName
    *
    * @param string|null $repositoryName **参数解释：** 仓库名称。 **取值范围：** 字符串长度不少于1，不超过128。
    *
    * @return $this
    */
    public function setRepositoryName($repositoryName)
    {
        $this->container['repositoryName'] = $repositoryName;
        return $this;
    }

    /**
    * Gets memberNumber
    *  **参数解释：** 成员数量。
    *
    * @return int|null
    */
    public function getMemberNumber()
    {
        return $this->container['memberNumber'];
    }

    /**
    * Sets memberNumber
    *
    * @param int|null $memberNumber **参数解释：** 成员数量。
    *
    * @return $this
    */
    public function setMemberNumber($memberNumber)
    {
        $this->container['memberNumber'] = $memberNumber;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释：** 仓库状态。 **取值范围：** - 0，正常。 - 3，冻结。 - 4，关闭。 - 5，清理中。 - 7，删除中。
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status **参数解释：** 仓库状态。 **取值范围：** - 0，正常。 - 3，冻结。 - 4，关闭。 - 5，清理中。 - 7，删除中。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets owner
    *  **参数解释：** 仓库所有者。 **取值范围：** 字符串长度不少于1，不超过128。
    *
    * @return string|null
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param string|null $owner **参数解释：** 仓库所有者。 **取值范围：** 字符串长度不少于1，不超过128。
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets createdAfter
    *  **参数解释：** 筛选在该时间之后创建的仓库。
    *
    * @return \DateTime|null
    */
    public function getCreatedAfter()
    {
        return $this->container['createdAfter'];
    }

    /**
    * Sets createdAfter
    *
    * @param \DateTime|null $createdAfter **参数解释：** 筛选在该时间之后创建的仓库。
    *
    * @return $this
    */
    public function setCreatedAfter($createdAfter)
    {
        $this->container['createdAfter'] = $createdAfter;
        return $this;
    }

    /**
    * Gets createdBefore
    *  **参数解释：** 筛选在该时间之前创建的仓库。
    *
    * @return \DateTime|null
    */
    public function getCreatedBefore()
    {
        return $this->container['createdBefore'];
    }

    /**
    * Sets createdBefore
    *
    * @param \DateTime|null $createdBefore **参数解释：** 筛选在该时间之前创建的仓库。
    *
    * @return $this
    */
    public function setCreatedBefore($createdBefore)
    {
        $this->container['createdBefore'] = $createdBefore;
        return $this;
    }

    /**
    * Gets sort
    *  **参数解释：** 结果集排序方式。 **约束限制：** 与sort_field搭配使用。  **取值范围：** - asc，正序返回。 - desc，倒序返回。
    *
    * @return string|null
    */
    public function getSort()
    {
        return $this->container['sort'];
    }

    /**
    * Sets sort
    *
    * @param string|null $sort **参数解释：** 结果集排序方式。 **约束限制：** 与sort_field搭配使用。  **取值范围：** - asc，正序返回。 - desc，倒序返回。
    *
    * @return $this
    */
    public function setSort($sort)
    {
        $this->container['sort'] = $sort;
        return $this;
    }

    /**
    * Gets sortField
    *  **参数解释：** 用作排序的字段。 - owner，仓库所有者。 - capacity，使用空间。 - status，状态。 - create_time，创建时间。 - member_number，成员数量。 - repository_name，仓库名称。
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
    * @param string|null $sortField **参数解释：** 用作排序的字段。 - owner，仓库所有者。 - capacity，使用空间。 - status，状态。 - create_time，创建时间。 - member_number，成员数量。 - repository_name，仓库名称。
    *
    * @return $this
    */
    public function setSortField($sortField)
    {
        $this->container['sortField'] = $sortField;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释：** 偏移量，从0开始。
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset **参数解释：** 偏移量，从0开始。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释：** 返回数量。
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
    * @param int|null $limit **参数解释：** 返回数量。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
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

