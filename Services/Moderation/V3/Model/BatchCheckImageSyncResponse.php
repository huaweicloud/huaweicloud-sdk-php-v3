<?php

namespace HuaweiCloud\SDK\Moderation\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchCheckImageSyncResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchCheckImageSyncResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * requestId  本次请求的唯⼀标识，⽤于问题排查，建议保存。
    * results  调用结果。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'requestId' => 'string',
            'results' => '\HuaweiCloud\SDK\Moderation\V3\Model\ImageBatchSyncDetectionResult[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * requestId  本次请求的唯⼀标识，⽤于问题排查，建议保存。
    * results  调用结果。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'requestId' => null,
        'results' => null
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
    * requestId  本次请求的唯⼀标识，⽤于问题排查，建议保存。
    * results  调用结果。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'requestId' => 'request_id',
            'results' => 'results'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * requestId  本次请求的唯⼀标识，⽤于问题排查，建议保存。
    * results  调用结果。
    *
    * @var string[]
    */
    protected static $setters = [
            'requestId' => 'setRequestId',
            'results' => 'setResults'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * requestId  本次请求的唯⼀标识，⽤于问题排查，建议保存。
    * results  调用结果。
    *
    * @var string[]
    */
    protected static $getters = [
            'requestId' => 'getRequestId',
            'results' => 'getResults'
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
        $this->container['results'] = isset($data['results']) ? $data['results'] : null;
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
    * Gets requestId
    *  本次请求的唯⼀标识，⽤于问题排查，建议保存。
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
    * @param string|null $requestId 本次请求的唯⼀标识，⽤于问题排查，建议保存。
    *
    * @return $this
    */
    public function setRequestId($requestId)
    {
        $this->container['requestId'] = $requestId;
        return $this;
    }

    /**
    * Gets results
    *  调用结果。
    *
    * @return \HuaweiCloud\SDK\Moderation\V3\Model\ImageBatchSyncDetectionResult[]|null
    */
    public function getResults()
    {
        return $this->container['results'];
    }

    /**
    * Sets results
    *
    * @param \HuaweiCloud\SDK\Moderation\V3\Model\ImageBatchSyncDetectionResult[]|null $results 调用结果。
    *
    * @return $this
    */
    public function setResults($results)
    {
        $this->container['results'] = $results;
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

