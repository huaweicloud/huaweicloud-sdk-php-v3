<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NovaCreateServersOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NovaCreateServersOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'autoTerminateTime' => 'string',
            'imageRef' => 'string',
            'flavorRef' => 'string',
            'name' => 'string',
            'metadata' => 'map[string,string]',
            'adminPass' => 'string',
            'blockDeviceMappingV2' => '\HuaweiCloud\SDK\Ecs\V2\Model\NovaServerBlockDeviceMapping[]',
            'configDrive' => 'string',
            'securityGroups' => '\HuaweiCloud\SDK\Ecs\V2\Model\NovaServerSecurityGroup[]',
            'networks' => '\HuaweiCloud\SDK\Ecs\V2\Model\NovaServerNetwork[]',
            'keyName' => 'string',
            'userData' => 'string',
            'availabilityZone' => 'string',
            'returnReservationId' => 'bool',
            'minCount' => 'int',
            'maxCount' => 'int',
            'osDcFdiskConfig' => 'string',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'autoTerminateTime' => null,
        'imageRef' => null,
        'flavorRef' => null,
        'name' => null,
        'metadata' => null,
        'adminPass' => null,
        'blockDeviceMappingV2' => null,
        'configDrive' => null,
        'securityGroups' => null,
        'networks' => null,
        'keyName' => null,
        'userData' => null,
        'availabilityZone' => null,
        'returnReservationId' => null,
        'minCount' => 'int32',
        'maxCount' => 'int32',
        'osDcFdiskConfig' => null,
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
            'autoTerminateTime' => 'auto_terminate_time',
            'imageRef' => 'imageRef',
            'flavorRef' => 'flavorRef',
            'name' => 'name',
            'metadata' => 'metadata',
            'adminPass' => 'adminPass',
            'blockDeviceMappingV2' => 'block_device_mapping_v2',
            'configDrive' => 'config_drive',
            'securityGroups' => 'security_groups',
            'networks' => 'networks',
            'keyName' => 'key_name',
            'userData' => 'user_data',
            'availabilityZone' => 'availability_zone',
            'returnReservationId' => 'return_reservation_id',
            'minCount' => 'min_count',
            'maxCount' => 'max_count',
            'osDcFdiskConfig' => 'OS-DCF:diskConfig',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @var string[]
    */
    protected static $setters = [
            'autoTerminateTime' => 'setAutoTerminateTime',
            'imageRef' => 'setImageRef',
            'flavorRef' => 'setFlavorRef',
            'name' => 'setName',
            'metadata' => 'setMetadata',
            'adminPass' => 'setAdminPass',
            'blockDeviceMappingV2' => 'setBlockDeviceMappingV2',
            'configDrive' => 'setConfigDrive',
            'securityGroups' => 'setSecurityGroups',
            'networks' => 'setNetworks',
            'keyName' => 'setKeyName',
            'userData' => 'setUserData',
            'availabilityZone' => 'setAvailabilityZone',
            'returnReservationId' => 'setReturnReservationId',
            'minCount' => 'setMinCount',
            'maxCount' => 'setMaxCount',
            'osDcFdiskConfig' => 'setOsDcFdiskConfig',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @var string[]
    */
    protected static $getters = [
            'autoTerminateTime' => 'getAutoTerminateTime',
            'imageRef' => 'getImageRef',
            'flavorRef' => 'getFlavorRef',
            'name' => 'getName',
            'metadata' => 'getMetadata',
            'adminPass' => 'getAdminPass',
            'blockDeviceMappingV2' => 'getBlockDeviceMappingV2',
            'configDrive' => 'getConfigDrive',
            'securityGroups' => 'getSecurityGroups',
            'networks' => 'getNetworks',
            'keyName' => 'getKeyName',
            'userData' => 'getUserData',
            'availabilityZone' => 'getAvailabilityZone',
            'returnReservationId' => 'getReturnReservationId',
            'minCount' => 'getMinCount',
            'maxCount' => 'getMaxCount',
            'osDcFdiskConfig' => 'getOsDcFdiskConfig',
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
    const OS_DC_FDISK_CONFIG_AUTO = 'AUTO';
    const OS_DC_FDISK_CONFIG_MANUAL = 'MANUAL';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOsDcFdiskConfigAllowableValues()
    {
        return [
            self::OS_DC_FDISK_CONFIG_AUTO,
            self::OS_DC_FDISK_CONFIG_MANUAL,
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
        $this->container['autoTerminateTime'] = isset($data['autoTerminateTime']) ? $data['autoTerminateTime'] : null;
        $this->container['imageRef'] = isset($data['imageRef']) ? $data['imageRef'] : null;
        $this->container['flavorRef'] = isset($data['flavorRef']) ? $data['flavorRef'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['adminPass'] = isset($data['adminPass']) ? $data['adminPass'] : null;
        $this->container['blockDeviceMappingV2'] = isset($data['blockDeviceMappingV2']) ? $data['blockDeviceMappingV2'] : null;
        $this->container['configDrive'] = isset($data['configDrive']) ? $data['configDrive'] : null;
        $this->container['securityGroups'] = isset($data['securityGroups']) ? $data['securityGroups'] : null;
        $this->container['networks'] = isset($data['networks']) ? $data['networks'] : null;
        $this->container['keyName'] = isset($data['keyName']) ? $data['keyName'] : null;
        $this->container['userData'] = isset($data['userData']) ? $data['userData'] : null;
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
        $this->container['returnReservationId'] = isset($data['returnReservationId']) ? $data['returnReservationId'] : null;
        $this->container['minCount'] = isset($data['minCount']) ? $data['minCount'] : 1;
        $this->container['maxCount'] = isset($data['maxCount']) ? $data['maxCount'] : null;
        $this->container['osDcFdiskConfig'] = isset($data['osDcFdiskConfig']) ? $data['osDcFdiskConfig'] : null;
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
        if ($this->container['flavorRef'] === null) {
            $invalidProperties[] = "'flavorRef' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['networks'] === null) {
            $invalidProperties[] = "'networks' can't be null";
        }
            if (!is_null($this->container['userData']) && (mb_strlen($this->container['userData']) > 65535)) {
                $invalidProperties[] = "invalid value for 'userData', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['userData']) && (mb_strlen($this->container['userData']) < 0)) {
                $invalidProperties[] = "invalid value for 'userData', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getOsDcFdiskConfigAllowableValues();
                if (!is_null($this->container['osDcFdiskConfig']) && !in_array($this->container['osDcFdiskConfig'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'osDcFdiskConfig', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets autoTerminateTime
    *
    * @return string|null
    */
    public function getAutoTerminateTime()
    {
        return $this->container['autoTerminateTime'];
    }

    /**
    * Sets autoTerminateTime
    *
    * @param string|null $autoTerminateTime 弹性云服务器自动释放时间。  时间格式例如：2020-01-19T03:30:52Z
    *
    * @return $this
    */
    public function setAutoTerminateTime($autoTerminateTime)
    {
        $this->container['autoTerminateTime'] = $autoTerminateTime;
        return $this;
    }

    /**
    * Gets imageRef
    *
    * @return string|null
    */
    public function getImageRef()
    {
        return $this->container['imageRef'];
    }

    /**
    * Sets imageRef
    *
    * @param string|null $imageRef 镜像ID或者镜像资源的URL。  - 镜像ID示例：3b8d6fef-af77-42ab-b8b7-5a7f0f0af8f2 - 镜像URL示例：http://glance.openstack.example.com/images/3b8d6fef-af77-42ab-b8b7-5a7f0f0af8f2 - 指定卷作为系统卷创弹性云服务器时，不需填写该参数；非卷创建弹性云服务器时需填写有效的UUID参数，否则API将返回400错误。  > 说明： > - 对于部分规格的弹性云服务器，不能支持公有云平台提供的所有公共镜像。具体规格的镜像支持列表，请登录管理控制台，以“创建弹性云服务器”页面系统自动过滤的镜像信息为准，并在镜像服务页面查询镜像ID。 > - 如果创建失败，请尝试修改参数配置。
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
    * @param string $flavorRef 规格ID或URL。
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
    * @param string $name 弹性云服务器名称，长度大于0小于256字节。  > 说明： >  > 云服务器内部主机名(hostname)命名规则遵循 [RFC 952](https://tools.ietf.org/html/rfc952)和[RFC 1123](https://tools.ietf.org/html/rfc1123)命名规范，建议使用a-zA-z或0-9以及中划线\"-\"组成的名称命名，\"_\"将在弹性云服务器内部默认转化为\"-\"。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
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
    * @param map[string,string]|null $metadata 用户自定义字段键值对。  > - key的长度大于0小于256字节 > - value的长度大于等于0小于256字节   系统预留字段  1. admin_pass：弹性云服务器密码        Windows弹性云服务器Administrator用户的密码。     > 说明：     > 创建密码方式鉴权的Windows弹性云服务器时为必选字段。
    *
    * @return $this
    */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;
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
    * @param string|null $adminPass 如果需要使用密码方式登录云服务器，可使用adminPass字段指定云服务器管理员帐户初始登录密码。其中，Linux管理员帐户为root，Windows管理员帐户为Administrator。
    *
    * @return $this
    */
    public function setAdminPass($adminPass)
    {
        $this->container['adminPass'] = $adminPass;
        return $this;
    }

    /**
    * Gets blockDeviceMappingV2
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\NovaServerBlockDeviceMapping[]|null
    */
    public function getBlockDeviceMappingV2()
    {
        return $this->container['blockDeviceMappingV2'];
    }

    /**
    * Sets blockDeviceMappingV2
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\NovaServerBlockDeviceMapping[]|null $blockDeviceMappingV2 扩展属性，指定弹性云服务器存储设备的v2接口。是存储资源的新版本接口，指定卷场景不能批创弹性云服务器。  裸金属服务器场景不支持。
    *
    * @return $this
    */
    public function setBlockDeviceMappingV2($blockDeviceMappingV2)
    {
        $this->container['blockDeviceMappingV2'] = $blockDeviceMappingV2;
        return $this;
    }

    /**
    * Gets configDrive
    *
    * @return string|null
    */
    public function getConfigDrive()
    {
        return $this->container['configDrive'];
    }

    /**
    * Sets configDrive
    *
    * @param string|null $configDrive 扩展属性，开启后在弹性云服务器创建时挂载config_drive向弹性云服务器内部传递信息。  当前不支持该功能。
    *
    * @return $this
    */
    public function setConfigDrive($configDrive)
    {
        $this->container['configDrive'] = $configDrive;
        return $this;
    }

    /**
    * Gets securityGroups
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\NovaServerSecurityGroup[]|null
    */
    public function getSecurityGroups()
    {
        return $this->container['securityGroups'];
    }

    /**
    * Sets securityGroups
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\NovaServerSecurityGroup[]|null $securityGroups 扩展属性，指定弹性云服务器的安全组，默认为default。  指定network创建弹性云服务器时该字段有效。对于已存在端口，安全组请求无效。
    *
    * @return $this
    */
    public function setSecurityGroups($securityGroups)
    {
        $this->container['securityGroups'] = $securityGroups;
        return $this;
    }

    /**
    * Gets networks
    *
    * @return \HuaweiCloud\SDK\Ecs\V2\Model\NovaServerNetwork[]
    */
    public function getNetworks()
    {
        return $this->container['networks'];
    }

    /**
    * Sets networks
    *
    * @param \HuaweiCloud\SDK\Ecs\V2\Model\NovaServerNetwork[] $networks 扩展属性，指定弹性云服务器的网卡信息。有多个租户网络时必须指定。
    *
    * @return $this
    */
    public function setNetworks($networks)
    {
        $this->container['networks'] = $networks;
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
    * @param string|null $keyName 扩展属性，指定keypair的名称。
    *
    * @return $this
    */
    public function setKeyName($keyName)
    {
        $this->container['keyName'] = $keyName;
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
    * @param string|null $userData 扩展属性，字符串长度小于65535，且必须是base64加密的。
    *
    * @return $this
    */
    public function setUserData($userData)
    {
        $this->container['userData'] = $userData;
        return $this;
    }

    /**
    * Gets availabilityZone
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
    * @param string|null $availabilityZone 扩展属性，指定弹性云服务器所在的AZ。  创建弹性云服务器时需要填入该参数。
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
        return $this;
    }

    /**
    * Gets returnReservationId
    *
    * @return bool|null
    */
    public function getReturnReservationId()
    {
        return $this->container['returnReservationId'];
    }

    /**
    * Sets returnReservationId
    *
    * @param bool|null $returnReservationId 扩展属性，是否支持返回批量创建弹性云服务器的reservation_id。通过返回的reservation_id，可以过滤查询到本次创建的弹性云服务器。  - true，返回reservation_id。 - false，返回弹性云服务器信息。  > 说明： >  > 批量创建弹性云服务器时，支持使用该字段。
    *
    * @return $this
    */
    public function setReturnReservationId($returnReservationId)
    {
        $this->container['returnReservationId'] = $returnReservationId;
        return $this;
    }

    /**
    * Gets minCount
    *
    * @return int|null
    */
    public function getMinCount()
    {
        return $this->container['minCount'];
    }

    /**
    * Sets minCount
    *
    * @param int|null $minCount 扩展属性，表示创建弹性云服务器最小数量。  默认值为1。  > 说明： >  > 指定镜像创建弹性云服务器时，支持使用该字段。
    *
    * @return $this
    */
    public function setMinCount($minCount)
    {
        $this->container['minCount'] = $minCount;
        return $this;
    }

    /**
    * Gets maxCount
    *
    * @return int|null
    */
    public function getMaxCount()
    {
        return $this->container['maxCount'];
    }

    /**
    * Sets maxCount
    *
    * @param int|null $maxCount 表示创建弹性云服务器最大数量。  默认值与min_count的取值一致。  约束：  参数max_count的取值必须大于参数min_count的取值。  当min_count、max_count同时设置时，创弹性云服务器的数量取决于服务器的资源情况。根据资源情况，在min_count至max_count的取值范围内创建最大数量的弹性云服务器。  - 说明： -  - 指定镜像创建弹性云服务器时，支持使用该字段。
    *
    * @return $this
    */
    public function setMaxCount($maxCount)
    {
        $this->container['maxCount'] = $maxCount;
        return $this;
    }

    /**
    * Gets osDcFdiskConfig
    *
    * @return string|null
    */
    public function getOsDcFdiskConfig()
    {
        return $this->container['osDcFdiskConfig'];
    }

    /**
    * Sets osDcFdiskConfig
    *
    * @param string|null $osDcFdiskConfig diskConfig的方式，取值为AUTO、MANUAL。  - MANUAL，镜像空间不会扩展。 - AUTO，系统盘镜像空间会自动扩展为与flavor大小一致。  当前不支持该功能。
    *
    * @return $this
    */
    public function setOsDcFdiskConfig($osDcFdiskConfig)
    {
        $this->container['osDcFdiskConfig'] = $osDcFdiskConfig;
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
    * @param string|null $description 扩展属性，表示弹性云服务器描述信息，默认为空字符串。  - 长度最多允许85个字符。 - 不能包含“<” 和 “>”等特殊符号。  > 说明： >  > - V2接口不支持该字段。 > - V2.1接口支持该字段，此时，需在请求Header中增加一组Key-Value值。其中，Key固定为“X-OpenStack-Nova-API-Version” ，Value为微版本号，当Value的值为2.19时，支持使用该字段。
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

