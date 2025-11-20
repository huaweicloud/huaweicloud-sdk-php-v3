<?php

namespace HuaweiCloud\SDK\Aad\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDDoSPeakResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDDoSPeakResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * attackKbytesTotal  攻击流量
    * attackPpsPeak  攻击流量峰值包速率
    * inPpsPeak  入流量峰值包速率
    * attackBpsPeak  攻击流量峰值
    * inBpsPeak  入流量峰值
    * ddosCount  攻击数量
    * utime  峰值时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'attackKbytesTotal' => 'int',
            'attackPpsPeak' => 'int',
            'inPpsPeak' => 'int',
            'attackBpsPeak' => 'int',
            'inBpsPeak' => 'int',
            'ddosCount' => 'int',
            'utime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * attackKbytesTotal  攻击流量
    * attackPpsPeak  攻击流量峰值包速率
    * inPpsPeak  入流量峰值包速率
    * attackBpsPeak  攻击流量峰值
    * inBpsPeak  入流量峰值
    * ddosCount  攻击数量
    * utime  峰值时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'attackKbytesTotal' => 'int32',
        'attackPpsPeak' => 'int32',
        'inPpsPeak' => 'int32',
        'attackBpsPeak' => 'int32',
        'inBpsPeak' => 'int32',
        'ddosCount' => 'int32',
        'utime' => 'int32'
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
    * attackKbytesTotal  攻击流量
    * attackPpsPeak  攻击流量峰值包速率
    * inPpsPeak  入流量峰值包速率
    * attackBpsPeak  攻击流量峰值
    * inBpsPeak  入流量峰值
    * ddosCount  攻击数量
    * utime  峰值时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'attackKbytesTotal' => 'attack_kbytes_total',
            'attackPpsPeak' => 'attack_pps_peak',
            'inPpsPeak' => 'in_pps_peak',
            'attackBpsPeak' => 'attack_bps_peak',
            'inBpsPeak' => 'in_bps_peak',
            'ddosCount' => 'ddos_count',
            'utime' => 'utime'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * attackKbytesTotal  攻击流量
    * attackPpsPeak  攻击流量峰值包速率
    * inPpsPeak  入流量峰值包速率
    * attackBpsPeak  攻击流量峰值
    * inBpsPeak  入流量峰值
    * ddosCount  攻击数量
    * utime  峰值时间
    *
    * @var string[]
    */
    protected static $setters = [
            'attackKbytesTotal' => 'setAttackKbytesTotal',
            'attackPpsPeak' => 'setAttackPpsPeak',
            'inPpsPeak' => 'setInPpsPeak',
            'attackBpsPeak' => 'setAttackBpsPeak',
            'inBpsPeak' => 'setInBpsPeak',
            'ddosCount' => 'setDdosCount',
            'utime' => 'setUtime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * attackKbytesTotal  攻击流量
    * attackPpsPeak  攻击流量峰值包速率
    * inPpsPeak  入流量峰值包速率
    * attackBpsPeak  攻击流量峰值
    * inBpsPeak  入流量峰值
    * ddosCount  攻击数量
    * utime  峰值时间
    *
    * @var string[]
    */
    protected static $getters = [
            'attackKbytesTotal' => 'getAttackKbytesTotal',
            'attackPpsPeak' => 'getAttackPpsPeak',
            'inPpsPeak' => 'getInPpsPeak',
            'attackBpsPeak' => 'getAttackBpsPeak',
            'inBpsPeak' => 'getInBpsPeak',
            'ddosCount' => 'getDdosCount',
            'utime' => 'getUtime'
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
        $this->container['attackKbytesTotal'] = isset($data['attackKbytesTotal']) ? $data['attackKbytesTotal'] : null;
        $this->container['attackPpsPeak'] = isset($data['attackPpsPeak']) ? $data['attackPpsPeak'] : null;
        $this->container['inPpsPeak'] = isset($data['inPpsPeak']) ? $data['inPpsPeak'] : null;
        $this->container['attackBpsPeak'] = isset($data['attackBpsPeak']) ? $data['attackBpsPeak'] : null;
        $this->container['inBpsPeak'] = isset($data['inBpsPeak']) ? $data['inBpsPeak'] : null;
        $this->container['ddosCount'] = isset($data['ddosCount']) ? $data['ddosCount'] : null;
        $this->container['utime'] = isset($data['utime']) ? $data['utime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['attackKbytesTotal']) && ($this->container['attackKbytesTotal'] > 2000)) {
                $invalidProperties[] = "invalid value for 'attackKbytesTotal', must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['attackKbytesTotal']) && ($this->container['attackKbytesTotal'] < 0)) {
                $invalidProperties[] = "invalid value for 'attackKbytesTotal', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['attackPpsPeak']) && ($this->container['attackPpsPeak'] > 2000)) {
                $invalidProperties[] = "invalid value for 'attackPpsPeak', must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['attackPpsPeak']) && ($this->container['attackPpsPeak'] < 0)) {
                $invalidProperties[] = "invalid value for 'attackPpsPeak', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['inPpsPeak']) && ($this->container['inPpsPeak'] > 2000)) {
                $invalidProperties[] = "invalid value for 'inPpsPeak', must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['inPpsPeak']) && ($this->container['inPpsPeak'] < 0)) {
                $invalidProperties[] = "invalid value for 'inPpsPeak', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['attackBpsPeak']) && ($this->container['attackBpsPeak'] > 2000)) {
                $invalidProperties[] = "invalid value for 'attackBpsPeak', must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['attackBpsPeak']) && ($this->container['attackBpsPeak'] < 0)) {
                $invalidProperties[] = "invalid value for 'attackBpsPeak', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['inBpsPeak']) && ($this->container['inBpsPeak'] > 2000)) {
                $invalidProperties[] = "invalid value for 'inBpsPeak', must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['inBpsPeak']) && ($this->container['inBpsPeak'] < 0)) {
                $invalidProperties[] = "invalid value for 'inBpsPeak', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ddosCount']) && ($this->container['ddosCount'] > 2000)) {
                $invalidProperties[] = "invalid value for 'ddosCount', must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['ddosCount']) && ($this->container['ddosCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'ddosCount', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['utime']) && ($this->container['utime'] > 2000)) {
                $invalidProperties[] = "invalid value for 'utime', must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['utime']) && ($this->container['utime'] < 0)) {
                $invalidProperties[] = "invalid value for 'utime', must be bigger than or equal to 0.";
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
    * Gets attackKbytesTotal
    *  攻击流量
    *
    * @return int|null
    */
    public function getAttackKbytesTotal()
    {
        return $this->container['attackKbytesTotal'];
    }

    /**
    * Sets attackKbytesTotal
    *
    * @param int|null $attackKbytesTotal 攻击流量
    *
    * @return $this
    */
    public function setAttackKbytesTotal($attackKbytesTotal)
    {
        $this->container['attackKbytesTotal'] = $attackKbytesTotal;
        return $this;
    }

    /**
    * Gets attackPpsPeak
    *  攻击流量峰值包速率
    *
    * @return int|null
    */
    public function getAttackPpsPeak()
    {
        return $this->container['attackPpsPeak'];
    }

    /**
    * Sets attackPpsPeak
    *
    * @param int|null $attackPpsPeak 攻击流量峰值包速率
    *
    * @return $this
    */
    public function setAttackPpsPeak($attackPpsPeak)
    {
        $this->container['attackPpsPeak'] = $attackPpsPeak;
        return $this;
    }

    /**
    * Gets inPpsPeak
    *  入流量峰值包速率
    *
    * @return int|null
    */
    public function getInPpsPeak()
    {
        return $this->container['inPpsPeak'];
    }

    /**
    * Sets inPpsPeak
    *
    * @param int|null $inPpsPeak 入流量峰值包速率
    *
    * @return $this
    */
    public function setInPpsPeak($inPpsPeak)
    {
        $this->container['inPpsPeak'] = $inPpsPeak;
        return $this;
    }

    /**
    * Gets attackBpsPeak
    *  攻击流量峰值
    *
    * @return int|null
    */
    public function getAttackBpsPeak()
    {
        return $this->container['attackBpsPeak'];
    }

    /**
    * Sets attackBpsPeak
    *
    * @param int|null $attackBpsPeak 攻击流量峰值
    *
    * @return $this
    */
    public function setAttackBpsPeak($attackBpsPeak)
    {
        $this->container['attackBpsPeak'] = $attackBpsPeak;
        return $this;
    }

    /**
    * Gets inBpsPeak
    *  入流量峰值
    *
    * @return int|null
    */
    public function getInBpsPeak()
    {
        return $this->container['inBpsPeak'];
    }

    /**
    * Sets inBpsPeak
    *
    * @param int|null $inBpsPeak 入流量峰值
    *
    * @return $this
    */
    public function setInBpsPeak($inBpsPeak)
    {
        $this->container['inBpsPeak'] = $inBpsPeak;
        return $this;
    }

    /**
    * Gets ddosCount
    *  攻击数量
    *
    * @return int|null
    */
    public function getDdosCount()
    {
        return $this->container['ddosCount'];
    }

    /**
    * Sets ddosCount
    *
    * @param int|null $ddosCount 攻击数量
    *
    * @return $this
    */
    public function setDdosCount($ddosCount)
    {
        $this->container['ddosCount'] = $ddosCount;
        return $this;
    }

    /**
    * Gets utime
    *  峰值时间
    *
    * @return int|null
    */
    public function getUtime()
    {
        return $this->container['utime'];
    }

    /**
    * Sets utime
    *
    * @param int|null $utime 峰值时间
    *
    * @return $this
    */
    public function setUtime($utime)
    {
        $this->container['utime'] = $utime;
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

