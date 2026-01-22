<?php

namespace HuaweiCloud\SDK\RabbitMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListProductsRespDetail1 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListProductsResp_detail_1';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * storage  **参数解释**： 消息存储空间。 **取值范围**： 不涉及。
    * productId  **参数解释**： 产品ID。 **取值范围**： 不涉及。
    * specCode  **参数解释**： 规格ID。 **取值范围**： 不涉及。
    * io  **参数解释**： IO信息。 **取值范围**： 不涉及。
    * unavailableZones  **参数解释**： 资源售罄的可用区列表。 **取值范围**： 不涉及。
    * availableZones  **参数解释**： 有可用资源的可用区列表。 **取值范围**： 不涉及。
    * ecsFlavorId  **参数解释**： 该产品规格对应的虚拟机规格。 **取值范围**： 不涉及。
    * archType  **参数解释**： 实例规格架构类型。当前仅支持X86。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'storage' => 'string',
            'productId' => 'string',
            'specCode' => 'string',
            'io' => '\HuaweiCloud\SDK\RabbitMQ\V2\Model\ListProductsRespIo1[]',
            'unavailableZones' => 'string[]',
            'availableZones' => 'string[]',
            'ecsFlavorId' => 'string',
            'archType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * storage  **参数解释**： 消息存储空间。 **取值范围**： 不涉及。
    * productId  **参数解释**： 产品ID。 **取值范围**： 不涉及。
    * specCode  **参数解释**： 规格ID。 **取值范围**： 不涉及。
    * io  **参数解释**： IO信息。 **取值范围**： 不涉及。
    * unavailableZones  **参数解释**： 资源售罄的可用区列表。 **取值范围**： 不涉及。
    * availableZones  **参数解释**： 有可用资源的可用区列表。 **取值范围**： 不涉及。
    * ecsFlavorId  **参数解释**： 该产品规格对应的虚拟机规格。 **取值范围**： 不涉及。
    * archType  **参数解释**： 实例规格架构类型。当前仅支持X86。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'storage' => null,
        'productId' => null,
        'specCode' => null,
        'io' => null,
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
    * storage  **参数解释**： 消息存储空间。 **取值范围**： 不涉及。
    * productId  **参数解释**： 产品ID。 **取值范围**： 不涉及。
    * specCode  **参数解释**： 规格ID。 **取值范围**： 不涉及。
    * io  **参数解释**： IO信息。 **取值范围**： 不涉及。
    * unavailableZones  **参数解释**： 资源售罄的可用区列表。 **取值范围**： 不涉及。
    * availableZones  **参数解释**： 有可用资源的可用区列表。 **取值范围**： 不涉及。
    * ecsFlavorId  **参数解释**： 该产品规格对应的虚拟机规格。 **取值范围**： 不涉及。
    * archType  **参数解释**： 实例规格架构类型。当前仅支持X86。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'storage' => 'storage',
            'productId' => 'product_id',
            'specCode' => 'spec_code',
            'io' => 'io',
            'unavailableZones' => 'unavailable_zones',
            'availableZones' => 'available_zones',
            'ecsFlavorId' => 'ecs_flavor_id',
            'archType' => 'arch_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * storage  **参数解释**： 消息存储空间。 **取值范围**： 不涉及。
    * productId  **参数解释**： 产品ID。 **取值范围**： 不涉及。
    * specCode  **参数解释**： 规格ID。 **取值范围**： 不涉及。
    * io  **参数解释**： IO信息。 **取值范围**： 不涉及。
    * unavailableZones  **参数解释**： 资源售罄的可用区列表。 **取值范围**： 不涉及。
    * availableZones  **参数解释**： 有可用资源的可用区列表。 **取值范围**： 不涉及。
    * ecsFlavorId  **参数解释**： 该产品规格对应的虚拟机规格。 **取值范围**： 不涉及。
    * archType  **参数解释**： 实例规格架构类型。当前仅支持X86。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'storage' => 'setStorage',
            'productId' => 'setProductId',
            'specCode' => 'setSpecCode',
            'io' => 'setIo',
            'unavailableZones' => 'setUnavailableZones',
            'availableZones' => 'setAvailableZones',
            'ecsFlavorId' => 'setEcsFlavorId',
            'archType' => 'setArchType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * storage  **参数解释**： 消息存储空间。 **取值范围**： 不涉及。
    * productId  **参数解释**： 产品ID。 **取值范围**： 不涉及。
    * specCode  **参数解释**： 规格ID。 **取值范围**： 不涉及。
    * io  **参数解释**： IO信息。 **取值范围**： 不涉及。
    * unavailableZones  **参数解释**： 资源售罄的可用区列表。 **取值范围**： 不涉及。
    * availableZones  **参数解释**： 有可用资源的可用区列表。 **取值范围**： 不涉及。
    * ecsFlavorId  **参数解释**： 该产品规格对应的虚拟机规格。 **取值范围**： 不涉及。
    * archType  **参数解释**： 实例规格架构类型。当前仅支持X86。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'storage' => 'getStorage',
            'productId' => 'getProductId',
            'specCode' => 'getSpecCode',
            'io' => 'getIo',
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
        $this->container['storage'] = isset($data['storage']) ? $data['storage'] : null;
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
        $this->container['specCode'] = isset($data['specCode']) ? $data['specCode'] : null;
        $this->container['io'] = isset($data['io']) ? $data['io'] : null;
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
    * Gets storage
    *  **参数解释**： 消息存储空间。 **取值范围**： 不涉及。
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
    * @param string|null $storage **参数解释**： 消息存储空间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setStorage($storage)
    {
        $this->container['storage'] = $storage;
        return $this;
    }

    /**
    * Gets productId
    *  **参数解释**： 产品ID。 **取值范围**： 不涉及。
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
    * @param string|null $productId **参数解释**： 产品ID。 **取值范围**： 不涉及。
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
    *  **参数解释**： 规格ID。 **取值范围**： 不涉及。
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
    * @param string|null $specCode **参数解释**： 规格ID。 **取值范围**： 不涉及。
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
    *  **参数解释**： IO信息。 **取值范围**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\RabbitMQ\V2\Model\ListProductsRespIo1[]|null
    */
    public function getIo()
    {
        return $this->container['io'];
    }

    /**
    * Sets io
    *
    * @param \HuaweiCloud\SDK\RabbitMQ\V2\Model\ListProductsRespIo1[]|null $io **参数解释**： IO信息。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setIo($io)
    {
        $this->container['io'] = $io;
        return $this;
    }

    /**
    * Gets unavailableZones
    *  **参数解释**： 资源售罄的可用区列表。 **取值范围**： 不涉及。
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
    * @param string[]|null $unavailableZones **参数解释**： 资源售罄的可用区列表。 **取值范围**： 不涉及。
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
    *  **参数解释**： 有可用资源的可用区列表。 **取值范围**： 不涉及。
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
    * @param string[]|null $availableZones **参数解释**： 有可用资源的可用区列表。 **取值范围**： 不涉及。
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
    *  **参数解释**： 该产品规格对应的虚拟机规格。 **取值范围**： 不涉及。
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
    * @param string|null $ecsFlavorId **参数解释**： 该产品规格对应的虚拟机规格。 **取值范围**： 不涉及。
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
    *  **参数解释**： 实例规格架构类型。当前仅支持X86。 **取值范围**： 不涉及。
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
    * @param string|null $archType **参数解释**： 实例规格架构类型。当前仅支持X86。 **取值范围**： 不涉及。
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

