<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TableSchemaDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TableSchemaDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * columns  表格列列表
    * primaryKeyList  表主键列表
    * partition  表分区列表
    * watermarkColumn  表水位列
    * watermarkInterval  表水位延迟间隔
    * timeFilter  表时间过滤列
    * displaySetting  展示设置列表
    * columnTreeRoot  columnTreeRoot
    * primaryKey  表主键列表
    * partitionKey  分区键
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'columns' => '\HuaweiCloud\SDK\SecMaster\V2\Model\IsapTableColumnDto[]',
            'primaryKeyList' => 'string[]',
            'partition' => 'string[]',
            'watermarkColumn' => 'string',
            'watermarkInterval' => 'float',
            'timeFilter' => 'string',
            'displaySetting' => '\HuaweiCloud\SDK\SecMaster\V2\Model\IsapTableColumnDisplaySettingDto[]',
            'columnTreeRoot' => '\HuaweiCloud\SDK\SecMaster\V2\Model\IsapTableColumnTreeNodeTableColumnDto',
            'primaryKey' => 'string[]',
            'partitionKey' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * columns  表格列列表
    * primaryKeyList  表主键列表
    * partition  表分区列表
    * watermarkColumn  表水位列
    * watermarkInterval  表水位延迟间隔
    * timeFilter  表时间过滤列
    * displaySetting  展示设置列表
    * columnTreeRoot  columnTreeRoot
    * primaryKey  表主键列表
    * partitionKey  分区键
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'columns' => null,
        'primaryKeyList' => null,
        'partition' => null,
        'watermarkColumn' => null,
        'watermarkInterval' => 'float',
        'timeFilter' => null,
        'displaySetting' => null,
        'columnTreeRoot' => null,
        'primaryKey' => null,
        'partitionKey' => null
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
    * columns  表格列列表
    * primaryKeyList  表主键列表
    * partition  表分区列表
    * watermarkColumn  表水位列
    * watermarkInterval  表水位延迟间隔
    * timeFilter  表时间过滤列
    * displaySetting  展示设置列表
    * columnTreeRoot  columnTreeRoot
    * primaryKey  表主键列表
    * partitionKey  分区键
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'columns' => 'columns',
            'primaryKeyList' => 'primary_key_list',
            'partition' => 'partition',
            'watermarkColumn' => 'watermark_column',
            'watermarkInterval' => 'watermark_interval',
            'timeFilter' => 'time_filter',
            'displaySetting' => 'display_setting',
            'columnTreeRoot' => 'column_tree_root',
            'primaryKey' => 'primary_key',
            'partitionKey' => 'partition_key'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * columns  表格列列表
    * primaryKeyList  表主键列表
    * partition  表分区列表
    * watermarkColumn  表水位列
    * watermarkInterval  表水位延迟间隔
    * timeFilter  表时间过滤列
    * displaySetting  展示设置列表
    * columnTreeRoot  columnTreeRoot
    * primaryKey  表主键列表
    * partitionKey  分区键
    *
    * @var string[]
    */
    protected static $setters = [
            'columns' => 'setColumns',
            'primaryKeyList' => 'setPrimaryKeyList',
            'partition' => 'setPartition',
            'watermarkColumn' => 'setWatermarkColumn',
            'watermarkInterval' => 'setWatermarkInterval',
            'timeFilter' => 'setTimeFilter',
            'displaySetting' => 'setDisplaySetting',
            'columnTreeRoot' => 'setColumnTreeRoot',
            'primaryKey' => 'setPrimaryKey',
            'partitionKey' => 'setPartitionKey'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * columns  表格列列表
    * primaryKeyList  表主键列表
    * partition  表分区列表
    * watermarkColumn  表水位列
    * watermarkInterval  表水位延迟间隔
    * timeFilter  表时间过滤列
    * displaySetting  展示设置列表
    * columnTreeRoot  columnTreeRoot
    * primaryKey  表主键列表
    * partitionKey  分区键
    *
    * @var string[]
    */
    protected static $getters = [
            'columns' => 'getColumns',
            'primaryKeyList' => 'getPrimaryKeyList',
            'partition' => 'getPartition',
            'watermarkColumn' => 'getWatermarkColumn',
            'watermarkInterval' => 'getWatermarkInterval',
            'timeFilter' => 'getTimeFilter',
            'displaySetting' => 'getDisplaySetting',
            'columnTreeRoot' => 'getColumnTreeRoot',
            'primaryKey' => 'getPrimaryKey',
            'partitionKey' => 'getPartitionKey'
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
        $this->container['columns'] = isset($data['columns']) ? $data['columns'] : null;
        $this->container['primaryKeyList'] = isset($data['primaryKeyList']) ? $data['primaryKeyList'] : null;
        $this->container['partition'] = isset($data['partition']) ? $data['partition'] : null;
        $this->container['watermarkColumn'] = isset($data['watermarkColumn']) ? $data['watermarkColumn'] : null;
        $this->container['watermarkInterval'] = isset($data['watermarkInterval']) ? $data['watermarkInterval'] : null;
        $this->container['timeFilter'] = isset($data['timeFilter']) ? $data['timeFilter'] : null;
        $this->container['displaySetting'] = isset($data['displaySetting']) ? $data['displaySetting'] : null;
        $this->container['columnTreeRoot'] = isset($data['columnTreeRoot']) ? $data['columnTreeRoot'] : null;
        $this->container['primaryKey'] = isset($data['primaryKey']) ? $data['primaryKey'] : null;
        $this->container['partitionKey'] = isset($data['partitionKey']) ? $data['partitionKey'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['watermarkColumn']) && (mb_strlen($this->container['watermarkColumn']) > 256)) {
                $invalidProperties[] = "invalid value for 'watermarkColumn', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['watermarkColumn']) && (mb_strlen($this->container['watermarkColumn']) < 1)) {
                $invalidProperties[] = "invalid value for 'watermarkColumn', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['watermarkInterval']) && ($this->container['watermarkInterval'] > 6E+1)) {
                $invalidProperties[] = "invalid value for 'watermarkInterval', must be smaller than or equal to 6E+1.";
            }
            if (!is_null($this->container['watermarkInterval']) && ($this->container['watermarkInterval'] < 0)) {
                $invalidProperties[] = "invalid value for 'watermarkInterval', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['timeFilter']) && (mb_strlen($this->container['timeFilter']) > 256)) {
                $invalidProperties[] = "invalid value for 'timeFilter', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['timeFilter']) && (mb_strlen($this->container['timeFilter']) < 1)) {
                $invalidProperties[] = "invalid value for 'timeFilter', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['partitionKey']) && (mb_strlen($this->container['partitionKey']) > 256)) {
                $invalidProperties[] = "invalid value for 'partitionKey', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['partitionKey']) && (mb_strlen($this->container['partitionKey']) < 1)) {
                $invalidProperties[] = "invalid value for 'partitionKey', the character length must be bigger than or equal to 1.";
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
    * Gets columns
    *  表格列列表
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\IsapTableColumnDto[]|null
    */
    public function getColumns()
    {
        return $this->container['columns'];
    }

    /**
    * Sets columns
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\IsapTableColumnDto[]|null $columns 表格列列表
    *
    * @return $this
    */
    public function setColumns($columns)
    {
        $this->container['columns'] = $columns;
        return $this;
    }

    /**
    * Gets primaryKeyList
    *  表主键列表
    *
    * @return string[]|null
    */
    public function getPrimaryKeyList()
    {
        return $this->container['primaryKeyList'];
    }

    /**
    * Sets primaryKeyList
    *
    * @param string[]|null $primaryKeyList 表主键列表
    *
    * @return $this
    */
    public function setPrimaryKeyList($primaryKeyList)
    {
        $this->container['primaryKeyList'] = $primaryKeyList;
        return $this;
    }

    /**
    * Gets partition
    *  表分区列表
    *
    * @return string[]|null
    */
    public function getPartition()
    {
        return $this->container['partition'];
    }

    /**
    * Sets partition
    *
    * @param string[]|null $partition 表分区列表
    *
    * @return $this
    */
    public function setPartition($partition)
    {
        $this->container['partition'] = $partition;
        return $this;
    }

    /**
    * Gets watermarkColumn
    *  表水位列
    *
    * @return string|null
    */
    public function getWatermarkColumn()
    {
        return $this->container['watermarkColumn'];
    }

    /**
    * Sets watermarkColumn
    *
    * @param string|null $watermarkColumn 表水位列
    *
    * @return $this
    */
    public function setWatermarkColumn($watermarkColumn)
    {
        $this->container['watermarkColumn'] = $watermarkColumn;
        return $this;
    }

    /**
    * Gets watermarkInterval
    *  表水位延迟间隔
    *
    * @return float|null
    */
    public function getWatermarkInterval()
    {
        return $this->container['watermarkInterval'];
    }

    /**
    * Sets watermarkInterval
    *
    * @param float|null $watermarkInterval 表水位延迟间隔
    *
    * @return $this
    */
    public function setWatermarkInterval($watermarkInterval)
    {
        $this->container['watermarkInterval'] = $watermarkInterval;
        return $this;
    }

    /**
    * Gets timeFilter
    *  表时间过滤列
    *
    * @return string|null
    */
    public function getTimeFilter()
    {
        return $this->container['timeFilter'];
    }

    /**
    * Sets timeFilter
    *
    * @param string|null $timeFilter 表时间过滤列
    *
    * @return $this
    */
    public function setTimeFilter($timeFilter)
    {
        $this->container['timeFilter'] = $timeFilter;
        return $this;
    }

    /**
    * Gets displaySetting
    *  展示设置列表
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\IsapTableColumnDisplaySettingDto[]|null
    */
    public function getDisplaySetting()
    {
        return $this->container['displaySetting'];
    }

    /**
    * Sets displaySetting
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\IsapTableColumnDisplaySettingDto[]|null $displaySetting 展示设置列表
    *
    * @return $this
    */
    public function setDisplaySetting($displaySetting)
    {
        $this->container['displaySetting'] = $displaySetting;
        return $this;
    }

    /**
    * Gets columnTreeRoot
    *  columnTreeRoot
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\IsapTableColumnTreeNodeTableColumnDto|null
    */
    public function getColumnTreeRoot()
    {
        return $this->container['columnTreeRoot'];
    }

    /**
    * Sets columnTreeRoot
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\IsapTableColumnTreeNodeTableColumnDto|null $columnTreeRoot columnTreeRoot
    *
    * @return $this
    */
    public function setColumnTreeRoot($columnTreeRoot)
    {
        $this->container['columnTreeRoot'] = $columnTreeRoot;
        return $this;
    }

    /**
    * Gets primaryKey
    *  表主键列表
    *
    * @return string[]|null
    */
    public function getPrimaryKey()
    {
        return $this->container['primaryKey'];
    }

    /**
    * Sets primaryKey
    *
    * @param string[]|null $primaryKey 表主键列表
    *
    * @return $this
    */
    public function setPrimaryKey($primaryKey)
    {
        $this->container['primaryKey'] = $primaryKey;
        return $this;
    }

    /**
    * Gets partitionKey
    *  分区键
    *
    * @return string|null
    */
    public function getPartitionKey()
    {
        return $this->container['partitionKey'];
    }

    /**
    * Sets partitionKey
    *
    * @param string|null $partitionKey 分区键
    *
    * @return $this
    */
    public function setPartitionKey($partitionKey)
    {
        $this->container['partitionKey'] = $partitionKey;
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

