<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateMergeRequestNoteDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateMergeRequestNoteDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * body  **参数解释：** 评论内容。
    * severity  **参数解释：** 检视意见严重程度。
    * assigneeId  **参数解释：** 检视意见指派人id。
    * reviewCategories  **参数解释：** 检视意见分类。
    * reviewModules  **参数解释：** 检视意见模块。
    * proposerId  **参数解释：** 检视意见检视人id。
    * resolved  **参数解释：** 解决或取消解决检视意见(使用时需仅传此参数)。
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
            'resolved' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * body  **参数解释：** 评论内容。
    * severity  **参数解释：** 检视意见严重程度。
    * assigneeId  **参数解释：** 检视意见指派人id。
    * reviewCategories  **参数解释：** 检视意见分类。
    * reviewModules  **参数解释：** 检视意见模块。
    * proposerId  **参数解释：** 检视意见检视人id。
    * resolved  **参数解释：** 解决或取消解决检视意见(使用时需仅传此参数)。
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
        'resolved' => null
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
    * proposerId  **参数解释：** 检视意见检视人id。
    * resolved  **参数解释：** 解决或取消解决检视意见(使用时需仅传此参数)。
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
            'resolved' => 'resolved'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * body  **参数解释：** 评论内容。
    * severity  **参数解释：** 检视意见严重程度。
    * assigneeId  **参数解释：** 检视意见指派人id。
    * reviewCategories  **参数解释：** 检视意见分类。
    * reviewModules  **参数解释：** 检视意见模块。
    * proposerId  **参数解释：** 检视意见检视人id。
    * resolved  **参数解释：** 解决或取消解决检视意见(使用时需仅传此参数)。
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
            'resolved' => 'setResolved'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * body  **参数解释：** 评论内容。
    * severity  **参数解释：** 检视意见严重程度。
    * assigneeId  **参数解释：** 检视意见指派人id。
    * reviewCategories  **参数解释：** 检视意见分类。
    * reviewModules  **参数解释：** 检视意见模块。
    * proposerId  **参数解释：** 检视意见检视人id。
    * resolved  **参数解释：** 解决或取消解决检视意见(使用时需仅传此参数)。
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
            'resolved' => 'getResolved'
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
        $this->container['resolved'] = isset($data['resolved']) ? $data['resolved'] : null;
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

            if (!is_null($this->container['reviewCategories']) && (mb_strlen($this->container['reviewCategories']) > 200)) {
                $invalidProperties[] = "invalid value for 'reviewCategories', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['reviewCategories']) && (mb_strlen($this->container['reviewCategories']) < 1)) {
                $invalidProperties[] = "invalid value for 'reviewCategories', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['reviewModules']) && (mb_strlen($this->container['reviewModules']) > 200)) {
                $invalidProperties[] = "invalid value for 'reviewModules', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['reviewModules']) && (mb_strlen($this->container['reviewModules']) < 1)) {
                $invalidProperties[] = "invalid value for 'reviewModules', the character length must be bigger than or equal to 1.";
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
    *  **参数解释：** 检视意见检视人id。
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
    * @param string|null $proposerId **参数解释：** 检视意见检视人id。
    *
    * @return $this
    */
    public function setProposerId($proposerId)
    {
        $this->container['proposerId'] = $proposerId;
        return $this;
    }

    /**
    * Gets resolved
    *  **参数解释：** 解决或取消解决检视意见(使用时需仅传此参数)。
    *
    * @return bool|null
    */
    public function getResolved()
    {
        return $this->container['resolved'];
    }

    /**
    * Sets resolved
    *
    * @param bool|null $resolved **参数解释：** 解决或取消解决检视意见(使用时需仅传此参数)。
    *
    * @return $this
    */
    public function setResolved($resolved)
    {
        $this->container['resolved'] = $resolved;
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

