<?php

namespace HuaweiCloud\SDK\Bms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Absolute implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Absolute';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * maxTotalInstances  裸金属服务器最大申请数量
    * maxTotalCores  CPU核数最大申请数量
    * maxTotalRamSize  内存最大申请容量（单位：MB）
    * maxTotalKeypairs  可以申请的SSH密钥对最大数量
    * maxServerMeta  可输入元数据的最大长度
    * maxPersonality  可注入文件的最大个数
    * maxPersonalitySize  注入文件内容的最大长度（单位：Byte）
    * maxServerGroups  服务器组的最大个数
    * maxServerGroupMembers  服务器组中的最大裸金属服务器数。
    * totalServerGroupsUsed  已使用的服务器组个数
    * maxSecurityGroups  安全组最大使用个数。 说明：具体配额限制请以VPC配额限制为准。
    * maxSecurityGroupRules  安全组中安全组规则最大的配置个数。 说明：具体配额限制请以VPC配额限制为准。
    * maxTotalFloatingIps  最大的浮动IP使用个数
    * maxImageMeta  镜像元数据最大的长度
    * totalInstancesUsed  当前裸金属服务器使用个数
    * totalCoresUsed  当前已使用CPU核数
    * totalRamUsed  当前内存使用容量（单位：MB）
    * totalSecurityGroupsUsed  当前安全组使用个数
    * totalFloatingIpsUsed  当前浮动IP使用个数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'maxTotalInstances' => 'int',
            'maxTotalCores' => 'int',
            'maxTotalRamSize' => 'int',
            'maxTotalKeypairs' => 'int',
            'maxServerMeta' => 'int',
            'maxPersonality' => 'int',
            'maxPersonalitySize' => 'int',
            'maxServerGroups' => 'int',
            'maxServerGroupMembers' => 'int',
            'totalServerGroupsUsed' => 'int',
            'maxSecurityGroups' => 'int',
            'maxSecurityGroupRules' => 'int',
            'maxTotalFloatingIps' => 'int',
            'maxImageMeta' => 'int',
            'totalInstancesUsed' => 'int',
            'totalCoresUsed' => 'int',
            'totalRamUsed' => 'int',
            'totalSecurityGroupsUsed' => 'int',
            'totalFloatingIpsUsed' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * maxTotalInstances  裸金属服务器最大申请数量
    * maxTotalCores  CPU核数最大申请数量
    * maxTotalRamSize  内存最大申请容量（单位：MB）
    * maxTotalKeypairs  可以申请的SSH密钥对最大数量
    * maxServerMeta  可输入元数据的最大长度
    * maxPersonality  可注入文件的最大个数
    * maxPersonalitySize  注入文件内容的最大长度（单位：Byte）
    * maxServerGroups  服务器组的最大个数
    * maxServerGroupMembers  服务器组中的最大裸金属服务器数。
    * totalServerGroupsUsed  已使用的服务器组个数
    * maxSecurityGroups  安全组最大使用个数。 说明：具体配额限制请以VPC配额限制为准。
    * maxSecurityGroupRules  安全组中安全组规则最大的配置个数。 说明：具体配额限制请以VPC配额限制为准。
    * maxTotalFloatingIps  最大的浮动IP使用个数
    * maxImageMeta  镜像元数据最大的长度
    * totalInstancesUsed  当前裸金属服务器使用个数
    * totalCoresUsed  当前已使用CPU核数
    * totalRamUsed  当前内存使用容量（单位：MB）
    * totalSecurityGroupsUsed  当前安全组使用个数
    * totalFloatingIpsUsed  当前浮动IP使用个数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'maxTotalInstances' => 'int32',
        'maxTotalCores' => 'int32',
        'maxTotalRamSize' => 'int32',
        'maxTotalKeypairs' => 'int32',
        'maxServerMeta' => 'int32',
        'maxPersonality' => 'int32',
        'maxPersonalitySize' => 'int32',
        'maxServerGroups' => 'int32',
        'maxServerGroupMembers' => 'int32',
        'totalServerGroupsUsed' => 'int32',
        'maxSecurityGroups' => 'int32',
        'maxSecurityGroupRules' => 'int32',
        'maxTotalFloatingIps' => 'int32',
        'maxImageMeta' => 'int32',
        'totalInstancesUsed' => 'int32',
        'totalCoresUsed' => 'int32',
        'totalRamUsed' => 'int32',
        'totalSecurityGroupsUsed' => 'int32',
        'totalFloatingIpsUsed' => 'int32'
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
    * maxTotalInstances  裸金属服务器最大申请数量
    * maxTotalCores  CPU核数最大申请数量
    * maxTotalRamSize  内存最大申请容量（单位：MB）
    * maxTotalKeypairs  可以申请的SSH密钥对最大数量
    * maxServerMeta  可输入元数据的最大长度
    * maxPersonality  可注入文件的最大个数
    * maxPersonalitySize  注入文件内容的最大长度（单位：Byte）
    * maxServerGroups  服务器组的最大个数
    * maxServerGroupMembers  服务器组中的最大裸金属服务器数。
    * totalServerGroupsUsed  已使用的服务器组个数
    * maxSecurityGroups  安全组最大使用个数。 说明：具体配额限制请以VPC配额限制为准。
    * maxSecurityGroupRules  安全组中安全组规则最大的配置个数。 说明：具体配额限制请以VPC配额限制为准。
    * maxTotalFloatingIps  最大的浮动IP使用个数
    * maxImageMeta  镜像元数据最大的长度
    * totalInstancesUsed  当前裸金属服务器使用个数
    * totalCoresUsed  当前已使用CPU核数
    * totalRamUsed  当前内存使用容量（单位：MB）
    * totalSecurityGroupsUsed  当前安全组使用个数
    * totalFloatingIpsUsed  当前浮动IP使用个数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'maxTotalInstances' => 'maxTotalInstances',
            'maxTotalCores' => 'maxTotalCores',
            'maxTotalRamSize' => 'maxTotalRAMSize',
            'maxTotalKeypairs' => 'maxTotalKeypairs',
            'maxServerMeta' => 'maxServerMeta',
            'maxPersonality' => 'maxPersonality',
            'maxPersonalitySize' => 'maxPersonalitySize',
            'maxServerGroups' => 'maxServerGroups',
            'maxServerGroupMembers' => 'maxServerGroupMembers',
            'totalServerGroupsUsed' => 'totalServerGroupsUsed',
            'maxSecurityGroups' => 'maxSecurityGroups',
            'maxSecurityGroupRules' => 'maxSecurityGroupRules',
            'maxTotalFloatingIps' => 'maxTotalFloatingIps',
            'maxImageMeta' => 'maxImageMeta',
            'totalInstancesUsed' => 'totalInstancesUsed',
            'totalCoresUsed' => 'totalCoresUsed',
            'totalRamUsed' => 'totalRAMUsed',
            'totalSecurityGroupsUsed' => 'totalSecurityGroupsUsed',
            'totalFloatingIpsUsed' => 'totalFloatingIpsUsed'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * maxTotalInstances  裸金属服务器最大申请数量
    * maxTotalCores  CPU核数最大申请数量
    * maxTotalRamSize  内存最大申请容量（单位：MB）
    * maxTotalKeypairs  可以申请的SSH密钥对最大数量
    * maxServerMeta  可输入元数据的最大长度
    * maxPersonality  可注入文件的最大个数
    * maxPersonalitySize  注入文件内容的最大长度（单位：Byte）
    * maxServerGroups  服务器组的最大个数
    * maxServerGroupMembers  服务器组中的最大裸金属服务器数。
    * totalServerGroupsUsed  已使用的服务器组个数
    * maxSecurityGroups  安全组最大使用个数。 说明：具体配额限制请以VPC配额限制为准。
    * maxSecurityGroupRules  安全组中安全组规则最大的配置个数。 说明：具体配额限制请以VPC配额限制为准。
    * maxTotalFloatingIps  最大的浮动IP使用个数
    * maxImageMeta  镜像元数据最大的长度
    * totalInstancesUsed  当前裸金属服务器使用个数
    * totalCoresUsed  当前已使用CPU核数
    * totalRamUsed  当前内存使用容量（单位：MB）
    * totalSecurityGroupsUsed  当前安全组使用个数
    * totalFloatingIpsUsed  当前浮动IP使用个数
    *
    * @var string[]
    */
    protected static $setters = [
            'maxTotalInstances' => 'setMaxTotalInstances',
            'maxTotalCores' => 'setMaxTotalCores',
            'maxTotalRamSize' => 'setMaxTotalRamSize',
            'maxTotalKeypairs' => 'setMaxTotalKeypairs',
            'maxServerMeta' => 'setMaxServerMeta',
            'maxPersonality' => 'setMaxPersonality',
            'maxPersonalitySize' => 'setMaxPersonalitySize',
            'maxServerGroups' => 'setMaxServerGroups',
            'maxServerGroupMembers' => 'setMaxServerGroupMembers',
            'totalServerGroupsUsed' => 'setTotalServerGroupsUsed',
            'maxSecurityGroups' => 'setMaxSecurityGroups',
            'maxSecurityGroupRules' => 'setMaxSecurityGroupRules',
            'maxTotalFloatingIps' => 'setMaxTotalFloatingIps',
            'maxImageMeta' => 'setMaxImageMeta',
            'totalInstancesUsed' => 'setTotalInstancesUsed',
            'totalCoresUsed' => 'setTotalCoresUsed',
            'totalRamUsed' => 'setTotalRamUsed',
            'totalSecurityGroupsUsed' => 'setTotalSecurityGroupsUsed',
            'totalFloatingIpsUsed' => 'setTotalFloatingIpsUsed'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * maxTotalInstances  裸金属服务器最大申请数量
    * maxTotalCores  CPU核数最大申请数量
    * maxTotalRamSize  内存最大申请容量（单位：MB）
    * maxTotalKeypairs  可以申请的SSH密钥对最大数量
    * maxServerMeta  可输入元数据的最大长度
    * maxPersonality  可注入文件的最大个数
    * maxPersonalitySize  注入文件内容的最大长度（单位：Byte）
    * maxServerGroups  服务器组的最大个数
    * maxServerGroupMembers  服务器组中的最大裸金属服务器数。
    * totalServerGroupsUsed  已使用的服务器组个数
    * maxSecurityGroups  安全组最大使用个数。 说明：具体配额限制请以VPC配额限制为准。
    * maxSecurityGroupRules  安全组中安全组规则最大的配置个数。 说明：具体配额限制请以VPC配额限制为准。
    * maxTotalFloatingIps  最大的浮动IP使用个数
    * maxImageMeta  镜像元数据最大的长度
    * totalInstancesUsed  当前裸金属服务器使用个数
    * totalCoresUsed  当前已使用CPU核数
    * totalRamUsed  当前内存使用容量（单位：MB）
    * totalSecurityGroupsUsed  当前安全组使用个数
    * totalFloatingIpsUsed  当前浮动IP使用个数
    *
    * @var string[]
    */
    protected static $getters = [
            'maxTotalInstances' => 'getMaxTotalInstances',
            'maxTotalCores' => 'getMaxTotalCores',
            'maxTotalRamSize' => 'getMaxTotalRamSize',
            'maxTotalKeypairs' => 'getMaxTotalKeypairs',
            'maxServerMeta' => 'getMaxServerMeta',
            'maxPersonality' => 'getMaxPersonality',
            'maxPersonalitySize' => 'getMaxPersonalitySize',
            'maxServerGroups' => 'getMaxServerGroups',
            'maxServerGroupMembers' => 'getMaxServerGroupMembers',
            'totalServerGroupsUsed' => 'getTotalServerGroupsUsed',
            'maxSecurityGroups' => 'getMaxSecurityGroups',
            'maxSecurityGroupRules' => 'getMaxSecurityGroupRules',
            'maxTotalFloatingIps' => 'getMaxTotalFloatingIps',
            'maxImageMeta' => 'getMaxImageMeta',
            'totalInstancesUsed' => 'getTotalInstancesUsed',
            'totalCoresUsed' => 'getTotalCoresUsed',
            'totalRamUsed' => 'getTotalRamUsed',
            'totalSecurityGroupsUsed' => 'getTotalSecurityGroupsUsed',
            'totalFloatingIpsUsed' => 'getTotalFloatingIpsUsed'
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
        $this->container['maxTotalInstances'] = isset($data['maxTotalInstances']) ? $data['maxTotalInstances'] : null;
        $this->container['maxTotalCores'] = isset($data['maxTotalCores']) ? $data['maxTotalCores'] : null;
        $this->container['maxTotalRamSize'] = isset($data['maxTotalRamSize']) ? $data['maxTotalRamSize'] : null;
        $this->container['maxTotalKeypairs'] = isset($data['maxTotalKeypairs']) ? $data['maxTotalKeypairs'] : null;
        $this->container['maxServerMeta'] = isset($data['maxServerMeta']) ? $data['maxServerMeta'] : null;
        $this->container['maxPersonality'] = isset($data['maxPersonality']) ? $data['maxPersonality'] : null;
        $this->container['maxPersonalitySize'] = isset($data['maxPersonalitySize']) ? $data['maxPersonalitySize'] : null;
        $this->container['maxServerGroups'] = isset($data['maxServerGroups']) ? $data['maxServerGroups'] : null;
        $this->container['maxServerGroupMembers'] = isset($data['maxServerGroupMembers']) ? $data['maxServerGroupMembers'] : null;
        $this->container['totalServerGroupsUsed'] = isset($data['totalServerGroupsUsed']) ? $data['totalServerGroupsUsed'] : null;
        $this->container['maxSecurityGroups'] = isset($data['maxSecurityGroups']) ? $data['maxSecurityGroups'] : null;
        $this->container['maxSecurityGroupRules'] = isset($data['maxSecurityGroupRules']) ? $data['maxSecurityGroupRules'] : null;
        $this->container['maxTotalFloatingIps'] = isset($data['maxTotalFloatingIps']) ? $data['maxTotalFloatingIps'] : null;
        $this->container['maxImageMeta'] = isset($data['maxImageMeta']) ? $data['maxImageMeta'] : null;
        $this->container['totalInstancesUsed'] = isset($data['totalInstancesUsed']) ? $data['totalInstancesUsed'] : null;
        $this->container['totalCoresUsed'] = isset($data['totalCoresUsed']) ? $data['totalCoresUsed'] : null;
        $this->container['totalRamUsed'] = isset($data['totalRamUsed']) ? $data['totalRamUsed'] : null;
        $this->container['totalSecurityGroupsUsed'] = isset($data['totalSecurityGroupsUsed']) ? $data['totalSecurityGroupsUsed'] : null;
        $this->container['totalFloatingIpsUsed'] = isset($data['totalFloatingIpsUsed']) ? $data['totalFloatingIpsUsed'] : null;
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
    * Gets maxTotalInstances
    *  裸金属服务器最大申请数量
    *
    * @return int|null
    */
    public function getMaxTotalInstances()
    {
        return $this->container['maxTotalInstances'];
    }

    /**
    * Sets maxTotalInstances
    *
    * @param int|null $maxTotalInstances 裸金属服务器最大申请数量
    *
    * @return $this
    */
    public function setMaxTotalInstances($maxTotalInstances)
    {
        $this->container['maxTotalInstances'] = $maxTotalInstances;
        return $this;
    }

    /**
    * Gets maxTotalCores
    *  CPU核数最大申请数量
    *
    * @return int|null
    */
    public function getMaxTotalCores()
    {
        return $this->container['maxTotalCores'];
    }

    /**
    * Sets maxTotalCores
    *
    * @param int|null $maxTotalCores CPU核数最大申请数量
    *
    * @return $this
    */
    public function setMaxTotalCores($maxTotalCores)
    {
        $this->container['maxTotalCores'] = $maxTotalCores;
        return $this;
    }

    /**
    * Gets maxTotalRamSize
    *  内存最大申请容量（单位：MB）
    *
    * @return int|null
    */
    public function getMaxTotalRamSize()
    {
        return $this->container['maxTotalRamSize'];
    }

    /**
    * Sets maxTotalRamSize
    *
    * @param int|null $maxTotalRamSize 内存最大申请容量（单位：MB）
    *
    * @return $this
    */
    public function setMaxTotalRamSize($maxTotalRamSize)
    {
        $this->container['maxTotalRamSize'] = $maxTotalRamSize;
        return $this;
    }

    /**
    * Gets maxTotalKeypairs
    *  可以申请的SSH密钥对最大数量
    *
    * @return int|null
    */
    public function getMaxTotalKeypairs()
    {
        return $this->container['maxTotalKeypairs'];
    }

    /**
    * Sets maxTotalKeypairs
    *
    * @param int|null $maxTotalKeypairs 可以申请的SSH密钥对最大数量
    *
    * @return $this
    */
    public function setMaxTotalKeypairs($maxTotalKeypairs)
    {
        $this->container['maxTotalKeypairs'] = $maxTotalKeypairs;
        return $this;
    }

    /**
    * Gets maxServerMeta
    *  可输入元数据的最大长度
    *
    * @return int|null
    */
    public function getMaxServerMeta()
    {
        return $this->container['maxServerMeta'];
    }

    /**
    * Sets maxServerMeta
    *
    * @param int|null $maxServerMeta 可输入元数据的最大长度
    *
    * @return $this
    */
    public function setMaxServerMeta($maxServerMeta)
    {
        $this->container['maxServerMeta'] = $maxServerMeta;
        return $this;
    }

    /**
    * Gets maxPersonality
    *  可注入文件的最大个数
    *
    * @return int|null
    */
    public function getMaxPersonality()
    {
        return $this->container['maxPersonality'];
    }

    /**
    * Sets maxPersonality
    *
    * @param int|null $maxPersonality 可注入文件的最大个数
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
    *  注入文件内容的最大长度（单位：Byte）
    *
    * @return int|null
    */
    public function getMaxPersonalitySize()
    {
        return $this->container['maxPersonalitySize'];
    }

    /**
    * Sets maxPersonalitySize
    *
    * @param int|null $maxPersonalitySize 注入文件内容的最大长度（单位：Byte）
    *
    * @return $this
    */
    public function setMaxPersonalitySize($maxPersonalitySize)
    {
        $this->container['maxPersonalitySize'] = $maxPersonalitySize;
        return $this;
    }

    /**
    * Gets maxServerGroups
    *  服务器组的最大个数
    *
    * @return int|null
    */
    public function getMaxServerGroups()
    {
        return $this->container['maxServerGroups'];
    }

    /**
    * Sets maxServerGroups
    *
    * @param int|null $maxServerGroups 服务器组的最大个数
    *
    * @return $this
    */
    public function setMaxServerGroups($maxServerGroups)
    {
        $this->container['maxServerGroups'] = $maxServerGroups;
        return $this;
    }

    /**
    * Gets maxServerGroupMembers
    *  服务器组中的最大裸金属服务器数。
    *
    * @return int|null
    */
    public function getMaxServerGroupMembers()
    {
        return $this->container['maxServerGroupMembers'];
    }

    /**
    * Sets maxServerGroupMembers
    *
    * @param int|null $maxServerGroupMembers 服务器组中的最大裸金属服务器数。
    *
    * @return $this
    */
    public function setMaxServerGroupMembers($maxServerGroupMembers)
    {
        $this->container['maxServerGroupMembers'] = $maxServerGroupMembers;
        return $this;
    }

    /**
    * Gets totalServerGroupsUsed
    *  已使用的服务器组个数
    *
    * @return int|null
    */
    public function getTotalServerGroupsUsed()
    {
        return $this->container['totalServerGroupsUsed'];
    }

    /**
    * Sets totalServerGroupsUsed
    *
    * @param int|null $totalServerGroupsUsed 已使用的服务器组个数
    *
    * @return $this
    */
    public function setTotalServerGroupsUsed($totalServerGroupsUsed)
    {
        $this->container['totalServerGroupsUsed'] = $totalServerGroupsUsed;
        return $this;
    }

    /**
    * Gets maxSecurityGroups
    *  安全组最大使用个数。 说明：具体配额限制请以VPC配额限制为准。
    *
    * @return int|null
    */
    public function getMaxSecurityGroups()
    {
        return $this->container['maxSecurityGroups'];
    }

    /**
    * Sets maxSecurityGroups
    *
    * @param int|null $maxSecurityGroups 安全组最大使用个数。 说明：具体配额限制请以VPC配额限制为准。
    *
    * @return $this
    */
    public function setMaxSecurityGroups($maxSecurityGroups)
    {
        $this->container['maxSecurityGroups'] = $maxSecurityGroups;
        return $this;
    }

    /**
    * Gets maxSecurityGroupRules
    *  安全组中安全组规则最大的配置个数。 说明：具体配额限制请以VPC配额限制为准。
    *
    * @return int|null
    */
    public function getMaxSecurityGroupRules()
    {
        return $this->container['maxSecurityGroupRules'];
    }

    /**
    * Sets maxSecurityGroupRules
    *
    * @param int|null $maxSecurityGroupRules 安全组中安全组规则最大的配置个数。 说明：具体配额限制请以VPC配额限制为准。
    *
    * @return $this
    */
    public function setMaxSecurityGroupRules($maxSecurityGroupRules)
    {
        $this->container['maxSecurityGroupRules'] = $maxSecurityGroupRules;
        return $this;
    }

    /**
    * Gets maxTotalFloatingIps
    *  最大的浮动IP使用个数
    *
    * @return int|null
    */
    public function getMaxTotalFloatingIps()
    {
        return $this->container['maxTotalFloatingIps'];
    }

    /**
    * Sets maxTotalFloatingIps
    *
    * @param int|null $maxTotalFloatingIps 最大的浮动IP使用个数
    *
    * @return $this
    */
    public function setMaxTotalFloatingIps($maxTotalFloatingIps)
    {
        $this->container['maxTotalFloatingIps'] = $maxTotalFloatingIps;
        return $this;
    }

    /**
    * Gets maxImageMeta
    *  镜像元数据最大的长度
    *
    * @return int|null
    */
    public function getMaxImageMeta()
    {
        return $this->container['maxImageMeta'];
    }

    /**
    * Sets maxImageMeta
    *
    * @param int|null $maxImageMeta 镜像元数据最大的长度
    *
    * @return $this
    */
    public function setMaxImageMeta($maxImageMeta)
    {
        $this->container['maxImageMeta'] = $maxImageMeta;
        return $this;
    }

    /**
    * Gets totalInstancesUsed
    *  当前裸金属服务器使用个数
    *
    * @return int|null
    */
    public function getTotalInstancesUsed()
    {
        return $this->container['totalInstancesUsed'];
    }

    /**
    * Sets totalInstancesUsed
    *
    * @param int|null $totalInstancesUsed 当前裸金属服务器使用个数
    *
    * @return $this
    */
    public function setTotalInstancesUsed($totalInstancesUsed)
    {
        $this->container['totalInstancesUsed'] = $totalInstancesUsed;
        return $this;
    }

    /**
    * Gets totalCoresUsed
    *  当前已使用CPU核数
    *
    * @return int|null
    */
    public function getTotalCoresUsed()
    {
        return $this->container['totalCoresUsed'];
    }

    /**
    * Sets totalCoresUsed
    *
    * @param int|null $totalCoresUsed 当前已使用CPU核数
    *
    * @return $this
    */
    public function setTotalCoresUsed($totalCoresUsed)
    {
        $this->container['totalCoresUsed'] = $totalCoresUsed;
        return $this;
    }

    /**
    * Gets totalRamUsed
    *  当前内存使用容量（单位：MB）
    *
    * @return int|null
    */
    public function getTotalRamUsed()
    {
        return $this->container['totalRamUsed'];
    }

    /**
    * Sets totalRamUsed
    *
    * @param int|null $totalRamUsed 当前内存使用容量（单位：MB）
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
    *  当前安全组使用个数
    *
    * @return int|null
    */
    public function getTotalSecurityGroupsUsed()
    {
        return $this->container['totalSecurityGroupsUsed'];
    }

    /**
    * Sets totalSecurityGroupsUsed
    *
    * @param int|null $totalSecurityGroupsUsed 当前安全组使用个数
    *
    * @return $this
    */
    public function setTotalSecurityGroupsUsed($totalSecurityGroupsUsed)
    {
        $this->container['totalSecurityGroupsUsed'] = $totalSecurityGroupsUsed;
        return $this;
    }

    /**
    * Gets totalFloatingIpsUsed
    *  当前浮动IP使用个数
    *
    * @return int|null
    */
    public function getTotalFloatingIpsUsed()
    {
        return $this->container['totalFloatingIpsUsed'];
    }

    /**
    * Sets totalFloatingIpsUsed
    *
    * @param int|null $totalFloatingIpsUsed 当前浮动IP使用个数
    *
    * @return $this
    */
    public function setTotalFloatingIpsUsed($totalFloatingIpsUsed)
    {
        $this->container['totalFloatingIpsUsed'] = $totalFloatingIpsUsed;
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

