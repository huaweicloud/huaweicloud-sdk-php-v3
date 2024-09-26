<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListGlobalConnectionBandwidthSitesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListGlobalConnectionBandwidthSitesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * limit  每页返回的个数。 取值范围：1~1000。
    * marker  翻页信息，从上次API调用返回的翻页数据中获取，可填写前一页marker或者后一页marker，填入前一页previous_marker就向前翻页，后一页next_marker就向翻页。 翻页过程中，查询条件不能修改，包括过滤条件，排序条件，limit。
    * id  根据id查询，可查询多个id。
    * nameEn  站点信息自定义英文名称。
    * nameCn  站点信息自定义中文名称。
    * siteCode  站点编码。
    * siteType  站点类型： - Area: 大区 - SubArea: 区域 - Region: 城域
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'limit' => 'int',
            'marker' => 'string',
            'id' => 'string[]',
            'nameEn' => 'string',
            'nameCn' => 'string',
            'siteCode' => 'string',
            'siteType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * limit  每页返回的个数。 取值范围：1~1000。
    * marker  翻页信息，从上次API调用返回的翻页数据中获取，可填写前一页marker或者后一页marker，填入前一页previous_marker就向前翻页，后一页next_marker就向翻页。 翻页过程中，查询条件不能修改，包括过滤条件，排序条件，limit。
    * id  根据id查询，可查询多个id。
    * nameEn  站点信息自定义英文名称。
    * nameCn  站点信息自定义中文名称。
    * siteCode  站点编码。
    * siteType  站点类型： - Area: 大区 - SubArea: 区域 - Region: 城域
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'limit' => 'int32',
        'marker' => null,
        'id' => null,
        'nameEn' => null,
        'nameCn' => null,
        'siteCode' => null,
        'siteType' => null
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
    * limit  每页返回的个数。 取值范围：1~1000。
    * marker  翻页信息，从上次API调用返回的翻页数据中获取，可填写前一页marker或者后一页marker，填入前一页previous_marker就向前翻页，后一页next_marker就向翻页。 翻页过程中，查询条件不能修改，包括过滤条件，排序条件，limit。
    * id  根据id查询，可查询多个id。
    * nameEn  站点信息自定义英文名称。
    * nameCn  站点信息自定义中文名称。
    * siteCode  站点编码。
    * siteType  站点类型： - Area: 大区 - SubArea: 区域 - Region: 城域
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'limit' => 'limit',
            'marker' => 'marker',
            'id' => 'id',
            'nameEn' => 'name_en',
            'nameCn' => 'name_cn',
            'siteCode' => 'site_code',
            'siteType' => 'site_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * limit  每页返回的个数。 取值范围：1~1000。
    * marker  翻页信息，从上次API调用返回的翻页数据中获取，可填写前一页marker或者后一页marker，填入前一页previous_marker就向前翻页，后一页next_marker就向翻页。 翻页过程中，查询条件不能修改，包括过滤条件，排序条件，limit。
    * id  根据id查询，可查询多个id。
    * nameEn  站点信息自定义英文名称。
    * nameCn  站点信息自定义中文名称。
    * siteCode  站点编码。
    * siteType  站点类型： - Area: 大区 - SubArea: 区域 - Region: 城域
    *
    * @var string[]
    */
    protected static $setters = [
            'limit' => 'setLimit',
            'marker' => 'setMarker',
            'id' => 'setId',
            'nameEn' => 'setNameEn',
            'nameCn' => 'setNameCn',
            'siteCode' => 'setSiteCode',
            'siteType' => 'setSiteType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * limit  每页返回的个数。 取值范围：1~1000。
    * marker  翻页信息，从上次API调用返回的翻页数据中获取，可填写前一页marker或者后一页marker，填入前一页previous_marker就向前翻页，后一页next_marker就向翻页。 翻页过程中，查询条件不能修改，包括过滤条件，排序条件，limit。
    * id  根据id查询，可查询多个id。
    * nameEn  站点信息自定义英文名称。
    * nameCn  站点信息自定义中文名称。
    * siteCode  站点编码。
    * siteType  站点类型： - Area: 大区 - SubArea: 区域 - Region: 城域
    *
    * @var string[]
    */
    protected static $getters = [
            'limit' => 'getLimit',
            'marker' => 'getMarker',
            'id' => 'getId',
            'nameEn' => 'getNameEn',
            'nameCn' => 'getNameCn',
            'siteCode' => 'getSiteCode',
            'siteType' => 'getSiteType'
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
    const SITE_TYPE_AREA = 'Area';
    const SITE_TYPE_SUB_AREA = 'SubArea';
    const SITE_TYPE_REGION = 'Region';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSiteTypeAllowableValues()
    {
        return [
            self::SITE_TYPE_AREA,
            self::SITE_TYPE_SUB_AREA,
            self::SITE_TYPE_REGION,
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
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['nameEn'] = isset($data['nameEn']) ? $data['nameEn'] : null;
        $this->container['nameCn'] = isset($data['nameCn']) ? $data['nameCn'] : null;
        $this->container['siteCode'] = isset($data['siteCode']) ? $data['siteCode'] : null;
        $this->container['siteType'] = isset($data['siteType']) ? $data['siteType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 1000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) > 4096)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) < 1)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['nameEn']) && (mb_strlen($this->container['nameEn']) > 64)) {
                $invalidProperties[] = "invalid value for 'nameEn', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['nameEn']) && (mb_strlen($this->container['nameEn']) < 1)) {
                $invalidProperties[] = "invalid value for 'nameEn', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['nameCn']) && (mb_strlen($this->container['nameCn']) > 64)) {
                $invalidProperties[] = "invalid value for 'nameCn', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['nameCn']) && (mb_strlen($this->container['nameCn']) < 1)) {
                $invalidProperties[] = "invalid value for 'nameCn', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['siteCode']) && (mb_strlen($this->container['siteCode']) > 64)) {
                $invalidProperties[] = "invalid value for 'siteCode', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['siteCode']) && (mb_strlen($this->container['siteCode']) < 1)) {
                $invalidProperties[] = "invalid value for 'siteCode', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getSiteTypeAllowableValues();
                if (!is_null($this->container['siteType']) && !in_array($this->container['siteType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'siteType', must be one of '%s'",
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
    * Gets limit
    *  每页返回的个数。 取值范围：1~1000。
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
    * @param int|null $limit 每页返回的个数。 取值范围：1~1000。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets marker
    *  翻页信息，从上次API调用返回的翻页数据中获取，可填写前一页marker或者后一页marker，填入前一页previous_marker就向前翻页，后一页next_marker就向翻页。 翻页过程中，查询条件不能修改，包括过滤条件，排序条件，limit。
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
    * @param string|null $marker 翻页信息，从上次API调用返回的翻页数据中获取，可填写前一页marker或者后一页marker，填入前一页previous_marker就向前翻页，后一页next_marker就向翻页。 翻页过程中，查询条件不能修改，包括过滤条件，排序条件，limit。
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets id
    *  根据id查询，可查询多个id。
    *
    * @return string[]|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string[]|null $id 根据id查询，可查询多个id。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets nameEn
    *  站点信息自定义英文名称。
    *
    * @return string|null
    */
    public function getNameEn()
    {
        return $this->container['nameEn'];
    }

    /**
    * Sets nameEn
    *
    * @param string|null $nameEn 站点信息自定义英文名称。
    *
    * @return $this
    */
    public function setNameEn($nameEn)
    {
        $this->container['nameEn'] = $nameEn;
        return $this;
    }

    /**
    * Gets nameCn
    *  站点信息自定义中文名称。
    *
    * @return string|null
    */
    public function getNameCn()
    {
        return $this->container['nameCn'];
    }

    /**
    * Sets nameCn
    *
    * @param string|null $nameCn 站点信息自定义中文名称。
    *
    * @return $this
    */
    public function setNameCn($nameCn)
    {
        $this->container['nameCn'] = $nameCn;
        return $this;
    }

    /**
    * Gets siteCode
    *  站点编码。
    *
    * @return string|null
    */
    public function getSiteCode()
    {
        return $this->container['siteCode'];
    }

    /**
    * Sets siteCode
    *
    * @param string|null $siteCode 站点编码。
    *
    * @return $this
    */
    public function setSiteCode($siteCode)
    {
        $this->container['siteCode'] = $siteCode;
        return $this;
    }

    /**
    * Gets siteType
    *  站点类型： - Area: 大区 - SubArea: 区域 - Region: 城域
    *
    * @return string|null
    */
    public function getSiteType()
    {
        return $this->container['siteType'];
    }

    /**
    * Sets siteType
    *
    * @param string|null $siteType 站点类型： - Area: 大区 - SubArea: 区域 - Region: 城域
    *
    * @return $this
    */
    public function setSiteType($siteType)
    {
        $this->container['siteType'] = $siteType;
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

