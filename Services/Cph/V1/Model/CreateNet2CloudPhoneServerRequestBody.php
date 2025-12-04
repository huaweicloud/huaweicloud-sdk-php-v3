<?php

namespace HuaweiCloud\SDK\Cph\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateNet2CloudPhoneServerRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateNet2CloudPhoneServerRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * serverName  云手机服务器名称，  不超过60个字符，只支持英文字母、数字、汉字、下划线和中划线。  批量[创建](tag:fcs)[购买](tag:hws,hws_hk,cmcc,ctc)会在服务器名称后自动添加序号，比如设置此参数为server-1，那么创建的云手机服务器名称会自动按序增加数字后缀，比如为server-1-0001。
    * serverModelName  云手机服务器规格，不超过64个字节。
    * phoneModelName  云手机规格，不超过64个字节。
    * imageId  云手机镜像ID，不超过32个字节。
    * count  [创建](tag:fcs)[购买](tag:hws,hws_hk,cmcc,ctc)的云手机服务器个数，最多可[创建](tag:fcs)[购买](tag:hws,hws_hk,cmcc,ctc)10台。
    * keypairName  密钥对名称，不超过64个字节，用于云手机ADB登录。
    * ports  云手机启用的应用端口，云手机服务会做端口转发。
    * extendParam  extendParam
    * tenantVpcId  租户自定义的VPC ID，为待创建的云服务器所属的虚拟私有云（简称VPC），需要指定已创建VPC的ID，UUID格式。
    * nics  租户自定义的网卡的结构体，为待创建的云服务器的网卡信息。
    * publicIp  publicIp
    * phoneCountPerIp  多少个手机共用一个vip。默认为手机开数，表示所有手机共享1个vip。取值范围：1到手机规格开数。
    * phoneDataVolume  phoneDataVolume
    * serverShareDataVolume  serverShareDataVolume
    * bandWidth  bandWidth
    * availabilityZone  待创建云服务器所在的可用区，需要指定可用区（AZ）的名称。[如上海一可用区1为cn-east-3a。](tag:hws,hws_hk,cmcc,ctc)
    * property  云手机属性列表，为Json格式字符串。只可以预置有权限修改的属性。字符串长度[1,8192]。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'serverName' => 'string',
            'serverModelName' => 'string',
            'phoneModelName' => 'string',
            'imageId' => 'string',
            'count' => 'int',
            'keypairName' => 'string',
            'ports' => '\HuaweiCloud\SDK\Cph\V1\Model\Port[]',
            'extendParam' => '\HuaweiCloud\SDK\Cph\V1\Model\CreateNet2CloudPhoneServerRequestBodyExtendParam',
            'tenantVpcId' => 'string',
            'nics' => '\HuaweiCloud\SDK\Cph\V1\Model\Nic[]',
            'publicIp' => '\HuaweiCloud\SDK\Cph\V1\Model\CreateNet2CloudPhoneServerRequestBodyPublicIp',
            'phoneCountPerIp' => 'int',
            'phoneDataVolume' => '\HuaweiCloud\SDK\Cph\V1\Model\CreateNet2CloudPhoneServerRequestBodyPhoneDataVolume',
            'serverShareDataVolume' => '\HuaweiCloud\SDK\Cph\V1\Model\CreateNet2CloudPhoneServerRequestBodyServerShareDataVolume',
            'bandWidth' => '\HuaweiCloud\SDK\Cph\V1\Model\CreateNet2CloudPhoneServerRequestBodyBandWidth',
            'availabilityZone' => 'string',
            'property' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * serverName  云手机服务器名称，  不超过60个字符，只支持英文字母、数字、汉字、下划线和中划线。  批量[创建](tag:fcs)[购买](tag:hws,hws_hk,cmcc,ctc)会在服务器名称后自动添加序号，比如设置此参数为server-1，那么创建的云手机服务器名称会自动按序增加数字后缀，比如为server-1-0001。
    * serverModelName  云手机服务器规格，不超过64个字节。
    * phoneModelName  云手机规格，不超过64个字节。
    * imageId  云手机镜像ID，不超过32个字节。
    * count  [创建](tag:fcs)[购买](tag:hws,hws_hk,cmcc,ctc)的云手机服务器个数，最多可[创建](tag:fcs)[购买](tag:hws,hws_hk,cmcc,ctc)10台。
    * keypairName  密钥对名称，不超过64个字节，用于云手机ADB登录。
    * ports  云手机启用的应用端口，云手机服务会做端口转发。
    * extendParam  extendParam
    * tenantVpcId  租户自定义的VPC ID，为待创建的云服务器所属的虚拟私有云（简称VPC），需要指定已创建VPC的ID，UUID格式。
    * nics  租户自定义的网卡的结构体，为待创建的云服务器的网卡信息。
    * publicIp  publicIp
    * phoneCountPerIp  多少个手机共用一个vip。默认为手机开数，表示所有手机共享1个vip。取值范围：1到手机规格开数。
    * phoneDataVolume  phoneDataVolume
    * serverShareDataVolume  serverShareDataVolume
    * bandWidth  bandWidth
    * availabilityZone  待创建云服务器所在的可用区，需要指定可用区（AZ）的名称。[如上海一可用区1为cn-east-3a。](tag:hws,hws_hk,cmcc,ctc)
    * property  云手机属性列表，为Json格式字符串。只可以预置有权限修改的属性。字符串长度[1,8192]。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'serverName' => null,
        'serverModelName' => null,
        'phoneModelName' => null,
        'imageId' => null,
        'count' => 'int32',
        'keypairName' => null,
        'ports' => null,
        'extendParam' => null,
        'tenantVpcId' => null,
        'nics' => null,
        'publicIp' => null,
        'phoneCountPerIp' => 'int32',
        'phoneDataVolume' => null,
        'serverShareDataVolume' => null,
        'bandWidth' => null,
        'availabilityZone' => null,
        'property' => null
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
    * serverName  云手机服务器名称，  不超过60个字符，只支持英文字母、数字、汉字、下划线和中划线。  批量[创建](tag:fcs)[购买](tag:hws,hws_hk,cmcc,ctc)会在服务器名称后自动添加序号，比如设置此参数为server-1，那么创建的云手机服务器名称会自动按序增加数字后缀，比如为server-1-0001。
    * serverModelName  云手机服务器规格，不超过64个字节。
    * phoneModelName  云手机规格，不超过64个字节。
    * imageId  云手机镜像ID，不超过32个字节。
    * count  [创建](tag:fcs)[购买](tag:hws,hws_hk,cmcc,ctc)的云手机服务器个数，最多可[创建](tag:fcs)[购买](tag:hws,hws_hk,cmcc,ctc)10台。
    * keypairName  密钥对名称，不超过64个字节，用于云手机ADB登录。
    * ports  云手机启用的应用端口，云手机服务会做端口转发。
    * extendParam  extendParam
    * tenantVpcId  租户自定义的VPC ID，为待创建的云服务器所属的虚拟私有云（简称VPC），需要指定已创建VPC的ID，UUID格式。
    * nics  租户自定义的网卡的结构体，为待创建的云服务器的网卡信息。
    * publicIp  publicIp
    * phoneCountPerIp  多少个手机共用一个vip。默认为手机开数，表示所有手机共享1个vip。取值范围：1到手机规格开数。
    * phoneDataVolume  phoneDataVolume
    * serverShareDataVolume  serverShareDataVolume
    * bandWidth  bandWidth
    * availabilityZone  待创建云服务器所在的可用区，需要指定可用区（AZ）的名称。[如上海一可用区1为cn-east-3a。](tag:hws,hws_hk,cmcc,ctc)
    * property  云手机属性列表，为Json格式字符串。只可以预置有权限修改的属性。字符串长度[1,8192]。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'serverName' => 'server_name',
            'serverModelName' => 'server_model_name',
            'phoneModelName' => 'phone_model_name',
            'imageId' => 'image_id',
            'count' => 'count',
            'keypairName' => 'keypair_name',
            'ports' => 'ports',
            'extendParam' => 'extend_param',
            'tenantVpcId' => 'tenant_vpc_id',
            'nics' => 'nics',
            'publicIp' => 'public_ip',
            'phoneCountPerIp' => 'phone_count_per_ip',
            'phoneDataVolume' => 'phone_data_volume',
            'serverShareDataVolume' => 'server_share_data_volume',
            'bandWidth' => 'band_width',
            'availabilityZone' => 'availability_zone',
            'property' => 'property'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * serverName  云手机服务器名称，  不超过60个字符，只支持英文字母、数字、汉字、下划线和中划线。  批量[创建](tag:fcs)[购买](tag:hws,hws_hk,cmcc,ctc)会在服务器名称后自动添加序号，比如设置此参数为server-1，那么创建的云手机服务器名称会自动按序增加数字后缀，比如为server-1-0001。
    * serverModelName  云手机服务器规格，不超过64个字节。
    * phoneModelName  云手机规格，不超过64个字节。
    * imageId  云手机镜像ID，不超过32个字节。
    * count  [创建](tag:fcs)[购买](tag:hws,hws_hk,cmcc,ctc)的云手机服务器个数，最多可[创建](tag:fcs)[购买](tag:hws,hws_hk,cmcc,ctc)10台。
    * keypairName  密钥对名称，不超过64个字节，用于云手机ADB登录。
    * ports  云手机启用的应用端口，云手机服务会做端口转发。
    * extendParam  extendParam
    * tenantVpcId  租户自定义的VPC ID，为待创建的云服务器所属的虚拟私有云（简称VPC），需要指定已创建VPC的ID，UUID格式。
    * nics  租户自定义的网卡的结构体，为待创建的云服务器的网卡信息。
    * publicIp  publicIp
    * phoneCountPerIp  多少个手机共用一个vip。默认为手机开数，表示所有手机共享1个vip。取值范围：1到手机规格开数。
    * phoneDataVolume  phoneDataVolume
    * serverShareDataVolume  serverShareDataVolume
    * bandWidth  bandWidth
    * availabilityZone  待创建云服务器所在的可用区，需要指定可用区（AZ）的名称。[如上海一可用区1为cn-east-3a。](tag:hws,hws_hk,cmcc,ctc)
    * property  云手机属性列表，为Json格式字符串。只可以预置有权限修改的属性。字符串长度[1,8192]。
    *
    * @var string[]
    */
    protected static $setters = [
            'serverName' => 'setServerName',
            'serverModelName' => 'setServerModelName',
            'phoneModelName' => 'setPhoneModelName',
            'imageId' => 'setImageId',
            'count' => 'setCount',
            'keypairName' => 'setKeypairName',
            'ports' => 'setPorts',
            'extendParam' => 'setExtendParam',
            'tenantVpcId' => 'setTenantVpcId',
            'nics' => 'setNics',
            'publicIp' => 'setPublicIp',
            'phoneCountPerIp' => 'setPhoneCountPerIp',
            'phoneDataVolume' => 'setPhoneDataVolume',
            'serverShareDataVolume' => 'setServerShareDataVolume',
            'bandWidth' => 'setBandWidth',
            'availabilityZone' => 'setAvailabilityZone',
            'property' => 'setProperty'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * serverName  云手机服务器名称，  不超过60个字符，只支持英文字母、数字、汉字、下划线和中划线。  批量[创建](tag:fcs)[购买](tag:hws,hws_hk,cmcc,ctc)会在服务器名称后自动添加序号，比如设置此参数为server-1，那么创建的云手机服务器名称会自动按序增加数字后缀，比如为server-1-0001。
    * serverModelName  云手机服务器规格，不超过64个字节。
    * phoneModelName  云手机规格，不超过64个字节。
    * imageId  云手机镜像ID，不超过32个字节。
    * count  [创建](tag:fcs)[购买](tag:hws,hws_hk,cmcc,ctc)的云手机服务器个数，最多可[创建](tag:fcs)[购买](tag:hws,hws_hk,cmcc,ctc)10台。
    * keypairName  密钥对名称，不超过64个字节，用于云手机ADB登录。
    * ports  云手机启用的应用端口，云手机服务会做端口转发。
    * extendParam  extendParam
    * tenantVpcId  租户自定义的VPC ID，为待创建的云服务器所属的虚拟私有云（简称VPC），需要指定已创建VPC的ID，UUID格式。
    * nics  租户自定义的网卡的结构体，为待创建的云服务器的网卡信息。
    * publicIp  publicIp
    * phoneCountPerIp  多少个手机共用一个vip。默认为手机开数，表示所有手机共享1个vip。取值范围：1到手机规格开数。
    * phoneDataVolume  phoneDataVolume
    * serverShareDataVolume  serverShareDataVolume
    * bandWidth  bandWidth
    * availabilityZone  待创建云服务器所在的可用区，需要指定可用区（AZ）的名称。[如上海一可用区1为cn-east-3a。](tag:hws,hws_hk,cmcc,ctc)
    * property  云手机属性列表，为Json格式字符串。只可以预置有权限修改的属性。字符串长度[1,8192]。
    *
    * @var string[]
    */
    protected static $getters = [
            'serverName' => 'getServerName',
            'serverModelName' => 'getServerModelName',
            'phoneModelName' => 'getPhoneModelName',
            'imageId' => 'getImageId',
            'count' => 'getCount',
            'keypairName' => 'getKeypairName',
            'ports' => 'getPorts',
            'extendParam' => 'getExtendParam',
            'tenantVpcId' => 'getTenantVpcId',
            'nics' => 'getNics',
            'publicIp' => 'getPublicIp',
            'phoneCountPerIp' => 'getPhoneCountPerIp',
            'phoneDataVolume' => 'getPhoneDataVolume',
            'serverShareDataVolume' => 'getServerShareDataVolume',
            'bandWidth' => 'getBandWidth',
            'availabilityZone' => 'getAvailabilityZone',
            'property' => 'getProperty'
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
        $this->container['serverName'] = isset($data['serverName']) ? $data['serverName'] : null;
        $this->container['serverModelName'] = isset($data['serverModelName']) ? $data['serverModelName'] : null;
        $this->container['phoneModelName'] = isset($data['phoneModelName']) ? $data['phoneModelName'] : null;
        $this->container['imageId'] = isset($data['imageId']) ? $data['imageId'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['keypairName'] = isset($data['keypairName']) ? $data['keypairName'] : null;
        $this->container['ports'] = isset($data['ports']) ? $data['ports'] : null;
        $this->container['extendParam'] = isset($data['extendParam']) ? $data['extendParam'] : null;
        $this->container['tenantVpcId'] = isset($data['tenantVpcId']) ? $data['tenantVpcId'] : null;
        $this->container['nics'] = isset($data['nics']) ? $data['nics'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['phoneCountPerIp'] = isset($data['phoneCountPerIp']) ? $data['phoneCountPerIp'] : null;
        $this->container['phoneDataVolume'] = isset($data['phoneDataVolume']) ? $data['phoneDataVolume'] : null;
        $this->container['serverShareDataVolume'] = isset($data['serverShareDataVolume']) ? $data['serverShareDataVolume'] : null;
        $this->container['bandWidth'] = isset($data['bandWidth']) ? $data['bandWidth'] : null;
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
        $this->container['property'] = isset($data['property']) ? $data['property'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['serverName'] === null) {
            $invalidProperties[] = "'serverName' can't be null";
        }
            if ((mb_strlen($this->container['serverName']) > 64)) {
                $invalidProperties[] = "invalid value for 'serverName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['serverName']) < 0)) {
                $invalidProperties[] = "invalid value for 'serverName', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['serverModelName'] === null) {
            $invalidProperties[] = "'serverModelName' can't be null";
        }
            if ((mb_strlen($this->container['serverModelName']) > 64)) {
                $invalidProperties[] = "invalid value for 'serverModelName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['serverModelName']) < 0)) {
                $invalidProperties[] = "invalid value for 'serverModelName', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['phoneModelName'] === null) {
            $invalidProperties[] = "'phoneModelName' can't be null";
        }
            if ((mb_strlen($this->container['phoneModelName']) > 64)) {
                $invalidProperties[] = "invalid value for 'phoneModelName', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['phoneModelName']) < 0)) {
                $invalidProperties[] = "invalid value for 'phoneModelName', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['imageId'] === null) {
            $invalidProperties[] = "'imageId' can't be null";
        }
            if ((mb_strlen($this->container['imageId']) > 64)) {
                $invalidProperties[] = "invalid value for 'imageId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['imageId']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['count'] === null) {
            $invalidProperties[] = "'count' can't be null";
        }
            if (($this->container['count'] > 1024)) {
                $invalidProperties[] = "invalid value for 'count', must be smaller than or equal to 1024.";
            }
            if (($this->container['count'] < 0)) {
                $invalidProperties[] = "invalid value for 'count', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['keypairName']) && (mb_strlen($this->container['keypairName']) > 64)) {
                $invalidProperties[] = "invalid value for 'keypairName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['keypairName']) && (mb_strlen($this->container['keypairName']) < 0)) {
                $invalidProperties[] = "invalid value for 'keypairName', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['extendParam'] === null) {
            $invalidProperties[] = "'extendParam' can't be null";
        }
        if ($this->container['tenantVpcId'] === null) {
            $invalidProperties[] = "'tenantVpcId' can't be null";
        }
            if ((mb_strlen($this->container['tenantVpcId']) > 36)) {
                $invalidProperties[] = "invalid value for 'tenantVpcId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['tenantVpcId']) < 36)) {
                $invalidProperties[] = "invalid value for 'tenantVpcId', the character length must be bigger than or equal to 36.";
            }
        if ($this->container['nics'] === null) {
            $invalidProperties[] = "'nics' can't be null";
        }
        if ($this->container['publicIp'] === null) {
            $invalidProperties[] = "'publicIp' can't be null";
        }
            if (!is_null($this->container['phoneCountPerIp']) && ($this->container['phoneCountPerIp'] > 65535)) {
                $invalidProperties[] = "invalid value for 'phoneCountPerIp', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['phoneCountPerIp']) && ($this->container['phoneCountPerIp'] < 0)) {
                $invalidProperties[] = "invalid value for 'phoneCountPerIp', must be bigger than or equal to 0.";
            }
        if ($this->container['bandWidth'] === null) {
            $invalidProperties[] = "'bandWidth' can't be null";
        }
            if (!is_null($this->container['availabilityZone']) && (mb_strlen($this->container['availabilityZone']) > 1024)) {
                $invalidProperties[] = "invalid value for 'availabilityZone', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['availabilityZone']) && (mb_strlen($this->container['availabilityZone']) < 0)) {
                $invalidProperties[] = "invalid value for 'availabilityZone', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['property']) && (mb_strlen($this->container['property']) > 8192)) {
                $invalidProperties[] = "invalid value for 'property', the character length must be smaller than or equal to 8192.";
            }
            if (!is_null($this->container['property']) && (mb_strlen($this->container['property']) < 1)) {
                $invalidProperties[] = "invalid value for 'property', the character length must be bigger than or equal to 1.";
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
    * Gets serverName
    *  云手机服务器名称，  不超过60个字符，只支持英文字母、数字、汉字、下划线和中划线。  批量[创建](tag:fcs)[购买](tag:hws,hws_hk,cmcc,ctc)会在服务器名称后自动添加序号，比如设置此参数为server-1，那么创建的云手机服务器名称会自动按序增加数字后缀，比如为server-1-0001。
    *
    * @return string
    */
    public function getServerName()
    {
        return $this->container['serverName'];
    }

    /**
    * Sets serverName
    *
    * @param string $serverName 云手机服务器名称，  不超过60个字符，只支持英文字母、数字、汉字、下划线和中划线。  批量[创建](tag:fcs)[购买](tag:hws,hws_hk,cmcc,ctc)会在服务器名称后自动添加序号，比如设置此参数为server-1，那么创建的云手机服务器名称会自动按序增加数字后缀，比如为server-1-0001。
    *
    * @return $this
    */
    public function setServerName($serverName)
    {
        $this->container['serverName'] = $serverName;
        return $this;
    }

    /**
    * Gets serverModelName
    *  云手机服务器规格，不超过64个字节。
    *
    * @return string
    */
    public function getServerModelName()
    {
        return $this->container['serverModelName'];
    }

    /**
    * Sets serverModelName
    *
    * @param string $serverModelName 云手机服务器规格，不超过64个字节。
    *
    * @return $this
    */
    public function setServerModelName($serverModelName)
    {
        $this->container['serverModelName'] = $serverModelName;
        return $this;
    }

    /**
    * Gets phoneModelName
    *  云手机规格，不超过64个字节。
    *
    * @return string
    */
    public function getPhoneModelName()
    {
        return $this->container['phoneModelName'];
    }

    /**
    * Sets phoneModelName
    *
    * @param string $phoneModelName 云手机规格，不超过64个字节。
    *
    * @return $this
    */
    public function setPhoneModelName($phoneModelName)
    {
        $this->container['phoneModelName'] = $phoneModelName;
        return $this;
    }

    /**
    * Gets imageId
    *  云手机镜像ID，不超过32个字节。
    *
    * @return string
    */
    public function getImageId()
    {
        return $this->container['imageId'];
    }

    /**
    * Sets imageId
    *
    * @param string $imageId 云手机镜像ID，不超过32个字节。
    *
    * @return $this
    */
    public function setImageId($imageId)
    {
        $this->container['imageId'] = $imageId;
        return $this;
    }

    /**
    * Gets count
    *  [创建](tag:fcs)[购买](tag:hws,hws_hk,cmcc,ctc)的云手机服务器个数，最多可[创建](tag:fcs)[购买](tag:hws,hws_hk,cmcc,ctc)10台。
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
    * @param int $count [创建](tag:fcs)[购买](tag:hws,hws_hk,cmcc,ctc)的云手机服务器个数，最多可[创建](tag:fcs)[购买](tag:hws,hws_hk,cmcc,ctc)10台。
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets keypairName
    *  密钥对名称，不超过64个字节，用于云手机ADB登录。
    *
    * @return string|null
    */
    public function getKeypairName()
    {
        return $this->container['keypairName'];
    }

    /**
    * Sets keypairName
    *
    * @param string|null $keypairName 密钥对名称，不超过64个字节，用于云手机ADB登录。
    *
    * @return $this
    */
    public function setKeypairName($keypairName)
    {
        $this->container['keypairName'] = $keypairName;
        return $this;
    }

    /**
    * Gets ports
    *  云手机启用的应用端口，云手机服务会做端口转发。
    *
    * @return \HuaweiCloud\SDK\Cph\V1\Model\Port[]|null
    */
    public function getPorts()
    {
        return $this->container['ports'];
    }

    /**
    * Sets ports
    *
    * @param \HuaweiCloud\SDK\Cph\V1\Model\Port[]|null $ports 云手机启用的应用端口，云手机服务会做端口转发。
    *
    * @return $this
    */
    public function setPorts($ports)
    {
        $this->container['ports'] = $ports;
        return $this;
    }

    /**
    * Gets extendParam
    *  extendParam
    *
    * @return \HuaweiCloud\SDK\Cph\V1\Model\CreateNet2CloudPhoneServerRequestBodyExtendParam
    */
    public function getExtendParam()
    {
        return $this->container['extendParam'];
    }

    /**
    * Sets extendParam
    *
    * @param \HuaweiCloud\SDK\Cph\V1\Model\CreateNet2CloudPhoneServerRequestBodyExtendParam $extendParam extendParam
    *
    * @return $this
    */
    public function setExtendParam($extendParam)
    {
        $this->container['extendParam'] = $extendParam;
        return $this;
    }

    /**
    * Gets tenantVpcId
    *  租户自定义的VPC ID，为待创建的云服务器所属的虚拟私有云（简称VPC），需要指定已创建VPC的ID，UUID格式。
    *
    * @return string
    */
    public function getTenantVpcId()
    {
        return $this->container['tenantVpcId'];
    }

    /**
    * Sets tenantVpcId
    *
    * @param string $tenantVpcId 租户自定义的VPC ID，为待创建的云服务器所属的虚拟私有云（简称VPC），需要指定已创建VPC的ID，UUID格式。
    *
    * @return $this
    */
    public function setTenantVpcId($tenantVpcId)
    {
        $this->container['tenantVpcId'] = $tenantVpcId;
        return $this;
    }

    /**
    * Gets nics
    *  租户自定义的网卡的结构体，为待创建的云服务器的网卡信息。
    *
    * @return \HuaweiCloud\SDK\Cph\V1\Model\Nic[]
    */
    public function getNics()
    {
        return $this->container['nics'];
    }

    /**
    * Sets nics
    *
    * @param \HuaweiCloud\SDK\Cph\V1\Model\Nic[] $nics 租户自定义的网卡的结构体，为待创建的云服务器的网卡信息。
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
    * @return \HuaweiCloud\SDK\Cph\V1\Model\CreateNet2CloudPhoneServerRequestBodyPublicIp
    */
    public function getPublicIp()
    {
        return $this->container['publicIp'];
    }

    /**
    * Sets publicIp
    *
    * @param \HuaweiCloud\SDK\Cph\V1\Model\CreateNet2CloudPhoneServerRequestBodyPublicIp $publicIp publicIp
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets phoneCountPerIp
    *  多少个手机共用一个vip。默认为手机开数，表示所有手机共享1个vip。取值范围：1到手机规格开数。
    *
    * @return int|null
    */
    public function getPhoneCountPerIp()
    {
        return $this->container['phoneCountPerIp'];
    }

    /**
    * Sets phoneCountPerIp
    *
    * @param int|null $phoneCountPerIp 多少个手机共用一个vip。默认为手机开数，表示所有手机共享1个vip。取值范围：1到手机规格开数。
    *
    * @return $this
    */
    public function setPhoneCountPerIp($phoneCountPerIp)
    {
        $this->container['phoneCountPerIp'] = $phoneCountPerIp;
        return $this;
    }

    /**
    * Gets phoneDataVolume
    *  phoneDataVolume
    *
    * @return \HuaweiCloud\SDK\Cph\V1\Model\CreateNet2CloudPhoneServerRequestBodyPhoneDataVolume|null
    */
    public function getPhoneDataVolume()
    {
        return $this->container['phoneDataVolume'];
    }

    /**
    * Sets phoneDataVolume
    *
    * @param \HuaweiCloud\SDK\Cph\V1\Model\CreateNet2CloudPhoneServerRequestBodyPhoneDataVolume|null $phoneDataVolume phoneDataVolume
    *
    * @return $this
    */
    public function setPhoneDataVolume($phoneDataVolume)
    {
        $this->container['phoneDataVolume'] = $phoneDataVolume;
        return $this;
    }

    /**
    * Gets serverShareDataVolume
    *  serverShareDataVolume
    *
    * @return \HuaweiCloud\SDK\Cph\V1\Model\CreateNet2CloudPhoneServerRequestBodyServerShareDataVolume|null
    */
    public function getServerShareDataVolume()
    {
        return $this->container['serverShareDataVolume'];
    }

    /**
    * Sets serverShareDataVolume
    *
    * @param \HuaweiCloud\SDK\Cph\V1\Model\CreateNet2CloudPhoneServerRequestBodyServerShareDataVolume|null $serverShareDataVolume serverShareDataVolume
    *
    * @return $this
    */
    public function setServerShareDataVolume($serverShareDataVolume)
    {
        $this->container['serverShareDataVolume'] = $serverShareDataVolume;
        return $this;
    }

    /**
    * Gets bandWidth
    *  bandWidth
    *
    * @return \HuaweiCloud\SDK\Cph\V1\Model\CreateNet2CloudPhoneServerRequestBodyBandWidth
    */
    public function getBandWidth()
    {
        return $this->container['bandWidth'];
    }

    /**
    * Sets bandWidth
    *
    * @param \HuaweiCloud\SDK\Cph\V1\Model\CreateNet2CloudPhoneServerRequestBodyBandWidth $bandWidth bandWidth
    *
    * @return $this
    */
    public function setBandWidth($bandWidth)
    {
        $this->container['bandWidth'] = $bandWidth;
        return $this;
    }

    /**
    * Gets availabilityZone
    *  待创建云服务器所在的可用区，需要指定可用区（AZ）的名称。[如上海一可用区1为cn-east-3a。](tag:hws,hws_hk,cmcc,ctc)
    *
    * @return string|null
    */
    public function getAvailabilityZone()
    {
        return $this->container['availabilityZone'];
    }

    /**
    * Sets availabilityZone
    *
    * @param string|null $availabilityZone 待创建云服务器所在的可用区，需要指定可用区（AZ）的名称。[如上海一可用区1为cn-east-3a。](tag:hws,hws_hk,cmcc,ctc)
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
        return $this;
    }

    /**
    * Gets property
    *  云手机属性列表，为Json格式字符串。只可以预置有权限修改的属性。字符串长度[1,8192]。
    *
    * @return string|null
    */
    public function getProperty()
    {
        return $this->container['property'];
    }

    /**
    * Sets property
    *
    * @param string|null $property 云手机属性列表，为Json格式字符串。只可以预置有权限修改的属性。字符串长度[1,8192]。
    *
    * @return $this
    */
    public function setProperty($property)
    {
        $this->container['property'] = $property;
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

