<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AttachDevServerVolumeResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AttachDevServerVolumeResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * operationId  **参数解释**：操作ID。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。
    * operationStatus  **参数解释**：操作状态。 **取值范围**： - pending 等待处理 - running 运行中 - success 成功 - failed 失败
    * operationType  **参数解释**：操作类型。 **取值范围**：node_attach_volume
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'operationId' => 'string',
            'operationStatus' => 'string',
            'operationType' => 'string',
            'xRequestId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * operationId  **参数解释**：操作ID。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。
    * operationStatus  **参数解释**：操作状态。 **取值范围**： - pending 等待处理 - running 运行中 - success 成功 - failed 失败
    * operationType  **参数解释**：操作类型。 **取值范围**：node_attach_volume
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'operationId' => null,
        'operationStatus' => null,
        'operationType' => null,
        'xRequestId' => null
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
    * operationId  **参数解释**：操作ID。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。
    * operationStatus  **参数解释**：操作状态。 **取值范围**： - pending 等待处理 - running 运行中 - success 成功 - failed 失败
    * operationType  **参数解释**：操作类型。 **取值范围**：node_attach_volume
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'operationId' => 'operation_id',
            'operationStatus' => 'operation_status',
            'operationType' => 'operation_type',
            'xRequestId' => 'X-Request-Id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * operationId  **参数解释**：操作ID。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。
    * operationStatus  **参数解释**：操作状态。 **取值范围**： - pending 等待处理 - running 运行中 - success 成功 - failed 失败
    * operationType  **参数解释**：操作类型。 **取值范围**：node_attach_volume
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $setters = [
            'operationId' => 'setOperationId',
            'operationStatus' => 'setOperationStatus',
            'operationType' => 'setOperationType',
            'xRequestId' => 'setXRequestId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * operationId  **参数解释**：操作ID。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。
    * operationStatus  **参数解释**：操作状态。 **取值范围**： - pending 等待处理 - running 运行中 - success 成功 - failed 失败
    * operationType  **参数解释**：操作类型。 **取值范围**：node_attach_volume
    * xRequestId  xRequestId
    *
    * @var string[]
    */
    protected static $getters = [
            'operationId' => 'getOperationId',
            'operationStatus' => 'getOperationStatus',
            'operationType' => 'getOperationType',
            'xRequestId' => 'getXRequestId'
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
        $this->container['xRequestId'] = isset($data['xRequestId']) ? $data['xRequestId'] : null;
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
    *  **参数解释**：操作ID。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。
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
    * @param string|null $operationId **参数解释**：操作ID。 **取值范围**：^[0-9a-f]{8}-[0-9a-f]{4}-[1-5][0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}$。
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
    *  **参数解释**：操作状态。 **取值范围**： - pending 等待处理 - running 运行中 - success 成功 - failed 失败
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
    * @param string|null $operationStatus **参数解释**：操作状态。 **取值范围**： - pending 等待处理 - running 运行中 - success 成功 - failed 失败
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
    *  **参数解释**：操作类型。 **取值范围**：node_attach_volume
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
    * @param string|null $operationType **参数解释**：操作类型。 **取值范围**：node_attach_volume
    *
    * @return $this
    */
    public function setOperationType($operationType)
    {
        $this->container['operationType'] = $operationType;
        return $this;
    }

    /**
    * Gets xRequestId
    *  xRequestId
    *
    * @return string|null
    */
    public function getXRequestId()
    {
        return $this->container['xRequestId'];
    }

    /**
    * Sets xRequestId
    *
    * @param string|null $xRequestId xRequestId
    *
    * @return $this
    */
    public function setXRequestId($xRequestId)
    {
        $this->container['xRequestId'] = $xRequestId;
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

