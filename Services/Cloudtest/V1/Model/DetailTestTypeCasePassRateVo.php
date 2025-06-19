<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DetailTestTypeCasePassRateVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DetailTestTypeCasePassRateVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * testType  测试类型
    * casePassRate  用例通过率
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'testType' => 'int',
            'casePassRate' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * testType  测试类型
    * casePassRate  用例通过率
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'testType' => 'int32',
        'casePassRate' => null
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
    * testType  测试类型
    * casePassRate  用例通过率
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'testType' => 'test_type',
            'casePassRate' => 'case_pass_rate'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * testType  测试类型
    * casePassRate  用例通过率
    *
    * @var string[]
    */
    protected static $setters = [
            'testType' => 'setTestType',
            'casePassRate' => 'setCasePassRate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * testType  测试类型
    * casePassRate  用例通过率
    *
    * @var string[]
    */
    protected static $getters = [
            'testType' => 'getTestType',
            'casePassRate' => 'getCasePassRate'
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
        $this->container['testType'] = isset($data['testType']) ? $data['testType'] : null;
        $this->container['casePassRate'] = isset($data['casePassRate']) ? $data['casePassRate'] : null;
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
    * Gets testType
    *  测试类型
    *
    * @return int|null
    */
    public function getTestType()
    {
        return $this->container['testType'];
    }

    /**
    * Sets testType
    *
    * @param int|null $testType 测试类型
    *
    * @return $this
    */
    public function setTestType($testType)
    {
        $this->container['testType'] = $testType;
        return $this;
    }

    /**
    * Gets casePassRate
    *  用例通过率
    *
    * @return string|null
    */
    public function getCasePassRate()
    {
        return $this->container['casePassRate'];
    }

    /**
    * Sets casePassRate
    *
    * @param string|null $casePassRate 用例通过率
    *
    * @return $this
    */
    public function setCasePassRate($casePassRate)
    {
        $this->container['casePassRate'] = $casePassRate;
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

