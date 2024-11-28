<?php

namespace HuaweiCloud\SDK\Kms\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AliasEntity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AliasEntity';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domainId  账号ID
    * keyId  密钥ID
    * alias  别名
    * aliasUrn  别名资源定位符
    * createTime  创建时间
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domainId' => 'string',
            'keyId' => 'string',
            'alias' => 'string',
            'aliasUrn' => 'string',
            'createTime' => 'string',
            'updateTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domainId  账号ID
    * keyId  密钥ID
    * alias  别名
    * aliasUrn  别名资源定位符
    * createTime  创建时间
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domainId' => null,
        'keyId' => null,
        'alias' => null,
        'aliasUrn' => null,
        'createTime' => null,
        'updateTime' => null
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
    * domainId  账号ID
    * keyId  密钥ID
    * alias  别名
    * aliasUrn  别名资源定位符
    * createTime  创建时间
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domainId' => 'domain_id',
            'keyId' => 'key_id',
            'alias' => 'alias',
            'aliasUrn' => 'alias_urn',
            'createTime' => 'create_time',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domainId  账号ID
    * keyId  密钥ID
    * alias  别名
    * aliasUrn  别名资源定位符
    * createTime  创建时间
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $setters = [
            'domainId' => 'setDomainId',
            'keyId' => 'setKeyId',
            'alias' => 'setAlias',
            'aliasUrn' => 'setAliasUrn',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domainId  账号ID
    * keyId  密钥ID
    * alias  别名
    * aliasUrn  别名资源定位符
    * createTime  创建时间
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $getters = [
            'domainId' => 'getDomainId',
            'keyId' => 'getKeyId',
            'alias' => 'getAlias',
            'aliasUrn' => 'getAliasUrn',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime'
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
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['keyId'] = isset($data['keyId']) ? $data['keyId'] : null;
        $this->container['alias'] = isset($data['alias']) ? $data['alias'] : null;
        $this->container['aliasUrn'] = isset($data['aliasUrn']) ? $data['aliasUrn'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['alias'] === null) {
            $invalidProperties[] = "'alias' can't be null";
        }
        if ($this->container['aliasUrn'] === null) {
            $invalidProperties[] = "'aliasUrn' can't be null";
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
    * Gets domainId
    *  账号ID
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId 账号ID
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets keyId
    *  密钥ID
    *
    * @return string|null
    */
    public function getKeyId()
    {
        return $this->container['keyId'];
    }

    /**
    * Sets keyId
    *
    * @param string|null $keyId 密钥ID
    *
    * @return $this
    */
    public function setKeyId($keyId)
    {
        $this->container['keyId'] = $keyId;
        return $this;
    }

    /**
    * Gets alias
    *  别名
    *
    * @return string
    */
    public function getAlias()
    {
        return $this->container['alias'];
    }

    /**
    * Sets alias
    *
    * @param string $alias 别名
    *
    * @return $this
    */
    public function setAlias($alias)
    {
        $this->container['alias'] = $alias;
        return $this;
    }

    /**
    * Gets aliasUrn
    *  别名资源定位符
    *
    * @return string
    */
    public function getAliasUrn()
    {
        return $this->container['aliasUrn'];
    }

    /**
    * Sets aliasUrn
    *
    * @param string $aliasUrn 别名资源定位符
    *
    * @return $this
    */
    public function setAliasUrn($aliasUrn)
    {
        $this->container['aliasUrn'] = $aliasUrn;
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
    * Gets updateTime
    *  更新时间
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
    * @param string|null $updateTime 更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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

