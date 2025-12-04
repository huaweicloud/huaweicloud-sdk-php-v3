<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListProductsRespIo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListProductsResp_io';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ioType  **参数解释**： IO类型。 **取值范围**： 不涉及。
    * storageSpecCode  **参数解释**： IO规格。 **取值范围**： 不涉及。
    * availableZones  **参数解释**： IO未售罄的可用区列表。 **取值范围**： 不涉及。
    * unavailableZones  **参数解释**： IO已售罄的不可用区列表。 **取值范围**： 不涉及。
    * volumeType  **参数解释**： 磁盘类型。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ioType' => 'string',
            'storageSpecCode' => 'string',
            'availableZones' => 'string[]',
            'unavailableZones' => 'string[]',
            'volumeType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ioType  **参数解释**： IO类型。 **取值范围**： 不涉及。
    * storageSpecCode  **参数解释**： IO规格。 **取值范围**： 不涉及。
    * availableZones  **参数解释**： IO未售罄的可用区列表。 **取值范围**： 不涉及。
    * unavailableZones  **参数解释**： IO已售罄的不可用区列表。 **取值范围**： 不涉及。
    * volumeType  **参数解释**： 磁盘类型。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ioType' => null,
        'storageSpecCode' => null,
        'availableZones' => null,
        'unavailableZones' => null,
        'volumeType' => null
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
    * ioType  **参数解释**： IO类型。 **取值范围**： 不涉及。
    * storageSpecCode  **参数解释**： IO规格。 **取值范围**： 不涉及。
    * availableZones  **参数解释**： IO未售罄的可用区列表。 **取值范围**： 不涉及。
    * unavailableZones  **参数解释**： IO已售罄的不可用区列表。 **取值范围**： 不涉及。
    * volumeType  **参数解释**： 磁盘类型。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ioType' => 'io_type',
            'storageSpecCode' => 'storage_spec_code',
            'availableZones' => 'available_zones',
            'unavailableZones' => 'unavailable_zones',
            'volumeType' => 'volume_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ioType  **参数解释**： IO类型。 **取值范围**： 不涉及。
    * storageSpecCode  **参数解释**： IO规格。 **取值范围**： 不涉及。
    * availableZones  **参数解释**： IO未售罄的可用区列表。 **取值范围**： 不涉及。
    * unavailableZones  **参数解释**： IO已售罄的不可用区列表。 **取值范围**： 不涉及。
    * volumeType  **参数解释**： 磁盘类型。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'ioType' => 'setIoType',
            'storageSpecCode' => 'setStorageSpecCode',
            'availableZones' => 'setAvailableZones',
            'unavailableZones' => 'setUnavailableZones',
            'volumeType' => 'setVolumeType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ioType  **参数解释**： IO类型。 **取值范围**： 不涉及。
    * storageSpecCode  **参数解释**： IO规格。 **取值范围**： 不涉及。
    * availableZones  **参数解释**： IO未售罄的可用区列表。 **取值范围**： 不涉及。
    * unavailableZones  **参数解释**： IO已售罄的不可用区列表。 **取值范围**： 不涉及。
    * volumeType  **参数解释**： 磁盘类型。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'ioType' => 'getIoType',
            'storageSpecCode' => 'getStorageSpecCode',
            'availableZones' => 'getAvailableZones',
            'unavailableZones' => 'getUnavailableZones',
            'volumeType' => 'getVolumeType'
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
        $this->container['ioType'] = isset($data['ioType']) ? $data['ioType'] : null;
        $this->container['storageSpecCode'] = isset($data['storageSpecCode']) ? $data['storageSpecCode'] : null;
        $this->container['availableZones'] = isset($data['availableZones']) ? $data['availableZones'] : null;
        $this->container['unavailableZones'] = isset($data['unavailableZones']) ? $data['unavailableZones'] : null;
        $this->container['volumeType'] = isset($data['volumeType']) ? $data['volumeType'] : null;
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
    * Gets ioType
    *  **参数解释**： IO类型。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getIoType()
    {
        return $this->container['ioType'];
    }

    /**
    * Sets ioType
    *
    * @param string|null $ioType **参数解释**： IO类型。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setIoType($ioType)
    {
        $this->container['ioType'] = $ioType;
        return $this;
    }

    /**
    * Gets storageSpecCode
    *  **参数解释**： IO规格。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getStorageSpecCode()
    {
        return $this->container['storageSpecCode'];
    }

    /**
    * Sets storageSpecCode
    *
    * @param string|null $storageSpecCode **参数解释**： IO规格。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setStorageSpecCode($storageSpecCode)
    {
        $this->container['storageSpecCode'] = $storageSpecCode;
        return $this;
    }

    /**
    * Gets availableZones
    *  **参数解释**： IO未售罄的可用区列表。 **取值范围**： 不涉及。
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
    * @param string[]|null $availableZones **参数解释**： IO未售罄的可用区列表。 **取值范围**： 不涉及。
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
    *  **参数解释**： IO已售罄的不可用区列表。 **取值范围**： 不涉及。
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
    * @param string[]|null $unavailableZones **参数解释**： IO已售罄的不可用区列表。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setUnavailableZones($unavailableZones)
    {
        $this->container['unavailableZones'] = $unavailableZones;
        return $this;
    }

    /**
    * Gets volumeType
    *  **参数解释**： 磁盘类型。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getVolumeType()
    {
        return $this->container['volumeType'];
    }

    /**
    * Sets volumeType
    *
    * @param string|null $volumeType **参数解释**： 磁盘类型。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setVolumeType($volumeType)
    {
        $this->container['volumeType'] = $volumeType;
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

