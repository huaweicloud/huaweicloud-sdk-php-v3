<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ModelArtsAgencyRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ModelArtsAgencyRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * agencyNameSuffix  委托名称后缀。  长度不大于50位。  委托名称前缀固定为ma_agency。  如该字段为iam-user01，则创建出来的委托名称为ma_agency_iam-user01。  默认为空，表示创建名称为modelarts_agency的委托。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'agencyNameSuffix' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * agencyNameSuffix  委托名称后缀。  长度不大于50位。  委托名称前缀固定为ma_agency。  如该字段为iam-user01，则创建出来的委托名称为ma_agency_iam-user01。  默认为空，表示创建名称为modelarts_agency的委托。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'agencyNameSuffix' => null
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
    * agencyNameSuffix  委托名称后缀。  长度不大于50位。  委托名称前缀固定为ma_agency。  如该字段为iam-user01，则创建出来的委托名称为ma_agency_iam-user01。  默认为空，表示创建名称为modelarts_agency的委托。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'agencyNameSuffix' => 'agency_name_suffix'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * agencyNameSuffix  委托名称后缀。  长度不大于50位。  委托名称前缀固定为ma_agency。  如该字段为iam-user01，则创建出来的委托名称为ma_agency_iam-user01。  默认为空，表示创建名称为modelarts_agency的委托。
    *
    * @var string[]
    */
    protected static $setters = [
            'agencyNameSuffix' => 'setAgencyNameSuffix'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * agencyNameSuffix  委托名称后缀。  长度不大于50位。  委托名称前缀固定为ma_agency。  如该字段为iam-user01，则创建出来的委托名称为ma_agency_iam-user01。  默认为空，表示创建名称为modelarts_agency的委托。
    *
    * @var string[]
    */
    protected static $getters = [
            'agencyNameSuffix' => 'getAgencyNameSuffix'
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
        $this->container['agencyNameSuffix'] = isset($data['agencyNameSuffix']) ? $data['agencyNameSuffix'] : null;
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
    * Gets agencyNameSuffix
    *  委托名称后缀。  长度不大于50位。  委托名称前缀固定为ma_agency。  如该字段为iam-user01，则创建出来的委托名称为ma_agency_iam-user01。  默认为空，表示创建名称为modelarts_agency的委托。
    *
    * @return string|null
    */
    public function getAgencyNameSuffix()
    {
        return $this->container['agencyNameSuffix'];
    }

    /**
    * Sets agencyNameSuffix
    *
    * @param string|null $agencyNameSuffix 委托名称后缀。  长度不大于50位。  委托名称前缀固定为ma_agency。  如该字段为iam-user01，则创建出来的委托名称为ma_agency_iam-user01。  默认为空，表示创建名称为modelarts_agency的委托。
    *
    * @return $this
    */
    public function setAgencyNameSuffix($agencyNameSuffix)
    {
        $this->container['agencyNameSuffix'] = $agencyNameSuffix;
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

