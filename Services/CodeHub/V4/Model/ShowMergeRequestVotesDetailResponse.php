<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowMergeRequestVotesDetailResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowMergeRequestVotesDetailResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * scores  **参数解释：** 多人合计总分数。
    * mergeRequestId  **参数解释：** 合并请求id。
    * mergeRequestCreator  **参数解释：** 合并请求作者名。
    * votes  **参数解释：** 个人打分详情。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'scores' => 'int',
            'mergeRequestId' => 'int',
            'mergeRequestCreator' => 'string',
            'votes' => '\HuaweiCloud\SDK\CodeHub\V4\Model\MergeRequestVotesDto[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * scores  **参数解释：** 多人合计总分数。
    * mergeRequestId  **参数解释：** 合并请求id。
    * mergeRequestCreator  **参数解释：** 合并请求作者名。
    * votes  **参数解释：** 个人打分详情。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'scores' => 'int32',
        'mergeRequestId' => 'int32',
        'mergeRequestCreator' => null,
        'votes' => null
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
    * scores  **参数解释：** 多人合计总分数。
    * mergeRequestId  **参数解释：** 合并请求id。
    * mergeRequestCreator  **参数解释：** 合并请求作者名。
    * votes  **参数解释：** 个人打分详情。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'scores' => 'scores',
            'mergeRequestId' => 'merge_request_id',
            'mergeRequestCreator' => 'merge_request_creator',
            'votes' => 'votes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * scores  **参数解释：** 多人合计总分数。
    * mergeRequestId  **参数解释：** 合并请求id。
    * mergeRequestCreator  **参数解释：** 合并请求作者名。
    * votes  **参数解释：** 个人打分详情。
    *
    * @var string[]
    */
    protected static $setters = [
            'scores' => 'setScores',
            'mergeRequestId' => 'setMergeRequestId',
            'mergeRequestCreator' => 'setMergeRequestCreator',
            'votes' => 'setVotes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * scores  **参数解释：** 多人合计总分数。
    * mergeRequestId  **参数解释：** 合并请求id。
    * mergeRequestCreator  **参数解释：** 合并请求作者名。
    * votes  **参数解释：** 个人打分详情。
    *
    * @var string[]
    */
    protected static $getters = [
            'scores' => 'getScores',
            'mergeRequestId' => 'getMergeRequestId',
            'mergeRequestCreator' => 'getMergeRequestCreator',
            'votes' => 'getVotes'
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
        $this->container['scores'] = isset($data['scores']) ? $data['scores'] : null;
        $this->container['mergeRequestId'] = isset($data['mergeRequestId']) ? $data['mergeRequestId'] : null;
        $this->container['mergeRequestCreator'] = isset($data['mergeRequestCreator']) ? $data['mergeRequestCreator'] : null;
        $this->container['votes'] = isset($data['votes']) ? $data['votes'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['scores']) && ($this->container['scores'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'scores', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['scores']) && ($this->container['scores'] < -2147483648)) {
                $invalidProperties[] = "invalid value for 'scores', must be bigger than or equal to -2147483648.";
            }
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
    * Gets scores
    *  **参数解释：** 多人合计总分数。
    *
    * @return int|null
    */
    public function getScores()
    {
        return $this->container['scores'];
    }

    /**
    * Sets scores
    *
    * @param int|null $scores **参数解释：** 多人合计总分数。
    *
    * @return $this
    */
    public function setScores($scores)
    {
        $this->container['scores'] = $scores;
        return $this;
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
    * Gets mergeRequestCreator
    *  **参数解释：** 合并请求作者名。
    *
    * @return string|null
    */
    public function getMergeRequestCreator()
    {
        return $this->container['mergeRequestCreator'];
    }

    /**
    * Sets mergeRequestCreator
    *
    * @param string|null $mergeRequestCreator **参数解释：** 合并请求作者名。
    *
    * @return $this
    */
    public function setMergeRequestCreator($mergeRequestCreator)
    {
        $this->container['mergeRequestCreator'] = $mergeRequestCreator;
        return $this;
    }

    /**
    * Gets votes
    *  **参数解释：** 个人打分详情。
    *
    * @return \HuaweiCloud\SDK\CodeHub\V4\Model\MergeRequestVotesDto[]|null
    */
    public function getVotes()
    {
        return $this->container['votes'];
    }

    /**
    * Sets votes
    *
    * @param \HuaweiCloud\SDK\CodeHub\V4\Model\MergeRequestVotesDto[]|null $votes **参数解释：** 个人打分详情。
    *
    * @return $this
    */
    public function setVotes($votes)
    {
        $this->container['votes'] = $votes;
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

