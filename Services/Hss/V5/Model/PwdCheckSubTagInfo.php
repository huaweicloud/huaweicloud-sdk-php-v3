<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PwdCheckSubTagInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PwdCheckSubTagInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * subTag  **参数解释** 口令检测二级tag **取值范围** - weakpwd - pwdcomplexity
    * checked  **参数解释** 检测范围。 **取值范围** - true: 如果sub_tag有值,则二级标签sub_tag下所有的检测项都会检测 - false: 如果sub_tag有值，则二级标签sub_tag下所有的检测项都不会检测。 - indeterminate: 部分检测，由check_rule_ids决定具体检测项。
    * checkRuleIds  检测项列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'subTag' => 'string',
            'checked' => 'string',
            'checkRuleIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * subTag  **参数解释** 口令检测二级tag **取值范围** - weakpwd - pwdcomplexity
    * checked  **参数解释** 检测范围。 **取值范围** - true: 如果sub_tag有值,则二级标签sub_tag下所有的检测项都会检测 - false: 如果sub_tag有值，则二级标签sub_tag下所有的检测项都不会检测。 - indeterminate: 部分检测，由check_rule_ids决定具体检测项。
    * checkRuleIds  检测项列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'subTag' => null,
        'checked' => null,
        'checkRuleIds' => null
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
    * subTag  **参数解释** 口令检测二级tag **取值范围** - weakpwd - pwdcomplexity
    * checked  **参数解释** 检测范围。 **取值范围** - true: 如果sub_tag有值,则二级标签sub_tag下所有的检测项都会检测 - false: 如果sub_tag有值，则二级标签sub_tag下所有的检测项都不会检测。 - indeterminate: 部分检测，由check_rule_ids决定具体检测项。
    * checkRuleIds  检测项列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'subTag' => 'sub_tag',
            'checked' => 'checked',
            'checkRuleIds' => 'check_rule_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * subTag  **参数解释** 口令检测二级tag **取值范围** - weakpwd - pwdcomplexity
    * checked  **参数解释** 检测范围。 **取值范围** - true: 如果sub_tag有值,则二级标签sub_tag下所有的检测项都会检测 - false: 如果sub_tag有值，则二级标签sub_tag下所有的检测项都不会检测。 - indeterminate: 部分检测，由check_rule_ids决定具体检测项。
    * checkRuleIds  检测项列表
    *
    * @var string[]
    */
    protected static $setters = [
            'subTag' => 'setSubTag',
            'checked' => 'setChecked',
            'checkRuleIds' => 'setCheckRuleIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * subTag  **参数解释** 口令检测二级tag **取值范围** - weakpwd - pwdcomplexity
    * checked  **参数解释** 检测范围。 **取值范围** - true: 如果sub_tag有值,则二级标签sub_tag下所有的检测项都会检测 - false: 如果sub_tag有值，则二级标签sub_tag下所有的检测项都不会检测。 - indeterminate: 部分检测，由check_rule_ids决定具体检测项。
    * checkRuleIds  检测项列表
    *
    * @var string[]
    */
    protected static $getters = [
            'subTag' => 'getSubTag',
            'checked' => 'getChecked',
            'checkRuleIds' => 'getCheckRuleIds'
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
        $this->container['subTag'] = isset($data['subTag']) ? $data['subTag'] : null;
        $this->container['checked'] = isset($data['checked']) ? $data['checked'] : null;
        $this->container['checkRuleIds'] = isset($data['checkRuleIds']) ? $data['checkRuleIds'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['subTag']) && (mb_strlen($this->container['subTag']) > 64)) {
                $invalidProperties[] = "invalid value for 'subTag', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['subTag']) && (mb_strlen($this->container['subTag']) < 1)) {
                $invalidProperties[] = "invalid value for 'subTag', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['checked']) && (mb_strlen($this->container['checked']) > 64)) {
                $invalidProperties[] = "invalid value for 'checked', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['checked']) && (mb_strlen($this->container['checked']) < 1)) {
                $invalidProperties[] = "invalid value for 'checked', the character length must be bigger than or equal to 1.";
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
    * Gets subTag
    *  **参数解释** 口令检测二级tag **取值范围** - weakpwd - pwdcomplexity
    *
    * @return string|null
    */
    public function getSubTag()
    {
        return $this->container['subTag'];
    }

    /**
    * Sets subTag
    *
    * @param string|null $subTag **参数解释** 口令检测二级tag **取值范围** - weakpwd - pwdcomplexity
    *
    * @return $this
    */
    public function setSubTag($subTag)
    {
        $this->container['subTag'] = $subTag;
        return $this;
    }

    /**
    * Gets checked
    *  **参数解释** 检测范围。 **取值范围** - true: 如果sub_tag有值,则二级标签sub_tag下所有的检测项都会检测 - false: 如果sub_tag有值，则二级标签sub_tag下所有的检测项都不会检测。 - indeterminate: 部分检测，由check_rule_ids决定具体检测项。
    *
    * @return string|null
    */
    public function getChecked()
    {
        return $this->container['checked'];
    }

    /**
    * Sets checked
    *
    * @param string|null $checked **参数解释** 检测范围。 **取值范围** - true: 如果sub_tag有值,则二级标签sub_tag下所有的检测项都会检测 - false: 如果sub_tag有值，则二级标签sub_tag下所有的检测项都不会检测。 - indeterminate: 部分检测，由check_rule_ids决定具体检测项。
    *
    * @return $this
    */
    public function setChecked($checked)
    {
        $this->container['checked'] = $checked;
        return $this;
    }

    /**
    * Gets checkRuleIds
    *  检测项列表
    *
    * @return string[]|null
    */
    public function getCheckRuleIds()
    {
        return $this->container['checkRuleIds'];
    }

    /**
    * Sets checkRuleIds
    *
    * @param string[]|null $checkRuleIds 检测项列表
    *
    * @return $this
    */
    public function setCheckRuleIds($checkRuleIds)
    {
        $this->container['checkRuleIds'] = $checkRuleIds;
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

