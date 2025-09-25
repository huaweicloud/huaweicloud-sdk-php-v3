<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AgentPayInfoV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AgentPayInfoV2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * payingAgentId  |参数名称：订单代理支付人的客户账号ID。| |参数的约束及描述：订单代理支付人的客户账号ID|
    * isAgentPay  |参数名称：是否代理支付。| |参数的约束及描述：是否代理支付。true：代理支付，不为ture时为非代理支付订单|
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'payingAgentId' => 'string',
            'isAgentPay' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * payingAgentId  |参数名称：订单代理支付人的客户账号ID。| |参数的约束及描述：订单代理支付人的客户账号ID|
    * isAgentPay  |参数名称：是否代理支付。| |参数的约束及描述：是否代理支付。true：代理支付，不为ture时为非代理支付订单|
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'payingAgentId' => null,
        'isAgentPay' => null
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
    * payingAgentId  |参数名称：订单代理支付人的客户账号ID。| |参数的约束及描述：订单代理支付人的客户账号ID|
    * isAgentPay  |参数名称：是否代理支付。| |参数的约束及描述：是否代理支付。true：代理支付，不为ture时为非代理支付订单|
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'payingAgentId' => 'paying_agent_id',
            'isAgentPay' => 'is_agent_pay'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * payingAgentId  |参数名称：订单代理支付人的客户账号ID。| |参数的约束及描述：订单代理支付人的客户账号ID|
    * isAgentPay  |参数名称：是否代理支付。| |参数的约束及描述：是否代理支付。true：代理支付，不为ture时为非代理支付订单|
    *
    * @var string[]
    */
    protected static $setters = [
            'payingAgentId' => 'setPayingAgentId',
            'isAgentPay' => 'setIsAgentPay'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * payingAgentId  |参数名称：订单代理支付人的客户账号ID。| |参数的约束及描述：订单代理支付人的客户账号ID|
    * isAgentPay  |参数名称：是否代理支付。| |参数的约束及描述：是否代理支付。true：代理支付，不为ture时为非代理支付订单|
    *
    * @var string[]
    */
    protected static $getters = [
            'payingAgentId' => 'getPayingAgentId',
            'isAgentPay' => 'getIsAgentPay'
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
        $this->container['payingAgentId'] = isset($data['payingAgentId']) ? $data['payingAgentId'] : null;
        $this->container['isAgentPay'] = isset($data['isAgentPay']) ? $data['isAgentPay'] : null;
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
    * Gets payingAgentId
    *  |参数名称：订单代理支付人的客户账号ID。| |参数的约束及描述：订单代理支付人的客户账号ID|
    *
    * @return string|null
    */
    public function getPayingAgentId()
    {
        return $this->container['payingAgentId'];
    }

    /**
    * Sets payingAgentId
    *
    * @param string|null $payingAgentId |参数名称：订单代理支付人的客户账号ID。| |参数的约束及描述：订单代理支付人的客户账号ID|
    *
    * @return $this
    */
    public function setPayingAgentId($payingAgentId)
    {
        $this->container['payingAgentId'] = $payingAgentId;
        return $this;
    }

    /**
    * Gets isAgentPay
    *  |参数名称：是否代理支付。| |参数的约束及描述：是否代理支付。true：代理支付，不为ture时为非代理支付订单|
    *
    * @return bool|null
    */
    public function getIsAgentPay()
    {
        return $this->container['isAgentPay'];
    }

    /**
    * Sets isAgentPay
    *
    * @param bool|null $isAgentPay |参数名称：是否代理支付。| |参数的约束及描述：是否代理支付。true：代理支付，不为ture时为非代理支付订单|
    *
    * @return $this
    */
    public function setIsAgentPay($isAgentPay)
    {
        $this->container['isAgentPay'] = $isAgentPay;
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

