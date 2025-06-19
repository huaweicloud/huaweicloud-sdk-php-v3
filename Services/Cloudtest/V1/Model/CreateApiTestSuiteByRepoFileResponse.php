<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateApiTestSuiteByRepoFileResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateApiTestSuiteByRepoFileResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * testsuiteId  生成的测试套的id
    * testcaseIds  生成的测试用例id列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'testsuiteId' => 'string',
            'testcaseIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * testsuiteId  生成的测试套的id
    * testcaseIds  生成的测试用例id列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'testsuiteId' => null,
        'testcaseIds' => null
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
    * testsuiteId  生成的测试套的id
    * testcaseIds  生成的测试用例id列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'testsuiteId' => 'testsuite_id',
            'testcaseIds' => 'testcase_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * testsuiteId  生成的测试套的id
    * testcaseIds  生成的测试用例id列表
    *
    * @var string[]
    */
    protected static $setters = [
            'testsuiteId' => 'setTestsuiteId',
            'testcaseIds' => 'setTestcaseIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * testsuiteId  生成的测试套的id
    * testcaseIds  生成的测试用例id列表
    *
    * @var string[]
    */
    protected static $getters = [
            'testsuiteId' => 'getTestsuiteId',
            'testcaseIds' => 'getTestcaseIds'
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
        $this->container['testsuiteId'] = isset($data['testsuiteId']) ? $data['testsuiteId'] : null;
        $this->container['testcaseIds'] = isset($data['testcaseIds']) ? $data['testcaseIds'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['testsuiteId']) && (mb_strlen($this->container['testsuiteId']) > 32)) {
                $invalidProperties[] = "invalid value for 'testsuiteId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['testsuiteId']) && (mb_strlen($this->container['testsuiteId']) < 32)) {
                $invalidProperties[] = "invalid value for 'testsuiteId', the character length must be bigger than or equal to 32.";
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
    * Gets testsuiteId
    *  生成的测试套的id
    *
    * @return string|null
    */
    public function getTestsuiteId()
    {
        return $this->container['testsuiteId'];
    }

    /**
    * Sets testsuiteId
    *
    * @param string|null $testsuiteId 生成的测试套的id
    *
    * @return $this
    */
    public function setTestsuiteId($testsuiteId)
    {
        $this->container['testsuiteId'] = $testsuiteId;
        return $this;
    }

    /**
    * Gets testcaseIds
    *  生成的测试用例id列表
    *
    * @return string[]|null
    */
    public function getTestcaseIds()
    {
        return $this->container['testcaseIds'];
    }

    /**
    * Sets testcaseIds
    *
    * @param string[]|null $testcaseIds 生成的测试用例id列表
    *
    * @return $this
    */
    public function setTestcaseIds($testcaseIds)
    {
        $this->container['testcaseIds'] = $testcaseIds;
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

