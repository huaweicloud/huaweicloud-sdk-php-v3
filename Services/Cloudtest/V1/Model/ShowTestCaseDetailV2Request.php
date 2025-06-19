<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowTestCaseDetailV2Request implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowTestCaseDetailV2Request';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  项目唯一标识，固定长度32位字符
    * testcaseNumber  用例编号，长度为[3-128]位字符
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'testcaseNumber' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  项目唯一标识，固定长度32位字符
    * testcaseNumber  用例编号，长度为[3-128]位字符
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'testcaseNumber' => null
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
    * projectId  项目唯一标识，固定长度32位字符
    * testcaseNumber  用例编号，长度为[3-128]位字符
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'testcaseNumber' => 'testcase_number'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  项目唯一标识，固定长度32位字符
    * testcaseNumber  用例编号，长度为[3-128]位字符
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'testcaseNumber' => 'setTestcaseNumber'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  项目唯一标识，固定长度32位字符
    * testcaseNumber  用例编号，长度为[3-128]位字符
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'testcaseNumber' => 'getTestcaseNumber'
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['testcaseNumber'] = isset($data['testcaseNumber']) ? $data['testcaseNumber'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
        if ($this->container['testcaseNumber'] === null) {
            $invalidProperties[] = "'testcaseNumber' can't be null";
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
    * Gets projectId
    *  项目唯一标识，固定长度32位字符
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 项目唯一标识，固定长度32位字符
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets testcaseNumber
    *  用例编号，长度为[3-128]位字符
    *
    * @return string
    */
    public function getTestcaseNumber()
    {
        return $this->container['testcaseNumber'];
    }

    /**
    * Sets testcaseNumber
    *
    * @param string $testcaseNumber 用例编号，长度为[3-128]位字符
    *
    * @return $this
    */
    public function setTestcaseNumber($testcaseNumber)
    {
        $this->container['testcaseNumber'] = $testcaseNumber;
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

