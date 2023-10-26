<?php

namespace HuaweiCloud\SDK\Cdm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CdmStopClusterReqStop implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CdmStopClusterReq_stop';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * stopMode  关机类型： - IMMEDIATELY：立即关机。 - GRACEFULLY：优雅关机。
    * delayTime  关机时延，仅在stopMode为“GRACEFULLY”生效，单位：秒。该值为-1时，表示等待所有作业完成，并停止接受新作业。该值为大于0的任意值表示等待该时长后关机，并停止接受新作业。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'stopMode' => 'string',
            'delayTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * stopMode  关机类型： - IMMEDIATELY：立即关机。 - GRACEFULLY：优雅关机。
    * delayTime  关机时延，仅在stopMode为“GRACEFULLY”生效，单位：秒。该值为-1时，表示等待所有作业完成，并停止接受新作业。该值为大于0的任意值表示等待该时长后关机，并停止接受新作业。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'stopMode' => null,
        'delayTime' => 'int32'
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
    * stopMode  关机类型： - IMMEDIATELY：立即关机。 - GRACEFULLY：优雅关机。
    * delayTime  关机时延，仅在stopMode为“GRACEFULLY”生效，单位：秒。该值为-1时，表示等待所有作业完成，并停止接受新作业。该值为大于0的任意值表示等待该时长后关机，并停止接受新作业。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'stopMode' => 'stopMode',
            'delayTime' => 'delayTime'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * stopMode  关机类型： - IMMEDIATELY：立即关机。 - GRACEFULLY：优雅关机。
    * delayTime  关机时延，仅在stopMode为“GRACEFULLY”生效，单位：秒。该值为-1时，表示等待所有作业完成，并停止接受新作业。该值为大于0的任意值表示等待该时长后关机，并停止接受新作业。
    *
    * @var string[]
    */
    protected static $setters = [
            'stopMode' => 'setStopMode',
            'delayTime' => 'setDelayTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * stopMode  关机类型： - IMMEDIATELY：立即关机。 - GRACEFULLY：优雅关机。
    * delayTime  关机时延，仅在stopMode为“GRACEFULLY”生效，单位：秒。该值为-1时，表示等待所有作业完成，并停止接受新作业。该值为大于0的任意值表示等待该时长后关机，并停止接受新作业。
    *
    * @var string[]
    */
    protected static $getters = [
            'stopMode' => 'getStopMode',
            'delayTime' => 'getDelayTime'
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
    const STOP_MODE_IMMEDIATELY = 'IMMEDIATELY';
    const STOP_MODE_GRACEFULLY = 'GRACEFULLY';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStopModeAllowableValues()
    {
        return [
            self::STOP_MODE_IMMEDIATELY,
            self::STOP_MODE_GRACEFULLY,
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
        $this->container['stopMode'] = isset($data['stopMode']) ? $data['stopMode'] : null;
        $this->container['delayTime'] = isset($data['delayTime']) ? $data['delayTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['stopMode'] === null) {
            $invalidProperties[] = "'stopMode' can't be null";
        }
            $allowedValues = $this->getStopModeAllowableValues();
                if (!is_null($this->container['stopMode']) && !in_array($this->container['stopMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'stopMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets stopMode
    *  关机类型： - IMMEDIATELY：立即关机。 - GRACEFULLY：优雅关机。
    *
    * @return string
    */
    public function getStopMode()
    {
        return $this->container['stopMode'];
    }

    /**
    * Sets stopMode
    *
    * @param string $stopMode 关机类型： - IMMEDIATELY：立即关机。 - GRACEFULLY：优雅关机。
    *
    * @return $this
    */
    public function setStopMode($stopMode)
    {
        $this->container['stopMode'] = $stopMode;
        return $this;
    }

    /**
    * Gets delayTime
    *  关机时延，仅在stopMode为“GRACEFULLY”生效，单位：秒。该值为-1时，表示等待所有作业完成，并停止接受新作业。该值为大于0的任意值表示等待该时长后关机，并停止接受新作业。
    *
    * @return int|null
    */
    public function getDelayTime()
    {
        return $this->container['delayTime'];
    }

    /**
    * Sets delayTime
    *
    * @param int|null $delayTime 关机时延，仅在stopMode为“GRACEFULLY”生效，单位：秒。该值为-1时，表示等待所有作业完成，并停止接受新作业。该值为大于0的任意值表示等待该时长后关机，并停止接受新作业。
    *
    * @return $this
    */
    public function setDelayTime($delayTime)
    {
        $this->container['delayTime'] = $delayTime;
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

