<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StorageSelectors implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StorageSelectors';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  selector的名字，作为storageGroup中selectorNames的索引，因此各个selector间的名字不能重复。
    * storageType  存储类型，当前仅支持evs（云硬盘）或local（本地盘）；local存储类型不支持磁盘选择，所有本地盘将被组成一个VG，因此也仅允许只有一个local类型的storageSelector。
    * matchLabels  matchLabels
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'storageType' => 'string',
            'matchLabels' => '\HuaweiCloud\SDK\Cce\V3\Model\StorageSelectorsMatchLabels'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  selector的名字，作为storageGroup中selectorNames的索引，因此各个selector间的名字不能重复。
    * storageType  存储类型，当前仅支持evs（云硬盘）或local（本地盘）；local存储类型不支持磁盘选择，所有本地盘将被组成一个VG，因此也仅允许只有一个local类型的storageSelector。
    * matchLabels  matchLabels
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'storageType' => null,
        'matchLabels' => null
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
    * name  selector的名字，作为storageGroup中selectorNames的索引，因此各个selector间的名字不能重复。
    * storageType  存储类型，当前仅支持evs（云硬盘）或local（本地盘）；local存储类型不支持磁盘选择，所有本地盘将被组成一个VG，因此也仅允许只有一个local类型的storageSelector。
    * matchLabels  matchLabels
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'storageType' => 'storageType',
            'matchLabels' => 'matchLabels'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  selector的名字，作为storageGroup中selectorNames的索引，因此各个selector间的名字不能重复。
    * storageType  存储类型，当前仅支持evs（云硬盘）或local（本地盘）；local存储类型不支持磁盘选择，所有本地盘将被组成一个VG，因此也仅允许只有一个local类型的storageSelector。
    * matchLabels  matchLabels
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'storageType' => 'setStorageType',
            'matchLabels' => 'setMatchLabels'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  selector的名字，作为storageGroup中selectorNames的索引，因此各个selector间的名字不能重复。
    * storageType  存储类型，当前仅支持evs（云硬盘）或local（本地盘）；local存储类型不支持磁盘选择，所有本地盘将被组成一个VG，因此也仅允许只有一个local类型的storageSelector。
    * matchLabels  matchLabels
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'storageType' => 'getStorageType',
            'matchLabels' => 'getMatchLabels'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['storageType'] = isset($data['storageType']) ? $data['storageType'] : null;
        $this->container['matchLabels'] = isset($data['matchLabels']) ? $data['matchLabels'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['storageType'] === null) {
            $invalidProperties[] = "'storageType' can't be null";
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
    * Gets name
    *  selector的名字，作为storageGroup中selectorNames的索引，因此各个selector间的名字不能重复。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name selector的名字，作为storageGroup中selectorNames的索引，因此各个selector间的名字不能重复。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets storageType
    *  存储类型，当前仅支持evs（云硬盘）或local（本地盘）；local存储类型不支持磁盘选择，所有本地盘将被组成一个VG，因此也仅允许只有一个local类型的storageSelector。
    *
    * @return string
    */
    public function getStorageType()
    {
        return $this->container['storageType'];
    }

    /**
    * Sets storageType
    *
    * @param string $storageType 存储类型，当前仅支持evs（云硬盘）或local（本地盘）；local存储类型不支持磁盘选择，所有本地盘将被组成一个VG，因此也仅允许只有一个local类型的storageSelector。
    *
    * @return $this
    */
    public function setStorageType($storageType)
    {
        $this->container['storageType'] = $storageType;
        return $this;
    }

    /**
    * Gets matchLabels
    *  matchLabels
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\StorageSelectorsMatchLabels|null
    */
    public function getMatchLabels()
    {
        return $this->container['matchLabels'];
    }

    /**
    * Sets matchLabels
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\StorageSelectorsMatchLabels|null $matchLabels matchLabels
    *
    * @return $this
    */
    public function setMatchLabels($matchLabels)
    {
        $this->container['matchLabels'] = $matchLabels;
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

