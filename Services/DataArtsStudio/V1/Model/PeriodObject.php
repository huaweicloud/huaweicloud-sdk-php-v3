<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PeriodObject implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PeriodObject';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * periodNum  周期，取值为1到24。
    * periodTime  小时:分钟，样例：00:59
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'periodNum' => 'int',
            'periodTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * periodNum  周期，取值为1到24。
    * periodTime  小时:分钟，样例：00:59
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'periodNum' => 'int32',
        'periodTime' => null
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
    * periodNum  周期，取值为1到24。
    * periodTime  小时:分钟，样例：00:59
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'periodNum' => 'period_num',
            'periodTime' => 'period_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * periodNum  周期，取值为1到24。
    * periodTime  小时:分钟，样例：00:59
    *
    * @var string[]
    */
    protected static $setters = [
            'periodNum' => 'setPeriodNum',
            'periodTime' => 'setPeriodTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * periodNum  周期，取值为1到24。
    * periodTime  小时:分钟，样例：00:59
    *
    * @var string[]
    */
    protected static $getters = [
            'periodNum' => 'getPeriodNum',
            'periodTime' => 'getPeriodTime'
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
        $this->container['periodNum'] = isset($data['periodNum']) ? $data['periodNum'] : null;
        $this->container['periodTime'] = isset($data['periodTime']) ? $data['periodTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['periodNum'] === null) {
            $invalidProperties[] = "'periodNum' can't be null";
        }
        if ($this->container['periodTime'] === null) {
            $invalidProperties[] = "'periodTime' can't be null";
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
    * Gets periodNum
    *  周期，取值为1到24。
    *
    * @return int
    */
    public function getPeriodNum()
    {
        return $this->container['periodNum'];
    }

    /**
    * Sets periodNum
    *
    * @param int $periodNum 周期，取值为1到24。
    *
    * @return $this
    */
    public function setPeriodNum($periodNum)
    {
        $this->container['periodNum'] = $periodNum;
        return $this;
    }

    /**
    * Gets periodTime
    *  小时:分钟，样例：00:59
    *
    * @return string
    */
    public function getPeriodTime()
    {
        return $this->container['periodTime'];
    }

    /**
    * Sets periodTime
    *
    * @param string $periodTime 小时:分钟，样例：00:59
    *
    * @return $this
    */
    public function setPeriodTime($periodTime)
    {
        $this->container['periodTime'] = $periodTime;
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

