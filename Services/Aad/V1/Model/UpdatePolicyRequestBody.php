<?php

namespace HuaweiCloud\SDK\Aad\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdatePolicyRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdatePolicyRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  策略名
    * threshold  清洗阈值
    * description  描述
    * udp  udp协议设置。block：封禁，unblock：不封禁，limiting：限速
    * tcp  tcp协议设置。block：封禁，unblock：不封禁，limiting：限速
    * icmp  icmp协议设置。block：封禁，unblock：不封禁，limiting：限速
    * other  other协议设置。block：封禁，unblock：不封禁，limiting：限速
    * icmpTrafficLimiting  icmp自定义限速值，icmp取值limiting情况下，如果该值为空表示不限速
    * udpTrafficLimiting  udp自定义限速值，udp取值limiting情况下，如果该值为空表示不限速
    * udpFragmentRateLimiting  udp分片自定义限速值，udp取值limiting情况下，如果该值为空表示不限速
    * otherTrafficLimiting  other自定义限速值，other取值limiting情况下，如果该值为空表示不限速
    * tcpTrafficLimiting  tcp自定义限速值，tcp取值limiting情况下，如果该值为空表示不限速
    * tcpFragmentRateLimiting  tcp分片自定义限速值，tcp取值limiting情况下，如果该值为空表示不限速
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'threshold' => 'int',
            'description' => 'string',
            'udp' => 'string',
            'tcp' => 'string',
            'icmp' => 'string',
            'other' => 'string',
            'icmpTrafficLimiting' => 'int',
            'udpTrafficLimiting' => 'int',
            'udpFragmentRateLimiting' => 'int',
            'otherTrafficLimiting' => 'int',
            'tcpTrafficLimiting' => 'int',
            'tcpFragmentRateLimiting' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  策略名
    * threshold  清洗阈值
    * description  描述
    * udp  udp协议设置。block：封禁，unblock：不封禁，limiting：限速
    * tcp  tcp协议设置。block：封禁，unblock：不封禁，limiting：限速
    * icmp  icmp协议设置。block：封禁，unblock：不封禁，limiting：限速
    * other  other协议设置。block：封禁，unblock：不封禁，limiting：限速
    * icmpTrafficLimiting  icmp自定义限速值，icmp取值limiting情况下，如果该值为空表示不限速
    * udpTrafficLimiting  udp自定义限速值，udp取值limiting情况下，如果该值为空表示不限速
    * udpFragmentRateLimiting  udp分片自定义限速值，udp取值limiting情况下，如果该值为空表示不限速
    * otherTrafficLimiting  other自定义限速值，other取值limiting情况下，如果该值为空表示不限速
    * tcpTrafficLimiting  tcp自定义限速值，tcp取值limiting情况下，如果该值为空表示不限速
    * tcpFragmentRateLimiting  tcp分片自定义限速值，tcp取值limiting情况下，如果该值为空表示不限速
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'threshold' => 'int32',
        'description' => null,
        'udp' => null,
        'tcp' => null,
        'icmp' => null,
        'other' => null,
        'icmpTrafficLimiting' => 'int64',
        'udpTrafficLimiting' => 'int64',
        'udpFragmentRateLimiting' => 'int64',
        'otherTrafficLimiting' => 'int64',
        'tcpTrafficLimiting' => 'int64',
        'tcpFragmentRateLimiting' => 'int64'
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
    * name  策略名
    * threshold  清洗阈值
    * description  描述
    * udp  udp协议设置。block：封禁，unblock：不封禁，limiting：限速
    * tcp  tcp协议设置。block：封禁，unblock：不封禁，limiting：限速
    * icmp  icmp协议设置。block：封禁，unblock：不封禁，limiting：限速
    * other  other协议设置。block：封禁，unblock：不封禁，limiting：限速
    * icmpTrafficLimiting  icmp自定义限速值，icmp取值limiting情况下，如果该值为空表示不限速
    * udpTrafficLimiting  udp自定义限速值，udp取值limiting情况下，如果该值为空表示不限速
    * udpFragmentRateLimiting  udp分片自定义限速值，udp取值limiting情况下，如果该值为空表示不限速
    * otherTrafficLimiting  other自定义限速值，other取值limiting情况下，如果该值为空表示不限速
    * tcpTrafficLimiting  tcp自定义限速值，tcp取值limiting情况下，如果该值为空表示不限速
    * tcpFragmentRateLimiting  tcp分片自定义限速值，tcp取值limiting情况下，如果该值为空表示不限速
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'threshold' => 'threshold',
            'description' => 'description',
            'udp' => 'udp',
            'tcp' => 'tcp',
            'icmp' => 'icmp',
            'other' => 'other',
            'icmpTrafficLimiting' => 'icmp_traffic_limiting',
            'udpTrafficLimiting' => 'udp_traffic_limiting',
            'udpFragmentRateLimiting' => 'udp_fragment_rate_limiting',
            'otherTrafficLimiting' => 'other_traffic_limiting',
            'tcpTrafficLimiting' => 'tcp_traffic_limiting',
            'tcpFragmentRateLimiting' => 'tcp_fragment_rate_limiting'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  策略名
    * threshold  清洗阈值
    * description  描述
    * udp  udp协议设置。block：封禁，unblock：不封禁，limiting：限速
    * tcp  tcp协议设置。block：封禁，unblock：不封禁，limiting：限速
    * icmp  icmp协议设置。block：封禁，unblock：不封禁，limiting：限速
    * other  other协议设置。block：封禁，unblock：不封禁，limiting：限速
    * icmpTrafficLimiting  icmp自定义限速值，icmp取值limiting情况下，如果该值为空表示不限速
    * udpTrafficLimiting  udp自定义限速值，udp取值limiting情况下，如果该值为空表示不限速
    * udpFragmentRateLimiting  udp分片自定义限速值，udp取值limiting情况下，如果该值为空表示不限速
    * otherTrafficLimiting  other自定义限速值，other取值limiting情况下，如果该值为空表示不限速
    * tcpTrafficLimiting  tcp自定义限速值，tcp取值limiting情况下，如果该值为空表示不限速
    * tcpFragmentRateLimiting  tcp分片自定义限速值，tcp取值limiting情况下，如果该值为空表示不限速
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'threshold' => 'setThreshold',
            'description' => 'setDescription',
            'udp' => 'setUdp',
            'tcp' => 'setTcp',
            'icmp' => 'setIcmp',
            'other' => 'setOther',
            'icmpTrafficLimiting' => 'setIcmpTrafficLimiting',
            'udpTrafficLimiting' => 'setUdpTrafficLimiting',
            'udpFragmentRateLimiting' => 'setUdpFragmentRateLimiting',
            'otherTrafficLimiting' => 'setOtherTrafficLimiting',
            'tcpTrafficLimiting' => 'setTcpTrafficLimiting',
            'tcpFragmentRateLimiting' => 'setTcpFragmentRateLimiting'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  策略名
    * threshold  清洗阈值
    * description  描述
    * udp  udp协议设置。block：封禁，unblock：不封禁，limiting：限速
    * tcp  tcp协议设置。block：封禁，unblock：不封禁，limiting：限速
    * icmp  icmp协议设置。block：封禁，unblock：不封禁，limiting：限速
    * other  other协议设置。block：封禁，unblock：不封禁，limiting：限速
    * icmpTrafficLimiting  icmp自定义限速值，icmp取值limiting情况下，如果该值为空表示不限速
    * udpTrafficLimiting  udp自定义限速值，udp取值limiting情况下，如果该值为空表示不限速
    * udpFragmentRateLimiting  udp分片自定义限速值，udp取值limiting情况下，如果该值为空表示不限速
    * otherTrafficLimiting  other自定义限速值，other取值limiting情况下，如果该值为空表示不限速
    * tcpTrafficLimiting  tcp自定义限速值，tcp取值limiting情况下，如果该值为空表示不限速
    * tcpFragmentRateLimiting  tcp分片自定义限速值，tcp取值limiting情况下，如果该值为空表示不限速
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'threshold' => 'getThreshold',
            'description' => 'getDescription',
            'udp' => 'getUdp',
            'tcp' => 'getTcp',
            'icmp' => 'getIcmp',
            'other' => 'getOther',
            'icmpTrafficLimiting' => 'getIcmpTrafficLimiting',
            'udpTrafficLimiting' => 'getUdpTrafficLimiting',
            'udpFragmentRateLimiting' => 'getUdpFragmentRateLimiting',
            'otherTrafficLimiting' => 'getOtherTrafficLimiting',
            'tcpTrafficLimiting' => 'getTcpTrafficLimiting',
            'tcpFragmentRateLimiting' => 'getTcpFragmentRateLimiting'
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
    const UDP_BLOCK = 'block';
    const UDP_UNBLOCK = 'unblock';
    const UDP_LIMITING = 'limiting';
    const TCP_BLOCK = 'block';
    const TCP_UNBLOCK = 'unblock';
    const TCP_LIMITING = 'limiting';
    const ICMP_BLOCK = 'block';
    const ICMP_UNBLOCK = 'unblock';
    const ICMP_LIMITING = 'limiting';
    const OTHER_BLOCK = 'block';
    const OTHER_UNBLOCK = 'unblock';
    const OTHER_LIMITING = 'limiting';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getUdpAllowableValues()
    {
        return [
            self::UDP_BLOCK,
            self::UDP_UNBLOCK,
            self::UDP_LIMITING,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTcpAllowableValues()
    {
        return [
            self::TCP_BLOCK,
            self::TCP_UNBLOCK,
            self::TCP_LIMITING,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getIcmpAllowableValues()
    {
        return [
            self::ICMP_BLOCK,
            self::ICMP_UNBLOCK,
            self::ICMP_LIMITING,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOtherAllowableValues()
    {
        return [
            self::OTHER_BLOCK,
            self::OTHER_UNBLOCK,
            self::OTHER_LIMITING,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['threshold'] = isset($data['threshold']) ? $data['threshold'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['udp'] = isset($data['udp']) ? $data['udp'] : null;
        $this->container['tcp'] = isset($data['tcp']) ? $data['tcp'] : null;
        $this->container['icmp'] = isset($data['icmp']) ? $data['icmp'] : null;
        $this->container['other'] = isset($data['other']) ? $data['other'] : null;
        $this->container['icmpTrafficLimiting'] = isset($data['icmpTrafficLimiting']) ? $data['icmpTrafficLimiting'] : null;
        $this->container['udpTrafficLimiting'] = isset($data['udpTrafficLimiting']) ? $data['udpTrafficLimiting'] : null;
        $this->container['udpFragmentRateLimiting'] = isset($data['udpFragmentRateLimiting']) ? $data['udpFragmentRateLimiting'] : null;
        $this->container['otherTrafficLimiting'] = isset($data['otherTrafficLimiting']) ? $data['otherTrafficLimiting'] : null;
        $this->container['tcpTrafficLimiting'] = isset($data['tcpTrafficLimiting']) ? $data['tcpTrafficLimiting'] : null;
        $this->container['tcpFragmentRateLimiting'] = isset($data['tcpFragmentRateLimiting']) ? $data['tcpFragmentRateLimiting'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['threshold']) && ($this->container['threshold'] > 1000)) {
                $invalidProperties[] = "invalid value for 'threshold', must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['threshold']) && ($this->container['threshold'] < 100)) {
                $invalidProperties[] = "invalid value for 'threshold', must be bigger than or equal to 100.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getUdpAllowableValues();
                if (!is_null($this->container['udp']) && !in_array($this->container['udp'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'udp', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getTcpAllowableValues();
                if (!is_null($this->container['tcp']) && !in_array($this->container['tcp'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'tcp', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getIcmpAllowableValues();
                if (!is_null($this->container['icmp']) && !in_array($this->container['icmp'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'icmp', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getOtherAllowableValues();
                if (!is_null($this->container['other']) && !in_array($this->container['other'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'other', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['icmpTrafficLimiting']) && ($this->container['icmpTrafficLimiting'] > 2000000)) {
                $invalidProperties[] = "invalid value for 'icmpTrafficLimiting', must be smaller than or equal to 2000000.";
            }
            if (!is_null($this->container['icmpTrafficLimiting']) && ($this->container['icmpTrafficLimiting'] < 1)) {
                $invalidProperties[] = "invalid value for 'icmpTrafficLimiting', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['udpTrafficLimiting']) && ($this->container['udpTrafficLimiting'] > 80000000)) {
                $invalidProperties[] = "invalid value for 'udpTrafficLimiting', must be smaller than or equal to 80000000.";
            }
            if (!is_null($this->container['udpTrafficLimiting']) && ($this->container['udpTrafficLimiting'] < 1)) {
                $invalidProperties[] = "invalid value for 'udpTrafficLimiting', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['udpFragmentRateLimiting']) && ($this->container['udpFragmentRateLimiting'] > 80000000)) {
                $invalidProperties[] = "invalid value for 'udpFragmentRateLimiting', must be smaller than or equal to 80000000.";
            }
            if (!is_null($this->container['udpFragmentRateLimiting']) && ($this->container['udpFragmentRateLimiting'] < 1)) {
                $invalidProperties[] = "invalid value for 'udpFragmentRateLimiting', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['otherTrafficLimiting']) && ($this->container['otherTrafficLimiting'] > 80000000)) {
                $invalidProperties[] = "invalid value for 'otherTrafficLimiting', must be smaller than or equal to 80000000.";
            }
            if (!is_null($this->container['otherTrafficLimiting']) && ($this->container['otherTrafficLimiting'] < 1)) {
                $invalidProperties[] = "invalid value for 'otherTrafficLimiting', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['tcpTrafficLimiting']) && ($this->container['tcpTrafficLimiting'] > 80000000)) {
                $invalidProperties[] = "invalid value for 'tcpTrafficLimiting', must be smaller than or equal to 80000000.";
            }
            if (!is_null($this->container['tcpTrafficLimiting']) && ($this->container['tcpTrafficLimiting'] < 1)) {
                $invalidProperties[] = "invalid value for 'tcpTrafficLimiting', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['tcpFragmentRateLimiting']) && ($this->container['tcpFragmentRateLimiting'] > 80000000)) {
                $invalidProperties[] = "invalid value for 'tcpFragmentRateLimiting', must be smaller than or equal to 80000000.";
            }
            if (!is_null($this->container['tcpFragmentRateLimiting']) && ($this->container['tcpFragmentRateLimiting'] < 1)) {
                $invalidProperties[] = "invalid value for 'tcpFragmentRateLimiting', must be bigger than or equal to 1.";
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
    * Gets name
    *  策略名
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 策略名
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets threshold
    *  清洗阈值
    *
    * @return int|null
    */
    public function getThreshold()
    {
        return $this->container['threshold'];
    }

    /**
    * Sets threshold
    *
    * @param int|null $threshold 清洗阈值
    *
    * @return $this
    */
    public function setThreshold($threshold)
    {
        $this->container['threshold'] = $threshold;
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
    * Gets udp
    *  udp协议设置。block：封禁，unblock：不封禁，limiting：限速
    *
    * @return string|null
    */
    public function getUdp()
    {
        return $this->container['udp'];
    }

    /**
    * Sets udp
    *
    * @param string|null $udp udp协议设置。block：封禁，unblock：不封禁，limiting：限速
    *
    * @return $this
    */
    public function setUdp($udp)
    {
        $this->container['udp'] = $udp;
        return $this;
    }

    /**
    * Gets tcp
    *  tcp协议设置。block：封禁，unblock：不封禁，limiting：限速
    *
    * @return string|null
    */
    public function getTcp()
    {
        return $this->container['tcp'];
    }

    /**
    * Sets tcp
    *
    * @param string|null $tcp tcp协议设置。block：封禁，unblock：不封禁，limiting：限速
    *
    * @return $this
    */
    public function setTcp($tcp)
    {
        $this->container['tcp'] = $tcp;
        return $this;
    }

    /**
    * Gets icmp
    *  icmp协议设置。block：封禁，unblock：不封禁，limiting：限速
    *
    * @return string|null
    */
    public function getIcmp()
    {
        return $this->container['icmp'];
    }

    /**
    * Sets icmp
    *
    * @param string|null $icmp icmp协议设置。block：封禁，unblock：不封禁，limiting：限速
    *
    * @return $this
    */
    public function setIcmp($icmp)
    {
        $this->container['icmp'] = $icmp;
        return $this;
    }

    /**
    * Gets other
    *  other协议设置。block：封禁，unblock：不封禁，limiting：限速
    *
    * @return string|null
    */
    public function getOther()
    {
        return $this->container['other'];
    }

    /**
    * Sets other
    *
    * @param string|null $other other协议设置。block：封禁，unblock：不封禁，limiting：限速
    *
    * @return $this
    */
    public function setOther($other)
    {
        $this->container['other'] = $other;
        return $this;
    }

    /**
    * Gets icmpTrafficLimiting
    *  icmp自定义限速值，icmp取值limiting情况下，如果该值为空表示不限速
    *
    * @return int|null
    */
    public function getIcmpTrafficLimiting()
    {
        return $this->container['icmpTrafficLimiting'];
    }

    /**
    * Sets icmpTrafficLimiting
    *
    * @param int|null $icmpTrafficLimiting icmp自定义限速值，icmp取值limiting情况下，如果该值为空表示不限速
    *
    * @return $this
    */
    public function setIcmpTrafficLimiting($icmpTrafficLimiting)
    {
        $this->container['icmpTrafficLimiting'] = $icmpTrafficLimiting;
        return $this;
    }

    /**
    * Gets udpTrafficLimiting
    *  udp自定义限速值，udp取值limiting情况下，如果该值为空表示不限速
    *
    * @return int|null
    */
    public function getUdpTrafficLimiting()
    {
        return $this->container['udpTrafficLimiting'];
    }

    /**
    * Sets udpTrafficLimiting
    *
    * @param int|null $udpTrafficLimiting udp自定义限速值，udp取值limiting情况下，如果该值为空表示不限速
    *
    * @return $this
    */
    public function setUdpTrafficLimiting($udpTrafficLimiting)
    {
        $this->container['udpTrafficLimiting'] = $udpTrafficLimiting;
        return $this;
    }

    /**
    * Gets udpFragmentRateLimiting
    *  udp分片自定义限速值，udp取值limiting情况下，如果该值为空表示不限速
    *
    * @return int|null
    */
    public function getUdpFragmentRateLimiting()
    {
        return $this->container['udpFragmentRateLimiting'];
    }

    /**
    * Sets udpFragmentRateLimiting
    *
    * @param int|null $udpFragmentRateLimiting udp分片自定义限速值，udp取值limiting情况下，如果该值为空表示不限速
    *
    * @return $this
    */
    public function setUdpFragmentRateLimiting($udpFragmentRateLimiting)
    {
        $this->container['udpFragmentRateLimiting'] = $udpFragmentRateLimiting;
        return $this;
    }

    /**
    * Gets otherTrafficLimiting
    *  other自定义限速值，other取值limiting情况下，如果该值为空表示不限速
    *
    * @return int|null
    */
    public function getOtherTrafficLimiting()
    {
        return $this->container['otherTrafficLimiting'];
    }

    /**
    * Sets otherTrafficLimiting
    *
    * @param int|null $otherTrafficLimiting other自定义限速值，other取值limiting情况下，如果该值为空表示不限速
    *
    * @return $this
    */
    public function setOtherTrafficLimiting($otherTrafficLimiting)
    {
        $this->container['otherTrafficLimiting'] = $otherTrafficLimiting;
        return $this;
    }

    /**
    * Gets tcpTrafficLimiting
    *  tcp自定义限速值，tcp取值limiting情况下，如果该值为空表示不限速
    *
    * @return int|null
    */
    public function getTcpTrafficLimiting()
    {
        return $this->container['tcpTrafficLimiting'];
    }

    /**
    * Sets tcpTrafficLimiting
    *
    * @param int|null $tcpTrafficLimiting tcp自定义限速值，tcp取值limiting情况下，如果该值为空表示不限速
    *
    * @return $this
    */
    public function setTcpTrafficLimiting($tcpTrafficLimiting)
    {
        $this->container['tcpTrafficLimiting'] = $tcpTrafficLimiting;
        return $this;
    }

    /**
    * Gets tcpFragmentRateLimiting
    *  tcp分片自定义限速值，tcp取值limiting情况下，如果该值为空表示不限速
    *
    * @return int|null
    */
    public function getTcpFragmentRateLimiting()
    {
        return $this->container['tcpFragmentRateLimiting'];
    }

    /**
    * Sets tcpFragmentRateLimiting
    *
    * @param int|null $tcpFragmentRateLimiting tcp分片自定义限速值，tcp取值limiting情况下，如果该值为空表示不限速
    *
    * @return $this
    */
    public function setTcpFragmentRateLimiting($tcpFragmentRateLimiting)
    {
        $this->container['tcpFragmentRateLimiting'] = $tcpFragmentRateLimiting;
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

