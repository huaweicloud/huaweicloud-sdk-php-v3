<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddonInstanceStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddonInstanceStatus';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  插件实例状态, 取值如下 - running：运行中，表示插件全部实例状态都在运行中，插件正常使用。 - abnormal：不可用，表示插件状态异常，插件不可使用。可点击插件名称查看实例异常事件。 - installing：安装中，表示插件正在安装中。 - installFailed：安装失败，表示插件安装失败，需要卸载后重新安装。 - upgrading：升级中，表示插件正在更新中。 - upgradeFailed：升级失败，表示插件升级失败，可重试升级或卸载后重新安装。 - deleting：删除中，表示插件正在删除中。 - deleteFailed：删除失败，表示插件删除失败，可重试卸载。 - deleteSuccess：删除成功，表示插件删除成功。 - available：部分就绪，表示插件下只有部分实例状态为运行中，插件部分功能可用。 - rollbacking：回滚中，表示插件正在回滚中。 - rollbackFailed：回滚失败，表示插件回滚失败，可重试回滚或卸载后重新安装。 - unknown：未知状态，表示插件模板实例不存在。
    * reason  插件安装失败原因
    * message  安装错误详情
    * targetVersions  此插件版本，支持升级的集群版本
    * currentVersion  currentVersion
    * isRollbackable  是否支持回滚到插件升级前的插件版本
    * previousVersion  插件升级或回滚前的版本
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string',
            'reason' => 'string',
            'message' => 'string',
            'targetVersions' => 'string[]',
            'currentVersion' => '\HuaweiCloud\SDK\Cce\V3\Model\Versions',
            'isRollbackable' => 'bool',
            'previousVersion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  插件实例状态, 取值如下 - running：运行中，表示插件全部实例状态都在运行中，插件正常使用。 - abnormal：不可用，表示插件状态异常，插件不可使用。可点击插件名称查看实例异常事件。 - installing：安装中，表示插件正在安装中。 - installFailed：安装失败，表示插件安装失败，需要卸载后重新安装。 - upgrading：升级中，表示插件正在更新中。 - upgradeFailed：升级失败，表示插件升级失败，可重试升级或卸载后重新安装。 - deleting：删除中，表示插件正在删除中。 - deleteFailed：删除失败，表示插件删除失败，可重试卸载。 - deleteSuccess：删除成功，表示插件删除成功。 - available：部分就绪，表示插件下只有部分实例状态为运行中，插件部分功能可用。 - rollbacking：回滚中，表示插件正在回滚中。 - rollbackFailed：回滚失败，表示插件回滚失败，可重试回滚或卸载后重新安装。 - unknown：未知状态，表示插件模板实例不存在。
    * reason  插件安装失败原因
    * message  安装错误详情
    * targetVersions  此插件版本，支持升级的集群版本
    * currentVersion  currentVersion
    * isRollbackable  是否支持回滚到插件升级前的插件版本
    * previousVersion  插件升级或回滚前的版本
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'reason' => null,
        'message' => null,
        'targetVersions' => null,
        'currentVersion' => null,
        'isRollbackable' => null,
        'previousVersion' => null
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
    * status  插件实例状态, 取值如下 - running：运行中，表示插件全部实例状态都在运行中，插件正常使用。 - abnormal：不可用，表示插件状态异常，插件不可使用。可点击插件名称查看实例异常事件。 - installing：安装中，表示插件正在安装中。 - installFailed：安装失败，表示插件安装失败，需要卸载后重新安装。 - upgrading：升级中，表示插件正在更新中。 - upgradeFailed：升级失败，表示插件升级失败，可重试升级或卸载后重新安装。 - deleting：删除中，表示插件正在删除中。 - deleteFailed：删除失败，表示插件删除失败，可重试卸载。 - deleteSuccess：删除成功，表示插件删除成功。 - available：部分就绪，表示插件下只有部分实例状态为运行中，插件部分功能可用。 - rollbacking：回滚中，表示插件正在回滚中。 - rollbackFailed：回滚失败，表示插件回滚失败，可重试回滚或卸载后重新安装。 - unknown：未知状态，表示插件模板实例不存在。
    * reason  插件安装失败原因
    * message  安装错误详情
    * targetVersions  此插件版本，支持升级的集群版本
    * currentVersion  currentVersion
    * isRollbackable  是否支持回滚到插件升级前的插件版本
    * previousVersion  插件升级或回滚前的版本
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'reason' => 'Reason',
            'message' => 'message',
            'targetVersions' => 'targetVersions',
            'currentVersion' => 'currentVersion',
            'isRollbackable' => 'isRollbackable',
            'previousVersion' => 'previousVersion'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  插件实例状态, 取值如下 - running：运行中，表示插件全部实例状态都在运行中，插件正常使用。 - abnormal：不可用，表示插件状态异常，插件不可使用。可点击插件名称查看实例异常事件。 - installing：安装中，表示插件正在安装中。 - installFailed：安装失败，表示插件安装失败，需要卸载后重新安装。 - upgrading：升级中，表示插件正在更新中。 - upgradeFailed：升级失败，表示插件升级失败，可重试升级或卸载后重新安装。 - deleting：删除中，表示插件正在删除中。 - deleteFailed：删除失败，表示插件删除失败，可重试卸载。 - deleteSuccess：删除成功，表示插件删除成功。 - available：部分就绪，表示插件下只有部分实例状态为运行中，插件部分功能可用。 - rollbacking：回滚中，表示插件正在回滚中。 - rollbackFailed：回滚失败，表示插件回滚失败，可重试回滚或卸载后重新安装。 - unknown：未知状态，表示插件模板实例不存在。
    * reason  插件安装失败原因
    * message  安装错误详情
    * targetVersions  此插件版本，支持升级的集群版本
    * currentVersion  currentVersion
    * isRollbackable  是否支持回滚到插件升级前的插件版本
    * previousVersion  插件升级或回滚前的版本
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'reason' => 'setReason',
            'message' => 'setMessage',
            'targetVersions' => 'setTargetVersions',
            'currentVersion' => 'setCurrentVersion',
            'isRollbackable' => 'setIsRollbackable',
            'previousVersion' => 'setPreviousVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  插件实例状态, 取值如下 - running：运行中，表示插件全部实例状态都在运行中，插件正常使用。 - abnormal：不可用，表示插件状态异常，插件不可使用。可点击插件名称查看实例异常事件。 - installing：安装中，表示插件正在安装中。 - installFailed：安装失败，表示插件安装失败，需要卸载后重新安装。 - upgrading：升级中，表示插件正在更新中。 - upgradeFailed：升级失败，表示插件升级失败，可重试升级或卸载后重新安装。 - deleting：删除中，表示插件正在删除中。 - deleteFailed：删除失败，表示插件删除失败，可重试卸载。 - deleteSuccess：删除成功，表示插件删除成功。 - available：部分就绪，表示插件下只有部分实例状态为运行中，插件部分功能可用。 - rollbacking：回滚中，表示插件正在回滚中。 - rollbackFailed：回滚失败，表示插件回滚失败，可重试回滚或卸载后重新安装。 - unknown：未知状态，表示插件模板实例不存在。
    * reason  插件安装失败原因
    * message  安装错误详情
    * targetVersions  此插件版本，支持升级的集群版本
    * currentVersion  currentVersion
    * isRollbackable  是否支持回滚到插件升级前的插件版本
    * previousVersion  插件升级或回滚前的版本
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'reason' => 'getReason',
            'message' => 'getMessage',
            'targetVersions' => 'getTargetVersions',
            'currentVersion' => 'getCurrentVersion',
            'isRollbackable' => 'getIsRollbackable',
            'previousVersion' => 'getPreviousVersion'
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
    const STATUS_RUNNING = 'running';
    const STATUS_ABNORMAL = 'abnormal';
    const STATUS_INSTALLING = 'installing';
    const STATUS_INSTALL_FAILED = 'installFailed';
    const STATUS_UPGRADING = 'upgrading';
    const STATUS_UPGRADE_FAILED = 'upgradeFailed';
    const STATUS_DELETING = 'deleting';
    const STATUS_DELETE_SUCCESS = 'deleteSuccess';
    const STATUS_DELETE_FAILED = 'deleteFailed';
    const STATUS_AVAILABLE = 'available';
    const STATUS_ROLLBACKING = 'rollbacking';
    const STATUS_ROLLBACK_FAILED = 'rollbackFailed';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_RUNNING,
            self::STATUS_ABNORMAL,
            self::STATUS_INSTALLING,
            self::STATUS_INSTALL_FAILED,
            self::STATUS_UPGRADING,
            self::STATUS_UPGRADE_FAILED,
            self::STATUS_DELETING,
            self::STATUS_DELETE_SUCCESS,
            self::STATUS_DELETE_FAILED,
            self::STATUS_AVAILABLE,
            self::STATUS_ROLLBACKING,
            self::STATUS_ROLLBACK_FAILED,
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['targetVersions'] = isset($data['targetVersions']) ? $data['targetVersions'] : null;
        $this->container['currentVersion'] = isset($data['currentVersion']) ? $data['currentVersion'] : null;
        $this->container['isRollbackable'] = isset($data['isRollbackable']) ? $data['isRollbackable'] : null;
        $this->container['previousVersion'] = isset($data['previousVersion']) ? $data['previousVersion'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['reason'] === null) {
            $invalidProperties[] = "'reason' can't be null";
        }
        if ($this->container['message'] === null) {
            $invalidProperties[] = "'message' can't be null";
        }
        if ($this->container['currentVersion'] === null) {
            $invalidProperties[] = "'currentVersion' can't be null";
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
    * Gets status
    *  插件实例状态, 取值如下 - running：运行中，表示插件全部实例状态都在运行中，插件正常使用。 - abnormal：不可用，表示插件状态异常，插件不可使用。可点击插件名称查看实例异常事件。 - installing：安装中，表示插件正在安装中。 - installFailed：安装失败，表示插件安装失败，需要卸载后重新安装。 - upgrading：升级中，表示插件正在更新中。 - upgradeFailed：升级失败，表示插件升级失败，可重试升级或卸载后重新安装。 - deleting：删除中，表示插件正在删除中。 - deleteFailed：删除失败，表示插件删除失败，可重试卸载。 - deleteSuccess：删除成功，表示插件删除成功。 - available：部分就绪，表示插件下只有部分实例状态为运行中，插件部分功能可用。 - rollbacking：回滚中，表示插件正在回滚中。 - rollbackFailed：回滚失败，表示插件回滚失败，可重试回滚或卸载后重新安装。 - unknown：未知状态，表示插件模板实例不存在。
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 插件实例状态, 取值如下 - running：运行中，表示插件全部实例状态都在运行中，插件正常使用。 - abnormal：不可用，表示插件状态异常，插件不可使用。可点击插件名称查看实例异常事件。 - installing：安装中，表示插件正在安装中。 - installFailed：安装失败，表示插件安装失败，需要卸载后重新安装。 - upgrading：升级中，表示插件正在更新中。 - upgradeFailed：升级失败，表示插件升级失败，可重试升级或卸载后重新安装。 - deleting：删除中，表示插件正在删除中。 - deleteFailed：删除失败，表示插件删除失败，可重试卸载。 - deleteSuccess：删除成功，表示插件删除成功。 - available：部分就绪，表示插件下只有部分实例状态为运行中，插件部分功能可用。 - rollbacking：回滚中，表示插件正在回滚中。 - rollbackFailed：回滚失败，表示插件回滚失败，可重试回滚或卸载后重新安装。 - unknown：未知状态，表示插件模板实例不存在。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets reason
    *  插件安装失败原因
    *
    * @return string
    */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
    * Sets reason
    *
    * @param string $reason 插件安装失败原因
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
    *  安装错误详情
    *
    * @return string
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string $message 安装错误详情
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets targetVersions
    *  此插件版本，支持升级的集群版本
    *
    * @return string[]|null
    */
    public function getTargetVersions()
    {
        return $this->container['targetVersions'];
    }

    /**
    * Sets targetVersions
    *
    * @param string[]|null $targetVersions 此插件版本，支持升级的集群版本
    *
    * @return $this
    */
    public function setTargetVersions($targetVersions)
    {
        $this->container['targetVersions'] = $targetVersions;
        return $this;
    }

    /**
    * Gets currentVersion
    *  currentVersion
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\Versions
    */
    public function getCurrentVersion()
    {
        return $this->container['currentVersion'];
    }

    /**
    * Sets currentVersion
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\Versions $currentVersion currentVersion
    *
    * @return $this
    */
    public function setCurrentVersion($currentVersion)
    {
        $this->container['currentVersion'] = $currentVersion;
        return $this;
    }

    /**
    * Gets isRollbackable
    *  是否支持回滚到插件升级前的插件版本
    *
    * @return bool|null
    */
    public function getIsRollbackable()
    {
        return $this->container['isRollbackable'];
    }

    /**
    * Sets isRollbackable
    *
    * @param bool|null $isRollbackable 是否支持回滚到插件升级前的插件版本
    *
    * @return $this
    */
    public function setIsRollbackable($isRollbackable)
    {
        $this->container['isRollbackable'] = $isRollbackable;
        return $this;
    }

    /**
    * Gets previousVersion
    *  插件升级或回滚前的版本
    *
    * @return string|null
    */
    public function getPreviousVersion()
    {
        return $this->container['previousVersion'];
    }

    /**
    * Sets previousVersion
    *
    * @param string|null $previousVersion 插件升级或回滚前的版本
    *
    * @return $this
    */
    public function setPreviousVersion($previousVersion)
    {
        $this->container['previousVersion'] = $previousVersion;
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

