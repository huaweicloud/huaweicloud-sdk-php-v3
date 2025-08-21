<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ConflictSectionDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ConflictSectionDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * conflict  是否冲突
    * lines  冲突行列表
    * id  编号
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'conflict' => 'bool',
            'lines' => '\HuaweiCloud\SDK\CodeHub\V4\Model\ConflictSectionLineDto[]',
            'id' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * conflict  是否冲突
    * lines  冲突行列表
    * id  编号
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'conflict' => null,
        'lines' => null,
        'id' => null
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
    * conflict  是否冲突
    * lines  冲突行列表
    * id  编号
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'conflict' => 'conflict',
            'lines' => 'lines',
            'id' => 'id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * conflict  是否冲突
    * lines  冲突行列表
    * id  编号
    *
    * @var string[]
    */
    protected static $setters = [
            'conflict' => 'setConflict',
            'lines' => 'setLines',
            'id' => 'setId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * conflict  是否冲突
    * lines  冲突行列表
    * id  编号
    *
    * @var string[]
    */
    protected static $getters = [
            'conflict' => 'getConflict',
            'lines' => 'getLines',
            'id' => 'getId'
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
        $this->container['conflict'] = isset($data['conflict']) ? $data['conflict'] : null;
        $this->container['lines'] = isset($data['lines']) ? $data['lines'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
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
    * Gets conflict
    *  是否冲突
    *
    * @return bool|null
    */
    public function getConflict()
    {
        return $this->container['conflict'];
    }

    /**
    * Sets conflict
    *
    * @param bool|null $conflict 是否冲突
    *
    * @return $this
    */
    public function setConflict($conflict)
    {
        $this->container['conflict'] = $conflict;
        return $this;
    }

    /**
    * Gets lines
    *  冲突行列表
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\ConflictSectionLineDto[]|null
    */
    public function getLines()
    {
        return $this->container['lines'];
    }

    /**
    * Sets lines
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\ConflictSectionLineDto[]|null $lines 冲突行列表
    *
    * @return $this
    */
    public function setLines($lines)
    {
        $this->container['lines'] = $lines;
        return $this;
    }

    /**
    * Gets id
    *  编号
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
    * @param string|null $id 编号
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
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

