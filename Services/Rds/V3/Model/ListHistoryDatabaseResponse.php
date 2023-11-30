<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListHistoryDatabaseResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListHistoryDatabaseResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * databaseLimit  恢复库数量限制个数
    * tableLimit  恢复表数量限制个数
    * instances  实例信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'databaseLimit' => 'int',
            'tableLimit' => 'int',
            'instances' => '\HuaweiCloud\SDK\Rds\V3\Model\HistoryDatabaseInstance[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * databaseLimit  恢复库数量限制个数
    * tableLimit  恢复表数量限制个数
    * instances  实例信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'databaseLimit' => 'int32',
        'tableLimit' => 'int32',
        'instances' => null
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
    * databaseLimit  恢复库数量限制个数
    * tableLimit  恢复表数量限制个数
    * instances  实例信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'databaseLimit' => 'database_limit',
            'tableLimit' => 'table_limit',
            'instances' => 'instances'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * databaseLimit  恢复库数量限制个数
    * tableLimit  恢复表数量限制个数
    * instances  实例信息
    *
    * @var string[]
    */
    protected static $setters = [
            'databaseLimit' => 'setDatabaseLimit',
            'tableLimit' => 'setTableLimit',
            'instances' => 'setInstances'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * databaseLimit  恢复库数量限制个数
    * tableLimit  恢复表数量限制个数
    * instances  实例信息
    *
    * @var string[]
    */
    protected static $getters = [
            'databaseLimit' => 'getDatabaseLimit',
            'tableLimit' => 'getTableLimit',
            'instances' => 'getInstances'
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
        $this->container['databaseLimit'] = isset($data['databaseLimit']) ? $data['databaseLimit'] : null;
        $this->container['tableLimit'] = isset($data['tableLimit']) ? $data['tableLimit'] : null;
        $this->container['instances'] = isset($data['instances']) ? $data['instances'] : null;
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
    * Gets databaseLimit
    *  恢复库数量限制个数
    *
    * @return int|null
    */
    public function getDatabaseLimit()
    {
        return $this->container['databaseLimit'];
    }

    /**
    * Sets databaseLimit
    *
    * @param int|null $databaseLimit 恢复库数量限制个数
    *
    * @return $this
    */
    public function setDatabaseLimit($databaseLimit)
    {
        $this->container['databaseLimit'] = $databaseLimit;
        return $this;
    }

    /**
    * Gets tableLimit
    *  恢复表数量限制个数
    *
    * @return int|null
    */
    public function getTableLimit()
    {
        return $this->container['tableLimit'];
    }

    /**
    * Sets tableLimit
    *
    * @param int|null $tableLimit 恢复表数量限制个数
    *
    * @return $this
    */
    public function setTableLimit($tableLimit)
    {
        $this->container['tableLimit'] = $tableLimit;
        return $this;
    }

    /**
    * Gets instances
    *  实例信息
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\HistoryDatabaseInstance[]|null
    */
    public function getInstances()
    {
        return $this->container['instances'];
    }

    /**
    * Sets instances
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\HistoryDatabaseInstance[]|null $instances 实例信息
    *
    * @return $this
    */
    public function setInstances($instances)
    {
        $this->container['instances'] = $instances;
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

