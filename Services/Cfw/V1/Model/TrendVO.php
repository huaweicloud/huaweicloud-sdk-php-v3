<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TrendVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TrendVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * aggTime  **参数解释**： 聚合时间 **取值范围**： 不涉及
    * bps  **参数解释**： 带宽 **取值范围**： 不涉及
    * deny  **参数解释**： 阻断数量 **取值范围**： 不涉及
    * inBps  **参数解释**： 入方向bps **取值范围**： 不涉及
    * outBps  **参数解释**： 出方向bps **取值范围**： 不涉及
    * permit  **参数解释**： 允许数量 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'aggTime' => 'int',
            'bps' => 'double',
            'deny' => 'int',
            'inBps' => 'double',
            'outBps' => 'double',
            'permit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * aggTime  **参数解释**： 聚合时间 **取值范围**： 不涉及
    * bps  **参数解释**： 带宽 **取值范围**： 不涉及
    * deny  **参数解释**： 阻断数量 **取值范围**： 不涉及
    * inBps  **参数解释**： 入方向bps **取值范围**： 不涉及
    * outBps  **参数解释**： 出方向bps **取值范围**： 不涉及
    * permit  **参数解释**： 允许数量 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'aggTime' => 'int64',
        'bps' => 'double',
        'deny' => 'int64',
        'inBps' => 'double',
        'outBps' => 'double',
        'permit' => 'int64'
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
    * aggTime  **参数解释**： 聚合时间 **取值范围**： 不涉及
    * bps  **参数解释**： 带宽 **取值范围**： 不涉及
    * deny  **参数解释**： 阻断数量 **取值范围**： 不涉及
    * inBps  **参数解释**： 入方向bps **取值范围**： 不涉及
    * outBps  **参数解释**： 出方向bps **取值范围**： 不涉及
    * permit  **参数解释**： 允许数量 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'aggTime' => 'agg_time',
            'bps' => 'bps',
            'deny' => 'deny',
            'inBps' => 'in_bps',
            'outBps' => 'out_bps',
            'permit' => 'permit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * aggTime  **参数解释**： 聚合时间 **取值范围**： 不涉及
    * bps  **参数解释**： 带宽 **取值范围**： 不涉及
    * deny  **参数解释**： 阻断数量 **取值范围**： 不涉及
    * inBps  **参数解释**： 入方向bps **取值范围**： 不涉及
    * outBps  **参数解释**： 出方向bps **取值范围**： 不涉及
    * permit  **参数解释**： 允许数量 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'aggTime' => 'setAggTime',
            'bps' => 'setBps',
            'deny' => 'setDeny',
            'inBps' => 'setInBps',
            'outBps' => 'setOutBps',
            'permit' => 'setPermit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * aggTime  **参数解释**： 聚合时间 **取值范围**： 不涉及
    * bps  **参数解释**： 带宽 **取值范围**： 不涉及
    * deny  **参数解释**： 阻断数量 **取值范围**： 不涉及
    * inBps  **参数解释**： 入方向bps **取值范围**： 不涉及
    * outBps  **参数解释**： 出方向bps **取值范围**： 不涉及
    * permit  **参数解释**： 允许数量 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'aggTime' => 'getAggTime',
            'bps' => 'getBps',
            'deny' => 'getDeny',
            'inBps' => 'getInBps',
            'outBps' => 'getOutBps',
            'permit' => 'getPermit'
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
        $this->container['aggTime'] = isset($data['aggTime']) ? $data['aggTime'] : null;
        $this->container['bps'] = isset($data['bps']) ? $data['bps'] : null;
        $this->container['deny'] = isset($data['deny']) ? $data['deny'] : null;
        $this->container['inBps'] = isset($data['inBps']) ? $data['inBps'] : null;
        $this->container['outBps'] = isset($data['outBps']) ? $data['outBps'] : null;
        $this->container['permit'] = isset($data['permit']) ? $data['permit'] : null;
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
    * Gets aggTime
    *  **参数解释**： 聚合时间 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getAggTime()
    {
        return $this->container['aggTime'];
    }

    /**
    * Sets aggTime
    *
    * @param int|null $aggTime **参数解释**： 聚合时间 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setAggTime($aggTime)
    {
        $this->container['aggTime'] = $aggTime;
        return $this;
    }

    /**
    * Gets bps
    *  **参数解释**： 带宽 **取值范围**： 不涉及
    *
    * @return double|null
    */
    public function getBps()
    {
        return $this->container['bps'];
    }

    /**
    * Sets bps
    *
    * @param double|null $bps **参数解释**： 带宽 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setBps($bps)
    {
        $this->container['bps'] = $bps;
        return $this;
    }

    /**
    * Gets deny
    *  **参数解释**： 阻断数量 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getDeny()
    {
        return $this->container['deny'];
    }

    /**
    * Sets deny
    *
    * @param int|null $deny **参数解释**： 阻断数量 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setDeny($deny)
    {
        $this->container['deny'] = $deny;
        return $this;
    }

    /**
    * Gets inBps
    *  **参数解释**： 入方向bps **取值范围**： 不涉及
    *
    * @return double|null
    */
    public function getInBps()
    {
        return $this->container['inBps'];
    }

    /**
    * Sets inBps
    *
    * @param double|null $inBps **参数解释**： 入方向bps **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setInBps($inBps)
    {
        $this->container['inBps'] = $inBps;
        return $this;
    }

    /**
    * Gets outBps
    *  **参数解释**： 出方向bps **取值范围**： 不涉及
    *
    * @return double|null
    */
    public function getOutBps()
    {
        return $this->container['outBps'];
    }

    /**
    * Sets outBps
    *
    * @param double|null $outBps **参数解释**： 出方向bps **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setOutBps($outBps)
    {
        $this->container['outBps'] = $outBps;
        return $this;
    }

    /**
    * Gets permit
    *  **参数解释**： 允许数量 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getPermit()
    {
        return $this->container['permit'];
    }

    /**
    * Sets permit
    *
    * @param int|null $permit **参数解释**： 允许数量 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setPermit($permit)
    {
        $this->container['permit'] = $permit;
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

