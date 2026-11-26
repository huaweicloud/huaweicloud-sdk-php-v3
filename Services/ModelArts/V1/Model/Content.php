<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Content implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Content';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * owner  owner
    * etag  **参数解释**：对象的base64编码的128位MD5摘要。ETag是对象内容的唯一标识，可以通过该值识别对象内容是否有变化。比如上传对象时ETag为A，下载对象时ETag为B，则说明对象内容发生了变化。实际的ETag是对象的哈希值。ETag只反映变化的内容，而不是其元数据。上传的对象或拷贝操作创建的对象，通过MD5加密后都有唯一的ETag。 **约束限制**：当对象是服务端加密的对象时，ETag值不是对象的MD5值，而是通过服务端加密计算出的唯一标识。 **取值范围**：长度为32的字符串。
    * type  **参数解释**：对象类型。 **约束限制**：非Normal对象时返回。 **取值范围**：不涉及。
    * key  **参数解释**：对象名。对象名是对象在存储桶中的唯一标识。对象名是对象在桶中的完整路径，路径中不包含桶名。 **取值范围**：长度大于0且不超过1024的字符串。
    * lastModified  **参数解释**：对象最近一次被修改的时间（UTC时间）。 **约束限制**：日期格式为ISO8601的格式。 **取值范围**：不涉及。
    * size  **参数解释**：对象的字节数。 **取值范围**：0~48.8TB，单位：字节。
    * storageClass  **参数解释**：对象的存储类型。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'owner' => '\HuaweiCloud\SDK\ModelArts\V1\Model\Owner',
            'etag' => 'string',
            'type' => 'string',
            'key' => 'string',
            'lastModified' => 'string',
            'size' => 'int',
            'storageClass' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * owner  owner
    * etag  **参数解释**：对象的base64编码的128位MD5摘要。ETag是对象内容的唯一标识，可以通过该值识别对象内容是否有变化。比如上传对象时ETag为A，下载对象时ETag为B，则说明对象内容发生了变化。实际的ETag是对象的哈希值。ETag只反映变化的内容，而不是其元数据。上传的对象或拷贝操作创建的对象，通过MD5加密后都有唯一的ETag。 **约束限制**：当对象是服务端加密的对象时，ETag值不是对象的MD5值，而是通过服务端加密计算出的唯一标识。 **取值范围**：长度为32的字符串。
    * type  **参数解释**：对象类型。 **约束限制**：非Normal对象时返回。 **取值范围**：不涉及。
    * key  **参数解释**：对象名。对象名是对象在存储桶中的唯一标识。对象名是对象在桶中的完整路径，路径中不包含桶名。 **取值范围**：长度大于0且不超过1024的字符串。
    * lastModified  **参数解释**：对象最近一次被修改的时间（UTC时间）。 **约束限制**：日期格式为ISO8601的格式。 **取值范围**：不涉及。
    * size  **参数解释**：对象的字节数。 **取值范围**：0~48.8TB，单位：字节。
    * storageClass  **参数解释**：对象的存储类型。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'owner' => null,
        'etag' => null,
        'type' => null,
        'key' => null,
        'lastModified' => null,
        'size' => 'int64',
        'storageClass' => null
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
    * owner  owner
    * etag  **参数解释**：对象的base64编码的128位MD5摘要。ETag是对象内容的唯一标识，可以通过该值识别对象内容是否有变化。比如上传对象时ETag为A，下载对象时ETag为B，则说明对象内容发生了变化。实际的ETag是对象的哈希值。ETag只反映变化的内容，而不是其元数据。上传的对象或拷贝操作创建的对象，通过MD5加密后都有唯一的ETag。 **约束限制**：当对象是服务端加密的对象时，ETag值不是对象的MD5值，而是通过服务端加密计算出的唯一标识。 **取值范围**：长度为32的字符串。
    * type  **参数解释**：对象类型。 **约束限制**：非Normal对象时返回。 **取值范围**：不涉及。
    * key  **参数解释**：对象名。对象名是对象在存储桶中的唯一标识。对象名是对象在桶中的完整路径，路径中不包含桶名。 **取值范围**：长度大于0且不超过1024的字符串。
    * lastModified  **参数解释**：对象最近一次被修改的时间（UTC时间）。 **约束限制**：日期格式为ISO8601的格式。 **取值范围**：不涉及。
    * size  **参数解释**：对象的字节数。 **取值范围**：0~48.8TB，单位：字节。
    * storageClass  **参数解释**：对象的存储类型。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'owner' => 'owner',
            'etag' => 'etag',
            'type' => 'type',
            'key' => 'key',
            'lastModified' => 'last_modified',
            'size' => 'size',
            'storageClass' => 'storage_class'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * owner  owner
    * etag  **参数解释**：对象的base64编码的128位MD5摘要。ETag是对象内容的唯一标识，可以通过该值识别对象内容是否有变化。比如上传对象时ETag为A，下载对象时ETag为B，则说明对象内容发生了变化。实际的ETag是对象的哈希值。ETag只反映变化的内容，而不是其元数据。上传的对象或拷贝操作创建的对象，通过MD5加密后都有唯一的ETag。 **约束限制**：当对象是服务端加密的对象时，ETag值不是对象的MD5值，而是通过服务端加密计算出的唯一标识。 **取值范围**：长度为32的字符串。
    * type  **参数解释**：对象类型。 **约束限制**：非Normal对象时返回。 **取值范围**：不涉及。
    * key  **参数解释**：对象名。对象名是对象在存储桶中的唯一标识。对象名是对象在桶中的完整路径，路径中不包含桶名。 **取值范围**：长度大于0且不超过1024的字符串。
    * lastModified  **参数解释**：对象最近一次被修改的时间（UTC时间）。 **约束限制**：日期格式为ISO8601的格式。 **取值范围**：不涉及。
    * size  **参数解释**：对象的字节数。 **取值范围**：0~48.8TB，单位：字节。
    * storageClass  **参数解释**：对象的存储类型。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'owner' => 'setOwner',
            'etag' => 'setEtag',
            'type' => 'setType',
            'key' => 'setKey',
            'lastModified' => 'setLastModified',
            'size' => 'setSize',
            'storageClass' => 'setStorageClass'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * owner  owner
    * etag  **参数解释**：对象的base64编码的128位MD5摘要。ETag是对象内容的唯一标识，可以通过该值识别对象内容是否有变化。比如上传对象时ETag为A，下载对象时ETag为B，则说明对象内容发生了变化。实际的ETag是对象的哈希值。ETag只反映变化的内容，而不是其元数据。上传的对象或拷贝操作创建的对象，通过MD5加密后都有唯一的ETag。 **约束限制**：当对象是服务端加密的对象时，ETag值不是对象的MD5值，而是通过服务端加密计算出的唯一标识。 **取值范围**：长度为32的字符串。
    * type  **参数解释**：对象类型。 **约束限制**：非Normal对象时返回。 **取值范围**：不涉及。
    * key  **参数解释**：对象名。对象名是对象在存储桶中的唯一标识。对象名是对象在桶中的完整路径，路径中不包含桶名。 **取值范围**：长度大于0且不超过1024的字符串。
    * lastModified  **参数解释**：对象最近一次被修改的时间（UTC时间）。 **约束限制**：日期格式为ISO8601的格式。 **取值范围**：不涉及。
    * size  **参数解释**：对象的字节数。 **取值范围**：0~48.8TB，单位：字节。
    * storageClass  **参数解释**：对象的存储类型。 **取值范围**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'owner' => 'getOwner',
            'etag' => 'getEtag',
            'type' => 'getType',
            'key' => 'getKey',
            'lastModified' => 'getLastModified',
            'size' => 'getSize',
            'storageClass' => 'getStorageClass'
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
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['etag'] = isset($data['etag']) ? $data['etag'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['lastModified'] = isset($data['lastModified']) ? $data['lastModified'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['storageClass'] = isset($data['storageClass']) ? $data['storageClass'] : null;
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
    * Gets owner
    *  owner
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\Owner|null
    */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
    * Sets owner
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\Owner|null $owner owner
    *
    * @return $this
    */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;
        return $this;
    }

    /**
    * Gets etag
    *  **参数解释**：对象的base64编码的128位MD5摘要。ETag是对象内容的唯一标识，可以通过该值识别对象内容是否有变化。比如上传对象时ETag为A，下载对象时ETag为B，则说明对象内容发生了变化。实际的ETag是对象的哈希值。ETag只反映变化的内容，而不是其元数据。上传的对象或拷贝操作创建的对象，通过MD5加密后都有唯一的ETag。 **约束限制**：当对象是服务端加密的对象时，ETag值不是对象的MD5值，而是通过服务端加密计算出的唯一标识。 **取值范围**：长度为32的字符串。
    *
    * @return string|null
    */
    public function getEtag()
    {
        return $this->container['etag'];
    }

    /**
    * Sets etag
    *
    * @param string|null $etag **参数解释**：对象的base64编码的128位MD5摘要。ETag是对象内容的唯一标识，可以通过该值识别对象内容是否有变化。比如上传对象时ETag为A，下载对象时ETag为B，则说明对象内容发生了变化。实际的ETag是对象的哈希值。ETag只反映变化的内容，而不是其元数据。上传的对象或拷贝操作创建的对象，通过MD5加密后都有唯一的ETag。 **约束限制**：当对象是服务端加密的对象时，ETag值不是对象的MD5值，而是通过服务端加密计算出的唯一标识。 **取值范围**：长度为32的字符串。
    *
    * @return $this
    */
    public function setEtag($etag)
    {
        $this->container['etag'] = $etag;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**：对象类型。 **约束限制**：非Normal对象时返回。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type **参数解释**：对象类型。 **约束限制**：非Normal对象时返回。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets key
    *  **参数解释**：对象名。对象名是对象在存储桶中的唯一标识。对象名是对象在桶中的完整路径，路径中不包含桶名。 **取值范围**：长度大于0且不超过1024的字符串。
    *
    * @return string|null
    */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
    * Sets key
    *
    * @param string|null $key **参数解释**：对象名。对象名是对象在存储桶中的唯一标识。对象名是对象在桶中的完整路径，路径中不包含桶名。 **取值范围**：长度大于0且不超过1024的字符串。
    *
    * @return $this
    */
    public function setKey($key)
    {
        $this->container['key'] = $key;
        return $this;
    }

    /**
    * Gets lastModified
    *  **参数解释**：对象最近一次被修改的时间（UTC时间）。 **约束限制**：日期格式为ISO8601的格式。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getLastModified()
    {
        return $this->container['lastModified'];
    }

    /**
    * Sets lastModified
    *
    * @param string|null $lastModified **参数解释**：对象最近一次被修改的时间（UTC时间）。 **约束限制**：日期格式为ISO8601的格式。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setLastModified($lastModified)
    {
        $this->container['lastModified'] = $lastModified;
        return $this;
    }

    /**
    * Gets size
    *  **参数解释**：对象的字节数。 **取值范围**：0~48.8TB，单位：字节。
    *
    * @return int|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int|null $size **参数解释**：对象的字节数。 **取值范围**：0~48.8TB，单位：字节。
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets storageClass
    *  **参数解释**：对象的存储类型。 **取值范围**：不涉及。
    *
    * @return string|null
    */
    public function getStorageClass()
    {
        return $this->container['storageClass'];
    }

    /**
    * Sets storageClass
    *
    * @param string|null $storageClass **参数解释**：对象的存储类型。 **取值范围**：不涉及。
    *
    * @return $this
    */
    public function setStorageClass($storageClass)
    {
        $this->container['storageClass'] = $storageClass;
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

