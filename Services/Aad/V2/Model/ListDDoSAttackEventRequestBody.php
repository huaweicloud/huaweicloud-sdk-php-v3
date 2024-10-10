<?php

namespace HuaweiCloud\SDK\Aad\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListDDoSAttackEventRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListDDoSAttackEventRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * startTime  开始时间（毫秒时间戳）
    * endTime  结束时间（毫秒时间戳）
    * offset  偏移量
    * limit  限制条数，范围1-100
    * ip  高防ip
    * attackFlowLow  攻击流量最小值
    * attackFlowUp  攻击流量最大值
    * attackStatus  攻击状态：attack-攻击; normal-结束攻击
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'startTime' => 'string',
            'endTime' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'ip' => 'string',
            'attackFlowLow' => 'string',
            'attackFlowUp' => 'string',
            'attackStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * startTime  开始时间（毫秒时间戳）
    * endTime  结束时间（毫秒时间戳）
    * offset  偏移量
    * limit  限制条数，范围1-100
    * ip  高防ip
    * attackFlowLow  攻击流量最小值
    * attackFlowUp  攻击流量最大值
    * attackStatus  攻击状态：attack-攻击; normal-结束攻击
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'startTime' => null,
        'endTime' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'ip' => null,
        'attackFlowLow' => null,
        'attackFlowUp' => null,
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
    * startTime  开始时间（毫秒时间戳）
    * endTime  结束时间（毫秒时间戳）
    * offset  偏移量
    * limit  限制条数，范围1-100
    * ip  高防ip
    * attackFlowLow  攻击流量最小值
    * attackFlowUp  攻击流量最大值
    * attackStatus  攻击状态：attack-攻击; normal-结束攻击
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'offset' => 'offset',
            'limit' => 'limit',
            'ip' => 'ip',
            'attackFlowLow' => 'attack_flow_low',
            'attackFlowUp' => 'attack_flow_up',
            'attackStatus' => 'attack_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * startTime  开始时间（毫秒时间戳）
    * endTime  结束时间（毫秒时间戳）
    * offset  偏移量
    * limit  限制条数，范围1-100
    * ip  高防ip
    * attackFlowLow  攻击流量最小值
    * attackFlowUp  攻击流量最大值
    * attackStatus  攻击状态：attack-攻击; normal-结束攻击
    *
    * @var string[]
    */
    protected static $setters = [
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'ip' => 'setIp',
            'attackFlowLow' => 'setAttackFlowLow',
            'attackFlowUp' => 'setAttackFlowUp',
            'attackStatus' => 'setAttackStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * startTime  开始时间（毫秒时间戳）
    * endTime  结束时间（毫秒时间戳）
    * offset  偏移量
    * limit  限制条数，范围1-100
    * ip  高防ip
    * attackFlowLow  攻击流量最小值
    * attackFlowUp  攻击流量最大值
    * attackStatus  攻击状态：attack-攻击; normal-结束攻击
    *
    * @var string[]
    */
    protected static $getters = [
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'ip' => 'getIp',
            'attackFlowLow' => 'getAttackFlowLow',
            'attackFlowUp' => 'getAttackFlowUp',
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
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['attackFlowLow'] = isset($data['attackFlowLow']) ? $data['attackFlowLow'] : null;
        $this->container['attackFlowUp'] = isset($data['attackFlowUp']) ? $data['attackFlowUp'] : null;
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
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
        }
        if ($this->container['offset'] === null) {
            $invalidProperties[] = "'offset' can't be null";
        }
        if ($this->container['limit'] === null) {
            $invalidProperties[] = "'limit' can't be null";
        }
        if ($this->container['ip'] === null) {
            $invalidProperties[] = "'ip' can't be null";
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
    * Gets startTime
    *  开始时间（毫秒时间戳）
    *
    * @return string
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string $startTime 开始时间（毫秒时间戳）
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
    * @return string
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string $endTime 结束时间（毫秒时间戳）
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量
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
    * @param int $offset 偏移量
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
    *  限制条数，范围1-100
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
    * @param int $limit 限制条数，范围1-100
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets ip
    *  高防ip
    *
    * @return string
    */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
    * Sets ip
    *
    * @param string $ip 高防ip
    *
    * @return $this
    */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;
        return $this;
    }

    /**
    * Gets attackFlowLow
    *  攻击流量最小值
    *
    * @return string|null
    */
    public function getAttackFlowLow()
    {
        return $this->container['attackFlowLow'];
    }

    /**
    * Sets attackFlowLow
    *
    * @param string|null $attackFlowLow 攻击流量最小值
    *
    * @return $this
    */
    public function setAttackFlowLow($attackFlowLow)
    {
        $this->container['attackFlowLow'] = $attackFlowLow;
        return $this;
    }

    /**
    * Gets attackFlowUp
    *  攻击流量最大值
    *
    * @return string|null
    */
    public function getAttackFlowUp()
    {
        return $this->container['attackFlowUp'];
    }

    /**
    * Sets attackFlowUp
    *
    * @param string|null $attackFlowUp 攻击流量最大值
    *
    * @return $this
    */
    public function setAttackFlowUp($attackFlowUp)
    {
        $this->container['attackFlowUp'] = $attackFlowUp;
        return $this;
    }

    /**
    * Gets attackStatus
    *  攻击状态：attack-攻击; normal-结束攻击
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
    * @param string|null $attackStatus 攻击状态：attack-攻击; normal-结束攻击
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

