<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateGlobalConnectionBandwidth implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateGlobalConnectionBandwidth';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  实例名字。
    * description  实例描述。不支持 <>。
    * size  功能说明：全域互联带宽实例中的带宽值大小，单位Mbit/s。 取值范围：2-300Mbit/s
    * chargeMode  功能说明：描述计费类型，描述可选计费类型。默认开放按带宽计费，传统95计费租户白名单控制。 取值范围：     bwd: 按带宽计费     95: 按传统型95计费     95avr: 按传统型日95计费
    * slaLevel  功能说明：描述网络等级，从高到低分为铂金、金、银。默认金，其余租户白名单控制。 - Pt: 铂金 - Au: 金 - Ag: 银
    * bindingService  功能说明：绑定的服务类型。实例类型： - CC: 云连接 - GEIP: 全域弹性公网IP - GCN: 中心网络 - GSN: 分支网络 - ALL: 所有实例类型
    * specCodeId  功能说明：线路规格编码UUID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'size' => 'int',
            'chargeMode' => 'string',
            'slaLevel' => 'string',
            'bindingService' => 'string',
            'specCodeId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  实例名字。
    * description  实例描述。不支持 <>。
    * size  功能说明：全域互联带宽实例中的带宽值大小，单位Mbit/s。 取值范围：2-300Mbit/s
    * chargeMode  功能说明：描述计费类型，描述可选计费类型。默认开放按带宽计费，传统95计费租户白名单控制。 取值范围：     bwd: 按带宽计费     95: 按传统型95计费     95avr: 按传统型日95计费
    * slaLevel  功能说明：描述网络等级，从高到低分为铂金、金、银。默认金，其余租户白名单控制。 - Pt: 铂金 - Au: 金 - Ag: 银
    * bindingService  功能说明：绑定的服务类型。实例类型： - CC: 云连接 - GEIP: 全域弹性公网IP - GCN: 中心网络 - GSN: 分支网络 - ALL: 所有实例类型
    * specCodeId  功能说明：线路规格编码UUID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'size' => 'int32',
        'chargeMode' => null,
        'slaLevel' => null,
        'bindingService' => null,
        'specCodeId' => null
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
    * name  实例名字。
    * description  实例描述。不支持 <>。
    * size  功能说明：全域互联带宽实例中的带宽值大小，单位Mbit/s。 取值范围：2-300Mbit/s
    * chargeMode  功能说明：描述计费类型，描述可选计费类型。默认开放按带宽计费，传统95计费租户白名单控制。 取值范围：     bwd: 按带宽计费     95: 按传统型95计费     95avr: 按传统型日95计费
    * slaLevel  功能说明：描述网络等级，从高到低分为铂金、金、银。默认金，其余租户白名单控制。 - Pt: 铂金 - Au: 金 - Ag: 银
    * bindingService  功能说明：绑定的服务类型。实例类型： - CC: 云连接 - GEIP: 全域弹性公网IP - GCN: 中心网络 - GSN: 分支网络 - ALL: 所有实例类型
    * specCodeId  功能说明：线路规格编码UUID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'size' => 'size',
            'chargeMode' => 'charge_mode',
            'slaLevel' => 'sla_level',
            'bindingService' => 'binding_service',
            'specCodeId' => 'spec_code_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  实例名字。
    * description  实例描述。不支持 <>。
    * size  功能说明：全域互联带宽实例中的带宽值大小，单位Mbit/s。 取值范围：2-300Mbit/s
    * chargeMode  功能说明：描述计费类型，描述可选计费类型。默认开放按带宽计费，传统95计费租户白名单控制。 取值范围：     bwd: 按带宽计费     95: 按传统型95计费     95avr: 按传统型日95计费
    * slaLevel  功能说明：描述网络等级，从高到低分为铂金、金、银。默认金，其余租户白名单控制。 - Pt: 铂金 - Au: 金 - Ag: 银
    * bindingService  功能说明：绑定的服务类型。实例类型： - CC: 云连接 - GEIP: 全域弹性公网IP - GCN: 中心网络 - GSN: 分支网络 - ALL: 所有实例类型
    * specCodeId  功能说明：线路规格编码UUID。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'size' => 'setSize',
            'chargeMode' => 'setChargeMode',
            'slaLevel' => 'setSlaLevel',
            'bindingService' => 'setBindingService',
            'specCodeId' => 'setSpecCodeId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  实例名字。
    * description  实例描述。不支持 <>。
    * size  功能说明：全域互联带宽实例中的带宽值大小，单位Mbit/s。 取值范围：2-300Mbit/s
    * chargeMode  功能说明：描述计费类型，描述可选计费类型。默认开放按带宽计费，传统95计费租户白名单控制。 取值范围：     bwd: 按带宽计费     95: 按传统型95计费     95avr: 按传统型日95计费
    * slaLevel  功能说明：描述网络等级，从高到低分为铂金、金、银。默认金，其余租户白名单控制。 - Pt: 铂金 - Au: 金 - Ag: 银
    * bindingService  功能说明：绑定的服务类型。实例类型： - CC: 云连接 - GEIP: 全域弹性公网IP - GCN: 中心网络 - GSN: 分支网络 - ALL: 所有实例类型
    * specCodeId  功能说明：线路规格编码UUID。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'size' => 'getSize',
            'chargeMode' => 'getChargeMode',
            'slaLevel' => 'getSlaLevel',
            'bindingService' => 'getBindingService',
            'specCodeId' => 'getSpecCodeId'
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
    const CHARGE_MODE_BWD = 'bwd';
    const CHARGE_MODE__95 = '95';
    const CHARGE_MODE__95AVR = '95avr';
    const SLA_LEVEL_PT = 'Pt';
    const SLA_LEVEL_AU = 'Au';
    const SLA_LEVEL_AG = 'Ag';
    const BINDING_SERVICE_CC = 'CC';
    const BINDING_SERVICE_GEIP = 'GEIP';
    const BINDING_SERVICE_GCN = 'GCN';
    const BINDING_SERVICE_GSN = 'GSN';
    const BINDING_SERVICE_ALL = 'ALL';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getChargeModeAllowableValues()
    {
        return [
            self::CHARGE_MODE_BWD,
            self::CHARGE_MODE__95,
            self::CHARGE_MODE__95AVR,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSlaLevelAllowableValues()
    {
        return [
            self::SLA_LEVEL_PT,
            self::SLA_LEVEL_AU,
            self::SLA_LEVEL_AG,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getBindingServiceAllowableValues()
    {
        return [
            self::BINDING_SERVICE_CC,
            self::BINDING_SERVICE_GEIP,
            self::BINDING_SERVICE_GCN,
            self::BINDING_SERVICE_GSN,
            self::BINDING_SERVICE_ALL,
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['chargeMode'] = isset($data['chargeMode']) ? $data['chargeMode'] : null;
        $this->container['slaLevel'] = isset($data['slaLevel']) ? $data['slaLevel'] : null;
        $this->container['bindingService'] = isset($data['bindingService']) ? $data['bindingService'] : null;
        $this->container['specCodeId'] = isset($data['specCodeId']) ? $data['specCodeId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && !preg_match("/^[\\u4e00-\\u9fa50-9a-zA-Z_.\\-]+$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[\\u4e00-\\u9fa50-9a-zA-Z_.\\-]+$/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && !preg_match("/^[^<>]*$/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /^[^<>]*$/.";
            }
            if (!is_null($this->container['size']) && ($this->container['size'] > 300)) {
                $invalidProperties[] = "invalid value for 'size', must be smaller than or equal to 300.";
            }
            if (!is_null($this->container['size']) && ($this->container['size'] < 2)) {
                $invalidProperties[] = "invalid value for 'size', must be bigger than or equal to 2.";
            }
            $allowedValues = $this->getChargeModeAllowableValues();
                if (!is_null($this->container['chargeMode']) && !in_array($this->container['chargeMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'chargeMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getSlaLevelAllowableValues();
                if (!is_null($this->container['slaLevel']) && !in_array($this->container['slaLevel'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'slaLevel', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['slaLevel']) && (mb_strlen($this->container['slaLevel']) > 36)) {
                $invalidProperties[] = "invalid value for 'slaLevel', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['slaLevel']) && (mb_strlen($this->container['slaLevel']) < 1)) {
                $invalidProperties[] = "invalid value for 'slaLevel', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getBindingServiceAllowableValues();
                if (!is_null($this->container['bindingService']) && !in_array($this->container['bindingService'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'bindingService', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['specCodeId']) && (mb_strlen($this->container['specCodeId']) > 36)) {
                $invalidProperties[] = "invalid value for 'specCodeId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['specCodeId']) && (mb_strlen($this->container['specCodeId']) < 1)) {
                $invalidProperties[] = "invalid value for 'specCodeId', the character length must be bigger than or equal to 1.";
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
    *  实例名字。
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
    * @param string|null $name 实例名字。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  实例描述。不支持 <>。
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
    * @param string|null $description 实例描述。不支持 <>。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets size
    *  功能说明：全域互联带宽实例中的带宽值大小，单位Mbit/s。 取值范围：2-300Mbit/s
    *
    * @return int|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int|null $size 功能说明：全域互联带宽实例中的带宽值大小，单位Mbit/s。 取值范围：2-300Mbit/s
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets chargeMode
    *  功能说明：描述计费类型，描述可选计费类型。默认开放按带宽计费，传统95计费租户白名单控制。 取值范围：     bwd: 按带宽计费     95: 按传统型95计费     95avr: 按传统型日95计费
    *
    * @return string|null
    */
    public function getChargeMode()
    {
        return $this->container['chargeMode'];
    }

    /**
    * Sets chargeMode
    *
    * @param string|null $chargeMode 功能说明：描述计费类型，描述可选计费类型。默认开放按带宽计费，传统95计费租户白名单控制。 取值范围：     bwd: 按带宽计费     95: 按传统型95计费     95avr: 按传统型日95计费
    *
    * @return $this
    */
    public function setChargeMode($chargeMode)
    {
        $this->container['chargeMode'] = $chargeMode;
        return $this;
    }

    /**
    * Gets slaLevel
    *  功能说明：描述网络等级，从高到低分为铂金、金、银。默认金，其余租户白名单控制。 - Pt: 铂金 - Au: 金 - Ag: 银
    *
    * @return string|null
    */
    public function getSlaLevel()
    {
        return $this->container['slaLevel'];
    }

    /**
    * Sets slaLevel
    *
    * @param string|null $slaLevel 功能说明：描述网络等级，从高到低分为铂金、金、银。默认金，其余租户白名单控制。 - Pt: 铂金 - Au: 金 - Ag: 银
    *
    * @return $this
    */
    public function setSlaLevel($slaLevel)
    {
        $this->container['slaLevel'] = $slaLevel;
        return $this;
    }

    /**
    * Gets bindingService
    *  功能说明：绑定的服务类型。实例类型： - CC: 云连接 - GEIP: 全域弹性公网IP - GCN: 中心网络 - GSN: 分支网络 - ALL: 所有实例类型
    *
    * @return string|null
    */
    public function getBindingService()
    {
        return $this->container['bindingService'];
    }

    /**
    * Sets bindingService
    *
    * @param string|null $bindingService 功能说明：绑定的服务类型。实例类型： - CC: 云连接 - GEIP: 全域弹性公网IP - GCN: 中心网络 - GSN: 分支网络 - ALL: 所有实例类型
    *
    * @return $this
    */
    public function setBindingService($bindingService)
    {
        $this->container['bindingService'] = $bindingService;
        return $this;
    }

    /**
    * Gets specCodeId
    *  功能说明：线路规格编码UUID。
    *
    * @return string|null
    */
    public function getSpecCodeId()
    {
        return $this->container['specCodeId'];
    }

    /**
    * Sets specCodeId
    *
    * @param string|null $specCodeId 功能说明：线路规格编码UUID。
    *
    * @return $this
    */
    public function setSpecCodeId($specCodeId)
    {
        $this->container['specCodeId'] = $specCodeId;
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

