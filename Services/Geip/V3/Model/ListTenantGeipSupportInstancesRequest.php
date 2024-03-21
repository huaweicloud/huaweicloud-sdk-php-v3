<?php

namespace HuaweiCloud\SDK\Geip\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListTenantGeipSupportInstancesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListTenantGeipSupportInstancesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * accessSite  accessSite
    * fields  fields
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'accessSite' => 'string',
            'fields' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * accessSite  accessSite
    * fields  fields
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'accessSite' => null,
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
    * accessSite  accessSite
    * fields  fields
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'accessSite' => 'access_site',
            'fields' => 'fields'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * accessSite  accessSite
    * fields  fields
    *
    * @var string[]
    */
    protected static $setters = [
            'accessSite' => 'setAccessSite',
            'fields' => 'setFields'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * accessSite  accessSite
    * fields  fields
    *
    * @var string[]
    */
    protected static $getters = [
            'accessSite' => 'getAccessSite',
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
    const FIELDS_INSTANCE_TYPE = 'instance_type';
    const FIELDS_REGION_ID = 'region_id';
    const FIELDS_PUBLIC_BORDER_GROUP = 'public_border_group';
    const FIELDS_STATUS = 'status';
    const FIELDS_CREATED_AT = 'created_at';
    const FIELDS_UPDATED_AT = 'updated_at';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getFieldsAllowableValues()
    {
        return [
            self::FIELDS_ID,
            self::FIELDS_INSTANCE_TYPE,
            self::FIELDS_REGION_ID,
            self::FIELDS_PUBLIC_BORDER_GROUP,
            self::FIELDS_STATUS,
            self::FIELDS_CREATED_AT,
            self::FIELDS_UPDATED_AT,
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
        $this->container['accessSite'] = isset($data['accessSite']) ? $data['accessSite'] : null;
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
        if ($this->container['accessSite'] === null) {
            $invalidProperties[] = "'accessSite' can't be null";
        }
            if ((mb_strlen($this->container['accessSite']) > 64)) {
                $invalidProperties[] = "invalid value for 'accessSite', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['accessSite']) < 1)) {
                $invalidProperties[] = "invalid value for 'accessSite', the character length must be bigger than or equal to 1.";
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
    * Gets accessSite
    *  accessSite
    *
    * @return string
    */
    public function getAccessSite()
    {
        return $this->container['accessSite'];
    }

    /**
    * Sets accessSite
    *
    * @param string $accessSite accessSite
    *
    * @return $this
    */
    public function setAccessSite($accessSite)
    {
        $this->container['accessSite'] = $accessSite;
        return $this;
    }

    /**
    * Gets fields
    *  fields
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
    * @param string[]|null $fields fields
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

