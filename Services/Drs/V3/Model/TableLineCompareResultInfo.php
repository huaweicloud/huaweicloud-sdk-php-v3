<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TableLineCompareResultInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TableLineCompareResultInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sourceTableName  源库表名称
    * sourceRowNum  源库表行数
    * targetTableName  目标库表名称
    * targetRowNum  目标库表行数
    * differenceRowNum  行数差异值
    * status  对比状态。 - 0：对比不一致 - 2：对比一致 - 3：目标库表不存在 - 4：对比失败 - 5：正在对比中 - 6：等待对比中 - 7：任务已取消 - 8：源库为空 - 9：目标库为空 - 10：源库和目标库都为空 - 11：源表不存在 - 12：目标表不存在 - 13：原表和目标表都不存在 - 14：源数据库连接失败 - 15：目标库数据库连接失败 - 16：源数据库执行SQL超时 - 17：目标数据库执行SQL超时 - 18：源数据库执行SQL错误 - 19：目标数据库执行SQL错误 - 20：源库和目标库都不存在 - 21：源库不存在 - 22：目标库不存在 - 23：行数为亿行，未进行对比 - 27：超时
    * compareLineConfigFilter  行过滤配置条件
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sourceTableName' => 'string',
            'sourceRowNum' => 'int',
            'targetTableName' => 'string',
            'targetRowNum' => 'int',
            'differenceRowNum' => 'int',
            'status' => 'int',
            'compareLineConfigFilter' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sourceTableName  源库表名称
    * sourceRowNum  源库表行数
    * targetTableName  目标库表名称
    * targetRowNum  目标库表行数
    * differenceRowNum  行数差异值
    * status  对比状态。 - 0：对比不一致 - 2：对比一致 - 3：目标库表不存在 - 4：对比失败 - 5：正在对比中 - 6：等待对比中 - 7：任务已取消 - 8：源库为空 - 9：目标库为空 - 10：源库和目标库都为空 - 11：源表不存在 - 12：目标表不存在 - 13：原表和目标表都不存在 - 14：源数据库连接失败 - 15：目标库数据库连接失败 - 16：源数据库执行SQL超时 - 17：目标数据库执行SQL超时 - 18：源数据库执行SQL错误 - 19：目标数据库执行SQL错误 - 20：源库和目标库都不存在 - 21：源库不存在 - 22：目标库不存在 - 23：行数为亿行，未进行对比 - 27：超时
    * compareLineConfigFilter  行过滤配置条件
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sourceTableName' => null,
        'sourceRowNum' => 'int64',
        'targetTableName' => null,
        'targetRowNum' => 'int64',
        'differenceRowNum' => 'int64',
        'status' => 'int32',
        'compareLineConfigFilter' => null
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
    * sourceTableName  源库表名称
    * sourceRowNum  源库表行数
    * targetTableName  目标库表名称
    * targetRowNum  目标库表行数
    * differenceRowNum  行数差异值
    * status  对比状态。 - 0：对比不一致 - 2：对比一致 - 3：目标库表不存在 - 4：对比失败 - 5：正在对比中 - 6：等待对比中 - 7：任务已取消 - 8：源库为空 - 9：目标库为空 - 10：源库和目标库都为空 - 11：源表不存在 - 12：目标表不存在 - 13：原表和目标表都不存在 - 14：源数据库连接失败 - 15：目标库数据库连接失败 - 16：源数据库执行SQL超时 - 17：目标数据库执行SQL超时 - 18：源数据库执行SQL错误 - 19：目标数据库执行SQL错误 - 20：源库和目标库都不存在 - 21：源库不存在 - 22：目标库不存在 - 23：行数为亿行，未进行对比 - 27：超时
    * compareLineConfigFilter  行过滤配置条件
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sourceTableName' => 'source_table_name',
            'sourceRowNum' => 'source_row_num',
            'targetTableName' => 'target_table_name',
            'targetRowNum' => 'target_row_num',
            'differenceRowNum' => 'difference_row_num',
            'status' => 'status',
            'compareLineConfigFilter' => 'compare_line_config_filter'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sourceTableName  源库表名称
    * sourceRowNum  源库表行数
    * targetTableName  目标库表名称
    * targetRowNum  目标库表行数
    * differenceRowNum  行数差异值
    * status  对比状态。 - 0：对比不一致 - 2：对比一致 - 3：目标库表不存在 - 4：对比失败 - 5：正在对比中 - 6：等待对比中 - 7：任务已取消 - 8：源库为空 - 9：目标库为空 - 10：源库和目标库都为空 - 11：源表不存在 - 12：目标表不存在 - 13：原表和目标表都不存在 - 14：源数据库连接失败 - 15：目标库数据库连接失败 - 16：源数据库执行SQL超时 - 17：目标数据库执行SQL超时 - 18：源数据库执行SQL错误 - 19：目标数据库执行SQL错误 - 20：源库和目标库都不存在 - 21：源库不存在 - 22：目标库不存在 - 23：行数为亿行，未进行对比 - 27：超时
    * compareLineConfigFilter  行过滤配置条件
    *
    * @var string[]
    */
    protected static $setters = [
            'sourceTableName' => 'setSourceTableName',
            'sourceRowNum' => 'setSourceRowNum',
            'targetTableName' => 'setTargetTableName',
            'targetRowNum' => 'setTargetRowNum',
            'differenceRowNum' => 'setDifferenceRowNum',
            'status' => 'setStatus',
            'compareLineConfigFilter' => 'setCompareLineConfigFilter'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sourceTableName  源库表名称
    * sourceRowNum  源库表行数
    * targetTableName  目标库表名称
    * targetRowNum  目标库表行数
    * differenceRowNum  行数差异值
    * status  对比状态。 - 0：对比不一致 - 2：对比一致 - 3：目标库表不存在 - 4：对比失败 - 5：正在对比中 - 6：等待对比中 - 7：任务已取消 - 8：源库为空 - 9：目标库为空 - 10：源库和目标库都为空 - 11：源表不存在 - 12：目标表不存在 - 13：原表和目标表都不存在 - 14：源数据库连接失败 - 15：目标库数据库连接失败 - 16：源数据库执行SQL超时 - 17：目标数据库执行SQL超时 - 18：源数据库执行SQL错误 - 19：目标数据库执行SQL错误 - 20：源库和目标库都不存在 - 21：源库不存在 - 22：目标库不存在 - 23：行数为亿行，未进行对比 - 27：超时
    * compareLineConfigFilter  行过滤配置条件
    *
    * @var string[]
    */
    protected static $getters = [
            'sourceTableName' => 'getSourceTableName',
            'sourceRowNum' => 'getSourceRowNum',
            'targetTableName' => 'getTargetTableName',
            'targetRowNum' => 'getTargetRowNum',
            'differenceRowNum' => 'getDifferenceRowNum',
            'status' => 'getStatus',
            'compareLineConfigFilter' => 'getCompareLineConfigFilter'
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
        $this->container['sourceTableName'] = isset($data['sourceTableName']) ? $data['sourceTableName'] : null;
        $this->container['sourceRowNum'] = isset($data['sourceRowNum']) ? $data['sourceRowNum'] : null;
        $this->container['targetTableName'] = isset($data['targetTableName']) ? $data['targetTableName'] : null;
        $this->container['targetRowNum'] = isset($data['targetRowNum']) ? $data['targetRowNum'] : null;
        $this->container['differenceRowNum'] = isset($data['differenceRowNum']) ? $data['differenceRowNum'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['compareLineConfigFilter'] = isset($data['compareLineConfigFilter']) ? $data['compareLineConfigFilter'] : null;
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
    * Gets sourceTableName
    *  源库表名称
    *
    * @return string|null
    */
    public function getSourceTableName()
    {
        return $this->container['sourceTableName'];
    }

    /**
    * Sets sourceTableName
    *
    * @param string|null $sourceTableName 源库表名称
    *
    * @return $this
    */
    public function setSourceTableName($sourceTableName)
    {
        $this->container['sourceTableName'] = $sourceTableName;
        return $this;
    }

    /**
    * Gets sourceRowNum
    *  源库表行数
    *
    * @return int|null
    */
    public function getSourceRowNum()
    {
        return $this->container['sourceRowNum'];
    }

    /**
    * Sets sourceRowNum
    *
    * @param int|null $sourceRowNum 源库表行数
    *
    * @return $this
    */
    public function setSourceRowNum($sourceRowNum)
    {
        $this->container['sourceRowNum'] = $sourceRowNum;
        return $this;
    }

    /**
    * Gets targetTableName
    *  目标库表名称
    *
    * @return string|null
    */
    public function getTargetTableName()
    {
        return $this->container['targetTableName'];
    }

    /**
    * Sets targetTableName
    *
    * @param string|null $targetTableName 目标库表名称
    *
    * @return $this
    */
    public function setTargetTableName($targetTableName)
    {
        $this->container['targetTableName'] = $targetTableName;
        return $this;
    }

    /**
    * Gets targetRowNum
    *  目标库表行数
    *
    * @return int|null
    */
    public function getTargetRowNum()
    {
        return $this->container['targetRowNum'];
    }

    /**
    * Sets targetRowNum
    *
    * @param int|null $targetRowNum 目标库表行数
    *
    * @return $this
    */
    public function setTargetRowNum($targetRowNum)
    {
        $this->container['targetRowNum'] = $targetRowNum;
        return $this;
    }

    /**
    * Gets differenceRowNum
    *  行数差异值
    *
    * @return int|null
    */
    public function getDifferenceRowNum()
    {
        return $this->container['differenceRowNum'];
    }

    /**
    * Sets differenceRowNum
    *
    * @param int|null $differenceRowNum 行数差异值
    *
    * @return $this
    */
    public function setDifferenceRowNum($differenceRowNum)
    {
        $this->container['differenceRowNum'] = $differenceRowNum;
        return $this;
    }

    /**
    * Gets status
    *  对比状态。 - 0：对比不一致 - 2：对比一致 - 3：目标库表不存在 - 4：对比失败 - 5：正在对比中 - 6：等待对比中 - 7：任务已取消 - 8：源库为空 - 9：目标库为空 - 10：源库和目标库都为空 - 11：源表不存在 - 12：目标表不存在 - 13：原表和目标表都不存在 - 14：源数据库连接失败 - 15：目标库数据库连接失败 - 16：源数据库执行SQL超时 - 17：目标数据库执行SQL超时 - 18：源数据库执行SQL错误 - 19：目标数据库执行SQL错误 - 20：源库和目标库都不存在 - 21：源库不存在 - 22：目标库不存在 - 23：行数为亿行，未进行对比 - 27：超时
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status 对比状态。 - 0：对比不一致 - 2：对比一致 - 3：目标库表不存在 - 4：对比失败 - 5：正在对比中 - 6：等待对比中 - 7：任务已取消 - 8：源库为空 - 9：目标库为空 - 10：源库和目标库都为空 - 11：源表不存在 - 12：目标表不存在 - 13：原表和目标表都不存在 - 14：源数据库连接失败 - 15：目标库数据库连接失败 - 16：源数据库执行SQL超时 - 17：目标数据库执行SQL超时 - 18：源数据库执行SQL错误 - 19：目标数据库执行SQL错误 - 20：源库和目标库都不存在 - 21：源库不存在 - 22：目标库不存在 - 23：行数为亿行，未进行对比 - 27：超时
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets compareLineConfigFilter
    *  行过滤配置条件
    *
    * @return string|null
    */
    public function getCompareLineConfigFilter()
    {
        return $this->container['compareLineConfigFilter'];
    }

    /**
    * Sets compareLineConfigFilter
    *
    * @param string|null $compareLineConfigFilter 行过滤配置条件
    *
    * @return $this
    */
    public function setCompareLineConfigFilter($compareLineConfigFilter)
    {
        $this->container['compareLineConfigFilter'] = $compareLineConfigFilter;
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

