<?php

namespace HuaweiCloud\SDK\AntiDDoS\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WeeklyCount implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WeeklyCount';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ddosInterceptTimes  DDoS拦截次数
    * ddosBlackholeTimes  DDoS黑洞次数
    * maxAttackBps  最大攻击流量
    * maxAttackConns  最大攻击连接数
    * periodStartDate  开始时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ddosInterceptTimes' => 'int',
            'ddosBlackholeTimes' => 'int',
            'maxAttackBps' => 'int',
            'maxAttackConns' => 'int',
            'periodStartDate' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ddosInterceptTimes  DDoS拦截次数
    * ddosBlackholeTimes  DDoS黑洞次数
    * maxAttackBps  最大攻击流量
    * maxAttackConns  最大攻击连接数
    * periodStartDate  开始时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ddosInterceptTimes' => 'int32',
        'ddosBlackholeTimes' => 'int32',
        'maxAttackBps' => 'int32',
        'maxAttackConns' => 'int32',
        'periodStartDate' => 'int64'
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
    * ddosInterceptTimes  DDoS拦截次数
    * ddosBlackholeTimes  DDoS黑洞次数
    * maxAttackBps  最大攻击流量
    * maxAttackConns  最大攻击连接数
    * periodStartDate  开始时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ddosInterceptTimes' => 'ddos_intercept_times',
            'ddosBlackholeTimes' => 'ddos_blackhole_times',
            'maxAttackBps' => 'max_attack_bps',
            'maxAttackConns' => 'max_attack_conns',
            'periodStartDate' => 'period_start_date'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ddosInterceptTimes  DDoS拦截次数
    * ddosBlackholeTimes  DDoS黑洞次数
    * maxAttackBps  最大攻击流量
    * maxAttackConns  最大攻击连接数
    * periodStartDate  开始时间
    *
    * @var string[]
    */
    protected static $setters = [
            'ddosInterceptTimes' => 'setDdosInterceptTimes',
            'ddosBlackholeTimes' => 'setDdosBlackholeTimes',
            'maxAttackBps' => 'setMaxAttackBps',
            'maxAttackConns' => 'setMaxAttackConns',
            'periodStartDate' => 'setPeriodStartDate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ddosInterceptTimes  DDoS拦截次数
    * ddosBlackholeTimes  DDoS黑洞次数
    * maxAttackBps  最大攻击流量
    * maxAttackConns  最大攻击连接数
    * periodStartDate  开始时间
    *
    * @var string[]
    */
    protected static $getters = [
            'ddosInterceptTimes' => 'getDdosInterceptTimes',
            'ddosBlackholeTimes' => 'getDdosBlackholeTimes',
            'maxAttackBps' => 'getMaxAttackBps',
            'maxAttackConns' => 'getMaxAttackConns',
            'periodStartDate' => 'getPeriodStartDate'
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
        $this->container['ddosInterceptTimes'] = isset($data['ddosInterceptTimes']) ? $data['ddosInterceptTimes'] : null;
        $this->container['ddosBlackholeTimes'] = isset($data['ddosBlackholeTimes']) ? $data['ddosBlackholeTimes'] : null;
        $this->container['maxAttackBps'] = isset($data['maxAttackBps']) ? $data['maxAttackBps'] : null;
        $this->container['maxAttackConns'] = isset($data['maxAttackConns']) ? $data['maxAttackConns'] : null;
        $this->container['periodStartDate'] = isset($data['periodStartDate']) ? $data['periodStartDate'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['ddosInterceptTimes'] === null) {
            $invalidProperties[] = "'ddosInterceptTimes' can't be null";
        }
            if (($this->container['ddosInterceptTimes'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'ddosInterceptTimes', must be smaller than or equal to 2147483647.";
            }
            if (($this->container['ddosInterceptTimes'] < 0)) {
                $invalidProperties[] = "invalid value for 'ddosInterceptTimes', must be bigger than or equal to 0.";
            }
        if ($this->container['ddosBlackholeTimes'] === null) {
            $invalidProperties[] = "'ddosBlackholeTimes' can't be null";
        }
            if (($this->container['ddosBlackholeTimes'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'ddosBlackholeTimes', must be smaller than or equal to 2147483647.";
            }
            if (($this->container['ddosBlackholeTimes'] < 0)) {
                $invalidProperties[] = "invalid value for 'ddosBlackholeTimes', must be bigger than or equal to 0.";
            }
        if ($this->container['maxAttackBps'] === null) {
            $invalidProperties[] = "'maxAttackBps' can't be null";
        }
            if (($this->container['maxAttackBps'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'maxAttackBps', must be smaller than or equal to 2147483647.";
            }
            if (($this->container['maxAttackBps'] < 0)) {
                $invalidProperties[] = "invalid value for 'maxAttackBps', must be bigger than or equal to 0.";
            }
        if ($this->container['maxAttackConns'] === null) {
            $invalidProperties[] = "'maxAttackConns' can't be null";
        }
            if (($this->container['maxAttackConns'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'maxAttackConns', must be smaller than or equal to 2147483647.";
            }
            if (($this->container['maxAttackConns'] < 0)) {
                $invalidProperties[] = "invalid value for 'maxAttackConns', must be bigger than or equal to 0.";
            }
        if ($this->container['periodStartDate'] === null) {
            $invalidProperties[] = "'periodStartDate' can't be null";
        }
            if (($this->container['periodStartDate'] > 999999999)) {
                $invalidProperties[] = "invalid value for 'periodStartDate', must be smaller than or equal to 999999999.";
            }
            if (($this->container['periodStartDate'] < 0)) {
                $invalidProperties[] = "invalid value for 'periodStartDate', must be bigger than or equal to 0.";
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
    * Gets ddosInterceptTimes
    *  DDoS拦截次数
    *
    * @return int
    */
    public function getDdosInterceptTimes()
    {
        return $this->container['ddosInterceptTimes'];
    }

    /**
    * Sets ddosInterceptTimes
    *
    * @param int $ddosInterceptTimes DDoS拦截次数
    *
    * @return $this
    */
    public function setDdosInterceptTimes($ddosInterceptTimes)
    {
        $this->container['ddosInterceptTimes'] = $ddosInterceptTimes;
        return $this;
    }

    /**
    * Gets ddosBlackholeTimes
    *  DDoS黑洞次数
    *
    * @return int
    */
    public function getDdosBlackholeTimes()
    {
        return $this->container['ddosBlackholeTimes'];
    }

    /**
    * Sets ddosBlackholeTimes
    *
    * @param int $ddosBlackholeTimes DDoS黑洞次数
    *
    * @return $this
    */
    public function setDdosBlackholeTimes($ddosBlackholeTimes)
    {
        $this->container['ddosBlackholeTimes'] = $ddosBlackholeTimes;
        return $this;
    }

    /**
    * Gets maxAttackBps
    *  最大攻击流量
    *
    * @return int
    */
    public function getMaxAttackBps()
    {
        return $this->container['maxAttackBps'];
    }

    /**
    * Sets maxAttackBps
    *
    * @param int $maxAttackBps 最大攻击流量
    *
    * @return $this
    */
    public function setMaxAttackBps($maxAttackBps)
    {
        $this->container['maxAttackBps'] = $maxAttackBps;
        return $this;
    }

    /**
    * Gets maxAttackConns
    *  最大攻击连接数
    *
    * @return int
    */
    public function getMaxAttackConns()
    {
        return $this->container['maxAttackConns'];
    }

    /**
    * Sets maxAttackConns
    *
    * @param int $maxAttackConns 最大攻击连接数
    *
    * @return $this
    */
    public function setMaxAttackConns($maxAttackConns)
    {
        $this->container['maxAttackConns'] = $maxAttackConns;
        return $this;
    }

    /**
    * Gets periodStartDate
    *  开始时间
    *
    * @return int
    */
    public function getPeriodStartDate()
    {
        return $this->container['periodStartDate'];
    }

    /**
    * Sets periodStartDate
    *
    * @param int $periodStartDate 开始时间
    *
    * @return $this
    */
    public function setPeriodStartDate($periodStartDate)
    {
        $this->container['periodStartDate'] = $periodStartDate;
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

