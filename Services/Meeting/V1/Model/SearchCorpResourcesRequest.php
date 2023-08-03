<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SearchCorpResourcesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SearchCorpResourcesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * xRequestId  请求requestId，用来标识一路请求，用于问题跟踪定位，建议使用UUID，若不携带，则后台自动生成。
    * acceptLanguage  语言参数，默认为中文zh-CN，英文为en-US。
    * offset  查询偏移量,若超过最大数量，则返回最后一页的数据。 默认值：0。
    * limit  查询数量。 默认值：10。
    * searchKey  搜索条件，支持resourceId模糊查询。
    * startExpireDate  查询过期时间在该时间戳之后的资源项。
    * endExpireDate  查询过期时间在该时间戳之前的资源项。
    * type  资源类型。 - VMR        - 云会议室 - CONF_CALL  - 会议并发数 - HARD_1080P - 1080P硬终端 - HARD_720P  - 720P硬终端 - SOFT       - 软终端用户数 - ROOM       - 大屏软终端 - LIVE       - 直播推流 - RECORD     - 录播空间 - HARD_THIRD_PARTY - 第三方硬终端帐号 - HUAWEI_VISION -智慧屏 > 查询网络研讨会资源时type字段为VMR。
    * vmrMode  VMR模式，type为VMR时传递该参数 * 0：个人会议ID * 1：云会议室 * 2：网络研讨会
    * typeId  资源类型Id,若想搜索5方VMR时，需携带5方vmrpkg对应的id。
    * orderId  订单Id。
    * status  订单状态。 - 0：正常 - 1：到期 - 2：停用
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'xRequestId' => 'string',
            'acceptLanguage' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'searchKey' => 'string',
            'startExpireDate' => 'int',
            'endExpireDate' => 'int',
            'type' => 'string',
            'vmrMode' => 'int',
            'typeId' => 'string',
            'orderId' => 'string',
            'status' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * xRequestId  请求requestId，用来标识一路请求，用于问题跟踪定位，建议使用UUID，若不携带，则后台自动生成。
    * acceptLanguage  语言参数，默认为中文zh-CN，英文为en-US。
    * offset  查询偏移量,若超过最大数量，则返回最后一页的数据。 默认值：0。
    * limit  查询数量。 默认值：10。
    * searchKey  搜索条件，支持resourceId模糊查询。
    * startExpireDate  查询过期时间在该时间戳之后的资源项。
    * endExpireDate  查询过期时间在该时间戳之前的资源项。
    * type  资源类型。 - VMR        - 云会议室 - CONF_CALL  - 会议并发数 - HARD_1080P - 1080P硬终端 - HARD_720P  - 720P硬终端 - SOFT       - 软终端用户数 - ROOM       - 大屏软终端 - LIVE       - 直播推流 - RECORD     - 录播空间 - HARD_THIRD_PARTY - 第三方硬终端帐号 - HUAWEI_VISION -智慧屏 > 查询网络研讨会资源时type字段为VMR。
    * vmrMode  VMR模式，type为VMR时传递该参数 * 0：个人会议ID * 1：云会议室 * 2：网络研讨会
    * typeId  资源类型Id,若想搜索5方VMR时，需携带5方vmrpkg对应的id。
    * orderId  订单Id。
    * status  订单状态。 - 0：正常 - 1：到期 - 2：停用
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'xRequestId' => null,
        'acceptLanguage' => null,
        'offset' => null,
        'limit' => null,
        'searchKey' => null,
        'startExpireDate' => 'int64',
        'endExpireDate' => 'int64',
        'type' => null,
        'vmrMode' => null,
        'typeId' => null,
        'orderId' => null,
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
    * searchKey  搜索条件，支持resourceId模糊查询。
    * startExpireDate  查询过期时间在该时间戳之后的资源项。
    * endExpireDate  查询过期时间在该时间戳之前的资源项。
    * type  资源类型。 - VMR        - 云会议室 - CONF_CALL  - 会议并发数 - HARD_1080P - 1080P硬终端 - HARD_720P  - 720P硬终端 - SOFT       - 软终端用户数 - ROOM       - 大屏软终端 - LIVE       - 直播推流 - RECORD     - 录播空间 - HARD_THIRD_PARTY - 第三方硬终端帐号 - HUAWEI_VISION -智慧屏 > 查询网络研讨会资源时type字段为VMR。
    * vmrMode  VMR模式，type为VMR时传递该参数 * 0：个人会议ID * 1：云会议室 * 2：网络研讨会
    * typeId  资源类型Id,若想搜索5方VMR时，需携带5方vmrpkg对应的id。
    * orderId  订单Id。
    * status  订单状态。 - 0：正常 - 1：到期 - 2：停用
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'xRequestId' => 'X-Request-Id',
            'acceptLanguage' => 'Accept-Language',
            'offset' => 'offset',
            'limit' => 'limit',
            'searchKey' => 'searchKey',
            'startExpireDate' => 'startExpireDate',
            'endExpireDate' => 'endExpireDate',
            'type' => 'type',
            'vmrMode' => 'vmrMode',
            'typeId' => 'typeId',
            'orderId' => 'orderId',
            'status' => 'status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * xRequestId  请求requestId，用来标识一路请求，用于问题跟踪定位，建议使用UUID，若不携带，则后台自动生成。
    * acceptLanguage  语言参数，默认为中文zh-CN，英文为en-US。
    * offset  查询偏移量,若超过最大数量，则返回最后一页的数据。 默认值：0。
    * limit  查询数量。 默认值：10。
    * searchKey  搜索条件，支持resourceId模糊查询。
    * startExpireDate  查询过期时间在该时间戳之后的资源项。
    * endExpireDate  查询过期时间在该时间戳之前的资源项。
    * type  资源类型。 - VMR        - 云会议室 - CONF_CALL  - 会议并发数 - HARD_1080P - 1080P硬终端 - HARD_720P  - 720P硬终端 - SOFT       - 软终端用户数 - ROOM       - 大屏软终端 - LIVE       - 直播推流 - RECORD     - 录播空间 - HARD_THIRD_PARTY - 第三方硬终端帐号 - HUAWEI_VISION -智慧屏 > 查询网络研讨会资源时type字段为VMR。
    * vmrMode  VMR模式，type为VMR时传递该参数 * 0：个人会议ID * 1：云会议室 * 2：网络研讨会
    * typeId  资源类型Id,若想搜索5方VMR时，需携带5方vmrpkg对应的id。
    * orderId  订单Id。
    * status  订单状态。 - 0：正常 - 1：到期 - 2：停用
    *
    * @var string[]
    */
    protected static $setters = [
            'xRequestId' => 'setXRequestId',
            'acceptLanguage' => 'setAcceptLanguage',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'searchKey' => 'setSearchKey',
            'startExpireDate' => 'setStartExpireDate',
            'endExpireDate' => 'setEndExpireDate',
            'type' => 'setType',
            'vmrMode' => 'setVmrMode',
            'typeId' => 'setTypeId',
            'orderId' => 'setOrderId',
            'status' => 'setStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * xRequestId  请求requestId，用来标识一路请求，用于问题跟踪定位，建议使用UUID，若不携带，则后台自动生成。
    * acceptLanguage  语言参数，默认为中文zh-CN，英文为en-US。
    * offset  查询偏移量,若超过最大数量，则返回最后一页的数据。 默认值：0。
    * limit  查询数量。 默认值：10。
    * searchKey  搜索条件，支持resourceId模糊查询。
    * startExpireDate  查询过期时间在该时间戳之后的资源项。
    * endExpireDate  查询过期时间在该时间戳之前的资源项。
    * type  资源类型。 - VMR        - 云会议室 - CONF_CALL  - 会议并发数 - HARD_1080P - 1080P硬终端 - HARD_720P  - 720P硬终端 - SOFT       - 软终端用户数 - ROOM       - 大屏软终端 - LIVE       - 直播推流 - RECORD     - 录播空间 - HARD_THIRD_PARTY - 第三方硬终端帐号 - HUAWEI_VISION -智慧屏 > 查询网络研讨会资源时type字段为VMR。
    * vmrMode  VMR模式，type为VMR时传递该参数 * 0：个人会议ID * 1：云会议室 * 2：网络研讨会
    * typeId  资源类型Id,若想搜索5方VMR时，需携带5方vmrpkg对应的id。
    * orderId  订单Id。
    * status  订单状态。 - 0：正常 - 1：到期 - 2：停用
    *
    * @var string[]
    */
    protected static $getters = [
            'xRequestId' => 'getXRequestId',
            'acceptLanguage' => 'getAcceptLanguage',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'searchKey' => 'getSearchKey',
            'startExpireDate' => 'getStartExpireDate',
            'endExpireDate' => 'getEndExpireDate',
            'type' => 'getType',
            'vmrMode' => 'getVmrMode',
            'typeId' => 'getTypeId',
            'orderId' => 'getOrderId',
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
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['searchKey'] = isset($data['searchKey']) ? $data['searchKey'] : null;
        $this->container['startExpireDate'] = isset($data['startExpireDate']) ? $data['startExpireDate'] : null;
        $this->container['endExpireDate'] = isset($data['endExpireDate']) ? $data['endExpireDate'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['vmrMode'] = isset($data['vmrMode']) ? $data['vmrMode'] : null;
        $this->container['typeId'] = isset($data['typeId']) ? $data['typeId'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
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
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 32)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['vmrMode']) && ($this->container['vmrMode'] > 2)) {
                $invalidProperties[] = "invalid value for 'vmrMode', must be smaller than or equal to 2.";
            }
            if (!is_null($this->container['vmrMode']) && ($this->container['vmrMode'] < 1)) {
                $invalidProperties[] = "invalid value for 'vmrMode', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['typeId']) && (mb_strlen($this->container['typeId']) > 32)) {
                $invalidProperties[] = "invalid value for 'typeId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['orderId']) && (mb_strlen($this->container['orderId']) > 64)) {
                $invalidProperties[] = "invalid value for 'orderId', the character length must be smaller than or equal to 64.";
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
    *  搜索条件，支持resourceId模糊查询。
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
    * @param string|null $searchKey 搜索条件，支持resourceId模糊查询。
    *
    * @return $this
    */
    public function setSearchKey($searchKey)
    {
        $this->container['searchKey'] = $searchKey;
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
    *  资源类型。 - VMR        - 云会议室 - CONF_CALL  - 会议并发数 - HARD_1080P - 1080P硬终端 - HARD_720P  - 720P硬终端 - SOFT       - 软终端用户数 - ROOM       - 大屏软终端 - LIVE       - 直播推流 - RECORD     - 录播空间 - HARD_THIRD_PARTY - 第三方硬终端帐号 - HUAWEI_VISION -智慧屏 > 查询网络研讨会资源时type字段为VMR。
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
    * @param string|null $type 资源类型。 - VMR        - 云会议室 - CONF_CALL  - 会议并发数 - HARD_1080P - 1080P硬终端 - HARD_720P  - 720P硬终端 - SOFT       - 软终端用户数 - ROOM       - 大屏软终端 - LIVE       - 直播推流 - RECORD     - 录播空间 - HARD_THIRD_PARTY - 第三方硬终端帐号 - HUAWEI_VISION -智慧屏 > 查询网络研讨会资源时type字段为VMR。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets vmrMode
    *  VMR模式，type为VMR时传递该参数 * 0：个人会议ID * 1：云会议室 * 2：网络研讨会
    *
    * @return int|null
    */
    public function getVmrMode()
    {
        return $this->container['vmrMode'];
    }

    /**
    * Sets vmrMode
    *
    * @param int|null $vmrMode VMR模式，type为VMR时传递该参数 * 0：个人会议ID * 1：云会议室 * 2：网络研讨会
    *
    * @return $this
    */
    public function setVmrMode($vmrMode)
    {
        $this->container['vmrMode'] = $vmrMode;
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
    * Gets orderId
    *  订单Id。
    *
    * @return string|null
    */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
    * Sets orderId
    *
    * @param string|null $orderId 订单Id。
    *
    * @return $this
    */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;
        return $this;
    }

    /**
    * Gets status
    *  订单状态。 - 0：正常 - 1：到期 - 2：停用
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
    * @param int|null $status 订单状态。 - 0：正常 - 1：到期 - 2：停用
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

