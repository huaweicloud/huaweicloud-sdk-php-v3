<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Flavor implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Flavor';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * version  防火墙版本，0：标准版，1：专业版，3：基础版，购买时，当防火墙“charge_mode”为“postPaid”时，仅支持专业版。“charge_mode”为“prePaid”时，支持标准版、专业版。
    * eipCount  eip数量
    * vpcCount  vpc数量
    * bandwidth  带宽，单位为mbps
    * logStorage  日志存储，单位为byte
    * defaultBandwidth  默认防火墙带宽，单位为mbps，标准版为10，专业版为50，按需专业版为200
    * defaultEipCount  默认eip数，标准版为20，专业版为50，按需专业版为1000
    * defaultLogStorage  默认日志存储，单位为byte，默认为0
    * defaultVpcCount  默认vpc数，标准版为0，专业版为2，按需专业版为5
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'version' => 'int',
            'eipCount' => 'int',
            'vpcCount' => 'int',
            'bandwidth' => 'int',
            'logStorage' => 'int',
            'defaultBandwidth' => 'int',
            'defaultEipCount' => 'int',
            'defaultLogStorage' => 'int',
            'defaultVpcCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * version  防火墙版本，0：标准版，1：专业版，3：基础版，购买时，当防火墙“charge_mode”为“postPaid”时，仅支持专业版。“charge_mode”为“prePaid”时，支持标准版、专业版。
    * eipCount  eip数量
    * vpcCount  vpc数量
    * bandwidth  带宽，单位为mbps
    * logStorage  日志存储，单位为byte
    * defaultBandwidth  默认防火墙带宽，单位为mbps，标准版为10，专业版为50，按需专业版为200
    * defaultEipCount  默认eip数，标准版为20，专业版为50，按需专业版为1000
    * defaultLogStorage  默认日志存储，单位为byte，默认为0
    * defaultVpcCount  默认vpc数，标准版为0，专业版为2，按需专业版为5
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'version' => 'int32',
        'eipCount' => 'int32',
        'vpcCount' => 'int32',
        'bandwidth' => 'int32',
        'logStorage' => 'int32',
        'defaultBandwidth' => 'int32',
        'defaultEipCount' => 'int32',
        'defaultLogStorage' => 'int32',
        'defaultVpcCount' => 'int32'
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
    * version  防火墙版本，0：标准版，1：专业版，3：基础版，购买时，当防火墙“charge_mode”为“postPaid”时，仅支持专业版。“charge_mode”为“prePaid”时，支持标准版、专业版。
    * eipCount  eip数量
    * vpcCount  vpc数量
    * bandwidth  带宽，单位为mbps
    * logStorage  日志存储，单位为byte
    * defaultBandwidth  默认防火墙带宽，单位为mbps，标准版为10，专业版为50，按需专业版为200
    * defaultEipCount  默认eip数，标准版为20，专业版为50，按需专业版为1000
    * defaultLogStorage  默认日志存储，单位为byte，默认为0
    * defaultVpcCount  默认vpc数，标准版为0，专业版为2，按需专业版为5
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'version' => 'version',
            'eipCount' => 'eip_count',
            'vpcCount' => 'vpc_count',
            'bandwidth' => 'bandwidth',
            'logStorage' => 'log_storage',
            'defaultBandwidth' => 'default_bandwidth',
            'defaultEipCount' => 'default_eip_count',
            'defaultLogStorage' => 'default_log_storage',
            'defaultVpcCount' => 'default_vpc_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * version  防火墙版本，0：标准版，1：专业版，3：基础版，购买时，当防火墙“charge_mode”为“postPaid”时，仅支持专业版。“charge_mode”为“prePaid”时，支持标准版、专业版。
    * eipCount  eip数量
    * vpcCount  vpc数量
    * bandwidth  带宽，单位为mbps
    * logStorage  日志存储，单位为byte
    * defaultBandwidth  默认防火墙带宽，单位为mbps，标准版为10，专业版为50，按需专业版为200
    * defaultEipCount  默认eip数，标准版为20，专业版为50，按需专业版为1000
    * defaultLogStorage  默认日志存储，单位为byte，默认为0
    * defaultVpcCount  默认vpc数，标准版为0，专业版为2，按需专业版为5
    *
    * @var string[]
    */
    protected static $setters = [
            'version' => 'setVersion',
            'eipCount' => 'setEipCount',
            'vpcCount' => 'setVpcCount',
            'bandwidth' => 'setBandwidth',
            'logStorage' => 'setLogStorage',
            'defaultBandwidth' => 'setDefaultBandwidth',
            'defaultEipCount' => 'setDefaultEipCount',
            'defaultLogStorage' => 'setDefaultLogStorage',
            'defaultVpcCount' => 'setDefaultVpcCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * version  防火墙版本，0：标准版，1：专业版，3：基础版，购买时，当防火墙“charge_mode”为“postPaid”时，仅支持专业版。“charge_mode”为“prePaid”时，支持标准版、专业版。
    * eipCount  eip数量
    * vpcCount  vpc数量
    * bandwidth  带宽，单位为mbps
    * logStorage  日志存储，单位为byte
    * defaultBandwidth  默认防火墙带宽，单位为mbps，标准版为10，专业版为50，按需专业版为200
    * defaultEipCount  默认eip数，标准版为20，专业版为50，按需专业版为1000
    * defaultLogStorage  默认日志存储，单位为byte，默认为0
    * defaultVpcCount  默认vpc数，标准版为0，专业版为2，按需专业版为5
    *
    * @var string[]
    */
    protected static $getters = [
            'version' => 'getVersion',
            'eipCount' => 'getEipCount',
            'vpcCount' => 'getVpcCount',
            'bandwidth' => 'getBandwidth',
            'logStorage' => 'getLogStorage',
            'defaultBandwidth' => 'getDefaultBandwidth',
            'defaultEipCount' => 'getDefaultEipCount',
            'defaultLogStorage' => 'getDefaultLogStorage',
            'defaultVpcCount' => 'getDefaultVpcCount'
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
    const VERSION_0 = 0;
    const VERSION_1 = 1;
    const VERSION_2 = 2;
    const VERSION_3 = 3;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getVersionAllowableValues()
    {
        return [
            self::VERSION_0,
            self::VERSION_1,
            self::VERSION_2,
            self::VERSION_3,
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
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['eipCount'] = isset($data['eipCount']) ? $data['eipCount'] : null;
        $this->container['vpcCount'] = isset($data['vpcCount']) ? $data['vpcCount'] : null;
        $this->container['bandwidth'] = isset($data['bandwidth']) ? $data['bandwidth'] : null;
        $this->container['logStorage'] = isset($data['logStorage']) ? $data['logStorage'] : null;
        $this->container['defaultBandwidth'] = isset($data['defaultBandwidth']) ? $data['defaultBandwidth'] : null;
        $this->container['defaultEipCount'] = isset($data['defaultEipCount']) ? $data['defaultEipCount'] : null;
        $this->container['defaultLogStorage'] = isset($data['defaultLogStorage']) ? $data['defaultLogStorage'] : null;
        $this->container['defaultVpcCount'] = isset($data['defaultVpcCount']) ? $data['defaultVpcCount'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getVersionAllowableValues();
                if (!is_null($this->container['version']) && !in_array($this->container['version'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'version', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['eipCount']) && ($this->container['eipCount'] < 1)) {
                $invalidProperties[] = "invalid value for 'eipCount', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['vpcCount']) && ($this->container['vpcCount'] < 1)) {
                $invalidProperties[] = "invalid value for 'vpcCount', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['bandwidth']) && ($this->container['bandwidth'] < 1)) {
                $invalidProperties[] = "invalid value for 'bandwidth', must be bigger than or equal to 1.";
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
    * Gets version
    *  防火墙版本，0：标准版，1：专业版，3：基础版，购买时，当防火墙“charge_mode”为“postPaid”时，仅支持专业版。“charge_mode”为“prePaid”时，支持标准版、专业版。
    *
    * @return int|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param int|null $version 防火墙版本，0：标准版，1：专业版，3：基础版，购买时，当防火墙“charge_mode”为“postPaid”时，仅支持专业版。“charge_mode”为“prePaid”时，支持标准版、专业版。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets eipCount
    *  eip数量
    *
    * @return int|null
    */
    public function getEipCount()
    {
        return $this->container['eipCount'];
    }

    /**
    * Sets eipCount
    *
    * @param int|null $eipCount eip数量
    *
    * @return $this
    */
    public function setEipCount($eipCount)
    {
        $this->container['eipCount'] = $eipCount;
        return $this;
    }

    /**
    * Gets vpcCount
    *  vpc数量
    *
    * @return int|null
    */
    public function getVpcCount()
    {
        return $this->container['vpcCount'];
    }

    /**
    * Sets vpcCount
    *
    * @param int|null $vpcCount vpc数量
    *
    * @return $this
    */
    public function setVpcCount($vpcCount)
    {
        $this->container['vpcCount'] = $vpcCount;
        return $this;
    }

    /**
    * Gets bandwidth
    *  带宽，单位为mbps
    *
    * @return int|null
    */
    public function getBandwidth()
    {
        return $this->container['bandwidth'];
    }

    /**
    * Sets bandwidth
    *
    * @param int|null $bandwidth 带宽，单位为mbps
    *
    * @return $this
    */
    public function setBandwidth($bandwidth)
    {
        $this->container['bandwidth'] = $bandwidth;
        return $this;
    }

    /**
    * Gets logStorage
    *  日志存储，单位为byte
    *
    * @return int|null
    */
    public function getLogStorage()
    {
        return $this->container['logStorage'];
    }

    /**
    * Sets logStorage
    *
    * @param int|null $logStorage 日志存储，单位为byte
    *
    * @return $this
    */
    public function setLogStorage($logStorage)
    {
        $this->container['logStorage'] = $logStorage;
        return $this;
    }

    /**
    * Gets defaultBandwidth
    *  默认防火墙带宽，单位为mbps，标准版为10，专业版为50，按需专业版为200
    *
    * @return int|null
    */
    public function getDefaultBandwidth()
    {
        return $this->container['defaultBandwidth'];
    }

    /**
    * Sets defaultBandwidth
    *
    * @param int|null $defaultBandwidth 默认防火墙带宽，单位为mbps，标准版为10，专业版为50，按需专业版为200
    *
    * @return $this
    */
    public function setDefaultBandwidth($defaultBandwidth)
    {
        $this->container['defaultBandwidth'] = $defaultBandwidth;
        return $this;
    }

    /**
    * Gets defaultEipCount
    *  默认eip数，标准版为20，专业版为50，按需专业版为1000
    *
    * @return int|null
    */
    public function getDefaultEipCount()
    {
        return $this->container['defaultEipCount'];
    }

    /**
    * Sets defaultEipCount
    *
    * @param int|null $defaultEipCount 默认eip数，标准版为20，专业版为50，按需专业版为1000
    *
    * @return $this
    */
    public function setDefaultEipCount($defaultEipCount)
    {
        $this->container['defaultEipCount'] = $defaultEipCount;
        return $this;
    }

    /**
    * Gets defaultLogStorage
    *  默认日志存储，单位为byte，默认为0
    *
    * @return int|null
    */
    public function getDefaultLogStorage()
    {
        return $this->container['defaultLogStorage'];
    }

    /**
    * Sets defaultLogStorage
    *
    * @param int|null $defaultLogStorage 默认日志存储，单位为byte，默认为0
    *
    * @return $this
    */
    public function setDefaultLogStorage($defaultLogStorage)
    {
        $this->container['defaultLogStorage'] = $defaultLogStorage;
        return $this;
    }

    /**
    * Gets defaultVpcCount
    *  默认vpc数，标准版为0，专业版为2，按需专业版为5
    *
    * @return int|null
    */
    public function getDefaultVpcCount()
    {
        return $this->container['defaultVpcCount'];
    }

    /**
    * Sets defaultVpcCount
    *
    * @param int|null $defaultVpcCount 默认vpc数，标准版为0，专业版为2，按需专业版为5
    *
    * @return $this
    */
    public function setDefaultVpcCount($defaultVpcCount)
    {
        $this->container['defaultVpcCount'] = $defaultVpcCount;
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

