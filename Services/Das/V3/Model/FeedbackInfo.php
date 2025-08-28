<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FeedbackInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FeedbackInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  编号
    * projectId  项目Id
    * messageId  任务消息唯一Id
    * feedbackGrade  反馈等级
    * feedbackContent  反馈内容
    * gmtCreated  创建时间
    * gmtModified  修改时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'projectId' => 'string',
            'messageId' => 'string',
            'feedbackGrade' => 'string',
            'feedbackContent' => 'string',
            'gmtCreated' => 'int',
            'gmtModified' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  编号
    * projectId  项目Id
    * messageId  任务消息唯一Id
    * feedbackGrade  反馈等级
    * feedbackContent  反馈内容
    * gmtCreated  创建时间
    * gmtModified  修改时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'projectId' => null,
        'messageId' => null,
        'feedbackGrade' => null,
        'feedbackContent' => null,
        'gmtCreated' => 'int64',
        'gmtModified' => 'int64'
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
    * id  编号
    * projectId  项目Id
    * messageId  任务消息唯一Id
    * feedbackGrade  反馈等级
    * feedbackContent  反馈内容
    * gmtCreated  创建时间
    * gmtModified  修改时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'projectId' => 'project_id',
            'messageId' => 'message_id',
            'feedbackGrade' => 'feedback_grade',
            'feedbackContent' => 'feedback_content',
            'gmtCreated' => 'gmt_created',
            'gmtModified' => 'gmt_modified'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  编号
    * projectId  项目Id
    * messageId  任务消息唯一Id
    * feedbackGrade  反馈等级
    * feedbackContent  反馈内容
    * gmtCreated  创建时间
    * gmtModified  修改时间
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'projectId' => 'setProjectId',
            'messageId' => 'setMessageId',
            'feedbackGrade' => 'setFeedbackGrade',
            'feedbackContent' => 'setFeedbackContent',
            'gmtCreated' => 'setGmtCreated',
            'gmtModified' => 'setGmtModified'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  编号
    * projectId  项目Id
    * messageId  任务消息唯一Id
    * feedbackGrade  反馈等级
    * feedbackContent  反馈内容
    * gmtCreated  创建时间
    * gmtModified  修改时间
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'projectId' => 'getProjectId',
            'messageId' => 'getMessageId',
            'feedbackGrade' => 'getFeedbackGrade',
            'feedbackContent' => 'getFeedbackContent',
            'gmtCreated' => 'getGmtCreated',
            'gmtModified' => 'getGmtModified'
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['messageId'] = isset($data['messageId']) ? $data['messageId'] : null;
        $this->container['feedbackGrade'] = isset($data['feedbackGrade']) ? $data['feedbackGrade'] : null;
        $this->container['feedbackContent'] = isset($data['feedbackContent']) ? $data['feedbackContent'] : null;
        $this->container['gmtCreated'] = isset($data['gmtCreated']) ? $data['gmtCreated'] : null;
        $this->container['gmtModified'] = isset($data['gmtModified']) ? $data['gmtModified'] : null;
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
    * Gets id
    *  编号
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 编号
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets projectId
    *  项目Id
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 项目Id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets messageId
    *  任务消息唯一Id
    *
    * @return string|null
    */
    public function getMessageId()
    {
        return $this->container['messageId'];
    }

    /**
    * Sets messageId
    *
    * @param string|null $messageId 任务消息唯一Id
    *
    * @return $this
    */
    public function setMessageId($messageId)
    {
        $this->container['messageId'] = $messageId;
        return $this;
    }

    /**
    * Gets feedbackGrade
    *  反馈等级
    *
    * @return string|null
    */
    public function getFeedbackGrade()
    {
        return $this->container['feedbackGrade'];
    }

    /**
    * Sets feedbackGrade
    *
    * @param string|null $feedbackGrade 反馈等级
    *
    * @return $this
    */
    public function setFeedbackGrade($feedbackGrade)
    {
        $this->container['feedbackGrade'] = $feedbackGrade;
        return $this;
    }

    /**
    * Gets feedbackContent
    *  反馈内容
    *
    * @return string|null
    */
    public function getFeedbackContent()
    {
        return $this->container['feedbackContent'];
    }

    /**
    * Sets feedbackContent
    *
    * @param string|null $feedbackContent 反馈内容
    *
    * @return $this
    */
    public function setFeedbackContent($feedbackContent)
    {
        $this->container['feedbackContent'] = $feedbackContent;
        return $this;
    }

    /**
    * Gets gmtCreated
    *  创建时间
    *
    * @return int|null
    */
    public function getGmtCreated()
    {
        return $this->container['gmtCreated'];
    }

    /**
    * Sets gmtCreated
    *
    * @param int|null $gmtCreated 创建时间
    *
    * @return $this
    */
    public function setGmtCreated($gmtCreated)
    {
        $this->container['gmtCreated'] = $gmtCreated;
        return $this;
    }

    /**
    * Gets gmtModified
    *  修改时间
    *
    * @return int|null
    */
    public function getGmtModified()
    {
        return $this->container['gmtModified'];
    }

    /**
    * Sets gmtModified
    *
    * @param int|null $gmtModified 修改时间
    *
    * @return $this
    */
    public function setGmtModified($gmtModified)
    {
        $this->container['gmtModified'] = $gmtModified;
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

