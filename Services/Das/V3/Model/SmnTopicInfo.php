<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SmnTopicInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SmnTopicInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * topicUrn  Topic的唯一的资源标识
    * name  创建topic的名字
    * displayName  Topic的显示名，推送邮件消息时，作为邮件发件人显示
    * pushPolicy  消息推送的策略，0表示发送失败保留到失败队列，1表示直接丢弃发送失败的消息
    * enterpriseProjectId  企业项目ID
    * topicId  主题ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'topicUrn' => 'string',
            'name' => 'string',
            'displayName' => 'string',
            'pushPolicy' => 'string',
            'enterpriseProjectId' => 'string',
            'topicId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * topicUrn  Topic的唯一的资源标识
    * name  创建topic的名字
    * displayName  Topic的显示名，推送邮件消息时，作为邮件发件人显示
    * pushPolicy  消息推送的策略，0表示发送失败保留到失败队列，1表示直接丢弃发送失败的消息
    * enterpriseProjectId  企业项目ID
    * topicId  主题ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'topicUrn' => null,
        'name' => null,
        'displayName' => null,
        'pushPolicy' => null,
        'enterpriseProjectId' => null,
        'topicId' => null
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
    * topicUrn  Topic的唯一的资源标识
    * name  创建topic的名字
    * displayName  Topic的显示名，推送邮件消息时，作为邮件发件人显示
    * pushPolicy  消息推送的策略，0表示发送失败保留到失败队列，1表示直接丢弃发送失败的消息
    * enterpriseProjectId  企业项目ID
    * topicId  主题ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'topicUrn' => 'topic_urn',
            'name' => 'name',
            'displayName' => 'display_name',
            'pushPolicy' => 'push_policy',
            'enterpriseProjectId' => 'enterprise_project_id',
            'topicId' => 'topic_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * topicUrn  Topic的唯一的资源标识
    * name  创建topic的名字
    * displayName  Topic的显示名，推送邮件消息时，作为邮件发件人显示
    * pushPolicy  消息推送的策略，0表示发送失败保留到失败队列，1表示直接丢弃发送失败的消息
    * enterpriseProjectId  企业项目ID
    * topicId  主题ID
    *
    * @var string[]
    */
    protected static $setters = [
            'topicUrn' => 'setTopicUrn',
            'name' => 'setName',
            'displayName' => 'setDisplayName',
            'pushPolicy' => 'setPushPolicy',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'topicId' => 'setTopicId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * topicUrn  Topic的唯一的资源标识
    * name  创建topic的名字
    * displayName  Topic的显示名，推送邮件消息时，作为邮件发件人显示
    * pushPolicy  消息推送的策略，0表示发送失败保留到失败队列，1表示直接丢弃发送失败的消息
    * enterpriseProjectId  企业项目ID
    * topicId  主题ID
    *
    * @var string[]
    */
    protected static $getters = [
            'topicUrn' => 'getTopicUrn',
            'name' => 'getName',
            'displayName' => 'getDisplayName',
            'pushPolicy' => 'getPushPolicy',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'topicId' => 'getTopicId'
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
        $this->container['topicUrn'] = isset($data['topicUrn']) ? $data['topicUrn'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['pushPolicy'] = isset($data['pushPolicy']) ? $data['pushPolicy'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['topicId'] = isset($data['topicId']) ? $data['topicId'] : null;
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
    * Gets topicUrn
    *  Topic的唯一的资源标识
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
    * @param string|null $topicUrn Topic的唯一的资源标识
    *
    * @return $this
    */
    public function setTopicUrn($topicUrn)
    {
        $this->container['topicUrn'] = $topicUrn;
        return $this;
    }

    /**
    * Gets name
    *  创建topic的名字
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 创建topic的名字
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets displayName
    *  Topic的显示名，推送邮件消息时，作为邮件发件人显示
    *
    * @return string|null
    */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
    * Sets displayName
    *
    * @param string|null $displayName Topic的显示名，推送邮件消息时，作为邮件发件人显示
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
        return $this;
    }

    /**
    * Gets pushPolicy
    *  消息推送的策略，0表示发送失败保留到失败队列，1表示直接丢弃发送失败的消息
    *
    * @return string|null
    */
    public function getPushPolicy()
    {
        return $this->container['pushPolicy'];
    }

    /**
    * Sets pushPolicy
    *
    * @param string|null $pushPolicy 消息推送的策略，0表示发送失败保留到失败队列，1表示直接丢弃发送失败的消息
    *
    * @return $this
    */
    public function setPushPolicy($pushPolicy)
    {
        $this->container['pushPolicy'] = $pushPolicy;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 企业项目ID
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets topicId
    *  主题ID
    *
    * @return string|null
    */
    public function getTopicId()
    {
        return $this->container['topicId'];
    }

    /**
    * Sets topicId
    *
    * @param string|null $topicId 主题ID
    *
    * @return $this
    */
    public function setTopicId($topicId)
    {
        $this->container['topicId'] = $topicId;
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

