<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MappingSourceTableVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MappingSourceTableVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * table1Id  表1ID。
    * table2Id  表2ID。
    * table1Name  表1名称。
    * table2Name  表2名称。
    * joinType  关联类型。LEFT(左外连接)、RIGHT(右外连接)、INNER(内连接)、FULL(全连接)。
    * joinFields  on条件。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'table1Id' => 'int',
            'table2Id' => 'int',
            'table1Name' => 'string',
            'table2Name' => 'string',
            'joinType' => 'string',
            'joinFields' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\MappingJoinFieldVO[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * table1Id  表1ID。
    * table2Id  表2ID。
    * table1Name  表1名称。
    * table2Name  表2名称。
    * joinType  关联类型。LEFT(左外连接)、RIGHT(右外连接)、INNER(内连接)、FULL(全连接)。
    * joinFields  on条件。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'table1Id' => 'int64',
        'table2Id' => 'int64',
        'table1Name' => null,
        'table2Name' => null,
        'joinType' => null,
        'joinFields' => null
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
    * table1Id  表1ID。
    * table2Id  表2ID。
    * table1Name  表1名称。
    * table2Name  表2名称。
    * joinType  关联类型。LEFT(左外连接)、RIGHT(右外连接)、INNER(内连接)、FULL(全连接)。
    * joinFields  on条件。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'table1Id' => 'table1_id',
            'table2Id' => 'table2_id',
            'table1Name' => 'table1_name',
            'table2Name' => 'table2_name',
            'joinType' => 'join_type',
            'joinFields' => 'join_fields'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * table1Id  表1ID。
    * table2Id  表2ID。
    * table1Name  表1名称。
    * table2Name  表2名称。
    * joinType  关联类型。LEFT(左外连接)、RIGHT(右外连接)、INNER(内连接)、FULL(全连接)。
    * joinFields  on条件。
    *
    * @var string[]
    */
    protected static $setters = [
            'table1Id' => 'setTable1Id',
            'table2Id' => 'setTable2Id',
            'table1Name' => 'setTable1Name',
            'table2Name' => 'setTable2Name',
            'joinType' => 'setJoinType',
            'joinFields' => 'setJoinFields'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * table1Id  表1ID。
    * table2Id  表2ID。
    * table1Name  表1名称。
    * table2Name  表2名称。
    * joinType  关联类型。LEFT(左外连接)、RIGHT(右外连接)、INNER(内连接)、FULL(全连接)。
    * joinFields  on条件。
    *
    * @var string[]
    */
    protected static $getters = [
            'table1Id' => 'getTable1Id',
            'table2Id' => 'getTable2Id',
            'table1Name' => 'getTable1Name',
            'table2Name' => 'getTable2Name',
            'joinType' => 'getJoinType',
            'joinFields' => 'getJoinFields'
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
    const JOIN_TYPE_LEFT = 'LEFT';
    const JOIN_TYPE_RIGHT = 'RIGHT';
    const JOIN_TYPE_INNER = 'INNER';
    const JOIN_TYPE_FULL = 'FULL';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getJoinTypeAllowableValues()
    {
        return [
            self::JOIN_TYPE_LEFT,
            self::JOIN_TYPE_RIGHT,
            self::JOIN_TYPE_INNER,
            self::JOIN_TYPE_FULL,
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
        $this->container['table1Id'] = isset($data['table1Id']) ? $data['table1Id'] : null;
        $this->container['table2Id'] = isset($data['table2Id']) ? $data['table2Id'] : null;
        $this->container['table1Name'] = isset($data['table1Name']) ? $data['table1Name'] : null;
        $this->container['table2Name'] = isset($data['table2Name']) ? $data['table2Name'] : null;
        $this->container['joinType'] = isset($data['joinType']) ? $data['joinType'] : null;
        $this->container['joinFields'] = isset($data['joinFields']) ? $data['joinFields'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['table1Id'] === null) {
            $invalidProperties[] = "'table1Id' can't be null";
        }
        if ($this->container['table1Name'] === null) {
            $invalidProperties[] = "'table1Name' can't be null";
        }
        if ($this->container['joinType'] === null) {
            $invalidProperties[] = "'joinType' can't be null";
        }
            $allowedValues = $this->getJoinTypeAllowableValues();
                if (!is_null($this->container['joinType']) && !in_array($this->container['joinType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'joinType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['joinFields'] === null) {
            $invalidProperties[] = "'joinFields' can't be null";
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
    * Gets table1Id
    *  表1ID。
    *
    * @return int
    */
    public function getTable1Id()
    {
        return $this->container['table1Id'];
    }

    /**
    * Sets table1Id
    *
    * @param int $table1Id 表1ID。
    *
    * @return $this
    */
    public function setTable1Id($table1Id)
    {
        $this->container['table1Id'] = $table1Id;
        return $this;
    }

    /**
    * Gets table2Id
    *  表2ID。
    *
    * @return int|null
    */
    public function getTable2Id()
    {
        return $this->container['table2Id'];
    }

    /**
    * Sets table2Id
    *
    * @param int|null $table2Id 表2ID。
    *
    * @return $this
    */
    public function setTable2Id($table2Id)
    {
        $this->container['table2Id'] = $table2Id;
        return $this;
    }

    /**
    * Gets table1Name
    *  表1名称。
    *
    * @return string
    */
    public function getTable1Name()
    {
        return $this->container['table1Name'];
    }

    /**
    * Sets table1Name
    *
    * @param string $table1Name 表1名称。
    *
    * @return $this
    */
    public function setTable1Name($table1Name)
    {
        $this->container['table1Name'] = $table1Name;
        return $this;
    }

    /**
    * Gets table2Name
    *  表2名称。
    *
    * @return string|null
    */
    public function getTable2Name()
    {
        return $this->container['table2Name'];
    }

    /**
    * Sets table2Name
    *
    * @param string|null $table2Name 表2名称。
    *
    * @return $this
    */
    public function setTable2Name($table2Name)
    {
        $this->container['table2Name'] = $table2Name;
        return $this;
    }

    /**
    * Gets joinType
    *  关联类型。LEFT(左外连接)、RIGHT(右外连接)、INNER(内连接)、FULL(全连接)。
    *
    * @return string
    */
    public function getJoinType()
    {
        return $this->container['joinType'];
    }

    /**
    * Sets joinType
    *
    * @param string $joinType 关联类型。LEFT(左外连接)、RIGHT(右外连接)、INNER(内连接)、FULL(全连接)。
    *
    * @return $this
    */
    public function setJoinType($joinType)
    {
        $this->container['joinType'] = $joinType;
        return $this;
    }

    /**
    * Gets joinFields
    *  on条件。
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\MappingJoinFieldVO[]
    */
    public function getJoinFields()
    {
        return $this->container['joinFields'];
    }

    /**
    * Sets joinFields
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\MappingJoinFieldVO[] $joinFields on条件。
    *
    * @return $this
    */
    public function setJoinFields($joinFields)
    {
        $this->container['joinFields'] = $joinFields;
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

