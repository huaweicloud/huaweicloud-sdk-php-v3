<?php

namespace HuaweiCloud\SDK\Cdn\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HeaderMap implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HeaderMap';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * contentDisposition  指示回复的内容该以何种形式展示
    * contentLanguage  说明访问者希望采用的语言或语言组合
    * accessControlAllowOrigin  指定了该响应的资源是否被允许与给定的origin共享
    * accessControlAllowMethods  明确了客户端所要访问的资源允许使用的方法或方法列表
    * accessControlMaxAge  Access-Control-Allow-Methods 和Access-Control-Allow-Headers 提供的信息可以被缓存多久
    * accessControlExposeHeaders  列出了哪些首部可以作为响应的一部分暴露给外部
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'contentDisposition' => 'string',
            'contentLanguage' => 'string',
            'accessControlAllowOrigin' => 'string',
            'accessControlAllowMethods' => 'string',
            'accessControlMaxAge' => 'string',
            'accessControlExposeHeaders' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * contentDisposition  指示回复的内容该以何种形式展示
    * contentLanguage  说明访问者希望采用的语言或语言组合
    * accessControlAllowOrigin  指定了该响应的资源是否被允许与给定的origin共享
    * accessControlAllowMethods  明确了客户端所要访问的资源允许使用的方法或方法列表
    * accessControlMaxAge  Access-Control-Allow-Methods 和Access-Control-Allow-Headers 提供的信息可以被缓存多久
    * accessControlExposeHeaders  列出了哪些首部可以作为响应的一部分暴露给外部
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'contentDisposition' => null,
        'contentLanguage' => null,
        'accessControlAllowOrigin' => null,
        'accessControlAllowMethods' => null,
        'accessControlMaxAge' => null,
        'accessControlExposeHeaders' => null
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
    * contentDisposition  指示回复的内容该以何种形式展示
    * contentLanguage  说明访问者希望采用的语言或语言组合
    * accessControlAllowOrigin  指定了该响应的资源是否被允许与给定的origin共享
    * accessControlAllowMethods  明确了客户端所要访问的资源允许使用的方法或方法列表
    * accessControlMaxAge  Access-Control-Allow-Methods 和Access-Control-Allow-Headers 提供的信息可以被缓存多久
    * accessControlExposeHeaders  列出了哪些首部可以作为响应的一部分暴露给外部
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'contentDisposition' => 'Content-Disposition',
            'contentLanguage' => 'Content-Language',
            'accessControlAllowOrigin' => 'Access-Control-Allow-Origin',
            'accessControlAllowMethods' => 'Access-Control-Allow-Methods',
            'accessControlMaxAge' => 'Access-Control-Max-Age',
            'accessControlExposeHeaders' => 'Access-Control-Expose-Headers'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * contentDisposition  指示回复的内容该以何种形式展示
    * contentLanguage  说明访问者希望采用的语言或语言组合
    * accessControlAllowOrigin  指定了该响应的资源是否被允许与给定的origin共享
    * accessControlAllowMethods  明确了客户端所要访问的资源允许使用的方法或方法列表
    * accessControlMaxAge  Access-Control-Allow-Methods 和Access-Control-Allow-Headers 提供的信息可以被缓存多久
    * accessControlExposeHeaders  列出了哪些首部可以作为响应的一部分暴露给外部
    *
    * @var string[]
    */
    protected static $setters = [
            'contentDisposition' => 'setContentDisposition',
            'contentLanguage' => 'setContentLanguage',
            'accessControlAllowOrigin' => 'setAccessControlAllowOrigin',
            'accessControlAllowMethods' => 'setAccessControlAllowMethods',
            'accessControlMaxAge' => 'setAccessControlMaxAge',
            'accessControlExposeHeaders' => 'setAccessControlExposeHeaders'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * contentDisposition  指示回复的内容该以何种形式展示
    * contentLanguage  说明访问者希望采用的语言或语言组合
    * accessControlAllowOrigin  指定了该响应的资源是否被允许与给定的origin共享
    * accessControlAllowMethods  明确了客户端所要访问的资源允许使用的方法或方法列表
    * accessControlMaxAge  Access-Control-Allow-Methods 和Access-Control-Allow-Headers 提供的信息可以被缓存多久
    * accessControlExposeHeaders  列出了哪些首部可以作为响应的一部分暴露给外部
    *
    * @var string[]
    */
    protected static $getters = [
            'contentDisposition' => 'getContentDisposition',
            'contentLanguage' => 'getContentLanguage',
            'accessControlAllowOrigin' => 'getAccessControlAllowOrigin',
            'accessControlAllowMethods' => 'getAccessControlAllowMethods',
            'accessControlMaxAge' => 'getAccessControlMaxAge',
            'accessControlExposeHeaders' => 'getAccessControlExposeHeaders'
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
        $this->container['contentDisposition'] = isset($data['contentDisposition']) ? $data['contentDisposition'] : null;
        $this->container['contentLanguage'] = isset($data['contentLanguage']) ? $data['contentLanguage'] : null;
        $this->container['accessControlAllowOrigin'] = isset($data['accessControlAllowOrigin']) ? $data['accessControlAllowOrigin'] : null;
        $this->container['accessControlAllowMethods'] = isset($data['accessControlAllowMethods']) ? $data['accessControlAllowMethods'] : null;
        $this->container['accessControlMaxAge'] = isset($data['accessControlMaxAge']) ? $data['accessControlMaxAge'] : null;
        $this->container['accessControlExposeHeaders'] = isset($data['accessControlExposeHeaders']) ? $data['accessControlExposeHeaders'] : null;
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
    * Gets contentDisposition
    *  指示回复的内容该以何种形式展示
    *
    * @return string|null
    */
    public function getContentDisposition()
    {
        return $this->container['contentDisposition'];
    }

    /**
    * Sets contentDisposition
    *
    * @param string|null $contentDisposition 指示回复的内容该以何种形式展示
    *
    * @return $this
    */
    public function setContentDisposition($contentDisposition)
    {
        $this->container['contentDisposition'] = $contentDisposition;
        return $this;
    }

    /**
    * Gets contentLanguage
    *  说明访问者希望采用的语言或语言组合
    *
    * @return string|null
    */
    public function getContentLanguage()
    {
        return $this->container['contentLanguage'];
    }

    /**
    * Sets contentLanguage
    *
    * @param string|null $contentLanguage 说明访问者希望采用的语言或语言组合
    *
    * @return $this
    */
    public function setContentLanguage($contentLanguage)
    {
        $this->container['contentLanguage'] = $contentLanguage;
        return $this;
    }

    /**
    * Gets accessControlAllowOrigin
    *  指定了该响应的资源是否被允许与给定的origin共享
    *
    * @return string|null
    */
    public function getAccessControlAllowOrigin()
    {
        return $this->container['accessControlAllowOrigin'];
    }

    /**
    * Sets accessControlAllowOrigin
    *
    * @param string|null $accessControlAllowOrigin 指定了该响应的资源是否被允许与给定的origin共享
    *
    * @return $this
    */
    public function setAccessControlAllowOrigin($accessControlAllowOrigin)
    {
        $this->container['accessControlAllowOrigin'] = $accessControlAllowOrigin;
        return $this;
    }

    /**
    * Gets accessControlAllowMethods
    *  明确了客户端所要访问的资源允许使用的方法或方法列表
    *
    * @return string|null
    */
    public function getAccessControlAllowMethods()
    {
        return $this->container['accessControlAllowMethods'];
    }

    /**
    * Sets accessControlAllowMethods
    *
    * @param string|null $accessControlAllowMethods 明确了客户端所要访问的资源允许使用的方法或方法列表
    *
    * @return $this
    */
    public function setAccessControlAllowMethods($accessControlAllowMethods)
    {
        $this->container['accessControlAllowMethods'] = $accessControlAllowMethods;
        return $this;
    }

    /**
    * Gets accessControlMaxAge
    *  Access-Control-Allow-Methods 和Access-Control-Allow-Headers 提供的信息可以被缓存多久
    *
    * @return string|null
    */
    public function getAccessControlMaxAge()
    {
        return $this->container['accessControlMaxAge'];
    }

    /**
    * Sets accessControlMaxAge
    *
    * @param string|null $accessControlMaxAge Access-Control-Allow-Methods 和Access-Control-Allow-Headers 提供的信息可以被缓存多久
    *
    * @return $this
    */
    public function setAccessControlMaxAge($accessControlMaxAge)
    {
        $this->container['accessControlMaxAge'] = $accessControlMaxAge;
        return $this;
    }

    /**
    * Gets accessControlExposeHeaders
    *  列出了哪些首部可以作为响应的一部分暴露给外部
    *
    * @return string|null
    */
    public function getAccessControlExposeHeaders()
    {
        return $this->container['accessControlExposeHeaders'];
    }

    /**
    * Sets accessControlExposeHeaders
    *
    * @param string|null $accessControlExposeHeaders 列出了哪些首部可以作为响应的一部分暴露给外部
    *
    * @return $this
    */
    public function setAccessControlExposeHeaders($accessControlExposeHeaders)
    {
        $this->container['accessControlExposeHeaders'] = $accessControlExposeHeaders;
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

