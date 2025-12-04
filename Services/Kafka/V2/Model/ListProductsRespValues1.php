<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListProductsRespValues1 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListProductsResp_values_1';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * detail  **参数解释**： 规格详情。
    * name  **参数解释**： 名称。 **取值范围**： 不涉及。
    * unavailableZones  **参数解释**： 资源售罄的可用区列表。
    * availableZones  **参数解释**： 有可用资源的可用区列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'detail' => '\HuaweiCloud\SDK\Kafka\V2\Model\ListProductsRespDetail1[]',
            'name' => 'string',
            'unavailableZones' => 'string[]',
            'availableZones' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * detail  **参数解释**： 规格详情。
    * name  **参数解释**： 名称。 **取值范围**： 不涉及。
    * unavailableZones  **参数解释**： 资源售罄的可用区列表。
    * availableZones  **参数解释**： 有可用资源的可用区列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'detail' => null,
        'name' => null,
        'unavailableZones' => null,
        'availableZones' => null
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
    * detail  **参数解释**： 规格详情。
    * name  **参数解释**： 名称。 **取值范围**： 不涉及。
    * unavailableZones  **参数解释**： 资源售罄的可用区列表。
    * availableZones  **参数解释**： 有可用资源的可用区列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'detail' => 'detail',
            'name' => 'name',
            'unavailableZones' => 'unavailable_zones',
            'availableZones' => 'available_zones'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * detail  **参数解释**： 规格详情。
    * name  **参数解释**： 名称。 **取值范围**： 不涉及。
    * unavailableZones  **参数解释**： 资源售罄的可用区列表。
    * availableZones  **参数解释**： 有可用资源的可用区列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'detail' => 'setDetail',
            'name' => 'setName',
            'unavailableZones' => 'setUnavailableZones',
            'availableZones' => 'setAvailableZones'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * detail  **参数解释**： 规格详情。
    * name  **参数解释**： 名称。 **取值范围**： 不涉及。
    * unavailableZones  **参数解释**： 资源售罄的可用区列表。
    * availableZones  **参数解释**： 有可用资源的可用区列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'detail' => 'getDetail',
            'name' => 'getName',
            'unavailableZones' => 'getUnavailableZones',
            'availableZones' => 'getAvailableZones'
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
        $this->container['detail'] = isset($data['detail']) ? $data['detail'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['unavailableZones'] = isset($data['unavailableZones']) ? $data['unavailableZones'] : null;
        $this->container['availableZones'] = isset($data['availableZones']) ? $data['availableZones'] : null;
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
    * Gets detail
    *  **参数解释**： 规格详情。
    *
    * @return \HuaweiCloud\SDK\Kafka\V2\Model\ListProductsRespDetail1[]|null
    */
    public function getDetail()
    {
        return $this->container['detail'];
    }

    /**
    * Sets detail
    *
    * @param \HuaweiCloud\SDK\Kafka\V2\Model\ListProductsRespDetail1[]|null $detail **参数解释**： 规格详情。
    *
    * @return $this
    */
    public function setDetail($detail)
    {
        $this->container['detail'] = $detail;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**： 名称。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name **参数解释**： 名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets unavailableZones
    *  **参数解释**： 资源售罄的可用区列表。
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
    * @param string[]|null $unavailableZones **参数解释**： 资源售罄的可用区列表。
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
    *  **参数解释**： 有可用资源的可用区列表。
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
    * @param string[]|null $availableZones **参数解释**： 有可用资源的可用区列表。
    *
    * @return $this
    */
    public function setAvailableZones($availableZones)
    {
        $this->container['availableZones'] = $availableZones;
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

