<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowRepositoryStatisticsSummaryResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowRepositoryStatisticsSummaryResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * branchesCount  **参数解释：** 分支数量。 **取值范围：** 不涉及。
    * commitsCount  **参数解释：** 提交数量。 **取值范围：** 不涉及。
    * membersCount  **参数解释：** 成员数量。
    * tagsCount  **参数解释：** Tag数量。 **取值范围：** 不涉及。
    * mergeRequestCount  **参数解释：** 合并请求数量。 **取值范围：** 不涉及。
    * noteCount  **参数解释：** 备注数量。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'branchesCount' => 'int',
            'commitsCount' => 'int',
            'membersCount' => 'int',
            'tagsCount' => 'int',
            'mergeRequestCount' => 'int',
            'noteCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * branchesCount  **参数解释：** 分支数量。 **取值范围：** 不涉及。
    * commitsCount  **参数解释：** 提交数量。 **取值范围：** 不涉及。
    * membersCount  **参数解释：** 成员数量。
    * tagsCount  **参数解释：** Tag数量。 **取值范围：** 不涉及。
    * mergeRequestCount  **参数解释：** 合并请求数量。 **取值范围：** 不涉及。
    * noteCount  **参数解释：** 备注数量。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'branchesCount' => null,
        'commitsCount' => null,
        'membersCount' => null,
        'tagsCount' => null,
        'mergeRequestCount' => 'int64',
        'noteCount' => 'int64'
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
    * branchesCount  **参数解释：** 分支数量。 **取值范围：** 不涉及。
    * commitsCount  **参数解释：** 提交数量。 **取值范围：** 不涉及。
    * membersCount  **参数解释：** 成员数量。
    * tagsCount  **参数解释：** Tag数量。 **取值范围：** 不涉及。
    * mergeRequestCount  **参数解释：** 合并请求数量。 **取值范围：** 不涉及。
    * noteCount  **参数解释：** 备注数量。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'branchesCount' => 'branches_count',
            'commitsCount' => 'commits_count',
            'membersCount' => 'members_count',
            'tagsCount' => 'tags_count',
            'mergeRequestCount' => 'merge_request_count',
            'noteCount' => 'note_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * branchesCount  **参数解释：** 分支数量。 **取值范围：** 不涉及。
    * commitsCount  **参数解释：** 提交数量。 **取值范围：** 不涉及。
    * membersCount  **参数解释：** 成员数量。
    * tagsCount  **参数解释：** Tag数量。 **取值范围：** 不涉及。
    * mergeRequestCount  **参数解释：** 合并请求数量。 **取值范围：** 不涉及。
    * noteCount  **参数解释：** 备注数量。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'branchesCount' => 'setBranchesCount',
            'commitsCount' => 'setCommitsCount',
            'membersCount' => 'setMembersCount',
            'tagsCount' => 'setTagsCount',
            'mergeRequestCount' => 'setMergeRequestCount',
            'noteCount' => 'setNoteCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * branchesCount  **参数解释：** 分支数量。 **取值范围：** 不涉及。
    * commitsCount  **参数解释：** 提交数量。 **取值范围：** 不涉及。
    * membersCount  **参数解释：** 成员数量。
    * tagsCount  **参数解释：** Tag数量。 **取值范围：** 不涉及。
    * mergeRequestCount  **参数解释：** 合并请求数量。 **取值范围：** 不涉及。
    * noteCount  **参数解释：** 备注数量。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'branchesCount' => 'getBranchesCount',
            'commitsCount' => 'getCommitsCount',
            'membersCount' => 'getMembersCount',
            'tagsCount' => 'getTagsCount',
            'mergeRequestCount' => 'getMergeRequestCount',
            'noteCount' => 'getNoteCount'
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
        $this->container['branchesCount'] = isset($data['branchesCount']) ? $data['branchesCount'] : null;
        $this->container['commitsCount'] = isset($data['commitsCount']) ? $data['commitsCount'] : null;
        $this->container['membersCount'] = isset($data['membersCount']) ? $data['membersCount'] : null;
        $this->container['tagsCount'] = isset($data['tagsCount']) ? $data['tagsCount'] : null;
        $this->container['mergeRequestCount'] = isset($data['mergeRequestCount']) ? $data['mergeRequestCount'] : null;
        $this->container['noteCount'] = isset($data['noteCount']) ? $data['noteCount'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['branchesCount']) && ($this->container['branchesCount'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'branchesCount', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['branchesCount']) && ($this->container['branchesCount'] < 1)) {
                $invalidProperties[] = "invalid value for 'branchesCount', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['commitsCount']) && ($this->container['commitsCount'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'commitsCount', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['commitsCount']) && ($this->container['commitsCount'] < 1)) {
                $invalidProperties[] = "invalid value for 'commitsCount', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['membersCount']) && ($this->container['membersCount'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'membersCount', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['membersCount']) && ($this->container['membersCount'] < 1)) {
                $invalidProperties[] = "invalid value for 'membersCount', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['tagsCount']) && ($this->container['tagsCount'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'tagsCount', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['tagsCount']) && ($this->container['tagsCount'] < 1)) {
                $invalidProperties[] = "invalid value for 'tagsCount', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['mergeRequestCount']) && ($this->container['mergeRequestCount'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'mergeRequestCount', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['mergeRequestCount']) && ($this->container['mergeRequestCount'] < 1)) {
                $invalidProperties[] = "invalid value for 'mergeRequestCount', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['noteCount']) && ($this->container['noteCount'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'noteCount', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['noteCount']) && ($this->container['noteCount'] < 1)) {
                $invalidProperties[] = "invalid value for 'noteCount', must be bigger than or equal to 1.";
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
    * Gets branchesCount
    *  **参数解释：** 分支数量。 **取值范围：** 不涉及。
    *
    * @return int|null
    */
    public function getBranchesCount()
    {
        return $this->container['branchesCount'];
    }

    /**
    * Sets branchesCount
    *
    * @param int|null $branchesCount **参数解释：** 分支数量。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setBranchesCount($branchesCount)
    {
        $this->container['branchesCount'] = $branchesCount;
        return $this;
    }

    /**
    * Gets commitsCount
    *  **参数解释：** 提交数量。 **取值范围：** 不涉及。
    *
    * @return int|null
    */
    public function getCommitsCount()
    {
        return $this->container['commitsCount'];
    }

    /**
    * Sets commitsCount
    *
    * @param int|null $commitsCount **参数解释：** 提交数量。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setCommitsCount($commitsCount)
    {
        $this->container['commitsCount'] = $commitsCount;
        return $this;
    }

    /**
    * Gets membersCount
    *  **参数解释：** 成员数量。
    *
    * @return int|null
    */
    public function getMembersCount()
    {
        return $this->container['membersCount'];
    }

    /**
    * Sets membersCount
    *
    * @param int|null $membersCount **参数解释：** 成员数量。
    *
    * @return $this
    */
    public function setMembersCount($membersCount)
    {
        $this->container['membersCount'] = $membersCount;
        return $this;
    }

    /**
    * Gets tagsCount
    *  **参数解释：** Tag数量。 **取值范围：** 不涉及。
    *
    * @return int|null
    */
    public function getTagsCount()
    {
        return $this->container['tagsCount'];
    }

    /**
    * Sets tagsCount
    *
    * @param int|null $tagsCount **参数解释：** Tag数量。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setTagsCount($tagsCount)
    {
        $this->container['tagsCount'] = $tagsCount;
        return $this;
    }

    /**
    * Gets mergeRequestCount
    *  **参数解释：** 合并请求数量。 **取值范围：** 不涉及。
    *
    * @return int|null
    */
    public function getMergeRequestCount()
    {
        return $this->container['mergeRequestCount'];
    }

    /**
    * Sets mergeRequestCount
    *
    * @param int|null $mergeRequestCount **参数解释：** 合并请求数量。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setMergeRequestCount($mergeRequestCount)
    {
        $this->container['mergeRequestCount'] = $mergeRequestCount;
        return $this;
    }

    /**
    * Gets noteCount
    *  **参数解释：** 备注数量。 **取值范围：** 不涉及。
    *
    * @return int|null
    */
    public function getNoteCount()
    {
        return $this->container['noteCount'];
    }

    /**
    * Sets noteCount
    *
    * @param int|null $noteCount **参数解释：** 备注数量。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setNoteCount($noteCount)
    {
        $this->container['noteCount'] = $noteCount;
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

