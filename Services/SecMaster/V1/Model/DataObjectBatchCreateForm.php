<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DataObjectBatchCreateForm implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DataObjectBatchCreateForm';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  唯一标识ID
    * formatVersion  对齐的模板版本号，默认传1
    * name  名称
    * type  描述
    * triggerFlag  触发标志
    * dataObjectList  数据对象列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'formatVersion' => 'int',
            'name' => 'string',
            'type' => 'string',
            'triggerFlag' => 'bool',
            'dataObjectList' => 'object[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  唯一标识ID
    * formatVersion  对齐的模板版本号，默认传1
    * name  名称
    * type  描述
    * triggerFlag  触发标志
    * dataObjectList  数据对象列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'formatVersion' => null,
        'name' => null,
        'type' => null,
        'triggerFlag' => null,
        'dataObjectList' => null
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
    * id  唯一标识ID
    * formatVersion  对齐的模板版本号，默认传1
    * name  名称
    * type  描述
    * triggerFlag  触发标志
    * dataObjectList  数据对象列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'formatVersion' => 'format_version',
            'name' => 'name',
            'type' => 'type',
            'triggerFlag' => 'trigger_flag',
            'dataObjectList' => 'data_object_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  唯一标识ID
    * formatVersion  对齐的模板版本号，默认传1
    * name  名称
    * type  描述
    * triggerFlag  触发标志
    * dataObjectList  数据对象列表
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'formatVersion' => 'setFormatVersion',
            'name' => 'setName',
            'type' => 'setType',
            'triggerFlag' => 'setTriggerFlag',
            'dataObjectList' => 'setDataObjectList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  唯一标识ID
    * formatVersion  对齐的模板版本号，默认传1
    * name  名称
    * type  描述
    * triggerFlag  触发标志
    * dataObjectList  数据对象列表
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'formatVersion' => 'getFormatVersion',
            'name' => 'getName',
            'type' => 'getType',
            'triggerFlag' => 'getTriggerFlag',
            'dataObjectList' => 'getDataObjectList'
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
        $this->container['formatVersion'] = isset($data['formatVersion']) ? $data['formatVersion'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['triggerFlag'] = isset($data['triggerFlag']) ? $data['triggerFlag'] : null;
        $this->container['dataObjectList'] = isset($data['dataObjectList']) ? $data['dataObjectList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 32)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['formatVersion']) && ($this->container['formatVersion'] > 10)) {
                $invalidProperties[] = "invalid value for 'formatVersion', must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['formatVersion']) && ($this->container['formatVersion'] < 1)) {
                $invalidProperties[] = "invalid value for 'formatVersion', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 2)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 512)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 2)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 2.";
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
    *  唯一标识ID
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
    * @param string|null $id 唯一标识ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets formatVersion
    *  对齐的模板版本号，默认传1
    *
    * @return int|null
    */
    public function getFormatVersion()
    {
        return $this->container['formatVersion'];
    }

    /**
    * Sets formatVersion
    *
    * @param int|null $formatVersion 对齐的模板版本号，默认传1
    *
    * @return $this
    */
    public function setFormatVersion($formatVersion)
    {
        $this->container['formatVersion'] = $formatVersion;
        return $this;
    }

    /**
    * Gets name
    *  名称
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
    * @param string|null $name 名称
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
    *  描述
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
    * @param string|null $type 描述
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets triggerFlag
    *  触发标志
    *
    * @return bool|null
    */
    public function getTriggerFlag()
    {
        return $this->container['triggerFlag'];
    }

    /**
    * Sets triggerFlag
    *
    * @param bool|null $triggerFlag 触发标志
    *
    * @return $this
    */
    public function setTriggerFlag($triggerFlag)
    {
        $this->container['triggerFlag'] = $triggerFlag;
        return $this;
    }

    /**
    * Gets dataObjectList
    *  数据对象列表
    *
    * @return object[]|null
    */
    public function getDataObjectList()
    {
        return $this->container['dataObjectList'];
    }

    /**
    * Sets dataObjectList
    *
    * @param object[]|null $dataObjectList 数据对象列表
    *
    * @return $this
    */
    public function setDataObjectList($dataObjectList)
    {
        $this->container['dataObjectList'] = $dataObjectList;
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

