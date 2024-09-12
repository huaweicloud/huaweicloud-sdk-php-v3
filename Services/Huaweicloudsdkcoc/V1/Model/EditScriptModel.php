<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EditScriptModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EditScriptModel';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * description  脚本描述
    * content  脚本内容
    * properties  properties
    * scriptParams  脚本入参
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'description' => 'string',
            'content' => 'string',
            'properties' => '\HuaweiCloud\SDK\Coc\V1\Model\ScriptPropertiesModel',
            'scriptParams' => '\HuaweiCloud\SDK\Coc\V1\Model\ScriptParamDefine[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * description  脚本描述
    * content  脚本内容
    * properties  properties
    * scriptParams  脚本入参
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'description' => null,
        'content' => null,
        'properties' => null,
        'scriptParams' => null
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
    * description  脚本描述
    * content  脚本内容
    * properties  properties
    * scriptParams  脚本入参
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'description' => 'description',
            'content' => 'content',
            'properties' => 'properties',
            'scriptParams' => 'script_params'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * description  脚本描述
    * content  脚本内容
    * properties  properties
    * scriptParams  脚本入参
    *
    * @var string[]
    */
    protected static $setters = [
            'description' => 'setDescription',
            'content' => 'setContent',
            'properties' => 'setProperties',
            'scriptParams' => 'setScriptParams'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * description  脚本描述
    * content  脚本内容
    * properties  properties
    * scriptParams  脚本入参
    *
    * @var string[]
    */
    protected static $getters = [
            'description' => 'getDescription',
            'content' => 'getContent',
            'properties' => 'getProperties',
            'scriptParams' => 'getScriptParams'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
        $this->container['scriptParams'] = isset($data['scriptParams']) ? $data['scriptParams'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
            if ((mb_strlen($this->container['description']) > 256)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['content'] === null) {
            $invalidProperties[] = "'content' can't be null";
        }
            if ((mb_strlen($this->container['content']) > 4096)) {
                $invalidProperties[] = "invalid value for 'content', the character length must be smaller than or equal to 4096.";
            }
            if ((mb_strlen($this->container['content']) < 1)) {
                $invalidProperties[] = "invalid value for 'content', the character length must be bigger than or equal to 1.";
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
    * Gets description
    *  脚本描述
    *
    * @return string
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string $description 脚本描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets content
    *  脚本内容
    *
    * @return string
    */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
    * Sets content
    *
    * @param string $content 脚本内容
    *
    * @return $this
    */
    public function setContent($content)
    {
        $this->container['content'] = $content;
        return $this;
    }

    /**
    * Gets properties
    *  properties
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\ScriptPropertiesModel|null
    */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
    * Sets properties
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\ScriptPropertiesModel|null $properties properties
    *
    * @return $this
    */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;
        return $this;
    }

    /**
    * Gets scriptParams
    *  脚本入参
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\ScriptParamDefine[]|null
    */
    public function getScriptParams()
    {
        return $this->container['scriptParams'];
    }

    /**
    * Sets scriptParams
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\ScriptParamDefine[]|null $scriptParams 脚本入参
    *
    * @return $this
    */
    public function setScriptParams($scriptParams)
    {
        $this->container['scriptParams'] = $scriptParams;
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
