<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListTableModelRelationsResultDataValueRecords implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListTableModelRelationsResult_data_value_records';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tables  TableModelVO信息。
    * inheritances  层级信息信息。
    * relations  RelationVO信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tables' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\TableModelVO[]',
            'inheritances' => 'object[]',
            'relations' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\RelationVO[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tables  TableModelVO信息。
    * inheritances  层级信息信息。
    * relations  RelationVO信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tables' => null,
        'inheritances' => null,
        'relations' => null
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
    * tables  TableModelVO信息。
    * inheritances  层级信息信息。
    * relations  RelationVO信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tables' => 'tables',
            'inheritances' => 'inheritances',
            'relations' => 'relations'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tables  TableModelVO信息。
    * inheritances  层级信息信息。
    * relations  RelationVO信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'tables' => 'setTables',
            'inheritances' => 'setInheritances',
            'relations' => 'setRelations'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tables  TableModelVO信息。
    * inheritances  层级信息信息。
    * relations  RelationVO信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'tables' => 'getTables',
            'inheritances' => 'getInheritances',
            'relations' => 'getRelations'
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
        $this->container['tables'] = isset($data['tables']) ? $data['tables'] : null;
        $this->container['inheritances'] = isset($data['inheritances']) ? $data['inheritances'] : null;
        $this->container['relations'] = isset($data['relations']) ? $data['relations'] : null;
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
    * Gets tables
    *  TableModelVO信息。
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\TableModelVO[]|null
    */
    public function getTables()
    {
        return $this->container['tables'];
    }

    /**
    * Sets tables
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\TableModelVO[]|null $tables TableModelVO信息。
    *
    * @return $this
    */
    public function setTables($tables)
    {
        $this->container['tables'] = $tables;
        return $this;
    }

    /**
    * Gets inheritances
    *  层级信息信息。
    *
    * @return object[]|null
    */
    public function getInheritances()
    {
        return $this->container['inheritances'];
    }

    /**
    * Sets inheritances
    *
    * @param object[]|null $inheritances 层级信息信息。
    *
    * @return $this
    */
    public function setInheritances($inheritances)
    {
        $this->container['inheritances'] = $inheritances;
        return $this;
    }

    /**
    * Gets relations
    *  RelationVO信息。
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\RelationVO[]|null
    */
    public function getRelations()
    {
        return $this->container['relations'];
    }

    /**
    * Sets relations
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\RelationVO[]|null $relations RelationVO信息。
    *
    * @return $this
    */
    public function setRelations($relations)
    {
        $this->container['relations'] = $relations;
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

