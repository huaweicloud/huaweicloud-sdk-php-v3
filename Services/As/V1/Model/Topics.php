<?php

namespace HuaweiCloud\SDK\_As\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Topics implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Topics';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * topicUrn  SMN服务中Topic的唯一的资源标识。
    * topicScene  通知场景，有以下五种类型。SCALING_UP：扩容成功。SCALING_UP_FAIL：扩容失败。SCALING_DOWN：减容成功。SCALING_DOWN_FAIL：减容失败。SCALING_GROUP_ABNORMAL：伸缩组发生异常
    * topicName  SMN服务中Topic的资源名称。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'topicUrn' => 'string',
            'topicScene' => 'string[]',
            'topicName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * topicUrn  SMN服务中Topic的唯一的资源标识。
    * topicScene  通知场景，有以下五种类型。SCALING_UP：扩容成功。SCALING_UP_FAIL：扩容失败。SCALING_DOWN：减容成功。SCALING_DOWN_FAIL：减容失败。SCALING_GROUP_ABNORMAL：伸缩组发生异常
    * topicName  SMN服务中Topic的资源名称。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'topicUrn' => null,
        'topicScene' => null,
        'topicName' => null
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
    * topicUrn  SMN服务中Topic的唯一的资源标识。
    * topicScene  通知场景，有以下五种类型。SCALING_UP：扩容成功。SCALING_UP_FAIL：扩容失败。SCALING_DOWN：减容成功。SCALING_DOWN_FAIL：减容失败。SCALING_GROUP_ABNORMAL：伸缩组发生异常
    * topicName  SMN服务中Topic的资源名称。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'topicUrn' => 'topic_urn',
            'topicScene' => 'topic_scene',
            'topicName' => 'topic_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * topicUrn  SMN服务中Topic的唯一的资源标识。
    * topicScene  通知场景，有以下五种类型。SCALING_UP：扩容成功。SCALING_UP_FAIL：扩容失败。SCALING_DOWN：减容成功。SCALING_DOWN_FAIL：减容失败。SCALING_GROUP_ABNORMAL：伸缩组发生异常
    * topicName  SMN服务中Topic的资源名称。
    *
    * @var string[]
    */
    protected static $setters = [
            'topicUrn' => 'setTopicUrn',
            'topicScene' => 'setTopicScene',
            'topicName' => 'setTopicName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * topicUrn  SMN服务中Topic的唯一的资源标识。
    * topicScene  通知场景，有以下五种类型。SCALING_UP：扩容成功。SCALING_UP_FAIL：扩容失败。SCALING_DOWN：减容成功。SCALING_DOWN_FAIL：减容失败。SCALING_GROUP_ABNORMAL：伸缩组发生异常
    * topicName  SMN服务中Topic的资源名称。
    *
    * @var string[]
    */
    protected static $getters = [
            'topicUrn' => 'getTopicUrn',
            'topicScene' => 'getTopicScene',
            'topicName' => 'getTopicName'
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
        $this->container['topicScene'] = isset($data['topicScene']) ? $data['topicScene'] : null;
        $this->container['topicName'] = isset($data['topicName']) ? $data['topicName'] : null;
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
    *  SMN服务中Topic的唯一的资源标识。
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
    * @param string|null $topicUrn SMN服务中Topic的唯一的资源标识。
    *
    * @return $this
    */
    public function setTopicUrn($topicUrn)
    {
        $this->container['topicUrn'] = $topicUrn;
        return $this;
    }

    /**
    * Gets topicScene
    *  通知场景，有以下五种类型。SCALING_UP：扩容成功。SCALING_UP_FAIL：扩容失败。SCALING_DOWN：减容成功。SCALING_DOWN_FAIL：减容失败。SCALING_GROUP_ABNORMAL：伸缩组发生异常
    *
    * @return string[]|null
    */
    public function getTopicScene()
    {
        return $this->container['topicScene'];
    }

    /**
    * Sets topicScene
    *
    * @param string[]|null $topicScene 通知场景，有以下五种类型。SCALING_UP：扩容成功。SCALING_UP_FAIL：扩容失败。SCALING_DOWN：减容成功。SCALING_DOWN_FAIL：减容失败。SCALING_GROUP_ABNORMAL：伸缩组发生异常
    *
    * @return $this
    */
    public function setTopicScene($topicScene)
    {
        $this->container['topicScene'] = $topicScene;
        return $this;
    }

    /**
    * Gets topicName
    *  SMN服务中Topic的资源名称。
    *
    * @return string|null
    */
    public function getTopicName()
    {
        return $this->container['topicName'];
    }

    /**
    * Sets topicName
    *
    * @param string|null $topicName SMN服务中Topic的资源名称。
    *
    * @return $this
    */
    public function setTopicName($topicName)
    {
        $this->container['topicName'] = $topicName;
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

