<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ServerLimits implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ServerLimits';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * maxImageMeta  镜像元数据最大的长度。
    * maxPersonality  可注入文件的最大个数。
    * maxPersonalitySize  注入文件内容的最大长度（单位：Byte）。
    * maxSecurityGroupRules  安全组中安全组规则最大的配置个数。   > 说明：  - 具体配额限制请以VPC配额限制为准。
    * maxSecurityGroups  安全组最大使用个数。  > 说明：  - 具体配额限制请以VPC配额限制为准。
    * maxServerGroupMembers  服务器组中的最大虚拟机数。
    * maxServerGroups  服务器组的最大个数。
    * maxServerMeta  可输入元数据的最大长度。
    * maxTotalCores  CPU核数最大申请数量。
    * maxTotalFloatingIps  最大的浮动IP使用个数。
    * maxTotalInstances  云服务器最大申请数量。
    * maxTotalKeypairs  可以申请的SSH密钥对最大数量。
    * maxTotalRamSize  内存最大申请容量（单位：MB）。
    * totalCoresUsed  当前已使用CPU核数。
    * totalFloatingIpsUsed  当前浮动IP使用个数。
    * totalInstancesUsed  当前云服务器使用个数。
    * totalRamUsed  当前内存使用容量（单位：MB）。
    * totalSecurityGroupsUsed  当前安全组使用个数。
    * totalServerGroupsUsed  已使用的服务器组个数。
    * maxTotalSpotInstances  竞价实例的最大申请数量。
    * maxTotalSpotCores  竞价实例的CPU核数最大申请数量。
    * maxTotalSpotRamSize  竞价实例的内存最大申请容量（单位：MB）。
    * totalSpotInstancesUsed  当前竞价实例的使用个数。
    * totalSpotCoresUsed  当前竞价实例已使用的CPU核数。
    * totalSpotRamUsed  当前竞价实例的内存使用容量（单位：MB）。
    * limitByFlavor  使用该flavor可以申请的弹性云服务器数量。  值为“-1”时，表示无数量限制。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'maxImageMeta' => 'int',
            'maxPersonality' => 'int',
            'maxPersonalitySize' => 'int',
            'maxSecurityGroupRules' => 'int',
            'maxSecurityGroups' => 'int',
            'maxServerGroupMembers' => 'int',
            'maxServerGroups' => 'int',
            'maxServerMeta' => 'int',
            'maxTotalCores' => 'int',
            'maxTotalFloatingIps' => 'int',
            'maxTotalInstances' => 'int',
            'maxTotalKeypairs' => 'int',
            'maxTotalRamSize' => 'int',
            'totalCoresUsed' => 'int',
            'totalFloatingIpsUsed' => 'int',
            'totalInstancesUsed' => 'int',
            'totalRamUsed' => 'int',
            'totalSecurityGroupsUsed' => 'int',
            'totalServerGroupsUsed' => 'int',
            'maxTotalSpotInstances' => 'int',
            'maxTotalSpotCores' => 'int',
            'maxTotalSpotRamSize' => 'int',
            'totalSpotInstancesUsed' => 'int',
            'totalSpotCoresUsed' => 'int',
            'totalSpotRamUsed' => 'int',
            'limitByFlavor' => '\HuaweiCloud\SDK\Ecs\V2\Model\ProjectFlavorLimit[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * maxImageMeta  镜像元数据最大的长度。
    * maxPersonality  可注入文件的最大个数。
    * maxPersonalitySize  注入文件内容的最大长度（单位：Byte）。
    * maxSecurityGroupRules  安全组中安全组规则最大的配置个数。   > 说明：  - 具体配额限制请以VPC配额限制为准。
    * maxSecurityGroups  安全组最大使用个数。  > 说明：  - 具体配额限制请以VPC配额限制为准。
    * maxServerGroupMembers  服务器组中的最大虚拟机数。
    * maxServerGroups  服务器组的最大个数。
    * maxServerMeta  可输入元数据的最大长度。
    * maxTotalCores  CPU核数最大申请数量。
    * maxTotalFloatingIps  最大的浮动IP使用个数。
    * maxTotalInstances  云服务器最大申请数量。
    * maxTotalKeypairs  可以申请的SSH密钥对最大数量。
    * maxTotalRamSize  内存最大申请容量（单位：MB）。
    * totalCoresUsed  当前已使用CPU核数。
    * totalFloatingIpsUsed  当前浮动IP使用个数。
    * totalInstancesUsed  当前云服务器使用个数。
    * totalRamUsed  当前内存使用容量（单位：MB）。
    * totalSecurityGroupsUsed  当前安全组使用个数。
    * totalServerGroupsUsed  已使用的服务器组个数。
    * maxTotalSpotInstances  竞价实例的最大申请数量。
    * maxTotalSpotCores  竞价实例的CPU核数最大申请数量。
    * maxTotalSpotRamSize  竞价实例的内存最大申请容量（单位：MB）。
    * totalSpotInstancesUsed  当前竞价实例的使用个数。
    * totalSpotCoresUsed  当前竞价实例已使用的CPU核数。
    * totalSpotRamUsed  当前竞价实例的内存使用容量（单位：MB）。
    * limitByFlavor  使用该flavor可以申请的弹性云服务器数量。  值为“-1”时，表示无数量限制。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'maxImageMeta' => 'int32',
        'maxPersonality' => 'int32',
        'maxPersonalitySize' => 'int32',
        'maxSecurityGroupRules' => 'int32',
        'maxSecurityGroups' => 'int32',
        'maxServerGroupMembers' => 'int32',
        'maxServerGroups' => 'int32',
        'maxServerMeta' => 'int32',
        'maxTotalCores' => 'int32',
        'maxTotalFloatingIps' => 'int32',
        'maxTotalInstances' => 'int32',
        'maxTotalKeypairs' => 'int32',
        'maxTotalRamSize' => 'int32',
        'totalCoresUsed' => 'int32',
        'totalFloatingIpsUsed' => 'int32',
        'totalInstancesUsed' => 'int32',
        'totalRamUsed' => 'int32',
        'totalSecurityGroupsUsed' => 'int32',
        'totalServerGroupsUsed' => 'int32',
        'maxTotalSpotInstances' => 'int32',
        'maxTotalSpotCores' => 'int32',
        'maxTotalSpotRamSize' => 'int32',
        'totalSpotInstancesUsed' => 'int32',
        'totalSpotCoresUsed' => 'int32',
        'totalSpotRamUsed' => 'int32',
        'limitByFlavor' => null
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
    * maxImageMeta  镜像元数据最大的长度。
    * maxPersonality  可注入文件的最大个数。
    * maxPersonalitySize  注入文件内容的最大长度（单位：Byte）。
    * maxSecurityGroupRules  安全组中安全组规则最大的配置个数。   > 说明：  - 具体配额限制请以VPC配额限制为准。
    * maxSecurityGroups  安全组最大使用个数。  > 说明：  - 具体配额限制请以VPC配额限制为准。
    * maxServerGroupMembers  服务器组中的最大虚拟机数。
    * maxServerGroups  服务器组的最大个数。
    * maxServerMeta  可输入元数据的最大长度。
    * maxTotalCores  CPU核数最大申请数量。
    * maxTotalFloatingIps  最大的浮动IP使用个数。
    * maxTotalInstances  云服务器最大申请数量。
    * maxTotalKeypairs  可以申请的SSH密钥对最大数量。
    * maxTotalRamSize  内存最大申请容量（单位：MB）。
    * totalCoresUsed  当前已使用CPU核数。
    * totalFloatingIpsUsed  当前浮动IP使用个数。
    * totalInstancesUsed  当前云服务器使用个数。
    * totalRamUsed  当前内存使用容量（单位：MB）。
    * totalSecurityGroupsUsed  当前安全组使用个数。
    * totalServerGroupsUsed  已使用的服务器组个数。
    * maxTotalSpotInstances  竞价实例的最大申请数量。
    * maxTotalSpotCores  竞价实例的CPU核数最大申请数量。
    * maxTotalSpotRamSize  竞价实例的内存最大申请容量（单位：MB）。
    * totalSpotInstancesUsed  当前竞价实例的使用个数。
    * totalSpotCoresUsed  当前竞价实例已使用的CPU核数。
    * totalSpotRamUsed  当前竞价实例的内存使用容量（单位：MB）。
    * limitByFlavor  使用该flavor可以申请的弹性云服务器数量。  值为“-1”时，表示无数量限制。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'maxImageMeta' => 'maxImageMeta',
            'maxPersonality' => 'maxPersonality',
            'maxPersonalitySize' => 'maxPersonalitySize',
            'maxSecurityGroupRules' => 'maxSecurityGroupRules',
            'maxSecurityGroups' => 'maxSecurityGroups',
            'maxServerGroupMembers' => 'maxServerGroupMembers',
            'maxServerGroups' => 'maxServerGroups',
            'maxServerMeta' => 'maxServerMeta',
            'maxTotalCores' => 'maxTotalCores',
            'maxTotalFloatingIps' => 'maxTotalFloatingIps',
            'maxTotalInstances' => 'maxTotalInstances',
            'maxTotalKeypairs' => 'maxTotalKeypairs',
            'maxTotalRamSize' => 'maxTotalRAMSize',
            'totalCoresUsed' => 'totalCoresUsed',
            'totalFloatingIpsUsed' => 'totalFloatingIpsUsed',
            'totalInstancesUsed' => 'totalInstancesUsed',
            'totalRamUsed' => 'totalRAMUsed',
            'totalSecurityGroupsUsed' => 'totalSecurityGroupsUsed',
            'totalServerGroupsUsed' => 'totalServerGroupsUsed',
            'maxTotalSpotInstances' => 'maxTotalSpotInstances',
            'maxTotalSpotCores' => 'maxTotalSpotCores',
            'maxTotalSpotRamSize' => 'maxTotalSpotRAMSize',
            'totalSpotInstancesUsed' => 'totalSpotInstancesUsed',
            'totalSpotCoresUsed' => 'totalSpotCoresUsed',
            'totalSpotRamUsed' => 'totalSpotRAMUsed',
            'limitByFlavor' => 'limit_by_flavor'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * maxImageMeta  镜像元数据最大的长度。
    * maxPersonality  可注入文件的最大个数。
    * maxPersonalitySize  注入文件内容的最大长度（单位：Byte）。
    * maxSecurityGroupRules  安全组中安全组规则最大的配置个数。   > 说明：  - 具体配额限制请以VPC配额限制为准。
    * maxSecurityGroups  安全组最大使用个数。  > 说明：  - 具体配额限制请以VPC配额限制为准。
    * maxServerGroupMembers  服务器组中的最大虚拟机数。
    * maxServerGroups  服务器组的最大个数。
    * maxServerMeta  可输入元数据的最大长度。
    * maxTotalCores  CPU核数最大申请数量。
    * maxTotalFloatingIps  最大的浮动IP使用个数。
    * maxTotalInstances  云服务器最大申请数量。
    * maxTotalKeypairs  可以申请的SSH密钥对最大数量。
    * maxTotalRamSize  内存最大申请容量（单位：MB）。
    * totalCoresUsed  当前已使用CPU核数。
    * totalFloatingIpsUsed  当前浮动IP使用个数。
    * totalInstancesUsed  当前云服务器使用个数。
    * totalRamUsed  当前内存使用容量（单位：MB）。
    * totalSecurityGroupsUsed  当前安全组使用个数。
    * totalServerGroupsUsed  已使用的服务器组个数。
    * maxTotalSpotInstances  竞价实例的最大申请数量。
    * maxTotalSpotCores  竞价实例的CPU核数最大申请数量。
    * maxTotalSpotRamSize  竞价实例的内存最大申请容量（单位：MB）。
    * totalSpotInstancesUsed  当前竞价实例的使用个数。
    * totalSpotCoresUsed  当前竞价实例已使用的CPU核数。
    * totalSpotRamUsed  当前竞价实例的内存使用容量（单位：MB）。
    * limitByFlavor  使用该flavor可以申请的弹性云服务器数量。  值为“-1”时，表示无数量限制。
    *
    * @var string[]
    */
    protected static $setters = [
            'maxImageMeta' => 'setMaxImageMeta',
            'maxPersonality' => 'setMaxPersonality',
            'maxPersonalitySize' => 'setMaxPersonalitySize',
            'maxSecurityGroupRules' => 'setMaxSecurityGroupRules',
            'maxSecurityGroups' => 'setMaxSecurityGroups',
            'maxServerGroupMembers' => 'setMaxServerGroupMembers',
            'maxServerGroups' => 'setMaxServerGroups',
            'maxServerMeta' => 'setMaxServerMeta',
            'maxTotalCores' => 'setMaxTotalCores',
            'maxTotalFloatingIps' => 'setMaxTotalFloatingIps',
            'maxTotalInstances' => 'setMaxTotalInstances',
            'maxTotalKeypairs' => 'setMaxTotalKeypairs',
            'maxTotalRamSize' => 'setMaxTotalRamSize',
            'totalCoresUsed' => 'setTotalCoresUsed',
            'totalFloatingIpsUsed' => 'setTotalFloatingIpsUsed',
            'totalInstancesUsed' => 'setTotalInstancesUsed',
            'totalRamUsed' => 'setTotalRamUsed',
            'totalSecurityGroupsUsed' => 'setTotalSecurityGroupsUsed',
            'totalServerGroupsUsed' => 'setTotalServerGroupsUsed',
            'maxTotalSpotInstances' => 'setMaxTotalSpotInstances',
            'maxTotalSpotCores' => 'setMaxTotalSpotCores',
            'maxTotalSpotRamSize' => 'setMaxTotalSpotRamSize',
            'totalSpotInstancesUsed' => 'setTotalSpotInstancesUsed',
            'totalSpotCoresUsed' => 'setTotalSpotCoresUsed',
            'totalSpotRamUsed' => 'setTotalSpotRamUsed',
            'limitByFlavor' => 'setLimitByFlavor'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * maxImageMeta  镜像元数据最大的长度。
    * maxPersonality  可注入文件的最大个数。
    * maxPersonalitySize  注入文件内容的最大长度（单位：Byte）。
    * maxSecurityGroupRules  安全组中安全组规则最大的配置个数。   > 说明：  - 具体配额限制请以VPC配额限制为准。
    * maxSecurityGroups  安全组最大使用个数。  > 说明：  - 具体配额限制请以VPC配额限制为准。
    * maxServerGroupMembers  服务器组中的最大虚拟机数。
    * maxServerGroups  服务器组的最大个数。
    * maxServerMeta  可输入元数据的最大长度。
    * maxTotalCores  CPU核数最大申请数量。
    * maxTotalFloatingIps  最大的浮动IP使用个数。
    * maxTotalInstances  云服务器最大申请数量。
    * maxTotalKeypairs  可以申请的SSH密钥对最大数量。
    * maxTotalRamSize  内存最大申请容量（单位：MB）。
    * totalCoresUsed  当前已使用CPU核数。
    * totalFloatingIpsUsed  当前浮动IP使用个数。
    * totalInstancesUsed  当前云服务器使用个数。
    * totalRamUsed  当前内存使用容量（单位：MB）。
    * totalSecurityGroupsUsed  当前安全组使用个数。
    * totalServerGroupsUsed  已使用的服务器组个数。
    * maxTotalSpotInstances  竞价实例的最大申请数量。
    * maxTotalSpotCores  竞价实例的CPU核数最大申请数量。
    * maxTotalSpotRamSize  竞价实例的内存最大申请容量（单位：MB）。
    * totalSpotInstancesUsed  当前竞价实例的使用个数。
    * totalSpotCoresUsed  当前竞价实例已使用的CPU核数。
    * totalSpotRamUsed  当前竞价实例的内存使用容量（单位：MB）。
    * limitByFlavor  使用该flavor可以申请的弹性云服务器数量。  值为“-1”时，表示无数量限制。
    *
    * @var string[]
    */
    protected static $getters = [
            'maxImageMeta' => 'getMaxImageMeta',
            'maxPersonality' => 'getMaxPersonality',
            'maxPersonalitySize' => 'getMaxPersonalitySize',
            'maxSecurityGroupRules' => 'getMaxSecurityGroupRules',
            'maxSecurityGroups' => 'getMaxSecurityGroups',
            'maxServerGroupMembers' => 'getMaxServerGroupMembers',
            'maxServerGroups' => 'getMaxServerGroups',
            'maxServerMeta' => 'getMaxServerMeta',
            'maxTotalCores' => 'getMaxTotalCores',
            'maxTotalFloatingIps' => 'getMaxTotalFloatingIps',
            'maxTotalInstances' => 'getMaxTotalInstances',
            'maxTotalKeypairs' => 'getMaxTotalKeypairs',
            'maxTotalRamSize' => 'getMaxTotalRamSize',
            'totalCoresUsed' => 'getTotalCoresUsed',
            'totalFloatingIpsUsed' => 'getTotalFloatingIpsUsed',
            'totalInstancesUsed' => 'getTotalInstancesUsed',
            'totalRamUsed' => 'getTotalRamUsed',
            'totalSecurityGroupsUsed' => 'getTotalSecurityGroupsUsed',
            'totalServerGroupsUsed' => 'getTotalServerGroupsUsed',
            'maxTotalSpotInstances' => 'getMaxTotalSpotInstances',
            'maxTotalSpotCores' => 'getMaxTotalSpotCores',
            'maxTotalSpotRamSize' => 'getMaxTotalSpotRamSize',
            'totalSpotInstancesUsed' => 'getTotalSpotInstancesUsed',
            'totalSpotCoresUsed' => 'getTotalSpotCoresUsed',
            'totalSpotRamUsed' => 'getTotalSpotRamUsed',
            'limitByFlavor' => 'getLimitByFlavor'
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
        $this->container['maxImageMeta'] = isset($data['maxImageMeta']) ? $data['maxImageMeta'] : null;
        $this->container['maxPersonality'] = isset($data['maxPersonality']) ? $data['maxPersonality'] : null;
        $this->container['maxPersonalitySize'] = isset($data['maxPersonalitySize']) ? $data['maxPersonalitySize'] : null;
        $this->container['maxSecurityGroupRules'] = isset($data['maxSecurityGroupRules']) ? $data['maxSecurityGroupRules'] : null;
        $this->container['maxSecurityGroups'] = isset($data['maxSecurityGroups']) ? $data['maxSecurityGroups'] : null;
        $this->container['maxServerGroupMembers'] = isset($data['maxServerGroupMembers']) ? $data['maxServerGroupMembers'] : null;
        $this->container['maxServerGroups'] = isset($data['maxServerGroups']) ? $data['maxServerGroups'] : null;
        $this->container['maxServerMeta'] = isset($data['maxServerMeta']) ? $data['maxServerMeta'] : null;
        $this->container['maxTotalCores'] = isset($data['maxTotalCores']) ? $data['maxTotalCores'] : null;
        $this->container['maxTotalFloatingIps'] = isset($data['maxTotalFloatingIps']) ? $data['maxTotalFloatingIps'] : null;
        $this->container['maxTotalInstances'] = isset($data['maxTotalInstances']) ? $data['maxTotalInstances'] : null;
        $this->container['maxTotalKeypairs'] = isset($data['maxTotalKeypairs']) ? $data['maxTotalKeypairs'] : null;
        $this->container['maxTotalRamSize'] = isset($data['maxTotalRamSize']) ? $data['maxTotalRamSize'] : null;
        $this->container['totalCoresUsed'] = isset($data['totalCoresUsed']) ? $data['totalCoresUsed'] : null;
        $this->container['totalFloatingIpsUsed'] = isset($data['totalFloatingIpsUsed']) ? $data['totalFloatingIpsUsed'] : null;
        $this->container['totalInstancesUsed'] = isset($data['totalInstancesUsed']) ? $data['totalInstancesUsed'] : null;
        $this->container['totalRamUsed'] = isset($data['totalRamUsed']) ? $data['totalRamUsed'] : null;
        $this->container['totalSecurityGroupsUsed'] = isset($data['totalSecurityGroupsUsed']) ? $data['totalSecurityGroupsUsed'] : null;
        $this->container['totalServerGroupsUsed'] = isset($data['totalServerGroupsUsed']) ? $data['totalServerGroupsUsed'] : null;
        $this->container['maxTotalSpotInstances'] = isset($data['maxTotalSpotInstances']) ? $data['maxTotalSpotInstances'] : null;
        $this->container['maxTotalSpotCores'] = isset($data['maxTotalSpotCores']) ? $data['maxTotalSpotCores'] : null;
        $this->container['maxTotalSpotRamSize'] = isset($data['maxTotalSpotRamSize']) ? $data['maxTotalSpotRamSize'] : null;
        $this->container['totalSpotInstancesUsed'] = isset($data['totalSpotInstancesUsed']) ? $data['totalSpotInstancesUsed'] : null;
        $this->container['totalSpotCoresUsed'] = isset($data['totalSpotCoresUsed']) ? $data['totalSpotCoresUsed'] : null;
        $this->container['totalSpotRamUsed'] = isset($data['totalSpotRamUsed']) ? $data['totalSpotRamUsed'] : null;
        $this->container['limitByFlavor'] = isset($data['limitByFlavor']) ? $data['limitByFlavor'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['maxImageMeta'] === null) {
            $invalidProperties[] = "'maxImageMeta' can't be null";
        }
        if ($this->container['maxPersonality'] === null) {
            $invalidProperties[] = "'maxPersonality' can't be null";
        }
        if ($this->container['maxPersonalitySize'] === null) {
            $invalidProperties[] = "'maxPersonalitySize' can't be null";
        }
        if ($this->container['maxSecurityGroupRules'] === null) {
            $invalidProperties[] = "'maxSecurityGroupRules' can't be null";
        }
        if ($this->container['maxSecurityGroups'] === null) {
            $invalidProperties[] = "'maxSecurityGroups' can't be null";
        }
        if ($this->container['maxServerGroupMembers'] === null) {
            $invalidProperties[] = "'maxServerGroupMembers' can't be null";
        }
        if ($this->container['maxServerGroups'] === null) {
            $invalidProperties[] = "'maxServerGroups' can't be null";
        }
        if ($this->container['maxServerMeta'] === null) {
            $invalidProperties[] = "'maxServerMeta' can't be null";
        }
        if ($this->container['maxTotalCores'] === null) {
            $invalidProperties[] = "'maxTotalCores' can't be null";
        }
        if ($this->container['maxTotalFloatingIps'] === null) {
            $invalidProperties[] = "'maxTotalFloatingIps' can't be null";
        }
        if ($this->container['maxTotalInstances'] === null) {
            $invalidProperties[] = "'maxTotalInstances' can't be null";
        }
        if ($this->container['maxTotalKeypairs'] === null) {
            $invalidProperties[] = "'maxTotalKeypairs' can't be null";
        }
        if ($this->container['maxTotalRamSize'] === null) {
            $invalidProperties[] = "'maxTotalRamSize' can't be null";
        }
        if ($this->container['totalCoresUsed'] === null) {
            $invalidProperties[] = "'totalCoresUsed' can't be null";
        }
        if ($this->container['totalFloatingIpsUsed'] === null) {
            $invalidProperties[] = "'totalFloatingIpsUsed' can't be null";
        }
        if ($this->container['totalInstancesUsed'] === null) {
            $invalidProperties[] = "'totalInstancesUsed' can't be null";
        }
        if ($this->container['totalRamUsed'] === null) {
            $invalidProperties[] = "'totalRamUsed' can't be null";
        }
        if ($this->container['totalSecurityGroupsUsed'] === null) {
            $invalidProperties[] = "'totalSecurityGroupsUsed' can't be null";
        }
        if ($this->container['totalServerGroupsUsed'] === null) {
            $invalidProperties[] = "'totalServerGroupsUsed' can't be null";
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
    * Gets maxImageMeta
    *  镜像元数据最大的长度。
    *
    * @return int
    */
    public function getMaxImageMeta()
    {
        return $this->container['maxImageMeta'];
    }

    /**
    * Sets maxImageMeta
    *
    * @param int $maxImageMeta 镜像元数据最大的长度。
    *
    * @return $this
    */
    public function setMaxImageMeta($maxImageMeta)
    {
        $this->container['maxImageMeta'] = $maxImageMeta;
        return $this;
    }

    /**
    * Gets maxPersonality
    *  可注入文件的最大个数。
    *
    * @return int
    */
    public function getMaxPersonality()
    {
        return $this->container['maxPersonality'];
    }

    /**
    * Sets maxPersonality
    *
    * @param int $maxPersonality 可注入文件的最大个数。
    *
    * @return $this
    */
    public function setMaxPersonality($maxPersonality)
    {
        $this->container['maxPersonality'] = $maxPersonality;
        return $this;
    }

    /**
    * Gets maxPersonalitySize
    *  注入文件内容的最大长度（单位：Byte）。
    *
    * @return int
    */
    public function getMaxPersonalitySize()
    {
        return $this->container['maxPersonalitySize'];
    }

    /**
    * Sets maxPersonalitySize
    *
    * @param int $maxPersonalitySize 注入文件内容的最大长度（单位：Byte）。
    *
    * @return $this
    */
    public function setMaxPersonalitySize($maxPersonalitySize)
    {
        $this->container['maxPersonalitySize'] = $maxPersonalitySize;
        return $this;
    }

    /**
    * Gets maxSecurityGroupRules
    *  安全组中安全组规则最大的配置个数。   > 说明：  - 具体配额限制请以VPC配额限制为准。
    *
    * @return int
    */
    public function getMaxSecurityGroupRules()
    {
        return $this->container['maxSecurityGroupRules'];
    }

    /**
    * Sets maxSecurityGroupRules
    *
    * @param int $maxSecurityGroupRules 安全组中安全组规则最大的配置个数。   > 说明：  - 具体配额限制请以VPC配额限制为准。
    *
    * @return $this
    */
    public function setMaxSecurityGroupRules($maxSecurityGroupRules)
    {
        $this->container['maxSecurityGroupRules'] = $maxSecurityGroupRules;
        return $this;
    }

    /**
    * Gets maxSecurityGroups
    *  安全组最大使用个数。  > 说明：  - 具体配额限制请以VPC配额限制为准。
    *
    * @return int
    */
    public function getMaxSecurityGroups()
    {
        return $this->container['maxSecurityGroups'];
    }

    /**
    * Sets maxSecurityGroups
    *
    * @param int $maxSecurityGroups 安全组最大使用个数。  > 说明：  - 具体配额限制请以VPC配额限制为准。
    *
    * @return $this
    */
    public function setMaxSecurityGroups($maxSecurityGroups)
    {
        $this->container['maxSecurityGroups'] = $maxSecurityGroups;
        return $this;
    }

    /**
    * Gets maxServerGroupMembers
    *  服务器组中的最大虚拟机数。
    *
    * @return int
    */
    public function getMaxServerGroupMembers()
    {
        return $this->container['maxServerGroupMembers'];
    }

    /**
    * Sets maxServerGroupMembers
    *
    * @param int $maxServerGroupMembers 服务器组中的最大虚拟机数。
    *
    * @return $this
    */
    public function setMaxServerGroupMembers($maxServerGroupMembers)
    {
        $this->container['maxServerGroupMembers'] = $maxServerGroupMembers;
        return $this;
    }

    /**
    * Gets maxServerGroups
    *  服务器组的最大个数。
    *
    * @return int
    */
    public function getMaxServerGroups()
    {
        return $this->container['maxServerGroups'];
    }

    /**
    * Sets maxServerGroups
    *
    * @param int $maxServerGroups 服务器组的最大个数。
    *
    * @return $this
    */
    public function setMaxServerGroups($maxServerGroups)
    {
        $this->container['maxServerGroups'] = $maxServerGroups;
        return $this;
    }

    /**
    * Gets maxServerMeta
    *  可输入元数据的最大长度。
    *
    * @return int
    */
    public function getMaxServerMeta()
    {
        return $this->container['maxServerMeta'];
    }

    /**
    * Sets maxServerMeta
    *
    * @param int $maxServerMeta 可输入元数据的最大长度。
    *
    * @return $this
    */
    public function setMaxServerMeta($maxServerMeta)
    {
        $this->container['maxServerMeta'] = $maxServerMeta;
        return $this;
    }

    /**
    * Gets maxTotalCores
    *  CPU核数最大申请数量。
    *
    * @return int
    */
    public function getMaxTotalCores()
    {
        return $this->container['maxTotalCores'];
    }

    /**
    * Sets maxTotalCores
    *
    * @param int $maxTotalCores CPU核数最大申请数量。
    *
    * @return $this
    */
    public function setMaxTotalCores($maxTotalCores)
    {
        $this->container['maxTotalCores'] = $maxTotalCores;
        return $this;
    }

    /**
    * Gets maxTotalFloatingIps
    *  最大的浮动IP使用个数。
    *
    * @return int
    */
    public function getMaxTotalFloatingIps()
    {
        return $this->container['maxTotalFloatingIps'];
    }

    /**
    * Sets maxTotalFloatingIps
    *
    * @param int $maxTotalFloatingIps 最大的浮动IP使用个数。
    *
    * @return $this
    */
    public function setMaxTotalFloatingIps($maxTotalFloatingIps)
    {
        $this->container['maxTotalFloatingIps'] = $maxTotalFloatingIps;
        return $this;
    }

    /**
    * Gets maxTotalInstances
    *  云服务器最大申请数量。
    *
    * @return int
    */
    public function getMaxTotalInstances()
    {
        return $this->container['maxTotalInstances'];
    }

    /**
    * Sets maxTotalInstances
    *
    * @param int $maxTotalInstances 云服务器最大申请数量。
    *
    * @return $this
    */
    public function setMaxTotalInstances($maxTotalInstances)
    {
        $this->container['maxTotalInstances'] = $maxTotalInstances;
        return $this;
    }

    /**
    * Gets maxTotalKeypairs
    *  可以申请的SSH密钥对最大数量。
    *
    * @return int
    */
    public function getMaxTotalKeypairs()
    {
        return $this->container['maxTotalKeypairs'];
    }

    /**
    * Sets maxTotalKeypairs
    *
    * @param int $maxTotalKeypairs 可以申请的SSH密钥对最大数量。
    *
    * @return $this
    */
    public function setMaxTotalKeypairs($maxTotalKeypairs)
    {
        $this->container['maxTotalKeypairs'] = $maxTotalKeypairs;
        return $this;
    }

    /**
    * Gets maxTotalRamSize
    *  内存最大申请容量（单位：MB）。
    *
    * @return int
    */
    public function getMaxTotalRamSize()
    {
        return $this->container['maxTotalRamSize'];
    }

    /**
    * Sets maxTotalRamSize
    *
    * @param int $maxTotalRamSize 内存最大申请容量（单位：MB）。
    *
    * @return $this
    */
    public function setMaxTotalRamSize($maxTotalRamSize)
    {
        $this->container['maxTotalRamSize'] = $maxTotalRamSize;
        return $this;
    }

    /**
    * Gets totalCoresUsed
    *  当前已使用CPU核数。
    *
    * @return int
    */
    public function getTotalCoresUsed()
    {
        return $this->container['totalCoresUsed'];
    }

    /**
    * Sets totalCoresUsed
    *
    * @param int $totalCoresUsed 当前已使用CPU核数。
    *
    * @return $this
    */
    public function setTotalCoresUsed($totalCoresUsed)
    {
        $this->container['totalCoresUsed'] = $totalCoresUsed;
        return $this;
    }

    /**
    * Gets totalFloatingIpsUsed
    *  当前浮动IP使用个数。
    *
    * @return int
    */
    public function getTotalFloatingIpsUsed()
    {
        return $this->container['totalFloatingIpsUsed'];
    }

    /**
    * Sets totalFloatingIpsUsed
    *
    * @param int $totalFloatingIpsUsed 当前浮动IP使用个数。
    *
    * @return $this
    */
    public function setTotalFloatingIpsUsed($totalFloatingIpsUsed)
    {
        $this->container['totalFloatingIpsUsed'] = $totalFloatingIpsUsed;
        return $this;
    }

    /**
    * Gets totalInstancesUsed
    *  当前云服务器使用个数。
    *
    * @return int
    */
    public function getTotalInstancesUsed()
    {
        return $this->container['totalInstancesUsed'];
    }

    /**
    * Sets totalInstancesUsed
    *
    * @param int $totalInstancesUsed 当前云服务器使用个数。
    *
    * @return $this
    */
    public function setTotalInstancesUsed($totalInstancesUsed)
    {
        $this->container['totalInstancesUsed'] = $totalInstancesUsed;
        return $this;
    }

    /**
    * Gets totalRamUsed
    *  当前内存使用容量（单位：MB）。
    *
    * @return int
    */
    public function getTotalRamUsed()
    {
        return $this->container['totalRamUsed'];
    }

    /**
    * Sets totalRamUsed
    *
    * @param int $totalRamUsed 当前内存使用容量（单位：MB）。
    *
    * @return $this
    */
    public function setTotalRamUsed($totalRamUsed)
    {
        $this->container['totalRamUsed'] = $totalRamUsed;
        return $this;
    }

    /**
    * Gets totalSecurityGroupsUsed
    *  当前安全组使用个数。
    *
    * @return int
    */
    public function getTotalSecurityGroupsUsed()
    {
        return $this->container['totalSecurityGroupsUsed'];
    }

    /**
    * Sets totalSecurityGroupsUsed
    *
    * @param int $totalSecurityGroupsUsed 当前安全组使用个数。
    *
    * @return $this
    */
    public function setTotalSecurityGroupsUsed($totalSecurityGroupsUsed)
    {
        $this->container['totalSecurityGroupsUsed'] = $totalSecurityGroupsUsed;
        return $this;
    }

    /**
    * Gets totalServerGroupsUsed
    *  已使用的服务器组个数。
    *
    * @return int
    */
    public function getTotalServerGroupsUsed()
    {
        return $this->container['totalServerGroupsUsed'];
    }

    /**
    * Sets totalServerGroupsUsed
    *
    * @param int $totalServerGroupsUsed 已使用的服务器组个数。
    *
    * @return $this
    */
    public function setTotalServerGroupsUsed($totalServerGroupsUsed)
    {
        $this->container['totalServerGroupsUsed'] = $totalServerGroupsUsed;
        return $this;
    }

    /**
    * Gets maxTotalSpotInstances
    *  竞价实例的最大申请数量。
    *
    * @return int|null
    */
    public function getMaxTotalSpotInstances()
    {
        return $this->container['maxTotalSpotInstances'];
    }

    /**
    * Sets maxTotalSpotInstances
    *
    * @param int|null $maxTotalSpotInstances 竞价实例的最大申请数量。
    *
    * @return $this
    */
    public function setMaxTotalSpotInstances($maxTotalSpotInstances)
    {
        $this->container['maxTotalSpotInstances'] = $maxTotalSpotInstances;
        return $this;
    }

    /**
    * Gets maxTotalSpotCores
    *  竞价实例的CPU核数最大申请数量。
    *
    * @return int|null
    */
    public function getMaxTotalSpotCores()
    {
        return $this->container['maxTotalSpotCores'];
    }

    /**
    * Sets maxTotalSpotCores
    *
    * @param int|null $maxTotalSpotCores 竞价实例的CPU核数最大申请数量。
    *
    * @return $this
    */
    public function setMaxTotalSpotCores($maxTotalSpotCores)
    {
        $this->container['maxTotalSpotCores'] = $maxTotalSpotCores;
        return $this;
    }

    /**
    * Gets maxTotalSpotRamSize
    *  竞价实例的内存最大申请容量（单位：MB）。
    *
    * @return int|null
    */
    public function getMaxTotalSpotRamSize()
    {
        return $this->container['maxTotalSpotRamSize'];
    }

    /**
    * Sets maxTotalSpotRamSize
    *
    * @param int|null $maxTotalSpotRamSize 竞价实例的内存最大申请容量（单位：MB）。
    *
    * @return $this
    */
    public function setMaxTotalSpotRamSize($maxTotalSpotRamSize)
    {
        $this->container['maxTotalSpotRamSize'] = $maxTotalSpotRamSize;
        return $this;
    }

    /**
    * Gets totalSpotInstancesUsed
    *  当前竞价实例的使用个数。
    *
    * @return int|null
    */
    public function getTotalSpotInstancesUsed()
    {
        return $this->container['totalSpotInstancesUsed'];
    }

    /**
    * Sets totalSpotInstancesUsed
    *
    * @param int|null $totalSpotInstancesUsed 当前竞价实例的使用个数。
    *
    * @return $this
    */
    public function setTotalSpotInstancesUsed($totalSpotInstancesUsed)
    {
        $this->container['totalSpotInstancesUsed'] = $totalSpotInstancesUsed;
        return $this;
    }

    /**
    * Gets totalSpotCoresUsed
    *  当前竞价实例已使用的CPU核数。
    *
    * @return int|null
    */
    public function getTotalSpotCoresUsed()
    {
        return $this->container['totalSpotCoresUsed'];
    }

    /**
    * Sets totalSpotCoresUsed
    *
    * @param int|null $totalSpotCoresUsed 当前竞价实例已使用的CPU核数。
    *
    * @return $this
    */
    public function setTotalSpotCoresUsed($totalSpotCoresUsed)
    {
        $this->container['totalSpotCoresUsed'] = $totalSpotCoresUsed;
        return $this;
    }

    /**
    * Gets totalSpotRamUsed
    *  当前竞价实例的内存使用容量（单位：MB）。
    *
    * @return int|null
    */
    public function getTotalSpotRamUsed()
    {
        return $this->container['totalSpotRamUsed'];
    }

    /**
    * Sets totalSpotRamUsed
    *
    * @param int|null $totalSpotRamUsed 当前竞价实例的内存使用容量（单位：MB）。
    *
    * @return $this
    */
    public function setTotalSpotRamUsed($totalSpotRamUsed)
    {
        $this->container['totalSpotRamUsed'] = $totalSpotRamUsed;
        return $this;
    }

    /**
    * Gets limitByFlavor
    *  使用该flavor可以申请的弹性云服务器数量。  值为“-1”时，表示无数量限制。
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\ProjectFlavorLimit[]|null
    */
    public function getLimitByFlavor()
    {
        return $this->container['limitByFlavor'];
    }

    /**
    * Sets limitByFlavor
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\ProjectFlavorLimit[]|null $limitByFlavor 使用该flavor可以申请的弹性云服务器数量。  值为“-1”时，表示无数量限制。
    *
    * @return $this
    */
    public function setLimitByFlavor($limitByFlavor)
    {
        $this->container['limitByFlavor'] = $limitByFlavor;
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

