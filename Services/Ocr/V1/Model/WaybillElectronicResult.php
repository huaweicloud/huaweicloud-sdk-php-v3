<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WaybillElectronicResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WaybillElectronicResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * code  三段码。
    * receiverName  收件人姓名。
    * receiverPhone  收件人电话。
    * receiverAddress  收件人地址。
    * senderName  寄件人姓名。
    * senderPhone  寄件人电话。
    * senderAddress  寄件人地址。
    * waybillNumber  条形码运单号。
    * confidence  相关字段的置信度信息，取值范围0~1。 置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'code' => 'string',
            'receiverName' => 'string',
            'receiverPhone' => 'string',
            'receiverAddress' => 'string',
            'senderName' => 'string',
            'senderPhone' => 'string',
            'senderAddress' => 'string',
            'waybillNumber' => 'string',
            'confidence' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * code  三段码。
    * receiverName  收件人姓名。
    * receiverPhone  收件人电话。
    * receiverAddress  收件人地址。
    * senderName  寄件人姓名。
    * senderPhone  寄件人电话。
    * senderAddress  寄件人地址。
    * waybillNumber  条形码运单号。
    * confidence  相关字段的置信度信息，取值范围0~1。 置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'code' => null,
        'receiverName' => null,
        'receiverPhone' => null,
        'receiverAddress' => null,
        'senderName' => null,
        'senderPhone' => null,
        'senderAddress' => null,
        'waybillNumber' => null,
        'confidence' => null
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
    * code  三段码。
    * receiverName  收件人姓名。
    * receiverPhone  收件人电话。
    * receiverAddress  收件人地址。
    * senderName  寄件人姓名。
    * senderPhone  寄件人电话。
    * senderAddress  寄件人地址。
    * waybillNumber  条形码运单号。
    * confidence  相关字段的置信度信息，取值范围0~1。 置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'code' => 'code',
            'receiverName' => 'receiver_name',
            'receiverPhone' => 'receiver_phone',
            'receiverAddress' => 'receiver_address',
            'senderName' => 'sender_name',
            'senderPhone' => 'sender_phone',
            'senderAddress' => 'sender_address',
            'waybillNumber' => 'waybill_number',
            'confidence' => 'confidence'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * code  三段码。
    * receiverName  收件人姓名。
    * receiverPhone  收件人电话。
    * receiverAddress  收件人地址。
    * senderName  寄件人姓名。
    * senderPhone  寄件人电话。
    * senderAddress  寄件人地址。
    * waybillNumber  条形码运单号。
    * confidence  相关字段的置信度信息，取值范围0~1。 置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
    *
    * @var string[]
    */
    protected static $setters = [
            'code' => 'setCode',
            'receiverName' => 'setReceiverName',
            'receiverPhone' => 'setReceiverPhone',
            'receiverAddress' => 'setReceiverAddress',
            'senderName' => 'setSenderName',
            'senderPhone' => 'setSenderPhone',
            'senderAddress' => 'setSenderAddress',
            'waybillNumber' => 'setWaybillNumber',
            'confidence' => 'setConfidence'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * code  三段码。
    * receiverName  收件人姓名。
    * receiverPhone  收件人电话。
    * receiverAddress  收件人地址。
    * senderName  寄件人姓名。
    * senderPhone  寄件人电话。
    * senderAddress  寄件人地址。
    * waybillNumber  条形码运单号。
    * confidence  相关字段的置信度信息，取值范围0~1。 置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
    *
    * @var string[]
    */
    protected static $getters = [
            'code' => 'getCode',
            'receiverName' => 'getReceiverName',
            'receiverPhone' => 'getReceiverPhone',
            'receiverAddress' => 'getReceiverAddress',
            'senderName' => 'getSenderName',
            'senderPhone' => 'getSenderPhone',
            'senderAddress' => 'getSenderAddress',
            'waybillNumber' => 'getWaybillNumber',
            'confidence' => 'getConfidence'
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['receiverName'] = isset($data['receiverName']) ? $data['receiverName'] : null;
        $this->container['receiverPhone'] = isset($data['receiverPhone']) ? $data['receiverPhone'] : null;
        $this->container['receiverAddress'] = isset($data['receiverAddress']) ? $data['receiverAddress'] : null;
        $this->container['senderName'] = isset($data['senderName']) ? $data['senderName'] : null;
        $this->container['senderPhone'] = isset($data['senderPhone']) ? $data['senderPhone'] : null;
        $this->container['senderAddress'] = isset($data['senderAddress']) ? $data['senderAddress'] : null;
        $this->container['waybillNumber'] = isset($data['waybillNumber']) ? $data['waybillNumber'] : null;
        $this->container['confidence'] = isset($data['confidence']) ? $data['confidence'] : null;
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
    * Gets code
    *  三段码。
    *
    * @return string|null
    */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
    * Sets code
    *
    * @param string|null $code 三段码。
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
        return $this;
    }

    /**
    * Gets receiverName
    *  收件人姓名。
    *
    * @return string|null
    */
    public function getReceiverName()
    {
        return $this->container['receiverName'];
    }

    /**
    * Sets receiverName
    *
    * @param string|null $receiverName 收件人姓名。
    *
    * @return $this
    */
    public function setReceiverName($receiverName)
    {
        $this->container['receiverName'] = $receiverName;
        return $this;
    }

    /**
    * Gets receiverPhone
    *  收件人电话。
    *
    * @return string|null
    */
    public function getReceiverPhone()
    {
        return $this->container['receiverPhone'];
    }

    /**
    * Sets receiverPhone
    *
    * @param string|null $receiverPhone 收件人电话。
    *
    * @return $this
    */
    public function setReceiverPhone($receiverPhone)
    {
        $this->container['receiverPhone'] = $receiverPhone;
        return $this;
    }

    /**
    * Gets receiverAddress
    *  收件人地址。
    *
    * @return string|null
    */
    public function getReceiverAddress()
    {
        return $this->container['receiverAddress'];
    }

    /**
    * Sets receiverAddress
    *
    * @param string|null $receiverAddress 收件人地址。
    *
    * @return $this
    */
    public function setReceiverAddress($receiverAddress)
    {
        $this->container['receiverAddress'] = $receiverAddress;
        return $this;
    }

    /**
    * Gets senderName
    *  寄件人姓名。
    *
    * @return string|null
    */
    public function getSenderName()
    {
        return $this->container['senderName'];
    }

    /**
    * Sets senderName
    *
    * @param string|null $senderName 寄件人姓名。
    *
    * @return $this
    */
    public function setSenderName($senderName)
    {
        $this->container['senderName'] = $senderName;
        return $this;
    }

    /**
    * Gets senderPhone
    *  寄件人电话。
    *
    * @return string|null
    */
    public function getSenderPhone()
    {
        return $this->container['senderPhone'];
    }

    /**
    * Sets senderPhone
    *
    * @param string|null $senderPhone 寄件人电话。
    *
    * @return $this
    */
    public function setSenderPhone($senderPhone)
    {
        $this->container['senderPhone'] = $senderPhone;
        return $this;
    }

    /**
    * Gets senderAddress
    *  寄件人地址。
    *
    * @return string|null
    */
    public function getSenderAddress()
    {
        return $this->container['senderAddress'];
    }

    /**
    * Sets senderAddress
    *
    * @param string|null $senderAddress 寄件人地址。
    *
    * @return $this
    */
    public function setSenderAddress($senderAddress)
    {
        $this->container['senderAddress'] = $senderAddress;
        return $this;
    }

    /**
    * Gets waybillNumber
    *  条形码运单号。
    *
    * @return string|null
    */
    public function getWaybillNumber()
    {
        return $this->container['waybillNumber'];
    }

    /**
    * Sets waybillNumber
    *
    * @param string|null $waybillNumber 条形码运单号。
    *
    * @return $this
    */
    public function setWaybillNumber($waybillNumber)
    {
        $this->container['waybillNumber'] = $waybillNumber;
        return $this;
    }

    /**
    * Gets confidence
    *  相关字段的置信度信息，取值范围0~1。 置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
    *
    * @return object|null
    */
    public function getConfidence()
    {
        return $this->container['confidence'];
    }

    /**
    * Sets confidence
    *
    * @param object|null $confidence 相关字段的置信度信息，取值范围0~1。 置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
    *
    * @return $this
    */
    public function setConfidence($confidence)
    {
        $this->container['confidence'] = $confidence;
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

