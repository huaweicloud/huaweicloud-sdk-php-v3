<?php

namespace HuaweiCloud\SDK\Apm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TxSearchRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TxSearchRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * businessId  应用id。
    * region  region英文名称。
    * startTime  开始时间。
    * endTime  结束时间。
    * envId  环境id。
    * requestId  上次请求的id。
    * pageNo  页码。
    * pageSize  每页数量。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'businessId' => 'int',
            'region' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'envId' => 'int',
            'requestId' => 'string',
            'pageNo' => 'int',
            'pageSize' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * businessId  应用id。
    * region  region英文名称。
    * startTime  开始时间。
    * endTime  结束时间。
    * envId  环境id。
    * requestId  上次请求的id。
    * pageNo  页码。
    * pageSize  每页数量。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'businessId' => 'int64',
        'region' => null,
        'startTime' => null,
        'endTime' => null,
        'envId' => 'int64',
        'requestId' => null,
        'pageNo' => 'int32',
        'pageSize' => 'int32'
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
    * businessId  应用id。
    * region  region英文名称。
    * startTime  开始时间。
    * endTime  结束时间。
    * envId  环境id。
    * requestId  上次请求的id。
    * pageNo  页码。
    * pageSize  每页数量。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'businessId' => 'business_id',
            'region' => 'region',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'envId' => 'env_id',
            'requestId' => 'request_id',
            'pageNo' => 'page_no',
            'pageSize' => 'page_size'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * businessId  应用id。
    * region  region英文名称。
    * startTime  开始时间。
    * endTime  结束时间。
    * envId  环境id。
    * requestId  上次请求的id。
    * pageNo  页码。
    * pageSize  每页数量。
    *
    * @var string[]
    */
    protected static $setters = [
            'businessId' => 'setBusinessId',
            'region' => 'setRegion',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'envId' => 'setEnvId',
            'requestId' => 'setRequestId',
            'pageNo' => 'setPageNo',
            'pageSize' => 'setPageSize'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * businessId  应用id。
    * region  region英文名称。
    * startTime  开始时间。
    * endTime  结束时间。
    * envId  环境id。
    * requestId  上次请求的id。
    * pageNo  页码。
    * pageSize  每页数量。
    *
    * @var string[]
    */
    protected static $getters = [
            'businessId' => 'getBusinessId',
            'region' => 'getRegion',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'envId' => 'getEnvId',
            'requestId' => 'getRequestId',
            'pageNo' => 'getPageNo',
            'pageSize' => 'getPageSize'
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
        $this->container['businessId'] = isset($data['businessId']) ? $data['businessId'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['envId'] = isset($data['envId']) ? $data['envId'] : null;
        $this->container['requestId'] = isset($data['requestId']) ? $data['requestId'] : null;
        $this->container['pageNo'] = isset($data['pageNo']) ? $data['pageNo'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['businessId'] === null) {
            $invalidProperties[] = "'businessId' can't be null";
        }
        if ($this->container['region'] === null) {
            $invalidProperties[] = "'region' can't be null";
        }
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
        }
        if ($this->container['pageNo'] === null) {
            $invalidProperties[] = "'pageNo' can't be null";
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
    * Gets businessId
    *  应用id。
    *
    * @return int
    */
    public function getBusinessId()
    {
        return $this->container['businessId'];
    }

    /**
    * Sets businessId
    *
    * @param int $businessId 应用id。
    *
    * @return $this
    */
    public function setBusinessId($businessId)
    {
        $this->container['businessId'] = $businessId;
        return $this;
    }

    /**
    * Gets region
    *  region英文名称。
    *
    * @return string
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string $region region英文名称。
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间。
    *
    * @return string
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string $startTime 开始时间。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  结束时间。
    *
    * @return string
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string $endTime 结束时间。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets envId
    *  环境id。
    *
    * @return int|null
    */
    public function getEnvId()
    {
        return $this->container['envId'];
    }

    /**
    * Sets envId
    *
    * @param int|null $envId 环境id。
    *
    * @return $this
    */
    public function setEnvId($envId)
    {
        $this->container['envId'] = $envId;
        return $this;
    }

    /**
    * Gets requestId
    *  上次请求的id。
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
    * @param string|null $requestId 上次请求的id。
    *
    * @return $this
    */
    public function setRequestId($requestId)
    {
        $this->container['requestId'] = $requestId;
        return $this;
    }

    /**
    * Gets pageNo
    *  页码。
    *
    * @return int
    */
    public function getPageNo()
    {
        return $this->container['pageNo'];
    }

    /**
    * Sets pageNo
    *
    * @param int $pageNo 页码。
    *
    * @return $this
    */
    public function setPageNo($pageNo)
    {
        $this->container['pageNo'] = $pageNo;
        return $this;
    }

    /**
    * Gets pageSize
    *  每页数量。
    *
    * @return int|null
    */
    public function getPageSize()
    {
        return $this->container['pageSize'];
    }

    /**
    * Sets pageSize
    *
    * @param int|null $pageSize 每页数量。
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
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

