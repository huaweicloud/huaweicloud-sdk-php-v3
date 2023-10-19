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
    * version  防火墙版本，0：标准版，1：专业版，2：铂金版，3：基础版
    * eipCount  eip数量
    * vpcCount  vpc数量
    * bandwidth  带宽
    * logStorage  日志存储
    * sessionConcurrent  目前的会话数
    * sessionCreate  创建会话数
    * totalRuleCount  总计规则数
    * usedRuleCount  已使用规则数
    * vpcBandwith  vpc间带宽
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'version' => 'int',
            'eipCount' => 'int',
            'vpcCount' => 'int',
            'bandwidth' => 'int',
            'logStorage' => 'int',
            'sessionConcurrent' => 'int',
            'sessionCreate' => 'int',
            'totalRuleCount' => 'int',
            'usedRuleCount' => 'int',
            'vpcBandwith' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * version  防火墙版本，0：标准版，1：专业版，2：铂金版，3：基础版
    * eipCount  eip数量
    * vpcCount  vpc数量
    * bandwidth  带宽
    * logStorage  日志存储
    * sessionConcurrent  目前的会话数
    * sessionCreate  创建会话数
    * totalRuleCount  总计规则数
    * usedRuleCount  已使用规则数
    * vpcBandwith  vpc间带宽
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'version' => 'int32',
        'eipCount' => 'int32',
        'vpcCount' => 'int32',
        'bandwidth' => 'int32',
        'logStorage' => 'int32',
        'sessionConcurrent' => 'int32',
        'sessionCreate' => 'int32',
        'totalRuleCount' => null,
        'usedRuleCount' => null,
        'vpcBandwith' => null
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
    * version  防火墙版本，0：标准版，1：专业版，2：铂金版，3：基础版
    * eipCount  eip数量
    * vpcCount  vpc数量
    * bandwidth  带宽
    * logStorage  日志存储
    * sessionConcurrent  目前的会话数
    * sessionCreate  创建会话数
    * totalRuleCount  总计规则数
    * usedRuleCount  已使用规则数
    * vpcBandwith  vpc间带宽
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'version' => 'version',
            'eipCount' => 'eip_count',
            'vpcCount' => 'vpc_count',
            'bandwidth' => 'bandwidth',
            'logStorage' => 'log_storage',
            'sessionConcurrent' => 'session_concurrent',
            'sessionCreate' => 'session_create',
            'totalRuleCount' => 'total_rule_count',
            'usedRuleCount' => 'used_rule_count',
            'vpcBandwith' => 'vpc_bandwith'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * version  防火墙版本，0：标准版，1：专业版，2：铂金版，3：基础版
    * eipCount  eip数量
    * vpcCount  vpc数量
    * bandwidth  带宽
    * logStorage  日志存储
    * sessionConcurrent  目前的会话数
    * sessionCreate  创建会话数
    * totalRuleCount  总计规则数
    * usedRuleCount  已使用规则数
    * vpcBandwith  vpc间带宽
    *
    * @var string[]
    */
    protected static $setters = [
            'version' => 'setVersion',
            'eipCount' => 'setEipCount',
            'vpcCount' => 'setVpcCount',
            'bandwidth' => 'setBandwidth',
            'logStorage' => 'setLogStorage',
            'sessionConcurrent' => 'setSessionConcurrent',
            'sessionCreate' => 'setSessionCreate',
            'totalRuleCount' => 'setTotalRuleCount',
            'usedRuleCount' => 'setUsedRuleCount',
            'vpcBandwith' => 'setVpcBandwith'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * version  防火墙版本，0：标准版，1：专业版，2：铂金版，3：基础版
    * eipCount  eip数量
    * vpcCount  vpc数量
    * bandwidth  带宽
    * logStorage  日志存储
    * sessionConcurrent  目前的会话数
    * sessionCreate  创建会话数
    * totalRuleCount  总计规则数
    * usedRuleCount  已使用规则数
    * vpcBandwith  vpc间带宽
    *
    * @var string[]
    */
    protected static $getters = [
            'version' => 'getVersion',
            'eipCount' => 'getEipCount',
            'vpcCount' => 'getVpcCount',
            'bandwidth' => 'getBandwidth',
            'logStorage' => 'getLogStorage',
            'sessionConcurrent' => 'getSessionConcurrent',
            'sessionCreate' => 'getSessionCreate',
            'totalRuleCount' => 'getTotalRuleCount',
            'usedRuleCount' => 'getUsedRuleCount',
            'vpcBandwith' => 'getVpcBandwith'
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
        $this->container['sessionConcurrent'] = isset($data['sessionConcurrent']) ? $data['sessionConcurrent'] : null;
        $this->container['sessionCreate'] = isset($data['sessionCreate']) ? $data['sessionCreate'] : null;
        $this->container['totalRuleCount'] = isset($data['totalRuleCount']) ? $data['totalRuleCount'] : null;
        $this->container['usedRuleCount'] = isset($data['usedRuleCount']) ? $data['usedRuleCount'] : null;
        $this->container['vpcBandwith'] = isset($data['vpcBandwith']) ? $data['vpcBandwith'] : null;
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
    *  防火墙版本，0：标准版，1：专业版，2：铂金版，3：基础版
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
    * @param int|null $version 防火墙版本，0：标准版，1：专业版，2：铂金版，3：基础版
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
    *  带宽
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
    * @param int|null $bandwidth 带宽
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
    *  日志存储
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
    * @param int|null $logStorage 日志存储
    *
    * @return $this
    */
    public function setLogStorage($logStorage)
    {
        $this->container['logStorage'] = $logStorage;
        return $this;
    }

    /**
    * Gets sessionConcurrent
    *  目前的会话数
    *
    * @return int|null
    */
    public function getSessionConcurrent()
    {
        return $this->container['sessionConcurrent'];
    }

    /**
    * Sets sessionConcurrent
    *
    * @param int|null $sessionConcurrent 目前的会话数
    *
    * @return $this
    */
    public function setSessionConcurrent($sessionConcurrent)
    {
        $this->container['sessionConcurrent'] = $sessionConcurrent;
        return $this;
    }

    /**
    * Gets sessionCreate
    *  创建会话数
    *
    * @return int|null
    */
    public function getSessionCreate()
    {
        return $this->container['sessionCreate'];
    }

    /**
    * Sets sessionCreate
    *
    * @param int|null $sessionCreate 创建会话数
    *
    * @return $this
    */
    public function setSessionCreate($sessionCreate)
    {
        $this->container['sessionCreate'] = $sessionCreate;
        return $this;
    }

    /**
    * Gets totalRuleCount
    *  总计规则数
    *
    * @return int|null
    */
    public function getTotalRuleCount()
    {
        return $this->container['totalRuleCount'];
    }

    /**
    * Sets totalRuleCount
    *
    * @param int|null $totalRuleCount 总计规则数
    *
    * @return $this
    */
    public function setTotalRuleCount($totalRuleCount)
    {
        $this->container['totalRuleCount'] = $totalRuleCount;
        return $this;
    }

    /**
    * Gets usedRuleCount
    *  已使用规则数
    *
    * @return int|null
    */
    public function getUsedRuleCount()
    {
        return $this->container['usedRuleCount'];
    }

    /**
    * Sets usedRuleCount
    *
    * @param int|null $usedRuleCount 已使用规则数
    *
    * @return $this
    */
    public function setUsedRuleCount($usedRuleCount)
    {
        $this->container['usedRuleCount'] = $usedRuleCount;
        return $this;
    }

    /**
    * Gets vpcBandwith
    *  vpc间带宽
    *
    * @return int|null
    */
    public function getVpcBandwith()
    {
        return $this->container['vpcBandwith'];
    }

    /**
    * Sets vpcBandwith
    *
    * @param int|null $vpcBandwith vpc间带宽
    *
    * @return $this
    */
    public function setVpcBandwith($vpcBandwith)
    {
        $this->container['vpcBandwith'] = $vpcBandwith;
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

