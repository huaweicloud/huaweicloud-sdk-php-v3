<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PostPaidServerSchedulerHints implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PostPaidServerSchedulerHints';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * group  云服务器组ID，UUID格式。  云服务器组的ID可以从控制台或者参考[查询云服务器组列表](https://support.huaweicloud.com/api-ecs/ecs_03_1402.html)获取。
    * dedicatedHostId  专属主机的ID。专属主机的ID仅在tenancy为dedicated时生效。
    * tenancy  在指定的专属主机或者共享主机上创建弹性云服务器云主机。参数值为shared或者dedicated。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'group' => 'string',
            'dedicatedHostId' => 'string',
            'tenancy' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * group  云服务器组ID，UUID格式。  云服务器组的ID可以从控制台或者参考[查询云服务器组列表](https://support.huaweicloud.com/api-ecs/ecs_03_1402.html)获取。
    * dedicatedHostId  专属主机的ID。专属主机的ID仅在tenancy为dedicated时生效。
    * tenancy  在指定的专属主机或者共享主机上创建弹性云服务器云主机。参数值为shared或者dedicated。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'group' => null,
        'dedicatedHostId' => null,
        'tenancy' => null
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
    * group  云服务器组ID，UUID格式。  云服务器组的ID可以从控制台或者参考[查询云服务器组列表](https://support.huaweicloud.com/api-ecs/ecs_03_1402.html)获取。
    * dedicatedHostId  专属主机的ID。专属主机的ID仅在tenancy为dedicated时生效。
    * tenancy  在指定的专属主机或者共享主机上创建弹性云服务器云主机。参数值为shared或者dedicated。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'group' => 'group',
            'dedicatedHostId' => 'dedicated_host_id',
            'tenancy' => 'tenancy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * group  云服务器组ID，UUID格式。  云服务器组的ID可以从控制台或者参考[查询云服务器组列表](https://support.huaweicloud.com/api-ecs/ecs_03_1402.html)获取。
    * dedicatedHostId  专属主机的ID。专属主机的ID仅在tenancy为dedicated时生效。
    * tenancy  在指定的专属主机或者共享主机上创建弹性云服务器云主机。参数值为shared或者dedicated。
    *
    * @var string[]
    */
    protected static $setters = [
            'group' => 'setGroup',
            'dedicatedHostId' => 'setDedicatedHostId',
            'tenancy' => 'setTenancy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * group  云服务器组ID，UUID格式。  云服务器组的ID可以从控制台或者参考[查询云服务器组列表](https://support.huaweicloud.com/api-ecs/ecs_03_1402.html)获取。
    * dedicatedHostId  专属主机的ID。专属主机的ID仅在tenancy为dedicated时生效。
    * tenancy  在指定的专属主机或者共享主机上创建弹性云服务器云主机。参数值为shared或者dedicated。
    *
    * @var string[]
    */
    protected static $getters = [
            'group' => 'getGroup',
            'dedicatedHostId' => 'getDedicatedHostId',
            'tenancy' => 'getTenancy'
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
        $this->container['group'] = isset($data['group']) ? $data['group'] : null;
        $this->container['dedicatedHostId'] = isset($data['dedicatedHostId']) ? $data['dedicatedHostId'] : null;
        $this->container['tenancy'] = isset($data['tenancy']) ? $data['tenancy'] : null;
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
    * Gets group
    *  云服务器组ID，UUID格式。  云服务器组的ID可以从控制台或者参考[查询云服务器组列表](https://support.huaweicloud.com/api-ecs/ecs_03_1402.html)获取。
    *
    * @return string|null
    */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
    * Sets group
    *
    * @param string|null $group 云服务器组ID，UUID格式。  云服务器组的ID可以从控制台或者参考[查询云服务器组列表](https://support.huaweicloud.com/api-ecs/ecs_03_1402.html)获取。
    *
    * @return $this
    */
    public function setGroup($group)
    {
        $this->container['group'] = $group;
        return $this;
    }

    /**
    * Gets dedicatedHostId
    *  专属主机的ID。专属主机的ID仅在tenancy为dedicated时生效。
    *
    * @return string|null
    */
    public function getDedicatedHostId()
    {
        return $this->container['dedicatedHostId'];
    }

    /**
    * Sets dedicatedHostId
    *
    * @param string|null $dedicatedHostId 专属主机的ID。专属主机的ID仅在tenancy为dedicated时生效。
    *
    * @return $this
    */
    public function setDedicatedHostId($dedicatedHostId)
    {
        $this->container['dedicatedHostId'] = $dedicatedHostId;
        return $this;
    }

    /**
    * Gets tenancy
    *  在指定的专属主机或者共享主机上创建弹性云服务器云主机。参数值为shared或者dedicated。
    *
    * @return string|null
    */
    public function getTenancy()
    {
        return $this->container['tenancy'];
    }

    /**
    * Sets tenancy
    *
    * @param string|null $tenancy 在指定的专属主机或者共享主机上创建弹性云服务器云主机。参数值为shared或者dedicated。
    *
    * @return $this
    */
    public function setTenancy($tenancy)
    {
        $this->container['tenancy'] = $tenancy;
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

