<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CloneListenerOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CloneListenerOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释**：新监听器的名称。 **约束限制**：不涉及 **取值范围**：[0-255]个字符，传入空字符串则取默认值。 **默认取值**：原监听器名称+ “-copy”。
    * loadbalancerId  **参数解释**：新监听器所在的负载均衡器ID（UUID）。 **约束限制**： - 不支持复制到网关型负载均衡器。 - 目的负载均衡器类型需要支持源监听器协议。源监听器协议为HTTP、HTTPS，目的负载均衡器需要为应用型负载均衡器；源监听器协议为TCP、UDP、TLS，目的负载均衡器需要为网络型负载均衡器。 - 只支持共享型负载均衡器复制到共享型负载均衡器，独享型负载均衡器复制到独享型负载均衡器。 - 源监听器的负载均衡器启用IP类型后端转发，目的负载均衡器也需要启动IP类型后端转发功能。 - 源监听器协议为TLS，目的负载均衡器需要支持创建TLS协议监听器。 **取值范围**：标准的UUID格式，长度为36个字符。 **默认取值**：不涉及
    * protocolPort  **参数解释**：新监听器的监听端口。 **约束限制**： - 不能与目的负载均衡器下已有监听器监听端口重复。 - 0表示开启监听端口范围的能力，此时port_ranges为必填字段。 - 共享型负载均衡器上的HTTP和TERMINATED_HTTPS监听器不支持设置21端口。 **取值范围**：0-65535 **默认取值**：不涉及
    * portRanges  **参数解释**：端口监听范围（闭区间)，最多指定10个端口组，每个组范围不可有重叠部分。 **约束限制**： - 仅当protocol_port为0或未传入protocol_port时可以传入该字段。 - 仅TCP, UDP，TLS监听器支持该字段。 - 不能与目的负载均衡器下已有端口冲突
    * reusePool  **参数解释**：新监听器是否复用或复制源监听器的后端服务器组和后端服务器的标识。 - 复用：目的负载均衡器将会直接使用源负载均衡器的后端服务器组。 - 复制：系统将会根据原有配置创建新的后端服务器组，然后将其关联到目的负载均衡器使用。 **约束限制**： - 配置为true时，需要开启后端服务器组多挂实例功能。 - 只在独享型场景复制、同VPC场景可配。 **取值范围**： - true：复用源监听器的后端服务器组。 - false：复制源监听器的后端服务器组。 **默认取值**：false
    * subnetMappingList  **参数解释**：源监听器下后端服务器子网信息和新监听器下后端服务器子网信息一一对应关系。 **约束限制**： - 将监听器复制到不同VPC下的负载均衡器时，该字段必填。复制到同一个VPC下的负载均衡器时不填。 - 若源监听器所在负载均衡器已开启ip_target_enable（该功能默认不开启），则不允许跨VPC复制，即该字段不允许填。 - 每一组subnet_cidr_id都需要是新监听器下后端服务器的VPC子网ID，每一组dst_subnet_cidr_id都需要为源监听器下后端服务器的的VPC子网ID，不允许少填多填、或重复对应关系。 - 每一组的subnet_cidr_id和dst_subnet_cidr_id的两个子网必须存在且网段相同。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'loadbalancerId' => 'string',
            'protocolPort' => 'int',
            'portRanges' => '\HuaweiCloud\SDK\Elb\V3\Model\PortRange[]',
            'reusePool' => 'bool',
            'subnetMappingList' => '\HuaweiCloud\SDK\Elb\V3\Model\SubnetMappingList[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释**：新监听器的名称。 **约束限制**：不涉及 **取值范围**：[0-255]个字符，传入空字符串则取默认值。 **默认取值**：原监听器名称+ “-copy”。
    * loadbalancerId  **参数解释**：新监听器所在的负载均衡器ID（UUID）。 **约束限制**： - 不支持复制到网关型负载均衡器。 - 目的负载均衡器类型需要支持源监听器协议。源监听器协议为HTTP、HTTPS，目的负载均衡器需要为应用型负载均衡器；源监听器协议为TCP、UDP、TLS，目的负载均衡器需要为网络型负载均衡器。 - 只支持共享型负载均衡器复制到共享型负载均衡器，独享型负载均衡器复制到独享型负载均衡器。 - 源监听器的负载均衡器启用IP类型后端转发，目的负载均衡器也需要启动IP类型后端转发功能。 - 源监听器协议为TLS，目的负载均衡器需要支持创建TLS协议监听器。 **取值范围**：标准的UUID格式，长度为36个字符。 **默认取值**：不涉及
    * protocolPort  **参数解释**：新监听器的监听端口。 **约束限制**： - 不能与目的负载均衡器下已有监听器监听端口重复。 - 0表示开启监听端口范围的能力，此时port_ranges为必填字段。 - 共享型负载均衡器上的HTTP和TERMINATED_HTTPS监听器不支持设置21端口。 **取值范围**：0-65535 **默认取值**：不涉及
    * portRanges  **参数解释**：端口监听范围（闭区间)，最多指定10个端口组，每个组范围不可有重叠部分。 **约束限制**： - 仅当protocol_port为0或未传入protocol_port时可以传入该字段。 - 仅TCP, UDP，TLS监听器支持该字段。 - 不能与目的负载均衡器下已有端口冲突
    * reusePool  **参数解释**：新监听器是否复用或复制源监听器的后端服务器组和后端服务器的标识。 - 复用：目的负载均衡器将会直接使用源负载均衡器的后端服务器组。 - 复制：系统将会根据原有配置创建新的后端服务器组，然后将其关联到目的负载均衡器使用。 **约束限制**： - 配置为true时，需要开启后端服务器组多挂实例功能。 - 只在独享型场景复制、同VPC场景可配。 **取值范围**： - true：复用源监听器的后端服务器组。 - false：复制源监听器的后端服务器组。 **默认取值**：false
    * subnetMappingList  **参数解释**：源监听器下后端服务器子网信息和新监听器下后端服务器子网信息一一对应关系。 **约束限制**： - 将监听器复制到不同VPC下的负载均衡器时，该字段必填。复制到同一个VPC下的负载均衡器时不填。 - 若源监听器所在负载均衡器已开启ip_target_enable（该功能默认不开启），则不允许跨VPC复制，即该字段不允许填。 - 每一组subnet_cidr_id都需要是新监听器下后端服务器的VPC子网ID，每一组dst_subnet_cidr_id都需要为源监听器下后端服务器的的VPC子网ID，不允许少填多填、或重复对应关系。 - 每一组的subnet_cidr_id和dst_subnet_cidr_id的两个子网必须存在且网段相同。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'loadbalancerId' => null,
        'protocolPort' => 'int32',
        'portRanges' => null,
        'reusePool' => null,
        'subnetMappingList' => null
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
    * name  **参数解释**：新监听器的名称。 **约束限制**：不涉及 **取值范围**：[0-255]个字符，传入空字符串则取默认值。 **默认取值**：原监听器名称+ “-copy”。
    * loadbalancerId  **参数解释**：新监听器所在的负载均衡器ID（UUID）。 **约束限制**： - 不支持复制到网关型负载均衡器。 - 目的负载均衡器类型需要支持源监听器协议。源监听器协议为HTTP、HTTPS，目的负载均衡器需要为应用型负载均衡器；源监听器协议为TCP、UDP、TLS，目的负载均衡器需要为网络型负载均衡器。 - 只支持共享型负载均衡器复制到共享型负载均衡器，独享型负载均衡器复制到独享型负载均衡器。 - 源监听器的负载均衡器启用IP类型后端转发，目的负载均衡器也需要启动IP类型后端转发功能。 - 源监听器协议为TLS，目的负载均衡器需要支持创建TLS协议监听器。 **取值范围**：标准的UUID格式，长度为36个字符。 **默认取值**：不涉及
    * protocolPort  **参数解释**：新监听器的监听端口。 **约束限制**： - 不能与目的负载均衡器下已有监听器监听端口重复。 - 0表示开启监听端口范围的能力，此时port_ranges为必填字段。 - 共享型负载均衡器上的HTTP和TERMINATED_HTTPS监听器不支持设置21端口。 **取值范围**：0-65535 **默认取值**：不涉及
    * portRanges  **参数解释**：端口监听范围（闭区间)，最多指定10个端口组，每个组范围不可有重叠部分。 **约束限制**： - 仅当protocol_port为0或未传入protocol_port时可以传入该字段。 - 仅TCP, UDP，TLS监听器支持该字段。 - 不能与目的负载均衡器下已有端口冲突
    * reusePool  **参数解释**：新监听器是否复用或复制源监听器的后端服务器组和后端服务器的标识。 - 复用：目的负载均衡器将会直接使用源负载均衡器的后端服务器组。 - 复制：系统将会根据原有配置创建新的后端服务器组，然后将其关联到目的负载均衡器使用。 **约束限制**： - 配置为true时，需要开启后端服务器组多挂实例功能。 - 只在独享型场景复制、同VPC场景可配。 **取值范围**： - true：复用源监听器的后端服务器组。 - false：复制源监听器的后端服务器组。 **默认取值**：false
    * subnetMappingList  **参数解释**：源监听器下后端服务器子网信息和新监听器下后端服务器子网信息一一对应关系。 **约束限制**： - 将监听器复制到不同VPC下的负载均衡器时，该字段必填。复制到同一个VPC下的负载均衡器时不填。 - 若源监听器所在负载均衡器已开启ip_target_enable（该功能默认不开启），则不允许跨VPC复制，即该字段不允许填。 - 每一组subnet_cidr_id都需要是新监听器下后端服务器的VPC子网ID，每一组dst_subnet_cidr_id都需要为源监听器下后端服务器的的VPC子网ID，不允许少填多填、或重复对应关系。 - 每一组的subnet_cidr_id和dst_subnet_cidr_id的两个子网必须存在且网段相同。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'loadbalancerId' => 'loadbalancer_id',
            'protocolPort' => 'protocol_port',
            'portRanges' => 'port_ranges',
            'reusePool' => 'reuse_pool',
            'subnetMappingList' => 'subnet_mapping_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释**：新监听器的名称。 **约束限制**：不涉及 **取值范围**：[0-255]个字符，传入空字符串则取默认值。 **默认取值**：原监听器名称+ “-copy”。
    * loadbalancerId  **参数解释**：新监听器所在的负载均衡器ID（UUID）。 **约束限制**： - 不支持复制到网关型负载均衡器。 - 目的负载均衡器类型需要支持源监听器协议。源监听器协议为HTTP、HTTPS，目的负载均衡器需要为应用型负载均衡器；源监听器协议为TCP、UDP、TLS，目的负载均衡器需要为网络型负载均衡器。 - 只支持共享型负载均衡器复制到共享型负载均衡器，独享型负载均衡器复制到独享型负载均衡器。 - 源监听器的负载均衡器启用IP类型后端转发，目的负载均衡器也需要启动IP类型后端转发功能。 - 源监听器协议为TLS，目的负载均衡器需要支持创建TLS协议监听器。 **取值范围**：标准的UUID格式，长度为36个字符。 **默认取值**：不涉及
    * protocolPort  **参数解释**：新监听器的监听端口。 **约束限制**： - 不能与目的负载均衡器下已有监听器监听端口重复。 - 0表示开启监听端口范围的能力，此时port_ranges为必填字段。 - 共享型负载均衡器上的HTTP和TERMINATED_HTTPS监听器不支持设置21端口。 **取值范围**：0-65535 **默认取值**：不涉及
    * portRanges  **参数解释**：端口监听范围（闭区间)，最多指定10个端口组，每个组范围不可有重叠部分。 **约束限制**： - 仅当protocol_port为0或未传入protocol_port时可以传入该字段。 - 仅TCP, UDP，TLS监听器支持该字段。 - 不能与目的负载均衡器下已有端口冲突
    * reusePool  **参数解释**：新监听器是否复用或复制源监听器的后端服务器组和后端服务器的标识。 - 复用：目的负载均衡器将会直接使用源负载均衡器的后端服务器组。 - 复制：系统将会根据原有配置创建新的后端服务器组，然后将其关联到目的负载均衡器使用。 **约束限制**： - 配置为true时，需要开启后端服务器组多挂实例功能。 - 只在独享型场景复制、同VPC场景可配。 **取值范围**： - true：复用源监听器的后端服务器组。 - false：复制源监听器的后端服务器组。 **默认取值**：false
    * subnetMappingList  **参数解释**：源监听器下后端服务器子网信息和新监听器下后端服务器子网信息一一对应关系。 **约束限制**： - 将监听器复制到不同VPC下的负载均衡器时，该字段必填。复制到同一个VPC下的负载均衡器时不填。 - 若源监听器所在负载均衡器已开启ip_target_enable（该功能默认不开启），则不允许跨VPC复制，即该字段不允许填。 - 每一组subnet_cidr_id都需要是新监听器下后端服务器的VPC子网ID，每一组dst_subnet_cidr_id都需要为源监听器下后端服务器的的VPC子网ID，不允许少填多填、或重复对应关系。 - 每一组的subnet_cidr_id和dst_subnet_cidr_id的两个子网必须存在且网段相同。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'loadbalancerId' => 'setLoadbalancerId',
            'protocolPort' => 'setProtocolPort',
            'portRanges' => 'setPortRanges',
            'reusePool' => 'setReusePool',
            'subnetMappingList' => 'setSubnetMappingList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释**：新监听器的名称。 **约束限制**：不涉及 **取值范围**：[0-255]个字符，传入空字符串则取默认值。 **默认取值**：原监听器名称+ “-copy”。
    * loadbalancerId  **参数解释**：新监听器所在的负载均衡器ID（UUID）。 **约束限制**： - 不支持复制到网关型负载均衡器。 - 目的负载均衡器类型需要支持源监听器协议。源监听器协议为HTTP、HTTPS，目的负载均衡器需要为应用型负载均衡器；源监听器协议为TCP、UDP、TLS，目的负载均衡器需要为网络型负载均衡器。 - 只支持共享型负载均衡器复制到共享型负载均衡器，独享型负载均衡器复制到独享型负载均衡器。 - 源监听器的负载均衡器启用IP类型后端转发，目的负载均衡器也需要启动IP类型后端转发功能。 - 源监听器协议为TLS，目的负载均衡器需要支持创建TLS协议监听器。 **取值范围**：标准的UUID格式，长度为36个字符。 **默认取值**：不涉及
    * protocolPort  **参数解释**：新监听器的监听端口。 **约束限制**： - 不能与目的负载均衡器下已有监听器监听端口重复。 - 0表示开启监听端口范围的能力，此时port_ranges为必填字段。 - 共享型负载均衡器上的HTTP和TERMINATED_HTTPS监听器不支持设置21端口。 **取值范围**：0-65535 **默认取值**：不涉及
    * portRanges  **参数解释**：端口监听范围（闭区间)，最多指定10个端口组，每个组范围不可有重叠部分。 **约束限制**： - 仅当protocol_port为0或未传入protocol_port时可以传入该字段。 - 仅TCP, UDP，TLS监听器支持该字段。 - 不能与目的负载均衡器下已有端口冲突
    * reusePool  **参数解释**：新监听器是否复用或复制源监听器的后端服务器组和后端服务器的标识。 - 复用：目的负载均衡器将会直接使用源负载均衡器的后端服务器组。 - 复制：系统将会根据原有配置创建新的后端服务器组，然后将其关联到目的负载均衡器使用。 **约束限制**： - 配置为true时，需要开启后端服务器组多挂实例功能。 - 只在独享型场景复制、同VPC场景可配。 **取值范围**： - true：复用源监听器的后端服务器组。 - false：复制源监听器的后端服务器组。 **默认取值**：false
    * subnetMappingList  **参数解释**：源监听器下后端服务器子网信息和新监听器下后端服务器子网信息一一对应关系。 **约束限制**： - 将监听器复制到不同VPC下的负载均衡器时，该字段必填。复制到同一个VPC下的负载均衡器时不填。 - 若源监听器所在负载均衡器已开启ip_target_enable（该功能默认不开启），则不允许跨VPC复制，即该字段不允许填。 - 每一组subnet_cidr_id都需要是新监听器下后端服务器的VPC子网ID，每一组dst_subnet_cidr_id都需要为源监听器下后端服务器的的VPC子网ID，不允许少填多填、或重复对应关系。 - 每一组的subnet_cidr_id和dst_subnet_cidr_id的两个子网必须存在且网段相同。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'loadbalancerId' => 'getLoadbalancerId',
            'protocolPort' => 'getProtocolPort',
            'portRanges' => 'getPortRanges',
            'reusePool' => 'getReusePool',
            'subnetMappingList' => 'getSubnetMappingList'
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
        $this->container['loadbalancerId'] = isset($data['loadbalancerId']) ? $data['loadbalancerId'] : null;
        $this->container['protocolPort'] = isset($data['protocolPort']) ? $data['protocolPort'] : null;
        $this->container['portRanges'] = isset($data['portRanges']) ? $data['portRanges'] : null;
        $this->container['reusePool'] = isset($data['reusePool']) ? $data['reusePool'] : null;
        $this->container['subnetMappingList'] = isset($data['subnetMappingList']) ? $data['subnetMappingList'] : null;
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
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['loadbalancerId'] === null) {
            $invalidProperties[] = "'loadbalancerId' can't be null";
        }
            if ((mb_strlen($this->container['loadbalancerId']) > 36)) {
                $invalidProperties[] = "invalid value for 'loadbalancerId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['loadbalancerId']) < 0)) {
                $invalidProperties[] = "invalid value for 'loadbalancerId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['protocolPort']) && ($this->container['protocolPort'] > 65535)) {
                $invalidProperties[] = "invalid value for 'protocolPort', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['protocolPort']) && ($this->container['protocolPort'] < 1)) {
                $invalidProperties[] = "invalid value for 'protocolPort', must be bigger than or equal to 1.";
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
    *  **参数解释**：新监听器的名称。 **约束限制**：不涉及 **取值范围**：[0-255]个字符，传入空字符串则取默认值。 **默认取值**：原监听器名称+ “-copy”。
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
    * @param string|null $name **参数解释**：新监听器的名称。 **约束限制**：不涉及 **取值范围**：[0-255]个字符，传入空字符串则取默认值。 **默认取值**：原监听器名称+ “-copy”。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets loadbalancerId
    *  **参数解释**：新监听器所在的负载均衡器ID（UUID）。 **约束限制**： - 不支持复制到网关型负载均衡器。 - 目的负载均衡器类型需要支持源监听器协议。源监听器协议为HTTP、HTTPS，目的负载均衡器需要为应用型负载均衡器；源监听器协议为TCP、UDP、TLS，目的负载均衡器需要为网络型负载均衡器。 - 只支持共享型负载均衡器复制到共享型负载均衡器，独享型负载均衡器复制到独享型负载均衡器。 - 源监听器的负载均衡器启用IP类型后端转发，目的负载均衡器也需要启动IP类型后端转发功能。 - 源监听器协议为TLS，目的负载均衡器需要支持创建TLS协议监听器。 **取值范围**：标准的UUID格式，长度为36个字符。 **默认取值**：不涉及
    *
    * @return string
    */
    public function getLoadbalancerId()
    {
        return $this->container['loadbalancerId'];
    }

    /**
    * Sets loadbalancerId
    *
    * @param string $loadbalancerId **参数解释**：新监听器所在的负载均衡器ID（UUID）。 **约束限制**： - 不支持复制到网关型负载均衡器。 - 目的负载均衡器类型需要支持源监听器协议。源监听器协议为HTTP、HTTPS，目的负载均衡器需要为应用型负载均衡器；源监听器协议为TCP、UDP、TLS，目的负载均衡器需要为网络型负载均衡器。 - 只支持共享型负载均衡器复制到共享型负载均衡器，独享型负载均衡器复制到独享型负载均衡器。 - 源监听器的负载均衡器启用IP类型后端转发，目的负载均衡器也需要启动IP类型后端转发功能。 - 源监听器协议为TLS，目的负载均衡器需要支持创建TLS协议监听器。 **取值范围**：标准的UUID格式，长度为36个字符。 **默认取值**：不涉及
    *
    * @return $this
    */
    public function setLoadbalancerId($loadbalancerId)
    {
        $this->container['loadbalancerId'] = $loadbalancerId;
        return $this;
    }

    /**
    * Gets protocolPort
    *  **参数解释**：新监听器的监听端口。 **约束限制**： - 不能与目的负载均衡器下已有监听器监听端口重复。 - 0表示开启监听端口范围的能力，此时port_ranges为必填字段。 - 共享型负载均衡器上的HTTP和TERMINATED_HTTPS监听器不支持设置21端口。 **取值范围**：0-65535 **默认取值**：不涉及
    *
    * @return int|null
    */
    public function getProtocolPort()
    {
        return $this->container['protocolPort'];
    }

    /**
    * Sets protocolPort
    *
    * @param int|null $protocolPort **参数解释**：新监听器的监听端口。 **约束限制**： - 不能与目的负载均衡器下已有监听器监听端口重复。 - 0表示开启监听端口范围的能力，此时port_ranges为必填字段。 - 共享型负载均衡器上的HTTP和TERMINATED_HTTPS监听器不支持设置21端口。 **取值范围**：0-65535 **默认取值**：不涉及
    *
    * @return $this
    */
    public function setProtocolPort($protocolPort)
    {
        $this->container['protocolPort'] = $protocolPort;
        return $this;
    }

    /**
    * Gets portRanges
    *  **参数解释**：端口监听范围（闭区间)，最多指定10个端口组，每个组范围不可有重叠部分。 **约束限制**： - 仅当protocol_port为0或未传入protocol_port时可以传入该字段。 - 仅TCP, UDP，TLS监听器支持该字段。 - 不能与目的负载均衡器下已有端口冲突
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\PortRange[]|null
    */
    public function getPortRanges()
    {
        return $this->container['portRanges'];
    }

    /**
    * Sets portRanges
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\PortRange[]|null $portRanges **参数解释**：端口监听范围（闭区间)，最多指定10个端口组，每个组范围不可有重叠部分。 **约束限制**： - 仅当protocol_port为0或未传入protocol_port时可以传入该字段。 - 仅TCP, UDP，TLS监听器支持该字段。 - 不能与目的负载均衡器下已有端口冲突
    *
    * @return $this
    */
    public function setPortRanges($portRanges)
    {
        $this->container['portRanges'] = $portRanges;
        return $this;
    }

    /**
    * Gets reusePool
    *  **参数解释**：新监听器是否复用或复制源监听器的后端服务器组和后端服务器的标识。 - 复用：目的负载均衡器将会直接使用源负载均衡器的后端服务器组。 - 复制：系统将会根据原有配置创建新的后端服务器组，然后将其关联到目的负载均衡器使用。 **约束限制**： - 配置为true时，需要开启后端服务器组多挂实例功能。 - 只在独享型场景复制、同VPC场景可配。 **取值范围**： - true：复用源监听器的后端服务器组。 - false：复制源监听器的后端服务器组。 **默认取值**：false
    *
    * @return bool|null
    */
    public function getReusePool()
    {
        return $this->container['reusePool'];
    }

    /**
    * Sets reusePool
    *
    * @param bool|null $reusePool **参数解释**：新监听器是否复用或复制源监听器的后端服务器组和后端服务器的标识。 - 复用：目的负载均衡器将会直接使用源负载均衡器的后端服务器组。 - 复制：系统将会根据原有配置创建新的后端服务器组，然后将其关联到目的负载均衡器使用。 **约束限制**： - 配置为true时，需要开启后端服务器组多挂实例功能。 - 只在独享型场景复制、同VPC场景可配。 **取值范围**： - true：复用源监听器的后端服务器组。 - false：复制源监听器的后端服务器组。 **默认取值**：false
    *
    * @return $this
    */
    public function setReusePool($reusePool)
    {
        $this->container['reusePool'] = $reusePool;
        return $this;
    }

    /**
    * Gets subnetMappingList
    *  **参数解释**：源监听器下后端服务器子网信息和新监听器下后端服务器子网信息一一对应关系。 **约束限制**： - 将监听器复制到不同VPC下的负载均衡器时，该字段必填。复制到同一个VPC下的负载均衡器时不填。 - 若源监听器所在负载均衡器已开启ip_target_enable（该功能默认不开启），则不允许跨VPC复制，即该字段不允许填。 - 每一组subnet_cidr_id都需要是新监听器下后端服务器的VPC子网ID，每一组dst_subnet_cidr_id都需要为源监听器下后端服务器的的VPC子网ID，不允许少填多填、或重复对应关系。 - 每一组的subnet_cidr_id和dst_subnet_cidr_id的两个子网必须存在且网段相同。
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\SubnetMappingList[]|null
    */
    public function getSubnetMappingList()
    {
        return $this->container['subnetMappingList'];
    }

    /**
    * Sets subnetMappingList
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\SubnetMappingList[]|null $subnetMappingList **参数解释**：源监听器下后端服务器子网信息和新监听器下后端服务器子网信息一一对应关系。 **约束限制**： - 将监听器复制到不同VPC下的负载均衡器时，该字段必填。复制到同一个VPC下的负载均衡器时不填。 - 若源监听器所在负载均衡器已开启ip_target_enable（该功能默认不开启），则不允许跨VPC复制，即该字段不允许填。 - 每一组subnet_cidr_id都需要是新监听器下后端服务器的VPC子网ID，每一组dst_subnet_cidr_id都需要为源监听器下后端服务器的的VPC子网ID，不允许少填多填、或重复对应关系。 - 每一组的subnet_cidr_id和dst_subnet_cidr_id的两个子网必须存在且网段相同。
    *
    * @return $this
    */
    public function setSubnetMappingList($subnetMappingList)
    {
        $this->container['subnetMappingList'] = $subnetMappingList;
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

