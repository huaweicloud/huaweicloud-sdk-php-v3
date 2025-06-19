<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CaseAwInstance implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CaseAwInstance';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * setupAwList  测试用例前置步骤
    * teardownAwList  测试步骤
    * testAwList  测试用例后置不走
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'setupAwList' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\AwInstance[]',
            'teardownAwList' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\AwInstance[]',
            'testAwList' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\AwInstance[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * setupAwList  测试用例前置步骤
    * teardownAwList  测试步骤
    * testAwList  测试用例后置不走
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'setupAwList' => null,
        'teardownAwList' => null,
        'testAwList' => null
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
    * setupAwList  测试用例前置步骤
    * teardownAwList  测试步骤
    * testAwList  测试用例后置不走
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'setupAwList' => 'setup_aw_list',
            'teardownAwList' => 'teardown_aw_list',
            'testAwList' => 'test_aw_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * setupAwList  测试用例前置步骤
    * teardownAwList  测试步骤
    * testAwList  测试用例后置不走
    *
    * @var string[]
    */
    protected static $setters = [
            'setupAwList' => 'setSetupAwList',
            'teardownAwList' => 'setTeardownAwList',
            'testAwList' => 'setTestAwList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * setupAwList  测试用例前置步骤
    * teardownAwList  测试步骤
    * testAwList  测试用例后置不走
    *
    * @var string[]
    */
    protected static $getters = [
            'setupAwList' => 'getSetupAwList',
            'teardownAwList' => 'getTeardownAwList',
            'testAwList' => 'getTestAwList'
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
        $this->container['setupAwList'] = isset($data['setupAwList']) ? $data['setupAwList'] : null;
        $this->container['teardownAwList'] = isset($data['teardownAwList']) ? $data['teardownAwList'] : null;
        $this->container['testAwList'] = isset($data['testAwList']) ? $data['testAwList'] : null;
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
    * Gets setupAwList
    *  测试用例前置步骤
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\AwInstance[]|null
    */
    public function getSetupAwList()
    {
        return $this->container['setupAwList'];
    }

    /**
    * Sets setupAwList
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\AwInstance[]|null $setupAwList 测试用例前置步骤
    *
    * @return $this
    */
    public function setSetupAwList($setupAwList)
    {
        $this->container['setupAwList'] = $setupAwList;
        return $this;
    }

    /**
    * Gets teardownAwList
    *  测试步骤
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\AwInstance[]|null
    */
    public function getTeardownAwList()
    {
        return $this->container['teardownAwList'];
    }

    /**
    * Sets teardownAwList
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\AwInstance[]|null $teardownAwList 测试步骤
    *
    * @return $this
    */
    public function setTeardownAwList($teardownAwList)
    {
        $this->container['teardownAwList'] = $teardownAwList;
        return $this;
    }

    /**
    * Gets testAwList
    *  测试用例后置不走
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\AwInstance[]|null
    */
    public function getTestAwList()
    {
        return $this->container['testAwList'];
    }

    /**
    * Sets testAwList
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\AwInstance[]|null $testAwList 测试用例后置不走
    *
    * @return $this
    */
    public function setTestAwList($testAwList)
    {
        $this->container['testAwList'] = $testAwList;
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

