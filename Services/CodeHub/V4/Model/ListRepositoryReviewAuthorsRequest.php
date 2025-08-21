<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListRepositoryReviewAuthorsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListRepositoryReviewAuthorsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * repositoryId  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    * noteableType  **参数解释：** 意见类型。 **取值范围：** - Commit，提交。 - MergeRequest，合并请求。
    * resolvedStatus  **参数解释：** 解决状态。 **取值范围：** - resolved，已解决。 - unresolved，未解决。   - all，全部。
    * reviewersFilter  **参数解释：** 根据检视人名字或用户名筛选意见。
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'repositoryId' => 'int',
            'noteableType' => 'string',
            'resolvedStatus' => 'string',
            'reviewersFilter' => 'string',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * repositoryId  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    * noteableType  **参数解释：** 意见类型。 **取值范围：** - Commit，提交。 - MergeRequest，合并请求。
    * resolvedStatus  **参数解释：** 解决状态。 **取值范围：** - resolved，已解决。 - unresolved，未解决。   - all，全部。
    * reviewersFilter  **参数解释：** 根据检视人名字或用户名筛选意见。
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'repositoryId' => null,
        'noteableType' => null,
        'resolvedStatus' => null,
        'reviewersFilter' => null,
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
    * repositoryId  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    * noteableType  **参数解释：** 意见类型。 **取值范围：** - Commit，提交。 - MergeRequest，合并请求。
    * resolvedStatus  **参数解释：** 解决状态。 **取值范围：** - resolved，已解决。 - unresolved，未解决。   - all，全部。
    * reviewersFilter  **参数解释：** 根据检视人名字或用户名筛选意见。
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'repositoryId' => 'repository_id',
            'noteableType' => 'noteable_type',
            'resolvedStatus' => 'resolved_status',
            'reviewersFilter' => 'reviewers_filter',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * repositoryId  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    * noteableType  **参数解释：** 意见类型。 **取值范围：** - Commit，提交。 - MergeRequest，合并请求。
    * resolvedStatus  **参数解释：** 解决状态。 **取值范围：** - resolved，已解决。 - unresolved，未解决。   - all，全部。
    * reviewersFilter  **参数解释：** 根据检视人名字或用户名筛选意见。
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    *
    * @var string[]
    */
    protected static $setters = [
            'repositoryId' => 'setRepositoryId',
            'noteableType' => 'setNoteableType',
            'resolvedStatus' => 'setResolvedStatus',
            'reviewersFilter' => 'setReviewersFilter',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * repositoryId  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    * noteableType  **参数解释：** 意见类型。 **取值范围：** - Commit，提交。 - MergeRequest，合并请求。
    * resolvedStatus  **参数解释：** 解决状态。 **取值范围：** - resolved，已解决。 - unresolved，未解决。   - all，全部。
    * reviewersFilter  **参数解释：** 根据检视人名字或用户名筛选意见。
    * offset  **参数解释：** 偏移量，从0开始。
    * limit  **参数解释：** 返回数量。
    *
    * @var string[]
    */
    protected static $getters = [
            'repositoryId' => 'getRepositoryId',
            'noteableType' => 'getNoteableType',
            'resolvedStatus' => 'getResolvedStatus',
            'reviewersFilter' => 'getReviewersFilter',
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
    const NOTEABLE_TYPE_COMMIT = 'Commit';
    const NOTEABLE_TYPE_MERGE_REQUEST = 'MergeRequest';
    const RESOLVED_STATUS_RESOLVED = 'resolved';
    const RESOLVED_STATUS_UNRESOLVED = 'unresolved';
    const RESOLVED_STATUS_ALL = 'all';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getNoteableTypeAllowableValues()
    {
        return [
            self::NOTEABLE_TYPE_COMMIT,
            self::NOTEABLE_TYPE_MERGE_REQUEST,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getResolvedStatusAllowableValues()
    {
        return [
            self::RESOLVED_STATUS_RESOLVED,
            self::RESOLVED_STATUS_UNRESOLVED,
            self::RESOLVED_STATUS_ALL,
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
        $this->container['repositoryId'] = isset($data['repositoryId']) ? $data['repositoryId'] : null;
        $this->container['noteableType'] = isset($data['noteableType']) ? $data['noteableType'] : null;
        $this->container['resolvedStatus'] = isset($data['resolvedStatus']) ? $data['resolvedStatus'] : null;
        $this->container['reviewersFilter'] = isset($data['reviewersFilter']) ? $data['reviewersFilter'] : null;
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
        if ($this->container['repositoryId'] === null) {
            $invalidProperties[] = "'repositoryId' can't be null";
        }
            if (($this->container['repositoryId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'repositoryId', must be smaller than or equal to 2147483647.";
            }
            if (($this->container['repositoryId'] < 1)) {
                $invalidProperties[] = "invalid value for 'repositoryId', must be bigger than or equal to 1.";
            }
        if ($this->container['noteableType'] === null) {
            $invalidProperties[] = "'noteableType' can't be null";
        }
            $allowedValues = $this->getNoteableTypeAllowableValues();
                if (!is_null($this->container['noteableType']) && !in_array($this->container['noteableType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'noteableType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['resolvedStatus'] === null) {
            $invalidProperties[] = "'resolvedStatus' can't be null";
        }
            $allowedValues = $this->getResolvedStatusAllowableValues();
                if (!is_null($this->container['resolvedStatus']) && !in_array($this->container['resolvedStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'resolvedStatus', must be one of '%s'",
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
    * Gets repositoryId
    *  **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    *
    * @return int
    */
    public function getRepositoryId()
    {
        return $this->container['repositoryId'];
    }

    /**
    * Sets repositoryId
    *
    * @param int $repositoryId **参数解释：** 仓库的ID，通过[[查询用户所有仓库](https://support.huaweicloud.com/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws)[[查询用户所有仓库](https://support.huaweicloud.com/intl/en-us/api-codeartsrepo/ListUserAllRepositories.html)](tag:hws_hk)[查询项目列表](tag:hcs,hcs_sm)接口查询项目列表获取。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setRepositoryId($repositoryId)
    {
        $this->container['repositoryId'] = $repositoryId;
        return $this;
    }

    /**
    * Gets noteableType
    *  **参数解释：** 意见类型。 **取值范围：** - Commit，提交。 - MergeRequest，合并请求。
    *
    * @return string
    */
    public function getNoteableType()
    {
        return $this->container['noteableType'];
    }

    /**
    * Sets noteableType
    *
    * @param string $noteableType **参数解释：** 意见类型。 **取值范围：** - Commit，提交。 - MergeRequest，合并请求。
    *
    * @return $this
    */
    public function setNoteableType($noteableType)
    {
        $this->container['noteableType'] = $noteableType;
        return $this;
    }

    /**
    * Gets resolvedStatus
    *  **参数解释：** 解决状态。 **取值范围：** - resolved，已解决。 - unresolved，未解决。   - all，全部。
    *
    * @return string
    */
    public function getResolvedStatus()
    {
        return $this->container['resolvedStatus'];
    }

    /**
    * Sets resolvedStatus
    *
    * @param string $resolvedStatus **参数解释：** 解决状态。 **取值范围：** - resolved，已解决。 - unresolved，未解决。   - all，全部。
    *
    * @return $this
    */
    public function setResolvedStatus($resolvedStatus)
    {
        $this->container['resolvedStatus'] = $resolvedStatus;
        return $this;
    }

    /**
    * Gets reviewersFilter
    *  **参数解释：** 根据检视人名字或用户名筛选意见。
    *
    * @return string|null
    */
    public function getReviewersFilter()
    {
        return $this->container['reviewersFilter'];
    }

    /**
    * Sets reviewersFilter
    *
    * @param string|null $reviewersFilter **参数解释：** 根据检视人名字或用户名筛选意见。
    *
    * @return $this
    */
    public function setReviewersFilter($reviewersFilter)
    {
        $this->container['reviewersFilter'] = $reviewersFilter;
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

