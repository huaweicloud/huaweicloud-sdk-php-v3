<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClusterStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClusterStatus';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * phase  集群状态，取值如下 - Available：可用，表示集群处于正常状态。 - Unavailable：不可用，表示集群异常，需手动删除。 - ScalingUp：扩容中，表示集群正处于扩容过程中。 - ScalingDown：缩容中，表示集群正处于缩容过程中。 - Creating：创建中，表示集群正处于创建过程中。 - Deleting：删除中，表示集群正处于删除过程中。 - Upgrading：升级中，表示集群正处于升级过程中。 - Resizing：规格变更中，表示集群正处于变更规格中。 - RollingBack：回滚中，表示集群正处于回滚过程中。 - RollbackFailed：回滚异常，表示集群回滚异常。 - Hibernating：休眠中，表示集群正处于休眠过程中。 - Hibernation：已休眠，表示集群正处于休眠状态。 - Awaking：唤醒中，表示集群正处于从休眠状态唤醒的过程中。 - Empty：集群无任何资源（已废弃） - Error：错误，表示集群资源异常，可尝试手动删除。
    * jobId  **参数解释：** 任务ID，集群当前状态关联的任务ID。当前支持: - 创建集群时返回关联的任务ID，可通过任务ID查询创建集群的附属任务信息； - 删除集群或者删除集群失败时返回关联的任务ID，此字段非空时，可通过任务ID查询删除集群的附属任务信息。  **约束限制：** 不涉及 **取值范围：** 不涉及  > 任务信息具有一定时效性，仅用于短期跟踪任务进度，请勿用于集群状态判断等额外场景。
    * reason  集群变为当前状态的原因，在集群在非“Available”状态下时，会返回此参数。
    * message  集群变为当前状态的原因的详细信息，在集群在非“Available”状态下时，会返回此参数。
    * endpoints  集群中 kube-apiserver 的访问地址。
    * isLocked  CBC资源锁定
    * lockScene  CBC资源锁定场景
    * lockSource  锁定资源
    * lockSourceId  锁定的资源ID
    * deleteOption  删除配置状态（仅删除请求响应包含）
    * deleteStatus  删除状态信息（仅删除请求响应包含）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'phase' => 'string',
            'jobId' => 'string',
            'reason' => 'string',
            'message' => 'string',
            'endpoints' => '\HuaweiCloud\SDK\Cce\V3\Model\ClusterEndpoints[]',
            'isLocked' => 'bool',
            'lockScene' => 'string',
            'lockSource' => 'string',
            'lockSourceId' => 'string',
            'deleteOption' => 'object',
            'deleteStatus' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * phase  集群状态，取值如下 - Available：可用，表示集群处于正常状态。 - Unavailable：不可用，表示集群异常，需手动删除。 - ScalingUp：扩容中，表示集群正处于扩容过程中。 - ScalingDown：缩容中，表示集群正处于缩容过程中。 - Creating：创建中，表示集群正处于创建过程中。 - Deleting：删除中，表示集群正处于删除过程中。 - Upgrading：升级中，表示集群正处于升级过程中。 - Resizing：规格变更中，表示集群正处于变更规格中。 - RollingBack：回滚中，表示集群正处于回滚过程中。 - RollbackFailed：回滚异常，表示集群回滚异常。 - Hibernating：休眠中，表示集群正处于休眠过程中。 - Hibernation：已休眠，表示集群正处于休眠状态。 - Awaking：唤醒中，表示集群正处于从休眠状态唤醒的过程中。 - Empty：集群无任何资源（已废弃） - Error：错误，表示集群资源异常，可尝试手动删除。
    * jobId  **参数解释：** 任务ID，集群当前状态关联的任务ID。当前支持: - 创建集群时返回关联的任务ID，可通过任务ID查询创建集群的附属任务信息； - 删除集群或者删除集群失败时返回关联的任务ID，此字段非空时，可通过任务ID查询删除集群的附属任务信息。  **约束限制：** 不涉及 **取值范围：** 不涉及  > 任务信息具有一定时效性，仅用于短期跟踪任务进度，请勿用于集群状态判断等额外场景。
    * reason  集群变为当前状态的原因，在集群在非“Available”状态下时，会返回此参数。
    * message  集群变为当前状态的原因的详细信息，在集群在非“Available”状态下时，会返回此参数。
    * endpoints  集群中 kube-apiserver 的访问地址。
    * isLocked  CBC资源锁定
    * lockScene  CBC资源锁定场景
    * lockSource  锁定资源
    * lockSourceId  锁定的资源ID
    * deleteOption  删除配置状态（仅删除请求响应包含）
    * deleteStatus  删除状态信息（仅删除请求响应包含）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'phase' => null,
        'jobId' => null,
        'reason' => null,
        'message' => null,
        'endpoints' => null,
        'isLocked' => null,
        'lockScene' => null,
        'lockSource' => null,
        'lockSourceId' => null,
        'deleteOption' => null,
        'deleteStatus' => null
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
    * phase  集群状态，取值如下 - Available：可用，表示集群处于正常状态。 - Unavailable：不可用，表示集群异常，需手动删除。 - ScalingUp：扩容中，表示集群正处于扩容过程中。 - ScalingDown：缩容中，表示集群正处于缩容过程中。 - Creating：创建中，表示集群正处于创建过程中。 - Deleting：删除中，表示集群正处于删除过程中。 - Upgrading：升级中，表示集群正处于升级过程中。 - Resizing：规格变更中，表示集群正处于变更规格中。 - RollingBack：回滚中，表示集群正处于回滚过程中。 - RollbackFailed：回滚异常，表示集群回滚异常。 - Hibernating：休眠中，表示集群正处于休眠过程中。 - Hibernation：已休眠，表示集群正处于休眠状态。 - Awaking：唤醒中，表示集群正处于从休眠状态唤醒的过程中。 - Empty：集群无任何资源（已废弃） - Error：错误，表示集群资源异常，可尝试手动删除。
    * jobId  **参数解释：** 任务ID，集群当前状态关联的任务ID。当前支持: - 创建集群时返回关联的任务ID，可通过任务ID查询创建集群的附属任务信息； - 删除集群或者删除集群失败时返回关联的任务ID，此字段非空时，可通过任务ID查询删除集群的附属任务信息。  **约束限制：** 不涉及 **取值范围：** 不涉及  > 任务信息具有一定时效性，仅用于短期跟踪任务进度，请勿用于集群状态判断等额外场景。
    * reason  集群变为当前状态的原因，在集群在非“Available”状态下时，会返回此参数。
    * message  集群变为当前状态的原因的详细信息，在集群在非“Available”状态下时，会返回此参数。
    * endpoints  集群中 kube-apiserver 的访问地址。
    * isLocked  CBC资源锁定
    * lockScene  CBC资源锁定场景
    * lockSource  锁定资源
    * lockSourceId  锁定的资源ID
    * deleteOption  删除配置状态（仅删除请求响应包含）
    * deleteStatus  删除状态信息（仅删除请求响应包含）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'phase' => 'phase',
            'jobId' => 'jobID',
            'reason' => 'reason',
            'message' => 'message',
            'endpoints' => 'endpoints',
            'isLocked' => 'isLocked',
            'lockScene' => 'lockScene',
            'lockSource' => 'lockSource',
            'lockSourceId' => 'lockSourceId',
            'deleteOption' => 'deleteOption',
            'deleteStatus' => 'deleteStatus'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * phase  集群状态，取值如下 - Available：可用，表示集群处于正常状态。 - Unavailable：不可用，表示集群异常，需手动删除。 - ScalingUp：扩容中，表示集群正处于扩容过程中。 - ScalingDown：缩容中，表示集群正处于缩容过程中。 - Creating：创建中，表示集群正处于创建过程中。 - Deleting：删除中，表示集群正处于删除过程中。 - Upgrading：升级中，表示集群正处于升级过程中。 - Resizing：规格变更中，表示集群正处于变更规格中。 - RollingBack：回滚中，表示集群正处于回滚过程中。 - RollbackFailed：回滚异常，表示集群回滚异常。 - Hibernating：休眠中，表示集群正处于休眠过程中。 - Hibernation：已休眠，表示集群正处于休眠状态。 - Awaking：唤醒中，表示集群正处于从休眠状态唤醒的过程中。 - Empty：集群无任何资源（已废弃） - Error：错误，表示集群资源异常，可尝试手动删除。
    * jobId  **参数解释：** 任务ID，集群当前状态关联的任务ID。当前支持: - 创建集群时返回关联的任务ID，可通过任务ID查询创建集群的附属任务信息； - 删除集群或者删除集群失败时返回关联的任务ID，此字段非空时，可通过任务ID查询删除集群的附属任务信息。  **约束限制：** 不涉及 **取值范围：** 不涉及  > 任务信息具有一定时效性，仅用于短期跟踪任务进度，请勿用于集群状态判断等额外场景。
    * reason  集群变为当前状态的原因，在集群在非“Available”状态下时，会返回此参数。
    * message  集群变为当前状态的原因的详细信息，在集群在非“Available”状态下时，会返回此参数。
    * endpoints  集群中 kube-apiserver 的访问地址。
    * isLocked  CBC资源锁定
    * lockScene  CBC资源锁定场景
    * lockSource  锁定资源
    * lockSourceId  锁定的资源ID
    * deleteOption  删除配置状态（仅删除请求响应包含）
    * deleteStatus  删除状态信息（仅删除请求响应包含）
    *
    * @var string[]
    */
    protected static $setters = [
            'phase' => 'setPhase',
            'jobId' => 'setJobId',
            'reason' => 'setReason',
            'message' => 'setMessage',
            'endpoints' => 'setEndpoints',
            'isLocked' => 'setIsLocked',
            'lockScene' => 'setLockScene',
            'lockSource' => 'setLockSource',
            'lockSourceId' => 'setLockSourceId',
            'deleteOption' => 'setDeleteOption',
            'deleteStatus' => 'setDeleteStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * phase  集群状态，取值如下 - Available：可用，表示集群处于正常状态。 - Unavailable：不可用，表示集群异常，需手动删除。 - ScalingUp：扩容中，表示集群正处于扩容过程中。 - ScalingDown：缩容中，表示集群正处于缩容过程中。 - Creating：创建中，表示集群正处于创建过程中。 - Deleting：删除中，表示集群正处于删除过程中。 - Upgrading：升级中，表示集群正处于升级过程中。 - Resizing：规格变更中，表示集群正处于变更规格中。 - RollingBack：回滚中，表示集群正处于回滚过程中。 - RollbackFailed：回滚异常，表示集群回滚异常。 - Hibernating：休眠中，表示集群正处于休眠过程中。 - Hibernation：已休眠，表示集群正处于休眠状态。 - Awaking：唤醒中，表示集群正处于从休眠状态唤醒的过程中。 - Empty：集群无任何资源（已废弃） - Error：错误，表示集群资源异常，可尝试手动删除。
    * jobId  **参数解释：** 任务ID，集群当前状态关联的任务ID。当前支持: - 创建集群时返回关联的任务ID，可通过任务ID查询创建集群的附属任务信息； - 删除集群或者删除集群失败时返回关联的任务ID，此字段非空时，可通过任务ID查询删除集群的附属任务信息。  **约束限制：** 不涉及 **取值范围：** 不涉及  > 任务信息具有一定时效性，仅用于短期跟踪任务进度，请勿用于集群状态判断等额外场景。
    * reason  集群变为当前状态的原因，在集群在非“Available”状态下时，会返回此参数。
    * message  集群变为当前状态的原因的详细信息，在集群在非“Available”状态下时，会返回此参数。
    * endpoints  集群中 kube-apiserver 的访问地址。
    * isLocked  CBC资源锁定
    * lockScene  CBC资源锁定场景
    * lockSource  锁定资源
    * lockSourceId  锁定的资源ID
    * deleteOption  删除配置状态（仅删除请求响应包含）
    * deleteStatus  删除状态信息（仅删除请求响应包含）
    *
    * @var string[]
    */
    protected static $getters = [
            'phase' => 'getPhase',
            'jobId' => 'getJobId',
            'reason' => 'getReason',
            'message' => 'getMessage',
            'endpoints' => 'getEndpoints',
            'isLocked' => 'getIsLocked',
            'lockScene' => 'getLockScene',
            'lockSource' => 'getLockSource',
            'lockSourceId' => 'getLockSourceId',
            'deleteOption' => 'getDeleteOption',
            'deleteStatus' => 'getDeleteStatus'
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
        $this->container['phase'] = isset($data['phase']) ? $data['phase'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['endpoints'] = isset($data['endpoints']) ? $data['endpoints'] : null;
        $this->container['isLocked'] = isset($data['isLocked']) ? $data['isLocked'] : null;
        $this->container['lockScene'] = isset($data['lockScene']) ? $data['lockScene'] : null;
        $this->container['lockSource'] = isset($data['lockSource']) ? $data['lockSource'] : null;
        $this->container['lockSourceId'] = isset($data['lockSourceId']) ? $data['lockSourceId'] : null;
        $this->container['deleteOption'] = isset($data['deleteOption']) ? $data['deleteOption'] : null;
        $this->container['deleteStatus'] = isset($data['deleteStatus']) ? $data['deleteStatus'] : null;
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
    * Gets phase
    *  集群状态，取值如下 - Available：可用，表示集群处于正常状态。 - Unavailable：不可用，表示集群异常，需手动删除。 - ScalingUp：扩容中，表示集群正处于扩容过程中。 - ScalingDown：缩容中，表示集群正处于缩容过程中。 - Creating：创建中，表示集群正处于创建过程中。 - Deleting：删除中，表示集群正处于删除过程中。 - Upgrading：升级中，表示集群正处于升级过程中。 - Resizing：规格变更中，表示集群正处于变更规格中。 - RollingBack：回滚中，表示集群正处于回滚过程中。 - RollbackFailed：回滚异常，表示集群回滚异常。 - Hibernating：休眠中，表示集群正处于休眠过程中。 - Hibernation：已休眠，表示集群正处于休眠状态。 - Awaking：唤醒中，表示集群正处于从休眠状态唤醒的过程中。 - Empty：集群无任何资源（已废弃） - Error：错误，表示集群资源异常，可尝试手动删除。
    *
    * @return string|null
    */
    public function getPhase()
    {
        return $this->container['phase'];
    }

    /**
    * Sets phase
    *
    * @param string|null $phase 集群状态，取值如下 - Available：可用，表示集群处于正常状态。 - Unavailable：不可用，表示集群异常，需手动删除。 - ScalingUp：扩容中，表示集群正处于扩容过程中。 - ScalingDown：缩容中，表示集群正处于缩容过程中。 - Creating：创建中，表示集群正处于创建过程中。 - Deleting：删除中，表示集群正处于删除过程中。 - Upgrading：升级中，表示集群正处于升级过程中。 - Resizing：规格变更中，表示集群正处于变更规格中。 - RollingBack：回滚中，表示集群正处于回滚过程中。 - RollbackFailed：回滚异常，表示集群回滚异常。 - Hibernating：休眠中，表示集群正处于休眠过程中。 - Hibernation：已休眠，表示集群正处于休眠状态。 - Awaking：唤醒中，表示集群正处于从休眠状态唤醒的过程中。 - Empty：集群无任何资源（已废弃） - Error：错误，表示集群资源异常，可尝试手动删除。
    *
    * @return $this
    */
    public function setPhase($phase)
    {
        $this->container['phase'] = $phase;
        return $this;
    }

    /**
    * Gets jobId
    *  **参数解释：** 任务ID，集群当前状态关联的任务ID。当前支持: - 创建集群时返回关联的任务ID，可通过任务ID查询创建集群的附属任务信息； - 删除集群或者删除集群失败时返回关联的任务ID，此字段非空时，可通过任务ID查询删除集群的附属任务信息。  **约束限制：** 不涉及 **取值范围：** 不涉及  > 任务信息具有一定时效性，仅用于短期跟踪任务进度，请勿用于集群状态判断等额外场景。
    *
    * @return string|null
    */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
    * Sets jobId
    *
    * @param string|null $jobId **参数解释：** 任务ID，集群当前状态关联的任务ID。当前支持: - 创建集群时返回关联的任务ID，可通过任务ID查询创建集群的附属任务信息； - 删除集群或者删除集群失败时返回关联的任务ID，此字段非空时，可通过任务ID查询删除集群的附属任务信息。  **约束限制：** 不涉及 **取值范围：** 不涉及  > 任务信息具有一定时效性，仅用于短期跟踪任务进度，请勿用于集群状态判断等额外场景。
    *
    * @return $this
    */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;
        return $this;
    }

    /**
    * Gets reason
    *  集群变为当前状态的原因，在集群在非“Available”状态下时，会返回此参数。
    *
    * @return string|null
    */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
    * Sets reason
    *
    * @param string|null $reason 集群变为当前状态的原因，在集群在非“Available”状态下时，会返回此参数。
    *
    * @return $this
    */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;
        return $this;
    }

    /**
    * Gets message
    *  集群变为当前状态的原因的详细信息，在集群在非“Available”状态下时，会返回此参数。
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message 集群变为当前状态的原因的详细信息，在集群在非“Available”状态下时，会返回此参数。
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets endpoints
    *  集群中 kube-apiserver 的访问地址。
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\ClusterEndpoints[]|null
    */
    public function getEndpoints()
    {
        return $this->container['endpoints'];
    }

    /**
    * Sets endpoints
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\ClusterEndpoints[]|null $endpoints 集群中 kube-apiserver 的访问地址。
    *
    * @return $this
    */
    public function setEndpoints($endpoints)
    {
        $this->container['endpoints'] = $endpoints;
        return $this;
    }

    /**
    * Gets isLocked
    *  CBC资源锁定
    *
    * @return bool|null
    */
    public function getIsLocked()
    {
        return $this->container['isLocked'];
    }

    /**
    * Sets isLocked
    *
    * @param bool|null $isLocked CBC资源锁定
    *
    * @return $this
    */
    public function setIsLocked($isLocked)
    {
        $this->container['isLocked'] = $isLocked;
        return $this;
    }

    /**
    * Gets lockScene
    *  CBC资源锁定场景
    *
    * @return string|null
    */
    public function getLockScene()
    {
        return $this->container['lockScene'];
    }

    /**
    * Sets lockScene
    *
    * @param string|null $lockScene CBC资源锁定场景
    *
    * @return $this
    */
    public function setLockScene($lockScene)
    {
        $this->container['lockScene'] = $lockScene;
        return $this;
    }

    /**
    * Gets lockSource
    *  锁定资源
    *
    * @return string|null
    */
    public function getLockSource()
    {
        return $this->container['lockSource'];
    }

    /**
    * Sets lockSource
    *
    * @param string|null $lockSource 锁定资源
    *
    * @return $this
    */
    public function setLockSource($lockSource)
    {
        $this->container['lockSource'] = $lockSource;
        return $this;
    }

    /**
    * Gets lockSourceId
    *  锁定的资源ID
    *
    * @return string|null
    */
    public function getLockSourceId()
    {
        return $this->container['lockSourceId'];
    }

    /**
    * Sets lockSourceId
    *
    * @param string|null $lockSourceId 锁定的资源ID
    *
    * @return $this
    */
    public function setLockSourceId($lockSourceId)
    {
        $this->container['lockSourceId'] = $lockSourceId;
        return $this;
    }

    /**
    * Gets deleteOption
    *  删除配置状态（仅删除请求响应包含）
    *
    * @return object|null
    */
    public function getDeleteOption()
    {
        return $this->container['deleteOption'];
    }

    /**
    * Sets deleteOption
    *
    * @param object|null $deleteOption 删除配置状态（仅删除请求响应包含）
    *
    * @return $this
    */
    public function setDeleteOption($deleteOption)
    {
        $this->container['deleteOption'] = $deleteOption;
        return $this;
    }

    /**
    * Gets deleteStatus
    *  删除状态信息（仅删除请求响应包含）
    *
    * @return object|null
    */
    public function getDeleteStatus()
    {
        return $this->container['deleteStatus'];
    }

    /**
    * Sets deleteStatus
    *
    * @param object|null $deleteStatus 删除状态信息（仅删除请求响应包含）
    *
    * @return $this
    */
    public function setDeleteStatus($deleteStatus)
    {
        $this->container['deleteStatus'] = $deleteStatus;
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

