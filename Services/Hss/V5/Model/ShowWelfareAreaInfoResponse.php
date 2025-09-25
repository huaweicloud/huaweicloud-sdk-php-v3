<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowWelfareAreaInfoResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowWelfareAreaInfoResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hotInfo  hotInfo
    * versionUpdateInfo  versionUpdateInfo
    * activitiesInfo  activitiesInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hotInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\HttpWelfareInfoResponseInfoHotInfo',
            'versionUpdateInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\HttpWelfareInfoResponseInfoVersionUpdateInfo',
            'activitiesInfo' => '\HuaweiCloud\SDK\Hss\V5\Model\HttpWelfareInfoResponseInfoActivitiesInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hotInfo  hotInfo
    * versionUpdateInfo  versionUpdateInfo
    * activitiesInfo  activitiesInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hotInfo' => null,
        'versionUpdateInfo' => null,
        'activitiesInfo' => null
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
    * hotInfo  hotInfo
    * versionUpdateInfo  versionUpdateInfo
    * activitiesInfo  activitiesInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hotInfo' => 'hot_info',
            'versionUpdateInfo' => 'version_update_info',
            'activitiesInfo' => 'activities_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hotInfo  hotInfo
    * versionUpdateInfo  versionUpdateInfo
    * activitiesInfo  activitiesInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'hotInfo' => 'setHotInfo',
            'versionUpdateInfo' => 'setVersionUpdateInfo',
            'activitiesInfo' => 'setActivitiesInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hotInfo  hotInfo
    * versionUpdateInfo  versionUpdateInfo
    * activitiesInfo  activitiesInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'hotInfo' => 'getHotInfo',
            'versionUpdateInfo' => 'getVersionUpdateInfo',
            'activitiesInfo' => 'getActivitiesInfo'
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
        $this->container['hotInfo'] = isset($data['hotInfo']) ? $data['hotInfo'] : null;
        $this->container['versionUpdateInfo'] = isset($data['versionUpdateInfo']) ? $data['versionUpdateInfo'] : null;
        $this->container['activitiesInfo'] = isset($data['activitiesInfo']) ? $data['activitiesInfo'] : null;
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
    * Gets hotInfo
    *  hotInfo
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\HttpWelfareInfoResponseInfoHotInfo|null
    */
    public function getHotInfo()
    {
        return $this->container['hotInfo'];
    }

    /**
    * Sets hotInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\HttpWelfareInfoResponseInfoHotInfo|null $hotInfo hotInfo
    *
    * @return $this
    */
    public function setHotInfo($hotInfo)
    {
        $this->container['hotInfo'] = $hotInfo;
        return $this;
    }

    /**
    * Gets versionUpdateInfo
    *  versionUpdateInfo
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\HttpWelfareInfoResponseInfoVersionUpdateInfo|null
    */
    public function getVersionUpdateInfo()
    {
        return $this->container['versionUpdateInfo'];
    }

    /**
    * Sets versionUpdateInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\HttpWelfareInfoResponseInfoVersionUpdateInfo|null $versionUpdateInfo versionUpdateInfo
    *
    * @return $this
    */
    public function setVersionUpdateInfo($versionUpdateInfo)
    {
        $this->container['versionUpdateInfo'] = $versionUpdateInfo;
        return $this;
    }

    /**
    * Gets activitiesInfo
    *  activitiesInfo
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\HttpWelfareInfoResponseInfoActivitiesInfo|null
    */
    public function getActivitiesInfo()
    {
        return $this->container['activitiesInfo'];
    }

    /**
    * Sets activitiesInfo
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\HttpWelfareInfoResponseInfoActivitiesInfo|null $activitiesInfo activitiesInfo
    *
    * @return $this
    */
    public function setActivitiesInfo($activitiesInfo)
    {
        $this->container['activitiesInfo'] = $activitiesInfo;
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

