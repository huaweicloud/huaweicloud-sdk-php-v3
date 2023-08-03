<?php

namespace HuaweiCloud\SDK\Mpc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VideoProcess implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VideoProcess';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hlsInitCount  需要单独设置时长的HLS起始分片数量。与hls_init_interval配合使用，设置前面hls_init_count个HLS分片时长。 为0表示不单独配置时长。
    * hlsInitInterval  表示前面hls_init_count个HLS分片的时长,hls_init_count不为0时，该字段才起作用。
    * rotate  视频顺时针旋转角度。  - 0：表示不旋转 - 1：表示顺时针旋转90度 - 2：表示顺时针旋转180度 - 3：表示顺时针旋转270度
    * adaptation  长短边自适应控制字段： - SHORT：表示短边自适应 - LONG：表示长边自适应 - NONE：表示不自适应
    * upsample  是否开启上采样，如支持从480P的片源转为720P，可取值为:  - 0：表示上采样关闭， - 1：表示上采样开启.
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hlsInitCount' => 'int',
            'hlsInitInterval' => 'int',
            'rotate' => 'int',
            'adaptation' => 'string',
            'upsample' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hlsInitCount  需要单独设置时长的HLS起始分片数量。与hls_init_interval配合使用，设置前面hls_init_count个HLS分片时长。 为0表示不单独配置时长。
    * hlsInitInterval  表示前面hls_init_count个HLS分片的时长,hls_init_count不为0时，该字段才起作用。
    * rotate  视频顺时针旋转角度。  - 0：表示不旋转 - 1：表示顺时针旋转90度 - 2：表示顺时针旋转180度 - 3：表示顺时针旋转270度
    * adaptation  长短边自适应控制字段： - SHORT：表示短边自适应 - LONG：表示长边自适应 - NONE：表示不自适应
    * upsample  是否开启上采样，如支持从480P的片源转为720P，可取值为:  - 0：表示上采样关闭， - 1：表示上采样开启.
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hlsInitCount' => 'int32',
        'hlsInitInterval' => 'int32',
        'rotate' => 'int32',
        'adaptation' => null,
        'upsample' => 'int32'
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
    * hlsInitCount  需要单独设置时长的HLS起始分片数量。与hls_init_interval配合使用，设置前面hls_init_count个HLS分片时长。 为0表示不单独配置时长。
    * hlsInitInterval  表示前面hls_init_count个HLS分片的时长,hls_init_count不为0时，该字段才起作用。
    * rotate  视频顺时针旋转角度。  - 0：表示不旋转 - 1：表示顺时针旋转90度 - 2：表示顺时针旋转180度 - 3：表示顺时针旋转270度
    * adaptation  长短边自适应控制字段： - SHORT：表示短边自适应 - LONG：表示长边自适应 - NONE：表示不自适应
    * upsample  是否开启上采样，如支持从480P的片源转为720P，可取值为:  - 0：表示上采样关闭， - 1：表示上采样开启.
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hlsInitCount' => 'hls_init_count',
            'hlsInitInterval' => 'hls_init_interval',
            'rotate' => 'rotate',
            'adaptation' => 'adaptation',
            'upsample' => 'upsample'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hlsInitCount  需要单独设置时长的HLS起始分片数量。与hls_init_interval配合使用，设置前面hls_init_count个HLS分片时长。 为0表示不单独配置时长。
    * hlsInitInterval  表示前面hls_init_count个HLS分片的时长,hls_init_count不为0时，该字段才起作用。
    * rotate  视频顺时针旋转角度。  - 0：表示不旋转 - 1：表示顺时针旋转90度 - 2：表示顺时针旋转180度 - 3：表示顺时针旋转270度
    * adaptation  长短边自适应控制字段： - SHORT：表示短边自适应 - LONG：表示长边自适应 - NONE：表示不自适应
    * upsample  是否开启上采样，如支持从480P的片源转为720P，可取值为:  - 0：表示上采样关闭， - 1：表示上采样开启.
    *
    * @var string[]
    */
    protected static $setters = [
            'hlsInitCount' => 'setHlsInitCount',
            'hlsInitInterval' => 'setHlsInitInterval',
            'rotate' => 'setRotate',
            'adaptation' => 'setAdaptation',
            'upsample' => 'setUpsample'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hlsInitCount  需要单独设置时长的HLS起始分片数量。与hls_init_interval配合使用，设置前面hls_init_count个HLS分片时长。 为0表示不单独配置时长。
    * hlsInitInterval  表示前面hls_init_count个HLS分片的时长,hls_init_count不为0时，该字段才起作用。
    * rotate  视频顺时针旋转角度。  - 0：表示不旋转 - 1：表示顺时针旋转90度 - 2：表示顺时针旋转180度 - 3：表示顺时针旋转270度
    * adaptation  长短边自适应控制字段： - SHORT：表示短边自适应 - LONG：表示长边自适应 - NONE：表示不自适应
    * upsample  是否开启上采样，如支持从480P的片源转为720P，可取值为:  - 0：表示上采样关闭， - 1：表示上采样开启.
    *
    * @var string[]
    */
    protected static $getters = [
            'hlsInitCount' => 'getHlsInitCount',
            'hlsInitInterval' => 'getHlsInitInterval',
            'rotate' => 'getRotate',
            'adaptation' => 'getAdaptation',
            'upsample' => 'getUpsample'
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
    const ADAPTATION_SHORT = 'SHORT';
    const ADAPTATION_LONG = 'LONG';
    const ADAPTATION_NONE = 'NONE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAdaptationAllowableValues()
    {
        return [
            self::ADAPTATION_SHORT,
            self::ADAPTATION_LONG,
            self::ADAPTATION_NONE,
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
        $this->container['hlsInitCount'] = isset($data['hlsInitCount']) ? $data['hlsInitCount'] : null;
        $this->container['hlsInitInterval'] = isset($data['hlsInitInterval']) ? $data['hlsInitInterval'] : null;
        $this->container['rotate'] = isset($data['rotate']) ? $data['rotate'] : null;
        $this->container['adaptation'] = isset($data['adaptation']) ? $data['adaptation'] : null;
        $this->container['upsample'] = isset($data['upsample']) ? $data['upsample'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['hlsInitCount']) && ($this->container['hlsInitCount'] > 10)) {
                $invalidProperties[] = "invalid value for 'hlsInitCount', must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['hlsInitCount']) && ($this->container['hlsInitCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'hlsInitCount', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hlsInitInterval']) && ($this->container['hlsInitInterval'] > 10)) {
                $invalidProperties[] = "invalid value for 'hlsInitInterval', must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['hlsInitInterval']) && ($this->container['hlsInitInterval'] < 2)) {
                $invalidProperties[] = "invalid value for 'hlsInitInterval', must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['rotate']) && ($this->container['rotate'] > 4)) {
                $invalidProperties[] = "invalid value for 'rotate', must be smaller than or equal to 4.";
            }
            if (!is_null($this->container['rotate']) && ($this->container['rotate'] < 0)) {
                $invalidProperties[] = "invalid value for 'rotate', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getAdaptationAllowableValues();
                if (!is_null($this->container['adaptation']) && !in_array($this->container['adaptation'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'adaptation', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['adaptation']) && (mb_strlen($this->container['adaptation']) > 16)) {
                $invalidProperties[] = "invalid value for 'adaptation', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['adaptation']) && (mb_strlen($this->container['adaptation']) < 0)) {
                $invalidProperties[] = "invalid value for 'adaptation', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['upsample']) && ($this->container['upsample'] > 1)) {
                $invalidProperties[] = "invalid value for 'upsample', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['upsample']) && ($this->container['upsample'] < 0)) {
                $invalidProperties[] = "invalid value for 'upsample', must be bigger than or equal to 0.";
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
    * Gets hlsInitCount
    *  需要单独设置时长的HLS起始分片数量。与hls_init_interval配合使用，设置前面hls_init_count个HLS分片时长。 为0表示不单独配置时长。
    *
    * @return int|null
    */
    public function getHlsInitCount()
    {
        return $this->container['hlsInitCount'];
    }

    /**
    * Sets hlsInitCount
    *
    * @param int|null $hlsInitCount 需要单独设置时长的HLS起始分片数量。与hls_init_interval配合使用，设置前面hls_init_count个HLS分片时长。 为0表示不单独配置时长。
    *
    * @return $this
    */
    public function setHlsInitCount($hlsInitCount)
    {
        $this->container['hlsInitCount'] = $hlsInitCount;
        return $this;
    }

    /**
    * Gets hlsInitInterval
    *  表示前面hls_init_count个HLS分片的时长,hls_init_count不为0时，该字段才起作用。
    *
    * @return int|null
    */
    public function getHlsInitInterval()
    {
        return $this->container['hlsInitInterval'];
    }

    /**
    * Sets hlsInitInterval
    *
    * @param int|null $hlsInitInterval 表示前面hls_init_count个HLS分片的时长,hls_init_count不为0时，该字段才起作用。
    *
    * @return $this
    */
    public function setHlsInitInterval($hlsInitInterval)
    {
        $this->container['hlsInitInterval'] = $hlsInitInterval;
        return $this;
    }

    /**
    * Gets rotate
    *  视频顺时针旋转角度。  - 0：表示不旋转 - 1：表示顺时针旋转90度 - 2：表示顺时针旋转180度 - 3：表示顺时针旋转270度
    *
    * @return int|null
    */
    public function getRotate()
    {
        return $this->container['rotate'];
    }

    /**
    * Sets rotate
    *
    * @param int|null $rotate 视频顺时针旋转角度。  - 0：表示不旋转 - 1：表示顺时针旋转90度 - 2：表示顺时针旋转180度 - 3：表示顺时针旋转270度
    *
    * @return $this
    */
    public function setRotate($rotate)
    {
        $this->container['rotate'] = $rotate;
        return $this;
    }

    /**
    * Gets adaptation
    *  长短边自适应控制字段： - SHORT：表示短边自适应 - LONG：表示长边自适应 - NONE：表示不自适应
    *
    * @return string|null
    */
    public function getAdaptation()
    {
        return $this->container['adaptation'];
    }

    /**
    * Sets adaptation
    *
    * @param string|null $adaptation 长短边自适应控制字段： - SHORT：表示短边自适应 - LONG：表示长边自适应 - NONE：表示不自适应
    *
    * @return $this
    */
    public function setAdaptation($adaptation)
    {
        $this->container['adaptation'] = $adaptation;
        return $this;
    }

    /**
    * Gets upsample
    *  是否开启上采样，如支持从480P的片源转为720P，可取值为:  - 0：表示上采样关闭， - 1：表示上采样开启.
    *
    * @return int|null
    */
    public function getUpsample()
    {
        return $this->container['upsample'];
    }

    /**
    * Sets upsample
    *
    * @param int|null $upsample 是否开启上采样，如支持从480P的片源转为720P，可取值为:  - 0：表示上采样关闭， - 1：表示上采样开启.
    *
    * @return $this
    */
    public function setUpsample($upsample)
    {
        $this->container['upsample'] = $upsample;
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

