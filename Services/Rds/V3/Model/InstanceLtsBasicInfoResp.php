<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InstanceLtsBasicInfoResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InstanceLtsBasicInfoResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  实例id
    * name  实例名称
    * engineName  引擎名
    * engineVersion  引擎版本
    * engineCategory  引擎分类
    * status  实例状态
    * enterpriseProjectId  企业项目id
    * actions  实例进行中的任务
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'engineName' => 'string',
            'engineVersion' => 'string',
            'engineCategory' => 'string',
            'status' => 'string',
            'enterpriseProjectId' => 'string',
            'actions' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  实例id
    * name  实例名称
    * engineName  引擎名
    * engineVersion  引擎版本
    * engineCategory  引擎分类
    * status  实例状态
    * enterpriseProjectId  企业项目id
    * actions  实例进行中的任务
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'engineName' => null,
        'engineVersion' => null,
        'engineCategory' => null,
        'status' => null,
        'enterpriseProjectId' => null,
        'actions' => null
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
    * id  实例id
    * name  实例名称
    * engineName  引擎名
    * engineVersion  引擎版本
    * engineCategory  引擎分类
    * status  实例状态
    * enterpriseProjectId  企业项目id
    * actions  实例进行中的任务
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'engineName' => 'engine_name',
            'engineVersion' => 'engine_version',
            'engineCategory' => 'engine_category',
            'status' => 'status',
            'enterpriseProjectId' => 'enterprise_project_id',
            'actions' => 'actions'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  实例id
    * name  实例名称
    * engineName  引擎名
    * engineVersion  引擎版本
    * engineCategory  引擎分类
    * status  实例状态
    * enterpriseProjectId  企业项目id
    * actions  实例进行中的任务
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'engineName' => 'setEngineName',
            'engineVersion' => 'setEngineVersion',
            'engineCategory' => 'setEngineCategory',
            'status' => 'setStatus',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'actions' => 'setActions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  实例id
    * name  实例名称
    * engineName  引擎名
    * engineVersion  引擎版本
    * engineCategory  引擎分类
    * status  实例状态
    * enterpriseProjectId  企业项目id
    * actions  实例进行中的任务
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'engineName' => 'getEngineName',
            'engineVersion' => 'getEngineVersion',
            'engineCategory' => 'getEngineCategory',
            'status' => 'getStatus',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'actions' => 'getActions'
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
        $this->container['engineName'] = isset($data['engineName']) ? $data['engineName'] : null;
        $this->container['engineVersion'] = isset($data['engineVersion']) ? $data['engineVersion'] : null;
        $this->container['engineCategory'] = isset($data['engineCategory']) ? $data['engineCategory'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['actions'] = isset($data['actions']) ? $data['actions'] : null;
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
    *  实例id
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
    * @param string|null $id 实例id
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
    *  实例名称
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
    * @param string|null $name 实例名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets engineName
    *  引擎名
    *
    * @return string|null
    */
    public function getEngineName()
    {
        return $this->container['engineName'];
    }

    /**
    * Sets engineName
    *
    * @param string|null $engineName 引擎名
    *
    * @return $this
    */
    public function setEngineName($engineName)
    {
        $this->container['engineName'] = $engineName;
        return $this;
    }

    /**
    * Gets engineVersion
    *  引擎版本
    *
    * @return string|null
    */
    public function getEngineVersion()
    {
        return $this->container['engineVersion'];
    }

    /**
    * Sets engineVersion
    *
    * @param string|null $engineVersion 引擎版本
    *
    * @return $this
    */
    public function setEngineVersion($engineVersion)
    {
        $this->container['engineVersion'] = $engineVersion;
        return $this;
    }

    /**
    * Gets engineCategory
    *  引擎分类
    *
    * @return string|null
    */
    public function getEngineCategory()
    {
        return $this->container['engineCategory'];
    }

    /**
    * Sets engineCategory
    *
    * @param string|null $engineCategory 引擎分类
    *
    * @return $this
    */
    public function setEngineCategory($engineCategory)
    {
        $this->container['engineCategory'] = $engineCategory;
        return $this;
    }

    /**
    * Gets status
    *  实例状态
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
    * @param string|null $status 实例状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目id
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
    * @param string|null $enterpriseProjectId 企业项目id
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets actions
    *  实例进行中的任务
    *
    * @return string[]|null
    */
    public function getActions()
    {
        return $this->container['actions'];
    }

    /**
    * Sets actions
    *
    * @param string[]|null $actions 实例进行中的任务
    *
    * @return $this
    */
    public function setActions($actions)
    {
        $this->container['actions'] = $actions;
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

