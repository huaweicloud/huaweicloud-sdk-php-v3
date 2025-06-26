<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListDatabaseObjectsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListDatabaseObjectsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterId  **参数解释**： 集群ID。获取方法请参见[获取集群ID](dws_02_00068.xml)。 **约束限制**： 必须是有效的dws集群ID。 **取值范围**： 36位UUID。 **默认取值**： 不涉及。
    * type  **参数解释**： 对象类型。 **约束限制**： 不涉及。 **取值范围**： DATABASE、SCHEMA、TABLE、VIEW、COLUMN、FUNCTION、SEQUENCE、NODEGROUP **默认取值**： null
    * name  **参数解释**： 对象名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * database  **参数解释**： 数据库名。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * schema  **参数解释**： 模式名。 **约束限制**： 当对象类型为TABLE、VIEW、COLUMN、FUNCTION、SEQUENCE时必选。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * table  **参数解释**： 表名。 **约束限制**： 对象类型为COLUMN时必选。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * offset  **参数解释**： 分页偏移量，从0开始，页数减1。 **约束限制**： 不涉及。 **取值范围**： 大于等于0。 **默认取值**： 0
    * limit  **参数解释**： 分页大小。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 1000
    * isFineGrainedDisaster  **参数解释**： 是否细粒度容灾。 **约束限制**： 不涉及。 **取值范围**： true|false **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterId' => 'string',
            'type' => 'string',
            'name' => 'string',
            'database' => 'string',
            'schema' => 'string',
            'table' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'isFineGrainedDisaster' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterId  **参数解释**： 集群ID。获取方法请参见[获取集群ID](dws_02_00068.xml)。 **约束限制**： 必须是有效的dws集群ID。 **取值范围**： 36位UUID。 **默认取值**： 不涉及。
    * type  **参数解释**： 对象类型。 **约束限制**： 不涉及。 **取值范围**： DATABASE、SCHEMA、TABLE、VIEW、COLUMN、FUNCTION、SEQUENCE、NODEGROUP **默认取值**： null
    * name  **参数解释**： 对象名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * database  **参数解释**： 数据库名。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * schema  **参数解释**： 模式名。 **约束限制**： 当对象类型为TABLE、VIEW、COLUMN、FUNCTION、SEQUENCE时必选。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * table  **参数解释**： 表名。 **约束限制**： 对象类型为COLUMN时必选。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * offset  **参数解释**： 分页偏移量，从0开始，页数减1。 **约束限制**： 不涉及。 **取值范围**： 大于等于0。 **默认取值**： 0
    * limit  **参数解释**： 分页大小。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 1000
    * isFineGrainedDisaster  **参数解释**： 是否细粒度容灾。 **约束限制**： 不涉及。 **取值范围**： true|false **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterId' => null,
        'type' => null,
        'name' => null,
        'database' => null,
        'schema' => null,
        'table' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'isFineGrainedDisaster' => null
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
    * clusterId  **参数解释**： 集群ID。获取方法请参见[获取集群ID](dws_02_00068.xml)。 **约束限制**： 必须是有效的dws集群ID。 **取值范围**： 36位UUID。 **默认取值**： 不涉及。
    * type  **参数解释**： 对象类型。 **约束限制**： 不涉及。 **取值范围**： DATABASE、SCHEMA、TABLE、VIEW、COLUMN、FUNCTION、SEQUENCE、NODEGROUP **默认取值**： null
    * name  **参数解释**： 对象名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * database  **参数解释**： 数据库名。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * schema  **参数解释**： 模式名。 **约束限制**： 当对象类型为TABLE、VIEW、COLUMN、FUNCTION、SEQUENCE时必选。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * table  **参数解释**： 表名。 **约束限制**： 对象类型为COLUMN时必选。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * offset  **参数解释**： 分页偏移量，从0开始，页数减1。 **约束限制**： 不涉及。 **取值范围**： 大于等于0。 **默认取值**： 0
    * limit  **参数解释**： 分页大小。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 1000
    * isFineGrainedDisaster  **参数解释**： 是否细粒度容灾。 **约束限制**： 不涉及。 **取值范围**： true|false **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterId' => 'cluster_id',
            'type' => 'type',
            'name' => 'name',
            'database' => 'database',
            'schema' => 'schema',
            'table' => 'table',
            'offset' => 'offset',
            'limit' => 'limit',
            'isFineGrainedDisaster' => 'is_fine_grained_disaster'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterId  **参数解释**： 集群ID。获取方法请参见[获取集群ID](dws_02_00068.xml)。 **约束限制**： 必须是有效的dws集群ID。 **取值范围**： 36位UUID。 **默认取值**： 不涉及。
    * type  **参数解释**： 对象类型。 **约束限制**： 不涉及。 **取值范围**： DATABASE、SCHEMA、TABLE、VIEW、COLUMN、FUNCTION、SEQUENCE、NODEGROUP **默认取值**： null
    * name  **参数解释**： 对象名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * database  **参数解释**： 数据库名。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * schema  **参数解释**： 模式名。 **约束限制**： 当对象类型为TABLE、VIEW、COLUMN、FUNCTION、SEQUENCE时必选。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * table  **参数解释**： 表名。 **约束限制**： 对象类型为COLUMN时必选。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * offset  **参数解释**： 分页偏移量，从0开始，页数减1。 **约束限制**： 不涉及。 **取值范围**： 大于等于0。 **默认取值**： 0
    * limit  **参数解释**： 分页大小。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 1000
    * isFineGrainedDisaster  **参数解释**： 是否细粒度容灾。 **约束限制**： 不涉及。 **取值范围**： true|false **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterId' => 'setClusterId',
            'type' => 'setType',
            'name' => 'setName',
            'database' => 'setDatabase',
            'schema' => 'setSchema',
            'table' => 'setTable',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'isFineGrainedDisaster' => 'setIsFineGrainedDisaster'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterId  **参数解释**： 集群ID。获取方法请参见[获取集群ID](dws_02_00068.xml)。 **约束限制**： 必须是有效的dws集群ID。 **取值范围**： 36位UUID。 **默认取值**： 不涉及。
    * type  **参数解释**： 对象类型。 **约束限制**： 不涉及。 **取值范围**： DATABASE、SCHEMA、TABLE、VIEW、COLUMN、FUNCTION、SEQUENCE、NODEGROUP **默认取值**： null
    * name  **参数解释**： 对象名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * database  **参数解释**： 数据库名。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * schema  **参数解释**： 模式名。 **约束限制**： 当对象类型为TABLE、VIEW、COLUMN、FUNCTION、SEQUENCE时必选。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * table  **参数解释**： 表名。 **约束限制**： 对象类型为COLUMN时必选。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * offset  **参数解释**： 分页偏移量，从0开始，页数减1。 **约束限制**： 不涉及。 **取值范围**： 大于等于0。 **默认取值**： 0
    * limit  **参数解释**： 分页大小。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 1000
    * isFineGrainedDisaster  **参数解释**： 是否细粒度容灾。 **约束限制**： 不涉及。 **取值范围**： true|false **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterId' => 'getClusterId',
            'type' => 'getType',
            'name' => 'getName',
            'database' => 'getDatabase',
            'schema' => 'getSchema',
            'table' => 'getTable',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'isFineGrainedDisaster' => 'getIsFineGrainedDisaster'
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
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['database'] = isset($data['database']) ? $data['database'] : null;
        $this->container['schema'] = isset($data['schema']) ? $data['schema'] : null;
        $this->container['table'] = isset($data['table']) ? $data['table'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['isFineGrainedDisaster'] = isset($data['isFineGrainedDisaster']) ? $data['isFineGrainedDisaster'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['clusterId'] === null) {
            $invalidProperties[] = "'clusterId' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            if ((mb_strlen($this->container['type']) > 32)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['type']) < 0)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['database']) && (mb_strlen($this->container['database']) > 64)) {
                $invalidProperties[] = "invalid value for 'database', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['database']) && (mb_strlen($this->container['database']) < 0)) {
                $invalidProperties[] = "invalid value for 'database', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['schema']) && (mb_strlen($this->container['schema']) > 64)) {
                $invalidProperties[] = "invalid value for 'schema', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['schema']) && (mb_strlen($this->container['schema']) < 0)) {
                $invalidProperties[] = "invalid value for 'schema', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['table']) && (mb_strlen($this->container['table']) > 64)) {
                $invalidProperties[] = "invalid value for 'table', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['table']) && (mb_strlen($this->container['table']) < 0)) {
                $invalidProperties[] = "invalid value for 'table', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
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
    * Gets clusterId
    *  **参数解释**： 集群ID。获取方法请参见[获取集群ID](dws_02_00068.xml)。 **约束限制**： 必须是有效的dws集群ID。 **取值范围**： 36位UUID。 **默认取值**： 不涉及。
    *
    * @return string
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string $clusterId **参数解释**： 集群ID。获取方法请参见[获取集群ID](dws_02_00068.xml)。 **约束限制**： 必须是有效的dws集群ID。 **取值范围**： 36位UUID。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**： 对象类型。 **约束限制**： 不涉及。 **取值范围**： DATABASE、SCHEMA、TABLE、VIEW、COLUMN、FUNCTION、SEQUENCE、NODEGROUP **默认取值**： null
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
    * @param string $type **参数解释**： 对象类型。 **约束限制**： 不涉及。 **取值范围**： DATABASE、SCHEMA、TABLE、VIEW、COLUMN、FUNCTION、SEQUENCE、NODEGROUP **默认取值**： null
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**： 对象名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name **参数解释**： 对象名称。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets database
    *  **参数解释**： 数据库名。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getDatabase()
    {
        return $this->container['database'];
    }

    /**
    * Sets database
    *
    * @param string|null $database **参数解释**： 数据库名。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setDatabase($database)
    {
        $this->container['database'] = $database;
        return $this;
    }

    /**
    * Gets schema
    *  **参数解释**： 模式名。 **约束限制**： 当对象类型为TABLE、VIEW、COLUMN、FUNCTION、SEQUENCE时必选。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getSchema()
    {
        return $this->container['schema'];
    }

    /**
    * Sets schema
    *
    * @param string|null $schema **参数解释**： 模式名。 **约束限制**： 当对象类型为TABLE、VIEW、COLUMN、FUNCTION、SEQUENCE时必选。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setSchema($schema)
    {
        $this->container['schema'] = $schema;
        return $this;
    }

    /**
    * Gets table
    *  **参数解释**： 表名。 **约束限制**： 对象类型为COLUMN时必选。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getTable()
    {
        return $this->container['table'];
    }

    /**
    * Sets table
    *
    * @param string|null $table **参数解释**： 表名。 **约束限制**： 对象类型为COLUMN时必选。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setTable($table)
    {
        $this->container['table'] = $table;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释**： 分页偏移量，从0开始，页数减1。 **约束限制**： 不涉及。 **取值范围**： 大于等于0。 **默认取值**： 0
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset **参数解释**： 分页偏移量，从0开始，页数减1。 **约束限制**： 不涉及。 **取值范围**： 大于等于0。 **默认取值**： 0
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
    *  **参数解释**： 分页大小。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 1000
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit **参数解释**： 分页大小。 **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 1000
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets isFineGrainedDisaster
    *  **参数解释**： 是否细粒度容灾。 **约束限制**： 不涉及。 **取值范围**： true|false **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getIsFineGrainedDisaster()
    {
        return $this->container['isFineGrainedDisaster'];
    }

    /**
    * Sets isFineGrainedDisaster
    *
    * @param string|null $isFineGrainedDisaster **参数解释**： 是否细粒度容灾。 **约束限制**： 不涉及。 **取值范围**： true|false **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setIsFineGrainedDisaster($isFineGrainedDisaster)
    {
        $this->container['isFineGrainedDisaster'] = $isFineGrainedDisaster;
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

