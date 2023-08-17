<?php

namespace HuaweiCloud\SDK\CloudPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListPipelinesPagePipelines implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListPipelinesPage_pipelines';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * pipelineId  流水线ID
    * name  流水线名称
    * projectId  项目ID
    * componentId  组件ID
    * isPublish  是否为变更流水线
    * isCollect  是否收藏此流水线
    * manifestVersion  流水线版本
    * createTime  创建时间
    * latestRun  latestRun
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'pipelineId' => 'string',
            'name' => 'string',
            'projectId' => 'string',
            'componentId' => 'string',
            'isPublish' => 'bool',
            'isCollect' => 'bool',
            'manifestVersion' => 'string',
            'createTime' => 'int',
            'latestRun' => '\HuaweiCloud\SDK\CloudPipeline\V2\Model\ListPipelinesPageLatestRun'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * pipelineId  流水线ID
    * name  流水线名称
    * projectId  项目ID
    * componentId  组件ID
    * isPublish  是否为变更流水线
    * isCollect  是否收藏此流水线
    * manifestVersion  流水线版本
    * createTime  创建时间
    * latestRun  latestRun
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'pipelineId' => null,
        'name' => null,
        'projectId' => null,
        'componentId' => null,
        'isPublish' => null,
        'isCollect' => null,
        'manifestVersion' => null,
        'createTime' => 'int64',
        'latestRun' => null
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
    * name  流水线名称
    * projectId  项目ID
    * componentId  组件ID
    * isPublish  是否为变更流水线
    * isCollect  是否收藏此流水线
    * manifestVersion  流水线版本
    * createTime  创建时间
    * latestRun  latestRun
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'pipelineId' => 'pipeline_id',
            'name' => 'name',
            'projectId' => 'project_id',
            'componentId' => 'component_id',
            'isPublish' => 'is_publish',
            'isCollect' => 'is_collect',
            'manifestVersion' => 'manifest_version',
            'createTime' => 'create_time',
            'latestRun' => 'latest_run'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * pipelineId  流水线ID
    * name  流水线名称
    * projectId  项目ID
    * componentId  组件ID
    * isPublish  是否为变更流水线
    * isCollect  是否收藏此流水线
    * manifestVersion  流水线版本
    * createTime  创建时间
    * latestRun  latestRun
    *
    * @var string[]
    */
    protected static $setters = [
            'pipelineId' => 'setPipelineId',
            'name' => 'setName',
            'projectId' => 'setProjectId',
            'componentId' => 'setComponentId',
            'isPublish' => 'setIsPublish',
            'isCollect' => 'setIsCollect',
            'manifestVersion' => 'setManifestVersion',
            'createTime' => 'setCreateTime',
            'latestRun' => 'setLatestRun'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * pipelineId  流水线ID
    * name  流水线名称
    * projectId  项目ID
    * componentId  组件ID
    * isPublish  是否为变更流水线
    * isCollect  是否收藏此流水线
    * manifestVersion  流水线版本
    * createTime  创建时间
    * latestRun  latestRun
    *
    * @var string[]
    */
    protected static $getters = [
            'pipelineId' => 'getPipelineId',
            'name' => 'getName',
            'projectId' => 'getProjectId',
            'componentId' => 'getComponentId',
            'isPublish' => 'getIsPublish',
            'isCollect' => 'getIsCollect',
            'manifestVersion' => 'getManifestVersion',
            'createTime' => 'getCreateTime',
            'latestRun' => 'getLatestRun'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['componentId'] = isset($data['componentId']) ? $data['componentId'] : null;
        $this->container['isPublish'] = isset($data['isPublish']) ? $data['isPublish'] : null;
        $this->container['isCollect'] = isset($data['isCollect']) ? $data['isCollect'] : null;
        $this->container['manifestVersion'] = isset($data['manifestVersion']) ? $data['manifestVersion'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['latestRun'] = isset($data['latestRun']) ? $data['latestRun'] : null;
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
    * Gets name
    *  流水线名称
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
    * @param string|null $name 流水线名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID
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
    * @param string|null $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets componentId
    *  组件ID
    *
    * @return string|null
    */
    public function getComponentId()
    {
        return $this->container['componentId'];
    }

    /**
    * Sets componentId
    *
    * @param string|null $componentId 组件ID
    *
    * @return $this
    */
    public function setComponentId($componentId)
    {
        $this->container['componentId'] = $componentId;
        return $this;
    }

    /**
    * Gets isPublish
    *  是否为变更流水线
    *
    * @return bool|null
    */
    public function getIsPublish()
    {
        return $this->container['isPublish'];
    }

    /**
    * Sets isPublish
    *
    * @param bool|null $isPublish 是否为变更流水线
    *
    * @return $this
    */
    public function setIsPublish($isPublish)
    {
        $this->container['isPublish'] = $isPublish;
        return $this;
    }

    /**
    * Gets isCollect
    *  是否收藏此流水线
    *
    * @return bool|null
    */
    public function getIsCollect()
    {
        return $this->container['isCollect'];
    }

    /**
    * Sets isCollect
    *
    * @param bool|null $isCollect 是否收藏此流水线
    *
    * @return $this
    */
    public function setIsCollect($isCollect)
    {
        $this->container['isCollect'] = $isCollect;
        return $this;
    }

    /**
    * Gets manifestVersion
    *  流水线版本
    *
    * @return string|null
    */
    public function getManifestVersion()
    {
        return $this->container['manifestVersion'];
    }

    /**
    * Sets manifestVersion
    *
    * @param string|null $manifestVersion 流水线版本
    *
    * @return $this
    */
    public function setManifestVersion($manifestVersion)
    {
        $this->container['manifestVersion'] = $manifestVersion;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets latestRun
    *  latestRun
    *
    * @return \HuaweiCloud\SDK\CloudPipeline\V2\Model\ListPipelinesPageLatestRun|null
    */
    public function getLatestRun()
    {
        return $this->container['latestRun'];
    }

    /**
    * Sets latestRun
    *
    * @param \HuaweiCloud\SDK\CloudPipeline\V2\Model\ListPipelinesPageLatestRun|null $latestRun latestRun
    *
    * @return $this
    */
    public function setLatestRun($latestRun)
    {
        $this->container['latestRun'] = $latestRun;
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

