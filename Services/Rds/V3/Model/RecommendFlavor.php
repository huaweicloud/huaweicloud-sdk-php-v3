<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RecommendFlavor implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RecommendFlavor';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  按照实例类型查询
    * flavorRef  规格码
    * cpu  CPU大小
    * mem  内存大小（单位：GB）
    * groupType  规格类型
    * volumeFlavors  磁盘规格信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'flavorRef' => 'string',
            'cpu' => 'string',
            'mem' => 'string',
            'groupType' => 'string',
            'volumeFlavors' => '\HuaweiCloud\SDK\Rds\V3\Model\VolumeFlavor[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  按照实例类型查询
    * flavorRef  规格码
    * cpu  CPU大小
    * mem  内存大小（单位：GB）
    * groupType  规格类型
    * volumeFlavors  磁盘规格信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'flavorRef' => null,
        'cpu' => null,
        'mem' => null,
        'groupType' => null,
        'volumeFlavors' => null
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
    * type  按照实例类型查询
    * flavorRef  规格码
    * cpu  CPU大小
    * mem  内存大小（单位：GB）
    * groupType  规格类型
    * volumeFlavors  磁盘规格信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'flavorRef' => 'flavor_ref',
            'cpu' => 'cpu',
            'mem' => 'mem',
            'groupType' => 'group_type',
            'volumeFlavors' => 'volume_flavors'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  按照实例类型查询
    * flavorRef  规格码
    * cpu  CPU大小
    * mem  内存大小（单位：GB）
    * groupType  规格类型
    * volumeFlavors  磁盘规格信息
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'flavorRef' => 'setFlavorRef',
            'cpu' => 'setCpu',
            'mem' => 'setMem',
            'groupType' => 'setGroupType',
            'volumeFlavors' => 'setVolumeFlavors'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  按照实例类型查询
    * flavorRef  规格码
    * cpu  CPU大小
    * mem  内存大小（单位：GB）
    * groupType  规格类型
    * volumeFlavors  磁盘规格信息
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'flavorRef' => 'getFlavorRef',
            'cpu' => 'getCpu',
            'mem' => 'getMem',
            'groupType' => 'getGroupType',
            'volumeFlavors' => 'getVolumeFlavors'
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
    const TYPE_HA = 'Ha';
    const TYPE_SINGLE = 'Single';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_HA,
            self::TYPE_SINGLE,
        ];
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
        $this->container['flavorRef'] = isset($data['flavorRef']) ? $data['flavorRef'] : null;
        $this->container['cpu'] = isset($data['cpu']) ? $data['cpu'] : null;
        $this->container['mem'] = isset($data['mem']) ? $data['mem'] : null;
        $this->container['groupType'] = isset($data['groupType']) ? $data['groupType'] : null;
        $this->container['volumeFlavors'] = isset($data['volumeFlavors']) ? $data['volumeFlavors'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['flavorRef'] === null) {
            $invalidProperties[] = "'flavorRef' can't be null";
        }
        if ($this->container['cpu'] === null) {
            $invalidProperties[] = "'cpu' can't be null";
        }
        if ($this->container['mem'] === null) {
            $invalidProperties[] = "'mem' can't be null";
        }
        if ($this->container['groupType'] === null) {
            $invalidProperties[] = "'groupType' can't be null";
        }
        if ($this->container['volumeFlavors'] === null) {
            $invalidProperties[] = "'volumeFlavors' can't be null";
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
    * Gets type
    *  按照实例类型查询
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 按照实例类型查询
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets flavorRef
    *  规格码
    *
    * @return string
    */
    public function getFlavorRef()
    {
        return $this->container['flavorRef'];
    }

    /**
    * Sets flavorRef
    *
    * @param string $flavorRef 规格码
    *
    * @return $this
    */
    public function setFlavorRef($flavorRef)
    {
        $this->container['flavorRef'] = $flavorRef;
        return $this;
    }

    /**
    * Gets cpu
    *  CPU大小
    *
    * @return string
    */
    public function getCpu()
    {
        return $this->container['cpu'];
    }

    /**
    * Sets cpu
    *
    * @param string $cpu CPU大小
    *
    * @return $this
    */
    public function setCpu($cpu)
    {
        $this->container['cpu'] = $cpu;
        return $this;
    }

    /**
    * Gets mem
    *  内存大小（单位：GB）
    *
    * @return string
    */
    public function getMem()
    {
        return $this->container['mem'];
    }

    /**
    * Sets mem
    *
    * @param string $mem 内存大小（单位：GB）
    *
    * @return $this
    */
    public function setMem($mem)
    {
        $this->container['mem'] = $mem;
        return $this;
    }

    /**
    * Gets groupType
    *  规格类型
    *
    * @return string
    */
    public function getGroupType()
    {
        return $this->container['groupType'];
    }

    /**
    * Sets groupType
    *
    * @param string $groupType 规格类型
    *
    * @return $this
    */
    public function setGroupType($groupType)
    {
        $this->container['groupType'] = $groupType;
        return $this;
    }

    /**
    * Gets volumeFlavors
    *  磁盘规格信息
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\VolumeFlavor[]
    */
    public function getVolumeFlavors()
    {
        return $this->container['volumeFlavors'];
    }

    /**
    * Sets volumeFlavors
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\VolumeFlavor[] $volumeFlavors 磁盘规格信息
    *
    * @return $this
    */
    public function setVolumeFlavors($volumeFlavors)
    {
        $this->container['volumeFlavors'] = $volumeFlavors;
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

