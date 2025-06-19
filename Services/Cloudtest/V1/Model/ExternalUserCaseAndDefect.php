<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExternalUserCaseAndDefect implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExternalUserCaseAndDefect';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * creator  creator
    * defectCount  缺陷数
    * defectIds  缺陷ID列表
    * testcaseId  用例ID
    * branchId  分支ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'creator' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndIdVo',
            'defectCount' => 'int',
            'defectIds' => 'string[]',
            'testcaseId' => 'string',
            'branchId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * creator  creator
    * defectCount  缺陷数
    * defectIds  缺陷ID列表
    * testcaseId  用例ID
    * branchId  分支ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'creator' => null,
        'defectCount' => 'int32',
        'defectIds' => null,
        'testcaseId' => null,
        'branchId' => null
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
    * creator  creator
    * defectCount  缺陷数
    * defectIds  缺陷ID列表
    * testcaseId  用例ID
    * branchId  分支ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'creator' => 'creator',
            'defectCount' => 'defect_count',
            'defectIds' => 'defect_ids',
            'testcaseId' => 'testcase_id',
            'branchId' => 'branch_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * creator  creator
    * defectCount  缺陷数
    * defectIds  缺陷ID列表
    * testcaseId  用例ID
    * branchId  分支ID
    *
    * @var string[]
    */
    protected static $setters = [
            'creator' => 'setCreator',
            'defectCount' => 'setDefectCount',
            'defectIds' => 'setDefectIds',
            'testcaseId' => 'setTestcaseId',
            'branchId' => 'setBranchId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * creator  creator
    * defectCount  缺陷数
    * defectIds  缺陷ID列表
    * testcaseId  用例ID
    * branchId  分支ID
    *
    * @var string[]
    */
    protected static $getters = [
            'creator' => 'getCreator',
            'defectCount' => 'getDefectCount',
            'defectIds' => 'getDefectIds',
            'testcaseId' => 'getTestcaseId',
            'branchId' => 'getBranchId'
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
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['defectCount'] = isset($data['defectCount']) ? $data['defectCount'] : null;
        $this->container['defectIds'] = isset($data['defectIds']) ? $data['defectIds'] : null;
        $this->container['testcaseId'] = isset($data['testcaseId']) ? $data['testcaseId'] : null;
        $this->container['branchId'] = isset($data['branchId']) ? $data['branchId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['testcaseId']) && (mb_strlen($this->container['testcaseId']) > 34)) {
                $invalidProperties[] = "invalid value for 'testcaseId', the character length must be smaller than or equal to 34.";
            }
            if (!is_null($this->container['testcaseId']) && (mb_strlen($this->container['testcaseId']) < 11)) {
                $invalidProperties[] = "invalid value for 'testcaseId', the character length must be bigger than or equal to 11.";
            }
            if (!is_null($this->container['testcaseId']) && !preg_match("/^[A-Za-z0-9]{11,34}$/", $this->container['testcaseId'])) {
                $invalidProperties[] = "invalid value for 'testcaseId', must be conform to the pattern /^[A-Za-z0-9]{11,34}$/.";
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
    * Gets creator
    *  creator
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndIdVo|null
    */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
    * Sets creator
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndIdVo|null $creator creator
    *
    * @return $this
    */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;
        return $this;
    }

    /**
    * Gets defectCount
    *  缺陷数
    *
    * @return int|null
    */
    public function getDefectCount()
    {
        return $this->container['defectCount'];
    }

    /**
    * Sets defectCount
    *
    * @param int|null $defectCount 缺陷数
    *
    * @return $this
    */
    public function setDefectCount($defectCount)
    {
        $this->container['defectCount'] = $defectCount;
        return $this;
    }

    /**
    * Gets defectIds
    *  缺陷ID列表
    *
    * @return string[]|null
    */
    public function getDefectIds()
    {
        return $this->container['defectIds'];
    }

    /**
    * Sets defectIds
    *
    * @param string[]|null $defectIds 缺陷ID列表
    *
    * @return $this
    */
    public function setDefectIds($defectIds)
    {
        $this->container['defectIds'] = $defectIds;
        return $this;
    }

    /**
    * Gets testcaseId
    *  用例ID
    *
    * @return string|null
    */
    public function getTestcaseId()
    {
        return $this->container['testcaseId'];
    }

    /**
    * Sets testcaseId
    *
    * @param string|null $testcaseId 用例ID
    *
    * @return $this
    */
    public function setTestcaseId($testcaseId)
    {
        $this->container['testcaseId'] = $testcaseId;
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

