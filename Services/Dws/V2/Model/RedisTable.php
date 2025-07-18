<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RedisTable implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RedisTable';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tableName  **参数解释**： 表名。 **取值范围**： 不涉及。
    * id  **参数解释**： 表唯一id。 **取值范围**： 不涉及。
    * schemaName  **参数解释**： schema名。 **取值范围**： 不涉及。
    * logicalClusterName  **参数解释**： 逻辑集群名。 **取值范围**： 不涉及。
    * size  **参数解释**： 表大小。 **取值范围**： 不涉及。
    * status  **参数解释**： 重分布类型。 **取值范围**： i：重分布中； y：重分布完成； n：未开始。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tableName' => 'string',
            'id' => 'int',
            'schemaName' => 'string',
            'logicalClusterName' => 'string',
            'size' => 'int',
            'status' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tableName  **参数解释**： 表名。 **取值范围**： 不涉及。
    * id  **参数解释**： 表唯一id。 **取值范围**： 不涉及。
    * schemaName  **参数解释**： schema名。 **取值范围**： 不涉及。
    * logicalClusterName  **参数解释**： 逻辑集群名。 **取值范围**： 不涉及。
    * size  **参数解释**： 表大小。 **取值范围**： 不涉及。
    * status  **参数解释**： 重分布类型。 **取值范围**： i：重分布中； y：重分布完成； n：未开始。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tableName' => null,
        'id' => 'int32',
        'schemaName' => null,
        'logicalClusterName' => null,
        'size' => 'int64',
        'status' => null
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
    * tableName  **参数解释**： 表名。 **取值范围**： 不涉及。
    * id  **参数解释**： 表唯一id。 **取值范围**： 不涉及。
    * schemaName  **参数解释**： schema名。 **取值范围**： 不涉及。
    * logicalClusterName  **参数解释**： 逻辑集群名。 **取值范围**： 不涉及。
    * size  **参数解释**： 表大小。 **取值范围**： 不涉及。
    * status  **参数解释**： 重分布类型。 **取值范围**： i：重分布中； y：重分布完成； n：未开始。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tableName' => 'table_name',
            'id' => 'id',
            'schemaName' => 'schema_name',
            'logicalClusterName' => 'logical_cluster_name',
            'size' => 'size',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tableName  **参数解释**： 表名。 **取值范围**： 不涉及。
    * id  **参数解释**： 表唯一id。 **取值范围**： 不涉及。
    * schemaName  **参数解释**： schema名。 **取值范围**： 不涉及。
    * logicalClusterName  **参数解释**： 逻辑集群名。 **取值范围**： 不涉及。
    * size  **参数解释**： 表大小。 **取值范围**： 不涉及。
    * status  **参数解释**： 重分布类型。 **取值范围**： i：重分布中； y：重分布完成； n：未开始。
    *
    * @var string[]
    */
    protected static $setters = [
            'tableName' => 'setTableName',
            'id' => 'setId',
            'schemaName' => 'setSchemaName',
            'logicalClusterName' => 'setLogicalClusterName',
            'size' => 'setSize',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tableName  **参数解释**： 表名。 **取值范围**： 不涉及。
    * id  **参数解释**： 表唯一id。 **取值范围**： 不涉及。
    * schemaName  **参数解释**： schema名。 **取值范围**： 不涉及。
    * logicalClusterName  **参数解释**： 逻辑集群名。 **取值范围**： 不涉及。
    * size  **参数解释**： 表大小。 **取值范围**： 不涉及。
    * status  **参数解释**： 重分布类型。 **取值范围**： i：重分布中； y：重分布完成； n：未开始。
    *
    * @var string[]
    */
    protected static $getters = [
            'tableName' => 'getTableName',
            'id' => 'getId',
            'schemaName' => 'getSchemaName',
            'logicalClusterName' => 'getLogicalClusterName',
            'size' => 'getSize',
            'status' => 'getStatus'
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
        $this->container['tableName'] = isset($data['tableName']) ? $data['tableName'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['schemaName'] = isset($data['schemaName']) ? $data['schemaName'] : null;
        $this->container['logicalClusterName'] = isset($data['logicalClusterName']) ? $data['logicalClusterName'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
    * Gets tableName
    *  **参数解释**： 表名。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getTableName()
    {
        return $this->container['tableName'];
    }

    /**
    * Sets tableName
    *
    * @param string|null $tableName **参数解释**： 表名。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setTableName($tableName)
    {
        $this->container['tableName'] = $tableName;
        return $this;
    }

    /**
    * Gets id
    *  **参数解释**： 表唯一id。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id **参数解释**： 表唯一id。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets schemaName
    *  **参数解释**： schema名。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getSchemaName()
    {
        return $this->container['schemaName'];
    }

    /**
    * Sets schemaName
    *
    * @param string|null $schemaName **参数解释**： schema名。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setSchemaName($schemaName)
    {
        $this->container['schemaName'] = $schemaName;
        return $this;
    }

    /**
    * Gets logicalClusterName
    *  **参数解释**： 逻辑集群名。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getLogicalClusterName()
    {
        return $this->container['logicalClusterName'];
    }

    /**
    * Sets logicalClusterName
    *
    * @param string|null $logicalClusterName **参数解释**： 逻辑集群名。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setLogicalClusterName($logicalClusterName)
    {
        $this->container['logicalClusterName'] = $logicalClusterName;
        return $this;
    }

    /**
    * Gets size
    *  **参数解释**： 表大小。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int|null $size **参数解释**： 表大小。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**： 重分布类型。 **取值范围**： i：重分布中； y：重分布完成； n：未开始。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status **参数解释**： 重分布类型。 **取值范围**： i：重分布中； y：重分布完成； n：未开始。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

