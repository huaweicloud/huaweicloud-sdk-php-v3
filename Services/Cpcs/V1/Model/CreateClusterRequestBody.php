<?php

namespace HuaweiCloud\SDK\Cpcs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateClusterRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateClusterRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * chargingMode  计费模式  - 0：包年/包月。
    * regionId  局点ID
    * periodType  周期类型  - 2：月。  - 3：年。
    * periodNum  周期数量
    * subscriptionNum  实例数量
    * periodProductId  产品id
    * periodResourceSpecCode  产品规格code
    * clusterName  集群名称
    * serviceType  服务类型  - ENCRYPT_DECRYPT：加解密服务。  - SIGN_VERIFY：签名验签服务。  - KMS：密钥管理服务。  - TIMESTAMP：时间戳服务。  - COLLA_SIGN：协同签名服务。  - OTP：动态令牌服务。  - DB_ENCRYPT：数据库加密服务。  - FILE_ENCRYPT：文件加密服务。  - DIGIT_SEAL：电子签章服务。  - SSL_VPN：SSL_VPN服务。  - IAS：身份认证服务。
    * shareType  共享类型  - EXCLUSIVE：应用独享。  - SHARED：应用共享。
    * imageId  镜像id
    * isAutoRenew  是否自动续费
    * promotionInfo  折扣
    * appId  应用id
    * enterpriseProjectId  企业项目id
    * type  实例类型  - SINGLE：单机。  - STANDBY：主备。
    * az  az
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'chargingMode' => 'int',
            'regionId' => 'string',
            'periodType' => 'int',
            'periodNum' => 'int',
            'subscriptionNum' => 'int',
            'periodProductId' => 'string',
            'periodResourceSpecCode' => 'string',
            'clusterName' => 'string',
            'serviceType' => 'string',
            'shareType' => 'string',
            'imageId' => 'string',
            'isAutoRenew' => 'int',
            'promotionInfo' => 'string',
            'appId' => 'string',
            'enterpriseProjectId' => 'string',
            'type' => 'string',
            'az' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * chargingMode  计费模式  - 0：包年/包月。
    * regionId  局点ID
    * periodType  周期类型  - 2：月。  - 3：年。
    * periodNum  周期数量
    * subscriptionNum  实例数量
    * periodProductId  产品id
    * periodResourceSpecCode  产品规格code
    * clusterName  集群名称
    * serviceType  服务类型  - ENCRYPT_DECRYPT：加解密服务。  - SIGN_VERIFY：签名验签服务。  - KMS：密钥管理服务。  - TIMESTAMP：时间戳服务。  - COLLA_SIGN：协同签名服务。  - OTP：动态令牌服务。  - DB_ENCRYPT：数据库加密服务。  - FILE_ENCRYPT：文件加密服务。  - DIGIT_SEAL：电子签章服务。  - SSL_VPN：SSL_VPN服务。  - IAS：身份认证服务。
    * shareType  共享类型  - EXCLUSIVE：应用独享。  - SHARED：应用共享。
    * imageId  镜像id
    * isAutoRenew  是否自动续费
    * promotionInfo  折扣
    * appId  应用id
    * enterpriseProjectId  企业项目id
    * type  实例类型  - SINGLE：单机。  - STANDBY：主备。
    * az  az
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'chargingMode' => 'int32',
        'regionId' => null,
        'periodType' => 'int32',
        'periodNum' => 'int32',
        'subscriptionNum' => 'int32',
        'periodProductId' => null,
        'periodResourceSpecCode' => null,
        'clusterName' => null,
        'serviceType' => null,
        'shareType' => null,
        'imageId' => null,
        'isAutoRenew' => 'int32',
        'promotionInfo' => null,
        'appId' => null,
        'enterpriseProjectId' => null,
        'type' => null,
        'az' => null
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
    * chargingMode  计费模式  - 0：包年/包月。
    * regionId  局点ID
    * periodType  周期类型  - 2：月。  - 3：年。
    * periodNum  周期数量
    * subscriptionNum  实例数量
    * periodProductId  产品id
    * periodResourceSpecCode  产品规格code
    * clusterName  集群名称
    * serviceType  服务类型  - ENCRYPT_DECRYPT：加解密服务。  - SIGN_VERIFY：签名验签服务。  - KMS：密钥管理服务。  - TIMESTAMP：时间戳服务。  - COLLA_SIGN：协同签名服务。  - OTP：动态令牌服务。  - DB_ENCRYPT：数据库加密服务。  - FILE_ENCRYPT：文件加密服务。  - DIGIT_SEAL：电子签章服务。  - SSL_VPN：SSL_VPN服务。  - IAS：身份认证服务。
    * shareType  共享类型  - EXCLUSIVE：应用独享。  - SHARED：应用共享。
    * imageId  镜像id
    * isAutoRenew  是否自动续费
    * promotionInfo  折扣
    * appId  应用id
    * enterpriseProjectId  企业项目id
    * type  实例类型  - SINGLE：单机。  - STANDBY：主备。
    * az  az
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'chargingMode' => 'charging_mode',
            'regionId' => 'region_id',
            'periodType' => 'period_type',
            'periodNum' => 'period_num',
            'subscriptionNum' => 'subscription_num',
            'periodProductId' => 'period_product_id',
            'periodResourceSpecCode' => 'period_resource_spec_code',
            'clusterName' => 'cluster_name',
            'serviceType' => 'service_type',
            'shareType' => 'share_type',
            'imageId' => 'image_id',
            'isAutoRenew' => 'is_auto_renew',
            'promotionInfo' => 'promotion_info',
            'appId' => 'app_id',
            'enterpriseProjectId' => 'enterprise_project_id',
            'type' => 'type',
            'az' => 'az'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * chargingMode  计费模式  - 0：包年/包月。
    * regionId  局点ID
    * periodType  周期类型  - 2：月。  - 3：年。
    * periodNum  周期数量
    * subscriptionNum  实例数量
    * periodProductId  产品id
    * periodResourceSpecCode  产品规格code
    * clusterName  集群名称
    * serviceType  服务类型  - ENCRYPT_DECRYPT：加解密服务。  - SIGN_VERIFY：签名验签服务。  - KMS：密钥管理服务。  - TIMESTAMP：时间戳服务。  - COLLA_SIGN：协同签名服务。  - OTP：动态令牌服务。  - DB_ENCRYPT：数据库加密服务。  - FILE_ENCRYPT：文件加密服务。  - DIGIT_SEAL：电子签章服务。  - SSL_VPN：SSL_VPN服务。  - IAS：身份认证服务。
    * shareType  共享类型  - EXCLUSIVE：应用独享。  - SHARED：应用共享。
    * imageId  镜像id
    * isAutoRenew  是否自动续费
    * promotionInfo  折扣
    * appId  应用id
    * enterpriseProjectId  企业项目id
    * type  实例类型  - SINGLE：单机。  - STANDBY：主备。
    * az  az
    *
    * @var string[]
    */
    protected static $setters = [
            'chargingMode' => 'setChargingMode',
            'regionId' => 'setRegionId',
            'periodType' => 'setPeriodType',
            'periodNum' => 'setPeriodNum',
            'subscriptionNum' => 'setSubscriptionNum',
            'periodProductId' => 'setPeriodProductId',
            'periodResourceSpecCode' => 'setPeriodResourceSpecCode',
            'clusterName' => 'setClusterName',
            'serviceType' => 'setServiceType',
            'shareType' => 'setShareType',
            'imageId' => 'setImageId',
            'isAutoRenew' => 'setIsAutoRenew',
            'promotionInfo' => 'setPromotionInfo',
            'appId' => 'setAppId',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'type' => 'setType',
            'az' => 'setAz'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * chargingMode  计费模式  - 0：包年/包月。
    * regionId  局点ID
    * periodType  周期类型  - 2：月。  - 3：年。
    * periodNum  周期数量
    * subscriptionNum  实例数量
    * periodProductId  产品id
    * periodResourceSpecCode  产品规格code
    * clusterName  集群名称
    * serviceType  服务类型  - ENCRYPT_DECRYPT：加解密服务。  - SIGN_VERIFY：签名验签服务。  - KMS：密钥管理服务。  - TIMESTAMP：时间戳服务。  - COLLA_SIGN：协同签名服务。  - OTP：动态令牌服务。  - DB_ENCRYPT：数据库加密服务。  - FILE_ENCRYPT：文件加密服务。  - DIGIT_SEAL：电子签章服务。  - SSL_VPN：SSL_VPN服务。  - IAS：身份认证服务。
    * shareType  共享类型  - EXCLUSIVE：应用独享。  - SHARED：应用共享。
    * imageId  镜像id
    * isAutoRenew  是否自动续费
    * promotionInfo  折扣
    * appId  应用id
    * enterpriseProjectId  企业项目id
    * type  实例类型  - SINGLE：单机。  - STANDBY：主备。
    * az  az
    *
    * @var string[]
    */
    protected static $getters = [
            'chargingMode' => 'getChargingMode',
            'regionId' => 'getRegionId',
            'periodType' => 'getPeriodType',
            'periodNum' => 'getPeriodNum',
            'subscriptionNum' => 'getSubscriptionNum',
            'periodProductId' => 'getPeriodProductId',
            'periodResourceSpecCode' => 'getPeriodResourceSpecCode',
            'clusterName' => 'getClusterName',
            'serviceType' => 'getServiceType',
            'shareType' => 'getShareType',
            'imageId' => 'getImageId',
            'isAutoRenew' => 'getIsAutoRenew',
            'promotionInfo' => 'getPromotionInfo',
            'appId' => 'getAppId',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'type' => 'getType',
            'az' => 'getAz'
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
    const CHARGING_MODE_0 = 0;
    const PERIOD_TYPE_2 = 2;
    const PERIOD_TYPE_3 = 3;
    const SHARE_TYPE_EXCLUSIVE = 'EXCLUSIVE';
    const SHARE_TYPE_SHARED = 'SHARED';
    const TYPE_SINGLE = 'SINGLE';
    const TYPE_STANDBY = 'STANDBY';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getChargingModeAllowableValues()
    {
        return [
            self::CHARGING_MODE_0,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPeriodTypeAllowableValues()
    {
        return [
            self::PERIOD_TYPE_2,
            self::PERIOD_TYPE_3,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getShareTypeAllowableValues()
    {
        return [
            self::SHARE_TYPE_EXCLUSIVE,
            self::SHARE_TYPE_SHARED,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_SINGLE,
            self::TYPE_STANDBY,
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
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['periodType'] = isset($data['periodType']) ? $data['periodType'] : null;
        $this->container['periodNum'] = isset($data['periodNum']) ? $data['periodNum'] : null;
        $this->container['subscriptionNum'] = isset($data['subscriptionNum']) ? $data['subscriptionNum'] : null;
        $this->container['periodProductId'] = isset($data['periodProductId']) ? $data['periodProductId'] : null;
        $this->container['periodResourceSpecCode'] = isset($data['periodResourceSpecCode']) ? $data['periodResourceSpecCode'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['serviceType'] = isset($data['serviceType']) ? $data['serviceType'] : null;
        $this->container['shareType'] = isset($data['shareType']) ? $data['shareType'] : null;
        $this->container['imageId'] = isset($data['imageId']) ? $data['imageId'] : null;
        $this->container['isAutoRenew'] = isset($data['isAutoRenew']) ? $data['isAutoRenew'] : null;
        $this->container['promotionInfo'] = isset($data['promotionInfo']) ? $data['promotionInfo'] : null;
        $this->container['appId'] = isset($data['appId']) ? $data['appId'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['az'] = isset($data['az']) ? $data['az'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['chargingMode'] === null) {
            $invalidProperties[] = "'chargingMode' can't be null";
        }
            $allowedValues = $this->getChargingModeAllowableValues();
                if (!is_null($this->container['chargingMode']) && !in_array($this->container['chargingMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'chargingMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['regionId'] === null) {
            $invalidProperties[] = "'regionId' can't be null";
        }
        if ($this->container['periodType'] === null) {
            $invalidProperties[] = "'periodType' can't be null";
        }
            $allowedValues = $this->getPeriodTypeAllowableValues();
                if (!is_null($this->container['periodType']) && !in_array($this->container['periodType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'periodType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['periodNum'] === null) {
            $invalidProperties[] = "'periodNum' can't be null";
        }
        if ($this->container['subscriptionNum'] === null) {
            $invalidProperties[] = "'subscriptionNum' can't be null";
        }
        if ($this->container['periodProductId'] === null) {
            $invalidProperties[] = "'periodProductId' can't be null";
        }
        if ($this->container['periodResourceSpecCode'] === null) {
            $invalidProperties[] = "'periodResourceSpecCode' can't be null";
        }
        if ($this->container['clusterName'] === null) {
            $invalidProperties[] = "'clusterName' can't be null";
        }
        if ($this->container['serviceType'] === null) {
            $invalidProperties[] = "'serviceType' can't be null";
        }
        if ($this->container['shareType'] === null) {
            $invalidProperties[] = "'shareType' can't be null";
        }
            $allowedValues = $this->getShareTypeAllowableValues();
                if (!is_null($this->container['shareType']) && !in_array($this->container['shareType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'shareType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['isAutoRenew'] === null) {
            $invalidProperties[] = "'isAutoRenew' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['az'] === null) {
            $invalidProperties[] = "'az' can't be null";
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
    * Gets chargingMode
    *  计费模式  - 0：包年/包月。
    *
    * @return int
    */
    public function getChargingMode()
    {
        return $this->container['chargingMode'];
    }

    /**
    * Sets chargingMode
    *
    * @param int $chargingMode 计费模式  - 0：包年/包月。
    *
    * @return $this
    */
    public function setChargingMode($chargingMode)
    {
        $this->container['chargingMode'] = $chargingMode;
        return $this;
    }

    /**
    * Gets regionId
    *  局点ID
    *
    * @return string
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string $regionId 局点ID
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets periodType
    *  周期类型  - 2：月。  - 3：年。
    *
    * @return int
    */
    public function getPeriodType()
    {
        return $this->container['periodType'];
    }

    /**
    * Sets periodType
    *
    * @param int $periodType 周期类型  - 2：月。  - 3：年。
    *
    * @return $this
    */
    public function setPeriodType($periodType)
    {
        $this->container['periodType'] = $periodType;
        return $this;
    }

    /**
    * Gets periodNum
    *  周期数量
    *
    * @return int
    */
    public function getPeriodNum()
    {
        return $this->container['periodNum'];
    }

    /**
    * Sets periodNum
    *
    * @param int $periodNum 周期数量
    *
    * @return $this
    */
    public function setPeriodNum($periodNum)
    {
        $this->container['periodNum'] = $periodNum;
        return $this;
    }

    /**
    * Gets subscriptionNum
    *  实例数量
    *
    * @return int
    */
    public function getSubscriptionNum()
    {
        return $this->container['subscriptionNum'];
    }

    /**
    * Sets subscriptionNum
    *
    * @param int $subscriptionNum 实例数量
    *
    * @return $this
    */
    public function setSubscriptionNum($subscriptionNum)
    {
        $this->container['subscriptionNum'] = $subscriptionNum;
        return $this;
    }

    /**
    * Gets periodProductId
    *  产品id
    *
    * @return string
    */
    public function getPeriodProductId()
    {
        return $this->container['periodProductId'];
    }

    /**
    * Sets periodProductId
    *
    * @param string $periodProductId 产品id
    *
    * @return $this
    */
    public function setPeriodProductId($periodProductId)
    {
        $this->container['periodProductId'] = $periodProductId;
        return $this;
    }

    /**
    * Gets periodResourceSpecCode
    *  产品规格code
    *
    * @return string
    */
    public function getPeriodResourceSpecCode()
    {
        return $this->container['periodResourceSpecCode'];
    }

    /**
    * Sets periodResourceSpecCode
    *
    * @param string $periodResourceSpecCode 产品规格code
    *
    * @return $this
    */
    public function setPeriodResourceSpecCode($periodResourceSpecCode)
    {
        $this->container['periodResourceSpecCode'] = $periodResourceSpecCode;
        return $this;
    }

    /**
    * Gets clusterName
    *  集群名称
    *
    * @return string
    */
    public function getClusterName()
    {
        return $this->container['clusterName'];
    }

    /**
    * Sets clusterName
    *
    * @param string $clusterName 集群名称
    *
    * @return $this
    */
    public function setClusterName($clusterName)
    {
        $this->container['clusterName'] = $clusterName;
        return $this;
    }

    /**
    * Gets serviceType
    *  服务类型  - ENCRYPT_DECRYPT：加解密服务。  - SIGN_VERIFY：签名验签服务。  - KMS：密钥管理服务。  - TIMESTAMP：时间戳服务。  - COLLA_SIGN：协同签名服务。  - OTP：动态令牌服务。  - DB_ENCRYPT：数据库加密服务。  - FILE_ENCRYPT：文件加密服务。  - DIGIT_SEAL：电子签章服务。  - SSL_VPN：SSL_VPN服务。  - IAS：身份认证服务。
    *
    * @return string
    */
    public function getServiceType()
    {
        return $this->container['serviceType'];
    }

    /**
    * Sets serviceType
    *
    * @param string $serviceType 服务类型  - ENCRYPT_DECRYPT：加解密服务。  - SIGN_VERIFY：签名验签服务。  - KMS：密钥管理服务。  - TIMESTAMP：时间戳服务。  - COLLA_SIGN：协同签名服务。  - OTP：动态令牌服务。  - DB_ENCRYPT：数据库加密服务。  - FILE_ENCRYPT：文件加密服务。  - DIGIT_SEAL：电子签章服务。  - SSL_VPN：SSL_VPN服务。  - IAS：身份认证服务。
    *
    * @return $this
    */
    public function setServiceType($serviceType)
    {
        $this->container['serviceType'] = $serviceType;
        return $this;
    }

    /**
    * Gets shareType
    *  共享类型  - EXCLUSIVE：应用独享。  - SHARED：应用共享。
    *
    * @return string
    */
    public function getShareType()
    {
        return $this->container['shareType'];
    }

    /**
    * Sets shareType
    *
    * @param string $shareType 共享类型  - EXCLUSIVE：应用独享。  - SHARED：应用共享。
    *
    * @return $this
    */
    public function setShareType($shareType)
    {
        $this->container['shareType'] = $shareType;
        return $this;
    }

    /**
    * Gets imageId
    *  镜像id
    *
    * @return string|null
    */
    public function getImageId()
    {
        return $this->container['imageId'];
    }

    /**
    * Sets imageId
    *
    * @param string|null $imageId 镜像id
    *
    * @return $this
    */
    public function setImageId($imageId)
    {
        $this->container['imageId'] = $imageId;
        return $this;
    }

    /**
    * Gets isAutoRenew
    *  是否自动续费
    *
    * @return int
    */
    public function getIsAutoRenew()
    {
        return $this->container['isAutoRenew'];
    }

    /**
    * Sets isAutoRenew
    *
    * @param int $isAutoRenew 是否自动续费
    *
    * @return $this
    */
    public function setIsAutoRenew($isAutoRenew)
    {
        $this->container['isAutoRenew'] = $isAutoRenew;
        return $this;
    }

    /**
    * Gets promotionInfo
    *  折扣
    *
    * @return string|null
    */
    public function getPromotionInfo()
    {
        return $this->container['promotionInfo'];
    }

    /**
    * Sets promotionInfo
    *
    * @param string|null $promotionInfo 折扣
    *
    * @return $this
    */
    public function setPromotionInfo($promotionInfo)
    {
        $this->container['promotionInfo'] = $promotionInfo;
        return $this;
    }

    /**
    * Gets appId
    *  应用id
    *
    * @return string|null
    */
    public function getAppId()
    {
        return $this->container['appId'];
    }

    /**
    * Sets appId
    *
    * @param string|null $appId 应用id
    *
    * @return $this
    */
    public function setAppId($appId)
    {
        $this->container['appId'] = $appId;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目id
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
    * @param string|null $enterpriseProjectId 企业项目id
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets type
    *  实例类型  - SINGLE：单机。  - STANDBY：主备。
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
    * @param string|null $type 实例类型  - SINGLE：单机。  - STANDBY：主备。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets az
    *  az
    *
    * @return string
    */
    public function getAz()
    {
        return $this->container['az'];
    }

    /**
    * Sets az
    *
    * @param string $az az
    *
    * @return $this
    */
    public function setAz($az)
    {
        $this->container['az'] = $az;
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

