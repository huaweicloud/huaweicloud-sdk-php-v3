<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowFunctionAppResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowFunctionAppResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  应用名称
    * lastModifiedTime  最后修改时间
    * stackResources  stackResources
    * status  应用状态
    * stackName  资源栈名称
    * stackId  资源栈id
    * repoName  存储库名称
    * description  应用描述
    * repo  repo
    * pipelineId  管道id
    * projectId  项目id
    * apigUrl  调用URL
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'lastModifiedTime' => 'int',
            'stackResources' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\StackResource',
            'status' => 'string',
            'stackName' => 'string',
            'stackId' => 'string',
            'repoName' => 'string',
            'description' => 'string',
            'repo' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\RepoInfo',
            'pipelineId' => 'string',
            'projectId' => 'string',
            'apigUrl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  应用名称
    * lastModifiedTime  最后修改时间
    * stackResources  stackResources
    * status  应用状态
    * stackName  资源栈名称
    * stackId  资源栈id
    * repoName  存储库名称
    * description  应用描述
    * repo  repo
    * pipelineId  管道id
    * projectId  项目id
    * apigUrl  调用URL
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'lastModifiedTime' => 'int64',
        'stackResources' => null,
        'status' => null,
        'stackName' => null,
        'stackId' => null,
        'repoName' => null,
        'description' => null,
        'repo' => null,
        'pipelineId' => null,
        'projectId' => null,
        'apigUrl' => null
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
    * name  应用名称
    * lastModifiedTime  最后修改时间
    * stackResources  stackResources
    * status  应用状态
    * stackName  资源栈名称
    * stackId  资源栈id
    * repoName  存储库名称
    * description  应用描述
    * repo  repo
    * pipelineId  管道id
    * projectId  项目id
    * apigUrl  调用URL
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'lastModifiedTime' => 'last_modified_time',
            'stackResources' => 'stack_resources',
            'status' => 'status',
            'stackName' => 'stack_name',
            'stackId' => 'stack_id',
            'repoName' => 'repo_name',
            'description' => 'description',
            'repo' => 'repo',
            'pipelineId' => 'pipeline_id',
            'projectId' => 'project_id',
            'apigUrl' => 'apig_url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  应用名称
    * lastModifiedTime  最后修改时间
    * stackResources  stackResources
    * status  应用状态
    * stackName  资源栈名称
    * stackId  资源栈id
    * repoName  存储库名称
    * description  应用描述
    * repo  repo
    * pipelineId  管道id
    * projectId  项目id
    * apigUrl  调用URL
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'lastModifiedTime' => 'setLastModifiedTime',
            'stackResources' => 'setStackResources',
            'status' => 'setStatus',
            'stackName' => 'setStackName',
            'stackId' => 'setStackId',
            'repoName' => 'setRepoName',
            'description' => 'setDescription',
            'repo' => 'setRepo',
            'pipelineId' => 'setPipelineId',
            'projectId' => 'setProjectId',
            'apigUrl' => 'setApigUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  应用名称
    * lastModifiedTime  最后修改时间
    * stackResources  stackResources
    * status  应用状态
    * stackName  资源栈名称
    * stackId  资源栈id
    * repoName  存储库名称
    * description  应用描述
    * repo  repo
    * pipelineId  管道id
    * projectId  项目id
    * apigUrl  调用URL
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'lastModifiedTime' => 'getLastModifiedTime',
            'stackResources' => 'getStackResources',
            'status' => 'getStatus',
            'stackName' => 'getStackName',
            'stackId' => 'getStackId',
            'repoName' => 'getRepoName',
            'description' => 'getDescription',
            'repo' => 'getRepo',
            'pipelineId' => 'getPipelineId',
            'projectId' => 'getProjectId',
            'apigUrl' => 'getApigUrl'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['lastModifiedTime'] = isset($data['lastModifiedTime']) ? $data['lastModifiedTime'] : null;
        $this->container['stackResources'] = isset($data['stackResources']) ? $data['stackResources'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['stackName'] = isset($data['stackName']) ? $data['stackName'] : null;
        $this->container['stackId'] = isset($data['stackId']) ? $data['stackId'] : null;
        $this->container['repoName'] = isset($data['repoName']) ? $data['repoName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['repo'] = isset($data['repo']) ? $data['repo'] : null;
        $this->container['pipelineId'] = isset($data['pipelineId']) ? $data['pipelineId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['apigUrl'] = isset($data['apigUrl']) ? $data['apigUrl'] : null;
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
    * Gets name
    *  应用名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 应用名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets lastModifiedTime
    *  最后修改时间
    *
    * @return int|null
    */
    public function getLastModifiedTime()
    {
        return $this->container['lastModifiedTime'];
    }

    /**
    * Sets lastModifiedTime
    *
    * @param int|null $lastModifiedTime 最后修改时间
    *
    * @return $this
    */
    public function setLastModifiedTime($lastModifiedTime)
    {
        $this->container['lastModifiedTime'] = $lastModifiedTime;
        return $this;
    }

    /**
    * Gets stackResources
    *  stackResources
    *
    * @return \HuaweiCloud\SDK\FunctionGraph\V2\Model\StackResource|null
    */
    public function getStackResources()
    {
        return $this->container['stackResources'];
    }

    /**
    * Sets stackResources
    *
    * @param \HuaweiCloud\SDK\FunctionGraph\V2\Model\StackResource|null $stackResources stackResources
    *
    * @return $this
    */
    public function setStackResources($stackResources)
    {
        $this->container['stackResources'] = $stackResources;
        return $this;
    }

    /**
    * Gets status
    *  应用状态
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 应用状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets stackName
    *  资源栈名称
    *
    * @return string|null
    */
    public function getStackName()
    {
        return $this->container['stackName'];
    }

    /**
    * Sets stackName
    *
    * @param string|null $stackName 资源栈名称
    *
    * @return $this
    */
    public function setStackName($stackName)
    {
        $this->container['stackName'] = $stackName;
        return $this;
    }

    /**
    * Gets stackId
    *  资源栈id
    *
    * @return string|null
    */
    public function getStackId()
    {
        return $this->container['stackId'];
    }

    /**
    * Sets stackId
    *
    * @param string|null $stackId 资源栈id
    *
    * @return $this
    */
    public function setStackId($stackId)
    {
        $this->container['stackId'] = $stackId;
        return $this;
    }

    /**
    * Gets repoName
    *  存储库名称
    *
    * @return string|null
    */
    public function getRepoName()
    {
        return $this->container['repoName'];
    }

    /**
    * Sets repoName
    *
    * @param string|null $repoName 存储库名称
    *
    * @return $this
    */
    public function setRepoName($repoName)
    {
        $this->container['repoName'] = $repoName;
        return $this;
    }

    /**
    * Gets description
    *  应用描述
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
    * @param string|null $description 应用描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets repo
    *  repo
    *
    * @return \HuaweiCloud\SDK\FunctionGraph\V2\Model\RepoInfo|null
    */
    public function getRepo()
    {
        return $this->container['repo'];
    }

    /**
    * Sets repo
    *
    * @param \HuaweiCloud\SDK\FunctionGraph\V2\Model\RepoInfo|null $repo repo
    *
    * @return $this
    */
    public function setRepo($repo)
    {
        $this->container['repo'] = $repo;
        return $this;
    }

    /**
    * Gets pipelineId
    *  管道id
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
    * @param string|null $pipelineId 管道id
    *
    * @return $this
    */
    public function setPipelineId($pipelineId)
    {
        $this->container['pipelineId'] = $pipelineId;
        return $this;
    }

    /**
    * Gets projectId
    *  项目id
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 项目id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets apigUrl
    *  调用URL
    *
    * @return string|null
    */
    public function getApigUrl()
    {
        return $this->container['apigUrl'];
    }

    /**
    * Sets apigUrl
    *
    * @param string|null $apigUrl 调用URL
    *
    * @return $this
    */
    public function setApigUrl($apigUrl)
    {
        $this->container['apigUrl'] = $apigUrl;
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

