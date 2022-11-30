<?php

namespace HuaweiCloud\SDK\_As\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InstanceConfigResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InstanceConfigResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * flavorRef  云服务器的规格ID。
    * imageRef  镜像ID，同image_id。
    * disk  磁盘组信息。
    * keyName  登录云服务器的SSH密钥名称。
    * keyFingerprint  登录云服务器的SSH密钥指纹。
    * instanceName  该参数为预留字段。
    * instanceId  该参数为预留字段。
    * adminPass  登录云服务器的密码，非明文回显。
    * personality  个人信息
    * publicIp  publicIp
    * userData  cloud-init用户数据，base64格式编码。
    * metadata  metadata
    * securityGroups  安全组信息。
    * serverGroupId  云服务器组ID。
    * tenancy  在专属主机上创建弹性云服务器。
    * dedicatedHostId  专属主机的ID。
    * marketType  云服务器的计费模式，可以选择竞价计费或按需计费。
    * multiFlavorPriorityPolicy  使用伸缩配置创建云主机的时候，多规格使用的优先级策略。  PICK_FIRST（默认）：选择优先，虚拟机扩容时规格的选择按照flavorRef列表的顺序进行优先级排序。 COST_FIRST：成本优化，虚拟机扩容时规格的选择按照价格最优原则进行优先级排序。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'flavorRef' => 'string',
            'imageRef' => 'string',
            'disk' => '\HuaweiCloud\SDK\_As\V1\Model\DiskResult[]',
            'keyName' => 'string',
            'keyFingerprint' => 'string',
            'instanceName' => 'string',
            'instanceId' => 'string',
            'adminPass' => 'string',
            'personality' => '\HuaweiCloud\SDK\_As\V1\Model\PersonalityResult[]',
            'publicIp' => '\HuaweiCloud\SDK\_As\V1\Model\PublicipResult',
            'userData' => 'string',
            'metadata' => '\HuaweiCloud\SDK\_As\V1\Model\VmMetaData',
            'securityGroups' => '\HuaweiCloud\SDK\_As\V1\Model\SecurityGroups[]',
            'serverGroupId' => 'string',
            'tenancy' => 'string',
            'dedicatedHostId' => 'string',
            'marketType' => 'string',
            'multiFlavorPriorityPolicy' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * flavorRef  云服务器的规格ID。
    * imageRef  镜像ID，同image_id。
    * disk  磁盘组信息。
    * keyName  登录云服务器的SSH密钥名称。
    * keyFingerprint  登录云服务器的SSH密钥指纹。
    * instanceName  该参数为预留字段。
    * instanceId  该参数为预留字段。
    * adminPass  登录云服务器的密码，非明文回显。
    * personality  个人信息
    * publicIp  publicIp
    * userData  cloud-init用户数据，base64格式编码。
    * metadata  metadata
    * securityGroups  安全组信息。
    * serverGroupId  云服务器组ID。
    * tenancy  在专属主机上创建弹性云服务器。
    * dedicatedHostId  专属主机的ID。
    * marketType  云服务器的计费模式，可以选择竞价计费或按需计费。
    * multiFlavorPriorityPolicy  使用伸缩配置创建云主机的时候，多规格使用的优先级策略。  PICK_FIRST（默认）：选择优先，虚拟机扩容时规格的选择按照flavorRef列表的顺序进行优先级排序。 COST_FIRST：成本优化，虚拟机扩容时规格的选择按照价格最优原则进行优先级排序。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'flavorRef' => null,
        'imageRef' => null,
        'disk' => null,
        'keyName' => null,
        'keyFingerprint' => null,
        'instanceName' => null,
        'instanceId' => null,
        'adminPass' => null,
        'personality' => null,
        'publicIp' => null,
        'userData' => null,
        'metadata' => null,
        'securityGroups' => null,
        'serverGroupId' => null,
        'tenancy' => null,
        'dedicatedHostId' => null,
        'marketType' => null,
        'multiFlavorPriorityPolicy' => null
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
    * flavorRef  云服务器的规格ID。
    * imageRef  镜像ID，同image_id。
    * disk  磁盘组信息。
    * keyName  登录云服务器的SSH密钥名称。
    * keyFingerprint  登录云服务器的SSH密钥指纹。
    * instanceName  该参数为预留字段。
    * instanceId  该参数为预留字段。
    * adminPass  登录云服务器的密码，非明文回显。
    * personality  个人信息
    * publicIp  publicIp
    * userData  cloud-init用户数据，base64格式编码。
    * metadata  metadata
    * securityGroups  安全组信息。
    * serverGroupId  云服务器组ID。
    * tenancy  在专属主机上创建弹性云服务器。
    * dedicatedHostId  专属主机的ID。
    * marketType  云服务器的计费模式，可以选择竞价计费或按需计费。
    * multiFlavorPriorityPolicy  使用伸缩配置创建云主机的时候，多规格使用的优先级策略。  PICK_FIRST（默认）：选择优先，虚拟机扩容时规格的选择按照flavorRef列表的顺序进行优先级排序。 COST_FIRST：成本优化，虚拟机扩容时规格的选择按照价格最优原则进行优先级排序。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'flavorRef' => 'flavorRef',
            'imageRef' => 'imageRef',
            'disk' => 'disk',
            'keyName' => 'key_name',
            'keyFingerprint' => 'key_fingerprint',
            'instanceName' => 'instance_name',
            'instanceId' => 'instance_id',
            'adminPass' => 'adminPass',
            'personality' => 'personality',
            'publicIp' => 'public_ip',
            'userData' => 'user_data',
            'metadata' => 'metadata',
            'securityGroups' => 'security_groups',
            'serverGroupId' => 'server_group_id',
            'tenancy' => 'tenancy',
            'dedicatedHostId' => 'dedicated_host_id',
            'marketType' => 'market_type',
            'multiFlavorPriorityPolicy' => 'multi_flavor_priority_policy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * flavorRef  云服务器的规格ID。
    * imageRef  镜像ID，同image_id。
    * disk  磁盘组信息。
    * keyName  登录云服务器的SSH密钥名称。
    * keyFingerprint  登录云服务器的SSH密钥指纹。
    * instanceName  该参数为预留字段。
    * instanceId  该参数为预留字段。
    * adminPass  登录云服务器的密码，非明文回显。
    * personality  个人信息
    * publicIp  publicIp
    * userData  cloud-init用户数据，base64格式编码。
    * metadata  metadata
    * securityGroups  安全组信息。
    * serverGroupId  云服务器组ID。
    * tenancy  在专属主机上创建弹性云服务器。
    * dedicatedHostId  专属主机的ID。
    * marketType  云服务器的计费模式，可以选择竞价计费或按需计费。
    * multiFlavorPriorityPolicy  使用伸缩配置创建云主机的时候，多规格使用的优先级策略。  PICK_FIRST（默认）：选择优先，虚拟机扩容时规格的选择按照flavorRef列表的顺序进行优先级排序。 COST_FIRST：成本优化，虚拟机扩容时规格的选择按照价格最优原则进行优先级排序。
    *
    * @var string[]
    */
    protected static $setters = [
            'flavorRef' => 'setFlavorRef',
            'imageRef' => 'setImageRef',
            'disk' => 'setDisk',
            'keyName' => 'setKeyName',
            'keyFingerprint' => 'setKeyFingerprint',
            'instanceName' => 'setInstanceName',
            'instanceId' => 'setInstanceId',
            'adminPass' => 'setAdminPass',
            'personality' => 'setPersonality',
            'publicIp' => 'setPublicIp',
            'userData' => 'setUserData',
            'metadata' => 'setMetadata',
            'securityGroups' => 'setSecurityGroups',
            'serverGroupId' => 'setServerGroupId',
            'tenancy' => 'setTenancy',
            'dedicatedHostId' => 'setDedicatedHostId',
            'marketType' => 'setMarketType',
            'multiFlavorPriorityPolicy' => 'setMultiFlavorPriorityPolicy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * flavorRef  云服务器的规格ID。
    * imageRef  镜像ID，同image_id。
    * disk  磁盘组信息。
    * keyName  登录云服务器的SSH密钥名称。
    * keyFingerprint  登录云服务器的SSH密钥指纹。
    * instanceName  该参数为预留字段。
    * instanceId  该参数为预留字段。
    * adminPass  登录云服务器的密码，非明文回显。
    * personality  个人信息
    * publicIp  publicIp
    * userData  cloud-init用户数据，base64格式编码。
    * metadata  metadata
    * securityGroups  安全组信息。
    * serverGroupId  云服务器组ID。
    * tenancy  在专属主机上创建弹性云服务器。
    * dedicatedHostId  专属主机的ID。
    * marketType  云服务器的计费模式，可以选择竞价计费或按需计费。
    * multiFlavorPriorityPolicy  使用伸缩配置创建云主机的时候，多规格使用的优先级策略。  PICK_FIRST（默认）：选择优先，虚拟机扩容时规格的选择按照flavorRef列表的顺序进行优先级排序。 COST_FIRST：成本优化，虚拟机扩容时规格的选择按照价格最优原则进行优先级排序。
    *
    * @var string[]
    */
    protected static $getters = [
            'flavorRef' => 'getFlavorRef',
            'imageRef' => 'getImageRef',
            'disk' => 'getDisk',
            'keyName' => 'getKeyName',
            'keyFingerprint' => 'getKeyFingerprint',
            'instanceName' => 'getInstanceName',
            'instanceId' => 'getInstanceId',
            'adminPass' => 'getAdminPass',
            'personality' => 'getPersonality',
            'publicIp' => 'getPublicIp',
            'userData' => 'getUserData',
            'metadata' => 'getMetadata',
            'securityGroups' => 'getSecurityGroups',
            'serverGroupId' => 'getServerGroupId',
            'tenancy' => 'getTenancy',
            'dedicatedHostId' => 'getDedicatedHostId',
            'marketType' => 'getMarketType',
            'multiFlavorPriorityPolicy' => 'getMultiFlavorPriorityPolicy'
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
        $this->container['flavorRef'] = isset($data['flavorRef']) ? $data['flavorRef'] : null;
        $this->container['imageRef'] = isset($data['imageRef']) ? $data['imageRef'] : null;
        $this->container['disk'] = isset($data['disk']) ? $data['disk'] : null;
        $this->container['keyName'] = isset($data['keyName']) ? $data['keyName'] : null;
        $this->container['keyFingerprint'] = isset($data['keyFingerprint']) ? $data['keyFingerprint'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['adminPass'] = isset($data['adminPass']) ? $data['adminPass'] : null;
        $this->container['personality'] = isset($data['personality']) ? $data['personality'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['userData'] = isset($data['userData']) ? $data['userData'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['securityGroups'] = isset($data['securityGroups']) ? $data['securityGroups'] : null;
        $this->container['serverGroupId'] = isset($data['serverGroupId']) ? $data['serverGroupId'] : null;
        $this->container['tenancy'] = isset($data['tenancy']) ? $data['tenancy'] : null;
        $this->container['dedicatedHostId'] = isset($data['dedicatedHostId']) ? $data['dedicatedHostId'] : null;
        $this->container['marketType'] = isset($data['marketType']) ? $data['marketType'] : null;
        $this->container['multiFlavorPriorityPolicy'] = isset($data['multiFlavorPriorityPolicy']) ? $data['multiFlavorPriorityPolicy'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['imageRef']) && !preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['imageRef'])) {
                $invalidProperties[] = "invalid value for 'imageRef', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
            }
            if (!is_null($this->container['keyName']) && (mb_strlen($this->container['keyName']) > 32)) {
                $invalidProperties[] = "invalid value for 'keyName', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['keyName']) && (mb_strlen($this->container['keyName']) < 1)) {
                $invalidProperties[] = "invalid value for 'keyName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['serverGroupId']) && !preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['serverGroupId'])) {
                $invalidProperties[] = "invalid value for 'serverGroupId', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
            }
            if (!is_null($this->container['dedicatedHostId']) && !preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['dedicatedHostId'])) {
                $invalidProperties[] = "invalid value for 'dedicatedHostId', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
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
    * Gets flavorRef
    *  云服务器的规格ID。
    *
    * @return string|null
    */
    public function getFlavorRef()
    {
        return $this->container['flavorRef'];
    }

    /**
    * Sets flavorRef
    *
    * @param string|null $flavorRef 云服务器的规格ID。
    *
    * @return $this
    */
    public function setFlavorRef($flavorRef)
    {
        $this->container['flavorRef'] = $flavorRef;
        return $this;
    }

    /**
    * Gets imageRef
    *  镜像ID，同image_id。
    *
    * @return string|null
    */
    public function getImageRef()
    {
        return $this->container['imageRef'];
    }

    /**
    * Sets imageRef
    *
    * @param string|null $imageRef 镜像ID，同image_id。
    *
    * @return $this
    */
    public function setImageRef($imageRef)
    {
        $this->container['imageRef'] = $imageRef;
        return $this;
    }

    /**
    * Gets disk
    *  磁盘组信息。
    *
    * @return \HuaweiCloud\SDK\_As\V1\Model\DiskResult[]|null
    */
    public function getDisk()
    {
        return $this->container['disk'];
    }

    /**
    * Sets disk
    *
    * @param \HuaweiCloud\SDK\_As\V1\Model\DiskResult[]|null $disk 磁盘组信息。
    *
    * @return $this
    */
    public function setDisk($disk)
    {
        $this->container['disk'] = $disk;
        return $this;
    }

    /**
    * Gets keyName
    *  登录云服务器的SSH密钥名称。
    *
    * @return string|null
    */
    public function getKeyName()
    {
        return $this->container['keyName'];
    }

    /**
    * Sets keyName
    *
    * @param string|null $keyName 登录云服务器的SSH密钥名称。
    *
    * @return $this
    */
    public function setKeyName($keyName)
    {
        $this->container['keyName'] = $keyName;
        return $this;
    }

    /**
    * Gets keyFingerprint
    *  登录云服务器的SSH密钥指纹。
    *
    * @return string|null
    */
    public function getKeyFingerprint()
    {
        return $this->container['keyFingerprint'];
    }

    /**
    * Sets keyFingerprint
    *
    * @param string|null $keyFingerprint 登录云服务器的SSH密钥指纹。
    *
    * @return $this
    */
    public function setKeyFingerprint($keyFingerprint)
    {
        $this->container['keyFingerprint'] = $keyFingerprint;
        return $this;
    }

    /**
    * Gets instanceName
    *  该参数为预留字段。
    *
    * @return string|null
    */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
    * Sets instanceName
    *
    * @param string|null $instanceName 该参数为预留字段。
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets instanceId
    *  该参数为预留字段。
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 该参数为预留字段。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets adminPass
    *  登录云服务器的密码，非明文回显。
    *
    * @return string|null
    */
    public function getAdminPass()
    {
        return $this->container['adminPass'];
    }

    /**
    * Sets adminPass
    *
    * @param string|null $adminPass 登录云服务器的密码，非明文回显。
    *
    * @return $this
    */
    public function setAdminPass($adminPass)
    {
        $this->container['adminPass'] = $adminPass;
        return $this;
    }

    /**
    * Gets personality
    *  个人信息
    *
    * @return \HuaweiCloud\SDK\_As\V1\Model\PersonalityResult[]|null
    */
    public function getPersonality()
    {
        return $this->container['personality'];
    }

    /**
    * Sets personality
    *
    * @param \HuaweiCloud\SDK\_As\V1\Model\PersonalityResult[]|null $personality 个人信息
    *
    * @return $this
    */
    public function setPersonality($personality)
    {
        $this->container['personality'] = $personality;
        return $this;
    }

    /**
    * Gets publicIp
    *  publicIp
    *
    * @return \HuaweiCloud\SDK\_As\V1\Model\PublicipResult|null
    */
    public function getPublicIp()
    {
        return $this->container['publicIp'];
    }

    /**
    * Sets publicIp
    *
    * @param \HuaweiCloud\SDK\_As\V1\Model\PublicipResult|null $publicIp publicIp
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets userData
    *  cloud-init用户数据，base64格式编码。
    *
    * @return string|null
    */
    public function getUserData()
    {
        return $this->container['userData'];
    }

    /**
    * Sets userData
    *
    * @param string|null $userData cloud-init用户数据，base64格式编码。
    *
    * @return $this
    */
    public function setUserData($userData)
    {
        $this->container['userData'] = $userData;
        return $this;
    }

    /**
    * Gets metadata
    *  metadata
    *
    * @return \HuaweiCloud\SDK\_As\V1\Model\VmMetaData|null
    */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
    * Sets metadata
    *
    * @param \HuaweiCloud\SDK\_As\V1\Model\VmMetaData|null $metadata metadata
    *
    * @return $this
    */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;
        return $this;
    }

    /**
    * Gets securityGroups
    *  安全组信息。
    *
    * @return \HuaweiCloud\SDK\_As\V1\Model\SecurityGroups[]|null
    */
    public function getSecurityGroups()
    {
        return $this->container['securityGroups'];
    }

    /**
    * Sets securityGroups
    *
    * @param \HuaweiCloud\SDK\_As\V1\Model\SecurityGroups[]|null $securityGroups 安全组信息。
    *
    * @return $this
    */
    public function setSecurityGroups($securityGroups)
    {
        $this->container['securityGroups'] = $securityGroups;
        return $this;
    }

    /**
    * Gets serverGroupId
    *  云服务器组ID。
    *
    * @return string|null
    */
    public function getServerGroupId()
    {
        return $this->container['serverGroupId'];
    }

    /**
    * Sets serverGroupId
    *
    * @param string|null $serverGroupId 云服务器组ID。
    *
    * @return $this
    */
    public function setServerGroupId($serverGroupId)
    {
        $this->container['serverGroupId'] = $serverGroupId;
        return $this;
    }

    /**
    * Gets tenancy
    *  在专属主机上创建弹性云服务器。
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
    * @param string|null $tenancy 在专属主机上创建弹性云服务器。
    *
    * @return $this
    */
    public function setTenancy($tenancy)
    {
        $this->container['tenancy'] = $tenancy;
        return $this;
    }

    /**
    * Gets dedicatedHostId
    *  专属主机的ID。
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
    * @param string|null $dedicatedHostId 专属主机的ID。
    *
    * @return $this
    */
    public function setDedicatedHostId($dedicatedHostId)
    {
        $this->container['dedicatedHostId'] = $dedicatedHostId;
        return $this;
    }

    /**
    * Gets marketType
    *  云服务器的计费模式，可以选择竞价计费或按需计费。
    *
    * @return string|null
    */
    public function getMarketType()
    {
        return $this->container['marketType'];
    }

    /**
    * Sets marketType
    *
    * @param string|null $marketType 云服务器的计费模式，可以选择竞价计费或按需计费。
    *
    * @return $this
    */
    public function setMarketType($marketType)
    {
        $this->container['marketType'] = $marketType;
        return $this;
    }

    /**
    * Gets multiFlavorPriorityPolicy
    *  使用伸缩配置创建云主机的时候，多规格使用的优先级策略。  PICK_FIRST（默认）：选择优先，虚拟机扩容时规格的选择按照flavorRef列表的顺序进行优先级排序。 COST_FIRST：成本优化，虚拟机扩容时规格的选择按照价格最优原则进行优先级排序。
    *
    * @return string|null
    */
    public function getMultiFlavorPriorityPolicy()
    {
        return $this->container['multiFlavorPriorityPolicy'];
    }

    /**
    * Sets multiFlavorPriorityPolicy
    *
    * @param string|null $multiFlavorPriorityPolicy 使用伸缩配置创建云主机的时候，多规格使用的优先级策略。  PICK_FIRST（默认）：选择优先，虚拟机扩容时规格的选择按照flavorRef列表的顺序进行优先级排序。 COST_FIRST：成本优化，虚拟机扩容时规格的选择按照价格最优原则进行优先级排序。
    *
    * @return $this
    */
    public function setMultiFlavorPriorityPolicy($multiFlavorPriorityPolicy)
    {
        $this->container['multiFlavorPriorityPolicy'] = $multiFlavorPriorityPolicy;
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

