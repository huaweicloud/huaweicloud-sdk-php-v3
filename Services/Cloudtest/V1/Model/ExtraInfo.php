<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExtraInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExtraInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * childImportPackage  子级导入的包
    * documentLink  文档链接
    * httpMethod  http请求方法
    * httpUrl  HTTP请求的URL
    * importPackage  导入的包
    * mock  mock
    * outputParam  输出参数
    * paramDependent  参数依赖
    * summary  摘要
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'childImportPackage' => 'string[]',
            'documentLink' => 'string',
            'httpMethod' => 'string',
            'httpUrl' => 'string',
            'importPackage' => 'string[]',
            'mock' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\MockInfo',
            'outputParam' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\AwVariable[]',
            'paramDependent' => 'string',
            'summary' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * childImportPackage  子级导入的包
    * documentLink  文档链接
    * httpMethod  http请求方法
    * httpUrl  HTTP请求的URL
    * importPackage  导入的包
    * mock  mock
    * outputParam  输出参数
    * paramDependent  参数依赖
    * summary  摘要
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'childImportPackage' => null,
        'documentLink' => null,
        'httpMethod' => null,
        'httpUrl' => null,
        'importPackage' => null,
        'mock' => null,
        'outputParam' => null,
        'paramDependent' => null,
        'summary' => null
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
    * childImportPackage  子级导入的包
    * documentLink  文档链接
    * httpMethod  http请求方法
    * httpUrl  HTTP请求的URL
    * importPackage  导入的包
    * mock  mock
    * outputParam  输出参数
    * paramDependent  参数依赖
    * summary  摘要
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'childImportPackage' => 'childImportPackage',
            'documentLink' => 'document_link',
            'httpMethod' => 'http_method',
            'httpUrl' => 'http_url',
            'importPackage' => 'importPackage',
            'mock' => 'mock',
            'outputParam' => 'outputParam',
            'paramDependent' => 'param_dependent',
            'summary' => 'summary'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * childImportPackage  子级导入的包
    * documentLink  文档链接
    * httpMethod  http请求方法
    * httpUrl  HTTP请求的URL
    * importPackage  导入的包
    * mock  mock
    * outputParam  输出参数
    * paramDependent  参数依赖
    * summary  摘要
    *
    * @var string[]
    */
    protected static $setters = [
            'childImportPackage' => 'setChildImportPackage',
            'documentLink' => 'setDocumentLink',
            'httpMethod' => 'setHttpMethod',
            'httpUrl' => 'setHttpUrl',
            'importPackage' => 'setImportPackage',
            'mock' => 'setMock',
            'outputParam' => 'setOutputParam',
            'paramDependent' => 'setParamDependent',
            'summary' => 'setSummary'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * childImportPackage  子级导入的包
    * documentLink  文档链接
    * httpMethod  http请求方法
    * httpUrl  HTTP请求的URL
    * importPackage  导入的包
    * mock  mock
    * outputParam  输出参数
    * paramDependent  参数依赖
    * summary  摘要
    *
    * @var string[]
    */
    protected static $getters = [
            'childImportPackage' => 'getChildImportPackage',
            'documentLink' => 'getDocumentLink',
            'httpMethod' => 'getHttpMethod',
            'httpUrl' => 'getHttpUrl',
            'importPackage' => 'getImportPackage',
            'mock' => 'getMock',
            'outputParam' => 'getOutputParam',
            'paramDependent' => 'getParamDependent',
            'summary' => 'getSummary'
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
        $this->container['childImportPackage'] = isset($data['childImportPackage']) ? $data['childImportPackage'] : null;
        $this->container['documentLink'] = isset($data['documentLink']) ? $data['documentLink'] : null;
        $this->container['httpMethod'] = isset($data['httpMethod']) ? $data['httpMethod'] : null;
        $this->container['httpUrl'] = isset($data['httpUrl']) ? $data['httpUrl'] : null;
        $this->container['importPackage'] = isset($data['importPackage']) ? $data['importPackage'] : null;
        $this->container['mock'] = isset($data['mock']) ? $data['mock'] : null;
        $this->container['outputParam'] = isset($data['outputParam']) ? $data['outputParam'] : null;
        $this->container['paramDependent'] = isset($data['paramDependent']) ? $data['paramDependent'] : null;
        $this->container['summary'] = isset($data['summary']) ? $data['summary'] : null;
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
    * Gets childImportPackage
    *  子级导入的包
    *
    * @return string[]|null
    */
    public function getChildImportPackage()
    {
        return $this->container['childImportPackage'];
    }

    /**
    * Sets childImportPackage
    *
    * @param string[]|null $childImportPackage 子级导入的包
    *
    * @return $this
    */
    public function setChildImportPackage($childImportPackage)
    {
        $this->container['childImportPackage'] = $childImportPackage;
        return $this;
    }

    /**
    * Gets documentLink
    *  文档链接
    *
    * @return string|null
    */
    public function getDocumentLink()
    {
        return $this->container['documentLink'];
    }

    /**
    * Sets documentLink
    *
    * @param string|null $documentLink 文档链接
    *
    * @return $this
    */
    public function setDocumentLink($documentLink)
    {
        $this->container['documentLink'] = $documentLink;
        return $this;
    }

    /**
    * Gets httpMethod
    *  http请求方法
    *
    * @return string|null
    */
    public function getHttpMethod()
    {
        return $this->container['httpMethod'];
    }

    /**
    * Sets httpMethod
    *
    * @param string|null $httpMethod http请求方法
    *
    * @return $this
    */
    public function setHttpMethod($httpMethod)
    {
        $this->container['httpMethod'] = $httpMethod;
        return $this;
    }

    /**
    * Gets httpUrl
    *  HTTP请求的URL
    *
    * @return string|null
    */
    public function getHttpUrl()
    {
        return $this->container['httpUrl'];
    }

    /**
    * Sets httpUrl
    *
    * @param string|null $httpUrl HTTP请求的URL
    *
    * @return $this
    */
    public function setHttpUrl($httpUrl)
    {
        $this->container['httpUrl'] = $httpUrl;
        return $this;
    }

    /**
    * Gets importPackage
    *  导入的包
    *
    * @return string[]|null
    */
    public function getImportPackage()
    {
        return $this->container['importPackage'];
    }

    /**
    * Sets importPackage
    *
    * @param string[]|null $importPackage 导入的包
    *
    * @return $this
    */
    public function setImportPackage($importPackage)
    {
        $this->container['importPackage'] = $importPackage;
        return $this;
    }

    /**
    * Gets mock
    *  mock
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\MockInfo|null
    */
    public function getMock()
    {
        return $this->container['mock'];
    }

    /**
    * Sets mock
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\MockInfo|null $mock mock
    *
    * @return $this
    */
    public function setMock($mock)
    {
        $this->container['mock'] = $mock;
        return $this;
    }

    /**
    * Gets outputParam
    *  输出参数
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\AwVariable[]|null
    */
    public function getOutputParam()
    {
        return $this->container['outputParam'];
    }

    /**
    * Sets outputParam
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\AwVariable[]|null $outputParam 输出参数
    *
    * @return $this
    */
    public function setOutputParam($outputParam)
    {
        $this->container['outputParam'] = $outputParam;
        return $this;
    }

    /**
    * Gets paramDependent
    *  参数依赖
    *
    * @return string|null
    */
    public function getParamDependent()
    {
        return $this->container['paramDependent'];
    }

    /**
    * Sets paramDependent
    *
    * @param string|null $paramDependent 参数依赖
    *
    * @return $this
    */
    public function setParamDependent($paramDependent)
    {
        $this->container['paramDependent'] = $paramDependent;
        return $this;
    }

    /**
    * Gets summary
    *  摘要
    *
    * @return string|null
    */
    public function getSummary()
    {
        return $this->container['summary'];
    }

    /**
    * Sets summary
    *
    * @param string|null $summary 摘要
    *
    * @return $this
    */
    public function setSummary($summary)
    {
        $this->container['summary'] = $summary;
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

