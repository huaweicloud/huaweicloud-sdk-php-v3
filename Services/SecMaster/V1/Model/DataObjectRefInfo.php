<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DataObjectRefInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DataObjectRefInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * content  流程实例上下文内容
    * dataclass  dataclass
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'content' => 'map[string,object]',
            'dataclass' => '\HuaweiCloud\SDK\SecMaster\V1\Model\DataClassRef'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * content  流程实例上下文内容
    * dataclass  dataclass
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'content' => null,
        'dataclass' => null
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
    * content  流程实例上下文内容
    * dataclass  dataclass
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'content' => 'content',
            'dataclass' => 'dataclass'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * content  流程实例上下文内容
    * dataclass  dataclass
    *
    * @var string[]
    */
    protected static $setters = [
            'content' => 'setContent',
            'dataclass' => 'setDataclass'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * content  流程实例上下文内容
    * dataclass  dataclass
    *
    * @var string[]
    */
    protected static $getters = [
            'content' => 'getContent',
            'dataclass' => 'getDataclass'
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
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['dataclass'] = isset($data['dataclass']) ? $data['dataclass'] : null;
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
    * Gets content
    *  流程实例上下文内容
    *
    * @return map[string,object]|null
    */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
    * Sets content
    *
    * @param map[string,object]|null $content 流程实例上下文内容
    *
    * @return $this
    */
    public function setContent($content)
    {
        $this->container['content'] = $content;
        return $this;
    }

    /**
    * Gets dataclass
    *  dataclass
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\DataClassRef|null
    */
    public function getDataclass()
    {
        return $this->container['dataclass'];
    }

    /**
    * Sets dataclass
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\DataClassRef|null $dataclass dataclass
    *
    * @return $this
    */
    public function setDataclass($dataclass)
    {
        $this->container['dataclass'] = $dataclass;
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

