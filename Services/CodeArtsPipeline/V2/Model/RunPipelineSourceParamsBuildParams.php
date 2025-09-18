<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RunPipelineSourceParamsBuildParams implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RunPipelineSource_params_build_params';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * action  **参数解释**： 合并请求事件类型 **取值范围**： - open：打开。 - reopen：重开。 - update：更新。 - merge：合并。
    * buildType  **参数解释**： 基于分支还是tag运行。 **取值范围**： - branch：分支触发。 - tag：标签触发。
    * commitId  **参数解释**： 代码仓提交ID。 **取值范围**： 不涉及。
    * eventType  **参数解释**： CodeArts项目ID。 **取值范围**： - Manual：手动触发。 - Scheduler：定时任务。 - MR：MR触发。 - Push：Push事件触发。 - CreateTag：Tag事件触发。 - Issue：Issue触发。 - Note：评论触发。
    * mergeId  **参数解释**： 合并请求ID。 **取值范围**： 不涉及。
    * message  **参数解释**： 代码仓提交信息。 **取值范围**： 不涉及。
    * sourceBranch  **参数解释**： 源分支。 **取值范围**： 不涉及。
    * tag  **参数解释**： 标签。 **取值范围**： 不涉及。
    * targetBranch  **参数解释**： 目标分支。 **取值范围**： 不涉及。
    * codehubId  **参数解释**： Repo代码仓ID。 **取值范围**： 不涉及。
    * sourceCodehubId  **参数解释**： 源Repo代码仓ID。 **取值范围**： 不涉及。
    * sourceCodehubUrl  **参数解释**： 源Repo代码仓地址。 **取值范围**： 不涉及。
    * sourceCodehubHttpUrl  **参数解释**： 源Repo代码仓http地址。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'action' => 'string',
            'buildType' => 'string',
            'commitId' => 'string',
            'eventType' => 'string',
            'mergeId' => 'string',
            'message' => 'string',
            'sourceBranch' => 'string',
            'tag' => 'string',
            'targetBranch' => 'string',
            'codehubId' => 'string',
            'sourceCodehubId' => 'string',
            'sourceCodehubUrl' => 'string',
            'sourceCodehubHttpUrl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * action  **参数解释**： 合并请求事件类型 **取值范围**： - open：打开。 - reopen：重开。 - update：更新。 - merge：合并。
    * buildType  **参数解释**： 基于分支还是tag运行。 **取值范围**： - branch：分支触发。 - tag：标签触发。
    * commitId  **参数解释**： 代码仓提交ID。 **取值范围**： 不涉及。
    * eventType  **参数解释**： CodeArts项目ID。 **取值范围**： - Manual：手动触发。 - Scheduler：定时任务。 - MR：MR触发。 - Push：Push事件触发。 - CreateTag：Tag事件触发。 - Issue：Issue触发。 - Note：评论触发。
    * mergeId  **参数解释**： 合并请求ID。 **取值范围**： 不涉及。
    * message  **参数解释**： 代码仓提交信息。 **取值范围**： 不涉及。
    * sourceBranch  **参数解释**： 源分支。 **取值范围**： 不涉及。
    * tag  **参数解释**： 标签。 **取值范围**： 不涉及。
    * targetBranch  **参数解释**： 目标分支。 **取值范围**： 不涉及。
    * codehubId  **参数解释**： Repo代码仓ID。 **取值范围**： 不涉及。
    * sourceCodehubId  **参数解释**： 源Repo代码仓ID。 **取值范围**： 不涉及。
    * sourceCodehubUrl  **参数解释**： 源Repo代码仓地址。 **取值范围**： 不涉及。
    * sourceCodehubHttpUrl  **参数解释**： 源Repo代码仓http地址。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'action' => null,
        'buildType' => null,
        'commitId' => null,
        'eventType' => null,
        'mergeId' => null,
        'message' => null,
        'sourceBranch' => null,
        'tag' => null,
        'targetBranch' => null,
        'codehubId' => null,
        'sourceCodehubId' => null,
        'sourceCodehubUrl' => null,
        'sourceCodehubHttpUrl' => null
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
    * action  **参数解释**： 合并请求事件类型 **取值范围**： - open：打开。 - reopen：重开。 - update：更新。 - merge：合并。
    * buildType  **参数解释**： 基于分支还是tag运行。 **取值范围**： - branch：分支触发。 - tag：标签触发。
    * commitId  **参数解释**： 代码仓提交ID。 **取值范围**： 不涉及。
    * eventType  **参数解释**： CodeArts项目ID。 **取值范围**： - Manual：手动触发。 - Scheduler：定时任务。 - MR：MR触发。 - Push：Push事件触发。 - CreateTag：Tag事件触发。 - Issue：Issue触发。 - Note：评论触发。
    * mergeId  **参数解释**： 合并请求ID。 **取值范围**： 不涉及。
    * message  **参数解释**： 代码仓提交信息。 **取值范围**： 不涉及。
    * sourceBranch  **参数解释**： 源分支。 **取值范围**： 不涉及。
    * tag  **参数解释**： 标签。 **取值范围**： 不涉及。
    * targetBranch  **参数解释**： 目标分支。 **取值范围**： 不涉及。
    * codehubId  **参数解释**： Repo代码仓ID。 **取值范围**： 不涉及。
    * sourceCodehubId  **参数解释**： 源Repo代码仓ID。 **取值范围**： 不涉及。
    * sourceCodehubUrl  **参数解释**： 源Repo代码仓地址。 **取值范围**： 不涉及。
    * sourceCodehubHttpUrl  **参数解释**： 源Repo代码仓http地址。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'action' => 'action',
            'buildType' => 'build_type',
            'commitId' => 'commit_id',
            'eventType' => 'event_type',
            'mergeId' => 'merge_id',
            'message' => 'message',
            'sourceBranch' => 'source_branch',
            'tag' => 'tag',
            'targetBranch' => 'target_branch',
            'codehubId' => 'codehub_id',
            'sourceCodehubId' => 'source_codehub_id',
            'sourceCodehubUrl' => 'source_codehub_url',
            'sourceCodehubHttpUrl' => 'source_codehub_http_url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * action  **参数解释**： 合并请求事件类型 **取值范围**： - open：打开。 - reopen：重开。 - update：更新。 - merge：合并。
    * buildType  **参数解释**： 基于分支还是tag运行。 **取值范围**： - branch：分支触发。 - tag：标签触发。
    * commitId  **参数解释**： 代码仓提交ID。 **取值范围**： 不涉及。
    * eventType  **参数解释**： CodeArts项目ID。 **取值范围**： - Manual：手动触发。 - Scheduler：定时任务。 - MR：MR触发。 - Push：Push事件触发。 - CreateTag：Tag事件触发。 - Issue：Issue触发。 - Note：评论触发。
    * mergeId  **参数解释**： 合并请求ID。 **取值范围**： 不涉及。
    * message  **参数解释**： 代码仓提交信息。 **取值范围**： 不涉及。
    * sourceBranch  **参数解释**： 源分支。 **取值范围**： 不涉及。
    * tag  **参数解释**： 标签。 **取值范围**： 不涉及。
    * targetBranch  **参数解释**： 目标分支。 **取值范围**： 不涉及。
    * codehubId  **参数解释**： Repo代码仓ID。 **取值范围**： 不涉及。
    * sourceCodehubId  **参数解释**： 源Repo代码仓ID。 **取值范围**： 不涉及。
    * sourceCodehubUrl  **参数解释**： 源Repo代码仓地址。 **取值范围**： 不涉及。
    * sourceCodehubHttpUrl  **参数解释**： 源Repo代码仓http地址。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'action' => 'setAction',
            'buildType' => 'setBuildType',
            'commitId' => 'setCommitId',
            'eventType' => 'setEventType',
            'mergeId' => 'setMergeId',
            'message' => 'setMessage',
            'sourceBranch' => 'setSourceBranch',
            'tag' => 'setTag',
            'targetBranch' => 'setTargetBranch',
            'codehubId' => 'setCodehubId',
            'sourceCodehubId' => 'setSourceCodehubId',
            'sourceCodehubUrl' => 'setSourceCodehubUrl',
            'sourceCodehubHttpUrl' => 'setSourceCodehubHttpUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * action  **参数解释**： 合并请求事件类型 **取值范围**： - open：打开。 - reopen：重开。 - update：更新。 - merge：合并。
    * buildType  **参数解释**： 基于分支还是tag运行。 **取值范围**： - branch：分支触发。 - tag：标签触发。
    * commitId  **参数解释**： 代码仓提交ID。 **取值范围**： 不涉及。
    * eventType  **参数解释**： CodeArts项目ID。 **取值范围**： - Manual：手动触发。 - Scheduler：定时任务。 - MR：MR触发。 - Push：Push事件触发。 - CreateTag：Tag事件触发。 - Issue：Issue触发。 - Note：评论触发。
    * mergeId  **参数解释**： 合并请求ID。 **取值范围**： 不涉及。
    * message  **参数解释**： 代码仓提交信息。 **取值范围**： 不涉及。
    * sourceBranch  **参数解释**： 源分支。 **取值范围**： 不涉及。
    * tag  **参数解释**： 标签。 **取值范围**： 不涉及。
    * targetBranch  **参数解释**： 目标分支。 **取值范围**： 不涉及。
    * codehubId  **参数解释**： Repo代码仓ID。 **取值范围**： 不涉及。
    * sourceCodehubId  **参数解释**： 源Repo代码仓ID。 **取值范围**： 不涉及。
    * sourceCodehubUrl  **参数解释**： 源Repo代码仓地址。 **取值范围**： 不涉及。
    * sourceCodehubHttpUrl  **参数解释**： 源Repo代码仓http地址。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'action' => 'getAction',
            'buildType' => 'getBuildType',
            'commitId' => 'getCommitId',
            'eventType' => 'getEventType',
            'mergeId' => 'getMergeId',
            'message' => 'getMessage',
            'sourceBranch' => 'getSourceBranch',
            'tag' => 'getTag',
            'targetBranch' => 'getTargetBranch',
            'codehubId' => 'getCodehubId',
            'sourceCodehubId' => 'getSourceCodehubId',
            'sourceCodehubUrl' => 'getSourceCodehubUrl',
            'sourceCodehubHttpUrl' => 'getSourceCodehubHttpUrl'
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
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['buildType'] = isset($data['buildType']) ? $data['buildType'] : null;
        $this->container['commitId'] = isset($data['commitId']) ? $data['commitId'] : null;
        $this->container['eventType'] = isset($data['eventType']) ? $data['eventType'] : null;
        $this->container['mergeId'] = isset($data['mergeId']) ? $data['mergeId'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['sourceBranch'] = isset($data['sourceBranch']) ? $data['sourceBranch'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['targetBranch'] = isset($data['targetBranch']) ? $data['targetBranch'] : null;
        $this->container['codehubId'] = isset($data['codehubId']) ? $data['codehubId'] : null;
        $this->container['sourceCodehubId'] = isset($data['sourceCodehubId']) ? $data['sourceCodehubId'] : null;
        $this->container['sourceCodehubUrl'] = isset($data['sourceCodehubUrl']) ? $data['sourceCodehubUrl'] : null;
        $this->container['sourceCodehubHttpUrl'] = isset($data['sourceCodehubHttpUrl']) ? $data['sourceCodehubHttpUrl'] : null;
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
    * Gets action
    *  **参数解释**： 合并请求事件类型 **取值范围**： - open：打开。 - reopen：重开。 - update：更新。 - merge：合并。
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
    * @param string|null $action **参数解释**： 合并请求事件类型 **取值范围**： - open：打开。 - reopen：重开。 - update：更新。 - merge：合并。
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets buildType
    *  **参数解释**： 基于分支还是tag运行。 **取值范围**： - branch：分支触发。 - tag：标签触发。
    *
    * @return string|null
    */
    public function getBuildType()
    {
        return $this->container['buildType'];
    }

    /**
    * Sets buildType
    *
    * @param string|null $buildType **参数解释**： 基于分支还是tag运行。 **取值范围**： - branch：分支触发。 - tag：标签触发。
    *
    * @return $this
    */
    public function setBuildType($buildType)
    {
        $this->container['buildType'] = $buildType;
        return $this;
    }

    /**
    * Gets commitId
    *  **参数解释**： 代码仓提交ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getCommitId()
    {
        return $this->container['commitId'];
    }

    /**
    * Sets commitId
    *
    * @param string|null $commitId **参数解释**： 代码仓提交ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCommitId($commitId)
    {
        $this->container['commitId'] = $commitId;
        return $this;
    }

    /**
    * Gets eventType
    *  **参数解释**： CodeArts项目ID。 **取值范围**： - Manual：手动触发。 - Scheduler：定时任务。 - MR：MR触发。 - Push：Push事件触发。 - CreateTag：Tag事件触发。 - Issue：Issue触发。 - Note：评论触发。
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
    * @param string|null $eventType **参数解释**： CodeArts项目ID。 **取值范围**： - Manual：手动触发。 - Scheduler：定时任务。 - MR：MR触发。 - Push：Push事件触发。 - CreateTag：Tag事件触发。 - Issue：Issue触发。 - Note：评论触发。
    *
    * @return $this
    */
    public function setEventType($eventType)
    {
        $this->container['eventType'] = $eventType;
        return $this;
    }

    /**
    * Gets mergeId
    *  **参数解释**： 合并请求ID。 **取值范围**： 不涉及。
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
    * @param string|null $mergeId **参数解释**： 合并请求ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setMergeId($mergeId)
    {
        $this->container['mergeId'] = $mergeId;
        return $this;
    }

    /**
    * Gets message
    *  **参数解释**： 代码仓提交信息。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message **参数解释**： 代码仓提交信息。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets sourceBranch
    *  **参数解释**： 源分支。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getSourceBranch()
    {
        return $this->container['sourceBranch'];
    }

    /**
    * Sets sourceBranch
    *
    * @param string|null $sourceBranch **参数解释**： 源分支。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setSourceBranch($sourceBranch)
    {
        $this->container['sourceBranch'] = $sourceBranch;
        return $this;
    }

    /**
    * Gets tag
    *  **参数解释**： 标签。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
    * Sets tag
    *
    * @param string|null $tag **参数解释**： 标签。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;
        return $this;
    }

    /**
    * Gets targetBranch
    *  **参数解释**： 目标分支。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getTargetBranch()
    {
        return $this->container['targetBranch'];
    }

    /**
    * Sets targetBranch
    *
    * @param string|null $targetBranch **参数解释**： 目标分支。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setTargetBranch($targetBranch)
    {
        $this->container['targetBranch'] = $targetBranch;
        return $this;
    }

    /**
    * Gets codehubId
    *  **参数解释**： Repo代码仓ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getCodehubId()
    {
        return $this->container['codehubId'];
    }

    /**
    * Sets codehubId
    *
    * @param string|null $codehubId **参数解释**： Repo代码仓ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCodehubId($codehubId)
    {
        $this->container['codehubId'] = $codehubId;
        return $this;
    }

    /**
    * Gets sourceCodehubId
    *  **参数解释**： 源Repo代码仓ID。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getSourceCodehubId()
    {
        return $this->container['sourceCodehubId'];
    }

    /**
    * Sets sourceCodehubId
    *
    * @param string|null $sourceCodehubId **参数解释**： 源Repo代码仓ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setSourceCodehubId($sourceCodehubId)
    {
        $this->container['sourceCodehubId'] = $sourceCodehubId;
        return $this;
    }

    /**
    * Gets sourceCodehubUrl
    *  **参数解释**： 源Repo代码仓地址。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getSourceCodehubUrl()
    {
        return $this->container['sourceCodehubUrl'];
    }

    /**
    * Sets sourceCodehubUrl
    *
    * @param string|null $sourceCodehubUrl **参数解释**： 源Repo代码仓地址。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setSourceCodehubUrl($sourceCodehubUrl)
    {
        $this->container['sourceCodehubUrl'] = $sourceCodehubUrl;
        return $this;
    }

    /**
    * Gets sourceCodehubHttpUrl
    *  **参数解释**： 源Repo代码仓http地址。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getSourceCodehubHttpUrl()
    {
        return $this->container['sourceCodehubHttpUrl'];
    }

    /**
    * Sets sourceCodehubHttpUrl
    *
    * @param string|null $sourceCodehubHttpUrl **参数解释**： 源Repo代码仓http地址。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setSourceCodehubHttpUrl($sourceCodehubHttpUrl)
    {
        $this->container['sourceCodehubHttpUrl'] = $sourceCodehubHttpUrl;
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

