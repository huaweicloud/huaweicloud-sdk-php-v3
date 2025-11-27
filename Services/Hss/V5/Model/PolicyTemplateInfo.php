<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PolicyTemplateInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PolicyTemplateInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**: 模板ID **取值范围**: 字符长度0-128
    * templateName  **参数解释**: 模板名称 **取值范围**: 字符长度1-255
    * templateType  **参数解释**: 模板类型 **取值范围**: 字符长度1-16
    * description  **参数解释**: 描述 **取值范围**: 字符长度0-2048
    * targetKind  **参数解释**: 策略模板应用资源类型，多个资源类型通过分号份隔连接 **取值范围**: 字符长度1-255
    * tag  **参数解释**: 标签 **取值范围**: 字符长度0-2048
    * level  **参数解释**: 推荐级别 **取值范围**: 字符长度1-5
    * constraintTemplate  **参数解释**: 策略模板内容 **取值范围**: 字符长度1-65535
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'templateName' => 'string',
            'templateType' => 'string',
            'description' => 'string',
            'targetKind' => 'string',
            'tag' => 'string',
            'level' => 'string',
            'constraintTemplate' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**: 模板ID **取值范围**: 字符长度0-128
    * templateName  **参数解释**: 模板名称 **取值范围**: 字符长度1-255
    * templateType  **参数解释**: 模板类型 **取值范围**: 字符长度1-16
    * description  **参数解释**: 描述 **取值范围**: 字符长度0-2048
    * targetKind  **参数解释**: 策略模板应用资源类型，多个资源类型通过分号份隔连接 **取值范围**: 字符长度1-255
    * tag  **参数解释**: 标签 **取值范围**: 字符长度0-2048
    * level  **参数解释**: 推荐级别 **取值范围**: 字符长度1-5
    * constraintTemplate  **参数解释**: 策略模板内容 **取值范围**: 字符长度1-65535
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'templateName' => null,
        'templateType' => null,
        'description' => null,
        'targetKind' => null,
        'tag' => null,
        'level' => null,
        'constraintTemplate' => null
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
    * id  **参数解释**: 模板ID **取值范围**: 字符长度0-128
    * templateName  **参数解释**: 模板名称 **取值范围**: 字符长度1-255
    * templateType  **参数解释**: 模板类型 **取值范围**: 字符长度1-16
    * description  **参数解释**: 描述 **取值范围**: 字符长度0-2048
    * targetKind  **参数解释**: 策略模板应用资源类型，多个资源类型通过分号份隔连接 **取值范围**: 字符长度1-255
    * tag  **参数解释**: 标签 **取值范围**: 字符长度0-2048
    * level  **参数解释**: 推荐级别 **取值范围**: 字符长度1-5
    * constraintTemplate  **参数解释**: 策略模板内容 **取值范围**: 字符长度1-65535
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'templateName' => 'template_name',
            'templateType' => 'template_type',
            'description' => 'description',
            'targetKind' => 'target_kind',
            'tag' => 'tag',
            'level' => 'level',
            'constraintTemplate' => 'constraint_template'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**: 模板ID **取值范围**: 字符长度0-128
    * templateName  **参数解释**: 模板名称 **取值范围**: 字符长度1-255
    * templateType  **参数解释**: 模板类型 **取值范围**: 字符长度1-16
    * description  **参数解释**: 描述 **取值范围**: 字符长度0-2048
    * targetKind  **参数解释**: 策略模板应用资源类型，多个资源类型通过分号份隔连接 **取值范围**: 字符长度1-255
    * tag  **参数解释**: 标签 **取值范围**: 字符长度0-2048
    * level  **参数解释**: 推荐级别 **取值范围**: 字符长度1-5
    * constraintTemplate  **参数解释**: 策略模板内容 **取值范围**: 字符长度1-65535
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'templateName' => 'setTemplateName',
            'templateType' => 'setTemplateType',
            'description' => 'setDescription',
            'targetKind' => 'setTargetKind',
            'tag' => 'setTag',
            'level' => 'setLevel',
            'constraintTemplate' => 'setConstraintTemplate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**: 模板ID **取值范围**: 字符长度0-128
    * templateName  **参数解释**: 模板名称 **取值范围**: 字符长度1-255
    * templateType  **参数解释**: 模板类型 **取值范围**: 字符长度1-16
    * description  **参数解释**: 描述 **取值范围**: 字符长度0-2048
    * targetKind  **参数解释**: 策略模板应用资源类型，多个资源类型通过分号份隔连接 **取值范围**: 字符长度1-255
    * tag  **参数解释**: 标签 **取值范围**: 字符长度0-2048
    * level  **参数解释**: 推荐级别 **取值范围**: 字符长度1-5
    * constraintTemplate  **参数解释**: 策略模板内容 **取值范围**: 字符长度1-65535
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'templateName' => 'getTemplateName',
            'templateType' => 'getTemplateType',
            'description' => 'getDescription',
            'targetKind' => 'getTargetKind',
            'tag' => 'getTag',
            'level' => 'getLevel',
            'constraintTemplate' => 'getConstraintTemplate'
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
        $this->container['templateName'] = isset($data['templateName']) ? $data['templateName'] : null;
        $this->container['templateType'] = isset($data['templateType']) ? $data['templateType'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['targetKind'] = isset($data['targetKind']) ? $data['targetKind'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['constraintTemplate'] = isset($data['constraintTemplate']) ? $data['constraintTemplate'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
            if ((mb_strlen($this->container['id']) > 128)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['templateName'] === null) {
            $invalidProperties[] = "'templateName' can't be null";
        }
            if ((mb_strlen($this->container['templateName']) > 255)) {
                $invalidProperties[] = "invalid value for 'templateName', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['templateName']) < 1)) {
                $invalidProperties[] = "invalid value for 'templateName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['templateType'] === null) {
            $invalidProperties[] = "'templateType' can't be null";
        }
            if ((mb_strlen($this->container['templateType']) > 16)) {
                $invalidProperties[] = "invalid value for 'templateType', the character length must be smaller than or equal to 16.";
            }
            if ((mb_strlen($this->container['templateType']) < 1)) {
                $invalidProperties[] = "invalid value for 'templateType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 2048)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['targetKind'] === null) {
            $invalidProperties[] = "'targetKind' can't be null";
        }
            if ((mb_strlen($this->container['targetKind']) > 255)) {
                $invalidProperties[] = "invalid value for 'targetKind', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['targetKind']) < 1)) {
                $invalidProperties[] = "invalid value for 'targetKind', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/[1-9]*/", $this->container['targetKind'])) {
                $invalidProperties[] = "invalid value for 'targetKind', must be conform to the pattern /[1-9]*/.";
            }
            if (!is_null($this->container['tag']) && (mb_strlen($this->container['tag']) > 2048)) {
                $invalidProperties[] = "invalid value for 'tag', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['tag']) && (mb_strlen($this->container['tag']) < 0)) {
                $invalidProperties[] = "invalid value for 'tag', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['level']) && (mb_strlen($this->container['level']) > 5)) {
                $invalidProperties[] = "invalid value for 'level', the character length must be smaller than or equal to 5.";
            }
            if (!is_null($this->container['level']) && (mb_strlen($this->container['level']) < 1)) {
                $invalidProperties[] = "invalid value for 'level', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['constraintTemplate'] === null) {
            $invalidProperties[] = "'constraintTemplate' can't be null";
        }
            if ((mb_strlen($this->container['constraintTemplate']) > 65535)) {
                $invalidProperties[] = "invalid value for 'constraintTemplate', the character length must be smaller than or equal to 65535.";
            }
            if ((mb_strlen($this->container['constraintTemplate']) < 1)) {
                $invalidProperties[] = "invalid value for 'constraintTemplate', the character length must be bigger than or equal to 1.";
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
    *  **参数解释**: 模板ID **取值范围**: 字符长度0-128
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id **参数解释**: 模板ID **取值范围**: 字符长度0-128
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets templateName
    *  **参数解释**: 模板名称 **取值范围**: 字符长度1-255
    *
    * @return string
    */
    public function getTemplateName()
    {
        return $this->container['templateName'];
    }

    /**
    * Sets templateName
    *
    * @param string $templateName **参数解释**: 模板名称 **取值范围**: 字符长度1-255
    *
    * @return $this
    */
    public function setTemplateName($templateName)
    {
        $this->container['templateName'] = $templateName;
        return $this;
    }

    /**
    * Gets templateType
    *  **参数解释**: 模板类型 **取值范围**: 字符长度1-16
    *
    * @return string
    */
    public function getTemplateType()
    {
        return $this->container['templateType'];
    }

    /**
    * Sets templateType
    *
    * @param string $templateType **参数解释**: 模板类型 **取值范围**: 字符长度1-16
    *
    * @return $this
    */
    public function setTemplateType($templateType)
    {
        $this->container['templateType'] = $templateType;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**: 描述 **取值范围**: 字符长度0-2048
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
    * @param string|null $description **参数解释**: 描述 **取值范围**: 字符长度0-2048
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets targetKind
    *  **参数解释**: 策略模板应用资源类型，多个资源类型通过分号份隔连接 **取值范围**: 字符长度1-255
    *
    * @return string
    */
    public function getTargetKind()
    {
        return $this->container['targetKind'];
    }

    /**
    * Sets targetKind
    *
    * @param string $targetKind **参数解释**: 策略模板应用资源类型，多个资源类型通过分号份隔连接 **取值范围**: 字符长度1-255
    *
    * @return $this
    */
    public function setTargetKind($targetKind)
    {
        $this->container['targetKind'] = $targetKind;
        return $this;
    }

    /**
    * Gets tag
    *  **参数解释**: 标签 **取值范围**: 字符长度0-2048
    *
    * @return string|null
    */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
    * Sets tag
    *
    * @param string|null $tag **参数解释**: 标签 **取值范围**: 字符长度0-2048
    *
    * @return $this
    */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;
        return $this;
    }

    /**
    * Gets level
    *  **参数解释**: 推荐级别 **取值范围**: 字符长度1-5
    *
    * @return string|null
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param string|null $level **参数解释**: 推荐级别 **取值范围**: 字符长度1-5
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets constraintTemplate
    *  **参数解释**: 策略模板内容 **取值范围**: 字符长度1-65535
    *
    * @return string
    */
    public function getConstraintTemplate()
    {
        return $this->container['constraintTemplate'];
    }

    /**
    * Sets constraintTemplate
    *
    * @param string $constraintTemplate **参数解释**: 策略模板内容 **取值范围**: 字符长度1-65535
    *
    * @return $this
    */
    public function setConstraintTemplate($constraintTemplate)
    {
        $this->container['constraintTemplate'] = $constraintTemplate;
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

