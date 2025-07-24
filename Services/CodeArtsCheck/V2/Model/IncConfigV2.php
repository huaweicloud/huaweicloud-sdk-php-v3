<?php

namespace HuaweiCloud\SDK\CodeArtsCheck\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IncConfigV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IncConfigV2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * parentTaskId  需要关联的父任务ID，流水线创建或MR创建任务需要该参数
    * gitSourceBranch  增量检查代码源分支
    * gitTargetBranch  增量检查代码目标分支
    * mergeId  MR唯一标示ID
    * eventType  webhook触发事件类型,merge_request/push_request
    * action  webhook事件状态，open/close/update
    * title  MR标题
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'parentTaskId' => 'string',
            'gitSourceBranch' => 'string',
            'gitTargetBranch' => 'string',
            'mergeId' => 'string',
            'eventType' => 'string',
            'action' => 'string',
            'title' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * parentTaskId  需要关联的父任务ID，流水线创建或MR创建任务需要该参数
    * gitSourceBranch  增量检查代码源分支
    * gitTargetBranch  增量检查代码目标分支
    * mergeId  MR唯一标示ID
    * eventType  webhook触发事件类型,merge_request/push_request
    * action  webhook事件状态，open/close/update
    * title  MR标题
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'parentTaskId' => null,
        'gitSourceBranch' => null,
        'gitTargetBranch' => null,
        'mergeId' => null,
        'eventType' => null,
        'action' => null,
        'title' => null
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
    * parentTaskId  需要关联的父任务ID，流水线创建或MR创建任务需要该参数
    * gitSourceBranch  增量检查代码源分支
    * gitTargetBranch  增量检查代码目标分支
    * mergeId  MR唯一标示ID
    * eventType  webhook触发事件类型,merge_request/push_request
    * action  webhook事件状态，open/close/update
    * title  MR标题
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'parentTaskId' => 'parent_task_id',
            'gitSourceBranch' => 'git_source_branch',
            'gitTargetBranch' => 'git_target_branch',
            'mergeId' => 'merge_id',
            'eventType' => 'event_type',
            'action' => 'action',
            'title' => 'title'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * parentTaskId  需要关联的父任务ID，流水线创建或MR创建任务需要该参数
    * gitSourceBranch  增量检查代码源分支
    * gitTargetBranch  增量检查代码目标分支
    * mergeId  MR唯一标示ID
    * eventType  webhook触发事件类型,merge_request/push_request
    * action  webhook事件状态，open/close/update
    * title  MR标题
    *
    * @var string[]
    */
    protected static $setters = [
            'parentTaskId' => 'setParentTaskId',
            'gitSourceBranch' => 'setGitSourceBranch',
            'gitTargetBranch' => 'setGitTargetBranch',
            'mergeId' => 'setMergeId',
            'eventType' => 'setEventType',
            'action' => 'setAction',
            'title' => 'setTitle'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * parentTaskId  需要关联的父任务ID，流水线创建或MR创建任务需要该参数
    * gitSourceBranch  增量检查代码源分支
    * gitTargetBranch  增量检查代码目标分支
    * mergeId  MR唯一标示ID
    * eventType  webhook触发事件类型,merge_request/push_request
    * action  webhook事件状态，open/close/update
    * title  MR标题
    *
    * @var string[]
    */
    protected static $getters = [
            'parentTaskId' => 'getParentTaskId',
            'gitSourceBranch' => 'getGitSourceBranch',
            'gitTargetBranch' => 'getGitTargetBranch',
            'mergeId' => 'getMergeId',
            'eventType' => 'getEventType',
            'action' => 'getAction',
            'title' => 'getTitle'
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
        $this->container['parentTaskId'] = isset($data['parentTaskId']) ? $data['parentTaskId'] : null;
        $this->container['gitSourceBranch'] = isset($data['gitSourceBranch']) ? $data['gitSourceBranch'] : null;
        $this->container['gitTargetBranch'] = isset($data['gitTargetBranch']) ? $data['gitTargetBranch'] : null;
        $this->container['mergeId'] = isset($data['mergeId']) ? $data['mergeId'] : null;
        $this->container['eventType'] = isset($data['eventType']) ? $data['eventType'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets parentTaskId
    *  需要关联的父任务ID，流水线创建或MR创建任务需要该参数
    *
    * @return string|null
    */
    public function getParentTaskId()
    {
        return $this->container['parentTaskId'];
    }

    /**
    * Sets parentTaskId
    *
    * @param string|null $parentTaskId 需要关联的父任务ID，流水线创建或MR创建任务需要该参数
    *
    * @return $this
    */
    public function setParentTaskId($parentTaskId)
    {
        $this->container['parentTaskId'] = $parentTaskId;
        return $this;
    }

    /**
    * Gets gitSourceBranch
    *  增量检查代码源分支
    *
    * @return string|null
    */
    public function getGitSourceBranch()
    {
        return $this->container['gitSourceBranch'];
    }

    /**
    * Sets gitSourceBranch
    *
    * @param string|null $gitSourceBranch 增量检查代码源分支
    *
    * @return $this
    */
    public function setGitSourceBranch($gitSourceBranch)
    {
        $this->container['gitSourceBranch'] = $gitSourceBranch;
        return $this;
    }

    /**
    * Gets gitTargetBranch
    *  增量检查代码目标分支
    *
    * @return string|null
    */
    public function getGitTargetBranch()
    {
        return $this->container['gitTargetBranch'];
    }

    /**
    * Sets gitTargetBranch
    *
    * @param string|null $gitTargetBranch 增量检查代码目标分支
    *
    * @return $this
    */
    public function setGitTargetBranch($gitTargetBranch)
    {
        $this->container['gitTargetBranch'] = $gitTargetBranch;
        return $this;
    }

    /**
    * Gets mergeId
    *  MR唯一标示ID
    *
    * @return string|null
    */
    public function getMergeId()
    {
        return $this->container['mergeId'];
    }

    /**
    * Sets mergeId
    *
    * @param string|null $mergeId MR唯一标示ID
    *
    * @return $this
    */
    public function setMergeId($mergeId)
    {
        $this->container['mergeId'] = $mergeId;
        return $this;
    }

    /**
    * Gets eventType
    *  webhook触发事件类型,merge_request/push_request
    *
    * @return string|null
    */
    public function getEventType()
    {
        return $this->container['eventType'];
    }

    /**
    * Sets eventType
    *
    * @param string|null $eventType webhook触发事件类型,merge_request/push_request
    *
    * @return $this
    */
    public function setEventType($eventType)
    {
        $this->container['eventType'] = $eventType;
        return $this;
    }

    /**
    * Gets action
    *  webhook事件状态，open/close/update
    *
    * @return string|null
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string|null $action webhook事件状态，open/close/update
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets title
    *  MR标题
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
    * @param string|null $title MR标题
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
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

