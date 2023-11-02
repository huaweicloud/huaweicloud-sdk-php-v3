<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BackendConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BackendConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  后端请求类型
    * protocol  后端请求协议类型
    * host  后端host
    * timeout  后端超时时间
    * path  后端请求Path
    * backendParas  API后端参数
    * constantParas  后端常量参数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'protocol' => 'string',
            'host' => 'string',
            'timeout' => 'int',
            'path' => 'string',
            'backendParas' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BackendRequestPara[]',
            'constantParas' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BackendConstant[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  后端请求类型
    * protocol  后端请求协议类型
    * host  后端host
    * timeout  后端超时时间
    * path  后端请求Path
    * backendParas  API后端参数
    * constantParas  后端常量参数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'protocol' => null,
        'host' => null,
        'timeout' => 'int32',
        'path' => null,
        'backendParas' => null,
        'constantParas' => null
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
    * type  后端请求类型
    * protocol  后端请求协议类型
    * host  后端host
    * timeout  后端超时时间
    * path  后端请求Path
    * backendParas  API后端参数
    * constantParas  后端常量参数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'protocol' => 'protocol',
            'host' => 'host',
            'timeout' => 'timeout',
            'path' => 'path',
            'backendParas' => 'backend_paras',
            'constantParas' => 'constant_paras'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  后端请求类型
    * protocol  后端请求协议类型
    * host  后端host
    * timeout  后端超时时间
    * path  后端请求Path
    * backendParas  API后端参数
    * constantParas  后端常量参数
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'protocol' => 'setProtocol',
            'host' => 'setHost',
            'timeout' => 'setTimeout',
            'path' => 'setPath',
            'backendParas' => 'setBackendParas',
            'constantParas' => 'setConstantParas'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  后端请求类型
    * protocol  后端请求协议类型
    * host  后端host
    * timeout  后端超时时间
    * path  后端请求Path
    * backendParas  API后端参数
    * constantParas  后端常量参数
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'protocol' => 'getProtocol',
            'host' => 'getHost',
            'timeout' => 'getTimeout',
            'path' => 'getPath',
            'backendParas' => 'getBackendParas',
            'constantParas' => 'getConstantParas'
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
    const TYPE_REQUEST_TYPE_POST = 'REQUEST_TYPE_POST';
    const TYPE_REQUEST_TYPE_GET = 'REQUEST_TYPE_GET';
    const PROTOCOL_PROTOCOL_TYPE_HTTP = 'PROTOCOL_TYPE_HTTP';
    const PROTOCOL_PROTOCOL_TYPE_HTTPS = 'PROTOCOL_TYPE_HTTPS';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_REQUEST_TYPE_POST,
            self::TYPE_REQUEST_TYPE_GET,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getProtocolAllowableValues()
    {
        return [
            self::PROTOCOL_PROTOCOL_TYPE_HTTP,
            self::PROTOCOL_PROTOCOL_TYPE_HTTPS,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['host'] = isset($data['host']) ? $data['host'] : null;
        $this->container['timeout'] = isset($data['timeout']) ? $data['timeout'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['backendParas'] = isset($data['backendParas']) ? $data['backendParas'] : null;
        $this->container['constantParas'] = isset($data['constantParas']) ? $data['constantParas'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getProtocolAllowableValues();
                if (!is_null($this->container['protocol']) && !in_array($this->container['protocol'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'protocol', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets type
    *  后端请求类型
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 后端请求类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets protocol
    *  后端请求协议类型
    *
    * @return string|null
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param string|null $protocol 后端请求协议类型
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets host
    *  后端host
    *
    * @return string|null
    */
    public function getHost()
    {
        return $this->container['host'];
    }

    /**
    * Sets host
    *
    * @param string|null $host 后端host
    *
    * @return $this
    */
    public function setHost($host)
    {
        $this->container['host'] = $host;
        return $this;
    }

    /**
    * Gets timeout
    *  后端超时时间
    *
    * @return int|null
    */
    public function getTimeout()
    {
        return $this->container['timeout'];
    }

    /**
    * Sets timeout
    *
    * @param int|null $timeout 后端超时时间
    *
    * @return $this
    */
    public function setTimeout($timeout)
    {
        $this->container['timeout'] = $timeout;
        return $this;
    }

    /**
    * Gets path
    *  后端请求Path
    *
    * @return string|null
    */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
    * Sets path
    *
    * @param string|null $path 后端请求Path
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets backendParas
    *  API后端参数
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\BackendRequestPara[]|null
    */
    public function getBackendParas()
    {
        return $this->container['backendParas'];
    }

    /**
    * Sets backendParas
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\BackendRequestPara[]|null $backendParas API后端参数
    *
    * @return $this
    */
    public function setBackendParas($backendParas)
    {
        $this->container['backendParas'] = $backendParas;
        return $this;
    }

    /**
    * Gets constantParas
    *  后端常量参数
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\BackendConstant[]|null
    */
    public function getConstantParas()
    {
        return $this->container['constantParas'];
    }

    /**
    * Sets constantParas
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\BackendConstant[]|null $constantParas 后端常量参数
    *
    * @return $this
    */
    public function setConstantParas($constantParas)
    {
        $this->container['constantParas'] = $constantParas;
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

