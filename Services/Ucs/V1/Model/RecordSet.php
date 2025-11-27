<?php

namespace HuaweiCloud\SDK\Ucs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RecordSet implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RecordSet';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  记录集id
    * description  描述信息
    * zoneId  可用区id
    * zoneName  可用区名称
    * type  记录类型
    * projectId  项目id
    * name  记录集名称
    * ttl  生存时间
    * records  记录信息
    * weight  比例
    * line  解析线路ID
    * createAt  创建时间
    * updateAt  更新时间
    * default  是否为默认记录集合
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'description' => 'string',
            'zoneId' => 'string',
            'zoneName' => 'string',
            'type' => 'string',
            'projectId' => 'string',
            'name' => 'string',
            'ttl' => 'int',
            'records' => 'string[]',
            'weight' => 'int',
            'line' => 'string',
            'createAt' => 'string',
            'updateAt' => 'string',
            'default' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  记录集id
    * description  描述信息
    * zoneId  可用区id
    * zoneName  可用区名称
    * type  记录类型
    * projectId  项目id
    * name  记录集名称
    * ttl  生存时间
    * records  记录信息
    * weight  比例
    * line  解析线路ID
    * createAt  创建时间
    * updateAt  更新时间
    * default  是否为默认记录集合
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'description' => null,
        'zoneId' => null,
        'zoneName' => null,
        'type' => null,
        'projectId' => null,
        'name' => null,
        'ttl' => 'int32',
        'records' => null,
        'weight' => 'int32',
        'line' => null,
        'createAt' => null,
        'updateAt' => null,
        'default' => null
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
    * id  记录集id
    * description  描述信息
    * zoneId  可用区id
    * zoneName  可用区名称
    * type  记录类型
    * projectId  项目id
    * name  记录集名称
    * ttl  生存时间
    * records  记录信息
    * weight  比例
    * line  解析线路ID
    * createAt  创建时间
    * updateAt  更新时间
    * default  是否为默认记录集合
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'description' => 'description',
            'zoneId' => 'zone_id',
            'zoneName' => 'zone_name',
            'type' => 'type',
            'projectId' => 'project_id',
            'name' => 'name',
            'ttl' => 'ttl',
            'records' => 'records',
            'weight' => 'weight',
            'line' => 'line',
            'createAt' => 'create_at',
            'updateAt' => 'update_at',
            'default' => 'default'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  记录集id
    * description  描述信息
    * zoneId  可用区id
    * zoneName  可用区名称
    * type  记录类型
    * projectId  项目id
    * name  记录集名称
    * ttl  生存时间
    * records  记录信息
    * weight  比例
    * line  解析线路ID
    * createAt  创建时间
    * updateAt  更新时间
    * default  是否为默认记录集合
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'description' => 'setDescription',
            'zoneId' => 'setZoneId',
            'zoneName' => 'setZoneName',
            'type' => 'setType',
            'projectId' => 'setProjectId',
            'name' => 'setName',
            'ttl' => 'setTtl',
            'records' => 'setRecords',
            'weight' => 'setWeight',
            'line' => 'setLine',
            'createAt' => 'setCreateAt',
            'updateAt' => 'setUpdateAt',
            'default' => 'setDefault'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  记录集id
    * description  描述信息
    * zoneId  可用区id
    * zoneName  可用区名称
    * type  记录类型
    * projectId  项目id
    * name  记录集名称
    * ttl  生存时间
    * records  记录信息
    * weight  比例
    * line  解析线路ID
    * createAt  创建时间
    * updateAt  更新时间
    * default  是否为默认记录集合
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'description' => 'getDescription',
            'zoneId' => 'getZoneId',
            'zoneName' => 'getZoneName',
            'type' => 'getType',
            'projectId' => 'getProjectId',
            'name' => 'getName',
            'ttl' => 'getTtl',
            'records' => 'getRecords',
            'weight' => 'getWeight',
            'line' => 'getLine',
            'createAt' => 'getCreateAt',
            'updateAt' => 'getUpdateAt',
            'default' => 'getDefault'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['zoneId'] = isset($data['zoneId']) ? $data['zoneId'] : null;
        $this->container['zoneName'] = isset($data['zoneName']) ? $data['zoneName'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['ttl'] = isset($data['ttl']) ? $data['ttl'] : null;
        $this->container['records'] = isset($data['records']) ? $data['records'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['line'] = isset($data['line']) ? $data['line'] : null;
        $this->container['createAt'] = isset($data['createAt']) ? $data['createAt'] : null;
        $this->container['updateAt'] = isset($data['updateAt']) ? $data['updateAt'] : null;
        $this->container['default'] = isset($data['default']) ? $data['default'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['ttl'] === null) {
            $invalidProperties[] = "'ttl' can't be null";
        }
        if ($this->container['records'] === null) {
            $invalidProperties[] = "'records' can't be null";
        }
        if ($this->container['weight'] === null) {
            $invalidProperties[] = "'weight' can't be null";
        }
        if ($this->container['line'] === null) {
            $invalidProperties[] = "'line' can't be null";
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
    *  记录集id
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 记录集id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
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
    * Gets zoneId
    *  可用区id
    *
    * @return string|null
    */
    public function getZoneId()
    {
        return $this->container['zoneId'];
    }

    /**
    * Sets zoneId
    *
    * @param string|null $zoneId 可用区id
    *
    * @return $this
    */
    public function setZoneId($zoneId)
    {
        $this->container['zoneId'] = $zoneId;
        return $this;
    }

    /**
    * Gets zoneName
    *  可用区名称
    *
    * @return string|null
    */
    public function getZoneName()
    {
        return $this->container['zoneName'];
    }

    /**
    * Sets zoneName
    *
    * @param string|null $zoneName 可用区名称
    *
    * @return $this
    */
    public function setZoneName($zoneName)
    {
        $this->container['zoneName'] = $zoneName;
        return $this;
    }

    /**
    * Gets type
    *  记录类型
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
    * @param string|null $type 记录类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets projectId
    *  项目id
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 项目id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets name
    *  记录集名称
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
    * @param string $name 记录集名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets ttl
    *  生存时间
    *
    * @return int
    */
    public function getTtl()
    {
        return $this->container['ttl'];
    }

    /**
    * Sets ttl
    *
    * @param int $ttl 生存时间
    *
    * @return $this
    */
    public function setTtl($ttl)
    {
        $this->container['ttl'] = $ttl;
        return $this;
    }

    /**
    * Gets records
    *  记录信息
    *
    * @return string[]
    */
    public function getRecords()
    {
        return $this->container['records'];
    }

    /**
    * Sets records
    *
    * @param string[] $records 记录信息
    *
    * @return $this
    */
    public function setRecords($records)
    {
        $this->container['records'] = $records;
        return $this;
    }

    /**
    * Gets weight
    *  比例
    *
    * @return int
    */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
    * Sets weight
    *
    * @param int $weight 比例
    *
    * @return $this
    */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;
        return $this;
    }

    /**
    * Gets line
    *  解析线路ID
    *
    * @return string
    */
    public function getLine()
    {
        return $this->container['line'];
    }

    /**
    * Sets line
    *
    * @param string $line 解析线路ID
    *
    * @return $this
    */
    public function setLine($line)
    {
        $this->container['line'] = $line;
        return $this;
    }

    /**
    * Gets createAt
    *  创建时间
    *
    * @return string|null
    */
    public function getCreateAt()
    {
        return $this->container['createAt'];
    }

    /**
    * Sets createAt
    *
    * @param string|null $createAt 创建时间
    *
    * @return $this
    */
    public function setCreateAt($createAt)
    {
        $this->container['createAt'] = $createAt;
        return $this;
    }

    /**
    * Gets updateAt
    *  更新时间
    *
    * @return string|null
    */
    public function getUpdateAt()
    {
        return $this->container['updateAt'];
    }

    /**
    * Sets updateAt
    *
    * @param string|null $updateAt 更新时间
    *
    * @return $this
    */
    public function setUpdateAt($updateAt)
    {
        $this->container['updateAt'] = $updateAt;
        return $this;
    }

    /**
    * Gets default
    *  是否为默认记录集合
    *
    * @return bool|null
    */
    public function getDefault()
    {
        return $this->container['default'];
    }

    /**
    * Sets default
    *
    * @param bool|null $default 是否为默认记录集合
    *
    * @return $this
    */
    public function setDefault($default)
    {
        $this->container['default'] = $default;
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

