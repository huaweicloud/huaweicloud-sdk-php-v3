<?php

namespace HuaweiCloud\SDK\_As\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ScheduledTaskDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ScheduledTaskDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskId  计划任务ID
    * scalingGroupId  伸缩组ID
    * name  名称
    * scheduledPolicy  scheduledPolicy
    * instanceNumber  instanceNumber
    * createTime  创建时间
    * tenantId  租户ID
    * domainId  账号ID
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskId' => 'string',
            'scalingGroupId' => 'string',
            'name' => 'string',
            'scheduledPolicy' => '\HuaweiCloud\SDK\_As\V1\Model\ScheduledTaskPolicy',
            'instanceNumber' => '\HuaweiCloud\SDK\_As\V1\Model\IntegerRange',
            'createTime' => 'string',
            'tenantId' => 'string',
            'domainId' => 'string',
            'updateTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskId  计划任务ID
    * scalingGroupId  伸缩组ID
    * name  名称
    * scheduledPolicy  scheduledPolicy
    * instanceNumber  instanceNumber
    * createTime  创建时间
    * tenantId  租户ID
    * domainId  账号ID
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskId' => null,
        'scalingGroupId' => null,
        'name' => null,
        'scheduledPolicy' => null,
        'instanceNumber' => null,
        'createTime' => null,
        'tenantId' => null,
        'domainId' => null,
        'updateTime' => null
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
    * taskId  计划任务ID
    * scalingGroupId  伸缩组ID
    * name  名称
    * scheduledPolicy  scheduledPolicy
    * instanceNumber  instanceNumber
    * createTime  创建时间
    * tenantId  租户ID
    * domainId  账号ID
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskId' => 'task_id',
            'scalingGroupId' => 'scaling_group_id',
            'name' => 'name',
            'scheduledPolicy' => 'scheduled_policy',
            'instanceNumber' => 'instance_number',
            'createTime' => 'create_time',
            'tenantId' => 'tenant_id',
            'domainId' => 'domain_id',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskId  计划任务ID
    * scalingGroupId  伸缩组ID
    * name  名称
    * scheduledPolicy  scheduledPolicy
    * instanceNumber  instanceNumber
    * createTime  创建时间
    * tenantId  租户ID
    * domainId  账号ID
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $setters = [
            'taskId' => 'setTaskId',
            'scalingGroupId' => 'setScalingGroupId',
            'name' => 'setName',
            'scheduledPolicy' => 'setScheduledPolicy',
            'instanceNumber' => 'setInstanceNumber',
            'createTime' => 'setCreateTime',
            'tenantId' => 'setTenantId',
            'domainId' => 'setDomainId',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskId  计划任务ID
    * scalingGroupId  伸缩组ID
    * name  名称
    * scheduledPolicy  scheduledPolicy
    * instanceNumber  instanceNumber
    * createTime  创建时间
    * tenantId  租户ID
    * domainId  账号ID
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $getters = [
            'taskId' => 'getTaskId',
            'scalingGroupId' => 'getScalingGroupId',
            'name' => 'getName',
            'scheduledPolicy' => 'getScheduledPolicy',
            'instanceNumber' => 'getInstanceNumber',
            'createTime' => 'getCreateTime',
            'tenantId' => 'getTenantId',
            'domainId' => 'getDomainId',
            'updateTime' => 'getUpdateTime'
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
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['scalingGroupId'] = isset($data['scalingGroupId']) ? $data['scalingGroupId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['scheduledPolicy'] = isset($data['scheduledPolicy']) ? $data['scheduledPolicy'] : null;
        $this->container['instanceNumber'] = isset($data['instanceNumber']) ? $data['instanceNumber'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['taskId']) && !preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['taskId'])) {
                $invalidProperties[] = "invalid value for 'taskId', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
            }
            if (!is_null($this->container['scalingGroupId']) && !preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['scalingGroupId'])) {
                $invalidProperties[] = "invalid value for 'scalingGroupId', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
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
    * Gets taskId
    *  计划任务ID
    *
    * @return string|null
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param string|null $taskId 计划任务ID
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets scalingGroupId
    *  伸缩组ID
    *
    * @return string|null
    */
    public function getScalingGroupId()
    {
        return $this->container['scalingGroupId'];
    }

    /**
    * Sets scalingGroupId
    *
    * @param string|null $scalingGroupId 伸缩组ID
    *
    * @return $this
    */
    public function setScalingGroupId($scalingGroupId)
    {
        $this->container['scalingGroupId'] = $scalingGroupId;
        return $this;
    }

    /**
    * Gets name
    *  名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets scheduledPolicy
    *  scheduledPolicy
    *
    * @return \HuaweiCloud\SDK\_As\V1\Model\ScheduledTaskPolicy|null
    */
    public function getScheduledPolicy()
    {
        return $this->container['scheduledPolicy'];
    }

    /**
    * Sets scheduledPolicy
    *
    * @param \HuaweiCloud\SDK\_As\V1\Model\ScheduledTaskPolicy|null $scheduledPolicy scheduledPolicy
    *
    * @return $this
    */
    public function setScheduledPolicy($scheduledPolicy)
    {
        $this->container['scheduledPolicy'] = $scheduledPolicy;
        return $this;
    }

    /**
    * Gets instanceNumber
    *  instanceNumber
    *
    * @return \HuaweiCloud\SDK\_As\V1\Model\IntegerRange|null
    */
    public function getInstanceNumber()
    {
        return $this->container['instanceNumber'];
    }

    /**
    * Sets instanceNumber
    *
    * @param \HuaweiCloud\SDK\_As\V1\Model\IntegerRange|null $instanceNumber instanceNumber
    *
    * @return $this
    */
    public function setInstanceNumber($instanceNumber)
    {
        $this->container['instanceNumber'] = $instanceNumber;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets tenantId
    *  租户ID
    *
    * @return string|null
    */
    public function getTenantId()
    {
        return $this->container['tenantId'];
    }

    /**
    * Sets tenantId
    *
    * @param string|null $tenantId 租户ID
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets domainId
    *  账号ID
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId 账号ID
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime 更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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

