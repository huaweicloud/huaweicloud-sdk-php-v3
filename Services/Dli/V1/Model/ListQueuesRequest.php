<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListQueuesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListQueuesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * queueType  队列的类型,。有如下三种类型： sql general all 如果不指定，默认为sql。
    * tags  查询根据标签进行过滤
    * withChargeInfo  是否返回收费信息
    * withPriv  是否返回权限信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'queueType' => 'string',
            'tags' => 'string',
            'withChargeInfo' => 'bool',
            'withPriv' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * queueType  队列的类型,。有如下三种类型： sql general all 如果不指定，默认为sql。
    * tags  查询根据标签进行过滤
    * withChargeInfo  是否返回收费信息
    * withPriv  是否返回权限信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'queueType' => null,
        'tags' => null,
        'withChargeInfo' => null,
        'withPriv' => null
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
    * queueType  队列的类型,。有如下三种类型： sql general all 如果不指定，默认为sql。
    * tags  查询根据标签进行过滤
    * withChargeInfo  是否返回收费信息
    * withPriv  是否返回权限信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'queueType' => 'queue_type',
            'tags' => 'tags',
            'withChargeInfo' => 'with-charge-info',
            'withPriv' => 'with-priv'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * queueType  队列的类型,。有如下三种类型： sql general all 如果不指定，默认为sql。
    * tags  查询根据标签进行过滤
    * withChargeInfo  是否返回收费信息
    * withPriv  是否返回权限信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'queueType' => 'setQueueType',
            'tags' => 'setTags',
            'withChargeInfo' => 'setWithChargeInfo',
            'withPriv' => 'setWithPriv'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * queueType  队列的类型,。有如下三种类型： sql general all 如果不指定，默认为sql。
    * tags  查询根据标签进行过滤
    * withChargeInfo  是否返回收费信息
    * withPriv  是否返回权限信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'queueType' => 'getQueueType',
            'tags' => 'getTags',
            'withChargeInfo' => 'getWithChargeInfo',
            'withPriv' => 'getWithPriv'
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
        $this->container['queueType'] = isset($data['queueType']) ? $data['queueType'] : 'sql';
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['withChargeInfo'] = isset($data['withChargeInfo']) ? $data['withChargeInfo'] : null;
        $this->container['withPriv'] = isset($data['withPriv']) ? $data['withPriv'] : null;
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
    * Gets queueType
    *  队列的类型,。有如下三种类型： sql general all 如果不指定，默认为sql。
    *
    * @return string|null
    */
    public function getQueueType()
    {
        return $this->container['queueType'];
    }

    /**
    * Sets queueType
    *
    * @param string|null $queueType 队列的类型,。有如下三种类型： sql general all 如果不指定，默认为sql。
    *
    * @return $this
    */
    public function setQueueType($queueType)
    {
        $this->container['queueType'] = $queueType;
        return $this;
    }

    /**
    * Gets tags
    *  查询根据标签进行过滤
    *
    * @return string|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param string|null $tags 查询根据标签进行过滤
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets withChargeInfo
    *  是否返回收费信息
    *
    * @return bool|null
    */
    public function getWithChargeInfo()
    {
        return $this->container['withChargeInfo'];
    }

    /**
    * Sets withChargeInfo
    *
    * @param bool|null $withChargeInfo 是否返回收费信息
    *
    * @return $this
    */
    public function setWithChargeInfo($withChargeInfo)
    {
        $this->container['withChargeInfo'] = $withChargeInfo;
        return $this;
    }

    /**
    * Gets withPriv
    *  是否返回权限信息。
    *
    * @return bool|null
    */
    public function getWithPriv()
    {
        return $this->container['withPriv'];
    }

    /**
    * Sets withPriv
    *
    * @param bool|null $withPriv 是否返回权限信息。
    *
    * @return $this
    */
    public function setWithPriv($withPriv)
    {
        $this->container['withPriv'] = $withPriv;
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

