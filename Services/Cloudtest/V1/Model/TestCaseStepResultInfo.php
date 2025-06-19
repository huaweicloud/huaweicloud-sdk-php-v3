<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TestCaseStepResultInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TestCaseStepResultInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * result  步骤结果值
    * actualResult  步骤实际结果
    * expectResult  步骤期望结果
    * testStep  用例操作步骤
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'result' => 'string',
            'actualResult' => 'string',
            'expectResult' => 'string',
            'testStep' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * result  步骤结果值
    * actualResult  步骤实际结果
    * expectResult  步骤期望结果
    * testStep  用例操作步骤
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'result' => null,
        'actualResult' => null,
        'expectResult' => null,
        'testStep' => null
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
    * result  步骤结果值
    * actualResult  步骤实际结果
    * expectResult  步骤期望结果
    * testStep  用例操作步骤
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'result' => 'result',
            'actualResult' => 'actual_result',
            'expectResult' => 'expect_result',
            'testStep' => 'test_step'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * result  步骤结果值
    * actualResult  步骤实际结果
    * expectResult  步骤期望结果
    * testStep  用例操作步骤
    *
    * @var string[]
    */
    protected static $setters = [
            'result' => 'setResult',
            'actualResult' => 'setActualResult',
            'expectResult' => 'setExpectResult',
            'testStep' => 'setTestStep'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * result  步骤结果值
    * actualResult  步骤实际结果
    * expectResult  步骤期望结果
    * testStep  用例操作步骤
    *
    * @var string[]
    */
    protected static $getters = [
            'result' => 'getResult',
            'actualResult' => 'getActualResult',
            'expectResult' => 'getExpectResult',
            'testStep' => 'getTestStep'
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
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['actualResult'] = isset($data['actualResult']) ? $data['actualResult'] : null;
        $this->container['expectResult'] = isset($data['expectResult']) ? $data['expectResult'] : null;
        $this->container['testStep'] = isset($data['testStep']) ? $data['testStep'] : null;
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
    * Gets result
    *  步骤结果值
    *
    * @return string|null
    */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
    * Sets result
    *
    * @param string|null $result 步骤结果值
    *
    * @return $this
    */
    public function setResult($result)
    {
        $this->container['result'] = $result;
        return $this;
    }

    /**
    * Gets actualResult
    *  步骤实际结果
    *
    * @return string|null
    */
    public function getActualResult()
    {
        return $this->container['actualResult'];
    }

    /**
    * Sets actualResult
    *
    * @param string|null $actualResult 步骤实际结果
    *
    * @return $this
    */
    public function setActualResult($actualResult)
    {
        $this->container['actualResult'] = $actualResult;
        return $this;
    }

    /**
    * Gets expectResult
    *  步骤期望结果
    *
    * @return string|null
    */
    public function getExpectResult()
    {
        return $this->container['expectResult'];
    }

    /**
    * Sets expectResult
    *
    * @param string|null $expectResult 步骤期望结果
    *
    * @return $this
    */
    public function setExpectResult($expectResult)
    {
        $this->container['expectResult'] = $expectResult;
        return $this;
    }

    /**
    * Gets testStep
    *  用例操作步骤
    *
    * @return string|null
    */
    public function getTestStep()
    {
        return $this->container['testStep'];
    }

    /**
    * Sets testStep
    *
    * @param string|null $testStep 用例操作步骤
    *
    * @return $this
    */
    public function setTestStep($testStep)
    {
        $this->container['testStep'] = $testStep;
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

