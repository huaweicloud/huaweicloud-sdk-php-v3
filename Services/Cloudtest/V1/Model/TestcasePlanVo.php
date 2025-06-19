<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TestcasePlanVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TestcasePlanVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * testcaseUri  测试用例URI
    * testcaseNumber  测试用例用例编号
    * plans  测试计划信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'testcaseUri' => 'string',
            'testcaseNumber' => 'string',
            'plans' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\TestPlanVo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * testcaseUri  测试用例URI
    * testcaseNumber  测试用例用例编号
    * plans  测试计划信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'testcaseUri' => null,
        'testcaseNumber' => null,
        'plans' => null
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
    * testcaseUri  测试用例URI
    * testcaseNumber  测试用例用例编号
    * plans  测试计划信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'testcaseUri' => 'testcase_uri',
            'testcaseNumber' => 'testcase_number',
            'plans' => 'plans'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * testcaseUri  测试用例URI
    * testcaseNumber  测试用例用例编号
    * plans  测试计划信息
    *
    * @var string[]
    */
    protected static $setters = [
            'testcaseUri' => 'setTestcaseUri',
            'testcaseNumber' => 'setTestcaseNumber',
            'plans' => 'setPlans'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * testcaseUri  测试用例URI
    * testcaseNumber  测试用例用例编号
    * plans  测试计划信息
    *
    * @var string[]
    */
    protected static $getters = [
            'testcaseUri' => 'getTestcaseUri',
            'testcaseNumber' => 'getTestcaseNumber',
            'plans' => 'getPlans'
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
        $this->container['testcaseUri'] = isset($data['testcaseUri']) ? $data['testcaseUri'] : null;
        $this->container['testcaseNumber'] = isset($data['testcaseNumber']) ? $data['testcaseNumber'] : null;
        $this->container['plans'] = isset($data['plans']) ? $data['plans'] : null;
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
    * Gets testcaseUri
    *  测试用例URI
    *
    * @return string|null
    */
    public function getTestcaseUri()
    {
        return $this->container['testcaseUri'];
    }

    /**
    * Sets testcaseUri
    *
    * @param string|null $testcaseUri 测试用例URI
    *
    * @return $this
    */
    public function setTestcaseUri($testcaseUri)
    {
        $this->container['testcaseUri'] = $testcaseUri;
        return $this;
    }

    /**
    * Gets testcaseNumber
    *  测试用例用例编号
    *
    * @return string|null
    */
    public function getTestcaseNumber()
    {
        return $this->container['testcaseNumber'];
    }

    /**
    * Sets testcaseNumber
    *
    * @param string|null $testcaseNumber 测试用例用例编号
    *
    * @return $this
    */
    public function setTestcaseNumber($testcaseNumber)
    {
        $this->container['testcaseNumber'] = $testcaseNumber;
        return $this;
    }

    /**
    * Gets plans
    *  测试计划信息
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\TestPlanVo[]|null
    */
    public function getPlans()
    {
        return $this->container['plans'];
    }

    /**
    * Sets plans
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\TestPlanVo[]|null $plans 测试计划信息
    *
    * @return $this
    */
    public function setPlans($plans)
    {
        $this->container['plans'] = $plans;
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

