<?php

namespace HuaweiCloud\SDK\Aad\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Point implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Point';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * time  时间戳
    * total  请求总量
    * attack  攻击总量
    * basic  web基础防护
    * cc  频率控制
    * customCustom  精准防护
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'time' => 'int',
            'total' => 'int',
            'attack' => 'int',
            'basic' => 'int',
            'cc' => 'int',
            'customCustom' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * time  时间戳
    * total  请求总量
    * attack  攻击总量
    * basic  web基础防护
    * cc  频率控制
    * customCustom  精准防护
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'time' => 'int32',
        'total' => 'int32',
        'attack' => 'int32',
        'basic' => 'int32',
        'cc' => 'int32',
        'customCustom' => 'int32'
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
    * time  时间戳
    * total  请求总量
    * attack  攻击总量
    * basic  web基础防护
    * cc  频率控制
    * customCustom  精准防护
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'time' => 'time',
            'total' => 'total',
            'attack' => 'attack',
            'basic' => 'basic',
            'cc' => 'cc',
            'customCustom' => 'custom_custom'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * time  时间戳
    * total  请求总量
    * attack  攻击总量
    * basic  web基础防护
    * cc  频率控制
    * customCustom  精准防护
    *
    * @var string[]
    */
    protected static $setters = [
            'time' => 'setTime',
            'total' => 'setTotal',
            'attack' => 'setAttack',
            'basic' => 'setBasic',
            'cc' => 'setCc',
            'customCustom' => 'setCustomCustom'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * time  时间戳
    * total  请求总量
    * attack  攻击总量
    * basic  web基础防护
    * cc  频率控制
    * customCustom  精准防护
    *
    * @var string[]
    */
    protected static $getters = [
            'time' => 'getTime',
            'total' => 'getTotal',
            'attack' => 'getAttack',
            'basic' => 'getBasic',
            'cc' => 'getCc',
            'customCustom' => 'getCustomCustom'
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
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['attack'] = isset($data['attack']) ? $data['attack'] : null;
        $this->container['basic'] = isset($data['basic']) ? $data['basic'] : null;
        $this->container['cc'] = isset($data['cc']) ? $data['cc'] : null;
        $this->container['customCustom'] = isset($data['customCustom']) ? $data['customCustom'] : null;
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
    * Gets time
    *  时间戳
    *
    * @return int|null
    */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
    * Sets time
    *
    * @param int|null $time 时间戳
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
        return $this;
    }

    /**
    * Gets total
    *  请求总量
    *
    * @return int|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param int|null $total 请求总量
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets attack
    *  攻击总量
    *
    * @return int|null
    */
    public function getAttack()
    {
        return $this->container['attack'];
    }

    /**
    * Sets attack
    *
    * @param int|null $attack 攻击总量
    *
    * @return $this
    */
    public function setAttack($attack)
    {
        $this->container['attack'] = $attack;
        return $this;
    }

    /**
    * Gets basic
    *  web基础防护
    *
    * @return int|null
    */
    public function getBasic()
    {
        return $this->container['basic'];
    }

    /**
    * Sets basic
    *
    * @param int|null $basic web基础防护
    *
    * @return $this
    */
    public function setBasic($basic)
    {
        $this->container['basic'] = $basic;
        return $this;
    }

    /**
    * Gets cc
    *  频率控制
    *
    * @return int|null
    */
    public function getCc()
    {
        return $this->container['cc'];
    }

    /**
    * Sets cc
    *
    * @param int|null $cc 频率控制
    *
    * @return $this
    */
    public function setCc($cc)
    {
        $this->container['cc'] = $cc;
        return $this;
    }

    /**
    * Gets customCustom
    *  精准防护
    *
    * @return int|null
    */
    public function getCustomCustom()
    {
        return $this->container['customCustom'];
    }

    /**
    * Sets customCustom
    *
    * @param int|null $customCustom 精准防护
    *
    * @return $this
    */
    public function setCustomCustom($customCustom)
    {
        $this->container['customCustom'] = $customCustom;
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

