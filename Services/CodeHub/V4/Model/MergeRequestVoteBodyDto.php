<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MergeRequestVoteBodyDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MergeRequestVoteBodyDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * score  **参数解释：** 分数。
    * action  **参数解释：** 操作类型(同一分数再次调用会删除打分, 传vote则不会删除)。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'score' => 'int',
            'action' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * score  **参数解释：** 分数。
    * action  **参数解释：** 操作类型(同一分数再次调用会删除打分, 传vote则不会删除)。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'score' => 'int32',
        'action' => null
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
    * score  **参数解释：** 分数。
    * action  **参数解释：** 操作类型(同一分数再次调用会删除打分, 传vote则不会删除)。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'score' => 'score',
            'action' => 'action'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * score  **参数解释：** 分数。
    * action  **参数解释：** 操作类型(同一分数再次调用会删除打分, 传vote则不会删除)。
    *
    * @var string[]
    */
    protected static $setters = [
            'score' => 'setScore',
            'action' => 'setAction'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * score  **参数解释：** 分数。
    * action  **参数解释：** 操作类型(同一分数再次调用会删除打分, 传vote则不会删除)。
    *
    * @var string[]
    */
    protected static $getters = [
            'score' => 'getScore',
            'action' => 'getAction'
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
    const ACTION_VOTE = 'vote';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_VOTE,
        ];
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
        $this->container['score'] = isset($data['score']) ? $data['score'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['score']) && ($this->container['score'] > 2)) {
                $invalidProperties[] = "invalid value for 'score', must be smaller than or equal to 2.";
            }
            if (!is_null($this->container['score']) && ($this->container['score'] < -2)) {
                $invalidProperties[] = "invalid value for 'score', must be bigger than or equal to -2.";
            }
            $allowedValues = $this->getActionAllowableValues();
                if (!is_null($this->container['action']) && !in_array($this->container['action'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'action', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets action
    *  **参数解释：** 操作类型(同一分数再次调用会删除打分, 传vote则不会删除)。
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
    * @param string|null $action **参数解释：** 操作类型(同一分数再次调用会删除打分, 传vote则不会删除)。
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
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

