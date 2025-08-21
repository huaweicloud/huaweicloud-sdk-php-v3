<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AccessDetailVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AccessDetailVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dstIpCount  **参数解释**： 目的IP数量 **取值范围**： 不涉及
    * dstPortCount  **参数解释**： 目的端口数量 **取值范围**： 不涉及
    * hitCount  **参数解释**： 命中次数 **取值范围**： 不涉及
    * protocolCount  **参数解释**： 协议数量 **取值范围**： 不涉及
    * recentEndTime  **参数解释**： 结束时间 **取值范围**： 不涉及
    * recentStartTime  **参数解释**： 开始时间 **取值范围**： 不涉及
    * recordTotal  **参数解释**： 记录数量 **取值范围**： 不涉及
    * records  **参数解释**： 命中详情 **取值范围**： 不涉及
    * ruleHitCount  **参数解释**： 命中规则数 **取值范围**： 不涉及
    * srcIpCount  **参数解释**： 源IP数量 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dstIpCount' => 'int',
            'dstPortCount' => 'int',
            'hitCount' => 'int',
            'protocolCount' => 'int',
            'recentEndTime' => 'int',
            'recentStartTime' => 'int',
            'recordTotal' => 'int',
            'records' => '\HuaweiCloud\SDK\Cfw\V1\Model\AccessLogInfo[]',
            'ruleHitCount' => 'int',
            'srcIpCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dstIpCount  **参数解释**： 目的IP数量 **取值范围**： 不涉及
    * dstPortCount  **参数解释**： 目的端口数量 **取值范围**： 不涉及
    * hitCount  **参数解释**： 命中次数 **取值范围**： 不涉及
    * protocolCount  **参数解释**： 协议数量 **取值范围**： 不涉及
    * recentEndTime  **参数解释**： 结束时间 **取值范围**： 不涉及
    * recentStartTime  **参数解释**： 开始时间 **取值范围**： 不涉及
    * recordTotal  **参数解释**： 记录数量 **取值范围**： 不涉及
    * records  **参数解释**： 命中详情 **取值范围**： 不涉及
    * ruleHitCount  **参数解释**： 命中规则数 **取值范围**： 不涉及
    * srcIpCount  **参数解释**： 源IP数量 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dstIpCount' => 'int64',
        'dstPortCount' => 'int64',
        'hitCount' => 'int64',
        'protocolCount' => 'int64',
        'recentEndTime' => 'int64',
        'recentStartTime' => 'int64',
        'recordTotal' => 'int64',
        'records' => null,
        'ruleHitCount' => 'int64',
        'srcIpCount' => 'int64'
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
    * dstIpCount  **参数解释**： 目的IP数量 **取值范围**： 不涉及
    * dstPortCount  **参数解释**： 目的端口数量 **取值范围**： 不涉及
    * hitCount  **参数解释**： 命中次数 **取值范围**： 不涉及
    * protocolCount  **参数解释**： 协议数量 **取值范围**： 不涉及
    * recentEndTime  **参数解释**： 结束时间 **取值范围**： 不涉及
    * recentStartTime  **参数解释**： 开始时间 **取值范围**： 不涉及
    * recordTotal  **参数解释**： 记录数量 **取值范围**： 不涉及
    * records  **参数解释**： 命中详情 **取值范围**： 不涉及
    * ruleHitCount  **参数解释**： 命中规则数 **取值范围**： 不涉及
    * srcIpCount  **参数解释**： 源IP数量 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dstIpCount' => 'dst_ip_count',
            'dstPortCount' => 'dst_port_count',
            'hitCount' => 'hit_count',
            'protocolCount' => 'protocol_count',
            'recentEndTime' => 'recent_end_time',
            'recentStartTime' => 'recent_start_time',
            'recordTotal' => 'record_total',
            'records' => 'records',
            'ruleHitCount' => 'rule_hit_count',
            'srcIpCount' => 'src_ip_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dstIpCount  **参数解释**： 目的IP数量 **取值范围**： 不涉及
    * dstPortCount  **参数解释**： 目的端口数量 **取值范围**： 不涉及
    * hitCount  **参数解释**： 命中次数 **取值范围**： 不涉及
    * protocolCount  **参数解释**： 协议数量 **取值范围**： 不涉及
    * recentEndTime  **参数解释**： 结束时间 **取值范围**： 不涉及
    * recentStartTime  **参数解释**： 开始时间 **取值范围**： 不涉及
    * recordTotal  **参数解释**： 记录数量 **取值范围**： 不涉及
    * records  **参数解释**： 命中详情 **取值范围**： 不涉及
    * ruleHitCount  **参数解释**： 命中规则数 **取值范围**： 不涉及
    * srcIpCount  **参数解释**： 源IP数量 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'dstIpCount' => 'setDstIpCount',
            'dstPortCount' => 'setDstPortCount',
            'hitCount' => 'setHitCount',
            'protocolCount' => 'setProtocolCount',
            'recentEndTime' => 'setRecentEndTime',
            'recentStartTime' => 'setRecentStartTime',
            'recordTotal' => 'setRecordTotal',
            'records' => 'setRecords',
            'ruleHitCount' => 'setRuleHitCount',
            'srcIpCount' => 'setSrcIpCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dstIpCount  **参数解释**： 目的IP数量 **取值范围**： 不涉及
    * dstPortCount  **参数解释**： 目的端口数量 **取值范围**： 不涉及
    * hitCount  **参数解释**： 命中次数 **取值范围**： 不涉及
    * protocolCount  **参数解释**： 协议数量 **取值范围**： 不涉及
    * recentEndTime  **参数解释**： 结束时间 **取值范围**： 不涉及
    * recentStartTime  **参数解释**： 开始时间 **取值范围**： 不涉及
    * recordTotal  **参数解释**： 记录数量 **取值范围**： 不涉及
    * records  **参数解释**： 命中详情 **取值范围**： 不涉及
    * ruleHitCount  **参数解释**： 命中规则数 **取值范围**： 不涉及
    * srcIpCount  **参数解释**： 源IP数量 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'dstIpCount' => 'getDstIpCount',
            'dstPortCount' => 'getDstPortCount',
            'hitCount' => 'getHitCount',
            'protocolCount' => 'getProtocolCount',
            'recentEndTime' => 'getRecentEndTime',
            'recentStartTime' => 'getRecentStartTime',
            'recordTotal' => 'getRecordTotal',
            'records' => 'getRecords',
            'ruleHitCount' => 'getRuleHitCount',
            'srcIpCount' => 'getSrcIpCount'
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
        $this->container['dstIpCount'] = isset($data['dstIpCount']) ? $data['dstIpCount'] : null;
        $this->container['dstPortCount'] = isset($data['dstPortCount']) ? $data['dstPortCount'] : null;
        $this->container['hitCount'] = isset($data['hitCount']) ? $data['hitCount'] : null;
        $this->container['protocolCount'] = isset($data['protocolCount']) ? $data['protocolCount'] : null;
        $this->container['recentEndTime'] = isset($data['recentEndTime']) ? $data['recentEndTime'] : null;
        $this->container['recentStartTime'] = isset($data['recentStartTime']) ? $data['recentStartTime'] : null;
        $this->container['recordTotal'] = isset($data['recordTotal']) ? $data['recordTotal'] : null;
        $this->container['records'] = isset($data['records']) ? $data['records'] : null;
        $this->container['ruleHitCount'] = isset($data['ruleHitCount']) ? $data['ruleHitCount'] : null;
        $this->container['srcIpCount'] = isset($data['srcIpCount']) ? $data['srcIpCount'] : null;
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
    *  **参数解释**： 目的端口数量 **取值范围**： 不涉及
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
    * @param int|null $dstPortCount **参数解释**： 目的端口数量 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setDstPortCount($dstPortCount)
    {
        $this->container['dstPortCount'] = $dstPortCount;
        return $this;
    }

    /**
    * Gets hitCount
    *  **参数解释**： 命中次数 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getHitCount()
    {
        return $this->container['hitCount'];
    }

    /**
    * Sets hitCount
    *
    * @param int|null $hitCount **参数解释**： 命中次数 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setHitCount($hitCount)
    {
        $this->container['hitCount'] = $hitCount;
        return $this;
    }

    /**
    * Gets protocolCount
    *  **参数解释**： 协议数量 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getProtocolCount()
    {
        return $this->container['protocolCount'];
    }

    /**
    * Sets protocolCount
    *
    * @param int|null $protocolCount **参数解释**： 协议数量 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setProtocolCount($protocolCount)
    {
        $this->container['protocolCount'] = $protocolCount;
        return $this;
    }

    /**
    * Gets recentEndTime
    *  **参数解释**： 结束时间 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getRecentEndTime()
    {
        return $this->container['recentEndTime'];
    }

    /**
    * Sets recentEndTime
    *
    * @param int|null $recentEndTime **参数解释**： 结束时间 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setRecentEndTime($recentEndTime)
    {
        $this->container['recentEndTime'] = $recentEndTime;
        return $this;
    }

    /**
    * Gets recentStartTime
    *  **参数解释**： 开始时间 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getRecentStartTime()
    {
        return $this->container['recentStartTime'];
    }

    /**
    * Sets recentStartTime
    *
    * @param int|null $recentStartTime **参数解释**： 开始时间 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setRecentStartTime($recentStartTime)
    {
        $this->container['recentStartTime'] = $recentStartTime;
        return $this;
    }

    /**
    * Gets recordTotal
    *  **参数解释**： 记录数量 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getRecordTotal()
    {
        return $this->container['recordTotal'];
    }

    /**
    * Sets recordTotal
    *
    * @param int|null $recordTotal **参数解释**： 记录数量 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setRecordTotal($recordTotal)
    {
        $this->container['recordTotal'] = $recordTotal;
        return $this;
    }

    /**
    * Gets records
    *  **参数解释**： 命中详情 **取值范围**： 不涉及
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\AccessLogInfo[]|null
    */
    public function getRecords()
    {
        return $this->container['records'];
    }

    /**
    * Sets records
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\AccessLogInfo[]|null $records **参数解释**： 命中详情 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setRecords($records)
    {
        $this->container['records'] = $records;
        return $this;
    }

    /**
    * Gets ruleHitCount
    *  **参数解释**： 命中规则数 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getRuleHitCount()
    {
        return $this->container['ruleHitCount'];
    }

    /**
    * Sets ruleHitCount
    *
    * @param int|null $ruleHitCount **参数解释**： 命中规则数 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setRuleHitCount($ruleHitCount)
    {
        $this->container['ruleHitCount'] = $ruleHitCount;
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

