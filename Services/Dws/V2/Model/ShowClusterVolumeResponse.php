<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowClusterVolumeResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowClusterVolumeResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * duplicate  **参数解释**： 单节点磁盘数量。 **取值范围**： 不涉及。
    * diskInfoList  **参数解释**： 节点容量详情。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'duplicate' => 'int',
            'diskInfoList' => '\HuaweiCloud\SDK\Dws\V2\Model\DiskInfoResponse[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * duplicate  **参数解释**： 单节点磁盘数量。 **取值范围**： 不涉及。
    * diskInfoList  **参数解释**： 节点容量详情。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'duplicate' => 'int32',
        'diskInfoList' => null
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
    * duplicate  **参数解释**： 单节点磁盘数量。 **取值范围**： 不涉及。
    * diskInfoList  **参数解释**： 节点容量详情。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'duplicate' => 'duplicate',
            'diskInfoList' => 'disk_info_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * duplicate  **参数解释**： 单节点磁盘数量。 **取值范围**： 不涉及。
    * diskInfoList  **参数解释**： 节点容量详情。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'duplicate' => 'setDuplicate',
            'diskInfoList' => 'setDiskInfoList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * duplicate  **参数解释**： 单节点磁盘数量。 **取值范围**： 不涉及。
    * diskInfoList  **参数解释**： 节点容量详情。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'duplicate' => 'getDuplicate',
            'diskInfoList' => 'getDiskInfoList'
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
        $this->container['duplicate'] = isset($data['duplicate']) ? $data['duplicate'] : null;
        $this->container['diskInfoList'] = isset($data['diskInfoList']) ? $data['diskInfoList'] : null;
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
    * Gets duplicate
    *  **参数解释**： 单节点磁盘数量。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getDuplicate()
    {
        return $this->container['duplicate'];
    }

    /**
    * Sets duplicate
    *
    * @param int|null $duplicate **参数解释**： 单节点磁盘数量。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDuplicate($duplicate)
    {
        $this->container['duplicate'] = $duplicate;
        return $this;
    }

    /**
    * Gets diskInfoList
    *  **参数解释**： 节点容量详情。 **取值范围**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\DiskInfoResponse[]|null
    */
    public function getDiskInfoList()
    {
        return $this->container['diskInfoList'];
    }

    /**
    * Sets diskInfoList
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\DiskInfoResponse[]|null $diskInfoList **参数解释**： 节点容量详情。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDiskInfoList($diskInfoList)
    {
        $this->container['diskInfoList'] = $diskInfoList;
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

