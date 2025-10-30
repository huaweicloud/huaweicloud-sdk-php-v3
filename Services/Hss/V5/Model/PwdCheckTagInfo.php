<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PwdCheckTagInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PwdCheckTagInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tag  **参数解释** 口令检测一级tag **取值范围** - weakpwd_pwdcomplexity
    * checked  **参数解释** 检测范围。 **取值范围** - true: 如果tag有值,则一级标签tag下所有的检测项都会检测。 - false: 如果tag有值，则一级标签tag下所有的检测项都不会检测。 - indeterminate: 部分检测，具体检测项由sub_tags决定。
    * subTags  服务器风险TOP5列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tag' => 'string',
            'checked' => 'string',
            'subTags' => '\HuaweiCloud\SDK\Hss\V5\Model\PwdCheckSubTagInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tag  **参数解释** 口令检测一级tag **取值范围** - weakpwd_pwdcomplexity
    * checked  **参数解释** 检测范围。 **取值范围** - true: 如果tag有值,则一级标签tag下所有的检测项都会检测。 - false: 如果tag有值，则一级标签tag下所有的检测项都不会检测。 - indeterminate: 部分检测，具体检测项由sub_tags决定。
    * subTags  服务器风险TOP5列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tag' => null,
        'checked' => null,
        'subTags' => null
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
    * tag  **参数解释** 口令检测一级tag **取值范围** - weakpwd_pwdcomplexity
    * checked  **参数解释** 检测范围。 **取值范围** - true: 如果tag有值,则一级标签tag下所有的检测项都会检测。 - false: 如果tag有值，则一级标签tag下所有的检测项都不会检测。 - indeterminate: 部分检测，具体检测项由sub_tags决定。
    * subTags  服务器风险TOP5列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tag' => 'tag',
            'checked' => 'checked',
            'subTags' => 'sub_tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tag  **参数解释** 口令检测一级tag **取值范围** - weakpwd_pwdcomplexity
    * checked  **参数解释** 检测范围。 **取值范围** - true: 如果tag有值,则一级标签tag下所有的检测项都会检测。 - false: 如果tag有值，则一级标签tag下所有的检测项都不会检测。 - indeterminate: 部分检测，具体检测项由sub_tags决定。
    * subTags  服务器风险TOP5列表
    *
    * @var string[]
    */
    protected static $setters = [
            'tag' => 'setTag',
            'checked' => 'setChecked',
            'subTags' => 'setSubTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tag  **参数解释** 口令检测一级tag **取值范围** - weakpwd_pwdcomplexity
    * checked  **参数解释** 检测范围。 **取值范围** - true: 如果tag有值,则一级标签tag下所有的检测项都会检测。 - false: 如果tag有值，则一级标签tag下所有的检测项都不会检测。 - indeterminate: 部分检测，具体检测项由sub_tags决定。
    * subTags  服务器风险TOP5列表
    *
    * @var string[]
    */
    protected static $getters = [
            'tag' => 'getTag',
            'checked' => 'getChecked',
            'subTags' => 'getSubTags'
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
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['checked'] = isset($data['checked']) ? $data['checked'] : null;
        $this->container['subTags'] = isset($data['subTags']) ? $data['subTags'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['tag']) && (mb_strlen($this->container['tag']) > 64)) {
                $invalidProperties[] = "invalid value for 'tag', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['tag']) && (mb_strlen($this->container['tag']) < 1)) {
                $invalidProperties[] = "invalid value for 'tag', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['checked']) && (mb_strlen($this->container['checked']) > 32)) {
                $invalidProperties[] = "invalid value for 'checked', the character length must be smaller than or equal to 32.";
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
    * Gets tag
    *  **参数解释** 口令检测一级tag **取值范围** - weakpwd_pwdcomplexity
    *
    * @return string|null
    */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
    * Sets tag
    *
    * @param string|null $tag **参数解释** 口令检测一级tag **取值范围** - weakpwd_pwdcomplexity
    *
    * @return $this
    */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;
        return $this;
    }

    /**
    * Gets checked
    *  **参数解释** 检测范围。 **取值范围** - true: 如果tag有值,则一级标签tag下所有的检测项都会检测。 - false: 如果tag有值，则一级标签tag下所有的检测项都不会检测。 - indeterminate: 部分检测，具体检测项由sub_tags决定。
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
    * @param string|null $checked **参数解释** 检测范围。 **取值范围** - true: 如果tag有值,则一级标签tag下所有的检测项都会检测。 - false: 如果tag有值，则一级标签tag下所有的检测项都不会检测。 - indeterminate: 部分检测，具体检测项由sub_tags决定。
    *
    * @return $this
    */
    public function setChecked($checked)
    {
        $this->container['checked'] = $checked;
        return $this;
    }

    /**
    * Gets subTags
    *  服务器风险TOP5列表
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\PwdCheckSubTagInfo[]|null
    */
    public function getSubTags()
    {
        return $this->container['subTags'];
    }

    /**
    * Sets subTags
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\PwdCheckSubTagInfo[]|null $subTags 服务器风险TOP5列表
    *
    * @return $this
    */
    public function setSubTags($subTags)
    {
        $this->container['subTags'] = $subTags;
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

