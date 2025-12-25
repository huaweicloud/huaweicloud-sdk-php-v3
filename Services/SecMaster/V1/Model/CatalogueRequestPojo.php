<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CatalogueRequestPojo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CatalogueRequestPojo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * parentCatalogue  一级目录名称
    * parentAliasEn  一级目录英文别名
    * parentAliasZh  一级目录中文别名
    * secondCatalogue  二级目录名称
    * secondAliasEn  二级目录英文别名
    * secondAliasZh  二级目录中文别名
    * secondCatalogueCode  目录编码
    * layoutId  布局ID.
    * layoutName  布局名称
    * catalogueAddress  目录地址
    * publisherName  发布者
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'parentCatalogue' => 'string',
            'parentAliasEn' => 'string',
            'parentAliasZh' => 'string',
            'secondCatalogue' => 'string',
            'secondAliasEn' => 'string',
            'secondAliasZh' => 'string',
            'secondCatalogueCode' => 'string',
            'layoutId' => 'string',
            'layoutName' => 'string',
            'catalogueAddress' => 'string',
            'publisherName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * parentCatalogue  一级目录名称
    * parentAliasEn  一级目录英文别名
    * parentAliasZh  一级目录中文别名
    * secondCatalogue  二级目录名称
    * secondAliasEn  二级目录英文别名
    * secondAliasZh  二级目录中文别名
    * secondCatalogueCode  目录编码
    * layoutId  布局ID.
    * layoutName  布局名称
    * catalogueAddress  目录地址
    * publisherName  发布者
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'parentCatalogue' => null,
        'parentAliasEn' => null,
        'parentAliasZh' => null,
        'secondCatalogue' => null,
        'secondAliasEn' => null,
        'secondAliasZh' => null,
        'secondCatalogueCode' => null,
        'layoutId' => null,
        'layoutName' => null,
        'catalogueAddress' => null,
        'publisherName' => null
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
    * parentCatalogue  一级目录名称
    * parentAliasEn  一级目录英文别名
    * parentAliasZh  一级目录中文别名
    * secondCatalogue  二级目录名称
    * secondAliasEn  二级目录英文别名
    * secondAliasZh  二级目录中文别名
    * secondCatalogueCode  目录编码
    * layoutId  布局ID.
    * layoutName  布局名称
    * catalogueAddress  目录地址
    * publisherName  发布者
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'parentCatalogue' => 'parent_catalogue',
            'parentAliasEn' => 'parent_alias_en',
            'parentAliasZh' => 'parent_alias_zh',
            'secondCatalogue' => 'second_catalogue',
            'secondAliasEn' => 'second_alias_en',
            'secondAliasZh' => 'second_alias_zh',
            'secondCatalogueCode' => 'second_catalogue_code',
            'layoutId' => 'layout_id',
            'layoutName' => 'layout_name',
            'catalogueAddress' => 'catalogue_address',
            'publisherName' => 'publisher_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * parentCatalogue  一级目录名称
    * parentAliasEn  一级目录英文别名
    * parentAliasZh  一级目录中文别名
    * secondCatalogue  二级目录名称
    * secondAliasEn  二级目录英文别名
    * secondAliasZh  二级目录中文别名
    * secondCatalogueCode  目录编码
    * layoutId  布局ID.
    * layoutName  布局名称
    * catalogueAddress  目录地址
    * publisherName  发布者
    *
    * @var string[]
    */
    protected static $setters = [
            'parentCatalogue' => 'setParentCatalogue',
            'parentAliasEn' => 'setParentAliasEn',
            'parentAliasZh' => 'setParentAliasZh',
            'secondCatalogue' => 'setSecondCatalogue',
            'secondAliasEn' => 'setSecondAliasEn',
            'secondAliasZh' => 'setSecondAliasZh',
            'secondCatalogueCode' => 'setSecondCatalogueCode',
            'layoutId' => 'setLayoutId',
            'layoutName' => 'setLayoutName',
            'catalogueAddress' => 'setCatalogueAddress',
            'publisherName' => 'setPublisherName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * parentCatalogue  一级目录名称
    * parentAliasEn  一级目录英文别名
    * parentAliasZh  一级目录中文别名
    * secondCatalogue  二级目录名称
    * secondAliasEn  二级目录英文别名
    * secondAliasZh  二级目录中文别名
    * secondCatalogueCode  目录编码
    * layoutId  布局ID.
    * layoutName  布局名称
    * catalogueAddress  目录地址
    * publisherName  发布者
    *
    * @var string[]
    */
    protected static $getters = [
            'parentCatalogue' => 'getParentCatalogue',
            'parentAliasEn' => 'getParentAliasEn',
            'parentAliasZh' => 'getParentAliasZh',
            'secondCatalogue' => 'getSecondCatalogue',
            'secondAliasEn' => 'getSecondAliasEn',
            'secondAliasZh' => 'getSecondAliasZh',
            'secondCatalogueCode' => 'getSecondCatalogueCode',
            'layoutId' => 'getLayoutId',
            'layoutName' => 'getLayoutName',
            'catalogueAddress' => 'getCatalogueAddress',
            'publisherName' => 'getPublisherName'
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
        $this->container['parentCatalogue'] = isset($data['parentCatalogue']) ? $data['parentCatalogue'] : null;
        $this->container['parentAliasEn'] = isset($data['parentAliasEn']) ? $data['parentAliasEn'] : null;
        $this->container['parentAliasZh'] = isset($data['parentAliasZh']) ? $data['parentAliasZh'] : null;
        $this->container['secondCatalogue'] = isset($data['secondCatalogue']) ? $data['secondCatalogue'] : null;
        $this->container['secondAliasEn'] = isset($data['secondAliasEn']) ? $data['secondAliasEn'] : null;
        $this->container['secondAliasZh'] = isset($data['secondAliasZh']) ? $data['secondAliasZh'] : null;
        $this->container['secondCatalogueCode'] = isset($data['secondCatalogueCode']) ? $data['secondCatalogueCode'] : null;
        $this->container['layoutId'] = isset($data['layoutId']) ? $data['layoutId'] : null;
        $this->container['layoutName'] = isset($data['layoutName']) ? $data['layoutName'] : null;
        $this->container['catalogueAddress'] = isset($data['catalogueAddress']) ? $data['catalogueAddress'] : null;
        $this->container['publisherName'] = isset($data['publisherName']) ? $data['publisherName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['parentCatalogue'] === null) {
            $invalidProperties[] = "'parentCatalogue' can't be null";
        }
            if ((mb_strlen($this->container['parentCatalogue']) > 64)) {
                $invalidProperties[] = "invalid value for 'parentCatalogue', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['parentCatalogue']) < 2)) {
                $invalidProperties[] = "invalid value for 'parentCatalogue', the character length must be bigger than or equal to 2.";
            }
        if ($this->container['parentAliasEn'] === null) {
            $invalidProperties[] = "'parentAliasEn' can't be null";
        }
            if ((mb_strlen($this->container['parentAliasEn']) > 64)) {
                $invalidProperties[] = "invalid value for 'parentAliasEn', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['parentAliasEn']) < 2)) {
                $invalidProperties[] = "invalid value for 'parentAliasEn', the character length must be bigger than or equal to 2.";
            }
        if ($this->container['parentAliasZh'] === null) {
            $invalidProperties[] = "'parentAliasZh' can't be null";
        }
            if ((mb_strlen($this->container['parentAliasZh']) > 64)) {
                $invalidProperties[] = "invalid value for 'parentAliasZh', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['parentAliasZh']) < 2)) {
                $invalidProperties[] = "invalid value for 'parentAliasZh', the character length must be bigger than or equal to 2.";
            }
        if ($this->container['secondCatalogue'] === null) {
            $invalidProperties[] = "'secondCatalogue' can't be null";
        }
            if ((mb_strlen($this->container['secondCatalogue']) > 64)) {
                $invalidProperties[] = "invalid value for 'secondCatalogue', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['secondCatalogue']) < 2)) {
                $invalidProperties[] = "invalid value for 'secondCatalogue', the character length must be bigger than or equal to 2.";
            }
        if ($this->container['secondAliasEn'] === null) {
            $invalidProperties[] = "'secondAliasEn' can't be null";
        }
            if ((mb_strlen($this->container['secondAliasEn']) > 64)) {
                $invalidProperties[] = "invalid value for 'secondAliasEn', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['secondAliasEn']) < 2)) {
                $invalidProperties[] = "invalid value for 'secondAliasEn', the character length must be bigger than or equal to 2.";
            }
        if ($this->container['secondAliasZh'] === null) {
            $invalidProperties[] = "'secondAliasZh' can't be null";
        }
            if ((mb_strlen($this->container['secondAliasZh']) > 64)) {
                $invalidProperties[] = "invalid value for 'secondAliasZh', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['secondAliasZh']) < 2)) {
                $invalidProperties[] = "invalid value for 'secondAliasZh', the character length must be bigger than or equal to 2.";
            }
        if ($this->container['secondCatalogueCode'] === null) {
            $invalidProperties[] = "'secondCatalogueCode' can't be null";
        }
            if ((mb_strlen($this->container['secondCatalogueCode']) > 64)) {
                $invalidProperties[] = "invalid value for 'secondCatalogueCode', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['secondCatalogueCode']) < 1)) {
                $invalidProperties[] = "invalid value for 'secondCatalogueCode', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['layoutId'] === null) {
            $invalidProperties[] = "'layoutId' can't be null";
        }
            if ((mb_strlen($this->container['layoutId']) > 64)) {
                $invalidProperties[] = "invalid value for 'layoutId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['layoutId']) < 32)) {
                $invalidProperties[] = "invalid value for 'layoutId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['layoutName']) && (mb_strlen($this->container['layoutName']) > 64)) {
                $invalidProperties[] = "invalid value for 'layoutName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['layoutName']) && (mb_strlen($this->container['layoutName']) < 32)) {
                $invalidProperties[] = "invalid value for 'layoutName', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['catalogueAddress'] === null) {
            $invalidProperties[] = "'catalogueAddress' can't be null";
        }
            if ((mb_strlen($this->container['catalogueAddress']) > 128)) {
                $invalidProperties[] = "invalid value for 'catalogueAddress', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['catalogueAddress']) < 8)) {
                $invalidProperties[] = "invalid value for 'catalogueAddress', the character length must be bigger than or equal to 8.";
            }
            if (!is_null($this->container['publisherName']) && (mb_strlen($this->container['publisherName']) > 64)) {
                $invalidProperties[] = "invalid value for 'publisherName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['publisherName']) && (mb_strlen($this->container['publisherName']) < 1)) {
                $invalidProperties[] = "invalid value for 'publisherName', the character length must be bigger than or equal to 1.";
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
    * Gets parentCatalogue
    *  一级目录名称
    *
    * @return string
    */
    public function getParentCatalogue()
    {
        return $this->container['parentCatalogue'];
    }

    /**
    * Sets parentCatalogue
    *
    * @param string $parentCatalogue 一级目录名称
    *
    * @return $this
    */
    public function setParentCatalogue($parentCatalogue)
    {
        $this->container['parentCatalogue'] = $parentCatalogue;
        return $this;
    }

    /**
    * Gets parentAliasEn
    *  一级目录英文别名
    *
    * @return string
    */
    public function getParentAliasEn()
    {
        return $this->container['parentAliasEn'];
    }

    /**
    * Sets parentAliasEn
    *
    * @param string $parentAliasEn 一级目录英文别名
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
    * @return string
    */
    public function getParentAliasZh()
    {
        return $this->container['parentAliasZh'];
    }

    /**
    * Sets parentAliasZh
    *
    * @param string $parentAliasZh 一级目录中文别名
    *
    * @return $this
    */
    public function setParentAliasZh($parentAliasZh)
    {
        $this->container['parentAliasZh'] = $parentAliasZh;
        return $this;
    }

    /**
    * Gets secondCatalogue
    *  二级目录名称
    *
    * @return string
    */
    public function getSecondCatalogue()
    {
        return $this->container['secondCatalogue'];
    }

    /**
    * Sets secondCatalogue
    *
    * @param string $secondCatalogue 二级目录名称
    *
    * @return $this
    */
    public function setSecondCatalogue($secondCatalogue)
    {
        $this->container['secondCatalogue'] = $secondCatalogue;
        return $this;
    }

    /**
    * Gets secondAliasEn
    *  二级目录英文别名
    *
    * @return string
    */
    public function getSecondAliasEn()
    {
        return $this->container['secondAliasEn'];
    }

    /**
    * Sets secondAliasEn
    *
    * @param string $secondAliasEn 二级目录英文别名
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
    * @return string
    */
    public function getSecondAliasZh()
    {
        return $this->container['secondAliasZh'];
    }

    /**
    * Sets secondAliasZh
    *
    * @param string $secondAliasZh 二级目录中文别名
    *
    * @return $this
    */
    public function setSecondAliasZh($secondAliasZh)
    {
        $this->container['secondAliasZh'] = $secondAliasZh;
        return $this;
    }

    /**
    * Gets secondCatalogueCode
    *  目录编码
    *
    * @return string
    */
    public function getSecondCatalogueCode()
    {
        return $this->container['secondCatalogueCode'];
    }

    /**
    * Sets secondCatalogueCode
    *
    * @param string $secondCatalogueCode 目录编码
    *
    * @return $this
    */
    public function setSecondCatalogueCode($secondCatalogueCode)
    {
        $this->container['secondCatalogueCode'] = $secondCatalogueCode;
        return $this;
    }

    /**
    * Gets layoutId
    *  布局ID.
    *
    * @return string
    */
    public function getLayoutId()
    {
        return $this->container['layoutId'];
    }

    /**
    * Sets layoutId
    *
    * @param string $layoutId 布局ID.
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
    * Gets catalogueAddress
    *  目录地址
    *
    * @return string
    */
    public function getCatalogueAddress()
    {
        return $this->container['catalogueAddress'];
    }

    /**
    * Sets catalogueAddress
    *
    * @param string $catalogueAddress 目录地址
    *
    * @return $this
    */
    public function setCatalogueAddress($catalogueAddress)
    {
        $this->container['catalogueAddress'] = $catalogueAddress;
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

