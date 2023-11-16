<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateBuildJobScm implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateBuildJobScm';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * branch  代码分支
    * url  代码仓地址
    * repoId  repo的id
    * webUrl  代码仓http地址
    * scmType  仓库类别，codehub还是github等等
    * isAutoBuild  是否自动构建
    * buildType  构建类别
    * depth  克隆深度
    * endPointId  endpointId
    * source  source
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'branch' => 'string',
            'url' => 'string',
            'repoId' => 'string',
            'webUrl' => 'string',
            'scmType' => 'string',
            'isAutoBuild' => 'bool',
            'buildType' => 'string',
            'depth' => 'string',
            'endPointId' => 'string',
            'source' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * branch  代码分支
    * url  代码仓地址
    * repoId  repo的id
    * webUrl  代码仓http地址
    * scmType  仓库类别，codehub还是github等等
    * isAutoBuild  是否自动构建
    * buildType  构建类别
    * depth  克隆深度
    * endPointId  endpointId
    * source  source
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'branch' => null,
        'url' => null,
        'repoId' => null,
        'webUrl' => null,
        'scmType' => null,
        'isAutoBuild' => null,
        'buildType' => null,
        'depth' => null,
        'endPointId' => null,
        'source' => null
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
    * branch  代码分支
    * url  代码仓地址
    * repoId  repo的id
    * webUrl  代码仓http地址
    * scmType  仓库类别，codehub还是github等等
    * isAutoBuild  是否自动构建
    * buildType  构建类别
    * depth  克隆深度
    * endPointId  endpointId
    * source  source
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'branch' => 'branch',
            'url' => 'url',
            'repoId' => 'repo_id',
            'webUrl' => 'web_url',
            'scmType' => 'scm_type',
            'isAutoBuild' => 'is_auto_build',
            'buildType' => 'build_type',
            'depth' => 'depth',
            'endPointId' => 'end_point_id',
            'source' => 'source'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * branch  代码分支
    * url  代码仓地址
    * repoId  repo的id
    * webUrl  代码仓http地址
    * scmType  仓库类别，codehub还是github等等
    * isAutoBuild  是否自动构建
    * buildType  构建类别
    * depth  克隆深度
    * endPointId  endpointId
    * source  source
    *
    * @var string[]
    */
    protected static $setters = [
            'branch' => 'setBranch',
            'url' => 'setUrl',
            'repoId' => 'setRepoId',
            'webUrl' => 'setWebUrl',
            'scmType' => 'setScmType',
            'isAutoBuild' => 'setIsAutoBuild',
            'buildType' => 'setBuildType',
            'depth' => 'setDepth',
            'endPointId' => 'setEndPointId',
            'source' => 'setSource'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * branch  代码分支
    * url  代码仓地址
    * repoId  repo的id
    * webUrl  代码仓http地址
    * scmType  仓库类别，codehub还是github等等
    * isAutoBuild  是否自动构建
    * buildType  构建类别
    * depth  克隆深度
    * endPointId  endpointId
    * source  source
    *
    * @var string[]
    */
    protected static $getters = [
            'branch' => 'getBranch',
            'url' => 'getUrl',
            'repoId' => 'getRepoId',
            'webUrl' => 'getWebUrl',
            'scmType' => 'getScmType',
            'isAutoBuild' => 'getIsAutoBuild',
            'buildType' => 'getBuildType',
            'depth' => 'getDepth',
            'endPointId' => 'getEndPointId',
            'source' => 'getSource'
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
        $this->container['branch'] = isset($data['branch']) ? $data['branch'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['repoId'] = isset($data['repoId']) ? $data['repoId'] : null;
        $this->container['webUrl'] = isset($data['webUrl']) ? $data['webUrl'] : null;
        $this->container['scmType'] = isset($data['scmType']) ? $data['scmType'] : null;
        $this->container['isAutoBuild'] = isset($data['isAutoBuild']) ? $data['isAutoBuild'] : null;
        $this->container['buildType'] = isset($data['buildType']) ? $data['buildType'] : null;
        $this->container['depth'] = isset($data['depth']) ? $data['depth'] : null;
        $this->container['endPointId'] = isset($data['endPointId']) ? $data['endPointId'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
        if ($this->container['scmType'] === null) {
            $invalidProperties[] = "'scmType' can't be null";
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
    * Gets branch
    *  代码分支
    *
    * @return string|null
    */
    public function getBranch()
    {
        return $this->container['branch'];
    }

    /**
    * Sets branch
    *
    * @param string|null $branch 代码分支
    *
    * @return $this
    */
    public function setBranch($branch)
    {
        $this->container['branch'] = $branch;
        return $this;
    }

    /**
    * Gets url
    *  代码仓地址
    *
    * @return string
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string $url 代码仓地址
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets repoId
    *  repo的id
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
    * @param string|null $repoId repo的id
    *
    * @return $this
    */
    public function setRepoId($repoId)
    {
        $this->container['repoId'] = $repoId;
        return $this;
    }

    /**
    * Gets webUrl
    *  代码仓http地址
    *
    * @return string|null
    */
    public function getWebUrl()
    {
        return $this->container['webUrl'];
    }

    /**
    * Sets webUrl
    *
    * @param string|null $webUrl 代码仓http地址
    *
    * @return $this
    */
    public function setWebUrl($webUrl)
    {
        $this->container['webUrl'] = $webUrl;
        return $this;
    }

    /**
    * Gets scmType
    *  仓库类别，codehub还是github等等
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
    * @param string $scmType 仓库类别，codehub还是github等等
    *
    * @return $this
    */
    public function setScmType($scmType)
    {
        $this->container['scmType'] = $scmType;
        return $this;
    }

    /**
    * Gets isAutoBuild
    *  是否自动构建
    *
    * @return bool|null
    */
    public function getIsAutoBuild()
    {
        return $this->container['isAutoBuild'];
    }

    /**
    * Sets isAutoBuild
    *
    * @param bool|null $isAutoBuild 是否自动构建
    *
    * @return $this
    */
    public function setIsAutoBuild($isAutoBuild)
    {
        $this->container['isAutoBuild'] = $isAutoBuild;
        return $this;
    }

    /**
    * Gets buildType
    *  构建类别
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
    * @param string|null $buildType 构建类别
    *
    * @return $this
    */
    public function setBuildType($buildType)
    {
        $this->container['buildType'] = $buildType;
        return $this;
    }

    /**
    * Gets depth
    *  克隆深度
    *
    * @return string|null
    */
    public function getDepth()
    {
        return $this->container['depth'];
    }

    /**
    * Sets depth
    *
    * @param string|null $depth 克隆深度
    *
    * @return $this
    */
    public function setDepth($depth)
    {
        $this->container['depth'] = $depth;
        return $this;
    }

    /**
    * Gets endPointId
    *  endpointId
    *
    * @return string|null
    */
    public function getEndPointId()
    {
        return $this->container['endPointId'];
    }

    /**
    * Sets endPointId
    *
    * @param string|null $endPointId endpointId
    *
    * @return $this
    */
    public function setEndPointId($endPointId)
    {
        $this->container['endPointId'] = $endPointId;
        return $this;
    }

    /**
    * Gets source
    *  source
    *
    * @return string|null
    */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
    * Sets source
    *
    * @param string|null $source source
    *
    * @return $this
    */
    public function setSource($source)
    {
        $this->container['source'] = $source;
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

