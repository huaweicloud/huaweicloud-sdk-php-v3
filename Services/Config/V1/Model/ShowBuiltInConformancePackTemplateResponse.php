<?php

namespace HuaweiCloud\SDK\Config\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowBuiltInConformancePackTemplateResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowBuiltInConformancePackTemplateResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  预定义合规包模板ID。
    * templateKey  预定义合规包模板名称。
    * description  预定义合规包模板描述。
    * templateBody  预定义合规包模板内容。
    * parameters  预定义合规包模板参数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'templateKey' => 'string',
            'description' => 'string',
            'templateBody' => 'string',
            'parameters' => 'map[string,\HuaweiCloud\SDK\Config\V1\Model\TemplateParameterDefinition]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  预定义合规包模板ID。
    * templateKey  预定义合规包模板名称。
    * description  预定义合规包模板描述。
    * templateBody  预定义合规包模板内容。
    * parameters  预定义合规包模板参数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'templateKey' => null,
        'description' => null,
        'templateBody' => null,
        'parameters' => null
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
    * id  预定义合规包模板ID。
    * templateKey  预定义合规包模板名称。
    * description  预定义合规包模板描述。
    * templateBody  预定义合规包模板内容。
    * parameters  预定义合规包模板参数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'templateKey' => 'template_key',
            'description' => 'description',
            'templateBody' => 'template_body',
            'parameters' => 'parameters'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  预定义合规包模板ID。
    * templateKey  预定义合规包模板名称。
    * description  预定义合规包模板描述。
    * templateBody  预定义合规包模板内容。
    * parameters  预定义合规包模板参数。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'templateKey' => 'setTemplateKey',
            'description' => 'setDescription',
            'templateBody' => 'setTemplateBody',
            'parameters' => 'setParameters'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  预定义合规包模板ID。
    * templateKey  预定义合规包模板名称。
    * description  预定义合规包模板描述。
    * templateBody  预定义合规包模板内容。
    * parameters  预定义合规包模板参数。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'templateKey' => 'getTemplateKey',
            'description' => 'getDescription',
            'templateBody' => 'getTemplateBody',
            'parameters' => 'getParameters'
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
        $this->container['templateKey'] = isset($data['templateKey']) ? $data['templateKey'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['templateBody'] = isset($data['templateBody']) ? $data['templateBody'] : null;
        $this->container['parameters'] = isset($data['parameters']) ? $data['parameters'] : null;
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
    *  预定义合规包模板ID。
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
    * @param string|null $id 预定义合规包模板ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets templateKey
    *  预定义合规包模板名称。
    *
    * @return string|null
    */
    public function getTemplateKey()
    {
        return $this->container['templateKey'];
    }

    /**
    * Sets templateKey
    *
    * @param string|null $templateKey 预定义合规包模板名称。
    *
    * @return $this
    */
    public function setTemplateKey($templateKey)
    {
        $this->container['templateKey'] = $templateKey;
        return $this;
    }

    /**
    * Gets description
    *  预定义合规包模板描述。
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
    * @param string|null $description 预定义合规包模板描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets templateBody
    *  预定义合规包模板内容。
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
    * @param string|null $templateBody 预定义合规包模板内容。
    *
    * @return $this
    */
    public function setTemplateBody($templateBody)
    {
        $this->container['templateBody'] = $templateBody;
        return $this;
    }

    /**
    * Gets parameters
    *  预定义合规包模板参数。
    *
    * @return map[string,\HuaweiCloud\SDK\Config\V1\Model\TemplateParameterDefinition]|null
    */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
    * Sets parameters
    *
    * @param map[string,\HuaweiCloud\SDK\Config\V1\Model\TemplateParameterDefinition]|null $parameters 预定义合规包模板参数。
    *
    * @return $this
    */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;
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

