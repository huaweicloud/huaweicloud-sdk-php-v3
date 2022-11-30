<?php

namespace HuaweiCloud\SDK\Smn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListTopicDetailsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListTopicDetailsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * updateTime  更新时间。时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    * pushPolicy  消息推送的策略。0表示发送失败，保留到失败队列，1表示直接丢弃发送失败的消息。
    * createTime  创建时间。时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    * name  创建Topic的名字。
    * topicUrn  Topic的唯一的资源标识。可以通过[查看主题列表获](https://support.huaweicloud.com/api-smn/smn_api_51004.html)取该标识。
    * displayName  Topic的显示名，推送邮件消息时，作为邮件发件人显示。
    * requestId  请求的唯一标识ID。
    * enterpriseProjectId  企业项目ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'updateTime' => 'string',
            'pushPolicy' => 'int',
            'createTime' => 'string',
            'name' => 'string',
            'topicUrn' => 'string',
            'displayName' => 'string',
            'requestId' => 'string',
            'enterpriseProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * updateTime  更新时间。时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    * pushPolicy  消息推送的策略。0表示发送失败，保留到失败队列，1表示直接丢弃发送失败的消息。
    * createTime  创建时间。时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    * name  创建Topic的名字。
    * topicUrn  Topic的唯一的资源标识。可以通过[查看主题列表获](https://support.huaweicloud.com/api-smn/smn_api_51004.html)取该标识。
    * displayName  Topic的显示名，推送邮件消息时，作为邮件发件人显示。
    * requestId  请求的唯一标识ID。
    * enterpriseProjectId  企业项目ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'updateTime' => null,
        'pushPolicy' => null,
        'createTime' => null,
        'name' => null,
        'topicUrn' => null,
        'displayName' => null,
        'requestId' => null,
        'enterpriseProjectId' => null
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
    * updateTime  更新时间。时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    * pushPolicy  消息推送的策略。0表示发送失败，保留到失败队列，1表示直接丢弃发送失败的消息。
    * createTime  创建时间。时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    * name  创建Topic的名字。
    * topicUrn  Topic的唯一的资源标识。可以通过[查看主题列表获](https://support.huaweicloud.com/api-smn/smn_api_51004.html)取该标识。
    * displayName  Topic的显示名，推送邮件消息时，作为邮件发件人显示。
    * requestId  请求的唯一标识ID。
    * enterpriseProjectId  企业项目ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'updateTime' => 'update_time',
            'pushPolicy' => 'push_policy',
            'createTime' => 'create_time',
            'name' => 'name',
            'topicUrn' => 'topic_urn',
            'displayName' => 'display_name',
            'requestId' => 'request_id',
            'enterpriseProjectId' => 'enterprise_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * updateTime  更新时间。时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    * pushPolicy  消息推送的策略。0表示发送失败，保留到失败队列，1表示直接丢弃发送失败的消息。
    * createTime  创建时间。时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    * name  创建Topic的名字。
    * topicUrn  Topic的唯一的资源标识。可以通过[查看主题列表获](https://support.huaweicloud.com/api-smn/smn_api_51004.html)取该标识。
    * displayName  Topic的显示名，推送邮件消息时，作为邮件发件人显示。
    * requestId  请求的唯一标识ID。
    * enterpriseProjectId  企业项目ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'updateTime' => 'setUpdateTime',
            'pushPolicy' => 'setPushPolicy',
            'createTime' => 'setCreateTime',
            'name' => 'setName',
            'topicUrn' => 'setTopicUrn',
            'displayName' => 'setDisplayName',
            'requestId' => 'setRequestId',
            'enterpriseProjectId' => 'setEnterpriseProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * updateTime  更新时间。时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    * pushPolicy  消息推送的策略。0表示发送失败，保留到失败队列，1表示直接丢弃发送失败的消息。
    * createTime  创建时间。时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    * name  创建Topic的名字。
    * topicUrn  Topic的唯一的资源标识。可以通过[查看主题列表获](https://support.huaweicloud.com/api-smn/smn_api_51004.html)取该标识。
    * displayName  Topic的显示名，推送邮件消息时，作为邮件发件人显示。
    * requestId  请求的唯一标识ID。
    * enterpriseProjectId  企业项目ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'updateTime' => 'getUpdateTime',
            'pushPolicy' => 'getPushPolicy',
            'createTime' => 'getCreateTime',
            'name' => 'getName',
            'topicUrn' => 'getTopicUrn',
            'displayName' => 'getDisplayName',
            'requestId' => 'getRequestId',
            'enterpriseProjectId' => 'getEnterpriseProjectId'
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
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['pushPolicy'] = isset($data['pushPolicy']) ? $data['pushPolicy'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['topicUrn'] = isset($data['topicUrn']) ? $data['topicUrn'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['requestId'] = isset($data['requestId']) ? $data['requestId'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
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
    * Gets updateTime
    *  更新时间。时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime 更新时间。时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets pushPolicy
    *  消息推送的策略。0表示发送失败，保留到失败队列，1表示直接丢弃发送失败的消息。
    *
    * @return int|null
    */
    public function getPushPolicy()
    {
        return $this->container['pushPolicy'];
    }

    /**
    * Sets pushPolicy
    *
    * @param int|null $pushPolicy 消息推送的策略。0表示发送失败，保留到失败队列，1表示直接丢弃发送失败的消息。
    *
    * @return $this
    */
    public function setPushPolicy($pushPolicy)
    {
        $this->container['pushPolicy'] = $pushPolicy;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间。时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 创建时间。时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets name
    *  创建Topic的名字。
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
    * @param string|null $name 创建Topic的名字。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets topicUrn
    *  Topic的唯一的资源标识。可以通过[查看主题列表获](https://support.huaweicloud.com/api-smn/smn_api_51004.html)取该标识。
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
    * @param string|null $topicUrn Topic的唯一的资源标识。可以通过[查看主题列表获](https://support.huaweicloud.com/api-smn/smn_api_51004.html)取该标识。
    *
    * @return $this
    */
    public function setTopicUrn($topicUrn)
    {
        $this->container['topicUrn'] = $topicUrn;
        return $this;
    }

    /**
    * Gets displayName
    *  Topic的显示名，推送邮件消息时，作为邮件发件人显示。
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
    * @param string|null $displayName Topic的显示名，推送邮件消息时，作为邮件发件人显示。
    *
    * @return $this
    */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;
        return $this;
    }

    /**
    * Gets requestId
    *  请求的唯一标识ID。
    *
    * @return string|null
    */
    public function getRequestId()
    {
        return $this->container['requestId'];
    }

    /**
    * Sets requestId
    *
    * @param string|null $requestId 请求的唯一标识ID。
    *
    * @return $this
    */
    public function setRequestId($requestId)
    {
        $this->container['requestId'] = $requestId;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID。
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
    * @param string|null $enterpriseProjectId 企业项目ID。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
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

