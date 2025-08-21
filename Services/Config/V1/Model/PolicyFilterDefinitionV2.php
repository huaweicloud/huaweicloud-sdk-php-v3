<?php

namespace HuaweiCloud\SDK\Config\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PolicyFilterDefinitionV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PolicyFilterDefinitionV2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * regionIds  区域ID列表
    * resourceTypes  云服务列表
    * resourceIds  资源ID列表
    * tagKeyLogic  参数tags的取值逻辑，例如tags设置了a:a和b:b，当取值AND时，表示规则仅对同时绑定了a:a和b:b的资源生效；当取值为OR时，表示规则对任何绑定了a:a或b:b的资源生效。
    * tags  生效标签列表
    * excludeTagKeyLogic  参数exclude_tags的取值逻辑，例如exclude_tags设置了a:a和b:b，当取值AND时，表示规则仅对同时绑定了a:a和b:b的资源生效；当取值为OR时，表示规则对任何绑定了a:a或b:b的资源生效。
    * excludeTags  排除标签列表，排除标签列表比生效标签列表有更高的优先级
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'regionIds' => 'string[]',
            'resourceTypes' => 'string[]',
            'resourceIds' => 'string[]',
            'tagKeyLogic' => 'string',
            'tags' => '\HuaweiCloud\SDK\Config\V1\Model\FilterTagDetail[]',
            'excludeTagKeyLogic' => 'string',
            'excludeTags' => '\HuaweiCloud\SDK\Config\V1\Model\FilterTagDetail[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * regionIds  区域ID列表
    * resourceTypes  云服务列表
    * resourceIds  资源ID列表
    * tagKeyLogic  参数tags的取值逻辑，例如tags设置了a:a和b:b，当取值AND时，表示规则仅对同时绑定了a:a和b:b的资源生效；当取值为OR时，表示规则对任何绑定了a:a或b:b的资源生效。
    * tags  生效标签列表
    * excludeTagKeyLogic  参数exclude_tags的取值逻辑，例如exclude_tags设置了a:a和b:b，当取值AND时，表示规则仅对同时绑定了a:a和b:b的资源生效；当取值为OR时，表示规则对任何绑定了a:a或b:b的资源生效。
    * excludeTags  排除标签列表，排除标签列表比生效标签列表有更高的优先级
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'regionIds' => null,
        'resourceTypes' => null,
        'resourceIds' => null,
        'tagKeyLogic' => null,
        'tags' => null,
        'excludeTagKeyLogic' => null,
        'excludeTags' => null
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
    * regionIds  区域ID列表
    * resourceTypes  云服务列表
    * resourceIds  资源ID列表
    * tagKeyLogic  参数tags的取值逻辑，例如tags设置了a:a和b:b，当取值AND时，表示规则仅对同时绑定了a:a和b:b的资源生效；当取值为OR时，表示规则对任何绑定了a:a或b:b的资源生效。
    * tags  生效标签列表
    * excludeTagKeyLogic  参数exclude_tags的取值逻辑，例如exclude_tags设置了a:a和b:b，当取值AND时，表示规则仅对同时绑定了a:a和b:b的资源生效；当取值为OR时，表示规则对任何绑定了a:a或b:b的资源生效。
    * excludeTags  排除标签列表，排除标签列表比生效标签列表有更高的优先级
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'regionIds' => 'region_ids',
            'resourceTypes' => 'resource_types',
            'resourceIds' => 'resource_ids',
            'tagKeyLogic' => 'tag_key_logic',
            'tags' => 'tags',
            'excludeTagKeyLogic' => 'exclude_tag_key_logic',
            'excludeTags' => 'exclude_tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * regionIds  区域ID列表
    * resourceTypes  云服务列表
    * resourceIds  资源ID列表
    * tagKeyLogic  参数tags的取值逻辑，例如tags设置了a:a和b:b，当取值AND时，表示规则仅对同时绑定了a:a和b:b的资源生效；当取值为OR时，表示规则对任何绑定了a:a或b:b的资源生效。
    * tags  生效标签列表
    * excludeTagKeyLogic  参数exclude_tags的取值逻辑，例如exclude_tags设置了a:a和b:b，当取值AND时，表示规则仅对同时绑定了a:a和b:b的资源生效；当取值为OR时，表示规则对任何绑定了a:a或b:b的资源生效。
    * excludeTags  排除标签列表，排除标签列表比生效标签列表有更高的优先级
    *
    * @var string[]
    */
    protected static $setters = [
            'regionIds' => 'setRegionIds',
            'resourceTypes' => 'setResourceTypes',
            'resourceIds' => 'setResourceIds',
            'tagKeyLogic' => 'setTagKeyLogic',
            'tags' => 'setTags',
            'excludeTagKeyLogic' => 'setExcludeTagKeyLogic',
            'excludeTags' => 'setExcludeTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * regionIds  区域ID列表
    * resourceTypes  云服务列表
    * resourceIds  资源ID列表
    * tagKeyLogic  参数tags的取值逻辑，例如tags设置了a:a和b:b，当取值AND时，表示规则仅对同时绑定了a:a和b:b的资源生效；当取值为OR时，表示规则对任何绑定了a:a或b:b的资源生效。
    * tags  生效标签列表
    * excludeTagKeyLogic  参数exclude_tags的取值逻辑，例如exclude_tags设置了a:a和b:b，当取值AND时，表示规则仅对同时绑定了a:a和b:b的资源生效；当取值为OR时，表示规则对任何绑定了a:a或b:b的资源生效。
    * excludeTags  排除标签列表，排除标签列表比生效标签列表有更高的优先级
    *
    * @var string[]
    */
    protected static $getters = [
            'regionIds' => 'getRegionIds',
            'resourceTypes' => 'getResourceTypes',
            'resourceIds' => 'getResourceIds',
            'tagKeyLogic' => 'getTagKeyLogic',
            'tags' => 'getTags',
            'excludeTagKeyLogic' => 'getExcludeTagKeyLogic',
            'excludeTags' => 'getExcludeTags'
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
    const TAG_KEY_LOGIC__AND = 'AND';
    const TAG_KEY_LOGIC__OR = 'OR';
    const EXCLUDE_TAG_KEY_LOGIC__AND = 'AND';
    const EXCLUDE_TAG_KEY_LOGIC__OR = 'OR';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTagKeyLogicAllowableValues()
    {
        return [
            self::TAG_KEY_LOGIC__AND,
            self::TAG_KEY_LOGIC__OR,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getExcludeTagKeyLogicAllowableValues()
    {
        return [
            self::EXCLUDE_TAG_KEY_LOGIC__AND,
            self::EXCLUDE_TAG_KEY_LOGIC__OR,
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
        $this->container['regionIds'] = isset($data['regionIds']) ? $data['regionIds'] : null;
        $this->container['resourceTypes'] = isset($data['resourceTypes']) ? $data['resourceTypes'] : null;
        $this->container['resourceIds'] = isset($data['resourceIds']) ? $data['resourceIds'] : null;
        $this->container['tagKeyLogic'] = isset($data['tagKeyLogic']) ? $data['tagKeyLogic'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['excludeTagKeyLogic'] = isset($data['excludeTagKeyLogic']) ? $data['excludeTagKeyLogic'] : null;
        $this->container['excludeTags'] = isset($data['excludeTags']) ? $data['excludeTags'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getTagKeyLogicAllowableValues();
                if (!is_null($this->container['tagKeyLogic']) && !in_array($this->container['tagKeyLogic'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'tagKeyLogic', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getExcludeTagKeyLogicAllowableValues();
                if (!is_null($this->container['excludeTagKeyLogic']) && !in_array($this->container['excludeTagKeyLogic'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'excludeTagKeyLogic', must be one of '%s'",
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
    * Gets regionIds
    *  区域ID列表
    *
    * @return string[]|null
    */
    public function getRegionIds()
    {
        return $this->container['regionIds'];
    }

    /**
    * Sets regionIds
    *
    * @param string[]|null $regionIds 区域ID列表
    *
    * @return $this
    */
    public function setRegionIds($regionIds)
    {
        $this->container['regionIds'] = $regionIds;
        return $this;
    }

    /**
    * Gets resourceTypes
    *  云服务列表
    *
    * @return string[]|null
    */
    public function getResourceTypes()
    {
        return $this->container['resourceTypes'];
    }

    /**
    * Sets resourceTypes
    *
    * @param string[]|null $resourceTypes 云服务列表
    *
    * @return $this
    */
    public function setResourceTypes($resourceTypes)
    {
        $this->container['resourceTypes'] = $resourceTypes;
        return $this;
    }

    /**
    * Gets resourceIds
    *  资源ID列表
    *
    * @return string[]|null
    */
    public function getResourceIds()
    {
        return $this->container['resourceIds'];
    }

    /**
    * Sets resourceIds
    *
    * @param string[]|null $resourceIds 资源ID列表
    *
    * @return $this
    */
    public function setResourceIds($resourceIds)
    {
        $this->container['resourceIds'] = $resourceIds;
        return $this;
    }

    /**
    * Gets tagKeyLogic
    *  参数tags的取值逻辑，例如tags设置了a:a和b:b，当取值AND时，表示规则仅对同时绑定了a:a和b:b的资源生效；当取值为OR时，表示规则对任何绑定了a:a或b:b的资源生效。
    *
    * @return string|null
    */
    public function getTagKeyLogic()
    {
        return $this->container['tagKeyLogic'];
    }

    /**
    * Sets tagKeyLogic
    *
    * @param string|null $tagKeyLogic 参数tags的取值逻辑，例如tags设置了a:a和b:b，当取值AND时，表示规则仅对同时绑定了a:a和b:b的资源生效；当取值为OR时，表示规则对任何绑定了a:a或b:b的资源生效。
    *
    * @return $this
    */
    public function setTagKeyLogic($tagKeyLogic)
    {
        $this->container['tagKeyLogic'] = $tagKeyLogic;
        return $this;
    }

    /**
    * Gets tags
    *  生效标签列表
    *
    * @return \HuaweiCloud\SDK\Config\V1\Model\FilterTagDetail[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param \HuaweiCloud\SDK\Config\V1\Model\FilterTagDetail[]|null $tags 生效标签列表
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets excludeTagKeyLogic
    *  参数exclude_tags的取值逻辑，例如exclude_tags设置了a:a和b:b，当取值AND时，表示规则仅对同时绑定了a:a和b:b的资源生效；当取值为OR时，表示规则对任何绑定了a:a或b:b的资源生效。
    *
    * @return string|null
    */
    public function getExcludeTagKeyLogic()
    {
        return $this->container['excludeTagKeyLogic'];
    }

    /**
    * Sets excludeTagKeyLogic
    *
    * @param string|null $excludeTagKeyLogic 参数exclude_tags的取值逻辑，例如exclude_tags设置了a:a和b:b，当取值AND时，表示规则仅对同时绑定了a:a和b:b的资源生效；当取值为OR时，表示规则对任何绑定了a:a或b:b的资源生效。
    *
    * @return $this
    */
    public function setExcludeTagKeyLogic($excludeTagKeyLogic)
    {
        $this->container['excludeTagKeyLogic'] = $excludeTagKeyLogic;
        return $this;
    }

    /**
    * Gets excludeTags
    *  排除标签列表，排除标签列表比生效标签列表有更高的优先级
    *
    * @return \HuaweiCloud\SDK\Config\V1\Model\FilterTagDetail[]|null
    */
    public function getExcludeTags()
    {
        return $this->container['excludeTags'];
    }

    /**
    * Sets excludeTags
    *
    * @param \HuaweiCloud\SDK\Config\V1\Model\FilterTagDetail[]|null $excludeTags 排除标签列表，排除标签列表比生效标签列表有更高的优先级
    *
    * @return $this
    */
    public function setExcludeTags($excludeTags)
    {
        $this->container['excludeTags'] = $excludeTags;
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

