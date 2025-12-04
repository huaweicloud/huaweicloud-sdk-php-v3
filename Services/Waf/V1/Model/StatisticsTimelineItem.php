<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StatisticsTimelineItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StatisticsTimelineItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * key  **参数解释：** 键值标识，用于区分不同的防护统计类型 **约束限制：** 不涉及 **取值范围：**  - ACCESS:请求总量  - CRAWLER:Bot攻击防护  - ATTACK:攻击总量  - WEB_ATTACK:Web基础防护  - PRECISE:精准防护  - CC:CC攻击防护 **默认取值：** 不涉及
    * timeline  对应键值的时间线统计数据
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'key' => 'string',
            'timeline' => '\HuaweiCloud\SDK\Waf\V1\Model\TimeLineItem[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * key  **参数解释：** 键值标识，用于区分不同的防护统计类型 **约束限制：** 不涉及 **取值范围：**  - ACCESS:请求总量  - CRAWLER:Bot攻击防护  - ATTACK:攻击总量  - WEB_ATTACK:Web基础防护  - PRECISE:精准防护  - CC:CC攻击防护 **默认取值：** 不涉及
    * timeline  对应键值的时间线统计数据
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'key' => null,
        'timeline' => null
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
    * key  **参数解释：** 键值标识，用于区分不同的防护统计类型 **约束限制：** 不涉及 **取值范围：**  - ACCESS:请求总量  - CRAWLER:Bot攻击防护  - ATTACK:攻击总量  - WEB_ATTACK:Web基础防护  - PRECISE:精准防护  - CC:CC攻击防护 **默认取值：** 不涉及
    * timeline  对应键值的时间线统计数据
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'key' => 'key',
            'timeline' => 'timeline'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * key  **参数解释：** 键值标识，用于区分不同的防护统计类型 **约束限制：** 不涉及 **取值范围：**  - ACCESS:请求总量  - CRAWLER:Bot攻击防护  - ATTACK:攻击总量  - WEB_ATTACK:Web基础防护  - PRECISE:精准防护  - CC:CC攻击防护 **默认取值：** 不涉及
    * timeline  对应键值的时间线统计数据
    *
    * @var string[]
    */
    protected static $setters = [
            'key' => 'setKey',
            'timeline' => 'setTimeline'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * key  **参数解释：** 键值标识，用于区分不同的防护统计类型 **约束限制：** 不涉及 **取值范围：**  - ACCESS:请求总量  - CRAWLER:Bot攻击防护  - ATTACK:攻击总量  - WEB_ATTACK:Web基础防护  - PRECISE:精准防护  - CC:CC攻击防护 **默认取值：** 不涉及
    * timeline  对应键值的时间线统计数据
    *
    * @var string[]
    */
    protected static $getters = [
            'key' => 'getKey',
            'timeline' => 'getTimeline'
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
    const KEY_ACCESS = 'ACCESS';
    const KEY_CRAWLER = 'CRAWLER';
    const KEY_ATTACK = 'ATTACK';
    const KEY_WEB_ATTACK = 'WEB_ATTACK';
    const KEY_PRECISE = 'PRECISE';
    const KEY_CC = 'CC';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getKeyAllowableValues()
    {
        return [
            self::KEY_ACCESS,
            self::KEY_CRAWLER,
            self::KEY_ATTACK,
            self::KEY_WEB_ATTACK,
            self::KEY_PRECISE,
            self::KEY_CC,
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
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['timeline'] = isset($data['timeline']) ? $data['timeline'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getKeyAllowableValues();
                if (!is_null($this->container['key']) && !in_array($this->container['key'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'key', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets key
    *  **参数解释：** 键值标识，用于区分不同的防护统计类型 **约束限制：** 不涉及 **取值范围：**  - ACCESS:请求总量  - CRAWLER:Bot攻击防护  - ATTACK:攻击总量  - WEB_ATTACK:Web基础防护  - PRECISE:精准防护  - CC:CC攻击防护 **默认取值：** 不涉及
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
    * @param string|null $key **参数解释：** 键值标识，用于区分不同的防护统计类型 **约束限制：** 不涉及 **取值范围：**  - ACCESS:请求总量  - CRAWLER:Bot攻击防护  - ATTACK:攻击总量  - WEB_ATTACK:Web基础防护  - PRECISE:精准防护  - CC:CC攻击防护 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setKey($key)
    {
        $this->container['key'] = $key;
        return $this;
    }

    /**
    * Gets timeline
    *  对应键值的时间线统计数据
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\TimeLineItem[]|null
    */
    public function getTimeline()
    {
        return $this->container['timeline'];
    }

    /**
    * Sets timeline
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\TimeLineItem[]|null $timeline 对应键值的时间线统计数据
    *
    * @return $this
    */
    public function setTimeline($timeline)
    {
        $this->container['timeline'] = $timeline;
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

