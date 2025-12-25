<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ConnectionModuleFieldCreateVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ConnectionModuleFieldCreateVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  名字
    * other  其他信息
    * templateFieldId  UUID
    * title  标题
    * type  类型
    * value  相关值
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'other' => 'string',
            'templateFieldId' => 'string',
            'title' => 'string',
            'type' => 'string',
            'value' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  名字
    * other  其他信息
    * templateFieldId  UUID
    * title  标题
    * type  类型
    * value  相关值
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'other' => null,
        'templateFieldId' => null,
        'title' => null,
        'type' => null,
        'value' => null
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
    * name  名字
    * other  其他信息
    * templateFieldId  UUID
    * title  标题
    * type  类型
    * value  相关值
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'other' => 'other',
            'templateFieldId' => 'template_field_id',
            'title' => 'title',
            'type' => 'type',
            'value' => 'value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  名字
    * other  其他信息
    * templateFieldId  UUID
    * title  标题
    * type  类型
    * value  相关值
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'other' => 'setOther',
            'templateFieldId' => 'setTemplateFieldId',
            'title' => 'setTitle',
            'type' => 'setType',
            'value' => 'setValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  名字
    * other  其他信息
    * templateFieldId  UUID
    * title  标题
    * type  类型
    * value  相关值
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'other' => 'getOther',
            'templateFieldId' => 'getTemplateFieldId',
            'title' => 'getTitle',
            'type' => 'getType',
            'value' => 'getValue'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['other'] = isset($data['other']) ? $data['other'] : null;
        $this->container['templateFieldId'] = isset($data['templateFieldId']) ? $data['templateFieldId'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 5)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 5.";
            }
            if (!is_null($this->container['other']) && (mb_strlen($this->container['other']) > 128)) {
                $invalidProperties[] = "invalid value for 'other', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['other']) && (mb_strlen($this->container['other']) < 5)) {
                $invalidProperties[] = "invalid value for 'other', the character length must be bigger than or equal to 5.";
            }
            if (!is_null($this->container['templateFieldId']) && (mb_strlen($this->container['templateFieldId']) > 36)) {
                $invalidProperties[] = "invalid value for 'templateFieldId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['templateFieldId']) && (mb_strlen($this->container['templateFieldId']) < 36)) {
                $invalidProperties[] = "invalid value for 'templateFieldId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) > 128)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) < 5)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 5.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 128)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 5)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 5.";
            }
            if (!is_null($this->container['value']) && (mb_strlen($this->container['value']) > 128)) {
                $invalidProperties[] = "invalid value for 'value', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['value']) && (mb_strlen($this->container['value']) < 5)) {
                $invalidProperties[] = "invalid value for 'value', the character length must be bigger than or equal to 5.";
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
    * Gets name
    *  名字
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
    * @param string|null $name 名字
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets other
    *  其他信息
    *
    * @return string|null
    */
    public function getOther()
    {
        return $this->container['other'];
    }

    /**
    * Sets other
    *
    * @param string|null $other 其他信息
    *
    * @return $this
    */
    public function setOther($other)
    {
        $this->container['other'] = $other;
        return $this;
    }

    /**
    * Gets templateFieldId
    *  UUID
    *
    * @return string|null
    */
    public function getTemplateFieldId()
    {
        return $this->container['templateFieldId'];
    }

    /**
    * Sets templateFieldId
    *
    * @param string|null $templateFieldId UUID
    *
    * @return $this
    */
    public function setTemplateFieldId($templateFieldId)
    {
        $this->container['templateFieldId'] = $templateFieldId;
        return $this;
    }

    /**
    * Gets title
    *  标题
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
    * @param string|null $title 标题
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets type
    *  类型
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
    * @param string|null $type 类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets value
    *  相关值
    *
    * @return string|null
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param string|null $value 相关值
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
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

