<?php

namespace HuaweiCloud\SDK\Aad\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListDDoSEventData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListDDoSEventData';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * zoneIp  防护IP
    * startTime  开始时间（毫秒时间戳）
    * endTime  结束时间（毫秒时间戳）
    * maxDropKbps  攻击流量峰值，单位“kbps”
    * maxDropPps  攻击报文数峰值，单位“pps”
    * maxInKbps  入流量峰值，单位“kbps”
    * maxInPps  入报文数峰值，单位“pps”
    * attackTypes  攻击类型
    * attackIps  攻击源IP
    * attackIpsDesc  攻击IP描述
    * attackStatus  攻击状态
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'zoneIp' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'maxDropKbps' => 'string',
            'maxDropPps' => 'string',
            'maxInKbps' => 'string',
            'maxInPps' => 'string',
            'attackTypes' => 'string',
            'attackIps' => 'string',
            'attackIpsDesc' => 'string',
            'attackStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * zoneIp  防护IP
    * startTime  开始时间（毫秒时间戳）
    * endTime  结束时间（毫秒时间戳）
    * maxDropKbps  攻击流量峰值，单位“kbps”
    * maxDropPps  攻击报文数峰值，单位“pps”
    * maxInKbps  入流量峰值，单位“kbps”
    * maxInPps  入报文数峰值，单位“pps”
    * attackTypes  攻击类型
    * attackIps  攻击源IP
    * attackIpsDesc  攻击IP描述
    * attackStatus  攻击状态
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'zoneIp' => null,
        'startTime' => null,
        'endTime' => null,
        'maxDropKbps' => null,
        'maxDropPps' => null,
        'maxInKbps' => null,
        'maxInPps' => null,
        'attackTypes' => null,
        'attackIps' => null,
        'attackIpsDesc' => null,
        'attackStatus' => null
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
    * zoneIp  防护IP
    * startTime  开始时间（毫秒时间戳）
    * endTime  结束时间（毫秒时间戳）
    * maxDropKbps  攻击流量峰值，单位“kbps”
    * maxDropPps  攻击报文数峰值，单位“pps”
    * maxInKbps  入流量峰值，单位“kbps”
    * maxInPps  入报文数峰值，单位“pps”
    * attackTypes  攻击类型
    * attackIps  攻击源IP
    * attackIpsDesc  攻击IP描述
    * attackStatus  攻击状态
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'zoneIp' => 'zone_ip',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'maxDropKbps' => 'max_drop_kbps',
            'maxDropPps' => 'max_drop_pps',
            'maxInKbps' => 'max_in_kbps',
            'maxInPps' => 'max_in_pps',
            'attackTypes' => 'attack_types',
            'attackIps' => 'attack_ips',
            'attackIpsDesc' => 'attack_ips_desc',
            'attackStatus' => 'attack_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * zoneIp  防护IP
    * startTime  开始时间（毫秒时间戳）
    * endTime  结束时间（毫秒时间戳）
    * maxDropKbps  攻击流量峰值，单位“kbps”
    * maxDropPps  攻击报文数峰值，单位“pps”
    * maxInKbps  入流量峰值，单位“kbps”
    * maxInPps  入报文数峰值，单位“pps”
    * attackTypes  攻击类型
    * attackIps  攻击源IP
    * attackIpsDesc  攻击IP描述
    * attackStatus  攻击状态
    *
    * @var string[]
    */
    protected static $setters = [
            'zoneIp' => 'setZoneIp',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'maxDropKbps' => 'setMaxDropKbps',
            'maxDropPps' => 'setMaxDropPps',
            'maxInKbps' => 'setMaxInKbps',
            'maxInPps' => 'setMaxInPps',
            'attackTypes' => 'setAttackTypes',
            'attackIps' => 'setAttackIps',
            'attackIpsDesc' => 'setAttackIpsDesc',
            'attackStatus' => 'setAttackStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * zoneIp  防护IP
    * startTime  开始时间（毫秒时间戳）
    * endTime  结束时间（毫秒时间戳）
    * maxDropKbps  攻击流量峰值，单位“kbps”
    * maxDropPps  攻击报文数峰值，单位“pps”
    * maxInKbps  入流量峰值，单位“kbps”
    * maxInPps  入报文数峰值，单位“pps”
    * attackTypes  攻击类型
    * attackIps  攻击源IP
    * attackIpsDesc  攻击IP描述
    * attackStatus  攻击状态
    *
    * @var string[]
    */
    protected static $getters = [
            'zoneIp' => 'getZoneIp',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'maxDropKbps' => 'getMaxDropKbps',
            'maxDropPps' => 'getMaxDropPps',
            'maxInKbps' => 'getMaxInKbps',
            'maxInPps' => 'getMaxInPps',
            'attackTypes' => 'getAttackTypes',
            'attackIps' => 'getAttackIps',
            'attackIpsDesc' => 'getAttackIpsDesc',
            'attackStatus' => 'getAttackStatus'
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
        $this->container['zoneIp'] = isset($data['zoneIp']) ? $data['zoneIp'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['maxDropKbps'] = isset($data['maxDropKbps']) ? $data['maxDropKbps'] : null;
        $this->container['maxDropPps'] = isset($data['maxDropPps']) ? $data['maxDropPps'] : null;
        $this->container['maxInKbps'] = isset($data['maxInKbps']) ? $data['maxInKbps'] : null;
        $this->container['maxInPps'] = isset($data['maxInPps']) ? $data['maxInPps'] : null;
        $this->container['attackTypes'] = isset($data['attackTypes']) ? $data['attackTypes'] : null;
        $this->container['attackIps'] = isset($data['attackIps']) ? $data['attackIps'] : null;
        $this->container['attackIpsDesc'] = isset($data['attackIpsDesc']) ? $data['attackIpsDesc'] : null;
        $this->container['attackStatus'] = isset($data['attackStatus']) ? $data['attackStatus'] : null;
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
    * Gets zoneIp
    *  防护IP
    *
    * @return string|null
    */
    public function getZoneIp()
    {
        return $this->container['zoneIp'];
    }

    /**
    * Sets zoneIp
    *
    * @param string|null $zoneIp 防护IP
    *
    * @return $this
    */
    public function setZoneIp($zoneIp)
    {
        $this->container['zoneIp'] = $zoneIp;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间（毫秒时间戳）
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime 开始时间（毫秒时间戳）
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  结束时间（毫秒时间戳）
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime 结束时间（毫秒时间戳）
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets maxDropKbps
    *  攻击流量峰值，单位“kbps”
    *
    * @return string|null
    */
    public function getMaxDropKbps()
    {
        return $this->container['maxDropKbps'];
    }

    /**
    * Sets maxDropKbps
    *
    * @param string|null $maxDropKbps 攻击流量峰值，单位“kbps”
    *
    * @return $this
    */
    public function setMaxDropKbps($maxDropKbps)
    {
        $this->container['maxDropKbps'] = $maxDropKbps;
        return $this;
    }

    /**
    * Gets maxDropPps
    *  攻击报文数峰值，单位“pps”
    *
    * @return string|null
    */
    public function getMaxDropPps()
    {
        return $this->container['maxDropPps'];
    }

    /**
    * Sets maxDropPps
    *
    * @param string|null $maxDropPps 攻击报文数峰值，单位“pps”
    *
    * @return $this
    */
    public function setMaxDropPps($maxDropPps)
    {
        $this->container['maxDropPps'] = $maxDropPps;
        return $this;
    }

    /**
    * Gets maxInKbps
    *  入流量峰值，单位“kbps”
    *
    * @return string|null
    */
    public function getMaxInKbps()
    {
        return $this->container['maxInKbps'];
    }

    /**
    * Sets maxInKbps
    *
    * @param string|null $maxInKbps 入流量峰值，单位“kbps”
    *
    * @return $this
    */
    public function setMaxInKbps($maxInKbps)
    {
        $this->container['maxInKbps'] = $maxInKbps;
        return $this;
    }

    /**
    * Gets maxInPps
    *  入报文数峰值，单位“pps”
    *
    * @return string|null
    */
    public function getMaxInPps()
    {
        return $this->container['maxInPps'];
    }

    /**
    * Sets maxInPps
    *
    * @param string|null $maxInPps 入报文数峰值，单位“pps”
    *
    * @return $this
    */
    public function setMaxInPps($maxInPps)
    {
        $this->container['maxInPps'] = $maxInPps;
        return $this;
    }

    /**
    * Gets attackTypes
    *  攻击类型
    *
    * @return string|null
    */
    public function getAttackTypes()
    {
        return $this->container['attackTypes'];
    }

    /**
    * Sets attackTypes
    *
    * @param string|null $attackTypes 攻击类型
    *
    * @return $this
    */
    public function setAttackTypes($attackTypes)
    {
        $this->container['attackTypes'] = $attackTypes;
        return $this;
    }

    /**
    * Gets attackIps
    *  攻击源IP
    *
    * @return string|null
    */
    public function getAttackIps()
    {
        return $this->container['attackIps'];
    }

    /**
    * Sets attackIps
    *
    * @param string|null $attackIps 攻击源IP
    *
    * @return $this
    */
    public function setAttackIps($attackIps)
    {
        $this->container['attackIps'] = $attackIps;
        return $this;
    }

    /**
    * Gets attackIpsDesc
    *  攻击IP描述
    *
    * @return string|null
    */
    public function getAttackIpsDesc()
    {
        return $this->container['attackIpsDesc'];
    }

    /**
    * Sets attackIpsDesc
    *
    * @param string|null $attackIpsDesc 攻击IP描述
    *
    * @return $this
    */
    public function setAttackIpsDesc($attackIpsDesc)
    {
        $this->container['attackIpsDesc'] = $attackIpsDesc;
        return $this;
    }

    /**
    * Gets attackStatus
    *  攻击状态
    *
    * @return string|null
    */
    public function getAttackStatus()
    {
        return $this->container['attackStatus'];
    }

    /**
    * Sets attackStatus
    *
    * @param string|null $attackStatus 攻击状态
    *
    * @return $this
    */
    public function setAttackStatus($attackStatus)
    {
        $this->container['attackStatus'] = $attackStatus;
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

