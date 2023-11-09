<?php

namespace HuaweiCloud\SDK\SecMaster\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AlertNetworkList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Alert_network_list';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * direction  方向，取值范围：IN | OUT
    * protocol  协议，包含7层和4层的协议 参考：IANA registered name https://www.iana.org/assignments/protocol-numbers/protocol-numbers.xhtml
    * srcIp  源IP地址
    * srcPort  源端口，0–65535
    * srcDomain  源域名
    * srcGeo  srcGeo
    * destIp  目的IP地址
    * destPort  目的端口，0–65535
    * destDomain  目的域名
    * destGeo  destGeo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'direction' => 'string',
            'protocol' => 'string',
            'srcIp' => 'string',
            'srcPort' => 'int',
            'srcDomain' => 'string',
            'srcGeo' => '\HuaweiCloud\SDK\SecMaster\V2\Model\AlertSrcGeo',
            'destIp' => 'string',
            'destPort' => 'string',
            'destDomain' => 'string',
            'destGeo' => '\HuaweiCloud\SDK\SecMaster\V2\Model\AlertDestGeo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * direction  方向，取值范围：IN | OUT
    * protocol  协议，包含7层和4层的协议 参考：IANA registered name https://www.iana.org/assignments/protocol-numbers/protocol-numbers.xhtml
    * srcIp  源IP地址
    * srcPort  源端口，0–65535
    * srcDomain  源域名
    * srcGeo  srcGeo
    * destIp  目的IP地址
    * destPort  目的端口，0–65535
    * destDomain  目的域名
    * destGeo  destGeo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'direction' => null,
        'protocol' => null,
        'srcIp' => null,
        'srcPort' => null,
        'srcDomain' => null,
        'srcGeo' => null,
        'destIp' => null,
        'destPort' => null,
        'destDomain' => null,
        'destGeo' => null
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
    * direction  方向，取值范围：IN | OUT
    * protocol  协议，包含7层和4层的协议 参考：IANA registered name https://www.iana.org/assignments/protocol-numbers/protocol-numbers.xhtml
    * srcIp  源IP地址
    * srcPort  源端口，0–65535
    * srcDomain  源域名
    * srcGeo  srcGeo
    * destIp  目的IP地址
    * destPort  目的端口，0–65535
    * destDomain  目的域名
    * destGeo  destGeo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'direction' => 'direction',
            'protocol' => 'protocol',
            'srcIp' => 'src_ip',
            'srcPort' => 'src_port',
            'srcDomain' => 'src_domain',
            'srcGeo' => 'src_geo',
            'destIp' => 'dest_ip',
            'destPort' => 'dest_port',
            'destDomain' => 'dest_domain',
            'destGeo' => 'dest_geo'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * direction  方向，取值范围：IN | OUT
    * protocol  协议，包含7层和4层的协议 参考：IANA registered name https://www.iana.org/assignments/protocol-numbers/protocol-numbers.xhtml
    * srcIp  源IP地址
    * srcPort  源端口，0–65535
    * srcDomain  源域名
    * srcGeo  srcGeo
    * destIp  目的IP地址
    * destPort  目的端口，0–65535
    * destDomain  目的域名
    * destGeo  destGeo
    *
    * @var string[]
    */
    protected static $setters = [
            'direction' => 'setDirection',
            'protocol' => 'setProtocol',
            'srcIp' => 'setSrcIp',
            'srcPort' => 'setSrcPort',
            'srcDomain' => 'setSrcDomain',
            'srcGeo' => 'setSrcGeo',
            'destIp' => 'setDestIp',
            'destPort' => 'setDestPort',
            'destDomain' => 'setDestDomain',
            'destGeo' => 'setDestGeo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * direction  方向，取值范围：IN | OUT
    * protocol  协议，包含7层和4层的协议 参考：IANA registered name https://www.iana.org/assignments/protocol-numbers/protocol-numbers.xhtml
    * srcIp  源IP地址
    * srcPort  源端口，0–65535
    * srcDomain  源域名
    * srcGeo  srcGeo
    * destIp  目的IP地址
    * destPort  目的端口，0–65535
    * destDomain  目的域名
    * destGeo  destGeo
    *
    * @var string[]
    */
    protected static $getters = [
            'direction' => 'getDirection',
            'protocol' => 'getProtocol',
            'srcIp' => 'getSrcIp',
            'srcPort' => 'getSrcPort',
            'srcDomain' => 'getSrcDomain',
            'srcGeo' => 'getSrcGeo',
            'destIp' => 'getDestIp',
            'destPort' => 'getDestPort',
            'destDomain' => 'getDestDomain',
            'destGeo' => 'getDestGeo'
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
    const DIRECTION_IN = 'IN';
    const DIRECTION_OUT = 'OUT';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDirectionAllowableValues()
    {
        return [
            self::DIRECTION_IN,
            self::DIRECTION_OUT,
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
        $this->container['direction'] = isset($data['direction']) ? $data['direction'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['srcIp'] = isset($data['srcIp']) ? $data['srcIp'] : null;
        $this->container['srcPort'] = isset($data['srcPort']) ? $data['srcPort'] : null;
        $this->container['srcDomain'] = isset($data['srcDomain']) ? $data['srcDomain'] : null;
        $this->container['srcGeo'] = isset($data['srcGeo']) ? $data['srcGeo'] : null;
        $this->container['destIp'] = isset($data['destIp']) ? $data['destIp'] : null;
        $this->container['destPort'] = isset($data['destPort']) ? $data['destPort'] : null;
        $this->container['destDomain'] = isset($data['destDomain']) ? $data['destDomain'] : null;
        $this->container['destGeo'] = isset($data['destGeo']) ? $data['destGeo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getDirectionAllowableValues();
                if (!is_null($this->container['direction']) && !in_array($this->container['direction'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'direction', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['direction']) && (mb_strlen($this->container['direction']) > 3)) {
                $invalidProperties[] = "invalid value for 'direction', the character length must be smaller than or equal to 3.";
            }
            if (!is_null($this->container['direction']) && (mb_strlen($this->container['direction']) < 0)) {
                $invalidProperties[] = "invalid value for 'direction', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['protocol']) && (mb_strlen($this->container['protocol']) > 64)) {
                $invalidProperties[] = "invalid value for 'protocol', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['protocol']) && (mb_strlen($this->container['protocol']) < 0)) {
                $invalidProperties[] = "invalid value for 'protocol', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['srcIp']) && (mb_strlen($this->container['srcIp']) > 64)) {
                $invalidProperties[] = "invalid value for 'srcIp', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['srcIp']) && (mb_strlen($this->container['srcIp']) < 0)) {
                $invalidProperties[] = "invalid value for 'srcIp', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['srcPort']) && ($this->container['srcPort'] > 65535)) {
                $invalidProperties[] = "invalid value for 'srcPort', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['srcPort']) && ($this->container['srcPort'] < 0)) {
                $invalidProperties[] = "invalid value for 'srcPort', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['srcDomain']) && (mb_strlen($this->container['srcDomain']) > 128)) {
                $invalidProperties[] = "invalid value for 'srcDomain', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['srcDomain']) && (mb_strlen($this->container['srcDomain']) < 0)) {
                $invalidProperties[] = "invalid value for 'srcDomain', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['destIp']) && (mb_strlen($this->container['destIp']) > 64)) {
                $invalidProperties[] = "invalid value for 'destIp', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['destIp']) && (mb_strlen($this->container['destIp']) < 32)) {
                $invalidProperties[] = "invalid value for 'destIp', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['destPort']) && (mb_strlen($this->container['destPort']) > 65535)) {
                $invalidProperties[] = "invalid value for 'destPort', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['destPort']) && (mb_strlen($this->container['destPort']) < 0)) {
                $invalidProperties[] = "invalid value for 'destPort', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['destDomain']) && (mb_strlen($this->container['destDomain']) > 128)) {
                $invalidProperties[] = "invalid value for 'destDomain', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['destDomain']) && (mb_strlen($this->container['destDomain']) < 0)) {
                $invalidProperties[] = "invalid value for 'destDomain', the character length must be bigger than or equal to 0.";
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
    * Gets direction
    *  方向，取值范围：IN | OUT
    *
    * @return string|null
    */
    public function getDirection()
    {
        return $this->container['direction'];
    }

    /**
    * Sets direction
    *
    * @param string|null $direction 方向，取值范围：IN | OUT
    *
    * @return $this
    */
    public function setDirection($direction)
    {
        $this->container['direction'] = $direction;
        return $this;
    }

    /**
    * Gets protocol
    *  协议，包含7层和4层的协议 参考：IANA registered name https://www.iana.org/assignments/protocol-numbers/protocol-numbers.xhtml
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
    * @param string|null $protocol 协议，包含7层和4层的协议 参考：IANA registered name https://www.iana.org/assignments/protocol-numbers/protocol-numbers.xhtml
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets srcIp
    *  源IP地址
    *
    * @return string|null
    */
    public function getSrcIp()
    {
        return $this->container['srcIp'];
    }

    /**
    * Sets srcIp
    *
    * @param string|null $srcIp 源IP地址
    *
    * @return $this
    */
    public function setSrcIp($srcIp)
    {
        $this->container['srcIp'] = $srcIp;
        return $this;
    }

    /**
    * Gets srcPort
    *  源端口，0–65535
    *
    * @return int|null
    */
    public function getSrcPort()
    {
        return $this->container['srcPort'];
    }

    /**
    * Sets srcPort
    *
    * @param int|null $srcPort 源端口，0–65535
    *
    * @return $this
    */
    public function setSrcPort($srcPort)
    {
        $this->container['srcPort'] = $srcPort;
        return $this;
    }

    /**
    * Gets srcDomain
    *  源域名
    *
    * @return string|null
    */
    public function getSrcDomain()
    {
        return $this->container['srcDomain'];
    }

    /**
    * Sets srcDomain
    *
    * @param string|null $srcDomain 源域名
    *
    * @return $this
    */
    public function setSrcDomain($srcDomain)
    {
        $this->container['srcDomain'] = $srcDomain;
        return $this;
    }

    /**
    * Gets srcGeo
    *  srcGeo
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\AlertSrcGeo|null
    */
    public function getSrcGeo()
    {
        return $this->container['srcGeo'];
    }

    /**
    * Sets srcGeo
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\AlertSrcGeo|null $srcGeo srcGeo
    *
    * @return $this
    */
    public function setSrcGeo($srcGeo)
    {
        $this->container['srcGeo'] = $srcGeo;
        return $this;
    }

    /**
    * Gets destIp
    *  目的IP地址
    *
    * @return string|null
    */
    public function getDestIp()
    {
        return $this->container['destIp'];
    }

    /**
    * Sets destIp
    *
    * @param string|null $destIp 目的IP地址
    *
    * @return $this
    */
    public function setDestIp($destIp)
    {
        $this->container['destIp'] = $destIp;
        return $this;
    }

    /**
    * Gets destPort
    *  目的端口，0–65535
    *
    * @return string|null
    */
    public function getDestPort()
    {
        return $this->container['destPort'];
    }

    /**
    * Sets destPort
    *
    * @param string|null $destPort 目的端口，0–65535
    *
    * @return $this
    */
    public function setDestPort($destPort)
    {
        $this->container['destPort'] = $destPort;
        return $this;
    }

    /**
    * Gets destDomain
    *  目的域名
    *
    * @return string|null
    */
    public function getDestDomain()
    {
        return $this->container['destDomain'];
    }

    /**
    * Sets destDomain
    *
    * @param string|null $destDomain 目的域名
    *
    * @return $this
    */
    public function setDestDomain($destDomain)
    {
        $this->container['destDomain'] = $destDomain;
        return $this;
    }

    /**
    * Gets destGeo
    *  destGeo
    *
    * @return \HuaweiCloud\SDK\SecMaster\V2\Model\AlertDestGeo|null
    */
    public function getDestGeo()
    {
        return $this->container['destGeo'];
    }

    /**
    * Sets destGeo
    *
    * @param \HuaweiCloud\SDK\SecMaster\V2\Model\AlertDestGeo|null $destGeo destGeo
    *
    * @return $this
    */
    public function setDestGeo($destGeo)
    {
        $this->container['destGeo'] = $destGeo;
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

