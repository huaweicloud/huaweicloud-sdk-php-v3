<?php

namespace HuaweiCloud\SDK\Geip\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowGlobalEipRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowGlobalEipRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * globalEipId  global_eip_id
    * fields  只显示指定的字段
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'globalEipId' => 'string',
            'fields' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * globalEipId  global_eip_id
    * fields  只显示指定的字段
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'globalEipId' => null,
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
    * globalEipId  global_eip_id
    * fields  只显示指定的字段
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'globalEipId' => 'global_eip_id',
            'fields' => 'fields'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * globalEipId  global_eip_id
    * fields  只显示指定的字段
    *
    * @var string[]
    */
    protected static $setters = [
            'globalEipId' => 'setGlobalEipId',
            'fields' => 'setFields'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * globalEipId  global_eip_id
    * fields  只显示指定的字段
    *
    * @var string[]
    */
    protected static $getters = [
            'globalEipId' => 'getGlobalEipId',
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
    const FIELDS_DESCRIPTION = 'description';
    const FIELDS_DOMAIN_ID = 'domain_id';
    const FIELDS_ACCESS_SITE = 'access_site';
    const FIELDS_GEIP_POOL_NAME = 'geip_pool_name';
    const FIELDS_ISP = 'isp';
    const FIELDS_IP_VERSION = 'ip_version';
    const FIELDS_IP_ADDRESS = 'ip_address';
    const FIELDS_IPV6_ADDRESS = 'ipv6_address';
    const FIELDS_FREEZEN = 'freezen';
    const FIELDS_FREEZEN_INFO = 'freezen_info';
    const FIELDS_POLLUTED = 'polluted';
    const FIELDS_STATUS = 'status';
    const FIELDS_CREATED_AT = 'created_at';
    const FIELDS_UPDATED_AT = 'updated_at';
    const FIELDS_INTERNET_BANDWIDTH_INFO = 'internet_bandwidth_info';
    const FIELDS_GLOBAL_CONNECTION_BANDWIDTH_INFO = 'global_connection_bandwidth_info';
    const FIELDS_ASSOCIATE_INSTANCE_INFO = 'associate_instance_info';
    const FIELDS_IS_PRE_PAID = 'is_pre_paid';
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
            self::FIELDS_DESCRIPTION,
            self::FIELDS_DOMAIN_ID,
            self::FIELDS_ACCESS_SITE,
            self::FIELDS_GEIP_POOL_NAME,
            self::FIELDS_ISP,
            self::FIELDS_IP_VERSION,
            self::FIELDS_IP_ADDRESS,
            self::FIELDS_IPV6_ADDRESS,
            self::FIELDS_FREEZEN,
            self::FIELDS_FREEZEN_INFO,
            self::FIELDS_POLLUTED,
            self::FIELDS_STATUS,
            self::FIELDS_CREATED_AT,
            self::FIELDS_UPDATED_AT,
            self::FIELDS_INTERNET_BANDWIDTH_INFO,
            self::FIELDS_GLOBAL_CONNECTION_BANDWIDTH_INFO,
            self::FIELDS_ASSOCIATE_INSTANCE_INFO,
            self::FIELDS_IS_PRE_PAID,
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
        $this->container['globalEipId'] = isset($data['globalEipId']) ? $data['globalEipId'] : null;
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
        if ($this->container['globalEipId'] === null) {
            $invalidProperties[] = "'globalEipId' can't be null";
        }
            if ((mb_strlen($this->container['globalEipId']) > 36)) {
                $invalidProperties[] = "invalid value for 'globalEipId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['globalEipId']) < 36)) {
                $invalidProperties[] = "invalid value for 'globalEipId', the character length must be bigger than or equal to 36.";
            }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['globalEipId'])) {
                $invalidProperties[] = "invalid value for 'globalEipId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
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
    * Gets globalEipId
    *  global_eip_id
    *
    * @return string
    */
    public function getGlobalEipId()
    {
        return $this->container['globalEipId'];
    }

    /**
    * Sets globalEipId
    *
    * @param string $globalEipId global_eip_id
    *
    * @return $this
    */
    public function setGlobalEipId($globalEipId)
    {
        $this->container['globalEipId'] = $globalEipId;
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

