<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteColumnInfoReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteColumnInfoReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tableIds  列所属表的id
    * schemaIds  列所属schema的id
    * dbIds  列所属库的id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tableIds' => 'string[]',
            'schemaIds' => 'string[]',
            'dbIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tableIds  列所属表的id
    * schemaIds  列所属schema的id
    * dbIds  列所属库的id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tableIds' => null,
        'schemaIds' => null,
        'dbIds' => null
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
    * tableIds  列所属表的id
    * schemaIds  列所属schema的id
    * dbIds  列所属库的id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tableIds' => 'table_ids',
            'schemaIds' => 'schema_ids',
            'dbIds' => 'db_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tableIds  列所属表的id
    * schemaIds  列所属schema的id
    * dbIds  列所属库的id
    *
    * @var string[]
    */
    protected static $setters = [
            'tableIds' => 'setTableIds',
            'schemaIds' => 'setSchemaIds',
            'dbIds' => 'setDbIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tableIds  列所属表的id
    * schemaIds  列所属schema的id
    * dbIds  列所属库的id
    *
    * @var string[]
    */
    protected static $getters = [
            'tableIds' => 'getTableIds',
            'schemaIds' => 'getSchemaIds',
            'dbIds' => 'getDbIds'
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
        $this->container['tableIds'] = isset($data['tableIds']) ? $data['tableIds'] : null;
        $this->container['schemaIds'] = isset($data['schemaIds']) ? $data['schemaIds'] : null;
        $this->container['dbIds'] = isset($data['dbIds']) ? $data['dbIds'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['tableIds'] === null) {
            $invalidProperties[] = "'tableIds' can't be null";
        }
        if ($this->container['schemaIds'] === null) {
            $invalidProperties[] = "'schemaIds' can't be null";
        }
        if ($this->container['dbIds'] === null) {
            $invalidProperties[] = "'dbIds' can't be null";
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
    * Gets tableIds
    *  列所属表的id
    *
    * @return string[]
    */
    public function getTableIds()
    {
        return $this->container['tableIds'];
    }

    /**
    * Sets tableIds
    *
    * @param string[] $tableIds 列所属表的id
    *
    * @return $this
    */
    public function setTableIds($tableIds)
    {
        $this->container['tableIds'] = $tableIds;
        return $this;
    }

    /**
    * Gets schemaIds
    *  列所属schema的id
    *
    * @return string[]
    */
    public function getSchemaIds()
    {
        return $this->container['schemaIds'];
    }

    /**
    * Sets schemaIds
    *
    * @param string[] $schemaIds 列所属schema的id
    *
    * @return $this
    */
    public function setSchemaIds($schemaIds)
    {
        $this->container['schemaIds'] = $schemaIds;
        return $this;
    }

    /**
    * Gets dbIds
    *  列所属库的id
    *
    * @return string[]
    */
    public function getDbIds()
    {
        return $this->container['dbIds'];
    }

    /**
    * Sets dbIds
    *
    * @param string[] $dbIds 列所属库的id
    *
    * @return $this
    */
    public function setDbIds($dbIds)
    {
        $this->container['dbIds'] = $dbIds;
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

