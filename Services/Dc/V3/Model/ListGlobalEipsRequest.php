<?php

namespace HuaweiCloud\SDK\Dc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListGlobalEipsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListGlobalEipsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * limit  每页返回的个数。 取值范围：1~2000。
    * offset  分页偏移量
    * marker  上一页最后一条资源记录的ID，为空时为查询第一页。 使用说明：必须与limit一起使用。
    * pageReverse  分页参数
    * fields  显示字段列表
    * extFields  show response ext-fields
    * sortKey  排序字段。
    * sortDir  返回结果按照升序(asc)或降序(desc)排列，默认为asc
    * connectGatewayId  互联网关ID
    * status  根椐资源状态过滤实例
    * globalEipId  全局弹性IP的ID
    * globalEipSegmentId  全局弹性IP(有掩码)的ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'limit' => 'int',
            'offset' => 'int',
            'marker' => 'string',
            'pageReverse' => 'bool',
            'fields' => 'string[]',
            'extFields' => 'string[]',
            'sortKey' => 'string',
            'sortDir' => 'string[]',
            'connectGatewayId' => 'string',
            'status' => 'string[]',
            'globalEipId' => 'string[]',
            'globalEipSegmentId' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * limit  每页返回的个数。 取值范围：1~2000。
    * offset  分页偏移量
    * marker  上一页最后一条资源记录的ID，为空时为查询第一页。 使用说明：必须与limit一起使用。
    * pageReverse  分页参数
    * fields  显示字段列表
    * extFields  show response ext-fields
    * sortKey  排序字段。
    * sortDir  返回结果按照升序(asc)或降序(desc)排列，默认为asc
    * connectGatewayId  互联网关ID
    * status  根椐资源状态过滤实例
    * globalEipId  全局弹性IP的ID
    * globalEipSegmentId  全局弹性IP(有掩码)的ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'limit' => 'int32',
        'offset' => 'int32',
        'marker' => null,
        'pageReverse' => null,
        'fields' => null,
        'extFields' => null,
        'sortKey' => null,
        'sortDir' => null,
        'connectGatewayId' => null,
        'status' => null,
        'globalEipId' => null,
        'globalEipSegmentId' => null
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
    * limit  每页返回的个数。 取值范围：1~2000。
    * offset  分页偏移量
    * marker  上一页最后一条资源记录的ID，为空时为查询第一页。 使用说明：必须与limit一起使用。
    * pageReverse  分页参数
    * fields  显示字段列表
    * extFields  show response ext-fields
    * sortKey  排序字段。
    * sortDir  返回结果按照升序(asc)或降序(desc)排列，默认为asc
    * connectGatewayId  互联网关ID
    * status  根椐资源状态过滤实例
    * globalEipId  全局弹性IP的ID
    * globalEipSegmentId  全局弹性IP(有掩码)的ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'limit' => 'limit',
            'offset' => 'offset',
            'marker' => 'marker',
            'pageReverse' => 'page_reverse',
            'fields' => 'fields',
            'extFields' => 'ext_fields',
            'sortKey' => 'sort_key',
            'sortDir' => 'sort_dir',
            'connectGatewayId' => 'connect_gateway_id',
            'status' => 'status',
            'globalEipId' => 'global_eip_id',
            'globalEipSegmentId' => 'global_eip_segment_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * limit  每页返回的个数。 取值范围：1~2000。
    * offset  分页偏移量
    * marker  上一页最后一条资源记录的ID，为空时为查询第一页。 使用说明：必须与limit一起使用。
    * pageReverse  分页参数
    * fields  显示字段列表
    * extFields  show response ext-fields
    * sortKey  排序字段。
    * sortDir  返回结果按照升序(asc)或降序(desc)排列，默认为asc
    * connectGatewayId  互联网关ID
    * status  根椐资源状态过滤实例
    * globalEipId  全局弹性IP的ID
    * globalEipSegmentId  全局弹性IP(有掩码)的ID
    *
    * @var string[]
    */
    protected static $setters = [
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'marker' => 'setMarker',
            'pageReverse' => 'setPageReverse',
            'fields' => 'setFields',
            'extFields' => 'setExtFields',
            'sortKey' => 'setSortKey',
            'sortDir' => 'setSortDir',
            'connectGatewayId' => 'setConnectGatewayId',
            'status' => 'setStatus',
            'globalEipId' => 'setGlobalEipId',
            'globalEipSegmentId' => 'setGlobalEipSegmentId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * limit  每页返回的个数。 取值范围：1~2000。
    * offset  分页偏移量
    * marker  上一页最后一条资源记录的ID，为空时为查询第一页。 使用说明：必须与limit一起使用。
    * pageReverse  分页参数
    * fields  显示字段列表
    * extFields  show response ext-fields
    * sortKey  排序字段。
    * sortDir  返回结果按照升序(asc)或降序(desc)排列，默认为asc
    * connectGatewayId  互联网关ID
    * status  根椐资源状态过滤实例
    * globalEipId  全局弹性IP的ID
    * globalEipSegmentId  全局弹性IP(有掩码)的ID
    *
    * @var string[]
    */
    protected static $getters = [
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'marker' => 'getMarker',
            'pageReverse' => 'getPageReverse',
            'fields' => 'getFields',
            'extFields' => 'getExtFields',
            'sortKey' => 'getSortKey',
            'sortDir' => 'getSortDir',
            'connectGatewayId' => 'getConnectGatewayId',
            'status' => 'getStatus',
            'globalEipId' => 'getGlobalEipId',
            'globalEipSegmentId' => 'getGlobalEipSegmentId'
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
    const SORT_DIR_ASC = 'asc';
    const SORT_DIR_DESC = 'desc';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSortDirAllowableValues()
    {
        return [
            self::SORT_DIR_ASC,
            self::SORT_DIR_DESC,
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
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['pageReverse'] = isset($data['pageReverse']) ? $data['pageReverse'] : null;
        $this->container['fields'] = isset($data['fields']) ? $data['fields'] : null;
        $this->container['extFields'] = isset($data['extFields']) ? $data['extFields'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
        $this->container['sortDir'] = isset($data['sortDir']) ? $data['sortDir'] : null;
        $this->container['connectGatewayId'] = isset($data['connectGatewayId']) ? $data['connectGatewayId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['globalEipId'] = isset($data['globalEipId']) ? $data['globalEipId'] : null;
        $this->container['globalEipSegmentId'] = isset($data['globalEipSegmentId']) ? $data['globalEipSegmentId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 2000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 1000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 1)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) > 36)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) < 0)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sortKey']) && (mb_strlen($this->container['sortKey']) > 36)) {
                $invalidProperties[] = "invalid value for 'sortKey', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['sortKey']) && (mb_strlen($this->container['sortKey']) < 0)) {
                $invalidProperties[] = "invalid value for 'sortKey', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['connectGatewayId'] === null) {
            $invalidProperties[] = "'connectGatewayId' can't be null";
        }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['connectGatewayId'])) {
                $invalidProperties[] = "invalid value for 'connectGatewayId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
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
    *  每页返回的个数。 取值范围：1~2000。
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
    * @param int|null $limit 每页返回的个数。 取值范围：1~2000。
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
    *  分页偏移量
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
    * @param int|null $offset 分页偏移量
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets marker
    *  上一页最后一条资源记录的ID，为空时为查询第一页。 使用说明：必须与limit一起使用。
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
    * @param string|null $marker 上一页最后一条资源记录的ID，为空时为查询第一页。 使用说明：必须与limit一起使用。
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets pageReverse
    *  分页参数
    *
    * @return bool|null
    */
    public function getPageReverse()
    {
        return $this->container['pageReverse'];
    }

    /**
    * Sets pageReverse
    *
    * @param bool|null $pageReverse 分页参数
    *
    * @return $this
    */
    public function setPageReverse($pageReverse)
    {
        $this->container['pageReverse'] = $pageReverse;
        return $this;
    }

    /**
    * Gets fields
    *  显示字段列表
    *
    * @return string[]|null
    */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
    * Sets fields
    *
    * @param string[]|null $fields 显示字段列表
    *
    * @return $this
    */
    public function setFields($fields)
    {
        $this->container['fields'] = $fields;
        return $this;
    }

    /**
    * Gets extFields
    *  show response ext-fields
    *
    * @return string[]|null
    */
    public function getExtFields()
    {
        return $this->container['extFields'];
    }

    /**
    * Sets extFields
    *
    * @param string[]|null $extFields show response ext-fields
    *
    * @return $this
    */
    public function setExtFields($extFields)
    {
        $this->container['extFields'] = $extFields;
        return $this;
    }

    /**
    * Gets sortKey
    *  排序字段。
    *
    * @return string|null
    */
    public function getSortKey()
    {
        return $this->container['sortKey'];
    }

    /**
    * Sets sortKey
    *
    * @param string|null $sortKey 排序字段。
    *
    * @return $this
    */
    public function setSortKey($sortKey)
    {
        $this->container['sortKey'] = $sortKey;
        return $this;
    }

    /**
    * Gets sortDir
    *  返回结果按照升序(asc)或降序(desc)排列，默认为asc
    *
    * @return string[]|null
    */
    public function getSortDir()
    {
        return $this->container['sortDir'];
    }

    /**
    * Sets sortDir
    *
    * @param string[]|null $sortDir 返回结果按照升序(asc)或降序(desc)排列，默认为asc
    *
    * @return $this
    */
    public function setSortDir($sortDir)
    {
        $this->container['sortDir'] = $sortDir;
        return $this;
    }

    /**
    * Gets connectGatewayId
    *  互联网关ID
    *
    * @return string
    */
    public function getConnectGatewayId()
    {
        return $this->container['connectGatewayId'];
    }

    /**
    * Sets connectGatewayId
    *
    * @param string $connectGatewayId 互联网关ID
    *
    * @return $this
    */
    public function setConnectGatewayId($connectGatewayId)
    {
        $this->container['connectGatewayId'] = $connectGatewayId;
        return $this;
    }

    /**
    * Gets status
    *  根椐资源状态过滤实例
    *
    * @return string[]|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string[]|null $status 根椐资源状态过滤实例
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets globalEipId
    *  全局弹性IP的ID
    *
    * @return string[]|null
    */
    public function getGlobalEipId()
    {
        return $this->container['globalEipId'];
    }

    /**
    * Sets globalEipId
    *
    * @param string[]|null $globalEipId 全局弹性IP的ID
    *
    * @return $this
    */
    public function setGlobalEipId($globalEipId)
    {
        $this->container['globalEipId'] = $globalEipId;
        return $this;
    }

    /**
    * Gets globalEipSegmentId
    *  全局弹性IP(有掩码)的ID
    *
    * @return string[]|null
    */
    public function getGlobalEipSegmentId()
    {
        return $this->container['globalEipSegmentId'];
    }

    /**
    * Sets globalEipSegmentId
    *
    * @param string[]|null $globalEipSegmentId 全局弹性IP(有掩码)的ID
    *
    * @return $this
    */
    public function setGlobalEipSegmentId($globalEipSegmentId)
    {
        $this->container['globalEipSegmentId'] = $globalEipSegmentId;
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

