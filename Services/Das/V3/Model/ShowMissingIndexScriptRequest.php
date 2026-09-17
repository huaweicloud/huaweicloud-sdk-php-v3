<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowMissingIndexScriptRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowMissingIndexScriptRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  实例ID
    * tableName  表名
    * equalityColumns  相等列
    * inequalityColumns  不等列
    * includedColumns  包含列
    * objectId  对象ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'tableName' => 'string',
            'equalityColumns' => 'string',
            'inequalityColumns' => 'string',
            'includedColumns' => 'string',
            'objectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  实例ID
    * tableName  表名
    * equalityColumns  相等列
    * inequalityColumns  不等列
    * includedColumns  包含列
    * objectId  对象ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'tableName' => null,
        'equalityColumns' => null,
        'inequalityColumns' => null,
        'includedColumns' => null,
        'objectId' => null
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
    * instanceId  实例ID
    * tableName  表名
    * equalityColumns  相等列
    * inequalityColumns  不等列
    * includedColumns  包含列
    * objectId  对象ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'tableName' => 'table_name',
            'equalityColumns' => 'equality_columns',
            'inequalityColumns' => 'inequality_columns',
            'includedColumns' => 'included_columns',
            'objectId' => 'object_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  实例ID
    * tableName  表名
    * equalityColumns  相等列
    * inequalityColumns  不等列
    * includedColumns  包含列
    * objectId  对象ID
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'tableName' => 'setTableName',
            'equalityColumns' => 'setEqualityColumns',
            'inequalityColumns' => 'setInequalityColumns',
            'includedColumns' => 'setIncludedColumns',
            'objectId' => 'setObjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  实例ID
    * tableName  表名
    * equalityColumns  相等列
    * inequalityColumns  不等列
    * includedColumns  包含列
    * objectId  对象ID
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'tableName' => 'getTableName',
            'equalityColumns' => 'getEqualityColumns',
            'inequalityColumns' => 'getInequalityColumns',
            'includedColumns' => 'getIncludedColumns',
            'objectId' => 'getObjectId'
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['tableName'] = isset($data['tableName']) ? $data['tableName'] : null;
        $this->container['equalityColumns'] = isset($data['equalityColumns']) ? $data['equalityColumns'] : null;
        $this->container['inequalityColumns'] = isset($data['inequalityColumns']) ? $data['inequalityColumns'] : null;
        $this->container['includedColumns'] = isset($data['includedColumns']) ? $data['includedColumns'] : null;
        $this->container['objectId'] = isset($data['objectId']) ? $data['objectId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
        if ($this->container['tableName'] === null) {
            $invalidProperties[] = "'tableName' can't be null";
        }
        if ($this->container['equalityColumns'] === null) {
            $invalidProperties[] = "'equalityColumns' can't be null";
        }
        if ($this->container['inequalityColumns'] === null) {
            $invalidProperties[] = "'inequalityColumns' can't be null";
        }
        if ($this->container['includedColumns'] === null) {
            $invalidProperties[] = "'includedColumns' can't be null";
        }
        if ($this->container['objectId'] === null) {
            $invalidProperties[] = "'objectId' can't be null";
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
    * Gets instanceId
    *  实例ID
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId 实例ID
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets tableName
    *  表名
    *
    * @return string
    */
    public function getTableName()
    {
        return $this->container['tableName'];
    }

    /**
    * Sets tableName
    *
    * @param string $tableName 表名
    *
    * @return $this
    */
    public function setTableName($tableName)
    {
        $this->container['tableName'] = $tableName;
        return $this;
    }

    /**
    * Gets equalityColumns
    *  相等列
    *
    * @return string
    */
    public function getEqualityColumns()
    {
        return $this->container['equalityColumns'];
    }

    /**
    * Sets equalityColumns
    *
    * @param string $equalityColumns 相等列
    *
    * @return $this
    */
    public function setEqualityColumns($equalityColumns)
    {
        $this->container['equalityColumns'] = $equalityColumns;
        return $this;
    }

    /**
    * Gets inequalityColumns
    *  不等列
    *
    * @return string
    */
    public function getInequalityColumns()
    {
        return $this->container['inequalityColumns'];
    }

    /**
    * Sets inequalityColumns
    *
    * @param string $inequalityColumns 不等列
    *
    * @return $this
    */
    public function setInequalityColumns($inequalityColumns)
    {
        $this->container['inequalityColumns'] = $inequalityColumns;
        return $this;
    }

    /**
    * Gets includedColumns
    *  包含列
    *
    * @return string
    */
    public function getIncludedColumns()
    {
        return $this->container['includedColumns'];
    }

    /**
    * Sets includedColumns
    *
    * @param string $includedColumns 包含列
    *
    * @return $this
    */
    public function setIncludedColumns($includedColumns)
    {
        $this->container['includedColumns'] = $includedColumns;
        return $this;
    }

    /**
    * Gets objectId
    *  对象ID
    *
    * @return string
    */
    public function getObjectId()
    {
        return $this->container['objectId'];
    }

    /**
    * Sets objectId
    *
    * @param string $objectId 对象ID
    *
    * @return $this
    */
    public function setObjectId($objectId)
    {
        $this->container['objectId'] = $objectId;
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

