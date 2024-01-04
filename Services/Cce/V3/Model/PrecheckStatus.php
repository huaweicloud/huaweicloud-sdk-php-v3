<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PrecheckStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PrecheckStatus';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * phase  状态，取值如下 - Init: 初始化 - Running 运行中 - Success 成功 - Failed 失败 - Error 错误
    * expireTimeStamp  检查结果过期时间
    * message  信息，一般是执行错误的日志信息
    * clusterCheckStatus  clusterCheckStatus
    * addonCheckStatus  addonCheckStatus
    * nodeCheckStatus  nodeCheckStatus
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'phase' => 'string',
            'expireTimeStamp' => 'string',
            'message' => 'string',
            'clusterCheckStatus' => '\HuaweiCloud\SDK\Cce\V3\Model\ClusterCheckStatus',
            'addonCheckStatus' => '\HuaweiCloud\SDK\Cce\V3\Model\AddonCheckStatus',
            'nodeCheckStatus' => '\HuaweiCloud\SDK\Cce\V3\Model\NodeCheckStatus'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * phase  状态，取值如下 - Init: 初始化 - Running 运行中 - Success 成功 - Failed 失败 - Error 错误
    * expireTimeStamp  检查结果过期时间
    * message  信息，一般是执行错误的日志信息
    * clusterCheckStatus  clusterCheckStatus
    * addonCheckStatus  addonCheckStatus
    * nodeCheckStatus  nodeCheckStatus
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'phase' => null,
        'expireTimeStamp' => null,
        'message' => null,
        'clusterCheckStatus' => null,
        'addonCheckStatus' => null,
        'nodeCheckStatus' => null
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
    * phase  状态，取值如下 - Init: 初始化 - Running 运行中 - Success 成功 - Failed 失败 - Error 错误
    * expireTimeStamp  检查结果过期时间
    * message  信息，一般是执行错误的日志信息
    * clusterCheckStatus  clusterCheckStatus
    * addonCheckStatus  addonCheckStatus
    * nodeCheckStatus  nodeCheckStatus
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'phase' => 'phase',
            'expireTimeStamp' => 'expireTimeStamp',
            'message' => 'message',
            'clusterCheckStatus' => 'clusterCheckStatus',
            'addonCheckStatus' => 'addonCheckStatus',
            'nodeCheckStatus' => 'nodeCheckStatus'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * phase  状态，取值如下 - Init: 初始化 - Running 运行中 - Success 成功 - Failed 失败 - Error 错误
    * expireTimeStamp  检查结果过期时间
    * message  信息，一般是执行错误的日志信息
    * clusterCheckStatus  clusterCheckStatus
    * addonCheckStatus  addonCheckStatus
    * nodeCheckStatus  nodeCheckStatus
    *
    * @var string[]
    */
    protected static $setters = [
            'phase' => 'setPhase',
            'expireTimeStamp' => 'setExpireTimeStamp',
            'message' => 'setMessage',
            'clusterCheckStatus' => 'setClusterCheckStatus',
            'addonCheckStatus' => 'setAddonCheckStatus',
            'nodeCheckStatus' => 'setNodeCheckStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * phase  状态，取值如下 - Init: 初始化 - Running 运行中 - Success 成功 - Failed 失败 - Error 错误
    * expireTimeStamp  检查结果过期时间
    * message  信息，一般是执行错误的日志信息
    * clusterCheckStatus  clusterCheckStatus
    * addonCheckStatus  addonCheckStatus
    * nodeCheckStatus  nodeCheckStatus
    *
    * @var string[]
    */
    protected static $getters = [
            'phase' => 'getPhase',
            'expireTimeStamp' => 'getExpireTimeStamp',
            'message' => 'getMessage',
            'clusterCheckStatus' => 'getClusterCheckStatus',
            'addonCheckStatus' => 'getAddonCheckStatus',
            'nodeCheckStatus' => 'getNodeCheckStatus'
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
        $this->container['expireTimeStamp'] = isset($data['expireTimeStamp']) ? $data['expireTimeStamp'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['clusterCheckStatus'] = isset($data['clusterCheckStatus']) ? $data['clusterCheckStatus'] : null;
        $this->container['addonCheckStatus'] = isset($data['addonCheckStatus']) ? $data['addonCheckStatus'] : null;
        $this->container['nodeCheckStatus'] = isset($data['nodeCheckStatus']) ? $data['nodeCheckStatus'] : null;
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
    *  状态，取值如下 - Init: 初始化 - Running 运行中 - Success 成功 - Failed 失败 - Error 错误
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
    * @param string|null $phase 状态，取值如下 - Init: 初始化 - Running 运行中 - Success 成功 - Failed 失败 - Error 错误
    *
    * @return $this
    */
    public function setPhase($phase)
    {
        $this->container['phase'] = $phase;
        return $this;
    }

    /**
    * Gets expireTimeStamp
    *  检查结果过期时间
    *
    * @return string|null
    */
    public function getExpireTimeStamp()
    {
        return $this->container['expireTimeStamp'];
    }

    /**
    * Sets expireTimeStamp
    *
    * @param string|null $expireTimeStamp 检查结果过期时间
    *
    * @return $this
    */
    public function setExpireTimeStamp($expireTimeStamp)
    {
        $this->container['expireTimeStamp'] = $expireTimeStamp;
        return $this;
    }

    /**
    * Gets message
    *  信息，一般是执行错误的日志信息
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
    * @param string|null $message 信息，一般是执行错误的日志信息
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets clusterCheckStatus
    *  clusterCheckStatus
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\ClusterCheckStatus|null
    */
    public function getClusterCheckStatus()
    {
        return $this->container['clusterCheckStatus'];
    }

    /**
    * Sets clusterCheckStatus
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\ClusterCheckStatus|null $clusterCheckStatus clusterCheckStatus
    *
    * @return $this
    */
    public function setClusterCheckStatus($clusterCheckStatus)
    {
        $this->container['clusterCheckStatus'] = $clusterCheckStatus;
        return $this;
    }

    /**
    * Gets addonCheckStatus
    *  addonCheckStatus
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\AddonCheckStatus|null
    */
    public function getAddonCheckStatus()
    {
        return $this->container['addonCheckStatus'];
    }

    /**
    * Sets addonCheckStatus
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\AddonCheckStatus|null $addonCheckStatus addonCheckStatus
    *
    * @return $this
    */
    public function setAddonCheckStatus($addonCheckStatus)
    {
        $this->container['addonCheckStatus'] = $addonCheckStatus;
        return $this;
    }

    /**
    * Gets nodeCheckStatus
    *  nodeCheckStatus
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\NodeCheckStatus|null
    */
    public function getNodeCheckStatus()
    {
        return $this->container['nodeCheckStatus'];
    }

    /**
    * Sets nodeCheckStatus
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\NodeCheckStatus|null $nodeCheckStatus nodeCheckStatus
    *
    * @return $this
    */
    public function setNodeCheckStatus($nodeCheckStatus)
    {
        $this->container['nodeCheckStatus'] = $nodeCheckStatus;
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

