<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BusinessDiscountQueryReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BusinessDiscountQueryReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * quotingItemType  报价项类型，必填，PRODUCT_ITEM（产品报价项）/ CATEGORY_ITEM（分类报价项）
    * cloudServiceTypes  云服务类型编码列表，非必填，大小写不敏感，数组范围限制:0-100，字符长度限制1-64。此参数不携带或携带值为空列表或携带值为null时，不作为筛选条件。
    * chargingModes  计费模式列表，非必填，大小写不敏感，数组范围限制:0-20，字符长度限制1-64。此参数不携带或携带值为空列表或携带值为null时，不作为筛选条件。
    * siteCode  运营站点编码，非必填，大小写不敏感，字符长度限制1-64。此参数不携带或携带值为null时，不作为筛选条件。
    * offset  分页偏移量，非必填，取值范围0-2147483647，默认值0
    * limit  查询条数，非必填，取值范围1-1000，默认值20
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'quotingItemType' => 'string',
            'cloudServiceTypes' => 'string[]',
            'chargingModes' => 'string[]',
            'siteCode' => 'string',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * quotingItemType  报价项类型，必填，PRODUCT_ITEM（产品报价项）/ CATEGORY_ITEM（分类报价项）
    * cloudServiceTypes  云服务类型编码列表，非必填，大小写不敏感，数组范围限制:0-100，字符长度限制1-64。此参数不携带或携带值为空列表或携带值为null时，不作为筛选条件。
    * chargingModes  计费模式列表，非必填，大小写不敏感，数组范围限制:0-20，字符长度限制1-64。此参数不携带或携带值为空列表或携带值为null时，不作为筛选条件。
    * siteCode  运营站点编码，非必填，大小写不敏感，字符长度限制1-64。此参数不携带或携带值为null时，不作为筛选条件。
    * offset  分页偏移量，非必填，取值范围0-2147483647，默认值0
    * limit  查询条数，非必填，取值范围1-1000，默认值20
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'quotingItemType' => null,
        'cloudServiceTypes' => null,
        'chargingModes' => null,
        'siteCode' => null,
        'offset' => 'int32',
        'limit' => 'int32'
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
    * quotingItemType  报价项类型，必填，PRODUCT_ITEM（产品报价项）/ CATEGORY_ITEM（分类报价项）
    * cloudServiceTypes  云服务类型编码列表，非必填，大小写不敏感，数组范围限制:0-100，字符长度限制1-64。此参数不携带或携带值为空列表或携带值为null时，不作为筛选条件。
    * chargingModes  计费模式列表，非必填，大小写不敏感，数组范围限制:0-20，字符长度限制1-64。此参数不携带或携带值为空列表或携带值为null时，不作为筛选条件。
    * siteCode  运营站点编码，非必填，大小写不敏感，字符长度限制1-64。此参数不携带或携带值为null时，不作为筛选条件。
    * offset  分页偏移量，非必填，取值范围0-2147483647，默认值0
    * limit  查询条数，非必填，取值范围1-1000，默认值20
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'quotingItemType' => 'quoting_item_type',
            'cloudServiceTypes' => 'cloud_service_types',
            'chargingModes' => 'charging_modes',
            'siteCode' => 'site_code',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * quotingItemType  报价项类型，必填，PRODUCT_ITEM（产品报价项）/ CATEGORY_ITEM（分类报价项）
    * cloudServiceTypes  云服务类型编码列表，非必填，大小写不敏感，数组范围限制:0-100，字符长度限制1-64。此参数不携带或携带值为空列表或携带值为null时，不作为筛选条件。
    * chargingModes  计费模式列表，非必填，大小写不敏感，数组范围限制:0-20，字符长度限制1-64。此参数不携带或携带值为空列表或携带值为null时，不作为筛选条件。
    * siteCode  运营站点编码，非必填，大小写不敏感，字符长度限制1-64。此参数不携带或携带值为null时，不作为筛选条件。
    * offset  分页偏移量，非必填，取值范围0-2147483647，默认值0
    * limit  查询条数，非必填，取值范围1-1000，默认值20
    *
    * @var string[]
    */
    protected static $setters = [
            'quotingItemType' => 'setQuotingItemType',
            'cloudServiceTypes' => 'setCloudServiceTypes',
            'chargingModes' => 'setChargingModes',
            'siteCode' => 'setSiteCode',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * quotingItemType  报价项类型，必填，PRODUCT_ITEM（产品报价项）/ CATEGORY_ITEM（分类报价项）
    * cloudServiceTypes  云服务类型编码列表，非必填，大小写不敏感，数组范围限制:0-100，字符长度限制1-64。此参数不携带或携带值为空列表或携带值为null时，不作为筛选条件。
    * chargingModes  计费模式列表，非必填，大小写不敏感，数组范围限制:0-20，字符长度限制1-64。此参数不携带或携带值为空列表或携带值为null时，不作为筛选条件。
    * siteCode  运营站点编码，非必填，大小写不敏感，字符长度限制1-64。此参数不携带或携带值为null时，不作为筛选条件。
    * offset  分页偏移量，非必填，取值范围0-2147483647，默认值0
    * limit  查询条数，非必填，取值范围1-1000，默认值20
    *
    * @var string[]
    */
    protected static $getters = [
            'quotingItemType' => 'getQuotingItemType',
            'cloudServiceTypes' => 'getCloudServiceTypes',
            'chargingModes' => 'getChargingModes',
            'siteCode' => 'getSiteCode',
            'offset' => 'getOffset',
            'limit' => 'getLimit'
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
    const QUOTING_ITEM_TYPE_PRODUCT_ITEM = 'PRODUCT_ITEM';
    const QUOTING_ITEM_TYPE_CATEGORY_ITEM = 'CATEGORY_ITEM';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getQuotingItemTypeAllowableValues()
    {
        return [
            self::QUOTING_ITEM_TYPE_PRODUCT_ITEM,
            self::QUOTING_ITEM_TYPE_CATEGORY_ITEM,
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
        $this->container['quotingItemType'] = isset($data['quotingItemType']) ? $data['quotingItemType'] : null;
        $this->container['cloudServiceTypes'] = isset($data['cloudServiceTypes']) ? $data['cloudServiceTypes'] : null;
        $this->container['chargingModes'] = isset($data['chargingModes']) ? $data['chargingModes'] : null;
        $this->container['siteCode'] = isset($data['siteCode']) ? $data['siteCode'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['quotingItemType'] === null) {
            $invalidProperties[] = "'quotingItemType' can't be null";
        }
            $allowedValues = $this->getQuotingItemTypeAllowableValues();
                if (!is_null($this->container['quotingItemType']) && !in_array($this->container['quotingItemType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'quotingItemType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['siteCode']) && (mb_strlen($this->container['siteCode']) > 64)) {
                $invalidProperties[] = "invalid value for 'siteCode', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['siteCode']) && (mb_strlen($this->container['siteCode']) < 1)) {
                $invalidProperties[] = "invalid value for 'siteCode', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 1000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
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
    * Gets quotingItemType
    *  报价项类型，必填，PRODUCT_ITEM（产品报价项）/ CATEGORY_ITEM（分类报价项）
    *
    * @return string
    */
    public function getQuotingItemType()
    {
        return $this->container['quotingItemType'];
    }

    /**
    * Sets quotingItemType
    *
    * @param string $quotingItemType 报价项类型，必填，PRODUCT_ITEM（产品报价项）/ CATEGORY_ITEM（分类报价项）
    *
    * @return $this
    */
    public function setQuotingItemType($quotingItemType)
    {
        $this->container['quotingItemType'] = $quotingItemType;
        return $this;
    }

    /**
    * Gets cloudServiceTypes
    *  云服务类型编码列表，非必填，大小写不敏感，数组范围限制:0-100，字符长度限制1-64。此参数不携带或携带值为空列表或携带值为null时，不作为筛选条件。
    *
    * @return string[]|null
    */
    public function getCloudServiceTypes()
    {
        return $this->container['cloudServiceTypes'];
    }

    /**
    * Sets cloudServiceTypes
    *
    * @param string[]|null $cloudServiceTypes 云服务类型编码列表，非必填，大小写不敏感，数组范围限制:0-100，字符长度限制1-64。此参数不携带或携带值为空列表或携带值为null时，不作为筛选条件。
    *
    * @return $this
    */
    public function setCloudServiceTypes($cloudServiceTypes)
    {
        $this->container['cloudServiceTypes'] = $cloudServiceTypes;
        return $this;
    }

    /**
    * Gets chargingModes
    *  计费模式列表，非必填，大小写不敏感，数组范围限制:0-20，字符长度限制1-64。此参数不携带或携带值为空列表或携带值为null时，不作为筛选条件。
    *
    * @return string[]|null
    */
    public function getChargingModes()
    {
        return $this->container['chargingModes'];
    }

    /**
    * Sets chargingModes
    *
    * @param string[]|null $chargingModes 计费模式列表，非必填，大小写不敏感，数组范围限制:0-20，字符长度限制1-64。此参数不携带或携带值为空列表或携带值为null时，不作为筛选条件。
    *
    * @return $this
    */
    public function setChargingModes($chargingModes)
    {
        $this->container['chargingModes'] = $chargingModes;
        return $this;
    }

    /**
    * Gets siteCode
    *  运营站点编码，非必填，大小写不敏感，字符长度限制1-64。此参数不携带或携带值为null时，不作为筛选条件。
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
    * @param string|null $siteCode 运营站点编码，非必填，大小写不敏感，字符长度限制1-64。此参数不携带或携带值为null时，不作为筛选条件。
    *
    * @return $this
    */
    public function setSiteCode($siteCode)
    {
        $this->container['siteCode'] = $siteCode;
        return $this;
    }

    /**
    * Gets offset
    *  分页偏移量，非必填，取值范围0-2147483647，默认值0
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
    * @param int|null $offset 分页偏移量，非必填，取值范围0-2147483647，默认值0
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
    *  查询条数，非必填，取值范围1-1000，默认值20
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
    * @param int|null $limit 查询条数，非必填，取值范围1-1000，默认值20
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
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

