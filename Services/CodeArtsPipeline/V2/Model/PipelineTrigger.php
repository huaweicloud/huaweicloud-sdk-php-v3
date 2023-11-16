<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PipelineTrigger implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PipelineTrigger';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * pipelineId  流水线ID
    * gitUrl  git链接
    * gitType  代码仓类型
    * isAutoCommit  是否自动提交
    * events  事件
    * hookId  回调id
    * repoId  仓库id
    * endpointId  扩展点id
    * callbackUrl  回调链接
    * securityToken  用户token
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'pipelineId' => 'string',
            'gitUrl' => 'string',
            'gitType' => 'string',
            'isAutoCommit' => 'bool',
            'events' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\CodeEvent[]',
            'hookId' => 'string',
            'repoId' => 'string',
            'endpointId' => 'string',
            'callbackUrl' => 'string',
            'securityToken' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * pipelineId  流水线ID
    * gitUrl  git链接
    * gitType  代码仓类型
    * isAutoCommit  是否自动提交
    * events  事件
    * hookId  回调id
    * repoId  仓库id
    * endpointId  扩展点id
    * callbackUrl  回调链接
    * securityToken  用户token
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'pipelineId' => null,
        'gitUrl' => null,
        'gitType' => null,
        'isAutoCommit' => null,
        'events' => null,
        'hookId' => null,
        'repoId' => null,
        'endpointId' => null,
        'callbackUrl' => null,
        'securityToken' => null
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
    * pipelineId  流水线ID
    * gitUrl  git链接
    * gitType  代码仓类型
    * isAutoCommit  是否自动提交
    * events  事件
    * hookId  回调id
    * repoId  仓库id
    * endpointId  扩展点id
    * callbackUrl  回调链接
    * securityToken  用户token
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'pipelineId' => 'pipeline_id',
            'gitUrl' => 'git_url',
            'gitType' => 'git_type',
            'isAutoCommit' => 'is_auto_commit',
            'events' => 'events',
            'hookId' => 'hook_id',
            'repoId' => 'repo_id',
            'endpointId' => 'endpoint_id',
            'callbackUrl' => 'callback_url',
            'securityToken' => 'security_token'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * pipelineId  流水线ID
    * gitUrl  git链接
    * gitType  代码仓类型
    * isAutoCommit  是否自动提交
    * events  事件
    * hookId  回调id
    * repoId  仓库id
    * endpointId  扩展点id
    * callbackUrl  回调链接
    * securityToken  用户token
    *
    * @var string[]
    */
    protected static $setters = [
            'pipelineId' => 'setPipelineId',
            'gitUrl' => 'setGitUrl',
            'gitType' => 'setGitType',
            'isAutoCommit' => 'setIsAutoCommit',
            'events' => 'setEvents',
            'hookId' => 'setHookId',
            'repoId' => 'setRepoId',
            'endpointId' => 'setEndpointId',
            'callbackUrl' => 'setCallbackUrl',
            'securityToken' => 'setSecurityToken'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * pipelineId  流水线ID
    * gitUrl  git链接
    * gitType  代码仓类型
    * isAutoCommit  是否自动提交
    * events  事件
    * hookId  回调id
    * repoId  仓库id
    * endpointId  扩展点id
    * callbackUrl  回调链接
    * securityToken  用户token
    *
    * @var string[]
    */
    protected static $getters = [
            'pipelineId' => 'getPipelineId',
            'gitUrl' => 'getGitUrl',
            'gitType' => 'getGitType',
            'isAutoCommit' => 'getIsAutoCommit',
            'events' => 'getEvents',
            'hookId' => 'getHookId',
            'repoId' => 'getRepoId',
            'endpointId' => 'getEndpointId',
            'callbackUrl' => 'getCallbackUrl',
            'securityToken' => 'getSecurityToken'
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
        $this->container['pipelineId'] = isset($data['pipelineId']) ? $data['pipelineId'] : null;
        $this->container['gitUrl'] = isset($data['gitUrl']) ? $data['gitUrl'] : null;
        $this->container['gitType'] = isset($data['gitType']) ? $data['gitType'] : null;
        $this->container['isAutoCommit'] = isset($data['isAutoCommit']) ? $data['isAutoCommit'] : null;
        $this->container['events'] = isset($data['events']) ? $data['events'] : null;
        $this->container['hookId'] = isset($data['hookId']) ? $data['hookId'] : null;
        $this->container['repoId'] = isset($data['repoId']) ? $data['repoId'] : null;
        $this->container['endpointId'] = isset($data['endpointId']) ? $data['endpointId'] : null;
        $this->container['callbackUrl'] = isset($data['callbackUrl']) ? $data['callbackUrl'] : null;
        $this->container['securityToken'] = isset($data['securityToken']) ? $data['securityToken'] : null;
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
    * Gets pipelineId
    *  流水线ID
    *
    * @return string|null
    */
    public function getPipelineId()
    {
        return $this->container['pipelineId'];
    }

    /**
    * Sets pipelineId
    *
    * @param string|null $pipelineId 流水线ID
    *
    * @return $this
    */
    public function setPipelineId($pipelineId)
    {
        $this->container['pipelineId'] = $pipelineId;
        return $this;
    }

    /**
    * Gets gitUrl
    *  git链接
    *
    * @return string|null
    */
    public function getGitUrl()
    {
        return $this->container['gitUrl'];
    }

    /**
    * Sets gitUrl
    *
    * @param string|null $gitUrl git链接
    *
    * @return $this
    */
    public function setGitUrl($gitUrl)
    {
        $this->container['gitUrl'] = $gitUrl;
        return $this;
    }

    /**
    * Gets gitType
    *  代码仓类型
    *
    * @return string|null
    */
    public function getGitType()
    {
        return $this->container['gitType'];
    }

    /**
    * Sets gitType
    *
    * @param string|null $gitType 代码仓类型
    *
    * @return $this
    */
    public function setGitType($gitType)
    {
        $this->container['gitType'] = $gitType;
        return $this;
    }

    /**
    * Gets isAutoCommit
    *  是否自动提交
    *
    * @return bool|null
    */
    public function getIsAutoCommit()
    {
        return $this->container['isAutoCommit'];
    }

    /**
    * Sets isAutoCommit
    *
    * @param bool|null $isAutoCommit 是否自动提交
    *
    * @return $this
    */
    public function setIsAutoCommit($isAutoCommit)
    {
        $this->container['isAutoCommit'] = $isAutoCommit;
        return $this;
    }

    /**
    * Gets events
    *  事件
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\CodeEvent[]|null
    */
    public function getEvents()
    {
        return $this->container['events'];
    }

    /**
    * Sets events
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\CodeEvent[]|null $events 事件
    *
    * @return $this
    */
    public function setEvents($events)
    {
        $this->container['events'] = $events;
        return $this;
    }

    /**
    * Gets hookId
    *  回调id
    *
    * @return string|null
    */
    public function getHookId()
    {
        return $this->container['hookId'];
    }

    /**
    * Sets hookId
    *
    * @param string|null $hookId 回调id
    *
    * @return $this
    */
    public function setHookId($hookId)
    {
        $this->container['hookId'] = $hookId;
        return $this;
    }

    /**
    * Gets repoId
    *  仓库id
    *
    * @return string|null
    */
    public function getRepoId()
    {
        return $this->container['repoId'];
    }

    /**
    * Sets repoId
    *
    * @param string|null $repoId 仓库id
    *
    * @return $this
    */
    public function setRepoId($repoId)
    {
        $this->container['repoId'] = $repoId;
        return $this;
    }

    /**
    * Gets endpointId
    *  扩展点id
    *
    * @return string|null
    */
    public function getEndpointId()
    {
        return $this->container['endpointId'];
    }

    /**
    * Sets endpointId
    *
    * @param string|null $endpointId 扩展点id
    *
    * @return $this
    */
    public function setEndpointId($endpointId)
    {
        $this->container['endpointId'] = $endpointId;
        return $this;
    }

    /**
    * Gets callbackUrl
    *  回调链接
    *
    * @return string|null
    */
    public function getCallbackUrl()
    {
        return $this->container['callbackUrl'];
    }

    /**
    * Sets callbackUrl
    *
    * @param string|null $callbackUrl 回调链接
    *
    * @return $this
    */
    public function setCallbackUrl($callbackUrl)
    {
        $this->container['callbackUrl'] = $callbackUrl;
        return $this;
    }

    /**
    * Gets securityToken
    *  用户token
    *
    * @return string|null
    */
    public function getSecurityToken()
    {
        return $this->container['securityToken'];
    }

    /**
    * Sets securityToken
    *
    * @param string|null $securityToken 用户token
    *
    * @return $this
    */
    public function setSecurityToken($securityToken)
    {
        $this->container['securityToken'] = $securityToken;
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

