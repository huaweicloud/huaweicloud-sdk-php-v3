<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateCVEAllowlistRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateCVEAllowlistRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  白名单ID，查询命名空间信息时，会返回白名单ID
    * namespaceId  漏洞白名单列表所属的命名空间ID
    * expiresAt  漏洞白名单的有效期时间，以自 1970 年 1 月 1 日以来的秒数表示；如果没有配置，则永不过期
    * items  漏洞列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'namespaceId' => 'int',
            'expiresAt' => 'int',
            'items' => '\HuaweiCloud\SDK\Swr\V2\Model\CVEAllowlistItem[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  白名单ID，查询命名空间信息时，会返回白名单ID
    * namespaceId  漏洞白名单列表所属的命名空间ID
    * expiresAt  漏洞白名单的有效期时间，以自 1970 年 1 月 1 日以来的秒数表示；如果没有配置，则永不过期
    * items  漏洞列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'namespaceId' => null,
        'expiresAt' => null,
        'items' => null
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
    * id  白名单ID，查询命名空间信息时，会返回白名单ID
    * namespaceId  漏洞白名单列表所属的命名空间ID
    * expiresAt  漏洞白名单的有效期时间，以自 1970 年 1 月 1 日以来的秒数表示；如果没有配置，则永不过期
    * items  漏洞列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'namespaceId' => 'namespace_id',
            'expiresAt' => 'expires_at',
            'items' => 'items'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  白名单ID，查询命名空间信息时，会返回白名单ID
    * namespaceId  漏洞白名单列表所属的命名空间ID
    * expiresAt  漏洞白名单的有效期时间，以自 1970 年 1 月 1 日以来的秒数表示；如果没有配置，则永不过期
    * items  漏洞列表
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'namespaceId' => 'setNamespaceId',
            'expiresAt' => 'setExpiresAt',
            'items' => 'setItems'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  白名单ID，查询命名空间信息时，会返回白名单ID
    * namespaceId  漏洞白名单列表所属的命名空间ID
    * expiresAt  漏洞白名单的有效期时间，以自 1970 年 1 月 1 日以来的秒数表示；如果没有配置，则永不过期
    * items  漏洞列表
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'namespaceId' => 'getNamespaceId',
            'expiresAt' => 'getExpiresAt',
            'items' => 'getItems'
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
        $this->container['namespaceId'] = isset($data['namespaceId']) ? $data['namespaceId'] : null;
        $this->container['expiresAt'] = isset($data['expiresAt']) ? $data['expiresAt'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
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
    *  白名单ID，查询命名空间信息时，会返回白名单ID
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id 白名单ID，查询命名空间信息时，会返回白名单ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets namespaceId
    *  漏洞白名单列表所属的命名空间ID
    *
    * @return int|null
    */
    public function getNamespaceId()
    {
        return $this->container['namespaceId'];
    }

    /**
    * Sets namespaceId
    *
    * @param int|null $namespaceId 漏洞白名单列表所属的命名空间ID
    *
    * @return $this
    */
    public function setNamespaceId($namespaceId)
    {
        $this->container['namespaceId'] = $namespaceId;
        return $this;
    }

    /**
    * Gets expiresAt
    *  漏洞白名单的有效期时间，以自 1970 年 1 月 1 日以来的秒数表示；如果没有配置，则永不过期
    *
    * @return int|null
    */
    public function getExpiresAt()
    {
        return $this->container['expiresAt'];
    }

    /**
    * Sets expiresAt
    *
    * @param int|null $expiresAt 漏洞白名单的有效期时间，以自 1970 年 1 月 1 日以来的秒数表示；如果没有配置，则永不过期
    *
    * @return $this
    */
    public function setExpiresAt($expiresAt)
    {
        $this->container['expiresAt'] = $expiresAt;
        return $this;
    }

    /**
    * Gets items
    *  漏洞列表
    *
    * @return \HuaweiCloud\SDK\Swr\V2\Model\CVEAllowlistItem[]|null
    */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
    * Sets items
    *
    * @param \HuaweiCloud\SDK\Swr\V2\Model\CVEAllowlistItem[]|null $items 漏洞列表
    *
    * @return $this
    */
    public function setItems($items)
    {
        $this->container['items'] = $items;
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

