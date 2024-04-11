<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NodeContentCompareDetailResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NodeContentCompareDetailResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sourceDb  源库名称。
    * targetDb  目标库名称。
    * sourceTableName  源库的表名称。
    * targetTableName  目标库名称。
    * sourceRowNum  源库表行数。
    * targetRowNum  目标库表行数。
    * differenceRowNum  源库的表和目标库的表的差异值。
    * lineCompareResult  行对比结果。 - true：一致 - false：不一致
    * contentCompareResult  内容对比结果。 - true：一致 - false：不一致
    * message  附加信息。
    * compareLineConfigFilter  行过滤配置条件
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sourceDb' => 'string',
            'targetDb' => 'string',
            'sourceTableName' => 'string',
            'targetTableName' => 'string',
            'sourceRowNum' => 'int',
            'targetRowNum' => 'int',
            'differenceRowNum' => 'int',
            'lineCompareResult' => 'bool',
            'contentCompareResult' => 'bool',
            'message' => 'string',
            'compareLineConfigFilter' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sourceDb  源库名称。
    * targetDb  目标库名称。
    * sourceTableName  源库的表名称。
    * targetTableName  目标库名称。
    * sourceRowNum  源库表行数。
    * targetRowNum  目标库表行数。
    * differenceRowNum  源库的表和目标库的表的差异值。
    * lineCompareResult  行对比结果。 - true：一致 - false：不一致
    * contentCompareResult  内容对比结果。 - true：一致 - false：不一致
    * message  附加信息。
    * compareLineConfigFilter  行过滤配置条件
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sourceDb' => null,
        'targetDb' => null,
        'sourceTableName' => null,
        'targetTableName' => null,
        'sourceRowNum' => 'int64',
        'targetRowNum' => 'int64',
        'differenceRowNum' => 'int64',
        'lineCompareResult' => null,
        'contentCompareResult' => null,
        'message' => null,
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
    * sourceDb  源库名称。
    * targetDb  目标库名称。
    * sourceTableName  源库的表名称。
    * targetTableName  目标库名称。
    * sourceRowNum  源库表行数。
    * targetRowNum  目标库表行数。
    * differenceRowNum  源库的表和目标库的表的差异值。
    * lineCompareResult  行对比结果。 - true：一致 - false：不一致
    * contentCompareResult  内容对比结果。 - true：一致 - false：不一致
    * message  附加信息。
    * compareLineConfigFilter  行过滤配置条件
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sourceDb' => 'source_db',
            'targetDb' => 'target_db',
            'sourceTableName' => 'source_table_name',
            'targetTableName' => 'target_table_name',
            'sourceRowNum' => 'source_row_num',
            'targetRowNum' => 'target_row_num',
            'differenceRowNum' => 'difference_row_num',
            'lineCompareResult' => 'line_compare_result',
            'contentCompareResult' => 'content_compare_result',
            'message' => 'message',
            'compareLineConfigFilter' => 'compare_line_config_filter'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sourceDb  源库名称。
    * targetDb  目标库名称。
    * sourceTableName  源库的表名称。
    * targetTableName  目标库名称。
    * sourceRowNum  源库表行数。
    * targetRowNum  目标库表行数。
    * differenceRowNum  源库的表和目标库的表的差异值。
    * lineCompareResult  行对比结果。 - true：一致 - false：不一致
    * contentCompareResult  内容对比结果。 - true：一致 - false：不一致
    * message  附加信息。
    * compareLineConfigFilter  行过滤配置条件
    *
    * @var string[]
    */
    protected static $setters = [
            'sourceDb' => 'setSourceDb',
            'targetDb' => 'setTargetDb',
            'sourceTableName' => 'setSourceTableName',
            'targetTableName' => 'setTargetTableName',
            'sourceRowNum' => 'setSourceRowNum',
            'targetRowNum' => 'setTargetRowNum',
            'differenceRowNum' => 'setDifferenceRowNum',
            'lineCompareResult' => 'setLineCompareResult',
            'contentCompareResult' => 'setContentCompareResult',
            'message' => 'setMessage',
            'compareLineConfigFilter' => 'setCompareLineConfigFilter'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sourceDb  源库名称。
    * targetDb  目标库名称。
    * sourceTableName  源库的表名称。
    * targetTableName  目标库名称。
    * sourceRowNum  源库表行数。
    * targetRowNum  目标库表行数。
    * differenceRowNum  源库的表和目标库的表的差异值。
    * lineCompareResult  行对比结果。 - true：一致 - false：不一致
    * contentCompareResult  内容对比结果。 - true：一致 - false：不一致
    * message  附加信息。
    * compareLineConfigFilter  行过滤配置条件
    *
    * @var string[]
    */
    protected static $getters = [
            'sourceDb' => 'getSourceDb',
            'targetDb' => 'getTargetDb',
            'sourceTableName' => 'getSourceTableName',
            'targetTableName' => 'getTargetTableName',
            'sourceRowNum' => 'getSourceRowNum',
            'targetRowNum' => 'getTargetRowNum',
            'differenceRowNum' => 'getDifferenceRowNum',
            'lineCompareResult' => 'getLineCompareResult',
            'contentCompareResult' => 'getContentCompareResult',
            'message' => 'getMessage',
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
        $this->container['sourceDb'] = isset($data['sourceDb']) ? $data['sourceDb'] : null;
        $this->container['targetDb'] = isset($data['targetDb']) ? $data['targetDb'] : null;
        $this->container['sourceTableName'] = isset($data['sourceTableName']) ? $data['sourceTableName'] : null;
        $this->container['targetTableName'] = isset($data['targetTableName']) ? $data['targetTableName'] : null;
        $this->container['sourceRowNum'] = isset($data['sourceRowNum']) ? $data['sourceRowNum'] : null;
        $this->container['targetRowNum'] = isset($data['targetRowNum']) ? $data['targetRowNum'] : null;
        $this->container['differenceRowNum'] = isset($data['differenceRowNum']) ? $data['differenceRowNum'] : null;
        $this->container['lineCompareResult'] = isset($data['lineCompareResult']) ? $data['lineCompareResult'] : null;
        $this->container['contentCompareResult'] = isset($data['contentCompareResult']) ? $data['contentCompareResult'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
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
    * Gets sourceTableName
    *  源库的表名称。
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
    * @param string|null $sourceTableName 源库的表名称。
    *
    * @return $this
    */
    public function setSourceTableName($sourceTableName)
    {
        $this->container['sourceTableName'] = $sourceTableName;
        return $this;
    }

    /**
    * Gets targetTableName
    *  目标库名称。
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
    * @param string|null $targetTableName 目标库名称。
    *
    * @return $this
    */
    public function setTargetTableName($targetTableName)
    {
        $this->container['targetTableName'] = $targetTableName;
        return $this;
    }

    /**
    * Gets sourceRowNum
    *  源库表行数。
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
    * @param int|null $sourceRowNum 源库表行数。
    *
    * @return $this
    */
    public function setSourceRowNum($sourceRowNum)
    {
        $this->container['sourceRowNum'] = $sourceRowNum;
        return $this;
    }

    /**
    * Gets targetRowNum
    *  目标库表行数。
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
    * @param int|null $targetRowNum 目标库表行数。
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
    *  源库的表和目标库的表的差异值。
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
    * @param int|null $differenceRowNum 源库的表和目标库的表的差异值。
    *
    * @return $this
    */
    public function setDifferenceRowNum($differenceRowNum)
    {
        $this->container['differenceRowNum'] = $differenceRowNum;
        return $this;
    }

    /**
    * Gets lineCompareResult
    *  行对比结果。 - true：一致 - false：不一致
    *
    * @return bool|null
    */
    public function getLineCompareResult()
    {
        return $this->container['lineCompareResult'];
    }

    /**
    * Sets lineCompareResult
    *
    * @param bool|null $lineCompareResult 行对比结果。 - true：一致 - false：不一致
    *
    * @return $this
    */
    public function setLineCompareResult($lineCompareResult)
    {
        $this->container['lineCompareResult'] = $lineCompareResult;
        return $this;
    }

    /**
    * Gets contentCompareResult
    *  内容对比结果。 - true：一致 - false：不一致
    *
    * @return bool|null
    */
    public function getContentCompareResult()
    {
        return $this->container['contentCompareResult'];
    }

    /**
    * Sets contentCompareResult
    *
    * @param bool|null $contentCompareResult 内容对比结果。 - true：一致 - false：不一致
    *
    * @return $this
    */
    public function setContentCompareResult($contentCompareResult)
    {
        $this->container['contentCompareResult'] = $contentCompareResult;
        return $this;
    }

    /**
    * Gets message
    *  附加信息。
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message 附加信息。
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
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

