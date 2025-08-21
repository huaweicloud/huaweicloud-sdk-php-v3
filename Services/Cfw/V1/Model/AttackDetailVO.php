<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AttackDetailVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AttackDetailVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * appCount  **参数解释**： 应用数量 **取值范围**： 不涉及
    * attackRuleCount  **参数解释**： 攻击规则数量 **取值范围**： 不涉及
    * attackTypeCount  **参数解释**： 攻击类型数量 **取值范围**： 不涉及
    * count  **参数解释**： 攻击次数 **取值范围**： 不涉及
    * dstIpCount  **参数解释**： 目的IP数量 **取值范围**： 不涉及
    * dstPortCount  **参数解释**： 攻击端口数量 **取值范围**： 不涉及
    * endTime  **参数解释**： 结束时间 **取值范围**： 不涉及
    * records  **参数解释**： 攻击事件明细 **取值范围**： 不涉及
    * srcIpCount  **参数解释**： 源IP数量 **取值范围**： 不涉及
    * startTime  **参数解释**： 开始时间 **取值范围**： 不涉及
    * total  **参数解释**： 总数 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'appCount' => 'int',
            'attackRuleCount' => 'int',
            'attackTypeCount' => 'int',
            'count' => 'int',
            'dstIpCount' => 'int',
            'dstPortCount' => 'int',
            'endTime' => 'int',
            'records' => '\HuaweiCloud\SDK\Cfw\V1\Model\AttackLog[]',
            'srcIpCount' => 'int',
            'startTime' => 'int',
            'total' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * appCount  **参数解释**： 应用数量 **取值范围**： 不涉及
    * attackRuleCount  **参数解释**： 攻击规则数量 **取值范围**： 不涉及
    * attackTypeCount  **参数解释**： 攻击类型数量 **取值范围**： 不涉及
    * count  **参数解释**： 攻击次数 **取值范围**： 不涉及
    * dstIpCount  **参数解释**： 目的IP数量 **取值范围**： 不涉及
    * dstPortCount  **参数解释**： 攻击端口数量 **取值范围**： 不涉及
    * endTime  **参数解释**： 结束时间 **取值范围**： 不涉及
    * records  **参数解释**： 攻击事件明细 **取值范围**： 不涉及
    * srcIpCount  **参数解释**： 源IP数量 **取值范围**： 不涉及
    * startTime  **参数解释**： 开始时间 **取值范围**： 不涉及
    * total  **参数解释**： 总数 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'appCount' => 'int64',
        'attackRuleCount' => 'int64',
        'attackTypeCount' => 'int64',
        'count' => 'int64',
        'dstIpCount' => 'int64',
        'dstPortCount' => 'int64',
        'endTime' => 'int64',
        'records' => null,
        'srcIpCount' => 'int64',
        'startTime' => 'int64',
        'total' => 'int64'
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
    * appCount  **参数解释**： 应用数量 **取值范围**： 不涉及
    * attackRuleCount  **参数解释**： 攻击规则数量 **取值范围**： 不涉及
    * attackTypeCount  **参数解释**： 攻击类型数量 **取值范围**： 不涉及
    * count  **参数解释**： 攻击次数 **取值范围**： 不涉及
    * dstIpCount  **参数解释**： 目的IP数量 **取值范围**： 不涉及
    * dstPortCount  **参数解释**： 攻击端口数量 **取值范围**： 不涉及
    * endTime  **参数解释**： 结束时间 **取值范围**： 不涉及
    * records  **参数解释**： 攻击事件明细 **取值范围**： 不涉及
    * srcIpCount  **参数解释**： 源IP数量 **取值范围**： 不涉及
    * startTime  **参数解释**： 开始时间 **取值范围**： 不涉及
    * total  **参数解释**： 总数 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'appCount' => 'app_count',
            'attackRuleCount' => 'attack_rule_count',
            'attackTypeCount' => 'attack_type_count',
            'count' => 'count',
            'dstIpCount' => 'dst_ip_count',
            'dstPortCount' => 'dst_port_count',
            'endTime' => 'end_time',
            'records' => 'records',
            'srcIpCount' => 'src_ip_count',
            'startTime' => 'start_time',
            'total' => 'total'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * appCount  **参数解释**： 应用数量 **取值范围**： 不涉及
    * attackRuleCount  **参数解释**： 攻击规则数量 **取值范围**： 不涉及
    * attackTypeCount  **参数解释**： 攻击类型数量 **取值范围**： 不涉及
    * count  **参数解释**： 攻击次数 **取值范围**： 不涉及
    * dstIpCount  **参数解释**： 目的IP数量 **取值范围**： 不涉及
    * dstPortCount  **参数解释**： 攻击端口数量 **取值范围**： 不涉及
    * endTime  **参数解释**： 结束时间 **取值范围**： 不涉及
    * records  **参数解释**： 攻击事件明细 **取值范围**： 不涉及
    * srcIpCount  **参数解释**： 源IP数量 **取值范围**： 不涉及
    * startTime  **参数解释**： 开始时间 **取值范围**： 不涉及
    * total  **参数解释**： 总数 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'appCount' => 'setAppCount',
            'attackRuleCount' => 'setAttackRuleCount',
            'attackTypeCount' => 'setAttackTypeCount',
            'count' => 'setCount',
            'dstIpCount' => 'setDstIpCount',
            'dstPortCount' => 'setDstPortCount',
            'endTime' => 'setEndTime',
            'records' => 'setRecords',
            'srcIpCount' => 'setSrcIpCount',
            'startTime' => 'setStartTime',
            'total' => 'setTotal'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * appCount  **参数解释**： 应用数量 **取值范围**： 不涉及
    * attackRuleCount  **参数解释**： 攻击规则数量 **取值范围**： 不涉及
    * attackTypeCount  **参数解释**： 攻击类型数量 **取值范围**： 不涉及
    * count  **参数解释**： 攻击次数 **取值范围**： 不涉及
    * dstIpCount  **参数解释**： 目的IP数量 **取值范围**： 不涉及
    * dstPortCount  **参数解释**： 攻击端口数量 **取值范围**： 不涉及
    * endTime  **参数解释**： 结束时间 **取值范围**： 不涉及
    * records  **参数解释**： 攻击事件明细 **取值范围**： 不涉及
    * srcIpCount  **参数解释**： 源IP数量 **取值范围**： 不涉及
    * startTime  **参数解释**： 开始时间 **取值范围**： 不涉及
    * total  **参数解释**： 总数 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'appCount' => 'getAppCount',
            'attackRuleCount' => 'getAttackRuleCount',
            'attackTypeCount' => 'getAttackTypeCount',
            'count' => 'getCount',
            'dstIpCount' => 'getDstIpCount',
            'dstPortCount' => 'getDstPortCount',
            'endTime' => 'getEndTime',
            'records' => 'getRecords',
            'srcIpCount' => 'getSrcIpCount',
            'startTime' => 'getStartTime',
            'total' => 'getTotal'
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
        $this->container['appCount'] = isset($data['appCount']) ? $data['appCount'] : null;
        $this->container['attackRuleCount'] = isset($data['attackRuleCount']) ? $data['attackRuleCount'] : null;
        $this->container['attackTypeCount'] = isset($data['attackTypeCount']) ? $data['attackTypeCount'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['dstIpCount'] = isset($data['dstIpCount']) ? $data['dstIpCount'] : null;
        $this->container['dstPortCount'] = isset($data['dstPortCount']) ? $data['dstPortCount'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['records'] = isset($data['records']) ? $data['records'] : null;
        $this->container['srcIpCount'] = isset($data['srcIpCount']) ? $data['srcIpCount'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
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
    * Gets appCount
    *  **参数解释**： 应用数量 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getAppCount()
    {
        return $this->container['appCount'];
    }

    /**
    * Sets appCount
    *
    * @param int|null $appCount **参数解释**： 应用数量 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setAppCount($appCount)
    {
        $this->container['appCount'] = $appCount;
        return $this;
    }

    /**
    * Gets attackRuleCount
    *  **参数解释**： 攻击规则数量 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getAttackRuleCount()
    {
        return $this->container['attackRuleCount'];
    }

    /**
    * Sets attackRuleCount
    *
    * @param int|null $attackRuleCount **参数解释**： 攻击规则数量 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setAttackRuleCount($attackRuleCount)
    {
        $this->container['attackRuleCount'] = $attackRuleCount;
        return $this;
    }

    /**
    * Gets attackTypeCount
    *  **参数解释**： 攻击类型数量 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getAttackTypeCount()
    {
        return $this->container['attackTypeCount'];
    }

    /**
    * Sets attackTypeCount
    *
    * @param int|null $attackTypeCount **参数解释**： 攻击类型数量 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setAttackTypeCount($attackTypeCount)
    {
        $this->container['attackTypeCount'] = $attackTypeCount;
        return $this;
    }

    /**
    * Gets count
    *  **参数解释**： 攻击次数 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int|null $count **参数解释**： 攻击次数 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets dstIpCount
    *  **参数解释**： 目的IP数量 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getDstIpCount()
    {
        return $this->container['dstIpCount'];
    }

    /**
    * Sets dstIpCount
    *
    * @param int|null $dstIpCount **参数解释**： 目的IP数量 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setDstIpCount($dstIpCount)
    {
        $this->container['dstIpCount'] = $dstIpCount;
        return $this;
    }

    /**
    * Gets dstPortCount
    *  **参数解释**： 攻击端口数量 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getDstPortCount()
    {
        return $this->container['dstPortCount'];
    }

    /**
    * Sets dstPortCount
    *
    * @param int|null $dstPortCount **参数解释**： 攻击端口数量 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setDstPortCount($dstPortCount)
    {
        $this->container['dstPortCount'] = $dstPortCount;
        return $this;
    }

    /**
    * Gets endTime
    *  **参数解释**： 结束时间 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int|null $endTime **参数解释**： 结束时间 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets records
    *  **参数解释**： 攻击事件明细 **取值范围**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\AttackLog[]|null
    */
    public function getRecords()
    {
        return $this->container['records'];
    }

    /**
    * Sets records
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\AttackLog[]|null $records **参数解释**： 攻击事件明细 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setRecords($records)
    {
        $this->container['records'] = $records;
        return $this;
    }

    /**
    * Gets srcIpCount
    *  **参数解释**： 源IP数量 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getSrcIpCount()
    {
        return $this->container['srcIpCount'];
    }

    /**
    * Sets srcIpCount
    *
    * @param int|null $srcIpCount **参数解释**： 源IP数量 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setSrcIpCount($srcIpCount)
    {
        $this->container['srcIpCount'] = $srcIpCount;
        return $this;
    }

    /**
    * Gets startTime
    *  **参数解释**： 开始时间 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int|null $startTime **参数解释**： 开始时间 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets total
    *  **参数解释**： 总数 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param int|null $total **参数解释**： 总数 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
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

