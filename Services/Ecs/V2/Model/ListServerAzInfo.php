<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListServerAzInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListServerAzInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * availabilityZoneId  可用区ID
    * type  可用区类型
    * mode  可用区模式
    * publicBorderGroup  公网边界组，网络eip类别标识，用于查找az可用的eip池
    * alias  可用区别名
    * azGroupIds  可用区所属的AZGroup列表
    * category  可用区类型对应的子类型
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'availabilityZoneId' => 'string',
            'type' => 'string',
            'mode' => 'string',
            'publicBorderGroup' => 'string',
            'alias' => 'string',
            'azGroupIds' => 'string[]',
            'category' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * availabilityZoneId  可用区ID
    * type  可用区类型
    * mode  可用区模式
    * publicBorderGroup  公网边界组，网络eip类别标识，用于查找az可用的eip池
    * alias  可用区别名
    * azGroupIds  可用区所属的AZGroup列表
    * category  可用区类型对应的子类型
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'availabilityZoneId' => null,
        'type' => null,
        'mode' => null,
        'publicBorderGroup' => null,
        'alias' => null,
        'azGroupIds' => null,
        'category' => 'int32'
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
    * availabilityZoneId  可用区ID
    * type  可用区类型
    * mode  可用区模式
    * publicBorderGroup  公网边界组，网络eip类别标识，用于查找az可用的eip池
    * alias  可用区别名
    * azGroupIds  可用区所属的AZGroup列表
    * category  可用区类型对应的子类型
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'availabilityZoneId' => 'availability_zone_id',
            'type' => 'type',
            'mode' => 'mode',
            'publicBorderGroup' => 'public_border_group',
            'alias' => 'alias',
            'azGroupIds' => 'az_group_ids',
            'category' => 'category'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * availabilityZoneId  可用区ID
    * type  可用区类型
    * mode  可用区模式
    * publicBorderGroup  公网边界组，网络eip类别标识，用于查找az可用的eip池
    * alias  可用区别名
    * azGroupIds  可用区所属的AZGroup列表
    * category  可用区类型对应的子类型
    *
    * @var string[]
    */
    protected static $setters = [
            'availabilityZoneId' => 'setAvailabilityZoneId',
            'type' => 'setType',
            'mode' => 'setMode',
            'publicBorderGroup' => 'setPublicBorderGroup',
            'alias' => 'setAlias',
            'azGroupIds' => 'setAzGroupIds',
            'category' => 'setCategory'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * availabilityZoneId  可用区ID
    * type  可用区类型
    * mode  可用区模式
    * publicBorderGroup  公网边界组，网络eip类别标识，用于查找az可用的eip池
    * alias  可用区别名
    * azGroupIds  可用区所属的AZGroup列表
    * category  可用区类型对应的子类型
    *
    * @var string[]
    */
    protected static $getters = [
            'availabilityZoneId' => 'getAvailabilityZoneId',
            'type' => 'getType',
            'mode' => 'getMode',
            'publicBorderGroup' => 'getPublicBorderGroup',
            'alias' => 'getAlias',
            'azGroupIds' => 'getAzGroupIds',
            'category' => 'getCategory'
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
        $this->container['availabilityZoneId'] = isset($data['availabilityZoneId']) ? $data['availabilityZoneId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['publicBorderGroup'] = isset($data['publicBorderGroup']) ? $data['publicBorderGroup'] : null;
        $this->container['alias'] = isset($data['alias']) ? $data['alias'] : null;
        $this->container['azGroupIds'] = isset($data['azGroupIds']) ? $data['azGroupIds'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['availabilityZoneId'] === null) {
            $invalidProperties[] = "'availabilityZoneId' can't be null";
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
    * Gets availabilityZoneId
    *  可用区ID
    *
    * @return string
    */
    public function getAvailabilityZoneId()
    {
        return $this->container['availabilityZoneId'];
    }

    /**
    * Sets availabilityZoneId
    *
    * @param string $availabilityZoneId 可用区ID
    *
    * @return $this
    */
    public function setAvailabilityZoneId($availabilityZoneId)
    {
        $this->container['availabilityZoneId'] = $availabilityZoneId;
        return $this;
    }

    /**
    * Gets type
    *  可用区类型
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 可用区类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets mode
    *  可用区模式
    *
    * @return string|null
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param string|null $mode 可用区模式
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
        return $this;
    }

    /**
    * Gets publicBorderGroup
    *  公网边界组，网络eip类别标识，用于查找az可用的eip池
    *
    * @return string|null
    */
    public function getPublicBorderGroup()
    {
        return $this->container['publicBorderGroup'];
    }

    /**
    * Sets publicBorderGroup
    *
    * @param string|null $publicBorderGroup 公网边界组，网络eip类别标识，用于查找az可用的eip池
    *
    * @return $this
    */
    public function setPublicBorderGroup($publicBorderGroup)
    {
        $this->container['publicBorderGroup'] = $publicBorderGroup;
        return $this;
    }

    /**
    * Gets alias
    *  可用区别名
    *
    * @return string|null
    */
    public function getAlias()
    {
        return $this->container['alias'];
    }

    /**
    * Sets alias
    *
    * @param string|null $alias 可用区别名
    *
    * @return $this
    */
    public function setAlias($alias)
    {
        $this->container['alias'] = $alias;
        return $this;
    }

    /**
    * Gets azGroupIds
    *  可用区所属的AZGroup列表
    *
    * @return string[]|null
    */
    public function getAzGroupIds()
    {
        return $this->container['azGroupIds'];
    }

    /**
    * Sets azGroupIds
    *
    * @param string[]|null $azGroupIds 可用区所属的AZGroup列表
    *
    * @return $this
    */
    public function setAzGroupIds($azGroupIds)
    {
        $this->container['azGroupIds'] = $azGroupIds;
        return $this;
    }

    /**
    * Gets category
    *  可用区类型对应的子类型
    *
    * @return int|null
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param int|null $category 可用区类型对应的子类型
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
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

