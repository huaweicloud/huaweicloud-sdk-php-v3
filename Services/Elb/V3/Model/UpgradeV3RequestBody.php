<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpgradeV3RequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpgradeV3RequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * action  升级操作： - start：开始升级，仅负载均衡器的provisioning_status为ACTIVE时支持。 - complete：升级完成确认，仅实例的provision_status为UPGRADED时支持。确认后，实例无法再执行回退。 - rollback：回滚，仅实例的provision_status为UPGRADED,UPGRADE_FAILED,ROLLBACK_FAILED时支持。
    * l4FlavorId  四层规格ID。仅action为start时生效。 负载均衡器有四层监听器时该字段必须指定。 l4_flavor_id和l7_flavor_id不能同时为空。
    * l7FlavorId  七层规格ID。仅action为start时生效。 负载均衡器有七层监听器时该字段必须指定。 l4_flavor_id和l7_flavor_id不能同时为空。
    * availabilityZoneList  可用区列表。仅在action为start时生效。且action为start时，该字段必传 可通过GET https://{ELB_Endpoint}/v3/{project_id}/elb/availability-zones 接口来查询可用区集合列表。创建负载均衡器时，从查询结果选择某一个可用区集合，并从中选择一个或多个可用区。
    * ipv6VipVirsubnetId  双栈类型负载均衡器所在子网的IPv6网络ID。 若实例升级到独享型后期望使用IPv6功能，则升级时该字段必传。  可以通过GET https://{VPC_Endpoint}/v1/{project_id}/subnets 响应参数中的id得到。  使用说明： ipv6_vip_virsubnet_id需要属于原共享型实例所属VPC。 ipv6_vip_virsubnet_id所属子网需要开启IPv6。  [不支持IPv6，请勿使用。](tag:dt)
    * ipv6VipAddress  负载均衡器的IPv6虚拟IP。该地址必须包含在所在子网的IPv6网段内，且未被占用。  使用说明：  传入ipv6_vip_address时必须传入ipv6_vip_virsubnet_id。 不传入ipv6_vip_address，但传入ipv6_vip_virsubnet_id，则自动分配IPv6虚拟IP。 不传入ipv6_vip_address，且不传ipv6_vip_virsubnet_id，则不分配虚拟IP，ipv6_vip_address=null。  [不支持IPv6，请勿使用。](tag:dt)
    * elbVirsubnetIds  下联面子网的网络ID列表。仅action为start时生效。 可以通过GET https://{VPC_Endpoint}/v1/{project_id}/subnets 响应参数中的neutron_network_id得到。  若不指定该字段，则选择vip_subnet_cidr_id子网对应的网络ID。  下联面子网必须属于该LB所在的VPC。
    * prepaidOptions  prepaidOptions
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'action' => 'string',
            'l4FlavorId' => 'string',
            'l7FlavorId' => 'string',
            'availabilityZoneList' => 'string[]',
            'ipv6VipVirsubnetId' => 'string',
            'ipv6VipAddress' => 'string',
            'elbVirsubnetIds' => 'string[]',
            'prepaidOptions' => '\HuaweiCloud\SDK\Elb\V3\Model\UpgradePrepaidOption'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * action  升级操作： - start：开始升级，仅负载均衡器的provisioning_status为ACTIVE时支持。 - complete：升级完成确认，仅实例的provision_status为UPGRADED时支持。确认后，实例无法再执行回退。 - rollback：回滚，仅实例的provision_status为UPGRADED,UPGRADE_FAILED,ROLLBACK_FAILED时支持。
    * l4FlavorId  四层规格ID。仅action为start时生效。 负载均衡器有四层监听器时该字段必须指定。 l4_flavor_id和l7_flavor_id不能同时为空。
    * l7FlavorId  七层规格ID。仅action为start时生效。 负载均衡器有七层监听器时该字段必须指定。 l4_flavor_id和l7_flavor_id不能同时为空。
    * availabilityZoneList  可用区列表。仅在action为start时生效。且action为start时，该字段必传 可通过GET https://{ELB_Endpoint}/v3/{project_id}/elb/availability-zones 接口来查询可用区集合列表。创建负载均衡器时，从查询结果选择某一个可用区集合，并从中选择一个或多个可用区。
    * ipv6VipVirsubnetId  双栈类型负载均衡器所在子网的IPv6网络ID。 若实例升级到独享型后期望使用IPv6功能，则升级时该字段必传。  可以通过GET https://{VPC_Endpoint}/v1/{project_id}/subnets 响应参数中的id得到。  使用说明： ipv6_vip_virsubnet_id需要属于原共享型实例所属VPC。 ipv6_vip_virsubnet_id所属子网需要开启IPv6。  [不支持IPv6，请勿使用。](tag:dt)
    * ipv6VipAddress  负载均衡器的IPv6虚拟IP。该地址必须包含在所在子网的IPv6网段内，且未被占用。  使用说明：  传入ipv6_vip_address时必须传入ipv6_vip_virsubnet_id。 不传入ipv6_vip_address，但传入ipv6_vip_virsubnet_id，则自动分配IPv6虚拟IP。 不传入ipv6_vip_address，且不传ipv6_vip_virsubnet_id，则不分配虚拟IP，ipv6_vip_address=null。  [不支持IPv6，请勿使用。](tag:dt)
    * elbVirsubnetIds  下联面子网的网络ID列表。仅action为start时生效。 可以通过GET https://{VPC_Endpoint}/v1/{project_id}/subnets 响应参数中的neutron_network_id得到。  若不指定该字段，则选择vip_subnet_cidr_id子网对应的网络ID。  下联面子网必须属于该LB所在的VPC。
    * prepaidOptions  prepaidOptions
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'action' => null,
        'l4FlavorId' => null,
        'l7FlavorId' => null,
        'availabilityZoneList' => null,
        'ipv6VipVirsubnetId' => null,
        'ipv6VipAddress' => null,
        'elbVirsubnetIds' => null,
        'prepaidOptions' => null
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
    * action  升级操作： - start：开始升级，仅负载均衡器的provisioning_status为ACTIVE时支持。 - complete：升级完成确认，仅实例的provision_status为UPGRADED时支持。确认后，实例无法再执行回退。 - rollback：回滚，仅实例的provision_status为UPGRADED,UPGRADE_FAILED,ROLLBACK_FAILED时支持。
    * l4FlavorId  四层规格ID。仅action为start时生效。 负载均衡器有四层监听器时该字段必须指定。 l4_flavor_id和l7_flavor_id不能同时为空。
    * l7FlavorId  七层规格ID。仅action为start时生效。 负载均衡器有七层监听器时该字段必须指定。 l4_flavor_id和l7_flavor_id不能同时为空。
    * availabilityZoneList  可用区列表。仅在action为start时生效。且action为start时，该字段必传 可通过GET https://{ELB_Endpoint}/v3/{project_id}/elb/availability-zones 接口来查询可用区集合列表。创建负载均衡器时，从查询结果选择某一个可用区集合，并从中选择一个或多个可用区。
    * ipv6VipVirsubnetId  双栈类型负载均衡器所在子网的IPv6网络ID。 若实例升级到独享型后期望使用IPv6功能，则升级时该字段必传。  可以通过GET https://{VPC_Endpoint}/v1/{project_id}/subnets 响应参数中的id得到。  使用说明： ipv6_vip_virsubnet_id需要属于原共享型实例所属VPC。 ipv6_vip_virsubnet_id所属子网需要开启IPv6。  [不支持IPv6，请勿使用。](tag:dt)
    * ipv6VipAddress  负载均衡器的IPv6虚拟IP。该地址必须包含在所在子网的IPv6网段内，且未被占用。  使用说明：  传入ipv6_vip_address时必须传入ipv6_vip_virsubnet_id。 不传入ipv6_vip_address，但传入ipv6_vip_virsubnet_id，则自动分配IPv6虚拟IP。 不传入ipv6_vip_address，且不传ipv6_vip_virsubnet_id，则不分配虚拟IP，ipv6_vip_address=null。  [不支持IPv6，请勿使用。](tag:dt)
    * elbVirsubnetIds  下联面子网的网络ID列表。仅action为start时生效。 可以通过GET https://{VPC_Endpoint}/v1/{project_id}/subnets 响应参数中的neutron_network_id得到。  若不指定该字段，则选择vip_subnet_cidr_id子网对应的网络ID。  下联面子网必须属于该LB所在的VPC。
    * prepaidOptions  prepaidOptions
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'action' => 'action',
            'l4FlavorId' => 'l4_flavor_id',
            'l7FlavorId' => 'l7_flavor_id',
            'availabilityZoneList' => 'availability_zone_list',
            'ipv6VipVirsubnetId' => 'ipv6_vip_virsubnet_id',
            'ipv6VipAddress' => 'ipv6_vip_address',
            'elbVirsubnetIds' => 'elb_virsubnet_ids',
            'prepaidOptions' => 'prepaid_options'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * action  升级操作： - start：开始升级，仅负载均衡器的provisioning_status为ACTIVE时支持。 - complete：升级完成确认，仅实例的provision_status为UPGRADED时支持。确认后，实例无法再执行回退。 - rollback：回滚，仅实例的provision_status为UPGRADED,UPGRADE_FAILED,ROLLBACK_FAILED时支持。
    * l4FlavorId  四层规格ID。仅action为start时生效。 负载均衡器有四层监听器时该字段必须指定。 l4_flavor_id和l7_flavor_id不能同时为空。
    * l7FlavorId  七层规格ID。仅action为start时生效。 负载均衡器有七层监听器时该字段必须指定。 l4_flavor_id和l7_flavor_id不能同时为空。
    * availabilityZoneList  可用区列表。仅在action为start时生效。且action为start时，该字段必传 可通过GET https://{ELB_Endpoint}/v3/{project_id}/elb/availability-zones 接口来查询可用区集合列表。创建负载均衡器时，从查询结果选择某一个可用区集合，并从中选择一个或多个可用区。
    * ipv6VipVirsubnetId  双栈类型负载均衡器所在子网的IPv6网络ID。 若实例升级到独享型后期望使用IPv6功能，则升级时该字段必传。  可以通过GET https://{VPC_Endpoint}/v1/{project_id}/subnets 响应参数中的id得到。  使用说明： ipv6_vip_virsubnet_id需要属于原共享型实例所属VPC。 ipv6_vip_virsubnet_id所属子网需要开启IPv6。  [不支持IPv6，请勿使用。](tag:dt)
    * ipv6VipAddress  负载均衡器的IPv6虚拟IP。该地址必须包含在所在子网的IPv6网段内，且未被占用。  使用说明：  传入ipv6_vip_address时必须传入ipv6_vip_virsubnet_id。 不传入ipv6_vip_address，但传入ipv6_vip_virsubnet_id，则自动分配IPv6虚拟IP。 不传入ipv6_vip_address，且不传ipv6_vip_virsubnet_id，则不分配虚拟IP，ipv6_vip_address=null。  [不支持IPv6，请勿使用。](tag:dt)
    * elbVirsubnetIds  下联面子网的网络ID列表。仅action为start时生效。 可以通过GET https://{VPC_Endpoint}/v1/{project_id}/subnets 响应参数中的neutron_network_id得到。  若不指定该字段，则选择vip_subnet_cidr_id子网对应的网络ID。  下联面子网必须属于该LB所在的VPC。
    * prepaidOptions  prepaidOptions
    *
    * @var string[]
    */
    protected static $setters = [
            'action' => 'setAction',
            'l4FlavorId' => 'setL4FlavorId',
            'l7FlavorId' => 'setL7FlavorId',
            'availabilityZoneList' => 'setAvailabilityZoneList',
            'ipv6VipVirsubnetId' => 'setIpv6VipVirsubnetId',
            'ipv6VipAddress' => 'setIpv6VipAddress',
            'elbVirsubnetIds' => 'setElbVirsubnetIds',
            'prepaidOptions' => 'setPrepaidOptions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * action  升级操作： - start：开始升级，仅负载均衡器的provisioning_status为ACTIVE时支持。 - complete：升级完成确认，仅实例的provision_status为UPGRADED时支持。确认后，实例无法再执行回退。 - rollback：回滚，仅实例的provision_status为UPGRADED,UPGRADE_FAILED,ROLLBACK_FAILED时支持。
    * l4FlavorId  四层规格ID。仅action为start时生效。 负载均衡器有四层监听器时该字段必须指定。 l4_flavor_id和l7_flavor_id不能同时为空。
    * l7FlavorId  七层规格ID。仅action为start时生效。 负载均衡器有七层监听器时该字段必须指定。 l4_flavor_id和l7_flavor_id不能同时为空。
    * availabilityZoneList  可用区列表。仅在action为start时生效。且action为start时，该字段必传 可通过GET https://{ELB_Endpoint}/v3/{project_id}/elb/availability-zones 接口来查询可用区集合列表。创建负载均衡器时，从查询结果选择某一个可用区集合，并从中选择一个或多个可用区。
    * ipv6VipVirsubnetId  双栈类型负载均衡器所在子网的IPv6网络ID。 若实例升级到独享型后期望使用IPv6功能，则升级时该字段必传。  可以通过GET https://{VPC_Endpoint}/v1/{project_id}/subnets 响应参数中的id得到。  使用说明： ipv6_vip_virsubnet_id需要属于原共享型实例所属VPC。 ipv6_vip_virsubnet_id所属子网需要开启IPv6。  [不支持IPv6，请勿使用。](tag:dt)
    * ipv6VipAddress  负载均衡器的IPv6虚拟IP。该地址必须包含在所在子网的IPv6网段内，且未被占用。  使用说明：  传入ipv6_vip_address时必须传入ipv6_vip_virsubnet_id。 不传入ipv6_vip_address，但传入ipv6_vip_virsubnet_id，则自动分配IPv6虚拟IP。 不传入ipv6_vip_address，且不传ipv6_vip_virsubnet_id，则不分配虚拟IP，ipv6_vip_address=null。  [不支持IPv6，请勿使用。](tag:dt)
    * elbVirsubnetIds  下联面子网的网络ID列表。仅action为start时生效。 可以通过GET https://{VPC_Endpoint}/v1/{project_id}/subnets 响应参数中的neutron_network_id得到。  若不指定该字段，则选择vip_subnet_cidr_id子网对应的网络ID。  下联面子网必须属于该LB所在的VPC。
    * prepaidOptions  prepaidOptions
    *
    * @var string[]
    */
    protected static $getters = [
            'action' => 'getAction',
            'l4FlavorId' => 'getL4FlavorId',
            'l7FlavorId' => 'getL7FlavorId',
            'availabilityZoneList' => 'getAvailabilityZoneList',
            'ipv6VipVirsubnetId' => 'getIpv6VipVirsubnetId',
            'ipv6VipAddress' => 'getIpv6VipAddress',
            'elbVirsubnetIds' => 'getElbVirsubnetIds',
            'prepaidOptions' => 'getPrepaidOptions'
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
    const ACTION_START = 'start';
    const ACTION_COMPLETE = 'complete';
    const ACTION_ROLLBACK = 'rollback';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_START,
            self::ACTION_COMPLETE,
            self::ACTION_ROLLBACK,
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
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['l4FlavorId'] = isset($data['l4FlavorId']) ? $data['l4FlavorId'] : null;
        $this->container['l7FlavorId'] = isset($data['l7FlavorId']) ? $data['l7FlavorId'] : null;
        $this->container['availabilityZoneList'] = isset($data['availabilityZoneList']) ? $data['availabilityZoneList'] : null;
        $this->container['ipv6VipVirsubnetId'] = isset($data['ipv6VipVirsubnetId']) ? $data['ipv6VipVirsubnetId'] : null;
        $this->container['ipv6VipAddress'] = isset($data['ipv6VipAddress']) ? $data['ipv6VipAddress'] : null;
        $this->container['elbVirsubnetIds'] = isset($data['elbVirsubnetIds']) ? $data['elbVirsubnetIds'] : null;
        $this->container['prepaidOptions'] = isset($data['prepaidOptions']) ? $data['prepaidOptions'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
        }
            $allowedValues = $this->getActionAllowableValues();
                if (!is_null($this->container['action']) && !in_array($this->container['action'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'action', must be one of '%s'",
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
    * Gets action
    *  升级操作： - start：开始升级，仅负载均衡器的provisioning_status为ACTIVE时支持。 - complete：升级完成确认，仅实例的provision_status为UPGRADED时支持。确认后，实例无法再执行回退。 - rollback：回滚，仅实例的provision_status为UPGRADED,UPGRADE_FAILED,ROLLBACK_FAILED时支持。
    *
    * @return string
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string $action 升级操作： - start：开始升级，仅负载均衡器的provisioning_status为ACTIVE时支持。 - complete：升级完成确认，仅实例的provision_status为UPGRADED时支持。确认后，实例无法再执行回退。 - rollback：回滚，仅实例的provision_status为UPGRADED,UPGRADE_FAILED,ROLLBACK_FAILED时支持。
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets l4FlavorId
    *  四层规格ID。仅action为start时生效。 负载均衡器有四层监听器时该字段必须指定。 l4_flavor_id和l7_flavor_id不能同时为空。
    *
    * @return string|null
    */
    public function getL4FlavorId()
    {
        return $this->container['l4FlavorId'];
    }

    /**
    * Sets l4FlavorId
    *
    * @param string|null $l4FlavorId 四层规格ID。仅action为start时生效。 负载均衡器有四层监听器时该字段必须指定。 l4_flavor_id和l7_flavor_id不能同时为空。
    *
    * @return $this
    */
    public function setL4FlavorId($l4FlavorId)
    {
        $this->container['l4FlavorId'] = $l4FlavorId;
        return $this;
    }

    /**
    * Gets l7FlavorId
    *  七层规格ID。仅action为start时生效。 负载均衡器有七层监听器时该字段必须指定。 l4_flavor_id和l7_flavor_id不能同时为空。
    *
    * @return string|null
    */
    public function getL7FlavorId()
    {
        return $this->container['l7FlavorId'];
    }

    /**
    * Sets l7FlavorId
    *
    * @param string|null $l7FlavorId 七层规格ID。仅action为start时生效。 负载均衡器有七层监听器时该字段必须指定。 l4_flavor_id和l7_flavor_id不能同时为空。
    *
    * @return $this
    */
    public function setL7FlavorId($l7FlavorId)
    {
        $this->container['l7FlavorId'] = $l7FlavorId;
        return $this;
    }

    /**
    * Gets availabilityZoneList
    *  可用区列表。仅在action为start时生效。且action为start时，该字段必传 可通过GET https://{ELB_Endpoint}/v3/{project_id}/elb/availability-zones 接口来查询可用区集合列表。创建负载均衡器时，从查询结果选择某一个可用区集合，并从中选择一个或多个可用区。
    *
    * @return string[]|null
    */
    public function getAvailabilityZoneList()
    {
        return $this->container['availabilityZoneList'];
    }

    /**
    * Sets availabilityZoneList
    *
    * @param string[]|null $availabilityZoneList 可用区列表。仅在action为start时生效。且action为start时，该字段必传 可通过GET https://{ELB_Endpoint}/v3/{project_id}/elb/availability-zones 接口来查询可用区集合列表。创建负载均衡器时，从查询结果选择某一个可用区集合，并从中选择一个或多个可用区。
    *
    * @return $this
    */
    public function setAvailabilityZoneList($availabilityZoneList)
    {
        $this->container['availabilityZoneList'] = $availabilityZoneList;
        return $this;
    }

    /**
    * Gets ipv6VipVirsubnetId
    *  双栈类型负载均衡器所在子网的IPv6网络ID。 若实例升级到独享型后期望使用IPv6功能，则升级时该字段必传。  可以通过GET https://{VPC_Endpoint}/v1/{project_id}/subnets 响应参数中的id得到。  使用说明： ipv6_vip_virsubnet_id需要属于原共享型实例所属VPC。 ipv6_vip_virsubnet_id所属子网需要开启IPv6。  [不支持IPv6，请勿使用。](tag:dt)
    *
    * @return string|null
    */
    public function getIpv6VipVirsubnetId()
    {
        return $this->container['ipv6VipVirsubnetId'];
    }

    /**
    * Sets ipv6VipVirsubnetId
    *
    * @param string|null $ipv6VipVirsubnetId 双栈类型负载均衡器所在子网的IPv6网络ID。 若实例升级到独享型后期望使用IPv6功能，则升级时该字段必传。  可以通过GET https://{VPC_Endpoint}/v1/{project_id}/subnets 响应参数中的id得到。  使用说明： ipv6_vip_virsubnet_id需要属于原共享型实例所属VPC。 ipv6_vip_virsubnet_id所属子网需要开启IPv6。  [不支持IPv6，请勿使用。](tag:dt)
    *
    * @return $this
    */
    public function setIpv6VipVirsubnetId($ipv6VipVirsubnetId)
    {
        $this->container['ipv6VipVirsubnetId'] = $ipv6VipVirsubnetId;
        return $this;
    }

    /**
    * Gets ipv6VipAddress
    *  负载均衡器的IPv6虚拟IP。该地址必须包含在所在子网的IPv6网段内，且未被占用。  使用说明：  传入ipv6_vip_address时必须传入ipv6_vip_virsubnet_id。 不传入ipv6_vip_address，但传入ipv6_vip_virsubnet_id，则自动分配IPv6虚拟IP。 不传入ipv6_vip_address，且不传ipv6_vip_virsubnet_id，则不分配虚拟IP，ipv6_vip_address=null。  [不支持IPv6，请勿使用。](tag:dt)
    *
    * @return string|null
    */
    public function getIpv6VipAddress()
    {
        return $this->container['ipv6VipAddress'];
    }

    /**
    * Sets ipv6VipAddress
    *
    * @param string|null $ipv6VipAddress 负载均衡器的IPv6虚拟IP。该地址必须包含在所在子网的IPv6网段内，且未被占用。  使用说明：  传入ipv6_vip_address时必须传入ipv6_vip_virsubnet_id。 不传入ipv6_vip_address，但传入ipv6_vip_virsubnet_id，则自动分配IPv6虚拟IP。 不传入ipv6_vip_address，且不传ipv6_vip_virsubnet_id，则不分配虚拟IP，ipv6_vip_address=null。  [不支持IPv6，请勿使用。](tag:dt)
    *
    * @return $this
    */
    public function setIpv6VipAddress($ipv6VipAddress)
    {
        $this->container['ipv6VipAddress'] = $ipv6VipAddress;
        return $this;
    }

    /**
    * Gets elbVirsubnetIds
    *  下联面子网的网络ID列表。仅action为start时生效。 可以通过GET https://{VPC_Endpoint}/v1/{project_id}/subnets 响应参数中的neutron_network_id得到。  若不指定该字段，则选择vip_subnet_cidr_id子网对应的网络ID。  下联面子网必须属于该LB所在的VPC。
    *
    * @return string[]|null
    */
    public function getElbVirsubnetIds()
    {
        return $this->container['elbVirsubnetIds'];
    }

    /**
    * Sets elbVirsubnetIds
    *
    * @param string[]|null $elbVirsubnetIds 下联面子网的网络ID列表。仅action为start时生效。 可以通过GET https://{VPC_Endpoint}/v1/{project_id}/subnets 响应参数中的neutron_network_id得到。  若不指定该字段，则选择vip_subnet_cidr_id子网对应的网络ID。  下联面子网必须属于该LB所在的VPC。
    *
    * @return $this
    */
    public function setElbVirsubnetIds($elbVirsubnetIds)
    {
        $this->container['elbVirsubnetIds'] = $elbVirsubnetIds;
        return $this;
    }

    /**
    * Gets prepaidOptions
    *  prepaidOptions
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\UpgradePrepaidOption|null
    */
    public function getPrepaidOptions()
    {
        return $this->container['prepaidOptions'];
    }

    /**
    * Sets prepaidOptions
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\UpgradePrepaidOption|null $prepaidOptions prepaidOptions
    *
    * @return $this
    */
    public function setPrepaidOptions($prepaidOptions)
    {
        $this->container['prepaidOptions'] = $prepaidOptions;
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

