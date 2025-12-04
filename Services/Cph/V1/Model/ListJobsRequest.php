<?php

namespace HuaweiCloud\SDK\Cph\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListJobsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListJobsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * requestId  任务下发请求时响应的request_id。 request_id和request_ids必须指定其中一个。request_id和request_ids同时指定的时候，以request_ids为准。
    * requestIds  任务下发请求时响应的多个request_id，用逗号分隔，最多不能超过20个。 request_id和request_ids必须指定其中一个。request_id和request_ids同时指定的时候，以request_ids为准。
    * offset  偏移量为一个大于等于0整数，表示查询该偏移量后面的所有的资源数，默认值为0。
    * limit  每页返回的资源个数。取值范围：1~100（默认值为100），一般设置为10、20、50。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'requestId' => 'string',
            'requestIds' => 'string',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * requestId  任务下发请求时响应的request_id。 request_id和request_ids必须指定其中一个。request_id和request_ids同时指定的时候，以request_ids为准。
    * requestIds  任务下发请求时响应的多个request_id，用逗号分隔，最多不能超过20个。 request_id和request_ids必须指定其中一个。request_id和request_ids同时指定的时候，以request_ids为准。
    * offset  偏移量为一个大于等于0整数，表示查询该偏移量后面的所有的资源数，默认值为0。
    * limit  每页返回的资源个数。取值范围：1~100（默认值为100），一般设置为10、20、50。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'requestId' => null,
        'requestIds' => null,
        'offset' => null,
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
    * requestId  任务下发请求时响应的request_id。 request_id和request_ids必须指定其中一个。request_id和request_ids同时指定的时候，以request_ids为准。
    * requestIds  任务下发请求时响应的多个request_id，用逗号分隔，最多不能超过20个。 request_id和request_ids必须指定其中一个。request_id和request_ids同时指定的时候，以request_ids为准。
    * offset  偏移量为一个大于等于0整数，表示查询该偏移量后面的所有的资源数，默认值为0。
    * limit  每页返回的资源个数。取值范围：1~100（默认值为100），一般设置为10、20、50。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'requestId' => 'request_id',
            'requestIds' => 'request_ids',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * requestId  任务下发请求时响应的request_id。 request_id和request_ids必须指定其中一个。request_id和request_ids同时指定的时候，以request_ids为准。
    * requestIds  任务下发请求时响应的多个request_id，用逗号分隔，最多不能超过20个。 request_id和request_ids必须指定其中一个。request_id和request_ids同时指定的时候，以request_ids为准。
    * offset  偏移量为一个大于等于0整数，表示查询该偏移量后面的所有的资源数，默认值为0。
    * limit  每页返回的资源个数。取值范围：1~100（默认值为100），一般设置为10、20、50。
    *
    * @var string[]
    */
    protected static $setters = [
            'requestId' => 'setRequestId',
            'requestIds' => 'setRequestIds',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * requestId  任务下发请求时响应的request_id。 request_id和request_ids必须指定其中一个。request_id和request_ids同时指定的时候，以request_ids为准。
    * requestIds  任务下发请求时响应的多个request_id，用逗号分隔，最多不能超过20个。 request_id和request_ids必须指定其中一个。request_id和request_ids同时指定的时候，以request_ids为准。
    * offset  偏移量为一个大于等于0整数，表示查询该偏移量后面的所有的资源数，默认值为0。
    * limit  每页返回的资源个数。取值范围：1~100（默认值为100），一般设置为10、20、50。
    *
    * @var string[]
    */
    protected static $getters = [
            'requestId' => 'getRequestId',
            'requestIds' => 'getRequestIds',
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
        $this->container['requestId'] = isset($data['requestId']) ? $data['requestId'] : null;
        $this->container['requestIds'] = isset($data['requestIds']) ? $data['requestIds'] : null;
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
            if (!is_null($this->container['requestId']) && (mb_strlen($this->container['requestId']) > 32)) {
                $invalidProperties[] = "invalid value for 'requestId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['requestId']) && (mb_strlen($this->container['requestId']) < 32)) {
                $invalidProperties[] = "invalid value for 'requestId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['requestIds']) && (mb_strlen($this->container['requestIds']) > 8096)) {
                $invalidProperties[] = "invalid value for 'requestIds', the character length must be smaller than or equal to 8096.";
            }
            if (!is_null($this->container['requestIds']) && (mb_strlen($this->container['requestIds']) < 0)) {
                $invalidProperties[] = "invalid value for 'requestIds', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 8096)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 8096.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 8096)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 8096.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
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
    * Gets requestId
    *  任务下发请求时响应的request_id。 request_id和request_ids必须指定其中一个。request_id和request_ids同时指定的时候，以request_ids为准。
    *
    * @return string|null
    */
    public function getRequestId()
    {
        return $this->container['requestId'];
    }

    /**
    * Sets requestId
    *
    * @param string|null $requestId 任务下发请求时响应的request_id。 request_id和request_ids必须指定其中一个。request_id和request_ids同时指定的时候，以request_ids为准。
    *
    * @return $this
    */
    public function setRequestId($requestId)
    {
        $this->container['requestId'] = $requestId;
        return $this;
    }

    /**
    * Gets requestIds
    *  任务下发请求时响应的多个request_id，用逗号分隔，最多不能超过20个。 request_id和request_ids必须指定其中一个。request_id和request_ids同时指定的时候，以request_ids为准。
    *
    * @return string|null
    */
    public function getRequestIds()
    {
        return $this->container['requestIds'];
    }

    /**
    * Sets requestIds
    *
    * @param string|null $requestIds 任务下发请求时响应的多个request_id，用逗号分隔，最多不能超过20个。 request_id和request_ids必须指定其中一个。request_id和request_ids同时指定的时候，以request_ids为准。
    *
    * @return $this
    */
    public function setRequestIds($requestIds)
    {
        $this->container['requestIds'] = $requestIds;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量为一个大于等于0整数，表示查询该偏移量后面的所有的资源数，默认值为0。
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
    * @param int|null $offset 偏移量为一个大于等于0整数，表示查询该偏移量后面的所有的资源数，默认值为0。
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
    *  每页返回的资源个数。取值范围：1~100（默认值为100），一般设置为10、20、50。
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
    * @param int|null $limit 每页返回的资源个数。取值范围：1~100（默认值为100），一般设置为10、20、50。
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

