<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OutputInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OutputInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * faceAddr  面部表情输入地址。
    * bodyAddr  身体动作输入地址。
    * audioAddr  音频输入地址。
    * sessionId  会话ID。
    * outputDataVersion  输出数据的格式版本，如请求中无此参数，则输出数据格式为1.0，可选值有： 1.0: 对应的输出为：         动作数据：75个骨骼旋转值         表情数据：52ARkit表情及参数 2.0: 对应的输出为：         动作数据：55个骨骼旋转值+骨骼3D坐标         表情数据：178个控制器的数据
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'faceAddr' => 'string',
            'bodyAddr' => 'string',
            'audioAddr' => 'string',
            'sessionId' => 'int',
            'outputDataVersion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * faceAddr  面部表情输入地址。
    * bodyAddr  身体动作输入地址。
    * audioAddr  音频输入地址。
    * sessionId  会话ID。
    * outputDataVersion  输出数据的格式版本，如请求中无此参数，则输出数据格式为1.0，可选值有： 1.0: 对应的输出为：         动作数据：75个骨骼旋转值         表情数据：52ARkit表情及参数 2.0: 对应的输出为：         动作数据：55个骨骼旋转值+骨骼3D坐标         表情数据：178个控制器的数据
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'faceAddr' => null,
        'bodyAddr' => null,
        'audioAddr' => null,
        'sessionId' => null,
        'outputDataVersion' => null
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
    * faceAddr  面部表情输入地址。
    * bodyAddr  身体动作输入地址。
    * audioAddr  音频输入地址。
    * sessionId  会话ID。
    * outputDataVersion  输出数据的格式版本，如请求中无此参数，则输出数据格式为1.0，可选值有： 1.0: 对应的输出为：         动作数据：75个骨骼旋转值         表情数据：52ARkit表情及参数 2.0: 对应的输出为：         动作数据：55个骨骼旋转值+骨骼3D坐标         表情数据：178个控制器的数据
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'faceAddr' => 'face_addr',
            'bodyAddr' => 'body_addr',
            'audioAddr' => 'audio_addr',
            'sessionId' => 'session_id',
            'outputDataVersion' => 'output_data_version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * faceAddr  面部表情输入地址。
    * bodyAddr  身体动作输入地址。
    * audioAddr  音频输入地址。
    * sessionId  会话ID。
    * outputDataVersion  输出数据的格式版本，如请求中无此参数，则输出数据格式为1.0，可选值有： 1.0: 对应的输出为：         动作数据：75个骨骼旋转值         表情数据：52ARkit表情及参数 2.0: 对应的输出为：         动作数据：55个骨骼旋转值+骨骼3D坐标         表情数据：178个控制器的数据
    *
    * @var string[]
    */
    protected static $setters = [
            'faceAddr' => 'setFaceAddr',
            'bodyAddr' => 'setBodyAddr',
            'audioAddr' => 'setAudioAddr',
            'sessionId' => 'setSessionId',
            'outputDataVersion' => 'setOutputDataVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * faceAddr  面部表情输入地址。
    * bodyAddr  身体动作输入地址。
    * audioAddr  音频输入地址。
    * sessionId  会话ID。
    * outputDataVersion  输出数据的格式版本，如请求中无此参数，则输出数据格式为1.0，可选值有： 1.0: 对应的输出为：         动作数据：75个骨骼旋转值         表情数据：52ARkit表情及参数 2.0: 对应的输出为：         动作数据：55个骨骼旋转值+骨骼3D坐标         表情数据：178个控制器的数据
    *
    * @var string[]
    */
    protected static $getters = [
            'faceAddr' => 'getFaceAddr',
            'bodyAddr' => 'getBodyAddr',
            'audioAddr' => 'getAudioAddr',
            'sessionId' => 'getSessionId',
            'outputDataVersion' => 'getOutputDataVersion'
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
        $this->container['faceAddr'] = isset($data['faceAddr']) ? $data['faceAddr'] : null;
        $this->container['bodyAddr'] = isset($data['bodyAddr']) ? $data['bodyAddr'] : null;
        $this->container['audioAddr'] = isset($data['audioAddr']) ? $data['audioAddr'] : null;
        $this->container['sessionId'] = isset($data['sessionId']) ? $data['sessionId'] : null;
        $this->container['outputDataVersion'] = isset($data['outputDataVersion']) ? $data['outputDataVersion'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['faceAddr']) && (mb_strlen($this->container['faceAddr']) > 2048)) {
                $invalidProperties[] = "invalid value for 'faceAddr', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['faceAddr']) && (mb_strlen($this->container['faceAddr']) < 1)) {
                $invalidProperties[] = "invalid value for 'faceAddr', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['bodyAddr']) && (mb_strlen($this->container['bodyAddr']) > 2048)) {
                $invalidProperties[] = "invalid value for 'bodyAddr', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['bodyAddr']) && (mb_strlen($this->container['bodyAddr']) < 1)) {
                $invalidProperties[] = "invalid value for 'bodyAddr', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['audioAddr']) && (mb_strlen($this->container['audioAddr']) > 2048)) {
                $invalidProperties[] = "invalid value for 'audioAddr', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['audioAddr']) && (mb_strlen($this->container['audioAddr']) < 1)) {
                $invalidProperties[] = "invalid value for 'audioAddr', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['sessionId']) && ($this->container['sessionId'] > 4294967295)) {
                $invalidProperties[] = "invalid value for 'sessionId', must be smaller than or equal to 4294967295.";
            }
            if (!is_null($this->container['sessionId']) && ($this->container['sessionId'] < 0)) {
                $invalidProperties[] = "invalid value for 'sessionId', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['outputDataVersion']) && (mb_strlen($this->container['outputDataVersion']) > 8)) {
                $invalidProperties[] = "invalid value for 'outputDataVersion', the character length must be smaller than or equal to 8.";
            }
            if (!is_null($this->container['outputDataVersion']) && (mb_strlen($this->container['outputDataVersion']) < 1)) {
                $invalidProperties[] = "invalid value for 'outputDataVersion', the character length must be bigger than or equal to 1.";
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
    * Gets faceAddr
    *  面部表情输入地址。
    *
    * @return string|null
    */
    public function getFaceAddr()
    {
        return $this->container['faceAddr'];
    }

    /**
    * Sets faceAddr
    *
    * @param string|null $faceAddr 面部表情输入地址。
    *
    * @return $this
    */
    public function setFaceAddr($faceAddr)
    {
        $this->container['faceAddr'] = $faceAddr;
        return $this;
    }

    /**
    * Gets bodyAddr
    *  身体动作输入地址。
    *
    * @return string|null
    */
    public function getBodyAddr()
    {
        return $this->container['bodyAddr'];
    }

    /**
    * Sets bodyAddr
    *
    * @param string|null $bodyAddr 身体动作输入地址。
    *
    * @return $this
    */
    public function setBodyAddr($bodyAddr)
    {
        $this->container['bodyAddr'] = $bodyAddr;
        return $this;
    }

    /**
    * Gets audioAddr
    *  音频输入地址。
    *
    * @return string|null
    */
    public function getAudioAddr()
    {
        return $this->container['audioAddr'];
    }

    /**
    * Sets audioAddr
    *
    * @param string|null $audioAddr 音频输入地址。
    *
    * @return $this
    */
    public function setAudioAddr($audioAddr)
    {
        $this->container['audioAddr'] = $audioAddr;
        return $this;
    }

    /**
    * Gets sessionId
    *  会话ID。
    *
    * @return int|null
    */
    public function getSessionId()
    {
        return $this->container['sessionId'];
    }

    /**
    * Sets sessionId
    *
    * @param int|null $sessionId 会话ID。
    *
    * @return $this
    */
    public function setSessionId($sessionId)
    {
        $this->container['sessionId'] = $sessionId;
        return $this;
    }

    /**
    * Gets outputDataVersion
    *  输出数据的格式版本，如请求中无此参数，则输出数据格式为1.0，可选值有： 1.0: 对应的输出为：         动作数据：75个骨骼旋转值         表情数据：52ARkit表情及参数 2.0: 对应的输出为：         动作数据：55个骨骼旋转值+骨骼3D坐标         表情数据：178个控制器的数据
    *
    * @return string|null
    */
    public function getOutputDataVersion()
    {
        return $this->container['outputDataVersion'];
    }

    /**
    * Sets outputDataVersion
    *
    * @param string|null $outputDataVersion 输出数据的格式版本，如请求中无此参数，则输出数据格式为1.0，可选值有： 1.0: 对应的输出为：         动作数据：75个骨骼旋转值         表情数据：52ARkit表情及参数 2.0: 对应的输出为：         动作数据：55个骨骼旋转值+骨骼3D坐标         表情数据：178个控制器的数据
    *
    * @return $this
    */
    public function setOutputDataVersion($outputDataVersion)
    {
        $this->container['outputDataVersion'] = $outputDataVersion;
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

