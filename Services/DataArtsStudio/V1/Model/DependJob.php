<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DependJob implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DependJob';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * jobs  依赖的作业名称列表，必须依赖已存在的作业。
    * dependPeriod  依赖周期： - SAME_PERIOD：依赖被依赖作业的同周期任务的执行结果。 - PRE_PERIOD：依赖被依赖作业的前一周期任务的执行结果。
    * dependFailPolicy  依赖作业任务执行失败处理策略: - FAIL：停止作业，设置作业为失败状态。 - IGNORE：继续执行作业。 - SUSPEND： 挂起作业。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'jobs' => 'string[]',
            'dependPeriod' => 'string',
            'dependFailPolicy' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * jobs  依赖的作业名称列表，必须依赖已存在的作业。
    * dependPeriod  依赖周期： - SAME_PERIOD：依赖被依赖作业的同周期任务的执行结果。 - PRE_PERIOD：依赖被依赖作业的前一周期任务的执行结果。
    * dependFailPolicy  依赖作业任务执行失败处理策略: - FAIL：停止作业，设置作业为失败状态。 - IGNORE：继续执行作业。 - SUSPEND： 挂起作业。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'jobs' => null,
        'dependPeriod' => null,
        'dependFailPolicy' => null
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
    * jobs  依赖的作业名称列表，必须依赖已存在的作业。
    * dependPeriod  依赖周期： - SAME_PERIOD：依赖被依赖作业的同周期任务的执行结果。 - PRE_PERIOD：依赖被依赖作业的前一周期任务的执行结果。
    * dependFailPolicy  依赖作业任务执行失败处理策略: - FAIL：停止作业，设置作业为失败状态。 - IGNORE：继续执行作业。 - SUSPEND： 挂起作业。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'jobs' => 'jobs',
            'dependPeriod' => 'depend_period',
            'dependFailPolicy' => 'depend_fail_policy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * jobs  依赖的作业名称列表，必须依赖已存在的作业。
    * dependPeriod  依赖周期： - SAME_PERIOD：依赖被依赖作业的同周期任务的执行结果。 - PRE_PERIOD：依赖被依赖作业的前一周期任务的执行结果。
    * dependFailPolicy  依赖作业任务执行失败处理策略: - FAIL：停止作业，设置作业为失败状态。 - IGNORE：继续执行作业。 - SUSPEND： 挂起作业。
    *
    * @var string[]
    */
    protected static $setters = [
            'jobs' => 'setJobs',
            'dependPeriod' => 'setDependPeriod',
            'dependFailPolicy' => 'setDependFailPolicy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * jobs  依赖的作业名称列表，必须依赖已存在的作业。
    * dependPeriod  依赖周期： - SAME_PERIOD：依赖被依赖作业的同周期任务的执行结果。 - PRE_PERIOD：依赖被依赖作业的前一周期任务的执行结果。
    * dependFailPolicy  依赖作业任务执行失败处理策略: - FAIL：停止作业，设置作业为失败状态。 - IGNORE：继续执行作业。 - SUSPEND： 挂起作业。
    *
    * @var string[]
    */
    protected static $getters = [
            'jobs' => 'getJobs',
            'dependPeriod' => 'getDependPeriod',
            'dependFailPolicy' => 'getDependFailPolicy'
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
    const DEPEND_PERIOD_SAME_PERIOD = 'SAME_PERIOD';
    const DEPEND_PERIOD_PRE_PERIOD = 'PRE_PERIOD';
    const DEPEND_FAIL_POLICY_FAIL = 'FAIL';
    const DEPEND_FAIL_POLICY_IGNORE = 'IGNORE';
    const DEPEND_FAIL_POLICY_SUSPEND = 'SUSPEND';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDependPeriodAllowableValues()
    {
        return [
            self::DEPEND_PERIOD_SAME_PERIOD,
            self::DEPEND_PERIOD_PRE_PERIOD,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDependFailPolicyAllowableValues()
    {
        return [
            self::DEPEND_FAIL_POLICY_FAIL,
            self::DEPEND_FAIL_POLICY_IGNORE,
            self::DEPEND_FAIL_POLICY_SUSPEND,
        ];
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
        $this->container['jobs'] = isset($data['jobs']) ? $data['jobs'] : null;
        $this->container['dependPeriod'] = isset($data['dependPeriod']) ? $data['dependPeriod'] : null;
        $this->container['dependFailPolicy'] = isset($data['dependFailPolicy']) ? $data['dependFailPolicy'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['jobs'] === null) {
            $invalidProperties[] = "'jobs' can't be null";
        }
            $allowedValues = $this->getDependPeriodAllowableValues();
                if (!is_null($this->container['dependPeriod']) && !in_array($this->container['dependPeriod'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'dependPeriod', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getDependFailPolicyAllowableValues();
                if (!is_null($this->container['dependFailPolicy']) && !in_array($this->container['dependFailPolicy'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'dependFailPolicy', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets jobs
    *  依赖的作业名称列表，必须依赖已存在的作业。
    *
    * @return string[]
    */
    public function getJobs()
    {
        return $this->container['jobs'];
    }

    /**
    * Sets jobs
    *
    * @param string[] $jobs 依赖的作业名称列表，必须依赖已存在的作业。
    *
    * @return $this
    */
    public function setJobs($jobs)
    {
        $this->container['jobs'] = $jobs;
        return $this;
    }

    /**
    * Gets dependPeriod
    *  依赖周期： - SAME_PERIOD：依赖被依赖作业的同周期任务的执行结果。 - PRE_PERIOD：依赖被依赖作业的前一周期任务的执行结果。
    *
    * @return string|null
    */
    public function getDependPeriod()
    {
        return $this->container['dependPeriod'];
    }

    /**
    * Sets dependPeriod
    *
    * @param string|null $dependPeriod 依赖周期： - SAME_PERIOD：依赖被依赖作业的同周期任务的执行结果。 - PRE_PERIOD：依赖被依赖作业的前一周期任务的执行结果。
    *
    * @return $this
    */
    public function setDependPeriod($dependPeriod)
    {
        $this->container['dependPeriod'] = $dependPeriod;
        return $this;
    }

    /**
    * Gets dependFailPolicy
    *  依赖作业任务执行失败处理策略: - FAIL：停止作业，设置作业为失败状态。 - IGNORE：继续执行作业。 - SUSPEND： 挂起作业。
    *
    * @return string|null
    */
    public function getDependFailPolicy()
    {
        return $this->container['dependFailPolicy'];
    }

    /**
    * Sets dependFailPolicy
    *
    * @param string|null $dependFailPolicy 依赖作业任务执行失败处理策略: - FAIL：停止作业，设置作业为失败状态。 - IGNORE：继续执行作业。 - SUSPEND： 挂起作业。
    *
    * @return $this
    */
    public function setDependFailPolicy($dependFailPolicy)
    {
        $this->container['dependFailPolicy'] = $dependFailPolicy;
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

