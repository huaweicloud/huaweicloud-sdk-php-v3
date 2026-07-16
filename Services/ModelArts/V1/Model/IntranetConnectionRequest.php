<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IntranetConnectionRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IntranetConnectionRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * serviceId  **参数解释：** 服务ID，在[创建服务](CreateInferService.xml)时即可在返回体中获取，也可通过[查询服务列表](ListInferServices.xml)获取当前用户拥有的服务，其中service_id字段即为服务ID。 **约束限制：** type为SERVICE时，必填。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * scene  **参数解释：** 内网访问场景。 **约束限制：** 不涉及。 **取值范围：** - VPC：用户VPC网络接入场景 - POOL：用户资源池网络接入场景 **默认取值：** 不涉及。
    * vpcId  **参数解释：** VPC ID，VPC场景需要填写。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * subnetId  **参数解释：** 子网 ID，VPC场景需要填写。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * poolId  **参数解释：** 资源池id POOL场景需要填写。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * type  **参数解释：** 内网访问接入粒度，不填默认为SERVICE **约束限制：** 不涉及。 **取值范围：** - SERVICE：服务粒度。 - GLOBAL：global粒度。 **默认取值：** 默认为SERVICE。
    * dispatcherGroupId  **参数解释：** 服务绑定的dispatcher组ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * customUrls  **参数解释：** 自定义URL，格式为：{协议}://{域名}{路径} **约束限制：** url个数不超过10个，单个url长度不超过1024。 **取值范围：** - 协议范围：http，https，wss，ws。 - 域名范围：支持域名或IP:端口。域名长度不超过63，包含字母、数字、中划线（-)且不能以中划线（-)开头或结尾，顶级域名不能包含数字；端口范围为1-65535。 - 路径范围：斜杠（/）开头，仅包含字母、数字、点号（.）、中划线（-)、下划线（_）、斜杠（/）的路径。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'serviceId' => 'string',
            'scene' => 'string',
            'vpcId' => 'string',
            'subnetId' => 'string',
            'poolId' => 'string',
            'type' => 'string',
            'dispatcherGroupId' => 'string',
            'customUrls' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * serviceId  **参数解释：** 服务ID，在[创建服务](CreateInferService.xml)时即可在返回体中获取，也可通过[查询服务列表](ListInferServices.xml)获取当前用户拥有的服务，其中service_id字段即为服务ID。 **约束限制：** type为SERVICE时，必填。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * scene  **参数解释：** 内网访问场景。 **约束限制：** 不涉及。 **取值范围：** - VPC：用户VPC网络接入场景 - POOL：用户资源池网络接入场景 **默认取值：** 不涉及。
    * vpcId  **参数解释：** VPC ID，VPC场景需要填写。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * subnetId  **参数解释：** 子网 ID，VPC场景需要填写。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * poolId  **参数解释：** 资源池id POOL场景需要填写。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * type  **参数解释：** 内网访问接入粒度，不填默认为SERVICE **约束限制：** 不涉及。 **取值范围：** - SERVICE：服务粒度。 - GLOBAL：global粒度。 **默认取值：** 默认为SERVICE。
    * dispatcherGroupId  **参数解释：** 服务绑定的dispatcher组ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * customUrls  **参数解释：** 自定义URL，格式为：{协议}://{域名}{路径} **约束限制：** url个数不超过10个，单个url长度不超过1024。 **取值范围：** - 协议范围：http，https，wss，ws。 - 域名范围：支持域名或IP:端口。域名长度不超过63，包含字母、数字、中划线（-)且不能以中划线（-)开头或结尾，顶级域名不能包含数字；端口范围为1-65535。 - 路径范围：斜杠（/）开头，仅包含字母、数字、点号（.）、中划线（-)、下划线（_）、斜杠（/）的路径。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'serviceId' => null,
        'scene' => null,
        'vpcId' => null,
        'subnetId' => null,
        'poolId' => null,
        'type' => null,
        'dispatcherGroupId' => null,
        'customUrls' => null
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
    * serviceId  **参数解释：** 服务ID，在[创建服务](CreateInferService.xml)时即可在返回体中获取，也可通过[查询服务列表](ListInferServices.xml)获取当前用户拥有的服务，其中service_id字段即为服务ID。 **约束限制：** type为SERVICE时，必填。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * scene  **参数解释：** 内网访问场景。 **约束限制：** 不涉及。 **取值范围：** - VPC：用户VPC网络接入场景 - POOL：用户资源池网络接入场景 **默认取值：** 不涉及。
    * vpcId  **参数解释：** VPC ID，VPC场景需要填写。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * subnetId  **参数解释：** 子网 ID，VPC场景需要填写。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * poolId  **参数解释：** 资源池id POOL场景需要填写。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * type  **参数解释：** 内网访问接入粒度，不填默认为SERVICE **约束限制：** 不涉及。 **取值范围：** - SERVICE：服务粒度。 - GLOBAL：global粒度。 **默认取值：** 默认为SERVICE。
    * dispatcherGroupId  **参数解释：** 服务绑定的dispatcher组ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * customUrls  **参数解释：** 自定义URL，格式为：{协议}://{域名}{路径} **约束限制：** url个数不超过10个，单个url长度不超过1024。 **取值范围：** - 协议范围：http，https，wss，ws。 - 域名范围：支持域名或IP:端口。域名长度不超过63，包含字母、数字、中划线（-)且不能以中划线（-)开头或结尾，顶级域名不能包含数字；端口范围为1-65535。 - 路径范围：斜杠（/）开头，仅包含字母、数字、点号（.）、中划线（-)、下划线（_）、斜杠（/）的路径。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'serviceId' => 'service_id',
            'scene' => 'scene',
            'vpcId' => 'vpc_id',
            'subnetId' => 'subnet_id',
            'poolId' => 'pool_id',
            'type' => 'type',
            'dispatcherGroupId' => 'dispatcher_group_id',
            'customUrls' => 'custom_urls'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * serviceId  **参数解释：** 服务ID，在[创建服务](CreateInferService.xml)时即可在返回体中获取，也可通过[查询服务列表](ListInferServices.xml)获取当前用户拥有的服务，其中service_id字段即为服务ID。 **约束限制：** type为SERVICE时，必填。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * scene  **参数解释：** 内网访问场景。 **约束限制：** 不涉及。 **取值范围：** - VPC：用户VPC网络接入场景 - POOL：用户资源池网络接入场景 **默认取值：** 不涉及。
    * vpcId  **参数解释：** VPC ID，VPC场景需要填写。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * subnetId  **参数解释：** 子网 ID，VPC场景需要填写。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * poolId  **参数解释：** 资源池id POOL场景需要填写。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * type  **参数解释：** 内网访问接入粒度，不填默认为SERVICE **约束限制：** 不涉及。 **取值范围：** - SERVICE：服务粒度。 - GLOBAL：global粒度。 **默认取值：** 默认为SERVICE。
    * dispatcherGroupId  **参数解释：** 服务绑定的dispatcher组ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * customUrls  **参数解释：** 自定义URL，格式为：{协议}://{域名}{路径} **约束限制：** url个数不超过10个，单个url长度不超过1024。 **取值范围：** - 协议范围：http，https，wss，ws。 - 域名范围：支持域名或IP:端口。域名长度不超过63，包含字母、数字、中划线（-)且不能以中划线（-)开头或结尾，顶级域名不能包含数字；端口范围为1-65535。 - 路径范围：斜杠（/）开头，仅包含字母、数字、点号（.）、中划线（-)、下划线（_）、斜杠（/）的路径。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'serviceId' => 'setServiceId',
            'scene' => 'setScene',
            'vpcId' => 'setVpcId',
            'subnetId' => 'setSubnetId',
            'poolId' => 'setPoolId',
            'type' => 'setType',
            'dispatcherGroupId' => 'setDispatcherGroupId',
            'customUrls' => 'setCustomUrls'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * serviceId  **参数解释：** 服务ID，在[创建服务](CreateInferService.xml)时即可在返回体中获取，也可通过[查询服务列表](ListInferServices.xml)获取当前用户拥有的服务，其中service_id字段即为服务ID。 **约束限制：** type为SERVICE时，必填。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * scene  **参数解释：** 内网访问场景。 **约束限制：** 不涉及。 **取值范围：** - VPC：用户VPC网络接入场景 - POOL：用户资源池网络接入场景 **默认取值：** 不涉及。
    * vpcId  **参数解释：** VPC ID，VPC场景需要填写。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * subnetId  **参数解释：** 子网 ID，VPC场景需要填写。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * poolId  **参数解释：** 资源池id POOL场景需要填写。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * type  **参数解释：** 内网访问接入粒度，不填默认为SERVICE **约束限制：** 不涉及。 **取值范围：** - SERVICE：服务粒度。 - GLOBAL：global粒度。 **默认取值：** 默认为SERVICE。
    * dispatcherGroupId  **参数解释：** 服务绑定的dispatcher组ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * customUrls  **参数解释：** 自定义URL，格式为：{协议}://{域名}{路径} **约束限制：** url个数不超过10个，单个url长度不超过1024。 **取值范围：** - 协议范围：http，https，wss，ws。 - 域名范围：支持域名或IP:端口。域名长度不超过63，包含字母、数字、中划线（-)且不能以中划线（-)开头或结尾，顶级域名不能包含数字；端口范围为1-65535。 - 路径范围：斜杠（/）开头，仅包含字母、数字、点号（.）、中划线（-)、下划线（_）、斜杠（/）的路径。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'serviceId' => 'getServiceId',
            'scene' => 'getScene',
            'vpcId' => 'getVpcId',
            'subnetId' => 'getSubnetId',
            'poolId' => 'getPoolId',
            'type' => 'getType',
            'dispatcherGroupId' => 'getDispatcherGroupId',
            'customUrls' => 'getCustomUrls'
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
    const TYPE_SERVICE = 'SERVICE';
    const TYPE__GLOBAL = 'GLOBAL';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_SERVICE,
            self::TYPE__GLOBAL,
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
        $this->container['serviceId'] = isset($data['serviceId']) ? $data['serviceId'] : null;
        $this->container['scene'] = isset($data['scene']) ? $data['scene'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['subnetId'] = isset($data['subnetId']) ? $data['subnetId'] : null;
        $this->container['poolId'] = isset($data['poolId']) ? $data['poolId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['dispatcherGroupId'] = isset($data['dispatcherGroupId']) ? $data['dispatcherGroupId'] : null;
        $this->container['customUrls'] = isset($data['customUrls']) ? $data['customUrls'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['scene'] === null) {
            $invalidProperties[] = "'scene' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
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
    * Gets serviceId
    *  **参数解释：** 服务ID，在[创建服务](CreateInferService.xml)时即可在返回体中获取，也可通过[查询服务列表](ListInferServices.xml)获取当前用户拥有的服务，其中service_id字段即为服务ID。 **约束限制：** type为SERVICE时，必填。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getServiceId()
    {
        return $this->container['serviceId'];
    }

    /**
    * Sets serviceId
    *
    * @param string|null $serviceId **参数解释：** 服务ID，在[创建服务](CreateInferService.xml)时即可在返回体中获取，也可通过[查询服务列表](ListInferServices.xml)获取当前用户拥有的服务，其中service_id字段即为服务ID。 **约束限制：** type为SERVICE时，必填。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setServiceId($serviceId)
    {
        $this->container['serviceId'] = $serviceId;
        return $this;
    }

    /**
    * Gets scene
    *  **参数解释：** 内网访问场景。 **约束限制：** 不涉及。 **取值范围：** - VPC：用户VPC网络接入场景 - POOL：用户资源池网络接入场景 **默认取值：** 不涉及。
    *
    * @return string
    */
    public function getScene()
    {
        return $this->container['scene'];
    }

    /**
    * Sets scene
    *
    * @param string $scene **参数解释：** 内网访问场景。 **约束限制：** 不涉及。 **取值范围：** - VPC：用户VPC网络接入场景 - POOL：用户资源池网络接入场景 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setScene($scene)
    {
        $this->container['scene'] = $scene;
        return $this;
    }

    /**
    * Gets vpcId
    *  **参数解释：** VPC ID，VPC场景需要填写。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string|null $vpcId **参数解释：** VPC ID，VPC场景需要填写。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
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
    *  **参数解释：** 子网 ID，VPC场景需要填写。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getSubnetId()
    {
        return $this->container['subnetId'];
    }

    /**
    * Sets subnetId
    *
    * @param string|null $subnetId **参数解释：** 子网 ID，VPC场景需要填写。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setSubnetId($subnetId)
    {
        $this->container['subnetId'] = $subnetId;
        return $this;
    }

    /**
    * Gets poolId
    *  **参数解释：** 资源池id POOL场景需要填写。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getPoolId()
    {
        return $this->container['poolId'];
    }

    /**
    * Sets poolId
    *
    * @param string|null $poolId **参数解释：** 资源池id POOL场景需要填写。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setPoolId($poolId)
    {
        $this->container['poolId'] = $poolId;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释：** 内网访问接入粒度，不填默认为SERVICE **约束限制：** 不涉及。 **取值范围：** - SERVICE：服务粒度。 - GLOBAL：global粒度。 **默认取值：** 默认为SERVICE。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type **参数解释：** 内网访问接入粒度，不填默认为SERVICE **约束限制：** 不涉及。 **取值范围：** - SERVICE：服务粒度。 - GLOBAL：global粒度。 **默认取值：** 默认为SERVICE。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets dispatcherGroupId
    *  **参数解释：** 服务绑定的dispatcher组ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getDispatcherGroupId()
    {
        return $this->container['dispatcherGroupId'];
    }

    /**
    * Sets dispatcherGroupId
    *
    * @param string|null $dispatcherGroupId **参数解释：** 服务绑定的dispatcher组ID。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setDispatcherGroupId($dispatcherGroupId)
    {
        $this->container['dispatcherGroupId'] = $dispatcherGroupId;
        return $this;
    }

    /**
    * Gets customUrls
    *  **参数解释：** 自定义URL，格式为：{协议}://{域名}{路径} **约束限制：** url个数不超过10个，单个url长度不超过1024。 **取值范围：** - 协议范围：http，https，wss，ws。 - 域名范围：支持域名或IP:端口。域名长度不超过63，包含字母、数字、中划线（-)且不能以中划线（-)开头或结尾，顶级域名不能包含数字；端口范围为1-65535。 - 路径范围：斜杠（/）开头，仅包含字母、数字、点号（.）、中划线（-)、下划线（_）、斜杠（/）的路径。 **默认取值：** 不涉及。
    *
    * @return string[]|null
    */
    public function getCustomUrls()
    {
        return $this->container['customUrls'];
    }

    /**
    * Sets customUrls
    *
    * @param string[]|null $customUrls **参数解释：** 自定义URL，格式为：{协议}://{域名}{路径} **约束限制：** url个数不超过10个，单个url长度不超过1024。 **取值范围：** - 协议范围：http，https，wss，ws。 - 域名范围：支持域名或IP:端口。域名长度不超过63，包含字母、数字、中划线（-)且不能以中划线（-)开头或结尾，顶级域名不能包含数字；端口范围为1-65535。 - 路径范围：斜杠（/）开头，仅包含字母、数字、点号（.）、中划线（-)、下划线（_）、斜杠（/）的路径。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setCustomUrls($customUrls)
    {
        $this->container['customUrls'] = $customUrls;
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

