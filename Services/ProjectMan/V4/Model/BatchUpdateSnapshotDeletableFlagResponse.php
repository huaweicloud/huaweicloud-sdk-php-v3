<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchUpdateSnapshotDeletableFlagResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchUpdateSnapshotDeletableFlagResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * message  响应信息。
    * code  响应码。
    * totalCount  总数量。
    * successCount  成功数量。
    * failureCount  失败数量。
    * failureDetails  失败详情列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'message' => 'string',
            'code' => 'string',
            'totalCount' => 'int',
            'successCount' => 'int',
            'failureCount' => 'int',
            'failureDetails' => '\HuaweiCloud\SDK\ProjectMan\V4\Model\FailureDetail[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * message  响应信息。
    * code  响应码。
    * totalCount  总数量。
    * successCount  成功数量。
    * failureCount  失败数量。
    * failureDetails  失败详情列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'message' => null,
        'code' => null,
        'totalCount' => 'int32',
        'successCount' => 'int32',
        'failureCount' => 'int32',
        'failureDetails' => null
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
    * message  响应信息。
    * code  响应码。
    * totalCount  总数量。
    * successCount  成功数量。
    * failureCount  失败数量。
    * failureDetails  失败详情列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'message' => 'message',
            'code' => 'code',
            'totalCount' => 'total_count',
            'successCount' => 'success_count',
            'failureCount' => 'failure_count',
            'failureDetails' => 'failure_details'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * message  响应信息。
    * code  响应码。
    * totalCount  总数量。
    * successCount  成功数量。
    * failureCount  失败数量。
    * failureDetails  失败详情列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'message' => 'setMessage',
            'code' => 'setCode',
            'totalCount' => 'setTotalCount',
            'successCount' => 'setSuccessCount',
            'failureCount' => 'setFailureCount',
            'failureDetails' => 'setFailureDetails'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * message  响应信息。
    * code  响应码。
    * totalCount  总数量。
    * successCount  成功数量。
    * failureCount  失败数量。
    * failureDetails  失败详情列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'message' => 'getMessage',
            'code' => 'getCode',
            'totalCount' => 'getTotalCount',
            'successCount' => 'getSuccessCount',
            'failureCount' => 'getFailureCount',
            'failureDetails' => 'getFailureDetails'
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
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['totalCount'] = isset($data['totalCount']) ? $data['totalCount'] : null;
        $this->container['successCount'] = isset($data['successCount']) ? $data['successCount'] : null;
        $this->container['failureCount'] = isset($data['failureCount']) ? $data['failureCount'] : null;
        $this->container['failureDetails'] = isset($data['failureDetails']) ? $data['failureDetails'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets message
    *  响应信息。
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message 响应信息。
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets code
    *  响应码。
    *
    * @return string|null
    */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
    * Sets code
    *
    * @param string|null $code 响应码。
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
        return $this;
    }

    /**
    * Gets totalCount
    *  总数量。
    *
    * @return int|null
    */
    public function getTotalCount()
    {
        return $this->container['totalCount'];
    }

    /**
    * Sets totalCount
    *
    * @param int|null $totalCount 总数量。
    *
    * @return $this
    */
    public function setTotalCount($totalCount)
    {
        $this->container['totalCount'] = $totalCount;
        return $this;
    }

    /**
    * Gets successCount
    *  成功数量。
    *
    * @return int|null
    */
    public function getSuccessCount()
    {
        return $this->container['successCount'];
    }

    /**
    * Sets successCount
    *
    * @param int|null $successCount 成功数量。
    *
    * @return $this
    */
    public function setSuccessCount($successCount)
    {
        $this->container['successCount'] = $successCount;
        return $this;
    }

    /**
    * Gets failureCount
    *  失败数量。
    *
    * @return int|null
    */
    public function getFailureCount()
    {
        return $this->container['failureCount'];
    }

    /**
    * Sets failureCount
    *
    * @param int|null $failureCount 失败数量。
    *
    * @return $this
    */
    public function setFailureCount($failureCount)
    {
        $this->container['failureCount'] = $failureCount;
        return $this;
    }

    /**
    * Gets failureDetails
    *  失败详情列表。
    *
    * @return \HuaweiCloud\SDK\ProjectMan\V4\Model\FailureDetail[]|null
    */
    public function getFailureDetails()
    {
        return $this->container['failureDetails'];
    }

    /**
    * Sets failureDetails
    *
    * @param \HuaweiCloud\SDK\ProjectMan\V4\Model\FailureDetail[]|null $failureDetails 失败详情列表。
    *
    * @return $this
    */
    public function setFailureDetails($failureDetails)
    {
        $this->container['failureDetails'] = $failureDetails;
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

