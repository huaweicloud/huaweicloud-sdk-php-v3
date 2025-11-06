<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RepoHook implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RepoHook';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * buildEvents  是否触发build_events事件
    * createdAt  仓库统计创建的时间
    * enableSslVerification  是否使用ssl验证
    * id  hook id
    * issuesEvents  是否触发issues_events事件
    * mergeRequestsEvents  是否触发merge_requests_events事件
    * noteEvents  是否触发note_events事件
    * pipelineEvents  是否触发pipeline_events事件
    * projectId  仓库id
    * pushEvents  是否触发push_events事件
    * repositoryUpdateEvents  是否触发repository_update_events事件
    * tagPushEvents  是否触发tag_push_events事件
    * wikiPageEvents  是否触发wiki_page_events事件
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'buildEvents' => 'bool',
            'createdAt' => '\DateTime',
            'enableSslVerification' => 'bool',
            'id' => 'int',
            'issuesEvents' => 'bool',
            'mergeRequestsEvents' => 'bool',
            'noteEvents' => 'bool',
            'pipelineEvents' => 'bool',
            'projectId' => 'int',
            'pushEvents' => 'bool',
            'repositoryUpdateEvents' => 'bool',
            'tagPushEvents' => 'bool',
            'wikiPageEvents' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * buildEvents  是否触发build_events事件
    * createdAt  仓库统计创建的时间
    * enableSslVerification  是否使用ssl验证
    * id  hook id
    * issuesEvents  是否触发issues_events事件
    * mergeRequestsEvents  是否触发merge_requests_events事件
    * noteEvents  是否触发note_events事件
    * pipelineEvents  是否触发pipeline_events事件
    * projectId  仓库id
    * pushEvents  是否触发push_events事件
    * repositoryUpdateEvents  是否触发repository_update_events事件
    * tagPushEvents  是否触发tag_push_events事件
    * wikiPageEvents  是否触发wiki_page_events事件
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'buildEvents' => null,
        'createdAt' => 'date-time',
        'enableSslVerification' => null,
        'id' => 'int32',
        'issuesEvents' => null,
        'mergeRequestsEvents' => null,
        'noteEvents' => null,
        'pipelineEvents' => null,
        'projectId' => 'int32',
        'pushEvents' => null,
        'repositoryUpdateEvents' => null,
        'tagPushEvents' => null,
        'wikiPageEvents' => null
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
    * buildEvents  是否触发build_events事件
    * createdAt  仓库统计创建的时间
    * enableSslVerification  是否使用ssl验证
    * id  hook id
    * issuesEvents  是否触发issues_events事件
    * mergeRequestsEvents  是否触发merge_requests_events事件
    * noteEvents  是否触发note_events事件
    * pipelineEvents  是否触发pipeline_events事件
    * projectId  仓库id
    * pushEvents  是否触发push_events事件
    * repositoryUpdateEvents  是否触发repository_update_events事件
    * tagPushEvents  是否触发tag_push_events事件
    * wikiPageEvents  是否触发wiki_page_events事件
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'buildEvents' => 'build_events',
            'createdAt' => 'created_at',
            'enableSslVerification' => 'enable_ssl_verification',
            'id' => 'id',
            'issuesEvents' => 'issues_events',
            'mergeRequestsEvents' => 'merge_requests_events',
            'noteEvents' => 'note_events',
            'pipelineEvents' => 'pipeline_events',
            'projectId' => 'project_id',
            'pushEvents' => 'push_events',
            'repositoryUpdateEvents' => 'repository_update_events',
            'tagPushEvents' => 'tag_push_events',
            'wikiPageEvents' => 'wiki_page_events'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * buildEvents  是否触发build_events事件
    * createdAt  仓库统计创建的时间
    * enableSslVerification  是否使用ssl验证
    * id  hook id
    * issuesEvents  是否触发issues_events事件
    * mergeRequestsEvents  是否触发merge_requests_events事件
    * noteEvents  是否触发note_events事件
    * pipelineEvents  是否触发pipeline_events事件
    * projectId  仓库id
    * pushEvents  是否触发push_events事件
    * repositoryUpdateEvents  是否触发repository_update_events事件
    * tagPushEvents  是否触发tag_push_events事件
    * wikiPageEvents  是否触发wiki_page_events事件
    *
    * @var string[]
    */
    protected static $setters = [
            'buildEvents' => 'setBuildEvents',
            'createdAt' => 'setCreatedAt',
            'enableSslVerification' => 'setEnableSslVerification',
            'id' => 'setId',
            'issuesEvents' => 'setIssuesEvents',
            'mergeRequestsEvents' => 'setMergeRequestsEvents',
            'noteEvents' => 'setNoteEvents',
            'pipelineEvents' => 'setPipelineEvents',
            'projectId' => 'setProjectId',
            'pushEvents' => 'setPushEvents',
            'repositoryUpdateEvents' => 'setRepositoryUpdateEvents',
            'tagPushEvents' => 'setTagPushEvents',
            'wikiPageEvents' => 'setWikiPageEvents'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * buildEvents  是否触发build_events事件
    * createdAt  仓库统计创建的时间
    * enableSslVerification  是否使用ssl验证
    * id  hook id
    * issuesEvents  是否触发issues_events事件
    * mergeRequestsEvents  是否触发merge_requests_events事件
    * noteEvents  是否触发note_events事件
    * pipelineEvents  是否触发pipeline_events事件
    * projectId  仓库id
    * pushEvents  是否触发push_events事件
    * repositoryUpdateEvents  是否触发repository_update_events事件
    * tagPushEvents  是否触发tag_push_events事件
    * wikiPageEvents  是否触发wiki_page_events事件
    *
    * @var string[]
    */
    protected static $getters = [
            'buildEvents' => 'getBuildEvents',
            'createdAt' => 'getCreatedAt',
            'enableSslVerification' => 'getEnableSslVerification',
            'id' => 'getId',
            'issuesEvents' => 'getIssuesEvents',
            'mergeRequestsEvents' => 'getMergeRequestsEvents',
            'noteEvents' => 'getNoteEvents',
            'pipelineEvents' => 'getPipelineEvents',
            'projectId' => 'getProjectId',
            'pushEvents' => 'getPushEvents',
            'repositoryUpdateEvents' => 'getRepositoryUpdateEvents',
            'tagPushEvents' => 'getTagPushEvents',
            'wikiPageEvents' => 'getWikiPageEvents'
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
        $this->container['buildEvents'] = isset($data['buildEvents']) ? $data['buildEvents'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['enableSslVerification'] = isset($data['enableSslVerification']) ? $data['enableSslVerification'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['issuesEvents'] = isset($data['issuesEvents']) ? $data['issuesEvents'] : null;
        $this->container['mergeRequestsEvents'] = isset($data['mergeRequestsEvents']) ? $data['mergeRequestsEvents'] : null;
        $this->container['noteEvents'] = isset($data['noteEvents']) ? $data['noteEvents'] : null;
        $this->container['pipelineEvents'] = isset($data['pipelineEvents']) ? $data['pipelineEvents'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['pushEvents'] = isset($data['pushEvents']) ? $data['pushEvents'] : null;
        $this->container['repositoryUpdateEvents'] = isset($data['repositoryUpdateEvents']) ? $data['repositoryUpdateEvents'] : null;
        $this->container['tagPushEvents'] = isset($data['tagPushEvents']) ? $data['tagPushEvents'] : null;
        $this->container['wikiPageEvents'] = isset($data['wikiPageEvents']) ? $data['wikiPageEvents'] : null;
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
    * Gets buildEvents
    *  是否触发build_events事件
    *
    * @return bool|null
    */
    public function getBuildEvents()
    {
        return $this->container['buildEvents'];
    }

    /**
    * Sets buildEvents
    *
    * @param bool|null $buildEvents 是否触发build_events事件
    *
    * @return $this
    */
    public function setBuildEvents($buildEvents)
    {
        $this->container['buildEvents'] = $buildEvents;
        return $this;
    }

    /**
    * Gets createdAt
    *  仓库统计创建的时间
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
    * @param \DateTime|null $createdAt 仓库统计创建的时间
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets enableSslVerification
    *  是否使用ssl验证
    *
    * @return bool|null
    */
    public function getEnableSslVerification()
    {
        return $this->container['enableSslVerification'];
    }

    /**
    * Sets enableSslVerification
    *
    * @param bool|null $enableSslVerification 是否使用ssl验证
    *
    * @return $this
    */
    public function setEnableSslVerification($enableSslVerification)
    {
        $this->container['enableSslVerification'] = $enableSslVerification;
        return $this;
    }

    /**
    * Gets id
    *  hook id
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id hook id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets issuesEvents
    *  是否触发issues_events事件
    *
    * @return bool|null
    */
    public function getIssuesEvents()
    {
        return $this->container['issuesEvents'];
    }

    /**
    * Sets issuesEvents
    *
    * @param bool|null $issuesEvents 是否触发issues_events事件
    *
    * @return $this
    */
    public function setIssuesEvents($issuesEvents)
    {
        $this->container['issuesEvents'] = $issuesEvents;
        return $this;
    }

    /**
    * Gets mergeRequestsEvents
    *  是否触发merge_requests_events事件
    *
    * @return bool|null
    */
    public function getMergeRequestsEvents()
    {
        return $this->container['mergeRequestsEvents'];
    }

    /**
    * Sets mergeRequestsEvents
    *
    * @param bool|null $mergeRequestsEvents 是否触发merge_requests_events事件
    *
    * @return $this
    */
    public function setMergeRequestsEvents($mergeRequestsEvents)
    {
        $this->container['mergeRequestsEvents'] = $mergeRequestsEvents;
        return $this;
    }

    /**
    * Gets noteEvents
    *  是否触发note_events事件
    *
    * @return bool|null
    */
    public function getNoteEvents()
    {
        return $this->container['noteEvents'];
    }

    /**
    * Sets noteEvents
    *
    * @param bool|null $noteEvents 是否触发note_events事件
    *
    * @return $this
    */
    public function setNoteEvents($noteEvents)
    {
        $this->container['noteEvents'] = $noteEvents;
        return $this;
    }

    /**
    * Gets pipelineEvents
    *  是否触发pipeline_events事件
    *
    * @return bool|null
    */
    public function getPipelineEvents()
    {
        return $this->container['pipelineEvents'];
    }

    /**
    * Sets pipelineEvents
    *
    * @param bool|null $pipelineEvents 是否触发pipeline_events事件
    *
    * @return $this
    */
    public function setPipelineEvents($pipelineEvents)
    {
        $this->container['pipelineEvents'] = $pipelineEvents;
        return $this;
    }

    /**
    * Gets projectId
    *  仓库id
    *
    * @return int|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param int|null $projectId 仓库id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets pushEvents
    *  是否触发push_events事件
    *
    * @return bool|null
    */
    public function getPushEvents()
    {
        return $this->container['pushEvents'];
    }

    /**
    * Sets pushEvents
    *
    * @param bool|null $pushEvents 是否触发push_events事件
    *
    * @return $this
    */
    public function setPushEvents($pushEvents)
    {
        $this->container['pushEvents'] = $pushEvents;
        return $this;
    }

    /**
    * Gets repositoryUpdateEvents
    *  是否触发repository_update_events事件
    *
    * @return bool|null
    */
    public function getRepositoryUpdateEvents()
    {
        return $this->container['repositoryUpdateEvents'];
    }

    /**
    * Sets repositoryUpdateEvents
    *
    * @param bool|null $repositoryUpdateEvents 是否触发repository_update_events事件
    *
    * @return $this
    */
    public function setRepositoryUpdateEvents($repositoryUpdateEvents)
    {
        $this->container['repositoryUpdateEvents'] = $repositoryUpdateEvents;
        return $this;
    }

    /**
    * Gets tagPushEvents
    *  是否触发tag_push_events事件
    *
    * @return bool|null
    */
    public function getTagPushEvents()
    {
        return $this->container['tagPushEvents'];
    }

    /**
    * Sets tagPushEvents
    *
    * @param bool|null $tagPushEvents 是否触发tag_push_events事件
    *
    * @return $this
    */
    public function setTagPushEvents($tagPushEvents)
    {
        $this->container['tagPushEvents'] = $tagPushEvents;
        return $this;
    }

    /**
    * Gets wikiPageEvents
    *  是否触发wiki_page_events事件
    *
    * @return bool|null
    */
    public function getWikiPageEvents()
    {
        return $this->container['wikiPageEvents'];
    }

    /**
    * Sets wikiPageEvents
    *
    * @param bool|null $wikiPageEvents 是否触发wiki_page_events事件
    *
    * @return $this
    */
    public function setWikiPageEvents($wikiPageEvents)
    {
        $this->container['wikiPageEvents'] = $wikiPageEvents;
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

