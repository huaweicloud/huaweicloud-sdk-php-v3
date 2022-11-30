<?php

namespace HuaweiCloud\SDK\Aos\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ParseTemplateVariablesRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ParseTemplateVariablesRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * templateBody  HCL模板，描述了资源的目标状态 template_body 和 template_uri 有且仅有一个存在
    * templateUri  HCL模板文件的uri，代码需从该uri下载HCL模板获取模板内容。其描述了资源的目标状态 template_body 和 template_uri 有且仅有一个存在
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'templateBody' => 'string',
            'templateUri' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * templateBody  HCL模板，描述了资源的目标状态 template_body 和 template_uri 有且仅有一个存在
    * templateUri  HCL模板文件的uri，代码需从该uri下载HCL模板获取模板内容。其描述了资源的目标状态 template_body 和 template_uri 有且仅有一个存在
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'templateBody' => null,
        'templateUri' => null
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
    * templateBody  HCL模板，描述了资源的目标状态 template_body 和 template_uri 有且仅有一个存在
    * templateUri  HCL模板文件的uri，代码需从该uri下载HCL模板获取模板内容。其描述了资源的目标状态 template_body 和 template_uri 有且仅有一个存在
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'templateBody' => 'template_body',
            'templateUri' => 'template_uri'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * templateBody  HCL模板，描述了资源的目标状态 template_body 和 template_uri 有且仅有一个存在
    * templateUri  HCL模板文件的uri，代码需从该uri下载HCL模板获取模板内容。其描述了资源的目标状态 template_body 和 template_uri 有且仅有一个存在
    *
    * @var string[]
    */
    protected static $setters = [
            'templateBody' => 'setTemplateBody',
            'templateUri' => 'setTemplateUri'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * templateBody  HCL模板，描述了资源的目标状态 template_body 和 template_uri 有且仅有一个存在
    * templateUri  HCL模板文件的uri，代码需从该uri下载HCL模板获取模板内容。其描述了资源的目标状态 template_body 和 template_uri 有且仅有一个存在
    *
    * @var string[]
    */
    protected static $getters = [
            'templateBody' => 'getTemplateBody',
            'templateUri' => 'getTemplateUri'
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
        $this->container['templateBody'] = isset($data['templateBody']) ? $data['templateBody'] : null;
        $this->container['templateUri'] = isset($data['templateUri']) ? $data['templateUri'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['templateBody']) && (mb_strlen($this->container['templateBody']) > 51200)) {
                $invalidProperties[] = "invalid value for 'templateBody', the character length must be smaller than or equal to 51200.";
            }
            if (!is_null($this->container['templateBody']) && (mb_strlen($this->container['templateBody']) < 0)) {
                $invalidProperties[] = "invalid value for 'templateBody', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['templateUri']) && (mb_strlen($this->container['templateUri']) > 2048)) {
                $invalidProperties[] = "invalid value for 'templateUri', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['templateUri']) && (mb_strlen($this->container['templateUri']) < 0)) {
                $invalidProperties[] = "invalid value for 'templateUri', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['templateUri']) && !preg_match("/^(http|https):\/\/[\\S]*(.tf|.tf.json|.zip){1}(\\?[\\S]+)?$/", $this->container['templateUri'])) {
                $invalidProperties[] = "invalid value for 'templateUri', must be conform to the pattern /^(http|https):\/\/[\\S]*(.tf|.tf.json|.zip){1}(\\?[\\S]+)?$/.";
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
    * Gets templateBody
    *  HCL模板，描述了资源的目标状态 template_body 和 template_uri 有且仅有一个存在
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
    * @param string|null $templateBody HCL模板，描述了资源的目标状态 template_body 和 template_uri 有且仅有一个存在
    *
    * @return $this
    */
    public function setTemplateBody($templateBody)
    {
        $this->container['templateBody'] = $templateBody;
        return $this;
    }

    /**
    * Gets templateUri
    *  HCL模板文件的uri，代码需从该uri下载HCL模板获取模板内容。其描述了资源的目标状态 template_body 和 template_uri 有且仅有一个存在
    *
    * @return string|null
    */
    public function getTemplateUri()
    {
        return $this->container['templateUri'];
    }

    /**
    * Sets templateUri
    *
    * @param string|null $templateUri HCL模板文件的uri，代码需从该uri下载HCL模板获取模板内容。其描述了资源的目标状态 template_body 和 template_uri 有且仅有一个存在
    *
    * @return $this
    */
    public function setTemplateUri($templateUri)
    {
        $this->container['templateUri'] = $templateUri;
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

