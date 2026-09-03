<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SubscribeInstanceReportNewRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SubscribeInstanceReportNewRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * protocol  协议
    * endpoint  地址
    * topic  主题
    * topicUrn  主题地址
    * bucketName  桶名
    * level  风险等级
    * serviceUri  服务URI
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'protocol' => 'string',
            'endpoint' => 'string',
            'topic' => 'string',
            'topicUrn' => 'string',
            'bucketName' => 'string',
            'level' => 'string',
            'serviceUri' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * protocol  协议
    * endpoint  地址
    * topic  主题
    * topicUrn  主题地址
    * bucketName  桶名
    * level  风险等级
    * serviceUri  服务URI
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'protocol' => null,
        'endpoint' => null,
        'topic' => null,
        'topicUrn' => null,
        'bucketName' => null,
        'level' => null,
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
    * protocol  协议
    * endpoint  地址
    * topic  主题
    * topicUrn  主题地址
    * bucketName  桶名
    * level  风险等级
    * serviceUri  服务URI
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'protocol' => 'protocol',
            'endpoint' => 'endpoint',
            'topic' => 'topic',
            'topicUrn' => 'topic_urn',
            'bucketName' => 'bucket_name',
            'level' => 'level',
            'serviceUri' => 'service_uri'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * protocol  协议
    * endpoint  地址
    * topic  主题
    * topicUrn  主题地址
    * bucketName  桶名
    * level  风险等级
    * serviceUri  服务URI
    *
    * @var string[]
    */
    protected static $setters = [
            'protocol' => 'setProtocol',
            'endpoint' => 'setEndpoint',
            'topic' => 'setTopic',
            'topicUrn' => 'setTopicUrn',
            'bucketName' => 'setBucketName',
            'level' => 'setLevel',
            'serviceUri' => 'setServiceUri'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * protocol  协议
    * endpoint  地址
    * topic  主题
    * topicUrn  主题地址
    * bucketName  桶名
    * level  风险等级
    * serviceUri  服务URI
    *
    * @var string[]
    */
    protected static $getters = [
            'protocol' => 'getProtocol',
            'endpoint' => 'getEndpoint',
            'topic' => 'getTopic',
            'topicUrn' => 'getTopicUrn',
            'bucketName' => 'getBucketName',
            'level' => 'getLevel',
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
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['endpoint'] = isset($data['endpoint']) ? $data['endpoint'] : null;
        $this->container['topic'] = isset($data['topic']) ? $data['topic'] : null;
        $this->container['topicUrn'] = isset($data['topicUrn']) ? $data['topicUrn'] : null;
        $this->container['bucketName'] = isset($data['bucketName']) ? $data['bucketName'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
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
        if ($this->container['protocol'] === null) {
            $invalidProperties[] = "'protocol' can't be null";
        }
        if ($this->container['endpoint'] === null) {
            $invalidProperties[] = "'endpoint' can't be null";
        }
        if ($this->container['topic'] === null) {
            $invalidProperties[] = "'topic' can't be null";
        }
        if ($this->container['topicUrn'] === null) {
            $invalidProperties[] = "'topicUrn' can't be null";
        }
        if ($this->container['level'] === null) {
            $invalidProperties[] = "'level' can't be null";
        }
        if ($this->container['serviceUri'] === null) {
            $invalidProperties[] = "'serviceUri' can't be null";
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
    * Gets protocol
    *  协议
    *
    * @return string
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param string $protocol 协议
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
    * @return string
    */
    public function getEndpoint()
    {
        return $this->container['endpoint'];
    }

    /**
    * Sets endpoint
    *
    * @param string $endpoint 地址
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
    * @return string
    */
    public function getTopic()
    {
        return $this->container['topic'];
    }

    /**
    * Sets topic
    *
    * @param string $topic 主题
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
    * @return string
    */
    public function getTopicUrn()
    {
        return $this->container['topicUrn'];
    }

    /**
    * Sets topicUrn
    *
    * @param string $topicUrn 主题地址
    *
    * @return $this
    */
    public function setTopicUrn($topicUrn)
    {
        $this->container['topicUrn'] = $topicUrn;
        return $this;
    }

    /**
    * Gets bucketName
    *  桶名
    *
    * @return string|null
    */
    public function getBucketName()
    {
        return $this->container['bucketName'];
    }

    /**
    * Sets bucketName
    *
    * @param string|null $bucketName 桶名
    *
    * @return $this
    */
    public function setBucketName($bucketName)
    {
        $this->container['bucketName'] = $bucketName;
        return $this;
    }

    /**
    * Gets level
    *  风险等级
    *
    * @return string
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param string $level 风险等级
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets serviceUri
    *  服务URI
    *
    * @return string
    */
    public function getServiceUri()
    {
        return $this->container['serviceUri'];
    }

    /**
    * Sets serviceUri
    *
    * @param string $serviceUri 服务URI
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

