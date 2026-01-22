<?php

namespace HuaweiCloud\SDK\Kafka\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ModifyKafkaPublicIPAccessSwitchReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ModifyKafkaPublicIPAccessSwitchReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * eipAddress  **参数解释**： EIP地址。  **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * publicBoundwidth  **参数解释**： 公网带宽。  **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * publicipId  **参数解释**： 公网IP的ID。[获取方法：参考[[《弹性公网IP API参考》](https://support.huaweicloud.com/api-eip/ListPublicipsV3.html)](tag:hws)[[《弹性公网IP API参考》](https://support.huaweicloud.com/intl/zh-cn/api-eip/ListPublicipsV3.html)](tag:hws_hk)[[《弹性公网IP API参考》](https://support.huaweicloud.com/eu/api-eip/ListPublicipsV3.html)](tag:hws_eu)[《弹性公网IP API参考》](tag:ax,cmcc,ctc,sbc,hk_sbc,g42,hk_g42,srg,dt,ocb,hws_ocb,hcs,fcs)，调用“查询弹性公网IP列表”接口，从响应体中获取弹性公网IP的ID。](tag:ax,cmcc,ctc,sbc,hk_sbc,g42,hk_g42,srg,dt,ocb,hws_ocb,hcs,fcs,hws,hws_hk,hws_eu) **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'eipAddress' => 'string',
            'publicBoundwidth' => 'int',
            'publicipId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * eipAddress  **参数解释**： EIP地址。  **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * publicBoundwidth  **参数解释**： 公网带宽。  **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * publicipId  **参数解释**： 公网IP的ID。[获取方法：参考[[《弹性公网IP API参考》](https://support.huaweicloud.com/api-eip/ListPublicipsV3.html)](tag:hws)[[《弹性公网IP API参考》](https://support.huaweicloud.com/intl/zh-cn/api-eip/ListPublicipsV3.html)](tag:hws_hk)[[《弹性公网IP API参考》](https://support.huaweicloud.com/eu/api-eip/ListPublicipsV3.html)](tag:hws_eu)[《弹性公网IP API参考》](tag:ax,cmcc,ctc,sbc,hk_sbc,g42,hk_g42,srg,dt,ocb,hws_ocb,hcs,fcs)，调用“查询弹性公网IP列表”接口，从响应体中获取弹性公网IP的ID。](tag:ax,cmcc,ctc,sbc,hk_sbc,g42,hk_g42,srg,dt,ocb,hws_ocb,hcs,fcs,hws,hws_hk,hws_eu) **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'eipAddress' => null,
        'publicBoundwidth' => null,
        'publicipId' => null
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
    * eipAddress  **参数解释**： EIP地址。  **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * publicBoundwidth  **参数解释**： 公网带宽。  **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * publicipId  **参数解释**： 公网IP的ID。[获取方法：参考[[《弹性公网IP API参考》](https://support.huaweicloud.com/api-eip/ListPublicipsV3.html)](tag:hws)[[《弹性公网IP API参考》](https://support.huaweicloud.com/intl/zh-cn/api-eip/ListPublicipsV3.html)](tag:hws_hk)[[《弹性公网IP API参考》](https://support.huaweicloud.com/eu/api-eip/ListPublicipsV3.html)](tag:hws_eu)[《弹性公网IP API参考》](tag:ax,cmcc,ctc,sbc,hk_sbc,g42,hk_g42,srg,dt,ocb,hws_ocb,hcs,fcs)，调用“查询弹性公网IP列表”接口，从响应体中获取弹性公网IP的ID。](tag:ax,cmcc,ctc,sbc,hk_sbc,g42,hk_g42,srg,dt,ocb,hws_ocb,hcs,fcs,hws,hws_hk,hws_eu) **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'eipAddress' => 'eip_address',
            'publicBoundwidth' => 'public_boundwidth',
            'publicipId' => 'publicip_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * eipAddress  **参数解释**： EIP地址。  **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * publicBoundwidth  **参数解释**： 公网带宽。  **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * publicipId  **参数解释**： 公网IP的ID。[获取方法：参考[[《弹性公网IP API参考》](https://support.huaweicloud.com/api-eip/ListPublicipsV3.html)](tag:hws)[[《弹性公网IP API参考》](https://support.huaweicloud.com/intl/zh-cn/api-eip/ListPublicipsV3.html)](tag:hws_hk)[[《弹性公网IP API参考》](https://support.huaweicloud.com/eu/api-eip/ListPublicipsV3.html)](tag:hws_eu)[《弹性公网IP API参考》](tag:ax,cmcc,ctc,sbc,hk_sbc,g42,hk_g42,srg,dt,ocb,hws_ocb,hcs,fcs)，调用“查询弹性公网IP列表”接口，从响应体中获取弹性公网IP的ID。](tag:ax,cmcc,ctc,sbc,hk_sbc,g42,hk_g42,srg,dt,ocb,hws_ocb,hcs,fcs,hws,hws_hk,hws_eu) **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'eipAddress' => 'setEipAddress',
            'publicBoundwidth' => 'setPublicBoundwidth',
            'publicipId' => 'setPublicipId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * eipAddress  **参数解释**： EIP地址。  **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * publicBoundwidth  **参数解释**： 公网带宽。  **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    * publicipId  **参数解释**： 公网IP的ID。[获取方法：参考[[《弹性公网IP API参考》](https://support.huaweicloud.com/api-eip/ListPublicipsV3.html)](tag:hws)[[《弹性公网IP API参考》](https://support.huaweicloud.com/intl/zh-cn/api-eip/ListPublicipsV3.html)](tag:hws_hk)[[《弹性公网IP API参考》](https://support.huaweicloud.com/eu/api-eip/ListPublicipsV3.html)](tag:hws_eu)[《弹性公网IP API参考》](tag:ax,cmcc,ctc,sbc,hk_sbc,g42,hk_g42,srg,dt,ocb,hws_ocb,hcs,fcs)，调用“查询弹性公网IP列表”接口，从响应体中获取弹性公网IP的ID。](tag:ax,cmcc,ctc,sbc,hk_sbc,g42,hk_g42,srg,dt,ocb,hws_ocb,hcs,fcs,hws,hws_hk,hws_eu) **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'eipAddress' => 'getEipAddress',
            'publicBoundwidth' => 'getPublicBoundwidth',
            'publicipId' => 'getPublicipId'
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
        $this->container['eipAddress'] = isset($data['eipAddress']) ? $data['eipAddress'] : null;
        $this->container['publicBoundwidth'] = isset($data['publicBoundwidth']) ? $data['publicBoundwidth'] : null;
        $this->container['publicipId'] = isset($data['publicipId']) ? $data['publicipId'] : null;
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
    * Gets eipAddress
    *  **参数解释**： EIP地址。  **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getEipAddress()
    {
        return $this->container['eipAddress'];
    }

    /**
    * Sets eipAddress
    *
    * @param string|null $eipAddress **参数解释**： EIP地址。  **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setEipAddress($eipAddress)
    {
        $this->container['eipAddress'] = $eipAddress;
        return $this;
    }

    /**
    * Gets publicBoundwidth
    *  **参数解释**： 公网带宽。  **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return int|null
    */
    public function getPublicBoundwidth()
    {
        return $this->container['publicBoundwidth'];
    }

    /**
    * Sets publicBoundwidth
    *
    * @param int|null $publicBoundwidth **参数解释**： 公网带宽。  **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setPublicBoundwidth($publicBoundwidth)
    {
        $this->container['publicBoundwidth'] = $publicBoundwidth;
        return $this;
    }

    /**
    * Gets publicipId
    *  **参数解释**： 公网IP的ID。[获取方法：参考[[《弹性公网IP API参考》](https://support.huaweicloud.com/api-eip/ListPublicipsV3.html)](tag:hws)[[《弹性公网IP API参考》](https://support.huaweicloud.com/intl/zh-cn/api-eip/ListPublicipsV3.html)](tag:hws_hk)[[《弹性公网IP API参考》](https://support.huaweicloud.com/eu/api-eip/ListPublicipsV3.html)](tag:hws_eu)[《弹性公网IP API参考》](tag:ax,cmcc,ctc,sbc,hk_sbc,g42,hk_g42,srg,dt,ocb,hws_ocb,hcs,fcs)，调用“查询弹性公网IP列表”接口，从响应体中获取弹性公网IP的ID。](tag:ax,cmcc,ctc,sbc,hk_sbc,g42,hk_g42,srg,dt,ocb,hws_ocb,hcs,fcs,hws,hws_hk,hws_eu) **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
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
    * @param string|null $publicipId **参数解释**： 公网IP的ID。[获取方法：参考[[《弹性公网IP API参考》](https://support.huaweicloud.com/api-eip/ListPublicipsV3.html)](tag:hws)[[《弹性公网IP API参考》](https://support.huaweicloud.com/intl/zh-cn/api-eip/ListPublicipsV3.html)](tag:hws_hk)[[《弹性公网IP API参考》](https://support.huaweicloud.com/eu/api-eip/ListPublicipsV3.html)](tag:hws_eu)[《弹性公网IP API参考》](tag:ax,cmcc,ctc,sbc,hk_sbc,g42,hk_g42,srg,dt,ocb,hws_ocb,hcs,fcs)，调用“查询弹性公网IP列表”接口，从响应体中获取弹性公网IP的ID。](tag:ax,cmcc,ctc,sbc,hk_sbc,g42,hk_g42,srg,dt,ocb,hws_ocb,hcs,fcs,hws,hws_hk,hws_eu) **约束限制**： 不涉及。 **取值范围**： 不涉及。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setPublicipId($publicipId)
    {
        $this->container['publicipId'] = $publicipId;
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

