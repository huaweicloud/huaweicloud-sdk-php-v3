<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateInstanceRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateInstanceRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * chargemode  收费模式，当前仅支持按需收费（30）
    * region  需要创建独享引擎的局点，例如：北京四（cn-north-4）
    * availableZone  需要创建独享引擎的可用区，例如：北京四可用区1（cn-north-4a）
    * arch  独享引擎CPU架构，例如：x86与arm
    * instancename  独享引擎名称前缀
    * specification  独享引擎版本规格   - waf.instance.enterprise：企业版，对应控制台WI-100规格   - waf.instance.professional：专业版，对应控制台WI-500规格
    * cpuFlavor  独享引擎ECS规格，实例规格。创建资源租户类独享引擎可不填该参数，创建普通资源租户独享引擎必填该参数。普通租户类独享引擎具体支持的规格以waf控制台上支持的规格为准，企业版对应8U16G的ecs规格，专业版对应2U4G的ecs规格。
    * vpcId  独享引擎所在VPC的ID（通过调用虚拟私有云ListVpcs接口获取所有的VPC列表查询VPC的ID，如果需要关联企业项目，则调用虚拟私有云的接口也需要关联企业项目ID）
    * subnetId  独享引擎所在VPC内的子网ID（通过调用虚拟私有云ListSubnets接口获取所有的子网列表查询子网的ID，如果需要关联企业项目，则调用虚拟私有云的接口也需要关联企业项目ID）
    * securityGroup  独享引擎需要绑定的安全组ID（通过调用虚拟私有云ListSecurityGroups接口获取所有的安全组列表查询安全组的ID，如果需要关联企业项目，则调用虚拟私有云的接口也需要关联企业项目ID）
    * count  申请的独享引擎数量
    * resTenant  是否为资源租户类，默认值为false。   - true: 资源租户类   - false: 普通租户类
    * antiAffinity  是否开启反亲和。仅资源租户独享实例支持该特性。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'chargemode' => 'int',
            'region' => 'string',
            'availableZone' => 'string',
            'arch' => 'string',
            'instancename' => 'string',
            'specification' => 'string',
            'cpuFlavor' => 'string',
            'vpcId' => 'string',
            'subnetId' => 'string',
            'securityGroup' => 'string[]',
            'count' => 'int',
            'resTenant' => 'bool',
            'antiAffinity' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * chargemode  收费模式，当前仅支持按需收费（30）
    * region  需要创建独享引擎的局点，例如：北京四（cn-north-4）
    * availableZone  需要创建独享引擎的可用区，例如：北京四可用区1（cn-north-4a）
    * arch  独享引擎CPU架构，例如：x86与arm
    * instancename  独享引擎名称前缀
    * specification  独享引擎版本规格   - waf.instance.enterprise：企业版，对应控制台WI-100规格   - waf.instance.professional：专业版，对应控制台WI-500规格
    * cpuFlavor  独享引擎ECS规格，实例规格。创建资源租户类独享引擎可不填该参数，创建普通资源租户独享引擎必填该参数。普通租户类独享引擎具体支持的规格以waf控制台上支持的规格为准，企业版对应8U16G的ecs规格，专业版对应2U4G的ecs规格。
    * vpcId  独享引擎所在VPC的ID（通过调用虚拟私有云ListVpcs接口获取所有的VPC列表查询VPC的ID，如果需要关联企业项目，则调用虚拟私有云的接口也需要关联企业项目ID）
    * subnetId  独享引擎所在VPC内的子网ID（通过调用虚拟私有云ListSubnets接口获取所有的子网列表查询子网的ID，如果需要关联企业项目，则调用虚拟私有云的接口也需要关联企业项目ID）
    * securityGroup  独享引擎需要绑定的安全组ID（通过调用虚拟私有云ListSecurityGroups接口获取所有的安全组列表查询安全组的ID，如果需要关联企业项目，则调用虚拟私有云的接口也需要关联企业项目ID）
    * count  申请的独享引擎数量
    * resTenant  是否为资源租户类，默认值为false。   - true: 资源租户类   - false: 普通租户类
    * antiAffinity  是否开启反亲和。仅资源租户独享实例支持该特性。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'chargemode' => 'int32',
        'region' => null,
        'availableZone' => null,
        'arch' => null,
        'instancename' => null,
        'specification' => null,
        'cpuFlavor' => null,
        'vpcId' => null,
        'subnetId' => null,
        'securityGroup' => null,
        'count' => 'int32',
        'resTenant' => null,
        'antiAffinity' => null
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
    * chargemode  收费模式，当前仅支持按需收费（30）
    * region  需要创建独享引擎的局点，例如：北京四（cn-north-4）
    * availableZone  需要创建独享引擎的可用区，例如：北京四可用区1（cn-north-4a）
    * arch  独享引擎CPU架构，例如：x86与arm
    * instancename  独享引擎名称前缀
    * specification  独享引擎版本规格   - waf.instance.enterprise：企业版，对应控制台WI-100规格   - waf.instance.professional：专业版，对应控制台WI-500规格
    * cpuFlavor  独享引擎ECS规格，实例规格。创建资源租户类独享引擎可不填该参数，创建普通资源租户独享引擎必填该参数。普通租户类独享引擎具体支持的规格以waf控制台上支持的规格为准，企业版对应8U16G的ecs规格，专业版对应2U4G的ecs规格。
    * vpcId  独享引擎所在VPC的ID（通过调用虚拟私有云ListVpcs接口获取所有的VPC列表查询VPC的ID，如果需要关联企业项目，则调用虚拟私有云的接口也需要关联企业项目ID）
    * subnetId  独享引擎所在VPC内的子网ID（通过调用虚拟私有云ListSubnets接口获取所有的子网列表查询子网的ID，如果需要关联企业项目，则调用虚拟私有云的接口也需要关联企业项目ID）
    * securityGroup  独享引擎需要绑定的安全组ID（通过调用虚拟私有云ListSecurityGroups接口获取所有的安全组列表查询安全组的ID，如果需要关联企业项目，则调用虚拟私有云的接口也需要关联企业项目ID）
    * count  申请的独享引擎数量
    * resTenant  是否为资源租户类，默认值为false。   - true: 资源租户类   - false: 普通租户类
    * antiAffinity  是否开启反亲和。仅资源租户独享实例支持该特性。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'chargemode' => 'chargemode',
            'region' => 'region',
            'availableZone' => 'available_zone',
            'arch' => 'arch',
            'instancename' => 'instancename',
            'specification' => 'specification',
            'cpuFlavor' => 'cpu_flavor',
            'vpcId' => 'vpc_id',
            'subnetId' => 'subnet_id',
            'securityGroup' => 'security_group',
            'count' => 'count',
            'resTenant' => 'res_tenant',
            'antiAffinity' => 'anti_affinity'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * chargemode  收费模式，当前仅支持按需收费（30）
    * region  需要创建独享引擎的局点，例如：北京四（cn-north-4）
    * availableZone  需要创建独享引擎的可用区，例如：北京四可用区1（cn-north-4a）
    * arch  独享引擎CPU架构，例如：x86与arm
    * instancename  独享引擎名称前缀
    * specification  独享引擎版本规格   - waf.instance.enterprise：企业版，对应控制台WI-100规格   - waf.instance.professional：专业版，对应控制台WI-500规格
    * cpuFlavor  独享引擎ECS规格，实例规格。创建资源租户类独享引擎可不填该参数，创建普通资源租户独享引擎必填该参数。普通租户类独享引擎具体支持的规格以waf控制台上支持的规格为准，企业版对应8U16G的ecs规格，专业版对应2U4G的ecs规格。
    * vpcId  独享引擎所在VPC的ID（通过调用虚拟私有云ListVpcs接口获取所有的VPC列表查询VPC的ID，如果需要关联企业项目，则调用虚拟私有云的接口也需要关联企业项目ID）
    * subnetId  独享引擎所在VPC内的子网ID（通过调用虚拟私有云ListSubnets接口获取所有的子网列表查询子网的ID，如果需要关联企业项目，则调用虚拟私有云的接口也需要关联企业项目ID）
    * securityGroup  独享引擎需要绑定的安全组ID（通过调用虚拟私有云ListSecurityGroups接口获取所有的安全组列表查询安全组的ID，如果需要关联企业项目，则调用虚拟私有云的接口也需要关联企业项目ID）
    * count  申请的独享引擎数量
    * resTenant  是否为资源租户类，默认值为false。   - true: 资源租户类   - false: 普通租户类
    * antiAffinity  是否开启反亲和。仅资源租户独享实例支持该特性。
    *
    * @var string[]
    */
    protected static $setters = [
            'chargemode' => 'setChargemode',
            'region' => 'setRegion',
            'availableZone' => 'setAvailableZone',
            'arch' => 'setArch',
            'instancename' => 'setInstancename',
            'specification' => 'setSpecification',
            'cpuFlavor' => 'setCpuFlavor',
            'vpcId' => 'setVpcId',
            'subnetId' => 'setSubnetId',
            'securityGroup' => 'setSecurityGroup',
            'count' => 'setCount',
            'resTenant' => 'setResTenant',
            'antiAffinity' => 'setAntiAffinity'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * chargemode  收费模式，当前仅支持按需收费（30）
    * region  需要创建独享引擎的局点，例如：北京四（cn-north-4）
    * availableZone  需要创建独享引擎的可用区，例如：北京四可用区1（cn-north-4a）
    * arch  独享引擎CPU架构，例如：x86与arm
    * instancename  独享引擎名称前缀
    * specification  独享引擎版本规格   - waf.instance.enterprise：企业版，对应控制台WI-100规格   - waf.instance.professional：专业版，对应控制台WI-500规格
    * cpuFlavor  独享引擎ECS规格，实例规格。创建资源租户类独享引擎可不填该参数，创建普通资源租户独享引擎必填该参数。普通租户类独享引擎具体支持的规格以waf控制台上支持的规格为准，企业版对应8U16G的ecs规格，专业版对应2U4G的ecs规格。
    * vpcId  独享引擎所在VPC的ID（通过调用虚拟私有云ListVpcs接口获取所有的VPC列表查询VPC的ID，如果需要关联企业项目，则调用虚拟私有云的接口也需要关联企业项目ID）
    * subnetId  独享引擎所在VPC内的子网ID（通过调用虚拟私有云ListSubnets接口获取所有的子网列表查询子网的ID，如果需要关联企业项目，则调用虚拟私有云的接口也需要关联企业项目ID）
    * securityGroup  独享引擎需要绑定的安全组ID（通过调用虚拟私有云ListSecurityGroups接口获取所有的安全组列表查询安全组的ID，如果需要关联企业项目，则调用虚拟私有云的接口也需要关联企业项目ID）
    * count  申请的独享引擎数量
    * resTenant  是否为资源租户类，默认值为false。   - true: 资源租户类   - false: 普通租户类
    * antiAffinity  是否开启反亲和。仅资源租户独享实例支持该特性。
    *
    * @var string[]
    */
    protected static $getters = [
            'chargemode' => 'getChargemode',
            'region' => 'getRegion',
            'availableZone' => 'getAvailableZone',
            'arch' => 'getArch',
            'instancename' => 'getInstancename',
            'specification' => 'getSpecification',
            'cpuFlavor' => 'getCpuFlavor',
            'vpcId' => 'getVpcId',
            'subnetId' => 'getSubnetId',
            'securityGroup' => 'getSecurityGroup',
            'count' => 'getCount',
            'resTenant' => 'getResTenant',
            'antiAffinity' => 'getAntiAffinity'
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
        $this->container['chargemode'] = isset($data['chargemode']) ? $data['chargemode'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['availableZone'] = isset($data['availableZone']) ? $data['availableZone'] : null;
        $this->container['arch'] = isset($data['arch']) ? $data['arch'] : null;
        $this->container['instancename'] = isset($data['instancename']) ? $data['instancename'] : null;
        $this->container['specification'] = isset($data['specification']) ? $data['specification'] : null;
        $this->container['cpuFlavor'] = isset($data['cpuFlavor']) ? $data['cpuFlavor'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['securityGroup'] = isset($data['securityGroup']) ? $data['securityGroup'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['resTenant'] = isset($data['resTenant']) ? $data['resTenant'] : null;
        $this->container['antiAffinity'] = isset($data['antiAffinity']) ? $data['antiAffinity'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['region'] === null) {
            $invalidProperties[] = "'region' can't be null";
        }
        if ($this->container['availableZone'] === null) {
            $invalidProperties[] = "'availableZone' can't be null";
        }
        if ($this->container['arch'] === null) {
            $invalidProperties[] = "'arch' can't be null";
        }
        if ($this->container['instancename'] === null) {
            $invalidProperties[] = "'instancename' can't be null";
        }
        if ($this->container['specification'] === null) {
            $invalidProperties[] = "'specification' can't be null";
        }
        if ($this->container['vpcId'] === null) {
            $invalidProperties[] = "'vpcId' can't be null";
        }
        if ($this->container['subnetId'] === null) {
            $invalidProperties[] = "'subnetId' can't be null";
        }
        if ($this->container['securityGroup'] === null) {
            $invalidProperties[] = "'securityGroup' can't be null";
        }
        if ($this->container['count'] === null) {
            $invalidProperties[] = "'count' can't be null";
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
    * Gets chargemode
    *  收费模式，当前仅支持按需收费（30）
    *
    * @return int|null
    */
    public function getChargemode()
    {
        return $this->container['chargemode'];
    }

    /**
    * Sets chargemode
    *
    * @param int|null $chargemode 收费模式，当前仅支持按需收费（30）
    *
    * @return $this
    */
    public function setChargemode($chargemode)
    {
        $this->container['chargemode'] = $chargemode;
        return $this;
    }

    /**
    * Gets region
    *  需要创建独享引擎的局点，例如：北京四（cn-north-4）
    *
    * @return string
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string $region 需要创建独享引擎的局点，例如：北京四（cn-north-4）
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets availableZone
    *  需要创建独享引擎的可用区，例如：北京四可用区1（cn-north-4a）
    *
    * @return string
    */
    public function getAvailableZone()
    {
        return $this->container['availableZone'];
    }

    /**
    * Sets availableZone
    *
    * @param string $availableZone 需要创建独享引擎的可用区，例如：北京四可用区1（cn-north-4a）
    *
    * @return $this
    */
    public function setAvailableZone($availableZone)
    {
        $this->container['availableZone'] = $availableZone;
        return $this;
    }

    /**
    * Gets arch
    *  独享引擎CPU架构，例如：x86与arm
    *
    * @return string
    */
    public function getArch()
    {
        return $this->container['arch'];
    }

    /**
    * Sets arch
    *
    * @param string $arch 独享引擎CPU架构，例如：x86与arm
    *
    * @return $this
    */
    public function setArch($arch)
    {
        $this->container['arch'] = $arch;
        return $this;
    }

    /**
    * Gets instancename
    *  独享引擎名称前缀
    *
    * @return string
    */
    public function getInstancename()
    {
        return $this->container['instancename'];
    }

    /**
    * Sets instancename
    *
    * @param string $instancename 独享引擎名称前缀
    *
    * @return $this
    */
    public function setInstancename($instancename)
    {
        $this->container['instancename'] = $instancename;
        return $this;
    }

    /**
    * Gets specification
    *  独享引擎版本规格   - waf.instance.enterprise：企业版，对应控制台WI-100规格   - waf.instance.professional：专业版，对应控制台WI-500规格
    *
    * @return string
    */
    public function getSpecification()
    {
        return $this->container['specification'];
    }

    /**
    * Sets specification
    *
    * @param string $specification 独享引擎版本规格   - waf.instance.enterprise：企业版，对应控制台WI-100规格   - waf.instance.professional：专业版，对应控制台WI-500规格
    *
    * @return $this
    */
    public function setSpecification($specification)
    {
        $this->container['specification'] = $specification;
        return $this;
    }

    /**
    * Gets cpuFlavor
    *  独享引擎ECS规格，实例规格。创建资源租户类独享引擎可不填该参数，创建普通资源租户独享引擎必填该参数。普通租户类独享引擎具体支持的规格以waf控制台上支持的规格为准，企业版对应8U16G的ecs规格，专业版对应2U4G的ecs规格。
    *
    * @return string|null
    */
    public function getCpuFlavor()
    {
        return $this->container['cpuFlavor'];
    }

    /**
    * Sets cpuFlavor
    *
    * @param string|null $cpuFlavor 独享引擎ECS规格，实例规格。创建资源租户类独享引擎可不填该参数，创建普通资源租户独享引擎必填该参数。普通租户类独享引擎具体支持的规格以waf控制台上支持的规格为准，企业版对应8U16G的ecs规格，专业版对应2U4G的ecs规格。
    *
    * @return $this
    */
    public function setCpuFlavor($cpuFlavor)
    {
        $this->container['cpuFlavor'] = $cpuFlavor;
        return $this;
    }

    /**
    * Gets vpcId
    *  独享引擎所在VPC的ID（通过调用虚拟私有云ListVpcs接口获取所有的VPC列表查询VPC的ID，如果需要关联企业项目，则调用虚拟私有云的接口也需要关联企业项目ID）
    *
    * @return string
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string $vpcId 独享引擎所在VPC的ID（通过调用虚拟私有云ListVpcs接口获取所有的VPC列表查询VPC的ID，如果需要关联企业项目，则调用虚拟私有云的接口也需要关联企业项目ID）
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets subnetId
    *  独享引擎所在VPC内的子网ID（通过调用虚拟私有云ListSubnets接口获取所有的子网列表查询子网的ID，如果需要关联企业项目，则调用虚拟私有云的接口也需要关联企业项目ID）
    *
    * @return string
    */
    public function getSubnetId()
    {
        return $this->container['subnetId'];
    }

    /**
    * Sets subnetId
    *
    * @param string $subnetId 独享引擎所在VPC内的子网ID（通过调用虚拟私有云ListSubnets接口获取所有的子网列表查询子网的ID，如果需要关联企业项目，则调用虚拟私有云的接口也需要关联企业项目ID）
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
        return $this;
    }

    /**
    * Gets securityGroup
    *  独享引擎需要绑定的安全组ID（通过调用虚拟私有云ListSecurityGroups接口获取所有的安全组列表查询安全组的ID，如果需要关联企业项目，则调用虚拟私有云的接口也需要关联企业项目ID）
    *
    * @return string[]
    */
    public function getSecurityGroup()
    {
        return $this->container['securityGroup'];
    }

    /**
    * Sets securityGroup
    *
    * @param string[] $securityGroup 独享引擎需要绑定的安全组ID（通过调用虚拟私有云ListSecurityGroups接口获取所有的安全组列表查询安全组的ID，如果需要关联企业项目，则调用虚拟私有云的接口也需要关联企业项目ID）
    *
    * @return $this
    */
    public function setSecurityGroup($securityGroup)
    {
        $this->container['securityGroup'] = $securityGroup;
        return $this;
    }

    /**
    * Gets count
    *  申请的独享引擎数量
    *
    * @return int
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int $count 申请的独享引擎数量
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets resTenant
    *  是否为资源租户类，默认值为false。   - true: 资源租户类   - false: 普通租户类
    *
    * @return bool|null
    */
    public function getResTenant()
    {
        return $this->container['resTenant'];
    }

    /**
    * Sets resTenant
    *
    * @param bool|null $resTenant 是否为资源租户类，默认值为false。   - true: 资源租户类   - false: 普通租户类
    *
    * @return $this
    */
    public function setResTenant($resTenant)
    {
        $this->container['resTenant'] = $resTenant;
        return $this;
    }

    /**
    * Gets antiAffinity
    *  是否开启反亲和。仅资源租户独享实例支持该特性。
    *
    * @return bool|null
    */
    public function getAntiAffinity()
    {
        return $this->container['antiAffinity'];
    }

    /**
    * Sets antiAffinity
    *
    * @param bool|null $antiAffinity 是否开启反亲和。仅资源租户独享实例支持该特性。
    *
    * @return $this
    */
    public function setAntiAffinity($antiAffinity)
    {
        $this->container['antiAffinity'] = $antiAffinity;
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

