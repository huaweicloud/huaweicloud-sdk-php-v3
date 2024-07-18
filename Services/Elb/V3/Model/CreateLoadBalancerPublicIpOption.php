<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateLoadBalancerPublicIpOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateLoadBalancerPublicIpOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ipVersion  参数解释：IP版本。  约束限制：取值只有4和6。4：IPv4, 6: IPv6。 [不支持IPv6，请勿设置为6。](tag:dt,dt_test)  取值范围：  - 4：表示IPv4。  - 6：表示IPv6。  默认取值：4
    * networkType  参数解释：弹性公网IP的网络类型，默认5_bgp，更多请参考弹性公网ip创建。  约束限制： [华南-深圳局点该参数取值只能为5_gray。](tag:hws) [只支持设置为5_gray。](tag:dt)  取值范围：5_bgp。  默认取值：5_bgp。
    * billingInfo  参数解释：计费订单信息。  约束限制： - 空：按需计费。 [ - 非空：包周期计费。格式：order_id:product_id:region_id:project_id ](tag:hws,hk,hws_eu,otc,tlf,ctc,hcso,sbc,g42,cmcc,hk_g42,dt_test,hcso_dt,mix,hk_sbc,hws_ocb,hk_vdf,fcs,fcs_dt,dt)  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42,dt,dt_test,hcso_dt,hcso,hk_vdf,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b)
    * description  参数解释：弹性公网IP的描述信息。
    * bandwidth  bandwidth
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ipVersion' => 'int',
            'networkType' => 'string',
            'billingInfo' => 'string',
            'description' => 'string',
            'bandwidth' => '\HuaweiCloud\SDK\Elb\V3\Model\CreateLoadBalancerBandwidthOption'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ipVersion  参数解释：IP版本。  约束限制：取值只有4和6。4：IPv4, 6: IPv6。 [不支持IPv6，请勿设置为6。](tag:dt,dt_test)  取值范围：  - 4：表示IPv4。  - 6：表示IPv6。  默认取值：4
    * networkType  参数解释：弹性公网IP的网络类型，默认5_bgp，更多请参考弹性公网ip创建。  约束限制： [华南-深圳局点该参数取值只能为5_gray。](tag:hws) [只支持设置为5_gray。](tag:dt)  取值范围：5_bgp。  默认取值：5_bgp。
    * billingInfo  参数解释：计费订单信息。  约束限制： - 空：按需计费。 [ - 非空：包周期计费。格式：order_id:product_id:region_id:project_id ](tag:hws,hk,hws_eu,otc,tlf,ctc,hcso,sbc,g42,cmcc,hk_g42,dt_test,hcso_dt,mix,hk_sbc,hws_ocb,hk_vdf,fcs,fcs_dt,dt)  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42,dt,dt_test,hcso_dt,hcso,hk_vdf,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b)
    * description  参数解释：弹性公网IP的描述信息。
    * bandwidth  bandwidth
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ipVersion' => 'int32',
        'networkType' => null,
        'billingInfo' => null,
        'description' => null,
        'bandwidth' => null
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
    * ipVersion  参数解释：IP版本。  约束限制：取值只有4和6。4：IPv4, 6: IPv6。 [不支持IPv6，请勿设置为6。](tag:dt,dt_test)  取值范围：  - 4：表示IPv4。  - 6：表示IPv6。  默认取值：4
    * networkType  参数解释：弹性公网IP的网络类型，默认5_bgp，更多请参考弹性公网ip创建。  约束限制： [华南-深圳局点该参数取值只能为5_gray。](tag:hws) [只支持设置为5_gray。](tag:dt)  取值范围：5_bgp。  默认取值：5_bgp。
    * billingInfo  参数解释：计费订单信息。  约束限制： - 空：按需计费。 [ - 非空：包周期计费。格式：order_id:product_id:region_id:project_id ](tag:hws,hk,hws_eu,otc,tlf,ctc,hcso,sbc,g42,cmcc,hk_g42,dt_test,hcso_dt,mix,hk_sbc,hws_ocb,hk_vdf,fcs,fcs_dt,dt)  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42,dt,dt_test,hcso_dt,hcso,hk_vdf,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b)
    * description  参数解释：弹性公网IP的描述信息。
    * bandwidth  bandwidth
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ipVersion' => 'ip_version',
            'networkType' => 'network_type',
            'billingInfo' => 'billing_info',
            'description' => 'description',
            'bandwidth' => 'bandwidth'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ipVersion  参数解释：IP版本。  约束限制：取值只有4和6。4：IPv4, 6: IPv6。 [不支持IPv6，请勿设置为6。](tag:dt,dt_test)  取值范围：  - 4：表示IPv4。  - 6：表示IPv6。  默认取值：4
    * networkType  参数解释：弹性公网IP的网络类型，默认5_bgp，更多请参考弹性公网ip创建。  约束限制： [华南-深圳局点该参数取值只能为5_gray。](tag:hws) [只支持设置为5_gray。](tag:dt)  取值范围：5_bgp。  默认取值：5_bgp。
    * billingInfo  参数解释：计费订单信息。  约束限制： - 空：按需计费。 [ - 非空：包周期计费。格式：order_id:product_id:region_id:project_id ](tag:hws,hk,hws_eu,otc,tlf,ctc,hcso,sbc,g42,cmcc,hk_g42,dt_test,hcso_dt,mix,hk_sbc,hws_ocb,hk_vdf,fcs,fcs_dt,dt)  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42,dt,dt_test,hcso_dt,hcso,hk_vdf,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b)
    * description  参数解释：弹性公网IP的描述信息。
    * bandwidth  bandwidth
    *
    * @var string[]
    */
    protected static $setters = [
            'ipVersion' => 'setIpVersion',
            'networkType' => 'setNetworkType',
            'billingInfo' => 'setBillingInfo',
            'description' => 'setDescription',
            'bandwidth' => 'setBandwidth'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ipVersion  参数解释：IP版本。  约束限制：取值只有4和6。4：IPv4, 6: IPv6。 [不支持IPv6，请勿设置为6。](tag:dt,dt_test)  取值范围：  - 4：表示IPv4。  - 6：表示IPv6。  默认取值：4
    * networkType  参数解释：弹性公网IP的网络类型，默认5_bgp，更多请参考弹性公网ip创建。  约束限制： [华南-深圳局点该参数取值只能为5_gray。](tag:hws) [只支持设置为5_gray。](tag:dt)  取值范围：5_bgp。  默认取值：5_bgp。
    * billingInfo  参数解释：计费订单信息。  约束限制： - 空：按需计费。 [ - 非空：包周期计费。格式：order_id:product_id:region_id:project_id ](tag:hws,hk,hws_eu,otc,tlf,ctc,hcso,sbc,g42,cmcc,hk_g42,dt_test,hcso_dt,mix,hk_sbc,hws_ocb,hk_vdf,fcs,fcs_dt,dt)  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42,dt,dt_test,hcso_dt,hcso,hk_vdf,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b)
    * description  参数解释：弹性公网IP的描述信息。
    * bandwidth  bandwidth
    *
    * @var string[]
    */
    protected static $getters = [
            'ipVersion' => 'getIpVersion',
            'networkType' => 'getNetworkType',
            'billingInfo' => 'getBillingInfo',
            'description' => 'getDescription',
            'bandwidth' => 'getBandwidth'
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
        $this->container['ipVersion'] = isset($data['ipVersion']) ? $data['ipVersion'] : null;
        $this->container['networkType'] = isset($data['networkType']) ? $data['networkType'] : null;
        $this->container['billingInfo'] = isset($data['billingInfo']) ? $data['billingInfo'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['bandwidth'] = isset($data['bandwidth']) ? $data['bandwidth'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['networkType'] === null) {
            $invalidProperties[] = "'networkType' can't be null";
        }
            if ((mb_strlen($this->container['networkType']) > 36)) {
                $invalidProperties[] = "invalid value for 'networkType', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['networkType']) < 1)) {
                $invalidProperties[] = "invalid value for 'networkType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['billingInfo']) && (mb_strlen($this->container['billingInfo']) > 1024)) {
                $invalidProperties[] = "invalid value for 'billingInfo', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['billingInfo']) && (mb_strlen($this->container['billingInfo']) < 1)) {
                $invalidProperties[] = "invalid value for 'billingInfo', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['bandwidth'] === null) {
            $invalidProperties[] = "'bandwidth' can't be null";
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
    * Gets ipVersion
    *  参数解释：IP版本。  约束限制：取值只有4和6。4：IPv4, 6: IPv6。 [不支持IPv6，请勿设置为6。](tag:dt,dt_test)  取值范围：  - 4：表示IPv4。  - 6：表示IPv6。  默认取值：4
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
    * @param int|null $ipVersion 参数解释：IP版本。  约束限制：取值只有4和6。4：IPv4, 6: IPv6。 [不支持IPv6，请勿设置为6。](tag:dt,dt_test)  取值范围：  - 4：表示IPv4。  - 6：表示IPv6。  默认取值：4
    *
    * @return $this
    */
    public function setIpVersion($ipVersion)
    {
        $this->container['ipVersion'] = $ipVersion;
        return $this;
    }

    /**
    * Gets networkType
    *  参数解释：弹性公网IP的网络类型，默认5_bgp，更多请参考弹性公网ip创建。  约束限制： [华南-深圳局点该参数取值只能为5_gray。](tag:hws) [只支持设置为5_gray。](tag:dt)  取值范围：5_bgp。  默认取值：5_bgp。
    *
    * @return string
    */
    public function getNetworkType()
    {
        return $this->container['networkType'];
    }

    /**
    * Sets networkType
    *
    * @param string $networkType 参数解释：弹性公网IP的网络类型，默认5_bgp，更多请参考弹性公网ip创建。  约束限制： [华南-深圳局点该参数取值只能为5_gray。](tag:hws) [只支持设置为5_gray。](tag:dt)  取值范围：5_bgp。  默认取值：5_bgp。
    *
    * @return $this
    */
    public function setNetworkType($networkType)
    {
        $this->container['networkType'] = $networkType;
        return $this;
    }

    /**
    * Gets billingInfo
    *  参数解释：计费订单信息。  约束限制： - 空：按需计费。 [ - 非空：包周期计费。格式：order_id:product_id:region_id:project_id ](tag:hws,hk,hws_eu,otc,tlf,ctc,hcso,sbc,g42,cmcc,hk_g42,dt_test,hcso_dt,mix,hk_sbc,hws_ocb,hk_vdf,fcs,fcs_dt,dt)  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42,dt,dt_test,hcso_dt,hcso,hk_vdf,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b)
    *
    * @return string|null
    */
    public function getBillingInfo()
    {
        return $this->container['billingInfo'];
    }

    /**
    * Sets billingInfo
    *
    * @param string|null $billingInfo 参数解释：计费订单信息。  约束限制： - 空：按需计费。 [ - 非空：包周期计费。格式：order_id:product_id:region_id:project_id ](tag:hws,hk,hws_eu,otc,tlf,ctc,hcso,sbc,g42,cmcc,hk_g42,dt_test,hcso_dt,mix,hk_sbc,hws_ocb,hk_vdf,fcs,fcs_dt,dt)  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42,dt,dt_test,hcso_dt,hcso,hk_vdf,fcs,fcs_vm,mix,hcso_g42,hcso_g42_b)
    *
    * @return $this
    */
    public function setBillingInfo($billingInfo)
    {
        $this->container['billingInfo'] = $billingInfo;
        return $this;
    }

    /**
    * Gets description
    *  参数解释：弹性公网IP的描述信息。
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
    * @param string|null $description 参数解释：弹性公网IP的描述信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets bandwidth
    *  bandwidth
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\CreateLoadBalancerBandwidthOption
    */
    public function getBandwidth()
    {
        return $this->container['bandwidth'];
    }

    /**
    * Sets bandwidth
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\CreateLoadBalancerBandwidthOption $bandwidth bandwidth
    *
    * @return $this
    */
    public function setBandwidth($bandwidth)
    {
        $this->container['bandwidth'] = $bandwidth;
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

