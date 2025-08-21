<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PutMergeRequestParamsDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PutMergeRequestParamsDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * title  合并请求标题
    * stateEvent  合并请求状态
    * assigneeIds  合并人id列表
    * reviewerIds  评审人id列表
    * description  合并请求描述
    * milestoneId  里程碑id
    * labels  标签
    * forceRemoveSourceBranch  合入后删除源分支
    * squash  squash合入
    * squashCommitMessage  squash提交信息
    * workItemIds  e2e单号
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'title' => 'string',
            'stateEvent' => 'string',
            'assigneeIds' => 'string',
            'reviewerIds' => 'string',
            'description' => 'string',
            'milestoneId' => 'int',
            'labels' => 'object',
            'forceRemoveSourceBranch' => 'bool',
            'squash' => 'bool',
            'squashCommitMessage' => 'string',
            'workItemIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * title  合并请求标题
    * stateEvent  合并请求状态
    * assigneeIds  合并人id列表
    * reviewerIds  评审人id列表
    * description  合并请求描述
    * milestoneId  里程碑id
    * labels  标签
    * forceRemoveSourceBranch  合入后删除源分支
    * squash  squash合入
    * squashCommitMessage  squash提交信息
    * workItemIds  e2e单号
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'title' => null,
        'stateEvent' => null,
        'assigneeIds' => null,
        'reviewerIds' => null,
        'description' => null,
        'milestoneId' => 'int32',
        'labels' => null,
        'forceRemoveSourceBranch' => null,
        'squash' => null,
        'squashCommitMessage' => null,
        'workItemIds' => null
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
    * title  合并请求标题
    * stateEvent  合并请求状态
    * assigneeIds  合并人id列表
    * reviewerIds  评审人id列表
    * description  合并请求描述
    * milestoneId  里程碑id
    * labels  标签
    * forceRemoveSourceBranch  合入后删除源分支
    * squash  squash合入
    * squashCommitMessage  squash提交信息
    * workItemIds  e2e单号
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'title' => 'title',
            'stateEvent' => 'state_event',
            'assigneeIds' => 'assignee_ids',
            'reviewerIds' => 'reviewer_ids',
            'description' => 'description',
            'milestoneId' => 'milestone_id',
            'labels' => 'labels',
            'forceRemoveSourceBranch' => 'force_remove_source_branch',
            'squash' => 'squash',
            'squashCommitMessage' => 'squash_commit_message',
            'workItemIds' => 'work_item_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * title  合并请求标题
    * stateEvent  合并请求状态
    * assigneeIds  合并人id列表
    * reviewerIds  评审人id列表
    * description  合并请求描述
    * milestoneId  里程碑id
    * labels  标签
    * forceRemoveSourceBranch  合入后删除源分支
    * squash  squash合入
    * squashCommitMessage  squash提交信息
    * workItemIds  e2e单号
    *
    * @var string[]
    */
    protected static $setters = [
            'title' => 'setTitle',
            'stateEvent' => 'setStateEvent',
            'assigneeIds' => 'setAssigneeIds',
            'reviewerIds' => 'setReviewerIds',
            'description' => 'setDescription',
            'milestoneId' => 'setMilestoneId',
            'labels' => 'setLabels',
            'forceRemoveSourceBranch' => 'setForceRemoveSourceBranch',
            'squash' => 'setSquash',
            'squashCommitMessage' => 'setSquashCommitMessage',
            'workItemIds' => 'setWorkItemIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * title  合并请求标题
    * stateEvent  合并请求状态
    * assigneeIds  合并人id列表
    * reviewerIds  评审人id列表
    * description  合并请求描述
    * milestoneId  里程碑id
    * labels  标签
    * forceRemoveSourceBranch  合入后删除源分支
    * squash  squash合入
    * squashCommitMessage  squash提交信息
    * workItemIds  e2e单号
    *
    * @var string[]
    */
    protected static $getters = [
            'title' => 'getTitle',
            'stateEvent' => 'getStateEvent',
            'assigneeIds' => 'getAssigneeIds',
            'reviewerIds' => 'getReviewerIds',
            'description' => 'getDescription',
            'milestoneId' => 'getMilestoneId',
            'labels' => 'getLabels',
            'forceRemoveSourceBranch' => 'getForceRemoveSourceBranch',
            'squash' => 'getSquash',
            'squashCommitMessage' => 'getSquashCommitMessage',
            'workItemIds' => 'getWorkItemIds'
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
    const STATE_EVENT_REOPEN = 'reopen';
    const STATE_EVENT_CLOSE = 'close';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStateEventAllowableValues()
    {
        return [
            self::STATE_EVENT_REOPEN,
            self::STATE_EVENT_CLOSE,
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
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['stateEvent'] = isset($data['stateEvent']) ? $data['stateEvent'] : null;
        $this->container['assigneeIds'] = isset($data['assigneeIds']) ? $data['assigneeIds'] : null;
        $this->container['reviewerIds'] = isset($data['reviewerIds']) ? $data['reviewerIds'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['milestoneId'] = isset($data['milestoneId']) ? $data['milestoneId'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['forceRemoveSourceBranch'] = isset($data['forceRemoveSourceBranch']) ? $data['forceRemoveSourceBranch'] : null;
        $this->container['squash'] = isset($data['squash']) ? $data['squash'] : null;
        $this->container['squashCommitMessage'] = isset($data['squashCommitMessage']) ? $data['squashCommitMessage'] : null;
        $this->container['workItemIds'] = isset($data['workItemIds']) ? $data['workItemIds'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getStateEventAllowableValues();
                if (!is_null($this->container['stateEvent']) && !in_array($this->container['stateEvent'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'stateEvent', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets title
    *  合并请求标题
    *
    * @return string|null
    */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
    * Sets title
    *
    * @param string|null $title 合并请求标题
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets stateEvent
    *  合并请求状态
    *
    * @return string|null
    */
    public function getStateEvent()
    {
        return $this->container['stateEvent'];
    }

    /**
    * Sets stateEvent
    *
    * @param string|null $stateEvent 合并请求状态
    *
    * @return $this
    */
    public function setStateEvent($stateEvent)
    {
        $this->container['stateEvent'] = $stateEvent;
        return $this;
    }

    /**
    * Gets assigneeIds
    *  合并人id列表
    *
    * @return string|null
    */
    public function getAssigneeIds()
    {
        return $this->container['assigneeIds'];
    }

    /**
    * Sets assigneeIds
    *
    * @param string|null $assigneeIds 合并人id列表
    *
    * @return $this
    */
    public function setAssigneeIds($assigneeIds)
    {
        $this->container['assigneeIds'] = $assigneeIds;
        return $this;
    }

    /**
    * Gets reviewerIds
    *  评审人id列表
    *
    * @return string|null
    */
    public function getReviewerIds()
    {
        return $this->container['reviewerIds'];
    }

    /**
    * Sets reviewerIds
    *
    * @param string|null $reviewerIds 评审人id列表
    *
    * @return $this
    */
    public function setReviewerIds($reviewerIds)
    {
        $this->container['reviewerIds'] = $reviewerIds;
        return $this;
    }

    /**
    * Gets description
    *  合并请求描述
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
    * @param string|null $description 合并请求描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets milestoneId
    *  里程碑id
    *
    * @return int|null
    */
    public function getMilestoneId()
    {
        return $this->container['milestoneId'];
    }

    /**
    * Sets milestoneId
    *
    * @param int|null $milestoneId 里程碑id
    *
    * @return $this
    */
    public function setMilestoneId($milestoneId)
    {
        $this->container['milestoneId'] = $milestoneId;
        return $this;
    }

    /**
    * Gets labels
    *  标签
    *
    * @return object|null
    */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
    * Sets labels
    *
    * @param object|null $labels 标签
    *
    * @return $this
    */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;
        return $this;
    }

    /**
    * Gets forceRemoveSourceBranch
    *  合入后删除源分支
    *
    * @return bool|null
    */
    public function getForceRemoveSourceBranch()
    {
        return $this->container['forceRemoveSourceBranch'];
    }

    /**
    * Sets forceRemoveSourceBranch
    *
    * @param bool|null $forceRemoveSourceBranch 合入后删除源分支
    *
    * @return $this
    */
    public function setForceRemoveSourceBranch($forceRemoveSourceBranch)
    {
        $this->container['forceRemoveSourceBranch'] = $forceRemoveSourceBranch;
        return $this;
    }

    /**
    * Gets squash
    *  squash合入
    *
    * @return bool|null
    */
    public function getSquash()
    {
        return $this->container['squash'];
    }

    /**
    * Sets squash
    *
    * @param bool|null $squash squash合入
    *
    * @return $this
    */
    public function setSquash($squash)
    {
        $this->container['squash'] = $squash;
        return $this;
    }

    /**
    * Gets squashCommitMessage
    *  squash提交信息
    *
    * @return string|null
    */
    public function getSquashCommitMessage()
    {
        return $this->container['squashCommitMessage'];
    }

    /**
    * Sets squashCommitMessage
    *
    * @param string|null $squashCommitMessage squash提交信息
    *
    * @return $this
    */
    public function setSquashCommitMessage($squashCommitMessage)
    {
        $this->container['squashCommitMessage'] = $squashCommitMessage;
        return $this;
    }

    /**
    * Gets workItemIds
    *  e2e单号
    *
    * @return string[]|null
    */
    public function getWorkItemIds()
    {
        return $this->container['workItemIds'];
    }

    /**
    * Sets workItemIds
    *
    * @param string[]|null $workItemIds e2e单号
    *
    * @return $this
    */
    public function setWorkItemIds($workItemIds)
    {
        $this->container['workItemIds'] = $workItemIds;
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

