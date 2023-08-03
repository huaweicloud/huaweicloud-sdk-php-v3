<?php

namespace HuaweiCloud\SDK\Mpc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InputSetting implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InputSetting';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * input  input
    * paneId  原视频的id,为整数类型数值字符串。用于匹配后面的布局配置。
    * audioPolicy  该视频采取的音频策略。DISCARD表示丢弃音频，合成的视频中不会出现该视频的音频。 RESERVE表示保留音频，合成的视频中会出现该视频音频。如果多个原视频配置了RESERVE，合成的视频文件的音频，是多个原 视频音频的混合。默认会丢弃音频。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'input' => '\HuaweiCloud\SDK\Mpc\V1\Model\ObsObjInfo',
            'paneId' => 'string',
            'audioPolicy' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * input  input
    * paneId  原视频的id,为整数类型数值字符串。用于匹配后面的布局配置。
    * audioPolicy  该视频采取的音频策略。DISCARD表示丢弃音频，合成的视频中不会出现该视频的音频。 RESERVE表示保留音频，合成的视频中会出现该视频音频。如果多个原视频配置了RESERVE，合成的视频文件的音频，是多个原 视频音频的混合。默认会丢弃音频。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'input' => null,
        'paneId' => null,
        'audioPolicy' => null
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
    * input  input
    * paneId  原视频的id,为整数类型数值字符串。用于匹配后面的布局配置。
    * audioPolicy  该视频采取的音频策略。DISCARD表示丢弃音频，合成的视频中不会出现该视频的音频。 RESERVE表示保留音频，合成的视频中会出现该视频音频。如果多个原视频配置了RESERVE，合成的视频文件的音频，是多个原 视频音频的混合。默认会丢弃音频。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'input' => 'input',
            'paneId' => 'pane_id',
            'audioPolicy' => 'audio_policy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * input  input
    * paneId  原视频的id,为整数类型数值字符串。用于匹配后面的布局配置。
    * audioPolicy  该视频采取的音频策略。DISCARD表示丢弃音频，合成的视频中不会出现该视频的音频。 RESERVE表示保留音频，合成的视频中会出现该视频音频。如果多个原视频配置了RESERVE，合成的视频文件的音频，是多个原 视频音频的混合。默认会丢弃音频。
    *
    * @var string[]
    */
    protected static $setters = [
            'input' => 'setInput',
            'paneId' => 'setPaneId',
            'audioPolicy' => 'setAudioPolicy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * input  input
    * paneId  原视频的id,为整数类型数值字符串。用于匹配后面的布局配置。
    * audioPolicy  该视频采取的音频策略。DISCARD表示丢弃音频，合成的视频中不会出现该视频的音频。 RESERVE表示保留音频，合成的视频中会出现该视频音频。如果多个原视频配置了RESERVE，合成的视频文件的音频，是多个原 视频音频的混合。默认会丢弃音频。
    *
    * @var string[]
    */
    protected static $getters = [
            'input' => 'getInput',
            'paneId' => 'getPaneId',
            'audioPolicy' => 'getAudioPolicy'
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
    const AUDIO_POLICY_DISCARD = 'DISCARD';
    const AUDIO_POLICY_RESERVE = 'RESERVE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAudioPolicyAllowableValues()
    {
        return [
            self::AUDIO_POLICY_DISCARD,
            self::AUDIO_POLICY_RESERVE,
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
        $this->container['input'] = isset($data['input']) ? $data['input'] : null;
        $this->container['paneId'] = isset($data['paneId']) ? $data['paneId'] : null;
        $this->container['audioPolicy'] = isset($data['audioPolicy']) ? $data['audioPolicy'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['input'] === null) {
            $invalidProperties[] = "'input' can't be null";
        }
        if ($this->container['paneId'] === null) {
            $invalidProperties[] = "'paneId' can't be null";
        }
            if ((mb_strlen($this->container['paneId']) > 32)) {
                $invalidProperties[] = "invalid value for 'paneId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['paneId']) < 0)) {
                $invalidProperties[] = "invalid value for 'paneId', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getAudioPolicyAllowableValues();
                if (!is_null($this->container['audioPolicy']) && !in_array($this->container['audioPolicy'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'audioPolicy', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['audioPolicy']) && (mb_strlen($this->container['audioPolicy']) > 32)) {
                $invalidProperties[] = "invalid value for 'audioPolicy', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['audioPolicy']) && (mb_strlen($this->container['audioPolicy']) < 0)) {
                $invalidProperties[] = "invalid value for 'audioPolicy', the character length must be bigger than or equal to 0.";
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
    * Gets input
    *  input
    *
    * @return \HuaweiCloud\SDK\Mpc\V1\Model\ObsObjInfo
    */
    public function getInput()
    {
        return $this->container['input'];
    }

    /**
    * Sets input
    *
    * @param \HuaweiCloud\SDK\Mpc\V1\Model\ObsObjInfo $input input
    *
    * @return $this
    */
    public function setInput($input)
    {
        $this->container['input'] = $input;
        return $this;
    }

    /**
    * Gets paneId
    *  原视频的id,为整数类型数值字符串。用于匹配后面的布局配置。
    *
    * @return string
    */
    public function getPaneId()
    {
        return $this->container['paneId'];
    }

    /**
    * Sets paneId
    *
    * @param string $paneId 原视频的id,为整数类型数值字符串。用于匹配后面的布局配置。
    *
    * @return $this
    */
    public function setPaneId($paneId)
    {
        $this->container['paneId'] = $paneId;
        return $this;
    }

    /**
    * Gets audioPolicy
    *  该视频采取的音频策略。DISCARD表示丢弃音频，合成的视频中不会出现该视频的音频。 RESERVE表示保留音频，合成的视频中会出现该视频音频。如果多个原视频配置了RESERVE，合成的视频文件的音频，是多个原 视频音频的混合。默认会丢弃音频。
    *
    * @return string|null
    */
    public function getAudioPolicy()
    {
        return $this->container['audioPolicy'];
    }

    /**
    * Sets audioPolicy
    *
    * @param string|null $audioPolicy 该视频采取的音频策略。DISCARD表示丢弃音频，合成的视频中不会出现该视频的音频。 RESERVE表示保留音频，合成的视频中会出现该视频音频。如果多个原视频配置了RESERVE，合成的视频文件的音频，是多个原 视频音频的混合。默认会丢弃音频。
    *
    * @return $this
    */
    public function setAudioPolicy($audioPolicy)
    {
        $this->container['audioPolicy'] = $audioPolicy;
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

