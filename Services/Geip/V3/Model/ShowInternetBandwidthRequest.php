<?php

namespace HuaweiCloud\SDK\Geip\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowInternetBandwidthRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowInternetBandwidthRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * internetBandwidthId  全域公网带宽的ID
    * fields  只显示指定的字段
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'internetBandwidthId' => 'string',
            'fields' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * internetBandwidthId  全域公网带宽的ID
    * fields  只显示指定的字段
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'internetBandwidthId' => null,
        'fields' => null
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
    * internetBandwidthId  全域公网带宽的ID
    * fields  只显示指定的字段
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'internetBandwidthId' => 'internet_bandwidth_id',
            'fields' => 'fields'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * internetBandwidthId  全域公网带宽的ID
    * fields  只显示指定的字段
    *
    * @var string[]
    */
    protected static $setters = [
            'internetBandwidthId' => 'setInternetBandwidthId',
            'fields' => 'setFields'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * internetBandwidthId  全域公网带宽的ID
    * fields  只显示指定的字段
    *
    * @var string[]
    */
    protected static $getters = [
            'internetBandwidthId' => 'getInternetBandwidthId',
            'fields' => 'getFields'
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
    const FIELDS_ID = 'id';
    const FIELDS_NAME = 'name';
    const FIELDS_ISP = 'isp';
    const FIELDS_INGRESS_SIZE = 'ingress_size';
    const FIELDS_ACCESS_SITE = 'access_site';
    const FIELDS_SIZE = 'size';
    const FIELDS_DESCRIPTION = 'description';
    const FIELDS_CHARGE_MODE = 'charge_mode';
    const FIELDS_RATIO_95PEAK = 'ratio_95peak';
    const FIELDS_FREEZEN_INFO = 'freezen_info';
    const FIELDS_DOMAIN_ID = 'domain_id';
    const FIELDS_STATUS = 'status';
    const FIELDS_CREATED_AT = 'created_at';
    const FIELDS_UPDATED_AT = 'updated_at';
    const FIELDS_IS_PRE_PAID = 'is_pre_paid';
    const FIELDS_TYPE = 'type';
    const FIELDS_TAGS = 'tags';
    const FIELDS_SYS_TAGS = 'sys_tags';
    const FIELDS_ENTERPRISE_PROJECT_ID = 'enterprise_project_id';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getFieldsAllowableValues()
    {
        return [
            self::FIELDS_ID,
            self::FIELDS_NAME,
            self::FIELDS_ISP,
            self::FIELDS_INGRESS_SIZE,
            self::FIELDS_ACCESS_SITE,
            self::FIELDS_SIZE,
            self::FIELDS_DESCRIPTION,
            self::FIELDS_CHARGE_MODE,
            self::FIELDS_RATIO_95PEAK,
            self::FIELDS_FREEZEN_INFO,
            self::FIELDS_DOMAIN_ID,
            self::FIELDS_STATUS,
            self::FIELDS_CREATED_AT,
            self::FIELDS_UPDATED_AT,
            self::FIELDS_IS_PRE_PAID,
            self::FIELDS_TYPE,
            self::FIELDS_TAGS,
            self::FIELDS_SYS_TAGS,
            self::FIELDS_ENTERPRISE_PROJECT_ID,
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
        $this->container['internetBandwidthId'] = isset($data['internetBandwidthId']) ? $data['internetBandwidthId'] : null;
        $this->container['fields'] = isset($data['fields']) ? $data['fields'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['internetBandwidthId'] === null) {
            $invalidProperties[] = "'internetBandwidthId' can't be null";
        }
            if ((mb_strlen($this->container['internetBandwidthId']) > 36)) {
                $invalidProperties[] = "invalid value for 'internetBandwidthId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['internetBandwidthId']) < 36)) {
                $invalidProperties[] = "invalid value for 'internetBandwidthId', the character length must be bigger than or equal to 36.";
            }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['internetBandwidthId'])) {
                $invalidProperties[] = "invalid value for 'internetBandwidthId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
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
    * Gets internetBandwidthId
    *  全域公网带宽的ID
    *
    * @return string
    */
    public function getInternetBandwidthId()
    {
        return $this->container['internetBandwidthId'];
    }

    /**
    * Sets internetBandwidthId
    *
    * @param string $internetBandwidthId 全域公网带宽的ID
    *
    * @return $this
    */
    public function setInternetBandwidthId($internetBandwidthId)
    {
        $this->container['internetBandwidthId'] = $internetBandwidthId;
        return $this;
    }

    /**
    * Gets fields
    *  只显示指定的字段
    *
    * @return string[]|null
    */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
    * Sets fields
    *
    * @param string[]|null $fields 只显示指定的字段
    *
    * @return $this
    */
    public function setFields($fields)
    {
        $this->container['fields'] = $fields;
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

