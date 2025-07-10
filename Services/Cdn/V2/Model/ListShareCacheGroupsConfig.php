<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListShareCacheGroupsConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListShareCacheGroupsConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  共享缓存ID
    * groupName  共享缓存组名
    * createTime  共享缓存创建时间
    * shareCacheRecords  共享缓存域名记录
    * primaryDomain  共享缓存组主域名
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'groupName' => 'string',
            'createTime' => 'int',
            'shareCacheRecords' => '\HuaweiCloud\SDK\Cdn\V2\Model\ListShareCacheGroupsRecord[]',
            'primaryDomain' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  共享缓存ID
    * groupName  共享缓存组名
    * createTime  共享缓存创建时间
    * shareCacheRecords  共享缓存域名记录
    * primaryDomain  共享缓存组主域名
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'groupName' => null,
        'createTime' => null,
        'shareCacheRecords' => null,
        'primaryDomain' => null
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
    * id  共享缓存ID
    * groupName  共享缓存组名
    * createTime  共享缓存创建时间
    * shareCacheRecords  共享缓存域名记录
    * primaryDomain  共享缓存组主域名
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'groupName' => 'group_name',
            'createTime' => 'create_time',
            'shareCacheRecords' => 'share_cache_records',
            'primaryDomain' => 'primary_domain'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  共享缓存ID
    * groupName  共享缓存组名
    * createTime  共享缓存创建时间
    * shareCacheRecords  共享缓存域名记录
    * primaryDomain  共享缓存组主域名
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'groupName' => 'setGroupName',
            'createTime' => 'setCreateTime',
            'shareCacheRecords' => 'setShareCacheRecords',
            'primaryDomain' => 'setPrimaryDomain'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  共享缓存ID
    * groupName  共享缓存组名
    * createTime  共享缓存创建时间
    * shareCacheRecords  共享缓存域名记录
    * primaryDomain  共享缓存组主域名
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'groupName' => 'getGroupName',
            'createTime' => 'getCreateTime',
            'shareCacheRecords' => 'getShareCacheRecords',
            'primaryDomain' => 'getPrimaryDomain'
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
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['shareCacheRecords'] = isset($data['shareCacheRecords']) ? $data['shareCacheRecords'] : null;
        $this->container['primaryDomain'] = isset($data['primaryDomain']) ? $data['primaryDomain'] : null;
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
    *  共享缓存ID
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
    * @param string|null $id 共享缓存ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets groupName
    *  共享缓存组名
    *
    * @return string|null
    */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
    * Sets groupName
    *
    * @param string|null $groupName 共享缓存组名
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets createTime
    *  共享缓存创建时间
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 共享缓存创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets shareCacheRecords
    *  共享缓存域名记录
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\ListShareCacheGroupsRecord[]|null
    */
    public function getShareCacheRecords()
    {
        return $this->container['shareCacheRecords'];
    }

    /**
    * Sets shareCacheRecords
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\ListShareCacheGroupsRecord[]|null $shareCacheRecords 共享缓存域名记录
    *
    * @return $this
    */
    public function setShareCacheRecords($shareCacheRecords)
    {
        $this->container['shareCacheRecords'] = $shareCacheRecords;
        return $this;
    }

    /**
    * Gets primaryDomain
    *  共享缓存组主域名
    *
    * @return string|null
    */
    public function getPrimaryDomain()
    {
        return $this->container['primaryDomain'];
    }

    /**
    * Sets primaryDomain
    *
    * @param string|null $primaryDomain 共享缓存组主域名
    *
    * @return $this
    */
    public function setPrimaryDomain($primaryDomain)
    {
        $this->container['primaryDomain'] = $primaryDomain;
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

