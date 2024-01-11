<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SchemaInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SchemaInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * schemaName  Schema名称。
    * databaseName  数据库名称。
    * totalValue  集群schema使用空间总值。
    * permSpace  Schema空间阈值。
    * skewPercent  倾斜率。
    * minValue  最小值。
    * maxValue  最大值。
    * minDn  最小dn节点。
    * maxDn  最大cn节点。
    * dnNum  dn节点数量。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'schemaName' => 'string',
            'databaseName' => 'string',
            'totalValue' => 'int',
            'permSpace' => 'int',
            'skewPercent' => 'double',
            'minValue' => 'int',
            'maxValue' => 'int',
            'minDn' => 'string',
            'maxDn' => 'string',
            'dnNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * schemaName  Schema名称。
    * databaseName  数据库名称。
    * totalValue  集群schema使用空间总值。
    * permSpace  Schema空间阈值。
    * skewPercent  倾斜率。
    * minValue  最小值。
    * maxValue  最大值。
    * minDn  最小dn节点。
    * maxDn  最大cn节点。
    * dnNum  dn节点数量。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'schemaName' => null,
        'databaseName' => null,
        'totalValue' => null,
        'permSpace' => null,
        'skewPercent' => 'double',
        'minValue' => null,
        'maxValue' => null,
        'minDn' => null,
        'maxDn' => null,
        'dnNum' => null
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
    * schemaName  Schema名称。
    * databaseName  数据库名称。
    * totalValue  集群schema使用空间总值。
    * permSpace  Schema空间阈值。
    * skewPercent  倾斜率。
    * minValue  最小值。
    * maxValue  最大值。
    * minDn  最小dn节点。
    * maxDn  最大cn节点。
    * dnNum  dn节点数量。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'schemaName' => 'schema_name',
            'databaseName' => 'database_name',
            'totalValue' => 'total_value',
            'permSpace' => 'perm_space',
            'skewPercent' => 'skew_percent',
            'minValue' => 'min_value',
            'maxValue' => 'max_value',
            'minDn' => 'min_dn',
            'maxDn' => 'max_dn',
            'dnNum' => 'dn_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * schemaName  Schema名称。
    * databaseName  数据库名称。
    * totalValue  集群schema使用空间总值。
    * permSpace  Schema空间阈值。
    * skewPercent  倾斜率。
    * minValue  最小值。
    * maxValue  最大值。
    * minDn  最小dn节点。
    * maxDn  最大cn节点。
    * dnNum  dn节点数量。
    *
    * @var string[]
    */
    protected static $setters = [
            'schemaName' => 'setSchemaName',
            'databaseName' => 'setDatabaseName',
            'totalValue' => 'setTotalValue',
            'permSpace' => 'setPermSpace',
            'skewPercent' => 'setSkewPercent',
            'minValue' => 'setMinValue',
            'maxValue' => 'setMaxValue',
            'minDn' => 'setMinDn',
            'maxDn' => 'setMaxDn',
            'dnNum' => 'setDnNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * schemaName  Schema名称。
    * databaseName  数据库名称。
    * totalValue  集群schema使用空间总值。
    * permSpace  Schema空间阈值。
    * skewPercent  倾斜率。
    * minValue  最小值。
    * maxValue  最大值。
    * minDn  最小dn节点。
    * maxDn  最大cn节点。
    * dnNum  dn节点数量。
    *
    * @var string[]
    */
    protected static $getters = [
            'schemaName' => 'getSchemaName',
            'databaseName' => 'getDatabaseName',
            'totalValue' => 'getTotalValue',
            'permSpace' => 'getPermSpace',
            'skewPercent' => 'getSkewPercent',
            'minValue' => 'getMinValue',
            'maxValue' => 'getMaxValue',
            'minDn' => 'getMinDn',
            'maxDn' => 'getMaxDn',
            'dnNum' => 'getDnNum'
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
        $this->container['schemaName'] = isset($data['schemaName']) ? $data['schemaName'] : null;
        $this->container['databaseName'] = isset($data['databaseName']) ? $data['databaseName'] : null;
        $this->container['totalValue'] = isset($data['totalValue']) ? $data['totalValue'] : null;
        $this->container['permSpace'] = isset($data['permSpace']) ? $data['permSpace'] : null;
        $this->container['skewPercent'] = isset($data['skewPercent']) ? $data['skewPercent'] : null;
        $this->container['minValue'] = isset($data['minValue']) ? $data['minValue'] : null;
        $this->container['maxValue'] = isset($data['maxValue']) ? $data['maxValue'] : null;
        $this->container['minDn'] = isset($data['minDn']) ? $data['minDn'] : null;
        $this->container['maxDn'] = isset($data['maxDn']) ? $data['maxDn'] : null;
        $this->container['dnNum'] = isset($data['dnNum']) ? $data['dnNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['schemaName'] === null) {
            $invalidProperties[] = "'schemaName' can't be null";
        }
        if ($this->container['databaseName'] === null) {
            $invalidProperties[] = "'databaseName' can't be null";
        }
        if ($this->container['totalValue'] === null) {
            $invalidProperties[] = "'totalValue' can't be null";
        }
        if ($this->container['permSpace'] === null) {
            $invalidProperties[] = "'permSpace' can't be null";
        }
        if ($this->container['skewPercent'] === null) {
            $invalidProperties[] = "'skewPercent' can't be null";
        }
        if ($this->container['minValue'] === null) {
            $invalidProperties[] = "'minValue' can't be null";
        }
        if ($this->container['maxValue'] === null) {
            $invalidProperties[] = "'maxValue' can't be null";
        }
        if ($this->container['minDn'] === null) {
            $invalidProperties[] = "'minDn' can't be null";
        }
        if ($this->container['maxDn'] === null) {
            $invalidProperties[] = "'maxDn' can't be null";
        }
        if ($this->container['dnNum'] === null) {
            $invalidProperties[] = "'dnNum' can't be null";
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
    * Gets schemaName
    *  Schema名称。
    *
    * @return string
    */
    public function getSchemaName()
    {
        return $this->container['schemaName'];
    }

    /**
    * Sets schemaName
    *
    * @param string $schemaName Schema名称。
    *
    * @return $this
    */
    public function setSchemaName($schemaName)
    {
        $this->container['schemaName'] = $schemaName;
        return $this;
    }

    /**
    * Gets databaseName
    *  数据库名称。
    *
    * @return string
    */
    public function getDatabaseName()
    {
        return $this->container['databaseName'];
    }

    /**
    * Sets databaseName
    *
    * @param string $databaseName 数据库名称。
    *
    * @return $this
    */
    public function setDatabaseName($databaseName)
    {
        $this->container['databaseName'] = $databaseName;
        return $this;
    }

    /**
    * Gets totalValue
    *  集群schema使用空间总值。
    *
    * @return int
    */
    public function getTotalValue()
    {
        return $this->container['totalValue'];
    }

    /**
    * Sets totalValue
    *
    * @param int $totalValue 集群schema使用空间总值。
    *
    * @return $this
    */
    public function setTotalValue($totalValue)
    {
        $this->container['totalValue'] = $totalValue;
        return $this;
    }

    /**
    * Gets permSpace
    *  Schema空间阈值。
    *
    * @return int
    */
    public function getPermSpace()
    {
        return $this->container['permSpace'];
    }

    /**
    * Sets permSpace
    *
    * @param int $permSpace Schema空间阈值。
    *
    * @return $this
    */
    public function setPermSpace($permSpace)
    {
        $this->container['permSpace'] = $permSpace;
        return $this;
    }

    /**
    * Gets skewPercent
    *  倾斜率。
    *
    * @return double
    */
    public function getSkewPercent()
    {
        return $this->container['skewPercent'];
    }

    /**
    * Sets skewPercent
    *
    * @param double $skewPercent 倾斜率。
    *
    * @return $this
    */
    public function setSkewPercent($skewPercent)
    {
        $this->container['skewPercent'] = $skewPercent;
        return $this;
    }

    /**
    * Gets minValue
    *  最小值。
    *
    * @return int
    */
    public function getMinValue()
    {
        return $this->container['minValue'];
    }

    /**
    * Sets minValue
    *
    * @param int $minValue 最小值。
    *
    * @return $this
    */
    public function setMinValue($minValue)
    {
        $this->container['minValue'] = $minValue;
        return $this;
    }

    /**
    * Gets maxValue
    *  最大值。
    *
    * @return int
    */
    public function getMaxValue()
    {
        return $this->container['maxValue'];
    }

    /**
    * Sets maxValue
    *
    * @param int $maxValue 最大值。
    *
    * @return $this
    */
    public function setMaxValue($maxValue)
    {
        $this->container['maxValue'] = $maxValue;
        return $this;
    }

    /**
    * Gets minDn
    *  最小dn节点。
    *
    * @return string
    */
    public function getMinDn()
    {
        return $this->container['minDn'];
    }

    /**
    * Sets minDn
    *
    * @param string $minDn 最小dn节点。
    *
    * @return $this
    */
    public function setMinDn($minDn)
    {
        $this->container['minDn'] = $minDn;
        return $this;
    }

    /**
    * Gets maxDn
    *  最大cn节点。
    *
    * @return string
    */
    public function getMaxDn()
    {
        return $this->container['maxDn'];
    }

    /**
    * Sets maxDn
    *
    * @param string $maxDn 最大cn节点。
    *
    * @return $this
    */
    public function setMaxDn($maxDn)
    {
        $this->container['maxDn'] = $maxDn;
        return $this;
    }

    /**
    * Gets dnNum
    *  dn节点数量。
    *
    * @return int
    */
    public function getDnNum()
    {
        return $this->container['dnNum'];
    }

    /**
    * Sets dnNum
    *
    * @param int $dnNum dn节点数量。
    *
    * @return $this
    */
    public function setDnNum($dnNum)
    {
        $this->container['dnNum'] = $dnNum;
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

