<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RunPipelineDTOParams implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RunPipelineDTO_params';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * gitType  代码仓类型
    * alias  代码仓别名
    * codehubId  codehub代码库ID
    * defaultBranch  默认分支
    * gitUrl  git仓库https地址
    * endpointId  扩展点ID
    * buildParams  buildParams
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'gitType' => 'string',
            'alias' => 'string',
            'codehubId' => 'string',
            'defaultBranch' => 'string',
            'gitUrl' => 'string',
            'endpointId' => 'string',
            'buildParams' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\RunPipelineDTOParamsBuildParams'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * gitType  代码仓类型
    * alias  代码仓别名
    * codehubId  codehub代码库ID
    * defaultBranch  默认分支
    * gitUrl  git仓库https地址
    * endpointId  扩展点ID
    * buildParams  buildParams
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'gitType' => null,
        'alias' => null,
        'codehubId' => null,
        'defaultBranch' => null,
        'gitUrl' => null,
        'endpointId' => null,
        'buildParams' => null
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
    * gitType  代码仓类型
    * alias  代码仓别名
    * codehubId  codehub代码库ID
    * defaultBranch  默认分支
    * gitUrl  git仓库https地址
    * endpointId  扩展点ID
    * buildParams  buildParams
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'gitType' => 'git_type',
            'alias' => 'alias',
            'codehubId' => 'codehub_id',
            'defaultBranch' => 'default_branch',
            'gitUrl' => 'git_url',
            'endpointId' => 'endpoint_id',
            'buildParams' => 'build_params'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * gitType  代码仓类型
    * alias  代码仓别名
    * codehubId  codehub代码库ID
    * defaultBranch  默认分支
    * gitUrl  git仓库https地址
    * endpointId  扩展点ID
    * buildParams  buildParams
    *
    * @var string[]
    */
    protected static $setters = [
            'gitType' => 'setGitType',
            'alias' => 'setAlias',
            'codehubId' => 'setCodehubId',
            'defaultBranch' => 'setDefaultBranch',
            'gitUrl' => 'setGitUrl',
            'endpointId' => 'setEndpointId',
            'buildParams' => 'setBuildParams'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * gitType  代码仓类型
    * alias  代码仓别名
    * codehubId  codehub代码库ID
    * defaultBranch  默认分支
    * gitUrl  git仓库https地址
    * endpointId  扩展点ID
    * buildParams  buildParams
    *
    * @var string[]
    */
    protected static $getters = [
            'gitType' => 'getGitType',
            'alias' => 'getAlias',
            'codehubId' => 'getCodehubId',
            'defaultBranch' => 'getDefaultBranch',
            'gitUrl' => 'getGitUrl',
            'endpointId' => 'getEndpointId',
            'buildParams' => 'getBuildParams'
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
        $this->container['gitType'] = isset($data['gitType']) ? $data['gitType'] : null;
        $this->container['alias'] = isset($data['alias']) ? $data['alias'] : null;
        $this->container['codehubId'] = isset($data['codehubId']) ? $data['codehubId'] : null;
        $this->container['defaultBranch'] = isset($data['defaultBranch']) ? $data['defaultBranch'] : null;
        $this->container['gitUrl'] = isset($data['gitUrl']) ? $data['gitUrl'] : null;
        $this->container['endpointId'] = isset($data['endpointId']) ? $data['endpointId'] : null;
        $this->container['buildParams'] = isset($data['buildParams']) ? $data['buildParams'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['gitType'] === null) {
            $invalidProperties[] = "'gitType' can't be null";
        }
        if ($this->container['gitUrl'] === null) {
            $invalidProperties[] = "'gitUrl' can't be null";
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
    * Gets gitType
    *  代码仓类型
    *
    * @return string
    */
    public function getGitType()
    {
        return $this->container['gitType'];
    }

    /**
    * Sets gitType
    *
    * @param string $gitType 代码仓类型
    *
    * @return $this
    */
    public function setGitType($gitType)
    {
        $this->container['gitType'] = $gitType;
        return $this;
    }

    /**
    * Gets alias
    *  代码仓别名
    *
    * @return string|null
    */
    public function getAlias()
    {
        return $this->container['alias'];
    }

    /**
    * Sets alias
    *
    * @param string|null $alias 代码仓别名
    *
    * @return $this
    */
    public function setAlias($alias)
    {
        $this->container['alias'] = $alias;
        return $this;
    }

    /**
    * Gets codehubId
    *  codehub代码库ID
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
    * @param string|null $codehubId codehub代码库ID
    *
    * @return $this
    */
    public function setCodehubId($codehubId)
    {
        $this->container['codehubId'] = $codehubId;
        return $this;
    }

    /**
    * Gets defaultBranch
    *  默认分支
    *
    * @return string|null
    */
    public function getDefaultBranch()
    {
        return $this->container['defaultBranch'];
    }

    /**
    * Sets defaultBranch
    *
    * @param string|null $defaultBranch 默认分支
    *
    * @return $this
    */
    public function setDefaultBranch($defaultBranch)
    {
        $this->container['defaultBranch'] = $defaultBranch;
        return $this;
    }

    /**
    * Gets gitUrl
    *  git仓库https地址
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
    * @param string $gitUrl git仓库https地址
    *
    * @return $this
    */
    public function setGitUrl($gitUrl)
    {
        $this->container['gitUrl'] = $gitUrl;
        return $this;
    }

    /**
    * Gets endpointId
    *  扩展点ID
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
    * @param string|null $endpointId 扩展点ID
    *
    * @return $this
    */
    public function setEndpointId($endpointId)
    {
        $this->container['endpointId'] = $endpointId;
        return $this;
    }

    /**
    * Gets buildParams
    *  buildParams
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\RunPipelineDTOParamsBuildParams|null
    */
    public function getBuildParams()
    {
        return $this->container['buildParams'];
    }

    /**
    * Sets buildParams
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\RunPipelineDTOParamsBuildParams|null $buildParams buildParams
    *
    * @return $this
    */
    public function setBuildParams($buildParams)
    {
        $this->container['buildParams'] = $buildParams;
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

