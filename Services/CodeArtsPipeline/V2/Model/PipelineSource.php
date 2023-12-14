<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PipelineSource implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PipelineSource';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * scmType  源码仓类型
    * hookFlag  是否配置Webhook
    * defaultBranch  默认分支
    * trigger  webhook配置数据
    * alias  代码仓别名
    * displayName  代码仓显示名
    * repoName  源码仓名称
    * repoId  代码仓ID
    * repoOwner  代码仓所有者
    * gitUrl  代码仓访问地址
    * webUrl  代码仓Web页面地址
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'scmType' => 'string',
            'hookFlag' => 'string',
            'defaultBranch' => 'string',
            'trigger' => 'string',
            'alias' => 'string',
            'displayName' => 'string',
            'repoName' => 'string',
            'repoId' => 'string',
            'repoOwner' => 'string',
            'gitUrl' => 'string',
            'webUrl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * scmType  源码仓类型
    * hookFlag  是否配置Webhook
    * defaultBranch  默认分支
    * trigger  webhook配置数据
    * alias  代码仓别名
    * displayName  代码仓显示名
    * repoName  源码仓名称
    * repoId  代码仓ID
    * repoOwner  代码仓所有者
    * gitUrl  代码仓访问地址
    * webUrl  代码仓Web页面地址
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'scmType' => null,
        'hookFlag' => null,
        'defaultBranch' => null,
        'trigger' => null,
        'alias' => null,
        'displayName' => null,
        'repoName' => null,
        'repoId' => null,
        'repoOwner' => null,
        'gitUrl' => null,
        'webUrl' => null
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
    * scmType  源码仓类型
    * hookFlag  是否配置Webhook
    * defaultBranch  默认分支
    * trigger  webhook配置数据
    * alias  代码仓别名
    * displayName  代码仓显示名
    * repoName  源码仓名称
    * repoId  代码仓ID
    * repoOwner  代码仓所有者
    * gitUrl  代码仓访问地址
    * webUrl  代码仓Web页面地址
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'scmType' => 'scmType',
            'hookFlag' => 'hookFlag',
            'defaultBranch' => 'defaultBranch',
            'trigger' => 'trigger',
            'alias' => 'alias',
            'displayName' => 'displayName',
            'repoName' => 'repoName',
            'repoId' => 'repoId',
            'repoOwner' => 'repoOwner',
            'gitUrl' => 'gitUrl',
            'webUrl' => 'webUrl'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * scmType  源码仓类型
    * hookFlag  是否配置Webhook
    * defaultBranch  默认分支
    * trigger  webhook配置数据
    * alias  代码仓别名
    * displayName  代码仓显示名
    * repoName  源码仓名称
    * repoId  代码仓ID
    * repoOwner  代码仓所有者
    * gitUrl  代码仓访问地址
    * webUrl  代码仓Web页面地址
    *
    * @var string[]
    */
    protected static $setters = [
            'scmType' => 'setScmType',
            'hookFlag' => 'setHookFlag',
            'defaultBranch' => 'setDefaultBranch',
            'trigger' => 'setTrigger',
            'alias' => 'setAlias',
            'displayName' => 'setDisplayName',
            'repoName' => 'setRepoName',
            'repoId' => 'setRepoId',
            'repoOwner' => 'setRepoOwner',
            'gitUrl' => 'setGitUrl',
            'webUrl' => 'setWebUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * scmType  源码仓类型
    * hookFlag  是否配置Webhook
    * defaultBranch  默认分支
    * trigger  webhook配置数据
    * alias  代码仓别名
    * displayName  代码仓显示名
    * repoName  源码仓名称
    * repoId  代码仓ID
    * repoOwner  代码仓所有者
    * gitUrl  代码仓访问地址
    * webUrl  代码仓Web页面地址
    *
    * @var string[]
    */
    protected static $getters = [
            'scmType' => 'getScmType',
            'hookFlag' => 'getHookFlag',
            'defaultBranch' => 'getDefaultBranch',
            'trigger' => 'getTrigger',
            'alias' => 'getAlias',
            'displayName' => 'getDisplayName',
            'repoName' => 'getRepoName',
            'repoId' => 'getRepoId',
            'repoOwner' => 'getRepoOwner',
            'gitUrl' => 'getGitUrl',
            'webUrl' => 'getWebUrl'
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
        $this->container['scmType'] = isset($data['scmType']) ? $data['scmType'] : null;
        $this->container['hookFlag'] = isset($data['hookFlag']) ? $data['hookFlag'] : null;
        $this->container['defaultBranch'] = isset($data['defaultBranch']) ? $data['defaultBranch'] : null;
        $this->container['trigger'] = isset($data['trigger']) ? $data['trigger'] : null;
        $this->container['alias'] = isset($data['alias']) ? $data['alias'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['repoName'] = isset($data['repoName']) ? $data['repoName'] : null;
        $this->container['repoId'] = isset($data['repoId']) ? $data['repoId'] : null;
        $this->container['repoOwner'] = isset($data['repoOwner']) ? $data['repoOwner'] : null;
        $this->container['gitUrl'] = isset($data['gitUrl']) ? $data['gitUrl'] : null;
        $this->container['webUrl'] = isset($data['webUrl']) ? $data['webUrl'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['scmType'] === null) {
            $invalidProperties[] = "'scmType' can't be null";
        }
        if ($this->container['hookFlag'] === null) {
            $invalidProperties[] = "'hookFlag' can't be null";
        }
        if ($this->container['defaultBranch'] === null) {
            $invalidProperties[] = "'defaultBranch' can't be null";
        }
        if ($this->container['trigger'] === null) {
            $invalidProperties[] = "'trigger' can't be null";
        }
        if ($this->container['alias'] === null) {
            $invalidProperties[] = "'alias' can't be null";
        }
        if ($this->container['displayName'] === null) {
            $invalidProperties[] = "'displayName' can't be null";
        }
        if ($this->container['repoName'] === null) {
            $invalidProperties[] = "'repoName' can't be null";
        }
        if ($this->container['repoId'] === null) {
            $invalidProperties[] = "'repoId' can't be null";
        }
        if ($this->container['repoOwner'] === null) {
            $invalidProperties[] = "'repoOwner' can't be null";
        }
        if ($this->container['gitUrl'] === null) {
            $invalidProperties[] = "'gitUrl' can't be null";
        }
        if ($this->container['webUrl'] === null) {
            $invalidProperties[] = "'webUrl' can't be null";
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
    * Gets scmType
    *  源码仓类型
    *
    * @return string
    */
    public function getScmType()
    {
        return $this->container['scmType'];
    }

    /**
    * Sets scmType
    *
    * @param string $scmType 源码仓类型
    *
    * @return $this
    */
    public function setScmType($scmType)
    {
        $this->container['scmType'] = $scmType;
        return $this;
    }

    /**
    * Gets hookFlag
    *  是否配置Webhook
    *
    * @return string
    */
    public function getHookFlag()
    {
        return $this->container['hookFlag'];
    }

    /**
    * Sets hookFlag
    *
    * @param string $hookFlag 是否配置Webhook
    *
    * @return $this
    */
    public function setHookFlag($hookFlag)
    {
        $this->container['hookFlag'] = $hookFlag;
        return $this;
    }

    /**
    * Gets defaultBranch
    *  默认分支
    *
    * @return string
    */
    public function getDefaultBranch()
    {
        return $this->container['defaultBranch'];
    }

    /**
    * Sets defaultBranch
    *
    * @param string $defaultBranch 默认分支
    *
    * @return $this
    */
    public function setDefaultBranch($defaultBranch)
    {
        $this->container['defaultBranch'] = $defaultBranch;
        return $this;
    }

    /**
    * Gets trigger
    *  webhook配置数据
    *
    * @return string
    */
    public function getTrigger()
    {
        return $this->container['trigger'];
    }

    /**
    * Sets trigger
    *
    * @param string $trigger webhook配置数据
    *
    * @return $this
    */
    public function setTrigger($trigger)
    {
        $this->container['trigger'] = $trigger;
        return $this;
    }

    /**
    * Gets alias
    *  代码仓别名
    *
    * @return string
    */
    public function getAlias()
    {
        return $this->container['alias'];
    }

    /**
    * Sets alias
    *
    * @param string $alias 代码仓别名
    *
    * @return $this
    */
    public function setAlias($alias)
    {
        $this->container['alias'] = $alias;
        return $this;
    }

    /**
    * Gets displayName
    *  代码仓显示名
    *
    * @return string
    */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
    * Sets displayName
    *
    * @param string $displayName 代码仓显示名
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
        return $this;
    }

    /**
    * Gets repoName
    *  源码仓名称
    *
    * @return string
    */
    public function getRepoName()
    {
        return $this->container['repoName'];
    }

    /**
    * Sets repoName
    *
    * @param string $repoName 源码仓名称
    *
    * @return $this
    */
    public function setRepoName($repoName)
    {
        $this->container['repoName'] = $repoName;
        return $this;
    }

    /**
    * Gets repoId
    *  代码仓ID
    *
    * @return string
    */
    public function getRepoId()
    {
        return $this->container['repoId'];
    }

    /**
    * Sets repoId
    *
    * @param string $repoId 代码仓ID
    *
    * @return $this
    */
    public function setRepoId($repoId)
    {
        $this->container['repoId'] = $repoId;
        return $this;
    }

    /**
    * Gets repoOwner
    *  代码仓所有者
    *
    * @return string
    */
    public function getRepoOwner()
    {
        return $this->container['repoOwner'];
    }

    /**
    * Sets repoOwner
    *
    * @param string $repoOwner 代码仓所有者
    *
    * @return $this
    */
    public function setRepoOwner($repoOwner)
    {
        $this->container['repoOwner'] = $repoOwner;
        return $this;
    }

    /**
    * Gets gitUrl
    *  代码仓访问地址
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
    * @param string $gitUrl 代码仓访问地址
    *
    * @return $this
    */
    public function setGitUrl($gitUrl)
    {
        $this->container['gitUrl'] = $gitUrl;
        return $this;
    }

    /**
    * Gets webUrl
    *  代码仓Web页面地址
    *
    * @return string
    */
    public function getWebUrl()
    {
        return $this->container['webUrl'];
    }

    /**
    * Sets webUrl
    *
    * @param string $webUrl 代码仓Web页面地址
    *
    * @return $this
    */
    public function setWebUrl($webUrl)
    {
        $this->container['webUrl'] = $webUrl;
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

