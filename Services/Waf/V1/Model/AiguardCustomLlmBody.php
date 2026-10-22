<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AiguardCustomLlmBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AiguardCustomLlmBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  自定义大模型名称
    * description  自定义大模型描述
    * modelName  模型名称
    * protocol  协议类型
    * url  API地址
    * apiKey  API密钥
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'modelName' => 'string',
            'protocol' => 'string',
            'url' => 'string',
            'apiKey' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  自定义大模型名称
    * description  自定义大模型描述
    * modelName  模型名称
    * protocol  协议类型
    * url  API地址
    * apiKey  API密钥
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'modelName' => null,
        'protocol' => null,
        'url' => null,
        'apiKey' => null
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
    * name  自定义大模型名称
    * description  自定义大模型描述
    * modelName  模型名称
    * protocol  协议类型
    * url  API地址
    * apiKey  API密钥
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'modelName' => 'model_name',
            'protocol' => 'protocol',
            'url' => 'url',
            'apiKey' => 'api_key'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  自定义大模型名称
    * description  自定义大模型描述
    * modelName  模型名称
    * protocol  协议类型
    * url  API地址
    * apiKey  API密钥
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'modelName' => 'setModelName',
            'protocol' => 'setProtocol',
            'url' => 'setUrl',
            'apiKey' => 'setApiKey'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  自定义大模型名称
    * description  自定义大模型描述
    * modelName  模型名称
    * protocol  协议类型
    * url  API地址
    * apiKey  API密钥
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'modelName' => 'getModelName',
            'protocol' => 'getProtocol',
            'url' => 'getUrl',
            'apiKey' => 'getApiKey'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['modelName'] = isset($data['modelName']) ? $data['modelName'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['apiKey'] = isset($data['apiKey']) ? $data['apiKey'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 256)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 256.";
            }
        if ($this->container['modelName'] === null) {
            $invalidProperties[] = "'modelName' can't be null";
        }
        if ($this->container['protocol'] === null) {
            $invalidProperties[] = "'protocol' can't be null";
        }
        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
        if ($this->container['apiKey'] === null) {
            $invalidProperties[] = "'apiKey' can't be null";
        }
            if ((mb_strlen($this->container['apiKey']) > 512)) {
                $invalidProperties[] = "invalid value for 'apiKey', the character length must be smaller than or equal to 512.";
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
    *  自定义大模型名称
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 自定义大模型名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  自定义大模型描述
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
    * @param string|null $description 自定义大模型描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets modelName
    *  模型名称
    *
    * @return string
    */

    /**
    * Sets modelName
    *
    * @param string $modelName 模型名称
    *
    * @return $this
    */
    public function setModelName($modelName)
    {
        $this->container['modelName'] = $modelName;
        return $this;
    }

    /**
    * Gets protocol
    *  协议类型
    *
    * @return string
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param string $protocol 协议类型
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets url
    *  API地址
    *
    * @return string
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string $url API地址
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets apiKey
    *  API密钥
    *
    * @return string
    */
    public function getApiKey()
    {
        return $this->container['apiKey'];
    }

    /**
    * Sets apiKey
    *
    * @param string $apiKey API密钥
    *
    * @return $this
    */
    public function setApiKey($apiKey)
    {
        $this->container['apiKey'] = $apiKey;
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

