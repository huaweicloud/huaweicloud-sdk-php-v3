<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowActionIInfoRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowActionIInfoRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobId  构建的任务ID； 编辑构建任务时，浏览器URL末尾的32位数字、字母组合的字符串。
    * buildNo  构建任务的构建编号，从1开始，每次构建递增1
    * startOffset  **参数解释**： 起始偏移量，表示从此开始查询。 **约束限制**： 不涉及。 **取值范围**： 只能使用数字，大于等于0。
    * endOffset  **参数解释**： 结束偏移量，表示查询到此结束。 **约束限制**： 不涉及。 **取值范围**： 只能使用数字，大于等于0。
    * sort  **参数解释**： 排序方式。 **约束限制**： 不涉及。 **取值范围**： AES|DESC。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobId' => 'string',
            'buildNo' => 'int',
            'startOffset' => 'int',
            'endOffset' => 'int',
            'sort' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobId  构建的任务ID； 编辑构建任务时，浏览器URL末尾的32位数字、字母组合的字符串。
    * buildNo  构建任务的构建编号，从1开始，每次构建递增1
    * startOffset  **参数解释**： 起始偏移量，表示从此开始查询。 **约束限制**： 不涉及。 **取值范围**： 只能使用数字，大于等于0。
    * endOffset  **参数解释**： 结束偏移量，表示查询到此结束。 **约束限制**： 不涉及。 **取值范围**： 只能使用数字，大于等于0。
    * sort  **参数解释**： 排序方式。 **约束限制**： 不涉及。 **取值范围**： AES|DESC。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobId' => null,
        'buildNo' => 'int32',
        'startOffset' => 'int32',
        'endOffset' => 'int32',
        'sort' => null
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
    * jobId  构建的任务ID； 编辑构建任务时，浏览器URL末尾的32位数字、字母组合的字符串。
    * buildNo  构建任务的构建编号，从1开始，每次构建递增1
    * startOffset  **参数解释**： 起始偏移量，表示从此开始查询。 **约束限制**： 不涉及。 **取值范围**： 只能使用数字，大于等于0。
    * endOffset  **参数解释**： 结束偏移量，表示查询到此结束。 **约束限制**： 不涉及。 **取值范围**： 只能使用数字，大于等于0。
    * sort  **参数解释**： 排序方式。 **约束限制**： 不涉及。 **取值范围**： AES|DESC。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobId' => 'job_id',
            'buildNo' => 'build_no',
            'startOffset' => 'start_offset',
            'endOffset' => 'end_offset',
            'sort' => 'sort'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobId  构建的任务ID； 编辑构建任务时，浏览器URL末尾的32位数字、字母组合的字符串。
    * buildNo  构建任务的构建编号，从1开始，每次构建递增1
    * startOffset  **参数解释**： 起始偏移量，表示从此开始查询。 **约束限制**： 不涉及。 **取值范围**： 只能使用数字，大于等于0。
    * endOffset  **参数解释**： 结束偏移量，表示查询到此结束。 **约束限制**： 不涉及。 **取值范围**： 只能使用数字，大于等于0。
    * sort  **参数解释**： 排序方式。 **约束限制**： 不涉及。 **取值范围**： AES|DESC。
    *
    * @var string[]
    */
    protected static $setters = [
            'jobId' => 'setJobId',
            'buildNo' => 'setBuildNo',
            'startOffset' => 'setStartOffset',
            'endOffset' => 'setEndOffset',
            'sort' => 'setSort'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobId  构建的任务ID； 编辑构建任务时，浏览器URL末尾的32位数字、字母组合的字符串。
    * buildNo  构建任务的构建编号，从1开始，每次构建递增1
    * startOffset  **参数解释**： 起始偏移量，表示从此开始查询。 **约束限制**： 不涉及。 **取值范围**： 只能使用数字，大于等于0。
    * endOffset  **参数解释**： 结束偏移量，表示查询到此结束。 **约束限制**： 不涉及。 **取值范围**： 只能使用数字，大于等于0。
    * sort  **参数解释**： 排序方式。 **约束限制**： 不涉及。 **取值范围**： AES|DESC。
    *
    * @var string[]
    */
    protected static $getters = [
            'jobId' => 'getJobId',
            'buildNo' => 'getBuildNo',
            'startOffset' => 'getStartOffset',
            'endOffset' => 'getEndOffset',
            'sort' => 'getSort'
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
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['buildNo'] = isset($data['buildNo']) ? $data['buildNo'] : null;
        $this->container['startOffset'] = isset($data['startOffset']) ? $data['startOffset'] : null;
        $this->container['endOffset'] = isset($data['endOffset']) ? $data['endOffset'] : null;
        $this->container['sort'] = isset($data['sort']) ? $data['sort'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['jobId'] === null) {
            $invalidProperties[] = "'jobId' can't be null";
        }
            if (!preg_match("/^[0-9a-z]{32}$/", $this->container['jobId'])) {
                $invalidProperties[] = "invalid value for 'jobId', must be conform to the pattern /^[0-9a-z]{32}$/.";
            }
        if ($this->container['buildNo'] === null) {
            $invalidProperties[] = "'buildNo' can't be null";
        }
            if (($this->container['buildNo'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'buildNo', must be smaller than or equal to 2147483647.";
            }
            if (($this->container['buildNo'] < 1)) {
                $invalidProperties[] = "invalid value for 'buildNo', must be bigger than or equal to 1.";
            }
        if ($this->container['startOffset'] === null) {
            $invalidProperties[] = "'startOffset' can't be null";
        }
            if (($this->container['startOffset'] < 0)) {
                $invalidProperties[] = "invalid value for 'startOffset', must be bigger than or equal to 0.";
            }
        if ($this->container['endOffset'] === null) {
            $invalidProperties[] = "'endOffset' can't be null";
        }
            if (($this->container['endOffset'] < 0)) {
                $invalidProperties[] = "invalid value for 'endOffset', must be bigger than or equal to 0.";
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
    * Gets jobId
    *  构建的任务ID； 编辑构建任务时，浏览器URL末尾的32位数字、字母组合的字符串。
    *
    * @return string
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string $jobId 构建的任务ID； 编辑构建任务时，浏览器URL末尾的32位数字、字母组合的字符串。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets buildNo
    *  构建任务的构建编号，从1开始，每次构建递增1
    *
    * @return int
    */
    public function getBuildNo()
    {
        return $this->container['buildNo'];
    }

    /**
    * Sets buildNo
    *
    * @param int $buildNo 构建任务的构建编号，从1开始，每次构建递增1
    *
    * @return $this
    */
    public function setBuildNo($buildNo)
    {
        $this->container['buildNo'] = $buildNo;
        return $this;
    }

    /**
    * Gets startOffset
    *  **参数解释**： 起始偏移量，表示从此开始查询。 **约束限制**： 不涉及。 **取值范围**： 只能使用数字，大于等于0。
    *
    * @return int
    */
    public function getStartOffset()
    {
        return $this->container['startOffset'];
    }

    /**
    * Sets startOffset
    *
    * @param int $startOffset **参数解释**： 起始偏移量，表示从此开始查询。 **约束限制**： 不涉及。 **取值范围**： 只能使用数字，大于等于0。
    *
    * @return $this
    */
    public function setStartOffset($startOffset)
    {
        $this->container['startOffset'] = $startOffset;
        return $this;
    }

    /**
    * Gets endOffset
    *  **参数解释**： 结束偏移量，表示查询到此结束。 **约束限制**： 不涉及。 **取值范围**： 只能使用数字，大于等于0。
    *
    * @return int
    */
    public function getEndOffset()
    {
        return $this->container['endOffset'];
    }

    /**
    * Sets endOffset
    *
    * @param int $endOffset **参数解释**： 结束偏移量，表示查询到此结束。 **约束限制**： 不涉及。 **取值范围**： 只能使用数字，大于等于0。
    *
    * @return $this
    */
    public function setEndOffset($endOffset)
    {
        $this->container['endOffset'] = $endOffset;
        return $this;
    }

    /**
    * Gets sort
    *  **参数解释**： 排序方式。 **约束限制**： 不涉及。 **取值范围**： AES|DESC。
    *
    * @return string|null
    */
    public function getSort()
    {
        return $this->container['sort'];
    }

    /**
    * Sets sort
    *
    * @param string|null $sort **参数解释**： 排序方式。 **约束限制**： 不涉及。 **取值范围**： AES|DESC。
    *
    * @return $this
    */
    public function setSort($sort)
    {
        $this->container['sort'] = $sort;
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

