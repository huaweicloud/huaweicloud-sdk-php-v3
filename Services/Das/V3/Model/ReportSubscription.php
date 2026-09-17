<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ReportSubscription implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ReportSubscription';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * subscribeId  订阅ID
    * instanceId  实例ID
    * projectId  租户在某一Region下的项目ID
    * protocol  协议
    * endpoint  地址
    * topic  主题
    * topicUrn  主题地址
    * obsBucketName  桶名
    * level  风险等级
    * locale  语言
    * extra  额外信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'subscribeId' => 'string',
            'instanceId' => 'string',
            'projectId' => 'string',
            'protocol' => 'string',
            'endpoint' => 'string',
            'topic' => 'string',
            'topicUrn' => 'string',
            'obsBucketName' => 'string',
            'level' => 'string',
            'locale' => 'string',
            'extra' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * subscribeId  订阅ID
    * instanceId  实例ID
    * projectId  租户在某一Region下的项目ID
    * protocol  协议
    * endpoint  地址
    * topic  主题
    * topicUrn  主题地址
    * obsBucketName  桶名
    * level  风险等级
    * locale  语言
    * extra  额外信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'subscribeId' => null,
        'instanceId' => null,
        'projectId' => null,
        'protocol' => null,
        'endpoint' => null,
        'topic' => null,
        'topicUrn' => null,
        'obsBucketName' => null,
        'level' => null,
        'locale' => null,
        'extra' => null
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
    * subscribeId  订阅ID
    * instanceId  实例ID
    * projectId  租户在某一Region下的项目ID
    * protocol  协议
    * endpoint  地址
    * topic  主题
    * topicUrn  主题地址
    * obsBucketName  桶名
    * level  风险等级
    * locale  语言
    * extra  额外信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'subscribeId' => 'subscribe_id',
            'instanceId' => 'instance_id',
            'projectId' => 'project_id',
            'protocol' => 'protocol',
            'endpoint' => 'endpoint',
            'topic' => 'topic',
            'topicUrn' => 'topic_urn',
            'obsBucketName' => 'obs_bucket_name',
            'level' => 'level',
            'locale' => 'locale',
            'extra' => 'extra'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * subscribeId  订阅ID
    * instanceId  实例ID
    * projectId  租户在某一Region下的项目ID
    * protocol  协议
    * endpoint  地址
    * topic  主题
    * topicUrn  主题地址
    * obsBucketName  桶名
    * level  风险等级
    * locale  语言
    * extra  额外信息
    *
    * @var string[]
    */
    protected static $setters = [
            'subscribeId' => 'setSubscribeId',
            'instanceId' => 'setInstanceId',
            'projectId' => 'setProjectId',
            'protocol' => 'setProtocol',
            'endpoint' => 'setEndpoint',
            'topic' => 'setTopic',
            'topicUrn' => 'setTopicUrn',
            'obsBucketName' => 'setObsBucketName',
            'level' => 'setLevel',
            'locale' => 'setLocale',
            'extra' => 'setExtra'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * subscribeId  订阅ID
    * instanceId  实例ID
    * projectId  租户在某一Region下的项目ID
    * protocol  协议
    * endpoint  地址
    * topic  主题
    * topicUrn  主题地址
    * obsBucketName  桶名
    * level  风险等级
    * locale  语言
    * extra  额外信息
    *
    * @var string[]
    */
    protected static $getters = [
            'subscribeId' => 'getSubscribeId',
            'instanceId' => 'getInstanceId',
            'projectId' => 'getProjectId',
            'protocol' => 'getProtocol',
            'endpoint' => 'getEndpoint',
            'topic' => 'getTopic',
            'topicUrn' => 'getTopicUrn',
            'obsBucketName' => 'getObsBucketName',
            'level' => 'getLevel',
            'locale' => 'getLocale',
            'extra' => 'getExtra'
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
        $this->container['subscribeId'] = isset($data['subscribeId']) ? $data['subscribeId'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['endpoint'] = isset($data['endpoint']) ? $data['endpoint'] : null;
        $this->container['topic'] = isset($data['topic']) ? $data['topic'] : null;
        $this->container['topicUrn'] = isset($data['topicUrn']) ? $data['topicUrn'] : null;
        $this->container['obsBucketName'] = isset($data['obsBucketName']) ? $data['obsBucketName'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
        $this->container['extra'] = isset($data['extra']) ? $data['extra'] : null;
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
    * Gets subscribeId
    *  订阅ID
    *
    * @return string|null
    */
    public function getSubscribeId()
    {
        return $this->container['subscribeId'];
    }

    /**
    * Sets subscribeId
    *
    * @param string|null $subscribeId 订阅ID
    *
    * @return $this
    */
    public function setSubscribeId($subscribeId)
    {
        $this->container['subscribeId'] = $subscribeId;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例ID
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 实例ID
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets projectId
    *  租户在某一Region下的项目ID
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
    * @param string|null $projectId 租户在某一Region下的项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets protocol
    *  协议
    *
    * @return string|null
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param string|null $protocol 协议
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets endpoint
    *  地址
    *
    * @return string|null
    */
    public function getEndpoint()
    {
        return $this->container['endpoint'];
    }

    /**
    * Sets endpoint
    *
    * @param string|null $endpoint 地址
    *
    * @return $this
    */
    public function setEndpoint($endpoint)
    {
        $this->container['endpoint'] = $endpoint;
        return $this;
    }

    /**
    * Gets topic
    *  主题
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
    * @param string|null $topic 主题
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
    *  主题地址
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
    * @param string|null $topicUrn 主题地址
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
    *  桶名
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
    * @param string|null $obsBucketName 桶名
    *
    * @return $this
    */
    public function setObsBucketName($obsBucketName)
    {
        $this->container['obsBucketName'] = $obsBucketName;
        return $this;
    }

    /**
    * Gets level
    *  风险等级
    *
    * @return string|null
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param string|null $level 风险等级
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets locale
    *  语言
    *
    * @return string|null
    */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
    * Sets locale
    *
    * @param string|null $locale 语言
    *
    * @return $this
    */
    public function setLocale($locale)
    {
        $this->container['locale'] = $locale;
        return $this;
    }

    /**
    * Gets extra
    *  额外信息
    *
    * @return object|null
    */
    public function getExtra()
    {
        return $this->container['extra'];
    }

    /**
    * Sets extra
    *
    * @param object|null $extra 额外信息
    *
    * @return $this
    */
    public function setExtra($extra)
    {
        $this->container['extra'] = $extra;
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

