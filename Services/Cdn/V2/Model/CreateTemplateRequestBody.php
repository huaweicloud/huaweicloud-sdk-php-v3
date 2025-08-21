<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateTemplateRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateTemplateRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tmlName  **参数解释：** 域名模板名称 **约束限制：** 不涉及 **取值范围：** - 1-100个字符 - 仅支持字母、数字、中文、下划线（_）、中横线（-） **默认取值：** 不涉及
    * remark  **参数解释：** 域名模板描述 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * configs  configs
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tmlName' => 'string',
            'remark' => 'string',
            'configs' => '\HuaweiCloud\SDK\Cdn\V2\Model\TemplateConfigs'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tmlName  **参数解释：** 域名模板名称 **约束限制：** 不涉及 **取值范围：** - 1-100个字符 - 仅支持字母、数字、中文、下划线（_）、中横线（-） **默认取值：** 不涉及
    * remark  **参数解释：** 域名模板描述 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * configs  configs
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tmlName' => null,
        'remark' => null,
        'configs' => null
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
    * tmlName  **参数解释：** 域名模板名称 **约束限制：** 不涉及 **取值范围：** - 1-100个字符 - 仅支持字母、数字、中文、下划线（_）、中横线（-） **默认取值：** 不涉及
    * remark  **参数解释：** 域名模板描述 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * configs  configs
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tmlName' => 'tml_name',
            'remark' => 'remark',
            'configs' => 'configs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tmlName  **参数解释：** 域名模板名称 **约束限制：** 不涉及 **取值范围：** - 1-100个字符 - 仅支持字母、数字、中文、下划线（_）、中横线（-） **默认取值：** 不涉及
    * remark  **参数解释：** 域名模板描述 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * configs  configs
    *
    * @var string[]
    */
    protected static $setters = [
            'tmlName' => 'setTmlName',
            'remark' => 'setRemark',
            'configs' => 'setConfigs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tmlName  **参数解释：** 域名模板名称 **约束限制：** 不涉及 **取值范围：** - 1-100个字符 - 仅支持字母、数字、中文、下划线（_）、中横线（-） **默认取值：** 不涉及
    * remark  **参数解释：** 域名模板描述 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * configs  configs
    *
    * @var string[]
    */
    protected static $getters = [
            'tmlName' => 'getTmlName',
            'remark' => 'getRemark',
            'configs' => 'getConfigs'
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
        $this->container['tmlName'] = isset($data['tmlName']) ? $data['tmlName'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
        $this->container['configs'] = isset($data['configs']) ? $data['configs'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['tmlName'] === null) {
            $invalidProperties[] = "'tmlName' can't be null";
        }
        if ($this->container['configs'] === null) {
            $invalidProperties[] = "'configs' can't be null";
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
    * Gets tmlName
    *  **参数解释：** 域名模板名称 **约束限制：** 不涉及 **取值范围：** - 1-100个字符 - 仅支持字母、数字、中文、下划线（_）、中横线（-） **默认取值：** 不涉及
    *
    * @return string
    */
    public function getTmlName()
    {
        return $this->container['tmlName'];
    }

    /**
    * Sets tmlName
    *
    * @param string $tmlName **参数解释：** 域名模板名称 **约束限制：** 不涉及 **取值范围：** - 1-100个字符 - 仅支持字母、数字、中文、下划线（_）、中横线（-） **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setTmlName($tmlName)
    {
        $this->container['tmlName'] = $tmlName;
        return $this;
    }

    /**
    * Gets remark
    *  **参数解释：** 域名模板描述 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getRemark()
    {
        return $this->container['remark'];
    }

    /**
    * Sets remark
    *
    * @param string|null $remark **参数解释：** 域名模板描述 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setRemark($remark)
    {
        $this->container['remark'] = $remark;
        return $this;
    }

    /**
    * Gets configs
    *  configs
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\TemplateConfigs
    */
    public function getConfigs()
    {
        return $this->container['configs'];
    }

    /**
    * Sets configs
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\TemplateConfigs $configs configs
    *
    * @return $this
    */
    public function setConfigs($configs)
    {
        $this->container['configs'] = $configs;
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

