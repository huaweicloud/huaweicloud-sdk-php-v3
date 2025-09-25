<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListDatabaseVolumeSummaryResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListDatabaseVolumeSummaryResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dataDiskCapacity  **参数解释**: 数据盘总量。 **取值范围**: 不涉及。
    * dataDiskUsage  **参数解释**: 数据盘使用量。 **取值范围**: 不涉及。
    * spaceUsageGrowthPerDay  **参数解释**: 空间使用日均增长量。 **取值范围**: 不涉及。
    * estimatedRemainingDays  **参数解释**: 预计可用天数。 **取值范围**: 不涉及。
    * cnComponents  **参数解释**: CN节点信息。
    * dnComponents  **参数解释**: DN节点信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dataDiskCapacity' => 'string',
            'dataDiskUsage' => 'string',
            'spaceUsageGrowthPerDay' => 'string',
            'estimatedRemainingDays' => 'string',
            'cnComponents' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\CnComponentInfoResult[]',
            'dnComponents' => '\HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\DnComponentInfoResult[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dataDiskCapacity  **参数解释**: 数据盘总量。 **取值范围**: 不涉及。
    * dataDiskUsage  **参数解释**: 数据盘使用量。 **取值范围**: 不涉及。
    * spaceUsageGrowthPerDay  **参数解释**: 空间使用日均增长量。 **取值范围**: 不涉及。
    * estimatedRemainingDays  **参数解释**: 预计可用天数。 **取值范围**: 不涉及。
    * cnComponents  **参数解释**: CN节点信息。
    * dnComponents  **参数解释**: DN节点信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dataDiskCapacity' => null,
        'dataDiskUsage' => null,
        'spaceUsageGrowthPerDay' => null,
        'estimatedRemainingDays' => null,
        'cnComponents' => null,
        'dnComponents' => null
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
    * dataDiskCapacity  **参数解释**: 数据盘总量。 **取值范围**: 不涉及。
    * dataDiskUsage  **参数解释**: 数据盘使用量。 **取值范围**: 不涉及。
    * spaceUsageGrowthPerDay  **参数解释**: 空间使用日均增长量。 **取值范围**: 不涉及。
    * estimatedRemainingDays  **参数解释**: 预计可用天数。 **取值范围**: 不涉及。
    * cnComponents  **参数解释**: CN节点信息。
    * dnComponents  **参数解释**: DN节点信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dataDiskCapacity' => 'data_disk_capacity',
            'dataDiskUsage' => 'data_disk_usage',
            'spaceUsageGrowthPerDay' => 'space_usage_growth_per_day',
            'estimatedRemainingDays' => 'estimated_remaining_days',
            'cnComponents' => 'cn_components',
            'dnComponents' => 'dn_components'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dataDiskCapacity  **参数解释**: 数据盘总量。 **取值范围**: 不涉及。
    * dataDiskUsage  **参数解释**: 数据盘使用量。 **取值范围**: 不涉及。
    * spaceUsageGrowthPerDay  **参数解释**: 空间使用日均增长量。 **取值范围**: 不涉及。
    * estimatedRemainingDays  **参数解释**: 预计可用天数。 **取值范围**: 不涉及。
    * cnComponents  **参数解释**: CN节点信息。
    * dnComponents  **参数解释**: DN节点信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'dataDiskCapacity' => 'setDataDiskCapacity',
            'dataDiskUsage' => 'setDataDiskUsage',
            'spaceUsageGrowthPerDay' => 'setSpaceUsageGrowthPerDay',
            'estimatedRemainingDays' => 'setEstimatedRemainingDays',
            'cnComponents' => 'setCnComponents',
            'dnComponents' => 'setDnComponents'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dataDiskCapacity  **参数解释**: 数据盘总量。 **取值范围**: 不涉及。
    * dataDiskUsage  **参数解释**: 数据盘使用量。 **取值范围**: 不涉及。
    * spaceUsageGrowthPerDay  **参数解释**: 空间使用日均增长量。 **取值范围**: 不涉及。
    * estimatedRemainingDays  **参数解释**: 预计可用天数。 **取值范围**: 不涉及。
    * cnComponents  **参数解释**: CN节点信息。
    * dnComponents  **参数解释**: DN节点信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'dataDiskCapacity' => 'getDataDiskCapacity',
            'dataDiskUsage' => 'getDataDiskUsage',
            'spaceUsageGrowthPerDay' => 'getSpaceUsageGrowthPerDay',
            'estimatedRemainingDays' => 'getEstimatedRemainingDays',
            'cnComponents' => 'getCnComponents',
            'dnComponents' => 'getDnComponents'
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
        $this->container['dataDiskCapacity'] = isset($data['dataDiskCapacity']) ? $data['dataDiskCapacity'] : null;
        $this->container['dataDiskUsage'] = isset($data['dataDiskUsage']) ? $data['dataDiskUsage'] : null;
        $this->container['spaceUsageGrowthPerDay'] = isset($data['spaceUsageGrowthPerDay']) ? $data['spaceUsageGrowthPerDay'] : null;
        $this->container['estimatedRemainingDays'] = isset($data['estimatedRemainingDays']) ? $data['estimatedRemainingDays'] : null;
        $this->container['cnComponents'] = isset($data['cnComponents']) ? $data['cnComponents'] : null;
        $this->container['dnComponents'] = isset($data['dnComponents']) ? $data['dnComponents'] : null;
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
    * Gets dataDiskCapacity
    *  **参数解释**: 数据盘总量。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getDataDiskCapacity()
    {
        return $this->container['dataDiskCapacity'];
    }

    /**
    * Sets dataDiskCapacity
    *
    * @param string|null $dataDiskCapacity **参数解释**: 数据盘总量。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setDataDiskCapacity($dataDiskCapacity)
    {
        $this->container['dataDiskCapacity'] = $dataDiskCapacity;
        return $this;
    }

    /**
    * Gets dataDiskUsage
    *  **参数解释**: 数据盘使用量。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getDataDiskUsage()
    {
        return $this->container['dataDiskUsage'];
    }

    /**
    * Sets dataDiskUsage
    *
    * @param string|null $dataDiskUsage **参数解释**: 数据盘使用量。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setDataDiskUsage($dataDiskUsage)
    {
        $this->container['dataDiskUsage'] = $dataDiskUsage;
        return $this;
    }

    /**
    * Gets spaceUsageGrowthPerDay
    *  **参数解释**: 空间使用日均增长量。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getSpaceUsageGrowthPerDay()
    {
        return $this->container['spaceUsageGrowthPerDay'];
    }

    /**
    * Sets spaceUsageGrowthPerDay
    *
    * @param string|null $spaceUsageGrowthPerDay **参数解释**: 空间使用日均增长量。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setSpaceUsageGrowthPerDay($spaceUsageGrowthPerDay)
    {
        $this->container['spaceUsageGrowthPerDay'] = $spaceUsageGrowthPerDay;
        return $this;
    }

    /**
    * Gets estimatedRemainingDays
    *  **参数解释**: 预计可用天数。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getEstimatedRemainingDays()
    {
        return $this->container['estimatedRemainingDays'];
    }

    /**
    * Sets estimatedRemainingDays
    *
    * @param string|null $estimatedRemainingDays **参数解释**: 预计可用天数。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setEstimatedRemainingDays($estimatedRemainingDays)
    {
        $this->container['estimatedRemainingDays'] = $estimatedRemainingDays;
        return $this;
    }

    /**
    * Gets cnComponents
    *  **参数解释**: CN节点信息。
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\CnComponentInfoResult[]|null
    */
    public function getCnComponents()
    {
        return $this->container['cnComponents'];
    }

    /**
    * Sets cnComponents
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\CnComponentInfoResult[]|null $cnComponents **参数解释**: CN节点信息。
    *
    * @return $this
    */
    public function setCnComponents($cnComponents)
    {
        $this->container['cnComponents'] = $cnComponents;
        return $this;
    }

    /**
    * Gets dnComponents
    *  **参数解释**: DN节点信息。
    *
    * @return \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\DnComponentInfoResult[]|null
    */
    public function getDnComponents()
    {
        return $this->container['dnComponents'];
    }

    /**
    * Sets dnComponents
    *
    * @param \HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model\DnComponentInfoResult[]|null $dnComponents **参数解释**: DN节点信息。
    *
    * @return $this
    */
    public function setDnComponents($dnComponents)
    {
        $this->container['dnComponents'] = $dnComponents;
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

