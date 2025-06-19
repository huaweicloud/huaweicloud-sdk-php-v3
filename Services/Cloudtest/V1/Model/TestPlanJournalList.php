<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TestPlanJournalList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TestPlanJournalList';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  项目id，项目唯一标识，固定长度32位字符
    * planId  测试计划id
    * operateTime  变更时间
    * operator  operator
    * detail  历史记录详情
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'planId' => 'string',
            'operateTime' => '\DateTime',
            'operator' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndId',
            'detail' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\TestPlanJournalDetail[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  项目id，项目唯一标识，固定长度32位字符
    * planId  测试计划id
    * operateTime  变更时间
    * operator  operator
    * detail  历史记录详情
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'planId' => null,
        'operateTime' => 'date',
        'operator' => null,
        'detail' => null
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
    * projectId  项目id，项目唯一标识，固定长度32位字符
    * planId  测试计划id
    * operateTime  变更时间
    * operator  operator
    * detail  历史记录详情
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'planId' => 'plan_id',
            'operateTime' => 'operate_time',
            'operator' => 'operator',
            'detail' => 'detail'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  项目id，项目唯一标识，固定长度32位字符
    * planId  测试计划id
    * operateTime  变更时间
    * operator  operator
    * detail  历史记录详情
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'planId' => 'setPlanId',
            'operateTime' => 'setOperateTime',
            'operator' => 'setOperator',
            'detail' => 'setDetail'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  项目id，项目唯一标识，固定长度32位字符
    * planId  测试计划id
    * operateTime  变更时间
    * operator  operator
    * detail  历史记录详情
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'planId' => 'getPlanId',
            'operateTime' => 'getOperateTime',
            'operator' => 'getOperator',
            'detail' => 'getDetail'
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
        $this->container['planId'] = isset($data['planId']) ? $data['planId'] : null;
        $this->container['operateTime'] = isset($data['operateTime']) ? $data['operateTime'] : null;
        $this->container['operator'] = isset($data['operator']) ? $data['operator'] : null;
        $this->container['detail'] = isset($data['detail']) ? $data['detail'] : null;
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
    * Gets projectId
    *  项目id，项目唯一标识，固定长度32位字符
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 项目id，项目唯一标识，固定长度32位字符
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
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
    * Gets operateTime
    *  变更时间
    *
    * @return \DateTime|null
    */
    public function getOperateTime()
    {
        return $this->container['operateTime'];
    }

    /**
    * Sets operateTime
    *
    * @param \DateTime|null $operateTime 变更时间
    *
    * @return $this
    */
    public function setOperateTime($operateTime)
    {
        $this->container['operateTime'] = $operateTime;
        return $this;
    }

    /**
    * Gets operator
    *  operator
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndId|null
    */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
    * Sets operator
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\NameAndId|null $operator operator
    *
    * @return $this
    */
    public function setOperator($operator)
    {
        $this->container['operator'] = $operator;
        return $this;
    }

    /**
    * Gets detail
    *  历史记录详情
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\TestPlanJournalDetail[]|null
    */
    public function getDetail()
    {
        return $this->container['detail'];
    }

    /**
    * Sets detail
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\TestPlanJournalDetail[]|null $detail 历史记录详情
    *
    * @return $this
    */
    public function setDetail($detail)
    {
        $this->container['detail'] = $detail;
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

