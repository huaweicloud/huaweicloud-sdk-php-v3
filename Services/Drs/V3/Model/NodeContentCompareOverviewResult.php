<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NodeContentCompareOverviewResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NodeContentCompareOverviewResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sourceDb  源库名称。
    * targetDb  目标库名称。
    * status  对比状态。 - 0：对比不一致 - 2：对比一致 - 3：目标库表不存在 - 4：对比失败 - 5：正在对比中 - 6：等待对比中 - 7：任务已取消 - 8：源库为空 - 9：目标库为空 - 10：源库和目标库都为空 - 11：源表不存在 - 12：目标表不存在 - 13：原表和目标表都不存在 - 14：源数据库连接失败 - 15：目标库数据库连接失败 - 16：源数据库执行SQL超时 - 17：目标数据库执行SQL超时 - 18：源数据库执行SQL错误 - 19：目标数据库执行SQL错误 - 20：源库和目标库都不存在 - 21：源库不存在 - 22：目标库不存在 - 23：行数为亿行，未进行对比 - 27：超时
    * compareNum  总表数。
    * compareEndNum  已完成表数。
    * dataInconsistentNum  不一致表数。
    * uncomparableNum  无法对比表数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sourceDb' => 'string',
            'targetDb' => 'string',
            'status' => 'int',
            'compareNum' => 'int',
            'compareEndNum' => 'int',
            'dataInconsistentNum' => 'int',
            'uncomparableNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sourceDb  源库名称。
    * targetDb  目标库名称。
    * status  对比状态。 - 0：对比不一致 - 2：对比一致 - 3：目标库表不存在 - 4：对比失败 - 5：正在对比中 - 6：等待对比中 - 7：任务已取消 - 8：源库为空 - 9：目标库为空 - 10：源库和目标库都为空 - 11：源表不存在 - 12：目标表不存在 - 13：原表和目标表都不存在 - 14：源数据库连接失败 - 15：目标库数据库连接失败 - 16：源数据库执行SQL超时 - 17：目标数据库执行SQL超时 - 18：源数据库执行SQL错误 - 19：目标数据库执行SQL错误 - 20：源库和目标库都不存在 - 21：源库不存在 - 22：目标库不存在 - 23：行数为亿行，未进行对比 - 27：超时
    * compareNum  总表数。
    * compareEndNum  已完成表数。
    * dataInconsistentNum  不一致表数。
    * uncomparableNum  无法对比表数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sourceDb' => null,
        'targetDb' => null,
        'status' => 'int32',
        'compareNum' => 'int32',
        'compareEndNum' => 'int32',
        'dataInconsistentNum' => 'int32',
        'uncomparableNum' => 'int32'
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
    * sourceDb  源库名称。
    * targetDb  目标库名称。
    * status  对比状态。 - 0：对比不一致 - 2：对比一致 - 3：目标库表不存在 - 4：对比失败 - 5：正在对比中 - 6：等待对比中 - 7：任务已取消 - 8：源库为空 - 9：目标库为空 - 10：源库和目标库都为空 - 11：源表不存在 - 12：目标表不存在 - 13：原表和目标表都不存在 - 14：源数据库连接失败 - 15：目标库数据库连接失败 - 16：源数据库执行SQL超时 - 17：目标数据库执行SQL超时 - 18：源数据库执行SQL错误 - 19：目标数据库执行SQL错误 - 20：源库和目标库都不存在 - 21：源库不存在 - 22：目标库不存在 - 23：行数为亿行，未进行对比 - 27：超时
    * compareNum  总表数。
    * compareEndNum  已完成表数。
    * dataInconsistentNum  不一致表数。
    * uncomparableNum  无法对比表数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sourceDb' => 'source_db',
            'targetDb' => 'target_db',
            'status' => 'status',
            'compareNum' => 'compare_num',
            'compareEndNum' => 'compare_end_num',
            'dataInconsistentNum' => 'data_inconsistent_num',
            'uncomparableNum' => 'uncomparable_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sourceDb  源库名称。
    * targetDb  目标库名称。
    * status  对比状态。 - 0：对比不一致 - 2：对比一致 - 3：目标库表不存在 - 4：对比失败 - 5：正在对比中 - 6：等待对比中 - 7：任务已取消 - 8：源库为空 - 9：目标库为空 - 10：源库和目标库都为空 - 11：源表不存在 - 12：目标表不存在 - 13：原表和目标表都不存在 - 14：源数据库连接失败 - 15：目标库数据库连接失败 - 16：源数据库执行SQL超时 - 17：目标数据库执行SQL超时 - 18：源数据库执行SQL错误 - 19：目标数据库执行SQL错误 - 20：源库和目标库都不存在 - 21：源库不存在 - 22：目标库不存在 - 23：行数为亿行，未进行对比 - 27：超时
    * compareNum  总表数。
    * compareEndNum  已完成表数。
    * dataInconsistentNum  不一致表数。
    * uncomparableNum  无法对比表数。
    *
    * @var string[]
    */
    protected static $setters = [
            'sourceDb' => 'setSourceDb',
            'targetDb' => 'setTargetDb',
            'status' => 'setStatus',
            'compareNum' => 'setCompareNum',
            'compareEndNum' => 'setCompareEndNum',
            'dataInconsistentNum' => 'setDataInconsistentNum',
            'uncomparableNum' => 'setUncomparableNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sourceDb  源库名称。
    * targetDb  目标库名称。
    * status  对比状态。 - 0：对比不一致 - 2：对比一致 - 3：目标库表不存在 - 4：对比失败 - 5：正在对比中 - 6：等待对比中 - 7：任务已取消 - 8：源库为空 - 9：目标库为空 - 10：源库和目标库都为空 - 11：源表不存在 - 12：目标表不存在 - 13：原表和目标表都不存在 - 14：源数据库连接失败 - 15：目标库数据库连接失败 - 16：源数据库执行SQL超时 - 17：目标数据库执行SQL超时 - 18：源数据库执行SQL错误 - 19：目标数据库执行SQL错误 - 20：源库和目标库都不存在 - 21：源库不存在 - 22：目标库不存在 - 23：行数为亿行，未进行对比 - 27：超时
    * compareNum  总表数。
    * compareEndNum  已完成表数。
    * dataInconsistentNum  不一致表数。
    * uncomparableNum  无法对比表数。
    *
    * @var string[]
    */
    protected static $getters = [
            'sourceDb' => 'getSourceDb',
            'targetDb' => 'getTargetDb',
            'status' => 'getStatus',
            'compareNum' => 'getCompareNum',
            'compareEndNum' => 'getCompareEndNum',
            'dataInconsistentNum' => 'getDataInconsistentNum',
            'uncomparableNum' => 'getUncomparableNum'
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
        $this->container['sourceDb'] = isset($data['sourceDb']) ? $data['sourceDb'] : null;
        $this->container['targetDb'] = isset($data['targetDb']) ? $data['targetDb'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['compareNum'] = isset($data['compareNum']) ? $data['compareNum'] : null;
        $this->container['compareEndNum'] = isset($data['compareEndNum']) ? $data['compareEndNum'] : null;
        $this->container['dataInconsistentNum'] = isset($data['dataInconsistentNum']) ? $data['dataInconsistentNum'] : null;
        $this->container['uncomparableNum'] = isset($data['uncomparableNum']) ? $data['uncomparableNum'] : null;
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
    * Gets sourceDb
    *  源库名称。
    *
    * @return string|null
    */
    public function getSourceDb()
    {
        return $this->container['sourceDb'];
    }

    /**
    * Sets sourceDb
    *
    * @param string|null $sourceDb 源库名称。
    *
    * @return $this
    */
    public function setSourceDb($sourceDb)
    {
        $this->container['sourceDb'] = $sourceDb;
        return $this;
    }

    /**
    * Gets targetDb
    *  目标库名称。
    *
    * @return string|null
    */
    public function getTargetDb()
    {
        return $this->container['targetDb'];
    }

    /**
    * Sets targetDb
    *
    * @param string|null $targetDb 目标库名称。
    *
    * @return $this
    */
    public function setTargetDb($targetDb)
    {
        $this->container['targetDb'] = $targetDb;
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
    * Gets compareNum
    *  总表数。
    *
    * @return int|null
    */
    public function getCompareNum()
    {
        return $this->container['compareNum'];
    }

    /**
    * Sets compareNum
    *
    * @param int|null $compareNum 总表数。
    *
    * @return $this
    */
    public function setCompareNum($compareNum)
    {
        $this->container['compareNum'] = $compareNum;
        return $this;
    }

    /**
    * Gets compareEndNum
    *  已完成表数。
    *
    * @return int|null
    */
    public function getCompareEndNum()
    {
        return $this->container['compareEndNum'];
    }

    /**
    * Sets compareEndNum
    *
    * @param int|null $compareEndNum 已完成表数。
    *
    * @return $this
    */
    public function setCompareEndNum($compareEndNum)
    {
        $this->container['compareEndNum'] = $compareEndNum;
        return $this;
    }

    /**
    * Gets dataInconsistentNum
    *  不一致表数。
    *
    * @return int|null
    */
    public function getDataInconsistentNum()
    {
        return $this->container['dataInconsistentNum'];
    }

    /**
    * Sets dataInconsistentNum
    *
    * @param int|null $dataInconsistentNum 不一致表数。
    *
    * @return $this
    */
    public function setDataInconsistentNum($dataInconsistentNum)
    {
        $this->container['dataInconsistentNum'] = $dataInconsistentNum;
        return $this;
    }

    /**
    * Gets uncomparableNum
    *  无法对比表数。
    *
    * @return int|null
    */
    public function getUncomparableNum()
    {
        return $this->container['uncomparableNum'];
    }

    /**
    * Sets uncomparableNum
    *
    * @param int|null $uncomparableNum 无法对比表数。
    *
    * @return $this
    */
    public function setUncomparableNum($uncomparableNum)
    {
        $this->container['uncomparableNum'] = $uncomparableNum;
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

