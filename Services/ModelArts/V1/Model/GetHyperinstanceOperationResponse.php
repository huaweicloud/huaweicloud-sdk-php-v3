<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GetHyperinstanceOperationResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GetHyperinstanceOperationResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * operationId  **参数解释**：操作ID。 **取值范围**：长度为[8,36]个字符。
    * operationStatus  **参数解释**：操作状态。 **取值范围**：长度为[8,36]个字符。
    * operationType  **参数解释**：操作类型。 **取值范围**：长度为[8,36]个字符。
    * operationError  operationError
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'operationId' => 'string',
            'operationStatus' => 'string',
            'operationType' => 'string',
            'operationError' => '\HuaweiCloud\SDK\ModelArts\V1\Model\ServerOperationError'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * operationId  **参数解释**：操作ID。 **取值范围**：长度为[8,36]个字符。
    * operationStatus  **参数解释**：操作状态。 **取值范围**：长度为[8,36]个字符。
    * operationType  **参数解释**：操作类型。 **取值范围**：长度为[8,36]个字符。
    * operationError  operationError
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'operationId' => null,
        'operationStatus' => null,
        'operationType' => null,
        'operationError' => null
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
    * operationId  **参数解释**：操作ID。 **取值范围**：长度为[8,36]个字符。
    * operationStatus  **参数解释**：操作状态。 **取值范围**：长度为[8,36]个字符。
    * operationType  **参数解释**：操作类型。 **取值范围**：长度为[8,36]个字符。
    * operationError  operationError
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'operationId' => 'operation_id',
            'operationStatus' => 'operation_status',
            'operationType' => 'operation_type',
            'operationError' => 'operation_error'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * operationId  **参数解释**：操作ID。 **取值范围**：长度为[8,36]个字符。
    * operationStatus  **参数解释**：操作状态。 **取值范围**：长度为[8,36]个字符。
    * operationType  **参数解释**：操作类型。 **取值范围**：长度为[8,36]个字符。
    * operationError  operationError
    *
    * @var string[]
    */
    protected static $setters = [
            'operationId' => 'setOperationId',
            'operationStatus' => 'setOperationStatus',
            'operationType' => 'setOperationType',
            'operationError' => 'setOperationError'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * operationId  **参数解释**：操作ID。 **取值范围**：长度为[8,36]个字符。
    * operationStatus  **参数解释**：操作状态。 **取值范围**：长度为[8,36]个字符。
    * operationType  **参数解释**：操作类型。 **取值范围**：长度为[8,36]个字符。
    * operationError  operationError
    *
    * @var string[]
    */
    protected static $getters = [
            'operationId' => 'getOperationId',
            'operationStatus' => 'getOperationStatus',
            'operationType' => 'getOperationType',
            'operationError' => 'getOperationError'
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
        $this->container['operationId'] = isset($data['operationId']) ? $data['operationId'] : null;
        $this->container['operationStatus'] = isset($data['operationStatus']) ? $data['operationStatus'] : null;
        $this->container['operationType'] = isset($data['operationType']) ? $data['operationType'] : null;
        $this->container['operationError'] = isset($data['operationError']) ? $data['operationError'] : null;
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
    * Gets operationId
    *  **参数解释**：操作ID。 **取值范围**：长度为[8,36]个字符。
    *
    * @return string|null
    */
    public function getOperationId()
    {
        return $this->container['operationId'];
    }

    /**
    * Sets operationId
    *
    * @param string|null $operationId **参数解释**：操作ID。 **取值范围**：长度为[8,36]个字符。
    *
    * @return $this
    */
    public function setOperationId($operationId)
    {
        $this->container['operationId'] = $operationId;
        return $this;
    }

    /**
    * Gets operationStatus
    *  **参数解释**：操作状态。 **取值范围**：长度为[8,36]个字符。
    *
    * @return string|null
    */
    public function getOperationStatus()
    {
        return $this->container['operationStatus'];
    }

    /**
    * Sets operationStatus
    *
    * @param string|null $operationStatus **参数解释**：操作状态。 **取值范围**：长度为[8,36]个字符。
    *
    * @return $this
    */
    public function setOperationStatus($operationStatus)
    {
        $this->container['operationStatus'] = $operationStatus;
        return $this;
    }

    /**
    * Gets operationType
    *  **参数解释**：操作类型。 **取值范围**：长度为[8,36]个字符。
    *
    * @return string|null
    */
    public function getOperationType()
    {
        return $this->container['operationType'];
    }

    /**
    * Sets operationType
    *
    * @param string|null $operationType **参数解释**：操作类型。 **取值范围**：长度为[8,36]个字符。
    *
    * @return $this
    */
    public function setOperationType($operationType)
    {
        $this->container['operationType'] = $operationType;
        return $this;
    }

    /**
    * Gets operationError
    *  operationError
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\ServerOperationError|null
    */
    public function getOperationError()
    {
        return $this->container['operationError'];
    }

    /**
    * Sets operationError
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\ServerOperationError|null $operationError operationError
    *
    * @return $this
    */
    public function setOperationError($operationError)
    {
        $this->container['operationError'] = $operationError;
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

