<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FullSqlStatisticInfoResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FullSqlStatisticInfoResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * template  **参数解释**: SQL模板。未开启实例内核GUC参数（track_stmt_parameter）时，展示的是归一化SQL模板内容；开启该参数后，展示的是随机一条SQL记录中截断参数列表后的内容。 **取值范围**: 不涉及。
    * sqlId  **参数解释**: 归一化SQL ID。 **取值范围**: 不涉及。
    * sqlCount  **参数解释**: 汇总SQL条目数。 **取值范围**: 不涉及。
    * avgDbTime  **参数解释**: 平均有效DB耗时（微秒）。 **取值范围**: 不涉及。
    * avgCpuTime  **参数解释**: 平均CPU执行耗时（微秒）。 **取值范围**: 不涉及。
    * avgDataIoTime  **参数解释**: 平均IO耗时（微秒）。 **取值范围**: 不涉及。
    * avgExecutionTime  **参数解释**: 平均SQL执行器内执行时间（微秒）。 **取值范围**: 不涉及。
    * avgNBlocksHit  **参数解释**: 平均Buffer块命中次数。 **取值范围**: 不涉及。
    * startTimeStamp  **参数解释**: 开始时间戳。 **取值范围**: 不涉及。
    * endTimeStamp  **参数解释**: 结束时间戳。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'template' => 'string',
            'sqlId' => 'string',
            'sqlCount' => 'int',
            'avgDbTime' => 'int',
            'avgCpuTime' => 'int',
            'avgDataIoTime' => 'int',
            'avgExecutionTime' => 'int',
            'avgNBlocksHit' => 'int',
            'startTimeStamp' => 'string',
            'endTimeStamp' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * template  **参数解释**: SQL模板。未开启实例内核GUC参数（track_stmt_parameter）时，展示的是归一化SQL模板内容；开启该参数后，展示的是随机一条SQL记录中截断参数列表后的内容。 **取值范围**: 不涉及。
    * sqlId  **参数解释**: 归一化SQL ID。 **取值范围**: 不涉及。
    * sqlCount  **参数解释**: 汇总SQL条目数。 **取值范围**: 不涉及。
    * avgDbTime  **参数解释**: 平均有效DB耗时（微秒）。 **取值范围**: 不涉及。
    * avgCpuTime  **参数解释**: 平均CPU执行耗时（微秒）。 **取值范围**: 不涉及。
    * avgDataIoTime  **参数解释**: 平均IO耗时（微秒）。 **取值范围**: 不涉及。
    * avgExecutionTime  **参数解释**: 平均SQL执行器内执行时间（微秒）。 **取值范围**: 不涉及。
    * avgNBlocksHit  **参数解释**: 平均Buffer块命中次数。 **取值范围**: 不涉及。
    * startTimeStamp  **参数解释**: 开始时间戳。 **取值范围**: 不涉及。
    * endTimeStamp  **参数解释**: 结束时间戳。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'template' => null,
        'sqlId' => null,
        'sqlCount' => 'int64',
        'avgDbTime' => 'int64',
        'avgCpuTime' => 'int64',
        'avgDataIoTime' => 'int64',
        'avgExecutionTime' => 'int64',
        'avgNBlocksHit' => 'int64',
        'startTimeStamp' => null,
        'endTimeStamp' => null
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
    * template  **参数解释**: SQL模板。未开启实例内核GUC参数（track_stmt_parameter）时，展示的是归一化SQL模板内容；开启该参数后，展示的是随机一条SQL记录中截断参数列表后的内容。 **取值范围**: 不涉及。
    * sqlId  **参数解释**: 归一化SQL ID。 **取值范围**: 不涉及。
    * sqlCount  **参数解释**: 汇总SQL条目数。 **取值范围**: 不涉及。
    * avgDbTime  **参数解释**: 平均有效DB耗时（微秒）。 **取值范围**: 不涉及。
    * avgCpuTime  **参数解释**: 平均CPU执行耗时（微秒）。 **取值范围**: 不涉及。
    * avgDataIoTime  **参数解释**: 平均IO耗时（微秒）。 **取值范围**: 不涉及。
    * avgExecutionTime  **参数解释**: 平均SQL执行器内执行时间（微秒）。 **取值范围**: 不涉及。
    * avgNBlocksHit  **参数解释**: 平均Buffer块命中次数。 **取值范围**: 不涉及。
    * startTimeStamp  **参数解释**: 开始时间戳。 **取值范围**: 不涉及。
    * endTimeStamp  **参数解释**: 结束时间戳。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'template' => 'template',
            'sqlId' => 'sql_id',
            'sqlCount' => 'sql_count',
            'avgDbTime' => 'avg_db_time',
            'avgCpuTime' => 'avg_cpu_time',
            'avgDataIoTime' => 'avg_data_io_time',
            'avgExecutionTime' => 'avg_execution_time',
            'avgNBlocksHit' => 'avg_n_blocks_hit',
            'startTimeStamp' => 'start_time_stamp',
            'endTimeStamp' => 'end_time_stamp'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * template  **参数解释**: SQL模板。未开启实例内核GUC参数（track_stmt_parameter）时，展示的是归一化SQL模板内容；开启该参数后，展示的是随机一条SQL记录中截断参数列表后的内容。 **取值范围**: 不涉及。
    * sqlId  **参数解释**: 归一化SQL ID。 **取值范围**: 不涉及。
    * sqlCount  **参数解释**: 汇总SQL条目数。 **取值范围**: 不涉及。
    * avgDbTime  **参数解释**: 平均有效DB耗时（微秒）。 **取值范围**: 不涉及。
    * avgCpuTime  **参数解释**: 平均CPU执行耗时（微秒）。 **取值范围**: 不涉及。
    * avgDataIoTime  **参数解释**: 平均IO耗时（微秒）。 **取值范围**: 不涉及。
    * avgExecutionTime  **参数解释**: 平均SQL执行器内执行时间（微秒）。 **取值范围**: 不涉及。
    * avgNBlocksHit  **参数解释**: 平均Buffer块命中次数。 **取值范围**: 不涉及。
    * startTimeStamp  **参数解释**: 开始时间戳。 **取值范围**: 不涉及。
    * endTimeStamp  **参数解释**: 结束时间戳。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'template' => 'setTemplate',
            'sqlId' => 'setSqlId',
            'sqlCount' => 'setSqlCount',
            'avgDbTime' => 'setAvgDbTime',
            'avgCpuTime' => 'setAvgCpuTime',
            'avgDataIoTime' => 'setAvgDataIoTime',
            'avgExecutionTime' => 'setAvgExecutionTime',
            'avgNBlocksHit' => 'setAvgNBlocksHit',
            'startTimeStamp' => 'setStartTimeStamp',
            'endTimeStamp' => 'setEndTimeStamp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * template  **参数解释**: SQL模板。未开启实例内核GUC参数（track_stmt_parameter）时，展示的是归一化SQL模板内容；开启该参数后，展示的是随机一条SQL记录中截断参数列表后的内容。 **取值范围**: 不涉及。
    * sqlId  **参数解释**: 归一化SQL ID。 **取值范围**: 不涉及。
    * sqlCount  **参数解释**: 汇总SQL条目数。 **取值范围**: 不涉及。
    * avgDbTime  **参数解释**: 平均有效DB耗时（微秒）。 **取值范围**: 不涉及。
    * avgCpuTime  **参数解释**: 平均CPU执行耗时（微秒）。 **取值范围**: 不涉及。
    * avgDataIoTime  **参数解释**: 平均IO耗时（微秒）。 **取值范围**: 不涉及。
    * avgExecutionTime  **参数解释**: 平均SQL执行器内执行时间（微秒）。 **取值范围**: 不涉及。
    * avgNBlocksHit  **参数解释**: 平均Buffer块命中次数。 **取值范围**: 不涉及。
    * startTimeStamp  **参数解释**: 开始时间戳。 **取值范围**: 不涉及。
    * endTimeStamp  **参数解释**: 结束时间戳。 **取值范围**: 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'template' => 'getTemplate',
            'sqlId' => 'getSqlId',
            'sqlCount' => 'getSqlCount',
            'avgDbTime' => 'getAvgDbTime',
            'avgCpuTime' => 'getAvgCpuTime',
            'avgDataIoTime' => 'getAvgDataIoTime',
            'avgExecutionTime' => 'getAvgExecutionTime',
            'avgNBlocksHit' => 'getAvgNBlocksHit',
            'startTimeStamp' => 'getStartTimeStamp',
            'endTimeStamp' => 'getEndTimeStamp'
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
        $this->container['template'] = isset($data['template']) ? $data['template'] : null;
        $this->container['sqlId'] = isset($data['sqlId']) ? $data['sqlId'] : null;
        $this->container['sqlCount'] = isset($data['sqlCount']) ? $data['sqlCount'] : null;
        $this->container['avgDbTime'] = isset($data['avgDbTime']) ? $data['avgDbTime'] : null;
        $this->container['avgCpuTime'] = isset($data['avgCpuTime']) ? $data['avgCpuTime'] : null;
        $this->container['avgDataIoTime'] = isset($data['avgDataIoTime']) ? $data['avgDataIoTime'] : null;
        $this->container['avgExecutionTime'] = isset($data['avgExecutionTime']) ? $data['avgExecutionTime'] : null;
        $this->container['avgNBlocksHit'] = isset($data['avgNBlocksHit']) ? $data['avgNBlocksHit'] : null;
        $this->container['startTimeStamp'] = isset($data['startTimeStamp']) ? $data['startTimeStamp'] : null;
        $this->container['endTimeStamp'] = isset($data['endTimeStamp']) ? $data['endTimeStamp'] : null;
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
    * Gets template
    *  **参数解释**: SQL模板。未开启实例内核GUC参数（track_stmt_parameter）时，展示的是归一化SQL模板内容；开启该参数后，展示的是随机一条SQL记录中截断参数列表后的内容。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getTemplate()
    {
        return $this->container['template'];
    }

    /**
    * Sets template
    *
    * @param string|null $template **参数解释**: SQL模板。未开启实例内核GUC参数（track_stmt_parameter）时，展示的是归一化SQL模板内容；开启该参数后，展示的是随机一条SQL记录中截断参数列表后的内容。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setTemplate($template)
    {
        $this->container['template'] = $template;
        return $this;
    }

    /**
    * Gets sqlId
    *  **参数解释**: 归一化SQL ID。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getSqlId()
    {
        return $this->container['sqlId'];
    }

    /**
    * Sets sqlId
    *
    * @param string|null $sqlId **参数解释**: 归一化SQL ID。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setSqlId($sqlId)
    {
        $this->container['sqlId'] = $sqlId;
        return $this;
    }

    /**
    * Gets sqlCount
    *  **参数解释**: 汇总SQL条目数。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getSqlCount()
    {
        return $this->container['sqlCount'];
    }

    /**
    * Sets sqlCount
    *
    * @param int|null $sqlCount **参数解释**: 汇总SQL条目数。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setSqlCount($sqlCount)
    {
        $this->container['sqlCount'] = $sqlCount;
        return $this;
    }

    /**
    * Gets avgDbTime
    *  **参数解释**: 平均有效DB耗时（微秒）。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getAvgDbTime()
    {
        return $this->container['avgDbTime'];
    }

    /**
    * Sets avgDbTime
    *
    * @param int|null $avgDbTime **参数解释**: 平均有效DB耗时（微秒）。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setAvgDbTime($avgDbTime)
    {
        $this->container['avgDbTime'] = $avgDbTime;
        return $this;
    }

    /**
    * Gets avgCpuTime
    *  **参数解释**: 平均CPU执行耗时（微秒）。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getAvgCpuTime()
    {
        return $this->container['avgCpuTime'];
    }

    /**
    * Sets avgCpuTime
    *
    * @param int|null $avgCpuTime **参数解释**: 平均CPU执行耗时（微秒）。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setAvgCpuTime($avgCpuTime)
    {
        $this->container['avgCpuTime'] = $avgCpuTime;
        return $this;
    }

    /**
    * Gets avgDataIoTime
    *  **参数解释**: 平均IO耗时（微秒）。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getAvgDataIoTime()
    {
        return $this->container['avgDataIoTime'];
    }

    /**
    * Sets avgDataIoTime
    *
    * @param int|null $avgDataIoTime **参数解释**: 平均IO耗时（微秒）。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setAvgDataIoTime($avgDataIoTime)
    {
        $this->container['avgDataIoTime'] = $avgDataIoTime;
        return $this;
    }

    /**
    * Gets avgExecutionTime
    *  **参数解释**: 平均SQL执行器内执行时间（微秒）。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getAvgExecutionTime()
    {
        return $this->container['avgExecutionTime'];
    }

    /**
    * Sets avgExecutionTime
    *
    * @param int|null $avgExecutionTime **参数解释**: 平均SQL执行器内执行时间（微秒）。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setAvgExecutionTime($avgExecutionTime)
    {
        $this->container['avgExecutionTime'] = $avgExecutionTime;
        return $this;
    }

    /**
    * Gets avgNBlocksHit
    *  **参数解释**: 平均Buffer块命中次数。 **取值范围**: 不涉及。
    *
    * @return int|null
    */
    public function getAvgNBlocksHit()
    {
        return $this->container['avgNBlocksHit'];
    }

    /**
    * Sets avgNBlocksHit
    *
    * @param int|null $avgNBlocksHit **参数解释**: 平均Buffer块命中次数。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setAvgNBlocksHit($avgNBlocksHit)
    {
        $this->container['avgNBlocksHit'] = $avgNBlocksHit;
        return $this;
    }

    /**
    * Gets startTimeStamp
    *  **参数解释**: 开始时间戳。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getStartTimeStamp()
    {
        return $this->container['startTimeStamp'];
    }

    /**
    * Sets startTimeStamp
    *
    * @param string|null $startTimeStamp **参数解释**: 开始时间戳。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setStartTimeStamp($startTimeStamp)
    {
        $this->container['startTimeStamp'] = $startTimeStamp;
        return $this;
    }

    /**
    * Gets endTimeStamp
    *  **参数解释**: 结束时间戳。 **取值范围**: 不涉及。
    *
    * @return string|null
    */
    public function getEndTimeStamp()
    {
        return $this->container['endTimeStamp'];
    }

    /**
    * Sets endTimeStamp
    *
    * @param string|null $endTimeStamp **参数解释**: 结束时间戳。 **取值范围**: 不涉及。
    *
    * @return $this
    */
    public function setEndTimeStamp($endTimeStamp)
    {
        $this->container['endTimeStamp'] = $endTimeStamp;
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

