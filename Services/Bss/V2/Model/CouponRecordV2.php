<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CouponRecordV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CouponRecordV2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  该记录的ID。
    * operationType  操作类型。 1：发放2：手动回收3：解绑自动回收
    * quotaId  额度ID。
    * quotaType  额度类型。 0：代金券额度1：现金券额度
    * couponId  代金券ID。
    * customerId  客户账号ID。
    * operationAmount  操作的面额值。单位：元。 发放时，等于面额值；回收时，指每次回收的具体值。
    * operationTime  操作时间。
    * result  操作结果。 0：成功-1：失败
    * remark  操作记录中的备注。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'operationType' => 'string',
            'quotaId' => 'string',
            'quotaType' => 'int',
            'couponId' => 'string',
            'customerId' => 'string',
            'operationAmount' => 'double',
            'operationTime' => 'string',
            'result' => 'string',
            'remark' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  该记录的ID。
    * operationType  操作类型。 1：发放2：手动回收3：解绑自动回收
    * quotaId  额度ID。
    * quotaType  额度类型。 0：代金券额度1：现金券额度
    * couponId  代金券ID。
    * customerId  客户账号ID。
    * operationAmount  操作的面额值。单位：元。 发放时，等于面额值；回收时，指每次回收的具体值。
    * operationTime  操作时间。
    * result  操作结果。 0：成功-1：失败
    * remark  操作记录中的备注。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'operationType' => null,
        'quotaId' => null,
        'quotaType' => 'int32',
        'couponId' => null,
        'customerId' => null,
        'operationAmount' => 'double',
        'operationTime' => null,
        'result' => null,
        'remark' => null
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
    * id  该记录的ID。
    * operationType  操作类型。 1：发放2：手动回收3：解绑自动回收
    * quotaId  额度ID。
    * quotaType  额度类型。 0：代金券额度1：现金券额度
    * couponId  代金券ID。
    * customerId  客户账号ID。
    * operationAmount  操作的面额值。单位：元。 发放时，等于面额值；回收时，指每次回收的具体值。
    * operationTime  操作时间。
    * result  操作结果。 0：成功-1：失败
    * remark  操作记录中的备注。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'operationType' => 'operation_type',
            'quotaId' => 'quota_id',
            'quotaType' => 'quota_type',
            'couponId' => 'coupon_id',
            'customerId' => 'customer_id',
            'operationAmount' => 'operation_amount',
            'operationTime' => 'operation_time',
            'result' => 'result',
            'remark' => 'remark'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  该记录的ID。
    * operationType  操作类型。 1：发放2：手动回收3：解绑自动回收
    * quotaId  额度ID。
    * quotaType  额度类型。 0：代金券额度1：现金券额度
    * couponId  代金券ID。
    * customerId  客户账号ID。
    * operationAmount  操作的面额值。单位：元。 发放时，等于面额值；回收时，指每次回收的具体值。
    * operationTime  操作时间。
    * result  操作结果。 0：成功-1：失败
    * remark  操作记录中的备注。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'operationType' => 'setOperationType',
            'quotaId' => 'setQuotaId',
            'quotaType' => 'setQuotaType',
            'couponId' => 'setCouponId',
            'customerId' => 'setCustomerId',
            'operationAmount' => 'setOperationAmount',
            'operationTime' => 'setOperationTime',
            'result' => 'setResult',
            'remark' => 'setRemark'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  该记录的ID。
    * operationType  操作类型。 1：发放2：手动回收3：解绑自动回收
    * quotaId  额度ID。
    * quotaType  额度类型。 0：代金券额度1：现金券额度
    * couponId  代金券ID。
    * customerId  客户账号ID。
    * operationAmount  操作的面额值。单位：元。 发放时，等于面额值；回收时，指每次回收的具体值。
    * operationTime  操作时间。
    * result  操作结果。 0：成功-1：失败
    * remark  操作记录中的备注。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'operationType' => 'getOperationType',
            'quotaId' => 'getQuotaId',
            'quotaType' => 'getQuotaType',
            'couponId' => 'getCouponId',
            'customerId' => 'getCustomerId',
            'operationAmount' => 'getOperationAmount',
            'operationTime' => 'getOperationTime',
            'result' => 'getResult',
            'remark' => 'getRemark'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['operationType'] = isset($data['operationType']) ? $data['operationType'] : null;
        $this->container['quotaId'] = isset($data['quotaId']) ? $data['quotaId'] : null;
        $this->container['quotaType'] = isset($data['quotaType']) ? $data['quotaType'] : null;
        $this->container['couponId'] = isset($data['couponId']) ? $data['couponId'] : null;
        $this->container['customerId'] = isset($data['customerId']) ? $data['customerId'] : null;
        $this->container['operationAmount'] = isset($data['operationAmount']) ? $data['operationAmount'] : null;
        $this->container['operationTime'] = isset($data['operationTime']) ? $data['operationTime'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
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
    * Gets id
    *  该记录的ID。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 该记录的ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets operationType
    *  操作类型。 1：发放2：手动回收3：解绑自动回收
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
    * @param string|null $operationType 操作类型。 1：发放2：手动回收3：解绑自动回收
    *
    * @return $this
    */
    public function setOperationType($operationType)
    {
        $this->container['operationType'] = $operationType;
        return $this;
    }

    /**
    * Gets quotaId
    *  额度ID。
    *
    * @return string|null
    */
    public function getQuotaId()
    {
        return $this->container['quotaId'];
    }

    /**
    * Sets quotaId
    *
    * @param string|null $quotaId 额度ID。
    *
    * @return $this
    */
    public function setQuotaId($quotaId)
    {
        $this->container['quotaId'] = $quotaId;
        return $this;
    }

    /**
    * Gets quotaType
    *  额度类型。 0：代金券额度1：现金券额度
    *
    * @return int|null
    */
    public function getQuotaType()
    {
        return $this->container['quotaType'];
    }

    /**
    * Sets quotaType
    *
    * @param int|null $quotaType 额度类型。 0：代金券额度1：现金券额度
    *
    * @return $this
    */
    public function setQuotaType($quotaType)
    {
        $this->container['quotaType'] = $quotaType;
        return $this;
    }

    /**
    * Gets couponId
    *  代金券ID。
    *
    * @return string|null
    */
    public function getCouponId()
    {
        return $this->container['couponId'];
    }

    /**
    * Sets couponId
    *
    * @param string|null $couponId 代金券ID。
    *
    * @return $this
    */
    public function setCouponId($couponId)
    {
        $this->container['couponId'] = $couponId;
        return $this;
    }

    /**
    * Gets customerId
    *  客户账号ID。
    *
    * @return string|null
    */
    public function getCustomerId()
    {
        return $this->container['customerId'];
    }

    /**
    * Sets customerId
    *
    * @param string|null $customerId 客户账号ID。
    *
    * @return $this
    */
    public function setCustomerId($customerId)
    {
        $this->container['customerId'] = $customerId;
        return $this;
    }

    /**
    * Gets operationAmount
    *  操作的面额值。单位：元。 发放时，等于面额值；回收时，指每次回收的具体值。
    *
    * @return double|null
    */
    public function getOperationAmount()
    {
        return $this->container['operationAmount'];
    }

    /**
    * Sets operationAmount
    *
    * @param double|null $operationAmount 操作的面额值。单位：元。 发放时，等于面额值；回收时，指每次回收的具体值。
    *
    * @return $this
    */
    public function setOperationAmount($operationAmount)
    {
        $this->container['operationAmount'] = $operationAmount;
        return $this;
    }

    /**
    * Gets operationTime
    *  操作时间。
    *
    * @return string|null
    */
    public function getOperationTime()
    {
        return $this->container['operationTime'];
    }

    /**
    * Sets operationTime
    *
    * @param string|null $operationTime 操作时间。
    *
    * @return $this
    */
    public function setOperationTime($operationTime)
    {
        $this->container['operationTime'] = $operationTime;
        return $this;
    }

    /**
    * Gets result
    *  操作结果。 0：成功-1：失败
    *
    * @return string|null
    */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
    * Sets result
    *
    * @param string|null $result 操作结果。 0：成功-1：失败
    *
    * @return $this
    */
    public function setResult($result)
    {
        $this->container['result'] = $result;
        return $this;
    }

    /**
    * Gets remark
    *  操作记录中的备注。
    *
    * @return string|null
    */
    public function getRemark()
    {
        return $this->container['remark'];
    }

    /**
    * Sets remark
    *
    * @param string|null $remark 操作记录中的备注。
    *
    * @return $this
    */
    public function setRemark($remark)
    {
        $this->container['remark'] = $remark;
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

