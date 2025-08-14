<?php

namespace HuaweiCloud\SDK\Bms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MetadataList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MetadataList';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ecmResStatus  裸机的冻结状态
    * chargingMode  裸金属服务器的计费类型。1：按包年包月计费（即prePaid：预付费方式）。
    * meteringOrderId  按“包年/包月”计费的裸金属服务器对应的订单ID。
    * meteringProductId  按“包年/包月”计费的裸金属服务器对应的产品ID
    * vpcId  裸金属服务器所属的虚拟私有云ID
    * meteringImageId  裸金属服务器操作系统对应的镜像ID
    * meteringImagetype  镜像类型，目前支持：公共镜像（gold）私有镜像（private）共享镜像（shared）
    * baremetalPortIdList  裸金属服务器的网卡列表。
    * meteringResourcespeccode  裸金属服务器对应的资源规格编码，格式为：{规格ID}.{os_type}，例如physical.o2.medium.linux。
    * meteringResourcetype  裸金属服务器对应的资源类型，取值为：hws.resource.type.pm
    * imageName  裸金属服务器操作系统对应的镜像名称
    * opSvcUserid  用户ID（登录管理控制台，进入我的凭证，即可看到“用户ID”）
    * osType  操作系统类型，取值为：Linux、Windows
    * bmsSupportEvs  裸金属服务器是否支持EVS卷。
    * osBit  操作系统位数，一般取值为“32”或者“64”。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ecmResStatus' => 'string',
            'chargingMode' => 'string',
            'meteringOrderId' => 'string',
            'meteringProductId' => 'string',
            'vpcId' => 'string',
            'meteringImageId' => 'string',
            'meteringImagetype' => 'string',
            'baremetalPortIdList' => 'string',
            'meteringResourcespeccode' => 'string',
            'meteringResourcetype' => 'string',
            'imageName' => 'string',
            'opSvcUserid' => 'string',
            'osType' => 'string',
            'bmsSupportEvs' => 'string',
            'osBit' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ecmResStatus  裸机的冻结状态
    * chargingMode  裸金属服务器的计费类型。1：按包年包月计费（即prePaid：预付费方式）。
    * meteringOrderId  按“包年/包月”计费的裸金属服务器对应的订单ID。
    * meteringProductId  按“包年/包月”计费的裸金属服务器对应的产品ID
    * vpcId  裸金属服务器所属的虚拟私有云ID
    * meteringImageId  裸金属服务器操作系统对应的镜像ID
    * meteringImagetype  镜像类型，目前支持：公共镜像（gold）私有镜像（private）共享镜像（shared）
    * baremetalPortIdList  裸金属服务器的网卡列表。
    * meteringResourcespeccode  裸金属服务器对应的资源规格编码，格式为：{规格ID}.{os_type}，例如physical.o2.medium.linux。
    * meteringResourcetype  裸金属服务器对应的资源类型，取值为：hws.resource.type.pm
    * imageName  裸金属服务器操作系统对应的镜像名称
    * opSvcUserid  用户ID（登录管理控制台，进入我的凭证，即可看到“用户ID”）
    * osType  操作系统类型，取值为：Linux、Windows
    * bmsSupportEvs  裸金属服务器是否支持EVS卷。
    * osBit  操作系统位数，一般取值为“32”或者“64”。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ecmResStatus' => null,
        'chargingMode' => null,
        'meteringOrderId' => null,
        'meteringProductId' => null,
        'vpcId' => 'uuid',
        'meteringImageId' => 'uuid',
        'meteringImagetype' => null,
        'baremetalPortIdList' => null,
        'meteringResourcespeccode' => null,
        'meteringResourcetype' => null,
        'imageName' => null,
        'opSvcUserid' => null,
        'osType' => null,
        'bmsSupportEvs' => null,
        'osBit' => null
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
    * ecmResStatus  裸机的冻结状态
    * chargingMode  裸金属服务器的计费类型。1：按包年包月计费（即prePaid：预付费方式）。
    * meteringOrderId  按“包年/包月”计费的裸金属服务器对应的订单ID。
    * meteringProductId  按“包年/包月”计费的裸金属服务器对应的产品ID
    * vpcId  裸金属服务器所属的虚拟私有云ID
    * meteringImageId  裸金属服务器操作系统对应的镜像ID
    * meteringImagetype  镜像类型，目前支持：公共镜像（gold）私有镜像（private）共享镜像（shared）
    * baremetalPortIdList  裸金属服务器的网卡列表。
    * meteringResourcespeccode  裸金属服务器对应的资源规格编码，格式为：{规格ID}.{os_type}，例如physical.o2.medium.linux。
    * meteringResourcetype  裸金属服务器对应的资源类型，取值为：hws.resource.type.pm
    * imageName  裸金属服务器操作系统对应的镜像名称
    * opSvcUserid  用户ID（登录管理控制台，进入我的凭证，即可看到“用户ID”）
    * osType  操作系统类型，取值为：Linux、Windows
    * bmsSupportEvs  裸金属服务器是否支持EVS卷。
    * osBit  操作系统位数，一般取值为“32”或者“64”。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ecmResStatus' => 'EcmResStatus',
            'chargingMode' => 'chargingMode',
            'meteringOrderId' => 'metering.order_id',
            'meteringProductId' => 'metering.product_id',
            'vpcId' => 'vpc_id',
            'meteringImageId' => 'metering.image_id',
            'meteringImagetype' => 'metering.imagetype',
            'baremetalPortIdList' => 'baremetalPortIDList',
            'meteringResourcespeccode' => 'metering.resourcespeccode',
            'meteringResourcetype' => 'metering.resourcetype',
            'imageName' => 'image_name',
            'opSvcUserid' => 'op_svc_userid',
            'osType' => 'os_type',
            'bmsSupportEvs' => '__bms_support_evs',
            'osBit' => 'os_bit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ecmResStatus  裸机的冻结状态
    * chargingMode  裸金属服务器的计费类型。1：按包年包月计费（即prePaid：预付费方式）。
    * meteringOrderId  按“包年/包月”计费的裸金属服务器对应的订单ID。
    * meteringProductId  按“包年/包月”计费的裸金属服务器对应的产品ID
    * vpcId  裸金属服务器所属的虚拟私有云ID
    * meteringImageId  裸金属服务器操作系统对应的镜像ID
    * meteringImagetype  镜像类型，目前支持：公共镜像（gold）私有镜像（private）共享镜像（shared）
    * baremetalPortIdList  裸金属服务器的网卡列表。
    * meteringResourcespeccode  裸金属服务器对应的资源规格编码，格式为：{规格ID}.{os_type}，例如physical.o2.medium.linux。
    * meteringResourcetype  裸金属服务器对应的资源类型，取值为：hws.resource.type.pm
    * imageName  裸金属服务器操作系统对应的镜像名称
    * opSvcUserid  用户ID（登录管理控制台，进入我的凭证，即可看到“用户ID”）
    * osType  操作系统类型，取值为：Linux、Windows
    * bmsSupportEvs  裸金属服务器是否支持EVS卷。
    * osBit  操作系统位数，一般取值为“32”或者“64”。
    *
    * @var string[]
    */
    protected static $setters = [
            'ecmResStatus' => 'setEcmResStatus',
            'chargingMode' => 'setChargingMode',
            'meteringOrderId' => 'setMeteringOrderId',
            'meteringProductId' => 'setMeteringProductId',
            'vpcId' => 'setVpcId',
            'meteringImageId' => 'setMeteringImageId',
            'meteringImagetype' => 'setMeteringImagetype',
            'baremetalPortIdList' => 'setBaremetalPortIdList',
            'meteringResourcespeccode' => 'setMeteringResourcespeccode',
            'meteringResourcetype' => 'setMeteringResourcetype',
            'imageName' => 'setImageName',
            'opSvcUserid' => 'setOpSvcUserid',
            'osType' => 'setOsType',
            'bmsSupportEvs' => 'setBmsSupportEvs',
            'osBit' => 'setOsBit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ecmResStatus  裸机的冻结状态
    * chargingMode  裸金属服务器的计费类型。1：按包年包月计费（即prePaid：预付费方式）。
    * meteringOrderId  按“包年/包月”计费的裸金属服务器对应的订单ID。
    * meteringProductId  按“包年/包月”计费的裸金属服务器对应的产品ID
    * vpcId  裸金属服务器所属的虚拟私有云ID
    * meteringImageId  裸金属服务器操作系统对应的镜像ID
    * meteringImagetype  镜像类型，目前支持：公共镜像（gold）私有镜像（private）共享镜像（shared）
    * baremetalPortIdList  裸金属服务器的网卡列表。
    * meteringResourcespeccode  裸金属服务器对应的资源规格编码，格式为：{规格ID}.{os_type}，例如physical.o2.medium.linux。
    * meteringResourcetype  裸金属服务器对应的资源类型，取值为：hws.resource.type.pm
    * imageName  裸金属服务器操作系统对应的镜像名称
    * opSvcUserid  用户ID（登录管理控制台，进入我的凭证，即可看到“用户ID”）
    * osType  操作系统类型，取值为：Linux、Windows
    * bmsSupportEvs  裸金属服务器是否支持EVS卷。
    * osBit  操作系统位数，一般取值为“32”或者“64”。
    *
    * @var string[]
    */
    protected static $getters = [
            'ecmResStatus' => 'getEcmResStatus',
            'chargingMode' => 'getChargingMode',
            'meteringOrderId' => 'getMeteringOrderId',
            'meteringProductId' => 'getMeteringProductId',
            'vpcId' => 'getVpcId',
            'meteringImageId' => 'getMeteringImageId',
            'meteringImagetype' => 'getMeteringImagetype',
            'baremetalPortIdList' => 'getBaremetalPortIdList',
            'meteringResourcespeccode' => 'getMeteringResourcespeccode',
            'meteringResourcetype' => 'getMeteringResourcetype',
            'imageName' => 'getImageName',
            'opSvcUserid' => 'getOpSvcUserid',
            'osType' => 'getOsType',
            'bmsSupportEvs' => 'getBmsSupportEvs',
            'osBit' => 'getOsBit'
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
    const CHARGING_MODE__1 = '1';
    const METERING_IMAGETYPE_GOLD = 'gold';
    const METERING_IMAGETYPE__PRIVATE = 'private';
    const METERING_IMAGETYPE_SHARED = 'shared';
    const OS_TYPE_LINUX = 'Linux';
    const OS_TYPE_WINDOWS = 'Windows';
    const OS_BIT__32 = '32';
    const OS_BIT__64 = '64';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getChargingModeAllowableValues()
    {
        return [
            self::CHARGING_MODE__1,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getMeteringImagetypeAllowableValues()
    {
        return [
            self::METERING_IMAGETYPE_GOLD,
            self::METERING_IMAGETYPE__PRIVATE,
            self::METERING_IMAGETYPE_SHARED,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOsTypeAllowableValues()
    {
        return [
            self::OS_TYPE_LINUX,
            self::OS_TYPE_WINDOWS,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOsBitAllowableValues()
    {
        return [
            self::OS_BIT__32,
            self::OS_BIT__64,
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
        $this->container['ecmResStatus'] = isset($data['ecmResStatus']) ? $data['ecmResStatus'] : null;
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
        $this->container['meteringOrderId'] = isset($data['meteringOrderId']) ? $data['meteringOrderId'] : null;
        $this->container['meteringProductId'] = isset($data['meteringProductId']) ? $data['meteringProductId'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['meteringImageId'] = isset($data['meteringImageId']) ? $data['meteringImageId'] : null;
        $this->container['meteringImagetype'] = isset($data['meteringImagetype']) ? $data['meteringImagetype'] : null;
        $this->container['baremetalPortIdList'] = isset($data['baremetalPortIdList']) ? $data['baremetalPortIdList'] : null;
        $this->container['meteringResourcespeccode'] = isset($data['meteringResourcespeccode']) ? $data['meteringResourcespeccode'] : null;
        $this->container['meteringResourcetype'] = isset($data['meteringResourcetype']) ? $data['meteringResourcetype'] : null;
        $this->container['imageName'] = isset($data['imageName']) ? $data['imageName'] : null;
        $this->container['opSvcUserid'] = isset($data['opSvcUserid']) ? $data['opSvcUserid'] : null;
        $this->container['osType'] = isset($data['osType']) ? $data['osType'] : null;
        $this->container['bmsSupportEvs'] = isset($data['bmsSupportEvs']) ? $data['bmsSupportEvs'] : null;
        $this->container['osBit'] = isset($data['osBit']) ? $data['osBit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getChargingModeAllowableValues();
                if (!is_null($this->container['chargingMode']) && !in_array($this->container['chargingMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'chargingMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getMeteringImagetypeAllowableValues();
                if (!is_null($this->container['meteringImagetype']) && !in_array($this->container['meteringImagetype'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'meteringImagetype', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getOsTypeAllowableValues();
                if (!is_null($this->container['osType']) && !in_array($this->container['osType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'osType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getOsBitAllowableValues();
                if (!is_null($this->container['osBit']) && !in_array($this->container['osBit'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'osBit', must be one of '%s'",
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
    * Gets ecmResStatus
    *  裸机的冻结状态
    *
    * @return string|null
    */
    public function getEcmResStatus()
    {
        return $this->container['ecmResStatus'];
    }

    /**
    * Sets ecmResStatus
    *
    * @param string|null $ecmResStatus 裸机的冻结状态
    *
    * @return $this
    */
    public function setEcmResStatus($ecmResStatus)
    {
        $this->container['ecmResStatus'] = $ecmResStatus;
        return $this;
    }

    /**
    * Gets chargingMode
    *  裸金属服务器的计费类型。1：按包年包月计费（即prePaid：预付费方式）。
    *
    * @return string|null
    */
    public function getChargingMode()
    {
        return $this->container['chargingMode'];
    }

    /**
    * Sets chargingMode
    *
    * @param string|null $chargingMode 裸金属服务器的计费类型。1：按包年包月计费（即prePaid：预付费方式）。
    *
    * @return $this
    */
    public function setChargingMode($chargingMode)
    {
        $this->container['chargingMode'] = $chargingMode;
        return $this;
    }

    /**
    * Gets meteringOrderId
    *  按“包年/包月”计费的裸金属服务器对应的订单ID。
    *
    * @return string|null
    */
    public function getMeteringOrderId()
    {
        return $this->container['meteringOrderId'];
    }

    /**
    * Sets meteringOrderId
    *
    * @param string|null $meteringOrderId 按“包年/包月”计费的裸金属服务器对应的订单ID。
    *
    * @return $this
    */
    public function setMeteringOrderId($meteringOrderId)
    {
        $this->container['meteringOrderId'] = $meteringOrderId;
        return $this;
    }

    /**
    * Gets meteringProductId
    *  按“包年/包月”计费的裸金属服务器对应的产品ID
    *
    * @return string|null
    */
    public function getMeteringProductId()
    {
        return $this->container['meteringProductId'];
    }

    /**
    * Sets meteringProductId
    *
    * @param string|null $meteringProductId 按“包年/包月”计费的裸金属服务器对应的产品ID
    *
    * @return $this
    */
    public function setMeteringProductId($meteringProductId)
    {
        $this->container['meteringProductId'] = $meteringProductId;
        return $this;
    }

    /**
    * Gets vpcId
    *  裸金属服务器所属的虚拟私有云ID
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
    * @param string|null $vpcId 裸金属服务器所属的虚拟私有云ID
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets meteringImageId
    *  裸金属服务器操作系统对应的镜像ID
    *
    * @return string|null
    */
    public function getMeteringImageId()
    {
        return $this->container['meteringImageId'];
    }

    /**
    * Sets meteringImageId
    *
    * @param string|null $meteringImageId 裸金属服务器操作系统对应的镜像ID
    *
    * @return $this
    */
    public function setMeteringImageId($meteringImageId)
    {
        $this->container['meteringImageId'] = $meteringImageId;
        return $this;
    }

    /**
    * Gets meteringImagetype
    *  镜像类型，目前支持：公共镜像（gold）私有镜像（private）共享镜像（shared）
    *
    * @return string|null
    */
    public function getMeteringImagetype()
    {
        return $this->container['meteringImagetype'];
    }

    /**
    * Sets meteringImagetype
    *
    * @param string|null $meteringImagetype 镜像类型，目前支持：公共镜像（gold）私有镜像（private）共享镜像（shared）
    *
    * @return $this
    */
    public function setMeteringImagetype($meteringImagetype)
    {
        $this->container['meteringImagetype'] = $meteringImagetype;
        return $this;
    }

    /**
    * Gets baremetalPortIdList
    *  裸金属服务器的网卡列表。
    *
    * @return string|null
    */
    public function getBaremetalPortIdList()
    {
        return $this->container['baremetalPortIdList'];
    }

    /**
    * Sets baremetalPortIdList
    *
    * @param string|null $baremetalPortIdList 裸金属服务器的网卡列表。
    *
    * @return $this
    */
    public function setBaremetalPortIdList($baremetalPortIdList)
    {
        $this->container['baremetalPortIdList'] = $baremetalPortIdList;
        return $this;
    }

    /**
    * Gets meteringResourcespeccode
    *  裸金属服务器对应的资源规格编码，格式为：{规格ID}.{os_type}，例如physical.o2.medium.linux。
    *
    * @return string|null
    */
    public function getMeteringResourcespeccode()
    {
        return $this->container['meteringResourcespeccode'];
    }

    /**
    * Sets meteringResourcespeccode
    *
    * @param string|null $meteringResourcespeccode 裸金属服务器对应的资源规格编码，格式为：{规格ID}.{os_type}，例如physical.o2.medium.linux。
    *
    * @return $this
    */
    public function setMeteringResourcespeccode($meteringResourcespeccode)
    {
        $this->container['meteringResourcespeccode'] = $meteringResourcespeccode;
        return $this;
    }

    /**
    * Gets meteringResourcetype
    *  裸金属服务器对应的资源类型，取值为：hws.resource.type.pm
    *
    * @return string|null
    */
    public function getMeteringResourcetype()
    {
        return $this->container['meteringResourcetype'];
    }

    /**
    * Sets meteringResourcetype
    *
    * @param string|null $meteringResourcetype 裸金属服务器对应的资源类型，取值为：hws.resource.type.pm
    *
    * @return $this
    */
    public function setMeteringResourcetype($meteringResourcetype)
    {
        $this->container['meteringResourcetype'] = $meteringResourcetype;
        return $this;
    }

    /**
    * Gets imageName
    *  裸金属服务器操作系统对应的镜像名称
    *
    * @return string|null
    */
    public function getImageName()
    {
        return $this->container['imageName'];
    }

    /**
    * Sets imageName
    *
    * @param string|null $imageName 裸金属服务器操作系统对应的镜像名称
    *
    * @return $this
    */
    public function setImageName($imageName)
    {
        $this->container['imageName'] = $imageName;
        return $this;
    }

    /**
    * Gets opSvcUserid
    *  用户ID（登录管理控制台，进入我的凭证，即可看到“用户ID”）
    *
    * @return string|null
    */
    public function getOpSvcUserid()
    {
        return $this->container['opSvcUserid'];
    }

    /**
    * Sets opSvcUserid
    *
    * @param string|null $opSvcUserid 用户ID（登录管理控制台，进入我的凭证，即可看到“用户ID”）
    *
    * @return $this
    */
    public function setOpSvcUserid($opSvcUserid)
    {
        $this->container['opSvcUserid'] = $opSvcUserid;
        return $this;
    }

    /**
    * Gets osType
    *  操作系统类型，取值为：Linux、Windows
    *
    * @return string|null
    */
    public function getOsType()
    {
        return $this->container['osType'];
    }

    /**
    * Sets osType
    *
    * @param string|null $osType 操作系统类型，取值为：Linux、Windows
    *
    * @return $this
    */
    public function setOsType($osType)
    {
        $this->container['osType'] = $osType;
        return $this;
    }

    /**
    * Gets bmsSupportEvs
    *  裸金属服务器是否支持EVS卷。
    *
    * @return string|null
    */
    public function getBmsSupportEvs()
    {
        return $this->container['bmsSupportEvs'];
    }

    /**
    * Sets bmsSupportEvs
    *
    * @param string|null $bmsSupportEvs 裸金属服务器是否支持EVS卷。
    *
    * @return $this
    */
    public function setBmsSupportEvs($bmsSupportEvs)
    {
        $this->container['bmsSupportEvs'] = $bmsSupportEvs;
        return $this;
    }

    /**
    * Gets osBit
    *  操作系统位数，一般取值为“32”或者“64”。
    *
    * @return string|null
    */
    public function getOsBit()
    {
        return $this->container['osBit'];
    }

    /**
    * Sets osBit
    *
    * @param string|null $osBit 操作系统位数，一般取值为“32”或者“64”。
    *
    * @return $this
    */
    public function setOsBit($osBit)
    {
        $this->container['osBit'] = $osBit;
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

