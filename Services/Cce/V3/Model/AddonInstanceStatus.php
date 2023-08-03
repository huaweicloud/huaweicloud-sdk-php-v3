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
    * status  插件实例状态
    * reason  插件安装失败原因
    * message  安装错误详情
    * targetVersions  此插件版本，支持升级的集群版本
    * currentVersion  currentVersion
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string',
            'reason' => 'string',
            'message' => 'string',
            'targetVersions' => 'string[]',
            'currentVersion' => '\HuaweiCloud\SDK\Cce\V3\Model\Versions'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  插件实例状态
    * reason  插件安装失败原因
    * message  安装错误详情
    * targetVersions  此插件版本，支持升级的集群版本
    * currentVersion  currentVersion
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'reason' => null,
        'message' => null,
        'targetVersions' => null,
        'currentVersion' => null
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
    * status  插件实例状态
    * reason  插件安装失败原因
    * message  安装错误详情
    * targetVersions  此插件版本，支持升级的集群版本
    * currentVersion  currentVersion
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'reason' => 'Reason',
            'message' => 'message',
            'targetVersions' => 'targetVersions',
            'currentVersion' => 'currentVersion'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  插件实例状态
    * reason  插件安装失败原因
    * message  安装错误详情
    * targetVersions  此插件版本，支持升级的集群版本
    * currentVersion  currentVersion
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'reason' => 'setReason',
            'message' => 'setMessage',
            'targetVersions' => 'setTargetVersions',
            'currentVersion' => 'setCurrentVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  插件实例状态
    * reason  插件安装失败原因
    * message  安装错误详情
    * targetVersions  此插件版本，支持升级的集群版本
    * currentVersion  currentVersion
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'reason' => 'getReason',
            'message' => 'getMessage',
            'targetVersions' => 'getTargetVersions',
            'currentVersion' => 'getCurrentVersion'
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
    *  插件实例状态
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
    * @param string $status 插件实例状态
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

