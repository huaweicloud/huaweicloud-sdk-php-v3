<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LTSIndexConfigInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LTSIndexConfigInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fullTextIndex  fullTextIndex
    * fields  字段索引配置
    * sqlAnalysisEnable  是否开启可视化
    * logStreamId  日志流id
    * fastAnalysisSampleCount  **参数解释：** 快速分析采样日志条数。 **约束限制：** 不涉及。 **取值范围：** 最小值：100000 最大值：10000000 **默认取值：** 100000
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fullTextIndex' => '\HuaweiCloud\SDK\Lts\V2\Model\LTSFullTextIndexInfo',
            'fields' => '\HuaweiCloud\SDK\Lts\V2\Model\LTSFieldsInfo[]',
            'sqlAnalysisEnable' => 'bool',
            'logStreamId' => 'string',
            'fastAnalysisSampleCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fullTextIndex  fullTextIndex
    * fields  字段索引配置
    * sqlAnalysisEnable  是否开启可视化
    * logStreamId  日志流id
    * fastAnalysisSampleCount  **参数解释：** 快速分析采样日志条数。 **约束限制：** 不涉及。 **取值范围：** 最小值：100000 最大值：10000000 **默认取值：** 100000
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fullTextIndex' => null,
        'fields' => null,
        'sqlAnalysisEnable' => null,
        'logStreamId' => null,
        'fastAnalysisSampleCount' => 'int64'
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
    * fullTextIndex  fullTextIndex
    * fields  字段索引配置
    * sqlAnalysisEnable  是否开启可视化
    * logStreamId  日志流id
    * fastAnalysisSampleCount  **参数解释：** 快速分析采样日志条数。 **约束限制：** 不涉及。 **取值范围：** 最小值：100000 最大值：10000000 **默认取值：** 100000
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fullTextIndex' => 'fullTextIndex',
            'fields' => 'fields',
            'sqlAnalysisEnable' => 'sqlAnalysisEnable',
            'logStreamId' => 'logStreamId',
            'fastAnalysisSampleCount' => 'fastAnalysisSampleCount'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fullTextIndex  fullTextIndex
    * fields  字段索引配置
    * sqlAnalysisEnable  是否开启可视化
    * logStreamId  日志流id
    * fastAnalysisSampleCount  **参数解释：** 快速分析采样日志条数。 **约束限制：** 不涉及。 **取值范围：** 最小值：100000 最大值：10000000 **默认取值：** 100000
    *
    * @var string[]
    */
    protected static $setters = [
            'fullTextIndex' => 'setFullTextIndex',
            'fields' => 'setFields',
            'sqlAnalysisEnable' => 'setSqlAnalysisEnable',
            'logStreamId' => 'setLogStreamId',
            'fastAnalysisSampleCount' => 'setFastAnalysisSampleCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fullTextIndex  fullTextIndex
    * fields  字段索引配置
    * sqlAnalysisEnable  是否开启可视化
    * logStreamId  日志流id
    * fastAnalysisSampleCount  **参数解释：** 快速分析采样日志条数。 **约束限制：** 不涉及。 **取值范围：** 最小值：100000 最大值：10000000 **默认取值：** 100000
    *
    * @var string[]
    */
    protected static $getters = [
            'fullTextIndex' => 'getFullTextIndex',
            'fields' => 'getFields',
            'sqlAnalysisEnable' => 'getSqlAnalysisEnable',
            'logStreamId' => 'getLogStreamId',
            'fastAnalysisSampleCount' => 'getFastAnalysisSampleCount'
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
        $this->container['fullTextIndex'] = isset($data['fullTextIndex']) ? $data['fullTextIndex'] : null;
        $this->container['fields'] = isset($data['fields']) ? $data['fields'] : null;
        $this->container['sqlAnalysisEnable'] = isset($data['sqlAnalysisEnable']) ? $data['sqlAnalysisEnable'] : null;
        $this->container['logStreamId'] = isset($data['logStreamId']) ? $data['logStreamId'] : null;
        $this->container['fastAnalysisSampleCount'] = isset($data['fastAnalysisSampleCount']) ? $data['fastAnalysisSampleCount'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['fullTextIndex'] === null) {
            $invalidProperties[] = "'fullTextIndex' can't be null";
        }
        if ($this->container['logStreamId'] === null) {
            $invalidProperties[] = "'logStreamId' can't be null";
        }
            if ((mb_strlen($this->container['logStreamId']) > 36)) {
                $invalidProperties[] = "invalid value for 'logStreamId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['logStreamId']) < 36)) {
                $invalidProperties[] = "invalid value for 'logStreamId', the character length must be bigger than or equal to 36.";
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
    * Gets fullTextIndex
    *  fullTextIndex
    *
    * @return \HuaweiCloud\SDK\Lts\V2\Model\LTSFullTextIndexInfo
    */
    public function getFullTextIndex()
    {
        return $this->container['fullTextIndex'];
    }

    /**
    * Sets fullTextIndex
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\LTSFullTextIndexInfo $fullTextIndex fullTextIndex
    *
    * @return $this
    */
    public function setFullTextIndex($fullTextIndex)
    {
        $this->container['fullTextIndex'] = $fullTextIndex;
        return $this;
    }

    /**
    * Gets fields
    *  字段索引配置
    *
    * @return \HuaweiCloud\SDK\Lts\V2\Model\LTSFieldsInfo[]|null
    */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
    * Sets fields
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\LTSFieldsInfo[]|null $fields 字段索引配置
    *
    * @return $this
    */
    public function setFields($fields)
    {
        $this->container['fields'] = $fields;
        return $this;
    }

    /**
    * Gets sqlAnalysisEnable
    *  是否开启可视化
    *
    * @return bool|null
    */
    public function getSqlAnalysisEnable()
    {
        return $this->container['sqlAnalysisEnable'];
    }

    /**
    * Sets sqlAnalysisEnable
    *
    * @param bool|null $sqlAnalysisEnable 是否开启可视化
    *
    * @return $this
    */
    public function setSqlAnalysisEnable($sqlAnalysisEnable)
    {
        $this->container['sqlAnalysisEnable'] = $sqlAnalysisEnable;
        return $this;
    }

    /**
    * Gets logStreamId
    *  日志流id
    *
    * @return string
    */
    public function getLogStreamId()
    {
        return $this->container['logStreamId'];
    }

    /**
    * Sets logStreamId
    *
    * @param string $logStreamId 日志流id
    *
    * @return $this
    */
    public function setLogStreamId($logStreamId)
    {
        $this->container['logStreamId'] = $logStreamId;
        return $this;
    }

    /**
    * Gets fastAnalysisSampleCount
    *  **参数解释：** 快速分析采样日志条数。 **约束限制：** 不涉及。 **取值范围：** 最小值：100000 最大值：10000000 **默认取值：** 100000
    *
    * @return int|null
    */
    public function getFastAnalysisSampleCount()
    {
        return $this->container['fastAnalysisSampleCount'];
    }

    /**
    * Sets fastAnalysisSampleCount
    *
    * @param int|null $fastAnalysisSampleCount **参数解释：** 快速分析采样日志条数。 **约束限制：** 不涉及。 **取值范围：** 最小值：100000 最大值：10000000 **默认取值：** 100000
    *
    * @return $this
    */
    public function setFastAnalysisSampleCount($fastAnalysisSampleCount)
    {
        $this->container['fastAnalysisSampleCount'] = $fastAnalysisSampleCount;
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

