<?php

namespace HuaweiCloud\SDK\Dc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowHostedDirectConnectRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowHostedDirectConnectRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostedConnectId  托管专线连接ID。
    * limit  每页返回的个数。 取值范围：1~2000。
    * marker  上一页最后一条资源记录的ID，为空时为查询第一页。 使用说明：必须与limit一起使用。
    * fields  显示字段列表
    * sortDir  返回结果按照升序(asc)或降序(desc)排列，默认为asc
    * sortKey  排序字段。
    * hostingId  根椐运营专线ID过滤托管专线列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostedConnectId' => 'string',
            'limit' => 'int',
            'marker' => 'string',
            'fields' => 'string[]',
            'sortDir' => 'string[]',
            'sortKey' => 'string',
            'hostingId' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostedConnectId  托管专线连接ID。
    * limit  每页返回的个数。 取值范围：1~2000。
    * marker  上一页最后一条资源记录的ID，为空时为查询第一页。 使用说明：必须与limit一起使用。
    * fields  显示字段列表
    * sortDir  返回结果按照升序(asc)或降序(desc)排列，默认为asc
    * sortKey  排序字段。
    * hostingId  根椐运营专线ID过滤托管专线列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostedConnectId' => null,
        'limit' => 'int32',
        'marker' => null,
        'fields' => null,
        'sortDir' => null,
        'sortKey' => null,
        'hostingId' => null
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
    * hostedConnectId  托管专线连接ID。
    * limit  每页返回的个数。 取值范围：1~2000。
    * marker  上一页最后一条资源记录的ID，为空时为查询第一页。 使用说明：必须与limit一起使用。
    * fields  显示字段列表
    * sortDir  返回结果按照升序(asc)或降序(desc)排列，默认为asc
    * sortKey  排序字段。
    * hostingId  根椐运营专线ID过滤托管专线列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostedConnectId' => 'hosted_connect_id',
            'limit' => 'limit',
            'marker' => 'marker',
            'fields' => 'fields',
            'sortDir' => 'sort_dir',
            'sortKey' => 'sort_key',
            'hostingId' => 'hosting_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostedConnectId  托管专线连接ID。
    * limit  每页返回的个数。 取值范围：1~2000。
    * marker  上一页最后一条资源记录的ID，为空时为查询第一页。 使用说明：必须与limit一起使用。
    * fields  显示字段列表
    * sortDir  返回结果按照升序(asc)或降序(desc)排列，默认为asc
    * sortKey  排序字段。
    * hostingId  根椐运营专线ID过滤托管专线列表
    *
    * @var string[]
    */
    protected static $setters = [
            'hostedConnectId' => 'setHostedConnectId',
            'limit' => 'setLimit',
            'marker' => 'setMarker',
            'fields' => 'setFields',
            'sortDir' => 'setSortDir',
            'sortKey' => 'setSortKey',
            'hostingId' => 'setHostingId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostedConnectId  托管专线连接ID。
    * limit  每页返回的个数。 取值范围：1~2000。
    * marker  上一页最后一条资源记录的ID，为空时为查询第一页。 使用说明：必须与limit一起使用。
    * fields  显示字段列表
    * sortDir  返回结果按照升序(asc)或降序(desc)排列，默认为asc
    * sortKey  排序字段。
    * hostingId  根椐运营专线ID过滤托管专线列表
    *
    * @var string[]
    */
    protected static $getters = [
            'hostedConnectId' => 'getHostedConnectId',
            'limit' => 'getLimit',
            'marker' => 'getMarker',
            'fields' => 'getFields',
            'sortDir' => 'getSortDir',
            'sortKey' => 'getSortKey',
            'hostingId' => 'getHostingId'
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
        $this->container['hostedConnectId'] = isset($data['hostedConnectId']) ? $data['hostedConnectId'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['fields'] = isset($data['fields']) ? $data['fields'] : null;
        $this->container['sortDir'] = isset($data['sortDir']) ? $data['sortDir'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
        $this->container['hostingId'] = isset($data['hostingId']) ? $data['hostingId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['hostedConnectId'] === null) {
            $invalidProperties[] = "'hostedConnectId' can't be null";
        }
            if ((mb_strlen($this->container['hostedConnectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'hostedConnectId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['hostedConnectId']) < 36)) {
                $invalidProperties[] = "invalid value for 'hostedConnectId', the character length must be bigger than or equal to 36.";
            }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['hostedConnectId'])) {
                $invalidProperties[] = "invalid value for 'hostedConnectId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 2000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
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
    * Gets hostedConnectId
    *  托管专线连接ID。
    *
    * @return string
    */
    public function getHostedConnectId()
    {
        return $this->container['hostedConnectId'];
    }

    /**
    * Sets hostedConnectId
    *
    * @param string $hostedConnectId 托管专线连接ID。
    *
    * @return $this
    */
    public function setHostedConnectId($hostedConnectId)
    {
        $this->container['hostedConnectId'] = $hostedConnectId;
        return $this;
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
    * Gets hostingId
    *  根椐运营专线ID过滤托管专线列表
    *
    * @return string[]|null
    */
    public function getHostingId()
    {
        return $this->container['hostingId'];
    }

    /**
    * Sets hostingId
    *
    * @param string[]|null $hostingId 根椐运营专线ID过滤托管专线列表
    *
    * @return $this
    */
    public function setHostingId($hostingId)
    {
        $this->container['hostingId'] = $hostingId;
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

