<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AdjustRecordV3 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AdjustRecordV3';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * customerId  客户账号ID。
    * customerName  客户名称。
    * operationType  调账类型。 SOURCE_OPERATION_BEADJUST：拨款SOURCE_OPERATION_BERETRIEVE：回收SOURCE_OPERATION_BEUNBIND：解绑回收
    * amount  调账的总金额。
    * currency  币种。 CNY：人民币
    * applyScene  使用场景。
    * operationTime  调账操作的时间。 UTC时间，格式为：2016-03-28T14:45:38Z
    * measureId  调账单位。 1：元
    * transId  事务ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'customerId' => 'string',
            'customerName' => 'string',
            'operationType' => 'string',
            'amount' => 'string',
            'currency' => 'string',
            'applyScene' => 'string',
            'operationTime' => 'string',
            'measureId' => 'int',
            'transId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * customerId  客户账号ID。
    * customerName  客户名称。
    * operationType  调账类型。 SOURCE_OPERATION_BEADJUST：拨款SOURCE_OPERATION_BERETRIEVE：回收SOURCE_OPERATION_BEUNBIND：解绑回收
    * amount  调账的总金额。
    * currency  币种。 CNY：人民币
    * applyScene  使用场景。
    * operationTime  调账操作的时间。 UTC时间，格式为：2016-03-28T14:45:38Z
    * measureId  调账单位。 1：元
    * transId  事务ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'customerId' => null,
        'customerName' => null,
        'operationType' => null,
        'amount' => null,
        'currency' => null,
        'applyScene' => null,
        'operationTime' => null,
        'measureId' => 'int32',
        'transId' => null
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
    * customerId  客户账号ID。
    * customerName  客户名称。
    * operationType  调账类型。 SOURCE_OPERATION_BEADJUST：拨款SOURCE_OPERATION_BERETRIEVE：回收SOURCE_OPERATION_BEUNBIND：解绑回收
    * amount  调账的总金额。
    * currency  币种。 CNY：人民币
    * applyScene  使用场景。
    * operationTime  调账操作的时间。 UTC时间，格式为：2016-03-28T14:45:38Z
    * measureId  调账单位。 1：元
    * transId  事务ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'customerId' => 'customer_id',
            'customerName' => 'customer_name',
            'operationType' => 'operation_type',
            'amount' => 'amount',
            'currency' => 'currency',
            'applyScene' => 'apply_scene',
            'operationTime' => 'operation_time',
            'measureId' => 'measure_id',
            'transId' => 'trans_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * customerId  客户账号ID。
    * customerName  客户名称。
    * operationType  调账类型。 SOURCE_OPERATION_BEADJUST：拨款SOURCE_OPERATION_BERETRIEVE：回收SOURCE_OPERATION_BEUNBIND：解绑回收
    * amount  调账的总金额。
    * currency  币种。 CNY：人民币
    * applyScene  使用场景。
    * operationTime  调账操作的时间。 UTC时间，格式为：2016-03-28T14:45:38Z
    * measureId  调账单位。 1：元
    * transId  事务ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'customerId' => 'setCustomerId',
            'customerName' => 'setCustomerName',
            'operationType' => 'setOperationType',
            'amount' => 'setAmount',
            'currency' => 'setCurrency',
            'applyScene' => 'setApplyScene',
            'operationTime' => 'setOperationTime',
            'measureId' => 'setMeasureId',
            'transId' => 'setTransId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * customerId  客户账号ID。
    * customerName  客户名称。
    * operationType  调账类型。 SOURCE_OPERATION_BEADJUST：拨款SOURCE_OPERATION_BERETRIEVE：回收SOURCE_OPERATION_BEUNBIND：解绑回收
    * amount  调账的总金额。
    * currency  币种。 CNY：人民币
    * applyScene  使用场景。
    * operationTime  调账操作的时间。 UTC时间，格式为：2016-03-28T14:45:38Z
    * measureId  调账单位。 1：元
    * transId  事务ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'customerId' => 'getCustomerId',
            'customerName' => 'getCustomerName',
            'operationType' => 'getOperationType',
            'amount' => 'getAmount',
            'currency' => 'getCurrency',
            'applyScene' => 'getApplyScene',
            'operationTime' => 'getOperationTime',
            'measureId' => 'getMeasureId',
            'transId' => 'getTransId'
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
        $this->container['customerId'] = isset($data['customerId']) ? $data['customerId'] : null;
        $this->container['customerName'] = isset($data['customerName']) ? $data['customerName'] : null;
        $this->container['operationType'] = isset($data['operationType']) ? $data['operationType'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['applyScene'] = isset($data['applyScene']) ? $data['applyScene'] : null;
        $this->container['operationTime'] = isset($data['operationTime']) ? $data['operationTime'] : null;
        $this->container['measureId'] = isset($data['measureId']) ? $data['measureId'] : null;
        $this->container['transId'] = isset($data['transId']) ? $data['transId'] : null;
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
    * Gets customerName
    *  客户名称。
    *
    * @return string|null
    */
    public function getCustomerName()
    {
        return $this->container['customerName'];
    }

    /**
    * Sets customerName
    *
    * @param string|null $customerName 客户名称。
    *
    * @return $this
    */
    public function setCustomerName($customerName)
    {
        $this->container['customerName'] = $customerName;
        return $this;
    }

    /**
    * Gets operationType
    *  调账类型。 SOURCE_OPERATION_BEADJUST：拨款SOURCE_OPERATION_BERETRIEVE：回收SOURCE_OPERATION_BEUNBIND：解绑回收
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
    * @param string|null $operationType 调账类型。 SOURCE_OPERATION_BEADJUST：拨款SOURCE_OPERATION_BERETRIEVE：回收SOURCE_OPERATION_BEUNBIND：解绑回收
    *
    * @return $this
    */
    public function setOperationType($operationType)
    {
        $this->container['operationType'] = $operationType;
        return $this;
    }

    /**
    * Gets amount
    *  调账的总金额。
    *
    * @return string|null
    */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
    * Sets amount
    *
    * @param string|null $amount 调账的总金额。
    *
    * @return $this
    */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;
        return $this;
    }

    /**
    * Gets currency
    *  币种。 CNY：人民币
    *
    * @return string|null
    */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
    * Sets currency
    *
    * @param string|null $currency 币种。 CNY：人民币
    *
    * @return $this
    */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;
        return $this;
    }

    /**
    * Gets applyScene
    *  使用场景。
    *
    * @return string|null
    */
    public function getApplyScene()
    {
        return $this->container['applyScene'];
    }

    /**
    * Sets applyScene
    *
    * @param string|null $applyScene 使用场景。
    *
    * @return $this
    */
    public function setApplyScene($applyScene)
    {
        $this->container['applyScene'] = $applyScene;
        return $this;
    }

    /**
    * Gets operationTime
    *  调账操作的时间。 UTC时间，格式为：2016-03-28T14:45:38Z
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
    * @param string|null $operationTime 调账操作的时间。 UTC时间，格式为：2016-03-28T14:45:38Z
    *
    * @return $this
    */
    public function setOperationTime($operationTime)
    {
        $this->container['operationTime'] = $operationTime;
        return $this;
    }

    /**
    * Gets measureId
    *  调账单位。 1：元
    *
    * @return int|null
    */
    public function getMeasureId()
    {
        return $this->container['measureId'];
    }

    /**
    * Sets measureId
    *
    * @param int|null $measureId 调账单位。 1：元
    *
    * @return $this
    */
    public function setMeasureId($measureId)
    {
        $this->container['measureId'] = $measureId;
        return $this;
    }

    /**
    * Gets transId
    *  事务ID。
    *
    * @return string|null
    */
    public function getTransId()
    {
        return $this->container['transId'];
    }

    /**
    * Sets transId
    *
    * @param string|null $transId 事务ID。
    *
    * @return $this
    */
    public function setTransId($transId)
    {
        $this->container['transId'] = $transId;
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

