<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LlmRuleInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LlmRuleInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  规则id
    * name  规则名
    * discription  规则描述
    * url  模型问答URL
    * promptDetectOpts  promptDetectOpts
    * respDetectOpts  respDetectOpts
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'discription' => 'string',
            'url' => 'string',
            'promptDetectOpts' => '\HuaweiCloud\SDK\Waf\V1\Model\LlmRuleInfoPromptDetectOpts',
            'respDetectOpts' => '\HuaweiCloud\SDK\Waf\V1\Model\LlmRuleInfoRespDetectOpts'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  规则id
    * name  规则名
    * discription  规则描述
    * url  模型问答URL
    * promptDetectOpts  promptDetectOpts
    * respDetectOpts  respDetectOpts
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'discription' => null,
        'url' => null,
        'promptDetectOpts' => null,
        'respDetectOpts' => null
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
    * id  规则id
    * name  规则名
    * discription  规则描述
    * url  模型问答URL
    * promptDetectOpts  promptDetectOpts
    * respDetectOpts  respDetectOpts
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'discription' => 'discription',
            'url' => 'url',
            'promptDetectOpts' => 'prompt_detect_opts',
            'respDetectOpts' => 'resp_detect_opts'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  规则id
    * name  规则名
    * discription  规则描述
    * url  模型问答URL
    * promptDetectOpts  promptDetectOpts
    * respDetectOpts  respDetectOpts
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'discription' => 'setDiscription',
            'url' => 'setUrl',
            'promptDetectOpts' => 'setPromptDetectOpts',
            'respDetectOpts' => 'setRespDetectOpts'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  规则id
    * name  规则名
    * discription  规则描述
    * url  模型问答URL
    * promptDetectOpts  promptDetectOpts
    * respDetectOpts  respDetectOpts
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'discription' => 'getDiscription',
            'url' => 'getUrl',
            'promptDetectOpts' => 'getPromptDetectOpts',
            'respDetectOpts' => 'getRespDetectOpts'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['discription'] = isset($data['discription']) ? $data['discription'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['promptDetectOpts'] = isset($data['promptDetectOpts']) ? $data['promptDetectOpts'] : null;
        $this->container['respDetectOpts'] = isset($data['respDetectOpts']) ? $data['respDetectOpts'] : null;
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
    *  规则id
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
    * @param string|null $id 规则id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  规则名
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
    * @param string|null $name 规则名
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets discription
    *  规则描述
    *
    * @return string|null
    */
    public function getDiscription()
    {
        return $this->container['discription'];
    }

    /**
    * Sets discription
    *
    * @param string|null $discription 规则描述
    *
    * @return $this
    */
    public function setDiscription($discription)
    {
        $this->container['discription'] = $discription;
        return $this;
    }

    /**
    * Gets url
    *  模型问答URL
    *
    * @return string|null
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string|null $url 模型问答URL
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets promptDetectOpts
    *  promptDetectOpts
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\LlmRuleInfoPromptDetectOpts|null
    */
    public function getPromptDetectOpts()
    {
        return $this->container['promptDetectOpts'];
    }

    /**
    * Sets promptDetectOpts
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\LlmRuleInfoPromptDetectOpts|null $promptDetectOpts promptDetectOpts
    *
    * @return $this
    */
    public function setPromptDetectOpts($promptDetectOpts)
    {
        $this->container['promptDetectOpts'] = $promptDetectOpts;
        return $this;
    }

    /**
    * Gets respDetectOpts
    *  respDetectOpts
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\LlmRuleInfoRespDetectOpts|null
    */
    public function getRespDetectOpts()
    {
        return $this->container['respDetectOpts'];
    }

    /**
    * Sets respDetectOpts
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\LlmRuleInfoRespDetectOpts|null $respDetectOpts respDetectOpts
    *
    * @return $this
    */
    public function setRespDetectOpts($respDetectOpts)
    {
        $this->container['respDetectOpts'] = $respDetectOpts;
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

