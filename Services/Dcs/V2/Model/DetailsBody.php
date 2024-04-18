<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DetailsBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DetailsBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * oldCapacity  变更前的容量，仅在变更规格时有值。
    * newCapacity  变更后的容量，仅在变更规格时有值。
    * enablePublicIp  是否开启公网访问，仅在开启公网访问时有值。
    * publicIpId  公网IP的ID，仅在开启公网访问时有值。
    * publicIpAddress  公网IP地址，仅在开启公网访问时有值。
    * enableSsl  是否开启SSL，仅在开启SSL时有值。
    * oldCacheMode  变更前的缓存类型，仅在变更规格时有值。
    * newCacheMode  变更后的缓存类型，仅在变更规格时有值。
    * oldResourceSpecCode  变更前的规格参数，仅在变更规格时有值。
    * newResourceSpecCode  变更后的规格参数，仅在变更规格时有值。
    * oldReplicaNum  变更前的副本数量，仅在变更规格时有值。
    * newReplicaNum  变更后的副本数量，仅在变更规格时有值。
    * oldCacheType  变更前的缓存类型，仅在变更规格时有值。
    * newCacheType  变更后的规格类型，仅在变更规格时有值。
    * replicaIp  副本IP。
    * replicaAz  副本所在可用区。
    * groupName  组名。
    * oldPort  旧端口。
    * newPort  新端口。
    * isOnlyAdjustCharging  是否只是调整计费模式。
    * accountName  账号名称。
    * sourceIp  源IP。
    * targetIp  目标IP。
    * nodeName  节点信息。
    * renameCommands  重命名的指令。
    * updatedConfigLength  更新配置项的长度。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'oldCapacity' => 'string',
            'newCapacity' => 'string',
            'enablePublicIp' => 'bool',
            'publicIpId' => 'string',
            'publicIpAddress' => 'string',
            'enableSsl' => 'bool',
            'oldCacheMode' => 'string',
            'newCacheMode' => 'string',
            'oldResourceSpecCode' => 'string',
            'newResourceSpecCode' => 'string',
            'oldReplicaNum' => 'int',
            'newReplicaNum' => 'int',
            'oldCacheType' => 'string',
            'newCacheType' => 'string',
            'replicaIp' => 'string',
            'replicaAz' => 'string',
            'groupName' => 'string',
            'oldPort' => 'int',
            'newPort' => 'int',
            'isOnlyAdjustCharging' => 'bool',
            'accountName' => 'string',
            'sourceIp' => 'string',
            'targetIp' => 'string',
            'nodeName' => 'string',
            'renameCommands' => 'string[]',
            'updatedConfigLength' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * oldCapacity  变更前的容量，仅在变更规格时有值。
    * newCapacity  变更后的容量，仅在变更规格时有值。
    * enablePublicIp  是否开启公网访问，仅在开启公网访问时有值。
    * publicIpId  公网IP的ID，仅在开启公网访问时有值。
    * publicIpAddress  公网IP地址，仅在开启公网访问时有值。
    * enableSsl  是否开启SSL，仅在开启SSL时有值。
    * oldCacheMode  变更前的缓存类型，仅在变更规格时有值。
    * newCacheMode  变更后的缓存类型，仅在变更规格时有值。
    * oldResourceSpecCode  变更前的规格参数，仅在变更规格时有值。
    * newResourceSpecCode  变更后的规格参数，仅在变更规格时有值。
    * oldReplicaNum  变更前的副本数量，仅在变更规格时有值。
    * newReplicaNum  变更后的副本数量，仅在变更规格时有值。
    * oldCacheType  变更前的缓存类型，仅在变更规格时有值。
    * newCacheType  变更后的规格类型，仅在变更规格时有值。
    * replicaIp  副本IP。
    * replicaAz  副本所在可用区。
    * groupName  组名。
    * oldPort  旧端口。
    * newPort  新端口。
    * isOnlyAdjustCharging  是否只是调整计费模式。
    * accountName  账号名称。
    * sourceIp  源IP。
    * targetIp  目标IP。
    * nodeName  节点信息。
    * renameCommands  重命名的指令。
    * updatedConfigLength  更新配置项的长度。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'oldCapacity' => null,
        'newCapacity' => null,
        'enablePublicIp' => null,
        'publicIpId' => null,
        'publicIpAddress' => null,
        'enableSsl' => null,
        'oldCacheMode' => null,
        'newCacheMode' => null,
        'oldResourceSpecCode' => null,
        'newResourceSpecCode' => null,
        'oldReplicaNum' => null,
        'newReplicaNum' => null,
        'oldCacheType' => null,
        'newCacheType' => null,
        'replicaIp' => null,
        'replicaAz' => null,
        'groupName' => null,
        'oldPort' => null,
        'newPort' => null,
        'isOnlyAdjustCharging' => null,
        'accountName' => null,
        'sourceIp' => null,
        'targetIp' => null,
        'nodeName' => null,
        'renameCommands' => null,
        'updatedConfigLength' => null
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
    * oldCapacity  变更前的容量，仅在变更规格时有值。
    * newCapacity  变更后的容量，仅在变更规格时有值。
    * enablePublicIp  是否开启公网访问，仅在开启公网访问时有值。
    * publicIpId  公网IP的ID，仅在开启公网访问时有值。
    * publicIpAddress  公网IP地址，仅在开启公网访问时有值。
    * enableSsl  是否开启SSL，仅在开启SSL时有值。
    * oldCacheMode  变更前的缓存类型，仅在变更规格时有值。
    * newCacheMode  变更后的缓存类型，仅在变更规格时有值。
    * oldResourceSpecCode  变更前的规格参数，仅在变更规格时有值。
    * newResourceSpecCode  变更后的规格参数，仅在变更规格时有值。
    * oldReplicaNum  变更前的副本数量，仅在变更规格时有值。
    * newReplicaNum  变更后的副本数量，仅在变更规格时有值。
    * oldCacheType  变更前的缓存类型，仅在变更规格时有值。
    * newCacheType  变更后的规格类型，仅在变更规格时有值。
    * replicaIp  副本IP。
    * replicaAz  副本所在可用区。
    * groupName  组名。
    * oldPort  旧端口。
    * newPort  新端口。
    * isOnlyAdjustCharging  是否只是调整计费模式。
    * accountName  账号名称。
    * sourceIp  源IP。
    * targetIp  目标IP。
    * nodeName  节点信息。
    * renameCommands  重命名的指令。
    * updatedConfigLength  更新配置项的长度。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'oldCapacity' => 'old_capacity',
            'newCapacity' => 'new_capacity',
            'enablePublicIp' => 'enable_public_ip',
            'publicIpId' => 'public_ip_id',
            'publicIpAddress' => 'public_ip_address',
            'enableSsl' => 'enable_ssl',
            'oldCacheMode' => 'old_cache_mode',
            'newCacheMode' => 'new_cache_mode',
            'oldResourceSpecCode' => 'old_resource_spec_code',
            'newResourceSpecCode' => 'new_resource_spec_code',
            'oldReplicaNum' => 'old_replica_num',
            'newReplicaNum' => 'new_replica_num',
            'oldCacheType' => 'old_cache_type',
            'newCacheType' => 'new_cache_type',
            'replicaIp' => 'replica_ip',
            'replicaAz' => 'replica_az',
            'groupName' => 'group_name',
            'oldPort' => 'old_port',
            'newPort' => 'new_port',
            'isOnlyAdjustCharging' => 'is_only_adjust_charging',
            'accountName' => 'account_name',
            'sourceIp' => 'source_ip',
            'targetIp' => 'target_ip',
            'nodeName' => 'node_name',
            'renameCommands' => 'rename_commands',
            'updatedConfigLength' => 'updated_config_length'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * oldCapacity  变更前的容量，仅在变更规格时有值。
    * newCapacity  变更后的容量，仅在变更规格时有值。
    * enablePublicIp  是否开启公网访问，仅在开启公网访问时有值。
    * publicIpId  公网IP的ID，仅在开启公网访问时有值。
    * publicIpAddress  公网IP地址，仅在开启公网访问时有值。
    * enableSsl  是否开启SSL，仅在开启SSL时有值。
    * oldCacheMode  变更前的缓存类型，仅在变更规格时有值。
    * newCacheMode  变更后的缓存类型，仅在变更规格时有值。
    * oldResourceSpecCode  变更前的规格参数，仅在变更规格时有值。
    * newResourceSpecCode  变更后的规格参数，仅在变更规格时有值。
    * oldReplicaNum  变更前的副本数量，仅在变更规格时有值。
    * newReplicaNum  变更后的副本数量，仅在变更规格时有值。
    * oldCacheType  变更前的缓存类型，仅在变更规格时有值。
    * newCacheType  变更后的规格类型，仅在变更规格时有值。
    * replicaIp  副本IP。
    * replicaAz  副本所在可用区。
    * groupName  组名。
    * oldPort  旧端口。
    * newPort  新端口。
    * isOnlyAdjustCharging  是否只是调整计费模式。
    * accountName  账号名称。
    * sourceIp  源IP。
    * targetIp  目标IP。
    * nodeName  节点信息。
    * renameCommands  重命名的指令。
    * updatedConfigLength  更新配置项的长度。
    *
    * @var string[]
    */
    protected static $setters = [
            'oldCapacity' => 'setOldCapacity',
            'newCapacity' => 'setNewCapacity',
            'enablePublicIp' => 'setEnablePublicIp',
            'publicIpId' => 'setPublicIpId',
            'publicIpAddress' => 'setPublicIpAddress',
            'enableSsl' => 'setEnableSsl',
            'oldCacheMode' => 'setOldCacheMode',
            'newCacheMode' => 'setNewCacheMode',
            'oldResourceSpecCode' => 'setOldResourceSpecCode',
            'newResourceSpecCode' => 'setNewResourceSpecCode',
            'oldReplicaNum' => 'setOldReplicaNum',
            'newReplicaNum' => 'setNewReplicaNum',
            'oldCacheType' => 'setOldCacheType',
            'newCacheType' => 'setNewCacheType',
            'replicaIp' => 'setReplicaIp',
            'replicaAz' => 'setReplicaAz',
            'groupName' => 'setGroupName',
            'oldPort' => 'setOldPort',
            'newPort' => 'setNewPort',
            'isOnlyAdjustCharging' => 'setIsOnlyAdjustCharging',
            'accountName' => 'setAccountName',
            'sourceIp' => 'setSourceIp',
            'targetIp' => 'setTargetIp',
            'nodeName' => 'setNodeName',
            'renameCommands' => 'setRenameCommands',
            'updatedConfigLength' => 'setUpdatedConfigLength'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * oldCapacity  变更前的容量，仅在变更规格时有值。
    * newCapacity  变更后的容量，仅在变更规格时有值。
    * enablePublicIp  是否开启公网访问，仅在开启公网访问时有值。
    * publicIpId  公网IP的ID，仅在开启公网访问时有值。
    * publicIpAddress  公网IP地址，仅在开启公网访问时有值。
    * enableSsl  是否开启SSL，仅在开启SSL时有值。
    * oldCacheMode  变更前的缓存类型，仅在变更规格时有值。
    * newCacheMode  变更后的缓存类型，仅在变更规格时有值。
    * oldResourceSpecCode  变更前的规格参数，仅在变更规格时有值。
    * newResourceSpecCode  变更后的规格参数，仅在变更规格时有值。
    * oldReplicaNum  变更前的副本数量，仅在变更规格时有值。
    * newReplicaNum  变更后的副本数量，仅在变更规格时有值。
    * oldCacheType  变更前的缓存类型，仅在变更规格时有值。
    * newCacheType  变更后的规格类型，仅在变更规格时有值。
    * replicaIp  副本IP。
    * replicaAz  副本所在可用区。
    * groupName  组名。
    * oldPort  旧端口。
    * newPort  新端口。
    * isOnlyAdjustCharging  是否只是调整计费模式。
    * accountName  账号名称。
    * sourceIp  源IP。
    * targetIp  目标IP。
    * nodeName  节点信息。
    * renameCommands  重命名的指令。
    * updatedConfigLength  更新配置项的长度。
    *
    * @var string[]
    */
    protected static $getters = [
            'oldCapacity' => 'getOldCapacity',
            'newCapacity' => 'getNewCapacity',
            'enablePublicIp' => 'getEnablePublicIp',
            'publicIpId' => 'getPublicIpId',
            'publicIpAddress' => 'getPublicIpAddress',
            'enableSsl' => 'getEnableSsl',
            'oldCacheMode' => 'getOldCacheMode',
            'newCacheMode' => 'getNewCacheMode',
            'oldResourceSpecCode' => 'getOldResourceSpecCode',
            'newResourceSpecCode' => 'getNewResourceSpecCode',
            'oldReplicaNum' => 'getOldReplicaNum',
            'newReplicaNum' => 'getNewReplicaNum',
            'oldCacheType' => 'getOldCacheType',
            'newCacheType' => 'getNewCacheType',
            'replicaIp' => 'getReplicaIp',
            'replicaAz' => 'getReplicaAz',
            'groupName' => 'getGroupName',
            'oldPort' => 'getOldPort',
            'newPort' => 'getNewPort',
            'isOnlyAdjustCharging' => 'getIsOnlyAdjustCharging',
            'accountName' => 'getAccountName',
            'sourceIp' => 'getSourceIp',
            'targetIp' => 'getTargetIp',
            'nodeName' => 'getNodeName',
            'renameCommands' => 'getRenameCommands',
            'updatedConfigLength' => 'getUpdatedConfigLength'
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
        $this->container['oldCapacity'] = isset($data['oldCapacity']) ? $data['oldCapacity'] : null;
        $this->container['newCapacity'] = isset($data['newCapacity']) ? $data['newCapacity'] : null;
        $this->container['enablePublicIp'] = isset($data['enablePublicIp']) ? $data['enablePublicIp'] : null;
        $this->container['publicIpId'] = isset($data['publicIpId']) ? $data['publicIpId'] : null;
        $this->container['publicIpAddress'] = isset($data['publicIpAddress']) ? $data['publicIpAddress'] : null;
        $this->container['enableSsl'] = isset($data['enableSsl']) ? $data['enableSsl'] : null;
        $this->container['oldCacheMode'] = isset($data['oldCacheMode']) ? $data['oldCacheMode'] : null;
        $this->container['newCacheMode'] = isset($data['newCacheMode']) ? $data['newCacheMode'] : null;
        $this->container['oldResourceSpecCode'] = isset($data['oldResourceSpecCode']) ? $data['oldResourceSpecCode'] : null;
        $this->container['newResourceSpecCode'] = isset($data['newResourceSpecCode']) ? $data['newResourceSpecCode'] : null;
        $this->container['oldReplicaNum'] = isset($data['oldReplicaNum']) ? $data['oldReplicaNum'] : null;
        $this->container['newReplicaNum'] = isset($data['newReplicaNum']) ? $data['newReplicaNum'] : null;
        $this->container['oldCacheType'] = isset($data['oldCacheType']) ? $data['oldCacheType'] : null;
        $this->container['newCacheType'] = isset($data['newCacheType']) ? $data['newCacheType'] : null;
        $this->container['replicaIp'] = isset($data['replicaIp']) ? $data['replicaIp'] : null;
        $this->container['replicaAz'] = isset($data['replicaAz']) ? $data['replicaAz'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['oldPort'] = isset($data['oldPort']) ? $data['oldPort'] : null;
        $this->container['newPort'] = isset($data['newPort']) ? $data['newPort'] : null;
        $this->container['isOnlyAdjustCharging'] = isset($data['isOnlyAdjustCharging']) ? $data['isOnlyAdjustCharging'] : null;
        $this->container['accountName'] = isset($data['accountName']) ? $data['accountName'] : null;
        $this->container['sourceIp'] = isset($data['sourceIp']) ? $data['sourceIp'] : null;
        $this->container['targetIp'] = isset($data['targetIp']) ? $data['targetIp'] : null;
        $this->container['nodeName'] = isset($data['nodeName']) ? $data['nodeName'] : null;
        $this->container['renameCommands'] = isset($data['renameCommands']) ? $data['renameCommands'] : null;
        $this->container['updatedConfigLength'] = isset($data['updatedConfigLength']) ? $data['updatedConfigLength'] : null;
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
    * Gets oldCapacity
    *  变更前的容量，仅在变更规格时有值。
    *
    * @return string|null
    */
    public function getOldCapacity()
    {
        return $this->container['oldCapacity'];
    }

    /**
    * Sets oldCapacity
    *
    * @param string|null $oldCapacity 变更前的容量，仅在变更规格时有值。
    *
    * @return $this
    */
    public function setOldCapacity($oldCapacity)
    {
        $this->container['oldCapacity'] = $oldCapacity;
        return $this;
    }

    /**
    * Gets newCapacity
    *  变更后的容量，仅在变更规格时有值。
    *
    * @return string|null
    */
    public function getNewCapacity()
    {
        return $this->container['newCapacity'];
    }

    /**
    * Sets newCapacity
    *
    * @param string|null $newCapacity 变更后的容量，仅在变更规格时有值。
    *
    * @return $this
    */
    public function setNewCapacity($newCapacity)
    {
        $this->container['newCapacity'] = $newCapacity;
        return $this;
    }

    /**
    * Gets enablePublicIp
    *  是否开启公网访问，仅在开启公网访问时有值。
    *
    * @return bool|null
    */
    public function getEnablePublicIp()
    {
        return $this->container['enablePublicIp'];
    }

    /**
    * Sets enablePublicIp
    *
    * @param bool|null $enablePublicIp 是否开启公网访问，仅在开启公网访问时有值。
    *
    * @return $this
    */
    public function setEnablePublicIp($enablePublicIp)
    {
        $this->container['enablePublicIp'] = $enablePublicIp;
        return $this;
    }

    /**
    * Gets publicIpId
    *  公网IP的ID，仅在开启公网访问时有值。
    *
    * @return string|null
    */
    public function getPublicIpId()
    {
        return $this->container['publicIpId'];
    }

    /**
    * Sets publicIpId
    *
    * @param string|null $publicIpId 公网IP的ID，仅在开启公网访问时有值。
    *
    * @return $this
    */
    public function setPublicIpId($publicIpId)
    {
        $this->container['publicIpId'] = $publicIpId;
        return $this;
    }

    /**
    * Gets publicIpAddress
    *  公网IP地址，仅在开启公网访问时有值。
    *
    * @return string|null
    */
    public function getPublicIpAddress()
    {
        return $this->container['publicIpAddress'];
    }

    /**
    * Sets publicIpAddress
    *
    * @param string|null $publicIpAddress 公网IP地址，仅在开启公网访问时有值。
    *
    * @return $this
    */
    public function setPublicIpAddress($publicIpAddress)
    {
        $this->container['publicIpAddress'] = $publicIpAddress;
        return $this;
    }

    /**
    * Gets enableSsl
    *  是否开启SSL，仅在开启SSL时有值。
    *
    * @return bool|null
    */
    public function getEnableSsl()
    {
        return $this->container['enableSsl'];
    }

    /**
    * Sets enableSsl
    *
    * @param bool|null $enableSsl 是否开启SSL，仅在开启SSL时有值。
    *
    * @return $this
    */
    public function setEnableSsl($enableSsl)
    {
        $this->container['enableSsl'] = $enableSsl;
        return $this;
    }

    /**
    * Gets oldCacheMode
    *  变更前的缓存类型，仅在变更规格时有值。
    *
    * @return string|null
    */
    public function getOldCacheMode()
    {
        return $this->container['oldCacheMode'];
    }

    /**
    * Sets oldCacheMode
    *
    * @param string|null $oldCacheMode 变更前的缓存类型，仅在变更规格时有值。
    *
    * @return $this
    */
    public function setOldCacheMode($oldCacheMode)
    {
        $this->container['oldCacheMode'] = $oldCacheMode;
        return $this;
    }

    /**
    * Gets newCacheMode
    *  变更后的缓存类型，仅在变更规格时有值。
    *
    * @return string|null
    */
    public function getNewCacheMode()
    {
        return $this->container['newCacheMode'];
    }

    /**
    * Sets newCacheMode
    *
    * @param string|null $newCacheMode 变更后的缓存类型，仅在变更规格时有值。
    *
    * @return $this
    */
    public function setNewCacheMode($newCacheMode)
    {
        $this->container['newCacheMode'] = $newCacheMode;
        return $this;
    }

    /**
    * Gets oldResourceSpecCode
    *  变更前的规格参数，仅在变更规格时有值。
    *
    * @return string|null
    */
    public function getOldResourceSpecCode()
    {
        return $this->container['oldResourceSpecCode'];
    }

    /**
    * Sets oldResourceSpecCode
    *
    * @param string|null $oldResourceSpecCode 变更前的规格参数，仅在变更规格时有值。
    *
    * @return $this
    */
    public function setOldResourceSpecCode($oldResourceSpecCode)
    {
        $this->container['oldResourceSpecCode'] = $oldResourceSpecCode;
        return $this;
    }

    /**
    * Gets newResourceSpecCode
    *  变更后的规格参数，仅在变更规格时有值。
    *
    * @return string|null
    */
    public function getNewResourceSpecCode()
    {
        return $this->container['newResourceSpecCode'];
    }

    /**
    * Sets newResourceSpecCode
    *
    * @param string|null $newResourceSpecCode 变更后的规格参数，仅在变更规格时有值。
    *
    * @return $this
    */
    public function setNewResourceSpecCode($newResourceSpecCode)
    {
        $this->container['newResourceSpecCode'] = $newResourceSpecCode;
        return $this;
    }

    /**
    * Gets oldReplicaNum
    *  变更前的副本数量，仅在变更规格时有值。
    *
    * @return int|null
    */
    public function getOldReplicaNum()
    {
        return $this->container['oldReplicaNum'];
    }

    /**
    * Sets oldReplicaNum
    *
    * @param int|null $oldReplicaNum 变更前的副本数量，仅在变更规格时有值。
    *
    * @return $this
    */
    public function setOldReplicaNum($oldReplicaNum)
    {
        $this->container['oldReplicaNum'] = $oldReplicaNum;
        return $this;
    }

    /**
    * Gets newReplicaNum
    *  变更后的副本数量，仅在变更规格时有值。
    *
    * @return int|null
    */
    public function getNewReplicaNum()
    {
        return $this->container['newReplicaNum'];
    }

    /**
    * Sets newReplicaNum
    *
    * @param int|null $newReplicaNum 变更后的副本数量，仅在变更规格时有值。
    *
    * @return $this
    */
    public function setNewReplicaNum($newReplicaNum)
    {
        $this->container['newReplicaNum'] = $newReplicaNum;
        return $this;
    }

    /**
    * Gets oldCacheType
    *  变更前的缓存类型，仅在变更规格时有值。
    *
    * @return string|null
    */
    public function getOldCacheType()
    {
        return $this->container['oldCacheType'];
    }

    /**
    * Sets oldCacheType
    *
    * @param string|null $oldCacheType 变更前的缓存类型，仅在变更规格时有值。
    *
    * @return $this
    */
    public function setOldCacheType($oldCacheType)
    {
        $this->container['oldCacheType'] = $oldCacheType;
        return $this;
    }

    /**
    * Gets newCacheType
    *  变更后的规格类型，仅在变更规格时有值。
    *
    * @return string|null
    */
    public function getNewCacheType()
    {
        return $this->container['newCacheType'];
    }

    /**
    * Sets newCacheType
    *
    * @param string|null $newCacheType 变更后的规格类型，仅在变更规格时有值。
    *
    * @return $this
    */
    public function setNewCacheType($newCacheType)
    {
        $this->container['newCacheType'] = $newCacheType;
        return $this;
    }

    /**
    * Gets replicaIp
    *  副本IP。
    *
    * @return string|null
    */
    public function getReplicaIp()
    {
        return $this->container['replicaIp'];
    }

    /**
    * Sets replicaIp
    *
    * @param string|null $replicaIp 副本IP。
    *
    * @return $this
    */
    public function setReplicaIp($replicaIp)
    {
        $this->container['replicaIp'] = $replicaIp;
        return $this;
    }

    /**
    * Gets replicaAz
    *  副本所在可用区。
    *
    * @return string|null
    */
    public function getReplicaAz()
    {
        return $this->container['replicaAz'];
    }

    /**
    * Sets replicaAz
    *
    * @param string|null $replicaAz 副本所在可用区。
    *
    * @return $this
    */
    public function setReplicaAz($replicaAz)
    {
        $this->container['replicaAz'] = $replicaAz;
        return $this;
    }

    /**
    * Gets groupName
    *  组名。
    *
    * @return string|null
    */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
    * Sets groupName
    *
    * @param string|null $groupName 组名。
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets oldPort
    *  旧端口。
    *
    * @return int|null
    */
    public function getOldPort()
    {
        return $this->container['oldPort'];
    }

    /**
    * Sets oldPort
    *
    * @param int|null $oldPort 旧端口。
    *
    * @return $this
    */
    public function setOldPort($oldPort)
    {
        $this->container['oldPort'] = $oldPort;
        return $this;
    }

    /**
    * Gets newPort
    *  新端口。
    *
    * @return int|null
    */
    public function getNewPort()
    {
        return $this->container['newPort'];
    }

    /**
    * Sets newPort
    *
    * @param int|null $newPort 新端口。
    *
    * @return $this
    */
    public function setNewPort($newPort)
    {
        $this->container['newPort'] = $newPort;
        return $this;
    }

    /**
    * Gets isOnlyAdjustCharging
    *  是否只是调整计费模式。
    *
    * @return bool|null
    */
    public function getIsOnlyAdjustCharging()
    {
        return $this->container['isOnlyAdjustCharging'];
    }

    /**
    * Sets isOnlyAdjustCharging
    *
    * @param bool|null $isOnlyAdjustCharging 是否只是调整计费模式。
    *
    * @return $this
    */
    public function setIsOnlyAdjustCharging($isOnlyAdjustCharging)
    {
        $this->container['isOnlyAdjustCharging'] = $isOnlyAdjustCharging;
        return $this;
    }

    /**
    * Gets accountName
    *  账号名称。
    *
    * @return string|null
    */
    public function getAccountName()
    {
        return $this->container['accountName'];
    }

    /**
    * Sets accountName
    *
    * @param string|null $accountName 账号名称。
    *
    * @return $this
    */
    public function setAccountName($accountName)
    {
        $this->container['accountName'] = $accountName;
        return $this;
    }

    /**
    * Gets sourceIp
    *  源IP。
    *
    * @return string|null
    */
    public function getSourceIp()
    {
        return $this->container['sourceIp'];
    }

    /**
    * Sets sourceIp
    *
    * @param string|null $sourceIp 源IP。
    *
    * @return $this
    */
    public function setSourceIp($sourceIp)
    {
        $this->container['sourceIp'] = $sourceIp;
        return $this;
    }

    /**
    * Gets targetIp
    *  目标IP。
    *
    * @return string|null
    */
    public function getTargetIp()
    {
        return $this->container['targetIp'];
    }

    /**
    * Sets targetIp
    *
    * @param string|null $targetIp 目标IP。
    *
    * @return $this
    */
    public function setTargetIp($targetIp)
    {
        $this->container['targetIp'] = $targetIp;
        return $this;
    }

    /**
    * Gets nodeName
    *  节点信息。
    *
    * @return string|null
    */
    public function getNodeName()
    {
        return $this->container['nodeName'];
    }

    /**
    * Sets nodeName
    *
    * @param string|null $nodeName 节点信息。
    *
    * @return $this
    */
    public function setNodeName($nodeName)
    {
        $this->container['nodeName'] = $nodeName;
        return $this;
    }

    /**
    * Gets renameCommands
    *  重命名的指令。
    *
    * @return string[]|null
    */
    public function getRenameCommands()
    {
        return $this->container['renameCommands'];
    }

    /**
    * Sets renameCommands
    *
    * @param string[]|null $renameCommands 重命名的指令。
    *
    * @return $this
    */
    public function setRenameCommands($renameCommands)
    {
        $this->container['renameCommands'] = $renameCommands;
        return $this;
    }

    /**
    * Gets updatedConfigLength
    *  更新配置项的长度。
    *
    * @return int|null
    */
    public function getUpdatedConfigLength()
    {
        return $this->container['updatedConfigLength'];
    }

    /**
    * Sets updatedConfigLength
    *
    * @param int|null $updatedConfigLength 更新配置项的长度。
    *
    * @return $this
    */
    public function setUpdatedConfigLength($updatedConfigLength)
    {
        $this->container['updatedConfigLength'] = $updatedConfigLength;
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

