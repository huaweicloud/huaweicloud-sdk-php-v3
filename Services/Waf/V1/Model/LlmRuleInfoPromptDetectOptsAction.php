<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LlmRuleInfoPromptDetectOptsAction implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LlmRuleInfo_prompt_detect_opts_action';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * category  防护动作
    * response  response
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'category' => 'string',
            'response' => '\HuaweiCloud\SDK\Waf\V1\Model\LlmRuleInfoPromptDetectOptsActionResponse'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * category  防护动作
    * response  response
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'category' => null,
        'response' => null
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
    * category  防护动作
    * response  response
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'category' => 'category',
            'response' => 'response'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * category  防护动作
    * response  response
    *
    * @var string[]
    */
    protected static $setters = [
            'category' => 'setCategory',
            'response' => 'setResponse'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * category  防护动作
    * response  response
    *
    * @var string[]
    */
    protected static $getters = [
            'category' => 'getCategory',
            'response' => 'getResponse'
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
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['response'] = isset($data['response']) ? $data['response'] : null;
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
    * Gets category
    *  防护动作
    *
    * @return string|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string|null $category 防护动作
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets response
    *  response
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\LlmRuleInfoPromptDetectOptsActionResponse|null
    */
    public function getResponse()
    {
        return $this->container['response'];
    }

    /**
    * Sets response
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\LlmRuleInfoPromptDetectOptsActionResponse|null $response response
    *
    * @return $this
    */
    public function setResponse($response)
    {
        $this->container['response'] = $response;
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

