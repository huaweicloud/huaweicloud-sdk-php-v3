<?php

namespace HuaweiCloud\SDK\Evs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowRecyclePolicyResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowRecyclePolicyResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * switch  **参数解释** 回收站开关。 **取值范围** - true：表示回收站已打开。 - false：表示回收站已关闭。
    * thresholdTime  **参数解释** 回收站的门槛时间，云硬盘创建多少天后删除才会放入回收站。 **取值范围** 1-1000
    * keepTime  **参数解释** 回收站的云硬盘保存期限（天），云硬盘进入回收站后多少天才会被彻底删除。 **取值范围** 1-365
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'switch' => 'bool',
            'thresholdTime' => 'int',
            'keepTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * switch  **参数解释** 回收站开关。 **取值范围** - true：表示回收站已打开。 - false：表示回收站已关闭。
    * thresholdTime  **参数解释** 回收站的门槛时间，云硬盘创建多少天后删除才会放入回收站。 **取值范围** 1-1000
    * keepTime  **参数解释** 回收站的云硬盘保存期限（天），云硬盘进入回收站后多少天才会被彻底删除。 **取值范围** 1-365
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'switch' => null,
        'thresholdTime' => 'int32',
        'keepTime' => 'int32'
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
    * switch  **参数解释** 回收站开关。 **取值范围** - true：表示回收站已打开。 - false：表示回收站已关闭。
    * thresholdTime  **参数解释** 回收站的门槛时间，云硬盘创建多少天后删除才会放入回收站。 **取值范围** 1-1000
    * keepTime  **参数解释** 回收站的云硬盘保存期限（天），云硬盘进入回收站后多少天才会被彻底删除。 **取值范围** 1-365
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'switch' => 'switch',
            'thresholdTime' => 'threshold_time',
            'keepTime' => 'keep_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * switch  **参数解释** 回收站开关。 **取值范围** - true：表示回收站已打开。 - false：表示回收站已关闭。
    * thresholdTime  **参数解释** 回收站的门槛时间，云硬盘创建多少天后删除才会放入回收站。 **取值范围** 1-1000
    * keepTime  **参数解释** 回收站的云硬盘保存期限（天），云硬盘进入回收站后多少天才会被彻底删除。 **取值范围** 1-365
    *
    * @var string[]
    */
    protected static $setters = [
            'switch' => 'setSwitch',
            'thresholdTime' => 'setThresholdTime',
            'keepTime' => 'setKeepTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * switch  **参数解释** 回收站开关。 **取值范围** - true：表示回收站已打开。 - false：表示回收站已关闭。
    * thresholdTime  **参数解释** 回收站的门槛时间，云硬盘创建多少天后删除才会放入回收站。 **取值范围** 1-1000
    * keepTime  **参数解释** 回收站的云硬盘保存期限（天），云硬盘进入回收站后多少天才会被彻底删除。 **取值范围** 1-365
    *
    * @var string[]
    */
    protected static $getters = [
            'switch' => 'getSwitch',
            'thresholdTime' => 'getThresholdTime',
            'keepTime' => 'getKeepTime'
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
        $this->container['switch'] = isset($data['switch']) ? $data['switch'] : null;
        $this->container['thresholdTime'] = isset($data['thresholdTime']) ? $data['thresholdTime'] : null;
        $this->container['keepTime'] = isset($data['keepTime']) ? $data['keepTime'] : null;
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
    * Gets switch
    *  **参数解释** 回收站开关。 **取值范围** - true：表示回收站已打开。 - false：表示回收站已关闭。
    *
    * @return bool|null
    */
    public function getSwitch()
    {
        return $this->container['switch'];
    }

    /**
    * Sets switch
    *
    * @param bool|null $switch **参数解释** 回收站开关。 **取值范围** - true：表示回收站已打开。 - false：表示回收站已关闭。
    *
    * @return $this
    */
    public function setSwitch($switch)
    {
        $this->container['switch'] = $switch;
        return $this;
    }

    /**
    * Gets thresholdTime
    *  **参数解释** 回收站的门槛时间，云硬盘创建多少天后删除才会放入回收站。 **取值范围** 1-1000
    *
    * @return int|null
    */
    public function getThresholdTime()
    {
        return $this->container['thresholdTime'];
    }

    /**
    * Sets thresholdTime
    *
    * @param int|null $thresholdTime **参数解释** 回收站的门槛时间，云硬盘创建多少天后删除才会放入回收站。 **取值范围** 1-1000
    *
    * @return $this
    */
    public function setThresholdTime($thresholdTime)
    {
        $this->container['thresholdTime'] = $thresholdTime;
        return $this;
    }

    /**
    * Gets keepTime
    *  **参数解释** 回收站的云硬盘保存期限（天），云硬盘进入回收站后多少天才会被彻底删除。 **取值范围** 1-365
    *
    * @return int|null
    */
    public function getKeepTime()
    {
        return $this->container['keepTime'];
    }

    /**
    * Sets keepTime
    *
    * @param int|null $keepTime **参数解释** 回收站的云硬盘保存期限（天），云硬盘进入回收站后多少天才会被彻底删除。 **取值范围** 1-365
    *
    * @return $this
    */
    public function setKeepTime($keepTime)
    {
        $this->container['keepTime'] = $keepTime;
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

