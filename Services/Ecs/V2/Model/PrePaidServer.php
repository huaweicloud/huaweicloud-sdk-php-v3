<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PrePaidServer implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PrePaidServer';

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'imageRef' => 'string',
            'flavorRef' => 'string',
            'name' => 'string',
            'userData' => 'string',
            'adminPass' => 'string',
            'keyName' => 'string',
            'vpcid' => 'string',
            'nics' => '\HuaweiCloud\SDK\Ecs\V2\Model\PrePaidServerNic[]',
            'publicip' => '\HuaweiCloud\SDK\Ecs\V2\Model\PrePaidServerPublicip',
            'count' => 'int',
            'isAutoRename' => 'bool',
            'rootVolume' => '\HuaweiCloud\SDK\Ecs\V2\Model\PrePaidServerRootVolume',
            'dataVolumes' => '\HuaweiCloud\SDK\Ecs\V2\Model\PrePaidServerDataVolume[]',
            'securityGroups' => '\HuaweiCloud\SDK\Ecs\V2\Model\PrePaidServerSecurityGroup[]',
            'availabilityZone' => 'string',
            'extendparam' => '\HuaweiCloud\SDK\Ecs\V2\Model\PrePaidServerExtendParam',
            'metadata' => 'map[string,string]',
            'osschedulerHints' => '\HuaweiCloud\SDK\Ecs\V2\Model\PrePaidServerSchedulerHints',
            'tags' => 'string[]',
            'serverTags' => '\HuaweiCloud\SDK\Ecs\V2\Model\PrePaidServerTag[]',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'imageRef' => null,
        'flavorRef' => null,
        'name' => null,
        'userData' => null,
        'adminPass' => null,
        'keyName' => null,
        'vpcid' => null,
        'nics' => null,
        'publicip' => null,
        'count' => 'int32',
        'isAutoRename' => null,
        'rootVolume' => null,
        'dataVolumes' => null,
        'securityGroups' => null,
        'availabilityZone' => null,
        'extendparam' => null,
        'metadata' => null,
        'osschedulerHints' => null,
        'tags' => null,
        'serverTags' => null,
        'description' => null
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
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'imageRef' => 'imageRef',
            'flavorRef' => 'flavorRef',
            'name' => 'name',
            'userData' => 'user_data',
            'adminPass' => 'adminPass',
            'keyName' => 'key_name',
            'vpcid' => 'vpcid',
            'nics' => 'nics',
            'publicip' => 'publicip',
            'count' => 'count',
            'isAutoRename' => 'isAutoRename',
            'rootVolume' => 'root_volume',
            'dataVolumes' => 'data_volumes',
            'securityGroups' => 'security_groups',
            'availabilityZone' => 'availability_zone',
            'extendparam' => 'extendparam',
            'metadata' => 'metadata',
            'osschedulerHints' => 'os:scheduler_hints',
            'tags' => 'tags',
            'serverTags' => 'server_tags',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @var string[]
    */
    protected static $setters = [
            'imageRef' => 'setImageRef',
            'flavorRef' => 'setFlavorRef',
            'name' => 'setName',
            'userData' => 'setUserData',
            'adminPass' => 'setAdminPass',
            'keyName' => 'setKeyName',
            'vpcid' => 'setVpcid',
            'nics' => 'setNics',
            'publicip' => 'setPublicip',
            'count' => 'setCount',
            'isAutoRename' => 'setIsAutoRename',
            'rootVolume' => 'setRootVolume',
            'dataVolumes' => 'setDataVolumes',
            'securityGroups' => 'setSecurityGroups',
            'availabilityZone' => 'setAvailabilityZone',
            'extendparam' => 'setExtendparam',
            'metadata' => 'setMetadata',
            'osschedulerHints' => 'setOsschedulerHints',
            'tags' => 'setTags',
            'serverTags' => 'setServerTags',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @var string[]
    */
    protected static $getters = [
            'imageRef' => 'getImageRef',
            'flavorRef' => 'getFlavorRef',
            'name' => 'getName',
            'userData' => 'getUserData',
            'adminPass' => 'getAdminPass',
            'keyName' => 'getKeyName',
            'vpcid' => 'getVpcid',
            'nics' => 'getNics',
            'publicip' => 'getPublicip',
            'count' => 'getCount',
            'isAutoRename' => 'getIsAutoRename',
            'rootVolume' => 'getRootVolume',
            'dataVolumes' => 'getDataVolumes',
            'securityGroups' => 'getSecurityGroups',
            'availabilityZone' => 'getAvailabilityZone',
            'extendparam' => 'getExtendparam',
            'metadata' => 'getMetadata',
            'osschedulerHints' => 'getOsschedulerHints',
            'tags' => 'getTags',
            'serverTags' => 'getServerTags',
            'description' => 'getDescription'
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
        $this->container['imageRef'] = isset($data['imageRef']) ? $data['imageRef'] : null;
        $this->container['flavorRef'] = isset($data['flavorRef']) ? $data['flavorRef'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['userData'] = isset($data['userData']) ? $data['userData'] : null;
        $this->container['adminPass'] = isset($data['adminPass']) ? $data['adminPass'] : null;
        $this->container['keyName'] = isset($data['keyName']) ? $data['keyName'] : null;
        $this->container['vpcid'] = isset($data['vpcid']) ? $data['vpcid'] : null;
        $this->container['nics'] = isset($data['nics']) ? $data['nics'] : null;
        $this->container['publicip'] = isset($data['publicip']) ? $data['publicip'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : 1;
        $this->container['isAutoRename'] = isset($data['isAutoRename']) ? $data['isAutoRename'] : null;
        $this->container['rootVolume'] = isset($data['rootVolume']) ? $data['rootVolume'] : null;
        $this->container['dataVolumes'] = isset($data['dataVolumes']) ? $data['dataVolumes'] : null;
        $this->container['securityGroups'] = isset($data['securityGroups']) ? $data['securityGroups'] : null;
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
        $this->container['extendparam'] = isset($data['extendparam']) ? $data['extendparam'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['osschedulerHints'] = isset($data['osschedulerHints']) ? $data['osschedulerHints'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['serverTags'] = isset($data['serverTags']) ? $data['serverTags'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['imageRef'] === null) {
            $invalidProperties[] = "'imageRef' can't be null";
        }
        if ($this->container['flavorRef'] === null) {
            $invalidProperties[] = "'flavorRef' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['userData']) && (mb_strlen($this->container['userData']) > 65535)) {
                $invalidProperties[] = "invalid value for 'userData', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['userData']) && (mb_strlen($this->container['userData']) < 0)) {
                $invalidProperties[] = "invalid value for 'userData', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['adminPass']) && (mb_strlen($this->container['adminPass']) > 26)) {
                $invalidProperties[] = "invalid value for 'adminPass', the character length must be smaller than or equal to 26.";
            }
            if (!is_null($this->container['adminPass']) && (mb_strlen($this->container['adminPass']) < 8)) {
                $invalidProperties[] = "invalid value for 'adminPass', the character length must be bigger than or equal to 8.";
            }
        if ($this->container['vpcid'] === null) {
            $invalidProperties[] = "'vpcid' can't be null";
        }
        if ($this->container['nics'] === null) {
            $invalidProperties[] = "'nics' can't be null";
        }
            if (!is_null($this->container['count']) && ($this->container['count'] > 500)) {
                $invalidProperties[] = "invalid value for 'count', must be smaller than or equal to 500.";
            }
            if (!is_null($this->container['count']) && ($this->container['count'] < 1)) {
                $invalidProperties[] = "invalid value for 'count', must be bigger than or equal to 1.";
            }
        if ($this->container['rootVolume'] === null) {
            $invalidProperties[] = "'rootVolume' can't be null";
        }
        if ($this->container['availabilityZone'] === null) {
            $invalidProperties[] = "'availabilityZone' can't be null";
        }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 85)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 85.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
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
    * Gets imageRef
    *
    * @return string
    */
    public function getImageRef()
    {
        return $this->container['imageRef'];
    }

    /**
    * Sets imageRef
    *
    * @param string $imageRef 待创建云服务器的系统镜像，需要指定已创建镜像的ID，ID格式为通用唯一识别码（Universally Unique Identifier，简称UUID）。
    *
    * @return $this
    */
    public function setImageRef($imageRef)
    {
        $this->container['imageRef'] = $imageRef;
        return $this;
    }

    /**
    * Gets flavorRef
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
    * @param string $flavorRef 待创建云服务器的系统规格的ID。  已上线的规格请参见《[弹性云服务器产品介绍](https://support.huaweicloud.com/ecs/index.html)》的“实例类型与规格”章节。
    *
    * @return $this
    */
    public function setFlavorRef($flavorRef)
    {
        $this->container['flavorRef'] = $flavorRef;
        return $this;
    }

    /**
    * Gets name
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 云服务器名称。  取值范围：  - 只能由中文字符、英文字母、数字及“_”、“-”、“.”组成，且长度为[1-64]个字符。 - 创建的云服务器器数量（count字段对应的值）大于1时，为区分不同云服务器，创建过程中系统会自动在名称后加“-0000”的类似标记。故此时名称的长度为[1-59]个字符。  > 说明： >  > 云服务器虚拟机内部(hostname)命名规则遵循 RFC 952和RFC 1123命名规范，建议使用a-zA-z或0-9以及中划线\"-\"组成的名称命名，\"_\"将在弹性云服务器内部默认转化为\"-\"。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets userData
    *
    * @return string|null
    */
    public function getUserData()
    {
        return $this->container['userData'];
    }

    /**
    * Sets userData
    *
    * @param string|null $userData 创建云服务器过程中待注入用户数据。支持注入文本、文本文件或gzip文件。  更多关于待注入用户数据的信息，请参见《弹性云服务器用户指南 》的“用户数据注入”章节。  约束：  - 注入内容，需要进行base64格式编码。注入内容（编码之前的内容）最大长度32KB。 - 创建密码方式鉴权的Linux弹性云服务器时，该字段可为root用户注入自定义初始化密码，具体注入密码的使用方法请参见背景信息（设置登录鉴权方式）。 示例（base64编码前）：  - Linux弹性云服务器  ``` #! /bin/bash echo user_test >> /home/user.txt  ```  - Windows弹性云服务器  ``` rem cmd echo 111 > c:\\aaa.tx ```
    *
    * @return $this
    */
    public function setUserData($userData)
    {
        $this->container['userData'] = $userData;
        return $this;
    }

    /**
    * Gets adminPass
    *
    * @return string|null
    */
    public function getAdminPass()
    {
        return $this->container['adminPass'];
    }

    /**
    * Sets adminPass
    *
    * @param string|null $adminPass 如果需要使用密码方式登录云服务器，可使用adminPass字段指定云服务器管理员帐户初始登录密码。其中，Linux管理员帐户为root，Windows管理员帐户为Administrator。具体使用方法请参见背景信息（设置登录鉴权方式）。  密码复杂度要求：   - 长度为8-26位。  - 密码至少必须包含大写字母、小写字母、数字和特殊字符（!@$%^-_=+[{}]:,./?）中的三种。 - 密码不能包含用户名或用户名的逆序。  - Windows系统密码不能包含用户名或用户名的逆序，不能包含用户名中超过两个连续字符的部分。
    *
    * @return $this
    */
    public function setAdminPass($adminPass)
    {
        $this->container['adminPass'] = $adminPass;
        return $this;
    }

    /**
    * Gets keyName
    *
    * @return string|null
    */
    public function getKeyName()
    {
        return $this->container['keyName'];
    }

    /**
    * Sets keyName
    *
    * @param string|null $keyName 如果需要使用SSH密钥方式登录云服务器，请指定已创建密钥的名称。  密钥可以通过密钥创建接口进行创建 [创建和导入SSH密钥](https://support.huaweicloud.com/api-ecs/zh-cn_topic_0020212678.html)（请参见），或使用SSH密钥查询接口查询已有的密钥（请参见[查询SSH密钥列表](https://support.huaweicloud.com/api-ecs/zh-cn_topic_0020212676.html) ）。
    *
    * @return $this
    */
    public function setKeyName($keyName)
    {
        $this->container['keyName'] = $keyName;
        return $this;
    }

    /**
    * Gets vpcid
    *
    * @return string
    */
    public function getVpcid()
    {
        return $this->container['vpcid'];
    }

    /**
    * Sets vpcid
    *
    * @param string $vpcid 待创建云服务器所属虚拟私有云（简称VPC），需要指定已创建VPC的ID，UUID格式。
    *
    * @return $this
    */
    public function setVpcid($vpcid)
    {
        $this->container['vpcid'] = $vpcid;
        return $this;
    }

    /**
    * Gets nics
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\PrePaidServerNic[]
    */
    public function getNics()
    {
        return $this->container['nics'];
    }

    /**
    * Sets nics
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\PrePaidServerNic[] $nics 待创建云服务器的网卡信息。  约束：  - 网卡对应的子网（subnet）必须属于vpcid对应的VPC。 - 当前单个云服务器支持最多挂载12张网卡。
    *
    * @return $this
    */
    public function setNics($nics)
    {
        $this->container['nics'] = $nics;
        return $this;
    }

    /**
    * Gets publicip
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\PrePaidServerPublicip|null
    */
    public function getPublicip()
    {
        return $this->container['publicip'];
    }

    /**
    * Sets publicip
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\PrePaidServerPublicip|null $publicip publicip
    *
    * @return $this
    */
    public function setPublicip($publicip)
    {
        $this->container['publicip'] = $publicip;
        return $this;
    }

    /**
    * Gets count
    *
    * @return int|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int|null $count 创建云服务器数量。  约束：  - 不传该字段时默认取值为1。 - 租户的配额足够时，最大值为500。
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets isAutoRename
    *
    * @return bool|null
    */
    public function getIsAutoRename()
    {
        return $this->container['isAutoRename'];
    }

    /**
    * Sets isAutoRename
    *
    * @param bool|null $isAutoRename 当批量创建弹性云服务器时，云服务器名称是否允许重名，当count大于1的时候该参数生效。默认为True。  - True，表示允许重名。 - False，表示不允许重名。
    *
    * @return $this
    */
    public function setIsAutoRename($isAutoRename)
    {
        $this->container['isAutoRename'] = $isAutoRename;
        return $this;
    }

    /**
    * Gets rootVolume
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\PrePaidServerRootVolume
    */
    public function getRootVolume()
    {
        return $this->container['rootVolume'];
    }

    /**
    * Sets rootVolume
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\PrePaidServerRootVolume $rootVolume rootVolume
    *
    * @return $this
    */
    public function setRootVolume($rootVolume)
    {
        $this->container['rootVolume'] = $rootVolume;
        return $this;
    }

    /**
    * Gets dataVolumes
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\PrePaidServerDataVolume[]|null
    */
    public function getDataVolumes()
    {
        return $this->container['dataVolumes'];
    }

    /**
    * Sets dataVolumes
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\PrePaidServerDataVolume[]|null $dataVolumes 云服务器对应数据盘相关配置。每一个数据结构代表一块待创建的数据盘。   约束：目前新创建的弹性云服务器最多可挂载23块数据盘。
    *
    * @return $this
    */
    public function setDataVolumes($dataVolumes)
    {
        $this->container['dataVolumes'] = $dataVolumes;
        return $this;
    }

    /**
    * Gets securityGroups
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\PrePaidServerSecurityGroup[]|null
    */
    public function getSecurityGroups()
    {
        return $this->container['securityGroups'];
    }

    /**
    * Sets securityGroups
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\PrePaidServerSecurityGroup[]|null $securityGroups 云服务器对应安全组信息。  约束：当该值指定为空时，默认给云服务器绑定default安全组。
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
    * @param string $availabilityZone 待创建云服务器所在的可用分区，需要指定可用分区（AZ）的名称。  请参考[地区和终端节点](https://developer.huaweicloud.com/endpoint)获取。
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
        return $this;
    }

    /**
    * Gets extendparam
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\PrePaidServerExtendParam|null
    */
    public function getExtendparam()
    {
        return $this->container['extendparam'];
    }

    /**
    * Sets extendparam
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\PrePaidServerExtendParam|null $extendparam extendparam
    *
    * @return $this
    */
    public function setExtendparam($extendparam)
    {
        $this->container['extendparam'] = $extendparam;
        return $this;
    }

    /**
    * Gets metadata
    *
    * @return map[string,string]|null
    */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
    * Sets metadata
    *
    * @param map[string,string]|null $metadata 用户自定义字段键值对。  > 说明： >  > - 最多可注入10对键值（Key/Value）。 > - 主键（Key）只能由大写字母（A-Z）、小写字母（a-z）、数字（0-9）、中划线（-）、下划线（_）、冒号（:）和小数点（.）组成，长度为[1-255]个字符。 > - 值（value）最大长度为255个字符。  系统预留字段  1. op_svc_userid : 用户ID      当extendparam结构中的chargingMode为prePaid（即创建包年包月付费的云服务器），且使用SSH秘钥方式登录云服务器时，该字段为必选字段。  2. agency_name  :  委托的名称   委托是由租户管理员在统一身份认证服务（Identity and Access Management，IAM）上创建的，可以为弹性云服务器提供访问云服务的临时凭证。  > 说明： >  > 委托获取、更新请参考如下步骤： >  > 1. 使用IAM服务提供的[查询委托列表](https://support.huaweicloud.com/api-iam/zh-cn_topic_0079467614.html)接口，获取有效可用的委托名称。 > 2. 使用[更新云服务器元数](https://support.huaweicloud.com/api-ecs/zh-cn_topic_0025560298.html)据接口，更新metadata中agency_name字段为新的委托名称。
    *
    * @return $this
    */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;
        return $this;
    }

    /**
    * Gets osschedulerHints
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\PrePaidServerSchedulerHints|null
    */
    public function getOsschedulerHints()
    {
        return $this->container['osschedulerHints'];
    }

    /**
    * Sets osschedulerHints
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\PrePaidServerSchedulerHints|null $osschedulerHints osschedulerHints
    *
    * @return $this
    */
    public function setOsschedulerHints($osschedulerHints)
    {
        $this->container['osschedulerHints'] = $osschedulerHints;
        return $this;
    }

    /**
    * Gets tags
    *
    * @return string[]|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param string[]|null $tags 弹性云服务器的标签。  标签的格式为“key.value”。其中，key的长度不超过36个字符，value的长度不超过43个字符。  标签命名时，需满足如下要求：  - 标签的key值只能包含大写字母（A~Z）、小写字母（a~z）、数字（0-9）、下划线（_）、中划线（-）以及中文字符。 - 标签的value值只能包含大写字母（A~Z）、小写字母（a~z）、数字（0-9）、下划线（_）、中划线（-）、小数点（.）以及中文字符。  > 说明： >  > 创建弹性云服务器时，一台弹性云服务器最多可以添加10个标签。 > 公有云新增server_tags字段，该字段与tags字段功能相同，支持的key、value取值范围更广，建议使用server_tags字段。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
        return $this;
    }

    /**
    * Gets serverTags
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\PrePaidServerTag[]|null
    */
    public function getServerTags()
    {
        return $this->container['serverTags'];
    }

    /**
    * Sets serverTags
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\PrePaidServerTag[]|null $serverTags 弹性云服务器的标签。  > 说明： >  > 创建弹性云服务器时，一台弹性云服务器最多可以添加10个标签。 > 公有云新增server_tags字段，该字段与tags字段功能相同，支持的key、value取值范围更广，建议使用server_tags字段。
    *
    * @return $this
    */
    public function setServerTags($serverTags)
    {
        $this->container['serverTags'] = $serverTags;
        return $this;
    }

    /**
    * Gets description
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
    * @param string|null $description 云服务器描述信息，默认为空字符串。  - 长度最多允许85个字符。 - 不能包含“<” 和 “>”。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

