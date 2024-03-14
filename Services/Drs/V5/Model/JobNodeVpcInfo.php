<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class JobNodeVpcInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'JobNodeVpcInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * vpcId  任务实例所在虚拟私有云ID。
    * subnetId  任务实例所在子网ID。
    * customNodeIp  指定创建任务实例IP地址，多个IP端口之间请用“,”英文逗号分隔，目前仅支持设置IPv4地址，获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找子网的网段，选择未被占用的IP 。 - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考查询私有IP列表，选择“device_owner”为空的私有IP。
    * securityGroupId  任务实例所在的安全组ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'vpcId' => 'string',
            'subnetId' => 'string',
            'customNodeIp' => 'string',
            'securityGroupId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * vpcId  任务实例所在虚拟私有云ID。
    * subnetId  任务实例所在子网ID。
    * customNodeIp  指定创建任务实例IP地址，多个IP端口之间请用“,”英文逗号分隔，目前仅支持设置IPv4地址，获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找子网的网段，选择未被占用的IP 。 - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考查询私有IP列表，选择“device_owner”为空的私有IP。
    * securityGroupId  任务实例所在的安全组ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'vpcId' => null,
        'subnetId' => null,
        'customNodeIp' => null,
        'securityGroupId' => null
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
    * vpcId  任务实例所在虚拟私有云ID。
    * subnetId  任务实例所在子网ID。
    * customNodeIp  指定创建任务实例IP地址，多个IP端口之间请用“,”英文逗号分隔，目前仅支持设置IPv4地址，获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找子网的网段，选择未被占用的IP 。 - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考查询私有IP列表，选择“device_owner”为空的私有IP。
    * securityGroupId  任务实例所在的安全组ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'vpcId' => 'vpc_id',
            'subnetId' => 'subnet_id',
            'customNodeIp' => 'custom_node_ip',
            'securityGroupId' => 'security_group_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * vpcId  任务实例所在虚拟私有云ID。
    * subnetId  任务实例所在子网ID。
    * customNodeIp  指定创建任务实例IP地址，多个IP端口之间请用“,”英文逗号分隔，目前仅支持设置IPv4地址，获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找子网的网段，选择未被占用的IP 。 - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考查询私有IP列表，选择“device_owner”为空的私有IP。
    * securityGroupId  任务实例所在的安全组ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'vpcId' => 'setVpcId',
            'subnetId' => 'setSubnetId',
            'customNodeIp' => 'setCustomNodeIp',
            'securityGroupId' => 'setSecurityGroupId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * vpcId  任务实例所在虚拟私有云ID。
    * subnetId  任务实例所在子网ID。
    * customNodeIp  指定创建任务实例IP地址，多个IP端口之间请用“,”英文逗号分隔，目前仅支持设置IPv4地址，获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找子网的网段，选择未被占用的IP 。 - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考查询私有IP列表，选择“device_owner”为空的私有IP。
    * securityGroupId  任务实例所在的安全组ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'vpcId' => 'getVpcId',
            'subnetId' => 'getSubnetId',
            'customNodeIp' => 'getCustomNodeIp',
            'securityGroupId' => 'getSecurityGroupId'
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
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['customNodeIp'] = isset($data['customNodeIp']) ? $data['customNodeIp'] : null;
        $this->container['securityGroupId'] = isset($data['securityGroupId']) ? $data['securityGroupId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['vpcId'] === null) {
            $invalidProperties[] = "'vpcId' can't be null";
        }
        if ($this->container['subnetId'] === null) {
            $invalidProperties[] = "'subnetId' can't be null";
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
    * Gets vpcId
    *  任务实例所在虚拟私有云ID。
    *
    * @return string
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string $vpcId 任务实例所在虚拟私有云ID。
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets subnetId
    *  任务实例所在子网ID。
    *
    * @return string
    */
    public function getSubnetId()
    {
        return $this->container['subnetId'];
    }

    /**
    * Sets subnetId
    *
    * @param string $subnetId 任务实例所在子网ID。
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
        return $this;
    }

    /**
    * Gets customNodeIp
    *  指定创建任务实例IP地址，多个IP端口之间请用“,”英文逗号分隔，目前仅支持设置IPv4地址，获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找子网的网段，选择未被占用的IP 。 - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考查询私有IP列表，选择“device_owner”为空的私有IP。
    *
    * @return string|null
    */
    public function getCustomNodeIp()
    {
        return $this->container['customNodeIp'];
    }

    /**
    * Sets customNodeIp
    *
    * @param string|null $customNodeIp 指定创建任务实例IP地址，多个IP端口之间请用“,”英文逗号分隔，目前仅支持设置IPv4地址，获取方法如下： - 方法1：登录虚拟私有云服务的控制台界面，单击VPC下的子网，进入子网详情页面，查找子网的网段，选择未被占用的IP 。 - 方法2：通过虚拟私有云服务的API接口查询，具体操作可参考查询私有IP列表，选择“device_owner”为空的私有IP。
    *
    * @return $this
    */
    public function setCustomNodeIp($customNodeIp)
    {
        $this->container['customNodeIp'] = $customNodeIp;
        return $this;
    }

    /**
    * Gets securityGroupId
    *  任务实例所在的安全组ID。
    *
    * @return string|null
    */
    public function getSecurityGroupId()
    {
        return $this->container['securityGroupId'];
    }

    /**
    * Sets securityGroupId
    *
    * @param string|null $securityGroupId 任务实例所在的安全组ID。
    *
    * @return $this
    */
    public function setSecurityGroupId($securityGroupId)
    {
        $this->container['securityGroupId'] = $securityGroupId;
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

