<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OpenGaussHaOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OpenGaussHaOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * mode  GaussDB为分布式时，取值：enterprise；为集中式时，取值：centralization_standard。不区分大小写。
    * consistency  指定实例一致性类型，当创建分布式模式实例时，该字段值必传，当创建主备模式实例时，该字段值不传。取值范围：strong（强一致性） | eventual(最终一致性)，不分区大小写。
    * replicationMode  备机同步参数。  取值：  GaussDB为“sync\"  说明： - “sync”为同步模式。
    * instanceMode  指定创建实例的产品类型，创建企业版实例时传空值或者enterprise，创建基础版实例时需要指定instance_mode的值为basic，创建生态版实例时需要指定instance_mode的值为ecology。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'mode' => 'string',
            'consistency' => 'string',
            'replicationMode' => 'string',
            'instanceMode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * mode  GaussDB为分布式时，取值：enterprise；为集中式时，取值：centralization_standard。不区分大小写。
    * consistency  指定实例一致性类型，当创建分布式模式实例时，该字段值必传，当创建主备模式实例时，该字段值不传。取值范围：strong（强一致性） | eventual(最终一致性)，不分区大小写。
    * replicationMode  备机同步参数。  取值：  GaussDB为“sync\"  说明： - “sync”为同步模式。
    * instanceMode  指定创建实例的产品类型，创建企业版实例时传空值或者enterprise，创建基础版实例时需要指定instance_mode的值为basic，创建生态版实例时需要指定instance_mode的值为ecology。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'mode' => null,
        'consistency' => null,
        'replicationMode' => null,
        'instanceMode' => null
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
    * mode  GaussDB为分布式时，取值：enterprise；为集中式时，取值：centralization_standard。不区分大小写。
    * consistency  指定实例一致性类型，当创建分布式模式实例时，该字段值必传，当创建主备模式实例时，该字段值不传。取值范围：strong（强一致性） | eventual(最终一致性)，不分区大小写。
    * replicationMode  备机同步参数。  取值：  GaussDB为“sync\"  说明： - “sync”为同步模式。
    * instanceMode  指定创建实例的产品类型，创建企业版实例时传空值或者enterprise，创建基础版实例时需要指定instance_mode的值为basic，创建生态版实例时需要指定instance_mode的值为ecology。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'mode' => 'mode',
            'consistency' => 'consistency',
            'replicationMode' => 'replication_mode',
            'instanceMode' => 'instance_mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * mode  GaussDB为分布式时，取值：enterprise；为集中式时，取值：centralization_standard。不区分大小写。
    * consistency  指定实例一致性类型，当创建分布式模式实例时，该字段值必传，当创建主备模式实例时，该字段值不传。取值范围：strong（强一致性） | eventual(最终一致性)，不分区大小写。
    * replicationMode  备机同步参数。  取值：  GaussDB为“sync\"  说明： - “sync”为同步模式。
    * instanceMode  指定创建实例的产品类型，创建企业版实例时传空值或者enterprise，创建基础版实例时需要指定instance_mode的值为basic，创建生态版实例时需要指定instance_mode的值为ecology。
    *
    * @var string[]
    */
    protected static $setters = [
            'mode' => 'setMode',
            'consistency' => 'setConsistency',
            'replicationMode' => 'setReplicationMode',
            'instanceMode' => 'setInstanceMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * mode  GaussDB为分布式时，取值：enterprise；为集中式时，取值：centralization_standard。不区分大小写。
    * consistency  指定实例一致性类型，当创建分布式模式实例时，该字段值必传，当创建主备模式实例时，该字段值不传。取值范围：strong（强一致性） | eventual(最终一致性)，不分区大小写。
    * replicationMode  备机同步参数。  取值：  GaussDB为“sync\"  说明： - “sync”为同步模式。
    * instanceMode  指定创建实例的产品类型，创建企业版实例时传空值或者enterprise，创建基础版实例时需要指定instance_mode的值为basic，创建生态版实例时需要指定instance_mode的值为ecology。
    *
    * @var string[]
    */
    protected static $getters = [
            'mode' => 'getMode',
            'consistency' => 'getConsistency',
            'replicationMode' => 'getReplicationMode',
            'instanceMode' => 'getInstanceMode'
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
    const MODE_ENTERPRISE = 'enterprise';
    const MODE_CENTRALIZATION_STANDARD = 'centralization_standard';
    const CONSISTENCY_STRONG = 'strong';
    const CONSISTENCY_EVENTUAL = 'eventual';
    const REPLICATION_MODE_SYNC = 'sync';
    const INSTANCE_MODE_ENTERPRISE = 'enterprise';
    const INSTANCE_MODE_BASIC = 'basic';
    const INSTANCE_MODE_ECOLOGY = 'ecology';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getModeAllowableValues()
    {
        return [
            self::MODE_ENTERPRISE,
            self::MODE_CENTRALIZATION_STANDARD,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getConsistencyAllowableValues()
    {
        return [
            self::CONSISTENCY_STRONG,
            self::CONSISTENCY_EVENTUAL,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getReplicationModeAllowableValues()
    {
        return [
            self::REPLICATION_MODE_SYNC,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getInstanceModeAllowableValues()
    {
        return [
            self::INSTANCE_MODE_ENTERPRISE,
            self::INSTANCE_MODE_BASIC,
            self::INSTANCE_MODE_ECOLOGY,
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
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['consistency'] = isset($data['consistency']) ? $data['consistency'] : null;
        $this->container['replicationMode'] = isset($data['replicationMode']) ? $data['replicationMode'] : null;
        $this->container['instanceMode'] = isset($data['instanceMode']) ? $data['instanceMode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['mode'] === null) {
            $invalidProperties[] = "'mode' can't be null";
        }
            $allowedValues = $this->getModeAllowableValues();
                if (!is_null($this->container['mode']) && !in_array($this->container['mode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'mode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['consistency'] === null) {
            $invalidProperties[] = "'consistency' can't be null";
        }
            $allowedValues = $this->getConsistencyAllowableValues();
                if (!is_null($this->container['consistency']) && !in_array($this->container['consistency'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'consistency', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['replicationMode'] === null) {
            $invalidProperties[] = "'replicationMode' can't be null";
        }
            $allowedValues = $this->getReplicationModeAllowableValues();
                if (!is_null($this->container['replicationMode']) && !in_array($this->container['replicationMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'replicationMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getInstanceModeAllowableValues();
                if (!is_null($this->container['instanceMode']) && !in_array($this->container['instanceMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'instanceMode', must be one of '%s'",
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
    * Gets mode
    *  GaussDB为分布式时，取值：enterprise；为集中式时，取值：centralization_standard。不区分大小写。
    *
    * @return string
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param string $mode GaussDB为分布式时，取值：enterprise；为集中式时，取值：centralization_standard。不区分大小写。
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
        return $this;
    }

    /**
    * Gets consistency
    *  指定实例一致性类型，当创建分布式模式实例时，该字段值必传，当创建主备模式实例时，该字段值不传。取值范围：strong（强一致性） | eventual(最终一致性)，不分区大小写。
    *
    * @return string
    */
    public function getConsistency()
    {
        return $this->container['consistency'];
    }

    /**
    * Sets consistency
    *
    * @param string $consistency 指定实例一致性类型，当创建分布式模式实例时，该字段值必传，当创建主备模式实例时，该字段值不传。取值范围：strong（强一致性） | eventual(最终一致性)，不分区大小写。
    *
    * @return $this
    */
    public function setConsistency($consistency)
    {
        $this->container['consistency'] = $consistency;
        return $this;
    }

    /**
    * Gets replicationMode
    *  备机同步参数。  取值：  GaussDB为“sync\"  说明： - “sync”为同步模式。
    *
    * @return string
    */
    public function getReplicationMode()
    {
        return $this->container['replicationMode'];
    }

    /**
    * Sets replicationMode
    *
    * @param string $replicationMode 备机同步参数。  取值：  GaussDB为“sync\"  说明： - “sync”为同步模式。
    *
    * @return $this
    */
    public function setReplicationMode($replicationMode)
    {
        $this->container['replicationMode'] = $replicationMode;
        return $this;
    }

    /**
    * Gets instanceMode
    *  指定创建实例的产品类型，创建企业版实例时传空值或者enterprise，创建基础版实例时需要指定instance_mode的值为basic，创建生态版实例时需要指定instance_mode的值为ecology。
    *
    * @return string|null
    */
    public function getInstanceMode()
    {
        return $this->container['instanceMode'];
    }

    /**
    * Sets instanceMode
    *
    * @param string|null $instanceMode 指定创建实例的产品类型，创建企业版实例时传空值或者enterprise，创建基础版实例时需要指定instance_mode的值为basic，创建生态版实例时需要指定instance_mode的值为ecology。
    *
    * @return $this
    */
    public function setInstanceMode($instanceMode)
    {
        $this->container['instanceMode'] = $instanceMode;
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

