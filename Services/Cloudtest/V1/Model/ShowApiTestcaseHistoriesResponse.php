<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowApiTestcaseHistoriesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowApiTestcaseHistoriesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * totalCount  测试用例总数
    * projectId  测试服务id
    * testcaseId  测试用例id
    * testcaseName  测试用例名称
    * testcaseResults  测试用例结果集
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'totalCount' => 'int',
            'projectId' => 'string',
            'testcaseId' => 'string',
            'testcaseName' => 'string',
            'testcaseResults' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\TestcaseResult[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * totalCount  测试用例总数
    * projectId  测试服务id
    * testcaseId  测试用例id
    * testcaseName  测试用例名称
    * testcaseResults  测试用例结果集
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'totalCount' => null,
        'projectId' => null,
        'testcaseId' => null,
        'testcaseName' => null,
        'testcaseResults' => null
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
    * totalCount  测试用例总数
    * projectId  测试服务id
    * testcaseId  测试用例id
    * testcaseName  测试用例名称
    * testcaseResults  测试用例结果集
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'totalCount' => 'total_count',
            'projectId' => 'project_id',
            'testcaseId' => 'testcase_id',
            'testcaseName' => 'testcase_name',
            'testcaseResults' => 'testcase_results'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * totalCount  测试用例总数
    * projectId  测试服务id
    * testcaseId  测试用例id
    * testcaseName  测试用例名称
    * testcaseResults  测试用例结果集
    *
    * @var string[]
    */
    protected static $setters = [
            'totalCount' => 'setTotalCount',
            'projectId' => 'setProjectId',
            'testcaseId' => 'setTestcaseId',
            'testcaseName' => 'setTestcaseName',
            'testcaseResults' => 'setTestcaseResults'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * totalCount  测试用例总数
    * projectId  测试服务id
    * testcaseId  测试用例id
    * testcaseName  测试用例名称
    * testcaseResults  测试用例结果集
    *
    * @var string[]
    */
    protected static $getters = [
            'totalCount' => 'getTotalCount',
            'projectId' => 'getProjectId',
            'testcaseId' => 'getTestcaseId',
            'testcaseName' => 'getTestcaseName',
            'testcaseResults' => 'getTestcaseResults'
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
        $this->container['totalCount'] = isset($data['totalCount']) ? $data['totalCount'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['testcaseId'] = isset($data['testcaseId']) ? $data['testcaseId'] : null;
        $this->container['testcaseName'] = isset($data['testcaseName']) ? $data['testcaseName'] : null;
        $this->container['testcaseResults'] = isset($data['testcaseResults']) ? $data['testcaseResults'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['totalCount']) && ($this->container['totalCount'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'totalCount', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['totalCount']) && ($this->container['totalCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'totalCount', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['projectId']) && !preg_match("/^[A-Za-z0-9]{1,32}$/", $this->container['projectId'])) {
                $invalidProperties[] = "invalid value for 'projectId', must be conform to the pattern /^[A-Za-z0-9]{1,32}$/.";
            }
            if (!is_null($this->container['testcaseId']) && !preg_match("/^[A-Za-z0-9]{1,32}$/", $this->container['testcaseId'])) {
                $invalidProperties[] = "invalid value for 'testcaseId', must be conform to the pattern /^[A-Za-z0-9]{1,32}$/.";
            }
            if (!is_null($this->container['testcaseName']) && (mb_strlen($this->container['testcaseName']) > 128)) {
                $invalidProperties[] = "invalid value for 'testcaseName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['testcaseName']) && (mb_strlen($this->container['testcaseName']) < 3)) {
                $invalidProperties[] = "invalid value for 'testcaseName', the character length must be bigger than or equal to 3.";
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
    * Gets totalCount
    *  测试用例总数
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
    * @param int|null $totalCount 测试用例总数
    *
    * @return $this
    */
    public function setTotalCount($totalCount)
    {
        $this->container['totalCount'] = $totalCount;
        return $this;
    }

    /**
    * Gets projectId
    *  测试服务id
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 测试服务id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets testcaseId
    *  测试用例id
    *
    * @return string|null
    */
    public function getTestcaseId()
    {
        return $this->container['testcaseId'];
    }

    /**
    * Sets testcaseId
    *
    * @param string|null $testcaseId 测试用例id
    *
    * @return $this
    */
    public function setTestcaseId($testcaseId)
    {
        $this->container['testcaseId'] = $testcaseId;
        return $this;
    }

    /**
    * Gets testcaseName
    *  测试用例名称
    *
    * @return string|null
    */
    public function getTestcaseName()
    {
        return $this->container['testcaseName'];
    }

    /**
    * Sets testcaseName
    *
    * @param string|null $testcaseName 测试用例名称
    *
    * @return $this
    */
    public function setTestcaseName($testcaseName)
    {
        $this->container['testcaseName'] = $testcaseName;
        return $this;
    }

    /**
    * Gets testcaseResults
    *  测试用例结果集
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\TestcaseResult[]|null
    */
    public function getTestcaseResults()
    {
        return $this->container['testcaseResults'];
    }

    /**
    * Sets testcaseResults
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\TestcaseResult[]|null $testcaseResults 测试用例结果集
    *
    * @return $this
    */
    public function setTestcaseResults($testcaseResults)
    {
        $this->container['testcaseResults'] = $testcaseResults;
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

