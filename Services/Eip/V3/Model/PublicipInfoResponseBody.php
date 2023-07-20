<?php

namespace HuaweiCloud\SDK\Eip\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PublicipInfoResponseBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PublicipInfoResponseBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * publicipAddress  - 功能说明：弹性公网IPV4或IPv6的公网地址
    * publicipId  - 功能说明：带宽对应的弹性公网IPV4或IPv6的唯一标识
    * publicipType  - 功能说明：EIP的类型  - [取值范围：5_bgp](tag:hk_g42,g42,hk_sbc,sbc)  - [取值范围：5_chinamobile](tag:cmcc)  - [取值范围：5_bgp（Dynamic BGP）、5_mainbgp（Mail BGP）](tag:dt)  - [取值范围：    - eu-de: 5_bgp（Dynamic BGP）、5_mainbgp（Mail BGP）、5_gray（Dedicated Load Balancer）    - eu-nl: 5_bgp（Dynamic BGP）、5_mainbgp（Mail BGP）](tag:dt_test) - [取值范围：5_bgp（全动态BGP），5_sbgp（静态BGP），5_youxuanbgp（优选BGP）    - 华南-广州：5_bgp、5_sbgp    - 华东-上海一：5_bgp、5_sbgp    - 华东-上海二：5_bgp、5_sbgp    - 华北-北京一：5_bgp、5_sbgp    - 中国-香港：5_bgp、5_youxuanbgp    - 亚太-曼谷：5_bgp    - 亚太-新加坡：5_bgp    - 非洲-约翰内斯堡：5_bgp    - 西南-贵阳一：5_sbgp    - 华北-北京四：5_bgp、5_sbgp    - 拉美-圣地亚哥：5_bgp    - 拉美-圣保罗一：5_bgp    - 拉美-墨西哥城一：5_bgp    - 拉美-布宜诺斯艾利一：5_bgp    - 拉美-利马一：5_bgp    - 拉美-圣地亚哥二： 5_bgp  ](tag:hws,hws_hk)  - 约束：     - 必须是系统具体支持的类型。     - publicip_id为IPv4端口，所以[\"publicip_type\"](tag:cmcc,ctc,dt,dt_test,fcs,fcs_dt,fcs_vm,hws_hk,hws_ocb,ocb,tlf,tm,hk_g42,g42,hk_sbc,sbc)[\"type\"](tag:hws)字段未给定时，默认为[5_bgp](tag:ctc,dt,dt_test,fcs,fcs_dt,fcs_vm,g42,hk_g42,hk_sbc,hws,hws_hk,hws_ocb,mix,ocb,sbc,tlf,tm)[5_chinamobile](tag:cmcc)。
    * publicipv6Address  - 功能说明：IPv4时无此字段，IPv6时为申请到的弹性公网IP地址
    * ipVersion  - 功能说明：IP版本信息 - 取值范围：  4：IPv4；  6：IPv6
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'publicipAddress' => 'string',
            'publicipId' => 'string',
            'publicipType' => 'string',
            'publicipv6Address' => 'string',
            'ipVersion' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * publicipAddress  - 功能说明：弹性公网IPV4或IPv6的公网地址
    * publicipId  - 功能说明：带宽对应的弹性公网IPV4或IPv6的唯一标识
    * publicipType  - 功能说明：EIP的类型  - [取值范围：5_bgp](tag:hk_g42,g42,hk_sbc,sbc)  - [取值范围：5_chinamobile](tag:cmcc)  - [取值范围：5_bgp（Dynamic BGP）、5_mainbgp（Mail BGP）](tag:dt)  - [取值范围：    - eu-de: 5_bgp（Dynamic BGP）、5_mainbgp（Mail BGP）、5_gray（Dedicated Load Balancer）    - eu-nl: 5_bgp（Dynamic BGP）、5_mainbgp（Mail BGP）](tag:dt_test) - [取值范围：5_bgp（全动态BGP），5_sbgp（静态BGP），5_youxuanbgp（优选BGP）    - 华南-广州：5_bgp、5_sbgp    - 华东-上海一：5_bgp、5_sbgp    - 华东-上海二：5_bgp、5_sbgp    - 华北-北京一：5_bgp、5_sbgp    - 中国-香港：5_bgp、5_youxuanbgp    - 亚太-曼谷：5_bgp    - 亚太-新加坡：5_bgp    - 非洲-约翰内斯堡：5_bgp    - 西南-贵阳一：5_sbgp    - 华北-北京四：5_bgp、5_sbgp    - 拉美-圣地亚哥：5_bgp    - 拉美-圣保罗一：5_bgp    - 拉美-墨西哥城一：5_bgp    - 拉美-布宜诺斯艾利一：5_bgp    - 拉美-利马一：5_bgp    - 拉美-圣地亚哥二： 5_bgp  ](tag:hws,hws_hk)  - 约束：     - 必须是系统具体支持的类型。     - publicip_id为IPv4端口，所以[\"publicip_type\"](tag:cmcc,ctc,dt,dt_test,fcs,fcs_dt,fcs_vm,hws_hk,hws_ocb,ocb,tlf,tm,hk_g42,g42,hk_sbc,sbc)[\"type\"](tag:hws)字段未给定时，默认为[5_bgp](tag:ctc,dt,dt_test,fcs,fcs_dt,fcs_vm,g42,hk_g42,hk_sbc,hws,hws_hk,hws_ocb,mix,ocb,sbc,tlf,tm)[5_chinamobile](tag:cmcc)。
    * publicipv6Address  - 功能说明：IPv4时无此字段，IPv6时为申请到的弹性公网IP地址
    * ipVersion  - 功能说明：IP版本信息 - 取值范围：  4：IPv4；  6：IPv6
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'publicipAddress' => 'ipv4',
        'publicipId' => 'uuid',
        'publicipType' => null,
        'publicipv6Address' => 'ipv6',
        'ipVersion' => 'int32'
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
    * publicipAddress  - 功能说明：弹性公网IPV4或IPv6的公网地址
    * publicipId  - 功能说明：带宽对应的弹性公网IPV4或IPv6的唯一标识
    * publicipType  - 功能说明：EIP的类型  - [取值范围：5_bgp](tag:hk_g42,g42,hk_sbc,sbc)  - [取值范围：5_chinamobile](tag:cmcc)  - [取值范围：5_bgp（Dynamic BGP）、5_mainbgp（Mail BGP）](tag:dt)  - [取值范围：    - eu-de: 5_bgp（Dynamic BGP）、5_mainbgp（Mail BGP）、5_gray（Dedicated Load Balancer）    - eu-nl: 5_bgp（Dynamic BGP）、5_mainbgp（Mail BGP）](tag:dt_test) - [取值范围：5_bgp（全动态BGP），5_sbgp（静态BGP），5_youxuanbgp（优选BGP）    - 华南-广州：5_bgp、5_sbgp    - 华东-上海一：5_bgp、5_sbgp    - 华东-上海二：5_bgp、5_sbgp    - 华北-北京一：5_bgp、5_sbgp    - 中国-香港：5_bgp、5_youxuanbgp    - 亚太-曼谷：5_bgp    - 亚太-新加坡：5_bgp    - 非洲-约翰内斯堡：5_bgp    - 西南-贵阳一：5_sbgp    - 华北-北京四：5_bgp、5_sbgp    - 拉美-圣地亚哥：5_bgp    - 拉美-圣保罗一：5_bgp    - 拉美-墨西哥城一：5_bgp    - 拉美-布宜诺斯艾利一：5_bgp    - 拉美-利马一：5_bgp    - 拉美-圣地亚哥二： 5_bgp  ](tag:hws,hws_hk)  - 约束：     - 必须是系统具体支持的类型。     - publicip_id为IPv4端口，所以[\"publicip_type\"](tag:cmcc,ctc,dt,dt_test,fcs,fcs_dt,fcs_vm,hws_hk,hws_ocb,ocb,tlf,tm,hk_g42,g42,hk_sbc,sbc)[\"type\"](tag:hws)字段未给定时，默认为[5_bgp](tag:ctc,dt,dt_test,fcs,fcs_dt,fcs_vm,g42,hk_g42,hk_sbc,hws,hws_hk,hws_ocb,mix,ocb,sbc,tlf,tm)[5_chinamobile](tag:cmcc)。
    * publicipv6Address  - 功能说明：IPv4时无此字段，IPv6时为申请到的弹性公网IP地址
    * ipVersion  - 功能说明：IP版本信息 - 取值范围：  4：IPv4；  6：IPv6
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'publicipAddress' => 'publicip_address',
            'publicipId' => 'publicip_id',
            'publicipType' => 'publicip_type',
            'publicipv6Address' => 'publicipv6_address',
            'ipVersion' => 'ip_version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * publicipAddress  - 功能说明：弹性公网IPV4或IPv6的公网地址
    * publicipId  - 功能说明：带宽对应的弹性公网IPV4或IPv6的唯一标识
    * publicipType  - 功能说明：EIP的类型  - [取值范围：5_bgp](tag:hk_g42,g42,hk_sbc,sbc)  - [取值范围：5_chinamobile](tag:cmcc)  - [取值范围：5_bgp（Dynamic BGP）、5_mainbgp（Mail BGP）](tag:dt)  - [取值范围：    - eu-de: 5_bgp（Dynamic BGP）、5_mainbgp（Mail BGP）、5_gray（Dedicated Load Balancer）    - eu-nl: 5_bgp（Dynamic BGP）、5_mainbgp（Mail BGP）](tag:dt_test) - [取值范围：5_bgp（全动态BGP），5_sbgp（静态BGP），5_youxuanbgp（优选BGP）    - 华南-广州：5_bgp、5_sbgp    - 华东-上海一：5_bgp、5_sbgp    - 华东-上海二：5_bgp、5_sbgp    - 华北-北京一：5_bgp、5_sbgp    - 中国-香港：5_bgp、5_youxuanbgp    - 亚太-曼谷：5_bgp    - 亚太-新加坡：5_bgp    - 非洲-约翰内斯堡：5_bgp    - 西南-贵阳一：5_sbgp    - 华北-北京四：5_bgp、5_sbgp    - 拉美-圣地亚哥：5_bgp    - 拉美-圣保罗一：5_bgp    - 拉美-墨西哥城一：5_bgp    - 拉美-布宜诺斯艾利一：5_bgp    - 拉美-利马一：5_bgp    - 拉美-圣地亚哥二： 5_bgp  ](tag:hws,hws_hk)  - 约束：     - 必须是系统具体支持的类型。     - publicip_id为IPv4端口，所以[\"publicip_type\"](tag:cmcc,ctc,dt,dt_test,fcs,fcs_dt,fcs_vm,hws_hk,hws_ocb,ocb,tlf,tm,hk_g42,g42,hk_sbc,sbc)[\"type\"](tag:hws)字段未给定时，默认为[5_bgp](tag:ctc,dt,dt_test,fcs,fcs_dt,fcs_vm,g42,hk_g42,hk_sbc,hws,hws_hk,hws_ocb,mix,ocb,sbc,tlf,tm)[5_chinamobile](tag:cmcc)。
    * publicipv6Address  - 功能说明：IPv4时无此字段，IPv6时为申请到的弹性公网IP地址
    * ipVersion  - 功能说明：IP版本信息 - 取值范围：  4：IPv4；  6：IPv6
    *
    * @var string[]
    */
    protected static $setters = [
            'publicipAddress' => 'setPublicipAddress',
            'publicipId' => 'setPublicipId',
            'publicipType' => 'setPublicipType',
            'publicipv6Address' => 'setPublicipv6Address',
            'ipVersion' => 'setIpVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * publicipAddress  - 功能说明：弹性公网IPV4或IPv6的公网地址
    * publicipId  - 功能说明：带宽对应的弹性公网IPV4或IPv6的唯一标识
    * publicipType  - 功能说明：EIP的类型  - [取值范围：5_bgp](tag:hk_g42,g42,hk_sbc,sbc)  - [取值范围：5_chinamobile](tag:cmcc)  - [取值范围：5_bgp（Dynamic BGP）、5_mainbgp（Mail BGP）](tag:dt)  - [取值范围：    - eu-de: 5_bgp（Dynamic BGP）、5_mainbgp（Mail BGP）、5_gray（Dedicated Load Balancer）    - eu-nl: 5_bgp（Dynamic BGP）、5_mainbgp（Mail BGP）](tag:dt_test) - [取值范围：5_bgp（全动态BGP），5_sbgp（静态BGP），5_youxuanbgp（优选BGP）    - 华南-广州：5_bgp、5_sbgp    - 华东-上海一：5_bgp、5_sbgp    - 华东-上海二：5_bgp、5_sbgp    - 华北-北京一：5_bgp、5_sbgp    - 中国-香港：5_bgp、5_youxuanbgp    - 亚太-曼谷：5_bgp    - 亚太-新加坡：5_bgp    - 非洲-约翰内斯堡：5_bgp    - 西南-贵阳一：5_sbgp    - 华北-北京四：5_bgp、5_sbgp    - 拉美-圣地亚哥：5_bgp    - 拉美-圣保罗一：5_bgp    - 拉美-墨西哥城一：5_bgp    - 拉美-布宜诺斯艾利一：5_bgp    - 拉美-利马一：5_bgp    - 拉美-圣地亚哥二： 5_bgp  ](tag:hws,hws_hk)  - 约束：     - 必须是系统具体支持的类型。     - publicip_id为IPv4端口，所以[\"publicip_type\"](tag:cmcc,ctc,dt,dt_test,fcs,fcs_dt,fcs_vm,hws_hk,hws_ocb,ocb,tlf,tm,hk_g42,g42,hk_sbc,sbc)[\"type\"](tag:hws)字段未给定时，默认为[5_bgp](tag:ctc,dt,dt_test,fcs,fcs_dt,fcs_vm,g42,hk_g42,hk_sbc,hws,hws_hk,hws_ocb,mix,ocb,sbc,tlf,tm)[5_chinamobile](tag:cmcc)。
    * publicipv6Address  - 功能说明：IPv4时无此字段，IPv6时为申请到的弹性公网IP地址
    * ipVersion  - 功能说明：IP版本信息 - 取值范围：  4：IPv4；  6：IPv6
    *
    * @var string[]
    */
    protected static $getters = [
            'publicipAddress' => 'getPublicipAddress',
            'publicipId' => 'getPublicipId',
            'publicipType' => 'getPublicipType',
            'publicipv6Address' => 'getPublicipv6Address',
            'ipVersion' => 'getIpVersion'
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
    const IP_VERSION_4 = 4;
    const IP_VERSION_6 = 6;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getIpVersionAllowableValues()
    {
        return [
            self::IP_VERSION_4,
            self::IP_VERSION_6,
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
        $this->container['publicipAddress'] = isset($data['publicipAddress']) ? $data['publicipAddress'] : null;
        $this->container['publicipId'] = isset($data['publicipId']) ? $data['publicipId'] : null;
        $this->container['publicipType'] = isset($data['publicipType']) ? $data['publicipType'] : null;
        $this->container['publicipv6Address'] = isset($data['publicipv6Address']) ? $data['publicipv6Address'] : null;
        $this->container['ipVersion'] = isset($data['ipVersion']) ? $data['ipVersion'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['publicipId']) && (mb_strlen($this->container['publicipId']) > 36)) {
                $invalidProperties[] = "invalid value for 'publicipId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['publicipId']) && (mb_strlen($this->container['publicipId']) < 1)) {
                $invalidProperties[] = "invalid value for 'publicipId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['publicipType']) && (mb_strlen($this->container['publicipType']) > 36)) {
                $invalidProperties[] = "invalid value for 'publicipType', the character length must be smaller than or equal to 36.";
            }
            $allowedValues = $this->getIpVersionAllowableValues();
                if (!is_null($this->container['ipVersion']) && !in_array($this->container['ipVersion'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'ipVersion', must be one of '%s'",
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
    * Gets publicipAddress
    *  - 功能说明：弹性公网IPV4或IPv6的公网地址
    *
    * @return string|null
    */
    public function getPublicipAddress()
    {
        return $this->container['publicipAddress'];
    }

    /**
    * Sets publicipAddress
    *
    * @param string|null $publicipAddress - 功能说明：弹性公网IPV4或IPv6的公网地址
    *
    * @return $this
    */
    public function setPublicipAddress($publicipAddress)
    {
        $this->container['publicipAddress'] = $publicipAddress;
        return $this;
    }

    /**
    * Gets publicipId
    *  - 功能说明：带宽对应的弹性公网IPV4或IPv6的唯一标识
    *
    * @return string|null
    */
    public function getPublicipId()
    {
        return $this->container['publicipId'];
    }

    /**
    * Sets publicipId
    *
    * @param string|null $publicipId - 功能说明：带宽对应的弹性公网IPV4或IPv6的唯一标识
    *
    * @return $this
    */
    public function setPublicipId($publicipId)
    {
        $this->container['publicipId'] = $publicipId;
        return $this;
    }

    /**
    * Gets publicipType
    *  - 功能说明：EIP的类型  - [取值范围：5_bgp](tag:hk_g42,g42,hk_sbc,sbc)  - [取值范围：5_chinamobile](tag:cmcc)  - [取值范围：5_bgp（Dynamic BGP）、5_mainbgp（Mail BGP）](tag:dt)  - [取值范围：    - eu-de: 5_bgp（Dynamic BGP）、5_mainbgp（Mail BGP）、5_gray（Dedicated Load Balancer）    - eu-nl: 5_bgp（Dynamic BGP）、5_mainbgp（Mail BGP）](tag:dt_test) - [取值范围：5_bgp（全动态BGP），5_sbgp（静态BGP），5_youxuanbgp（优选BGP）    - 华南-广州：5_bgp、5_sbgp    - 华东-上海一：5_bgp、5_sbgp    - 华东-上海二：5_bgp、5_sbgp    - 华北-北京一：5_bgp、5_sbgp    - 中国-香港：5_bgp、5_youxuanbgp    - 亚太-曼谷：5_bgp    - 亚太-新加坡：5_bgp    - 非洲-约翰内斯堡：5_bgp    - 西南-贵阳一：5_sbgp    - 华北-北京四：5_bgp、5_sbgp    - 拉美-圣地亚哥：5_bgp    - 拉美-圣保罗一：5_bgp    - 拉美-墨西哥城一：5_bgp    - 拉美-布宜诺斯艾利一：5_bgp    - 拉美-利马一：5_bgp    - 拉美-圣地亚哥二： 5_bgp  ](tag:hws,hws_hk)  - 约束：     - 必须是系统具体支持的类型。     - publicip_id为IPv4端口，所以[\"publicip_type\"](tag:cmcc,ctc,dt,dt_test,fcs,fcs_dt,fcs_vm,hws_hk,hws_ocb,ocb,tlf,tm,hk_g42,g42,hk_sbc,sbc)[\"type\"](tag:hws)字段未给定时，默认为[5_bgp](tag:ctc,dt,dt_test,fcs,fcs_dt,fcs_vm,g42,hk_g42,hk_sbc,hws,hws_hk,hws_ocb,mix,ocb,sbc,tlf,tm)[5_chinamobile](tag:cmcc)。
    *
    * @return string|null
    */
    public function getPublicipType()
    {
        return $this->container['publicipType'];
    }

    /**
    * Sets publicipType
    *
    * @param string|null $publicipType - 功能说明：EIP的类型  - [取值范围：5_bgp](tag:hk_g42,g42,hk_sbc,sbc)  - [取值范围：5_chinamobile](tag:cmcc)  - [取值范围：5_bgp（Dynamic BGP）、5_mainbgp（Mail BGP）](tag:dt)  - [取值范围：    - eu-de: 5_bgp（Dynamic BGP）、5_mainbgp（Mail BGP）、5_gray（Dedicated Load Balancer）    - eu-nl: 5_bgp（Dynamic BGP）、5_mainbgp（Mail BGP）](tag:dt_test) - [取值范围：5_bgp（全动态BGP），5_sbgp（静态BGP），5_youxuanbgp（优选BGP）    - 华南-广州：5_bgp、5_sbgp    - 华东-上海一：5_bgp、5_sbgp    - 华东-上海二：5_bgp、5_sbgp    - 华北-北京一：5_bgp、5_sbgp    - 中国-香港：5_bgp、5_youxuanbgp    - 亚太-曼谷：5_bgp    - 亚太-新加坡：5_bgp    - 非洲-约翰内斯堡：5_bgp    - 西南-贵阳一：5_sbgp    - 华北-北京四：5_bgp、5_sbgp    - 拉美-圣地亚哥：5_bgp    - 拉美-圣保罗一：5_bgp    - 拉美-墨西哥城一：5_bgp    - 拉美-布宜诺斯艾利一：5_bgp    - 拉美-利马一：5_bgp    - 拉美-圣地亚哥二： 5_bgp  ](tag:hws,hws_hk)  - 约束：     - 必须是系统具体支持的类型。     - publicip_id为IPv4端口，所以[\"publicip_type\"](tag:cmcc,ctc,dt,dt_test,fcs,fcs_dt,fcs_vm,hws_hk,hws_ocb,ocb,tlf,tm,hk_g42,g42,hk_sbc,sbc)[\"type\"](tag:hws)字段未给定时，默认为[5_bgp](tag:ctc,dt,dt_test,fcs,fcs_dt,fcs_vm,g42,hk_g42,hk_sbc,hws,hws_hk,hws_ocb,mix,ocb,sbc,tlf,tm)[5_chinamobile](tag:cmcc)。
    *
    * @return $this
    */
    public function setPublicipType($publicipType)
    {
        $this->container['publicipType'] = $publicipType;
        return $this;
    }

    /**
    * Gets publicipv6Address
    *  - 功能说明：IPv4时无此字段，IPv6时为申请到的弹性公网IP地址
    *
    * @return string|null
    */
    public function getPublicipv6Address()
    {
        return $this->container['publicipv6Address'];
    }

    /**
    * Sets publicipv6Address
    *
    * @param string|null $publicipv6Address - 功能说明：IPv4时无此字段，IPv6时为申请到的弹性公网IP地址
    *
    * @return $this
    */
    public function setPublicipv6Address($publicipv6Address)
    {
        $this->container['publicipv6Address'] = $publicipv6Address;
        return $this;
    }

    /**
    * Gets ipVersion
    *  - 功能说明：IP版本信息 - 取值范围：  4：IPv4；  6：IPv6
    *
    * @return int|null
    */
    public function getIpVersion()
    {
        return $this->container['ipVersion'];
    }

    /**
    * Sets ipVersion
    *
    * @param int|null $ipVersion - 功能说明：IP版本信息 - 取值范围：  4：IPv4；  6：IPv6
    *
    * @return $this
    */
    public function setIpVersion($ipVersion)
    {
        $this->container['ipVersion'] = $ipVersion;
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

