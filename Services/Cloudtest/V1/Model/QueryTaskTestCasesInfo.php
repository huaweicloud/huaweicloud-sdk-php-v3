<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryTaskTestCasesInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryTaskTestCasesInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * pageNo  页码
    * pageSize  每页数量
    * startIndex  起始位
    * endIndex  结束位
    * keyWord  关键字
    * testCaseUris  用例uri列表
    * iteratorUri  测试计划uri
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'pageNo' => 'int',
            'pageSize' => 'int',
            'startIndex' => 'int',
            'endIndex' => 'int',
            'keyWord' => 'string',
            'testCaseUris' => 'string[]',
            'iteratorUri' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * pageNo  页码
    * pageSize  每页数量
    * startIndex  起始位
    * endIndex  结束位
    * keyWord  关键字
    * testCaseUris  用例uri列表
    * iteratorUri  测试计划uri
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'pageNo' => 'int32',
        'pageSize' => 'int32',
        'startIndex' => 'int32',
        'endIndex' => 'int32',
        'keyWord' => null,
        'testCaseUris' => null,
        'iteratorUri' => null
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
    * pageNo  页码
    * pageSize  每页数量
    * startIndex  起始位
    * endIndex  结束位
    * keyWord  关键字
    * testCaseUris  用例uri列表
    * iteratorUri  测试计划uri
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'pageNo' => 'page_no',
            'pageSize' => 'page_size',
            'startIndex' => 'start_index',
            'endIndex' => 'end_index',
            'keyWord' => 'key_word',
            'testCaseUris' => 'test_case_uris',
            'iteratorUri' => 'iterator_uri'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * pageNo  页码
    * pageSize  每页数量
    * startIndex  起始位
    * endIndex  结束位
    * keyWord  关键字
    * testCaseUris  用例uri列表
    * iteratorUri  测试计划uri
    *
    * @var string[]
    */
    protected static $setters = [
            'pageNo' => 'setPageNo',
            'pageSize' => 'setPageSize',
            'startIndex' => 'setStartIndex',
            'endIndex' => 'setEndIndex',
            'keyWord' => 'setKeyWord',
            'testCaseUris' => 'setTestCaseUris',
            'iteratorUri' => 'setIteratorUri'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * pageNo  页码
    * pageSize  每页数量
    * startIndex  起始位
    * endIndex  结束位
    * keyWord  关键字
    * testCaseUris  用例uri列表
    * iteratorUri  测试计划uri
    *
    * @var string[]
    */
    protected static $getters = [
            'pageNo' => 'getPageNo',
            'pageSize' => 'getPageSize',
            'startIndex' => 'getStartIndex',
            'endIndex' => 'getEndIndex',
            'keyWord' => 'getKeyWord',
            'testCaseUris' => 'getTestCaseUris',
            'iteratorUri' => 'getIteratorUri'
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
        $this->container['pageNo'] = isset($data['pageNo']) ? $data['pageNo'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['startIndex'] = isset($data['startIndex']) ? $data['startIndex'] : null;
        $this->container['endIndex'] = isset($data['endIndex']) ? $data['endIndex'] : null;
        $this->container['keyWord'] = isset($data['keyWord']) ? $data['keyWord'] : null;
        $this->container['testCaseUris'] = isset($data['testCaseUris']) ? $data['testCaseUris'] : null;
        $this->container['iteratorUri'] = isset($data['iteratorUri']) ? $data['iteratorUri'] : null;
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
    * Gets pageNo
    *  页码
    *
    * @return int|null
    */
    public function getPageNo()
    {
        return $this->container['pageNo'];
    }

    /**
    * Sets pageNo
    *
    * @param int|null $pageNo 页码
    *
    * @return $this
    */
    public function setPageNo($pageNo)
    {
        $this->container['pageNo'] = $pageNo;
        return $this;
    }

    /**
    * Gets pageSize
    *  每页数量
    *
    * @return int|null
    */
    public function getPageSize()
    {
        return $this->container['pageSize'];
    }

    /**
    * Sets pageSize
    *
    * @param int|null $pageSize 每页数量
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
        return $this;
    }

    /**
    * Gets startIndex
    *  起始位
    *
    * @return int|null
    */
    public function getStartIndex()
    {
        return $this->container['startIndex'];
    }

    /**
    * Sets startIndex
    *
    * @param int|null $startIndex 起始位
    *
    * @return $this
    */
    public function setStartIndex($startIndex)
    {
        $this->container['startIndex'] = $startIndex;
        return $this;
    }

    /**
    * Gets endIndex
    *  结束位
    *
    * @return int|null
    */
    public function getEndIndex()
    {
        return $this->container['endIndex'];
    }

    /**
    * Sets endIndex
    *
    * @param int|null $endIndex 结束位
    *
    * @return $this
    */
    public function setEndIndex($endIndex)
    {
        $this->container['endIndex'] = $endIndex;
        return $this;
    }

    /**
    * Gets keyWord
    *  关键字
    *
    * @return string|null
    */
    public function getKeyWord()
    {
        return $this->container['keyWord'];
    }

    /**
    * Sets keyWord
    *
    * @param string|null $keyWord 关键字
    *
    * @return $this
    */
    public function setKeyWord($keyWord)
    {
        $this->container['keyWord'] = $keyWord;
        return $this;
    }

    /**
    * Gets testCaseUris
    *  用例uri列表
    *
    * @return string[]|null
    */
    public function getTestCaseUris()
    {
        return $this->container['testCaseUris'];
    }

    /**
    * Sets testCaseUris
    *
    * @param string[]|null $testCaseUris 用例uri列表
    *
    * @return $this
    */
    public function setTestCaseUris($testCaseUris)
    {
        $this->container['testCaseUris'] = $testCaseUris;
        return $this;
    }

    /**
    * Gets iteratorUri
    *  测试计划uri
    *
    * @return string|null
    */
    public function getIteratorUri()
    {
        return $this->container['iteratorUri'];
    }

    /**
    * Sets iteratorUri
    *
    * @param string|null $iteratorUri 测试计划uri
    *
    * @return $this
    */
    public function setIteratorUri($iteratorUri)
    {
        $this->container['iteratorUri'] = $iteratorUri;
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

