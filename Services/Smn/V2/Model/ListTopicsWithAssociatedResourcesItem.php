<?php

namespace HuaweiCloud\SDK\Smn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListTopicsWithAssociatedResourcesItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListTopicsWithAssociatedResourcesItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * topicUrn  Topic的唯一的资源标识。
    * name  创建topic的名字。
    * displayName  Topic的显示名，推送邮件消息时，作为邮件发件人显示。
    * pushPolicy  消息推送的策略，该属性目前不支持修改，后续将支持修改。0表示发送失败，保留到失败队列，1表示直接丢弃发送失败的消息。
    * enterpriseProjectId  企业项目ID。
    * topicId  主题ID。
    * createTime  创建时间。时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    * updateTime  更新时间。时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    * tags  资源标签列表。
    * attributes  attributes
    * logtanks  云日志信息列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'topicUrn' => 'string',
            'name' => 'string',
            'displayName' => 'string',
            'pushPolicy' => 'int',
            'enterpriseProjectId' => 'string',
            'topicId' => 'string',
            'createTime' => 'string',
            'updateTime' => 'string',
            'tags' => '\HuaweiCloud\SDK\Smn\V2\Model\ResourceTag[]',
            'attributes' => '\HuaweiCloud\SDK\Smn\V2\Model\TopicAccessPolicyAttribute',
            'logtanks' => '\HuaweiCloud\SDK\Smn\V2\Model\LogtankItem[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * topicUrn  Topic的唯一的资源标识。
    * name  创建topic的名字。
    * displayName  Topic的显示名，推送邮件消息时，作为邮件发件人显示。
    * pushPolicy  消息推送的策略，该属性目前不支持修改，后续将支持修改。0表示发送失败，保留到失败队列，1表示直接丢弃发送失败的消息。
    * enterpriseProjectId  企业项目ID。
    * topicId  主题ID。
    * createTime  创建时间。时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    * updateTime  更新时间。时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    * tags  资源标签列表。
    * attributes  attributes
    * logtanks  云日志信息列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'topicUrn' => null,
        'name' => null,
        'displayName' => null,
        'pushPolicy' => null,
        'enterpriseProjectId' => null,
        'topicId' => null,
        'createTime' => null,
        'updateTime' => null,
        'tags' => null,
        'attributes' => null,
        'logtanks' => null
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
    * topicUrn  Topic的唯一的资源标识。
    * name  创建topic的名字。
    * displayName  Topic的显示名，推送邮件消息时，作为邮件发件人显示。
    * pushPolicy  消息推送的策略，该属性目前不支持修改，后续将支持修改。0表示发送失败，保留到失败队列，1表示直接丢弃发送失败的消息。
    * enterpriseProjectId  企业项目ID。
    * topicId  主题ID。
    * createTime  创建时间。时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    * updateTime  更新时间。时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    * tags  资源标签列表。
    * attributes  attributes
    * logtanks  云日志信息列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'topicUrn' => 'topic_urn',
            'name' => 'name',
            'displayName' => 'display_name',
            'pushPolicy' => 'push_policy',
            'enterpriseProjectId' => 'enterprise_project_id',
            'topicId' => 'topic_id',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'tags' => 'tags',
            'attributes' => 'attributes',
            'logtanks' => 'logtanks'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * topicUrn  Topic的唯一的资源标识。
    * name  创建topic的名字。
    * displayName  Topic的显示名，推送邮件消息时，作为邮件发件人显示。
    * pushPolicy  消息推送的策略，该属性目前不支持修改，后续将支持修改。0表示发送失败，保留到失败队列，1表示直接丢弃发送失败的消息。
    * enterpriseProjectId  企业项目ID。
    * topicId  主题ID。
    * createTime  创建时间。时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    * updateTime  更新时间。时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    * tags  资源标签列表。
    * attributes  attributes
    * logtanks  云日志信息列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'topicUrn' => 'setTopicUrn',
            'name' => 'setName',
            'displayName' => 'setDisplayName',
            'pushPolicy' => 'setPushPolicy',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'topicId' => 'setTopicId',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'tags' => 'setTags',
            'attributes' => 'setAttributes',
            'logtanks' => 'setLogtanks'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * topicUrn  Topic的唯一的资源标识。
    * name  创建topic的名字。
    * displayName  Topic的显示名，推送邮件消息时，作为邮件发件人显示。
    * pushPolicy  消息推送的策略，该属性目前不支持修改，后续将支持修改。0表示发送失败，保留到失败队列，1表示直接丢弃发送失败的消息。
    * enterpriseProjectId  企业项目ID。
    * topicId  主题ID。
    * createTime  创建时间。时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    * updateTime  更新时间。时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    * tags  资源标签列表。
    * attributes  attributes
    * logtanks  云日志信息列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'topicUrn' => 'getTopicUrn',
            'name' => 'getName',
            'displayName' => 'getDisplayName',
            'pushPolicy' => 'getPushPolicy',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'topicId' => 'getTopicId',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'tags' => 'getTags',
            'attributes' => 'getAttributes',
            'logtanks' => 'getLogtanks'
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
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
        $this->container['logtanks'] = isset($data['logtanks']) ? $data['logtanks'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['topicUrn'] === null) {
            $invalidProperties[] = "'topicUrn' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['displayName'] === null) {
            $invalidProperties[] = "'displayName' can't be null";
        }
        if ($this->container['pushPolicy'] === null) {
            $invalidProperties[] = "'pushPolicy' can't be null";
        }
        if ($this->container['enterpriseProjectId'] === null) {
            $invalidProperties[] = "'enterpriseProjectId' can't be null";
        }
        if ($this->container['topicId'] === null) {
            $invalidProperties[] = "'topicId' can't be null";
        }
        if ($this->container['createTime'] === null) {
            $invalidProperties[] = "'createTime' can't be null";
        }
        if ($this->container['updateTime'] === null) {
            $invalidProperties[] = "'updateTime' can't be null";
        }
        if ($this->container['tags'] === null) {
            $invalidProperties[] = "'tags' can't be null";
        }
        if ($this->container['attributes'] === null) {
            $invalidProperties[] = "'attributes' can't be null";
        }
        if ($this->container['logtanks'] === null) {
            $invalidProperties[] = "'logtanks' can't be null";
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
    * Gets topicUrn
    *  Topic的唯一的资源标识。
    *
    * @return string
    */
    public function getTopicUrn()
    {
        return $this->container['topicUrn'];
    }

    /**
    * Sets topicUrn
    *
    * @param string $topicUrn Topic的唯一的资源标识。
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
    *  创建topic的名字。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 创建topic的名字。
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
    *  Topic的显示名，推送邮件消息时，作为邮件发件人显示。
    *
    * @return string
    */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
    * Sets displayName
    *
    * @param string $displayName Topic的显示名，推送邮件消息时，作为邮件发件人显示。
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
    *  消息推送的策略，该属性目前不支持修改，后续将支持修改。0表示发送失败，保留到失败队列，1表示直接丢弃发送失败的消息。
    *
    * @return int
    */
    public function getPushPolicy()
    {
        return $this->container['pushPolicy'];
    }

    /**
    * Sets pushPolicy
    *
    * @param int $pushPolicy 消息推送的策略，该属性目前不支持修改，后续将支持修改。0表示发送失败，保留到失败队列，1表示直接丢弃发送失败的消息。
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
    *  企业项目ID。
    *
    * @return string
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string $enterpriseProjectId 企业项目ID。
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
    *  主题ID。
    *
    * @return string
    */
    public function getTopicId()
    {
        return $this->container['topicId'];
    }

    /**
    * Sets topicId
    *
    * @param string $topicId 主题ID。
    *
    * @return $this
    */
    public function setTopicId($topicId)
    {
        $this->container['topicId'] = $topicId;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间。时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    *
    * @return string
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string $createTime 创建时间。时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间。时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    *
    * @return string
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string $updateTime 更新时间。时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets tags
    *  资源标签列表。
    *
    * @return \HuaweiCloud\SDK\Smn\V2\Model\ResourceTag[]
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Smn\V2\Model\ResourceTag[] $tags 资源标签列表。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets attributes
    *  attributes
    *
    * @return \HuaweiCloud\SDK\Smn\V2\Model\TopicAccessPolicyAttribute
    */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
    * Sets attributes
    *
    * @param \HuaweiCloud\SDK\Smn\V2\Model\TopicAccessPolicyAttribute $attributes attributes
    *
    * @return $this
    */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;
        return $this;
    }

    /**
    * Gets logtanks
    *  云日志信息列表。
    *
    * @return \HuaweiCloud\SDK\Smn\V2\Model\LogtankItem[]
    */
    public function getLogtanks()
    {
        return $this->container['logtanks'];
    }

    /**
    * Sets logtanks
    *
    * @param \HuaweiCloud\SDK\Smn\V2\Model\LogtankItem[] $logtanks 云日志信息列表。
    *
    * @return $this
    */
    public function setLogtanks($logtanks)
    {
        $this->container['logtanks'] = $logtanks;
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

