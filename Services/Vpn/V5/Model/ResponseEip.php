<?php

namespace HuaweiCloud\SDK\Vpn\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResponseEip implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResponseEip';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  功能说明：公网IP的唯一标识
    * ipVersion  功能说明: 公网IP版本号  取值范围：4, 6
    * ipBillingInfo  功能说明：公网IP的订单信息 约束：包周期才会有订单信息，按需资源此字段为空
    * type  功能说明：EIP的类型  取值范围：5_bgp（全动态BGP），5_sbgp（静态BGP）  华南-广州：5_bgp、5_sbgp  华东-上海一：5_bgp、5_sbgp  华东-上海二：5_bgp、5_sbgp  华北-北京一：5_bgp、5_sbgp  中国-香港：5_bgp  亚太-曼谷：5_bgp  亚太-新加坡：5_bgp  非洲-约翰内斯堡：5_bgp  西南-贵阳一：5_bgp、5_sbgp  华北-北京四：5_bgp、5_sbgp  拉美-圣地亚哥：5_bgp  拉美-圣保罗一：5_bgp  拉美-墨西哥城一：5_bgp  拉美-布宜诺斯艾利一：5_bgp  拉美-利马一：5_bgp  拉美-圣地亚哥二： 5_bgp 约束：必须是系统具体支持的类型。
    * ipAddress  功能说明: 公网IPv4地址
    * chargeMode  功能说明：按流量计费还是按带宽计费  取值范围：  bandwidth：按带宽计费  traffic：按流量计费  95peak_plus：按增强型95计费
    * bandwidthId  功能说明：带宽ID
    * bandwidthSize  带宽大小Mbit/s，flavor为V300时，取值不能大于300，flavor为V1G时，取值不能大于1024
    * bandwidthName  带宽名称
    * bandwidthBillingInfo  带宽订单信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'ipVersion' => 'int',
            'ipBillingInfo' => 'string',
            'type' => 'string',
            'ipAddress' => 'string',
            'chargeMode' => 'string',
            'bandwidthId' => 'string',
            'bandwidthSize' => 'int',
            'bandwidthName' => 'string',
            'bandwidthBillingInfo' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  功能说明：公网IP的唯一标识
    * ipVersion  功能说明: 公网IP版本号  取值范围：4, 6
    * ipBillingInfo  功能说明：公网IP的订单信息 约束：包周期才会有订单信息，按需资源此字段为空
    * type  功能说明：EIP的类型  取值范围：5_bgp（全动态BGP），5_sbgp（静态BGP）  华南-广州：5_bgp、5_sbgp  华东-上海一：5_bgp、5_sbgp  华东-上海二：5_bgp、5_sbgp  华北-北京一：5_bgp、5_sbgp  中国-香港：5_bgp  亚太-曼谷：5_bgp  亚太-新加坡：5_bgp  非洲-约翰内斯堡：5_bgp  西南-贵阳一：5_bgp、5_sbgp  华北-北京四：5_bgp、5_sbgp  拉美-圣地亚哥：5_bgp  拉美-圣保罗一：5_bgp  拉美-墨西哥城一：5_bgp  拉美-布宜诺斯艾利一：5_bgp  拉美-利马一：5_bgp  拉美-圣地亚哥二： 5_bgp 约束：必须是系统具体支持的类型。
    * ipAddress  功能说明: 公网IPv4地址
    * chargeMode  功能说明：按流量计费还是按带宽计费  取值范围：  bandwidth：按带宽计费  traffic：按流量计费  95peak_plus：按增强型95计费
    * bandwidthId  功能说明：带宽ID
    * bandwidthSize  带宽大小Mbit/s，flavor为V300时，取值不能大于300，flavor为V1G时，取值不能大于1024
    * bandwidthName  带宽名称
    * bandwidthBillingInfo  带宽订单信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'ipVersion' => 'int32',
        'ipBillingInfo' => null,
        'type' => null,
        'ipAddress' => null,
        'chargeMode' => null,
        'bandwidthId' => null,
        'bandwidthSize' => 'int32',
        'bandwidthName' => null,
        'bandwidthBillingInfo' => null
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
    * id  功能说明：公网IP的唯一标识
    * ipVersion  功能说明: 公网IP版本号  取值范围：4, 6
    * ipBillingInfo  功能说明：公网IP的订单信息 约束：包周期才会有订单信息，按需资源此字段为空
    * type  功能说明：EIP的类型  取值范围：5_bgp（全动态BGP），5_sbgp（静态BGP）  华南-广州：5_bgp、5_sbgp  华东-上海一：5_bgp、5_sbgp  华东-上海二：5_bgp、5_sbgp  华北-北京一：5_bgp、5_sbgp  中国-香港：5_bgp  亚太-曼谷：5_bgp  亚太-新加坡：5_bgp  非洲-约翰内斯堡：5_bgp  西南-贵阳一：5_bgp、5_sbgp  华北-北京四：5_bgp、5_sbgp  拉美-圣地亚哥：5_bgp  拉美-圣保罗一：5_bgp  拉美-墨西哥城一：5_bgp  拉美-布宜诺斯艾利一：5_bgp  拉美-利马一：5_bgp  拉美-圣地亚哥二： 5_bgp 约束：必须是系统具体支持的类型。
    * ipAddress  功能说明: 公网IPv4地址
    * chargeMode  功能说明：按流量计费还是按带宽计费  取值范围：  bandwidth：按带宽计费  traffic：按流量计费  95peak_plus：按增强型95计费
    * bandwidthId  功能说明：带宽ID
    * bandwidthSize  带宽大小Mbit/s，flavor为V300时，取值不能大于300，flavor为V1G时，取值不能大于1024
    * bandwidthName  带宽名称
    * bandwidthBillingInfo  带宽订单信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'ipVersion' => 'ip_version',
            'ipBillingInfo' => 'ip_billing_info',
            'type' => 'type',
            'ipAddress' => 'ip_address',
            'chargeMode' => 'charge_mode',
            'bandwidthId' => 'bandwidth_id',
            'bandwidthSize' => 'bandwidth_size',
            'bandwidthName' => 'bandwidth_name',
            'bandwidthBillingInfo' => 'bandwidth_billing_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  功能说明：公网IP的唯一标识
    * ipVersion  功能说明: 公网IP版本号  取值范围：4, 6
    * ipBillingInfo  功能说明：公网IP的订单信息 约束：包周期才会有订单信息，按需资源此字段为空
    * type  功能说明：EIP的类型  取值范围：5_bgp（全动态BGP），5_sbgp（静态BGP）  华南-广州：5_bgp、5_sbgp  华东-上海一：5_bgp、5_sbgp  华东-上海二：5_bgp、5_sbgp  华北-北京一：5_bgp、5_sbgp  中国-香港：5_bgp  亚太-曼谷：5_bgp  亚太-新加坡：5_bgp  非洲-约翰内斯堡：5_bgp  西南-贵阳一：5_bgp、5_sbgp  华北-北京四：5_bgp、5_sbgp  拉美-圣地亚哥：5_bgp  拉美-圣保罗一：5_bgp  拉美-墨西哥城一：5_bgp  拉美-布宜诺斯艾利一：5_bgp  拉美-利马一：5_bgp  拉美-圣地亚哥二： 5_bgp 约束：必须是系统具体支持的类型。
    * ipAddress  功能说明: 公网IPv4地址
    * chargeMode  功能说明：按流量计费还是按带宽计费  取值范围：  bandwidth：按带宽计费  traffic：按流量计费  95peak_plus：按增强型95计费
    * bandwidthId  功能说明：带宽ID
    * bandwidthSize  带宽大小Mbit/s，flavor为V300时，取值不能大于300，flavor为V1G时，取值不能大于1024
    * bandwidthName  带宽名称
    * bandwidthBillingInfo  带宽订单信息
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'ipVersion' => 'setIpVersion',
            'ipBillingInfo' => 'setIpBillingInfo',
            'type' => 'setType',
            'ipAddress' => 'setIpAddress',
            'chargeMode' => 'setChargeMode',
            'bandwidthId' => 'setBandwidthId',
            'bandwidthSize' => 'setBandwidthSize',
            'bandwidthName' => 'setBandwidthName',
            'bandwidthBillingInfo' => 'setBandwidthBillingInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  功能说明：公网IP的唯一标识
    * ipVersion  功能说明: 公网IP版本号  取值范围：4, 6
    * ipBillingInfo  功能说明：公网IP的订单信息 约束：包周期才会有订单信息，按需资源此字段为空
    * type  功能说明：EIP的类型  取值范围：5_bgp（全动态BGP），5_sbgp（静态BGP）  华南-广州：5_bgp、5_sbgp  华东-上海一：5_bgp、5_sbgp  华东-上海二：5_bgp、5_sbgp  华北-北京一：5_bgp、5_sbgp  中国-香港：5_bgp  亚太-曼谷：5_bgp  亚太-新加坡：5_bgp  非洲-约翰内斯堡：5_bgp  西南-贵阳一：5_bgp、5_sbgp  华北-北京四：5_bgp、5_sbgp  拉美-圣地亚哥：5_bgp  拉美-圣保罗一：5_bgp  拉美-墨西哥城一：5_bgp  拉美-布宜诺斯艾利一：5_bgp  拉美-利马一：5_bgp  拉美-圣地亚哥二： 5_bgp 约束：必须是系统具体支持的类型。
    * ipAddress  功能说明: 公网IPv4地址
    * chargeMode  功能说明：按流量计费还是按带宽计费  取值范围：  bandwidth：按带宽计费  traffic：按流量计费  95peak_plus：按增强型95计费
    * bandwidthId  功能说明：带宽ID
    * bandwidthSize  带宽大小Mbit/s，flavor为V300时，取值不能大于300，flavor为V1G时，取值不能大于1024
    * bandwidthName  带宽名称
    * bandwidthBillingInfo  带宽订单信息
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'ipVersion' => 'getIpVersion',
            'ipBillingInfo' => 'getIpBillingInfo',
            'type' => 'getType',
            'ipAddress' => 'getIpAddress',
            'chargeMode' => 'getChargeMode',
            'bandwidthId' => 'getBandwidthId',
            'bandwidthSize' => 'getBandwidthSize',
            'bandwidthName' => 'getBandwidthName',
            'bandwidthBillingInfo' => 'getBandwidthBillingInfo'
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
    const CHARGE_MODE_BANDWIDTH = 'bandwidth';
    const CHARGE_MODE_TRAFFIC = 'traffic';
    const CHARGE_MODE__95PEAK_PLUS = '95peak_plus';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getChargeModeAllowableValues()
    {
        return [
            self::CHARGE_MODE_BANDWIDTH,
            self::CHARGE_MODE_TRAFFIC,
            self::CHARGE_MODE__95PEAK_PLUS,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['ipVersion'] = isset($data['ipVersion']) ? $data['ipVersion'] : null;
        $this->container['ipBillingInfo'] = isset($data['ipBillingInfo']) ? $data['ipBillingInfo'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['ipAddress'] = isset($data['ipAddress']) ? $data['ipAddress'] : null;
        $this->container['chargeMode'] = isset($data['chargeMode']) ? $data['chargeMode'] : null;
        $this->container['bandwidthId'] = isset($data['bandwidthId']) ? $data['bandwidthId'] : null;
        $this->container['bandwidthSize'] = isset($data['bandwidthSize']) ? $data['bandwidthSize'] : null;
        $this->container['bandwidthName'] = isset($data['bandwidthName']) ? $data['bandwidthName'] : null;
        $this->container['bandwidthBillingInfo'] = isset($data['bandwidthBillingInfo']) ? $data['bandwidthBillingInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['id']) && !preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
            }
            if (!is_null($this->container['ipBillingInfo']) && (mb_strlen($this->container['ipBillingInfo']) > 1024)) {
                $invalidProperties[] = "invalid value for 'ipBillingInfo', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['ipBillingInfo']) && (mb_strlen($this->container['ipBillingInfo']) < 0)) {
                $invalidProperties[] = "invalid value for 'ipBillingInfo', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 36)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 0)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ipAddress']) && (mb_strlen($this->container['ipAddress']) > 64)) {
                $invalidProperties[] = "invalid value for 'ipAddress', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['ipAddress']) && (mb_strlen($this->container['ipAddress']) < 0)) {
                $invalidProperties[] = "invalid value for 'ipAddress', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getChargeModeAllowableValues();
                if (!is_null($this->container['chargeMode']) && !in_array($this->container['chargeMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'chargeMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['chargeMode']) && (mb_strlen($this->container['chargeMode']) > 36)) {
                $invalidProperties[] = "invalid value for 'chargeMode', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['chargeMode']) && (mb_strlen($this->container['chargeMode']) < 0)) {
                $invalidProperties[] = "invalid value for 'chargeMode', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['bandwidthId']) && (mb_strlen($this->container['bandwidthId']) > 36)) {
                $invalidProperties[] = "invalid value for 'bandwidthId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['bandwidthId']) && (mb_strlen($this->container['bandwidthId']) < 36)) {
                $invalidProperties[] = "invalid value for 'bandwidthId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['bandwidthId']) && !preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['bandwidthId'])) {
                $invalidProperties[] = "invalid value for 'bandwidthId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
            }
            if (!is_null($this->container['bandwidthSize']) && ($this->container['bandwidthSize'] > 1024)) {
                $invalidProperties[] = "invalid value for 'bandwidthSize', must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['bandwidthSize']) && ($this->container['bandwidthSize'] < 1)) {
                $invalidProperties[] = "invalid value for 'bandwidthSize', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['bandwidthName']) && (mb_strlen($this->container['bandwidthName']) > 64)) {
                $invalidProperties[] = "invalid value for 'bandwidthName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['bandwidthName']) && (mb_strlen($this->container['bandwidthName']) < 1)) {
                $invalidProperties[] = "invalid value for 'bandwidthName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['bandwidthName']) && !preg_match("/[一-龥A-Za-z0-9_.-]+/", $this->container['bandwidthName'])) {
                $invalidProperties[] = "invalid value for 'bandwidthName', must be conform to the pattern /[一-龥A-Za-z0-9_.-]+/.";
            }
            if (!is_null($this->container['bandwidthBillingInfo']) && (mb_strlen($this->container['bandwidthBillingInfo']) > 1024)) {
                $invalidProperties[] = "invalid value for 'bandwidthBillingInfo', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['bandwidthBillingInfo']) && (mb_strlen($this->container['bandwidthBillingInfo']) < 0)) {
                $invalidProperties[] = "invalid value for 'bandwidthBillingInfo', the character length must be bigger than or equal to 0.";
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
    * Gets id
    *  功能说明：公网IP的唯一标识
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 功能说明：公网IP的唯一标识
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets ipVersion
    *  功能说明: 公网IP版本号  取值范围：4, 6
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
    * @param int|null $ipVersion 功能说明: 公网IP版本号  取值范围：4, 6
    *
    * @return $this
    */
    public function setIpVersion($ipVersion)
    {
        $this->container['ipVersion'] = $ipVersion;
        return $this;
    }

    /**
    * Gets ipBillingInfo
    *  功能说明：公网IP的订单信息 约束：包周期才会有订单信息，按需资源此字段为空
    *
    * @return string|null
    */
    public function getIpBillingInfo()
    {
        return $this->container['ipBillingInfo'];
    }

    /**
    * Sets ipBillingInfo
    *
    * @param string|null $ipBillingInfo 功能说明：公网IP的订单信息 约束：包周期才会有订单信息，按需资源此字段为空
    *
    * @return $this
    */
    public function setIpBillingInfo($ipBillingInfo)
    {
        $this->container['ipBillingInfo'] = $ipBillingInfo;
        return $this;
    }

    /**
    * Gets type
    *  功能说明：EIP的类型  取值范围：5_bgp（全动态BGP），5_sbgp（静态BGP）  华南-广州：5_bgp、5_sbgp  华东-上海一：5_bgp、5_sbgp  华东-上海二：5_bgp、5_sbgp  华北-北京一：5_bgp、5_sbgp  中国-香港：5_bgp  亚太-曼谷：5_bgp  亚太-新加坡：5_bgp  非洲-约翰内斯堡：5_bgp  西南-贵阳一：5_bgp、5_sbgp  华北-北京四：5_bgp、5_sbgp  拉美-圣地亚哥：5_bgp  拉美-圣保罗一：5_bgp  拉美-墨西哥城一：5_bgp  拉美-布宜诺斯艾利一：5_bgp  拉美-利马一：5_bgp  拉美-圣地亚哥二： 5_bgp 约束：必须是系统具体支持的类型。
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
    * @param string|null $type 功能说明：EIP的类型  取值范围：5_bgp（全动态BGP），5_sbgp（静态BGP）  华南-广州：5_bgp、5_sbgp  华东-上海一：5_bgp、5_sbgp  华东-上海二：5_bgp、5_sbgp  华北-北京一：5_bgp、5_sbgp  中国-香港：5_bgp  亚太-曼谷：5_bgp  亚太-新加坡：5_bgp  非洲-约翰内斯堡：5_bgp  西南-贵阳一：5_bgp、5_sbgp  华北-北京四：5_bgp、5_sbgp  拉美-圣地亚哥：5_bgp  拉美-圣保罗一：5_bgp  拉美-墨西哥城一：5_bgp  拉美-布宜诺斯艾利一：5_bgp  拉美-利马一：5_bgp  拉美-圣地亚哥二： 5_bgp 约束：必须是系统具体支持的类型。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets ipAddress
    *  功能说明: 公网IPv4地址
    *
    * @return string|null
    */
    public function getIpAddress()
    {
        return $this->container['ipAddress'];
    }

    /**
    * Sets ipAddress
    *
    * @param string|null $ipAddress 功能说明: 公网IPv4地址
    *
    * @return $this
    */
    public function setIpAddress($ipAddress)
    {
        $this->container['ipAddress'] = $ipAddress;
        return $this;
    }

    /**
    * Gets chargeMode
    *  功能说明：按流量计费还是按带宽计费  取值范围：  bandwidth：按带宽计费  traffic：按流量计费  95peak_plus：按增强型95计费
    *
    * @return string|null
    */
    public function getChargeMode()
    {
        return $this->container['chargeMode'];
    }

    /**
    * Sets chargeMode
    *
    * @param string|null $chargeMode 功能说明：按流量计费还是按带宽计费  取值范围：  bandwidth：按带宽计费  traffic：按流量计费  95peak_plus：按增强型95计费
    *
    * @return $this
    */
    public function setChargeMode($chargeMode)
    {
        $this->container['chargeMode'] = $chargeMode;
        return $this;
    }

    /**
    * Gets bandwidthId
    *  功能说明：带宽ID
    *
    * @return string|null
    */
    public function getBandwidthId()
    {
        return $this->container['bandwidthId'];
    }

    /**
    * Sets bandwidthId
    *
    * @param string|null $bandwidthId 功能说明：带宽ID
    *
    * @return $this
    */
    public function setBandwidthId($bandwidthId)
    {
        $this->container['bandwidthId'] = $bandwidthId;
        return $this;
    }

    /**
    * Gets bandwidthSize
    *  带宽大小Mbit/s，flavor为V300时，取值不能大于300，flavor为V1G时，取值不能大于1024
    *
    * @return int|null
    */
    public function getBandwidthSize()
    {
        return $this->container['bandwidthSize'];
    }

    /**
    * Sets bandwidthSize
    *
    * @param int|null $bandwidthSize 带宽大小Mbit/s，flavor为V300时，取值不能大于300，flavor为V1G时，取值不能大于1024
    *
    * @return $this
    */
    public function setBandwidthSize($bandwidthSize)
    {
        $this->container['bandwidthSize'] = $bandwidthSize;
        return $this;
    }

    /**
    * Gets bandwidthName
    *  带宽名称
    *
    * @return string|null
    */
    public function getBandwidthName()
    {
        return $this->container['bandwidthName'];
    }

    /**
    * Sets bandwidthName
    *
    * @param string|null $bandwidthName 带宽名称
    *
    * @return $this
    */
    public function setBandwidthName($bandwidthName)
    {
        $this->container['bandwidthName'] = $bandwidthName;
        return $this;
    }

    /**
    * Gets bandwidthBillingInfo
    *  带宽订单信息
    *
    * @return string|null
    */
    public function getBandwidthBillingInfo()
    {
        return $this->container['bandwidthBillingInfo'];
    }

    /**
    * Sets bandwidthBillingInfo
    *
    * @param string|null $bandwidthBillingInfo 带宽订单信息
    *
    * @return $this
    */
    public function setBandwidthBillingInfo($bandwidthBillingInfo)
    {
        $this->container['bandwidthBillingInfo'] = $bandwidthBillingInfo;
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

