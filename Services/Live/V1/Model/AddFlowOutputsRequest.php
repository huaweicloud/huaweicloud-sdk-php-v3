<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddFlowOutputsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddFlowOutputsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cidrWhitelist  ip白名单，最大20条ip白名单
    * destination  推流地址，支持ip和域名，最大值64
    * name  output名称，有效字符：大小写字母，数字，中划线，下划线;且只能以字母开头
    * encryption  encryption
    * outputStatus  输出状态，ENABLED：启用，DISABLED：禁用
    * port  端口，如果ssrt-listener为监听端口，那么srt-caller为对端端口
    * protocol  协议，srt-caller，srt-listener
    * streamId  srt-caller模式支持设置streamid
    * description  输出描述
    * minLatency  最小时延，单位毫秒，默认值2000，最小值10，最大值15000
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cidrWhitelist' => 'string[]',
            'destination' => 'string',
            'name' => 'string',
            'encryption' => '\HuaweiCloud\SDK\Live\V1\Model\FlowSourceDecryption',
            'outputStatus' => 'string',
            'port' => 'int',
            'protocol' => 'string',
            'streamId' => 'string',
            'description' => 'string',
            'minLatency' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cidrWhitelist  ip白名单，最大20条ip白名单
    * destination  推流地址，支持ip和域名，最大值64
    * name  output名称，有效字符：大小写字母，数字，中划线，下划线;且只能以字母开头
    * encryption  encryption
    * outputStatus  输出状态，ENABLED：启用，DISABLED：禁用
    * port  端口，如果ssrt-listener为监听端口，那么srt-caller为对端端口
    * protocol  协议，srt-caller，srt-listener
    * streamId  srt-caller模式支持设置streamid
    * description  输出描述
    * minLatency  最小时延，单位毫秒，默认值2000，最小值10，最大值15000
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cidrWhitelist' => null,
        'destination' => null,
        'name' => null,
        'encryption' => null,
        'outputStatus' => null,
        'port' => 'int32',
        'protocol' => null,
        'streamId' => null,
        'description' => null,
        'minLatency' => 'int32'
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
    * cidrWhitelist  ip白名单，最大20条ip白名单
    * destination  推流地址，支持ip和域名，最大值64
    * name  output名称，有效字符：大小写字母，数字，中划线，下划线;且只能以字母开头
    * encryption  encryption
    * outputStatus  输出状态，ENABLED：启用，DISABLED：禁用
    * port  端口，如果ssrt-listener为监听端口，那么srt-caller为对端端口
    * protocol  协议，srt-caller，srt-listener
    * streamId  srt-caller模式支持设置streamid
    * description  输出描述
    * minLatency  最小时延，单位毫秒，默认值2000，最小值10，最大值15000
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cidrWhitelist' => 'cidr_whitelist',
            'destination' => 'destination',
            'name' => 'name',
            'encryption' => 'encryption',
            'outputStatus' => 'output_status',
            'port' => 'port',
            'protocol' => 'protocol',
            'streamId' => 'stream_id',
            'description' => 'description',
            'minLatency' => 'min_latency'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cidrWhitelist  ip白名单，最大20条ip白名单
    * destination  推流地址，支持ip和域名，最大值64
    * name  output名称，有效字符：大小写字母，数字，中划线，下划线;且只能以字母开头
    * encryption  encryption
    * outputStatus  输出状态，ENABLED：启用，DISABLED：禁用
    * port  端口，如果ssrt-listener为监听端口，那么srt-caller为对端端口
    * protocol  协议，srt-caller，srt-listener
    * streamId  srt-caller模式支持设置streamid
    * description  输出描述
    * minLatency  最小时延，单位毫秒，默认值2000，最小值10，最大值15000
    *
    * @var string[]
    */
    protected static $setters = [
            'cidrWhitelist' => 'setCidrWhitelist',
            'destination' => 'setDestination',
            'name' => 'setName',
            'encryption' => 'setEncryption',
            'outputStatus' => 'setOutputStatus',
            'port' => 'setPort',
            'protocol' => 'setProtocol',
            'streamId' => 'setStreamId',
            'description' => 'setDescription',
            'minLatency' => 'setMinLatency'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cidrWhitelist  ip白名单，最大20条ip白名单
    * destination  推流地址，支持ip和域名，最大值64
    * name  output名称，有效字符：大小写字母，数字，中划线，下划线;且只能以字母开头
    * encryption  encryption
    * outputStatus  输出状态，ENABLED：启用，DISABLED：禁用
    * port  端口，如果ssrt-listener为监听端口，那么srt-caller为对端端口
    * protocol  协议，srt-caller，srt-listener
    * streamId  srt-caller模式支持设置streamid
    * description  输出描述
    * minLatency  最小时延，单位毫秒，默认值2000，最小值10，最大值15000
    *
    * @var string[]
    */
    protected static $getters = [
            'cidrWhitelist' => 'getCidrWhitelist',
            'destination' => 'getDestination',
            'name' => 'getName',
            'encryption' => 'getEncryption',
            'outputStatus' => 'getOutputStatus',
            'port' => 'getPort',
            'protocol' => 'getProtocol',
            'streamId' => 'getStreamId',
            'description' => 'getDescription',
            'minLatency' => 'getMinLatency'
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
    const OUTPUT_STATUS_ENABLED = 'ENABLED';
    const OUTPUT_STATUS_DISABLED = 'DISABLED';
    const PROTOCOL_SRT_LISTENER = 'srt-listener';
    const PROTOCOL_SRT_CALLER = 'srt-caller';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOutputStatusAllowableValues()
    {
        return [
            self::OUTPUT_STATUS_ENABLED,
            self::OUTPUT_STATUS_DISABLED,
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
            self::PROTOCOL_SRT_LISTENER,
            self::PROTOCOL_SRT_CALLER,
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
        $this->container['cidrWhitelist'] = isset($data['cidrWhitelist']) ? $data['cidrWhitelist'] : null;
        $this->container['destination'] = isset($data['destination']) ? $data['destination'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['encryption'] = isset($data['encryption']) ? $data['encryption'] : null;
        $this->container['outputStatus'] = isset($data['outputStatus']) ? $data['outputStatus'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['streamId'] = isset($data['streamId']) ? $data['streamId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['minLatency'] = isset($data['minLatency']) ? $data['minLatency'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['destination']) && (mb_strlen($this->container['destination']) > 64)) {
                $invalidProperties[] = "invalid value for 'destination', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['destination']) && (mb_strlen($this->container['destination']) < 1)) {
                $invalidProperties[] = "invalid value for 'destination', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getOutputStatusAllowableValues();
                if (!is_null($this->container['outputStatus']) && !in_array($this->container['outputStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'outputStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['port']) && ($this->container['port'] > 65535)) {
                $invalidProperties[] = "invalid value for 'port', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['port']) && ($this->container['port'] < 1024)) {
                $invalidProperties[] = "invalid value for 'port', must be bigger than or equal to 1024.";
            }
        if ($this->container['protocol'] === null) {
            $invalidProperties[] = "'protocol' can't be null";
        }
            $allowedValues = $this->getProtocolAllowableValues();
                if (!is_null($this->container['protocol']) && !in_array($this->container['protocol'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'protocol', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['streamId']) && (mb_strlen($this->container['streamId']) > 512)) {
                $invalidProperties[] = "invalid value for 'streamId', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['streamId']) && (mb_strlen($this->container['streamId']) < 1)) {
                $invalidProperties[] = "invalid value for 'streamId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['minLatency']) && ($this->container['minLatency'] > 15000)) {
                $invalidProperties[] = "invalid value for 'minLatency', must be smaller than or equal to 15000.";
            }
            if (!is_null($this->container['minLatency']) && ($this->container['minLatency'] < 10)) {
                $invalidProperties[] = "invalid value for 'minLatency', must be bigger than or equal to 10.";
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
    * Gets cidrWhitelist
    *  ip白名单，最大20条ip白名单
    *
    * @return string[]|null
    */
    public function getCidrWhitelist()
    {
        return $this->container['cidrWhitelist'];
    }

    /**
    * Sets cidrWhitelist
    *
    * @param string[]|null $cidrWhitelist ip白名单，最大20条ip白名单
    *
    * @return $this
    */
    public function setCidrWhitelist($cidrWhitelist)
    {
        $this->container['cidrWhitelist'] = $cidrWhitelist;
        return $this;
    }

    /**
    * Gets destination
    *  推流地址，支持ip和域名，最大值64
    *
    * @return string|null
    */
    public function getDestination()
    {
        return $this->container['destination'];
    }

    /**
    * Sets destination
    *
    * @param string|null $destination 推流地址，支持ip和域名，最大值64
    *
    * @return $this
    */
    public function setDestination($destination)
    {
        $this->container['destination'] = $destination;
        return $this;
    }

    /**
    * Gets name
    *  output名称，有效字符：大小写字母，数字，中划线，下划线;且只能以字母开头
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name output名称，有效字符：大小写字母，数字，中划线，下划线;且只能以字母开头
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets encryption
    *  encryption
    *
    * @return \HuaweiCloud\SDK\Live\V1\Model\FlowSourceDecryption|null
    */
    public function getEncryption()
    {
        return $this->container['encryption'];
    }

    /**
    * Sets encryption
    *
    * @param \HuaweiCloud\SDK\Live\V1\Model\FlowSourceDecryption|null $encryption encryption
    *
    * @return $this
    */
    public function setEncryption($encryption)
    {
        $this->container['encryption'] = $encryption;
        return $this;
    }

    /**
    * Gets outputStatus
    *  输出状态，ENABLED：启用，DISABLED：禁用
    *
    * @return string|null
    */
    public function getOutputStatus()
    {
        return $this->container['outputStatus'];
    }

    /**
    * Sets outputStatus
    *
    * @param string|null $outputStatus 输出状态，ENABLED：启用，DISABLED：禁用
    *
    * @return $this
    */
    public function setOutputStatus($outputStatus)
    {
        $this->container['outputStatus'] = $outputStatus;
        return $this;
    }

    /**
    * Gets port
    *  端口，如果ssrt-listener为监听端口，那么srt-caller为对端端口
    *
    * @return int|null
    */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
    * Sets port
    *
    * @param int|null $port 端口，如果ssrt-listener为监听端口，那么srt-caller为对端端口
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets protocol
    *  协议，srt-caller，srt-listener
    *
    * @return string
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param string $protocol 协议，srt-caller，srt-listener
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets streamId
    *  srt-caller模式支持设置streamid
    *
    * @return string|null
    */
    public function getStreamId()
    {
        return $this->container['streamId'];
    }

    /**
    * Sets streamId
    *
    * @param string|null $streamId srt-caller模式支持设置streamid
    *
    * @return $this
    */
    public function setStreamId($streamId)
    {
        $this->container['streamId'] = $streamId;
        return $this;
    }

    /**
    * Gets description
    *  输出描述
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 输出描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets minLatency
    *  最小时延，单位毫秒，默认值2000，最小值10，最大值15000
    *
    * @return int|null
    */
    public function getMinLatency()
    {
        return $this->container['minLatency'];
    }

    /**
    * Sets minLatency
    *
    * @param int|null $minLatency 最小时延，单位毫秒，默认值2000，最小值10，最大值15000
    *
    * @return $this
    */
    public function setMinLatency($minLatency)
    {
        $this->container['minLatency'] = $minLatency;
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

