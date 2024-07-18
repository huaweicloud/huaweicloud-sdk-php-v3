<?php

namespace HuaweiCloud\SDK\Evs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UnsubscribeVolume implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UnsubscribeVolume';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * volumeId  卷id对应的结果
    * orderId  卷id对应的退订订单id，如果是已到期的云硬盘退订，则不显示此字段。
    * result  volume_id对应的退订结果，只有SUCCESS 和 FAIL两种结果。
    * failReason  当result为FAIL时，此字段显示具体的失败原因。 result为SUCCESS时，不显示此字段。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'volumeId' => 'string',
            'orderId' => 'string',
            'result' => 'string',
            'failReason' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * volumeId  卷id对应的结果
    * orderId  卷id对应的退订订单id，如果是已到期的云硬盘退订，则不显示此字段。
    * result  volume_id对应的退订结果，只有SUCCESS 和 FAIL两种结果。
    * failReason  当result为FAIL时，此字段显示具体的失败原因。 result为SUCCESS时，不显示此字段。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'volumeId' => null,
        'orderId' => null,
        'result' => null,
        'failReason' => null
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
    * volumeId  卷id对应的结果
    * orderId  卷id对应的退订订单id，如果是已到期的云硬盘退订，则不显示此字段。
    * result  volume_id对应的退订结果，只有SUCCESS 和 FAIL两种结果。
    * failReason  当result为FAIL时，此字段显示具体的失败原因。 result为SUCCESS时，不显示此字段。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'volumeId' => 'volume_id',
            'orderId' => 'order_id',
            'result' => 'result',
            'failReason' => 'fail_reason'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * volumeId  卷id对应的结果
    * orderId  卷id对应的退订订单id，如果是已到期的云硬盘退订，则不显示此字段。
    * result  volume_id对应的退订结果，只有SUCCESS 和 FAIL两种结果。
    * failReason  当result为FAIL时，此字段显示具体的失败原因。 result为SUCCESS时，不显示此字段。
    *
    * @var string[]
    */
    protected static $setters = [
            'volumeId' => 'setVolumeId',
            'orderId' => 'setOrderId',
            'result' => 'setResult',
            'failReason' => 'setFailReason'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * volumeId  卷id对应的结果
    * orderId  卷id对应的退订订单id，如果是已到期的云硬盘退订，则不显示此字段。
    * result  volume_id对应的退订结果，只有SUCCESS 和 FAIL两种结果。
    * failReason  当result为FAIL时，此字段显示具体的失败原因。 result为SUCCESS时，不显示此字段。
    *
    * @var string[]
    */
    protected static $getters = [
            'volumeId' => 'getVolumeId',
            'orderId' => 'getOrderId',
            'result' => 'getResult',
            'failReason' => 'getFailReason'
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
        $this->container['volumeId'] = isset($data['volumeId']) ? $data['volumeId'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['failReason'] = isset($data['failReason']) ? $data['failReason'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['volumeId'] === null) {
            $invalidProperties[] = "'volumeId' can't be null";
        }
        if ($this->container['result'] === null) {
            $invalidProperties[] = "'result' can't be null";
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
    * Gets volumeId
    *  卷id对应的结果
    *
    * @return string
    */
    public function getVolumeId()
    {
        return $this->container['volumeId'];
    }

    /**
    * Sets volumeId
    *
    * @param string $volumeId 卷id对应的结果
    *
    * @return $this
    */
    public function setVolumeId($volumeId)
    {
        $this->container['volumeId'] = $volumeId;
        return $this;
    }

    /**
    * Gets orderId
    *  卷id对应的退订订单id，如果是已到期的云硬盘退订，则不显示此字段。
    *
    * @return string|null
    */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
    * Sets orderId
    *
    * @param string|null $orderId 卷id对应的退订订单id，如果是已到期的云硬盘退订，则不显示此字段。
    *
    * @return $this
    */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;
        return $this;
    }

    /**
    * Gets result
    *  volume_id对应的退订结果，只有SUCCESS 和 FAIL两种结果。
    *
    * @return string
    */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
    * Sets result
    *
    * @param string $result volume_id对应的退订结果，只有SUCCESS 和 FAIL两种结果。
    *
    * @return $this
    */
    public function setResult($result)
    {
        $this->container['result'] = $result;
        return $this;
    }

    /**
    * Gets failReason
    *  当result为FAIL时，此字段显示具体的失败原因。 result为SUCCESS时，不显示此字段。
    *
    * @return string|null
    */
    public function getFailReason()
    {
        return $this->container['failReason'];
    }

    /**
    * Sets failReason
    *
    * @param string|null $failReason 当result为FAIL时，此字段显示具体的失败原因。 result为SUCCESS时，不显示此字段。
    *
    * @return $this
    */
    public function setFailReason($failReason)
    {
        $this->container['failReason'] = $failReason;
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

