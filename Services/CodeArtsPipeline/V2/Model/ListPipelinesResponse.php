<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListPipelinesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListPipelinesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * offset  **参数解释**： 起始偏移。 **取值范围**： 不涉及。
    * limit  **参数解释**： 查询大小。 **取值范围**： 不涉及。
    * total  **参数解释**： 记录总数。 **取值范围**： 不涉及。
    * currentSystemTime  **参数解释**： 当前系统时间。 **取值范围**： 不涉及。
    * highestConfidentiality  highestConfidentiality
    * numberOfHiddenData  **参数解释**： 隐藏数据数量。 **约束限制**： 非涉密场景无该字段。 **取值范围**： 不涉及。
    * pipelines  **参数解释**： 流水线。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'offset' => 'int',
            'limit' => 'int',
            'total' => 'int',
            'currentSystemTime' => 'int',
            'highestConfidentiality' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ListPipelinesPageHighestConfidentiality',
            'numberOfHiddenData' => 'int',
            'pipelines' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ListPipelinesPagePipelines[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * offset  **参数解释**： 起始偏移。 **取值范围**： 不涉及。
    * limit  **参数解释**： 查询大小。 **取值范围**： 不涉及。
    * total  **参数解释**： 记录总数。 **取值范围**： 不涉及。
    * currentSystemTime  **参数解释**： 当前系统时间。 **取值范围**： 不涉及。
    * highestConfidentiality  highestConfidentiality
    * numberOfHiddenData  **参数解释**： 隐藏数据数量。 **约束限制**： 非涉密场景无该字段。 **取值范围**： 不涉及。
    * pipelines  **参数解释**： 流水线。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'offset' => 'int32',
        'limit' => 'int32',
        'total' => 'int32',
        'currentSystemTime' => 'int64',
        'highestConfidentiality' => null,
        'numberOfHiddenData' => 'int64',
        'pipelines' => null
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
    * offset  **参数解释**： 起始偏移。 **取值范围**： 不涉及。
    * limit  **参数解释**： 查询大小。 **取值范围**： 不涉及。
    * total  **参数解释**： 记录总数。 **取值范围**： 不涉及。
    * currentSystemTime  **参数解释**： 当前系统时间。 **取值范围**： 不涉及。
    * highestConfidentiality  highestConfidentiality
    * numberOfHiddenData  **参数解释**： 隐藏数据数量。 **约束限制**： 非涉密场景无该字段。 **取值范围**： 不涉及。
    * pipelines  **参数解释**： 流水线。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'offset' => 'offset',
            'limit' => 'limit',
            'total' => 'total',
            'currentSystemTime' => 'current_system_time',
            'highestConfidentiality' => 'highest_confidentiality',
            'numberOfHiddenData' => 'number_of_hidden_data',
            'pipelines' => 'pipelines'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * offset  **参数解释**： 起始偏移。 **取值范围**： 不涉及。
    * limit  **参数解释**： 查询大小。 **取值范围**： 不涉及。
    * total  **参数解释**： 记录总数。 **取值范围**： 不涉及。
    * currentSystemTime  **参数解释**： 当前系统时间。 **取值范围**： 不涉及。
    * highestConfidentiality  highestConfidentiality
    * numberOfHiddenData  **参数解释**： 隐藏数据数量。 **约束限制**： 非涉密场景无该字段。 **取值范围**： 不涉及。
    * pipelines  **参数解释**： 流水线。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'total' => 'setTotal',
            'currentSystemTime' => 'setCurrentSystemTime',
            'highestConfidentiality' => 'setHighestConfidentiality',
            'numberOfHiddenData' => 'setNumberOfHiddenData',
            'pipelines' => 'setPipelines'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * offset  **参数解释**： 起始偏移。 **取值范围**： 不涉及。
    * limit  **参数解释**： 查询大小。 **取值范围**： 不涉及。
    * total  **参数解释**： 记录总数。 **取值范围**： 不涉及。
    * currentSystemTime  **参数解释**： 当前系统时间。 **取值范围**： 不涉及。
    * highestConfidentiality  highestConfidentiality
    * numberOfHiddenData  **参数解释**： 隐藏数据数量。 **约束限制**： 非涉密场景无该字段。 **取值范围**： 不涉及。
    * pipelines  **参数解释**： 流水线。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'total' => 'getTotal',
            'currentSystemTime' => 'getCurrentSystemTime',
            'highestConfidentiality' => 'getHighestConfidentiality',
            'numberOfHiddenData' => 'getNumberOfHiddenData',
            'pipelines' => 'getPipelines'
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
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['currentSystemTime'] = isset($data['currentSystemTime']) ? $data['currentSystemTime'] : null;
        $this->container['highestConfidentiality'] = isset($data['highestConfidentiality']) ? $data['highestConfidentiality'] : null;
        $this->container['numberOfHiddenData'] = isset($data['numberOfHiddenData']) ? $data['numberOfHiddenData'] : null;
        $this->container['pipelines'] = isset($data['pipelines']) ? $data['pipelines'] : null;
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
    * Gets offset
    *  **参数解释**： 起始偏移。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset **参数解释**： 起始偏移。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释**： 查询大小。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit **参数解释**： 查询大小。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets total
    *  **参数解释**： 记录总数。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param int|null $total **参数解释**： 记录总数。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets currentSystemTime
    *  **参数解释**： 当前系统时间。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getCurrentSystemTime()
    {
        return $this->container['currentSystemTime'];
    }

    /**
    * Sets currentSystemTime
    *
    * @param int|null $currentSystemTime **参数解释**： 当前系统时间。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCurrentSystemTime($currentSystemTime)
    {
        $this->container['currentSystemTime'] = $currentSystemTime;
        return $this;
    }

    /**
    * Gets highestConfidentiality
    *  highestConfidentiality
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ListPipelinesPageHighestConfidentiality|null
    */
    public function getHighestConfidentiality()
    {
        return $this->container['highestConfidentiality'];
    }

    /**
    * Sets highestConfidentiality
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ListPipelinesPageHighestConfidentiality|null $highestConfidentiality highestConfidentiality
    *
    * @return $this
    */
    public function setHighestConfidentiality($highestConfidentiality)
    {
        $this->container['highestConfidentiality'] = $highestConfidentiality;
        return $this;
    }

    /**
    * Gets numberOfHiddenData
    *  **参数解释**： 隐藏数据数量。 **约束限制**： 非涉密场景无该字段。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getNumberOfHiddenData()
    {
        return $this->container['numberOfHiddenData'];
    }

    /**
    * Sets numberOfHiddenData
    *
    * @param int|null $numberOfHiddenData **参数解释**： 隐藏数据数量。 **约束限制**： 非涉密场景无该字段。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setNumberOfHiddenData($numberOfHiddenData)
    {
        $this->container['numberOfHiddenData'] = $numberOfHiddenData;
        return $this;
    }

    /**
    * Gets pipelines
    *  **参数解释**： 流水线。 **取值范围**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ListPipelinesPagePipelines[]|null
    */
    public function getPipelines()
    {
        return $this->container['pipelines'];
    }

    /**
    * Sets pipelines
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\ListPipelinesPagePipelines[]|null $pipelines **参数解释**： 流水线。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setPipelines($pipelines)
    {
        $this->container['pipelines'] = $pipelines;
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

