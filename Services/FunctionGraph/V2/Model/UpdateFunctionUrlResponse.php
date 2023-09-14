<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateFunctionUrlResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateFunctionUrlResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * authType  函数URL鉴权方式
    * cors  cors
    * functionUrl  函数URL地址
    * createTime  函数URL创建时间
    * lastModifiedTime  函数URL上次修改时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'authType' => 'string',
            'cors' => '\HuaweiCloud\SDK\FunctionGraph\V2\Model\CorsConfig',
            'functionUrl' => 'string',
            'createTime' => 'string',
            'lastModifiedTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * authType  函数URL鉴权方式
    * cors  cors
    * functionUrl  函数URL地址
    * createTime  函数URL创建时间
    * lastModifiedTime  函数URL上次修改时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'authType' => null,
        'cors' => null,
        'functionUrl' => null,
        'createTime' => null,
        'lastModifiedTime' => null
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
    * authType  函数URL鉴权方式
    * cors  cors
    * functionUrl  函数URL地址
    * createTime  函数URL创建时间
    * lastModifiedTime  函数URL上次修改时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'authType' => 'auth_type',
            'cors' => 'cors',
            'functionUrl' => 'function_url',
            'createTime' => 'create_time',
            'lastModifiedTime' => 'last_modified_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * authType  函数URL鉴权方式
    * cors  cors
    * functionUrl  函数URL地址
    * createTime  函数URL创建时间
    * lastModifiedTime  函数URL上次修改时间
    *
    * @var string[]
    */
    protected static $setters = [
            'authType' => 'setAuthType',
            'cors' => 'setCors',
            'functionUrl' => 'setFunctionUrl',
            'createTime' => 'setCreateTime',
            'lastModifiedTime' => 'setLastModifiedTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * authType  函数URL鉴权方式
    * cors  cors
    * functionUrl  函数URL地址
    * createTime  函数URL创建时间
    * lastModifiedTime  函数URL上次修改时间
    *
    * @var string[]
    */
    protected static $getters = [
            'authType' => 'getAuthType',
            'cors' => 'getCors',
            'functionUrl' => 'getFunctionUrl',
            'createTime' => 'getCreateTime',
            'lastModifiedTime' => 'getLastModifiedTime'
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
        $this->container['authType'] = isset($data['authType']) ? $data['authType'] : null;
        $this->container['cors'] = isset($data['cors']) ? $data['cors'] : null;
        $this->container['functionUrl'] = isset($data['functionUrl']) ? $data['functionUrl'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['lastModifiedTime'] = isset($data['lastModifiedTime']) ? $data['lastModifiedTime'] : null;
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
    * Gets authType
    *  函数URL鉴权方式
    *
    * @return string|null
    */
    public function getAuthType()
    {
        return $this->container['authType'];
    }

    /**
    * Sets authType
    *
    * @param string|null $authType 函数URL鉴权方式
    *
    * @return $this
    */
    public function setAuthType($authType)
    {
        $this->container['authType'] = $authType;
        return $this;
    }

    /**
    * Gets cors
    *  cors
    *
    * @return \HuaweiCloud\SDK\FunctionGraph\V2\Model\CorsConfig|null
    */
    public function getCors()
    {
        return $this->container['cors'];
    }

    /**
    * Sets cors
    *
    * @param \HuaweiCloud\SDK\FunctionGraph\V2\Model\CorsConfig|null $cors cors
    *
    * @return $this
    */
    public function setCors($cors)
    {
        $this->container['cors'] = $cors;
        return $this;
    }

    /**
    * Gets functionUrl
    *  函数URL地址
    *
    * @return string|null
    */
    public function getFunctionUrl()
    {
        return $this->container['functionUrl'];
    }

    /**
    * Sets functionUrl
    *
    * @param string|null $functionUrl 函数URL地址
    *
    * @return $this
    */
    public function setFunctionUrl($functionUrl)
    {
        $this->container['functionUrl'] = $functionUrl;
        return $this;
    }

    /**
    * Gets createTime
    *  函数URL创建时间
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 函数URL创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets lastModifiedTime
    *  函数URL上次修改时间
    *
    * @return string|null
    */
    public function getLastModifiedTime()
    {
        return $this->container['lastModifiedTime'];
    }

    /**
    * Sets lastModifiedTime
    *
    * @param string|null $lastModifiedTime 函数URL上次修改时间
    *
    * @return $this
    */
    public function setLastModifiedTime($lastModifiedTime)
    {
        $this->container['lastModifiedTime'] = $lastModifiedTime;
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

