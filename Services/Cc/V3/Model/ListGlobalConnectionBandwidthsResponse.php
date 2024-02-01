<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListGlobalConnectionBandwidthsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListGlobalConnectionBandwidthsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * requestId  资源ID标识符。
    * pageInfo  pageInfo
    * globalconnectionBandwidths  全域互联带宽列表响应体。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'requestId' => 'string',
            'pageInfo' => '\HuaweiCloud\SDK\Cc\V3\Model\PageInfo',
            'globalconnectionBandwidths' => '\HuaweiCloud\SDK\Cc\V3\Model\GlobalConnectionBandwidth[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * requestId  资源ID标识符。
    * pageInfo  pageInfo
    * globalconnectionBandwidths  全域互联带宽列表响应体。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'requestId' => null,
        'pageInfo' => null,
        'globalconnectionBandwidths' => null
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
    * requestId  资源ID标识符。
    * pageInfo  pageInfo
    * globalconnectionBandwidths  全域互联带宽列表响应体。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'requestId' => 'request_id',
            'pageInfo' => 'page_info',
            'globalconnectionBandwidths' => 'globalconnection_bandwidths'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * requestId  资源ID标识符。
    * pageInfo  pageInfo
    * globalconnectionBandwidths  全域互联带宽列表响应体。
    *
    * @var string[]
    */
    protected static $setters = [
            'requestId' => 'setRequestId',
            'pageInfo' => 'setPageInfo',
            'globalconnectionBandwidths' => 'setGlobalconnectionBandwidths'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * requestId  资源ID标识符。
    * pageInfo  pageInfo
    * globalconnectionBandwidths  全域互联带宽列表响应体。
    *
    * @var string[]
    */
    protected static $getters = [
            'requestId' => 'getRequestId',
            'pageInfo' => 'getPageInfo',
            'globalconnectionBandwidths' => 'getGlobalconnectionBandwidths'
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
        $this->container['pageInfo'] = isset($data['pageInfo']) ? $data['pageInfo'] : null;
        $this->container['globalconnectionBandwidths'] = isset($data['globalconnectionBandwidths']) ? $data['globalconnectionBandwidths'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['requestId'] === null) {
            $invalidProperties[] = "'requestId' can't be null";
        }
            if ((mb_strlen($this->container['requestId']) > 36)) {
                $invalidProperties[] = "invalid value for 'requestId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['requestId']) < 32)) {
                $invalidProperties[] = "invalid value for 'requestId', the character length must be bigger than or equal to 32.";
            }
        if ($this->container['globalconnectionBandwidths'] === null) {
            $invalidProperties[] = "'globalconnectionBandwidths' can't be null";
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
    *  资源ID标识符。
    *
    * @return string
    */
    public function getRequestId()
    {
        return $this->container['requestId'];
    }

    /**
    * Sets requestId
    *
    * @param string $requestId 资源ID标识符。
    *
    * @return $this
    */
    public function setRequestId($requestId)
    {
        $this->container['requestId'] = $requestId;
        return $this;
    }

    /**
    * Gets pageInfo
    *  pageInfo
    *
    * @return \HuaweiCloud\SDK\Cc\V3\Model\PageInfo|null
    */
    public function getPageInfo()
    {
        return $this->container['pageInfo'];
    }

    /**
    * Sets pageInfo
    *
    * @param \HuaweiCloud\SDK\Cc\V3\Model\PageInfo|null $pageInfo pageInfo
    *
    * @return $this
    */
    public function setPageInfo($pageInfo)
    {
        $this->container['pageInfo'] = $pageInfo;
        return $this;
    }

    /**
    * Gets globalconnectionBandwidths
    *  全域互联带宽列表响应体。
    *
    * @return \HuaweiCloud\SDK\Cc\V3\Model\GlobalConnectionBandwidth[]
    */
    public function getGlobalconnectionBandwidths()
    {
        return $this->container['globalconnectionBandwidths'];
    }

    /**
    * Sets globalconnectionBandwidths
    *
    * @param \HuaweiCloud\SDK\Cc\V3\Model\GlobalConnectionBandwidth[] $globalconnectionBandwidths 全域互联带宽列表响应体。
    *
    * @return $this
    */
    public function setGlobalconnectionBandwidths($globalconnectionBandwidths)
    {
        $this->container['globalconnectionBandwidths'] = $globalconnectionBandwidths;
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

