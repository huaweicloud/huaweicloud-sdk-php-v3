<?php

namespace HuaweiCloud\SDK\Ces\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowEventItemResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowEventItemResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * eventName  **参数解释**： 事件名称。 **取值范围**： 必须以字母开头，只能包含0-9/a-z/A-Z/_，长度为[1,64]个字符。
    * eventSource  **参数解释**： 事件来源。 **取值范围**： 格式为service.item。service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_，长度为[3,32]个字符。
    * time  **参数解释**： 事件发生时间。UNIX时间戳，单位毫秒。 **取值范围**： 因为客户端到服务器端有延时，因此插入数据的时间戳应该在[当前时间-1小时+20秒,当前时间+10分钟-20秒]区间内，保证到达服务器时不会因为传输时延造成数据不能插入数据库。
    * detail  detail
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'eventName' => 'string',
            'eventSource' => 'string',
            'time' => 'int',
            'detail' => '\HuaweiCloud\SDK\Ces\V1\Model\ShowEventItemDetailResp'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * eventName  **参数解释**： 事件名称。 **取值范围**： 必须以字母开头，只能包含0-9/a-z/A-Z/_，长度为[1,64]个字符。
    * eventSource  **参数解释**： 事件来源。 **取值范围**： 格式为service.item。service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_，长度为[3,32]个字符。
    * time  **参数解释**： 事件发生时间。UNIX时间戳，单位毫秒。 **取值范围**： 因为客户端到服务器端有延时，因此插入数据的时间戳应该在[当前时间-1小时+20秒,当前时间+10分钟-20秒]区间内，保证到达服务器时不会因为传输时延造成数据不能插入数据库。
    * detail  detail
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'eventName' => null,
        'eventSource' => null,
        'time' => 'int64',
        'detail' => null
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
    * eventName  **参数解释**： 事件名称。 **取值范围**： 必须以字母开头，只能包含0-9/a-z/A-Z/_，长度为[1,64]个字符。
    * eventSource  **参数解释**： 事件来源。 **取值范围**： 格式为service.item。service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_，长度为[3,32]个字符。
    * time  **参数解释**： 事件发生时间。UNIX时间戳，单位毫秒。 **取值范围**： 因为客户端到服务器端有延时，因此插入数据的时间戳应该在[当前时间-1小时+20秒,当前时间+10分钟-20秒]区间内，保证到达服务器时不会因为传输时延造成数据不能插入数据库。
    * detail  detail
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'eventName' => 'event_name',
            'eventSource' => 'event_source',
            'time' => 'time',
            'detail' => 'detail'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * eventName  **参数解释**： 事件名称。 **取值范围**： 必须以字母开头，只能包含0-9/a-z/A-Z/_，长度为[1,64]个字符。
    * eventSource  **参数解释**： 事件来源。 **取值范围**： 格式为service.item。service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_，长度为[3,32]个字符。
    * time  **参数解释**： 事件发生时间。UNIX时间戳，单位毫秒。 **取值范围**： 因为客户端到服务器端有延时，因此插入数据的时间戳应该在[当前时间-1小时+20秒,当前时间+10分钟-20秒]区间内，保证到达服务器时不会因为传输时延造成数据不能插入数据库。
    * detail  detail
    *
    * @var string[]
    */
    protected static $setters = [
            'eventName' => 'setEventName',
            'eventSource' => 'setEventSource',
            'time' => 'setTime',
            'detail' => 'setDetail'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * eventName  **参数解释**： 事件名称。 **取值范围**： 必须以字母开头，只能包含0-9/a-z/A-Z/_，长度为[1,64]个字符。
    * eventSource  **参数解释**： 事件来源。 **取值范围**： 格式为service.item。service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_，长度为[3,32]个字符。
    * time  **参数解释**： 事件发生时间。UNIX时间戳，单位毫秒。 **取值范围**： 因为客户端到服务器端有延时，因此插入数据的时间戳应该在[当前时间-1小时+20秒,当前时间+10分钟-20秒]区间内，保证到达服务器时不会因为传输时延造成数据不能插入数据库。
    * detail  detail
    *
    * @var string[]
    */
    protected static $getters = [
            'eventName' => 'getEventName',
            'eventSource' => 'getEventSource',
            'time' => 'getTime',
            'detail' => 'getDetail'
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
        $this->container['eventName'] = isset($data['eventName']) ? $data['eventName'] : null;
        $this->container['eventSource'] = isset($data['eventSource']) ? $data['eventSource'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['detail'] = isset($data['detail']) ? $data['detail'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['eventName'] === null) {
            $invalidProperties[] = "'eventName' can't be null";
        }
            if ((mb_strlen($this->container['eventName']) > 64)) {
                $invalidProperties[] = "invalid value for 'eventName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['eventName']) < 1)) {
                $invalidProperties[] = "invalid value for 'eventName', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_)*$/", $this->container['eventName'])) {
                $invalidProperties[] = "invalid value for 'eventName', must be conform to the pattern /([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_)*$/.";
            }
        if ($this->container['eventSource'] === null) {
            $invalidProperties[] = "'eventSource' can't be null";
        }
            if ((mb_strlen($this->container['eventSource']) > 32)) {
                $invalidProperties[] = "invalid value for 'eventSource', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['eventSource']) < 3)) {
                $invalidProperties[] = "invalid value for 'eventSource', the character length must be bigger than or equal to 3.";
            }
            if (!preg_match("/([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_)*$/", $this->container['eventSource'])) {
                $invalidProperties[] = "invalid value for 'eventSource', must be conform to the pattern /([a-z]|[A-Z]){1}([a-z]|[A-Z]|[0-9]|_)*$/.";
            }
        if ($this->container['time'] === null) {
            $invalidProperties[] = "'time' can't be null";
        }
            if (($this->container['time'] > 99999999999999)) {
                $invalidProperties[] = "invalid value for 'time', must be smaller than or equal to 99999999999999.";
            }
            if (($this->container['time'] < 0)) {
                $invalidProperties[] = "invalid value for 'time', must be bigger than or equal to 0.";
            }
        if ($this->container['detail'] === null) {
            $invalidProperties[] = "'detail' can't be null";
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
    * Gets eventName
    *  **参数解释**： 事件名称。 **取值范围**： 必须以字母开头，只能包含0-9/a-z/A-Z/_，长度为[1,64]个字符。
    *
    * @return string
    */
    public function getEventName()
    {
        return $this->container['eventName'];
    }

    /**
    * Sets eventName
    *
    * @param string $eventName **参数解释**： 事件名称。 **取值范围**： 必须以字母开头，只能包含0-9/a-z/A-Z/_，长度为[1,64]个字符。
    *
    * @return $this
    */
    public function setEventName($eventName)
    {
        $this->container['eventName'] = $eventName;
        return $this;
    }

    /**
    * Gets eventSource
    *  **参数解释**： 事件来源。 **取值范围**： 格式为service.item。service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_，长度为[3,32]个字符。
    *
    * @return string
    */
    public function getEventSource()
    {
        return $this->container['eventSource'];
    }

    /**
    * Sets eventSource
    *
    * @param string $eventSource **参数解释**： 事件来源。 **取值范围**： 格式为service.item。service和item必须是字符串，必须以字母开头，只能包含0-9/a-z/A-Z/_，长度为[3,32]个字符。
    *
    * @return $this
    */
    public function setEventSource($eventSource)
    {
        $this->container['eventSource'] = $eventSource;
        return $this;
    }

    /**
    * Gets time
    *  **参数解释**： 事件发生时间。UNIX时间戳，单位毫秒。 **取值范围**： 因为客户端到服务器端有延时，因此插入数据的时间戳应该在[当前时间-1小时+20秒,当前时间+10分钟-20秒]区间内，保证到达服务器时不会因为传输时延造成数据不能插入数据库。
    *
    * @return int
    */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
    * Sets time
    *
    * @param int $time **参数解释**： 事件发生时间。UNIX时间戳，单位毫秒。 **取值范围**： 因为客户端到服务器端有延时，因此插入数据的时间戳应该在[当前时间-1小时+20秒,当前时间+10分钟-20秒]区间内，保证到达服务器时不会因为传输时延造成数据不能插入数据库。
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
        return $this;
    }

    /**
    * Gets detail
    *  detail
    *
    * @return \HuaweiCloud\SDK\Ces\V1\Model\ShowEventItemDetailResp
    */
    public function getDetail()
    {
        return $this->container['detail'];
    }

    /**
    * Sets detail
    *
    * @param \HuaweiCloud\SDK\Ces\V1\Model\ShowEventItemDetailResp $detail detail
    *
    * @return $this
    */
    public function setDetail($detail)
    {
        $this->container['detail'] = $detail;
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

