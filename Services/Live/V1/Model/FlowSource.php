<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FlowSource implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FlowSource';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sourceListenerAddress  拉流地址
    * sourceListenerPort  拉流端口，2077/2088不可选
    * streamId  srt拉流streamid
    * minLatency  最小时延，单位ms
    * cidrWhitelist  推流CIDR IP白名单列表
    * description  描述
    * protocol  协议，srt-caller，srt-listener
    * name  入流资源名称
    * decryption  decryption
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sourceListenerAddress' => 'string',
            'sourceListenerPort' => 'int',
            'streamId' => 'string',
            'minLatency' => 'int',
            'cidrWhitelist' => 'string[]',
            'description' => 'string',
            'protocol' => 'string',
            'name' => 'string',
            'decryption' => '\HuaweiCloud\SDK\Live\V1\Model\FlowSourceDecryption'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sourceListenerAddress  拉流地址
    * sourceListenerPort  拉流端口，2077/2088不可选
    * streamId  srt拉流streamid
    * minLatency  最小时延，单位ms
    * cidrWhitelist  推流CIDR IP白名单列表
    * description  描述
    * protocol  协议，srt-caller，srt-listener
    * name  入流资源名称
    * decryption  decryption
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sourceListenerAddress' => null,
        'sourceListenerPort' => 'int32',
        'streamId' => null,
        'minLatency' => 'int32',
        'cidrWhitelist' => null,
        'description' => null,
        'protocol' => null,
        'name' => null,
        'decryption' => null
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
    * sourceListenerAddress  拉流地址
    * sourceListenerPort  拉流端口，2077/2088不可选
    * streamId  srt拉流streamid
    * minLatency  最小时延，单位ms
    * cidrWhitelist  推流CIDR IP白名单列表
    * description  描述
    * protocol  协议，srt-caller，srt-listener
    * name  入流资源名称
    * decryption  decryption
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sourceListenerAddress' => 'source_listener_address',
            'sourceListenerPort' => 'source_listener_port',
            'streamId' => 'stream_id',
            'minLatency' => 'min_latency',
            'cidrWhitelist' => 'cidr_whitelist',
            'description' => 'description',
            'protocol' => 'protocol',
            'name' => 'name',
            'decryption' => 'decryption'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sourceListenerAddress  拉流地址
    * sourceListenerPort  拉流端口，2077/2088不可选
    * streamId  srt拉流streamid
    * minLatency  最小时延，单位ms
    * cidrWhitelist  推流CIDR IP白名单列表
    * description  描述
    * protocol  协议，srt-caller，srt-listener
    * name  入流资源名称
    * decryption  decryption
    *
    * @var string[]
    */
    protected static $setters = [
            'sourceListenerAddress' => 'setSourceListenerAddress',
            'sourceListenerPort' => 'setSourceListenerPort',
            'streamId' => 'setStreamId',
            'minLatency' => 'setMinLatency',
            'cidrWhitelist' => 'setCidrWhitelist',
            'description' => 'setDescription',
            'protocol' => 'setProtocol',
            'name' => 'setName',
            'decryption' => 'setDecryption'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sourceListenerAddress  拉流地址
    * sourceListenerPort  拉流端口，2077/2088不可选
    * streamId  srt拉流streamid
    * minLatency  最小时延，单位ms
    * cidrWhitelist  推流CIDR IP白名单列表
    * description  描述
    * protocol  协议，srt-caller，srt-listener
    * name  入流资源名称
    * decryption  decryption
    *
    * @var string[]
    */
    protected static $getters = [
            'sourceListenerAddress' => 'getSourceListenerAddress',
            'sourceListenerPort' => 'getSourceListenerPort',
            'streamId' => 'getStreamId',
            'minLatency' => 'getMinLatency',
            'cidrWhitelist' => 'getCidrWhitelist',
            'description' => 'getDescription',
            'protocol' => 'getProtocol',
            'name' => 'getName',
            'decryption' => 'getDecryption'
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
    const PROTOCOL_SRT_CALLER = 'srt-caller';
    const PROTOCOL_SRT_LISTENER = 'srt-listener';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getProtocolAllowableValues()
    {
        return [
            self::PROTOCOL_SRT_CALLER,
            self::PROTOCOL_SRT_LISTENER,
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
        $this->container['sourceListenerAddress'] = isset($data['sourceListenerAddress']) ? $data['sourceListenerAddress'] : null;
        $this->container['sourceListenerPort'] = isset($data['sourceListenerPort']) ? $data['sourceListenerPort'] : null;
        $this->container['streamId'] = isset($data['streamId']) ? $data['streamId'] : null;
        $this->container['minLatency'] = isset($data['minLatency']) ? $data['minLatency'] : null;
        $this->container['cidrWhitelist'] = isset($data['cidrWhitelist']) ? $data['cidrWhitelist'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['decryption'] = isset($data['decryption']) ? $data['decryption'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['sourceListenerAddress']) && (mb_strlen($this->container['sourceListenerAddress']) > 255)) {
                $invalidProperties[] = "invalid value for 'sourceListenerAddress', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['sourceListenerAddress']) && (mb_strlen($this->container['sourceListenerAddress']) < 0)) {
                $invalidProperties[] = "invalid value for 'sourceListenerAddress', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sourceListenerPort']) && ($this->container['sourceListenerPort'] > 65535)) {
                $invalidProperties[] = "invalid value for 'sourceListenerPort', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['sourceListenerPort']) && ($this->container['sourceListenerPort'] < 1024)) {
                $invalidProperties[] = "invalid value for 'sourceListenerPort', must be bigger than or equal to 1024.";
            }
            if (!is_null($this->container['streamId']) && (mb_strlen($this->container['streamId']) > 512)) {
                $invalidProperties[] = "invalid value for 'streamId', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['streamId']) && (mb_strlen($this->container['streamId']) < 1)) {
                $invalidProperties[] = "invalid value for 'streamId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['minLatency']) && ($this->container['minLatency'] > 15000)) {
                $invalidProperties[] = "invalid value for 'minLatency', must be smaller than or equal to 15000.";
            }
            if (!is_null($this->container['minLatency']) && ($this->container['minLatency'] < 10)) {
                $invalidProperties[] = "invalid value for 'minLatency', must be bigger than or equal to 10.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
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

            if ((mb_strlen($this->container['protocol']) > 16)) {
                $invalidProperties[] = "invalid value for 'protocol', the character length must be smaller than or equal to 16.";
            }
            if ((mb_strlen($this->container['protocol']) < 1)) {
                $invalidProperties[] = "invalid value for 'protocol', the character length must be bigger than or equal to 1.";
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
            if (!preg_match("/^([a-zA-Z0-9\\-_]){1,64}$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^([a-zA-Z0-9\\-_]){1,64}$/.";
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
    * Gets sourceListenerAddress
    *  拉流地址
    *
    * @return string|null
    */
    public function getSourceListenerAddress()
    {
        return $this->container['sourceListenerAddress'];
    }

    /**
    * Sets sourceListenerAddress
    *
    * @param string|null $sourceListenerAddress 拉流地址
    *
    * @return $this
    */
    public function setSourceListenerAddress($sourceListenerAddress)
    {
        $this->container['sourceListenerAddress'] = $sourceListenerAddress;
        return $this;
    }

    /**
    * Gets sourceListenerPort
    *  拉流端口，2077/2088不可选
    *
    * @return int|null
    */
    public function getSourceListenerPort()
    {
        return $this->container['sourceListenerPort'];
    }

    /**
    * Sets sourceListenerPort
    *
    * @param int|null $sourceListenerPort 拉流端口，2077/2088不可选
    *
    * @return $this
    */
    public function setSourceListenerPort($sourceListenerPort)
    {
        $this->container['sourceListenerPort'] = $sourceListenerPort;
        return $this;
    }

    /**
    * Gets streamId
    *  srt拉流streamid
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
    * @param string|null $streamId srt拉流streamid
    *
    * @return $this
    */
    public function setStreamId($streamId)
    {
        $this->container['streamId'] = $streamId;
        return $this;
    }

    /**
    * Gets minLatency
    *  最小时延，单位ms
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
    * @param int|null $minLatency 最小时延，单位ms
    *
    * @return $this
    */
    public function setMinLatency($minLatency)
    {
        $this->container['minLatency'] = $minLatency;
        return $this;
    }

    /**
    * Gets cidrWhitelist
    *  推流CIDR IP白名单列表
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
    * @param string[]|null $cidrWhitelist 推流CIDR IP白名单列表
    *
    * @return $this
    */
    public function setCidrWhitelist($cidrWhitelist)
    {
        $this->container['cidrWhitelist'] = $cidrWhitelist;
        return $this;
    }

    /**
    * Gets description
    *  描述
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
    * @param string|null $description 描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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
    * Gets name
    *  入流资源名称
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
    * @param string $name 入流资源名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets decryption
    *  decryption
    *
    * @return \HuaweiCloud\SDK\Live\V1\Model\FlowSourceDecryption|null
    */
    public function getDecryption()
    {
        return $this->container['decryption'];
    }

    /**
    * Sets decryption
    *
    * @param \HuaweiCloud\SDK\Live\V1\Model\FlowSourceDecryption|null $decryption decryption
    *
    * @return $this
    */
    public function setDecryption($decryption)
    {
        $this->container['decryption'] = $decryption;
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

