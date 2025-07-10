<?php

namespace HuaweiCloud\SDK\Cdn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateShareCacheGroupsRequstBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateShareCacheGroupsRequstBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * groupName  **参数解释：** 共享缓存组名称 **约束限制：** 不涉及 **取值范围：** - 1-128个字符 - 不支持特殊字符“%”、“&”、“=”、“?”、“$”\"、“\"”、“<”、“>” **默认取值：** 不涉及
    * primaryDomain  **参数解释：** 主域名 **约束限制：** 只能有一个主域名 **取值范围：** 不涉及 **默认取值：** 不涉及
    * shareCacheRecords  **参数解释：** 关联域名 **约束限制：** - 必须传入主域名 - 最多可包含50个关联域名
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'groupName' => 'string',
            'primaryDomain' => 'string',
            'shareCacheRecords' => '\HuaweiCloud\SDK\Cdn\V2\Model\ShareCacheGroupsRecord[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * groupName  **参数解释：** 共享缓存组名称 **约束限制：** 不涉及 **取值范围：** - 1-128个字符 - 不支持特殊字符“%”、“&”、“=”、“?”、“$”\"、“\"”、“<”、“>” **默认取值：** 不涉及
    * primaryDomain  **参数解释：** 主域名 **约束限制：** 只能有一个主域名 **取值范围：** 不涉及 **默认取值：** 不涉及
    * shareCacheRecords  **参数解释：** 关联域名 **约束限制：** - 必须传入主域名 - 最多可包含50个关联域名
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'groupName' => null,
        'primaryDomain' => null,
        'shareCacheRecords' => null
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
    * groupName  **参数解释：** 共享缓存组名称 **约束限制：** 不涉及 **取值范围：** - 1-128个字符 - 不支持特殊字符“%”、“&”、“=”、“?”、“$”\"、“\"”、“<”、“>” **默认取值：** 不涉及
    * primaryDomain  **参数解释：** 主域名 **约束限制：** 只能有一个主域名 **取值范围：** 不涉及 **默认取值：** 不涉及
    * shareCacheRecords  **参数解释：** 关联域名 **约束限制：** - 必须传入主域名 - 最多可包含50个关联域名
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'groupName' => 'group_name',
            'primaryDomain' => 'primary_domain',
            'shareCacheRecords' => 'share_cache_records'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groupName  **参数解释：** 共享缓存组名称 **约束限制：** 不涉及 **取值范围：** - 1-128个字符 - 不支持特殊字符“%”、“&”、“=”、“?”、“$”\"、“\"”、“<”、“>” **默认取值：** 不涉及
    * primaryDomain  **参数解释：** 主域名 **约束限制：** 只能有一个主域名 **取值范围：** 不涉及 **默认取值：** 不涉及
    * shareCacheRecords  **参数解释：** 关联域名 **约束限制：** - 必须传入主域名 - 最多可包含50个关联域名
    *
    * @var string[]
    */
    protected static $setters = [
            'groupName' => 'setGroupName',
            'primaryDomain' => 'setPrimaryDomain',
            'shareCacheRecords' => 'setShareCacheRecords'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * groupName  **参数解释：** 共享缓存组名称 **约束限制：** 不涉及 **取值范围：** - 1-128个字符 - 不支持特殊字符“%”、“&”、“=”、“?”、“$”\"、“\"”、“<”、“>” **默认取值：** 不涉及
    * primaryDomain  **参数解释：** 主域名 **约束限制：** 只能有一个主域名 **取值范围：** 不涉及 **默认取值：** 不涉及
    * shareCacheRecords  **参数解释：** 关联域名 **约束限制：** - 必须传入主域名 - 最多可包含50个关联域名
    *
    * @var string[]
    */
    protected static $getters = [
            'groupName' => 'getGroupName',
            'primaryDomain' => 'getPrimaryDomain',
            'shareCacheRecords' => 'getShareCacheRecords'
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
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['primaryDomain'] = isset($data['primaryDomain']) ? $data['primaryDomain'] : null;
        $this->container['shareCacheRecords'] = isset($data['shareCacheRecords']) ? $data['shareCacheRecords'] : null;
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
    * Gets groupName
    *  **参数解释：** 共享缓存组名称 **约束限制：** 不涉及 **取值范围：** - 1-128个字符 - 不支持特殊字符“%”、“&”、“=”、“?”、“$”\"、“\"”、“<”、“>” **默认取值：** 不涉及
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
    * @param string|null $groupName **参数解释：** 共享缓存组名称 **约束限制：** 不涉及 **取值范围：** - 1-128个字符 - 不支持特殊字符“%”、“&”、“=”、“?”、“$”\"、“\"”、“<”、“>” **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets primaryDomain
    *  **参数解释：** 主域名 **约束限制：** 只能有一个主域名 **取值范围：** 不涉及 **默认取值：** 不涉及
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
    * @param string|null $primaryDomain **参数解释：** 主域名 **约束限制：** 只能有一个主域名 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setPrimaryDomain($primaryDomain)
    {
        $this->container['primaryDomain'] = $primaryDomain;
        return $this;
    }

    /**
    * Gets shareCacheRecords
    *  **参数解释：** 关联域名 **约束限制：** - 必须传入主域名 - 最多可包含50个关联域名
    *
    * @return \HuaweiCloud\SDK\Cdn\V2\Model\ShareCacheGroupsRecord[]|null
    */
    public function getShareCacheRecords()
    {
        return $this->container['shareCacheRecords'];
    }

    /**
    * Sets shareCacheRecords
    *
    * @param \HuaweiCloud\SDK\Cdn\V2\Model\ShareCacheGroupsRecord[]|null $shareCacheRecords **参数解释：** 关联域名 **约束限制：** - 必须传入主域名 - 最多可包含50个关联域名
    *
    * @return $this
    */
    public function setShareCacheRecords($shareCacheRecords)
    {
        $this->container['shareCacheRecords'] = $shareCacheRecords;
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

