<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TmsResourceInstancesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TmsResourceInstancesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * offset  索引位置，默认为0
    * limit  查询记录数，默认为1000
    * action  操作标识
    * tags  标签
    * sysTags  系统标签
    * matches  tms资源标签
    * withoutAnyTag  无任何标签的资源筛选标识
    * tagsAny  任意标签的资源筛选标识
    * notTagsAny  不标识于标签
    * notTags  不标识于标签
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'offset' => 'int',
            'limit' => 'int',
            'action' => 'string',
            'tags' => '\HuaweiCloud\SDK\Waf\V1\Model\TmsResourceInstancesTag[]',
            'sysTags' => '\HuaweiCloud\SDK\Waf\V1\Model\TmsResourceInstancesTag[]',
            'matches' => '\HuaweiCloud\SDK\Waf\V1\Model\TmsResourceTag[]',
            'withoutAnyTag' => 'string',
            'tagsAny' => '\HuaweiCloud\SDK\Waf\V1\Model\TmsResourceInstancesTag[]',
            'notTagsAny' => '\HuaweiCloud\SDK\Waf\V1\Model\TmsResourceInstancesTag[]',
            'notTags' => '\HuaweiCloud\SDK\Waf\V1\Model\TmsResourceInstancesTag[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * offset  索引位置，默认为0
    * limit  查询记录数，默认为1000
    * action  操作标识
    * tags  标签
    * sysTags  系统标签
    * matches  tms资源标签
    * withoutAnyTag  无任何标签的资源筛选标识
    * tagsAny  任意标签的资源筛选标识
    * notTagsAny  不标识于标签
    * notTags  不标识于标签
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'offset' => 'int32',
        'limit' => 'int32',
        'action' => null,
        'tags' => null,
        'sysTags' => null,
        'matches' => null,
        'withoutAnyTag' => null,
        'tagsAny' => null,
        'notTagsAny' => null,
        'notTags' => null
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
    * offset  索引位置，默认为0
    * limit  查询记录数，默认为1000
    * action  操作标识
    * tags  标签
    * sysTags  系统标签
    * matches  tms资源标签
    * withoutAnyTag  无任何标签的资源筛选标识
    * tagsAny  任意标签的资源筛选标识
    * notTagsAny  不标识于标签
    * notTags  不标识于标签
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'offset' => 'offset',
            'limit' => 'limit',
            'action' => 'action',
            'tags' => 'tags',
            'sysTags' => 'sys_tags',
            'matches' => 'matches',
            'withoutAnyTag' => 'without_any_tag',
            'tagsAny' => 'tags_any',
            'notTagsAny' => 'not_tags_any',
            'notTags' => 'not_tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * offset  索引位置，默认为0
    * limit  查询记录数，默认为1000
    * action  操作标识
    * tags  标签
    * sysTags  系统标签
    * matches  tms资源标签
    * withoutAnyTag  无任何标签的资源筛选标识
    * tagsAny  任意标签的资源筛选标识
    * notTagsAny  不标识于标签
    * notTags  不标识于标签
    *
    * @var string[]
    */
    protected static $setters = [
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'action' => 'setAction',
            'tags' => 'setTags',
            'sysTags' => 'setSysTags',
            'matches' => 'setMatches',
            'withoutAnyTag' => 'setWithoutAnyTag',
            'tagsAny' => 'setTagsAny',
            'notTagsAny' => 'setNotTagsAny',
            'notTags' => 'setNotTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * offset  索引位置，默认为0
    * limit  查询记录数，默认为1000
    * action  操作标识
    * tags  标签
    * sysTags  系统标签
    * matches  tms资源标签
    * withoutAnyTag  无任何标签的资源筛选标识
    * tagsAny  任意标签的资源筛选标识
    * notTagsAny  不标识于标签
    * notTags  不标识于标签
    *
    * @var string[]
    */
    protected static $getters = [
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'action' => 'getAction',
            'tags' => 'getTags',
            'sysTags' => 'getSysTags',
            'matches' => 'getMatches',
            'withoutAnyTag' => 'getWithoutAnyTag',
            'tagsAny' => 'getTagsAny',
            'notTagsAny' => 'getNotTagsAny',
            'notTags' => 'getNotTags'
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
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['sysTags'] = isset($data['sysTags']) ? $data['sysTags'] : null;
        $this->container['matches'] = isset($data['matches']) ? $data['matches'] : null;
        $this->container['withoutAnyTag'] = isset($data['withoutAnyTag']) ? $data['withoutAnyTag'] : null;
        $this->container['tagsAny'] = isset($data['tagsAny']) ? $data['tagsAny'] : null;
        $this->container['notTagsAny'] = isset($data['notTagsAny']) ? $data['notTagsAny'] : null;
        $this->container['notTags'] = isset($data['notTags']) ? $data['notTags'] : null;
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
    * Gets offset
    *  索引位置，默认为0
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 索引位置，默认为0
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  查询记录数，默认为1000
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 查询记录数，默认为1000
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets action
    *  操作标识
    *
    * @return string|null
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string|null $action 操作标识
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets tags
    *  标签
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\TmsResourceInstancesTag[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\TmsResourceInstancesTag[]|null $tags 标签
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets sysTags
    *  系统标签
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\TmsResourceInstancesTag[]|null
    */
    public function getSysTags()
    {
        return $this->container['sysTags'];
    }

    /**
    * Sets sysTags
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\TmsResourceInstancesTag[]|null $sysTags 系统标签
    *
    * @return $this
    */
    public function setSysTags($sysTags)
    {
        $this->container['sysTags'] = $sysTags;
        return $this;
    }

    /**
    * Gets matches
    *  tms资源标签
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\TmsResourceTag[]|null
    */
    public function getMatches()
    {
        return $this->container['matches'];
    }

    /**
    * Sets matches
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\TmsResourceTag[]|null $matches tms资源标签
    *
    * @return $this
    */
    public function setMatches($matches)
    {
        $this->container['matches'] = $matches;
        return $this;
    }

    /**
    * Gets withoutAnyTag
    *  无任何标签的资源筛选标识
    *
    * @return string|null
    */
    public function getWithoutAnyTag()
    {
        return $this->container['withoutAnyTag'];
    }

    /**
    * Sets withoutAnyTag
    *
    * @param string|null $withoutAnyTag 无任何标签的资源筛选标识
    *
    * @return $this
    */
    public function setWithoutAnyTag($withoutAnyTag)
    {
        $this->container['withoutAnyTag'] = $withoutAnyTag;
        return $this;
    }

    /**
    * Gets tagsAny
    *  任意标签的资源筛选标识
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\TmsResourceInstancesTag[]|null
    */
    public function getTagsAny()
    {
        return $this->container['tagsAny'];
    }

    /**
    * Sets tagsAny
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\TmsResourceInstancesTag[]|null $tagsAny 任意标签的资源筛选标识
    *
    * @return $this
    */
    public function setTagsAny($tagsAny)
    {
        $this->container['tagsAny'] = $tagsAny;
        return $this;
    }

    /**
    * Gets notTagsAny
    *  不标识于标签
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\TmsResourceInstancesTag[]|null
    */
    public function getNotTagsAny()
    {
        return $this->container['notTagsAny'];
    }

    /**
    * Sets notTagsAny
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\TmsResourceInstancesTag[]|null $notTagsAny 不标识于标签
    *
    * @return $this
    */
    public function setNotTagsAny($notTagsAny)
    {
        $this->container['notTagsAny'] = $notTagsAny;
        return $this;
    }

    /**
    * Gets notTags
    *  不标识于标签
    *
    * @return \HuaweiCloud\SDK\Waf\V1\Model\TmsResourceInstancesTag[]|null
    */
    public function getNotTags()
    {
        return $this->container['notTags'];
    }

    /**
    * Sets notTags
    *
    * @param \HuaweiCloud\SDK\Waf\V1\Model\TmsResourceInstancesTag[]|null $notTags 不标识于标签
    *
    * @return $this
    */
    public function setNotTags($notTags)
    {
        $this->container['notTags'] = $notTags;
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

