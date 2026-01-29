<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LabelEntity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LabelEntity';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  标签id
    * labelType  标签所属工作项类型，对应工作项的type字段
    * color  标签颜色RGB
    * title  标签标题
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'labelType' => 'string',
            'color' => 'string',
            'title' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  标签id
    * labelType  标签所属工作项类型，对应工作项的type字段
    * color  标签颜色RGB
    * title  标签标题
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'labelType' => null,
        'color' => null,
        'title' => null
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
    * id  标签id
    * labelType  标签所属工作项类型，对应工作项的type字段
    * color  标签颜色RGB
    * title  标签标题
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'labelType' => 'label_type',
            'color' => 'color',
            'title' => 'title'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  标签id
    * labelType  标签所属工作项类型，对应工作项的type字段
    * color  标签颜色RGB
    * title  标签标题
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'labelType' => 'setLabelType',
            'color' => 'setColor',
            'title' => 'setTitle'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  标签id
    * labelType  标签所属工作项类型，对应工作项的type字段
    * color  标签颜色RGB
    * title  标签标题
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'labelType' => 'getLabelType',
            'color' => 'getColor',
            'title' => 'getTitle'
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
        $this->container['labelType'] = isset($data['labelType']) ? $data['labelType'] : null;
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 19)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 19.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 18)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 18.";
            }
            if (!is_null($this->container['labelType']) && (mb_strlen($this->container['labelType']) > 32)) {
                $invalidProperties[] = "invalid value for 'labelType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['labelType']) && (mb_strlen($this->container['labelType']) < 0)) {
                $invalidProperties[] = "invalid value for 'labelType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['color']) && (mb_strlen($this->container['color']) > 16)) {
                $invalidProperties[] = "invalid value for 'color', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['color']) && (mb_strlen($this->container['color']) < 0)) {
                $invalidProperties[] = "invalid value for 'color', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) > 256)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) < 2)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 2.";
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
    *  标签id
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
    * @param string|null $id 标签id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets labelType
    *  标签所属工作项类型，对应工作项的type字段
    *
    * @return string|null
    */
    public function getLabelType()
    {
        return $this->container['labelType'];
    }

    /**
    * Sets labelType
    *
    * @param string|null $labelType 标签所属工作项类型，对应工作项的type字段
    *
    * @return $this
    */
    public function setLabelType($labelType)
    {
        $this->container['labelType'] = $labelType;
        return $this;
    }

    /**
    * Gets color
    *  标签颜色RGB
    *
    * @return string|null
    */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
    * Sets color
    *
    * @param string|null $color 标签颜色RGB
    *
    * @return $this
    */
    public function setColor($color)
    {
        $this->container['color'] = $color;
        return $this;
    }

    /**
    * Gets title
    *  标签标题
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
    * @param string|null $title 标签标题
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
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

