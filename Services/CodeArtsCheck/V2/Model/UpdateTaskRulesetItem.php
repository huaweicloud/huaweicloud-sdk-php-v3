<?php

namespace HuaweiCloud\SDK\CodeArtsCheck\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateTaskRulesetItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateTaskRulesetItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * language  **参数解释：** 检查语言，支持的语言请关注服务更新特性文档。 **约束限制:** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * ruleSetId  **参数解释：** 规则集ID。 **约束限制:** 长度为[1~32]个字符。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * ifUse  **参数解释：** 是否启用。 **约束限制:** 不涉及。 **取值范围：** - 0：不启用。 - 1：启用。 **默认取值：** 不涉及。
    * status  **参数解释：** 新/老数据。 **约束限制:** 不涉及。 **取值范围：** 1 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'language' => 'string',
            'ruleSetId' => 'string',
            'ifUse' => 'string',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * language  **参数解释：** 检查语言，支持的语言请关注服务更新特性文档。 **约束限制:** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * ruleSetId  **参数解释：** 规则集ID。 **约束限制:** 长度为[1~32]个字符。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * ifUse  **参数解释：** 是否启用。 **约束限制:** 不涉及。 **取值范围：** - 0：不启用。 - 1：启用。 **默认取值：** 不涉及。
    * status  **参数解释：** 新/老数据。 **约束限制:** 不涉及。 **取值范围：** 1 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'language' => null,
        'ruleSetId' => null,
        'ifUse' => null,
        'status' => null
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
    * language  **参数解释：** 检查语言，支持的语言请关注服务更新特性文档。 **约束限制:** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * ruleSetId  **参数解释：** 规则集ID。 **约束限制:** 长度为[1~32]个字符。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * ifUse  **参数解释：** 是否启用。 **约束限制:** 不涉及。 **取值范围：** - 0：不启用。 - 1：启用。 **默认取值：** 不涉及。
    * status  **参数解释：** 新/老数据。 **约束限制:** 不涉及。 **取值范围：** 1 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'language' => 'language',
            'ruleSetId' => 'rule_set_id',
            'ifUse' => 'if_use',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * language  **参数解释：** 检查语言，支持的语言请关注服务更新特性文档。 **约束限制:** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * ruleSetId  **参数解释：** 规则集ID。 **约束限制:** 长度为[1~32]个字符。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * ifUse  **参数解释：** 是否启用。 **约束限制:** 不涉及。 **取值范围：** - 0：不启用。 - 1：启用。 **默认取值：** 不涉及。
    * status  **参数解释：** 新/老数据。 **约束限制:** 不涉及。 **取值范围：** 1 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'language' => 'setLanguage',
            'ruleSetId' => 'setRuleSetId',
            'ifUse' => 'setIfUse',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * language  **参数解释：** 检查语言，支持的语言请关注服务更新特性文档。 **约束限制:** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * ruleSetId  **参数解释：** 规则集ID。 **约束限制:** 长度为[1~32]个字符。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * ifUse  **参数解释：** 是否启用。 **约束限制:** 不涉及。 **取值范围：** - 0：不启用。 - 1：启用。 **默认取值：** 不涉及。
    * status  **参数解释：** 新/老数据。 **约束限制:** 不涉及。 **取值范围：** 1 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'language' => 'getLanguage',
            'ruleSetId' => 'getRuleSetId',
            'ifUse' => 'getIfUse',
            'status' => 'getStatus'
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
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['ruleSetId'] = isset($data['ruleSetId']) ? $data['ruleSetId'] : null;
        $this->container['ifUse'] = isset($data['ifUse']) ? $data['ifUse'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['language'] === null) {
            $invalidProperties[] = "'language' can't be null";
        }
            if ((mb_strlen($this->container['language']) > 128)) {
                $invalidProperties[] = "invalid value for 'language', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['language']) < 1)) {
                $invalidProperties[] = "invalid value for 'language', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['ruleSetId'] === null) {
            $invalidProperties[] = "'ruleSetId' can't be null";
        }
            if ((mb_strlen($this->container['ruleSetId']) > 50)) {
                $invalidProperties[] = "invalid value for 'ruleSetId', the character length must be smaller than or equal to 50.";
            }
            if ((mb_strlen($this->container['ruleSetId']) < 1)) {
                $invalidProperties[] = "invalid value for 'ruleSetId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['ifUse'] === null) {
            $invalidProperties[] = "'ifUse' can't be null";
        }
            if ((mb_strlen($this->container['ifUse']) > 1)) {
                $invalidProperties[] = "invalid value for 'ifUse', the character length must be smaller than or equal to 1.";
            }
            if ((mb_strlen($this->container['ifUse']) < 1)) {
                $invalidProperties[] = "invalid value for 'ifUse', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
            if ((mb_strlen($this->container['status']) > 1)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 1.";
            }
            if ((mb_strlen($this->container['status']) < 1)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
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
    * Gets language
    *  **参数解释：** 检查语言，支持的语言请关注服务更新特性文档。 **约束限制:** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string
    */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
    * Sets language
    *
    * @param string $language **参数解释：** 检查语言，支持的语言请关注服务更新特性文档。 **约束限制:** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;
        return $this;
    }

    /**
    * Gets ruleSetId
    *  **参数解释：** 规则集ID。 **约束限制:** 长度为[1~32]个字符。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string
    */
    public function getRuleSetId()
    {
        return $this->container['ruleSetId'];
    }

    /**
    * Sets ruleSetId
    *
    * @param string $ruleSetId **参数解释：** 规则集ID。 **约束限制:** 长度为[1~32]个字符。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setRuleSetId($ruleSetId)
    {
        $this->container['ruleSetId'] = $ruleSetId;
        return $this;
    }

    /**
    * Gets ifUse
    *  **参数解释：** 是否启用。 **约束限制:** 不涉及。 **取值范围：** - 0：不启用。 - 1：启用。 **默认取值：** 不涉及。
    *
    * @return string
    */
    public function getIfUse()
    {
        return $this->container['ifUse'];
    }

    /**
    * Sets ifUse
    *
    * @param string $ifUse **参数解释：** 是否启用。 **约束限制:** 不涉及。 **取值范围：** - 0：不启用。 - 1：启用。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setIfUse($ifUse)
    {
        $this->container['ifUse'] = $ifUse;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释：** 新/老数据。 **约束限制:** 不涉及。 **取值范围：** 1 **默认取值：** 不涉及。
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status **参数解释：** 新/老数据。 **约束限制:** 不涉及。 **取值范围：** 1 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

