<?php

namespace HuaweiCloud\SDK\Rgc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateTemplateRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateTemplateRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * templateName  模板名称。
    * templateType  模板类型，包括预置和自定义。
    * templateDescription  模板描述。
    * templateBody  模板内容。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'templateName' => 'string',
            'templateType' => 'string',
            'templateDescription' => 'string',
            'templateBody' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * templateName  模板名称。
    * templateType  模板类型，包括预置和自定义。
    * templateDescription  模板描述。
    * templateBody  模板内容。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'templateName' => null,
        'templateType' => null,
        'templateDescription' => null,
        'templateBody' => null
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
    * templateName  模板名称。
    * templateType  模板类型，包括预置和自定义。
    * templateDescription  模板描述。
    * templateBody  模板内容。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'templateName' => 'template_name',
            'templateType' => 'template_type',
            'templateDescription' => 'template_description',
            'templateBody' => 'template_body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * templateName  模板名称。
    * templateType  模板类型，包括预置和自定义。
    * templateDescription  模板描述。
    * templateBody  模板内容。
    *
    * @var string[]
    */
    protected static $setters = [
            'templateName' => 'setTemplateName',
            'templateType' => 'setTemplateType',
            'templateDescription' => 'setTemplateDescription',
            'templateBody' => 'setTemplateBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * templateName  模板名称。
    * templateType  模板类型，包括预置和自定义。
    * templateDescription  模板描述。
    * templateBody  模板内容。
    *
    * @var string[]
    */
    protected static $getters = [
            'templateName' => 'getTemplateName',
            'templateType' => 'getTemplateType',
            'templateDescription' => 'getTemplateDescription',
            'templateBody' => 'getTemplateBody'
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
    const TEMPLATE_TYPE_PREDEFINED = 'predefined';
    const TEMPLATE_TYPE_CUSTOMIZED = 'customized';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTemplateTypeAllowableValues()
    {
        return [
            self::TEMPLATE_TYPE_PREDEFINED,
            self::TEMPLATE_TYPE_CUSTOMIZED,
        ];
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
        $this->container['templateName'] = isset($data['templateName']) ? $data['templateName'] : null;
        $this->container['templateType'] = isset($data['templateType']) ? $data['templateType'] : null;
        $this->container['templateDescription'] = isset($data['templateDescription']) ? $data['templateDescription'] : null;
        $this->container['templateBody'] = isset($data['templateBody']) ? $data['templateBody'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['templateName'] === null) {
            $invalidProperties[] = "'templateName' can't be null";
        }
            if ((mb_strlen($this->container['templateName']) > 128)) {
                $invalidProperties[] = "invalid value for 'templateName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['templateName']) < 1)) {
                $invalidProperties[] = "invalid value for 'templateName', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[\\u4E00-\\u9FA5A-Za-z][\\u4E00-\\u9FA5A-Za-z0-9_-]{0,127}$/", $this->container['templateName'])) {
                $invalidProperties[] = "invalid value for 'templateName', must be conform to the pattern /^[\\u4E00-\\u9FA5A-Za-z][\\u4E00-\\u9FA5A-Za-z0-9_-]{0,127}$/.";
            }
        if ($this->container['templateType'] === null) {
            $invalidProperties[] = "'templateType' can't be null";
        }
            $allowedValues = $this->getTemplateTypeAllowableValues();
                if (!is_null($this->container['templateType']) && !in_array($this->container['templateType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'templateType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['templateDescription']) && (mb_strlen($this->container['templateDescription']) > 1024)) {
                $invalidProperties[] = "invalid value for 'templateDescription', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['templateDescription']) && (mb_strlen($this->container['templateDescription']) < 0)) {
                $invalidProperties[] = "invalid value for 'templateDescription', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['templateBody']) && (mb_strlen($this->container['templateBody']) > 51200)) {
                $invalidProperties[] = "invalid value for 'templateBody', the character length must be smaller than or equal to 51200.";
            }
            if (!is_null($this->container['templateBody']) && (mb_strlen($this->container['templateBody']) < 0)) {
                $invalidProperties[] = "invalid value for 'templateBody', the character length must be bigger than or equal to 0.";
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
    * Gets templateName
    *  模板名称。
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
    * @param string $templateName 模板名称。
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
    *  模板类型，包括预置和自定义。
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
    * @param string $templateType 模板类型，包括预置和自定义。
    *
    * @return $this
    */
    public function setTemplateType($templateType)
    {
        $this->container['templateType'] = $templateType;
        return $this;
    }

    /**
    * Gets templateDescription
    *  模板描述。
    *
    * @return string|null
    */
    public function getTemplateDescription()
    {
        return $this->container['templateDescription'];
    }

    /**
    * Sets templateDescription
    *
    * @param string|null $templateDescription 模板描述。
    *
    * @return $this
    */
    public function setTemplateDescription($templateDescription)
    {
        $this->container['templateDescription'] = $templateDescription;
        return $this;
    }

    /**
    * Gets templateBody
    *  模板内容。
    *
    * @return string|null
    */
    public function getTemplateBody()
    {
        return $this->container['templateBody'];
    }

    /**
    * Sets templateBody
    *
    * @param string|null $templateBody 模板内容。
    *
    * @return $this
    */
    public function setTemplateBody($templateBody)
    {
        $this->container['templateBody'] = $templateBody;
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

