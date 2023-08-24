<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Rule implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Rule';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * template  回收类型，date_rule、tag_rule
    * params  template是date_rule时，设置params为{\"days\": \"xxx\"} template是tag_rule时，设置params为{\"num\": \"xxx\"}
    * tagSelectors  例外镜像
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'template' => 'string',
            'params' => 'object',
            'tagSelectors' => '\HuaweiCloud\SDK\Swr\V2\Model\TagSelector[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * template  回收类型，date_rule、tag_rule
    * params  template是date_rule时，设置params为{\"days\": \"xxx\"} template是tag_rule时，设置params为{\"num\": \"xxx\"}
    * tagSelectors  例外镜像
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'template' => null,
        'params' => null,
        'tagSelectors' => null
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
    * template  回收类型，date_rule、tag_rule
    * params  template是date_rule时，设置params为{\"days\": \"xxx\"} template是tag_rule时，设置params为{\"num\": \"xxx\"}
    * tagSelectors  例外镜像
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'template' => 'template',
            'params' => 'params',
            'tagSelectors' => 'tag_selectors'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * template  回收类型，date_rule、tag_rule
    * params  template是date_rule时，设置params为{\"days\": \"xxx\"} template是tag_rule时，设置params为{\"num\": \"xxx\"}
    * tagSelectors  例外镜像
    *
    * @var string[]
    */
    protected static $setters = [
            'template' => 'setTemplate',
            'params' => 'setParams',
            'tagSelectors' => 'setTagSelectors'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * template  回收类型，date_rule、tag_rule
    * params  template是date_rule时，设置params为{\"days\": \"xxx\"} template是tag_rule时，设置params为{\"num\": \"xxx\"}
    * tagSelectors  例外镜像
    *
    * @var string[]
    */
    protected static $getters = [
            'template' => 'getTemplate',
            'params' => 'getParams',
            'tagSelectors' => 'getTagSelectors'
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
    const TEMPLATE_DATE_RULE = 'date_rule';
    const TEMPLATE_TAG_RULE = 'tag_rule';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTemplateAllowableValues()
    {
        return [
            self::TEMPLATE_DATE_RULE,
            self::TEMPLATE_TAG_RULE,
        ];
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
        $this->container['template'] = isset($data['template']) ? $data['template'] : null;
        $this->container['params'] = isset($data['params']) ? $data['params'] : null;
        $this->container['tagSelectors'] = isset($data['tagSelectors']) ? $data['tagSelectors'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['template'] === null) {
            $invalidProperties[] = "'template' can't be null";
        }
            $allowedValues = $this->getTemplateAllowableValues();
                if (!is_null($this->container['template']) && !in_array($this->container['template'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'template', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['params'] === null) {
            $invalidProperties[] = "'params' can't be null";
        }
        if ($this->container['tagSelectors'] === null) {
            $invalidProperties[] = "'tagSelectors' can't be null";
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
    * Gets template
    *  回收类型，date_rule、tag_rule
    *
    * @return string
    */
    public function getTemplate()
    {
        return $this->container['template'];
    }

    /**
    * Sets template
    *
    * @param string $template 回收类型，date_rule、tag_rule
    *
    * @return $this
    */
    public function setTemplate($template)
    {
        $this->container['template'] = $template;
        return $this;
    }

    /**
    * Gets params
    *  template是date_rule时，设置params为{\"days\": \"xxx\"} template是tag_rule时，设置params为{\"num\": \"xxx\"}
    *
    * @return object
    */
    public function getParams()
    {
        return $this->container['params'];
    }

    /**
    * Sets params
    *
    * @param object $params template是date_rule时，设置params为{\"days\": \"xxx\"} template是tag_rule时，设置params为{\"num\": \"xxx\"}
    *
    * @return $this
    */
    public function setParams($params)
    {
        $this->container['params'] = $params;
        return $this;
    }

    /**
    * Gets tagSelectors
    *  例外镜像
    *
    * @return \HuaweiCloud\SDK\Swr\V2\Model\TagSelector[]
    */
    public function getTagSelectors()
    {
        return $this->container['tagSelectors'];
    }

    /**
    * Sets tagSelectors
    *
    * @param \HuaweiCloud\SDK\Swr\V2\Model\TagSelector[] $tagSelectors 例外镜像
    *
    * @return $this
    */
    public function setTagSelectors($tagSelectors)
    {
        $this->container['tagSelectors'] = $tagSelectors;
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

