<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowAverageEvaluationResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowAverageEvaluationResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * mergeRequestId  **参数解释：** 合并请求id。
    * averageEvaluationLevel  **参数解释：** 评价平均分。
    * evaluations  **参数解释：** 单人评价详情。
    * customEvaluations  **参数解释：** 自定义评价维度详情。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'mergeRequestId' => 'int',
            'averageEvaluationLevel' => 'double',
            'evaluations' => '\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\MergeRequestBaseEvaluationDto[]',
            'customEvaluations' => '\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\MergeRequestCustomAverageEvaluationDto[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * mergeRequestId  **参数解释：** 合并请求id。
    * averageEvaluationLevel  **参数解释：** 评价平均分。
    * evaluations  **参数解释：** 单人评价详情。
    * customEvaluations  **参数解释：** 自定义评价维度详情。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'mergeRequestId' => 'int32',
        'averageEvaluationLevel' => 'double',
        'evaluations' => null,
        'customEvaluations' => null
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
    * mergeRequestId  **参数解释：** 合并请求id。
    * averageEvaluationLevel  **参数解释：** 评价平均分。
    * evaluations  **参数解释：** 单人评价详情。
    * customEvaluations  **参数解释：** 自定义评价维度详情。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'mergeRequestId' => 'merge_request_id',
            'averageEvaluationLevel' => 'average_evaluation_level',
            'evaluations' => 'evaluations',
            'customEvaluations' => 'custom_evaluations'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * mergeRequestId  **参数解释：** 合并请求id。
    * averageEvaluationLevel  **参数解释：** 评价平均分。
    * evaluations  **参数解释：** 单人评价详情。
    * customEvaluations  **参数解释：** 自定义评价维度详情。
    *
    * @var string[]
    */
    protected static $setters = [
            'mergeRequestId' => 'setMergeRequestId',
            'averageEvaluationLevel' => 'setAverageEvaluationLevel',
            'evaluations' => 'setEvaluations',
            'customEvaluations' => 'setCustomEvaluations'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * mergeRequestId  **参数解释：** 合并请求id。
    * averageEvaluationLevel  **参数解释：** 评价平均分。
    * evaluations  **参数解释：** 单人评价详情。
    * customEvaluations  **参数解释：** 自定义评价维度详情。
    *
    * @var string[]
    */
    protected static $getters = [
            'mergeRequestId' => 'getMergeRequestId',
            'averageEvaluationLevel' => 'getAverageEvaluationLevel',
            'evaluations' => 'getEvaluations',
            'customEvaluations' => 'getCustomEvaluations'
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
        $this->container['mergeRequestId'] = isset($data['mergeRequestId']) ? $data['mergeRequestId'] : null;
        $this->container['averageEvaluationLevel'] = isset($data['averageEvaluationLevel']) ? $data['averageEvaluationLevel'] : null;
        $this->container['evaluations'] = isset($data['evaluations']) ? $data['evaluations'] : null;
        $this->container['customEvaluations'] = isset($data['customEvaluations']) ? $data['customEvaluations'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['mergeRequestId']) && ($this->container['mergeRequestId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'mergeRequestId', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['mergeRequestId']) && ($this->container['mergeRequestId'] < 1)) {
                $invalidProperties[] = "invalid value for 'mergeRequestId', must be bigger than or equal to 1.";
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
    * Gets mergeRequestId
    *  **参数解释：** 合并请求id。
    *
    * @return int|null
    */
    public function getMergeRequestId()
    {
        return $this->container['mergeRequestId'];
    }

    /**
    * Sets mergeRequestId
    *
    * @param int|null $mergeRequestId **参数解释：** 合并请求id。
    *
    * @return $this
    */
    public function setMergeRequestId($mergeRequestId)
    {
        $this->container['mergeRequestId'] = $mergeRequestId;
        return $this;
    }

    /**
    * Gets averageEvaluationLevel
    *  **参数解释：** 评价平均分。
    *
    * @return double|null
    */
    public function getAverageEvaluationLevel()
    {
        return $this->container['averageEvaluationLevel'];
    }

    /**
    * Sets averageEvaluationLevel
    *
    * @param double|null $averageEvaluationLevel **参数解释：** 评价平均分。
    *
    * @return $this
    */
    public function setAverageEvaluationLevel($averageEvaluationLevel)
    {
        $this->container['averageEvaluationLevel'] = $averageEvaluationLevel;
        return $this;
    }

    /**
    * Gets evaluations
    *  **参数解释：** 单人评价详情。
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\MergeRequestBaseEvaluationDto[]|null
    */
    public function getEvaluations()
    {
        return $this->container['evaluations'];
    }

    /**
    * Sets evaluations
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\MergeRequestBaseEvaluationDto[]|null $evaluations **参数解释：** 单人评价详情。
    *
    * @return $this
    */
    public function setEvaluations($evaluations)
    {
        $this->container['evaluations'] = $evaluations;
        return $this;
    }

    /**
    * Gets customEvaluations
    *  **参数解释：** 自定义评价维度详情。
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\MergeRequestCustomAverageEvaluationDto[]|null
    */
    public function getCustomEvaluations()
    {
        return $this->container['customEvaluations'];
    }

    /**
    * Sets customEvaluations
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\MergeRequestCustomAverageEvaluationDto[]|null $customEvaluations **参数解释：** 自定义评价维度详情。
    *
    * @return $this
    */
    public function setCustomEvaluations($customEvaluations)
    {
        $this->container['customEvaluations'] = $customEvaluations;
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

