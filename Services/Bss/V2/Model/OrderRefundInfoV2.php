<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OrderRefundInfoV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OrderRefundInfoV2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  该记录的ID。
    * amount  金额。 金额为负数，表示退订金额。金额为正数，表示已消费金额或收取的退订手续费。
    * measureId  金额的度量单位。 1：元
    * customerId  客户账号ID。
    * resourceTypeCode  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。
    * serviceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * resourceTypeName  资源类型名称。例如ECS的资源类型名称为“云主机”。
    * serviceTypeName  云服务类型名称。例如ECS的云服务类型名称为“弹性云服务器”。
    * regionCode  云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。
    * baseOrderId  退订金额、已消费金额或收取退订手续费对应的原订单ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'amount' => 'float',
            'measureId' => 'string',
            'customerId' => 'string',
            'resourceTypeCode' => 'string',
            'serviceTypeCode' => 'string',
            'resourceTypeName' => 'string',
            'serviceTypeName' => 'string',
            'regionCode' => 'string',
            'baseOrderId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  该记录的ID。
    * amount  金额。 金额为负数，表示退订金额。金额为正数，表示已消费金额或收取的退订手续费。
    * measureId  金额的度量单位。 1：元
    * customerId  客户账号ID。
    * resourceTypeCode  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。
    * serviceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * resourceTypeName  资源类型名称。例如ECS的资源类型名称为“云主机”。
    * serviceTypeName  云服务类型名称。例如ECS的云服务类型名称为“弹性云服务器”。
    * regionCode  云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。
    * baseOrderId  退订金额、已消费金额或收取退订手续费对应的原订单ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'amount' => 'bigdecimal',
        'measureId' => null,
        'customerId' => null,
        'resourceTypeCode' => null,
        'serviceTypeCode' => null,
        'resourceTypeName' => null,
        'serviceTypeName' => null,
        'regionCode' => null,
        'baseOrderId' => null
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
    * amount  金额。 金额为负数，表示退订金额。金额为正数，表示已消费金额或收取的退订手续费。
    * measureId  金额的度量单位。 1：元
    * customerId  客户账号ID。
    * resourceTypeCode  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。
    * serviceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * resourceTypeName  资源类型名称。例如ECS的资源类型名称为“云主机”。
    * serviceTypeName  云服务类型名称。例如ECS的云服务类型名称为“弹性云服务器”。
    * regionCode  云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。
    * baseOrderId  退订金额、已消费金额或收取退订手续费对应的原订单ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'amount' => 'amount',
            'measureId' => 'measure_id',
            'customerId' => 'customer_id',
            'resourceTypeCode' => 'resource_type_code',
            'serviceTypeCode' => 'service_type_code',
            'resourceTypeName' => 'resource_type_name',
            'serviceTypeName' => 'service_type_name',
            'regionCode' => 'region_code',
            'baseOrderId' => 'base_order_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  该记录的ID。
    * amount  金额。 金额为负数，表示退订金额。金额为正数，表示已消费金额或收取的退订手续费。
    * measureId  金额的度量单位。 1：元
    * customerId  客户账号ID。
    * resourceTypeCode  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。
    * serviceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * resourceTypeName  资源类型名称。例如ECS的资源类型名称为“云主机”。
    * serviceTypeName  云服务类型名称。例如ECS的云服务类型名称为“弹性云服务器”。
    * regionCode  云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。
    * baseOrderId  退订金额、已消费金额或收取退订手续费对应的原订单ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'amount' => 'setAmount',
            'measureId' => 'setMeasureId',
            'customerId' => 'setCustomerId',
            'resourceTypeCode' => 'setResourceTypeCode',
            'serviceTypeCode' => 'setServiceTypeCode',
            'resourceTypeName' => 'setResourceTypeName',
            'serviceTypeName' => 'setServiceTypeName',
            'regionCode' => 'setRegionCode',
            'baseOrderId' => 'setBaseOrderId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  该记录的ID。
    * amount  金额。 金额为负数，表示退订金额。金额为正数，表示已消费金额或收取的退订手续费。
    * measureId  金额的度量单位。 1：元
    * customerId  客户账号ID。
    * resourceTypeCode  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。
    * serviceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * resourceTypeName  资源类型名称。例如ECS的资源类型名称为“云主机”。
    * serviceTypeName  云服务类型名称。例如ECS的云服务类型名称为“弹性云服务器”。
    * regionCode  云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。
    * baseOrderId  退订金额、已消费金额或收取退订手续费对应的原订单ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'amount' => 'getAmount',
            'measureId' => 'getMeasureId',
            'customerId' => 'getCustomerId',
            'resourceTypeCode' => 'getResourceTypeCode',
            'serviceTypeCode' => 'getServiceTypeCode',
            'resourceTypeName' => 'getResourceTypeName',
            'serviceTypeName' => 'getServiceTypeName',
            'regionCode' => 'getRegionCode',
            'baseOrderId' => 'getBaseOrderId'
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
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['measureId'] = isset($data['measureId']) ? $data['measureId'] : null;
        $this->container['customerId'] = isset($data['customerId']) ? $data['customerId'] : null;
        $this->container['resourceTypeCode'] = isset($data['resourceTypeCode']) ? $data['resourceTypeCode'] : null;
        $this->container['serviceTypeCode'] = isset($data['serviceTypeCode']) ? $data['serviceTypeCode'] : null;
        $this->container['resourceTypeName'] = isset($data['resourceTypeName']) ? $data['resourceTypeName'] : null;
        $this->container['serviceTypeName'] = isset($data['serviceTypeName']) ? $data['serviceTypeName'] : null;
        $this->container['regionCode'] = isset($data['regionCode']) ? $data['regionCode'] : null;
        $this->container['baseOrderId'] = isset($data['baseOrderId']) ? $data['baseOrderId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['measureId'] === null) {
            $invalidProperties[] = "'measureId' can't be null";
        }
        if ($this->container['customerId'] === null) {
            $invalidProperties[] = "'customerId' can't be null";
        }
        if ($this->container['resourceTypeCode'] === null) {
            $invalidProperties[] = "'resourceTypeCode' can't be null";
        }
        if ($this->container['serviceTypeCode'] === null) {
            $invalidProperties[] = "'serviceTypeCode' can't be null";
        }
        if ($this->container['regionCode'] === null) {
            $invalidProperties[] = "'regionCode' can't be null";
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
    * Gets id
    *  该记录的ID。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 该记录的ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets amount
    *  金额。 金额为负数，表示退订金额。金额为正数，表示已消费金额或收取的退订手续费。
    *
    * @return float
    */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
    * Sets amount
    *
    * @param float $amount 金额。 金额为负数，表示退订金额。金额为正数，表示已消费金额或收取的退订手续费。
    *
    * @return $this
    */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;
        return $this;
    }

    /**
    * Gets measureId
    *  金额的度量单位。 1：元
    *
    * @return string
    */
    public function getMeasureId()
    {
        return $this->container['measureId'];
    }

    /**
    * Sets measureId
    *
    * @param string $measureId 金额的度量单位。 1：元
    *
    * @return $this
    */
    public function setMeasureId($measureId)
    {
        $this->container['measureId'] = $measureId;
        return $this;
    }

    /**
    * Gets customerId
    *  客户账号ID。
    *
    * @return string
    */
    public function getCustomerId()
    {
        return $this->container['customerId'];
    }

    /**
    * Sets customerId
    *
    * @param string $customerId 客户账号ID。
    *
    * @return $this
    */
    public function setCustomerId($customerId)
    {
        $this->container['customerId'] = $customerId;
        return $this;
    }

    /**
    * Gets resourceTypeCode
    *  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。
    *
    * @return string
    */
    public function getResourceTypeCode()
    {
        return $this->container['resourceTypeCode'];
    }

    /**
    * Sets resourceTypeCode
    *
    * @param string $resourceTypeCode 资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。
    *
    * @return $this
    */
    public function setResourceTypeCode($resourceTypeCode)
    {
        $this->container['resourceTypeCode'] = $resourceTypeCode;
        return $this;
    }

    /**
    * Gets serviceTypeCode
    *  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    *
    * @return string
    */
    public function getServiceTypeCode()
    {
        return $this->container['serviceTypeCode'];
    }

    /**
    * Sets serviceTypeCode
    *
    * @param string $serviceTypeCode 云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    *
    * @return $this
    */
    public function setServiceTypeCode($serviceTypeCode)
    {
        $this->container['serviceTypeCode'] = $serviceTypeCode;
        return $this;
    }

    /**
    * Gets resourceTypeName
    *  资源类型名称。例如ECS的资源类型名称为“云主机”。
    *
    * @return string|null
    */
    public function getResourceTypeName()
    {
        return $this->container['resourceTypeName'];
    }

    /**
    * Sets resourceTypeName
    *
    * @param string|null $resourceTypeName 资源类型名称。例如ECS的资源类型名称为“云主机”。
    *
    * @return $this
    */
    public function setResourceTypeName($resourceTypeName)
    {
        $this->container['resourceTypeName'] = $resourceTypeName;
        return $this;
    }

    /**
    * Gets serviceTypeName
    *  云服务类型名称。例如ECS的云服务类型名称为“弹性云服务器”。
    *
    * @return string|null
    */
    public function getServiceTypeName()
    {
        return $this->container['serviceTypeName'];
    }

    /**
    * Sets serviceTypeName
    *
    * @param string|null $serviceTypeName 云服务类型名称。例如ECS的云服务类型名称为“弹性云服务器”。
    *
    * @return $this
    */
    public function setServiceTypeName($serviceTypeName)
    {
        $this->container['serviceTypeName'] = $serviceTypeName;
        return $this;
    }

    /**
    * Gets regionCode
    *  云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。
    *
    * @return string
    */
    public function getRegionCode()
    {
        return $this->container['regionCode'];
    }

    /**
    * Sets regionCode
    *
    * @param string $regionCode 云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。
    *
    * @return $this
    */
    public function setRegionCode($regionCode)
    {
        $this->container['regionCode'] = $regionCode;
        return $this;
    }

    /**
    * Gets baseOrderId
    *  退订金额、已消费金额或收取退订手续费对应的原订单ID。
    *
    * @return string|null
    */
    public function getBaseOrderId()
    {
        return $this->container['baseOrderId'];
    }

    /**
    * Sets baseOrderId
    *
    * @param string|null $baseOrderId 退订金额、已消费金额或收取退订手续费对应的原订单ID。
    *
    * @return $this
    */
    public function setBaseOrderId($baseOrderId)
    {
        $this->container['baseOrderId'] = $baseOrderId;
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

