<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RunTestCaseRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RunTestCaseRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * serviceId  注册测试类型服务接口返回的服务id
    * planId  测试计划id
    * executeList  测试用例执行信息，数组长度小于等于50
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'serviceId' => 'int',
            'planId' => 'string',
            'executeList' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\TestCaseExecuteBean[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * serviceId  注册测试类型服务接口返回的服务id
    * planId  测试计划id
    * executeList  测试用例执行信息，数组长度小于等于50
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'serviceId' => null,
        'planId' => null,
        'executeList' => null
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
    * serviceId  注册测试类型服务接口返回的服务id
    * planId  测试计划id
    * executeList  测试用例执行信息，数组长度小于等于50
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'serviceId' => 'service_id',
            'planId' => 'plan_id',
            'executeList' => 'execute_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * serviceId  注册测试类型服务接口返回的服务id
    * planId  测试计划id
    * executeList  测试用例执行信息，数组长度小于等于50
    *
    * @var string[]
    */
    protected static $setters = [
            'serviceId' => 'setServiceId',
            'planId' => 'setPlanId',
            'executeList' => 'setExecuteList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * serviceId  注册测试类型服务接口返回的服务id
    * planId  测试计划id
    * executeList  测试用例执行信息，数组长度小于等于50
    *
    * @var string[]
    */
    protected static $getters = [
            'serviceId' => 'getServiceId',
            'planId' => 'getPlanId',
            'executeList' => 'getExecuteList'
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
        $this->container['serviceId'] = isset($data['serviceId']) ? $data['serviceId'] : null;
        $this->container['planId'] = isset($data['planId']) ? $data['planId'] : null;
        $this->container['executeList'] = isset($data['executeList']) ? $data['executeList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['serviceId'] === null) {
            $invalidProperties[] = "'serviceId' can't be null";
        }
        if ($this->container['executeList'] === null) {
            $invalidProperties[] = "'executeList' can't be null";
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
    * Gets serviceId
    *  注册测试类型服务接口返回的服务id
    *
    * @return int
    */
    public function getServiceId()
    {
        return $this->container['serviceId'];
    }

    /**
    * Sets serviceId
    *
    * @param int $serviceId 注册测试类型服务接口返回的服务id
    *
    * @return $this
    */
    public function setServiceId($serviceId)
    {
        $this->container['serviceId'] = $serviceId;
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
    * Gets executeList
    *  测试用例执行信息，数组长度小于等于50
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\TestCaseExecuteBean[]
    */
    public function getExecuteList()
    {
        return $this->container['executeList'];
    }

    /**
    * Sets executeList
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\TestCaseExecuteBean[] $executeList 测试用例执行信息，数组长度小于等于50
    *
    * @return $this
    */
    public function setExecuteList($executeList)
    {
        $this->container['executeList'] = $executeList;
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

