<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSubCustomerBudgetReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSubCustomerBudgetReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * customerIds  |参数名称：客户ID列表| |参数的约束及描述：必填，最大支持100个客户ID，如果其中有存在不是该伙伴的客户ID或者其中有存在与该伙伴不是转售关联类型的客户ID，在响应中不返回该客户信息。|
    * indirectPartnerId  |参数名称：云经销商ID| |参数约束及描述：非必填，范围限制:0-64，如果需要查询云经销商的子客户列表，必须携带该字段。除此之外，此参数不做处理。|
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'customerIds' => 'string[]',
            'indirectPartnerId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * customerIds  |参数名称：客户ID列表| |参数的约束及描述：必填，最大支持100个客户ID，如果其中有存在不是该伙伴的客户ID或者其中有存在与该伙伴不是转售关联类型的客户ID，在响应中不返回该客户信息。|
    * indirectPartnerId  |参数名称：云经销商ID| |参数约束及描述：非必填，范围限制:0-64，如果需要查询云经销商的子客户列表，必须携带该字段。除此之外，此参数不做处理。|
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'customerIds' => null,
        'indirectPartnerId' => null
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
    * customerIds  |参数名称：客户ID列表| |参数的约束及描述：必填，最大支持100个客户ID，如果其中有存在不是该伙伴的客户ID或者其中有存在与该伙伴不是转售关联类型的客户ID，在响应中不返回该客户信息。|
    * indirectPartnerId  |参数名称：云经销商ID| |参数约束及描述：非必填，范围限制:0-64，如果需要查询云经销商的子客户列表，必须携带该字段。除此之外，此参数不做处理。|
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'customerIds' => 'customer_ids',
            'indirectPartnerId' => 'indirect_partner_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * customerIds  |参数名称：客户ID列表| |参数的约束及描述：必填，最大支持100个客户ID，如果其中有存在不是该伙伴的客户ID或者其中有存在与该伙伴不是转售关联类型的客户ID，在响应中不返回该客户信息。|
    * indirectPartnerId  |参数名称：云经销商ID| |参数约束及描述：非必填，范围限制:0-64，如果需要查询云经销商的子客户列表，必须携带该字段。除此之外，此参数不做处理。|
    *
    * @var string[]
    */
    protected static $setters = [
            'customerIds' => 'setCustomerIds',
            'indirectPartnerId' => 'setIndirectPartnerId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * customerIds  |参数名称：客户ID列表| |参数的约束及描述：必填，最大支持100个客户ID，如果其中有存在不是该伙伴的客户ID或者其中有存在与该伙伴不是转售关联类型的客户ID，在响应中不返回该客户信息。|
    * indirectPartnerId  |参数名称：云经销商ID| |参数约束及描述：非必填，范围限制:0-64，如果需要查询云经销商的子客户列表，必须携带该字段。除此之外，此参数不做处理。|
    *
    * @var string[]
    */
    protected static $getters = [
            'customerIds' => 'getCustomerIds',
            'indirectPartnerId' => 'getIndirectPartnerId'
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
        $this->container['customerIds'] = isset($data['customerIds']) ? $data['customerIds'] : null;
        $this->container['indirectPartnerId'] = isset($data['indirectPartnerId']) ? $data['indirectPartnerId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['customerIds'] === null) {
            $invalidProperties[] = "'customerIds' can't be null";
        }
            if (!is_null($this->container['indirectPartnerId']) && (mb_strlen($this->container['indirectPartnerId']) > 64)) {
                $invalidProperties[] = "invalid value for 'indirectPartnerId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['indirectPartnerId']) && (mb_strlen($this->container['indirectPartnerId']) < 0)) {
                $invalidProperties[] = "invalid value for 'indirectPartnerId', the character length must be bigger than or equal to 0.";
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
    * Gets customerIds
    *  |参数名称：客户ID列表| |参数的约束及描述：必填，最大支持100个客户ID，如果其中有存在不是该伙伴的客户ID或者其中有存在与该伙伴不是转售关联类型的客户ID，在响应中不返回该客户信息。|
    *
    * @return string[]
    */
    public function getCustomerIds()
    {
        return $this->container['customerIds'];
    }

    /**
    * Sets customerIds
    *
    * @param string[] $customerIds |参数名称：客户ID列表| |参数的约束及描述：必填，最大支持100个客户ID，如果其中有存在不是该伙伴的客户ID或者其中有存在与该伙伴不是转售关联类型的客户ID，在响应中不返回该客户信息。|
    *
    * @return $this
    */
    public function setCustomerIds($customerIds)
    {
        $this->container['customerIds'] = $customerIds;
        return $this;
    }

    /**
    * Gets indirectPartnerId
    *  |参数名称：云经销商ID| |参数约束及描述：非必填，范围限制:0-64，如果需要查询云经销商的子客户列表，必须携带该字段。除此之外，此参数不做处理。|
    *
    * @return string|null
    */
    public function getIndirectPartnerId()
    {
        return $this->container['indirectPartnerId'];
    }

    /**
    * Sets indirectPartnerId
    *
    * @param string|null $indirectPartnerId |参数名称：云经销商ID| |参数约束及描述：非必填，范围限制:0-64，如果需要查询云经销商的子客户列表，必须携带该字段。除此之外，此参数不做处理。|
    *
    * @return $this
    */
    public function setIndirectPartnerId($indirectPartnerId)
    {
        $this->container['indirectPartnerId'] = $indirectPartnerId;
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

