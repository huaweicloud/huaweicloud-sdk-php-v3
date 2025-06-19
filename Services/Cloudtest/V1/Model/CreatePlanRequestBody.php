<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreatePlanRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreatePlanRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  计划名称
    * assignedId  处理者id，不填时默认使用当前用户
    * serviceIdList  计划下包含的用例类型，数组长度小于10个
    * planCycle  planCycle
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'assignedId' => 'string',
            'serviceIdList' => 'int[]',
            'planCycle' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\PlanCycle'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  计划名称
    * assignedId  处理者id，不填时默认使用当前用户
    * serviceIdList  计划下包含的用例类型，数组长度小于10个
    * planCycle  planCycle
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'assignedId' => null,
        'serviceIdList' => null,
        'planCycle' => null
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
    * name  计划名称
    * assignedId  处理者id，不填时默认使用当前用户
    * serviceIdList  计划下包含的用例类型，数组长度小于10个
    * planCycle  planCycle
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'assignedId' => 'assigned_id',
            'serviceIdList' => 'service_id_list',
            'planCycle' => 'plan_cycle'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  计划名称
    * assignedId  处理者id，不填时默认使用当前用户
    * serviceIdList  计划下包含的用例类型，数组长度小于10个
    * planCycle  planCycle
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'assignedId' => 'setAssignedId',
            'serviceIdList' => 'setServiceIdList',
            'planCycle' => 'setPlanCycle'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  计划名称
    * assignedId  处理者id，不填时默认使用当前用户
    * serviceIdList  计划下包含的用例类型，数组长度小于10个
    * planCycle  planCycle
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'assignedId' => 'getAssignedId',
            'serviceIdList' => 'getServiceIdList',
            'planCycle' => 'getPlanCycle'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['assignedId'] = isset($data['assignedId']) ? $data['assignedId'] : null;
        $this->container['serviceIdList'] = isset($data['serviceIdList']) ? $data['serviceIdList'] : null;
        $this->container['planCycle'] = isset($data['planCycle']) ? $data['planCycle'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['serviceIdList'] === null) {
            $invalidProperties[] = "'serviceIdList' can't be null";
        }
        if ($this->container['planCycle'] === null) {
            $invalidProperties[] = "'planCycle' can't be null";
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
    * Gets name
    *  计划名称
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 计划名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets assignedId
    *  处理者id，不填时默认使用当前用户
    *
    * @return string|null
    */
    public function getAssignedId()
    {
        return $this->container['assignedId'];
    }

    /**
    * Sets assignedId
    *
    * @param string|null $assignedId 处理者id，不填时默认使用当前用户
    *
    * @return $this
    */
    public function setAssignedId($assignedId)
    {
        $this->container['assignedId'] = $assignedId;
        return $this;
    }

    /**
    * Gets serviceIdList
    *  计划下包含的用例类型，数组长度小于10个
    *
    * @return int[]
    */
    public function getServiceIdList()
    {
        return $this->container['serviceIdList'];
    }

    /**
    * Sets serviceIdList
    *
    * @param int[] $serviceIdList 计划下包含的用例类型，数组长度小于10个
    *
    * @return $this
    */
    public function setServiceIdList($serviceIdList)
    {
        $this->container['serviceIdList'] = $serviceIdList;
        return $this;
    }

    /**
    * Gets planCycle
    *  planCycle
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\PlanCycle
    */
    public function getPlanCycle()
    {
        return $this->container['planCycle'];
    }

    /**
    * Sets planCycle
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\PlanCycle $planCycle planCycle
    *
    * @return $this
    */
    public function setPlanCycle($planCycle)
    {
        $this->container['planCycle'] = $planCycle;
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

