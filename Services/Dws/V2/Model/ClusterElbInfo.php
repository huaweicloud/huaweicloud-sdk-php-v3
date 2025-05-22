<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClusterElbInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClusterElbInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  弹性负载均衡ID
    * clusterId  **参数解释**： 集群ID。 **取值范围**： 36位UUID。
    * name  弹性负载均衡名称
    * description  弹性负载均衡描述
    * vipAddress  弹性负载均衡地址
    * vipSubnetId  子网ID
    * tenantId  租户ID
    * type  弹性负载均衡类型。枚举值：Internal,External
    * adminStateUp  弹性负载均衡的管理状态。枚举值：ACTIVE,PENDING_CREATE,ERROR
    * bandwidth  绑定状态： 0为未绑定，1为已绑定
    * vpcId  虚拟私有云ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'clusterId' => 'string',
            'name' => 'string',
            'description' => 'string',
            'vipAddress' => 'string',
            'vipSubnetId' => 'string',
            'tenantId' => 'string',
            'type' => 'string',
            'adminStateUp' => 'bool',
            'bandwidth' => 'int',
            'vpcId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  弹性负载均衡ID
    * clusterId  **参数解释**： 集群ID。 **取值范围**： 36位UUID。
    * name  弹性负载均衡名称
    * description  弹性负载均衡描述
    * vipAddress  弹性负载均衡地址
    * vipSubnetId  子网ID
    * tenantId  租户ID
    * type  弹性负载均衡类型。枚举值：Internal,External
    * adminStateUp  弹性负载均衡的管理状态。枚举值：ACTIVE,PENDING_CREATE,ERROR
    * bandwidth  绑定状态： 0为未绑定，1为已绑定
    * vpcId  虚拟私有云ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'clusterId' => null,
        'name' => null,
        'description' => null,
        'vipAddress' => null,
        'vipSubnetId' => null,
        'tenantId' => null,
        'type' => null,
        'adminStateUp' => null,
        'bandwidth' => 'int32',
        'vpcId' => null
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
    * id  弹性负载均衡ID
    * clusterId  **参数解释**： 集群ID。 **取值范围**： 36位UUID。
    * name  弹性负载均衡名称
    * description  弹性负载均衡描述
    * vipAddress  弹性负载均衡地址
    * vipSubnetId  子网ID
    * tenantId  租户ID
    * type  弹性负载均衡类型。枚举值：Internal,External
    * adminStateUp  弹性负载均衡的管理状态。枚举值：ACTIVE,PENDING_CREATE,ERROR
    * bandwidth  绑定状态： 0为未绑定，1为已绑定
    * vpcId  虚拟私有云ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'clusterId' => 'cluster_id',
            'name' => 'name',
            'description' => 'description',
            'vipAddress' => 'vip_address',
            'vipSubnetId' => 'vip_subnet_id',
            'tenantId' => 'tenant_id',
            'type' => 'type',
            'adminStateUp' => 'admin_state_up',
            'bandwidth' => 'bandwidth',
            'vpcId' => 'vpc_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  弹性负载均衡ID
    * clusterId  **参数解释**： 集群ID。 **取值范围**： 36位UUID。
    * name  弹性负载均衡名称
    * description  弹性负载均衡描述
    * vipAddress  弹性负载均衡地址
    * vipSubnetId  子网ID
    * tenantId  租户ID
    * type  弹性负载均衡类型。枚举值：Internal,External
    * adminStateUp  弹性负载均衡的管理状态。枚举值：ACTIVE,PENDING_CREATE,ERROR
    * bandwidth  绑定状态： 0为未绑定，1为已绑定
    * vpcId  虚拟私有云ID
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'clusterId' => 'setClusterId',
            'name' => 'setName',
            'description' => 'setDescription',
            'vipAddress' => 'setVipAddress',
            'vipSubnetId' => 'setVipSubnetId',
            'tenantId' => 'setTenantId',
            'type' => 'setType',
            'adminStateUp' => 'setAdminStateUp',
            'bandwidth' => 'setBandwidth',
            'vpcId' => 'setVpcId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  弹性负载均衡ID
    * clusterId  **参数解释**： 集群ID。 **取值范围**： 36位UUID。
    * name  弹性负载均衡名称
    * description  弹性负载均衡描述
    * vipAddress  弹性负载均衡地址
    * vipSubnetId  子网ID
    * tenantId  租户ID
    * type  弹性负载均衡类型。枚举值：Internal,External
    * adminStateUp  弹性负载均衡的管理状态。枚举值：ACTIVE,PENDING_CREATE,ERROR
    * bandwidth  绑定状态： 0为未绑定，1为已绑定
    * vpcId  虚拟私有云ID
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'clusterId' => 'getClusterId',
            'name' => 'getName',
            'description' => 'getDescription',
            'vipAddress' => 'getVipAddress',
            'vipSubnetId' => 'getVipSubnetId',
            'tenantId' => 'getTenantId',
            'type' => 'getType',
            'adminStateUp' => 'getAdminStateUp',
            'bandwidth' => 'getBandwidth',
            'vpcId' => 'getVpcId'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['vipAddress'] = isset($data['vipAddress']) ? $data['vipAddress'] : null;
        $this->container['vipSubnetId'] = isset($data['vipSubnetId']) ? $data['vipSubnetId'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['bandwidth'] = isset($data['bandwidth']) ? $data['bandwidth'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
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
    * Gets id
    *  弹性负载均衡ID
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 弹性负载均衡ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets clusterId
    *  **参数解释**： 集群ID。 **取值范围**： 36位UUID。
    *
    * @return string|null
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string|null $clusterId **参数解释**： 集群ID。 **取值范围**： 36位UUID。
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets name
    *  弹性负载均衡名称
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
    * @param string|null $name 弹性负载均衡名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  弹性负载均衡描述
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
    * @param string|null $description 弹性负载均衡描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets vipAddress
    *  弹性负载均衡地址
    *
    * @return string|null
    */
    public function getVipAddress()
    {
        return $this->container['vipAddress'];
    }

    /**
    * Sets vipAddress
    *
    * @param string|null $vipAddress 弹性负载均衡地址
    *
    * @return $this
    */
    public function setVipAddress($vipAddress)
    {
        $this->container['vipAddress'] = $vipAddress;
        return $this;
    }

    /**
    * Gets vipSubnetId
    *  子网ID
    *
    * @return string|null
    */
    public function getVipSubnetId()
    {
        return $this->container['vipSubnetId'];
    }

    /**
    * Sets vipSubnetId
    *
    * @param string|null $vipSubnetId 子网ID
    *
    * @return $this
    */
    public function setVipSubnetId($vipSubnetId)
    {
        $this->container['vipSubnetId'] = $vipSubnetId;
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
    * Gets type
    *  弹性负载均衡类型。枚举值：Internal,External
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 弹性负载均衡类型。枚举值：Internal,External
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets adminStateUp
    *  弹性负载均衡的管理状态。枚举值：ACTIVE,PENDING_CREATE,ERROR
    *
    * @return bool|null
    */
    public function getAdminStateUp()
    {
        return $this->container['adminStateUp'];
    }

    /**
    * Sets adminStateUp
    *
    * @param bool|null $adminStateUp 弹性负载均衡的管理状态。枚举值：ACTIVE,PENDING_CREATE,ERROR
    *
    * @return $this
    */
    public function setAdminStateUp($adminStateUp)
    {
        $this->container['adminStateUp'] = $adminStateUp;
        return $this;
    }

    /**
    * Gets bandwidth
    *  绑定状态： 0为未绑定，1为已绑定
    *
    * @return int|null
    */
    public function getBandwidth()
    {
        return $this->container['bandwidth'];
    }

    /**
    * Sets bandwidth
    *
    * @param int|null $bandwidth 绑定状态： 0为未绑定，1为已绑定
    *
    * @return $this
    */
    public function setBandwidth($bandwidth)
    {
        $this->container['bandwidth'] = $bandwidth;
        return $this;
    }

    /**
    * Gets vpcId
    *  虚拟私有云ID
    *
    * @return string|null
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string|null $vpcId 虚拟私有云ID
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
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

