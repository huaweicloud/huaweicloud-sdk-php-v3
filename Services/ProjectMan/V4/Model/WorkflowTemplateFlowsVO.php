<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WorkflowTemplateFlowsVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WorkflowTemplateFlowsVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * code  流转线编码
    * name  流转线名称
    * beforeRuleValidator  流转前校验配置
    * beforeRuleConfigs  流转中界面配置
    * fromCode  流转线的入口状态
    * toCode  流转线的出口状态
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'code' => 'string',
            'name' => 'string',
            'beforeRuleValidator' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\WorkflowTemplateConfigsVO[]',
            'beforeRuleConfigs' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\WorkflowTemplateConfigsVO[]',
            'fromCode' => 'string',
            'toCode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * code  流转线编码
    * name  流转线名称
    * beforeRuleValidator  流转前校验配置
    * beforeRuleConfigs  流转中界面配置
    * fromCode  流转线的入口状态
    * toCode  流转线的出口状态
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'code' => null,
        'name' => null,
        'beforeRuleValidator' => null,
        'beforeRuleConfigs' => null,
        'fromCode' => null,
        'toCode' => null
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
    * code  流转线编码
    * name  流转线名称
    * beforeRuleValidator  流转前校验配置
    * beforeRuleConfigs  流转中界面配置
    * fromCode  流转线的入口状态
    * toCode  流转线的出口状态
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'code' => 'code',
            'name' => 'name',
            'beforeRuleValidator' => 'before_rule_validator',
            'beforeRuleConfigs' => 'before_rule_configs',
            'fromCode' => 'from_code',
            'toCode' => 'to_code'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * code  流转线编码
    * name  流转线名称
    * beforeRuleValidator  流转前校验配置
    * beforeRuleConfigs  流转中界面配置
    * fromCode  流转线的入口状态
    * toCode  流转线的出口状态
    *
    * @var string[]
    */
    protected static $setters = [
            'code' => 'setCode',
            'name' => 'setName',
            'beforeRuleValidator' => 'setBeforeRuleValidator',
            'beforeRuleConfigs' => 'setBeforeRuleConfigs',
            'fromCode' => 'setFromCode',
            'toCode' => 'setToCode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * code  流转线编码
    * name  流转线名称
    * beforeRuleValidator  流转前校验配置
    * beforeRuleConfigs  流转中界面配置
    * fromCode  流转线的入口状态
    * toCode  流转线的出口状态
    *
    * @var string[]
    */
    protected static $getters = [
            'code' => 'getCode',
            'name' => 'getName',
            'beforeRuleValidator' => 'getBeforeRuleValidator',
            'beforeRuleConfigs' => 'getBeforeRuleConfigs',
            'fromCode' => 'getFromCode',
            'toCode' => 'getToCode'
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['beforeRuleValidator'] = isset($data['beforeRuleValidator']) ? $data['beforeRuleValidator'] : null;
        $this->container['beforeRuleConfigs'] = isset($data['beforeRuleConfigs']) ? $data['beforeRuleConfigs'] : null;
        $this->container['fromCode'] = isset($data['fromCode']) ? $data['fromCode'] : null;
        $this->container['toCode'] = isset($data['toCode']) ? $data['toCode'] : null;
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
    * Gets code
    *  流转线编码
    *
    * @return string|null
    */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
    * Sets code
    *
    * @param string|null $code 流转线编码
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
        return $this;
    }

    /**
    * Gets name
    *  流转线名称
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
    * @param string|null $name 流转线名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets beforeRuleValidator
    *  流转前校验配置
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\WorkflowTemplateConfigsVO[]|null
    */
    public function getBeforeRuleValidator()
    {
        return $this->container['beforeRuleValidator'];
    }

    /**
    * Sets beforeRuleValidator
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\WorkflowTemplateConfigsVO[]|null $beforeRuleValidator 流转前校验配置
    *
    * @return $this
    */
    public function setBeforeRuleValidator($beforeRuleValidator)
    {
        $this->container['beforeRuleValidator'] = $beforeRuleValidator;
        return $this;
    }

    /**
    * Gets beforeRuleConfigs
    *  流转中界面配置
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\WorkflowTemplateConfigsVO[]|null
    */
    public function getBeforeRuleConfigs()
    {
        return $this->container['beforeRuleConfigs'];
    }

    /**
    * Sets beforeRuleConfigs
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\WorkflowTemplateConfigsVO[]|null $beforeRuleConfigs 流转中界面配置
    *
    * @return $this
    */
    public function setBeforeRuleConfigs($beforeRuleConfigs)
    {
        $this->container['beforeRuleConfigs'] = $beforeRuleConfigs;
        return $this;
    }

    /**
    * Gets fromCode
    *  流转线的入口状态
    *
    * @return string|null
    */
    public function getFromCode()
    {
        return $this->container['fromCode'];
    }

    /**
    * Sets fromCode
    *
    * @param string|null $fromCode 流转线的入口状态
    *
    * @return $this
    */
    public function setFromCode($fromCode)
    {
        $this->container['fromCode'] = $fromCode;
        return $this;
    }

    /**
    * Gets toCode
    *  流转线的出口状态
    *
    * @return string|null
    */
    public function getToCode()
    {
        return $this->container['toCode'];
    }

    /**
    * Sets toCode
    *
    * @param string|null $toCode 流转线的出口状态
    *
    * @return $this
    */
    public function setToCode($toCode)
    {
        $this->container['toCode'] = $toCode;
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

