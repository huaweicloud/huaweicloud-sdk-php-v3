<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateLlmConfigReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateLlmConfigReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  大语言模型配置名称。
    * llmUrl  大语言模型地址。
    * apiKey  密钥。
    * model  model参数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'llmUrl' => 'string',
            'apiKey' => 'string',
            'model' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  大语言模型配置名称。
    * llmUrl  大语言模型地址。
    * apiKey  密钥。
    * model  model参数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'llmUrl' => null,
        'apiKey' => null,
        'model' => null
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
    * name  大语言模型配置名称。
    * llmUrl  大语言模型地址。
    * apiKey  密钥。
    * model  model参数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'llmUrl' => 'llm_url',
            'apiKey' => 'api_key',
            'model' => 'model'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  大语言模型配置名称。
    * llmUrl  大语言模型地址。
    * apiKey  密钥。
    * model  model参数
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'llmUrl' => 'setLlmUrl',
            'apiKey' => 'setApiKey',
            'model' => 'setModel'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  大语言模型配置名称。
    * llmUrl  大语言模型地址。
    * apiKey  密钥。
    * model  model参数
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'llmUrl' => 'getLlmUrl',
            'apiKey' => 'getApiKey',
            'model' => 'getModel'
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
        $this->container['llmUrl'] = isset($data['llmUrl']) ? $data['llmUrl'] : null;
        $this->container['apiKey'] = isset($data['apiKey']) ? $data['apiKey'] : null;
        $this->container['model'] = isset($data['model']) ? $data['model'] : null;
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
            if ((mb_strlen($this->container['name']) > 32)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['llmUrl'] === null) {
            $invalidProperties[] = "'llmUrl' can't be null";
        }
            if ((mb_strlen($this->container['llmUrl']) > 512)) {
                $invalidProperties[] = "invalid value for 'llmUrl', the character length must be smaller than or equal to 512.";
            }
            if ((mb_strlen($this->container['llmUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'llmUrl', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['apiKey'] === null) {
            $invalidProperties[] = "'apiKey' can't be null";
        }
            if ((mb_strlen($this->container['apiKey']) > 128)) {
                $invalidProperties[] = "invalid value for 'apiKey', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['apiKey']) < 1)) {
                $invalidProperties[] = "invalid value for 'apiKey', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['model']) && (mb_strlen($this->container['model']) > 64)) {
                $invalidProperties[] = "invalid value for 'model', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['model']) && (mb_strlen($this->container['model']) < 0)) {
                $invalidProperties[] = "invalid value for 'model', the character length must be bigger than or equal to 0.";
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
    *  大语言模型配置名称。
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
    * @param string $name 大语言模型配置名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets llmUrl
    *  大语言模型地址。
    *
    * @return string
    */
    public function getLlmUrl()
    {
        return $this->container['llmUrl'];
    }

    /**
    * Sets llmUrl
    *
    * @param string $llmUrl 大语言模型地址。
    *
    * @return $this
    */
    public function setLlmUrl($llmUrl)
    {
        $this->container['llmUrl'] = $llmUrl;
        return $this;
    }

    /**
    * Gets apiKey
    *  密钥。
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
    * @param string $apiKey 密钥。
    *
    * @return $this
    */
    public function setApiKey($apiKey)
    {
        $this->container['apiKey'] = $apiKey;
        return $this;
    }

    /**
    * Gets model
    *  model参数
    *
    * @return string|null
    */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
    * Sets model
    *
    * @param string|null $model model参数
    *
    * @return $this
    */
    public function setModel($model)
    {
        $this->container['model'] = $model;
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

