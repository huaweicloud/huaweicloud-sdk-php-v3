<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowMigrationTaskStatsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowMigrationTaskStatsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fullMigrationProgress  全量迁移进度百分比。
    * offset  增量迁移偏移量。
    * sourceDbsize  源redis键数量
    * targetDbsize  目标redis键数量
    * targetInputKbps  目标redis键写入流量，单位KB/s
    * targetOps  目标redis每秒并发操作数
    * isMigrating  迁移任务是否在进行
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fullMigrationProgress' => 'string',
            'offset' => 'string',
            'sourceDbsize' => 'string',
            'targetDbsize' => 'string',
            'targetInputKbps' => 'string',
            'targetOps' => 'string',
            'isMigrating' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fullMigrationProgress  全量迁移进度百分比。
    * offset  增量迁移偏移量。
    * sourceDbsize  源redis键数量
    * targetDbsize  目标redis键数量
    * targetInputKbps  目标redis键写入流量，单位KB/s
    * targetOps  目标redis每秒并发操作数
    * isMigrating  迁移任务是否在进行
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fullMigrationProgress' => null,
        'offset' => null,
        'sourceDbsize' => null,
        'targetDbsize' => null,
        'targetInputKbps' => null,
        'targetOps' => null,
        'isMigrating' => null
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
    * fullMigrationProgress  全量迁移进度百分比。
    * offset  增量迁移偏移量。
    * sourceDbsize  源redis键数量
    * targetDbsize  目标redis键数量
    * targetInputKbps  目标redis键写入流量，单位KB/s
    * targetOps  目标redis每秒并发操作数
    * isMigrating  迁移任务是否在进行
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fullMigrationProgress' => 'full_migration_progress',
            'offset' => 'offset',
            'sourceDbsize' => 'source_dbsize',
            'targetDbsize' => 'target_dbsize',
            'targetInputKbps' => 'target_input_kbps',
            'targetOps' => 'target_ops',
            'isMigrating' => 'is_migrating'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fullMigrationProgress  全量迁移进度百分比。
    * offset  增量迁移偏移量。
    * sourceDbsize  源redis键数量
    * targetDbsize  目标redis键数量
    * targetInputKbps  目标redis键写入流量，单位KB/s
    * targetOps  目标redis每秒并发操作数
    * isMigrating  迁移任务是否在进行
    *
    * @var string[]
    */
    protected static $setters = [
            'fullMigrationProgress' => 'setFullMigrationProgress',
            'offset' => 'setOffset',
            'sourceDbsize' => 'setSourceDbsize',
            'targetDbsize' => 'setTargetDbsize',
            'targetInputKbps' => 'setTargetInputKbps',
            'targetOps' => 'setTargetOps',
            'isMigrating' => 'setIsMigrating'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fullMigrationProgress  全量迁移进度百分比。
    * offset  增量迁移偏移量。
    * sourceDbsize  源redis键数量
    * targetDbsize  目标redis键数量
    * targetInputKbps  目标redis键写入流量，单位KB/s
    * targetOps  目标redis每秒并发操作数
    * isMigrating  迁移任务是否在进行
    *
    * @var string[]
    */
    protected static $getters = [
            'fullMigrationProgress' => 'getFullMigrationProgress',
            'offset' => 'getOffset',
            'sourceDbsize' => 'getSourceDbsize',
            'targetDbsize' => 'getTargetDbsize',
            'targetInputKbps' => 'getTargetInputKbps',
            'targetOps' => 'getTargetOps',
            'isMigrating' => 'getIsMigrating'
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
        $this->container['fullMigrationProgress'] = isset($data['fullMigrationProgress']) ? $data['fullMigrationProgress'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['sourceDbsize'] = isset($data['sourceDbsize']) ? $data['sourceDbsize'] : null;
        $this->container['targetDbsize'] = isset($data['targetDbsize']) ? $data['targetDbsize'] : null;
        $this->container['targetInputKbps'] = isset($data['targetInputKbps']) ? $data['targetInputKbps'] : null;
        $this->container['targetOps'] = isset($data['targetOps']) ? $data['targetOps'] : null;
        $this->container['isMigrating'] = isset($data['isMigrating']) ? $data['isMigrating'] : null;
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
    * Gets fullMigrationProgress
    *  全量迁移进度百分比。
    *
    * @return string|null
    */
    public function getFullMigrationProgress()
    {
        return $this->container['fullMigrationProgress'];
    }

    /**
    * Sets fullMigrationProgress
    *
    * @param string|null $fullMigrationProgress 全量迁移进度百分比。
    *
    * @return $this
    */
    public function setFullMigrationProgress($fullMigrationProgress)
    {
        $this->container['fullMigrationProgress'] = $fullMigrationProgress;
        return $this;
    }

    /**
    * Gets offset
    *  增量迁移偏移量。
    *
    * @return string|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param string|null $offset 增量迁移偏移量。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets sourceDbsize
    *  源redis键数量
    *
    * @return string|null
    */
    public function getSourceDbsize()
    {
        return $this->container['sourceDbsize'];
    }

    /**
    * Sets sourceDbsize
    *
    * @param string|null $sourceDbsize 源redis键数量
    *
    * @return $this
    */
    public function setSourceDbsize($sourceDbsize)
    {
        $this->container['sourceDbsize'] = $sourceDbsize;
        return $this;
    }

    /**
    * Gets targetDbsize
    *  目标redis键数量
    *
    * @return string|null
    */
    public function getTargetDbsize()
    {
        return $this->container['targetDbsize'];
    }

    /**
    * Sets targetDbsize
    *
    * @param string|null $targetDbsize 目标redis键数量
    *
    * @return $this
    */
    public function setTargetDbsize($targetDbsize)
    {
        $this->container['targetDbsize'] = $targetDbsize;
        return $this;
    }

    /**
    * Gets targetInputKbps
    *  目标redis键写入流量，单位KB/s
    *
    * @return string|null
    */
    public function getTargetInputKbps()
    {
        return $this->container['targetInputKbps'];
    }

    /**
    * Sets targetInputKbps
    *
    * @param string|null $targetInputKbps 目标redis键写入流量，单位KB/s
    *
    * @return $this
    */
    public function setTargetInputKbps($targetInputKbps)
    {
        $this->container['targetInputKbps'] = $targetInputKbps;
        return $this;
    }

    /**
    * Gets targetOps
    *  目标redis每秒并发操作数
    *
    * @return string|null
    */
    public function getTargetOps()
    {
        return $this->container['targetOps'];
    }

    /**
    * Sets targetOps
    *
    * @param string|null $targetOps 目标redis每秒并发操作数
    *
    * @return $this
    */
    public function setTargetOps($targetOps)
    {
        $this->container['targetOps'] = $targetOps;
        return $this;
    }

    /**
    * Gets isMigrating
    *  迁移任务是否在进行
    *
    * @return bool|null
    */
    public function getIsMigrating()
    {
        return $this->container['isMigrating'];
    }

    /**
    * Sets isMigrating
    *
    * @param bool|null $isMigrating 迁移任务是否在进行
    *
    * @return $this
    */
    public function setIsMigrating($isMigrating)
    {
        $this->container['isMigrating'] = $isMigrating;
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

