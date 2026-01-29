<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ModifyTaskInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ModifyTaskInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * action  **参数解释**: 更新的待办动作 - TERMINATE 终止待办 - CONTINUE 继续执行 - ADD_COMMENT 添加评论 - DELETE_COMMENT 删除评论  - ADD_ATTACHMENT 添加附件 - DELETE_ATTACHMENT 删除附件   **约束限制**: - TERMINATE 不涉及 - CONTINUE 不涉及 - ADD_COMMENT 需要和请求参数comment配合使用 - DELETE_COMMENT 需要和请求参数comment_id配合使用  - ADD_ATTACHMENT 需要和请求参数attachment_id配合使用 - DELETE_ATTACHMENT 需要和请求参数attachment_id配合使用    **取值范围**: - TERMINATE - CONTINUE - ADD_COMMENT - DELETE_COMMENT  - ADD_ATTACHMENT - DELETE_ATTACHMENT  **默认值**:  ADD_ATTACHMENT 添加评论
    * attachmentId  附件id
    * comment  待办评论内容
    * commentId  待办评论id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'action' => 'string',
            'attachmentId' => 'string',
            'comment' => 'string',
            'commentId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * action  **参数解释**: 更新的待办动作 - TERMINATE 终止待办 - CONTINUE 继续执行 - ADD_COMMENT 添加评论 - DELETE_COMMENT 删除评论  - ADD_ATTACHMENT 添加附件 - DELETE_ATTACHMENT 删除附件   **约束限制**: - TERMINATE 不涉及 - CONTINUE 不涉及 - ADD_COMMENT 需要和请求参数comment配合使用 - DELETE_COMMENT 需要和请求参数comment_id配合使用  - ADD_ATTACHMENT 需要和请求参数attachment_id配合使用 - DELETE_ATTACHMENT 需要和请求参数attachment_id配合使用    **取值范围**: - TERMINATE - CONTINUE - ADD_COMMENT - DELETE_COMMENT  - ADD_ATTACHMENT - DELETE_ATTACHMENT  **默认值**:  ADD_ATTACHMENT 添加评论
    * attachmentId  附件id
    * comment  待办评论内容
    * commentId  待办评论id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'action' => null,
        'attachmentId' => null,
        'comment' => null,
        'commentId' => null
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
    * action  **参数解释**: 更新的待办动作 - TERMINATE 终止待办 - CONTINUE 继续执行 - ADD_COMMENT 添加评论 - DELETE_COMMENT 删除评论  - ADD_ATTACHMENT 添加附件 - DELETE_ATTACHMENT 删除附件   **约束限制**: - TERMINATE 不涉及 - CONTINUE 不涉及 - ADD_COMMENT 需要和请求参数comment配合使用 - DELETE_COMMENT 需要和请求参数comment_id配合使用  - ADD_ATTACHMENT 需要和请求参数attachment_id配合使用 - DELETE_ATTACHMENT 需要和请求参数attachment_id配合使用    **取值范围**: - TERMINATE - CONTINUE - ADD_COMMENT - DELETE_COMMENT  - ADD_ATTACHMENT - DELETE_ATTACHMENT  **默认值**:  ADD_ATTACHMENT 添加评论
    * attachmentId  附件id
    * comment  待办评论内容
    * commentId  待办评论id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'action' => 'action',
            'attachmentId' => 'attachment_id',
            'comment' => 'comment',
            'commentId' => 'comment_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * action  **参数解释**: 更新的待办动作 - TERMINATE 终止待办 - CONTINUE 继续执行 - ADD_COMMENT 添加评论 - DELETE_COMMENT 删除评论  - ADD_ATTACHMENT 添加附件 - DELETE_ATTACHMENT 删除附件   **约束限制**: - TERMINATE 不涉及 - CONTINUE 不涉及 - ADD_COMMENT 需要和请求参数comment配合使用 - DELETE_COMMENT 需要和请求参数comment_id配合使用  - ADD_ATTACHMENT 需要和请求参数attachment_id配合使用 - DELETE_ATTACHMENT 需要和请求参数attachment_id配合使用    **取值范围**: - TERMINATE - CONTINUE - ADD_COMMENT - DELETE_COMMENT  - ADD_ATTACHMENT - DELETE_ATTACHMENT  **默认值**:  ADD_ATTACHMENT 添加评论
    * attachmentId  附件id
    * comment  待办评论内容
    * commentId  待办评论id
    *
    * @var string[]
    */
    protected static $setters = [
            'action' => 'setAction',
            'attachmentId' => 'setAttachmentId',
            'comment' => 'setComment',
            'commentId' => 'setCommentId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * action  **参数解释**: 更新的待办动作 - TERMINATE 终止待办 - CONTINUE 继续执行 - ADD_COMMENT 添加评论 - DELETE_COMMENT 删除评论  - ADD_ATTACHMENT 添加附件 - DELETE_ATTACHMENT 删除附件   **约束限制**: - TERMINATE 不涉及 - CONTINUE 不涉及 - ADD_COMMENT 需要和请求参数comment配合使用 - DELETE_COMMENT 需要和请求参数comment_id配合使用  - ADD_ATTACHMENT 需要和请求参数attachment_id配合使用 - DELETE_ATTACHMENT 需要和请求参数attachment_id配合使用    **取值范围**: - TERMINATE - CONTINUE - ADD_COMMENT - DELETE_COMMENT  - ADD_ATTACHMENT - DELETE_ATTACHMENT  **默认值**:  ADD_ATTACHMENT 添加评论
    * attachmentId  附件id
    * comment  待办评论内容
    * commentId  待办评论id
    *
    * @var string[]
    */
    protected static $getters = [
            'action' => 'getAction',
            'attachmentId' => 'getAttachmentId',
            'comment' => 'getComment',
            'commentId' => 'getCommentId'
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
    const ACTION_TERMINATE = 'TERMINATE';
    const ACTION__CONTINUE = 'CONTINUE';
    const ACTION_ADD_COMMEN = 'ADD_COMMEN';
    const ACTION_DELETE_COMMENT = 'DELETE_COMMENT';
    const ACTION_ADD_ATTACHMENT = 'ADD_ATTACHMENT';
    const ACTION_DELETE_ATTACHMEN = 'DELETE_ATTACHMEN';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_TERMINATE,
            self::ACTION__CONTINUE,
            self::ACTION_ADD_COMMEN,
            self::ACTION_DELETE_COMMENT,
            self::ACTION_ADD_ATTACHMENT,
            self::ACTION_DELETE_ATTACHMEN,
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
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['attachmentId'] = isset($data['attachmentId']) ? $data['attachmentId'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['commentId'] = isset($data['commentId']) ? $data['commentId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getActionAllowableValues();
                if (!is_null($this->container['action']) && !in_array($this->container['action'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'action', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['action']) && (mb_strlen($this->container['action']) > 20)) {
                $invalidProperties[] = "invalid value for 'action', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['action']) && (mb_strlen($this->container['action']) < 1)) {
                $invalidProperties[] = "invalid value for 'action', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['attachmentId']) && (mb_strlen($this->container['attachmentId']) > 64)) {
                $invalidProperties[] = "invalid value for 'attachmentId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['attachmentId']) && (mb_strlen($this->container['attachmentId']) < 1)) {
                $invalidProperties[] = "invalid value for 'attachmentId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['comment']) && (mb_strlen($this->container['comment']) > 65535)) {
                $invalidProperties[] = "invalid value for 'comment', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['comment']) && (mb_strlen($this->container['comment']) < 1)) {
                $invalidProperties[] = "invalid value for 'comment', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['commentId']) && (mb_strlen($this->container['commentId']) > 64)) {
                $invalidProperties[] = "invalid value for 'commentId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['commentId']) && (mb_strlen($this->container['commentId']) < 1)) {
                $invalidProperties[] = "invalid value for 'commentId', the character length must be bigger than or equal to 1.";
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
    * Gets action
    *  **参数解释**: 更新的待办动作 - TERMINATE 终止待办 - CONTINUE 继续执行 - ADD_COMMENT 添加评论 - DELETE_COMMENT 删除评论  - ADD_ATTACHMENT 添加附件 - DELETE_ATTACHMENT 删除附件   **约束限制**: - TERMINATE 不涉及 - CONTINUE 不涉及 - ADD_COMMENT 需要和请求参数comment配合使用 - DELETE_COMMENT 需要和请求参数comment_id配合使用  - ADD_ATTACHMENT 需要和请求参数attachment_id配合使用 - DELETE_ATTACHMENT 需要和请求参数attachment_id配合使用    **取值范围**: - TERMINATE - CONTINUE - ADD_COMMENT - DELETE_COMMENT  - ADD_ATTACHMENT - DELETE_ATTACHMENT  **默认值**:  ADD_ATTACHMENT 添加评论
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
    * @param string|null $action **参数解释**: 更新的待办动作 - TERMINATE 终止待办 - CONTINUE 继续执行 - ADD_COMMENT 添加评论 - DELETE_COMMENT 删除评论  - ADD_ATTACHMENT 添加附件 - DELETE_ATTACHMENT 删除附件   **约束限制**: - TERMINATE 不涉及 - CONTINUE 不涉及 - ADD_COMMENT 需要和请求参数comment配合使用 - DELETE_COMMENT 需要和请求参数comment_id配合使用  - ADD_ATTACHMENT 需要和请求参数attachment_id配合使用 - DELETE_ATTACHMENT 需要和请求参数attachment_id配合使用    **取值范围**: - TERMINATE - CONTINUE - ADD_COMMENT - DELETE_COMMENT  - ADD_ATTACHMENT - DELETE_ATTACHMENT  **默认值**:  ADD_ATTACHMENT 添加评论
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets attachmentId
    *  附件id
    *
    * @return string|null
    */
    public function getAttachmentId()
    {
        return $this->container['attachmentId'];
    }

    /**
    * Sets attachmentId
    *
    * @param string|null $attachmentId 附件id
    *
    * @return $this
    */
    public function setAttachmentId($attachmentId)
    {
        $this->container['attachmentId'] = $attachmentId;
        return $this;
    }

    /**
    * Gets comment
    *  待办评论内容
    *
    * @return string|null
    */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
    * Sets comment
    *
    * @param string|null $comment 待办评论内容
    *
    * @return $this
    */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;
        return $this;
    }

    /**
    * Gets commentId
    *  待办评论id
    *
    * @return string|null
    */
    public function getCommentId()
    {
        return $this->container['commentId'];
    }

    /**
    * Sets commentId
    *
    * @param string|null $commentId 待办评论id
    *
    * @return $this
    */
    public function setCommentId($commentId)
    {
        $this->container['commentId'] = $commentId;
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

