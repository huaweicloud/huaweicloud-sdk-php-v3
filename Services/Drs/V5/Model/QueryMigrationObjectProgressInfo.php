<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryMigrationObjectProgressInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryMigrationObjectProgressInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * migrationObjectOverview  概览详情。
    * createTime  数据生成时间。
    * fullStartTime  全量开始时间。
    * fullCompleteTime  全量完成时间。
    * incrStartTime  增量开始时间。
    * endTime  结束时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'migrationObjectOverview' => '\HuaweiCloud\SDK\Drs\V5\Model\MigrationObjectOverviewInfo[]',
            'createTime' => '\DateTime',
            'fullStartTime' => '\DateTime',
            'fullCompleteTime' => '\DateTime',
            'incrStartTime' => '\DateTime',
            'endTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * migrationObjectOverview  概览详情。
    * createTime  数据生成时间。
    * fullStartTime  全量开始时间。
    * fullCompleteTime  全量完成时间。
    * incrStartTime  增量开始时间。
    * endTime  结束时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'migrationObjectOverview' => null,
        'createTime' => 'date',
        'fullStartTime' => 'date',
        'fullCompleteTime' => 'date',
        'incrStartTime' => 'date',
        'endTime' => null
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
    * migrationObjectOverview  概览详情。
    * createTime  数据生成时间。
    * fullStartTime  全量开始时间。
    * fullCompleteTime  全量完成时间。
    * incrStartTime  增量开始时间。
    * endTime  结束时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'migrationObjectOverview' => 'migration_object_overview',
            'createTime' => 'create_time',
            'fullStartTime' => 'full_start_time',
            'fullCompleteTime' => 'full_complete_time',
            'incrStartTime' => 'incr_start_time',
            'endTime' => 'end_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * migrationObjectOverview  概览详情。
    * createTime  数据生成时间。
    * fullStartTime  全量开始时间。
    * fullCompleteTime  全量完成时间。
    * incrStartTime  增量开始时间。
    * endTime  结束时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'migrationObjectOverview' => 'setMigrationObjectOverview',
            'createTime' => 'setCreateTime',
            'fullStartTime' => 'setFullStartTime',
            'fullCompleteTime' => 'setFullCompleteTime',
            'incrStartTime' => 'setIncrStartTime',
            'endTime' => 'setEndTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * migrationObjectOverview  概览详情。
    * createTime  数据生成时间。
    * fullStartTime  全量开始时间。
    * fullCompleteTime  全量完成时间。
    * incrStartTime  增量开始时间。
    * endTime  结束时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'migrationObjectOverview' => 'getMigrationObjectOverview',
            'createTime' => 'getCreateTime',
            'fullStartTime' => 'getFullStartTime',
            'fullCompleteTime' => 'getFullCompleteTime',
            'incrStartTime' => 'getIncrStartTime',
            'endTime' => 'getEndTime'
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
        $this->container['migrationObjectOverview'] = isset($data['migrationObjectOverview']) ? $data['migrationObjectOverview'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['fullStartTime'] = isset($data['fullStartTime']) ? $data['fullStartTime'] : null;
        $this->container['fullCompleteTime'] = isset($data['fullCompleteTime']) ? $data['fullCompleteTime'] : null;
        $this->container['incrStartTime'] = isset($data['incrStartTime']) ? $data['incrStartTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
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
    * Gets migrationObjectOverview
    *  概览详情。
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\MigrationObjectOverviewInfo[]|null
    */
    public function getMigrationObjectOverview()
    {
        return $this->container['migrationObjectOverview'];
    }

    /**
    * Sets migrationObjectOverview
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\MigrationObjectOverviewInfo[]|null $migrationObjectOverview 概览详情。
    *
    * @return $this
    */
    public function setMigrationObjectOverview($migrationObjectOverview)
    {
        $this->container['migrationObjectOverview'] = $migrationObjectOverview;
        return $this;
    }

    /**
    * Gets createTime
    *  数据生成时间。
    *
    * @return \DateTime|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param \DateTime|null $createTime 数据生成时间。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets fullStartTime
    *  全量开始时间。
    *
    * @return \DateTime|null
    */
    public function getFullStartTime()
    {
        return $this->container['fullStartTime'];
    }

    /**
    * Sets fullStartTime
    *
    * @param \DateTime|null $fullStartTime 全量开始时间。
    *
    * @return $this
    */
    public function setFullStartTime($fullStartTime)
    {
        $this->container['fullStartTime'] = $fullStartTime;
        return $this;
    }

    /**
    * Gets fullCompleteTime
    *  全量完成时间。
    *
    * @return \DateTime|null
    */
    public function getFullCompleteTime()
    {
        return $this->container['fullCompleteTime'];
    }

    /**
    * Sets fullCompleteTime
    *
    * @param \DateTime|null $fullCompleteTime 全量完成时间。
    *
    * @return $this
    */
    public function setFullCompleteTime($fullCompleteTime)
    {
        $this->container['fullCompleteTime'] = $fullCompleteTime;
        return $this;
    }

    /**
    * Gets incrStartTime
    *  增量开始时间。
    *
    * @return \DateTime|null
    */
    public function getIncrStartTime()
    {
        return $this->container['incrStartTime'];
    }

    /**
    * Sets incrStartTime
    *
    * @param \DateTime|null $incrStartTime 增量开始时间。
    *
    * @return $this
    */
    public function setIncrStartTime($incrStartTime)
    {
        $this->container['incrStartTime'] = $incrStartTime;
        return $this;
    }

    /**
    * Gets endTime
    *  结束时间。
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime 结束时间。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
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

