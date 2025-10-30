<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EventForensicInfoAbnormalLoginForensic implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EventForensicInfo_abnormal_login_forensic';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ip  **参数解释**： IP **取值范围**： 不涉及
    * user  **参数解释**： 用户 **取值范围**： 不涉及
    * country  **参数解释**： 国家 **取值范围**： 不涉及
    * subDivision  **参数解释**： 省份 **取值范围**： 不涉及
    * city  **参数解释**： 城市 **取值范围**： 不涉及
    * cityId  **参数解释**： 登录源（映射地名） **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ip' => 'string',
            'user' => 'string',
            'country' => 'string',
            'subDivision' => 'string',
            'city' => 'string',
            'cityId' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ip  **参数解释**： IP **取值范围**： 不涉及
    * user  **参数解释**： 用户 **取值范围**： 不涉及
    * country  **参数解释**： 国家 **取值范围**： 不涉及
    * subDivision  **参数解释**： 省份 **取值范围**： 不涉及
    * city  **参数解释**： 城市 **取值范围**： 不涉及
    * cityId  **参数解释**： 登录源（映射地名） **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ip' => null,
        'user' => null,
        'country' => null,
        'subDivision' => null,
        'city' => null,
        'cityId' => 'int32'
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
    * ip  **参数解释**： IP **取值范围**： 不涉及
    * user  **参数解释**： 用户 **取值范围**： 不涉及
    * country  **参数解释**： 国家 **取值范围**： 不涉及
    * subDivision  **参数解释**： 省份 **取值范围**： 不涉及
    * city  **参数解释**： 城市 **取值范围**： 不涉及
    * cityId  **参数解释**： 登录源（映射地名） **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ip' => 'ip',
            'user' => 'user',
            'country' => 'country',
            'subDivision' => 'sub_division',
            'city' => 'city',
            'cityId' => 'city_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ip  **参数解释**： IP **取值范围**： 不涉及
    * user  **参数解释**： 用户 **取值范围**： 不涉及
    * country  **参数解释**： 国家 **取值范围**： 不涉及
    * subDivision  **参数解释**： 省份 **取值范围**： 不涉及
    * city  **参数解释**： 城市 **取值范围**： 不涉及
    * cityId  **参数解释**： 登录源（映射地名） **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'ip' => 'setIp',
            'user' => 'setUser',
            'country' => 'setCountry',
            'subDivision' => 'setSubDivision',
            'city' => 'setCity',
            'cityId' => 'setCityId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ip  **参数解释**： IP **取值范围**： 不涉及
    * user  **参数解释**： 用户 **取值范围**： 不涉及
    * country  **参数解释**： 国家 **取值范围**： 不涉及
    * subDivision  **参数解释**： 省份 **取值范围**： 不涉及
    * city  **参数解释**： 城市 **取值范围**： 不涉及
    * cityId  **参数解释**： 登录源（映射地名） **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'ip' => 'getIp',
            'user' => 'getUser',
            'country' => 'getCountry',
            'subDivision' => 'getSubDivision',
            'city' => 'getCity',
            'cityId' => 'getCityId'
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
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['subDivision'] = isset($data['subDivision']) ? $data['subDivision'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['cityId'] = isset($data['cityId']) ? $data['cityId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['ip']) && !preg_match("/^.*$/", $this->container['ip'])) {
                $invalidProperties[] = "invalid value for 'ip', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['user']) && !preg_match("/^.*$/", $this->container['user'])) {
                $invalidProperties[] = "invalid value for 'user', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['country']) && !preg_match("/^.*$/", $this->container['country'])) {
                $invalidProperties[] = "invalid value for 'country', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['subDivision']) && !preg_match("/^.*$/", $this->container['subDivision'])) {
                $invalidProperties[] = "invalid value for 'subDivision', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['city']) && !preg_match("/^.*$/", $this->container['city'])) {
                $invalidProperties[] = "invalid value for 'city', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['cityId']) && ($this->container['cityId'] > 65535)) {
                $invalidProperties[] = "invalid value for 'cityId', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['cityId']) && ($this->container['cityId'] < 1)) {
                $invalidProperties[] = "invalid value for 'cityId', must be bigger than or equal to 1.";
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
    * Gets ip
    *  **参数解释**： IP **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
    * Sets ip
    *
    * @param string|null $ip **参数解释**： IP **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;
        return $this;
    }

    /**
    * Gets user
    *  **参数解释**： 用户 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
    * Sets user
    *
    * @param string|null $user **参数解释**： 用户 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setUser($user)
    {
        $this->container['user'] = $user;
        return $this;
    }

    /**
    * Gets country
    *  **参数解释**： 国家 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
    * Sets country
    *
    * @param string|null $country **参数解释**： 国家 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setCountry($country)
    {
        $this->container['country'] = $country;
        return $this;
    }

    /**
    * Gets subDivision
    *  **参数解释**： 省份 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getSubDivision()
    {
        return $this->container['subDivision'];
    }

    /**
    * Sets subDivision
    *
    * @param string|null $subDivision **参数解释**： 省份 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setSubDivision($subDivision)
    {
        $this->container['subDivision'] = $subDivision;
        return $this;
    }

    /**
    * Gets city
    *  **参数解释**： 城市 **取值范围**： 不涉及
    *
    * @return string|null
    */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
    * Sets city
    *
    * @param string|null $city **参数解释**： 城市 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setCity($city)
    {
        $this->container['city'] = $city;
        return $this;
    }

    /**
    * Gets cityId
    *  **参数解释**： 登录源（映射地名） **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getCityId()
    {
        return $this->container['cityId'];
    }

    /**
    * Sets cityId
    *
    * @param int|null $cityId **参数解释**： 登录源（映射地名） **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setCityId($cityId)
    {
        $this->container['cityId'] = $cityId;
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

