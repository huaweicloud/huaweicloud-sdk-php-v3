<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowTestCaseAndDefectInfoRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowTestCaseAndDefectInfoRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * offset  起始偏移量，表示从此偏移量开始查询，offset大于等于0，小于等于100000
    * limit  每页显示的条目数量,最大支持100条
    * branchId  分支ID
    * createTestcaseStartTime  用例创建时间段开始
    * createTestcaseEndTime  用例创建时间段截止
    * associateDefectStartTime  缺陷关联时间段开始
    * associateDefectEndTime  缺陷关联时间段截止
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'offset' => 'int',
            'limit' => 'int',
            'branchId' => 'string',
            'createTestcaseStartTime' => 'string',
            'createTestcaseEndTime' => 'string',
            'associateDefectStartTime' => 'string',
            'associateDefectEndTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * offset  起始偏移量，表示从此偏移量开始查询，offset大于等于0，小于等于100000
    * limit  每页显示的条目数量,最大支持100条
    * branchId  分支ID
    * createTestcaseStartTime  用例创建时间段开始
    * createTestcaseEndTime  用例创建时间段截止
    * associateDefectStartTime  缺陷关联时间段开始
    * associateDefectEndTime  缺陷关联时间段截止
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'offset' => 'int32',
        'limit' => 'int32',
        'branchId' => null,
        'createTestcaseStartTime' => null,
        'createTestcaseEndTime' => null,
        'associateDefectStartTime' => null,
        'associateDefectEndTime' => null
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
    * offset  起始偏移量，表示从此偏移量开始查询，offset大于等于0，小于等于100000
    * limit  每页显示的条目数量,最大支持100条
    * branchId  分支ID
    * createTestcaseStartTime  用例创建时间段开始
    * createTestcaseEndTime  用例创建时间段截止
    * associateDefectStartTime  缺陷关联时间段开始
    * associateDefectEndTime  缺陷关联时间段截止
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'offset' => 'offset',
            'limit' => 'limit',
            'branchId' => 'branch_id',
            'createTestcaseStartTime' => 'create_testcase_start_time',
            'createTestcaseEndTime' => 'create_testcase_end_time',
            'associateDefectStartTime' => 'associate_defect_start_time',
            'associateDefectEndTime' => 'associate_defect_end_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * offset  起始偏移量，表示从此偏移量开始查询，offset大于等于0，小于等于100000
    * limit  每页显示的条目数量,最大支持100条
    * branchId  分支ID
    * createTestcaseStartTime  用例创建时间段开始
    * createTestcaseEndTime  用例创建时间段截止
    * associateDefectStartTime  缺陷关联时间段开始
    * associateDefectEndTime  缺陷关联时间段截止
    *
    * @var string[]
    */
    protected static $setters = [
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'branchId' => 'setBranchId',
            'createTestcaseStartTime' => 'setCreateTestcaseStartTime',
            'createTestcaseEndTime' => 'setCreateTestcaseEndTime',
            'associateDefectStartTime' => 'setAssociateDefectStartTime',
            'associateDefectEndTime' => 'setAssociateDefectEndTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * offset  起始偏移量，表示从此偏移量开始查询，offset大于等于0，小于等于100000
    * limit  每页显示的条目数量,最大支持100条
    * branchId  分支ID
    * createTestcaseStartTime  用例创建时间段开始
    * createTestcaseEndTime  用例创建时间段截止
    * associateDefectStartTime  缺陷关联时间段开始
    * associateDefectEndTime  缺陷关联时间段截止
    *
    * @var string[]
    */
    protected static $getters = [
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'branchId' => 'getBranchId',
            'createTestcaseStartTime' => 'getCreateTestcaseStartTime',
            'createTestcaseEndTime' => 'getCreateTestcaseEndTime',
            'associateDefectStartTime' => 'getAssociateDefectStartTime',
            'associateDefectEndTime' => 'getAssociateDefectEndTime'
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
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['branchId'] = isset($data['branchId']) ? $data['branchId'] : null;
        $this->container['createTestcaseStartTime'] = isset($data['createTestcaseStartTime']) ? $data['createTestcaseStartTime'] : null;
        $this->container['createTestcaseEndTime'] = isset($data['createTestcaseEndTime']) ? $data['createTestcaseEndTime'] : null;
        $this->container['associateDefectStartTime'] = isset($data['associateDefectStartTime']) ? $data['associateDefectStartTime'] : null;
        $this->container['associateDefectEndTime'] = isset($data['associateDefectEndTime']) ? $data['associateDefectEndTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['offset'] === null) {
            $invalidProperties[] = "'offset' can't be null";
        }
            if (($this->container['offset'] > 100000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 100000.";
            }
            if (($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
        if ($this->container['limit'] === null) {
            $invalidProperties[] = "'limit' can't be null";
        }
            if (($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['branchId']) && (mb_strlen($this->container['branchId']) > 34)) {
                $invalidProperties[] = "invalid value for 'branchId', the character length must be smaller than or equal to 34.";
            }
            if (!is_null($this->container['branchId']) && (mb_strlen($this->container['branchId']) < 11)) {
                $invalidProperties[] = "invalid value for 'branchId', the character length must be bigger than or equal to 11.";
            }
            if (!is_null($this->container['branchId']) && !preg_match("/^[A-Za-z0-9]{11,34}$/", $this->container['branchId'])) {
                $invalidProperties[] = "invalid value for 'branchId', must be conform to the pattern /^[A-Za-z0-9]{11,34}$/.";
            }
        if ($this->container['createTestcaseStartTime'] === null) {
            $invalidProperties[] = "'createTestcaseStartTime' can't be null";
        }
            if (!preg_match("/\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}(\\+|\\-)\\d{2}:\\d{2}/", $this->container['createTestcaseStartTime'])) {
                $invalidProperties[] = "invalid value for 'createTestcaseStartTime', must be conform to the pattern /\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}(\\+|\\-)\\d{2}:\\d{2}/.";
            }
        if ($this->container['createTestcaseEndTime'] === null) {
            $invalidProperties[] = "'createTestcaseEndTime' can't be null";
        }
            if (!preg_match("/\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}(\\+|\\-)\\d{2}:\\d{2}/", $this->container['createTestcaseEndTime'])) {
                $invalidProperties[] = "invalid value for 'createTestcaseEndTime', must be conform to the pattern /\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}(\\+|\\-)\\d{2}:\\d{2}/.";
            }
            if (!is_null($this->container['associateDefectStartTime']) && !preg_match("/\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}(\\+|\\-)\\d{2}:\\d{2}/", $this->container['associateDefectStartTime'])) {
                $invalidProperties[] = "invalid value for 'associateDefectStartTime', must be conform to the pattern /\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}(\\+|\\-)\\d{2}:\\d{2}/.";
            }
            if (!is_null($this->container['associateDefectEndTime']) && !preg_match("/\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}(\\+|\\-)\\d{2}:\\d{2}/", $this->container['associateDefectEndTime'])) {
                $invalidProperties[] = "invalid value for 'associateDefectEndTime', must be conform to the pattern /\\d{4}-\\d{2}-\\d{2}T\\d{2}:\\d{2}:\\d{2}(\\+|\\-)\\d{2}:\\d{2}/.";
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
    * Gets offset
    *  起始偏移量，表示从此偏移量开始查询，offset大于等于0，小于等于100000
    *
    * @return int
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int $offset 起始偏移量，表示从此偏移量开始查询，offset大于等于0，小于等于100000
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
    *  每页显示的条目数量,最大支持100条
    *
    * @return int
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int $limit 每页显示的条目数量,最大支持100条
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets branchId
    *  分支ID
    *
    * @return string|null
    */
    public function getBranchId()
    {
        return $this->container['branchId'];
    }

    /**
    * Sets branchId
    *
    * @param string|null $branchId 分支ID
    *
    * @return $this
    */
    public function setBranchId($branchId)
    {
        $this->container['branchId'] = $branchId;
        return $this;
    }

    /**
    * Gets createTestcaseStartTime
    *  用例创建时间段开始
    *
    * @return string
    */
    public function getCreateTestcaseStartTime()
    {
        return $this->container['createTestcaseStartTime'];
    }

    /**
    * Sets createTestcaseStartTime
    *
    * @param string $createTestcaseStartTime 用例创建时间段开始
    *
    * @return $this
    */
    public function setCreateTestcaseStartTime($createTestcaseStartTime)
    {
        $this->container['createTestcaseStartTime'] = $createTestcaseStartTime;
        return $this;
    }

    /**
    * Gets createTestcaseEndTime
    *  用例创建时间段截止
    *
    * @return string
    */
    public function getCreateTestcaseEndTime()
    {
        return $this->container['createTestcaseEndTime'];
    }

    /**
    * Sets createTestcaseEndTime
    *
    * @param string $createTestcaseEndTime 用例创建时间段截止
    *
    * @return $this
    */
    public function setCreateTestcaseEndTime($createTestcaseEndTime)
    {
        $this->container['createTestcaseEndTime'] = $createTestcaseEndTime;
        return $this;
    }

    /**
    * Gets associateDefectStartTime
    *  缺陷关联时间段开始
    *
    * @return string|null
    */
    public function getAssociateDefectStartTime()
    {
        return $this->container['associateDefectStartTime'];
    }

    /**
    * Sets associateDefectStartTime
    *
    * @param string|null $associateDefectStartTime 缺陷关联时间段开始
    *
    * @return $this
    */
    public function setAssociateDefectStartTime($associateDefectStartTime)
    {
        $this->container['associateDefectStartTime'] = $associateDefectStartTime;
        return $this;
    }

    /**
    * Gets associateDefectEndTime
    *  缺陷关联时间段截止
    *
    * @return string|null
    */
    public function getAssociateDefectEndTime()
    {
        return $this->container['associateDefectEndTime'];
    }

    /**
    * Sets associateDefectEndTime
    *
    * @param string|null $associateDefectEndTime 缺陷关联时间段截止
    *
    * @return $this
    */
    public function setAssociateDefectEndTime($associateDefectEndTime)
    {
        $this->container['associateDefectEndTime'] = $associateDefectEndTime;
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

