<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TaskAssignCaseVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TaskAssignCaseVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sort  排序顺序
    * caseUri  用例uri
    * isAvailable  是否可用
    * testCaseName  用例名称
    * testCaseNumber  用例编号
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sort' => 'int',
            'caseUri' => 'string',
            'isAvailable' => 'int',
            'testCaseName' => 'string',
            'testCaseNumber' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sort  排序顺序
    * caseUri  用例uri
    * isAvailable  是否可用
    * testCaseName  用例名称
    * testCaseNumber  用例编号
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sort' => 'int32',
        'caseUri' => null,
        'isAvailable' => 'int32',
        'testCaseName' => null,
        'testCaseNumber' => null
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
    * sort  排序顺序
    * caseUri  用例uri
    * isAvailable  是否可用
    * testCaseName  用例名称
    * testCaseNumber  用例编号
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sort' => 'sort',
            'caseUri' => 'case_uri',
            'isAvailable' => 'is_available',
            'testCaseName' => 'test_case_name',
            'testCaseNumber' => 'test_case_number'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sort  排序顺序
    * caseUri  用例uri
    * isAvailable  是否可用
    * testCaseName  用例名称
    * testCaseNumber  用例编号
    *
    * @var string[]
    */
    protected static $setters = [
            'sort' => 'setSort',
            'caseUri' => 'setCaseUri',
            'isAvailable' => 'setIsAvailable',
            'testCaseName' => 'setTestCaseName',
            'testCaseNumber' => 'setTestCaseNumber'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sort  排序顺序
    * caseUri  用例uri
    * isAvailable  是否可用
    * testCaseName  用例名称
    * testCaseNumber  用例编号
    *
    * @var string[]
    */
    protected static $getters = [
            'sort' => 'getSort',
            'caseUri' => 'getCaseUri',
            'isAvailable' => 'getIsAvailable',
            'testCaseName' => 'getTestCaseName',
            'testCaseNumber' => 'getTestCaseNumber'
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
        $this->container['sort'] = isset($data['sort']) ? $data['sort'] : null;
        $this->container['caseUri'] = isset($data['caseUri']) ? $data['caseUri'] : null;
        $this->container['isAvailable'] = isset($data['isAvailable']) ? $data['isAvailable'] : null;
        $this->container['testCaseName'] = isset($data['testCaseName']) ? $data['testCaseName'] : null;
        $this->container['testCaseNumber'] = isset($data['testCaseNumber']) ? $data['testCaseNumber'] : null;
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
    * Gets sort
    *  排序顺序
    *
    * @return int|null
    */
    public function getSort()
    {
        return $this->container['sort'];
    }

    /**
    * Sets sort
    *
    * @param int|null $sort 排序顺序
    *
    * @return $this
    */
    public function setSort($sort)
    {
        $this->container['sort'] = $sort;
        return $this;
    }

    /**
    * Gets caseUri
    *  用例uri
    *
    * @return string|null
    */
    public function getCaseUri()
    {
        return $this->container['caseUri'];
    }

    /**
    * Sets caseUri
    *
    * @param string|null $caseUri 用例uri
    *
    * @return $this
    */
    public function setCaseUri($caseUri)
    {
        $this->container['caseUri'] = $caseUri;
        return $this;
    }

    /**
    * Gets isAvailable
    *  是否可用
    *
    * @return int|null
    */
    public function getIsAvailable()
    {
        return $this->container['isAvailable'];
    }

    /**
    * Sets isAvailable
    *
    * @param int|null $isAvailable 是否可用
    *
    * @return $this
    */
    public function setIsAvailable($isAvailable)
    {
        $this->container['isAvailable'] = $isAvailable;
        return $this;
    }

    /**
    * Gets testCaseName
    *  用例名称
    *
    * @return string|null
    */
    public function getTestCaseName()
    {
        return $this->container['testCaseName'];
    }

    /**
    * Sets testCaseName
    *
    * @param string|null $testCaseName 用例名称
    *
    * @return $this
    */
    public function setTestCaseName($testCaseName)
    {
        $this->container['testCaseName'] = $testCaseName;
        return $this;
    }

    /**
    * Gets testCaseNumber
    *  用例编号
    *
    * @return string|null
    */
    public function getTestCaseNumber()
    {
        return $this->container['testCaseNumber'];
    }

    /**
    * Sets testCaseNumber
    *
    * @param string|null $testCaseNumber 用例编号
    *
    * @return $this
    */
    public function setTestCaseNumber($testCaseNumber)
    {
        $this->container['testCaseNumber'] = $testCaseNumber;
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

