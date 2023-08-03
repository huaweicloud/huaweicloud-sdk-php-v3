<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Storage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Storage';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * storageSelectors  磁盘选择，根据matchLabels和storageType对匹配的磁盘进行管理。磁盘匹配存在先后顺序，靠前的匹配规则优先匹配。
    * storageGroups  由多个存储设备组成的存储组，用于各个存储空间的划分。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'storageSelectors' => '\HuaweiCloud\SDK\Cce\V3\Model\StorageSelectors[]',
            'storageGroups' => '\HuaweiCloud\SDK\Cce\V3\Model\StorageGroups[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * storageSelectors  磁盘选择，根据matchLabels和storageType对匹配的磁盘进行管理。磁盘匹配存在先后顺序，靠前的匹配规则优先匹配。
    * storageGroups  由多个存储设备组成的存储组，用于各个存储空间的划分。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'storageSelectors' => null,
        'storageGroups' => null
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
    * storageSelectors  磁盘选择，根据matchLabels和storageType对匹配的磁盘进行管理。磁盘匹配存在先后顺序，靠前的匹配规则优先匹配。
    * storageGroups  由多个存储设备组成的存储组，用于各个存储空间的划分。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'storageSelectors' => 'storageSelectors',
            'storageGroups' => 'storageGroups'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * storageSelectors  磁盘选择，根据matchLabels和storageType对匹配的磁盘进行管理。磁盘匹配存在先后顺序，靠前的匹配规则优先匹配。
    * storageGroups  由多个存储设备组成的存储组，用于各个存储空间的划分。
    *
    * @var string[]
    */
    protected static $setters = [
            'storageSelectors' => 'setStorageSelectors',
            'storageGroups' => 'setStorageGroups'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * storageSelectors  磁盘选择，根据matchLabels和storageType对匹配的磁盘进行管理。磁盘匹配存在先后顺序，靠前的匹配规则优先匹配。
    * storageGroups  由多个存储设备组成的存储组，用于各个存储空间的划分。
    *
    * @var string[]
    */
    protected static $getters = [
            'storageSelectors' => 'getStorageSelectors',
            'storageGroups' => 'getStorageGroups'
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
        $this->container['storageSelectors'] = isset($data['storageSelectors']) ? $data['storageSelectors'] : null;
        $this->container['storageGroups'] = isset($data['storageGroups']) ? $data['storageGroups'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['storageSelectors'] === null) {
            $invalidProperties[] = "'storageSelectors' can't be null";
        }
        if ($this->container['storageGroups'] === null) {
            $invalidProperties[] = "'storageGroups' can't be null";
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
    * Gets storageSelectors
    *  磁盘选择，根据matchLabels和storageType对匹配的磁盘进行管理。磁盘匹配存在先后顺序，靠前的匹配规则优先匹配。
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\StorageSelectors[]
    */
    public function getStorageSelectors()
    {
        return $this->container['storageSelectors'];
    }

    /**
    * Sets storageSelectors
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\StorageSelectors[] $storageSelectors 磁盘选择，根据matchLabels和storageType对匹配的磁盘进行管理。磁盘匹配存在先后顺序，靠前的匹配规则优先匹配。
    *
    * @return $this
    */
    public function setStorageSelectors($storageSelectors)
    {
        $this->container['storageSelectors'] = $storageSelectors;
        return $this;
    }

    /**
    * Gets storageGroups
    *  由多个存储设备组成的存储组，用于各个存储空间的划分。
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\StorageGroups[]
    */
    public function getStorageGroups()
    {
        return $this->container['storageGroups'];
    }

    /**
    * Sets storageGroups
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\StorageGroups[] $storageGroups 由多个存储设备组成的存储组，用于各个存储空间的划分。
    *
    * @return $this
    */
    public function setStorageGroups($storageGroups)
    {
        $this->container['storageGroups'] = $storageGroups;
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

