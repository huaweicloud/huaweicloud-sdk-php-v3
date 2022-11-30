<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListFirewallUsingGetResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListFirewallUsingGetResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fwInstanceId  防火墙id
    * resourceId  资源id
    * name  防火墙名称
    * haType  集群类型
    * chargeMode  计费模式 0：包年/包月 1：按需
    * serviceType  服务类型
    * engineType  引擎类型
    * flavor  flavor
    * protectObjects  防护对象列表
    * status  防火墙状态列表，包括-1：等待支付，0：创建中，1，删除中，2：运行中，3：升级中，4：删除完成：5：冻结中，6：创建失败，7：删除失败，8：冻结失败，9：存储中，10：存储失败，11：升级失败
    * description  描述
    * isOldFirewallInstance  是否为旧引擎，true表示是，false表示不是
    * supportIpv6  是否支持ipv6，true表示是，false表示不是
    * featureToggle  特性开关，boolean值为true表示是，false表示否
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fwInstanceId' => 'string',
            'resourceId' => 'string',
            'name' => 'string',
            'haType' => 'int',
            'chargeMode' => 'int',
            'serviceType' => 'int',
            'engineType' => 'string',
            'flavor' => '\HuaweiCloud\SDK\Cfw\V1\Model\Flavor',
            'protectObjects' => '\HuaweiCloud\SDK\Cfw\V1\Model\ProtectObjectVO[]',
            'status' => 'int',
            'description' => 'string',
            'isOldFirewallInstance' => 'bool',
            'supportIpv6' => 'bool',
            'featureToggle' => 'map[string,bool]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fwInstanceId  防火墙id
    * resourceId  资源id
    * name  防火墙名称
    * haType  集群类型
    * chargeMode  计费模式 0：包年/包月 1：按需
    * serviceType  服务类型
    * engineType  引擎类型
    * flavor  flavor
    * protectObjects  防护对象列表
    * status  防火墙状态列表，包括-1：等待支付，0：创建中，1，删除中，2：运行中，3：升级中，4：删除完成：5：冻结中，6：创建失败，7：删除失败，8：冻结失败，9：存储中，10：存储失败，11：升级失败
    * description  描述
    * isOldFirewallInstance  是否为旧引擎，true表示是，false表示不是
    * supportIpv6  是否支持ipv6，true表示是，false表示不是
    * featureToggle  特性开关，boolean值为true表示是，false表示否
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fwInstanceId' => null,
        'resourceId' => null,
        'name' => null,
        'haType' => 'int32',
        'chargeMode' => 'int32',
        'serviceType' => 'int32',
        'engineType' => null,
        'flavor' => null,
        'protectObjects' => null,
        'status' => 'int32',
        'description' => null,
        'isOldFirewallInstance' => null,
        'supportIpv6' => null,
        'featureToggle' => null
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
    * fwInstanceId  防火墙id
    * resourceId  资源id
    * name  防火墙名称
    * haType  集群类型
    * chargeMode  计费模式 0：包年/包月 1：按需
    * serviceType  服务类型
    * engineType  引擎类型
    * flavor  flavor
    * protectObjects  防护对象列表
    * status  防火墙状态列表，包括-1：等待支付，0：创建中，1，删除中，2：运行中，3：升级中，4：删除完成：5：冻结中，6：创建失败，7：删除失败，8：冻结失败，9：存储中，10：存储失败，11：升级失败
    * description  描述
    * isOldFirewallInstance  是否为旧引擎，true表示是，false表示不是
    * supportIpv6  是否支持ipv6，true表示是，false表示不是
    * featureToggle  特性开关，boolean值为true表示是，false表示否
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fwInstanceId' => 'fw_instance_id',
            'resourceId' => 'resource_id',
            'name' => 'name',
            'haType' => 'ha_type',
            'chargeMode' => 'charge_mode',
            'serviceType' => 'service_type',
            'engineType' => 'engine_type',
            'flavor' => 'flavor',
            'protectObjects' => 'protect_objects',
            'status' => 'status',
            'description' => 'description',
            'isOldFirewallInstance' => 'is_old_firewall_instance',
            'supportIpv6' => 'support_ipv6',
            'featureToggle' => 'feature_toggle'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fwInstanceId  防火墙id
    * resourceId  资源id
    * name  防火墙名称
    * haType  集群类型
    * chargeMode  计费模式 0：包年/包月 1：按需
    * serviceType  服务类型
    * engineType  引擎类型
    * flavor  flavor
    * protectObjects  防护对象列表
    * status  防火墙状态列表，包括-1：等待支付，0：创建中，1，删除中，2：运行中，3：升级中，4：删除完成：5：冻结中，6：创建失败，7：删除失败，8：冻结失败，9：存储中，10：存储失败，11：升级失败
    * description  描述
    * isOldFirewallInstance  是否为旧引擎，true表示是，false表示不是
    * supportIpv6  是否支持ipv6，true表示是，false表示不是
    * featureToggle  特性开关，boolean值为true表示是，false表示否
    *
    * @var string[]
    */
    protected static $setters = [
            'fwInstanceId' => 'setFwInstanceId',
            'resourceId' => 'setResourceId',
            'name' => 'setName',
            'haType' => 'setHaType',
            'chargeMode' => 'setChargeMode',
            'serviceType' => 'setServiceType',
            'engineType' => 'setEngineType',
            'flavor' => 'setFlavor',
            'protectObjects' => 'setProtectObjects',
            'status' => 'setStatus',
            'description' => 'setDescription',
            'isOldFirewallInstance' => 'setIsOldFirewallInstance',
            'supportIpv6' => 'setSupportIpv6',
            'featureToggle' => 'setFeatureToggle'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fwInstanceId  防火墙id
    * resourceId  资源id
    * name  防火墙名称
    * haType  集群类型
    * chargeMode  计费模式 0：包年/包月 1：按需
    * serviceType  服务类型
    * engineType  引擎类型
    * flavor  flavor
    * protectObjects  防护对象列表
    * status  防火墙状态列表，包括-1：等待支付，0：创建中，1，删除中，2：运行中，3：升级中，4：删除完成：5：冻结中，6：创建失败，7：删除失败，8：冻结失败，9：存储中，10：存储失败，11：升级失败
    * description  描述
    * isOldFirewallInstance  是否为旧引擎，true表示是，false表示不是
    * supportIpv6  是否支持ipv6，true表示是，false表示不是
    * featureToggle  特性开关，boolean值为true表示是，false表示否
    *
    * @var string[]
    */
    protected static $getters = [
            'fwInstanceId' => 'getFwInstanceId',
            'resourceId' => 'getResourceId',
            'name' => 'getName',
            'haType' => 'getHaType',
            'chargeMode' => 'getChargeMode',
            'serviceType' => 'getServiceType',
            'engineType' => 'getEngineType',
            'flavor' => 'getFlavor',
            'protectObjects' => 'getProtectObjects',
            'status' => 'getStatus',
            'description' => 'getDescription',
            'isOldFirewallInstance' => 'getIsOldFirewallInstance',
            'supportIpv6' => 'getSupportIpv6',
            'featureToggle' => 'getFeatureToggle'
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
    const STATUS_MINUS_1 = -1;
    const STATUS_0 = 0;
    const STATUS_1 = 1;
    const STATUS_2 = 2;
    const STATUS_3 = 3;
    const STATUS_4 = 4;
    const STATUS_5 = 5;
    const STATUS_6 = 6;
    const STATUS_7 = 7;
    const STATUS_8 = 8;
    const STATUS_9 = 9;
    const STATUS_10 = 10;
    const STATUS_11 = 11;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_MINUS_1,
            self::STATUS_0,
            self::STATUS_1,
            self::STATUS_2,
            self::STATUS_3,
            self::STATUS_4,
            self::STATUS_5,
            self::STATUS_6,
            self::STATUS_7,
            self::STATUS_8,
            self::STATUS_9,
            self::STATUS_10,
            self::STATUS_11,
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
        $this->container['fwInstanceId'] = isset($data['fwInstanceId']) ? $data['fwInstanceId'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['haType'] = isset($data['haType']) ? $data['haType'] : null;
        $this->container['chargeMode'] = isset($data['chargeMode']) ? $data['chargeMode'] : null;
        $this->container['serviceType'] = isset($data['serviceType']) ? $data['serviceType'] : null;
        $this->container['engineType'] = isset($data['engineType']) ? $data['engineType'] : null;
        $this->container['flavor'] = isset($data['flavor']) ? $data['flavor'] : null;
        $this->container['protectObjects'] = isset($data['protectObjects']) ? $data['protectObjects'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['isOldFirewallInstance'] = isset($data['isOldFirewallInstance']) ? $data['isOldFirewallInstance'] : null;
        $this->container['supportIpv6'] = isset($data['supportIpv6']) ? $data['supportIpv6'] : null;
        $this->container['featureToggle'] = isset($data['featureToggle']) ? $data['featureToggle'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
    * Gets fwInstanceId
    *  防火墙id
    *
    * @return string|null
    */
    public function getFwInstanceId()
    {
        return $this->container['fwInstanceId'];
    }

    /**
    * Sets fwInstanceId
    *
    * @param string|null $fwInstanceId 防火墙id
    *
    * @return $this
    */
    public function setFwInstanceId($fwInstanceId)
    {
        $this->container['fwInstanceId'] = $fwInstanceId;
        return $this;
    }

    /**
    * Gets resourceId
    *  资源id
    *
    * @return string|null
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string|null $resourceId 资源id
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets name
    *  防火墙名称
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
    * @param string|null $name 防火墙名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets haType
    *  集群类型
    *
    * @return int|null
    */
    public function getHaType()
    {
        return $this->container['haType'];
    }

    /**
    * Sets haType
    *
    * @param int|null $haType 集群类型
    *
    * @return $this
    */
    public function setHaType($haType)
    {
        $this->container['haType'] = $haType;
        return $this;
    }

    /**
    * Gets chargeMode
    *  计费模式 0：包年/包月 1：按需
    *
    * @return int|null
    */
    public function getChargeMode()
    {
        return $this->container['chargeMode'];
    }

    /**
    * Sets chargeMode
    *
    * @param int|null $chargeMode 计费模式 0：包年/包月 1：按需
    *
    * @return $this
    */
    public function setChargeMode($chargeMode)
    {
        $this->container['chargeMode'] = $chargeMode;
        return $this;
    }

    /**
    * Gets serviceType
    *  服务类型
    *
    * @return int|null
    */
    public function getServiceType()
    {
        return $this->container['serviceType'];
    }

    /**
    * Sets serviceType
    *
    * @param int|null $serviceType 服务类型
    *
    * @return $this
    */
    public function setServiceType($serviceType)
    {
        $this->container['serviceType'] = $serviceType;
        return $this;
    }

    /**
    * Gets engineType
    *  引擎类型
    *
    * @return string|null
    */
    public function getEngineType()
    {
        return $this->container['engineType'];
    }

    /**
    * Sets engineType
    *
    * @param string|null $engineType 引擎类型
    *
    * @return $this
    */
    public function setEngineType($engineType)
    {
        $this->container['engineType'] = $engineType;
        return $this;
    }

    /**
    * Gets flavor
    *  flavor
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\Flavor|null
    */
    public function getFlavor()
    {
        return $this->container['flavor'];
    }

    /**
    * Sets flavor
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\Flavor|null $flavor flavor
    *
    * @return $this
    */
    public function setFlavor($flavor)
    {
        $this->container['flavor'] = $flavor;
        return $this;
    }

    /**
    * Gets protectObjects
    *  防护对象列表
    *
    * @return \HuaweiCloud\SDK\Cfw\V1\Model\ProtectObjectVO[]|null
    */
    public function getProtectObjects()
    {
        return $this->container['protectObjects'];
    }

    /**
    * Sets protectObjects
    *
    * @param \HuaweiCloud\SDK\Cfw\V1\Model\ProtectObjectVO[]|null $protectObjects 防护对象列表
    *
    * @return $this
    */
    public function setProtectObjects($protectObjects)
    {
        $this->container['protectObjects'] = $protectObjects;
        return $this;
    }

    /**
    * Gets status
    *  防火墙状态列表，包括-1：等待支付，0：创建中，1，删除中，2：运行中，3：升级中，4：删除完成：5：冻结中，6：创建失败，7：删除失败，8：冻结失败，9：存储中，10：存储失败，11：升级失败
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status 防火墙状态列表，包括-1：等待支付，0：创建中，1，删除中，2：运行中，3：升级中，4：删除完成：5：冻结中，6：创建失败，7：删除失败，8：冻结失败，9：存储中，10：存储失败，11：升级失败
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets description
    *  描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets isOldFirewallInstance
    *  是否为旧引擎，true表示是，false表示不是
    *
    * @return bool|null
    */
    public function getIsOldFirewallInstance()
    {
        return $this->container['isOldFirewallInstance'];
    }

    /**
    * Sets isOldFirewallInstance
    *
    * @param bool|null $isOldFirewallInstance 是否为旧引擎，true表示是，false表示不是
    *
    * @return $this
    */
    public function setIsOldFirewallInstance($isOldFirewallInstance)
    {
        $this->container['isOldFirewallInstance'] = $isOldFirewallInstance;
        return $this;
    }

    /**
    * Gets supportIpv6
    *  是否支持ipv6，true表示是，false表示不是
    *
    * @return bool|null
    */
    public function getSupportIpv6()
    {
        return $this->container['supportIpv6'];
    }

    /**
    * Sets supportIpv6
    *
    * @param bool|null $supportIpv6 是否支持ipv6，true表示是，false表示不是
    *
    * @return $this
    */
    public function setSupportIpv6($supportIpv6)
    {
        $this->container['supportIpv6'] = $supportIpv6;
        return $this;
    }

    /**
    * Gets featureToggle
    *  特性开关，boolean值为true表示是，false表示否
    *
    * @return map[string,bool]|null
    */
    public function getFeatureToggle()
    {
        return $this->container['featureToggle'];
    }

    /**
    * Sets featureToggle
    *
    * @param map[string,bool]|null $featureToggle 特性开关，boolean值为true表示是，false表示否
    *
    * @return $this
    */
    public function setFeatureToggle($featureToggle)
    {
        $this->container['featureToggle'] = $featureToggle;
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

