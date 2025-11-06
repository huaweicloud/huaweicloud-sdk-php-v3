<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateMergeRequestNoteDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateMergeRequestNoteDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * body  **参数解释：** 评论内容。
    * severity  **参数解释：** 检视意见严重程度。
    * assigneeId  **参数解释：** 检视意见指派人id。
    * reviewCategories  **参数解释：** 检视意见分类。
    * reviewModules  **参数解释：** 检视意见模块。
    * proposerId  **参数解释：** 检视人。
    * lineTypes  **参数解释：** 检视意见所在行类型(代码行评论需要)。
    * position  position
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'body' => 'string',
            'severity' => 'string',
            'assigneeId' => 'string',
            'reviewCategories' => 'string',
            'reviewModules' => 'string',
            'proposerId' => 'string',
            'lineTypes' => 'string',
            'position' => '\HuaweiCloud\SDK\CodeArtsRepo\V4\Model\PositionDto'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * body  **参数解释：** 评论内容。
    * severity  **参数解释：** 检视意见严重程度。
    * assigneeId  **参数解释：** 检视意见指派人id。
    * reviewCategories  **参数解释：** 检视意见分类。
    * reviewModules  **参数解释：** 检视意见模块。
    * proposerId  **参数解释：** 检视人。
    * lineTypes  **参数解释：** 检视意见所在行类型(代码行评论需要)。
    * position  position
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'body' => null,
        'severity' => null,
        'assigneeId' => null,
        'reviewCategories' => null,
        'reviewModules' => null,
        'proposerId' => null,
        'lineTypes' => null,
        'position' => null
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
    * body  **参数解释：** 评论内容。
    * severity  **参数解释：** 检视意见严重程度。
    * assigneeId  **参数解释：** 检视意见指派人id。
    * reviewCategories  **参数解释：** 检视意见分类。
    * reviewModules  **参数解释：** 检视意见模块。
    * proposerId  **参数解释：** 检视人。
    * lineTypes  **参数解释：** 检视意见所在行类型(代码行评论需要)。
    * position  position
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'body' => 'body',
            'severity' => 'severity',
            'assigneeId' => 'assignee_id',
            'reviewCategories' => 'review_categories',
            'reviewModules' => 'review_modules',
            'proposerId' => 'proposer_id',
            'lineTypes' => 'line_types',
            'position' => 'position'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * body  **参数解释：** 评论内容。
    * severity  **参数解释：** 检视意见严重程度。
    * assigneeId  **参数解释：** 检视意见指派人id。
    * reviewCategories  **参数解释：** 检视意见分类。
    * reviewModules  **参数解释：** 检视意见模块。
    * proposerId  **参数解释：** 检视人。
    * lineTypes  **参数解释：** 检视意见所在行类型(代码行评论需要)。
    * position  position
    *
    * @var string[]
    */
    protected static $setters = [
            'body' => 'setBody',
            'severity' => 'setSeverity',
            'assigneeId' => 'setAssigneeId',
            'reviewCategories' => 'setReviewCategories',
            'reviewModules' => 'setReviewModules',
            'proposerId' => 'setProposerId',
            'lineTypes' => 'setLineTypes',
            'position' => 'setPosition'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * body  **参数解释：** 评论内容。
    * severity  **参数解释：** 检视意见严重程度。
    * assigneeId  **参数解释：** 检视意见指派人id。
    * reviewCategories  **参数解释：** 检视意见分类。
    * reviewModules  **参数解释：** 检视意见模块。
    * proposerId  **参数解释：** 检视人。
    * lineTypes  **参数解释：** 检视意见所在行类型(代码行评论需要)。
    * position  position
    *
    * @var string[]
    */
    protected static $getters = [
            'body' => 'getBody',
            'severity' => 'getSeverity',
            'assigneeId' => 'getAssigneeId',
            'reviewCategories' => 'getReviewCategories',
            'reviewModules' => 'getReviewModules',
            'proposerId' => 'getProposerId',
            'lineTypes' => 'getLineTypes',
            'position' => 'getPosition'
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
    const SEVERITY_SUGGESTION = 'suggestion';
    const SEVERITY_MINOR = 'minor';
    const SEVERITY_MAJOR = 'major';
    const SEVERITY_FATAL = 'fatal';
    const LINE_TYPES__NEW = 'new';
    const LINE_TYPES_OLD = 'old';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSeverityAllowableValues()
    {
        return [
            self::SEVERITY_SUGGESTION,
            self::SEVERITY_MINOR,
            self::SEVERITY_MAJOR,
            self::SEVERITY_FATAL,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getLineTypesAllowableValues()
    {
        return [
            self::LINE_TYPES__NEW,
            self::LINE_TYPES_OLD,
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
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['assigneeId'] = isset($data['assigneeId']) ? $data['assigneeId'] : null;
        $this->container['reviewCategories'] = isset($data['reviewCategories']) ? $data['reviewCategories'] : null;
        $this->container['reviewModules'] = isset($data['reviewModules']) ? $data['reviewModules'] : null;
        $this->container['proposerId'] = isset($data['proposerId']) ? $data['proposerId'] : null;
        $this->container['lineTypes'] = isset($data['lineTypes']) ? $data['lineTypes'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['body']) && (mb_strlen($this->container['body']) > 8000)) {
                $invalidProperties[] = "invalid value for 'body', the character length must be smaller than or equal to 8000.";
            }
            if (!is_null($this->container['body']) && (mb_strlen($this->container['body']) < 1)) {
                $invalidProperties[] = "invalid value for 'body', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getSeverityAllowableValues();
                if (!is_null($this->container['severity']) && !in_array($this->container['severity'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'severity', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getLineTypesAllowableValues();
                if (!is_null($this->container['lineTypes']) && !in_array($this->container['lineTypes'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'lineTypes', must be one of '%s'",
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
    * Gets body
    *  **参数解释：** 评论内容。
    *
    * @return string|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param string|null $body **参数解释：** 评论内容。
    *
    * @return $this
    */
    public function setBody($body)
    {
        $this->container['body'] = $body;
        return $this;
    }

    /**
    * Gets severity
    *  **参数解释：** 检视意见严重程度。
    *
    * @return string|null
    */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
    * Sets severity
    *
    * @param string|null $severity **参数解释：** 检视意见严重程度。
    *
    * @return $this
    */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;
        return $this;
    }

    /**
    * Gets assigneeId
    *  **参数解释：** 检视意见指派人id。
    *
    * @return string|null
    */
    public function getAssigneeId()
    {
        return $this->container['assigneeId'];
    }

    /**
    * Sets assigneeId
    *
    * @param string|null $assigneeId **参数解释：** 检视意见指派人id。
    *
    * @return $this
    */
    public function setAssigneeId($assigneeId)
    {
        $this->container['assigneeId'] = $assigneeId;
        return $this;
    }

    /**
    * Gets reviewCategories
    *  **参数解释：** 检视意见分类。
    *
    * @return string|null
    */
    public function getReviewCategories()
    {
        return $this->container['reviewCategories'];
    }

    /**
    * Sets reviewCategories
    *
    * @param string|null $reviewCategories **参数解释：** 检视意见分类。
    *
    * @return $this
    */
    public function setReviewCategories($reviewCategories)
    {
        $this->container['reviewCategories'] = $reviewCategories;
        return $this;
    }

    /**
    * Gets reviewModules
    *  **参数解释：** 检视意见模块。
    *
    * @return string|null
    */
    public function getReviewModules()
    {
        return $this->container['reviewModules'];
    }

    /**
    * Sets reviewModules
    *
    * @param string|null $reviewModules **参数解释：** 检视意见模块。
    *
    * @return $this
    */
    public function setReviewModules($reviewModules)
    {
        $this->container['reviewModules'] = $reviewModules;
        return $this;
    }

    /**
    * Gets proposerId
    *  **参数解释：** 检视人。
    *
    * @return string|null
    */
    public function getProposerId()
    {
        return $this->container['proposerId'];
    }

    /**
    * Sets proposerId
    *
    * @param string|null $proposerId **参数解释：** 检视人。
    *
    * @return $this
    */
    public function setProposerId($proposerId)
    {
        $this->container['proposerId'] = $proposerId;
        return $this;
    }

    /**
    * Gets lineTypes
    *  **参数解释：** 检视意见所在行类型(代码行评论需要)。
    *
    * @return string|null
    */
    public function getLineTypes()
    {
        return $this->container['lineTypes'];
    }

    /**
    * Sets lineTypes
    *
    * @param string|null $lineTypes **参数解释：** 检视意见所在行类型(代码行评论需要)。
    *
    * @return $this
    */
    public function setLineTypes($lineTypes)
    {
        $this->container['lineTypes'] = $lineTypes;
        return $this;
    }

    /**
    * Gets position
    *  position
    *
    * @return \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\PositionDto|null
    */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
    * Sets position
    *
    * @param \HuaweiCloud\SDK\CodeArtsRepo\V4\Model\PositionDto|null $position position
    *
    * @return $this
    */
    public function setPosition($position)
    {
        $this->container['position'] = $position;
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

