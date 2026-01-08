<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListTransactionRequestBodyTransactionQueryInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListTransactionRequestBody_transaction_query_info';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * execTime  **参数解释**: 事务执行时长，单位：秒。 **约束限制**: 不涉及。 **取值范围**: 非负整数。 **默认取值**: 0
    * xlogQuantity  **参数解释**: 事务xlog日志大小：单位byte。 **约束限制**: 不涉及。 **取值范围**: 非负整数。 **默认取值**: 0
    * datnames  **参数解释**: 数据库名。 **约束限制**: 不涉及。
    * usenames  **参数解释**: 用户名。 **约束限制**: 不涉及。
    * clientAddrs  **参数解释**: 用户发起事务请求的客户端地址。 **约束限制**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'execTime' => 'string',
            'xlogQuantity' => 'string',
            'datnames' => 'string[]',
            'usenames' => 'string[]',
            'clientAddrs' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * execTime  **参数解释**: 事务执行时长，单位：秒。 **约束限制**: 不涉及。 **取值范围**: 非负整数。 **默认取值**: 0
    * xlogQuantity  **参数解释**: 事务xlog日志大小：单位byte。 **约束限制**: 不涉及。 **取值范围**: 非负整数。 **默认取值**: 0
    * datnames  **参数解释**: 数据库名。 **约束限制**: 不涉及。
    * usenames  **参数解释**: 用户名。 **约束限制**: 不涉及。
    * clientAddrs  **参数解释**: 用户发起事务请求的客户端地址。 **约束限制**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'execTime' => null,
        'xlogQuantity' => null,
        'datnames' => null,
        'usenames' => null,
        'clientAddrs' => null
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
    * execTime  **参数解释**: 事务执行时长，单位：秒。 **约束限制**: 不涉及。 **取值范围**: 非负整数。 **默认取值**: 0
    * xlogQuantity  **参数解释**: 事务xlog日志大小：单位byte。 **约束限制**: 不涉及。 **取值范围**: 非负整数。 **默认取值**: 0
    * datnames  **参数解释**: 数据库名。 **约束限制**: 不涉及。
    * usenames  **参数解释**: 用户名。 **约束限制**: 不涉及。
    * clientAddrs  **参数解释**: 用户发起事务请求的客户端地址。 **约束限制**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'execTime' => 'exec_time',
            'xlogQuantity' => 'xlog_quantity',
            'datnames' => 'datnames',
            'usenames' => 'usenames',
            'clientAddrs' => 'client_addrs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * execTime  **参数解释**: 事务执行时长，单位：秒。 **约束限制**: 不涉及。 **取值范围**: 非负整数。 **默认取值**: 0
    * xlogQuantity  **参数解释**: 事务xlog日志大小：单位byte。 **约束限制**: 不涉及。 **取值范围**: 非负整数。 **默认取值**: 0
    * datnames  **参数解释**: 数据库名。 **约束限制**: 不涉及。
    * usenames  **参数解释**: 用户名。 **约束限制**: 不涉及。
    * clientAddrs  **参数解释**: 用户发起事务请求的客户端地址。 **约束限制**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'execTime' => 'setExecTime',
            'xlogQuantity' => 'setXlogQuantity',
            'datnames' => 'setDatnames',
            'usenames' => 'setUsenames',
            'clientAddrs' => 'setClientAddrs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * execTime  **参数解释**: 事务执行时长，单位：秒。 **约束限制**: 不涉及。 **取值范围**: 非负整数。 **默认取值**: 0
    * xlogQuantity  **参数解释**: 事务xlog日志大小：单位byte。 **约束限制**: 不涉及。 **取值范围**: 非负整数。 **默认取值**: 0
    * datnames  **参数解释**: 数据库名。 **约束限制**: 不涉及。
    * usenames  **参数解释**: 用户名。 **约束限制**: 不涉及。
    * clientAddrs  **参数解释**: 用户发起事务请求的客户端地址。 **约束限制**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'execTime' => 'getExecTime',
            'xlogQuantity' => 'getXlogQuantity',
            'datnames' => 'getDatnames',
            'usenames' => 'getUsenames',
            'clientAddrs' => 'getClientAddrs'
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
        $this->container['execTime'] = isset($data['execTime']) ? $data['execTime'] : null;
        $this->container['xlogQuantity'] = isset($data['xlogQuantity']) ? $data['xlogQuantity'] : null;
        $this->container['datnames'] = isset($data['datnames']) ? $data['datnames'] : null;
        $this->container['usenames'] = isset($data['usenames']) ? $data['usenames'] : null;
        $this->container['clientAddrs'] = isset($data['clientAddrs']) ? $data['clientAddrs'] : null;
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
    * Gets execTime
    *  **参数解释**: 事务执行时长，单位：秒。 **约束限制**: 不涉及。 **取值范围**: 非负整数。 **默认取值**: 0
    *
    * @return string|null
    */
    public function getExecTime()
    {
        return $this->container['execTime'];
    }

    /**
    * Sets execTime
    *
    * @param string|null $execTime **参数解释**: 事务执行时长，单位：秒。 **约束限制**: 不涉及。 **取值范围**: 非负整数。 **默认取值**: 0
    *
    * @return $this
    */
    public function setExecTime($execTime)
    {
        $this->container['execTime'] = $execTime;
        return $this;
    }

    /**
    * Gets xlogQuantity
    *  **参数解释**: 事务xlog日志大小：单位byte。 **约束限制**: 不涉及。 **取值范围**: 非负整数。 **默认取值**: 0
    *
    * @return string|null
    */
    public function getXlogQuantity()
    {
        return $this->container['xlogQuantity'];
    }

    /**
    * Sets xlogQuantity
    *
    * @param string|null $xlogQuantity **参数解释**: 事务xlog日志大小：单位byte。 **约束限制**: 不涉及。 **取值范围**: 非负整数。 **默认取值**: 0
    *
    * @return $this
    */
    public function setXlogQuantity($xlogQuantity)
    {
        $this->container['xlogQuantity'] = $xlogQuantity;
        return $this;
    }

    /**
    * Gets datnames
    *  **参数解释**: 数据库名。 **约束限制**: 不涉及。
    *
    * @return string[]|null
    */
    public function getDatnames()
    {
        return $this->container['datnames'];
    }

    /**
    * Sets datnames
    *
    * @param string[]|null $datnames **参数解释**: 数据库名。 **约束限制**: 不涉及。
    *
    * @return $this
    */
    public function setDatnames($datnames)
    {
        $this->container['datnames'] = $datnames;
        return $this;
    }

    /**
    * Gets usenames
    *  **参数解释**: 用户名。 **约束限制**: 不涉及。
    *
    * @return string[]|null
    */
    public function getUsenames()
    {
        return $this->container['usenames'];
    }

    /**
    * Sets usenames
    *
    * @param string[]|null $usenames **参数解释**: 用户名。 **约束限制**: 不涉及。
    *
    * @return $this
    */
    public function setUsenames($usenames)
    {
        $this->container['usenames'] = $usenames;
        return $this;
    }

    /**
    * Gets clientAddrs
    *  **参数解释**: 用户发起事务请求的客户端地址。 **约束限制**: 不涉及。
    *
    * @return string[]|null
    */
    public function getClientAddrs()
    {
        return $this->container['clientAddrs'];
    }

    /**
    * Sets clientAddrs
    *
    * @param string[]|null $clientAddrs **参数解释**: 用户发起事务请求的客户端地址。 **约束限制**: 不涉及。
    *
    * @return $this
    */
    public function setClientAddrs($clientAddrs)
    {
        $this->container['clientAddrs'] = $clientAddrs;
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

