<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowApiTestcaseHistoriesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowApiTestcaseHistoriesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * testcaseId  测试用例id
    * offset  起始偏移量，表示从此偏移量开始查询， offset大于等于1
    * limit  每页显示的条目数量,最大支持200条
    * planId  测试计划id
    * projectId  项目ID，固定长度32位字符（字母和数字）。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'testcaseId' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'planId' => 'string',
            'projectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * testcaseId  测试用例id
    * offset  起始偏移量，表示从此偏移量开始查询， offset大于等于1
    * limit  每页显示的条目数量,最大支持200条
    * planId  测试计划id
    * projectId  项目ID，固定长度32位字符（字母和数字）。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'testcaseId' => null,
        'offset' => null,
        'limit' => null,
        'planId' => null,
        'projectId' => null
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
    * testcaseId  测试用例id
    * offset  起始偏移量，表示从此偏移量开始查询， offset大于等于1
    * limit  每页显示的条目数量,最大支持200条
    * planId  测试计划id
    * projectId  项目ID，固定长度32位字符（字母和数字）。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'testcaseId' => 'testcase_id',
            'offset' => 'offset',
            'limit' => 'limit',
            'planId' => 'plan_id',
            'projectId' => 'project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * testcaseId  测试用例id
    * offset  起始偏移量，表示从此偏移量开始查询， offset大于等于1
    * limit  每页显示的条目数量,最大支持200条
    * planId  测试计划id
    * projectId  项目ID，固定长度32位字符（字母和数字）。
    *
    * @var string[]
    */
    protected static $setters = [
            'testcaseId' => 'setTestcaseId',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'planId' => 'setPlanId',
            'projectId' => 'setProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * testcaseId  测试用例id
    * offset  起始偏移量，表示从此偏移量开始查询， offset大于等于1
    * limit  每页显示的条目数量,最大支持200条
    * planId  测试计划id
    * projectId  项目ID，固定长度32位字符（字母和数字）。
    *
    * @var string[]
    */
    protected static $getters = [
            'testcaseId' => 'getTestcaseId',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'planId' => 'getPlanId',
            'projectId' => 'getProjectId'
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
        $this->container['testcaseId'] = isset($data['testcaseId']) ? $data['testcaseId'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['planId'] = isset($data['planId']) ? $data['planId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['testcaseId'] === null) {
            $invalidProperties[] = "'testcaseId' can't be null";
        }
            if (!preg_match("/^[A-Za-z0-9]{1,32}$/", $this->container['testcaseId'])) {
                $invalidProperties[] = "invalid value for 'testcaseId', must be conform to the pattern /^[A-Za-z0-9]{1,32}$/.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 1)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 200)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['planId']) && !preg_match("/^[A-Za-z0-9]{1,32}$/", $this->container['planId'])) {
                $invalidProperties[] = "invalid value for 'planId', must be conform to the pattern /^[A-Za-z0-9]{1,32}$/.";
            }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if ((mb_strlen($this->container['projectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
            if (!preg_match("/^[A-Za-z0-9]{32}$/", $this->container['projectId'])) {
                $invalidProperties[] = "invalid value for 'projectId', must be conform to the pattern /^[A-Za-z0-9]{32}$/.";
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
    * Gets testcaseId
    *  测试用例id
    *
    * @return string
    */
    public function getTestcaseId()
    {
        return $this->container['testcaseId'];
    }

    /**
    * Sets testcaseId
    *
    * @param string $testcaseId 测试用例id
    *
    * @return $this
    */
    public function setTestcaseId($testcaseId)
    {
        $this->container['testcaseId'] = $testcaseId;
        return $this;
    }

    /**
    * Gets offset
    *  起始偏移量，表示从此偏移量开始查询， offset大于等于1
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 起始偏移量，表示从此偏移量开始查询， offset大于等于1
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  每页显示的条目数量,最大支持200条
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 每页显示的条目数量,最大支持200条
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets planId
    *  测试计划id
    *
    * @return string|null
    */
    public function getPlanId()
    {
        return $this->container['planId'];
    }

    /**
    * Sets planId
    *
    * @param string|null $planId 测试计划id
    *
    * @return $this
    */
    public function setPlanId($planId)
    {
        $this->container['planId'] = $planId;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID，固定长度32位字符（字母和数字）。
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
    * @param string $projectId 项目ID，固定长度32位字符（字母和数字）。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
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

