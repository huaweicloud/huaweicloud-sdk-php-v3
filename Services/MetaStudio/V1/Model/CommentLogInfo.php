<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CommentLogInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CommentLogInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * operateTime  操作时间,格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”
    * commentType  * USER_REJECT：用户驳回 * USER_COMMENT：用户评论 * ADMIN_COMMENT：管理员评论
    * commentTitle  标题。
    * commentMessage  消息。
    * attachmentDownloadUrl  附件下载地址
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'operateTime' => 'string',
            'commentType' => 'string',
            'commentTitle' => 'string',
            'commentMessage' => 'string',
            'attachmentDownloadUrl' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * operateTime  操作时间,格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”
    * commentType  * USER_REJECT：用户驳回 * USER_COMMENT：用户评论 * ADMIN_COMMENT：管理员评论
    * commentTitle  标题。
    * commentMessage  消息。
    * attachmentDownloadUrl  附件下载地址
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'operateTime' => null,
        'commentType' => null,
        'commentTitle' => null,
        'commentMessage' => null,
        'attachmentDownloadUrl' => null
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
    * operateTime  操作时间,格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”
    * commentType  * USER_REJECT：用户驳回 * USER_COMMENT：用户评论 * ADMIN_COMMENT：管理员评论
    * commentTitle  标题。
    * commentMessage  消息。
    * attachmentDownloadUrl  附件下载地址
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'operateTime' => 'operate_time',
            'commentType' => 'comment_type',
            'commentTitle' => 'comment_title',
            'commentMessage' => 'comment_message',
            'attachmentDownloadUrl' => 'attachment_download_url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * operateTime  操作时间,格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”
    * commentType  * USER_REJECT：用户驳回 * USER_COMMENT：用户评论 * ADMIN_COMMENT：管理员评论
    * commentTitle  标题。
    * commentMessage  消息。
    * attachmentDownloadUrl  附件下载地址
    *
    * @var string[]
    */
    protected static $setters = [
            'operateTime' => 'setOperateTime',
            'commentType' => 'setCommentType',
            'commentTitle' => 'setCommentTitle',
            'commentMessage' => 'setCommentMessage',
            'attachmentDownloadUrl' => 'setAttachmentDownloadUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * operateTime  操作时间,格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”
    * commentType  * USER_REJECT：用户驳回 * USER_COMMENT：用户评论 * ADMIN_COMMENT：管理员评论
    * commentTitle  标题。
    * commentMessage  消息。
    * attachmentDownloadUrl  附件下载地址
    *
    * @var string[]
    */
    protected static $getters = [
            'operateTime' => 'getOperateTime',
            'commentType' => 'getCommentType',
            'commentTitle' => 'getCommentTitle',
            'commentMessage' => 'getCommentMessage',
            'attachmentDownloadUrl' => 'getAttachmentDownloadUrl'
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
    const COMMENT_TYPE_USER_REJECT = 'USER_REJECT';
    const COMMENT_TYPE_USER_COMMENT = 'USER_COMMENT';
    const COMMENT_TYPE_ADMIN_COMMENT = 'ADMIN_COMMENT';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCommentTypeAllowableValues()
    {
        return [
            self::COMMENT_TYPE_USER_REJECT,
            self::COMMENT_TYPE_USER_COMMENT,
            self::COMMENT_TYPE_ADMIN_COMMENT,
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
        $this->container['operateTime'] = isset($data['operateTime']) ? $data['operateTime'] : null;
        $this->container['commentType'] = isset($data['commentType']) ? $data['commentType'] : null;
        $this->container['commentTitle'] = isset($data['commentTitle']) ? $data['commentTitle'] : null;
        $this->container['commentMessage'] = isset($data['commentMessage']) ? $data['commentMessage'] : null;
        $this->container['attachmentDownloadUrl'] = isset($data['attachmentDownloadUrl']) ? $data['attachmentDownloadUrl'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['operateTime']) && (mb_strlen($this->container['operateTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'operateTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['operateTime']) && (mb_strlen($this->container['operateTime']) < 20)) {
                $invalidProperties[] = "invalid value for 'operateTime', the character length must be bigger than or equal to 20.";
            }
            $allowedValues = $this->getCommentTypeAllowableValues();
                if (!is_null($this->container['commentType']) && !in_array($this->container['commentType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'commentType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['commentTitle']) && (mb_strlen($this->container['commentTitle']) > 2048)) {
                $invalidProperties[] = "invalid value for 'commentTitle', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['commentTitle']) && (mb_strlen($this->container['commentTitle']) < 0)) {
                $invalidProperties[] = "invalid value for 'commentTitle', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['commentMessage']) && (mb_strlen($this->container['commentMessage']) > 2048)) {
                $invalidProperties[] = "invalid value for 'commentMessage', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['commentMessage']) && (mb_strlen($this->container['commentMessage']) < 0)) {
                $invalidProperties[] = "invalid value for 'commentMessage', the character length must be bigger than or equal to 0.";
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
    * Gets operateTime
    *  操作时间,格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”
    *
    * @return string|null
    */
    public function getOperateTime()
    {
        return $this->container['operateTime'];
    }

    /**
    * Sets operateTime
    *
    * @param string|null $operateTime 操作时间,格式遵循：RFC 3339。 例 “2020-07-30T10:43:17Z”
    *
    * @return $this
    */
    public function setOperateTime($operateTime)
    {
        $this->container['operateTime'] = $operateTime;
        return $this;
    }

    /**
    * Gets commentType
    *  * USER_REJECT：用户驳回 * USER_COMMENT：用户评论 * ADMIN_COMMENT：管理员评论
    *
    * @return string|null
    */
    public function getCommentType()
    {
        return $this->container['commentType'];
    }

    /**
    * Sets commentType
    *
    * @param string|null $commentType * USER_REJECT：用户驳回 * USER_COMMENT：用户评论 * ADMIN_COMMENT：管理员评论
    *
    * @return $this
    */
    public function setCommentType($commentType)
    {
        $this->container['commentType'] = $commentType;
        return $this;
    }

    /**
    * Gets commentTitle
    *  标题。
    *
    * @return string|null
    */
    public function getCommentTitle()
    {
        return $this->container['commentTitle'];
    }

    /**
    * Sets commentTitle
    *
    * @param string|null $commentTitle 标题。
    *
    * @return $this
    */
    public function setCommentTitle($commentTitle)
    {
        $this->container['commentTitle'] = $commentTitle;
        return $this;
    }

    /**
    * Gets commentMessage
    *  消息。
    *
    * @return string|null
    */
    public function getCommentMessage()
    {
        return $this->container['commentMessage'];
    }

    /**
    * Sets commentMessage
    *
    * @param string|null $commentMessage 消息。
    *
    * @return $this
    */
    public function setCommentMessage($commentMessage)
    {
        $this->container['commentMessage'] = $commentMessage;
        return $this;
    }

    /**
    * Gets attachmentDownloadUrl
    *  附件下载地址
    *
    * @return string[]|null
    */
    public function getAttachmentDownloadUrl()
    {
        return $this->container['attachmentDownloadUrl'];
    }

    /**
    * Sets attachmentDownloadUrl
    *
    * @param string[]|null $attachmentDownloadUrl 附件下载地址
    *
    * @return $this
    */
    public function setAttachmentDownloadUrl($attachmentDownloadUrl)
    {
        $this->container['attachmentDownloadUrl'] = $attachmentDownloadUrl;
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

