<?php

namespace HuaweiCloud\SDK\Rgc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowLandingZoneStatusResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowLandingZoneStatusResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * deployedVersion  部署的Landing Zone版本。
    * landingZoneStatus  Landing Zone的设置状态，包括进行中，已完成。
    * percentageComplete  Landing Zone的完成进度。
    * percentageDetails  Landing Zone设置的详细进度信息。
    * landingZoneActionType  Landing Zone当前需要执行的动作。
    * message  Landing Zone错误消息。
    * regions  纳管的区域信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'deployedVersion' => 'string',
            'landingZoneStatus' => 'string',
            'percentageComplete' => 'int',
            'percentageDetails' => '\HuaweiCloud\SDK\Rgc\V1\Model\PercentageDetail[]',
            'landingZoneActionType' => 'string',
            'message' => '\HuaweiCloud\SDK\Rgc\V1\Model\LandingZoneErrorMessage[]',
            'regions' => '\HuaweiCloud\SDK\Rgc\V1\Model\RegionConfigurationList[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * deployedVersion  部署的Landing Zone版本。
    * landingZoneStatus  Landing Zone的设置状态，包括进行中，已完成。
    * percentageComplete  Landing Zone的完成进度。
    * percentageDetails  Landing Zone设置的详细进度信息。
    * landingZoneActionType  Landing Zone当前需要执行的动作。
    * message  Landing Zone错误消息。
    * regions  纳管的区域信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'deployedVersion' => null,
        'landingZoneStatus' => null,
        'percentageComplete' => 'int32',
        'percentageDetails' => null,
        'landingZoneActionType' => null,
        'message' => null,
        'regions' => null
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
    * deployedVersion  部署的Landing Zone版本。
    * landingZoneStatus  Landing Zone的设置状态，包括进行中，已完成。
    * percentageComplete  Landing Zone的完成进度。
    * percentageDetails  Landing Zone设置的详细进度信息。
    * landingZoneActionType  Landing Zone当前需要执行的动作。
    * message  Landing Zone错误消息。
    * regions  纳管的区域信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'deployedVersion' => 'deployed_version',
            'landingZoneStatus' => 'landing_zone_status',
            'percentageComplete' => 'percentage_complete',
            'percentageDetails' => 'percentage_details',
            'landingZoneActionType' => 'landing_zone_action_type',
            'message' => 'message',
            'regions' => 'regions'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * deployedVersion  部署的Landing Zone版本。
    * landingZoneStatus  Landing Zone的设置状态，包括进行中，已完成。
    * percentageComplete  Landing Zone的完成进度。
    * percentageDetails  Landing Zone设置的详细进度信息。
    * landingZoneActionType  Landing Zone当前需要执行的动作。
    * message  Landing Zone错误消息。
    * regions  纳管的区域信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'deployedVersion' => 'setDeployedVersion',
            'landingZoneStatus' => 'setLandingZoneStatus',
            'percentageComplete' => 'setPercentageComplete',
            'percentageDetails' => 'setPercentageDetails',
            'landingZoneActionType' => 'setLandingZoneActionType',
            'message' => 'setMessage',
            'regions' => 'setRegions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * deployedVersion  部署的Landing Zone版本。
    * landingZoneStatus  Landing Zone的设置状态，包括进行中，已完成。
    * percentageComplete  Landing Zone的完成进度。
    * percentageDetails  Landing Zone设置的详细进度信息。
    * landingZoneActionType  Landing Zone当前需要执行的动作。
    * message  Landing Zone错误消息。
    * regions  纳管的区域信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'deployedVersion' => 'getDeployedVersion',
            'landingZoneStatus' => 'getLandingZoneStatus',
            'percentageComplete' => 'getPercentageComplete',
            'percentageDetails' => 'getPercentageDetails',
            'landingZoneActionType' => 'getLandingZoneActionType',
            'message' => 'getMessage',
            'regions' => 'getRegions'
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
        $this->container['deployedVersion'] = isset($data['deployedVersion']) ? $data['deployedVersion'] : null;
        $this->container['landingZoneStatus'] = isset($data['landingZoneStatus']) ? $data['landingZoneStatus'] : null;
        $this->container['percentageComplete'] = isset($data['percentageComplete']) ? $data['percentageComplete'] : null;
        $this->container['percentageDetails'] = isset($data['percentageDetails']) ? $data['percentageDetails'] : null;
        $this->container['landingZoneActionType'] = isset($data['landingZoneActionType']) ? $data['landingZoneActionType'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['regions'] = isset($data['regions']) ? $data['regions'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['deployedVersion']) && (mb_strlen($this->container['deployedVersion']) > 64)) {
                $invalidProperties[] = "invalid value for 'deployedVersion', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['deployedVersion']) && (mb_strlen($this->container['deployedVersion']) < 1)) {
                $invalidProperties[] = "invalid value for 'deployedVersion', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['landingZoneStatus']) && (mb_strlen($this->container['landingZoneStatus']) > 64)) {
                $invalidProperties[] = "invalid value for 'landingZoneStatus', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['landingZoneStatus']) && (mb_strlen($this->container['landingZoneStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'landingZoneStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['percentageComplete']) && ($this->container['percentageComplete'] > 100)) {
                $invalidProperties[] = "invalid value for 'percentageComplete', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['percentageComplete']) && ($this->container['percentageComplete'] < 1)) {
                $invalidProperties[] = "invalid value for 'percentageComplete', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['landingZoneActionType']) && (mb_strlen($this->container['landingZoneActionType']) > 64)) {
                $invalidProperties[] = "invalid value for 'landingZoneActionType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['landingZoneActionType']) && (mb_strlen($this->container['landingZoneActionType']) < 1)) {
                $invalidProperties[] = "invalid value for 'landingZoneActionType', the character length must be bigger than or equal to 1.";
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
    * Gets deployedVersion
    *  部署的Landing Zone版本。
    *
    * @return string|null
    */
    public function getDeployedVersion()
    {
        return $this->container['deployedVersion'];
    }

    /**
    * Sets deployedVersion
    *
    * @param string|null $deployedVersion 部署的Landing Zone版本。
    *
    * @return $this
    */
    public function setDeployedVersion($deployedVersion)
    {
        $this->container['deployedVersion'] = $deployedVersion;
        return $this;
    }

    /**
    * Gets landingZoneStatus
    *  Landing Zone的设置状态，包括进行中，已完成。
    *
    * @return string|null
    */
    public function getLandingZoneStatus()
    {
        return $this->container['landingZoneStatus'];
    }

    /**
    * Sets landingZoneStatus
    *
    * @param string|null $landingZoneStatus Landing Zone的设置状态，包括进行中，已完成。
    *
    * @return $this
    */
    public function setLandingZoneStatus($landingZoneStatus)
    {
        $this->container['landingZoneStatus'] = $landingZoneStatus;
        return $this;
    }

    /**
    * Gets percentageComplete
    *  Landing Zone的完成进度。
    *
    * @return int|null
    */
    public function getPercentageComplete()
    {
        return $this->container['percentageComplete'];
    }

    /**
    * Sets percentageComplete
    *
    * @param int|null $percentageComplete Landing Zone的完成进度。
    *
    * @return $this
    */
    public function setPercentageComplete($percentageComplete)
    {
        $this->container['percentageComplete'] = $percentageComplete;
        return $this;
    }

    /**
    * Gets percentageDetails
    *  Landing Zone设置的详细进度信息。
    *
    * @return \HuaweiCloud\SDK\Rgc\V1\Model\PercentageDetail[]|null
    */
    public function getPercentageDetails()
    {
        return $this->container['percentageDetails'];
    }

    /**
    * Sets percentageDetails
    *
    * @param \HuaweiCloud\SDK\Rgc\V1\Model\PercentageDetail[]|null $percentageDetails Landing Zone设置的详细进度信息。
    *
    * @return $this
    */
    public function setPercentageDetails($percentageDetails)
    {
        $this->container['percentageDetails'] = $percentageDetails;
        return $this;
    }

    /**
    * Gets landingZoneActionType
    *  Landing Zone当前需要执行的动作。
    *
    * @return string|null
    */
    public function getLandingZoneActionType()
    {
        return $this->container['landingZoneActionType'];
    }

    /**
    * Sets landingZoneActionType
    *
    * @param string|null $landingZoneActionType Landing Zone当前需要执行的动作。
    *
    * @return $this
    */
    public function setLandingZoneActionType($landingZoneActionType)
    {
        $this->container['landingZoneActionType'] = $landingZoneActionType;
        return $this;
    }

    /**
    * Gets message
    *  Landing Zone错误消息。
    *
    * @return \HuaweiCloud\SDK\Rgc\V1\Model\LandingZoneErrorMessage[]|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param \HuaweiCloud\SDK\Rgc\V1\Model\LandingZoneErrorMessage[]|null $message Landing Zone错误消息。
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets regions
    *  纳管的区域信息。
    *
    * @return \HuaweiCloud\SDK\Rgc\V1\Model\RegionConfigurationList[]|null
    */
    public function getRegions()
    {
        return $this->container['regions'];
    }

    /**
    * Sets regions
    *
    * @param \HuaweiCloud\SDK\Rgc\V1\Model\RegionConfigurationList[]|null $regions 纳管的区域信息。
    *
    * @return $this
    */
    public function setRegions($regions)
    {
        $this->container['regions'] = $regions;
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

