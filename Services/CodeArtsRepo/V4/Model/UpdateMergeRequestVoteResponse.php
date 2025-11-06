<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateMergeRequestVoteResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateMergeRequestVoteResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 打分记录的id。
    * mergeRequestId  **参数解释：** 合并请求id。
    * score  **参数解释：** 分数。
    * author  author
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'mergeRequestId' => 'int',
            'score' => 'int',
            'author' => '\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UserSafeDto'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 打分记录的id。
    * mergeRequestId  **参数解释：** 合并请求id。
    * score  **参数解释：** 分数。
    * author  author
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'mergeRequestId' => 'int32',
        'score' => 'int32',
        'author' => null
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
    * id  **参数解释：** 打分记录的id。
    * mergeRequestId  **参数解释：** 合并请求id。
    * score  **参数解释：** 分数。
    * author  author
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'mergeRequestId' => 'merge_request_id',
            'score' => 'score',
            'author' => 'author'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 打分记录的id。
    * mergeRequestId  **参数解释：** 合并请求id。
    * score  **参数解释：** 分数。
    * author  author
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'mergeRequestId' => 'setMergeRequestId',
            'score' => 'setScore',
            'author' => 'setAuthor'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 打分记录的id。
    * mergeRequestId  **参数解释：** 合并请求id。
    * score  **参数解释：** 分数。
    * author  author
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'mergeRequestId' => 'getMergeRequestId',
            'score' => 'getScore',
            'author' => 'getAuthor'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['mergeRequestId'] = isset($data['mergeRequestId']) ? $data['mergeRequestId'] : null;
        $this->container['score'] = isset($data['score']) ? $data['score'] : null;
        $this->container['author'] = isset($data['author']) ? $data['author'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && ($this->container['id'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'id', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['id']) && ($this->container['id'] < 1)) {
                $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['mergeRequestId']) && ($this->container['mergeRequestId'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'mergeRequestId', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['mergeRequestId']) && ($this->container['mergeRequestId'] < 1)) {
                $invalidProperties[] = "invalid value for 'mergeRequestId', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['score']) && ($this->container['score'] > 2)) {
                $invalidProperties[] = "invalid value for 'score', must be smaller than or equal to 2.";
            }
            if (!is_null($this->container['score']) && ($this->container['score'] < -2)) {
                $invalidProperties[] = "invalid value for 'score', must be bigger than or equal to -2.";
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
    * Gets id
    *  **参数解释：** 打分记录的id。
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id **参数解释：** 打分记录的id。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
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
    * Gets score
    *  **参数解释：** 分数。
    *
    * @return int|null
    */
    public function getScore()
    {
        return $this->container['score'];
    }

    /**
    * Sets score
    *
    * @param int|null $score **参数解释：** 分数。
    *
    * @return $this
    */
    public function setScore($score)
    {
        $this->container['score'] = $score;
        return $this;
    }

    /**
    * Gets author
    *  author
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UserSafeDto|null
    */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /**
    * Sets author
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\UserSafeDto|null $author author
    *
    * @return $this
    */
    public function setAuthor($author)
    {
        $this->container['author'] = $author;
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

