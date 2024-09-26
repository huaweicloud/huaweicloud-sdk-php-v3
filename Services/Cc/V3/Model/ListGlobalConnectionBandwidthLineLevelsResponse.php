<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListGlobalConnectionBandwidthLineLevelsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListGlobalConnectionBandwidthLineLevelsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * requestId  请求ID。
    * pageInfo  pageInfo
    * lineLevels  线路分级列表响应体。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'requestId' => 'string',
            'pageInfo' => '\HuaweiCloud\SDK\Cc\V3\Model\PageInfo',
            'lineLevels' => '\HuaweiCloud\SDK\Cc\V3\Model\GlobalConnectionBandwidthLineLevel[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * requestId  请求ID。
    * pageInfo  pageInfo
    * lineLevels  线路分级列表响应体。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'requestId' => null,
        'pageInfo' => null,
        'lineLevels' => null
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
    * requestId  请求ID。
    * pageInfo  pageInfo
    * lineLevels  线路分级列表响应体。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'requestId' => 'request_id',
            'pageInfo' => 'page_info',
            'lineLevels' => 'line_levels'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * requestId  请求ID。
    * pageInfo  pageInfo
    * lineLevels  线路分级列表响应体。
    *
    * @var string[]
    */
    protected static $setters = [
            'requestId' => 'setRequestId',
            'pageInfo' => 'setPageInfo',
            'lineLevels' => 'setLineLevels'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * requestId  请求ID。
    * pageInfo  pageInfo
    * lineLevels  线路分级列表响应体。
    *
    * @var string[]
    */
    protected static $getters = [
            'requestId' => 'getRequestId',
            'pageInfo' => 'getPageInfo',
            'lineLevels' => 'getLineLevels'
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
        $this->container['lineLevels'] = isset($data['lineLevels']) ? $data['lineLevels'] : null;
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
        if ($this->container['lineLevels'] === null) {
            $invalidProperties[] = "'lineLevels' can't be null";
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
    *  请求ID。
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
    * @param string $requestId 请求ID。
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
    * Gets lineLevels
    *  线路分级列表响应体。
    *
    * @return \HuaweiCloud\SDK\Cc\V3\Model\GlobalConnectionBandwidthLineLevel[]
    */
    public function getLineLevels()
    {
        return $this->container['lineLevels'];
    }

    /**
    * Sets lineLevels
    *
    * @param \HuaweiCloud\SDK\Cc\V3\Model\GlobalConnectionBandwidthLineLevel[] $lineLevels 线路分级列表响应体。
    *
    * @return $this
    */
    public function setLineLevels($lineLevels)
    {
        $this->container['lineLevels'] = $lineLevels;
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

