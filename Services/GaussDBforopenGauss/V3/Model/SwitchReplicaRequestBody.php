<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SwitchReplicaRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SwitchReplicaRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isAutoPay  **参数解释**: 创建包周期实例时可指定，表示是否自动从账户中支付，该字段不影响自动续订的支付方式。 **约束限制**: 不涉及。 **取值范围**: - true：表示自动从账户中支付。 - false：表示手动从账户中支付，默认为该支付方式。  **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isAutoPay' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isAutoPay  **参数解释**: 创建包周期实例时可指定，表示是否自动从账户中支付，该字段不影响自动续订的支付方式。 **约束限制**: 不涉及。 **取值范围**: - true：表示自动从账户中支付。 - false：表示手动从账户中支付，默认为该支付方式。  **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isAutoPay' => null
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
    * isAutoPay  **参数解释**: 创建包周期实例时可指定，表示是否自动从账户中支付，该字段不影响自动续订的支付方式。 **约束限制**: 不涉及。 **取值范围**: - true：表示自动从账户中支付。 - false：表示手动从账户中支付，默认为该支付方式。  **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isAutoPay' => 'is_auto_pay'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isAutoPay  **参数解释**: 创建包周期实例时可指定，表示是否自动从账户中支付，该字段不影响自动续订的支付方式。 **约束限制**: 不涉及。 **取值范围**: - true：表示自动从账户中支付。 - false：表示手动从账户中支付，默认为该支付方式。  **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'isAutoPay' => 'setIsAutoPay'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isAutoPay  **参数解释**: 创建包周期实例时可指定，表示是否自动从账户中支付，该字段不影响自动续订的支付方式。 **约束限制**: 不涉及。 **取值范围**: - true：表示自动从账户中支付。 - false：表示手动从账户中支付，默认为该支付方式。  **默认取值**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'isAutoPay' => 'getIsAutoPay'
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
        $this->container['isAutoPay'] = isset($data['isAutoPay']) ? $data['isAutoPay'] : null;
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
    * Gets isAutoPay
    *  **参数解释**: 创建包周期实例时可指定，表示是否自动从账户中支付，该字段不影响自动续订的支付方式。 **约束限制**: 不涉及。 **取值范围**: - true：表示自动从账户中支付。 - false：表示手动从账户中支付，默认为该支付方式。  **默认取值**: 不涉及。
    *
    * @return bool|null
    */
    public function getIsAutoPay()
    {
        return $this->container['isAutoPay'];
    }

    /**
    * Sets isAutoPay
    *
    * @param bool|null $isAutoPay **参数解释**: 创建包周期实例时可指定，表示是否自动从账户中支付，该字段不影响自动续订的支付方式。 **约束限制**: 不涉及。 **取值范围**: - true：表示自动从账户中支付。 - false：表示手动从账户中支付，默认为该支付方式。  **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setIsAutoPay($isAutoPay)
    {
        $this->container['isAutoPay'] = $isAutoPay;
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

