<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CatalogueDetailInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CatalogueDetailInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  目录id
    * parentCatalogue  一级目录名称
    * secondCatalogue  二级目录名称
    * catalogueStatus  是否内置
    * catalogueAddress  目录地址
    * layoutId  布局ID
    * layoutName  布局名称
    * publisherName  发布者
    * isCardArea  是否展示名片区
    * isDisplay  是否展示目录
    * isLandingPage  是否为落地页
    * isNavigation  是否展示面包屑导航
    * parentAliasEn  一级目录英文别名
    * parentAliasZh  一级目录中文别名
    * secondAliasEn  二级目录英文别名
    * secondAliasZh  二级目录中文别名
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'parentCatalogue' => 'string',
            'secondCatalogue' => 'string',
            'catalogueStatus' => 'bool',
            'catalogueAddress' => 'string',
            'layoutId' => 'string',
            'layoutName' => 'string',
            'publisherName' => 'string',
            'isCardArea' => 'bool',
            'isDisplay' => 'bool',
            'isLandingPage' => 'bool',
            'isNavigation' => 'bool',
            'parentAliasEn' => 'string',
            'parentAliasZh' => 'string',
            'secondAliasEn' => 'string',
            'secondAliasZh' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  目录id
    * parentCatalogue  一级目录名称
    * secondCatalogue  二级目录名称
    * catalogueStatus  是否内置
    * catalogueAddress  目录地址
    * layoutId  布局ID
    * layoutName  布局名称
    * publisherName  发布者
    * isCardArea  是否展示名片区
    * isDisplay  是否展示目录
    * isLandingPage  是否为落地页
    * isNavigation  是否展示面包屑导航
    * parentAliasEn  一级目录英文别名
    * parentAliasZh  一级目录中文别名
    * secondAliasEn  二级目录英文别名
    * secondAliasZh  二级目录中文别名
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'parentCatalogue' => null,
        'secondCatalogue' => null,
        'catalogueStatus' => null,
        'catalogueAddress' => null,
        'layoutId' => null,
        'layoutName' => null,
        'publisherName' => null,
        'isCardArea' => null,
        'isDisplay' => null,
        'isLandingPage' => null,
        'isNavigation' => null,
        'parentAliasEn' => null,
        'parentAliasZh' => null,
        'secondAliasEn' => null,
        'secondAliasZh' => null
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
    * id  目录id
    * parentCatalogue  一级目录名称
    * secondCatalogue  二级目录名称
    * catalogueStatus  是否内置
    * catalogueAddress  目录地址
    * layoutId  布局ID
    * layoutName  布局名称
    * publisherName  发布者
    * isCardArea  是否展示名片区
    * isDisplay  是否展示目录
    * isLandingPage  是否为落地页
    * isNavigation  是否展示面包屑导航
    * parentAliasEn  一级目录英文别名
    * parentAliasZh  一级目录中文别名
    * secondAliasEn  二级目录英文别名
    * secondAliasZh  二级目录中文别名
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'parentCatalogue' => 'parent_catalogue',
            'secondCatalogue' => 'second_catalogue',
            'catalogueStatus' => 'catalogue_status',
            'catalogueAddress' => 'catalogue_address',
            'layoutId' => 'layout_id',
            'layoutName' => 'layout_name',
            'publisherName' => 'publisher_name',
            'isCardArea' => 'is_card_area',
            'isDisplay' => 'is_display',
            'isLandingPage' => 'is_landing_page',
            'isNavigation' => 'is_navigation',
            'parentAliasEn' => 'parent_alias_en',
            'parentAliasZh' => 'parent_alias_zh',
            'secondAliasEn' => 'second_alias_en',
            'secondAliasZh' => 'second_alias_zh'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  目录id
    * parentCatalogue  一级目录名称
    * secondCatalogue  二级目录名称
    * catalogueStatus  是否内置
    * catalogueAddress  目录地址
    * layoutId  布局ID
    * layoutName  布局名称
    * publisherName  发布者
    * isCardArea  是否展示名片区
    * isDisplay  是否展示目录
    * isLandingPage  是否为落地页
    * isNavigation  是否展示面包屑导航
    * parentAliasEn  一级目录英文别名
    * parentAliasZh  一级目录中文别名
    * secondAliasEn  二级目录英文别名
    * secondAliasZh  二级目录中文别名
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'parentCatalogue' => 'setParentCatalogue',
            'secondCatalogue' => 'setSecondCatalogue',
            'catalogueStatus' => 'setCatalogueStatus',
            'catalogueAddress' => 'setCatalogueAddress',
            'layoutId' => 'setLayoutId',
            'layoutName' => 'setLayoutName',
            'publisherName' => 'setPublisherName',
            'isCardArea' => 'setIsCardArea',
            'isDisplay' => 'setIsDisplay',
            'isLandingPage' => 'setIsLandingPage',
            'isNavigation' => 'setIsNavigation',
            'parentAliasEn' => 'setParentAliasEn',
            'parentAliasZh' => 'setParentAliasZh',
            'secondAliasEn' => 'setSecondAliasEn',
            'secondAliasZh' => 'setSecondAliasZh'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  目录id
    * parentCatalogue  一级目录名称
    * secondCatalogue  二级目录名称
    * catalogueStatus  是否内置
    * catalogueAddress  目录地址
    * layoutId  布局ID
    * layoutName  布局名称
    * publisherName  发布者
    * isCardArea  是否展示名片区
    * isDisplay  是否展示目录
    * isLandingPage  是否为落地页
    * isNavigation  是否展示面包屑导航
    * parentAliasEn  一级目录英文别名
    * parentAliasZh  一级目录中文别名
    * secondAliasEn  二级目录英文别名
    * secondAliasZh  二级目录中文别名
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'parentCatalogue' => 'getParentCatalogue',
            'secondCatalogue' => 'getSecondCatalogue',
            'catalogueStatus' => 'getCatalogueStatus',
            'catalogueAddress' => 'getCatalogueAddress',
            'layoutId' => 'getLayoutId',
            'layoutName' => 'getLayoutName',
            'publisherName' => 'getPublisherName',
            'isCardArea' => 'getIsCardArea',
            'isDisplay' => 'getIsDisplay',
            'isLandingPage' => 'getIsLandingPage',
            'isNavigation' => 'getIsNavigation',
            'parentAliasEn' => 'getParentAliasEn',
            'parentAliasZh' => 'getParentAliasZh',
            'secondAliasEn' => 'getSecondAliasEn',
            'secondAliasZh' => 'getSecondAliasZh'
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
        $this->container['parentCatalogue'] = isset($data['parentCatalogue']) ? $data['parentCatalogue'] : null;
        $this->container['secondCatalogue'] = isset($data['secondCatalogue']) ? $data['secondCatalogue'] : null;
        $this->container['catalogueStatus'] = isset($data['catalogueStatus']) ? $data['catalogueStatus'] : null;
        $this->container['catalogueAddress'] = isset($data['catalogueAddress']) ? $data['catalogueAddress'] : null;
        $this->container['layoutId'] = isset($data['layoutId']) ? $data['layoutId'] : null;
        $this->container['layoutName'] = isset($data['layoutName']) ? $data['layoutName'] : null;
        $this->container['publisherName'] = isset($data['publisherName']) ? $data['publisherName'] : null;
        $this->container['isCardArea'] = isset($data['isCardArea']) ? $data['isCardArea'] : null;
        $this->container['isDisplay'] = isset($data['isDisplay']) ? $data['isDisplay'] : null;
        $this->container['isLandingPage'] = isset($data['isLandingPage']) ? $data['isLandingPage'] : null;
        $this->container['isNavigation'] = isset($data['isNavigation']) ? $data['isNavigation'] : null;
        $this->container['parentAliasEn'] = isset($data['parentAliasEn']) ? $data['parentAliasEn'] : null;
        $this->container['parentAliasZh'] = isset($data['parentAliasZh']) ? $data['parentAliasZh'] : null;
        $this->container['secondAliasEn'] = isset($data['secondAliasEn']) ? $data['secondAliasEn'] : null;
        $this->container['secondAliasZh'] = isset($data['secondAliasZh']) ? $data['secondAliasZh'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && !preg_match("/[a-f0-9]{32}/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /[a-f0-9]{32}/.";
            }
            if (!is_null($this->container['parentCatalogue']) && (mb_strlen($this->container['parentCatalogue']) > 64)) {
                $invalidProperties[] = "invalid value for 'parentCatalogue', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['parentCatalogue']) && (mb_strlen($this->container['parentCatalogue']) < 2)) {
                $invalidProperties[] = "invalid value for 'parentCatalogue', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['secondCatalogue']) && (mb_strlen($this->container['secondCatalogue']) > 64)) {
                $invalidProperties[] = "invalid value for 'secondCatalogue', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['secondCatalogue']) && (mb_strlen($this->container['secondCatalogue']) < 2)) {
                $invalidProperties[] = "invalid value for 'secondCatalogue', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['catalogueAddress']) && (mb_strlen($this->container['catalogueAddress']) > 128)) {
                $invalidProperties[] = "invalid value for 'catalogueAddress', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['catalogueAddress']) && (mb_strlen($this->container['catalogueAddress']) < 8)) {
                $invalidProperties[] = "invalid value for 'catalogueAddress', the character length must be bigger than or equal to 8.";
            }
            if (!is_null($this->container['catalogueAddress']) && !preg_match("/^https:\/\//", $this->container['catalogueAddress'])) {
                $invalidProperties[] = "invalid value for 'catalogueAddress', must be conform to the pattern /^https:\/\//.";
            }
            if (!is_null($this->container['layoutId']) && (mb_strlen($this->container['layoutId']) > 64)) {
                $invalidProperties[] = "invalid value for 'layoutId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['layoutId']) && (mb_strlen($this->container['layoutId']) < 32)) {
                $invalidProperties[] = "invalid value for 'layoutId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['layoutName']) && (mb_strlen($this->container['layoutName']) > 64)) {
                $invalidProperties[] = "invalid value for 'layoutName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['layoutName']) && (mb_strlen($this->container['layoutName']) < 2)) {
                $invalidProperties[] = "invalid value for 'layoutName', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['publisherName']) && (mb_strlen($this->container['publisherName']) > 64)) {
                $invalidProperties[] = "invalid value for 'publisherName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['publisherName']) && (mb_strlen($this->container['publisherName']) < 2)) {
                $invalidProperties[] = "invalid value for 'publisherName', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['parentAliasEn']) && (mb_strlen($this->container['parentAliasEn']) > 64)) {
                $invalidProperties[] = "invalid value for 'parentAliasEn', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['parentAliasEn']) && (mb_strlen($this->container['parentAliasEn']) < 2)) {
                $invalidProperties[] = "invalid value for 'parentAliasEn', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['parentAliasZh']) && (mb_strlen($this->container['parentAliasZh']) > 64)) {
                $invalidProperties[] = "invalid value for 'parentAliasZh', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['parentAliasZh']) && (mb_strlen($this->container['parentAliasZh']) < 2)) {
                $invalidProperties[] = "invalid value for 'parentAliasZh', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['secondAliasEn']) && (mb_strlen($this->container['secondAliasEn']) > 64)) {
                $invalidProperties[] = "invalid value for 'secondAliasEn', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['secondAliasEn']) && (mb_strlen($this->container['secondAliasEn']) < 2)) {
                $invalidProperties[] = "invalid value for 'secondAliasEn', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['secondAliasZh']) && (mb_strlen($this->container['secondAliasZh']) > 64)) {
                $invalidProperties[] = "invalid value for 'secondAliasZh', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['secondAliasZh']) && (mb_strlen($this->container['secondAliasZh']) < 2)) {
                $invalidProperties[] = "invalid value for 'secondAliasZh', the character length must be bigger than or equal to 2.";
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
    * Gets id
    *  目录id
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
    * @param string|null $id 目录id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets parentCatalogue
    *  一级目录名称
    *
    * @return string|null
    */
    public function getParentCatalogue()
    {
        return $this->container['parentCatalogue'];
    }

    /**
    * Sets parentCatalogue
    *
    * @param string|null $parentCatalogue 一级目录名称
    *
    * @return $this
    */
    public function setParentCatalogue($parentCatalogue)
    {
        $this->container['parentCatalogue'] = $parentCatalogue;
        return $this;
    }

    /**
    * Gets secondCatalogue
    *  二级目录名称
    *
    * @return string|null
    */
    public function getSecondCatalogue()
    {
        return $this->container['secondCatalogue'];
    }

    /**
    * Sets secondCatalogue
    *
    * @param string|null $secondCatalogue 二级目录名称
    *
    * @return $this
    */
    public function setSecondCatalogue($secondCatalogue)
    {
        $this->container['secondCatalogue'] = $secondCatalogue;
        return $this;
    }

    /**
    * Gets catalogueStatus
    *  是否内置
    *
    * @return bool|null
    */
    public function getCatalogueStatus()
    {
        return $this->container['catalogueStatus'];
    }

    /**
    * Sets catalogueStatus
    *
    * @param bool|null $catalogueStatus 是否内置
    *
    * @return $this
    */
    public function setCatalogueStatus($catalogueStatus)
    {
        $this->container['catalogueStatus'] = $catalogueStatus;
        return $this;
    }

    /**
    * Gets catalogueAddress
    *  目录地址
    *
    * @return string|null
    */
    public function getCatalogueAddress()
    {
        return $this->container['catalogueAddress'];
    }

    /**
    * Sets catalogueAddress
    *
    * @param string|null $catalogueAddress 目录地址
    *
    * @return $this
    */
    public function setCatalogueAddress($catalogueAddress)
    {
        $this->container['catalogueAddress'] = $catalogueAddress;
        return $this;
    }

    /**
    * Gets layoutId
    *  布局ID
    *
    * @return string|null
    */
    public function getLayoutId()
    {
        return $this->container['layoutId'];
    }

    /**
    * Sets layoutId
    *
    * @param string|null $layoutId 布局ID
    *
    * @return $this
    */
    public function setLayoutId($layoutId)
    {
        $this->container['layoutId'] = $layoutId;
        return $this;
    }

    /**
    * Gets layoutName
    *  布局名称
    *
    * @return string|null
    */
    public function getLayoutName()
    {
        return $this->container['layoutName'];
    }

    /**
    * Sets layoutName
    *
    * @param string|null $layoutName 布局名称
    *
    * @return $this
    */
    public function setLayoutName($layoutName)
    {
        $this->container['layoutName'] = $layoutName;
        return $this;
    }

    /**
    * Gets publisherName
    *  发布者
    *
    * @return string|null
    */
    public function getPublisherName()
    {
        return $this->container['publisherName'];
    }

    /**
    * Sets publisherName
    *
    * @param string|null $publisherName 发布者
    *
    * @return $this
    */
    public function setPublisherName($publisherName)
    {
        $this->container['publisherName'] = $publisherName;
        return $this;
    }

    /**
    * Gets isCardArea
    *  是否展示名片区
    *
    * @return bool|null
    */
    public function getIsCardArea()
    {
        return $this->container['isCardArea'];
    }

    /**
    * Sets isCardArea
    *
    * @param bool|null $isCardArea 是否展示名片区
    *
    * @return $this
    */
    public function setIsCardArea($isCardArea)
    {
        $this->container['isCardArea'] = $isCardArea;
        return $this;
    }

    /**
    * Gets isDisplay
    *  是否展示目录
    *
    * @return bool|null
    */
    public function getIsDisplay()
    {
        return $this->container['isDisplay'];
    }

    /**
    * Sets isDisplay
    *
    * @param bool|null $isDisplay 是否展示目录
    *
    * @return $this
    */
    public function setIsDisplay($isDisplay)
    {
        $this->container['isDisplay'] = $isDisplay;
        return $this;
    }

    /**
    * Gets isLandingPage
    *  是否为落地页
    *
    * @return bool|null
    */
    public function getIsLandingPage()
    {
        return $this->container['isLandingPage'];
    }

    /**
    * Sets isLandingPage
    *
    * @param bool|null $isLandingPage 是否为落地页
    *
    * @return $this
    */
    public function setIsLandingPage($isLandingPage)
    {
        $this->container['isLandingPage'] = $isLandingPage;
        return $this;
    }

    /**
    * Gets isNavigation
    *  是否展示面包屑导航
    *
    * @return bool|null
    */
    public function getIsNavigation()
    {
        return $this->container['isNavigation'];
    }

    /**
    * Sets isNavigation
    *
    * @param bool|null $isNavigation 是否展示面包屑导航
    *
    * @return $this
    */
    public function setIsNavigation($isNavigation)
    {
        $this->container['isNavigation'] = $isNavigation;
        return $this;
    }

    /**
    * Gets parentAliasEn
    *  一级目录英文别名
    *
    * @return string|null
    */
    public function getParentAliasEn()
    {
        return $this->container['parentAliasEn'];
    }

    /**
    * Sets parentAliasEn
    *
    * @param string|null $parentAliasEn 一级目录英文别名
    *
    * @return $this
    */
    public function setParentAliasEn($parentAliasEn)
    {
        $this->container['parentAliasEn'] = $parentAliasEn;
        return $this;
    }

    /**
    * Gets parentAliasZh
    *  一级目录中文别名
    *
    * @return string|null
    */
    public function getParentAliasZh()
    {
        return $this->container['parentAliasZh'];
    }

    /**
    * Sets parentAliasZh
    *
    * @param string|null $parentAliasZh 一级目录中文别名
    *
    * @return $this
    */
    public function setParentAliasZh($parentAliasZh)
    {
        $this->container['parentAliasZh'] = $parentAliasZh;
        return $this;
    }

    /**
    * Gets secondAliasEn
    *  二级目录英文别名
    *
    * @return string|null
    */
    public function getSecondAliasEn()
    {
        return $this->container['secondAliasEn'];
    }

    /**
    * Sets secondAliasEn
    *
    * @param string|null $secondAliasEn 二级目录英文别名
    *
    * @return $this
    */
    public function setSecondAliasEn($secondAliasEn)
    {
        $this->container['secondAliasEn'] = $secondAliasEn;
        return $this;
    }

    /**
    * Gets secondAliasZh
    *  二级目录中文别名
    *
    * @return string|null
    */
    public function getSecondAliasZh()
    {
        return $this->container['secondAliasZh'];
    }

    /**
    * Sets secondAliasZh
    *
    * @param string|null $secondAliasZh 二级目录中文别名
    *
    * @return $this
    */
    public function setSecondAliasZh($secondAliasZh)
    {
        $this->container['secondAliasZh'] = $secondAliasZh;
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

