<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListUrlRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListUrlRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * contentType  **参数解释：** 内容类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** application/json;charset=utf8
    * top  受攻击次数最多的几条url
    * recent  **参数解释：** 查询日志的时间范围，如1week（1周）、1month（1个月） **约束限制：** 不涉及 **取值范围：** - yesterday - today - 3days - 1week - 1month  **默认取值：** 不涉及
    * from  **参数解释：** 开始时间，统计周期的起始时间戳（毫秒级）。不使用recent参数时需要填写 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * to  **参数解释：** 结束时间，统计周期的终止时间戳（毫秒级）。不使用recent参数时需要填写 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * hosts  要查询事件的域名id列表
    * instances  要查询事件的独享域名id列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'contentType' => 'string',
            'top' => 'int',
            'recent' => 'string',
            'from' => 'int',
            'to' => 'int',
            'hosts' => 'string[]',
            'instances' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * contentType  **参数解释：** 内容类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** application/json;charset=utf8
    * top  受攻击次数最多的几条url
    * recent  **参数解释：** 查询日志的时间范围，如1week（1周）、1month（1个月） **约束限制：** 不涉及 **取值范围：** - yesterday - today - 3days - 1week - 1month  **默认取值：** 不涉及
    * from  **参数解释：** 开始时间，统计周期的起始时间戳（毫秒级）。不使用recent参数时需要填写 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * to  **参数解释：** 结束时间，统计周期的终止时间戳（毫秒级）。不使用recent参数时需要填写 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * hosts  要查询事件的域名id列表
    * instances  要查询事件的独享域名id列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'contentType' => null,
        'top' => null,
        'recent' => null,
        'from' => null,
        'to' => null,
        'hosts' => null,
        'instances' => null
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
    * contentType  **参数解释：** 内容类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** application/json;charset=utf8
    * top  受攻击次数最多的几条url
    * recent  **参数解释：** 查询日志的时间范围，如1week（1周）、1month（1个月） **约束限制：** 不涉及 **取值范围：** - yesterday - today - 3days - 1week - 1month  **默认取值：** 不涉及
    * from  **参数解释：** 开始时间，统计周期的起始时间戳（毫秒级）。不使用recent参数时需要填写 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * to  **参数解释：** 结束时间，统计周期的终止时间戳（毫秒级）。不使用recent参数时需要填写 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * hosts  要查询事件的域名id列表
    * instances  要查询事件的独享域名id列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'contentType' => 'Content-Type',
            'top' => 'top',
            'recent' => 'recent',
            'from' => 'from',
            'to' => 'to',
            'hosts' => 'hosts',
            'instances' => 'instances'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * contentType  **参数解释：** 内容类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** application/json;charset=utf8
    * top  受攻击次数最多的几条url
    * recent  **参数解释：** 查询日志的时间范围，如1week（1周）、1month（1个月） **约束限制：** 不涉及 **取值范围：** - yesterday - today - 3days - 1week - 1month  **默认取值：** 不涉及
    * from  **参数解释：** 开始时间，统计周期的起始时间戳（毫秒级）。不使用recent参数时需要填写 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * to  **参数解释：** 结束时间，统计周期的终止时间戳（毫秒级）。不使用recent参数时需要填写 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * hosts  要查询事件的域名id列表
    * instances  要查询事件的独享域名id列表
    *
    * @var string[]
    */
    protected static $setters = [
            'contentType' => 'setContentType',
            'top' => 'setTop',
            'recent' => 'setRecent',
            'from' => 'setFrom',
            'to' => 'setTo',
            'hosts' => 'setHosts',
            'instances' => 'setInstances'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * contentType  **参数解释：** 内容类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** application/json;charset=utf8
    * top  受攻击次数最多的几条url
    * recent  **参数解释：** 查询日志的时间范围，如1week（1周）、1month（1个月） **约束限制：** 不涉及 **取值范围：** - yesterday - today - 3days - 1week - 1month  **默认取值：** 不涉及
    * from  **参数解释：** 开始时间，统计周期的起始时间戳（毫秒级）。不使用recent参数时需要填写 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * to  **参数解释：** 结束时间，统计周期的终止时间戳（毫秒级）。不使用recent参数时需要填写 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * hosts  要查询事件的域名id列表
    * instances  要查询事件的独享域名id列表
    *
    * @var string[]
    */
    protected static $getters = [
            'contentType' => 'getContentType',
            'top' => 'getTop',
            'recent' => 'getRecent',
            'from' => 'getFrom',
            'to' => 'getTo',
            'hosts' => 'getHosts',
            'instances' => 'getInstances'
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
        $this->container['contentType'] = isset($data['contentType']) ? $data['contentType'] : null;
        $this->container['top'] = isset($data['top']) ? $data['top'] : null;
        $this->container['recent'] = isset($data['recent']) ? $data['recent'] : null;
        $this->container['from'] = isset($data['from']) ? $data['from'] : null;
        $this->container['to'] = isset($data['to']) ? $data['to'] : null;
        $this->container['hosts'] = isset($data['hosts']) ? $data['hosts'] : null;
        $this->container['instances'] = isset($data['instances']) ? $data['instances'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['contentType'] === null) {
            $invalidProperties[] = "'contentType' can't be null";
        }
        if ($this->container['top'] === null) {
            $invalidProperties[] = "'top' can't be null";
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
    * Gets contentType
    *  **参数解释：** 内容类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** application/json;charset=utf8
    *
    * @return string
    */
    public function getContentType()
    {
        return $this->container['contentType'];
    }

    /**
    * Sets contentType
    *
    * @param string $contentType **参数解释：** 内容类型 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** application/json;charset=utf8
    *
    * @return $this
    */
    public function setContentType($contentType)
    {
        $this->container['contentType'] = $contentType;
        return $this;
    }

    /**
    * Gets top
    *  受攻击次数最多的几条url
    *
    * @return int
    */
    public function getTop()
    {
        return $this->container['top'];
    }

    /**
    * Sets top
    *
    * @param int $top 受攻击次数最多的几条url
    *
    * @return $this
    */
    public function setTop($top)
    {
        $this->container['top'] = $top;
        return $this;
    }

    /**
    * Gets recent
    *  **参数解释：** 查询日志的时间范围，如1week（1周）、1month（1个月） **约束限制：** 不涉及 **取值范围：** - yesterday - today - 3days - 1week - 1month  **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getRecent()
    {
        return $this->container['recent'];
    }

    /**
    * Sets recent
    *
    * @param string|null $recent **参数解释：** 查询日志的时间范围，如1week（1周）、1month（1个月） **约束限制：** 不涉及 **取值范围：** - yesterday - today - 3days - 1week - 1month  **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setRecent($recent)
    {
        $this->container['recent'] = $recent;
        return $this;
    }

    /**
    * Gets from
    *  **参数解释：** 开始时间，统计周期的起始时间戳（毫秒级）。不使用recent参数时需要填写 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
    * Sets from
    *
    * @param int|null $from **参数解释：** 开始时间，统计周期的起始时间戳（毫秒级）。不使用recent参数时需要填写 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setFrom($from)
    {
        $this->container['from'] = $from;
        return $this;
    }

    /**
    * Gets to
    *  **参数解释：** 结束时间，统计周期的终止时间戳（毫秒级）。不使用recent参数时需要填写 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
    * Sets to
    *
    * @param int|null $to **参数解释：** 结束时间，统计周期的终止时间戳（毫秒级）。不使用recent参数时需要填写 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setTo($to)
    {
        $this->container['to'] = $to;
        return $this;
    }

    /**
    * Gets hosts
    *  要查询事件的域名id列表
    *
    * @return string[]|null
    */
    public function getHosts()
    {
        return $this->container['hosts'];
    }

    /**
    * Sets hosts
    *
    * @param string[]|null $hosts 要查询事件的域名id列表
    *
    * @return $this
    */
    public function setHosts($hosts)
    {
        $this->container['hosts'] = $hosts;
        return $this;
    }

    /**
    * Gets instances
    *  要查询事件的独享域名id列表
    *
    * @return string[]|null
    */
    public function getInstances()
    {
        return $this->container['instances'];
    }

    /**
    * Sets instances
    *
    * @param string[]|null $instances 要查询事件的独享域名id列表
    *
    * @return $this
    */
    public function setInstances($instances)
    {
        $this->container['instances'] = $instances;
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

