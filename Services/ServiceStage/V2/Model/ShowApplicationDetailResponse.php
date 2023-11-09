<?php

namespace HuaweiCloud\SDK\ServiceStage\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowApplicationDetailResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowApplicationDetailResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * componentCount  组件个数。
    * unifiedModel  是否开启统一模型
    * id  应用ID。
    * name  应用名称。
    * description  应用描述。
    * creator  创建人。
    * projectId  项目ID。
    * enterpriseProjectId  企业项目ID。
    * createTime  创建时间。
    * updateTime  修改时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'componentCount' => 'int',
            'unifiedModel' => 'string',
            'id' => 'string',
            'name' => 'string',
            'description' => 'string',
            'creator' => 'string',
            'projectId' => 'string',
            'enterpriseProjectId' => 'string',
            'createTime' => 'int',
            'updateTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * componentCount  组件个数。
    * unifiedModel  是否开启统一模型
    * id  应用ID。
    * name  应用名称。
    * description  应用描述。
    * creator  创建人。
    * projectId  项目ID。
    * enterpriseProjectId  企业项目ID。
    * createTime  创建时间。
    * updateTime  修改时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'componentCount' => null,
        'unifiedModel' => null,
        'id' => null,
        'name' => null,
        'description' => null,
        'creator' => null,
        'projectId' => null,
        'enterpriseProjectId' => null,
        'createTime' => 'int64',
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
    * componentCount  组件个数。
    * unifiedModel  是否开启统一模型
    * id  应用ID。
    * name  应用名称。
    * description  应用描述。
    * creator  创建人。
    * projectId  项目ID。
    * enterpriseProjectId  企业项目ID。
    * createTime  创建时间。
    * updateTime  修改时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'componentCount' => 'component_count',
            'unifiedModel' => 'unified_model',
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'creator' => 'creator',
            'projectId' => 'project_id',
            'enterpriseProjectId' => 'enterprise_project_id',
            'createTime' => 'create_time',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * componentCount  组件个数。
    * unifiedModel  是否开启统一模型
    * id  应用ID。
    * name  应用名称。
    * description  应用描述。
    * creator  创建人。
    * projectId  项目ID。
    * enterpriseProjectId  企业项目ID。
    * createTime  创建时间。
    * updateTime  修改时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'componentCount' => 'setComponentCount',
            'unifiedModel' => 'setUnifiedModel',
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'creator' => 'setCreator',
            'projectId' => 'setProjectId',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * componentCount  组件个数。
    * unifiedModel  是否开启统一模型
    * id  应用ID。
    * name  应用名称。
    * description  应用描述。
    * creator  创建人。
    * projectId  项目ID。
    * enterpriseProjectId  企业项目ID。
    * createTime  创建时间。
    * updateTime  修改时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'componentCount' => 'getComponentCount',
            'unifiedModel' => 'getUnifiedModel',
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'creator' => 'getCreator',
            'projectId' => 'getProjectId',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'createTime' => 'getCreateTime',
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
        $this->container['componentCount'] = isset($data['componentCount']) ? $data['componentCount'] : null;
        $this->container['unifiedModel'] = isset($data['unifiedModel']) ? $data['unifiedModel'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
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
    * Gets componentCount
    *  组件个数。
    *
    * @return int|null
    */
    public function getComponentCount()
    {
        return $this->container['componentCount'];
    }

    /**
    * Sets componentCount
    *
    * @param int|null $componentCount 组件个数。
    *
    * @return $this
    */
    public function setComponentCount($componentCount)
    {
        $this->container['componentCount'] = $componentCount;
        return $this;
    }

    /**
    * Gets unifiedModel
    *  是否开启统一模型
    *
    * @return string|null
    */
    public function getUnifiedModel()
    {
        return $this->container['unifiedModel'];
    }

    /**
    * Sets unifiedModel
    *
    * @param string|null $unifiedModel 是否开启统一模型
    *
    * @return $this
    */
    public function setUnifiedModel($unifiedModel)
    {
        $this->container['unifiedModel'] = $unifiedModel;
        return $this;
    }

    /**
    * Gets id
    *  应用ID。
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
    * @param string|null $id 应用ID。
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
    *  应用名称。
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
    * @param string|null $name 应用名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  应用描述。
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
    * @param string|null $description 应用描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets creator
    *  创建人。
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
    * @param string|null $creator 创建人。
    *
    * @return $this
    */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;
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
    * Gets enterpriseProjectId
    *  企业项目ID。
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 企业项目ID。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
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

