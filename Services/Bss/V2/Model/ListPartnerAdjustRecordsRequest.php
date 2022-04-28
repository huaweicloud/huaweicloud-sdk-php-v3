<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListPartnerAdjustRecordsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListPartnerAdjustRecordsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * customerId  客户账号ID。您可以调用[查询客户列表](https://support.huaweicloud.com/api-bpconsole/mc_00021.html)接口获取customer_id。为空表示查询所有的调账记录。不为空表示仅查询与该客户相关的调账记录。默认查询所有客户的调账记录。 说明： 此处的客户包含伙伴的子客户，以及华为云伙伴能力中心关联的精英服务商（二级经销商）。
    * operationType  操作类型。SOURCE_OPERATION_BEADJUST：拨款,SOURCE_OPERATION_BERETRIEVE：回收,SOURCE_OPERATION_BEUNBIND：解绑回收,不传递默认查询所有类型。
    * operationTimeBegin  调账起始时间。UTC时间，格式为：2016-03-28T14:45:38Z
    * operationTimeEnd  调账截止时间。UTC时间，格式为：2016-03-28T14:45:38Z
    * transId  事务ID。
    * offset  偏移量，从0开始。默认值为0。 说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  每页的显示条数。默认值为10。
    * indirectPartnerId  精英服务商ID。获取方法请参见[查询精英服务商列表](https://support.huaweicloud.com/api-bpconsole/espp_00003.html)。华为云伙伴能力中心（一级经销商）查询精英服务商（二级经销商）的子客户调账记录时，需携带此参数；否则只能查询自己的子客户调账记录。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'customerId' => 'string',
            'operationType' => 'string',
            'operationTimeBegin' => 'string',
            'operationTimeEnd' => 'string',
            'transId' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'indirectPartnerId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * customerId  客户账号ID。您可以调用[查询客户列表](https://support.huaweicloud.com/api-bpconsole/mc_00021.html)接口获取customer_id。为空表示查询所有的调账记录。不为空表示仅查询与该客户相关的调账记录。默认查询所有客户的调账记录。 说明： 此处的客户包含伙伴的子客户，以及华为云伙伴能力中心关联的精英服务商（二级经销商）。
    * operationType  操作类型。SOURCE_OPERATION_BEADJUST：拨款,SOURCE_OPERATION_BERETRIEVE：回收,SOURCE_OPERATION_BEUNBIND：解绑回收,不传递默认查询所有类型。
    * operationTimeBegin  调账起始时间。UTC时间，格式为：2016-03-28T14:45:38Z
    * operationTimeEnd  调账截止时间。UTC时间，格式为：2016-03-28T14:45:38Z
    * transId  事务ID。
    * offset  偏移量，从0开始。默认值为0。 说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  每页的显示条数。默认值为10。
    * indirectPartnerId  精英服务商ID。获取方法请参见[查询精英服务商列表](https://support.huaweicloud.com/api-bpconsole/espp_00003.html)。华为云伙伴能力中心（一级经销商）查询精英服务商（二级经销商）的子客户调账记录时，需携带此参数；否则只能查询自己的子客户调账记录。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'customerId' => null,
        'operationType' => null,
        'operationTimeBegin' => null,
        'operationTimeEnd' => null,
        'transId' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'indirectPartnerId' => null
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
    * customerId  客户账号ID。您可以调用[查询客户列表](https://support.huaweicloud.com/api-bpconsole/mc_00021.html)接口获取customer_id。为空表示查询所有的调账记录。不为空表示仅查询与该客户相关的调账记录。默认查询所有客户的调账记录。 说明： 此处的客户包含伙伴的子客户，以及华为云伙伴能力中心关联的精英服务商（二级经销商）。
    * operationType  操作类型。SOURCE_OPERATION_BEADJUST：拨款,SOURCE_OPERATION_BERETRIEVE：回收,SOURCE_OPERATION_BEUNBIND：解绑回收,不传递默认查询所有类型。
    * operationTimeBegin  调账起始时间。UTC时间，格式为：2016-03-28T14:45:38Z
    * operationTimeEnd  调账截止时间。UTC时间，格式为：2016-03-28T14:45:38Z
    * transId  事务ID。
    * offset  偏移量，从0开始。默认值为0。 说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  每页的显示条数。默认值为10。
    * indirectPartnerId  精英服务商ID。获取方法请参见[查询精英服务商列表](https://support.huaweicloud.com/api-bpconsole/espp_00003.html)。华为云伙伴能力中心（一级经销商）查询精英服务商（二级经销商）的子客户调账记录时，需携带此参数；否则只能查询自己的子客户调账记录。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'customerId' => 'customer_id',
            'operationType' => 'operation_type',
            'operationTimeBegin' => 'operation_time_begin',
            'operationTimeEnd' => 'operation_time_end',
            'transId' => 'trans_id',
            'offset' => 'offset',
            'limit' => 'limit',
            'indirectPartnerId' => 'indirect_partner_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * customerId  客户账号ID。您可以调用[查询客户列表](https://support.huaweicloud.com/api-bpconsole/mc_00021.html)接口获取customer_id。为空表示查询所有的调账记录。不为空表示仅查询与该客户相关的调账记录。默认查询所有客户的调账记录。 说明： 此处的客户包含伙伴的子客户，以及华为云伙伴能力中心关联的精英服务商（二级经销商）。
    * operationType  操作类型。SOURCE_OPERATION_BEADJUST：拨款,SOURCE_OPERATION_BERETRIEVE：回收,SOURCE_OPERATION_BEUNBIND：解绑回收,不传递默认查询所有类型。
    * operationTimeBegin  调账起始时间。UTC时间，格式为：2016-03-28T14:45:38Z
    * operationTimeEnd  调账截止时间。UTC时间，格式为：2016-03-28T14:45:38Z
    * transId  事务ID。
    * offset  偏移量，从0开始。默认值为0。 说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  每页的显示条数。默认值为10。
    * indirectPartnerId  精英服务商ID。获取方法请参见[查询精英服务商列表](https://support.huaweicloud.com/api-bpconsole/espp_00003.html)。华为云伙伴能力中心（一级经销商）查询精英服务商（二级经销商）的子客户调账记录时，需携带此参数；否则只能查询自己的子客户调账记录。
    *
    * @var string[]
    */
    protected static $setters = [
            'customerId' => 'setCustomerId',
            'operationType' => 'setOperationType',
            'operationTimeBegin' => 'setOperationTimeBegin',
            'operationTimeEnd' => 'setOperationTimeEnd',
            'transId' => 'setTransId',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'indirectPartnerId' => 'setIndirectPartnerId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * customerId  客户账号ID。您可以调用[查询客户列表](https://support.huaweicloud.com/api-bpconsole/mc_00021.html)接口获取customer_id。为空表示查询所有的调账记录。不为空表示仅查询与该客户相关的调账记录。默认查询所有客户的调账记录。 说明： 此处的客户包含伙伴的子客户，以及华为云伙伴能力中心关联的精英服务商（二级经销商）。
    * operationType  操作类型。SOURCE_OPERATION_BEADJUST：拨款,SOURCE_OPERATION_BERETRIEVE：回收,SOURCE_OPERATION_BEUNBIND：解绑回收,不传递默认查询所有类型。
    * operationTimeBegin  调账起始时间。UTC时间，格式为：2016-03-28T14:45:38Z
    * operationTimeEnd  调账截止时间。UTC时间，格式为：2016-03-28T14:45:38Z
    * transId  事务ID。
    * offset  偏移量，从0开始。默认值为0。 说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  每页的显示条数。默认值为10。
    * indirectPartnerId  精英服务商ID。获取方法请参见[查询精英服务商列表](https://support.huaweicloud.com/api-bpconsole/espp_00003.html)。华为云伙伴能力中心（一级经销商）查询精英服务商（二级经销商）的子客户调账记录时，需携带此参数；否则只能查询自己的子客户调账记录。
    *
    * @var string[]
    */
    protected static $getters = [
            'customerId' => 'getCustomerId',
            'operationType' => 'getOperationType',
            'operationTimeBegin' => 'getOperationTimeBegin',
            'operationTimeEnd' => 'getOperationTimeEnd',
            'transId' => 'getTransId',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'indirectPartnerId' => 'getIndirectPartnerId'
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
        $this->container['operationType'] = isset($data['operationType']) ? $data['operationType'] : null;
        $this->container['operationTimeBegin'] = isset($data['operationTimeBegin']) ? $data['operationTimeBegin'] : null;
        $this->container['operationTimeEnd'] = isset($data['operationTimeEnd']) ? $data['operationTimeEnd'] : null;
        $this->container['transId'] = isset($data['transId']) ? $data['transId'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : 0;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : 10;
        $this->container['indirectPartnerId'] = isset($data['indirectPartnerId']) ? $data['indirectPartnerId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
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
    * Gets customerId
    *  客户账号ID。您可以调用[查询客户列表](https://support.huaweicloud.com/api-bpconsole/mc_00021.html)接口获取customer_id。为空表示查询所有的调账记录。不为空表示仅查询与该客户相关的调账记录。默认查询所有客户的调账记录。 说明： 此处的客户包含伙伴的子客户，以及华为云伙伴能力中心关联的精英服务商（二级经销商）。
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
    * @param string|null $customerId 客户账号ID。您可以调用[查询客户列表](https://support.huaweicloud.com/api-bpconsole/mc_00021.html)接口获取customer_id。为空表示查询所有的调账记录。不为空表示仅查询与该客户相关的调账记录。默认查询所有客户的调账记录。 说明： 此处的客户包含伙伴的子客户，以及华为云伙伴能力中心关联的精英服务商（二级经销商）。
    *
    * @return $this
    */
    public function setCustomerId($customerId)
    {
        $this->container['customerId'] = $customerId;
        return $this;
    }

    /**
    * Gets operationType
    *  操作类型。SOURCE_OPERATION_BEADJUST：拨款,SOURCE_OPERATION_BERETRIEVE：回收,SOURCE_OPERATION_BEUNBIND：解绑回收,不传递默认查询所有类型。
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
    * @param string|null $operationType 操作类型。SOURCE_OPERATION_BEADJUST：拨款,SOURCE_OPERATION_BERETRIEVE：回收,SOURCE_OPERATION_BEUNBIND：解绑回收,不传递默认查询所有类型。
    *
    * @return $this
    */
    public function setOperationType($operationType)
    {
        $this->container['operationType'] = $operationType;
        return $this;
    }

    /**
    * Gets operationTimeBegin
    *  调账起始时间。UTC时间，格式为：2016-03-28T14:45:38Z
    *
    * @return string|null
    */
    public function getOperationTimeBegin()
    {
        return $this->container['operationTimeBegin'];
    }

    /**
    * Sets operationTimeBegin
    *
    * @param string|null $operationTimeBegin 调账起始时间。UTC时间，格式为：2016-03-28T14:45:38Z
    *
    * @return $this
    */
    public function setOperationTimeBegin($operationTimeBegin)
    {
        $this->container['operationTimeBegin'] = $operationTimeBegin;
        return $this;
    }

    /**
    * Gets operationTimeEnd
    *  调账截止时间。UTC时间，格式为：2016-03-28T14:45:38Z
    *
    * @return string|null
    */
    public function getOperationTimeEnd()
    {
        return $this->container['operationTimeEnd'];
    }

    /**
    * Sets operationTimeEnd
    *
    * @param string|null $operationTimeEnd 调账截止时间。UTC时间，格式为：2016-03-28T14:45:38Z
    *
    * @return $this
    */
    public function setOperationTimeEnd($operationTimeEnd)
    {
        $this->container['operationTimeEnd'] = $operationTimeEnd;
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
    * Gets offset
    *  偏移量，从0开始。默认值为0。 说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 偏移量，从0开始。默认值为0。 说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  每页的显示条数。默认值为10。
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 每页的显示条数。默认值为10。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets indirectPartnerId
    *  精英服务商ID。获取方法请参见[查询精英服务商列表](https://support.huaweicloud.com/api-bpconsole/espp_00003.html)。华为云伙伴能力中心（一级经销商）查询精英服务商（二级经销商）的子客户调账记录时，需携带此参数；否则只能查询自己的子客户调账记录。
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
    * @param string|null $indirectPartnerId 精英服务商ID。获取方法请参见[查询精英服务商列表](https://support.huaweicloud.com/api-bpconsole/espp_00003.html)。华为云伙伴能力中心（一级经销商）查询精英服务商（二级经销商）的子客户调账记录时，需携带此参数；否则只能查询自己的子客户调账记录。
    *
    * @return $this
    */
    public function setIndirectPartnerId($indirectPartnerId)
    {
        $this->container['indirectPartnerId'] = $indirectPartnerId;
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

