<?php

namespace HuaweiCloud\SDK\Cse\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DubboMethod implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DubboMethod';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * serviceMethod  服务方法。
    * headersAttach  附加请求头。
    * httpMethods  http 方法。
    * httpPath  http 路径。
    * params  dubbo 方法参数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'serviceMethod' => 'string',
            'headersAttach' => 'string',
            'httpMethods' => 'string[]',
            'httpPath' => 'string',
            'params' => '\HuaweiCloud\SDK\Cse\V1\Model\DubboMethodParam[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * serviceMethod  服务方法。
    * headersAttach  附加请求头。
    * httpMethods  http 方法。
    * httpPath  http 路径。
    * params  dubbo 方法参数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'serviceMethod' => null,
        'headersAttach' => null,
        'httpMethods' => null,
        'httpPath' => null,
        'params' => null
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
    * serviceMethod  服务方法。
    * headersAttach  附加请求头。
    * httpMethods  http 方法。
    * httpPath  http 路径。
    * params  dubbo 方法参数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'serviceMethod' => 'serviceMethod',
            'headersAttach' => 'headersAttach',
            'httpMethods' => 'httpMethods',
            'httpPath' => 'httpPath',
            'params' => 'params'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * serviceMethod  服务方法。
    * headersAttach  附加请求头。
    * httpMethods  http 方法。
    * httpPath  http 路径。
    * params  dubbo 方法参数。
    *
    * @var string[]
    */
    protected static $setters = [
            'serviceMethod' => 'setServiceMethod',
            'headersAttach' => 'setHeadersAttach',
            'httpMethods' => 'setHttpMethods',
            'httpPath' => 'setHttpPath',
            'params' => 'setParams'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * serviceMethod  服务方法。
    * headersAttach  附加请求头。
    * httpMethods  http 方法。
    * httpPath  http 路径。
    * params  dubbo 方法参数。
    *
    * @var string[]
    */
    protected static $getters = [
            'serviceMethod' => 'getServiceMethod',
            'headersAttach' => 'getHeadersAttach',
            'httpMethods' => 'getHttpMethods',
            'httpPath' => 'getHttpPath',
            'params' => 'getParams'
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
        $this->container['serviceMethod'] = isset($data['serviceMethod']) ? $data['serviceMethod'] : null;
        $this->container['headersAttach'] = isset($data['headersAttach']) ? $data['headersAttach'] : null;
        $this->container['httpMethods'] = isset($data['httpMethods']) ? $data['httpMethods'] : null;
        $this->container['httpPath'] = isset($data['httpPath']) ? $data['httpPath'] : null;
        $this->container['params'] = isset($data['params']) ? $data['params'] : null;
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
    * Gets serviceMethod
    *  服务方法。
    *
    * @return string|null
    */
    public function getServiceMethod()
    {
        return $this->container['serviceMethod'];
    }

    /**
    * Sets serviceMethod
    *
    * @param string|null $serviceMethod 服务方法。
    *
    * @return $this
    */
    public function setServiceMethod($serviceMethod)
    {
        $this->container['serviceMethod'] = $serviceMethod;
        return $this;
    }

    /**
    * Gets headersAttach
    *  附加请求头。
    *
    * @return string|null
    */
    public function getHeadersAttach()
    {
        return $this->container['headersAttach'];
    }

    /**
    * Sets headersAttach
    *
    * @param string|null $headersAttach 附加请求头。
    *
    * @return $this
    */
    public function setHeadersAttach($headersAttach)
    {
        $this->container['headersAttach'] = $headersAttach;
        return $this;
    }

    /**
    * Gets httpMethods
    *  http 方法。
    *
    * @return string[]|null
    */
    public function getHttpMethods()
    {
        return $this->container['httpMethods'];
    }

    /**
    * Sets httpMethods
    *
    * @param string[]|null $httpMethods http 方法。
    *
    * @return $this
    */
    public function setHttpMethods($httpMethods)
    {
        $this->container['httpMethods'] = $httpMethods;
        return $this;
    }

    /**
    * Gets httpPath
    *  http 路径。
    *
    * @return string|null
    */
    public function getHttpPath()
    {
        return $this->container['httpPath'];
    }

    /**
    * Sets httpPath
    *
    * @param string|null $httpPath http 路径。
    *
    * @return $this
    */
    public function setHttpPath($httpPath)
    {
        $this->container['httpPath'] = $httpPath;
        return $this;
    }

    /**
    * Gets params
    *  dubbo 方法参数。
    *
    * @return \HuaweiCloud\SDK\Cse\V1\Model\DubboMethodParam[]|null
    */
    public function getParams()
    {
        return $this->container['params'];
    }

    /**
    * Sets params
    *
    * @param \HuaweiCloud\SDK\Cse\V1\Model\DubboMethodParam[]|null $params dubbo 方法参数。
    *
    * @return $this
    */
    public function setParams($params)
    {
        $this->container['params'] = $params;
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

