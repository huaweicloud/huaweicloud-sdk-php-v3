<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AttackActionCountItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AttackActionCountItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * key  **参数解释：** 防护动作 **取值范围：** - block: 拦截，表示超过“限速频率”将直接拦截。 - log：仅记录，表示超过“限速频率”将只记录不拦截。 - captcha：表示超过“限速频率”后弹出验证码，进行人机验证，完成验证后，请求将不受访问限制。人机验证目前支持英文。 - dynamic_block：上一个限速周期内，请求频率超过“限速频率”将被拦截，那么在下一个限速周期内，请求频率超过“放行频率”将被拦截。 - advanced_captcha：高阶人机验证，表示超过“限速频率”后弹出验证码，进行人机验证。
    * num  **参数解释：** 数量 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'key' => 'string',
            'num' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * key  **参数解释：** 防护动作 **取值范围：** - block: 拦截，表示超过“限速频率”将直接拦截。 - log：仅记录，表示超过“限速频率”将只记录不拦截。 - captcha：表示超过“限速频率”后弹出验证码，进行人机验证，完成验证后，请求将不受访问限制。人机验证目前支持英文。 - dynamic_block：上一个限速周期内，请求频率超过“限速频率”将被拦截，那么在下一个限速周期内，请求频率超过“放行频率”将被拦截。 - advanced_captcha：高阶人机验证，表示超过“限速频率”后弹出验证码，进行人机验证。
    * num  **参数解释：** 数量 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'key' => null,
        'num' => 'int64'
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
    * key  **参数解释：** 防护动作 **取值范围：** - block: 拦截，表示超过“限速频率”将直接拦截。 - log：仅记录，表示超过“限速频率”将只记录不拦截。 - captcha：表示超过“限速频率”后弹出验证码，进行人机验证，完成验证后，请求将不受访问限制。人机验证目前支持英文。 - dynamic_block：上一个限速周期内，请求频率超过“限速频率”将被拦截，那么在下一个限速周期内，请求频率超过“放行频率”将被拦截。 - advanced_captcha：高阶人机验证，表示超过“限速频率”后弹出验证码，进行人机验证。
    * num  **参数解释：** 数量 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'key' => 'key',
            'num' => 'num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * key  **参数解释：** 防护动作 **取值范围：** - block: 拦截，表示超过“限速频率”将直接拦截。 - log：仅记录，表示超过“限速频率”将只记录不拦截。 - captcha：表示超过“限速频率”后弹出验证码，进行人机验证，完成验证后，请求将不受访问限制。人机验证目前支持英文。 - dynamic_block：上一个限速周期内，请求频率超过“限速频率”将被拦截，那么在下一个限速周期内，请求频率超过“放行频率”将被拦截。 - advanced_captcha：高阶人机验证，表示超过“限速频率”后弹出验证码，进行人机验证。
    * num  **参数解释：** 数量 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'key' => 'setKey',
            'num' => 'setNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * key  **参数解释：** 防护动作 **取值范围：** - block: 拦截，表示超过“限速频率”将直接拦截。 - log：仅记录，表示超过“限速频率”将只记录不拦截。 - captcha：表示超过“限速频率”后弹出验证码，进行人机验证，完成验证后，请求将不受访问限制。人机验证目前支持英文。 - dynamic_block：上一个限速周期内，请求频率超过“限速频率”将被拦截，那么在下一个限速周期内，请求频率超过“放行频率”将被拦截。 - advanced_captcha：高阶人机验证，表示超过“限速频率”后弹出验证码，进行人机验证。
    * num  **参数解释：** 数量 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'key' => 'getKey',
            'num' => 'getNum'
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
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['num'] = isset($data['num']) ? $data['num'] : null;
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
    * Gets key
    *  **参数解释：** 防护动作 **取值范围：** - block: 拦截，表示超过“限速频率”将直接拦截。 - log：仅记录，表示超过“限速频率”将只记录不拦截。 - captcha：表示超过“限速频率”后弹出验证码，进行人机验证，完成验证后，请求将不受访问限制。人机验证目前支持英文。 - dynamic_block：上一个限速周期内，请求频率超过“限速频率”将被拦截，那么在下一个限速周期内，请求频率超过“放行频率”将被拦截。 - advanced_captcha：高阶人机验证，表示超过“限速频率”后弹出验证码，进行人机验证。
    *
    * @return string|null
    */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
    * Sets key
    *
    * @param string|null $key **参数解释：** 防护动作 **取值范围：** - block: 拦截，表示超过“限速频率”将直接拦截。 - log：仅记录，表示超过“限速频率”将只记录不拦截。 - captcha：表示超过“限速频率”后弹出验证码，进行人机验证，完成验证后，请求将不受访问限制。人机验证目前支持英文。 - dynamic_block：上一个限速周期内，请求频率超过“限速频率”将被拦截，那么在下一个限速周期内，请求频率超过“放行频率”将被拦截。 - advanced_captcha：高阶人机验证，表示超过“限速频率”后弹出验证码，进行人机验证。
    *
    * @return $this
    */
    public function setKey($key)
    {
        $this->container['key'] = $key;
        return $this;
    }

    /**
    * Gets num
    *  **参数解释：** 数量 **取值范围：** 不涉及
    *
    * @return int|null
    */
    public function getNum()
    {
        return $this->container['num'];
    }

    /**
    * Sets num
    *
    * @param int|null $num **参数解释：** 数量 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setNum($num)
    {
        $this->container['num'] = $num;
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

