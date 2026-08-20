<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowDomainStatsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowDomainStatsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * groupBy  **参数解释：** 数据分组方式 **取值范围：** domain：按域名分组 **默认取值：** 不分组
    * startTime  **参数解释：** 查询起始时间戳 **取值范围：** 不涉及
    * endTime  **参数解释：** 查询结束时间戳 **取值范围：** 不涉及
    * statType  **参数解释：** 统计指标类型 **取值范围：** - flux：流量 - req_num：请求总数
    * action  **参数解释：** 查询数据类型 **取值范围：** - summary：汇总数据 - detail：明细数据
    * interval  **参数解释：** 查询时间粒度 **取值范围：** - 300：采样时间间隔为5分钟，单位：秒 - 3600：采样时间间隔为1小时，单位：秒 - 86400：采样时间间隔为1天，单位：秒 **默认取值：** 默认取对应时间跨度的最小间隔 > 时间跨度小于等于7天，最小时间间隔为300；时间跨度大于7天，最小时间间隔为3600
    * result  **参数解释：** 按指定的分组方式组织的数据 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'groupBy' => 'string',
            'startTime' => 'int',
            'endTime' => 'int',
            'statType' => 'string',
            'action' => 'string',
            'interval' => 'int',
            'result' => 'map[string,object]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * groupBy  **参数解释：** 数据分组方式 **取值范围：** domain：按域名分组 **默认取值：** 不分组
    * startTime  **参数解释：** 查询起始时间戳 **取值范围：** 不涉及
    * endTime  **参数解释：** 查询结束时间戳 **取值范围：** 不涉及
    * statType  **参数解释：** 统计指标类型 **取值范围：** - flux：流量 - req_num：请求总数
    * action  **参数解释：** 查询数据类型 **取值范围：** - summary：汇总数据 - detail：明细数据
    * interval  **参数解释：** 查询时间粒度 **取值范围：** - 300：采样时间间隔为5分钟，单位：秒 - 3600：采样时间间隔为1小时，单位：秒 - 86400：采样时间间隔为1天，单位：秒 **默认取值：** 默认取对应时间跨度的最小间隔 > 时间跨度小于等于7天，最小时间间隔为300；时间跨度大于7天，最小时间间隔为3600
    * result  **参数解释：** 按指定的分组方式组织的数据 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'groupBy' => null,
        'startTime' => 'int64',
        'endTime' => 'int64',
        'statType' => null,
        'action' => null,
        'interval' => 'int64',
        'result' => null
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
    * groupBy  **参数解释：** 数据分组方式 **取值范围：** domain：按域名分组 **默认取值：** 不分组
    * startTime  **参数解释：** 查询起始时间戳 **取值范围：** 不涉及
    * endTime  **参数解释：** 查询结束时间戳 **取值范围：** 不涉及
    * statType  **参数解释：** 统计指标类型 **取值范围：** - flux：流量 - req_num：请求总数
    * action  **参数解释：** 查询数据类型 **取值范围：** - summary：汇总数据 - detail：明细数据
    * interval  **参数解释：** 查询时间粒度 **取值范围：** - 300：采样时间间隔为5分钟，单位：秒 - 3600：采样时间间隔为1小时，单位：秒 - 86400：采样时间间隔为1天，单位：秒 **默认取值：** 默认取对应时间跨度的最小间隔 > 时间跨度小于等于7天，最小时间间隔为300；时间跨度大于7天，最小时间间隔为3600
    * result  **参数解释：** 按指定的分组方式组织的数据 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'groupBy' => 'group_by',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'statType' => 'stat_type',
            'action' => 'action',
            'interval' => 'interval',
            'result' => 'result'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groupBy  **参数解释：** 数据分组方式 **取值范围：** domain：按域名分组 **默认取值：** 不分组
    * startTime  **参数解释：** 查询起始时间戳 **取值范围：** 不涉及
    * endTime  **参数解释：** 查询结束时间戳 **取值范围：** 不涉及
    * statType  **参数解释：** 统计指标类型 **取值范围：** - flux：流量 - req_num：请求总数
    * action  **参数解释：** 查询数据类型 **取值范围：** - summary：汇总数据 - detail：明细数据
    * interval  **参数解释：** 查询时间粒度 **取值范围：** - 300：采样时间间隔为5分钟，单位：秒 - 3600：采样时间间隔为1小时，单位：秒 - 86400：采样时间间隔为1天，单位：秒 **默认取值：** 默认取对应时间跨度的最小间隔 > 时间跨度小于等于7天，最小时间间隔为300；时间跨度大于7天，最小时间间隔为3600
    * result  **参数解释：** 按指定的分组方式组织的数据 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'groupBy' => 'setGroupBy',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'statType' => 'setStatType',
            'action' => 'setAction',
            'interval' => 'setInterval',
            'result' => 'setResult'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * groupBy  **参数解释：** 数据分组方式 **取值范围：** domain：按域名分组 **默认取值：** 不分组
    * startTime  **参数解释：** 查询起始时间戳 **取值范围：** 不涉及
    * endTime  **参数解释：** 查询结束时间戳 **取值范围：** 不涉及
    * statType  **参数解释：** 统计指标类型 **取值范围：** - flux：流量 - req_num：请求总数
    * action  **参数解释：** 查询数据类型 **取值范围：** - summary：汇总数据 - detail：明细数据
    * interval  **参数解释：** 查询时间粒度 **取值范围：** - 300：采样时间间隔为5分钟，单位：秒 - 3600：采样时间间隔为1小时，单位：秒 - 86400：采样时间间隔为1天，单位：秒 **默认取值：** 默认取对应时间跨度的最小间隔 > 时间跨度小于等于7天，最小时间间隔为300；时间跨度大于7天，最小时间间隔为3600
    * result  **参数解释：** 按指定的分组方式组织的数据 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'groupBy' => 'getGroupBy',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'statType' => 'getStatType',
            'action' => 'getAction',
            'interval' => 'getInterval',
            'result' => 'getResult'
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
        $this->container['groupBy'] = isset($data['groupBy']) ? $data['groupBy'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['statType'] = isset($data['statType']) ? $data['statType'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['interval'] = isset($data['interval']) ? $data['interval'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['groupBy']) && (mb_strlen($this->container['groupBy']) > 512)) {
                $invalidProperties[] = "invalid value for 'groupBy', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['groupBy']) && (mb_strlen($this->container['groupBy']) < 2)) {
                $invalidProperties[] = "invalid value for 'groupBy', the character length must be bigger than or equal to 2.";
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
    * Gets groupBy
    *  **参数解释：** 数据分组方式 **取值范围：** domain：按域名分组 **默认取值：** 不分组
    *
    * @return string|null
    */
    public function getGroupBy()
    {
        return $this->container['groupBy'];
    }

    /**
    * Sets groupBy
    *
    * @param string|null $groupBy **参数解释：** 数据分组方式 **取值范围：** domain：按域名分组 **默认取值：** 不分组
    *
    * @return $this
    */
    public function setGroupBy($groupBy)
    {
        $this->container['groupBy'] = $groupBy;
        return $this;
    }

    /**
    * Gets startTime
    *  **参数解释：** 查询起始时间戳 **取值范围：** 不涉及
    *
    * @return int|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int|null $startTime **参数解释：** 查询起始时间戳 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  **参数解释：** 查询结束时间戳 **取值范围：** 不涉及
    *
    * @return int|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int|null $endTime **参数解释：** 查询结束时间戳 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets statType
    *  **参数解释：** 统计指标类型 **取值范围：** - flux：流量 - req_num：请求总数
    *
    * @return string|null
    */
    public function getStatType()
    {
        return $this->container['statType'];
    }

    /**
    * Sets statType
    *
    * @param string|null $statType **参数解释：** 统计指标类型 **取值范围：** - flux：流量 - req_num：请求总数
    *
    * @return $this
    */
    public function setStatType($statType)
    {
        $this->container['statType'] = $statType;
        return $this;
    }

    /**
    * Gets action
    *  **参数解释：** 查询数据类型 **取值范围：** - summary：汇总数据 - detail：明细数据
    *
    * @return string|null
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string|null $action **参数解释：** 查询数据类型 **取值范围：** - summary：汇总数据 - detail：明细数据
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets interval
    *  **参数解释：** 查询时间粒度 **取值范围：** - 300：采样时间间隔为5分钟，单位：秒 - 3600：采样时间间隔为1小时，单位：秒 - 86400：采样时间间隔为1天，单位：秒 **默认取值：** 默认取对应时间跨度的最小间隔 > 时间跨度小于等于7天，最小时间间隔为300；时间跨度大于7天，最小时间间隔为3600
    *
    * @return int|null
    */
    public function getInterval()
    {
        return $this->container['interval'];
    }

    /**
    * Sets interval
    *
    * @param int|null $interval **参数解释：** 查询时间粒度 **取值范围：** - 300：采样时间间隔为5分钟，单位：秒 - 3600：采样时间间隔为1小时，单位：秒 - 86400：采样时间间隔为1天，单位：秒 **默认取值：** 默认取对应时间跨度的最小间隔 > 时间跨度小于等于7天，最小时间间隔为300；时间跨度大于7天，最小时间间隔为3600
    *
    * @return $this
    */
    public function setInterval($interval)
    {
        $this->container['interval'] = $interval;
        return $this;
    }

    /**
    * Gets result
    *  **参数解释：** 按指定的分组方式组织的数据 **取值范围：** 不涉及
    *
    * @return map[string,object]|null
    */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
    * Sets result
    *
    * @param map[string,object]|null $result **参数解释：** 按指定的分组方式组织的数据 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setResult($result)
    {
        $this->container['result'] = $result;
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

