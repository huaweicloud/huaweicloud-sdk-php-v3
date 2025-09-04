<?php

namespace HuaweiCloud\SDK\IoTEdge\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryAppImageResponseDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryAppImageResponseDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * imageNamespace  镜像组织
    * name  镜像仓库名称
    * tag  镜像tag
    * digest  镜像摘要
    * createTime  创建时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'imageNamespace' => 'string',
            'name' => 'string',
            'tag' => 'string',
            'digest' => 'string',
            'createTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * imageNamespace  镜像组织
    * name  镜像仓库名称
    * tag  镜像tag
    * digest  镜像摘要
    * createTime  创建时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'imageNamespace' => null,
        'name' => null,
        'tag' => null,
        'digest' => null,
        'createTime' => null
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
    * imageNamespace  镜像组织
    * name  镜像仓库名称
    * tag  镜像tag
    * digest  镜像摘要
    * createTime  创建时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'imageNamespace' => 'image_namespace',
            'name' => 'name',
            'tag' => 'tag',
            'digest' => 'digest',
            'createTime' => 'create_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * imageNamespace  镜像组织
    * name  镜像仓库名称
    * tag  镜像tag
    * digest  镜像摘要
    * createTime  创建时间
    *
    * @var string[]
    */
    protected static $setters = [
            'imageNamespace' => 'setImageNamespace',
            'name' => 'setName',
            'tag' => 'setTag',
            'digest' => 'setDigest',
            'createTime' => 'setCreateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * imageNamespace  镜像组织
    * name  镜像仓库名称
    * tag  镜像tag
    * digest  镜像摘要
    * createTime  创建时间
    *
    * @var string[]
    */
    protected static $getters = [
            'imageNamespace' => 'getImageNamespace',
            'name' => 'getName',
            'tag' => 'getTag',
            'digest' => 'getDigest',
            'createTime' => 'getCreateTime'
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
        $this->container['imageNamespace'] = isset($data['imageNamespace']) ? $data['imageNamespace'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['tag'] = isset($data['tag']) ? $data['tag'] : null;
        $this->container['digest'] = isset($data['digest']) ? $data['digest'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
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
    * Gets imageNamespace
    *  镜像组织
    *
    * @return string|null
    */
    public function getImageNamespace()
    {
        return $this->container['imageNamespace'];
    }

    /**
    * Sets imageNamespace
    *
    * @param string|null $imageNamespace 镜像组织
    *
    * @return $this
    */
    public function setImageNamespace($imageNamespace)
    {
        $this->container['imageNamespace'] = $imageNamespace;
        return $this;
    }

    /**
    * Gets name
    *  镜像仓库名称
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
    * @param string|null $name 镜像仓库名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets tag
    *  镜像tag
    *
    * @return string|null
    */
    public function getTag()
    {
        return $this->container['tag'];
    }

    /**
    * Sets tag
    *
    * @param string|null $tag 镜像tag
    *
    * @return $this
    */
    public function setTag($tag)
    {
        $this->container['tag'] = $tag;
        return $this;
    }

    /**
    * Gets digest
    *  镜像摘要
    *
    * @return string|null
    */
    public function getDigest()
    {
        return $this->container['digest'];
    }

    /**
    * Sets digest
    *
    * @param string|null $digest 镜像摘要
    *
    * @return $this
    */
    public function setDigest($digest)
    {
        $this->container['digest'] = $digest;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
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
    * @param string|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
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

