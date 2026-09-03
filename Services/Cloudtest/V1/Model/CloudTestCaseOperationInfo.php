<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CloudTestCaseOperationInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CloudTestCaseOperationInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * setUpCasesInfo  前置用例信息
    * tearDownCasesInfo  后置用例信息
    * testCasesInfo  用例信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'setUpCasesInfo' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\CloudTestCaseInfo[]',
            'tearDownCasesInfo' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\CloudTestCaseInfo[]',
            'testCasesInfo' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\CloudTestCaseInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * setUpCasesInfo  前置用例信息
    * tearDownCasesInfo  后置用例信息
    * testCasesInfo  用例信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'setUpCasesInfo' => null,
        'tearDownCasesInfo' => null,
        'testCasesInfo' => null
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
    * setUpCasesInfo  前置用例信息
    * tearDownCasesInfo  后置用例信息
    * testCasesInfo  用例信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'setUpCasesInfo' => 'setUpCasesInfo',
            'tearDownCasesInfo' => 'tearDownCasesInfo',
            'testCasesInfo' => 'testCasesInfo'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * setUpCasesInfo  前置用例信息
    * tearDownCasesInfo  后置用例信息
    * testCasesInfo  用例信息
    *
    * @var string[]
    */
    protected static $setters = [
            'setUpCasesInfo' => 'setSetUpCasesInfo',
            'tearDownCasesInfo' => 'setTearDownCasesInfo',
            'testCasesInfo' => 'setTestCasesInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * setUpCasesInfo  前置用例信息
    * tearDownCasesInfo  后置用例信息
    * testCasesInfo  用例信息
    *
    * @var string[]
    */
    protected static $getters = [
            'setUpCasesInfo' => 'getSetUpCasesInfo',
            'tearDownCasesInfo' => 'getTearDownCasesInfo',
            'testCasesInfo' => 'getTestCasesInfo'
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
        $this->container['setUpCasesInfo'] = isset($data['setUpCasesInfo']) ? $data['setUpCasesInfo'] : null;
        $this->container['tearDownCasesInfo'] = isset($data['tearDownCasesInfo']) ? $data['tearDownCasesInfo'] : null;
        $this->container['testCasesInfo'] = isset($data['testCasesInfo']) ? $data['testCasesInfo'] : null;
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
    * Gets setUpCasesInfo
    *  前置用例信息
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\CloudTestCaseInfo[]|null
    */
    public function getSetUpCasesInfo()
    {
        return $this->container['setUpCasesInfo'];
    }

    /**
    * Sets setUpCasesInfo
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\CloudTestCaseInfo[]|null $setUpCasesInfo 前置用例信息
    *
    * @return $this
    */
    public function setSetUpCasesInfo($setUpCasesInfo)
    {
        $this->container['setUpCasesInfo'] = $setUpCasesInfo;
        return $this;
    }

    /**
    * Gets tearDownCasesInfo
    *  后置用例信息
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\CloudTestCaseInfo[]|null
    */
    public function getTearDownCasesInfo()
    {
        return $this->container['tearDownCasesInfo'];
    }

    /**
    * Sets tearDownCasesInfo
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\CloudTestCaseInfo[]|null $tearDownCasesInfo 后置用例信息
    *
    * @return $this
    */
    public function setTearDownCasesInfo($tearDownCasesInfo)
    {
        $this->container['tearDownCasesInfo'] = $tearDownCasesInfo;
        return $this;
    }

    /**
    * Gets testCasesInfo
    *  用例信息
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\CloudTestCaseInfo[]|null
    */
    public function getTestCasesInfo()
    {
        return $this->container['testCasesInfo'];
    }

    /**
    * Sets testCasesInfo
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\CloudTestCaseInfo[]|null $testCasesInfo 用例信息
    *
    * @return $this
    */
    public function setTestCasesInfo($testCasesInfo)
    {
        $this->container['testCasesInfo'] = $testCasesInfo;
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

