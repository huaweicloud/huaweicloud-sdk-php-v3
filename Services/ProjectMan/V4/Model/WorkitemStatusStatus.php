<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WorkitemStatusStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WorkitemStatus_status';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  工作项的状态id
    * name  状态名称
    * type  工作项状态的类型， BACKLOG( \"初始化\"), READY(\"待启动\"), IN_PROGRESS(\"进行中\"), COMPLETE(\"已完成\"), DONE(\"已结束\"),
    * description  工作项状态的描述
    * parentStatusId  工作项状态的父状态id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'type' => 'string',
            'description' => 'string',
            'parentStatusId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  工作项的状态id
    * name  状态名称
    * type  工作项状态的类型， BACKLOG( \"初始化\"), READY(\"待启动\"), IN_PROGRESS(\"进行中\"), COMPLETE(\"已完成\"), DONE(\"已结束\"),
    * description  工作项状态的描述
    * parentStatusId  工作项状态的父状态id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'type' => null,
        'description' => null,
        'parentStatusId' => null
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
    * id  工作项的状态id
    * name  状态名称
    * type  工作项状态的类型， BACKLOG( \"初始化\"), READY(\"待启动\"), IN_PROGRESS(\"进行中\"), COMPLETE(\"已完成\"), DONE(\"已结束\"),
    * description  工作项状态的描述
    * parentStatusId  工作项状态的父状态id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'type' => 'type',
            'description' => 'description',
            'parentStatusId' => 'parent_status_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  工作项的状态id
    * name  状态名称
    * type  工作项状态的类型， BACKLOG( \"初始化\"), READY(\"待启动\"), IN_PROGRESS(\"进行中\"), COMPLETE(\"已完成\"), DONE(\"已结束\"),
    * description  工作项状态的描述
    * parentStatusId  工作项状态的父状态id
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'type' => 'setType',
            'description' => 'setDescription',
            'parentStatusId' => 'setParentStatusId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  工作项的状态id
    * name  状态名称
    * type  工作项状态的类型， BACKLOG( \"初始化\"), READY(\"待启动\"), IN_PROGRESS(\"进行中\"), COMPLETE(\"已完成\"), DONE(\"已结束\"),
    * description  工作项状态的描述
    * parentStatusId  工作项状态的父状态id
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'type' => 'getType',
            'description' => 'getDescription',
            'parentStatusId' => 'getParentStatusId'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['parentStatusId'] = isset($data['parentStatusId']) ? $data['parentStatusId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 32)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['id']) && !preg_match("/^[0-9a-z]{1,32}$/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /^[0-9a-z]{1,32}$/.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 60)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 60.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['parentStatusId']) && (mb_strlen($this->container['parentStatusId']) > 32)) {
                $invalidProperties[] = "invalid value for 'parentStatusId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['parentStatusId']) && (mb_strlen($this->container['parentStatusId']) < 1)) {
                $invalidProperties[] = "invalid value for 'parentStatusId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['parentStatusId']) && !preg_match("/^[0-9a-z]{1,32}$/", $this->container['parentStatusId'])) {
                $invalidProperties[] = "invalid value for 'parentStatusId', must be conform to the pattern /^[0-9a-z]{1,32}$/.";
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
    * Gets id
    *  工作项的状态id
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
    * @param string|null $id 工作项的状态id
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
    *  状态名称
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
    * @param string|null $name 状态名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets type
    *  工作项状态的类型， BACKLOG( \"初始化\"), READY(\"待启动\"), IN_PROGRESS(\"进行中\"), COMPLETE(\"已完成\"), DONE(\"已结束\"),
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 工作项状态的类型， BACKLOG( \"初始化\"), READY(\"待启动\"), IN_PROGRESS(\"进行中\"), COMPLETE(\"已完成\"), DONE(\"已结束\"),
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets description
    *  工作项状态的描述
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
    * @param string|null $description 工作项状态的描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets parentStatusId
    *  工作项状态的父状态id
    *
    * @return string|null
    */
    public function getParentStatusId()
    {
        return $this->container['parentStatusId'];
    }

    /**
    * Sets parentStatusId
    *
    * @param string|null $parentStatusId 工作项状态的父状态id
    *
    * @return $this
    */
    public function setParentStatusId($parentStatusId)
    {
        $this->container['parentStatusId'] = $parentStatusId;
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

