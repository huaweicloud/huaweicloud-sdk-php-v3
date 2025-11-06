<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CustomEvaluationDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CustomEvaluationDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 自定义评价id。
    * evaluationTypeId  评价类型id
    * level  评价等级
    * name  评价名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'evaluationTypeId' => 'int',
            'level' => 'int',
            'name' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 自定义评价id。
    * evaluationTypeId  评价类型id
    * level  评价等级
    * name  评价名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'evaluationTypeId' => null,
        'level' => null,
        'name' => null
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
    * id  **参数解释：** 自定义评价id。
    * evaluationTypeId  评价类型id
    * level  评价等级
    * name  评价名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'evaluationTypeId' => 'evaluation_type_id',
            'level' => 'level',
            'name' => 'name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 自定义评价id。
    * evaluationTypeId  评价类型id
    * level  评价等级
    * name  评价名称
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'evaluationTypeId' => 'setEvaluationTypeId',
            'level' => 'setLevel',
            'name' => 'setName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 自定义评价id。
    * evaluationTypeId  评价类型id
    * level  评价等级
    * name  评价名称
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'evaluationTypeId' => 'getEvaluationTypeId',
            'level' => 'getLevel',
            'name' => 'getName'
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
        $this->container['evaluationTypeId'] = isset($data['evaluationTypeId']) ? $data['evaluationTypeId'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
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
    *  **参数解释：** 自定义评价id。
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id **参数解释：** 自定义评价id。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets evaluationTypeId
    *  评价类型id
    *
    * @return int|null
    */
    public function getEvaluationTypeId()
    {
        return $this->container['evaluationTypeId'];
    }

    /**
    * Sets evaluationTypeId
    *
    * @param int|null $evaluationTypeId 评价类型id
    *
    * @return $this
    */
    public function setEvaluationTypeId($evaluationTypeId)
    {
        $this->container['evaluationTypeId'] = $evaluationTypeId;
        return $this;
    }

    /**
    * Gets level
    *  评价等级
    *
    * @return int|null
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param int|null $level 评价等级
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets name
    *  评价名称
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
    * @param string|null $name 评价名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
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

