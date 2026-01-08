<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAssetTaskInfoRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAssetTaskInfoRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。
    * type  任务类型
    * assetId  媒资Id
    * createTimeAfter  根据任务创建时间匹配该时间之后的，包含该时间点，格式按照RFC3339，UTC时间，如2020-09-01T18:50:20Z
    * createTimeBefore  根据任务创建时间匹配该时间之前的，不包含该时间点，格式按照RFC3339，UTC时间，如2020-09-01T18:50:20Z
    * endTimeAfter  根据任务结束时间匹配该时间之后的，包含该时间点，格式按照RFC3339，UTC时间，如2020-09-01T18:50:20Z
    * endTimeBefore  根据任务结束时间匹配该时间之前的，不包含该时间点，格式按照RFC3339，UTC时间，如2020-09-01T18:50:20Z
    * status  任务状态
    * marker  标志位，不传默认表示从第一条开始
    * limit  返回的每页个数，默认10，最大100，最小1
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'xSdkDate' => 'string',
            'type' => 'string',
            'assetId' => 'string',
            'createTimeAfter' => 'string',
            'createTimeBefore' => 'string',
            'endTimeAfter' => 'string',
            'endTimeBefore' => 'string',
            'status' => 'string[]',
            'marker' => 'string',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。
    * type  任务类型
    * assetId  媒资Id
    * createTimeAfter  根据任务创建时间匹配该时间之后的，包含该时间点，格式按照RFC3339，UTC时间，如2020-09-01T18:50:20Z
    * createTimeBefore  根据任务创建时间匹配该时间之前的，不包含该时间点，格式按照RFC3339，UTC时间，如2020-09-01T18:50:20Z
    * endTimeAfter  根据任务结束时间匹配该时间之后的，包含该时间点，格式按照RFC3339，UTC时间，如2020-09-01T18:50:20Z
    * endTimeBefore  根据任务结束时间匹配该时间之前的，不包含该时间点，格式按照RFC3339，UTC时间，如2020-09-01T18:50:20Z
    * status  任务状态
    * marker  标志位，不传默认表示从第一条开始
    * limit  返回的每页个数，默认10，最大100，最小1
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'xSdkDate' => null,
        'type' => null,
        'assetId' => null,
        'createTimeAfter' => null,
        'createTimeBefore' => null,
        'endTimeAfter' => null,
        'endTimeBefore' => null,
        'status' => null,
        'marker' => null,
        'limit' => null
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
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。
    * type  任务类型
    * assetId  媒资Id
    * createTimeAfter  根据任务创建时间匹配该时间之后的，包含该时间点，格式按照RFC3339，UTC时间，如2020-09-01T18:50:20Z
    * createTimeBefore  根据任务创建时间匹配该时间之前的，不包含该时间点，格式按照RFC3339，UTC时间，如2020-09-01T18:50:20Z
    * endTimeAfter  根据任务结束时间匹配该时间之后的，包含该时间点，格式按照RFC3339，UTC时间，如2020-09-01T18:50:20Z
    * endTimeBefore  根据任务结束时间匹配该时间之前的，不包含该时间点，格式按照RFC3339，UTC时间，如2020-09-01T18:50:20Z
    * status  任务状态
    * marker  标志位，不传默认表示从第一条开始
    * limit  返回的每页个数，默认10，最大100，最小1
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'xSdkDate' => 'X-Sdk-Date',
            'type' => 'type',
            'assetId' => 'asset_id',
            'createTimeAfter' => 'create_time_after',
            'createTimeBefore' => 'create_time_before',
            'endTimeAfter' => 'end_time_after',
            'endTimeBefore' => 'end_time_before',
            'status' => 'status',
            'marker' => 'marker',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。
    * type  任务类型
    * assetId  媒资Id
    * createTimeAfter  根据任务创建时间匹配该时间之后的，包含该时间点，格式按照RFC3339，UTC时间，如2020-09-01T18:50:20Z
    * createTimeBefore  根据任务创建时间匹配该时间之前的，不包含该时间点，格式按照RFC3339，UTC时间，如2020-09-01T18:50:20Z
    * endTimeAfter  根据任务结束时间匹配该时间之后的，包含该时间点，格式按照RFC3339，UTC时间，如2020-09-01T18:50:20Z
    * endTimeBefore  根据任务结束时间匹配该时间之前的，不包含该时间点，格式按照RFC3339，UTC时间，如2020-09-01T18:50:20Z
    * status  任务状态
    * marker  标志位，不传默认表示从第一条开始
    * limit  返回的每页个数，默认10，最大100，最小1
    *
    * @var string[]
    */
    protected static $setters = [
            'xSdkDate' => 'setXSdkDate',
            'type' => 'setType',
            'assetId' => 'setAssetId',
            'createTimeAfter' => 'setCreateTimeAfter',
            'createTimeBefore' => 'setCreateTimeBefore',
            'endTimeAfter' => 'setEndTimeAfter',
            'endTimeBefore' => 'setEndTimeBefore',
            'status' => 'setStatus',
            'marker' => 'setMarker',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * xSdkDate  使用AK/SK方式认证时必选，请求的发生时间。
    * type  任务类型
    * assetId  媒资Id
    * createTimeAfter  根据任务创建时间匹配该时间之后的，包含该时间点，格式按照RFC3339，UTC时间，如2020-09-01T18:50:20Z
    * createTimeBefore  根据任务创建时间匹配该时间之前的，不包含该时间点，格式按照RFC3339，UTC时间，如2020-09-01T18:50:20Z
    * endTimeAfter  根据任务结束时间匹配该时间之后的，包含该时间点，格式按照RFC3339，UTC时间，如2020-09-01T18:50:20Z
    * endTimeBefore  根据任务结束时间匹配该时间之前的，不包含该时间点，格式按照RFC3339，UTC时间，如2020-09-01T18:50:20Z
    * status  任务状态
    * marker  标志位，不传默认表示从第一条开始
    * limit  返回的每页个数，默认10，最大100，最小1
    *
    * @var string[]
    */
    protected static $getters = [
            'xSdkDate' => 'getXSdkDate',
            'type' => 'getType',
            'assetId' => 'getAssetId',
            'createTimeAfter' => 'getCreateTimeAfter',
            'createTimeBefore' => 'getCreateTimeBefore',
            'endTimeAfter' => 'getEndTimeAfter',
            'endTimeBefore' => 'getEndTimeBefore',
            'status' => 'getStatus',
            'marker' => 'getMarker',
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
        $this->container['xSdkDate'] = isset($data['xSdkDate']) ? $data['xSdkDate'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['assetId'] = isset($data['assetId']) ? $data['assetId'] : null;
        $this->container['createTimeAfter'] = isset($data['createTimeAfter']) ? $data['createTimeAfter'] : null;
        $this->container['createTimeBefore'] = isset($data['createTimeBefore']) ? $data['createTimeBefore'] : null;
        $this->container['endTimeAfter'] = isset($data['endTimeAfter']) ? $data['endTimeAfter'] : null;
        $this->container['endTimeBefore'] = isset($data['endTimeBefore']) ? $data['endTimeBefore'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
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
            if (!is_null($this->container['xSdkDate']) && (mb_strlen($this->container['xSdkDate']) > 256)) {
                $invalidProperties[] = "invalid value for 'xSdkDate', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['xSdkDate']) && (mb_strlen($this->container['xSdkDate']) < 1)) {
                $invalidProperties[] = "invalid value for 'xSdkDate', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 256)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 0)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['assetId']) && (mb_strlen($this->container['assetId']) > 64)) {
                $invalidProperties[] = "invalid value for 'assetId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['assetId']) && (mb_strlen($this->container['assetId']) < 0)) {
                $invalidProperties[] = "invalid value for 'assetId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTimeAfter']) && (mb_strlen($this->container['createTimeAfter']) > 64)) {
                $invalidProperties[] = "invalid value for 'createTimeAfter', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['createTimeAfter']) && (mb_strlen($this->container['createTimeAfter']) < 0)) {
                $invalidProperties[] = "invalid value for 'createTimeAfter', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTimeBefore']) && (mb_strlen($this->container['createTimeBefore']) > 64)) {
                $invalidProperties[] = "invalid value for 'createTimeBefore', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['createTimeBefore']) && (mb_strlen($this->container['createTimeBefore']) < 0)) {
                $invalidProperties[] = "invalid value for 'createTimeBefore', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['endTimeAfter']) && (mb_strlen($this->container['endTimeAfter']) > 64)) {
                $invalidProperties[] = "invalid value for 'endTimeAfter', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['endTimeAfter']) && (mb_strlen($this->container['endTimeAfter']) < 0)) {
                $invalidProperties[] = "invalid value for 'endTimeAfter', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['endTimeBefore']) && (mb_strlen($this->container['endTimeBefore']) > 64)) {
                $invalidProperties[] = "invalid value for 'endTimeBefore', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['endTimeBefore']) && (mb_strlen($this->container['endTimeBefore']) < 0)) {
                $invalidProperties[] = "invalid value for 'endTimeBefore', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) > 256)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) < 0)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
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
    * Gets xSdkDate
    *  使用AK/SK方式认证时必选，请求的发生时间。
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
    * @param string|null $xSdkDate 使用AK/SK方式认证时必选，请求的发生时间。
    *
    * @return $this
    */
    public function setXSdkDate($xSdkDate)
    {
        $this->container['xSdkDate'] = $xSdkDate;
        return $this;
    }

    /**
    * Gets type
    *  任务类型
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
    * @param string|null $type 任务类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets assetId
    *  媒资Id
    *
    * @return string|null
    */
    public function getAssetId()
    {
        return $this->container['assetId'];
    }

    /**
    * Sets assetId
    *
    * @param string|null $assetId 媒资Id
    *
    * @return $this
    */
    public function setAssetId($assetId)
    {
        $this->container['assetId'] = $assetId;
        return $this;
    }

    /**
    * Gets createTimeAfter
    *  根据任务创建时间匹配该时间之后的，包含该时间点，格式按照RFC3339，UTC时间，如2020-09-01T18:50:20Z
    *
    * @return string|null
    */
    public function getCreateTimeAfter()
    {
        return $this->container['createTimeAfter'];
    }

    /**
    * Sets createTimeAfter
    *
    * @param string|null $createTimeAfter 根据任务创建时间匹配该时间之后的，包含该时间点，格式按照RFC3339，UTC时间，如2020-09-01T18:50:20Z
    *
    * @return $this
    */
    public function setCreateTimeAfter($createTimeAfter)
    {
        $this->container['createTimeAfter'] = $createTimeAfter;
        return $this;
    }

    /**
    * Gets createTimeBefore
    *  根据任务创建时间匹配该时间之前的，不包含该时间点，格式按照RFC3339，UTC时间，如2020-09-01T18:50:20Z
    *
    * @return string|null
    */
    public function getCreateTimeBefore()
    {
        return $this->container['createTimeBefore'];
    }

    /**
    * Sets createTimeBefore
    *
    * @param string|null $createTimeBefore 根据任务创建时间匹配该时间之前的，不包含该时间点，格式按照RFC3339，UTC时间，如2020-09-01T18:50:20Z
    *
    * @return $this
    */
    public function setCreateTimeBefore($createTimeBefore)
    {
        $this->container['createTimeBefore'] = $createTimeBefore;
        return $this;
    }

    /**
    * Gets endTimeAfter
    *  根据任务结束时间匹配该时间之后的，包含该时间点，格式按照RFC3339，UTC时间，如2020-09-01T18:50:20Z
    *
    * @return string|null
    */
    public function getEndTimeAfter()
    {
        return $this->container['endTimeAfter'];
    }

    /**
    * Sets endTimeAfter
    *
    * @param string|null $endTimeAfter 根据任务结束时间匹配该时间之后的，包含该时间点，格式按照RFC3339，UTC时间，如2020-09-01T18:50:20Z
    *
    * @return $this
    */
    public function setEndTimeAfter($endTimeAfter)
    {
        $this->container['endTimeAfter'] = $endTimeAfter;
        return $this;
    }

    /**
    * Gets endTimeBefore
    *  根据任务结束时间匹配该时间之前的，不包含该时间点，格式按照RFC3339，UTC时间，如2020-09-01T18:50:20Z
    *
    * @return string|null
    */
    public function getEndTimeBefore()
    {
        return $this->container['endTimeBefore'];
    }

    /**
    * Sets endTimeBefore
    *
    * @param string|null $endTimeBefore 根据任务结束时间匹配该时间之前的，不包含该时间点，格式按照RFC3339，UTC时间，如2020-09-01T18:50:20Z
    *
    * @return $this
    */
    public function setEndTimeBefore($endTimeBefore)
    {
        $this->container['endTimeBefore'] = $endTimeBefore;
        return $this;
    }

    /**
    * Gets status
    *  任务状态
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
    * @param string[]|null $status 任务状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets marker
    *  标志位，不传默认表示从第一条开始
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
    * @param string|null $marker 标志位，不传默认表示从第一条开始
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets limit
    *  返回的每页个数，默认10，最大100，最小1
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
    * @param int|null $limit 返回的每页个数，默认10，最大100，最小1
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

