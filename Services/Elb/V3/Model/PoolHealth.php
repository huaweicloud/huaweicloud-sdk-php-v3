<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PoolHealth implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PoolHealth';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * minimumHealthyMemberCount  参数解释：当健康检查在线的member个数小于该个数，判定pool的state为不健康。  取值范围： - 0：默认值，不生效。 - 1：全下线转发生效。  [不支持该字段，请勿使用。](tag:hws_eu,hws_eu_wb,hws_test,fcs,dt,hcso_dt,ctc,cmcc,tm,sbc,hk_sbc,hk_tm,hk_vdf,srg,g42,hk_g42)
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'minimumHealthyMemberCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * minimumHealthyMemberCount  参数解释：当健康检查在线的member个数小于该个数，判定pool的state为不健康。  取值范围： - 0：默认值，不生效。 - 1：全下线转发生效。  [不支持该字段，请勿使用。](tag:hws_eu,hws_eu_wb,hws_test,fcs,dt,hcso_dt,ctc,cmcc,tm,sbc,hk_sbc,hk_tm,hk_vdf,srg,g42,hk_g42)
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'minimumHealthyMemberCount' => 'int32'
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
    * minimumHealthyMemberCount  参数解释：当健康检查在线的member个数小于该个数，判定pool的state为不健康。  取值范围： - 0：默认值，不生效。 - 1：全下线转发生效。  [不支持该字段，请勿使用。](tag:hws_eu,hws_eu_wb,hws_test,fcs,dt,hcso_dt,ctc,cmcc,tm,sbc,hk_sbc,hk_tm,hk_vdf,srg,g42,hk_g42)
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'minimumHealthyMemberCount' => 'minimum_healthy_member_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * minimumHealthyMemberCount  参数解释：当健康检查在线的member个数小于该个数，判定pool的state为不健康。  取值范围： - 0：默认值，不生效。 - 1：全下线转发生效。  [不支持该字段，请勿使用。](tag:hws_eu,hws_eu_wb,hws_test,fcs,dt,hcso_dt,ctc,cmcc,tm,sbc,hk_sbc,hk_tm,hk_vdf,srg,g42,hk_g42)
    *
    * @var string[]
    */
    protected static $setters = [
            'minimumHealthyMemberCount' => 'setMinimumHealthyMemberCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * minimumHealthyMemberCount  参数解释：当健康检查在线的member个数小于该个数，判定pool的state为不健康。  取值范围： - 0：默认值，不生效。 - 1：全下线转发生效。  [不支持该字段，请勿使用。](tag:hws_eu,hws_eu_wb,hws_test,fcs,dt,hcso_dt,ctc,cmcc,tm,sbc,hk_sbc,hk_tm,hk_vdf,srg,g42,hk_g42)
    *
    * @var string[]
    */
    protected static $getters = [
            'minimumHealthyMemberCount' => 'getMinimumHealthyMemberCount'
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
        $this->container['minimumHealthyMemberCount'] = isset($data['minimumHealthyMemberCount']) ? $data['minimumHealthyMemberCount'] : null;
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
    * Gets minimumHealthyMemberCount
    *  参数解释：当健康检查在线的member个数小于该个数，判定pool的state为不健康。  取值范围： - 0：默认值，不生效。 - 1：全下线转发生效。  [不支持该字段，请勿使用。](tag:hws_eu,hws_eu_wb,hws_test,fcs,dt,hcso_dt,ctc,cmcc,tm,sbc,hk_sbc,hk_tm,hk_vdf,srg,g42,hk_g42)
    *
    * @return int|null
    */
    public function getMinimumHealthyMemberCount()
    {
        return $this->container['minimumHealthyMemberCount'];
    }

    /**
    * Sets minimumHealthyMemberCount
    *
    * @param int|null $minimumHealthyMemberCount 参数解释：当健康检查在线的member个数小于该个数，判定pool的state为不健康。  取值范围： - 0：默认值，不生效。 - 1：全下线转发生效。  [不支持该字段，请勿使用。](tag:hws_eu,hws_eu_wb,hws_test,fcs,dt,hcso_dt,ctc,cmcc,tm,sbc,hk_sbc,hk_tm,hk_vdf,srg,g42,hk_g42)
    *
    * @return $this
    */
    public function setMinimumHealthyMemberCount($minimumHealthyMemberCount)
    {
        $this->container['minimumHealthyMemberCount'] = $minimumHealthyMemberCount;
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

