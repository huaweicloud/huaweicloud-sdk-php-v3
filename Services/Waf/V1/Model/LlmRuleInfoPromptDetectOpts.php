<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LlmRuleInfoPromptDetectOpts implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LlmRuleInfo_prompt_detect_opts';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * content  提示词索引
    * injectEnable  提示词注入检测
    * complianceEnable  提示词合规检测
    * action  action
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'content' => 'string',
            'injectEnable' => 'bool',
            'complianceEnable' => 'bool',
            'action' => '\HuaweiCloud\SDK\Waf\V1\Model\LlmRuleInfoPromptDetectOptsAction'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * content  提示词索引
    * injectEnable  提示词注入检测
    * complianceEnable  提示词合规检测
    * action  action
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'content' => null,
        'injectEnable' => null,
        'complianceEnable' => null,
        'action' => null
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
    * content  提示词索引
    * injectEnable  提示词注入检测
    * complianceEnable  提示词合规检测
    * action  action
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'content' => 'content',
            'injectEnable' => 'inject_enable',
            'complianceEnable' => 'compliance_enable',
            'action' => 'action'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * content  提示词索引
    * injectEnable  提示词注入检测
    * complianceEnable  提示词合规检测
    * action  action
    *
    * @var string[]
    */
    protected static $setters = [
            'content' => 'setContent',
            'injectEnable' => 'setInjectEnable',
            'complianceEnable' => 'setComplianceEnable',
            'action' => 'setAction'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * content  提示词索引
    * injectEnable  提示词注入检测
    * complianceEnable  提示词合规检测
    * action  action
    *
    * @var string[]
    */
    protected static $getters = [
            'content' => 'getContent',
            'injectEnable' => 'getInjectEnable',
            'complianceEnable' => 'getComplianceEnable',
            'action' => 'getAction'
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
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['injectEnable'] = isset($data['injectEnable']) ? $data['injectEnable'] : null;
        $this->container['complianceEnable'] = isset($data['complianceEnable']) ? $data['complianceEnable'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
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
    * Gets content
    *  提示词索引
    *
    * @return string|null
    */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
    * Sets content
    *
    * @param string|null $content 提示词索引
    *
    * @return $this
    */
    public function setContent($content)
    {
        $this->container['content'] = $content;
        return $this;
    }

    /**
    * Gets injectEnable
    *  提示词注入检测
    *
    * @return bool|null
    */
    public function getInjectEnable()
    {
        return $this->container['injectEnable'];
    }

    /**
    * Sets injectEnable
    *
    * @param bool|null $injectEnable 提示词注入检测
    *
    * @return $this
    */
    public function setInjectEnable($injectEnable)
    {
        $this->container['injectEnable'] = $injectEnable;
        return $this;
    }

    /**
    * Gets complianceEnable
    *  提示词合规检测
    *
    * @return bool|null
    */
    public function getComplianceEnable()
    {
        return $this->container['complianceEnable'];
    }

    /**
    * Sets complianceEnable
    *
    * @param bool|null $complianceEnable 提示词合规检测
    *
    * @return $this
    */
    public function setComplianceEnable($complianceEnable)
    {
        $this->container['complianceEnable'] = $complianceEnable;
        return $this;
    }

    /**
    * Gets action
    *  action
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\LlmRuleInfoPromptDetectOptsAction|null
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\LlmRuleInfoPromptDetectOptsAction|null $action action
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
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

