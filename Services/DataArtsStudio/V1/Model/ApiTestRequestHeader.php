<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApiTestRequestHeader implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApiTestRequestHeader';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * path  请求路径
    * userAgent  代理（固定值）
    * xApigMode  请求方式（固定值）
    * xAppIdentity  识别编号（固定值）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'path' => 'string',
            'userAgent' => 'string',
            'xApigMode' => 'string',
            'xAppIdentity' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * path  请求路径
    * userAgent  代理（固定值）
    * xApigMode  请求方式（固定值）
    * xAppIdentity  识别编号（固定值）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'path' => null,
        'userAgent' => null,
        'xApigMode' => null,
        'xAppIdentity' => null
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
    * path  请求路径
    * userAgent  代理（固定值）
    * xApigMode  请求方式（固定值）
    * xAppIdentity  识别编号（固定值）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'path' => 'path',
            'userAgent' => 'user_agent',
            'xApigMode' => 'x_apig_mode',
            'xAppIdentity' => 'x_app_identity'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * path  请求路径
    * userAgent  代理（固定值）
    * xApigMode  请求方式（固定值）
    * xAppIdentity  识别编号（固定值）
    *
    * @var string[]
    */
    protected static $setters = [
            'path' => 'setPath',
            'userAgent' => 'setUserAgent',
            'xApigMode' => 'setXApigMode',
            'xAppIdentity' => 'setXAppIdentity'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * path  请求路径
    * userAgent  代理（固定值）
    * xApigMode  请求方式（固定值）
    * xAppIdentity  识别编号（固定值）
    *
    * @var string[]
    */
    protected static $getters = [
            'path' => 'getPath',
            'userAgent' => 'getUserAgent',
            'xApigMode' => 'getXApigMode',
            'xAppIdentity' => 'getXAppIdentity'
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
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['userAgent'] = isset($data['userAgent']) ? $data['userAgent'] : null;
        $this->container['xApigMode'] = isset($data['xApigMode']) ? $data['xApigMode'] : null;
        $this->container['xAppIdentity'] = isset($data['xAppIdentity']) ? $data['xAppIdentity'] : null;
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
    * Gets path
    *  请求路径
    *
    * @return string|null
    */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
    * Sets path
    *
    * @param string|null $path 请求路径
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets userAgent
    *  代理（固定值）
    *
    * @return string|null
    */
    public function getUserAgent()
    {
        return $this->container['userAgent'];
    }

    /**
    * Sets userAgent
    *
    * @param string|null $userAgent 代理（固定值）
    *
    * @return $this
    */
    public function setUserAgent($userAgent)
    {
        $this->container['userAgent'] = $userAgent;
        return $this;
    }

    /**
    * Gets xApigMode
    *  请求方式（固定值）
    *
    * @return string|null
    */
    public function getXApigMode()
    {
        return $this->container['xApigMode'];
    }

    /**
    * Sets xApigMode
    *
    * @param string|null $xApigMode 请求方式（固定值）
    *
    * @return $this
    */
    public function setXApigMode($xApigMode)
    {
        $this->container['xApigMode'] = $xApigMode;
        return $this;
    }

    /**
    * Gets xAppIdentity
    *  识别编号（固定值）
    *
    * @return int|null
    */
    public function getXAppIdentity()
    {
        return $this->container['xAppIdentity'];
    }

    /**
    * Sets xAppIdentity
    *
    * @param int|null $xAppIdentity 识别编号（固定值）
    *
    * @return $this
    */
    public function setXAppIdentity($xAppIdentity)
    {
        $this->container['xAppIdentity'] = $xAppIdentity;
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

