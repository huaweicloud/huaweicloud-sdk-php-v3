<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateHealthReportTemplateReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateHealthReportTemplateReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * templateName  模板名称。
    * description  模板描述。
    * chaptersConfig  章节配置，key为章节编码，value为章节配置对象。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'templateName' => 'string',
            'description' => 'string',
            'chaptersConfig' => 'map[string,\HuaweiCloud\SDK\Das\V3\Model\ChapterConfigReq]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * templateName  模板名称。
    * description  模板描述。
    * chaptersConfig  章节配置，key为章节编码，value为章节配置对象。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'templateName' => null,
        'description' => null,
        'chaptersConfig' => null
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
    * description  模板描述。
    * chaptersConfig  章节配置，key为章节编码，value为章节配置对象。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'templateName' => 'template_name',
            'description' => 'description',
            'chaptersConfig' => 'chapters_config'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * templateName  模板名称。
    * description  模板描述。
    * chaptersConfig  章节配置，key为章节编码，value为章节配置对象。
    *
    * @var string[]
    */
    protected static $setters = [
            'templateName' => 'setTemplateName',
            'description' => 'setDescription',
            'chaptersConfig' => 'setChaptersConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * templateName  模板名称。
    * description  模板描述。
    * chaptersConfig  章节配置，key为章节编码，value为章节配置对象。
    *
    * @var string[]
    */
    protected static $getters = [
            'templateName' => 'getTemplateName',
            'description' => 'getDescription',
            'chaptersConfig' => 'getChaptersConfig'
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
        $this->container['templateName'] = isset($data['templateName']) ? $data['templateName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['chaptersConfig'] = isset($data['chaptersConfig']) ? $data['chaptersConfig'] : null;
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
            if ((mb_strlen($this->container['templateName']) > 64)) {
                $invalidProperties[] = "invalid value for 'templateName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['templateName']) < 1)) {
                $invalidProperties[] = "invalid value for 'templateName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 256)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['chaptersConfig'] === null) {
            $invalidProperties[] = "'chaptersConfig' can't be null";
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
    * Gets description
    *  模板描述。
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
    * @param string|null $description 模板描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets chaptersConfig
    *  章节配置，key为章节编码，value为章节配置对象。
    *
    * @return map[string,\HuaweiCloud\SDK\Das\V3\Model\ChapterConfigReq]
    */
    public function getChaptersConfig()
    {
        return $this->container['chaptersConfig'];
    }

    /**
    * Sets chaptersConfig
    *
    * @param map[string,\HuaweiCloud\SDK\Das\V3\Model\ChapterConfigReq] $chaptersConfig 章节配置，key为章节编码，value为章节配置对象。
    *
    * @return $this
    */
    public function setChaptersConfig($chaptersConfig)
    {
        $this->container['chaptersConfig'] = $chaptersConfig;
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

