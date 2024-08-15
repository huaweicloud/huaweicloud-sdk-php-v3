<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AvailabilityZone implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AvailabilityZone';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * code  参数解释：可用区唯一编码。
    * state  参数解释：可用区状态。  取值范围：ACTIVE。
    * protocol  [参数解释：未售罄的LB规格类别。  取值范围：L4 表示网络型LB未售罄；L7 表示应用型LB未售罄。](tag:hws,hk,hws_eu,otc,tlf,ctc,sbc,g42,cmcc,hk_g42,dt_test,mix,hk_sbc,hws_ocb,dt) [参数解释：LB规格类别。  取值范围：L4 表示网络型LB；L7 表示应用型LB。](tag:ocb,tm,fcs,fcs_dt,hcso,hcso_dt,hk_vdf)
    * publicBorderGroup  参数解释：可用区组，如：center
    * category  参数解释：范围编码。  取值范围：0表示center，21表示homezone。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'code' => 'string',
            'state' => 'string',
            'protocol' => 'string[]',
            'publicBorderGroup' => 'string',
            'category' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * code  参数解释：可用区唯一编码。
    * state  参数解释：可用区状态。  取值范围：ACTIVE。
    * protocol  [参数解释：未售罄的LB规格类别。  取值范围：L4 表示网络型LB未售罄；L7 表示应用型LB未售罄。](tag:hws,hk,hws_eu,otc,tlf,ctc,sbc,g42,cmcc,hk_g42,dt_test,mix,hk_sbc,hws_ocb,dt) [参数解释：LB规格类别。  取值范围：L4 表示网络型LB；L7 表示应用型LB。](tag:ocb,tm,fcs,fcs_dt,hcso,hcso_dt,hk_vdf)
    * publicBorderGroup  参数解释：可用区组，如：center
    * category  参数解释：范围编码。  取值范围：0表示center，21表示homezone。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'code' => null,
        'state' => null,
        'protocol' => null,
        'publicBorderGroup' => null,
        'category' => null
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
    * code  参数解释：可用区唯一编码。
    * state  参数解释：可用区状态。  取值范围：ACTIVE。
    * protocol  [参数解释：未售罄的LB规格类别。  取值范围：L4 表示网络型LB未售罄；L7 表示应用型LB未售罄。](tag:hws,hk,hws_eu,otc,tlf,ctc,sbc,g42,cmcc,hk_g42,dt_test,mix,hk_sbc,hws_ocb,dt) [参数解释：LB规格类别。  取值范围：L4 表示网络型LB；L7 表示应用型LB。](tag:ocb,tm,fcs,fcs_dt,hcso,hcso_dt,hk_vdf)
    * publicBorderGroup  参数解释：可用区组，如：center
    * category  参数解释：范围编码。  取值范围：0表示center，21表示homezone。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'code' => 'code',
            'state' => 'state',
            'protocol' => 'protocol',
            'publicBorderGroup' => 'public_border_group',
            'category' => 'category'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * code  参数解释：可用区唯一编码。
    * state  参数解释：可用区状态。  取值范围：ACTIVE。
    * protocol  [参数解释：未售罄的LB规格类别。  取值范围：L4 表示网络型LB未售罄；L7 表示应用型LB未售罄。](tag:hws,hk,hws_eu,otc,tlf,ctc,sbc,g42,cmcc,hk_g42,dt_test,mix,hk_sbc,hws_ocb,dt) [参数解释：LB规格类别。  取值范围：L4 表示网络型LB；L7 表示应用型LB。](tag:ocb,tm,fcs,fcs_dt,hcso,hcso_dt,hk_vdf)
    * publicBorderGroup  参数解释：可用区组，如：center
    * category  参数解释：范围编码。  取值范围：0表示center，21表示homezone。
    *
    * @var string[]
    */
    protected static $setters = [
            'code' => 'setCode',
            'state' => 'setState',
            'protocol' => 'setProtocol',
            'publicBorderGroup' => 'setPublicBorderGroup',
            'category' => 'setCategory'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * code  参数解释：可用区唯一编码。
    * state  参数解释：可用区状态。  取值范围：ACTIVE。
    * protocol  [参数解释：未售罄的LB规格类别。  取值范围：L4 表示网络型LB未售罄；L7 表示应用型LB未售罄。](tag:hws,hk,hws_eu,otc,tlf,ctc,sbc,g42,cmcc,hk_g42,dt_test,mix,hk_sbc,hws_ocb,dt) [参数解释：LB规格类别。  取值范围：L4 表示网络型LB；L7 表示应用型LB。](tag:ocb,tm,fcs,fcs_dt,hcso,hcso_dt,hk_vdf)
    * publicBorderGroup  参数解释：可用区组，如：center
    * category  参数解释：范围编码。  取值范围：0表示center，21表示homezone。
    *
    * @var string[]
    */
    protected static $getters = [
            'code' => 'getCode',
            'state' => 'getState',
            'protocol' => 'getProtocol',
            'publicBorderGroup' => 'getPublicBorderGroup',
            'category' => 'getCategory'
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['publicBorderGroup'] = isset($data['publicBorderGroup']) ? $data['publicBorderGroup'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['code'] === null) {
            $invalidProperties[] = "'code' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        if ($this->container['protocol'] === null) {
            $invalidProperties[] = "'protocol' can't be null";
        }
        if ($this->container['publicBorderGroup'] === null) {
            $invalidProperties[] = "'publicBorderGroup' can't be null";
        }
        if ($this->container['category'] === null) {
            $invalidProperties[] = "'category' can't be null";
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
    * Gets code
    *  参数解释：可用区唯一编码。
    *
    * @return string
    */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
    * Sets code
    *
    * @param string $code 参数解释：可用区唯一编码。
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
        return $this;
    }

    /**
    * Gets state
    *  参数解释：可用区状态。  取值范围：ACTIVE。
    *
    * @return string
    */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
    * Sets state
    *
    * @param string $state 参数解释：可用区状态。  取值范围：ACTIVE。
    *
    * @return $this
    */
    public function setState($state)
    {
        $this->container['state'] = $state;
        return $this;
    }

    /**
    * Gets protocol
    *  [参数解释：未售罄的LB规格类别。  取值范围：L4 表示网络型LB未售罄；L7 表示应用型LB未售罄。](tag:hws,hk,hws_eu,otc,tlf,ctc,sbc,g42,cmcc,hk_g42,dt_test,mix,hk_sbc,hws_ocb,dt) [参数解释：LB规格类别。  取值范围：L4 表示网络型LB；L7 表示应用型LB。](tag:ocb,tm,fcs,fcs_dt,hcso,hcso_dt,hk_vdf)
    *
    * @return string[]
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param string[] $protocol [参数解释：未售罄的LB规格类别。  取值范围：L4 表示网络型LB未售罄；L7 表示应用型LB未售罄。](tag:hws,hk,hws_eu,otc,tlf,ctc,sbc,g42,cmcc,hk_g42,dt_test,mix,hk_sbc,hws_ocb,dt) [参数解释：LB规格类别。  取值范围：L4 表示网络型LB；L7 表示应用型LB。](tag:ocb,tm,fcs,fcs_dt,hcso,hcso_dt,hk_vdf)
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets publicBorderGroup
    *  参数解释：可用区组，如：center
    *
    * @return string
    */
    public function getPublicBorderGroup()
    {
        return $this->container['publicBorderGroup'];
    }

    /**
    * Sets publicBorderGroup
    *
    * @param string $publicBorderGroup 参数解释：可用区组，如：center
    *
    * @return $this
    */
    public function setPublicBorderGroup($publicBorderGroup)
    {
        $this->container['publicBorderGroup'] = $publicBorderGroup;
        return $this;
    }

    /**
    * Gets category
    *  参数解释：范围编码。  取值范围：0表示center，21表示homezone。
    *
    * @return int
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param int $category 参数解释：范围编码。  取值范围：0表示center，21表示homezone。
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
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

