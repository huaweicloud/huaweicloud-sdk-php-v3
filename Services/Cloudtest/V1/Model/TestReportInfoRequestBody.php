<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TestReportInfoRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TestReportInfoRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * planId  测试计划id,(plan_id和branch_id不能同时为空，优先取plan_id)
    * branchId  分支id,(plan_id和branch_id不能同时为空，优先取plan_id)
    * moduleId  模块ID(查询未设置传入-2)
    * fixedVersionId  筛选迭代ID(查询未设置传入-2)
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'planId' => 'string',
            'branchId' => 'string',
            'moduleId' => 'string',
            'fixedVersionId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * planId  测试计划id,(plan_id和branch_id不能同时为空，优先取plan_id)
    * branchId  分支id,(plan_id和branch_id不能同时为空，优先取plan_id)
    * moduleId  模块ID(查询未设置传入-2)
    * fixedVersionId  筛选迭代ID(查询未设置传入-2)
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'planId' => null,
        'branchId' => null,
        'moduleId' => null,
        'fixedVersionId' => null
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
    * planId  测试计划id,(plan_id和branch_id不能同时为空，优先取plan_id)
    * branchId  分支id,(plan_id和branch_id不能同时为空，优先取plan_id)
    * moduleId  模块ID(查询未设置传入-2)
    * fixedVersionId  筛选迭代ID(查询未设置传入-2)
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'planId' => 'plan_id',
            'branchId' => 'branch_id',
            'moduleId' => 'module_id',
            'fixedVersionId' => 'fixed_version_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * planId  测试计划id,(plan_id和branch_id不能同时为空，优先取plan_id)
    * branchId  分支id,(plan_id和branch_id不能同时为空，优先取plan_id)
    * moduleId  模块ID(查询未设置传入-2)
    * fixedVersionId  筛选迭代ID(查询未设置传入-2)
    *
    * @var string[]
    */
    protected static $setters = [
            'planId' => 'setPlanId',
            'branchId' => 'setBranchId',
            'moduleId' => 'setModuleId',
            'fixedVersionId' => 'setFixedVersionId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * planId  测试计划id,(plan_id和branch_id不能同时为空，优先取plan_id)
    * branchId  分支id,(plan_id和branch_id不能同时为空，优先取plan_id)
    * moduleId  模块ID(查询未设置传入-2)
    * fixedVersionId  筛选迭代ID(查询未设置传入-2)
    *
    * @var string[]
    */
    protected static $getters = [
            'planId' => 'getPlanId',
            'branchId' => 'getBranchId',
            'moduleId' => 'getModuleId',
            'fixedVersionId' => 'getFixedVersionId'
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
        $this->container['planId'] = isset($data['planId']) ? $data['planId'] : null;
        $this->container['branchId'] = isset($data['branchId']) ? $data['branchId'] : null;
        $this->container['moduleId'] = isset($data['moduleId']) ? $data['moduleId'] : null;
        $this->container['fixedVersionId'] = isset($data['fixedVersionId']) ? $data['fixedVersionId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['planId']) && (mb_strlen($this->container['planId']) > 34)) {
                $invalidProperties[] = "invalid value for 'planId', the character length must be smaller than or equal to 34.";
            }
            if (!is_null($this->container['planId']) && (mb_strlen($this->container['planId']) < 11)) {
                $invalidProperties[] = "invalid value for 'planId', the character length must be bigger than or equal to 11.";
            }
            if (!is_null($this->container['planId']) && !preg_match("/^[A-Za-z0-9]{11,34}$/", $this->container['planId'])) {
                $invalidProperties[] = "invalid value for 'planId', must be conform to the pattern /^[A-Za-z0-9]{11,34}$/.";
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
            if (!is_null($this->container['moduleId']) && (mb_strlen($this->container['moduleId']) > 1024)) {
                $invalidProperties[] = "invalid value for 'moduleId', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['moduleId']) && (mb_strlen($this->container['moduleId']) < 0)) {
                $invalidProperties[] = "invalid value for 'moduleId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['moduleId']) && !preg_match("/^[A-Za-z\\-0-9,]{0,1024}$/", $this->container['moduleId'])) {
                $invalidProperties[] = "invalid value for 'moduleId', must be conform to the pattern /^[A-Za-z\\-0-9,]{0,1024}$/.";
            }
            if (!is_null($this->container['fixedVersionId']) && (mb_strlen($this->container['fixedVersionId']) > 1024)) {
                $invalidProperties[] = "invalid value for 'fixedVersionId', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['fixedVersionId']) && (mb_strlen($this->container['fixedVersionId']) < 0)) {
                $invalidProperties[] = "invalid value for 'fixedVersionId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['fixedVersionId']) && !preg_match("/^[A-Za-z\\-0-9,]{0,1024}$/", $this->container['fixedVersionId'])) {
                $invalidProperties[] = "invalid value for 'fixedVersionId', must be conform to the pattern /^[A-Za-z\\-0-9,]{0,1024}$/.";
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
    * Gets planId
    *  测试计划id,(plan_id和branch_id不能同时为空，优先取plan_id)
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
    * @param string|null $planId 测试计划id,(plan_id和branch_id不能同时为空，优先取plan_id)
    *
    * @return $this
    */
    public function setPlanId($planId)
    {
        $this->container['planId'] = $planId;
        return $this;
    }

    /**
    * Gets branchId
    *  分支id,(plan_id和branch_id不能同时为空，优先取plan_id)
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
    * @param string|null $branchId 分支id,(plan_id和branch_id不能同时为空，优先取plan_id)
    *
    * @return $this
    */
    public function setBranchId($branchId)
    {
        $this->container['branchId'] = $branchId;
        return $this;
    }

    /**
    * Gets moduleId
    *  模块ID(查询未设置传入-2)
    *
    * @return string|null
    */
    public function getModuleId()
    {
        return $this->container['moduleId'];
    }

    /**
    * Sets moduleId
    *
    * @param string|null $moduleId 模块ID(查询未设置传入-2)
    *
    * @return $this
    */
    public function setModuleId($moduleId)
    {
        $this->container['moduleId'] = $moduleId;
        return $this;
    }

    /**
    * Gets fixedVersionId
    *  筛选迭代ID(查询未设置传入-2)
    *
    * @return string|null
    */
    public function getFixedVersionId()
    {
        return $this->container['fixedVersionId'];
    }

    /**
    * Sets fixedVersionId
    *
    * @param string|null $fixedVersionId 筛选迭代ID(查询未设置传入-2)
    *
    * @return $this
    */
    public function setFixedVersionId($fixedVersionId)
    {
        $this->container['fixedVersionId'] = $fixedVersionId;
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

