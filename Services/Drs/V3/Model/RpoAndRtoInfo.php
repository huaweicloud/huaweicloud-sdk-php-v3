<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RpoAndRtoInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RpoAndRtoInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * checkPoint  **参数解释**：  数据复制的检查点位置，标识已同步数据的Binlog位置。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * delay  **参数解释**：  数据同步延迟时间。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * gtidSet  **参数解释**：  全局事务ID集合（Global Transaction Identifier），用于标识已执行的事务。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * time  **参数解释**：  RPO或RTO的统计时间点，格式为\"yyyy-MM-dd HH:mm:ss\"。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'checkPoint' => 'string',
            'delay' => 'string',
            'gtidSet' => 'string',
            'time' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * checkPoint  **参数解释**：  数据复制的检查点位置，标识已同步数据的Binlog位置。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * delay  **参数解释**：  数据同步延迟时间。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * gtidSet  **参数解释**：  全局事务ID集合（Global Transaction Identifier），用于标识已执行的事务。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * time  **参数解释**：  RPO或RTO的统计时间点，格式为\"yyyy-MM-dd HH:mm:ss\"。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'checkPoint' => null,
        'delay' => null,
        'gtidSet' => null,
        'time' => null
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
    * checkPoint  **参数解释**：  数据复制的检查点位置，标识已同步数据的Binlog位置。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * delay  **参数解释**：  数据同步延迟时间。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * gtidSet  **参数解释**：  全局事务ID集合（Global Transaction Identifier），用于标识已执行的事务。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * time  **参数解释**：  RPO或RTO的统计时间点，格式为\"yyyy-MM-dd HH:mm:ss\"。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'checkPoint' => 'check_point',
            'delay' => 'delay',
            'gtidSet' => 'gtid_set',
            'time' => 'time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * checkPoint  **参数解释**：  数据复制的检查点位置，标识已同步数据的Binlog位置。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * delay  **参数解释**：  数据同步延迟时间。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * gtidSet  **参数解释**：  全局事务ID集合（Global Transaction Identifier），用于标识已执行的事务。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * time  **参数解释**：  RPO或RTO的统计时间点，格式为\"yyyy-MM-dd HH:mm:ss\"。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'checkPoint' => 'setCheckPoint',
            'delay' => 'setDelay',
            'gtidSet' => 'setGtidSet',
            'time' => 'setTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * checkPoint  **参数解释**：  数据复制的检查点位置，标识已同步数据的Binlog位置。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * delay  **参数解释**：  数据同步延迟时间。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * gtidSet  **参数解释**：  全局事务ID集合（Global Transaction Identifier），用于标识已执行的事务。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    * time  **参数解释**：  RPO或RTO的统计时间点，格式为\"yyyy-MM-dd HH:mm:ss\"。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'checkPoint' => 'getCheckPoint',
            'delay' => 'getDelay',
            'gtidSet' => 'getGtidSet',
            'time' => 'getTime'
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
        $this->container['checkPoint'] = isset($data['checkPoint']) ? $data['checkPoint'] : null;
        $this->container['delay'] = isset($data['delay']) ? $data['delay'] : null;
        $this->container['gtidSet'] = isset($data['gtidSet']) ? $data['gtidSet'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
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
    * Gets checkPoint
    *  **参数解释**：  数据复制的检查点位置，标识已同步数据的Binlog位置。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @return string|null
    */
    public function getCheckPoint()
    {
        return $this->container['checkPoint'];
    }

    /**
    * Sets checkPoint
    *
    * @param string|null $checkPoint **参数解释**：  数据复制的检查点位置，标识已同步数据的Binlog位置。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setCheckPoint($checkPoint)
    {
        $this->container['checkPoint'] = $checkPoint;
        return $this;
    }

    /**
    * Gets delay
    *  **参数解释**：  数据同步延迟时间。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @return string|null
    */
    public function getDelay()
    {
        return $this->container['delay'];
    }

    /**
    * Sets delay
    *
    * @param string|null $delay **参数解释**：  数据同步延迟时间。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setDelay($delay)
    {
        $this->container['delay'] = $delay;
        return $this;
    }

    /**
    * Gets gtidSet
    *  **参数解释**：  全局事务ID集合（Global Transaction Identifier），用于标识已执行的事务。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @return string|null
    */
    public function getGtidSet()
    {
        return $this->container['gtidSet'];
    }

    /**
    * Sets gtidSet
    *
    * @param string|null $gtidSet **参数解释**：  全局事务ID集合（Global Transaction Identifier），用于标识已执行的事务。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setGtidSet($gtidSet)
    {
        $this->container['gtidSet'] = $gtidSet;
        return $this;
    }

    /**
    * Gets time
    *  **参数解释**：  RPO或RTO的统计时间点，格式为\"yyyy-MM-dd HH:mm:ss\"。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @return string|null
    */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
    * Sets time
    *
    * @param string|null $time **参数解释**：  RPO或RTO的统计时间点，格式为\"yyyy-MM-dd HH:mm:ss\"。  **约束限制**：  不涉及。  **取值范围**：  不涉及。  **默认取值**：  不涉及
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
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

