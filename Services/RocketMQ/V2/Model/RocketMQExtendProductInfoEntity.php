<?php

namespace HuaweiCloud\SDK\RocketMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RocketMQExtendProductInfoEntity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RocketMQExtendProductInfoEntity';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  实例类型。
    * productId  产品ID。
    * ecsFlavorId  该产品使用的ECS规格。
    * billingCode  账单计费类型。
    * archTypes  支持的CPU架构类型。
    * chargingMode  支持的计费模式类型。
    * ios  磁盘IO信息。
    * properties  properties
    * availableZones  有可用资源的可用区列表。
    * unavailableZones  资源售罄的可用区列表。
    * supportFeatures  支持的特性功能。
    * qingtianIncompatible  是否为擎天实例。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'productId' => 'string',
            'ecsFlavorId' => 'string',
            'billingCode' => 'string',
            'archTypes' => 'string[]',
            'chargingMode' => 'string[]',
            'ios' => '\HuaweiCloud\SDK\RocketMQ\V2\Model\RocketMQExtendProductIosEntity[]',
            'properties' => '\HuaweiCloud\SDK\RocketMQ\V2\Model\RocketMQExtendProductPropertiesEntity',
            'availableZones' => 'string[]',
            'unavailableZones' => 'string[]',
            'supportFeatures' => '\HuaweiCloud\SDK\RocketMQ\V2\Model\RocketMQProductSupportFeaturesEntity[]',
            'qingtianIncompatible' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  实例类型。
    * productId  产品ID。
    * ecsFlavorId  该产品使用的ECS规格。
    * billingCode  账单计费类型。
    * archTypes  支持的CPU架构类型。
    * chargingMode  支持的计费模式类型。
    * ios  磁盘IO信息。
    * properties  properties
    * availableZones  有可用资源的可用区列表。
    * unavailableZones  资源售罄的可用区列表。
    * supportFeatures  支持的特性功能。
    * qingtianIncompatible  是否为擎天实例。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'productId' => null,
        'ecsFlavorId' => null,
        'billingCode' => null,
        'archTypes' => null,
        'chargingMode' => null,
        'ios' => null,
        'properties' => null,
        'availableZones' => null,
        'unavailableZones' => null,
        'supportFeatures' => null,
        'qingtianIncompatible' => null
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
    * type  实例类型。
    * productId  产品ID。
    * ecsFlavorId  该产品使用的ECS规格。
    * billingCode  账单计费类型。
    * archTypes  支持的CPU架构类型。
    * chargingMode  支持的计费模式类型。
    * ios  磁盘IO信息。
    * properties  properties
    * availableZones  有可用资源的可用区列表。
    * unavailableZones  资源售罄的可用区列表。
    * supportFeatures  支持的特性功能。
    * qingtianIncompatible  是否为擎天实例。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'productId' => 'product_id',
            'ecsFlavorId' => 'ecs_flavor_id',
            'billingCode' => 'billing_code',
            'archTypes' => 'arch_types',
            'chargingMode' => 'charging_mode',
            'ios' => 'ios',
            'properties' => 'properties',
            'availableZones' => 'available_zones',
            'unavailableZones' => 'unavailable_zones',
            'supportFeatures' => 'support_features',
            'qingtianIncompatible' => 'qingtian_incompatible'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  实例类型。
    * productId  产品ID。
    * ecsFlavorId  该产品使用的ECS规格。
    * billingCode  账单计费类型。
    * archTypes  支持的CPU架构类型。
    * chargingMode  支持的计费模式类型。
    * ios  磁盘IO信息。
    * properties  properties
    * availableZones  有可用资源的可用区列表。
    * unavailableZones  资源售罄的可用区列表。
    * supportFeatures  支持的特性功能。
    * qingtianIncompatible  是否为擎天实例。
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'productId' => 'setProductId',
            'ecsFlavorId' => 'setEcsFlavorId',
            'billingCode' => 'setBillingCode',
            'archTypes' => 'setArchTypes',
            'chargingMode' => 'setChargingMode',
            'ios' => 'setIos',
            'properties' => 'setProperties',
            'availableZones' => 'setAvailableZones',
            'unavailableZones' => 'setUnavailableZones',
            'supportFeatures' => 'setSupportFeatures',
            'qingtianIncompatible' => 'setQingtianIncompatible'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  实例类型。
    * productId  产品ID。
    * ecsFlavorId  该产品使用的ECS规格。
    * billingCode  账单计费类型。
    * archTypes  支持的CPU架构类型。
    * chargingMode  支持的计费模式类型。
    * ios  磁盘IO信息。
    * properties  properties
    * availableZones  有可用资源的可用区列表。
    * unavailableZones  资源售罄的可用区列表。
    * supportFeatures  支持的特性功能。
    * qingtianIncompatible  是否为擎天实例。
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'productId' => 'getProductId',
            'ecsFlavorId' => 'getEcsFlavorId',
            'billingCode' => 'getBillingCode',
            'archTypes' => 'getArchTypes',
            'chargingMode' => 'getChargingMode',
            'ios' => 'getIos',
            'properties' => 'getProperties',
            'availableZones' => 'getAvailableZones',
            'unavailableZones' => 'getUnavailableZones',
            'supportFeatures' => 'getSupportFeatures',
            'qingtianIncompatible' => 'getQingtianIncompatible'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
        $this->container['ecsFlavorId'] = isset($data['ecsFlavorId']) ? $data['ecsFlavorId'] : null;
        $this->container['billingCode'] = isset($data['billingCode']) ? $data['billingCode'] : null;
        $this->container['archTypes'] = isset($data['archTypes']) ? $data['archTypes'] : null;
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
        $this->container['ios'] = isset($data['ios']) ? $data['ios'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
        $this->container['availableZones'] = isset($data['availableZones']) ? $data['availableZones'] : null;
        $this->container['unavailableZones'] = isset($data['unavailableZones']) ? $data['unavailableZones'] : null;
        $this->container['supportFeatures'] = isset($data['supportFeatures']) ? $data['supportFeatures'] : null;
        $this->container['qingtianIncompatible'] = isset($data['qingtianIncompatible']) ? $data['qingtianIncompatible'] : null;
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
    * Gets type
    *  实例类型。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 实例类型。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets productId
    *  产品ID。
    *
    * @return string|null
    */
    public function getProductId()
    {
        return $this->container['productId'];
    }

    /**
    * Sets productId
    *
    * @param string|null $productId 产品ID。
    *
    * @return $this
    */
    public function setProductId($productId)
    {
        $this->container['productId'] = $productId;
        return $this;
    }

    /**
    * Gets ecsFlavorId
    *  该产品使用的ECS规格。
    *
    * @return string|null
    */
    public function getEcsFlavorId()
    {
        return $this->container['ecsFlavorId'];
    }

    /**
    * Sets ecsFlavorId
    *
    * @param string|null $ecsFlavorId 该产品使用的ECS规格。
    *
    * @return $this
    */
    public function setEcsFlavorId($ecsFlavorId)
    {
        $this->container['ecsFlavorId'] = $ecsFlavorId;
        return $this;
    }

    /**
    * Gets billingCode
    *  账单计费类型。
    *
    * @return string|null
    */
    public function getBillingCode()
    {
        return $this->container['billingCode'];
    }

    /**
    * Sets billingCode
    *
    * @param string|null $billingCode 账单计费类型。
    *
    * @return $this
    */
    public function setBillingCode($billingCode)
    {
        $this->container['billingCode'] = $billingCode;
        return $this;
    }

    /**
    * Gets archTypes
    *  支持的CPU架构类型。
    *
    * @return string[]|null
    */
    public function getArchTypes()
    {
        return $this->container['archTypes'];
    }

    /**
    * Sets archTypes
    *
    * @param string[]|null $archTypes 支持的CPU架构类型。
    *
    * @return $this
    */
    public function setArchTypes($archTypes)
    {
        $this->container['archTypes'] = $archTypes;
        return $this;
    }

    /**
    * Gets chargingMode
    *  支持的计费模式类型。
    *
    * @return string[]|null
    */
    public function getChargingMode()
    {
        return $this->container['chargingMode'];
    }

    /**
    * Sets chargingMode
    *
    * @param string[]|null $chargingMode 支持的计费模式类型。
    *
    * @return $this
    */
    public function setChargingMode($chargingMode)
    {
        $this->container['chargingMode'] = $chargingMode;
        return $this;
    }

    /**
    * Gets ios
    *  磁盘IO信息。
    *
    * @return \HuaweiCloud\SDK\RocketMQ\V2\Model\RocketMQExtendProductIosEntity[]|null
    */
    public function getIos()
    {
        return $this->container['ios'];
    }

    /**
    * Sets ios
    *
    * @param \HuaweiCloud\SDK\RocketMQ\V2\Model\RocketMQExtendProductIosEntity[]|null $ios 磁盘IO信息。
    *
    * @return $this
    */
    public function setIos($ios)
    {
        $this->container['ios'] = $ios;
        return $this;
    }

    /**
    * Gets properties
    *  properties
    *
    * @return \HuaweiCloud\SDK\RocketMQ\V2\Model\RocketMQExtendProductPropertiesEntity|null
    */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
    * Sets properties
    *
    * @param \HuaweiCloud\SDK\RocketMQ\V2\Model\RocketMQExtendProductPropertiesEntity|null $properties properties
    *
    * @return $this
    */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;
        return $this;
    }

    /**
    * Gets availableZones
    *  有可用资源的可用区列表。
    *
    * @return string[]|null
    */
    public function getAvailableZones()
    {
        return $this->container['availableZones'];
    }

    /**
    * Sets availableZones
    *
    * @param string[]|null $availableZones 有可用资源的可用区列表。
    *
    * @return $this
    */
    public function setAvailableZones($availableZones)
    {
        $this->container['availableZones'] = $availableZones;
        return $this;
    }

    /**
    * Gets unavailableZones
    *  资源售罄的可用区列表。
    *
    * @return string[]|null
    */
    public function getUnavailableZones()
    {
        return $this->container['unavailableZones'];
    }

    /**
    * Sets unavailableZones
    *
    * @param string[]|null $unavailableZones 资源售罄的可用区列表。
    *
    * @return $this
    */
    public function setUnavailableZones($unavailableZones)
    {
        $this->container['unavailableZones'] = $unavailableZones;
        return $this;
    }

    /**
    * Gets supportFeatures
    *  支持的特性功能。
    *
    * @return \HuaweiCloud\SDK\RocketMQ\V2\Model\RocketMQProductSupportFeaturesEntity[]|null
    */
    public function getSupportFeatures()
    {
        return $this->container['supportFeatures'];
    }

    /**
    * Sets supportFeatures
    *
    * @param \HuaweiCloud\SDK\RocketMQ\V2\Model\RocketMQProductSupportFeaturesEntity[]|null $supportFeatures 支持的特性功能。
    *
    * @return $this
    */
    public function setSupportFeatures($supportFeatures)
    {
        $this->container['supportFeatures'] = $supportFeatures;
        return $this;
    }

    /**
    * Gets qingtianIncompatible
    *  是否为擎天实例。
    *
    * @return bool|null
    */
    public function getQingtianIncompatible()
    {
        return $this->container['qingtianIncompatible'];
    }

    /**
    * Sets qingtianIncompatible
    *
    * @param bool|null $qingtianIncompatible 是否为擎天实例。
    *
    * @return $this
    */
    public function setQingtianIncompatible($qingtianIncompatible)
    {
        $this->container['qingtianIncompatible'] = $qingtianIncompatible;
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

