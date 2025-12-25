<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreatePlaybookRuleResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreatePlaybookRuleResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * code  错误码
    * message  错误信息
    * data  data
    * xRequestId  xRequestId
    * xApiDeprecationInfo  xApiDeprecationInfo
    * xApiDeprecationDate  xApiDeprecationDate
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'code' => 'string',
            'message' => 'string',
            'data' => '\HuaweiCloud\SDK\SecMaster\V1\Model\RuleInfo',
            'xRequestId' => 'string',
            'xApiDeprecationInfo' => 'string',
            'xApiDeprecationDate' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * code  错误码
    * message  错误信息
    * data  data
    * xRequestId  xRequestId
    * xApiDeprecationInfo  xApiDeprecationInfo
    * xApiDeprecationDate  xApiDeprecationDate
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'code' => null,
        'message' => null,
        'data' => null,
        'xRequestId' => null,
        'xApiDeprecationInfo' => null,
        'xApiDeprecationDate' => null
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
    * code  错误码
    * message  错误信息
    * data  data
    * xRequestId  xRequestId
    * xApiDeprecationInfo  xApiDeprecationInfo
    * xApiDeprecationDate  xApiDeprecationDate
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'code' => 'code',
            'message' => 'message',
            'data' => 'data',
            'xRequestId' => 'X-request-id',
            'xApiDeprecationInfo' => 'X-API-Deprecation-Info',
            'xApiDeprecationDate' => 'X-API-Deprecation-Date'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * code  错误码
    * message  错误信息
    * data  data
    * xRequestId  xRequestId
    * xApiDeprecationInfo  xApiDeprecationInfo
    * xApiDeprecationDate  xApiDeprecationDate
    *
    * @var string[]
    */
    protected static $setters = [
            'code' => 'setCode',
            'message' => 'setMessage',
            'data' => 'setData',
            'xRequestId' => 'setXRequestId',
            'xApiDeprecationInfo' => 'setXApiDeprecationInfo',
            'xApiDeprecationDate' => 'setXApiDeprecationDate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * code  错误码
    * message  错误信息
    * data  data
    * xRequestId  xRequestId
    * xApiDeprecationInfo  xApiDeprecationInfo
    * xApiDeprecationDate  xApiDeprecationDate
    *
    * @var string[]
    */
    protected static $getters = [
            'code' => 'getCode',
            'message' => 'getMessage',
            'data' => 'getData',
            'xRequestId' => 'getXRequestId',
            'xApiDeprecationInfo' => 'getXApiDeprecationInfo',
            'xApiDeprecationDate' => 'getXApiDeprecationDate'
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
        $this->container['xRequestId'] = isset($data['xRequestId']) ? $data['xRequestId'] : null;
        $this->container['xApiDeprecationInfo'] = isset($data['xApiDeprecationInfo']) ? $data['xApiDeprecationInfo'] : null;
        $this->container['xApiDeprecationDate'] = isset($data['xApiDeprecationDate']) ? $data['xApiDeprecationDate'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['code']) && (mb_strlen($this->container['code']) > 32)) {
                $invalidProperties[] = "invalid value for 'code', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['code']) && (mb_strlen($this->container['code']) < 1)) {
                $invalidProperties[] = "invalid value for 'code', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['message']) && (mb_strlen($this->container['message']) > 32)) {
                $invalidProperties[] = "invalid value for 'message', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['message']) && (mb_strlen($this->container['message']) < 1)) {
                $invalidProperties[] = "invalid value for 'message', the character length must be bigger than or equal to 1.";
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
    * Gets code
    *  错误码
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
    * @param string|null $code 错误码
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
        return $this;
    }

    /**
    * Gets message
    *  错误信息
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
    * @param string|null $message 错误信息
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets data
    *  data
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\RuleInfo|null
    */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
    * Sets data
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\RuleInfo|null $data data
    *
    * @return $this
    */
    public function setData($data)
    {
        $this->container['data'] = $data;
        return $this;
    }

    /**
    * Gets xRequestId
    *  xRequestId
    *
    * @return string|null
    */
    public function getXRequestId()
    {
        return $this->container['xRequestId'];
    }

    /**
    * Sets xRequestId
    *
    * @param string|null $xRequestId xRequestId
    *
    * @return $this
    */
    public function setXRequestId($xRequestId)
    {
        $this->container['xRequestId'] = $xRequestId;
        return $this;
    }

    /**
    * Gets xApiDeprecationInfo
    *  xApiDeprecationInfo
    *
    * @return string|null
    */
    public function getXApiDeprecationInfo()
    {
        return $this->container['xApiDeprecationInfo'];
    }

    /**
    * Sets xApiDeprecationInfo
    *
    * @param string|null $xApiDeprecationInfo xApiDeprecationInfo
    *
    * @return $this
    */
    public function setXApiDeprecationInfo($xApiDeprecationInfo)
    {
        $this->container['xApiDeprecationInfo'] = $xApiDeprecationInfo;
        return $this;
    }

    /**
    * Gets xApiDeprecationDate
    *  xApiDeprecationDate
    *
    * @return string|null
    */
    public function getXApiDeprecationDate()
    {
        return $this->container['xApiDeprecationDate'];
    }

    /**
    * Sets xApiDeprecationDate
    *
    * @param string|null $xApiDeprecationDate xApiDeprecationDate
    *
    * @return $this
    */
    public function setXApiDeprecationDate($xApiDeprecationDate)
    {
        $this->container['xApiDeprecationDate'] = $xApiDeprecationDate;
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

