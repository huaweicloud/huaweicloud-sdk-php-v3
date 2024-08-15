<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAvailabilityZonesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAvailabilityZonesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * requestId  参数解释：请求ID。  注：自动生成。
    * availabilityZones  参数解释：返回创建LB时可使用的可用区集合列表。如：[[az1,az2],[az2,az3]] ,则在创建LB时，只能从其中的一个子列表中选择一个或多个可用区，不能跨列表选择。在上述例子中，不能选择az1和az3。
    * specCode  可用区的产品编码，仅边缘场景有效。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'requestId' => 'string',
            'availabilityZones' => '\HuaweiCloud\SDK\Elb\V3\Model\AvailabilityZone[][]',
            'specCode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * requestId  参数解释：请求ID。  注：自动生成。
    * availabilityZones  参数解释：返回创建LB时可使用的可用区集合列表。如：[[az1,az2],[az2,az3]] ,则在创建LB时，只能从其中的一个子列表中选择一个或多个可用区，不能跨列表选择。在上述例子中，不能选择az1和az3。
    * specCode  可用区的产品编码，仅边缘场景有效。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'requestId' => null,
        'availabilityZones' => null,
        'specCode' => null
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
    * requestId  参数解释：请求ID。  注：自动生成。
    * availabilityZones  参数解释：返回创建LB时可使用的可用区集合列表。如：[[az1,az2],[az2,az3]] ,则在创建LB时，只能从其中的一个子列表中选择一个或多个可用区，不能跨列表选择。在上述例子中，不能选择az1和az3。
    * specCode  可用区的产品编码，仅边缘场景有效。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'requestId' => 'request_id',
            'availabilityZones' => 'availability_zones',
            'specCode' => 'spec_code'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * requestId  参数解释：请求ID。  注：自动生成。
    * availabilityZones  参数解释：返回创建LB时可使用的可用区集合列表。如：[[az1,az2],[az2,az3]] ,则在创建LB时，只能从其中的一个子列表中选择一个或多个可用区，不能跨列表选择。在上述例子中，不能选择az1和az3。
    * specCode  可用区的产品编码，仅边缘场景有效。
    *
    * @var string[]
    */
    protected static $setters = [
            'requestId' => 'setRequestId',
            'availabilityZones' => 'setAvailabilityZones',
            'specCode' => 'setSpecCode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * requestId  参数解释：请求ID。  注：自动生成。
    * availabilityZones  参数解释：返回创建LB时可使用的可用区集合列表。如：[[az1,az2],[az2,az3]] ,则在创建LB时，只能从其中的一个子列表中选择一个或多个可用区，不能跨列表选择。在上述例子中，不能选择az1和az3。
    * specCode  可用区的产品编码，仅边缘场景有效。
    *
    * @var string[]
    */
    protected static $getters = [
            'requestId' => 'getRequestId',
            'availabilityZones' => 'getAvailabilityZones',
            'specCode' => 'getSpecCode'
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
        $this->container['requestId'] = isset($data['requestId']) ? $data['requestId'] : null;
        $this->container['availabilityZones'] = isset($data['availabilityZones']) ? $data['availabilityZones'] : null;
        $this->container['specCode'] = isset($data['specCode']) ? $data['specCode'] : null;
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
    * Gets requestId
    *  参数解释：请求ID。  注：自动生成。
    *
    * @return string|null
    */
    public function getRequestId()
    {
        return $this->container['requestId'];
    }

    /**
    * Sets requestId
    *
    * @param string|null $requestId 参数解释：请求ID。  注：自动生成。
    *
    * @return $this
    */
    public function setRequestId($requestId)
    {
        $this->container['requestId'] = $requestId;
        return $this;
    }

    /**
    * Gets availabilityZones
    *  参数解释：返回创建LB时可使用的可用区集合列表。如：[[az1,az2],[az2,az3]] ,则在创建LB时，只能从其中的一个子列表中选择一个或多个可用区，不能跨列表选择。在上述例子中，不能选择az1和az3。
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\AvailabilityZone[][]|null
    */
    public function getAvailabilityZones()
    {
        return $this->container['availabilityZones'];
    }

    /**
    * Sets availabilityZones
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\AvailabilityZone[][]|null $availabilityZones 参数解释：返回创建LB时可使用的可用区集合列表。如：[[az1,az2],[az2,az3]] ,则在创建LB时，只能从其中的一个子列表中选择一个或多个可用区，不能跨列表选择。在上述例子中，不能选择az1和az3。
    *
    * @return $this
    */
    public function setAvailabilityZones($availabilityZones)
    {
        $this->container['availabilityZones'] = $availabilityZones;
        return $this;
    }

    /**
    * Gets specCode
    *  可用区的产品编码，仅边缘场景有效。
    *
    * @return string|null
    */
    public function getSpecCode()
    {
        return $this->container['specCode'];
    }

    /**
    * Sets specCode
    *
    * @param string|null $specCode 可用区的产品编码，仅边缘场景有效。
    *
    * @return $this
    */
    public function setSpecCode($specCode)
    {
        $this->container['specCode'] = $specCode;
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

