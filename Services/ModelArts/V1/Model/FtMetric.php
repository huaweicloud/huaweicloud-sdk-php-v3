<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FtMetric implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FtMetric';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nameCn  指标中文名称，如 训练指标、准确率，前端用作图例或列名
    * nameEn  指标英文名称，如 train_loss、val_accuracy，前端用作图例或列名
    * desEn  指标中文解释，如 训练指标，前端用作针对指标进行释义
    * desCn  指标英文解释，如 train loss，前端用作针对指标进行释义
    * type  指标绘图类型，可选 line（折线图）或 pie（饼图）、tabel（表格）、scalar（单值），可扩展 image 等
    * group  逻辑分组，如 training、validation、test，可扩展，用于前端分栏或过滤
    * groupBy  指定哪些数据点字段用于分组生成多个系列（如 [\"layer\",\"feature\"]）
    * xAxis  明确指定用作 X 轴的数据点字段名（如 \"step\"、\"epoch\"、\"timestamp\"）
    * tags  逻辑分组，如 表面loss，用于前端分组或过滤
    * unit  单位，如 %、samples/sec，仅用于展示
    * data  数据点数组，严格按时间/步序升序排列
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nameCn' => 'string',
            'nameEn' => 'string',
            'desEn' => 'string',
            'desCn' => 'string',
            'type' => 'string',
            'group' => 'string',
            'groupBy' => 'string[]',
            'xAxis' => 'string',
            'tags' => 'string[]',
            'unit' => 'string',
            'data' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nameCn  指标中文名称，如 训练指标、准确率，前端用作图例或列名
    * nameEn  指标英文名称，如 train_loss、val_accuracy，前端用作图例或列名
    * desEn  指标中文解释，如 训练指标，前端用作针对指标进行释义
    * desCn  指标英文解释，如 train loss，前端用作针对指标进行释义
    * type  指标绘图类型，可选 line（折线图）或 pie（饼图）、tabel（表格）、scalar（单值），可扩展 image 等
    * group  逻辑分组，如 training、validation、test，可扩展，用于前端分栏或过滤
    * groupBy  指定哪些数据点字段用于分组生成多个系列（如 [\"layer\",\"feature\"]）
    * xAxis  明确指定用作 X 轴的数据点字段名（如 \"step\"、\"epoch\"、\"timestamp\"）
    * tags  逻辑分组，如 表面loss，用于前端分组或过滤
    * unit  单位，如 %、samples/sec，仅用于展示
    * data  数据点数组，严格按时间/步序升序排列
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nameCn' => null,
        'nameEn' => null,
        'desEn' => null,
        'desCn' => null,
        'type' => null,
        'group' => null,
        'groupBy' => null,
        'xAxis' => null,
        'tags' => null,
        'unit' => null,
        'data' => null
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
    * nameCn  指标中文名称，如 训练指标、准确率，前端用作图例或列名
    * nameEn  指标英文名称，如 train_loss、val_accuracy，前端用作图例或列名
    * desEn  指标中文解释，如 训练指标，前端用作针对指标进行释义
    * desCn  指标英文解释，如 train loss，前端用作针对指标进行释义
    * type  指标绘图类型，可选 line（折线图）或 pie（饼图）、tabel（表格）、scalar（单值），可扩展 image 等
    * group  逻辑分组，如 training、validation、test，可扩展，用于前端分栏或过滤
    * groupBy  指定哪些数据点字段用于分组生成多个系列（如 [\"layer\",\"feature\"]）
    * xAxis  明确指定用作 X 轴的数据点字段名（如 \"step\"、\"epoch\"、\"timestamp\"）
    * tags  逻辑分组，如 表面loss，用于前端分组或过滤
    * unit  单位，如 %、samples/sec，仅用于展示
    * data  数据点数组，严格按时间/步序升序排列
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nameCn' => 'name_cn',
            'nameEn' => 'name_en',
            'desEn' => 'des_en',
            'desCn' => 'des_cn',
            'type' => 'type',
            'group' => 'group',
            'groupBy' => 'group_by',
            'xAxis' => 'x_axis',
            'tags' => 'tags',
            'unit' => 'unit',
            'data' => 'data'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nameCn  指标中文名称，如 训练指标、准确率，前端用作图例或列名
    * nameEn  指标英文名称，如 train_loss、val_accuracy，前端用作图例或列名
    * desEn  指标中文解释，如 训练指标，前端用作针对指标进行释义
    * desCn  指标英文解释，如 train loss，前端用作针对指标进行释义
    * type  指标绘图类型，可选 line（折线图）或 pie（饼图）、tabel（表格）、scalar（单值），可扩展 image 等
    * group  逻辑分组，如 training、validation、test，可扩展，用于前端分栏或过滤
    * groupBy  指定哪些数据点字段用于分组生成多个系列（如 [\"layer\",\"feature\"]）
    * xAxis  明确指定用作 X 轴的数据点字段名（如 \"step\"、\"epoch\"、\"timestamp\"）
    * tags  逻辑分组，如 表面loss，用于前端分组或过滤
    * unit  单位，如 %、samples/sec，仅用于展示
    * data  数据点数组，严格按时间/步序升序排列
    *
    * @var string[]
    */
    protected static $setters = [
            'nameCn' => 'setNameCn',
            'nameEn' => 'setNameEn',
            'desEn' => 'setDesEn',
            'desCn' => 'setDesCn',
            'type' => 'setType',
            'group' => 'setGroup',
            'groupBy' => 'setGroupBy',
            'xAxis' => 'setXAxis',
            'tags' => 'setTags',
            'unit' => 'setUnit',
            'data' => 'setData'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nameCn  指标中文名称，如 训练指标、准确率，前端用作图例或列名
    * nameEn  指标英文名称，如 train_loss、val_accuracy，前端用作图例或列名
    * desEn  指标中文解释，如 训练指标，前端用作针对指标进行释义
    * desCn  指标英文解释，如 train loss，前端用作针对指标进行释义
    * type  指标绘图类型，可选 line（折线图）或 pie（饼图）、tabel（表格）、scalar（单值），可扩展 image 等
    * group  逻辑分组，如 training、validation、test，可扩展，用于前端分栏或过滤
    * groupBy  指定哪些数据点字段用于分组生成多个系列（如 [\"layer\",\"feature\"]）
    * xAxis  明确指定用作 X 轴的数据点字段名（如 \"step\"、\"epoch\"、\"timestamp\"）
    * tags  逻辑分组，如 表面loss，用于前端分组或过滤
    * unit  单位，如 %、samples/sec，仅用于展示
    * data  数据点数组，严格按时间/步序升序排列
    *
    * @var string[]
    */
    protected static $getters = [
            'nameCn' => 'getNameCn',
            'nameEn' => 'getNameEn',
            'desEn' => 'getDesEn',
            'desCn' => 'getDesCn',
            'type' => 'getType',
            'group' => 'getGroup',
            'groupBy' => 'getGroupBy',
            'xAxis' => 'getXAxis',
            'tags' => 'getTags',
            'unit' => 'getUnit',
            'data' => 'getData'
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
        $this->container['nameCn'] = isset($data['nameCn']) ? $data['nameCn'] : null;
        $this->container['nameEn'] = isset($data['nameEn']) ? $data['nameEn'] : null;
        $this->container['desEn'] = isset($data['desEn']) ? $data['desEn'] : null;
        $this->container['desCn'] = isset($data['desCn']) ? $data['desCn'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['group'] = isset($data['group']) ? $data['group'] : null;
        $this->container['groupBy'] = isset($data['groupBy']) ? $data['groupBy'] : null;
        $this->container['xAxis'] = isset($data['xAxis']) ? $data['xAxis'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['nameCn'] === null) {
            $invalidProperties[] = "'nameCn' can't be null";
        }
        if ($this->container['nameEn'] === null) {
            $invalidProperties[] = "'nameEn' can't be null";
        }
        if ($this->container['desEn'] === null) {
            $invalidProperties[] = "'desEn' can't be null";
        }
        if ($this->container['desCn'] === null) {
            $invalidProperties[] = "'desCn' can't be null";
        }
        if ($this->container['data'] === null) {
            $invalidProperties[] = "'data' can't be null";
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
    * Gets nameCn
    *  指标中文名称，如 训练指标、准确率，前端用作图例或列名
    *
    * @return string
    */
    public function getNameCn()
    {
        return $this->container['nameCn'];
    }

    /**
    * Sets nameCn
    *
    * @param string $nameCn 指标中文名称，如 训练指标、准确率，前端用作图例或列名
    *
    * @return $this
    */
    public function setNameCn($nameCn)
    {
        $this->container['nameCn'] = $nameCn;
        return $this;
    }

    /**
    * Gets nameEn
    *  指标英文名称，如 train_loss、val_accuracy，前端用作图例或列名
    *
    * @return string
    */
    public function getNameEn()
    {
        return $this->container['nameEn'];
    }

    /**
    * Sets nameEn
    *
    * @param string $nameEn 指标英文名称，如 train_loss、val_accuracy，前端用作图例或列名
    *
    * @return $this
    */
    public function setNameEn($nameEn)
    {
        $this->container['nameEn'] = $nameEn;
        return $this;
    }

    /**
    * Gets desEn
    *  指标中文解释，如 训练指标，前端用作针对指标进行释义
    *
    * @return string
    */
    public function getDesEn()
    {
        return $this->container['desEn'];
    }

    /**
    * Sets desEn
    *
    * @param string $desEn 指标中文解释，如 训练指标，前端用作针对指标进行释义
    *
    * @return $this
    */
    public function setDesEn($desEn)
    {
        $this->container['desEn'] = $desEn;
        return $this;
    }

    /**
    * Gets desCn
    *  指标英文解释，如 train loss，前端用作针对指标进行释义
    *
    * @return string
    */
    public function getDesCn()
    {
        return $this->container['desCn'];
    }

    /**
    * Sets desCn
    *
    * @param string $desCn 指标英文解释，如 train loss，前端用作针对指标进行释义
    *
    * @return $this
    */
    public function setDesCn($desCn)
    {
        $this->container['desCn'] = $desCn;
        return $this;
    }

    /**
    * Gets type
    *  指标绘图类型，可选 line（折线图）或 pie（饼图）、tabel（表格）、scalar（单值），可扩展 image 等
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 指标绘图类型，可选 line（折线图）或 pie（饼图）、tabel（表格）、scalar（单值），可扩展 image 等
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets group
    *  逻辑分组，如 training、validation、test，可扩展，用于前端分栏或过滤
    *
    * @return string|null
    */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
    * Sets group
    *
    * @param string|null $group 逻辑分组，如 training、validation、test，可扩展，用于前端分栏或过滤
    *
    * @return $this
    */
    public function setGroup($group)
    {
        $this->container['group'] = $group;
        return $this;
    }

    /**
    * Gets groupBy
    *  指定哪些数据点字段用于分组生成多个系列（如 [\"layer\",\"feature\"]）
    *
    * @return string[]|null
    */
    public function getGroupBy()
    {
        return $this->container['groupBy'];
    }

    /**
    * Sets groupBy
    *
    * @param string[]|null $groupBy 指定哪些数据点字段用于分组生成多个系列（如 [\"layer\",\"feature\"]）
    *
    * @return $this
    */
    public function setGroupBy($groupBy)
    {
        $this->container['groupBy'] = $groupBy;
        return $this;
    }

    /**
    * Gets xAxis
    *  明确指定用作 X 轴的数据点字段名（如 \"step\"、\"epoch\"、\"timestamp\"）
    *
    * @return string|null
    */
    public function getXAxis()
    {
        return $this->container['xAxis'];
    }

    /**
    * Sets xAxis
    *
    * @param string|null $xAxis 明确指定用作 X 轴的数据点字段名（如 \"step\"、\"epoch\"、\"timestamp\"）
    *
    * @return $this
    */
    public function setXAxis($xAxis)
    {
        $this->container['xAxis'] = $xAxis;
        return $this;
    }

    /**
    * Gets tags
    *  逻辑分组，如 表面loss，用于前端分组或过滤
    *
    * @return string[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param string[]|null $tags 逻辑分组，如 表面loss，用于前端分组或过滤
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets unit
    *  单位，如 %、samples/sec，仅用于展示
    *
    * @return string|null
    */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
    * Sets unit
    *
    * @param string|null $unit 单位，如 %、samples/sec，仅用于展示
    *
    * @return $this
    */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;
        return $this;
    }

    /**
    * Gets data
    *  数据点数组，严格按时间/步序升序排列
    *
    * @return object
    */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
    * Sets data
    *
    * @param object $data 数据点数组，严格按时间/步序升序排列
    *
    * @return $this
    */
    public function setData($data)
    {
        $this->container['data'] = $data;
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

