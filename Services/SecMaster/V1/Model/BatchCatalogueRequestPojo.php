<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchCatalogueRequestPojo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchCatalogueRequestPojo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isNavigation  是否显示面包屑导航
    * isCardArea  是否显示名片区
    * landingPage  落地页
    * parentAliasZh  一级目录中文别名
    * parentAliasEn  一级目录中文别名
    * parentCatalogue  一级目录名称
    * catalogueInfos  目录详情列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isNavigation' => 'bool',
            'isCardArea' => 'bool',
            'landingPage' => 'string',
            'parentAliasZh' => 'string',
            'parentAliasEn' => 'string',
            'parentCatalogue' => 'string',
            'catalogueInfos' => '\HuaweiCloud\SDK\SecMaster\V1\Model\CatalogueBatchPojo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isNavigation  是否显示面包屑导航
    * isCardArea  是否显示名片区
    * landingPage  落地页
    * parentAliasZh  一级目录中文别名
    * parentAliasEn  一级目录中文别名
    * parentCatalogue  一级目录名称
    * catalogueInfos  目录详情列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isNavigation' => null,
        'isCardArea' => null,
        'landingPage' => null,
        'parentAliasZh' => null,
        'parentAliasEn' => null,
        'parentCatalogue' => null,
        'catalogueInfos' => null
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
    * isNavigation  是否显示面包屑导航
    * isCardArea  是否显示名片区
    * landingPage  落地页
    * parentAliasZh  一级目录中文别名
    * parentAliasEn  一级目录中文别名
    * parentCatalogue  一级目录名称
    * catalogueInfos  目录详情列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isNavigation' => 'is_navigation',
            'isCardArea' => 'is_card_area',
            'landingPage' => 'landing_page',
            'parentAliasZh' => 'parent_alias_zh',
            'parentAliasEn' => 'parent_alias_en',
            'parentCatalogue' => 'parent_catalogue',
            'catalogueInfos' => 'catalogue_infos'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isNavigation  是否显示面包屑导航
    * isCardArea  是否显示名片区
    * landingPage  落地页
    * parentAliasZh  一级目录中文别名
    * parentAliasEn  一级目录中文别名
    * parentCatalogue  一级目录名称
    * catalogueInfos  目录详情列表
    *
    * @var string[]
    */
    protected static $setters = [
            'isNavigation' => 'setIsNavigation',
            'isCardArea' => 'setIsCardArea',
            'landingPage' => 'setLandingPage',
            'parentAliasZh' => 'setParentAliasZh',
            'parentAliasEn' => 'setParentAliasEn',
            'parentCatalogue' => 'setParentCatalogue',
            'catalogueInfos' => 'setCatalogueInfos'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isNavigation  是否显示面包屑导航
    * isCardArea  是否显示名片区
    * landingPage  落地页
    * parentAliasZh  一级目录中文别名
    * parentAliasEn  一级目录中文别名
    * parentCatalogue  一级目录名称
    * catalogueInfos  目录详情列表
    *
    * @var string[]
    */
    protected static $getters = [
            'isNavigation' => 'getIsNavigation',
            'isCardArea' => 'getIsCardArea',
            'landingPage' => 'getLandingPage',
            'parentAliasZh' => 'getParentAliasZh',
            'parentAliasEn' => 'getParentAliasEn',
            'parentCatalogue' => 'getParentCatalogue',
            'catalogueInfos' => 'getCatalogueInfos'
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
        $this->container['isNavigation'] = isset($data['isNavigation']) ? $data['isNavigation'] : null;
        $this->container['isCardArea'] = isset($data['isCardArea']) ? $data['isCardArea'] : null;
        $this->container['landingPage'] = isset($data['landingPage']) ? $data['landingPage'] : null;
        $this->container['parentAliasZh'] = isset($data['parentAliasZh']) ? $data['parentAliasZh'] : null;
        $this->container['parentAliasEn'] = isset($data['parentAliasEn']) ? $data['parentAliasEn'] : null;
        $this->container['parentCatalogue'] = isset($data['parentCatalogue']) ? $data['parentCatalogue'] : null;
        $this->container['catalogueInfos'] = isset($data['catalogueInfos']) ? $data['catalogueInfos'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['landingPage']) && (mb_strlen($this->container['landingPage']) > 64)) {
                $invalidProperties[] = "invalid value for 'landingPage', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['landingPage']) && (mb_strlen($this->container['landingPage']) < 1)) {
                $invalidProperties[] = "invalid value for 'landingPage', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['parentAliasZh']) && (mb_strlen($this->container['parentAliasZh']) > 64)) {
                $invalidProperties[] = "invalid value for 'parentAliasZh', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['parentAliasZh']) && (mb_strlen($this->container['parentAliasZh']) < 1)) {
                $invalidProperties[] = "invalid value for 'parentAliasZh', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['parentAliasEn']) && (mb_strlen($this->container['parentAliasEn']) > 64)) {
                $invalidProperties[] = "invalid value for 'parentAliasEn', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['parentAliasEn']) && (mb_strlen($this->container['parentAliasEn']) < 1)) {
                $invalidProperties[] = "invalid value for 'parentAliasEn', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['parentCatalogue']) && (mb_strlen($this->container['parentCatalogue']) > 64)) {
                $invalidProperties[] = "invalid value for 'parentCatalogue', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['parentCatalogue']) && (mb_strlen($this->container['parentCatalogue']) < 1)) {
                $invalidProperties[] = "invalid value for 'parentCatalogue', the character length must be bigger than or equal to 1.";
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
    * Gets isNavigation
    *  是否显示面包屑导航
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
    * @param bool|null $isNavigation 是否显示面包屑导航
    *
    * @return $this
    */
    public function setIsNavigation($isNavigation)
    {
        $this->container['isNavigation'] = $isNavigation;
        return $this;
    }

    /**
    * Gets isCardArea
    *  是否显示名片区
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
    * @param bool|null $isCardArea 是否显示名片区
    *
    * @return $this
    */
    public function setIsCardArea($isCardArea)
    {
        $this->container['isCardArea'] = $isCardArea;
        return $this;
    }

    /**
    * Gets landingPage
    *  落地页
    *
    * @return string|null
    */
    public function getLandingPage()
    {
        return $this->container['landingPage'];
    }

    /**
    * Sets landingPage
    *
    * @param string|null $landingPage 落地页
    *
    * @return $this
    */
    public function setLandingPage($landingPage)
    {
        $this->container['landingPage'] = $landingPage;
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
    * Gets parentAliasEn
    *  一级目录中文别名
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
    * @param string|null $parentAliasEn 一级目录中文别名
    *
    * @return $this
    */
    public function setParentAliasEn($parentAliasEn)
    {
        $this->container['parentAliasEn'] = $parentAliasEn;
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
    * Gets catalogueInfos
    *  目录详情列表
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\CatalogueBatchPojo[]|null
    */
    public function getCatalogueInfos()
    {
        return $this->container['catalogueInfos'];
    }

    /**
    * Sets catalogueInfos
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\CatalogueBatchPojo[]|null $catalogueInfos 目录详情列表
    *
    * @return $this
    */
    public function setCatalogueInfos($catalogueInfos)
    {
        $this->container['catalogueInfos'] = $catalogueInfos;
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

