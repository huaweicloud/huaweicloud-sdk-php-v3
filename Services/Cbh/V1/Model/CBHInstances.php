<?php

namespace HuaweiCloud\SDK\Cbh\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CBHInstances implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CBHInstances';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * flavorRef  待创建云堡垒机规格ID，例如： - cbh.basic.50 - cbh.enhance.50 已上线的规格请参见《云堡垒机产品介绍》的[服务版本差异](https://support.huaweicloud.com/productdesc-cbh/cbh_01_0010.html)章节。
    * instanceName  云堡垒机实例名称，取值范围： - 只能由中文字符、英文字母、数字及“_”、“-”组成，且长度为[1-64]个字符。 例如：CBH-6b8e
    * vpcId  待创建云服务器所属虚拟私有云（简称VPC），需要指定已创建VPC的ID，UUID格式。 VPC的ID可以从控制台或者参考《虚拟私有云接口参考》的“查询VPC”章节获取。 例如：03211ecf-697e-4306-a7a0-6e939bf948de
    * nics  nics
    * publicIp  publicIp
    * securityGroups  securityGroups
    * availabilityZone  创建云堡垒机所在的可用区，需要指定可用区名称。 可参考[地区和终端节点](https://developer.huaweicloud.com/endpoint)获取
    * slaveAvailabilityZone  创建云堡垒机所在的备机可用区，需要指定备机可用区名称。(当前字段未启用,填写默认值null) 可参考[地区和终端节点](https://developer.huaweicloud.com/endpoint)获取
    * comment  云堡垒机实例描述信息。
    * region  云服务所在局点ID。
    * hxPassword  堡垒机实例前端登录密码。密码规则：8-32位,不能包含amdin或nidma及其大写形式,必须包含大小写数字特殊字符四种类型中的三种。
    * bastionType  堡垒机实例类型，填写“OEM”即可。
    * ipv6Enable  是否支持IPV6，不填默认为false。
    * enterpriseProjectId  企业项目ID，不填默认为0。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'flavorRef' => 'string',
            'instanceName' => 'string',
            'vpcId' => 'string',
            'nics' => '\HuaweiCloud\SDK\Cbh\V1\Model\Nics[]',
            'publicIp' => '\HuaweiCloud\SDK\Cbh\V1\Model\PublicIp',
            'securityGroups' => '\HuaweiCloud\SDK\Cbh\V1\Model\SecurityGroup[]',
            'availabilityZone' => 'string',
            'slaveAvailabilityZone' => 'string',
            'comment' => 'string',
            'region' => 'string',
            'hxPassword' => 'string',
            'bastionType' => 'string',
            'ipv6Enable' => 'bool',
            'enterpriseProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * flavorRef  待创建云堡垒机规格ID，例如： - cbh.basic.50 - cbh.enhance.50 已上线的规格请参见《云堡垒机产品介绍》的[服务版本差异](https://support.huaweicloud.com/productdesc-cbh/cbh_01_0010.html)章节。
    * instanceName  云堡垒机实例名称，取值范围： - 只能由中文字符、英文字母、数字及“_”、“-”组成，且长度为[1-64]个字符。 例如：CBH-6b8e
    * vpcId  待创建云服务器所属虚拟私有云（简称VPC），需要指定已创建VPC的ID，UUID格式。 VPC的ID可以从控制台或者参考《虚拟私有云接口参考》的“查询VPC”章节获取。 例如：03211ecf-697e-4306-a7a0-6e939bf948de
    * nics  nics
    * publicIp  publicIp
    * securityGroups  securityGroups
    * availabilityZone  创建云堡垒机所在的可用区，需要指定可用区名称。 可参考[地区和终端节点](https://developer.huaweicloud.com/endpoint)获取
    * slaveAvailabilityZone  创建云堡垒机所在的备机可用区，需要指定备机可用区名称。(当前字段未启用,填写默认值null) 可参考[地区和终端节点](https://developer.huaweicloud.com/endpoint)获取
    * comment  云堡垒机实例描述信息。
    * region  云服务所在局点ID。
    * hxPassword  堡垒机实例前端登录密码。密码规则：8-32位,不能包含amdin或nidma及其大写形式,必须包含大小写数字特殊字符四种类型中的三种。
    * bastionType  堡垒机实例类型，填写“OEM”即可。
    * ipv6Enable  是否支持IPV6，不填默认为false。
    * enterpriseProjectId  企业项目ID，不填默认为0。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'flavorRef' => null,
        'instanceName' => null,
        'vpcId' => null,
        'nics' => null,
        'publicIp' => null,
        'securityGroups' => null,
        'availabilityZone' => null,
        'slaveAvailabilityZone' => null,
        'comment' => null,
        'region' => null,
        'hxPassword' => null,
        'bastionType' => null,
        'ipv6Enable' => null,
        'enterpriseProjectId' => null
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
    * flavorRef  待创建云堡垒机规格ID，例如： - cbh.basic.50 - cbh.enhance.50 已上线的规格请参见《云堡垒机产品介绍》的[服务版本差异](https://support.huaweicloud.com/productdesc-cbh/cbh_01_0010.html)章节。
    * instanceName  云堡垒机实例名称，取值范围： - 只能由中文字符、英文字母、数字及“_”、“-”组成，且长度为[1-64]个字符。 例如：CBH-6b8e
    * vpcId  待创建云服务器所属虚拟私有云（简称VPC），需要指定已创建VPC的ID，UUID格式。 VPC的ID可以从控制台或者参考《虚拟私有云接口参考》的“查询VPC”章节获取。 例如：03211ecf-697e-4306-a7a0-6e939bf948de
    * nics  nics
    * publicIp  publicIp
    * securityGroups  securityGroups
    * availabilityZone  创建云堡垒机所在的可用区，需要指定可用区名称。 可参考[地区和终端节点](https://developer.huaweicloud.com/endpoint)获取
    * slaveAvailabilityZone  创建云堡垒机所在的备机可用区，需要指定备机可用区名称。(当前字段未启用,填写默认值null) 可参考[地区和终端节点](https://developer.huaweicloud.com/endpoint)获取
    * comment  云堡垒机实例描述信息。
    * region  云服务所在局点ID。
    * hxPassword  堡垒机实例前端登录密码。密码规则：8-32位,不能包含amdin或nidma及其大写形式,必须包含大小写数字特殊字符四种类型中的三种。
    * bastionType  堡垒机实例类型，填写“OEM”即可。
    * ipv6Enable  是否支持IPV6，不填默认为false。
    * enterpriseProjectId  企业项目ID，不填默认为0。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'flavorRef' => 'flavor_ref',
            'instanceName' => 'instance_name',
            'vpcId' => 'vpc_id',
            'nics' => 'nics',
            'publicIp' => 'public_ip',
            'securityGroups' => 'security_groups',
            'availabilityZone' => 'availability_zone',
            'slaveAvailabilityZone' => 'slave_availability_zone',
            'comment' => 'comment',
            'region' => 'region',
            'hxPassword' => 'hx_password',
            'bastionType' => 'bastion_type',
            'ipv6Enable' => 'ipv6_enable',
            'enterpriseProjectId' => 'enterprise_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * flavorRef  待创建云堡垒机规格ID，例如： - cbh.basic.50 - cbh.enhance.50 已上线的规格请参见《云堡垒机产品介绍》的[服务版本差异](https://support.huaweicloud.com/productdesc-cbh/cbh_01_0010.html)章节。
    * instanceName  云堡垒机实例名称，取值范围： - 只能由中文字符、英文字母、数字及“_”、“-”组成，且长度为[1-64]个字符。 例如：CBH-6b8e
    * vpcId  待创建云服务器所属虚拟私有云（简称VPC），需要指定已创建VPC的ID，UUID格式。 VPC的ID可以从控制台或者参考《虚拟私有云接口参考》的“查询VPC”章节获取。 例如：03211ecf-697e-4306-a7a0-6e939bf948de
    * nics  nics
    * publicIp  publicIp
    * securityGroups  securityGroups
    * availabilityZone  创建云堡垒机所在的可用区，需要指定可用区名称。 可参考[地区和终端节点](https://developer.huaweicloud.com/endpoint)获取
    * slaveAvailabilityZone  创建云堡垒机所在的备机可用区，需要指定备机可用区名称。(当前字段未启用,填写默认值null) 可参考[地区和终端节点](https://developer.huaweicloud.com/endpoint)获取
    * comment  云堡垒机实例描述信息。
    * region  云服务所在局点ID。
    * hxPassword  堡垒机实例前端登录密码。密码规则：8-32位,不能包含amdin或nidma及其大写形式,必须包含大小写数字特殊字符四种类型中的三种。
    * bastionType  堡垒机实例类型，填写“OEM”即可。
    * ipv6Enable  是否支持IPV6，不填默认为false。
    * enterpriseProjectId  企业项目ID，不填默认为0。
    *
    * @var string[]
    */
    protected static $setters = [
            'flavorRef' => 'setFlavorRef',
            'instanceName' => 'setInstanceName',
            'vpcId' => 'setVpcId',
            'nics' => 'setNics',
            'publicIp' => 'setPublicIp',
            'securityGroups' => 'setSecurityGroups',
            'availabilityZone' => 'setAvailabilityZone',
            'slaveAvailabilityZone' => 'setSlaveAvailabilityZone',
            'comment' => 'setComment',
            'region' => 'setRegion',
            'hxPassword' => 'setHxPassword',
            'bastionType' => 'setBastionType',
            'ipv6Enable' => 'setIpv6Enable',
            'enterpriseProjectId' => 'setEnterpriseProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * flavorRef  待创建云堡垒机规格ID，例如： - cbh.basic.50 - cbh.enhance.50 已上线的规格请参见《云堡垒机产品介绍》的[服务版本差异](https://support.huaweicloud.com/productdesc-cbh/cbh_01_0010.html)章节。
    * instanceName  云堡垒机实例名称，取值范围： - 只能由中文字符、英文字母、数字及“_”、“-”组成，且长度为[1-64]个字符。 例如：CBH-6b8e
    * vpcId  待创建云服务器所属虚拟私有云（简称VPC），需要指定已创建VPC的ID，UUID格式。 VPC的ID可以从控制台或者参考《虚拟私有云接口参考》的“查询VPC”章节获取。 例如：03211ecf-697e-4306-a7a0-6e939bf948de
    * nics  nics
    * publicIp  publicIp
    * securityGroups  securityGroups
    * availabilityZone  创建云堡垒机所在的可用区，需要指定可用区名称。 可参考[地区和终端节点](https://developer.huaweicloud.com/endpoint)获取
    * slaveAvailabilityZone  创建云堡垒机所在的备机可用区，需要指定备机可用区名称。(当前字段未启用,填写默认值null) 可参考[地区和终端节点](https://developer.huaweicloud.com/endpoint)获取
    * comment  云堡垒机实例描述信息。
    * region  云服务所在局点ID。
    * hxPassword  堡垒机实例前端登录密码。密码规则：8-32位,不能包含amdin或nidma及其大写形式,必须包含大小写数字特殊字符四种类型中的三种。
    * bastionType  堡垒机实例类型，填写“OEM”即可。
    * ipv6Enable  是否支持IPV6，不填默认为false。
    * enterpriseProjectId  企业项目ID，不填默认为0。
    *
    * @var string[]
    */
    protected static $getters = [
            'flavorRef' => 'getFlavorRef',
            'instanceName' => 'getInstanceName',
            'vpcId' => 'getVpcId',
            'nics' => 'getNics',
            'publicIp' => 'getPublicIp',
            'securityGroups' => 'getSecurityGroups',
            'availabilityZone' => 'getAvailabilityZone',
            'slaveAvailabilityZone' => 'getSlaveAvailabilityZone',
            'comment' => 'getComment',
            'region' => 'getRegion',
            'hxPassword' => 'getHxPassword',
            'bastionType' => 'getBastionType',
            'ipv6Enable' => 'getIpv6Enable',
            'enterpriseProjectId' => 'getEnterpriseProjectId'
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
        $this->container['flavorRef'] = isset($data['flavorRef']) ? $data['flavorRef'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['nics'] = isset($data['nics']) ? $data['nics'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['securityGroups'] = isset($data['securityGroups']) ? $data['securityGroups'] : null;
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
        $this->container['slaveAvailabilityZone'] = isset($data['slaveAvailabilityZone']) ? $data['slaveAvailabilityZone'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['hxPassword'] = isset($data['hxPassword']) ? $data['hxPassword'] : null;
        $this->container['bastionType'] = isset($data['bastionType']) ? $data['bastionType'] : null;
        $this->container['ipv6Enable'] = isset($data['ipv6Enable']) ? $data['ipv6Enable'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['flavorRef'] === null) {
            $invalidProperties[] = "'flavorRef' can't be null";
        }
            if ((mb_strlen($this->container['flavorRef']) > 64)) {
                $invalidProperties[] = "invalid value for 'flavorRef', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['flavorRef']) < 0)) {
                $invalidProperties[] = "invalid value for 'flavorRef', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['instanceName'] === null) {
            $invalidProperties[] = "'instanceName' can't be null";
        }
            if ((mb_strlen($this->container['instanceName']) > 64)) {
                $invalidProperties[] = "invalid value for 'instanceName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['instanceName']) < 0)) {
                $invalidProperties[] = "invalid value for 'instanceName', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['vpcId'] === null) {
            $invalidProperties[] = "'vpcId' can't be null";
        }
            if ((mb_strlen($this->container['vpcId']) > 64)) {
                $invalidProperties[] = "invalid value for 'vpcId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['vpcId']) < 0)) {
                $invalidProperties[] = "invalid value for 'vpcId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['nics'] === null) {
            $invalidProperties[] = "'nics' can't be null";
        }
        if ($this->container['publicIp'] === null) {
            $invalidProperties[] = "'publicIp' can't be null";
        }
        if ($this->container['securityGroups'] === null) {
            $invalidProperties[] = "'securityGroups' can't be null";
        }
        if ($this->container['availabilityZone'] === null) {
            $invalidProperties[] = "'availabilityZone' can't be null";
        }
            if ((mb_strlen($this->container['availabilityZone']) > 64)) {
                $invalidProperties[] = "invalid value for 'availabilityZone', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['availabilityZone']) < 0)) {
                $invalidProperties[] = "invalid value for 'availabilityZone', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['slaveAvailabilityZone']) && (mb_strlen($this->container['slaveAvailabilityZone']) > 64)) {
                $invalidProperties[] = "invalid value for 'slaveAvailabilityZone', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['slaveAvailabilityZone']) && (mb_strlen($this->container['slaveAvailabilityZone']) < 0)) {
                $invalidProperties[] = "invalid value for 'slaveAvailabilityZone', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['comment']) && (mb_strlen($this->container['comment']) > 64)) {
                $invalidProperties[] = "invalid value for 'comment', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['comment']) && (mb_strlen($this->container['comment']) < 0)) {
                $invalidProperties[] = "invalid value for 'comment', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['region'] === null) {
            $invalidProperties[] = "'region' can't be null";
        }
            if ((mb_strlen($this->container['region']) > 64)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['region']) < 0)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['hxPassword'] === null) {
            $invalidProperties[] = "'hxPassword' can't be null";
        }
            if ((mb_strlen($this->container['hxPassword']) > 64)) {
                $invalidProperties[] = "invalid value for 'hxPassword', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['hxPassword']) < 0)) {
                $invalidProperties[] = "invalid value for 'hxPassword', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['bastionType'] === null) {
            $invalidProperties[] = "'bastionType' can't be null";
        }
            if ((mb_strlen($this->container['bastionType']) > 64)) {
                $invalidProperties[] = "invalid value for 'bastionType', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['bastionType']) < 0)) {
                $invalidProperties[] = "invalid value for 'bastionType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 0.";
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
    * Gets flavorRef
    *  待创建云堡垒机规格ID，例如： - cbh.basic.50 - cbh.enhance.50 已上线的规格请参见《云堡垒机产品介绍》的[服务版本差异](https://support.huaweicloud.com/productdesc-cbh/cbh_01_0010.html)章节。
    *
    * @return string
    */
    public function getFlavorRef()
    {
        return $this->container['flavorRef'];
    }

    /**
    * Sets flavorRef
    *
    * @param string $flavorRef 待创建云堡垒机规格ID，例如： - cbh.basic.50 - cbh.enhance.50 已上线的规格请参见《云堡垒机产品介绍》的[服务版本差异](https://support.huaweicloud.com/productdesc-cbh/cbh_01_0010.html)章节。
    *
    * @return $this
    */
    public function setFlavorRef($flavorRef)
    {
        $this->container['flavorRef'] = $flavorRef;
        return $this;
    }

    /**
    * Gets instanceName
    *  云堡垒机实例名称，取值范围： - 只能由中文字符、英文字母、数字及“_”、“-”组成，且长度为[1-64]个字符。 例如：CBH-6b8e
    *
    * @return string
    */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
    * Sets instanceName
    *
    * @param string $instanceName 云堡垒机实例名称，取值范围： - 只能由中文字符、英文字母、数字及“_”、“-”组成，且长度为[1-64]个字符。 例如：CBH-6b8e
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets vpcId
    *  待创建云服务器所属虚拟私有云（简称VPC），需要指定已创建VPC的ID，UUID格式。 VPC的ID可以从控制台或者参考《虚拟私有云接口参考》的“查询VPC”章节获取。 例如：03211ecf-697e-4306-a7a0-6e939bf948de
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
    * @param string $vpcId 待创建云服务器所属虚拟私有云（简称VPC），需要指定已创建VPC的ID，UUID格式。 VPC的ID可以从控制台或者参考《虚拟私有云接口参考》的“查询VPC”章节获取。 例如：03211ecf-697e-4306-a7a0-6e939bf948de
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets nics
    *  nics
    *
    * @return \HuaweiCloud\SDK\Cbh\V1\Model\Nics[]
    */
    public function getNics()
    {
        return $this->container['nics'];
    }

    /**
    * Sets nics
    *
    * @param \HuaweiCloud\SDK\Cbh\V1\Model\Nics[] $nics nics
    *
    * @return $this
    */
    public function setNics($nics)
    {
        $this->container['nics'] = $nics;
        return $this;
    }

    /**
    * Gets publicIp
    *  publicIp
    *
    * @return \HuaweiCloud\SDK\Cbh\V1\Model\PublicIp
    */
    public function getPublicIp()
    {
        return $this->container['publicIp'];
    }

    /**
    * Sets publicIp
    *
    * @param \HuaweiCloud\SDK\Cbh\V1\Model\PublicIp $publicIp publicIp
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets securityGroups
    *  securityGroups
    *
    * @return \HuaweiCloud\SDK\Cbh\V1\Model\SecurityGroup[]
    */
    public function getSecurityGroups()
    {
        return $this->container['securityGroups'];
    }

    /**
    * Sets securityGroups
    *
    * @param \HuaweiCloud\SDK\Cbh\V1\Model\SecurityGroup[] $securityGroups securityGroups
    *
    * @return $this
    */
    public function setSecurityGroups($securityGroups)
    {
        $this->container['securityGroups'] = $securityGroups;
        return $this;
    }

    /**
    * Gets availabilityZone
    *  创建云堡垒机所在的可用区，需要指定可用区名称。 可参考[地区和终端节点](https://developer.huaweicloud.com/endpoint)获取
    *
    * @return string
    */
    public function getAvailabilityZone()
    {
        return $this->container['availabilityZone'];
    }

    /**
    * Sets availabilityZone
    *
    * @param string $availabilityZone 创建云堡垒机所在的可用区，需要指定可用区名称。 可参考[地区和终端节点](https://developer.huaweicloud.com/endpoint)获取
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
        return $this;
    }

    /**
    * Gets slaveAvailabilityZone
    *  创建云堡垒机所在的备机可用区，需要指定备机可用区名称。(当前字段未启用,填写默认值null) 可参考[地区和终端节点](https://developer.huaweicloud.com/endpoint)获取
    *
    * @return string|null
    */
    public function getSlaveAvailabilityZone()
    {
        return $this->container['slaveAvailabilityZone'];
    }

    /**
    * Sets slaveAvailabilityZone
    *
    * @param string|null $slaveAvailabilityZone 创建云堡垒机所在的备机可用区，需要指定备机可用区名称。(当前字段未启用,填写默认值null) 可参考[地区和终端节点](https://developer.huaweicloud.com/endpoint)获取
    *
    * @return $this
    */
    public function setSlaveAvailabilityZone($slaveAvailabilityZone)
    {
        $this->container['slaveAvailabilityZone'] = $slaveAvailabilityZone;
        return $this;
    }

    /**
    * Gets comment
    *  云堡垒机实例描述信息。
    *
    * @return string|null
    */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
    * Sets comment
    *
    * @param string|null $comment 云堡垒机实例描述信息。
    *
    * @return $this
    */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;
        return $this;
    }

    /**
    * Gets region
    *  云服务所在局点ID。
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
    * @param string $region 云服务所在局点ID。
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets hxPassword
    *  堡垒机实例前端登录密码。密码规则：8-32位,不能包含amdin或nidma及其大写形式,必须包含大小写数字特殊字符四种类型中的三种。
    *
    * @return string
    */
    public function getHxPassword()
    {
        return $this->container['hxPassword'];
    }

    /**
    * Sets hxPassword
    *
    * @param string $hxPassword 堡垒机实例前端登录密码。密码规则：8-32位,不能包含amdin或nidma及其大写形式,必须包含大小写数字特殊字符四种类型中的三种。
    *
    * @return $this
    */
    public function setHxPassword($hxPassword)
    {
        $this->container['hxPassword'] = $hxPassword;
        return $this;
    }

    /**
    * Gets bastionType
    *  堡垒机实例类型，填写“OEM”即可。
    *
    * @return string
    */
    public function getBastionType()
    {
        return $this->container['bastionType'];
    }

    /**
    * Sets bastionType
    *
    * @param string $bastionType 堡垒机实例类型，填写“OEM”即可。
    *
    * @return $this
    */
    public function setBastionType($bastionType)
    {
        $this->container['bastionType'] = $bastionType;
        return $this;
    }

    /**
    * Gets ipv6Enable
    *  是否支持IPV6，不填默认为false。
    *
    * @return bool|null
    */
    public function getIpv6Enable()
    {
        return $this->container['ipv6Enable'];
    }

    /**
    * Sets ipv6Enable
    *
    * @param bool|null $ipv6Enable 是否支持IPV6，不填默认为false。
    *
    * @return $this
    */
    public function setIpv6Enable($ipv6Enable)
    {
        $this->container['ipv6Enable'] = $ipv6Enable;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID，不填默认为0。
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 企业项目ID，不填默认为0。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
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

