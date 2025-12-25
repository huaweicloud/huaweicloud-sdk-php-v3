<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TemplateField implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TemplateField';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * defaultValue  默认值
    * description  描述信息
    * example  示例
    * name  规则名称
    * required  是否必填
    * restrictions  相关描述信息
    * templateFieldId  UUID
    * title  相关标题
    * type  规则类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'defaultValue' => 'string',
            'description' => 'string',
            'example' => 'string',
            'name' => 'string',
            'required' => 'bool',
            'restrictions' => '\HuaweiCloud\SDK\SecMaster\V1\Model\Restriction[]',
            'templateFieldId' => 'string',
            'title' => 'string',
            'type' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * defaultValue  默认值
    * description  描述信息
    * example  示例
    * name  规则名称
    * required  是否必填
    * restrictions  相关描述信息
    * templateFieldId  UUID
    * title  相关标题
    * type  规则类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'defaultValue' => null,
        'description' => null,
        'example' => null,
        'name' => null,
        'required' => null,
        'restrictions' => null,
        'templateFieldId' => null,
        'title' => null,
        'type' => null
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
    * defaultValue  默认值
    * description  描述信息
    * example  示例
    * name  规则名称
    * required  是否必填
    * restrictions  相关描述信息
    * templateFieldId  UUID
    * title  相关标题
    * type  规则类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'defaultValue' => 'default_value',
            'description' => 'description',
            'example' => 'example',
            'name' => 'name',
            'required' => 'required',
            'restrictions' => 'restrictions',
            'templateFieldId' => 'template_field_id',
            'title' => 'title',
            'type' => 'type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * defaultValue  默认值
    * description  描述信息
    * example  示例
    * name  规则名称
    * required  是否必填
    * restrictions  相关描述信息
    * templateFieldId  UUID
    * title  相关标题
    * type  规则类型
    *
    * @var string[]
    */
    protected static $setters = [
            'defaultValue' => 'setDefaultValue',
            'description' => 'setDescription',
            'example' => 'setExample',
            'name' => 'setName',
            'required' => 'setRequired',
            'restrictions' => 'setRestrictions',
            'templateFieldId' => 'setTemplateFieldId',
            'title' => 'setTitle',
            'type' => 'setType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * defaultValue  默认值
    * description  描述信息
    * example  示例
    * name  规则名称
    * required  是否必填
    * restrictions  相关描述信息
    * templateFieldId  UUID
    * title  相关标题
    * type  规则类型
    *
    * @var string[]
    */
    protected static $getters = [
            'defaultValue' => 'getDefaultValue',
            'description' => 'getDescription',
            'example' => 'getExample',
            'name' => 'getName',
            'required' => 'getRequired',
            'restrictions' => 'getRestrictions',
            'templateFieldId' => 'getTemplateFieldId',
            'title' => 'getTitle',
            'type' => 'getType'
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
        $this->container['defaultValue'] = isset($data['defaultValue']) ? $data['defaultValue'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['example'] = isset($data['example']) ? $data['example'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['required'] = isset($data['required']) ? $data['required'] : null;
        $this->container['restrictions'] = isset($data['restrictions']) ? $data['restrictions'] : null;
        $this->container['templateFieldId'] = isset($data['templateFieldId']) ? $data['templateFieldId'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['defaultValue']) && (mb_strlen($this->container['defaultValue']) > 1024)) {
                $invalidProperties[] = "invalid value for 'defaultValue', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['defaultValue']) && (mb_strlen($this->container['defaultValue']) < 5)) {
                $invalidProperties[] = "invalid value for 'defaultValue', the character length must be bigger than or equal to 5.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['example']) && (mb_strlen($this->container['example']) > 1024)) {
                $invalidProperties[] = "invalid value for 'example', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['example']) && (mb_strlen($this->container['example']) < 5)) {
                $invalidProperties[] = "invalid value for 'example', the character length must be bigger than or equal to 5.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 63)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 63.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 5)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 5.";
            }
            if (!is_null($this->container['templateFieldId']) && (mb_strlen($this->container['templateFieldId']) > 36)) {
                $invalidProperties[] = "invalid value for 'templateFieldId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['templateFieldId']) && (mb_strlen($this->container['templateFieldId']) < 36)) {
                $invalidProperties[] = "invalid value for 'templateFieldId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) > 256)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) < 5)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 5.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 63)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 63.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 5)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 5.";
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
    * Gets defaultValue
    *  默认值
    *
    * @return string|null
    */
    public function getDefaultValue()
    {
        return $this->container['defaultValue'];
    }

    /**
    * Sets defaultValue
    *
    * @param string|null $defaultValue 默认值
    *
    * @return $this
    */
    public function setDefaultValue($defaultValue)
    {
        $this->container['defaultValue'] = $defaultValue;
        return $this;
    }

    /**
    * Gets description
    *  描述信息
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
    * @param string|null $description 描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets example
    *  示例
    *
    * @return string|null
    */
    public function getExample()
    {
        return $this->container['example'];
    }

    /**
    * Sets example
    *
    * @param string|null $example 示例
    *
    * @return $this
    */
    public function setExample($example)
    {
        $this->container['example'] = $example;
        return $this;
    }

    /**
    * Gets name
    *  规则名称
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
    * @param string|null $name 规则名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets required
    *  是否必填
    *
    * @return bool|null
    */
    public function getRequired()
    {
        return $this->container['required'];
    }

    /**
    * Sets required
    *
    * @param bool|null $required 是否必填
    *
    * @return $this
    */
    public function setRequired($required)
    {
        $this->container['required'] = $required;
        return $this;
    }

    /**
    * Gets restrictions
    *  相关描述信息
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\Restriction[]|null
    */
    public function getRestrictions()
    {
        return $this->container['restrictions'];
    }

    /**
    * Sets restrictions
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\Restriction[]|null $restrictions 相关描述信息
    *
    * @return $this
    */
    public function setRestrictions($restrictions)
    {
        $this->container['restrictions'] = $restrictions;
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
    *  相关标题
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
    * @param string|null $title 相关标题
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
    *  规则类型
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
    * @param string|null $type 规则类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
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

