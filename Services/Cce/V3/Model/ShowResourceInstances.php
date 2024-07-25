<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowResourceInstances implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowResourceInstances';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * action  action类型，\"filter\"或者\"count\"。
    * tags  tags
    * tagsAny  tagsAny
    * notTags  notTags
    * notTagsAny  notTagsAny
    * sysTags  sysTags
    * withoutAnyTag  忽略其他标签字段，返回不带任何标签的资源。
    * limit  limit
    * offset  offset
    * matches  matches
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'action' => 'string',
            'tags' => '\HuaweiCloud\SDK\Cce\V3\Model\TagFilter',
            'tagsAny' => '\HuaweiCloud\SDK\Cce\V3\Model\TagFilter',
            'notTags' => '\HuaweiCloud\SDK\Cce\V3\Model\TagFilter',
            'notTagsAny' => '\HuaweiCloud\SDK\Cce\V3\Model\TagFilter',
            'sysTags' => '\HuaweiCloud\SDK\Cce\V3\Model\TagFilter',
            'withoutAnyTag' => 'bool',
            'limit' => 'string',
            'offset' => 'string',
            'matches' => 'object[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * action  action类型，\"filter\"或者\"count\"。
    * tags  tags
    * tagsAny  tagsAny
    * notTags  notTags
    * notTagsAny  notTagsAny
    * sysTags  sysTags
    * withoutAnyTag  忽略其他标签字段，返回不带任何标签的资源。
    * limit  limit
    * offset  offset
    * matches  matches
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'action' => null,
        'tags' => null,
        'tagsAny' => null,
        'notTags' => null,
        'notTagsAny' => null,
        'sysTags' => null,
        'withoutAnyTag' => null,
        'limit' => null,
        'offset' => null,
        'matches' => null
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
    * action  action类型，\"filter\"或者\"count\"。
    * tags  tags
    * tagsAny  tagsAny
    * notTags  notTags
    * notTagsAny  notTagsAny
    * sysTags  sysTags
    * withoutAnyTag  忽略其他标签字段，返回不带任何标签的资源。
    * limit  limit
    * offset  offset
    * matches  matches
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'action' => 'action',
            'tags' => 'tags',
            'tagsAny' => 'tags_any',
            'notTags' => 'not_tags',
            'notTagsAny' => 'not_tags_any',
            'sysTags' => 'sys_tags',
            'withoutAnyTag' => 'without_any_tag',
            'limit' => 'limit',
            'offset' => 'offset',
            'matches' => 'matches'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * action  action类型，\"filter\"或者\"count\"。
    * tags  tags
    * tagsAny  tagsAny
    * notTags  notTags
    * notTagsAny  notTagsAny
    * sysTags  sysTags
    * withoutAnyTag  忽略其他标签字段，返回不带任何标签的资源。
    * limit  limit
    * offset  offset
    * matches  matches
    *
    * @var string[]
    */
    protected static $setters = [
            'action' => 'setAction',
            'tags' => 'setTags',
            'tagsAny' => 'setTagsAny',
            'notTags' => 'setNotTags',
            'notTagsAny' => 'setNotTagsAny',
            'sysTags' => 'setSysTags',
            'withoutAnyTag' => 'setWithoutAnyTag',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'matches' => 'setMatches'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * action  action类型，\"filter\"或者\"count\"。
    * tags  tags
    * tagsAny  tagsAny
    * notTags  notTags
    * notTagsAny  notTagsAny
    * sysTags  sysTags
    * withoutAnyTag  忽略其他标签字段，返回不带任何标签的资源。
    * limit  limit
    * offset  offset
    * matches  matches
    *
    * @var string[]
    */
    protected static $getters = [
            'action' => 'getAction',
            'tags' => 'getTags',
            'tagsAny' => 'getTagsAny',
            'notTags' => 'getNotTags',
            'notTagsAny' => 'getNotTagsAny',
            'sysTags' => 'getSysTags',
            'withoutAnyTag' => 'getWithoutAnyTag',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'matches' => 'getMatches'
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
    const ACTION_FILTER = 'filter';
    const ACTION_COUNT = 'count';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_FILTER,
            self::ACTION_COUNT,
        ];
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
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['tagsAny'] = isset($data['tagsAny']) ? $data['tagsAny'] : null;
        $this->container['notTags'] = isset($data['notTags']) ? $data['notTags'] : null;
        $this->container['notTagsAny'] = isset($data['notTagsAny']) ? $data['notTagsAny'] : null;
        $this->container['sysTags'] = isset($data['sysTags']) ? $data['sysTags'] : null;
        $this->container['withoutAnyTag'] = isset($data['withoutAnyTag']) ? $data['withoutAnyTag'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['matches'] = isset($data['matches']) ? $data['matches'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
        }
            $allowedValues = $this->getActionAllowableValues();
                if (!is_null($this->container['action']) && !in_array($this->container['action'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'action', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets action
    *  action类型，\"filter\"或者\"count\"。
    *
    * @return string
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string $action action类型，\"filter\"或者\"count\"。
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
    *  tags
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\TagFilter|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\TagFilter|null $tags tags
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets tagsAny
    *  tagsAny
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\TagFilter|null
    */
    public function getTagsAny()
    {
        return $this->container['tagsAny'];
    }

    /**
    * Sets tagsAny
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\TagFilter|null $tagsAny tagsAny
    *
    * @return $this
    */
    public function setTagsAny($tagsAny)
    {
        $this->container['tagsAny'] = $tagsAny;
        return $this;
    }

    /**
    * Gets notTags
    *  notTags
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\TagFilter|null
    */
    public function getNotTags()
    {
        return $this->container['notTags'];
    }

    /**
    * Sets notTags
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\TagFilter|null $notTags notTags
    *
    * @return $this
    */
    public function setNotTags($notTags)
    {
        $this->container['notTags'] = $notTags;
        return $this;
    }

    /**
    * Gets notTagsAny
    *  notTagsAny
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\TagFilter|null
    */
    public function getNotTagsAny()
    {
        return $this->container['notTagsAny'];
    }

    /**
    * Sets notTagsAny
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\TagFilter|null $notTagsAny notTagsAny
    *
    * @return $this
    */
    public function setNotTagsAny($notTagsAny)
    {
        $this->container['notTagsAny'] = $notTagsAny;
        return $this;
    }

    /**
    * Gets sysTags
    *  sysTags
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\TagFilter|null
    */
    public function getSysTags()
    {
        return $this->container['sysTags'];
    }

    /**
    * Sets sysTags
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\TagFilter|null $sysTags sysTags
    *
    * @return $this
    */
    public function setSysTags($sysTags)
    {
        $this->container['sysTags'] = $sysTags;
        return $this;
    }

    /**
    * Gets withoutAnyTag
    *  忽略其他标签字段，返回不带任何标签的资源。
    *
    * @return bool|null
    */
    public function getWithoutAnyTag()
    {
        return $this->container['withoutAnyTag'];
    }

    /**
    * Sets withoutAnyTag
    *
    * @param bool|null $withoutAnyTag 忽略其他标签字段，返回不带任何标签的资源。
    *
    * @return $this
    */
    public function setWithoutAnyTag($withoutAnyTag)
    {
        $this->container['withoutAnyTag'] = $withoutAnyTag;
        return $this;
    }

    /**
    * Gets limit
    *  limit
    *
    * @return string|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param string|null $limit limit
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  offset
    *
    * @return string|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param string|null $offset offset
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets matches
    *  matches
    *
    * @return object[]|null
    */
    public function getMatches()
    {
        return $this->container['matches'];
    }

    /**
    * Sets matches
    *
    * @param object[]|null $matches matches
    *
    * @return $this
    */
    public function setMatches($matches)
    {
        $this->container['matches'] = $matches;
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

