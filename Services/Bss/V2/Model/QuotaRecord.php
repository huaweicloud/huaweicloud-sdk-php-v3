<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QuotaRecord implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QuotaRecord';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  记录ID。
    * operator  操作员的账号名称。
    * operationType  操作类型。 10：发放额度11：回收额度
    * quotaId  云经销商的代金券额度ID。 即华为云总经销商给云经销商发放代金券额度时，产生的云经销商的代金券额度ID，或者从云经销商回收代金券额度时，云经销商的代金券额度ID。
    * parentQuotaId  父额度ID。 这即华为云总经销商给云经销商发放代金券额度时，华为云总经销商的额度ID，或者从云经销商回收代金券额度时，回收的华为云总经销商的额度ID。
    * amount  发放回收的金额。 取值大于0且精确到小数点后2位，单位：元。
    * operationTime  操作时间，UTC时间，UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。
    * result  操作结果。 0：成功-1：失败
    * indirectPartnerAccountName  云经销商的账号名。
    * indirectPartnerId  云经销商ID。
    * indirectPartnerName  云经销商的公司名称。
    * remark  备注。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'operator' => 'string',
            'operationType' => 'string',
            'quotaId' => 'string',
            'parentQuotaId' => 'string',
            'amount' => 'double',
            'operationTime' => 'string',
            'result' => 'string',
            'indirectPartnerAccountName' => 'string',
            'indirectPartnerId' => 'string',
            'indirectPartnerName' => 'string',
            'remark' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  记录ID。
    * operator  操作员的账号名称。
    * operationType  操作类型。 10：发放额度11：回收额度
    * quotaId  云经销商的代金券额度ID。 即华为云总经销商给云经销商发放代金券额度时，产生的云经销商的代金券额度ID，或者从云经销商回收代金券额度时，云经销商的代金券额度ID。
    * parentQuotaId  父额度ID。 这即华为云总经销商给云经销商发放代金券额度时，华为云总经销商的额度ID，或者从云经销商回收代金券额度时，回收的华为云总经销商的额度ID。
    * amount  发放回收的金额。 取值大于0且精确到小数点后2位，单位：元。
    * operationTime  操作时间，UTC时间，UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。
    * result  操作结果。 0：成功-1：失败
    * indirectPartnerAccountName  云经销商的账号名。
    * indirectPartnerId  云经销商ID。
    * indirectPartnerName  云经销商的公司名称。
    * remark  备注。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'operator' => null,
        'operationType' => null,
        'quotaId' => null,
        'parentQuotaId' => null,
        'amount' => 'double',
        'operationTime' => null,
        'result' => null,
        'indirectPartnerAccountName' => null,
        'indirectPartnerId' => null,
        'indirectPartnerName' => null,
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
    * id  记录ID。
    * operator  操作员的账号名称。
    * operationType  操作类型。 10：发放额度11：回收额度
    * quotaId  云经销商的代金券额度ID。 即华为云总经销商给云经销商发放代金券额度时，产生的云经销商的代金券额度ID，或者从云经销商回收代金券额度时，云经销商的代金券额度ID。
    * parentQuotaId  父额度ID。 这即华为云总经销商给云经销商发放代金券额度时，华为云总经销商的额度ID，或者从云经销商回收代金券额度时，回收的华为云总经销商的额度ID。
    * amount  发放回收的金额。 取值大于0且精确到小数点后2位，单位：元。
    * operationTime  操作时间，UTC时间，UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。
    * result  操作结果。 0：成功-1：失败
    * indirectPartnerAccountName  云经销商的账号名。
    * indirectPartnerId  云经销商ID。
    * indirectPartnerName  云经销商的公司名称。
    * remark  备注。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'operator' => 'operator',
            'operationType' => 'operation_type',
            'quotaId' => 'quota_id',
            'parentQuotaId' => 'parent_quota_id',
            'amount' => 'amount',
            'operationTime' => 'operation_time',
            'result' => 'result',
            'indirectPartnerAccountName' => 'indirect_partner_account_name',
            'indirectPartnerId' => 'indirect_partner_id',
            'indirectPartnerName' => 'indirect_partner_name',
            'remark' => 'remark'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  记录ID。
    * operator  操作员的账号名称。
    * operationType  操作类型。 10：发放额度11：回收额度
    * quotaId  云经销商的代金券额度ID。 即华为云总经销商给云经销商发放代金券额度时，产生的云经销商的代金券额度ID，或者从云经销商回收代金券额度时，云经销商的代金券额度ID。
    * parentQuotaId  父额度ID。 这即华为云总经销商给云经销商发放代金券额度时，华为云总经销商的额度ID，或者从云经销商回收代金券额度时，回收的华为云总经销商的额度ID。
    * amount  发放回收的金额。 取值大于0且精确到小数点后2位，单位：元。
    * operationTime  操作时间，UTC时间，UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。
    * result  操作结果。 0：成功-1：失败
    * indirectPartnerAccountName  云经销商的账号名。
    * indirectPartnerId  云经销商ID。
    * indirectPartnerName  云经销商的公司名称。
    * remark  备注。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'operator' => 'setOperator',
            'operationType' => 'setOperationType',
            'quotaId' => 'setQuotaId',
            'parentQuotaId' => 'setParentQuotaId',
            'amount' => 'setAmount',
            'operationTime' => 'setOperationTime',
            'result' => 'setResult',
            'indirectPartnerAccountName' => 'setIndirectPartnerAccountName',
            'indirectPartnerId' => 'setIndirectPartnerId',
            'indirectPartnerName' => 'setIndirectPartnerName',
            'remark' => 'setRemark'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  记录ID。
    * operator  操作员的账号名称。
    * operationType  操作类型。 10：发放额度11：回收额度
    * quotaId  云经销商的代金券额度ID。 即华为云总经销商给云经销商发放代金券额度时，产生的云经销商的代金券额度ID，或者从云经销商回收代金券额度时，云经销商的代金券额度ID。
    * parentQuotaId  父额度ID。 这即华为云总经销商给云经销商发放代金券额度时，华为云总经销商的额度ID，或者从云经销商回收代金券额度时，回收的华为云总经销商的额度ID。
    * amount  发放回收的金额。 取值大于0且精确到小数点后2位，单位：元。
    * operationTime  操作时间，UTC时间，UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。
    * result  操作结果。 0：成功-1：失败
    * indirectPartnerAccountName  云经销商的账号名。
    * indirectPartnerId  云经销商ID。
    * indirectPartnerName  云经销商的公司名称。
    * remark  备注。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'operator' => 'getOperator',
            'operationType' => 'getOperationType',
            'quotaId' => 'getQuotaId',
            'parentQuotaId' => 'getParentQuotaId',
            'amount' => 'getAmount',
            'operationTime' => 'getOperationTime',
            'result' => 'getResult',
            'indirectPartnerAccountName' => 'getIndirectPartnerAccountName',
            'indirectPartnerId' => 'getIndirectPartnerId',
            'indirectPartnerName' => 'getIndirectPartnerName',
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
        $this->container['operator'] = isset($data['operator']) ? $data['operator'] : null;
        $this->container['operationType'] = isset($data['operationType']) ? $data['operationType'] : null;
        $this->container['quotaId'] = isset($data['quotaId']) ? $data['quotaId'] : null;
        $this->container['parentQuotaId'] = isset($data['parentQuotaId']) ? $data['parentQuotaId'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['operationTime'] = isset($data['operationTime']) ? $data['operationTime'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['indirectPartnerAccountName'] = isset($data['indirectPartnerAccountName']) ? $data['indirectPartnerAccountName'] : null;
        $this->container['indirectPartnerId'] = isset($data['indirectPartnerId']) ? $data['indirectPartnerId'] : null;
        $this->container['indirectPartnerName'] = isset($data['indirectPartnerName']) ? $data['indirectPartnerName'] : null;
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
    *  记录ID。
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
    * @param string|null $id 记录ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets operator
    *  操作员的账号名称。
    *
    * @return string|null
    */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
    * Sets operator
    *
    * @param string|null $operator 操作员的账号名称。
    *
    * @return $this
    */
    public function setOperator($operator)
    {
        $this->container['operator'] = $operator;
        return $this;
    }

    /**
    * Gets operationType
    *  操作类型。 10：发放额度11：回收额度
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
    * @param string|null $operationType 操作类型。 10：发放额度11：回收额度
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
    *  云经销商的代金券额度ID。 即华为云总经销商给云经销商发放代金券额度时，产生的云经销商的代金券额度ID，或者从云经销商回收代金券额度时，云经销商的代金券额度ID。
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
    * @param string|null $quotaId 云经销商的代金券额度ID。 即华为云总经销商给云经销商发放代金券额度时，产生的云经销商的代金券额度ID，或者从云经销商回收代金券额度时，云经销商的代金券额度ID。
    *
    * @return $this
    */
    public function setQuotaId($quotaId)
    {
        $this->container['quotaId'] = $quotaId;
        return $this;
    }

    /**
    * Gets parentQuotaId
    *  父额度ID。 这即华为云总经销商给云经销商发放代金券额度时，华为云总经销商的额度ID，或者从云经销商回收代金券额度时，回收的华为云总经销商的额度ID。
    *
    * @return string|null
    */
    public function getParentQuotaId()
    {
        return $this->container['parentQuotaId'];
    }

    /**
    * Sets parentQuotaId
    *
    * @param string|null $parentQuotaId 父额度ID。 这即华为云总经销商给云经销商发放代金券额度时，华为云总经销商的额度ID，或者从云经销商回收代金券额度时，回收的华为云总经销商的额度ID。
    *
    * @return $this
    */
    public function setParentQuotaId($parentQuotaId)
    {
        $this->container['parentQuotaId'] = $parentQuotaId;
        return $this;
    }

    /**
    * Gets amount
    *  发放回收的金额。 取值大于0且精确到小数点后2位，单位：元。
    *
    * @return double|null
    */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
    * Sets amount
    *
    * @param double|null $amount 发放回收的金额。 取值大于0且精确到小数点后2位，单位：元。
    *
    * @return $this
    */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;
        return $this;
    }

    /**
    * Gets operationTime
    *  操作时间，UTC时间，UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。
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
    * @param string|null $operationTime 操作时间，UTC时间，UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。
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
    * Gets indirectPartnerAccountName
    *  云经销商的账号名。
    *
    * @return string|null
    */
    public function getIndirectPartnerAccountName()
    {
        return $this->container['indirectPartnerAccountName'];
    }

    /**
    * Sets indirectPartnerAccountName
    *
    * @param string|null $indirectPartnerAccountName 云经销商的账号名。
    *
    * @return $this
    */
    public function setIndirectPartnerAccountName($indirectPartnerAccountName)
    {
        $this->container['indirectPartnerAccountName'] = $indirectPartnerAccountName;
        return $this;
    }

    /**
    * Gets indirectPartnerId
    *  云经销商ID。
    *
    * @return string|null
    */
    public function getIndirectPartnerId()
    {
        return $this->container['indirectPartnerId'];
    }

    /**
    * Sets indirectPartnerId
    *
    * @param string|null $indirectPartnerId 云经销商ID。
    *
    * @return $this
    */
    public function setIndirectPartnerId($indirectPartnerId)
    {
        $this->container['indirectPartnerId'] = $indirectPartnerId;
        return $this;
    }

    /**
    * Gets indirectPartnerName
    *  云经销商的公司名称。
    *
    * @return string|null
    */
    public function getIndirectPartnerName()
    {
        return $this->container['indirectPartnerName'];
    }

    /**
    * Sets indirectPartnerName
    *
    * @param string|null $indirectPartnerName 云经销商的公司名称。
    *
    * @return $this
    */
    public function setIndirectPartnerName($indirectPartnerName)
    {
        $this->container['indirectPartnerName'] = $indirectPartnerName;
        return $this;
    }

    /**
    * Gets remark
    *  备注。
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
    * @param string|null $remark 备注。
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

