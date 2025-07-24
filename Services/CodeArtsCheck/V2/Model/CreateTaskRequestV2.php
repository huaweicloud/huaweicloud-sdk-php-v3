<?php

namespace HuaweiCloud\SDK\CodeArtsCheck\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateTaskRequestV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateTaskRequestV2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * checkType  检查类型，数组格式，默认为source
    * gitUrl  仓库地址
    * gitBranch  仓库分支
    * language  检查语言，数组格式，支持cpp,java,js,python,php,css,html,go,typescript,csharp
    * ruleSets  指定规则集
    * taskType  检查类型，支持full/inc两种类型，full表示全量检查，inc表示mr检查
    * username  仓库有权限的用户名
    * accessToken  仓库有权限的用户token
    * endpointId  仓库有权限的用户endpointId
    * incConfig  incConfig
    * enableFossbot  是否打开fossbot检查,默认不开
    * resourcePoolId  资源池id，可以从资源池管理页面获取
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'checkType' => 'string[]',
            'gitUrl' => 'string',
            'gitBranch' => 'string',
            'language' => 'string[]',
            'ruleSets' => '\HuaweiCloud\SDK\CodeArtsCheck\V2\Model\RuleSetV2[]',
            'taskType' => 'string',
            'username' => 'string',
            'accessToken' => 'string',
            'endpointId' => 'string',
            'incConfig' => '\HuaweiCloud\SDK\CodeArtsCheck\V2\Model\IncConfigV2',
            'enableFossbot' => 'bool',
            'resourcePoolId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * checkType  检查类型，数组格式，默认为source
    * gitUrl  仓库地址
    * gitBranch  仓库分支
    * language  检查语言，数组格式，支持cpp,java,js,python,php,css,html,go,typescript,csharp
    * ruleSets  指定规则集
    * taskType  检查类型，支持full/inc两种类型，full表示全量检查，inc表示mr检查
    * username  仓库有权限的用户名
    * accessToken  仓库有权限的用户token
    * endpointId  仓库有权限的用户endpointId
    * incConfig  incConfig
    * enableFossbot  是否打开fossbot检查,默认不开
    * resourcePoolId  资源池id，可以从资源池管理页面获取
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'checkType' => null,
        'gitUrl' => null,
        'gitBranch' => null,
        'language' => null,
        'ruleSets' => null,
        'taskType' => null,
        'username' => null,
        'accessToken' => null,
        'endpointId' => null,
        'incConfig' => null,
        'enableFossbot' => null,
        'resourcePoolId' => null
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
    * checkType  检查类型，数组格式，默认为source
    * gitUrl  仓库地址
    * gitBranch  仓库分支
    * language  检查语言，数组格式，支持cpp,java,js,python,php,css,html,go,typescript,csharp
    * ruleSets  指定规则集
    * taskType  检查类型，支持full/inc两种类型，full表示全量检查，inc表示mr检查
    * username  仓库有权限的用户名
    * accessToken  仓库有权限的用户token
    * endpointId  仓库有权限的用户endpointId
    * incConfig  incConfig
    * enableFossbot  是否打开fossbot检查,默认不开
    * resourcePoolId  资源池id，可以从资源池管理页面获取
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'checkType' => 'check_type',
            'gitUrl' => 'git_url',
            'gitBranch' => 'git_branch',
            'language' => 'language',
            'ruleSets' => 'rule_sets',
            'taskType' => 'task_type',
            'username' => 'username',
            'accessToken' => 'access_token',
            'endpointId' => 'endpoint_id',
            'incConfig' => 'inc_config',
            'enableFossbot' => 'enable_fossbot',
            'resourcePoolId' => 'resource_pool_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * checkType  检查类型，数组格式，默认为source
    * gitUrl  仓库地址
    * gitBranch  仓库分支
    * language  检查语言，数组格式，支持cpp,java,js,python,php,css,html,go,typescript,csharp
    * ruleSets  指定规则集
    * taskType  检查类型，支持full/inc两种类型，full表示全量检查，inc表示mr检查
    * username  仓库有权限的用户名
    * accessToken  仓库有权限的用户token
    * endpointId  仓库有权限的用户endpointId
    * incConfig  incConfig
    * enableFossbot  是否打开fossbot检查,默认不开
    * resourcePoolId  资源池id，可以从资源池管理页面获取
    *
    * @var string[]
    */
    protected static $setters = [
            'checkType' => 'setCheckType',
            'gitUrl' => 'setGitUrl',
            'gitBranch' => 'setGitBranch',
            'language' => 'setLanguage',
            'ruleSets' => 'setRuleSets',
            'taskType' => 'setTaskType',
            'username' => 'setUsername',
            'accessToken' => 'setAccessToken',
            'endpointId' => 'setEndpointId',
            'incConfig' => 'setIncConfig',
            'enableFossbot' => 'setEnableFossbot',
            'resourcePoolId' => 'setResourcePoolId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * checkType  检查类型，数组格式，默认为source
    * gitUrl  仓库地址
    * gitBranch  仓库分支
    * language  检查语言，数组格式，支持cpp,java,js,python,php,css,html,go,typescript,csharp
    * ruleSets  指定规则集
    * taskType  检查类型，支持full/inc两种类型，full表示全量检查，inc表示mr检查
    * username  仓库有权限的用户名
    * accessToken  仓库有权限的用户token
    * endpointId  仓库有权限的用户endpointId
    * incConfig  incConfig
    * enableFossbot  是否打开fossbot检查,默认不开
    * resourcePoolId  资源池id，可以从资源池管理页面获取
    *
    * @var string[]
    */
    protected static $getters = [
            'checkType' => 'getCheckType',
            'gitUrl' => 'getGitUrl',
            'gitBranch' => 'getGitBranch',
            'language' => 'getLanguage',
            'ruleSets' => 'getRuleSets',
            'taskType' => 'getTaskType',
            'username' => 'getUsername',
            'accessToken' => 'getAccessToken',
            'endpointId' => 'getEndpointId',
            'incConfig' => 'getIncConfig',
            'enableFossbot' => 'getEnableFossbot',
            'resourcePoolId' => 'getResourcePoolId'
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
        $this->container['checkType'] = isset($data['checkType']) ? $data['checkType'] : null;
        $this->container['gitUrl'] = isset($data['gitUrl']) ? $data['gitUrl'] : null;
        $this->container['gitBranch'] = isset($data['gitBranch']) ? $data['gitBranch'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['ruleSets'] = isset($data['ruleSets']) ? $data['ruleSets'] : null;
        $this->container['taskType'] = isset($data['taskType']) ? $data['taskType'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['accessToken'] = isset($data['accessToken']) ? $data['accessToken'] : null;
        $this->container['endpointId'] = isset($data['endpointId']) ? $data['endpointId'] : null;
        $this->container['incConfig'] = isset($data['incConfig']) ? $data['incConfig'] : null;
        $this->container['enableFossbot'] = isset($data['enableFossbot']) ? $data['enableFossbot'] : null;
        $this->container['resourcePoolId'] = isset($data['resourcePoolId']) ? $data['resourcePoolId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['gitUrl'] === null) {
            $invalidProperties[] = "'gitUrl' can't be null";
        }
        if ($this->container['gitBranch'] === null) {
            $invalidProperties[] = "'gitBranch' can't be null";
        }
        if ($this->container['language'] === null) {
            $invalidProperties[] = "'language' can't be null";
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
    * Gets checkType
    *  检查类型，数组格式，默认为source
    *
    * @return string[]|null
    */
    public function getCheckType()
    {
        return $this->container['checkType'];
    }

    /**
    * Sets checkType
    *
    * @param string[]|null $checkType 检查类型，数组格式，默认为source
    *
    * @return $this
    */
    public function setCheckType($checkType)
    {
        $this->container['checkType'] = $checkType;
        return $this;
    }

    /**
    * Gets gitUrl
    *  仓库地址
    *
    * @return string
    */
    public function getGitUrl()
    {
        return $this->container['gitUrl'];
    }

    /**
    * Sets gitUrl
    *
    * @param string $gitUrl 仓库地址
    *
    * @return $this
    */
    public function setGitUrl($gitUrl)
    {
        $this->container['gitUrl'] = $gitUrl;
        return $this;
    }

    /**
    * Gets gitBranch
    *  仓库分支
    *
    * @return string
    */
    public function getGitBranch()
    {
        return $this->container['gitBranch'];
    }

    /**
    * Sets gitBranch
    *
    * @param string $gitBranch 仓库分支
    *
    * @return $this
    */
    public function setGitBranch($gitBranch)
    {
        $this->container['gitBranch'] = $gitBranch;
        return $this;
    }

    /**
    * Gets language
    *  检查语言，数组格式，支持cpp,java,js,python,php,css,html,go,typescript,csharp
    *
    * @return string[]
    */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
    * Sets language
    *
    * @param string[] $language 检查语言，数组格式，支持cpp,java,js,python,php,css,html,go,typescript,csharp
    *
    * @return $this
    */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;
        return $this;
    }

    /**
    * Gets ruleSets
    *  指定规则集
    *
    * @return \HuaweiCloud\SDK\CodeArtsCheck\V2\Model\RuleSetV2[]|null
    */
    public function getRuleSets()
    {
        return $this->container['ruleSets'];
    }

    /**
    * Sets ruleSets
    *
    * @param \HuaweiCloud\SDK\CodeArtsCheck\V2\Model\RuleSetV2[]|null $ruleSets 指定规则集
    *
    * @return $this
    */
    public function setRuleSets($ruleSets)
    {
        $this->container['ruleSets'] = $ruleSets;
        return $this;
    }

    /**
    * Gets taskType
    *  检查类型，支持full/inc两种类型，full表示全量检查，inc表示mr检查
    *
    * @return string|null
    */
    public function getTaskType()
    {
        return $this->container['taskType'];
    }

    /**
    * Sets taskType
    *
    * @param string|null $taskType 检查类型，支持full/inc两种类型，full表示全量检查，inc表示mr检查
    *
    * @return $this
    */
    public function setTaskType($taskType)
    {
        $this->container['taskType'] = $taskType;
        return $this;
    }

    /**
    * Gets username
    *  仓库有权限的用户名
    *
    * @return string|null
    */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
    * Sets username
    *
    * @param string|null $username 仓库有权限的用户名
    *
    * @return $this
    */
    public function setUsername($username)
    {
        $this->container['username'] = $username;
        return $this;
    }

    /**
    * Gets accessToken
    *  仓库有权限的用户token
    *
    * @return string|null
    */
    public function getAccessToken()
    {
        return $this->container['accessToken'];
    }

    /**
    * Sets accessToken
    *
    * @param string|null $accessToken 仓库有权限的用户token
    *
    * @return $this
    */
    public function setAccessToken($accessToken)
    {
        $this->container['accessToken'] = $accessToken;
        return $this;
    }

    /**
    * Gets endpointId
    *  仓库有权限的用户endpointId
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
    * @param string|null $endpointId 仓库有权限的用户endpointId
    *
    * @return $this
    */
    public function setEndpointId($endpointId)
    {
        $this->container['endpointId'] = $endpointId;
        return $this;
    }

    /**
    * Gets incConfig
    *  incConfig
    *
    * @return \HuaweiCloud\SDK\CodeArtsCheck\V2\Model\IncConfigV2|null
    */
    public function getIncConfig()
    {
        return $this->container['incConfig'];
    }

    /**
    * Sets incConfig
    *
    * @param \HuaweiCloud\SDK\CodeArtsCheck\V2\Model\IncConfigV2|null $incConfig incConfig
    *
    * @return $this
    */
    public function setIncConfig($incConfig)
    {
        $this->container['incConfig'] = $incConfig;
        return $this;
    }

    /**
    * Gets enableFossbot
    *  是否打开fossbot检查,默认不开
    *
    * @return bool|null
    */
    public function getEnableFossbot()
    {
        return $this->container['enableFossbot'];
    }

    /**
    * Sets enableFossbot
    *
    * @param bool|null $enableFossbot 是否打开fossbot检查,默认不开
    *
    * @return $this
    */
    public function setEnableFossbot($enableFossbot)
    {
        $this->container['enableFossbot'] = $enableFossbot;
        return $this;
    }

    /**
    * Gets resourcePoolId
    *  资源池id，可以从资源池管理页面获取
    *
    * @return string|null
    */
    public function getResourcePoolId()
    {
        return $this->container['resourcePoolId'];
    }

    /**
    * Sets resourcePoolId
    *
    * @param string|null $resourcePoolId 资源池id，可以从资源池管理页面获取
    *
    * @return $this
    */
    public function setResourcePoolId($resourcePoolId)
    {
        $this->container['resourcePoolId'] = $resourcePoolId;
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

