<?php

namespace HuaweiCloud\SDK\Er\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RouteTable implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RouteTable';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  路由表的id
    * name  路由表名字
    * description  描述信息
    * isDefaultAssociation  是否为默认关联的路由表
    * isDefaultPropagation  是否为默认传递路由表
    * state  路由表状态，支持的状态有pending | available | deleting | deleted | failed
    * tags  标签
    * createdAt  创建时间
    * updatedAt  更新时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'description' => 'string',
            'isDefaultAssociation' => 'bool',
            'isDefaultPropagation' => 'bool',
            'state' => 'string',
            'tags' => '\HuaweiCloud\SDK\Er\V3\Model\Tag[]',
            'createdAt' => '\DateTime',
            'updatedAt' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  路由表的id
    * name  路由表名字
    * description  描述信息
    * isDefaultAssociation  是否为默认关联的路由表
    * isDefaultPropagation  是否为默认传递路由表
    * state  路由表状态，支持的状态有pending | available | deleting | deleted | failed
    * tags  标签
    * createdAt  创建时间
    * updatedAt  更新时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'isDefaultAssociation' => null,
        'isDefaultPropagation' => null,
        'state' => null,
        'tags' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time'
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
    * id  路由表的id
    * name  路由表名字
    * description  描述信息
    * isDefaultAssociation  是否为默认关联的路由表
    * isDefaultPropagation  是否为默认传递路由表
    * state  路由表状态，支持的状态有pending | available | deleting | deleted | failed
    * tags  标签
    * createdAt  创建时间
    * updatedAt  更新时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'isDefaultAssociation' => 'is_default_association',
            'isDefaultPropagation' => 'is_default_propagation',
            'state' => 'state',
            'tags' => 'tags',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  路由表的id
    * name  路由表名字
    * description  描述信息
    * isDefaultAssociation  是否为默认关联的路由表
    * isDefaultPropagation  是否为默认传递路由表
    * state  路由表状态，支持的状态有pending | available | deleting | deleted | failed
    * tags  标签
    * createdAt  创建时间
    * updatedAt  更新时间
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'isDefaultAssociation' => 'setIsDefaultAssociation',
            'isDefaultPropagation' => 'setIsDefaultPropagation',
            'state' => 'setState',
            'tags' => 'setTags',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  路由表的id
    * name  路由表名字
    * description  描述信息
    * isDefaultAssociation  是否为默认关联的路由表
    * isDefaultPropagation  是否为默认传递路由表
    * state  路由表状态，支持的状态有pending | available | deleting | deleted | failed
    * tags  标签
    * createdAt  创建时间
    * updatedAt  更新时间
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'isDefaultAssociation' => 'getIsDefaultAssociation',
            'isDefaultPropagation' => 'getIsDefaultPropagation',
            'state' => 'getState',
            'tags' => 'getTags',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['isDefaultAssociation'] = isset($data['isDefaultAssociation']) ? $data['isDefaultAssociation'] : false;
        $this->container['isDefaultPropagation'] = isset($data['isDefaultPropagation']) ? $data['isDefaultPropagation'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
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
        if ($this->container['isDefaultAssociation'] === null) {
            $invalidProperties[] = "'isDefaultAssociation' can't be null";
        }
        if ($this->container['isDefaultPropagation'] === null) {
            $invalidProperties[] = "'isDefaultPropagation' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
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
    * Gets id
    *  路由表的id
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 路由表的id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  路由表名字
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
    * @param string $name 路由表名字
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  描述信息
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 描述信息
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets isDefaultAssociation
    *  是否为默认关联的路由表
    *
    * @return bool
    */
    public function getIsDefaultAssociation()
    {
        return $this->container['isDefaultAssociation'];
    }

    /**
    * Sets isDefaultAssociation
    *
    * @param bool $isDefaultAssociation 是否为默认关联的路由表
    *
    * @return $this
    */
    public function setIsDefaultAssociation($isDefaultAssociation)
    {
        $this->container['isDefaultAssociation'] = $isDefaultAssociation;
        return $this;
    }

    /**
    * Gets isDefaultPropagation
    *  是否为默认传递路由表
    *
    * @return bool
    */
    public function getIsDefaultPropagation()
    {
        return $this->container['isDefaultPropagation'];
    }

    /**
    * Sets isDefaultPropagation
    *
    * @param bool $isDefaultPropagation 是否为默认传递路由表
    *
    * @return $this
    */
    public function setIsDefaultPropagation($isDefaultPropagation)
    {
        $this->container['isDefaultPropagation'] = $isDefaultPropagation;
        return $this;
    }

    /**
    * Gets state
    *  路由表状态，支持的状态有pending | available | deleting | deleted | failed
    *
    * @return string
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string $state 路由表状态，支持的状态有pending | available | deleting | deleted | failed
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets tags
    *  标签
    *
    * @return \HuaweiCloud\SDK\Er\V3\Model\Tag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Er\V3\Model\Tag[]|null $tags 标签
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets createdAt
    *  创建时间
    *
    * @return \DateTime
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param \DateTime $createdAt 创建时间
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  更新时间
    *
    * @return \DateTime|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param \DateTime|null $updatedAt 更新时间
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
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

