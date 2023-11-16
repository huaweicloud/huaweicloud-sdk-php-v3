<?php

namespace HuaweiCloud\SDK\Aad\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListPeakResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListPeakResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * attackKbpsPeak  攻击峰值
    * inKbpsPeak  流量峰值
    * ddosCount  攻击次数
    * timestamp  攻击峰值发生时间点
    * vip  高防IP
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'attackKbpsPeak' => 'float',
            'inKbpsPeak' => 'float',
            'ddosCount' => 'float',
            'timestamp' => 'float',
            'vip' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * attackKbpsPeak  攻击峰值
    * inKbpsPeak  流量峰值
    * ddosCount  攻击次数
    * timestamp  攻击峰值发生时间点
    * vip  高防IP
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'attackKbpsPeak' => null,
        'inKbpsPeak' => null,
        'ddosCount' => null,
        'timestamp' => null,
        'vip' => null
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
    * attackKbpsPeak  攻击峰值
    * inKbpsPeak  流量峰值
    * ddosCount  攻击次数
    * timestamp  攻击峰值发生时间点
    * vip  高防IP
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'attackKbpsPeak' => 'attack_kbps_peak',
            'inKbpsPeak' => 'in_kbps_peak',
            'ddosCount' => 'ddos_count',
            'timestamp' => 'timestamp',
            'vip' => 'vip'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * attackKbpsPeak  攻击峰值
    * inKbpsPeak  流量峰值
    * ddosCount  攻击次数
    * timestamp  攻击峰值发生时间点
    * vip  高防IP
    *
    * @var string[]
    */
    protected static $setters = [
            'attackKbpsPeak' => 'setAttackKbpsPeak',
            'inKbpsPeak' => 'setInKbpsPeak',
            'ddosCount' => 'setDdosCount',
            'timestamp' => 'setTimestamp',
            'vip' => 'setVip'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * attackKbpsPeak  攻击峰值
    * inKbpsPeak  流量峰值
    * ddosCount  攻击次数
    * timestamp  攻击峰值发生时间点
    * vip  高防IP
    *
    * @var string[]
    */
    protected static $getters = [
            'attackKbpsPeak' => 'getAttackKbpsPeak',
            'inKbpsPeak' => 'getInKbpsPeak',
            'ddosCount' => 'getDdosCount',
            'timestamp' => 'getTimestamp',
            'vip' => 'getVip'
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
        $this->container['attackKbpsPeak'] = isset($data['attackKbpsPeak']) ? $data['attackKbpsPeak'] : null;
        $this->container['inKbpsPeak'] = isset($data['inKbpsPeak']) ? $data['inKbpsPeak'] : null;
        $this->container['ddosCount'] = isset($data['ddosCount']) ? $data['ddosCount'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['vip'] = isset($data['vip']) ? $data['vip'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['attackKbpsPeak']) && ($this->container['attackKbpsPeak'] > 1E+8)) {
                $invalidProperties[] = "invalid value for 'attackKbpsPeak', must be smaller than or equal to 1E+8.";
            }
            if (!is_null($this->container['attackKbpsPeak']) && ($this->container['attackKbpsPeak'] < 0)) {
                $invalidProperties[] = "invalid value for 'attackKbpsPeak', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['inKbpsPeak']) && ($this->container['inKbpsPeak'] > 1E+8)) {
                $invalidProperties[] = "invalid value for 'inKbpsPeak', must be smaller than or equal to 1E+8.";
            }
            if (!is_null($this->container['inKbpsPeak']) && ($this->container['inKbpsPeak'] < 0)) {
                $invalidProperties[] = "invalid value for 'inKbpsPeak', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ddosCount']) && ($this->container['ddosCount'] > 1E+8)) {
                $invalidProperties[] = "invalid value for 'ddosCount', must be smaller than or equal to 1E+8.";
            }
            if (!is_null($this->container['ddosCount']) && ($this->container['ddosCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'ddosCount', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['timestamp']) && ($this->container['timestamp'] > 4.8038112E+12)) {
                $invalidProperties[] = "invalid value for 'timestamp', must be smaller than or equal to 4.8038112E+12.";
            }
            if (!is_null($this->container['timestamp']) && ($this->container['timestamp'] < 0)) {
                $invalidProperties[] = "invalid value for 'timestamp', must be bigger than or equal to 0.";
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
    * Gets attackKbpsPeak
    *  攻击峰值
    *
    * @return float|null
    */
    public function getAttackKbpsPeak()
    {
        return $this->container['attackKbpsPeak'];
    }

    /**
    * Sets attackKbpsPeak
    *
    * @param float|null $attackKbpsPeak 攻击峰值
    *
    * @return $this
    */
    public function setAttackKbpsPeak($attackKbpsPeak)
    {
        $this->container['attackKbpsPeak'] = $attackKbpsPeak;
        return $this;
    }

    /**
    * Gets inKbpsPeak
    *  流量峰值
    *
    * @return float|null
    */
    public function getInKbpsPeak()
    {
        return $this->container['inKbpsPeak'];
    }

    /**
    * Sets inKbpsPeak
    *
    * @param float|null $inKbpsPeak 流量峰值
    *
    * @return $this
    */
    public function setInKbpsPeak($inKbpsPeak)
    {
        $this->container['inKbpsPeak'] = $inKbpsPeak;
        return $this;
    }

    /**
    * Gets ddosCount
    *  攻击次数
    *
    * @return float|null
    */
    public function getDdosCount()
    {
        return $this->container['ddosCount'];
    }

    /**
    * Sets ddosCount
    *
    * @param float|null $ddosCount 攻击次数
    *
    * @return $this
    */
    public function setDdosCount($ddosCount)
    {
        $this->container['ddosCount'] = $ddosCount;
        return $this;
    }

    /**
    * Gets timestamp
    *  攻击峰值发生时间点
    *
    * @return float|null
    */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
    * Sets timestamp
    *
    * @param float|null $timestamp 攻击峰值发生时间点
    *
    * @return $this
    */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;
        return $this;
    }

    /**
    * Gets vip
    *  高防IP
    *
    * @return string|null
    */
    public function getVip()
    {
        return $this->container['vip'];
    }

    /**
    * Sets vip
    *
    * @param string|null $vip 高防IP
    *
    * @return $this
    */
    public function setVip($vip)
    {
        $this->container['vip'] = $vip;
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

