<?php

namespace HuaweiCloud\SDK\RocketMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MigrationRocketMqTopicConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MigrationRocketMqTopicConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * topicName  topic名称。
    * order  是否有序消息。
    * perm  topic权限。
    * readQueueNums  读队列个数。
    * writeQueueNums  写队列个数。
    * topicFilterType  topic过滤类型。   - SINGLE_TAG：单标签   - MULTI_TAG：多标签
    * topicSysFlag  topic系统标志位。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'topicName' => 'string',
            'order' => 'bool',
            'perm' => 'int',
            'readQueueNums' => 'int',
            'writeQueueNums' => 'int',
            'topicFilterType' => 'string',
            'topicSysFlag' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * topicName  topic名称。
    * order  是否有序消息。
    * perm  topic权限。
    * readQueueNums  读队列个数。
    * writeQueueNums  写队列个数。
    * topicFilterType  topic过滤类型。   - SINGLE_TAG：单标签   - MULTI_TAG：多标签
    * topicSysFlag  topic系统标志位。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'topicName' => null,
        'order' => null,
        'perm' => 'int32',
        'readQueueNums' => 'int32',
        'writeQueueNums' => 'int32',
        'topicFilterType' => null,
        'topicSysFlag' => 'int32'
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
    * topicName  topic名称。
    * order  是否有序消息。
    * perm  topic权限。
    * readQueueNums  读队列个数。
    * writeQueueNums  写队列个数。
    * topicFilterType  topic过滤类型。   - SINGLE_TAG：单标签   - MULTI_TAG：多标签
    * topicSysFlag  topic系统标志位。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'topicName' => 'topicName',
            'order' => 'order',
            'perm' => 'perm',
            'readQueueNums' => 'readQueueNums',
            'writeQueueNums' => 'writeQueueNums',
            'topicFilterType' => 'topicFilterType',
            'topicSysFlag' => 'topicSysFlag'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * topicName  topic名称。
    * order  是否有序消息。
    * perm  topic权限。
    * readQueueNums  读队列个数。
    * writeQueueNums  写队列个数。
    * topicFilterType  topic过滤类型。   - SINGLE_TAG：单标签   - MULTI_TAG：多标签
    * topicSysFlag  topic系统标志位。
    *
    * @var string[]
    */
    protected static $setters = [
            'topicName' => 'setTopicName',
            'order' => 'setOrder',
            'perm' => 'setPerm',
            'readQueueNums' => 'setReadQueueNums',
            'writeQueueNums' => 'setWriteQueueNums',
            'topicFilterType' => 'setTopicFilterType',
            'topicSysFlag' => 'setTopicSysFlag'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * topicName  topic名称。
    * order  是否有序消息。
    * perm  topic权限。
    * readQueueNums  读队列个数。
    * writeQueueNums  写队列个数。
    * topicFilterType  topic过滤类型。   - SINGLE_TAG：单标签   - MULTI_TAG：多标签
    * topicSysFlag  topic系统标志位。
    *
    * @var string[]
    */
    protected static $getters = [
            'topicName' => 'getTopicName',
            'order' => 'getOrder',
            'perm' => 'getPerm',
            'readQueueNums' => 'getReadQueueNums',
            'writeQueueNums' => 'getWriteQueueNums',
            'topicFilterType' => 'getTopicFilterType',
            'topicSysFlag' => 'getTopicSysFlag'
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
        $this->container['topicName'] = isset($data['topicName']) ? $data['topicName'] : null;
        $this->container['order'] = isset($data['order']) ? $data['order'] : null;
        $this->container['perm'] = isset($data['perm']) ? $data['perm'] : null;
        $this->container['readQueueNums'] = isset($data['readQueueNums']) ? $data['readQueueNums'] : null;
        $this->container['writeQueueNums'] = isset($data['writeQueueNums']) ? $data['writeQueueNums'] : null;
        $this->container['topicFilterType'] = isset($data['topicFilterType']) ? $data['topicFilterType'] : null;
        $this->container['topicSysFlag'] = isset($data['topicSysFlag']) ? $data['topicSysFlag'] : null;
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
    * Gets topicName
    *  topic名称。
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
    * @param string|null $topicName topic名称。
    *
    * @return $this
    */
    public function setTopicName($topicName)
    {
        $this->container['topicName'] = $topicName;
        return $this;
    }

    /**
    * Gets order
    *  是否有序消息。
    *
    * @return bool|null
    */
    public function getOrder()
    {
        return $this->container['order'];
    }

    /**
    * Sets order
    *
    * @param bool|null $order 是否有序消息。
    *
    * @return $this
    */
    public function setOrder($order)
    {
        $this->container['order'] = $order;
        return $this;
    }

    /**
    * Gets perm
    *  topic权限。
    *
    * @return int|null
    */
    public function getPerm()
    {
        return $this->container['perm'];
    }

    /**
    * Sets perm
    *
    * @param int|null $perm topic权限。
    *
    * @return $this
    */
    public function setPerm($perm)
    {
        $this->container['perm'] = $perm;
        return $this;
    }

    /**
    * Gets readQueueNums
    *  读队列个数。
    *
    * @return int|null
    */
    public function getReadQueueNums()
    {
        return $this->container['readQueueNums'];
    }

    /**
    * Sets readQueueNums
    *
    * @param int|null $readQueueNums 读队列个数。
    *
    * @return $this
    */
    public function setReadQueueNums($readQueueNums)
    {
        $this->container['readQueueNums'] = $readQueueNums;
        return $this;
    }

    /**
    * Gets writeQueueNums
    *  写队列个数。
    *
    * @return int|null
    */
    public function getWriteQueueNums()
    {
        return $this->container['writeQueueNums'];
    }

    /**
    * Sets writeQueueNums
    *
    * @param int|null $writeQueueNums 写队列个数。
    *
    * @return $this
    */
    public function setWriteQueueNums($writeQueueNums)
    {
        $this->container['writeQueueNums'] = $writeQueueNums;
        return $this;
    }

    /**
    * Gets topicFilterType
    *  topic过滤类型。   - SINGLE_TAG：单标签   - MULTI_TAG：多标签
    *
    * @return string|null
    */
    public function getTopicFilterType()
    {
        return $this->container['topicFilterType'];
    }

    /**
    * Sets topicFilterType
    *
    * @param string|null $topicFilterType topic过滤类型。   - SINGLE_TAG：单标签   - MULTI_TAG：多标签
    *
    * @return $this
    */
    public function setTopicFilterType($topicFilterType)
    {
        $this->container['topicFilterType'] = $topicFilterType;
        return $this;
    }

    /**
    * Gets topicSysFlag
    *  topic系统标志位。
    *
    * @return int|null
    */
    public function getTopicSysFlag()
    {
        return $this->container['topicSysFlag'];
    }

    /**
    * Sets topicSysFlag
    *
    * @param int|null $topicSysFlag topic系统标志位。
    *
    * @return $this
    */
    public function setTopicSysFlag($topicSysFlag)
    {
        $this->container['topicSysFlag'] = $topicSysFlag;
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

