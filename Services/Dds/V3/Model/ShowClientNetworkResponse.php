<?php

namespace HuaweiCloud\SDK\Dds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowClientNetworkResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowClientNetworkResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceId  实例ID，可以调用“[查询实例列表和详情](x-wc://file=zh-cn_topic_0000001369935045.xml)”接口获取。如果未申请实例，可以调用“[创建实例](x-wc://file=zh-cn_topic_0000001369734929.xml)”接口创建。
    * clientNetworkRanges  客户端所在网段。 > - [跨网段访问配置只有在客户端与副本集实例部署在不同网段的情况下才允许配置，例如访问副本集的客户端所在网段为192.168.0.0/16，副本集所在的网段为172.16.0.0/24，则需要添加跨网段配置192.168.0.0/16才能正常访问。只有副本集有该功能。](tag:ccs,cmcc,ctc,dt,dt_test,fcs,fcs_dt,g42,hic,hk_g42,hk_sbc,hc,hws_ocb,hws_sbc,ocb,tlf,tm,hk,hws_eu)
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceId' => 'string',
            'clientNetworkRanges' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceId  实例ID，可以调用“[查询实例列表和详情](x-wc://file=zh-cn_topic_0000001369935045.xml)”接口获取。如果未申请实例，可以调用“[创建实例](x-wc://file=zh-cn_topic_0000001369734929.xml)”接口创建。
    * clientNetworkRanges  客户端所在网段。 > - [跨网段访问配置只有在客户端与副本集实例部署在不同网段的情况下才允许配置，例如访问副本集的客户端所在网段为192.168.0.0/16，副本集所在的网段为172.16.0.0/24，则需要添加跨网段配置192.168.0.0/16才能正常访问。只有副本集有该功能。](tag:ccs,cmcc,ctc,dt,dt_test,fcs,fcs_dt,g42,hic,hk_g42,hk_sbc,hc,hws_ocb,hws_sbc,ocb,tlf,tm,hk,hws_eu)
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceId' => null,
        'clientNetworkRanges' => null
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
    * instanceId  实例ID，可以调用“[查询实例列表和详情](x-wc://file=zh-cn_topic_0000001369935045.xml)”接口获取。如果未申请实例，可以调用“[创建实例](x-wc://file=zh-cn_topic_0000001369734929.xml)”接口创建。
    * clientNetworkRanges  客户端所在网段。 > - [跨网段访问配置只有在客户端与副本集实例部署在不同网段的情况下才允许配置，例如访问副本集的客户端所在网段为192.168.0.0/16，副本集所在的网段为172.16.0.0/24，则需要添加跨网段配置192.168.0.0/16才能正常访问。只有副本集有该功能。](tag:ccs,cmcc,ctc,dt,dt_test,fcs,fcs_dt,g42,hic,hk_g42,hk_sbc,hc,hws_ocb,hws_sbc,ocb,tlf,tm,hk,hws_eu)
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceId' => 'instance_id',
            'clientNetworkRanges' => 'client_network_ranges'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceId  实例ID，可以调用“[查询实例列表和详情](x-wc://file=zh-cn_topic_0000001369935045.xml)”接口获取。如果未申请实例，可以调用“[创建实例](x-wc://file=zh-cn_topic_0000001369734929.xml)”接口创建。
    * clientNetworkRanges  客户端所在网段。 > - [跨网段访问配置只有在客户端与副本集实例部署在不同网段的情况下才允许配置，例如访问副本集的客户端所在网段为192.168.0.0/16，副本集所在的网段为172.16.0.0/24，则需要添加跨网段配置192.168.0.0/16才能正常访问。只有副本集有该功能。](tag:ccs,cmcc,ctc,dt,dt_test,fcs,fcs_dt,g42,hic,hk_g42,hk_sbc,hc,hws_ocb,hws_sbc,ocb,tlf,tm,hk,hws_eu)
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceId' => 'setInstanceId',
            'clientNetworkRanges' => 'setClientNetworkRanges'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceId  实例ID，可以调用“[查询实例列表和详情](x-wc://file=zh-cn_topic_0000001369935045.xml)”接口获取。如果未申请实例，可以调用“[创建实例](x-wc://file=zh-cn_topic_0000001369734929.xml)”接口创建。
    * clientNetworkRanges  客户端所在网段。 > - [跨网段访问配置只有在客户端与副本集实例部署在不同网段的情况下才允许配置，例如访问副本集的客户端所在网段为192.168.0.0/16，副本集所在的网段为172.16.0.0/24，则需要添加跨网段配置192.168.0.0/16才能正常访问。只有副本集有该功能。](tag:ccs,cmcc,ctc,dt,dt_test,fcs,fcs_dt,g42,hic,hk_g42,hk_sbc,hc,hws_ocb,hws_sbc,ocb,tlf,tm,hk,hws_eu)
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceId' => 'getInstanceId',
            'clientNetworkRanges' => 'getClientNetworkRanges'
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['clientNetworkRanges'] = isset($data['clientNetworkRanges']) ? $data['clientNetworkRanges'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets instanceId
    *  实例ID，可以调用“[查询实例列表和详情](x-wc://file=zh-cn_topic_0000001369935045.xml)”接口获取。如果未申请实例，可以调用“[创建实例](x-wc://file=zh-cn_topic_0000001369734929.xml)”接口创建。
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 实例ID，可以调用“[查询实例列表和详情](x-wc://file=zh-cn_topic_0000001369935045.xml)”接口获取。如果未申请实例，可以调用“[创建实例](x-wc://file=zh-cn_topic_0000001369734929.xml)”接口创建。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets clientNetworkRanges
    *  客户端所在网段。 > - [跨网段访问配置只有在客户端与副本集实例部署在不同网段的情况下才允许配置，例如访问副本集的客户端所在网段为192.168.0.0/16，副本集所在的网段为172.16.0.0/24，则需要添加跨网段配置192.168.0.0/16才能正常访问。只有副本集有该功能。](tag:ccs,cmcc,ctc,dt,dt_test,fcs,fcs_dt,g42,hic,hk_g42,hk_sbc,hc,hws_ocb,hws_sbc,ocb,tlf,tm,hk,hws_eu)
    *
    * @return string[]|null
    */
    public function getClientNetworkRanges()
    {
        return $this->container['clientNetworkRanges'];
    }

    /**
    * Sets clientNetworkRanges
    *
    * @param string[]|null $clientNetworkRanges 客户端所在网段。 > - [跨网段访问配置只有在客户端与副本集实例部署在不同网段的情况下才允许配置，例如访问副本集的客户端所在网段为192.168.0.0/16，副本集所在的网段为172.16.0.0/24，则需要添加跨网段配置192.168.0.0/16才能正常访问。只有副本集有该功能。](tag:ccs,cmcc,ctc,dt,dt_test,fcs,fcs_dt,g42,hic,hk_g42,hk_sbc,hc,hws_ocb,hws_sbc,ocb,tlf,tm,hk,hws_eu)
    *
    * @return $this
    */
    public function setClientNetworkRanges($clientNetworkRanges)
    {
        $this->container['clientNetworkRanges'] = $clientNetworkRanges;
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

