<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DomainVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DomainVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：**  项目空间的唯一Id。 **取值范围：**  不涉及。
    * name  **参数解释：**  项目空间名称。 **取值范围：**  不涉及。
    * title  **参数解释：**  项目空间名称。 **取值范围：**  不涉及。
    * projectId  **参数解释：**  项目空间对应的32位UUId。 **取值范围：**  不涉及。
    * parentId  **参数解释：**  项目空间的父项目空间Id，仅在项目群中使用。 **取值范围：**  不涉及。
    * category  **参数解释：**  项目空间类型。 **取值范围：**  -  Project：项目 - Group：项目群
    * createdBy  **参数解释：**  项目空间创建人Id。 **取值范围：**  不涉及。
    * modelId  **参数解释：**  项目空间对应的模型Id。 **取值范围：**  不涉及。 - 10001：系统设备类 - 10002：独立软件类 - 10003：自营软件/云服务类
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'title' => 'string',
            'projectId' => 'string',
            'parentId' => 'string',
            'category' => 'string',
            'createdBy' => 'string',
            'modelId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：**  项目空间的唯一Id。 **取值范围：**  不涉及。
    * name  **参数解释：**  项目空间名称。 **取值范围：**  不涉及。
    * title  **参数解释：**  项目空间名称。 **取值范围：**  不涉及。
    * projectId  **参数解释：**  项目空间对应的32位UUId。 **取值范围：**  不涉及。
    * parentId  **参数解释：**  项目空间的父项目空间Id，仅在项目群中使用。 **取值范围：**  不涉及。
    * category  **参数解释：**  项目空间类型。 **取值范围：**  -  Project：项目 - Group：项目群
    * createdBy  **参数解释：**  项目空间创建人Id。 **取值范围：**  不涉及。
    * modelId  **参数解释：**  项目空间对应的模型Id。 **取值范围：**  不涉及。 - 10001：系统设备类 - 10002：独立软件类 - 10003：自营软件/云服务类
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'title' => null,
        'projectId' => null,
        'parentId' => null,
        'category' => null,
        'createdBy' => null,
        'modelId' => null
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
    * id  **参数解释：**  项目空间的唯一Id。 **取值范围：**  不涉及。
    * name  **参数解释：**  项目空间名称。 **取值范围：**  不涉及。
    * title  **参数解释：**  项目空间名称。 **取值范围：**  不涉及。
    * projectId  **参数解释：**  项目空间对应的32位UUId。 **取值范围：**  不涉及。
    * parentId  **参数解释：**  项目空间的父项目空间Id，仅在项目群中使用。 **取值范围：**  不涉及。
    * category  **参数解释：**  项目空间类型。 **取值范围：**  -  Project：项目 - Group：项目群
    * createdBy  **参数解释：**  项目空间创建人Id。 **取值范围：**  不涉及。
    * modelId  **参数解释：**  项目空间对应的模型Id。 **取值范围：**  不涉及。 - 10001：系统设备类 - 10002：独立软件类 - 10003：自营软件/云服务类
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'title' => 'title',
            'projectId' => 'project_id',
            'parentId' => 'parent_id',
            'category' => 'category',
            'createdBy' => 'created_by',
            'modelId' => 'model_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：**  项目空间的唯一Id。 **取值范围：**  不涉及。
    * name  **参数解释：**  项目空间名称。 **取值范围：**  不涉及。
    * title  **参数解释：**  项目空间名称。 **取值范围：**  不涉及。
    * projectId  **参数解释：**  项目空间对应的32位UUId。 **取值范围：**  不涉及。
    * parentId  **参数解释：**  项目空间的父项目空间Id，仅在项目群中使用。 **取值范围：**  不涉及。
    * category  **参数解释：**  项目空间类型。 **取值范围：**  -  Project：项目 - Group：项目群
    * createdBy  **参数解释：**  项目空间创建人Id。 **取值范围：**  不涉及。
    * modelId  **参数解释：**  项目空间对应的模型Id。 **取值范围：**  不涉及。 - 10001：系统设备类 - 10002：独立软件类 - 10003：自营软件/云服务类
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'title' => 'setTitle',
            'projectId' => 'setProjectId',
            'parentId' => 'setParentId',
            'category' => 'setCategory',
            'createdBy' => 'setCreatedBy',
            'modelId' => 'setModelId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：**  项目空间的唯一Id。 **取值范围：**  不涉及。
    * name  **参数解释：**  项目空间名称。 **取值范围：**  不涉及。
    * title  **参数解释：**  项目空间名称。 **取值范围：**  不涉及。
    * projectId  **参数解释：**  项目空间对应的32位UUId。 **取值范围：**  不涉及。
    * parentId  **参数解释：**  项目空间的父项目空间Id，仅在项目群中使用。 **取值范围：**  不涉及。
    * category  **参数解释：**  项目空间类型。 **取值范围：**  -  Project：项目 - Group：项目群
    * createdBy  **参数解释：**  项目空间创建人Id。 **取值范围：**  不涉及。
    * modelId  **参数解释：**  项目空间对应的模型Id。 **取值范围：**  不涉及。 - 10001：系统设备类 - 10002：独立软件类 - 10003：自营软件/云服务类
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'title' => 'getTitle',
            'projectId' => 'getProjectId',
            'parentId' => 'getParentId',
            'category' => 'getCategory',
            'createdBy' => 'getCreatedBy',
            'modelId' => 'getModelId'
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
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
        $this->container['modelId'] = isset($data['modelId']) ? $data['modelId'] : null;
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
    *  **参数解释：**  项目空间的唯一Id。 **取值范围：**  不涉及。
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
    * @param string|null $id **参数解释：**  项目空间的唯一Id。 **取值范围：**  不涉及。
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
    *  **参数解释：**  项目空间名称。 **取值范围：**  不涉及。
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
    * @param string|null $name **参数解释：**  项目空间名称。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets title
    *  **参数解释：**  项目空间名称。 **取值范围：**  不涉及。
    *
    * @return string|null
    */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
    * Sets title
    *
    * @param string|null $title **参数解释：**  项目空间名称。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets projectId
    *  **参数解释：**  项目空间对应的32位UUId。 **取值范围：**  不涉及。
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
    * @param string|null $projectId **参数解释：**  项目空间对应的32位UUId。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets parentId
    *  **参数解释：**  项目空间的父项目空间Id，仅在项目群中使用。 **取值范围：**  不涉及。
    *
    * @return string|null
    */
    public function getParentId()
    {
        return $this->container['parentId'];
    }

    /**
    * Sets parentId
    *
    * @param string|null $parentId **参数解释：**  项目空间的父项目空间Id，仅在项目群中使用。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;
        return $this;
    }

    /**
    * Gets category
    *  **参数解释：**  项目空间类型。 **取值范围：**  -  Project：项目 - Group：项目群
    *
    * @return string|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string|null $category **参数解释：**  项目空间类型。 **取值范围：**  -  Project：项目 - Group：项目群
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets createdBy
    *  **参数解释：**  项目空间创建人Id。 **取值范围：**  不涉及。
    *
    * @return string|null
    */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
    * Sets createdBy
    *
    * @param string|null $createdBy **参数解释：**  项目空间创建人Id。 **取值范围：**  不涉及。
    *
    * @return $this
    */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;
        return $this;
    }

    /**
    * Gets modelId
    *  **参数解释：**  项目空间对应的模型Id。 **取值范围：**  不涉及。 - 10001：系统设备类 - 10002：独立软件类 - 10003：自营软件/云服务类
    *
    * @return string|null
    */
    public function getModelId()
    {
        return $this->container['modelId'];
    }

    /**
    * Sets modelId
    *
    * @param string|null $modelId **参数解释：**  项目空间对应的模型Id。 **取值范围：**  不涉及。 - 10001：系统设备类 - 10002：独立软件类 - 10003：自营软件/云服务类
    *
    * @return $this
    */
    public function setModelId($modelId)
    {
        $this->container['modelId'] = $modelId;
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

