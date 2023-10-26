<?php

namespace HuaweiCloud\SDK\Aom\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Node implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Node';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * parentNode  父亲节点的名称。
    * category  节点类型。
    * description  节点描述。
    * id  节点id
    * ignoreError  是否忽略错误
    * metadata  metadata
    * name  节点名称,比如是Node。
    * taskName  任务名称，节点上任务的名称。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'parentNode' => 'string',
            'category' => 'string',
            'description' => 'string',
            'id' => 'string',
            'ignoreError' => 'bool',
            'metadata' => '\HuaweiCloud\SDK\Aom\V1\Model\Metadata',
            'name' => 'string',
            'taskName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * parentNode  父亲节点的名称。
    * category  节点类型。
    * description  节点描述。
    * id  节点id
    * ignoreError  是否忽略错误
    * metadata  metadata
    * name  节点名称,比如是Node。
    * taskName  任务名称，节点上任务的名称。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'parentNode' => null,
        'category' => null,
        'description' => null,
        'id' => null,
        'ignoreError' => null,
        'metadata' => null,
        'name' => null,
        'taskName' => null
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
    * parentNode  父亲节点的名称。
    * category  节点类型。
    * description  节点描述。
    * id  节点id
    * ignoreError  是否忽略错误
    * metadata  metadata
    * name  节点名称,比如是Node。
    * taskName  任务名称，节点上任务的名称。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'parentNode' => 'parent_node',
            'category' => 'category',
            'description' => 'description',
            'id' => 'id',
            'ignoreError' => 'ignore_error',
            'metadata' => 'metadata',
            'name' => 'name',
            'taskName' => 'task_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * parentNode  父亲节点的名称。
    * category  节点类型。
    * description  节点描述。
    * id  节点id
    * ignoreError  是否忽略错误
    * metadata  metadata
    * name  节点名称,比如是Node。
    * taskName  任务名称，节点上任务的名称。
    *
    * @var string[]
    */
    protected static $setters = [
            'parentNode' => 'setParentNode',
            'category' => 'setCategory',
            'description' => 'setDescription',
            'id' => 'setId',
            'ignoreError' => 'setIgnoreError',
            'metadata' => 'setMetadata',
            'name' => 'setName',
            'taskName' => 'setTaskName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * parentNode  父亲节点的名称。
    * category  节点类型。
    * description  节点描述。
    * id  节点id
    * ignoreError  是否忽略错误
    * metadata  metadata
    * name  节点名称,比如是Node。
    * taskName  任务名称，节点上任务的名称。
    *
    * @var string[]
    */
    protected static $getters = [
            'parentNode' => 'getParentNode',
            'category' => 'getCategory',
            'description' => 'getDescription',
            'id' => 'getId',
            'ignoreError' => 'getIgnoreError',
            'metadata' => 'getMetadata',
            'name' => 'getName',
            'taskName' => 'getTaskName'
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
        $this->container['parentNode'] = isset($data['parentNode']) ? $data['parentNode'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['ignoreError'] = isset($data['ignoreError']) ? $data['ignoreError'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['taskName'] = isset($data['taskName']) ? $data['taskName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['parentNode']) && (mb_strlen($this->container['parentNode']) > 64)) {
                $invalidProperties[] = "invalid value for 'parentNode', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['parentNode']) && (mb_strlen($this->container['parentNode']) < 1)) {
                $invalidProperties[] = "invalid value for 'parentNode', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['category']) && (mb_strlen($this->container['category']) > 32)) {
                $invalidProperties[] = "invalid value for 'category', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['category']) && (mb_strlen($this->container['category']) < 1)) {
                $invalidProperties[] = "invalid value for 'category', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 64)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['taskName']) && (mb_strlen($this->container['taskName']) > 64)) {
                $invalidProperties[] = "invalid value for 'taskName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['taskName']) && (mb_strlen($this->container['taskName']) < 1)) {
                $invalidProperties[] = "invalid value for 'taskName', the character length must be bigger than or equal to 1.";
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
    * Gets parentNode
    *  父亲节点的名称。
    *
    * @return string|null
    */
    public function getParentNode()
    {
        return $this->container['parentNode'];
    }

    /**
    * Sets parentNode
    *
    * @param string|null $parentNode 父亲节点的名称。
    *
    * @return $this
    */
    public function setParentNode($parentNode)
    {
        $this->container['parentNode'] = $parentNode;
        return $this;
    }

    /**
    * Gets category
    *  节点类型。
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
    * @param string|null $category 节点类型。
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets description
    *  节点描述。
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
    * @param string|null $description 节点描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets id
    *  节点id
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
    * @param string|null $id 节点id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets ignoreError
    *  是否忽略错误
    *
    * @return bool|null
    */
    public function getIgnoreError()
    {
        return $this->container['ignoreError'];
    }

    /**
    * Sets ignoreError
    *
    * @param bool|null $ignoreError 是否忽略错误
    *
    * @return $this
    */
    public function setIgnoreError($ignoreError)
    {
        $this->container['ignoreError'] = $ignoreError;
        return $this;
    }

    /**
    * Gets metadata
    *  metadata
    *
    * @return \HuaweiCloud\SDK\Aom\V1\Model\Metadata|null
    */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
    * Sets metadata
    *
    * @param \HuaweiCloud\SDK\Aom\V1\Model\Metadata|null $metadata metadata
    *
    * @return $this
    */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;
        return $this;
    }

    /**
    * Gets name
    *  节点名称,比如是Node。
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
    * @param string|null $name 节点名称,比如是Node。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets taskName
    *  任务名称，节点上任务的名称。
    *
    * @return string|null
    */
    public function getTaskName()
    {
        return $this->container['taskName'];
    }

    /**
    * Sets taskName
    *
    * @param string|null $taskName 任务名称，节点上任务的名称。
    *
    * @return $this
    */
    public function setTaskName($taskName)
    {
        $this->container['taskName'] = $taskName;
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

