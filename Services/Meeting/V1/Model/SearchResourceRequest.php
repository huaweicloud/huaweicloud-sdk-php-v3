<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SearchResourceRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SearchResourceRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * xRequestId  请求requestId，用来标识一路请求，用于问题跟踪定位，建议使用UUID，若不携带，则后台自动生成。
    * acceptLanguage  语言参数，默认为中文zh-CN，英文为en-US。
    * offset  查询偏移量,若超过最大数量，则返回最后一页的数据。 默认值：0。
    * limit  查询数量。 默认值：10。
    * searchKey  搜索条件。
    * corpId  企业id。
    * startExpireDate  查询过期时间在该时间戳之后的资源项。
    * endExpireDate  查询过期时间在该时间戳之前的资源项。
    * type  资源类型。
    * typeId  资源类型Id,若想搜索5方VMR时，需携带5方vmrpkg对应的id。
    * status  订单状态: - 0：正常 - 1：到期，仅查询时返回 - 2：停用
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'xRequestId' => 'string',
            'acceptLanguage' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'searchKey' => 'string',
            'corpId' => 'string',
            'startExpireDate' => 'int',
            'endExpireDate' => 'int',
            'type' => 'string',
            'typeId' => 'string',
            'status' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * xRequestId  请求requestId，用来标识一路请求，用于问题跟踪定位，建议使用UUID，若不携带，则后台自动生成。
    * acceptLanguage  语言参数，默认为中文zh-CN，英文为en-US。
    * offset  查询偏移量,若超过最大数量，则返回最后一页的数据。 默认值：0。
    * limit  查询数量。 默认值：10。
    * searchKey  搜索条件。
    * corpId  企业id。
    * startExpireDate  查询过期时间在该时间戳之后的资源项。
    * endExpireDate  查询过期时间在该时间戳之前的资源项。
    * type  资源类型。
    * typeId  资源类型Id,若想搜索5方VMR时，需携带5方vmrpkg对应的id。
    * status  订单状态: - 0：正常 - 1：到期，仅查询时返回 - 2：停用
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'xRequestId' => null,
        'acceptLanguage' => null,
        'offset' => null,
        'limit' => null,
        'searchKey' => null,
        'corpId' => null,
        'startExpireDate' => 'int64',
        'endExpireDate' => 'int64',
        'type' => null,
        'typeId' => null,
        'status' => null
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
    * xRequestId  请求requestId，用来标识一路请求，用于问题跟踪定位，建议使用UUID，若不携带，则后台自动生成。
    * acceptLanguage  语言参数，默认为中文zh-CN，英文为en-US。
    * offset  查询偏移量,若超过最大数量，则返回最后一页的数据。 默认值：0。
    * limit  查询数量。 默认值：10。
    * searchKey  搜索条件。
    * corpId  企业id。
    * startExpireDate  查询过期时间在该时间戳之后的资源项。
    * endExpireDate  查询过期时间在该时间戳之前的资源项。
    * type  资源类型。
    * typeId  资源类型Id,若想搜索5方VMR时，需携带5方vmrpkg对应的id。
    * status  订单状态: - 0：正常 - 1：到期，仅查询时返回 - 2：停用
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'xRequestId' => 'X-Request-Id',
            'acceptLanguage' => 'Accept-Language',
            'offset' => 'offset',
            'limit' => 'limit',
            'searchKey' => 'searchKey',
            'corpId' => 'corp_id',
            'startExpireDate' => 'startExpireDate',
            'endExpireDate' => 'endExpireDate',
            'type' => 'type',
            'typeId' => 'typeId',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * xRequestId  请求requestId，用来标识一路请求，用于问题跟踪定位，建议使用UUID，若不携带，则后台自动生成。
    * acceptLanguage  语言参数，默认为中文zh-CN，英文为en-US。
    * offset  查询偏移量,若超过最大数量，则返回最后一页的数据。 默认值：0。
    * limit  查询数量。 默认值：10。
    * searchKey  搜索条件。
    * corpId  企业id。
    * startExpireDate  查询过期时间在该时间戳之后的资源项。
    * endExpireDate  查询过期时间在该时间戳之前的资源项。
    * type  资源类型。
    * typeId  资源类型Id,若想搜索5方VMR时，需携带5方vmrpkg对应的id。
    * status  订单状态: - 0：正常 - 1：到期，仅查询时返回 - 2：停用
    *
    * @var string[]
    */
    protected static $setters = [
            'xRequestId' => 'setXRequestId',
            'acceptLanguage' => 'setAcceptLanguage',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'searchKey' => 'setSearchKey',
            'corpId' => 'setCorpId',
            'startExpireDate' => 'setStartExpireDate',
            'endExpireDate' => 'setEndExpireDate',
            'type' => 'setType',
            'typeId' => 'setTypeId',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * xRequestId  请求requestId，用来标识一路请求，用于问题跟踪定位，建议使用UUID，若不携带，则后台自动生成。
    * acceptLanguage  语言参数，默认为中文zh-CN，英文为en-US。
    * offset  查询偏移量,若超过最大数量，则返回最后一页的数据。 默认值：0。
    * limit  查询数量。 默认值：10。
    * searchKey  搜索条件。
    * corpId  企业id。
    * startExpireDate  查询过期时间在该时间戳之后的资源项。
    * endExpireDate  查询过期时间在该时间戳之前的资源项。
    * type  资源类型。
    * typeId  资源类型Id,若想搜索5方VMR时，需携带5方vmrpkg对应的id。
    * status  订单状态: - 0：正常 - 1：到期，仅查询时返回 - 2：停用
    *
    * @var string[]
    */
    protected static $getters = [
            'xRequestId' => 'getXRequestId',
            'acceptLanguage' => 'getAcceptLanguage',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'searchKey' => 'getSearchKey',
            'corpId' => 'getCorpId',
            'startExpireDate' => 'getStartExpireDate',
            'endExpireDate' => 'getEndExpireDate',
            'type' => 'getType',
            'typeId' => 'getTypeId',
            'status' => 'getStatus'
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
        $this->container['xRequestId'] = isset($data['xRequestId']) ? $data['xRequestId'] : null;
        $this->container['acceptLanguage'] = isset($data['acceptLanguage']) ? $data['acceptLanguage'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : 0;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : 10;
        $this->container['searchKey'] = isset($data['searchKey']) ? $data['searchKey'] : null;
        $this->container['corpId'] = isset($data['corpId']) ? $data['corpId'] : null;
        $this->container['startExpireDate'] = isset($data['startExpireDate']) ? $data['startExpireDate'] : null;
        $this->container['endExpireDate'] = isset($data['endExpireDate']) ? $data['endExpireDate'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['typeId'] = isset($data['typeId']) ? $data['typeId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 500)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 500.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['searchKey']) && (mb_strlen($this->container['searchKey']) > 255)) {
                $invalidProperties[] = "invalid value for 'searchKey', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['searchKey']) && (mb_strlen($this->container['searchKey']) < 0)) {
                $invalidProperties[] = "invalid value for 'searchKey', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['corpId'] === null) {
            $invalidProperties[] = "'corpId' can't be null";
        }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 32)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['typeId']) && (mb_strlen($this->container['typeId']) > 32)) {
                $invalidProperties[] = "invalid value for 'typeId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['status']) && ($this->container['status'] > 2)) {
                $invalidProperties[] = "invalid value for 'status', must be smaller than or equal to 2.";
            }
            if (!is_null($this->container['status']) && ($this->container['status'] < 0)) {
                $invalidProperties[] = "invalid value for 'status', must be bigger than or equal to 0.";
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
    * Gets xRequestId
    *  请求requestId，用来标识一路请求，用于问题跟踪定位，建议使用UUID，若不携带，则后台自动生成。
    *
    * @return string|null
    */
    public function getXRequestId()
    {
        return $this->container['xRequestId'];
    }

    /**
    * Sets xRequestId
    *
    * @param string|null $xRequestId 请求requestId，用来标识一路请求，用于问题跟踪定位，建议使用UUID，若不携带，则后台自动生成。
    *
    * @return $this
    */
    public function setXRequestId($xRequestId)
    {
        $this->container['xRequestId'] = $xRequestId;
        return $this;
    }

    /**
    * Gets acceptLanguage
    *  语言参数，默认为中文zh-CN，英文为en-US。
    *
    * @return string|null
    */
    public function getAcceptLanguage()
    {
        return $this->container['acceptLanguage'];
    }

    /**
    * Sets acceptLanguage
    *
    * @param string|null $acceptLanguage 语言参数，默认为中文zh-CN，英文为en-US。
    *
    * @return $this
    */
    public function setAcceptLanguage($acceptLanguage)
    {
        $this->container['acceptLanguage'] = $acceptLanguage;
        return $this;
    }

    /**
    * Gets offset
    *  查询偏移量,若超过最大数量，则返回最后一页的数据。 默认值：0。
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
    * @param int|null $offset 查询偏移量,若超过最大数量，则返回最后一页的数据。 默认值：0。
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
    *  查询数量。 默认值：10。
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
    * @param int|null $limit 查询数量。 默认值：10。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets searchKey
    *  搜索条件。
    *
    * @return string|null
    */
    public function getSearchKey()
    {
        return $this->container['searchKey'];
    }

    /**
    * Sets searchKey
    *
    * @param string|null $searchKey 搜索条件。
    *
    * @return $this
    */
    public function setSearchKey($searchKey)
    {
        $this->container['searchKey'] = $searchKey;
        return $this;
    }

    /**
    * Gets corpId
    *  企业id。
    *
    * @return string
    */
    public function getCorpId()
    {
        return $this->container['corpId'];
    }

    /**
    * Sets corpId
    *
    * @param string $corpId 企业id。
    *
    * @return $this
    */
    public function setCorpId($corpId)
    {
        $this->container['corpId'] = $corpId;
        return $this;
    }

    /**
    * Gets startExpireDate
    *  查询过期时间在该时间戳之后的资源项。
    *
    * @return int|null
    */
    public function getStartExpireDate()
    {
        return $this->container['startExpireDate'];
    }

    /**
    * Sets startExpireDate
    *
    * @param int|null $startExpireDate 查询过期时间在该时间戳之后的资源项。
    *
    * @return $this
    */
    public function setStartExpireDate($startExpireDate)
    {
        $this->container['startExpireDate'] = $startExpireDate;
        return $this;
    }

    /**
    * Gets endExpireDate
    *  查询过期时间在该时间戳之前的资源项。
    *
    * @return int|null
    */
    public function getEndExpireDate()
    {
        return $this->container['endExpireDate'];
    }

    /**
    * Sets endExpireDate
    *
    * @param int|null $endExpireDate 查询过期时间在该时间戳之前的资源项。
    *
    * @return $this
    */
    public function setEndExpireDate($endExpireDate)
    {
        $this->container['endExpireDate'] = $endExpireDate;
        return $this;
    }

    /**
    * Gets type
    *  资源类型。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 资源类型。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets typeId
    *  资源类型Id,若想搜索5方VMR时，需携带5方vmrpkg对应的id。
    *
    * @return string|null
    */
    public function getTypeId()
    {
        return $this->container['typeId'];
    }

    /**
    * Sets typeId
    *
    * @param string|null $typeId 资源类型Id,若想搜索5方VMR时，需携带5方vmrpkg对应的id。
    *
    * @return $this
    */
    public function setTypeId($typeId)
    {
        $this->container['typeId'] = $typeId;
        return $this;
    }

    /**
    * Gets status
    *  订单状态: - 0：正常 - 1：到期，仅查询时返回 - 2：停用
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status 订单状态: - 0：正常 - 1：到期，仅查询时返回 - 2：停用
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
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

