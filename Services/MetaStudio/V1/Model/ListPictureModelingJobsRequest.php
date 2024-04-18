<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListPictureModelingJobsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListPictureModelingJobsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * authorization  使用AK/SK方式认证时必选，携带的鉴权信息。
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。  格式为(YYYYMMDD'T'HHMMSS'Z')。
    * xProjectId  使用AK/SK方式认证时必选，携带项目ID信息。
    * xAppUserId  第三方用户ID。不允许输入中文。
    * offset  偏移量，表示从此偏移量开始查询。
    * limit  每页显示的条目数量。
    * state  任务状态，默认所有状态。  可多个状态查询，使用英文逗号分隔。  如state=CREATING,PUBLISHED
    * sortKey  排序字段，目前只支持create_time。
    * sortDir  排序方式。 * asc：升序 * desc：降序  默认asc升序。
    * createUntil  过滤创建时间<=输入时间的记录。
    * createSince  过滤创建时间>=输入时间的记录。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'authorization' => 'string',
            'xSdkDate' => 'string',
            'xProjectId' => 'string',
            'xAppUserId' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'state' => 'string',
            'sortKey' => 'string',
            'sortDir' => 'string',
            'createUntil' => 'string',
            'createSince' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * authorization  使用AK/SK方式认证时必选，携带的鉴权信息。
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。  格式为(YYYYMMDD'T'HHMMSS'Z')。
    * xProjectId  使用AK/SK方式认证时必选，携带项目ID信息。
    * xAppUserId  第三方用户ID。不允许输入中文。
    * offset  偏移量，表示从此偏移量开始查询。
    * limit  每页显示的条目数量。
    * state  任务状态，默认所有状态。  可多个状态查询，使用英文逗号分隔。  如state=CREATING,PUBLISHED
    * sortKey  排序字段，目前只支持create_time。
    * sortDir  排序方式。 * asc：升序 * desc：降序  默认asc升序。
    * createUntil  过滤创建时间<=输入时间的记录。
    * createSince  过滤创建时间>=输入时间的记录。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'authorization' => null,
        'xSdkDate' => null,
        'xProjectId' => null,
        'xAppUserId' => null,
        'offset' => 'uint32',
        'limit' => 'uint32',
        'state' => null,
        'sortKey' => null,
        'sortDir' => null,
        'createUntil' => null,
        'createSince' => null
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
    * authorization  使用AK/SK方式认证时必选，携带的鉴权信息。
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。  格式为(YYYYMMDD'T'HHMMSS'Z')。
    * xProjectId  使用AK/SK方式认证时必选，携带项目ID信息。
    * xAppUserId  第三方用户ID。不允许输入中文。
    * offset  偏移量，表示从此偏移量开始查询。
    * limit  每页显示的条目数量。
    * state  任务状态，默认所有状态。  可多个状态查询，使用英文逗号分隔。  如state=CREATING,PUBLISHED
    * sortKey  排序字段，目前只支持create_time。
    * sortDir  排序方式。 * asc：升序 * desc：降序  默认asc升序。
    * createUntil  过滤创建时间<=输入时间的记录。
    * createSince  过滤创建时间>=输入时间的记录。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'authorization' => 'Authorization',
            'xSdkDate' => 'X-Sdk-Date',
            'xProjectId' => 'X-Project-Id',
            'xAppUserId' => 'X-App-UserId',
            'offset' => 'offset',
            'limit' => 'limit',
            'state' => 'state',
            'sortKey' => 'sort_key',
            'sortDir' => 'sort_dir',
            'createUntil' => 'create_until',
            'createSince' => 'create_since'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * authorization  使用AK/SK方式认证时必选，携带的鉴权信息。
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。  格式为(YYYYMMDD'T'HHMMSS'Z')。
    * xProjectId  使用AK/SK方式认证时必选，携带项目ID信息。
    * xAppUserId  第三方用户ID。不允许输入中文。
    * offset  偏移量，表示从此偏移量开始查询。
    * limit  每页显示的条目数量。
    * state  任务状态，默认所有状态。  可多个状态查询，使用英文逗号分隔。  如state=CREATING,PUBLISHED
    * sortKey  排序字段，目前只支持create_time。
    * sortDir  排序方式。 * asc：升序 * desc：降序  默认asc升序。
    * createUntil  过滤创建时间<=输入时间的记录。
    * createSince  过滤创建时间>=输入时间的记录。
    *
    * @var string[]
    */
    protected static $setters = [
            'authorization' => 'setAuthorization',
            'xSdkDate' => 'setXSdkDate',
            'xProjectId' => 'setXProjectId',
            'xAppUserId' => 'setXAppUserId',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'state' => 'setState',
            'sortKey' => 'setSortKey',
            'sortDir' => 'setSortDir',
            'createUntil' => 'setCreateUntil',
            'createSince' => 'setCreateSince'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * authorization  使用AK/SK方式认证时必选，携带的鉴权信息。
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。  格式为(YYYYMMDD'T'HHMMSS'Z')。
    * xProjectId  使用AK/SK方式认证时必选，携带项目ID信息。
    * xAppUserId  第三方用户ID。不允许输入中文。
    * offset  偏移量，表示从此偏移量开始查询。
    * limit  每页显示的条目数量。
    * state  任务状态，默认所有状态。  可多个状态查询，使用英文逗号分隔。  如state=CREATING,PUBLISHED
    * sortKey  排序字段，目前只支持create_time。
    * sortDir  排序方式。 * asc：升序 * desc：降序  默认asc升序。
    * createUntil  过滤创建时间<=输入时间的记录。
    * createSince  过滤创建时间>=输入时间的记录。
    *
    * @var string[]
    */
    protected static $getters = [
            'authorization' => 'getAuthorization',
            'xSdkDate' => 'getXSdkDate',
            'xProjectId' => 'getXProjectId',
            'xAppUserId' => 'getXAppUserId',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'state' => 'getState',
            'sortKey' => 'getSortKey',
            'sortDir' => 'getSortDir',
            'createUntil' => 'getCreateUntil',
            'createSince' => 'getCreateSince'
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
        $this->container['authorization'] = isset($data['authorization']) ? $data['authorization'] : null;
        $this->container['xSdkDate'] = isset($data['xSdkDate']) ? $data['xSdkDate'] : null;
        $this->container['xProjectId'] = isset($data['xProjectId']) ? $data['xProjectId'] : null;
        $this->container['xAppUserId'] = isset($data['xAppUserId']) ? $data['xAppUserId'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
        $this->container['sortDir'] = isset($data['sortDir']) ? $data['sortDir'] : null;
        $this->container['createUntil'] = isset($data['createUntil']) ? $data['createUntil'] : null;
        $this->container['createSince'] = isset($data['createSince']) ? $data['createSince'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['authorization']) && (mb_strlen($this->container['authorization']) > 256)) {
                $invalidProperties[] = "invalid value for 'authorization', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['authorization']) && (mb_strlen($this->container['authorization']) < 1)) {
                $invalidProperties[] = "invalid value for 'authorization', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['xSdkDate']) && (mb_strlen($this->container['xSdkDate']) > 16)) {
                $invalidProperties[] = "invalid value for 'xSdkDate', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['xSdkDate']) && (mb_strlen($this->container['xSdkDate']) < 16)) {
                $invalidProperties[] = "invalid value for 'xSdkDate', the character length must be bigger than or equal to 16.";
            }
            if (!is_null($this->container['xProjectId']) && (mb_strlen($this->container['xProjectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'xProjectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['xProjectId']) && (mb_strlen($this->container['xProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'xProjectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['xAppUserId']) && (mb_strlen($this->container['xAppUserId']) > 256)) {
                $invalidProperties[] = "invalid value for 'xAppUserId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['xAppUserId']) && (mb_strlen($this->container['xAppUserId']) < 1)) {
                $invalidProperties[] = "invalid value for 'xAppUserId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) > 128)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) < 0)) {
                $invalidProperties[] = "invalid value for 'state', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sortKey']) && (mb_strlen($this->container['sortKey']) > 128)) {
                $invalidProperties[] = "invalid value for 'sortKey', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['sortKey']) && (mb_strlen($this->container['sortKey']) < 0)) {
                $invalidProperties[] = "invalid value for 'sortKey', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sortDir']) && (mb_strlen($this->container['sortDir']) > 128)) {
                $invalidProperties[] = "invalid value for 'sortDir', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['sortDir']) && (mb_strlen($this->container['sortDir']) < 0)) {
                $invalidProperties[] = "invalid value for 'sortDir', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createUntil']) && (mb_strlen($this->container['createUntil']) > 20)) {
                $invalidProperties[] = "invalid value for 'createUntil', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['createUntil']) && (mb_strlen($this->container['createUntil']) < 0)) {
                $invalidProperties[] = "invalid value for 'createUntil', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createSince']) && (mb_strlen($this->container['createSince']) > 20)) {
                $invalidProperties[] = "invalid value for 'createSince', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['createSince']) && (mb_strlen($this->container['createSince']) < 0)) {
                $invalidProperties[] = "invalid value for 'createSince', the character length must be bigger than or equal to 0.";
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
    * Gets authorization
    *  使用AK/SK方式认证时必选，携带的鉴权信息。
    *
    * @return string|null
    */
    public function getAuthorization()
    {
        return $this->container['authorization'];
    }

    /**
    * Sets authorization
    *
    * @param string|null $authorization 使用AK/SK方式认证时必选，携带的鉴权信息。
    *
    * @return $this
    */
    public function setAuthorization($authorization)
    {
        $this->container['authorization'] = $authorization;
        return $this;
    }

    /**
    * Gets xSdkDate
    *  使用AK/SK方式认证时必选，请求的发生时间。  格式为(YYYYMMDD'T'HHMMSS'Z')。
    *
    * @return string|null
    */
    public function getXSdkDate()
    {
        return $this->container['xSdkDate'];
    }

    /**
    * Sets xSdkDate
    *
    * @param string|null $xSdkDate 使用AK/SK方式认证时必选，请求的发生时间。  格式为(YYYYMMDD'T'HHMMSS'Z')。
    *
    * @return $this
    */
    public function setXSdkDate($xSdkDate)
    {
        $this->container['xSdkDate'] = $xSdkDate;
        return $this;
    }

    /**
    * Gets xProjectId
    *  使用AK/SK方式认证时必选，携带项目ID信息。
    *
    * @return string|null
    */
    public function getXProjectId()
    {
        return $this->container['xProjectId'];
    }

    /**
    * Sets xProjectId
    *
    * @param string|null $xProjectId 使用AK/SK方式认证时必选，携带项目ID信息。
    *
    * @return $this
    */
    public function setXProjectId($xProjectId)
    {
        $this->container['xProjectId'] = $xProjectId;
        return $this;
    }

    /**
    * Gets xAppUserId
    *  第三方用户ID。不允许输入中文。
    *
    * @return string|null
    */
    public function getXAppUserId()
    {
        return $this->container['xAppUserId'];
    }

    /**
    * Sets xAppUserId
    *
    * @param string|null $xAppUserId 第三方用户ID。不允许输入中文。
    *
    * @return $this
    */
    public function setXAppUserId($xAppUserId)
    {
        $this->container['xAppUserId'] = $xAppUserId;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量，表示从此偏移量开始查询。
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
    * @param int|null $offset 偏移量，表示从此偏移量开始查询。
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
    *  每页显示的条目数量。
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
    * @param int|null $limit 每页显示的条目数量。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets state
    *  任务状态，默认所有状态。  可多个状态查询，使用英文逗号分隔。  如state=CREATING,PUBLISHED
    *
    * @return string|null
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string|null $state 任务状态，默认所有状态。  可多个状态查询，使用英文逗号分隔。  如state=CREATING,PUBLISHED
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets sortKey
    *  排序字段，目前只支持create_time。
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
    * @param string|null $sortKey 排序字段，目前只支持create_time。
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
    *  排序方式。 * asc：升序 * desc：降序  默认asc升序。
    *
    * @return string|null
    */
    public function getSortDir()
    {
        return $this->container['sortDir'];
    }

    /**
    * Sets sortDir
    *
    * @param string|null $sortDir 排序方式。 * asc：升序 * desc：降序  默认asc升序。
    *
    * @return $this
    */
    public function setSortDir($sortDir)
    {
        $this->container['sortDir'] = $sortDir;
        return $this;
    }

    /**
    * Gets createUntil
    *  过滤创建时间<=输入时间的记录。
    *
    * @return string|null
    */
    public function getCreateUntil()
    {
        return $this->container['createUntil'];
    }

    /**
    * Sets createUntil
    *
    * @param string|null $createUntil 过滤创建时间<=输入时间的记录。
    *
    * @return $this
    */
    public function setCreateUntil($createUntil)
    {
        $this->container['createUntil'] = $createUntil;
        return $this;
    }

    /**
    * Gets createSince
    *  过滤创建时间>=输入时间的记录。
    *
    * @return string|null
    */
    public function getCreateSince()
    {
        return $this->container['createSince'];
    }

    /**
    * Sets createSince
    *
    * @param string|null $createSince 过滤创建时间>=输入时间的记录。
    *
    * @return $this
    */
    public function setCreateSince($createSince)
    {
        $this->container['createSince'] = $createSince;
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

