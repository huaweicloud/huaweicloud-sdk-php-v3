<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchDeleteLoadbalancersRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchDeleteLoadbalancersRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * unboundedPool  解绑后的游离pool是否被删除
    * publicIp  是否删除公网IP
    * loadbalancerIds  待删除的负载均衡器id列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'unboundedPool' => 'bool',
            'publicIp' => 'bool',
            'loadbalancerIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * unboundedPool  解绑后的游离pool是否被删除
    * publicIp  是否删除公网IP
    * loadbalancerIds  待删除的负载均衡器id列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'unboundedPool' => null,
        'publicIp' => null,
        'loadbalancerIds' => null
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
    * unboundedPool  解绑后的游离pool是否被删除
    * publicIp  是否删除公网IP
    * loadbalancerIds  待删除的负载均衡器id列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'unboundedPool' => 'unbounded_pool',
            'publicIp' => 'public_ip',
            'loadbalancerIds' => 'loadbalancer_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * unboundedPool  解绑后的游离pool是否被删除
    * publicIp  是否删除公网IP
    * loadbalancerIds  待删除的负载均衡器id列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'unboundedPool' => 'setUnboundedPool',
            'publicIp' => 'setPublicIp',
            'loadbalancerIds' => 'setLoadbalancerIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * unboundedPool  解绑后的游离pool是否被删除
    * publicIp  是否删除公网IP
    * loadbalancerIds  待删除的负载均衡器id列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'unboundedPool' => 'getUnboundedPool',
            'publicIp' => 'getPublicIp',
            'loadbalancerIds' => 'getLoadbalancerIds'
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
        $this->container['unboundedPool'] = isset($data['unboundedPool']) ? $data['unboundedPool'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['loadbalancerIds'] = isset($data['loadbalancerIds']) ? $data['loadbalancerIds'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['loadbalancerIds'] === null) {
            $invalidProperties[] = "'loadbalancerIds' can't be null";
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
    * Gets unboundedPool
    *  解绑后的游离pool是否被删除
    *
    * @return bool|null
    */
    public function getUnboundedPool()
    {
        return $this->container['unboundedPool'];
    }

    /**
    * Sets unboundedPool
    *
    * @param bool|null $unboundedPool 解绑后的游离pool是否被删除
    *
    * @return $this
    */
    public function setUnboundedPool($unboundedPool)
    {
        $this->container['unboundedPool'] = $unboundedPool;
        return $this;
    }

    /**
    * Gets publicIp
    *  是否删除公网IP
    *
    * @return bool|null
    */
    public function getPublicIp()
    {
        return $this->container['publicIp'];
    }

    /**
    * Sets publicIp
    *
    * @param bool|null $publicIp 是否删除公网IP
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets loadbalancerIds
    *  待删除的负载均衡器id列表。
    *
    * @return string[]
    */
    public function getLoadbalancerIds()
    {
        return $this->container['loadbalancerIds'];
    }

    /**
    * Sets loadbalancerIds
    *
    * @param string[] $loadbalancerIds 待删除的负载均衡器id列表。
    *
    * @return $this
    */
    public function setLoadbalancerIds($loadbalancerIds)
    {
        $this->container['loadbalancerIds'] = $loadbalancerIds;
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

