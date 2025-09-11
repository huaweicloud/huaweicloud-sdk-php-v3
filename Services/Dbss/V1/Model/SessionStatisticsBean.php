<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SessionStatisticsBean implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SessionStatisticsBean';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * activeSessionNum  活跃SESSION数量
    * failSessionNum  失败SESSION数量
    * newSessionNum  新增SESSION数量
    * period  周期
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'activeSessionNum' => 'int',
            'failSessionNum' => 'int',
            'newSessionNum' => 'int',
            'period' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * activeSessionNum  活跃SESSION数量
    * failSessionNum  失败SESSION数量
    * newSessionNum  新增SESSION数量
    * period  周期
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'activeSessionNum' => 'int64',
        'failSessionNum' => 'int64',
        'newSessionNum' => 'int64',
        'period' => null
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
    * activeSessionNum  活跃SESSION数量
    * failSessionNum  失败SESSION数量
    * newSessionNum  新增SESSION数量
    * period  周期
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'activeSessionNum' => 'active_session_num',
            'failSessionNum' => 'fail_session_num',
            'newSessionNum' => 'new_session_num',
            'period' => 'period'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * activeSessionNum  活跃SESSION数量
    * failSessionNum  失败SESSION数量
    * newSessionNum  新增SESSION数量
    * period  周期
    *
    * @var string[]
    */
    protected static $setters = [
            'activeSessionNum' => 'setActiveSessionNum',
            'failSessionNum' => 'setFailSessionNum',
            'newSessionNum' => 'setNewSessionNum',
            'period' => 'setPeriod'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * activeSessionNum  活跃SESSION数量
    * failSessionNum  失败SESSION数量
    * newSessionNum  新增SESSION数量
    * period  周期
    *
    * @var string[]
    */
    protected static $getters = [
            'activeSessionNum' => 'getActiveSessionNum',
            'failSessionNum' => 'getFailSessionNum',
            'newSessionNum' => 'getNewSessionNum',
            'period' => 'getPeriod'
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
        $this->container['activeSessionNum'] = isset($data['activeSessionNum']) ? $data['activeSessionNum'] : null;
        $this->container['failSessionNum'] = isset($data['failSessionNum']) ? $data['failSessionNum'] : null;
        $this->container['newSessionNum'] = isset($data['newSessionNum']) ? $data['newSessionNum'] : null;
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
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
    * Gets activeSessionNum
    *  活跃SESSION数量
    *
    * @return int|null
    */
    public function getActiveSessionNum()
    {
        return $this->container['activeSessionNum'];
    }

    /**
    * Sets activeSessionNum
    *
    * @param int|null $activeSessionNum 活跃SESSION数量
    *
    * @return $this
    */
    public function setActiveSessionNum($activeSessionNum)
    {
        $this->container['activeSessionNum'] = $activeSessionNum;
        return $this;
    }

    /**
    * Gets failSessionNum
    *  失败SESSION数量
    *
    * @return int|null
    */
    public function getFailSessionNum()
    {
        return $this->container['failSessionNum'];
    }

    /**
    * Sets failSessionNum
    *
    * @param int|null $failSessionNum 失败SESSION数量
    *
    * @return $this
    */
    public function setFailSessionNum($failSessionNum)
    {
        $this->container['failSessionNum'] = $failSessionNum;
        return $this;
    }

    /**
    * Gets newSessionNum
    *  新增SESSION数量
    *
    * @return int|null
    */
    public function getNewSessionNum()
    {
        return $this->container['newSessionNum'];
    }

    /**
    * Sets newSessionNum
    *
    * @param int|null $newSessionNum 新增SESSION数量
    *
    * @return $this
    */
    public function setNewSessionNum($newSessionNum)
    {
        $this->container['newSessionNum'] = $newSessionNum;
        return $this;
    }

    /**
    * Gets period
    *  周期
    *
    * @return string|null
    */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
    * Sets period
    *
    * @param string|null $period 周期
    *
    * @return $this
    */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;
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

