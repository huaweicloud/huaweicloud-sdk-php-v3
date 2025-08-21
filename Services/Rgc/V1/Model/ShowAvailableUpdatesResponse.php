<?php

namespace HuaweiCloud\SDK\Rgc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowAvailableUpdatesResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowAvailableUpdatesResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * baselineUpdateAvailable  用户当前的Landing Zone版本是否为最新版本。
    * controlUpdateAvailable  当前账号下是否有新的控制策略。
    * landingZoneUpdateAvailable  Landing Zone是否可更新。
    * serviceLandingZoneVersion  Landing Zone当前最新的版本号。
    * userLandingZoneVersion  用户当前的Landing Zone版本。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'baselineUpdateAvailable' => 'bool',
            'controlUpdateAvailable' => 'bool',
            'landingZoneUpdateAvailable' => 'bool',
            'serviceLandingZoneVersion' => 'string',
            'userLandingZoneVersion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * baselineUpdateAvailable  用户当前的Landing Zone版本是否为最新版本。
    * controlUpdateAvailable  当前账号下是否有新的控制策略。
    * landingZoneUpdateAvailable  Landing Zone是否可更新。
    * serviceLandingZoneVersion  Landing Zone当前最新的版本号。
    * userLandingZoneVersion  用户当前的Landing Zone版本。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'baselineUpdateAvailable' => null,
        'controlUpdateAvailable' => null,
        'landingZoneUpdateAvailable' => null,
        'serviceLandingZoneVersion' => null,
        'userLandingZoneVersion' => null
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
    * baselineUpdateAvailable  用户当前的Landing Zone版本是否为最新版本。
    * controlUpdateAvailable  当前账号下是否有新的控制策略。
    * landingZoneUpdateAvailable  Landing Zone是否可更新。
    * serviceLandingZoneVersion  Landing Zone当前最新的版本号。
    * userLandingZoneVersion  用户当前的Landing Zone版本。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'baselineUpdateAvailable' => 'baseline_update_available',
            'controlUpdateAvailable' => 'control_update_available',
            'landingZoneUpdateAvailable' => 'landing_zone_update_available',
            'serviceLandingZoneVersion' => 'service_landing_zone_version',
            'userLandingZoneVersion' => 'user_landing_zone_version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * baselineUpdateAvailable  用户当前的Landing Zone版本是否为最新版本。
    * controlUpdateAvailable  当前账号下是否有新的控制策略。
    * landingZoneUpdateAvailable  Landing Zone是否可更新。
    * serviceLandingZoneVersion  Landing Zone当前最新的版本号。
    * userLandingZoneVersion  用户当前的Landing Zone版本。
    *
    * @var string[]
    */
    protected static $setters = [
            'baselineUpdateAvailable' => 'setBaselineUpdateAvailable',
            'controlUpdateAvailable' => 'setControlUpdateAvailable',
            'landingZoneUpdateAvailable' => 'setLandingZoneUpdateAvailable',
            'serviceLandingZoneVersion' => 'setServiceLandingZoneVersion',
            'userLandingZoneVersion' => 'setUserLandingZoneVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * baselineUpdateAvailable  用户当前的Landing Zone版本是否为最新版本。
    * controlUpdateAvailable  当前账号下是否有新的控制策略。
    * landingZoneUpdateAvailable  Landing Zone是否可更新。
    * serviceLandingZoneVersion  Landing Zone当前最新的版本号。
    * userLandingZoneVersion  用户当前的Landing Zone版本。
    *
    * @var string[]
    */
    protected static $getters = [
            'baselineUpdateAvailable' => 'getBaselineUpdateAvailable',
            'controlUpdateAvailable' => 'getControlUpdateAvailable',
            'landingZoneUpdateAvailable' => 'getLandingZoneUpdateAvailable',
            'serviceLandingZoneVersion' => 'getServiceLandingZoneVersion',
            'userLandingZoneVersion' => 'getUserLandingZoneVersion'
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
        $this->container['baselineUpdateAvailable'] = isset($data['baselineUpdateAvailable']) ? $data['baselineUpdateAvailable'] : null;
        $this->container['controlUpdateAvailable'] = isset($data['controlUpdateAvailable']) ? $data['controlUpdateAvailable'] : null;
        $this->container['landingZoneUpdateAvailable'] = isset($data['landingZoneUpdateAvailable']) ? $data['landingZoneUpdateAvailable'] : null;
        $this->container['serviceLandingZoneVersion'] = isset($data['serviceLandingZoneVersion']) ? $data['serviceLandingZoneVersion'] : null;
        $this->container['userLandingZoneVersion'] = isset($data['userLandingZoneVersion']) ? $data['userLandingZoneVersion'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['serviceLandingZoneVersion']) && (mb_strlen($this->container['serviceLandingZoneVersion']) > 128)) {
                $invalidProperties[] = "invalid value for 'serviceLandingZoneVersion', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['serviceLandingZoneVersion']) && (mb_strlen($this->container['serviceLandingZoneVersion']) < 1)) {
                $invalidProperties[] = "invalid value for 'serviceLandingZoneVersion', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['userLandingZoneVersion']) && (mb_strlen($this->container['userLandingZoneVersion']) > 128)) {
                $invalidProperties[] = "invalid value for 'userLandingZoneVersion', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['userLandingZoneVersion']) && (mb_strlen($this->container['userLandingZoneVersion']) < 1)) {
                $invalidProperties[] = "invalid value for 'userLandingZoneVersion', the character length must be bigger than or equal to 1.";
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
    * Gets baselineUpdateAvailable
    *  用户当前的Landing Zone版本是否为最新版本。
    *
    * @return bool|null
    */
    public function getBaselineUpdateAvailable()
    {
        return $this->container['baselineUpdateAvailable'];
    }

    /**
    * Sets baselineUpdateAvailable
    *
    * @param bool|null $baselineUpdateAvailable 用户当前的Landing Zone版本是否为最新版本。
    *
    * @return $this
    */
    public function setBaselineUpdateAvailable($baselineUpdateAvailable)
    {
        $this->container['baselineUpdateAvailable'] = $baselineUpdateAvailable;
        return $this;
    }

    /**
    * Gets controlUpdateAvailable
    *  当前账号下是否有新的控制策略。
    *
    * @return bool|null
    */
    public function getControlUpdateAvailable()
    {
        return $this->container['controlUpdateAvailable'];
    }

    /**
    * Sets controlUpdateAvailable
    *
    * @param bool|null $controlUpdateAvailable 当前账号下是否有新的控制策略。
    *
    * @return $this
    */
    public function setControlUpdateAvailable($controlUpdateAvailable)
    {
        $this->container['controlUpdateAvailable'] = $controlUpdateAvailable;
        return $this;
    }

    /**
    * Gets landingZoneUpdateAvailable
    *  Landing Zone是否可更新。
    *
    * @return bool|null
    */
    public function getLandingZoneUpdateAvailable()
    {
        return $this->container['landingZoneUpdateAvailable'];
    }

    /**
    * Sets landingZoneUpdateAvailable
    *
    * @param bool|null $landingZoneUpdateAvailable Landing Zone是否可更新。
    *
    * @return $this
    */
    public function setLandingZoneUpdateAvailable($landingZoneUpdateAvailable)
    {
        $this->container['landingZoneUpdateAvailable'] = $landingZoneUpdateAvailable;
        return $this;
    }

    /**
    * Gets serviceLandingZoneVersion
    *  Landing Zone当前最新的版本号。
    *
    * @return string|null
    */
    public function getServiceLandingZoneVersion()
    {
        return $this->container['serviceLandingZoneVersion'];
    }

    /**
    * Sets serviceLandingZoneVersion
    *
    * @param string|null $serviceLandingZoneVersion Landing Zone当前最新的版本号。
    *
    * @return $this
    */
    public function setServiceLandingZoneVersion($serviceLandingZoneVersion)
    {
        $this->container['serviceLandingZoneVersion'] = $serviceLandingZoneVersion;
        return $this;
    }

    /**
    * Gets userLandingZoneVersion
    *  用户当前的Landing Zone版本。
    *
    * @return string|null
    */
    public function getUserLandingZoneVersion()
    {
        return $this->container['userLandingZoneVersion'];
    }

    /**
    * Sets userLandingZoneVersion
    *
    * @param string|null $userLandingZoneVersion 用户当前的Landing Zone版本。
    *
    * @return $this
    */
    public function setUserLandingZoneVersion($userLandingZoneVersion)
    {
        $this->container['userLandingZoneVersion'] = $userLandingZoneVersion;
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

