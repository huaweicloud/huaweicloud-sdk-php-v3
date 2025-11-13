<?php

namespace HuaweiCloud\SDK\Dns\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResolverQueryLogConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResolverQueryLogConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  解析器访问日志的ID，UUID形式的一个资源标识。
    * ltsGroupId  日志组ID。
    * ltsTopicId  日志流ID。
    * vpcIds  关联的VPC ID列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'ltsGroupId' => 'string',
            'ltsTopicId' => 'string',
            'vpcIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  解析器访问日志的ID，UUID形式的一个资源标识。
    * ltsGroupId  日志组ID。
    * ltsTopicId  日志流ID。
    * vpcIds  关联的VPC ID列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'ltsGroupId' => null,
        'ltsTopicId' => null,
        'vpcIds' => null
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
    * id  解析器访问日志的ID，UUID形式的一个资源标识。
    * ltsGroupId  日志组ID。
    * ltsTopicId  日志流ID。
    * vpcIds  关联的VPC ID列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'ltsGroupId' => 'lts_group_id',
            'ltsTopicId' => 'lts_topic_id',
            'vpcIds' => 'vpc_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  解析器访问日志的ID，UUID形式的一个资源标识。
    * ltsGroupId  日志组ID。
    * ltsTopicId  日志流ID。
    * vpcIds  关联的VPC ID列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'ltsGroupId' => 'setLtsGroupId',
            'ltsTopicId' => 'setLtsTopicId',
            'vpcIds' => 'setVpcIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  解析器访问日志的ID，UUID形式的一个资源标识。
    * ltsGroupId  日志组ID。
    * ltsTopicId  日志流ID。
    * vpcIds  关联的VPC ID列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'ltsGroupId' => 'getLtsGroupId',
            'ltsTopicId' => 'getLtsTopicId',
            'vpcIds' => 'getVpcIds'
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
        $this->container['ltsGroupId'] = isset($data['ltsGroupId']) ? $data['ltsGroupId'] : null;
        $this->container['ltsTopicId'] = isset($data['ltsTopicId']) ? $data['ltsTopicId'] : null;
        $this->container['vpcIds'] = isset($data['vpcIds']) ? $data['vpcIds'] : null;
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
    *  解析器访问日志的ID，UUID形式的一个资源标识。
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
    * @param string|null $id 解析器访问日志的ID，UUID形式的一个资源标识。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets ltsGroupId
    *  日志组ID。
    *
    * @return string|null
    */
    public function getLtsGroupId()
    {
        return $this->container['ltsGroupId'];
    }

    /**
    * Sets ltsGroupId
    *
    * @param string|null $ltsGroupId 日志组ID。
    *
    * @return $this
    */
    public function setLtsGroupId($ltsGroupId)
    {
        $this->container['ltsGroupId'] = $ltsGroupId;
        return $this;
    }

    /**
    * Gets ltsTopicId
    *  日志流ID。
    *
    * @return string|null
    */
    public function getLtsTopicId()
    {
        return $this->container['ltsTopicId'];
    }

    /**
    * Sets ltsTopicId
    *
    * @param string|null $ltsTopicId 日志流ID。
    *
    * @return $this
    */
    public function setLtsTopicId($ltsTopicId)
    {
        $this->container['ltsTopicId'] = $ltsTopicId;
        return $this;
    }

    /**
    * Gets vpcIds
    *  关联的VPC ID列表。
    *
    * @return string[]|null
    */
    public function getVpcIds()
    {
        return $this->container['vpcIds'];
    }

    /**
    * Sets vpcIds
    *
    * @param string[]|null $vpcIds 关联的VPC ID列表。
    *
    * @return $this
    */
    public function setVpcIds($vpcIds)
    {
        $this->container['vpcIds'] = $vpcIds;
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

