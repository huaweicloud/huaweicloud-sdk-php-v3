<?php

namespace HuaweiCloud\SDK\Cdn\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ErrorCodeRedirectRules implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ErrorCodeRedirectRules';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * errorCode  重定向的错误码，当前支持以下状态码 4xx:400, 403, 404, 405, 414, 416, 451 5xx:500, 501, 502, 503, 504
    * targetCode  重定向状态码，取值为301或302
    * targetLink  重定向的目标链接
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'errorCode' => 'string',
            'targetCode' => 'string',
            'targetLink' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * errorCode  重定向的错误码，当前支持以下状态码 4xx:400, 403, 404, 405, 414, 416, 451 5xx:500, 501, 502, 503, 504
    * targetCode  重定向状态码，取值为301或302
    * targetLink  重定向的目标链接
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'errorCode' => null,
        'targetCode' => null,
        'targetLink' => null
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
    * errorCode  重定向的错误码，当前支持以下状态码 4xx:400, 403, 404, 405, 414, 416, 451 5xx:500, 501, 502, 503, 504
    * targetCode  重定向状态码，取值为301或302
    * targetLink  重定向的目标链接
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'errorCode' => 'error_code',
            'targetCode' => 'target_code',
            'targetLink' => 'target_link'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * errorCode  重定向的错误码，当前支持以下状态码 4xx:400, 403, 404, 405, 414, 416, 451 5xx:500, 501, 502, 503, 504
    * targetCode  重定向状态码，取值为301或302
    * targetLink  重定向的目标链接
    *
    * @var string[]
    */
    protected static $setters = [
            'errorCode' => 'setErrorCode',
            'targetCode' => 'setTargetCode',
            'targetLink' => 'setTargetLink'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * errorCode  重定向的错误码，当前支持以下状态码 4xx:400, 403, 404, 405, 414, 416, 451 5xx:500, 501, 502, 503, 504
    * targetCode  重定向状态码，取值为301或302
    * targetLink  重定向的目标链接
    *
    * @var string[]
    */
    protected static $getters = [
            'errorCode' => 'getErrorCode',
            'targetCode' => 'getTargetCode',
            'targetLink' => 'getTargetLink'
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
        $this->container['errorCode'] = isset($data['errorCode']) ? $data['errorCode'] : null;
        $this->container['targetCode'] = isset($data['targetCode']) ? $data['targetCode'] : null;
        $this->container['targetLink'] = isset($data['targetLink']) ? $data['targetLink'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['errorCode'] === null) {
            $invalidProperties[] = "'errorCode' can't be null";
        }
        if ($this->container['targetCode'] === null) {
            $invalidProperties[] = "'targetCode' can't be null";
        }
        if ($this->container['targetLink'] === null) {
            $invalidProperties[] = "'targetLink' can't be null";
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
    * Gets errorCode
    *  重定向的错误码，当前支持以下状态码 4xx:400, 403, 404, 405, 414, 416, 451 5xx:500, 501, 502, 503, 504
    *
    * @return string
    */
    public function getErrorCode()
    {
        return $this->container['errorCode'];
    }

    /**
    * Sets errorCode
    *
    * @param string $errorCode 重定向的错误码，当前支持以下状态码 4xx:400, 403, 404, 405, 414, 416, 451 5xx:500, 501, 502, 503, 504
    *
    * @return $this
    */
    public function setErrorCode($errorCode)
    {
        $this->container['errorCode'] = $errorCode;
        return $this;
    }

    /**
    * Gets targetCode
    *  重定向状态码，取值为301或302
    *
    * @return string
    */
    public function getTargetCode()
    {
        return $this->container['targetCode'];
    }

    /**
    * Sets targetCode
    *
    * @param string $targetCode 重定向状态码，取值为301或302
    *
    * @return $this
    */
    public function setTargetCode($targetCode)
    {
        $this->container['targetCode'] = $targetCode;
        return $this;
    }

    /**
    * Gets targetLink
    *  重定向的目标链接
    *
    * @return string
    */
    public function getTargetLink()
    {
        return $this->container['targetLink'];
    }

    /**
    * Sets targetLink
    *
    * @param string $targetLink 重定向的目标链接
    *
    * @return $this
    */
    public function setTargetLink($targetLink)
    {
        $this->container['targetLink'] = $targetLink;
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

