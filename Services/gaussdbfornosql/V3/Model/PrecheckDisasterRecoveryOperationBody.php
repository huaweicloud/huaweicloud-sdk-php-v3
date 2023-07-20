<?php

namespace HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PrecheckDisasterRecoveryOperationBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PrecheckDisasterRecoveryOperationBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * operation  指定预校验的具体容灾操作。
    * disasterRecoveryInstance  disasterRecoveryInstance
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'operation' => 'string',
            'disasterRecoveryInstance' => '\HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\PrecheckDisasterRecoveryInstance'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * operation  指定预校验的具体容灾操作。
    * disasterRecoveryInstance  disasterRecoveryInstance
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'operation' => null,
        'disasterRecoveryInstance' => null
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
    * operation  指定预校验的具体容灾操作。
    * disasterRecoveryInstance  disasterRecoveryInstance
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'operation' => 'operation',
            'disasterRecoveryInstance' => 'disaster_recovery_instance'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * operation  指定预校验的具体容灾操作。
    * disasterRecoveryInstance  disasterRecoveryInstance
    *
    * @var string[]
    */
    protected static $setters = [
            'operation' => 'setOperation',
            'disasterRecoveryInstance' => 'setDisasterRecoveryInstance'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * operation  指定预校验的具体容灾操作。
    * disasterRecoveryInstance  disasterRecoveryInstance
    *
    * @var string[]
    */
    protected static $getters = [
            'operation' => 'getOperation',
            'disasterRecoveryInstance' => 'getDisasterRecoveryInstance'
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
        $this->container['operation'] = isset($data['operation']) ? $data['operation'] : null;
        $this->container['disasterRecoveryInstance'] = isset($data['disasterRecoveryInstance']) ? $data['disasterRecoveryInstance'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['operation'] === null) {
            $invalidProperties[] = "'operation' can't be null";
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
    * Gets operation
    *  指定预校验的具体容灾操作。
    *
    * @return string
    */
    public function getOperation()
    {
        return $this->container['operation'];
    }

    /**
    * Sets operation
    *
    * @param string $operation 指定预校验的具体容灾操作。
    *
    * @return $this
    */
    public function setOperation($operation)
    {
        $this->container['operation'] = $operation;
        return $this;
    }

    /**
    * Gets disasterRecoveryInstance
    *  disasterRecoveryInstance
    *
    * @return \HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\PrecheckDisasterRecoveryInstance|null
    */
    public function getDisasterRecoveryInstance()
    {
        return $this->container['disasterRecoveryInstance'];
    }

    /**
    * Sets disasterRecoveryInstance
    *
    * @param \HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model\PrecheckDisasterRecoveryInstance|null $disasterRecoveryInstance disasterRecoveryInstance
    *
    * @return $this
    */
    public function setDisasterRecoveryInstance($disasterRecoveryInstance)
    {
        $this->container['disasterRecoveryInstance'] = $disasterRecoveryInstance;
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

