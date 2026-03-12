<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FullSqlTraceStatisticsResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FullSqlTraceStatisticsResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hitRate  **参数解释**: 命中率。 **取值范围**: 不涉及。
    * dbTime  **参数解释**: 有效DB时间花费。 **取值范围**: 不涉及。
    * cpuTime  **参数解释**: CPU时间（单位：微秒）。 **取值范围**: 不涉及。
    * ioTime  **参数解释**: IO时间（单位：微秒）。 **取值范围**: 不涉及。
    * executionTime  **参数解释**: 执行器内执行时间（单位：微秒）。 **取值范围**: 不涉及。
    * scanRows  **参数解释**: 扫描行数。 **取值范围**: 不涉及。
    * updateRows  **参数解释**: 更新行数。 **取值范围**: 不涉及。
    * insertRows  **参数解释**: 插入行数。 **取值范围**: 不涉及。
    * deleteRows  **参数解释**: 删除行数。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hitRate' => 'double',
            'dbTime' => 'int',
            'cpuTime' => 'int',
            'ioTime' => 'int',
            'executionTime' => 'int',
            'scanRows' => 'int',
            'updateRows' => 'int',
            'insertRows' => 'int',
            'deleteRows' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hitRate  **参数解释**: 命中率。 **取值范围**: 不涉及。
    * dbTime  **参数解释**: 有效DB时间花费。 **取值范围**: 不涉及。
    * cpuTime  **参数解释**: CPU时间（单位：微秒）。 **取值范围**: 不涉及。
    * ioTime  **参数解释**: IO时间（单位：微秒）。 **取值范围**: 不涉及。
    * executionTime  **参数解释**: 执行器内执行时间（单位：微秒）。 **取值范围**: 不涉及。
    * scanRows  **参数解释**: 扫描行数。 **取值范围**: 不涉及。
    * updateRows  **参数解释**: 更新行数。 **取值范围**: 不涉及。
    * insertRows  **参数解释**: 插入行数。 **取值范围**: 不涉及。
    * deleteRows  **参数解释**: 删除行数。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hitRate' => 'double',
        'dbTime' => null,
        'cpuTime' => null,
        'ioTime' => null,
        'executionTime' => null,
        'scanRows' => null,
        'updateRows' => null,
        'insertRows' => null,
        'deleteRows' => null
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
    * hitRate  **参数解释**: 命中率。 **取值范围**: 不涉及。
    * dbTime  **参数解释**: 有效DB时间花费。 **取值范围**: 不涉及。
    * cpuTime  **参数解释**: CPU时间（单位：微秒）。 **取值范围**: 不涉及。
    * ioTime  **参数解释**: IO时间（单位：微秒）。 **取值范围**: 不涉及。
    * executionTime  **参数解释**: 执行器内执行时间（单位：微秒）。 **取值范围**: 不涉及。
    * scanRows  **参数解释**: 扫描行数。 **取值范围**: 不涉及。
    * updateRows  **参数解释**: 更新行数。 **取值范围**: 不涉及。
    * insertRows  **参数解释**: 插入行数。 **取值范围**: 不涉及。
    * deleteRows  **参数解释**: 删除行数。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hitRate' => 'hit_rate',
            'dbTime' => 'db_time',
            'cpuTime' => 'cpu_time',
            'ioTime' => 'io_time',
            'executionTime' => 'execution_time',
            'scanRows' => 'scan_rows',
            'updateRows' => 'update_rows',
            'insertRows' => 'insert_rows',
            'deleteRows' => 'delete_rows'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hitRate  **参数解释**: 命中率。 **取值范围**: 不涉及。
    * dbTime  **参数解释**: 有效DB时间花费。 **取值范围**: 不涉及。
    * cpuTime  **参数解释**: CPU时间（单位：微秒）。 **取值范围**: 不涉及。
    * ioTime  **参数解释**: IO时间（单位：微秒）。 **取值范围**: 不涉及。
    * executionTime  **参数解释**: 执行器内执行时间（单位：微秒）。 **取值范围**: 不涉及。
    * scanRows  **参数解释**: 扫描行数。 **取值范围**: 不涉及。
    * updateRows  **参数解释**: 更新行数。 **取值范围**: 不涉及。
    * insertRows  **参数解释**: 插入行数。 **取值范围**: 不涉及。
    * deleteRows  **参数解释**: 删除行数。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'hitRate' => 'setHitRate',
            'dbTime' => 'setDbTime',
            'cpuTime' => 'setCpuTime',
            'ioTime' => 'setIoTime',
            'executionTime' => 'setExecutionTime',
            'scanRows' => 'setScanRows',
            'updateRows' => 'setUpdateRows',
            'insertRows' => 'setInsertRows',
            'deleteRows' => 'setDeleteRows'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hitRate  **参数解释**: 命中率。 **取值范围**: 不涉及。
    * dbTime  **参数解释**: 有效DB时间花费。 **取值范围**: 不涉及。
    * cpuTime  **参数解释**: CPU时间（单位：微秒）。 **取值范围**: 不涉及。
    * ioTime  **参数解释**: IO时间（单位：微秒）。 **取值范围**: 不涉及。
    * executionTime  **参数解释**: 执行器内执行时间（单位：微秒）。 **取值范围**: 不涉及。
    * scanRows  **参数解释**: 扫描行数。 **取值范围**: 不涉及。
    * updateRows  **参数解释**: 更新行数。 **取值范围**: 不涉及。
    * insertRows  **参数解释**: 插入行数。 **取值范围**: 不涉及。
    * deleteRows  **参数解释**: 删除行数。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'hitRate' => 'getHitRate',
            'dbTime' => 'getDbTime',
            'cpuTime' => 'getCpuTime',
            'ioTime' => 'getIoTime',
            'executionTime' => 'getExecutionTime',
            'scanRows' => 'getScanRows',
            'updateRows' => 'getUpdateRows',
            'insertRows' => 'getInsertRows',
            'deleteRows' => 'getDeleteRows'
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
        $this->container['hitRate'] = isset($data['hitRate']) ? $data['hitRate'] : null;
        $this->container['dbTime'] = isset($data['dbTime']) ? $data['dbTime'] : null;
        $this->container['cpuTime'] = isset($data['cpuTime']) ? $data['cpuTime'] : null;
        $this->container['ioTime'] = isset($data['ioTime']) ? $data['ioTime'] : null;
        $this->container['executionTime'] = isset($data['executionTime']) ? $data['executionTime'] : null;
        $this->container['scanRows'] = isset($data['scanRows']) ? $data['scanRows'] : null;
        $this->container['updateRows'] = isset($data['updateRows']) ? $data['updateRows'] : null;
        $this->container['insertRows'] = isset($data['insertRows']) ? $data['insertRows'] : null;
        $this->container['deleteRows'] = isset($data['deleteRows']) ? $data['deleteRows'] : null;
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
    * Gets hitRate
    *  **参数解释**: 命中率。 **取值范围**: 不涉及。
    *
    * @return double|null
    */
    public function getHitRate()
    {
        return $this->container['hitRate'];
    }

    /**
    * Sets hitRate
    *
    * @param double|null $hitRate **参数解释**: 命中率。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setHitRate($hitRate)
    {
        $this->container['hitRate'] = $hitRate;
        return $this;
    }

    /**
    * Gets dbTime
    *  **参数解释**: 有效DB时间花费。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getDbTime()
    {
        return $this->container['dbTime'];
    }

    /**
    * Sets dbTime
    *
    * @param int|null $dbTime **参数解释**: 有效DB时间花费。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setDbTime($dbTime)
    {
        $this->container['dbTime'] = $dbTime;
        return $this;
    }

    /**
    * Gets cpuTime
    *  **参数解释**: CPU时间（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getCpuTime()
    {
        return $this->container['cpuTime'];
    }

    /**
    * Sets cpuTime
    *
    * @param int|null $cpuTime **参数解释**: CPU时间（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setCpuTime($cpuTime)
    {
        $this->container['cpuTime'] = $cpuTime;
        return $this;
    }

    /**
    * Gets ioTime
    *  **参数解释**: IO时间（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getIoTime()
    {
        return $this->container['ioTime'];
    }

    /**
    * Sets ioTime
    *
    * @param int|null $ioTime **参数解释**: IO时间（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setIoTime($ioTime)
    {
        $this->container['ioTime'] = $ioTime;
        return $this;
    }

    /**
    * Gets executionTime
    *  **参数解释**: 执行器内执行时间（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getExecutionTime()
    {
        return $this->container['executionTime'];
    }

    /**
    * Sets executionTime
    *
    * @param int|null $executionTime **参数解释**: 执行器内执行时间（单位：微秒）。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setExecutionTime($executionTime)
    {
        $this->container['executionTime'] = $executionTime;
        return $this;
    }

    /**
    * Gets scanRows
    *  **参数解释**: 扫描行数。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getScanRows()
    {
        return $this->container['scanRows'];
    }

    /**
    * Sets scanRows
    *
    * @param int|null $scanRows **参数解释**: 扫描行数。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setScanRows($scanRows)
    {
        $this->container['scanRows'] = $scanRows;
        return $this;
    }

    /**
    * Gets updateRows
    *  **参数解释**: 更新行数。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getUpdateRows()
    {
        return $this->container['updateRows'];
    }

    /**
    * Sets updateRows
    *
    * @param int|null $updateRows **参数解释**: 更新行数。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setUpdateRows($updateRows)
    {
        $this->container['updateRows'] = $updateRows;
        return $this;
    }

    /**
    * Gets insertRows
    *  **参数解释**: 插入行数。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getInsertRows()
    {
        return $this->container['insertRows'];
    }

    /**
    * Sets insertRows
    *
    * @param int|null $insertRows **参数解释**: 插入行数。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setInsertRows($insertRows)
    {
        $this->container['insertRows'] = $insertRows;
        return $this;
    }

    /**
    * Gets deleteRows
    *  **参数解释**: 删除行数。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getDeleteRows()
    {
        return $this->container['deleteRows'];
    }

    /**
    * Sets deleteRows
    *
    * @param int|null $deleteRows **参数解释**: 删除行数。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setDeleteRows($deleteRows)
    {
        $this->container['deleteRows'] = $deleteRows;
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

