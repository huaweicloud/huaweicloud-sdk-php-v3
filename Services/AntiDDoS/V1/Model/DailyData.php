<?php

namespace HuaweiCloud\SDK\AntiDDoS\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DailyData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DailyData';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * periodStart  开始时间
    * bpsIn  入流量（bit/s）
    * bpsAttack  攻击流量（bit/s）
    * totalBps  总流量
    * ppsIn  入报文速率（个/s）
    * ppsAttack  攻击文速率（个/s）
    * totalPps  总报文速率
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'periodStart' => 'int',
            'bpsIn' => 'int',
            'bpsAttack' => 'int',
            'totalBps' => 'int',
            'ppsIn' => 'int',
            'ppsAttack' => 'int',
            'totalPps' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * periodStart  开始时间
    * bpsIn  入流量（bit/s）
    * bpsAttack  攻击流量（bit/s）
    * totalBps  总流量
    * ppsIn  入报文速率（个/s）
    * ppsAttack  攻击文速率（个/s）
    * totalPps  总报文速率
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'periodStart' => 'int64',
        'bpsIn' => 'int32',
        'bpsAttack' => 'int64',
        'totalBps' => 'int64',
        'ppsIn' => 'int64',
        'ppsAttack' => 'int64',
        'totalPps' => 'int64'
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
    * periodStart  开始时间
    * bpsIn  入流量（bit/s）
    * bpsAttack  攻击流量（bit/s）
    * totalBps  总流量
    * ppsIn  入报文速率（个/s）
    * ppsAttack  攻击文速率（个/s）
    * totalPps  总报文速率
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'periodStart' => 'period_start',
            'bpsIn' => 'bps_in',
            'bpsAttack' => 'bps_attack',
            'totalBps' => 'total_bps',
            'ppsIn' => 'pps_in',
            'ppsAttack' => 'pps_attack',
            'totalPps' => 'total_pps'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * periodStart  开始时间
    * bpsIn  入流量（bit/s）
    * bpsAttack  攻击流量（bit/s）
    * totalBps  总流量
    * ppsIn  入报文速率（个/s）
    * ppsAttack  攻击文速率（个/s）
    * totalPps  总报文速率
    *
    * @var string[]
    */
    protected static $setters = [
            'periodStart' => 'setPeriodStart',
            'bpsIn' => 'setBpsIn',
            'bpsAttack' => 'setBpsAttack',
            'totalBps' => 'setTotalBps',
            'ppsIn' => 'setPpsIn',
            'ppsAttack' => 'setPpsAttack',
            'totalPps' => 'setTotalPps'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * periodStart  开始时间
    * bpsIn  入流量（bit/s）
    * bpsAttack  攻击流量（bit/s）
    * totalBps  总流量
    * ppsIn  入报文速率（个/s）
    * ppsAttack  攻击文速率（个/s）
    * totalPps  总报文速率
    *
    * @var string[]
    */
    protected static $getters = [
            'periodStart' => 'getPeriodStart',
            'bpsIn' => 'getBpsIn',
            'bpsAttack' => 'getBpsAttack',
            'totalBps' => 'getTotalBps',
            'ppsIn' => 'getPpsIn',
            'ppsAttack' => 'getPpsAttack',
            'totalPps' => 'getTotalPps'
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
        $this->container['periodStart'] = isset($data['periodStart']) ? $data['periodStart'] : null;
        $this->container['bpsIn'] = isset($data['bpsIn']) ? $data['bpsIn'] : null;
        $this->container['bpsAttack'] = isset($data['bpsAttack']) ? $data['bpsAttack'] : null;
        $this->container['totalBps'] = isset($data['totalBps']) ? $data['totalBps'] : null;
        $this->container['ppsIn'] = isset($data['ppsIn']) ? $data['ppsIn'] : null;
        $this->container['ppsAttack'] = isset($data['ppsAttack']) ? $data['ppsAttack'] : null;
        $this->container['totalPps'] = isset($data['totalPps']) ? $data['totalPps'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['periodStart'] === null) {
            $invalidProperties[] = "'periodStart' can't be null";
        }
        if ($this->container['bpsIn'] === null) {
            $invalidProperties[] = "'bpsIn' can't be null";
        }
        if ($this->container['bpsAttack'] === null) {
            $invalidProperties[] = "'bpsAttack' can't be null";
        }
        if ($this->container['totalBps'] === null) {
            $invalidProperties[] = "'totalBps' can't be null";
        }
        if ($this->container['ppsIn'] === null) {
            $invalidProperties[] = "'ppsIn' can't be null";
        }
        if ($this->container['ppsAttack'] === null) {
            $invalidProperties[] = "'ppsAttack' can't be null";
        }
        if ($this->container['totalPps'] === null) {
            $invalidProperties[] = "'totalPps' can't be null";
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
    * Gets periodStart
    *  开始时间
    *
    * @return int
    */
    public function getPeriodStart()
    {
        return $this->container['periodStart'];
    }

    /**
    * Sets periodStart
    *
    * @param int $periodStart 开始时间
    *
    * @return $this
    */
    public function setPeriodStart($periodStart)
    {
        $this->container['periodStart'] = $periodStart;
        return $this;
    }

    /**
    * Gets bpsIn
    *  入流量（bit/s）
    *
    * @return int
    */
    public function getBpsIn()
    {
        return $this->container['bpsIn'];
    }

    /**
    * Sets bpsIn
    *
    * @param int $bpsIn 入流量（bit/s）
    *
    * @return $this
    */
    public function setBpsIn($bpsIn)
    {
        $this->container['bpsIn'] = $bpsIn;
        return $this;
    }

    /**
    * Gets bpsAttack
    *  攻击流量（bit/s）
    *
    * @return int
    */
    public function getBpsAttack()
    {
        return $this->container['bpsAttack'];
    }

    /**
    * Sets bpsAttack
    *
    * @param int $bpsAttack 攻击流量（bit/s）
    *
    * @return $this
    */
    public function setBpsAttack($bpsAttack)
    {
        $this->container['bpsAttack'] = $bpsAttack;
        return $this;
    }

    /**
    * Gets totalBps
    *  总流量
    *
    * @return int
    */
    public function getTotalBps()
    {
        return $this->container['totalBps'];
    }

    /**
    * Sets totalBps
    *
    * @param int $totalBps 总流量
    *
    * @return $this
    */
    public function setTotalBps($totalBps)
    {
        $this->container['totalBps'] = $totalBps;
        return $this;
    }

    /**
    * Gets ppsIn
    *  入报文速率（个/s）
    *
    * @return int
    */
    public function getPpsIn()
    {
        return $this->container['ppsIn'];
    }

    /**
    * Sets ppsIn
    *
    * @param int $ppsIn 入报文速率（个/s）
    *
    * @return $this
    */
    public function setPpsIn($ppsIn)
    {
        $this->container['ppsIn'] = $ppsIn;
        return $this;
    }

    /**
    * Gets ppsAttack
    *  攻击文速率（个/s）
    *
    * @return int
    */
    public function getPpsAttack()
    {
        return $this->container['ppsAttack'];
    }

    /**
    * Sets ppsAttack
    *
    * @param int $ppsAttack 攻击文速率（个/s）
    *
    * @return $this
    */
    public function setPpsAttack($ppsAttack)
    {
        $this->container['ppsAttack'] = $ppsAttack;
        return $this;
    }

    /**
    * Gets totalPps
    *  总报文速率
    *
    * @return int
    */
    public function getTotalPps()
    {
        return $this->container['totalPps'];
    }

    /**
    * Sets totalPps
    *
    * @param int $totalPps 总报文速率
    *
    * @return $this
    */
    public function setTotalPps($totalPps)
    {
        $this->container['totalPps'] = $totalPps;
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

