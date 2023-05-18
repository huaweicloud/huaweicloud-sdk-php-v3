<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowAudienceCountInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowAudienceCountInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * showAudienceMode  观众显示策略。 * 0：不显示 * 1：倍增显示与会人数。基于实时与会人数或累计与会人次（假设为N），可以再进行倍增设置。支持设置倍增倍数X和基础人数Y，设置后，显示的人数为：N*X+Y
    * baseAudienceCount  基础人数。范围是0~10000。
    * multiple  倍增倍数。范围是1~10, 支持设置到小数点后1位。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'showAudienceMode' => 'int',
            'baseAudienceCount' => 'int',
            'multiple' => 'double'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * showAudienceMode  观众显示策略。 * 0：不显示 * 1：倍增显示与会人数。基于实时与会人数或累计与会人次（假设为N），可以再进行倍增设置。支持设置倍增倍数X和基础人数Y，设置后，显示的人数为：N*X+Y
    * baseAudienceCount  基础人数。范围是0~10000。
    * multiple  倍增倍数。范围是1~10, 支持设置到小数点后1位。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'showAudienceMode' => 'int32',
        'baseAudienceCount' => 'int32',
        'multiple' => 'double'
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
    * showAudienceMode  观众显示策略。 * 0：不显示 * 1：倍增显示与会人数。基于实时与会人数或累计与会人次（假设为N），可以再进行倍增设置。支持设置倍增倍数X和基础人数Y，设置后，显示的人数为：N*X+Y
    * baseAudienceCount  基础人数。范围是0~10000。
    * multiple  倍增倍数。范围是1~10, 支持设置到小数点后1位。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'showAudienceMode' => 'showAudienceMode',
            'baseAudienceCount' => 'baseAudienceCount',
            'multiple' => 'multiple'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * showAudienceMode  观众显示策略。 * 0：不显示 * 1：倍增显示与会人数。基于实时与会人数或累计与会人次（假设为N），可以再进行倍增设置。支持设置倍增倍数X和基础人数Y，设置后，显示的人数为：N*X+Y
    * baseAudienceCount  基础人数。范围是0~10000。
    * multiple  倍增倍数。范围是1~10, 支持设置到小数点后1位。
    *
    * @var string[]
    */
    protected static $setters = [
            'showAudienceMode' => 'setShowAudienceMode',
            'baseAudienceCount' => 'setBaseAudienceCount',
            'multiple' => 'setMultiple'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * showAudienceMode  观众显示策略。 * 0：不显示 * 1：倍增显示与会人数。基于实时与会人数或累计与会人次（假设为N），可以再进行倍增设置。支持设置倍增倍数X和基础人数Y，设置后，显示的人数为：N*X+Y
    * baseAudienceCount  基础人数。范围是0~10000。
    * multiple  倍增倍数。范围是1~10, 支持设置到小数点后1位。
    *
    * @var string[]
    */
    protected static $getters = [
            'showAudienceMode' => 'getShowAudienceMode',
            'baseAudienceCount' => 'getBaseAudienceCount',
            'multiple' => 'getMultiple'
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
        $this->container['showAudienceMode'] = isset($data['showAudienceMode']) ? $data['showAudienceMode'] : null;
        $this->container['baseAudienceCount'] = isset($data['baseAudienceCount']) ? $data['baseAudienceCount'] : null;
        $this->container['multiple'] = isset($data['multiple']) ? $data['multiple'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['showAudienceMode']) && ($this->container['showAudienceMode'] > 1)) {
                $invalidProperties[] = "invalid value for 'showAudienceMode', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['showAudienceMode']) && ($this->container['showAudienceMode'] < 0)) {
                $invalidProperties[] = "invalid value for 'showAudienceMode', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['baseAudienceCount']) && ($this->container['baseAudienceCount'] > 10000)) {
                $invalidProperties[] = "invalid value for 'baseAudienceCount', must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['baseAudienceCount']) && ($this->container['baseAudienceCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'baseAudienceCount', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['multiple']) && ($this->container['multiple'] > 1E+1)) {
                $invalidProperties[] = "invalid value for 'multiple', must be smaller than or equal to 1E+1.";
            }
            if (!is_null($this->container['multiple']) && ($this->container['multiple'] < 1)) {
                $invalidProperties[] = "invalid value for 'multiple', must be bigger than or equal to 1.";
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
    * Gets showAudienceMode
    *  观众显示策略。 * 0：不显示 * 1：倍增显示与会人数。基于实时与会人数或累计与会人次（假设为N），可以再进行倍增设置。支持设置倍增倍数X和基础人数Y，设置后，显示的人数为：N*X+Y
    *
    * @return int|null
    */
    public function getShowAudienceMode()
    {
        return $this->container['showAudienceMode'];
    }

    /**
    * Sets showAudienceMode
    *
    * @param int|null $showAudienceMode 观众显示策略。 * 0：不显示 * 1：倍增显示与会人数。基于实时与会人数或累计与会人次（假设为N），可以再进行倍增设置。支持设置倍增倍数X和基础人数Y，设置后，显示的人数为：N*X+Y
    *
    * @return $this
    */
    public function setShowAudienceMode($showAudienceMode)
    {
        $this->container['showAudienceMode'] = $showAudienceMode;
        return $this;
    }

    /**
    * Gets baseAudienceCount
    *  基础人数。范围是0~10000。
    *
    * @return int|null
    */
    public function getBaseAudienceCount()
    {
        return $this->container['baseAudienceCount'];
    }

    /**
    * Sets baseAudienceCount
    *
    * @param int|null $baseAudienceCount 基础人数。范围是0~10000。
    *
    * @return $this
    */
    public function setBaseAudienceCount($baseAudienceCount)
    {
        $this->container['baseAudienceCount'] = $baseAudienceCount;
        return $this;
    }

    /**
    * Gets multiple
    *  倍增倍数。范围是1~10, 支持设置到小数点后1位。
    *
    * @return double|null
    */
    public function getMultiple()
    {
        return $this->container['multiple'];
    }

    /**
    * Sets multiple
    *
    * @param double|null $multiple 倍增倍数。范围是1~10, 支持设置到小数点后1位。
    *
    * @return $this
    */
    public function setMultiple($multiple)
    {
        $this->container['multiple'] = $multiple;
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

