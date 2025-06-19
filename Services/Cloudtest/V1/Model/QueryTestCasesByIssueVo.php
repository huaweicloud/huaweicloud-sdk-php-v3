<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryTestCasesByIssueVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryTestCasesByIssueVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * caseStatusMap  用例状态
    * newCreate  新建态
    * designing  设计态
    * finished  完成态
    * testing  测试态
    * testCaseNum  需求关联的用例数量
    * testcases  用例详情
    * totalCount  用例总数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'caseStatusMap' => 'map[string,int]',
            'newCreate' => 'int',
            'designing' => 'int',
            'finished' => 'int',
            'testing' => 'int',
            'testCaseNum' => 'int',
            'testcases' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\TestCaseVo[]',
            'totalCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * caseStatusMap  用例状态
    * newCreate  新建态
    * designing  设计态
    * finished  完成态
    * testing  测试态
    * testCaseNum  需求关联的用例数量
    * testcases  用例详情
    * totalCount  用例总数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'caseStatusMap' => 'int32',
        'newCreate' => 'int32',
        'designing' => 'int32',
        'finished' => 'int32',
        'testing' => 'int32',
        'testCaseNum' => 'int32',
        'testcases' => null,
        'totalCount' => 'int32'
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
    * caseStatusMap  用例状态
    * newCreate  新建态
    * designing  设计态
    * finished  完成态
    * testing  测试态
    * testCaseNum  需求关联的用例数量
    * testcases  用例详情
    * totalCount  用例总数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'caseStatusMap' => 'case_status_map',
            'newCreate' => 'new_create',
            'designing' => 'designing',
            'finished' => 'finished',
            'testing' => 'testing',
            'testCaseNum' => 'test_case_num',
            'testcases' => 'testcases',
            'totalCount' => 'total_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * caseStatusMap  用例状态
    * newCreate  新建态
    * designing  设计态
    * finished  完成态
    * testing  测试态
    * testCaseNum  需求关联的用例数量
    * testcases  用例详情
    * totalCount  用例总数
    *
    * @var string[]
    */
    protected static $setters = [
            'caseStatusMap' => 'setCaseStatusMap',
            'newCreate' => 'setNewCreate',
            'designing' => 'setDesigning',
            'finished' => 'setFinished',
            'testing' => 'setTesting',
            'testCaseNum' => 'setTestCaseNum',
            'testcases' => 'setTestcases',
            'totalCount' => 'setTotalCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * caseStatusMap  用例状态
    * newCreate  新建态
    * designing  设计态
    * finished  完成态
    * testing  测试态
    * testCaseNum  需求关联的用例数量
    * testcases  用例详情
    * totalCount  用例总数
    *
    * @var string[]
    */
    protected static $getters = [
            'caseStatusMap' => 'getCaseStatusMap',
            'newCreate' => 'getNewCreate',
            'designing' => 'getDesigning',
            'finished' => 'getFinished',
            'testing' => 'getTesting',
            'testCaseNum' => 'getTestCaseNum',
            'testcases' => 'getTestcases',
            'totalCount' => 'getTotalCount'
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
        $this->container['caseStatusMap'] = isset($data['caseStatusMap']) ? $data['caseStatusMap'] : null;
        $this->container['newCreate'] = isset($data['newCreate']) ? $data['newCreate'] : null;
        $this->container['designing'] = isset($data['designing']) ? $data['designing'] : null;
        $this->container['finished'] = isset($data['finished']) ? $data['finished'] : null;
        $this->container['testing'] = isset($data['testing']) ? $data['testing'] : null;
        $this->container['testCaseNum'] = isset($data['testCaseNum']) ? $data['testCaseNum'] : null;
        $this->container['testcases'] = isset($data['testcases']) ? $data['testcases'] : null;
        $this->container['totalCount'] = isset($data['totalCount']) ? $data['totalCount'] : null;
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
    * Gets caseStatusMap
    *  用例状态
    *
    * @return map[string,int]|null
    */
    public function getCaseStatusMap()
    {
        return $this->container['caseStatusMap'];
    }

    /**
    * Sets caseStatusMap
    *
    * @param map[string,int]|null $caseStatusMap 用例状态
    *
    * @return $this
    */
    public function setCaseStatusMap($caseStatusMap)
    {
        $this->container['caseStatusMap'] = $caseStatusMap;
        return $this;
    }

    /**
    * Gets newCreate
    *  新建态
    *
    * @return int|null
    */
    public function getNewCreate()
    {
        return $this->container['newCreate'];
    }

    /**
    * Sets newCreate
    *
    * @param int|null $newCreate 新建态
    *
    * @return $this
    */
    public function setNewCreate($newCreate)
    {
        $this->container['newCreate'] = $newCreate;
        return $this;
    }

    /**
    * Gets designing
    *  设计态
    *
    * @return int|null
    */
    public function getDesigning()
    {
        return $this->container['designing'];
    }

    /**
    * Sets designing
    *
    * @param int|null $designing 设计态
    *
    * @return $this
    */
    public function setDesigning($designing)
    {
        $this->container['designing'] = $designing;
        return $this;
    }

    /**
    * Gets finished
    *  完成态
    *
    * @return int|null
    */
    public function getFinished()
    {
        return $this->container['finished'];
    }

    /**
    * Sets finished
    *
    * @param int|null $finished 完成态
    *
    * @return $this
    */
    public function setFinished($finished)
    {
        $this->container['finished'] = $finished;
        return $this;
    }

    /**
    * Gets testing
    *  测试态
    *
    * @return int|null
    */
    public function getTesting()
    {
        return $this->container['testing'];
    }

    /**
    * Sets testing
    *
    * @param int|null $testing 测试态
    *
    * @return $this
    */
    public function setTesting($testing)
    {
        $this->container['testing'] = $testing;
        return $this;
    }

    /**
    * Gets testCaseNum
    *  需求关联的用例数量
    *
    * @return int|null
    */
    public function getTestCaseNum()
    {
        return $this->container['testCaseNum'];
    }

    /**
    * Sets testCaseNum
    *
    * @param int|null $testCaseNum 需求关联的用例数量
    *
    * @return $this
    */
    public function setTestCaseNum($testCaseNum)
    {
        $this->container['testCaseNum'] = $testCaseNum;
        return $this;
    }

    /**
    * Gets testcases
    *  用例详情
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\TestCaseVo[]|null
    */
    public function getTestcases()
    {
        return $this->container['testcases'];
    }

    /**
    * Sets testcases
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\TestCaseVo[]|null $testcases 用例详情
    *
    * @return $this
    */
    public function setTestcases($testcases)
    {
        $this->container['testcases'] = $testcases;
        return $this;
    }

    /**
    * Gets totalCount
    *  用例总数
    *
    * @return int|null
    */
    public function getTotalCount()
    {
        return $this->container['totalCount'];
    }

    /**
    * Sets totalCount
    *
    * @param int|null $totalCount 用例总数
    *
    * @return $this
    */
    public function setTotalCount($totalCount)
    {
        $this->container['totalCount'] = $totalCount;
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

