<?php

namespace HuaweiCloud\SDK\ServiceStage\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowComponentDetailResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowComponentDetailResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  应用组件ID。
    * name  应用组件名称
    * status  取值0或1。  0：表示正常状态。  1：表示正在删除。
    * runtime  runtime
    * category  category
    * subCategory  subCategory
    * description  描述。
    * projectId  项目ID。
    * applicationId  应用ID。
    * source  source
    * build  build
    * pipelineIds  流水线Id列表，最多10个。
    * createTime  创建时间。
    * creator  创建者
    * updateTime  修改时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'status' => 'int',
            'runtime' => '\HuaweiCloud\SDK\ServiceStage\V2\Model\RuntimeType',
            'category' => '\HuaweiCloud\SDK\ServiceStage\V2\Model\ComponentCategory',
            'subCategory' => '\HuaweiCloud\SDK\ServiceStage\V2\Model\ComponentSubCategory',
            'description' => 'string',
            'projectId' => 'string',
            'applicationId' => 'string',
            'source' => '\HuaweiCloud\SDK\ServiceStage\V2\Model\SourceObject',
            'build' => '\HuaweiCloud\SDK\ServiceStage\V2\Model\BuildInfo',
            'pipelineIds' => 'string[]',
            'createTime' => 'int',
            'creator' => 'string',
            'updateTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  应用组件ID。
    * name  应用组件名称
    * status  取值0或1。  0：表示正常状态。  1：表示正在删除。
    * runtime  runtime
    * category  category
    * subCategory  subCategory
    * description  描述。
    * projectId  项目ID。
    * applicationId  应用ID。
    * source  source
    * build  build
    * pipelineIds  流水线Id列表，最多10个。
    * createTime  创建时间。
    * creator  创建者
    * updateTime  修改时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'status' => null,
        'runtime' => null,
        'category' => null,
        'subCategory' => null,
        'description' => null,
        'projectId' => null,
        'applicationId' => null,
        'source' => null,
        'build' => null,
        'pipelineIds' => null,
        'createTime' => 'int64',
        'creator' => null,
        'updateTime' => 'int64'
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
    * id  应用组件ID。
    * name  应用组件名称
    * status  取值0或1。  0：表示正常状态。  1：表示正在删除。
    * runtime  runtime
    * category  category
    * subCategory  subCategory
    * description  描述。
    * projectId  项目ID。
    * applicationId  应用ID。
    * source  source
    * build  build
    * pipelineIds  流水线Id列表，最多10个。
    * createTime  创建时间。
    * creator  创建者
    * updateTime  修改时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'status' => 'status',
            'runtime' => 'runtime',
            'category' => 'category',
            'subCategory' => 'sub_category',
            'description' => 'description',
            'projectId' => 'project_id',
            'applicationId' => 'application_id',
            'source' => 'source',
            'build' => 'build',
            'pipelineIds' => 'pipeline_ids',
            'createTime' => 'create_time',
            'creator' => 'creator',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  应用组件ID。
    * name  应用组件名称
    * status  取值0或1。  0：表示正常状态。  1：表示正在删除。
    * runtime  runtime
    * category  category
    * subCategory  subCategory
    * description  描述。
    * projectId  项目ID。
    * applicationId  应用ID。
    * source  source
    * build  build
    * pipelineIds  流水线Id列表，最多10个。
    * createTime  创建时间。
    * creator  创建者
    * updateTime  修改时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'status' => 'setStatus',
            'runtime' => 'setRuntime',
            'category' => 'setCategory',
            'subCategory' => 'setSubCategory',
            'description' => 'setDescription',
            'projectId' => 'setProjectId',
            'applicationId' => 'setApplicationId',
            'source' => 'setSource',
            'build' => 'setBuild',
            'pipelineIds' => 'setPipelineIds',
            'createTime' => 'setCreateTime',
            'creator' => 'setCreator',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  应用组件ID。
    * name  应用组件名称
    * status  取值0或1。  0：表示正常状态。  1：表示正在删除。
    * runtime  runtime
    * category  category
    * subCategory  subCategory
    * description  描述。
    * projectId  项目ID。
    * applicationId  应用ID。
    * source  source
    * build  build
    * pipelineIds  流水线Id列表，最多10个。
    * createTime  创建时间。
    * creator  创建者
    * updateTime  修改时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'status' => 'getStatus',
            'runtime' => 'getRuntime',
            'category' => 'getCategory',
            'subCategory' => 'getSubCategory',
            'description' => 'getDescription',
            'projectId' => 'getProjectId',
            'applicationId' => 'getApplicationId',
            'source' => 'getSource',
            'build' => 'getBuild',
            'pipelineIds' => 'getPipelineIds',
            'createTime' => 'getCreateTime',
            'creator' => 'getCreator',
            'updateTime' => 'getUpdateTime'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['runtime'] = isset($data['runtime']) ? $data['runtime'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['subCategory'] = isset($data['subCategory']) ? $data['subCategory'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['applicationId'] = isset($data['applicationId']) ? $data['applicationId'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['build'] = isset($data['build']) ? $data['build'] : null;
        $this->container['pipelineIds'] = isset($data['pipelineIds']) ? $data['pipelineIds'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
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
    * Gets id
    *  应用组件ID。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 应用组件ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  应用组件名称
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
    * @param string|null $name 应用组件名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets status
    *  取值0或1。  0：表示正常状态。  1：表示正在删除。
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status 取值0或1。  0：表示正常状态。  1：表示正在删除。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets runtime
    *  runtime
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V2\Model\RuntimeType|null
    */
    public function getRuntime()
    {
        return $this->container['runtime'];
    }

    /**
    * Sets runtime
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V2\Model\RuntimeType|null $runtime runtime
    *
    * @return $this
    */
    public function setRuntime($runtime)
    {
        $this->container['runtime'] = $runtime;
        return $this;
    }

    /**
    * Gets category
    *  category
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V2\Model\ComponentCategory|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V2\Model\ComponentCategory|null $category category
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets subCategory
    *  subCategory
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V2\Model\ComponentSubCategory|null
    */
    public function getSubCategory()
    {
        return $this->container['subCategory'];
    }

    /**
    * Sets subCategory
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V2\Model\ComponentSubCategory|null $subCategory subCategory
    *
    * @return $this
    */
    public function setSubCategory($subCategory)
    {
        $this->container['subCategory'] = $subCategory;
        return $this;
    }

    /**
    * Gets description
    *  描述。
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
    * @param string|null $description 描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID。
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
    * @param string|null $projectId 项目ID。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets applicationId
    *  应用ID。
    *
    * @return string|null
    */
    public function getApplicationId()
    {
        return $this->container['applicationId'];
    }

    /**
    * Sets applicationId
    *
    * @param string|null $applicationId 应用ID。
    *
    * @return $this
    */
    public function setApplicationId($applicationId)
    {
        $this->container['applicationId'] = $applicationId;
        return $this;
    }

    /**
    * Gets source
    *  source
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V2\Model\SourceObject|null
    */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
    * Sets source
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V2\Model\SourceObject|null $source source
    *
    * @return $this
    */
    public function setSource($source)
    {
        $this->container['source'] = $source;
        return $this;
    }

    /**
    * Gets build
    *  build
    *
    * @return \HuaweiCloud\SDK\ServiceStage\V2\Model\BuildInfo|null
    */
    public function getBuild()
    {
        return $this->container['build'];
    }

    /**
    * Sets build
    *
    * @param \HuaweiCloud\SDK\ServiceStage\V2\Model\BuildInfo|null $build build
    *
    * @return $this
    */
    public function setBuild($build)
    {
        $this->container['build'] = $build;
        return $this;
    }

    /**
    * Gets pipelineIds
    *  流水线Id列表，最多10个。
    *
    * @return string[]|null
    */
    public function getPipelineIds()
    {
        return $this->container['pipelineIds'];
    }

    /**
    * Sets pipelineIds
    *
    * @param string[]|null $pipelineIds 流水线Id列表，最多10个。
    *
    * @return $this
    */
    public function setPipelineIds($pipelineIds)
    {
        $this->container['pipelineIds'] = $pipelineIds;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间。
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
    * @param int|null $createTime 创建时间。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets creator
    *  创建者
    *
    * @return string|null
    */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
    * Sets creator
    *
    * @param string|null $creator 创建者
    *
    * @return $this
    */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;
        return $this;
    }

    /**
    * Gets updateTime
    *  修改时间。
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime 修改时间。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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

