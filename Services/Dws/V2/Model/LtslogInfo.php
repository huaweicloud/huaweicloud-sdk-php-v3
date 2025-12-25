<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LtslogInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LtslogInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  **参数解释**： 配置状态。 **取值范围**： - OPEN：开启。 - CLOSE：关闭。
    * id  **参数解释**： 日志ID。 **取值范围**： 不涉及。
    * logType  **参数解释**： 日志类型。 **取值范围**： - messages：系统日志。 - expand：扩容日志。 - roach-controller：roach服务端日志。 - audit：审计日志。 - gtm：gtm日志。 - roach-agent：roach客户端日志。 - cms：cms日志。 - CN：dws-CN节点日志。 - upgrade: 升级日志。 - DN: dws-DN节点日志。
    * logDesc  **参数解释**： 日志描述。 **取值范围**： 不涉及。
    * accessUrl  **参数解释**： LTS日志访问URL。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string',
            'id' => 'string',
            'logType' => 'string',
            'logDesc' => 'string',
            'accessUrl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  **参数解释**： 配置状态。 **取值范围**： - OPEN：开启。 - CLOSE：关闭。
    * id  **参数解释**： 日志ID。 **取值范围**： 不涉及。
    * logType  **参数解释**： 日志类型。 **取值范围**： - messages：系统日志。 - expand：扩容日志。 - roach-controller：roach服务端日志。 - audit：审计日志。 - gtm：gtm日志。 - roach-agent：roach客户端日志。 - cms：cms日志。 - CN：dws-CN节点日志。 - upgrade: 升级日志。 - DN: dws-DN节点日志。
    * logDesc  **参数解释**： 日志描述。 **取值范围**： 不涉及。
    * accessUrl  **参数解释**： LTS日志访问URL。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'id' => null,
        'logType' => null,
        'logDesc' => null,
        'accessUrl' => null
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
    * status  **参数解释**： 配置状态。 **取值范围**： - OPEN：开启。 - CLOSE：关闭。
    * id  **参数解释**： 日志ID。 **取值范围**： 不涉及。
    * logType  **参数解释**： 日志类型。 **取值范围**： - messages：系统日志。 - expand：扩容日志。 - roach-controller：roach服务端日志。 - audit：审计日志。 - gtm：gtm日志。 - roach-agent：roach客户端日志。 - cms：cms日志。 - CN：dws-CN节点日志。 - upgrade: 升级日志。 - DN: dws-DN节点日志。
    * logDesc  **参数解释**： 日志描述。 **取值范围**： 不涉及。
    * accessUrl  **参数解释**： LTS日志访问URL。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'id' => 'id',
            'logType' => 'log_type',
            'logDesc' => 'log_desc',
            'accessUrl' => 'access_url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  **参数解释**： 配置状态。 **取值范围**： - OPEN：开启。 - CLOSE：关闭。
    * id  **参数解释**： 日志ID。 **取值范围**： 不涉及。
    * logType  **参数解释**： 日志类型。 **取值范围**： - messages：系统日志。 - expand：扩容日志。 - roach-controller：roach服务端日志。 - audit：审计日志。 - gtm：gtm日志。 - roach-agent：roach客户端日志。 - cms：cms日志。 - CN：dws-CN节点日志。 - upgrade: 升级日志。 - DN: dws-DN节点日志。
    * logDesc  **参数解释**： 日志描述。 **取值范围**： 不涉及。
    * accessUrl  **参数解释**： LTS日志访问URL。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'id' => 'setId',
            'logType' => 'setLogType',
            'logDesc' => 'setLogDesc',
            'accessUrl' => 'setAccessUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  **参数解释**： 配置状态。 **取值范围**： - OPEN：开启。 - CLOSE：关闭。
    * id  **参数解释**： 日志ID。 **取值范围**： 不涉及。
    * logType  **参数解释**： 日志类型。 **取值范围**： - messages：系统日志。 - expand：扩容日志。 - roach-controller：roach服务端日志。 - audit：审计日志。 - gtm：gtm日志。 - roach-agent：roach客户端日志。 - cms：cms日志。 - CN：dws-CN节点日志。 - upgrade: 升级日志。 - DN: dws-DN节点日志。
    * logDesc  **参数解释**： 日志描述。 **取值范围**： 不涉及。
    * accessUrl  **参数解释**： LTS日志访问URL。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'id' => 'getId',
            'logType' => 'getLogType',
            'logDesc' => 'getLogDesc',
            'accessUrl' => 'getAccessUrl'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['logType'] = isset($data['logType']) ? $data['logType'] : null;
        $this->container['logDesc'] = isset($data['logDesc']) ? $data['logDesc'] : null;
        $this->container['accessUrl'] = isset($data['accessUrl']) ? $data['accessUrl'] : null;
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
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['logType'] === null) {
            $invalidProperties[] = "'logType' can't be null";
        }
        if ($this->container['logDesc'] === null) {
            $invalidProperties[] = "'logDesc' can't be null";
        }
        if ($this->container['accessUrl'] === null) {
            $invalidProperties[] = "'accessUrl' can't be null";
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
    *  **参数解释**： 配置状态。 **取值范围**： - OPEN：开启。 - CLOSE：关闭。
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
    * @param string $status **参数解释**： 配置状态。 **取值范围**： - OPEN：开启。 - CLOSE：关闭。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets id
    *  **参数解释**： 日志ID。 **取值范围**： 不涉及。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id **参数解释**： 日志ID。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets logType
    *  **参数解释**： 日志类型。 **取值范围**： - messages：系统日志。 - expand：扩容日志。 - roach-controller：roach服务端日志。 - audit：审计日志。 - gtm：gtm日志。 - roach-agent：roach客户端日志。 - cms：cms日志。 - CN：dws-CN节点日志。 - upgrade: 升级日志。 - DN: dws-DN节点日志。
    *
    * @return string
    */
    public function getLogType()
    {
        return $this->container['logType'];
    }

    /**
    * Sets logType
    *
    * @param string $logType **参数解释**： 日志类型。 **取值范围**： - messages：系统日志。 - expand：扩容日志。 - roach-controller：roach服务端日志。 - audit：审计日志。 - gtm：gtm日志。 - roach-agent：roach客户端日志。 - cms：cms日志。 - CN：dws-CN节点日志。 - upgrade: 升级日志。 - DN: dws-DN节点日志。
    *
    * @return $this
    */
    public function setLogType($logType)
    {
        $this->container['logType'] = $logType;
        return $this;
    }

    /**
    * Gets logDesc
    *  **参数解释**： 日志描述。 **取值范围**： 不涉及。
    *
    * @return string
    */
    public function getLogDesc()
    {
        return $this->container['logDesc'];
    }

    /**
    * Sets logDesc
    *
    * @param string $logDesc **参数解释**： 日志描述。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setLogDesc($logDesc)
    {
        $this->container['logDesc'] = $logDesc;
        return $this;
    }

    /**
    * Gets accessUrl
    *  **参数解释**： LTS日志访问URL。 **取值范围**： 不涉及。
    *
    * @return string
    */
    public function getAccessUrl()
    {
        return $this->container['accessUrl'];
    }

    /**
    * Sets accessUrl
    *
    * @param string $accessUrl **参数解释**： LTS日志访问URL。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setAccessUrl($accessUrl)
    {
        $this->container['accessUrl'] = $accessUrl;
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

