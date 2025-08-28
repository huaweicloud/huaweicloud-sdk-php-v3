<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FlavorGroupInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FlavorGroupInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * groupType  计算资源架构类型，目前分X86和ARM两种。
    * flavors  规格详情。
    * offset  分页参数: 起始值。
    * limit  分页参数：每页多少条。
    * total  计算类型规格总数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'groupType' => 'string',
            'flavors' => '\HuaweiCloud\SDK\Ddm\V1\Model\Flavor[]',
            'offset' => 'int',
            'limit' => 'int',
            'total' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * groupType  计算资源架构类型，目前分X86和ARM两种。
    * flavors  规格详情。
    * offset  分页参数: 起始值。
    * limit  分页参数：每页多少条。
    * total  计算类型规格总数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'groupType' => null,
        'flavors' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'total' => 'int32'
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
    * groupType  计算资源架构类型，目前分X86和ARM两种。
    * flavors  规格详情。
    * offset  分页参数: 起始值。
    * limit  分页参数：每页多少条。
    * total  计算类型规格总数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'groupType' => 'group_type',
            'flavors' => 'flavors',
            'offset' => 'offset',
            'limit' => 'limit',
            'total' => 'total'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groupType  计算资源架构类型，目前分X86和ARM两种。
    * flavors  规格详情。
    * offset  分页参数: 起始值。
    * limit  分页参数：每页多少条。
    * total  计算类型规格总数。
    *
    * @var string[]
    */
    protected static $setters = [
            'groupType' => 'setGroupType',
            'flavors' => 'setFlavors',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'total' => 'setTotal'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * groupType  计算资源架构类型，目前分X86和ARM两种。
    * flavors  规格详情。
    * offset  分页参数: 起始值。
    * limit  分页参数：每页多少条。
    * total  计算类型规格总数。
    *
    * @var string[]
    */
    protected static $getters = [
            'groupType' => 'getGroupType',
            'flavors' => 'getFlavors',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'total' => 'getTotal'
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
        $this->container['groupType'] = isset($data['groupType']) ? $data['groupType'] : null;
        $this->container['flavors'] = isset($data['flavors']) ? $data['flavors'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['groupType'] === null) {
            $invalidProperties[] = "'groupType' can't be null";
        }
        if ($this->container['flavors'] === null) {
            $invalidProperties[] = "'flavors' can't be null";
        }
        if ($this->container['offset'] === null) {
            $invalidProperties[] = "'offset' can't be null";
        }
        if ($this->container['limit'] === null) {
            $invalidProperties[] = "'limit' can't be null";
        }
        if ($this->container['total'] === null) {
            $invalidProperties[] = "'total' can't be null";
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
    * Gets groupType
    *  计算资源架构类型，目前分X86和ARM两种。
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
    * @param string $groupType 计算资源架构类型，目前分X86和ARM两种。
    *
    * @return $this
    */
    public function setGroupType($groupType)
    {
        $this->container['groupType'] = $groupType;
        return $this;
    }

    /**
    * Gets flavors
    *  规格详情。
    *
    * @return \HuaweiCloud\SDK\Ddm\V1\Model\Flavor[]
    */
    public function getFlavors()
    {
        return $this->container['flavors'];
    }

    /**
    * Sets flavors
    *
    * @param \HuaweiCloud\SDK\Ddm\V1\Model\Flavor[] $flavors 规格详情。
    *
    * @return $this
    */
    public function setFlavors($flavors)
    {
        $this->container['flavors'] = $flavors;
        return $this;
    }

    /**
    * Gets offset
    *  分页参数: 起始值。
    *
    * @return int
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int $offset 分页参数: 起始值。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  分页参数：每页多少条。
    *
    * @return int
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int $limit 分页参数：每页多少条。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets total
    *  计算类型规格总数。
    *
    * @return int
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param int $total 计算类型规格总数。
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
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

