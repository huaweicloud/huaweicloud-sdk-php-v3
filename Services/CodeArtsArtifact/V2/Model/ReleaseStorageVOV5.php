<?php

namespace HuaweiCloud\SDK\CodeArtsArtifact\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ReleaseStorageVOV5 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ReleaseStorageVOV5';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * usedCapacity  **参数解释**: 已使用存储量 ---带单位。 **取值范围**: 不涉及。
    * totalCapacity  **参数解释**: 租户存储最大量 ---带单位。 **取值范围**: 不涉及。
    * usedCapacitySize  **参数解释**: 已使用存储量 ---字节。 **取值范围**: 不涉及。
    * totalCapacitySize  **参数解释**: 租户存储最大量 ---字节。 **取值范围**: 不涉及。
    * packageType  **参数解释**: 包周期套餐类型(0.no_package 1.basic 2.professional 3.platinum)。 **取值范围**: 不涉及。
    * totalCount  **参数解释**: 项目仓库数量。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'usedCapacity' => 'string',
            'totalCapacity' => 'string',
            'usedCapacitySize' => 'int',
            'totalCapacitySize' => 'int',
            'packageType' => 'string',
            'totalCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * usedCapacity  **参数解释**: 已使用存储量 ---带单位。 **取值范围**: 不涉及。
    * totalCapacity  **参数解释**: 租户存储最大量 ---带单位。 **取值范围**: 不涉及。
    * usedCapacitySize  **参数解释**: 已使用存储量 ---字节。 **取值范围**: 不涉及。
    * totalCapacitySize  **参数解释**: 租户存储最大量 ---字节。 **取值范围**: 不涉及。
    * packageType  **参数解释**: 包周期套餐类型(0.no_package 1.basic 2.professional 3.platinum)。 **取值范围**: 不涉及。
    * totalCount  **参数解释**: 项目仓库数量。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'usedCapacity' => null,
        'totalCapacity' => null,
        'usedCapacitySize' => 'int64',
        'totalCapacitySize' => 'int64',
        'packageType' => null,
        'totalCount' => 'int64'
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
    * usedCapacity  **参数解释**: 已使用存储量 ---带单位。 **取值范围**: 不涉及。
    * totalCapacity  **参数解释**: 租户存储最大量 ---带单位。 **取值范围**: 不涉及。
    * usedCapacitySize  **参数解释**: 已使用存储量 ---字节。 **取值范围**: 不涉及。
    * totalCapacitySize  **参数解释**: 租户存储最大量 ---字节。 **取值范围**: 不涉及。
    * packageType  **参数解释**: 包周期套餐类型(0.no_package 1.basic 2.professional 3.platinum)。 **取值范围**: 不涉及。
    * totalCount  **参数解释**: 项目仓库数量。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'usedCapacity' => 'used_capacity',
            'totalCapacity' => 'total_capacity',
            'usedCapacitySize' => 'used_capacity_size',
            'totalCapacitySize' => 'total_capacity_size',
            'packageType' => 'package_type',
            'totalCount' => 'total_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * usedCapacity  **参数解释**: 已使用存储量 ---带单位。 **取值范围**: 不涉及。
    * totalCapacity  **参数解释**: 租户存储最大量 ---带单位。 **取值范围**: 不涉及。
    * usedCapacitySize  **参数解释**: 已使用存储量 ---字节。 **取值范围**: 不涉及。
    * totalCapacitySize  **参数解释**: 租户存储最大量 ---字节。 **取值范围**: 不涉及。
    * packageType  **参数解释**: 包周期套餐类型(0.no_package 1.basic 2.professional 3.platinum)。 **取值范围**: 不涉及。
    * totalCount  **参数解释**: 项目仓库数量。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'usedCapacity' => 'setUsedCapacity',
            'totalCapacity' => 'setTotalCapacity',
            'usedCapacitySize' => 'setUsedCapacitySize',
            'totalCapacitySize' => 'setTotalCapacitySize',
            'packageType' => 'setPackageType',
            'totalCount' => 'setTotalCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * usedCapacity  **参数解释**: 已使用存储量 ---带单位。 **取值范围**: 不涉及。
    * totalCapacity  **参数解释**: 租户存储最大量 ---带单位。 **取值范围**: 不涉及。
    * usedCapacitySize  **参数解释**: 已使用存储量 ---字节。 **取值范围**: 不涉及。
    * totalCapacitySize  **参数解释**: 租户存储最大量 ---字节。 **取值范围**: 不涉及。
    * packageType  **参数解释**: 包周期套餐类型(0.no_package 1.basic 2.professional 3.platinum)。 **取值范围**: 不涉及。
    * totalCount  **参数解释**: 项目仓库数量。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'usedCapacity' => 'getUsedCapacity',
            'totalCapacity' => 'getTotalCapacity',
            'usedCapacitySize' => 'getUsedCapacitySize',
            'totalCapacitySize' => 'getTotalCapacitySize',
            'packageType' => 'getPackageType',
            'totalCount' => 'getTotalCount'
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
        $this->container['usedCapacity'] = isset($data['usedCapacity']) ? $data['usedCapacity'] : null;
        $this->container['totalCapacity'] = isset($data['totalCapacity']) ? $data['totalCapacity'] : null;
        $this->container['usedCapacitySize'] = isset($data['usedCapacitySize']) ? $data['usedCapacitySize'] : null;
        $this->container['totalCapacitySize'] = isset($data['totalCapacitySize']) ? $data['totalCapacitySize'] : null;
        $this->container['packageType'] = isset($data['packageType']) ? $data['packageType'] : null;
        $this->container['totalCount'] = isset($data['totalCount']) ? $data['totalCount'] : null;
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
    * Gets usedCapacity
    *  **参数解释**: 已使用存储量 ---带单位。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getUsedCapacity()
    {
        return $this->container['usedCapacity'];
    }

    /**
    * Sets usedCapacity
    *
    * @param string|null $usedCapacity **参数解释**: 已使用存储量 ---带单位。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setUsedCapacity($usedCapacity)
    {
        $this->container['usedCapacity'] = $usedCapacity;
        return $this;
    }

    /**
    * Gets totalCapacity
    *  **参数解释**: 租户存储最大量 ---带单位。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getTotalCapacity()
    {
        return $this->container['totalCapacity'];
    }

    /**
    * Sets totalCapacity
    *
    * @param string|null $totalCapacity **参数解释**: 租户存储最大量 ---带单位。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setTotalCapacity($totalCapacity)
    {
        $this->container['totalCapacity'] = $totalCapacity;
        return $this;
    }

    /**
    * Gets usedCapacitySize
    *  **参数解释**: 已使用存储量 ---字节。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getUsedCapacitySize()
    {
        return $this->container['usedCapacitySize'];
    }

    /**
    * Sets usedCapacitySize
    *
    * @param int|null $usedCapacitySize **参数解释**: 已使用存储量 ---字节。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setUsedCapacitySize($usedCapacitySize)
    {
        $this->container['usedCapacitySize'] = $usedCapacitySize;
        return $this;
    }

    /**
    * Gets totalCapacitySize
    *  **参数解释**: 租户存储最大量 ---字节。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getTotalCapacitySize()
    {
        return $this->container['totalCapacitySize'];
    }

    /**
    * Sets totalCapacitySize
    *
    * @param int|null $totalCapacitySize **参数解释**: 租户存储最大量 ---字节。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setTotalCapacitySize($totalCapacitySize)
    {
        $this->container['totalCapacitySize'] = $totalCapacitySize;
        return $this;
    }

    /**
    * Gets packageType
    *  **参数解释**: 包周期套餐类型(0.no_package 1.basic 2.professional 3.platinum)。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getPackageType()
    {
        return $this->container['packageType'];
    }

    /**
    * Sets packageType
    *
    * @param string|null $packageType **参数解释**: 包周期套餐类型(0.no_package 1.basic 2.professional 3.platinum)。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setPackageType($packageType)
    {
        $this->container['packageType'] = $packageType;
        return $this;
    }

    /**
    * Gets totalCount
    *  **参数解释**: 项目仓库数量。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getTotalCount()
    {
        return $this->container['totalCount'];
    }

    /**
    * Sets totalCount
    *
    * @param int|null $totalCount **参数解释**: 项目仓库数量。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setTotalCount($totalCount)
    {
        $this->container['totalCount'] = $totalCount;
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

