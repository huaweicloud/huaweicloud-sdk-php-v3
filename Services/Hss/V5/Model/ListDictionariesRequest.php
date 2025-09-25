<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListDictionariesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListDictionariesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 不涉及
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * scene  **参数解释**: 使用场景（如果没有区分可以忽略） **约束限制**: 不涉及 **取值范围**: - hws： 国内站。 - hec-hk：国际站。  **默认取值**: 不涉及
    * groupCode  **参数解释**: 字典分组 **约束限制**: 不涉及 **取值范围**: - featureSwitch： 页面特性开关。  **默认取值**: 不涉及
    * code  **参数解释**: 字典项编码，group_code下字典项编码不重复 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'offset' => 'int',
            'limit' => 'int',
            'scene' => 'string',
            'groupCode' => 'string',
            'code' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 不涉及
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * scene  **参数解释**: 使用场景（如果没有区分可以忽略） **约束限制**: 不涉及 **取值范围**: - hws： 国内站。 - hec-hk：国际站。  **默认取值**: 不涉及
    * groupCode  **参数解释**: 字典分组 **约束限制**: 不涉及 **取值范围**: - featureSwitch： 页面特性开关。  **默认取值**: 不涉及
    * code  **参数解释**: 字典项编码，group_code下字典项编码不重复 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'offset' => 'int32',
        'limit' => 'int32',
        'scene' => null,
        'groupCode' => null,
        'code' => null
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
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 不涉及
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * scene  **参数解释**: 使用场景（如果没有区分可以忽略） **约束限制**: 不涉及 **取值范围**: - hws： 国内站。 - hec-hk：国际站。  **默认取值**: 不涉及
    * groupCode  **参数解释**: 字典分组 **约束限制**: 不涉及 **取值范围**: - featureSwitch： 页面特性开关。  **默认取值**: 不涉及
    * code  **参数解释**: 字典项编码，group_code下字典项编码不重复 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'offset' => 'offset',
            'limit' => 'limit',
            'scene' => 'scene',
            'groupCode' => 'group_code',
            'code' => 'code'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 不涉及
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * scene  **参数解释**: 使用场景（如果没有区分可以忽略） **约束限制**: 不涉及 **取值范围**: - hws： 国内站。 - hec-hk：国际站。  **默认取值**: 不涉及
    * groupCode  **参数解释**: 字典分组 **约束限制**: 不涉及 **取值范围**: - featureSwitch： 页面特性开关。  **默认取值**: 不涉及
    * code  **参数解释**: 字典项编码，group_code下字典项编码不重复 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'scene' => 'setScene',
            'groupCode' => 'setGroupCode',
            'code' => 'setCode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 不涉及
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * scene  **参数解释**: 使用场景（如果没有区分可以忽略） **约束限制**: 不涉及 **取值范围**: - hws： 国内站。 - hec-hk：国际站。  **默认取值**: 不涉及
    * groupCode  **参数解释**: 字典分组 **约束限制**: 不涉及 **取值范围**: - featureSwitch： 页面特性开关。  **默认取值**: 不涉及
    * code  **参数解释**: 字典项编码，group_code下字典项编码不重复 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'scene' => 'getScene',
            'groupCode' => 'getGroupCode',
            'code' => 'getCode'
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
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['scene'] = isset($data['scene']) ? $data['scene'] : null;
        $this->container['groupCode'] = isset($data['groupCode']) ? $data['groupCode'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['offset'] === null) {
            $invalidProperties[] = "'offset' can't be null";
        }
            if (($this->container['offset'] > 2000000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 2000000.";
            }
            if (($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
        if ($this->container['limit'] === null) {
            $invalidProperties[] = "'limit' can't be null";
        }
            if (($this->container['limit'] > 200)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 200.";
            }
            if (($this->container['limit'] < 10)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 10.";
            }
            if (!is_null($this->container['scene']) && (mb_strlen($this->container['scene']) > 64)) {
                $invalidProperties[] = "invalid value for 'scene', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['scene']) && (mb_strlen($this->container['scene']) < 0)) {
                $invalidProperties[] = "invalid value for 'scene', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['scene']) && !preg_match("/^hws|hec-hk$/", $this->container['scene'])) {
                $invalidProperties[] = "invalid value for 'scene', must be conform to the pattern /^hws|hec-hk$/.";
            }
        if ($this->container['groupCode'] === null) {
            $invalidProperties[] = "'groupCode' can't be null";
        }
            if ((mb_strlen($this->container['groupCode']) > 64)) {
                $invalidProperties[] = "invalid value for 'groupCode', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['groupCode']) < 1)) {
                $invalidProperties[] = "invalid value for 'groupCode', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^featureSwitch$/", $this->container['groupCode'])) {
                $invalidProperties[] = "invalid value for 'groupCode', must be conform to the pattern /^featureSwitch$/.";
            }
            if (!is_null($this->container['code']) && (mb_strlen($this->container['code']) > 64)) {
                $invalidProperties[] = "invalid value for 'code', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['code']) && (mb_strlen($this->container['code']) < 1)) {
                $invalidProperties[] = "invalid value for 'code', the character length must be bigger than or equal to 1.";
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
    * Gets offset
    *  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 不涉及
    *
    * @return int
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int $offset **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    *
    * @return int
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int $limit **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets scene
    *  **参数解释**: 使用场景（如果没有区分可以忽略） **约束限制**: 不涉及 **取值范围**: - hws： 国内站。 - hec-hk：国际站。  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getScene()
    {
        return $this->container['scene'];
    }

    /**
    * Sets scene
    *
    * @param string|null $scene **参数解释**: 使用场景（如果没有区分可以忽略） **约束限制**: 不涉及 **取值范围**: - hws： 国内站。 - hec-hk：国际站。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setScene($scene)
    {
        $this->container['scene'] = $scene;
        return $this;
    }

    /**
    * Gets groupCode
    *  **参数解释**: 字典分组 **约束限制**: 不涉及 **取值范围**: - featureSwitch： 页面特性开关。  **默认取值**: 不涉及
    *
    * @return string
    */
    public function getGroupCode()
    {
        return $this->container['groupCode'];
    }

    /**
    * Sets groupCode
    *
    * @param string $groupCode **参数解释**: 字典分组 **约束限制**: 不涉及 **取值范围**: - featureSwitch： 页面特性开关。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setGroupCode($groupCode)
    {
        $this->container['groupCode'] = $groupCode;
        return $this;
    }

    /**
    * Gets code
    *  **参数解释**: 字典项编码，group_code下字典项编码不重复 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位  **默认取值**: 不涉及
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
    * @param string|null $code **参数解释**: 字典项编码，group_code下字典项编码不重复 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
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

