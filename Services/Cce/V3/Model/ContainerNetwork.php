<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ContainerNetwork implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ContainerNetwork';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * mode  容器网络类型（只可选择其一） - overlay_l2：容器隧道网络，通过OVS（OpenVSwitch）为容器构建的overlay_l2网络。 - vpc-router：VPC网络，使用ipvlan和自定义VPC路由为容器构建的Underlay的l2网络。 [- eni：云原生网络2.0，深度整合VPC原生ENI弹性网卡能力，采用VPC网段分配容器地址，支持ELB直通容器，享有高性能，创建CCE Turbo集群时指定。](tag:hws,hws_hk,dt,hcs,g42,sbc)
    * cidr  容器网络网段，建议使用网段10.0.0.0/12~19，172.16.0.0/16~19，192.168.0.0/16~19，如存在网段冲突，将会报错。  此参数在集群创建后不可更改，请谨慎选择。（已废弃，如填写cidrs将忽略该cidr）
    * cidrs  容器网络网段列表。1.21及新版本集群使用cidrs字段，当集群网络类型为vpc-router类型时，支持多个容器网段，最多配置20个；1.21之前版本若使用cidrs字段，则取值cidrs数组中的第一个cidr元素作为容器网络网段地址。  此参数在集群创建后不可更改，请谨慎选择。
    * enableContainerCidRsReservation  **参数解释**： VPC容器网段预留。在VPC的默认路由表中添加容器网段路由，避免创建与容器网段冲突的子网。支持的集群版本如下： - v1.28.15-r70及以上版本 - v1.29.15-r30及以上版本 - v1.30.14-r30及以上版本 - v1.31.10-r30及以上版本 - v1.32.6-r30及以上版本 - v1.33.5-r20及以上版本  **约束限制**： 仅支持VPC网络模型集群。不支持集群设置不生效。 **取值范围**： - false：不开启VPC容器网段预留 - true：开启VPC容器网段预留  **默认取值**： false
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'mode' => 'string',
            'cidr' => 'string',
            'cidrs' => '\HuaweiCloud\SDK\Cce\V3\Model\ContainerCIDR[]',
            'enableContainerCidRsReservation' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * mode  容器网络类型（只可选择其一） - overlay_l2：容器隧道网络，通过OVS（OpenVSwitch）为容器构建的overlay_l2网络。 - vpc-router：VPC网络，使用ipvlan和自定义VPC路由为容器构建的Underlay的l2网络。 [- eni：云原生网络2.0，深度整合VPC原生ENI弹性网卡能力，采用VPC网段分配容器地址，支持ELB直通容器，享有高性能，创建CCE Turbo集群时指定。](tag:hws,hws_hk,dt,hcs,g42,sbc)
    * cidr  容器网络网段，建议使用网段10.0.0.0/12~19，172.16.0.0/16~19，192.168.0.0/16~19，如存在网段冲突，将会报错。  此参数在集群创建后不可更改，请谨慎选择。（已废弃，如填写cidrs将忽略该cidr）
    * cidrs  容器网络网段列表。1.21及新版本集群使用cidrs字段，当集群网络类型为vpc-router类型时，支持多个容器网段，最多配置20个；1.21之前版本若使用cidrs字段，则取值cidrs数组中的第一个cidr元素作为容器网络网段地址。  此参数在集群创建后不可更改，请谨慎选择。
    * enableContainerCidRsReservation  **参数解释**： VPC容器网段预留。在VPC的默认路由表中添加容器网段路由，避免创建与容器网段冲突的子网。支持的集群版本如下： - v1.28.15-r70及以上版本 - v1.29.15-r30及以上版本 - v1.30.14-r30及以上版本 - v1.31.10-r30及以上版本 - v1.32.6-r30及以上版本 - v1.33.5-r20及以上版本  **约束限制**： 仅支持VPC网络模型集群。不支持集群设置不生效。 **取值范围**： - false：不开启VPC容器网段预留 - true：开启VPC容器网段预留  **默认取值**： false
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'mode' => null,
        'cidr' => null,
        'cidrs' => null,
        'enableContainerCidRsReservation' => null
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
    * mode  容器网络类型（只可选择其一） - overlay_l2：容器隧道网络，通过OVS（OpenVSwitch）为容器构建的overlay_l2网络。 - vpc-router：VPC网络，使用ipvlan和自定义VPC路由为容器构建的Underlay的l2网络。 [- eni：云原生网络2.0，深度整合VPC原生ENI弹性网卡能力，采用VPC网段分配容器地址，支持ELB直通容器，享有高性能，创建CCE Turbo集群时指定。](tag:hws,hws_hk,dt,hcs,g42,sbc)
    * cidr  容器网络网段，建议使用网段10.0.0.0/12~19，172.16.0.0/16~19，192.168.0.0/16~19，如存在网段冲突，将会报错。  此参数在集群创建后不可更改，请谨慎选择。（已废弃，如填写cidrs将忽略该cidr）
    * cidrs  容器网络网段列表。1.21及新版本集群使用cidrs字段，当集群网络类型为vpc-router类型时，支持多个容器网段，最多配置20个；1.21之前版本若使用cidrs字段，则取值cidrs数组中的第一个cidr元素作为容器网络网段地址。  此参数在集群创建后不可更改，请谨慎选择。
    * enableContainerCidRsReservation  **参数解释**： VPC容器网段预留。在VPC的默认路由表中添加容器网段路由，避免创建与容器网段冲突的子网。支持的集群版本如下： - v1.28.15-r70及以上版本 - v1.29.15-r30及以上版本 - v1.30.14-r30及以上版本 - v1.31.10-r30及以上版本 - v1.32.6-r30及以上版本 - v1.33.5-r20及以上版本  **约束限制**： 仅支持VPC网络模型集群。不支持集群设置不生效。 **取值范围**： - false：不开启VPC容器网段预留 - true：开启VPC容器网段预留  **默认取值**： false
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'mode' => 'mode',
            'cidr' => 'cidr',
            'cidrs' => 'cidrs',
            'enableContainerCidRsReservation' => 'enableContainerCIDRsReservation'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * mode  容器网络类型（只可选择其一） - overlay_l2：容器隧道网络，通过OVS（OpenVSwitch）为容器构建的overlay_l2网络。 - vpc-router：VPC网络，使用ipvlan和自定义VPC路由为容器构建的Underlay的l2网络。 [- eni：云原生网络2.0，深度整合VPC原生ENI弹性网卡能力，采用VPC网段分配容器地址，支持ELB直通容器，享有高性能，创建CCE Turbo集群时指定。](tag:hws,hws_hk,dt,hcs,g42,sbc)
    * cidr  容器网络网段，建议使用网段10.0.0.0/12~19，172.16.0.0/16~19，192.168.0.0/16~19，如存在网段冲突，将会报错。  此参数在集群创建后不可更改，请谨慎选择。（已废弃，如填写cidrs将忽略该cidr）
    * cidrs  容器网络网段列表。1.21及新版本集群使用cidrs字段，当集群网络类型为vpc-router类型时，支持多个容器网段，最多配置20个；1.21之前版本若使用cidrs字段，则取值cidrs数组中的第一个cidr元素作为容器网络网段地址。  此参数在集群创建后不可更改，请谨慎选择。
    * enableContainerCidRsReservation  **参数解释**： VPC容器网段预留。在VPC的默认路由表中添加容器网段路由，避免创建与容器网段冲突的子网。支持的集群版本如下： - v1.28.15-r70及以上版本 - v1.29.15-r30及以上版本 - v1.30.14-r30及以上版本 - v1.31.10-r30及以上版本 - v1.32.6-r30及以上版本 - v1.33.5-r20及以上版本  **约束限制**： 仅支持VPC网络模型集群。不支持集群设置不生效。 **取值范围**： - false：不开启VPC容器网段预留 - true：开启VPC容器网段预留  **默认取值**： false
    *
    * @var string[]
    */
    protected static $setters = [
            'mode' => 'setMode',
            'cidr' => 'setCidr',
            'cidrs' => 'setCidrs',
            'enableContainerCidRsReservation' => 'setEnableContainerCidRsReservation'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * mode  容器网络类型（只可选择其一） - overlay_l2：容器隧道网络，通过OVS（OpenVSwitch）为容器构建的overlay_l2网络。 - vpc-router：VPC网络，使用ipvlan和自定义VPC路由为容器构建的Underlay的l2网络。 [- eni：云原生网络2.0，深度整合VPC原生ENI弹性网卡能力，采用VPC网段分配容器地址，支持ELB直通容器，享有高性能，创建CCE Turbo集群时指定。](tag:hws,hws_hk,dt,hcs,g42,sbc)
    * cidr  容器网络网段，建议使用网段10.0.0.0/12~19，172.16.0.0/16~19，192.168.0.0/16~19，如存在网段冲突，将会报错。  此参数在集群创建后不可更改，请谨慎选择。（已废弃，如填写cidrs将忽略该cidr）
    * cidrs  容器网络网段列表。1.21及新版本集群使用cidrs字段，当集群网络类型为vpc-router类型时，支持多个容器网段，最多配置20个；1.21之前版本若使用cidrs字段，则取值cidrs数组中的第一个cidr元素作为容器网络网段地址。  此参数在集群创建后不可更改，请谨慎选择。
    * enableContainerCidRsReservation  **参数解释**： VPC容器网段预留。在VPC的默认路由表中添加容器网段路由，避免创建与容器网段冲突的子网。支持的集群版本如下： - v1.28.15-r70及以上版本 - v1.29.15-r30及以上版本 - v1.30.14-r30及以上版本 - v1.31.10-r30及以上版本 - v1.32.6-r30及以上版本 - v1.33.5-r20及以上版本  **约束限制**： 仅支持VPC网络模型集群。不支持集群设置不生效。 **取值范围**： - false：不开启VPC容器网段预留 - true：开启VPC容器网段预留  **默认取值**： false
    *
    * @var string[]
    */
    protected static $getters = [
            'mode' => 'getMode',
            'cidr' => 'getCidr',
            'cidrs' => 'getCidrs',
            'enableContainerCidRsReservation' => 'getEnableContainerCidRsReservation'
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
    const MODE_OVERLAY_L2 = 'overlay_l2';
    const MODE_VPC_ROUTER = 'vpc-router';
    const MODE_ENI = 'eni';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getModeAllowableValues()
    {
        return [
            self::MODE_OVERLAY_L2,
            self::MODE_VPC_ROUTER,
            self::MODE_ENI,
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
        $this->container['cidr'] = isset($data['cidr']) ? $data['cidr'] : null;
        $this->container['cidrs'] = isset($data['cidrs']) ? $data['cidrs'] : null;
        $this->container['enableContainerCidRsReservation'] = isset($data['enableContainerCidRsReservation']) ? $data['enableContainerCidRsReservation'] : null;
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

            if ((mb_strlen($this->container['mode']) > 64)) {
                $invalidProperties[] = "invalid value for 'mode', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['mode']) < 0)) {
                $invalidProperties[] = "invalid value for 'mode', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['cidr']) && (mb_strlen($this->container['cidr']) > 64)) {
                $invalidProperties[] = "invalid value for 'cidr', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['cidr']) && (mb_strlen($this->container['cidr']) < 0)) {
                $invalidProperties[] = "invalid value for 'cidr', the character length must be bigger than or equal to 0.";
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
    *  容器网络类型（只可选择其一） - overlay_l2：容器隧道网络，通过OVS（OpenVSwitch）为容器构建的overlay_l2网络。 - vpc-router：VPC网络，使用ipvlan和自定义VPC路由为容器构建的Underlay的l2网络。 [- eni：云原生网络2.0，深度整合VPC原生ENI弹性网卡能力，采用VPC网段分配容器地址，支持ELB直通容器，享有高性能，创建CCE Turbo集群时指定。](tag:hws,hws_hk,dt,hcs,g42,sbc)
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
    * @param string $mode 容器网络类型（只可选择其一） - overlay_l2：容器隧道网络，通过OVS（OpenVSwitch）为容器构建的overlay_l2网络。 - vpc-router：VPC网络，使用ipvlan和自定义VPC路由为容器构建的Underlay的l2网络。 [- eni：云原生网络2.0，深度整合VPC原生ENI弹性网卡能力，采用VPC网段分配容器地址，支持ELB直通容器，享有高性能，创建CCE Turbo集群时指定。](tag:hws,hws_hk,dt,hcs,g42,sbc)
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
        return $this;
    }

    /**
    * Gets cidr
    *  容器网络网段，建议使用网段10.0.0.0/12~19，172.16.0.0/16~19，192.168.0.0/16~19，如存在网段冲突，将会报错。  此参数在集群创建后不可更改，请谨慎选择。（已废弃，如填写cidrs将忽略该cidr）
    *
    * @return string|null
    */
    public function getCidr()
    {
        return $this->container['cidr'];
    }

    /**
    * Sets cidr
    *
    * @param string|null $cidr 容器网络网段，建议使用网段10.0.0.0/12~19，172.16.0.0/16~19，192.168.0.0/16~19，如存在网段冲突，将会报错。  此参数在集群创建后不可更改，请谨慎选择。（已废弃，如填写cidrs将忽略该cidr）
    *
    * @return $this
    */
    public function setCidr($cidr)
    {
        $this->container['cidr'] = $cidr;
        return $this;
    }

    /**
    * Gets cidrs
    *  容器网络网段列表。1.21及新版本集群使用cidrs字段，当集群网络类型为vpc-router类型时，支持多个容器网段，最多配置20个；1.21之前版本若使用cidrs字段，则取值cidrs数组中的第一个cidr元素作为容器网络网段地址。  此参数在集群创建后不可更改，请谨慎选择。
    *
    * @return \HuaweiCloud\SDK\Cce\V3\Model\ContainerCIDR[]|null
    */
    public function getCidrs()
    {
        return $this->container['cidrs'];
    }

    /**
    * Sets cidrs
    *
    * @param \HuaweiCloud\SDK\Cce\V3\Model\ContainerCIDR[]|null $cidrs 容器网络网段列表。1.21及新版本集群使用cidrs字段，当集群网络类型为vpc-router类型时，支持多个容器网段，最多配置20个；1.21之前版本若使用cidrs字段，则取值cidrs数组中的第一个cidr元素作为容器网络网段地址。  此参数在集群创建后不可更改，请谨慎选择。
    *
    * @return $this
    */
    public function setCidrs($cidrs)
    {
        $this->container['cidrs'] = $cidrs;
        return $this;
    }

    /**
    * Gets enableContainerCidRsReservation
    *  **参数解释**： VPC容器网段预留。在VPC的默认路由表中添加容器网段路由，避免创建与容器网段冲突的子网。支持的集群版本如下： - v1.28.15-r70及以上版本 - v1.29.15-r30及以上版本 - v1.30.14-r30及以上版本 - v1.31.10-r30及以上版本 - v1.32.6-r30及以上版本 - v1.33.5-r20及以上版本  **约束限制**： 仅支持VPC网络模型集群。不支持集群设置不生效。 **取值范围**： - false：不开启VPC容器网段预留 - true：开启VPC容器网段预留  **默认取值**： false
    *
    * @return bool|null
    */
    public function getEnableContainerCidRsReservation()
    {
        return $this->container['enableContainerCidRsReservation'];
    }

    /**
    * Sets enableContainerCidRsReservation
    *
    * @param bool|null $enableContainerCidRsReservation **参数解释**： VPC容器网段预留。在VPC的默认路由表中添加容器网段路由，避免创建与容器网段冲突的子网。支持的集群版本如下： - v1.28.15-r70及以上版本 - v1.29.15-r30及以上版本 - v1.30.14-r30及以上版本 - v1.31.10-r30及以上版本 - v1.32.6-r30及以上版本 - v1.33.5-r20及以上版本  **约束限制**： 仅支持VPC网络模型集群。不支持集群设置不生效。 **取值范围**： - false：不开启VPC容器网段预留 - true：开启VPC容器网段预留  **默认取值**： false
    *
    * @return $this
    */
    public function setEnableContainerCidRsReservation($enableContainerCidRsReservation)
    {
        $this->container['enableContainerCidRsReservation'] = $enableContainerCidRsReservation;
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

