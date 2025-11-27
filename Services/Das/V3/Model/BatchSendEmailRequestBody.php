<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchSendEmailRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchSendEmailRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskIdList  报告ID列表
    * email  邮箱地址
    * topic  主题名称
    * topicUrn  主题标识符
    * obsBucketName  OBS桶名
    * serviceUri  服务地址
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskIdList' => 'string[]',
            'email' => 'string',
            'topic' => 'string',
            'topicUrn' => 'string',
            'obsBucketName' => 'string',
            'serviceUri' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskIdList  报告ID列表
    * email  邮箱地址
    * topic  主题名称
    * topicUrn  主题标识符
    * obsBucketName  OBS桶名
    * serviceUri  服务地址
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskIdList' => null,
        'email' => null,
        'topic' => null,
        'topicUrn' => null,
        'obsBucketName' => null,
        'serviceUri' => null
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
    * taskIdList  报告ID列表
    * email  邮箱地址
    * topic  主题名称
    * topicUrn  主题标识符
    * obsBucketName  OBS桶名
    * serviceUri  服务地址
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskIdList' => 'task_id_list',
            'email' => 'email',
            'topic' => 'topic',
            'topicUrn' => 'topic_urn',
            'obsBucketName' => 'obs_bucket_name',
            'serviceUri' => 'service_uri'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskIdList  报告ID列表
    * email  邮箱地址
    * topic  主题名称
    * topicUrn  主题标识符
    * obsBucketName  OBS桶名
    * serviceUri  服务地址
    *
    * @var string[]
    */
    protected static $setters = [
            'taskIdList' => 'setTaskIdList',
            'email' => 'setEmail',
            'topic' => 'setTopic',
            'topicUrn' => 'setTopicUrn',
            'obsBucketName' => 'setObsBucketName',
            'serviceUri' => 'setServiceUri'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskIdList  报告ID列表
    * email  邮箱地址
    * topic  主题名称
    * topicUrn  主题标识符
    * obsBucketName  OBS桶名
    * serviceUri  服务地址
    *
    * @var string[]
    */
    protected static $getters = [
            'taskIdList' => 'getTaskIdList',
            'email' => 'getEmail',
            'topic' => 'getTopic',
            'topicUrn' => 'getTopicUrn',
            'obsBucketName' => 'getObsBucketName',
            'serviceUri' => 'getServiceUri'
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
        $this->container['taskIdList'] = isset($data['taskIdList']) ? $data['taskIdList'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['topic'] = isset($data['topic']) ? $data['topic'] : null;
        $this->container['topicUrn'] = isset($data['topicUrn']) ? $data['topicUrn'] : null;
        $this->container['obsBucketName'] = isset($data['obsBucketName']) ? $data['obsBucketName'] : null;
        $this->container['serviceUri'] = isset($data['serviceUri']) ? $data['serviceUri'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['taskIdList'] === null) {
            $invalidProperties[] = "'taskIdList' can't be null";
        }
            if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) > 1024)) {
                $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) < 0)) {
                $invalidProperties[] = "invalid value for 'email', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['topic']) && (mb_strlen($this->container['topic']) > 1024)) {
                $invalidProperties[] = "invalid value for 'topic', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['topic']) && (mb_strlen($this->container['topic']) < 0)) {
                $invalidProperties[] = "invalid value for 'topic', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['topicUrn']) && (mb_strlen($this->container['topicUrn']) > 1024)) {
                $invalidProperties[] = "invalid value for 'topicUrn', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['topicUrn']) && (mb_strlen($this->container['topicUrn']) < 0)) {
                $invalidProperties[] = "invalid value for 'topicUrn', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['obsBucketName']) && (mb_strlen($this->container['obsBucketName']) > 1024)) {
                $invalidProperties[] = "invalid value for 'obsBucketName', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['obsBucketName']) && (mb_strlen($this->container['obsBucketName']) < 1)) {
                $invalidProperties[] = "invalid value for 'obsBucketName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['serviceUri']) && (mb_strlen($this->container['serviceUri']) > 1024)) {
                $invalidProperties[] = "invalid value for 'serviceUri', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['serviceUri']) && (mb_strlen($this->container['serviceUri']) < 0)) {
                $invalidProperties[] = "invalid value for 'serviceUri', the character length must be bigger than or equal to 0.";
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
    * Gets taskIdList
    *  报告ID列表
    *
    * @return string[]
    */
    public function getTaskIdList()
    {
        return $this->container['taskIdList'];
    }

    /**
    * Sets taskIdList
    *
    * @param string[] $taskIdList 报告ID列表
    *
    * @return $this
    */
    public function setTaskIdList($taskIdList)
    {
        $this->container['taskIdList'] = $taskIdList;
        return $this;
    }

    /**
    * Gets email
    *  邮箱地址
    *
    * @return string|null
    */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
    * Sets email
    *
    * @param string|null $email 邮箱地址
    *
    * @return $this
    */
    public function setEmail($email)
    {
        $this->container['email'] = $email;
        return $this;
    }

    /**
    * Gets topic
    *  主题名称
    *
    * @return string|null
    */
    public function getTopic()
    {
        return $this->container['topic'];
    }

    /**
    * Sets topic
    *
    * @param string|null $topic 主题名称
    *
    * @return $this
    */
    public function setTopic($topic)
    {
        $this->container['topic'] = $topic;
        return $this;
    }

    /**
    * Gets topicUrn
    *  主题标识符
    *
    * @return string|null
    */
    public function getTopicUrn()
    {
        return $this->container['topicUrn'];
    }

    /**
    * Sets topicUrn
    *
    * @param string|null $topicUrn 主题标识符
    *
    * @return $this
    */
    public function setTopicUrn($topicUrn)
    {
        $this->container['topicUrn'] = $topicUrn;
        return $this;
    }

    /**
    * Gets obsBucketName
    *  OBS桶名
    *
    * @return string|null
    */
    public function getObsBucketName()
    {
        return $this->container['obsBucketName'];
    }

    /**
    * Sets obsBucketName
    *
    * @param string|null $obsBucketName OBS桶名
    *
    * @return $this
    */
    public function setObsBucketName($obsBucketName)
    {
        $this->container['obsBucketName'] = $obsBucketName;
        return $this;
    }

    /**
    * Gets serviceUri
    *  服务地址
    *
    * @return string|null
    */
    public function getServiceUri()
    {
        return $this->container['serviceUri'];
    }

    /**
    * Sets serviceUri
    *
    * @param string|null $serviceUri 服务地址
    *
    * @return $this
    */
    public function setServiceUri($serviceUri)
    {
        $this->container['serviceUri'] = $serviceUri;
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

