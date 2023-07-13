<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowInstanceExtendProductInfoRespDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowInstanceExtendProductInfoResp_detail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tps  单位时间内的消息量最大值。
    * storage  消息存储空间。
    * partitionNum  Kafka实例的分区数量。
    * productId  产品ID。
    * specCode  规格ID。
    * io  IO信息。
    * bandwidth  Kafka实例的基准带宽。
    * recommendMaxConsGroups  Kafka实例最大消费组数参考值。
    * unavailableZones  资源售罄的可用区列表。
    * availableZones  有可用资源的可用区列表。
    * ecsFlavorId  该产品规格对应的虚拟机规格。
    * archType  实例规格架构类型。当前仅支持X86。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tps' => 'string',
            'storage' => 'string',
            'partitionNum' => 'string',
            'productId' => 'string',
            'specCode' => 'string',
            'io' => '\HuaweiCloud\SDK\Kafka\V2\Model\ListProductsRespIo[]',
            'bandwidth' => 'string',
            'recommendMaxConsGroups' => 'string',
            'unavailableZones' => 'string[]',
            'availableZones' => 'string[]',
            'ecsFlavorId' => 'string',
            'archType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tps  单位时间内的消息量最大值。
    * storage  消息存储空间。
    * partitionNum  Kafka实例的分区数量。
    * productId  产品ID。
    * specCode  规格ID。
    * io  IO信息。
    * bandwidth  Kafka实例的基准带宽。
    * recommendMaxConsGroups  Kafka实例最大消费组数参考值。
    * unavailableZones  资源售罄的可用区列表。
    * availableZones  有可用资源的可用区列表。
    * ecsFlavorId  该产品规格对应的虚拟机规格。
    * archType  实例规格架构类型。当前仅支持X86。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tps' => null,
        'storage' => null,
        'partitionNum' => null,
        'productId' => null,
        'specCode' => null,
        'io' => null,
        'bandwidth' => null,
        'recommendMaxConsGroups' => null,
        'unavailableZones' => null,
        'availableZones' => null,
        'ecsFlavorId' => null,
        'archType' => null
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
    * tps  单位时间内的消息量最大值。
    * storage  消息存储空间。
    * partitionNum  Kafka实例的分区数量。
    * productId  产品ID。
    * specCode  规格ID。
    * io  IO信息。
    * bandwidth  Kafka实例的基准带宽。
    * recommendMaxConsGroups  Kafka实例最大消费组数参考值。
    * unavailableZones  资源售罄的可用区列表。
    * availableZones  有可用资源的可用区列表。
    * ecsFlavorId  该产品规格对应的虚拟机规格。
    * archType  实例规格架构类型。当前仅支持X86。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tps' => 'tps',
            'storage' => 'storage',
            'partitionNum' => 'partition_num',
            'productId' => 'product_id',
            'specCode' => 'spec_code',
            'io' => 'io',
            'bandwidth' => 'bandwidth',
            'recommendMaxConsGroups' => 'recommend_max_consGroups',
            'unavailableZones' => 'unavailable_zones',
            'availableZones' => 'available_zones',
            'ecsFlavorId' => 'ecs_flavor_id',
            'archType' => 'arch_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tps  单位时间内的消息量最大值。
    * storage  消息存储空间。
    * partitionNum  Kafka实例的分区数量。
    * productId  产品ID。
    * specCode  规格ID。
    * io  IO信息。
    * bandwidth  Kafka实例的基准带宽。
    * recommendMaxConsGroups  Kafka实例最大消费组数参考值。
    * unavailableZones  资源售罄的可用区列表。
    * availableZones  有可用资源的可用区列表。
    * ecsFlavorId  该产品规格对应的虚拟机规格。
    * archType  实例规格架构类型。当前仅支持X86。
    *
    * @var string[]
    */
    protected static $setters = [
            'tps' => 'setTps',
            'storage' => 'setStorage',
            'partitionNum' => 'setPartitionNum',
            'productId' => 'setProductId',
            'specCode' => 'setSpecCode',
            'io' => 'setIo',
            'bandwidth' => 'setBandwidth',
            'recommendMaxConsGroups' => 'setRecommendMaxConsGroups',
            'unavailableZones' => 'setUnavailableZones',
            'availableZones' => 'setAvailableZones',
            'ecsFlavorId' => 'setEcsFlavorId',
            'archType' => 'setArchType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tps  单位时间内的消息量最大值。
    * storage  消息存储空间。
    * partitionNum  Kafka实例的分区数量。
    * productId  产品ID。
    * specCode  规格ID。
    * io  IO信息。
    * bandwidth  Kafka实例的基准带宽。
    * recommendMaxConsGroups  Kafka实例最大消费组数参考值。
    * unavailableZones  资源售罄的可用区列表。
    * availableZones  有可用资源的可用区列表。
    * ecsFlavorId  该产品规格对应的虚拟机规格。
    * archType  实例规格架构类型。当前仅支持X86。
    *
    * @var string[]
    */
    protected static $getters = [
            'tps' => 'getTps',
            'storage' => 'getStorage',
            'partitionNum' => 'getPartitionNum',
            'productId' => 'getProductId',
            'specCode' => 'getSpecCode',
            'io' => 'getIo',
            'bandwidth' => 'getBandwidth',
            'recommendMaxConsGroups' => 'getRecommendMaxConsGroups',
            'unavailableZones' => 'getUnavailableZones',
            'availableZones' => 'getAvailableZones',
            'ecsFlavorId' => 'getEcsFlavorId',
            'archType' => 'getArchType'
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
        $this->container['tps'] = isset($data['tps']) ? $data['tps'] : null;
        $this->container['storage'] = isset($data['storage']) ? $data['storage'] : null;
        $this->container['partitionNum'] = isset($data['partitionNum']) ? $data['partitionNum'] : null;
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
        $this->container['specCode'] = isset($data['specCode']) ? $data['specCode'] : null;
        $this->container['io'] = isset($data['io']) ? $data['io'] : null;
        $this->container['bandwidth'] = isset($data['bandwidth']) ? $data['bandwidth'] : null;
        $this->container['recommendMaxConsGroups'] = isset($data['recommendMaxConsGroups']) ? $data['recommendMaxConsGroups'] : null;
        $this->container['unavailableZones'] = isset($data['unavailableZones']) ? $data['unavailableZones'] : null;
        $this->container['availableZones'] = isset($data['availableZones']) ? $data['availableZones'] : null;
        $this->container['ecsFlavorId'] = isset($data['ecsFlavorId']) ? $data['ecsFlavorId'] : null;
        $this->container['archType'] = isset($data['archType']) ? $data['archType'] : null;
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
    * Gets tps
    *  单位时间内的消息量最大值。
    *
    * @return string|null
    */
    public function getTps()
    {
        return $this->container['tps'];
    }

    /**
    * Sets tps
    *
    * @param string|null $tps 单位时间内的消息量最大值。
    *
    * @return $this
    */
    public function setTps($tps)
    {
        $this->container['tps'] = $tps;
        return $this;
    }

    /**
    * Gets storage
    *  消息存储空间。
    *
    * @return string|null
    */
    public function getStorage()
    {
        return $this->container['storage'];
    }

    /**
    * Sets storage
    *
    * @param string|null $storage 消息存储空间。
    *
    * @return $this
    */
    public function setStorage($storage)
    {
        $this->container['storage'] = $storage;
        return $this;
    }

    /**
    * Gets partitionNum
    *  Kafka实例的分区数量。
    *
    * @return string|null
    */
    public function getPartitionNum()
    {
        return $this->container['partitionNum'];
    }

    /**
    * Sets partitionNum
    *
    * @param string|null $partitionNum Kafka实例的分区数量。
    *
    * @return $this
    */
    public function setPartitionNum($partitionNum)
    {
        $this->container['partitionNum'] = $partitionNum;
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
    * Gets specCode
    *  规格ID。
    *
    * @return string|null
    */
    public function getSpecCode()
    {
        return $this->container['specCode'];
    }

    /**
    * Sets specCode
    *
    * @param string|null $specCode 规格ID。
    *
    * @return $this
    */
    public function setSpecCode($specCode)
    {
        $this->container['specCode'] = $specCode;
        return $this;
    }

    /**
    * Gets io
    *  IO信息。
    *
    * @return \HuaweiCloud\SDK\Kafka\V2\Model\ListProductsRespIo[]|null
    */
    public function getIo()
    {
        return $this->container['io'];
    }

    /**
    * Sets io
    *
    * @param \HuaweiCloud\SDK\Kafka\V2\Model\ListProductsRespIo[]|null $io IO信息。
    *
    * @return $this
    */
    public function setIo($io)
    {
        $this->container['io'] = $io;
        return $this;
    }

    /**
    * Gets bandwidth
    *  Kafka实例的基准带宽。
    *
    * @return string|null
    */
    public function getBandwidth()
    {
        return $this->container['bandwidth'];
    }

    /**
    * Sets bandwidth
    *
    * @param string|null $bandwidth Kafka实例的基准带宽。
    *
    * @return $this
    */
    public function setBandwidth($bandwidth)
    {
        $this->container['bandwidth'] = $bandwidth;
        return $this;
    }

    /**
    * Gets recommendMaxConsGroups
    *  Kafka实例最大消费组数参考值。
    *
    * @return string|null
    */
    public function getRecommendMaxConsGroups()
    {
        return $this->container['recommendMaxConsGroups'];
    }

    /**
    * Sets recommendMaxConsGroups
    *
    * @param string|null $recommendMaxConsGroups Kafka实例最大消费组数参考值。
    *
    * @return $this
    */
    public function setRecommendMaxConsGroups($recommendMaxConsGroups)
    {
        $this->container['recommendMaxConsGroups'] = $recommendMaxConsGroups;
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
    * Gets ecsFlavorId
    *  该产品规格对应的虚拟机规格。
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
    * @param string|null $ecsFlavorId 该产品规格对应的虚拟机规格。
    *
    * @return $this
    */
    public function setEcsFlavorId($ecsFlavorId)
    {
        $this->container['ecsFlavorId'] = $ecsFlavorId;
        return $this;
    }

    /**
    * Gets archType
    *  实例规格架构类型。当前仅支持X86。
    *
    * @return string|null
    */
    public function getArchType()
    {
        return $this->container['archType'];
    }

    /**
    * Sets archType
    *
    * @param string|null $archType 实例规格架构类型。当前仅支持X86。
    *
    * @return $this
    */
    public function setArchType($archType)
    {
        $this->container['archType'] = $archType;
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

