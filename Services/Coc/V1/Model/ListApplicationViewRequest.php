<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListApplicationViewRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListApplicationViewRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nameLike  **参数解释：** 名称模糊匹配，支持模糊查询。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * codeList  **参数解释：** 应用、组件、分组code组成。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * marker  **参数解释：** 分页参数，上一页请求最后一个id。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * limit  **参数解释：** 分页查询每页显示的条目数量。 **约束限制：** 不涉及。 **取值范围：** 自定义，在1-500范围。 **默认取值：** 不涉及。
    * pageNo  **参数解释：** 分页页码。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * isCollection  **参数解释：** 是否收藏。 **约束限制：** 不涉及。 **取值范围：** - true：在我的收藏去查询应用、组件、分组，默认为true。 - false：在全部应用中查询应用、组件、分组，可以不传。 **默认取值：** 默认未收藏。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nameLike' => 'string',
            'codeList' => 'string[]',
            'marker' => 'string',
            'limit' => 'int',
            'pageNo' => 'int',
            'isCollection' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nameLike  **参数解释：** 名称模糊匹配，支持模糊查询。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * codeList  **参数解释：** 应用、组件、分组code组成。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * marker  **参数解释：** 分页参数，上一页请求最后一个id。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * limit  **参数解释：** 分页查询每页显示的条目数量。 **约束限制：** 不涉及。 **取值范围：** 自定义，在1-500范围。 **默认取值：** 不涉及。
    * pageNo  **参数解释：** 分页页码。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * isCollection  **参数解释：** 是否收藏。 **约束限制：** 不涉及。 **取值范围：** - true：在我的收藏去查询应用、组件、分组，默认为true。 - false：在全部应用中查询应用、组件、分组，可以不传。 **默认取值：** 默认未收藏。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nameLike' => null,
        'codeList' => null,
        'marker' => null,
        'limit' => 'int32',
        'pageNo' => 'int32',
        'isCollection' => null
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
    * nameLike  **参数解释：** 名称模糊匹配，支持模糊查询。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * codeList  **参数解释：** 应用、组件、分组code组成。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * marker  **参数解释：** 分页参数，上一页请求最后一个id。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * limit  **参数解释：** 分页查询每页显示的条目数量。 **约束限制：** 不涉及。 **取值范围：** 自定义，在1-500范围。 **默认取值：** 不涉及。
    * pageNo  **参数解释：** 分页页码。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * isCollection  **参数解释：** 是否收藏。 **约束限制：** 不涉及。 **取值范围：** - true：在我的收藏去查询应用、组件、分组，默认为true。 - false：在全部应用中查询应用、组件、分组，可以不传。 **默认取值：** 默认未收藏。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nameLike' => 'name_like',
            'codeList' => 'code_list',
            'marker' => 'marker',
            'limit' => 'limit',
            'pageNo' => 'page_no',
            'isCollection' => 'is_collection'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nameLike  **参数解释：** 名称模糊匹配，支持模糊查询。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * codeList  **参数解释：** 应用、组件、分组code组成。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * marker  **参数解释：** 分页参数，上一页请求最后一个id。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * limit  **参数解释：** 分页查询每页显示的条目数量。 **约束限制：** 不涉及。 **取值范围：** 自定义，在1-500范围。 **默认取值：** 不涉及。
    * pageNo  **参数解释：** 分页页码。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * isCollection  **参数解释：** 是否收藏。 **约束限制：** 不涉及。 **取值范围：** - true：在我的收藏去查询应用、组件、分组，默认为true。 - false：在全部应用中查询应用、组件、分组，可以不传。 **默认取值：** 默认未收藏。
    *
    * @var string[]
    */
    protected static $setters = [
            'nameLike' => 'setNameLike',
            'codeList' => 'setCodeList',
            'marker' => 'setMarker',
            'limit' => 'setLimit',
            'pageNo' => 'setPageNo',
            'isCollection' => 'setIsCollection'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nameLike  **参数解释：** 名称模糊匹配，支持模糊查询。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * codeList  **参数解释：** 应用、组件、分组code组成。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * marker  **参数解释：** 分页参数，上一页请求最后一个id。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * limit  **参数解释：** 分页查询每页显示的条目数量。 **约束限制：** 不涉及。 **取值范围：** 自定义，在1-500范围。 **默认取值：** 不涉及。
    * pageNo  **参数解释：** 分页页码。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * isCollection  **参数解释：** 是否收藏。 **约束限制：** 不涉及。 **取值范围：** - true：在我的收藏去查询应用、组件、分组，默认为true。 - false：在全部应用中查询应用、组件、分组，可以不传。 **默认取值：** 默认未收藏。
    *
    * @var string[]
    */
    protected static $getters = [
            'nameLike' => 'getNameLike',
            'codeList' => 'getCodeList',
            'marker' => 'getMarker',
            'limit' => 'getLimit',
            'pageNo' => 'getPageNo',
            'isCollection' => 'getIsCollection'
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
        $this->container['nameLike'] = isset($data['nameLike']) ? $data['nameLike'] : null;
        $this->container['codeList'] = isset($data['codeList']) ? $data['codeList'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['pageNo'] = isset($data['pageNo']) ? $data['pageNo'] : null;
        $this->container['isCollection'] = isset($data['isCollection']) ? $data['isCollection'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['limit'] === null) {
            $invalidProperties[] = "'limit' can't be null";
        }
            if (($this->container['limit'] > 500)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 500.";
            }
            if (($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
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
    * Gets nameLike
    *  **参数解释：** 名称模糊匹配，支持模糊查询。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getNameLike()
    {
        return $this->container['nameLike'];
    }

    /**
    * Sets nameLike
    *
    * @param string|null $nameLike **参数解释：** 名称模糊匹配，支持模糊查询。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setNameLike($nameLike)
    {
        $this->container['nameLike'] = $nameLike;
        return $this;
    }

    /**
    * Gets codeList
    *  **参数解释：** 应用、组件、分组code组成。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string[]|null
    */
    public function getCodeList()
    {
        return $this->container['codeList'];
    }

    /**
    * Sets codeList
    *
    * @param string[]|null $codeList **参数解释：** 应用、组件、分组code组成。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setCodeList($codeList)
    {
        $this->container['codeList'] = $codeList;
        return $this;
    }

    /**
    * Gets marker
    *  **参数解释：** 分页参数，上一页请求最后一个id。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
    * Sets marker
    *
    * @param string|null $marker **参数解释：** 分页参数，上一页请求最后一个id。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释：** 分页查询每页显示的条目数量。 **约束限制：** 不涉及。 **取值范围：** 自定义，在1-500范围。 **默认取值：** 不涉及。
    *
    * @return int
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int $limit **参数解释：** 分页查询每页显示的条目数量。 **约束限制：** 不涉及。 **取值范围：** 自定义，在1-500范围。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets pageNo
    *  **参数解释：** 分页页码。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return int|null
    */
    public function getPageNo()
    {
        return $this->container['pageNo'];
    }

    /**
    * Sets pageNo
    *
    * @param int|null $pageNo **参数解释：** 分页页码。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setPageNo($pageNo)
    {
        $this->container['pageNo'] = $pageNo;
        return $this;
    }

    /**
    * Gets isCollection
    *  **参数解释：** 是否收藏。 **约束限制：** 不涉及。 **取值范围：** - true：在我的收藏去查询应用、组件、分组，默认为true。 - false：在全部应用中查询应用、组件、分组，可以不传。 **默认取值：** 默认未收藏。
    *
    * @return bool|null
    */
    public function getIsCollection()
    {
        return $this->container['isCollection'];
    }

    /**
    * Sets isCollection
    *
    * @param bool|null $isCollection **参数解释：** 是否收藏。 **约束限制：** 不涉及。 **取值范围：** - true：在我的收藏去查询应用、组件、分组，默认为true。 - false：在全部应用中查询应用、组件、分组，可以不传。 **默认取值：** 默认未收藏。
    *
    * @return $this
    */
    public function setIsCollection($isCollection)
    {
        $this->container['isCollection'] = $isCollection;
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

