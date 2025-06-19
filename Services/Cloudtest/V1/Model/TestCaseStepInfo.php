<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TestCaseStepInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TestCaseStepInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * testStep  测试步骤
    * expectResult  预期结果
    * stepActual  步骤的实际结果
    * stepResult  步骤结果
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'testStep' => 'string',
            'expectResult' => 'string',
            'stepActual' => 'string',
            'stepResult' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * testStep  测试步骤
    * expectResult  预期结果
    * stepActual  步骤的实际结果
    * stepResult  步骤结果
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'testStep' => null,
        'expectResult' => null,
        'stepActual' => null,
        'stepResult' => null
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
    * testStep  测试步骤
    * expectResult  预期结果
    * stepActual  步骤的实际结果
    * stepResult  步骤结果
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'testStep' => 'test_step',
            'expectResult' => 'expect_result',
            'stepActual' => 'step_actual',
            'stepResult' => 'step_result'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * testStep  测试步骤
    * expectResult  预期结果
    * stepActual  步骤的实际结果
    * stepResult  步骤结果
    *
    * @var string[]
    */
    protected static $setters = [
            'testStep' => 'setTestStep',
            'expectResult' => 'setExpectResult',
            'stepActual' => 'setStepActual',
            'stepResult' => 'setStepResult'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * testStep  测试步骤
    * expectResult  预期结果
    * stepActual  步骤的实际结果
    * stepResult  步骤结果
    *
    * @var string[]
    */
    protected static $getters = [
            'testStep' => 'getTestStep',
            'expectResult' => 'getExpectResult',
            'stepActual' => 'getStepActual',
            'stepResult' => 'getStepResult'
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
        $this->container['testStep'] = isset($data['testStep']) ? $data['testStep'] : null;
        $this->container['expectResult'] = isset($data['expectResult']) ? $data['expectResult'] : null;
        $this->container['stepActual'] = isset($data['stepActual']) ? $data['stepActual'] : null;
        $this->container['stepResult'] = isset($data['stepResult']) ? $data['stepResult'] : null;
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
    * Gets testStep
    *  测试步骤
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
    * @param string|null $testStep 测试步骤
    *
    * @return $this
    */
    public function setTestStep($testStep)
    {
        $this->container['testStep'] = $testStep;
        return $this;
    }

    /**
    * Gets expectResult
    *  预期结果
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
    * @param string|null $expectResult 预期结果
    *
    * @return $this
    */
    public function setExpectResult($expectResult)
    {
        $this->container['expectResult'] = $expectResult;
        return $this;
    }

    /**
    * Gets stepActual
    *  步骤的实际结果
    *
    * @return string|null
    */
    public function getStepActual()
    {
        return $this->container['stepActual'];
    }

    /**
    * Sets stepActual
    *
    * @param string|null $stepActual 步骤的实际结果
    *
    * @return $this
    */
    public function setStepActual($stepActual)
    {
        $this->container['stepActual'] = $stepActual;
        return $this;
    }

    /**
    * Gets stepResult
    *  步骤结果
    *
    * @return string|null
    */
    public function getStepResult()
    {
        return $this->container['stepResult'];
    }

    /**
    * Sets stepResult
    *
    * @param string|null $stepResult 步骤结果
    *
    * @return $this
    */
    public function setStepResult($stepResult)
    {
        $this->container['stepResult'] = $stepResult;
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

